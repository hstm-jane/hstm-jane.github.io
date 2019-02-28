<?php

include "includes/helpers/helpers.php";

ob_start();                      // start capturing output
include "includes/applauncher.php";   // execute the file
$applauncher = ob_get_contents();    // get the contents from the buffer
ob_end_clean();

$patterns['start']['title'] = 'HeartCode BLS | HealthStream';
$patterns['header'] = array(
    'classes' => array('site-header--assessments'),
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">',
    'mainNav' => '
        <li class="{active=dashboard}"><a href="/dashboard-manager-dev-ready.php">Training</a></li>
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

                                <div class="col-md-8 ">
                                    <section class="profile-return-link">
                                        <a href="dashboard-tcc.php"><i class="fa fa-fw fa-chevron-left"></i>Return to Training</a>
                                    </section>

                                    <div id="panelDemo14" class="panel panel-default ">
                                        <div class="panel-body">
                                            <h2 style="margin-top:0px;">HeartCode BLS</h2>
                                            <h4>Training Room 1</h4>
                                            <h4>Jan 12, 2018 - 8:00 am</h4><br>
                                            <div role="tabpanel">
                                                <!-- Nav tabs-->
                                                <ul role="tablist" class="nav nav-tabs">
                                                    <li role="presentation" class="active"><a href="#personal" aria-controls="personal" role="tab" data-toggle="tab">Course Details</a>
                                                    </li>
                                                    <li role="presentation"><a href="#professional" aria-controls="professional" role="tab" data-toggle="tab">Roster </a>
                                                    </li>
                                                    <li role="presentation"><a href="#todo" aria-controls="todo" role="tab" data-toggle="tab">Materials </a>
                                                    </li>
                                                    <li role="presentation"><a href="#completions" aria-controls="completions" role="tab" data-toggle="tab">Scheduling</a>
                                                    </li>
                                                    <li role="presentation"><a href="#completions" aria-controls="completions" role="tab" data-toggle="tab">Evaluations</a>
                                                    </li>

                                                </ul>
                                                <!-- Tab panes-->
                                                <div class="tab-content">
                                                    <div id="personal" role="tabpanel" class="tab-pane active">
                                                        <section class="section" id="jump-description">
                                                                                <h2>Description</h2>
                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                                            </section>
                                                                            <section class="section">
                                                                                                    <h3>Author</h3>
                                                                                                    <p><a href="#modal-author" data-toggle="modal">Jane Doe</a></p>
                                                                                                </section>

                                                                    <section class="section" id="jump-learning-objectives">
                                                                                            <h2>Learning Objectives</h2>
                                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                                                                                            <ul>
                                                                                                <li>An ordered list item</li>
                                                                                                <li>An ordered list item</li>
                                                                                                <li>An ordered list item</li>
                                                                                                <li>An ordered list item</li>
                                                                                            </ul>
                                                                                        </section>


                                                                        <section class="section" id="jump-course-outline">
                                                                                                <h2>Course Outline</h2>
                                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                                                                                <ol>
                                                                                                    <li>An unordered list item</li>
                                                                                                    <li>An unordered list item</li>
                                                                                                    <li>An unordered list item</li>
                                                                                                    <li>An unordered list item</li>
                                                                                                </ol>
                                                                                            </section>

                                                                        <section class="section" id="jump-about-the-authors">
                                                                                                <h2>About the Authors</h2>
                                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                                                                            </section>
                                                    </div>
                                                    <div id="professional" role="tabpanel" class="tab-pane ">
                                                        <h2>TBD</h2>
                                                    </div>
                                                    <div id="todo" role="tabpanel" class="tab-pane">
                                                        <h2>TBD</h2>
                                                    </div>
                                                    <div id="completions" role="tabpanel" class="tab-pane">
                                                        <h2>TBD</h2>
                                                    </div>
                                                    <div id="goals" role="tabpanel" class="tab-pane">
                                                       <h2>TBD</h2>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">

                                    <div class="panel panel-default panel-employee" style="margin-top:33px">
                                        <div class="panel-body text-center clearfix">
                                            <div class="upload-photo-btn center-block">
                                                <div class="pv-lg ">
                                                    <img src="/content/images/prototype-actors/bbrune.jpg" alt="Contact" class="center-block img-responsive img-circle img-thumbnail thumb96">

                                                    </div>
                                                </div>
                                                    <h3 class="m0 text-bold">
                                             <span class="employee-name">Francis Polk</span>
                                             <small>
                                                 <span class="job-title">Instructor</span>

                                                 <!-- <span class="department">Radiology</span> -->
                                             </small>
                                         </h3>
                                                    <div class="mv-lg">
                                                        <!-- <div class="badge badge-warning">Inactive</div> -->
                                                        <!-- <div class="badge badge-success">Active</div> -->
                                                    </div>
                                                    <div class="text-center"><a href="mailto:bbruno@jupiterhealth.net" class="btn btn-blue">Send message</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default  panel-direct-reports">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">Enrolled Students</div>

                                                </div>
                                                <div class="panel-body">
                                                    <div class="clearfix pr pt-sm"><small class="text-muted pull-right ">Showing 7 of 7 students</small></div>
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