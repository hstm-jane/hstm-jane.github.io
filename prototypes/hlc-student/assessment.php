
<!--Font Awesome 4.7 - only using on this page for mock purpose. -->
<script src="https://use.fontawesome.com/628fabb647.js"></script>

<style>
  body.modal-open {
    /*position: fixed;*/
  }
</style>
<?php

/*  =============================================================================
Includes
========================================================================== */

switch ($_SERVER['HTTP_HOST']) {
    // case 'hlc.dev':
    case 'hstm-hccdemo-rater.patternmanager.com':
        $pattern_config = 'includes/helpers/patterns.config.hccdemo-rater.php';
        break;
    case 'hstm-hccdemo-employee.patternmanager.com':
        $pattern_config = 'includes/helpers/patterns.config.hccdemo-employee.php';
        break;
    default:
        $pattern_config = 'includes/helpers/patterns.config.php';
}
include $pattern_config;

include 'includes/helpers/start/start.php';
include 'includes/helpers/prototype-nav/prototype-nav.php';
include 'includes/helpers/scripts/scripts.php';
include 'includes/helpers/end/end.php';
include '../shared/patterns/include.php';
include 'includes/data/assessments.php';


/*  =============================================================================
Constants
========================================================================== */

// states: 0:eval, 1:review, 2:approval, 3:signoff type, 4:signoff remote, 5:completed
$states = array('Evaluation','Review','Approval','Review','Review','Completed');
$pageTitles = array('Assessment Summary','Assessment Review','Assessment Approval','Assessment Sign Off','Assessment Sign Off','Assessment Sign Off');
$emps = array('','Chamberland, Marie S.','Conner, Rosalyn F.','Flangan, Simon P.',
'Franks, Iva R.','Juniper, Stephanie P.','Lewis, Audrey K.','Montoya, Alice G.','Park, Jennifer S.','Bruno, Brad K.' );
$employeeID = 'employee';
$raterID = 'rater';


/*  =============================================================================
Variables
========================================================================== */

$assessmentID = (!empty($_GET['assessment']))?$_GET['assessment']:'competency-1';
$userID = ((!empty($_GET['user']))?$_GET['user']:'employee');
$stateID = (!empty($_GET['state']))?intval($_GET['state']):0;
$quickrate = (!empty($_GET['quickrate']))?intval($_GET['quickrate']):0;
$ratingSetID = (!empty($_GET['progress']))?intval($_GET['progress']):0;
$empID = (!empty($_GET['employee']))?intval($_GET['employee']):0;



/*  =============================================================================
State Based Overrides
========================================================================== */

if ( $stateID === 1 || $stateID === 6  ) {
    $ratingSetID = 5;
}
if ( $stateID === 2 || $stateID === 4 || $stateID === 5 ) {
    $ratingSetID = 6;
}


/*  =============================================================================
Setup & Helpers
========================================================================== */

// shortcuts
$assessment = $assessments[$assessmentID];
$sections = $assessment['sections'];
$statements = $assessment['statements'];
$actors = $assessment['actors'];
$ratingSet = $assessment['ratingSets'][$ratingSetID];
$user = $actors[$userID];
$employee = $actors[$employeeID];
$rater = $actors[$raterID];


// determine assessment type by user relationship to employee
switch ( $user ) {
    case $employee:
        $type = 'Self';
        break;
    case $rater:
        $type = 'Employee';
        break;
    default:
        $type = 'Peer';
}

// determine first actor user or rater
$viewAsID = ($stateID === 0)?$userID:$raterID;


function makeCommentSummary($comment, $attachment) {
    if ( strlen($comment) > 200 ) {
        $comment = substr(strip_tags($comment),0,200) . '&hellip; <a href="#" class="js-rating-details" data-params="{actorParams}">More</a>';
    } else {
        $comment = strip_tags($comment);
    }
    // if ($attachment == true) {
    //     return '<i class="fa fa-paperclip fa-fw actor__summary-attachment"></i>&nbsp;<span class="actor__summary-date">{date}:</span> ' . $comment;
    // }
    // else {
        return '<span class="actor__summary-date">{date}:</span> ' . $comment;
    // }
}



function makeRatingControl($ratings,$rating,$quickrate,$role = false,$id = 0, $attachment) {
    $html = "";
    if ($attachment == true) {
        $html .=  '<a href="#" class="js-rating-details" data-params="assessment=competency-1&amp;statement=statement-4&amp;user=rater&amp;progress=3&amp;actor=employee"><i class="fa fa-paperclip fa-fw actor__summary-attachment"></i></a>';
    }
   
    $html .= '<div class="rating-control'.(($role)?' rating-control--'.$role:'').'">';
   
    $html .= '<div class="rating-control-row">';
    $label = 'Not Yet Rated';
    
    if ($quickrate == 1){
        $html .= '<a href="#modal-quickrate" data-toggle="modal" class="quickrate">';
    }
    else if ($quickrate == 2){
        $html .= '<a href="#modal-quickrate1" data-toggle="modal" class="quickrate2">';
    }
    $ratingOptionId = 0;
    foreach ($ratings as $option) {
        
        $isSelected = ($rating !== false && $ratings[$rating][0] === $option[0]);
        $isNA = ($option[0] == 'Not Applicable');
        if ($isSelected) {
            $label = $option[0];
        }
        $html .= '<div class="rating-control-cell rating-option-'.$ratingOptionId.'">';
        
        // if ($quickrate == 1 || $quickrate == 2){
        
        //     $html .= '<span class="rating-option rating-quickrate'.(($isNA)?' rating-quickrate-na':'').'"></span>';
        // }
        // else {
        $html .= '<span class="rating-option'.(($isNA)?' rating-option-na':'').(($isSelected)?' rating-selected':'').'"></span>';
        // }
        
        $html .= '</div>';
        $ratingOptionId ++;
    }
    
    
    $html .= '<div class="rating-control-cell"><span class="rating-label" data-label="'.$label.'">'.$label.'</span></div>';
    if ($quickrate == 1 || $quickrate == 2){
        $html .= '</a>';
    }
    
    if ($quickrate == 1 || $quickrate == 2){
        if ($quickrate == 1){
            $html .= '<div class="rating-control-row quickrate-available"><a href="#modal-quickrate" data-toggle="modal"  data-id="'.$id.'" class="quickrate">Quick Rate</a></div>';
        }
        else if ($quickrate == 2){
            $html .= '<div class="rating-control-row quickrate-available"><a href="#modal-quickrate1" data-toggle="modal" data-id="'.$id.'" class="quickrate2">Quick Rate</a></div>';
        }
    }
    $html .= '</div>';
    $html .= '</div>';
    
    return $html;
}


/*  =============================================================================
Header & Focus Bar setup
========================================================================== */

// data for header & focus bar

$title = $pageTitles[$stateID];
$patterns['start']['title'] = $patterns['focus']['title'] = $title ;
$patterns['header']['userName'] = $user['nameFirstLast'];
$patterns['header']['userImage'] = '<img src="'.$user['image'].'">';
//$patterns['focus']['icon'] = '<div class="fph-cell fph-cell-icon"><div class="fph-icon" style="overflow:hidden;"><i class="hs-icons-assessment"></i></div><div class="fph-icon-label"><span>'.$type.' Assessment</span></div></div>';
$patterns['focus']['icon'] = '<div class="fph-cell fph-cell-icon"><div class="fph-icon" style="padding-top:10px"><i class="hs-icons-assessment"> </i></div><div class="fph-icon-label"><span>'.$type.' Assessment </span></div></div>';

if(isset($_GET['return'])) {
    $patterns['focus']['meta_primary'] = array(
    array(
    'label' => '.',
    'value' => '<a href="/assessment-overview.php?return" class="meta-value"><i class="fa fa-chevron-left"></i> Return to Rater Overview</a>',
    'attributes' => array(
    array('class','meta-hidden-xs'),
    )
    )
    );
}

$patterns['focus']['meta_secondary'] = array(
array(
'label' => 'For Assessment:',
'value' => $assessment['title']
),
);

if ( $userID === $raterID ) {
    $patterns['header']['mainNav'] = '
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
    <li class="visible-xs"><a href="#">Logout</a></li>';
    $patterns['header']['mainNavActive'] = 'raters';
}
// $patterns['focus']['action'] = '<a href="#modal-print" class="btn btn-focus" data-toggle="modal">Print <i class="fa fa-chevron-right"></i></a>';

if ( $stateID === 0 ) {
    
    // determine # of statements, determine # of employee rated statements in set
    $chart = array();
    $progress = 0;
    foreach ($ratingSet as $statement) {
        foreach ($statement as $actor) {
            if ( $actor['id'] === $userID ) {
                $progress++;
            }
        }
    };
    $percent = round( $progress / count($assessment['statements']) * 100);
    for ($i=0;$i<count($assessment['statements']);$i++) {
        array_push($chart, '[1,'.(($progress-- > 0)?'1':'0').']');
    }
    
    $patterns['focus']['supporting'] = '
    <figure class="fph-chart-holder">
    <canvas class="fph-chart" data-type="Doughnut" data-segments="['.implode(',',$chart).']" width="108" height="108"></canvas>
    <figcaption>'.$percent.'%</figcaption>
    </figure>';
    
}


/*  =============================================================================
Assessment Content (should go in assessment class)
========================================================================== */

// build out sections / statements / actors
$sectionsHTML = '';
foreach ($sections as $section) {
    $sectionHTML = '';
    $sectionAverage = '';
    
    if ( $section['average'] && $userID === $raterID ) {
        // temporary section average until I can calculate it
        $sectionAverage = '<span class="average-rating">Section Rating: {rating}</span>';
        $sectionAverage = str_replace('{rating}', file_get_contents('includes/helpers/assessment/templates/definitions.html'), $sectionAverage);
        $sectionAverage = str_replace('{params}', 'assessment='.$assessmentID, $sectionAverage);
        $sectionAverage = str_replace('{label}', 'Pending', $sectionAverage);
    }
    
    // blank state for dynamic section in evaluate state
    if ( $section['dynamic'] && count($section['statements']) === 0 && $stateID === 0 ) {
        
        $sectionHTML = file_get_contents('includes/helpers/assessment/templates/section.dynamic.html');
        $sectionHTML = str_replace('{title}', $section['title'], $sectionHTML);
        $sectionHTML = str_replace('{action}', file_get_contents('includes/helpers/assessment/templates/section.dynamic.action.html'), $sectionHTML);
        $sectionHTML = str_replace('{average}', '', $sectionHTML);
        $sectionHTML = str_replace('{statements}', file_get_contents('includes/helpers/assessment/templates/section.dynamic.blank.html'), $sectionHTML);
        $sectionHTML = str_replace('{object}', strtolower($section['dynamic']), $sectionHTML);
        $sectionHTML = str_replace('{objectCapitalized}', ucfirst($section['dynamic']), $sectionHTML);
        $sectionHTML = str_replace('{select}', '', $sectionHTML);
        
    } else {
        if ( $section['dynamic'] && count($section['statements']) > 0 && $stateID === 0 ) {
            $sectionHTML = file_get_contents('includes/helpers/assessment/templates/section.dynamic.html');
            $sectionHTML = str_replace('{select}', file_get_contents('includes/helpers/assessment/templates/section.dynamic.footer.html'), $sectionHTML);
            $sectionHTML = str_replace('{action}', '', $sectionHTML);
            $sectionHTML = str_replace('{object}', strtolower($section['dynamic']), $sectionHTML);
            $sectionHTML = str_replace('{objectCapitalized}', ucfirst($section['dynamic']), $sectionHTML);
        }
        else if ( count($section['statements']) > 0 ) {
            $sectionHTML = file_get_contents('includes/helpers/assessment/templates/section.static.html');
        }
        
        $sectionHTML = str_replace('{title}', $section['title'], $sectionHTML);
        $sectionHTML = str_replace('{average}', $sectionAverage, $sectionHTML);
        
        // making the statements
        $statementsHTML = '';
        foreach ($section['statements'] as $statementID) {
            
            // need to set these vars up for later
            $statement = $statements[$statementID];
            if(isset($_GET['return'])) {
                $statementURL = '/assessment-statement.php?assessment='.$assessmentID.'&statement='.$statementID.'&user='.$userID.'&state='.$stateID.'&progress='.$ratingSetID.'&return';
            }
            else {
                $statementURL = '/assessment-statement.php?assessment='.$assessmentID.'&statement='.$statementID.'&user='.$userID.'&state='.$stateID.'&progress='.$ratingSetID;
            }
            $statementRatings = $statement['options']['ratings'];
            $userRating = (!empty($ratingSet[$statementID][$userID]))?$ratingSet[$statementID][$userID]:false;
            $userRole = false;
            $actorsShowHTML = '';
            $actorsHideHTML = '';
            
            // start the statements
            $statementHTML = file_get_contents('includes/helpers/assessment/templates/statement.overview.html');
            $statementHTML = str_replace('{title}', '<a href="'.$statementURL.'">'.$statement['title'].'</a>', $statementHTML);
            $statementHTML = str_replace('{description}', $statement['description'], $statementHTML);
            
            // loop through the actors and match up their ratings
            foreach ($actors as $actorID => $actor) {
                
                // set these up for later
                $actorIsUser = ($actorID === $viewAsID);
                $actorRating = (!empty($ratingSet[$statementID][$actorID]))?$ratingSet[$statementID][$actorID]:false;
                $actorVisible = false;
                $actorName = (($actor['role'] === 'peer' && $assessment['optionsShowPeerNames'] === false && $actorIsUser === false)?ucfirst(str_replace('-', ' ', $actorID)):$actor['nameLastFirst']);
                $actorModifiers = ' actor--'.$actor['role'];
                $actorParams = 'assessment='.$assessmentID.'&statement='.$statement['id'].'&user='.$viewAsID.'&progress='.$ratingSetID.'&actor='.$actorID;
                
                // start the actor
                $actorHTML = file_get_contents('includes/helpers/assessment/templates/actor.html');
                $actorHTML = str_replace('{role}', $actor['role'], $actorHTML);
                
                // update actor (after determining rating)
                if ( $actorRating ) {
                    $actorModifiers .= ' actor--rated';
                    $actorHTML = str_replace('{name}', '<a href="#" class="js-rating-details" data-params="{actorParams}">'.$actorName.'</a>', $actorHTML);
                    $actorHTML = str_replace('{summary}', makeCommentSummary($actorRating['comment'],rand(0, 1)), $actorHTML);
                    $actorHTML = str_replace('{date}', $actorRating['date'], $actorHTML);
                    $actorHTML = str_replace('{actorParams}', $actorParams, $actorHTML);
                    if ($actorIsUser){
                        $actorHTML = str_replace('{rating}', makeRatingControl($statementRatings,$actorRating['rating'],$quickrate,$actor['role'],$statementID,rand(0, 1)), $actorHTML);
                    }
                    else {
                        $actorHTML = str_replace('{rating}', makeRatingControl($statementRatings,$actorRating['rating'],false,$actor['role'],$statementID,rand(0, 1)), $actorHTML);
                    }
                }
                else if ($actorIsUser) {
                    $actorHTML = str_replace('{name}', $actorName, $actorHTML);
                    $actorHTML = str_replace('{rating}', makeRatingControl($statementRatings,false,$quickrate,$actor['role'],$statementID,rand(0, 1)), $actorHTML);
                    $actorHTML = str_replace('{summary}', '', $actorHTML);
                }
                else {
                    $actorHTML = str_replace('{name}', $actorName, $actorHTML);
                    $actorHTML = str_replace('{rating}', makeRatingControl($statementRatings,false,false,$actor['role'],$statementID,rand(0, 1)), $actorHTML);
                    $actorHTML = str_replace('{summary}', '', $actorHTML);
                }
                
                // update the modifying classes (after determining rating)
                $actorHTML = str_replace('{modifiers}', $actorModifiers, $actorHTML);
                
                // if the actor is the user, make them first
                if ( $actorIsUser ) {
                    $userRole = $actor['role'];
                    if ( $actorRating['visible'] ) {
                        $actorsShowHTML = $actorHTML . $actorsShowHTML;
                    } else {
                        $actorsHideHTML = $actorHTML . $actorsHideHTML;
                    }
                } else {
                    if ( $actorRating['visible'] || $stateID === 4 || $stateID === 5 ) {
                        $actorsShowHTML .= $actorHTML;
                    } else {
                        $actorsHideHTML .= $actorHTML;
                    }
                }
            }
            
            // handle collapse-group formatting
            if ( $actorsHideHTML !== '') {
                $actorsHideHTML = '<div class="collapse-group collapse">' . $actorsHideHTML . '</div>';
                if ( $actorsShowHTML !== '' ) {
                    $actorsHideHTML .= '<a href="#" class="collapse-toggle" data-toggle-text="Show Additional Rating Details|Hide Additional Rating Details">Show Additional Rating Details</a>';
                } else {
                    $actorsHideHTML .= '<a href="#" class="collapse-toggle" data-toggle-text="Show Rating Details|Hide Rating Details">Show Rating Details</a>';
                }
            }
            
            $statementHTML = str_replace('{statementid}', $statementID, $statementHTML);
            // Rating & Meta Rating
            if ( $userRating ) {
                $statementHTML = str_replace('{rating}', (($actorsShowHTML === '')?makeRatingControl($statementRatings,$userRating['rating'],$quickrate,$userRole,$statementID,false):''), $statementHTML);
                $metaRatingHTML = file_get_contents('includes/helpers/assessment/templates/statement.overview.metaRating.html');
                $metaRatingHTML = str_replace('{label}', 'My Rating:', $metaRatingHTML);
                $metaRatingHTML = str_replace('{rating}', $statementRatings[$userRating['rating']][0], $metaRatingHTML);
                $statementHTML = str_replace('{metaRating}', $metaRatingHTML, $statementHTML);
            }
            else {
                $statementHTML = str_replace('{rating}', (($actorsShowHTML === '')?makeRatingControl($statementRatings,false,$quickrate,$userRole,$statementID,false):''), $statementHTML);
                $statementHTML = str_replace('{metaRating}', '', $statementHTML);
            }
            
            
            // Actions Button
            if ( $stateID !== 0 ) {
                $actionsHTML = file_get_contents('includes/helpers/assessment/templates/statement.overview.actions.view.html');
            }
            else if ( $userRating ) {
                $actionsHTML = file_get_contents('includes/helpers/assessment/templates/statement.overview.actions.edit.html');
            }
            else {
                $actionsHTML = file_get_contents('includes/helpers/assessment/templates/statement.overview.actions.rate.html');
            }
            $actionsParams = 'assessment='.$assessmentID.'&statement='.$statement['id'].'&user='.$viewAsID.'&progress='.$ratingSetID;
            $actionsHTML = str_replace('{statement}', $statementURL, $actionsHTML);
            $actionsHTML = str_replace('{all}', $actionsParams, $actionsHTML);
            $actionsHTML = str_replace('{single}', $actionsParams .'&actor='.$userID.'&editable=true', $actionsHTML);
            $statementHTML = str_replace('{actions}', $actionsHTML, $statementHTML);
            
            
            
            // fill the actors into their appropriate containers
            $statementHTML = str_replace('{show}', $actorsShowHTML, $statementHTML);
            $statementHTML = str_replace('{hide}', $actorsHideHTML, $statementHTML);
            
            // if review & reflective
            if ( $stateID === 1 && $assessment['optionsReflectivePlan'] ) {
                $statementHTML = '<div class="checkable">' . $statementHTML;
                $statementHTML .= '<div class="select"><label><input type="checkbox" class="checkbox"><span class="icon"></span></label></div></div>';
            }
            
            $statementsHTML .= $statementHTML;
        }
        $sectionHTML = str_replace('{statements}', $statementsHTML, $sectionHTML);
    }
    $sectionsHTML .= $sectionHTML;
}

// stickybar options

if($empID != 0){
    $employeeName = $emps[$empID];
}
else {
    $employeeName = $assessment['actors']['employee']['nameFirstLast'];
}

//  $employeeName = ()?:;
$stickybarNonRaterEvaluation = array(
'sets' => array(
array(
'classes' => array('hidden-xs','hidden-sm'),
'html' => '
<a href="#" class="btn btn-success js-submit">Submit</a>
<a href="#" class="btn btn-default js-toggle-additional" data-button-text="Expand All|Collapse All">Expand All</a>
<div class="btn-group dropup">
<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Employee <i class="fa fa-caret-up"></i></a>
<ul class="dropdown-menu">
<li class="dropdown-header">About '.$employeeName.'</li>
<li><a href="#modal-employee-profile" data-toggle="modal">Profile</a></li>
<li><a href="#modal-employee-todo" data-toggle="modal">To-Do List</a></li>
<li><a href="#modal-employee-completions" data-toggle="modal">Completions</a></li>
</ul>
</div>
<a href="#" class="btn btn-default">Return</a>
',
),
array(
'classes' => array('visible-xs','visible-sm'),
'html' => '
<a href="#" class="btn btn-success js-submit">Submit</a>
<div class="btn-group dropup">
<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Employee <i class="fa fa-caret-up"></i></a>
<ul class="dropdown-menu">
<li class="dropdown-header">About '.$employeeName.'</li>
<li><a href="#modal-employee-profile" data-toggle="modal">Profile</a></li>
<li><a href="#modal-employee-todo" data-toggle="modal">To-Do List</a></li>
<li><a href="#modal-employee-completions" data-toggle="modal">Completions</a></li>
</ul>
</div>
<a href="#" class="btn btn-default">Return</a>

',
),
),
);

$stickybarRaterEvaluation = array(
'sets' => array(
array(
'classes' => array('hidden-xs','hidden-sm'),
'html' => '
<a href="#" class="btn btn-success js-submit-to-review">Submit</a>
<a href="#" class="btn btn-default js-toggle-additional" data-button-text="Expand All|Collapse All">Expand All</a>
<div class="btn-group dropup">
<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Employee <i class="fa fa-caret-up"></i></a>
<ul class="dropdown-menu">
<li class="dropdown-header">About '.$employeeName.'</li>
<li><a href="#modal-employee-profile" data-toggle="modal">Profile</a></li>
<li><a href="#modal-employee-todo" data-toggle="modal">To-Do List</a></li>
<li><a href="#modal-employee-completions" data-toggle="modal">Completions</a></li>
<li><a href="#">Assignment Completion Report</a></li>
</ul>
</div>
<a href="#" class="btn btn-default">Return</a>
',
),
array(
'classes' => array('visible-xs','visible-sm'),
'html' => '
<a href="#" class="btn btn-success js-submit-to-review">Submit</a>
<div class="btn-group dropup">
<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Employee <i class="fa fa-caret-up"></i></a>
<ul class="dropdown-menu">
<li class="dropdown-header">About '.$employeeName.'</li>
<li><a href="#modal-employee-profile" data-toggle="modal">Profile</a></li>
<li><a href="#modal-employee-todo" data-toggle="modal">To-Do List</a></li>
<li><a href="#modal-employee-completions" data-toggle="modal">Completions</a></li>
<li><a href="#">Asgmt. Compl. Report</a></li>
</ul>
</div>
<a href="#" class="btn btn-default">Return</a>
',
),
),
);

$stickybarRaterReview = array(
'sets' => array(
array(
'classes' => array('hidden-xs','hidden-sm'),
'html' => '
<a href="/assessment.php?assessment='.$assessmentID.'&user=rater&state=3" class="btn btn-success js-submit-to-signoff">Begin Sign off Process</a>
<a href="#" class="btn btn-default js-toggle-additional" data-button-text="Expand All|Collapse All">Expand All</a>
<div class="btn-group dropup">
<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Employee <i class="fa fa-caret-up"></i></a>
<ul class="dropdown-menu">
<li class="dropdown-header">About Stephanie P. Juniper</li>
<li><a href="#">Profile</a></li>
<li><a href="#">To-Do List</a></li>
<li><a href="#">Completions</a></li>
<li><a href="#">Assignment Completion Report</a></li>
</ul>
</div>
<a href="/assessment-overview.php" class="btn btn-default">Cancel</a>
',
),
array(
'classes' => array('visible-xs','visible-sm'),
'html' => '
<a href="/assessment.php?user=rater&state=3" class="btn btn-success js-submit-to-signoff">Sign off</a>
<div class="btn-group dropup">
<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Employee <i class="fa fa-caret-up"></i></a>
<ul class="dropdown-menu">
<li class="dropdown-header">About Stephanie P. Juniper</li>
<li><a href="#">Profile</a></li>
<li><a href="#">To-Do List</a></li>
<li><a href="#">Completions</a></li>
<li><a href="#">Asgmt. Compl. Report</a></li>
</ul>
</div>
<a href="/assessment-overview.php" class="btn btn-default">Cancel</a>
',
),
),
);
if ( $stateID === 0 && $viewAsID !== $raterID ) {
    $stickybar = createStickybar($stickybarNonRaterEvaluation);
}
else if ( $stateID === 0 && $viewAsID === $raterID ) {
    $stickybar = createStickybar($stickybarRaterEvaluation);
}
else if ( $stateID === 1 && $viewAsID === $raterID ) {
    $stickybar = createStickybar($stickybarRaterReview);
}
else {
    $stickybar = '';
}

if ( $stateID === 1 && $assessment['optionsReflectivePlan'] ) {
    $assessmentHTML = file_get_contents('includes/helpers/assessment/templates/assessment.review.html');
}
else if ( $stateID === 2 && $userID === 'rater' && isset($_GET['manager']) ) {
    $assessmentHTML = file_get_contents('includes/helpers/assessment/templates/assessment.approval.manager.html');
}
else if ( $stateID === 2 && $userID === 'rater' ) {
    $assessmentHTML = file_get_contents('includes/helpers/assessment/templates/assessment.approval.rater.html');
}
else if ( $stateID === 3 ) {
    $assessmentHTML = file_get_contents('includes/helpers/assessment/templates/assessment.signoff.type.html');
    $assessmentHTML = str_replace('{back}', 'assessment.php?assessment='.$assessmentID.'&user=rater&state=1', $assessmentHTML);
}
else if ( $stateID === 4 && $userID === 'employee' ) {
    $assessmentHTML = file_get_contents('includes/helpers/assessment/templates/assessment.signoff.remote.employee.html');
}
else if ( $stateID === 4 && $userID === 'rater' ) {
    $assessmentHTML = file_get_contents('includes/helpers/assessment/templates/assessment.signoff.remote.waiting.html');
}
else if ( $stateID === 5 && $userID === 'rater' ) {
    $assessmentHTML = file_get_contents('includes/helpers/assessment/templates/assessment.signoff.remote.rater.html');
}
else if ( $quickrate === 1 ) {
    $assessmentHTML = file_get_contents('includes/helpers/assessment/templates/assessment.quickrate.html');
}
else {
    $assessmentHTML = file_get_contents('includes/helpers/assessment/templates/assessment.html');
}

$assessmentAverage = '';
if ( $userID === $raterID ) {
    // $assessmentAverage = '<span class="average-rating">Assessment Rating: <a href="#" class="js-rating-definitions" data-params="assessment='.$assessmentID.'">Pending<i class="fa fa-fw fa-info-circle"></i></a></span>';
    $assessmentAverage = 'Assessment Rating:  <a href="#" class="js-rating-definitions" data-params="assessment=competency-1">Pending <i class="fa fa-fw fa-info-circle"></i></a>';
}
$assessmentApprovalHistory = '';
if ( isset($_GET['approval']) && $userID === 'rater' ) {
    $assessmentApprovalHistory = ' | <a href="#modal-state-detail-approval" data-toggle="modal">View Approval Activity</a>';
}
$assessmentRejected = '';
if ( isset($_GET['rejected'])) {
    $assessmentRejected = '<section class="section assessment-action-section" id="jump-top">
    <h3>
    <span class="fa-stack fa" style="color:#757575;">
      <i class="fa fa-circle-o fa-stack-2x" style="color:#757575;"></i>
      <i class="fa fa-exclamation fa-stack-1x" style="color:#757575;"></i>
    </span>
      Assessment Rating Rejected</h3>
    <p>The ratings for this assessment have been rejected. Please make any necessary revisions and resubmit the assessment.</p>
        <p><a href="#modal-state-detail-approval" data-toggle="modal">View Approval Activity</a></p>
    </section>';
}
$assessmentHTML = str_replace('{assessmentRejected}', $assessmentRejected , $assessmentHTML);
$assessmentHTML = str_replace('{EmployeeName}', $employeeName , $assessmentHTML);
$assessmentHTML = str_replace('{RaterName}', $rater['nameLastFirst'], $assessmentHTML);
$assessmentHTML = str_replace('{State}', $states[$stateID], $assessmentHTML);
$assessmentHTML = str_replace('{DueDate}', $assessment['due'], $assessmentHTML);
$assessmentHTML = str_replace('{assessmentTitle}', $assessment['title'], $assessmentHTML);
$assessmentHTML = str_replace('{assessmentAverage}', $assessmentAverage, $assessmentHTML);
$assessmentHTML = str_replace('{assessmentApprovalHistory}', $assessmentApprovalHistory, $assessmentHTML);
$assessmentHTML = str_replace('{description}', $assessment['description'], $assessmentHTML);
// add in instructions
$assessmentHTML = str_replace('{sections}', $sectionsHTML, $assessmentHTML);
$assessmentHTML = str_replace('{stickybar}', $stickybar, $assessmentHTML);

if ( isset($_GET['approval']) && $userID === 'rater' ) {
    // $approvalHTML = file_get_contents('includes/helpers/assessment/templates/approval-tabs.html');
    // $approvalHTML = str_replace('{assessment}', $assessmentHTML, $approvalHTML);
    // $approvalHTML = str_replace('{date-5}', date('M j, Y',strtotime('-5 days')), $approvalHTML);
    // $approvalHTML = str_replace('{date-4}', date('M j, Y',strtotime('-4 days')), $approvalHTML);
    // $approvalHTML = str_replace('{date-3}', date('M j, Y',strtotime('-3 days')), $approvalHTML);
    // $approvalHTML = str_replace('{date-2}', date('M j, Y',strtotime('-2 days')), $approvalHTML);
    // $approvalHTML = str_replace('{date-1}', date('M j, Y',strtotime('-1 days')), $approvalHTML);
    // $assessmentHTML = $approvalHTML;
}

$empSignoffAlertHTML = '<div class="alert alert-accent alert-dismissible alert-no-employee-signoff" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4>Employee Has Not Submitted Their Rating </h2>ILorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>';

$empsignoffgrowl = "
<script>
$(function(){
    HealthStream.utilities.growl({
        type: 'warning',
        title: 'Employee Has Not Submitted Their Rating',
        text: 'ILorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        sticky: true
    });
});
</script>";


if(isset($_GET['no-empsignoff-alert1'])) {
    $assessmentHTML = str_replace('{employeesignoffalert}', '', $assessmentHTML);
    $submitToReviewModalTitle = 'Employee has not submitted their rating';
    $submitToReviewModalText = '<p>You have selected to move the Assessment to the review state.</p><ul><li>Once the Assessment is in review the ratings cannot be changed.</li><li>The employee will not be able to complete their rating.</li><li>Employee ratings that have not been either saved/shared will not be displayed.</li><li>Employee ratings that have not been submitted will not be displayed.</li></ul>';
    $submitToReviewModalButtonText = 'Yes, move to Review state anyway';
    $submitToReviewModalButtonType = 'warning';
    $buttonTwoType = 'default';
    $buttonTwoLabel = 'Save and return to Summary';
}
else if(isset($_GET['no-empsignoff-alert2'])) {
    $assessmentHTML = str_replace('{employeesignoffalert}', '', $assessmentHTML);
    $submitToReviewModalTitle = 'Employee has not submitted their rating';
    $submitToReviewModalText = '<p>You have selected to move the Assessment to the review state.</p><ul><li>Once the Assessment is in review the ratings cannot be changed.</li><li>The employee will not be able to complete their rating.</li><li>Employee ratings that have not been either saved/shared will not be displayed.</li><li>Employee ratings that have not been submitted will not be displayed.</li></ul>';
    $submitToReviewModalButtonText = 'Save and return to Summary';
    $submitToReviewModalButtonType = 'success';
    $buttonTwoType = 'default';
    $buttonTwoLabel = 'Yes, move to Review, anyway';
}
else if(isset($_GET['no-empsignoff-alert'])) {
    $assessmentHTML = str_replace('{employeesignoffalert}', '', $assessmentHTML);
    $submitToReviewModalTitle = 'Employee has not submitted their rating';
    $submitToReviewModalText = '<p>You have selected to move the Assessment to the review state.</p><ul><li>Once the Assessment is in review the ratings cannot be changed.</li><li>The employee will not be able to complete their rating.</li><li>Employee ratings that have not been either saved/shared will not be displayed.</li><li>Employee ratings that have not been submitted will not be displayed.</li></ul>';
    $submitToReviewModalButtonText = 'Save and return to Summary';
    $submitToReviewModalButtonType = 'success';
    $buttonTwoType = 'default';
    $buttonTwoLabel = 'Yes, move to Review state anyway';
}
else if(isset($_GET['no-peersignoff-alert'])) {
    $assessmentHTML = str_replace('{employeesignoffalert}', '', $assessmentHTML);
    $submitToReviewModalTitle = 'All peers have not submitted their ratings';
    $submitToReviewModalText = '<p>You have selected to move the Assessment to the review state.</p><ul><li>Once the Assessment is in review the ratings cannot be changed.</li><li>Any peer(s) that have not completed their rating will be unable to do so.</li><li>Any  peer(s) ratings that have not been either saved/shared will not be displayed.</li><li>Any peer(s) ratings that have not been submitted will not be displayed.</li></ul>';
    $submitToReviewModalButtonText = 'Save and return to Summary';
    $submitToReviewModalButtonType = 'success';
    $buttonTwoType = 'default';
    $buttonTwoLabel = 'Yes, move to Review state anyway';
}
else if(isset($_GET['no-emporpeersignoff-alert'])) {
    $assessmentHTML = str_replace('{employeesignoffalert}', '', $assessmentHTML);
    $submitToReviewModalTitle = 'Employee and Peer(s) have not submitted their ratings';
    $submitToReviewModalText = '<p>You have selected to move the Assessment to the review state.</p><ul><li>Once the Assessment is in review the ratings cannot be changed.</li><li>The employee and peer(s) will not be able to complete their ratings.</li><li>Any employee or peer(s) ratings that have not been either saved/shared will not be displayed.</li><li>Any employee or peer(s) ratings that have not been submitted will not be displayed.</li></ul>';
    $submitToReviewModalButtonText = 'Save and return to Summary';
    $submitToReviewModalButtonType = 'success';
    $buttonTwoType = 'default';
    $buttonTwoLabel = 'Yes, move to Review state anyway';
}
else {
    $assessmentHTML = str_replace('{employeesignoffalert}', '', $assessmentHTML);
    $submitToReviewModalTitle = 'You are about to move your ratings to Review state';
    $submitToReviewModalText = '<p>You have selected to move the Assessment to the review state.</p>Once the Assessment is in review the ratings cannot be changed.';
    $submitToReviewModalButtonText = 'Yes, move to Review state';
    $submitToReviewModalButtonType = 'success';
    $buttonTwoType = 'default';
    $buttonTwoLabel = 'Cancel';
}

?>
  <?= createSiteStart($patterns['start']); ?>
    <?= createHeader($patterns['header']); ?>
      <?= createFocus($patterns['focus']); ?>

        <div class="layout layout-assessment">
          <div class="container">
            <section class="section section-main section-box">
              <?= $assessmentHTML ?>
            </section>
          </div>
        </div>
        <div class="modals"></div>
        <?php
if ($quickrate == 1){
    include ('includes/modals/_modal-quickrate.php');
}
else if ($quickrate == 2){
    include ('includes/modals/_modal-quickrate.1.php');
}
?>
          <?php include ('includes/modals/_modal-employee-profile.php'); ?>
            <?php include ('includes/modals/_modal-employee-todo.php'); ?>
              <?php include ('includes/modals/_modal-employee-completions.php'); ?>
                <?php include ('includes/modals/_modal-statements.php'); ?>
                  <?php include ('includes/modals/_modal-goals.php'); ?>
                    <!-- Modal -->
                    <div id="modal-state-detail-approval" class="modal fade" tabindex="-1" aria-hidden="false">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                            <h4 class="modal-title">Approval Activity</h4> </div>
                          <div class="modal-body">
                            <section class="section">
                              <!--<h3>Approval Activity</h3>-->
                              <div class="slat slat-modal">
                                <div class="slat-default">
                                  <div class="title">Sampson, Frieda D.</div>
                                  <ul class="meta">
                                    <li><span class="meta-label">Role:</span><span class="meta-value">HR Approver</span></li>
                                    <li><span class="meta-label">Status:</span><span class="meta-value">Pending</span></li>
                                    <li><span class="meta-label">Iteration:</span><span class="meta-value">1</span></li>
                                  </ul>
                                  <div class="status status-pending"></div>
                                </div>
                              </div>
                              <div class="slat slat-modal slat-callout">
                                <div class="slat-default">
                                  <div class="title">Smith, Carolyn D.</div>
                                  <ul class="meta">
                                    <li><span class="meta-label">Role:</span><span class="meta-value">Education Approver</span></li>
                                    <li><span class="meta-label">Status:</span><span class="meta-value">Accepted</span></li>
                                    <li><span class="meta-label">Iteration:</span><span class="meta-value">1</span></li>
                                    <li class="meta-callout"><span class="meta-label">Date: </span><span class="meta-value">Aug 28, 2016</span></li>
                                  </ul>
                                  <div class="status status-accepted"></div>
                                </div>
                              </div>
                              <div class="slat slat-modal slat-callout">
                                <div class="slat-default">
                                  <div class="title">Delta, Meredith S.</div>
                                  <ul class="meta">
                                    <li><span class="meta-label">Role:</span><span class="meta-value">Manager Level 3</span></li>
                                    <li><span class="meta-label">Status:</span><span class="meta-value">Accepted</span></li>
                                    <li><span class="meta-label">Iteration:</span><span class="meta-value">1</span></li>
                                    <li class="meta-callout"><span class="meta-label">Date: </span><span class="meta-value">Aug 27, 2016</span></li>
                                  </ul>
                                  <div class="status status-success"></div>
                                </div>
                              </div>
                              <div class="slat slat-modal slat-callout">
                                <div class="slat-default">
                                  <div class="title">Barker, Aaron L.</div>
                                  <ul class="meta">
                                    <li><span class="meta-label">Role:</span><span class="meta-value">Manager Level 2</span></li>
                                    <li><span class="meta-label">Status:</span><span class="meta-value">Accepted</span></li>
                                    <li><span class="meta-label">Iteration:</span><span class="meta-value">1</span></li>
                                    <li class="meta-callout"><span class="meta-label">Date: </span><span class="meta-value">Aug 26, 2016</span></li>
                                  </ul>
                                  <div class="status status-success"></div>
                                </div>
                              </div>
                              <div class="slat slat-modal slat-callout">
                                <div class="slat-default">
                                  <div class="title">Peeples, Misty R.</div>
                                  <ul class="meta">
                                    <li><span class="meta-label">Role:</span><span class="meta-value">Manager Level 1</span></li>
                                    <li><span class="meta-label">Status:</span><span class="meta-value">Accepted</span></li>
                                    <li><span class="meta-label">Iteration:</span><span class="meta-value">2</span></li>
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
                              <div class="slat slat-modal slat-callout">
                                <div class="slat-default">
                                  <div class="title">Peeples, Misty R.</div>
                                  <ul class="meta">
                                    <li><span class="meta-label">Role:</span><span class="meta-value">Manager Level 1</span></li>
                                    <li><span class="meta-label">Status:</span><span class="meta-value">Rejected</span></li>
                                    <li><span class="meta-label">Iteration:</span><span class="meta-value">1</span></li>
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


                    </div>
                    <!-- /modal -->

                    <!-- Modal -->
                                           

                    <!-- Modal -->
                    <div id="modal-instructions" class="modal modal-sm fade" tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                            <h4 class="modal-title">Instructions</h4>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-sm-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel orci aliquet, porta nisi quis, semper dolor. Fusce eget quam tristique, ornare neque quis, commodo metus. Lorem ipsum dolor sit amet, consectetur adipiscing
                                  elit.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal">OK</button>
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

                              $('body').on('touchmove', function(e) {
                                if ($('.scroll-disable').has($(e.target)).length) e.preventDefault();
                              });
                              $('body').on('shown.bs.modal', function() {
                                $(this).addClass('scroll-disable');
                              });
                              $('body').on('hidden.bs.modal', function() {
                                $(this).removeClass('scroll-disable');
                              });

                              window.HealthStream = window.HealthStream || {};
                              window.HealthStream.utilities = window.HealthStream.utilities || {};
                              var healthStream = window.HealthStream;

                              $(window).resize(function(e) {
                                // console.log('resize');
                                healthStream.utilities.equalize();
                              });
                              // var heightOutput = document.querySelector('#height');
                              //   var widthOutput = document.querySelector('#width');

                              //   function resize() {
                              //     heightOutput.textContent = window.innerHeight;
                              //     widthOutput.textContent = window.innerWidth;
                              //   }

                              //   window.onresize = resize;
                              $('.statement')
                                .on('shown.bs.collapse hidden.bs.collapse', '.collapse-group', function() {
                                  var $btn = $('.js-toggle-additional');
                                  var label = $btn.attr('data-button-text').split('|');
                                  if ($('.statement .collapse-group').length === $('.statement .collapse-group.in').length) {
                                    $btn.text(label[1]);
                                  } else {
                                    $btn.text(label[0]);
                                  }
                                })
                                .on('show.bs.collapse', '.collapse-group', function() {
                                  $(this).closest('.statement').addClass('statement--expanded');
                                  $('.summary .rating .rating-control-row').hide();
                                })
                                .on('hide.bs.collapse', '.collapse-group', function() {
                                  $(this).closest('.statement').removeClass('statement--expanded');
                                  $('.summary .rating .rating-control-row').show();
                                });

                              $('.js-toggle-additional').on('click', function(e) {
                                e.preventDefault();
                                if ($('.statement .collapse-group').length === $('.statement .collapse-group.in').length) {
                                  $('.statement .collapse-group.in + .collapse-toggle').click();
                                } else {
                                  $('.statement .collapse-group.collapse + .collapse-toggle').click();
                                }
                              });

                              $('.js-rating-details').on('click', function(e) {
                                var params = $(this).attr('data-params');
                                e.preventDefault();
                                $.get("/assessment-modal-rating-details.php?" + params, function(data) {
                                  $('.modals').html(data);
                                  $('#modal-rating-details').modal('show');
                                });
                              });
                              $('.js-rating-definitions').on('click', function(e) {
                                var params = $(this).attr('data-params');
                                e.preventDefault();
                                $.get("/assessment-modal-rating-definitions.php?" + params, function(data) {
                                  // console.log(data);
                                  $('.modals').html(data);
                                  $('#modal-rating-definitions').modal('show');
                                });
                              });
                              $('.js-rating-definitions-qr').on('click', function(e) {
                                var params = $(this).attr('data-params');
                                e.preventDefault();
                                $.get("/assessment-modal-rating-definitions-qr.php?" + params, function(data) {
                                  // console.log(data);
                                  $('.modals').html(data);
                                  $('#modal-rating-definitions').modal('show');
                                  $('#modal-quickrate1').modal('hide');
                                });
                              });

                              // NEEDED FOR DYNAMIC STATEMENTS/GOALS
                              $('a[data-toggle="modalpage"]').click(function(e) {
                                e.preventDefault();
                                var target = $(this).attr('href');
                                $(target).show().siblings('.modal-page').hide();
                              });

                              $('.js-submit').click(function(e) {
                                var growl = {
                                  growlType: 'success',
                                  growlTitle: 'Assessment Submitted',
                                  growlText: encodeURIComponent('<dl class="gritter-class"><dd><?= $patterns['focus']['title']; ?></dd></dl>'),
                                  growlSticky: 'false'
                                }
                                e.preventDefault();
                                HealthStream.utilities.interrupt({
                                  type: 'warning',
                                  title: 'You are about to submit your ratings',
                                  text: 'If you are satistfied with your ratings you may submit them to the rater, but no further changes are allowed.',
                                  actions: [{
                                    type: 'success',
                                    label: 'Yes, submit my ratings',
                                    url: '/?' + $.param(growl),
                                  }, {
                                    label: 'Cancel'
                                  }]
                                });
                              });


                              // SUBMIT TO REVIEW INTERRUPT

                              $('.js-submit-to-review').click(function(e) {
                                e.preventDefault();

                                HealthStream.utilities.interrupt({
                                  type: 'warning',
                                  title: '<?= $submitToReviewModalTitle ?>',
                                  text: '<?= $submitToReviewModalText ?>',
                                  actions: [{
                                      type: '<?= $submitToReviewModalButtonType ?>',
                                      label: "<?= $submitToReviewModalButtonText ?>",
                                      url: '/assessment.php?assessment=<?= $assessmentID ?>&user=rater&state=0&progress=1',
                                    }, {
                                      type: '<?= $buttonTwoType ?>',
                                      label: '<?= $buttonTwoLabel ?>',
                                      url: '/assessment.php?assessment=<?= $assessmentID ?>&user=rater&state=1',
                                    }

                                  ]
                                });
                              });


                              // CHECKABLE FOR REFLECTIVE PLAN
                              $('.checkable .select input[type="checkbox"]').on('change', function() {
                                var $checkbox = $(this);
                                var $checkable = $checkbox.closest('.checkable');

                                if ($checkbox.prop('checked')) {
                                  $checkable.addClass('checkable-checked');
                                } else {
                                  $checkable.removeClass('checkable-checked');
                                }

                                $(document).trigger('checked.hstm.checkable');
                              });
                              $(document).on('checked.hstm.checkable', function() {
                                var $layout = $('.layout-assessment');

                                if ($layout.find('.checkable > .select .checkbox:checked').length > 0) {
                                  $('.layout-assessment').addClass('layout-assessment-reflective');
                                } else {
                                  $('.layout-assessment').removeClass('layout-assessment-reflective');
                                }
                              });
                              $('.js-submit-to-signoff').click(function(e) {
                                var $layout = $('.layout-assessment');
                                if ($layout.find('.checkable .checkbox:checked').length > 0 && $('.js-validate').val() === '') {
                                  e.preventDefault();
                                  $('.js-validate').focus().closest('.form-group').addClass('has-error');
                                }
                              });

                              // CUSTOM DATE RANGE ON COMPLETION MODAL
                              $('.date-range__control').on('change', function() {
                                var $control = $(this);
                                var $custom = $control.siblings('.date-range__custom')
                                if ($control.val() === 'custom') {
                                  $custom.addClass('date-range__custom--open');
                                } else {
                                  $custom.removeClass('date-range__custom--open');
                                }
                              });

                              // DATEPICKERS
                              $('.input-group.date').datepicker({
                                todayBtn: "linked",
                                autoclose: true
                              }).css('position', 'relative');

                              // SIGNOFF TYPE
                              $('input[name="signoff-type"]').on('change', function() {
                                var selected = $('input[name="signoff-type"]:checked').val();
                                $('.signoff-type').removeClass('active');
                                $('#signoff-type-' + selected).addClass('active');
                              });
                              $('input[name="participant-type"]').on('change', function() {
                                var selected = $('input[name="participant-type"]:checked').val();
                                $('.participant-type').removeClass('active');
                                $('#participant-type-' + selected).addClass('active');
                              });
                              $('.js-signoff').click(function(e) {
                                var growl = {
                                  growlType: 'success',
                                  growlTitle: 'Assessment Completed',
                                  growlText: encodeURIComponent('<dl class="gritter-class"><dd><?= $patterns['focus']['title']; ?></dd></dl>'),
                                  growlSticky: 'false'
                                }
                                e.preventDefault();
                                window.location.href = '/?' + $.param(growl);
                              });
                              $('.js-signoff-remote').click(function(e) {
                                var growl = {
                                  growlType: 'success',
                                  growlTitle: 'Signoff Initiated',
                                  growlText: encodeURIComponent('<p>Assessment waiting on employee signoff</p>'),
                                  growlSticky: 'false'
                                }
                                e.preventDefault();
                                window.location.href = '/assessment-overview.php?' + $.param(growl);
                              });
                              $('.quickrate').click(function(e) {
                                $('#modal-quickrate .modal-title').text("Quick Rate: " + $(this).parents('.statement').find(".title a").text());
                                $('#qr-statementid').val($(this).data('id'))
                              });
                              $('.quickrate2').click(function(e) {
                                $('#modal-quickrate1 .modal-title').text("Quick Rate: " + $(this).parents('.statement').find(".title a").text());
                                $('#qr-statementid').val($(this).data('id'))
                              });
                              $('.quickrate-save').click(function(e) {
                                // console.log($('#statement-rating').val());
                                if ($('#statement-rating').val() == "0") {
                                  e.preventDefault();
                                  $('#modal-interrupt').modal('show');

                                } else {
                                  $('#modal-quickrate1').modal('hide');
                                }
                              });
                              $('#qr-save').click(function() {
                                var $statementDiv = $('.statement[data-statementid="' + $('#qr-statementid').val() + '"] .rating-control--rater');
                                var selectedRating = $('#statement-rating').val();
                                var $ratingControlCell = $statementDiv.find('.' + selectedRating);

                                $statementDiv.find('.rating-option').removeClass('rating-selected');
                                $ratingControlCell.find('.rating-option').addClass('rating-selected');
                                $statementDiv.find('.rating-label').text($('#statement-rating option[value="' + selectedRating + '"]').text())
                              });

                              $('#interrupt-action-0').click(function() {
                                $('#modal-interrupt').modal('hide');
                                $('#modal-quickrate1').modal('hide');
                                var $statementDiv = $('.statement[data-statementid="' + $('#qr-statementid').val() + '"] .rating-control--rater');
                                var selectedRating = $('#statement-rating').val();
                                var $ratingControlCell = $statementDiv.find('.' + selectedRating);

                                $statementDiv.find('.rating-option').removeClass('rating-selected');
                                $ratingControlCell.find('.rating-option').addClass('rating-selected');
                                $statementDiv.find('.rating-label').text($('#statement-rating option[value="' + selectedRating + '"]').text())
                              });
                              $('#interrupt-action-1').click(function() {
                                $('#modal-interrupt').modal('hide');

                              });
                              $(window).resize();
                              $('#modal-quickrate').on('show.bs.modal', function() {
                                $(this).find('.modal-body').css({
                                  width: 'auto', //probably not needed
                                  height: 'auto' //probably not needed1
                                    //'max-height':'650px'
                                });
                              });

                              <?php if(isset($_GET['return'])) { ?>
                              $('.fph-primary .meta-label').hide();
                              $('.fph-primary > ul > li > span.meta-value > a').css("border-bottom", "none");
                              <?php } ?>
                            });
                          </script>

                          <?php if(isset($_GET['no-empsignoff-growl'])) { echo $empsignoffgrowl; } ?>
                            <?= createSiteEnd(); ?>