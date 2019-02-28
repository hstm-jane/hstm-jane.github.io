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
        <title>hStream ePortfolio | HealthStream</title>
        <!-- Styles
    ================================================== -->
        <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.bootstrap.css?cache=1508080580">
        <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.plugins.css?cache=1508080580">
        <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.app.css?cache=1508080580">
        <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.prototype.css?cache=1508080580">
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
        .focus{
            background-color: #487AA3;
            border-top: 5px solid #3a6282;
            color: #fff;
        }

        .focus-pageheader .fph-separator {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 5px;
            border-top: 1px solid #799ebc;
            background-image: -webkit-linear-gradient(top,#638eb1 0,#769bba 100%);
            background-image: linear-gradient(to bottom,#638eb1 0,#769bba 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff638eb1', endColorstr='#ff769bba', GradientType=0);
        }

        .site-header {
            background: #fff;
            border-top: 3px solid #487AA3;
            position: relative;
            z-index: 400;
        }

        nav.nav-focus {
            margin-bottom: 0;
        }

        nav.nav-focus .nav li.active i, nav.nav-focus .nav li:hover.active i {
            display: block;
            color: #769bba;
        }

        .modal-wizard-body {
            padding: 0;
        }

        @-webkit-keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @-webkit-keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; }
        }

        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; }
        }

        .work-experience-save-experience,
        .education-save-experience,
        .licenses-save-experience,
        .certifications-save-experience,
        .resucitation-programs-save-experience,
        .activities-save-experience,
        .committee-work-save-experience,
        .memberships-save-experience,
        .publications-save-experience,
        .committee-work-membership-experience,
        .awards-save-experience,
        .other-save-experience,
        .memberships-committee-work-experience,
        .teaching-save-experience
        {
            display: none;
            -webkit-animation: fadeOut 1s;
            animation: fadeOut 1s;
        }

        .show {
            display: block;
            -webkit-animation: fadeIn 1s;
            animation: fadeIn 1s;
        }

        label.radio-inline {
            display: inline-block;
        }

        .modal-footer.alt, .irb-options  {
            display: none;
        }




        /*Hack for eportfolio*/


        .site-footer .links{
            display:none;
        }
        /*.col-md-3 .section-sidebar .section-box:last-of-type {
        display:none;
        }
        */
        /*.institution{
            display:none;
        }*/
        </style>
    </head>

    <body>
        <div class="site-header site-header--assessments">
            <div class="container">
                    <a href="#" class="trigger-open trigger-open-header"><i class="fa fa-bars"></i><span>Menu</span></a>
                    <div class="branding">
                        <a href="/">
                            <img src="/content/images/logo_ePortfolio.svg" alt="HealthStream" class="logo-large">
                            <img src="/content/images/ePortfolio_Logo.png" alt="HealthStream" class="logo-small">
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
                        <div class="institution">ePortfolio</div>
                        <div class="logout"><a href="#">Logout</a></div>
                        <a href="#" class="trigger-open trigger-open-account"><i class="fa fa-angle-down"></i></a>
                        <a href="#" class="trigger-close"><i class="fa fa-times"></i></a>
                        <ul class="nav">
                            <li><a href="/account-settings.php">Account Settings</a></li>
                <li class="hide-header-open"><a href="/account-settings.php?view=password">Manage Password</a></li>
                <li><a href="/alerts.php">Alerts <span class="badge">3</span></a></li>
                <li class="hide-header-open logout"><a href="#">Logout</a></li>
                        </ul>
                    </nav><!-- /nav-account -->
                </div>
            <!-- /container -->
            <nav class="nav-main">
                <div class="container">
                  <ul id="nav" class="nav">
                                   <li class=""><a href="#" style="display: none;">Connections</a></li>
                                   <li class=""><a href="#" style="display: none;">To Do</a></li>
                                   <li class="active"><a href="#">Profile</a></li>
                                   <li class=""><a href="/completed.2.php">Transcript</a></li>
                                   <li class=""><a href="#">Help</a></li>
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
        <div class="focus focus-pageheader">
            <div class="fph-separator"></div>
            <div class="fph-table">
                <div class="fph-row">
                    <div class="fph-cell fph-cell-text">
                        <div class="fph-primary">
                            <h1>Profile</h1>
                        </div>

                    </div>

                </div>
            </div>
        </div>
       <div class="layout ">
           <div class="container">
               <div class="row">
                   <div class="col-md-9">
                       <section class="section section-box section-main ">
                           <nav class="nav-focus">
           <div class="nav-mobile">
               <span><i class="fa fa-caret-down"></i><span>Professional</span></span> <a href="#nav-main" class="toggle"><i class="fa fa-bars"></i></a></div>
           <ul class="nav">
               <li><a href="#tab-1"><i class="fa fa-caret-down"></i>Personal</a></li><li class="active"><a href="#tab-2"><i class="fa fa-caret-down"></i>Professional</a></li><li><a href="#tab-3"><i class="fa fa-caret-down"></i>Documents</a></li>
           </ul>
       </nav>
                           <div class="tab-content">

                               <div class="tab-pane fade" id="tab-1">


                                   <h2>Personal Information</h2>
                                   <form>
                                       <div class="row">
                                           <div class="col-md-8">
                                               <div class="form-group">
                                                   <label class="control-label">Country</label>
                                                   <select id="inputCountry" class="form-control">
                                                       <option>United States</option>
                                                       <option>Canada</option>
                                                       <option>Australia</option>
                                                       <option>...</option>
                                                       <option>...</option>
                                                   </select>
                                               </div>
                                               <div class="form-group">
                                                   <label class="control-label">Address 1</label>
                                                   <input type="text" class="form-control">
                                               </div>
                                               <div class="form-group">
                                                   <label class="control-label">Address 2 <small>Optional</small></label>
                                                   <input type="text" class="form-control">
                                               </div>
                                               <div class="form-group">
                                                   <label class="control-label">City</label>
                                                   <input type="text" class="form-control">
                                               </div>
                                               <div class="form-group">
                                                   <label class="control-label">State</label>
                                                   <select class="form-control">
                                                       <option value="AL">Alabama</option>
                                                       <option value="AK">Alaska</option>
                                                       <option value="AZ">Arizona</option>
                                                       <option value="AR">Arkansas</option>
                                                       <option>...</option>
                                                       <option>...</option>
                                                   </select>
                                               </div>
                                               <div class="row">
                                                   <div class="col-xs-7 col-sm-5">
                                                       <div class="form-group">
                                                           <label class="control-label">ZIP Code</label>
                                                           <input type="text" class="form-control">
                                                       </div>
                                                   </div>
                                                   <div class="col-xs-5 col-sm-3">
                                                       <div class="form-group">
                                                           <label class="control-label">Ext <small>Optional</small></label>
                                                           <input type="text" class="form-control">
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="row">
                                                   <div class="col-xs-7 col-sm-5">
                                                       <div class="form-group">
                                                           <label class="control-label">Phone <small>Optional</small></label>
                                                           <input type="text" class="form-control">
                                                       </div>
                                                   </div>
                                                   <div class="col-xs-5 col-sm-3">
                                                       <div class="form-group">
                                                           <label class="control-label">Ext <small>Optional</small></label>
                                                           <input type="text" class="form-control">
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="row">
                                                   <div class="col-xs-7 col-sm-5">
                                                       <div class="form-group">
                                                           <label class="control-label">Fax <small>Optional</small></label>
                                                           <input type="text" class="form-control">
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>

                                       <section class="section">
       <!-- stickybar -->
           <div class="stickybar">
               <div class="stickybar-floater">
                   <div class="stickybar-outer">
                       <div class="stickybar-inner">
                           <div class="stickybar-left">
                                                   <button type="submit" class="btn btn-success">Save</button>
                                                   <button type="button" class="btn btn-default">Cancel</button>
                                                   </div>

                       </div>
                   </div>
               </div>
           </div>
           <!-- /stickybar -->
       </section>

                                       <div class="form-modified">Updated: Sep 20, 2013 at 3:27pm by sjuniper</div>

                                   </form>
                               </div>
                               <div class="tab-pane fade in active" id="tab-2">

                                   <section class="section work-experience-container">
                                       <div class="slat-group">
                                           <div class="slat-group-header">
                                               <div class="slat-group-header-title">
                                                   <h2>Work Experience</h2>
                                               </div>
                                               <div class="slat-group-header-actions">
                                                   <div class="btn-group">
                                                       <a class="btn btn-default btn-sm" href="#modal-work-experience" data-toggle="modal">Add</a>
                                                       <div class="btn-group">
                                                           <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                               <i class="fa fa-caret-down"></i>
                                                           </a>
                                                           <ul class="dropdown-menu dropdown-menu-right">
                                                               <li><a href="#modal-work-experience" data-toggle="modal">Add Item</a></li>
                                                               <li role="presentation" class="divider"></li>
                                                               <!-- <li><a href="#">Move Section Up</a></li> -->
                                                               <li><a href="#">Move Section Down</a></li>
                                                               <li><a href="#" class="hide-section" data-section="work-experience">Hide Section</a></li>
                                                           </ul>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>

                                           <div class="slat-group-content">
                             <div class="slat">
                               <div class="slat-message slat-message-sm">
                                 <h3>This section is empty, add your first item.</h3>
                                 <a class="btn btn-default btn-sm" href="#modal-work-experience" data-toggle="modal">Add Work Experience</a>
                                 <a href="#" class="btn btn-default btn-sm hide-section" data-section="work-experience">Hide Section</a>
                               </div>
                             </div>
                           </div>
                                           <div class="slat-group-footer"></div>
                                       </div>
                                   </section>

                                   <section class="section education-container">
                                       <div class="slat-group">
                                           <div class="slat-group-header">
                                               <div class="slat-group-header-title">
                                                   <h2>Education</h2>
                                               </div>
                                               <div class="slat-group-header-actions">
                                                   <div class="btn-group">
                                                       <a href="#modal-education" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                       <div class="btn-group">
                                                           <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                               <i class="fa fa-caret-down"></i>
                                                           </a>
                                                           <ul class="dropdown-menu dropdown-menu-right">
                                                               <li><a href="#modal-education" data-toggle="modal">Add Item</a></li>
                                                               <li role="presentation" class="divider"></li>
                                                               <li><a href="#">Move Section Up</a></li>
                                                               <li><a href="#">Move Section Down</a></li>
                                                               <li><a href="#" class="hide-section" data-section="education">Hide Section</a></li>
                                                           </ul>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="slat-group-content">


       <div class="slat slat-callout">
       <div class="slat-default">
       <div class="title">Bachelors</div>
       <ul class="meta">
       <li><span class="meta-label">Field of Study:</span><span class="meta-value">Agriculture and Domestic Animal Services, Other</span></li>
       <li><span class="meta-label">School Name:</span><span class="meta-value">Baylor</span></li>
       </ul>

                                                       <div class="action action-split">
                                                       <div class="btn-group">
                                                       <a href="#modal-licenses-manage" data-toggle="modal" class="btn btn-default btn-sm hidden-xs">Manage</a>
                                                       <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                       <i class="fa fa-caret-down"></i>
                                                       </a>
                                                       <ul class="dropdown-menu dropdown-menu-right">
                                                       <li><a href="#modal-licenses-manage" data-toggle="modal">Manage</a></li>
                                                       <li><a href="#">Remove</a></li>
                                                       </ul>
                                                       </div>
                                                       </div>
                                                       </div>
       </div>


                                           </div>
                                           <div class="slat-group-footer"></div>
                                       </div>
                                   </section>

                                   <section class="section licenses-container">
                                       <div class="slat-group">
                                           <div class="slat-group-header">
                                               <div class="slat-group-header-title">
                                                   <h2>Licenses</h2>
                                               </div>

                                           </div>
                                           <div class="slat-group-content">
                                               <div class="slat">
                                                   <div class="slat-message slat-message-sm">
                                                       <h3>This section is not yet available. Check back soon!</h3>
                                                       <a href="#" class="btn btn-default btn-sm hide-section" data-section="licenses">Hide Section</a>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="slat-group-footer">
                                               <div class="timestamp">Last Update: Oct 16, 2017</div>
                                           </div>
                                       </div>
                                   </section>

                                   <section class="section certifications-container">
                                       <div class="slat-group">
                                           <div class="slat-group-header">
                                               <div class="slat-group-header-title">
                                                   <h2>Certifications</h2>
                                               </div>
                                               <div class="slat-group-header-actions">
                                                   <div class="btn-group">
                                                       <a href="#modal-certifications" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                       <div class="btn-group">
                                                           <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                               <i class="fa fa-caret-down"></i>
                                                           </a>
                                                           <ul class="dropdown-menu dropdown-menu-right">
                                                               <li><a href="#modal-certifications" data-toggle="modal">Add Item</a></li>
                                                               <li role="presentation" class="divider"></li>
                                                               <li><a href="#">Move Section Up</a></li>
                                                               <li><a href="#">Move Section Down</a></li>
                                                               <li><a href="#" class="hide-section" data-section="certifications">Hide Section</a></li>
                                                           </ul>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>

                                           <div class="slat-group-content">


       <div class="slat">
       <div class="slat-default">
       <div class="title"><a href="#">ABLS-Provider - Advanced Burn Life Support - Provider</a></div>
       <ul class="meta">
       <li><span class="meta-label">Country:</span><span class="meta-value">United States</span></li>
       </ul>

                                                       <div class="action action-split">
                                                       <div class="btn-group">
                                                       <a href="#modal-licenses-manage" data-toggle="modal" class="btn btn-default btn-sm hidden-xs">Manage</a>
                                                       <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                       <i class="fa fa-caret-down"></i>
                                                       </a>
                                                       <ul class="dropdown-menu dropdown-menu-right">
                                                       <li><a href="#modal-licenses-manage" data-toggle="modal">Manage</a></li>
                                                       <li><a href="#">Remove</a></li>
                                                       </ul>
                                                       </div>
                                                       </div>
                                                       </div>
       </div>



                                               <div class="collapse-group collapse">

       <div class="slat">
       <div class="slat-default">
       <div class="title"><a href="#">ABLS-Provider - Advanced Burn Life Support - Provider</a></div>
       <ul class="meta">
       <li><span class="meta-label">Country:</span><span class="meta-value">United States</span></li>
       </ul>

                                                       <div class="action action-split">
                                                       <div class="btn-group">
                                                       <a href="#modal-licenses-manage" data-toggle="modal" class="btn btn-default btn-sm hidden-xs">Manage</a>
                                                       <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                       <i class="fa fa-caret-down"></i>
                                                       </a>
                                                       <ul class="dropdown-menu dropdown-menu-right">
                                                       <li><a href="#modal-licenses-manage" data-toggle="modal">Manage</a></li>
                                                       <li><a href="#">Remove</a></li>
                                                       </ul>
                                                       </div>
                                                       </div>
                                                       </div>
       </div>


       <div class="slat">
       <div class="slat-default">
       <div class="title"><a href="#">ABLS-Provider - Advanced Burn Life Support - Provider</a></div>
       <ul class="meta">
       <li><span class="meta-label">Country:</span><span class="meta-value">United States</span></li>
       </ul>

                                                       <div class="action action-split">
                                                       <div class="btn-group">
                                                       <a href="#modal-licenses-manage" data-toggle="modal" class="btn btn-default btn-sm hidden-xs">Manage</a>
                                                       <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                       <i class="fa fa-caret-down"></i>
                                                       </a>
                                                       <ul class="dropdown-menu dropdown-menu-right">
                                                       <li><a href="#modal-licenses-manage" data-toggle="modal">Manage</a></li>
                                                       <li><a href="#">Remove</a></li>
                                                       </ul>
                                                       </div>
                                                       </div>
                                                       </div>
       </div>


       <div class="slat">
       <div class="slat-default">
       <div class="title"><a href="#">ABLS-Provider - Advanced Burn Life Support - Provider</a></div>
       <ul class="meta">
       <li><span class="meta-label">Country:</span><span class="meta-value">United States</span></li>
       </ul>

                                                       <div class="action action-split">
                                                       <div class="btn-group">
                                                       <a href="#modal-licenses-manage" data-toggle="modal" class="btn btn-default btn-sm hidden-xs">Manage</a>
                                                       <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                       <i class="fa fa-caret-down"></i>
                                                       </a>
                                                       <ul class="dropdown-menu dropdown-menu-right">
                                                       <li><a href="#modal-licenses-manage" data-toggle="modal">Manage</a></li>
                                                       <li><a href="#">Remove</a></li>
                                                       </ul>
                                                       </div>
                                                       </div>
                                                       </div>
       </div>

                                               </div>

                                               <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show More|Show Less">Show More<i class="fa-fw fa-caret-down fa"></i></a>
                                           </div>
                                           <div class="slat-group-footer">
                                               <div class="timestamp">Last Update: Oct 16, 2017</div>
                                           </div>
                                       </div>
                                   </section>

                                   <section class="section resucitation-programs-container">
                                       <div class="slat-group">
                                           <div class="slat-group-header">
                                               <div class="slat-group-header-title">
                                                   <h2>Resucitation Programs</h2>
                                               </div>
                                               <div class="slat-group-header-actions">
                                                   <div class="btn-group">
                                                       <a href="#modal-resucitation-programs" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                       <div class="btn-group">
                                                           <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                               <i class="fa fa-caret-down"></i>
                                                           </a>
                                                           <ul class="dropdown-menu dropdown-menu-right">
                                                               <li><a href="#modal-resucitation-programs" data-toggle="modal">Add Item</a></li>
                                                               <li role="presentation" class="divider"></li>
                                                               <li><a href="#">Move Section Up</a></li>
                                                               <li><a href="#">Move Section Down</a></li>
                                                               <li><a href="#" class="hide-section" data-section="resucitation-programs">Hide Section</a></li>
                                                           </ul>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="slat-group-content">
                                               <div class="slat">
                                                   <div class="slat-message slat-message-sm">
                                                       <h3>This section is empty, add your first item.</h3>
                                                       <a href="#modal-resucitation-programs" data-toggle="modal" class="btn btn-default btn-sm">Add Resucitation Programs</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="resucitation-programs">Hide Section</a>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="slat-group-footer"></div>
                                       </div>
                                   </section>

                                   <section class="section activities-container">
                                       <div class="slat-group">
                                           <div class="slat-group-header">
                                               <div class="slat-group-header-title">
                                                   <h2>Volunteer Service</h2>
                                               </div>
                                               <div class="slat-group-header-actions">
                                                   <div class="btn-group">
                                                       <a href="#modal-activities" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                       <div class="btn-group">
                                                           <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                               <i class="fa fa-caret-down"></i>
                                                           </a>
                                                           <ul class="dropdown-menu dropdown-menu-right">
                                                               <li><a href="#modal-activities" data-toggle="modal">Add Item</a></li>
                                                               <li role="presentation" class="divider"></li>
                                                               <li><a href="#">Move Section Up</a></li>
                                                               <li><a href="#">Move Section Down</a></li>
                                                               <li><a href="#" class="hide-section" data-section="activities">Hide Section</a></li>
                                                           </ul>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="slat-group-content">
                                               <div class="slat">
                                                   <div class="slat-message slat-message-sm">
                                                       <h3>This section is empty, add your first item.</h3>
                                                       <a href="#modal-activities" data-toggle="modal" class="btn btn-default btn-sm">Add Volunteer Service</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="activities">Hide Section</a>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="slat-group-footer"></div>
                                       </div>
                                   </section>

                                   <section class="section committee-work-container">
                                       <div class="slat-group">
                                           <div class="slat-group-header">
                                               <div class="slat-group-header-title">
                                                   <h2>Committee Work</h2>
                                               </div>
                                               <div class="slat-group-header-actions">
                                                   <div class="btn-group">
                                                       <a href="#modal-committee-work" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                       <div class="btn-group">
                                                           <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                               <i class="fa fa-caret-down"></i>
                                                           </a>
                                                           <ul class="dropdown-menu dropdown-menu-right">
                                                               <li><a href="#modal-committee-work" data-toggle="modal">Add Item</a></li>
                                                               <li role="presentation" class="divider"></li>
                                                               <li><a href="#">Move Section Up</a></li>
                                                               <li><a href="#">Move Section Down</a></li>
                                                               <li><a href="#" class="hide-section" data-section="committee-work">Hide Section</a></li>
                                                           </ul>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="slat-group-content">
                                               <div class="slat">
                                                   <div class="slat-message slat-message-sm">
                                                       <h3>This section is empty, add your first item.</h3>
                                                       <a href="#modal-committee-work" data-toggle="modal" class="btn btn-default btn-sm">Add Committee Work</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="committee-work">Hide Section</a>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="slat-group-footer"></div>
                                       </div>
                                   </section>

                                   <section class="section memberships-container">
                                       <div class="slat-group">
                                           <div class="slat-group-header">
                                               <div class="slat-group-header-title">
                                                   <h2>Memberships &amp; Associstions</h2>
                                               </div>
                                               <div class="slat-group-header-actions">
                                                   <div class="btn-group">
                                                       <a href="#modal-memberships" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                       <div class="btn-group">
                                                           <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                               <i class="fa fa-caret-down"></i>
                                                           </a>
                                                           <ul class="dropdown-menu dropdown-menu-right">
                                                               <li><a href="#modal-memberships" data-toggle="modal">Add Item</a></li>
                                                               <li role="presentation" class="divider"></li>
                                                               <li><a href="#">Move Section Up</a></li>
                                                               <li><a href="#">Move Section Down</a></li>
                                                               <li><a href="#" class="hide-section" data-section="memberships">Hide Section</a></li>
                                                           </ul>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="slat-group-content">
                                               <div class="slat">
                                                   <div class="slat-message slat-message-sm">
                                                       <h3>This section is empty, add your first item.</h3>
                                                       <a href="#modal-memberships" data-toggle="modal" class="btn btn-default btn-sm">Add Memberships &amp; Associations</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="memberships">Hide Section</a>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="slat-group-footer"></div>
                                       </div>
                                   </section>

                                   <section class="section teaching-container">
                                       <div class="slat-group">
                                           <div class="slat-group-header">
                                               <div class="slat-group-header-title">
                                                   <h2>Teaching &amp; Preceptorship</h2>
                                               </div>
                                               <div class="slat-group-header-actions">
                                                   <div class="btn-group">
                                                       <a href="#modal-teaching" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                       <div class="btn-group">
                                                           <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                               <i class="fa fa-caret-down"></i>
                                                           </a>
                                                           <ul class="dropdown-menu dropdown-menu-right">
                                                               <li><a href="#modal-teaching" data-toggle="modal">Add Item</a></li>
                                                               <li role="presentation" class="divider"></li>
                                                               <li><a href="#">Move Section Up</a></li>
                                                               <li><a href="#">Move Section Down</a></li>
                                                               <li><a href="#" class="hide-section" data-section="teaching">Hide Section</a></li>
                                                           </ul>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="slat-group-content">
                                               <div class="slat">
                                                   <div class="slat-message slat-message-sm">
                                                       <h3>This section is empty, add your first item.</h3>
                                                       <a href="#modal-teaching" data-toggle="modal" class="btn btn-default btn-sm">Add Teaching &amp; Preceptorship</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="teaching">Hide Section</a>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="slat-group-footer"></div>
                                       </div>
                                   </section>

                                   <section class="section publications-container">
                                       <div class="slat-group">
                                           <div class="slat-group-header">
                                               <div class="slat-group-header-title">
                                                   <h2>Publications &amp; Research</h2>
                                               </div>
                                               <div class="slat-group-header-actions">
                                                   <div class="btn-group">
                                                       <a href="#modal-publications" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                       <div class="btn-group">
                                                           <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                               <i class="fa fa-caret-down"></i>
                                                           </a>
                                                           <ul class="dropdown-menu dropdown-menu-right">
                                                               <li><a href="#modal-publications" data-toggle="modal">Add Item</a></li>
                                                               <li role="presentation" class="divider"></li>
                                                               <li><a href="#">Move Section Up</a></li>
                                                               <li><a href="#">Move Section Down</a></li>
                                                               <li><a href="#" class="hide-section" data-section="publications">Hide Section</a></li>
                                                           </ul>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="slat-group-content">
                                               <div class="slat">
                                                   <div class="slat-message slat-message-sm">
                                                       <h3>This section is empty, add your first item.</h3>
                                                       <a href="#modal-publications" data-toggle="modal" class="btn btn-default btn-sm">Add Publications &amp; Research</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="publications">Hide Section</a>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="slat-group-footer"></div>
                                       </div>
                                   </section>

                                   <section class="section awards-container">
                                       <div class="slat-group">
                                           <div class="slat-group-header">
                                               <div class="slat-group-header-title">
                                                   <h2>Awards &amp; Recognition</h2>
                                               </div>

                                           </div>
                                           <div class="slat-group-content">
                                               <div class="slat">
                                                   <div class="slat-message slat-message-sm">
                                                       <h3>This section is not yet available. Check back soon!</h3>
                                                       <a href="#" class="btn btn-default btn-sm hide-section" data-section="awards">Hide Section</a>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="slat-group-footer"></div>
                                       </div>
                                   </section>

                                   <section class="section other-container">
                                       <div class="slat-group">
                                           <div class="slat-group-header">
                                               <div class="slat-group-header-title">
                                                   <h2>Other</h2>
                                               </div>

                                           </div>
                                           <div class="slat-group-content">
                                               <div class="slat">
                                                   <div class="slat-message slat-message-sm">
                                                       <h3>This section is not yet available. Check back soon!</h3>
                                                       <a href="#" class="btn btn-default btn-sm hide-section" data-section="other">Hide Section</a>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="slat-group-footer"></div>
                                       </div>
                                   </section>

                                   <section class="section">
       <!-- stickybar -->
           <div class="stickybar sticky">
               <div class="stickybar-floater">
                   <div class="stickybar-outer">
                       <div class="stickybar-inner">
                           <div class="stickybar-left">
                                               <a href="#modal-sections" data-toggle="modal" class="btn btn-default">Manage Sections</a>
                                               <a href="portfolio-print.php" class="btn btn-default" target="_blank">Print</a>
                                               </div>

                       </div>
                   </div>
               </div>
           </div>
           <!-- /stickybar -->
       </section>
                               </div>
                               <div class="tab-pane fade" id="tab-3">
                               </div>

                           </div>
                       </section>
                   </div>
                   <div class="col-md-3">
                       <section class="section section-sidebar">
                       <section class="section section-box"><h3>ePortfolio Support</h3><ul class="list-links"><li><a href="http://www.healthstream.com/eportfolio/support/" target="_blank">ePortfolio FAQs and Help</a></li><li><a href="#modal-portable-portfolio-about" <="" li=""></a></li><li><a href="#">Manage Login and Password</a></li></ul></section>


                   </section>
                   </div>



               </div><!-- col -->
           </div><!-- row -->
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