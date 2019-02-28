<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'AssessRx Admin';
$patterns['focus']['title'] = 'AssessRx Admin';
$patterns['header']['mainNavActive'] ='home';


$patterns['header'];


?>
	<?= createSiteStart($patterns['start']); ?>
		<?= createHeader($patterns['header']); ?>
			<?= createFocus($patterns['focus']); ?>


				<div class="layout">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<section class="section section-main section-box" data-equalize="layout-columns">
									<section class="section-admin-dashboard">

										<section class="section">

											<div class="container">
												<div class="row">
													<div class="col-sm-6 col-md-3">
														<div class="panel panel-default panel-card ">
															<div class="panel-heading">
																<img src="/content/images/iStock-611765774.jpg" />
															</div>

																	<div class="panel-body text-center">
																<h4 class="panel-header">User Accounts</h4>
														<p>
																	<a href="/admin-user-list.php" class="btn btn-sm btn-primary">Manage Users</a>
																</p>
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="panel panel-default panel-card">
															<div class="panel-heading">
																<img src="/content/images/iStock-527033580.jpg" />
															</div>

															<div class="panel-body text-center">
																<h4 class="panel-header">Assessment Results</h4>
														<p>
																	<a href="/assessment-results.2.php" class="btn btn-sm btn-primary">View Results</a>
																</p>
															</div>

														</div>


													</div>
												</div>
											</div>
										</section>

									</section>
								</section>
							</div>
						</div>
					</div>
				</div>






				<?= createFooter($patterns['footer']); ?>
					<?= createPrototypeNav(); ?>
						<?= createSiteScripts(); ?>

					
							<?= createSiteEnd(); ?>