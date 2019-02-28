<?php

    include "includes/data/assessments.php";

    // params
    $assessmentID = !empty($_GET['assessment'])?$_GET['assessment']:'competency-1';
    $statementID = !empty($_GET['statement'])?$_GET['statement']:'statement-1';
    $userID = !empty($_GET['user'])?$_GET['user']:'actor-1';
    $actorID = !empty($_GET['actor'])?$_GET['actor']:false;
    $ratingsSet = !empty($_GET['progress'])?$_GET['progress']:0;
    $editable = (!empty($_GET['editable']) && $_GET['editable'] === 'true')?true:false;

    // data
    $assessment = $assessments[$assessmentID];
    $statement = $assessment['statements'][$statementID];
    $actors = $assessment['actors'];
    $ratings = $assessment['ratingSets'][$ratingsSet];

    // html options
    $multipleHTML = ( $actorID )?'':' detail__actors--multiple';
    $editHTML = ( $editable )?'<a href="assessment-statement.php?assessment" class="btn btn-default">Edit Rating</a>':'';

    function makeRatingControl($ratings,$rating,$role = false) {
        $html = '<div class="rating-control'.(($role)?' rating-control--'.$role:'').'">';
        $html .= '<div class="rating-control-row">';
        $label = 'Not Yet Rated';
        foreach ($ratings as $option) {
            $isSelected = ($rating !== false && $ratings[$rating][0] === $option[0]);
            $isNA = ($option[0] === 'Not Applicable');
            if ($isSelected) {
                $label = $option[0];
            }
            $html .= '<div class="rating-control-cell"><span class="rating-option'.(($isNA)?' rating-option-na':'').(($isSelected)?' rating-selected':'').'"></span></div>';
        }
        $html .= '<div class="rating-control-cell"><span class="rating-label">'.$label.'</span></div>';
        $html .= '</div>';
        $html .= '</div>';
        return $html;
    }

?>
<!-- modal -->
<div class="modal modal-rating-detail fade" id="modal-rating-details" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Rating Details</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h2 class="detail__title"><?= $statement['title']; ?></h2>
                    <div class="detail__description"><?= $statement['description']; ?></div>
                    <hr>
                </section>
                <div class="detail__actors<?= $multipleHTML; ?>">

                    <?php

                        $actorsHTML = '';

                        foreach ($actors as $id => $actor) {

                            if ( $actorID === false || $actorID === $id ) {

                                // rating
                                if ( !empty($ratings[$statementID][$id]) ) {
                                    $ratingHTML = makeRatingControl($statement['options']['ratings'],$ratings[$statementID][$id]['rating'],$actor['role']);
                                } else {
                                    $ratingHTML = makeRatingControl($statement['options']['ratings'],false,$actor['role']);
                                }


                                // documents

                                if ( !empty($ratings[$statementID][$id]['documents']) ) {
                                    $documentsHTML = '
                                    <div class="actor__documents">
                                        <ul class="fa-ul">
                                            {documents}
                                        </ul>
                                    </div>';
                                    $documents = '';
                                    $documentCount = 1;
                                    foreach ($ratings[$statementID][$id]['documents'] as $document) {
                                        $documentTitle = str_ireplace(' ', '-',strtolower(preg_replace("/[^A-Za-z0-9 ]/", '', $statement['title']))) .'_'.date('Ymd',strtotime('-'.(10 + $documentCount).'days'));
                                        if ( $document === '' ) {
                                            $documents .= '<li><a href="#"><i class="fa-li fa fa-paperclip"></i>'.$documentTitle.'</a></li>';
                                        } else {
                                            $documents .= '<li><a href="#"><i class="fa-li fa fa-paperclip"></i>'.$document.'</a></li>';
                                        }
                                        $documentCount++;
                                    }
                                    $documentsHTML = str_replace('{documents}', $documents, $documentsHTML);
                                } else {
                                    $documentsHTML = '';
                                }

                                // comments
                                $commentsHTML = '
                                    <section class="section">
                                        <h3>Comment / Evidence of Achievement</h3>
                                        <div class="detail__comment">
                                            <label>Comment / Evidence of Achievement</label>
                                            <pre>{comment}</pre>
                                            {documents}
                                        </div>
                                    </section>';
                                if ( !empty($ratings[$statementID][$id]['comment']) ) {
                                    $commentsHTML = str_replace('{comment}', $ratings[$statementID][$id]['comment'], $commentsHTML);
                                } else {
                                    $commentsHTML = str_replace('{comment}', 'No Comment Available', $commentsHTML);
                                }
                                $commentsHTML = str_replace('{documents}', $documentsHTML, $commentsHTML);

                                // risks
                                if ( !empty($statement['options']['risks']) ) {
                                    $risksHTML = '
                                        <section class="section">
                                            <h3>Risk / Outcome</h3>
                                            <div class="detail__risk-outcome">
                                                <label>Risk / Outcome</label>
                                                {risks}
                                            </div>
                                        </section>';
                                    if ( !empty($ratings[$statementID][$id]['risks']) ) {
                                        $risksHTML = str_replace('{risks}', implode(', ',$ratings[$statementID][$id]['risks']), $risksHTML);
                                    } else {
                                        $risksHTML = str_replace('{risks}', 'No Risk/Outcomes Available', $risksHTML);
                                    }
                                } else {
                                    $risksHTML = '';
                                }

                                // validations
                                if ( !empty($statement['options']['validations']) ) {
                                    $validationsHTML = '
                                    <section class="section">
                                        <h3>Method of Validation</h3>
                                        <div class="detail__validation">
                                            <label>Method of Validation</label>
                                            {validations}
                                        </div>
                                    </section>';
                                    if ( !empty($ratings[$statementID][$id]['risks']) ) {
                                        $validationsHTML = str_replace('{validations}', implode(', ',$ratings[$statementID][$id]['validations']), $validationsHTML);
                                    } else {
                                        $validationsHTML = str_replace('{validations}', 'No Methods of Validation Available', $validationsHTML);
                                    }
                                } else {
                                    $validationsHTML = '';
                                }

                                // submitted
                                if ( !empty($ratings[$statementID][$id]['date']) ) {
                                    $submittedHTML = '<div class="detail__submitted">Rated: '.$ratings[$statementID][$id]['date'].'</div>';
                                } else {
                                    $submittedHTML = '';
                                }

                                $actorIsUser = ($actorID === $userID);
                                $actorName = (($actor['role'] === 'peer' && $assessment['optionsShowPeerNames'] === false && $actorIsUser === false)?ucfirst(str_replace('-', ' ', $actorID)):$actor['nameLastFirst']);
                                $actorHTML = '
                                <div class="detail__actor'. ((!empty($ratings[$statementID][$id]))?' detail__actor--'.$actor['role']:'').'">
                                    <section class="section">
                                        <h3>Rated By</h3>
                                        <div><span class="detail__role">'.$actor['role'].'</span><span class="detail__actor">'.$actorName.'</span></div>
                                    </section>
                                    <section class="section">
                                        <h3>Rating</h3>
                                        '.$ratingHTML.'
                                    </section>
                                    '.$commentsHTML.'
                                    '.$risksHTML.'
                                    '.$validationsHTML.'
                                    '.$submittedHTML.'
                                </div>';

                                if ( $userID === $id ) {
                                    $actorsHTML = $actorHTML . $actorsHTML;
                                } else {
                                    $actorsHTML .= $actorHTML;
                                }
                            }
                        }

                        echo $actorsHTML;

                    ?>

                </div>
            </div>
            <div class="modal-footer">
                <?= $editHTML; ?>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->