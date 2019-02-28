<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'My Events';
$patterns['focus']['title'] = 'My Events';
$patterns['header']['mainNavActive'] = 'myevents';
$patterns['focus']['type'] = 'search';
$patterns['focus']['search'] = array(
    'placeholder' => 'Search',
    'url' => '#',
);
$patterns['search']['filters'] = array(
                array (
                    'visible' => 'mobile',
                    'header' => 'Sort',
                    'controls' => array(
                        '<select class="form-control js-select2"><option>Name</option><option>ID</option><option>Department</option></select>'
                    )
                ),
                array(
                    "state" => 'static', // static / open / closed
                    "header" => 'Date Range',
                    "controls" => array(
                       '<div class="form-group">
                                <label class="control-label">Start</label>
                                <div class="input-group bootstrap-datepicker">
                                    <input type="text" class="form-control datepicker" id="event-start-date" value="" tabindex="1">
                                    <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                </div>
                            </div>',
                            '<div class="form-group">
                                <label class="control-label">End</label>
                                <div class="input-group bootstrap-datepicker">
                                    <input type="text" class="form-control datepicker" id="event-end-date" value="" tabindex="1">
                                    <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                </div>
                            </div>',

                    )
                ),
                array(
                    "state" => 'closed',
                    "header" => 'Building/Location Name',
                    "controls" => array(
                       '<div class="form-group"><input type="text" class="form-control" placeholder="Search for Building/Location"></div>'

                    )
                ),
                array(
                    "state" => 'closed',
                    "header" => 'Address',
                    "controls" => array(
                       '<div class="form-group">
                            <label class="control-label">Country</label>
                            <input type="text" class="form-control" placeholder="Country">
                        </div>',
                        '<div class="form-group">
                            <label class="control-label">State</label>
                            <input type="text" class="form-control" placeholder="State">
                        </div>',
                        '<div class="form-group">
                            <label class="control-label">City</label>
                            <input type="text" class="form-control" placeholder="City">
                        </div>',
                        '<div class="form-group">
                            <label class="control-label">Zipcode</label>
                            <input type="text" class="form-control" placeholder="Zipcode">
                        </div>',
                        '<button type="submit" class="btn btn-default btn-sm">Apply</button>
                        '
                    ),
                ),
                array(
                    "state" => 'closed',
                    "header" => 'Equipment',
                    "controls" => array(
                       '<div class="form-group"><input type="text" class="form-control" placeholder="Search for Equipment"></div>'

                    )
                ),
            );
$patterns['search']['tags'] =array(
                array(
                    'value' => 'State',
                    'href' => '#',
                    'class' => '',
                ),
                array(
                    'value' => 'Country',
                    'href' => '#',
                    'class' => ''
                )
            )
?>


<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<?php
$date_now = Date('U');
$date_rounded = $date_now - 15 - ($date_now % 1800) + 1800;
$date_future = $date_rounded + (3600 * 1);


?>

<style>

	.modal-nrp .modal-content,
	.modal-nrp .modal-content .modal-header{
		background-color: #0B6F5F;
		color: white;
		border:none;
		border-radius: 5px;
	}
	.modal-nrp .modal-body{
		padding-bottom: 0; padding-top: 0;
	}
	.modal-nrp .modal-header h1{
		text-shadow: 0 -1px 0 rgba(0,0,0,.2);
		color:white;
	}
	.modal-nrp .nrp-details{
		margin:auto; width:75%; 
	}
	.modal-nrp .modal-footer{
		border-top: 0;
		text-align:center;
	}
	
	.modal-nrp .modal-footer .checkbox{
		display:inline-block; width:auto; font-size:12px
	}
	.modal-nrp p{
		border-left: 1px solid white;
		padding-left:10px;
		margin-left:5px;	
		margin-bottom:20px;
	}
	.sub-header{
		color:white; width:70%; margin: auto; line-height: 1.5;
	}
	
	.modal-nrp h1, .modal-nrp h4{
		color:white;
	}
        @media only print {
            .site-header {
                border-bottom: 1px solid #999;
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
            .section-carousel {
                display: none;
            }
            .tag {
                border: 1px solid #ccc;
            }
            .tag i {
                display: none;
            }
            .section,
            .slat {
                page-break-inside: avoid;
            }
            .slat .title a[href]:after {
                content: "";
            }
            .slat .btn {
                display: none;
            }
            .site-footer .focus-promo,
            .site-footer .links {
                display: none;
            }
            section[data-equalize="layout-columns"] {
                height: auto !important;
                min-height: 0 !important;
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
						<div class="search-filter search-filter--desktop">
							<div class="search-filter__header">
								<div class="search-filter__title">Applied Filters
								</div>
							</div>

							<?= createTags($patterns['search']); ?>
						</div>
						<?= createSearch($patterns['search']); ?>
					</section>

				</div>
				<div class="col-md-9">
					<section class="section section-results" data-equalize="layout-columns">
						<section class="section section-results-header">
							<div class="row">
								<div class="col-md-6">
									<h2>Results <small>Showing 1-10 of 15</small></h2>
									<div class="search-filter search-filter--mobile">
										<div class="search-filter__control">
											<?= createTags($patterns['search']); ?>
										</div>
									</div>
								</div>
								<div class="col-md-6 hidden-xs hidden-sm">
									<div class="section-results-header-sort">
										<div class="dropdown">
											<a class="btn btn-default expand-all" href="#">Expand All</a>
											<a class="btn btn-default collapse-all hidden" href="#">Collapse All</a>
											<a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Name A - Z <i class="fa fa-sort"></i></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li>
													<a href="#">Name Z - A</a>
												</li>
												<li>
													<a href="#">Date Soonest</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</section>

						<section class="section">
							<section class="section">
								<?php

                                        $nested = createSlat(array(
                                            'title' => 'Stephanie Jupiter',
                                            'meta' => array(

                                                array(
                                                    'label' => 'Function:',
                                                    'value' => 'Instructor',
                                                ),
                                                array(
                                                    'label' => 'RANK:',
                                                    'value' => 'Mentor',
                                                )

                                            ),
                                            'attributes' => array(
                                                array('class', array('slat')),
                                            ),
                                        ));
                                        $nested2 = createSlat(array(
                                            'title' => 'Laerdal Medical, Classroom A',
                                            'meta' => array(

                                                array(
                                                    'label' => 'ADDRESS:',
                                                    'value' => ' 123 Main St Birmingham, AL United States 12345',
                                                ),
                                            ),
                                            'attributes' => array(
                                                array('class', array('slat')),
                                            ),
                                        ));
                                        $nested3 = createSlat(array(
                                            'title' => 'New Simulation Center, Classroom A',
                                            'meta' => array(

                                                array(
                                                    'label' => 'ADDRESS:',
                                                    'value' => '456 Main St Nashville, TN United States 67890',
                                                ),
                                            'attributes' => array(
                                                array('class', array('slat')),
                                            ),
                                            ),
                                        ));

                                        $section_start ='<section class="section">';
                                        $header1 = '<h4>Personnel</h4>';
                                        $header2 = '<h4>Location(s)</h4>';
                                        $section_end ='</section>';

                                        $slat = array(
                                            'title' => '<a class="event-title-link" href="#modal-event" data-toggle="modal">Leadership Training</a>',
                                            'nested' => array(
                                                'hide' => array($section_start,$header1,$nested,$section_end,$section_start,$header2,$nested2, $nested3, $section_end),
                                            ),
                                            'meta' => array(
                                                array(
                                                    'type' => 'Live Event',
                                                ),
                                                array(

                                                    'value' => '<div>Jul 15, 2016 at 3:30pm - </div>
                                                                        <div>Jul 25, 2016 at 3:30pm</div>',
                                                    'attributes' => array(
                                                        array('class','meta-callout'),
                                                    )
                                                )
                                            ),
                                            'action' => array(
                                                'type' => 'custom',
                                                'content' => '<div class="action action-multi">
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-fw fa-caret-down"></i></a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li class=""><a href="/event-single-settings.php">Manage Event</a></li>
                                                            <li class=""><a href="/event-single-roster.php">Manage Roster</a></li>
                                                            <li><a href="#modal-message-group" data-toggle="modal">Send Message</a></li>
                                                            <li class="divider"><a href="#"></a></li><li class=""><a href="/event-series-occurrences.php">Manage Series</a></li>
                                                        </ul>
                                                    </div>
                                                </div>'
                                            ),
                                            'toggle' => array('Show Additional Information','Show Less Information'),

                                        );

                                        echo createSlat($slat);
                                        ?>
								<?php

                                        $slat = array(
                                            'title' => '<a class="event-title-link" href="#modal-event" data-toggle="modal">Leadership Training</a>',
                                            'nested' => array(
                                                'hide' => array($section_start,$header1,$nested,$section_end,$section_start,$header2,$nested2, $nested3, $section_end),
                                            ),
                                            'meta' => array(
                                                array(
                                                    'type' => 'Live Event',
                                                ),
                                                array(

                                                    'value' => '<div>Jul 15, 2016 at 3:30pm',
                                                    'attributes' => array(
                                                        array('class','meta-callout'),
                                                    )
                                                )
                                            ),
                                            'action' => array(
                                                'type' => 'custom',
                                                'content' => '<div class="action action-multi">
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-fw fa-caret-down"></i></a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li class=""><a href="/event-single-settings.php">Manage Event</a></li><li class=""><a href="/event-single-roster.php">Manage Roster</a></li><li class=""><a href="#">Send Message</a></li><li class="divider"><a href="#">Send Message</a></li><li class=""><a href="/event-series-occurrences.php">Manage Series</a></li>
                                                        </ul>
                                                    </div>
                                                </div>'
                                            ),
                                            'toggle' => array('Show Additional Information','Show Less Information'),

                                        );


                                        for($i = 0; $i < 9; $i++){
                                            echo createSlat($slat);
                                        }
                                    ?>
							</section>

							<?php
                                    $stickybar = array(
                                        'sets' => array(
                                            array(
                                                'position' => 'left',
                                                'classes' => array('visible-xs','visible-sm'),
                                                'html' => '<a href="#modal-filter" class="btn btn-success" data-toggle="modal">Refine Results</a>',
                                            ),
                                            array(
                                                'position' => 'right',
                                                'classes' => array('hidden-xs','hidden-sm'),
                                                'html' => '
                                                    <div class="btn-group dropup">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-10 of 15 <i class="fa fa-caret-up"></i></button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="active">
                                                                <a href="#">10 per page</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">50 per page</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Show all</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                        <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                                    </div>
                                                ',
                                            ),
                                            array(
                                                'position' => 'right',
                                                'classes' => array('visible-xs','visible-sm'),
                                                'html' => '
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                        <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                                    </div>
                                                ',
                                            ),
                                        ),
                                    );
                                    echo createStickybar($stickybar);
                                ?>

						</section>
						<!-- /section-main -->
					</section>
				</div>
				<!-- /column -->
			</div>
			<!-- /row -->
		</section>
	</div>
	<!-- /container -->
</div>
<!-- /layout -->
<!-- Sample Event Details Modal -->
<div id="modal-event" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" class="close" data-dismiss="modal"><i class="fa-times fa"></i>
				</button>
				<h4 class="modal-title">Event Details</h4>
			</div>
			<div class="modal-body">
				<section class="section">
					<h3><b>Name:</b> Sample Event</h3>
				</section>
				<section class="section">
					<div class="row">
						<div class="col-sm-12">
							<i class="small">All times displayed in EST</i>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<label>Start:</label>
							<p>05/27/2015 6:30 AM</p>
						</div>
						<div class="col-sm-6">
							<label>End:</label>
							<p>05/27/2015 7:30 AM</p>
						</div>
					</div>
				</section>
				<section class="section">
					<h3>Resources &amp; Personnel</h3>

					<?php

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-simple')),
                                ),
                                'title' => 'A_4Feb15Room_CheckedAdminGroup',
                                'description' => '05/27/2015 6:30 AM - 05/27/2015 7:30 AM',
                                'meta' => array(
                                    array(
                                        'type' => 'Room',
                                    )
                                ),
                                'action' => array()
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-simple')),
                                ),
                                'title' => 'A_4Feb15Equipment_CheckedAdminGroup',
                                'description' => '05/27/2015 6:30 AM - 05/27/2015 7:30 AM',
                                'meta' => array(
                                    array(
                                        'type' => 'Equipment',
                                    )
                                ),
                                'action' => array()
                            );
                            echo createSlat($slat);

                            ?>
				</section>
			</div>
			<div class="modal-footer">
				<a class="btn btn-success" href="/scheduling-edit-schedule.php">Edit Event</a>
				<button class="btn btn-default" data-dismiss="modal">Close</button>
				<a class="btn btn-danger pull-right" href="#">Delete</a>
			</div>
		</div>
	</div>
</div>
<!-- /Sample Event Details   -->
<!-- Refine Modal -->
<!-- Modal -->
<div id="modal-filter" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
				<h4 class="modal-title">Refine Results</h4>
			</div>
			<div class="modal-body"></div>
			<div class="modal-footer">
				<button class="btn btn-default" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div><!-- /modal -->
<!-- / Refine Modal -->


<div id="modal-nrp-one-view" class="modal modal-nrp  fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>


				<h1 class="text-center"><span> <b>One</b></span> View. <span><b>All</b></span> Your Events.

				</h1>
				<h4 class="text-center sub-header">Now, your My Events page will display all events
					linked to your HealthStream ID.</h4>
			</div>
			<div class="modal-body text-center">
				<img src="./content/images/nrp-image.svg" style="width:195px;">
			</div>

			<div class="modal-footer text-center">
				<a href="#modal-nrp-one-view-2" class="btn btn-default" data-dismiss="modal" data-toggle="modal">Tell Me More <i class="fa fa-caret-right"></i></a>

				<div class="form-group">

					<label class="checkbox">
						<input type="checkbox">Don't show this again.

					</label>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="modal-nrp-one-view-2" class="modal modal-nrp  fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>


				<h1 class="text-center"><span> <b>One</b></span> View. <span><b>All</b></span> Your Events.

				</h1>

			</div>
			<div class="modal-body text-center ">
				<div class="text-left nrp-details">
					<h4>Viewing the Details of Your Events is Easier. </h4>
					<p>You can see the details of all your events from any account. <br>
						Please note, editing details will need to be done from the account where that event is hosted, and may require an Admin.</p>

					<h4>Adding an Instructor to an Event? </h4>
					<p>Now you will be able to add an Instructor to any event, even if they don’t have an account at the hosting location.</p>



				</div>

			</div>

			<div class="modal-footer">
				<a href="#" class="btn btn-default" data-dismiss="modal">Continue to My Events <i class="fa fa-caret-right"></i></a>

				<div class="form-group">
					<label class="checkbox">
						<input type="checkbox">Don't show this again.

					</label>

				</div>
			</div>
		</div>
	</div>
</div>


<?php
            include MODAL_MESSAGE_GROUP;
        ?>
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>

<script src="/scripts/date.format.js"></script>
<script src="/scripts/prototype.search-filters.js"></script>

<script>
	(function(window, $) {
		'use strict';
		window.HealthStream = window.HealthStream || {};
		var healthStream = window.HealthStream;

		healthStream.search = {},
			healthStream.peoplepicker = {
				memory: {
					event: [],
					resources: {}
				},
				init: function() {
					var T = this;
					$('.input-group-addon').on('click', function() {
						$(this).siblings('input').trigger('focus');
					});
					// Resource Picker Backdrop
					$('#resource-picker-backdrop').click(function() {
						$('.resource-picker-clear').trigger('click');
					});
					// Resource Modal
					$('#modal-resource')
						.on('click', '.btn-save-resource', function() {
							var id = $(this).attr('data-id'),
								dates = T.getDates($('#resource-start-date'), $('#resource-start-time'), $('#resource-end-date'), $('#resource-end-time'));
							T.setResource(id, dates[0], dates[1]);
						});
					// Listeners
					$('#event-resources')
						.on('resourcesTableUpdated', function() {
							// Update options button
							$('.rth-conflict').each(function() {
								$(this).closest('.rth-item').addClass('rth-item-conflict');
								$(this).closest('.rth-nested-item').addClass('rth-item-conflict');
							});
						});
					$('#event-resources')
						.on('resourcesTableUpdated', function() {
							var $el = $('.resource-picker-overlay.active'),
								$rp = $el.closest('.resource-picker');
							if ($el.length > 0) {
								T.getResources($rp.find('.resource-picker-input'), $rp);
							}
						});
					//this.setEventDates();
				},
				getDateTime: function(timestamp) {
					var offset = new Date().getTimezoneOffset(),
						adjusted = timestamp * 1 + (60 * offset),
						date = new Date(adjusted * 1000),
						d = date.format('m/d/Y'),
						t = date.format('h:i A');
					return [d, t];
				},
				getResources: function($el, $rp) {
					var m = this.memory.resources,
						selected = [];
					for (var id in m) {
						if (m.hasOwnProperty(id)) {
							selected.push(id);
						}
					}
					$.getJSON('/server.php', {
						action: 'search',
						type: $el.attr('data-type'),
						q: $el.val(),
						selected: selected.join(',')
					}, function(data) {
						$rp.find('.resource-picker-overlay').addClass('active');
						$rp.find('.resource-picker-holder').html(data.html).scrollTop(0);
						$('#resource-picker-backdrop').show();
					});
				},
				setResource: function(id, start, end) {
					if (typeof start !== 'undefined' && typeof end !== 'undefined') {
						this.memory.resources[id] = [
							[start, end]
						];
					} else {
						this.memory.resources[id] = [];
					}
					this.getResourcesTable();
				},
				setResources: function(resources) {
					var T = this;
					$(resources).each(function() {
						if (typeof T.memory.resources[this] === 'undefined') {
							T.memory.resources[this] = [];
						}
					});
					this.getResourcesTable();
				},
				removeResource: function(id) {
					delete this.memory.resources[id];
					this.getResourcesTable();
				},
				removeResources: function(ids) {
					var m = this.memory.resources;
					$(ids).each(function() {
						delete m[this];
					});
					this.getResourcesTable();
				},
				getResourcesTable: function() {
					var $table = $('#resources-table'),
						params = {
							action: 'availability',
							schedule: {
								event: $.extend({}, this.memory.event),
								resources: $.extend({}, this.memory.resources)
							}
						};
					for (var id in params.schedule.resources) {
						if (params.schedule.resources.hasOwnProperty(id) && params.schedule.resources[id].length === 0) {
							params.schedule.resources[id] = [params.schedule.event];
						}
					}
					$('.rth-loading').show();
					$.post('/server.php', params, function(data) {
						setTimeout(function() {
							$table.html(data.html);
							$('#event-resources').trigger('resourcesTableUpdated');
						}, 300);
					});
				},
				getResourceModal: function($el) {
					var id = $el.attr('data-id'),
						title = $el.attr('data-title'),
						start = this.getDateTime($el.attr('data-start')),
						end = this.getDateTime($el.attr('data-end'));
					$('#modal-resource .modal-title').text(title);
					$('#modal-resource .btn-remove-resource').attr('data-id', id);
					$('#modal-resource .btn-save-resource').attr('data-id', id);
					$('#resource-start-date').val(start[0]);
					$('#resource-start-time').val(start[1]);
					$('#resource-end-date').val(end[0]);
					$('#resource-end-time').val(end[1]);
					$.getJSON('/server.php', {
						action: 'detail',
						id: id,
						start: $el.attr('data-start'),
						end: $el.attr('data-end')
					}, function(data) {
						$('#modal-resource .resource-detail').html(data.html);
						$('#modal-resource').modal('show');
					});
					$('#resource-start-date, #resource-end-date')
						.datepicker({
							autoclose: true
						});
					$('#resource-start-time')
						.timepicker({
							upArrowStyle: 'fa fa-chevron-up',
							downArrowStyle: 'fa fa-chevron-down',
							minuteStep: 30,
							defaultTime: false
						});
					$('#resource-end-time')
						.timepicker({
							upArrowStyle: 'fa fa-chevron-up',
							downArrowStyle: 'fa fa-chevron-down',
							minuteStep: 30,
							defaultTime: false
						});
				}
			},
			healthStream.search.datepicker = function() {
				$('.datepicker').datepicker({});
			},
			healthStream.search.expandcollapse = function() {

				$('#tb-active').click(function(e) {
					e.preventDefault();
					$('.nav-tabs li').toggleClass('active');
				});
				$('.expand-all').on('click', function() {
					$(".collapse-group.collapse:not('.in')").siblings().trigger("click");
					$('.collapse-all').show();
					$('.collapse-all').removeClass("hidden");
					$('.expand-all').hide();
				});
				$('.collapse-all').on('click', function() {
					$('.collapse-group.in').siblings().trigger("click");
					$('.expand-all').show();
					$('.collapse-all').hide();
				});
				$('.collapse').on('hidden.bs.collapse', function() {
					$(".collapse-all").hide();
					$('.expand-all').show();
				});
				$('.collapse').on('shown.bs.collapse', function() {
					$(".collapse-all").show();
					$(".collapse-all").removeClass("hidden");
					$('.expand-all').hide();
				});
				$("#modal-nrp-one-view").modal('show');

			};
		$(window).on('load', function() {
			healthStream.peoplepicker.init();
			healthStream.search.datepicker();
			healthStream.search.expandcollapse();

		});
	}(window, jQuery));
</script>

<?= createSiteEnd(); ?>