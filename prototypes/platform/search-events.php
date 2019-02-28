<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Event Search';
$patterns['focus']['title'] = 'Event Search';
$patterns['focus']['type'] = 'search';
$patterns['focus']['search'] = array(
    'placeholder' => 'Search All Events',
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
                    "state" => 'static',
                    "header" => '',
                    "controls" => array(
                       '<div class="input-group form-group">
                                <input -class="form-control" id="IncludeGlobalEvents" name="IncludeGlobalEvents" type="checkbox" value="true"><input name="IncludeGlobalEvents" type="hidden" value="false">
                                Include events outside my organization
                            </div>'

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
                        '<button type="submit" class="btn btn-default btn-sm">Apply Address</button>
                        '
                    ),
                ),
                array(
                    "state" => 'closed',
                    "header" => 'Personnel',
                    "controls" => array(
                       '<div class="form-group"><input type="text" class="form-control" placeholder="Search for Personnel"></div>'

                    )
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
            );
?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>


<?php

$date_now = Date('U');
$date_rounded = $date_now - ($date_now % 1800) + 1800;
$date_future = $date_rounded + (3600 * 1);
?>
    <div class="layout  layout-search">
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
                                    <div class="col-md-9">
                                        <h2>Results <small>Showing 1-10 of 15</small></h2>
                                        <div class="search-filter search-filter--mobile">
                                            <div class="search-filter__control">
                                                <?= createTags($patterns['search']); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 hidden-xs hidden-sm">
                                        <div class="section-results-header-sort">
                                            <div class="dropdown">
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

                                    $slat = array(
                                        'title' => '<a class="event-title-link" href="#modal-event" data-toggle="modal"> This is an event</a>',
                                        'meta' => array(
                                            array(
                                                'label' => '',
                                                'value' => 'Jul 15, 2016 at 3:30pm',
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            ),
                                            array(
                                                'type' => 'Live Event',
                                            )
                                        ),
                                        'action' => array(
                                            'type' => 'custom',
                                            'content' => '
                                                <div class="action action-multi">
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                            Options <i class="fa fa-caret-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li>
                                                                <a href="#modal-event" data-toggle="modal">View Event Details</a>
                                                            </li>
                                                            <li>
                                                                <a href="/scheduling-edit-schedule.php">Edit Schedule</a>
                                                            </li>
                                                            <li>
                                                                <a href="#modal-message" data-toggle="modal">Send Message</a>
                                                            </li>
                                                            <li>
                                                                <a href="/grading-manage-grading.php">Manager Roster</a>
                                                            </li>
                                                            <li>
                                                                <a href="/registration-event.php">Event Settings</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            ',

                                        )
                                    );
                                    echo createSlat($slat);

                                    $slat = array(
                                        'title' => '<a class="event-title-link" href="#modal-event" data-toggle="modal"> This is an event</a>',
                                        'meta' => array(
                                            array(
                                                'label' => '',
                                                'value' => '<div>Jul 15, 2016 at 3:30pm - </div><div>Jul 25, 2016 at 3:30pm</div>',
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            ),
                                            array(
                                                'type' => 'Live Event',
                                            )
                                        ),
                                        'action' => array(
                                            'type' => 'custom',
                                            'content' => '
                                                <div class="action action-multi">
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                            Options <i class="fa fa-caret-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li>
                                                                <a href="#modal-event" data-toggle="modal">View Event Details</a>
                                                            </li>
                                                            <li>
                                                                <a href="/scheduling-edit-schedule.php">Edit Schedule</a>
                                                            </li>
                                                            <li>
                                                                <a href="#modal-message" data-toggle="modal">Send Message</a>
                                                            </li>
                                                            <li>
                                                                <a href="/grading-manage-grading.php">Manager Roster</a>
                                                            </li>
                                                            <li>
                                                                <a href="/registration-event.php">Event Settings</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            ',

                                        )
                                    );
                                    echo createSlat($slat);

                                    $slat = array(
                                        'title' => '<a class="event-title-link" href="#modal-event" data-toggle="modal"> This is an event</a>',
                                        'meta' => array(
                                            array(
                                                'label' => '',
                                                'value' => 'Jul 15, 2016 at 3:30pm',
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            ),
                                            array(
                                                'type' => 'Live Event',
                                            )
                                        ),
                                        'action' => array(
                                            'type' => 'custom',
                                            'content' => '
                                                <div class="action action-multi">
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                            Options <i class="fa fa-caret-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li>
                                                                <a href="#modal-event" data-toggle="modal">View Event Details</a>
                                                            </li>
                                                            <li>
                                                                <a href="/scheduling-edit-schedule.php">Edit Schedule</a>
                                                            </li>
                                                            <li>
                                                                <a href="#modal-message" data-toggle="modal">Send Message</a>
                                                            </li>
                                                            <li>
                                                                <a href="/grading-manage-grading.php">Manager Roster</a>
                                                            </li>
                                                            <li>
                                                                <a href="/registration-event.php">Event Settings</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            ',

                                        )
                                    );
                                    echo createSlat($slat);

                                    echo createSlat($slat);

                                    $slat = array(
                                        'title' => '<a class="event-title-link" href="#modal-event" data-toggle="modal"> This is an event</a>',
                                        'meta' => array(
                                            array(
                                                'label' => '',
                                                'value' => '<div>Jul 15, 2016 at 12:30pm -</div><div>Jul 25, 2016 at 3:30pm</div>',
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            ),
                                            array(
                                                'type' => 'Live Event',
                                            )
                                        ),
                                        'action' => array(
                                            'type' => 'custom',
                                            'content' => '
                                                <div class="action action-multi">
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                            Options <i class="fa fa-caret-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li>
                                                                <a href="#modal-event" data-toggle="modal">View Event Details</a>
                                                            </li>
                                                            <li>
                                                                <a href="/scheduling-edit-schedule.php">Edit Schedule</a>
                                                            </li>
                                                            <li>
                                                                <a href="#modal-message" data-toggle="modal">Send Message</a>
                                                            </li>
                                                            <li>
                                                                <a href="/grading-manage-grading.php">Manager Roster</a>
                                                            </li>
                                                            <li>
                                                                <a href="/registration-event.php">Event Settings</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            ',

                                        )
                                    );
                                    echo createSlat($slat);

                                    $slat = array(
                                        'title' => '<a class="event-title-link" href="#modal-event" data-toggle="modal"> This is an event</a>',
                                        'meta' => array(
                                            array(
                                                'label' => '',
                                                'value' => 'Jul 15, 2016 at 3:30pm',
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            ),
                                            array(
                                                'type' => 'Live Event',
                                            )
                                        ),
                                        'action' => array(
                                            'type' => 'custom',
                                            'content' => '
                                                <div class="action action-multi">
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                            Options <i class="fa fa-caret-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li>
                                                                <a href="#modal-event" data-toggle="modal">View Event Details</a>
                                                            </li>
                                                            <li>
                                                                <a href="/scheduling-edit-schedule.php">Edit Schedule</a>
                                                            </li>
                                                            <li>
                                                                <a href="#modal-message" data-toggle="modal">Send Message</a>
                                                            </li>
                                                            <li>
                                                                <a href="/grading-manage-grading.php">Manager Roster</a>
                                                            </li>
                                                            <li>
                                                                <a href="/registration-event.php">Event Settings</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            ',

                                        )
                                    );
                                    echo createSlat($slat);

                                    echo createSlat($slat);

                                    echo createSlat($slat);

                                    echo createSlat($slat);

                                    echo createSlat($slat);

                                    echo createSlat($slat);


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
    <?php include MODAL_EVENT_DETAILS ?> <!-- Sample Event Details Modal -->
    <!-- Refine Modal -->
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
    </div>
    <!-- / Refine Modal -->
    <!-- Message Modal -->
    <div id="modal-message" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i>
                    </button>
                    <h4 class="modal-title">Send A Message</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <h5><strong>Event Name:</strong> This is an event</h5>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="control-label">Recipient</label>
                                <select id="inputPresets" class="form-control">
                                    <option>Send To Students</option>
                                    <option>Send To Admin</option>
                                    <option>Send To All</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                    </div>
                    <div style="padding: 7px" class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-success">Send Message</a>
                    <button class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!--/Message Modal -->
    <?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
        <script src="/scripts/prototype.search-filters.js"></script>


        <script src="/scripts/date.format.js"></script>
        <script>
        (function(window, $) {
            'use strict';

            window.HealthStream = window.HealthStream || {};
            var healthStream = window.HealthStream;

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

                    $('#event-start-date, #event-end-date').datetimepicker({
                        inline: false,
                        sideBySide: true
                    });

                    // Event Date/Time Pickers
                    $('#PatternStartDate, #PatternEndDate').datetimepicker({
                        inline: false,
                        sideBySide: false,
                        format: 'L'

                    });
                    $('#EventStartTime, #EventEndTime').datetimepicker({
                        inline: false,
                        sideBySide: false,
                        format: 'LT'

                    });
                    $('#event-start-date').on('changeDate', function(e, d) {
                        var start = $('#event-start-date').datepicker('getUTCDate'),
                            end = $('#event-end-date').datepicker('getUTCDate');
                        if (start - end > 0) {
                            $('#event-end-date').datepicker('setDate', $('#event-start-date').datepicker('getDate'));
                        }
                    });
                    $('#event-end-date').on('changeDate', function(e, d) {
                        var start = $('#event-start-date').datepicker('getUTCDate'),
                            end = $('#event-end-date').datepicker('getUTCDate');
                        if (start - end > 0) {
                            $('#event-start-date').datepicker('setDate', $('#event-end-date').datepicker('getDate'));
                        }
                    });
                    $('#event-start-time')
                        .timepicker({
                            upArrowStyle: 'fa fa-chevron-up',
                            downArrowStyle: 'fa fa-chevron-down',
                            minuteStep: 30,
                            defaultTime: false
                        })
                        .on('changeTime.timepicker', function(e) {
                            if ($(this).val() !== e.time.value) {
                                $('#event-end-time').val(e.time.value);
                            }
                        });
                    $('#event-end-time')
                        .timepicker({
                            upArrowStyle: 'fa fa-chevron-up',
                            downArrowStyle: 'fa fa-chevron-down',
                            minuteStep: 30,
                            defaultTime: false
                        });
                    $('#event-start-date, #event-start-time, #event-end-date, #event-end-time').change(function() {
                        T.setEventDates();
                    });

                    // Event Resource Pickers
                    $('#event-resources')
                        .on('click', '.resource-picker-type li', function() {
                            var $el = $(this),
                                $rp = $el.closest('.resource-picker'),
                                type = $(this).text();
                            $rp.find('.resource-picker-type button span').html(type);
                            $rp.find('.resource-picker-input').attr('data-type', type.toLowerCase()).focus().trigger('keyup');
                        })
                        .on('keyup', '.resource-picker-input', function() {
                            var $el = $(this),
                                $rp = $el.closest('.resource-picker'),
                                resources;

                            $rp.find('.resource-picker-overlay').removeClass('active');
                            clearTimeout(window.resourcePicker);
                            if ($el.val().length > 0) {
                                window.resourcePicker = setTimeout(function() {
                                    T.getResources($el, $rp);
                                }, 300);
                            }
                        })
                        .on('click', '.resource-picker-add', function(e) {
                            var $el = $(this),
                                $rp = $el.closest('.resource-picker'),
                                resources = [$el.attr('data-id')],
                                addons = $el.attr('data-addons').split(',').filter(function(e) {
                                    return e
                                });

                            $.merge(resources, addons);
                            T.setResources(resources);
                            $(this).addClass('disabled');
                            e.preventDefault();
                        })
                        .on('click', '.resource-picker-remove', function(e) {
                            $('.rth-btn-remove[data-id="' + $(this).attr('data-id') + '"]').trigger('click');
                            $(this).addClass('disabled');
                            e.preventDefault();
                        })
                        .on('click', '.resource-picker-clear', function(e) {
                            var $el = $(this),
                                $rp = $el.closest('.resource-picker');
                            $rp.find('.resource-picker-input').val('').trigger('keyup');
                            $('#resource-picker-backdrop').hide();
                            e.preventDefault();
                        })
                        .on('click', '.rth-detail', function(e) {
                            T.getResourceModal($(this));
                            e.preventDefault();
                        })
                        .on('click', '.rth-block div', function() {
                            $(this).closest('tr').find('.rth-detail').trigger('click');
                        })
                        .on('click', '.rth-btn-remove', function(e) {
                            var resources = [$(this).attr('data-id')],
                                $nested = $(this).closest('.rth-item').nextUntil('.rth-item');

                            $($nested).each(function() {
                                resources.push($(this).find('.rth-options button').attr('data-id'));
                            });
                            T.removeResources(resources);
                            e.preventDefault();
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
                            selected.push(id)
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
            };

            $(window).on('load', function() {
                healthStream.peoplepicker.init();
            });
        }(window, jQuery));
        $('#tb-active').click(function(e) {
            e.preventDefault()
                // $('.nav-tabs li .active').toggleClass('active')
            $('.nav-tabs li').toggleClass('active')
        })


        $(document).click(function(e) {
            var target = $(e.target);
            if (target.parents('.bootstrap-datetimepicker-widget').length < 1 && !target.hasClass('datepicker') && !target.hasClass('timepicker') && !target.hasClass('dtp-form')) {
                //if ($('.bootstrap-datetimepicker-widget').length > 0) {

                $('#event-start-date').data('DateTimePicker').hide();
                $('#event-end-date').data('DateTimePicker').hide();
                $('#PatternStartDate').data('DateTimePicker').hide();
                $('#PatternEndDate').data('DateTimePicker').hide();
                $('#EventStartTime').data('DateTimePicker').hide();
                $('#EventEndTime').data('DateTimePicker').hide();

                $('.datetimepickerInput').blur();
                //}
            }
        });
        $('#event-start-date').on("dp.show", function(e) {
            $('#event-end-date').data('DateTimePicker').hide();

        });

        $('#event-end-date').on("dp.show", function(e) {
            $('#event-start-date').data('DateTimePicker').hide();

        });
        $('#PatternStartDate').on("dp.show", function(e) {
            $('#PatternEndDate').data('DateTimePicker').hide();
            $('#EventEndTime').data('DateTimePicker').hide();
            $('#EventStartTime').data('DateTimePicker').hide();

        });

        $('#PatternEndDate').on("dp.show", function(e) {
            $('#PatternStartDate').data('DateTimePicker').hide();

        });

        $('#EventStartTime').on("dp.show", function(e) {
            $('#EventEndTime').data('DateTimePicker').hide();
            $('#PatternStartDate').data('DateTimePicker').hide();

        });

        $('#EventEndTime').on("dp.show", function(e) {
            $('#EventStartTime').data('DateTimePicker').hide();
            $('#PatternStartDate').data('DateTimePicker').hide();

        });

        </script>

        <?= createSiteEnd(); ?>

