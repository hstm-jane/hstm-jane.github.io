<?php
//function include_site_overlay( ) {

  ?>
    <!-- open/close -->
    <div class="overlay overlay-scale">
        <!-- <div class="container"> -->
        <section>
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="overlay-close pull-right"></button>
                    <!-- <i class="fa fa-3x fa-times" style="color: white"></i> -->
                    <h1 class="pull-left hidden-xs" style="color:#ffffff;margin-top: 50px;font-weight: 600;padding-right: 60px;">
                        <!-- <img src="./content/images/logo-healthstream-large.png"> -->Product Navigation</h1>
                </div>
            </div>
            <hr class="hidden-xs">
        </section>
        <section class="section">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-lg-2" style="z-index:auto">
                    <a href="http://localhost"><img src="./content/images/overlay-img/business-summary-icon.png">
                        <br>PRODUCT NAME</a>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2" style="z-index:auto">
                    <a href="#"><img src="./content/images/overlay-img/airplane-mode-icon.png">
                        <br>PRODUCT NAME</a>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2" style="z-index:auto">
                    <a href="#"><img src="./content/images/overlay-img/camera-icon.png">
                        <br>PRODUCT NAME</a>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2" style="z-index:auto">
                    <a href="#"><img src="./content/images/overlay-img/chat-icon.png">
                        <br>PRODUCT NAME</a>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2" style="z-index:auto">
                    <a href="#"><img src="./content/images/overlay-img/clock-icon.png">
                        <br>PRODUCT NAME</a>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2" style="z-index:auto">
                    <a href="#"><img src="./content/images/overlay-img/contacts-icon.png">
                        <br>PRODUCT NAME</a>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <a href="#"><img src="./content/images/overlay-img/news-icon.png">
                        <br>PRODUCT NAME</a>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <a href="#"><img src="./content/images/overlay-img/music-icon.png">
                        <br>PRODUCT NAME</a>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <a href="#"><img src="./content/images/overlay-img/mail-icon.png">
                        <br>PRODUCT NAME</a>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <a href="#"><img src="./content/images/overlay-img/location-icon.png">
                        <br>PRODUCT NAME</a>
                  
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <a href="#"><img src="./content/images/overlay-img/home-icon.png">
                        <br>PRODUCT NAME</a>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <a href="#"><img src="./content/images/overlay-img/find-icon.png">
                        <br>PRODUCT NAME</a>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <a href="#"><img src="./content/images/overlay-img/note-icon.png">
                        <br>PRODUCT NAME</a>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <a href="#"><img src="./content/images/overlay-img/notepad-icon.png">
                        <br>PRODUCT NAME</a>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <a href="#"><img src="./content/images/overlay-img/phone-icon.png">
                        <br>PRODUCT NAME</a>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <a href="#"><img src="./content/images/overlay-img/settings-icon.png">
                        <br>PRODUCT NAME</a>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <a href="#"><img src="./content/images/overlay-img/weather-icon.png">
                        <br>PRODUCT NAME</a>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <a href="#"><img src="./content/images/overlay-img/recycle-bin-icon.png">
                        <br>PRODUCT NAME</a>
                </div>
            </div>
        </section>
        <!-- </div> -->
    </div>
    <!--     // <script src="js/classie.js"></script>
    // <script src="js/demo1.js"></script>
    // <script src="js/jquery.hotkeys.js"></script> -->
    <script>
    (function() {
        var triggerBttn = document.getElementById('trigger-overlay'),
            overlay = document.querySelector('div.overlay'),
            closeBttn = overlay.querySelector('button.overlay-close');
        transEndEventNames = {
                'WebkitTransition': 'webkitTransitionEnd',
                'MozTransition': 'transitionend',
                'OTransition': 'oTransitionEnd',
                'msTransition': 'MSTransitionEnd',
                'transition': 'transitionend'
            },
            transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
            support = {
                transitions: Modernizr.csstransitions
            };

        function toggleOverlay() {
            if (classie.has(overlay, 'open')) {
                classie.remove(overlay, 'open');
                classie.add(overlay, 'close');
                var onEndTransitionFn = function(ev) {
                    if (support.transitions) {
                        if (ev.propertyName !== 'visibility') return;
                        this.removeEventListener(transEndEventName, onEndTransitionFn);
                    }
                    classie.remove(overlay, 'close');
                };
                if (support.transitions) {
                    overlay.addEventListener(transEndEventName, onEndTransitionFn);
                } else {
                    onEndTransitionFn();
                }
            } else if (!classie.has(overlay, 'close')) {
                classie.add(overlay, 'open');
            }
        }

        triggerBttn.addEventListener('click', toggleOverlay);
        closeBttn.addEventListener('click', toggleOverlay);
    })();
    /*!
     * classie - class helper functions
     * from bonzo https://github.com/ded/bonzo
     * 
     * classie.has( elem, 'my-class' ) -> true/false
     * classie.add( elem, 'my-new-class' )
     * classie.remove( elem, 'my-unwanted-class' )
     * classie.toggle( elem, 'my-class' )
     */

    /*jshint browser: true, strict: true, undef: true */
    /*global define: false */

    (function(window) {

        'use strict';

        // class helper functions from bonzo https://github.com/ded/bonzo

        function classReg(className) {
            return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
        }

        // classList support for class management
        // altho to be fair, the api sucks because it won't accept multiple classes at once
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
            // browser global
            window.classie = classie;
        }

    })(window);

    $(document).keyup(function(e) {
        if (e.keyCode == 27) { // escape key maps to keycode `27`
            // <DO YOUR WORK HERE>
        }
    });
    </script>
    <?php //} ?>
