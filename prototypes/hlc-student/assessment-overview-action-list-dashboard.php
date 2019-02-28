<?php
include "includes/helpers/helpers.php";

    include "includes/data/assessments-overview-future.sales.php";


$patterns['start']['title'] = 'Rater Overview';
$patterns['header'] = array(
    'classes' => array('site-header--assessments'),
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">',
    'mainNav' => '
        <li class="{active=dashboard}"><a href="/dashboard-manager-dev-ready.php">Dashboard</a></li>
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
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'raters',
);
$patterns['focus']['title'] = 'Rater Overview';

/* grouping structure */
$groupings = array(
    'state' => array(
        'evaluate' => array(0,0),
        'approval' => array(0,0),
        'review' => array(0,0),
        'signoff' => array(0,0),
        'closed' => array(0,0),
       // 'assigned' => array(0,0),
     //    'new' => array(0,0),
    ),
    'employee' => array(),
    'title' => array(),
    'actionable' => array(),
);
$numberOfActionItems = 0;
$numberOfAssessments = 0;

$range = (!empty($_GET['range']))?$_GET['range']:false;
if ($range != false ){
    $assessments = array_filter($assessments, function ($var) use ($range) {

     switch($range) {
        case "all":
            return true;
            break;
        case 'past':
            return($var['days'] < 0);
            break;
        case 'today':
            return($var['days'] == 0);
            break;
        case '2016':
            return(date('Y', strtotime($var['data-date'])) == date("Y"));
            break;
        case '2017':
            return(date('Y', strtotime($var['data-date'])) == date("Y") + 1);
            break;
        case 7:
            return($var['days'] < 7 && $var['days'] >= 0);
            break;
        case 30:
            return($var['days'] < 30 && $var['days'] >= 0);
            break;
        case 90:
            return($var['days'] < 90 && $var['days'] >= 0);
            break;
    }
});
}
/* loop and tally */
foreach ($assessments as $assessment) {


    /* count state groupings (total,actionable) */
    $groupings['state'][$assessment['data-action-state']][0]++;
    if ( $assessment['actionable'] ) {
        $groupings['state'][$assessment['data-action-state']][1]++;
    }
    //$groupings['state']['new'] = array_combine($groupings['evaluate'],$groupings['assigned']);

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

function makeGroupingBox($type,$title,$id=0,$total,$actionable=false,$image=false,$avatar=false,$initials=""){
    if (($type == ('employee' && $actionable > 0) || $type == 'state') || ($type == 'title' && $actionable > 0)) {
        $html = '<div class="assessment-group assessment-group--'.$type.'" data-id="'.$id.'" >';
        $html .= '<div class="assessment-group__box" data-equalize="assessment-group-'.$type.'">';
        if ( $avatar ) {
            $html .= '<div class="assessment-group__image"><div class="assessment-group__avatar-holder">'.$initials.'</div></div>';
        }
        else if ( $image ) {
            $html .= '<div class="assessment-group__image"><div class="assessment-group__image-holder"><img src="'.$image.'"></div></div>';
        }

        if ($type == "state") {
            if ($title == "review"){
                $html .= '<div class="assessment-group__title" data-state='.$title.'><div class="assessment-group__title-meta">Assessments&nbsp;to</div><div class="assessment-group__title-meta-value">Review</div></div>';
            }
            else if ($title == "evaluate"){
                $html .= '<div class="assessment-group__title" data-state='.$title.'><div class="assessment-group__title-meta">Assessments&nbsp;to</div><div class="assessment-group__title-meta-value">Rate</div></div>';
            }
            else if ($title == "approval"){
                $html .= '<div class="assessment-group__title" data-state='.$title.'><div class="assessment-group__title-meta">Assessments&nbsp;to</div><div class="assessment-group__title-meta-value">Approve</div></div>';
            }
            else if ($title == "signoff"){
                $html .= '<div class="assessment-group__title" data-state='.$title.'><div class="assessment-group__title-meta">Assessments&nbsp;to</div><div class="assessment-group__title-meta-value">Sign Off</div></div>';
            }

        }

        else {
            $html .= '<div class="assessment-group__title">'.$title.'</div>';
        }
        if ($actionable == 1) {
            $html .= '<div class="assessment-group__total">'.$actionable.'<div class="assessment-group__meta">needs action</div></div>';
        }
        else if ($actionable == 0) {
            $html .= '<div class="assessment-group__total">'.$actionable.'<div class="assessment-group__meta">need action</div></div>';
        }
        else {
            $html .= '<div class="assessment-group__total">'.$actionable.'<div class="assessment-group__meta">need action</div></div>';
        }

        $html .= '</div>';

        // if ( $actionable  ) {
        //     $html .= '<div class="assessment-group__actionable">'.$actionable.'</div>';
        // }

        $html .= '</div>';

        return $html;
    }
}

function makeStateGroupingBox($type,$title,$id=0,$total,$actionable=false,$image=false){
    $html = '<div class="assessment-group assessment-group--'.$type.'" data-id="'.$id.'" >';
    $html .= '<div class="assessment-group__box" data-equalize="assessment-group-'.$type.'">';
    $html .= '<div class="assessment-group__title">'.$title.'</div>';
    $html .= '<div class="assessment-group__total">'.$total.'</div>';

    $html .= '</div>';

    if ( $actionable ) {
        $html .= '<div class="assessment-group__actionable">'.$actionable.'</div>';
    }

    $html .= '</div>';

    return $html;
}

$legend = '<small>Click <i class="fa fa-circle text-accent"></i> on each group to see action items</small>';
$legend = '';

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

                </style>

                <div class="layout layout-search assessment-summary">
                    <div class="container">
                        <section class="section section-main section-box">
                            <nav class="nav-pagetabs">
                                <ul class="nav">
                                    <li class="active">
                                        <div class="nav-item">
                                            <a href="#summary">Action Items</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nav-item">
                                            <a href="#details">All Assessments</a>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                            <div class="tab-content">
                                <div class="tab-pane" id="summary">
                                    <div class="smart-actions pull-right">
                                        <div class="smart-actions-label">Filter by Due Date: </div>
                                        <div class="smart-actions-control">
                                            <select id="dateRangeSelect" class="form-control pull-right">
                                                <optgroup label="Presets">
                                                    <option selected value="all">All</option>
                                                    <option value="past">Past Due</option>
                                                    <option value="today">Today</option>
                                                    <option value="7">Next 7 Days</option>
                                                    <option value="30">Next 30 Days</option>
                                                    <option value="90">Next 90 Days</option>
                                                    <option value="2016">Current Year</option>
                                                    <option value="2017">Next Year</option>
                                                </optgroup>
                                                <!--  <optgroup label="Custom">
                                    <option value="custom">Custom Range</option>
                                </optgroup>-->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <section class="section">
                                        <section class="section groups-action">
                                            <h3 class="assessment-groups__action">Grouped by Action</h3>
                                            <div class="assessment-groups">
                                                <?php echo makeGroupingBox('state','evaluate',0,$groupings['state']['evaluate'][0],$groupings['state']['evaluate'][1]); ?>
                                                <?php echo makeGroupingBox('state','approval',0,$groupings['state']['approval'][0],$groupings['state']['approval'][1]); ?>
                                                <?php echo makeGroupingBox('state','review',0,$groupings['state']['review'][0],$groupings['state']['review'][1]); ?>
                                                <?php echo makeGroupingBox('state','signoff',0,$groupings['state']['signoff'][0],$groupings['state']['signoff'][1]); ?> </div>
                                        </section>
                                        <section class="section groups-employee">
                                            <h3 class="assessment-groups__title clearfix ">Grouped by Employee
                                                <div class="pull-right">
                                                    <div class="btn-group" role="group" aria-label="...">
                                                        <button type="button" class="btn btn-default btn-sm group-employee-list"><i class="fa fa-list-ul"></i> List</button>
                                                        <button type="button" class="btn btn-default btn-sm group-employee-grid active"><i class="fa fa-th-large"></i> Grid</button>
                                                    </div>
                                                </div>
                                            </h3>
                                            <div class="assessment-groups assessment-groups-employee-grid">
                                                <?php
                                $i = 0;
                                    foreach ( $groupings['employee'] as $key => $value ) {

                                        if ($i == 2 or $i == 3){
                                            $str_explode=explode(",",$key);
                                            $employeelastname = $str_explode[0];
                                            $employeefirstname = $str_explode[1];
                                            $employeeinitials =  substr($employeefirstname, 1,1).substr($employeelastname, 0,1);

                                            echo makeGroupingBox('employee',$key,$value[3],$value[0],$value[1],$value[2],true,$employeeinitials);
                                        }
                                        else {
                                            echo makeGroupingBox('employee',$key,$value[3],$value[0],$value[1],$value[2]);
                                        }
                                        $i++;
                                    }
                                ?>
                                                    <?php if (count($groupings['employee']) >= 9){ ?>
                                                    <a href="#" class="see-more pull-right">See All</a>
                                                    <?php }?>
                                                    <div class="assessment-groups more-employees">
                                                        <div class="assessment-group assessment-group--employee" data-id="1">
                                                            <div class="assessment-group__box equalized" data-equalize="assessment-group-employee" style="min-height: 77px;">
                                                                <div class="assessment-group__image">
                                                                    <div class="assessment-group__image-holder">
                                                                        <img src="/content/images/prototype-actors/brynn.jpg"> </div>
                                                                </div>
                                                                <div class="assessment-group__title">Chamberland, Marie S.</div>
                                                                <div class="assessment-group__total">2
                                                                    <div class="assessment-group__meta">needs action</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="assessment-group assessment-group--employee" data-id="2">
                                                            <div class="assessment-group__box equalized" data-equalize="assessment-group-employee" style="min-height: 77px;">
                                                                <div class="assessment-group__image">
                                                                    <div class="assessment-group__image-holder">
                                                                        <img src="/content/images/prototype-actors/esthercrawford.jpg"> </div>
                                                                </div>
                                                                <div class="assessment-group__title">Conner, Rosalyn F.</div>
                                                                <div class="assessment-group__total">1
                                                                    <div class="assessment-group__meta">needs action</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="assessment-group assessment-group--employee" data-id="3">
                                                            <div class="assessment-group__box equalized" data-equalize="assessment-group-employee" style="min-height: 77px;">
                                                                <div class="assessment-group__image">
                                                                    <div class="assessment-group__image-holder">
                                                                        <img src="/content/images/prototype-actors/himanshuchanda.jpg"> </div>
                                                                </div>
                                                                <div class="assessment-group__title">Flangan, Simon P.</div>
                                                                <div class="assessment-group__total">3
                                                                    <div class="assessment-group__meta">needs action</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="assessment-group assessment-group--employee" data-id="5">
                                                            <div class="assessment-group__box equalized" data-equalize="assessment-group-employee" style="min-height: 77px;">
                                                                <div class="assessment-group__image">
                                                                    <div class="assessment-group__image-holder">
                                                                        <img src="/content/images/avatar.jpg"> </div>
                                                                </div>
                                                                <div class="assessment-group__title">Juniper, Stephanie P.</div>
                                                                <div class="assessment-group__total">3
                                                                    <div class="assessment-group__meta">needs action</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="assessment-group assessment-group--employee" data-id="6">
                                                            <div class="assessment-group__box equalized" data-equalize="assessment-group-employee" style="min-height: 77px;">
                                                                <div class="assessment-group__image">
                                                                    <div class="assessment-group__image-holder">
                                                                        <img src="/content/images/prototype-actors/alewis.jpg"> </div>
                                                                </div>
                                                                <div class="assessment-group__title">Lewis, Audrey K.</div>
                                                                <div class="assessment-group__total">1
                                                                    <div class="assessment-group__meta">needs action</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="assessment-group assessment-group--employee" data-id="7">
                                                            <div class="assessment-group__box equalized" data-equalize="assessment-group-employee" style="min-height: 77px;">
                                                                <div class="assessment-group__image">
                                                                    <div class="assessment-group__image-holder">
                                                                        <img src="/content/images/prototype-actors/rhein_wein.jpg"> </div>
                                                                </div>
                                                                <div class="assessment-group__title">Montoya, Alice G.</div>
                                                                <div class="assessment-group__total">3
                                                                    <div class="assessment-group__meta">needs action</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="assessment-group assessment-group--employee" data-id="8">
                                                            <div class="assessment-group__box equalized" data-equalize="assessment-group-employee" style="min-height: 77px;">
                                                                <div class="assessment-group__image">
                                                                    <div class="assessment-group__image-holder">
                                                                        <img src="/content/images/prototype-actors/kfriedson.jpg"> </div>
                                                                </div>
                                                                <div class="assessment-group__title">Park, Jennifer S.</div>
                                                                <div class="assessment-group__total">2
                                                                    <div class="assessment-group__meta">needs action</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="see-less">
                                                            <a href="#" class="pull-right">See Less</a>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                <div class="assessment-groups assessment-groups-employee-list assessment-groups-list  collapse col-lg-12">
                                                    <div class="table-responsive">
                                                    <div  id="groupedByEmployeeHeader"><small class="text-muted"></small></div>
                                                        <table class="table table-striped table-condensed table-hover dataTable" id="groupedByEmployeeListTable">
                                                            <thead>
                                                                <tr>
                                                                    <th>Employee</th>
                                                                    <th>Department</th>
                                                                    <th>Need Action</th>
                                                                    <th>Next Due</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr data-id="9">
                                                                    <td>Bruno, Brad K.</td>
                                                                    <td>Cardiology</td>
                                                                    <td>1</td>
                                                                    <td class="text-attention">
                                                                        <?php echo date('m/d/Y',strtotime('-5days')) ?> </td>
                                                                </tr>
                                                                <tr data-id="1">
                                                                    <td>Chamberland, Marie S.</td>
                                                                    <td>Critical care</td>
                                                                    <td>3</td>
                                                                    <td class="">
                                                                        <?php echo date('m/d/Y',strtotime('+10days')) ?> </td>
                                                                </tr>
                                                                <tr data-id="2">
                                                                    <td>Conner, Rosalyn F.</td>
                                                                    <td>General surgery</td>
                                                                    <td>1</td>
                                                                    <td class="text-attention">
                                                                        <?php echo date('m/d/Y',strtotime('-55days')) ?> </td>
                                                                </tr>
                                                                <tr data-id="3">
                                                                    <td>Flangan, Simon P.</td>
                                                                    <td>Neonatal unit</td>
                                                                    <td>1</td>
                                                                    <td class="">
                                                                        <?php echo date('m/d/Y',strtotime('+5days')) ?> </td>
                                                                </tr>
                                                                <tr data-id="4">
                                                                    <td>Franks, Iva R.</td>
                                                                    <td>Haematology</td>
                                                                    <td>1</td>
                                                                    <td class="">
                                                                        <?php echo date('m/d/Y',strtotime('+1days')) ?> </td>
                                                                </tr>
                                                                <tr data-id="5">
                                                                    <td>Juniper, Stephanie P.</td>
                                                                    <td>Ear nose and throat (ENT)</td>
                                                                    <td>1</td>
                                                                    <td class="">
                                                                        <?php echo date('m/d/Y',strtotime('+1days')) ?> </td>
                                                                </tr>
                                                                <tr data-id="6">
                                                                    <td>Lewis, Audry K.</td>
                                                                    <td>Cardiology</td>
                                                                    <td>2</td>
                                                                    <td class="">
                                                                        <?php echo date('m/d/Y',strtotime('+5days')) ?> </td>
                                                                </tr>
                                                                <tr data-id="7">
                                                                    <td>Montoya, Alice G.</td>
                                                                    <td>Neurology</td>
                                                                    <td>1</td>
                                                                    <td class="text-attention">
                                                                        <?php echo date('m/d/Y',strtotime('-45days')) ?> </td>
                                                                </tr>
                                                                <tr data-id="8">
                                                                    <td>Park, Jennifer S.</td>
                                                                    <td>Neurology</td>
                                                                    <td>3</td>
                                                                    <td class="text-attention">
                                                                        <?php echo date('m/d/Y',strtotime('-60days')) ?> </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                   <!--  <div class="pull-right" style="margin-right:-15px;">
                                                        <div class="btn-group dropup">
                                                            <button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown">Results 1-26 of 25 <i class="fa fa-caret-up"></i></button>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li>
                                                                    <a href="#">5 per page</a>
                                                                </li>
                                                                <li class="active">
                                                                    <a href="#">25  per page</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">50 per page</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">100 per page</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="btn-group">
                                                            <a href="#" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></a>
                                                            <a href="#" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </section>
                                        <section class="section groups-assessment">
                                            <h3 class="assessment-groups__title clearfix">Grouped by Assessment Name
                                                <div class="pull-right">
                                                    <div class="btn-group" role="group" aria-label="...">
                                                        <button type="button" class="btn btn-default btn-sm group-assessment-list"><i class="fa fa-list-ul"></i> List</button>
                                                        <button type="button" class="btn btn-default btn-sm group-assessment-grid active"><i class="fa fa-th-large"></i> Grid</button>
                                                    </div>
                                                </div>
                                            </h3>
                                            <div class="assessment-groups assessment-groups-assessment-grid col-lg-12">
                                                <div class="assessment-groups">
                                                    <?php
                                    foreach ( $groupings['title'] as $key => $value ) {
                                        echo makeGroupingBox('title',$key,$value[2],$value[0],$value[1]);
                                    }
                                ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="assessment-groups assessment-groups-assessment-list assessment-groups-list  collapse col-lg-12">
                                                    <div class="table-responsive">
                                                    <div  id="groupedByTitleHeader"><small class="text-muted"></small></div>
                                                        <table class="table table-striped table-condensed table-hover dataTable" id="groupedByTitleListTable" >
                                                            <thead>
                                                                <tr>
                                                                    <th class="employee">Employee</th>
                                                                    <th class="needsaction">Need Action</th>
                                                                    <th class="nextdue">Next Due</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr data-id="2">
                                                                    <td>Annual Performance Appraisal</td>
                                                                    <td>3</td>
                                                                    <td class="text-attention">
                                                                        <?php echo date('m/d/Y',strtotime('-5days')) ?> </td>
                                                                </tr>
                                                                <tr data-id="3">
                                                                    <td>Communication</td>
                                                                    <td>1</td>
                                                                    <td class="">
                                                                        <?php echo date('m/d/Y',strtotime('+10days')) ?> </td>
                                                                </tr>
                                                                <tr data-id="1">
                                                                    <td>Initial Nursing Competency Appraisal</td>
                                                                    <td>6</td>
                                                                    <td class="text-attention">
                                                                        <?php echo date('m/d/Y',strtotime('-55days')) ?> </td>
                                                                </tr>
                                                                <tr data-id="18">
                                                                    <td>Nursing Skills Assessment</td>
                                                                    <td>1</td>
                                                                    <td class="">
                                                                        <?php echo date('m/d/Y',strtotime('+5days')) ?> </td>
                                                                </tr>
                                                                <tr data-id="9">
                                                                    <td>RN Community Health Competency Appraisal</td>
                                                                    <td>2</td>
                                                                    <td class="">
                                                                        <?php echo date('m/d/Y',strtotime('+1days')) ?> </td>
                                                                </tr>
                                                                <tr data-id="19">
                                                                    <td>RN Nursing Care of Children</td>
                                                                    <td>1</td>
                                                                    <td class="">
                                                                        <?php echo date('m/d/Y',strtotime('+1days')) ?> </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </section>
                                    </section>
                                </div>
                                <div class="tab-pane" id="details">
                                    <!--Filter Bar-->
                                    <div class="panel-group filter-bar-flat" role="tablist" id="filterbar-panel-group">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab">
                                                <a role="button" data-toggle="collapse" data-parent="#filterbar-panel-group" href="#filterbar-panel" class=""> Filter
                                                    <div class="panel-heading-icon"> <i class="fa fa-chevron-down panel-heading-icon-closed"></i> <i class="fa fa-chevron-up panel-heading-icon-open"></i> </div>
                                                </a>
                                            </div>
                                            <div id="filterbar-panel" class="panel-collapse in" role="tabpanel">
                                                <div class="panel-body">
                                                    <div class="filter-bar-row row1" id="row1">
                                                        <div class="filter-item">
                                                            <div class="form-group">
                                                                <div class="filter-label">
                                                                    <label class="control-label">Assessment:</label>
                                                                </div>
                                                                <div class="filter-control">
                                                                    <select class="form-control input-sm dd-filter" id="filter-assignment">
                                                                        <option value="all">All</option>
                                                                        <option value="actionable">All Action Items</option>
                                                                        <option value="assigned" selected>All Assigned</option>
                                                                        <option value="not-assigned">Not Assigned</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="filter-item">
                                                            <div class="form-group">
                                                                <div class="filter-label">
                                                                    <label class="control-label">Assessment State:</label>
                                                                </div>
                                                                <div class="filter-control">
                                                                    <select class="form-control input-sm dd-filter" id="filter-state">
                                                                        <option value="all">All</option>
                                                                        <option selected value="all-not-closed">All-Not Closed</option>
                                                                        <option value="assigned">Assigned</option>
                                                                        <option value="evaluate">Evaluate</option>
                                                                        <option value="review">Review</option>
                                                                        <option value="approval">Approval</option>
                                                                        <option value="signoff">Sign Off</option>
                                                                        <option value="closed">Closed</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="filter-item">
                                                            <div class="form-group">
                                                                <div class="filter-label">
                                                                    <label class="control-label">Assessment Type:</label>
                                                                </div>
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
                                                            <a class="btn btn-default btn-sm btn-reset reset-filters">Reset Filters</a>
                                                            <a class="btn btn-default btn-sm btn-sort-filter" href="#modal-sort" data-toggle="modal">Sort Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Filter Bar-->
                                    <section class="section">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="assessment assessment--header">
                                                    <div class="assessment__summary">
                                                        <div class="assessment__basics sort sort-assessment" data-sortdir="asc">
                                                            <a href="#">Assessment<i class="fa sortdir fa-caret-down"></i></a>
                                                        </div>
                                                        <div class="assessment__employee sort sort-employee" data-sortdir="desc">
                                                            <a href="#">Employee</a>
                                                        </div>
                                                        <div class="assessment__state sort sort-state" data-sortdir="asc">
                                                            <a href="#">State</a>
                                                        </div>
                                                        <div class="assessment__due sort sort-due" data-sortdir="desc">
                                                            <a href="#">Due<i class="fa sortdir fa-caret-up"></i></a>
                                                        </div>
                                                        <div class="assessment__completed sort sort-completed" data-sortdir="desc">
                                                            <a href="#">Completed<i class="fa sortdir fa-caret-up"></i></a>
                                                        </div>
                                                        <div class="assessment__progress sort-progress" data-sortdir="desc">Progress</div>
                                                        <div class="assessment__actions"></div>
                                                    </div>
                                                </div>
                                                <?php
                                 $i  = 0;
                                 foreach ($assessments as $assessment) { ?>
                                                    <div class="assessment assessment-data <?= $assessment['class'] ?>
                                <?php if ($assessment['actionable'] == true) { ?>
                                    assessment-flag
                                <?php } ?>" data-state="<?= $assessment['data-state'] ?>" data-titleid="<?= $assessment['title-id'] ?>" data-empid="<?= $assessment['empid'] ?>" data-actionable="<?= $assessment['actionable'] ?>" data-employee-progress="<?= $assessment['data-employee-progress'] ?>" data-action-state="<?= $assessment['data-action-state'] ?>">
                                                        <div class="assessment__summary">
                                                            <div class="assessment__basics">
                                                                <div class="assessment__title">
                                                                    <a href="<?= $assessment['url'] ?>">
                                                                        <?= $assessment['title'] ?>
                                                                            <span> -
                                                                                <?= $assessment['employee'] ?>
                                                                            </span>
                                                                    </a>
                                                                </div>
                                                                <ul class="meta">
                                                                    <li>
                                                                        <span class="meta-type">
                                                                            <?= $assessment['type-description'] ?>
                                                                        </span>
                                                                    </li>
                                                                    <li class="meta-hide-lg">
                                                                        <span class="meta-label">State:</span>
                                                                        <span class="meta-value">
                                                                            <?= $assessment['state'] ?>
                                                                        </span>
                                                                    </li>
                                                                    <li class="meta-hide-lg">
                                                                        <span class="meta-label">Due:</span>
                                                                        <span class="meta-value">
                                                                            <?= $assessment['date'] ?>
                                                                        </span>
                                                                    </li>
                                                                    <?php if ($assessment['completed'] != '') { ?>
                                                                    <li class="meta-hide-lg">
                                                                        <span class="meta-label">Completed:</span>
                                                                        <span class="meta-value">
                                                                            <?= $assessment['completed'] ?>
                                                                        </span>
                                                                    </li>
                                                                    <?php } ?>
                                                                    <?php if ($assessment['actionable'] == true) { ?>
                                                                    <li>
                                                                        <span class="action-badge-solid-blue">
                                                                            <a href="<?= $assessment['url'] ?>"><i class="fa fa-flag"></i> Action Needed</a>
                                                                        </span>
                                                                    </li>
                                                                    <?php } ?> </ul>
                                                            </div>
                                                            <div class="assessment__employee">
                                                                <?= $assessment['employee'] ?>
                                                            </div>
                                                            <div class="assessment__state" data-state="<?= $assessment['data-state'] ?>" data-action-state="<?= $assessment['data-action-state'] ?>">
                                                                <?= $assessment['state'] ?>
                                                                    <span class="data-state collapse">
                                                                        <?= $assessment['data-state'] ?>
                                                                    </span>
                                                            </div>
                                                            <div class="assessment__due" data-date="<?= $assessment['data-date'] ?>">
                                                                <?= $assessment['date'] ?>
                                                                    <span class="data-date collapse">
                                                                        <?= $assessment['data-date'] ?>
                                                                    </span>
                                                            </div>
                                                            <div class="assessment__completed" data-completed="<?= $assessment['data-completed'] ?>">
                                                                <?= $assessment['completed'] ?>
                                                                    <span class="data-completed collapse">
                                                                        <?= $assessment['data-completed'] ?>
                                                                    </span>
                                                            </div>
                                                            <div class="assessment__progress">
                                                                <ul class="assessment__actors">
                                                                    <?php if($assessment['state'] == "Evaluate") { ?>
                                                                    <li class="assessment__actor assessment__actor_rater  assessment__actor_can-edit">
                                                                        <?php if($i % 2 == 0) { ?>
                                                                        <!--Make the even numbered assessments go to the multi page-->
                                                                        <a href="assessment-manage-rater-peers.php" class="assessment__actor__manage__link">
                                                                            <?php } else { ?>
                                                                            <!--Make the odd numbered assessments go to the single page-->
                                                                            <a href="assessment-manage-rater-peers.php?single" class="assessment__actor__manage__link">
                                                                                <?php }?>
                                                                                <div class="assessment__actor__name"><i class="fa fa-edit assessment-edit-icon fa-fw"></i>
                                                                                    <span>Rater:</span>
                                                                                    <span class="rater-name">
                                                                                        <?= $assessment['rater'] ?>
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                            <div class="assessment__actor__progress" data-id="<?= $assessment['progress_id'] ?>">
                                                                                <a href="#" class="js-progress" data-id="<?= $assessment['progress_id'] ?>" data-state="<?= $assessment['data-state'] ?>">
                                                                                    <div class="progress">
                                                                                        <?= $assessment['rater_progress'] ?>
                                                                                    </div>
                                                                                    <div class="collapse data-rater-progress">
                                                                                        <?= $assessment['data-rater-progress'] ?>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                    </li>
                                                                    <?php } else { ?>
                                                                    <li class="assessment__actor assessment__actor_rater">
                                                                        <div class="assessment__actor__name">
                                                                            <span>Rater:</span>
                                                                            <span class="rater-name">
                                                                                <?= $assessment['rater'] ?>
                                                                            </span>
                                                                        </div>
                                                                        <div class="assessment__actor__progress" data-id="<?= $assessment['progress_id'] ?>">
                                                                            <a href="#" class="js-progress" data-id="<?= $assessment['progress_id'] ?>" data-state="<?= $assessment['data-state'] ?>">
                                                                                <div class="progress">
                                                                                    <?= $assessment['rater_progress'] ?>
                                                                                </div>
                                                                                <div class="collapse data-rater-progress">
                                                                                    <?= $assessment['data-rater-progress'] ?>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                    <?php } ?>
                                                                    <li class="assessment__actor assessment__actor_employee">
                                                                        <div class="assessment__actor__name">
                                                                            <span>Employee:</span>
                                                                            <?= $assessment['employee'] ?>
                                                                        </div>
                                                                        <div class="assessment__actor__progress " data-id="<?= $assessment['progress_id'] ?>">
                                                                            <a href="#" class="js-progress" data-id="<?= $assessment['progress_id'] ?>" data-state="<?= $assessment['data-state'] ?>">
                                                                                <div class="progress">
                                                                                    <?= $assessment['employee_progress'] ?>
                                                                                </div>
                                                                                <div class="collapse data-employee-progress">
                                                                                    <?= $assessment['data-employee-progress'] ?>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                    <?php if($assessment['state'] == "Evaluate") { ?>
                                                                    <li class="assessment__actor assessment__actor_peers assessment__actor_can-edit">
                                                                        <?php if($i % 2 == 0) { ?>
                                                                        <!--Make the even numbered assessments go to the multi page-->
                                                                        <a href="assessment-manage-rater-peers.php" class="assessment__actor__manage__link">
                                                                            <?php } else { ?>
                                                                            <!--Make the odd numbered assessments go to the single page-->
                                                                            <a href="assessment-manage-rater-peers.php?single" class="assessment__actor__manage__link">
                                                                                <?php } ?>
                                                                                <div class="assessment__actor__name"><i class="fa fa-edit icon-muted fa-fw"></i>
                                                                                    <span>Peers Submitted:</span>
                                                                                </div>
                                                                            </a>
                                                                            <div class="assessment__actor__progress " data-id="<?= $assessment['progress_id'] ?>">
                                                                                <a href="#" class="js-progress" data-id="<?= $assessment['progress_id'] ?>" data-state="<?= $assessment['data-state'] ?>">
                                                                                    <div class="progress progress-peer">
                                                                                        <?= $assessment['peers_progress'] ?>
                                                                                            <span style="color:#ccc ;"></span>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                    </li>
                                                                    <?php } else { ?>
                                                                    <li class="assessment__actor assessment__actor_peers">
                                                                        <div class="assessment__actor__name">
                                                                            <span>Peers Submitted:</span>
                                                                        </div>
                                                                        <div class="assessment__actor__progress " data-id="<?= $assessment['progress_id'] ?>">
                                                                            <a href="#" class="js-progress" data-id="<?= $assessment['progress_id'] ?>" data-state="<?= $assessment['data-state'] ?>">
                                                                                <div class="progress progress-peer">
                                                                                    <?= $assessment['peers_progress'] ?>
                                                                                        <span style="color:#ccc ;"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                    <?php } ?> </ul>
                                                            </div>
                                                            <div class="assessment__actions-lg" style="position:relative;">
                                                                <div class="action action-split">
                                                                    <div class="btn-group">
                                                                        <a href="<?= $assessment['url'] ?>" class="btn btn-default btn-sm hidden-xs">
                                                                            <?= $assessment['action-label'] ?>
                                                                        </a>
                                                                        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                                            <?php if ($assessment['action-label'] == 'View') { ?>
                                                                            <li>
                                                                                <a href="<?= $assessment['url'] ?>">View Assessment</a>
                                                                            </li>
                                                                            <?php } else { ?>
                                                                            <li>
                                                                                <a href="<?= $assessment['url'] ?>">
                                                                                    <?= $assessment['action-label'] ?>
                                                                                </a>
                                                                            </li>
                                                                            <?php } ?>
                                                                            <li>
                                                                                <a href="#" class="js-progress" data-id="<?= $assessment['progress_id'] ?>" data-state="<?= $assessment['data-state'] ?>">View Progress</a>
                                                                            </li>
                                                                            <?php if($assessment['state'] == "Evaluate") { ?>
                                                                            <?php if($i % 2 == 0) { ?>
                                                                            <!--Make the even numbered assessments go to the multi page-->
                                                                            <li>
                                                                                <a href="/assessment-manage-rater-peers.php">Manage Rater &amp; Peers</a>
                                                                            </li>
                                                                            <?php } else { ?>
                                                                            <!--Make the odd numbered assessments go to the single page-->
                                                                            <li>
                                                                                <a href="/assessment-manage-rater-peers.php?single">Manage Rater &amp; Peers</a>
                                                                            </li>
                                                                            <?php } ?>
                                                                            <?php }?>
                                                                            <?php if($assessment['state'] == "Evaluate" ) { ?>
                                                                            <li>
                                                                                <a href="/assessment-dynamic-section.php">Add to a Dynamic Section</a>
                                                                            </li>
                                                                            <?php } ?>
                                                                            <li class="divider"></li>
                                                                            <li>
                                                                                <a href="#">Print PDF</a>
                                                                            </li>
                                                                            <?php if($assessment['state'] == "Closed" ) { ?>
                                                                            <li>
                                                                                <a href="#" class="js-revert">Revert to Review</a>
                                                                            </li>
                                                                            <?php } else { ?>
                                                                            <li>
                                                                                <a href="#" class="js-revert">Revert to [State Name]</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" class="js-reset">Reset</a>
                                                                            </li>
                                                                            <?php } ?>
                                                                            <?php if($assessment['state'] == "Evaluate") { ?>
                                                                            <li>
                                                                                <a href="#" class="js-delete">Delete</a>
                                                                            </li>
                                                                            <?php } ?> </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="assessment__assignedto" style="display:none;">
                                                                <?= $assessment['assignedto'] ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                $i++;
                                 } ?>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="slat no-assessments collapse">
                                        <div class="slat-message">
                                            <h3>There are no items that match the selected filters.</h3>
                                        </div>
                                    </div>
                                    <?php
                $stickybar = array(
                'sets' => array(
                    array(
                        'position' => 'left',
                         'html' => '<a class="btn btn-default reset-filters" >Reset Filters</a>
                                <a href="#modal-sort" class="btn btn-default" data-toggle="modal">Sort Options</a>',
                    ),
                ),
        );
        echo createStickybar($stickybar);
        ?>
                        </section>
                        </div>
                        <!-- /container -->
                        </div>
                        <!-- /layout -->
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
                                            <tbody> </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="assessment-manage-rater-peers.php" class="btn btn-default btn-manage-rater-peers">Manage Rater and Peers</a>
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
                                        <h4 class="modal-title">Sort </h4>
                                    </div>
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
                                                                <optgroup label="Progress">
                                                                    <option value="raterprogress" data-directions="Least to Most Complete|Most to Least Complete">Rater Progress</option>
                                                                    <option value="employeeprogress" data-directions="Least to Most Complete|Most to Least Complete">Employee Progress</option>
                                                                    <option value="peerprogress" data-directions="Least to Most Complete|Most to Least Complete">Peer Progress</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <select class="form-control primary-sort-dir js-sort-primary-dir" id="sort-direction-1">
                                                                <option value="asc">Newest to Oldest</option>
                                                                <option selected value="desc">Oldest to Newest</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="control-label">Secondary
                                                    <small>Optional</small>
                                                </label>
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
                                                                <optgroup label="Progress">
                                                                    <option value="raterprogress" data-directions="Least to Most Complete|Most to Least Complete">Rater Progress</option>
                                                                    <option value="employeeprogress" data-directions="Least to Most Complete|Most to Least Complete">Employee Progress</option>
                                                                    <option value="peerprogress" data-directions="Least to Most Complete|Most to Least Complete">Peer Progress</option>
                                                                </optgroup>
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
                        </div>
                        <!-- /modal -->
                        <!-- Modal -->
                        <div id="modal-print" class="modal modal-transcript fade" tabindex="-1" role="dialog" aria-labelledby="modal-print-label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                        <h4 id="modal-print-label" class="modal-title">Date Range</h4>
                                    </div>
                                    <div class="modal-body">
                                        <fieldset>
                                            <legend>Choose a Range:</legend>
                                            <select id="printRangeSelect" class="form-control">
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
                                        </fieldset>
                                        <fieldset id="printRangeCustom" class="hide">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Start:</label>
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
                                                        <label>End:</label>
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="collapse" id="print-options">
                                            <fieldset>
                                                <legend>Student Demographics
                                                    <small>Include checked items</small>
                                                </legend>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <label class="checkbox">
                                                                    <input type="checkbox">Student User ID</label>
                                                            </li>
                                                            <li>
                                                                <label class="checkbox">
                                                                    <input type="checkbox">Job Title</label>
                                                            </li>
                                                            <li>
                                                                <label class="checkbox">
                                                                    <input type="checkbox">Job Category</label>
                                                            </li>
                                                            <li>
                                                                <label class="checkbox">
                                                                    <input type="checkbox">Department</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <label class="checkbox">
                                                                    <input type="checkbox">Hire/Re-hire Date</label>
                                                            </li>
                                                            <li>
                                                                <label class="checkbox">
                                                                    <input type="checkbox">Active Date</label>
                                                            </li>
                                                            <li>
                                                                <label class="checkbox">
                                                                    <input type="checkbox">Review Date</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <legend>Transcript Data
                                                    <small>Include checked items</small>
                                                </legend>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <label class="checkbox">
                                                                    <input type="checkbox" checked>Estimated Time</label>
                                                            </li>
                                                            <li>
                                                                <label class="checkbox">
                                                                    <input type="checkbox">Course Score</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <label class="checkbox">
                                                                    <input type="checkbox">Time with Completion Date</label>
                                                            </li>
                                                            <li>
                                                                <label class="checkbox">
                                                                    <input type="checkbox" checked>Learning Event Comments</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <legend>Learning Events
                                                    <small>Include checked items</small>
                                                </legend>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <label class="checkbox">
                                                                    <input type="checkbox" checked>Administrator-entered</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <label class="checkbox">
                                                                    <input type="checkbox" checked>Student-entered</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <legend>Assessments
                                                    <small>Include checked items</small>
                                                </legend>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <label class="checkbox">
                                                                    <input type="checkbox" checked>Self Assessments</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <label class="checkbox">
                                                                    <input type="checkbox" checked>Peer Assessments</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <p>
                                            <a href="#" data-toggle="collapse" data-target="#print-options" data-toggle-text="Show Additional Options|Hide Additional Options">Show Additional Options</a>
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-success" data-dismiss="modal">Continue</button>
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
                                        <h4 class="modal-title">State Detail</h4>
                                    </div>
                                    <div class="modal-body">
                                        <section class="section">
                                            <h3>Approval Activity</h3>
                                            <div class="slat slat-modal">
                                                <div class="slat-default">
                                                    <div class="title">Sampson, Frieda D.</div>
                                                    <ul class="meta">
                                                        <li>
                                                            <span class="meta-label">Role:</span>
                                                            <span class="meta-value">HR Approver</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Status:</span>
                                                            <span class="meta-value">Pending</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Iteration:</span>
                                                            <span class="meta-value">1</span>
                                                        </li>
                                                    </ul>
                                                    <div class="status status-pending"></div>
                                                </div>
                                            </div>
                                            <div class="slat slat-modal slat-callout">
                                                <div class="slat-default">
                                                    <div class="title">Smith, Carolyn D.</div>
                                                    <ul class="meta">
                                                        <li>
                                                            <span class="meta-label">Role:</span>
                                                            <span class="meta-value">Education Approver</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Status:</span>
                                                            <span class="meta-value">Accepted</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Iteration:</span>
                                                            <span class="meta-value">1</span>
                                                        </li>
                                                        <li class="meta-callout">
                                                            <span class="meta-label">Date: </span>
                                                            <span class="meta-value">Aug 28, 2016</span>
                                                        </li>
                                                    </ul>
                                                    <div class="status status-accepted"></div>
                                                </div>
                                            </div>
                                            <div class="slat slat-modal slat-callout">
                                                <div class="slat-default">
                                                    <div class="title">Delta, Meredith S.</div>
                                                    <ul class="meta">
                                                        <li>
                                                            <span class="meta-label">Role:</span>
                                                            <span class="meta-value">Manager Level 3</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Status:</span>
                                                            <span class="meta-value">Accepted</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Iteration:</span>
                                                            <span class="meta-value">1</span>
                                                        </li>
                                                        <li class="meta-callout">
                                                            <span class="meta-label">Date: </span>
                                                            <span class="meta-value">Aug 27, 2016</span>
                                                        </li>
                                                    </ul>
                                                    <div class="status status-success"></div>
                                                </div>
                                            </div>
                                            <div class="slat slat-modal slat-callout">
                                                <div class="slat-default">
                                                    <div class="title">Barker, Aaron L.</div>
                                                    <ul class="meta">
                                                        <li>
                                                            <span class="meta-label">Role:</span>
                                                            <span class="meta-value">Manager Level 2</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Status:</span>
                                                            <span class="meta-value">Accepted</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Iteration:</span>
                                                            <span class="meta-value">1</span>
                                                        </li>
                                                        <li class="meta-callout">
                                                            <span class="meta-label">Date: </span>
                                                            <span class="meta-value">Aug 26, 2016</span>
                                                        </li>
                                                    </ul>
                                                    <div class="status status-success"></div>
                                                </div>
                                            </div>
                                            <div class="slat slat-modal slat-callout">
                                                <div class="slat-default">
                                                    <div class="title">Peeples, Misty R.</div>
                                                    <ul class="meta">
                                                        <li>
                                                            <span class="meta-label">Role:</span>
                                                            <span class="meta-value">Manager Level 1</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Status:</span>
                                                            <span class="meta-value">Accepted</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Iteration:</span>
                                                            <span class="meta-value">2</span>
                                                        </li>
                                                        <li class="meta-callout">
                                                            <span class="meta-label">Date: </span>
                                                            <span class="meta-value">Aug 25, 2016</span>
                                                        </li>
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
                                            <div class="slat slat-modal slat-callout">
                                                <div class="slat-default">
                                                    <div class="title">Peeples, Misty R.</div>
                                                    <ul class="meta">
                                                        <li>
                                                            <span class="meta-label">Role:</span>
                                                            <span class="meta-value">Manager Level 1</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Status:</span>
                                                            <span class="meta-value">Rejected</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Iteration:</span>
                                                            <span class="meta-value">1</span>
                                                        </li>
                                                        <li class="meta-callout">
                                                            <span class="meta-label">Date: </span>
                                                            <span class="meta-value">Aug 24, 2016</span>
                                                        </li>
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
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="modal-state-detail-approval-manager" class="modal fade" tabindex="-1" aria-hidden="false">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                        <h4 class="modal-title">State Detail</h4>
                                    </div>
                                    <div class="modal-body">
                                        <section class="section">
                                            <div class="slat slat-modal">
                                                <div class="slat-default">
                                                    <div class="title">HR Approver</div>
                                                    <ul class="meta">
                                                        <li>
                                                            <span class="meta-label">Role:</span>
                                                            <span class="meta-value">HR Approver</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Status:</span>
                                                            <span class="meta-value">Planned</span>
                                                        </li>
                                                    </ul>
                                                    <div></div>
                                                </div>
                                            </div>
                                            <div class="slat slat-modal">
                                                <div class="slat-default">
                                                    <div class="title">Education Approver</div>
                                                    <ul class="meta">
                                                        <li>
                                                            <span class="meta-label">Role:</span>
                                                            <span class="meta-value">Education Approver</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Status:</span>
                                                            <span class="meta-value">Planned</span>
                                                        </li>
                                                        <li class="meta-callout">
                                                            <span class="meta-label">Date: </span>
                                                            <span class="meta-value"></span>
                                                        </li>
                                                    </ul>
                                                    <div></div>
                                                </div>
                                            </div>
                                            <div class="slat slat-modal">
                                                <div class="slat-default">
                                                    <div class="title">Delta, Meredith S.</div>
                                                    <ul class="meta">
                                                        <li>
                                                            <span class="meta-label">Role:</span>
                                                            <span class="meta-value">Manager Level 3</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Status:</span>
                                                            <span class="meta-value">Planned</span>
                                                        </li>
                                                    </ul>
                                                    <div></div>
                                                </div>
                                            </div>
                                            <div class="slat slat-modal">
                                                <div class="slat-default">
                                                    <div class="title">Crane, Darcy L.</div>
                                                    <ul class="meta">
                                                        <li>
                                                            <span class="meta-label">Role:</span>
                                                            <span class="meta-value">Manager Level 2</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Status:</span>
                                                            <span class="meta-value">Pending</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Iteration:</span>
                                                            <span class="meta-value">1</span>
                                                        </li>
                                                    </ul>
                                                    <div class="status status-pending"></div>
                                                </div>
                                            </div>
                                            <div class="slat slat-modal slat-callout">
                                                <div class="slat-default">
                                                    <div class="title">Peeples, Misty R.</div>
                                                    <ul class="meta">
                                                        <li>
                                                            <span class="meta-label">Role:</span>
                                                            <span class="meta-value">Manager Level 1</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Status:</span>
                                                            <span class="meta-value">Accepted</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Iteration:</span>
                                                            <span class="meta-value">2</span>
                                                        </li>
                                                        <li class="meta-callout">
                                                            <span class="meta-label">Date: </span>
                                                            <span class="meta-value">Aug 25, 2016</span>
                                                        </li>
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
                                            <div class="slat slat-modal slat-callout">
                                                <div class="slat-default">
                                                    <div class="title">Peeples, Misty R.</div>
                                                    <ul class="meta">
                                                        <li>
                                                            <span class="meta-label">Role:</span>
                                                            <span class="meta-value">Manager Level 1</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Status:</span>
                                                            <span class="meta-value">Rejected</span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Iteration:</span>
                                                            <span class="meta-value">1</span>
                                                        </li>
                                                        <li class="meta-callout">
                                                            <span class="meta-label">Date: </span>
                                                            <span class="meta-value">Aug 24, 2016</span>
                                                        </li>
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
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /modal -->
                        <?php include ('includes/modals/_modal-assessment-by-state.php'); ?>
                        <?php include ('includes/modals/_modal-assessment-by-employee.php'); ?>
                        <?php include ('includes/modals/_modal-assessment-by-title.php'); ?>
                        <input type="hidden" id="numberOfActionItems" value="<?= $numberOfActionItems ?>" />
                        <input type="hidden" id="numberOfAssessments" value="<?= $numberOfAssessments ?>" />
                        <input type="hidden" id="clickGroup" value="<?= $click ?>" />
                        <?= createFooter($patterns['footer']); ?>
                            <?= createPrototypeNav(); ?>
                                <?= createSiteScripts(); ?>
                                    <script src="/scripts/healthstream.tours/plugin/bootstrap-tour.js"></script>
                                    <script src="/scripts/healthstream.tours/localization/localization-eng-tour.js"></script>
                                    <script src="/scripts/healthstream.tours/tours/rater-tour.js"></script>
                                    <script src="/scripts/prototype.raters.summary.future.modal.js"></script>
                                    <script src="/scripts/dataTables.js"></script>
                                    <script src="http://hstm-platform.patternmanager.com/scripts/dataTables.rowReorder.min.js"></script>
                                    <script src="/scripts/prototype.datatables.js"></script>
                                      <script>
                                        (function(window, $) {
                                          'use strict';
                                          window.HealthStream = window.HealthStream || {};
                                          var healthStream = window.HealthStream;
                                          healthStream.studentSearchResults = {};
                                          healthStream.studentSearchResults.resultsDataTable = function() {
                                            var empTable = $('#groupedByEmployeeListTable').DataTable({
                                                  "paging": true,
                                                  "order": [
                                                    [0, "asc"]
                                                  ],
                                                  "dom": 'ft<"bottom"rlip>',
                                                  "columnDefs": [{
                                                    "visible": false,
                                                    "targets": "hideOnLoad",
                                                  }, {
                                                    "orderable": false,
                                                    "targets": "unsortable"
                                                  }],
                                                  language: {
                                                    search: "_INPUT_",
                                                    searchPlaceholder: "Search"
                                                  },
                                                  "pageLength": 25
                                            });
                                            var titleTable = $('#groupedByTitleListTable').DataTable({
                                                  "paging": true,
                                                  "order": [
                                                    [0, "asc"]
                                                  ],
                                                  "dom": 'ft<"bottom"rlip>',
                                                  "columnDefs": [{
                                                    "visible": false,
                                                    "targets": "hideOnLoad",
                                                  }, {
                                                    "orderable": false,
                                                    "targets": "unsortable"
                                                  }],
                                                  language: {
                                                    search: "_INPUT_",
                                                    searchPlaceholder: "Search"
                                                  }
                                            });

                                            expandMobileRow();
                                            generateDynamicDataTitles();
                                            customizeColumns(empTable);
                                            customizeColumns(titleTable);

                                            keepDropDownMenuOpen();
                                            updateTableHeaderCounts();
                                            //place default info into Results header
                                            function updateTableHeaderCounts() {
                                              $(".dataTables_info").hide();
                                              $('#groupedByEmployeeHeader small').html($("#groupedByEmployeeListTable_info").html());
                                              $('#groupedByEmployeeListTable_filter input').prop('placeholder','Quick Search');
                                              $('#groupedByTitleHeader small').html($("#groupedByTitleListTable_info").html());
                                              $('#groupedByTitleListTable_filter input').prop('placeholder','Quick Search');
                                            }
                                            //reinitialize jquery when table is redrawn (pagination)
                                            $(".dataTable").on('draw.dt', function() {
                                              expandMobileRow();
                                              generateDynamicDataTitles();
                                              updateTableHeaderCounts();
                                            });



                                            };
                                          $(window).on('load', function() {
                                            healthStream.studentSearchResults.resultsDataTable();
                                          });
                                        }(window, jQuery));
                                    </script>
                                    <script>

                                        <?php if (!empty($_GET['growlTitle']) && !empty($_GET['growlText'])) { ?>
                                        // Show Growl on Load
                                        var growl = {};
                                        growl.title = "<?= $_GET['growlTitle']; ?>";
                                        growl.text = "<?= $_GET['growlText']; ?>";
                                        <?php echo (!empty($_GET['growlType']))?'growl.type = "'.$_GET['growlType'].'";'."\n":''; ?>
                                        <?php echo (!empty($_GET['growlSticky']))?'growl.sticky = '.$_GET['growlSticky'].';'."\n":''; ?>
                                        setTimeout(function() {
                                            HealthStream.utilities.growl(growl);
                                        }, 500);
                                        <?php } ?>
                                        $('.js-state-detail-approval-manager').on('click', function(e) {
                                            var $modal = $('#modal-state-detail-approval-manager');
                                            e.preventDefault();
                                            $modal.modal('show');
                                        });

                                        $('.group-employee-list').click(function() {
                                            $('.assessment-groups-employee-list').show();
                                            $('.assessment-groups-employee-grid').hide();
                                        });
                                        $('.group-employee-grid').click(function() {
                                            $('.assessment-groups-employee-list').hide();
                                            $('.assessment-groups-employee-grid').show();
                                        });
                                        $('.group-assessment-list').click(function() {
                                            $('.assessment-groups-assessment-list').show();
                                            $('.assessment-groups-assessment-grid').hide();
                                        });
                                        $('.group-assessment-grid').click(function() {
                                            $('.assessment-groups-assessment-list').hide();
                                            $('.assessment-groups-assessment-grid').show();
                                        });
                                        $(".btn-group > .btn").click(function(){
                                            $(this).addClass("active").siblings().removeClass("active");
                                        });

                                    </script>
                                    <?= createSiteEnd(); ?>
