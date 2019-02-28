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
                    <h2>RN Behavioral Assessment <small>Section 2 of 6</small></h2>
                   
                    <div class="row">

                        <div class="col-md-12">
                            <section class="section">
                                 <p>
                        Read the item and decide how often you demonstrate the behavior. Rate each item by selecting the most appropriate response for you. Please answer all items quickly and accurately. Applicants that respond openly and honestly are more likely to be successful in the assessment process.
                    </p>
                                <div class="question">
                                    <div class="question-header">
                                        <h2 class="question-count">Item 1 <small>of 11</small><span class="label label-warning">Required Question</span></h2>
                                        <div class="question-text">
                                       Find typos/errors in reading materials (e.g., newspapers, magazines)
                                        </div>
                                    </div>
                                     <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 1">
                                                Never
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 2">
                                                Rarely
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 3">
                                                Once in a while
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 4">
                                                Sometimes
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 5">
                                                Often
                                            </div>
                                        </label>
                                           <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 5">
                                                Always
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                </div>
                                <!-- /question -->
                                <div class="question">
                                    <div class="question-header">
                                        <h2 class="question-count">Item 2 <small>of 11</small><span class="label label-warning">Required Question</span></h2>
                                        <div class="question-text">
                                       Show up late to work.
                                        </div>
                                    </div>
                                    <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 1">
                                                Never
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 2">
                                                Rarely
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 3">
                                                Once in a while
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 4">
                                                Sometimes
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 5">
                                                Often
                                            </div>
                                        </label>
                                           <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 5">
                                                Always
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                </div>
                                <!-- /question --><div class="question">
                                    <div class="question-header">
                                        <h2 class="question-count">Item 3 <small>of 11</small><span class="label label-warning">Required Question</span></h2>
                                        <div class="question-text">
                                           Do what you say you will do.
                                        </div>
                                    </div>
                                     <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 1">
                                                Never
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 2">
                                                Rarely
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 3">
                                                Once in a while
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 4">
                                                Sometimes
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 5">
                                                Often
                                            </div>
                                        </label>
                                           <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 5">
                                                Always
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                </div>
                                <!-- /question --><div class="question">
                                    <div class="question-header">
                                        <h2 class="question-count">Item 4 <small>of 11</small><span class="label label-warning">Required Question</span></h2>
                                        <div class="question-text">
                                      Look for something positive in a bad situation.
                                        </div>
                                    </div>
                                     <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 1">
                                                Never
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 2">
                                                Rarely
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 3">
                                                Once in a while
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 4">
                                                Sometimes
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 5">
                                                Often
                                            </div>
                                        </label>
                                           <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 5">
                                                Always
                                            </div>
                                        </label>
                                    </div>
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
                            <a href="student-behavioral-section-3.php" class="btn btn-success">Next Section</a>
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