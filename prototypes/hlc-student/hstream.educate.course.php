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
        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> -->
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


      /*  .focus-pageheader .fph-table {
            height: 60px;
        }
        .focus {
            background-color:#007aa3 !important;
            border-top:1px solid #005b79 !important
        }
        .focus-pageheader .fph-cell {
             vertical-align: top !important;
             padding-top:px;
        }
        .focus-pageheader .fph-primary {
             padding: 0px;
        }
        .focus-pageheader .fph-separator {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 5px;
             border-top: none;
             background-image: none !important;
             background-image: none !important;
            background-repeat: repeat-x;
            background-color: #005b79 !important;*/
            /*filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff26a8d4', endColorstr='#ff40b3d9', GradientType=0);
        }
*/

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
                                          <li class=""><a href="hstream.educate.php?org=<?= $org ?>">Overview</a></li>
                                          <li class=""><a href="hstream.educate.beinformed.php?org=<?= $org ?>">Be Informed</a></li>
                                          <li class=""><a href="hstream.educate.determineneeds.php?org=<?= $org ?>">Determine Needs</a></li>
                                        <?php
                                        if ($org == '2') {

                                            //org = hca
                                            echo '<li class="active"><a href="hstream.educate.discover.ascension.php?org='.$org.'">Discover &amp; Compare</a></li>';
                                            // <iframe src="hstream.educate.discover.hca.php" style="width:100%;height:3660px" id="reportFrame"></iframe>';

                                        }
                                        else if ($org == '1') {
                                            //org = chs
                                            // echo '<iframe src="hstream.educate.discover.chs.php" style="width:100%;height:3677px" id="reportFrame"></iframe>';
                                         echo '<li class="active"><a href="hstream.educate.discover.chs.php?org='.$org.'">Discover &amp; Compare</a></li>';

                                        }
                                        else {
                                         echo '<li class="active"><a href="hstream.educate.discover.hca.php?org='.$org.'">Discover &amp; Compare</a></li>';
                                            // echo '<iframe src="hstream.educate.discover.ascension.php" style="width:100%;height:3677px" id="reportFrame"></iframe>';
                                        }
                                        ?>
                                          <li class=""><a href="hstream.educate.monitor.php?org=<?= $org ?>">Verify</a></li>
                                          <li class=""><a href="hstream.educate.shop.php?org=<?= $org ?>" target="_new">Shop &amp; Save</a></li>
                                          <!-- <li class=""><a href="/completed.2.php">Transcript</a></li>
                                                     <!-- <li class=""><a href="#">Help</a></li> -->
                                          <?php
                                                       include ('includes/applauncher.hstream.persona.php');
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
         <div class="fph-separator" style="height: 41px;"></div>
         <div class="fph-table">
             <div class="fph-row">
                     <div class="fph-cell fph-cell-icon">
                             <div class="fph-icon"><i class="hs-icons-course"></i></div>
                         <div class="fph-icon-label"><span>Course</span></div>
                     </div>

                 <div class="fph-cell fph-cell-text">
                         <div class="fph-primary">
                         <h1>Communication and Culture</h1>
                             <ul class="meta">
                                     <li class="meta-visible-xs"><span class="meta-type">Course</span></li>
                                                             </ul>
                         </div>

                         <div class="fph-secondary">
                             <ul class="meta">

                                                                      <!--    <li>
                                             <span class="meta-label">Status:</span>
                                             <span class="meta-value">Not Yet Started</span>
                                         </li> -->
                                         <li>
                                             <span class="meta-label">Est. Time:</span>
                                             <span class="meta-value">1h 10m</span>
                                         </li>
                             </ul>
                         </div>
                 </div>


                 <div class="fph-cell fph-cell-supporting">
                 </div>
             </div>
         </div>
     </div>

        <div class="layout ">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                       <section class="section section-main section-box equalized" data-equalize="layout-columns" style="min-height: 3790px;">

                           <section class="return-link">
                            <?php
                            if ($org == '2') {

                                //org = hca
                                echo '<a href="hstream.educate.discover.ascension.php?org='.$org.'">';
                                // <iframe src="hstream.educate.discover.hca.php" style="width:100%;height:3660px" id="reportFrame"></iframe>';

                            }
                            else if ($org == '1') {
                                //org = chs
                                // echo '<iframe src="hstream.educate.discover.chs.php" style="width:100%;height:3677px" id="reportFrame"></iframe>';
                             echo '<a href="hstream.educate.discover.chs.php?org='.$org.'">';

                            }
                            else {
                             echo '<a href="hstream.educate.discover.hca.php?org='.$org.'">';
                                // echo '<iframe src="hstream.educate.discover.ascension.php" style="width:100%;height:3677px" id="reportFrame"></iframe>';
                            }
                            ?>

                                    <i class="fa-fw fa-chevron-left fa"></i>Return to Discover &amp; Compare</a>
                                               <form action="/HSAPP/CourseDetails/Enroll?courseId=ea5cd5f3-a2e3-4eef-a4d8-80ce19d11bd0&amp;organizationNodeId=099c5b94-a6cb-11de-8289-001517135511" method="post">
                                           <input name="__RequestVerificationToken" type="hidden" value="oUeNAcieo8mDPajV9a3TQlvm5CLLZIP8wfPR8dyRlI1zxaMtJRhq3uIjx-TW54_-VEa-8hIMrm0u_WO8wAM2U53n-XA1">
                                           <!-- <button class="btn btn-success btn-lg pull-right catalog-action-button" type="submit">Enroll<em class="fa fa-arrow-circle-right  fa-fw mr-sm"></em></button> -->
                                       </form>
                           </section>




                       <section class="section"><h2>Learning Activities <small>in this Course</small></h2><div class="slat" data-filter-category="0"><div class="slat-default"><div class="title">Communication and Culture</div><ul class="meta"><li><span class="meta-type">Online</span></li><li><span class="meta-label">Status:</span><span class="meta-value">Not Yet Started</span></li><li><span class="meta-label">Est. Time:</span><span class="meta-value">1h 10m</span></li></ul></div></div><div class="slat" data-filter-category="0"><div class="slat-default"><div class="title">Evaluation</div><ul class="meta"><li><span class="meta-type">Evaluation</span></li><li><span class="meta-label">Status:</span><span class="meta-value">Not Yet Started</span></li></ul></div></div></section>
                           <section class="section">
                               <h2>Description</h2>
                               The ability to provide and elicit accurate information is one of the foundations of sensitive and successful healthcare. In our multicultural society, effective cross-cultural communication is an essential component of good healthcare. Communication is not limited to the articulated word. Physical gestures and tone of voice provide context and add meaning to verbal communication. In some cases, nonverbal cues may even contradict what is said. The development of trust and integrity facilitates a positive relationship and improves communication. In this course, you will explore the key elements of communication, learn how to establish a rapport with your patients, and identify the role of interpreters in the healthcare setting. In addition, you will analyze the components of both verbal and nonverbal communication. (70 minutes)
                           </section>

                           <section class="section">
                               <h2>Learning Objectives</h2>
                               After completing this continuing education activity, nurses will be able to provide and elicit accurate information from patients, regardless of cultural background. Specifically, they will be able to:
                       <ul>
                           <li>Specify key elements of communication </li>
                           <li>Identify ways to establish rapport with patients </li>
                           <li>Identify the role of interpreters in the healthcare setting </li>
                           <li>Recognize different aspects of language </li>
                           <li>Recognize nonverbal communication </li>
                       </ul>
                       <p><strong>ANCC ACCREDITATION &amp; CREDIT DESIGNATION STATEMENT</strong>
                       </p>
                       <p>HealthStream CNE Provider Unit is accredited with distinction as a provider of continuing nursing education by the American Nurses Credentialing Center's Commission on Accreditation.
                       </p>
                       <p>This activity is awarded 1.1 contact hour(s).
                       </p>
                       <p><strong>RELEASE &amp; EXPIRATION DATES</strong>
                       </p>
                       <p>Release Date: July 10, 2017
                       </p>
                       <p>Expiration Date: July 31, 2020
                       </p>
                       <p><strong>COMMERCIAL SUPPORT</strong>
                       </p>
                       <p>There is no commercial support for this activity.
                       </p>
                           </section>

                           <section class="section">
                               <h2>Course Outline</h2>
                               <p></p><p><strong>Criteria for Completion</strong>
                       </p>
                       <p>Participants are required to complete the post-test as well as evaluate the course in order to obtain a certificate of completion. Once the learner completes the activity, a link to the post-test will be available.  Once the test is completed with an 80% passing score minimum, a link to obtain a certificate will appear.  The link will provide a printout version of the certificate of completion.
                       </p>
                       <table>
                           <tbody>
                               <tr>
                                   <td>Key Elements of Communication</td>
                                   <td>15 minutes</td>
                               </tr>
                               <tr>
                                   <td>Establishing Rapport With Patients</td>
                                   <td>16 minutes</td>
                               </tr>
                               <tr>
                                   <td>Role of Interpreters in the Healthcare Setting</td>
                                   <td>10 minutes</td>
                               </tr>
                               <tr>
                                   <td>Understanding Language</td>
                                   <td>13 minutes</td>
                               </tr>
                               <tr>
                                   <td>Nonverbal Communication</td>
                                   <td>13 minutes</td>
                               </tr>
                           </tbody>
                       </table><p></p>
                           </section>

                           <section class="section">
                               <h2>Technical Requirements</h2>
                               <div data-toggle="limit-Height" data-labels="Show More|Show Less">

                                       <p><a href="http://learn.healthstream.com/browsercheck" target="_blank">Click here</a> to check your current browser configuration.</p>
                                       <b>Browser Requirements</b>
                                       <ul>
                                           <li>Minimum: Microsoft Internet Explorer 8.0</li>
                                           <li>Recommended: Microsoft Internet Explorer 8.0 and higher</li>
                                       </ul>
                                       <b>Plug-ins</b>
                                       <p>Many of HealthStream's courses offer audio or animations, requiring a plug-in for your browser. The plug-ins most often required by HealthStream courses are listed below. Contact your IT administrator for information about downloading programs from the web. Even though these plug-ins were current as of the time these requirements were written, please be aware that computer technology evolves at a rapid pace, and there may be a newer version available. HealthStream recommends using the latest version of a given plug-in if available.</p>
                                       <ul>
                                           <li>Adobe Acrobat Reader 6.0 or above</li>
                                           <li>Adobe Flash Player 7.5.1 or above</li>
                                       </ul>
                                   <p>
                                       <strong>STATE BOARDS OF NURSING PROVIDER &amp; CREDIT DESIGNATION STATEMENTS</strong>
                       </p><p> 1.1 contact hour(s) will be awarded for this activity:
                       </p>
                       <p>Provider approved by the California Board of Registered Nursing, Provider Number CEP13221.
                       </p>
                       <p>HealthStream is a Georgia Board of Nursing approved provider 50-907.
                       </p>
                       <p> 1.0 contact hour(s) will be awarded for this activity:
                       </p>
                       <p>HealthStream is a District of Columbia Board of Nursing approved provider 50-907.
                       </p>
                       <p>HealthStream is a Florida Board of Nursing approved provider 50-907.
                       </p>
                       <p>HealthStream is a Florida Board of Nursing - Certified Nursing Assistant (CNA) approved provider 50-907.
                       </p>
                       <p> 1.4 contact hour(s) will be awarded for this activity:
                       </p>
                       <p>HealthStream is an Iowa Board of Nursing provider 272. Participants are required to complete the post-test in order to obtain a certificate of completion. Once the learner completes the activity, a link to the post-test will be available. Once the test is completed with an 80% passing score minimum, a link to obtain a certificate will appear. The link will provide a printout version of the certificate of completion. At the conclusion of this activity, an attendee, if he/she so desires, may submit the evaluation form directly to Iowa Board of Nursing (400 SW 8th Street, Suite B, Des Moines, IA 50309-4685).
                       </p>
                       <p>West Virginia Board of Examiners for Registered Professional Nurses, Provider Number WV2007-0517RN.
                       </p>
                       <p>To receive credit, participants must complete the entire activity. Partial credit will not be given.  Licensees in all states must provide their license numbers for record keeping purposes. </p>
                                   <p></p>
                               </div>
                           </section>


                           <section class="section">
                               <h2>Author Biography</h2>
                               The content from this activity was originally written by a team of writers, subject matter experts, and clinicians from HealthStream and DigitalMed. The nurse planner and content expert have reviewed this content and determined it to be appropriate for inclusion in this CNE activity. Connie Pardee, PhD, RN served as the Nurse Planner and Jessica Ellis, BSN, RN was the Content Expert. All planning committee members reported no conflict of interest.
                           </section>


                           <section class="section">
                               <h2>Continuing Education Credits</h2>
                               <b>5 credit(s) available.</b>
                               <p>You will earn or renew the following credits upon successful completion of this course.</p>
                               <section class="section"><div class="slat" data-filter-category="0"><div class="slat-default"><div class="title">CNE - HealthStream</div><ul class="meta"><li><span class="meta-label">CREDIT:</span><span class="meta-value">1.10 Contact Hour(s)</span></li><li><span class="meta-label">EXPIRATION:</span><span class="meta-value">Jul 31, 2020</span></li></ul></div><div class="slat-nested"><div class="collapse-group collapse">
                       <section class="section">
                           <h5>Statement</h5>

                               <p>1.4</p>

                       </section>


                       <section class="section">
                           <h5>Discipline</h5>
                                   <p>Advanced Practice Registered Nurses,Anesthetists, Certified Registered Nurse,Cardiovascular Technologists and Technicians,Dietitians and Nutritionists,Licensed Practical Nurses,Licensed Vocational Nurses,Medical Assistants,Midwives, Certified Nurse,Nurse Practitioners,Registered Nurses,Registered Nurses - Advanced Registered Nurse Practitioner,Respiratory Therapists,Respiratory Therapists - Certified Respiratory Care Therapist,Respiratory Therapists - Critical Care Practitioner,Respiratory Therapists - Non-Critical Care Practitioner,Clinical Nurse Specialist,Prehospital Registered Nurse </p>


                       </section>

                       <section class="section">
                           <h5>Locations</h5>
                                   <p>
                                               <span class="label label-default label-location">AK</span>
                                               <span class="label label-default label-location">AL</span>
                                               <span class="label label-default label-location">AR</span>
                                               <span class="label label-default label-location">AS</span>
                                               <span class="label label-default label-location">AZ</span>
                                               <span class="label label-default label-location">CA</span>
                                               <span class="label label-default label-location">CO</span>
                                               <span class="label label-default label-location">CT</span>
                                               <span class="label label-default label-location">DE</span>
                                               <span class="label label-default label-location">GU</span>
                                               <span class="label label-default label-location">HI</span>
                                               <span class="label label-default label-location">IA</span>
                                               <span class="label label-default label-location">ID</span>
                                               <span class="label label-default label-location">IL</span>
                                               <span class="label label-default label-location">IN</span>
                                               <span class="label label-default label-location">KS</span>
                                               <span class="label label-default label-location">KY</span>
                                               <span class="label label-default label-location">LA</span>
                                               <span class="label label-default label-location">MA</span>
                                               <span class="label label-default label-location">MD</span>
                                               <span class="label label-default label-location">ME</span>
                                               <span class="label label-default label-location">MI</span>
                                               <span class="label label-default label-location">MN</span>
                                               <span class="label label-default label-location">MO</span>
                                               <span class="label label-default label-location">MP</span>
                                               <span class="label label-default label-location">MS</span>
                                               <span class="label label-default label-location">MT</span>
                                               <span class="label label-default label-location">NC</span>
                                               <span class="label label-default label-location">ND</span>
                                               <span class="label label-default label-location">NE</span>
                                               <span class="label label-default label-location">NH</span>
                                               <span class="label label-default label-location">NJ</span>
                                               <span class="label label-default label-location">NM</span>
                                               <span class="label label-default label-location">NV</span>
                                               <span class="label label-default label-location">NY</span>
                                               <span class="label label-default label-location">OH</span>
                                               <span class="label label-default label-location">OK</span>
                                               <span class="label label-default label-location">OR</span>
                                               <span class="label label-default label-location">PA</span>
                                               <span class="label label-default label-location">PR</span>
                                               <span class="label label-default label-location">RI</span>
                                               <span class="label label-default label-location">SC</span>
                                               <span class="label label-default label-location">SD</span>
                                               <span class="label label-default label-location">TN</span>
                                               <span class="label label-default label-location">TX</span>
                                               <span class="label label-default label-location">UM</span>
                                               <span class="label label-default label-location">UT</span>
                                               <span class="label label-default label-location">VA</span>
                                               <span class="label label-default label-location">VI</span>
                                               <span class="label label-default label-location">VT</span>
                                               <span class="label label-default label-location">WA</span>
                                               <span class="label label-default label-location">WI</span>
                                               <span class="label label-default label-location">WV</span>
                                               <span class="label label-default label-location">WY</span>

                                   </p>


                       </section></div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div></div><div class="slat" data-filter-category="0"><div class="slat-default"><div class="title">CNE - HealthStream</div><ul class="meta"><li><span class="meta-label">CREDIT:</span><span class="meta-value">1.00 Contact Hour(s)</span></li><li><span class="meta-label">EXPIRATION:</span><span class="meta-value">Jul 31, 2020</span></li></ul></div><div class="slat-nested"><div class="collapse-group collapse">
                       <section class="section">
                           <h5>Statement</h5>

                               <p><br></p>

                       </section>


                       <section class="section">
                           <h5>Discipline</h5>
                                   <p>Nursing Assistants</p>


                       </section>

                       <section class="section">
                           <h5>Locations</h5>
                                   <p>
                                               <span class="label label-default label-location">FL</span>

                                   </p>


                       </section></div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div></div><div class="slat" data-filter-category="0"><div class="slat-default"><div class="title">CNE - HealthStream</div><ul class="meta"><li><span class="meta-label">CREDIT:</span><span class="meta-value">1.00 Contact Hour(s)</span></li><li><span class="meta-label">EXPIRATION:</span><span class="meta-value">Jul 31, 2020</span></li></ul></div><div class="slat-nested"><div class="collapse-group collapse">
                       <section class="section">
                           <h5>Statement</h5>

                               <p><br></p>

                       </section>


                       <section class="section">
                           <h5>Discipline</h5>
                                   <p>Licensed Practical Nurses,Registered Nurses,Registered Nurses - Advanced Registered Nurse Practitioner</p>


                       </section>

                       <section class="section">
                           <h5>Locations</h5>
                                   <p>
                                               <span class="label label-default label-location">DC</span>

                                   </p>


                       </section></div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div></div><div class="slat" data-filter-category="0"><div class="slat-default"><div class="title">CNE - HealthStream</div><ul class="meta"><li><span class="meta-label">CREDIT:</span><span class="meta-value">1.10 Contact Hour(s)</span></li><li><span class="meta-label">EXPIRATION:</span><span class="meta-value">Jul 31, 2020</span></li></ul></div><div class="slat-nested"><div class="collapse-group collapse">
                       <section class="section">
                           <h5>Statement</h5>

                               <p><br></p>

                       </section>


                       <section class="section">
                           <h5>Discipline</h5>
                                   <p>Advanced Practice Registered Nurses,Anesthetists, Certified Registered Nurse,Cardiovascular Technologists and Technicians,Dietitians and Nutritionists,Licensed Practical Nurses,Licensed Vocational Nurses,Medical Assistants,Midwives, Certified Nurse,Nurse Practitioners,Nursing Assistants,Registered Nurses,Registered Nurses - Advanced Registered Nurse Practitioner,Respiratory Therapists,Respiratory Therapists - Certified Respiratory Care Therapist,Respiratory Therapists - Critical Care Practitioner,Respiratory Therapists - Non-Critical Care Practitioner,Clinical Nurse Specialist,Prehospital Registered Nurse </p>


                       </section>

                       <section class="section">
                           <h5>Locations</h5>
                                   <p>
                                               <span class="label label-default label-location">GA</span>

                                   </p>


                       </section></div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div></div><div class="slat" data-filter-category="0"><div class="slat-default"><div class="title">CNE - HealthStream</div><ul class="meta"><li><span class="meta-label">CREDIT:</span><span class="meta-value">1.00 Contact Hour(s)</span></li><li><span class="meta-label">EXPIRATION:</span><span class="meta-value">Jul 31, 2020</span></li></ul></div><div class="slat-nested"><div class="collapse-group collapse">
                       <section class="section">
                           <h5>Statement</h5>

                               <p><br></p>

                       </section>


                       <section class="section">
                           <h5>Discipline</h5>
                                   <p>Advanced Practice Registered Nurses,Anesthetists, Certified Registered Nurse,Cardiovascular Technologists and Technicians,Dietitians and Nutritionists,Licensed Practical Nurses,Licensed Vocational Nurses,Medical Assistants,Midwives, Certified Nurse,Nurse Practitioners,Registered Nurses,Registered Nurses - Advanced Registered Nurse Practitioner,Respiratory Therapists,Respiratory Therapists - Certified Respiratory Care Therapist,Respiratory Therapists - Critical Care Practitioner,Respiratory Therapists - Non-Critical Care Practitioner,Clinical Nurse Specialist,Prehospital Registered Nurse </p>


                       </section>

                       <section class="section">
                           <h5>Locations</h5>
                                   <p>
                                               <span class="label label-default label-location">FL</span>

                                   </p>


                       </section></div><a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a></div></div></section>
                           </section>




                           <section class="section">
                               <h2>Catalog</h2>
                               <p>This course belongs to the following categories in the HLC catalog:</p>
                               <ul>
                                       <li>Subject &gt; DigitalMed &gt; Cultural Competency</li>
                                       <li>Content Publisher &gt; DigitalMed</li>
                                       <li>CE Credit &gt; CNE - Continuing Nurse Education</li>
                                       <li>CE Center &gt; Specialty &gt; Perinatal Care</li>
                                       <li>CE Center &gt; Specialty &gt; Neonatal Intensive Care</li>
                                       <li>CE Center &gt; Specialty &gt; Nephrology and Dialysis</li>
                                       <li>CE Center &gt; Specialty &gt; Neurology</li>
                                       <li>CE Center &gt; Allied Health Disciplines &gt; Nutrition and Dietetics</li>
                                       <li>CE Center &gt; Specialty &gt; Women's Health</li>
                                       <li>CE Center &gt; Allied Health Disciplines &gt; Occupational Therapy</li>
                                       <li>CE Center &gt; Specialty &gt; Oncology</li>
                                       <li>CE Center &gt; Specialty &gt; Orthopedics</li>
                                       <li>CE Center &gt; Allied Health Disciplines &gt; Emergency Medical Services</li>
                                       <li>CE Center &gt; Specialty &gt; Pediatric Critical Care</li>
                                       <li>CE Center &gt; Specialty &gt; Pediatrics</li>
                                       <li>CE Center &gt; Specialty &gt; Perioperative</li>
                                       <li>CE Center &gt; Allied Health Disciplines &gt; Physical Therapy</li>
                                       <li>CE Center &gt; Specialty &gt; Behavioral Health</li>
                                       <li>CE Center &gt; Allied Health Disciplines &gt; Radiologic Technology</li>
                                       <li>CE Center &gt; Specialty &gt; Rehabilitation</li>
                                       <li>CE Center &gt; Allied Health Disciplines &gt; Respiratory Therapy</li>
                                       <li>CE Center &gt; Allied Health Disciplines &gt; Social Work</li>
                                       <li>CE Center &gt; Allied Health Disciplines &gt; Speech Therapy</li>
                                       <li>CE Center &gt; Clinical Topics &gt; CMS Related</li>
                                       <li>CE Center &gt; Specialty &gt; Medical Surgical</li>
                                       <li>CE Center &gt; Clinical Topics &gt; Advanced Practice</li>
                                       <li>CE Center &gt; Specialty &gt; Ambulatory Care</li>
                                       <li>CE Center &gt; Specialty &gt; Wound Care</li>
                                       <li>CE Center &gt; Specialty &gt; Cardiology</li>
                                       <li>CE Center &gt; Specialty &gt; Case Management</li>
                                       <li>CE Center &gt; Allied Health Disciplines &gt; Certified Nursing Assistants</li>
                                       <li>CE Center &gt; Specialty &gt; Home Health</li>
                                       <li>CE Center &gt; Specialty &gt; Critical Care</li>
                                       <li>CE Center &gt; Specialty &gt; Professional Development</li>
                                       <li>CE Center &gt; Specialty &gt; Emergency</li>
                                       <li>CE Center &gt; Specialty &gt; Gerontology</li>
                                       <li>CE Center &gt; Specialty &gt; Palliative Care</li>
                               </ul>
                           </section>

                       <section>
                           <p>Course Version: 604</p>
                       </section>
                                       </section>
                    </div>
                    <div class="col-md-3">
                                    <section class="section section-sidebar equalized" data-equalize="layout-columns" style="min-height: 3790px;">




                            <section class="section section-box">
                                <h2>Options</h2>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="javascript:;" id="share-course-modal-trigger">Share Course</a>
                                    </li>
                                </ul>
                            </section>


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

        });
        </script>
    </body>

    </html>