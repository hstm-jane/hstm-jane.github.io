/*jslint browser: true*/
/*global  jQuery */
/*global  Globalize */

(function (window, $, globalize) {
    'use strict';

    window.HealthStream = window.HealthStream || {};
    var healthStream = window.HealthStream;

    healthStream.globalization = {
        init: function () {
            var languages = $("meta[name='accept-language']").attr("content");
            if (languages) {
                globalize.culture(languages);
            }
        }
    };
}(window, jQuery, Globalize));