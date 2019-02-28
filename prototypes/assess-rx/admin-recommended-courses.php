<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Recommended Learning';
$patterns['focus']['title'] = 'Recommended Learning';

$patterns['header']['mainNavActive'] ='results';


$patterns['search']['filters'] = array(
	array(
		'visible' => 'mobile',
		'header' => 'Sort',
		'controls' => array(
			'<select class="form-control js-select2"><option>Name</option><option>ID</option><option>Department</option></select>',
		),
	),
	array(
		"state" => 'static', // static / open / closed
		"header" => 'Recommended From',
		"controls" => array(
			
		
                                ' <div class="form-group">
                                    <select class="form-control js-select2" id="slat-recommendation-source" data-placeholder="Type an assessment title">
                                        <option></option>
                                        <option>All</option>
                                        <option data-dept="Nursing" data-userid="" value="Student ">RN: Emergency Assessment </option>
                                        <option data-dept="Nursing" data-userid="" value="Student ">Pharmacology: RN Assessement </option>
                                        <option data-dept="Nursing" data-userid="" value="Student ">A very super duper long assessment title could be here and this is what it would look like. </option>
                                      
                                    </select>
                                </div>'
		), 
	),
);
	 ?>

		<?=createSiteStart($patterns['start']);?>
			<div class="no-focus">
				<?=createHeader($patterns['header']);?>

					<?=createFocus($patterns['focus']);?>
			</div>
			<div class="layout layout-search">
				<div class="container">
					<section class="section section-main section-box">
						<section class="return-link hidden-print">
							<a href="/admin-essentials-plus-details.php"><i class="fa fa-fw fa-chevron-left"></i>Return to Assessment Results</a>
						</section>
						<div class="row">
							<div class="col-md-3 hidden-xs hidden-sm">
								<section class="section section-filters" data-equalize="layout-columns">
									<h2>Refine</h2>
									<?=createSearch($patterns['search']);?>
										<div class="search-filter">
											<button class="btn btn-default ">Apply Filters</button>
										</div>
								</section>
							</div>
							<div class="col-md-9">


								<section class="section section-results" data-equalize="layout-columns">

									<section class="section section-results-header">
										<div class="row">
											<div class="col-md-8">
												<h2>Abigail's Recommended Learning <small> Showing 1-50 of 200</small></h2>
											</div>
											<div class="col-md-4 hidden-xs hidden-sm">
												<div class="section-results-header-sort">
													<div class="dropdown">
														<a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Name <i class="fa fa-sort"></i></a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li class="active"><a href="#">Name A - Z</a></li>
															<li><a href="#">Name Z - A</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>

									</section>

									<section class="section">

										<section class="section">
											<?php

    for ($x = 0; $x <= 10; $x++) {
                                            $slat = array(
                                                'attributes' => array(
                                                    array('class', array('slat', 'js-nicu-slat')),
                                                    ),

                                                'title' => '<a href="course-enroll.2.php">A Summary of NICU Fat Emulsion Medication Errors and Nursing Services - 20-190026</a>',
                                                
                                            'meta' => array( 
                                                array(
                                                    'type' => 'Course',
                                                    ),
                                                array(
                                                    'label' => 'CE:',
                                                    'value' => '2.00 Hour(s)',
                                                    ),
                                                array(
                                                    'label' => 'ACTIVITIES:',
                                                    'value' => 'Online',
                                                    ), 
                                                array(
                                                    'label' => 'Publisher:',
                                                    'value' => 'Lippincott – Wolters Kluwer Health',
                                                    ),
                                                
                                                ),


                                            'action' => array(
                                                'type' => 'custom',
                                    				    'content' => ''
												
                                               
                                                ),

                                            );
                                            echo createSlat($slat);

                                            $slat = array(
                                                'attributes' => array(
                                                    array('class', array('slat')),
                                                    ),

                                                'title' => '<a href="course-enroll.2.php">A Review of Insulin for the Treatment of Diabetes Mellitus - 20-548833</a>',
                                               
                                            'meta' => array( 
                                                array(
                                                    'type' => 'Course',
                                                    ),
                                                array(
                                                    'label' => 'CE:',
                                                    'value' => '2.00 Hour(s)',
                                                    ),
                                                array(
                                                    'label' => 'ACTIVITIES:',
                                                    'value' => 'Online',
                                                    ), 
                                                array(
                                                    'label' => 'Publisher:',
                                                    'value' => 'Lippincott – Wolters Kluwer Health',
                                                    ),
                                                
                                                ),


                                             'action' => array(
                                                'type' => 'custom',
                                    				    'content' => ''
												 
                                               
                                                ),

                                            );
                                            echo createSlat($slat);

                                            $slat = array(
                                                'attributes' => array(
                                                    array('class', array('slat')),
                                                    ),
                                                'title' => '<a href="course-enroll.2.php">Acute Coronary Syndrome - 20-477389</a>',
                                               
                                            'meta' => array(
                                                array(
                                                    'type' => 'Course',
                                                    ),
                                                array(
                                                    'label' => 'CE:',
                                                    'value' => '1.00 Hour(s)',
                                                    ),
                                                array(
                                                    'label' => 'ACTIVITIES:',
                                                    'value' => 'Online, Evaluation',
                                                    ),
                                                array(
                                                    'label' => 'PUBLISHER:',
                                                    'value' => 'Lippincott – Wolters Kluwer Health',
                                                    ),


                                                ),
                                           'action' => array(
                                                'type' => 'custom',
                                    				    'content' => ''
											   
                                               
                                                ),

                                            );
                                            echo createSlat($slat);

                                            $slat = array(
                                                'attributes' => array(
                                                    array('class', array('slat')),
                                                    ),
                                                'title' => '<a href="#">Acute Myocardial Infarction and Diabetes Mellitus</a>',
                                              
                                            'meta' => array(
                                                array(
                                                    'type' => 'Course',
                                                    ),
                                                array(
                                                    'label' => 'CE:',
                                                    'value' => '1.00 Hour(s)',
                                                    ),
                                                array(
                                                    'label' => 'ACTIVITIES:',
                                                    'value' => 'Online, Test, Evaluation',
                                                    ),
                                                array(
                                                    'label' => 'Publisher:',
                                                    'value' => 'EBSCO Health',
                                                    ),


                                                ),
                                          'action' => array(
                                                'type' => 'custom',
                                    				    'content' => ''
											  
                                               
                                                ),
                                            );
                                            echo createSlat($slat);

                                            $slat = array(
                                                'attributes' => array(
                                                    array('class', array('slat')),
                                                    ),
                                                'title' => '<a href="course-enroll.2.php">Understanding Chronic Pain Management</a>',
													
                                            'meta' => array(
                                                array(
                                                    'type' => 'Course',
                                                    ),
                                                array(
                                                    'label' => 'CE:',
                                                    'value' => '2.50 &ndash; 3.25',
                                                    ),

                                                ),
                                         'action' => array(
                                                'type' => 'custom',
                                    				    'content' => ''
											 
                                               
                                                ),

                                            );
                                            echo createSlat($slat);

                                            $slat = array(
                                                'attributes' => array(
                                                    array('class', array('slat')),
                                                    ),
                                                'title' => '<a href="#">Adult Diabetes Mellitus: Thinking Beyond Type 2 - 20-531621</a>',
                                                'meta' => array(
                                                    array(
                                                        'type' => 'Course',
                                                        ),
                                                    array(
                                                        'label' => 'CE:',
                                                        'value' => '0.50 - 2.00 Hour(s)',
                                                        ),
                                                    array(
                                                        'label' => 'ACTIVITIES:',
                                                        'value' => 'Online',
                                                        ),
                                                    array(
                                                        'label' => 'Publisher:',
                                                        'value' => 'Lippincott – Wolters Kluwer Health',
                                                        ),

                                                    ),
												   'action' => array(
														'type' => 'custom',
                                    				    'content' => ''

														),
                                                );
                                            echo createSlat($slat);


                                            $slat = array(
                                                'attributes' => array(
                                                    array('class', array('slat', 'js-nicu-slat')),
                                                    ),

                                                'title' => '<a href="course-enroll.2.php">The Combined Use of Sucrose and Nonnutritive Sucking for Procedural Pain in Both Term and Preterm Neonates: An Integrative Review of the Literature - 20-389641</a>',
                                                
                                            'meta' => array( 
                                                array(
                                                    'type' => 'Course',
                                                    ),
                                                array(
                                                    'label' => 'CE:',
                                                    'value' => '2.00 Hour(s)',
                                                    ),
                                                array(
                                                    'label' => 'ACTIVITIES:',
                                                    'value' => 'Online',
                                                    ), 
                                                array(
                                                    'label' => 'Publisher:',
                                                    'value' => 'Lippincott – Wolters Kluwer Health',
                                                    ),
                                                
                                                ),

  												'action' => array(
                                                'type' => 'custom',
                                    				    'content' => ''
                                               
                                                ),

                                            );
                                            echo createSlat($slat);

                                     


     

}

?>
										</section>
									</section>

									<?php
$stickybar = array(
	'sets' => array(
		array(
			'position' => 'left',
			'classes' => array('hidden-xs', 'hidden-sm'),
			'html' => '
                      <a href="#"  class="btn btn-success ">Export</a>
                      <a href="#"  class="btn btn-default ">Back to Results</a>',
		),
		array(
			'position' => 'right',
			'classes' => array('hidden-xs', 'hidden-sm'),
			'html' => '
                                                <label class="stickybar-text">Showing 51 - 100 of 3000</label>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        ',
		),
		array(
			'position' => 'left',
			'classes' => array('visible-xs', 'visible-sm'),
			'html' => '
                      <a href="#" data-toggle="modal" class="btn btn-success">Export</a>
                      <a href="#modal-refine" class="btn btn-default" data-toggle="modal">Filter</a>
                      ',
		),
	),
);
echo createStickybar($stickybar);
?>

								</section>
								<!-- /section-main -->
							</div>
							<!-- /column -->
						</div>
						<!-- /row -->
					</section>


				</div>
				<!-- /container -->
			</div>
			<!-- /layout -->

			<!-- Modal -->
			<div id="modal-refine" class="modal fade" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
							<h4 class="modal-title">Refine Results</h4>
						</div>
						<div class="modal-body">
							<section class="section section-refinement-options">

								<?=createSearch($patterns['search']);?>


							</section>
						</div>
						<div class="modal-footer">
							<button class="btn btn-success" data-dismiss="modal">Apply</button>
							<button class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /modal -->







			<?=createFooter($patterns['footer']);?>
				<?=createPrototypeNav();?>
					<?=createSiteScripts();?>


						<script>
							$(".js-affiliation-select").select2({
								placeholder: "Select an Affiliation",
								allowClear: true
							});
							$(".js-department-select").select2({
								placeholder: "Select a Department",
								allowClear: true
							});



							$(function() {
								$('.slat-toggle .btn').click(function(e) {
									var $btn = $(this);
									e.preventDefault();
									$btn.toggleClass('btn-success btn-default');
									if ($btn.hasClass('btn-success')) {
										$btn.html('Selected<i class="fa fa-check visible-xs"></i>');
									} else {
										$btn.html('Select<i class="fa fa-plus visible-xs"></i>');
									}
								});





							});



							$(function() {
								$('.js-select2').select2();

							  function formatRecommendationSource(option) {
									
									if (!option.id) return option.text; // optgroup
									return '<div class="slat slat-select2 "><div class="title">' + option.text + ' </div></div>';
								}
								
								$('#slat-recommendation-source').select2({
									minimumInputLength: 0,
									formatResult: formatRecommendationSource,
									escapeMarkup: function(m) {
										return m;
									},
									dropdownCssClass: 'select2-slats'
								});

								$(document).on('click', '.search-filter__toggle', function() {
									$(this).closest('.search-filter').toggleClass('search-filter--closed');
									$(window).resize();
								});

								$('#modal-filter').on('show.bs.modal', function() {
									$('.js-select2').each(function() {
										$(this).select2("destroy");
									});
									$(this).find('.modal-body').html($('.search-filters').html());
									$('.js-select2').select2();
									$('.search-filters').empty();
								});
								$('#modal-filter').on('hidden.bs.modal', function() {
									$('.js-select2').each(function() {
										$(this).select2("destroy");
									});
									$('.search-filters').append($('#modal-filter .modal-body').html());
									$('.js-select2').select2();
									$('#modal-filter .modal-body').empty();

								});
								$('.slat .btn').click(function(e) {
									e.preventDefault();
								});
							});
						</script>
						<?=createSiteEnd();?>