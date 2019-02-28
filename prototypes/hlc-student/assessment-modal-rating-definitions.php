<?php

    include "includes/data/assessments.php";

    // params
    $assessmentID = !empty($_GET['assessment'])?$_GET['assessment']:'competency-1';
    $statementID = !empty($_GET['statement'])?$_GET['statement']:false;

    // data
    $assessment = $assessments[$assessmentID];

    // ratings
    if ( $statementID ) {
        $ratings = $assessment['statements'][$statementID]['options']['ratings'];
    } else {
        $ratings = $assessment['averageRatings'];
    }

    // HTML
    $ratingsHTML = '';
    foreach ($ratings as $rating) {
        $ratingsHTML .= '<section class="section"><h3>'.$rating[0].'</h3><p>'.$rating[1].'</p></section>';
    }

?>
<!-- modal -->
<div id="modal-rating-definitions" class="modal fade" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Rating Definitions</h4>
            </div>
            <div class="modal-body">
                <?= $ratingsHTML; ?>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->