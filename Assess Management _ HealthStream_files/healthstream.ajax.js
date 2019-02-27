/*jslint browser: true*/
/*global  jQuery */
/*dependency: healthstream.jquery.js*/

(function (window, $) {
    'use strict';

    window.HealthStream = window.HealthStream || {};
    var healthStream = window.HealthStream;

    healthStream.ajax = {
        // usage: 
        // var config = new AjaxConfiguration(action_url);
        // config.options = (ajax options, such as data: {} and type: 'POST' and error handler
        // config.target = target to push the response
        // config.interrupt = $('#interrupt') jquery object that represents the interrupt to show
        // config.callback = a function to call on success
        AjaxConfiguration: function (url) {
            var mUrl = url,
                mOptions,
                mTarget,
                mLoadingInterrupt,
                mCallback,
                mPreActionUrl = '';

            return {
                url: mUrl,
                options: mOptions,
                target: mTarget,
                loadingInterrupt: mLoadingInterrupt,
                callback: mCallback,
                preActionUrl: mPreActionUrl
            };
        },

        ajaxHandler: function (ajaxConfiguration) {
            var configuration = {
                success: function (result) {
                    if (result.httpStatusCode === 302) {
                        if (result.url == window.location.pathname) {
                            window.location.reload(true);
                        } else {
                            window.location.assign(result.url);
                        }
                    } else {
                        if (ajaxConfiguration.target) {
                            if (result.length > 0) {
                                // If successful and no data then assume the previous content should remain.  
                                // If this is not the desired effect then use complete.HealthStream.ajax to clear content.
                                ajaxConfiguration.target.empty();
                                ajaxConfiguration.target.html(result);
                            }
                            // This event fires even if JQuery unobtrusive validation was unsuccessful.
                            // You can detect this if the event handlers data parameter has a length property equal to 0.
                            ajaxConfiguration.target.trigger("complete.HealthStream.ajax", result);
                            $(window).resize(); //making sure floating bar is showing after the ajax call.
                        }

                        if (ajaxConfiguration.callback) {
                            ajaxConfiguration.callback(result);
                        }

                        if (ajaxConfiguration.loadingInterrupt) {
                            ajaxConfiguration.loadingInterrupt.hide();
                        }
                    }
                },
                beforeSend: function (xhr) {
                    var mBuildVersion = $('#BuildVersion').val();
                    if (typeof mBuildVersion != "undefined" && mBuildVersion !== '') {
                        xhr.setRequestHeader('X-HSTM-BuildVersion', mBuildVersion);
                    }
                },
                error: function () {
                    var localization = healthStream.localization,
                        utilities = healthStream.utilities,
                        errorTitle = "Error",
                        errorMessage = "There was an error communicating with the server";

                    //We're hoping that healthStream.localization is spitting out the appropriate resources
                    if (utilities && utilities.growl) {
                        if (localization) {
                            errorTitle = localization.Error || "Error";
                            errorMessage = localization.AjaxDefaultError || "There was an error communicating with the server";
                        }

                        //maintenance issue here.  Does the image path exist?
                        utilities.growl(
                        {
                            title: errorTitle,
                            text: errorMessage,
                            sticky: true,
                            image: "http://www.healthstream.com/hsapp/content/images/icon-failure.png",
                            type: "failure"
                        }
                        );
                    }

                    if (ajaxConfiguration.loadingInterrupt) {
                        ajaxConfiguration.loadingInterrupt.hide();
                    }
                }
            };

            //don't allow the success handler to get passed in:
            if (ajaxConfiguration.options && ajaxConfiguration.options.success) {
                delete ajaxConfiguration.options.success;
            }

            //push the passed in options into our defaults
            //defaults get overridden by the passed in values if there is an overlap
            $.extend(configuration, ajaxConfiguration.options);

            if (ajaxConfiguration.loadingInterrupt) {
                ajaxConfiguration.loadingInterrupt.show().center(window);
            }

            //check to see if we need to make a server call to validate prior to issuing the ajax request
            if (ajaxConfiguration.preActionUrl) {
                //copy the configuration and swap out the success handler
                var preActionConfig = $.extend(
                    configuration,
                    {
                        success: function (response) {
                            healthStream.ajax.handlePreActionResponse(response,
                                {
                                    loadingInterrupt: ajaxConfiguration.loadingInterrupt,
                                    originalEvent: function () {
                                        window.HealthStream.ajax.ajaxHandler(ajaxConfiguration);
                                    }
                                });
                        }
                    });
                $.ajax(ajaxConfiguration.preActionUrl, preActionConfig);
            } else {
                $.ajax(ajaxConfiguration.url, configuration);
            }

        },
        handlePreActionResponse: function (response, configuration) {

            var modalWrapper = $('#PreActionModal');
            if (modalWrapper.length) {
                var modal = modalWrapper.find('.modal');
                if (modal.length > 0) {
                    if (!modal.is('[id]')) {
                        modal.attr('id', 'modalId');
                    }
                    window.HealthStream.modal.closeInterrupt('#' + modal.attr('id'));
                    modalWrapper.empty();
                    $('.modal-backdrop').remove();
                }
            }

            if (response.httpStatusCode === 302) {
                $(configuration.loadingInterrupt).hide();
                window.location.replace(response.url);
                return;
            }

            if (response.isvalid === true) {
                delete configuration.preActionUrl;
                configuration.originalEvent();
                return;
            }

            $(configuration.loadingInterrupt).hide();

            //Partial View rendering
            if (response.view) {
                if (!modalWrapper.length) {
                    modalWrapper = $("<div />", { id: 'PreActionModal' });
                }
                modalWrapper.html(response.view);
                $('body').append(modalWrapper);

                var form = modalWrapper.find('form');
                if (form.length) {
                    form.on('submit', function (e) {
                        if (!$.isFunction(form.valid) || form.valid()) {
                            e.preventDefault();

                            $.ajax(form.attr('action'), {
                                type: 'POST',
                                data: form.serialize(),
                                success: function (data) {
                                    healthStream.ajax.handlePreActionResponse(data,
                                    {
                                        loadingInterrupt: configuration.loadingInterrupt,
                                        originalEvent: function () {
                                            configuration.originalEvent();
                                        },
                                    });
                                }
                            });
                        } else {
                            return false;
                        }
                    });
                }
                modalWrapper.find('.modal').modal();
                return;
            }

            //Growl Errors
            var utilities = healthStream.utilities;

            var growl = response.growl || {
                title: "Error",
                text: "There was an error completing this request",
                sticky: true,
                image: "http://www.healthstream.com/hsapp/content/images/icon-failure.png",
                type: "failure"
            };

            if (utilities && utilities.growl) {
                utilities.growl(
                {
                    title: growl.title,
                    text: growl.text,
                    sticky: growl.sticky,
                    image: growl.image,
                    type: growl.type
                });
            }

            return true;
        },

        preActionHandler: function (e) {
            var element = $(this),
                validated = element.data('validated'),
                preActionUrl = element.data('preactionurl');

            if (validated !== true && preActionUrl) {
                var element = $(this),
                    event = e.type;
                e.preventDefault();

                var loading = $('#loading');

                if (!loading.length) {
                    //maintainence issue
                    loading = $('<div />', { id: 'loading', 'class': 'tab-pane' });
                    var center = $('<div />', { 'class': 'text-center' });
                    center.append($('<img />', { src: 'http://www.healthstream.com/hsapp/content/images/loading.gif', alt: 'Loading' }));
                    loading.append(center);
                    var container = $('.container');
                    if (container.length) {
                        container.Append(loading);
                    } else {
                        $('body').append(loading);
                    }
                }

                loading.show().center();

                $.getJSON(preActionUrl, function (response) {
                    healthStream.ajax.handlePreActionResponse(response,
                    {
                        loadingInterrupt: loading,
                        originalEvent: function () {
                            element.data('validated', true);
                            element.removeAttr('disabled');
                            loading.hide();
                            if (event == 'click')
                                element[0].click();
                            else if (event == 'submit')
                                element[0].submit();

                            return true;
                        },
                    });
                }
                );
            }
            return true;
        },

        hijaxHandler: function (e) {
            e.preventDefault();
            var sender = $(this);

            if (sender.data('clicked')) {
                return;
            }
            sender.data('clicked', true);

            var target = $($(this).attr('data-target')),
                url = this.href;

            var ajaxConfig = new healthStream.ajax.AjaxConfiguration(url);
            ajaxConfig.target = target;
            ajaxConfig.loadingInterrupt = $('#loading');
            ajaxConfig.preActionUrl = $(this).data('preactionurl');
            ajaxConfig.callback = function (data) {
                sender.data('clicked', false);
                if (ajaxConfig.loadingInterrupt) {
                    ajaxConfig.loadingInterrupt.hide();
                }
            };
            healthStream.ajax.ajaxHandler(ajaxConfig);
        },

        slatHijaxHandler: function (e) {
            var url = this.href,
                $el = $(this).closest('.slat-nested').find('.collapse-group');

            // If data has already been retrieved don't retrieve it again.
            if (!$el.hasClass('loaded')) {
                // This event handler can be called multiple times per user action (click and touchstart).
                if (!$el.hasClass('loading')) {
                    $el.addClass('loading');

                    // A bootstrap event handler causes a slideDown to occur when the link is clicked.

                    var ajaxConfig = new healthStream.ajax.AjaxConfiguration(url);
                    ajaxConfig.callback = function (data) {
                        $el.find('.ajax-content, .ajax-loading').slideUp(function () {
                            $el.addClass('loaded');
                            $el.find('.ajax-content').html(data).slideDown();
                        });
                    };

                    healthStream.ajax.ajaxHandler(ajaxConfig);
                }
            }
        },

        formHijaxHandler: function (e) {
            e.preventDefault();
            var form = $(this);

            // .isValid is defined in healthstream.jquery.js
            if (!form.isValid()) {
                return;
            }

            var target = $(form.attr('data-target')),
                url = form.attr('action'),
                type = form.attr('method'),
                data = form.serialize();

            if (form.data('posting')) {
                return;
            }
            form.data('posting', true);

            var ajaxConfig = new healthStream.ajax.AjaxConfiguration(url);
            ajaxConfig.options = {
                type: type,
                data: data
            };
            ajaxConfig.loadingInterrupt = $('#loading');
            ajaxConfig.target = target;
            ajaxConfig.preActionUrl = form.data('preactionurl');
            ajaxConfig.callback = function (data) {
                form.data('posting', false);
            };

            healthStream.ajax.ajaxHandler(ajaxConfig);
        },

        getSearchPage: function (actionUrl, dataTarget) {
            var ajaxConfig = new healthStream.ajax.AjaxConfiguration(actionUrl);

            ajaxConfig.loadingInterrupt = $('#loading');
            ajaxConfig.target = $(dataTarget);

            healthStream.ajax.ajaxHandler(ajaxConfig);
        },

        postFormByFormId: function (actionUrl, formId, dataTarget) {
            var form = $(formId);
            var data = form.serialize();

            var ajaxConfig = new healthStream.ajax.AjaxConfiguration(actionUrl);
            ajaxConfig.options = {
                type: 'POST',
                data: data
            };
            ajaxConfig.loadingInterrupt = $('#loading');
            ajaxConfig.target = $(dataTarget);

            healthStream.ajax.ajaxHandler(ajaxConfig);

        }
    };

}(window, jQuery));