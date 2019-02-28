
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(2),u=e(3),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}finally{f.emit("fn-end",[c.now()],t)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],3:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],4:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=m(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){v[e]=m(e).concat(n)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(t)}function g(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var v={},y={},b={on:l,emit:t,get:w,listeners:m,context:n,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(2),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=h.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+h.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===d.readyState&&i()}function i(){f("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),f=e("handle"),c=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1026.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=n.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),f("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>My To-Do List | HealthStream</title>

    <!-- Styles
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.bootstrap.css?cache=1494943612">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.plugins.css?cache=1494943612">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.app.css?cache=1494943612">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.prototype.css?cache=1494943612">

    <!-- IE 7/8 Handling
    ================================================== -->
    <script>
        if (document.documentMode < 8) {
            location.href = "unsupported-browser.php";
        }
        else if (document.documentMode == 8) {
            var html = document.getElementsByTagName('html')[0];
            html.className = 'ie ie8' + html.className;
            var ie8docmode = document.createElement('script');
            ie8docmode.setAttribute('src','/scripts/respond.js');
            document.getElementsByTagName('head')[0].appendChild(ie8docmode);
            var ie8styles = document.createElement('link');
            ie8styles.setAttribute('rel','stylesheet');
            ie8styles.setAttribute('type','text/css');
            ie8styles.setAttribute('href','/content/styles/healthstream.ie8.css');
            document.getElementsByTagName('head')[0].appendChild(ie8styles);
        }
        else {
            var icons = document.createElement('link');
            icons.setAttribute('rel','stylesheet');
            icons.setAttribute('type','text/css');
            icons.setAttribute('href','/content/styles/healthstream.icons.css');
            document.getElementsByTagName('head')[0].appendChild(icons);
        }
    </script>

    <!-- Feature Detection Using Modernizr
    ================================================== -->
    <script src="/scripts/modernizr.js"></script>
    <style>

    .take-tour-nav {
        float: right!important;
        padding-right: 5px;
        margin-right: -5px;
        color: #33aed7;
        height: 48px;
        width: 55px;
        position: relative;
        cursor: pointer;
    }
    
    .take-tour-nav:hover {
        background-color: #eee;
    }
    
    .take-tour-nav i {
        font-size: 24px;
        position: absolute;
        right: 13px;
        top: 5px;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, .1);
    }
    
    .take-tour-nav .label {
        font-size: 9px;
        font-weight: 600;
        text-transform: uppercase;
        position: absolute;
        letter-spacing: 1.3px;
        bottom: 5px;
        right: 5px;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, .1);
        color: #33aed7;
    }
    </style>

</head>
<body><div class="site-header ">
    <div class="container">
        <a href="#" class="trigger-open trigger-open-header"><i class="fa fa-bars"></i><span>Menu</span></a>
        <div class="branding">
            <a href="/">
                <img src="./content/images/logo-healthstream-large.png" alt="HealthStream" class="logo-large">
                <img src="./content/images/logo-healthstream-small.png" alt="HealthStream" class="logo-small">
            </a>
        </div>
        <nav class="nav-account">
            <div class="name">Stephanie P. Juniper</div>
            <div class="avatar">
                <i class="fa fa-user"></i>
                <img src="./content/images/avatar.jpg">
            </div>
            <a href="alerts.php" class="alerts"><span class="badge">3</span></a>
            <div class="institution"><a href="#">Jupiter Healthcare</a></div>
            <div class="logout"><a href="#">Logout</a></div>
            <a href="#" class="trigger-open trigger-open-account"><i class="fa fa-angle-down"></i></a>
            <a href="#" class="trigger-close"><i class="fa fa-times"></i></a>
            <ul class="nav">
                <li><a href="/account-settings.php">Account Settings</a></li>
    <li class="hide-header-open"><a href="/account-settings.php?view=password">Manage Password</a></li>
    <li><a href="/alerts.php">Alerts <span class="badge">3</span></a></li>
    <li class="hide-header-open logout"><a href="#">Logout</a></li>
            </ul>
        </nav><!-- /nav-account -->
    </div><!-- /container -->
    <nav class="nav-main">
        <div class="container">
            <ul id="nav" class="nav">
                
            <li class=""><a href="/connections.php">Connections</a></li>
            <li class="active"><a href="/">To Do</a></li>
            <li class=""><a href="/completed.php">Completed</a></li>
            <li class=" dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="/advanced-practice.php">Advanced Practice</a></li>
                    <li><a href="/certifications.php">Certifications</a></li>
                    <li><a href="/documents.php">Documents</a></li>
                    <li><a href="/education.php">Education</a></li>
                    <li><a href="/goals.php">Goals</a></li>
                    <li><a href="/job-descriptions.php">Job Descriptions</a></li>
                    <li><a href="/disciplines-licenses.php">Licenses</a></li>
                    <li><a href="/notes.php">Notes</a></li>
                    <li><a href="/personal-information.php">Personal Information</a></li>
                </ul>
            </li>
            <li class=""><a href="/catalog.php">Catalog</a></li>
            <li class=""><a href="/event-calendar.php">Event Calendar</a></li>
            <li class="disabled"><a href="#">Help</a></li>
            <li class="visible-xs visible-sm"><a href="#">Logout</a></li>
            <li class="app-drawer-container">
                                    <div class="app-drawer-icon">
                                        <div class="icon" id="applauncher">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 1200">
                                                <defs>
                                                    <style>
                                                    .cls-1 {
                                                        fill: #666;
                                                    }
                                                    
                                                    .cls-2 {
                                                        fill: #666;
                                                    }
                                                    </style>
                                                </defs>
                                                <ellipse class="cls-2" cx="151" cy="153.5" rx="147" ry="149.5"></ellipse>
                                                <ellipse class="cls-1" cx="600" cy="153.5" rx="147" ry="149.5"></ellipse>
                                                <ellipse class="cls-2" cx="600" cy="599.5" rx="147" ry="149.5"></ellipse>
                                                <ellipse class="cls-2" cx="151" cy="600.5" rx="147" ry="149.5"></ellipse>
                                                <ellipse class="cls-2" cx="151" cy="1050.5" rx="147" ry="149.5"></ellipse>
                                                <ellipse class="cls-1" cx="600" cy="1050.5" rx="147" ry="149.5"></ellipse>
                                                <ellipse class="cls-2" cx="1049" cy="1050.5" rx="147" ry="149.5"></ellipse>
                                                <ellipse class="cls-2" cx="1049" cy="599.5" rx="147" ry="149.5"></ellipse>
                                                <ellipse class="cls-2" cx="1049" cy="153.5" rx="147" ry="149.5"></ellipse> </svg>
                                        </div>
                                        <div class="label"> Apps </div>
                                        <div class="arrow"> <i class="fa fa-angle-down" style="padding-left:1px;"></i> </div>
                                    </div>
                                    <div class="app-drawer-content" style="display:none;">
                                        <div class="app-drawer-content-panel">
                                            <ul class="app-drawer-nav-item">
                                                <li class="app-drawer-title"> More HealthStream Apps </li>
                                                <li class="app-drawer-nav-item">
                                                    <a target="_blank" href="http://www.healthstream.com">
                                                        <div class="app-drawer-nav-item-logo">
                                                            <div class="svg-icon-wrap">
                                                                <img src="content/images/coi-logo-50x50.png"> </div>
                                                        </div>
                                                        <div class="app-drawer-nav-item-content">
                                                            <h5 class="title">COI Smart</h5>
                                                            <p class="description">Track and manage Conflict of Interest (COI) disclosures</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="app-drawer-nav-item">
                                                    <a target="_blank" href="http://www.healthstream.com">
                                                        <div class="app-drawer-nav-item-logo">
                                                            <div class="svg-icon-wrap">
                                                                <img src="content/images/echo-logo-50x50.png"> </div>
                                                        </div>
                                                        <div class="app-drawer-nav-item-content">
                                                            <h5 class="title">Echo Credentialing</h5>
                                                            <p class="description">Mange provider credentials, privileging, and more.</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="app-drawer-nav-item">
                                                    <a target="_blank" href="http://www.healthstream.com">
                                                        <div class="app-drawer-nav-item-logo">
                                                            <div class="svg-icon-wrap">
                                                                <img src="content/images/mgr-dashboard-50x50.png"> </div>
                                                        </div>
                                                        <div class="app-drawer-nav-item-content">
                                                            <h5 class="title">My Team Dashboard</h5>
                                                            <p class="description">Monitor the progress of your team’s assignments.</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- app-drawer-content-->
                                </li>
            <li class="take-tour-nav" id="startSmTour"><i class="fa fa-car"></i>
                <div class="label"> Tour </div>
            </li>
            </ul>
        </div><!-- /container -->
    </nav><!-- /nav-main -->
    <div class="support">
        <h3>Support</h3>
        <p>To talk with a customer service representative call 1-800-521-0574</p>
        <p><a href="#">Send us an email</a></p>
    </div>
</div><!-- /site-header -->
<div class="focus focus-pageheader">
<div class="fph-separator"></div>
<div class="fph-table"> <div class="fph-row">

<div class="fph-cell fph-cell-text">
<div class="fph-primary">
<h1>My To-Do List</h1> 
</div>
<div class="fph-secondary"><ul class="meta">
<li><span class="meta-label">Total Tasks:</span><span class="meta-value">17</span></li>
<li><span class="meta-label">Requiring Attention:</span><span class="meta-value">5</span></li>
</ul></div>

</div>
<div class="fph-cell fph-cell-button">
<a href="course.php" class="btn btn-focus">
Quick Start <i class="fa fa-chevron-right"></i>
</a>
</div>
<div class="fph-cell fph-cell-supporting"></div>
</div>
</div>
</div>
<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-main section-box" data-equalize="layout-columns">
                    <div class="filter-mini" data-target="tasks">
                        <div class="filter-row">
                            <div class="filter-cell">
                                <div class="filter-toggle">
                                    Show: <i class="fa fa-fw fa-caret-down"></i>
                                </div>
                            </div>
                            <div class="filter-cell">
                                <ul>
                                    <li><label class="checkbox"><input type="checkbox" value='all' checked> All Tasks</label></li><li><label class="checkbox"><input type="checkbox" value="1"> Assigned Learning</label></li><li><label class="checkbox"><input type="checkbox" value="2"> Live Classes</label></li><li><label class="checkbox"><input type="checkbox" value="3"> Elective Learning</label></li><li><label class="checkbox"><input type="checkbox" value="4"> Profile Tasks</label></li><li><label class="checkbox"><input type="checkbox" value="5"> Assessments</label></li><li><label class="checkbox"><input type="checkbox" value="6"> Virtual Classes</label></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                                         <section class="section" id="tasks">
                       
                       
                        
<div class="slat slat-attention slat-spaced slat-callout" data-filter-category="1">
<div class="slat-default">
<div class="title"><a href="assessment.php?assessment=performance-2&state=4">Fire Safety (PA)</a></div>
<ul class="meta">
<li><span class="meta-type">Course</span></li>
<li><span class="meta-label">Status:</span><span class="meta-value">Assigned</span></li>
<li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Dec 7, 2016</span></li>
</ul>
<div class="action">
    <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
</div></div>
</div>


<div class="slat slat-callout slat-attention slat-spaced" data-filter-category="5">
<div class="slat-default">
<div class="title"><a href="#">Nursing Competency Appraisal</a></div>
<ul class="meta">
<li><span class="meta-type">Self Assessment</span></li>
<li><span class="meta-label">State:</span><span class="meta-value">Sign Off</span></li>
<li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Jan 6, 2017</span></li>
</ul>
<div class="action action-split">
    <div class="btn-group">
        <a href="#" class="btn btn-default btn-sm hidden-xs">Sign Off</a>
        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
        <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="#">Sign Off</a></li><li><a href="#">Print</a></li>
        </ul>
    </div>
</div></div>
</div>


<div class="slat slat-attention slat-spaced" data-filter-category="2">
<div class="slat-default">
<div class="title"><a href="#">2017 Leadership Development: First Principles</a></div>
<ul class="meta">
<li><span class="meta-type">Live Class</span></li>
<li><span class="meta-label">Status:</span><span class="meta-value">Assigned</span></li>
<li class="meta-callout"><span class="meta-label"> </span><span class="meta-value"><span class="meta-callout-label"></span>Not Registered</span></li>
</ul>
<div class="action">
    <a class="btn btn-sm btn-default" href="#">Choose Class<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
</div></div>
</div>

<div class="slat slat-callout slat-spaced" data-filter-category="1">
<div class="slat-default">
<div class="title"><a href="#">Corporate Compliance (PA)</a></div>
<ul class="meta">
<li><span class="meta-type">Course</span></li>
<li><span class="meta-label">Status:</span><span class="meta-value">Assigned</span></li>
<li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Jul 14, 2017</span></li>
</ul>
<div class="action">
    <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
</div></div>
</div>


<div class="slat slat-spaced slat-callout" data-filter-category="6">
<div class="slat-default">
<div class="title"><a href="assessment.php?assessment=competency-1&progress=1">Culture and Workplace Webinar</a></div>
<ul class="meta">
<li><span class="meta-type">Virtual Class</span></li>
<li><span class="meta-label">Status:</span><span class="meta-value">Registered</span></li>
<li><span class="meta-label">Session:</span><span class="meta-value">1 of 1</span></li>
<li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Jul 15, 2017 at 9:00am</span></li>
</ul>
<div class="action">
    <a class="btn btn-sm btn-default" href="#">View<i class="fa fa-fw fa-chevron-rig2ht visible-xs"></i></a>
</div></div>
</div>


<div class="slat slat-spaced slat-callout" data-filter-category="1">
<div class="slat-default">
<div class="title"><a href="assessment.php?assessment=competency-14&user=peer-1">2017 Nursing Technologies Track</a></div>
<ul class="meta">
<li><span class="meta-type">Curriculum</span></li>
<li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
<li><span class="meta-label">Completed:</span><span class="meta-value">2 of 3</span></li>
<li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Jul 23, 2017</span></li>
</ul>
<div class="action">
    <a class="btn btn-sm btn-default" href="#">Resume<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
</div></div>
</div>


<div class="slat slat-spaced slat-callout" data-filter-category="5">
<div class="slat-default">
<div class="title"><a href="assessment.php?assessment=performance-1">Lab Skills: Groover, George G.</a></div>
<ul class="meta">
<li><span class="meta-type">Peer Assessment</span></li>
<li><span class="meta-label">State:</span><span class="meta-value">Evaluate</span></li>
<li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Jul 26, 2017</span></li>
</ul>
<div class="action">
    <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
</div></div>
</div>


<div class="slat slat-spaced slat-callout" data-filter-category="4">
<div class="slat-default">
<div class="title"><a href="curriculum.php">Please Update Your Profile</a></div>
<ul class="meta">
<li><span class="meta-type">Profile Activity</span></li>
<li><span class="meta-label">Status:</span><span class="meta-value">Assigned</span></li>
<li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Aug 1, 2017</span></li>
</ul>
<div class="action">
    <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
</div></div>
</div>


<div class="slat slat-spaced slat-callout" data-filter-category="1">
<div class="slat-default">
<div class="title"><a href="course-institution-specific.php">Hand Hygiene</a></div>
<ul class="meta">
<li><span class="meta-type">Course</span></li>
<li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
<li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Aug 6, 2017</span></li>
</ul>
<div class="action">
    <a class="btn btn-sm btn-default" href="#">Resume<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
</div></div>
</div>


<div class="slat slat-spaced slat-callout" data-filter-category="5">
<div class="slat-default">
<div class="title"><a href="assessment.php?assessment=competency-6">Nursing Skills Assessment</a></div>
<ul class="meta">
<li><span class="meta-type">Self Assessment</span></li>
<li><span class="meta-label">State:</span><span class="meta-value">Assigned</span></li>
<li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value"><span class="meta-callout-label">Due:</span>Aug 22, 2017</span></li>
</ul>
<div class="action">
    <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
</div></div>
</div>


<div class="slat slat-spaced slat-callout" data-filter-category="2">
<div class="slat-default">
<div class="title"><a href="/le-registration-registered-event.php">Medical Ethics</a></div>
<ul class="meta">
<li><span class="meta-type">Live Class</span></li>
<li><span class="meta-label">Status:</span><span class="meta-value">Registered</span></li>
<li><span class="meta-label">Session:</span><span class="meta-value">1 of 1</span></li>
<li class="meta-callout"><span class="meta-label"></span><span class="meta-value"><div><span class="meta-callout-label"></span>Aug 18, 2017 at 2:30pm - Aug 18, 2017 at 3:30pm</div></span></li>
</ul>
<div class="action">
    <a class="btn btn-sm btn-default" href="#">View<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
</div></div>
</div>

<div class="slat slat-spaced slat-callout" data-filter-category="1">
<div class="slat-default">
<div class="title"><a href="/le-registration-registered-event.php">Medical Ethics</a></div>
<ul class="meta">
<li><span class="meta-type">Course</span></li>
<li><span class="meta-label">Status:</span><span class="meta-value">Assigned</span></li>
<li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value"><div><span class="meta-callout-label">Due:</span>Aug 28, 2017</div></span></li>
</ul>
<div class="action">
    <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
</div></div>
</div>

<div class="slat slat-spaced slat-callout" data-filter-category="1">
<div class="slat-default">
<div class="title"><a href="/le-registration-registered-event.php">Choose a Course</a></div>
<ul class="meta">
<li><span class="meta-type">EQUIVALENT</span></li>
<li><span class="meta-label">Status:</span><span class="meta-value">Assigned</span></li>
<li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value"><div><span class="meta-callout-label">Due:</span>Aug 30, 2017</div></span></li>
</ul>
<div class="action">
    <a class="btn btn-sm btn-default" href="#">Resume<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
</div></div>
</div>

<div class="slat slat-spaced slat-callout" data-filter-category="3">
<div class="slat-default">
<div class="title"><a href="/le-registration-registered-event.php">Culture and Workplace Issues</a></div>
<ul class="meta">
<li><span class="meta-type">Course</span></li>
<li><span class="meta-label">Status:</span><span class="meta-value">Not Started</span></li>
<li><span class="meta-label">Enrolled By:</span><span class="meta-value">Admin</span></li>

<li class="meta-callout"><span class="meta-label"></span><span class="meta-value"><div><span class="meta-callout-label"></span>Elective</div></span></li>
</ul>
<div class="action">
    <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
</div></div>
</div>

<div class="slat slat-spaced slat-callout" data-filter-category="3">
<div class="slat-default">
<div class="title"><a href="/le-registration-registered-event.php">Leadership Development: First Principles</a></div>
<ul class="meta">
<li><span class="meta-type">Course</span></li>
<li><span class="meta-label">Status:</span><span class="meta-value">Not Started</span></li>
<li><span class="meta-label">Enrolled By:</span><span class="meta-value">Self</span></li>

<li class="meta-callout"><span class="meta-label"></span><span class="meta-value"><div><span class="meta-callout-label"></span>Elective</div></span></li>
</ul>
<div class="action">
    <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
</div></div>
</div>


                    </section>
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
               <section class="section section-sidebar equalized" data-equalize="layout-columns" style="min-height: 1549px;">
                                       <section class="section section-box">
                                           <h3>Reminder</h3>
                                           <ul class="list-links">
                                               <li>
                                                   <a href="/highlight.php">Scheduled Downtime 4/19 at 11PM</a>
                                               </li>
                                           </ul>
                                       </section>
                                       <!--  <section class="section section-box">
                                       <h3>Options</h3>
                                       <ul class="list-links">
                                           <li><a id="myAssessmentsLink" href="/todo-pending.php">My Assessments (old version)</a></li>
                                           <li><a href="/todo-pending.php">My Submitted Assessments</a></li>
                                           <li><a href="/todo-optional.php">Optional Assessments</a></li>
                                       </ul>
                                   </section> -->
                                       <section class="section section-box">
                                           <h3>Support</h3>
                                           <p>For assistance, call the Jupiter Healthcare Help Desk at 555-HELP (555-4357).</p>
                                       </section>
                                   </section>

                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->


<div class="site-footer ">
    <div class="focus focus-promo">
    <div class="container">
         
    </div>
</div>
    <div class="container">
        <div class="links">
            <div class="row">
                <div class="col-md-9">
                    <section class="section">
                        <h4>Sitemap</h4>
                        
            <div class="row">
                <div class="col-sm-3">
                     <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">To-Do List</a></li>
                            <li><a href="#">Completions</a></li>
                            <li><a href="#">Connections</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-sm-3">
                    <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">Certifications</a></li>
                            <li><a href="#">Licenses</a></li>
                            <li><a href="#">Resuscitation Cards</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-sm-3">
                    <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">Catalog</a></li>
                            <li><a href="#">Upcoming Events</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-sm-3">
                    <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">Account Settings</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </section>
                </div>
            </div>
                    </section>
                </div>
                <div class="col-md-3">
                    <section class="section support">
                        <h4>Support</h4>
                        To talk with a customer service representative call 1-800-521-0574
                    </section>
                </div>
            </div>
        </div>
        <div class="legal">
            <div class="divider"></div>
            <div class="logo"><img src="./content/images/logo-healthstream-small.png" alt="HealthStream"></div>
            <div class="copyright">Copyright &copy; 2017 HealthStream, Inc. All Rights Reserved.</div>
            <div class="build">Build: 13.01.28.895.8 | O:STS2 | S:192.231.71.2</div>
        </div>
        <ul class="site-palette">
            <li id="theme-neutral-1"></li>
            <li id="theme-neutral-2"></li>
            <li id="theme-neutral-3"></li>
            <li id="theme-neutral-4"></li>
            <li id="theme-neutral-5"></li>
            <li id="theme-neutral-6"></li>
            <li id="theme-neutral-7"></li>
            <li id="theme-neutral-8"></li>
            <li id="theme-neutral-9"></li>
            <li id="theme-neutral-10"></li>
            <li id="theme-primary-lightest"></li>
            <li id="theme-primary-lighter"></li>
            <li id="theme-primary-light"></li>
            <li id="theme-primary"></li>
            <li id="theme-primary-dark"></li>
            <li id="theme-primary-darker"></li>
            <li id="theme-primary-darkest"></li>
            <li id="theme-accent"></li>
            <li id="theme-focus-btn"></li>
        </ul>
    </div>
</div>
<!-- PROTOTYPE ONLY -->
<div class="nav-proto">
    <a href="#modal-proto" data-toggle="modal"><i class="fa fa-sitemap"></i></a>
    <div id="modal-proto" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Prototype Sitemap</h4>
                </div>
                <div class="modal-body">
                    <h5>Login Screens</h5>
                    <ol>
                        <li><a href="/authentication/login.php">Login</a></li>
                        <li><a href="/authentication/affiliate.php">Affiliate Selector</a></li>
                        <li><a href="/authentication/affiliate-stacked.php">Affiliate Selector: Stacked</a></li>
                        <li><a href="/authentication/password-reset.php">Password Reset (from email link)</a></li>
                    </ol>
                    <hr>
                    <h5>Account Section</h5>
                    <ol>
                        <li><a href="account-settings.php">Account Settings</a></li>
                        <li><a href="alerts.php">Alerts: Messages</a></li>
                        <li><a href="alerts-preferences.php">Alerts: Preferences</a></li>
                    </ol>
                    <hr>
                    <h5>My Connections Section</h5>
                    <ol>
                        <li><a href="connections.php">My Connections</a></li>
                    </ol>
                    <hr>
                    <h5>To Do Section</h5>
                    <ol>
                        <li><a href="index.php">To Do</a></li>
                        <li><a href="todo-no-tasks.php">To Do w/o Tasks</a></li>
                        <li><a href="course.php">Course</a></li>
                        <li><a href="course-combined.php">Course: Combined</a></li>
                        <li><a href="course-complete.php">Course: Completed</a></li>
                        <li><a href="course-elective.php">Course: Elective</a></li>
                        <li><a href="course-expiring.php">Course: Expiring</a></li>
                        <li><a href="course-enroll.php">Course: Enroll</a></li>
                        <li><a href="course-share.php">Course: w/ Share Controls</a></li>
                        <li><a href="equivalent.php">Equivalent: Not Enrolled</a></li>
                        <li><a href="equivalent-with-selection.php">Equivalent: Enrolled</a></li>
                        <li><a href="equivalent-enrolled-course.php">Equivalent: Currently Enrolled Course</a></li>
                        <li><a href="equivalent-unenrolled-course.php">Equivalent: Alternate Course</a></li>
                        <li><a href="curriculum.php">Curriculum</a></li>
                        <li><a href="curriculum-sequential.php">Curriculum: Sequential</a></li>
                        <li><a href="curriculum-course.php">Curriculum: Course</a></li>
                        <li><a href="curriculum-course-complete.php">Curriculum: Course Completed</a></li>
                        <li><a href="curriculum-equivalent.php">Curriculum: Equivalent Not Enrolled</a></li>
                        <li><a href="curriculum-equivalent-with-selection.php">Curriculum: Equivalent Enrolled</a></li>
                        <li><a href="curriculum-equivalent-enrolled-course.php">Curriculum: Currently Enrolled Course in Equivalent</a></li>
                        <li><a href="curriculum-equivalent-unenrolled-course.php">Curriculum: Alternate Course in Equivalent</a></li>
                        <li><a href="#">Class Schedule: Not Registered</a></li>
                        <li><a href="registration-locked.php">Class Schedule: Locked</a></li>
                        <li><a href="registration-with-selection.php">Class Schedule: Registered</a></li>
                        <li><a href="registration-registered-class-single.php">Class Schedule: Currently Registered Class w/ Single Session</a></li>
                        <li><a href="registration-registered-class.php">Class Schedule: Currently Registered Class w/ Multiple Sessions</a></li>
                        <!-- <li><a href="registration-unregistered-class.php">Class Schedule: Alternate Class</a></li> -->
                        <li><a href="registration-virtual.php">Virtual Class Schedule: Not Registered</a></li>
                        <li><a href="registration-virtual-with-selection.php">Virtual Class Schedule: Registered</a></li>
                        <li><a href="registration-virtual-registered-class-single.php">Virtual Class Schedule: Currently Registered Class</a></li>
                        <li><a href="course-virtual-now.php">Virtual Class: Starting Now on Course</a></li>
                        <li><a href="attachment-incomplete.php">Learning Activity: Incomplete Attachment</a></li>
                        <li><a href="attachment-complete.php">Learning Activity: Complete Attachment</a></li>
                        <li><a href="video.php">Learning Activity: Video</a></li>
                        <li><a href="test-start.php">Test: Start</a></li>
                        <li><a href="test-first.php">Test: First Page</a></li>
                        <li><a href="test-middle.php">Test: Middle Page</a></li>
                        <li><a href="test-last.php">Test: Last Page</a></li>
                        <li><a href="test-results.php">Test: Results</a></li>
                        <li><a href="test-results-by-type.php">Test: Results by Type</a></li>
                        <li><a href="test-results-minimal.php">Test: Results Minimal</a></li>
                        <li><a href="evaluation.php">Evaluation</a></li>
                    </ol>
                    <hr>
                    <h5>SIM</h5>
                    <ol>
                        <li><a href="sim-event.php">SIM: SIM Event (course)</a></li>
                        <li><a href="sim-event-registered.php">SIM: SIM Event (course w/ registered class)</a></li>
                        <li><a href="sim-session.php">SIM: SIM Session (class schedule)</a></li>
                        <li><a href="sim-session-registered-session.php">SIM: SIM Session (class detail)</a></li>
                        <li><a href="sim-session-registration-with-selection.php">SIM: SIM Session (class schedule w/ registered class)</a></li>
                    </ol>
                    <hr>
                    <h5>MOC/RQI</h5>
                    <ol>
                        <li><a href="moc.php">MOC/RQI: Full Schedule</a></li>
                    </ol>
                    <hr>
                    <h5>Checklist</h5>
                    <ol>
                        <li><a href="checklist-student.php">Checklist: Student View</a></li>
                        <li><a href="checklist-student-graded.php">Checklist: Student View, Graded</a></li>
                        <li><a href="checklist-reviewer-search.php">Checklist: Reviewer View, Search</a></li>
                        <li><a href="checklist-reviewer.php">Checklist: Reviewer View</a></li>
                        <li><a href="checklist-reviewer-saved.php">Checklist: Reviewer View, Previously Saved</a></li>
                        <li><a href="checklist-reviewer-locked.php">Checklist: Reviewer View, Locked</a></li>
                        <li><a href="checklist-print.php">Checklist: Print View</a></li>
                    </ol>
                    <hr>
                    <h5>Assessments</h5>
                    <ol>
                        <li>Rater-Only Pages
                            <ol style="margin:3px 0 15px">
                                <li><a href="todo-rater.php">To-Do List w/ Assessment Rater Nav &amp; Content</a></li>
                                <li><a href="assessment-overview.php">Assessment Rater Overview</a></li>
                            </ol>
                        </li>
                        <li>Competency Assessment: As Employee
                            <ol style="margin:3px 0 15px">
                                <li><a href="assessment.php?assessment=competency-1&user=employee">Employee, no progress</a></li>
                                <li><a href="assessment.php?assessment=competency-1&user=employee&progress=1">Employee, some progress</a></li>
                                <li><a href="assessment.php?assessment=competency-1&user=employee&progress=2">Employee, no progress</a></li>
                            </ol>
                        </li>
                        <li>Competency Assessment: As Rater
                            <ol style="margin:3px 0 15px">
                                <li><a href="assessment.php?assessment=competency-1&user=rater">Rater, no progress</a></li>
                                <li><a href="assessment.php?assessment=competency-1&user=rater&progress=3">Rater, some progress</a></li>
                                <li><a href="assessment.php?assessment=competency-1&user=rater&progress=4">Rater, complete</a></li>
                                <li><a href="assessment.php?assessment=competency-1&user=rater&state=1">Rater, review</a></li>
                                <li><a href="assessment.php?assessment=competency-1&user=rater&state=3">Rater, choose signoff type</a></li>
                                <li><a href="assessment.php?assessment=competency-1&user=rater&state=4">Rater, waiting on employee signoff</a></li>
                                <li><a href="assessment.php?assessment=competency-1&user=rater&state=5">Rater, signoff</a></li>
                            </ol>
                        </li>
                        <li>Competency Assessment: As Peer
                            <ol style="margin:3px 0 15px">
                                <li><a href="assessment.php?assessment=competency-1&user=peer-1">Peer, no progress</a></li>
                                <li><a href="assessment.php?assessment=competency-1&user=peer-1&progress=1">Peer, complete</a></li>
                            </ol>
                        </li>
                        <li>Competency Assessment: As Manager
                            <ol style="margin:3px 0 15px">
                                <li><a href="assessment-signoff-manager-waiting-rater.php">Manager, waiting on rater signoff </a></li>
                                <li><a href="assessment-signoff-manager.php">Manager, signoff</a></li>
                            </ol>
                        </li>
                        <li>Performance Assessment: As Employee
                            <ol style="margin:3px 0 15px">
                                <li><a href="assessment.php?assessment=performance-1&user=employee">Employee, no progress</a></li>
                                <li><a href="assessment.php?assessment=performance-1&user=employee&progress=1">Employee, some progress</a></li>
                                <li><a href="assessment.php?assessment=performance-1&user=employee&progress=2">Employee, no progress</a></li>
                            </ol>
                        </li>
                        <li>Performance Assessment: As Rater
                            <ol style="margin:3px 0 15px">
                                <li><a href="assessment.php?assessment=performance-1&user=rater">Rater, no progress</a></li>
                                <li><a href="assessment.php?assessment=performance-1&user=rater&progress=3">Rater, some progress</a></li>
                                <li><a href="assessment.php?assessment=performance-1&user=rater&progress=4">Rater, complete</a></li>
                                <li><a href="assessment.php?assessment=performance-1&user=rater&state=1">Rater, review</a></li>
                                <li><a href="assessment.php?assessment=performance-1&user=rater&state=3">Rater, choose signoff type</a></li>
                                <li><a href="assessment.php?assessment=performance-1&user=rater&state=4">Rater, waiting on employee signoff</a></li>
                                <li><a href="assessment.php?assessment=performance-1&user=rater&state=5">Rater, signoff</a></li>
                            </ol>
                        </li>
                        <li>Performance Assessment: As Peer
                            <ol style="margin:3px 0 15px">
                                <li><a href="assessment.php?assessment=performance-1&user=peer-1">Peer, no progress</a></li>
                                <li><a href="assessment.php?assessment=competency-1&user=peer-1&progress=1">Peer, complete</a></li>
                            </ol>
                        </li>
                        <li>Archived Versions (some my no longer work correctly)
                            <ol style="margin:3px 0 15px">
                                <li><a href="assessment-wide.php">Assessment Wide</a></li>
                                <li><a href="assessment-wide-rate.php">Assessment Wide: Statement Rating</a></li>
                                <li><a href="assessment-wide-rate-readonly.php">Assessment Wide: Statement Rating (readonly)</a></li>
                                <li><a href="assessment-wide-approval.php">Assessment Wide: Approval</a></li>
                                <li><a href="assessment-wide-review.php">Assessment Wide: Review</a></li>
                                <li><a href="assessment-wide-signoff.php">Assessment Wide: Sign Off</a></li>
                                <li><a href="todo-grouped-assessments.php">Assessment: To-Do Page w/ Grouped Assessments</a></li>
                                <li><a href="assessment.php">Assessment</a></li>
                                <li><a href="assessment-average-rating.php"> Assessment w/ Average Rating</a></li>
                                <li><a href="assessment-signoff.php">Assessment: Sign Off</a></li>
                                <li><a href="assessment-rate.php">Assessment: Statement Rating</a></li>
                                <li><a href="assessment-rate-multi.php">Assessment: Statement Rating (Multi-Rate &amp; Share)</a></li>
                                <li><a href="assessment-summary.php">Assessment: Summary</a></li>
                                <li><a href="assessment-review.php">Assessment: Review</a></li>
                                <li><a href="assessment-review-rp.php">Assessment: Review w/ Reflective Plan</a></li>
                                <li><a href="assessment-review-rp2.php">Assessment: Review w/ Reflective Plan Alternate</a></li>
                                <li><a href="assessment-approval.php">Assessment: Approval</a></li>
                                <li><a href="assessment-signoff.php">Assessment: Sign Off</a></li>
                                <li><a href="assessment-overview.php">Assessment: Overview w/ Peers Count</a></li>
                                <li><a href="assessment-overview-2.php">Assessment: Overview w/ Peers Progress</a></li>
                                <li><a href="assessment-overview-3.php">Assessment: Overview w/ Peers Progress &amp; Due Date</a></li>
                                <li><a href="assessment-manage-rater-peers.php">Assessment: Manage Rater &amp; Peers</a></li>
                                <li><a href="assessment-dynamic-section.php">Assessment: Dynamic Section</a></li>
                                <li><a href="assessment-search-rater.php">Assessment: Search Raters</a></li>
                                <li><a href="assessment-search-peers.php">Assessment: Search Peers</a></li>
                                <li><a href="assessment-search-statements.php">Assessment: Search Statements</a></li>
                                <li><a href="assessment-search-job-descriptions.php">Assessment: Search Job Descriptions</a></li>
                                <li><a href="assessment-performance-employee-summary.php">Performance Assessment: Employee Summary</a></li>
                                <li><a href="assessment-performance-employee-rate-job.php">Performance Assessment: Employee Rate Job</a></li>
                                <li><a href="assessment-performance-employee-rate.php">Performance Assessment: Employee Rate Statement</a></li>
                                <li><a href="assessment-performance-employee-rate-goal.php">Performance Assessment: Employee Rate Goal</a></li>
                                <li><a href="assessment-performance-employee-signoff-combined.php">Performance Assessment: Employee Sign Off w/ Ratings</a></li>
                                <li><a href="assessment-performance-employee-signoff.php">Performance Assessment: Employee Sign Off w/o Ratings</a></li>
                                <li><a href="assessment-performance-rater-summary.php">Performance Assessment: Rater Summary</a></li>
                                <li><a href="assessment-performance-employee-rate-goal.php">Performance Assessment: Employee Rate Goal</a></li>
                                <li><a href="assessment-performance-rater-rate-job.php">Performance Assessment: Rater Rate Job</a></li>
                                <li><a href="assessment-performance-rater-rate.php">Performance Assessment: Rater Rate Statement</a></li>
                                <li><a href="assessment-performance-rater-review.php">Performance Assessment: Rater Review</a></li>
                                <li><a href="assessment-performance-rater-signoff.php">Performance Assessment: Rater Sign Off</a></li>
                                <li><a href="assessment-performance-rater-signoff-remote.php">Performance Assessment: Rater Sign Off Remote</a></li>
                                <li><a href="assessment-competency-employee-summary.php">Competency Assessment: Employee Summary</a></li>
                                <li><a href="assessment-competency-employee-rate.php">Competency Assessment: Employee Rate Statement</a></li>
                                <li><a href="assessment-competency-employee-signoff-combined.php">Competency Assessment: Employee Sign Off w/ Ratings</a></li>
                                <li><a href="assessment-competency-rater-summary.php">Competency Assessment: Rater Summary</a></li>
                                <li><a href="assessment-competency-rater-rate.php">Competency Assessment: Rater Rate Statement</a></li>
                                <li><a href="assessment-competency-rater-review.php">Competency Assessment: Rater Review</a></li>
                                <li><a href="assessment-competency-rater-signoff.php">Competency Assessment: Rater Sign Off</a></li>
                                <li><a href="assessment-competency-rater-signoff-remote.php">Competency Assessment: Rater Sign Off Remote</a></li>
                                <li><a href="assessment-performance-employee-rate-goal.php">Performance Assessment: Employee Rate Goal</a></li>
                                <li><a href="assessment-performance-rater-rate-job.php">Performance Assessment: Rater Rate Job</a></li>
                            </ol>
                        </li>
                    </ol>
                    <hr>
                    <h5>Profile / Portfolio Section</h5>
                    <ol>
                        <li><a href="transcript.php">Transcript</a></li>
                        <li><a href="advanced-practice.php">Advanced Practice</a></li>
                        <li><a href="education.php">Education</a></li>
                        <li><a href="certifications.php">Certifications</a></li>
                        <li><a href="disciplines-licenses.php">Licenses</a></li>
                        <li><a href="documents.php">Documents</a></li>
                        <li><a href="goals.php">Goals</a></li>
                        <li><a href="job-descriptions.php">Job Descriptions</a></li>
                        <li><a href="notes.php">Notes</a></li>
                        <li><a href="personal-information.php">Personal Information</a></li>
                        <li><a href="profile-activity.php">Profile Activity</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="portfolio-modals.php">Portfolio: All Modals</a></li>
                        <li><a href="portfolio-print.php">Portfolio: Print Version</a></li>
                        <li><a href="portfolio-print-legend.pdf">Portfolio: Print Version Legend [pdf]</a></li>
                    </ol>
                    <hr>
                    <h5>Catalog Section</h5>
                    <ol>
                        <li><a href="catalog-unified-main.php">Catalog: Search w/ Carousel (differs from production)</a></li>
                        <li><a href="catalog-results.php">Catalog: Search Results (differs from production)</a></li>
                        <li><a href="course-enroll.php">Catalog: Course Detail</a></li>
                        <li><a href="payment.php">Checkout</a></li>
                        <li>TalentTracks
                            <ol style="margin:3px 0 15px">
                                <li><a href="talenttracks-landing.php">TalentTracks: Landing Page</a></li>
                                <li><a href="talenttracks-survey.php">TalentTracks: Survey Page</a></li>
                            </ol>
                        </li>
                    </ol>
                    <hr>
                    <h5>HealthStream ID / Global ID / NRP</h5>
                    <ol>
                        <li><a href="healthstream-id.php">HealthStream ID: Index of all pages in workflow</a></li>
                        <li><a href="global-id.php">Global ID: Login/Create Account Modal</a></li>
                        <li><a href="global-id-growl.php">Global ID: Verify Email (Growl)</a></li>
                        <li><a href="global-id-interruption.php">Global ID: Verify Email (Interrupt)</a></li>
                        <li><a href="authentication/affiliate-global-id.php">Global ID: Change Affliliation</a></li>
                        <li><a href="nrp.php">NRP: Create Portable Account</a></li>
                        <li><a href="nrp-verified.php">NRP: Verified Portable Account</a></li>
                    </ol>
                    <hr>
                    <h5>Team Section</h5>
                    <ol>
                        <li><a href="team.php">Team: Assessments (Round 1)</a></li>
                        <li><a href="team-people.php">Team: People (Concept)</a></li>
                        <li><a href="team-tasks.php">Team: Tasks (Concept)</a></li>
                        <li><a href="team-person.php">Team: Person (Concept)</a></li>
                    </ol>
                    <hr>
                    <h5>Connect Section</h5>
                    <ol>
                        <li><a href="connect-combined.php">Connect: Combined</a></li>
                        <li><a href="connect-combined-completed.php">Connect: Combined Completed Course</a></li>
                    </ol>
                    <hr>
                    <h5>Other Bits</h5>
                    <ol>
                        <li><a href="highlight.php">Highlight</a></li>
                        <li><a href="receipt.php">Receipt</a></li>
                        <li><a href="unsupported-browser.php">Unsupported Browser</a></li>
                        <li><a href="unsupported-browser-2.php">Unsupported Browser w/ Detection</a></li>
                        <li><a href="ewc.php">EWC Player Navigation</a></li>
                        <li><a href="growls.php">Growl-Style Examples</a></li>
                        <li><a href="interruptions.php">Interruption Modal Examples</a></li>
                        <li><a href="error.php">Error Page</a></li>
                        <li><a href="error-static.php">Error Page - Static</a></li>
                        <li><a href="error-email.php">Error Page w/ User Message</a></li>
                        <li><a href="error-404.php">Error Page (404)</a></li>
                        <li><a href="slat-actions.php">Slat Actions</a></li>
                        <li><a href="select2-slats.php">Select2 w/ Slats Examples</a></li>
                        <li><a href="home.php">Homepage w/ Calendar</a></li>
                    </ol>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<!-- /PROTOTYPE ONLY -->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-30360364-5', 'auto');
      ga('send', 'pageview');

    </script>

    <script src="/scripts/jquery.js"></script>
    <script src="/scripts/bootstrap.plugins.js"></script>
    <script src="/scripts/bootstrap-datepicker.js"></script>
    <script src="/scripts/bootstrap-timepicker.js"></script>
    <script src="/scripts/charts.js"></script>
    <script src="/scripts/gritter.js"></script>
    <script src="/scripts/select2.js"></script>
    <script src="/scripts/slick.js"></script>
    <script src="/scripts/tinysort.js"></script>
    <script src="/scripts/healthstream.js"></script>
    <script src="/scripts/healthstream.jquery.js"></script>
    <script src="/scripts/healthstream.utilities.equalize.js"></script>
    <script src="/scripts/healthstream.utilities.limitHeight.js"></script>
    <script src="/scripts/healthstream.utilities.toggleText.js"></script>
    <script src="/scripts/healthstream.utilities.growl.js"></script>
    <script src="/scripts/healthstream.utilities.interrupt.js"></script>
    <script src="/scripts/healthstream.focusbar.js"></script>
    <script src="/scripts/healthstream.stickybar.js"></script>
    <script src="/scripts/healthstream.filtermini.js"></script>
    <script src="/scripts/healthstream.checklist.js"></script>
    <script src="/scripts/healthstream.checkable.js"></script>
    <script src="/scripts/prototype.validation/formValidation.min.js"></script>
    <script src="/scripts/prototype.validation/framework/bootstrap.min.js"></script>
    <script src="/scripts/healthstream.tours/plugin/bootstrap-tour.js"></script>
    <script src="/scripts/healthstream.tours/localization/localization-eng-tour.js"></script>
    <!-- <script src="/scripts/healthstream.tours/tours/to-do-tour.js"></script> -->
    <script>
        $(function(){

            // helper to keep the task count correct
            $('.focus-pageheader .meta-value:eq(0)').text($('#tasks .slat').length);
            $('.focus-pageheader .meta-value:eq(1)').text($('#tasks .slat-attention').length);
                                  });

        $(document).ready(function() {
            "use strict";
            var healthStream = window.HealthStream = window.HealthStream || {};
            healthStream.tour = healthStream.tour || {};
            healthStream.tour.localization = healthStream.tour.localization || {};
            var constants = healthStream.constants || {};
            var defaultIcons = {
                Car: '<i class="fa fa-car"></i>',
                Close: '<i class="fa fa-times"></i>',
                LeftAngle: '<i class="fa fa-fw fa-chevron-left"></i>',
                RightAngle: '<i class="fa fa-fw fa-chevron-right"></i>'
            };
            var icons = constants.icons ? $.extend({}, defaultIcons, constants.icons) : defaultIcons;
            if (!$.isEmptyObject(healthStream.tour.localization)) {
                var localization = healthStream.tour.localization;
                // $(".nav-main .nav").append("<li><div class='container-fluid'><div class='row'><span href='#' class='btn btn-info col-xs-10' id='startTour'>" + icons.Car + localization.startTour + "</span></div></div></li>");
                // Create unique tour name so multiple users on same machine will see tour for first time
                // Tour name should contain only alphanumerics, underscores and hyphens
                var userName = $(".nav-account .name").html();
                var tourName = "toDoTour" + userName.replace(/\s+/g, '').replace(/[^a-z0-9\s]/gi, '');
                //create tour and add steps
                var tour = new window.Tour({
                    name: tourName,
                    storage: false,
                    template: "<div class='popover tour'><div class='arrow'></div><h3 class='popover-title bg-info'></h3><div class='popover-content'></div><div class='popover-navigation'><button class='btn btn-sm btn-default popover-previous' data-role='prev'>" + icons.LeftAngle + "</button><button class='btn btn-sm btn-success popover-next' data-role='next'>" + icons.RightAngle + "</button><button class='popover-close' data-role='end'>" + icons.Close + "</button></div></div>",
                    onShow: function() {
                        $('body').addClass('tour-open');
                    },
                    onHide: function() {
                        $('body').removeClass('tour-open');
                    }
                });
                tour.addSteps([{
                    element: "",
                    placement: "bottom",
                    title: localization.welcomeToTodoList,
                    content: localization.welcomeContent,
                    orphan: true,
                    backdrop: true,
                    backdropPadding: 5
                }, {
                    element: ".filter-target",
                    placement: "top",
                    title: localization.todoList,
                    content: localization.todoListContent,
                    backdrop: true,
                    backdropPadding: 5
                }, {
                    element: ".fph-secondary ul li:visible:first",
                    placement: "bottom",
                    title: localization.taskSummary,
                    content: localization.taskSummaryContent
                }, {
                    element: ".slat:visible:first .title",
                    placement: "bottom",
                    title: localization.view,
                    content: localization.viewContent,
                    backdrop: true,
                    backdropPadding: 5
                }, {
                    element: ".slat:visible:first .action",
                    placement: "bottom",
                    title: localization.action,
                    content: localization.actionContent,
                    backdrop: true,
                    backdropPadding: 5
                }, {
                    element: ".slat-message:visible:first",
                    placement: "top",
                    title: localization.noTasks,
                    content: localization.noTasksContent,
                    backdrop: true,
                    backdropPadding: 5
                }, {
                    element: ".slat:not(.slat-attention):visible:first .slat-default",
                    placement: "top",
                    title: localization.orderOfTasks,
                    content: localization.orderOfTasksContent
                }, {
                    element: ".slat-attention:visible:first",
                    placement: "bottom",
                    title: localization.attentionItems,
                    content: localization.attentionItemsContent,
                    backdrop: true,
                    backdropPadding: 5,
                    template: '<div class="popover tour"><div class="arrow"></div><h3 class="popover-title bg-attention"></h3><div class="popover-content"></div><div class="popover-navigation"><button class="btn btn-sm btn-default popover-previous" data-role="prev"><i class="fa fa-fw fa-chevron-left"></i></button><button class="btn btn-sm btn-success popover-next" data-role="next"><i class="fa fa-fw fa-chevron-right"></i></button><button class="popover-close" data-role="end"><i class="fa fa-times"></i></button></div></div>',
                }, {
                    element: "div.slat[data-filter-category='3']:visible:first .action",
                    placement: "top",
                    title: localization.electives,
                    content: localization.electivesContent,
                    backdrop: true,
                    backdropPadding: 5
                }, {
                    element: ".filter-mini",
                    placement: "bottom",
                    title: localization.filters,
                    content: localization.filtersContent,
                    backdrop: true,
                    backdropPadding: 5
                }, {
                    element: ".list-links li > a:contains('My Submitted Assessments'):first",
                    placement: "bottom",
                    title: localization.todoSubmittedAssessments,
                    content: localization.todoSubmittedAssessmentsContent,
                    backdrop: true,
                    orphan: false
                }, {
                    element: "#myAssessmentsLink",
                    placement: "bottom",
                    title: localization.todoOldAssessments,
                    content: localization.todoOldContent,
                    backdrop: true,
                    orphan: false
                }, {
                    element: ".fph-cell-button .btn-focus:visible:first",
                    placement: "bottom",
                    title: localization.quickStart,
                    content: localization.quickStartContent,
                    backdrop: true,
                    orphan: false
                }, {
                    element: "",
                    placement: "bottom",
                    title: localization.endOfTour,
                    content: localization.endOfTourContent,
                    orphan: true,
                    backdrop: true
                }]);
                //Restart tour when user clicks the button
                $("#startSmTour").click(function() {
                    tour.init();
                    tour.restart();
                    $(".trigger-close").click();
                });
            }
        });
    </script>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"54ac9448ca","applicationID":"9436983","transactionName":"YlxRYxdZWEcEVxBeCVsWZkUMF19aAVEcGRZdSQ==","queueTime":0,"applicationTime":5,"atts":"ThtSFV9DS0k=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>