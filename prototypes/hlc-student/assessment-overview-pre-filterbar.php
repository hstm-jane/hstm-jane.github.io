<?php
include "includes/helpers/helpers.php";
include "includes/data/assessments.php";

$patterns['start']['title'] = 'Assessment Rater Overview';
$patterns['header'] = array(
    'classes' => array('site-header--assessments'),
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">',
    'mainNav' => '
        <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
        <li class="{active=todo}"><a href="/">To Do</a></li>
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
        'value' =>  '7',
    ),
    array(
        'label' => 'Require Attention:',
        'value' =>  '2',
    ),
);

$assessments = array(
    array(
        'class' => ' assessment--attention',
        'title' => $assessments['competency-1']['title'],
        'url' => '/assessment.php?assessment=competency-1&user=rater&state=5',
        'state' => '<a href="#" class="js-state-detail" data-actor="Rater Darcy L. Crane">Review<span class="assessment__state-description">Rater<br>Sign&nbsp;Off</span> <i class="fa fa-info-circle"></i></a>',
        'data-state' => 'review',
        'date' => date('M j, Y',strtotime('-60days')),
        'data-date' => date('m/d/Y',strtotime('-60days')),
        'rater' => $assessments['competency-1']['actors']['rater']['nameLastFirst'],
        'rater_progress' => '<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>',
        'employee' => $assessments['competency-1']['actors']['employee']['nameLastFirst'],
        'employee_progress' => '<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>',
        'peers_progress' => '<div class="progress-bar progress-bar--submitted">3 of 3</div>',
        'progress_id' => 0,
        'assignedto' => '', 
        'type-description' => "Employee Assessment"
    ),
    array(
        'class' => ' assessment--stripe assessment--attention',
        'title' => $assessments['competency-2']['title'],
        'url' => '/assessment.php?assessment=competency-2&user=rater&state=4',
        'state' => '<a href="#" class="js-state-detail" data-actor="Employee Rosalyn F. Conner">Review <span class="assessment__state-description">Employee<br>Sign&nbsp;Off</span> <i class="fa fa-info-circle"></i></a>',
        'data-state' => 'review',
        'date' => date('M j, Y',strtotime('-30days')),
        'data-date' => date('m/d/Y',strtotime('-30days')),
        'rater' => $assessments['competency-2']['actors']['rater']['nameLastFirst'],
        'rater_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'employee' => $assessments['competency-2']['actors']['employee']['nameLastFirst'],
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'peers_progress' => '<div class="progress-bar" style="width:33%;">1 of 3</div>',
        'progress_id' => 1,
        'assignedto' => 'TBD', 
        'type-description' => "Employee Assessment"
    ),
    array(
        'class' => '',
        'title' => $assessments['competency-7']['title'],
        'url' => '/assessment.php?assessment=competency-7&user=rater&state=1',
        'state' => 'Review',
        'data-state' => 'review',
        'date' => date('M j, Y',strtotime('+5days')),
        'data-date' => date('m/d/Y',strtotime('+5days')),
        'rater' => $assessments['competency-7']['actors']['rater']['nameLastFirst'],
        'rater_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'employee' => $assessments['competency-7']['actors']['employee']['nameLastFirst'],
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'peers_progress' => '<div class="progress-bar progress-bar--submitted">3 of 3</div>',
        'progress_id' => 2,
        'assignedto' => 'TBD', 
        'type-description' => "Employee Assessment"
    ),
    array(
        'class' => ' assessment--stripe',
        'title' => $assessments['competency-8']['title'],
        'url' => '/assessment.php?assessment=competency-8&user=rater&state=2&approval',
        'state' => '<a href="#" class="js-state-detail-approval">Approval <span class="assessment__state-description">HR Approver</span> <i class="fa fa-info-circle"></i></a>',
        'data-state' => 'approval',
        'date' => date('M j, Y',strtotime('+5days')),
        'data-date' => date('m/d/Y',strtotime('+5days')),
        'rater' => $assessments['competency-8']['actors']['rater']['nameLastFirst'],
        'rater_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'employee' => $assessments['competency-8']['actors']['employee']['nameLastFirst'],
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'peers_progress' => '<div class="progress-bar progress-bar--submitted">3 of 3</div>',
        'progress_id' => 2,
        'assignedto' => 'TBD', 
        'type-description' => "Employee Assessment"
    ),
    array(
        'class' => '',
        'title' => $assessments['competency-3']['title'],
        'url' => '/assessment.php?assessment=competency-3&user=rater&state=0&progress=3',
        'state' => 'Evaluate',
        'data-state' => 'evaluate',
        'date' => date('M j, Y',strtotime('+10days')),
        'data-date' => date('m/d/Y',strtotime('+10days')),
        'rater' => $assessments['competency-3']['actors']['rater']['nameLastFirst'],
        'rater_progress' => '<div class="progress-bar" style="width:43%;">43%</div>',
        'employee' => $assessments['competency-3']['actors']['employee']['nameLastFirst'],
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'peers_progress' => '<div class="progress-bar" style="width:66%;">2 of 3</div>',
        'progress_id' => 2,
        'assignedto' => 'TBD', 
        'type-description' => "Employee Assessment"

    ),
    array(
        'class' => ' assessment--stripe',
        'title' => $assessments['competency-4']['title'],
        'url' => '/assessment.php?assessment=competency-4&user=rater&state=0&progress=1&approval&state=2',
        'state' => '<a href="#" class="modal-state-detail-approval-education">Approval <span class="assessment__state-description">Education Approver</span> <i class="fa fa-info-circle"></i></a>',
        'data-state' => 'approval',
        'date' => date('M j, Y',strtotime('+15days')),
        'data-date' => date('m/d/Y',strtotime('+15days')),
        'rater' => $assessments['competency-4']['actors']['rater']['nameLastFirst'],
        'rater_progress' => 'Not Yet Started',
        'employee' => $assessments['competency-4']['actors']['employee']['nameLastFirst'],
        'employee_progress' => '<div class="progress-bar">&nbsp;In Progress&nbsp;</div>',
        'peers_progress' => '<div class="progress-bar" style="width:66%;">2 of 3</div>',
        'progress_id' => 3,
        'assignedto' => 'TBD', 
        'type-description' => "Employee Assessment"
    ),
    array(
        'class' => '',
        'title' => $assessments['competency-6']['title'],
        'url' => '/assessment.php?assessment=competency-3&user=rater&state=0&progress=0&no-empsignoff-alert',
        'state' => 'Evaluate',
        'data-state' => 'evaluate',
        'date' => date('M j, Y',strtotime('+20days')),
        'data-date' => date('m/d/Y',strtotime('+20days')),
        'rater' => $assessments['competency-6']['actors']['rater']['nameLastFirst'],
        'rater_progress' => 'Not Yet Started',
        'employee' => $assessments['competency-6']['actors']['employee']['nameLastFirst'],
        'employee_progress' => 'Not Yet Started',
        'peers_progress' => '0 of 3',
        'progress_id' => 3,
        'assignedto' => '', 
        'type-description' => "Employee Assessment"
    ),
    array(
        'class' => ' assessment--stripe',
        'title' => $assessments['performance-1']['title'],
        'url' => '/assessment.php?assessment=performance-1&user=rater&approval&state=2',
        'state' => '<a href="#" class="modal-state-detail-approval-manager2">Approval <span class="assessment__state-description">Manager<br>Level 2</span> <i class="fa fa-info-circle"></i></a>',
        'data-state' => 'approval',
        'date' => date('M j, Y',strtotime('+20days')),
        'data-date' => date('m/d/Y',strtotime('+20days')),
        'rater' => $assessments['performance-1']['actors']['rater']['nameLastFirst'],
        'rater_progress' => 'Not Yet Started',
        'employee' => $assessments['performance-1']['actors']['employee']['nameLastFirst'],
        'employee_progress' => 'Not Yet Started',
        'peers_progress' => '0 of 3',
        'progress_id' => 4,
        'assignedto' => 'TBD', 
        'type-description' => "Employee Assessment"
    ),
    array(
        'class' => ' assessment--stripe',
        'title' => $assessments['competency-8']['title'],
        'url' => '/assessment.php?assessment=competency-8&user=rater&state=2&approval&manager',
        'state' => '<a href="#" class="modal-state-detail-approval-manager2">Approval <span class="assessment__state-description">Manager<br>Level 2</span> <i class="fa fa-info-circle"></i></a>',
        'data-state' => 'approval',
        'date' => date('M j, Y',strtotime('+20days')),
        'data-date' => date('m/d/Y',strtotime('+20days')),
        'rater' => $assessments['competency-8']['actors']['rater']['nameLastFirst'],
        'rater_progress' => 'Not Yet Started',
        'employee' => $assessments['competency-8']['actors']['employee']['nameLastFirst'],
        'employee_progress' => 'Not Yet Started',
        'peers_progress' => '0 of 3',
        'progress_id' => 4,
        'assignedto' => 'TBD', 
        'type-description' => "Approval"
    ),
);
?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<style>
    .assessment__state-description:before {
        content: '\A';
        white-space: pre;
    }
</style>
<div class="layout layout-search">
    <div class="container">
        <section class="section section-main section-box">

            <section class="section">
                <header class="section-header">
                    <div class="row">
                        <div class="col-sm-9">
                            <h2 class="section-header-title">Assessments <small>Showing 1-<span class="results-count"></span> of <span class="results-count"></span></small></h2>
                            <div class="tag-group">
                                <a href="#modal-filter" class="tag tag--no-remove tag-sort" data-toggle="modal">Sort:
                                    <span class="tag-sort-1-text">Due <span class="fa fa-caret-up"></span></span> |
                                    <span class="tag-sort-2-text">Assessment <span class="fa fa-caret-down"></span></span><i class="fa fa-times"></i></a>
                                <a href="#modal-filter" class="tag tag--no-remove tag-filter-1" data-toggle="modal">Assignment: <span class="tag-filter-1-text">All</span> <i class="fa fa-times"></i></a>
                                <a href="#modal-filter" class="tag tag--no-remove tag-filter-2" data-toggle="modal">State: <span class="tag-filter-2-text">All-Not Closed</span> <i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="section-header-action hidden-xs">
                                <div class="action action-split">
                                    <div class="btn-group">
                                        <a href="#modal-filter" class="btn btn-default btn-sm hidden-xs" data-toggle="modal">Sort &amp; Filter</a>
                                        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#modal-filter" data-toggle="modal">Sort &amp; Filter</a></li>
                                            <li><a href="#">Reset Filters</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="assessment assessment--header">
                    <div class="assessment__summary">
                          <div class="assessment__basics sort sort-assessment" data-sortdir="asc">
                              <a href="#">Assessment<i class="fa sortdir fa-caret-down"></i></a></div>
                        <div class="assessment__employee sort sort-employee" data-sortdir="asc">
                            <a href="#">Employee</a></div>
                        <div class="assessment__state sort sort-state" data-sortdir="asc">
                            <a href="#">State</a></div>
                        <div class="assessment__due sort sort-due" data-sortdir="desc">
                            <a href="#">Due<i class="fa sortdir fa-caret-up"></i></a></div>
                        <div class="assessment__progress sort sort-progress" data-sortdir="asc">
                            <a href="#">Progress</a></div>
                        <div class="assessment__actions"></div>
                    </div>
                </div>

                <?php foreach ($assessments as $assessment) { ?>
                <div class="assessment<?= $assessment['class'] ?>">
                    <div class="assessment__summary">
                        <div class="assessment__basics">
                            <div class="assessment__title">
                                <a href="<?= $assessment['url'] ?>"><?= $assessment['title'] ?><span> - <?= $assessment['employee'] ?></span></a>
                            </div>
                            <ul class="meta">
                                <li><span class="meta-type"><?= $assessment['type-description'] ?></span></li>
                                <li class="meta-hide-lg"><span class="meta-label">State:</span><span class="meta-value"><?= $assessment['state'] ?></span></li>
                                <li class="meta-hide-lg"><span class="meta-label">Due:</span><span class="meta-value"><?= $assessment['date'] ?></span></li>
                            </ul>

                        </div>

                        <div class="assessment__employee"><?= $assessment['employee'] ?></div>
                        <div class="assessment__state" data-state="<?= $assessment['data-state'] ?>"><?= $assessment['state'] ?></div>
                        <div class="assessment__due" data-date="<?= $assessment['data-date'] ?>"><?= $assessment['date'] ?></div>
                        <div class="assessment__progress">
                            <ul class="assessment__actors">
                                <li class="assessment__actor">
                                    <div class="assessment__actor__name">
                                        <span>Rater:</span> <?= $assessment['rater'] ?>
                                    </div>
                                    <div class="assessment__actor__progress">
                                        <div class="progress">
                                            <?= $assessment['rater_progress'] ?>
                                        </div>
                                    </div>
                                </li>
                                <li class="assessment__actor">
                                    <div class="assessment__actor__name">
                                        <span>Employee:</span> <?= $assessment['employee'] ?>
                                    </div>
                                    <div class="assessment__actor__progress">
                                        <div class="progress">
                                            <?= $assessment['employee_progress'] ?>
                                        </div>
                                    </div>
                                </li>
                                <li class="assessment__actor">
                                    <div class="assessment__actor__name">
                                        <span>Peers Submitted:</span>
                                    </div>
                                    <div class="assessment__actor__progress">
                                        <div class="progress progress-peer">
                                            <?= $assessment['peers_progress'] ?>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="assessment__actions">
                            <div class="btn-group">
                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="<?= $assessment['url'] ?>">View Assessment</a></li>
                                    <li><a href="#" class="js-progress" data-id="<?= $assessment['progress_id'] ?>">View Progress</a></li>
                                    <li><a href="/assessment-manage-rater-peers.php">Manage Rater &amp; Peers</a></li>
                                    <?php if($assessment['state'] == "Evaluate") { ?>
                                    <li><a href="/assessment-dynamic-section.php">Add to a Dynamic Section</a></li>
                                    <?php } ?>
                                    <li class="divider"></li>
                                    <li><a href="#">Print PDF</a></li>
                                    <li><a href="#" class="js-revert">Revert to {State Name}</a></li>
                                    <li><a href="#" class="js-reset">Reset</a></li>
                                     <?php if($assessment['state'] == "Evaluate") { ?>
                                    <li><a href="#" class="js-delete">Delete</a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                          <div class="assessment__assignedto" style="display:none;"><?= $assessment['assignedto'] ?></div>

                    </div>
                </div>
                <?php } ?>

            </section>

            <?php
                $stickybar = array(
                    'sets' => array(
                        array(
                            'position' => 'left',
                            'html' => '
                                <div class="action action-split">
                                    <div class="btn-group dropup">
                                        <a href="#modal-filter" class="btn btn-default btn-sm" data-toggle="modal">Sort &amp; Filter</a>
                                        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-caret-up"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#modal-filter" data-toggle="modal">Sort &amp; Filter</a></li>
                                            <li><a href="#">Reset Filters</a></li>
                                        </ul>
                                    </div>
                                </div>
                            ',
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
                <h4 class="modal-title">Assessment Progress</h4>
            </div>
            <div class="modal-body">

                <table class="modal-progress__table">
                    <thead>
                        <tr>
                            <th class="modal-progress__role">Role</th>
                            <th class="modal-progress__name">Name</th>
                            <th class="modal-progress__progress">Progress</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td class="modal-progress__role">Employee</td>
                            <td class="modal-progress__name">Crane, Darcy L.</td>
                            <td class="modal-progress__progress">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 60%;">60%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="modal-progress__role">Rater</td>
                            <td class="modal-progress__name">Juniper, Stephanie P.</td>
                            <td class="modal-progress__progress">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 38%;">38%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="modal-progress__role">Peer</td>
                            <td class="modal-progress__name">Peer 1</td>
                            <td class="modal-progress__progress">
                                <div class="progress">
                                    <div class="progress-bar progress-bar--submitted">Submitted</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="modal-progress__role">Peer</td>
                            <td class="modal-progress__name">Peer 2</td>
                            <td class="modal-progress__progress">
                                <div class="progress">
                                    Not Yet Started
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="modal-progress__role">Peer</td>
                            <td class="modal-progress__name">Peer 3</td>
                            <td class="modal-progress__progress">
                                <div class="progress">
                                    Not Yet Started
                                </div>
                            </td>
                        </tr> -->
                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-filter" class="modal fade" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Sort &amp; Filter Assessments</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h3 class="page-header">Sort</h3>
                    <div class="form-group">
                        <label class="control-label">First</label>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control js-sort js-sort-primary" data-target="sort-direction-1">
                                        <option value="due" selected data-directions="Oldest to Newest|Newest to Oldest">Due</option>
                                        <option value="assessment" data-directions="Assessments A - Z|Assessments Z - A">Assessment</option>
                                        <option value="state" data-directions="States Descending|States Ascending">State</option>
                                        <option value="employee" data-directions="Names A - Z|Names Z - A">Employee Name</option>
                                        <option value="progress" data-directions="Most to Least Complete|Least to Most Complete">Peer Progress</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" id="sort-direction-1">
                                        <option value="asc">Newest to Oldest</option>
                                        <option selected value="desc">Oldest to Newest</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <label class="control-label">Second <small>Optional</small></label>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control js-sort js-sort-secondary" data-target="sort-direction-2">
                                        <option value="" data-directions="None">None</option>
                                         <option value="due" data-directions="Oldest to Newest|Newest to Oldest">Due</option>
                                        <option value="assessment" selected data-directions="Assessments A - Z|Assessments Z - A">Assessment</option>
                                        <option value="state" data-directions="States Descending|States Ascending">State</option>
                                        <option value="employee" data-directions="Names A - Z|Names Z - A">Employee Name</option>
                                        <option value="progress" data-directions="Most to Least Complete|Least to Most Complete">Peer Progress</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" id="sort-direction-2">
                                        <option value="asc" selected>Assessments A - Z</option>
                                        <option value="desc">Assessments Z - A</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <h3 class="page-header">Filter</h3>
                    <div class="form-group">
                        <label class="control-label">Type</label>
                        <select class="form-control" id="filter-assignment">
                            <option value="all" selected>All</option>
                            <option value="employee">Employee</option>
                            <option value="approval">Approval</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Assignment</label>
                        <select class="form-control" id="filter-assignment">
                            <option value="all" selected>All</option>
                            <option value="assigned">All Assigned</option>
                            <option value="not-assigned">Not Assigned</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">State</label>
                        <select class="form-control" id="filter-state">
                            <option value="all">All</option>
                            <option selected value="all-not-closed">All-Not Closed</option>
                            <option value="assigned">Assigned</option>
                            <option value="evaluate">Evaluate</option>
                            <option value="review">Review</option>
                            <option value="approval">Approval</option>
                            <option value="closed">Closed</option>
                        </select>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal" id="apply-sort-filter-button">Apply</button>
                <button class="btn btn-default" data-dismiss="modal">Reset Filters</button>
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-state-detail" class="modal fade" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">State Detail</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-state-detail-approval" class="modal fade" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                 <h4 class="modal-title">Approval Activity</h4>
            </div>
            <div class="modal-body">
                    <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">HR Approver</div>
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
                                <li><span class="meta-label">Status:</span><span class="meta-value">Approved</span></li>
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
                                <li><span class="meta-label">Status:</span><span class="meta-value">Approved</span></li>
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
                                <li><span class="meta-label">Status:</span><span class="meta-value">Approved</span></li>
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
                                <li><span class="meta-label">Status:</span><span class="meta-value">Approved</span></li>
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
                            </div>
                            <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show Comments|Hide Comments">Show Comments<i class="fa-fw fa-caret-down fa"></i></a>
                        </div>
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
                            </div>
                            <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show Comments|Hide Comments">Show Comments<i class="fa-fw fa-caret-down fa"></i></a>
                        </div>
                    </div>
                 </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-state-detail-approval-education" class="modal fade" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                 <h4 class="modal-title">Approval Activity</h4>
            </div>
            <div class="modal-body">
                 <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">HR Approver</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">HR Approver</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Planned</span></li>
                            </ul>
                            
                        </div>
                    </div>

                    <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">Education Approver</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">Education Approver</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Pending</span></li>
                            </ul>
                            <div class="status status-pending"></div>
                        </div>
                    </div>

                    <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">Delta, Meredith S.</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">Manager Level 3</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Approved</span></li>
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
                                <li><span class="meta-label">Status:</span><span class="meta-value">Approved</span></li>
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
                                <li><span class="meta-label">Status:</span><span class="meta-value">Approved</span></li>
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
                            </div>
                            <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show Comments|Hide Comments">Show Comments<i class="fa-fw fa-caret-down fa"></i></a>
                        </div>
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
                            </div>
                            <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show Comments|Hide Comments">Show Comments<i class="fa-fw fa-caret-down fa"></i></a>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-state-detail-approval-manager2" class="modal fade" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Approval Activity</h4>
            </div>
            <div class="modal-body">
                     <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">HR Approver</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">HR Approver</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Planned</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">Education Approver</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">Education Approver</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Planned</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">Delta, Meredith S.</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">Manager Level 3</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Planned</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">Barker, Aaron L.</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">Manager Level 2</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Pending</span></li>
                            </ul>
                            <div class="status status-pending"></div>
                        </div>
                    </div>

                    <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">Peeples, Misty R.</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">Manager Level 1</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Approved</span></li>
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
                            </div>
                            <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show Comments|Hide Comments">Show Comments<i class="fa-fw fa-caret-down fa"></i></a>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script src="scripts/prototype.raters.js"></script>
<script>
    <?php if (!empty($_GET['growlTitle']) && !empty($_GET['growlText'])) { ?>
        // Show Growl on Load
        var growl = {};
        growl.title = "<?= $_GET['growlTitle']; ?>";
        growl.text = "<?= $_GET['growlText']; ?>";
        <?php echo (!empty($_GET['growlType']))?'growl.type = "'.$_GET['growlType'].'";'."\n":''; ?>
        <?php echo (!empty($_GET['growlSticky']))?'growl.sticky = '.$_GET['growlSticky'].';'."\n":''; ?>

        setTimeout(function(){
            HealthStream.utilities.growl(growl);
        },500);
        <?php } ?>
</script>
<?= createSiteEnd(); ?>
