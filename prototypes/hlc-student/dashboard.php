<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic Page Needs
            ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>My Dashboard | HealthStream</title>
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
    <body class="layout-dashboard">
        <div class="site-header ">
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
                </nav>
                <!-- /nav-account -->
            </div>
            <!-- /container -->
            <nav class="nav-main">
                <div class="container">
                    <ul id="nav" class="nav">
                         <li class=" dropdown active" >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dashboard <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="active" ><a href="/dashboard.php">Student Dashbaord</a></li>
                                <li><a href="/dashboard-manager.php">Manager Dashboard</a></li>
                                <li><a href="/dashboard-training.php">Training Dashbaord</a></li>

                            </ul>
                        </li>
                        <li ><a href="/">To Do List</a></li>
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
                    <div class="col-md-12" >
                    <!-- <a href="#modal-test" data-toggle="modal"><i class="fa fa-sitemap"></i></a> -->
                        <!-- <section class="section section-main section-box" data-equalize="layout-columns" style="height:700px">
                            </section> -->
                        <!-- /section-main -->
                        <div style="position:absolute;right:-30px;">
                        <a class="btn btn-default" href="#modal-test" data-toggle="modal"><i class="fa fa-cog"></i></a>
                        <!-- <a class="btn btn-default" href="#widgetModal" role="button"  data-toggle="modal"><i class="fa fa-cog" style="color:#555;"></i></a></div> -->
                        </div>
                        <div id="" class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <!-- START widget-->
                                        <div class="panel widget bg-warning-light action-item-panel">
                                            <div class="row row-table" style="position:relative;">
                                                <div class="col-xs-4  ">
                                                    <div class="number-container bg-warning pv-lg h1 text-center">4</div>
                                                        <!-- 4 -->
                                                    </div>
                                                <div class="col-xs-8 pv-lg" >
                                                    <div class="h3 mt0"  style="color:#fff !important;">Action Needed</div>
                                                </div>
                                               <div class="expand-panel expand-panel-warning" style="">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-circle fa-stack-1x icon-a warning"></i>
                                                        <i class="fa fa-chevron-down fa-stack-1x icon-b"></i>
                                                    </span>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="panel widget bg-green-light action-item-panel">
                                            <div class="row row-table" style="position:relative;">
                                                <div class="col-xs-4  ">
                                                    <div class="number-container bg-green pv-lg h1 text-center">6</div>
                                                        <!-- 4 -->
                                                    </div>
                                                <div class="col-xs-8 pv-lg" >
                                                    <div class="h3 mt0"  style="color:#fff !important;">In Progress</div>
                                                </div>
                                               <div class="expand-panel" style="">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-circle fa-stack-1x icon-a green"></i>
                                                        <i class="fa fa-chevron-down fa-stack-1x icon-b"></i>
                                                    </span>
                                               </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                       <div class="panel widget bg-info-light action-item-panel">
                                            <div class="row row-table" style="position:relative;">
                                                <div class="col-xs-4  ">
                                                    <div class="number-container bg-info pv-lg h1 text-center">9</div>
                                                        <!-- 4 -->
                                                    </div>
                                                <div class="col-xs-8 pv-lg" >
                                                    <div class="h3 mt0"  style="color:#fff !important;">Due Soon</div>
                                                </div>
                                               <div class="expand-panel" style="">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-circle fa-stack-1x icon-a info"></i>
                                                        <i class="fa fa-chevron-down fa-stack-1x icon-b"></i>
                                                    </span>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="panel widget bg-purple-light action-item-panel">
                                             <div class="row row-table" style="position:relative;">
                                                 <div class="col-xs-4  ">
                                                     <div class="number-container bg-purple pv-lg h1 text-center">4</div>
                                                         <!-- 4 -->
                                                     </div>
                                                 <div class="col-xs-8 pv-lg" >
                                                     <div class="h3 mt0"  style="color:#fff !important;">Completed</div>
                                                 </div>
                                                <div class="expand-panel" style="">
                                                     <span class="fa-stack">
                                                         <i class="fa fa-circle fa-stack-1x icon-a purple"></i>
                                                         <i class="fa fa-chevron-down fa-stack-1x icon-b"></i>
                                                     </span>
                                                </div>
                                             </div>
                                         </div>

                                    </div>
                                </div>

                                <div class="row action-results-row action-results-row-warning collapse">
                                <div class="col-sm-12">
                                <div class="action-results-panel">
                                <div class="panel-title">Action Needed</div>
                                    <table id="table-ext-3" class="table table-striped table-bordered table-hover table-condensed" style="background-color:#fff;margin-top:15px;">
                                      <thead>
                                         <tr>
                                            <th>Task name</th>
                                            <th style="text-align:center">Type</th>
                                            <th style="text-align:center">Status</th>
                                            <th style="text-align:center">Deadline</th>
                                            <th style="text-align:center">Actions</th>
                                         </tr>
                                      </thead>
                                      <tbody>
                                         <tr>
                                            <td><div class="task-title"><a href="#">Nursing Fundamentals Appraisal</a></div></td>
                                            <td style="text-align:center">Self Assessment</td>
                                            <td style="text-align:center">
                                              Review
                                            </td>
                                            <td style="text-align:center" class="text-warning">Jul 1, 2017</td>
                                            <td style="text-align:center"><div class="btn-group" style="width:100px;" >
                                                <a href="assessment.php?assessment=performance-2&amp;state=4" class="btn btn-default btn-sm hidden-xs" style="width:75px;" >Sign Off</a>
                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="assessment.php?assessment=performance-2&amp;state=4">Sign Off</a></li><li><a href="#">Print</a></li>
                                                </ul>
                                            </div></td>
                                         </tr>
                                         <tr>
                                            <td><div class="task-title"><a href="#">Fire Safety</a></div></td>
                                                                                        <td style="text-align:center">Course</td>
                                            <td style="text-align:center">
                                              Assigned
                                            </td>
                                            <td style="text-align:center" class="text-warning">Jul 8, 2017</td>
                                            <td style="text-align:center"><div class="btn-group">
                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" style="width:100px;" data-toggle="dropdown">Start</a>

                                            </div></td>
                                         </tr>
                                         <tr>
                                            <td><div class="task-title"><a href="#">Pain Management Class</a></div></td>
                                                 <td style="text-align:center">Live Class</td>
                                            <td style="text-align:center" class="text-warning">
                                              Not Registered
                                            </td>
                                            <td style="text-align:center"></td>
                                            <td style="text-align:center">
                                               <a class="btn btn-sm btn-default" style="width:100px;" href="registration.php">Choose Class<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                          </td>
                                         </tr>
                                      </tbody>
                                   </table>
                                   <div class="collapse-panel" style="">
                                        <span class="fa-stack">
                                            <i class="fa fa-circle fa-stack-1x icon-a warning"></i>
                                            <i class="fa fa-chevron-up fa-stack-1x icon-b"></i>
                                        </span>
                                   </div>
                                   </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="portlets-wrapper">
                        <div class="col-lg-7 ui-sortable" id="portlet-1" data-toggle="portlet">
                            <div id="panelPortlet2" class="panel panel-default">
                                <div class="panel-heading portlet-handler">
                                    <div class="">
                                        <div class="panel-title">Tasks by Type</div>
                                    </div>
                                    <div class="" style="position:absolute; right:20px; top: 10px;">
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-link" aria-expanded="false">
                                            <em class="fa fa-ellipsis-v text-muted"></em>
                                            </button>
                                            <ul role="menu" class="dropdown-menu dropdown-menu-right animated fadeInLeft">
                                                <li>
                                                    <a href="#">
                                                    <span>Recommend</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                    <span>Configure</span>
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#">
                                                    <span class="text-warning">Remove widget</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-wrapper">
                                    <div class="panel-body">
                                        <div class="task-types clearfix">
                                            <div class="task-type-item task-type-item-attention align-middle pt-xl ">
                                                <div class="task-type-title" >Online Learning</div>
                                                <div class="task-type-value">6</div>
                                                <div class="task-type-meta task-type-meta-attention"><i class="fa fa-warning fa-fw"></i> 2 Past Due</div>
                                            </div>
                                            <div class="task-type-item align-middle pt-xl ">
                                                <div class="task-type-title">Assessments</div>
                                                <div class="task-type-value">3</div>
                                                <div class="task-type-meta">Next Due: 8/1/17</div>
                                            </div>
                                            <div class="task-type-item align-middle pt-xl ">
                                                <div class="task-type-title"> PX Surveys</div>
                                                <div class="task-type-value">1</div>
                                                <div class="task-type-meta">Next Due: 1/12/17</div>
                                            </div>
                                            <div class="task-type-item align-middle pt-xl" >
                                                <div class="task-type-title" style="margin-top:-10px;">In-person Classes</div>
                                                <div class="task-type-value">3</div>
                                                <div class="task-type-meta task-type-meta-attention"><i class="fa fa-warning fa-fw"></i> Choose Class</div>
                                            </div>
                                            <div class="task-type-item align-middle pt-xl">
                                                <div class="task-type-title" >Manager Tasks</div>
                                                <div class="task-type-value">5</div>
                                                <div class="task-type-meta">Next Due: 10/18/17</div>
                                            </div>
                                            <div class="task-type-item align-middle pt-xl">
                                                <div class="task-type-title" >Rater Tasks</div>
                                                <div class="task-type-value">5</div>
                                                <div class="task-type-meta">Next Due: 8/1/17</div>
                                            </div>
                                            <div class="task-type-item align-middle pt-xl">
                                                <div class="task-type-title" >Goal Tasks</div>
                                                <div class="task-type-value">2</div>
                                                <div class="task-type-meta">Next Due: 4/1/18</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="panelPortlet3" class="panel panel-default">
                                <div class="panel-heading portlet-handler ui-sortable-handle">Rater Tasks</div>
                                <div class="panel-body">


                                                           <!-- START list group item-->
                                                           <a href="#" class="list-group-item">
                                                              <div class="media-box">
                                                                 <div class="pull-left rater-avatar">
                                                                   <img src="/content/images/prototype-actors/brynn.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                                                 </div>
                                                                 <div class="media-box-body clearfix">
                                                                    <div class="pull-right"><button class="btn btn-default btn-sm" style="width:75px;">Approve</button></div>
                                                                    <strong class="media-box-heading text-primary">
                                                                       <span class="circle circle-success circle-lg text-left"></span>Park, Jennifer S.</strong>
                                                                    <p class="mb-sm">
                                                                       <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                                                    </p>
                                                                 </div>
                                                              </div>
                                                           </a>
                                                           <!-- END list group item-->
                                                           <!-- START list group item-->
                                                           <a href="#" class="list-group-item">
                                                              <div class="media-box">
                                                                 <div class="pull-left rater-avatar">
                                                                  <img src="/content/images/avatar.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" data-pin-nopin="true">
                                                                 </div>
                                                                 <div class="media-box-body clearfix">
                                                                    <small class="pull-right"><button class="btn btn-default btn-sm" style="width:75px;">Rate</button></small>
                                                                    <strong class="media-box-heading text-primary">
                                                                       <span class="circle circle-success circle-lg text-left"></span>Juniper, Stephanie P.</strong>
                                                                    <p class="mb-sm">
                                                                       <small>Cras sit amet nibh libero, in gravida nulla. Nulla facilisi.</small>
                                                                    </p>
                                                                 </div>
                                                              </div>
                                                           </a>
                                                           <!-- END list group item-->
                                                           <!-- START list group item-->
                                                           <a href="#" class="list-group-item">
                                                              <div class="media-box">
                                                                 <div class="pull-left rater-avatar">
                                                                    <img src="/content/images/prototype-actors/alewis.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48"  data-pin-nopin="true">
                                                                 </div>
                                                                 <div class="media-box-body clearfix">
                                                                    <small class="pull-right"><button class="btn btn-default btn-sm" style="width:75px;">Review</button></small>
                                                                    <strong class="media-box-heading text-primary">
                                                                       <span class="circle circle-danger circle-lg text-left"></span>Lewis, Audrey K.</strong>
                                                                    <p class="mb-sm">
                                                                       <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                                                    </p>
                                                                 </div>
                                                              </div>
                                                           </a>
                                                           <!-- END list group item-->
                                                           <!-- START list group item-->
                                                           <a href="#" class="list-group-item">
                                                              <div class="media-box">
                                                                 <div class="pull-left rater-avatar">
                                                                  <img src="/content/images/prototype-actors/brynn.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" data-pin-nopin="true">
                                                                 </div>
                                                                 <div class="media-box-body clearfix">
                                                                    <small class="pull-right"><button class="btn btn-default btn-sm" style="width:75px;">Rate</button></small>
                                                                    <strong class="media-box-heading text-primary">
                                                                       <span class="circle circle-danger circle-lg text-left"></span>Chamberland, Marie S.</strong>
                                                                    <p class="mb-sm">
                                                                       <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                                                    </p>
                                                                 </div>
                                                              </div>
                                                           </a>
                                                           <!-- END list group item-->
                                                           <!-- START list group item-->
                                                           <a href="#" class="list-group-item">
                                                              <div class="media-box">
                                                                 <div class="pull-left rater-avatar">
                                                                    <img src="/content/images/prototype-actors/ladylexy.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" data-pin-nopin="true">
                                                                 </div>
                                                                 <div class="media-box-body clearfix">
                                                                    <small class="pull-right"><button class="btn btn-default btn-sm" style="width:75px;">Approve</button></small>
                                                                    <strong class="media-box-heading text-primary">
                                                                       <span class="circle circle-danger circle-lg text-left"></span>Conner, Rosalyn F.</strong>
                                                                    <p class="mb-sm">
                                                                       <small>Mauris eleifend, libero nec cursus lacinia...</small>
                                                                    </p>
                                                                 </div>
                                                              </div>
                                                           </a>
                                                           <!-- END list group item-->
                                                        </div>

                                <div class="panel-footer"></div>
                            </div>
                            <div id="panelPortlet7" class="panel panel-default">
                            <div class="panel-heading portlet-handler ui-sortable-handle">My Goals <a href="#" class="text-muted pull-right">
                                    <em class="fa fa-ellipsis-v text-muted"></em>
                                    </a></div>
                                <div class="panel-body">

                                    <!-- <div class="text-info">My Goals</div> -->
                                       <div class="row">
                                            <div class="col-lg-6"> <img src="/content/images/goals-graph.png" /></div>
                                            <div class="col-lg-6">
                                                            <section class="section section-box connections-links equalized" data-equalize="home-sections" style="">
                                                                <!-- <h3 class="connection-links-header">What's New <span><i class="fa fa-fw fa-bullhorn"></i></span></h3> -->
                                                                <ul class="list-unstyled">
                                                                    <li><a href="#">Goal 1</a></li>
                                                                    <li class="link-attention"><a href="#">Goal 2</a></li>
                                                                    <li><a href="#">Goal 3</a></li>
                                                                    <li><a href="#">Goal 4</a></li>
                                                                    <li><a href="#">Goal 5</a></li>
                                                                </ul>
                                                            </section>
                                            </div>
                                        </div>
                                    </div>
                                <div class="panel-footer">
                                    <p class="text-muted">
                                        <em class="fa fa-arrow-up fa-fw"></em>
                                        <span>This Month</span>
                                        <span class="text-dark">60%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 ui-sortable" id="portlet-2" data-toggle="portlet"">
                            <div id="panelPortlet5" class="panel panel-default ">
                                <div class="panel-heading portlet-handler">
                                    <div class="pull-right label label-warning">1</div>
                                    <div class="pull-right label label-success">2</div>
                                    <div class="panel-title">Upcoming In-person Events </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row" style="margin-top:-15px;margin-bottom:5px;">
                                        <div class="col-lg-8"></div>
                                        <div class="col-lg-4">
                                           <button class="btn btn-default btn-xs pull-right live-events-view-type type-calendar"><i class="fa fa-calendar"></i></button>
                                           <button class="btn btn-default btn-xs pull-right active live-events-view-type type-list"><i class="fa fa-list"></i></button>
                                        </div>
                                    </div>
                                   <!--  <a href="#" class="list-group-item">
                                        <div class="media-box">
                                            <div class="pull-left">
                                                <div class="list-meta-box bg-warning-light border-warning">

                                                    <i class="fa fa-warning" style="font-size:28px;margin-top:5px;"></i>
                                                </div>
                                            </div>
                                            <div class="media-box-body list-meta-content clearfix">
                                                <small class="pull-right">2h</small>
                                                <strong class="media-box-heading text-primary">
                                                <span class="circle circle-success circle-lg text-left"></span>Pain Management Class</strong>
                                                <p class="mb-sm">
                                                    <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                                </p>

                                            </div>
                                        </div>
                                    </a> -->
                                    <div class="live-events-calendar collapse">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div id='calendar'></div>
                                        </div>

                                    </div>

                                    </div>
                                    <div class="live-events-list ">
                                    <a href="#" class="list-group-item">
                                        <div class="media-box">
                                            <div class="pull-left">
                                                <div class="list-meta-box ">
                                                    <div class="month">Aug</div>
                                                    <div class="day">8</div>
                                                </div>
                                            </div>
                                            <div class="media-box-body list-meta-content clearfix">
                                                <small class="pull-right">1.5h</small>
                                                <strong class="media-box-heading text-primary">
                                                <span class="circle circle-success circle-lg text-left"></span>AORN Caring for the Older Adult</strong>
                                                <p class="mb-sm">
                                                    <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="media-box">
                                            <div class="pull-left">
                                                <div class="list-meta-box">
                                                    <div class="month">Sep</div>
                                                    <div class="day">13</div>
                                                </div>
                                            </div>
                                            <div class="media-box-body list-meta-content clearfix">
                                                <small class="pull-right">30m</small>
                                                <strong class="media-box-heading text-primary">
                                                <span class="circle circle-success circle-lg text-left"></span>Profile of Multisystem Trauma Patients</strong>
                                                <p class="mb-sm">
                                                    <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                   </div>
                                    <div class="panel-footer clearfix">
                                        <div class="input-group">
                                            <input type="text" placeholder="Search events .." class="form-control input-sm">
                                            <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default btn-sm"><i class="fa fa-search"></i>
                                            </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="panelPortlet9" class="panel panel-default">
                                <div class="panel-heading portlet-handler">
                                    <div class="pull-right label label-warning">2</div>
                                    <div class="pull-right label label-success">7</div>
                                    <div class="panel-title">Upcoming Online Tasks</div>
                                </div>
                                <div class="panel-body">
                                    <div class="row" style="margin-top:-15px;margin-bottom:5px;">
                                        <div class="col-lg-8"></div>
                                        <div class="col-lg-4">
                                            <select class="form-control input-sm">
                                                <option>Next 30 days</option>
                                            </select>
                                        </div>
                                    </div>
                                    <a href="#" class="list-group-item">
                                        <div class="media-box">
                                            <div class="pull-left">
                                                <div class="list-meta-box bg-warning-light border-warning">
                                                    <div class="month">Jul</div>
                                                    <div class="day">1</div>
                                                </div>
                                            </div>
                                            <div class="media-box-body list-meta-content clearfix">
                                                <small class="pull-right">2h</small>
                                                <strong class="media-box-heading text-primary">
                                                <span class="circle circle-success circle-lg text-left"></span>Nursing Fundamentals Appraisal</strong>
                                                <p class="mb-sm">
                                                    <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="media-box">
                                            <div class="pull-left">
                                                <div class="list-meta-box bg-warning-light border-warning">
                                                    <div class="month">Jul</div>
                                                    <div class="day">8</div>
                                                </div>
                                            </div>
                                            <div class="media-box-body list-meta-content clearfix">
                                                <small class="pull-right">2h</small>
                                                <strong class="media-box-heading text-primary">
                                                <span class="circle circle-success circle-lg text-left"></span>Fire Safety</strong>
                                                <p class="mb-sm">
                                                    <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="media-box">
                                            <div class="pull-left">
                                                <div class="list-meta-box">
                                                    <div class="month">Aug</div>
                                                    <div class="day">13</div>
                                                </div>
                                            </div>
                                            <div class="media-box-body list-meta-content clearfix">
                                                <small class="pull-right">30m</small>
                                                <strong class="media-box-heading text-primary">
                                                <span class="circle circle-success circle-lg text-left"></span>Please Update Your Profile</strong>
                                                <p class="mb-sm">
                                                    <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="media-box">
                                            <div class="pull-left">
                                                <div class="list-meta-box">
                                                    <div class="month">Sep</div>
                                                    <div class="day">4</div>
                                                </div>
                                            </div>
                                            <div class="media-box-body list-meta-content clearfix">
                                                <small class="pull-right">8h</small>
                                                <strong class="media-box-heading text-primary">
                                                <span class="circle circle-success circle-lg text-left"></span>Pain Management Curriculum</strong>
                                                <p class="mb-sm">
                                                    <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- END list group item-->
                                    <!-- </div> -->
                                    <!--     <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 170.096px;"></div> -->
                                    <!--  <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div> -->
                                    <!-- </div> -->
                                    <!-- END list group-->
                                    <!-- START panel footer-->
                                    <div class="panel-footer clearfix">
                                    <div class="clearfix" style="margin-bottom:10px;">
                                    <ul class="pagination pagination-sm pull-right ">
                                                               <li class="active"><a href="#">1</a>
                                                               </li>
                                                               <li><a href="#">2</a>
                                                               </li>
                                                               <li><a href="#">3</a>
                                                               </li>
                                                               <li><a href="#">»</a>
                                                               </li>
                                                            </ul>
                                                            </div>
                                        <div class="input-group">
                                            <input type="text" placeholder="Search tasks .." class="form-control input-sm">
                                            <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default btn-sm"><i class="fa fa-search"></i>
                                            </button>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- END panel-footer-->
                                </div>
                            </div>
                            <div id="panelPortlet6" class="panel panel-default">
                                <div class="panel-heading portlet-handler">
                                    <div class="panel-title">Latest activities</div>
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
                                <!-- END panel-footer-->
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
        <script src="/scripts/moment.js"></script>
        <script src="/scripts/full-calendar.js"></script>
        <script src="/scripts/prototype.dashboard.js"></script>




        <script>
            $(function(){

                $('#calendar').fullCalendar({events: [
                {
                    title: 'AORN Caring for the Older Adult',
                    start: '2017-08-08'
                },
                {
                    title: 'Profile of Multisystem Trauma Patients',
                    start: '2017-08-13',
                },
                {
                    title: 'Professional Development',
                    start: '2017-08-20'
                }
            ]});

                $('.live-events-view-type').click(function(){
                    $('.live-events-view-type').removeClass('active');
                    $(this).addClass('active');

                    $('.live-events-calendar').hide();
                    $('.live-events-list').hide();
                    if($(this).hasClass('type-calendar')) {
                        $('.live-events-calendar').show();
                    }
                    else {
                        $('.live-events-list').show();
                    }
                });
            });

        </script>
        <script></script>
    </body>
</html>