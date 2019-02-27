(function (window, $) {
    'use strict';

    window.HealthStream = window.HealthStream || {};
    var healthStream = window.HealthStream;

    healthStream.cache = {
        safariMobile: function (event) {
            // Prevent mobile safari back-forward cache by reloading the page.
            // http://stackoverflow.com/questions/11979156/mobile-safari-back-button
            // An exception is when a modal is open.  In that case we do not want to reload the page.
            if (event.persisted && $('.modal-interrupt.in, .modal.in').length === 0) {
                window.location.reload();
            }
        }
    };
}(window, jQuery));