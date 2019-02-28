<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'Pharmacology: RN Assessment';
$patterns['focus']['title'] = 'Pharmacology: RN Assessment';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-course',
    'type' => 'Course',
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Status:',
        'value' => 'Not Yet Started',
    ),
    array(
        'label' => 'Est Time:',
        'value' => '30m',
    ),
    
);
$patterns['header'] = array(
    'classes' => array('site-header--assessments'),
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">',
    'mainNav' => '
        <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
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
        <li class="{active=raters}"><a href="/assessment-overview.php">Raters</a></li>
        <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'raters',
);
$patterns['header']['mainNavActive'] = 'catalog';
// $patterns['focus']['supporting'] = '
//     <figure class="fph-chart-holder">
//         <canvas class="fph-chart" data-type="Doughnut" data-segments="[[30,0],[30,0],[90,0],[10,0]]" width="108" height="108"></canvas>
//         <figcaption>0%</figcaption>
//     </figure>';

?>
    <?= createSiteStart($patterns['start']); ?>
        <?= createHeader($patterns['header']); ?>
            <?= createFocus($patterns['focus']); ?>
                <div class="layout">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <section class="section section-main section-box" data-equalize="layout-columns">
                                <section class="return-link">
                                                        <a href="catalog-results.php"><i class="fa fa-fw fa-chevron-left"></i>Return to Search Results</a>
                                                         <a href="payment.php" class="btn btn-success btn-lg pull-right catalog-action-button">Enroll <em class="fa fa-arrow-circle-right  fa-fw mr-sm"></em></a>
                                                    </section>
                                    <section class="section">
                                        <h2>Learning Activities
                                            <small>in this Course</small>
                                        </h2>
                                        <div class="slat" data-filter-category="0">
                                            <div class="slat-default">
                                                <div class="title">Post Test</div>
                                                <ul class="meta">
                                                    <li>
                                                        <span class="meta-type">Test</span>
                                                    </li>
                                                    <li>
                                                        <span class="meta-label">Status:</span>
                                                        <span class="meta-value">Not Yet Started</span>
                                                    </li>
                                                    <li>
                                                        <span class="meta-label">Est. Time:</span>
                                                        <span class="meta-value">30m</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="section">
                                        <h2>Description</h2> The Pharmacology: RN Test includes dosage calculations for oral and parenteral medications, intravenous boluses, insulin and heparin drips, metric units, and infusion rates. There are also items testing the RN&#39;s knowledge about routes of administration, characteristics of medications, abbreviations, patient teaching, and additional knowledge, skills, and abilities necessary for RNs who administer medications as part of their job responsibilities. </section>
                                    <section class="section">
                                        <h2>Learning Objectives</h2> Upon successful completion of this course, this knowledge assessment will be marked as completed. </section>
                                    <section class="section">
                                        <h2>Author</h2> HealthStream </section>
                                    <section class="section">
                                        <h2>Catalog</h2>
                                        <p>This course belongs to the following categories in the HLC catalog:</p>
                                        <ul>
                                            <li>Content Publisher &gt; HealthStream</li>
                                            <li>Subject &gt; Leadership/Workforce &gt; Competency</li>
                                            <li>Setting &gt; Hospital</li>
                                            <li>Audience &gt; Nursing: Registered Nurse - RN</li>
                                            <li>Subject &gt; Regulatory/Accreditation &gt; Patient Safety</li>
                                            <li>Subject &gt; Patient Care &gt; Medications</li>
                                            <li>HealthStream Products &gt; HSTM - AssessRx Knowledge Assessment - Acute Care - Additional Topics</li>
                                            <li>HealthStream Products &gt; HSTM - AssessRx Knowledge Assessment - Non-Acute - Additional Topics</li>
                                        </ul>
                                    </section>
                                    <section>
                                        <p>Course Version: 1</p>
                                    </section>
                                </section>
                            </div>
                            <!-- /column -->
                            <div class="col-md-3">
                                <section class="section section-sidebar" data-equalize="layout-columns">
                                    <section class="section section-box" id="sidebar-credit">
                                        <h3>Additional Credit</h3>
                                        <p>You may be eligible for additional credit for this course. Make sure your certifications and licenses are up to date.</p>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="disciplines-licenses.php">Manage Licenses</a>
                                                <li>
                                                    <li>
                                                        <a href="certifications.php">Manage Certifications</a>
                                                    </li>
                                        </ul>
                                        <p>
                                            <a href="#" class="btn btn-sm btn-default">Refresh Credits</a>
                                        </p>
                                    </section>
                                    <section class="section section-sidebar" data-equalize="layout-columns">
                                        <section class="section section-box">
                                            <h2>Options</h2>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#share-course-modal" data-toggle="modal" >Share Course</a>
                                                </li>
                                            </ul>
                                        </section>
                                    </section>
                                </section>
                                <!-- /section-sidebar -->
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /container -->
                </div>
                <!-- /layout -->
                <div aria-hidden="true" aria-labelledby="efa4bbba-6735-47bb-be8f-6466e29511b9" class="fade modal" data-backdrop="static" id="share-course-modal" role="dialog" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" class="close" data-dismiss="modal" type="button"><i class="fa-times fa"></i></button>
                                <h4 class="modal-title" id="efa4bbba-6735-47bb-be8f-6466e29511b9">Share Course</h4>
                            </div>
                            <div class="modal-body" id="576bfee7-56e0-476c-9e7b-59cbb19220c6">
                                <h6>Copy the text to share with others.</h6>
                                <textarea id="course-info" class="form-control" rows="18"> Course: Pharmacology: RN Assessment 

Description: The Pharmacology: RN Test includes dosage calculations for oral and parenteral medications, intravenous boluses, insulin and heparin drips, metric units, and infusion rates. There are also items testing the RN's knowledge about routes of administration, characteristics of medications, abbreviations, patient teaching, and additional knowledge, skills, and abilities necessary for RNs who administer medications as part of their job responsibilities. 

Estimated Time: 30m 

Course URL: http://www.healthstream.com/hlc/common/course/quicklinks.aspx?oid=477cf486-55f3-e311-a5d9-0050568a0124&quickLink=YT0xJnRzPTIwMTctMDYtMDhUMTY6MTY6MDgmY2lkPTJkNmNiNWMxLTgwMjMtZTcxMS1iMjQ2LTAwNTA1NmIxMzUzOCZjdj0w</textarea>
                                <textarea id="course-url" style="display: none; position: absolute; left: -1000px;">http://www.healthstream.com/hlc/common/course/quicklinks.aspx?oid=477cf486-55f3-e311-a5d9-0050568a0124&quickLink=YT0xJnRzPTIwMTctMDYtMDhUMTY6MTY6MDgmY2lkPTJkNmNiNWMxLTgwMjMtZTcxMS1iMjQ2LTAwNTA1NmIxMzUzOCZjdj0w</textarea>
                                <span id="copy-error" class="small text-danger" style="display: none;">Copy button not working. Please manually copy.</span>
                                <script>
                                window.HealthStream.clientGrowl = {
                                    "image": "/HSAPP/Content/images/icon-success.png",
                                    "type": "success",
                                    "title": "Information copied successfully.",
                                    "text": "%3Cdl%20class%3D%22gritter-class%22%3E%0D%0A%20%20%20%20%3Cdd%3E%20%3C%2Fdd%3E%0D%0A%3C%2Fdl%3E%0D%0A%0D%0A",
                                    "sticky": false,
                                    "googleEventTrackingInfo": null
                                };
                                </script>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-focus" href="javascript:;" id="copy-all-button">Copy All</a>
                                <a class="btn btn-focus" href="javascript:;" id="copy-url-button">Copy URL Only</a>
                                <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="modal-author" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                <h4 class="modal-title">Course Author</h4>
                            </div>
                            <div class="modal-body">
                                <section class="section">
                                    <h2>Jane Doe</h2>
                                </section>
                                <section class="section">
                                    <h3>This is a group header</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </section>
                                <section class="section">
                                    <h3>This is a group header</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /modal -->
                <?= createFooter($patterns['footer']); ?>
                    <?= createPrototypeNav(); ?>
                        <?= createSiteScripts(); ?>
                            <script>
                            $(function() {
                                // This is a hack to make the prototype only show
                                // the additional credits sidebar section when the
                                // On Completion tab is active
                                $('#sidebar-credit').hide();
                                $('.nav-focus li a').click(function() {
                                    if ($(this).attr('href') === '#completion') {
                                        $('#sidebar-credit').show();
                                    } else {
                                        $('#sidebar-credit').hide();
                                    }
                                });
                            });
                            </script>
                            <?= createSiteEnd(); ?>
