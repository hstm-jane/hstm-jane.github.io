/*jslint browser: true*/
/*global  jQuery */

(function (window, $) {
    'use strict';

    function formReset() {
        var form = $(this),
            validator = form.data('validator');
        $('.collapse-group.in', form).collapse('toggle');

        // When the form is reset, clear any validation errors
        // currently displayed on the form.
        validator.successList = validator.currentElements = validator.elements();
        validator.showErrors();
        validator.resetForm();
        validator.reset();
    }

    window.HealthStream = window.HealthStream || {};
    var healthStream = window.HealthStream;

    healthStream.validate = {
        attachToForm: function (form) {
            var validator = $(form).data('validator');

            if (!validator) {
                $.validator.unobtrusive.parse(form);
                validator = $(form).data('validator');
            }

            validator.settings.ignore = '';
            validator.settings.onkeyup = false;
            validator.settings.highlight = function (element) {
                $(element).closest('.form-group').addClass("has-error");
            };
            validator.settings.unhighlight = function (element) {
                $(element).closest('.form-group').removeClass("has-error");
            };

            $(form)
                .off('reset', formReset)
                .on('reset', formReset);

            //  validates form input control upon key press
            $("input.form-control[data-val='true']").on("keyup", function () {
                if ($(this).parent().hasClass("has-error")) {
                    $(this).valid();
                }
            });
        }
    };

}(window, jQuery));