<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Assessment Progress Bar Example';
$patterns['focus']['title'] = 'Assessment Progress Bar Example';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<style>
.assessment-progress {
    margin: -15px 0 15px;
}
@media screen and (min-width:768px) {
    .assessment-progress__steps {
        display: table;
        border: 1px solid #ccc;
        width: 100%;
        overflow: hidden;
    }
    .assessment-progress__step {
        display: table-cell;
        text-align: center;
        padding: 5px 10px;
        text-transform: uppercase;
        background: url('content/images/progress-chevron.svg') left center no-repeat;
        background-size: auto 100%;
        color: #999;
        font-size: 13px;
        /*padding-right: 30px;*/
    }
    .assessment-progress__step:first-child {
        background-image: none;
    }
    .assessment-progress__step-count {
        display: none;
    }
    .assessment-progress__step--active {
        color: #09C;
        font-weight: 700;
        font-size: 14px;
    }
}
@media screen and (max-width:767px) {
    .assessment-progress__step {
        display: none;
    }
    .assessment-progress__step--active {
        display: block;
        font-size: 16px;
        line-height: 1.4;
    }
    .assessment-progress__step-count {
        display: inline-block;
        padding: 5px 7px;
        border: 1px solid #999;
        color: #777;
        font-weight: 600;
        font-size: 12px;
        text-transform: uppercase;
        border-radius: 5px;
        margin-right: 10px;
    }
}
</style>
<div class="layout">
    <div class="container">
        <section class="section section-main section-box">
             <?php
                $focusNav = array(
                    'tabs' => array(
                        array(
                            'active' => true,
                            'id' => 'tab-1',
                            'label' => 'Ratings',
                        ),
                        array(
                            'id' => 'tab-2',
                            'label' => 'Approval History',
                        ),
                    ),
                );
                echo createFocusNav($focusNav);
            ?>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">
                    <section class="section">
                        <div class="assessment-progress">
                            <div class="assessment-progress__steps">
                                <div class="assessment-progress__step">
                                    <span class="assessment-progress__step-count">Step 1 of 5</span>Assigned</div>
                                <div class="assessment-progress__step assessment-progress__step--active">
                                    <span class="assessment-progress__step-count">Step 2 of 5</span>Evaluate</div>
                                <div class="assessment-progress__step">
                                    <span class="assessment-progress__step-count">Step 3 of 5</span>Approval</div>
                                <div class="assessment-progress__step">
                                    <span class="assessment-progress__step-count">Step 4 of 5</span>Review</div>
                                <div class="assessment-progress__step">
                                    <span class="assessment-progress__step-count">Step 5 of 5</span>Closed</div>
                            </div>
                        </div>
                        <h2>Ratings</h2>
                        <p>This is where we list the statements and show ratings</p>
                    </section>
                </div>
                <div class="tab-pane fade" id="tab-2">
                    <section class="section">
                        <h2>Approval History</h2>
                        <p>When applicable, this is where we show the approval history</p>
                    </section>
                </div>
            </div>
        </section>
    </div><!-- /container -->
</div> <!-- /layout -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
    <script>
        $(function(){

        });
    </script>
<?= createSiteEnd(); ?>
