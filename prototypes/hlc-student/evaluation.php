<?php

include "includes/helpers/helpers.php";

$patterns['footer']['classes'] = array('site-footer-min');

$patterns['start']['title'] = 'This is the Evaluation title';
$patterns['header']['classes'] = array('site-header-min');
$patterns['focus']['title'] = 'This is the Evaluation title';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-evaluation',
    'type' => 'Evaluation',
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
        'value' => '7',
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </section>

                        <section class="section question-group">
                            <div class="question-group-header">
                                <h1>This is a question group name from a text input control</h1>
                                <p class="lead">This is a question group description from a textarea control.</p>
                            </div>
                            <div class="question">
                                <div class="question-header">
                                    <h2 class="question-count">Question 1 <small>of 7</small><span class="label label-warning">Required Question</span></h2>
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

                            <div class="question">
                                <div class="question-header">
                                    <h2 class="question-count">Question 2 <small>of 7</small><span class="label label-warning">Required Question</span></h2>
                                    <div class="question-text">
                                        <b>This is a Multiple Choice question type.</b><br>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
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

                            <div class="question question-likert">
                                <div class="question-header">
                                    <h2 class="question-count">Question 3 <small>of 7</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>This is a Likert question type.</b><br>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </div>
                                </div>
                                <div class="answers answers-likert">
                                    <div class="answer-row">
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 1">
                                                Hate
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 2">
                                                Dislike
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 3">
                                                Meh
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 4">
                                                Like
                                            </div>
                                        </label>
                                        <label class="answer answer-col">
                                            <div class="answer-likert">
                                                <div class="answer-icon"></div>
                                                <input type="radio" name="q3" value="Answer 5">
                                                Love
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div><!-- /question -->

                            <div class="question">
                                <div class="question-header">
                                    <h2 class="question-count">Question 4 <small>of 7</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>This is a Multiple Select question type.</b><br>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </div>
                                    <div class="question-instructions">
                                        Select all that apply
                                    </div>
                                </div>
                                <div class="answers">
                                    <label class="answer">
                                        <div class="answer-icon answer-icon-square"></div>
                                        <input type="checkbox" value="q4a1">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.
                                    </label>
                                    <label class="answer">
                                        <div class="answer-icon answer-icon-square"></div>
                                        <input type="checkbox" value="q4a2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.
                                    </label>
                                    <label class="answer">
                                        <div class="answer-icon answer-icon-square"></div>
                                        <input type="checkbox" value="q4a3">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.
                                    </label>
                                    <label class="answer">
                                        <div class="answer-icon answer-icon-square"></div>
                                        <input type="checkbox" value="q4a4">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.
                                    </label>
                                    <label class="answer">
                                        <div class="answer-icon answer-icon-square"></div>
                                        <input type="checkbox" value="q4a5">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.
                                    </label>
                                </div>
                            </div><!-- /question -->

                            <div class="question">
                                <div class="question-header">
                                    <h2 class="question-count">Question 5 <small>of 7</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>This is a Matching question type.</b><br>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </div>
                                </div>
                                <div class="answers">
                                    <?php
                                    for ( $i=1;$i<6;$i++ ) {
                                        ?>
                                        <div class="answer answer-match">
                                            <div class="answer-row">
                                                <div class="answer-col">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua.
                                                </div>
                                                <div class="answer-col">
                                                    <select class="form-control">
                                                        <option>Choose</option>
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option title="Option 3 - an absurdly long line length to test IE8's issue with text being cut off.">Option 3 - an absurdly long line length to test IE8's issue with text being cut off.</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div><!-- /question -->

                            <div class="question">
                                <div class="question-header">
                                    <h2 class="question-count">Question 6 <small>of 7</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>This is a Drop Down Choice question.</b><br>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </div>
                                </div>
                                <div class="answers">
                                    <select class="form-control">
                                        <option>Choose</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                            </div><!-- /question -->

                            <div class="question">
                                <div class="question-header">
                                    <h2 class="question-count">Question 7 <small>of 7</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>This is a Multi-Line Free Text question type.</b><br>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </div>
                                </div>
                                <div class="answers">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div><!-- /question -->

                        </section>

                        <section class="section question-group">
                            <div class="question-group-header">
                                <h1>This is a second question group</h1>
                            </div>

                            <div class="question">
                                <div class="question-header">
                                    <h2 class="question-count">Question 7 <small>of 7</small><span class="label label-warning">Required Question</span></h2>

                                    <div class="question-text">
                                        <b>This is a Single-Line Free Text question type.</b><br>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </div>
                                </div>
                                <div class="answers">
                                    <input type="text" class="form-control">
                                </div>
                            </div><!-- /question -->
                        </section>

                        <section class="section">
                            <div class="form-group">
                                <button class="btn btn-success" id="submit-evaluation">Complete Evaluation</button>
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
