<?php

// $time_start = microtime(true);

$rows = (!empty($_GET['rows']))?$_GET['rows']:20;

include "includes/helpers/helpers.php";
if(isset($_GET['return'])) {
    include "includes/data/assessments-overview-return.php";
}
else if(isset($_GET['tabs'])) {
    include "includes/data/assessments-overview-tabs.php";
}
else {
    include "includes/data/assessments-overview.php";
}


$patterns['start']['title'] = 'Assessment Rater Overview';
$patterns['header'] = array(
    'classes' => array('site-header--assessments'),
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">',
    'mainNav' => '
        <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
        <li class="{active=todo}"><a href="/todo.php">To Do</a></li>
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
$patterns['focus']['title'] = 'Assessment Rater Overview';


$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Total Assessments:',
        'value' =>  $rows,
    ),
    array(
        'label' => 'Action Items:',
        'value' =>  '???',
    ),
);


$legend = '<small>Click <i class="fa fa-circle text-accent"></i> on each group to see action items</small>';

$click = (!empty($_GET['click']))?$_GET['click']:false;

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<style>

    .assessment__state-description:before {
        content: '\A';
        white-space: pre;
    }

    .assessment:nth-child(n+100) {
        /*display: none;*/
    }

</style>
<input type="hidden" id="primarySortColumn" value="due">
<input type="hidden" id="primarySortDirection" value="asc">

<div class="layout layout-search" style="position: relative;">
    <div class="container" style="position: relative;">
        <section class="section section-main section-box" style="position: relative;">

            <!--Filter Bar-->
            <div class="panel-group filter-bar-flat" role="tablist" id="filterbar-panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <a role="button" data-toggle="collapse" data-parent="#filterbar-panel-group" href="#filterbar-panel" class="">
                            Filter
                            <div class="panel-heading-icon">
                                <i class="fa fa-chevron-down panel-heading-icon-closed"></i>
                                <i class="fa fa-chevron-up panel-heading-icon-open"></i>
                            </div>
                        </a>
                    </div>
                    <div id="filterbar-panel" class="panel-collapse in" role="tabpanel">
                        <div class="panel-body">
                            <div class="filter-item">
                                <div class="form-group">
                                    <div class="filter-label"><label class="control-label">Assignment:</label></div>
                                    <div class="filter-control">
                                        <select class="form-control input-sm dd-filter" id="filter-assignment">
                                            <option value="all" >All</option>
                                            <option value="actionable">All Actionable</option>
                                            <option value="assigned" selected>All Assigned</option>
                                            <option value="not-assigned">Not Assigned</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-item">
                                <div class="form-group">
                                    <div class="filter-label"><label class="control-label">Assessment State:</label></div>
                                    <div class="filter-control">
                                        <select class="form-control input-sm dd-filter" id="filter-state">
                                            <option value="all">All</option>
                                            <option selected value="all-not-closed">All-Not Closed</option>
                                            <option value="assigned">Assigned</option>
                                            <option value="evaluate">Evaluate</option>
                                            <option value="review">Review</option>
                                            <option value="approval">Approval</option>
                                            <option value="closed">Closed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-item">
                                <div class="form-group">
                                   <div class="filter-label"> <label class="control-label">Assessment Type:</label></div>
                                    <div class="filter-control">
                                        <select class="form-control input-sm dd-filter" id="filter-type">
                                            <option selected value="all">All</option>
                                            <option value="employee">Employee</option>
                                            <option value="approval">Approval</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-item sort-cell">
                                <a class="btn btn-default btn-sm btn-reset reset">Reset Filters</a>
                              <a class="btn btn-default btn-sm btn-sort-filter " href="#modal-sort" data-toggle="modal">Sort Options</a>
                           </div>

                            <div class="clearfix">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Filter Bar-->

            <section class="section" >
                <div class="assessment assessment--header">
                    <div class="assessment__summary">
                        <div class="assessment__basics sort sort-assessment" data-sortdir="asc"> <a href="#">Assessment<i class="fa sortdir fa-caret-down"></i></a></div>
                        <div class="assessment__employee sort sort-employee" data-sortdir="desc"> <a href="#">Employee</a></div>
                        <div class="assessment__state sort sort-state" data-sortdir="desc"> <a href="#">State</a></div>
                        <div class="assessment__due sort sort-due" data-sortdir="desc"> <a href="#">Due<i class="fa sortdir fa-caret-up"></i></a></div>
                        <div class="assessment__progress sort-progress" data-sortdir="desc">Progress</div>
                        <div class="assessment__actions">
                        <div id="slideout">

                        </div>
                        </div>
                    </div>
                </div>
                <?php for ($i=0;$i<$rows;$i++) { ?>
                    <div class="assessment assessment-slat assessment-flag">
                        <div class="assessment__summary">
                            <div class="assessment__basics">
                                <div class="assessment__title">
                                    <a href="/HSAPP/AssessmentFormSummary?formId=56394296-74d7-e611-90d7-005056021213&amp;isPageReadOnly=False&amp;refreshCache=False&amp;formState=Evaluate">pk temp3<span> - pk, student</span></a>
                                </div>
                                <ul class="meta">
                                    <li><span class="meta-type">Employee Assessment</span></li>
                                    <li class="meta-hide-lg">
                                        <span class="meta-label">State:</span>
                                            <span class="meta-value">Evaluate</span>
                                    </li>
                                    <li class="meta-hide-lg">
                                        <span class="meta-label">Due:</span>
                                        <span class="meta-value">Jan 31, 2017</span>
                                    </li>
                                        <li><span class="action-badge-solid-blue"><i class="fa fa-flag"></i>Action Needed</span></li>
                                </ul>
                            </div>
                            <div class="assessment__employee">pk, student</div>
                            <div class="assessment__state">Evaluate</div>
                            <div class="assessment__due">Jan 31, 2017</div>
                            <div class="assessment__progress">
                                <ul class="assessment__actors">
                                    <li class="assessment__actor">
                                        <div class="assessment__actor__name"><span>Rater:</span>pk, rater</div>
                                        <div class="assessment__actor__progress">
                                            <a class="js-progress" data-target="#progress-detail-modal-container" data-hijax="true" href="/HSAPP/AssessmentFormRaterOverview/GetProgressBarModal?formId=56394296-74d7-e611-90d7-005056021213&amp;formTemplateId=ab061e19-95d6-e611-a1b3-005056021129&amp;formName=pk%20temp3">
                                                <div class="progress">Not Yet Started</div></a>
                                        </div>
                                    </li>
                                    <li class="assessment__actor">
                                        <div class="assessment__actor__name"><span>Employee:</span>pk, student</div>
                                        <div class="assessment__actor__progress">
                                            <a class="js-progress" data-target="#progress-detail-modal-container" data-hijax="true" href="/HSAPP/AssessmentFormRaterOverview/GetProgressBarModal?formId=56394296-74d7-e611-90d7-005056021213&amp;formTemplateId=ab061e19-95d6-e611-a1b3-005056021129&amp;formName=pk%20temp3">
                                                <div class="progress">Not Yet Started</div></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="assessment__actions">
                                <div class="btn-group">
                                    <a class="btn btn-default btn-sm dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="/HSAPP/AssessmentFormSummary?formId=56394296-74d7-e611-90d7-005056021213&amp;isPageReadOnly=False&amp;refreshCache=False&amp;formState=Evaluate">View Assessment</a>
                                        </li>
                                        <li><a class="js-progress" data-target="#progress-detail-modal-container" data-hijax="true" href="/HSAPP/AssessmentFormRaterOverview/GetProgressBarModal?formId=56394296-74d7-e611-90d7-005056021213&amp;formTemplateId=ab061e19-95d6-e611-a1b3-005056021129&amp;formName=pk%20temp3">View Progress</a></li>
                                        <li><a class="js-append-meta" href="/HSAPP/AssessmentRaterPeerManagement?templateId=ab061e19-95d6-e611-a1b3-005056021129&amp;templateVersion=1&amp;isFreshSearch=True&amp;formId=56394296-74d7-e611-90d7-005056021213">Manage Rater and Peers</a></li>
                                        <li class="divider"></li>
                                        <li><a href="/HSAPP/AssessmentFormRaterOverview/ReportLaunchWaitTime?formId=56394296-74d7-e611-90d7-005056021213&amp;actorType=2&amp;templateId=ab061e19-95d6-e611-a1b3-005056021129&amp;updateDateTime=01%2F10%2F2017%2015%3A37%3A29&amp;studentName=pk%2C%20student&amp;formState=Evaluate" target="_blank">Print</a></li>

                                        <li>
                                            <a data-target="#ResetAssessmentInterruptContainerId" data-hijax="true" href="/HSAPP/AssessmentFormRaterOverview/BuildResetAssessmentInterruptionModal?formState=Evaluate&amp;formId=56394296-74d7-e611-90d7-005056021213">Reset</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </section>


            <?php
                $stickybar = array(
                    'sets' => array(
                        array(
                            'position' => 'left',
                            'html' => '<a class="btn btn-default btn-sm reset" >Reset Filters</a>
                                    <a href="#modal-sort" class="btn btn-default btn-sm" data-toggle="modal">Sort Options</a>',
                        ),
                    ),
                );
                echo createStickybar($stickybar);
            ?>

            </section>
    </div><!-- /container -->
</div><!-- /layout -->


<!-- Modal -->
<div id="modal-progress" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Assessment Progress</h4> </div>
            <div class="modal-body">
                <table class="modal-progress__table">
                    <thead>
                        <tr>
                            <th class="modal-progress__role">Role</th>
                            <th class="modal-progress__name">Name</th>
                            <th class="modal-progress__progress">Progress</th>
                        </tr>
                    </thead>
                    <tbody> </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- /modal -->

<!-- Modal -->
<div id="modal-state-detail" class="modal fade" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">State Detail</h4> </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- /modal -->

<!-- Modal -->
<div id="modal-sort" class="modal fade" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Sort </h4> </div>
            <div class="modal-body">
                <section class="section">
                    <div class="form-group">
                        <label class="control-label">Primary</label>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                     <select class="form-control js-sort js-sort-primary primary-sort-col" data-target="sort-direction-1">
                                            <option value="due" selected data-directions="Newest to Oldest|Oldest to Newest">Due</option>
                                            <option value="assessment" data-directions="Assessments A - Z|Assessments Z - A">Assessment</option>
                                            <option value="type" data-directions="Type A - Z|Type Z - A">Type</option>
                                            <option value="state" data-directions="States Descending|States Ascending">State</option>
                                            <option value="employee" data-directions="Names A - Z|Names Z - A">Employee Name</option>
                                            <option value="rater" data-directions="Names A - Z|Names Z - A">Rater Name</option>
                                            <option value="raterprogress" data-directions="Least to Most Complete|Most to Least Complete">Rater Progress</option>
                                            <option value="employeeprogress" data-directions="Least to Most Complete|Most to Least Complete">Employee Progress</option>
                                            <option value="peerprogress" data-directions="Least to Most Complete|Most to Least Complete">Peer Progress</option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                     <select class="form-control primary-sort-dir js-sort-primary-dir" id="sort-direction-1">
                                        <option value="desc">Newest to Oldest</option>
                                        <option selected value="asc">Oldest to Newest</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <label class="control-label">Secondary <small>Optional</small></label>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                     <select class="form-control js-sort js-sort-secondary secondary-sort-col " data-target="sort-direction-2">
                                        <option value="none" data-directions="None|None">None</option>
                                        <option value="due" data-directions="Newest to Oldest|Oldest to Newest">Due</option>
                                        <option value="assessment" selected data-directions="Assessments A - Z|Assessments Z - A">Assessment</option>
                                        <option value="type" data-directions="Type A - Z|Type Z - A">Type</option>
                                        <option value="state" data-directions="States Descending|States Ascending">State</option>
                                        <option value="employee" data-directions="Names A - Z|Names Z - A">Employee Name</option>
                                        <option value="rater" data-directions="Names A - Z|Names Z - A">Rater Name</option>
                                        <option value="raterprogress" data-directions="Least to Most Complete|Most to Least Complete">Rater Progress</option>
                                        <option value="employeeprogress" data-directions="Least to Most Complete|Most to Least Complete">Employee Progress</option>
                                        <option value="peerprogress" data-directions="Least to Most Complete|Most to Least Complete">Peer Progress</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control secondary-sort-dir" id="sort-direction-2">
                                        <option value="desc" selected>Assessments A - Z</option>
                                        <option value="asc">Assessments Z - A</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal" id="apply-sort-button">Apply</button>
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- /modal -->
<!-- Modal -->
<div id="modal-state-detail-approval" class="modal fade" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">State Detail</h4> </div>
            <div class="modal-body">
                <section class="section">
                    <h3>Approval Activity</h3>
                    <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">Sampson, Frieda D.</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">HR Approver</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Pending</span></li>
                            </ul>
                            <div class="status status-pending"></div>
                        </div>
                    </div>
                    <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">Smith, Carolyn D.</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">Education Approver</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Accepted</span></li>
                                <li class="meta-callout"><span class="meta-label">Date: </span><span class="meta-value">Aug 28, 2016</span></li>
                            </ul>
                            <div class="status status-accepted"></div>
                        </div>
                    </div>
                    <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">Delta, Meredith S.</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">Manager Level 3</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Accepted</span></li>
                                <li class="meta-callout"><span class="meta-label">Date: </span><span class="meta-value">Aug 27, 2016</span></li>
                            </ul>
                            <div class="status status-success"></div>
                        </div>
                    </div>
                    <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">Barker, Aaron L.</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">Manager Level 2</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Accepted</span></li>
                                <li class="meta-callout"><span class="meta-label">Date: </span><span class="meta-value">Aug 26, 2016</span></li>
                            </ul>
                            <div class="status status-success"></div>
                        </div>
                    </div>
                    <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">Peeples, Misty R.</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">Manager Level 1</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Accepted</span></li>
                                <li class="meta-callout"><span class="meta-label">Date: </span><span class="meta-value">Aug 25, 2016</span></li>
                            </ul>
                            <div class="status status-success"></div>
                        </div>
                        <div class="slat-nested">
                            <div class="collapse-group collapse">
                                <section class="section">
                                    <h5>Comments</h5>
                                    <p>Thank you, approved</p>
                                </section>
                            </div> <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show Comments|Hide Comments">Show Comments<i class="fa-fw fa-caret-down fa"></i></a> </div>
                    </div>
                    <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">Peeples, Misty R.</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">Manager Level 1</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Rejected</span></li>
                                <li class="meta-callout"><span class="meta-label">Date: </span><span class="meta-value">Aug 24, 2016</span></li>
                            </ul>
                            <div class="status status-fail"></div>
                        </div>
                        <div class="slat-nested">
                            <div class="collapse-group collapse">
                                <section class="section">
                                    <h5>Comments</h5>
                                    <p>More details please. She had a large jump in multiple areas.</p>
                                </section>
                            </div> <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show Comments|Hide Comments">Show Comments<i class="fa-fw fa-caret-down fa"></i></a> </div>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    <input type="hidden" id="numberOfActionItems" value="<?= $numberOfActionItems ?>"/>
    <input type="hidden" id="numberOfAssessments" value="<?= $numberOfAssessments ?>"/>
    <input type="hidden" id="clickGroup" value="<?= $click ?>"/>

</div>
<!-- /modal -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script src="/scripts/prototype.raters.filterbar.js"></script>
<script>
$(function(){
    <?php
        // $time_finish = microtime(true);
        // $time = $time_finish - $time_start;
        $time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
        $alert = 'Page created in ' . number_format($time,3) . ' seconds. \n\nAdditional time needed to load javascript and show alert';
    ?>
    // alert('<?= $alert ?>');
});
</script>
<?= createSiteEnd(); ?>


