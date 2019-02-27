'use strict';
(function (window, $) {
    window.HealthStream = window.HealthStream || {};
    var healthStream = window.HealthStream;

    healthStream.assessNavbar = {

        init: function (options) {
            var giveFeedbackText = options.giveFeedbackText;

            $(".nav-main .nav").append("<li><div class='container-fluid'><div class='row'><a href='https://www.surveymonkey.com/r/WB5SGTS' target='_blank' class='btn btn-primary col-xs-10' style='margin: 7px 20px;'>" + giveFeedbackText + "</a></div></div></li>");
        }
    };
}(window, jQuery));