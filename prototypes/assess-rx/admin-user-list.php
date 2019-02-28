<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Users';
$patterns['focus']['title'] = 'Users';



$patterns['search']['filters'] = array(
  array(
    'visible' => 'mobile',
    'header' => 'Sort',
    'controls' => array(
      '<select class="form-control js-select2"><option>Modified Date</option><option>ID</option><option>Department</option></select>',
    ),
  ),
  array(
"state" => 'closed', // static / open / closed
"header" => 'Individual',
"controls" => array(
  '<label class="control-label">Name</label><input type="text" class="form-control" placeholder="">',
  '<label class="control-label">Username</label><input type="text" class="form-control" placeholder="">',
  '<label class="control-label">Email</label><input type="text" class="form-control" placeholder="">',

),
),
  array(
"state" => 'closed', // static / open / closed
"header" => 'Assessments',
"controls" => array(
	'

<label class="control-label">Assignment</label>
	<select class="form-control js-assessment-select" >
	<option></option>
	<option value="1">RN: Emergency Assessment</option>
	<option value="2">Pharmacology: RN Assessment</option>
	<option value="3">RN: Emergency Skills Self-Assessment</option>
	<option value="4">RN: Behavioral Assessment</option>

</select>',
	'
	<label class="control-label">Assignments Related To</label>
                            <select class="form-control js-profession-select" >
                            <option></option>
                                  <option value="1">Profession 1</option>
                                  <option value="2">Profession 2</option>
                                  <option value="3">...</option>
                                 
                              </select>',



'<label class="control-label style="margin-top:15px;">Progress</label>
<ul class="list-unstyled" style="margin-top:0">
<li class="checkbox" style="margin-top: 0">
<label><input type="checkbox" checked="checked" name="">Any Status</label>
</li>
<li class="checkbox">
<label><input type="checkbox" name="">Results Available</label>
</li>

<li class="checkbox">
<label><input type="checkbox" name="">No Progress</label>
</li>

<li class="checkbox">
<label><input type="checkbox" name="">Pending</label>
</li>
</ul>



 ',

),
),
	
array(
		"state" => 'closed', // static / open / closed
		"header" => 'Employment',
		"controls" => array(
			
			'
			<label class="control-label style="margin-top:15px;">Role</label>
		<ul class="list-unstyled" style="margin-top:0">

<li class="checkbox" style="margin-top:0;">
<label><input type="checkbox" name="">Admin</label>
</li>

<li class="checkbox">
<label><input type="checkbox" name="">Employee</label>
</li>

<li class="checkbox">
<label><input type="checkbox" name="">Candidate</label>
</li>
</ul>
			',

			
							  
			'<label class="control-label">Affiliation</label>
                            <select class="form-control js-affiliation-select" >
                            <option></option>
                                  <option value="1">Arkham Asylum </option>
                                  <option value="2">All Saints Hospital</option>
                                  <option value="3">Brookhaven Hospital</option>
                                  <option value="4">Chicago Hope</option>
                                  <option value="5">Holby City Hospital</option>
                                  <option value="6">James Rivers Hospital </option>
                                  <option value="7">Kingdom Hospital</option>
                                  <option value="8">Mayfield Psychiatric Hospital</option>
                                  <option value="9">New Bedlam Rest Home for the Emotionally Interesting</option>
                                  <option value="10">Princeton-Plainsboro Teaching Hospital</option>
                                  <option value="11"> Richmond Trinity Hospital</option>
                                  <option value="12">Sacred Heart Hospital </option>
                                  <option value="13">Shady Acres Mental Hospital</option>
                                  <option value="14">Springfield General Hospital </option>
                              </select>',
			'<label class="control-label">Department(s) </label>

                                    <select class="form-control js-department-select  data-placeholder="Type 1 to see slats" >
                                    <option></option>
                                    <option value="1">
                                            This is a really long department name that could show up here.
                                        </option>
                                        <option value="1">
                                            Admissions
                                        </option>
                                        <option value="2">
                                            Anesthetics
                                        </option>
                                        <option value="3">
                                            Cardiology
                                        </option>
                                        <option value="4">
                                            Critical Care
                                        </option>
                                        <option value="5">
                                            Diagnostic Imaging
                                        </option>
                                        <option value="6">
                                            General Surgery
                                        </option>
                                        <option value="7">
                                            Gynecology
                                        </option>
                                        <option>
                                            Haematology
                                        </option>
                                        <option>
                                            Human Resources
                                        </option>
                                        <option>
                                            Neonatal
                                        </option>
                                        <option>
                                            Neurology
                                        </option>
                                        <option value="8">
                                            Radiology
                                        </option>
                                        <option value="9">
                                            Labor and Delivery
                                        </option>
                                        <option value="10">
                                            Obstetrics
                                        </option>
                                    </select>',
		),
	),


);

?>



	<?=createSiteStart($patterns['start']);?>
		<?=createHeader($patterns['header']);?>
			<?=createFocus($patterns['focus']);?>

				<div class="layout layout-search">
					<div class="container">
						<section class="section section-main section-box">
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


									<section class="section section-results section-assess-users" data-equalize="layout-columns">

										<section class="section section-results-header ">
											<div class="row">
												<div class="col-md-6">
													<h2>Users <small>Showing 51- 100 of 3000</small></h2>
												</div>
												<div class="col-md-6 hidden-xs hidden-sm">
													<div class="section-results-header-sort">
														<div class="dropdown">
															<a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Date Modified <i class="fa fa-sort"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li class="active"><a href="#">Most Recent </a></li>
																<li><a href="#">Least Recent</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>

										</section>

										<section>

											<div class="checkable">
												<div class="select"><label><input type="checkbox" class="checkbox"><span class="icon"></span>  </label>
													<span class="lbl-select-all">Select All Users</span>
												</div>
											</div>

											<?php
              sort($actors);
              for ($x = 0; $x <= 50; $x++) {


                $slat = array(
                  'attributes' => array(
                    array('class',array('slat')),
                  ),
                  'title' => '<a href="user-edit.php">'. $actors[$x] . '</a>',
                  'meta' => array(

                    array(
                                        'label' => 'Modified: ',
                                        'value' => '<span class="meta-callout-label">Modified:</span>' . date('M d, Y'),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                  ),


             'action' => array(
                                    'type' => 'action-split',
                                    'options' => array(
                                        array(
                                            'content' => 'View',
                                            'link' => '/admin-user-edit.php'
                                        ),
										   array(
                                            'content' => 'Assign Assessment',
                                            'link' => '#',
                                        ),
                                         array(
                                            'content' => 'Send Questionnaire',
                                            'link' => '#',
                                        ),
                                    )
                                ),
                );

                echo '<div class="checkable">';
                echo createSlat($slat);

                echo '<div class="select"><label><input type="checkbox" class="checkbox"><span class="icon"></span></label></div></div>';

              }
              ?>
										</section>

										<?php
          $stickybar = array(
            'sets' => array(
              array(
                'position' => 'left',
                'classes' => array('hidden-xs', 'hidden-sm'),
                'html' => '<a href="#"  class="btn btn-success ">Continue to Assign Assessments</a>
                <a href="/user-add.6.php"  class="btn btn-default ">Send Questionnaire</a>
                <a href="/user-add.6.php"  class="btn btn-default ">Create User</a>
                '
				
				
                ,
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
                <a href="/user-add.2.php" data-toggle="modal" class="btn btn-success">Add User</a>
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
								$(function() {

									$(".js-profession-select").select2({
										placeholder: "Select an Profession",
										allowClear: true
									});
									$(".js-affiliation-select").select2({
										placeholder: "Select an Affiliation",
										allowClear: true
									});
									$(".js-department-select").select2({
										placeholder: "Select a Department",
										allowClear: true
									});
									$(".js-assessment-select").select2({
										placeholder: "Select an Assessment",
										allowClear: true
									});
									$('.js-select2').select2();

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

								});
							</script>
							<?=createSiteEnd();?>