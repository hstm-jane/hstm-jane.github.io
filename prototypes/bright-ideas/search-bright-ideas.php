<?php

include "includes/helpers.php";
$patterns['search']['filters'] = array(
                array (
                    'visible' => 'mobile',
                    'header' => 'Sort',
                    'controls' => array(
                        '<select class="form-control js-select2">
                            <option>A - Z</option>
                            <option>Z - A</option>
                            <option>Date: Newest to Oldest</option>
                            <option>Date: Oldest to Newest</option>
                        </select>'
                    )
                ),
                array(
                    "state" => 'static', // static / open / closed
                    "header" => 'Submitter',
                    "controls" => array(
                       '<select class="form-control slat-basic" id="slat-basic" data-placeholder="Tracy Yowell">
                            <option></option>
                            <option data-dept="Facility" data-userid="user1" value="Name 1">Name
                               1
                            </option>
                            <option data-dept="Facility" data-userid="user1" value="Name 1">Name
                               2
                            </option>
                            <option data-dept="Facility" data-userid="user1" value="Name 1">Name
                               3
                            </option>

                        </select>',

                    )
                ),
                array(
                    "state" => 'static',
                    "header" => 'Facility',
                    "controls" => array(
                       '<select class="select form-control" id="select2" name="select2">
                            <option value="First Choice">
                                First Choice
                            </option>
                            <option value="Second Choice">
                                Second Choice
                            </option>
                            <option value="Third Choice">
                                Third Choice
                            </option>
                        </select>'

                    )
                ),
                array(
                    "state" => 'static',
                    "header" => 'Department',
                    "controls" => array(
                       '<select class="select form-control" id="select2" name="select2">
                            <option value="First Choice">
                                First Choice
                            </option>
                            <option value="Second Choice">
                                Second Choice
                            </option>
                            <option value="Third Choice">
                                Third Choice
                            </option>
                        </select>'

                    )
                ),
                array(
                    "state" => 'static',
                    "header" => 'Status',
                    "controls" => array(
                       '<select class="select form-control" id="select2" name="select2">
                            <option value="First Choice">
                                All
                            </option>
                            <option value="Second Choice">
                                New
                            </option>
                            <option value="Third Choice">
                                Open
                            </option>
                        </select>
                        '
                    ),
                ),
                array(
                    "state" => 'static',
                    "header" => 'Search Idea # or Text',
                    "controls" => array(
                       '<select class="form-control slat-basic" id="slat-basic" data-placeholder="">
                            <option></option>
                            <option data-dept="Facility" data-userid="user1" value="Name 1">Name 1                                    1
                            </option>
                            <option data-dept="Facility" data-userid="user2" value="Name 1">Name 2                                    2
                            </option>
                            <option data-dept="Facility" data-userid="user3" value="Name 1">Name 3                                    3
                            </option>

                        </select>
                        '
                    ),
                ),
    );
$patterns['search']['tags'] =array(
    array(
        'value' => 'Submitter',
        'href' => '#',
        'class' => '',
    ),
    array(
        'value' => 'Facility',
        'href' => '#',
        'class' => ''
    ),
    array(
        'value' => 'Department',
        'href' => '#',
        'class' => ''
    ),
    array(
        'value' => 'Status',
        'href' => '#',
        'class' => ''
    ),
    array(
        'value' => 'Idea # or Text',
        'href' => '#',
        'class' => ''
    ),
    );

$options = json_decode('{
    "head": {
        "title" : "Welcome to Bright Ideas"
    },
    "header": {
        "nav_main_active" : "search"
    },
    "focus": {
        "title": "Search Bright Ideas",
        "action": {
            "label": "Submit New Idea",
            "link": "./new-idea.php"
        },
        "meta": [

        ]
    }
}',true);

include_site_start($options);
$patterns['header']['mainNavActive'] = 'search';
echo createHeader($patterns['header']);
include_renewed_focus_bar($options);
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
                        <section class="section section-results equalized" data-equalize="layout-columns" style="min-height: 1091px;">
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
                                                <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: A - Z <i class="fa fa-sort"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="active">
                                                        <a href="#">A - Z</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Z - A</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Date: Newest to Oldest</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Date: Oldest to Newest</a>
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
                                'title' => '<a href="./idea-information.php">MHS15.8367</a>',
                                'meta' => array(
                                    array(
                                        'label' => 'Submitter:',
                                        'value' => 'Virtu USA Test',
                                    ),
                                    array(
                                        'label' => 'Brief Description: ',
                                        'value' => 'Cross train the nursing department employees and use them for basic diagnostic services'

                                    ),
                                    array(
                                        'label' => 'Status: ',
                                        'value' => 'Status: Implemented',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'View Idea',
                                    'link' => './idea-information.php',
                                )
                            );

                            echo createSlat($slat);

                            $slat = array(
                                'title' => '<a href="./idea-information.php">MHS15.8367</a>',
                                'meta' => array(
                                    array(
                                        'label' => 'Submitter:',
                                        'value' => 'Virtu USA Test',
                                    ),
                                    array(
                                        'label' => 'Brief Description: ',
                                        'value' => 'Cross train the nursing department employees and use them for basic diagnostic services'

                                    ),
                                    array(
                                        'label' => 'Status: ',
                                        'value' => 'Status: Implemented',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'View Idea',
                                    'link' => './idea-information.php',
                                )
                            );

                            echo createSlat($slat);

                            $slat = array(
                                'title' => '<a href="./idea-information.php">MHS15.8367</a>',
                                'meta' => array(
                                    array(
                                        'label' => 'Submitter:',
                                        'value' => 'Virtu USA Test',
                                    ),
                                    array(
                                        'label' => 'Brief Description: ',
                                        'value' => 'Cross train the nursing department employees and use them for basic diagnostic services'

                                    ),
                                    array(
                                        'label' => 'Status: ',
                                        'value' => 'Status: Implemented',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'View Idea',
                                    'link' => './idea-information.php',
                                )
                            );

                            echo createSlat($slat);

                            $slat = array(
                                'title' => '<a href="./idea-information.php">MHS15.8367</a>',
                                'meta' => array(
                                    array(
                                        'label' => 'Submitter:',
                                        'value' => 'Virtu USA Test',
                                    ),
                                    array(
                                        'label' => 'Brief Description: ',
                                        'value' => 'Cross train the nursing department employees and use them for basic diagnostic services'

                                    ),
                                    array(
                                        'label' => 'Status: ',
                                        'value' => 'Status: Implemented',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'View Idea',
                                    'link' => './idea-information.php',
                                )
                            );

                            echo createSlat($slat);

                            $slat = array(
                                'title' => '<a href="./idea-information.php">MHS15.8367</a>',
                                'meta' => array(
                                    array(
                                        'label' => 'Submitter:',
                                        'value' => 'Virtu USA Test',
                                    ),
                                    array(
                                        'label' => 'Brief Description: ',
                                        'value' => 'Cross train the nursing department employees and use them for basic diagnostic services'

                                    ),
                                    array(
                                        'label' => 'Status: ',
                                        'value' => 'Status: Implemented',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'View Idea',
                                    'link' => './idea-information.php',
                                )
                            );

                            echo createSlat($slat);

                            $slat = array(
                                'title' => '<a href="./idea-information.php">MHS15.8367</a>',
                                'meta' => array(
                                    array(
                                        'label' => 'Submitter:',
                                        'value' => 'Virtu USA Test',
                                    ),
                                    array(
                                        'label' => 'Brief Description: ',
                                        'value' => 'Cross train the nursing department employees and use them for basic diagnostic services'

                                    ),
                                    array(
                                        'label' => 'Status: ',
                                        'value' => 'Status: Implemented',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'View Idea',
                                    'link' => './idea-information.php',
                                )
                            );

                            echo createSlat($slat);
                        ?>


                                </section>
                                 <?= createStickybar($patterns['stickybar'] = array(
                                    'largeLeft' => '',
                                    'smallLeft' => '<a href="#modal-filter" class="btn btn-success" data-toggle="modal">Refine Results</a>',
                                    'largeRight' => ' <div class="btn-group dropup"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-10 of 15 <i class="fa fa-caret-up"></i></button><ul class="dropdown-menu" role="menu"><li class="active"><a href="#">10 per page</a></li><li><a href="#">50 per page</a></li><li><a href="#">Show all</a></li></ul></div> <div class="btn-group"><a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a><a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a></div>',
                                    'smallRight' => '<div class="btn-group"><a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a><a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a></div>',
                                )
                            ); ?>
                            </section>
                            <!-- /section-main -->
                        </section>
                    </div>
                    <!-- /column -->
                </div>
            </section>
        </div>
        <!-- /container -->
    </div>
    <!-- /layout -->
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
