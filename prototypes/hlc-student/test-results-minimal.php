<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'This is the Test title';
$patterns['header']['classes'] = array('site-header-min');
$patterns['focus']['title'] = 'This is the Test title';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-test',
    'type' => 'Test',
);
$patterns['focus']['meta_primary'] = array(
    array(
        'label' => 'From Course:',
        'value' => '<a href="course.php" class="meta-value">Chronic Pain Management</a>',
    ),
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Status:',
        'value' => 'Complete',
    ),
    array(
        'label' => 'Score:',
        'value' => 'Pass, 60%',
    ),
);
$patterns['focus']['supporting'] = '
    <figure class="fph-chart-holder">
        <canvas class="fph-chart" data-type="Doughnut" data-segments="[[60,1],[40,0]]" width="108" height="108"></canvas>
        <figcaption>60%</figcaption>
    </figure>';
$patterns['footer']['classes'] = array('site-footer-min');

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout layout-min">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-main section-box" data-equalize="layout-columns">

                    <section class="section">
                        <div class="results-header results-header-noborder results-passed">
                            <div class="results-header-inner">
                                <div class="results-header-icon">
                                    <i class="fa fa-times-circle results-icon-failed"></i>
                                    <i class="fa fa-check-circle results-icon-passed"></i>
                                </div>
                                <div class="results-header-message">
                                    <h2>Congratulations, you passed this test!</h2>
                                </div>
                            </div>
                        </div>
                    </section>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'html' => '<a href="index.php" class="btn btn-success">Exit Test</a>',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>

                    <div class="form-modified">Completed on Sep 20, 2013 15:27</div>

                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>From Course</h3>
                        <p><a href="#">This is the course name</a></p>
                    </section>
                    <section class="section section-box">
                        <h3>Support</h3>
                        <p>To talk with a customer service representative call 1-800-521-0574</p>
                        <ul class="list-unstyled">
                            <li><a href="#">Visit the help forum</a></li>
                            <li><a href="#">Send us an email</a></li>
                        </ul>
                    </section>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>