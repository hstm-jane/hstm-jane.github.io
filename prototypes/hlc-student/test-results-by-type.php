<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Test results by type';
$patterns['header']['classes'] = array('site-header-min');
$patterns['focus']['title'] = 'Test results by type';
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


                    <section class="section question-group">
                        <div class="question-group-header">
                            <h1>True/False Question Type</h1>
                        </div>

                        <div class="question">
                            <div class="question-header">
                                <h2 class="question-count">Question 1 <small>of 1</small><span class="label label-correct">Correct</span></h2>
                                <div class="question-text">
                                    <b>This is a correct True / False question type without extended feedback.</b>
                                </div>
                            </div>
                            <div class="answers">
                                <div class="answer answer-correct">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Your Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /question -->

                        <div class="question">
                            <div class="question-header">
                                <h2 class="question-count">Question 1 <small>of 1</small><span class="label label-incorrect">Incorrect</span></h2>
                                <div class="question-text">
                                    <b>This is an incorrect True / False question type without extended feedback.</b>
                                </div>
                            </div>
                            <div class="answers">
                                <div class="answer answer-incorrect">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Your Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class="answer answer-space">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Correct Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /question -->


                        <div class="question">
                            <div class="question-header">
                                <h2 class="question-count">Question 1 <small>of 1</small><span class="label label-correct">Correct</span></h2>
                                <div class="question-text">
                                    <b>This is a correct True / False question type with extended feedback.</b>
                                </div>
                            </div>
                            <div class="answers">
                                <div class="answer answer-correct">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Your Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class="answer answer-space">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Other Possible Incorrect Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /question -->

                        <div class="question">
                            <div class="question-header">
                                <h2 class="question-count">Question 1 <small>of 1</small><span class="label label-incorrect">Incorrect</span></h2>
                                <div class="question-text">
                                    <b>This is an incorrect True / False question type with extended feedback.</b>
                                </div>
                            </div>
                            <div class="answers">
                                <div class="answer answer-incorrect">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Your Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class="answer answer-space">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Correct Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /question -->
                    </section>


                    <section class="section question-group">
                        <div class="question-group-header">
                            <h1>Multiple Choice / Dropdown Question Type</h1>
                        </div>

                        <div class="question">
                            <div class="question-header">
                                <h2 class="question-count">Question 1 <small>of 1</small><span class="label label-correct">Correct</span></h2>
                                <div class="question-text">
                                    <b>This is a correct Multiple Choice / Dropdown question type without extended feedback.</b>
                                </div>
                            </div>
                            <div class="answers">
                                <div class="answer answer-correct">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Your Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /question -->

                        <div class="question">
                            <div class="question-header">
                                <h2 class="question-count">Question 1 <small>of 1</small><span class="label label-incorrect">Incorrect</span></h2>
                                <div class="question-text">
                                    <b>This is an incorrect Multiple Choice / Dropdown question type without extended feedback.</b>
                                </div>
                            </div>
                            <div class="answers">
                                <div class="answer answer-incorrect">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Your Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class="answer answer-space">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Correct Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /question -->


                        <div class="question">
                            <div class="question-header">
                                <h2 class="question-count">Question 1 <small>of 1</small><span class="label label-correct">Correct</span></h2>
                                <div class="question-text">
                                    <b>This is a correct Multiple Choice / Dropdown question type with extended feedback.</b>
                                </div>
                            </div>
                            <div class="answers">
                                <div class="answer answer-correct">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Your Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class="answer answer-space">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Other Possible Incorrect Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class="answer answer-space">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Other Possible Incorrect Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class="answer answer-space">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Other Possible Incorrect Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /question -->

                        <div class="question">
                            <div class="question-header">
                                <h2 class="question-count">Question 1 <small>of 1</small><span class="label label-incorrect">Incorrect</span></h2>
                                <div class="question-text">
                                    <b>This is an incorrect Multiple Choice / Dropdown question type with extended feedback.</b>
                                </div>
                            </div>
                            <div class="answers">
                                <div class="answer answer-incorrect">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Your Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class="answer answer-space">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Correct Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class="answer answer-space">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Other Possible Incorrect Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class="answer answer-space">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Other Possible Incorrect Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /question -->
                    </section>

                    <section class="section question-group">
                        <div class="question-group-header">
                            <h1>Multiple Select Question Type</h1>
                        </div>

                        <div class="question">
                            <div class="question-header">
                                <h2 class="question-count">Question 1 <small>of 1</small><span class="label label-correct">Correct</span></h2>
                                <div class="question-text">
                                    <b>This is a correct Multiple Select question type.</b>
                                </div>
                            </div>
                            <div class="answers">
                                <div class="answer answer-correct">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Your Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class="answer answer-correct">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Your Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class="answer answer-correct">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Your Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /question -->

                        <div class="question">
                            <div class="question-header">
                                <h2 class="question-count">Question 1 <small>of 1</small><span class="label label-incorrect">Incorrect</span></h2>
                                <div class="question-text">
                                    <b>This is an incorrect Multiple Select question type.</b>
                                </div>
                            </div>
                            <div class="answers">
                                <div class="answer answer-correct">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Your Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class="answer answer-incorrect">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Your Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class="answer answer-missed">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">You Missed</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /question -->

                    </section>

                    <section class="section question-group">
                        <div class="question-group-header">
                            <h1>Matching Question Type</h1>
                        </div>

                        <div class="question">
                            <div class="question-header">
                                <h2 class="question-count">Question 1<small>of 1</small><span class="label label-correct">Correct</span></h2>
                                <div class="question-text">
                                    <b>This is a correct Matching question type.</b>
                                </div>
                            </div>
                            <div class="answers">
                                <div class="answer answer-correct">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Item 1</div>
                                        <div class="answer-exp-body">
                                            Item Value
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Your Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Correct Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class="answer answer-correct">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Item 2</div>
                                        <div class="answer-exp-body">
                                            Item Value
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Your Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Correct Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /question -->
                        <div class="question">
                            <div class="question-header">
                                <h2 class="question-count">Question 1<small>of 1</small><span class="label label-incorrect">Incorrect</span></h2>
                                <div class="question-text">
                                    <b>This is an incorrect Matching question type.</b>
                                </div>
                            </div>
                            <div class="answers">
                                <div class="answer answer-correct">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Item 1</div>
                                        <div class="answer-exp-body">
                                            Item Value
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Your Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Correct Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class="answer answer-incorrect">
                                    <div class="answer-icon"></div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Item 2</div>
                                        <div class="answer-exp-body">
                                            Item Value
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Your Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Correct Answer</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                    <div class="answer-exp-group">
                                        <div class="answer-exp-title">Rationale</div>
                                        <div class="answer-exp-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /question -->
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
                        <ul class="unstyled">
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