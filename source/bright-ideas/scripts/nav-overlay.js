/**********************************************
*                                             *
*  HealthStream - Product Navigation Overlay  *
*                                             *
**********************************************/

(function(window, $) {

    'use strict';

    window.HealthStream = window.HealthStream || {};
    
    var healthStream = window.HealthStream;
    var triggerBttn = document.getElementById('trigger-overlay'),
        
    overlay = document.querySelector('div.overlay'),
    closeBttn = overlay.querySelector('button.overlay-close');
    
    // Overlay open/close functionality
    healthStream.overlay = function(transEndEventNames) {

            function toggleOverlay() {
                if (classie.has(overlay, 'open')) {
                    classie.remove(overlay, 'open');
                    //classie.add(overlay, 'close'); // causing overlay issue w/ old HLC

                } else if (!classie.has(overlay, 'close')) {
                    classie.add(overlay, 'open');
                }
            }

            triggerBttn.addEventListener('click', toggleOverlay);
            closeBttn.addEventListener('click', toggleOverlay);

            function classReg(className) {
                return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
            }

            var hasClass, addClass, removeClass;

            if ('classList' in document.documentElement) {
                hasClass = function(elem, c) {
                    return elem.classList.contains(c);
                };
                addClass = function(elem, c) {
                    elem.classList.add(c);
                };
                removeClass = function(elem, c) {
                    elem.classList.remove(c);
                };
            } else {
                hasClass = function(elem, c) {
                    return classReg(c).test(elem.className);
                };
                addClass = function(elem, c) {
                    if (!hasClass(elem, c)) {
                        elem.className = elem.className + ' ' + c;
                    }
                };
                removeClass = function(elem, c) {
                    elem.className = elem.className.replace(classReg(c), ' ');
                };
            }

            function toggleClass(elem, c) {
                var fn = hasClass(elem, c) ? removeClass : addClass;
                fn(elem, c);
            }

            var classie = {
                // full names
                hasClass: hasClass,
                addClass: addClass,
                removeClass: removeClass,
                toggleClass: toggleClass,
                // short names
                has: hasClass,
                add: addClass,
                remove: removeClass,
                toggle: toggleClass
            };

            // transport
            if (typeof define === 'function' && define.amd) {
                // AMD
                define(classie);
            } else {
                // boverlay-rowser global
                window.classie = classie;
            }

        },
        // Overlay dropdown functionality for multiple product links (disabled)
        healthStream.dropdown = function() {
            function DropDown(el) {
                this.dd = el;
                this.placeholder = this.dd.children('span');
                this.opts = this.dd.find('ul.dropdown > li');
                this.val = '';
                this.index = -1;
                this.initEvents();
            }
            DropDown.prototype = {
                initEvents: function() {
                    var obj = this;

                    obj.dd.on('click', function(event) {
                        $(this).toggleClass('active');
                        return false;
                    });

                    obj.opts.on('click', function() {
                        var opt = $(this);
                        obj.val = opt.text();
                        obj.index = opt.index();
                        obj.placeholder.text(obj.val);
                    });
                },
                getValue: function() {
                    return this.val;
                },
                getIndex: function() {
                    return this.index;
                }
            }

            $(function() {

                var dd = new DropDown($('#dd'));

                $(document).click(function() {
                    // all dropdowns
                    $('.overlay-dropdown').removeClass('active');
                });

            });
        },
        // Overlay dropdown nav links that are triggered by js (currently disabled)
        healthStream.navlinks = function() {

            function pageCalendar() {
                window.location.assign("http://hstm-platform.patternmanager.com/scheduling-calendar.php")
            }

            function pageStudentSearch() {
                window.location.assign("http://hstm-platform.patternmanager.com/student-search-demo.php")
            }

            function pageReports() {
                window.location.assign("http://www.healthstream.com/HLC/Admin/Reports/ReportsMainMenu.aspx")
            }
        }

    $(window).load(function() {

        healthStream.overlay();
        /** Overlay dropdown disabled, but available (if needed) **/
        // healthStream.dropdown();
        // healthStream.navlinks();

    });
}(window, jQuery));