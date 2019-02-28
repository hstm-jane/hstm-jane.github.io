<?php

/*  =============================================================================
    Error Handling
    ========================================================================== */

    function error_found(){
        header("Location: error.php");
    }
    // set_error_handler('error_found');


/*  =============================================================================
    Includes
    ========================================================================== */

    switch ($_SERVER['HTTP_HOST']) {
        // case 'hlc.dev':
        case 'hstm-hccdemo-rater.patternmanager.com':
            $pattern_config = 'includes/helpers/patterns.config.hccdemo-rater.php';
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

    $states = array('Evaluation','Review','Approval','Completed');
    $employeeID = 'employee';
    $raterID = 'rater';


/*  =============================================================================
    Variables
    ========================================================================== */

    $assessmentID = (!empty($_GET['assessment']))?$_GET['assessment']:'competency-1';
    $statementID = (!empty($_GET['statement']))?$_GET['statement']:'statement-1';
    $userID = ((!empty($_GET['user']))?$_GET['user']:'employee');
    $stateID = (!empty($_GET['state']))?$_GET['state']:0;
    $ratingSetID = (!empty($_GET['progress']))?$_GET['progress']:0;


/*  =============================================================================
    Setup & Helpers
    ========================================================================== */

    // shortcuts
    $assessment = $assessments[$assessmentID];
    $statements = $assessment['statements'];
    $statement = $statements[$statementID];
    $statementRatings = $statement['options']['ratings'];
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


    $statementIDs = array_keys($statements);
    $current = array_search($statementID,$statementIDs);

    if ( count($statementIDs) !== 1 ) {
        $prevID = $statementIDs[(($current > 0)?$current:count($statementIDs)-1) - 1];
        $nextID = $statementIDs[(($current < count($statementIDs)-1)?$current:-1) + 1];
    } else {
        $prevID = $nextID = $statementIDs[$current];
    }

    // path back to assessment
    $params = '?assessment='.$assessmentID.'&user='.$userID.'&state='.$stateID.'&progress='.$ratingSetID;
    $assessmentURL = '/assessment.php'.$params;
    $previousURL = '/assessment-statement.php'.$params.'&statement='.$prevID;
    $nextURL = '/assessment-statement.php'.$params.'&statement='.$nextID;


/*  =============================================================================
    Header & Focus Bar setup
    ========================================================================== */

    // data for header & focus bar
    // $patterns['start']['title'] = $patterns['focus']['title'] = $statement['title'];
    $patterns['start']['title'] = $patterns['focus']['title'] = 'Statement Rating';
    $patterns['header']['userName'] = $user['nameFirstLast'];
    $patterns['header']['userImage'] = '<img src="'.$user['image'].'">';
    // $patterns['focus']['icon'] = '<div class="fph-cell fph-cell-icon"><div class="fph-icon" style="overflow:hidden;"><img src="'.$employee['image'].'" width="100%" height="100%"></div><div class="fph-icon-label"><span>'.$type.' Assessment</span></div></div>';
    //$patterns['focus']['icon'] = '<div class="fph-cell fph-cell-icon"><div class="fph-icon" style="overflow:hidden;"><img src="'.$employee['image'].'" width="100%" height="100%"></div><div class="fph-icon-label"><span>Statement</span></div></div>';
    $patterns['focus']['icon'] = '<div class="fph-cell fph-cell-icon"><div class="fph-icon"><i class="hs-icons-assessment"> </i></div><div class="fph-icon-label"><span>'.$type.' Assessment </span></div></div>';
    // if(isset($_GET['return'])) { 
    //     $patterns['focus']['meta_primary'] = array(
    //         array(
    //             'label' => '.',
    //             'value' => '<a href="'.$assessmentURL.'&return" class="meta-value"><i class="fa fa-chevron-left"></i> Return to Assessment Summary</a>',
    //             'attributes' => array(
    //                 array('class','meta-hidden-xs'),
    //             )
    //         )
    //     );
    // }
    // else {
    //      $patterns['focus']['meta_primary'] = array(
    //         array(
    //             'label' => 'From Assessment:',
    //             'value' => '<a href="'.$assessmentURL.'" class="meta-value">'.$assessment['title'].'</a>',
    //             'attributes' => array(
    //                 array('class','meta-hidden-xs'),
    //             )
    //         )
    //     );
    // }
      // determine # of statements, determine # of employee rated statements in set
    // $chart = array();
    // // $percent = 50;
    // $progress = 0;
    // foreach ($ratingSet as $statementpart) {
    //     foreach ($statementpart as $actor) {
    //         if ( $actor['id'] === $userID ) {
    //             $progress++;
    //         }
    //     }
    // };
    // $percent = round( $progress / count($assessment['statements']) * 100);
    // for ($i=0;$i<count($assessment['statements']);$i++) {
    //     array_push($chart, '[1,'.(($progress-- > 0)?'1':'0').']');
    // }

    // $patterns['focus']['supporting'] = '
    //     <figure class="fph-chart-holder">
    //         <canvas class="fph-chart" data-type="Doughnut" data-segments="['.implode(',',$chart).']" width="108" height="108"></canvas>
    //         <figcaption>'.$percent.'%</figcaption>
    //     </figure>';

    $patterns['focus']['meta_secondary'] = array(
        array(
            'label' => 'Employee:',
            'value' => 'Juniper, Stephanie P.',
        ),
        array(
            'label' => 'Rater:',
            'value' => 'Darcy L. Crane',
        ),
        array(
            'label' => 'Status:',
            'value' => (!empty($ratingSet[$statementID][$viewAsID]))?'Rated':'Not Yet Rated',
        ),
        // array(
        //     'label' => 'Due:',
        //     'value' => date('M j, Y'),
        // ),
    );

    if ( $userID === $raterID ) {
        $patterns['header']['mainNav'] = '
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
            <li class="visible-xs"><a href="#">Logout</a></li>';
        $patterns['header']['mainNavActive'] = 'raters';
    }

    function makeCommentSummary($comment) {
        if ( strlen($comment) > 200 ) {
            $comment = substr(strip_tags($comment),0,200) . '&hellip; <a href="#" class="js-rating-details" data-params="{actorParams}">More</a>';
        } else {
            $comment = strip_tags($comment);
        }
        return '<span class="actor__summary-date">{date}:</span> ' . $comment;
    }

    function makeRatingControl($ratings,$rating,$role = false) {
        $html = '<div class="rating-control'.(($role)?' rating-control--'.$role:'').'">';
        $html .= '<div class="rating-control-row">';
        $label = 'Not Yet Rated';
        foreach ($ratings as $option) {
            $isSelected = ($rating !== false && $ratings[$rating][0] === $option[0]);
            $isNA = ($option[0] == 'Not Applicable');
            if ($isSelected) {
                $label = $option[0];
            }
            $html .= '<div class="rating-control-cell"><span class="rating-option'.(($isNA)?' rating-option-na':'').(($isSelected)?' rating-selected':'').'"></span></div>';
        }
        $html .= '<div class="rating-control-cell"><span class="rating-label" data-label="'.$label.'">'.$label.'</span></div>';
        $html .= '</div>';
        $html .= '</div>';
        return $html;
    }

/*  =============================================================================
    Stickybar
    ========================================================================== */

    if ($stateID === 0) {
        $stickybar = array(
            'sets' => array(
                array(
                    'position' => 'left',
                    'html' => '
                        <a href="'.$assessmentURL.'" class="btn btn-success">Save</a>
                        <a href="'.$nextURL.'" class="btn btn-success">Save and Next</a>
                         <div class="btn-group dropup">
                            <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Employee <i class="fa fa-caret-up"></i></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">About Juniper, Stephanie P.</li>
                                <li><a href="#modal-employee-profile" data-toggle="modal">Profile</a></li>
                                <li><a href="#modal-employee-todo" data-toggle="modal">To-Do List</a></li>
                                <li><a href="#modal-employee-completions" data-toggle="modal">Completions</a></li>
                                <li><a href="#">Assignment Completion Report</a></li>
                            </ul>
                        </div>
                        <a href="'.$assessmentURL.'" class="btn btn-default">Cancel</a>
                    ',
                ),
                
                array(
                    'position' => 'right',
                    'classes' => array('hidden-xs'),
                    'html' => '
                        <div class="btn-group">
                            <a href="'.$previousURL.'" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                            <a href="'.$nextURL.'" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    ',
                ),
            ),
        );
    }
    else {
        $stickybar = array(
            'sets' => array(
                array(
                    'position' => 'left',
                    'html' => '
                        <a href="'.$assessmentURL.'" class="btn btn-default">Return</a>
                    ',
                ),
                array(
                    'position' => 'right',
                    'classes' => array('hidden-xs'),
                    'html' => '
                        <div class="btn-group">
                            <a href="'.$previousURL.'" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                            <a href="'.$nextURL.'" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    ',
                ),
            ),
        );

    }


/*  =============================================================================
    HTML
    ========================================================================== */

    $statementHTML = file_get_contents('includes/helpers/assessment/templates/statement.rating.html');
    $statementHTML = str_replace('{title}', $statement['title'], $statementHTML);
    $statementHTML = str_replace('{description}', $statement['description'], $statementHTML);
    $statementHTML = str_replace('{content}', $statement['content'], $statementHTML);
    $statementHTML = str_replace('{stickybar}', createStickybar($stickybar), $statementHTML);

    // rating control
    $ratingSelected = (!empty($ratingSet[$statementID][$viewAsID]['rating']))?$statement['options']['ratings'][$ratingSet[$statementID][$viewAsID]['rating']][0]:'';
    $ratingControl = file_get_contents('includes/helpers/assessment/templates/statement.controls.ratings.html');
    $ratingOptions = '';
    foreach ($statement['options']['ratings'] as $option) {
        $ratingOptions .= '<option'.(($ratingSelected === $option[0])?' selected':'').'>'.$option[0].'</option>';
    }
    $ratingDefinitions = file_get_contents('includes/helpers/assessment/templates/definitions.html');
    $ratingDefinitions = str_replace('{params}', 'assessment='.$assessmentID.'&statement='.$statementID, $ratingDefinitions);
    $ratingDefinitions = str_replace('{label}', '', $ratingDefinitions);
    $ratingControl = str_replace('{options}', $ratingOptions, $ratingControl);
    $ratingControl = str_replace('{definitions}', $ratingDefinitions, $ratingControl);
    $statementHTML = str_replace('{ratings}', $ratingControl, $statementHTML);

    // reflective
    $reflectiveControl = '';
    if ( $viewAsID === $raterID && $assessment['optionsReflectivePlan'] === true ) {
        $reflectiveSelected = file_get_contents('includes/helpers/assessment/templates/statement.controls.reflective.html');
        $reflectiveSelected = str_replace('{checked}', '', $reflectiveSelected);
        $reflectiveControl = $reflectiveSelected;
    }
    $statementHTML = str_replace('{reflective}', $reflectiveControl, $statementHTML);

    // comments control
    $commentsSelected = (!empty($ratingSet[$statementID][$viewAsID]['comment']))?$ratingSet[$statementID][$viewAsID]['comment']:'';
    $commentsSelected = str_replace('<br><br>', "\n\n", $commentsSelected);
    $commentsControl = file_get_contents('includes/helpers/assessment/templates/statement.controls.comments.html');
    $commentsControl = str_replace('{comments}', $commentsSelected, $commentsControl);
    $statementHTML = str_replace('{comments}', $commentsControl, $statementHTML);

    // documents
    $documentsSelected = '<li>No attached documents</li>';
    $documentsMore = '';
    if (!empty($ratingSet[$statementID][$viewAsID]['documents'])) {
        $documentsSelected = '';
        $documentCount = 1;
        foreach ($ratingSet[$statementID][$viewAsID]['documents'] as $name) {
            $documentTitle = str_ireplace(' ', '-',strtolower(preg_replace("/[^A-Za-z0-9 ]/", '', $statement['title']))) .'_'.date('Ymd',strtotime('-'.(10 + $documentCount).'days'));
            $document = file_get_contents('includes/helpers/assessment/templates/statement.controls.document.html');
            if ( $name === '' ) {
                $document  = str_replace('{document}', $documentTitle, $document);
            } else {
               $document  = str_replace('{document}', $name, $document);
            }
            $documentsSelected .= $document;
            $documentCount++;
        }
    }
    $documentsControl = file_get_contents('includes/helpers/assessment/templates/statement.controls.documents.html');
    $documentsControl = str_replace('{documents}', $documentsSelected, $documentsControl);
    if ($stateID === 0) {
        $documentsMore = file_get_contents('includes/helpers/assessment/templates/statement.controls.documents.more.html');
    }
    $documentsControl = str_replace('{more}', $documentsMore, $documentsControl);
    $statementHTML = str_replace('{documents}', $documentsControl, $statementHTML);

    // risks
    $risksControl = '';
    if ( !empty($statement['options']['risks']) ) {
        $risksTotal = count($statement['options']['risks']);
        $riskCurrent = 0;
        $risksCol1 = '';
        $risksCol2 = '';
        foreach ($statement['options']['risks'] as $risk) {
            $riskSelected = (!empty($ratingSet[$statementID][$viewAsID]['risks']) && in_array($risk,$ratingSet[$statementID][$viewAsID]['risks']));
            $riskItem = file_get_contents('includes/helpers/assessment/templates/statement.controls.checkbox.html');
            $riskItem = str_replace('{checked}', ($riskSelected)?' checked':'', $riskItem);
            $riskItem = str_replace('{option}', $risk, $riskItem);
            if ( ++$riskCurrent <= ceil($risksTotal/2) ) {
                $risksCol1 .= $riskItem;
            } else {
                $risksCol2 .= $riskItem;
            }
        }
        $risksControl = file_get_contents('includes/helpers/assessment/templates/statement.controls.risks.html');
        $risksControl = str_replace('{col1}', $risksCol1, $risksControl);
        $risksControl = str_replace('{col2}', $risksCol2, $risksControl);
    }
    $statementHTML = str_replace('{risks}', $risksControl, $statementHTML);

    // validations
    $validationsControl = '';
    if ( !empty($statement['options']['validations']) ) {
        $validationsTotal = count($statement['options']['validations']);
        $validationCurrent = 0;
        $validationsCol1 = '';
        $validationsCol2 = '';
        foreach ($statement['options']['validations'] as $validation) {
            $validationSelected = (!empty($ratingSet[$statementID][$viewAsID]['validations']) && in_array($validation,$ratingSet[$statementID][$viewAsID]['validations']));
            $validationItem = file_get_contents('includes/helpers/assessment/templates/statement.controls.checkbox.html');
            $validationItem = str_replace('{checked}', ($validationSelected)?' checked':'', $validationItem);
            $validationItem = str_replace('{option}', $validation, $validationItem);
            if ( ++$validationCurrent <= ceil($validationsTotal/2) ) {
                $validationsCol1 .= $validationItem;
            } else {
                $validationsCol2 .= $validationItem;
            }
        }
        $validationsControl = file_get_contents('includes/helpers/assessment/templates/statement.controls.validations.html');
        $validationsControl = str_replace('{col1}', $validationsCol1, $validationsControl);
        $validationsControl = str_replace('{col2}', $validationsCol2, $validationsControl);
    }
    $statementHTML = str_replace('{validations}', $validationsControl, $statementHTML);



    // additional ratings tab + content
    $additionalTab = file_get_contents('includes/helpers/assessment/templates/statement.additionalratings.tab.html');
    $additionalTab = str_replace('{name}', 'additional', $additionalTab);
    $additionalTab = str_replace('{Name}', 'Additional', $additionalTab);

    $additionalContent = file_get_contents('includes/helpers/assessment/templates/statement.additionalratings.content.html');
    $additionalContent = str_replace('{name}', 'additional', $additionalContent);
    $actorsHTML = '';
    foreach ($actors as $actorID => $actor) {

        // set these up for later
        $actorIsUser = ($actorID === $userID);
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
            $actorHTML = str_replace('{rating}', makeRatingControl($statementRatings,$actorRating['rating'],$actor['role']), $actorHTML);
            $actorHTML = str_replace('{summary}', makeCommentSummary($actorRating['comment']), $actorHTML);
            $actorHTML = str_replace('{date}', $actorRating['date'], $actorHTML);
            $actorHTML = str_replace('{actorParams}', $actorParams, $actorHTML);
        } else {
            $actorHTML = str_replace('{name}', $actorName, $actorHTML);
            $actorHTML = str_replace('{rating}', makeRatingControl($statementRatings,false,$actor['role']), $actorHTML);
            $actorHTML = str_replace('{summary}', '', $actorHTML);
        }

        // update the modifying classes (after determining rating)
        $actorHTML = str_replace('{modifiers}', $actorModifiers, $actorHTML);

        // if the actor is the user, make them first
        if ( !$actorIsUser ) {
            $actorsHTML .= $actorHTML;
        }
    }
    $additionalContent = str_replace('{actors}', $actorsHTML, $additionalContent);

    // shared ratings tab + content
    $sharedTab = file_get_contents('includes/helpers/assessment/templates/statement.additionalratings.tab.html');
    $sharedTab = str_replace('{name}', 'shared', $sharedTab);
    $sharedTab = str_replace('{Name}', 'Shared', $sharedTab);

    $sharedContent = file_get_contents('includes/helpers/assessment/templates/statement.additionalratings.content.html');
    $sharedContent = str_replace('{name}', 'shared', $sharedContent);
    $actorsHTML = '';
    foreach ($sharedRatings as $actor) {

        // set these up for later
        $actorName = (($actor['role'] === 'peer' && $assessment['optionsShowPeerNames'] === false && $actorIsUser === false)?ucfirst(str_replace('-', ' ', $actorID)):$actor['nameLastFirst']);
        $actorModifiers = ' actor--'.$actor['role'];
        $actorParams = 'assessment='.$assessmentID.'&statement='.$statement['id'].'&user='.$viewAsID.'&progress='.$ratingSetID.'&actor='.$actor['id'];

        // start the actor
        $actorHTML = file_get_contents('includes/helpers/assessment/templates/actor.html');
        $actorHTML = str_replace('{role}', $actor['role'], $actorHTML);

        $actorModifiers .= ' actor--rated';
        $actorHTML = str_replace('{name}', '<a href="#" class="js-rating-details" data-params="{actorParams}">'.$actorName.'</a>', $actorHTML);
        $actorHTML = str_replace('{rating}', makeRatingControl($statementRatings,$actor['rating'],$actor['role']), $actorHTML);
        $actorHTML = str_replace('{summary}', makeCommentSummary($actor['comment']), $actorHTML);
        $actorHTML = str_replace('{date}', $actor['date'], $actorHTML);
        $actorHTML = str_replace('{actorParams}', $actorParams, $actorHTML);

        // update the modifying classes (after determining rating)
        $actorHTML = str_replace('{modifiers}', $actorModifiers, $actorHTML);

        // if the actor is the user, make them first
        $actorsHTML .= $actorHTML;
    }
    $sharedContent = str_replace('{actors}', $actorsHTML, $sharedContent);


    $historicalTab = '';
    $historicalContent = '';

    if ( $assessment['optionsIsReflectivePlan'] === true && ($userID === "employee" || $userID === "rater") ) {

        // historical ratings tab + content
        $historicalTab = file_get_contents('includes/helpers/assessment/templates/statement.additionalratings.tab.html');
        $historicalTab = str_replace('{name}', 'historical', $historicalTab);
        $historicalTab = str_replace('{Name}', 'Historical', $historicalTab);

        $historicalContent = file_get_contents('includes/helpers/assessment/templates/statement.additionalratings.content.html');
        $historicalContent = str_replace('{name}', 'historical', $historicalContent);

        $historicalAssessments = '';
        $historicalRatings = ( $assessmentID === 'competency-6' && $statementID === 'statement-4' )?$historicalRatings2:$historicalRatings1;
        foreach ($historicalRatings as $section) {

            $historicalAssessmentContent = file_get_contents('includes/helpers/assessment/templates/statement.additionalratings.assessment.html');

            $actorsHTML = '';
            foreach ($section['ratings'] as $actor) {
                // set these up for later
                $actorName = (($actor['role'] === 'peer' && $assessment['optionsShowPeerNames'] === false && $actorIsUser === false)?ucfirst(str_replace('-', ' ', $actorID)):$actor['nameLastFirst']);
                $actorModifiers = ' actor--'.$actor['role'];
                $actorParams = 'assessment='.$assessmentID.'&statement='.$statement['id'].'&user='.$viewAsID.'&progress=5&actor='.$actor['id'];

                // start the actor
                $actorHTML = file_get_contents('includes/helpers/assessment/templates/actor.html');
                $actorHTML = str_replace('{role}', $actor['role'], $actorHTML);

                $actorModifiers .= ' actor--rated';
                $actorHTML = str_replace('{name}', '<a href="#" class="js-rating-details" data-params="{actorParams}">'.$actorName.'</a>', $actorHTML);
                $actorHTML = str_replace('{rating}', makeRatingControl($statementRatings,$actor['rating'],$actor['role']), $actorHTML);
                $actorHTML = str_replace('{summary}', makeCommentSummary($actor['comment']), $actorHTML);
                $actorHTML = str_replace('{date}', $actor['date'], $actorHTML);
                $actorHTML = str_replace('{actorParams}', $actorParams, $actorHTML);

                // update the modifying classes (after determining rating)
                $actorHTML = str_replace('{modifiers}', $actorModifiers, $actorHTML);

                // if the actor is the user, make them first
                $actorsHTML .= $actorHTML;
            }
            $historicalAssessmentContent = str_replace('{assessment}', $section['title'], $historicalAssessmentContent);
            $historicalAssessmentContent = str_replace('{section}', $section['section'], $historicalAssessmentContent);
            $historicalAssessmentContent = str_replace('{actors}', $actorsHTML, $historicalAssessmentContent);
            $historicalAssessments .= $historicalAssessmentContent;

        }
        $historicalContent = str_replace('{actors}', $historicalAssessments, $historicalContent);

    }
    $refererURL = (!empty($_SERVER['HTTP_REFERER']))?$_SERVER['HTTP_REFERER']:'assessment.php';

    // additional ratings section
    $additionalRatingsHTML = file_get_contents('includes/helpers/assessment/templates/statement.additionalratings.html');
    $additionalRatingsHTML = str_replace('{additionalTab}', $additionalTab, $additionalRatingsHTML);
    $additionalRatingsHTML = str_replace('{sharedTab}', '', $additionalRatingsHTML);
    $additionalRatingsHTML = str_replace('{historicalTab}', $historicalTab, $additionalRatingsHTML);
    $additionalRatingsHTML = str_replace('{additionalContent}', $additionalContent, $additionalRatingsHTML);
    $additionalRatingsHTML = str_replace('{sharedContent}', '', $additionalRatingsHTML);
    $additionalRatingsHTML = str_replace('{historicalContent}', $historicalContent, $additionalRatingsHTML);
    $statementHTML = str_replace('{additionalRatings}', $additionalRatingsHTML, $statementHTML);
  //  $statementHTML = str_replace('{referURL}',  $refererURL, $statementHTML);

    

    // disable form controls
    $statementHTML = str_replace('{disabled}', ($stateID !== 0)?' disabled':'', $statementHTML);


?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<?= $statementHTML ?>
<div class="modals"></div>

<?= createFooter($patterns['footer']); ?>
<?php include('includes/modals/_modal-documents.php'); ?>
<?php include('includes/modals/_modal-document-add.php'); ?>
<?php include('includes/modals/_modal-notes.php'); ?>
<?php include('includes/modals/_modal-note-add.php'); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script src="/scripts/expanding.jquery.js"></script>

<script>
    $(function(){
        $('.js-rating-details').on('click',function(e){
            var params = $(this).attr('data-params');
            e.preventDefault();
            $.get( "/assessment-modal-rating-details.php?" + params, function( data ) {
                $('.modals').html(data);
                $('#modal-rating-details').modal('show');
            });
        });
        $('.js-rating-definitions').on('click',function(e){
            var params = $(this).attr('data-params');
            e.preventDefault();
            $.get( "/assessment-modal-rating-definitions.php?" + params, function( data ) {
                console.log(data);
                $('.modals').html(data);
                $('#modal-rating-definitions').modal('show');
            });
        });
        // SHOW TAB CONTENT OR OPEN MODAL BASED ON SCREEN SIZE
        $('.additional-ratings__tab').on('click',function(e){
            var $tab = $(this);
            var $content = $($tab.find('a').attr('href'));
            var $modal = $('#modal-rating-detail');
            var $actors = $modal.find('.detail__actors');
            var template = $modal.find('.detail__template').html();
            var tabActive = $tab.hasClass('additional-ratings__tab--active');

            e.preventDefault();
            $('.additional-ratings__tab--active, .additional-ratings__tab-content--active').removeClass('additional-ratings__tab--active additional-ratings__tab-content--active');

            if ( $(window).width() < 978 ) {

                $modal.find('.modal-title').html('Additional Rating Details');
                $actors.addClass('detail__actors--multiple');
                $actors.html('');
                $content.find('.actor').each(function(){
                    $actors.append(makeActorDetail(template,$(this)));
                });
                $modal.modal('show');
            } else {

                if ( !tabActive ) {
                    $tab.addClass('additional-ratings__tab--active').siblings('.additional-ratings__tab').removeClass('additional-ratings__tab--active');
                    $content.addClass('additional-ratings__tab-content--active').siblings('.additional-ratings__tab-content').removeClass('additional-ratings__tab-content--active');
                }

            }
        });
        <?php if(isset($_GET['return'])) { ?>
            $('.fph-primary .meta-label').hide();
            $('.fph-primary > ul > li > span.meta-value > a').css("border-bottom", "none");
        <?php } ?>

    });


</script>
<?= createSiteEnd(); ?>