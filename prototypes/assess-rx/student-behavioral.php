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
        <div class="no-focus">
            <?= createHeader($patterns['header']); ?>

                <?= createFocus($patterns['focus']); ?>
        </div>
        <div class="layout layout-min">
            <div class="container">
                <section class="section section-main section-box behavioral-assessment">
                    <h2>RN Behavioral Assessment <small>Section 1 of 6</small></h2>
                    <div class="row">

                        <div class="col-md-12">
                            <section class="section">
                                <div class="question">
                                    <div class="question-header">
                                        <h2 class="question-count">Question 1 <small>of 3</small><span class="label label-warning">Required Question</span></h2>
                                        <div class="question-text">
                                            Please enter the number of times you have been terminated from a position in the past 5 years? Position eliminations and layoffs are not considered terminations.
                                        </div>
                                    </div>
                                    <div class="answers">
                                        <input type="number" value="0" class="form-control">
                                    </div>
                                </div>
                                <!-- /question -->
                                 <div class="question">
                                    <div class="question-header">
                                        <h2 class="question-count">Question 2 <small>of 3</small><span class="label label-warning">Required Question</span></h2>
                                        <div class="question-text">
                                           How many unscheduled or unexcused absences per year do you think is acceptable? (enter whole number)
                                        </div>
                                    </div>
                                    <div class="answers">
                                        <input type="number" value="0" class="form-control">
                                    </div>
                                </div>
                                <!-- /question -->
                                <div class="question">
                                    <div class="question-header">
                                        <h2 class="question-count">Question 3 <small>of 3</small><span class="label label-warning">Required Question</span></h2>
                                        <div class="question-text">
                                           How many full time employer have you had over the past 3 years? 
                                        </div>
                                    </div>
                                    <div class="answers">
                                        <input type="number" value="0" class="form-control">
                                    </div>
                                </div>
                                <!-- /question -->
                            </section>

                        </div>
                        <!-- /column -->
              
                        <!-- /column -->
                    </div>
                    <!-- /row -->

                    <section class="section">
                        <div class="form-group">
                            <a href="student-behavioral-section-2.php" class="btn btn-success">Next Section</a>
                        </div>
                    </section>
                </section>
                <!-- /section-main -->
            </div>
            <!-- /container -->
        </div>
        <!-- /layout -->
        <?= createFooter($patterns['footer']); ?>
            <?= createPrototypeNav(); ?>
                <?= createSiteScripts(); ?>
                    <script>
                        $(function() {
                            $('label.answer').click(function(e) {
                                $t = $(this),
                                    $a = $t.closest('.question').find('.answer');
                                $a.removeClass('selected').has('input:checked').addClass('selected');
                            });
                        });
                    </script>
                    <?= createSiteEnd(); ?>