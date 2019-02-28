(function(window, $) {
    'use strict';
    window.HealthStream = window.HealthStream || {};
    var healthStream = window.HealthStream;
    healthStream.scheduling = healthStream.scheduling || {};
    healthStream.scheduling.index = {};

    var uiRes = {};

    var guidEmpty = '';

    var peopleFilter = [],
        resourceFilter = [];

    var eventCalendar = healthStream.scheduling.eventCalendar;

    // sets up the event calendar for the selected date ranges and event filters
    function setupEventCalendarView() {
        $("a#btnUpdate").addClass("hidden");
        $("#loading").center().show();
        if (peopleFilter.length + resourceFilter.length) {
            eventCalendar.settings.noEventsText = uiRes.noScheduledEventsWithFilterMessage;
            eventCalendar.settings.filteredResults = true;
        } else {
            eventCalendar.settings.noEventsText = uiRes.noScheduledEventsMessage;
            eventCalendar.settings.filteredResults = false;
        }
        $.ajax({
            url: "FilterEvents",
            data: {
                "startDate": moment($("div.day:first").data("date"), "YYYYMMDD").format("YYYY-MM-DD"),
                "endDate": moment($("div.day:last").data("date"), "YYYYMMDD").format("YYYY-MM-DD"),
                "peopleFilter": JSON.stringify(peopleFilter),
                "resourceFilter": JSON.stringify(resourceFilter),
                "__RequestVerificationToken": uiRes.antiForgeryToken
            },
            type: "POST",
            success: function(data) {
                var events = [];
                for (var i = 0; i < data.length; i++) {
                    events.push({
                        id: data[i]["Item1"],
                        title: data[i]["Item2"],
                        start: moment(data[i]["Item3"]),
                        end: moment(data[i]["Item4"]),
                        resourcecolor: data[i]["Item5"],
                        useradmincolor: data[i]["Item6"]
                    });
                }
                eventCalendar.updateEvents(events);
            },
            complete: function() {
                $("#loading").hide();
            }
        });
    }

    // switches the position of Refine events div to show it in modal for mobile and to reset it to normal position
    function switchRefineEventsPosition(source, target) {
        $(target + " > div").replaceWith($("#divRefineEvents"));
        $(source).html("<div></div>");
    }

    // Adds the selected filter criteria to the page just below its corresponding event filter textbox
    function addFilterCriteriaTag(displayText, id, targetId, containerArray, object, eventFilterPresetItemId) {

        var containerElement = $("#" + targetId);

        var newFilterLink = $(document.createElement("a"));

        if ($(containerElement).find("a[id]").length >= 5 && $(containerElement).find("a.showAllEventCriteria").length == 0) {
            var showAllLink = $(document.createElement("a"));
            showAllLink.html(uiRes.showAll + "...");
            showAllLink.addClass("small showAllEventCriteria");
            showAllLink.attr("href", "#");
            containerElement.append(" " + $(showAllLink)[0].outerHTML);
        }

        if ($(containerElement).find("a.showAllEventCriteria").length && !($(containerElement).find("a.showAllEventCriteria").hasClass("hidden"))) {
            newFilterLink.addClass("hidden");
        }

        newFilterLink.html(displayText + " <i class='fa fa-times'></i>");
        newFilterLink.addClass("tag");
        newFilterLink.attr("href", "#");
        newFilterLink.attr("id", "ahref" + id);

        if (eventFilterPresetItemId) {
            newFilterLink.attr("data-eventFilterPresetItemId", eventFilterPresetItemId);
        }

        containerElement.append(" " + $(newFilterLink)[0].outerHTML);

        containerArray.push(object);

        $("a#btnUpdate").removeClass("hidden");
    }

    function removePeopleFilter(userAdminId, thisElement) {
        var indx = -1;
        for (var i = 0; i < peopleFilter.length; i++) {
            if (peopleFilter[i].UserAdminId == userAdminId) {
                indx = i;
                break;
            }
        }
        peopleFilter.splice(indx, 1);
        thisElement.remove();
        $("a#btnUpdate").removeClass("hidden");
    }

    function removeResourceFilter(resourceId, thisElement) {
        var indx = -1;
        for (var i = 0; i < resourceFilter.length; i++) {
            if (resourceFilter[i].ResourceId == resourceId) {
                indx = i;
                break;
            }
        }
        resourceFilter.splice(indx, 1);
        thisElement.remove();
        $("a#btnUpdate").removeClass("hidden");
    }

    function savePreset(savePresetForm) {
        var saveSuccess = false;
        var lastSavedId = guidEmpty;
        var growlMessage = "";
        savePresetForm.find("input[name='EventFilterPresetName']").remove();
        savePresetForm.find("input[name='__RequestVerificationToken']").remove();
        HealthStream.utilities.addHiddenFieldToForm("__RequestVerificationToken", uiRes.antiForgeryToken, savePresetForm);
        HealthStream.utilities.addHiddenFieldToForm("EventFilterPresetName", $("div#modalFilterPreset input[name='EventFilterPresetName']").val(), savePresetForm);
        $("div#modalFilterPreset div.modal-body > section > div.help-block").remove();
        var isDeleted = savePresetForm.find("input[name='IsDeleted']").val();
        $.ajax({
            url: "SavePreset",
            data: savePresetForm.serialize(),
            async: false,
            type: "POST",
            success: function(data) {
                if (lastSavedId.length == data[0].length) {
                    lastSavedId = data[0];
                    growlMessage = data[1];
                    if (isDeleted) {
                        $("a#aManagePreset").html(uiRes.saveNewPreset);
                        $("select#inputPresets > option[value='" + savePresetForm.find("input[name='EventFilterPresetId']").val() + "']").remove();
                        if ($("select#inputPresets > option[value]:not([value=''])").length) {
                            $("select#inputPresets > option:first").prop("selected", true).change();
                        } else {
                            $("select#inputPresets").html("<option>" + uiRes.noPresets + "</option>").prop("disabled", true).change();
                        }
                    } else {
                        $("a#aManagePreset").html(uiRes.managePreset);
                        var existingId = savePresetForm.find("input[name='EventFilterPresetId']").val();
                        if (existingId != guidEmpty) {
                            $("select#inputPresets > option[value='" + existingId + "']").html(savePresetForm.find("input[name='EventFilterPresetName']").val());
                        } else if ($("select#inputPresets > option[value='" + lastSavedId + "']").length == 0) {
                            if ($("select#inputPresets > option[value]").length == 0) {
                                $("select#inputPresets").html("<option value=''>- " + uiRes.selectAPreset + " -</option>");
                            }
                            $("select#inputPresets > option:first").after("<option value='" + lastSavedId + "'>" + savePresetForm.find("input[name='EventFilterPresetName']").val() + "</option>").change();
                            $("select#inputPresets > option:not([value='']):first").prop("selected", true).change();
                            $("select#inputPresets").prop("disabled", false);
                        }
                    }
                    saveSuccess = true;
                } else {
                    $("div#modalFilterPreset div.modal-body section:first").prepend("<div class='help-block'><h3>Errors:</h3><ul><li>" + data[0] + "</li></ul></div>");
                }
            }
        });

        var saveSuccessAndGrowlMessage = {
            saveSuccess: saveSuccess,
            growlMessage: growlMessage
        }
        return saveSuccessAndGrowlMessage;
    }

    healthStream.scheduling.index = {
        init: function(uiResources, userTimeZoneOffset, emptyGuid, elementIds) {
            uiRes = uiResources;

            guidEmpty = emptyGuid;

            // initial calendar setup
            eventCalendar.settings.shortDayNames = uiRes.shortDayNames;
            eventCalendar.settings.fullDayNames = uiRes.fullDayNames;
            eventCalendar.settings.event = uiRes.event;
            eventCalendar.settings.events = uiRes.events;
            eventCalendar.settings.monthChangeCallback = setupEventCalendarView;
            eventCalendar.settings.userTimeZoneOffset = userTimeZoneOffset;
            eventCalendar.initialize();
            setupEventCalendarView();

            // show event details in modal when user clicks on event name
            $("body").on("click", "div.selected-event-title > a", function(e) {
                e.preventDefault();
                $("#loading").center().show();
                var eventId = $(this).data("id");
                $.get("GetEventDetailAsModal", {
                    "eventId": eventId
                }, function(data) {
                    if (data.length > 0) {
                        if ($("#eventOverviewModal" + eventId).length) {
                            $("#eventOverviewModal" + eventId).remove();
                        }
                        $("body").append(data);
                        $("#eventOverviewModal" + eventId).modal();
                    }
                }).always(function() {
                    $("#loading").hide();
                });
            });

            // handle click event for Refine Events button on mobile devices
            $("a#btnRefine").click(function(e) {
                e.preventDefault();
                switchRefineEventsPosition("div#divRefineContainer", "#modal-refine div.modal-body");
                $("#modal-refine").modal();
            });

            // trigger the hidden update button for refine events modal button click
            $("#modal-refine div.modal-footer > button:first").click(function() {
                $("#btnUpdate").click();
            });

            // switch the refine events div to its original position once the user closes the modal
            $("#modal-refine button[data-dismiss='modal']").click(function() {
                switchRefineEventsPosition("#modal-refine div.modal-body", "div#divRefineContainer");
            });

            // setup event filters settings
            var peopleFilterSettings = {
                    minLength: 3,
                    placeHolderText: uiRes.peopleSearchPlaceHolder,
                    ajaxUrl: 'GetUserAdminDetails',
                    objectSelectorPrefix: "div#divPeopleFilters > a#ahref"
                },
                roomFilterSettings = {
                    minLength: 1,
                    placeHolderText: uiRes.roomSearchPlaceHolder,
                    ajaxUrl: 'GetResourceDetails',
                    objectSelectorPrefix: "div#divRoomFilters > a#ahref"
                },
                equipmentFilterSettings = {
                    minLength: 1,
                    placeHolderText: uiRes.equipmentSearchPlaceHolder,
                    ajaxUrl: 'GetResourceDetails',
                    objectSelectorPrefix: "div#divEquipmentFilters > a#ahref"
                };

            // setup event filters callback functions
            var peopleFilterFunctions = {
                    getSearchParameters: function(term) {
                        return {
                            searchTerm: term
                        }
                    },
                    getSuggestionTitle: function(object) {
                        return {
                            text: object.LastName + ", " + object.FirstName + (object.MiddleName.length == 0 ? "" : " " + object.MiddleName),
                            matchQuery: true
                        };
                    },
                    getSuggestionTitleSubText: function(object) {
                        return {
                            text: object.UserName,
                            matchQuery: true
                        };
                    },
                    getSuggestionMetaLabel: function(object) {
                        return object.InstitutionName.length > 0 ? [uiRes.instString, uiRes.deptString] : uiRes.instString;
                    },
                    getSuggestionMetaValue: function(object) {
                        return object.InstitutionName.length > 0 ? [object.InstitutionName, object.AffiliationName] : object.AffiliationName;
                    },
                    getObjectId: function(objectText) {
                        return objectText.UserAdminId;
                    },
                    isObjectSelected: function(objectId) {
                        return ($("div#divPeopleFilters > a#ahref" + objectId).length > 0);
                    },
                    addCallback: function(adminUser) {
                        addFilterCriteriaTag(adminUser.FirstName + " " + adminUser.LastName, adminUser.UserAdminId,
                            "divPeopleFilters", peopleFilter, {
                                UserAdminId: adminUser.UserAdminId
                            });
                    },
                    removeCallback: function(adminUser) {
                        removePeopleFilter(adminUser.UserAdminId, $("div#divPeopleFilters > a#ahref" + adminUser.UserAdminId));
                    }
                },
                roomFilterFunctions = {
                    getSearchParameters: function(term) {
                        return {
                            searchTerm: term,
                            sResourceClassificationId: 1,
                            shouldIncludeInactive: 'true',
                            ignorePermissions: 'true'
                        }
                    },
                    getSuggestionTitle: function(object) {
                        return {
                            text: object.ResourceName,
                            matchQuery: true
                        };
                    },
                    getSuggestionMetaLabel: function(object) {
                        return uiRes.building;
                    },
                    getSuggestionMetaValue: function(object) {
                        return object.BuildingName;
                    },
                    getObjectId: function(objectText) {
                        return objectText.ResourceId;
                    },
                    isObjectSelected: function(objectId) {
                        return ($("div#divRoomFilters > a#ahref" + objectId).length > 0);
                    },
                    addCallback: function(room) {
                        addFilterCriteriaTag(room.ResourceName, room.ResourceId, "divRoomFilters", resourceFilter, {
                            ResourceId: room.ResourceId,
                            ResourceClassificationId: 1
                        });
                    },
                    removeCallback: function(room) {
                        removeResourceFilter(room.ResourceId, $("div#divRoomFilters > a#ahref" + room.ResourceId));
                    }
                },
                equipmentFilterFunctions = {
                    getSearchParameters: function(term) {
                        return {
                            searchTerm: term,
                            sResourceClassificationId: 2,
                            shouldIncludeInactive: 'true',
                            ignorePermissions: 'true'
                        }
                    },
                    getSuggestionTitle: function(object) {
                        return {
                            text: object.ResourceName,
                            matchQuery: true
                        };
                    },
                    getSuggestionMetaLabel: function(object) {
                        return [uiRes.building, uiRes.room];
                    },
                    getSuggestionMetaValue: function(object) {
                        return [object.BuildingName || "", object.ParentResourceName || ""];
                    },
                    getObjectId: function(objectText) {
                        return objectText.ResourceId;
                    },
                    isObjectSelected: function(objectId) {
                        return ($("div#divEquipmentFilters > a#ahref" + objectId).length > 0);
                    },
                    addCallback: function(equipment) {
                        addFilterCriteriaTag(equipment.ResourceName, equipment.ResourceId, "divEquipmentFilters", resourceFilter, {
                            ResourceId: equipment.ResourceId,
                            ResourceClassificationId: 2
                        });
                    },
                    removeCallback: function(equipment) {
                        removeResourceFilter(equipment.ResourceId, $("div#divEquipmentFilters > a#ahref" + equipment.ResourceId));
                    }
                };

            // bind the event filters text boxes to autocomplete plugin
            HealthStream.utilities.autocomplete($("input[name='txtPeople']"), peopleFilterSettings, peopleFilterFunctions);
            HealthStream.utilities.autocomplete($("input[name='txtRoom']"), roomFilterSettings, roomFilterFunctions);
            HealthStream.utilities.autocomplete($("input[name='txtEquipment']"), equipmentFilterSettings, equipmentFilterFunctions);

            // Refine events update button click
            $("a#btnUpdate").click(function(e) {
                e.preventDefault();
                setupEventCalendarView();
                $(this).addClass("hidden");
            });

            // handle removal of a selected people filter
            $("body").on("click", "div#divPeopleFilters > a[id]", function(e) {
                e.preventDefault();
                removePeopleFilter($(this).attr("id").replace("ahref", ""), $(this));
            });

            // handle removal of a selected room or equipment filter
            $("body").on("click", "div#divRoomFilters > a[id], div#divEquipmentFilters > a[id]", function(e) {
                e.preventDefault();
                removeResourceFilter($(this).attr("id").replace("ahref", ""), $(this));
            });

            // Show all event filters if they are hidden
            $("body").on("click", "div#divRefineEvents a.showAllEventCriteria", function(e) {
                e.preventDefault();
                $(this).parent().find("a.hidden").each(function() {
                    $(this).removeClass("hidden");
                });
                $(this).addClass("hidden");
            });

            // bind color by dropdown change event to switch color options
            $(".colorswitcher > select").change(function() {
                var mode = $(this).val();
                $(".colorswitcher > select").not($(this)).find("option[value='" + mode + "']").prop('selected', true);
                eventCalendar.settings.colorMode = mode;
                $("div.selected-events-list div.selected-event > span.hidden").each(function() {
                    var thisColor = $(this).html().split("|")[mode - 1];
                    $(this).parent().css("border-left-color", thisColor);
                });
            });

            var savePresetForm = $("<form></form>");

            // handle manage preset link click event
            $("a#aManagePreset").click(function(e) {
                e.preventDefault();
                $.get('GetEventFilterPresetSaveModalDialog', {
                    'isUpdate': $("select#inputPresets option[value]:not([value=''])").length > 0 && $("select#inputPresets").val() != "" ? 'True' : 'False'
                }, function(data) {
                    $("div#modalFilterPreset").remove();
                    $("body").append(data);
                    $("div#modalFilterPreset div.modal-footer a#" + elementIds.deletePresetButtonId).addClass("pull-right");
                    savePresetForm = $("<form></form>");
                    $("div#modalFilterPreset input[name='EventFilterPresetName']").val($("select#inputPresets option[value]:not([value='']):selected").text());
                    HealthStream.utilities.addHiddenFieldToForm("EventFilterPresetId", $("select#inputPresets option[value]:not([value=''])").length > 0 && $("select#inputPresets").val() != "" ? $("select#inputPresets").val() : guidEmpty, savePresetForm);
                    var cntr = 0;
                    $("div#divPeopleFilters > a.tag").each(function() {
                        HealthStream.utilities.addHiddenFieldToForm("EventFilterPresetItems[" + cntr + "].EventFilterItemIdentifier", $(this).attr("id").replace("ahref", ""), savePresetForm);
                        HealthStream.utilities.addHiddenFieldToForm("EventFilterPresetItems[" + cntr + "].EventFilterItemType", "0", savePresetForm);
                        HealthStream.utilities.addHiddenFieldToForm("EventFilterPresetItems[" + cntr + "].EventFilterPresetItemId", $(this).attr("data-eventFilterPresetItemId") ? $(this).attr("data-eventFilterPresetItemId") : guidEmpty, savePresetForm);
                        cntr++;
                    });
                    $("div#divRoomFilters > a.tag").each(function() {
                        HealthStream.utilities.addHiddenFieldToForm("EventFilterPresetItems[" + cntr + "].EventFilterItemIdentifier", $(this).attr("id").replace("ahref", ""), savePresetForm);
                        HealthStream.utilities.addHiddenFieldToForm("EventFilterPresetItems[" + cntr + "].EventFilterItemType", 1, savePresetForm);
                        HealthStream.utilities.addHiddenFieldToForm("EventFilterPresetItems[" + cntr + "].EventFilterPresetItemId", $(this).attr("data-eventFilterPresetItemId") ? $(this).attr("data-eventFilterPresetItemId") : guidEmpty, savePresetForm);
                        cntr++;
                    });
                    $("div#divEquipmentFilters > a.tag").each(function() {
                        HealthStream.utilities.addHiddenFieldToForm("EventFilterPresetItems[" + cntr + "].EventFilterItemIdentifier", $(this).attr("id").replace("ahref", ""), savePresetForm);
                        HealthStream.utilities.addHiddenFieldToForm("EventFilterPresetItems[" + cntr + "].EventFilterItemType", 2, savePresetForm);
                        HealthStream.utilities.addHiddenFieldToForm("EventFilterPresetItems[" + cntr + "].EventFilterPresetItemId", $(this).attr("data-eventFilterPresetItemId") ? $(this).attr("data-eventFilterPresetItemId") : guidEmpty, savePresetForm);
                        cntr++;
                    });
                    $("div#modalFilterPreset").modal();
                    $("div#modalFilterPreset input[name='EventFilterPresetName']").focus();
                });
            });

            // handle primary save operation (new/update)
            $("body").on("click", "div#modalFilterPreset div.modal-footer a#" + elementIds.savePresetButtonId, function(e) {
                e.preventDefault();
                var saveSuccessAndGrowlMessage = savePreset(savePresetForm);
                if (saveSuccessAndGrowlMessage.saveSuccess) {
                    $("div#modalFilterPreset").modal("hide");
                    if ($("#modal-refine").attr("aria-hidden") === "true") {
                        HealthStream.utilities.growl(JSON.parse(saveSuccessAndGrowlMessage.growlMessage));
                    }
                }
            });

            // handle copy preset
            $("body").on("click", "div#modalFilterPreset div.modal-footer a#" + elementIds.copyPresetButtonId, function(e) {
                e.preventDefault();
                if (savePreset(savePresetForm).saveSuccess) {
                    $("div#modalFilterPreset div.modal-footer a#" + elementIds.deletePresetButtonId).addClass("hidden");
                    $("div#modalFilterPreset input[name='EventFilterPresetName']").val(savePresetForm.find("input[name='EventFilterPresetName']").val() + uiRes.copySuffix).change();
                    savePresetForm.find("input[name='EventFilterPresetId']").val(guidEmpty);
                    savePresetForm.find("input[name$='EventFilterPresetItemId']").each(function() {
                        $(this).val(guidEmpty);
                    });
                }
            });

            // show delete preset interrupt
            $("body").on("click", "div#modalFilterPreset div.modal-footer a#" + elementIds.deletePresetButtonId, function(e) {
                e.preventDefault();
                $("div#modal-deletefilterpreset").modal();
            });

            // handle delete filter preset
            $("body").on("click", "div#modal-deletefilterpreset a#" + elementIds.deletePresetConfirmButtonId, function(e) {
                e.preventDefault();
                $("div#modal-deletefilterpreset").modal("hide");
                HealthStream.utilities.addHiddenFieldToForm("IsDeleted", "True", savePresetForm);
                $("div#modalFilterPreset div.modal-footer a#" + elementIds.savePresetButtonId).click();
            });

            if ($("select#inputPresets > option[value]:not([value=''])").length) {
                $("select#inputPresets").prop("disabled", false);
            } else {
                $("select#inputPresets").prop("disabled", true);
            }

            // get filter values for changed preset selection
            $("select#inputPresets").change(function() {
                if ($(this).val() == "" || $(this).find("option[value]").length == 0) {
                    $("a#aManagePreset").html(uiRes.saveNewPreset);
                    peopleFilter = [];
                    resourceFilter = [];
                    $("div#divPeopleFilters, div#divRoomFilters, div#divEquipmentFilters").html("");
                    setupEventCalendarView();
                } else {
                    $("a#aManagePreset").html(uiRes.managePreset);
                    $.get('GetPresetItemsByEventFilterPresetId', {
                        'eventFilterPresetId': $(this).val()
                    }, function(presetItems) {
                        peopleFilter = [];
                        resourceFilter = [];
                        $("div#divPeopleFilters, div#divRoomFilters, div#divEquipmentFilters").html("");
                        for (var i = 0; i < presetItems.length; i++) {
                            if (presetItems[i].EventFilterItemType == "0") {
                                addFilterCriteriaTag(presetItems[i].EventFilterItemName, presetItems[i].EventFilterItemIdentifier,
                                    "divPeopleFilters", peopleFilter, {
                                        UserAdminId: presetItems[i].EventFilterItemIdentifier
                                    }, presetItems[i].EventFilterPresetItemId);
                            } else if (presetItems[i].EventFilterItemType == 1) {
                                addFilterCriteriaTag(presetItems[i].EventFilterItemName, presetItems[i].EventFilterItemIdentifier,
                                    "divRoomFilters", resourceFilter, {
                                        ResourceId: presetItems[i].EventFilterItemIdentifier,
                                        ResourceClassificationId: 1
                                    }, presetItems[i].EventFilterPresetItemId);
                            } else if (presetItems[i].EventFilterItemType == 2) {
                                addFilterCriteriaTag(presetItems[i].EventFilterItemName, presetItems[i].EventFilterItemIdentifier,
                                    "divEquipmentFilters", resourceFilter, {
                                        ResourceId: presetItems[i].EventFilterItemIdentifier,
                                        ResourceClassificationId: 2
                                    }, presetItems[i].EventFilterPresetItemId);
                            }
                        }
                        setupEventCalendarView();
                    });
                }
            });

            // show duplicate name interrupt for filter preset
            $("body").on("change", "div#modalFilterPreset input[name='EventFilterPresetName']", function() {
                var nameToCheck = $(this).val();
                var thisId = savePresetForm.find("input[name='EventFilterPresetId']").val();
                var isDuplicate = false;
                $("select#inputPresets > option[value]:not([value=''])").each(function() {
                    if ($(this).text() == nameToCheck && thisId != $(this).val()) {
                        isDuplicate = true;
                        return false;
                    }
                });
                if (isDuplicate) {
                    $("div#modal-duplicatefilterpreset").modal();
                }
            });
        }
    }
}(window, jQuery))
