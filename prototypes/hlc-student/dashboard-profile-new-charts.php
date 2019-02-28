<?php

include "includes/helpers/helpers.php";

ob_start();                      // start capturing output
include "includes/applauncher.php";   // execute the file
$applauncher = ob_get_contents();    // get the contents from the buffer
ob_end_clean();

$patterns['start']['title'] = 'Brad K. Bruno | HealthStream';
$patterns['header'] = array(
    'classes' => array('site-header--assessments'),
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">',
    'mainNav' => '
        <li class="{active=dashboard}"><a href="/dashboard-manager-dev-ready.php">MyTeam</a></li>
        <li class="{active=todo}"><a href="/todo.php?rater">To Do</a></li>
        <li class="{active=completed}"><a href="/completed-filtered.php">Completed</a></li>
        <li class="{active=profile} dropdown">
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
        <li class="{active=raters}"><a href="/assessment-overview-action-list-dashboard.php">Raters</a></li>
        <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#" >Help</a></li>
        <li class="visible-xs"><a href="#" >Logout</a></li>' . $applauncher,
    'mainNavActive' =>'dashboard',
);

// $patterns['focus']['supporting'] = ' ';

?>
    <?= createSiteStart($patterns['start']); ?>
        <?= createHeader($patterns['header']); ?>
            <div class="layout layout-dashboard-manager">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <section class="profile-return-link">
                                <a href="dashboard-manager-dev-ready.php"><i class="fa fa-fw fa-chevron-left"></i>Return to MyTeam</a>
                            </section>
                            <div class="panel panel-default panel-employee">
                                <div class="panel-body text-center clearfix">
                                    <div class="upload-photo-btn center-block">
                                        <div class="pv-lg ">
                                            <img src="/content/images/prototype-actors/bbrune.jpg" alt="Contact" class="center-block img-responsive img-circle img-thumbnail thumb96">
                                            <!-- <div class="profile-initial-circle center-block"> BB </div> -->
                                            <a href="#modal-upload-photo" data-toggle="modal">
                                                <span class="profile-photo-edit">
                                                    <em class="fa fa-camera"></em>
                                                </span>
                                            </a>
                                            </div>
                                        </div>
                                            <h3 class="m0 text-bold">
                                     <span class="employee-name">Brad K. Bruno</span>
                                     <small>
                                         <span class="job-title">Clinical Nurse Supervisor (RN)</span>

                                         <!-- <span class="department">Radiology</span> -->
                                     </small>
                                 </h3>
                                            <div class="mv-lg">
                                                <!-- <div class="badge badge-warning">Inactive</div> -->
                                                <div class="badge badge-success">Active</div>
                                            </div>
                                            <div class="text-center"><a href="mailto:bbruno@jupiterhealth.net" class="btn btn-primary">Send message</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default  panel-direct-reports">
                                        <div class="panel-heading">
                                            <div class="panel-title text-center">Direct Reports</div>
                                            <div class="pull-right">
                                                <div class="action action-split">
                                                    <div class="btn-group">
                                                        <a href="#modal-team" class="btn btn-default btn-xs" data-toggle="modal">
                                               View All
                                               </a>
                                                        <a href="#" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li>
                                                                <a href="#modal-team" data-toggle="modal">
                                                       View All - List
                                                    </a>
                                                            </li>
                                                            <li>
                                                                <a href="dashboard-manager-team-chart-test9.php" target="_new" class="view-chart">View All - Chart</a>
                                                            </li>
                                                            <li>
                                                                <a href="#modal-team-message-all" data-toggle="modal">Message All</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="clearfix pr pt-sm"><small class="text-muted pull-right ">Showing 7 of 7 employees</small></div>
                                            <a href="#" class="team-member-link">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <img src="/content/images/prototype-actors/19.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                                    </div>
                                                    <div class="media-body pt-sm">
                                                        <div>Michele Brown
                                                            <div class="text-sm text-muted">Nurse Manager - Acute Care</div>
                                                        </div>
                                                        <!-- <p class="text-muted text-sm">3 Tasks </p> -->
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="team-member-link">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <img src="/content/images/prototype-actors/72.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                                    </div>
                                                    <div class="media-body pt-sm">
                                                        <div>Nicholas Frazier
                                                            <div class="text-sm text-muted">Quality Coordinator (RN)</div>
                                                        </div>
                                                        <!-- <p class="text-muted text-sm">0 Tasks </p> -->
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="team-member-link">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <img src="/content/images/prototype-actors/83.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                                    </div>
                                                    <div class="media-body pt-sm">
                                                        <div>Chris Horton
                                                            <div class="text-sm text-muted">Diabetes Educator (RN)</div>
                                                        </div>
                                                        <!-- <p class="text-muted text-sm">1 Tasks / <span class="text-warning">1 Past Due</span> </p> -->
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="team-member-link">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <img src="/content/images/prototype-actors/76.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                                    </div>
                                                    <div class="media-body pt-sm">
                                                        <div>Ella Lane
                                                            <div class="text-sm text-muted">Case Manager (RN)</div>
                                                        </div>
                                                        <!-- <p class="text-muted text-sm">2 Tasks </p> -->
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="team-member-link">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <img src="/content/images/prototype-actors/78.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                                    </div>
                                                    <div class="media-body pt-sm">
                                                        <div>Andrea Martinez
                                                            <div class="text-sm text-muted">LPN - I.V. Certified</div>
                                                        </div>
                                                        <!-- <p class="text-muted text-sm">9 Tasks / <span class="text-warning">2 Past Due</span><</p> -->
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="team-member-link">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <img src="/content/images/prototype-actors/8.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                                    </div>
                                                    <div class="media-body pt-sm">
                                                        <div>Tanya Rivera
                                                            <div class="text-sm text-muted">Nurse - Staff (RN) - Acute Care</div>
                                                        </div>
                                                        <!-- <p class="text-muted text-sm">8 Tasks </p> -->
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="team-member-link">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <img src="/content/images/prototype-actors/98.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                                    </div>
                                                    <div class="media-body pt-sm">
                                                        <div>Elmer Romero
                                                            <div class="text-sm text-muted">Nurse - Staff (RN) - Telephone</div>
                                                        </div>
                                                        <!-- <p class="text-muted text-sm">5 Tasks / <span class="text-warning">1 Past Due</span></p> -->
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 ">
                                    <div id="panelDemo14" class="panel panel-default panel-profile-info">
                                        <div class="panel-body">
                                            <div role="tabpanel">
                                                <!-- Nav tabs-->
                                                <ul role="tablist" class="nav nav-tabs">
                                                    <li role="presentation"><a href="#personal" aria-controls="personal" role="tab" data-toggle="tab">Personal</a>
                                                    </li>
                                                    <li role="presentation" class="active"><a href="#professional" aria-controls="professional" role="tab" data-toggle="tab">Professional <span class="badge badge-alert ">2</span></a>
                                                    </li>
                                                    <li role="presentation"><a href="#todo" aria-controls="todo" role="tab" data-toggle="tab">To Do List </a>
                                                    </li>
                                                    <li role="presentation"><a href="#completions" aria-controls="completions" role="tab" data-toggle="tab">Completions</a>
                                                    </li>
                                                    <li role="presentation"><a href="#goals" aria-controls="goals" role="tab" data-toggle="tab">Goals </a>
                                                    </li>
                                                    <li role="presentation"><a href="#notes" aria-controls="notes" role="tab" data-toggle="tab">Notes</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes-->
                                                <div class="tab-content">
                                                    <div id="personal" role="tabpanel" class="tab-pane ">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p class="lead bb">About</p>
                                                                <form class="form-horizontal p-20">
                                                                    <div class="form-group">
                                                                        <div class="col-sm-4"><strong>Hire Date</strong></div>
                                                                        <div class="col-sm-8">
                                                                            Apr. 20, 2017
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-sm-4"><strong>Supervisor</strong></div>
                                                                        <div class="col-sm-8">
                                                                            <a href="#" class="team-member-link">Darcy Crane</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-sm-4"><strong>Department</strong></div>
                                                                        <div class="col-sm-8">
                                                                            Radiology
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-sm-4"><strong>Job Title</strong></div>
                                                                        <div class="col-sm-8">
                                                                            Clinical Nurse Supervisor (RN)
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-sm-4"><strong>Position Status</strong></div>
                                                                        <div class="col-sm-8">
                                                                            Full Time
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <br>
                                                                <p class="lead bb">Location</p>
                                                                <!--  <div class="alert alert-warning">
                                                     <em class="fa fa-exclamation-circle fa-lg fa-fw"></em>Employee's job title has recently changed.</div> -->
                                                                <form class="form-horizontal p-20">
                                                                    <div class="form-group">
                                                                        <div class="col-sm-4"><strong>Address</strong></div>
                                                                        <div class="col-sm-8">
                                                                            2717 Valley View Ln.
                                                                            <br>Nashville, TN 37217
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-sm-4"><strong>Country</strong></div>
                                                                        <div class="col-sm-8">
                                                                            United States
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-sm-4"><strong>Email</strong></div>
                                                                        <div class="col-sm-8">
                                                                            <a href="mailto:bbruno@jupiterhealth.com">bbruno@jupiterhealth.com</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-sm-4"><strong>Phone</strong></div>
                                                                        <div class="col-sm-8">
                                                                            (273)-433-8282
                                                                        </div>
                                                                    </div>
                                                                    <!--  <div class="form-group">
                                                             <div class="col-sm-4"><strong>Time Zone:</strong></div>
                                                             <div class="col-sm-8">
                                                                 Central Time
                                                             </div>
                                                         </div>
                                                         <div class="form-group">
                                                             <div class="col-sm-4"><strong>Preferred Language:</strong></div>
                                                             <div class="col-sm-8">
                                                                 English</strong>
                                                             </div>
                                                         </div> -->
                                                                </form>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <br>
                                                                <p class="lead bb">Activity</p>
                                                                <!--  <div class="alert alert-warning">
                                                     <em class="fa fa-exclamation-circle fa-lg fa-fw"></em>Employee's job title has recently changed.</div> -->
                                                                <form class="form-horizontal p-20">
                                                                    <div class="form-group">
                                                                        <div class="col-sm-4"><strong>Last Login</strong></div>
                                                                        <div class="col-sm-8">
                                                                            Apr. 20, 2017 at 9:20 am
                                                                        </div>
                                                                    </div>
                                                                    <!--  <div class="form-group">
                                                             <div class="col-sm-4"><strong>Time Zone:</strong></div>
                                                             <div class="col-sm-8">
                                                                 Central Time
                                                             </div>
                                                         </div>
                                                         <div class="form-group">
                                                             <div class="col-sm-4"><strong>Preferred Language:</strong></div>
                                                             <div class="col-sm-8">
                                                                 English</strong>
                                                             </div>
                                                         </div> -->
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="professional" role="tabpanel" class="tab-pane active">
                                                        <section class="section">
                                                            <p class="lead bb">Licenses</p>
                                                            <div class="slat slat-attention">
                                                                <div class="slat-default">
                                                                    <div class="title">AEMT</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-label">State:</span><span class="meta-value">MI</span></li>
                                                                        <li><span class="meta-label">Country:</span><span class="meta-value">United States</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="slat-nested">
                                                                    <div class="collapse-group collapse">
                                                                        <section class="section">
                                                                            <h5>State Certification Number</h5>
                                                                            <p>1234567890</p>
                                                                        </section>
                                                                        <section class="section">
                                                                            <h5>National Expiration Date</h5>
                                                                            <p>Feb 7, 2014</p>
                                                                        </section>
                                                                    </div>
                                                                    <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="slat">
                                                                <div class="slat-default">
                                                                    <div class="title">NCAC ll - National Certified Addiction Counsler, Level ll</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-label">State:</span><span class="meta-value">MI</span></li>
                                                                        <li><span class="meta-label">Country:</span><span class="meta-value">United States</span></li>
                                                                        <li><span class="meta-label">State License:</span><span class="meta-value">123456789011112</span></li>
                                                                        <li><span class="meta-label">Expires:</span><span class="meta-value">Jan. 1, 2018</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="slat-nested">
                                                                    <div class="collapse-group collapse">
                                                                        <section class="section">
                                                                            <h5>Certifying Body</h5>
                                                                            <p>National Association of Alcoholism and Drug Abuse Counselors Certification Commission (NAADAC)</p>
                                                                        </section>
                                                                        <section class="section">
                                                                            <h5>Updated</h5>
                                                                            <p>Stephanie Juniper, Feb 7, 2016 11:54am</p>
                                                                        </section>
                                                                        <section class="section">
                                                                            <h5>System Managed</h5>
                                                                            <p>No</p>
                                                                        </section>
                                                                    </div>
                                                                    <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <br>
                                                        <section class="section">
                                                            <p class="lead bb">Certifications</p>
                                                            <div class="slat slat-attention">
                                                                <div class="slat-default">
                                                                    <div class="title">CWCA - Certified Wound Care Associate</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-label">Country:</span><span class="meta-value">United States</span></li>
                                                                        <li><span class="meta-label">State:</span><span class="meta-value">TN</span></li>
                                                                        <li><span class="meta-label">License:</span><span class="meta-value">123456789011112</span></li>
                                                                        <li><span class="meta-label">Expires: </span><span class="meta-value">Jan 1, 2015</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="slat-nested">
                                                                    <div class="collapse-group collapse">
                                                                        <section class="section">
                                                                            <h5>Certifying Body</h5>
                                                                            <p>American Board of Wound Management (ABWM)</p>
                                                                        </section>
                                                                        <section class="section">
                                                                            <h5>Updated</h5>
                                                                            <p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
                                                                        </section>
                                                                        <section class="section">
                                                                            <h5>System Managed</h5>
                                                                            <p>No</p>
                                                                        </section>
                                                                    </div>
                                                                    <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <br>
                                                        <section class="section">
                                                            <p class="lead bb">Work Experience</p>
                                                            <div class="slat ">
                                                                <div class="slat-default">
                                                                    <div class="title">Ambulance Driver and Attendant, Except Emergency Medical Technician</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-label">SETTING:</span><span class="meta-value">Ambulatory Care</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="slat-nested">
                                                                    <div class="collapse-group collapse">
                                                                        <section class="section">
                                                                            <h5>Company Name</h5>
                                                                            <p>ACME Patient Transport</p>
                                                                        </section>
                                                                        <section class="section">
                                                                            <h5>Location</h5>
                                                                            <p>Hartford, CT</p>
                                                                        </section>
                                                                    </div>
                                                                    <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div id="todo" role="tabpanel" class="tab-pane">
                                                        <div class="focus-mini">
                                                            <ul class="meta">
                                                                <li><span class="meta-label">Total Tasks:</span><span class="meta-value">10</span></li>
                                                                <li><span class="meta-label">Requiring Attention:</span><span class="meta-value">2</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="filter-mini" data-target="tasks">
                                                            <div class="filter-row">
                                                                <div class="filter-cell">
                                                                    <div class="filter-toggle">
                                                                        <div class="hidden-xs">Show: <i class="fa-fw fa-caret-down fa"></i></div>
                                                                        <div class="visible-xs">Show: All Tasks<span class="badge">10</span><i class="fa-fw fa-caret-down fa"></i></div>
                                                                    </div>
                                                                </div>
                                                                <div class="filter-cell">
                                                                    <ul>
                                                                        <li>
                                                                            <label class="checkbox active">
                                                                                <input type="checkbox" value="all" checked=""> All Tasks</label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="checkbox">
                                                                                <input type="checkbox" value="1"> Assignments</label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="checkbox">
                                                                                <input type="checkbox" value="2"> Live Classes</label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="checkbox">
                                                                                <input type="checkbox" value="3"> Electives</label>
                                                                        </li>
                                                                        <li style="display: none;">
                                                                            <label class="checkbox">
                                                                                <input type="checkbox" value="4"> Profile Tasks</label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="checkbox">
                                                                                <input type="checkbox" value="5"> Assessments</label>
                                                                        </li>
                                                                        <li style="display: none;">
                                                                            <label class="checkbox">
                                                                                <input type="checkbox" value="6"> Hidden Option with No Matches</label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <section class="section filter-target" id="tasks">
                                                            <div class="slat slat-attention slat-spaced slat-callout-w active" data-filter-category="1">
                                                                <div class="slat-default">
                                                                    <div class="title">Understanding Chronic Pain Management</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Course</span></li>
                                                                        <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                                                                        <li class="meta-hide-xs"><span class="meta-label">Complete:</span><span class="meta-value">2 of 3</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Dec. 31, 2013 at 12am</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-attention slat-spaced slat-callout-w active" data-filter-category="2">
                                                                <div class="slat-default">
                                                                    <div class="title">Course Name: Class Name</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Live Class</span></li>
                                                                        <li><span class="meta-label">Status:</span><span class="meta-value">Not Registered</span></li>
                                                                        <li class="meta-hide-xs"><span class="meta-label">Attendance:</span><span class="meta-value">Mandatory</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-spaced slat-callout-w active" data-filter-category="2">
                                                                <div class="slat-default">
                                                                    <div class="title">Course Name: Class Name</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Live Class</span></li>
                                                                        <li><span class="meta-label">Status:</span><span class="meta-value">Registered</span></li>
                                                                        <li class="meta-hide-xs"><span class="meta-label">Attendance:</span><span class="meta-value">Mandatory</span></li>
                                                                        <li class="meta-hide-xs"><span class="meta-label">Location:</span><span class="meta-value">North Tower: Westmoreland Hall</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Starts: </span><span class="meta-value"><span class="meta-callout-label">Starts:</span>Jul 15, 2014 at 3:30pm</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-spaced slat-callout-w active" data-filter-category="2">
                                                                <div class="slat-default">
                                                                    <div class="title">Course Name: Live Event Title</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Live Event</span></li>
                                                                        <li><span class="meta-label">Status:</span><span class="meta-value">Registered</span></li>
                                                                        <li class="meta-hide-xs"><span class="meta-label">Location:</span><span class="meta-value">Cummins Station: 450</span></li>
                                                                        <li class="meta-callout">
                                                                            <span class="meta-value">
                                                                     <span class="meta-value">
                                                                         <div>Jul 15, 2014 at 3:30pm - </div>
                                                                         <div>Jul 25, 2014 at 3:30pm</div>
                                                                     </span>
                                                                            </span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-spaced slat-callout-w active" data-filter-category="2">
                                                                <div class="slat-default">
                                                                    <div class="title">Course Name: Live Event Title</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Live Event</span></li>
                                                                        <li><span class="meta-label">Status:</span><span class="meta-value">Registered</span></li>
                                                                        <li class="meta-hide-xs"><span class="meta-label">Location:</span><span class="meta-value">Cummins Station: 450</span></li>
                                                                        <li class="meta-callout">
                                                                            <span class="meta-value">
                                                                     <div>Aug 27, 2014</div>
                                                                     <div>5:30am - 6:30am</div>
                                                                 </span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-spaced slat-callout-w active" data-filter-category="1">
                                                                <div class="slat-default">
                                                                    <div class="title">Choose a Course</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Equivalent</span></li>
                                                                        <li><span class="meta-label">Status:</span><span class="meta-value">Not Enrolled</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Sep 1, 2014</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-spaced slat-callout-w active" data-filter-category="1">
                                                                <div class="slat-default">
                                                                    <div class="title">Pain Management Curriculum</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Curriculum</span></li>
                                                                        <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Sep 1, 2014</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-spaced slat-callout-w active" data-filter-category="1">
                                                                <div class="slat-default">
                                                                    <div class="title">Fire Safety</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Course</span></li>
                                                                        <li><span class="meta-label">Status:</span><span class="meta-value">Assigned</span></li>
                                                                        <li class="meta-hide-xs"><span class="meta-label">Complete:</span><span class="meta-value">0 of 3</span></li>
                                                                        <li class="meta-hide-xs"><span class="meta-label">Institution:</span><span class="meta-value">General Hospital</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Sep 15, 2014</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-spaced slat-callout-w active" data-filter-category="5">
                                                                <div class="slat-default">
                                                                    <div class="title">Competency Appraisal - Employee Assesses Self</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Self Assessment</span></li>
                                                                        <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Aug 11, 2017</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-spaced slat-callout-w active" data-filter-category="3">
                                                                <div class="slat-default">
                                                                    <div class="title">This is an example of an elective</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Course</span></li>
                                                                        <li><span class="meta-label">Status:</span><span class="meta-value">Not Yet Started</span></li>
                                                                        <li class="meta-hide-xs"><span class="meta-label">Enrolled By:</span><span class="meta-value">Self</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value">Elective</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div id="completions" role="tabpanel" class="tab-pane">
                                                        <div class="focus-mini">
                                                            <ul class="meta">
                                                                <li><span class="meta-label">Total Completions:</span><span class="meta-value">17</span></li>
                                                                <li><span class="meta-label">Est Learning Time:</span><span class="meta-value">8h 47m</span></li>
                                                            </ul>
                                                        </div>
                                                        <section class="section">
                                                            <div class="date-range">
                                                                <div class="form-group">
                                                                    <label class="control-label">Date Range:</label>
                                                                    <select class="form-control date-range__control">
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
                                                                    <div class="date-range__custom collapse">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Start:</label>
                                                                                    <div class="input-group date">
                                                                                        <input type="text" class="form-control">
                                                                                        <span class="input-group-btn">
                                                                                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                                                             </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">End:</label>
                                                                                    <div class="input-group date">
                                                                                        <input type="text" class="form-control">
                                                                                        <span class="input-group-btn">
                                                                                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                                                             </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <section class="section">
                                                            <div class="panel-group panel-group-slats" role="tablist" id="panel-group-1" aria-multiselectable="true">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab">
                                                                        <a role="button" data-toggle="collapse" data-parent="#panel-group-1" href="#panel-1" class="collapsed">
                                                                 CE Credit Summary
                                                                 <div class="panel-heading-icon">
                                                                     <i class="fa fa-chevron-down panel-heading-icon-closed"></i>
                                                                     <i class="fa fa-chevron-up panel-heading-icon-open"></i>
                                                                 </div>
                                                             </a>
                                                                    </div>
                                                                    <div id="panel-1" class="panel-collapse collapse" role="tabpanel">
                                                                        <div class="panel-body">
                                                                            <div class="slat slat-simple">
                                                                                <div class="slat-default">
                                                                                    <div class="title">AMA PRA Category 1 Credit™</div>
                                                                                    <ul class="meta">
                                                                                        <li><span class="meta-label">Discipline:</span><span class="meta-value">AEMT</span></li>
                                                                                        <li><span class="meta-label">Credits:</span><span class="meta-value">5.75</span></li>
                                                                                        <li><span class="meta-label">Courses:</span><span class="meta-value">2</span></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="slat slat-simple">
                                                                                <div class="slat-default">
                                                                                    <div class="title">AMA PRA Category 1 Credit™</div>
                                                                                    <ul class="meta">
                                                                                        <li><span class="meta-label">Discipline:</span><span class="meta-value">Emergency Medical Technician - First Responder</span></li>
                                                                                        <li><span class="meta-label">Credits:</span><span class="meta-value">4</span></li>
                                                                                        <li><span class="meta-label">Courses:</span><span class="meta-value">2</span></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <section class="section">
                                                            <div class="slat slat-callout">
                                                                <div class="slat-default">
                                                                    <div class="title">Student-Entered Learning Event</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Learning Event</span></li>
                                                                        <li><span class="meta-label">Est. Time:</span><span class="meta-value">1h</span></li>
                                                                        <li><span class="meta-label">Entry:</span><span class="meta-value">Student</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">May 19, 2013</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="slat-nested">
                                                                    <div class="collapse-group collapse">
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
                                                                    </div>
                                                                    <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-callout">
                                                                <div class="slat-default">
                                                                    <div class="title">Understanding Chronic Pain Management</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Course</span></li>
                                                                        <li><span class="meta-label">Est. Time:</span><span class="meta-value">2h 10m</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">May 21, 2013</span></li>
                                                                    </ul>
                                                                    <div class="action">
                                                                        <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-callout">
                                                                <div class="slat-default">
                                                                    <div class="title">Advanta 2 Med Surg Bed</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Course</span></li>
                                                                        <li><span class="meta-label">Est. Time:</span><span class="meta-value">15m</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">May 18, 2013</span></li>
                                                                    </ul>
                                                                    <div class="action">
                                                                        <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-callout">
                                                                <div class="slat-default">
                                                                    <div class="title">Content with Video</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Course</span></li>
                                                                        <li><span class="meta-label">Est. Time:</span><span class="meta-value">2h</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">May 28, 2013</span></li>
                                                                    </ul>
                                                                    <div class="action">
                                                                        <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-callout">
                                                                <div class="slat-default">
                                                                    <div class="title">Content with Video</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Course</span></li>
                                                                        <li><span class="meta-label">Est. Time:</span><span class="meta-value">2h</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">May 29, 2013</span></li>
                                                                    </ul>
                                                                    <div class="action">
                                                                        <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-callout">
                                                                <div class="slat-default">
                                                                    <div class="title">Content with Video</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Course</span></li>
                                                                        <li><span class="meta-label">Est. Time:</span><span class="meta-value">2h</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">May 30, 2013</span></li>
                                                                    </ul>
                                                                    <div class="action">
                                                                        <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-callout">
                                                                <div class="slat-default">
                                                                    <div class="title">Admin-Entered Learning Event</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Learning Event</span></li>
                                                                        <li><span class="meta-label">Est. Time:</span><span class="meta-value">1h</span></li>
                                                                        <li><span class="meta-label">Entry:</span><span class="meta-value">Admin</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">July 11, 2013</span></li>
                                                                    </ul>
                                                                    <div class="action">
                                                                        <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="slat-nested">
                                                                    <div class="slat slat-callout">
                                                                        <div class="slat-default">
                                                                            <div class="title">CE - AHIMA</div>
                                                                            <ul class="meta">
                                                                                <li><span class="meta-label">Discipline:</span><span class="meta-value">Pharmacist, Nuclear</span></li>
                                                                                <li><span class="meta-label">Credits:</span><span class="meta-value">4.00 AMA PRA Category 1 Credit™</span></li>
                                                                                <li><span class="meta-label">License:</span><span class="meta-value">123456789011112</span></li>
                                                                                <li><span class="meta-label">State:</span><span class="meta-value">TN</span></li>
                                                                            </ul>
                                                                            <div class="action">
                                                                                <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="collapse-group collapse">
                                                                        <section class="section">
                                                                            <h5>Added</h5>
                                                                            <p>Admin's Name, Feb 7, 2014 11:54am</p>
                                                                        </section>
                                                                        <section class="section">
                                                                            <h5>Updated</h5>
                                                                            <p>Admin's Name, Feb 7, 2014 11:54am</p>
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
                                                                    </div>
                                                                    <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-callout">
                                                                <div class="slat-default">
                                                                    <div class="title">Admin-Entered Learning Event as a Course</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Course</span></li>
                                                                        <li><span class="meta-label">Est. Time:</span><span class="meta-value">1h</span></li>
                                                                        <li><span class="meta-label">Entry:</span><span class="meta-value">Admin</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">July 11, 2013</span></li>
                                                                    </ul>
                                                                    <div class="action">
                                                                        <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="slat-nested">
                                                                    <div class="collapse-group collapse">
                                                                        <section class="section">
                                                                            <h5>Added</h5>
                                                                            <p>Admin's Name, Feb 7, 2014 11:54am</p>
                                                                        </section>
                                                                        <section class="section">
                                                                            <h5>Updated</h5>
                                                                            <p>Admin's Name, Feb 7, 2014 11:54am</p>
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
                                                                    </div>
                                                                    <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-callout">
                                                                <div class="slat-default">
                                                                    <div class="title">Heart Disease and Treatment Options</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Course</span></li>
                                                                        <li><span class="meta-label">Est. Time:</span><span class="meta-value">1h</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">Oct 10, 2013</span></li>
                                                                    </ul>
                                                                    <div class="action">
                                                                        <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-callout">
                                                                <div class="slat-default">
                                                                    <div class="title">Lippencott - 18-lead electrocardiogram</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Course</span></li>
                                                                        <li><span class="meta-label">Est. Time:</span><span class="meta-value">1h</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">Oct 16, 2013</span></li>
                                                                    </ul>
                                                                    <div class="action">
                                                                        <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-callout">
                                                                <div class="slat-default">
                                                                    <div class="title">A Day in the Life of ICD-10</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Course</span></li>
                                                                        <li><span class="meta-label">Est. Time:</span><span class="meta-value">1h</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">Oct 19, 2013</span></li>
                                                                    </ul>
                                                                    <div class="action">
                                                                        <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="slat-nested">
                                                                    <div class="slat slat-callout">
                                                                        <div class="slat-default">
                                                                            <div class="title">CE - AHIMA</div>
                                                                            <ul class="meta">
                                                                                <li><span class="meta-label">Discipline:</span><span class="meta-value">Pharmacist, Nuclear</span></li>
                                                                                <li><span class="meta-label">Credits:</span><span class="meta-value">4.00 AMA PRA Category 1 Credit™</span></li>
                                                                                <li><span class="meta-label">License:</span><span class="meta-value">123456789011112</span></li>
                                                                                <li><span class="meta-label">State:</span><span class="meta-value">TN</span></li>
                                                                            </ul>
                                                                            <div class="action">
                                                                                <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slat slat-callout">
                                                                        <div class="slat-default">
                                                                            <div class="title">CE - AAPC</div>
                                                                            <ul class="meta">
                                                                                <li><span class="meta-label">Discipline:</span><span class="meta-value">Emergency Medical Technician - First Responder</span></li>
                                                                                <li><span class="meta-label">Credits:</span><span class="meta-value">2.00 Contact Hours</span></li>
                                                                                <li><span class="meta-label">License:</span><span class="meta-value">123456789011112</span></li>
                                                                                <li><span class="meta-label">State:</span><span class="meta-value">TN</span></li>
                                                                            </ul>
                                                                            <div class="action">
                                                                                <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-callout">
                                                                <div class="slat-default">
                                                                    <div class="title">Performance Appraisal</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Self Assessment</span></li>
                                                                        <li><span class="meta-label">Rater:</span><span class="meta-value">Jane Doe</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">Dec 15, 2013</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div id="goals" role="tabpanel" class="tab-pane">
                                                        <div id="filter-goals">
                                                            <div class="slat slat-callout" data-filter-category="0">
                                                                <div class="slat-default">
                                                                    <div class="title">
                                                                        <a data-hijax="true" data-target="#manage-goal-modal-container" href="#">Reduce Logging Errors </a>
                                                                    </div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Individual</span></li>
                                                                        <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Aug 18, 2017</span>
                                                                        </li>
                                                                    </ul>
                                                                    <!-- <div class="action"><a class="btn btn-sm btn-default" data-hijax="true" data-target="#manage-goal-modal-container" href="/HSAPP/Goal/GetGoalEditorModalDialog?modalDialogId=goal-modal&amp;goalId=51c167b8-0842-e711-857d-005056b13ce3">Manage <i class="visible-xs fa-fw fa-pencil fa"></i></a> -->
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-callout" data-filter-category="0">
                                                                <div class="slat-default">
                                                                    <div class="title">
                                                                        <a data-hijax="true" data-target="#manage-goal-modal-container" href="#">Improve Safety Ratings </a>
                                                                    </div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Individual</span></li>
                                                                        <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Aug 18, 2017</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="slat slat-callout" data-filter-category="0">
                                                                <div class="slat-default">
                                                                    <div class="title">
                                                                        <a data-hijax="true" data-target="#manage-goal-modal-container" href="#">Improve Patient Satisfaction </a>
                                                                    </div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-type">Individual</span></li>
                                                                        <li><span class="meta-label">Status:</span><span class="meta-value">Not Yet Started</span></li>
                                                                        <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Aug 18, 2017</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="notes" role="tabpanel" class="tab-pane">
                                                        <section class="section">
                                                            <h2>Results <small>Showing 1-10 of 15</small></h2>
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
                                                     'attributes' => array(
                                                         array('class',array('slat','slat-noaction')),
                                                     ),
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /layout -->
                    <?php
            include ('includes/modals/_modal-dashboard-team.php');
            include ('includes/modals/_modal-dashboard-team-message-all.php');
            include ('includes/modals/_modal-dashboard-upload-photo.php');
            ?>
                            <?= createFooter($patterns['footer']); ?>
                                <?= createPrototypeNav(); ?>
                                    <?= createSiteScripts(); ?>
                                        <script src="/scripts/healthstream.utilities.applauncher.js"></script>
                                        <script src="/scripts/dataTables.js"></script>
                                        <script src="http://hstm-platform.patternmanager.com/scripts/dataTables.rowReorder.min.js"></script>
                                        <script src="/scripts/prototype.datatables.js"></script>
                                        <script src="/scripts/hovercard.js"></script>
                                        <script src="/scripts/cropper.js"></script>
                                        <script src="/scripts/prototype.dashboard-profile.js"></script>
                                        <?= createSiteEnd(); ?>