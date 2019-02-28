<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
            ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>View Chart - Manager Dashboard | HealthStream</title>
    <!-- Styles
            ================================================== -->
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.bootstrap.css?cache=1500665751">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.plugins.css?cache=1500665751">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.app.css?cache=1500665751">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.prototype.css?cache=1500665751">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- <link href="content/styles/healthstream.goals.stiffchart.css" rel="stylesheet" media="screen" /> -->
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
        table {
            border-collapse: initial;
        }
    </style>
    <style>
    .maman {
        color: green;
        max-width: 350px;
        width:350px;
        border: 1px solid #fff;
        text-align: center;
    }

    .google-visualization-orgchart-lineleft {
        border-left: 2px solid #333!important;
    }
    .google-visualization-orgchart-linebottom {
        border-bottom: 2px solid #333!important;
    }
    .google-visualization-orgchart-lineright {
        border-right: 2px solid #333!important;
    }
    .maman img {
        clear: both;
        display: block;
        margin: auto;
    }



    </style>
</head>

<body class="">
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
    <div class="layout layout-dashboard-manager">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="profile-return-link">
                        <a href="dashboard-manager-dev-ready.php"><i class="fa fa-fw fa-chevron-left"></i>Return to Dashboard</a>
                    </section>
                  <!--chart goes here-->
                  <div id="map"></div>


                </div>
                <!-- /column -->
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
                                <h4>Support</h4> To talk with a customer service representative call 1-800-521-0574
                                <br>
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

            </div>
        </div>
        <!-- PROTOTYPE ONLY -->

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
       
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <!-- <script src="/scripts/prototype.dashboard-manager.js"></script> -->
        <script>
       google.charts.load('visualization', '1', {packages:['orgchart']});
              google.charts.setOnLoadCallback(drawChart);

              function drawChart() {
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Name');
                data.addColumn('string', 'Manager');
                //data.addColumn('string', 'ToolTip');
                data.addRows([
                  [{v:'id0', f:'<div class="the-chart">' +
                                                '<div class="panel widget">' +
                                                    '<div class="panel-body">' +
                                                        '<div class="row row-table">' +
                                                            '<div class="col-xs-4 text-center">' +
                                                                '<img src="/content/images/prototype-actors/78.jpg" alt="Image" class="img-thumbnail img-circle img-responsive thumb80" data-pin-nopin="true">' +
                                                            '</div>' +
                                                            '<div class="col-xs-8 text-center">' +
                                                                '<h3 class="mt0">Andrea Martinez<br><small>LPN - I.V. Certified</small></h3>' +
                                                                '<p class="text-muted">9 Tasks / <span class="text-warning">2 Past Due</span></p>' +
                                                                '<div class="pull-right"> <a href="dashboard-profile-dev-ready.php" type="button" class="btn btn-default btn-xs" target="_new">View Profile</a>' +
                                                                '</div>' +
                                                            '</div>' +
                                                        '</div>' +
                                                    '</div>' +
                                                '</div>' +
                                           '</div>'}, ''],
                  [{v:'id1', f:'<img src="/content/images/dummy.png" /><a href="#">Brad Bruno</a>'},'id0'],
                  [{v:'id2', f:'<img src="/content/images/dummy.png" /><a href="#">Michele Brown</a>'},'id0'],
                  [{v:'id3', f:'<img src="/content/images/dummy.png" /><a href="#">Nicholas Frazier</a>'},'id0'],
                [{v:'id4', f:'<img src="/content/images/dummy.png" /><a href="#">Chris Horton</a>'}, 'id0'],
                [{v:'id5', f:'<img src="/content/images/dummy.png" /><a href="#">Ella Lane</a>'},'id0'],
                    [{v:'id6', f:'<img src="/content/images/dummy.png" /><a href="#">Andrea Martinez</a>'},'id0'],
               [{v:'id7', f:'<img src="/content/images/dummy.png" /><a href="#">Tanya Rivers</a>'},'id3'],
               [{v:'id8', f:'<img src="/content/images/dummy.png" /><a href="#">Elmer Romero</a>'},'id3'],
               [{v:'id9', f:'<img src="/content/images/dummy.png" /><a href="#">belfort<br />Jim Jones</a>'},'id3'],

                ]);

                data.addRows([
                     [{v:'id10', f:'<img src="/content/images/dummy.png" /><a href="#">Rick Sanchez</a>'},'id8'],
                     [{v:'id11', f:'<img src="/content/images/dummy.png" /><a href="#">Lucy Crane</a>'},'id8'],
                     [{v:'id12', f:'<img src="/content/images/dummy.png" /><a href="#">Bob Breaker</a>'},'id8'],
                     ]);
                var chart = new google.visualization.OrgChart(document.getElementById('map'));
                chart.draw(data, {allowHtml:true, nodeClass:'maman',allowCollapse:true});
              }
        </script>
        <script>
            $(function(){
                $('.google-visualization-orgchart-linebottom, .google-visualization-orgchart-lineleft, .google-visualization-orgchart-lineright').css('border','1px dotted #cccccc');
            });
        </script>
</body>

</html>