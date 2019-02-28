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


                <div class="row">

                    <div class="col-md-12">
                        <section class="section section-main section-box behavioral-assessment">
                            <h2>RN Behavioral Assessment <small>Section 6 of 6</small></h2>
                            <section class="section">
                                <p>
                                    Read the item and decide how often you demonstrate the behavior. Rate each item by selecting the most appropriate response for you. Please answer all items quickly and accurately. Applicants that respond openly and honestly are more likely to be successful in the assessment process.
                                </p>

                                <div class="question">
                                    <div class="question-header">
                                        <h2 class="question-count">Question 1 <small>of 6</small><span class="label label-warning">Required Question</span></h2>

                                        <div class="question-text">
                                            Which of the following shifts or schedules are you willing to work?
                                        </div>
                                        <div class="question-instructions">
                                            Select all that apply
                                        </div>
                                    </div>
                                    <div class="answers">
                                        <label class="answer">
                                        <div class="answer-icon answer-icon-square"></div>
                                        <input type="checkbox" value="q4a1">
                                       Day Shift
                                    </label>
                                        <label class="answer">
                                        <div class="answer-icon answer-icon-square"></div>
                                        <input type="checkbox" value="q4a2">
                                        2nd Shift
                                    </label>
                                        <label class="answer">
                                        <div class="answer-icon answer-icon-square"></div>
                                        <input type="checkbox" value="q4a3">
                                      Night Shift
                                    </label>
                                        <label class="answer">
                                        <div class="answer-icon answer-icon-square"></div>
                                        <input type="checkbox" value="q4a4">
                                        12-Hour Shift
                                    </label>
                                        <label class="answer">
                                        <div class="answer-icon answer-icon-square"></div>
                                        <input type="checkbox" value="q4a5">
                                       Rotating Shifts
                                    </label>
                                        <label class="answer">
                                        <div class="answer-icon answer-icon-square"></div>
                                       "On-Call" Shifts
                                    </label>
                                    </div>
                                </div>
                                <!-- /question -->
                                
                                 <div class="question">
                                <div class="question-header">
                                    <h2 class="question-count">Question 2 <small>of 6</small><span class="label label-warning">Required Question</span></h2>
                                    <div class="question-text">
                                       
                                       Which of the following best describes your preference for schedule flexibility?
                                    </div>
                                </div>
                                <div class="answers">
                                    <label class="answer">
                                        <div class="answer-icon"></div>
                                        <input type="radio" name="q2" value="Answer 1">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.
                                    </label>
                                    <label class="answer">
                                        <div class="answer-icon"></div>
                                        <input type="radio" name="q2" value="Answer 2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.
                                    </label>
                                    <label class="answer">
                                        <div class="answer-icon"></div>
                                        <input type="radio" name="q2" value="Answer 3">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.
                                    </label>
                                    <label class="answer">
                                        <div class="answer-icon"></div>
                                        <input type="radio" name="q2" value="Answer 4">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.
                                    </label>
                                    <label class="answer">
                                        <div class="answer-icon"></div>
                                        <input type="radio" name="q2" value="Answer 5">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.
                                    </label>
                                </div>
                            </div><!-- /question -->

                                <section class="section">
                                    <div class="form-group">
                                        <a href="/student-behavioral-submission.php" class="btn btn-success">Submit</a>
                                    </div>
                                </section>
                            </section>
                            <!-- /section-main -->


                        </section>
                    </div>
                    <!-- /column -->

                </div>
                <!-- /row -->



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