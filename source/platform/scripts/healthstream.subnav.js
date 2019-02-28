(function (window, $) {
    'use strict';

    window.HealthStream = window.HealthStream || {};
    var healthStream = window.HealthStream;

    healthStream.subnav = function(){
        $('.layout-subnav-nav-mobile .toggle').on('click',function(){
            $('.layout-subnav-nav').toggleClass('layout-subnav-nav-open');
        });
        $('.layout-subnav-nav ul a').on('click',function(){
            $('.layout-subnav-nav').removeClass('layout-subnav-nav-open');
        });
    }

    $(window).on('load', function(){
        healthStream.subnav();
    });

}(window, jQuery));