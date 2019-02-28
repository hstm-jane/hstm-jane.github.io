<?php

	include "includes/helpers/helpers.php";

	$action = (!empty($_GET['action'])) ? $_GET['action'] : false;

	$patterns['start']['title'] = 'Verify Required Info to Receive CE Credit';
	$patterns['focus']['title'] = 'Verify Required Info to Receive CE Credit';

	?>

<?=createSiteStart($patterns['start']);?>
<?=createHeader($patterns['header']);?>


<style>







</style>
<?=createFocus($patterns['focus']);?>
<div class="layout">
	<div class="container">
		<div class="row">
			<div class="col-md-9">

				<section class="section section-main section-box text-center" data-equalize="layout-columns">
					<section class="section">

						<h3>Are you earning CE Credit to renew a license?</h3>

						<!--
	<div class="checkable">
	<div class="slat">

	<div class="title">Yes</div>

	</div>

	<div class="select"><label><input type="checkbox" class="checkbox"><span class="icon"></span></label></div>
	</div>
	-->


						<div class="question">


							<div class="answers answers-yes-no">
								<label class="answer">
									<div class="answer-icon"></div>
									<input type="radio" name="q1" value="true">
									Yes
								</label>
								<label class="answer">
									<div class="answer-icon"></div>
									<input type="radio" name="q1" value="false">
									No
								</label>
							</div>
						</div>

						<div class="ce-not-awarded">

							<?php include "includes/forms/_ce-not-awarded.php"; ?>

						</div>

						<div class="ce-awarded text-left">
							<fieldset>
								<legend>License Info</legend>
								<div class="text-center  ">
									<div class="license-cards text-sm-center">
										<div class="license-card editable-set">
											<div class="license-card__title">
												Registered Nurses - Advanced Registered Nurse Practitioner
											</div>
											<div class="license-card__body">
												<div>
													<label>License Number:</label>
													<span class="read-only">12345678901234567892-1234</span>
												</div>
												<div>
													<label>COUNTRY:</label>
													<span class="read-only">United States</span>
												</div>
												<div>
													<label>State/Province:</label>
													<span class="read-only">FL</span>
												</div>
												<span class="state-img state-img-10 read-only"></span>
											</div>
										</div>
										<div class="license-card editable-set">
											<div class="license-card__title">
												Registered Nurses - Advanced Registered Nurse Practitioner
											</div>
											<div class="license-card__body">
												<div>
													<label>License Number:</label>
													<span class="read-only">12345678901234567892-1234</span>

												</div>
												<div>
													<label>COUNTRY:</label>
													<span class="read-only">United States</span>

												</div>
												<div>
													<label>State/Province:</label>
													<span class="read-only">FL</span>


												</div>
												<span class="state-img state-img-10 read-only">

												</span>

											</div>
										</div>
										<div class="license-card editable-set">
											<div class="license-card__title">
												Registered Nurses - Advanced Registered Nurse Practitioner
											</div>
											<div class="license-card__body">
												<div>
													<label>License Number:</label>
													<span class="read-only">12345678901234567892-1234</span>

												</div>
												<div>
													<label>COUNTRY:</label>
													<span class="read-only">United States</span>

												</div>
												<div>
													<label>State/Province:</label>
													<span class="read-only">FL</span>


												</div>
												<span class="state-img state-img-10 read-only">

												</span>

											</div>



										</div>
									</div>
								</div>
								<div class="question">

									<div class="answers">
										<label class="answer">
											<div class="answer-icon"></div>
											<input type="radio" name="q1" value="">
											My License Info is correct.
										</label>
										<label class="answer">
											<div class="answer-icon"></div>
											<input type="radio" name="q1" value="">
											My License Info is <strong>not</strong> correct. I will notify my adminstrator.
										</label>
									</div>
								</div>


							</fieldset>
							<fieldset>
								<legend>Personal Info</legend>
							<div class="text-left ">
									<div class="form-group">
										<label class="inline">Country of Residence:</label>
										<span class="read-only">United States</span>

									</div>
									<div class="form-group">
										<label class="inline">State of Residence:</label>
										<span class="read-only"> FL </span>
									
									</div>


								<div class="question">

									<div class="answers">
										<label class="answer">
											<div class="answer-icon"></div>
											<input type="radio" name="q2" value="">
											My Persional Info is correct.
										</label>
										<label class="answer">
											<div class="answer-icon"></div>
											<input type="radio" name="q2" value="">
											My Persional Info is <strong>not</strong> correct. I will notify my adminstrator.
										</label>
									</div>
								</div>
								<?php
	$stickybar = array(
	'sets' => array(
	array(
	'position' => 'left',
	'classes' => array('hidden-xs', 'hidden-sm'),
	'html' => '
	<a href="#" class="btn btn-success">Save</a>
	',
	),
	array(
	'position' => 'left',
	'classes' => array('visible-xs', 'visible-sm'),
	'html' => '
	<a href="#modal-print" class="btn btn-success">Save</a>
	',
	),
	),
	);
	echo createStickybar($stickybar);
	?>
							</fieldset>
						</div>
					</section>

				</section>
				<!-- /section-main -->

			</div>
			<!-- /column -->

			<div class="col-md-3">
				<section class="section section-sidebar" data-equalize="layout-columns">
					<section class="section section-box" id="sidebar-credit">
						<h3>Additional Credit</h3>
						<p>You may be eligible for additional credit for this course. Make sure your certifications and licenses are up to date.</p>
						<ul class="list-unstyled">
							<li><a href="disciplines-licenses.php">Manage Licenses</a>
							<li>
							<li><a href="certifications.php">Manage Certifications</a></li>
						</ul>
						<p><a href="#" class="btn btn-sm btn-default">Refresh Credits</a></p>
					</section>
					<?php include_sidebar();?>
				</section>
				<!-- /section-sidebar -->
			</div>
			<!-- /column -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /layout -->


<?=createFooter($patterns['footer']);?>
<?=createPrototypeNav();?>
<?=createSiteScripts();?>
<script>
	$(function() {
		// This is a hack to make the prototype only show
		// the additional credits sidebar section when the
		// On Completion tab is active
		$('#sidebar-credit').hide();
		$('.nav-focus li a').click(function() {
			if ($(this).attr('href') === '#completion') {
				$('#sidebar-credit').show();
			} else {
				$('#sidebar-credit').hide();
			}
		});
	});

	$(function() {
		$(".js-btn-edit").click(function() {
			$t = $(this),
				$e = $t.closest('.editable-set').find('.edit-mode'),
				$r = $t.closest('.editable-set').find('.read-only');
			$e.show();
			$r.hide();
		});
	});

	$(function() {
		$(".js-btn-cancel").click(function() {
			$t = $(this),
				$e = $t.closest('.editable-set').find('.edit-mode'),
				$r = $t.closest('.editable-set').find('.read-only');
			$e.hide();
			$r.show();
		});
	});

	$(function() {
		$('label.answer').click(function(e) {
			$t = $(this),
				$a = $t.closest('.question').find('.answer');
			$a.removeClass('selected').has('input:checked').addClass('selected');


			if ($('input[name=q1]:checked').val() == "false") {
				$(".ce-not-awarded").fadeIn();
				$(".ce-awarded").hide();

			} else {
				$(".ce-not-awarded").hide();
				$(".ce-awarded").fadeIn();

			}

		});
	});
</script>
<?=createSiteEnd();?>