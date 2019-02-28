<?php

include "includes/helpers/helpers.php";
include "includes/data/assessments-overview.php";

$todopage = (!empty($_GET['todo']))?$_GET['todo']:'todo-grouped-manager-peers.php';

$patterns['start']['title'] = 'Assessment Rater Overview';
$patterns['header'] = array(
    'classes' => array('site-header--assessments'),
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">',
    'mainNav' => '
        <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
        <li class="{active=todo}"><a href="/'.$todopage.'"">To Do</a></li>
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
        <li class="{active=raters}"><a href="/assessment-overview-summary.php?todo='.$todopage.'">Raters</a></li>
        <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'raters',
);
$patterns['focus']['title'] = 'Assessment Rater Overview';

/* grouping structure */
$groupings = array(
    'state' => array(
        'evaluate' => array(0,0),
        'approval' => array(0,0),
        'review' => array(0,0),
    ),
    'employee' => array(),
    'title' => array(),
    'actionable' => array(),
);
$numberOfActionItems = 0;
$numberOfAssessments = 0;
/* loop and tally */
foreach ($assessments as $assessment) {

    /* count state groupings (total,actionable) */
    $groupings['state'][$assessment['data-state']][0]++;
    if ( $assessment['actionable'] ) {
        $groupings['state'][$assessment['data-state']][1]++;
    }

    /* count employee groupings (total,actionable) */
    if ( empty($groupings['employee'][$assessment['employee']]) ) {
        $groupings['employee'][$assessment['employee']] = array(0,0,$assessment['employee_image'],$assessment['empid']);
    }
    $groupings['employee'][$assessment['employee']][0]++;
    if ( $assessment['actionable'] ) {
        $groupings['employee'][$assessment['employee']][1]++;
    }

    /* count title groupings (total,actionable) */
    if ( empty($groupings['title'][$assessment['title']]) ) {
        $groupings['title'][$assessment['title']] = array(0,0,$assessment['title-id'],$assessment['title']);
    }
    $groupings['title'][$assessment['title']][0]++;
    if ( $assessment['actionable'] ) {
        $groupings['title'][$assessment['title']][1]++;
    }

    if($assessment['actionable']) {
        $numberOfActionItems++;
    }
    $numberOfAssessments++;
}

/* sort array alphabetically */
ksort($groupings['employee']);
ksort($groupings['title']);

function makeGroupingBox($type,$title,$id=0,$total,$actionable=false,$image=false){
    $html = '<div class="assessment-group assessment-group--'.$type.'" data-id="'.$id.'" >';
    $html .= '<div class="assessment-group__box" data-equalize="assessment-group-'.$type.'">';
    if ( $image ) {
       $html .= '<div class="assessment-group__image"><div class="assessment-group__image-holder"><img src="'.$image.'"></div></div>';
    }
    $html .= '<div class="assessment-group__title">'.$title.'</div>';
    $html .= '<div class="assessment-group__total">'.$total.'</div>';

    $html .= '</div>';

    if ( $actionable ) {
        $html .= '<div class="assessment-group__actionable">'.$actionable.'</div>';
    }

    $html .= '</div>';

    return $html;
}

$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Total Assessments:',
        'value' =>  $numberOfAssessments
    ),
    array(
        'label' => 'Action Items:',
        'value' =>  $numberOfActionItems,
    ),
);


$legend = '<small>Click <i class="fa fa-circle text-accent"></i> on each group to see action items</small>';

$click = (!empty($_GET['click']))?$_GET['click']:'';
$titleId = (!empty($_GET['titleid']))?$_GET['titleid']:0;



?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<style>
    .assessment {
        position: relative;
    }
    .assessment-groups {
        margin: 0 -10px;
    }
    .assessment-groups:after {
        content: "";
        display: table;
        clear: both;
    }
    .assessment-group {
        position: relative;
        padding: 10px;
        cursor: pointer;
    }
    @media screen and (min-width:768px){
        .assessment-group--state {
            float: left;
            width: 33.3333%;
        }
       }
    @media screen and (min-width:960px){
        .assessment-group--employee {
            float: left;
            width: 33.3333%;
        }
    }
    @media screen and (min-width:768px) and (max-width:959px){
        .assessment-group--employee {
            float: left;
            width: 50%;
        }
    }
    @media screen and (min-width:1200px){
        .assessment-group--title {
            float: left;
            width: 50%;
        }
    }
    .assessment-group__box {
        display: table;
        width: 100%;
        border: 1px solid #ccc;
        background: #f3f3f3;
        vertical-align: middle;
        transition: all 200ms ease;
    }
    .assessment-group__box:hover {
        background: #e3e3e3;
    }
    .assessment-group__image {
        display: table-cell;
        vertical-align: middle;
        padding: 10px 0 10px 10px;
        width: 60px;
    }
    .assessment-group__image-holder {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        overflow: hidden;
    }
    .assessment-group__image img {
        width: 100%;
        height: 100%;
    }
    .assessment-group__title {
        display: table-cell;
        font-size: 16px;
        padding: 10px;
        vertical-align: middle;
    }
    .assessment-group__total {
        display: table-cell;
        width: 1%;
        white-space: nowrap;
        font-size: 18px;
        padding: 10px 25px 10px 25px;
        vertical-align: middle;
        text-align: right;
        border-left: 1px dotted #ccc;
    }
    .assessment-group__actionable {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 30px;
        height: 30px;
        padding: 0 7px;
        background: #fc7b00;
        color: #fff;
        line-height: 30px;
        font-weight: 600;
        font-size: 13px;
        text-align: center;
        border-radius: 15px;
        cursor: pointer;
         transition: all 200ms ease;
    }
     .assessment-group__actionable:hover {
        transform: scale(1.2);
        box-shadow: 0 0 3px rgba(0,0,0,.2);
    }
   .modal-checkbox {
       margin-left: -50px;
   }
    .text-accent {
        color: #fc7b00;
   }
     /* renamed flag classes to follow slat conventions and allow flags on non-attention slats */
    .assessment .flag {
        display: none;
    }
    .assessment-flag {
       /* padding: 15px 10px; */
    }
    .assessment-flag .flag {
        display: block;
        position: absolute;
        top: -1px;
        left: -3px;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 30px 30px 0 0;
        border-color: #FC7B00 transparent transparent transparent;
        z-index: 0;
    }
    .assessment-flag .flag i {
        display: block;
        position: absolute;
        top: -27px;
        left: 4px;
        font-size: 12px;
        color: #fff;
        text-shadow: 1px 1px 0 rgba(0,0,0,.3);
    }
</style>

<style>
    .assessment__state-description:before {
        content: '\A';
        white-space: pre;
    }
</style>

<div class="layout layout-search">
    <div class="container">
        <section class="section section-main section-box">
         <?php

                $focusNav = array(
                    'tabs' => array(
                        array(
                            'active' => true,
                            'id' => 'summary',
                            'label' => 'Summary',
                        ),
                        array(
                            'id' => 'details',
                            'label' => 'Details',
                        ),
                      
                    ),
                );
                echo createFocusNav($focusNav);

            ?>
            <div class="tab-content">
                <div class="tab-pane" id="summary">
                    <section class="section">
                        <header class="section-header">
                           <h2 class="section-header-title">Assessments Summary  <?= $legend ?></h2>
                        </header>

                        <section class="section">
                            <h3 class="assessment-groups__title">Assessment State</h3>
                            <div class="assessment-groups">
                                <?php echo makeGroupingBox('state','Evaluate',0,$groupings['state']['evaluate'][0],$groupings['state']['evaluate'][1]); ?>
                                <?php echo makeGroupingBox('state','Approval',0,$groupings['state']['approval'][0],$groupings['state']['approval'][1]); ?>
                                <?php echo makeGroupingBox('state','Review',0,$groupings['state']['review'][0],$groupings['state']['review'][1]); ?>
                            </div>
                        </section>

                        <section class="section">
                            <h3 class="assessment-groups__title">Employee</h3>
                            <div class="assessment-groups">
                                <?php
                                    foreach ( $groupings['employee'] as $key => $value ) {
                                        echo makeGroupingBox('employee',$key,$value[3],$value[0],$value[1],$value[2]);
                                    }
                                ?>
                            </div>
                        </section>

                        <section class="section">
                            <h3 class="assessment-groups__title">Assessment Name</h3>
                            <div class="assessment-groups">
                                <?php
                                    foreach ( $groupings['title'] as $key => $value ) {
                                        echo makeGroupingBox('title',$key,$value[2],$value[0],$value[1]);
                                    }
                                ?>
                            </div>
                        </section>
                </section>
                </div>
                <div class="tab-pane" id="details">
                    <section class="section">
                        <header class="section-header">
                            <div class="row">
                                <div class="col-sm-9">
                                    <h2 class="section-header-title">Assessments <small>Showing 1-<span class="results-count"></span> of <span class="results-count"></span></small></h2>
                                    <div class="tag-group"> 
                                        <a href="#modal-filter" class="tag tag--no-remove tag-sort" data-toggle="modal">
                                            Sort:
                                            <span class="tag-sort-1-text tag-value">Due <span class="fa fa-caret-up"></span></span> |
                                            <span class="tag-sort-2-text tag-value">Assessment <span class="fa fa-caret-down"></span></span><i class="fa fa-times"></i>
                                        </a> 
                                        <a href="#modal-filter" class="tag tag--no-remove tag-filter-1" data-toggle="modal">
                                            Assignment: 
                                            <span class="tag-filter-1-text tag-value">All</span> <i class="fa fa-times"></i>
                                        </a> 
                                        <a href="#modal-filter" class="tag tag--no-remove tag-filter-2" data-toggle="modal">
                                            State: 
                                            <span class="tag-filter-2-text tag-value">All-Not Closed</span> <i class="fa fa-times"></i>
                                        </a> 
                                        <a href="#modal-filter" class="tag tag--no-remove tag-filter-3" data-toggle="modal">
                                            Assessment Title: 
                                            <span class="tag-filter-3-text tag-value">All</span> <i class="fa fa-times"></i>
                                        </a> 
                                        <a href="#modal-filter" class="tag tag--no-remove tag-filter-4" data-toggle="modal">
                                            Employee: 
                                            <span class="tag-filter-4-text tag-value">All</span> <i class="fa fa-times"></i>
                                        </a> 
                                        <a href="#modal-filter" class="tag tag--no-remove tag-filter-4" data-toggle="modal">
                                            Actionable Only: 
                                            <span class="tag-filter-5-text tag-value">No</span> <i class="fa fa-times"></i>
                                        </a> 
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="section-header-action hidden-xs">
                                        <div class="action action-split">
                                            <div class="btn-group"> <a href="#modal-filter" class="btn btn-default btn-sm hidden-xs" data-toggle="modal">Sort &amp; Filter</a>
                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-caret-down"></i> </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#modal-filter" data-toggle="modal">Sort &amp; Filter</a></li>
                                                    <li><a href="#" class="reset-filters">Reset Filters</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                       
                        <div class="assessment assessment--header">
                            <div class="assessment__summary">
                                <div class="assessment__basics sort sort-assessment" data-sortdir="asc"> <a href="#">Assessment<i class="fa sortdir fa-caret-down"></i></a></div>
                                <div class="assessment__employee sort sort-employee" data-sortdir="desc"> <a href="#">Employee</a></div>
                                <div class="assessment__state sort sort-state" data-sortdir="desc"> <a href="#">State</a></div>
                                <div class="assessment__due sort sort-due" data-sortdir="desc"> <a href="#">Due<i class="fa sortdir fa-caret-up"></i></a></div>
                                <div class="assessment__progress sort-progress" data-sortdir="desc">Progress</div>
                                <div class="assessment__actions"></div>
                            </div>
                        </div>
                        <?php foreach ($assessments as $assessment) { ?>
                            <div class="assessment assessmentdata <?= $assessment['class'] ?>
                             <?php if ($assessment['actionable'] == true) { ?>
                                 assessment-flag 
                            <?php } ?>
                            " 
                            data-state="<?= $assessment['data-state'] ?>" 
                            data-titleid="<?= $assessment['title-id'] ?>" 
                            data-empid="<?= $assessment['empid'] ?>"
                            data-actionable="<?= $assessment['actionable'] ?>"
                            data-employee-progress="<?= $assessment['data-employee-progress'] ?>">
                             <?php if ($assessment['actionable'] == true) { ?>
                                <div class="flag"><i class="fa fa-flag"></i></div>
                            <?php } ?>
                                <div class="assessment__summary">
                                    <div class="assessment__basics">
                                        <div class="assessment__title">
                                            <a href="<?= $assessment['url'] ?>">
                                                <?= $assessment['title'] ?><span> - <?= $assessment['employee'] ?></span></a>
                                        </div>
                                        <ul class="meta">
                                            <li><span class="meta-type">Employee Assessment</span></li>
                                            <li class="meta-hide-lg"><span class="meta-label">State:</span><span class="meta-value"><?= $assessment['state'] ?></span></li>
                                            <li class="meta-hide-lg"><span class="meta-label">Due:</span><span class="meta-value"><?= $assessment['date'] ?></span></li>
                                        </ul>
                                    </div>
                                    <div class="assessment__employee">
                                        <?= $assessment['employee'] ?>
                                    </div>
                                    <div class="assessment__state" data-state="<?= $assessment['data-state'] ?>">
                                        <?= $assessment['state'] ?>
                                         <span class="data-state collapse"><?= $assessment['data-state'] ?></span>
                                    </div>
                                    <div class="assessment__due" data-date="<?= $assessment['data-date'] ?>">
                                        <?= $assessment['date'] ?>
                                        <span class="data-date collapse"><?= $assessment['data-date'] ?></span>
                                    </div>
                                    <div class="assessment__progress">
                                        <ul class="assessment__actors">
                                            <li class="assessment__actor">
                                                <div class="assessment__actor__name"> <span>Rater:</span>
                                                    <span class="rater-name"><?= $assessment['rater'] ?></span>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <?= $assessment['rater_progress'] ?>
                                                    </div>
                                                    <div class="collapse data-rater-progress">
                                                        <?= $assessment['data-rater-progress'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="assessment__actor assessment__actor_employee">
                                                <div class="assessment__actor__name"> <span>Employee:</span>
                                                    <?= $assessment['employee'] ?>
                                                </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress">
                                                        <?= $assessment['employee_progress'] ?>
                                                    </div>
                                                    <div class="collapse data-employee-progress">
                                                        <?= $assessment['data-employee-progress'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="assessment__actor assessment__actor_peers">
                                                <div class="assessment__actor__name"> <span>Peers Submitted:</span> </div>
                                                <div class="assessment__actor__progress">
                                                    <div class="progress progress-peer">
                                                        <?= $assessment['peers_progress'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="assessment__actions">
                                        <div class="btn-group"> <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
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
                                    <div class="assessment__assignedto" style="display:none;">
                                        <?= $assessment['assignedto'] ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        
                    </section>
                     <div class="slat no-assessments">
                                <div class="slat-message">
                                    <h3>There are no items that match the selected filters.</h3>
                                </div>
                            </div>
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
                                        <li><a href="#" class="reset-filters">Reset Filters</a></li>
                                    </ul>
                                </div>
                            </div>
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
<div id="modal-filter" class="modal fade" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Sort &amp; Filter Assessments</h4> </div>
            <div class="modal-body">
                <section class="section">
                    <h3 class="page-header">Sort</h3>
                    <div class="form-group">
                        <label class="control-label">First</label>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control js-sort js-sort-primary" data-target="sort-direction-1">
                                        <option value="due" selected data-directions="Newest to Oldest|Oldest to Newest">Due</option>
                                        <option value="assessment" data-directions="Assessments A - Z|Assessments Z - A">Assessment</option>
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
                                    <select class="form-control" id="sort-direction-1">
                                        <option value="desc">Newest to Oldest</option>
                                        <option selected value="asc">Oldest to Newest</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <label class="control-label">Second <small>Optional</small></label>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control js-sort js-sort-secondary" data-target="sort-direction-2">
                                        <option value="none" data-directions="None|None">None</option>
                                        <option value="due" data-directions="Newest to Oldest|Oldest to Newest">Due</option>
                                        <option value="assessment" selected data-directions="Assessments A - Z|Assessments Z - A">Assessment</option>
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
                                    <select class="form-control" id="sort-direction-2">
                                        <option value="desc" selected>Assessments A - Z</option>
                                        <option value="asc">Assessments Z - A</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <h3 class="page-header">Filter</h3>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label class="control-label">Action Items Only?</label>
                        </div>
                        <div class="col-sm-8 modal-checkbox" >
                            <input type="checkbox" id="filter-actionable" />
                        </div>
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
                    <div class="form-group">
                        <label class="control-label">Assessment Title:</label>
                        <select class="form-control" id="filter-title">
                            <option value="all">All</option>
                                <?php foreach($groupings['title'] as $key => $value) { ?>
                                    <option value="<?= $value['2'] ?>"><?= $key ?></option>
                                <?php } ?>
                        </select>
                    </div>
                        <div class="form-group">
                        <label class="control-label">Employee Name:</label>
                        <select class="form-control" id="filter-employee">
                            <option value="all">All</option>
                                 <?php foreach($groupings['employee'] as $key => $value) { ?>
                                    <option value="<?= $value['3'] ?>"><?= $key ?></option>
                                <?php } ?>
                        </select>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal" id="apply-sort-filter-button">Apply</button>
                <button class="btn btn-default reset-filters" data-dismiss="modal">Reset Filters</button>
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
    <input type="hidden" id="clickTitleId" value="<?= $titleId ?>"/>
    

</div>
<!-- /modal -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script src="/scripts/prototype.raters.summary.js"></script>
<script> 
$(function(){
    <?php if (!empty($_GET['growlTitle']) && !empty($_GET['growlText'])) { ?>
    // Show Growl on Load
    var growl = {};
    growl.title = "<?= $_GET['growlTitle']; ?>";
    growl.text = "<?= $_GET['growlText']; ?>";
    <?php echo (!empty($_GET['growlType']))?'growl.type = "'.$_GET['growlType'].'";'."\n":''; ?>
    <?php echo (!empty($_GET['growlSticky']))?'growl.sticky = '.$_GET['growlSticky'].';'."\n":''; ?>
    setTimeout(function () {
        HealthStream.utilities.growl(growl);
    }, 500);
    <?php } ?>
});
</script>
<?= createSiteEnd(); ?>
