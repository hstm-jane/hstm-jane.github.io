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
        'date' => date('M j, Y',strtotime('-60days')),
        'rater' => $assessments['competency-1']['actors']['rater']['nameLastFirst'],
        'rater_progress' => '<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>',
        'employee' => $assessments['competency-1']['actors']['employee']['nameLastFirst'],
        'employee_progress' => '<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>',
        'peers_progress' => '<div class="progress-bar progress-bar--submitted">3 of 3</div>',
        'progress_id' => 0,
    ),
    array(
        'class' => ' assessment--stripe assessment--attention',
        'title' => $assessments['competency-2']['title'],
        'url' => '/assessment.php?assessment=competency-2&user=rater&state=4',
        'state' => '<a href="#" class="js-state-detail" data-actor="Employee Rosalyn F. Conner">Review <span class="assessment__state-description">Employee<br>Sign&nbsp;Off</span> <i class="fa fa-info-circle"></i></a>',
        'date' => date('M j, Y',strtotime('-30days')),
        'rater' => $assessments['competency-2']['actors']['rater']['nameLastFirst'],
        'rater_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'employee' => $assessments['competency-2']['actors']['employee']['nameLastFirst'],
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'peers_progress' => '<div class="progress-bar" style="width:33%;">1 of 3</div>',
        'progress_id' => 1,
    ),
    array(
        'class' => '',
        'title' => $assessments['competency-7']['title'],
        'url' => '/assessment.php?assessment=competency-7&user=rater&state=1',
        'state' => 'Review',
        'date' => date('M j, Y',strtotime('+5days')),
        'rater' => $assessments['competency-7']['actors']['rater']['nameLastFirst'],
        'rater_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'employee' => $assessments['competency-7']['actors']['employee']['nameLastFirst'],
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'peers_progress' => '<div class="progress-bar progress-bar--submitted">3 of 3</div>',
        'progress_id' => 2,
    ),
    array(
        'class' => ' assessment--stripe',
        'title' => $assessments['competency-3']['title'],
        'url' => '/assessment.php?assessment=competency-3&user=rater&state=0&progress=3',
        'state' => 'Evaluate',
        'date' => date('M j, Y',strtotime('+10days')),
        'rater' => $assessments['competency-3']['actors']['rater']['nameLastFirst'],
        'rater_progress' => '<div class="progress-bar" style="width:43%;">43%</div>',
        'employee' => $assessments['competency-3']['actors']['employee']['nameLastFirst'],
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'peers_progress' => '<div class="progress-bar" style="width:66%;">2 of 3</div>',
        'progress_id' => 2,
    ),
    array(
        'class' => '',
        'title' => $assessments['competency-4']['title'],
        'url' => '/assessment.php?assessment=competency-4&user=rater&state=0&progress=1',
        'state' => 'Evaluate',
        'date' => date('M j, Y',strtotime('+15days')),
        'rater' => $assessments['competency-4']['actors']['rater']['nameLastFirst'],
        'rater_progress' => 'Not Yet Started',
        'employee' => $assessments['competency-4']['actors']['employee']['nameLastFirst'],
        'employee_progress' => '<div class="progress-bar">&nbsp;In Progress&nbsp;</div>',
        'peers_progress' => '<div class="progress-bar" style="width:66%;">2 of 3</div>',
        'progress_id' => 3,
    ),
    array(
        'class' => ' assessment--stripe',
        'title' => $assessments['competency-6']['title'],
        'url' => '/assessment.php?assessment=competency-6&user=rater&state=0&progress=0',
        'state' => 'Evaluate',
        'date' => date('M j, Y',strtotime('+20days')),
        'rater' => $assessments['competency-6']['actors']['rater']['nameLastFirst'],
        'rater_progress' => 'Not Yet Started',
        'employee' => $assessments['competency-6']['actors']['employee']['nameLastFirst'],
        'employee_progress' => 'Not Yet Started',
        'peers_progress' => '0 of 3',
        'progress_id' => 3,
    ),
    array(
        'class' => '',
        'title' => $assessments['performance-1']['title'],
        'url' => '/assessment.php?assessment=performance-1&user=rater',
        'state' => 'Evaluate',
        'date' => date('M j, Y',strtotime('+24days')),
        'rater' => $assessments['performance-1']['actors']['rater']['nameLastFirst'],
        'rater_progress' => 'Not Yet Started',
        'employee' => $assessments['performance-1']['actors']['employee']['nameLastFirst'],
        'employee_progress' => 'Not Yet Started',
        'peers_progress' => '0 of 3',
        'progress_id' => 4,
    ),
);
?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<style>
.dashboard-stat2.bordered {
    border: 1px solid #ececec;
    
}
.dashboard-stat2:hover {
    cursor: pointer;
    background-color: #eee;
    border: 1px solid #ccc;
}
.dashboard-stat2 {
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    border-radius: 4px;
    background: #f9f9f9;
    padding: 0px 15px 20px;
}
.dashboard-stat2, .dashboard-stat2 .display {
    margin-bottom: 10px;
}
a, button, code, div, img, input, label, li, p, pre, select, span, svg, table, td, textarea, th, ul {
    -webkit-border-radius: 0!important;
    -moz-border-radius: 0!important;
    border-radius: 0!important;
}
.dashboard-stat2 .progress-info .progress {
    margin: 0;
    height: 4px;
    clear: both;
    display: block;
}
.progress {
    border: 0;
    background-image: none;
    filter: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
}
.progress {
    overflow: hidden;
    height: 15px;
    margin-bottom: 10px;
    background-color: #f5f5f5;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
    box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}
.dashboard-stat2 .progress-info .progress {
    margin: 0;
    height: 4px;
    clear: both;
    display: block;
}
.progress {
    border: 0;
    background-image: none;
    filter: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
}
.progress {
    overflow: hidden;
    height: 20px;
    margin-bottom: 20px;
    background-color: #f5f5f5;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
    box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}
.dashboard-stat2 .display .number h3 {
    margin: 0 0 2px;
    padding: 0;
    font-size: 30px;
    font-weight: 400;
}
.font-green-sharp {
    color: #5cb85c!important;
}
.dashboard-stat2 .progress-info .status {
    margin-top: 5px;
    font-size: 11px;
    color: #858e94;
    font-weight: 600;
    text-transform: uppercase;
}
.dashboard-stat2 .progress-info .status .status-number {
    float: right;
    display: inline-block;
}
.dashboard-stat2 .progress-info .status .status-title {
    float: left;
    display: inline-block;
}
.dashboard-stat2 .display .number small {
    font-size: 14px;
    color: #858e94;
    font-weight: 600;
    text-transform: uppercase;
}
.font-red-haze {
    color: #f0ad4e!important;
}
.font-blue-sharp {
    color: #5bc0de!important;
}
.font-purple-soft {
    color: #007aa3!important;
}
.progress-bar.red-haze {
    background: #f0ad4e!important;
    color: #fff!important;
}
.progress-bar.green-sharp {
    background: #5cb85c!important;
    color: #FFF!important;
}
.progress-bar.blue-sharp {
    background: #5bc0de!important;
    color: #FFF!important;
}
.progress-bar.purple-soft {
    background: #007aa3!important;
    color: #fff!important;
}
</style>

<div class="layout layout-search">
    <div class="container">
    
        <section class="section section-main section-box">

            <div class="tab-content">

                <div class="tab-pane in active" id="tab-1">
                <h2 class="section-header-title" style="margin-top:0px;">Assessments <small>Showing 1-5 of 5</small></h2>
                <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span data-counter="counterup" data-value="3">3</span>
                                             <small style="float:right; font-style:normal; margin-top:15px;">REVIEW</small>
                                        </h3>
                                       
                                    </div>
                                    <div class="icon">
                                        <i class="icon-pie-chart"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 6%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">6% total assessments</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> total assessments</div>
                                        <div class="status-number"> 6% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="7">7</span>
                                             <small style="float:right; font-style:normal; margin-top:15px;">APPROVE</small>
                                        </h3>
                                      
                                    </div>
                                    <div class="icon">
                                        <i class="icon-basket"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 15%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only">15% assessments</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title">total assessments</div>
                                        <div class="status-number"> 15% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">

                                <div class="number">
                                        <h3 class="font-red-haze">
                                            <span data-counter="counterup" data-value="15">15</span>
                                          
                                             <small style="float:right; font-style:normal; margin-top:15px;">EVALUATE</small>
                                        </h3>
                                       
                                    </div>



                                    <div class="icon">
                                        <i class="icon-like"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 32%;" class="progress-bar progress-bar-success red-haze">
                                            <span class="sr-only">32% total assessments</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> total assessments</div>
                                        <div class="status-number"> 32% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-purple-soft">
                                            <span data-counter="counterup" data-value="22">22</span>
                                             <small style="float:right; font-style:normal; margin-top:15px;">CLOSED</small>
                                        </h3>
                                        
                                    </div>
                                    <div class="icon">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 47%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only">47% total assessments</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> total assessments</div>
                                        <div class="status-number"> 47% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <header class="section-header">
                        
                            <div class="row">
                                <div class="col-sm-9">
                                
                                    <div class="tag-group">
                                        <a href="#modal-filter" class="tag tag--no-remove" data-toggle="modal">Sort: Due <span class="fa fa-caret-up"></span> | Assessment <span class="fa fa-caret-down"></span> <i class="fa fa-times"></i></a>
                                        <a href="#modal-filter" class="tag tag--no-remove" data-toggle="modal">Assignment: All <i class="fa fa-times"></i></a>
                                        <a href="#modal-filter" class="tag tag--no-remove" data-toggle="modal">State: All-Not Closed <i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="section-header-action hidden-xs">
                                        <div class="btn-group">
                                        <a href="#tab-2" data-toggle="tab" class="btn btn-default hidden-xs" >Group</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-caret-down"></i>
                                        </a>
                                         <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#tab-2" data-toggle="tab">Group by Assessment State</a></li>
                                            <li class=""><a href="#tab-3" data-toggle="tab">Group by Assessment Title</a></li>
                                            <li class="disabled"><a href="#tab-4" data-toggle="tab">Group by Employee Name</a></li>
                                             <li role="separator" class="divider"></li>
                                            <li class="disabled"><a href="#tab-1" data-toggle="tab">Ungroup</a></li>
                                        </ul>
                                    </div>
                                
                                        <a href="#modal-filter" class="btn btn-default" data-toggle="modal">Sort &amp; Filter</a>

                                    </div>
                                </div>
                            </div>
                        </header>

                        <div class="assessment assessment--header">
                            <div class="assessment__summary">
                                <div class="assessment__basics"><a href="#modal-filter" data-toggle="modal">Assessment <i class="fa fa-caret-down"></i></a></div>
                                <div class="assessment__employee"><a href="#modal-filter" data-toggle="modal">Employee</a></div>
                                <div class="assessment__state"><a href="#modal-filter" data-toggle="modal">State</a></div>
                                <div class="assessment__due"><a href="#modal-filter" data-toggle="modal">Due <i class="fa fa-caret-up"></i></a></div>
                                <div class="assessment__progress"><a href="#modal-filter" data-toggle="modal">Progress</a></div>
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
                                        <li><span class="meta-type">Employee Assessment</span></li>
                                        <li class="meta-hide-lg"><span class="meta-label">State:</span><span class="meta-value"><?= $assessment['state'] ?></span></li>
                                        <li class="meta-hide-lg"><span class="meta-label">Due:</span><span class="meta-value"><?= $assessment['date'] ?></span></li>
                                    </ul>
                                </div>
                                <div class="assessment__employee"><?= $assessment['employee'] ?></div>
                                <div class="assessment__state"><?= $assessment['state'] ?></div>
                                <div class="assessment__due"><?= $assessment['date'] ?></div>
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
                                                <div class="progress">
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
                                            <li class="divider"></li>
                                            <li><a href="#">Print PDF</a></li>
                                            <li><a href="#" class="js-revert">Revert to Previous State</a></li>
                                            <li><a href="#" class="js-reset">Reset</a></li>
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
                                    'html' => '
                                       <div class="btn-group dropup">
                                        <a href="#tab-2" data-toggle="tab" class="btn btn-default hidden-xs">Group</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-caret-up"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-left">
                                            <li class="active"><a href="#tab-2" data-toggle="tab">Group by Assessment State</a></li>
                                            <li class=""><a href="#tab-3" data-toggle="tab">Group by Assessment Title</a></li>
                                            <li class="disabled"><a href="#tab-4" data-toggle="tab">Group by Employee Name</a></li>
                                             <li role="separator" class="divider"></li>
                                            <li class="disabled"><a href="#tab-1" data-toggle="tab">Ungroup</a></li>
                                        </ul>
                                    </div>
                                
                                        <a href="#modal-filter" class="btn btn-default " style="cursor:not-allowed" data-toggle="modal">Sort &amp; Filter</a>
                                    ',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>
                </div>

                <div class="tab-pane" id="tab-2">
                    <section class="section">
                          <header class="section-header">
                            <div class="row">
                                <div class="col-sm-9">
                                    <h2 class="section-header-title">Assessments <small>Showing 1-5 of 5</small></h2>
                                    <div class="tag-group">
                                        <a href="#modal-filter" class="tag tag--no-remove" data-toggle="modal">Sort: Due <span class="fa fa-caret-up"></span> | Assessment <span class="fa fa-caret-down"></span> <i class="fa fa-times"></i></a>
                                        <a href="#modal-filter" class="tag tag--no-remove" data-toggle="modal">Assignment: All <i class="fa fa-times"></i></a>
                                        <a href="#modal-filter" class="tag tag--no-remove" data-toggle="modal">State: All <i class="fa fa-times"></i></a>
                                        <a href="#tab-1" data-toggle="tab" class="tag" >Grouped by: State <i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="section-header-action hidden-xs">
                                        <div class="btn-group">
                                        <a href="#tab-2" data-toggle="tab" class="btn btn-default hidden-xs">Group</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="active"><a href="#tab-2" data-toggle="tab">Group by Assessment State</a></li>
                                            <li class=""><a href="#tab-3" data-toggle="tab">Group by Assessment Title</a></li>
                                            <li class="disabled"><a href="#tab-4" data-toggle="tab">Group by Employee Name</a></li>
                                             <li role="separator" class="divider"></li>
                                            <li class=""><a href="#tab-1" data-toggle="tab">Ungroup</a></li>
                                        </ul>
                                    </div>
                                
                                        <a href="#modal-filter" class="btn btn-default disabled" style="cursor:not-allowed" data-toggle="modal">Sort &amp; Filter</a>

                                    </div>
                                </div>
                            </div>
                        </header>

                        <?php

                           $assessments2_1 = array(
                            array(
                                'class' => ' assessment--attention',
                                'employee' => 'Juniper, Stephanie P.',
                                'assessment' => 'Nursing Skills Assessment',
                                'state' => '<a href="#" class="js-state-detail" data-actor="Rater Darcy L. Crane">Review<span class="assessment__state-description">Rater<br>Sign&nbsp;Off</span> <i class="fa fa-info-circle"></i></a>',
                                'progress' => '<div class="progress-bar progress-bar--submitted" style="width: 100%;">Submitted</div>',
                            ),
                            array(
                                'class' => ' assessment--stripe assessment--attention',
                                'employee' => 'Conner, Rosalyn F.',
                                'assessment' => 'Initial Nursing Competency Appraisal',
                                'state' => '<a href="#" class="js-state-detail" data-actor="Rater Darcy L. Crane">Review<span class="assessment__state-description">Rater<br>Sign&nbsp;Off</span> <i class="fa fa-info-circle"></i></a>',
                                'progress' => '<div class="progress-bar progress-bar--submitted" style="width: 100%;">Submitted</div>',
                            ),
                            array(
                                'class' => '',
                                'employee' => 'Montoya, Alice G.',
                                'assessment' => 'Nursing Skills Assessment',
                                'state' => '<a href="#" class="js-state-detail" data-actor="Rater Darcy L. Crane">Review<span class="assessment__state-description">Rater<br>Sign&nbsp;Off</span> <i class="fa fa-info-circle"></i></a>',
                                'progress' => '<div class="progress-bar" style="width: 30%;">30%</div>',
                            ),
                           
                           
                        );

                        $assessments2_2 = array(
                            array(
                                'class' => ' assessment--attention',
                                'employee' => 'Juniper, Stephanie P.',
                                'assessment' => 'Initial Nursing Competency Appraisal',
                                'state' => 'Assigned',
                                'progress' => '<div class="progress-bar progress-bar--submitted" style="width: 100%;">Submitted</div>',
                            ),
                        );

                         $assessments2_3 = array(
                            array(
                                'class' => ' assessment--attention',
                                'employee' => 'Juniper, Stephanie P.',
                                'assessment' => 'Initial Nursing Competency Appraisal',
                                'state' => 'Approval',
                                'progress' => '<div class="progress-bar progress-bar--submitted" style="width: 100%;">Submitted</div>',
                            ),
                        );

                        $assessments2_4 = array(
                            array(
                                'class' => ' assessment--attention',
                                'employee' => 'Juniper, Stephanie P.',
                                'assessment' => 'Initial Nursing Competency Appraisal',
                                'state' => 'Evaluate',
                                'progress' => '<div class="progress-bar progress-bar--submitted" style="width: 100%;">Submitted</div>',
                            ),
                        );

                        $assessments2_5 = array(
                            array(
                                'class' => ' assessment--attention',
                                'employee' => 'Juniper, Stephanie P.',
                                'assessment' => 'Initial Nursing Competency Appraisal',
                                'state' => 'Closed',
                                'progress' => '<div class="progress-bar progress-bar--submitted" style="width: 100%;">Submitted</div>',
                            ),
                        );

                        ?>

            <section class="section">
                <!--Review-->
                <div class="slat slat-callout slat-attention" >
                    <div class="slat-default">
                    <div class="slat-parent">
                        <div class="title">In Review State <span class="badge">3</span></div>
                        <ul class="meta">
                            
                            <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value"><span class="meta-callout-label">Due:</span>Jul 10, 2016</span></li>
                        </ul>
                        <div class="action action-multi">
                            <div class="btn-group">
                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Options <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Manage Rater &amp; Peers</a></li>
                                    <li><a href="#">Manage Dynamic Sections</a></li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="slat-nested">
                        <div class="collapse-group collapse">

                            <div class="assessment assessment--header">
                                <div class="assessment__summary">
                                   <div class="assessment__basics"><a href="#">Assessment <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__employee"><a href="#">Employee <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__state"><a href="#">State <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__due"><a href="#">Due <i class="fa fa-sort"></i></a></div>
                                    
                                    <div class="assessment__progress">Progress</div>
                                    <div class="assessment__actions"></div>
                                </div>
                            </div>

                            <?php foreach ($assessments2_1 as $assessment) { ?>
                            <div class="assessment<?= $assessment['class'] ?>">
                                <div class="assessment__summary">
                                    <div class="assessment__basics">
                                        <div class="assessment__title">
                                        <a href="assessment.php?assessment=competency-1&user=rater&state=5"><?= $assessment['assessment'] ?></a>
                                        </div>
                                            <ul class="meta">
                                        <li><span class="meta-type">Employee Assessment</span></li>
                                        <li class="meta-hide-lg"><span class="meta-label">State:</span><span class="meta-value"><a href="#" class="js-state-detail" data-actor="Employee Rosalyn F. Conner">Review <span class="assessment__state-description">Employee<br>Sign&nbsp;Off</span> <i class="fa fa-info-circle"></i></a></span></li>
                                        <li class="meta-hide-lg"><span class="meta-label">Due:</span><span class="meta-value">Aug 9, 2016</span></li>
                                    </ul>
                                       
                                    </div>
                                     <div class="assessment__employee">
                                        <?= $assessment['employee'] ?>
                                        </div>
                                    <div class="assessment__state"><?= $assessment['state'] ?></div>
                                    <div class="assessment__due">Dec 12, 2016</div>
                                    <div class="assessment__progress">
                                        <ul class="assessment__actors">
                                            
                                            <li class="assessment__actor" >
                                                <div class="assessment__actor__name">
                                                    <span>Rater:</span> Juniper, Stephanie P.
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 30%;">30%</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Employee:</span> <?= $assessment['employee'] ?>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <?= $assessment['progress'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Peers Submitted:</span>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 33%;">1 of 3</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="assessment__actions">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#">View Assessment</a></li>
                                                <li><a href="#modal-progress" data-toggle="modal">View Progress</a></li>
                                                <li><a href="#">Manage Rater &amp; Peers</a></li>
                                                <li><a href="#">Manage Dynamic Sections</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="slat-nested-nav">
                                <div class="visible-xs">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-left"></i></a>
                                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                                <div class="hidden-xs">
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle disabled" data-toggle="dropdown">Results 1-4 of 4 </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="active"><a href="#">10 per page</a></li>
                                            <li><a href="#">20 per page</a></li>
                                            <li><a href="#">50 per page</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-left"></i></a>
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <a href="#" class="collapse-toggle" data-toggle-text="Show assessments|Hide assessments">Show assessments</a>
                    </div>
                </div>
                <!--Assigned-->
                <div class="slat slat-callout">
                    <div class="slat-default">
                    <div class="slat-parent">
                        <div class="title">In Assigned State <span class="badge">1</span></div>
                        <ul class="meta">
                            
                            <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value"><span class="meta-callout-label">Due:</span>Sep 13, 2016</span></li>
                        </ul>
                        <div class="action action-multi">
                            <div class="btn-group">
                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Options <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Manage Rater &amp; Peers</a></li>
                                    <li><a href="#">Manage Dynamic Sections</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="slat-nested">
                        <div class="collapse-group collapse">

                            <div class="assessment assessment--header">
                                <div class="assessment__summary">
                                    <div class="assessment__basics"><a href="#">Assessment <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__employee"><a href="#">Employee <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__state"><a href="#">State <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__due"><a href="#">Due <i class="fa fa-sort"></i></a></div>
                                    
                                    <div class="assessment__progress">Progress</div>
                                    <div class="assessment__actions"></div>
                                </div>
                            </div>

                            <?php foreach ($assessments2_2 as $assessment) { ?>
                            <div class="assessment<?= $assessment['class'] ?>">
                                <div class="assessment__summary">
                                    <div class="assessment__basics">
                                        <div class="assessment__title">
                                        <a href="assessment.php?assessment=competency-1&user=rater&state=5"><?= $assessment['assessment'] ?></a>
                                        </div>
                                            <ul class="meta">
                                        <li><span class="meta-type">Employee Assessment</span></li>
                                        <li class="meta-hide-lg"><span class="meta-label">State:</span><span class="meta-value"><?= $assessment['state'] ?></span></li>
                                        <li class="meta-hide-lg"><span class="meta-label">Due:</span><span class="meta-value">Aug 9, 2016</span></li>
                                    </ul>
                                       
                                    </div>
                                     <div class="assessment__employee">
                                        <?= $assessment['employee'] ?>
                                        </div>
                                    <div class="assessment__state"><?= $assessment['state'] ?></div>
                                    <div class="assessment__due">Dec 12, 2016</div>
                                    <div class="assessment__progress">
                                        <ul class="assessment__actors">
                                            
                                            <li class="assessment__actor" >
                                                <div class="assessment__actor__name">
                                                    <span>Rater:</span> Juniper, Stephanie P.
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 30%;">30%</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Employee:</span> <?= $assessment['employee'] ?>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <?= $assessment['progress'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Peers Submitted:</span>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 33%;">1 of 3</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="assessment__actions">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#">View Assessment</a></li>
                                                <li><a href="#modal-progress" data-toggle="modal">View Progress</a></li>
                                                <li><a href="#">Manage Rater &amp; Peers</a></li>
                                                <li><a href="#">Manage Dynamic Sections</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="slat-nested-nav">
                                <div class="visible-xs">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-left"></i></a>
                                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                                <div class="hidden-xs">
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle disabled" data-toggle="dropdown">Results 1-4 of 4 </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="active"><a href="#">10 per page</a></li>
                                            <li><a href="#">20 per page</a></li>
                                            <li><a href="#">50 per page</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-left"></i></a>
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <a href="#" class="collapse-toggle" data-toggle-text="Show assessments|Hide assessments">Show assessments</a>
                    </div>
                </div>
                <!--Approved-->
                <div class="slat slat-callout">
                    <div class="slat-default">
                    <div class="slat-parent">
                        <div class="title" >In Approval State <span class="badge">1</span></div>
                        <ul class="meta">
                           
                            <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value"><span class="meta-callout-label">Due:</span>Sep 28, 2016</span></li>
                        </ul>
                        <div class="action action-multi">
                            <div class="btn-group">
                                <a href="assessment.php?assessment=competency-1&user=rater&state=5" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Options <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Manage Rater &amp; Peers</a></li>
                                    <li><a href="#">Manage Dynamic Sections</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
    <div class="slat-nested">
                        <div class="collapse-group collapse">

                            <div class="assessment assessment--header">
                                <div class="assessment__summary">
                                    <div class="assessment__basics"><a href="#">Assessment <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__employee"><a href="#">Employee <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__state"><a href="#">State <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__due"><a href="#">Due <i class="fa fa-sort"></i></a></div>
                                    
                                    <div class="assessment__progress">Progress</div>
                                    <div class="assessment__actions"></div>
                                </div>
                            </div>

                            <?php foreach ($assessments2_3 as $assessment) { ?>
                            <div class="assessment<?= $assessment['class'] ?>">
                                <div class="assessment__summary">
                                    <div class="assessment__basics">
                                        <div class="assessment__title">
                                        <a href="assessment.php?assessment=competency-1&user=rater&state=5"><?= $assessment['assessment'] ?></a>
                                        </div>
                                            <ul class="meta">
                                        <li><span class="meta-type">Employee Assessment</span></li>
                                        <li class="meta-hide-lg"><span class="meta-label">State:</span><span class="meta-value"><?= $assessment['state'] ?></span></li>
                                        <li class="meta-hide-lg"><span class="meta-label">Due:</span><span class="meta-value">Aug 9, 2016</span></li>
                                    </ul>
                                       
                                    </div>
                                     <div class="assessment__employee">
                                        <?= $assessment['employee'] ?>
                                        </div>
                                    <div class="assessment__state"><?= $assessment['state'] ?></div>
                                    <div class="assessment__due">Dec 12, 2016</div>
                                    <div class="assessment__progress">
                                        <ul class="assessment__actors">
                                            
                                            <li class="assessment__actor" >
                                                <div class="assessment__actor__name">
                                                    <span>Rater:</span> Juniper, Stephanie P.
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 30%;">30%</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Employee:</span> <?= $assessment['employee'] ?>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <?= $assessment['progress'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Peers Submitted:</span>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 33%;">1 of 3</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="assessment__actions">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#">View Assessment</a></li>
                                                <li><a href="#modal-progress" data-toggle="modal">View Progress</a></li>
                                                <li><a href="#">Manage Rater &amp; Peers</a></li>
                                                <li><a href="#">Manage Dynamic Sections</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="slat-nested-nav">
                                <div class="visible-xs">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-left"></i></a>
                                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                                <div class="hidden-xs">
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle disabled" data-toggle="dropdown">Results 1-4 of 4 </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="active"><a href="#">10 per page</a></li>
                                            <li><a href="#">20 per page</a></li>
                                            <li><a href="#">50 per page</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-left"></i></a>
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <a href="#" class="collapse-toggle" data-toggle-text="Show assessments|Hide assessments">Show assessments</a>
                    </div>
                </div>
                 <!--Evaluate-->
                <div class="slat slat-callout">
                    <div class="slat-default">
                    <div class="slat-parent">
                        <div class="title" >In Evaluation State <span class="badge">1</span></div>
                        <ul class="meta">
                            
                            <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value"><span class="meta-callout-label">Due:</span>Oct 2, 2016</span></li>
                        </ul>
                        <div class="action action-multi">
                            <div class="btn-group">
                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Options <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Manage Rater &amp; Peers</a></li>
                                    <li><a href="#">Manage Dynamic Sections</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                  <div class="slat-nested">
                        <div class="collapse-group collapse">

                            <div class="assessment assessment--header">
                                <div class="assessment__summary">
                                   <div class="assessment__basics"><a href="#">Assessment <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__employee"><a href="#">Employee <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__state"><a href="#">State <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__due"><a href="#">Due <i class="fa fa-sort"></i></a></div>
                                    
                                    <div class="assessment__progress">Progress</div>
                                    <div class="assessment__actions"></div>
                                </div>
                            </div>

                            <?php foreach ($assessments4_2 as $assessment) { ?>
                            <div class="assessment<?= $assessment['class'] ?>">
                                <div class="assessment__summary">
                                    <div class="assessment__basics">
                                        <div class="assessment__title">
                                        <a href="assessment.php?assessment=competency-1&user=rater&state=5"><?= $assessment['assessment'] ?></a>
                                        </div>
                                            <ul class="meta">
                                        <li><span class="meta-type">Employee Assessment</span></li>
                                        <li class="meta-hide-lg"><span class="meta-label">State:</span><span class="meta-value"><?= $assessment['state'] ?></span></li>
                                        <li class="meta-hide-lg"><span class="meta-label">Due:</span><span class="meta-value">Aug 9, 2016</span></li>
                                    </ul>
                                       
                                    </div>
                                     <div class="assessment__employee">
                                        <?= $assessment['employee'] ?>
                                        </div>
                                    <div class="assessment__state"><?= $assessment['state'] ?></div>
                                    <div class="assessment__due">Dec 12, 2016</div>
                                    <div class="assessment__progress">
                                        <ul class="assessment__actors">
                                            
                                            <li class="assessment__actor" >
                                                <div class="assessment__actor__name">
                                                    <span>Rater:</span> Juniper, Stephanie P.
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 30%;">30%</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Employee:</span> <?= $assessment['employee'] ?>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <?= $assessment['progress'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Peers Submitted:</span>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 33%;">1 of 3</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="assessment__actions">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#">View Assessment</a></li>
                                                <li><a href="#modal-progress" data-toggle="modal">View Progress</a></li>
                                                <li><a href="#">Manage Rater &amp; Peers</a></li>
                                                <li><a href="#">Manage Dynamic Sections</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="slat-nested-nav">
                                <div class="visible-xs">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-left"></i></a>
                                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                                <div class="hidden-xs">
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle disabled" data-toggle="dropdown">Results 1-4 of 4 </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="active"><a href="#">10 per page</a></li>
                                            <li><a href="#">20 per page</a></li>
                                            <li><a href="#">50 per page</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-left"></i></a>
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <a href="#" class="collapse-toggle" data-toggle-text="Show assessments|Hide assessments">Show assessments</a>
                    </div>
                </div>
<!--Closed-->
  <div class="slat slat-callout">
                    <div class="slat-default">
                    <div class="slat-parent">
                        <div class="title" >In Closed State <span class="badge">1</span></div>
                        <ul class="meta">
                            
                            <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value"><span class="meta-callout-label">Due:</span>Oct 2, 2016</span></li>
                        </ul>
                        <div class="action action-multi">
                            <div class="btn-group">
                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Options <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Manage Rater &amp; Peers</a></li>
                                    <li><a href="#">Manage Dynamic Sections</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                  <div class="slat-nested">
                        <div class="collapse-group collapse">

                            <div class="assessment assessment--header">
                                <div class="assessment__summary">
                                   <div class="assessment__basics"><a href="#">Assessment <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__employee"><a href="#">Employee <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__state"><a href="#">State <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__due"><a href="#">Due <i class="fa fa-sort"></i></a></div>
                                    
                                    <div class="assessment__progress">Progress</div>
                                    <div class="assessment__actions"></div>
                                </div>
                            </div>

                            <?php foreach ($assessments2_5 as $assessment) { ?>
                            <div class="assessment<?= $assessment['class'] ?>">
                                <div class="assessment__summary">
                                    <div class="assessment__basics">
                                        <div class="assessment__title">
                                        <a href="assessment.php?assessment=competency-1&user=rater&state=5"><?= $assessment['assessment'] ?></a>
                                        </div>
                                            <ul class="meta">
                                        <li><span class="meta-type">Employee Assessment</span></li>
                                        <li class="meta-hide-lg"><span class="meta-label">State:</span><span class="meta-value"><?= $assessment['state'] ?></span></li>
                                        <li class="meta-hide-lg"><span class="meta-label">Due:</span><span class="meta-value">Aug 9, 2016</span></li>
                                    </ul>
                                       
                                    </div>
                                     <div class="assessment__employee">
                                        <?= $assessment['employee'] ?>
                                        </div>
                                    <div class="assessment__state"><?= $assessment['state'] ?></div>
                                    <div class="assessment__due">Dec 12, 2016</div>
                                    <div class="assessment__progress">
                                        <ul class="assessment__actors">
                                            
                                            <li class="assessment__actor" >
                                                <div class="assessment__actor__name">
                                                    <span>Rater:</span> Juniper, Stephanie P.
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 30%;">30%</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Employee:</span> <?= $assessment['employee'] ?>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <?= $assessment['progress'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Peers Submitted:</span>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 33%;">1 of 3</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="assessment__actions">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#">View Assessment</a></li>
                                                <li><a href="#modal-progress" data-toggle="modal">View Progress</a></li>
                                                <li><a href="#">Manage Rater &amp; Peers</a></li>
                                                <li><a href="#">Manage Dynamic Sections</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="slat-nested-nav">
                                <div class="visible-xs">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-left"></i></a>
                                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                                <div class="hidden-xs">
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle disabled" data-toggle="dropdown">Results 1-4 of 4 </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="active"><a href="#">10 per page</a></li>
                                            <li><a href="#">20 per page</a></li>
                                            <li><a href="#">50 per page</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-left"></i></a>
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <a href="#" class="collapse-toggle" data-toggle-text="Show assessments|Hide assessments">Show assessments</a>
                    </div>
                </div>
            </section>
                    </section>

                   

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'position' => 'left',
                                    'html' => '
                                             
                                        <div class="btn-group dropup">
                                        <a href="#tab-2" data-toggle="tab" class="btn btn-default hidden-xs">Group</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-caret-up"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-left">
                                            <li class="active"><a href="#tab-2" data-toggle="tab">Group by Assessment State</a></li>
                                            <li class=""><a href="#tab-3" data-toggle="tab">Group by Assessment Title</a></li>
                                            <li class="disabled"><a href="#tab-4" data-toggle="tab">Group by Employee Name</a></li>
                                             <li role="separator" class="divider"></li>
                                            <li class=""><a href="#tab-1" data-toggle="tab">Ungroup</a></li>
                                        </ul>
                                    </div>
                                
                                        <a href="#modal-filter" class="btn btn-default disabled" style="cursor:not-allowed" data-toggle="modal">Sort &amp; Filter</a>

                                    ',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>

                </div>
                  <div class="tab-pane" id="tab-3">
                    

                    <section class="section">
                          <header class="section-header">
                            <div class="row">
                                <div class="col-sm-9">
                                    <h2 class="section-header-title">Assessments <small>Showing 1-5 of 5</small></h2>
                                    <div class="tag-group">
                                        <a href="#modal-filter" class="tag tag--no-remove" data-toggle="modal">Sort: Due <span class="fa fa-caret-up"></span> | Assessment <span class="fa fa-caret-down"></span> <i class="fa fa-times"></i></a>
                                        <a href="#modal-filter" class="tag tag--no-remove" data-toggle="modal">Assignment: All <i class="fa fa-times"></i></a>
                                        <a href="#modal-filter" class="tag tag--no-remove" data-toggle="modal">State: All-Not Closed <i class="fa fa-times"></i></a>
                                        <a href="#tab-1" data-toggle="tab" class="tag" >Grouped by: Title <i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="section-header-action hidden-xs">
                                        <div class="btn-group">
                                        <a href="#tab-2" data-toggle="tab" class="btn btn-default hidden-xs">Group</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#tab-2" data-toggle="tab">Group by Assessment State</a></li>
                                            <li class="active"><a href="#tab-3" data-toggle="tab">Group by Assessment Title</a></li>
                                            <li class="disabled"><a href="#tab-4" data-toggle="tab">Group by Employee Name</a></li>
                                             <li role="separator" class="divider"></li>
                                            <li class=""><a href="#tab-1" data-toggle="tab">Ungroup</a></li>
                                        </ul>
                                    </div>
                                
                                        <a href="#modal-filter" class="btn btn-default disabled" style="cursor:not-allowed" data-toggle="modal">Sort &amp; Filter</a>

                                    </div>
                                </div>
                            </div>
                        </header>

                        <?php

                           $assessments1 = array(
                            array(
                                'class' => ' assessment--attention',
                                'employee' => 'Juniper, Stephanie P.',
                                'state' => '<a href="#" class="js-state-detail" data-actor="Rater Darcy L. Crane">Review<span class="assessment__state-description">Rater<br>Sign&nbsp;Off</span> <i class="fa fa-info-circle"></i></a>',
                                'progress' => '<div class="progress-bar progress-bar--submitted" style="width: 100%;">Submitted</div>',
                            ),
                            array(
                                'class' => ' assessment--stripe assessment--attention',
                                'employee' => 'Conner, Rosalyn F.',
                                'state' => '<a href="#" class="js-state-detail" data-actor="Rater Darcy L. Crane">Review<span class="assessment__state-description">Rater<br>Sign&nbsp;Off</span> <i class="fa fa-info-circle"></i></a>',
                                'progress' => '<div class="progress-bar progress-bar--submitted" style="width: 100%;">Submitted</div>',
                            ),
                            array(
                                'class' => '',
                                'employee' => 'Montoya, Alice G.',
                                'state' => 'Evaluate',
                                'progress' => '<div class="progress-bar" style="width: 30%;">30%</div>',
                            ),
                            array(
                                'class' => ' assessment--stripe',
                                'employee' => 'Park, Jennifer S.',
                                'state' => 'Evaluate',
                                'progress' => '<div class="progress-bar" style="width: 30%;">30%</div>',
                            ),
                           
                        );

                        $assessments2 = array(
                            array(
                                'class' => ' assessment--attention',
                                'employee' => 'Juniper, Stephanie P.',
                                'state' => 'Review',
                                'progress' => '<div class="progress-bar progress-bar--submitted" style="width: 100%;">Submitted</div>',
                            ),
                        );

                         $assessments3 = array(
                            array(
                                'class' => ' assessment--attention',
                                'employee' => 'Juniper, Stephanie P.',
                                'state' => 'Evaluate',
                                'progress' => '<div class="progress-bar progress-bar--submitted" style="width: 100%;">Submitted</div>',
                            ),
                        );

                        ?>

            <section class="section">
                <!--Initial Nursing Competency Appraisal-->
                <div class="slat slat-callout slat-attention" >
                    <div class="slat-default">
                    <div class="slat-parent">
                        <div class="title">Initial Nursing Competency Appraisal <span class="badge">4</span></div>
                        <ul class="meta">
                            <li><span class="meta-type">Employee Assessment</span></li>
                            <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value"><span class="meta-callout-label">Due:</span>Jul 10, 2016 <a href="#">First of 4 Due</a></span></li>
                        </ul>
                        <div class="action action-multi">
                            <div class="btn-group">
                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Options <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Manage Rater &amp; Peers</a></li>
                                    <li><a href="#">Manage Dynamic Sections</a></li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="slat-nested">
                        <div class="collapse-group collapse">

                            <div class="assessment assessment--header">
                                <div class="assessment__summary">
                                    <div class="assessment__basics"><a href="#">Employee <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__state"><a href="#">State <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__due"><a href="#">Due <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__progress">Progress</div>
                                    <div class="assessment__actions"></div>
                                </div>
                            </div>

                            <?php foreach ($assessments1 as $assessment) { ?>
                            <div class="assessment<?= $assessment['class'] ?>">
                                <div class="assessment__summary">
                                    <div class="assessment__basics">
                                        <div class="assessment__title">
                                            <a href="assessment.php?assessment=competency-1&user=rater&state=5"><?= $assessment['employee'] ?></a>
                                        </div>
                                        <ul class="meta">
                                            <li class="meta-hide-lg"><span class="meta-label">State:</span><span class="meta-value"><?= $assessment['state'] ?></span></li>
                                            <li class="meta-hide-lg"><span class="meta-label">Due:</span><span class="meta-value">Dec 16, 2016</span></li>
                                        </ul>
                                    </div>
                                    <div class="assessment__state"><?= $assessment['state'] ?></div>
                                    <div class="assessment__due">Dec 12, 2016</div>
                                    <div class="assessment__progress">
                                        <ul class="assessment__actors">
                                            
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Rater:</span> Juniper, Stephanie P.
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 30%;">30%</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Employee:</span> <?= $assessment['employee'] ?>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <?= $assessment['progress'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Peers Submitted:</span>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 33%;">1 of 3</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="assessment__actions">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#">View Assessment</a></li>
                                                <li><a href="#modal-progress" data-toggle="modal">View Progress</a></li>
                                                <li><a href="#">Manage Rater &amp; Peers</a></li>
                                                <li><a href="#">Manage Dynamic Sections</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="slat-nested-nav">
                                <div class="visible-xs">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-left"></i></a>
                                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                                <div class="hidden-xs">
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle disabled" data-toggle="dropdown">Results 1-4 of 4 </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="active"><a href="#">10 per page</a></li>
                                            <li><a href="#">20 per page</a></li>
                                            <li><a href="#">50 per page</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-left"></i></a>
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <a href="#" class="collapse-toggle" data-toggle-text="Show assessments|Hide assessments">Show assessments</a>
                    </div>
                </div>
                <!--Nursing Skills Assessment-->
                <div class="slat slat-callout">
                    <div class="slat-default">
                    <div class="slat-parent">
                        <div class="title" >Nursing Skills Assessment <span class="badge">1</span></div>
                        <ul class="meta">
                            <li><span class="meta-type">Employee Assessment</span></li>
                            <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value"><span class="meta-callout-label">Due:</span>Sep 13, 2016</span></li>
                        </ul>
                        <div class="action action-multi">
                            <div class="btn-group">
                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Options <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Manage Rater &amp; Peers</a></li>
                                    <li><a href="#">Manage Dynamic Sections</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="slat-nested">
                    <div class="collapse-group collapse">

                            <div class="assessment assessment--header">
                                <div class="assessment__summary">
                                    <div class="assessment__basics"><a href="#">Employee <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__state"><a href="#">State <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__due"><a href="#">Due <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__progress">Progress</div>
                                    <div class="assessment__actions"></div>
                                </div>
                            </div>

                            <?php foreach ($assessments2 as $assessment) { ?>
                            <div class="assessment<?= $assessment['class'] ?>">
                                <div class="assessment__summary">
                                    <div class="assessment__basics">
                                        <div class="assessment__title">
                                            <a href="assessment.php?assessment=competency-1&user=rater&state=5"><?= $assessment['employee'] ?></a>
                                        </div>
                                        <ul class="meta">
                                            <li class="meta-hide-lg"><span class="meta-label">State:</span><span class="meta-value"><?= $assessment['state'] ?></span></li>
                                            <li class="meta-hide-lg"><span class="meta-label">Due:</span><span class="meta-value">Dec 16, 2016</span></li>
                                        </ul>
                                    </div>
                                    <div class="assessment__state"><?= $assessment['state'] ?></div>
                                    <div class="assessment__due">Dec 12, 2016</div>
                                    <div class="assessment__progress">
                                        <ul class="assessment__actors">
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Employee:</span> <?= $assessment['employee'] ?>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <?= $assessment['progress'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Rater:</span> Juniper, Stephanie P.
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 30%;">30%</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Peers Complete:</span>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 33%;">1 of 3</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="assessment__actions">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#">View Assessment</a></li>
                                                <li><a href="#modal-progress" data-toggle="modal">View Progress</a></li>
                                                <li><a href="#">Manage Rater &amp; Peers</a></li>
                                                <li><a href="#">Manage Dynamic Sections</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="slat-nested-nav">
                                <div class="visible-xs">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-left"></i></a>
                                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                                <div class="hidden-xs">
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle disabled" data-toggle="dropdown">Results 1-1 of 1</button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="active"><a href="#">10 per page</a></li>
                                            <li><a href="#">20 per page</a></li>
                                            <li><a href="#">50 per page</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-left"></i></a>
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <a href="#" class="collapse-toggle" data-toggle-text="Show assessments|Hide assessments">Show assessments</a>
                    </div>
                </div>
                <!--Nursing Skills Assessment – Reflective/Development Plan 1 – Juniper, Stephanie-->
                <div class="slat slat-callout">
                    <div class="slat-default">
                    <div class="slat-parent">
                        <div class="title">Nursing Skills Assessment – Reflective/Development Plan <span class="badge">1</span></div>
                        <ul class="meta">
                            <li><span class="meta-type">Employee Assessment</span></li>
                            <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value"><span class="meta-callout-label">Due:</span>Sep 28, 2016</span></li>
                        </ul>
                        <div class="action action-multi">
                            <div class="btn-group">
                                <a href="assessment.php?assessment=competency-1&user=rater&state=5" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Options <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Manage Rater &amp; Peers</a></li>
                                    <li><a href="#">Manage Dynamic Sections</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="slat-nested">
                        <div class="collapse-group collapse">

                            <div class="assessment assessment--header">
                                <div class="assessment__summary">
                                    <div class="assessment__basics"><a href="#">Employee <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__state"><a href="#">State <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__due"><a href="#">Due <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__progress">Progress</div>
                                    <div class="assessment__actions"></div>
                                </div>
                            </div>

                            <?php foreach ($assessments3 as $assessment) { ?>
                            <div class="assessment<?= $assessment['class'] ?>">
                                <div class="assessment__summary">
                                    <div class="assessment__basics">
                                        <div class="assessment__title">
                                            <a href="#"><?= $assessment['employee'] ?></a>
                                        </div>
                                        <ul class="meta">
                                            <li class="meta-hide-lg"><span class="meta-label">State:</span><span class="meta-value"><?= $assessment['state'] ?></span></li>
                                            <li class="meta-hide-lg"><span class="meta-label">Due:</span><span class="meta-value">Dec 16, 2016</span></li>
                                        </ul>
                                    </div>
                                    <div class="assessment__state"><?= $assessment['state'] ?></div>
                                    <div class="assessment__due">Dec 12, 2016</div>
                                    <div class="assessment__progress">
                                        <ul class="assessment__actors">
                                        <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Rater:</span> Juniper, Stephanie P.
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 30%;">30%</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Employee:</span> <?= $assessment['employee'] ?>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <?= $assessment['progress'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Peers 
                                                    Submitted:</span>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 33%;">1 of 3</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="assessment__actions">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#">View Assessment</a></li>
                                                <li><a href="#modal-progress" data-toggle="modal">View Progress</a></li>
                                                <li><a href="#">Manage Rater &amp; Peers</a></li>
                                                <li><a href="#">Manage Dynamic Sections</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="slat-nested-nav">
                                <div class="visible-xs">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-left"></i></a>
                                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                                <div class="hidden-xs">
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle disabled" data-toggle="dropdown">Results 1-1 of 1</button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="active"><a href="#">10 per page</a></li>
                                            <li><a href="#">20 per page</a></li>
                                            <li><a href="#">50 per page</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-left"></i></a>
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <a href="#" class="collapse-toggle" data-toggle-text="Show assessments|Hide assessments">Show assessments</a>
                    </div>
                </div>
                 <!--Annual Performance Appraisal-->
                <div class="slat slat-callout">
                    <div class="slat-default">
                    <div class="slat-parent">
                        <div class="title">Annual Performance Appraisal <span class="badge">1</span></div>
                        <ul class="meta">
                            <li><span class="meta-type">Employee Assessment</span></li>
                            <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value"><span class="meta-callout-label">Due:</span>Oct 2, 2016</span></li>
                        </ul>
                        <div class="action action-multi">
                            <div class="btn-group">
                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Options <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Manage Rater &amp; Peers</a></li>
                                    <li><a href="#">Manage Dynamic Sections</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="slat-nested">
                        <div class="collapse-group collapse">

                            <div class="assessment assessment--header">
                                <div class="assessment__summary">
                                    <div class="assessment__basics"><a href="#">Employee <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__state"><a href="#">State <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__due"><a href="#">Due <i class="fa fa-sort"></i></a></div>
                                    <div class="assessment__progress">Progress</div>
                                    <div class="assessment__actions"></div>
                                </div>
                            </div>

                            <?php foreach ($assessments3 as $assessment) { ?>
                            <div class="assessment<?= $assessment['class'] ?>">
                                <div class="assessment__summary">
                                    <div class="assessment__basics">
                                        <div class="assessment__title">
                                            <a href="#"><?= $assessment['employee'] ?></a>
                                        </div>
                                        <ul class="meta">
                                            <li class="meta-hide-lg"><span class="meta-label">State:</span><span class="meta-value"><?= $assessment['state'] ?></span></li>
                                            <li class="meta-hide-lg"><span class="meta-label">Due:</span><span class="meta-value">Dec 16, 2016</span></li>
                                        </ul>
                                    </div>
                                    <div class="assessment__state"><?= $assessment['state'] ?></div>
                                    <div class="assessment__due">Dec 12, 2016</div>
                                    <div class="assessment__progress">
                                        <ul class="assessment__actors">
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Employee:</span> <?= $assessment['employee'] ?>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <?= $assessment['progress'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Rater:</span> Juniper, Stephanie P.
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 30%;">30%</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name">
                                                    <span>Peers Complete:</span>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 33%;">1 of 3</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="assessment__actions">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#">View Assessment</a></li>
                                                <li><a href="#modal-progress" data-toggle="modal">View Progress</a></li>
                                                <li><a href="#">Manage Rater &amp; Peers</a></li>
                                                <li><a href="#">Manage Dynamic Sections</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="slat-nested-nav">
                                <div class="visible-xs">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-left"></i></a>
                                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                                <div class="hidden-xs">
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle disabled" data-toggle="dropdown">Results 1-1 of 1</button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="active"><a href="#">10 per page</a></li>
                                            <li><a href="#">20 per page</a></li>
                                            <li><a href="#">50 per page</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-left"></i></a>
                                        <a href="#" class="btn btn-default btn-sm disabled"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <a href="#" class="collapse-toggle" data-toggle-text="Show assessments|Hide assessments">Show assessments</a>
                    </div>
                </div>

            </section>
                    </section>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'position' => 'left',
                                    'html' => '
                                         
                                        <div class="btn-group dropup">
                                        <a href="#tab-2" data-toggle="tab" class="btn btn-default hidden-xs">Group</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-caret-up"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-left">
                                            <li><a href="#tab-2" data-toggle="tab">Group by Assessment State</a></li>
                                            <li class="active"><a href="#tab-3" data-toggle="tab">Group by Assessment Title</a></li>
                                            <li class="disabled"><a href="#tab-4" data-toggle="tab">Group by Employee Name</a></li>
                                             <li role="separator" class="divider"></li>
                                            <li class=""><a href="#tab-1" data-toggle="tab">Ungroup</a></li>
                                        </ul>
                                    </div>
                                
                                        <a href="#modal-filter" class="btn btn-default disabled" style="cursor:not-allowed" data-toggle="modal">Sort &amp; Filter</a>

                                   
                                    ',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>

                </div>
            </div>
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
                                        <option selected data-directions="Oldest to Newest|Newest to Oldest">Due</option>
                                        <option data-directions="Assessments A - Z|Assessments Z - A">Assessment</option>
                                        <option data-directions="States Descending|States Ascending">State</option>
                                        <option data-directions="Names A - Z|Names Z - A">Employee Name</option>
                                        <option data-directions="Most to Least Complete|Least to Most Complete">Employee Progress</option>
                                        <option data-directions="Names A - Z|Names Z - A">Rater Name</option>
                                        <option data-directions="Most to Least Complete|Least to Most Complete">Rater Progress</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" id="sort-direction-1">
                                        <option selected>Oldest to Newest</option>
                                        <option>Newest to Oldest</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <label class="control-label">Second <small>Optional</small></label>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control js-sort js-sort-secondary" data-target="sort-direction-2">
                                        <option data-directions="None">None</option>
                                        <option data-directions="Oldest to Newest|Newest to Oldest">Due</option>
                                        <option selected data-directions="Assessments A - Z|Assessments Z - A">Assessment</option>
                                        <option data-directions="States Descending|States Ascending">State</option>
                                        <option data-directions="Names A - Z|Names Z - A">Employee Name</option>
                                        <option data-directions="Most to Least Complete|Least to Most Complete">Employee Progress</option>
                                        <option data-directions="Names A - Z|Names Z - A">Rater Name</option>
                                        <option data-directions="Most to Least Complete|Least to Most Complete">Rater Progress</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" id="sort-direction-2">
                                        <option selected>Assessments A - Z</option>
                                        <option>Assessments Z - A</option>
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
                        <select class="form-control">
                            <option selected>All</option>
                            <option>Employee</option>
                            <option>Approval</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Assignment</label>
                        <select class="form-control">
                            <option selected>All</option>
                            <option>All Assigned</option>
                            <option>Not Assigned</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Assessment</label>
                        <select class="form-control control-select2">
                            <option selected>Initial Nursing Competency Appraisal</option>
                            <option>Nursing Skills Assessment – Reflective Plan 1 – Juniper, Stephanie</option>
                            <option>Annual Performance Appraisal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">State</label>
                        <select class="form-control">
                            <option>All</option>
                            <option selected>All-Not Closed</option>
                            <option>Assigned</option>
                            <option>Evaluate</option>
                            <option>Review</option>
                            <option>Approval</option>
                            <option>Closed</option>
                        </select>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Apply</button>
                <button class="btn btn-default" data-dismiss="modal">Reset Filters</button>
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-groups" class="modal fade" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Sort &amp; Group Assessments</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <div class="form-group">
                        <label class="control-label">Sort</label>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control js-sort js-sort-primary" data-target="sort-direction-3">
                                        <option data-directions="Most to Least|Least to Most">Count</option>
                                        <option data-directions="Assessments A - Z|Assessments Z - A">Assessment</option>
                                        <option data-directions="States Descending|States Ascending">State</option>
                                        <option selected data-directions="Oldest to Newest|Newest to Oldest">Due</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" id="sort-direction-3">
                                        <option selected>Oldest to Newest</option>
                                        <option>Newest to Oldest</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Group</label>
                        <select class="form-control">
                            <option selected>Assessment</option>
                            <option>State</option>
                        </select>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Apply</button>
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


<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $(".dashboard-stat2").click(function(){
            document.location.href = "assessment-overview-grouped-button-5.php";
        })
        $(".slat-parent").click(function(e){
            
            $(this).parent().parent().find(".collapse-toggle").click();
            e.stopPropagation();
        });
        $(".slat-parent").delegate('a', 'click', function(e){ 
            e.stopImmediatePropagation();
            e.preventDefault();
            $(this).dropdown();
            
             });
           
         // Javascript to enable link to tab
        var url = document.location.toString();
        if (url.match('#')) {
            $('a[href="#' + url.split('#')[1] + '"]').tab('show');
        } 

        // Change hash for page-reload
        $('a').on('shown.bs.tab', function (e) {
            //window.location.hash = e.target.hash;
        });

        //Unselect the group by button when change tab
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            var target = $(e.target).attr("href");
            $(".btn-group li").removeClass("active");
        });

        $('.js-sort').on('change',function(){
            var $target = $('#' + $(this).attr('data-target'));
            var directions = $(this).find('option:selected').attr('data-directions').split('|');
            var html = '';

            $(directions).each(function(index){
                html += '<option>'+directions[index]+'</option>';
            });
            $target.html(html);
        });

        $('.js-sort-primary').on('change',function(){
            var primary = $(this).find('option:selected').text();

            $('.js-sort-secondary option').show();

            if (  $('.js-sort-secondary').val() === primary ) {
                $('.js-sort-secondary').val('None').change();
            }

            $('.js-sort-secondary option').each(function(){
                if ( $(this).text() === primary ) {
                    $(this).hide();
                }
            });
        });

        $('.js-state-detail').on('click',function(){
            var name = $(this).attr('data-actor');
            var $modal = $('#modal-state-detail');
            var $body = $modal.find('.modal-body');
            $body.html('Waiting on ' + name + ' to sign off');
            $modal.modal('show');
        });

        $('.js-progress').on('click',function(){
            var $modal = $('#modal-progress');
            var id = $(this).attr('data-id');
            var html = '';
            var data = [
                {
                    'assessment' : 'Competency Appraisal',
                    'progress' : [
                        ['Rater','Crane, Darcy L.','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Employee','Conner, Rosalyn F.','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Peer','Peer 1','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Peer','Peer 2','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Peer','Peer 3','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>']
                    ]
                },
                {
                    'assessment' : 'Competency Appraisal',
                    'progress' : [
                        ['Rater','Crane, Darcy L.','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Employee','Juniper, Stephanie P.','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Peer','Peer 1','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Peer','Peer 2','Not Yet Started'],
                        ['Peer','Peer 3','Not Yet Started']
                    ]
                },
                {
                    'assessment' : 'Competency Appraisal',
                    'progress' : [
                        ['Rater','Crane, Darcy L.','<div class="progress-bar" style="width:43%;">43%</div>'],
                        ['Employee','Montoya, Alice G.','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Peer','Peer 1','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Peer','Peer 2','Not Yet Started'],
                        ['Peer','Peer 3','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>']
                    ]
                },
                {
                    'assessment' : 'Competency Appraisal',
                    'progress' : [
                        ['Rater','Crane, Darcy L.','Not Yet Started'],
                        ['Employee','Park, Jennifer S.','<div class="progress-bar" style="width:43%;">43%</div>'],
                        ['Peer','Peer 1','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Peer','Peer 2','Not Yet Started'],
                        ['Peer','Peer 3','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>']
                    ]
                },
                {
                    'assessment' : 'Performance Appraisal',
                    'progress' : [
                        ['Rater','Crane, Darcy L.','Not Yet Started'],
                        ['Employee','Juniper, Stephanie P.','Not Yet Started'],
                        ['Peer','Peer 1','Not Yet Started'],
                        ['Peer','Peer 2','Not Yet Started'],
                        ['Peer','Peer 3','Not Yet Started']
                    ]
                }
            ];



            $(data[id]['progress']).each(function(){
                html += '<tr>';
                html += '<td class="modal-progress__role">' + this[0] + '</td>';
                html += '<td class="modal-progress__name">' + this[1] + '</td>';
                html += '<td class="modal-progress__progress"><div class="progress">' + this[2] + '</div></td>'
                html += '</tr>';
            });

            $modal.find('.modal-title').text(data[id]['assessment']);
            $modal.find('.modal-progress__table tbody').html(html);
            $modal.modal('show');

        });

        $('.js-revert').click(function(e){
            e.preventDefault();
            HealthStream.utilities.interrupt({
                type: 'failure',
                title: 'You are about revert this assessment',
                text: '<p>Reverting an assessment from the Review state to the Evaluate state allows:</p><ul><li>Configuration of a new Reflective Plan</li><li>Modifications to the Reflective Plan configuration, if one was already created</li><li>The employee and peer(s) to submit their ratings, if they have not already done so</li></ul><p>Reverting this assessment to the Evaluate state will</p><ul><li>Delete any Sign Off(s) and Sign Off comments</li><li>Delete the Reflective Plan, if one was created</li><li>Delete any Approval(s) and Approval Comment(s)</li><li>Require movement through the Approval process again, if appropriate</li></ul>',
                actions: [
                    {
                        type: 'danger',
                        label: 'Yes, Revert this Assessment'
                    },
                    {
                        label: 'Cancel'
                    }
                ]
            });
        });

        $('.js-reset').click(function(e){
            e.preventDefault();
            HealthStream.utilities.interrupt({
                type: 'failure',
                title: 'You are about to reset this assessment',
                text: '<p>Resetting the assessment will:</p><ul><li>Delete all ratings, comments, goals, and associated documents</li><li>Remove alternate rater and peer(s)</li></ul>',
                actions: [
                    {
                        type: 'danger',
                        label: 'Yes, Reset this Assessment'
                    },
                    {
                        label: 'Cancel'
                    }
                ]
            });
        });
    });
</script>
<?= createSiteEnd(); ?>