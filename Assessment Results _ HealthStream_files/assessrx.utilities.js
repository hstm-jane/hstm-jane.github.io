(function (window) {
    'use strict';

    window.AssessRx = window.AssessRx || {};
    window.AssessRx.Utilities = window.AssessRx.Utilities || {};
    var assessRx = window.AssessRx;

    assessRx.Utilities.getNthForNumber = function (value) {
        if (value > 3 && value < 21) { return "th" };
        switch (value % 10) {
            case 1: return "st";
            case 2: return "nd";
            case 3: return "rd";
            default: return "th";
        }
    },
    assessRx.Utilities.isIE = function () {
        return document.documentMode;
    },
    assessRx.Utilities.isEdge = function () {
        return /Edge/.test(navigator.userAgent);
    },
    assessRx.Utilities.isIEOrEdge = function () {
        return this.isIE() || this.isEdge();
    }
})(window);