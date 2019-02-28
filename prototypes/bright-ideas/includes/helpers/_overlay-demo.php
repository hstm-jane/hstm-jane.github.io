<!-- open/close -->
<div class="overlay overlay-scale">
    <!-- <div class="container"> -->
    <section>
        <div class="overlay-row">
            <div class="overlay-col-md-12">
                <button type="button" class="overlay-close pull-right"></button>
                <!-- <i class="fa fa-2x fa-times" style="overlay-color: #0687B9;"></i> -->
                <h1 class="pull-left hidden-xs overlay-product-title">
                        <img src="./content/images/h-title.png"><em>HealthStream Products</em></h1>
                <h4 class="pull-left visible-xs overlay-product-title-small"><img src="./content/images/h-title-sm.png"><em>HealthStream</em></h4>
            </div>
        </div>
        <hr class="hidden-xs">
    </section>
    <section class="section">
        <div class="overlay-row">
            <div class="overlay-col-xs-12 overlay-col-sm-12 overlay-col-md-12 overlay-col-lg-3">
                <div class="product-container">
                    <div class="overlay-wrapper">
                        <div id="dd" class="overlay-dropdown" tabindex="1">
                            <a href="#"><span class="dropdown-title">HLC: Administrator</span></a>
                            <ul class="dropdown">
                                <li onclick="pageCalendar()"><a href="http://hstm-platform.patternmanager.com/scheduling-calendar.php">Calendar</a></li>
                                <li onclick="pageStudentSearch()"><a href="http://hstm-platform.patternmanager.com/student-search-demo.php" target="_blank">Student Search</a></li>
                                <li onclick="pageReports()"><a href="http://www.healthstream.com/HLC/Admin/Reports/ReportsMainMenu.aspx"><i class="icon-plane icon-large"></i>Reports</a></li>
                            </ul>
                        </div>
                        ​ </div>
                </div>
            </div>
            <div class="overlay-col-xs-12 overlay-col-sm-12 overlay-col-md-12 overlay-col-lg-3">
                <a href="http://www.healthstream.com/hlc/admin/sitemap.aspx" target="_blank">
                    <div class="product-container">
                        <div class="product-title">SimCenter: SimView</div>
                        <div class="product-links">
                        </div>
                    </div>
                </a>
            </div>
            <div class="overlay-col-xs-12 overlay-col-sm-12 overlay-col-md-12 overlay-col-lg-3">
                <a href="https://demo.coi-smart.com/login.php" target="_blank">
                    <div class="product-container">
                        <div class="product-title">COI-SMART</div>
                        <div class="product-links">
                        </div>
                    </div>
                </a>
            </div>
            <div class="overlay-col-xs-12 overlay-col-sm-12 overlay-col-md-12 overlay-col-lg-3">
                <a href="http://hstm-hlc-student.patternmanager.com/" target="_blank">
                    <div class="product-container">
                        <div class="product-title">HLC: Student</div>
                        <div class="product-links">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="overlay-row">
            <div class="overlay-col-xs-12 overlay-col-sm-12 overlay-col-md-12 overlay-col-lg-3">
                <a href="http://www.healthlinesystems.com/echo_login.aspx" target="_blank">
                    <div class="product-container">
                        <div class="product-title">EchoAccess</div>
                        <div class="product-links">
                        </div>
                    </div>
                </a>
            </div>
            <div class="overlay-col-xs-12 overlay-col-sm-12 overlay-col-md-12 overlay-col-lg-3">
                <a href="http://hstm-platform.patternmanager.com" target="_blank">
                    <div class="product-container">
                        <div class="product-title">Live Events</div>
                        <div class="product-links">
                        </div>
                    </div>
                </a>
            </div>
            <div class="overlay-col-xs-12 overlay-col-sm-12 overlay-col-md-12 overlay-col-lg-3">
                <a href="http://hstm-bright-ideas.patternmanager.com" target="_blank">
                    <div class="product-container">
                        <div class="product-title">Bright Ideas</div>
                        <div class="product-links">
                        </div>
                    </div>
                </a>
            </div>
            <div class="overlay-col-xs-12 overlay-col-sm-12 overlay-col-md-12 overlay-col-lg-3">
                <a href="https://www.healthstreamresearch.com/InsightsOnline/Account/Login.aspx?ReturnUrl=%2fInsightsOnline%2fPages%2fDefault.aspx" target="_blank">
                    <div class="product-container">
                        <div class="product-title">Insights Online</div>
                        <div class="product-links">
                        </div>
                    </div>
            </div>
            </a>
        </div>
    </section>
    <section class="section">
        <div class="overlay-row">
            <div class="overlay-col-xs-12 overlay-col-sm-12 overlay-col-md-12 overlay-col-lg-3">
                <a href="http://community.healthstream.com/p/duplicateemail.aspx" target="_blank">
                    <div class="product-container">
                        <div class="product-title">HealthStream Community</div>
                        <div class="product-links">
                        </div>
                    </div>
                </a>
            </div>
            <div class="overlay-col-xs-12 overlay-col-sm-12 overlay-col-md-12 overlay-col-lg-3">
                <a href="http://precyseuniversity.com/login/" target="_blank">
                    <div class="product-container">
                        <div class="product-title">Precyse University DNA</div>
                        <div class="product-links">
                        </div>
                    </div>
                </a>
            </div>
            <div class="overlay-col-xs-12 overlay-col-sm-12 overlay-col-md-12 overlay-col-lg-3">
                <a href="http://www.mysimcenter.com/en-US/SimManagerNotLoggedIn.aspx" target="_blank">
                    <div class="product-container">
                        <div class="product-title">SimCenter: SimStore</div>
                        <div class="product-links">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
</div>
<script>
$(window).load(function() {
    // $('<div class="pull-right"><i class="fa fa-th fa-2x" id="trigger-overlay" onclick="toggleOverlay()" style="font-size:1.5em"></i></div>"').insertAfter("nav ul.nav li:last-child");



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
}());


(function(window) {

    'use strict';




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


})(window);

$(document).keyup(function(e) {
    if (e.keyCode == 27) { // escape key maps to keycode `27`
        // <DO YOUR WORK HERE>
    }
});

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

function pageCalendar() {
    window.location.assign("http://hstm-platform.patternmanager.com/scheduling-calendar.php")
}

function pageStudentSearch() {
    window.location.assign("http://hstm-platform.patternmanager.com/student-search-demo.php")
}

function pageReports() {
    window.location.assign("http://www.healthstream.com/HLC/Admin/Reports/ReportsMainMenu.aspx")
}
</script>
<?php //} ?>
