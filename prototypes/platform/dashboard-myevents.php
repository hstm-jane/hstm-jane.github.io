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

<div class="layout layout-search layout-dashboard layout-dashboard-myevents">
    <div class="container">
        <section class="section section-maisn ">
            <div class="row">
                <div class="col-lg-9">
                    <div class="panel panel-default mt-lg">

                        <div class="panel-body">
                            <div class="row">

                                <!-- START Refine Results -->
                                <div class="col-md-3 hidden-xs hidden-sm">
                                    <section class="section section-filters " data-equalize="layout-columns" >
                                        <h3>Refine Results</h3>
                                        <div class="search-filter search-filter--desktop">
                                            <div class="search-filter__header">
                                                <div class="search-filter__title">Applied Filters
                                                </div>
                                            </div>


                                            <div class="tag-group"><a href="#" class="tag  ">
                                                    State<i class="fa fa-times"></i> </a>
                                                <a href="#" class="tag  ">
                                                    Country<i class="fa fa-times"></i> </a>
                                            </div>
                                        </div>

                                        <div class="search-filters">
                                            <div class="search-filter search-filter--mobile">
                                                <div class="search-filter__header">
                                                    <div class="search-filter__title">Sort</div>
                                                </div>
                                                <div class="search-filter__control">
                                                    <div class="select2-container form-control js-select2" id="s2id_autogen1"><a href="javascript:void(0)" class="select2-choice" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-2">Name</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2">
                                                        <div class="select2-drop select2-display-none select2-with-searchbox">
                                                            <div class="select2-search"> <label for="s2id_autogen2_search" class="select2-offscreen"></label> <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder=""> </div>
                                                            <ul class="select2-results" role="listbox" id="select2-results-2"> </ul>
                                                        </div>
                                                    </div><select class="form-control js-select2 select2-offscreen" tabindex="-1" title="">
                                                        <option>Name</option>
                                                        <option>ID</option>
                                                        <option>Department</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="search-filter">
                                                <div class="search-filter__header">
                                                    <div class="search-filter__title">Date Range</div>
                                                </div>
                                                <div class="search-filter__control">
                                                    <div class="form-group">
                                                        <label class="control-label">Start</label>
                                                        <div class="input-group bootstrap-datepicker">
                                                            <input type="text" class="form-control datepicker" id="event-start-date" value="" tabindex="1">
                                                            <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="search-filter__control">
                                                    <div class="form-group">
                                                        <label class="control-label">End</label>
                                                        <div class="input-group bootstrap-datepicker">
                                                            <input type="text" class="form-control datepicker" id="event-end-date" value="" tabindex="1">
                                                            <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="search-filter search-filter--closed">
                                                <div class="search-filter__header search-filter__toggle">
                                                    <div class="search-filter__title">Building/Location Name</div>
                                                    <div class="search-filter__arrow"><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-right"></i></div>
                                                </div>
                                                <div class="search-filter__control">
                                                    <div class="form-group"><input type="text" class="form-control" placeholder="Search for Building/Location"></div>
                                                </div>
                                            </div>
                                            <div class="search-filter search-filter--closed">
                                                <div class="search-filter__header search-filter__toggle">
                                                    <div class="search-filter__title">Address</div>
                                                    <div class="search-filter__arrow"><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-right"></i></div>
                                                </div>
                                                <div class="search-filter__control">
                                                    <div class="form-group">
                                                        <label class="control-label">Country</label>
                                                        <input type="text" class="form-control" placeholder="Country">
                                                    </div>
                                                </div>
                                                <div class="search-filter__control">
                                                    <div class="form-group">
                                                        <label class="control-label">State</label>
                                                        <input type="text" class="form-control" placeholder="State">
                                                    </div>
                                                </div>
                                                <div class="search-filter__control">
                                                    <div class="form-group">
                                                        <label class="control-label">City</label>
                                                        <input type="text" class="form-control" placeholder="City">
                                                    </div>
                                                </div>
                                                <div class="search-filter__control">
                                                    <div class="form-group">
                                                        <label class="control-label">Zipcode</label>
                                                        <input type="text" class="form-control" placeholder="Zipcode">
                                                    </div>
                                                </div>
                                                <div class="search-filter__control"><button type="submit" class="btn btn-default btn-sm">Apply</button>
                                                </div>
                                            </div>
                                            <div class="search-filter search-filter--closed">
                                                <div class="search-filter__header search-filter__toggle">
                                                    <div class="search-filter__title">Equipment</div>
                                                    <div class="search-filter__arrow"><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-right"></i></div>
                                                </div>
                                                <div class="search-filter__control">
                                                    <div class="form-group"><input type="text" class="form-control" placeholder="Search for Equipment"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                </div>

                                <!--END Refine Results-->

                                <!--START My Events-->
                                <div class="col-md-9">
                                    <section class="section section-results " data-equalize="layout-columns" >
                                        <section class="section section-results-header">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h2>Results <small>Showing 1-10 of 15</small></h2>
                                                    <div class="search-filter search-filter--mobile">
                                                        <div class="search-filter__control">

                                                            <div class="tag-group"><a href="#" class="tag  ">
                                                                    State<i class="fa fa-times"></i> </a>
                                                                <a href="#" class="tag  ">
                                                                    Country<i class="fa fa-times"></i> </a>
                                                            </div>
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

                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title"><a class="event-title-link" href="#modal-event" data-toggle="modal">Leadership Training</a></div>
                                                        <ul class="meta">

                                                            <li class="meta-callout"><span class="meta-value">
                                                                    <div>Jul 15, 2016 at 3:30pm - </div>
                                                                    <div>Jul 25, 2016 at 3:30pm</div>
                                                                </span></li>
                                                        </ul>
                                                        <div class="action action-multi">
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-fw fa-caret-down"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li class=""><a href="/event-single-settings.php">Manage Event</a></li>
                                                                    <li class=""><a href="/event-single-roster.php">Manage Roster</a></li>
                                                                    <li><a href="#modal-message-group" data-toggle="modal">Send Message</a></li>
                                                                    <li class="divider"><a href="#"></a></li>
                                                                    <li class=""><a href="/event-series-occurrences.php">Manage Series</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h4>Personnel</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Stephanie Jupiter</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">Function:</span><span class="meta-value">Instructor</span></li>
                                                                            <li><span class="meta-label">RANK:</span><span class="meta-value">Mentor</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                            <section class="section">
                                                                <h4>Location(s)</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Laerdal Medical, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value"> 123 Main St Birmingham, AL United States 12345</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="slat slat-callout">
                                                                    <div class="slat-default">
                                                                        <div class="title">New Simulation Center, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value">456 Main St Nashville, TN United States 67890</span></li>
                                                                            <li></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle" data-toggle-text="Show Additional Information|Show Less Information">Show Additional Information<i class="fa fa-fw fa-caret-down"></i></a>
                                                    </div>
                                                </div>


                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title"><a class="event-title-link" href="#modal-event" data-toggle="modal">Leadership Training</a></div>
                                                        <ul class="meta">

                                                            <li class="meta-callout"><span class="meta-value">
                                                                    <div>Jul 15, 2016 at 3:30pm</div>
                                                                </span></li>
                                                        </ul>
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
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h4>Personnel</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Stephanie Jupiter</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">Function:</span><span class="meta-value">Instructor</span></li>
                                                                            <li><span class="meta-label">RANK:</span><span class="meta-value">Mentor</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                            <section class="section">
                                                                <h4>Location(s)</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Laerdal Medical, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value"> 123 Main St Birmingham, AL United States 12345</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="slat slat-callout">
                                                                    <div class="slat-default">
                                                                        <div class="title">New Simulation Center, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value">456 Main St Nashville, TN United States 67890</span></li>
                                                                            <li></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle" data-toggle-text="Show Additional Information|Show Less Information">Show Additional Information<i class="fa fa-fw fa-caret-down"></i></a>
                                                    </div>
                                                </div>


                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title"><a class="event-title-link" href="#modal-event" data-toggle="modal">Leadership Training</a></div>
                                                        <ul class="meta">

                                                            <li class="meta-callout"><span class="meta-value">
                                                                    <div>Jul 15, 2016 at 3:30pm</div>
                                                                </span></li>
                                                        </ul>
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
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h4>Personnel</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Stephanie Jupiter</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">Function:</span><span class="meta-value">Instructor</span></li>
                                                                            <li><span class="meta-label">RANK:</span><span class="meta-value">Mentor</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                            <section class="section">
                                                                <h4>Location(s)</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Laerdal Medical, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value"> 123 Main St Birmingham, AL United States 12345</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="slat slat-callout">
                                                                    <div class="slat-default">
                                                                        <div class="title">New Simulation Center, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value">456 Main St Nashville, TN United States 67890</span></li>
                                                                            <li></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle" data-toggle-text="Show Additional Information|Show Less Information">Show Additional Information<i class="fa fa-fw fa-caret-down"></i></a>
                                                    </div>
                                                </div>


                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title"><a class="event-title-link" href="#modal-event" data-toggle="modal">Leadership Training</a></div>
                                                        <ul class="meta">

                                                            <li class="meta-callout"><span class="meta-value">
                                                                    <div>Jul 15, 2016 at 3:30pm</div>
                                                                </span></li>
                                                        </ul>
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
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h4>Personnel</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Stephanie Jupiter</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">Function:</span><span class="meta-value">Instructor</span></li>
                                                                            <li><span class="meta-label">RANK:</span><span class="meta-value">Mentor</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                            <section class="section">
                                                                <h4>Location(s)</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Laerdal Medical, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value"> 123 Main St Birmingham, AL United States 12345</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="slat slat-callout">
                                                                    <div class="slat-default">
                                                                        <div class="title">New Simulation Center, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value">456 Main St Nashville, TN United States 67890</span></li>
                                                                            <li></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle" data-toggle-text="Show Additional Information|Show Less Information">Show Additional Information<i class="fa fa-fw fa-caret-down"></i></a>
                                                    </div>
                                                </div>


                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title"><a class="event-title-link" href="#modal-event" data-toggle="modal">Leadership Training</a></div>
                                                        <ul class="meta">

                                                            <li class="meta-callout"><span class="meta-value">
                                                                    <div>Jul 15, 2016 at 3:30pm</div>
                                                                </span></li>
                                                        </ul>
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
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h4>Personnel</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Stephanie Jupiter</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">Function:</span><span class="meta-value">Instructor</span></li>
                                                                            <li><span class="meta-label">RANK:</span><span class="meta-value">Mentor</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                            <section class="section">
                                                                <h4>Location(s)</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Laerdal Medical, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value"> 123 Main St Birmingham, AL United States 12345</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="slat slat-callout">
                                                                    <div class="slat-default">
                                                                        <div class="title">New Simulation Center, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value">456 Main St Nashville, TN United States 67890</span></li>
                                                                            <li></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle" data-toggle-text="Show Additional Information|Show Less Information">Show Additional Information<i class="fa fa-fw fa-caret-down"></i></a>
                                                    </div>
                                                </div>


                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title"><a class="event-title-link" href="#modal-event" data-toggle="modal">Leadership Training</a></div>
                                                        <ul class="meta">

                                                            <li class="meta-callout"><span class="meta-value">
                                                                    <div>Jul 15, 2016 at 3:30pm</div>
                                                                </span></li>
                                                        </ul>
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
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h4>Personnel</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Stephanie Jupiter</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">Function:</span><span class="meta-value">Instructor</span></li>
                                                                            <li><span class="meta-label">RANK:</span><span class="meta-value">Mentor</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                            <section class="section">
                                                                <h4>Location(s)</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Laerdal Medical, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value"> 123 Main St Birmingham, AL United States 12345</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="slat slat-callout">
                                                                    <div class="slat-default">
                                                                        <div class="title">New Simulation Center, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value">456 Main St Nashville, TN United States 67890</span></li>
                                                                            <li></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle" data-toggle-text="Show Additional Information|Show Less Information">Show Additional Information<i class="fa fa-fw fa-caret-down"></i></a>
                                                    </div>
                                                </div>


                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title"><a class="event-title-link" href="#modal-event" data-toggle="modal">Leadership Training</a></div>
                                                        <ul class="meta">

                                                            <li class="meta-callout"><span class="meta-value">
                                                                    <div>Jul 15, 2016 at 3:30pm</div>
                                                                </span></li>
                                                        </ul>
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
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h4>Personnel</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Stephanie Jupiter</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">Function:</span><span class="meta-value">Instructor</span></li>
                                                                            <li><span class="meta-label">RANK:</span><span class="meta-value">Mentor</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                            <section class="section">
                                                                <h4>Location(s)</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Laerdal Medical, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value"> 123 Main St Birmingham, AL United States 12345</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="slat slat-callout">
                                                                    <div class="slat-default">
                                                                        <div class="title">New Simulation Center, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value">456 Main St Nashville, TN United States 67890</span></li>
                                                                            <li></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle" data-toggle-text="Show Additional Information|Show Less Information">Show Additional Information<i class="fa fa-fw fa-caret-down"></i></a>
                                                    </div>
                                                </div>


                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title"><a class="event-title-link" href="#modal-event" data-toggle="modal">Leadership Training</a></div>
                                                        <ul class="meta">

                                                            <li class="meta-callout"><span class="meta-value">
                                                                    <div>Jul 15, 2016 at 3:30pm</div>
                                                                </span></li>
                                                        </ul>
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
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h4>Personnel</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Stephanie Jupiter</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">Function:</span><span class="meta-value">Instructor</span></li>
                                                                            <li><span class="meta-label">RANK:</span><span class="meta-value">Mentor</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                            <section class="section">
                                                                <h4>Location(s)</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Laerdal Medical, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value"> 123 Main St Birmingham, AL United States 12345</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="slat slat-callout">
                                                                    <div class="slat-default">
                                                                        <div class="title">New Simulation Center, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value">456 Main St Nashville, TN United States 67890</span></li>
                                                                            <li></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle" data-toggle-text="Show Additional Information|Show Less Information">Show Additional Information<i class="fa fa-fw fa-caret-down"></i></a>
                                                    </div>
                                                </div>


                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title"><a class="event-title-link" href="#modal-event" data-toggle="modal">Leadership Training</a></div>
                                                        <ul class="meta">

                                                            <li class="meta-callout"><span class="meta-value">
                                                                    <div>Jul 15, 2016 at 3:30pm</div>
                                                                </span></li>
                                                        </ul>
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
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h4>Personnel</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Stephanie Jupiter</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">Function:</span><span class="meta-value">Instructor</span></li>
                                                                            <li><span class="meta-label">RANK:</span><span class="meta-value">Mentor</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                            <section class="section">
                                                                <h4>Location(s)</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Laerdal Medical, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value"> 123 Main St Birmingham, AL United States 12345</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="slat slat-callout">
                                                                    <div class="slat-default">
                                                                        <div class="title">New Simulation Center, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value">456 Main St Nashville, TN United States 67890</span></li>
                                                                            <li></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle" data-toggle-text="Show Additional Information|Show Less Information">Show Additional Information<i class="fa fa-fw fa-caret-down"></i></a>
                                                    </div>
                                                </div>


                                                <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title"><a class="event-title-link" href="#modal-event" data-toggle="modal">Leadership Training</a></div>
                                                        <ul class="meta">

                                                            <li class="meta-callout"><span class="meta-value">
                                                                    <div>Jul 15, 2016 at 3:30pm</div>
                                                                </span></li>
                                                        </ul>
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
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h4>Personnel</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Stephanie Jupiter</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">Function:</span><span class="meta-value">Instructor</span></li>
                                                                            <li><span class="meta-label">RANK:</span><span class="meta-value">Mentor</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                            <section class="section">
                                                                <h4>Location(s)</h4>
                                                                <div class="slat">
                                                                    <div class="slat-default">
                                                                        <div class="title">Laerdal Medical, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value"> 123 Main St Birmingham, AL United States 12345</span></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="slat slat-callout">
                                                                    <div class="slat-default">
                                                                        <div class="title">New Simulation Center, Classroom A</div>
                                                                        <ul class="meta">
                                                                            <li><span class="meta-label">ADDRESS:</span><span class="meta-value">456 Main St Nashville, TN United States 67890</span></li>
                                                                            <li></li>
                                                                        </ul>
                                                                        <div class="action">
                                                                            <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle" data-toggle-text="Show Additional Information|Show Less Information">Show Additional Information<i class="fa fa-fw fa-caret-down"></i></a>
                                                    </div>
                                                </div>

                                            </section>

                                            <section class="section">
                                                <!-- stickybar -->
                                                <div class="stickybar sticky">
                                                    <div class="stickybar-floater">
                                                        <div class="stickybar-outer">
                                                            <div class="stickybar-inner">
                                                                <div class="stickybar-left">
                                                                    <div class="visible-xs visible-sm"><a href="#modal-filter" class="btn btn-success" data-toggle="modal">Refine Results</a></div>
                                                                </div>
                                                                <div class="stickybar-right">
                                                                    <div class="hidden-xs hidden-sm">
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
                                                                    </div>
                                                                    <div class="visible-xs visible-sm">
                                                                        <div class="btn-group">
                                                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /stickybar -->
                                                </div>
                                            </section>

                                        </section>
                                        <!-- /section-main -->
                                    </section>
                                </div>
                                <!--END My Events-->
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default mt-lg">
                        <div class="panel-heading">
                            <div class="panel-title">My NRP Instructor Card</div>
                        </div>
                        <div class="panel-body" style="position:relative;min-height:150px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-lg-12 pl0 pr0">Status: <span class="label label-primary">Active</span></div>
                                    <div class="col-md-6 col-lg-12 pl0 pr0">NRP Number: 1234567</div>
                                    <div class="col-md-6 col-lg-12 pl0 pr0 pb-sm">Rank: Instructor</div>
                                    <div class="col-md-6 col-lg-12 pl0 pr0"><span style="font-size:16px;color:#FC7B00; font-weight:600;">Expiring Soon</span></div>
                                </div>
                                <div class="row mb-sm">
                                    <div class="col-sm-6 pl0 pr0">Issued: 12/19/2016</div>
                                    <div class="col-sm-6 pl0 pr0">Expires: 12/19/2018</div>
                                </div>
                            </div>
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
                        <div class="panel-body text-center">
                           Search details
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
                // healthStream.search.datepicker = function() {
                //     $('.datepicker').datepicker({});
                // },
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

                };
            $(window).on('load', function() {
                healthStream.peoplepicker.init();
                healthStream.search.datepicker();
                healthStream.search.expandcollapse();

            });
        }(window, jQuery));
    </script>

    <?= createSiteEnd(); ?>