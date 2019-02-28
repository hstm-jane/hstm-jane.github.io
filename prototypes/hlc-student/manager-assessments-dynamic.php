<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My Team';
$patterns['header'] = array(
    'mainNav' => '
        <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
        <li class="{active=todo}"><a href="/">To Do</a></li>
        <li class="{active=completed}"><a href="/completed.php">Completed</a></li>
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
        <li class="{active=team}"><a href="/manager-assessments-dynamic.php">Team</a></li>
        <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'team',
);
$patterns['focus']['title'] = 'My Team';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Total Tasks:',
        'value' => '35',
    ),
    array(
        'label' => 'Action Items:',
        'value' => '6',
    ),
);
$patterns['focus']['supporting'] = ' ';


/*  ====================================================================
    Getting URL Parameters
    ================================================================= */


    $param_daterange = (!empty($_GET['daterange']))?$_GET['daterange']:'Last 12 Months';
    $param_daterange_start = (!empty($_GET['daterange-start']))?$_GET['daterange-end']:'';
    $param_daterange_end = (!empty($_GET['daterange-end']))?$_GET['daterange-start']:'';
    $param_title = (!empty($_GET['title']))?$_GET['title']:'';
    $param_kind = (!empty($_GET['kind']))?$_GET['kind']:'Action Items';
    $param_type = (!empty($_GET['type']))?$_GET['type']:'Employee';
    $param_status = (!empty($_GET['status']))?$_GET['status']:'All Not Closed';
    $param_firstname = (!empty($_GET['firstname']))?$_GET['firstname']:'';
    $param_lastname = (!empty($_GET['lastname']))?$_GET['lastname']:'';
    $param_department = (!empty($_GET['department']))?$_GET['department']:'';

    // a function to check a value against a parameter and then return a string
    function isSelected($param,$option,$output) {
        if ( $param === $option ) {
            return $output;
        }
    }


$dateRangeControls = '<div class="form-group">
    <select class="form-control js-select-daterange" name="daterange" id="daterange">
        <option value="Since January 1"' . isSelected($param_daterange,'Since January 1',' selected') . '>Since January 1</option>
        <option value="Last 6 Months"' . isSelected($param_daterange,'Last 6 Months',' selected') . '>Last 6 Months</option>
        <option value="Last 12 Months"' . isSelected($param_daterange,'Last 12 Months',' selected') . '>Last 12 Months</option>
        <option value="Last 24 Months"' . isSelected($param_daterange,'Last 24 Months',' selected') . '>Last 24 Months</option>
        <option value="Previous Calendar Year"' . isSelected($param_daterange,'Previous Calendar Year',' selected') . '>Previous Calendar Year</option>
        <option value="Custom Range"' . isSelected($param_daterange,'Custom Range',' selected') . '>Custom Range</option>
    </select>
</div>
<div class="form-group js-select-daterange-custom" style="display:none">
    <div class="form-group">
        <label class="control-label">Start Date</label>
        <div class="input-group date">
            <input type="text" id="daterange-start" name="daterange-start" class="form-control" placeholder="mm/dd/yyyy" value="' .$param_daterange_start. '">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
            </span>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label">End Date</label>
        <div class="input-group date">
            <input type="text" id="daterange-end" name="daterange-end" class="form-control" placeholder="mm/dd/yyyy" value="' .$param_daterange_end. '">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
            </span>
        </div>
    </div>
    <button class="btn btn-sm btn-default form-submit-button" type="button">Apply Custom Date Range</button>
</div>';

$range = (object) [
    "state" => 'open', // static / open / closed
    "header" => 'Date Range',
    "controls" => array( $dateRangeControls )
];

$employees = (object) [
    "state" => 'closed', // static / open / closed
    "header" => 'Employees',
    "controls" => array(
        '<label class="control-label">First Name</label><div class="input-group"><input type="text" class="form-control firstname" name="firstname" placeholder="Search" value="' .$param_firstname. '"><span class="input-group-btn"><button class="btn btn-default form-submit-button" type="button"><i class="fa fa-search"></i></button></span></div>',
        '<label class="control-label">Last Name</label><div class="input-group"><input type="text" class="form-control lastname" name="lastname"  placeholder="Search" value="' .$param_lastname. '"><span class="input-group-btn"><button class="btn btn-default form-submit-button" type="button"><i class="fa fa-search"></i></button></span></div>',
        // '<label class="control-label">Department</label><select class="form-control js-select2" name="department" id="department"><option value="Department 1"' . isSelected($param_department,'Department 1',' selected') . '>Department 1</option><option value="Department 2"' . isSelected($param_department,'Department 2',' selected') . '>Department 2</option><option value="Department 3"' . isSelected($param_department,'Department 3',' selected') . '>Department 3</option></select>'
    )
];

$assessments = (object) [
    "state" => 'open',
    "header" => 'Assessments',
    "controls" => array(
        '<label class="control-label">Title:</label><div class="input-group"><input type="text" name="title" class="form-control title" placeholder="Search" value="' .$param_title. '"><span class="input-group-btn"><button class="btn btn-default form-submit-button title-submit" type="button"><i class="fa fa-search"></i></button></span></div>',
        '<label class="control-label">Kind:</label><ul class="list-unstyled"><li><label class="radio"><input type="radio" name="kind" value="All"' . isSelected($param_kind,'All',' checked') . '> All</label></li><li><label class="radio"><input type="radio" name="kind" value="All Assigned"' . isSelected($param_kind,'All Assigned',' checked') . '> All Assigned</label></li><li><label class="radio"><input type="radio" class="action-items" name="kind" value="Action Items"' . isSelected($param_kind,'Action Items',' checked') . '> Action Items</label></li><li><label class="radio"><input type="radio" name="kind" value="Not Assigned"' . isSelected($param_kind,'Not Assigned',' checked') . '> Not Assigned</label></li></ul>',
        '<label class="control-label">Type:</label><ul class="list-unstyled"><li><label class="radio"><input type="radio" name="type" value="Self"' . isSelected($param_type,'Self',' checked') . '> Self</label></li><li><label class="radio"><input type="radio" class="employee" name="type" value="Employee"' . isSelected($param_type,'Employee',' checked') . '> Employee</label></li><li><label class="radio"><input type="radio" name="type" value="Peer"' . isSelected($param_type,'Peer',' checked') . '> Peer</label></li></ul>',
        '<label class="control-label">Status:</label><ul class="list-unstyled"><li><label class="radio"><input type="radio" name="status" value="All"' . isSelected($param_status,'All',' checked') . '> All</label></li><li><label class="radio"><input type="radio" class="all-not-closed" name="status" value="All Not Closed"' . isSelected($param_status,'All Not Closed',' checked') . '> All Not Closed</label></li><li><label class="radio"><input type="radio" name="status" value="Assigned"' . isSelected($param_status,'Assigned',' checked') . '> Assigned</label></li><li><label class="radio"><input type="radio" name="status" value="Evaluate" ' . isSelected($param_status,'Evaluate',' checked') . '> Evaluate</label></li><li><label class="radio"><input type="radio" name="status" value="Review" ' . isSelected($param_status,'Review',' checked') . '> Review</label></li><li><label class="radio"><input type="radio" name="status" value="Approval" ' . isSelected($param_status,'Approval',' checked') . '> Approval</label></li><li><label class="radio"><input type="radio" name="status" value="Closed"' . isSelected($param_status,'Closed',' checked') . '> Closed</label></li></ul>'

    )
];

$appliedFiltersDesktop = (object) [
    'visible' => 'desktop',
    'state' => 'static',
    'header' => 'Applied Filters',
    'controls' => array(
        '<div class="tag-group"><a href="#" class="tag tag-daterange">Date Range: ' .$param_daterange. '<i class="fa fa-times"></i></a> <a href="#" class="tag tag-kind">Kind: ' .$param_kind. '<i class="fa fa-times"></i></a> <a href="#" class="tag tag-type">Type: ' .$param_type. '<i class="fa fa-times"></i></a> <a href="#" class="tag tag-status">Status: ' .$param_status. '<i class="fa fa-times"></i></a> <a href="#" class="tag tag-status tag-title hidden">Title: ' .$param_title. '<i class="fa fa-times"></i></a> <a href="#" class="tag tag-status tag-firstname hidden">First Name: ' .$param_firstname. '<i class="fa fa-times"></i></a> <a href="#" class="tag tag-status tag-lastname hidden">Last Name: ' .$param_lastname. '<i class="fa fa-times"></i></a></div>'
    )
];

$appliedFiltersMobile = (object) [
    'visible' => 'mobile',
    'state' => 'static',
    'controls' => array(
        '<div class="tag-group" id="mobile-show-additional"><a href="#" class="tag tag-dateange">Date Range: ' .$param_daterange. '<i class="fa fa-times"></i></a> <a href="#" class="tag tag-kind">Kind: ' .$param_kind. '<i class="fa fa-times"></i></a> <a href="#" class="tag tag-type">Type: ' .$param_type. '<i class="fa fa-times"></i></a> <a href="#" class="tag tag-status">Status: ' .$param_status. '<i class="fa fa-times"></i></a> <br><br></div>'
    )
];

$sortMobile = (object) [
    'visible' => 'mobile',
    'header' => 'Sort',
    'controls' => array(
        '<select class="form-control js-select2"><option selected>Due Date</option><option>Action Items</option><option>Assessment Title</option><option>Assessment Type</option><option>Assessment Status</option><option>Employee Name</option><option>Employee Progress</option><option>Rater Name</option><option>Rater Progress</option></select>'
    )
];


$employeeList = array(
    array(
        'action' => false,
        'title' => '2015 Performance Appraisal - Basille, Victor P.',
        'type' => 'Employee Assessment',
        'status' => 'Evaluate',
        'date' => 'Dec 12, 2015',
        'actions' => array('Start','Delete','View Progress','Manage Rater and Peers','Print'),
        'employeeName' => 'Basille, Victor P.',
        'employeeProgress' => 0,
        'employeeStatus' => 'Not Yet Started',
        'raterName' => 'Crane, Davy L.',
        'raterProgress' => 0,
        'raterStatus' => 'Not Yet Started',
        'peers' => 3,
        'peersComplete' => 0
    ),
    array(
        'action' => true,
        'title' => '2015 Performance Appraisal - Bradford, Julie D.',
        'type' => 'Employee Assessment',
        'status' => 'Evaluate',
        'date' => 'Dec 12, 2015',
        'actions' => array('Resume','Reset','View Progress','Delete','Manage Rater and Peers','Print'),
        'employeeName' => 'Bradford, Julie D.',
        'employeeProgress' => 10,
        'employeeStatus' => 'In Progress',
        'raterName' => 'Juniper, Stephanie P.',
        'raterProgress' => 60,
        'raterStatus' => 'In Progress',
        'peers' => 3,
        'peersComplete' => 1
    ),
    array(
        'action' => false,
        'title' => '2015 Performance Appraisal - Fiedler, Joanne M.',
        'type' => 'Employee Assessment',
        'status' => 'Review',
        'date' => 'Dec 12, 2015',
        'actions' => array('View','Reset','Revert','View Progress','Print'),
        'employeeName' => 'Fiedler, Joanne M.',
        'employeeProgress' => 100,
        'employeeStatus' => 'Submitted',
        'raterName' => 'Fay, Lester P.',
        'raterProgress' => 100,
        'raterStatus' => 'Submitted',
        'peers' => 3,
        'peersComplete' => 3
    ),
    array(
        'action' => true,
        'title' => '2015 Performance Appraisal - Montoya, Alice G.',
        'type' => 'Employee Assessment',
        'status' => 'Evaluate',
        'date' => 'Dec 12, 2015',
        'actions' => array('Start','Delete','View Progress','Manage Rater and Peers','Print'),
        'employeeName' => 'Montoya, Alice G.',
        'employeeProgress' => 100,
        'employeeStatus' => 'In Progress',
        'raterName' => 'Juniper, Stephanie P.',
        'raterProgress' => 0,
        'raterStatus' => 'Not Yet Started',
        'peers' => 3,
        'peersComplete' => 0
    ),
    array(
        'action' => false,
        'title' => '2015 Performance Appraisal - Moore, Rita H.',
        'type' => 'Employee Assessment',
        'status' => 'Closed',
        'date' => 'Dec 12, 2015',
        'actions' => array('Print','Revert','View Progress'),
        'employeeName' => 'Moore, Rita H.',
        'employeeProgress' => 100,
        'employeeStatus' => 'Submitted',
        'raterName' => 'Juniper, Stephanie P.',
        'raterProgress' => 100,
        'raterStatus' => 'Not Yet Started',
        'peers' => 3,
        'peersComplete' => 3
    ),
    array(
        'action' => false,
        'title' => '2015 Performance Appraisal - Park, Jennifer S.',
        'type' => 'Employee Assessment',
        'status' => 'Evaluate',
        'date' => 'Dec 12, 2015',
        'actions' => array('View','Reset','View Progress','Manage Range & Peers','Print'),
        'employeeName' => 'Park, Jennifer S.',
        'employeeProgress' => 100,
        'employeeStatus' => 'Submitted',
        'raterName' => 'Fay, Lester P.',
        'raterProgress' => 60,
        'raterStatus' => 'In Progress',
        'peers' => 3,
        'peersComplete' => 2
    ),
    array(
        'action' => false,
        'title' => '2015 Performance Appraisal - Roley, Phillip A.',
        'type' => 'Employee Assessment',
        'status' => 'Evaluate',
        'date' => 'Dec 12, 2015',
        'actions' => array('View','Reset','View Progress','Manage Range & Peers','Print'),
        'employeeName' => 'Roley, Phillip A.',
        'employeeProgress' => 50,
        'employeeStatus' => 'In Progress',
        'raterName' => 'Fay, Lester P.',
        'raterProgress' => 0,
        'raterStatus' => 'Not Yet Started',
        'peers' => 3,
        'peersComplete' => 1
    ),
    array(
        'action' => true,
        'title' => '2015 Performance Appraisal - Rink, Christopher P.',
        'type' => 'Employee Assessment',
        'status' => 'Evaluate',
        'date' => 'Dec 12, 2015',
        'actions' => array('Start','Reset','View Progress','Manage Range & Peers','Print'),
        'employeeName' => 'Rink, Christopher P.',
        'employeeProgress' => 30,
        'employeeStatus' => 'In Progress',
        'raterName' => 'Juniper, Stephanie P.',
        'raterProgress' => 0,
        'raterStatus' => 'Not Yet Started',
        'peers' => 3,
        'peersComplete' => 0
    ),
    array(
        'action' => false,
        'title' => '2015 Performance Appraisal - Story, Yvonne G.',
        'type' => 'Employee Assessment',
        'status' => 'Approval',
        'date' => 'Dec 12, 2015',
        'actions' => array('View','Reset','View Approval Activity','View Progress','Manage Range & Peers','Print'),
        'employeeName' => 'Story, Yvonne G.',
        'employeeProgress' => 100,
        'employeeStatus' => 'Submitted',
        'raterName' => 'Crane, Davy L.',
        'raterProgress' => 100,
        'raterStatus' => 'Submitted',
        'peers' => 3,
        'peersComplete' => 3
    ),
    array(
        'action' => false,
        'title' => '2015 Performance Appraisal - Wilder, Janice M.',
        'type' => 'Employee Assessment',
        'status' => 'Approval',
        'date' => 'Dec 12, 2015',
        'actions' => array('View','Reset','View Approval Activity','View Progress','Manage Range & Peers','Print'),
        'employeeName' => 'Wilder, Janice M.',
        'employeeProgress' => 100,
        'employeeStatus' => 'In Progress',
        'raterName' => 'Juniper, Stephanie P.',
        'raterProgress' => 0,
        'raterStatus' => 'Not Yet Started',
        'peers' => 3,
        'peersComplete' => 2
    ),
);


function filterEmployees() {

    global $employeeList, $param_kind, $param_type, $param_status, $param_title, $param_firstname, $param_lastname;
    $filtered = array();

    foreach ($employeeList as $employee) {
        $include = true;

        $employeeName = explode(' ',str_replace(',','',$employee['employeeName']));
        $raterName = explode(' ',str_replace(',','',$employee['raterName']));


        // KIND
        if ( $param_kind === 'All' || $param_kind === 'All Assigned' || ( $param_kind === 'Action Items' && $employee['action'] === true ) ) {
            // leave $include alone
        } else {
            $include = false;
        }

        // TYPE
        if ( $param_type === 'Employee' && $employee['type'] === 'Employee Assessment' ) {
            // leave $include alone
        } else {
            $include = false;
        }

        // STATUS
        if ( $param_status === 'All' || ( $param_status === 'All Not Closed' && $employee['status'] !== 'Closed' ) || ( $param_status === 'Evaluate' && $employee['status'] === 'Evaluate' ) || ( $param_status === 'Review' && $employee['status'] === 'Review' ) || ( $param_status === 'Closed' && $employee['status'] === 'Closed' ) || ( $param_status === 'Approval' && $employee['status'] === 'Approval' ) ) {
            // leave $include alone
        } else {
            $include = false;
        }

        // TITLE
        if ( empty($param_title) || (!empty($param_title) && stripos($employee['title'],$param_title) !== false) ) {
            // leave $include alone
        } else {
            $include = false;
        }

        // FIRST NAME
        if ( empty($param_firstname) || (!empty($param_firstname) && stripos($employeeName[1],$param_firstname) !== false) || (!empty($param_firstname) && stripos($raterName[1],$param_firstname) !== false) ) {
            // leave $include alone
        } else {
            $include = false;
        }

        // LAST NAME
        if ( empty($param_lastname) || (!empty($param_lastname) && stripos($employeeName[0],$param_lastname) !== false) || (!empty($param_lastname) && stripos($raterName[0],$param_lastname) !== false) ) {
            // leave $include alone
        } else {
            $include = false;
        }

        if ( $include ) {
            array_push($filtered, $employee);
        }

    }
    return $filtered;
}

function makeFilter($filter){

    // SCREEN SIZE VISIBILITY
    if ( !empty($filter->visible) && $filter->visible === 'mobile' ) {
        $visible = ' search-filter-mobile';
    }
    else if ( !empty($filter->visible) && $filter->visible === 'desktop' ) {
        $visible = ' search-filter-desktop';
    }
    else {
        $visible = '';
    }

    // OPEN OR CLOSED
    if ( !empty($filter->state) && $filter->state === 'closed' ) {
        $closed = ' search-filter-closed';
    } else {
        $closed = '';
    }

    // ABILITY TO TOGGLE
    if ( !empty($filter->state) && ( $filter->state === 'open' || $filter->state === 'closed' ) ) {
        $toggle = ' search-filter-toggle';
        $arrow = '<div class="search-filter-arrow"><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-right"></i></div>';
    } else {
        $toggle = '';
        $arrow = '';
    }

    $html = '';
    $html .= '<div class="search-filter' . $closed . $visible .'">';

    if ( !empty($filter->header) ) {
        $html .= '<div class="search-filter-header' . $toggle . '">';
        $html .= '<div class="search-filter-title">' . $filter->header . '</div>';
        $html .= $arrow;
        $html .= '</div>';
    }

    foreach ($filter->controls as $control) {
        $html .= '<div class="search-filter-control">' . $control . '</div>';
    }

    if ( !empty($filter->footer) ) {
        $html .= '<div class="search-filter-footer">' . $filter->footer . '</div>';
    }
    $html .= '</div>';

    return $html;
}

$filteredEmployees = filterEmployees();

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<style>

    .section-main .section-filters {
        border-right: 1px solid #ddd;
        padding: 20px 15px 20px 0;
        margin: 0;
    }

    .section-main .section-results {
        margin: 0;
        padding: 20px 0 20px;
    }

    .search-filter-desktop,
    .search-filter-mobile,
    .search-filter-closed .search-filter-control,
    .search-filter-closed .search-filter-footer {
        display: none;
    }

    .search-filter {
        padding: 15px 0 20px;
        border-bottom: 1px solid #ddd;
    }
    .search-filter.search-filter-closed {
        padding: 15px 0;
    }

    .search-filter:last-of-type {
        border-bottom: none;
    }

    .search-filter-control .control-label {
        font-weight: bold;
    }

    .search-filter-control .control-label + .list-unstyled {
        margin-top: -10px;
    }

    @media (min-width: 767px) {
        .search-filter-desktop {
            display: block;
        }
    }
    @media (max-width: 766px) {
        .search-filter-mobile {
            display: block;
        }
    }

    .search-filter-header {
        position: relative;
        padding-right: 40px;
        margin-bottom: 10px;
    }

    .search-filter-toggle {
        cursor: pointer;
    }

    .search-filter-title {
        font-size: 16px;
        font-weight: 300;
        color: #555;
    }
    .search-filter-arrow {
        position: absolute;
        top: 50%;
        right: 0;
        width: 20px;
        height: 20px;
        margin-top: -10px;
    }

    .search-filter-arrow i {
        display: none;
        text-align: center;
        font-size: 14px;
        width: 20px;
        height: 20px;
        line-height: 20px;
        color: #09C;
    }

    .search-filter-arrow i:first-child {
        display: block;
    }

    .search-filter-control label {
        font-weight: normal;
    }

    .search-filter-control + .search-filter-control {
        margin-top: 10px;
    }

    .search-filter-footer {
        margin-top: 5px;
    }

    .search-filter.active {
        padding-bottom: 20px;
    }

    .search-filter-closed .search-filter-header {
        margin-bottom: 0;
    }

    .search-filter-closed .search-filter-arrow i {
        display: inline-block;
    }
    .search-filter-closed .search-filter-arrow i:first-child {
        display: none;
    }

    .section-results-header .search-filter {
        padding: 0;
    }

    #modal-filter .modal-body {
        padding: 0 20px;
    }

    .slat-green .title a {
        color: green !important;
    }
    .slat-green {
        border-left-color: green !important;
    }

    @media (max-width: 766px) {
        .eval-progress {
            margin-bottom: 5px;
        }
    }
    .progress-circle {
        border-radius: 50%;
        /*background-color: #5bc0de;*/
        /*color: #fff;*/
        /*text-shadow: 1px 1px 0 rgba(0,0,0,.3);*/
        background-color: #DDD;
        color: #555;
        width: 35px;
        width: 35px;
        line-height: 35px;
        text-align: center;
        font-size: 10px;
        font-weight: 600;
        margin-right: 10px;
    }
    .progress-info {
        font-size: 12px;
    }
    .progress-info .meta-label {
        font-weight: 700;
        color: #666666;
    }

    #show-additional {
        margin-left: -999999px;
        display: inline-block;
    }


    /* renamed flag classes to follow slat conventions and allow flags on non-attention slats */
    .slat .flag {
        display: none;
    }
    .slat-flag {
        padding: 15px 10px;
    }
    .slat-flag .flag {
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
    .slat-flag .flag i {
        display: block;
        position: absolute;
        top: -27px;
        left: 4px;
        font-size: 12px;
        color: #fff;
        text-shadow: 1px 1px 0 rgba(0,0,0,.3);
    }


    /* added a wrapper around progress to prevent the margin jump in collapsable elements */
    .slat-progress {
        padding: 10px 0 0;
    }
    .slat-progress hr {
        margin: 0 0 10px;
    }

    /* removed spacing until we add back in the individual toggle */
    .slat .slat-nested {
        margin: 0;
    }

</style>


<div class="layout layout-search">
    <div class="container">

        <section class="section section-main section-box">
            <div id="show-additional">
                <a href="#" class="btn btn-default collapse-toggle-all" data-toggle-text="Expand All|Collapse All">Collapse All</a>
            </div>
            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm">
                    <section class="section section-filters" data-equalize="layout-columns">
                        <h2>Filters</h2>
                        <div class="search-filters">
                            <form id="assessment-filter-form" action="manager-assessments-dynamic.php" method="get">
                                <?= makeFilter($appliedFiltersDesktop); ?>
                                <?= makeFilter($sortMobile); ?>
                                <?= makeFilter($range); ?>
                                <?= makeFilter($assessments); ?>
                                <?= makeFilter($employees); ?>
                            </form>
                        </div>
                    </section>
                </div>
                <div class="col-md-9">
                    <section class="section section-results" data-equalize="layout-columns">
                        <section class="section section-results-header">
                            <div class="row">
                                <div class="col-md-4">
                                    <h2>Results <?= (count($filteredEmployees)>0)?'<small>Showing 1-'.count($filteredEmployees).' of '.count($filteredEmployees).'</small>':''; ?></h2>
                                    <?= makeFilter($appliedFiltersMobile); ?>
                                </div>



                                <div class="col-md-8 hidden-xs hidden-sm">
                                    <div class="section-results-header-sort">
                                        <div class="dropdown" id="desktop-show-additional">
                                            <a class="btn btn-default" data-toggle="dropdown" href="#">Sort By: Action Items<i class="fa fa-sort"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="active"><a href="#">Due Date</a></li>
                                                <li><a href="#">Action Items</a></li>
                                                <li><a href="#">Assessment Title</a></li>
                                                <li><a href="#">Assessment Type</a></li>
                                                <li><a href="#">Assessment Status</a></li>
                                                <li><a href="#">Employee Name</a></li>
                                                <li><a href="#">Employee Progress</a></li>
                                                <li><a href="#">Rater Name</a></li>
                                                <li><a href="#">Rater Progress</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section">


                            <?php foreach ($filteredEmployees as $employee) {

                                if ( $employee['action'] === true ) {
                                    $flag = ' slat-flag';
                                    $flag_html = '<div class="flag"><i class="fa fa-flag"></i></div>';
                                } else {
                                    $flag = '';
                                    $flag_html = '';
                                }

                                $actions = '';
                                foreach ($employee['actions'] as $action) {
                                    $actions .= '<li><a href="#">'.$action.'</a></li>';
                                }

                            ?>
                            <div class="slat slat-callout<?= $flag ?>">
                                <?= $flag_html ?>
                                <div class="slat-default">
                                    <div class="title">
                                        <a href="#"><?= $employee['title'] ?></a>
                                    </div>
                                    <ul class="meta">
                                        <li><span class="meta-type"><?= $employee['type'] ?></span></li>
                                        <li><span class="meta-label">Status:</span><span class="meta-value"><?= $employee['status'] ?></span></li>
                                        <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value"><?= $employee['date'] ?></span></li>
                                    </ul>
                                    <div class="action action-split">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default btn-sm hidden-xs"><?= $employee['actions'][0] ?></a>
                                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-caret-down"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <?= $actions ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="slat-nested">
                                    <div class="collapse-group collapse-group-all in">
                                        <div class="slat-progress">
                                            <hr style="border-top: 1px solid #ddd;">
                                            <div class="row">
                                                <div class="eval-progress col-xs-12 col-sm-4">
                                                    <div class="progress-circle pull-left">
                                                        <?= $employee['employeeProgress'] ?>%
                                                    </div>
                                                    <div class="progress-info">
                                                        <span class="meta-label">EMPLOYEE</span> - <?= $employee['employeeStatus'] ?><br>
                                                        <?= $employee['employeeName'] ?>
                                                    </div>
                                                </div>
                                                <div class="eval-progress col-xs-12 col-sm-4">
                                                    <div class="progress-circle pull-left">
                                                        <?= $employee['raterProgress'] ?>%
                                                    </div>
                                                    <div class="progress-info">
                                                        <span class="meta-label">RATER</span> - <?= $employee['raterStatus'] ?><br>
                                                        <?= $employee['raterName'] ?>
                                                    </div>
                                                </div>
                                                <div class="eval-progress col-xs-12 col-sm-4">
                                                    <div class="progress-circle pull-left">
                                                        <?= round(($employee['peersComplete'] / $employee['peers']) * 100 ) ?>%
                                                    </div>
                                                    <div class="progress-info">
                                                        <span class="meta-label">PEERS COMPLETE</span><br>
                                                        <?= $employee['peersComplete'] ?> OF <?= $employee['peers'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php }

                            if ( count($filteredEmployees) === 0 ) {
                                echo '<div class="slat">
                                    <div class="slat-message">
                                        <h3>There are no items that match the selected filters.</h3>
                                    </div>
                                </div>';
                            }

                            ?>

                        </section>

                        <?php
                            $stickybar = array(
                                'sets' => array(
                                    array(
                                        'position' => 'left',
                                        'classes' => array('visible-xs','visible-sm'),
                                        'html' => '<a href="#modal-filter" class="btn btn-default" data-toggle="modal">Filter Results</a>',
                                    ),
                                ),
                            );
                            echo createStickybar($stickybar);
                        ?>

                    </section><!-- /section-main -->
                </div><!-- /column -->
            </div><!-- /row -->
        </section>


    </div><!-- /container -->
</div><!-- /layout -->

<!-- Modal -->
<div id="modal-filter" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Filter Results</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->


<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $('.js-select2').select2();

        $(document)
            .on('click', '.search-filter-toggle', function(){
                $(this).closest('.search-filter').toggleClass('search-filter-closed');
                $(window).resize();
            })
            .on('change', '.js-select-daterange', function(){
                if ( $(this).val() === 'Custom Range' ) {
                    $('.js-select-daterange-custom').show().find('input:eq(0)').focus();
                } else {
                    $('.js-select-daterange-custom').hide();
                }
            });

        $('#modal-filter').on('show.bs.modal', function() {
            $('.js-select2').each(function(){
                $(this).select2("destroy");
            });
            $(this).find('.modal-body').html($('.search-filters').html());
            $('.js-select2').select2();
            $('.search-filters').empty();
        });
        $('#modal-filter').on('hidden.bs.modal', function() {
            $('.js-select2').each(function(){
                $(this).select2("destroy");
            });
            $('.search-filters').append($('#modal-filter .modal-body').html());
            $('.js-select2').select2();
            $('#modal-filter .modal-body').empty();

        });
        $('.slat .btn').click(function(e){
            e.preventDefault();
        });
    });



    // Ok load, check window size and position how additional button accordingly
    onResize = function() {
        if($(window).width() <= 960) {
            $("#show-additional").appendTo("#mobile-show-additional").css("margin-left", "0");
        } else {
            $("#show-additional").prependTo("#desktop-show-additional").css("margin-left", "0");
        }
    }
    $(document).ready(onResize);
    $(window).resize(onResize);



    function rangeCheck() {
        if ($('select#daterange').val() != 'Custom Range'){
            $('input[name=daterange-start]').prop('disabled', true);
            $('input[name=daterange-end]').prop('disabled', true);
        }
        else {
            $('input[name=daterange-start]').prop('disabled', false);
            $('input[name=daterange-end]').prop('disabled', false);
        }
    };


    $(document)
        .on('click', 'input[type=radio], .form-submit-button', function() {
            rangeCheck();
            $('#assessment-filter-form').submit();
        })
        .on('click', '.form-submit-button', function() {
            rangeCheck();
            $('#assessment-filter-form').submit();
        })
        .on('change', 'select#department', function() {
            rangeCheck();
            $('#assessment-filter-form').submit();
        })
        .on('change', 'select#daterange', function() {
            if($(this).val() != 'Custom Range'){
                rangeCheck();
                $('#assessment-filter-form').submit();
            }
        })
        .on('click', '.tag-daterange', function() {
            rangeCheck();
            $('#daterange').val('Last 12 Months');
            $('input[name=daterange-start]').val('');
            $('input[name=daterange-end]').val('');
            $('#assessment-filter-form').submit();
        })
        .on('click', '.tag-kind', function() {
            rangeCheck();
            $('.action-items').prop('checked', true);
            $('#assessment-filter-form').submit();
        })
        .on('click', '.tag-type', function() {
            rangeCheck();
            $('.employee').prop('checked', true);
            $('#assessment-filter-form').submit();
        })
        .on('click', '.tag-status', function() {
            rangeCheck();
            $('.all-not-closed').prop('checked', true);
            $('#assessment-filter-form').submit();
        })
        .on('click', '.tag-title', function() {
            rangeCheck();
            $('.title').val('');
            $('#assessment-filter-form').submit();
        })
        .on('click', '.tag-firstname', function() {
            rangeCheck();
            $('.firstname').val('');
            $('#assessment-filter-form').submit();
        })
        .on('click', '.tag-lastname', function() {
            rangeCheck();
            $('.lastname').val('');
            $('#assessment-filter-form').submit();
        });


    $(document).ready(function () {
        if ($('select#daterange').val() == 'Custom Range'){
            $('.js-select-daterange-custom').show();
        }
        if($('.title').val()) {
            $('.tag-title').removeClass('hidden');
        }
        if($('.firstname').val()) {
            $('.tag-firstname').removeClass('hidden');
        }
        if($('.lastname').val()) {
            $('.tag-lastname').removeClass('hidden');
        }
    });

    // ----------------------------------
    //  Slat Nested Collapse Toggle Top Level
    // ----------------------------------
    $('.collapse-group-all').collapse({
      toggle: false
    });
    $('.collapse-toggle-all').click(function(e){
        $('.collapse-group-all').collapse('toggle');
        e.preventDefault();
    });
    $('.collapse-group-all').on('shown.bs.collapse hidden.bs.collapse', function(){
        $(window).resize();
    });

</script>
<?= createSiteEnd(); ?>