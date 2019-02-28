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
        <title>hStream Alert | HealthStream</title>
        <!-- Styles
    ================================================== -->
        <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.bootstrap.css?cache=1508080580">
        <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.plugins.css?cache=1508080580">
        <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.app.css?cache=1508080580">
        <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.prototype.css?cache=1508080580">
        <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.hstream.css?cache=1508080580">s
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

    </head>

    <body>
        <div class="site-header site-header hstream-header">
            <div class="container">
                <a href="#" class="trigger-open trigger-open-header"><i class="fa fa-bars"></i><span>Menu</span></a>
                <div class="branding" >
                    <div >
                        <a href="/">
                            <img src="content/images/hstream-logo.png" alt="HealthStream" class="logo-large">
                        </a>
                    </div>
                    <div class="hstream-brand">
                        <span>Validate</span>
                    </div>
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
                        <div class="name">
                            <?= $name ?>
                        </div>
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
                        <li class="active"><a href="#">Dashboard</a></li>
                        <li class=""><a href="#">Physician Lookup</a></li>
                        <!-- <li class="active"><a href="#">Profile</a></li> -->
                        <!-- <li class=""><a href="/completed.2.php">Transcript</a></li> -->
                        <!-- <li class=""><a href="#">Help</a></li> -->
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
        <!--  <div class="focus focus-pageheader">
            <div class="fph-separator"></div>
            <div class="fph-table">
                <div class="fph-row">
                    <div class="fph-cell fph-cell-text">
                        <div class="fph-primary">
                            <h1>Alert</h1>
                        </div>

                    </div>

                </div>
            </div>
        </div> -->
       <div class="layout hstream-alert">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <section class="section section-box section-main ">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6">
                                    <!-- START widget-->
                                    <div class="panel panel-primary">
                                        <a href="#modal-alerts" data-toggle="modal" class="panel-heading modal-alerts">
                                            <div class="row">
                                                <div class="col-xs-9">
                                                    <p class="m0 text-md panel-title">OIG Alerts</p>
                                                </div>
                                                <div class="col-xs-3 text-right right-box">
                                                    <div class="text-lg">26</div>
                                                    <div class="meta-text">alerts</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="panel panel-danger">
                                        <a href="#modal-alerts" data-toggle="modal" class="panel-heading  modal-alerts" >
                                            <div class="row">
                                                <div class="col-xs-9" style="">
                                                    <!-- <em class="fa fa-heartbeat fa-5x"></em> -->
                                                    <p class="m0 text-md  panel-title" >SAM Alerts</p>
                                                </div>
                                                <div class="col-xs-3 text-right right-box" >
                                                    <div class="text-lg">12</div>
                                                    <div class="meta-text">alerts</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="panel panel-green">
                                        <a href="#modal-alerts" data-toggle="modal" class="panel-heading  modal-alerts">
                                            <div class="row">
                                                <div class="col-xs-9">
                                                    <p class="m0 text-md panel-title">Payment Alerts</p>
                                                </div>
                                                <div class="col-xs-3 text-right right-box">
                                                    <div class="text-lg">13</div>
                                                    <div class="meta-text">alerts</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- col -->
            </div>
            <!-- row -->
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
        <div id="modal-alerts" class="modal fade modal-lg">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                        <h4 class="modal-title">OIG Alerts</h4>
                    </div>
                    <div class="modal-body">
                        <div class="oigAlertsHeader text-muted"></div>
                        <table class="table table-bordered upcoming-classes-table dataTable" id="oigAlertsTable">
                            <thead>
                                <tr>
                                    <th class="employee">Employee</th>
                                    <th>Job Title</th>
                                    <th>Alert Date</th>
                                    <th class="unsortable sorting_disabled"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-id="9">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Bruno, Brad K.</a></td>
                                    <td>Clinical Nurse Supervisor (RN)</td>
                                    <td>1/1/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="1">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Chamberland, Marie S.</a></td>
                                    <td>Nurse Manager - Acute Care</td>
                                    <td>1/1/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="2">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Conner, Rosalyn F.</a></td>
                                    <td>Quality Coordinator (RN)</td>
                                    <td>1/10/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="3">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Flangan, Simon P.</a></td>
                                    <td>Diabetes Educator (RN)</td>
                                    <td>1/12/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="4">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Franks, Iva R.</a></td>
                                    <td>Case Manager (RN)</td>
                                    <td>1/31/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="5">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Juniper, Stephanie P.</a></td>
                                    <td>LPN - I.V. Certified</td>
                                    <td>2/1/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="6">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Lewis, Audry K.</a></td>
                                    <td>Nurse - Staff (RN) - Acute Care</td>
                                    <td>2/6/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="7">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Montoya, Alice G.</a></td>
                                    <td>LPN - I.V. Certified</td>
                                    <td>2/11/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="8">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Park, Jennifer S.</a></td>
                                    <td>Nurse - Staff (RN) - Telephones</td>
                                    <td>2/19/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="9">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Grant, Peter  K.</a></td>
                                    <td>Clinical Nurse Supervisor (RN)</td>
                                    <td>2/22/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="10">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Hicks, Ruth P.</a></td>
                                    <td>Nurse Manager - Acute Care</td>
                                    <td>4/1/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="2">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Nguyen, Crystal  F.</a></td>
                                    <td>Quality Coordinator (RN)</td>
                                    <td>4/15/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="3">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Mason, Julia  P.</a></td>
                                    <td>Diabetes Educator (RN)</td>
                                    <td>4/21/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="4">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Sanders, Gregory  R.</a></td>
                                    <td>Case Manager (RN)</td>
                                    <td>4/30/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="2">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Nguyen, Crystal  F.</a></td>
                                    <td>Quality Coordinator (RN)</td>
                                    <td>5/6/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="3">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Mason, Julia  P.</a></td>
                                    <td>Diabetes Educator (RN)</td>
                                    <td>5/16/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="7">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Montoya, Alice G.</a></td>
                                    <td>LPN - I.V. Certified</td>
                                    <td>8/1/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="8">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Park, Jennifer S.</a></td>
                                    <td>Nurse - Staff (RN) - Telephones</td>
                                    <td>8/11/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="9">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Grant, Peter  K.</a></td>
                                    <td>Clinical Nurse Supervisor (RN)</td>
                                    <td>8/14/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="10">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Hicks, Ruth P.</a></td>
                                    <td>Nurse Manager - Acute Care</td>
                                    <td>9/3/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="2">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Nguyen, Crystal  F.</a></td>
                                    <td>Quality Coordina<td>9/30/2017</td>
                                    <td>9/5/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="3">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Mason, Julia  P.</a></td>
                                    <td>Diabetes Educator (RN)</td>
                                    <td>9/17/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="4">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Sanders, Gregory  R.</a></td>
                                    <td>Case Manager (RN)</td>
                                    <td>9/30/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="2">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Nguyen, Crystal  F.</a></td>
                                    <td>Quality Coordinator (RN)</td>
                                    <td>10/3/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="3">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Mason, Julia  P.</a></td>
                                    <td>Diabetes Educator (RN)</td>
                                    <td>10/22/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                                <tr data-id="3">
                                    <td class="employee"><a href="dashboard-profile-dev-ready.php">Mason, Julia  P.</a></td>
                                    <td>Diabetes Educator (RN)</td>
                                    <td>10/30/2017</td>
                                    <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Print</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>
                </div>
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
        <script src="/scripts/healthstream.utilities.applauncher.js"></script>
        <script>
        $(function() {
            HealthStream.utilities.applauncher();
            // helper to keep the task count correct
            $('.focus-pageheader .meta-value:eq(0)').text($('#tasks .slat').length);
            $('.focus-pageheader .meta-value:eq(1)').text($('#tasks .slat-attention').length);
            //               $('input[type="checkbox"]').click(function() {
            //     if($(this).val() == '5' || $(this).val() == 'all') {
            //         $('.alert-nudge').show();
            //     }
            //     else {
            //         $('.alert-nudge').hide();
            //     }
            // });
        });
        </script>
    </body>

    </html>