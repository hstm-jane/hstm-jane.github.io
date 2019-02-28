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
                    <h2>RN Behavioral Assessment <small>Section 5 of 6</small></h2>

                    <div class="row">

                        <div class="col-md-12">
                            <section class="section">
                                <p>
                                    Section Instructions go here
                                </p>

                                <div class="question">
                                    <div class="question-header">
                                        <h2 class="question-count">Situation 1 <small>of 5</small><span class="label label-warning">Required Question</span></h2>
                                        <div class="question-text">
                                            One of your patients will probably need surgery. The patient and her family have been waiting for the doctor to come and talk to them about the next steps. An upset family member finds you and yells at you. He wants to see the doctor immediately because your patient is in pain. How effective are the following ways of handling the situation?
                                        </div>
                                    </div>

                                    <div class="question-header">
                                        <div class="question-text">
                                            Pull the family member aside and tell him that you understand why he is upset but that you will not be talked to in that manner.
                                        </div>
                                    </div>
                                    <div class="answers answers-likert">
                                        <div class="answer-row">
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 1">
                                             Very Ineffective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 2">
                                                Ineffective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 3">
                                               Somewhat Ineffective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 4">
                                                Somewhat Effective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 5">
                                                Effective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 5">
                                               Very Effective
                                            </div>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="question-header">
                                        <div class="question-text">
                                            Apologize to him for the wait; offer to call the doctor to find out when he will be there and check on the patient to make sure she is as comfortable as she can be.
                                        </div>
                                    </div>
                                    <div class="answers answers-likert">
                                        <div class="answer-row">
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 1">
                                             Very Ineffective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 2">
                                                Ineffective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 3">
                                               Somewhat Ineffective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 4">
                                                Somewhat Effective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 5">
                                                Effective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 5">
                                               Very Effective
                                            </div>
                                        </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /question -->
                                
                                  <div class="question">
                                    <div class="question-header">
                                        <h2 class="question-count">Situation 2 <small>of 5</small><span class="label label-warning">Required Question</span></h2>
                                        <div class="question-text">
                                            One of your patients will probably need surgery. The patient and her family have been waiting for the doctor to come and talk to them about the next steps. An upset family member finds you and yells at you. He wants to see the doctor immediately because your patient is in pain. How effective are the following ways of handling the situation?
                                        </div>
                                    </div>

                                    <div class="question-header">
                                        <div class="question-text">
                                            Pull the family member aside and tell him that you understand why he is upset but that you will not be talked to in that manner.
                                        </div>
                                    </div>
                                    <div class="answers answers-likert">
                                        <div class="answer-row">
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 1">
                                             Very Ineffective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 2">
                                                Ineffective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 3">
                                               Somewhat Ineffective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 4">
                                                Somewhat Effective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 5">
                                                Effective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 5">
                                               Very Effective
                                            </div>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="question-header">
                                        <div class="question-text">
                                            Apologize to him for the wait; offer to call the doctor to find out when he will be there and check on the patient to make sure she is as comfortable as she can be.
                                        </div>
                                    </div>
                                    <div class="answers answers-likert">
                                        <div class="answer-row">
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 1">
                                             Very Ineffective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 2">
                                                Ineffective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 3">
                                               Somewhat Ineffective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 4">
                                                Somewhat Effective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 5">
                                                Effective
                                            </div>
                                        </label>
                                            <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 5">
                                               Very Effective
                                            </div>
                                        </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /question -->





                            </section>

                        </div>
                        <!-- /column -->






                    </div>
                    <!-- /row -->

                    <section class="section">
                        <div class="form-group">
                            <a href="student-behavioral-section-6.php" class="btn btn-success">Next Section</a>
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