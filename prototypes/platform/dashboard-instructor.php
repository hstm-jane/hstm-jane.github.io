<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'My Events';
$patterns['focus']['title'] = 'My Events';
$patterns['header']['mainNavActive'] = 'myevents';

?>



<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?php
$date_now = Date('U');
$date_rounded = $date_now - 15 - ($date_now % 1800) + 1800;
$date_future = $date_rounded + (3600 * 1);


?>


<div class="layout layout-dashboard">
    <div class="container">
        <section class="section section-main ">
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default mt-lg">

                        <div class="panel-body">

                            <div role="tabpanel">
                                <!-- Nav tabs-->
                                <ul role="tablist" class="nav nav-tabs events-tabs">
                                    <li role="presentation" class="active"><a href="#upcoming" aria-controls="upcoming" role="tab" data-toggle="tab" id="upcoming-events-tab">Upcoming </a>
                                    </li>
                                    <li role="presentation"><a href="#completed" aria-controls="completed" role="tab" data-toggle="tab" id="completed-events-tab">Completed <span class="badge badge-alert ">4</span></a>
                                    </li>
                                </ul>
                                <!-- Tab panes-->
                                <div class="tab-content">
                                    <!--upcoming start-->
                                    <div id="upcoming" role="tabpanel" class="fade in tab-upcoming tab-pane active">
                                        <div class="alert alert-info alert-nudge ">
                                            <div class="nudge-container">
                                                <div class="title"><i class="fa fa-flag"></i>
                                                    <a href="#" class="nudge-grade-events">You have 4 events that need to be graded.</a>
                                                </div>
                                                <div class="action">
                                                    <a class="btn btn-sm btn-default nudge-grade-events" href="">
                                                        Grade Events
                                                        <i class="fa fa-fw fa-chevron-right visible-xs"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pull-right btn-toggle">
                                            <div class="btn-group btn-upcoming-switch" role="group" aria-label="...">
                                                <a href="#" class="btn btn-default btn-sm btn-events-calendar "><i class="fa fa-calendar"></i></a>
                                                <a href="#" class="btn btn-default btn-sm btn-events-list active"><i class="fa fa-list-ul"></i></a>
                                            </div>
                                        </div>
                                        <div class="events-list active">

                                            <div class="event-day">
                                                <div class="title"><span class="weekday">
                                                        <?php echo date("l",strtotime('+3days')) ?></span><span class="weekdate"> -
                                                        <?php echo date("F j, Y" ,strtotime('+3days')) ?></span></div>

                                                <div class="event-lst">
                                                    <div class="event-time"><a href="#">8:00 AM - 12:00 PM</a></div>
                                                    <div class="event-title">7th Edition NRP Student - Part 2</div>
                                                    <div class="event-location">
                                                    <a class="collapse-toggle">StoneCrest <i class="fa fa-fw fa-plus-circle"></i></a>
                                                        <div class="collapse-group collapse" style="height: 0;">
                                                            <section class="section">
                                                                <h4>Location</h4>
                                                                    <span class="event-location-institution">StoneCrest</span>
                                                                    <span class="event-location-building">- Northside Building</span>
                                                                <h4 class="meta-label mt-lg">Room</h4>
                                                                    <span class="meta-value"><span class="event-location-room"> Training Room A</span></span>
                                                            </section>
                                                        </div>
                                                    </div>
                                                    <div class="event-registration-progress">
                                                        <div class="event-registration-meta">
                                                            <span class="event-registration-meta-value">4/7</span>
                                                            <span class="event-registration-meta-label">Registered</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-info" style="width: 57%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-action">
                                                        <div class="action action-multi">
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-fw fa-caret-down"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li class=""><a href="/event-single-settings.php">Manage Event</a></li>
                                                                    <li class=""><a href="/event-single-roster.php">Manage Roster</a></li>
                                                                    <li class=""><a href="#">Send Message</a></li>
                                                                    <li class="divider"><a href="#">Send Message</a></li>
                                                                    <li class=""><a href="/event-series-occurrences.php">Manage Series</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="event-lst">
                                                    <div class="event-time"><a href="#">1:00 PM - 3:30 PM</a></div>
                                                    <div class="event-title">7th Edition NRP Student - Part 2</div>
                                                    <div class="event-location">
                                                        <span class="event-location-institution">Skyline</span>
                                                        <span class="event-location-building">- South Building</span>
                                                        <span class="event-location-room">- Training Room 1</span>
                                                    </div>
                                                    <div class="event-registration-progress">
                                                        <div class="event-registration-meta">
                                                            <span class="event-registration-meta-value">15/15</span>
                                                            <span class="event-registration-meta-label">Registered</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-info" style="width: 100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-action">
                                                        <div class="action action-multi">
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-fw fa-caret-down"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li class=""><a href="/event-single-settings.php">Manage Event</a></li>
                                                                    <li class=""><a href="/event-single-roster.php">Manage Roster</a></li>
                                                                    <li class=""><a href="#">Send Message</a></li>
                                                                    <li class="divider"><a href="#">Send Message</a></li>
                                                                    <li class=""><a href="/event-series-occurrences.php">Manage Series</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="event-day">
                                                <div class="title"><span class="weekday">
                                                        <?php echo date("l",strtotime('+4days')) ?></span><span class="weekdate"> -
                                                        <?php echo date("F j, Y" ,strtotime('+4days')) ?></span></div>

                                                <div class="event-lst">
                                                    <div class="event-time"><a href="#">8:00 AM - 12:00 PM</a></div>
                                                    <div class="event-title">7th Edition NRP Student - Part 2</div>
                                                    <div class="event-location">
                                                        <span class="event-location-institution">StoneCrest</span>
                                                        <span class="event-location-building">- Northside Building</span>
                                                        <span class="event-location-room">- Training Room A</span>
                                                    </div>
                                                    <div class="event-registration-progress">
                                                        <div class="event-registration-meta">
                                                            <span class="event-registration-meta-value">13/13</span>
                                                            <span class="event-registration-meta-label">Registered</span>
                                                            <div class="event-registration-meta-waitlist text-attention">
                                                                <span class="event-registration-meta-value">2</span>
                                                                <span class="event-registration-meta-label">Waitlisted</span>
                                                            </div>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-info" style="width: 100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-action">
                                                        <div class="action action-multi">
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-fw fa-caret-down"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li class=""><a href="/event-single-settings.php">Manage Event</a></li>
                                                                    <li class=""><a href="/event-single-roster.php">Manage Roster</a></li>
                                                                    <li class=""><a href="#">Send Message</a></li>
                                                                    <li class="divider"><a href="#">Send Message</a></li>
                                                                    <li class=""><a href="/event-series-occurrences.php">Manage Series</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                            </div>

                                            <div class="event-day">
                                                <div class="title"><span class="weekday">
                                                        <?php echo date("l",strtotime('+6days')) ?></span><span class="weekdate"> -
                                                        <?php echo date("F j, Y" ,strtotime('+6days')) ?></span></div>

                                                <div class="event-lst">
                                                    <div class="event-time"><a href="#">8:00 AM - 12:00 PM</a></div>
                                                    <div class="event-title">7th Edition NRP Student - Part 2</div>
                                                    <div class="event-location">
                                                        <span class="event-location-institution">StoneCrest</span>
                                                        <span class="event-location-building">- Northside Building</span>
                                                        <span class="event-location-room">- Training Room A</span>
                                                    </div>
                                                    <div class="event-registration-progress">
                                                        <div class="event-registration-meta">
                                                            <span class="event-registration-meta-value">6/9</span>
                                                            <span class="event-registration-meta-label">Registered</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-info" style="width: 66%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-action">
                                                        <div class="action action-multi">
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-fw fa-caret-down"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li class=""><a href="/event-single-settings.php">Manage Event</a></li>
                                                                    <li class=""><a href="/event-single-roster.php">Manage Roster</a></li>
                                                                    <li class=""><a href="#">Send Message</a></li>
                                                                    <li class="divider"><a href="#">Send Message</a></li>
                                                                    <li class=""><a href="/event-series-occurrences.php">Manage Series</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="event-lst">
                                                    <div class="event-time"><a href="#">3:00 PM - 5:00 PM</a></div>
                                                    <div class="event-title">7th Edition NRP Student - Part 2</div>
                                                    <div class="event-location">
                                                        <span class="event-location-institution">Skyline</span>
                                                        <span class="event-location-building">- Upper Building</span>
                                                        <span class="event-location-room">- Training Room 5</span>
                                                    </div>
                                                    <div class="event-registration-progress">
                                                        <div class="event-registration-meta">
                                                            <span class="event-registration-meta-value">3/15</span>
                                                            <span class="event-registration-meta-label">Registered</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-info" style="width: 20%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-action">
                                                        <div class="action action-multi">
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-fw fa-caret-down"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li class=""><a href="/event-single-settings.php">Manage Event</a></li>
                                                                    <li class=""><a href="/event-single-roster.php">Manage Roster</a></li>
                                                                    <li class=""><a href="#">Send Message</a></li>
                                                                    <li class="divider"><a href="#">Send Message</a></li>
                                                                    <li class=""><a href="/event-series-occurrences.php">Manage Series</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="events-actions clearfix">
                                                <a href="#modal-schedule-event" data-toggle="modal" class="btn btn-success btn-schedule-event pull-left">Schedule Event</a>
                                                <div class="btn-group pull-right ml">
                                                    <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                    <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                                </div>
                                                <div class="btn-group dropup pull-right">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Events 1-5 of 37 <i class="fa fa-caret-up"></i></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="active">
                                                            <a href="#">5 per page</a>
                                                        </li>
                                                        <li class="">
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
                                            </div>
                                        </div>
                                        <div class="events-calendar collapse">
                                            <div class="selected-events">
                                                <div class="selected-events-header">
                                                    <h3 class="selected-events-title"></h3>
                                                </div>
                                                <section class="section">
                                                    <div id="calendar-resources"></div>
                                                </section>
                                                <div id='calendar-list'></div>
                                                <div class="selected-events-list accordian" id="event-list-a"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--upcoming end-->
                                    <!--completed start-->
                                    <div id="completed" role="tabpanel" class="tab-completed tab-pane fade">
                                        <div class="show-only-need-grading pull-right">Show only events that need grading
                                            <label class="switch ">
                                                <input type="checkbox">
                                                <span></span>
                                            </label>
                                        </div>


                                        <div class="events-list">
                                            <div class="event-day">
                                                <div class="title"><span class="weekday">
                                                        <?php echo date("l",strtotime('-3days')) ?></span><span class="weekdate"> -
                                                        <?php echo date("F j, Y" ,strtotime('-3days')) ?></span></div>

                                                <div class="event-lst">
                                                    <div class="event-time"><a href="#">8:00 AM - 12:00 PM</a></div>
                                                    <div class="event-title">7th Edition NRP Student - Part 2</div>
                                                    <div class="event-location">
                                                        <span class="event-location-institution">StoneCrest</span>
                                                        <span class="event-location-building">- Northside Building</span>
                                                        <span class="event-location-room">- Training Room A</span>
                                                    </div>
                                                    <div class="event-registration-progress">
                                                        <div class="event-registration-meta">
                                                            <span class="event-registration-meta-value">4/15</span>
                                                            <span class="event-registration-meta-label">Students Graded</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-info" style="width: 26%">
                                                            </div>
                                                        </div>
                                                        <div class="event-grades">
                                                            <span class="grade grade-pass">
                                                                <span class="grade-value">4</span>
                                                                <span class="grade-label">Pass</span>
                                                            </span>
                                                            <span class="grade grade-fail">
                                                                <span class="grade-value">0</span>
                                                                <span class="grade-label">Fail</span>
                                                            </span>
                                                            <span class="grade grade-noshow">
                                                                <span class="grade-value">0</span>
                                                                <span class="grade-label">No Show</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="event-action">
                                                        <div class="action action-multi">
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-fw fa-caret-down"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li class=""><a href="/event-single-settings.php">Manage Event</a></li>
                                                                    <li class=""><a href="/event-single-roster.php">Manage Roster</a></li>
                                                                    <li class=""><a href="#">Send Message</a></li>
                                                                    <li class="divider"><a href="#">Send Message</a></li>
                                                                    <li class=""><a href="/event-series-occurrences.php">Manage Series</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="event-lst">
                                                    <div class="event-time"><a href="#">1:00 PM - 3:30 PM</a></div>
                                                    <div class="event-title">7th Edition NRP Student - Part 2</div>
                                                    <div class="event-location">
                                                        <span class="event-location-institution">Skyline</span>
                                                        <span class="event-location-building">- South Building</span>
                                                        <span class="event-location-room">- Training Room 1</span>
                                                    </div>
                                                    <div class="event-registration-progress">
                                                        <div class="event-registration-meta">
                                                            <span class="event-registration-meta-value">5/10</span>
                                                            <span class="event-registration-meta-label">Students Graded</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-info" style="width: 50%">
                                                            </div>
                                                        </div>
                                                        <div class="event-grades">
                                                            <span class="grade grade-pass">
                                                                <span class="grade-value">4</span>
                                                                <span class="grade-label">Pass</span>
                                                            </span>
                                                            <span class="grade grade-fail">
                                                                <span class="grade-value">1</span>
                                                                <span class="grade-label">Fail</span>
                                                            </span>
                                                            <span class="grade grade-noshow">
                                                                <span class="grade-value">0</span>
                                                                <span class="grade-label">No Show</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="event-action">
                                                        <div class="action action-multi">
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-fw fa-caret-down"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li class=""><a href="/event-single-settings.php">Manage Event</a></li>
                                                                    <li class=""><a href="/event-single-roster.php">Manage Roster</a></li>
                                                                    <li class=""><a href="#">Send Message</a></li>
                                                                    <li class="divider"><a href="#">Send Message</a></li>
                                                                    <li class=""><a href="/event-series-occurrences.php">Manage Series</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="event-lst  grading-completed">
                                                    <div class="event-time"><a href="#">3:00 PM - 5:30 PM</a></div>
                                                    <div class="event-title">7th Edition NRP Student - Part 2</div>
                                                    <div class="event-location">
                                                        <span class="event-location-institution">Skyline</span>
                                                        <span class="event-location-building">- South Building</span>
                                                        <span class="event-location-room">- Training Room 2</span>
                                                    </div>
                                                    <div class="event-registration-progress">
                                                        <div class="event-registration-meta">
                                                            <span class="event-registration-meta-value">13/13</span>
                                                            <span class="event-registration-meta-label">Students Graded</span>
                                                        </div>
                                                        <div class="progress ">
                                                            <div class="progress-bar progress-bar-info" style="width: 100%">
                                                            </div>
                                                        </div>
                                                        <div class="event-grades ">
                                                            <span class="grade grade-pass">
                                                                <span class="grade-value">10</span>
                                                                <span class="grade-label">Pass</span>
                                                            </span>
                                                            <span class="grade grade-fail">
                                                                <span class="grade-value">2</span>
                                                                <span class="grade-label">Fail</span>
                                                            </span>
                                                            <span class="grade grade-noshow">
                                                                <span class="grade-value">1</span>
                                                                <span class="grade-label">No Show</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="event-action">
                                                        <div class="action action-multi">
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-fw fa-caret-down"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li class=""><a href="/event-single-settings.php">Manage Event</a></li>
                                                                    <li class=""><a href="/event-single-roster.php">Manage Roster</a></li>
                                                                    <li class=""><a href="#">Send Message</a></li>
                                                                    <li class="divider"><a href="#">Send Message</a></li>
                                                                    <li class=""><a href="/event-series-occurrences.php">Manage Series</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="event-day">
                                                <div class="title"><span class="weekday">
                                                        <?php echo date("l",strtotime('-4days')) ?></span><span class="weekdate"> -
                                                        <?php echo date("F j, Y" ,strtotime('-4days')) ?></span></div>

                                                <div class="event-lst">
                                                    <div class="event-time"><a href="#">8:00 AM - 12:00 PM</a></div>
                                                    <div class="event-title">7th Edition NRP Student - Part 2</div>
                                                    <div class="event-location">
                                                        <span class="event-location-institution">StoneCrest</span>
                                                        <span class="event-location-building">- Northside Building</span>
                                                        <span class="event-location-room">- Training Room A</span>
                                                    </div>
                                                    <div class="event-registration-progress">
                                                        <div class="event-registration-meta">
                                                            <span class="event-registration-meta-value">4/7</span>
                                                            <span class="event-registration-meta-label">Students Graded</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-info" style="width: 57%">
                                                            </div>
                                                        </div>
                                                        <div class="event-grades">
                                                            <span class="grade grade-pass">
                                                                <span class="grade-value">4</span>
                                                                <span class="grade-label">Pass</span>
                                                            </span>
                                                            <span class="grade grade-fail">
                                                                <span class="grade-value">0</span>
                                                                <span class="grade-label">Fail</span>
                                                            </span>
                                                            <span class="grade grade-noshow">
                                                                <span class="grade-value">0</span>
                                                                <span class="grade-label">No Show</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="event-action">
                                                        <div class="action action-multi">
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-fw fa-caret-down"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li class=""><a href="/event-single-settings.php">Manage Event</a></li>
                                                                    <li class=""><a href="/event-single-roster.php">Manage Roster</a></li>
                                                                    <li class=""><a href="#">Send Message</a></li>
                                                                    <li class="divider"><a href="#">Send Message</a></li>
                                                                    <li class=""><a href="/event-series-occurrences.php">Manage Series</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="event-lst  grading-completed">
                                                    <div class="event-time"><a href="#">1:00 AM - 3:00 PM</a></div>
                                                    <div class="event-title">7th Edition NRP Student - Part 2</div>
                                                    <div class="event-location">
                                                        <span class="event-location-institution">StoneCrest</span>
                                                        <span class="event-location-building">- Northside Building</span>
                                                        <span class="event-location-room">- Training Room A</span>
                                                    </div>
                                                    <div class="event-registration-progress ">
                                                        <div class="event-registration-meta">
                                                            <span class="event-registration-meta-value">15/15</span>
                                                            <span class="event-registration-meta-label">Students Graded</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-info" style="width: 100%">
                                                            </div>
                                                        </div>
                                                        <div class="event-grades">
                                                            <span class="grade grade-pass">
                                                                <span class="grade-value">15</span>
                                                                <span class="grade-label">Pass</span>
                                                            </span>
                                                            <span class="grade grade-fail grade-novalue">
                                                                <span class="grade-value">0</span>
                                                                <span class="grade-label">Fail</span>
                                                            </span>
                                                            <span class="grade grade-noshow grade-novalue">
                                                                <span class="grade-value">0</span>
                                                                <span class="grade-label">No Show</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="event-action">
                                                        <div class="action action-multi">
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-fw fa-caret-down"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li class=""><a href="/event-single-settings.php">Manage Event</a></li>
                                                                    <li class=""><a href="/event-single-roster.php">Manage Roster</a></li>
                                                                    <li class=""><a href="#">Send Message</a></li>
                                                                    <li class="divider"><a href="#">Send Message</a></li>
                                                                    <li class=""><a href="/event-series-occurrences.php">Manage Series</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                            </div>

                                            <div class="event-day">
                                                <div class="title"><span class="weekday">
                                                        <?php echo date("l",strtotime('-6days')) ?></span><span class="weekdate"> -
                                                        <?php echo date("F j, Y" ,strtotime('-6days')) ?></span></div>

                                                <div class="event-lst grading-completed">
                                                    <div class="event-time"><a href="#">8:00 AM - 12:00 PM</a></div>
                                                    <div class="event-title">7th Edition NRP Student - Part 2</div>
                                                    <div class="event-location">
                                                        <span class="event-location-institution">StoneCrest</span>
                                                        <span class="event-location-building">- Northside Building</span>
                                                        <span class="event-location-room">- Training Room A</span>
                                                    </div>
                                                    <div class="event-registration-progress">
                                                        <div class="event-registration-meta">
                                                            <span class="event-registration-meta-value">7/7</span>
                                                            <span class="event-registration-meta-label">Students Graded</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-info" style="width: 100%">
                                                            </div>
                                                        </div>
                                                        <div class="event-grades ">
                                                            <span class="grade grade-pass">
                                                                <span class="grade-value">5</span>
                                                                <span class="grade-label">Pass</span>
                                                            </span>
                                                            <span class="grade grade-fail">
                                                                <span class="grade-value">1</span>
                                                                <span class="grade-label">Fail</span>
                                                            </span>
                                                            <span class="grade grade-noshow">
                                                                <span class="grade-value">1</span>
                                                                <span class="grade-label">No Show</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="event-action">
                                                        <div class="action action-multi">
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-fw fa-caret-down"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li class=""><a href="/event-single-settings.php">Manage Event</a></li>
                                                                    <li class=""><a href="/event-single-roster.php">Manage Roster</a></li>
                                                                    <li class=""><a href="#">Send Message</a></li>
                                                                    <li class="divider"><a href="#">Send Message</a></li>
                                                                    <li class=""><a href="/event-series-occurrences.php">Manage Series</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="event-lst grading-completed">
                                                    <div class="event-time"><a href="#">3:00 PM - 5:00 PM</a></div>
                                                    <div class="event-title">7th Edition NRP Student - Part 2</div>
                                                    <div class="event-location">
                                                        <span class="event-location-institution">Skyline</span>
                                                        <span class="event-location-building">- Upper Building</span>
                                                        <span class="event-location-room">- Training Room 5</span>
                                                    </div>
                                                    <div class="event-registration-progress">
                                                        <div class="event-registration-meta">
                                                            <span class="event-registration-meta-value">15/15</span>
                                                            <span class="event-registration-meta-label">Students Graded</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-info" style="width: 100%">
                                                            </div>
                                                        </div>
                                                        <div class="event-grades ">
                                                            <span class="grade grade-pass">
                                                                <span class="grade-value">15</span>
                                                                <span class="grade-label">Pass</span>
                                                            </span>
                                                            <span class="grade grade-fail grade-novalue">
                                                                <span class="grade-value">0</span>
                                                                <span class="grade-label">Fail</span>
                                                            </span>
                                                            <span class="grade grade-noshow grade-novalue">
                                                                <span class="grade-value">0</span>
                                                                <span class="grade-label">No Show</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="event-action">
                                                        <div class="action action-multi">
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-fw fa-caret-down"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li class=""><a href="/event-single-settings.php">Manage Event</a></li>
                                                                    <li class=""><a href="/event-single-roster.php">Manage Roster</a></li>
                                                                    <li class=""><a href="#">Send Message</a></li>
                                                                    <li class="divider"><a href="#">Send Message</a></li>
                                                                    <li class=""><a href="/event-series-occurrences.php">Manage Series</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-actions clearfix">
                                                <div class="btn-group pull-right ml">
                                                    <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                    <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                                </div>
                                                <div class="btn-group dropup pull-right">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Events 1-5 of 23 <i class="fa fa-caret-up"></i></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="active">
                                                            <a href="#">5 per page</a>
                                                        </li>
                                                        <li class="">
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
                                            </div>
                                        </div><!--completed end-->
                                    </div><!-- tabs end -->
                                 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-default mt-lg">
                        <div class="panel-heading">
                            <div class="panel-title">My NRP Instructor Card</div>
                        </div>
                        <div class="panel-body" style="position:relative;min-height:150px;">

                            <table style="width:100%;">
                                <tr>
                                    <td>Status: <span class="label label-primary">Active</span></td>
                                    <td>NRP Number: 1234567</td>
                                </tr>
                                <tr>
                                    <td>Rank: Instructor</td>
                                    <td><span style="font-size:16px;color:#FC7B00; font-weight:600;">Expiring Soon</span></td>
                                </tr>
                                <tr>
                                    <td>Issued: 12/19/2016</td>
                                    <td>Expires: 12/19/2018</td>
                                </tr>
                            </table>
                            <div class="mt-lg">
                                <button class="btn btn-xs btn-default">View eCard</button>
                            </div>
                            <img src="/content/images/nrp-logo-card.png" style="position:absolute; bottom:0px; right:0px;width:75px;"/>
                        </div>
                    </div>
                    <div class="panel panel-default mt-lg">
                        <div class="panel-heading">
                            <div class="panel-title">Student Status Search</div>
                        </div>
                        <div class="panel-body " style="min-height:150px;">
                           <p>Check a student's NRP Status by searching by name or email.</p>

                           <div class="roster-quick-search">
                             <select class="form-control slat-basic" id="slat-basic" data-placeholder="Enter name or email" multiple="multiple">
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
                           <div class="pull-right clearfix mt">
                           <a href="#" class="">Browse all of my students</a>
                           </div>
                        </div>
                    </div>
                    <div class="panel panel-default mt-lg">
                        <div class="panel-heading">
                            <div class="panel-title">Resources</div>
                        </div>
                        <div class="panel-body text-center">
                            Resources
                        </div>
                    </div>
                </div>
            </div>

            <!-- /row -->
        </section>

        <!-- /container -->
    </div>
    <!-- /layout -->


</div>

<div id="modal-schedule-event" class="modal fade modal-lg" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Schedule Event</h4>
            </div>
            <div class="modal-body">
                <section class="section " id="scheduleEventSection">
                    <h3>Event Details</h3>
                    <div class="row">
                        <div class="col-md-5 form-group">
                            <label>Event Name</label>
                            <input class="form-control" data-val="true" data-val-required="This is a required field." id="EventSeriesName" maxlength="64" name="EventSeriesName" type="text" value="This is an event name">
                            <span class="help-block">
                                <span class="field-validation-valid" data-valmsg-for="EventSeriesName" data-valmsg-replace="true"></span>
                            </span>
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Event Type</label>
                            <label>NRP</label>
                        </div>
                    </div>
                    <section class="recurrence show-when-recurrence-updated">
                        <h4 class="recurrence-area" id="RecurrenceSentence">
                            <span id="PatternDescription">
                                Will occur
                                <span class="occurrenceStatementSpan" id="patternTypeValue"></span> every
                                <span class="occurrenceStatementSpan" id="patternUnitNumber"></span>
                                <span class="occurrenceStatementSpan" id="patternUnit"></span> from
                                <span class="occurrenceStatementSpan" id="recurrenceStartTime"></span> to
                                <span class="occurrenceStatementSpan" id="recurrenceEndTime"></span> starting on
                                <span class="occurrenceStatementSpan" id="recurrenceStartDate"></span> and ending after
                                <span class="occurrenceStatementSpan" id="occurenceCount"></span> occurrences
                            </span>
                            <span id="WithModifications show-when-recurrence-updated" style="display:hidden;padding-left:1em;color:green;font-size:14px;font-weight:600"> with modifications </span>
                            <!--     <span class="show-when-recurrence-updated" >
                                   <i class="fa fa-2x fa-check"></i> Updated
                               </span> -->
                        </h4>
                    </section>
                    <section id="recurrence-check" class="section recurrence-area show-when-recurrence-updated">
                        <hr>
                        <div class="row show-when-recurrence-updated">
                            <div class="col-md-12">
                                <h2 class="resource=picker-title">Choose Occurrence</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 remove-right-padding form-group occurrence-list-controls">
                                <select id="ddlEvents" class="form-control" name="occurrence-dropdown">
                                    <option value="0" selected="selected">All Occurrences</option>
                                </select>
                                <span id="helpBlock" class="help-block">Updated
                                </span>
                            </div>
                            <div class="col-md-5 form-group">
                                <button class="btn btn-default btn-md" id="btnRecurrence" type="button" data-toggle="modal" data-target="#modal-recurrence">
                                    <i class="fa fa-refresh"></i> Recurrences Pattern
                                </button>
                                <a class="btn btn-default recurrenceLink" href="/recurrence"><i class="fa fa-edit"></i> Edit Recurrences</a>
                            </div>
                        </div>
                    </section>
                    <section class="event-date-time">
                        <h3 class="resource-picker-title">Schedule</h3>
                        <div class="row">
                            <div class="col-sm-3 col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Start</label>
                                    <div class="input-group bootstrap-datepicker">
                                        <input type="text" class="form-control dtp-form dateTimePicker datetime-input " id="event-start-date" value="12/06/2018 12:00 PM" tabindex="1">
                                        <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3">
                                <div class="form-group">
                                    <label class="control-label">End</label>
                                    <div class="input-group bootstrap-datepicker">
                                        <input type="text" class="form-control dtp-form dateTimePicker datetime-input " id="event-end-date" value="12/06/2018 01:00 PM" tabindex="1">
                                        <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 form-group hide-when-recurrence-updated">
                                <label>Recurring Event</label>
                                <button class="btn btn-default btn-md" id="btnRecurrence" type="button" data-toggle="modal" data-target="#modal-recurrence">
                                    <i class="fa fa-refresh"></i> Recurrence Pattern
                                </button>
                                <a class="btn btn-default recurrenceLink" href="/recurrence"><i class="fa fa-edit"></i> Edit Recurrences</a>
                            </div>
                        </div>
                    </section>
                    <section class="section" id="event-resources">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Select Resources
                                    <!-- empty span filled by js.   -->
                                    <span class="h5"></span>
                                </h3>
                                <div class="resource-picker">
                                    <div class="resource-picker-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control resource-picker-input" id="resource-picker-input" placeholder="Search" data-type="rooms" tabindex="4">
                                            <span class="input-group-addon resource-picker-addon" <span data-toggle="modal" data-target="#modal-resource"><i class="fa fa-search"></i></span>
                                        </div>
                                        <div class="btn-group resource-picker-type">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" tabindex="5">
                                                <span>All</span> <i class="fa fa-caret-down "></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="#">All</a>
                                                </li>
                                                <li>
                                                    <a href="#">Rooms</a>
                                                </li>
                                                <li>
                                                    <a href="#">Equipment</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="resource-picker-overlay">
                                        <div class="resource-picker-holder"></div>
                                        <div class="resource-picker-clear">
                                            <a href="#">Close Results</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3>Select Personnel
                                    <span class="h5"></span>
                                </h3>
                                <div class="resource-picker">
                                    <div class="resource-picker-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control resource-picker-input" placeholder="Search" data-type="people" tabindex="4">
                                            <span class="input-group-addon resource-picker-addon" data-toggle="modal" data-target="#modal-personnel">
                                                <i class="fa fa-search"></i></span>
                                        </div>
                                    </div>
                                    <div class="resource-picker-overlay">
                                        <div class="resource-picker-holder"></div>
                                        <div class="resource-picker-clear">
                                            <a href="#">Close Results</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--  <section class="section" id="resources-table"></section>  -->
                    <section class="section" id="resources-tables" style="display: none">
                        <h2>Resource Availability</h2>
                        <div class="rth">
                            <table class="rth-table">
                                <tbody>
                                    <tr>
                                        <th colspan="2" class="rth-header" data-blocks="18">Resources</th>
                                        <th colspan="16" class="rth-divider" id="date-update">Thursday, December 6, 2018</th>
                                        <th colspan="2" class="rth-divider">Wed, Sep 9, 2015</th>
                                    </tr>
                                    <tr>
                                        <th colspan="2" class="rth-resource">Name</th>
                                        <th class="rth-divider">4:00pm</th>
                                        <th>4:30pm</th>
                                        <th>5:00pm</th>
                                        <th>5:30pm</th>
                                        <th>6:00pm</th>
                                        <th>6:30pm</th>
                                        <th>7:00pm</th>
                                        <th>7:30pm</th>
                                        <th>8:00pm</th>
                                        <th>8:30pm</th>
                                        <th>9:00pm</th>
                                        <th>9:30pm</th>
                                        <th>10:00pm</th>
                                        <th>10:30pm</th>
                                        <th>11:00pm</th>
                                        <th>11:30pm</th>
                                        <th class="rth-divider">12:00am</th>
                                        <th>12:30am</th>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr class="rth-item">
                                        <td class="rth-resource">
                                            <a href="#" class="rth-detail" data-id="R1" data-title="Room 102 North" data-start="1441736068" data-end="1441752268">Room 102 North</a>
                                        </td>
                                        <td class="rth-options">
                                            <button class="btn btn-xs btn-danger rth-btn-remove" data-id="R1">
                                                <i class="fa fa-fw fa-times"></i>
                                            </button>
                                        </td>
                                        <td class="rth-block rth-divider"></td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block" colspan="10">
                                            <div class="rth-proposed"><i class="fa fa-check"></i> Available</div>
                                        </td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block rth-divider"></td>
                                        <td class="rth-block"></td>
                                    </tr>
                                    <tr class="rth-nested-item">
                                        <td class="rth-resource">
                                            <span class="rth-indent">↳</span><a href="#" class="rth-detail" data-id="E0" data-title="EKG TV" data-start="1441736968" data-end="1441751368">EKG TV</a>
                                        </td>
                                        <td class="rth-options"><button class="btn btn-xs btn-danger rth-btn-remove" data-id="E0"><i class="fa fa-fw fa-times"></i></button>
                                        </td>
                                        <td class="rth-block rth-divider"></td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block" colspan="9">
                                            <div class="rth-proposed"><i class="fa fa-check"></i> Available</div>
                                        </td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block rth-divider"></td>
                                        <td class="rth-block"></td>
                                    </tr>
                                    <tr class="rth-item">
                                        <td class="rth-resource"><a href="#" class="rth-detail" data-id="E3" data-title="Ventilator 1" data-start="1441736968" data-end="1441751368">Ventilator 1</a></td>
                                        <td class="rth-options"><button class="btn btn-xs btn-danger rth-btn-remove" data-id="E3"><i class="fa fa-fw fa-times"></i></button>
                                        </td>
                                        <td class="rth-block rth-divider"></td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block" colspan="9">
                                            <div class="rth-proposed"><i class="fa fa-check"></i> Available</div>
                                        </td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block rth-divider"></td>
                                        <td class="rth-block"></td>
                                    </tr>
                                    <tr class="rth-item">
                                        <td class="rth-resource"><a href="#" class="rth-detail" data-id="P#" data-title="Davis Dolezal" data-start="1441736968" data-end="1441751368">Davis Dolezal</a><span class="instructor-label">Instructor</span></td>
                                        <td class="rth-options"><button class="btn btn-xs btn-danger rth-btn-remove" data-id="P#"><i class="fa fa-fw fa-times"></i></button>
                                        </td>
                                        <td class="rth-block rth-divider"></td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block" colspan="9">
                                            <div class="rth-proposed"><i class="fa fa-check"></i> Available</div>
                                        </td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block"></td>
                                        <td class="rth-block rth-divider"></td>
                                        <td class="rth-block"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="rth-loading"></div>
                        </div>
                    </section>
                    <section class="section show-when-recurrence-updated all-occurrences-list" id="all-occurrences-list">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Resources and Personnel
                                    <span style="font-size:17px;">( <strong>All Occurrences</strong> )
                                    </span></h2>
                                <span>* click on table to add or remove scheduled dates for resources</span>
                                <span class="pull-right" style="font-size: 12px"> <i class="fa fa-1 fa-circle"></i>
                                    <span style="font-size: 14px"> &nbsp; scheduled </span>
                                </span>
                            </div>
                        </div>
                        <div class="table-responsive table-scrollable">
                            <table class="table table-condensed table-striped all-occurrences-table">
                                <thead>
                                    <tr id="all-occurrences-dates" class="table-clickable all-occurrences-dates" style="height: 51px">
                                        <th class="all-occurrences-blank-date">Resources</th>
                                    </tr>
                                </thead>
                                <tbody class="all-occurrences-body">
                                    <tr height="38px" class="occurrences-row">
                                        <td class="resource-title" value="">
                                            <a href="#">Projector NRP 1999</a>
                                        </td>
                                    </tr>
                                    <tr height="38px" class="occurrences-row">
                                        <td class="resource-title" value="">
                                            <a href="#">Ben's Laptop w/ ie8</a>
                                        </td>
                                    </tr>
                                    <tr height="38px" class="occurrences-row">
                                        <td class="resource-title" value="">
                                            <a href="#">NA: Room West</a>
                                        </td>
                                    </tr>
                                    <tr height="38px" class="occurrences-row">
                                        <td class="resource-title" value="">
                                            <a href="#">Parker, Scott </a>
                                            <br>
                                            <span class="instructor-label">Instructor</span>
                                        </td>
                                    </tr>
                                    <tr height="38px" class="occurrences-row">
                                        <td class="resource-title" value="">
                                            <a href="#">Winner, Laura </a>
                                            <br>
                                            <span class="instructor-label">Instructor</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                    
                </section>
            </div>
            <div class="modal-footer">
            <div class="btn-group dropup">
                   <button class="btn btn-success" id="btnSave" name="SaveEvent" type="submit">Save</button>
                   <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i>
                   </button>
                   <ul class="dropdown-menu" role="menu">
                       <li>
                           <button class="btn btn-success" id="btnSaveAdd" name="SaveAddEvent" type="submit">Save and Add Another</button>
                       </li>
                       <li>
                           <button class="btn btn-success" id="btnSaveCopy" name="SaveCopyEvent" type="submit">Save and Copy</button>
                       </li>
                   </ul>
               </div>
               <a class="btn btn-default" href="#" data-dismiss="modal">Cancel</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>

<script id="eventCalendarCalendar" type="text/template">
    <div class="clndr-header">
                <div class="clndr-controls" style="top:0px !important">
                    <div class="btn btn-default clndr-previous-button"><i class="fa fa-chevron-left"></i>
                    </div>
                    <button class="clndr-date btn btn-default">
                        <%= month %>
                            <%= year %>
                    </button>
                    <div class="btn btn-default clndr-next-button"><i class="fa fa-chevron-right"></i>
                    </div>
                </div>
                <div class="btn btn-default clndr-today-button pull-right">Today</div>
            </div>
            <div class="clndr-container">
                <div class="clndr-grid">
                    <div class="days-of-the-week clearfix">
                        <% _.each(daysOfTheWeek, function(day) { %>
                            <div class="header-day">
                                <%= day %>
                            </div>
                            <% }); %>
                    </div>
                    <div class="days clearfix">
                        <% _.each(days, function(day) { %>
                            <div class="<%= day.classes %>" id="<%= day.id %>" data-date="<%= day.date.format('YYYYMMDD') %>">
                                <div class="day-wrap">
                                    <span class="day-number">
                                        <%= day.day %>
                                    </span>
                                    <% if( day.events.length> 0 ) { %>
                                        <span class="day-events">
                                            <%= day.events.length %>
                                        </span>
                                        <% } %>
                                </div>
                            </div>
                            <% }); %>
                    </div>
                </div>
                <ul class="clndr-week-controls">
                    <li data-id="0"><i class="fa fa-caret-right"></i>
                    </li>
                    <li data-id="1"><i class="fa fa-caret-right"></i>
                    </li>
                    <li data-id="2"><i class="fa fa-caret-right"></i>
                    </li>
                    <li data-id="3"><i class="fa fa-caret-right"></i>
                    </li>
                    <li data-id="4"><i class="fa fa-caret-right"></i>
                    </li>
                    <li data-id="5"><i class="fa fa-caret-right"></i>
                    </li>
            </div>
            <div class="clndr-datepicker"></div>
        </script>
<script id="eventCalendarItem" type="text/template">
    <% _.each(events, function(event) { %>

                <div class="event-lst">
                    <div class="event-time"><a href="#">
                        <% if( event.start.format('h:mm A') === '12:00am' && event.end.format('h:mm A') === '11:59pm' ) { %>
                    ALL DAY
                    <% } else { %>
                        <%= event.start.format('h:mm A') %> -
                            <%= event.end.format('h:mm A') %>
                                <% } %></a></div>
                    <div class="event-title"> <%= event.title %></div>
                    <div class="event-location">
                        <span class="event-location-institution">StoneCrest</span>
                        <span class="event-location-building">- Northside Building</span>
                        <span class="event-location-room">- Training Room A</span>
                    </div>
                    <div class="event-registration-progress">
                        <div class="event-registration-meta">
                            <span class="event-registration-meta-value">4/7</span>
                            <span class="event-registration-meta-label">Registered</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" style="width: 57%">
                            </div>
                        </div>
                    </div>
                    <div class="event-action">
                        <div class="action action-multi">
                            <div class="btn-group">
                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-fw fa-caret-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class=""><a href="/event-single-settings.php">Manage Event</a></li>
                                    <li class=""><a href="/event-single-roster.php">Manage Roster</a></li>
                                    <li class=""><a href="/event-single-message.php">Send Message</a></li>
                                    <li class="divider"><a href="#">Send Message</a></li>
                                    <li class=""><a href="/event-series-occurrences.php">Manage Series</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                
                <% }); %>
        </script>
<script src="/scripts/date.format.js"></script>
<script src="/scripts/prototype.search-filters.js"></script>
<script src="/scripts/clndr.js"></script>
<script src="/scripts/prototype.dashboard.eventCalendar.js"></script>
<script src="/scripts/prototype.index.js"></script>

<script>
    $(function() {
        window.HealthStream.eventCalendar.initialize();
        window.HealthStream.eventCalendar.getEvents();
    });
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
                healthStream.select2 = function() {
                function formatBasic(option) {
                    var userid = $(option.element).data('userid');
                    var dept = $(option.element).data('dept');
                    var action = $(option.element).data('action');
                    var disabledReason = $(option.element).data('reason');
                    var actionIcon = $(option.element).data('icon');


                    if (!option.id) return option.text; // optgroup
                    return '<div class="slat slat-select2 slat-select2-action slat-select2-nowrap"><div class="action"><i class="icon fa ' + actionIcon + ' ' + action + '"></i></div><div class="title">' + option.text + ' <span>[' + userid + ']</span></div><ul class="meta"><li><span class="meta-label">Example:</span><span class="meta-value">' + dept + '</span></li><li><span class="meta-label">Example:</span><span class="meta-value">' + dept + '</span></li><li><span class="meta-value meta-value-unavailable">' + disabledReason + '</span></li></ul></div>';

                }
                $('.slat-basic').select2({
                  minimumInputLength: 2,
                  formatResult: formatBasic,
                  escapeMarkup: function(m) {
                    return m;
                  },
                  dropdownCssClass: 'select2-slats'
                });
                }
               
                $(".select2-input").keyup(function() {
                  if ($(this).val() !== "") {
                    $(this).parents(".roster-quick-search").find(".icon-quick-search").hide();
                  } else {
                    $(this).parents(".roster-quick-search").find(".icon-quick-search").show();
                  }
                });
                //Hide search icon when user is typing in search input
                $(document).on('blur', '.select2-input', function() {
                           if ($(this).val() !== "") {
                             $(this).parents(".roster-quick-search").find(".icon-quick-search").hide();
                           } else {
                             $(this).parents(".roster-quick-search").find(".icon-quick-search").show();
                           }
                         });
            };
        $(window).on('load', function() {
            healthStream.peoplepicker.init();
            healthStream.search.datepicker();
            healthStream.search.expandcollapse();
            healthStream.select2();
        });
    }(window, jQuery));

    $(function() {

        $('.btn-events-list').click(function() {
            $('.events-list').show();
            $('.events-calendar').hide();
        });
        $('.btn-events-calendar').click(function() {
            $('.events-list').hide();
            $('.events-calendar').show();
        });
        $(".btn-group > .btn").click(function() {
            $(this).addClass("active").siblings().removeClass("active");
        });
    });

    $('.show-only-need-grading input').change(function() {
        if (this.checked) {
            $('#completed .event-lst').hide();
            $('#completed .event-lst.grading-completed').show();
        } else {
            $('#completed .event-lst').show();
        }
    });

    $('.nudge-grade-events').click(function(e) {
        e.preventDefault();
        console.log('li');
        $('#completed-events-tab').tab('show') // Select completed tab
        $('.show-only-need-grading input').click(); //Check show only events that need to be graded.
    });
    
</script>

<?= createSiteEnd(); ?>