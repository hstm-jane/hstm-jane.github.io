<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Manager Dashboard | HealthStream</title>
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.bootstrap.css?cache=1500665751">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.plugins.css?cache=1500665751">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.app.css?cache=1500665751">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.prototype.css?cache=1500665751">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
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
    <script src="/scripts/modernizr.js"></script>
    <style>
    .modal-body {
        max-height: 300px;
        -webkit-overflow-scrolling: auto !important;
        overflow-y: auto !important;
    }
    </style>

</head>

<body>
    <div class="site-header">
        <div class="container">
            <a href="#" class="trigger-open trigger-open-header"><i class="fa fa-bars"></i><span>Menu</span></a>
            <div class="branding">
                <a href="/">
                    <!-- <img src="./content/images/Providence.jpg" alt="HealthStream" class="logo-large"> -->
                    <img src="./content/images/logo-healthstream-large.png" alt="HealthStream" class="logo-large" />
                    <!-- <img src="./content/images/Providence.jpg" alt="HealthStream" class="logo-small"> -->
                    <img src="./content/images/logo-healthstream-small.png" alt="HealthStream" class="logo-small" />
                </a>
            </div>
            <nav class="nav-account">
                <div class="name">Darcy L. Crane</div>
                <div class="avatar">
                    <i class="fa fa-user"></i>
                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg" data-pin-nopin="true" alt="avatar">
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
                    <li class="active"><a href="/dashboard-manager-dev-ready.php">Dashboard</a></li>
                    <li><a href="/">To Do</a></li>
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
                    <li class=""><a href="/assessment-overview-action-list-dashboard.php">Raters</a></li>
                    <li class=""><a href="/catalog.php">Catalog</a></li>
                    <li class=""><a href="/event-calendar.php">Event Calendar</a></li>
                    <li class="disabled"><a href="#">Help</a></li>
                    <li class="visible-xs visible-sm"><a href="#">Logout</a></li>
                    <?php
                      include ('includes/applauncher.php');
                    ?>
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
    <div class="layout layout-dashboard-manager layout-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6 ui-sortable" id="portlet-1" data-toggle="portlet">
                    <div id="panelPortlet2" class="panel panel-default panel-my-team">
                        <div class="panel-heading">
                            <div class="panel-title">MyTeam</div>
                            <div class="pull-right">
                                <div class="action action-split">
                                    <div class="btn-group">
                                        <a href="#modal-team" class="btn btn-default btn-xs" data-toggle="modal">
                                           View All
                                           </a>
                                        <a href="#" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#modal-team" data-toggle="modal">
                                                   View All - List
                                                </a>
                                            </li>
                                            <li>

                                                <a href="#modal-chart-quickview" class="view-chart" data-toggle="modal">View All - Chart</a>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="clearfix pr pt-sm"><small class="text-muted pull-right ">Showing 10 of 49 employees</small></div>

                            <a href="dashboard-profile-full.php" class="team-member-link">
                                <div class="media">
                                    <div class="media-left media-middle">
                                      <!--   <div class="team-initial-circle">
                                            BB
                                        </div> -->
                                        <img src="/content/images/prototype-actors/bbrune.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">

                                    </div>
                                    <div class="media-body pt-sm">
                                        <div class="pull-right">
                                        </div>
                                        Bruno, Brad K.
                                        <div class="text-sm text-muted">Clinical Nurse Supervisor</div>
                                    </div>
                                </div>
                            </a>

                            <a href="dashboard-profile-full.php" class="team-member-link">

                                <div class="media">
                                    <div class="media-left media-middle">
                                        <img src="/content/images/prototype-actors/brynn.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                    </div>
                                    <div class="media-body pt-sm">
                                        <!--<div class="pull-right action-btn">

                                          <a href="dashboard-profile-full.php" class="btn btn-default btn-xs">View</a>

                                        </div>-->
                                        Chambers, Marie S.
                                        <div class="text-sm text-muted">Nurse Manager - Acute Care</div>
                                        <!-- <div class="text-sm text-warning">1 Past Due</div> -->
                                    </div>
                                </div>
                            </a>

                            <a href="dashboard-profile-full.php" class="team-member-link">

                                <div class="media">
                                    <div class="media-left media-middle">
                                        <img src="/content/images/prototype-actors/mtnmissy.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                    </div>
                                    <div class="media-body pt-sm">
                                        <!--<div class="pull-right action-btn">

                                        <a href="dashboard-profile-full.php" class="btn btn-default btn-xs">View</a>

                                    </div>-->
                                        Conner, Rosalyn F.
                                        <div class="text-sm text-muted">Quality Coordinator (RN)</div>
                                    </div>
                                </div>
                            </a>

                            <a href="dashboard-profile-full.php" class="team-member-link">

                                <div class="media">
                                    <div class="media-left media-middle">
                                        <img src="/content/images/prototype-actors/himanshuchanda.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                    </div>
                                    <div class="media-body pt-sm">
                                        <!--<div class="pull-right action-btn">

                                                <a href="dashboard-profile-full.php" class="btn btn-default btn-xs">View</a>

                                            </div>-->
                                        Flangan, Simon P.
                                        <div class="text-sm text-muted">Diabetes Educator (RN)</div>
                                    </div>
                                </div>
                            </a>

                            <a href="dashboard-profile-full.php" class="team-member-link">

                                <div class="media">
                                    <div class="media-left media-middle">
                                        <img src="/content/images/prototype-actors/ladylexy.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                    </div>
                                    <div class="media-body pt-sm">
                                        <!--<div class="pull-right action-btn">

                                            <a href="dashboard-profile-full.php" class="btn btn-default btn-xs">View</a>

                                        </div>-->
                                        Franks, Iva R.
                                        <div class="text-sm text-muted">Case Manager (RN)</div>
                                    </div>
                                </div>
                            </a>

                            <a href="dashboard-profile-full.php" class="team-member-link">

                                <div class="media">
                                    <div class="media-left media-middle">
                                        <img src="/content/images/avatar.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                    </div>
                                    <div class="media-body pt-sm">
                                        <!--<div class="pull-right action-btn">

                                                <a href="dashboard-profile-full.php" class="btn btn-default btn-xs">View</a>

                                            </div>-->
                                        Juniper, Stephanie P.
                                        <div class="text-sm text-muted">LPN - I.V. Certified</div>
                                    </div>
                                </div>
                            </a>

                            <a href="dashboard-profile-full.php" class="team-member-link">

                                <div class="media">
                                    <div class="media-left media-middle">
                                        <img src="/content/images/prototype-actors/alewis.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                    </div>
                                    <div class="media-body pt-sm">
                                        <!--<div class="pull-right action-btn">

                                                    <a href="dashboard-profile-full.php" class="btn btn-default btn-xs">View</a>

                                                </div>-->
                                        Lewis, Audrey K.
                                        <div class="text-sm text-muted">Nurse - Staff (RN) - Acute Care</div>
                                    </div>
                                </div>
                            </a>

                            <a href="dashboard-profile-full.php" class="team-member-link">

                                <div class="media">
                                    <div class="media-left media-middle">
                                        <img src="/content/images/prototype-actors/rhein_wein.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                    </div>
                                    <div class="media-body pt-sm">
                                        <!--<div class="pull-right action-btn">

                                                <a href="dashboard-profile-full.php" class="btn btn-default btn-xs">View</a>

                                            </div>-->
                                        Montoya, Alice G.
                                        <div class="text-sm text-muted">LPN - I.V. Certified</div>
                                    </div>
                                </div>
                            </a>

                            <a href="dashboard-profile-full.php" class="team-member-link">

                                <div class="media">
                                    <div class="media-left media-middle">
                                        <img src="/content/images/prototype-actors/kfriedson.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                    </div>
                                    <div class="media-body pt-sm">
                                        <!--<div class="pull-right action-btn">

                                                    <a href="dashboard-profile-full.php" class="btn btn-default btn-xs">View</a>

                                                </div>-->
                                        Park, Jennifer S.
                                        <div class="text-sm text-muted">Nurse - Staff (RN) - Telephones</div>
                                    </div>
                                </div>
                            </a>
                            <!--  <div class="myteam-view-all-btn">
                                    <a href="#modal-team" class="btn btn-default" data-toggle="modal">View All</a>
                                </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="row" style="margin-top:15px;">
                        <div class="col-lg-6 panel-metrics">
                            <!--stroke dashoffset being set to 25 makes it start at the top-->
                            <!--stroke-dashoffset moves counter-clockwise - so 25% in the opposite direction.  from 3 o'clock - back to 12 o'clock-->
                            <!--stroke dash array is the values of the pie pieces.  Must equal 100-->
                            <!--Upcoming Classes-->
                            <div class="metric">
                                <div class="panel panel-default panel-metrics">
                                    <div class="panel-body text-center">
                                        <div class="metric-box-header">
                                            <span class="highlight-text">13</span> Employees with
                                            <br/> <span class="highlight-text">Upcoming Classes</span>
                                        </div>
                                        <div class="metric-box upcoming-classes">
                                            <div class="metric-center-summary primary-only">
                                                <div class="primary-metric">
                                                    <div class="primary-value">
                                                        <div class="metric-value">13</div>
                                                    </div>
                                                    <div class="primary-label">
                                                        <div class="metric-value">Employees</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chart-container">
                                                <canvas id="UpcomingClassesChart" height="175px"></canvas>
                                            </div>
                                        </div>
                                        <div class="metric-box-footer">
                                            within next 4 weeks
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 panel-metrics">
                            <!--Outstanding Assessments-->
                            <div class="metric">
                                <div class="panel panel-default">
                                    <div class="panel-body text-center">
                                        <div class="metric-box-header">
                                            <span class="highlight-text">39</span> Employees with
                                            <br/> <span class="highlight-text">Outstanding Assessments </span>
                                        </div>
                                        <div class="metric-box upcoming-assessments">
                                            <div class="metric-center-summary">
                                                <div class="primary-metric">
                                                    <div class="primary-value">
                                                        <div class="metric-value">12</div>
                                                    </div>
                                                    <div class="primary-label">
                                                        <div class="metric-value">Past Due</div>
                                                    </div>
                                                </div>
                                                <div class="secondary-metric">
                                                    <div class="secondary-value">
                                                        <div class="metric-value">27</div>
                                                    </div>
                                                    <div class="secondary-label">
                                                        <div class="metric-value">Due Soon</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chart-container">
                                                <canvas id="UpcomingAssessmentsChart" height="175px"></canvas>
                                            </div>
                                        </div>
                                        <div class="metric-box-footer">
                                            not started and due within 4 weeks
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:15px;">
                        <div class="col-lg-6 panel-metrics">
                            <!--Outstanding Certifications-->
                            <div class="metric">
                                <div class="panel panel-default">
                                    <div class="panel-body text-center">
                                        <div class="metric-box-header">
                                            <span class="highlight-text">0</span> Employees with
                                            <br/> <span class="highlight-text">Outstanding Certifications</span>
                                        </div>
                                        <div class="metric-box outstanding-certifications">
                                            <div class="metric-center-summary primary-only">
                                                <div class="primary-metric complete">
                                                    <div class="primary-value">
                                                        <div class="metric-value">0</div>
                                                    </div>
                                                    <div class="primary-label">
                                                        <div class="metric-value">Employees</div>
                                                    </div>
                                                </div>
                                                <div class="svg-box">
                                                    <!--    <svg class="circular green-stroke">
                                                             <circle class="path" cx="75" cy="75" r="50" fill="none" stroke-width="5" stroke-miterlimit="10"></circle>
                                                         </svg> -->
                                                    <svg class="checkmark green-stroke">
                                                        <g transform="matrix(0.79961,8.65821e-32,8.39584e-32,0.79961,-489.57,-205.679)">
                                                            <path class="checkmark__check" fill="none" d="M616.306,283.025L634.087,300.805L673.361,261.53"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                -->
                                            </div>
                                            <div class="chart-container">
                                                <canvas id="OutstandingCertificationsChart" height="175px"></canvas>
                                            </div>
                                        </div>
                                        <div class="metric-box-footer">
                                            expiring within 2 months
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 panel-metrics">
                            <!--Outstanding Licenses-->
                            <div class="metric ">
                                <div class="panel panel-default">
                                    <div class="panel-body text-center">
                                        <div class="metric-box-header">
                                            <span class="highlight-text">22</span> Employees with
                                            <br/> <span class="highlight-text">Outstanding Licenses</span>
                                        </div>
                                        <div class="metric-box outstanding-licenses">
                                            <div class="metric-center-summary">
                                                <div class="primary-metric">
                                                    <div class="primary-value">
                                                        <div class="metric-value">4</div>
                                                    </div>
                                                    <div class="primary-label">
                                                        <div class="metric-value">Expired</div>
                                                    </div>
                                                </div>
                                                <div class="secondary-metric">
                                                    <div class="secondary-value">
                                                        <div class="metric-value">18</div>
                                                    </div>
                                                    <div class="secondary-label">
                                                        <div class="metric-value">Expiring Soon</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chart-container">
                                                <canvas id="UpcomingLicensesChart" height="175px"></canvas>
                                            </div>
                                        </div>
                                        <div class="metric-box-footer">
                                            expiring within 2 months
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--metric-->
                        </div>
                        <!--col-->
                    </div>
                    <!-- row-->
                </div>
                <div class="col-lg-3 button-container">
                    <div class="panel panel-default panel-buttons">
                        <div class="panel-heading">Dashboards</div>
                        <div class="panel-body text-center">
                            <div class="row">
                                <div class="col-lg-12 " style="margin-bottom:10px;">
                                    <a href="#" class="assignment-dashboard-button" style="width:100%;">
                                        <div class="assignment-dashboard-button-icon">
                                            <img src="content/images/ad-icon.png" />
                                        </div>
                                        <div class="assignment-dashboard-button-text h3">
                                            Assignment Dashboard
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <a href="assessment-overview-action-list-dashboard.php" class="rater-dashboard-button" style="width:100%;">
                                        <div class="rater-dashboard-button-text h3">
                                            Rater Dashboard
                                        </div>
                                        <div class="rater-dashboard-button-value h1" style="color:#23b7e5;font-weight:500;">
                                            19
                                            <div class="rater-dashboard-button-meta" style="color:#23b7e5;font-weight:500;">tasks</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- END panel-footer-->
    </div>
    </div>
    </div>
    <!--/portlets-wrapper-->
    <!-- </div> -->
    <!--/row-->
    <!-- /container -->
    <!-- </div> -->
    <!-- /layout -->
    <div class="site-footer">
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
                            <h4>Support</h4> To talk with a customer service representative call 1-800-521-0574
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
        </div>
    </div>
    <?php
   include ('includes/modals/_modal-dashboard-team.php');
   ?>
        <?php
   include ('includes/modals/_modal-dashboard-chart-quickview.php');
   ?>
            <?php
   include ('includes/modals/_modal-dashboard-upcoming-classes.php');
   ?>
                <!-- PROTOTYPE ONLY -->
                <div id="modal-test" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                <h4 class="modal-title">Manage Widgets</h4>
                            </div>
                            <div class="modal-body">
                                <div style="font-size:16px; font-weight:600;">HealthStream Widgets</div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <table class="wd-wide">
                                            <tbody>
                                                <tr>
                                                    <td class="wd-xs">
                                                        <div class="ph">
                                                            <img src="/content/images/dummy.png" alt="" class="media-box-object img-responsive img-rounded thumb64">
                                                        </div>
                                                    </td>
                                                    <td class="wd-md">
                                                        <div class="ph">
                                                            <h4 class="media-box-heading">Tasks by Status</h4>
                                                            <!-- <small class="text-muted">Vestibulum ante ipsum primis in faucibus orci</small> -->
                                                        </div>
                                                    </td>
                                                    <td class="wd-sm hidden-xs hidden-sm">
                                                        <div class="ph">
                                                            <p class="m0">Created by:</p>
                                                            <small class="text-muted">HealthStream</small>
                                                        </div>
                                                    </td>
                                                    <td class="wd-xs">
                                                        <div class="ph pull-right">
                                                            <!-- <a href="#" class="btn btn-default btn-sm">Add</a> -->
                                                            <i>Required</i>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <table class="wd-wide">
                                            <tbody>
                                                <tr>
                                                    <td class="wd-xs">
                                                        <div class="ph">
                                                            <img src="/content/images/dummy.png" alt="" class="media-box-object img-responsive img-rounded thumb64">
                                                        </div>
                                                    </td>
                                                    <td class="wd-md">
                                                        <div class="ph">
                                                            <h4 class="media-box-heading">Tasks by Type</h4>
                                                            <!-- <small class="text-muted">Vestibulum ante ipsum primis in faucibus orci</small> -->
                                                        </div>
                                                    </td>
                                                    <td class="wd-sm hidden-xs hidden-sm">
                                                        <div class="ph">
                                                            <p class="m0">Created by:</p>
                                                            <small class="text-muted">HealthStream</small>
                                                        </div>
                                                    </td>
                                                    <td class="wd-xs">
                                                        <div class="ph pull-right">
                                                            <a href="#" class="btn btn-default btn-sm">Remove</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <table class="wd-wide">
                                            <tbody>
                                                <tr>
                                                    <td class="wd-xs">
                                                        <div class="ph">
                                                            <img src="/content/images/dummy.png" alt="" class="media-box-object img-responsive img-rounded thumb64">
                                                        </div>
                                                    </td>
                                                    <td class="wd-md">
                                                        <div class="ph">
                                                            <h4 class="media-box-heading">Upcoming In-person Events</h4>
                                                            <!-- <small class="text-muted">Vestibulum ante ipsum primis in faucibus orci</small> -->
                                                        </div>
                                                    </td>
                                                    <td class="wd-sm hidden-xs hidden-sm">
                                                        <div class="ph">
                                                            <p class="m0">Created by:</p>
                                                            <small class="text-muted">HealthStream</small>
                                                        </div>
                                                    </td>
                                                    <td class="wd-xs">
                                                        <div class="ph pull-right">
                                                            <a href="#" class="btn btn-default btn-sm">Remove</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <table class="wd-wide">
                                            <tbody>
                                                <tr>
                                                    <td class="wd-xs">
                                                        <div class="ph">
                                                            <img src="/content/images/dummy.png" alt="" class="media-box-object img-responsive img-rounded thumb64">
                                                        </div>
                                                    </td>
                                                    <td class="wd-md">
                                                        <div class="ph">
                                                            <h4 class="media-box-heading">PX Survey Detail</h4>
                                                        </div>
                                                    </td>
                                                    <td class="wd-sm hidden-xs hidden-sm">
                                                        <div class="ph">
                                                            <p class="m0">Created by:</p>
                                                            <small class="text-muted">HealthStream</small>
                                                        </div>
                                                    </td>
                                                    <td class="wd-xs">
                                                        <div class="ph pull-right">
                                                            <a href="#" class="btn btn-default btn-sm">Add</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </div>
                                <div style="font-size:16px; font-weight:600;">Partner Widgets</div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <table class="wd-wide">
                                            <tbody>
                                                <tr>
                                                    <td class="wd-xs">
                                                        <div class="ph">
                                                            <img src="/content/images/dummy.png" alt="" class="media-box-object img-responsive img-rounded thumb64">
                                                        </div>
                                                    </td>
                                                    <td class="wd-md">
                                                        <div class="ph">
                                                            <h4 class="media-box-heading">Echo Task Detail</h4>
                                                            <!-- <small class="text-muted">Vestibulum ante ipsum primis in faucibus orci</small> -->
                                                        </div>
                                                    </td>
                                                    <td class="wd-sm hidden-xs hidden-sm">
                                                        <div class="ph">
                                                            <p class="m0">Created by:</p>
                                                            <small class="text-muted">Echo Inc.</small>
                                                        </div>
                                                    </td>
                                                    <td class="wd-xs">
                                                        <div class="ph pull-right">
                                                            <!-- <a href="#" class="btn btn-default btn-sm">Add</a> -->
                                                            <a href="#" class="btn btn-default btn-sm">Add</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <table class="wd-wide">
                                            <tbody>
                                                <tr>
                                                    <td class="wd-xs">
                                                        <div class="ph">
                                                            <img src="/content/images/dummy.png" alt="" class="media-box-object img-responsive img-rounded thumb64">
                                                        </div>
                                                    </td>
                                                    <td class="wd-md">
                                                        <div class="ph">
                                                            <h4 class="media-box-heading">COI Smart Survey Detail</h4>
                                                            <!-- <small class="text-muted">Vestibulum ante ipsum primis in faucibus orci</small> -->
                                                        </div>
                                                    </td>
                                                    <td class="wd-sm hidden-xs hidden-sm">
                                                        <div class="ph">
                                                            <p class="m0">Created by:</p>
                                                            <small class="text-muted">COI Smart Inc.</small>
                                                        </div>
                                                    </td>
                                                    <td class="wd-xs">
                                                        <div class="ph pull-right">
                                                            <!-- <a href="#" class="btn btn-default btn-sm">Add</a> -->
                                                            <a href="#" class="btn btn-default btn-sm">Add</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
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
                <script src="/scripts/portlet.js"></script>
                <script src="/scripts/dataTables.js"></script>
                <script src="http://hstm-platform.patternmanager.com/scripts/dataTables.rowReorder.min.js"></script>
                <script src="/scripts/prototype.datatables.js"></script>
                <script src="/scripts/hovercard.js"></script>
                <script src="/scripts/charts2.js"></script>

                <script src="/scripts/prototype.dashboard-manager-quickview.js"></script>


</body>

</html>