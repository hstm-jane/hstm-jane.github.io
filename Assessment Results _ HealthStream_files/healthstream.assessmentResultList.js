(function (window, $) {
    "use strict";

    window.HealthStream = window.HealthStream || {};
    var healthStream = window.HealthStream;

    var assessmentResultsUrlBase;
    var searchText;
    var sortOption;
    var sortColumn;
    var recordsPerPage;
    var currentPage;
    var filterCacheKey;
    var assessmentResultsInterruptUrlBase;

    healthStream.assessmentResultList = {

        init: function (options) {
            assessmentResultsUrlBase = options.assessmentResultsUrlBase;
            searchText = options.searchText;
            sortOption = options.sortOption;
            sortColumn = options.sortColumn;
            recordsPerPage = options.recordsPerPage;
            currentPage = options.currentPage;
            filterCacheKey = options.filterCacheKey;
            assessmentResultsInterruptUrlBase = options.assessmentResultsInterruptUrlBase;

            healthStream.assessmentResultList.moduleInit();
        },

        moduleInit: function () {

            healthStream.assessmentResultList.formatTableRows();

            $("#ResultsFilter_SearchText").keyup(function () {
                healthStream.assessmentResultList.searchAssessmentResult();
            });

            $("th.header").click(function () {
                healthStream.assessmentResultList.sortAssessmentResult($(this));
            });

            $("#users-confirmation-container")
               .off("complete.HealthStream.ajax", healthStream.assessmentResultList.onUsersInterruptionDialogLoaded)
               .on("complete.HealthStream.ajax", healthStream.assessmentResultList.onUsersInterruptionDialogLoaded);

            healthStream.assessmentResultList.bindEvents();
        },

        searchAssessmentResult: function () {
            var searchTextValue = $("#ResultsFilter_SearchText").val();
            var existingFilter = $.parseJSON($("#ResultFilterJsonString").val());
            var action = assessmentResultsUrlBase + "?" + searchText + "=" + searchTextValue + "&" + sortOption + "=" + existingFilter.SortOption + "&" + sortColumn + "=" + existingFilter.SortColumn + "&" + recordsPerPage + "=" + existingFilter.RecordsPerPage + "&" + currentPage + "= 1" + "&" + filterCacheKey + "=" + existingFilter.FilterCacheKey;
            $.ajax({
                type: "GET",
                url: action,
                dataType: "html",
                success: function (data) {

                    if (healthStream.assessmentResultList.isJsonErrorResponse(data)) {
                        window.location.href = jQuery.parseJSON(data).url;
                    } else {
                        $("#assessmentResultGrid").empty();
                        $("#assessmentResultGrid").html(data);
                        $("#headerText").html($("#Pagination_FormattedResult").val());
                        healthStream.assessmentResultList.formatTableRows();
                    }
                },
                error: function (data) {
                    window.location.href = jQuery.parseJSON(data).url;
                    return;
                }
            });
        },

        sortAssessmentResult: function (sortBy) {
            var sortingColumn = $(sortBy).attr("data-column");
            var searchTextValue = $("#ResultsFilter_SearchText").val();
            var existingFilter = $.parseJSON($("#ResultFilterJsonString").val());
            var sortDirection = 0;
            var ascendingFlag = false;
            var descendingFlag = false;

            if (sortingColumn === existingFilter.SortColumn.toString()) {
                if (existingFilter.SortOption === 1) {
                    sortDirection = 2;
                    descendingFlag = true;
                } else if (existingFilter.SortOption === 2) {
                    sortDirection = 1;
                    ascendingFlag = true;
                }
            } else {
                sortDirection = 2;
                descendingFlag = true;
            }

            var action = assessmentResultsUrlBase + "?" + searchText + "=" + searchTextValue + "&" + sortOption + "=" + sortDirection + "&" + sortColumn + "=" + sortingColumn + "&" + recordsPerPage + "=" + existingFilter.RecordsPerPage + "&" + currentPage + "=" + existingFilter.CurrentPage + "&" + filterCacheKey + "=" + existingFilter.FilterCacheKey;
            $.ajax({
                type: "GET",
                url: action,
                dataType: "html",
                success: function (data) {

                    if (healthStream.assessmentResultList.isJsonErrorResponse(data)) {
                        window.location.href = jQuery.parseJSON(data).url;
                    } else {
                        $("#assessmentResultGrid").empty();
                        $("#assessmentResultGrid").html(data);

                        $(sortBy).siblings().not(":last").removeClass("sorting_asc");
                        $(sortBy).siblings().not(":last").removeClass("sorting_desc");
                        $(sortBy).siblings().not(":last").removeClass("sorting");
                        $(sortBy).siblings().not(":last").addClass("sorting");

                        if (ascendingFlag) {
                            $(sortBy).removeClass("sorting");
                            $(sortBy).removeClass("sorting_desc");
                            $(sortBy).addClass("sorting_asc");
                        } else if (descendingFlag) {
                            $(sortBy).removeClass("sorting");
                            $(sortBy).removeClass("sorting_asc");
                            $(sortBy).addClass("sorting_desc");
                        }

                        healthStream.assessmentResultList.formatTableRows();
                    }
                },
                error: function (data) {
                    window.location.href = jQuery.parseJSON(data).url;
                    return;
                }
            });
        },

        formatTableRows: function () {
            $("tr:odd").addClass("odd");
            $("tr:even").addClass("even");
        },

        onUsersInterruptionDialogLoaded: function () {
            $("#users-interruption-modal-dialog").modal();
        },

        bindEvents: function () {
            $(document)
             .off("click", ".btn.btn-sm.btn-danger", healthStream.assessmentResultList.deleteUserAssignments)
             .on("click", ".btn.btn-sm.btn-danger", healthStream.assessmentResultList.deleteUserAssignments);
        },

        deleteUserAssignments: function (evt) {
            var $row = $(this).closest("tr"),
                $tds = $row.find("td");
            var assignmentId = $tds[0].innerText;
            var assessmentType = $tds[3].innerText;
            var interruptUrl = assessmentResultsInterruptUrlBase + "?assignmentId=" + assignmentId + "&assessmentType=" + assessmentType;
            var ajaxConfig = new healthStream.ajax.AjaxConfiguration(interruptUrl);
            ajaxConfig.target = $("#users-confirmation-container");
            ajaxConfig.loadingInterrupt = $("#loading");
            healthStream.ajax.ajaxHandler(ajaxConfig);
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