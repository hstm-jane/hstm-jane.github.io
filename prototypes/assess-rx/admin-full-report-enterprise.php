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
            <div class="container">
                <section class="section section-main section-box">

                    <section class="header-section-results">
                        <div class="row">
                            <div class="col-md-10">
                                <h1>Abigail Abbot</h1>
                                <h4>Assessment Path: Emergency RN</h4>
                                <!-- Removing for now. Paths are not entities. So, no path has an assigned/completed date. 
                                    <div style="font-size: 13px; margin-top: 10px;">Path Assigned: 10/12/2017</div>
                                    <div style="font-size: 13px; margin-bottom:5px">Path Completed: 10/18/2017</div>
                                -->

                            </div>
                            <div class="col-md-2">
                                <div class="index-container ">
                                    <div class="index">
                                        <div class="index-score">87</div>
                                    </div>
                                    <div class="index-label text-center">Index Score</div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <hr />
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="segment-summary">
                                        <h4>Knowledge</h4>
                                        <p class="segment-score score-font">85%</p>
                                        <div class="segment-score__context">0th Percentile</div>
                                        <div class="segment-score__context">Benchmark 80%</div>
                                    </div>

                                </div>
                                <div class="col-xs-3">
                                    <div class="segment-summary">
                                        <h4>Skills</h4>
                                        <p class="segment-score score-font">76%</p>
                                        <div class="segment-score__context">40th Percentile</div>
                                        <div class="segment-score__context">Benchmark 80%</div>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="segment-summary">
                                        <h4>Behavioral</h4>
                                        <p class="segment-score score-font">85%</p>
                                        <div class="segment-score__context">40th Percentile</div>
                                        <div class="segment-score__context">Benchmark 80%</div>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="segment-summary">
                                        <h4>Judgment</h4>
                                        <p class="segment-score score-font">85%</p>
                                        <div class="segment-score__context">70th Percentile</div>
                                        <div class="segment-score__context">Benchmark 80%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <hr />


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
                                <section class="section">
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
                    </section>

                    <section class="section  section-results">
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

                    <section class="section section-results ">
                        <h2>Behavioral Details </h2>

                        <section class="section section-results__assessment ">
                            <section class="section feedback">
                                <h3>RN Behavioral Assessment <span class="assessment-score">85%</span></h3>


                                <section class=" categories">
                                    <div class="row categories__header hidden-xs hidden-sm">
                                        <div class="col-md-3">Results by Category</div>
                                        <div class="col-md-3">Low <span style="float:right">High</span></div>
                                        <div class="col-md-6 text-center">Suggested Interview Probes</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">Accountable</div>
                                        <div class="col-md-3">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" style="width:70%;">70%</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            Tell me about a time when you made a mistake at work? What was the mistake? What did you do? How did it turn out?
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">Adaptable</div>
                                        <div class="col-md-3">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" style="width:80%;">80%</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            Oftentimes, our workdays are filled with inexpected events. Tell me about a time when you had to adjust your workday to accommodate unexpected responsibilities.
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">Collaborative</div>
                                        <div class="col-md-3">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" style="width:90%;">90%</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            Tell me about a time when you pitched in to help a co-worker on the job. What did you do? What was the result?
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">Emotional Intelligence</div>
                                        <div class="col-md-3">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" style="width:30%;">30%</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            Working in a health-related industry forces us to interact with individuals with mentil illness. Tell me about a time when you had to care for a person less fortunate than yourself.
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">Decision Making</div>
                                        <div class="col-md-3">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" style="width:90%;">90%</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            Tell me about a time when you had to make a judgement call about a patient, What was the situation? What kind of decision did you have to make? What happened?
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">Dependable</div>
                                        <div class="col-md-3">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" style="width:30%;">30%</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            Everyone must miss work at some time or another. Tell me how many unexcused or unapproved absenses you think are acceptable for people to have without penalty.
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">Patient Focus</div>
                                        <div class="col-md-3">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" style="width:60%;">60%</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            Tell me about the most recent example when you went out of your way to help someone else. What was the situation and what did you do?
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">Quality Focus</div>
                                        <div class="col-md-3">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" style="width:60%;">60%</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            Tell me about a time when you were able to catch a potential problem because you sensed something was wrong. What was the situation? What was the problem? What happened?
                                        </div>
                                    </div>
                                </section>



                                <section class="section ">
                                    <h3>Working Preferences</h3>
                                    <table class="table table--working-prefs">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Low</th>
                                                <th>Med</th>
                                                <th>High</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Nursing Independence</td>
                                                <td>Prefers guidance</td>
                                                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                                                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                                                <td><span class="fa fa-lg fa-check-circle text-success"></span></td>
                                                <td>Works independently</td>
                                            </tr>
                                            <tr>
                                                <td>Task Variety</td>
                                                <td>Desired routine tasks</td>
                                                <td><span class="fa fa-lg fa-check-circle text-success"></span></td>
                                                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                                                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                                                <td>Needs challenges and variety</td>
                                            </tr>
                                            <tr>
                                                <td>Time with Patients</td>
                                                <td>Enjoys spending time with fewer patients</td>
                                                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                                                <td><span class="fa fa-lg fa-check-circle text-success"></span></td>
                                                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                                                <td>Enjoys helping numerous people</td>
                                            </tr>
                                            <tr>
                                                <td>Nursing Environment</td>
                                                <td>Prefers quiet/calm environment</td>
                                                <td><span class="fa fa-lg fa-check-circle text-success"></span></td>
                                                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                                                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                                                <td>Enjoys fast-paced/ dynamic environment</td>
                                            </tr>
                                            <tr>
                                                <td>Schedule Flexibility</td>
                                                <td>Prefers predictable schedule</td>
                                                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                                                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                                                <td><span class="fa fa-lg fa-check-circle text-success"></span></td>
                                                <td>Wants schedule flexibility</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </section>

                                <section class="section ">
                                    <h3>Shift Preferences</h3>
                                    <div class="row">
                                        <div class="col-sm-2"><span class="fa fa-lg fa-check-circle text-success"></span> Day Shift</div>
                                        <div class="col-sm-2"><span class="fa fa-lg fa-times text-danger"></span> 2nd Shift</div>
                                        <div class="col-sm-2"><span class="fa fa-lg fa-times text-danger"></span> Night Shift</div>
                                        <div class="col-sm-2"><span class="fa fa-lg fa-check-circle text-success"></span> 12-hr Shifts</div>
                                        <div class="col-sm-2"><span class="fa fa-lg fa-check-circle text-success"></span> Rotating Shifts</div>
                                        <div class="col-sm-2"><span class="fa fa-lg fa-check-circle text-success"></span> On Call</div>
                                    </div>
                                </section>
                            </section>



                        </section>
                    </section>

                    <section class="section section-results">

                        <h2>Judgment Details</h2>

                        <section class="section section-results__assessment ">
                            
                            <section class="section feedback">
                                <h3>RN Acute Care Judgment Assessment <span class="assessment-score">85%</span></h3>
                                <section >
                                    <h4>Abigail was presented with the following clinical problems to recognize and manage:</h4>
                                    <ul>
                                        <li>Blood Transfusion Reaction</li>
                                        <li>Diabetic Ketoacidosis</li>
                                        <li>Bowel Perforation / Peritonitis</li>
                                        <li>Digoxin Toxicity</li>
                                        <li>Increased Intracranial Pressure</li>
                                        <li>Pulmonary Embolus or Pneumothorax</li>
                                        <li>Urinary Retention</li>
                                        <li>Cerebral Vascular Accident</li>
                                        <li>Myocardial Infarction</li>
                                    </ul>
                                    <br>
                                    <h4>Results Summary:</h4>
                                    <p>Abigail accurately identified <b>5</b> of the eight problems, and successfully managed <b>4</b> of the eight problems.</p>
                                    <p>Abigail over prioritized <b>1</b> problem(s), under prioritized <b>0</b> problem(s) and accurately prioritized <b>7</b> problem(s).</p>
                                    <p>When contacting a provider, Abigail omitted relevant data on <b>2</b> problems.</p>
                                </section>

                                <section class="section " id="scroll-blood-transfusion-reaction">
                                    <h3>Blood Transfusion Reaction</h3>
                                    <section class="section">
                                        <h4>Problem</h4>
                                        <p>Abigail accurately identified Blood Transfusion Reaction as the primary problem.</p>
                                    </section>
                                    <section class="section">
                                        <h4>Observations</h4>
                                        <p>Abigail accurately identified:</p>
                                        <ul>
                                            <li>Fever</li>
                                            <li>Chills</li>
                                        </ul>
                                        <p>Abigail did not identify:</p>
                                        <ul>
                                            <li>Itching</li>
                                        </ul>
                                    </section>
                                    <section class="section">
                                        <h4>Actions</h4>
                                        <p>Abigail took the following actions:</p>
                                        <ul>
                                            <li>Notify Provider</li>
                                            <li>Discontinued Blood</li>
                                            <li>Maintained IV</li>
                                        </ul>
                                        <p>Abigail omitted the following actions:</p>
                                        <ul>
                                            <li>None</li>
                                        </ul>
                                    </section>
                                </section>

                                <section class="section " id="scroll-diabetic-ketoacidosis">
                                    <h3>Diabetic Ketoacidosis</h3>
                                    <section class="section">
                                        <h4>Problem</h4>
                                        <p>Abigail accurately identified Diabetic Ketoacidosis as the primary problem.</p>
                                    </section>
                                    <section class="section">
                                        <h4>Observations</h4>
                                        <p>Abigail accurately identified:</p>
                                        <ul>
                                            <li>Increased glucose</li>
                                            <li>Increased ketones</li>
                                            <li>Increased potassium</li>
                                        </ul>
                                        <p>Abigail did not identify:</p>
                                        <ul>
                                            <li>Change in level of consciousness</li>
                                        </ul>
                                        <p>Abigail made the following observations:</p>
                                        <ul>
                                            <li>None</li>
                                        </ul>
                                    </section>
                                    <section class="section">
                                        <h4>Actions</h4>
                                        <p>Abigail took the following actions:</p>
                                        <ul>
                                            <li>Notify Provider</li>
                                            <li>Anticipated order for IV Insulin</li>
                                            <li>Monitor glucose</li>
                                            <li>Monitor level of consciousness</li>
                                        </ul>
                                        <p>Abigail omitted the following actions:</p>
                                        <ul>
                                            <li>None</li>
                                        </ul>
                                        <p>Abigail took the following contraindicated actions:</p>
                                        <ul>
                                            <li>None</li>
                                        </ul>
                                    </section>
                                    <section class="section">
                                        <h4>Rationale</h4>
                                        <p>Abigail provide the following rationales for her actions:</p>
                                        <ul>
                                            <li>"To help decrease the blood sugar level"</li>
                                            <li>"To keep the patient safe"</li>
                                        </ul>
                                    </section>
                                </section>

                                <section class="section " id="scroll-bowel-perforation-peritonitis">
                                    <h3>Bowel Perforation / Peritonitis</h3>
                                    <section class="section">
                                        <h4>Problem</h4>
                                        <p>Abigail misidentified the primary problem of Bowel Perforation / Peritonitis as "Heart Attack".</p>
                                    </section>
                                    <section class="section">
                                        <h4>Observations</h4>
                                        <p>Abigail accurately identified:</p>
                                        <ul>
                                            <li>Abdominal pain</li>
                                        </ul>
                                        <p>Abigail did not identify:</p>
                                        <ul>
                                            <li>No bowel sounds</li>
                                            <li>Increased temperature</li>
                                            <li>Rigid abdomen</li>
                                        </ul>
                                        <p>Abigail made the following observations:</p>
                                        <ul>
                                            <li>"Patient appears uncomfortable and sweating"</li>
                                        </ul>
                                    </section>
                                    <section class="section">
                                        <h4>Actions</h4>
                                        <p>Abigail took the following actions:</p>
                                        <ul>
                                            <li>Notify Provider</li>
                                        </ul>
                                        <p>Abigail omitted the following actions:</p>
                                        <ul>
                                            <li>Administer pain medication</li>
                                            <li>Anticipate order for surgery or Anticipate order for diagnostic test</li>
                                        </ul>
                                        <p>Abigail took the following contraindicated actions:</p>
                                        <ul>
                                            <li>None</li>
                                        </ul>
                                    </section>
                                    <section class="section">
                                        <h4>Rationale</h4>
                                        <p>Abigail provide the following rationales for her actions:</p>
                                        <ul>
                                            <li>"Surgical intervention is needed for bowel perforation"</li>
                                            <li>"To get surgery scheduled"</li>
                                        </ul>
                                    </section>
                                </section>

                                <section class="section ">
                                    <h3>Preceptor Card</h3>
                                    <section class="section">
                                        <h4>Problem Identification</h4>
                                        <ul>
                                            <li>Ask orientee for patients assigned:
                                                <ul>
                                                    <li>What complications could occur?</li>
                                                    <li>What clinical data would lead you to believe this complication could or is occurring?</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </section>
                                    <section class="section">
                                        <h4><span class="fa fa-lg fa-times text-danger"></span> Problem Management</h4>
                                        <ul>
                                            <li>Communication with MD / Anticipate MD orders:
                                                <ul>
                                                    <li>Give multiple opportunities to call physicians</li>
                                                    <li>Before calling, ask Abigail the following:
                                                        <ul>
                                                            <li>What data are you going to give the MD?</li>
                                                            <li>What orders will you expect to get from the MD?</li>
                                                            <li>Why are these orders needed?</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>Independent nursing actions:
                                                <ul>
                                                    <li>Ask Abigail Abbot for patients assigned:
                                                        <ul>
                                                            <li>What nursing actions do you need to take and why?</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </section>
                                    <section class="section">
                                        <h4><span class="fa fa-lg fa-times text-danger"></span> Rationale</h4>
                                        <ul>
                                            <li>Ask Abigail Abbot for patients assigned:
                                                <ul>
                                                    <li>Why are these particular interventions relevant for this patient?</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </section>

                                    <section class="section">
                                        <h4>Problem Identification</h4>
                                        <ul>
                                            <li>Ask orientee for patients assigned:
                                                <ul>
                                                    <li>What clinical data indicates the patient needs immediate intervention &amp; why?</li>
                                                </ul>
                                            </li>
                                            <li>If actions/interventions taken by the orientee are irrelevant or could have caused harm ask:
                                                <ul>
                                                    <li>What makes the action unacceptable and what should have been done?</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </section>

                                    <section class="section">
                                        <h4>Please also include in the patient assignment the following throughout orientation:</h4>
                                    </section>

                                    <section class="section">
                                        <h4><span class="fa fa-lg fa-times text-danger"></span> Patients experiencing:</h4>
                                        <ul>
                                            <li>Respiratory compromise</li>
                                            <li>Neurological deficits</li>
                                            <li>Cardiac complications</li>
                                            <li>Genitourinary complications</li>
                                        </ul>
                                    </section>

                                    <section class="section">
                                        <h4>Discuss the following topics with Abigail:</h4>
                                        <ul>
                                            <li>The most likely diagnosis for the patient who is experiencing symptoms of flank pain with hematuria
                                                <li>The additional disease process for which a patient with a history of intermittent claudication of the lower extremities is at high risk</li>
                                                <li>Diagnoses that are surgical emergencies</li>
                                                <li>The appropriate dose of acetaminophen for pediatric patients</li>
                                                <li>The most common symptom of appendicitis</li>
                                                <li>The side effects of Gentamyacin</li>
                                        </ul>
                                    </section>

                                    <section class="section">
                                        <h4>Review the following skills with Abigail:</h4>
                                        <ul>
                                            <li>Assist with Central line insertion</li>
                                            <li>Chest Tube - Use of Pleurevac or Thoraclex</li>
                                        </ul>
                                    </section>

                                </section>

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