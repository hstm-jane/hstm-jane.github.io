<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'My Portfolio';
$patterns['header']['mainNavActive'] = 'profile';
$patterns['focus']['title'] = 'My Portfolio';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<style>

nav.nav-focus {
    margin-bottom: 0;
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

.card-wrapper {
    display: inline-block;
    display: none;
}

.card {
    display: block;
    padding: 10px;
    margin: 10px 0;
    height: 100px;
    overflow: hidden;
    border: 1px solid #eee;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
}

.card-container {
    height: 100px;
    position: relative;
    z-index: 90;
    margin-top: 0px !important;
}

.card-dismiss {
    margin: -7px -4px 0 0;
}

.card-thumb {
    float:left;
    width: 80px;
    height: 80px;
    background-color: #d9edf7;
    border: 1px solid #bce8f1;
    border-radius: 3px;
    font-size: 42px;
    line-height: 80px;
    text-align: center;
    color: #31708f;
    margin-right: 10px;
}


.card-alert .card-thumb {
    background-color: #f2dede;
    border-color: #ebccd1;
    color: #a94442;
}

.card-warning .card-thumb {
    background-color: #fcf8e3;
    border-color: #faebcc;
    color: #8a6d3b;
}

h4.card-title {
    margin-bottom: 5px;
}

.card-title a {
    color: #31708f;
    font-weight: bold;
}

.card-title-alert a {
    color: #a94442;
}

.card-title-warning a {
    color: #8a6d3b;
}

@media (max-width: 991px) {

    .portfolio-container {
         padding-right:10px;
         border-right: none;
    }

    .section-main .section.card-container {
        height: auto;
        margin-bottom: 0px
    }
}

</style>

<div class="layout layout-search">
    <div class="container">
        <section class="section section-main section-box">

            <?php

                $focusNav = array(
                    'tabs' => array(
                        array(
                            'id' => 'tab-1',
                            'label' => 'Personal',
                        ),
                        array(
                            'active' => true,
                            'id' => 'tab-2',
                            'label' => 'Professional',
                        ),
                        array(
                            'id' => 'tab-3',
                            'label' => 'Transcript',
                        ),
                        array(
                            'id' => 'tab-4',
                            'label' => 'Goals',
                        ),
                        array(
                            'id' => 'tab-5',
                            'label' => 'Notes',
                        ),
                        array(
                            'id' => 'tab-6',
                            'label' => 'Documents',
                        ),
                    ),
                );
                echo createFocusNav($focusNav);

            ?>


            <div class="tab-content">

                <div class="tab-pane fade" id="tab-1">
                    <div class="row">
                        <div class="col-md-9">
                            <section class="section with-mask" style="padding-right:30px; border-right: 1px solid #ddd;">

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

                                    <?php
                                        $stickybar = array(
                                            'sets' => array(
                                                array(
                                                    'html' => '
                                                        <button type="submit" class="btn btn-success">Save</button>
                                                        <button type="button" class="btn btn-default">Cancel</button>
                                                    ',
                                                ),
                                            ),
                                        );
                                        echo createStickybar($stickybar);
                                    ?>

                                    <div class="form-modified">Updated: Sep 20, 2013 at 3:27pm by sjuniper</div>

                                </form>
                            </section>
                        </div>
                        <div class="col-md-3">
                            <section class="section">
                                <h2>Portfolio Status</h2>
                                <div class="progress">
                                    <div class="progress-bar" style="width:10%">0%</div>
                                </div>
                                <p>Completing your Portfolio ensures accurate awarding of CE credit and helps us make better recomendations.</p>
                                <!--<p><a href="/portfolio-wizard.php" class="btn btn-sm btn-success">Complete Portfolio</a></p>-->
                                <p><a href="#modal-portfolio-wizard" data-toggle="modal" class="size-check-init btn btn-success btn-sm">Get Started</a></p>
                            </section>
                        </div>
                    </div>
                </div> <!-- /tab-pane -->

                <div class="tab-pane fade in active" id="tab-2">
                    <div class="row">
                        <div class="col-md-9">
                            <section class="section with-mask" style="padding-right:30px; border-right: 1px solid #ddd;">
                                <div class="white-mask"></div>

                                <button class="btn btn-lg btn-primary btn-extend-profile">Create a HealthStream ID to extend to your profile.</button>

                                <section class="section card-container">
                                    <div id="card-row" class="row">
                                        <div class="card-wrapper col-md-6 col-xs-12">
                                            <div class="card card-info">
                                                <a class="card-dismiss close" href="#"><i class="fa fa-times"></i></a>
                                                <div class="card-thumb">
                                                    <i class="fa fa-stethoscope"></i>
                                                </div>
                                                <h4 class="card-title"><a href="#modal-work-experience" data-toggle="modal">Add Work Experience</a></h4>
                                                <p>Add your job history.</p>
                                            </div>
                                        </div>
                                        <div class="card-wrapper col-md-6 col-xs-12">
                                            <div class="card card-info">
                                                <a class="card-dismiss close" href="#"><i class="fa fa-times"></i></a>
                                                <div class="card-thumb">
                                                    <i class="fa fa-book"></i>
                                                </div>
                                                <h4 class="card-title"><a href="#modal-publications" data-toggle="modal">Been Published?</a></h4>
                                                <p>Tell us about it.</p>
                                            </div>
                                        </div>
                                        <div class="card-wrapper col-md-6 col-xs-12">
                                            <div class="card card-alert">
                                                <a class="card-dismiss close" href="#"><i class="fa fa-times"></i></a>
                                                <div class="card-thumb">
                                                    <i class="fa fa-exclamation-triangle"></i>
                                                </div>
                                                <h4 class="card-title card-title-alert"><a href="#modal-certifications-manage" data-toggle="modal">Expired Certification</a></h4>
                                                <p>Your CWCA - Certified Wound Care Associate has expired.</p>
                                            </div>
                                        </div>
                                        <div class="card-wrapper col-md-6 col-xs-12">
                                            <div class="card card-warning">
                                                <a class="card-dismiss close" href="#"><i class="fa fa-times"></i></a>
                                                <div class="card-thumb">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                                <h4 class="card-title card-title-warning"><a href="#modal-licenses-manage" data-toggle="modal">Expiring License</a></h4>
                                                <p>Your NCAC ll, Level 2 license expires on 11/30/2015.</p>
                                            </div>
                                        </div>
                                        <div class="card-wrapper col-md-6 col-xs-12">
                                            <div class="card card-info">
                                                <a class="card-dismiss close" href="#"><i class="fa fa-times"></i></a>
                                                <div class="card-thumb">
                                                    <i class="fa fa-graduation-cap"></i>
                                                </div>
                                                <h4 class="card-title"><a href="#modal-education" data-toggle="modal">Add Education</a></h4>
                                                <p>Adding your education makes you look better.</p>
                                            </div>
                                        </div>
                                        <div class="card-wrapper col-md-6 col-xs-12">
                                            <div class="card card-info">
                                                <a class="card-dismiss close" href="#"><i class="fa fa-times"></i></a>
                                                <div class="card-thumb">
                                                    <i class="fa fa-users"></i>
                                                </div>
                                                <h4 class="card-title"><a href="#modal-activities" data-toggle="modal">Add Activities</a></h4>
                                                <p>Add activities you're involved in.</p>
                                            </div>
                                        </div>
                                        <div class="card-wrapper col-md-6 col-xs-12">
                                            <div class="card card-info">
                                                <a class="card-dismiss close" href="#"><i class="fa fa-times"></i></a>
                                                <div class="card-thumb">
                                                    <i class="fa fa-medkit"></i>
                                                </div>
                                                <h4 class="card-title"><a href="#modal-resucitation-programs" data-toggle="modal">Resucitation Certified?</a></h4>
                                                <p>Tell us about it.</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="section work-experience-container">
                                    <div class="slat-group">
                                        <div class="slat-group-header">
                                            <div class="slat-group-header-title">
                                                <h2>Work Experience</h2>
                                            </div>
                                            <div class="slat-group-header-actions">
                                                <div class="btn-group">
                                                    <a class="btn btn-default btn-sm disabled" href="#modal-work-experience" data-toggle="modal">Add</a>
                                                    <div class="btn-group">
                                                        <a href="#" class="disabled btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
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
                                                    <a class="btn btn-default btn-sm disabled" href="#modal-work-experience" data-toggle="modal">Add Work Experience</a> <a href="#" class="btn btn-default btn-sm hide-section disabled" data-section="work-experience">Hide Section</a>
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
                                                    <a href="#modal-education" data-toggle="modal" class="btn btn-default btn-sm disabled">Add</a>
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-default btn-sm dropdown-toggle disabled" data-toggle="dropdown">
                                                            <i class="fa fa-caret-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="#modal-education" data-toggle="modal" >Add Item</a></li>
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
                                            <div class="slat">
                                                <div class="slat-message slat-message-sm">
                                                    <h3>This section is empty, add your first item.</h3>
                                                    <a href="#modal-education" data-toggle="modal"  class="btn btn-default btn-sm disabled">Add Education</a> <a href="#" class="btn btn-default btn-sm hide-section disabled" data-section="education">Hide Section</a>
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
                                            <div class="slat-group-header-actions">
                                                <div class="btn-group">
                                                    <a href="#modal-licenses" data-toggle="modal" class="btn btn-default btn-sm disabled">Add</a>
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-default btn-sm dropdown-toggle disabled" data-toggle="dropdown">
                                                            <i class="fa fa-caret-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="#modal-licenses" data-toggle="modal">Add Item</a></li>
                                                            <li role="presentation" class="divider"></li>
                                                            <li><a href="#">Move Section Up</a></li>
                                                            <li><a href="#">Move Section Down</a></li>
                                                            <li><a href="#" class="hide-section" data-section="licenses">Hide Section</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slat-group-content">
                                            <div class="slat">
                                                <div class="slat-message slat-message-sm">
                                                    <h3>This section is empty, add your first item.</h3>
                                                    <a href="#modal-education" data-toggle="modal"  class="btn btn-default btn-sm disabled">Add Education</a> <a href="#" class="btn btn-default btn-sm hide-section disabled" data-section="education">Hide Section</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slat-group-footer"></div>
                                    </div>
                                </section>
                            </section>
                        </div>
                        <div class="col-md-3">
                            <section class="section">
                                <h2>Portfolio Status</h2>
                                <div class="progress">
                                    <div class="progress-bar" style="width:10%">0%</div>
                                </div>
                                <p>Completing your Portfolio ensures accurate awarding of CE credit and helps us make better recomendations.</p>
                                <!--<p><a href="/portfolio-wizard.php" class="btn btn-sm btn-success">Complete Portfolio</a></p>-->
                                <p><a href="#modal-portfolio-wizard" data-toggle="modal" class="size-check-init btn btn-success btn-sm">Get Started</a></p>
                            </section>
                        </div>
                    </div>
                </div> <!-- /tab-pane -->

                <div class="tab-pane fade" id="tab-3">
                    <div class="row">

                        <div class="col-md-3 hidden-xs hidden-sm hidden-print" data-equalize="layout-columns">

                            <section class="section section-refinement-options equalized">

                                <section class="section section-refinement-group section-refinement-group-first text-center">
                                    <a href="#modal-ce-summary" class="btn btn-default btn-lg" data-toggle="modal">View CE Summary <i class="fa fa-chevron-right"></i> </a>
                                </section>

                                <section class="section section-refinement-group">
                                    <h3>Search</h3>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </section>

                                <section class="section section-refinement-group">
                                    <h3>Date Range</h3>
                                    <select class="form-control">
                                        <optgroup label="Presets">
                                            <option>Since January 1</option>
                                            <option>Last 6 months</option>
                                            <option selected="">Last 12 months</option>
                                            <option>Last 24 months</option>
                                            <option>Previous Calendar Year</option>
                                            <option>Complete History</option>
                                        </optgroup>
                                        <optgroup label="Custom">
                                            <option value="custom">Custom Range</option>
                                        </optgroup>
                                    </select>
                                </section>

                                <section class="section section-refinement-group">
                                    <h3>Course Type</h3>
                                    <ul class="list-unstyled">
                                        <li class="checkbox">
                                            <label><input type="checkbox" checked=""> Curriculum</label>
                                        </li>
                                        <li class="checkbox">
                                            <label><input type="checkbox" checked=""> Courses</label>
                                        </li>
                                        <li class="checkbox">
                                            <label><input type="checkbox" checked=""> Learning Events</label>
                                        </li>
                                        <li class="checkbox">
                                            <label><input type="checkbox"> Assessments</label>
                                        </li>
                                    </ul>
                                </section>

                            </section>
                        </div>


                        <div class="col-md-9" data-equalize="layout-columns">
                            <section class="section visible-print">
                                <h1>My Completed</h1>
                            </section>
                            <section class="section visible-print">
                                <h2>Student Information</h2>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label>Name:</label> Stephanie Juniper
                                    </div>
                                    <div class="col-xs-6">
                                        <label>Report Range:</label> Jul 13, 2011 – Jul 12, 2013
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label>User ID:</label> 123467890
                                    </div>
                                    <div class="col-xs-6">
                                        <label>Hire/Re-hire Date:</label> Jun 5, 2015
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label>Job Title:</label> RN
                                    </div>
                                    <div class="col-xs-6">
                                        <label>Active Date:</label> Jun 5, 2015
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label>Job Category:</label> Nurse
                                    </div>
                                    <div class="col-xs-6">
                                        <label>Review Date:</label> Jun 5, 2015
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label>Department:</label> Nursing
                                    </div>
                                </div>
                            </section>
                            <section class="section section-results">
                                <section class="section section-results-header">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h2>Transcript <small>Showing 1-20 of 35</small></h2>
                                            <div class="section section-refinement-applied">
                                                <h3>Refinements</h3>
                                                <div class="tag-group">
                                                    <a href="#" class="tag">Last 12 Months<i class="fa fa-times"></i></a>
                                                    <a href="#" class="tag">Curriculum<i class="fa fa-times"></i></a>
                                                    <a href="#" class="tag">Courses<i class="fa fa-times"></i></a>
                                                    <a href="#" class="tag">Learning Events<i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 hidden-xs hidden-sm">
                                            <div class="section-results-header-sort">
                                                <div class="dropdown">
                                                    <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Date <i class="fa fa-sort"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li class="active"><a href="#">Date</a></li>
                                                        <li><a href="#">Name</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="section">

                                    <?php

                                    $content = '
                                        <section class="section">
                                            <h5>Added</h5>
                                            <p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
                                        </section>
                                        <section class="section">
                                            <h5>Updated</h5>
                                            <p>Stephanie Juniper, Feb 7, 2014 11:57am</p>
                                        </section>
                                        <section class="section">
                                            <h5>Comments</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </section>
                                        <section class="section">
                                            <small class="text-muted">
                                                Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
                                            </small>
                                        </section>
                                    ';
                                    $slat = array(
                                        'title' => 'Student-Entered Learning Event',
                                        'meta' => array(
                                            array(
                                                'type' => 'Learning Event',
                                            ),
                                            array(
                                                'label' => 'Est. Time:',
                                                'value' => '1h',
                                            ),
                                            array(
                                                'label' => 'Entry:',
                                                'value' => 'Student',
                                            ),
                                            array(
                                                'label' => 'Completed: ',
                                                'value' => 'May 19, 2013',
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            ),
                                        ),
                                        'action' => array(
                                            'type' => 'custom',
                                            'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-learningevent-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                        ),
                                        'nested' => array(
                                            'hide' => array($content),
                                        )
                                    );
                                    echo createSlat($slat);

                                    $slat = array(
                                        'title' => '<a href="course-complete.php">Understanding Chronic Pain Management</a>',
                                        'meta' => array(
                                            array(
                                                'type' => 'Course',
                                            ),
                                            array(
                                                'label' => 'Est. Time:',
                                                'value' => '2h 10m',
                                            ),
                                            array(
                                                'label' => 'Completed: ',
                                                'value' => 'May 21, 2013',
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            ),
                                        ),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                            'link' => '#',
                                        )
                                    );
                                    echo createSlat($slat);

                                    $slat = array(
                                        'title' => '<a href="course.php">Advanta 2 Med Surg Bed</a>',
                                        'meta' => array(
                                            array(
                                                'type' => 'Course',
                                            ),
                                            array(
                                                'label' => 'Est. Time:',
                                                'value' => '15m',
                                            ),
                                            array(
                                                'label' => 'Completed: ',
                                                'value' => 'May 18, 2013',
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            ),
                                        ),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                            'link' => '#',
                                        )
                                    );
                                    echo createSlat($slat);

                                    $slat = array(
                                        'title' => '<a href="course.php">Content with Video</a>',
                                        'meta' => array(
                                            array(
                                                'type' => 'Course',
                                            ),
                                            array(
                                                'label' => 'Est. Time:',
                                                'value' => '2h',
                                            ),
                                            array(
                                                'label' => 'Completed: ',
                                                'value' => 'May 28, 2013',
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            ),
                                        ),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                            'link' => '#',
                                        )
                                    );
                                    echo createSlat($slat);

                                    $slat = array(
                                        'title' => '<a href="course.php">Content with Video</a>',
                                        'meta' => array(
                                            array(
                                                'type' => 'Course',
                                            ),
                                            array(
                                                'label' => 'Est. Time:',
                                                'value' => '2h',
                                            ),
                                            array(
                                                'label' => 'Completed: ',
                                                'value' => 'May 29, 2013',
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            ),
                                        ),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                            'link' => '#',
                                        )
                                    );
                                    echo createSlat($slat);

                                    $slat = array(
                                        'title' => '<a href="course.php">Content with Video</a>',
                                        'meta' => array(
                                            array(
                                                'type' => 'Course',
                                            ),
                                            array(
                                                'label' => 'Est. Time:',
                                                'value' => '2h',
                                            ),
                                            array(
                                                'label' => 'Completed: ',
                                                'value' => 'May 30, 2013',
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            ),
                                        ),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                            'link' => '#',
                                        )
                                    );
                                    echo createSlat($slat);

                                    $content = '
                                        <section class="section">
                                            <h5>Added</h5>
                                            <p>Admin\'s Name, Feb 7, 2014 11:54am</p>
                                        </section>
                                        <section class="section">
                                            <h5>Updated</h5>
                                            <p>Admin\'s Name, Feb 7, 2014 11:54am</p>
                                        </section>
                                        <section class="section">
                                            <h5>Comments</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </section>
                                        <section class="section">
                                            <small class="text-muted">
                                                Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
                                            </small>
                                        </section>
                                    ';
                                    $nested = createSlat(array(
                                        'attributes' => array(
                                            array('class',array('slat')),
                                        ),
                                        'title' => 'CE - AHIMA',
                                        'meta' => array(
                                            array(
                                                'label' => 'Discipline:',
                                                'value' => 'Pharmacist, Nuclear',
                                            ),
                                            array(
                                                'label' => 'Credits:',
                                                'value' => '4.00 AMA PRA Category 1 Credit™',
                                            ),
                                            array(
                                                'label' => 'License:',
                                                'value' => '12346789011112',
                                            ),
                                            array(
                                                'label' => 'State:',
                                                'value' => 'TN',
                                            ),
                                        ),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                            'link' => '#',
                                        )
                                    ));
                                    $slat = array(
                                        'title' => 'Admin-Entered Learning Event',
                                        'meta' => array(
                                            array(
                                                'type' => 'Learning Event',
                                            ),
                                            array(
                                                'label' => 'Est. Time:',
                                                'value' => '1h',
                                            ),
                                            array(
                                                'label' => 'Entry:',
                                                'value' => 'Admin',
                                            ),
                                            array(
                                                'label' => 'Completed: ',
                                                'value' => 'July 11, 2013',
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            ),
                                        ),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                            'link' => '#',
                                        ),
                                        'nested' => array(
                                            'show' => array($nested),
                                            'hide' => array($content),
                                        )
                                    );
                                    echo createSlat($slat);

                                    $content = '
                                        <section class="section">
                                            <h5>Added</h5>
                                            <p>Admin\'s Name, Feb 7, 2014 11:54am</p>
                                        </section>
                                        <section class="section">
                                            <h5>Updated</h5>
                                            <p>Admin\'s Name, Feb 7, 2014 11:54am</p>
                                        </section>
                                        <section class="section">
                                            <h5>Comments</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </section>
                                        <section class="section">
                                            <small class="text-muted">
                                                Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
                                            </small>
                                        </section>
                                    ';
                                    $slat = array(
                                        'title' => '<a data-toggle="modal" href="#modal-learningevent-details">Admin-Entered Learning Event as a Course</a>',
                                        'meta' => array(
                                            array(
                                                'type' => 'Course',
                                            ),
                                            array(
                                                'label' => 'Est. Time:',
                                                'value' => '1h',
                                            ),
                                            array(
                                                'label' => 'Entry:',
                                                'value' => 'Admin',
                                            ),
                                            array(
                                                'label' => 'Completed: ',
                                                'value' => 'July 11, 2013',
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            ),
                                        ),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                            'link' => '#',
                                        ),
                                        'nested' => array(
                                            'hide' => array($content),
                                        )
                                    );
                                    echo createSlat($slat);

                                    $slat = array(
                                        'title' => '<a href="course.php">Heart Disease and Treatment Options</a>',
                                        'meta' => array(
                                            array(
                                                'type' => 'Course',
                                            ),
                                            array(
                                                'label' => 'Est. Time:',
                                                'value' => '1h',
                                            ),
                                            array(
                                                'label' => 'Completed: ',
                                                'value' => 'Oct 10, 2013',
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            ),
                                        ),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                            'link' => '#',
                                        )
                                    );
                                    echo createSlat($slat);

                                    $slat = array(
                                        'title' => '<a href="course.php">Lippencott - 18-lead electrocardiogram</a>',
                                        'meta' => array(
                                            array(
                                                'type' => 'Course',
                                            ),
                                            array(
                                                'label' => 'Est. Time:',
                                                'value' => '1h',
                                            ),
                                            array(
                                                'label' => 'Completed: ',
                                                'value' => 'Oct 16, 2013',
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            ),
                                        ),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                            'link' => '#',
                                        )
                                    );
                                    echo createSlat($slat);

                                    $nested = createSlat(array(
                                        'attributes' => array(
                                            array('class',array('slat')),
                                        ),
                                        'title' => 'CE - AHIMA',
                                        'meta' => array(
                                            array(
                                                'label' => 'Discipline:',
                                                'value' => 'Pharmacist, Nuclear',
                                            ),
                                            array(
                                                'label' => 'Credits:',
                                                'value' => '4.00 AMA PRA Category 1 Credit™',
                                            ),
                                            array(
                                                'label' => 'License:',
                                                'value' => '12346789011112',
                                            ),
                                            array(
                                                'label' => 'State:',
                                                'value' => 'TN',
                                            ),
                                        ),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                            'link' => '#',
                                        )
                                    ));
                                    $nested1 = createSlat(array(
                                        'attributes' => array(
                                            array('class',array('slat')),
                                        ),
                                        'title' => 'CE - AAPC',
                                        'meta' => array(
                                            array(
                                                'label' => 'Discipline:',
                                                'value' => 'Emergency Medical Technician - First Responder',
                                            ),
                                            array(
                                                'label' => 'Credits:',
                                                'value' => '2.00 Contact Hours',
                                            ),
                                            array(
                                                'label' => 'License:',
                                                'value' => '12346789011112',
                                            ),
                                            array(
                                                'label' => 'State:',
                                                'value' => 'TN',
                                            ),
                                        ),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                            'link' => '#',
                                        )
                                    ));
                                    $slat = array(
                                        'title' => '<a href="course.php">A Day in the Life of ICD-10</a>',
                                        'meta' => array(
                                            array(
                                                'type' => 'Course',
                                            ),
                                            array(
                                                'label' => 'Est. Time:',
                                                'value' => '1h',
                                            ),
                                            array(
                                                'label' => 'Completed: ',
                                                'value' => 'Oct 19, 2013',
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            )
                                        ),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                            'link' => '#',
                                        ),
                                        'nested' => array(
                                            'show' => array($nested,$nested1),
                                        )
                                    );
                                    echo createSlat($slat);

                                    ?>

                                </section>

                                <?php
                                    $stickybar = array(
                                        'sets' => array(
                                            array(
                                                'position' => 'left',
                                                'classes' => array('hidden-xs','hidden-sm'),
                                                'html' => '
                                                    <a href="#modal-print" data-toggle="modal" class="btn btn-success">Print</a>
                                                    <a href="#modal-learningevent" data-toggle="modal" class="btn btn-success">Add Learning Event</a>
                                                ',
                                            ),
                                            array(
                                                'position' => 'left',
                                                'classes' => array('visible-xs','visible-sm'),
                                                'html' => '
                                                    <div class="btn-group dropup">
                                                        <a href="#" class="btn btn-success">Print</a>
                                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                            <i class="fa fa-caret-up"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#modal-print" data-toggle="modal">Print</a></li>
                                                            <li><a href="#modal-learningevent" data-toggle="modal">Add Learning Event</a></li>
                                                            <li><a href="#modal-ce-summary" data-toggle="modal">View CE Credit Summary</a></li>
                                                        </ul>
                                                    </div>
                                                ',
                                            ),
                                            array(
                                                'position' => 'right',
                                                'classes' => array('hidden-xs','hidden-sm'),
                                                'html' => '
                                                    <div class="btn-group dropup">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 35 <i class="fa fa-caret-up"></i></button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="active"><a href="#">20 per page</a></li>
                                                            <li><a href="#">50 per page</a></li>
                                                            <li><a href="#">100 per page</a></li>
                                                            <li><a href="#">250 per page</a></li>
                                                            <li><a href="#">All results</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                        <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                                    </div>
                                                ',
                                            ),
                                            array(
                                                'position' => 'right',
                                                'classes' => array('visible-xs','visible-sm'),
                                                'html' => '
                                                    <a href="#modal-refine" class="btn btn-default" data-toggle="modal"><i class="fa fa-filter"></i></a>
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                        <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                                    </div>
                                                ',
                                            ),
                                        ),
                                    );
                                    echo createStickybar($stickybar);
                                ?>

                            </section>
                        </div><!-- col -->
                    </div><!-- row -->
                </div> <!-- /tab-pane -->

                <div class="tab-pane fade" id="tab-4">
                    <div class="row">
                        <div class="col-md-3 hidden-xs hidden-sm hidden-print">
                            <section class="section section-refinement-options">
                                <section class="section section-refinement-group section-refinement-group-first">
                                    <h3>Search</h3>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </section>
                                <section class="section section-refinement-group">
                                    <h3>Date Range <small>Based on Start Date</small></h3>
                                    <div class="form-group">
                                        <select class="form-control" id="select-daterange">
                                            <optgroup label="Presets">
                                                <option>Since January 1</option>
                                                <option>Last 6 Months</option>
                                                <option selected>Last 12 Months</option>
                                                <option>Last 24 Months</option>
                                                <option>Previous Calendar Year</option>
                                            </optgroup>
                                            <optgroup label="Custom">
                                                <option value="custom">Custom Range</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group" id="custom-daterange" style="display:none">
                                        <label>Start Date</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control" value="06/05/2015">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                        <label style="margin-top: 10px;">End Date</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control" value="06/04/2016">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </section>
                                <section class="section section-refinement-group">
                                    <h3>Type</h3>
                                    <ul class="list-unstyled">
                                        <li class="checkbox">
                                            <label><input type="checkbox"> Strategic</label>
                                        </li>
                                        <li class="checkbox">
                                            <label><input type="checkbox"> Departmental</label>
                                        </li>
                                        <li class="checkbox">
                                            <label><input type="checkbox"> Developmental</label>
                                        </li>
                                        <li class="checkbox">
                                            <label><input type="checkbox"> Individual</label>
                                        </li>
                                    </ul>
                                </section>
                                <section class="section section-refinement-group">
                                    <h3>Status</h3>
                                    <ul class="list-unstyled">
                                        <li class="checkbox">
                                            <label><input type="checkbox"> Not Yet Started</label>
                                        </li>
                                        <li class="checkbox">
                                            <label><input type="checkbox"> In Progress</label>
                                        </li>
                                        <li class="checkbox">
                                            <label><input type="checkbox"> Complete</label>
                                        </li>
                                        <li class="checkbox">
                                            <label><input type="checkbox"> Not Applicable</label>
                                        </li>
                                    </ul>
                                </section>
                            </section>
                        </div>
                        <div class="col-md-9">
                            <section class="section">
                                <section class="section section-results-header">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h2>Goals <small>Showing 1-20 of 35</small></h2>
                                            <div class="section section-refinement-applied">
                                                <h3>Refinements</h3>
                                                <div class="tag-group">
                                                    <a href="#" class="tag">Last 12 Months<i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 hidden-xs hidden-sm">
                                            <div class="section-results-header-sort">
                                                <div class="dropdown">
                                                    <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Date <i class="fa fa-sort"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li class="active"><a href="#">Date</a></li>
                                                        <li><a href="#">Name</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <?php
                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-attention','slat-spaced','slat-callout')),
                                    ),
                                    'title' => '<a href="#modal-goal-manage" data-toggle="modal">This is the title of a goal</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Individual',
                                        ),
                                        array(
                                            'label' => 'Date: ',
                                            'value' => 'Apr. 1, 2014',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'In Progress',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-goal-manage" data-toggle="modal">Manage<i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced')),
                                    ),
                                    'title' => '<a href="#modal-goal-manage" data-toggle="modal">This is the title of a goal</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Departmental',
                                        ),
                                        array(
                                            'label' => 'Date: ',
                                            'value' => 'Jan. 1, 2015',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'In Progress',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-goal-manage" data-toggle="modal">Manage<i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced')),
                                    ),
                                    'title' => '<a href="#modal-goal-manage" data-toggle="modal">This is the title of a goal</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Individual',
                                        ),
                                        array(
                                            'label' => 'Date: ',
                                            'value' => 'Jan. 1, 2015',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'In Progress',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-goal-manage" data-toggle="modal">Manage<i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced')),
                                    ),
                                    'title' => '<a href="#modal-goal-manage" data-toggle="modal">This is the title of a goal</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Individual',
                                        ),
                                        array(
                                            'label' => 'Date: ',
                                            'value' => 'Jan. 1, 2015',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'In Progress',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-goal-manage" data-toggle="modal">Manage<i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                    )
                                );
                                echo createSlat($slat);
                                ?>
                            </section>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'position' => 'left',
                                            'html' => '<a href="#modal-goal-add" class="btn btn-success" data-toggle="modal">Add Goal</a>',
                                        ),
                                        array(
                                            'position' => 'right',
                                            'classes' => array('hidden-xs','hidden-sm'),
                                            'html' => '
                                                <div class="btn-group dropup">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 35 <i class="fa fa-caret-up"></i></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="active"><a href="#">20 per page</a></li>
                                                        <li><a href="#">50 per page</a></li>
                                                        <li><a href="#">100 per page</a></li>
                                                        <li><a href="#">250 per page</a></li>
                                                        <li><a href="#">Show All</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                    <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                                </div>
                                            ',
                                        ),
                                        array(
                                            'position' => 'right',
                                            'classes' => array('visible-xs','visible-sm'),
                                            'html' => '
                                                <a href="#modal-refine-goals" class="btn btn-default" data-toggle="modal"><i class="fa fa-filter"></i></a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                    <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                                </div>
                                            ',
                                        ),

                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </div>
                    </div>
                </div> <!-- /tab-pane -->

                <div class="tab-pane fade" id="tab-5">
                    <div class="row">
                        <div class="col-md-3 hidden-xs hidden-sm hidden-print">
                            <section class="section section-refinement-options">
                                <section class="section section-refinement-group section-refinement-group-first">
                                    <h3>Search</h3>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </section>
                                <section class="section section-refinement-group">
                                    <h3>Date Range</h3>
                                    <div class="form-group">
                                        <select class="form-control" id="select-daterange">
                                            <optgroup label="Presets">
                                                <option>Since January 1</option>
                                                <option>Last 6 Months</option>
                                                <option selected>Last 12 Months</option>
                                                <option>Last 24 Months</option>
                                                <option>Previous Calendar Year</option>
                                            </optgroup>
                                            <optgroup label="Custom">
                                                <option value="custom">Custom Range</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group" id="custom-daterange" style="display:none">
                                        <label>Start Date</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control" value="06/05/2015">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                        <label style="margin-top: 10px;">End Date</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control" value="06/04/2016">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </section>

                                <!-- <section class="section section-refinement-group">
                                    <h3>Facet</h3>
                                    <ul class="list-unstyled">
                                        <li class="checkbox">
                                            <label><input type="checkbox"> Facet Name</label>
                                        </li>
                                    </ul>
                                </section> -->

                            </section>
                        </div>
                        <div class="col-md-9">
                            <section class="section">
                                <section class="section section-results-header">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h2>Notes <small>Showing 1-20 of 35</small></h2>
                                            <div class="section section-refinement-applied">
                                                <h3>Refinements</h3>
                                                <div class="tag-group">
                                                    <a href="#" class="tag">Last 12 Months<i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 hidden-xs hidden-sm">
                                            <div class="section-results-header-sort">
                                                <div class="dropdown">
                                                    <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Date <i class="fa fa-sort"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li class="active"><a href="#">Date</a></li>
                                                        <li><a href="#">Name</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <?php

                                $content = '
                                    <section class="section">
                                        <h5>Detail</h5>
                                        <p>This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                    </section>
                                    <section class="section">
                                        <h5>Attachments</h5>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-paperclip"></i> <a href="#">This is a document</a></li>
                                        </ul>
                                    </section>
                                ';
                                $slat = array(
                                    'title' => 'This is my note',
                                    'meta' => array(
                                        array(
                                            'label' => 'Regarding:',
                                            'value' => 'Stephanie Juniper',
                                        ),
                                        array(
                                            'label' => 'Updated: ',
                                            'value' => 'Mar 1, 2014 at 2:13pm',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),

                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-note-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                    ),
                                    'nested' => array(
                                        'hide' => array($content),
                                    )
                                );
                                echo createSlat($slat);

                                echo createSlat($slat);

                                echo createSlat($slat);

                                echo createSlat($slat);

                                echo createSlat($slat);

                                ?>
                            </section>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'position' => 'left',
                                            'html' => '<a href="#modal-note-add" data-toggle="modal" class="btn btn-success">Add Note</a>',
                                        ),
                                        array(
                                            'position' => 'right',
                                            'classes' => array('hidden-xs','hidden-sm'),
                                            'html' => '
                                                <div class="hidden-xs hidden-sm">
                                                    <div class="btn-group dropup">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 35 <i class="fa fa-caret-up"></i></button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="active"><a href="#">20 per page</a></li>
                                                            <li><a href="#">50 per page</a></li>
                                                            <li><a href="#">100 per page</a></li>
                                                            <li><a href="#">250 per page</a></li>
                                                            <li><a href="#">Show All</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                        <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                                    </div>
                                            ',
                                        ),

                                        array(
                                            'position' => 'right',
                                            'classes' => array('visible-xs','visible-sm'),
                                            'html' => '
                                                <a href="#modal-refine-notes" class="btn btn-default" data-toggle="modal"><i class="fa fa-filter"></i></a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                    <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                                </div>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </div>
                    </div>
                </div> <!-- /tab-pane -->

                <div class="tab-pane fade" id="tab-6">
                    <div class="row">
                        <div class="col-md-3 hidden-xs hidden-sm hidden-print">
                            <section class="section section-refinement-options">
                                <section class="section section-refinement-group section-refinement-group-first">
                                    <h3>Search</h3>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </section>
                                <section class="section section-refinement-group">
                                    <h3>Date Range</h3>
                                    <div class="form-group">
                                        <select class="form-control" id="select-daterange">
                                            <optgroup label="Presets">
                                                <option>Since January 1</option>
                                                <option>Last 6 Months</option>
                                                <option selected>Last 12 Months</option>
                                                <option>Last 24 Months</option>
                                                <option>Previous Calendar Year</option>
                                            </optgroup>
                                            <optgroup label="Custom">
                                                <option value="custom">Custom Range</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group" id="custom-daterange" style="display:none">
                                        <label>Start Date</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control" value="06/05/2015">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                        <label style="margin-top: 10px;">End Date</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control" value="06/04/2016">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </section>

                                <!-- <section class="section section-refinement-group">
                                    <h3>Facet</h3>
                                    <ul class="list-unstyled">
                                        <li class="checkbox">
                                            <label><input type="checkbox"> Facet Name</label>
                                        </li>
                                    </ul>
                                </section> -->

                            </section>
                        </div>
                        <div class="col-md-9">
                            <section class="section">
                                <section class="section section-results-header">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h2>Documents <small>Showing 1-20 of 35</small></h2>
                                            <div class="section section-refinement-applied">
                                                <h3>Refinements</h3>
                                                <div class="tag-group">
                                                    <a href="#" class="tag">Last 12 Months<i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 hidden-xs hidden-sm">
                                            <div class="section-results-header-sort">
                                                <div class="dropdown">
                                                    <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Date <i class="fa fa-sort"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li class="active"><a href="#">Date</a></li>
                                                        <li><a href="#">Name</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <?php

                                $content = '
                                    <section class="section">
                                        <h5>Description</h5>
                                        <p>This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                    </section>
                                ';
                                $slat = array(
                                    'title' => '<a href="#">This is the document name</a>',
                                    'meta' => array(
                                        array(
                                            'label' => 'Attachment:',
                                            'value' => 'Word Document',
                                        ),
                                        array(
                                            'label' => 'Updated: ',
                                            'value' => 'Mar 1, 2014 at 2:13pm',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),

                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                    ),
                                    'nested' => array(
                                        'hide' => array($content),
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'title' => '<a href="#">This is the document name</a>',
                                    'meta' => array(
                                        array(
                                            'label' => 'Attachment:',
                                            'value' => 'Portable Document File',
                                        ),
                                        array(
                                            'label' => 'Updated: ',
                                            'value' => 'Mar 1, 2014 at 2:13pm',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),

                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                    ),
                                    'nested' => array(
                                        'hide' => array($content),
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'title' => '<a href="#">This is the document name</a>',
                                    'meta' => array(
                                        array(
                                            'label' => 'Attachment:',
                                            'value' => 'Excel Spreadsheet',
                                        ),
                                        array(
                                            'label' => 'Updated: ',
                                            'value' => 'Mar 1, 2014 at 2:13pm',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),

                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                    ),
                                    'nested' => array(
                                        'hide' => array($content),
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'title' => '<a href="#">This is the document name</a>',
                                    'meta' => array(
                                        array(
                                            'label' => 'Attachment:',
                                            'value' => 'Portable Document File',
                                        ),
                                        array(
                                            'label' => 'Updated: ',
                                            'value' => 'Mar 1, 2014 at 2:13pm',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),

                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                    ),
                                    'nested' => array(
                                        'hide' => array($content),
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'title' => '<a href="#">This is the document name</a>',
                                    'meta' => array(
                                        array(
                                            'label' => 'Attachment:',
                                            'value' => 'Image',
                                        ),
                                        array(
                                            'label' => 'Updated: ',
                                            'value' => 'Mar 1, 2014 at 2:13pm',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),

                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                    ),
                                    'nested' => array(
                                        'hide' => array($content),
                                    )
                                );
                                echo createSlat($slat);

                                ?>
                            </section>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'position' => 'left',
                                            'html' => '<a href="#modal-document-add" data-toggle="modal" class="btn btn-success">Add Document</a>',
                                        ),
                                        array(
                                            'position' => 'right',
                                            'classes' => array('hidden-xs','hidden-sm'),
                                            'html' => '
                                                <div class="btn-group dropup">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 35 <i class="fa fa-caret-up"></i></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="active"><a href="#">20 per page</a></li>
                                                        <li><a href="#">50 per page</a></li>
                                                        <li><a href="#">100 per page</a></li>
                                                        <li><a href="#">250 per page</a></li>
                                                        <li><a href="#">Show All</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                    <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                                </div>
                                            ',
                                        ),
                                        array(
                                            'position' => 'right',
                                            'classes' => array('visible-xs','visible-sm'),
                                            'html' => '
                                                <a href="#modal-refine-documents" class="btn btn-default" data-toggle="modal"><i class="fa fa-filter"></i></a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                    <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                                </div>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </div>
                    </div>
                </div> <!-- /tab-pane -->

            </div><!-- /tab-content -->

        </section>
    </div><!-- /container -->
</div> <!-- /layout -->


<!-- Modal -->
<div id="modal-refine-goals" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <section class="section section-refinement-group section-refinement-group-first">
                        <h3>Search</h3>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Date Range <small>Based on Start Date</small></h3>
                        <div class="form-group">
                            <select class="form-control" id="select-daterange">
                                <optgroup label="Presets">
                                    <option>Since January 1</option>
                                    <option>Last 6 Months</option>
                                    <option selected>Last 12 Months</option>
                                    <option>Last 24 Months</option>
                                    <option>Previous Calendar Year</option>
                                </optgroup>
                                <optgroup label="Custom">
                                    <option value="custom">Custom Range</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group" id="custom-daterange" style="display:none">
                            <label>Start Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/05/2015">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <label style="margin-top: 10px;">End Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/04/2016">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Search</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div id="modal-refine-notes" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <section class="section section-refinement-group section-refinement-group-first">
                        <h3>Search</h3>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Date Range <small>Based on Start Date</small></h3>
                        <div class="form-group">
                            <select class="form-control" id="select-daterange">
                                <optgroup label="Presets">
                                    <option>Since January 1</option>
                                    <option>Last 6 Months</option>
                                    <option selected>Last 12 Months</option>
                                    <option>Last 24 Months</option>
                                    <option>Previous Calendar Year</option>
                                </optgroup>
                                <optgroup label="Custom">
                                    <option value="custom">Custom Range</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group" id="custom-daterange" style="display:none">
                            <label>Start Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/05/2015">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <label style="margin-top: 10px;">End Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/04/2016">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Search</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-refine-documents" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <section class="section section-refinement-group section-refinement-group-first">
                        <h3>Search</h3>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Date Range <small>Based on Start Date</small></h3>
                        <div class="form-group">
                            <select class="form-control" id="select-daterange">
                                <optgroup label="Presets">
                                    <option>Since January 1</option>
                                    <option>Last 6 Months</option>
                                    <option selected>Last 12 Months</option>
                                    <option>Last 24 Months</option>
                                    <option>Previous Calendar Year</option>
                                </optgroup>
                                <optgroup label="Custom">
                                    <option value="custom">Custom Range</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group" id="custom-daterange" style="display:none">
                            <label>Start Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/05/2015">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <label style="margin-top: 10px;">End Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/04/2016">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Search</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div id="modal-portfolio-wizard" class="modal fade" tabindex="-1">
    <div class="modal-dialog" style="width:auto; max-width:770px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Complete Portfolio</h4>
            </div>
            <div class="modal-body modal-wizard-body">
                <iframe id="portfolio-wizard-modal" src="portfolio-wizard-modal.php" width="100%" height="770" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>

            <div class="modal-footer">
                <a class="wizard-nav-link btn btn-success size-check" href="#" data-rel="work-experience"><span class="button-label">Next: </span>Work Experience</a>
                <a class="btn btn-default" href="#" onClick ="window.closeModal();">Finished</a>
            </div>

        </div>

    </div>
</div>




<!-- ADD MODALS -->
<!-- Modal -->
<div id="modal-work-experience" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Work Experience</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group profession">
                                <label class="control-label">Profession</label>
                                <select class="form-control">
                                    <option>Choose a Profession</option>
                                    <option value="with-specialty" data-profession="surgeon">Surgeon: With a specialty</option>
                                    <option value="without-specialty" data-profession="tech">Without a specialty</option>
                                    <option value="without-specialty" data-profession="student">Has no specialty</option>
                                    <option value="with-specialty" data-profession="nurse">Nurse: Has specialty</option>
                                </select>
                            </div>
                            <div class="form-group surgeon professional-specialty hidden">
                                <label class="control-label">Specialty</label>
                                <select class="form-control">
                                    <option>Choose a Surgeon Specialty</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group nurse professional-specialty hidden">
                                <label class="control-label">Specialty</label>
                                <select class="form-control">
                                    <option>Choose a Nurse Specialty</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Settings</label>
                                <select class="form-control">
                                    <option>Choose a Setting</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="row date-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Start Date</label>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <select class="form-control">
                                                    <option disabled selected>MM</option>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-6">
                                                <select class="form-control">
                                                    <option disabled selected>YYYY</option>
                                                    <option>1970</option>
                                                    <option>1971</option>
                                                    <option>1972</option>
                                                    <option>1973</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Completion Date</label>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <select class="form-control">
                                                    <option disabled selected>MM</option>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-6">
                                                <select class="form-control">
                                                    <option disabled selected>YYYY</option>
                                                    <option>1970</option>
                                                    <option>1971</option>
                                                    <option>1972</option>
                                                    <option>1973</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">I Currently Work Here?</label>
                                <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                                <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
                            </div>

                            <div class="experience-additional-info collapse-group collapse">

                                <div class="form-group">
                                    <label class="control-label">Company Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Title</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Location</label>
                                    <input type="text" class="form-control">
                                </div>

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


                                <div class="form-group">
                                    <label class="control-label">Description</label>
                                    <textarea rows="4" class="form-control"></textarea>
                                </div>
                            </div>

                            <a href="#" class="collapse-toggle" data-toggle-text="Show additional information|Hide additional information">Show additional information</a>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-education" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Education</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="control-label">School Name</label>
                        <input type="text" name="schoolname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">City</label>
                        <input type="text" name="city" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Country</label>
                        <select id="inputCountry" class="form-control">
                            <option selected="">United States</option>
                            <option>Canada</option>
                            <option>Australia</option>
                            <option>...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">State or Province of Licensure</label>
                        <select class="form-control">
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR" selected>Arkansas</option>
                            <option>...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Degree</label>
                        <select class="form-control">
                            <option disabled selected>Select a Degree</option>
                            <option>BA</option>
                            <option>BS</option>
                            <option>Masters</option>
                            <option>Doctorate</option>
                            <option>...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Field of Study</label>
                        <select class="form-control">
                            <option disabled selected>Select a Field of Study</option>
                            <option>Biology</option>
                            <option>Chemistry</option>
                            <option>Engineering</option>
                            <option>English</option>
                            <option>...</option>
                            <option>...</option>
                        </select>
                    </div>

                    <div class="row date-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Start Date</label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <select class="form-control">
                                            <option disabled selected>MM</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                            <option>06</option>
                                            <option>07</option>
                                            <option>08</option>
                                            <option>09</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-6">
                                        <select class="form-control">
                                            <option disabled selected>YYYY</option>
                                            <option>1970</option>
                                            <option>1971</option>
                                            <option>1972</option>
                                            <option>1973</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Completion Date</label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <select class="form-control">
                                            <option disabled selected>MM</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                            <option>06</option>
                                            <option>07</option>
                                            <option>08</option>
                                            <option>09</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-6">
                                        <select class="form-control">
                                            <option disabled selected>YYYY</option>
                                            <option>1970</option>
                                            <option>1971</option>
                                            <option>1972</option>
                                            <option>1973</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Degree in Progress?</label>
                        <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                        <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-licenses" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add a License</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Discipline</label>
                    <select class="form-control" id="add-discipline">
                        <option value="">Select a Discipline</option>
                        <option value="default">Select a Discipline</option>
                        <option value="emt">Emergency Medical Technician</option>
                        <option value="pharmacist">Pharmacist</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Country</label>
                    <select class="form-control">
                        <option>Select a Country</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">State/Province of Licensure</label>
                    <select class="form-control">
                        <option>Select a State/Province</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">State License Number <small>Optional</small></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
                            <div class="input-group date">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="discipline-fields-pharmacist" class="discipline-fields">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">NABP eProfile ID Number <small>Optional</small></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Email Address</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <ul class="control-attachments control-attachments">
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-certifications" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add a Certification</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Certifying Body</label>
                    <select class="form-control">
                        <option>These are the options for Certifying Body</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Certification</label>
                    <select class="form-control">
                        <option>These are the options for Certification within the Certifying Body</option>
                    </select>
                </div>
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

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Certification Number <small>Optional</small></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <div class="field-shim">
                                <label><input type="checkbox" name="vehicle" value="Current" checked> Notify me upon expiration</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <ul class="control-attachments control-attachments">
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-resucitation-programs" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add a Resucitation Program</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Certifying Body</label>
                    <select class="form-control">
                        <option>Options for Certifying Body/Resucitation Program</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Certification</label>
                    <select class="form-control">
                        <option>Options for Certification within the Certifying Body/Resucitation Program</option>
                    </select>
                </div>
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

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Certification Number <small>Optional</small></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <div class="field-shim">
                                <label><input type="checkbox" name="vehicle" value="Current" checked> Notify me upon expiration</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <ul class="control-attachments control-attachments">
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-activities" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Volunteer Service</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Volunteer Type</label>
                    <select class="form-control" id="add-discipline">
                        <option value="">Select a Type</option>
                        <option value="default">Research</option>
                        <option value="emt">Teaching</option>
                        <option value="pharmacist">Volunteer Service</option>
                        <option value="pharmacist">Presentations</option>
                        <option value="pharmacist">Consulting</option>
                        <option value="pharmacist">More If Needed...</option>
                    </select>
                </div>

                <div id="activity-fields-teaching" class="activity-fields">
                    <div class="form-group">
                        <label class="control-label">Activity Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Organization Name</label>
                        <input type="text" class="form-control">
                    </div>
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
                    <div class="row date-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Start Date</label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <select class="form-control">
                                            <option disabled selected>MM</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                            <option>06</option>
                                            <option>07</option>
                                            <option>08</option>
                                            <option>09</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-6">
                                        <select class="form-control">
                                            <option disabled selected>YYYY</option>
                                            <option>1970</option>
                                            <option>1971</option>
                                            <option>1972</option>
                                            <option>1973</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Completion Date</label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <select class="form-control">
                                            <option disabled selected>MM</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                            <option>06</option>
                                            <option>07</option>
                                            <option>08</option>
                                            <option>09</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-6">
                                        <select class="form-control">
                                            <option disabled selected>YYYY</option>
                                            <option>1970</option>
                                            <option>1971</option>
                                            <option>1972</option>
                                            <option>1973</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Current Activity?</label>
                        <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                        <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea rows="4" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Attachment</label>
                        <ul class="control-attachments control-attachments">
                            <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                        </ul>
                        <div class="control-add-new">
                            <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-committee-work" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Committee Work</h4>
            </div>

            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Committee Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Committee Type</label>
                    <select class="form-control">
                        <option>Select a Committee Type</option>
                        <option>National Organization</option>
                        <option>Local or State Organization</option>
                        <option>Facility or Workplace Committee</option>
                        <option>Fraternity</option>
                        <option>Sorority</option>
                        <option>Alumni Organization</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Organization/Work Group</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Role</label>
                    <select id="inputCountry" class="form-control">
                        <option>Select a Role</option>
                        <option>Chair</option>
                        <option>Co-Chair</option>
                        <option>Officer/Board Member</option>
                        <option>Member</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Description</label>
                    <textarea rows="4" class="form-control"></textarea>
                </div>
                <div class="row date-row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">From</label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option disabled selected>MM</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option disabled selected>YYYY</option>
                                        <option>1970</option>
                                        <option>1971</option>
                                        <option>1972</option>
                                        <option>1973</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">To</label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option disabled selected>MM</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option disabled selected>YYYY</option>
                                        <option>1970</option>
                                        <option>1971</option>
                                        <option>1972</option>
                                        <option>1973</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label">To Present?</label>
                    <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                    <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
                </div>
                <div class="form-group">
                    <label class="control-label">Add a Link</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group new-memberships-group">
                    <label class="control-label">Memberships &amp; Associations</label>
                    <div class="control-add-new">
                        <a href="#" class="add-memberships">New Memberships &amp; Associations</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
            <div class="modal-footer alt">
                <a href="#" class="btn btn-success close-committee-work">Save</a> <a class="btn btn-success refresh-committee-work" href="#">Save and Add Another</a>  <a href="#" class="btn btn-default close-committee-work">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-memberships" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Memberships &amp; Associations</h4>
            </div>

            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Organization Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Membership Type</label>
                    <select class="form-control">
                        <option>Select a Membership Type</option>
                        <option>National Organization</option>
                        <option>Local or State Organization</option>
                        <option>Facility or Workplace Committee</option>
                        <option>Fraternity</option>
                        <option>Sorority</option>
                        <option>Alumni Organization</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Role</label>
                    <select id="inputCountry" class="form-control">
                        <option>Select a Role</option>
                        <option>Chair</option>
                        <option>Co-Chair</option>
                        <option>Officer/Board Member</option>
                        <option>Member</option>
                    </select>
                </div>

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

                <div class="form-group">
                    <label class="control-label">Description</label>
                    <textarea rows="4" class="form-control"></textarea>
                </div>
                <div class="row date-row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">From</label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option disabled selected>MM</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option disabled selected>YYYY</option>
                                        <option>1970</option>
                                        <option>1971</option>
                                        <option>1972</option>
                                        <option>1973</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">To</label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option disabled selected>MM</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option disabled selected>YYYY</option>
                                        <option>1970</option>
                                        <option>1971</option>
                                        <option>1972</option>
                                        <option>1973</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">To Present?</label>
                    <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                    <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
                </div>
                <div class="form-group new-work-committees-group">
                    <label class="control-label">Committee Work</label>
                    <div class="control-add-new">
                        <a href="#" class="add-committee-work">New Committee Work</a>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
            <div class="modal-footer alt">
                <a href="#" class="btn btn-success close-memberships">Save</a> <!--<a class="btn btn-success refresh-memberships" href="#">Save and Add Another</a>-->  <a href="#" class="btn btn-default close-memberships">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-teaching" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Teaching &amp; Preceptorship</h4>
            </div>

            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Activity Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Presentation/Instruction Type</label>
                    <select class="form-control">
                        <option>Select a Presentation/Instruction Type</option>
                        <option>Poster</option>
                        <option>Invited</option>
                        <option>Community/Patient Education</option>
                        <option>Other Activity Name</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Author(s)/Contributors</label>
                    <textarea rows="4" class="form-control"></textarea>
                </div>

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

                <div class="row date-row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">From</label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option disabled selected>MM</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option disabled selected>YYYY</option>
                                        <option>1970</option>
                                        <option>1971</option>
                                        <option>1972</option>
                                        <option>1973</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">To</label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option disabled selected>MM</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option disabled selected>YYYY</option>
                                        <option>1970</option>
                                        <option>1971</option>
                                        <option>1972</option>
                                        <option>1973</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Is Current?</label>
                    <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                    <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
                </div>
                <div class="form-group">
                    <label class="control-label">Link</label>
                    <input type="text" class="form-control">
                </div>

            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div id="modal-publications" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Publication/Research</h4>
            </div>

            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Publication Type</label>
                    <select id="inputCountry" class="form-control">
                        <option>Select a Publication Type</option>
                        <option>Book</option>
                        <option>Article</option>
                        <option>Thesis</option>
                        <option>Dissertation</option>
                        <option>Book Chapters</option>
                        <option>Published Proceedings/Abstracts</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Publication Title</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Author(s)/Editor(s)/Contributors</label>
                    <textarea rows="4" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Description</label>
                    <textarea rows="4" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Date</label>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Journal Title</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Published?</label>
                    <input type="checkbox" name="Press" value="Yes" class="published"> Yes
                </div>
                <div class="form-group">
                    <label class="control-label">Link</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">IRB Approved</label>
                    <input type="checkbox" name="Press" value="Yes" class="irb-approved"> Yes
                </div>
                <div class="irb-options">
                    <div class="form-group">
                        <label class="control-label">IRB Approval Date</label>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Study Complete</label>
                        <input type="checkbox" name="irb-study-complete" value="Yes"> Yes
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nurse Principle Investigator</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-awards" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Awards &amp; Recognition</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Name of Honor</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Type of Honor</label>
                    <select id="inputCountry" class="form-control">
                        <option>Select an Honor</option>
                        <option>Award</option>
                        <option>Scholorship</option>
                        <option>Fellowship</option>
                        <option>Grant</option>
                        <option>Fellow</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Honor Given By</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Description</label>
                    <textarea rows="4" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Date</label>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Select Documents</label>
                    <select id="inputCountry" class="form-control">
                        <option>Select One</option>
                        <option>Document 1</option>
                        <option>Document 1</option>
                        <option>Document 3</option>
                        <option>Document 4</option>
                        <option>...</option>
                    </select>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-other" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Other</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Title</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Organization Name</label>
                    <input type="text" class="form-control">
                </div>
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
                <div class="row date-row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Start Date</label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option disabled selected>MM</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option disabled selected>YYYY</option>
                                        <option>1970</option>
                                        <option>1971</option>
                                        <option>1972</option>
                                        <option>1973</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Completion Date</label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option disabled selected>MM</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option disabled selected>YYYY</option>
                                        <option>1970</option>
                                        <option>1971</option>
                                        <option>1972</option>
                                        <option>1973</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Description</label>
                    <textarea rows="4" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <ul class="control-attachments control-attachments">
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!-- /ADD MODALS -->

<!-- MANAGE MODALS -->
<!-- Modal -->
<div id="modal-licenses-manage" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Manage License</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Discipline</label>
                    <select class="form-control" id="add-discipline">
                        <option value="">Select a Discipline</option>
                        <option value="default">Select a Discipline</option>
                        <option value="emt" selected="">Emergency Medical Technician</option>
                        <option value="pharmacist">Pharmacist</option>
                    </select>
                </div>
                <div class="form-group">
                        <label class="control-label">Country</label>
                        <select id="inputCountry" class="form-control">
                            <option selected="">United States</option>
                            <option>Canada</option>
                            <option>Australia</option>
                            <option>...</option>
                            <option>...</option>
                        </select>
                    </div>
                <div class="form-group">
                    <label class="control-label">State or Province of Licensure</label>
                    <select class="form-control">
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR" selected>Arkansas</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">State License Number <small>Optional</small></label>
                            <input type="text" class="form-control" value="123467890">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="Feb 7, 2016">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="discipline-fields-pharmacist" class="discipline-fields">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">NABP eProfile ID Number <small>Optional</small></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Email Address</label>
                    <input type="text" class="form-control" value="jdoe@email.com">
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <ul class="control-attachments control-attachments">
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-certifications-manage" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Manage Certification</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Certifying Body</label>
                    <select class="form-control">
                        <option selected="">American Board of Wound Management (ABWM)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Certification</label>
                    <select class="form-control">
                        <option selected="">CWCA - Certified Wound Care Associate</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Country</label>
                    <select id="inputCountry" class="form-control">
                        <option selected="">United States</option>
                        <option>Canada</option>
                        <option>Australia</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Certification Number <small>Optional</small></label>
                            <input type="text" class="form-control" value="12346789011112">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="Aug 27, 2015">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <div class="field-shim">
                                <label><input type="checkbox" name="vehicle" value="Current" checked> Notify me upon expiration</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <ul class="control-attachments control-attachments">
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!-- /MANAGE MODALS -->


<?php
include ('includes/modals/_modal-goal-add.php');
include ('includes/modals/_modal-note-add.php');
include ('includes/modals/_modal-document-add.php');;
?>

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>

<script src="/scripts/prototype.portfolio.js"></script>
<script src="/scripts/prototype.portfolio.wizard.helper.js"></script>

<script>
// Dismisses card
    $( ".card-dismiss" ).click(function(e) {
        e.preventDefault();
        $(this).closest('.card-wrapper').remove();

        // Grabs next hidden card and makes it visible
        $(".card-wrapper").each(function() {
           if($('#card-row').children().slice(1).first().css('display') == 'none') {
                $(this).fadeIn();
            }
        });

        // If no cards left, removes the contaier div and padding
        if($.trim($("#card-row").html())=='') {
            $('.card-container').remove();
        }

        if($('#card-row .card-wrapper').length == 1) {
           $('.card-wrapper').removeClass('col-md-6').addClass('col-md-12');
        }
    });

    // On page load, show first 3 cards
    $( document ).ready(function() {
        $('#card-row').children().slice(0,2).show();
    });

</script>



<?= createSiteEnd(); ?>
