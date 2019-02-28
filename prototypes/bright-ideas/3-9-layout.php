<?php

include "includes/helpers.php";

$options = json_decode('{
    "head": {
        "title" : "Welcome to Bright Ideas"
    },
      "header": {
        "nav_main_active" : ""
    },
    "focus": {
        "title": "3/9 layout",

        "meta": [

        ]
    }
}',true);

include_site_start($options);
//include_site_header($options);
echo createHeader($patterns['header']);
include_renewed_focus_bar($options);
?>
    <style>

    </style>
    <div class="layout  layout-search">
        <div class="container">
            <section class="section section-main section-box" data-equalize="layout-columns">
                <div class="row">
                    <div class="col-md-3 hidden-xs hidden-sm">
                        <section class="section section-refinement-options equalized" data-equalize="layout-columns">
                            <header>
                                <h2>Header</h2>
                            </header>
                            <section class="section section-refinement-group">
                                <h3>sub-header</h3>
                                <div class="form-group">

                                </div>
                            </section>
                        </section>
                    </div>
                    <!-- /section-sidebar -->
                    <div class="col-md-9">
                        <section class="section main">

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'position' => 'left',
                                            'classes' => array('visible-xs','visible-sm'),
                                            'html' => '<a href="#modal-refine" class="btn btn-success" data-toggle="modal">Refine Results</a>',
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
                    </div>
                    <!-- /column -->
                </div>
                <!-- /row -->
            </section>
            <!-- /section -->
        </div>
        <!-- /container -->
    </div>
    <!-- /layout -->
    <div id="modal-refine" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Refine Results</h4>
                </div>
                <div class="modal-body">
                    <section class="section section-refinement-group">
                        <h3>Date Range</h3>
                        <div class="form-group">
                            <label class="control-label">From:</label>
                            <div class="input-group bootstrap-datepicker">
                                <input type="text" class="form-control datepicker" id="event-start-date" value="01/13/2016" tabindex="1">
                                <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Through:</label>
                            <div class="input-group bootstrap-datepicker">
                                <input type="text" class="form-control datepicker" id="event-end-date" value="01/13/2016" tabindex="1">
                                <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" data-dismiss="modal">Update</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <?php
include_site_footer($options);
include_site_scripts($options);
?>
        <script>
        (function(window, $) {
            'use strict';
            window.HealthStream = window.HealthStream || {};
            var healthStream = window.HealthStream;

            healthStream.datepicker = function() {
                $('.datepicker').datepicker({
                    autoclose: true
                });
            };
            $(window).on('load', function() {

                healthStream.datepicker();

            });
        }(window, jQuery));
        </script>
        <?php
include_site_end($options);
?>
