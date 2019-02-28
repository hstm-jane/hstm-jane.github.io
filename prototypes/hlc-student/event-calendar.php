<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Event Calendar';
$patterns['header']['mainNavActive'] = 'calendar';
$patterns['focus']['type'] = 'search';
$patterns['focus']['title'] = 'Upcoming Events';
$patterns['focus']['search']['url'] = 'catalog-results.php';
$patterns['search']['filters'] = array(
                array(
                    "state" => 'static', // static / open / closed
                    "header" => '',
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
                    "header" => 'Building',
                    "controls" => array(
                       '<select class="form-control js-select2">
                            <option>Building 1</option>
                            <option>Building 2</option>
                            <option>Building 3</option>
                            <option>Building 4</option>
                            <option>Building 5</option>
                        </select>'
                    )
                ),
                array(
                    "state" => 'closed',
                    "header" => 'Location',
                    "controls" => array(
                       '<div class="form-group"><input type="text" class="form-control" placeholder="Search for Building/Location"></div>'
                    )
                ),
                array(
                    "state" => 'static',
                    "header" => 'Registration',
                    "controls" => array(
                       '<ul class="list-unstyled">
                            <li class="checkbox">
                                <label><input type="checkbox" checked="checked" name="showFullClasses">Show Full Classes and Events </label>
                            </li>
                            <li class="checkbox">
                                <label><input type="checkbox" name="showOnlySelfRegistrationClasses">Show only classes and events that allow self-registration </label>
                            </li>
                        </ul>'

                    )
                )
            );
?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout layout-search">
    <div class="container">

        <section class="section section-main section-box">
            <section class="text-center" style="padding-bottom: 15px; border-bottom: 1px solid #eee;">
                <h4>These optional classes and events are available as opportunities for your professional and personal development.</h4>
            </section>

            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm">
                    <section class="section section-filters" data-equalize="layout-columns">

                    <h2>Refine Results</h2>
                    <?= createSearch($patterns['search']); ?>


                    </section>

                </div>
                <div class="col-md-9">
                    <section class="section section-results" data-equalize="layout-columns">



                        <section class="section">
                            <h2>Results <small>Showing 1-10 of 15</small></h2>
                            <?php


                            $class = array(
                                "attributes" => array(
                                    array("class", "slat slat-callout"),
                                ),
                                "title" => array(
                                    "text" => "Example Class",
                                    "attributes" => array(
                                        array("href","#"),
                                    )
                                ),
                                "meta" => array(
                                    array(
                                        "type" => "Live Class"
                                    ),
                                    array(
                                        "label" => "Open Seats:",
                                        "value" => "20",
                                    ),
                                    array(
                                        "label" => "Self-Registration:",
                                        "value" => "Available"
                                    ),
                                    array(
                                        "class" => "meta-callout",
                                        "label" => "Starts:",
                                        "value" => "Mar 15, 2016 at 7:00am CT"
                                    ),
                                ),
                                "action" => array(
                                    "type" => "link",
                                    "text" => "View Class",
                                    "attributes" => array(
                                        array("href","#"),
                                    ),
                                ),
                            );
                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-callout')),
                                ),
                                'meta' => array(
                                    array(
                                        'type' => 'Live Class',
                                    ),
                                    array(
                                        'label' => 'Open Seats:',
                                        'value' => '20',
                                    ),
                                    array(
                                        'label' => 'Self-Registration:',
                                        'value' => 'Available',
                                    ),
                                    array(
                                        'label' => 'Starts:',
                                        'value' => 'Mar 15, 2016, 7:00am CT',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'View Class',
                                    'link' => '#',
                                )
                            );

                            for ( $i=1; $i<=10; $i++ ) {
                                $slat['title'] = '<a href="#">Example Class '. $i .'</a>';
                                $slat['meta'][1]['value'] = rand(0,20);
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
                                                    <li class="active"><a href="#">10 per page</a></li>
                                                    <li><a href="#">20 per page</a></li>
                                                    <li><a href="#">50 per page</a></li>
                                                    <li><a href="#">100 per page</a></li>
                                                    <li><a href="#">250 per page</a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default disabled"><i class="fa fa-chevron-left"></i></a>
                                                <a href="#" class="btn btn-default disabled"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        ',
                                    ),

                                    array(
                                        'position' => 'right',
                                        'classes' => array('visible-xs','visible-sm'),
                                        'html' => '
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default disabled"><i class="fa fa-chevron-left"></i></a>
                                                <a href="#" class="btn btn-default disabled"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        ',
                                    ),
                                ),
                            );
                            echo createStickybar($stickybar);
                        ?>

                    </section><!-- /section-main -->
                </div><!-- /column -->
            </div><!-- /row -->
        </section>


    </div><!-- /container -->
</div><!-- /layout -->


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

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script src="/scripts/prototype.search-filters.js"></script>

<script>
    $(function(){
        $('.js-select2').select2();
    });
</script>
<?= createSiteEnd(); ?>