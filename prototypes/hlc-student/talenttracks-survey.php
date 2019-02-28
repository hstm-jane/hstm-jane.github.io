<?php

include "includes/helpers/helpers.php";

$patterns['footer']['classes'] = array('site-footer-min');

$patterns['start']['title'] = 'Emerging Leader Confidence Assessment';
$patterns['header']['classes'] = array('site-header-min');
$patterns['focus']['title'] = 'Emerging Leader Confidence Assessment';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-survey',
    'type' => 'Survey',
);
$patterns['focus']['meta_primary'] = array(
    array(
        'label' => 'From:',
        'value' => '<a href="#" class="meta-value">TalentTracks</a>',
    ),
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Status:',
        'value' => 'In Progress',
    ),
    array(
        'label' => 'Questions:',
        'value' => '20',
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

                    <form>

                        <section class="section">
                            This is an introduction or instruction block. I figured you wouldn't jump straight into questions without telling the servey respondants what they hope to gain by filling this out.
                        </section>


                        <section class="section question-group">

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 1 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Promoting teamwork among coworkers</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q1" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q1" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q1" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q1" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 2 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Appropriately communicating clear expectations to others</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q12" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q2" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q2" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q2" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 3 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Demonstrating ability to prioritize tasks appropriately</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 4 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Taking personal action that positively impacts the success of the organization</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q4" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q4" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q4" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q4" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 5 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Anticipating problems to minimize negative impact and/or ramifications</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q5" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q5" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q5" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q5" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 6 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Delivering articulate messages even in difficult and complex circumstances</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q6" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q6" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q6" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q6" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 7 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Considers the tone of communications and adjusts to the situation through use of verbal and non-verbal behavior</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q7" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q7" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q7" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q7" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 8 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Effectively participating in meetings to achieve desired outcomes</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q8" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q8" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q8" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q8" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 9 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Practicing effective listening techniques to create maximum opportunity for improvement</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q9" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q9" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q9" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q9" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 10 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Seeking opportunities for continuous learning</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q10" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q10" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q10" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q10" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 11 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Exhibiting changes in behavior as a result of feedback from others</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q11" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q11" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q11" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q11" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 12 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Dealing with conflict in an objective manner</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q12" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q12" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q12" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q12" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->


                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 13 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Demonstrating appropriate behavior when dealing with conflicts among employees</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q13" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q13" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q13" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q13" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 14 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Recognizing the benefits in the diversity of people, ideas, and cultures</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q14" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q14" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q14" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q14" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 15 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Using appropriate interpersonal skills to gain acceptance for ideas</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q15" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q15" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q15" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q15" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 16 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Managing his / her power of influence to effect positive change on others</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q16" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q16" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q16" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q16" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 17 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Creating a positive work environment for others</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q17" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q17" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q17" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q17" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 18 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Motivating colleagues to achieve desired end results</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q18" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q18" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q18" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q18" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 19 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Creating a positive environment where staff are free to express concerns</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q19" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q19" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q19" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q19" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 20 <small>of 20</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>Finding ways to work more efficiently</b>
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q20" value="Answer 1">
                                                Not Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q20" value="Answer 2">
                                                Slightly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q20" value="Answer 3">
                                                Mostly Confident
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q20" value="Answer 4">
                                                Very Confident
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div><!-- /question -->

                        </section>



                        <section class="section">
                            <div class="form-group">
                                <button class="btn btn-success">Complete Survey</button>
                                <a href="talenttracks-landing.php" class="btn btn-default">Cancel</a>
                            </div>
                        </section>

                    </form>

                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
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
