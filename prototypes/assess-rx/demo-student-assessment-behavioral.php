<?php

include "includes/helpers/helpers.php";
$patterns['start']['title'] = 'RN Behavioral Assessment';
$patterns['focus']['title'] = 'RN Behavioral Assessment';
$patterns['header']['classes'] = array('site-header-min');
$patterns['header']['logoLarge'] = './content/images/logo-assess-large.png';
$patterns['footer']['classes'] = array('site-footer-min');

?>
<?= createSiteStart($patterns['start']); ?>
<div class="no-focus">
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
</div>
<div class="layout layout-min">
    <div class="container">
        <section class="section section-main section-box">
            <div class="col-md-9" style="border-right: 1px solid #ddd;">
                <section class="section"><h1><?= $patterns['start']['title'] ?></h1></section>
                <p>
                    Read the item and decide how often you demonstrate the behavior. Rate each item by selecting the most appropriate response for you. Please answer all items quickly and accurately. Applicants that respond openly and honestly are more likely to be successful in the assessment process.
                </p>
                <form>
                    <section class="section">

                        <!-- /question -->
                        <div class="question likert">
                            <div class="question-header">
                                <h2 class="question-count">Show up late for appointments (e.g., Doctor appointments)</h2>
                            </div>
                            <div class="answers answers-likert">
                                <div class="answer-row">
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Never
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Rarely
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Once in a while
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Sometimes
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Often
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Always
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /question -->
                        <!-- /question -->
                        <div class="question likert">
                            <div class="question-header">
                                <h2 class="question-count">Feel stressed out when things get busy</h2>
                            </div>
                            <div class="answers answers-likert">
                                <div class="answer-row">
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Never
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Rarely
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Once in a while
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Sometimes
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Often
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Always
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /question -->
                        <!-- /question -->
                        <div class="question likert">
                            <div class="question-header">
                                <h2 class="question-count">Shout at others while driving</h2>
                            </div>
                            <div class="answers answers-likert">
                                <div class="answer-row">
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Never
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Rarely
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Once in a while
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Sometimes
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Often
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Always
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /question -->
                        <!-- /question -->
                        <div class="question likert">
                            <div class="question-header">
                                <h2 class="question-count">Find typos/errors in reading materials (e.g., newspapers, magazines)</h2>
                            </div>
                            <div class="answers answers-likert">
                                <div class="answer-row">
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Never
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Rarely
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Once in a while
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Sometimes
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Often
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Always
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /question -->
                        <!-- /question -->
                        <div class="question likert">
                            <div class="question-header">
                                <h2 class="question-count">Look for something positive in a bad situation</h2>
                            </div>
                            <div class="answers answers-likert">
                                <div class="answer-row">
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Never
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Rarely
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Once in a while
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Sometimes
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Often
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Always
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /question -->
                        <!-- /question -->
                        <div class="question likert">
                            <div class="question-header">
                                <h2 class="question-count">Follow through on commitments</h2>
                            </div>
                            <div class="answers answers-likert">
                                <div class="answer-row">
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Never
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Rarely
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Once in a while
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Sometimes
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Often
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Always
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /question -->
                        <!-- /question -->
                        <div class="question likert">
                            <div class="question-header">
                                <h2 class="question-count">Skip work without notice</h2>
                            </div>
                            <div class="answers answers-likert">
                                <div class="answer-row">
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Never
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Rarely
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Once in a while
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Sometimes
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Often
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            Always
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /question -->

                    </section>

                    <section class="section">
                        <div class="form-group">
                            <a href="/demo-student.php" class="btn btn-success">Complete Assessment</a>
                        </div>
                    </section>

                </form>


            </div><!-- /column -->
            <div class="col-md-3 hidden-sm hidden-xs">
                <section class="section section-progress">
                    <div class="skills-progress">
                        <h3>Progress <small>(9 of 85 questions answered)</small></h3>
                        <div class="progress">
                            <div class="progress-bar" style="width:15%">10%</div>
                        </div>
                    </div>
                </section>
            </div>
        </section><!-- /section-main -->
    </div><!-- /container -->
</div><!-- /layout -->


<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $('.branding a').click(function(e){
            e.preventDefault();
            window.location.href="/demo-start.php";
          });
    });
</script>
<?= createSiteEnd(); ?>