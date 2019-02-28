<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Sales Demo Homepage';
$patterns['focus']['title'] = 'Sales Demo Homepage';
$patterns['header']['mainNavActive'] = 'none';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout">
    <div class="container">
        <section class="section section-main section-box">
            <section class="section">
                <h2>Assessments</h2>
                <ol>
                    <li>Performance Assessment as Employee
                        <ol style="margin:3px 0 15px">
                            <li><a href="assessment-performance-employee-summary.php">Performance Assessment: Employee Summary</a></li>
                            <li><a href="assessment-performance-employee-rate-job.php">Performance Assessment: Employee Rate Job</a></li>
                            <li><a href="assessment-performance-employee-rate.php">Performance Assessment: Employee Rate Statement</a></li>
                            <li><a href="assessment-performance-employee-rate-goal.php">Performance Assessment: Employee Rate Goal</a></li>
                            <li><a href="assessment-performance-employee-signoff-combined.php">Performance Assessment: Employee Sign Off w/ Ratings</a></li>
                            <li><a href="assessment-performance-employee-signoff.php">Performance Assessment: Employee Sign Off w/o Ratings</a></li>
                        </ol>
                    </li>
                    <li>Performance Assessment as Rater
                        <ol style="margin:3px 0 15px">
                            <li><a href="assessment-performance-rater-summary.php">Performance Assessment: Rater Summary</a></li>
                            <li><a href="assessment-performance-rater-rate-job.php">Performance Assessment: Rater Rate Job</a></li>
                            <li><a href="assessment-performance-rater-rate.php">Performance Assessment: Rater Rate Statement</a></li>
                            <li><a href="assessment-performance-rater-review.php">Performance Assessment: Rater Review</a></li>
                            <li><a href="assessment-performance-rater-signoff.php">Performance Assessment: Rater Sign Off</a></li>
                            <li><a href="assessment-performance-rater-signoff-remote.php">Performance Assessment: Rater Sign Off Remote</a></li>
                        </ol>
                    </li>
                    <li>Competency Assessment as Employee
                        <ol style="margin:3px 0 15px">
                            <li><a href="assessment-competency-employee-summary.php">Competency Assessment: Employee Summary</a></li>
                            <li><a href="assessment-competency-employee-rate.php">Competency Assessment: Employee Rate Statement</a></li>
                            <li><a href="assessment-competency-employee-signoff-combined.php">Competency Assessment: Employee Sign Off w/ Ratings</a></li>
                        </ol>
                    </li>
                    <li>Competency Assessment as Rater
                        <ol style="margin:3px 0 15px">
                            <li><a href="assessment-competency-rater-summary.php">Competency Assessment: Rater Summary</a></li>
                            <li><a href="assessment-competency-rater-rate.php">Competency Assessment: Rater Rate Statement</a></li>
                            <li><a href="assessment-competency-rater-review.php">Competency Assessment: Rater Review</a></li>
                            <li><a href="assessment-competency-rater-signoff.php">Competency Assessment: Rater Sign Off</a></li>
                            <li><a href="assessment-competency-rater-signoff-remote.php">Competency Assessment: Rater Sign Off Remote</a></li>
                        </ol>
                    </li>
                    <li>Assessment Rater Overview
                        <ol style="margin:3px 0 15px">
                            <li><a href="todo-rater.php">To-Do List w/ Assessment Rater Nav &amp; Content</a></li>
                            <li><a href="assessment-overview.php">Assessment Rater Overview</a></li>
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
                        </ol>
                    </li>
                </ol>
            </section>
        </section>
    </div><!-- /container -->
</div><!-- /layout -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>