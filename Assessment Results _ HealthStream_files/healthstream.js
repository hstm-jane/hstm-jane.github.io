/*jslint browser: true*/
/*global  jQuery */
/*global  Modernizr */

(function (window, $, modernizr) {
    'use strict';

    window.HealthStream = window.HealthStream || {};
    var healthStream = window.HealthStream;

    function makePlaceholders(target) {
        var localTarget = $(target || 'body');

        var $inputs = $("input[type=text],input[type=email],input[type=tel],input[type=url]", localTarget);
        $inputs.each(
                function () {
                    var $this = jQuery(this),
                        val = $.trim($this.val());
                    if (val === this.placeholderVal || val === "") {
                        this.placeholderVal = $this.attr("placeholder");
                        $this.val(this.placeholderVal);
                    }
                }
        )//each
        .bind("focus", function () {
            var $this = jQuery(this),
                val = $.trim($this.val());
            if (val === this.placeholderVal || val === "") {
                $this.val("");
            } else {
                $this.select();
            }//if/else
        })//bind
        .bind("blur", function () {
            var $this = jQuery(this),
                val = $.trim($this.val());
            if (val === this.placeholderVal || val === "") {
                $this.val(this.placeholderVal);
            }//if
        })//bind
        .closest("form").on("submit", function () {
            $inputs.each(
                function () {
                    var $this = jQuery(this),
                        val = $.trim($this.val());
                    if (val === this.placeholderVal) {
                        $this.val("");
                    } //if
                });//each
        });//closest form submit
    }//function

    function preventDoubleSubmission(e) {
        var $this = jQuery(this);
        if ($this.data('submitted') === true) {
            // Previously submitted - don't submit again
            e.preventDefault();
        } else {
            // Mark it so that the next submit can be ignored
            if ($this.valid())
                $this.data('submitted', true);
        }
    }

    function formSubmitOnClick(e) {
        $(this).closest('form').submit();
    }

    function selectOnFocus(e) {
        $(this).select();
    }

    function collapseToggleOnClick(e) {
        $(this).siblings('.collapse-group').collapse('toggle');
        e.preventDefault();
    }

    function resizeOnCollapse(e) {
        $(window).resize();
    }

    healthStream.initSlats = function (target) {
        var localTarget = $(target || 'body');

        var toggleLinksOnSlatsSelector = '.slat-ajax a.collapse-toggle[data-hijax="true"]';

        // Hijax all links except for toggle links on slats.
        $('a[data-hijax="true"]', localTarget)
            .not(toggleLinksOnSlatsSelector)
            .reBind('click touchstart', window.HealthStream.ajax.hijaxHandler);

        // Hijax toggle links on slats.
        $(toggleLinksOnSlatsSelector, localTarget)
            .reBind('click touchstart', window.HealthStream.ajax.slatHijaxHandler);

        healthStream.initCollapse(localTarget);
    };

    healthStream.initCollapse = function (target) {
        var localTarget = $(target || 'body');

        // Initialize collapsible elements.
        $('.collapse-group', localTarget).collapse({
            toggle: false
        });

        $('.collapse-toggle', localTarget)
            .reBind('click', collapseToggleOnClick);

        $('.collapse-group', localTarget)
            .reBind('shown.bs.collapse hidden.bs.collapse', resizeOnCollapse);

        healthStream.utilities.toggleText(localTarget);
    };

    healthStream.initForms = function (target) {
        var localTarget = $(target || 'body');

        $('.js-post', localTarget)
            .reBind('click', formSubmitOnClick);

        if (!modernizr.input.placeholder) { //placeholder support for old browsers
            makePlaceholders(target);
        }

        if (!modernizr.input.autofocus) { //autofocus support for old browsers
            $("input[autofocus]", localTarget).focus();
        } else {
            $("input[autofocus]", localTarget)
                .reBind('focus', selectOnFocus);
        }

        // Hijax for forms.
        localTarget
            .findAndSelf('form[data-hijax="true"]')
            .reBind('submit', window.HealthStream.ajax.formHijaxHandler);

        localTarget
            .findAndSelf("form:not([data-hijax])")
            .reBind('submit', preventDoubleSubmission);

        // validation hijax
        $('a[data-preactionurl]', localTarget)
            .not('[data-hijax="true"]')
            .reBind('click touchstart', window.HealthStream.ajax.preActionHandler);

        localTarget
            .findAndSelf('form[data-preactionurl]')
            .not('[data-hijax="true"]')
            .reBind('submit', window.HealthStream.ajax.preActionHandler);

        if (healthStream.datepicker) {
            healthStream.datepicker.init(localTarget);
        }

        healthStream.initCollapse(localTarget);
    };

    healthStream.init = function () {
        $.ajaxSetup({
            cache: false
        });

        // ----------------------------------
        //  Site-Header
        // -----------------

        $(".site-header .trigger-open").click(function (e) {
            if ($(this).hasClass('trigger-open-header')) {
                $(".site-header").addClass('site-header-open');
                $('html, body').css({
                    'overflow': 'hidden',
                    'height': '100%'
                });
            }
            else if ($(this).hasClass('trigger-open-account')) {
                $(".nav-account").addClass('nav-account-open');
            }
            e.preventDefault();
        });
        $(".site-header .trigger-close").click(function (e) {
            $(".site-header").removeClass('site-header-open');
            $(".nav-account").removeClass('nav-account-open');
            $('html, body').css({
                'overflow': 'auto',
                'height': 'auto'
            });
            e.preventDefault();
        });

        // ----------------------------------
        //  Focus Nav
        // ----------------------------------
        $('.nav-focus .toggle').on('click', function (e) {
            $(this).parents('.nav-focus').toggleClass('nav-focus-open');
            e.preventDefault();
        });

        $('.nav-focus li a')
            .on('click touchstart', function (e) {
                var $t = $(this),
                    isPage = !!$t.attr('data-page');

                if (!isPage) {
                    $t.tab('show');
                    $t.parents('.nav-focus').find('.nav-mobile span span').text($t.text());
                    $t.parents('.nav-focus-open').find('.nav-mobile a').click();
                    e.preventDefault();
                }
            });

        $('a[data-toggle="focus"]').click(function (e) {
            e.preventDefault();
            $('.nav-focus a[href="' + $(this).attr('href') + '"]').click();
        });

        healthStream.initSlats();

        healthStream.initForms();

        // ----------------------------------
        //  Page Tabs
        // ----------------------------------
        $('.nav-pagetabs .toggle').on('click', function (e) {
            $(this).parents('.nav-pagetabs').toggleClass('nav-pagetabs-open');
            e.preventDefault();
        });
        $('.nav-pagetabs li a')
          .on('click touchstart', function (e) {
              var $t = $(this),
                  isPage = !!$t.attr('data-page');

              if (!isPage) {
                  $t.tab('show');
                  $t.parents('.nav-pagetabs-open').find('.nav-mobile a').click();
                  e.preventDefault();
              }
          });
        $('a[data-toggle="focus"]').click(function (e) {
            e.preventDefault();
            $('.nav-pagetabs a[href="' + $(this).attr('href') + '"]').click();
        });

        // ----------------------------------
        //  Question & Answer
        // ----------------------------------
        $('label.answer').click(function () {
            var $t = $(this),
                $a = $t.closest('.question').find('.answer');
            $a.removeClass('selected').has('input:checked').addClass('selected');
        });

        // ----------------------------------
        //  Collapsing Tabs Nav
        // ----------------------------------
        $('.nav-collapsing-tabs')
            .on('click', '.nav-header', function (e) {
                $('.nav-collapsing-tabs').toggleClass('in');
                e.preventDefault();
            })
            .on('click', '.nav a', function (e) {
                $('.nav-collapsing-tabs .nav-header span').text($(this).text());
                $('.nav-collapsing-tabs').removeClass('in');
                e.preventDefault();
            });

        // ----------------------------------
        //  Select2 Controls
        // ----------------------------------
        if (window.Select2) {
            $(".control-select2").select2({
                placeholder: "Select all that apply"
            }).on("select2-selecting", function () {
                $(window).resize();
            });
        }

        //-------------------------------------
        // Handles the window.print
        //-------------------------------------

        $(".window-print").on('click', function () {
            window.open($(this).attr('data-url'), "_blank", 'resizable=yes,width=960,height=800,scrollbars=yes,left=200,top=100');
        });

    };

    healthStream.initPrint = function () {
        $(".window-print").on('click', function () {
            window.open($(this).attr('data-url'), "_blank", 'resizable=yes,width=960,height=800,scrollbars=yes,left=200,top=100');
        });
    };

    $(function () {
        healthStream.init();
    });

}(window, jQuery, Modernizr));