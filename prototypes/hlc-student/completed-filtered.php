<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My Completions';
$patterns['header']['mainNavActive'] = 'completed';
$patterns['focus']['title'] = 'My Completions';
$patterns['focus']['meta_secondary'] = array(
array(
'label' => 'Total Completions:',
'value' => '35',
),
array(
'label' => 'Est. Learning Time:',
'value' => '8h 47m',
),
);
// $patterns['focus']['action'] = '<a href="#modal-print" class="btn btn-focus" data-toggle="modal">Print <i class="fa fa-chevron-right"></i></a>';

?>
	<?= createSiteStart($patterns['start']); ?>
		<?= createHeader($patterns['header']); ?>
			<?= createFocus($patterns['focus']); ?>
				<?php $patterns['search']['filters'] = array(
array(
'visible' => 'mobile',
'header' => 'Sort',
'controls' => array(
'<select class="form-control js-select2">
<option>Best Match</option>
<option>Date Updated</option>
<option>Name</option>
</select>',
),
),

array(
"state" => 'static', // static / open / closed
"header" => 'Date Range',
"controls" => array(
' <div class="date-range">
<select class="form-control date-range__control">
<optgroup label="Presets">
<option>Since January 1</option>
<option>Last 6 months</option>
<option selected="">Last 12 months</option>
<option>Last 24 months</option>
<option>Previous Calendar Year</option>
<option>Complete History</option>
</optgroup>
<optgroup label="Custom">
<option value="custom">Custom Range</option>
</optgroup>
</select>
<div class="date-range__custom">
<div class="form-group">
<label>Start:</label>
<div class="input-group date">
<input type="text" class="form-control">
<span class="input-group-btn">
<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
</span>
</div>
</div>
<div class="form-group">
<label>End:</label>
<div class="input-group date">
<input type="text" class="form-control">
<span class="input-group-btn">
<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
</span>
</div>
</div>
</div>
</div>',

),
),
array(
"state" => 'static', // static / open / closed
"header" => 'Completions',
"controls" => array(
'<select class="form-control">
<option selected="">All</option>

<option>Assigned Only</option>
<option>Elective Only</option>
<option>Learning Events Only</option>
<option>Assessments Only</option>
</select>', 
'<label class="checkbox"><input type="checkbox" >Only show items with CEU</label>',

'<label class="checkbox"><input type="checkbox" >Only show items added by me</label>',


),
),


);
?>



				<style>


					@media only print {
						.site-header {
							height: 60px;
							border-bottom: 1px solid #ccc;
						}
						.site-header a[href]:after {
							content: "";
						}
						.site-header .trigger-open {
							display: none !important;
						}

						.focus-pageheader {
							display: none;
						}

						/*.section,*/
						.slat {
							page-break-inside: avoid;
						}

						.slat .btn {
							display: none !important;
						}

						.slat .collapse-group {
							height: auto;
							display: block !important;
						}
						.slat .collapse-toggle {
							display: none !important;
						}

						.site-footer .focus-promo,
						.site-footer .links {
							display: none;
						}
						section[data-equalize="layout-columns"] {
							height: auto !important;
							min-height: 0 !important;
						}
						.section-refinement-options {
							display: none;
						}

						.tag {
							border: 1px solid #ccc;
							padding-right: 5px;
						}
						.tag i.fa-times {
							display: none;
						}

						.credit-summary__list {
							display: block !important;
						}
						.credit-summary__toggle-icon {
							display: none;
						}
					}
				</style>
				<div class="layout layout-search">
					<div class="container">
						<section class="section section-main section-box">
							<div class="row">
								<div class="col-md-3 hidden-xs hidden-sm">
									<section class="section section-filters" data-equalize="layout-columns">
										<h2>Refine Results</h2>

										<?=createSearch($patterns['search']); ?>


									</section>
								</div>
								<div class="col-md-9">
									<section class="section visible-print">
										<h1>My Completed</h1>
									</section>
									<section class="section visible-print">
										<h2>Student Information</h2>
										<div class="row">
											<div class="col-xs-6">
												<label>Name:</label> Stephanie Juniper
											</div>
											<div class="col-xs-6">
												<label>Report Range:</label> Jul 13, 2011 &ndash; Jul 12, 2013
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6">
												<label>User ID:</label> 1234567890
											</div>
											<div class="col-xs-6">
												<label>Hire/Re-hire Date:</label>
												<?= date('M j, Y'); ?>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6">
												<label>Job Title:</label> RN
											</div>
											<div class="col-xs-6">
												<label>Active Date:</label>
												<?= date('M j, Y'); ?>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6">
												<label>Job Category:</label> Nurse
											</div>
											<div class="col-xs-6">
												<label>Review Date:</label>
												<?= date('M j, Y'); ?>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6">
												<label>Department:</label> Nursing
											</div>
										</div>
									</section>
									<section class="section section-results" data-equalize="layout-columns">

										<section class="section section-results-header">
											<div class="row">
												<div class="col-md-6">
													<h2>
														<?= date('M j, Y',strtotime('-12 months')); ?> -
															<?= date('M j, Y'); ?> <small>Showing 1-20 of 35</small></h2>
													<div class="section section-refinement-applied">
														<h3>Refinements</h3>
														<div class="tag-group">
															<a href="#" class="tag">Last 12 Months<i class="fa fa-times"></i></a>
															<a href="#" class="tag">Curriculums<i class="fa fa-times"></i></a>
															<a href="#" class="tag">Courses<i class="fa fa-times"></i></a>
															<a href="#" class="tag">Learning Events<i class="fa fa-times"></i></a>
														</div>
													</div>
												</div>
												<div class="col-md-6 hidden-xs hidden-sm">

													<div class="section-results-header-sort">
														<a class="btn btn-default btn-print pull-right" href="#"><i class="fa fa-print"></i> Print </a>

														<div class="dropdown pull-right">
															<a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Date <i class="fa fa-sort"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li class="active"><a href="#">Date</a></li>
																<li><a href="#">Name A - Z</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>


											<?php

$credits = '';
$credits .= createSlat(array(
'attributes' => array(
array('class',array('slat','slat-simple')),
),
'title' => 'AMA PRA Category 1 Credit&trade;',
'meta' => array(
array(
'label' => 'Discipline:',
'value' => 'AEMT',
),
array(
'label' => 'Credits:',
'value' => '5.75',
),
array(
'label' => 'Courses:',
'value' => '2',
)
),
'action' => array()
));

$credits .= createSlat(array(
'attributes' => array(
array('class',array('slat','slat-simple')),
),
'title' => 'AMA PRA Category 1 Credit&trade;',
'meta' => array(
array(
'label' => 'Discipline:',
'value' => 'Emergency Medical Technician - First Responder',
),
array(
'label' => 'Credits:',
'value' => '4.00',
),
array(
'label' => 'Courses:',
'value' => '2',
)
),
'action' => array()
));

?>

												<div class="panel-group panel-group-slats" role="tablist" id="panel-group-1" aria-multiselectable="true">
													<div class="panel panel-default">
														<div class="panel-heading" role="tab">
															<a role="button" data-toggle="collapse" data-parent="#panel-group-1" href="#panel-1" class="collapsed">
CE Credit Summary
<div class="panel-heading-icon">
<i class="fa fa-chevron-down panel-heading-icon-closed"></i>
<i class="fa fa-chevron-up panel-heading-icon-open"></i>
</div>
</a>
														</div>
														<div id="panel-1" class="panel-collapse collapse" role="tabpanel">
															<div class="panel-body">
																<?= $credits ?>
															</div>
														</div>
													</div>
												</div>

										</section>

										<section class="section">

											<?php

$content = '
<div class="row learning-event-details">

<div class="col-md-6">
<label>Completion Time</label>
<p>3h 10m</p>
<hr>
</div>
<div class="col-md-6">
	<label>Credit Hours </label>
<p>2h 30m</p>
<hr>
</div>
<div class="col-md-6">
		<label>Organization </label>
<p>HCA</p>
<hr>
</div>
<div class="col-md-6">
	<label>Accrediting Body </label>
	<p>Accreditation Commission For Education in Nursing </p>
	<hr>
</div>
<div class="col-md-6">
	<label>Location </label>
	
	<div>Somewhereville, SW 12345</div>
	<hr>
</div>
<div class="col-md-6">
	<label>Provider </label>
	<p>Provider Goes Here</p>

	<hr>
</div>
<div class="col-md-6">
	<label>Attachments </label>
	<p><a href="#">certification.doc</a></p>
	<p><a href="#">certification-2.doc</a></p>


	<hr>
</div>

</div>
<label>Additional Information</label>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vestibulum elit quis placerat condimentum. Quisque ac ipsum neque. Proin accumsan eget velit vitae congue. Cras elementum aliquam dui, at sodales eros euismod sed. Etiam fringilla interdum nunc ac rutrum. Cras a aliquam nulla, mollis tempus tortor. Donec a justo purus.</p>
';
$slat = array(
'title' => 'How to Draw Blood',
'meta' => array(
array(
'type' => 'Conference',
),                                    
array(
'label' => 'CE Earned:',
'value' => '2.5',
),
array(
'label' => 'Entry:',
'value' => 'Student',
),                                                                      
array(
'label' => 'Completed: ',
'value' => "<div>" . date('M j, Y', strtotime('-30 days')) ." - <div> " .date('M j, Y', strtotime('-25 days')) ,
'attributes' => array(
array('class','meta-callout'),
)
),
),
'action' => array(
'type' => 'custom',
'content' => '<div class="action"><a class="btn btn-sm btn-default" href="/learning-record-manage.php" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
),
'nested' => array(
'hide' => array($content),
)
);
echo createSlat($slat);

$slat = array(
'title' => '<a href="course-complete.php">Understanding Chronic Pain Management</a>',
'meta' => array(
array(
'type' => 'Course',
),
array(
'label' => 'Est. Time:',
'value' => '2h 10m',
),
array(
'label' => 'Completed: ',
'value' => date('M j, Y', strtotime('-45 days')),
'attributes' => array(
array('class','meta-callout'),
)
),
),
'action' => array(
'type' => 'action-single',
'content' => 'Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
'link' => '#',
)
);
echo createSlat($slat);

$slat = array(
'title' => '<a href="course.php">Advanta 2 Med Surg Bed</a>',
'meta' => array(
array(
'type' => 'Course',
),
array(
'label' => 'Est. Time:',
'value' => '15m',
),
array(
'label' => 'Completed: ',
'value' => date('M j, Y', strtotime('-52 days')),
'attributes' => array(
array('class','meta-callout'),
)
),
),
'action' => array(
'type' => 'action-single',
'content' => 'Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
'link' => '#',
)
);
echo createSlat($slat);

$slat = array(
'title' => '<a href="assessment-completed.php?empId=2">Care of the Surgical Patient - Chamberland, Marie</a>',
'meta' => array(
array(
'type' => 'Peer Assessment',
),

array(
'label' => 'Completed: ',
'value' => date('M j, Y', strtotime('-64 days')),
'attributes' => array(
array('class','meta-callout'),
)
),
),
'action' => array(
'type' => 'action-single',
'content' => 'Print <i class="fa fa-fw fa-trophy visible-xs"></i>',
'link' => '#',
)
);
echo createSlat($slat);

$slat = array(
'title' => '<a href="assessment-completed.php">Care of the Surgical Patient</a>',
'meta' => array(
array(
'type' => 'Self Assessment',
),
array(
'label' => 'Rater:',
'value' => 'Jane F. Doe',
),
array(
'label' => 'Completed: ',
'value' => date('M j, Y', strtotime('-68 days')),
'attributes' => array(
array('class','meta-callout'),
)
),
),
'action' => array(
'type' => 'action-single',
'content' => 'Print <i class="fa fa-fw fa-trophy visible-xs"></i>',
'link' => '#',
)
);
echo createSlat($slat);

$content = '
<section class="section">
<h5>Added</h5>
<p>Admin\'s Name, Feb 7, 2014 11:54am</p>
</section>
<section class="section">
<h5>Updated</h5>
<p>Admin\'s Name, Feb 7, 2014 11:54am</p>
</section>
<section class="section">
<h5>Comments</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</section>
<section class="section">
<small class="text-muted">
Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
</small>
</section>
';

$slat = array(
'title' => 'Admin-Entered Learning Event',
'meta' => array(
array(
'type' => 'Learning Event',
),
array(
'label' => 'Est. Time:',
'value' => '1h',
),
array(
'label' => 'Entry:',
'value' => 'Admin',
),
array(
'label' => 'Completed: ',
'value' => date('M j, Y', strtotime('-140 days')),
'attributes' => array(
array('class','meta-callout'),
)
),
),
'action' => array(
'type' => 'action-single',
'content' => 'Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
'link' => '#',
),
'nested' => array(
'hide' => array($content),
)
);
echo createSlat($slat);

$nested = createSlat(array(
'attributes' => array(
array('class',array('slat')),
),
'title' => 'CE - AHIMA',
'meta' => array(
array(
'label' => 'Discipline:',
'value' => 'Pharmacist, Nuclear',
),
array(
'label' => 'Credits:',
'value' => '4.00 AMA PRA Category 1 Credit™',
),
array(
'label' => 'License:',
'value' => '123456789011112',
),
array(
'label' => 'State:',
'value' => 'TN',
),
),
'action' => array(
'type' => 'action-single',
'content' => 'CE Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
'link' => '#',
)
));
$content = '
<section class="section">
<h5>Added</h5>
<p>Admin\'s Name, Feb 7, 2014 11:54am</p>
</section>
<section class="section">
<h5>Updated</h5>
<p>Admin\'s Name, Feb 7, 2014 11:54am</p>
</section>
<section class="section">
<h5>Comments</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</section>
<section class="section">
<small class="text-muted">
Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
</small>
</section>
';
$slat = array(
'title' => '<a data-toggle="modal" href="#modal-learningevent-details">Admin-Entered Learning Event as a Course</a>',
'meta' => array(
array(
'type' => 'Course',
),
array(
'label' => 'Est. Time:',
'value' => '1h',
),
array(
'label' => 'Entry:',
'value' => 'Admin',
),
array(
'label' => 'Completed: ',
'value' => date('M j, Y', strtotime('-160 days')),
'attributes' => array(
array('class','meta-callout'),
)
),
),
'action' => array(
'type' => 'action-split',
'options' => array(
array(
'content' => 'Certificate',
'link' => '#'
),
array(
'content' => 'Refresh Credits',
'link' => '#',
),
)
),
'nested' => array(
'show' => array($nested),
'hide' => array($content),
)
);
echo createSlat($slat);


$slat = array(
'title' => '<a href="course.php">Heart Disease and Treatment Options</a>',
'meta' => array(
array(
'type' => 'Course',
),
array(
'label' => 'Est. Time:',
'value' => '1h',
),
array(
'label' => 'Completed: ',
'value' => date('M j, Y', strtotime('-175 days')),
'attributes' => array(
array('class','meta-callout'),
)
),
),
'action' => array(
'type' => 'action-single',
'content' => 'Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
'link' => '#',
)
);
echo createSlat($slat);

$slat = array(
'title' => '<a href="course.php">Lippencott - 18-lead electrocardiogram</a>',
'meta' => array(
array(
'type' => 'Course',
),
array(
'label' => 'Est. Time:',
'value' => '1h',
),
array(
'label' => 'Completed: ',
'value' => date('M j, Y', strtotime('-190 days')),
'attributes' => array(
array('class','meta-callout'),
)
),
),
'action' => array(
'type' => 'action-single',
'content' => 'Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
'link' => '#',
)
);
echo createSlat($slat);

$nested = createSlat(array(
'attributes' => array(
array('class',array('slat')),
),
'title' => 'CE - AHIMA',
'meta' => array(
array(
'label' => 'Discipline:',
'value' => 'Pharmacist, Nuclear',
),
array(
'label' => 'Credits:',
'value' => '4.00 AMA PRA Category 1 Credit™',
),
array(
'label' => 'License:',
'value' => '123456789011112',
),
array(
'label' => 'State:',
'value' => 'TN',
),
),
'action' => array(
'type' => 'action-single',
'content' => 'CE Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
'link' => '#',
)
));
$nested1 = createSlat(array(
'attributes' => array(
array('class',array('slat')),
),
'title' => 'CE - AAPC',
'meta' => array(
array(
'label' => 'Discipline:',
'value' => 'Emergency Medical Technician - First Responder',
),
array(
'label' => 'Credits:',
'value' => '2.00 Contact Hours',
),
array(
'label' => 'License:',
'value' => '123456789011112',
),
array(
'label' => 'State:',
'value' => 'TN',
),
),
'action' => array(
'type' => 'action-single',
'content' => 'CE Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
'link' => '#',
)
));
$slat = array(
'title' => '<a href="course.php">A Day in the Life of ICD-10</a>',
'meta' => array(
array(
'type' => 'Course',
),
array(
'label' => 'Est. Time:',
'value' => '1h',
),
array(
'label' => 'Completed: ',
'value' => date('M j, Y', strtotime('-210 days')),
'attributes' => array(
array('class','meta-callout'),
)
)
),
'action' => array(
'type' => 'action-single',
'content' => 'Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
'link' => '#',
),
'nested' => array(
'show' => array($nested,$nested1),
)
);
echo createSlat($slat);

$slat = array(
'title' => '<a href="course.php">Blood Transfusions</a>',
'meta' => array(
array(
'type' => 'Course',
),
array(
'label' => 'Est. Time:',
'value' => '1h',
),
array(
'label' => 'Completed: ',
'value' => date('M j, Y', strtotime('-220 days')),
'attributes' => array(
array('class','meta-callout'),
)
),
),
'action' => array(
'type' => 'action-single',
'content' => 'Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
'link' => '#',
)
);
echo createSlat($slat);

?>
										</section>

										<?php
$stickybar = array(
'sets' => array(
array(
'position' => 'left',
'classes' => array('hidden-xs','hidden-sm'),
'html' => '
<a href="#modal-print" data-toggle="modal" class="btn btn-default">Print</a>
<a href="#modal-learningevent" data-toggle="modal" class="btn btn-default">Add a Record</a>
',
),
array(
'position' => 'left',
'classes' => array('visible-xs','visible-sm'),
'html' => '
<div class="btn-group dropup">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-caret-up"></i>
</button>
<ul class="dropdown-menu" role="menu">
<li><a href="#modal-print" data-toggle="modal">Print</a></li>
<li><a href="#modal-learningevent" data-toggle="modal">Add a Record</a></li>
</ul>
</div>
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
									<section class="section section-refinement-group section-refinement-group-first">
										<h3>Sort</h3>
										<select class="form-control">
<option>Date</option>
<option>Name A - Z</option>
</select>
									</section>
									<section class="section section-refinement-group">
										<h3>Search</h3>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search">
											<span class="input-group-btn">
<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
</span>
										</div>
									</section>
									<section class="section section-refinement-group">
										<h3>Date Range</h3>
										<div class="date-range">
											<select class="form-control date-range__control">
<optgroup label="Presets">
<option>Since January 1</option>
<option>Last 6 months</option>
<option selected="">Last 12 months</option>
<option>Last 24 months</option>
<option>Previous Calendar Year</option>
<option>Complete History</option>
</optgroup>
<optgroup label="Custom">
<option value="custom">Custom Range</option>
</optgroup>
</select>
											<div class="date-range__custom">
												<div class="form-group">
													<label>Start:</label>
													<div class="input-group date">
														<input type="text" class="form-control">
														<span class="input-group-btn">
<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
</span>
													</div>
												</div>
												<div class="form-group">
													<label>End:</label>
													<div class="input-group date">
														<input type="text" class="form-control">
														<span class="input-group-btn">
<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
</span>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section class="section section-refinement-group">
										<h3>Completions</h3>
										<select class="form-control">
<option selected="">All</option>
<option>Assigned only</option>
<option>Elective only</option>
<option>Learning Events only</option>
<option>Assessments only</option>
</select>
									</section>
									<div style="height:80px">
										<!-- space to handle custom range's end date drop down -->
									</div>
								</section>
							</div>
							<div class="modal-footer">
								<button class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /modal -->


				<!-- Modal -->
				<div id="modal-print" class="modal modal-transcript fade" tabindex="-1" role="dialog" aria-labelledby="modal-print-label" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
								<h4 id="modal-print-label" class="modal-title">Customize &amp; Print</h4>
							</div>
							<div class="modal-body">
								<fieldset>
									<legend>Choose a Range:</legend>
									<select id="printRangeSelect" class="form-control">
<optgroup label="Presets">
<option>Since January 1</option>
<option>Last 6 months</option>
<option selected="">Last 12 months</option>
<option>Last 24 months</option>
<option>Previous Calendar Year</option>
<option>Complete History</option>
</optgroup>
<optgroup label="Custom">
<option value="custom">Custom Range</option>
</optgroup>
</select>
								</fieldset>
								<fieldset id="printRangeCustom" class="hide">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Start:</label>
												<div class="input-group date">
													<input type="text" class="form-control">
													<span class="input-group-btn">
<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
</span>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>End:</label>
												<div class="input-group date">
													<input type="text" class="form-control">
													<span class="input-group-btn">
<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
</span>
												</div>
											</div>
										</div>
									</div>
								</fieldset>
								<fieldset>
									<legend>Sort By:</legend>
									<select class="form-control">
<option selected>Date</option>
<option>Name</option>
</select>
								</fieldset>
								<fieldset>
									<legend>Completions</legend>
									<select class="form-control">
<option selected>All</option>
<option>Assigned only</option>
<option>Elective only</option>
<option>Learning Events only</option>
<option>CE Credits only</option>
<option>Assessments only</option>
</select>
								</fieldset>
								<div class="collapse" id="print-options">
									<fieldset>
										<legend>Student Demographics <small>Include checked items</small></legend>
										<div class="row">
											<div class="col-sm-6">
												<ul class="list-unstyled">
													<li><label class="checkbox"><input type="checkbox">Student User ID</label></li>
													<li><label class="checkbox"><input type="checkbox">Job Title</label></li>
													<li><label class="checkbox"><input type="checkbox">Job Category</label></li>
													<li><label class="checkbox"><input type="checkbox">Department</label></li>
												</ul>
											</div>
											<div class="col-sm-6">
												<ul class="list-unstyled">
													<li><label class="checkbox"><input type="checkbox">Hire/Re-hire Date</label></li>
													<li><label class="checkbox"><input type="checkbox">Active Date</label></li>
													<li><label class="checkbox"><input type="checkbox">Review Date</label></li>
												</ul>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Transcript Data <small>Include checked items</small></legend>
										<div class="row">
											<div class="col-sm-6">
												<ul class="list-unstyled">
													<li><label class="checkbox"><input type="checkbox" checked>Estimated Time</label></li>
													<li><label class="checkbox"><input type="checkbox">Course Score</label></li>
													<li><label class="checkbox"><input type="checkbox">CE Credit</label></li>

												</ul>
											</div>
											<div class="col-sm-6">
												<ul class="list-unstyled">
													<li><label class="checkbox"><input type="checkbox">Time with Completion Date</label></li>
													<li><label class="checkbox"><input type="checkbox" checked>Learning Event Comments</label></li>
												</ul>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Learning Events <small>Include checked items</small></legend>
										<div class="row">
											<div class="col-sm-6">
												<ul class="list-unstyled">
													<li><label class="checkbox"><input type="checkbox" checked>Administrator-entered</label></li>
												</ul>
											</div>
											<div class="col-sm-6">
												<ul class="list-unstyled">
													<li><label class="checkbox"><input type="checkbox" checked>Student-entered</label></li>
												</ul>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Assessments <small>Include checked items</small></legend>
										<div class="row">
											<div class="col-sm-6">
												<ul class="list-unstyled">
													<li><label class="checkbox"><input type="checkbox" checked>Self Assessments</label></li>
												</ul>
											</div>
											<div class="col-sm-6">
												<ul class="list-unstyled">
													<li><label class="checkbox"><input type="checkbox" checked>Peer Assessments</label></li>
												</ul>
											</div>
										</div>
									</fieldset>
								</div>
								<p><a href="#" data-toggle="collapse" data-target="#print-options" data-toggle-text="Show Additional Options|Hide Additional Options">Show Additional Options</a></p>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" data-dismiss="modal">Continue</button>
								<button class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /modal -->

				<!-- Modal -->
				<div id="modal-daterange" class="modal modal-transcript fade" tabindex="-1" role="dialog" aria-labelledby="modal-daterange-label" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
								<h4 id="modal-daterange-label" class="modal-title">Date Range</h4>
							</div>
							<div class="modal-body">
								<fieldset>
									<legend>Choose a Range:</legend>
									<select id="rangeSelect" class="form-control">
<optgroup label="Presets">
<option>Since January 1</option>
<option>Last 6 months</option>
<option selected="">Last 12 months</option>
<option>Last 24 months</option>
<option>Previous Calendar Year</option>
<option>Complete History</option>
</optgroup>
<optgroup label="Custom">
<option value="custom">Custom Range</option>
</optgroup>
</select>
								</fieldset>
								<fieldset id="rangeCustom" class="hide">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Start:</label>
												<div class="input-group date">
													<input type="text" class="form-control">
													<span class="input-group-btn">
<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
</span>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>End:</label>
												<div class="input-group date">
													<input type="text" class="form-control">
													<span class="input-group-btn">
<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
</span>
												</div>
											</div>
										</div>
									</div>
								</fieldset>
								<fieldset>
									<legend>Sort By:</legend>
									<select class="form-control">
<option selected>Date</option>
<option>Name</option>
</select>
								</fieldset>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" data-dismiss="modal">Update Transcript</button>
								<button class="btn btn-default" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /modal -->

				<!-- Modal -->
				<div id="modal-learningevent" class="modal modal-transcript fade" tabindex="-1" role="dialog" aria-labelledby="modal-learningevent-label" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
								<h4 id="modal-learningevent-label" class="modal-title">Add a Record</h4>
							</div>
							<div class="modal-body">

								<h4>General Info</h4>
								<div class="form-group">
									<label class="control-label" for="">Record Name</label>
									<input type="text" id="" class="form-control">
								</div>
								<div class="form-group">
									<label class="control-label">Type</label>
									<select class="form-control">
											<option>Conference</option>
											<option>Journal Article</option>
											<option>Course</option>	
											<option>Seminar</option>	
											<option value="other">Other</option>	
									</select>
								</div>

								<div class="form-group  other-text">
									<label class="control-label" for="">Other Activity Type</label>
									<input type="text" class="form-control">
								</div>

								<div class="form-group">
									<div class="row date-row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Start Date <small>Optional</small></label>
												<div class="input-group date">
													<input type="text" class="form-control">
													<span class="input-group-btn">
															<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
														</span>
												</div>
												<!-- /input-group -->
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Completion Date <small>Optional</small></label>
												<div class="input-group date">
													<input type="text" class="form-control">
													<span class="input-group-btn">
														<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
													</span>
												</div>
												<!-- /input-group -->
											</div>
										</div>
									</div>

								</div>


								<label class="control-label">Completion Time</label>


								<div class="row">
									<div class="col-sm-6">
										<div class="input-group">
											<select class="form-control ">
                                                                                <option>0</option>
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option>4</option>
                                                                                <option>5</option>
                                                                                <option>6</option>
                                                                                <option>7</option>
                                                                                <option>8</option>
                                                                                <option>9</option>
                                                                                <option>10</option>
                                                                                <option>11</option>
                                                                                <option>12</option>
                                                                                <option>13</option>
                                                                                <option>14</option>
                                                                                <option>15</option>
                                                                                <option>16</option>
                                                                                <option>17</option>
                                                                                <option>18</option>
                                                                                <option>19</option>
                                                                                <option>20</option>
                                                                                <option>21</option>
                                                                                <option>22</option>
                                                                                <option>23</option>
                                                                                <option>24</option>
                                                                                <option>25</option>
                                                                                <option>26</option>
                                                                                <option>27</option>
                                                                                <option>28</option>
                                                                                <option>29</option>
                                                                                <option>30</option>
                                                                            </select>
											<span class="input-group-addon " style="background: none;border:none">Hours</span>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="input-group">
											<select class="form-control ">
                                                                                <option>00</option>
                                                                                <option>01</option>
                                                                                <option>02</option>
                                                                                <option>03</option>
                                                                                <option>04</option>
                                                                                <option>05</option>
                                                                                <option>06</option>
                                                                                <option>07</option>
                                                                                <option>08</option>
                                                                                <option>09</option>
                                                                                <option>10</option>
                                                                                <option>11</option>
                                                                                <option>12</option>
                                                                                <option>13</option>
                                                                                <option>14</option>
                                                                                <option>15</option>
                                                                                <option>16</option>
                                                                                <option>17</option>
                                                                                <option>18</option>
                                                                                <option>19</option>
                                                                                <option>20</option>
                                                                                <option>21</option>
                                                                                <option>22</option>
                                                                                <option>23</option>
                                                                                <option>24</option>
                                                                                <option>25</option>
                                                                                <option>26</option>
                                                                                <option>27</option>
                                                                                <option>28</option>
                                                                                <option>29</option>
                                                                                <option>30</option>
                                                                                <option>31</option>
                                                                                <option>32</option>
                                                                                <option>33</option>
                                                                                <option>34</option>
                                                                                <option>35</option>
                                                                                <option>36</option>
                                                                                <option>37</option>
                                                                                <option>38</option>
                                                                                <option>39</option>
                                                                                <option>40</option>
                                                                                <option>41</option>
                                                                                <option>42</option>
                                                                                <option>43</option>
                                                                                <option>44</option>
                                                                                <option>45</option>
                                                                                <option>46</option>
                                                                                <option>47</option>
                                                                                <option>48</option>
                                                                                <option>49</option>
                                                                                <option>50</option>
                                                                                <option>51</option>
                                                                                <option>52</option>
                                                                                <option>53</option>
                                                                                <option>54</option>
                                                                                <option>55</option>
                                                                                <option>56</option>
                                                                                <option>57</option>
                                                                                <option>58</option>
                                                                                <option>59</option>
                                                                            </select>
											<span class="input-group-addon" style="background: none;border:none">Minutes</span>
										</div>
									</div>
								</div>

								<hr>
										
								<h4>CE Earned <span id="ce-time-decimal"></span>  </h4>
								<div class="form-group">
									<label class="radio-inline"><input type="radio" id="ce-awarded-checkbox" name="ce-awarded"> Yes </label>
									<label class="radio-inline"><input type="radio" id="" name="ce-awarded"> No </label>
								</div>
								<div class="ce-awarded-yes" style="background-color: #f3f3f3; border-radius: 5px; padding:5px; margin-bottom:5px;">

										
				
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label" for="">CE Hours</label>

												<select class="form-control js-ce-time-select js-hours">
														<?php for ($i=0;$i<=30;$i++) { ?>
														<option><?= $i ?></option>
														<?php } ?>
													</select>


											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label" for="">CE Minutes</label>


												<select class="form-control js-ce-time-select js-minutes">
														<?php for ($i=0;$i<=59;$i++) { ?>
														<option><?= str_pad($i, 2, '0', STR_PAD_LEFT); ?></option>
														<?php } ?>
													</select>


											</div>
										</div>
									</div>
									

									<div class="form-group">
										<label class="control-label" for="">Accrediting Body</label>
										<select class="form-control">
											<option>...</option>
											<option>...</option>
											<option>...</option>
										
											<option value="other">Other</option>
										</select>

									</div>
									<div class="form-group  other-text">
										<label class="control-label" for="">Other Accrediting Body</label>
										<input type="text" class="form-control">
									</div>

									<div class="form-group">
										<label class="control-label" for="">Provider</label>
										<input type="text" id="" class="form-control">
									</div>
								</div>
								<hr>
								<div class="form-group">
									<label class="control-label" for="">Organization Name <small>optional</small></label>
									<input type="text" id="" class="form-control">
								</div>

								<div class="collapse-group collapse">

									<div class="form-group">
										<label class="control-label" for="">City <small>Optional</small></label>
										<input type="text" id="" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label" for="">Country </label>
										<select class="form-control">
											<option>United States</option>
											<option>...</option>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label" for="">State/Province <small>Optional</small></label>
										<select class="form-control">
											<option>Tennessee</option>
											<option>...</option>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label" for="">Additional Information <small>Optional</small></label>
										<textarea id="" class="form-control" style="height:100px;"></textarea>
										<span class="help-block">
											<small>Your comments will appear on your transcript and can be seen by system administrators.</small>
										</span>
									</div>

								</div>

								<a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional options|Hide additional options">Show additional options<i class="fa-fw fa-caret-down fa"></i></a>
								<section class="section">
									<div class="form-group">
										<label class="control-label">Documents <small>Optional</small></label>
										<ul class="control-attachments">
											<li>No attached documents</li>
										</ul>
										<div class="control-add-new">
											<a href="#modal-select-documents" data-toggle="modal" data-dismiss="modal">Attach Documents</a>
											<span>|</span>
											<a href="#modal-document-add" data-toggle="modal" data-dismiss="modal">New Document</a>
										</div>
									</div>
								</section>
							</div>

							<div class="modal-footer">
								<button class="btn btn-success" data-dismiss="modal">Save</button>
								<button class="btn btn-default" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</div>
				</div>

				<!-- /modal -->

				<!-- Modal -->
				<div id="modal-learningevent-edit" class="modal modal-transcript fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
								<h4 id="modal-learningevent-label" class="modal-title">Add a Learning Event</h4>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label class="control-label" for="">Acitivity Name</label>
									<input type="text" id="" class="form-control">
								</div>
								<div class="form-group">
									<label class="control-label">Activity Type</label>
									<select class="form-control">
										<option>Conference</option>
										<option>Journal Article</option>									
										<option>Live Event</option>
										<option>Online Course</option>	
										<option>Seminar</option>	
										<option value="other">Other</option>	
									</select>
								</div>

								<div class="form-group other-text">
									<label class="control-label" for="">Other Activity Type</label>
									<input type="text" class="form-control">
								</div>

								<div class="form-group">
									<div class="row date-row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Start Date <small>Optional</small></label>
												<div class="row">
													<div class="col-xs-6">
														<select class="form-control">
<option disabled="" selected="">MM</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
</select>
													</div>
													<div class="col-xs-6">
														<select class="form-control">
																	<option disabled="" selected="">YYYY</option>
																	<option>1970</option>
																	<option>1971</option>
																	<option>1972</option>
																	<option>1973</option>
																	<option>1984</option>
																	<option>...</option>
</select>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Completion Date <small>Optional</small></label>
												<div class="row">
													<div class="col-xs-6">
														<select class="form-control">
<option disabled="" selected="">MM</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
</select>
													</div>
													<div class="col-xs-6">
														<select class="form-control">
<option disabled="" selected="">YYYY</option>
<option>1970</option>
<option>1971</option>
<option>1972</option>
<option>1973</option>
<option >1989</option>
<option>...</option>
</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label" for="">Estimated Completion Time</label>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<div class="input-group">
													<select class="form-control">
<?php for ($i=0;$i<=30;$i++) { ?>
<option><?= $i ?></option>
<?php } ?>
</select>
													<span class="input-group-addon" style="background: none;border:none">Hours</span>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="input-group">
													<select class="form-control">
<?php for ($i=0;$i<=59;$i++) { ?>
<option><?= str_pad($i, 2, '0', STR_PAD_LEFT); ?></option>
<?php } ?>
</select>
													<span class="input-group-addon" style="background: none;border:none">Minutes</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="checkbox"><input type="checkbox" id="ce-awarded-checkbox"> CE Awarded</label>
								</div>
								<div class="ce-awarded-yes" style="background-color: #f3f3f3; border-radius: 5px; padding:5px; margin-bottom:5px;">
									<div class="form-group">
										<label class="control-label" for="">CE Approver</label>
										<select class="form-control">
<option>National Area Health Education Center Organization </option>
<option>Nationally Approved Provider</option>
<option>Professional Association</option>
<option>State Board Approved Provider</option>
<option>State Board of Nursing</option>
<option>Other</option>
</select>

									</div>
									<div class="form-group">
										<label class="control-label" for="">Credit Hours</label>
										<input type="text" id="" class="form-control">
									</div>

									<div class="form-group">
										<label class="control-label" for="">Provider Name</label>
										<input type="text" id="" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label" for="">Organization Name <small>optional</small></label>
									<input type="text" id="" class="form-control">
								</div>




								<div class="collapse-group collapse" style="height: 0px;">


									<div class="form-group">
										<label class="control-label" for="">City <small>Optional</small></label>
										<input type="text" id="" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label" for="">Country </label>
										<select class="form-control">
<option>United States</option>
<option>...</option>
</select>
									</div>
									<div class="form-group">
										<label class="control-label" for="">State/Province <small>Optional</small></label>
										<select class="form-control">
<option>Tennessee</option>
<option>...</option>
</select>
									</div>
									<div class="form-group">
										<label class="control-label" for="">Additional Information <small>Optional</small></label>
										<textarea id="" class="form-control" style="height:100px;"></textarea>
										<span class="help-block"><small>Your comments will appear on your transcript and can be seen by system administrators.</small></span>
									</div>




								</div>
								<a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional options|Hide additional options">Show additional options<i class="fa-fw fa-caret-down fa"></i></a>
								<section class="section">
									<div class="form-group">
										<label class="control-label">Documents <small>Optional</small></label>
										<ul class="control-attachments">
											<li>No attached documents</li>
										</ul>
										<div class="control-add-new">
											<a href="#modal-select-documents" data-toggle="modal" data-dismiss="modal">Attach Documents</a>
											<span>|</span>
											<a href="#modal-document-add" data-toggle="modal" data-dismiss="modal">New Document</a>
										</div>
									</div>
								</section>
							</div>

							<div class="modal-footer">
								<button class="btn btn-success" data-dismiss="modal">Save</button>
								<button class="btn btn-default" data-dismiss="modal">Cancel</button>
								<button class="btn btn-danger pull-right" data-dismiss="modal">Danger</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /modal -->


				<?= createFooter($patterns['footer']); ?>
					<?= createPrototypeNav(); ?>
						<?= createSiteScripts(); ?>

							<script src="/scripts/healthstream.tours/plugin/bootstrap-tour.js"></script>
							<script src="/scripts/healthstream.tours/localization/localization-eng-tour.js"></script>
							<script src="/scripts/healthstream.tours/tours/completed-tour.js"></script>
							<script>
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

									$('.date-range__control').on('change', function() {
										var $control = $(this);
										var $custom = $control.siblings('.date-range__custom')
										if ($control.val() === 'custom') {
											$custom.addClass('date-range__custom--open');
										} else {
											$custom.removeClass('date-range__custom--open');
										}
									});

									$('#rangeSelect').on('change', function() {
										if ($(this).val() === 'custom') {
											$('#rangeCustom').removeClass('hide');
										} else {
											$('#rangeCustom').addClass('hide');
										}
									});

									$('#printRangeSelect').on('change', function() {
										if ($(this).val() === 'custom') {
											$('#printRangeCustom').removeClass('hide');
										} else {
											$('#printRangeCustom').addClass('hide');
										}
									});

									$('.input-group.date').datepicker({
										todayBtn: "linked",
										autoclose: true,
										orientation: 'top',

									}).css('position', 'relative');

									$("input[name=ce-awarded]:radio").change(function() {


										if ($('#ce-awarded-checkbox').is(':checked')) {
											$(".ce-awarded-yes").slideDown();
										} else {
											$(".ce-awarded-yes").slideUp();
											$(".ce-awarded-yes input").val("");
											 $('.ce-awarded-yes select').val("");
											$("#ce-time-decimal").text("");
										}

									});


									$(".js-ce-time-select").change(function() {
										var $decimalTime = $(".js-minutes").val() / 60;
										var $hours = $(".js-hours").val();

										var finalCount = $decimalTime + parseInt($hours);

										$("#ce-time-decimal").text(finalCount.toFixed(2));
									});

									$("select").change(function() {
										if ($(this).val() == "other") {
											$(this).parent().next(".other-text").show();
										} else {
											$(this).parent().next(".other-text").hide();

										}
									});

								});
							</script>
							<?= createSiteEnd(); ?>
							<?= createSiteEnd(); ?>