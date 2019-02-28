<?php
$persona = (!empty($_GET['persona']))?intval($_GET['persona']):1;
$org = (!empty($_GET['org']))?intval($_GET['org']):'0';
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Basic Page Needs
    ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>hStream Educate | HealthStream</title>
        <!-- Styles
    ================================================== -->
        <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.bootstrap.css?cache=1508080580">
        <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.plugins.css?cache=1508080580">
        <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.app.css?cache=1508080580">
        <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.prototype.css?cache=1508080580">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <style>
        .focus {
            background-color: #007aa3;
            border-top: 5px solid #005b79;
            color: #fff;
        }

        iframe {

            overflow: hidden !important;
            border: 0px !important;
        }

        .section-box {
            padding: 0px !important;
        }
        </style>
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
        .site-header .nav-main .app-drawer-container .app-drawer-icon {
            height: 47px;
        }

        .layout {
            border-top: 5px solid #007aa3;
        }

        .site-header .nav-main .nav>li.active>a,
        .site-header .nav-main .nav>li.active>a:hover {
            background: #007aa3;
            color: #fff;
            /*font-weight:300;*/
        }

        .site-header .nav-main .nav>li>a {
            /*color:#fff;*/
            /* font-weight:400;*/
        }

        .site-header .nav-main .nav>li>a:hover {
            background: #007aa3;
            color: #fff;
            /*font-weight:300;*/
        }

        .site-header .nav-main .nav>li.open.active>a,
        .site-header .nav-main .nav>li.open.active>a:hover,
        .site-header .nav-main .nav>li.open>a,
        .site-header .nav-main .nav>li.open>a:hover {
            background: #007aa3;
            color: #fff;
            /*font-weight:300;*/
        }


        .site-header .nav-main .app-drawer-container .app-drawer-icon .label {
            /*color:#fff;*/
        }

        .site-header .nav-main .app-drawer-container .app-drawer-icon:hover {
            background: #007aa3;
        }

        .site-header .nav-main .app-drawer-container.active .app-drawer-icon {
            background: #007aa3;
        }

        .nav-main .nav li {
            font-size: 14px;
            line-height: 1.42857143;
            color: #333
        }

        .nav-main .nav {
            margin-left: 0px;
        }
        </style>
    </head>

    <body>
        <div class="site-header site-header--assessments">
            <div class="container">
                <div class="branding" style="display:table;">
                    <div style="display:table-cell;">
                        <a href="/">
                            <img src="content/images/hstream-logo.png" alt="HealthStream" class="logo-large" style="width:200px;">
                            <!-- <img src="/content/images/ePortfolio_Logo.png" alt="HealthStream" class="logo-small"> -->
                            <!-- <img src="content/images/hstream-logo.png " style="width:45px; height:25px;padding-left:5px; padding-top:17px; "  alt="HLC "> -->
                        </a>
                    </div>
                    <div style="display:table-cell;font-size:28px; padding-bottom:10px;margin-left:15px;vertical-align:bottom;color:#000;">
                        <span style="border-left:1px solid black;margin-left:20px;padding-left:10px;">Educate</span>
                    </div>
                </div>
                <nav class="nav-account">
                    <?php
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
                                                  $pattern_config = 'patterns.config.php';
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
                       <?php include ('hstream.educate.institution.php'); ?>
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
                   <?php include ('hstream.educate.nav.php'); ?>
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
        <!-- <div class="focus focus-pageheader">
            <div class="fph-separator"></div>
            <div class="fph-table">
                <div class="fph-row">
                    <div class="fph-cell fph-cell-text">
                        <div class="fph-primary">
                            <h1>Educate</h1>
                        </div>

                    </div>

                </div>
            </div>
        </div> -->
        <div class="layout ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <section class="section section-box section-main ">
                            <!-- <h1>[Impact Report will go here.  Kerry will provide.]</h1> -->
                            <?php
                            if ($org == '0') {

                                //org = hca
                                echo '<iframe src="hstream.educate.impact.hca.php" style="width:100%;height:3660px" id="reportFrame"></iframe>';

                            }
                            else if ($org == '1') {
                                //org = chs
                                echo '<iframe src="hstream.educate.impact.chs.php" style="width:100%;height:3677px" id="reportFrame"></iframe>';

                            }
                            else if ($org == '2') {
                                echo '<iframe src="hstream.educate.impact.ascension.php" style="width:100%;height:3677px" id="reportFrame"></iframe>';
                            }
                            else if ($org == '3') {
                                echo '<iframe src="hstream.educate.impact.mainline.php" style="width:100%;height:3674px " id="reportFrame"></iframe>';
                            }
                            ?>
                                <!-- <iframe src="http://hcahps.healthstream.com/hospital/440161/details/2017/3" style="width:100%;height:4053px" id="reportFrame"></iframe> -->
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