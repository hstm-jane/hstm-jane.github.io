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

        .layout {
            /*border-top: 5px solid #007aa3;*/
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
        .focus {
            background-color:#007aa3;
            border-top:5px solid #005b79 !important;
        }
        .fph-separator {
          background: #078fbd !important;
        }
        .focus-pageheader .fph-icon {
          background: #078fbd !important;
        }

        .focus-pageheader .fph-separator, .focus-pageheader .fph-icon {
            border-color:#009ace;
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
                        <a href="#" class="alerts"><span class="badge">3</span></a>
                        <?php include ('hstream.educate.institution.php'); ?>
                        <div class="logout"><a href="#">Logout</a></div>
                        <a href="#" class="trigger-open trigger-open-account"><i class="fa fa-angle-down"></i></a>
                        <a href="#" class="trigger-close"><i class="fa fa-times"></i></a>
                        <ul class="nav">
                            <li><a href="#">Account Settings</a></li>
                            <li class="hide-header-open"><a href="#">Manage Password</a></li>
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
           <div class="focus focus-pageheader">
        <div class="fph-separator"></div>
        <div class="fph-table"> <div class="fph-row">
        <div class="fph-cell fph-cell-search-label">
        <h1>Discover</h1> </div>
        <div class="fph-cell fph-cell-search-input">
        <form class="primary">
        <div class="input-group">
        <input type="text" class="form-control input-lg" placeholder=""  value="nurse communication">
         <span class="input-group-btn">
        <a href="#" class="btn btn-focus btn-lg" type="button"><i class="fa fa-search fa-lg"></i></a>
        </span></div></form></div>

        </div>

        </div>
        </div>
        <div class="layout layout-search">
            <div class="container">
                <!--
               <section class="section section-carousel hidden-print slick-initialized slick-slider">
                   <div class="slick-list draggable" tabindex="0"><div class="slick-track" style="opacity: 1; width: 4224px; transform: translate3d(-1152px, 0px, 0px);"><div class="slick-slide slick-cloned" style="width: 384px;">
                       <div class="hs-item">
                           <div class="hs-item-image" style="background-image:url('/content/images/catalog-Connect2Know.png');"></div>
                           <div class="hs-item-text">
                               <h2>Connect2Know <small>Wound Care Resource Center</small></h2>
                               <i class="fa fa-chevron-right"></i>
                           </div>
                           <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
                       </div>
                   </div><div class="slick-slide slick-cloned" style="width: 384px;">
                       <div class="hs-item">
                           <div class="hs-item-image" style="background-image:url('/content/images/catalog-talenttracks.jpg');"></div>
                           <div class="hs-item-text">
                               <h2>TalentTracks <small>Curated Leadership Development</small></h2>
                               <i class="fa fa-chevron-right"></i>
                           </div>
                           <a href="talenttracks-hybrid-new.php" class="hs-item-link"></a>
                       </div>
                   </div><div class="slick-slide slick-cloned" style="width: 384px;">
                       <div class="hs-item">
                           <div class="hs-item-image" style="background-image:url('/content/images/catalog-template.png');"></div>
                           <div class="hs-item-text">
                               <h2>Feature #5 <small>with additional text</small></h2>
                               <i class="fa fa-chevron-right"></i>
                           </div>
                           <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
                       </div>
                   </div><div class="slick-slide slick-active" style="width: 384px;">
                       <div class="hs-item">
                           <div class="hs-item-image" style="background-image:url('/content/images/catalog-CE-Center.jpg');"></div>
                           <div class="hs-item-text">
                               <h2>CE Center for You <small>Unlimited Access to Education</small></h2>
                               <i class="fa fa-chevron-right"></i>
                           </div>
                           <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
                       </div>
                   </div><div class="slick-slide slick-active" style="width: 384px;">
                       <div class="hs-item">
                           <div class="hs-item-image" style="background-image:url('/content/images/catalog-OneSource.png');"></div>
                           <div class="hs-item-text">
                               <h2>OneSource <small>Medical Product Training</small></h2>
                               <i class="fa fa-chevron-right"></i>
                           </div>
                           <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
                       </div>
                   </div><div class="slick-slide slick-active" style="width: 384px;">
                       <div class="hs-item">
                           <div class="hs-item-image" style="background-image:url('/content/images/catalog-Connect2Know.png');"></div>
                           <div class="hs-item-text">
                               <h2>Connect2Know <small>Wound Care Resource Center</small></h2>
                               <i class="fa fa-chevron-right"></i>
                           </div>
                           <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
                       </div>
                   </div><div class="slick-slide" style="width: 384px;">
                       <div class="hs-item">
                           <div class="hs-item-image" style="background-image:url('/content/images/catalog-talenttracks.jpg');"></div>
                           <div class="hs-item-text">
                               <h2>TalentTracks <small>Curated Leadership Development</small></h2>
                               <i class="fa fa-chevron-right"></i>
                           </div>
                           <a href="talenttracks-hybrid-new.php" class="hs-item-link"></a>
                       </div>
                   </div><div class="slick-slide" style="width: 384px;">
                       <div class="hs-item">
                           <div class="hs-item-image" style="background-image:url('/content/images/catalog-template.png');"></div>
                           <div class="hs-item-text">
                               <h2>Feature #5 <small>with additional text</small></h2>
                               <i class="fa fa-chevron-right"></i>
                           </div>
                           <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
                       </div>
                   </div><div class="slick-slide slick-cloned" style="width: 384px;">
                       <div class="hs-item">
                           <div class="hs-item-image" style="background-image:url('/content/images/catalog-CE-Center.jpg');"></div>
                           <div class="hs-item-text">
                               <h2>CE Center for You <small>Unlimited Access to Education</small></h2>
                               <i class="fa fa-chevron-right"></i>
                           </div>
                           <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
                       </div>
                   </div><div class="slick-slide slick-cloned" style="width: 384px;">
                       <div class="hs-item">
                           <div class="hs-item-image" style="background-image:url('/content/images/catalog-OneSource.png');"></div>
                           <div class="hs-item-text">
                               <h2>OneSource <small>Medical Product Training</small></h2>
                               <i class="fa fa-chevron-right"></i>
                           </div>
                           <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
                       </div>
                   </div><div class="slick-slide slick-cloned" style="width: 384px;">
                       <div class="hs-item">
                           <div class="hs-item-image" style="background-image:url('/content/images/catalog-Connect2Know.png');"></div>
                           <div class="hs-item-text">
                               <h2>Connect2Know <small>Wound Care Resource Center</small></h2>
                               <i class="fa fa-chevron-right"></i>
                           </div>
                           <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
                       </div>
                   </div></div></div>




               <button type="button" class="slick-prev" style="display: block;">Previous</button><button type="button" class="slick-next" style="display: block;">Next</button></section>
 -->
                <section class="section section-main section-box">
                    <div class="row">
                        <div class="col-md-3 hidden-xs hidden-sm">
                            <section class="section section-refinement-options equalized" data-equalize="layout-columns" style="min-height: 2221px;">
                                <div id="large-screen-filter">
                                    <section class="section" id="filter-pills">
                                        <h2>Filter</h2>
                                        <ul class="list-unstyled">
                                            <li id="lstkeyword" data-pill="search">
                                                <a class="tag" href="#" data-keyword="communication"> communication<i class="fa-times fa" id="keyword"></i></a>
                                            </li>
                                            <li id="lstkeywordCategory" data-pill="category">
                                            </li>
                                        </ul>
                                    </section>
                                    <div id="category-results">
                                        <nav class="catalog-categories">
                                            <h3>Categories</h3>
                                            <div id="catagory-list">
                                                <ul id="category-list-container">
                                                    <li class="cs-item">
                                                        <a href="#" data-categoryname="Specialty" data-coursecount="27">
                                                            <div class="cc-col">Specialty (27)</div>
                                                            <div class="cc-col cc-col-icon"><i class="fa-chevron-right fa"></i></div>
                                                        </a>
                                                    </li>
                                                    <li class="cs-item">
                                                        <a href="#" data-categoryname="Accreditation Body" data-coursecount="24">
                                                            <div class="cc-col">Accreditation Body (24)</div>
                                                            <div class="cc-col cc-col-icon"><i class="fa-chevron-right fa"></i></div>
                                                        </a>
                                                    </li>
                                                    <li class="cs-item">
                                                        <a href="#" data-target="CategoryBrowser" data-categoryname="Allied Health Disciplines" data-coursecount="9">
                                                            <div class="cc-col">Allied Health Disciplines (9)</div>
                                                            <div class="cc-col cc-col-icon"><i class="fa-chevron-right fa"></i></div>
                                                        </a>
                                                    </li>
                                                    <li class="cs-item">
                                                        <a href="#" data-categoryname="Clinical Topics" data-coursecount="9">
                                                            <div class="cc-col">Clinical Topics (9)</div>
                                                            <div class="cc-col cc-col-icon"><i class="fa-chevron-right fa"></i></div>
                                                        </a>
                                                    </li>
                                                    <li class="cs-item">
                                                        <a href="#" data-categoryname="Cert Prep" data-coursecount="8">
                                                            <div class="cc-col">Cert Prep (8)</div>
                                                            <div class="cc-col cc-col-icon"><i class="fa-chevron-right fa"></i></div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="limit-height-link">
                                                    <a href="#">Show More<i class="fa-fw fa-caret-down fa"></i></a>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-9">
                            <section class="section">
                                <h2>Results <small>Showing 1 - 20 of 28</small></h2>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">A Literature Review of Preferences for End-of-Life Care in Developed Countries by Individuals With Different Cultural Affiliations and Ethnicity - 20-213768</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">CE:</span><span class="meta-value">3.00 Hour(s)</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> Lippincott – Wolters Kluwer Health</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="#">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>To familiarize the registered professional nurse with a review of the literature designed to explore end-of-life (EOL) issues related to culture and decision-making processes.</p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">Alcohol Dependence in Acute Withdrawal (Case Study) - 20-531753</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">CE:</span><span class="meta-value">1.00 Hour(s)</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> Lippincott Professional Development</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="#">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>This case study focuses on caring for Jennifer Wright, a 35-year-old client with a diagnosis of alcoholism. The clinical scenario takes place in a psychiatric intensive care unit. Jennifer's treatment requires nursing care that focuses on physiological sta</p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="hstream.educate.course.php?org=<?= $org ?>">Communication and Culture - HS-DM-mcm02</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">CE:</span><span class="meta-value">1.00 - 1.10 Hour(s)</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online, Evaluation</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> DigitalMed</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="hstream.educate.course.php?org=<?= $org ?>">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>The ability to provide and elicit accurate information is one of the foundations of sensitive and successful healthcare. In our multicultural society, effective cross-cultural communication is an essential component of good healthcare. Communication is not</p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">Borderline Personality Disorder (Case Study) - 20-531757</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">CE:</span><span class="meta-value">1.00 Hour(s)</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online, Evaluation</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> Lippincott – Wolters Kluwer Health</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="#">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>This case study focuses on caring for Harvey Thompson, a client who suffers from borderline personality disorder (BPD). The clinical scenario takes place in the inpatient unit of an acute psychiatric mental health hospital. Harvey's treatment for his curre</p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">Crisis Intervention - 20-486205</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">CE:</span><span class="meta-value">1.00 Hour(s)</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> Lippincott Professional Development</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="#">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>The Crisis Intervention course eeducates nursing professionals about the skills, concepts, and techniques needed to handle disruptive individuals. The course defines behaviors that could lead to a crisis, techniques to handle a crisis, and steps to debrief</p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">Effective Communication Between Registered Nurses and Adult Oncology Patients in Inpatient Settings - 20-404734</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">CE:</span><span class="meta-value">1.00 Hour(s)</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> Lippincott – Wolters Kluwer Health</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="#">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>To provide information on the factors affecting effective communication between registered nurses (RNs) and adult oncology patients in inpatient settings.</p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">Effective Communication with Patients - CC00325</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">CE:</span><span class="meta-value">0.50 Hour(s)</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> Lippincott Professional Development</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="#">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>The Effective Communication with Patients course provides an overview of this essential component of quality care and patient safety. Effective communication is linked to increased patient satisfaction, better adherence to treatment recommendations, and im</p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">Effective Handoff Communication - 20-426815</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">CE:</span><span class="meta-value">1.50 - 1.80 Hour(s)</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> Lippincott – Wolters Kluwer Health</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="#">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>To provide an overview of handoff communication in healthcare.</p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">EMR Documentation: Basics - CC00230</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">CE:</span><span class="meta-value">0.50 Hour(s)</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> Lippincott Professional Development</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="#">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>The EMR Documentation: Basics course provides an overview of EMR in relation to the regulations and policies set by the Department of Health and Human Services (HHS) for its implementation; the purpose, benefits, and barriers to EMR use; and an example of </p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">Health Literacy - CC00324</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">CE:</span><span class="meta-value">0.50 Hour(s)</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> Lippincott Professional Development</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="#">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>Health Literacy: This course discusses the issue of health literacy. Patients with low health literacy may have great difficulty understanding their health information, participating in treatment decisions, and following through with treatment plans. The c</p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">Heart Failure, Decompensated (Case Study) - 20-598570</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">CE:</span><span class="meta-value">1.00 Hour(s)</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> Lippincott Professional Development</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="#">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>Heart Failure, Decompensated (Case Study): This case study describes the care of a patient experiencing decompensated heart failure. It provides an interactive approach to learning how to perform patient assessments, identify nursing problems, and choose a</p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">HIPAA: Putting Prevention Strategies into Practice - CC176</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">CE:</span><span class="meta-value">0.50 Hour(s)</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> Lippincott Professional Development</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="#">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>This HIPAA: Putting Prevention Strategies into Practice course supplements the overview provided by the corporate mandatory content, emphasizing practical considerations to prevent HIPAA violations. A discussion regarding the severity of penalties and mean</p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">Ischemic Stroke Management, Acute (Case Study) - 20-532021</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">CE:</span><span class="meta-value">1.00 Hour(s)</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> Lippincott Professional Development</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="#">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>Ischemic Stroke Management, Acute (Case Study): This case study describes current therapeutic care for the patient with the diagnosis of acute stroke.</p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">Mandatory, Behavioral Health – Understanding the Middle Childhood Patient - CC122</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> Lippincott Professional Development</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="#">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>This course, designed for personnel working in behavioral health care environments, covers the basics of patient care for middle childhood patients, children ages 6 to 11. Topics covered include physical development (including health concerns faced by the </p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">Mental Health Assessment - 20-562558</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">CE:</span><span class="meta-value">1.00 Hour(s)</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> Lippincott Professional Development</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="#">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>The Mental Health Assessment course will discuss how to perform a mental health assessment, including how to establish a therapeutic relationship; how to recognize coping mechanisms, disturbed thought processes and thought content, and perception abnormali</p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">Nursing Peer Review - CC00304</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">CE:</span><span class="meta-value">0.50 Hour(s)</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> Lippincott Professional Development</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="#">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>The Nursing Peer Review course provides an overview of the nursing peer review process. It examines how peer review fosters a professional practice environment and provides a way to increase nurses’ accountability in following evidence-based standards and </p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">Obtaining a Health History - 20-538781</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">CE:</span><span class="meta-value">1.00 Hour(s)</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> Lippincott Professional Development</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="#">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>The Obtaining a Health History course discusses how to obtain a health history, including techniques for communicating with your patient and specific questions to ask during a health assessment interview.</p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">Patient- and Family-Centered Care - CC00272</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">CE:</span><span class="meta-value">0.50 Hour(s)</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> Lippincott Professional Development</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="#">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>The Patient- and Family-Centered Care course provides an overview of patient- and family-centered care, including the core concepts of dignity and respect, information sharing, involvement, and collaboration. The course also discusses family engagement, cu</p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">Pediatric Nursing Competency Evaluation: Essentials - CC00253</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> Lippincott Professional Development</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="#">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>The Pediatric Nursing Competency Evaluation: Essentials is for use by health care institutions to evaluate, track, and report competency levels of professional nurses employed in specialty care settings. This competency evaluation consists of 10 clinical s</p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                                <div class="slat" data-filter-category="0">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">Perspectives on Prevention: Overview - CNE 1.5 Contact Hour(s)</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Course</span></li>
                                            <li><span class="meta-label">CE:</span><span class="meta-value">1.50 Hour(s)</span></li>
                                            <li><span class="meta-label">Activities:</span><span class="meta-value">Online, Test, Evaluation, Course Attachment</span></li>
                                            <li><span class="meta-label">Publisher:</span><span class="meta-value"> HealthStream</span></li>
                                        </ul>
                                        <div class="action"><a class="btn btn-sm btn-default" href="#">Info <i class="visible-xs fa-fw fa-info fa"></i></a></div>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>“Perspectives on Prevention: Overview” discusses threats to the patient’s skin integrity that occur in each department throughout their hospital stay. The hospital wound nurse rounds with the individual unit skin champions to present the risks in the ED, </p>
                                            </section>
                                        </div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div>
                                </div>
                            </section>
                </section>
                </div>
                <!-- /column -->
                </div>
                <!-- /row -->
                </section>
            </div>
            <!-- /container -->
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