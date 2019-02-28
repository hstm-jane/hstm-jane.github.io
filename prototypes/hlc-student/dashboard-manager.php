<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Manager Dashboard | HealthStream</title>
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
<body>
    <div class="site-header ">
        <div class="container">
            <a href="#" class="trigger-open trigger-open-header"><i class="fa fa-bars"></i><span>Menu</span></a>
            <div class="branding">
                <a href="/">
                    <!-- <img src="./content/images/Providence.jpg" alt="HealthStream" class="logo-large"> -->
                    <img src="./content/images/logo-healthstream-large.png" alt="HealthStream" class="logo-large">
                    <!-- <img src="./content/images/Providence.jpg" alt="HealthStream" class="logo-small"> -->
                    <img src="./content/images/logo-healthstream-small.png" alt="HealthStream" class="logo-small">
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
                    <li class=""><a href="/assessment-overview.php#summary">Raters</a></li>
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
                        <ul class="app-drawer-content" style="display:none;border:1px #ccc solid;">
                            <li>
                                <div style="width:100%; display:table; position:relative; width:100%; padding:0; margin:0;border-bottom:2px solid #ccc;background-color:#f5f5f5;">
                                    <div  style="margin:10px; padding:5px 5px; display:block;">
                                        <div class="app-drawer-nav-item-logo"  style="width:50px; display:table-cell; padding-right:10px; vertical-align: top;">
                                            <div class="svg-icon-wrap" style="overflow: hidden;height: 50px;width: 50px;border-radius: 4px;box-shadow: 0 0 4px rgba(0,0,0,.15);border: 1px solid #eee;">
                                             <img src="content/images/hstream-cloud-logo-50x50.png" style="width:50px;">
                                         </div>
                                     </div>
                                     <div class="app-drawer-nav-item-content"  style="width:100%; display:table-cell;text-align:left;text-align:right;">
                                        <h5 class="title" style="margin:0;"><b style="font-weight:600">hStream Cloud</b></h5>
                                        <p class="description"  style="margin:0;color:#555;text-align:right;">darcy.crane@gmail.com </p>
                                        <div class="description"  style="margin:0;width:100%;text-align: right;font-size:12px;">
                                            <a style="font-size:12px;" href="http://hstm-sail-hstream.patternmanager.com/marketplace.php#" target="_blank">Manage Apps</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-drawer-content-panel">
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
                                            <a target="_blank" href="http://hstm-hlc-student.patternmanager.com/hstream.activity.php">
                                                <div class="app-drawer-nav-item-logo">
                                                    <div class="svg-icon-wrap">
                                                        <img src="content/images/hstream-activity-logo-50x50.png" style="width:50px;">
                                                    </div>
                                                </div>
                                                <div class="app-drawer-nav-item-content">
                                                    <h5 class="title">hStream Activity</h5>
                                                    <p class="description">View license consumption and utilization.</p>
                                                </div>

                                            </a>
                                        </li>


                                        <li class="app-drawer-nav-item">
                                            <a target="_blank" href="http://www.healthstream.com/collaboratives/providence-collaborative---demo/overview">
                                                <div class="app-drawer-nav-item-logo">
                                                    <div class="svg-icon-wrap">
                                                        <img src="content/images/hstream-collaborate-logo-50x50.png" style="width:50px;">
                                                    </div>
                                                </div>
                                                <div class="app-drawer-nav-item-content">
                                                    <h5 class="title">hStream Collaborate</h5>
                                                    <p class="description">Streamline product evaluations and leverage purchasing power.</p>
                                                </div>

                                            </a>
                                        </li>


                                    </ul>
                                </div>
                            </li>
                        </ul>
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
        <div class="layout layout-dashboard-manager">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" >
                        <div style="position:absolute;right:-30px;">
                            <a class="btn btn-default" href="#modal-test" data-toggle="modal"><i class="fa fa-cog"></i></a>
                        </div>

                    </div>
                    <!-- /column -->
                </div>
                <!-- /row -->
                <style>

                </style>
                <div class="row">
                    <div class="portlets-wrapper">
                        <div class="col-lg-3 ui-sortable" id="portlet-1" data-toggle="portlet">

                            <div id="panelPortlet2" class="panel panel-default"  style="padding-bottom:10px;">
                               <div class="panel-heading">
                                <div class="panel-title">MyTeam</div><a href="dashboard-manager-team-chart.1.php" class="btn btn-success btn-xs" style="float:right; margin-top:-20px;" >View chart</a>
                            </div>
                            <div class="panel-body">
                                <div class="media">
                                 <div class="media-left media-middle ">

                                  <a href="#">
                                 <div class="team-initial-circle">
                                    BB
                                  </div>
                                   <!-- <img src="/content/images/prototype-actors/bbrune.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48"> -->
                               </a>
                           </div>
                           <div class="media-body pt-sm ">
                              <div class="pull-right " >
                               <a href="dashboard-profile.php" type="button" class="btn btn-info btn-xs">View</a>
                           </div>
                           <div class="">Bruno, Brad K.
                               <div class="text-sm text-muted">Clinical Nurse Supervisor</div>
                           </div>
                       </div>
                   </div>
                   <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                            <img src="/content/images/prototype-actors/brynn.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                        </a>
                    </div>
                    <div class="media-body pt-sm ">
                        <div class="pull-right action-btn" >
                            <a href="dashboard-profile.php" type="button" class="btn btn-info btn-xs">View</a>
                        </div>
                        <div class="">Chambers, Marie S.
                            <div class="text-sm text-muted">Nurse Manager - Acute Care</div>
                            <!-- <div class="text-sm text-warning">1 Past Due</div> -->
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                            <img src="/content/images/prototype-actors/mtnmissy.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                        </a>
                    </div>
                    <div class="media-body pt-sm ">
                        <div class="pull-right action-btn" >
                            <a href="dashboard-profile.php" type="button" class="btn btn-info btn-xs">View</a>
                        </div>
                        <div class="">Conner, Rosalyn F.
                            <div class="text-sm text-muted">Quality Coordinator (RN)</div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                            <img src="/content/images/prototype-actors/himanshuchanda.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                        </a>
                    </div>
                    <div class="media-body pt-sm ">
                        <div class="pull-right action-btn" >
                            <a href="dashboard-profile.php" type="button" class="btn btn-info btn-xs">View</a>
                        </div>
                        <div class="">Flangan, Simon P.
                            <div class="text-sm text-muted">Diabetes Educator (RN)</div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                            <img src="/content/images/prototype-actors/ladylexy.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                        </a>
                    </div>
                    <div class="media-body pt-sm ">
                        <div class="pull-right action-btn">
                            <a href="dashboard-profile.php" type="button" class="btn btn-info btn-xs">View</a>
                        </div>
                        <div class="">Franks, Iva R.
                            <div class="text-sm text-muted">Case Manager (RN)</div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                            <img src="/content/images/avatar.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                        </a>
                    </div>
                    <div class="media-body pt-sm ">
                        <div class="pull-right action-btn" >
                            <a href="dashboard-profile.php" type="button" class="btn btn-info btn-xs">View</a>
                        </div>
                        <div class="">Juniper, Stephanie P.
                            <div class="text-sm text-muted">LPN - I.V. Certified</div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                            <img src="/content/images/prototype-actors/alewis.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                        </a>
                    </div>
                    <div class="media-body pt-sm ">
                        <div class="pull-right action-btn" >
                            <a href="dashboard-profile.php" type="button" class="btn btn-info btn-xs">View</a>
                        </div>
                        <div class="">Lewis, Audrey K.
                            <div class="text-sm text-muted">Nurse - Staff (RN) - Acute Care</div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                            <img src="/content/images/prototype-actors/rhein_wein.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                        </a>
                    </div>
                    <div class="media-body pt-sm ">
                        <div class="pull-right action-btn" >
                            <a href="dashboard-profile.php" type="button" class="btn btn-info btn-xs">View</a>
                        </div>
                        <div class="">Montoya, Alice G.
                            <div class="text-sm text-muted">LPN - I.V. Certified</div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                            <img src="/content/images/prototype-actors/kfriedson.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                        </a>
                    </div>
                    <div class="media-body pt-sm ">
                        <div class="pull-right action-btn" >
                            <a href="dashboard-profile.php" type="button" class="btn btn-info btn-xs">View</a>
                        </div>
                        <div class="">Park, Jennifer S.
                            <div class="text-sm text-muted">Nurse - Staff (RN) - Telephones</div>
                        </div>
                    </div>
                </div>
                <div class="myteam-view-all-btn">
                    <a href="#" class="btn btn-default">View All</a>
                </div>
            </div>

        </div>



    </div>
    <div class="col-lg-5 ui-sortable" id="portlet-2" data-toggle="portlet"">
        <div id="panelPortlet3" class="panel ">
            <div class="panel-title"></div>
            <ul class="list-group">
                <li class="list-group-item" >
                    <div class="row row-table pv-sm">
                        <div class="col-xs-6">
                            <p class="m0 lead">204</p>
                            <p class="m0">
                                <small style="font-style:normal; font-size:85%;color:#656565;">Completed tasks this month</small>
                            </p>
                        </div>
                        <div class="col-xs-6" >
                            <div data-sparkline="" data-bar-color="#23b7e5" data-height="60" data-bar-width="10" data-bar-spacing="6" data-chart-range-min="0" values="3,6,7,8,4,5"><canvas width="90" height="60" style="display: inline-block; width: 90px; height: 60px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item" >
                    <div class="row row-table pv-sm">
                        <div class="col-xs-6">
                            <p class="m0 lead">1204</p>
                            <p class="m0">
                                <small style="font-style:normal; font-size:85%;color:#656565;">Hours completing tasks this month</small>
                            </p>
                        </div>
                        <div class="col-xs-6" >
                            <div data-sparkline="" data-type="line" data-height="60" data-width="80%" data-line-width="2" data-line-color="#7266ba" data-chart-range-min="0" data-spot-color="#888" data-min-spot-color="#7266ba" data-max-spot-color="#7266ba"
                            data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" values="7,3,4,7,5,9,4,4,7,5,9,6,4" data-resize="true"></div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item" >
                    <div class="row row-table pv-sm">
                        <div class="col-xs-6">
                            <p class="m0 lead">5</p>
                            <p class="m0">
                                <small style="font-style:normal; font-size:85%;color:#656565;">Top performers this month</small>
                            </p>
                        </div>
                        <div class="col-xs-6" >
                            <ul class="list-inline text-center">
                                <li>
                                    <a href="#" tooltip="Katie">
                                        <img src="/content/images/prototype-actors/himanshuchanda.jpg" alt="Follower" class="img-responsive img-circle thumb24">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" tooltip="Cody">
                                        <img src="/content/images/prototype-actors/8.jpg" alt="Follower" class="img-responsive img-circle thumb24">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" tooltip="Tamara">
                                        <img src="/content/images/prototype-actors/98.jpg" alt="Follower" class="img-responsive img-circle thumb24">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" tooltip="Gene">
                                        <img src="/content/images/prototype-actors/72.jpg" alt="Follower" class="img-responsive img-circle thumb24">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" tooltip="Marsha">
                                        <img src="/content/images/prototype-actors/19.jpg" alt="Follower" class="img-responsive img-circle thumb24">
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <div id="panelPortlet5" class="panel panel-default ">
            <div class="panel-heading portlet-handler">
                <div class="panel-title">Retention</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <!-- START widget-->
                        <div class="panel widget bg-primary" style="height:75px;padding-bottom:85px;"">
                            <div class="row row-table">
                              <div class="col-xs-12 pv-lg text-center">
                                  <div class="text-uppercase">Metric A</div>
                                  <div class="h2 mt0 text-white">88%</div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                   <!-- START widget-->
                   <div class="panel widget bg-purple" style="height:75px;padding-bottom:85px;" >
                    <div class="row row-table">
                      <div class="col-xs-12 pv-lg text-center" >
                          <div class="text-uppercase" style="margin-bottom:5px;">Metric B</div>
                          <div class="h2 mt0 text-white" >19%</div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-sm-6">
           <!-- START widget-->
           <div class="panel widget bg-green" style="height:75px;padding-bottom:85px;"">
            <div class="row row-table">
              <div class="col-xs-12 pv-lg text-center">
                  <!-- -->
                  <div class="text-uppercase">Metric C</div>
                  <div class="h2 mt0 text-white">23%</div>
              </div>
          </div>
      </div>
  </div>

</div>
</div>
</div>
<div id="panelPortlet9" class="panel panel-default">
    <div class="panel-heading portlet-handler">
        <div class="panel-title">Key Risk Factors</div>
    </div>
    <div class="panel-body">


        <div>
            <canvas id="chartjs-piechart" width="808" height="404" style="width: 808px; height: 404px;"></canvas>
        </div>

        <!-- END panel-footer-->
    </div>
</div>
<div id="panelPortlet12" class="panel panel-default">
    <div class="panel-heading portlet-handler">
        <div class="panel-title">hStream Educate</div>
    </div>
    <div class="panel-body">
      <div class="row">
          <div class="col-lg-4 col-sm-6">
              <a href="http://hstm-hlc-student.patternmanager.com/hstream.activity.php" target="_blank">
                  <!-- START widget-->
                  <div class="panel widget" style="height:75px;padding-bottom:85px;"">
                      <div class="row row-table">
                        <div class="col-xs-12 pv-lg text-center">
                          <img src="/content/images/hstream-activity-logo-100.png"/>
                      </div>
                  </div>
              </div>
          </a>
      </div>
      <div class="col-lg-4 col-sm-6">
          <a href="http://www.healthstream.com/collaboratives/providence-collaborative---demo/overview" target="_blank">
             <!-- START widget-->
             <div class="panel widget" style="height:75px;padding-bottom:85px;" >
              <div class="row row-table">
                <div class="col-xs-12 pv-lg text-center" >
                  <img src="/content/images/hstream-collaborate-logo-100.png"/>
              </div>
          </div>
      </div>
  </a>
</div>


</div>

<!-- END panel-footer-->
</div>
</div>
</div>
<div class="col-lg-4 ui-sortable" id="portlet-3" data-toggle="portlet"">
    <div id="panelPortlet5" class="panel panel-default ">
        <div class="panel-heading portlet-handler">

            <div class="panel-title">Performance </div>
        </div>
        <div class="panel-body">
            <div>
                <canvas id="chartjs-barchart" ></canvas>
            </div>
        </div>
    </div>
    <div id="panelPortlet9" class="panel panel-default">
        <div class="panel-heading portlet-handler">
            <div class="pull-right label label-warning">2</div>
            <div class="pull-right label label-success">7</div>
            <div class="panel-title">Qualifications</div>
        </div>
        <div class="panel-body">
            <div class="clearfix">
                <h3 class="pull-left text-muted mt0">300</h3>
                <em class="pull-right text-muted fa fa-coffee fa-2x"></em>
            </div>
            <div data-sparkline="" data-type="line" data-height="80" data-width="100%" data-line-width="2" data-line-color="#7266ba" data-spot-color="#888" data-min-spot-color="#7266ba" data-max-spot-color="#7266ba" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" data-values="1,3,4,7,5,9,4,4,7,5,9,6,4" data-resize="true" class="pv-lg"><canvas width="359" height="80" style="display: inline-block; width: 359px; height: 80px; vertical-align: top;"></canvas></div>
            <p>
                <small class="text-muted">Actual progress</small>
            </p>
            <div class="progress progress-xs">
                <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%" class="progress-bar progress-bar-info progress-bar-striped">
                    <span class="sr-only">80% Complete</span>
                </div>
            </div>
        </div>
    </div>
    <div id="panelPortlet6" class="panel panel-default">
        <div class="panel-heading portlet-handler">
            <div class="panel-title">Latest Team Activities</div>
        </div>
        <!-- START list group-->
        <div class="list-group">
            <!-- START list group item-->
            <div class="list-group-item">
                <div class="media-box">
                    <div class="pull-left">
                        <span class="fa-stack">
                            <em class="fa fa-circle fa-stack-2x text-purple"></em>
                            <em class="fa fa-cloud-upload fa-stack-1x fa-inverse text-white"></em>
                        </span>
                    </div>
                    <div class="media-box-body clearfix">
                        <small class="text-muted pull-right ml">15m ago</small>
                        <div class="media-box-heading"><a href="#" class="text-purple m0">REGISTERED FOR COURSE</a>
                        </div>
                        <p class="m0">
                            <small><a href="#">Heart Issues in Pediatrics</a>
                            </small>
                        </p>
                    </div>
                </div>
            </div>
            <!-- END list group item-->
            <!-- START list group item-->
            <div class="list-group-item">
                <div class="media-box">
                    <div class="pull-left">
                        <span class="fa-stack">
                            <em class="fa fa-circle fa-stack-2x text-info"></em>
                            <em class="fa fa-file-text-o fa-stack-1x fa-inverse text-white"></em>
                        </span>
                    </div>
                    <div class="media-box-body clearfix">
                        <small class="text-muted pull-right ml">2h ago</small>
                        <div class="media-box-heading"><a href="#" class="text-info m0">COMPLETED PEER ASSESSMENT</a>
                        </div>
                        <p class="m0">
                            <small><a href="#">Brad Bruno</a>
                            </small>
                        </p>
                    </div>
                </div>
            </div>
            <!-- END list group item-->

            <!-- START list group item-->
            <div class="list-group-item">
                <div class="media-box">
                    <div class="pull-left">
                        <span class="fa-stack">
                            <em class="fa fa-circle fa-stack-2x text-success"></em>
                            <em class="fa fa-clock-o fa-stack-1x fa-inverse text-white"></em>
                        </span>
                    </div>
                    <div class="media-box-body clearfix">
                        <small class="text-muted pull-right ml">2d ago</small>
                        <div class="media-box-heading"><a href="#" class="text-success m0">ATTENDED LIVE CLASS</a>
                        </div>
                        <p class="m0">
                            Professional Development
                            <small>On
                                <em>10/12/2015 09:00 am</em>
                            </small>
                        </p>
                    </div>
                </div>
            </div>
            <!-- END list group item-->
            <!-- START list group item-->
            <div class="list-group-item">
                <div class="media-box">
                    <div class="pull-left">
                        <span class="fa-stack">
                            <em class="fa fa-circle fa-stack-2x text-warning"></em>
                            <em class="fa fa-tasks fa-stack-1x fa-inverse text-white"></em>
                        </span>
                    </div>
                    <div class="media-box-body clearfix">
                        <small class="text-muted pull-right ml">1w ago</small>
                        <div class="media-box-heading"><a href="#" class="text-warning m0">GOALS COMPLETION</a>
                        </div>
                        <div class="progress progress-xs m0">
                            <div role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%" class="progress-bar progress-bar-warning progress-bar-striped">
                                <span class="sr-only">22% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END list group item-->
        </div>
        <!-- END list group-->
        <!-- START panel footer-->
        <div class="panel-footer clearfix">
            <a href="#" class="pull-left">
                <small>Load more</small>
            </a>
        </div>
        <!-- END panel-footer -->
    </div>
</div>
</div><!--/portlets-wrapper-->
</div><!--/row-->




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

                                    <td class="wd-md">
                                        <div class="ph">
                                            <h4 class="media-box-heading">My Employees</h4>
                                            <!-- <small class="text-muted">Vestibulum ante ipsum primis in faucibus orci</small> -->
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

                                    <td class="wd-md">
                                        <div class="ph">
                                            <h4 class="media-box-heading">Outstanding Licenses</h4>
                                            <!-- <small class="text-muted">Vestibulum ante ipsum primis in faucibus orci</small> -->
                                        </div>
                                    </td>


                                    <td class="wd-xs">
                                        <div class="ph pull-right">
                                            <a href="#" class="btn btn-default btn-sm">Show</a>
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

                                    <td class="wd-md">
                                        <div class="ph">
                                            <h4 class="media-box-heading">Outstanding Certifications</h4>
                                            <!-- <small class="text-muted">Vestibulum ante ipsum primis in faucibus orci</small> -->
                                        </div>
                                    </td>


                                    <td class="wd-xs">
                                        <div class="ph pull-right">
                                            <a href="#" class="btn btn-default btn-sm">Hide</a>
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

                                    <td class="wd-md">
                                        <div class="ph">
                                            <h4 class="media-box-heading">Outstanding Learning</h4>
                                            <!-- <small class="text-muted">Vestibulum ante ipsum primis in faucibus orci</small> -->
                                        </div>
                                    </td>


                                    <td class="wd-xs">
                                        <div class="ph pull-right">
                                            <a href="#" class="btn btn-default btn-sm">Show</a>
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

                                    <td class="wd-md">
                                        <div class="ph">
                                            <h4 class="media-box-heading">Outstanding Assessments</h4>
                                            <!-- <small class="text-muted">Vestibulum ante ipsum primis in faucibus orci</small> -->
                                        </div>
                                    </td>


                                    <td class="wd-xs">
                                        <div class="ph pull-right">
                                            <a href="#" class="btn btn-default btn-sm">Show</a>
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

                                    <td class="wd-md">
                                        <div class="ph">
                                            <h4 class="media-box-heading">Assessment Tasks</h4>
                                            <!-- <small class="text-muted">Vestibulum ante ipsum primis in faucibus orci</small> -->
                                        </div>
                                    </td>


                                    <td class="wd-xs">
                                        <div class="ph pull-right">
                                            <a href="#" class="btn btn-default btn-sm">Show</a>
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
<script src="/scripts/jquery.storageapi.js"></script>
<script src="/scripts/jquery.ui.sortable.js"></script>
<script src="/scripts/portlet.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
<!-- <script src="/scripts/prototype.dashboard-manager.js"></script> -->


<script>
    $(function(){

        $('.expand-panel-warning').click(function() {
            $('.action-results-row-warning').slideDown("slow");
            $('.expand-panel-warning').hide();
        });
        $('.action-results-row-warning .collapse-panel').click(function(){
            $('.action-results-row-warning').slideUp("slow");
            $('.expand-panel-warning').show();
        });


    });
    $(function(){
        HealthStream.utilities.applauncher();

        $('[data-sparkline]').each(initSparkLine);

        function initSparkLine() {
            var $element = $(this),
            options = $element.data(),
            values  = options.values && options.values.split(',');

options.type = options.type || 'bar'; // default chart is bar
options.disableHiddenCheck = true;

$element.sparkline(values, options);

if(options.resize) {
    $(window).resize(function(){
        $element.sparkline(values, options);
    });
}
}
if ( typeof Chart === 'undefined' ) return;

// random values for demo
var rFactor = function(){ return Math.round(Math.random()*100); };


// Line chart
// -----------------------------------

var lineData = {
    labels : ['January','February','March','April','May','June','July'],
    datasets : [
    {
        label: 'My First dataset',
        fillColor : 'rgba(114,102,186,0.2)',
        strokeColor : 'rgba(114,102,186,1)',
        pointColor : 'rgba(114,102,186,1)',
        pointStrokeColor : '#fff',
        pointHighlightFill : '#fff',
        pointHighlightStroke : 'rgba(114,102,186,1)',
        data : [rFactor(),rFactor(),rFactor(),rFactor(),rFactor(),rFactor(),rFactor()]
    },
    {
        label: 'My Second dataset',
        fillColor : 'rgba(35,183,229,0.2)',
        strokeColor : 'rgba(35,183,229,1)',
        pointColor : 'rgba(35,183,229,1)',
        pointStrokeColor : '#fff',
        pointHighlightFill : '#fff',
        pointHighlightStroke : 'rgba(35,183,229,1)',
        data : [rFactor(),rFactor(),rFactor(),rFactor(),rFactor(),rFactor(),rFactor()]
    }
    ]
};


var lineOptions = {
    scaleShowGridLines : true,
    scaleGridLineColor : 'rgba(0,0,0,.05)',
    scaleGridLineWidth : 1,
    bezierCurve : true,
    bezierCurveTension : 0.4,
    pointDot : true,
    pointDotRadius : 4,
    pointDotStrokeWidth : 1,
    pointHitDetectionRadius : 20,
    datasetStroke : true,
    datasetStrokeWidth : 2,
    datasetFill: true,
    responsive: true
};

// var linectx = document.getElementById("chartjs-linechart").getContext("2d");
// var lineChart = new Chart(linectx).Line(lineData, lineOptions);

// Bar chart
// -----------------------------------

var barData = {
    labels : ['January','February','March','April','May','June','July'],
    datasets : [
    {
        fillColor : '#23b7e5',
        strokeColor : '#23b7e5',
        highlightFill: '#23b7e5',
        highlightStroke: '#23b7e5',
        data : [rFactor(),rFactor(),rFactor(),rFactor(),rFactor(),rFactor(),rFactor()]
    },
    {
        fillColor : '#5d9cec',
        strokeColor : '#5d9cec',
        highlightFill : '#5d9cec',
        highlightStroke : '#5d9cec',
        data : [rFactor(),rFactor(),rFactor(),rFactor(),rFactor(),rFactor(),rFactor()]
    }
    ]
};

var barOptions = {
    scaleBeginAtZero : true,
    scaleShowGridLines : true,
    scaleGridLineColor : 'rgba(0,0,0,.05)',
    scaleGridLineWidth : 1,
    barShowStroke : true,
    barStrokeWidth : 2,
    barValueSpacing : 5,
    barDatasetSpacing : 1,
    responsive: true
};

var barctx = document.getElementById("chartjs-barchart").getContext("2d");
var barChart = new Chart(barctx).Bar(barData, barOptions);

//  Doughnut chart
// -----------------------------------

var doughnutData = [
{
    value: 300,
    color: '#7266ba',
    highlight: '#7266ba',
    label: 'Purple'
},
{
    value: 50,
    color: '#23b7e5',
    highlight: '#23b7e5',
    label: 'Info'
},
{
    value: 100,
    color: '#fad732',
    highlight: '#fad732',
    label: 'Yellow'
}
];

var doughnutOptions = {
    segmentShowStroke : true,
    segmentStrokeColor : '#fff',
    segmentStrokeWidth : 2,
    percentageInnerCutout : 85,
    animationSteps : 100,
    animationEasing : 'easeOutBounce',
    animateRotate : true,
    animateScale : false,
    responsive: true
};

// var doughnutctx = document.getElementById("chartjs-doughnutchart").getContext("2d");
// var doughnutChart = new Chart(doughnutctx).Doughnut(doughnutData, doughnutOptions);

// Pie chart
// -----------------------------------

var pieData =[
{
    value: 300,
    color: '#7266ba',
    highlight: '#7266ba',
    label: 'Purple'
},
{
    value: 40,
    color: '#fad732',
    highlight: '#fad732',
    label: 'Yellow'
},
{
    value: 120,
    color: '#23b7e5',
    highlight: '#23b7e5',
    label: 'Info'
}
];

var pieOptions = {
    segmentShowStroke : true,
    segmentStrokeColor : '#fff',
    segmentStrokeWidth : 2,
percentageInnerCutout : 0, // Setting this to zero convert a doughnut into a Pie
animationSteps : 100,
animationEasing : 'easeOutBounce',
animateRotate : true,
animateScale : false,
responsive: true
};

var piectx = document.getElementById("chartjs-piechart").getContext("2d");
var pieChart = new Chart(piectx).Pie(pieData, pieOptions);

// Polar chart
// -----------------------------------

var polarData = [
{
    value: 300,
    color: '#f532e5',
    highlight: '#f532e5',
    label: 'Red'
},
{
    value: 50,
    color: '#7266ba',
    highlight: '#7266ba',
    label: 'Green'
},
{
    value: 100,
    color: '#f532e5',
    highlight: '#f532e5',
    label: 'Yellow'
},
{
    value: 140,
    color: '#7266ba',
    highlight: '#7266ba',
    label: 'Grey'
},
];

var polarOptions = {
    scaleShowLabelBackdrop : true,
    scaleBackdropColor : 'rgba(255,255,255,0.75)',
    scaleBeginAtZero : true,
    scaleBackdropPaddingY : 1,
    scaleBackdropPaddingX : 1,
    scaleShowLine : true,
    segmentShowStroke : true,
    segmentStrokeColor : '#fff',
    segmentStrokeWidth : 2,
    animationSteps : 100,
    animationEasing : 'easeOutBounce',
    animateRotate : true,
    animateScale : false,
    responsive: true
};

// var polarctx = document.getElementById("chartjs-polarchart").getContext("2d");
// var polarChart = new Chart(polarctx).PolarArea(polarData, polarOptions);

// Radar chart
// -----------------------------------

var radarData = {
    labels: ['Eating', 'Drinking', 'Sleeping', 'Designing', 'Coding', 'Cycling', 'Running'],
    datasets: [
    {
        label: 'My First dataset',
        fillColor: 'rgba(114,102,186,0.2)',
        strokeColor: 'rgba(114,102,186,1)',
        pointColor: 'rgba(114,102,186,1)',
        pointStrokeColor: '#fff',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(114,102,186,1)',
        data: [65,59,90,81,56,55,40]
    },
    {
        label: 'My Second dataset',
        fillColor: 'rgba(151,187,205,0.2)',
        strokeColor: 'rgba(151,187,205,1)',
        pointColor: 'rgba(151,187,205,1)',
        pointStrokeColor: '#fff',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(151,187,205,1)',
        data: [28,48,40,19,96,27,100]
    }
    ]
};

var radarOptions = {
    scaleShowLine : true,
    angleShowLineOut : true,
    scaleShowLabels : false,
    scaleBeginAtZero : true,
    angleLineColor : 'rgba(0,0,0,.1)',
    angleLineWidth : 1,
    pointLabelFontFamily : "'Arial'",
    pointLabelFontStyle : 'bold',
    pointLabelFontSize : 10,
    pointLabelFontColor : '#565656',
    pointDot : true,
    pointDotRadius : 3,
    pointDotStrokeWidth : 1,
    pointHitDetectionRadius : 20,
    datasetStroke : true,
    datasetStrokeWidth : 2,
    datasetFill : true,
    responsive: true
};

// var radarctx = document.getElementById("chartjs-radarchart").getContext("2d");
// var radarChart = new Chart(radarctx).Radar(radarData, radarOptions);

});

</script>
<script></script>
</body>
</html>