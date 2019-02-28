<?php

include "includes/helpers/helpers.php";

$patterns['footer']['classes'] = array('site-footer-min');

$patterns['start']['title'] = 'RN: Emergency Skills Self-Assessment';
$patterns['header']['classes'] = array('site-header-min');




$patterns['footer']['classes'] = array('site-footer-min');

?>
<?= createSiteStart($patterns['start']); ?>
<div class="no-focus">
<?= createHeader($patterns['header']); ?>

<?= createFocus($patterns['focus']); ?>
</div>
<div class="layout layout-min">

    <div class="container">
       <section class="section section-main section-box" data-equalize="layout-columns">
        <div class="row">

            <div class="col-md-9"  style="border-right: 1px solid #ddd;"">

                <h1>RN: Emergency Skills Self-Assessment</h1>

                <section class="hidden-lg hidden-md section section-progress">
                    <div class="skills-progress">
                        <h3>Progress <small>(60 of 152 skills answered)</small></h3>
                        <div class="progress">
                            <div class="progress-bar" style="width:40%">40%</div>
                        </div>
                    </div>


                </section>

                <form >

                    <section class="section">
                        <h4>Self-Assessment Rating Scale:</h4>
                        <ul>
                            <li><label>No Experience</label> - Theory or observation only during the past 12 months</li>
                            <li><label>Limited Experience</label> - Performed less than 12 times within the past 12 months and may need a review</li>
                            <li><label>Experienced</label> - Performed at least once per month within the past 12 months and may need minimal assistance</li>
                            <li><label>Highly Skilled</label> - Performed on at least a weekly basis over the past 12 months; proficient</li>
                        </ul>
                    </section>

                    <section class="section question-group">
                        <div class="question-group-header">
                            <h2>Cardiovascular <small>17 Skills</small></h2>
                        </div>
                        <div class="question likert">
                            <div class="question-header">
                                <h2 class="question-count">Assessment - Ausculation (rate, rhythm) <small>1 of 17</small><span class="label label-warning">Required Question</span></h2>

                            </div>
                            <div class="answers answers-likert">
                                <div class="answer-row">
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 1">
                                            No Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 2">
                                            Limited Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 3">
                                            Experienced
                                        </div>
                                    </label>

                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 5">
                                            Highly Experienced
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div><!-- /question -->
                        <div class="question likert">
                            <div class="question-header">
                                <h2 class="question-count">Assessment - Doppler <small>2 of 17</small><span class="label label-warning">Required Question</span></h2>

                            </div>
                            <div class="answers answers-likert">
                                <div class="answer-row">
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 1">
                                            No Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 2">
                                            Limited Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 3">
                                            Experienced
                                        </div>
                                    </label>

                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 5">
                                            Highly Experienced
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div><!-- /question -->
                        <div class="question likert">
                            <div class="question-header">
                                <h2 class="question-count">Assessment - Heart sounds/murmurs <small>3 of 17</small><span class="label label-warning">Required Question</span></h2>

                            </div>
                            <div class="answers answers-likert">
                                <div class="answer-row">
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 1">
                                            No Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 2">
                                            Limited Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 3">
                                            Experienced
                                        </div>
                                    </label>

                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 5">
                                            Highly Experienced
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div><!-- /question -->
                        <div class="question likert">
                            <div class="question-header">
                                <h2 class="question-count">Assist with Arterial line insertion <small>4 of 17</small><span class="label label-warning">Required Question</span></h2>

                            </div>
                            <div class="answers answers-likert">
                                <div class="answer-row">
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 1">
                                            No Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 2">
                                            Limited Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 3">
                                            Experienced
                                        </div>
                                    </label>

                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 5">
                                            Highly Experienced
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div><!-- /question -->
                        <div class="question likert">
                            <div class="question-header">
                                <h2 class="question-count">Assist with Central line insertion <small>5 of 17</small><span class="label label-warning">Required Question</span></h2>

                            </div>
                            <div class="answers answers-likert">
                                <div class="answer-row">
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 1">
                                            No Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 2">
                                            Limited Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 3">
                                            Experienced
                                        </div>
                                    </label>

                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 5">
                                            Highly Experienced
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div><!-- /question -->
                        <div class="question likert">
                            <div class="question-header">
                                <h2 class="question-count">Assist with setup/insertion of Cardioversion <small>6 of 17</small><span class="label label-warning">Required Question</span></h2>

                            </div>
                            <div class="answers answers-likert">
                                <div class="answer-row">
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 1">
                                            No Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 2">
                                            Limited Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 3">
                                            Experienced
                                        </div>
                                    </label>

                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 5">
                                            Highly Experienced
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div><!-- /question -->
                    </section>

                    <section class="section question-group">
                        <div class="question-group-header">
                            <h2>EENT <small>8 Skills</small></h2>
                        </div>
                        <div class="question likert">
                            <div class="question-header">
                                <h2 class="question-count">Assessment - Ausculation (rate, rhythm) <small>1 of 17</small><span class="label label-warning">Required Question</span></h2>

                            </div>
                            <div class="answers answers-likert">
                                <div class="answer-row">
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 1">
                                            No Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 2">
                                            Limited Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 3">
                                            Experienced
                                        </div>
                                    </label>

                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 5">
                                            Highly Experienced
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div><!-- /question -->
                        <div class="question likert">
                            <div class="question-header">
                                <h2 class="question-count">Assessment - Doppler <small>2 of 17</small><span class="label label-warning">Required Question</span></h2>

                            </div>
                            <div class="answers answers-likert">
                                <div class="answer-row">
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 1">
                                            No Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 2">
                                            Limited Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 3">
                                            Experienced
                                        </div>
                                    </label>

                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 5">
                                            Highly Experienced
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div><!-- /question -->
                        <div class="question likert">
                            <div class="question-header">
                                <h2 class="question-count">Assessment - Heart sounds/murmurs <small>3 of 17</small><span class="label label-warning">Required Question</span></h2>

                            </div>
                            <div class="answers answers-likert">
                                <div class="answer-row">
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 1">
                                            No Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 2">
                                            Limited Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 3">
                                            Experienced
                                        </div>
                                    </label>

                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 5">
                                            Highly Experienced
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div><!-- /question -->
                        <div class="question likert">
                            <div class="question-header">
                                <h2 class="question-count">Assist with Arterial line insertion <small>4 of 17</small><span class="label label-warning">Required Question</span></h2>

                            </div>
                            <div class="answers answers-likert">
                                <div class="answer-row">
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 1">
                                            No Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 2">
                                            Limited Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 3">
                                            Experienced
                                        </div>
                                    </label>

                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 5">
                                            Highly Experienced
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div><!-- /question -->
                        <div class="question likert">
                            <div class="question-header">
                                <h2 class="question-count">Assist with Central line insertion <small>5 of 17</small><span class="label label-warning">Required Question</span></h2>

                            </div>
                            <div class="answers answers-likert">
                                <div class="answer-row">
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 1">
                                            No Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 2">
                                            Limited Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 3">
                                            Experienced
                                        </div>
                                    </label>

                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 5">
                                            Highly Experienced
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div><!-- /question -->
                        <div class="question likert">
                            <div class="question-header">
                                <h2 class="question-count">Assist with setup/insertion of Cardioversion <small>6 of 17</small><span class="label label-warning">Required Question</span></h2>

                            </div>
                            <div class="answers answers-likert">
                                <div class="answer-row">
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 1">
                                            No Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 2">
                                            Limited Experience
                                        </div>
                                    </label>
                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 3">
                                            Experienced
                                        </div>
                                    </label>

                                    <label class="answer answer-col">
                                        <div class="answer-likert">
                                            <div class="answer-icon"></div>
                                            <input type="radio" name="q3" value="Answer 5">
                                            Highly Experienced
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div><!-- /question -->





                    </section>


                    <section class="section">
                        <div class="form-group">
                            <button class="btn btn-success" id="submit-evaluation">Complete Assessment</button>
                        </div>
                    </section>



                </form>

            </div><!-- /column -->
            <div class="col-md-3 hidden-sm hidden-xs">
                <section class="section section-progress">
                    <div class="skills-progress">
                        <h3 >Progress <small>(60 of 152 skills answered)</small></h3>
                        <div class="progress">
                            <div class="progress-bar" style="width:40%">40%</div>
                        </div>
                    </div>


                </section>
            </div>

        </section><!-- /section-main -->

    </div><!-- /row -->
</div><!-- /container -->
</div><!-- /layout -->



<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
var elementPosition = $('.section-progress:visible').offset();

        //scroll to chosen filter
        $(window).scroll(function() {
var elementWidth = $('.section-progress:visible').parent().width();

            if ($(window).scrollTop() > elementPosition.top) {
                $('.section-progress:visible').css({'position': 'fixed', 'top': '0', 'width' : elementWidth,  'margin-top': '0', 'z-index': '5'});
                $('form').css({'margin-top': '145px', 'display':'block'});
                $('.stickybar').css('padding-top', '90px');
            } else {
                $('.section-progress:visible').css({'position': 'static', 'width' : 'auto'});
                $('form').css({'margin-top': 'auto', 'display':'inline'});

            }

            $(window).resize();

        });

</script>
<?= createSiteEnd(); ?>
