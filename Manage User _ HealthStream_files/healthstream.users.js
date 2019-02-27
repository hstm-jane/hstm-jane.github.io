(function (window, $) {
    "use strict";

    window.HealthStream = window.HealthStream || {};
    var healthStream = window.HealthStream;
    var getAffiliations;
    var getDepartments;
    var getProfessions;
    var getSpecialties;
    var departmentSelection;
    var affiliationSelection;
    var professionSelection;
    var specialtySelection;
    var profession;
    var specialty;
    var organization;
    var affiliation;
    var department;
    var employee;
    var showMore;
    var showMoreLess;
    var affiliationAccessLevel;
    var admin;
    var accessLevel;
    var errorPath;
    var removeEmployeeRoleUrlBase;
    var employeeRolesCacheKey;
    var cachedRoleId;
    var removeAdminRoleUrlBase;
    var adminRolesCacheKey;
    var empRoleExist;
    var adminRoleExist;
    var getEmployeeRoleDialogUrlBase;
    var getAdminRoleDialogUrlBase;
    var messageForHiddenRole;
    var isAdminRoleDialog;
    var getEmployeeAssessmentPathDialogUrlBase;
    var applyRoleText;
    var applyAssessmentPathText;
    var employeeAssessmentPathCacheKey;
    var assessmentsToReassignCacheKey;
    var requiredErrorMessage;
    var getEmployeeAssessment;
    var registeredNurseProfession;
    var getAssessmentsList;
    var emptyGuid;
    var getAdminRolesList;
    var assessmentRequiredErrorMessage;

    healthStream.users = {

        init: function (options) {
            getAffiliations = options.getAffiliations;
            getDepartments = options.getDepartments;
            getProfessions = options.getProfessions;
            getSpecialties = options.getSpecialties;
            departmentSelection = options.departmentSelection;
            affiliationSelection = options.affiliationSelection;
            professionSelection = options.professionSelection;
            specialtySelection = options.specialtySelection;
            profession = options.profession;
            specialty = options.specialty;
            organization = options.organization;
            affiliation = options.affiliation;
            department = options.department;
            employee = options.employee;
            showMoreLess = options.showMoreLess;
            showMore = options.showMore;
            affiliationAccessLevel = options.affiliationAccessLevel;
            admin = options.admin;
            accessLevel = options.accessLevel;
            errorPath = options.errorPath;
            removeEmployeeRoleUrlBase = options.removeEmployeeRoleUrlBase;
            employeeRolesCacheKey = options.employeeRolesCacheKey;
            removeAdminRoleUrlBase = options.removeAdminRoleUrlBase;
            adminRolesCacheKey = options.adminRolesCacheKey;
            cachedRoleId = options.cachedRoleId;
            empRoleExist = options.empRoleExist;
            adminRoleExist = options.adminRoleExist;
            getEmployeeRoleDialogUrlBase = options.getEmployeeRoleDialogUrlBase;
            getAdminRoleDialogUrlBase = options.getAdminRoleDialogUrlBase;
            messageForHiddenRole = options.messageForHiddenRole;
            getEmployeeAssessmentPathDialogUrlBase = options.getEmployeeAssessmentPathDialogUrlBase;
            applyRoleText = options.applyRoleText;
            applyAssessmentPathText = options.applyAssessmentPathText;
            employeeAssessmentPathCacheKey = options.employeeAssessmentPathCacheKey;
            assessmentsToReassignCacheKey = options.assessmentsToReassignCacheKey;
            requiredErrorMessage = options.requiredErrorMessage;
            getEmployeeAssessment = options.getEmployeeAssessment;
            registeredNurseProfession = options.registeredNurseProfession;
            getAssessmentsList = options.getAssessmentsList;
            emptyGuid = options.emptyGuid;
            getAdminRolesList = options.getAdminRolesList;
            assessmentRequiredErrorMessage = options.assessmentRequiredErrorMessage;

            healthStream.users.moduleInit();
        },

        moduleInit: function () {
            $("#employee-role-modal-target")
                .off("complete.HealthStream.ajax", healthStream.users.onEmployeeRoleModalLoaded)
                .on("complete.HealthStream.ajax", healthStream.users.onEmployeeRoleModalLoaded);

            $("#remove-user-confirmation-container")
                .off("complete.HealthStream.ajax", healthStream.users.onRemoveUserInterruptModalLoaded)
                .on("complete.HealthStream.ajax", healthStream.users.onRemoveUserInterruptModalLoaded);

            $("#admin-role-modal-target")
                .off("complete.HealthStream.ajax", healthStream.users.onAdminRoleModalLoaded)
                .on("complete.HealthStream.ajax", healthStream.users.onAdminRoleModalLoaded);

            if ($("#DepartmentAdminFlag").val() === "True") {
                $("#adminRoleForm").attr("disabled", "disabled");
            }

            if ($("#DisableRemoveUserButton").val() === "True") {
                $("#remove-user").attr("disabled", "disabled");
            }

            $("#assigned-employee-roles")
                .off("click", "button.remove-employee-role", healthStream.users.removeEmployeeRoleClick)
                .on("click", "button.remove-employee-role", healthStream.users.removeEmployeeRoleClick);

            $("#employee-assessment-path-modal-target")
               .off("complete.HealthStream.ajax", healthStream.users.onAssessmentPathModalLoaded)
               .on("complete.HealthStream.ajax", healthStream.users.onAssessmentPathModalLoaded);

            $("#assigned-admin-roles")
                .off("click", "button.remove-admin-role", healthStream.users.removeAdminRoleClick)
                .on("click", "button.remove-admin-role", healthStream.users.removeAdminRoleClick);

            $("#assessment-modal-target")
              .off("complete.HealthStream.ajax", healthStream.users.onAssessmentModalLoaded)
              .on("complete.HealthStream.ajax", healthStream.users.onAssessmentModalLoaded);

            $("#save-add-another-button").click(function () {
                $("#UserModel_IsSaveAndAddEnabled").val(true);
            });

            $("#s2id_InstitutionName").click(function () {
                healthStream.manageUsers.clearDepartment();
            });

            $("#user-form")
                .off("click", ".btn.btn-danger.btn-block", healthStream.users.removeAdminAccess)
                .on("click", ".btn.btn-danger.btn-block", healthStream.users.removeAdminAccess);

            healthStream.users.bindEvents();

            healthStream.validate.attachToForm($("#user-form"));
        },

        onAssessmentPathModalLoaded: function () {
            $("#employee-assessment-path-modal-dialog").modal();

            if ($("#IsAssessmentAvailableToAssign").val() !== "True") {
                $("#employee-assessment-submit-btn").text(applyRoleText);
            }

            $("#completed-assessment")
                            .off("click", "a", healthStream.users.reAssignAssessmentClick)
                            .on("click", "a", healthStream.users.reAssignAssessmentClick);

            $("#employee-assessment-submit-btn")
                .off("click", healthStream.users.assignRoleClick)
                .on("click", healthStream.users.assignRoleClick);
        },

        onEmployeeRoleModalLoaded: function () {
            $("#employee-role-modal-dialog").modal();

            isAdminRoleDialog = false;
            $("#AccessLevel").val("");
            healthStream.users.bindEvents();

            var $form = $("#employee-role-form");
            if ($form.length > 0) {
                healthStream.validate.attachToForm($form);

                $form.validate().settings.messages = {
                    InstitutionName: {
                        required: requiredErrorMessage
                    },
                    ProfessionName: {
                        required: requiredErrorMessage
                    },
                    DepartmentName: {
                        required: requiredErrorMessage
                    }
                };
            }

            $("#employee-role-submit-btn")
                            .off("click", healthStream.users.employeeRoleNextClick)
                            .on("click", healthStream.users.employeeRoleNextClick);

        },

        onAssessmentModalLoaded: function () {
            $("#assessment-modal-dialog").modal();
            healthStream.users.bindEvents();

            var $form = $("#assessment-form");
            if ($form.length > 0) {
                healthStream.validate.attachToForm($form);
            }

            $("#assessment-form-submit-btn")
                .off("click", healthStream.users.assessmentNextClick)
                .on("click", healthStream.users.assessmentNextClick);

            $("#assessment-form-submit-btn").attr("disabled", true);
        },

        onAdminRoleModalLoaded: function () {
            $("#admin-role-modal-dialog").modal();

            $("#AccessLevel")
                .off("change", healthStream.users.showAffiliation)
                .on("change", healthStream.users.showAffiliation);

            isAdminRoleDialog = true;
            healthStream.users.bindEvents();

            var $form = $("#admin-role-form");
            if ($form.length > 0) {
                healthStream.validate.attachToForm($form);
            }

            $("#admin-role-submit-btn")
                .off("click", healthStream.users.assignAdminRoleClick)
                .on("click", healthStream.users.assignAdminRoleClick);

            healthStream.users.showAffiliation();
        },

        onRemoveUserInterruptModalLoaded: function () {
            $("#remove-user-interruption-modal-dialog").modal();
        },

        bindEvents: function () {
            healthStream.users.setupDepartmentAutoComplete();
            healthStream.users.setupAffiliationAutoComplete();
            healthStream.users.setupProfessionAutoComplete();
            healthStream.users.setupSpecialtyAutoComplete();
            if ($("#ShowAffiliation").val() === "True") {
                if ($("#InstitutionId").val() !== "" && $("#InstitutionId").val() !== undefined) {
                    $(".department").show();
                } else {
                    $(".department").hide();
                }
            }

            $("#s2id_InstitutionName").click(function () {
                $("#InstitutionId").val("");
                $("#InstitutionName").val("");
                $("#DepartmentId").val("");
                $("#DepartmentName").val("");
                var mSelectedChoice = $("div#s2id_DepartmentName a.select2-choice");
                mSelectedChoice.addClass("select2-default");
                mSelectedChoice.find("span.select2-chosen").eq(0).html(departmentSelection);
            });
        },

        showAffiliation: function () {
            if ($("#AccessLevel option:selected").val() !== "") {
                if ($("#AccessLevel option:selected").val() === affiliationAccessLevel) {
                    $(".affiliation").show();
                    $(".department").hide();
                } else {
                    $(".affiliation").show();
                    $(".department").show();
                }
            } else {
                $(".affiliation").hide();
                $(".department").hide();
            }
        },

        employeeRoleNextClick: function (evt) {
            var $form = $("#employee-role-form");
            //healthStream.validate.attachToForm($form);
            // If the form isn't valid then don't submit it
            if ($form.valid()) {
                healthStream.users.initForms(evt, $("#employee-role-form"), null);
            } else {
                evt.preventDefault();
            }
        },

        assessmentNextClick: function (e) {
            e.preventDefault();
            var $form = $("#assessment-form");
            var assessments = [];
            $("checkable").find("input:checkbox").prop("checked", this.checked);
            $("input[type=checkbox]:checked").each(function (index, assessment) {
                if (assessment.id !== "select-all-assessments") {
                    assessments.push($(assessment).val());
                }
            });

            if (assessments.length === 0 && $("#completed-assessment .fa-check").length === 0) {
                $(".validation-summary-valid").attr("class", "validation-summary-errors");

                var errorListUl = $(".validation-summary-errors ul");

                errorListUl.html("");
                errorListUl.append("<li>" + assessmentRequiredErrorMessage + "</li>");
                $("#validationMessage").show();
                return false;
            } else {
                $(".validation-summary-errors").attr("class", "validation-summary-valid");
            }
           
            var notCompletedAssessments = $("#assessment-modal-dialog #NotCompletedAssessment").val();
            var notCompletedAssessmentJSONList = JSON.parse(notCompletedAssessments);

            $.each(assessments, function (key, item) {
                for (var i = 0, len = notCompletedAssessmentJSONList.length; i < len; i++) {
                    if (notCompletedAssessmentJSONList[i].AssessmentName === item) {
                        notCompletedAssessmentJSONList[i].IsSelected = true;
                        break;
                    }
                }
            });
           
            notCompletedAssessmentJSONList = $.grep(notCompletedAssessmentJSONList,
                function (val, index) {
                    return val.IsSelected == false
                }, true); //Removes the not selected assessments from the array list based on boolean variable "IsSelected"

            notCompletedAssessments = JSON.stringify(notCompletedAssessmentJSONList);
            var completedAssessments = $("#assessment-modal-dialog #CompletedAssessment").val();
            $form[0].NotCompletedAssessments.defaultValue = notCompletedAssessments;
            if (completedAssessments !== undefined && completedAssessments != null && completedAssessments != "[]") {
                $form[0].CompletedAssessments.defaultValue = completedAssessments;
            }

            healthStream.users.initForms(e, $("#assessment-form"), healthStream.users.onAssessmentModified);
            healthStream.validate.attachToForm($form);
        },

        reAssignAssessmentClick: function (evt) {
            evt.preventDefault();
            var assessmentId = $(this).attr("id");
            var completedAssessment = jQuery.parseJSON($("#CompletedAssessment").val());

            $.each(completedAssessment, function (key, item) {
                if (item.AssessmentId === assessmentId) {
                    if (item.Status === 1) {
                        item.Status = 2;
                        item.IsSelected = true;
                        $("#" + assessmentId + "> i").removeClass("fa-plus");
                        $("#" + assessmentId + "> i").addClass("fa-check");
                    } else if (item.Status === 2) {
                        item.Status = 1;
                        item.IsSelected = false;
                        $("#" + assessmentId + "> i").removeClass("fa-check");
                        $("#" + assessmentId + "> i").addClass("fa-plus");
                    }
                    return false;
                }
            });

            //change display text of the assessment path submit button based on assessments status
            var notCompletedAssessment = jQuery.parseJSON($("#NotCompletedAssessment").val());
            if (notCompletedAssessment.length === 0) {
                var assessmentAssignedFlag = false;

                $.each(completedAssessment, function (key, item) {
                    if (item.Status === 0 || item.Status === 2) {
                        assessmentAssignedFlag = true;
                        return false;
                    }
                });

                if (assessmentAssignedFlag) {
                    $("#employee-assessment-submit-btn").text(applyAssessmentPathText);
                } else {
                    $("#employee-assessment-submit-btn").text(applyRoleText);
                }
            }

            $("#CompletedAssessment").val(JSON.stringify(completedAssessment));
        },
        assignRoleClick: function (evt) {

            var $form = $("#employee-assessment-path-form");
            healthStream.users.initForms(evt, $("#employee-assessment-path-form"), healthStream.users.onEmployeeRoleModified);
            healthStream.validate.attachToForm($form);
            $("#employee-role-modal-dialog").modal("hide");
            $("#employee-assessment-path-modal-dialog").modal("hide");
        },

        assignAdminRoleClick: function (evt) {
            var $form = $("#admin-role-form");
            healthStream.users.initForms(evt, $("#admin-role-form"), healthStream.users.onAdminRoleModified);
            healthStream.validate.attachToForm($form);
        },

        removeEmployeeRoleClick: function (evt) {
            evt.preventDefault();
            var employeeRoleId = $(this).attr("data-role-id");
            var employeeRoleskey = $(this).parent().attr("data-employee-roles-cache-key");
            var assessmentsToReassignKey = $("#UserModel_AssessmentsToReassignCacheKey").val();
            var removeUrl = removeEmployeeRoleUrlBase + "?" + employeeRolesCacheKey + "=" + employeeRoleskey + "&" + assessmentsToReassignCacheKey + "=" + assessmentsToReassignKey + "&" + cachedRoleId + "=" + employeeRoleId;

            healthStream.users.removeRoles(evt, removeUrl, healthStream.users.onEmployeeRoleModified);
        },

        removeAdminRoleClick: function (evt) {
            evt.preventDefault();
            var adminRoleId = $(this).attr("data-role-id");
            var adminRoleskey = $(this).parent().attr("data-admin-roles-cache-key");
            var removeUrl = removeAdminRoleUrlBase + "?" + adminRolesCacheKey + "=" + adminRoleskey + "&" + cachedRoleId + "=" + adminRoleId;

            healthStream.users.removeRoles(evt, removeUrl, healthStream.users.onAdminRoleModified);
        },

        removeAdminAccess: function (evt) {
            var $row = $(this).closest("tr"),
                $tds = $row.find("td");

            var adminRoleId = $tds[2].innerText; // Gets the "AdminRoleId" td element from the grid
            var adminCacheKey = $tds[3].innerText; // Gets the "AdminRolescacheKey" td element from the grid

            var removeUrl = removeAdminRoleUrlBase + "?" + adminRolesCacheKey + "=" + adminCacheKey + "&" + cachedRoleId + "=" + adminRoleId;

            healthStream.users.removeRoles(evt, removeUrl, healthStream.users.onAdminRoleModified);
        },

        onEmployeeRoleModified: function (result) {

            if (result.constructor.toString().indexOf("Array") !== -1) {

                if (result.length > 0) {
                    $("#employee-role-modal-dialog").modal("hide");
                    $("#employee-assessment-path-modal-dialog").modal("hide");
                    $("#message").hide();

                    $("#UserModel_EmployeeExistingRoles").val(JSON.stringify(result));
                    var studentSlat;
                    $("#assigned-employee-roles").empty();
                    result.forEach(function (item) {
                        if (item.IsRoleUnderCurrentUserPurview === true) {
                            var specialtyName = (!item.SpecialtyName)
                                ? "NA"
                                : item.SpecialtyName;

                            studentSlat = $("<div class='slat slat-modal js-student-slat' style='display: block;'><div class='slat-default'><div class='title'>" + employee + "</div><ul class='meta'><li><span class='meta-label'>" + profession + ": </span><span class='meta-value'>" + item.ProfessionName + "</span></li><li><span class='meta-label'>" + specialty + ": </span><span class='meta-value'>" + specialtyName + "</span></li></ul><div class='action' data-employee-roles-cache-key='" + item.EmployeeRolesCacheKey + "' ><button class='btn btn-sm btn-danger js-remove-role remove-employee-role' data-target='assigned-employee-roles' data-role-id='" + item.EmployeeRoleId + "' data-hijax='true'><i class='fa fa-times'></i>Locked</button></div></div><div class='slat-nested'><div class='collapse-group collapse'><div class='row'><div class='col-md-3' > " + organization + ":</div><div class='col-md-8'>" + item.OrganizationName + "<p></p></div></div><div class='row'><div class='col-md-3'>" + affiliation + ":</div><div class='col-md-8'>" + item.InstitutionName + " <p></p></div></div><div class='row'><div class='col-md-3'><p>" + department + ": </p></div><div class='col-md-8' >" + item.DepartmentName + "</div></div></div><a href='javascript:;' class='collapse-toggle toggle-text-initialized' data-toggle-text='" + showMoreLess + "'>" + showMore + "<i class='fa-fw fa-caret-down fa'></i></a></div></div>");
                            $("#assigned-employee-roles").append(studentSlat);
                        }
                    });

                    var hiddenRoles = result.filter(function (res) {
                        return res.IsRoleUnderCurrentUserPurview === false;
                    });

                    if (hiddenRoles.length > 0) {
                        $("#message-hidden-roles").text(messageForHiddenRole);
                        $("#message-hidden-roles").show();
                    }

                    healthStream.initSlats();
                } else {
                    if ($("#UserModel_AdminExistingRoles").val() === "") {
                        $("#assigned-employee-roles").empty();
                        $("#message").show();
                    } else {
                        $("#assigned-employee-roles").empty();
                    }
                    $("#UserModel_EmployeeExistingRoles").val("");
                }

                healthStream.users.updateEmployeeRolesAddButton();
                healthStream.users.updateAdminRolesAddButton();
                healthStream.users.updateSaveButtons();
            }
        },

        onAdminRoleModified: function (result) {
            if (result.constructor.toString().indexOf("Array") !== -1) {
                if (result.length > 0) {
                    $("#admin-role-modal-dialog").modal("hide");

                    result.forEach(function (item) {
                        if (item.AdminRolesCacheKey !== emptyGuid) {
                            healthStream.users.getAdminRolesList(item.AdminRolesCacheKey);
                        }
                    });
                }
                else {
                    $("#adminGrid").empty(); // empty the Admin Grid
                }
            }

        },

        onAssessmentModified: function (result) {
            if (result.constructor.toString().indexOf("Array") !== -1) {
                if (result.length > 0) {
                    $("#assessment-modal-dialog").modal("hide");
                    $("#user-must-save-changes").removeClass("hidden");

                    result.forEach(function (item) {
                        if (item.AssessmentsToAssignCacheKey !== emptyGuid && item.UserId !== emptyGuid && item.AssessmentsToReassignCacheKey != emptyGuid) {
                            healthStream.users.getAssessmentsList(item.AssessmentsToAssignCacheKey, item.UserId, item.AssessmentsToReassignCacheKey);
                        }
                    });
                }
            }
        },

        setupDepartmentAutoComplete: function () {
            var departmentFilter = $("input#DepartmentName");
            departmentFilter.select2("destroy");
            departmentFilter.select2({
                dropdownCssClass: "select2-slats",
                placeholder: departmentSelection,
                allowClear: true,
                width: "100%",
                ajax: {
                    url: getDepartments,
                    dataType: "json",
                    type: "GET",
                    contentType: "application/json",
                    data: function (term) {
                        return {
                            searchTerm: term,
                            affiliationId: isAdminRoleDialog ? $("#admin-role-form #InstitutionId").val() : $("#employee-role-form #InstitutionId").val()
                        };
                    },
                    results: function (data) {
                        return {
                            results: $.map(data, function (result) {
                                return {
                                    id: result.OrgNodeId,
                                    text: (result.Name === "")
                                        ? result.Code
                                        : result.Name
                                };
                            })
                        };
                    },
                    cache: false
                },
                formatResult: function (object) {

                    return "<div class='slat slat-select2 slat-select2-action slat-select2-nowrap'> <div class='title'>" + object.text + "<span></span></div></div>";
                },
                formatSelection: healthStream.users.formatDepartmentSelection
            })
                .on("select2-selecting", function () {
                    $(".select2-drop-active").hide();
                });
            healthStream.users.defaultDepartmentSelection();
        },

        setupAffiliationAutoComplete: function () {
            var departmentFilter = $("input#InstitutionName");
            departmentFilter.select2("destroy");
            departmentFilter.select2({
                dropdownCssClass: "select2-slats",
                placeholder: affiliationSelection,
                allowClear: true,
                width: "100%",
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
                                    id: result.OrgNodeId,
                                    text: (result.Code + " - "+ result.Name)
                                };
                            })
                        };
                    },
                    cache: false
                },
                formatResult: function (object) {
                    return "<div class='slat slat-select2 slat-select2-action slat-select2-nowrap'> <div class='title'>" + object.text + "<span></span></div></div>";
                },

                formatSelection: healthStream.users.formatInstitutionSelection
            })
                .on("select2-selecting", function () {
                    $("#DepartmentId").val("");
                    $("#DepartmentName").val("");
                    $(".select2-drop-active").hide();
                    healthStream.users.setupDepartmentAutoComplete();
                });
            healthStream.users.defaultAffiliationSelection();
        },

        setupProfessionAutoComplete: function () {
            var departmentFilter = $("input#ProfessionName");
            departmentFilter.select2("destroy");
            departmentFilter.select2({
                dropdownCssClass: "select2-slats",
                placeholder: affiliationSelection,
                allowClear: true,
                width: "100%",
                ajax: {
                    url: getProfessions,
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
                                    id: result.ProfessionId,
                                    text: (result.ProfessionName === "")
                                        ? result.Code
                                        : result.ProfessionName
                                };
                            })
                        };
                    },
                    cache: false
                },
                formatResult: function (object) {
                    return "<div class='slat slat-select2 slat-select2-action slat-select2-nowrap'> <div class='title'>" + object.text + "<span></span></div></div>";
                },

                formatSelection: healthStream.users.formatProfessionSelection
            })
                .on("select2-selecting", function (e) {
                    var professionId = e.val;
                    $("#SpecialtyId").val("00000000-0000-0000-0000-000000000000");
                    $("#SpecialtyName").val("");
                    $(".select2-drop-active").hide();
                    healthStream.users.setupSpecialtyAutoComplete();

                    if ($("#assessmentResult") != null) {
                        $("#assessmentResult").empty();
                    }

                    if (professionId !== registeredNurseProfession) {
                        var specialityId = $('#SpecialtyId').val();
                        healthStream.users.searchAssessmentResult(professionId, specialityId);
                    }
                });
            healthStream.users.defaultProfessionSelection();
        },

        setupSpecialtyAutoComplete: function () {
            var departmentFilter = $("input#SpecialtyName");
            departmentFilter.select2("destroy");
            departmentFilter.select2({
                dropdownCssClass: "select2-slats",
                placeholder: specialtySelection,
                allowClear: true,
                width: "100%",
                ajax: {
                    url: getSpecialties,
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
                                    id: result.SpecialtyId,
                                    text: (result.SpecialtyName === "")
                                        ? result.Code
                                        : result.SpecialtyName
                                };
                            })
                        };
                    },
                    cache: false
                },
                formatResult: function (object) {

                    return "<div class='slat slat-select2 slat-select2-action slat-select2-nowrap'> <div class='title'>" + object.text + "<span></span></div></div>";
                },
                formatSelection: healthStream.users.formatSpecialtySelection
            })
                .on("select2-selecting", function (e) {
                    var specialtyId = e.val;
                    var professionId = $('#ProfessionId').val();

                    $(".select2-drop-active").hide();

                    if (professionId === registeredNurseProfession) {
                        if ($("#assessmentResult") != null) {
                            $("#assessmentResult").empty();
                        }
                        healthStream.users.searchAssessmentResult(professionId, specialtyId);
                    }
                });
            healthStream.users.defaultSpecialtySelection();
        },

        initForms: function (evt, form, callback) {
            evt.preventDefault();

            if (!form.isValid()) {
                return;
            }

            //Not using healthStream.initForms() because the "complete.HealthStream.ajax" is not returning the arrary result in a single parameter of the handler
            //using AjaxConfiguration because need to get the result in onEmployeeRoleAdded callback and construct the output in the UI
            var mAjaxConfig = new window.HealthStream.ajax.AjaxConfiguration(form.attr("action"));
            mAjaxConfig.options = {
                type: form.attr("method"),
                data: form.serialize()
            };
            mAjaxConfig.target = $(form.attr("data-target"));
            mAjaxConfig.callback = callback;

            window.HealthStream.ajax.ajaxHandler(mAjaxConfig);
            //end
        },

        removeRoles: function (evt, url, callback) {
            evt.preventDefault();

            var target = $($(this).attr("data-target"));

            var ajaxConfig = new healthStream.ajax.AjaxConfiguration(url);
            ajaxConfig.target = target;
            ajaxConfig.loadingInterrupt = $("#loading");
            ajaxConfig.callback = callback;

            healthStream.ajax.ajaxHandler(ajaxConfig);
        },

        defaultDepartmentSelection: function () {
            var mSelectedChoice = $("div#s2id_DepartmentName a.select2-choice");

            if ($("#DepartmentId").val() === undefined) {
                $("#DepartmentName").val("");
            }
            if ($("#DepartmentName").val() !== undefined && $("#DepartmentName").val() !== "") {
                mSelectedChoice.removeClass("select2-default");
                mSelectedChoice.find("span.select2-chosen").eq(0).html($("#DepartmentName").val());
            } else {
                mSelectedChoice.addClass("select2-default");
                mSelectedChoice.find("span.select2-chosen").eq(0).html(departmentSelection);
            }
        },

        defaultAffiliationSelection: function () {
            var mSelectedChoice = $("div#s2id_InstitutionName a.select2-choice");
            if ($("#InstitutionId").val() === undefined) {
                $("#InstitutionName").val("");
            }
            if ($("#InstitutionName").val() !== undefined && $("#InstitutionName").val() !== "") {
                mSelectedChoice.removeClass("select2-default");
                mSelectedChoice.find("span.select2-chosen").eq(0).html($("#InstitutionName").val());
            } else {
                mSelectedChoice.addClass("select2-default");
                mSelectedChoice.find("span.select2-chosen").eq(0).html(affiliationSelection);
            }
        },

        defaultProfessionSelection: function () {
            var mSelectedChoice = $("div#s2id_ProfessionName a.select2-choice");
            if ($("#ProfessionId").val() === undefined) {
                $("#ProfessionName").val("");
            }
            if ($("#ProfessionName").val() !== undefined && $("#ProfessionName").val() !== "") {
                mSelectedChoice.removeClass("select2-default");
                mSelectedChoice.find("span.select2-chosen").eq(0).html($("#ProfessionName").val());

                var registeredNurse = $("#RegisteredNurseProfession").val();
                if ($("#ProfessionName").val() === registeredNurse) {
                    $(".specialty").show();
                } else {
                    $("#SpecialtyName").val("");
                    $(".specialty").hide();
                }

            } else {
                mSelectedChoice.addClass("select2-default");
                mSelectedChoice.find("span.select2-chosen").eq(0).html(professionSelection);
            }
        },

        defaultSpecialtySelection: function () {
            var mSelectedChoice = $("div#s2id_SpecialtyName a.select2-choice");

            if ($("#SpecialtyId").val() === undefined) {
                $("#SpecialtyName").val("");
            }

            var registeredNurse = $("#RegisteredNurseProfession").val();
            if ($("#ProfessionName").val() === registeredNurse && ($("#SpecialtyId").val() === undefined)) {
                    $("#SpecialtyName").val("");
                    $("#SpecialtyId").val("00000000-0000-0000-0000-000000000000");
            }

            if ($("#ProfessionName").val() !== registeredNurse) {
                $("#SpecialtyName").val("");
                $("#SpecialtyId").val("00000000-0000-0000-0000-000000000000");
            }

            if ($("#SpecialtyName").val() !== undefined && $("#SpecialtyName").val() !== "") {
                mSelectedChoice.removeClass("select2-default");
                mSelectedChoice.find("span.select2-chosen").eq(0).html($("#SpecialtyName").val());
            } else {
                mSelectedChoice.addClass("select2-default");
                mSelectedChoice.find("span.select2-chosen").eq(0).html(specialtySelection);
            }
        },

        formatDepartmentSelection: function (data) {

            $("#DepartmentId").val(data.id);
            $("#DepartmentName").val(data.text);

            $(".affiliation").removeClass("has-error");
            $("#department-error").hide();
            return data.text;
        },

        formatInstitutionSelection: function (data) {

            $("#InstitutionId").val(data.id);
            $("#InstitutionName").val(data.text);

            $("#affiliation-error").hide();
            $(".department").removeClass("has-error");
            if ($("#AccessLevel").val() !== "" && $("#AccessLevel option:selected").val() === affiliationAccessLevel) {
                $(".department").hide();
            } else {
                $(".department").show();
            }
            return data.text;
        },

        formatProfessionSelection: function (data) {
            $("#ProfessionId").val(data.id);
            $("#ProfessionName").val(data.text);
            $(".profession").removeClass("has-error");
            $("#profession-error").hide();

            var registeredNurse = $("#RegisteredNurseProfession").val();
            if (data.text === registeredNurse) {
                $(".specialty").show();
            } else {
                $(".specialty").hide();
            }
            $(".alert").removeClass("alert-danger");
            $("#validationMessage").hide();
            return data.text;
        },

        formatSpecialtySelection: function (data) {
            $("#SpecialtyId").val(data.id);
            $("#SpecialtyName").val(data.text);
            $(".specialty").removeClass("has-error");
            $("#specialty-error").hide();
            $(".alert").removeClass("alert-danger");
            $("#validationMessage").hide();
            return data.text;
        },

        anyRolesDefined: function () {
            return ($("#UserModel_EmployeeExistingRoles").val() !== "") || ($("#UserModel_AdminExistingRoles").val() !== "");
        },

        updateSaveButtons: function () {
            $("#submit-button, #save-add-another-button")
                .attr("disabled", !healthStream.users.anyRolesDefined());
        },

        updateEmployeeRolesAddButton: function () {
            var existingEmpRolesFlag = ($("#UserModel_EmployeeExistingRoles").val() !== "");
            var employeeRolesKey = $("#UserModel_EmployeeRolesCacheKey").val();
            var existingAdminRolesFlag = ($("#UserModel_AdminExistingRoles").val() !== "");
            var adminRolesKey = $("#UserModel_AdminRolesCacheKey").val();
            var employeeAssessmentPathKey = $("#UserModel_EmployeeAssessmentPathCacheKey").val();
            var assessmentsToReassignKey = $("#UserModel_AssessmentsToReassignCacheKey").val();

            $("#employeeRoleForm").attr("href", getEmployeeRoleDialogUrlBase + "?" + employeeRolesCacheKey + "=" + employeeRolesKey + "&" + adminRolesCacheKey + "=" + adminRolesKey + "&" + employeeAssessmentPathCacheKey + "=" + employeeAssessmentPathKey + "&" + assessmentsToReassignCacheKey + "=" + assessmentsToReassignKey + "&" + empRoleExist + "=" + existingEmpRolesFlag + "&" + adminRoleExist + "=" + existingAdminRolesFlag);
        },

        updateAdminRolesAddButton: function () {
            var existingAdminRolesFlag = ($("#UserModel_AdminExistingRoles").val() !== "");
            var adminRolesKey = $("#UserModel_AdminRolesCacheKey").val();
            var existingEmpRolesFlag = ($("#UserModel_EmployeeExistingRoles").val() !== "");
            var employeeRolesKey = $("#UserModel_EmployeeRolesCacheKey").val();
            $("#adminRoleForm").attr("href", getAdminRoleDialogUrlBase + "?" + adminRolesCacheKey + "=" + adminRolesKey + "&" + employeeRolesCacheKey + "=" + employeeRolesKey + "&" + adminRoleExist + "=" + existingAdminRolesFlag + "&" + empRoleExist + "=" + existingEmpRolesFlag);
        },

        searchAssessmentResult: function (professionId, specialityId) {
            var professionId = professionId;
            var specialtyId = specialityId;
            var organizationId = $('#OrganizationId').val();
            var employeeAssessmentPathCacheKey = $('#EmployeeAssessmentPathCacheKey').val();
            var employeeRoleId = $("#EmployeeRoleId").val();
            var assessmentCacheKey = $('#AssessmentsToAssignCacheKey').val();
            var userId = $('#UserId').val();
            var employeeRolesCacheKey = $("#EmployeeRolesCacheKey").val();
            var assessmentsToReassignCacheKey = $("#AssessmentsToReassignCacheKey").val();
            var action = getEmployeeAssessment + "?ProfessionId=" + professionId + "&SpecialtyId=" + specialtyId + "&OrganizationId=" + organizationId + "&EmployeeAssessmentPathCacheKey=" + employeeAssessmentPathCacheKey + "&EmployeeRoleId=" + employeeRoleId + "&AssessmentsToAssignCacheKey=" + assessmentCacheKey + "&userId=" + userId + "&EmployeeRolesCacheKey=" + employeeRolesCacheKey + "&AssessmentsToReassignCacheKey=" + assessmentsToReassignCacheKey;
            var result = $("#assessmentResult");
            healthStream.users.ajaxCall(action, result);

        },

        getAssessmentsList: function (assessmentCacheKey, userId, reassignAssessmentCacheKey) {
            var assessmentCacheKey = assessmentCacheKey;
            var action = getAssessmentsList + "?assessmentCacheKey=" + assessmentCacheKey + "&userId=" + userId + "&reassignAssessmentCacheKey=" + reassignAssessmentCacheKey;
            var result = $("#assessmentsGrid");
            healthStream.users.ajaxCall(action, result);
        },

        getAdminRolesList: function (adminRolesCacheKey) {
            var action = getAdminRolesList + "?adminRolesCacheKey=" + adminRolesCacheKey;
            var result = $("#adminGrid");
            healthStream.users.ajaxCall(action, result);
        },

        attachEventsForAssessmentModalDialog: function () {
            $("#assessment-form-submit-btn").attr("disabled", false);
            $("#completed-assessment").on("click", "a", healthStream.users.reAssignAssessmentClick);
            $("#select-all-assessments").on("change", function () {
                if (this.checked === true) {
                    $(".checkable").find("input:checkbox").prop("checked", true);
                }
                else {
                    $(".checkable").find("input:checkbox").prop("checked", false);
                }
            });


        },

        ajaxCall: function (action, result) {
            $.ajax({
                type: "GET",
                url: action,
                dataType: "html",
                contentType: "application/json",
                success: function (data) {
                    if (healthStream.users.isJsonErrorResponse(data)) {
                        window.location.href = jQuery.parseJSON(data).url;
                    } else {
                        result.empty();
                        result.html(data);
                        if (result[0].id === "assessmentResult") {
                            healthStream.users.attachEventsForAssessmentModalDialog();
                        }
                    }
                },
                error: function (data) {
                    window.location.href = jQuery.parseJSON(data).url;
                    return;
                }
            });
        },

        isJsonErrorResponse: function (data) {
            try {
                jQuery.parseJSON(data);
            } catch (e) {
                return false;
            }
            return true;
        }
    };
}(window, jQuery));