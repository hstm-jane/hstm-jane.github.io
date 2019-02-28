<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'Acute Care Baseline Knowledge Exam';
$patterns['focus']['title'] = 'Acute Care Baseline Knowledge Exam';
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
                                                <div class="title">Acute Care Baseline Knowledge Exam</div>
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
                                        <h2>Description</h2> The Acute Care Baseline Knowledge Exam covers topics related to the application of the nursing process to patients in an acute care setting. Topics include basic clinical skills; disease processes, such as diabetes, pneumonia, acute myocardial infarction, congestive heart failure, and stroke; nursing sensitive indicators, such as hospital-acquired infection and restraints; abuse/neglect; end of life care; medication administration; and additional knowledge, skills, and abilities needed for successful job performance by a graduate nurse. </section>
                                    <section class="section">
                                        <h2>Learning Objectives</h2> N/A </section>
                                    <section class="section">
                                        <h2>Author</h2> NurseCompetency </section>
                                    <section class="section">
                                        <h2>Catalog</h2>
                                        <p>This course belongs to the following categories in the HLC catalog:</p>
                                        <ul>
                                            <li>Audience &gt; Nurses</li>
                                            <li>Content Publisher &gt; Nurse Competency</li>
                                            <li>HealthStream Products &gt; NurseCompetency - Assessments</li>
                                            <li>Subject &gt; Leadership/Workforce &gt; Competency &gt; Exams</li>
                                        </ul>
                                    </section>
                                    <section>
                                        <p>Course Version: 1</p>
                                    </section>
                                </section>

            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box" id="sidebar-credit">
                        <h3>Additional Credit</h3>
                        <p>You may be eligible for additional credit for this course. Make sure your certifications and licenses are up to date.</p>
                        <ul class="list-unstyled">
                            <li><a href="disciplines-licenses.php">Manage Licenses</a><li>
                            <li><a href="certifications.php">Manage Certifications</a></li>
                        </ul>
                        <p><a href="#" class="btn btn-sm btn-default">Refresh Credits</a></p>
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
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div> <!-- /layout -->
<div aria-hidden="true" aria-labelledby="efa4bbba-6735-47bb-be8f-6466e29511b9" class="fade modal" data-backdrop="static" id="share-course-modal" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" class="close" data-dismiss="modal" type="button"><i class="fa-times fa"></i></button>
                <h4 class="modal-title" id="efa4bbba-6735-47bb-be8f-6466e29511b9">Share Course</h4>
            </div>
           <div class="modal-body" id="521c9ad8-202a-4506-a89b-d0dfaa0717e8"><h6>Copy the text to share with others.</h6>
           <textarea id="course-info" class="form-control" rows="18">Course: Acute Care Baseline Knowledge Exam

Description: The Acute Care Baseline Knowledge Exam covers topics related to the application of the nursing process to patients in an acute care setting. Topics include basic clinical skills; disease processes, such as diabetes, pneumonia, acute myocardial infarction, congestive heart failure, and stroke; nursing sensitive indicators, such as hospital-acquired infection and restraints; abuse/neglect; end of life care; medication administration; and additional knowledge, skills, and abilities needed for successful job performance by a graduate nurse.

Estimated Time: 30m

Course URL: http://www.healthstream.com/hlc/common/course/quicklinks.aspx?oid=477cf486-55f3-e311-a5d9-0050568a0124&amp;quickLink=YT0xJnRzPTIwMTctMDYtMDhUMTY6MjI6MzAmY2lkPTYwYTQzOTcwLWNiZDgtZTYxMS04MGNmLTAwNTA1NmIxNjgwYyZjdj0w</textarea>

           <textarea id="course-url" style="display: none; position: absolute; left: -1000px;">http://www.healthstream.com/hlc/common/course/quicklinks.aspx?oid=477cf486-55f3-e311-a5d9-0050568a0124&amp;quickLink=YT0xJnRzPTIwMTctMDYtMDhUMTY6MjI6MzAmY2lkPTYwYTQzOTcwLWNiZDgtZTYxMS04MGNmLTAwNTA1NmIxNjgwYyZjdj0w</textarea>

           <span id="copy-error" class="small text-danger" style="display: none;">Copy button not working. Please manually copy.</span>
           <script>
               window.HealthStream.clientGrowl = {"image":"/HSAPP/Content/images/icon-success.png","type":"success","title":"Information copied successfully.","text":"%3Cdl%20class%3D%22gritter-class%22%3E%0D%0A%20%20%20%20%3Cdd%3E%20%3C%2Fdd%3E%0D%0A%3C%2Fdl%3E%0D%0A%0D%0A","sticky":false,"googleEventTrackingInfo":null};
           </script></div>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
                <section class="section">
                    <h3>This is a group header</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
    <script>
        $(function(){
            // This is a hack to make the prototype only show
            // the additional credits sidebar section when the
            // On Completion tab is active
            $('#sidebar-credit').hide();
            $('.nav-focus li a').click(function(){
                if ( $(this).attr('href') === '#completion') {
                    $('#sidebar-credit').show();
                } else {
                    $('#sidebar-credit').hide();
                }
            });
        });
    </script>
<?= createSiteEnd(); ?>
