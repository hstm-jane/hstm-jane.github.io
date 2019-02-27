(function (window, $) {
    'use strict';

    window.HealthStream = window.HealthStream || {};
    window.HealthStream.utilities = window.HealthStream.utilities || {};
    var healthStream = window.HealthStream;

    healthStream.utilities.growl = function (options) {

        var settings = {
            slide_in_speed: 500,
            fade_out_speed: 400
        };

        settings.title = options.title || 'A title is required for the growl call';
        settings.text = decodeURIComponent(options.text) || null;
        settings.sticky = options.sticky || null;
        settings.time = options.time || null;
        settings.image = options.image || null;

        var googleEventTrackingInfo = options.googleEventTrackingInfo;
        if (googleEventTrackingInfo) {
            var eventName = googleEventTrackingInfo.eventName;
            var action = googleEventTrackingInfo.actionName;
            settings.after_close = healthStream.GoogleAnalyticsObject.growlEventTracker(eventName, action);
        }

        switch (options.type) {
            case 'success':
                settings.class_name = 'gritter-item-success';
                break;
            case 'info':
                settings.class_name = 'gritter-item-info';
                break;
            case 'warning':
                settings.class_name = 'gritter-item-warning';
                break;
            case 'failure':
                settings.class_name = 'gritter-item-failure';
                break;
        }

        $.gritter.add(settings);
    };

}(window, jQuery));