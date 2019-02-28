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
        'value' => 'Fail, 57%',
    ),
);
$patterns['focus']['supporting'] = '
    <figure class="fph-chart-holder">
        <canvas class="fph-chart" data-type="Doughnut" data-segments="[[57,1],[43,0]]" width="108" height="108"></canvas>
        <figcaption>57%</figcaption>
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

            <!-- <section class="section">
                <div class="results-header results-passed">
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
            </section> -->

            <section class="section">
                <div class="results-header results-failed">
                    <div class="results-header-inner">
                        <div class="results-header-icon">
                            <i class="fa fa-times-circle results-icon-failed"></i>
                            <i class="fa fa-check-circle results-icon-passed"></i>
                        </div>
                        <div class="results-header-message">
                            <h2>You did not pass this test.</h2>
                            <p>You scored 13 out of 20, or 57%. To pass, you needed to correctly answer 16 questions, or 80%.</p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="section">

                <div class="question">
                    <div class="question-header">
                        <h2 class="question-count">Question 1 <small>of 4</small><span class="label label-incorrect">Incorrect</span></h2>
                        <div class="question-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
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

                  <div class="question">
                    <div class="question-header">
                        <h2 class="question-count">Question 2 <small>of 4</small><span class="label label-incorrect">Incorrect</span></h2>
                        <div class="question-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
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

                  <div class="question">
                    <div class="question-header">
                        <h2 class="question-count">Question 3 <small>of 4</small><span class="label label-correct">Correct</span></h2>
                        <div class="question-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
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
                        <h2 class="question-count">Question 4 <small>of 4</small><span class="label label-incorrect">Incorrect</span></h2>
                        <div class="question-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
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
                                <div class="answer-exp-title">Incorrect Answer</div>
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