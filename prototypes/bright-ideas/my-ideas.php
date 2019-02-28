<?php

include "includes/helpers.php";


$options = json_decode('{
    "head": {
        "title" : "Welcome to Bright Ideas"
    },
      "header": {
        "nav_main_active" : "ideas"
    },
   "focus": {
        "title": "My Ideas",
        "action": {

        },
        "meta": [

        ]
    }


}',true);

include_site_start($options);
$patterns['header']['mainNavActive'] = 'myideas';
echo createHeader($patterns['header']);
$focus = array( 'title' => 'My Ideas', ); echo createFocus($focus);
?>
    <div class="layout  layout-search">
        <div class="container">
            <section class="section section-main section-box" data-equalize="layout-columns">
                <div class="row">
                    <div class="col-md-3 hidden-xs hidden-sm">
                        <section class="section section-refinement-options equalized" data-equalize="layout-columns">
                            <header>
                                <h2>Filter My Ideas</h2>
                            </header>
                            <!--Date Range Section-->
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
                            <section class="section section-refinement-group">
                                <h3>Idea Status</h3>
                                <ul class="list-unstyled">
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="0"> New Ideas</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="1"> In Progress</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="2"> Implemented</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="3"> Not Implemented</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="4"> Assigned To Me</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="5"> Awaiting Action</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="6"> Delinquent</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="7"> Deligated To Me</label>
                                    </li>
                                </ul>
                            </section>
                        </section>
                    </div>
                    <!-- /section-sidebar -->
                    <div class="col-md-9">
                        <section class="section section-results equalized" data-equalize="layout-columns">
                            <section class="section section-results-header">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h2>Results <small>Showing 1-10 of 15</small></h2>
                                        <div class="section section-refinement-applied">
                                            <h3>Refinements</h3>
                                            <div class="tag-group">
                                                <a href="#" class="tag">Date Range<i class="fa fa-times"></i></a>
                                                <a href="#" class="tag">Idea Status<i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 hidden-xs hidden-sm">
                                        <div class="section-results-header-sort">
                                            <div class="dropdown">
                                                <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Newest - Oldest <i class="fa fa-sort"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li>
                                                        <a href="#">A - Z</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Z - A</a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="#">Newest - Oldest</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Oldest - Newest</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="section main">

                                <section class="section" id="tasks">
                                    <?php

                                    $slat = array(
                                        'title' => '<a href="./idea-information.php">Idea Name</a>',
                                        'meta' => array(
                                            array(
                                                'label' => 'Description:',
                                                'value' => 'add a light to unit 4N',
                                            ),
                                            array(
                                                'label' => 'Idea Number: ',
                                                'value' => 'MHS15.8367'

                                            ),
                                            array(
                                                'label' => 'Status: ',
                                                'value' => 'Open'

                                            ),
                                            array(
                                                'label' => 'Log Date: ',
                                                'value' => '<span class="meta-callout-label">Log Date:</span>' . date('M d, Y'),
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            )
                                        ),
                                        'action' => array(
                                            'type' => 'custom',
                                            'content' => '
                                                <div class="action action-split"><div class="btn-group"><a href="./idea-information.php" class="btn btn-default btn-sm hidden-xs">View Idea</a><a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a><ul class="dropdown-menu dropdown-menu-right"><li><a href="#modal-assign" data-toggle="modal" data-target="#modal-assign">Assign Idea</a></li></ul></div></div>
                                            ',
                                        ),
                                    );

                                    echo createSlat($slat);

                                    $slat = array(
                                        'title' => '<a href="./idea-information.php">Idea Name</a>',
                                        'meta' => array(
                                            array(
                                                'label' => 'Description:',
                                                'value' => 'add a light to unit 4N',
                                            ),
                                            array(
                                                'label' => 'Idea Number: ',
                                                'value' => 'MHS15.8367'

                                            ),
                                            array(
                                                'label' => 'Status: ',
                                                'value' => 'Open'

                                            ),
                                            array(
                                                'label' => 'Log Date: ',
                                                'value' => '<span class="meta-callout-label">Log Date:</span>' . date('M d, Y'),
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            )
                                        ),
                                        'action' => array(
                                            'type' => 'custom',
                                            'content' => '
                                                <div class="action action-split"><div class="btn-group"><a href="./idea-information.php" class="btn btn-default btn-sm hidden-xs">View Idea</a><a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a><ul class="dropdown-menu dropdown-menu-right"><li><a href="#modal-assign" data-toggle="modal" data-target="#modal-assign">Assign Idea</a></li></ul></div></div>
                                            ',
                                        ),
                                    );

                                    echo createSlat($slat);

                                    $slat = array(
                                        'title' => '<a href="./idea-information.php">Idea Name</a>',
                                        'meta' => array(
                                            array(
                                                'label' => 'Description:',
                                                'value' => 'add a light to unit 4N',
                                            ),
                                            array(
                                                'label' => 'Idea Number: ',
                                                'value' => 'MHS15.8367'

                                            ),
                                            array(
                                                'label' => 'Status: ',
                                                'value' => 'Open'

                                            ),
                                            array(
                                                'label' => 'Log Date: ',
                                                'value' => '<span class="meta-callout-label">Log Date:</span>' . date('M d, Y'),
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            )
                                        ),
                                        'action' => array(
                                            'type' => 'custom',
                                            'content' => '
                                                <div class="action action-split"><div class="btn-group"><a href="./idea-information.php" class="btn btn-default btn-sm hidden-xs">View Idea</a><a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a><ul class="dropdown-menu dropdown-menu-right"><li><a href="#modal-assign" data-toggle="modal" data-target="#modal-assign">Assign Idea</a></li></ul></div></div>
                                            ',
                                        ),
                                    );

                                    echo createSlat($slat);

                                    $slat = array(
                                        'title' => '<a href="./idea-information.php">Idea Name</a>',
                                        'meta' => array(
                                            array(
                                                'label' => 'Description:',
                                                'value' => 'add a light to unit 4N',
                                            ),
                                            array(
                                                'label' => 'Idea Number: ',
                                                'value' => 'MHS15.8367'

                                            ),
                                            array(
                                                'label' => 'Status: ',
                                                'value' => 'Open'

                                            ),
                                            array(
                                                'label' => 'Log Date: ',
                                                'value' => '<span class="meta-callout-label">Log Date:</span>' . date('M d, Y'),
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            )
                                        ),
                                        'action' => array(
                                            'type' => 'custom',
                                            'content' => '
                                                <div class="action action-split"><div class="btn-group"><a href="./idea-information.php" class="btn btn-default btn-sm hidden-xs">View Idea</a><a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a><ul class="dropdown-menu dropdown-menu-right"><li><a href="#modal-assign" data-toggle="modal" data-target="#modal-assign">Assign Idea</a></li></ul></div></div>
                                            ',
                                        ),
                                    );

                                    echo createSlat($slat);

                                    $slat = array(
                                        'title' => '<a href="./idea-information.php">Idea Name</a>',
                                        'meta' => array(
                                            array(
                                                'label' => 'Description:',
                                                'value' => 'add a light to unit 4N',
                                            ),
                                            array(
                                                'label' => 'Idea Number: ',
                                                'value' => 'MHS15.8367'

                                            ),
                                            array(
                                                'label' => 'Status: ',
                                                'value' => 'Open'

                                            ),
                                            array(
                                                'label' => 'Log Date: ',
                                                'value' => '<span class="meta-callout-label">Log Date:</span>' . date('M d, Y'),
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            )
                                        ),
                                        'action' => array(
                                            'type' => 'custom',
                                            'content' => '
                                                <div class="action action-split"><div class="btn-group"><a href="./idea-information.php" class="btn btn-default btn-sm hidden-xs">View Idea</a><a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a><ul class="dropdown-menu dropdown-menu-right"><li><a href="#modal-assign" data-toggle="modal" data-target="#modal-assign">Assign Idea</a></li></ul></div></div>
                                            ',
                                        ),
                                    );

                                    echo createSlat($slat);

                                    $slat = array(
                                        'title' => '<a href="./idea-information.php">Idea Name</a>',
                                        'meta' => array(
                                            array(
                                                'label' => 'Description:',
                                                'value' => 'add a light to unit 4N',
                                            ),
                                            array(
                                                'label' => 'Idea Number: ',
                                                'value' => 'MHS15.8367'

                                            ),
                                            array(
                                                'label' => 'Status: ',
                                                'value' => 'Open'

                                            ),
                                            array(
                                                'label' => 'Log Date: ',
                                                'value' => '<span class="meta-callout-label">Log Date:</span>' . date('M d, Y'),
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            )
                                        ),
                                        'action' => array(
                                            'type' => 'custom',
                                            'content' => '
                                                <div class="action action-split"><div class="btn-group"><a href="./idea-information.php" class="btn btn-default btn-sm hidden-xs">View Idea</a><a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a><ul class="dropdown-menu dropdown-menu-right"><li><a href="#modal-assign" data-toggle="modal" data-target="#modal-assign">Assign Idea</a></li></ul></div></div>
                                            ',
                                        ),

                                    );

                                    echo createSlat($slat);
                                    ?>

                                    <?php
                                        $stickybar = array(
                                            'sets' => array(
                                                array(
                                                    'position' => 'left',
                                                    'classes' => array('visible-xs'),
                                                    'html' => '<a href="#modal-refine" class="btn btn-success" data-toggle="modal">Refine Results</a>',
                                                ),
                                                array(
                                                    'position' => 'right',
                                                    'classes' => array('hidden-xs'),
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
                                                    'classes' => array('visible-xs'),
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
                            </section>
                        </section>

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
                    <section class="section section-refinement-group">
                                <h3>Idea Status</h3>
                                <ul class="list-unstyled">
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="0"> New Ideas</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="1"> In Progress</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="2"> Implemented</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="3"> Not Implemented</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="4"> Assigned To Me</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="5"> Awaiting Action</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="6"> Delinquent</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="7"> Deligated To Me</label>
                                    </li>
                                </ul>
                            </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" data-dismiss="modal">Update</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal assign to leader -->
    <div id="modal-assign" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Assign Idea</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <div class="form-group">
                            <label class="control-label " for="text2">
                                Assign an idea to a leader
                            </label>
                            <select class="form-control slat-basic" id="slat-basic" data-placeholder="Select a leader">
                                <option></option>
                                <?php $i = 1; while ( $i <= 100) { ?>
                                <option data-dept="Facility" data-userid="user<?= $i ?>" value="Name <?= $i ?>">Name
                                    <?= $i ?>
                                </option>
                                <?php $i++; } ?>
                            </select>
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
    <?=
createFooter($patterns['footer']);
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
            healthStream.select2 = function() {
                function formatBasic(option) {
                    var userid = $(option.element).data('userid');
                    var dept = $(option.element).data('dept');
                    if (!option.id) return option.text; // optgroup
                    return '<div class="slat slat-select2"><div class="title">' + option.text + ' <span></span></div><ul class="meta"><li><span class="meta-label">Example:</span><span class="meta-value">' + dept + '</span></li></ul></div>';
                }


                $('.slat-basic').select2({
                    minimumInputLength: 1,
                    formatResult: formatBasic,
                    escapeMarkup: function(m) {
                        return m;
                    },
                    dropdownCssClass: 'select2-slats'
                });
            };

            $(window).on('load', function() {

                healthStream.datepicker();
                healthStream.select2();

            });
        }(window, jQuery));
        </script>
        <?php
include_site_end($options);
?>
