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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <style>
        .nrp-modal {
            width:100%;
            position:fixed;
            top:0;
            left:0;
            z-index:500;
            display:none;
        }
        .nrp-modal-dialog {
            background-color:#fff;
            width:1000px;
            height:549px;
            margin:0 auto;
            box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
        }
        #LiveEventsContent {
            width:100%;
            height:100%;
            border:none;
        }
        .nrp-modal-overlay {
            width:100%;
            height:100%;
            background-color:rgba(0,0,0,0.60);
            position:fixed;
            z-index:499;
            display:none;
        }
    </style>
</head>

<body>

    <div class="site-header">
        <div class="nrp-modal-overlay"></div>
        <div class="nrp-modal">
            <div class="nrp-modal-dialog">
                <div class="focus focus-pageheader">
                        <div class="fph-separator"></div>
                        <div class="fph-table" style="height:40px;">
                            <div class="fph-row">
                                <div class="fph-cell fph-cell-text" style="padding-left:0px;">
                                    <div class="fph-primary" style="padding-bottom: 15px;">
                                        <h1 style="font-size:22px;">Add Event</h1>

                                        <ul class="meta">
                                        </ul>
                                    </div>
                                </div>
                                <div class="fph-cell fph-cell-supporting">
                                </div>
                            </div>
                            <div style="position:absolute; right:15px; top:10px;">
                                <a href="#" class="close-live-events-modal" style="color:#fff;"><i class="fa fa-times fa-2x" style="color:#fff; text-shadow: 1px 1px 0 #007aa3;"></i></a>
                            </div>
                        </div>
                    </div>
                <iframe id="LiveEventsContent" src="http://localhost/nrp-dashboard-add-event.php" onload="resizeIframe(this);"></iframe>
            </div>
        </div>
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
                <?php
                if ($_SERVER['HTTP_HOST'] != 'hstm-hccdemo-employee.patternmanager.com') { ?>
                    <div class="name">Darcy L. Crane</div>
                    <div class="avatar">
                        <i class="fa fa-user"></i>
                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg" data-pin-nopin="true" alt="avatar">
                    </div>
                    <?php  } else { ?>
                    <div class="name">Stephanie P. Juniper</div>
                    <div class="avatar">
                        <i class="fa fa-user"></i>
                        <img src="./content/images/avatar.jpg" data-pin-nopin="true" alt="avatar">
                    </div>
                    <?php  } ?>
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
                    <li class="active"><a href="/dashboard-manager-dev-ready.php">NRP Dashboard</a></li>
                    <?php
                    if ($_SERVER['HTTP_HOST'] != 'hstm-hccdemo-employee.patternmanager.com') { ?>
                        <li><a href="/todo.php?rater">To Do</a></li>
                        <?php  } else { ?>
                        <li><a href="/todo-hccdemo-employee.php">To Do</a></li>
                        <?php  } ?>
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
                        <?php
                    if ($_SERVER['HTTP_HOST'] != 'hstm-hccdemo-employee.patternmanager.com') { ?>
                            <li class=""><a href="/assessment-overview.php">Raters</a></li>
                            <?php  } ?>
                            <li class=""><a href="/catalog.php">Catalog</a></li>
                            <li class=""><a href="/event-calendar.php">Event Calendar</a></li>
                            <li class="disabled"><a href="#">Help</a></li>
                            <li class="visible-xs visible-sm"><a href="#">Logout</a></li>
                            <?php

                      include ('includes/applauncher.newstyle.php');


                    ?>
                </ul>
            </div>
        </nav>
    </div>
    <!-- /site-header -->
    <div class="layout layout-dashboard-manager layout-dashboard">
        <div class="container" style="min-height:600px;">
            <button type="button" id="showNRPModal" class="btn btn-primary m-xl">Show Live Events Modal</button>
        </div>
    </div>
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
                                            <li><a href="#">MyTeam</a></li>
                                            <li><a href="#">To-Do List</a></li>
                                            <li><a href="#">Completions</a></li>
                                        </ul>
                                    </section>
                                </div>
                                <div class="col-sm-3">
                                    <section class="section">
                                        <ul class="list-unstyled">
                                            <li><a href="#">Connections</a></li>
                                            <li><a href="#">Certifications</a></li>
                                            <li><a href="#">Licenses</a></li>
                                        </ul>
                                    </section>
                                </div>
                                <div class="col-sm-3">
                                    <section class="section">
                                        <ul class="list-unstyled">
                                            <li><a href="#">Resuscitation Cards</a></li>
                                            <li><a href="#">Catalog</a></li>
                                            <li><a href="#">Upcoming Events</a></li>
                                        </ul>
                                    </section>
                                </div>
                                <div class="col-sm-3">
                                    <section class="section">
                                        <ul class="list-unstyled">
                                            <li><a href="#">Help</a></li>
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
                <div class="logo"><img src="./content/images/powered-by-hstream.png" alt="Powered by hStream"></div>
                <div class="copyright">Copyright &copy; 2017 HealthStream, Inc. All Rights Reserved.</div>
                <div class="build">Build: 13.01.28.895.8 | O:STS2 | S:192.231.71.2</div>
            </div>
        </div>
    </div>
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
    <script src="/scripts/classList.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script>
        $( "#showNRPModal" ).click(function() {
            $('.nrp-modal-overlay').fadeIn();
          $( ".nrp-modal" ).slideDown( "fast","easeInQuad", function() {
            // Animation complete.

          });
        });
        $('.close-live-events-modal').click(function(){
            $( ".nrp-modal" ).slideUp( "slow", function() {
            });
              $('.nrp-modal-overlay').fadeOut();

        });
        function closeLiveEventsModal() {
            $( ".nrp-modal" ).slideUp( "slow", function() {
            });
                $('.nrp-modal-overlay').fadeOut();


        }
        function resizeIframe(obj) {
            console.log(obj.contentWindow.document.body.scrollHeight);
            // obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
          }
    </script>
</body>

</html>