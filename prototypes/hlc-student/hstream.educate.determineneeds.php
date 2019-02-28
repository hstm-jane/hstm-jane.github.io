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

        .site-header {
            border-bottom: 1px solid #005b79 !important;
        }

        .layout {
            border-top: 5px solid #007aa3;
            /*border-top:5px solid #005b79 !important;*/
        }

        .focus {
            background-color: #007aa3;
            border-top: 5px solid #005b79 !important;
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

        .section-box {
            padding-top: 30px;
        }

        .question {
            padding-left: 20px;
            color: #777;
            border-bottom:dashed #ddd 1px;
            padding-bottom:20px;
            margin-bottom:20px;
        }
        .question .question-number {
           color:#52aeac;
           font-size:14px;
           border:2px solid #52aeac;
           border-radius: 50%;
           /*padding:20px;*/
           text-align: center;
           line-height:30px;
           width:35px;
           height:35px;
           float:left;
           margin-right:10px;
           font-weight:600;
        }

        .question .title {
            color: #555;
            font-weight: 500;
            padding-top:5px;
        }
        h1 {
            padding-left:20px;
            padding-bottom:20px;
        }
        </style>
    </head>

    <body>
        <div class="site-header site-header--assessments">
            <div class="container">
                <a href="#" class="trigger-open trigger-open-header"><i class="fa fa-bars"></i><span>Menu</span></a>
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
                            <h1>Clinical Education Survey</h1>
                            <form>
                                <div class="question">
                                    <div class="form-group" style="font-size:18px;">
                                        <div class="question-number">1</div>
                                        <div class="title">
                                            What is your annual Clinical Education budget?
                                        </div>
                                    </div>
                                    <div style="margin-left:50px;">
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                                    < $500,000 </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> $500,000 - $1,000,000
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="radio disabled">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"> $1,000,000 - $3,000,000
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="radio ">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"> > $3,000,000
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="question">

                                    <div class="form-group title" style="font-size:18px;">
                                            <div class="question-number">2</div>
                                            <div class="title">
                                        For how many employees are you buying training?

                                            </div>
                                        </div>
                                        <div style="margin-left:50px;">
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                                    < 50 </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> 50 - 500
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> 500 - 1,000
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> 1,000 - 5,000
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="radio ">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"> > 5,000
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="question">
                                    <div class="form-group title" style="font-size:18px;">
                                        <div class="question-number">3</div>
                                            <div class="title">
                                        In what areas do you prioritize your training?


                                            </div>
                                        </div>
                                        <div style="margin-left:50px;">
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> Nurse Communication
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Skills and Decision Support
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Advanced Practice
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Leadership Development
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="radio ">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"> Continuing Education
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="question">
                                    <div class="form-group title" style="font-size:18px;">
                                        <div class="question-number">4</div>
                                            <div class="title">
                                        Over the next 18 months, what do you expect to be your greatest concerns/challenges at your facility?



                                            </div>
                                        </div>
                                        <div style="margin-left:50px;">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1"> Patient experience/satisfaction
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2"> Workforce training and development
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2"> Workforce retention
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2"> Patient Safety
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox ">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios3" value="option3"> Reducing readmission
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox ">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios3" value="option3"> Population health management
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox ">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios3" value="option3"> Compliance risk
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox ">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios3" value="option3"> Revenue cycle management
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox ">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios3" value="option3"> Hospital acquired conditions
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox ">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios3" value="option3"> Credentialing and provider enrollment
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary">Submit</button>
                            </form>
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