<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Create User';
$patterns['focus']['title'] = 'Create User';




?>



	<?=createSiteStart($patterns['start']);?>
		<div class="no-focus">
			<?=createHeader($patterns['header']);?>
				<?=createFocus($patterns['focus']);?>
		</div>


		<div class="layout layout-search">
			<div class="container">
				<section class="section section-main section-box section-user-create">
					<fieldset>
						<legend>
							<h2>Jeremy Smith</h2>
						</legend>
						<section class="section">
							<div class="row">
								<div class="col-md-6">

									<div class="form-group">
										<label class="control-label">
                                First Name
                            </label>
										<input class="form-control" type="text">
									</div>

								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">
                                Last Name
                            </label>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">
                                Middle Name
                            </label>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">
                                Username
                            </label>
										<input class="form-control" type="text">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">
                                Temporary Password
                            </label>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">
                                Email
                            </label>
										<input class="form-control" type="email">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">
                                Department
                            </label>
										<select class="form-control">
										<option>Department 1</option>
										<option>Department 2</option>
									</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">
                                Profession
                            </label>
										<select class="form-control">
										<option>Profession 1</option>
										<option>Profession 2</option>
									</select>
									</div>
								</div>
								<div class="col-md-6"></div>
							</div>
						</section>
					</fieldset>
					<div class="row">
						<div class="col-md-2">
							<fieldset>
								<legend>Role(s)</legend>
								<label class="checkbox"><input type="checkbox" class="checkbox"> Supervisor</label>
								<label class="checkbox"><input type="checkbox" class="checkbox"> Employee</label>
								<label class="checkbox"><input type="checkbox" class="checkbox"> Candidate</label>
							</fieldset>
						</div>
						<div class="col-md-10">
							<fieldset>
								<legend>Assessments</legend>
								<div style="overflow-x:auto" class="no-more-tables">
                                        <table id="resultsTable" width="100%" class="table  table-hover  no-footer">
                                            <thead>
                                                <tr>
                                                   <!--  <th class="unsortable checkable-dt checkable-dt-check-all">
                                                        <div class="select">
                                                            <label>
                                                                <input id="selectAllRows" class="checkbox-check-all" type="checkbox">
                                                                <span class="icon"></span>
                                                            </label>
                                                        </div>
                                                    </th> -->
                                                  
                                                    <th>Assessment </th>
                                                    <th>Type </th>
													
                                                    <th>Progress</th>
                                                    <th>Assignment Date</th>
                                                    <th>Completion Date</th>
                                                    <th>Score</th>
													

                                                    <th class="unsortable"></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                              

                                                <?php
$type = array("Knowledge", "Skills", "Attitude", "Judgment");
                                                for($x = 0; $x <= 10; $x++) {

													$random_type = array_rand($type);
                                                    $random_progress = array_rand($assessment_progress);
                                                    $random_profession = array_rand($profession);
                                                    $profession_count = count($profession) - 1;
                                                    $score = '--';

                                                    if (is_array($assessment_progress[$random_progress])) {
                                                        $progress_count = count($assessment_progress[$random_progress]) - 2;
                                                        $score = $assessment_progress[$random_progress][rand(1, $progress_count)];
                                                        $progress = 'Completed';

                                                    }
                                                    else {
                                                        $progress = $assessment_progress[$random_progress];
                                                    }

                                                    if ($x % 2 === 0) {
                                                        $rowClass ="even";
                                                    } else {
                                                        $rowClass ="odd";
                                                    }

                                                    $string = '<tr class="' . $rowClass .'">

                                                  
                                                    <td>'. $profession[$random_profession]  . '</td>
                                                    <td>'. $type[$random_type] . '</td>
													
                                                    <td>'. $progress . '</td>
													<td>'. $random_date[rand(1,99)] .' </td> 
                                                    <td>'. $random_date[rand(1,99)] .' </td> ' .
                                                    '<td>'. $score . '</td>
												

                                                    <td> <a href="path-results-tabs.php" class="btn btn-sm btn-default">View <a></td>
                                                    </tr>';



                                                    echo $string;

                                                };



                                                ?>

                                            </tbody>
                                        </table>

                                    </div>

								<table class="table" style="background-color: #f9f9f9;">
									<tr>
										<th>
											Assessment
										</th>
										<th>
											Type
										</th>
											<th>
												Status
											</th>
										<th>
											Assignment Date
										</th>
										<th>
											Completion Date
										</th>
										<th>
											Score
										</th>
									</tr>
									<tr>
										<td>
											RN: Emergency Assessment
										</td>
										<td>
											Knowledge
										</td>
											<td>
												Completed
											</td>
										<td>
											Jan 5, 2018
										</td>
										<td>
											Feb 12, 2018
										</td>
										<td>
											85%
										</td>
									</tr>
									<tr>
										<td>
											RN: Emergency Assessment
										</td>
										<td>
											Knowledge
										</td>
											<td>
												Completed
											</td>
										<td>
											Jan 5, 2018
										</td>
										<td>
											Feb 12, 2018
										</td>
										<td>
											85%
										</td>
									</tr>
									<tr>
										<td>
											RN: Emergency Assessment
										</td>
										<td>
											Knowledge
										</td>
											<td>
												Completed
											</td>
										<td>
											Jan 5, 2018
										</td>
										<td>
											Feb 12, 2018
										</td>
										<td>
											85%
										</td>
									</tr>
									<tr>
										<td>
											RN: Emergency Assessment
										</td>
										<td>
											Knowledge
										</td>
											<td>
												Completed
											</td>
										<td>
											Jan 5, 2018
										</td>
										<td>
											Feb 12, 2018
										</td>
										<td>
											85%
										</td>
									</tr>
								</table>
							</fieldset>
						</div>
					</div>
					<?php
          $stickybar = array(
            'sets' => array(
              array(
                'position' => 'left',
                'classes' => array('hidden-xs', 'hidden-sm'),
                'html' => '
				<div class="btn-group dropup">
                                                <button class="btn btn-success" id="btnSave"  type="submit">Save</button>
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
												 <li>
                                                        <button class="btn btn-success" id="" name="" type="submit">Save</button>
                                                    </li>
                                                    <li>
                                                        <button class="btn btn-success" id="" name="" type="submit">Save and Create Another</button>
                                                    </li>
                                                  
                                                </ul>
                                            </div>
				
                <a href="#"  class="btn btn-default ">Cancel</a>'
                ,
              ),

          
              array(
                'position' => 'left',
                'classes' => array('visible-xs', 'visible-sm'),
                'html' => '
				                <div class="btn-group dropup">
                                                <button class="btn btn-success" id="btnSave"  type="submit">Save</button>
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
												 <li>
                                                        <button class="btn btn-success" id="" name="" type="submit">Save</button>
                                                    </li>
                                                    <li>
                                                        <button class="btn btn-success" id="" name="" type="submit">Save and Create Another</button>
                                                    </li>
                                                  
                                                </ul>
                                            </div>
				
                <a href="#"  class="btn btn-default ">Cancel</a>
                ',
              ),
            ),
          );
          echo createStickybar($stickybar);
          ?>
				</section>


			</div>
			<!-- /container -->
		</div>
		<!-- /layout -->


		<?=createFooter($patterns['footer']);?>
			<?=createPrototypeNav();?>
				<?=createSiteScripts();?>


					<script>
					</script>
					<?=createSiteEnd();?>