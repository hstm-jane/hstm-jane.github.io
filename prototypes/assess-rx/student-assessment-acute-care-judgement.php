<?php

include "includes/helpers/helpers.php";
$patterns['start']['title'] = 'RN: Acute Care Judgment Assessment';
$patterns['focus']['title'] = 'RN: Acute Care Judgment Assessment';
$patterns['header']['classes'] = array('site-header-min');
$patterns['header']['logoLarge'] = './content/images/logo-assess-large.png';
$patterns['footer']['classes'] = array('site-footer-min');

?>
	<?= createSiteStart($patterns['start']); ?>
		<div class="no-focus">
			<?= createHeader($patterns['header']); ?>
		</div>


		<div class="layout layout-min">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<section class="section section-main section-box" data-equalize="layout-columns">




							<?php

                            $patients = array (
                                'Mr. Farino (705-2)',
                                'Ms. Rivera (700-3)',
                                'Ms. Brooks (700-4)',
                                'Mr. Collins (700-6)',
                                'Mr. Hutchinson (700-7)',
                                'Ms. Corona (700-8)',
                                'Ms. Green (700-0)',
                                'Ms. Myerson (700-10)',
                            );

                            foreach( $patients as $index => $patient ) {
                                if ($index===0) {
                                    $slat = array(
                                        'attributes' => array(
                                            array('class',array('slat')),
                                        ),
                                             'title' => '<a href="/demo-student-assessment-acute-care-judgement-video.php" >'.$patient.'</a>',
                                        'meta' => array(
                                            array(
                                                'type' => 'Clinical Vignette',
                                            ),
                                            array(
                                                'label' => 'Status:',
                                                'value' => 'Not Yet Started',
                                            ),
                                        ),
                                      'action' => array(
                                            'type' => 'custom',
                                            'content' => '<div class="action"><a class="btn btn-sm btn-success" href="#">Start</a></div>',
                                        )
                                    );
                                } else if ( $index===1 ) {
                                    $slat = array(
                                        'attributes' => array(
                                            array('class',array('slat')),
                                        ),
                                        'title' => $patient,
                                        'meta' => array(
                                            array(
                                                'type' => 'Clinical Vignette',
                                            ),
                                            array(
                                                'label' => 'Status:',
                                                'value' => 'Not Yet Started',
                                            ),
                                        ),
                                        'action' => array(
                                            'type' => 'custom',
                                            'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
                                        )
                                    );
                                } else {
                                    $slat = array(
                                        'attributes' => array(
                                            array('class',array('slat')),
                                        ),
                                        'title' => $patient,
                                        'meta' => array(
                                            array(
                                                'type' => 'Clinical Vignette',
                                            ),
                                            array(
                                                'label' => 'Status:',
                                                'value' => 'Not Yet Started',
                                            ),
                                        ),
                                        'action' => array(
                                            'type' => 'custom',
                                            'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
                                        )
                                    );
                                }
                                echo createSlat($slat);
                            }

                        ?>
						</section>

						<!-- /section-main -->
					</div>
					<!-- /column -->

					<div class="col-md-3">
						<section class="section section-sidebar" data-equalize="layout-columns">
							<?php include_sidebar() ?>
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


		<?= createFooter($patterns['footer']); ?>
			<?= createPrototypeNav(); ?>
				<?= createSiteScripts(); ?>
					<script>
						$(function() {
							$('.branding a').click(function(e) {
								e.preventDefault();
								window.location.href = "/demo-start.php";
							});
						});


						$(".action a").click(function(e) {
							e.preventDefault();
							e.preventDefault();
							HealthStream.utilities.interrupt({
								title: 'Before you start....',
								text: '<ul class="vingette-warning"><li><i class="fa fa-2x fa-clock-o"></i>You will need about 12 minutes to complete the vignette. It is timed.</li><li><i class="fa fa-2x fa-exchange"></i>There are two parts to the vignette: a video and an assessment.</li><li><i class="fa fa-2x fa-times"></i>You will not be able to pause or restart after you begin.</li><li> <i class="fa fa-2x fa-stethoscope"></i>Clinical data from the video will be available during the assessment. </li></ul>',
								actions: [


									{

										label: 'Come Back Later'
									},
									{
										url: 'student-judgment-assessment-video.php',
										label: 'Continue'
									},


								]
							});
						});
					</script>
					<?= createSiteEnd(); ?>