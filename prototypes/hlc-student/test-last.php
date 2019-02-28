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
        'value' => 'In Progress',
    ),
    array(
        'label' => 'Questions:',
        'value' => '10',
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
                        <div class="question">
                            <div class="question-header">
                                <h2 class="question-count">Question 10 <small>of 10</small><span class="label label-warning">Required Question</span></h2>
                                <div class="question-text">
                                    <b>This is a True / False question type.</b><br>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </div>
                            </div>
                            <div class="answers">
                                <label class="answer">
                                    <div class="answer-icon"></div>
                                    <input type="radio" name="q1" value="true">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.
                                </label>
                                <label class="answer">
                                    <div class="answer-icon"></div>
                                    <input type="radio" name="q1" value="false">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.
                                </label>
                            </div>
                        </div><!-- /question -->
                    </section>

                    <section class="section">
                        <div class="form-group">
                            <a href="test-middle.php" class="btn btn-default">Previous Question</a>
                            <a href="test-results.php" class="btn btn-success">Complete Test</a>
                        </div>
                    </section>

                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>Time Remaining</h3>
                        <h1>00:24:01</h1>
                    </section>
                    <section class="section section-box">
                        <h3>Pause and Return</h3>
                        <p>This test allows you to pause, save your progress, and resume at another time.</p>
                        <a href="#" class="btn btn-default btn-sm">Pause Test</a>
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
<script>
$(function(){
    $('label.answer').click(function(e){
        $t = $(this),
        $a = $t.closest('.question').find('.answer');
        $a.removeClass('selected').has('input:checked').addClass('selected');
    });
});
</script>
<?= createSiteEnd(); ?>
