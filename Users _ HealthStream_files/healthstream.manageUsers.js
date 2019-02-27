(function (window, $) {
    "use strict";

    window.HealthStream = window.HealthStream || {};
    var healthStream = window.HealthStream;
    var getAffiliations;
    var getDepartments;
    var departmentSelection;
    var affiliationSelection;
    var institutionId = $("#InstitutionId");
    var institutionName = $("#InstitutionName");
    var departmentId = $("#DepartmentId");
    var departmentName = $("#DepartmentName");
    var isSmallScreen = false;

    healthStream.manageUsers = {

        init: function (options) {
            getAffiliations = options.getAffiliations;
            getDepartments = options.getDepartments;
            departmentSelection = options.departmentSelection;
            affiliationSelection = options.affiliationSelection;
            healthStream.manageUsers.moduleInit();
        },

        moduleInit: function () {
            $(document).ready(function () {
                $("#pagination").find($(".dropdown-toggle")).removeAttr("data-toggle");
                $("#pagination").find($(".dropdown-toggle i")).removeAttr("class");
            });

            $("#reset-password-dialog-container")
                .off("complete.HealthStream.ajax", healthStream.manageUsers.onResetPasswordDialogLoaded)
                .on("complete.HealthStream.ajax", healthStream.manageUsers.onResetPasswordDialogLoaded);

            $("#user-filter-dialog-container")
                .off("complete.HealthStream.ajax", healthStream.manageUsers.onUserFilterDialogLoaded)
                .on("complete.HealthStream.ajax", healthStream.manageUsers.onUserFilterDialogLoaded);

            $("#acquire-users-confirmation-container")
                .off("complete.HealthStream.ajax", healthStream.manageUsers.onAcquireUsersInterruptionDialogLoaded)
                .on("complete.HealthStream.ajax", healthStream.manageUsers.onAcquireUsersInterruptionDialogLoaded);

            healthStream.manageUsers.bindEvents();

            $("#s2id_InstitutionName").click(function () {
                healthStream.manageUsers.clearDepartment();
            });
        },

        onUserFilterDialogLoaded: function () {
            $("#user-filter-modal-dialog").modal();
            isSmallScreen = true;
            institutionId = $("#user-filter-modal-dialog #InstitutionId");
            institutionName = $("#user-filter-modal-dialog #InstitutionName");
            departmentId = $("#user-filter-modal-dialog #DepartmentId");
            departmentName = $("#user-filter-modal-dialog #DepartmentName");

            healthStream.manageUsers.bindEvents();

            $("#user-filter-modal-dialog #s2id_InstitutionName").click(function () {
                healthStream.manageUsers.clearDepartment();
            });

            $("#user-filter-button-id").on("click", function () {
                healthStream.manageUsers.onSubmit();
            });
        },

        onResetPasswordDialogLoaded: function () {
            $("#reset-password-modal-dialog").modal();

            var $form = $("#reset-password-form-id");
            if ($form.length > 0) {
                healthStream.validate.attachToForm($form);
            }

            healthStream.initForms();

            $("#reset-password-button-id").on("click", function () {
                $form.submit();
                if ($form.length > 0) {
                    healthStream.validate.attachToForm($form);
                }
            });
        },

        onAcquireUsersInterruptionDialogLoaded: function () {
            $("#acquire-users-interruption-modal-dialog").modal();
        },

        bindEvents: function () {
            healthStream.manageUsers.setupDepartmentAutoComplete();
            healthStream.manageUsers.setupAffiliationAutoComplete();

            if ($("#ShowAffiliation").val() === "True") {
                if ($(institutionId).val() !== "" && $(institutionId).val() !== undefined) {
                    $(".department").show();
                } else {
                    $(".department").hide();
                }
            }

            healthStream.manageUsers.sortModuleInit();

            $("#btnSubmit").click(function () {
                healthStream.manageUsers.onSubmit();
            });
        },

        onSubmit: function () {
            var filterForm = $("#filter-form");
            $("#IsFilterCall").val(true)
            $("#RecordsPerPage").val(50);
            $("#CurrentPage").val(1);
            if (institutionName.val() === "") {
                institutionId.val("");
            }
            if (departmentName.val() === "") {
                departmentId.val("");
            }
            filterForm.submit();
        },

        clearDepartment: function () {
            $(institutionId).val("");
            $(institutionName).val("");
            $(departmentId).val("");
            $(departmentName).val("");

            var mSelectedChoice;
            if (isSmallScreen) {
                mSelectedChoice = $("#user-filter-modal-dialog div#s2id_DepartmentName a.select2-choice");
            } else {
                mSelectedChoice = $("div#s2id_DepartmentName a.select2-choice");
            }
            mSelectedChoice.addClass("select2-default");
            mSelectedChoice.find("span.select2-chosen").eq(0).html(departmentSelection);

            $(".department").hide();
        },

        sortModuleInit: function () {
            $("#sortOption li").on("click", function (e) {
                e.preventDefault();
                $("#sortOption").find("li").removeClass("active");
                $(e.currentTarget).addClass("active");
                $("#select-sort-option").html($(e.currentTarget.childNodes[0]).html());
                $("#SortOption").val($("#sortOption li[class='active'] a").attr("data-sort"));
                var filterForm = $("#filter-form");
                filterForm.submit();
            });
        },

        setupDepartmentAutoComplete: function () {
            var departmentFilter = departmentName;
            departmentFilter.select2("destroy");
            departmentFilter.select2({
                dropdownCssClass: "select2-slats",
                placeholder: departmentSelection,
                allowClear: true,
                width: "100%",
                id: function () {
                    return "dummyId";
                },
                ajax: {
                    url: getDepartments,
                    dataType: "json",
                    type: "GET",
                    contentType: "application/json",
                    data: function (term) {
                        return {
                            searchTerm: term,
                            affiliationId: institutionId.val()
                        };
                    },
                    results: function (data) {
                        return {
                            results: $.map(data, function (result) {
                                return {
                                    data: [{
                                        id: result.OrgNodeId,
                                        text: (result.Name === "")
                                            ? result.Code
                                            : result.Name
                                    }]
                                };
                            })
                        };
                    },
                    cache: false
                },
                formatResult: function (object) {
                    return "<div class='slat slat-select2 slat-select2-action slat-select2-nowrap'> <div class='title'>" + object.data[0].text + "<span></span></div></div>";
                },
                formatSelection: healthStream.manageUsers.formatDepartmentSelection
            }).on("select2-selecting", function () {
                $(".select2-drop-active").hide();
            });
            healthStream.manageUsers.defaultDepartmentSelection();
        },

        setupAffiliationAutoComplete: function () {
            var departmentFilter = institutionName;
            departmentFilter.select2("destroy");
            departmentFilter.select2({
                dropdownCssClass: "select2-slats",
                placeholder: affiliationSelection,
                allowClear: true,
                width: "100%",
                id: function () {
                    return "dummyId";
                },
                ajax: {
                    url: getAffiliations,
                    dataType: "json",
                    type: "GET",
                    contentType: "application/json",
                    data: function (term) {
                        return {
                            searchTerm: term
                        };
                    },
                    results: function (data) {
                        return {
                            results: $.map(data, function (result) {
                                return {
                                    data: [{
                                        id: result.OrgNodeId,
                                        text: (result.Code + " - "+ result.Name)
                                    }]
                                };
                            })
                        };
                    },
                    cache: false
                },
                formatResult: function (object) {
                    return "<div class='slat slat-select2 slat-select2-action slat-select2-nowrap'> <div class='title'>" + object.data[0].text + "<span></span></div></div>";
                },
                formatSelection: healthStream.manageUsers.formatInstitutionSelection
            })
                .on("select2-selecting", function () {
                    departmentId.val("");
                    departmentName.val("");
                    $(".select2-drop-active").hide();
                    healthStream.manageUsers.setupDepartmentAutoComplete();
                });
            healthStream.manageUsers.defaultAffiliationSelection();
        },

        defaultDepartmentSelection: function () {
            var mSelectedChoice;
            if (isSmallScreen) {
                mSelectedChoice = $("#user-filter-modal-dialog div#s2id_DepartmentName a.select2-choice");
            } else {
                mSelectedChoice = $("div#s2id_DepartmentName a.select2-choice");
            }

            if (departmentId.val() === undefined) {
                departmentName.val("");
            }
            if (departmentName.val() !== undefined && departmentName.val() !== "") {
                mSelectedChoice.removeClass("select2-default");
                mSelectedChoice.find("span.select2-chosen").eq(0).html(departmentName.val());
            } else {
                mSelectedChoice.addClass("select2-default");
                mSelectedChoice.find("span.select2-chosen").eq(0).html(departmentSelection);
            }
        },

        defaultAffiliationSelection: function () {
            var mSelectedChoice;
            if (isSmallScreen) {
                mSelectedChoice = $("#user-filter-modal-dialog div#s2id_InstitutionName a.select2-choice");
            } else {
                mSelectedChoice = $("div#s2id_InstitutionName a.select2-choice");
            }

            if (institutionId.val() === undefined) {
                institutionName.val("");
            }
            if (institutionName.val() !== undefined && institutionName.val() !== "") {
                mSelectedChoice.removeClass("select2-default");
                mSelectedChoice.find("span.select2-chosen").eq(0).html(institutionName.val());
            } else {
                mSelectedChoice.addClass("select2-default");
                mSelectedChoice.find("span.select2-chosen").eq(0).html(affiliationSelection);
            }
        },

        formatDepartmentSelection: function (data) {
            departmentId.val(data.data[0].id);
            departmentName.val(data.data[0].text);
            return data.data[0].text;
        },

        formatInstitutionSelection: function (data) {
            institutionId.val(data.data[0].id);
            institutionName.val(data.data[0].text);
            $(".department").show();
            return data.data[0].text;
        }
    };
}(window, jQuery));