 (function(window, $) {
     'use strict';

    window.HealthStream = window.HealthStream || {};
    var healthStream = window.HealthStream;

    healthStream.search = {};

    //Show/Hide Additional Filters
    $(".search-filter:not('.showOnLoad')").hide();

    healthStream.search.multiselect = function() {
         // filter and multiselect only filtered results

         // select all in a search filter
         $(".check-all").change(function() {

             var $checkbox = $(this);
             var $filterBox = $(this).closest(".search-filter").find(".search-filter-body");

             if ($filterBox.hasClass("in")) {
                 if ($($checkbox).is(':checked')) {
                     $(this).closest(".search-filter").find(".multi-filter input:visible").prop("checked", true);
                 } else {
                     $(this).closest(".search-filter").find(".multi-filter input:visible").prop("checked", false);
                 }
             } else {
                 if ($($checkbox).is(':checked')) {
                     $(this).closest(".search-filter").find(".multi-filter input").prop("checked", true);
                 } else {
                     $(this).closest(".search-filter").find(".multi-filter input").prop("checked", false);
                 }

             }

         });

         $(".check-filter").change(function() {
             var $checkbox = $(this);
             var checkedLength = $checkbox.parents(".search-filter-body").find(".check-filter:checked").length;
             var checkboxLength = $checkbox.parents(".search-filter-body").find(".check-filter").length;

             if ($checkbox.prop('checked')) {
                 if (checkedLength == checkboxLength) {
                     $checkbox.parents(".search-filter").find(".check-all").prop("checked", true);
                 }
             } else {
                 $checkbox.parents(".search-filter").find(".check-all").prop("checked", false);
             }
         });
    };
    healthStream.search.datepicker = function() {
         $('#hire-from-date, #hire-through-date')
             .datepicker({
                 autoclose: true
             });
    };
    healthStream.search.chooseFilter = function() {

        $("input[name='affiliations']").change(function(){
            if($('#all-affiliations').is(':checked')){
                $(".section-refinement-group .checkbox").hide();
                $('.search-filter.showOnLoad').hide();
                $('.search-filter.affiliations-filter').show();
                $(".checkbox input").prop('checked',false);

            }
            else{
                $(".section-refinement-group .checkbox").show();
                $('.search-filter.showOnLoad').show();
                $('.search-filter.affiliations-filter').hide();
                $(".checkbox input").prop('checked',true);
            }

            $(window).resize();
        });

        var elementPosition = $('.section-filters').offset();

        //scroll to chosen filter
        $(window).scroll(function() {
            if ($(window).scrollTop() > elementPosition.top) {
                $('.section-filters').css('position', 'fixed').css('top', '0');
                $('.stickybar').css('padding-top', '90px');
            } else {
                $('.section-filters').css('position', 'static');
            }
        });

        //choose filter from additional filters
        $(".section-refinement-group .checkbox input[type='checkbox']").change(function() {
             var checkboxValue = $(this).val();

             $(".filter-title:contains(" + checkboxValue + ")").parents(".search-filter").toggle();

             //Scroll to top of selected filter
             $('html, body').animate({
                 scrollTop: $(".filter-title:contains(" + checkboxValue + ")").parents(".search-filter").offset().top
             }, 'slow');

            $(window).resize();
         });


    };

    healthStream.search.chooseFilterMobile = function() {
        //use html from filters panel in filter modal
        $('#modal-filter').on('show.bs.modal', function() {
            $(this).find('.modal-body').html($('.search-panel-filters').html());
            $('.search-panel-filters').empty();
            healthStream.search.chooseFilter();
        });

        $('#modal-filter').on('hidden.bs.modal', function() {
            $('.search-panel-filters').append($('#modal-filter .modal-body').html());
            $('#modal-filter .modal-body').empty();
            healthStream.search.chooseFilter();
        });
    };

    healthStream.search.filter = function() {

         // Collapse Filter by clicking the arrow or the filter box title
         $('.min-filter, .filter-title').click(function(e) {
             e.preventDefault();
             var sf = $(this).closest('.search-filter');
             $(sf).find('.min-filter').toggleClass('fa-chevron-up  fa-chevron-down');
             $(sf).find('.search-filter-body').toggleClass('collapse collapse in');
             $(sf).find('.search-filter-header').toggleClass('collapsed-border expand-border');
         });


         // Filter Results by typing into the find input
         $('.filter-input-box').keyup(function() {

             var searchTerm = this.value.toLowerCase();

             //For each checkbox in the filter hide or show depending on the input text
             $(this).parents('.search-filter').find('label span.check-text').each(function() {
                 var inputText = $(this).text(),
                     valThis = inputText.toLowerCase();

                 (valThis.indexOf(searchTerm) > -1) ? $(this).closest('.filter-label').show(): $(this).closest('.filter-label').hide();
             });

             //adjust check-all when checkboxes are filtered
             var checkedLength = $(this).parents(".search-filter").find(".check-filter:checked").length;
             var checkboxLength = $(this).parents(".search-filter").find(".check-filter").length;

             if (checkedLength == checkboxLength) {
                 $(this).parents(".search-filter").find(".check-all").prop("checked", true);
             } else {
                 $(this).parents(".search-filter").find(".check-all").prop("checked", false);
             }


         });
    };

    healthStream.search.appendCommasToIDs = function() {
         $("#id-textarea").bind("paste", function(e) {

             e.preventDefault();

             var pastedData = e.originalEvent.clipboardData.getData('text'),
                 currentData = $(this).val(),
                 dataWithCommas = currentData + pastedData.replace(/\r?\n/g, ', ');

             $(this).val(dataWithCommas);

         });
    };

    $(window).on('load', function() {
        healthStream.search.multiselect();
        healthStream.search.datepicker();
        healthStream.search.chooseFilter();
        healthStream.search.chooseFilterMobile();
        healthStream.search.filter();
        healthStream.search.appendCommasToIDs();
    });

 }(window, jQuery));
