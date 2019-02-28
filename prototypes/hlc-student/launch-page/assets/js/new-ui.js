/* ========================================================================
 * Plugins: Bootstrap Dropdowns & Transitions
 * Bootstrap v3.3.2 (http://getbootstrap.com)
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */

if("undefined"==typeof jQuery)throw new Error("Bootstrap's JavaScript requires jQuery");+function(t){"use strict";var n=t.fn.jquery.split(" ")[0].split(".");if(n[0]<2&&n[1]<9||1==n[0]&&9==n[1]&&n[2]<1)throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher")}(jQuery),+function(t){"use strict";function n(n){n&&3===n.which||(t(e).remove(),t(i).each(function(){var o=t(this),e=r(o),i={relatedTarget:this};e.hasClass("open")&&(e.trigger(n=t.Event("hide.bs.dropdown",i)),n.isDefaultPrevented()||(o.attr("aria-expanded","false"),e.removeClass("open").trigger("hidden.bs.dropdown",i)))}))}function r(n){var r=n.attr("data-target");r||(r=n.attr("href"),r=r&&/#[A-Za-z]/.test(r)&&r.replace(/.*(?=#[^\s]*$)/,""));var o=r&&t(r);return o&&o.length?o:n.parent()}function o(n){return this.each(function(){var r=t(this),o=r.data("bs.dropdown");o||r.data("bs.dropdown",o=new a(this)),"string"==typeof n&&o[n].call(r)})}var e=".dropdown-backdrop",i='[data-toggle="dropdown"]',a=function(n){t(n).on("click.bs.dropdown",this.toggle)};a.VERSION="3.3.2",a.prototype.toggle=function(o){var e=t(this);if(!e.is(".disabled, :disabled")){var i=r(e),a=i.hasClass("open");if(n(),!a){"ontouchstart"in document.documentElement&&!i.closest(".navbar-nav").length&&t('<div class="dropdown-backdrop"/>').insertAfter(t(this)).on("click",n);var s={relatedTarget:this};if(i.trigger(o=t.Event("show.bs.dropdown",s)),o.isDefaultPrevented())return;e.trigger("focus").attr("aria-expanded","true"),i.toggleClass("open").trigger("shown.bs.dropdown",s)}return!1}},a.prototype.keydown=function(n){if(/(38|40|27|32)/.test(n.which)&&!/input|textarea/i.test(n.target.tagName)){var o=t(this);if(n.preventDefault(),n.stopPropagation(),!o.is(".disabled, :disabled")){var e=r(o),a=e.hasClass("open");if(!a&&27!=n.which||a&&27==n.which)return 27==n.which&&e.find(i).trigger("focus"),o.trigger("click");var s=" li:not(.divider):visible a",d=e.find('[role="menu"]'+s+', [role="listbox"]'+s);if(d.length){var p=d.index(n.target);38==n.which&&p>0&&p--,40==n.which&&p<d.length-1&&p++,~p||(p=0),d.eq(p).trigger("focus")}}}};var s=t.fn.dropdown;t.fn.dropdown=o,t.fn.dropdown.Constructor=a,t.fn.dropdown.noConflict=function(){return t.fn.dropdown=s,this},t(document).on("click.bs.dropdown.data-api",n).on("click.bs.dropdown.data-api",".dropdown form",function(t){t.stopPropagation()}).on("click.bs.dropdown.data-api",i,a.prototype.toggle).on("keydown.bs.dropdown.data-api",i,a.prototype.keydown).on("keydown.bs.dropdown.data-api",'[role="menu"]',a.prototype.keydown).on("keydown.bs.dropdown.data-api",'[role="listbox"]',a.prototype.keydown)}(jQuery),+function(t){"use strict";function n(){var t=document.createElement("bootstrap"),n={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(var r in n)if(void 0!==t.style[r])return{end:n[r]};return!1}t.fn.emulateTransitionEnd=function(n){var r=!1,o=this;t(this).one("bsTransitionEnd",function(){r=!0});var e=function(){r||t(o).trigger(t.support.transition.end)};return setTimeout(e,n),this},t(function(){t.support.transition=n(),t.support.transition&&(t.event.special.bsTransitionEnd={bindType:t.support.transition.end,delegateType:t.support.transition.end,handle:function(n){return t(n.target).is(this)?n.handleObj.handler.apply(this,arguments):void 0}})})}(jQuery);


/* ========================================================================
 * File: reports.js
 * Description: Contains all javascript for Healthstream Reports
 * Owner: Healthstream, http://www.healthstream.com
 * Copyright © HealthStream 2015
 * ======================================================================== */

 (function (window, $) {
    'use strict';

    window.HealthStream = window.HealthStream || {};
    var healthStream = window.HealthStream;

    healthStream.reports = {};

    healthStream.reports.header = function(){
        var $el = $('.fph-separator'),
            $fph = $el.closest('.focus-pageheader');
        if ($fph.has('.fph-secondary').length > 0) {
            $el.height($fph.height() - $fph.find('.fph-secondary').position().top );
        }
    };

    healthStream.reports.answerToggle = function(){
        $('.btn-answer-toggle').click(function(e){
            var $btn = $(this),
                $settings = $('.hide-correct'),
                labels = $btn.attr('data-labels').split('|');

            if ( $btn.text() === labels[0] ) {
                $btn.text(labels[1]);
            } else {
                $btn.text(labels[0]);
            }
            $settings.slideToggle();
            e.preventDefault();
        });
    };

    healthStream.reports.answerImgToggle = function(){
        $('.btn-answer-img-toggle').click(function(e){
            var $btn = $(this),
                $settings = $('.test-image img'),
                labels = $btn.attr('data-labels').split('|');

            if ( $btn.text() === labels[0] ) {
                $btn.text(labels[1]);
            } else {
                $btn.text(labels[0]);
            }
            $settings.slideToggle();
            e.preventDefault();
        });
    };

    healthStream.reports.settings = function(){
        $('.btn-settings').click(function(e){
            var $btn = $(this),
                $settings = $('.report-settings'),
                labels = $btn.attr('data-labels').split('|');

            if ( $btn.text() === labels[0] ) {
                $btn.text(labels[1]);
            } else {
                $btn.text(labels[0]);
            }
            $settings.slideToggle();
            e.preventDefault();
        });
    };

    $(window)
        .on('load', function(){
            healthStream.reports.header();
            healthStream.reports.settings();
            healthStream.reports.answerToggle();
            healthStream.reports.answerImgToggle();
        })
        .on('resize', function(){
            healthStream.reports.header();
        });


}(window, jQuery));