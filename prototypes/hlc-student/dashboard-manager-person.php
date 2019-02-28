<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Brad K. Bruno | HealthStream</title>
        <!-- Styles
        ================================================== -->
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

    </head>
    <body class="layout-dashboard-manager">
        <div class="site-header ">
            <div class="container">
                <a href="#" class="trigger-open trigger-open-header"><i class="fa fa-bars"></i><span>Menu</span></a>
                <div class="branding">
                    <a href="/">
                        <img src="./content/images/Providence.jpg" alt="HealthStream" class="logo-large">
                        <img src="./content/images/Providence.jpg" alt="HealthStream" class="logo-small">
                    </a>
                </div>
                <nav class="nav-account">
                    <div class="name">Darcy L. Crane</div>
                    <div class="avatar">
                        <i class="fa fa-user"></i>
                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg" data-pin-nopin="true">
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

                        <li class="active"><a href="/dashboard-manager.php">Dashboard</a></li>
                        <li ><a href="/">To Do</a></li>
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
                        <li class=""><a href="/assessment-overview.php">Raters</a></li>
                        <li class=""><a href="/catalog.php">Catalog</a></li>
                        <li class=""><a href="/event-calendar.php">Event Calendar</a></li>
                        <li class="disabled"><a href="#">Help</a></li>
                        <li class="visible-xs visible-sm"><a href="#">Logout</a></li>
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
        <div class="layout ">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default panel-employee">
                            <div class="panel-body text-center">
                                <div class="pv-lg">
                                    <img src="/content/images/prototype-actors/bbrune.jpg" alt="Contact" class="center-block img-responsive img-circle img-thumbnail thumb96">
                                </div>
                                <h3 class="m0 text-bold">
                                    <span class="employee-name">Brad K. Bruno</span>
                                    <small>
                                        <span class="job-title">Clinical Nurse Supervisor</span>
                                        <span class="department">Radiology</span>
                                    </small>
                                </h3>
                                <div class="mv-lg">
                                    <p>17 Tasks / <span class="text-warning">3 Past Due</span></p>
                                </div>
                                <div class="text-center"><a href="#" class="btn btn-primary">Send message</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default hidden-xs hidden-sm panel-direct-reports">
                            <div class="panel-heading">
                                <div class="panel-title text-center">Direct Reports</div>
                            </div>
                            <div class="panel-body">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="#">
                                            <img src="/content/images/prototype-actors/19.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </a>
                                    </div>
                                    <div class="media-body pt-sm">
                                        <div class="pull-right"> <a href="dashboard-manager-person.php" type="button" class="btn btn-info btn-xs" >View</a>
                                        </div>
                                        <div class="text-bold">Michele Brown<br>
                                            <small class=" text-muted">Nurse Manager - Acute Care</small>
                                        </div>
                                        <p class="text-muted text-sm">3 Tasks </p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="#">
                                            <img src="/content/images/prototype-actors/72.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </a>
                                    </div>
                                    <div class="media-body pt-sm">
                                        <div class="pull-right"> <a href="dashboard-manager-person.php" type="button" class="btn btn-info btn-xs" >View</a>
                                        </div>
                                        <div class="text-bold">Nicholas Frazier<br>
                                            <small class=" text-muted">Quality Coordinator (RN)</small>
                                        </div>
                                        <p class="text-muted text-sm">0 Tasks </p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="#">
                                            <img src="/content/images/prototype-actors/83.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </a>
                                    </div>
                                    <div class="media-body pt-sm">
                                        <div class="pull-right"> <a href="dashboard-manager-person.php" type="button" class="btn btn-info btn-xs">View</a>
                                        </div>
                                        <div class="text-bold">Chris Horton<br>
                                            <small class=" text-muted">Diabetes Educator (RN)</small>
                                        </div>
                                        <p class="text-muted text-sm">1 Tasks / <span class="text-warning">1 Past Due</span> </p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="#">
                                            <img src="/content/images/prototype-actors/76.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </a>
                                    </div>
                                    <div class="media-body pt-sm">
                                        <div class="pull-right"> <a href="dashboard-manager-person.php" type="button" class="btn btn-info btn-xs">View</a>
                                        </div>
                                        <div class="text-bold">Ella Lane<br>
                                            <small class=" text-muted">Case Manager (RN)</small>
                                        </div>
                                        <p class="text-muted text-sm">2 Tasks </p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="#">
                                            <img src="/content/images/prototype-actors/78.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </a>
                                    </div>
                                    <div class="media-body pt-sm">
                                        <div class="pull-right"> <a href="dashboard-manager-person.php" type="button" class="btn btn-info btn-xs">View</a>
                                        </div>
                                        <div class="text-bold">Andrea Martinez<br>
                                            <small class=" text-muted">LPN - I.V. Certified</small>
                                        </div>
                                        <p class="text-muted text-sm">9 Tasks / <span class="text-warning">2 Past Due</span><</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="#">
                                            <img src="/content/images/prototype-actors/8.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </a>
                                    </div>
                                    <div class="media-body pt-sm">
                                        <div class="pull-right"> <a href="dashboard-manager-person.php" type="button" class="btn btn-info btn-xs">View</a>
                                        </div>
                                        <div class="text-bold">Tanya Rivera<br>
                                            <small class=" text-muted">Nurse - Staff (RN) - Acute Care</small>
                                        </div>
                                        <p class="text-muted text-sm">8 Tasks </p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="#">
                                            <img src="/content/images/prototype-actors/98.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </a>
                                    </div>
                                    <div class="media-body pt-sm">
                                        <div class="pull-right"> <a href="dashboard-manager-person.php" type="button" class="btn btn-info btn-xs">View</a>
                                        </div>
                                        <div class="text-bold">Elmer Romero<br>
                                            <small class=" text-muted">Nurse - Staff (RN) - Telephone</small>
                                        </div>
                                        <p class="text-muted text-sm">5 Tasks / <span class="text-warning">1 Past Due</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div id="panelDemo14" class="panel panel-default">
                            <div class="panel-body">
                                <div role="tabpanel">
                                    <!-- Nav tabs-->
                                    <ul role="tablist" class="nav nav-tabs">
                                        <li role="presentation" class="active"><a href="#personal" aria-controls="personal" role="tab" data-toggle="tab">Personal</a>
                                        </li>
                                        <li role="presentation"><a href="#professional" aria-controls="professional" role="tab" data-toggle="tab">Professional</a>
                                        </li>
                                        <li role="presentation"><a href="#todo" aria-controls="todo" role="tab" data-toggle="tab">To Do List</a>
                                        </li>
                                        <li role="presentation"><a href="#completions" aria-controls="completions" role="tab" data-toggle="tab">Completions</a>
                                        </li>
                                        <li role="presentation"><a href="#goals" aria-controls="goals" role="tab" data-toggle="tab">Goals</a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes-->
                                    <div class="tab-content">

                                        <div id="personal" role="tabpanel" class="tab-pane active">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="lead bb">About</p>
                                                    <form class="form-horizontal p-20">
                                                        <div class="form-group">
                                                            <div class="col-sm-4">Hire Date:</div>
                                                            <div class="col-sm-8">
                                                                <strong>Apr. 20, 2017</strong>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-4">Manager</div>
                                                            <div class="col-sm-8">
                                                                <strong><a href="#">Darcy Crane</a></strong>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-4">Department</div>
                                                            <div class="col-sm-8">
                                                                <strong>Radiology</strong>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-4">Job Title</div>
                                                            <div class="col-sm-8">
                                                                <strong>Clinical Nurse Supervisor</strong>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-4">Position Status</div>
                                                            <div class="col-sm-8">
                                                                <div class="label label-info">Active</div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-12">
                                                    <br>
                                                    <p class="lead bb">Location</p>
                                                    <!--  <div class="alert alert-warning">
                                                    <em class="fa fa-exclamation-circle fa-lg fa-fw"></em>Employee's job title has recently changed.</div> -->
                                                    <form class="form-horizontal p-20">
                                                        <div class="form-group">
                                                            <div class="col-sm-4">Address</div>
                                                            <div class="col-sm-8">
                                                                <strong>2717 Valley View Ln.<br>Nashville, TN 37217</strong>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-4">Country</div>
                                                            <div class="col-sm-8">
                                                                <strong>United States</strong>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-4">Email:</div>
                                                            <div class="col-sm-8">
                                                                <strong><a href="mailto:bbruno@jupiterhealth.com">bbruno@jupiterhealth.com</a></strong>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-4">Phone:</div>
                                                            <div class="col-sm-8">
                                                                <strong>(273)-433-8282</strong>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-4">Time Zone:</div>
                                                            <div class="col-sm-8">
                                                                <strong>Central Time</strong>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-4">Preferred Language:</div>
                                                            <div class="col-sm-8">
                                                                <strong>English</strong>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="professional" role="tabpanel" class="tab-pane">
                                            <section class="section">
                                                <p class="lead bb">Licenses</p>
                                                <div class="slat">
                                                    <div class="slat-default">
                                                        <div class="title">AEMT</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-label">State:</span><span class="meta-value">MI</span></li>
                                                            <li><span class="meta-label">Country:</span><span class="meta-value">United States</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h5>State Certification Number</h5>
                                                                <p>1234567890</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>National Expiration Date</h5>
                                                                <p>Feb 7, 2014</p>
                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                    </div>
                                                </div>
                                                <div class="slat">
                                                    <div class="slat-default">
                                                        <div class="title">NCAC ll - National Certified Addiction Counsler, Level ll</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-label">State:</span><span class="meta-value">MI</span></li>
                                                            <li><span class="meta-label">Country:</span><span class="meta-value">United States</span></li>
                                                            <li><span class="meta-label">State License:</span><span class="meta-value">123456789011112</span></li>
                                                            <li><span class="meta-label">Expires:</span><span class="meta-value">Jan. 1, 2015</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h5>Certifying Body</h5>
                                                                <p>National Association of Alcoholism and Drug Abuse Counselors Certification Commission (NAADAC)</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>Updated</h5>
                                                                <p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>System Managed</h5>
                                                                <p>No</p>
                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                    </div>
                                                </div>
                                            </section>
                                            <br>
                                            <section class="section">
                                                <p class="lead bb">Certifications</p>
                                                <div class="slat">
                                                    <div class="slat-default">
                                                        <div class="title">CWCA - Certified Wound Care Associate</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-label">Country:</span><span class="meta-value">United States</span></li>
                                                            <li><span class="meta-label">State:</span><span class="meta-value">TN</span></li>
                                                            <li><span class="meta-label">License:</span><span class="meta-value">123456789011112</span></li>
                                                            <li><span class="meta-label">Expires: </span><span class="meta-value">Jan 1, 2015</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h5>Certifying Body</h5>
                                                                <p>American Board of Wound Management (ABWM)</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>Updated</h5>
                                                                <p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>System Managed</h5>
                                                                <p>No</p>
                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div id="todo" role="tabpanel" class="tab-pane">
                                            <div class="focus-mini">
                                                <ul class="meta">
                                                    <li><span class="meta-label">Total Tasks:</span><span class="meta-value">10</span></li>
                                                    <li><span class="meta-label">Requiring Attention:</span><span class="meta-value">2</span></li>
                                                </ul>
                                            </div>
                                            <div class="filter-mini" data-target="tasks">
                                                <div class="filter-row">
                                                    <div class="filter-cell">
                                                        <div class="filter-toggle">
                                                            <div class="hidden-xs">Show: <i class="fa-fw fa-caret-down fa"></i></div>
                                                            <div class="visible-xs">Show:  All Tasks<span class="badge">10</span><i class="fa-fw fa-caret-down fa"></i></div>
                                                        </div>
                                                    </div>
                                                    <div class="filter-cell">
                                                        <ul>
                                                            <li><label class="checkbox active"><input type="checkbox" value="all" checked=""> All Tasks</label></li>
                                                            <li><label class="checkbox"><input type="checkbox" value="1"> Assignments</label></li>
                                                            <li><label class="checkbox"><input type="checkbox" value="2"> Live Classes</label></li>
                                                            <li><label class="checkbox"><input type="checkbox" value="3"> Electives</label></li>
                                                            <li style="display: none;"><label class="checkbox"><input type="checkbox" value="4"> Profile Tasks</label></li>
                                                            <li><label class="checkbox"><input type="checkbox" value="5"> Assessments</label></li>
                                                            <li style="display: none;"><label class="checkbox"><input type="checkbox" value="6"> Hidden Option with No Matches</label></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <section class="section filter-target" id="tasks">
                                                <div class="slat slat-attention slat-spaced slat-callout-w active" data-filter-category="1">
                                                    <div class="slat-default">
                                                        <div class="title">Understanding Chronic Pain Management</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Course</span></li>
                                                            <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                                                            <li class="meta-hide-xs"><span class="meta-label">Complete:</span><span class="meta-value">2 of 3</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Dec. 31, 2013 at 12am</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="slat slat-attention slat-spaced slat-callout-w active" data-filter-category="2">
                                                    <div class="slat-default">
                                                        <div class="title">Course Name: Class Name</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Live Class</span></li>
                                                            <li><span class="meta-label">Status:</span><span class="meta-value">Not Registered</span></li>
                                                            <li class="meta-hide-xs"><span class="meta-label">Attendance:</span><span class="meta-value">Mandatory</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="slat slat-spaced slat-callout-w active" data-filter-category="2">
                                                    <div class="slat-default">
                                                        <div class="title">Course Name: Class Name</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Live Class</span></li>
                                                            <li><span class="meta-label">Status:</span><span class="meta-value">Registered</span></li>
                                                            <li class="meta-hide-xs"><span class="meta-label">Attendance:</span><span class="meta-value">Mandatory</span></li>
                                                            <li class="meta-hide-xs"><span class="meta-label">Location:</span><span class="meta-value">North Tower: Westmoreland Hall</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Starts: </span><span class="meta-value"><span class="meta-callout-label">Starts:</span>Jul 15, 2014 at 3:30pm</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="slat slat-spaced slat-callout-w active" data-filter-category="2">
                                                    <div class="slat-default">
                                                        <div class="title">Course Name: Live Event Title</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Live Event</span></li>
                                                            <li><span class="meta-label">Status:</span><span class="meta-value">Registered</span></li>
                                                            <li class="meta-hide-xs"><span class="meta-label">Location:</span><span class="meta-value">Cummins Station: 450</span></li>
                                                            <li class="meta-callout">
                                                                <span class="meta-value">
                                                                    <span class="meta-value">
                                                                        <div>Jul 15, 2014 at 3:30pm - </div>
                                                                        <div>Jul 25, 2014 at 3:30pm</div>
                                                                    </span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="slat slat-spaced slat-callout-w active" data-filter-category="2">
                                                    <div class="slat-default">
                                                        <div class="title">Course Name: Live Event Title</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Live Event</span></li>
                                                            <li><span class="meta-label">Status:</span><span class="meta-value">Registered</span></li>
                                                            <li class="meta-hide-xs"><span class="meta-label">Location:</span><span class="meta-value">Cummins Station: 450</span></li>
                                                            <li class="meta-callout">
                                                                <span class="meta-value">
                                                                    <div>Aug 27, 2014</div>
                                                                    <div>5:30am - 6:30am</div>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="slat slat-spaced slat-callout-w active" data-filter-category="1">
                                                    <div class="slat-default">
                                                        <div class="title">Choose a Course</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Equivalent</span></li>
                                                            <li><span class="meta-label">Status:</span><span class="meta-value">Not Enrolled</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Sep 1, 2014</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="slat slat-spaced slat-callout-w active" data-filter-category="1">
                                                    <div class="slat-default">
                                                        <div class="title">Pain Management Curriculum</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Curriculum</span></li>
                                                            <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Sep 1, 2014</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="slat slat-spaced slat-callout-w active" data-filter-category="1">
                                                    <div class="slat-default">
                                                        <div class="title">Fire Safety</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Course</span></li>
                                                            <li><span class="meta-label">Status:</span><span class="meta-value">Assigned</span></li>
                                                            <li class="meta-hide-xs"><span class="meta-label">Complete:</span><span class="meta-value">0 of 3</span></li>
                                                            <li class="meta-hide-xs"><span class="meta-label">Institution:</span><span class="meta-value">General Hospital</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Sep 15, 2014</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="slat slat-spaced slat-callout-w active" data-filter-category="5">
                                                    <div class="slat-default">
                                                        <div class="title">Competency Appraisal - Employee Assesses Self</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Self Assessment</span></li>
                                                            <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Aug 11, 2017</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="slat slat-spaced slat-callout-w active" data-filter-category="3">
                                                    <div class="slat-default">
                                                        <div class="title">This is an example of an elective</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Course</span></li>
                                                            <li><span class="meta-label">Status:</span><span class="meta-value">Not Yet Started</span></li>
                                                            <li class="meta-hide-xs"><span class="meta-label">Enrolled By:</span><span class="meta-value">Self</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value">Elective</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div id="completions" role="tabpanel" class="tab-pane">
                                            <section class="section">
                                                <div class="date-range">
                                                    <div class="form-group">
                                                        <label class="control-label">Date Range:</label>
                                                        <select class="form-control date-range__control">
                                                            <optgroup label="Presets">
                                                                <option>Since January 1</option>
                                                                <option>Last 6 months</option>
                                                                <option selected="">Last 12 months</option>
                                                                <option>Last 24 months</option>
                                                                <option>Previous Calendar Year</option>
                                                                <option>Complete History</option>
                                                            </optgroup>
                                                            <optgroup label="Custom">
                                                                <option value="custom">Custom Range</option>
                                                            </optgroup>
                                                        </select>
                                                        <div class="date-range__custom collapse">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Start:</label>
                                                                        <div class="input-group date" >
                                                                            <input type="text" class="form-control">
                                                                            <span class="input-group-btn">
                                                                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">End:</label>
                                                                        <div class="input-group date">
                                                                            <input type="text" class="form-control">
                                                                            <span class="input-group-btn">
                                                                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="section">
                                                <div class="panel-group panel-group-slats" role="tablist" id="panel-group-1" aria-multiselectable="true">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab">
                                                            <a role="button" data-toggle="collapse" data-parent="#panel-group-1" href="#panel-1" class="collapsed">
                                                                CE Credit Summary
                                                                <div class="panel-heading-icon">
                                                                    <i class="fa fa-chevron-down panel-heading-icon-closed"></i>
                                                                    <i class="fa fa-chevron-up panel-heading-icon-open"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div id="panel-1" class="panel-collapse collapse" role="tabpanel">
                                                            <div class="panel-body">
                                                                <div class="slat slat-simple">
                                                                    <div class="slat-default">
                                                                        <div class="title">AMA PRA Category 1 Credit™</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">Discipline:</span><span class="meta-value">AEMT</span></li>
                                                                            <li><span class="meta-label">Credits:</span><span class="meta-value">5.75</span></li>
                                                                            <li><span class="meta-label">Courses:</span><span class="meta-value">2</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="slat slat-simple">
                                                                    <div class="slat-default">
                                                                        <div class="title">AMA PRA Category 1 Credit™</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">Discipline:</span><span class="meta-value">Emergency Medical Technician - First Responder</span></li>
                                                                            <li><span class="meta-label">Credits:</span><span class="meta-value">4</span></li>
                                                                            <li><span class="meta-label">Courses:</span><span class="meta-value">2</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="section">
                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title">Student-Entered Learning Event</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Learning Event</span></li>
                                                            <li><span class="meta-label">Est. Time:</span><span class="meta-value">1h</span></li>
                                                            <li><span class="meta-label">Entry:</span><span class="meta-value">Student</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">May 19, 2013</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h5>Added</h5>
                                                                <p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>Updated</h5>
                                                                <p>Stephanie Juniper, Feb 7, 2014 11:57am</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>Comments</h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                            </section>
                                                            <section class="section">
                                                                <small class="text-muted">
                                                                    Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
                                                                </small>
                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                    </div>
                                                </div>
                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title">Understanding Chronic Pain Management</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Course</span></li>
                                                            <li><span class="meta-label">Est. Time:</span><span class="meta-value">2h 10m</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">May 21, 2013</span></li>
                                                        </ul>
                                                        <div class="action">
                                                            <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title">Advanta 2 Med Surg Bed</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Course</span></li>
                                                            <li><span class="meta-label">Est. Time:</span><span class="meta-value">15m</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">May 18, 2013</span></li>
                                                        </ul>
                                                        <div class="action">
                                                            <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title">Content with Video</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Course</span></li>
                                                            <li><span class="meta-label">Est. Time:</span><span class="meta-value">2h</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">May 28, 2013</span></li>
                                                        </ul>
                                                        <div class="action">
                                                            <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title">Content with Video</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Course</span></li>
                                                            <li><span class="meta-label">Est. Time:</span><span class="meta-value">2h</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">May 29, 2013</span></li>
                                                        </ul>
                                                        <div class="action">
                                                            <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title">Content with Video</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Course</span></li>
                                                            <li><span class="meta-label">Est. Time:</span><span class="meta-value">2h</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">May 30, 2013</span></li>
                                                        </ul>
                                                        <div class="action">
                                                            <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title">Admin-Entered Learning Event</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Learning Event</span></li>
                                                            <li><span class="meta-label">Est. Time:</span><span class="meta-value">1h</span></li>
                                                            <li><span class="meta-label">Entry:</span><span class="meta-value">Admin</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">July 11, 2013</span></li>
                                                        </ul>
                                                        <div class="action">
                                                            <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="slat-nested">
                                                        <div class="slat">
                                                            <div class="slat-default">
                                                                <div class="title">CE - AHIMA</div>
                                                                <ul class="meta">
                                                                    <li><span class="meta-label">Discipline:</span><span class="meta-value">Pharmacist, Nuclear</span></li>
                                                                    <li><span class="meta-label">Credits:</span><span class="meta-value">4.00 AMA PRA Category 1 Credit™</span></li>
                                                                    <li><span class="meta-label">License:</span><span class="meta-value">123456789011112</span></li>
                                                                    <li><span class="meta-label">State:</span><span class="meta-value">TN</span></li>
                                                                </ul>
                                                                <div class="action">
                                                                    <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h5>Added</h5>
                                                                <p>Admin's Name, Feb 7, 2014 11:54am</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>Updated</h5>
                                                                <p>Admin's Name, Feb 7, 2014 11:54am</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>Comments</h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                            </section>
                                                            <section class="section">
                                                                <small class="text-muted">
                                                                    Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
                                                                </small>
                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                    </div>
                                                </div>
                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title">Admin-Entered Learning Event as a Course</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Course</span></li>
                                                            <li><span class="meta-label">Est. Time:</span><span class="meta-value">1h</span></li>
                                                            <li><span class="meta-label">Entry:</span><span class="meta-value">Admin</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">July 11, 2013</span></li>
                                                        </ul>
                                                        <div class="action">
                                                            <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h5>Added</h5>
                                                                <p>Admin's Name, Feb 7, 2014 11:54am</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>Updated</h5>
                                                                <p>Admin's Name, Feb 7, 2014 11:54am</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>Comments</h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                            </section>
                                                            <section class="section">
                                                                <small class="text-muted">
                                                                    Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
                                                                </small>
                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                    </div>
                                                </div>
                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title">Heart Disease and Treatment Options</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Course</span></li>
                                                            <li><span class="meta-label">Est. Time:</span><span class="meta-value">1h</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">Oct 10, 2013</span></li>
                                                        </ul>
                                                        <div class="action">
                                                            <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title">Lippencott - 18-lead electrocardiogram</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Course</span></li>
                                                            <li><span class="meta-label">Est. Time:</span><span class="meta-value">1h</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">Oct 16, 2013</span></li>
                                                        </ul>
                                                        <div class="action">
                                                            <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title">A Day in the Life of ICD-10</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Course</span></li>
                                                            <li><span class="meta-label">Est. Time:</span><span class="meta-value">1h</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">Oct 19, 2013</span></li>
                                                        </ul>
                                                        <div class="action">
                                                            <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="slat-nested">
                                                        <div class="slat">
                                                            <div class="slat-default">
                                                                <div class="title">CE - AHIMA</div>
                                                                <ul class="meta">
                                                                    <li><span class="meta-label">Discipline:</span><span class="meta-value">Pharmacist, Nuclear</span></li>
                                                                    <li><span class="meta-label">Credits:</span><span class="meta-value">4.00 AMA PRA Category 1 Credit™</span></li>
                                                                    <li><span class="meta-label">License:</span><span class="meta-value">123456789011112</span></li>
                                                                    <li><span class="meta-label">State:</span><span class="meta-value">TN</span></li>
                                                                </ul>
                                                                <div class="action">
                                                                    <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="slat">
                                                            <div class="slat-default">
                                                                <div class="title">CE - AAPC</div>
                                                                <ul class="meta">
                                                                    <li><span class="meta-label">Discipline:</span><span class="meta-value">Emergency Medical Technician - First Responder</span></li>
                                                                    <li><span class="meta-label">Credits:</span><span class="meta-value">2.00 Contact Hours</span></li>
                                                                    <li><span class="meta-label">License:</span><span class="meta-value">123456789011112</span></li>
                                                                    <li><span class="meta-label">State:</span><span class="meta-value">TN</span></li>
                                                                </ul>
                                                                <div class="action">
                                                                    <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title">Performance Appraisal</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Self Assessment</span></li>
                                                            <li><span class="meta-label">Rater:</span><span class="meta-value">Jane Doe</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">Dec 15, 2013</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div id="goals" role="tabpanel" class="tab-pane">
                                           <div id="filter-goals">
                                               <div class="slat slat-callout" data-filter-category="0">
                                                   <div class="slat-default">
                                                       <div class="title">
                                                           <a data-hijax="true" data-target="#manage-goal-modal-container" href="#">Reduce Logging Errors </a>
                                                       </div>
                                                       <ul class="meta">
                                                           <li><span class="meta-type">Individual</span></li>
                                                           <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                                                           <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Aug 18, 2017</span></li>
                                                       </ul>
                                                       <!-- <div class="action"><a class="btn btn-sm btn-default" data-hijax="true" data-target="#manage-goal-modal-container" href="/HSAPP/Goal/GetGoalEditorModalDialog?modalDialogId=goal-modal&amp;goalId=51c167b8-0842-e711-857d-005056b13ce3">Manage <i class="visible-xs fa-fw fa-pencil fa"></i></a> -->
                                                   </div>
                                               </div>
                                               <div class="slat slat-callout" data-filter-category="0">
                                                   <div class="slat-default">
                                                       <div class="title">
                                                           <a data-hijax="true" data-target="#manage-goal-modal-container" href="#">Improve Safety Ratings </a>
                                                       </div>
                                                       <ul class="meta">
                                                           <li><span class="meta-type">Individual</span></li>
                                                           <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                                                           <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Aug 18, 2017</span></li>
                                                       </ul>
                                                       <!-- <div class="action"><a class="btn btn-sm btn-default" data-hijax="true" data-target="#manage-goal-modal-container" href="/HSAPP/Goal/GetGoalEditorModalDialog?modalDialogId=goal-modal&amp;goalId=51c167b8-0842-e711-857d-005056b13ce3">Manage <i class="visible-xs fa-fw fa-pencil fa"></i></a> -->
                                                   </div>
                                               </div>
                                               <div class="slat slat-callout" data-filter-category="0">
                                                   <div class="slat-default">
                                                       <div class="title">
                                                           <a data-hijax="true" data-target="#manage-goal-modal-container" href="#">Improve Patient Satisfaction </a>
                                                       </div>
                                                       <ul class="meta">
                                                           <li><span class="meta-type">Individual</span></li>
                                                           <li><span class="meta-label">Status:</span><span class="meta-value">Not Yet Started</span></li>
                                                           <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Aug 18, 2017</span></li>
                                                       </ul>
                                                       <!-- <div class="action"><a class="btn btn-sm btn-default" data-hijax="true" data-target="#manage-goal-modal-container" href="/HSAPP/Goal/GetGoalEditorModalDialog?modalDialogId=goal-modal&amp;goalId=51c167b8-0842-e711-857d-005056b13ce3">Manage <i class="visible-xs fa-fw fa-pencil fa"></i></a> -->
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
           </div>
       </div>
   </div>
   <!-- /row -->
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
                        To talk with a customer service representative call 1-800-521-0574<br>
                        <button type="button" data-reset-key="jq-portletState" class="btn btn-default btn-sm">Reset Porlets</button>
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
                        <li>
                            Rater-Only Pages
                            <ol style="margin:3px 0 15px">
                                <li><a href="todo-rater.php">To-Do List w/ Assessment Rater Nav &amp; Content</a></li>
                                <li><a href="assessment-overview.php">Assessment Rater Overview</a></li>
                            </ol>
                        </li>
                        <li>
                            Competency Assessment: As Employee
                            <ol style="margin:3px 0 15px">
                                <li><a href="assessment.php?assessment=competency-1&user=employee">Employee, no progress</a></li>
                                <li><a href="assessment.php?assessment=competency-1&user=employee&progress=1">Employee, some progress</a></li>
                                <li><a href="assessment.php?assessment=competency-1&user=employee&progress=2">Employee, no progress</a></li>
                            </ol>
                        </li>
                        <li>
                            Competency Assessment: As Rater
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
                        <li>
                            Competency Assessment: As Peer
                            <ol style="margin:3px 0 15px">
                                <li><a href="assessment.php?assessment=competency-1&user=peer-1">Peer, no progress</a></li>
                                <li><a href="assessment.php?assessment=competency-1&user=peer-1&progress=1">Peer, complete</a></li>
                            </ol>
                        </li>
                        <li>
                            Competency Assessment: As Manager
                            <ol style="margin:3px 0 15px">
                                <li><a href="assessment-signoff-manager-waiting-rater.php">Manager, waiting on rater signoff </a></li>
                                <li><a href="assessment-signoff-manager.php">Manager, signoff</a></li>
                            </ol>
                        </li>
                        <li>
                            Performance Assessment: As Employee
                            <ol style="margin:3px 0 15px">
                                <li><a href="assessment.php?assessment=performance-1&user=employee">Employee, no progress</a></li>
                                <li><a href="assessment.php?assessment=performance-1&user=employee&progress=1">Employee, some progress</a></li>
                                <li><a href="assessment.php?assessment=performance-1&user=employee&progress=2">Employee, no progress</a></li>
                            </ol>
                        </li>
                        <li>
                            Performance Assessment: As Rater
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
                        <li>
                            Performance Assessment: As Peer
                            <ol style="margin:3px 0 15px">
                                <li><a href="assessment.php?assessment=performance-1&user=peer-1">Peer, no progress</a></li>
                                <li><a href="assessment.php?assessment=competency-1&user=peer-1&progress=1">Peer, complete</a></li>
                            </ol>
                        </li>
                        <li>
                            Archived Versions (some my no longer work correctly)
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
                        <li>
                            TalentTracks
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
<script src="/scripts/jquery.storageapi.js"></script>
<script src="/scripts/jquery.ui.sortable.js"></script>
<script src="/scripts/portlet.js"></script>
<script src="/scripts/prototype.dashboard-manager.js"></script>
<script>
    $(function(){

                            // helper to keep the task count correct
                            $('.focus-pageheader .meta-value:eq(0)').text($('#tasks .slat').length);
                            $('.focus-pageheader .meta-value:eq(1)').text($('#tasks .slat-attention').length);
                        });


                    </script>
                    <script></script>
                </body>
                </html>