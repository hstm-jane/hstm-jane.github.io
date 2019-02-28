<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>hStream Validate | HealthStream</title>
    <!-- Styles
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="content/styles/healthstream.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="content/styles/healthstream.plugins.css">
    <link rel="stylesheet" type="text/css" href="content/styles/healthstream.app.css">
    <link rel="stylesheet" type="text/css" href="content/styles/healthstream.prototype.css">
    <link rel="stylesheet" type="text/css" href="content/styles/healthstream.hstream.css">
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
        icons.setAttribute('href', 'content/styles/healthstream.icons.css');
        document.getElementsByTagName('head')[0].appendChild(icons);
    }
    </script>
    <!-- Feature Detection Using Modernizr
    ================================================== -->
    <script src="scripts/modernizr.js"></script>
    <style>

    </style>
</head>

<body class="hstream-chrome">
    <div class="site-header site-header--assessments">
        <div class="container">
            <a href="#" class="trigger-open trigger-open-header"><i class="fa fa-bars"></i><span>Menu</span></a>
            <div class="branding">
                <div>
                    <a href="/">
                         <img src="content/images/hStream-FINAL_Validate.png" style="width:367px;">
                        </a>
                </div>
            </div>
            <!-- /nav-account -->
        </div>
        <!-- /container -->
        <nav class="nav-main">
            <div class="container">
                <ul id="nav" class="nav">
                    <!--Overview-->
                    <li class="active"><a href="#">Nav Item #1</a></li>
                    <li class=""><a href="#">Nav Item #2</a></li>
                    <li class=""><a href="#">Nav Item #3</a></li>
                    <li class=""><a href="#">Nav Item #4</a></li>
                    <li class="app-drawer-container-newstyle">
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
                                    <ellipse class="cls-2" cx="151" cy="153.5" rx="147" ry="149.5"> </ellipse>
                                    <ellipse class="cls-1" cx="600" cy="153.5" rx="147" ry="149.5"> </ellipse>
                                    <ellipse class="cls-2" cx="600" cy="599.5" rx="147" ry="149.5"> </ellipse>
                                    <ellipse class="cls-2" cx="151" cy="600.5" rx="147" ry="149.5"> </ellipse>
                                    <ellipse class="cls-2" cx="151" cy="1050.5" rx="147" ry="149.5"> </ellipse>
                                    <ellipse class="cls-1" cx="600" cy="1050.5" rx="147" ry="149.5"> </ellipse>
                                    <ellipse class="cls-2" cx="1049" cy="1050.5" rx="147" ry="149.5"> </ellipse>
                                    <ellipse class="cls-2" cx="1049" cy="599.5" rx="147" ry="149.5"> </ellipse>
                                    <ellipse class="cls-2" cx="1049" cy="153.5" rx="147" ry="149.5"> </ellipse>
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

                                <div class="app-drawer-content-panel">
                                    <ul class="app-drawer-nav-item">
                                        <li class="app-drawer-nav-item">
                                            <a target="href=&quot;javascript:void(0)&quot;" id="h_stream_validate_menu_item" data-token-url="https://portalclient.echo-cloud.com/services/hstreamValidate/api/GenerateToken" data-hstream-validate-url="https://portalclient.echo-cloud.com/services/hstreamValidate?token=">

                                                <div class="app-drawer-nav-item-logo">
                                                    <div class="svg-icon-wrap">
                                                        <img src="content/images/hstream-validate-logo.png" alt="hStream Validate" title="hStream Validate">
                                                    </div>

                                                </div>
                                                    <h5 class="title">Validate</h5>

                                            </a>
                                        </li>
                                        <li class="app-drawer-nav-item">
                                            <a target="_blank" href="https://controlcenter-dev.healthstream.com/hstmcf?orgId=8d99b1d7-366a-4403-955c-09b1c919e98c&amp;orgNodeId=adbf6cad-fb4d-4dee-89d4-80ffd0affa4d&amp;application=Student">
                                                <div class="app-drawer-nav-item-logo">
                                                    <div class="svg-icon-wrap">
                                                        <img src="content/images/hstream-monitor-logo.png" alt="hStream Monitor" title="hStream Monitor">
                                                    </div>

                                                </div>
                                                    <h5 class="title">Monitor</h5>

                                            </a>
                                        </li>
                                        <li class="app-drawer-nav-item">
                                            <a target="_blank" href="/HSAPP/ThirdPartyApplications/COISmart?Area=">
                                                <div class="app-drawer-nav-item-logo">
                                                    <div class="svg-icon-wrap">
                                                        <img src="content/images/coi-logo-9-box.png" alt="COI Smart" title="COI Smart">
                                                    </div>

                                                </div>
                                                    <h5 class="title">COI Smart</h5>

                                            </a>
                                        </li>

                                        <li class="app-drawer-nav-item">
                                            <a target="_blank" href="http://www.healthstream.com/HSAPP/Compensation?Area=">
                                                <div class="app-drawer-nav-item-logo">
                                                    <div class="svg-icon-wrap">
                                                        <img src="content/images/compensation-9-box.png" alt="Compensation" title="Compensation">
                                                    </div>

                                                </div>
                                                    <h5 class="title">Compensation </h5>

                                            </a>
                                        </li>
                                        <li class="app-drawer-nav-item">
                                            <a target="_blank" href="http://www.healthstream.com/HSAPP/StayInterview?Area=">
                                                <div class="app-drawer-nav-item-logo">
                                                    <div class="svg-icon-wrap">
                                                        <img src="content/images/stay-interview-9-box.png" alt="Stay Interviews" title="Stay Interviews">
                                                    </div>

                                                </div>
                                                    <h5 class="title">Stay Interviews </h5>

                                            </a>
                                        </li>
                                        <li class="app-drawer-nav-item">
                                            <a target="_blank" href="http://www.healthstream.com/HSAPP/Compensation?Area=">
                                                <div class="app-drawer-nav-item-logo">
                                                    <div class="svg-icon-wrap">
                                                        <img src="content/images/knowledge-portal-9-box.png" alt="HR Knowledge" title="HR Knowledge">
                                                    </div>

                                                </div>
                                                    <h5 class="title small-font">KnowledgeSource</h5>

                                            </a>
                                        </li>
                                        <li class="app-drawer-nav-item">
                                            <a target="_blank" href="http://www.healthstream.com/HSAPP/TotalRewards?Area=">
                                                <div class="app-drawer-nav-item-logo">
                                                    <div class="svg-icon-wrap">
                                                        <img src="content/images/total-rewards-9-box.png" alt="Total Rewards" title="Total Rewards">
                                                    </div>

                                                </div>
                                                    <h5 class="title">Total Rewards </h5>

                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </li>
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
    <div class="layout ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="section section-box section-main " style="">
                        <h1>Content Goes Here!!</h1>
                        <p>This framework uses embeddable fonts. For text, <a href="http://www.fontsquirrel.com/fonts/open-sans" target="new">Open Sans</a>, and Icons are handled by <a href="http://fortawesome.github.io/Font-Awesome/icons/">Font Awesome</a>.</p>
                        <br/>
                        <br/>
                        <h2>Typography:</h2>
                        <hr/>
                        <h1>Header 1</h1>
                        <h2>Header 2</h2>
                        <h3>Header 3</h3>
                        <h4>Header 4</h4>
                        <h5>Header 5</h5>
                        <p>This is a paragraph of text</p>
                        <br/>
                        <br/>
                        <h3>Sample Buttons:</h3>
                        <hr/>
                        <div>Normal size:
                            <button type="button" class="btn btn-default">Mark as False Positive</button>
                        </div>
                        <br>
                        <div>Small size:
                            <button type="button" class="btn btn-sm btn-default">Mark as False Positive</button>
                        </div>
                        <br/>
                        <br/>
                        <h3>Alert Widgets:</h3>
                        <hr/>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <!-- START widget-->
                                <div class="panel panel-primary">
                                    <a href="#modal-alerts" data-toggle="modal" class="modal-alerts">
                                        <div class="alert-text">
                                            <p class="m0 panel-title">OIG Alerts</p>
                                        </div>
                                        <div class="text-right right-box alert-value">
                                            26
                                            <div class="alert-value-meta">alerts</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <!-- START widget-->
                                <div class="panel panel-danger">
                                    <a href="#modal-alerts" data-toggle="modal" class="panel-heading modal-alerts">
                                        <div class="alert-text">
                                            <p class="m0 panel-title">SAM Alerts</p>
                                        </div>
                                        <div class="text-right right-box alert-value">
                                            12
                                            <div class="alert-value-meta">alerts</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <!-- START widget-->
                                <div class="panel panel-green">
                                    <a href="#modal-alerts" data-toggle="modal" class="panel-heading modal-alerts">
                                        <div class="alert-text">
                                            <p class="m0 panel-title">Open Payment Alerts</p>
                                        </div>
                                        <div class="text-right right-box alert-value">
                                            13
                                            <div class="alert-value-meta">alerts</div>
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
            <div class="legal">
                <div class="divider"></div>
                <div class="logo"><img src="./content/images/logo-healthstream-small.png" alt="HealthStream"></div>
                <div class="copyright">Copyright &copy; 2017 HealthStream, Inc. All Rights Reserved.</div>
            </div>
        </div>
    </div>
    <script src="scripts/jquery.js"></script>
    <script src="scripts/bootstrap.plugins.js"></script>
    <script src="scripts/healthstream.js"></script>
    <script src="scripts/healthstream.jquery.js"></script>
    <script src="scripts/healthstream.focusbar.js"></script>
    <script src="scripts/healthstream.utilities.applauncher.js"></script>
    <script>
        $(function() {
            HealthStream.utilities.applauncher();
        });
    </script>
</body>

</html>