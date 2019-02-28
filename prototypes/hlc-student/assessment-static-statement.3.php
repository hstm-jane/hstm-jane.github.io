
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Relationship Based Care | HealthStream</title>

    <!-- Styles
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.bootstrap.css?cache=1479301385">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.plugins.css?cache=1479301385">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.app.css?cache=1479301385">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.prototype.css?cache=1479301385">

    <!-- IE 7/8 Handling
    ================================================== -->
    <script>
        if (document.documentMode < 8) {
            location.href = "unsupported-browser.php";
        }
        else if (document.documentMode == 8) {
            var html = document.getElementsByTagName('html')[0];
            html.className = 'ie ie8' + html.className;
            var ie8docmode = document.createElement('script');
            ie8docmode.setAttribute('src','/scripts/respond.js');
            document.getElementsByTagName('head')[0].appendChild(ie8docmode);
            var ie8styles = document.createElement('link');
            ie8styles.setAttribute('rel','stylesheet');
            ie8styles.setAttribute('type','text/css');
            ie8styles.setAttribute('href','/content/styles/healthstream.ie8.css');
            document.getElementsByTagName('head')[0].appendChild(ie8styles);
        }
        else {
            var icons = document.createElement('link');
            icons.setAttribute('rel','stylesheet');
            icons.setAttribute('type','text/css');
            icons.setAttribute('href','/content/styles/healthstream.icons.css');
            document.getElementsByTagName('head')[0].appendChild(icons);
        }
    </script>

    <!-- Feature Detection Using Modernizr
    ================================================== -->
    <script src="/scripts/modernizr.js"></script>
<style>
    /* NEW */
    .fph-primary > ul > li > span {
        text-transform: none !important;
        font-size:18px !important;
        font-weight: 300;
    }
     .assessment-header {
        margin-bottom:60px;
        display:table;
        width: 100%;
        margin:auto;
        margin-bottom:20px;
         margin-top:5px;

    }
    .assessment-header > div {
        display:table-cell;
        width: 100%;
    }
    .assessment-return {
        text-align: left;
        vertical-align: top;
    }
      .fph-chart {
        height:75px;
        width:75px;
    }
    figcaption {
        position: absolute;
        top: 0;
        /*left: 24px;*/
        right:11px;
        height: 75px;
        font-size: 18px;
        font-weight: 500;
        border-radius: 50%;
        color: #09C;
        text-shadow: 1px 1px 0 @theme-primary-darker;
         margin:0;
        padding:0;
    }
    figcaption .chart-label {
        font-size:10px;
        text-transform:uppercase;
        font-style:normal;
        margin:0;
        padding:0;
        margin-top:23px;
        display:block;
        text-align:center;
        margin-left:-10px;
    }
    figcaption .chart-value {
        display:block;
        margin-top: -3px;
         margin-left:-10px;
         text-align:center;
    }
    /*figcaption .chart-label:after {
        content: '\A';
        white-space: pre;
    }*/
    .fph-chart-holder {
        position:relative;
    }
    .meta-box {
        display:table;
        width:100%;
    }
    .meta-box-cell {
        display:table-cell;
        vertical-align:top;
    }
</style>
</head>
<body class="static-assessment"><div class="site-header ">
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
                <img src="/content/images/prototype-actors/allisongrayce.jpg">
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
        </nav><!-- /nav-account -->
    </div><!-- /container -->
    <nav class="nav-main">
        <div class="container">
            <ul id="nav" class="nav">
                
            <li class=""><a href="/connections.php">Connections</a></li>
            <li class=""><a href="/">To Do</a></li>
            <li class=""><a href="/completed-filtered.php">Completed</a></li>
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
            <li class="active"><a href="/assessment-overview.php">Raters</a></li>
            <li class=""><a href="/catalog.php">Catalog</a></li>
            <li class=""><a href="/event-calendar.php">Event Calendar</a></li>
            <li class="disabled"><a href="#">Help</a></li>
            <li class="visible-xs"><a href="#">Logout</a></li>
            </ul>
        </div><!-- /container -->
    </nav><!-- /nav-main -->
    <div class="support">
        <h3>Support</h3>
        <p>To talk with a customer service representative call 1-800-521-0574</p>
        <p><a href="#">Send us an email</a></p>
    </div>
</div><!-- /site-header -->
<div class="focus focus-pageheader">
<div class="fph-separator"></div>
<div class="fph-table"> <div class="fph-row">
<div class="fph-cell fph-cell-icon"><div class="fph-icon" style="overflow:hidden;"><img src="/content/images/prototype-actors/rhein_wein.jpg" width="100%" height="100%"></div><div class="fph-icon-label"><span>Statement</span></div></div>
<div class="fph-cell fph-cell-text">
<div class="fph-primary">
    <!--<ul class="meta">
<li class="meta-hidden-xs" class="meta-hidden-xs"><span class="meta-label">Statement Rating</span></li>
</ul>-->
<!--<h1>Relationship Based Care</h1> -->
<h1>Statement Rating</h1>
</div>
<!--<div class="fph-secondary"><ul class="meta">-->
<!--<li class="meta-visible-xs"><span class="meta-label">From Assessment:</span><span class="meta-value"><a href="/assessment.php?assessment=competency-3&user=rater&state=0&progress=3" class="meta-value">Initial Nursing Competency Appraisal</a></span></li><li><span class="meta-label">Statement:</span><span class="meta-value">Relationship Based Care</span></li>-->
<!--<li><span class="meta-label">Reviewers:</span><span class="meta-value">3 of 5</span></li>
<li><span class="meta-label">Status:</span><span class="meta-value">Not Yet Rated</span></li>
<li><span class="meta-label">Due:</span><span class="meta-value">Nov 16, 2016</span></li>-->
<!--</ul></div>-->

</div>

</div>
</div>
</div>
<div class="layout layout-assessment">
    
    <div class="container">
        <section class="section section-main section-box">
            <div class="assessment-header">

    <div class="assessment-return"><a href="assessment-static-evaluate.php"><i class="fa fa-fw fa-chevron-left"></i>Return to Assessment Summary</a></div>
    
</div>
        <!--<section class="section assessment-action-section" id="jump-signoff">
                <h3>Statement Rating</h3>

               
<div class="action-meta">
                 <span class="statement-meta"><strong>Statement:</strong> Relationship Based Care | <strong>Assessment:</strong> Initial Nursing Competency Appraisal</span>
                <span class="statement-meta"></span>
                <p></p>
                <p>Please rate the statement for the assessment.</p>
              </div>
               
                
        </section>-->
          <h2 style="font-weight:400;">Relationship Based Care </h2>
   <div class="meta-box">
  
    <div style="display:table; font-size:14px;">
        <div style="display:table-row">
            <div style="display:table-cell;padding: 5px 10px 0 5px;"></span>
                <span style="margin-right:7px;"><span class="meta-box-label">Assessment:</span> 
                Initial Nursing Competency Appraisal</span> 
            </div>
        </div>
        <div style="display:table-row">
            <div style="display:table-cell;padding: 5px 5px 0 5px;">
                <span style="margin-right:7px;"><span class="meta-box-label">Employee:</span> Juniper, Stephanie P.</span> 
                <!--<span style="margin-right:7px;"><span class="meta-box-label">Rater:</span> Crane, Darcy L. </span>-->
            </div>
        </div>
         <div style="display:table-row">
            <div style="display:table-cell;padding: 5px 5px 5px 5px;">
                <!--<span style="margin-right:7px;"><span class="meta-box-label">State:</span> Evaluate</span> -->
                <!--<span style="margin-right:7px;"><span class="meta-box-label">Due:</span> Dec 30, 2016 </span>-->
            </div>
        </div>
        
   </div>
     <div class="meta-box-cell" style="text-align:right;width:130px;">
        <div style="display:table;text-align:right;max-width:130px;">
            <div style="display:table-cell;vertical-align:middle;padding-right:0px;text-align:right;">
                <a href="#"><i class="fa fa-fw fa-chevron-left" style="font-size:30px;"></i></a>
            </div>
            <div style="display:table-cell;text-align:right;">
                <figure class="fph-chart-holder">
                    <canvas class="fph-chart" data-type="Doughnut" data-segments="[[1,1],[1,1],[1,1],[1,3],[1,0],[1,0],[1,0]]" width="108" height="108"></canvas>
                    <figcaption><span class="chart-label">Progress</span><span class="chart-value">3/7</span></figcaption>
                </figure>
            </div>
            <div style="display:table-cell;vertical-align:middle;padding-left:0px;text-align:right;">
                <a href="#"><i class="fa fa-fw fa-chevron-right" style="font-size:30px;"></i></a>
            </div>
        </div>
    </div>
</div>
            <div class="additional-ratings">
    <ul class="additional-ratings__tabs">
        <li class="additional-ratings__tab">
    <a href="#tab-additional" class="js-additional-ratings">
        <span>
            Additional Ratings
            <i class="fa fa-chevron-down additional-ratings__tab-icon additional-ratings__tab-icon--closed"></i>
            <i class="fa fa-chevron-up additional-ratings__tab-icon additional-ratings__tab-icon--open"></i>
        </span>
    </a>
</li>
        
        
    </ul>
    <div class="additional-ratings__content">
        <div class="additional-ratings__tab-content" id="tab-additional">
    <div class="actor actor--employee actor--rated">
    <div class="actor__basics">
        <div class="actor__row">
            <div class="actor__role"><label>employee</label></div>
            <div class="actor__name"><a href="#" class="js-rating-details" data-params="assessment=competency-3&statement=statement-4&user=rater&progress=3&actor=employee">Montoya, Alice G.</a></div>
            <div class="actor__rating">
                <div class="rating-control rating-control--employee"><div class="rating-control-row"><div class="rating-control-cell"><span class="rating-option rating-option-na"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option rating-selected"></span></div><div class="rating-control-cell"><span class="rating-label" data-label="Expert">Expert</span></div></div></div>
            </div>
            <div class="actor__summary"><span class="actor__summary-date">Nov 9, 2016:</span> Overall, I am very satisfied in the direction of my role as it has changed dramatically over the last year.I appreciate my manager asking me for feedback and putting in action plans geared towards tea&hellip; <a href="#" class="js-rating-details" data-params="assessment=competency-3&statement=statement-4&user=rater&progress=3&actor=employee">More</a></div>
        </div>
    </div>
</div><div class="actor actor--peer actor--rated">
    <div class="actor__basics">
        <div class="actor__row">
            <div class="actor__role"><label>peer</label></div>
            <div class="actor__name"><a href="#" class="js-rating-details" data-params="assessment=competency-3&statement=statement-4&user=rater&progress=3&actor=peer-1">Peer 1</a></div>
            <div class="actor__rating">
                <div class="rating-control rating-control--peer"><div class="rating-control-row"><div class="rating-control-cell"><span class="rating-option rating-option-na"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option rating-selected"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-label" data-label="Proficient">Proficient</span></div></div></div>
            </div>
            <div class="actor__summary"><span class="actor__summary-date">Nov 9, 2016:</span> She is a great communicator and always follows up on her shared tasks.Her unique IT background brings a new perspective and I’ve personally learned a lot from her.</div>
        </div>
    </div>
</div><div class="actor actor--peer">
    <div class="actor__basics">
        <div class="actor__row">
            <div class="actor__role"><label>peer</label></div>
            <div class="actor__name">Peer 2</div>
            <div class="actor__rating">
                <div class="rating-control rating-control--peer"><div class="rating-control-row"><div class="rating-control-cell"><span class="rating-option rating-option-na"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-label" data-label="Not Yet Rated">Not Yet Rated</span></div></div></div>
            </div>
            <div class="actor__summary"></div>
        </div>
    </div>
</div><div class="actor actor--peer actor--rated">
    <div class="actor__basics">
        <div class="actor__row">
            <div class="actor__role"><label>peer</label></div>
            <div class="actor__name"><a href="#" class="js-rating-details" data-params="assessment=competency-3&statement=statement-4&user=rater&progress=3&actor=peer-3">Peer 3</a></div>
            <div class="actor__rating">
                <div class="rating-control rating-control--peer"><div class="rating-control-row"><div class="rating-control-cell"><span class="rating-option rating-option-na rating-selected"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-label" data-label="Not Applicable">Not Applicable</span></div></div></div>
            </div>
            <div class="actor__summary"><span class="actor__summary-date">Nov 9, 2016:</span> I am new and cannot rate this person</div>
        </div>
    </div>
</div>
</div>
        
        
    </div>
    <div class="additional-ratings__divider"></div>
</div>
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <section class="section" data-equalize="layout-columns">
                        <section class="section">
                            <h3>Description</h3>
                            <p>Applies Relationship Based Care principals to strengthen teamwork and collaboration with all colleagues to improve the patient experience.</p>
                        </section>
                        
        <section class="section">
            <h3>Behavioral Criteria</h3>
            <ul>
                <li>Expresses satisfaction with a career path and takes advantage of professional development opportunities</li>
                <li>Assumes accountability for communicating and seeking out educational opportunities to increase professional competency</li>
                <li>Speaks in terms of long term commitment to the organization</li>
                <li>Addresses disruptive coworks and intervenes when lateral violence is identified</li>
                <li>Enjoys working cooperatively and goes the extra mile to support coworkers</li>
                <li>Maintains a positive attitude</li>
                <li>Makes recommendations to improve processes and resources within the organizationActively participates in hospital committees</li>
            </ul>
        </section>
        <section class="section">
            <h3>Evidence of Achievement</h3>
            <p>Employee Centered Verification:  Must complete the following</p>
            <ul>
                <li>Completes on the line employee engagement survey</li>
                <li>Document completion in goal section</li>
            </ul>
        </section>
        <section class="section">
            <h3>Resources</h3>
            <p>Employee Centered Verification:  Must complete the following</p>
            <ul class="fa-ul">
                <li><a href="#"><i class="fa fa-paperclip fa-li"></i>Completes on the line employee engagement survey</a></li>
                <li><a href="#"><i class="fa fa-globe fa-li"></i>Document completion in goal section</a></li>
            </ul>
        </section>
        <section class="section">
            <h3>References</h3>
            <ul class="list-unstyled">
                <li><a href="#">View References</a></li>
            </ul>
        </section>
                    </section>
                </div><!-- /column -->
                <div class="col-md-4 col-sm-6">
                    <section class="section" data-equalize="layout-columns" id="rating-form">
                        <form class="validate">
                            <h3>My Rating</h3>
                            <div class="form-group">
    <label class="control-label">Rating <a href="#" class="js-rating-definitions" data-params="assessment=competency-3&statement=statement-4"></a></label>
    <select class="form-control">
        <option>Choose</option>
        <option>Not Applicable</option><option>Novice</option><option>Advanced Beginner</option><option>Competent</option><option>Proficient</option><option>Expert</option>
    </select>
</div>
                            <div class="form-group">
    <label class="checkbox"><input type="checkbox"> Add to Reflective Plan</label>
</div>
                            <div class="form-group">
    <label class="control-label">Comment / Evidence of Achievement</label>
    <textarea class="form-control" style="height:100px"></textarea>
    <div class="control-add-new">
        <a href="#modal-select-notes" data-toggle="modal">Attach Note</a>
    </div>
</div>
                            <div class="form-group">
    <label class="control-label">Documents</label>
    <ul class="control-attachments">
        <li>No attached documents</li>
    </ul>
    <div class="control-add-new">
    <a href="#modal-select-documents" data-toggle="modal">Attach Documents</a> | <a href="#modal-document-add" data-toggle="modal">New Document</a>
</div>
</div>
                            <div class="form-group">
    <label class="control-label">Risk/Outcome</label>
    <div class="row">
        <div class="col-xs-6">
            <ul class="list-unstyled">
                <li class="checkbox"><label><input type="checkbox">Age Related</label></li><li class="checkbox"><label><input type="checkbox">Communication</label></li><li class="checkbox"><label><input type="checkbox">Decreased Volume</label></li><li class="checkbox"><label><input type="checkbox">High Risk</label></li><li class="checkbox"><label><input type="checkbox">High Volume</label></li><li class="checkbox"><label><input type="checkbox">Hospital Initiative</label></li><li class="checkbox"><label><input type="checkbox">Increased Risk</label></li><li class="checkbox"><label><input type="checkbox">Infection Control</label></li><li class="checkbox"><label><input type="checkbox">Learner's Needs</label></li><li class="checkbox"><label><input type="checkbox">Low Risk</label></li><li class="checkbox"><label><input type="checkbox">Low Volume</label></li><li class="checkbox"><label><input type="checkbox">New Equipment</label></li><li class="checkbox"><label><input type="checkbox">New Scope of Practice</label></li><li class="checkbox"><label><input type="checkbox">Orientation</label></li>
            </ul>
        </div>
        <div class="col-xs-6">
            <ul class="list-unstyled">
                <li class="checkbox"><label><input type="checkbox">Performance Issue</label></li><li class="checkbox"><label><input type="checkbox">Policy Change</label></li><li class="checkbox"><label><input type="checkbox">Problem Prone</label></li><li class="checkbox"><label><input type="checkbox">Professional Development</label></li><li class="checkbox"><label><input type="checkbox">Quality</label></li><li class="checkbox"><label><input type="checkbox">Regulatory</label></li><li class="checkbox"><label><input type="checkbox">Safety</label></li><li class="checkbox"><label><input type="checkbox">Satisfaction (Employee)</label></li><li class="checkbox"><label><input type="checkbox">Satisfaction (Patient)</label></li><li class="checkbox"><label><input type="checkbox">Satisfaction (Physician)</label></li><li class="checkbox"><label><input type="checkbox">Special Needs Population</label></li><li class="checkbox"><label><input type="checkbox">Teamwork</label></li><li class="checkbox"><label><input type="checkbox">Time Sensitive</label></li>
            </ul>
        </div>
    </div>
</div>
                            <div class="form-group">
    <label class="control-label">Methods of Validation</label>
    <div class="row">
        <div class="col-xs-6">
            <ul class="list-unstyled">
                <li class="checkbox"><label><input type="checkbox">Case Study</label></li><li class="checkbox"><label><input type="checkbox">Confidence Based Learning</label></li><li class="checkbox"><label><input type="checkbox">Direct Observation</label></li><li class="checkbox"><label><input type="checkbox">Documentation Review</label></li><li class="checkbox"><label><input type="checkbox">Evidence of Daily Work</label></li><li class="checkbox"><label><input type="checkbox">Evidence Submission</label></li><li class="checkbox"><label><input type="checkbox">Exemplar</label></li><li class="checkbox"><label><input type="checkbox">Inservice Education</label></li><li class="checkbox"><label><input type="checkbox">Mock Survey</label></li>
            </ul>
        </div>
        <div class="col-xs-6">
            <ul class="list-unstyled">
                <li class="checkbox"><label><input type="checkbox">Online Simulation</label></li><li class="checkbox"><label><input type="checkbox">Peer Review</label></li><li class="checkbox"><label><input type="checkbox">PI Data Trending</label></li><li class="checkbox"><label><input type="checkbox">Presentation</label></li><li class="checkbox"><label><input type="checkbox">Simulation Lab</label></li><li class="checkbox"><label><input type="checkbox">Skills Checklist</label></li><li class="checkbox"><label><input type="checkbox">Skills Lab/Skills Fair</label></li><li class="checkbox"><label><input type="checkbox">Testing - Oral</label></li><li class="checkbox"><label><input type="checkbox">Testing - Written</label></li>
            </ul>
        </div>
    </div>
</div>
                        </form>
                    </section>
                </div><!-- /column -->
            </div><!-- /row -->
            <section class="section">
<!-- stickybar -->
    <div class="stickybar">
        <div class="stickybar-floater">
            <div class="stickybar-outer">
                <div class="stickybar-inner">
                    <div class="stickybar-left">
                        <a href="/assessment.php?assessment=competency-3&user=rater&state=0&progress=3" class="btn btn-success">Save</a>
                        <a href="/assessment-statement.php?assessment=competency-3&user=rater&state=0&progress=3&statement=statement-5" class="btn btn-success">Save and Next</a>
                        <a href="/assessment.php?assessment=competency-3&user=rater&state=0&progress=3" class="btn btn-default">Cancel</a>
                    </div>
                    <div class="stickybar-right"><div class="hidden-xs">
                        <div class="btn-group">
                            <a href="/assessment-statement.php?assessment=competency-3&user=rater&state=0&progress=3&statement=statement-3" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                            <a href="/assessment-statement.php?assessment=competency-3&user=rater&state=0&progress=3&statement=statement-5" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /stickybar -->
</section>

        </section>
    </div>
</div><div class="modals"></div>
<!-- modal -->
<div id="modal-select-documents" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-page active" id="modal-selects-notes-list">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">My Documents</h4>
                    <div class="input-group modal-search">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div><!-- /input-group -->
                </div>
                <div class="modal-body">
                    <section class="section modal-search-results">
                        <h3>Results <small>Showing 1-7 of 7</small></h3>

                        
    <div class="checkable">
        
<div class="slat slat-callout-wr">
<div class="slat-default">
<div class="title"><a href="#">critical-thinking_20161106</a></div>
<ul class="meta">
<li><span class="meta-label">Attachment:</span><span class="meta-value">Image</span></li>
<li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Nov 6, 2016</span></li>
</ul>
</div>
<div class="slat-nested">
<div class="collapse-group collapse">

                                                    <section class="section">
                                                        <h5>Description</h5>
                                                        <p>This is a longer form area for the document description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                                    </section>
                                                </div>
<a href="#" class="collapse-toggle" data-toggle-text="Show additional information|Hide additional information">Show additional information</a>
</div>
</div>


        <div class="select">
            <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
        </div>
    </div>
    <div class="checkable">
        
<div class="slat slat-callout-wr">
<div class="slat-default">
<div class="title"><a href="#">communication_20161105</a></div>
<ul class="meta">
<li><span class="meta-label">Attachment:</span><span class="meta-value">Image</span></li>
<li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Nov 5, 2016</span></li>
</ul>
</div>
<div class="slat-nested">
<div class="collapse-group collapse">

                                                    <section class="section">
                                                        <h5>Description</h5>
                                                        <p>This is a longer form area for the document description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                                    </section>
                                                </div>
<a href="#" class="collapse-toggle" data-toggle-text="Show additional information|Hide additional information">Show additional information</a>
</div>
</div>


        <div class="select">
            <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
        </div>
    </div>
    <div class="checkable">
        
<div class="slat slat-callout-wr">
<div class="slat-default">
<div class="title"><a href="#">prioritization-organization-delegation_20161104</a></div>
<ul class="meta">
<li><span class="meta-label">Attachment:</span><span class="meta-value">Excel Spreadsheet</span></li>
<li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Nov 4, 2016</span></li>
</ul>
</div>
<div class="slat-nested">
<div class="collapse-group collapse">

                                                    <section class="section">
                                                        <h5>Description</h5>
                                                        <p>This is a longer form area for the document description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                                    </section>
                                                </div>
<a href="#" class="collapse-toggle" data-toggle-text="Show additional information|Hide additional information">Show additional information</a>
</div>
</div>


        <div class="select">
            <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
        </div>
    </div>
    <div class="checkable">
        
<div class="slat slat-callout-wr">
<div class="slat-default">
<div class="title"><a href="#">relationship-based-care_20161103</a></div>
<ul class="meta">
<li><span class="meta-label">Attachment:</span><span class="meta-value">Portable Document File</span></li>
<li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Nov 3, 2016</span></li>
</ul>
</div>
<div class="slat-nested">
<div class="collapse-group collapse">

                                                    <section class="section">
                                                        <h5>Description</h5>
                                                        <p>This is a longer form area for the document description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                                    </section>
                                                </div>
<a href="#" class="collapse-toggle" data-toggle-text="Show additional information|Hide additional information">Show additional information</a>
</div>
</div>


        <div class="select">
            <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
        </div>
    </div>
    <div class="checkable">
        
<div class="slat slat-callout-wr">
<div class="slat-default">
<div class="title"><a href="#">alcohol-withdrawal_20161102</a></div>
<ul class="meta">
<li><span class="meta-label">Attachment:</span><span class="meta-value">Image</span></li>
<li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Nov 2, 2016</span></li>
</ul>
</div>
<div class="slat-nested">
<div class="collapse-group collapse">

                                                    <section class="section">
                                                        <h5>Description</h5>
                                                        <p>This is a longer form area for the document description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                                    </section>
                                                </div>
<a href="#" class="collapse-toggle" data-toggle-text="Show additional information|Hide additional information">Show additional information</a>
</div>
</div>


        <div class="select">
            <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
        </div>
    </div>
    <div class="checkable">
        
<div class="slat slat-callout-wr">
<div class="slat-default">
<div class="title"><a href="#">blood-transfusion_20161101</a></div>
<ul class="meta">
<li><span class="meta-label">Attachment:</span><span class="meta-value">Word Document</span></li>
<li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Nov 1, 2016</span></li>
</ul>
</div>
<div class="slat-nested">
<div class="collapse-group collapse">

                                                    <section class="section">
                                                        <h5>Description</h5>
                                                        <p>This is a longer form area for the document description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                                    </section>
                                                </div>
<a href="#" class="collapse-toggle" data-toggle-text="Show additional information|Hide additional information">Show additional information</a>
</div>
</div>


        <div class="select">
            <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
        </div>
    </div>
    <div class="checkable">
        
<div class="slat slat-callout-wr">
<div class="slat-default">
<div class="title"><a href="#">patient-controlled-analgesia--pca_20161031</a></div>
<ul class="meta">
<li><span class="meta-label">Attachment:</span><span class="meta-value">Excel Spreadsheet</span></li>
<li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Oct 31, 2016</span></li>
</ul>
</div>
<div class="slat-nested">
<div class="collapse-group collapse">

                                                    <section class="section">
                                                        <h5>Description</h5>
                                                        <p>This is a longer form area for the document description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                                    </section>
                                                </div>
<a href="#" class="collapse-toggle" data-toggle-text="Show additional information|Hide additional information">Show additional information</a>
</div>
</div>


        <div class="select">
            <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
        </div>
    </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-success" data-dismiss="modal">Add Selected</a>
                    <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                    <div class="btn-group pull-right">
                        <button class="btn btn-default disabled"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-default disabled"><i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /modal --><!-- Modal -->
<div id="modal-document-add" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Document</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Document Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Description <small>Optional</small></label>
                    <textarea class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <input type="file" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <div class="hidden-xs">
                    <button class="btn btn-success" data-dismiss="modal">Save</button>
                    <button class="btn btn-success" data-dismiss="modal">Save and Add Another</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
                <div class="visible-xs">
                    <div class="btn-group dropup">
                        <a href="#" class="btn btn-success">Save</a>
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-caret-up"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Save and Add Another</a></li>
                        </ul>
                    </div>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- /modal --><!-- modal -->
<div id="modal-select-notes" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-page active" id="modal-selects-notes-list">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">My Notes</h4>
                    <div class="input-group modal-search">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div><!-- /input-group -->
                </div>
                <div class="modal-body">
                    <section class="section modal-search-results">
                        <h3>Results <small>Showing 1-7 of 7</small></h3>

                        
    <div class="checkable">
        
<div class="slat slat-callout-wr">
<div class="slat-default">
<div class="title"><a href="#modal-selects-notes-view" data-toggle="modalpage">critical-thinking_20161106</a></div>
<ul class="meta">
<li><span class="meta-label">Assigned To:</span><span class="meta-value">Alice G. Montoya</span></li>
<li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Nov 6, 2016</span></li>
</ul>
</div>
<div class="slat-nested">
<div class="collapse-group collapse">

                                                    <section class="section">
                                                        <h5>Detail</h5>
                                                        <p>This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                                    </section>
                                                    <section class="section">
                                                        <h5>Attachments</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fa fa-paperclip"></i> <a href="#">critical-thinking_20161106.doc</a></li>
                                                        </ul>
                                                    </section>
                                                </div>
<a href="#" class="collapse-toggle" data-toggle-text="Show additional information|Hide additional information">Show additional information</a>
</div>
</div>


        <div class="select">
            <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
        </div>
    </div>
    <div class="checkable">
        
<div class="slat slat-callout-wr">
<div class="slat-default">
<div class="title"><a href="#modal-selects-notes-view" data-toggle="modalpage">communication_20161105</a></div>
<ul class="meta">
<li><span class="meta-label">Assigned To:</span><span class="meta-value">Alice G. Montoya</span></li>
<li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Nov 5, 2016</span></li>
</ul>
</div>
<div class="slat-nested">
<div class="collapse-group collapse">

                                                    <section class="section">
                                                        <h5>Detail</h5>
                                                        <p>This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                                    </section>
                                                    <section class="section">
                                                        <h5>Attachments</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fa fa-paperclip"></i> <a href="#">communication_20161105.doc</a></li>
                                                        </ul>
                                                    </section>
                                                </div>
<a href="#" class="collapse-toggle" data-toggle-text="Show additional information|Hide additional information">Show additional information</a>
</div>
</div>


        <div class="select">
            <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
        </div>
    </div>
    <div class="checkable">
        
<div class="slat slat-callout-wr">
<div class="slat-default">
<div class="title"><a href="#modal-selects-notes-view" data-toggle="modalpage">prioritization-organization-delegation_20161104</a></div>
<ul class="meta">
<li><span class="meta-label">Assigned To:</span><span class="meta-value">Alice G. Montoya</span></li>
<li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Nov 4, 2016</span></li>
</ul>
</div>
<div class="slat-nested">
<div class="collapse-group collapse">

                                                    <section class="section">
                                                        <h5>Detail</h5>
                                                        <p>This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                                    </section>
                                                    <section class="section">
                                                        <h5>Attachments</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fa fa-paperclip"></i> <a href="#">prioritization-organization-delegation_20161104.doc</a></li>
                                                        </ul>
                                                    </section>
                                                </div>
<a href="#" class="collapse-toggle" data-toggle-text="Show additional information|Hide additional information">Show additional information</a>
</div>
</div>


        <div class="select">
            <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
        </div>
    </div>
    <div class="checkable">
        
<div class="slat slat-callout-wr">
<div class="slat-default">
<div class="title"><a href="#modal-selects-notes-view" data-toggle="modalpage">relationship-based-care_20161103</a></div>
<ul class="meta">
<li><span class="meta-label">Assigned To:</span><span class="meta-value">Alice G. Montoya</span></li>
<li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Nov 3, 2016</span></li>
</ul>
</div>
<div class="slat-nested">
<div class="collapse-group collapse">

                                                    <section class="section">
                                                        <h5>Detail</h5>
                                                        <p>This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                                    </section>
                                                    <section class="section">
                                                        <h5>Attachments</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fa fa-paperclip"></i> <a href="#">relationship-based-care_20161103.doc</a></li>
                                                        </ul>
                                                    </section>
                                                </div>
<a href="#" class="collapse-toggle" data-toggle-text="Show additional information|Hide additional information">Show additional information</a>
</div>
</div>


        <div class="select">
            <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
        </div>
    </div>
    <div class="checkable">
        
<div class="slat slat-callout-wr">
<div class="slat-default">
<div class="title"><a href="#modal-selects-notes-view" data-toggle="modalpage">alcohol-withdrawal_20161102</a></div>
<ul class="meta">
<li><span class="meta-label">Assigned To:</span><span class="meta-value">Alice G. Montoya</span></li>
<li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Nov 2, 2016</span></li>
</ul>
</div>
<div class="slat-nested">
<div class="collapse-group collapse">

                                                    <section class="section">
                                                        <h5>Detail</h5>
                                                        <p>This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                                    </section>
                                                    <section class="section">
                                                        <h5>Attachments</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fa fa-paperclip"></i> <a href="#">alcohol-withdrawal_20161102.doc</a></li>
                                                        </ul>
                                                    </section>
                                                </div>
<a href="#" class="collapse-toggle" data-toggle-text="Show additional information|Hide additional information">Show additional information</a>
</div>
</div>


        <div class="select">
            <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
        </div>
    </div>
    <div class="checkable">
        
<div class="slat slat-callout-wr">
<div class="slat-default">
<div class="title"><a href="#modal-selects-notes-view" data-toggle="modalpage">blood-transfusion_20161101</a></div>
<ul class="meta">
<li><span class="meta-label">Assigned To:</span><span class="meta-value">Alice G. Montoya</span></li>
<li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Nov 1, 2016</span></li>
</ul>
</div>
<div class="slat-nested">
<div class="collapse-group collapse">

                                                    <section class="section">
                                                        <h5>Detail</h5>
                                                        <p>This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                                    </section>
                                                    <section class="section">
                                                        <h5>Attachments</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fa fa-paperclip"></i> <a href="#">blood-transfusion_20161101.doc</a></li>
                                                        </ul>
                                                    </section>
                                                </div>
<a href="#" class="collapse-toggle" data-toggle-text="Show additional information|Hide additional information">Show additional information</a>
</div>
</div>


        <div class="select">
            <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
        </div>
    </div>
    <div class="checkable">
        
<div class="slat slat-callout-wr">
<div class="slat-default">
<div class="title"><a href="#modal-selects-notes-view" data-toggle="modalpage">patient-controlled-analgesia--pca_20161031</a></div>
<ul class="meta">
<li><span class="meta-label">Assigned To:</span><span class="meta-value">Alice G. Montoya</span></li>
<li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Oct 31, 2016</span></li>
</ul>
</div>
<div class="slat-nested">
<div class="collapse-group collapse">

                                                    <section class="section">
                                                        <h5>Detail</h5>
                                                        <p>This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                                    </section>
                                                    <section class="section">
                                                        <h5>Attachments</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fa fa-paperclip"></i> <a href="#">patient-controlled-analgesia--pca_20161031.doc</a></li>
                                                        </ul>
                                                    </section>
                                                </div>
<a href="#" class="collapse-toggle" data-toggle-text="Show additional information|Hide additional information">Show additional information</a>
</div>
</div>


        <div class="select">
            <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
        </div>
    </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-success" data-dismiss="modal">Add Selected</a>
                    <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                    <div class="btn-group pull-right">
                        <button class="btn btn-default disabled"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-default disabled"><i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-page" id="modal-selects-notes-view">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">View Note</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <h3>This is the note</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#modal-selects-notes-list" class="btn btn-success" data-toggle="modalpage">Select</a>
                    <a href="#modal-selects-notes-list" class="btn btn-default" data-toggle="modalpage">Back</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- /modal --><div class="site-footer ">
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
                        <h4>Support</h4>
                        To talk with a customer service representative call 1-800-521-0574
                    </section>
                </div>
            </div>
        </div>
        <div class="legal">
            <div class="divider"></div>
            <div class="logo"><img src="./content/images/logo-healthstream-small.png" alt="HealthStream"></div>
            <div class="copyright">Copyright &copy; 2016 HealthStream, Inc. All Rights Reserved.</div>
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
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<!-- /PROTOTYPE ONLY -->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

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
<script>
    $(function(){
        $('.js-rating-details').on('click',function(e){
            var params = $(this).attr('data-params');
            e.preventDefault();
            $.get( "/assessment-modal-rating-details.php?" + params, function( data ) {
                $('.modals').html(data);
                $('#modal-rating-details').modal('show');
            });
        });
        $('.js-rating-definitions').on('click',function(e){
            var params = $(this).attr('data-params');
            e.preventDefault();
            $.get( "/assessment-modal-rating-definitions.php?" + params, function( data ) {
                console.log(data);
                $('.modals').html(data);
                $('#modal-rating-definitions').modal('show');
            });
        });
        // SHOW TAB CONTENT OR OPEN MODAL BASED ON SCREEN SIZE
        $('.additional-ratings__tab').on('click',function(e){
            var $tab = $(this);
            var $content = $($tab.find('a').attr('href'));
            var $modal = $('#modal-rating-detail');
            var $actors = $modal.find('.detail__actors');
            var template = $modal.find('.detail__template').html();
            var tabActive = $tab.hasClass('additional-ratings__tab--active');

            e.preventDefault();
            $('.additional-ratings__tab--active, .additional-ratings__tab-content--active').removeClass('additional-ratings__tab--active additional-ratings__tab-content--active');

            if ( $(window).width() < 978 ) {

                $modal.find('.modal-title').html('Additional Rating Details');
                $actors.addClass('detail__actors--multiple');
                $actors.html('');
                $content.find('.actor').each(function(){
                    $actors.append(makeActorDetail(template,$(this)));
                });
                $modal.modal('show');
            } else {

                if ( !tabActive ) {
                    $tab.addClass('additional-ratings__tab--active').siblings('.additional-ratings__tab').removeClass('additional-ratings__tab--active');
                    $content.addClass('additional-ratings__tab-content--active').siblings('.additional-ratings__tab-content').removeClass('additional-ratings__tab-content--active');
                }

            }
        });
        $('.fph-chart').each(function(){
                    var colors = [
                                '#ccc',
                                '#5cb85c',
                                '#f3f3f3', 
                                '#66c2e0'],
                        data = [],
                        $chart = $(this),
                        segments = JSON.parse($chart.attr('data-segments')),
                        ctx = $chart[0].getContext("2d"),
                        progress,
                        chartOptions = {
                            segmentStrokeColor: colors[2],
                            segmentStrokeWidth: 2,
                            percentageInnerCutout: 82,
                            animation : true,
                            animationEasing : "easeInOutCubic"
                        };
                        

                    $(segments).each(function(){
                      var obj = {
                        value: this[0],
                        color: colors[this[1]]
                      };
                      data.push(obj);
                    });

                    if(data.length < 2) {
                        chartOptions.segmentShowStroke = false;
                        chartOptions.percentageInnerCutout = 89;
                    }
                    progress = new window.Chart(ctx).Doughnut(data,chartOptions);

                });

            });
        


</script>
</body>
</html>