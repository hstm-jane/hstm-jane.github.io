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
							<h2>Create an Account</h2>
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

								<div class="slat ">
									<div class="slat-message slat-message-sm slat-empty-state">
										<img src="./content/images/phantom-clipboard.svg">
										<div class="empty-state-message">
											<section class="section">
												<h3>No assessments have been assigned, yet. </h3>
											</section>

											<a href="#" class="btn btn-primary">Browse Assessments</a>
										</div>
									</div>
								</div>
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