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
                        <h2>You are about to take a test</h2>
                        <ul>
                            <li>Contains <b>10</b> question(s)</li>
                            <li>To Pass: Score <b>80%</b> (8 out of 10 questions)</li>
                            <li><b>1</b> test appempt allowed</li>
                            <li>Click the <b>Complete Test</b> button at the end to score the test</li>
                            <li>This test is not timed</li>
                        </ul>
                    </section>

                    <section class="section">
                        <h2>Introduction</h2>
                        <p>This is an admin defined WYSIWYG area. Here's some copy Joel wrote. You have 1 attempt and no time limit. This is multi-page, so one question per page. Feedback is set for All Questions, and priniting is set to “Only after Submit.” Questions are shuffled, but answers are not. Students can pause the test - meaning they can click pause, log out and back later to resume the test, Crazy, I know.</p>
                    </section>

                    <section class="section">
                        <p>If you are ready to proceed, click the Start Test button. If not, click Cancel and return to the previous page.</p>
                        <div class="form-group">
                            <a href="test-first.php" class="btn btn-success">Start Test</a> <a href="index.php" class="btn btn-default">Cancel</a>
                        </div>
                    </section>

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
