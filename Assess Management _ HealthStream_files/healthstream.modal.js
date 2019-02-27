(function (window, $) {
    'use strict';

    window.HealthStream = window.HealthStream || {};
    var healthStream = window.HealthStream;

    healthStream.modal = {
        closeInterrupt: function (modalId) {
            var domModal = $(modalId);

            if (!domModal.exists()) {
                window.console.log('Could not find modal with ID (' + modalId + ')');
                return;
            }

            domModal.modal('hide');
        },

        attachInterruptDialogToButton: function (triggerElementId, modalDialogId) {
            if ($.clientBrowser.isIOS()) {
                // IOS devices stop processing JavaScript as soon as another tab is opened.
                // Therefore we need to open a new tab only after the modal is displayed.
                // Supporting logic is in healthstream.cache.safariMobile.
                $('#' + triggerElementId).click(function (e) {
                    e.preventDefault();  // Because of back-forward caching we need to take control.

                    var self = $(this),
                        target = self.attr("target") || '_self',
                        href = self.attr("href");
                    if (!href) {
                        window.console.log('Clicked object (' + self.attr("id") + ') does not have an href attribute.');
                        return;
                    }

                    var modal = $('#' + modalDialogId);
                    if (!modal.exists()) {
                        window.console.log('Modal (' + modalDialogId + ') does not exist in the DOM.');
                        // The modal couldn't be opened, but we will still try to open the link.
                        window.open(href, target);
                        return;
                    }

                    modal.modal();
                    modal.on('shown.bs.modal', function () {
                        // Once the modal is open we want to open the link that was clicked.
                        // This will cause the pop up blocker alert message.
                        window.open(href, target);
                    });
                });
            } else {
                $('#' + triggerElementId).click(function () {
                    var modal = $('#' + modalDialogId);
                    if (modal.exists()) {
                        modal.modal();
                    }
                });
            }
        },

        showMultipleInterruptionModals: function (interruptionModalIds) {
            if (interruptionModalIds.length > 0) {
                $.each(interruptionModalIds, function (index, targetModalId) {
                    var interruptionModal = $('#' + targetModalId);
                    interruptionModal.on('hidden.bs.modal', function () {
                        var nextInterruptionId = interruptionModalIds[index + 1];
                        if (nextInterruptionId)
                            healthStream.modal.showInterruption(nextInterruptionId);
                    });
                });
                this.showInterruption(interruptionModalIds[0]);
            }
        },

        showInterruption: function (targetModalId) {
            var interruptionModal = $('#' + targetModalId);
            interruptionModal.modal();
        },

        preventTabOffInterrupt: function () {
            $('body').on('shown.bs.modal', '.modal-interrupt', function () {
                $(this).find('.btn:not(".hidden")').focus();
            });
            $('body').on('keydown', '.modal-interrupt .btn', function (e) {
                if (e.keyCode === 9) {
                    e.preventDefault();
                    var nextSibling = $(this).nextAll('.btn:not(".hidden"):first');
                    if (nextSibling.length != 0) {
                        nextSibling.focus();
                    } else {
                        $(this).parent().children(':not(".hidden"):first').focus();
                    }
                }
            });
        }
    };
}(window, jQuery));