<?php

  include "includes/helpers/helpers.php";

  $patterns['start']['title'] = 'Assessment Results';
  $patterns['focus']['title'] = 'Assessment Results';

  $patterns['header']['mainNavActive'] ='results';

?>


    <?=createSiteStart($patterns['start']);?>
        <div class="no-focus">
            <?= createHeader($patterns['header']); ?>
                <?= createFocus($patterns['focus']); ?>
        </div>


        <div class="layout">
            <div class="container" id="path-results-container">
                <section class="section section-main section-box">

                    <section class="header-section-results">
                        <div class="row">
                            <div class="col-md-7">
                                <h1>Abigail Abbot</h1>
                                <h4>Assessment Path: Emergency RN</h4>
                                <!-- Removing for now. Paths are not entities. So, no path has an assigned/completed date. 
                                    <div style="font-size: 13px; margin-top: 10px;">Path Assigned: 10/12/2017</div>
                                    <div style="font-size: 13px; margin-bottom:5px">Path Completed: 10/18/2017</div>
                                -->

                            </div>
                            <div class="col-md-5 text-center">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="segment-summary">
                                            <h4>Knowledge</h4>
                                            <p class="segment-score score-font">85%</p>
                                            <div class="segment-score__context">80th Percentile</div>
                                            <div class="segment-score__context">Benchmark 80%</div>
                                        </div>

                                    </div>
                                    <div class="col-xs-6">
                                        <div class="segment-summary">
                                            <h4>Skills</h4>
                                            <p class="segment-score score-font">76%</p>
                                            <div class="segment-score__context">80th Percentile</div>
                                            <div class="segment-score__context">Benchmark 80%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                    <section class="section section-results">
                        <h2>Knowledge Details <span class="score-font">85%</span></h2>

                        <section class="section section-results__assessment">

                            <section class="section feedback ">
                                <h3>RN: Emergency Assessment <span class="score-font">85%</span></h3>

                                <section class="assessment-results__section categories">
                                    <div class="row ">
                                        <div class="categories__header">
                                            <div class="col-md-5 text-left visible-sm visible-xs"> Categories</div>
                                            <div class="col-md-5 text-left hidden-sm hidden-xs"> Results by Category</div>
                                            <div class="col-md-4 text-center hidden-sm hidden-xs hidden-print"> Number Answered Correctly</div>
                                            <div class="col-md-3 text-center hidden-sm hidden-xs"> Percentage Correct</div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5 text-left">Cardiovascular
                                            <div class=" visible-xs">100%</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="progress ">
                                                <div class="progress-bar" style="width:100%;">3 of 3 correct</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 text-center hidden-xs">100%</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5 text-left">Respiratory
                                            <div class="visible-xs">50%</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="progress">
                                                <div class="progress-bar" style="width:50%;">2 of 4 correct</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 text-center hidden-xs">50%</div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-sm-5 text-left">Gastrointestinal
                                            <div class=" visible-xs">75%</div>

                                        </div>
                                        <div class=" col-sm-4">
                                            <div class="progress">
                                                <div class="progress-bar" style="width:75%;">3 of 4 correct</div>
                                            </div>
                                        </div>
                                        <div class=" col-sm-3 hidden-xs text-center">75%</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5 text-left">Neurology
                                            <div class=" visible-xs">83%</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="progress">
                                                <div class="progress-bar" style="width:83%;">5 of 6 correct</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 hidden-xs text-center">83%</div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-sm-5 text-left">Professional Issues
                                            <div class=" visible-xs">0%</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="progress  warning">0 of 1 correct
                                                <div class="progress-bar" style="width:0%;"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 hidden-xs text-center">0%</div>
                                    </div>
                                </section>


                                <!-- feedback -->
                                <section class="section">
                                    <h4>Feedback</h4>
                                    <div>
                                        <p>Based on the questions answered incorrectly, it is recommended that Abigail review the following topics:</p>
                                        <ul>

                                            <li>The most likely diagnosis for the patient who is experiencing symptoms of flank pain with hematuria</li>
                                            <li>The additional disease process for which a patient with a history of intermittent claudication of the lower extremities is at high risk</li>
                                            <li>
                                                Diagnoses that are surgical emergencies</li>
                                            <li>The appropriate dose of acetaminophen for pediatric patients</li>
                                            <li>The most common symptom of appendicitis</li>
                                        </ul>
                                    </div>
                                </section>
                                <!-- /feedback -->
                            </section>

                            <section class="section feedback ">
                                <h3>Pharmacology: RN Assessment 80%</h3>
                                <section class="section  ">



                                    <section class="assessment-results__section  categories">
                                        <div class="row categories__header ">

                                            <div class="col-md-5 text-left visible-sm visible-xs"> Categories</div>

                                            <div class="col-sm-5 text-left hidden-xs"> Results by Category</div>
                                            <div class="col-sm-4 text-center hidden-xs"> Number Answered Correctly</div>
                                            <div class="col-sm-3 text-center hidden-xs"> Percentage Correct</div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5 text-left">Cardiovascular
                                                <div class=" visible-xs">66%</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="progress ">
                                                    <div class="progress-bar" style="width:80%;">2 of 3 correct</div>
                                                </div>
                                            </div>

                                            <div class="col-sm-3 hidden-xs text-center">66%</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5 text-left">Respiratory
                                                <div class=" visible-xs">50%</div>
                                                
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:50%;">2 of 4 correct</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 hidden-xs text-center">50%</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5 text-left">Gastrointestinal
                                                <div class=" visible-xs">0%</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="progress warning">0 of 4 correct
                                                    <div class="progress-bar" style="width:0%;"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 hidden-xs text-center">0%</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5 text-left">Neurology
                                                <div class=" visible-xs">83%</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:44%;">5 of 6 correct</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 hidden-xs text-center">83%</div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-sm-5 text-left">Professional Issues
                                                <div class=" visible-xs">90%</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="progress  ">
                                                    <div class="progress-bar" style="width:90%;">9 of 10 correct</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 hidden-xs text-center">90%</div>
                                        </div>
                                    </section>

                                    <section class="section">
                                        <h4>Feedback</h4>
                                        <div>
                                            <p>Based on the questions answered incorrectly, it is recommended that Abigail review the following topics:</p>
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                <li>Etiam cursus lectus eget nulla sodales gravida. </li>
                                                <li>Donec sed convallis risus. </li>
                                                <li>Suspendisse ut vulputate nulla.</li>
                                                <li>Fusce tincidunt ex ut euismod pharetra. Maecenas facilisis at dolor ut interdum.</li>
                                                <li>Fusce tincidunt ex ut euismod pharetra. Maecenas facilisis at dolor ut interdum.</li>
                                                <li>Fusce tincidunt ex ut euismod pharetra. Maecenas facilisis at dolor ut interdum.</li>
                                            </ul>
                                        </div>
                                    </section>

                                </section>


                            </section>
                        </section>

                        <section class="section skills-details results-section" id="skills-details">
                            <h2>Skills Details 76%</h2>
                            <section class="section section-results__assessment">

                                <div class="section feedback">
                                    <h3>RN: Emergency Skills Self-Assessment 76% </h3>

                                    <section class="section">
                                        <h4>Self-Assessment Rating Scale:</h4>
                                        <ul>
                                            <li><label>No Experience</label> - Theory or observation only during the past 12 months</li>
                                            <li><label>Limited Experience</label> - Performed less than 12 times within the past 12 months and may need a review</li>
                                            <li><label>Experienced</label> - Performed at least once per month within the past 12 months and may need minimal assistance</li>
                                            <li><label>Highly Skilled</label> - Performed on at least a weekly basis over the past 12 months; proficient</li>
                                        </ul>
                                    </section>

                                    <section class="categories">
                                        <div class="row categories__header">
                                            <div class="col-sm-9 text-left"> Cardiovascular</div>
                                            <div class="col-sm-3 hidden-xs "> Rating</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9 text-left">Assessment - Ausculation (rate, rhythm)</div>
                                            <div class="col-sm-3">Highly Skilled</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9 text-left">Assessment - Doppler</div>
                                            <div class="col-sm-3">Highly Skilled</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9 text-left">Assist with Arterial line insertion</div>
                                            <div class="col-sm-3">Limited Experience</div>
                                        </div>
                                        <div class="row danger">
                                            <div class="col-sm-9 text-left">
                                                Assist with Central line insertion</div>
                                            <div class="col-sm-3">No Experience</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9 text-left">Assist with setup/insertion of Cardioversion</div>
                                            <div class="col-sm-3">Experienced</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9 text-left">Care of patient - Acute MI</div>
                                            <div class="col-sm-3">Experienced</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9 text-left">Care of patient - Angina</div>
                                            <div class="col-sm-3">Experienced</div>
                                        </div>
                                    </section>

                                    <section class="categories">
                                        <div class="row categories__header">


                                            <div class="col-sm-9 text-left"> Pulmonary</div>
                                            <div class="col-sm-3 hidden-xs"> Rating</div>


                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9 text-left">Cardiovascular</div>
                                            <div class="col-sm-3">Experienced</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9 text-left">Cardiovascular</div>
                                            <div class="col-sm-3">Experienced</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9 text-left">Cardiovascular</div>
                                            <div class="col-sm-3">Experienced</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9 text-left">Cardiovascular</div>
                                            <div class="col-sm-3">Experienced</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9 text-left">Cardiovascular</div>
                                            <div class="col-sm-3">Experienced</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9 text-left">Cardiovascular</div>
                                            <div class="col-sm-3">Experienced</div>
                                        </div>
                                        <div class="row danger">
                                            <div class="col-sm-9 text-left">Cardiovascular</div>
                                            <div class="col-sm-3">Not Experienced</div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-sm-9 text-left">Cardiovascular</div>
                                            <div class="col-sm-3">Experienced</div>
                                        </div>
                                    </section>
                                </div>
                            </section>
                        </section>
                    </section>
                </section>
            </div>
            <!-- /container -->
        </div>
        <!-- /layout -->





        <?=createFooter($patterns['footer']);?>
            <?=createPrototypeNav();?>
                <?=createSiteScripts();?>






                    <?=createSiteEnd();?>