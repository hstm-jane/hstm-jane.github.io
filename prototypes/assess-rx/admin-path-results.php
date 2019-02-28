<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Assessment Results';
$patterns['focus']['title'] = 'Assessment Results';
$patterns['header'] = array(
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="/content/images/prototype-actors/allisongrayce.jpg">',
    'mainNav' => '
        <li class="{active=home}"><a href="/demo-admin.php">Home</a></li>
        <li class="{active=results}"><a href="/demo-admin-assessment-results.php">Assessment Results</a></li>
        <li class="{active=users}"><a href="/demo-admin-manage-users.php">Manage Users</a></li>',
    'logoLarge' => './content/images/logo-assess-large.png',
    'mainNavActive' =>'results',
    'alerts' => '',
    'userInstitution' => '',
);
?>


	<?=createSiteStart($patterns['start']);?>
		<div class="no-focus">
			<?= createHeader($patterns['header']); ?>
				<?= createFocus($patterns['focus']); ?>
		</div>
		<style>
			.amcharts-chart-div a {
				display: none !important;
			}

		
		</style>

		<div class="layout">
			<div class="container" id="path-results-container">
				<section class="section section-main section-box">
					<section class="return-link hidden-print">
						<a href="/demo-admin-assessment-results.php"><i class="fa fa-fw fa-chevron-left"></i>Return to Results List</a>
					</section>
					<section>
						<div class="row">

							<div class="col-md-10">
								<h1 class="student-name">Abigail Abbot</h1>
								<h4>Path Results for: <strong>Registered Nurse / Emergency</strong></h4>
								<a href="/admin-full-report-enterprise.php" class="btn btn-default btn-sm btn-path-results-report">View Full Report</a>

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

						<hr class="visible-md visible-lg hidden-print">
					</section>
					<section>
						<div class="assessment-metrics selected">
							<div class="row">
								<div class="col-sm-6 col-md-3 visible-print-inline-block">
									<div class="knowledge-metric assessment-metric selected">
										<h2>Knowledge</h2>
										<span class="segment-score"></span>
										<span class="segment-percentile">60th Percentile</span>
										<div id="bellcurve-knowledge" class="chart-container"></div>
										<a href="#" class="btn-xs btn js-btn-view-details btn-default js-btn-view-knowledge hidden-print">Hide Details</a>
										<div class="print-benchmark-score visible-print"></div>
										<hr class="visible-sm visible-xs hidden-print">
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="skills-metric assessment-metric visible-print-inline-block">
										<h2>Skills</h2>
										<span class="segment-score"></span>
										<span class="segment-percentile">40th Percentile</span>
										<div id="bellcurve-skills" class="chart-container"></div>
										<div class="print-benchmark-score visible-print"></div>
										<a href="#" class="btn-xs btn btn-default hidden-print js-btn-view-skills js-btn-view-details ">View Details</a>
										<hr class="visible-sm visible-xs hidden-print">
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="behavioral-metric assessment-metric visible-print-inline-block">
										<h2>Behavioral</h2>
										<span class="segment-score"></span>
										<span class="segment-percentile">40th Percentile</span>
										<div id="bellcurve-behavioral" class="chart-container"></div>
										<div class="print-benchmark-score visible-print"></div>
										<a href="#" class="btn-xs btn btn-default hidden-print js-btn-view-behavioral js-btn-view-details">View Details</a>
										<hr class="visible-sm visible-xs hidden-print">
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="behavioral-metric assessment-metric visible-print-inline-block">
										<h2>Judgment</h2>
										<span class="segment-score"></span>
										<span class="segment-percentile">70th Percentile</span>
										<div id="bellcurve-judgment" class="chart-container"></div>
										<div class="print-benchmark-score visible-print"></div>
										<a href="#" class="btn-xs btn btn-default hidden-print js-btn-view-judgment js-btn-view-details">View Details</a>
										<hr class="visible-sm visible-xs hidden-print">
									</div>
								</div>

							</div>
						</div>
					</section>
					<hr>

					<section class="section knowledge-details section-details" id="knowledge-details">
						<h2>Knowledge Assessment Details</h2>
						<section class="section">
							<nav class="nav-collapsing-tabs">
								<a href="#" class="nav-header">
                                <span>RN:Emergency Assessment</span><i class="fa fa-chevron-down"></i></a>

								<ul class="nav nav-tabs nav-justified">
									<li class="active">
										<a href="#assessment-1" data-toggle="tab">RN: Emergency Assessment</a>
									</li>
									<li>
										<a href="#assessment-2" data-toggle="tab">Pharmacology: RN Assessment</a>
									</li>
								</ul>
							</nav>


							<div class="tab-content">
								<section id="assessment-1" class="active tab-pane section results-section assessment-details-tab">
									<h3>RN: Emergency Assessment: <span class="score-font">85%</span></h3>
							<div> 
								<label>Assigned:</label>
								<?php 
								$previous_week = strtotime("-1 week +1 day");

								$start_week = strtotime("last sunday midnight",$previous_week);
			

								$start_week = date("m-d-Y",$start_week);
					

								echo $start_week;
							?>
							</div>
							<div>
								<label>Completed:</label>
								<?php 
								$previous_week = strtotime("-1 week +1 day");
								$start_week = strtotime("last sunday midnight",$previous_week);
								$end_week = strtotime("next saturday",$start_week);
								$end_week = date("m-d-Y",$end_week);
							
								echo $end_week;
							?>
							</div>

									<section class="section feedback ">
										<h3>Results by Category</h3>
										<section class="assessment-results__section categories">
											<div class="row categories__header hidden-xs hidden-sm">


												<div class="col-md-5 text-left"> Category</div>
												<div class="col-md-4 text-center"> Number Answered Correctly</div>
												<div class="col-md-3 text-center"> Percentage Correct</div>

											</div>
											<div class="row">
												<div class="col-md-5 text-left">Cardiovascular</div>
												<div class="col-md-4">
													<div class="progress ">
														<div class="progress-bar" style="width:100%;">3 of 3 correct</div>
													</div>
												</div>

												<div class="col-md-3  col-percentage-correct">100%</div>
											</div>
											<div class="row">
												<div class="col-md-5 text-left">Respiratory</div>
												<div class="col-md-4">
													<div class="progress">
														<div class="progress-bar" style="width:50%;">2 of 4 correct</div>
													</div>
												</div>
												<div class="col-md-3 col-percentage-correct">50%</div>
											</div>
											<div class="row">
												<div class="col-md-5 text-left">Gastrointestinal</div>
												<div class="col-md-4">
													<div class="progress">
														<div class="progress-bar" style="width:75%;">3 of 4 correct</div>
													</div>
												</div>
												<div class="col-md-3 col-percentage-correct">75%</div>
											</div>
											<div class="row">
												<div class="col-md-5 text-left">Neurology</div>
												<div class="col-md-4">
													<div class="progress">
														<div class="progress-bar" style="width:83%;">5 of 6 correct</div>
													</div>
												</div>
												<div class="col-md-3 col-percentage-correct">83%</div>
											</div>
											<div class="row">
												<div class="col-md-5 text-left">Professional Issues</div>
												<div class="col-md-4">
													<div class="progress">0 of 1 correct
														<div class="progress-bar" style="width:0%;"></div>
													</div>
												</div>
												<div class="col-md-3 col-percentage-correct">0%</div>
											</div>
										</section>


									</section>
									<section class="section feedback">
										<h3>Feedback</h3>
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

								</section>

								<section id="assessment-2" class="tab-pane section results-section assessment-details-tab">
									<h3>Pharmacology: RN Assessment: <span class="score-font"> 80%</span></h3>
<div> 
								<label>Assigned:</label>
								<?php 
								$previous_week = strtotime("-1 week +1 day");

								$start_week = strtotime("last sunday midnight",$previous_week);
			

								$start_week = date("m-d-Y",$start_week);
					

								echo $start_week;
							?>
							</div>
							<div>
								<label>Completed:</label>
								<?php 
								$previous_week = strtotime("-1 week +1 day");
								$start_week = strtotime("last sunday midnight",$previous_week);
								$end_week = strtotime("next saturday",$start_week);
								$end_week = date("m-d-Y",$end_week);
							
								echo $end_week;
							?>
							</div>
									<section class="section feedback ">
										<h3>Results by Category</h3>
										<section class="assessment-results__section  categories">
											<div class="row categories__header hidden-sm hidden-xs">


												<div class="col-md-5 text-left"> Category</div>
												<div class="col-md-4 text-center"> Number Answered Correctly</div>
												<div class="col-md-3 text-center"> Percentage Correct</div>

											</div>
											<div class="row">
												<div class="col-sm-5 text-left">Cardiovascular</div>
												<div class="col-sm-4">
													<div class="progress ">
														<div class="progress-bar" style="width:80%;">2 of 3 correct</div>
													</div>
												</div>

												<div class="col-sm-3 col-percentage-correct">66%</div>
											</div>
											<div class="row">
												<div class="col-sm-5 text-left">Respiratory</div>
												<div class="col-sm-4">
													<div class="progress">
														<div class="progress-bar" style="width:50%;">2 of 4 correct</div>
													</div>
												</div>
												<div class="col-sm-3 col-percentage-correct">50%</div>
											</div>
											<div class="row">
												<div class="col-sm-5 text-left">Gastrointestinal</div>
												<div class="col-sm-4">
													<div class="progress warning">0 of 4 correct
														<div class="progress-bar" style="width:0%;"></div>
													</div>
												</div>
												<div class="col-sm-3 col-percentage-correct">0%</div>
											</div>
											<div class="row">
												<div class="col-sm-5 text-left">Neurology</div>
												<div class="col-sm-4">
													<div class="progress">
														<div class="progress-bar" style="width:44%;">5 of 6 correct</div>
													</div>
												</div>
												<div class="col-sm-3 col-percentage-correct">83%</div>
											</div>
											<div class="row">
												<div class="col-sm-5 text-left">Professional Issues</div>
												<div class="col-sm-4">
													<div class="progress  ">
														<div class="progress-bar" style="width:90%;">9 of 10 correct</div>
													</div>
												</div>
												<div class="col-sm-3 col-percentage-correct">90%</div>
											</div>
										</section>


									</section>
									<section class="section feedback">

										<h3>Feedback</h3>
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
							</div>
						</section>
					</section>

					<section class="section  skills-details section-details" id="skills-details">
						<h2>Skills Score Details</h2>
						<section class="feedback section">

							<h3>RN: Emergency Skills Self-Assessment: <span class="score-font">76%</span></h3>
							<div> <label>Assigned:</label>
								<?php 
								$previous_week = strtotime("-1 week +1 day");

								$start_week = strtotime("last sunday midnight",$previous_week);
			

								$start_week = date("m-d-Y",$start_week);
					

								echo $start_week;
							?>
							</div>
							<div>
								<label>Completed:</label>
								<?php 
								$previous_week = strtotime("-1 week +1 day");
								$start_week = strtotime("last sunday midnight",$previous_week);
								$end_week = strtotime("next saturday",$start_week);
								$end_week = date("m-d-Y",$end_week);
							
								echo $end_week;
							?>
							</div>
							<section class="section">
								<h4>Self-Assessment Rating Scale:</h4>
								<ul>
									<li><label>No Experience</label> - Theory or observation only during the past 12 months</li>
									<li><label>Limited Experience</label> - Performed less than 12 times within the past 12 months and may need a review</li>
									<li><label>Experienced</label> - Performed at least once per month within the past 12 months and may need minimal assistance</li>
									<li><label>Highly Skilled</label> - Performed on at least a weekly basis over the past 12 months; proficient</li>
								</ul>
							</section>

							<section class="assessment-results__section categories">
								<div class="row categories__header">
									<div class="col-sm-9 text-left">Cardiovascular</div>
									<div class="col-sm-3 hidden-sm hidden-xs">Rating</div>
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
									<div class="col-sm-9 text-left">Assist with Central line insertion</div>
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

							<section class="assessment-results__section categories">
								<div class="row categories__header">
									<div class="col-sm-9 text-left">Pulmonary</div>
									<div class="col-sm-3  hidden-sm hidden-xs ">Rating</div>
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
								<div class="row">
									<div class="col-sm-9 text-left">Cardiovascular</div>
									<div class="col-sm-3">Experienced</div>
								</div>
							</section>
						</section>
					</section>


					<section class="section behavioral-details section-details" id="behavioral-details">
						<h2>Behavioral Score Details</h2>
						<h3>RN Behavioral Assessment <span class="assessment-score">85%</span></h3>
						<div> 
								<label>Assigned:</label>
								<?php 
								$previous_week = strtotime("-1 week +1 day");

								$start_week = strtotime("last sunday midnight",$previous_week);
			

								$start_week = date("m-d-Y",$start_week);
					

								echo $start_week;
							?>
							</div>
							<div>
								<label>Completed:</label>
								<?php 
								$previous_week = strtotime("-1 week +1 day");
								$start_week = strtotime("last sunday midnight",$previous_week);
								$end_week = strtotime("next saturday",$start_week);
								$end_week = date("m-d-Y",$end_week);
							
								echo $end_week;
							?>
							</div>

						<section class="section feedback">
							<h3>Results by Category</h3>
							<section class="assessment-results__section  categories">
								<div class="row categories__header hidden-xs hidden-sm">
									<div class="col-md-3">Category</div>
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
						</section>

						<section class="section feedback">
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

						<section class="section feedback">
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

					<section class="section judgment-details section-details" id="judgment-details">
						<h2>Judgment Details</h2>
						<h3>RN Acute Care Judgment Assessment <span class="assessment-score">85%</span></h3>
						<div> 
								<label>Assigned:</label>
								<?php 
								$previous_week = strtotime("-1 week +1 day");

								$start_week = strtotime("last sunday midnight",$previous_week);
			

								$start_week = date("m-d-Y",$start_week);
					

								echo $start_week;
							?>
							</div>
							<div>
								<label>Completed:</label>
								<?php 
								$previous_week = strtotime("-1 week +1 day");
								$start_week = strtotime("last sunday midnight",$previous_week);
								$end_week = strtotime("next saturday",$start_week);
								$end_week = date("m-d-Y",$end_week);
							
								echo $end_week;
							?>
							</div>
						<section class="feedback">
							<h4>Abigail was presented with the following clinical problems to recognize and manage:</h4>
							<ul>
								<li><a href="#scroll-blood-transfusion-reaction" class="scroll-link">Blood Transfusion Reaction</a></li>
								<li><a href="#scroll-diabetic-ketoacidosis" class="scroll-link">Diabetic Ketoacidosis</a></li>
								<li><a href="#scroll-bowel-perforation-peritonitis" class="scroll-link">Bowel Perforation / Peritonitis</a></li>
								<li><a href="#" class="scroll-link">Digoxin Toxicity</a></li>
								<li><a href="#" class="scroll-link">Increased Intracranial Pressure</a></li>
								<li><a href="#" class="scroll-link">Pulmonary Embolus or Pneumothorax</a></li>
								<li><a href="#" class="scroll-link">Urinary Retention</a></li>
								<li><a href="#" class="scroll-link">Cerebral Vascular Accident</a></li>
								<li><a href="#" class="scroll-link">Myocardial Infarction</a></li>
							</ul>
							<br>
							<h4>Results Summary:</h4>
							<p>Abigail accurately identified <b>5</b> of the eight problems, and successfully managed <b>4</b> of the eight problems.</p>
							<p>Abigail over prioritized <b>1</b> problem(s), under prioritized <b>0</b> problem(s) and accurately prioritized <b>7</b> problem(s).</p>
							<p>When contacting a provider, Abigail omitted relevant data on <b>2</b> problems.</p>
						</section>

						<section class="section feedback" id="scroll-blood-transfusion-reaction">
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

						<section class="section feedback" id="scroll-diabetic-ketoacidosis">
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

						<section class="section feedback" id="scroll-bowel-perforation-peritonitis">
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

						<section class="section feedback">
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
			</div>
			<!-- /container -->
		</div>
		<!-- /layout -->





		<?=createFooter($patterns['footer']);?>
			<?=createPrototypeNav();?>
				<?=createSiteScripts();?>
					<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
					<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
					<script type="text/javascript" src="https://www.amcharts.com/lib/3/themes/light.js"></script>


					<script>
						$(".js-btn-view-knowledge").click(function() {
							$(".section-details").not("#knowledge-details").hide();
							$("#knowledge-details").toggle();
							var btnText = $(this).text();
							$(this).text(btnText == "View Details" ? "Hide Details" : "View Details");
							$(".js-btn-view-details").not(this).text("View Details");
							if ($(".section-details").is(":visible") == true) {
								$(".assessment-metric").removeClass("selected");
								$(this).closest(".assessment-metric").addClass("selected");
								$(this).closest(".assessment-metrics").addClass("selected");
							} else {
								$(this).closest(".assessment-metric").removeClass("selected");
								$(this).closest(".assessment-metrics").removeClass("selected");
							};
						});


						$(".js-btn-view-skills").click(function() {

							$(".section-details").not("#skills-details").hide();

							$("#skills-details").toggle();
							var btnText = $(this).text();
							$(".js-btn-view-skills").text(btnText == "View Details" ? "Hide Details" : "View Details");
							$(".js-btn-view-details").not(this).text("View Details");


							if ($(".section-details").is(":visible") == true) {
								$(".assessment-metric").removeClass("selected");
								$(this).closest(".assessment-metric").addClass("selected");
								$(this).closest(".assessment-metrics").addClass("selected");

							} else {
								$(this).closest(".assessment-metric").removeClass("selected");
								$(this).closest(".assessment-metrics").removeClass("selected");

							};
						});

						$(".js-btn-view-behavioral").click(function() {

							$(".section-details").not("#behavioral-details").hide();

							$("#behavioral-details").toggle();
							var btnText = $(this).text();
							$(".js-btn-view-behavioral").text(btnText == "View Details" ? "Hide Details" : "View Details");
							$(".js-btn-view-details").not(this).text("View Details");


							if ($(".section-details").is(":visible") == true) {
								$(".assessment-metric").removeClass("selected");
								$(this).closest(".assessment-metric").addClass("selected");
								$(this).closest(".assessment-metrics").addClass("selected");

							} else {
								$(this).closest(".assessment-metric").removeClass("selected");
								$(this).closest(".assessment-metrics").removeClass("selected");

							};
						});

						$(".js-btn-view-judgment").click(function() {

							$(".section-details").not("#judgment-details").hide();

							$("#judgment-details").toggle();
							var btnText = $(this).text();
							$(".js-btn-view-judgment").text(btnText == "View Details" ? "Hide Details" : "View Details");
							$(".js-btn-view-details").not(this).text("View Details");

							if ($(".section-details").is(":visible") == true) {
								$(".assessment-metric").removeClass("selected");
								$(this).closest(".assessment-metric").addClass("selected");
								$(this).closest(".assessment-metrics").addClass("selected");
							} else {
								$(this).closest(".assessment-metric").removeClass("selected");
								$(this).closest(".assessment-metrics").removeClass("selected");
							};
						});

						$("a.scroll-link").click(function(event) {
							event.preventDefault();
							if ($($(this).attr("href")).is(":visible") == true) {
								$("html, body").animate({
									scrollTop: $($(this).attr("href")).offset().top
								}, 500);
							}
						});

						var knowledgeBenchmark = 80;
						var skillsBenchmark = 99;
						var behavioralBenchmark = 78;
						var judgmentBenchmark = 93;

						var employeeKnowledge = 85;
						var employeeSkills = 76;
						var employeeBehavioral = 85;
						var employeeJudgment = 85;

						var startEffect = "easeInSine";
						var startDuration = .25;

						$(".knowledge-metric .segment-score").text(employeeKnowledge + "%");
						$(".knowledge-metric .print-benchmark-score").text("Benchmark: " + knowledgeBenchmark);

						$(".skills-metric .segment-score").text(employeeSkills + "%");
						$(".skills-metric .print-benchmark-score").text("Benchmark: " + skillsBenchmark);

						$(".behavioral-metric .segment-score").text(employeeBehavioral + "%");
						$(".behavioral-metric .print-benchmark-score").text("Benchmark: " + behavioralBenchmark);

						$(".judgment-metric .segment-score").text(employeeJudgment + "%");
						$(".judgment-metric .print-benchmark-score").text("Benchmark: " + judgmentBenchmark);


						var BenchmarkColor = "#FFBC42"; //"#0D75A1"; //"#6BD8FA";
						var employeeColor = "#09c"; // "#F9C05E";




						/*  probability.js    12-25-2008    JavaScript
Copyright (C)2008 Steven Whitney.
Initially published by http://25yearsofprogramming.com.

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License (GPL)
Version 3 as published by the Free Software Foundation.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Functions related to probability calculations.

*/
						//----------------------------------------------------------------------------------------------
						// Calculates a point Z(x), the Probability Density Function, on any normal curve.
						// This is the height of the point ON the normal curve.
						// For values on the Standard Normal Curve, call with Mean = 0, StdDev = 1.
						function NormalDensityZx(x, Mean, StdDev) {
							var a = x - Mean;
							return Math.exp(-(a * a) / (2 * StdDev * StdDev)) / (Math.sqrt(2 * Math.PI) * StdDev);
						}
						//----------------------------------------------------------------------------------------------
						// Calculates Q(x), the right tail area under the Standard Normal Curve.
						function StandardNormalQx(x) {
							if (x === 0) // no approximation necessary for 0
								return 0.50;

							var t1, t2, t3, t4, t5, qx;
							var negative = false;
							if (x < 0) {
								x = -x;
								negative = true;
							}
							t1 = 1 / (1 + (0.2316419 * x));
							t2 = t1 * t1;
							t3 = t2 * t1;
							t4 = t3 * t1;
							t5 = t4 * t1;
							qx = NormalDensityZx(x, 0, 1) * ((0.319381530 * t1) + (-0.356563782 * t2) +
								(1.781477937 * t3) + (-1.821255978 * t4) + (1.330274429 * t5));
							if (negative == true)
								qx = 1 - qx;
							return qx;
						}
						//----------------------------------------------------------------------------------------------
						// Calculates P(x), the left tail area under the Standard Normal Curve, which is 1 - Q(x).
						function StandardNormalPx(x) {
							return 1 - StandardNormalQx(x);
						}
						//----------------------------------------------------------------------------------------------
						// Calculates A(x), the area under the Standard Normal Curve between +x and -x.
						function StandardNormalAx(x) {
							return 1 - (2 * StandardNormalQx(Math.abs(x)));
						}
						//----------------------------------------------------------------------------------------------

						/**
						 * Define values where to put vertical lines at
						 */
						var verticals = [
							2.4, -0.2
						];

						/**
						 * Calculate data
						 */
						var chartData2 = [.39, .02];
						var chartData = [];
						for (var i = -5; i < 5.1; i += 0.1) {
							var dp = {
								category: i,
								value: NormalDensityZx(i, 0, 1),
								dashLengthColumn: 5,

							};
							if (verticals.indexOf(Math.round(i * 10) / 10) !== -1) {
								dp.vertical = dp.value;
							}
							chartData.push(dp);
						}

						/**
						* Create a chart

						*/
						var chart = AmCharts.makeChart("bellcurve-knowledge", {
							"type": "serial",
							"theme": "light",
							"startEffect": startEffect,
							"dataProvider": chartData,
							"precision": 2,
							"addClassNames": true,
							"valueAxes": [{
								"gridAlpha": 0.2,
								"dashLength": 0
							}],
							"startDuration": startDuration,
							"graphs": [{
									"balloonText": "",
									"lineThickness": 3,
									"valueField": "value",
									"fillAlphas": 1,
									"fillToGraph": 1,
									"fillColors": '#09c',




								},
								{
									"balloonText": "rwar",
									"fillAlphas": 0,
									"type": "column",
									"valueField": "vertical",
									"fixedColumnWidth": 3,
									"labelText": "[[value]]",
									"labelOffset": 20,
									"dashLengthField": "dashLengthColumn",






								},
							],
							"chartCursor": {
								"categoryBalloonEnabled": false,
								"cursorAlpha": 0,
								"zoomable": false
							},


							"categoryField": "category",
							"categoryAxis": {
								"gridAlpha": 0.05,
								"startOnAxis": true,
								"tickLength": 5,
								"labelFunction": function(label, item) {
									return '' + Math.round(item.dataContext.category * 10) / 10;
								}
							}

						});
						var chart = AmCharts.makeChart("bellcurve-skills", {
							"type": "serial",
							"startEffect": startEffect,

							"theme": "light",
							"dataProvider": chartData,
							"precision": 2,
							"addClassNames": true,
							"valueAxes": [{
								"gridAlpha": 0.2,
								"dashLength": 0
							}],
							"startDuration": startDuration,
							"graphs": [{
									"balloonText": "",
									"lineThickness": 3,
									"valueField": "value",
									"fillAlphas": 1,
									"fillToGraph": 1,
									"fillColors": '#09c',




								},
								{
									"balloonText": "rwar",
									"fillAlphas": 0,
									"type": "column",
									"valueField": "vertical",
									"fixedColumnWidth": 3,
									"labelText": "[[value]]",
									"labelOffset": 20,
									"dashLengthField": "dashLengthColumn",






								},
							],
							"chartCursor": {
								"categoryBalloonEnabled": false,
								"cursorAlpha": 0,
								"zoomable": false
							},


							"categoryField": "category",
							"categoryAxis": {
								"gridAlpha": 0.05,
								"startOnAxis": true,
								"tickLength": 5,
								"labelFunction": function(label, item) {
									return '' + Math.round(item.dataContext.category * 10) / 10;
								}
							}

						});
						var chart = AmCharts.makeChart("bellcurve-behavioral", {
							"type": "serial",
							"theme": "light",
							"dataProvider": chartData,
							"startEffect": startEffect,

							"precision": 2,
							"addClassNames": true,
							"valueAxes": [{
								"gridAlpha": 0.2,
								"dashLength": 0
							}],
							"startDuration": startDuration,
							"graphs": [{
									"balloonText": "",
									"lineThickness": 3,
									"valueField": "value",
									"fillAlphas": 1,
									"fillToGraph": 1,
									"fillColors": '#09c',




								},
								{
									"balloonText": "rwar",
									"fillAlphas": 0,
									"type": "column",
									"valueField": "vertical",
									"fixedColumnWidth": 3,
									"labelText": "[[value]]",
									"labelOffset": 20,
									"dashLengthField": "dashLengthColumn",






								},
							],
							"chartCursor": {
								"categoryBalloonEnabled": false,
								"cursorAlpha": 0,
								"zoomable": false
							},


							"categoryField": "category",
							"categoryAxis": {
								"gridAlpha": 0.05,
								"startOnAxis": true,
								"tickLength": 5,
								"labelFunction": function(label, item) {
									return '' + Math.round(item.dataContext.category * 10) / 10;
								}
							}

						});
						var chart = AmCharts.makeChart("bellcurve-judgment", {
							"type": "serial",
							"theme": "light",
							"dataProvider": chartData,
							"startEffect": startEffect,

							"precision": 2,
							"addClassNames": true,
							"valueAxes": [{
								"gridAlpha": 0.2,
								"dashLength": 0
							}],
							"startDuration": startDuration,
							"graphs": [{
									"balloonText": "",
									"lineThickness": 3,
									"valueField": "value",
									"fillAlphas": 1,
									"fillToGraph": 1,
									"fillColors": '#09c',




								},
								{
									"balloonText": "rwar",
									"fillAlphas": 0,
									"type": "column",
									"valueField": "vertical",
									"fixedColumnWidth": 3,
									"labelText": "[[value]]",
									"labelOffset": 20,
									"dashLengthField": "dashLengthColumn",






								},
							],
							"chartCursor": {
								"categoryBalloonEnabled": false,
								"cursorAlpha": 0,
								"zoomable": false
							},


							"categoryField": "category",
							"categoryAxis": {
								"gridAlpha": 0.05,
								"startOnAxis": true,
								"tickLength": 5,
								"labelFunction": function(label, item) {
									return '' + Math.round(item.dataContext.category * 10) / 10;
								}
							}

						});







						$('.branding a').click(function(e) {
							e.preventDefault();
							window.location.href = "/demo-start.php";
						});
					</script>





					<?=createSiteEnd();?>