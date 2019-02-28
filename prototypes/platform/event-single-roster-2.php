<?php
include "includes/helpers.php";

$patterns['start']['title'] = 'Leadership Training';
$patterns['header']['mainNavActive'] = 'scheduling';
$patterns['focus']['title'] = 'Leadership Training';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Type:',
        'value' => 'NRP',
    ),
    array(
        'label' => 'STARTS: ',
        'value' => 'Sat Dec 12, 2015 at 10:00am',
    ),
    array(
        'label' => 'ENDS: ',
        'value' => 'Sat Dec 12, 2015 at 11:00am',
    ),
    array(
        'label' => 'Time Zone:',
        'value' => 'ET',
    ),
);

$ic_actions_html = '
<td class="actions hidden-sm hidden-xs">
<div class="">
<div class="btn-group">
<a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-caret-down"></i>
</a>
<ul class="dropdown-menu dropdown-menu-right">
<li><a href="#">Approve</a></li>
<li><a href="#">Deny</a></li>
<li><a href="#">Reset</a></li>
<li><a href="#modal-message-single" data-toggle="modal">Send Message</a></li>

</ul>
</div>
</div>
</td>';

$provider_actions_html = '
<td class="actions hidden-sm hidden-xs">
<div class="">
<div class="btn-group">
<a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-caret-down"></i>
</a>
<ul class="dropdown-menu dropdown-menu-right">
<li><a href="#">Drop</a></li>
<li><a href="#modal-message-single" data-toggle="modal">Send Message</a></li>
</ul>
</div>
</div>
</td>';

$ic_actions_html2 = '
<td class="actions hidden-sm hidden-xs">
<div class="">
<div class="btn-group">
<a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-caret-down"></i>
</a>
<ul class="dropdown-menu dropdown-menu-right">
<li><a href="#">Approve</a></li>
<li><a href="#">Deny</a></li>
<li><a href="#">Reset</a></li>
<li><a href="#" class="no-email">Send Message</a></li>

</ul>
</div>
</div>
</td>';

$ic_mobile_actions_html = '
<div class="btn-group actions-dropdown mobile-actions no-select visible-sm visible-xs pull-right">
<a href="#" class="btn no-select btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-fw no-select fa-caret-down"></i>
</a>
<ul class="dropdown-menu no-select dropdown-menu-right">
<li class="visible-xs visible-sm no-select expand-mobile-row"><a href="#" class="no-select">View More Info</a></li>
<li><a href="#">Approve</a></li>
<li><a href="#">Deny</a></li>
<li><a href="#">Reset</a></li>
<li><a href="#modal-message-single" data-toggle="modal">Send Message</a></li>
</ul>
</div>';

$ic_mobile_actions_html2 = '
<div class="btn-group actions-dropdown mobile-actions no-select visible-sm visible-xs pull-right">
<a href="#" class="btn no-select btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-fw no-select fa-caret-down"></i>
</a>
<ul class="dropdown-menu no-select dropdown-menu-right">
<li class="visible-xs visible-sm no-select expand-mobile-row"><a href="#" class="no-select">View More Info</a></li>
<li><a href="#">Approve</a></li>
<li><a href="#">Deny</a></li>
<li><a href="#">Reset</a></li>
<li><a href="#" class="no-email">Send Message</a></li>
</ul>
</div>';

$mobile_actions_html = '
<div class="btn-group actions-dropdown mobile-actions no-select visible-sm visible-xs pull-right">
<a href="#" class="btn no-select btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-fw no-select fa-caret-down"></i>
</a>
<ul class="dropdown-menu no-select dropdown-menu-right">
<li class="visible-xs visible-sm no-select expand-mobile-row"><a href="#" class="no-select">View More Info</a></li>
<li><a href="#">Drop</a></li>
<li><a href="#modal-message-single" data-toggle="modal">Send Message</a></li>
</ul>
</div>';
$wl_actions_html = '
<td class="actions hidden-sm hidden-xs">
<div class="">
<div class="btn-group">
<a href="#" class="btn btn-default btn-sm dropdown-toggle js-actions-button" data-toggle="dropdown">
<i class="fa fa-caret-down"></i>
</a>
<ul class="dropdown-menu dropdown-menu-right">
<li class="remove-student-button"><a href="#" class="js-remove-student">Remove</a></li>
<li class="undo-remove-student"><a href="#" class="js-undo-remove-student">Undo</a></li>
<li><a href="#modal-message-single" data-toggle="modal">Send Message</a></li>
</ul>
</div>
</div>
</td>';

$wl_mobile_actions_html = '
<div class="btn-group actions-dropdown mobile-actions no-select visible-sm visible-xs pull-right">
<a href="#" class="btn no-select btn-default btn-sm dropdown-toggle js-actions-button" data-toggle="dropdown" >
<i class="fa fa-fw no-select fa-caret-down"></i>
</a>
<ul class="dropdown-menu no-select dropdown-menu-right">
<li class="visible-xs visible-sm no-select expand-mobile-row"><a href="#" class="no-select">View More Info</a></li>
<li class="remove-student-button"><a href="#" class="js-remove-student">Remove</a></li>
<li class="undo-remove-student"><a href="#" class="js-undo-remove-student">Undo</a></li>
<li><a href="#modal-message-single" data-toggle="modal">Send Message</a></li>
</ul>
</div>';

?>
<?=createSiteStart($patterns['start']);?>
<?=createHeader($patterns['header']);?>
<?=createFocus($patterns['focus']);?>
<style>
	.reorder {
		cursor: crosshair;
	}

	.roster-seat-table {
		margin-bottom: 70px;
	}
	
	.select2-result-label > div{
		padding: 5px;
		border-bottom: 1px;
	}
	.select2-result-label .name {
		font-size:15px;
		font-weight:600;
	}
	.select2-result-label .name div{
		font-size:14px;
		font-weight:normal;
	}
	
	.select2-result{
		border-left: 3px solid #ccc;
		margin-bottom: 5px;
		background-color: #f9f9f9;
			    transition: all .2s ease;
	}
	
	.select2-result-label> div{
		width:46%;
		display: inline-block;
		vertical-align: top;
	}

	.select2-results .select2-highlighted {
		background: #eee;
		color: #333;
		    -webkit-box-shadow: 0 0 3px rgba(0,0,0,.2);
    box-shadow: 0 0 3px rgba(0,0,0,.2);
		
	
	}
	
	.secondary-info{
		font-size: 12px;
	}
	.secondary-info div{
		margin-bottom:5px;
	}
</style>

<div class="layout layout-subnav layout-min">
	<div class="container">
		<section class="section section-main section-box">
			<div class="layout-subnav-container">
				<div class="layout-subnav-nav">
					<div class="layout-subnav-nav-mobile">
						<span><i class="fa fa-caret-down"></i>
							<span>Roster</span>
						</span>
						<a href="#" class="toggle"><i class="fa fa-bars"></i></a>
					</div>
					<ul>
						<li>
							<a href="/event-single-settings.php">Settings<i class="fa fa-chevron-right"></i></a>
						</li>
						<li>
							<a href="/event-single-permissions.php">Permisssions<i class="fa fa-chevron-right"></i></a>
						</li>
						<li>
							<a href="/event-single-resources.php">Resources &amp;&nbsp; Personnel<i class="fa fa-chevron-right"></i></a>
						</li>
						<li class="active">
							<a href="/event-single-roster.php">Roster<i class="fa fa-chevron-right"></i></a>
						</li>
						<li>
							<a href="/event-single-grading.php">Grading<i class="fa fa-chevron-right"></i></a>
						</li>
						<li>
							<a href="/event-single-message.php">Send Message<i class="fa fa-chevron-right"></i></a>
						</li>
						<li>
							<a href="/event-single-content.php">Content<i class="fa fa-chevron-right"></i></a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="/event-series-settings.php">Add Series</a>
						</li>
						<li>
							<a href="/event-single-settings-conflicted.php">Clone Event</a>
						</li>
					</ul>
				</div>
				<!-- /subnav -->
				<div class="layout-subnav-content table-no-select">
					<section class="section">
						<div class="roster-header">
							<div class="page-header">
								<div class="row">
									<div class="col-md-6">
										<h2>Roster</h2>
										<div class="btn-group" role="group" aria-label="...">
											<button type="button" class="btn btn-default" data-toggle="modal" href="#modal-add-attendee"><i class="fa fa-user" style="color:#555;"></i> Add Attendee</button>
											<a href="/student-search-mvp.php" class="btn btn-default"><i class="fa fa-group" style="color:#555;"></i> Add Group</a>
											<button class="btn btn-default js-print-btn"><i class="fa fa-print" style="color:#555;"></i> Print</button>

										</div>
									</div>
									<div class="col-md-6 text-right">
										<button class="btn btn-default js-print-btn">Print</button>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<h3 id="instructorCandidateHeader">Instructor Candidates <small></small></h3>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="roster-quick-search">
										<select class="form-control slat-basic" id="slat-basic" data-placeholder="Quick Search" multiple="multiple">
											<option></option>
											<option data-dept="003 - Cardiology" data-userid="user3" data-action="disabled fa-2x" data-icon="fa-ban" data-reason="Not Registered">Joe Demo Cool
											</option>
											<option data-dept="Facility" data-userid="user2" data-action="success" data-icon="fa-check" data-reason="" data-icon="">Shmoe Demo Cool
											</option>
											<option data-dept="Facility" data-icon="fa-ban" data-userid="user2" data-action="disabled fa-2x" data-reason="Not Registered">

												Demo Cool
											</option>
										</select>
										<i class="fa fa-search fa-lg icon-quick-search"></i>
									</div>
									<a class="pull-right" href="/student-search-mvp.php">Student Search</a>

								</div>
							</div>
						</div>
						<div class="no-more-tables roster-seat-table">
							<table id="instructorCandidateTable" width="100%" class="table table-no-select display table-hover dataTable no-footer">
								<thead>
									<tr>
										<th>Name</th>
										<th>User ID</th>
										<th>Department</th>
										<th>Institution</th>
										<th>Registration Date</th>
										<th>Registered By</th>
										<th>Status</th>
										<th class="unsortable hidden-xs actions">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>admin4, test
											<?=$ic_mobile_actions_html2?>
										</td>
										<td>testadmin4</td>
										<td>003 - Cardiology</td>
										<td>ACME Medical Care</td>
										<td>9/2/2015</td>
										<td>Gertrude Peckinpah</td>
										<td>Registered</td>
										<?=$ic_actions_html2?>
									</tr>
									<tr>
										<td>Analyzer, Alan
											<?=$ic_mobile_actions_html?>
										</td>
										<td>testadmin5</td>
										<td>002 - Nursing</td>
										<td>Jupiter Healthcare</td>
										<td>9/19/2015</td>
										<td>Marilyn Monroe</td>
										<td>Registered</td>
										<?=$ic_actions_html?>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="row">
							<div class="col-md-6">
								<h3 id="studentHeader">Students <small></small></h3>
								<div class="roster-legend ">
									<div class="row">
										<div class="col-sm-4">
											<span class="roster-legend-pair">
												<span class="badge success"> 15 </span> Registered
											</span>
										</div>
										<div class="col-sm-4">
											<span class="roster-legend-pair" id="seats-available">
												<span class="badge"> 0 </span>
												<label>Seats Available</label>
											</span>
										</div>
										<div class="col-sm-4">
											<span class="roster-legend-pair">
												<span class="badge warning"> 3 </span>
												<label> Waitlisted </label>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="roster-quick-search">
										<select class="form-control slat-basic" id="slat-basic" data-placeholder="Quick Search" multiple="multiple">
											<option></option>
											<option data-dept="003 - Cardiology" data-userid="user3" data-action="disabled fa-2x" data-icon="fa-ban" data-reason="Not Registered">Joe Demo Cool
											</option>
											<option data-dept="Facility" data-userid="user2" data-action="success" data-icon="fa-check" data-reason="">Shmoe Demo Cool
											</option>
											<option data-dept="Facility" data-icon="fa-ban" data-userid="user2" data-action="disabled fa-2x" data-reason="Not Registered">Shmoe Demo Cool
											</option>
										</select>
										<i class="fa fa-search fa-lg icon-quick-search"></i>
									</div>
									<a class="pull-right" href="/student-search-mvp.php">Student Search</a>
								</div>
							</div>
						</div>

						<div class="no-more-tables roster-seat-table">
							<table id="studentTable" width="100%" class="table table-no-select display table-hover dataTable no-footer">
								<thead>
									<tr>
										<th>Name</th>
										<th>User ID</th>
										<th>Department</th>
										<th>Institution</th>
										<th>Registration Date</th>
										<th>Registered By</th>
										<th>Status</th>
										<th class="unsortable hidden-xs actions">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>admin4, test
											<?=$mobile_actions_html?>
										</td>
										<td>testadmin4</td>
										<td>08-Obstetrics</td>
										<td>Dummy Institution</td>
										<td>8/27/2016</td>
										<td>Susie Q</td>
										<td>Registered</td>
										<?=$provider_actions_html?>
									</tr>
									<tr>
										<td>Analyzer, Alan
											<?=$mobile_actions_html?>
										</td>
										<td>testadmin4</td>
										<td>Dermatology</td>
										<td>Jupiter Healthcare</td>
										<td>5/27/2016</td>
										<td>Rob Thomas</td>
										<td>Registered</td>
										<?=$provider_actions_html?>
									</tr>
									<tr>
										<td>Analyzer, Alan A
											<?=$mobile_actions_html?>
										</td>
										<td>ba1</td>
										<td>Plastic Surgery</td>
										<td>Jupiter Healthcare</td>
										<td>4/27/2016</td>
										<td>Cam Newton</td>
										<td>Registered</td>
										<?=$provider_actions_html?>
									</tr>
									<tr>
										<td>Austin, Rachael
											<?=$mobile_actions_html?>
										</td>
										<td>RAustin</td>
										<td>Nutrition</td>
										<td>Sacred Heart</td>
										<td>2/27/2016</td>
										<td>Cam Newton</td>
										<td>Registered</td>
										<?=$provider_actions_html?>
									</tr>
									<tr>
										<td>Bailey, Eric
											<?=$mobile_actions_html?>
										</td>
										<td>ebailey</td>
										<td>Orthopedics</td>
										<td>Orthopedic Alliance</td>
										<td>9/4/2015</td>
										<td>Conan O'brien</td>
										<td>Registered</td>
										<?=$provider_actions_html?>
									</tr>
									<tr>
										<td>Bankhead, Wanda
											<?=$mobile_actions_html?>
										</td>
										<td>wbankhead1</td>
										<td>EMT-I</td>
										<td>chi595 - Southwest Adams County Fire Dept</td>
										<td>9/19/2015</td>
										<td>Rebecca Taylor</td>
										<td>Registered</td>
										<?=$provider_actions_html?>
									</tr>
									<tr>
										<td>Banner, Bruce
											<?=$mobile_actions_html?>
										</td>
										<td>preview3</td>
										<td>EMT-I</td>
										<td>chi595 - Southwest Adams County Fire Dept</td>
										<td>9/19/2015</td>
										<td>Rebecca Taylor</td>
										<td>Registered</td>
										<?=$provider_actions_html?>
									</tr>
									<tr>
										<td>Barkley, Chris
											<?=$mobile_actions_html?>
										</td>
										<td>cbarkley</td>
										<td>EMT-I</td>
										<td>chi595 - Southwest Adams County Fire Dept</td>
										<td>9/19/2015</td>
										<td>Rebecca Taylor</td>
										<td>Registered</td>
										<?=$provider_actions_html?>
									</tr>
									<tr>
										<td>Bartol, Rita
											<?=$mobile_actions_html?>
										</td>
										<td>rbartol</td>
										<td>EMT-I</td>
										<td>chi595 - Southwest Adams County Fire Dept</td>
										<td>9/19/2015</td>
										<td>Rebecca Taylor</td>
										<td>Registered</td>
										<?=$provider_actions_html?>
									</tr>
									<tr>
										<td>Barton, Clint
											<?=$mobile_actions_html?>
										</td>
										<td>preview7</td>
										<td>EMT-I</td>
										<td>chi595 - Southwest Adams County Fire Dept</td>
										<td>9/19/2015</td>
										<td>Rebecca Taylor</td>
										<td>Registered</td>
										<?=$provider_actions_html?>
									</tr>
									<tr>
										<td>Bickel, Steve
											<?=$mobile_actions_html?>
										</td>
										<td>sbickel</td>
										<td>EMT-I</td>
										<td>chi595 - Southwest Adams County Fire Dept</td>
										<td>9/19/2015</td>
										<td>Rebecca Taylor</td>
										<td>Registered</td>
										<?=$provider_actions_html?>
									</tr>
									<tr>
										<td>Bluthardt, Shelby
											<?=$mobile_actions_html?>
										</td>
										<td>Registered</td>
										<td>EMT-I</td>
										<td>chi595 - Southwest Adams County Fire Dept</td>
										<td>9/19/2015</td>
										<td>Rebecca Taylor</td>
										<td>Registered</td>
										<?=$provider_actions_html?>
									</tr>
								</tbody>
							</table>
						</div>



					</section>
					<?php
$stickybar = array(
    'sets' => array(
        array(
            'html' => '
<a href="#" class="btn btn-success">Save</a>
<a href="#" class="btn btn-default">Cancel</a>
',
        ),
    ),
);
echo createStickybar($stickybar);
?>
					<div class="form-modified">Last Modified: Mar 3, 2016 at 6:23 AM ET by demo1</div>

				</div>





			</div>
			<!-- /content -->

		</section>
	</div>

	<div id="modal-add-attendee" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
					<h4 class="modal-title">Add Attendee</h4>
				</div>
				<div class="modal-body">
					<section class="section section-refinement-options">
						<section class="section ">
							<h3>Search for an Attendee</h3>


							<label>Search by Name, Username, or Email:</label>
							<select class="form-control slat-basic" id="slat-basic" data-placeholder="ex. John Doe or jdoe@gmail.com" multiple="multiple" data-tags="true">
								<option></option>
								<option data-dept="Departmento" data-icon="fa-ban" data-userid="user2" data-action="disabled fa-2x" data-reason="Not Registered" data-email="alexander.richardson@uwf.edu" data-city="Pittsburgh, PA">Alexander D. Richardson
								</option>

								<option data-dept="HealthSouth - Rehabilitation Hospital of Miami" data-icon="fa-ban" data-userid="user2" data-action=" fa-2x" data-email="daddyshark@gmail.com" data-city="Pittsburgh, PA">John D. Doe
								</option>

								<option data-dept="Department 3" data-icon="fa-ban" data-userid="user2" data-action="disabled fa-2x" data-reason="Not Registered" data-city="Nashville, TN" data-email="jdoe@gmail.com">John Doe
								</option>

								<option data-dept="001 Department B" data-icon="fa-ban" data-userid="user2" data-action="disabled fa-2x" data-reason="Not Registered" data-email="electricsunshineman@yahoo.com" data-city="Madison, WI">Gary D. Young
								</option>
							</select>
						</section>
						<section class="selected-person"></section>
					</section>
				</div>
				<div class="modal-footer">
					<button class="btn btn-success" data-dismiss="modal">Add Person to Roster</button>
					<button class="btn btn-default" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal -->
</div>

<!-- /layout -->

<?php
include MODAL_MESSAGE_GROUP;
include MODAL_MESSAGE_SINGLE;
?>
<?=createFooter($patterns['footer']);?>
<?=createPrototypeNav();?>
<?=createSiteScripts();?>
<?=createDatatableScripts();?>

<script type="text/javascript" src="/scripts/prototype.datatables.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
	(function(window, $) {
		'use strict';
		window.HealthStream = window.HealthStream || {};
		var healthStream = window.HealthStream;
		healthStream.studentSearchResults = {};
		healthStream.studentSearchResults.resultsDataTable = function() {
			var icTable = $('#instructorCandidateTable').DataTable({
				"paging": true,
				"order": [
					[4, "asc"]
				],
				"select": false,
				"dom": 't<"bottom"ri>',
				"columnDefs": [{
					"visible": false,
					"targets": "hideOnLoad",
				}, {
					"orderable": false,
					"targets": "unsortable"
				}],
				language: {
					search: "_INPUT_",
					searchPlaceholder: "Search"
				}
			});
			var pTable = $('#studentTable').DataTable({
				"paging": true,
				"order": [
					[4, "asc"]
				],
				"dom": 't<"bottom"rlip>',
				"columnDefs": [{
					"visible": false,
					"targets": "hideOnLoad",
				}, {
					"orderable": false,
					"targets": "unsortable"
				}],
				language: {
					search: "_INPUT_",
					searchPlaceholder: "Search"
				}
			});
			var wTable = $('#waitlistTable').DataTable({
				"paging": true,
				"order": [
					[0, "asc"]
				],
				"dom": 't<"bottom"ri>',
				"columnDefs": [{
					"visible": false,
					"targets": "hideOnLoad",
				}, {
					"orderable": false,
					"targets": "unsortable"
				}],
				language: {
					search: "_INPUT_",
					searchPlaceholder: "Search"
				}
			});
			expandMobileRow();
			generateDynamicDataTitles();
			customizeColumns(icTable);
			customizeColumns(pTable);

			keepDropDownMenuOpen();
			updateTableHeaderCounts();
			//place default info into Results header
			function updateTableHeaderCounts() {
				$(".dataTables_info").hide();
				$('#studentHeader small').html($("#studentTable_info").html());
				$('#instructorCandidateHeader small').html($("#instructorCandidateTable_info").html());
			}
			//reinitialize jquery when table is redrawn (pagination)
			$(".dataTable").on('draw.dt', function() {
				expandMobileRow();
				generateDynamicDataTitles();
				updateTableHeaderCounts();
			});

			$(".js-remove-student").click(function() {
				$(this).parents("tr").addClass("delete-row");
				$(this).parents("tr").find(".dropdown-menu li:not(.undo-remove-student)").addClass("disabled");
			});

			$(".js-undo-remove-student").click(function() {
				$(this).parents("tr").removeClass("delete-row");
				$(this).parents("tr").find("a:not(.undo-button)").removeClass("disabled");
				$(this).parents("tr").find("input").prop("disabled", false);
				$(this).parents("tr").find("a:not(.js-actions-button)").removeClass("disabled");
				$(this).parents("tr").find(".dropdown-menu li:not(.undo-delete)").removeClass("disabled");
			});

			//update table row count on tab click
			// $('a[href="#tab-waitlisted-students"]').on('shown.bs.tab', function (e) {
			//     $('#studentHeader small').html($("#waitlistTable_info").html());
			// });
			// $('a[href="#tab-registered-students"]').on('shown.bs.tab', function (e) {
			//     $('#studentHeader small').html($("#studentTable_info").html());
			// });
			$(".js-print-btn").click(function() {
				window.print();
			});


			healthStream.select2 = function() {
				function formatBasic(option) {
					var userid = $(option.element).data('userid'),
						dept = $(option.element).data('dept'),
						action = $(option.element).data('action'),
						disabledReason = $(option.element).data('reason'),
						actionIcon = $(option.element).data('icon'),
						email = $(option.element).data('email'),
						city = $(option.element).data('city');


					if (!option.id) return option.text; // optgroup

					return '<div><div class="name">' + option.text + ' <div>' + city + '</div> </div> </div><div class="secondary-info"><div>' + email + '</div><div>Dept: ' + dept + '</div></div>';

				}

				$('.slat-basic').select2({
					minimumInputLength: 1,
					formatResult: formatBasic,
					escapeMarkup: function(m) {
						return m;
					},
					dropdownCssClass: 'select2-people',
					templateSelection: formatBasic,
				

				});


				$("select").change(function() {

					$(this).find(':selected').clone().appendTo(".selected-person");
					alert("hello");

				});



				$(".select2-input").keyup(function() {
					if ($(this).val() !== "") {
						$(this).parents(".roster-quick-search").find(".icon-quick-search").hide();
					} else {
						$(this).parents(".roster-quick-search").find(".icon-quick-search").show();
					}
				});



				$('#sendMessage').formValidation({
					framework: 'bootstrap',
					fields: {
						subject: {
							validators: {
								notEmpty: {
									message: 'This field is required'
								},
							}
						},
						message: {
							validators: {
								notEmpty: {
									message: 'This field is required'
								},
							}
						},
					}
				});
				$('#sendMessageGroup').formValidation({
					framework: 'bootstrap',
					fields: {
						subject_group: {
							validators: {
								notEmpty: {
									message: 'This field is required'
								},
							}
						},
						message_group: {
							validators: {
								notEmpty: {
									message: 'This field is required'
								},
							}
						},
					}
				});

				//when no seats are availabel, badge turns red
				if ($("#seats-available span").html() > 0) {
					var $badge = $("#seats-available span");

					$badge.removeClass("danger");
				} else {
					var $badge = $("#seats-available span");

					$badge.addClass("danger");
				}

				//Hide search icon when user is typing in search input
				$(document).on('blur', '.select2-input', function() {
					if ($(this).val() !== "") {
						$(this).parents(".roster-quick-search").find(".icon-quick-search").hide();
					} else {
						$(this).parents(".roster-quick-search").find(".icon-quick-search").show();
					}
				});

				$('.no-email').click(function() {
					HealthStream.utilities.interrupt({
						type: 'failure',
						title: 'Cannot Send Message',
						text: 'You cannot send a message to this individual because their email address cannot be found.',
						actions: [{
							label: 'Continue'
						}]
					});
				});
			};
		};
		$(window).on('load', function() {
			healthStream.studentSearchResults.resultsDataTable();
			healthStream.select2();
		});
	}(window, jQuery));
</script>

<?=createSiteEnd();?>