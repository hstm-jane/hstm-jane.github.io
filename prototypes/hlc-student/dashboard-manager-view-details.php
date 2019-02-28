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
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.anychart.css?cache=1500665751">
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
    <!-- <script src="/scripts/modernizr.js"></script> -->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TJ7WQRZ');
    </script>
    <style>

    </style>
    <!-- End Google Tag Manager -->
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJ7WQRZ" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="site-header">
        <div class="container">
            <a href="#" class="trigger-open trigger-open-header"><i class="fa fa-bars"></i><span>Menu</span></a>
            <div class="branding">
                <a href="/">
                    <img src="./content/images/logo-healthstream-large.png" alt="HealthStream" class="logo-large" />
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
                    <li class="active"><a href="/dashboard-manager-dev-ready.php">MyTeam</a></li>
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
    <div class="layout layout-dashboard-manager layout-dashboard layout-dashboard-manager-move">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12  ">
                    <div id="" class="panel panel-default panel-my-team">
                        <div class="panel-heading">
                            <div class="panel-title">Employees</div>
                            <div class="pull-right view-action-buttons">
                                <a href="#modal-team" data-toggle="modal" class="btn btn-xs btn-default btn-svg" title="View List">
                                    <!-- <em class="fa fa-list"></em> -->
                                    <svg aria-hidden="true" data-prefix="fal" data-icon="list-ul" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-list-ul fa-w-16">
                                        <path fill="currentColor" d="M506 114H134a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h372a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm6 154v-24a6 6 0 0 0-6-6H134a6 6 0 0 0-6 6v24a6 6 0 0 0 6 6h372a6 6 0 0 0 6-6zm0 160v-24a6 6 0 0 0-6-6H134a6 6 0 0 0-6 6v24a6 6 0 0 0 6 6h372a6 6 0 0 0 6-6zM48 60c-19.882 0-36 16.118-36 36s16.118 36 36 36 36-16.118 36-36-16.118-36-36-36zm0 160c-19.882 0-36 16.118-36 36s16.118 36 36 36 36-16.118 36-36-16.118-36-36-36zm0 160c-19.882 0-36 16.118-36 36s16.118 36 36 36 36-16.118 36-36-16.118-36-36-36z" class=""></path>
                                    </svg>
                                </a>
                                <a href="dashboard-manager-team-chart-test9.php" target="_new" class="view-chart btn btn-xs btn-default btn-svg" title="View Org Chart">
                                    <svg aria-hidden="true" data-prefix="fal" data-icon="sitemap" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-sitemap fa-w-20">
                                        <path fill="currentColor" d="M616 320h-72v-48c0-26.468-21.532-48-48-48H336v-32h56c13.255 0 24-10.745 24-24V24c0-13.255-10.745-24-24-24H248c-13.255 0-24 10.745-24 24v144c0 13.255 10.745 24 24 24h56v32H144c-26.467 0-48 21.532-48 48v48H24c-13.255 0-24 10.745-24 24v144c0 13.255 10.745 24 24 24h144c13.255 0 24-10.745 24-24V344c0-13.255-10.745-24-24-24h-40v-48c0-8.822 7.178-16 16-16h160v64h-56c-13.255 0-24 10.745-24 24v144c0 13.255 10.745 24 24 24h144c13.255 0 24-10.745 24-24V344c0-13.255-10.745-24-24-24h-56v-64h160c8.822 0 16 7.178 16 16v48h-40c-13.255 0-24 10.745-24 24v144c0 13.255 10.745 24 24 24h144c13.255 0 24-10.745 24-24V344c0-13.255-10.745-24-24-24zm-456 32v128H32V352h128zm224 0v128H256V352h128zM256 160V32h128v128H256zm352 320H480V352h128v128z" class=""></path>
                                    </svg>
                                </a>
                                <?php if(isset($_GET['noemail'])) { ?>
                                <div data-toggle="tooltip" data-placement="left" title="To message your team, add an email address under your Account Settings." class="disabled-email-button ">
                                    <a href="#" class="btn btn-xs btn-default btn-svg disabled" disabled>
                                        <!-- <em class="fa fa-list"></em> -->
                                        <svg aria-hidden="true" data-prefix="fal" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16">
                                            <path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z" class=""></path>
                                        </svg>
                                    </a>
                                </div>
                                <?php } else { ?>
                                <a href="#" class="btn btn-xs btn-default btn-svg " data-target="#modal-team-message-all" data-toggle="modal" data-backdrop="static" data-keyboard="false" title="Message Team">
                                    <!-- <em class="fa fa-list"></em> -->
                                    <svg aria-hidden="true" data-prefix="fal" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16">
                                        <path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z" class=""></path>
                                    </svg>
                                </a>
                                <?php } ?>
                            </div>
                            <div class="clearfix pr pt-sm team-result-count"><small class="text-muted pull-left ">Showing 1 - <span class="number-employees">25</span> of 49</small>
                            </div>

                        </div>

                        <div class="panel-body">
                            <div class="employee-container">


                                <a href="dashboard-profile-dev-ready.php?loa" class="team-member-link ">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/bbrune.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">
                                            Bruno, Brad K.
                                            <div class="text-sm text-muted">Clinical Nurse Supervisor</div>
                                            <div style="margin-top:-2px;"><span class="circle circle-warning circle-md mr-sm text-left" style="background-color: #f3ca06;"></span><span class="text-sm">On Leave</span></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/brynn.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">

                                            Chambers, Marie S.
                                            <div class="text-sm text-muted">Nurse Manager - Acute Care</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/mtnmissy.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">

                                            Conner, Rosalyn F.
                                            <div class="text-sm text-muted">Quality Coordinator (RN)</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/himanshuchanda.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">

                                            Flangan, Simon P.
                                            <div class="text-sm text-muted">Diabetes Educator (RN)</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/ladylexy.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">

                                            Franks, Iva R.
                                            <div class="text-sm text-muted">Case Manager (RN)</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/avatar.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">

                                            Juniper, Stephanie P.
                                            <div class="text-sm text-muted">LPN - I.V. Certified</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/alewis.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">

                                            Lewis, Audrey K.
                                            <div class="text-sm text-muted">Nurse - Staff (RN) - Acute Care</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/rhein_wein.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">

                                            Montoya, Alice G.
                                            <div class="text-sm text-muted">LPN - I.V. Certified</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/kfriedson.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">

                                            Park, Jennifer S.
                                            <div class="text-sm text-muted">Nurse - Staff (RN) - Telephones</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <div class="team-initial-circle">
                                                BB
                                            </div>
                                        </div>
                                        <div class="media-body pt-sm employee-name">
                                            <div class="pull-right">
                                            </div>
                                            Bruno, Brad K.
                                            <div class="text-sm text-muted">Clinical Nurse Supervisor</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/brynn.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">

                                            Chambers, Marie S.
                                            <div class="text-sm text-muted">Nurse Manager - Acute Care</div>
                                            <!-- <div class="text-sm text-warning">1 Past Due</div> -->
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/mtnmissy.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">

                                            Conner, Rosalyn F.
                                            <div class="text-sm text-muted">Quality Coordinator (RN)</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/himanshuchanda.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">

                                            Flangan, Simon P.
                                            <div class="text-sm text-muted">Diabetes Educator (RN)</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/ladylexy.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">

                                            Franks, Iva R.
                                            <div class="text-sm text-muted">Case Manager (RN)</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/avatar.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">
                                            Juniper, Stephanie P.
                                            <div class="text-sm text-muted">LPN - I.V. Certified</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/alewis.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">
                                            Lewis, Audrey K.
                                            <div class="text-sm text-muted">Nurse - Staff (RN) - Acute Care</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/rhein_wein.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">
                                            Montoya, Alice G.
                                            <div class="text-sm text-muted">LPN - I.V. Certified</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/kfriedson.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">
                                            Park, Jennifer S.
                                            <div class="text-sm text-muted">Nurse - Staff (RN) - Telephones</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <div class="team-initial-circle">
                                                MC
                                            </div>
                                        </div>
                                        <div class="media-body pt-sm employee-name">
                                            <div class="pull-right">
                                            </div>
                                            Bruno, Brad K.
                                            <div class="text-sm text-muted">Clinical Nurse Supervisor</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/brynn.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">

                                            Chambers, Marie S.
                                            <div class="text-sm text-muted">Nurse Manager - Acute Care</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/mtnmissy.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">

                                            Conner, Rosalyn F.
                                            <div class="text-sm text-muted">Quality Coordinator (RN)</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/himanshuchanda.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">

                                            Flangan, Simon P.
                                            <div class="text-sm text-muted">Diabetes Educator (RN)</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/ladylexy.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">

                                            Franks, Iva R.
                                            <div class="text-sm text-muted">Case Manager (RN)</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/avatar.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">
                                            Juniper, Stephanie P.
                                            <div class="text-sm text-muted">LPN - I.V. Certified</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-profile-dev-ready.php" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/alewis.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48" />
                                        </div>
                                        <div class="media-body pt-sm employee-name">
                                            Lewis, Audrey K.
                                            <div class="text-sm text-muted">Nurse - Staff (RN) - Acute Care</div>
                                        </div>
                                    </div>
                                </a>


                            </div>
                        </div>
                        <div class="panel-footer clearfix">
                            <div class="input-group" style="display:table;">
                                <input type="text" placeholder="Search employees .." class="form-control input-sm text-search-employees" style="display:table-cell;">
                                <span class="input-group-btn" style="display:table-cell;">
                                    <button type="submit" class="btn btn-default btn-sm btn-search-employees"><i class="fa fa-search"></i>
                                    </button>
                                </span>
                                <button class="btn btn-default btn-sm btn-search-employees-clear" style="display:table-cell;">Clear</button>
                            </div>

                        </div>
                    </div>
                </div>
                <style>
                   
                </style>
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    <div class="portlets-wrapper">
                        <!-- START row-->
                        <div class="row">

                            <!-- START panel COLUMN 1-->
                            <div class="col-lg-4 col-md-6" id="portlet-1" data-toggle="portlet">

                                <!-- START panel-->
                                <div class="panel panel-default panel-metrics license-widget">


                                    <div class="panel-body text-center">

                                        <div class="metric-box-header portlet-handler">
                                            Employees with
                                            <br /> <span class="highlight-text">Outstanding Licenses</span>
                                            <div class="kebab">
                                                <figure></figure>
                                                <figure class="middle"></figure>
                                                <p class="cross">x</p>
                                                <figure></figure>
                                                <ul class="kebab-dropdown">
                                                    <li><a href="#" class="show-modal-license">View Details</a></li>
                                                    <li><a href="#" class="kebab-hide-widget kebab-hide-license-widget">Hide Widget</a></li>
                                                    <li><a href="#" class="kebab-show-hidden-employees hidden-licenses">Show Hidden Employees</a></li>
                                                </ul>
                                            </div>
                                            <div class="download-widget-data">
                                                <a href="#">
                                                    <span class="download-widget-data-icon">
                                                        <em class="fa fa-download"></em>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="#" class="show-modal-license">

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
                                                            <div class="metric-value">15</div>
                                                        </div>
                                                        <div class="secondary-label">
                                                            <div class="metric-value">Expiring Soon</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chart-container">
                                                    <canvas id="UpcomingLicensesChart" height="175" width="175"></canvas>
                                                </div>
                                            </div>
                                            <div class="metric-box-footer">
                                                expiring within 30 days

                                            </div>

                                        </a>

                                    </div>

                                </div>
                                <!-- END panel-->

                                <!-- START panel-->
                                <div class="panel panel-default panel-metrics assignment-widget" id="panelPortlet3">
                                    <div class="panel-body text-center">

                                        <div class="metric-box-header portlet-handler">

                                            Employees with
                                            <br /> <span class="highlight-text">Outstanding Learning</span>
                                            <div class="kebab">
                                                <figure></figure>
                                                <figure class="middle"></figure>
                                                <p class="cross">x</p>
                                                <figure></figure>
                                                <ul class="kebab-dropdown">
                                                    <li><a href="#" class="show-modal-assignments">View Details</a></li>
                                                    <li><a href="#" class="kebab-hide-widget kebab-hide-assignment-widget">Hide Widget</a></li>
                                                    <li><a href="#" class="kebab-show-hidden-employees hidden-assignments">Show Hidden Employees</a></li>
                                                </ul>
                                            </div>
                                            <div class="download-widget-data">
                                                <a href="#" data-placement="top">
                                                    <span class="download-widget-data-icon">
                                                        <em class="fa fa-download"></em>
                                                    </span>
                                                </a>
                                            </div>

                                        </div>

                                        <a href="#" class="show-modal-assignments">

                                            <div class="metric-box upcoming-assignment">
                                                <div class="metric-center-summary">
                                                    <div class="primary-metric">
                                                        <div class="primary-value">
                                                            <div class="metric-value">2</div>
                                                        </div>
                                                        <div class="primary-label">
                                                            <div class="metric-value">Past Due</div>
                                                        </div>
                                                    </div>
                                                    <div class="secondary-metric">
                                                        <div class="secondary-value">
                                                            <div class="metric-value">0</div>
                                                        </div>
                                                        <div class="secondary-label">
                                                            <div class="metric-value">Due Soon</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chart-container">
                                                    <canvas id="outstandingAssignementChart" height="175" width="175"></canvas>
                                                </div>
                                            </div>
                                            <div class="metric-box-footer">
                                                due within 30 days
                                            </div>
                                        </a>

                                    </div>

                                </div>
                                <!-- END panel-->

                                <!-- START panel-->
                                <div class="panel panel-default panel-metrics cards-widget" id="panelPortlet6">
                                    <div class="panel-body text-center">
                                        <div class="metric-box-header portlet-handler">
                                            Employees with
                                            <br /> <span class="highlight-text">Outstanding Resuscitation</span>
                                            <div class="kebab">
                                                <figure></figure>
                                                <figure class="middle"></figure>
                                                <p class="cross">x</p>
                                                <figure></figure>
                                                <ul class="kebab-dropdown">
                                                    <li><a href="#" class="show-modal-license">View Details</a></li>
                                                    <li><a href="#" class="kebab-hide-widget kebab-hide-card-widget">Hide Widget</a></li>
                                                    <li><a href="#" class="kebab-show-hidden-employees hidden-cards">Show Hidden Employees</a></li>
                                                </ul>
                                            </div>
                                            <div class="download-widget-data">
                                                <a href="#">
                                                    <span class="download-widget-data-icon">
                                                        <em class="fa fa-download"></em>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="#" class="show-modal-license">

                                            <div class="metric-box oustanding-cards">
                                                <div class="metric-center-summary">
                                                    <div class="primary-metric">
                                                        <div class="primary-value">
                                                            <div class="metric-value">9</div>
                                                        </div>
                                                        <div class="primary-label">
                                                            <div class="metric-value">Expired</div>
                                                        </div>
                                                    </div>
                                                    <div class="secondary-metric">
                                                        <div class="secondary-value">
                                                            <div class="metric-value">13</div>
                                                        </div>
                                                        <div class="secondary-label">
                                                            <div class="metric-value">Expiring Soon</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chart-container">
                                                    <canvas id="OutstandingCardsChart" height="175" width="175"></canvas>
                                                </div>
                                            </div>
                                            <div class="metric-box-footer">
                                                expiring within 30 days

                                            </div>
                                        </a>

                                    </div>


                                </div>
                                <!-- END panel-->

                            </div>
                            <!-- END panel COLUMN 1-->

                            <!-- START panel COLUMN 2-->
                            <div class="col-lg-4 col-md-6" id="portlet-2" data-toggle="portlet">

                                <!-- START panel-->
                                <div class="panel panel-default panel-metrics cert-widget" id="panelPortlet2">


                                    <div class="panel-body text-center">

                                        <div class="metric-box-header portlet-handler">
                                            <!-- <span class="highlight-text">22</span>  -->
                                            Employees with
                                            <br /> <span class="highlight-text">Outstanding Certifications</span>
                                            <div class="kebab">
                                                <figure></figure>
                                                <figure class="middle"></figure>
                                                <p class="cross">x</p>
                                                <figure></figure>
                                                <ul class="kebab-dropdown">
                                                    <li><a href="#" class="show-modal-cert">View Details</a></li>
                                                    <li><a href="#" class="kebab-hide-widget kebab-hide-cert-widget">Hide Widget</a></li>
                                                    <li><a href="#" class="kebab-show-hidden-employees hidden-certifications">Show Hidden Employees</a></li>
                                                </ul>
                                            </div>
                                            <div class="download-widget-data">
                                                <a href="#">
                                                    <span class="download-widget-data-icon">
                                                        <em class="fa fa-download"></em>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="#" class="show-modal-cert">

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

                                                        <svg class="checkmark green-stroke">
                                                            <g transform="matrix(0.79961,8.65821e-32,8.39584e-32,0.79961,-489.57,-205.679)">
                                                                <path class="checkmark__check" fill="none" d="M616.306,283.025L634.087,300.805L673.361,261.53"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="chart-container">
                                                    <canvas id="OutstandingCertificationsChart" height="175" width="175"></canvas>
                                                </div>
                                            </div>
                                            <div class="metric-box-footer">
                                                expiring within 30 days
                                            </div>
                                        </a>

                                    </div>

                                </div>
                                <!-- END panel-->

                                <!-- START panel-->
                                <div class="panel panel-default panel-metrics assessment-widget" id="panelPortlet4">


                                    <div class="panel-body text-center">

                                        <div class="metric-box-header portlet-handler">
                                            Employees with
                                            <br /> <span class="highlight-text">Outstanding Assessments</span>
                                            <div class="kebab">
                                                <figure></figure>
                                                <figure class="middle"></figure>
                                                <p class="cross">x</p>
                                                <figure></figure>
                                                <ul class="kebab-dropdown">
                                                    <li><a href="#" class="show-modal-assessments">View Details</a></li>
                                                    <li><a href="#" class="kebab-hide-widget kebab-hide-assessment-widget">Hide Widget</a></li>
                                                    <li><a href="#" class="kebab-show-hidden-employees hidden-assessments">Show Hidden Employees</a></li>
                                                </ul>
                                            </div>
                                            <div class="download-widget-data">
                                                <a href="#">
                                                    <span class="download-widget-data-icon">
                                                        <em class="fa fa-download"></em>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="#" class="show-modal-assessments">

                                            <div class="metric-box upcoming-assessments">
                                                <div class="metric-center-summary">
                                                    <div class="primary-metric">
                                                        <div class="primary-value">
                                                            <div class="metric-value">6</div>
                                                        </div>
                                                        <div class="primary-label">
                                                            <div class="metric-value">Past Due</div>
                                                        </div>
                                                    </div>
                                                    <div class="secondary-metric">
                                                        <div class="secondary-value">
                                                            <div class="metric-value">16</div>
                                                        </div>
                                                        <div class="secondary-label">
                                                            <div class="metric-value">Due Soon</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chart-container">
                                                    <canvas id="UpcomingAssessmentsChart" height="175" width="175"></canvas>
                                                </div>
                                            </div>
                                            <div class="metric-box-footer">
                                                due within 30 days
                                            </div>
                                        </a>

                                    </div>

                                </div>
                                <!-- END panel-->

                            </div>
                            <!-- END panel COLUMN 2-->

                            <div class="hidden-md hidden-sm hidden-xs ml-lg widget-settings">
                                <a class="btn btn-default" href="#modal-widget-store" data-toggle="modal"><i class="fa fa-cog"></i></a>
                            </div>

                            <!-- START panel COLUMN 3-->
                            <div class="col-lg-4 col-md-6" id="portlet-3" data-toggle="portlet">

                                
                                <!-- START panel-->
                                <div class="panel panel-default panel-metrics assessment-tasks-widget button-widget" id="panelPortlet5">


                                    <div class="rater-dashboard-button">

                                        <div class="metric-box-header portlet-handler">

                                            Assessment Tasks
                                            <div class="kebab">
                                                <figure></figure>
                                                <figure class="middle"></figure>
                                                <p class="cross">x</p>
                                                <figure></figure>
                                                <ul class="kebab-dropdown">
                                                    <li><a href="assessment-overview.php">View Tasks</a></li>
                                                    <li><a href="#" class="kebab-hide-button-widget  kebab-hide-task-widget">Hide Widget</a></li>
                                                </ul>
                                            </div>

                                        </div>


                                        <a href="assessment-overview.php" class="rater-dashboard-button-value h1">
                                            19
                                            <div class="rater-dashboard-button-meta">items</div>

                                        </a>


                                    </div>
                                </div>
                                <!-- END panel-->

                                <!-- START panel-->
                                <div class="panel panel-default panel-knowledgeq" id="panelPortlet9">
                                    <div class="panel-heading portlet-handler">
                                        <div class="panel-title">Knowledge<span>Q</span></div>
                                        <div class="kebab">
                                            <figure></figure>
                                            <figure class="middle"></figure>
                                            <p class="cross">x</p>
                                            <figure></figure>
                                            <ul class="kebab-dropdown">
                                                <li><a href="#" class="show-modal-knowledgeq">View Details</a></li>
                                                <li><a href="#" class="kebab-hide-widget kebab-hide-knowledgeq-widget">Hide Widget</a></li>
                                                <li><a href="#" class="kebab-show-hidden-employees hidden-knowledgeq">Show Hidden Employees</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <a href="#" class="show-modal-knowledgeq">

                                            <div  class="knowledgeq-meta-table">
                                                <div class="completed">
                                                    <div class="place-value">20<span>/28</span></div>
                                                    <div class="place-label">Completed</div>
                                                </div>
                                                <div class="due-soon">
                                                    <div class="place-value">2</div>
                                                    <div class="place-label">due soon</div>
                                                </div>
                                                <div class="past-due">
                                                    <div class="place-value">3</div>
                                                    <div class="place-label">past due</div>
                                                </div>
                                            </div>
                                            <div class="team-name">
                                                Employees Completed
                                            </div>
                                            <div class="chart-label">
                                                Due within 12 months
                                            </div>
                                            <div class="needle-cap-value">80%</div>
                                            <div class="gauge-chart-container" id="KnowledgeQChart"></div>
                                        </a>
                                    </div>

                                </div>
                                <!-- END Panel-->

                            </div>
                            <!-- END panel COLUMN 3-->

                        </div>
                        <!-- END row-->
                    </div>



                </div>


            </div>
        </div>
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
    <?php
include ('includes/modals/_modal-message-single.php');
include ('includes/modals/_modal-dashboard-team.php');
include ('includes/modals/_modal-dashboard-upcoming-classes.php');
include ('includes/modals/_modal-dashboard-license.php');
include ('includes/modals/_modal-dashboard-cert.php');
include ('includes/modals/_modal-dashboard-assignment.php');
include ('includes/modals/_modal-dashboard-assessment.php');
include ('includes/modals/_modal-dashboard-cards.php');
include ('includes/modals/_modal-dashboard-team-message-all.php');
include ('includes/modals/_modal-message-group.php');
include ('includes/modals/_modal-dashboard-widget-store.php');
include ('includes/modals/_modal-dashboard-knowledgeq.php');



?>
    <div id="modal-performance" class="modal fade modal-xl modal-performance" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Employee Performance </h4>
                </div>
                <div class="modal-body" style="max-height:900px;">
                    <style>
                        #radarcontainer {
                    width: 100%;
                    height: 600px;
                    margin: 0;
                    padding: 0;
                }
                .employee-performance-detail {
                    color:#777;
                    font-size:20px;
                    position:absolute;
                    top:20px;
                    left:20px;
                    z-index:10000000;
                }
            </style>
                    <div class="employee-performance-detail">
                        <div><strong>Brad Bruno</strong></div>
                        <div>Clinical Nurse Supervisor</div>
                        <div>Index Score: <strong>65.4</strong></div>

                    </div>
                    <div id="radarcontainer"></div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-export">View Profile</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-performance-view-all" class="modal fade modal-xl modal-performance-view-all" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Employee Performance </h4>
                </div>
                <div class="modal-body layout layout-dashboard-manager" style="max-height:70vh;position:static !important;border-top: none !important;">

                    <div class="modal-header-left pull-left">
                        <div class="outstandingAssignmentsHeader text-muted">Showing 1 to 10 of 49 records</div>
                        <div class="show-hidden-items">
                            <div class="checkbox c-checkbox">
                                <label class="text-muted">
                                    <input type="checkbox" class="show-hidden-assignments" data-com.agilebits.onepassword.user-edited="yes">
                                    <span class="fa fa-check"></span>Show hidden items
                                </label>
                            </div>
                        </div>
                    </div>
                    <style>
                        .modal-performance-view-all .progress-value {
                            font-size:12px;
                        }
                    </style>

                    <div id="assignmentsTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div id="assignmentsTable_filter" class="dataTables_filter"><label><input type="search" class="form-control input-sm" placeholder="Quick Search" aria-controls="assignmentsTable" style="width: 250px;"></label></div>
                        <table class="table table-striped outstanding-assessments-table dataTable no-footer" id="assignmentsTable" role="grid" aria-describedby="assignmentsTable_info">
                            <thead>
                                <tr role="row">
                                    <th class="unsortable team-photo sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 38px;"><span class="sort-icon"></span></th>
                                    <th class="employee sorting" tabindex="0" aria-controls="assignmentsTable" rowspan="1" colspan="1" aria-label="Employee: activate to sort column descending" style="width: 160px !important;" aria-sort="ascending">Employee<span class="sort-icon"></span></th>
                                    <th class="score sorting_asc" tabindex="0" aria-controls="assignmentsTable" rowspan="1" colspan="1" aria-label="Score: activate to sort column ascending" style="width: 161px;">Score<span class="sort-icon"></span></th>
                                    <th class="due sorting" tabindex="0" aria-controls="assignmentsTable" rowspan="1" colspan="1" aria-label="Due: activate to sort column ascending" style="width: 85px;">Last Assessed<span class="sort-icon"></span></th>
                                    <th class="unsortable team-action sorting_disabled" rowspan="1" colspan="1" style="width: 150px;">
                                        <div class="action action-split">
                                            <div class="btn-group">
                                                <a href="#" data-target="#modal-team-message-all" data-toggle="modal" data-dismiss="modal" data-backdrop="static" data-keyboard="false" class="btn btn-default hidden-xs" title="Message All">
                                                    Message All</a>
                                                <a href="#" class="btn btn-default dropdown-toggle hidden-xs" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                                <a href="#" class="btn btn-xs btn-default btn btn-default dropdown-toggle visible-xs" data-toggle="dropdown">
                                                    <svg aria-hidden="false" data-prefix="fal" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16" style="position: absolute;left: 5px;top: 2px;">
                                                        <path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z" class=""></path>
                                                    </svg>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li>
                                                        <a href="#" data-target="#modal-team-message-all" data-toggle="modal" data-dismiss="modal" data-backdrop="static" data-keyboard="false" title="Message All">Message All</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-target="#modal-team-message-all" data-toggle="modal" data-dismiss="modal" data-backdrop="static" data-keyboard="false" title="Message - Expired">Message - Top Performers</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-target="#modal-team-message-all" data-toggle="modal" data-dismiss="modal" data-backdrop="static" data-keyboard="false" title="Message - Expiring Soon">Message - Bottom Performers</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <span class="sort-icon"></span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>







                                <tr role="row" class="odd">
                                    <td><img src="/content/images/prototype-actors/mtnmissy.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                                    <td><a href="dashboard-profile-dev-ready.php#professional">Chamberland, Marie S.</a>
                                        <div class="text-muted text-sm">Nurse Manager - Acute Care</div>
                                    </td>
                                    <!-- <td>Nurse Manager - Acute Care</td> -->
                                    <td class="">
                                        <a href="#modal-performance" data-toggle="modal" data-dismiss="modal">
                                            <div class="" style="width:80px">
                                                <div class="progress-value pull-right ml-sm text-success">99.2</div>
                                                <div class="progress progress-xs m0">
                                                    <div role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 99%" class="progress-bar progress-bar-success progress-bar-striped">
                                                        <span class="sr-only">99.2</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="">
                                        Aug 19, 2018 </td>
                                    <td class="team-action">
                                        <div class="action action-split">
                                            <div class="btn-group">
                                                <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li>
                                                        <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                                    </li>
                                                    <li>
                                                        <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                                    </li>
                                                    <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class=" even " role="row">
                                    <td><img src="https://randomuser.me/api/portraits/women/40.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                                    <td><a href="dashboard-profile-dev-ready.php#professional">Christies, Susan P.</a>
                                        <div class="text-muted text-sm">Nurse Manager - Non-Acute Care</div>
                                    </td>
                                    <td class="">
                                        <div class="" style="width:80px">
                                            <div class="progress-value pull-right ml-sm text-success">87.4</div>
                                            <div class="progress progress-xs m0">
                                                <div role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 87%" class="progress-bar progress-bar-success progress-bar-striped">
                                                    <span class="sr-only">99.2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="">
                                        Aug 24, 2018 </td>
                                    <td class="team-action">
                                        <div class="action action-split">
                                            <div class="btn-group">
                                                <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li>
                                                        <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                                    </li>
                                                    <li>
                                                        <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                                    </li>
                                                    <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td><img src="/content/images/prototype-actors/himanshuchanda.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                                    <td><a href="dashboard-profile-dev-ready.php#professional">Conner, Rosalyn F.</a>
                                        <div class="text-muted text-sm">Quality Coordinator (RN)</div>
                                    </td>
                                    <!-- <td>Quality Coordinator (RN)</td> -->
                                    <td class="">
                                        <div class="" style="width:80px">
                                            <div class="progress-value pull-right ml-sm text-success">79.2</div>
                                            <div class="progress progress-xs m0">
                                                <div role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 79%" class="progress-bar progress-bar-success progress-bar-striped">
                                                    <span class="sr-only">99.2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="">
                                        Sep 3, 2018 </td>
                                    <td class="team-action">
                                        <div class="action action-split">
                                            <div class="btn-group">
                                                <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li>
                                                        <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                                    </li>
                                                    <li>
                                                        <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                                    </li>
                                                    <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td><img src="/content/images/prototype-actors/himanshuchanda.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                                    <td><a href="dashboard-profile-dev-ready.php#professional">Flangan, Simon P.</a>
                                        <div class="text-muted text-sm">Diabetes Educator (RN)</div>
                                    </td>
                                    <!-- <td>Diabetes Educator (RN)</td> -->
                                    <td class="">
                                        <div class="" style="width:80px">
                                            <div class="progress-value pull-right ml-sm text-success">74.5</div>
                                            <div class="progress progress-xs m0">
                                                <div role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 74%" class="progress-bar progress-bar-success progress-bar-striped">
                                                    <span class="sr-only">99.2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="">
                                        Sep 18, 2018 </td>
                                    <td class="team-action">
                                        <div class="action action-split">
                                            <div class="btn-group">
                                                <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li>
                                                        <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                                    </li>
                                                    <li>
                                                        <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                                    </li>
                                                    <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td><img src="/content/images/prototype-actors/ladylexy.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                                    <td><a href="dashboard-profile-dev-ready.php#professional">Franks, Iva R.</a>
                                        <div class="text-muted text-sm">Case Manager (RN)</div>
                                    </td>
                                    <!-- <td>Case Manager (RN)</td> -->
                                    <td class="">
                                        <div class="" style="width:80px">
                                            <div class="progress-value pull-right ml-sm text-success">72.2</div>
                                            <div class="progress progress-xs m0">
                                                <div role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 72%" class="progress-bar progress-bar-success progress-bar-striped">
                                                    <span class="sr-only">99.2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="">
                                        Oct 4, 2018 </td>
                                    <td class="team-action">
                                        <div class="action action-split">
                                            <div class="btn-group">
                                                <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li>
                                                        <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                                    </li>
                                                    <li>
                                                        <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                                    </li>
                                                    <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td><img src="/content/images/avatar.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                                    <td><a href="dashboard-profile-dev-ready.php#professional">Juniper, Stephanie P.</a>
                                        <div class="text-muted text-sm">LPN - I.V. Certified</div>
                                    </td>
                                    <!-- <td>LPN - I.V. Certified</td> -->
                                    <td class="">
                                        <div class="" style="width:80px">
                                            <div class="progress-value pull-right ml-sm text-warning">62.9</div>
                                            <div class="progress progress-xs m0">
                                                <div role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 62%" class="progress-bar progress-bar-warning progress-bar-striped">
                                                    <span class="sr-only">99.2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="">
                                        Oct 8, 2018 </td>
                                    <td class="team-action">
                                        <div class="action action-split">
                                            <div class="btn-group dropup">
                                                <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="mailto:bbruno@jupiterhealth.com">Send Message</a></li>
                                                    <li>
                                                        <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                                    </li>
                                                    <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td><img src="/content/images/avatar.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                                    <td><a href="dashboard-profile-dev-ready.php#professional">Juniper, Stephanie P.</a>
                                        <div class="text-muted text-sm">LPN - I.V. Certified</div>
                                    </td>
                                    <!-- <td>LPN - I.V. Certified</td> -->
                                    <td class="">
                                        <div class="" style="width:80px">
                                            <div class="progress-value pull-right ml-sm text-warning">59.2</div>
                                            <div class="progress progress-xs m0">
                                                <div role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 59%" class="progress-bar progress-bar-warning progress-bar-striped">
                                                    <span class="sr-only">99.2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="">
                                        Oct 8, 2018 </td>
                                    <td class="team-action">
                                        <div class="action action-split">
                                            <div class="btn-group dropup">
                                                <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li>
                                                        <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                                    </li>
                                                    <li>
                                                        <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                                    </li>
                                                    <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td><img src="/content/images/avatar.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                                    <td><a href="dashboard-profile-dev-ready.php#professional">Juniper, Stephanie P.</a>
                                        <div class="text-muted text-sm">LPN - I.V. Certified</div>
                                    </td>
                                    <!-- <td>LPN - I.V. Certified</td> -->
                                    <td class="">
                                        <div class="" style="width:80px">
                                            <div class="progress-value pull-right ml-sm text-warning">54.1</div>
                                            <div class="progress progress-xs m0">
                                                <div role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 54%" class="progress-bar progress-bar-warning progress-bar-striped">
                                                    <span class="sr-only">99.2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="">
                                        Oct 8, 2018 </td>
                                    <td class="team-action">
                                        <div class="action action-split">
                                            <div class="btn-group dropup">
                                                <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li>
                                                        <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                                    </li>
                                                    <li>
                                                        <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                                    </li>
                                                    <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td><img src="/content/images/avatar.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                                    <td><a href="dashboard-profile-dev-ready.php#professional">Juniper, Stephanie P.</a>
                                        <div class="text-muted text-sm">LPN - I.V. Certified</div>
                                    </td>
                                    <!-- <td>LPN - I.V. Certified</td> -->
                                    <td class="">
                                        <div class="" style="width:80px">
                                            <div class="progress-value pull-right ml-sm text-danger">31.2</div>
                                            <div class="progress progress-xs m0">
                                                <div role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 31%" class="progress-bar progress-bar-danger progress-bar-striped">
                                                    <span class="sr-only">99.2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="">
                                        Oct 8, 2018 </td>
                                    <td class="team-action">
                                        <div class="action action-split">
                                            <div class="btn-group dropup">
                                                <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li>
                                                        <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                                    </li>
                                                    <li>
                                                        <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                                    </li>
                                                    <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td><img src="/content/images/avatar.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                                    <td><a href="dashboard-profile-dev-ready.php#professional">Juniper, Stephanie P.</a>
                                        <div class="text-muted text-sm">LPN - I.V. Certified</div>
                                    </td>
                                    <!-- <td>LPN - I.V. Certified</td> -->
                                    <td class="">
                                        <div class="" style="width:80px">
                                            <div class="progress-value pull-right ml-sm text-danger">23.2</div>
                                            <div class="progress progress-xs m0">
                                                <div role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 23%" class="progress-bar progress-bar-danger progress-bar-striped">
                                                    <span class="sr-only">99.2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="">
                                        Oct 8, 2018 </td>
                                    <td class="team-action">
                                        <div class="action action-split">
                                            <div class="btn-group dropup">
                                                <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li>
                                                        <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                                    </li>
                                                    <li>
                                                        <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                                    </li>
                                                    <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="bottom">
                            <div class="dataTables_length" id="assignmentsTable_length"><label>Show <select name="assignmentsTable_length" aria-controls="assignmentsTable" class="form-control input-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> records</label></div>
                            <div class="dataTables_info" id="assignmentsTable_info" role="status" aria-live="polite" style="display: none;">Showing 1 to 6 of 6 records</div>
                            <div class="dataTables_paginate paging_simple_numbers" id="assignmentsTable_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button previous disabled" id="assignmentsTable_previous"><a href="#" aria-controls="assignmentsTable" data-dt-idx="0" tabindex="0"><i class="fa fa-chevron-left"></i></a></li>
                                    <li class="paginate_button active"><a href="#" aria-controls="assignmentsTable" data-dt-idx="1" tabindex="0">1</a></li>
                                    <li class="paginate_button next disabled" id="assignmentsTable_next"><a href="#" aria-controls="assignmentsTable" data-dt-idx="2" tabindex="0"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-export"><em class="fa fa-download"></em> Export to CSV</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- PROTOTYPE ONLY -->

    <!-- /.modal -->
    <!-- /PROTOTYPE ONLY -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-53664464-1"></script>
    <!--  <script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-109972029-1');
</script> -->

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
    <script src="/scripts/dataTables.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/dataTables.rowReorder.min.js"></script>
    <script src="/scripts/prototype.datatables.js"></script>
    <!-- <script src="/scripts/hovercard.js"></script> -->
    <script src="/scripts/jquery.storageapi.js"></script>
    <script src="/scripts/classList.js"></script>
    <script src="/scripts/charts2.js"></script>
    <script src="/scripts/prototype.dashboard-manager.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="/scripts/jquery.ui.sortable.js"></script>
    <script src="/scripts/jquery.ui.touch-punch.min.js"></script>
    <script src="/scripts/portlet.js"></script>


    <script src="/scripts/anychart-base.js"></script>
    <script src="/scripts/anychart-ui.js"></script>
    <script src="/scripts/anychart-circular-gauge.js"></script>



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

        ga('create', 'UA-53664464-1', 'auto');

        ga('set', 'dimension1', '37543e1d-bed7-11dc-b2a6-000423af2193');
        ga('set', 'dimension2', 'Insight Institute: HealthStream Training');
        ga('set', 'dimension3', '099c5b94-a6cb-11de-8289-001517135511');
        ga('set', 'dimension4', 'Insight Institute');

        ga('send', 'pageview');
    </script>




</body>

</html>