<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>My To-Do List | HealthStream</title>

    <!-- Styles
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.bootstrap.css?cache=1492525766">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.plugins.css?cache=1492525766">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.app.css?cache=1492525766">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.prototype.css?cache=1492525766">

    <!-- IE 7/8 Handling
    ================================================== -->
    <script>
        if (document.documentMode < 8) {
            location.href = "unsupported-browser.php";
        } else if (document.documentMode == 8) {
            var html = document.getElementsByTagName('html')[0];
            html.className = 'ie ie8' + html.className;
            var ie8docmode = document.createElement('script');
            ie8docmode.setAttribute('src', '/scripts/respond.js');
            document.getElementsByTagName('head')[0].appendChild(ie8docmode);
            var ie8styles = document.createElement('link');
            ie8styles.setAttribute('rel', 'stylesheet');
            ie8styles.setAttribute('type', 'text/css');
            ie8styles.setAttribute('href', '/content/styles/healthstream.ie8.css');
            document.getElementsByTagName('head')[0].appendChild(ie8styles);
        } else {
            var icons = document.createElement('link');
            icons.setAttribute('rel', 'stylesheet');
            icons.setAttribute('type', 'text/css');
            icons.setAttribute('href', '/content/styles/healthstream.icons.css');
            document.getElementsByTagName('head')[0].appendChild(icons);
        }
    </script>

    <!-- Feature Detection Using Modernizr
    ================================================== -->
    <script src="/scripts/modernizr.js"></script>
    <style>
    .slat {
      padding: 0;
      display: table !important;
      width: 100%;
      border-left: none;
    }
    
    .slat:nth-of-type(odd) {
      border: 1px solid #ececec;
    }
    
    .slat:nth-of-type(even) {
      border: 1px solid #e1e1e1;
    }
    
    .slat-attention:nth-of-type(odd) {
      border: 1px solid #fc7b00;
    }
    
    .slat-attention:nth-of-type(even) {
      border: 1px solid #fc7b00;
    }
    
    .slat-cell-icon {
      display: table-cell !important;
      width: 80px;
      /*height: 70px;*/
      text-align: center;
      vertical-align: top;
      padding-top: 8px;
      padding: 8px;
    }
    
    .slat-icon {
      padding-bottom: 10px;
      margin: 0 auto;
      margin-top: -5px;
    }
    
    .slat-icon i {
      color: #fff;
      font-size: 42px;
      /*text-shadow: 0 0 3px #004d66;*/
      /*line-height: 65px !important;*/
    }
    
    .slat-cell-icon .slat-icon-label {
      color: #fff;
      font-size: 10px;
      /*text-shadow: 0 0 3px #004d66;*/
      text-transform: uppercase;
      display: block;
      margin-top: -12px;
      font-weight: 600;
    }
    
    .slat-default {
      display: table-cell !important;
      width: auto;
      padding: 10px;
    }
    
    .slat-default .action {
      right: 10px !important;
    }
    
    .slat-cell-icon {
      /*background-color: #0985af;*/
      border-right: #e1e1e1 solid 1px;
    }
    .hs-icons-course, .slat-icon-course  .slat-icon-label {
      color: #0985af !important;
    }
    
    .slat-icon-schedule i, .slat-icon-schedule .slat-icon-label{
      color: #ecbe5b !important;
    }
    
    .slat-icon-virtual-class  i, .slat-icon-virtual-class .slat-icon-label {
      color: #c39c46;
    }
    
    .slat-icon-curriculum  i, .slat-icon-curriculum .slat-icon-label{
      color: #0985af;
    }
    
    .slat-icon-peer-assessment i, .slat-icon-peer-assessment .slat-icon-label {
      color: #49bbb5;
    }
    
    .slat-icon-profile-activity i, .slat-icon-profile-activity .slat-icon-label {
      color: #bc6381;
    }
    
    .hs-i-calendar {
      font-family: FontAwesome !important;
      font-style: normal !important;
    }
    
    .hs-i-calendar:before {
      content: "\f073";
    }
    
    h3 {
      font-weight: 400 !important;
    }
    
    .hs-i-calendar {
      margin-top: -10px;
      display: block;
      margin-: 10px;
    }
    
    .hs-icons-curriculum,
    .hs-icons-course {
      margin-top: 5px;
      display: block;
      margin-bottom: -5px;
      padding-bottom: 0px;
    }
    
    .slat-icon {
      padding-bottom: 0px;
    }
    
    .slat-icon-schedule .slat-icon-label {
      padding-top: 5px;
    }
    
    .slat-icon-peer-assessment .slat-icon-label {
      margin-top: -16px;
    }
    .slat-icon-nested {
      padding: 0;
      display: table !important;
      width: 100%;
    
    }
    
    .nested-content {
      padding-left: 15px;
      padding-top: 7px;
      color: #666;
    }
    
    .slat-nested {
      margin-top: -10px !important;
    }
    
    .nested-content ul {
      /*margin-left:0px;*/
      padding-left: 20px;
      /*margin-top:5px;*/
    }
    
    .nested-content > ul {
      /*margin-left:0px;*/
      padding-left: 20px;
      margin-top: 5px;
    }
    
    .slat-nested .collapse-toggle {
      display: block;
      /*margin-left: 10px;*/
      margin-bottom: 7px;
      margin-top: 7px;
    }
    
    #tasks h3 {
      margin-top: 30px;
    }
    
    .slat-nested {
      margin-top: 5px !important;
    }
    
    .ad-arrow {
      position: absolute;
      right: 5px;
      top: 12px;
    }
    .dropdown-menu .badge {
      background-color: #f6f6f6 !important;
      border: 1px solid #777 !important;
      color: #777 !important;
      display: inline-block;
      margin-right: -15px;
    }

    .slat {
      display: none !important;
      background-color: #f6f6f6 !important;
      border: 1px solid #e1e1e1 !important;
    }
    
    .slat.active {
      display: table !important;
    }
    
    .meta-label {
      font-weight: 500 !important;
    }
    
    .slat .meta-value {
      font-weight: 600 !important;
      color: #666;
    }
    
    .meta-callout .meta-value {
      font-weight: normal !important;
    }
    
    .slat-attention {
      /*display:none !important;*/
      /*background-color: #f6f6f6 !important;*/
      border: 1px solid #fc7b00 !important;
    }
    
    .slat.slat-callout>.slat-default {
      p
  }

  .slat .slat-default .action, .slat .slat-default>.btn, .slat .slat-default>form>.btn {
    top:40px;
  }
  .slat .slat-default .meta .meta-callout {
    top:40px;
  }
    </style>
</head>

<body>
    <div class="app-launcher-mobile collapse">
        <a href="#" class="trigger-close"><i class="fa fa-times"></i></a>
        <div class="title">More HealthStream Apps</div>
        <div style="">

            <ul class="app-drawer-nav-item">
                <li class="app-drawer-nav-item">
                    <a target="_blank" href="http://www.healthstream.com">
                        <div class="app-drawer-nav-item-logo">
                            <div class="svg-icon-wrap">
                                <img src="content/images/coi-logo-50x50.png">
                            </div>
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
                                <img src="content/images/echo-logo-50x50.png">
                            </div>
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
                                <img src="content/images/mgr-dashboard-50x50.png">
                            </div>
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
    <div class="site-header">
        <div class="container">
            <a href="#" class="trigger-open-app-launcher">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 1200" height="15px" width="15px">
                 <ellipse class="cls-2" cx="151" cy="153.5" rx="147" ry="149.5" />
                 <ellipse class="cls-1" cx="600" cy="153.5" rx="147" ry="149.5" />
                 <ellipse class="cls-2" cx="600" cy="599.5" rx="147" ry="149.5" />
                 <ellipse class="cls-2" cx="151" cy="600.5" rx="147" ry="149.5" />
                 <ellipse class="cls-2" cx="151" cy="1050.5" rx="147" ry="149.5" />
                 <ellipse class="cls-1" cx="600" cy="1050.5" rx="147" ry="149.5" />
                 <ellipse class="cls-2" cx="1049" cy="1050.5" rx="147" ry="149.5" />
                 <ellipse class="cls-2" cx="1049" cy="599.5" rx="147" ry="149.5" />
                 <ellipse class="cls-2" cx="1049" cy="153.5" rx="147" ry="149.5" />
             </svg>
                <span>Apps</span></a>
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
            </nav>
            <!-- /nav-account -->
        </div>
        <!-- /container -->
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
                        <ellipse class="cls-2" cx="151" cy="153.5" rx="147" ry="149.5" />
                        <ellipse class="cls-1" cx="600" cy="153.5" rx="147" ry="149.5" />
                        <ellipse class="cls-2" cx="600" cy="599.5" rx="147" ry="149.5" />
                        <ellipse class="cls-2" cx="151" cy="600.5" rx="147" ry="149.5" />
                        <ellipse class="cls-2" cx="151" cy="1050.5" rx="147" ry="149.5" />
                        <ellipse class="cls-1" cx="600" cy="1050.5" rx="147" ry="149.5" />
                        <ellipse class="cls-2" cx="1049" cy="1050.5" rx="147" ry="149.5" />
                        <ellipse class="cls-2" cx="1049" cy="599.5" rx="147" ry="149.5" />
                        <ellipse class="cls-2" cx="1049" cy="153.5" rx="147" ry="149.5" />
                    </svg>
                            </div>
                            <div class="label">
                                Apps
                            </div>
                            <div class="arrow">
                                <i class="fa fa-angle-down" style="padding-left:1px;"></i>
                            </div>
                        </div>
                        <ul class="app-drawer-content" style="display:none;">
                            <li>
                                <div class="app-drawer-content-panel">
                                    <ul class="app-drawer-nav-item">
                                        <li class="app-drawer-title">
                                            More HealthStream Apps
                                        </li>
                                        <li class="app-drawer-nav-item">
                                            <a target="_blank" href="http://www.healthstream.com">
                                                <div class="app-drawer-nav-item-logo">
                                                    <div class="svg-icon-wrap">
                                                        <img src="content/images/coi-logo-50x50.png">
                                                    </div>
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
                                                        <img src="content/images/echo-logo-50x50.png">
                                                    </div>
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
                                                        <img src="content/images/mgr-dashboard-50x50.png">
                                                    </div>
                                                </div>
                                                <div class="app-drawer-nav-item-content">
                                                    <h5 class="title">My Team Dashboard</h5>
                                                    <p class="description">Monitor the progress of your team’s assignments.</p>
                                                </div>

                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
            </div>
            <!-- /container -->
        </nav>
        <!-- /nav-main -->
        <div class="support">
            <h3>Support</h3>
            <p>To talk with a customer service representative call 1-800-521-0574</p>
            <p><a href="#">Send us an email</a></p>
        </div>
    </div>
    <!-- /site-header -->
    <div class="focus focus-pageheader">
        <div class="fph-separator"></div>
        <div class="fph-table">
            <div class="fph-row">

                <div class="fph-cell fph-cell-text">
                    <div class="fph-primary">
                        <h1>My To-Do List</h1>
                    </div>
                    <div class="fph-secondary">
                        <ul class="meta">
                            <li><span class="meta-label">Total Tasks:</span><span class="meta-value">17</span></li>
                            <li><span class="meta-label">Requiring Attention:</span><span class="meta-value">5</span></li>
                        </ul>
                    </div>

                </div>
                <div class="fph-cell fph-cell-button">
                    <a href="course.php" class="btn btn-focus">
Quick Start <i class="fa fa-chevron-right"></i>
</a>
                </div>
                <div class="fph-cell fph-cell-supporting"><img src="/content/images/coaching-quick.png"></div>
            </div>
        </div>
    </div>
    <div class="layout">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <section class="section section-main section-box" data-equalize="layout-columns">
                       

                       <div class="filter-dropdown">
                         <b style="font-weight:600">Show My:</b>

                         <div class="dropdown" style="display:inline-block;">
                           <button class="btn btn-default btn-sm dropdown-toggle filter-button" type="button" data-toggle="dropdown" style="margin-left:7px; width:200px;text-align:left;"><span class="caret pull-right" style="margin-top:7px;"></span>Entire List (12)

                           </button>
                           <ul class="dropdown-menu pull-right filter-dropdown">
                           <li>
                             <a href="#" data-texttodisplay="Entire List (12)" data-filter="0">
                               <label class="badge pull-right">12</label>Entire List </a>
                           </li>
                           <li>
                             <a href="#" data-texttodisplay="Assigned Only (9)" data-filter="1">
                               <label class="badge pull-right">9</label>Assigned Only </a>
                           </li>
                             <li>
                               <a href="#" data-texttodisplay="Assigned Only (9)" data-filter="1">
                                 <label class="badge pull-right">9</label>Assigned Only </a>
                             </li>
                             <li>
                               <a href="#" data-texttodisplay="Electives Only (2)" data-filter="2">
                                 <label class="badge pull-right">2</label>Electives Only </a>
                             </li>
                             <li role="separator" class="divider"></li>
                             <li>
                               <a href="#" data-texttodisplay="Assessments (3)" data-filter="3">
                                 <label class="badge pull-right">3</label>Assessments</a>
                             </li>
                             <li>
                               <a href="#" data-texttodisplay="Courses (5)" data-filter="4">
                                 <label class="badge pull-right">5</label>Courses</a>
                             </li>
                             <li>
                               <a href="#" data-texttodisplay="Curriculums (1)" data-filter="5">
                                 <label class="badge pull-right">1</label>Curriculums</a>
                             </li>
                             <li>
                               <a href="#" data-texttodisplay="Live Classes (2)" data-filter="6">
                                 <label class="badge pull-right">2</label>Live Classes</a>
                             </li>
                             <li>
                               <a href="#" data-texttodisplay="Virtual Classes (1)" data-filter="7">
                                 <label class="badge pull-right">1</label>Virtual Classes</a>
                             </li>
                             <li>
                               <a href="#" data-texttodisplay="Profile Tasks (1)" data-filter="8">
                                 <label class="badge pull-right">1</label>Profile Tasks</a>
                             </li>
                           </ul>
                         </div>
                         <span href="#" class="btn btn-info btn-sm" id="startTour" style="margin-left:5px;"><i class="fa fa-car"></i>Take a Tour</span>
                       </div>


                       <section class="section" id="tasks">
                         <h3 class="pull-left hdr-1" style="display:inline-block; margin-top:5px">Action Required</h3>
                         <div class="pull-right">
                           <select class="form-control input-sm" style="width:125px;">
                             <option selected>Sort: By Priority</option>
                             <option>Name (A-Z)</option>
                             <option>Type of Task</option>
                           </select>

                         </div>

    

                        <div 


                         <div class="slat-attention slat slat-spaced slat-callout slat-course slat1" data-filter-category="1">
                           <div class="slat-cell-icon slat-icon-course ">
                             <div class="slat-icon">
                               <div class="slat-content">
                                 <i class="hs-icons-course"> </i>
                                 <div class="slat-icon-label">Course</div>
                               </div>
                             </div>
                           </div>
                           <div class="slat-default">
                             <div class="title"><a href="course-institution-specific.php">PAST DUE: Fire Safety (PA)</a></div>
                             <ul class="meta">
                               <li><span class="meta-label">Status:</span><span class="meta-value">Assigned</span></li>
                               <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Past Due:</span>Dec 7, 2016</span>
                               </li>
                             </ul>
                             <div class="action">
                               <a class="btn btn-sm btn-default" href="course-institution-specific.php">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                             </div>
                           </div>
                         </div>
                         <div class="slat slat-attention slat-spaced slat-callout slat-peer-assessment slat2" data-filter-category="5">
                           <div class="slat-cell-icon slat-icon-peer-assessment">
                             <div class="slat-icon" style="padding-bottom: 0px;">
                               <i class="hs-icons-assessment"></i>
                               <div class="slat-icon-label">Self Assessment</div>
                             </div>
                           </div>
                           <div class="slat-default">
                             <div class="title"><a href="assessment.php?assessment=performance-2&Status=4">SIGN OFF: Nursing Competency Appraisal - Bennet, Betty</a></div>
                             <ul class="meta">
                               <li><span class="meta-label">Status:</span><span class="meta-value">Sign Off</span></li>
                               <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Past Due:</span>Jan 6, 2017</span>
                               </li>
                             </ul>
                            <div class="action action-split">
                                <div class="btn-group">
                                    <a href="assessment.php?assessment=performance-2&amp;state=4" class="btn btn-default btn-sm hidden-xs">Sign Off</a>
                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="assessment.php?assessment=performance-2&amp;state=4">Sign Off</a></li><li><a href="#">Print</a></li>
                                    </ul>
                                </div>
                            </div>
                           </div>
                         </div>
                        <div class="slat slat-callout slat-attention slat-spaced slat-schedule slat3 active" data-filter-category="2">
                                        <div class="slat-cell-icon slat-icon-schedule">
                                          <!--<div class="slat-icon">
                            <i class="hs-i-calendar"></i>
                            <div class="slat-icon-label">Schedule</span>
                            </div>-->
                                          <div class="slat-icon" style="padding-bottom: 0px;">
                                            <i class="hs-i-calendar"></i>
                                            <div class="slat-icon-label">Schedule</div>
                                          </div>
                                        </div>
                                        <div class="slat-default">
                                          <div class="title"><a href="#">CHOOSE A CLASS: 2017 Leadership Development: First Principles</a></div>
                                          <ul class="meta">
                                            <!--<li><span class="meta-label">Status:</span><span class="meta-value">Assigned</span></li>-->
                                            <li class="meta-callout"><span class="meta-value">Not Registered</span></li>
                                          </ul>
                                          <div class="action">
                                            <a class="btn btn-sm btn-default" href="course-institution-specific.php">Choose Class<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                          </div>
                                        </div>
                                      </div>

                         <!-- <h3 class="hdr-2">Required</h3> -->
                         <div class="slat slat-spaced slat-callout slat-course slat4" data-filter-category="1">
                           <div class="slat-cell-icon slat-icon-course">
                             <div class="slat-icon">
                               <i class="hs-icons-course"></i>
                               <div class="slat-icon-label">Course</div>
                             </div>
                           </div>
                           <div class="slat-default">
                             <div class="title"><a href="assessment.php?assessment=competency-1&progress=1">Corporate Compliance (PA)</a></div>
                             <ul class="meta">
                               <li><span class="meta-label">Status:</span><span class="meta-value">Assigned</span></li>
                               <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Apr 14, 2017</span>
                               </li>
                             </ul>
                             <div class="action">
                               <a class="btn btn-sm btn-default" href="course-institution-specific.php">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                             </div>
                           </div>
                         </div>
                         <div class="slat slat-spaced slat-callout slat-virtual-class" data-filter-category="2">
                           <div class="slat-cell-icon slat-icon-virtual-class">
                             <div class="slat-icon" style="padding-bottom: 0px;">
                               <i class="hs-icons-class-virtual"></i>
                               <div class="slat-icon-label">Virtual Class</div>
                             </div>
                           </div>
                           <div class="slat-default">
                             <div class="title"><a href="assessment.php?assessment=competency-14&user=peer-1">Culture and Workplace Webinar</a></div>
                             <ul class="meta">
                               <li><span class="meta-label">Status:</span><span class="meta-value">Registered</span></li>
                               <li><span class="meta-label">Session:</span><span class="meta-value">1 of 1</span></li>
                               <li class="meta-callout"><span class="meta-label">Starts: </span><span class="meta-value"><span class="meta-callout-label">Starts:</span> Apr 15, 2017 at 9:00am ET</span>
                               </li>
                             </ul>
                             <div class="action">
                               <a class="btn btn-sm btn-default" href="course-institution-specific.php">View<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                             </div>
                           </div>
                         </div>
                         <div class="slat slat-spaced slat-callout slat-curriculum" data-filter-category="1">
                           <!--<div class="slat-icon-nested">-->
                           <div class="slat-cell-icon slat-icon-curriculum">
                             <div class="slat-icon">
                               <i class="hs-icons-curriculum"></i>
                               <div class="slat-icon-label">Currculum</div>
                             </div>
                           </div>
                           <div class="slat-default">
                             <div class="title"><a href="assessment.php?assessment=performance-1">2017 Nursing Technologies Track</a></div>
                             <ul class="meta">
                               <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                               <li><span class="meta-label">Completed:</span><span class="meta-value">2 of 3</span></li>
                               <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Apr 22, 2017</span>
                               </li>
                             </ul>
                             <div class="action">
                               <a class="btn btn-sm btn-default" href="course-institution-specific.php">Resume<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                             </div>
                             <div class="slat-nested">
                               <div class="collapse-group collapse">

                                 <div class="nested-content">
                                   Courses in this Curriculum
                                   <ul>
                                     <li>Introduction to Nursing Technology</li>
                                     <li>Learning Lab: Monitoring Equipment</li>
                                     <li>Learning Lab: IVs and Pumps</li>
                                     <li>Choose One: Technology in Child Care
                                       <ul>
                                         <li>Tech for Neonatal Care</li>
                                         <li>Technology in Pediatric Care</li>
                                       </ul>
                                     </li>
                                   </ul>
                                 </div>

                               </div>
                               <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show courses|Hide courses">Show courses<i class="fa-fw fa-caret-down fa"></i></a>

                             </div>

                           </div>

                         </div>
                         <div class="slat slat-spaced slat-callout slat-peer-assessment" data-filter-category="5">
                           <div class="slat-cell-icon slat-icon-peer-assessment">
                             <div class="slat-icon" style="padding-bottom: 0px;">
                               <i class="hs-icons-assessment"></i>
                               <div class="slat-icon-label">Peer Assessment</div>
                             </div>
                           </div>
                           <div class="slat-default">
                             <div class="title"><a href="assessment.php">Lab Skills: Groover, George G.</a></div>
                             <ul class="meta">
                               <li><span class="meta-label">State:</span><span class="meta-value">Evaluate</span></li>
                               <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value"><span class="meta-callout-label">Due:</span>Apr 26, 2017</span>
                               </li>
                             </ul>
                             <div class="action">
                               <a class="btn btn-sm btn-default" href="assessment.php">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                             </div>
                           </div>
                         </div>
                         <div class="slat slat-spaced slat-callout slat-profile-activity" data-filter-category="4">
                           <div class="slat-cell-icon slat-icon-profile-activity">
                             <div class="slat-icon">
                               <i class="fa fa-user fa-4x" style="height:55px;margin-top:7px;"></i>
                               <div class="slat-icon-label">Profile Activity</div>
                             </div>
                           </div>
                           <div class="slat-default">
                             <div class="title"><a href="profile-activity.php">Please Update Your Profile</a></div>
                             <ul class="meta">
                               <li><span class="meta-label">Status:</span><span class="meta-value">Assigned</span></li>
                               <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>May 1, 2017</span>
                               </li>
                             </ul>
                             <div class="action">
                               <a class="btn btn-sm btn-default" href="profile-activity.php">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                             </div>
                           </div>
                         </div>
                         <div class="slat slat-spaced slat-callout slat-course" data-filter-category="1">
                           <div class="slat-cell-icon slat-icon-course">
                             <div class="slat-icon">
                               <i class="hs-icons-course"></i>
                               <div class="slat-icon-label">Course</div>
                             </div>
                           </div>
                           <div class="slat-default">
                             <div class="title"><a href="curriculum.php">Hand Hygiene</a></div>
                             <ul class="meta">
                               <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                               <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>May 6, 2017</span>
                               </li>
                             </ul>
                             <div class="action">
                               <a class="btn btn-sm btn-default" href="curriculum.php">Resume<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                             </div>
                           </div>
                         </div>
                         <div class="slat slat-spaced slat-callout slat-peer-assessment" data-filter-category="4">
                           <div class="slat-cell-icon slat-icon-peer-assessment">
                             <div class="slat-icon" style="padding-bottom: 0px;">
                               <i class="hs-icons-assessment"></i>
                               <div class="slat-icon-label">Self Assessment</div>
                             </div>
                           </div>
                           <div class="slat-default">
                             <div class="title"><a href="profile-activity.php">Self Assessment: Juniper, Stephanie P.</a></div>
                             <ul class="meta">
                               <li><span class="meta-label">State:</span><span class="meta-value">Review</span></li>
                               <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value"><span class="meta-callout-label">Due:</span>May 6, 2017</span>
                               </li>
                             </ul>
                             <div class="action">
                               <a class="btn btn-sm btn-default" href="profile-activity.php">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                             </div>
                           </div>
                         </div>
                       <!--   <div class="slat slat-spaced slat-callout slat-schedule" data-filter-category="6">
                           <div class="slat-cell-icon slat-icon-schedule">
                             <div class="slat-icon">
                               <i class="hs-icons-class-live"></i>
                               <div class="slat-icon-label">Live Class</div>
                             </div>
                           </div>
                           <div class="slat-default">
                             <div class="title"><a href="assessment.php?assessment=competency-1&progress=1">Medical Ethics</a></div>
                             <ul class="meta">
                               <li><span class="meta-label">Status:</span><span class="meta-value">Registered</span></li>
                               <li><span class="meta-label">Session:</span><span class="meta-value">1 of 1</span></li>
                               <li class="meta-callout"><span class="meta-label">Starts: </span><span class="meta-value"><span class="meta-callout-label">Starts:</span>May 18, 2017 at 2:30pm ET</span>
                               </li>
                             </ul>
                             <div class="action">
                               <a class="btn btn-sm btn-default" href="course-institution-specific.php">View<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                             </div>
                           </div>
                         </div> -->

                         <div class="slat slat-spaced slat-callout slat-schedule" data-filter-category="6">
                           <div class="slat-cell-icon slat-icon-schedule">
                             <div class="slat-icon">
                              <i class="hs-icons-class-live"></i>
                               <div class="slat-icon-label">Live Class</div>
                             </div>
                           </div>
                           <div class="slat-default">
                            <div class="title"><a href="assessment.php?assessment=competency-1&progress=1">Medical Ethics</a></div>
                             <ul class="meta">
                                <li><span class="meta-label">Status:</span><span class="meta-value">Registered</span></li>
                                <li><span class="meta-label">Session:</span><span class="meta-value">1 of 1</span></li>
                                <li class="meta-callout"><span class="meta-label">Starts: </span><span class="meta-value"><span class="meta-callout-label">Starts:</span>May 18, 2017 at 2:30pm ET</span>
                                </li>
                             </ul>
                             <div class="action">
                               <a class="btn btn-sm btn-default" href="course-institution-specific.php">View<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                             </div>
                             <div class="slat-nested">
                               <div class="collapse-group collapse">

                                 <div class="nested-content">
                                   Course:
                                   <ul>
                                     <li><a href="#">Medical Ethics - Due: May 28, 2017</a></li>
                                   </ul>
                                 </div>


                               </div>
                               <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show course|Hide course">Show course<i class="fa-fw fa-caret-down fa"></i></a>

                             </div>

                           </div>

                         </div>


                         <!-- <div class="slat slat-spaced slat-callout slat-course" data-filter-category="3">
                           <div class="slat-cell-icon slat-icon-course">
                             <div class="slat-icon">
                               <i class="hs-icons-course"></i>
                               <div class="slat-icon-label">Course</div>
                             </div>
                           </div>
                           <div class="slat-default">
                             <div class="title"><a href="assessment.php?assessment=competency-1&progress=1">Medical Ethics</a></div>
                             <ul class="meta">
                               <li><span class="meta-label">Status:</span><span class="meta-value">Assigned</span></li>
                               <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>May 28, 2017</span>
                               </li>
                             </ul>
                             </ul>
                             <div class="action">
                               <a class="btn btn-sm btn-default" href="course-institution-specific.php">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                             </div>
                           </div>
                         </div> -->

                         <div class="slat slat-spaced slat-callout slat-curriculum" data-filter-category="1">
                           <div class="slat-cell-icon slat-icon-curriculum">
                             <div class="slat-icon">
                               <i class="hs-icons-equivalent"></i>
                               <div class="slat-icon-label">Equivalent</div>
                             </div>
                           </div>
                           <div class="slat-default">
                             <div class="title"><a href="assessment.php?assessment=performance-1">Choose One: HIPPA for Healthcare Personnel</a></div>
                             <ul class="meta">
                               <li><span class="meta-label">Status:</span><span class="meta-value">Assigned</span></li>
                               <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>May 30, 2017</span>
                               </li>
                             </ul>
                             <div class="action">
                               <a class="btn btn-sm btn-default" href="course-institution-specific.php">Resume<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                             </div>
                             <div class="slat-nested">
                               <div class="collapse-group collapse">

                                 <div class="nested-content">
                                   Course Options
                                   <ul>
                                     <li>HIPPA for Business Associates</li>
                                     <li>HIPPA for General Staff</li>
                                     <li>HIPPA for Non-Patient Care Staff</li>
                                     <li>HIPPA for Poatient Care Professionals</li>
                                   </ul>
                                 </div>


                               </div>
                               <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show courses|Hide courses">Show courses<i class="fa-fw fa-caret-down fa"></i></a>

                             </div>

                           </div>

                         </div>

                         <h3 class="hdr-3">Electives</h3>

                         <div class="slat slat-spaced slat-callout slat-course slat-optional" data-filter-category="3">
                           <div class="slat-cell-icon slat-icon-course">
                             <div class="slat-icon">
                               <i class="hs-icons-course"></i>
                               <div class="slat-icon-label">Course</div>
                             </div>
                           </div>
                           <div class="slat-default">
                             <div class="title"><a href="assessment.php?assessment=competency-1&progress=1">Culture and Workplace Issues</a></div>
                             <ul class="meta">
                               <li><span class="meta-label">Status:</span><span class="meta-value">Not Started</span></li>
                               <li><span class="meta-label">Enrolled by:</span><span class="meta-value">Admin</span></li>
                               <li class="meta-callout"><span class="meta-value">Elective</span></li>
                               </li>
                             </ul>
                             <div class="action">
                               <a class="btn btn-sm btn-default" href="course-institution-specific.php">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                             </div>
                           </div>
                         </div>

                         <div class="slat slat-spaced slat-callout slat-course slat-optional" data-filter-category="3">
                           <div class="slat-cell-icon slat-icon-course">
                             <div class="slat-icon">
                               <i class="hs-icons-course"></i>
                               <div class="slat-icon-label">Course</div>
                             </div>
                           </div>
                           <div class="slat-default">
                             <div class="title"><a href="assessment.php?assessment=competency-1&progress=1">Leadership Development: First Principles</a></div>
                             <ul class="meta">
                               <li><span class="meta-label">Status:</span><span class="meta-value">Not Started</span></li>
                               <li><span class="meta-label">Enrolled by:</span><span class="meta-value">Self</span></li>
                               <li class="meta-callout"><span class="meta-value">Elective</span></li>
                               </li>
                             </ul>
                             <div class="action">
                               <a class="btn btn-sm btn-default" href="course-institution-specific.php">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                             </div>
                           </div>
                         </div>

                       </section>
                </section>
                <!-- /section-main -->
            </div>
            <!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>Reminder</h3>
                        <ul class="list-links">
                            <li><a href="/highlight.php">Scheduled Downtime 4/19 at 11PM</a></li>
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
                <!-- /section-sidebar -->
            </div>
            <!-- /column -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    </div>
    <!-- /layout -->


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
                            <li><a href="registration.php">Class Schedule: Not Registered</a></li>
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
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
    <!-- /PROTOTYPE ONLY -->

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

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
    <script src="/scripts/healthstream.utilities.applauncher.js"></script>
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
    <script src="/scripts/healthstream.tours/tours/to-do-tour.js"></script>
    <script>
        $(function() {
            $('.slat').addClass("active");
            // helper to keep the task count correct
            $('.focus-pageheader .meta-value:eq(0)').text($('#tasks .slat').length);
            $('.focus-pageheader .meta-value:eq(1)').text($('#tasks .slat-attention').length);

            $(".dropdown-menu li a").click(function() {

              $(".filter-button").html('<span class="caret pull-right" style="margin-top:7px;"></span>' + $(this).data('texttodisplay'));
              $("filter-button").val($(this).text());

            });



            HealthStream.utilities.applauncher();

            $('.filter-dropdown a').click(function() {
              var filterid = $(this).data("filter");
              console.log($(this).data("filter"));
              // console.log($('.slat'));
              $('.slat').removeClass("active");
              $('.hdr-1').show();
              $('.hdr-2').show();
              $('.hdr-3').show();

              if (filterid == "0") {
                $('.slat').addClass("active");
                $('.slat-optional').addClass("active");
                // $('.hdr-3').hide();
              }
              if (filterid == "1") {
                $('.slat').addClass("active");
                $('.slat-optional').removeClass("active");
                $('.hdr-3').hide();
              }
              if (filterid == "2") {
                //  $('.slat').addClass("active");
                $('.slat-optional').addClass("active");
                $('.hdr-1').hide();
                $('.hdr-2').hide();
              }

              if (filterid == "3") {
                $('.slat-assessment').addClass("active");
                $('.slat-peer-assessment').addClass("active");
                $('.hdr-3').hide();
              }
              if (filterid == "4") {
                $('.slat-course').addClass("active");
              }
              if (filterid == "5") {
                $('.slat-curriculum').addClass("active");
                $('.hdr-1').hide();
                $('.hdr-3').hide();
              }
              if (filterid == "6") {
                $('.slat-schedule').addClass("active");
                //  $('.virtual-class').addClass("active");
                $('.hdr-2').hide();
                $('.hdr-3').hide();
              }
              if (filterid == "7") {
                $('.slat-virtual-class').addClass("active");
                $('.hdr-1').hide();
                $('.hdr-3').hide();
              }
              if (filterid == "8") {
                $('.slat-profile-activity').addClass("active");
                $('.hdr-1').hide();
                $('.hdr-3').hide();
              }
              //  $('.hdr-1').show();
              // $('.hdr-2').show();
              // $('.hdr-3').show();

              // if($(this).val() == "1") {
              //     $('.hdr-3').hide();
              // }
              // else if($(this).val() == "2") {
              //     $('.hdr-3').hide();
              // }
              // else if($(this).val() == "3") {
              //     $('.hdr-1').hide();
              //     $('.hdr-2').hide();
              // }
              //     else if($(this).val() == "4") {
              //     $('.hdr-1').hide();
              //     $('.hdr-3').hide();
              // }
              // else if($(this).val() == "5") {
              //     $('.hdr-3').hide();
              // }
            });

        });
    </script>

</body>

</html>