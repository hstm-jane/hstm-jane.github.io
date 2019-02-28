<?php

function makeStatement($options) {

    $risks_selected = 'Low Risk, New Equipment, Policy Change, Safety, Teamwork, Time Sensitive';
    $mov_selected = 'Direct Observation, Documentation Review, Evidence of Daily Work, Evidence Submission, Peer Review';

    // default statement object for prototyping purposes
    $default = array(
        'callout' => false,
        'checkable' => false,
        'dynamic' => false,
        'editable' => false,
        'stripe' => false,
        'title' => 'You need a title',
        'url' => 'assessment-wide-rate.php',
        'description' => 'You need a description',
        'ratings' => array('Not Applicable','Requires Action','Below Expectation','Meets Expectations','Above Expectations','Exceeds Expectations'),
        'actors' => array(
            array(
                'classes' => array('actor--user'),
                'role' => 'Employee',
                'name' => 'Juniper, Stephanie P.',
                'rating' => array(),
                // 'rating' => array(
                //     'value' => 5,
                //     'comment' => 'Overall, I am very satisfied in the direction of my role as it has changed dramatically over the last year.<br><br>I appreciate my manager asking me for feedback and putting in action plans geared towards team goals.<br><br>A strong working relationship with colleagues makes improvement much easier.',
                //     'riskoutcome' => $risks_selected,
                //     'validation' => $mov_selected,
                //     'documents' => array('First Document Name', 'Second Document Name'),
                //     'submitted' => date('M j, Y')
                // )
            ),
            array(
                'classes' => array('actor--additional'),
                'role' => 'Rater',
                'name' => 'Crane, Davy L.',
                'rating' => array()
            ),
            array(
                'classes' => array('actor--additional'),
                'role' => 'Peer',
                'name' => 'Peer 1',
                'rating' => array(
                    'value' => 5,
                    'comment' => 'Stephanie is a great communicator and always follows up on her shared tasks.<br><br>Her unique IT background brings a new perspective and I’ve personally learned a lot from her.',
                    'riskoutcome' => $risks_selected,
                    'validation' => $mov_selected,
                    'documents' => array('Document Name'),
                    'submitted' => date('M j, Y')
                )
            ),
            array(
                'classes' => array('actor--additional'),
                'role' => 'Peer',
                'name' => 'Peer 2',
                'rating' => array(
                    'value' => 4,
                    'comment' => 'I look to Stephanie as a role model and mentor. She also very resourceful and can solve almost any problem.',
                    'riskoutcome' => $risks_selected,
                    'validation' => $mov_selected,
                    'documents' => array('Document Name'),
                    'submitted' => date('M j, Y')
                )
            ),
            array(
                'classes' => array('actor--additional'),
                'role' => 'Peer',
                'name' => 'Peer 3',
                'rating' => array(
                    'value' => 0,
                    'comment' => 'I am new and cannot rate this person',
                    'riskoutcome' => '',
                    'validation' => '',
                    'documents' => array(),
                    'submitted' => date('M j, Y')
                )
            )
        )
    );

    // override defaults with options
    $statement = array_merge($default,$options);

    // statement template
    $html = '
    <div class="statement {stripe} {callout}">
        <div class="summary">
            <div class="basics">
                <div class="title"><a href="{url}">{title}</a></div>
                <div class="description">{description}</div>
                {metaRating}
                {metaDate}
            </div>
            <div class="rating">
                {rating}
            </div>
            {actions}
        </div>
        <div class="actors">
            {actors}
        </div>
    </div>';

    // action option when user hasn't rated
    $actions_rate = '
    <div class="action action-split">
        <div class="btn-group">
            <a href="{url}" class="btn btn-success btn-sm">Rate</a>
            <a href="#" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="{url}">Add Rating</a></li>
                <li><a href="#" class="js-ratings-detail">View All Ratings</a></li>
                {dynamic}
            </ul>
        </div>
    </div>';

    // action option when user has rated
    $actions_edit = '
    <div class="action action-split">
        <div class="btn-group">
            <a href="{url}" class="btn btn-default btn-sm">Edit</a>
            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="{url}">Edit Rating</a></li>
                <li class="visible-xs visible-sm"><a href="#" class="js-user-rating-detail">View Rating Details</a></li>
                <li><a href="#" class="js-ratings-detail">View All Ratings</a></li>
                {dynamic}
            </ul>
        </div>
    </div>';

    // action option when rating isn't available
    $actions_options = '
    <div class="action action-multi">
        <div class="btn-group">
            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="{url}">View Statement Details</a></li>
                <li class="visible-xs visible-sm"><a href="#" class="js-user-rating-detail">View Rating Details</a></li>
                <li><a href="#" class="js-ratings-detail">View All Ratings</a></li>
            </ul>
        </div>
    </div>';

    // actor template
    $actor_html = '
    <div class="actor {classes}">
        <div class="actor__basics">
            <div class="actor__row">
                <div class="actor__role"><label>{role}</label></div>
                <div class="actor__name">{name}</div>
                <div class="actor__rating">{rating}</div>
                <div class="actor__summary"><div>{summary}</div></div>
            </div>
        </div>
        <div class="actor__details">
            <div class="actor__row">
                <div class="actor__risk-outcome">
                    <label>Risk / Outcome</label>
                    {riskoutcome}
                </div>
                <div class="actor__validation">
                    <label>Method of Validation</label>
                    {validation}
                </div>
                <div class="actor__comment">
                    <label>Comment / Evidence of Achievement</label>
                    <pre>{comment}</pre>
                    {documents}
                </div>
            </div>
        </div>
        <div class="actor__submitted">{submitted}</div>
    </div>';

    // dynamic section button
    $dynamic = (!empty($statement['dynamic']))?'<li><a href="#">Remove Statement</a></li>':'';

    // make first user
    $actors = '';
    $actor_user = $statement['actors'][0];
    array_push($actor_user['classes'], 'actor--' . strtolower($actor_user['role']));
    if ( !empty($actor_user['rating']) ) {
        array_push($actor_user['classes'], 'actor--rated');
    }
    $actors .= $actor_html;
    $actors = str_replace('{classes}', implode(' ',$actor_user['classes']), $actors);
    $actors = str_replace('{role}', $actor_user['role'], $actors);
    $actors = str_replace('{name}', $actor_user['name'], $actors);
    $actors = str_replace('{rating}', makeRatingControl($statement, ((!empty($actor_user['rating']))?$actor_user['rating']['value']:false), false), $actors);
    $actors = str_replace('{summary}', (!empty($actor_user['rating']) && !empty($actor_user['rating']['comment']))?makeCommentSummary($actor_user['rating']['comment']):'', $actors);
    $actors = str_replace('{comment}', (!empty($actor_user['rating']) && !empty($actor_user['rating']['comment']))?$actor_user['rating']['comment']:'No Comment Available', $actors);
    $actors = str_replace('{documents}', (!empty($actor_user['rating']) && !empty($actor_user['rating']['documents']))?makeDocuments($actor_user['rating']['documents']):'', $actors);
    $actors = str_replace('{riskoutcome}', (!empty($actor_user['rating']) && !empty($actor_user['rating']['riskoutcome']))?$actor_user['rating']['riskoutcome']:'No Risk/Outcomes Available', $actors);
    $actors = str_replace('{validation}', (!empty($actor_user['rating'])&& !empty($actor_user['rating']['validation']))?$actor_user['rating']['validation']:'No Method of Validation Available', $actors);
    $actors = str_replace('{submitted}', (!empty($actor_user['rating']))?'Rated: ' . $actor_user['rating']['submitted']:'', $actors);


    // get all other ratings
    if ( count($statement['actors']) > 1 ) {
        $additional = '';
        foreach ( $statement['actors'] as $index => $actor ) {
            // if ( $index > 0 ) {
                array_push($actor['classes'], 'actor--' . strtolower($actor['role']));
                if ( !empty($actor['rating']) ) {
                    array_push($actor['classes'], 'actor--rated');
                }
                $temp = $actor_html;
                $temp = str_replace('{classes}', implode(' ',$actor['classes']), $temp);
                $temp = str_replace('{role}', $actor['role'], $temp);
                // $temp = str_replace('{name}', ((!empty($actor['rating']) && $index !== 0)?'<a href="#" class="js-rating-detail">'.$actor['name'].'</a>':$actor['name']), $temp);
                $temp = str_replace('{name}', (!empty($actor['rating'])?'<a href="#" class="js-rating-detail">'.$actor['name'].'</a>':$actor['name']), $temp);
                $temp = str_replace('{rating}', makeRatingControl($statement, ((!empty($actor['rating']))?$actor['rating']['value']:false), false), $temp);
                $temp = str_replace('{summary}', (!empty($actor['rating']) && !empty($actor['rating']['comment']))?makeCommentSummary($actor['rating']['comment']):'', $temp);
                $temp = str_replace('{comment}', (!empty($actor['rating']) && !empty($actor['rating']['comment']))?$actor['rating']['comment']:'No Comment Available', $temp);
                $temp = str_replace('{documents}', (!empty($actor['rating']) && !empty($actor['rating']['documents']))?makeDocuments($actor['rating']['documents']):'', $temp);
                $temp = str_replace('{riskoutcome}', (!empty($actor['rating']) && !empty($actor['rating']['riskoutcome']))?$actor['rating']['riskoutcome']:'No Risk/Outcomes Available', $temp);
                $temp = str_replace('{validation}', (!empty($actor['rating'])&& !empty($actor['rating']['validation']))?$actor['rating']['validation']:'No Method of Validation Available', $temp);
                $temp = str_replace('{submitted}', (!empty($actor['rating']))?'Rated: ' . $actor['rating']['submitted']:'', $temp);
                $additional .= $temp;
            // }
        }

        $actors .= '<div class="collapse-group collapse">' . $additional . '</div>';
        $actors .= '<a href="#" class="collapse-toggle" data-toggle-text="Show {collapseLabel}|Hide {collapseLabel}">Show {collapseLabel}</a>';
    }

    // determine which action is appropriate
    $actions = '';
    if ( $statement['editable'] && !empty($actor_user['rating']) ) {
        $actions = $actions_edit;
    }
    elseif ( $statement['editable'] ) {
        $actions = $actions_rate;
    }
    else {
        $actions = $actions_options;
    }

    $actor_label = (in_array('actor--user', $actor_user['classes']))?'My':'Rater\'s';

    $html = str_replace('{stripe}',(($statement['stripe'])?'statement--stripe':''), $html);
    $html = str_replace('{callout}',(($statement['callout'])?'statement--callout':''), $html);
    $html = str_replace('{title}',$statement['title'], $html);
    $html = str_replace('{description}',$statement['description'], $html);
    $html = str_replace('{metaRating}',(!empty($actor_user['rating']))?'<div class="rating"><label>'.$actor_label.' Rating:</label> '.$statement['ratings'][$actor_user['rating']['value']].'</div>':'<div class="rating"><label>'.$actor_label.' Rating:</label> Not Yet Rated</div>', $html);
    $html = str_replace('{metaDate}', (!empty($actor_user['rating']))?'<div class="date"><label>Rated:</label> ' . date('M j, Y') . '</div>':'', $html);
    $html = str_replace('{rating}', makeRatingControl($statement, ((!empty($actor_user['rating']))?$actor_user['rating']['value']:false), false), $html);
    $html = str_replace('{actions}',$actions, $html);
    $html = str_replace('{dynamic}', $dynamic, $html);
    $html = str_replace('{actors}',$actors, $html);
    $html = str_replace('{collapseLabel}', (($statement['callout'])?'Additional Ratings':'Rating Details'), $html);

    if ( !empty($statement['url']) ) {
        $html = str_replace('{url}',$statement['url'] . ((strpos($statement['url'],'?') !== FALSE)?'&':'?') . 'return='.basename($_SERVER['PHP_SELF']), $html);
    } else {
        $html = str_replace('{url}',(($statement['editable'])?'assessment-wide-rate.php':'assessment-wide-rate-readonly.php').'?return='.basename($_SERVER['PHP_SELF']), $html);
    }

    if ( $statement['checkable'] ) {
        $checkable = '<div class="checkable">{statement}<div class="select"><label><input type="checkbox" class="checkbox"><span class="icon"></span></label></div></div>';
        $checkable = str_replace('{statement}', $html, $checkable);
        return $checkable;
    }

    return $html;
}


function makeRatingControl($statement, $rating = false, $editable = false) {

    $name = 'id'.rand(0,10000);

    $html = '<div class="rating-control">';
    $html .= '<div class="rating-control-row">';
    $label = 'Not Yet Rated';
    foreach ($statement['ratings'] as $option) {
        $isSelected = ($rating !== false && $statement['ratings'][$rating] === $option);
        $isNA = ($option == 'Not Applicable');
        if ($isSelected) {
            $label = $option;
        }
        if ( $editable ) {
            $html .= '<div class="rating-control-cell"><label class="rating-option'.(($isSelected)?' rating-selected':'').'" data-label="'.$option.'"><input type="radio" name="'.$name.'" value="'.$rating.'"'.(($isSelected)?' checked':'').'></label></div>';
        }
        else {
            $html .= '<div class="rating-control-cell"><span class="rating-option'.(($isNA)?' rating-option-na':'').(($isSelected)?' rating-selected':'').'"></span></div>';
        }
    }
    $html .= '<div class="rating-control-cell"><span class="rating-label" data-label="'.$label.'">'.$label.'</span></div>';
    $html .= '</div>';
    $html .= '</div>';

    return $html;
}

function makeCommentSummary($comment) {
    if ( strlen($comment) > 200 ) {
        $comment = substr(strip_tags($comment),0,200) . '&hellip; <a href="#" class="js-rating-detail">More</a>';
    } else {
        $comment = strip_tags($comment);
    }
    return $comment;
}

function makeDocuments($documents) {
    $html = '<div class="actor__documents">';
    $html .= '<ul class="fa-ul">';
    foreach ($documents as $document) {
        $html .= ' <li><a href="#"><i class="fa-li fa fa-paperclip"></i>' . $document . '</a></li>';
    }
    $html .= '</ul>';
    $html .= '</div>';
    return $html;
}

?>