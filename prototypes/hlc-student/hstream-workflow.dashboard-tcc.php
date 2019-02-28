<?php
$persona = (!empty($_GET['persona']))?intval($_GET['persona']):1;
$workflow = (!empty($_GET['workflow']))?intval($_GET['workflow']):0;
?>
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
    <style>
    .layout{
        border-top: 5px solid #007aa3;
        padding-top:0px;
    }
    .section-box {
         background:none;
        padding: 15px;
        margin: 15px 0;
         -webkit-box-shadow: none;
         box-shadow: none;
    }

  </style>
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
                                               <?php
                               switch ($workflow) {
                                   case '0':
                                       switch ($persona) {
                                           // case 'hlc.dev':
                                           case '1':
                                               $name = 'Luis Garrett';
                                               $picURL = '/content/images/personas/Luis-NewGrad.png';
                                               break;
                                           case '2':
                                               $name = 'Melissa Bradley';
                                               $picURL = '/content/images/personas/Melissa-NurseManager.png';
                                               break;
                                           case '3':
                                               $name = 'Tracy Allen';
                                               $picURL = '/content/images/personas/Tracy-TCC.png';
                                               break;
                                           case '4':
                                               $name = 'Anna Price';
                                               $picURL = '/content/images/personas/Anna-Instructor.png';
                                               break;
                                           case '5':
                                               $name = 'Grace Davidson';
                                               $picURL = '/content/images/personas/Grace-CNO.png';
                                               break;
                                           case '6':
                                               $name = 'Catherine Scott';
                                               $picURL = '/content/images/personas/Catherine-CCO.png';
                                               break;
                                           case '7':
                                               $name = 'Felicity Alvarado';
                                               $picURL = '/content/images/personas/Felicity-CHRO.png';
                                               break;
                                           case '8':
                                               $name = 'Chris Freeman';
                                               $picURL = '/content/images/personas/Chris-CIOCTO.png';
                                               break;
                                           case '9':
                                               $name = 'Mariah Hay';
                                               $picURL = '/content/images/personas/Mariah-CEO.jpg';
                                               break;
                                           default:
                                               $name = 'Luis Garrett';
                                               $picURL = '/content/images/personas/Luis-NewGrad.png';
                                               break;
                                       }
                                       break;
                                   case '1':
                                       switch ($persona) {
                                           // case 'hlc.dev':
                                           case '1':
                                               $name = 'Luis Garrett';
                                               $picURL = '/content/images/personas/Luis-NewGrad.png';
                                               break;
                                           case '2':
                                               $name = 'Melissa Bradley';
                                               $picURL = '/content/images/personas/Melissa-NurseManager.png';
                                               break;
                                           case '3':
                                               $name = 'Mariah Hay';
                                               $picURL = '/content/images/personas/Mariah-CEO.jpg';
                                               break;
                                           case '4':
                                               $name = 'Chris Freeman';
                                               $picURL = '/content/images/personas/Chris-CIOCTO.png';
                                               break;
                                           case '5':
                                               $name = 'Anna Price';
                                               $picURL = '/content/images/personas/Anna-Instructor.png';
                                               break;
                                           default:
                                               $name = 'Luis Garrett';
                                               $picURL = '/content/images/personas/Luis-NewGrad.png';
                                               break;
                                       }
                                       break;
                                   case '2':
                                       switch ($persona) {
                                           // case 'hlc.dev':
                                           case '1':
                                               $name = 'Luis Garrett';
                                               $picURL = '/content/images/personas/Luis-NewGrad.png';
                                               break;
                                           case '2':
                                               $name = 'Melissa Bradley';
                                               $picURL = '/content/images/personas/Melissa-NurseManager.png';
                                               break;
                                           case '3':
                                               $name = 'Mariah Hay';
                                               $picURL = '/content/images/personas/Mariah-CEO.jpg';
                                               break;
                                           case '4':
                                               $name = 'Chris Freeman';
                                               $picURL = '/content/images/personas/Chris-CIOCTO.png';
                                               break;
                                           case '5':
                                               $name = 'Anna Price';
                                               $picURL = '/content/images/personas/Anna-Instructor.png';
                                               break;
                                           default:
                                               $name = 'Luis Garrett';
                                               $picURL = '/content/images/personas/Luis-NewGrad.png';
                                               break;
                                       }
                                       break;
                               }


                               ?>
                               <div class="name"><?= $name ?></div>
                               <div class="avatar">
                                   <i class="fa fa-user"></i>
                                   <img src="<?= $picURL ?>">
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
                      <?php
                         if($workflow == '0'){
                           include ('includes/applauncher.hstream.persona.php');
                         }
                         else if ($workflow  == '1'){
                             include ('includes/applauncher.hstream.persona.workflow1.php');
                         }
                         else if ($workflow  == '2'){
                             include ('includes/applauncher.hstream.workflow2.php');
                         }
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
       <div class="layout ">
           <div class="container">
               <div class="row">
                   <div class="col-md-12">
                       <section class="section section-box section-main " style="padding:0px">


                          <img src="/content/images/TrainingDashboard.png" style="width:1150px;display:block;margin-top:0px;"/>

                   </section>
                   </div>



               </div><!-- col -->
           </div><!-- row -->
       </div>
        <!-- /container -->
        </div>
        <!-- /layout -->
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


</script>
<script>
  $(function(){
      HealthStream.utilities.applauncher();
    });

</script>
</body>
</html>