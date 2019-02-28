<?php

include "includes/helpers.php";


$options = json_decode('{
    "head": {
        "title" : "Welcome to Bright Ideas"
    },
    "header": {
        "nav_main_active" : "points"
    },
    "focus": {
        "title": "My Points",
        "action": {

        },
        "meta": [

        ]
    }
}',true);

include_site_start($options);
$patterns['header']['mainNavActive'] = 'mypoints';
echo createHeader($patterns['header']);
$focus = array( 'title' => 'My Points', ); echo createFocus($focus);
?>
    <div class="layout  layout-search">
        <div class="container">
            <section class="section section-main section-box" style="min-height: 400px;">

                <?php

                    $focusNav = array(
                        'tabs' => array(
                            array(
                                'active' => true,
                                'id' => 'tab-get',
                                'label' => 'What I Can Get',
                            ),
                            array(
                                'id' => 'tab-history',
                                'label' => 'Rewards History',
                            ),
                        ),
                    );
                    echo createFocusNav($focusNav);

                ?>

                <div class="row">
                    <div class="col-md-3 hidden-xs hidden-sm">
                        <section class="section section-refinement-options equalized" data-equalize="layout-columns" style="min-height: 1091px;">
                            <div class="form-group">
                                <label class="control-label " for="text2">
                                    Select User
                                </label>
                                <select class="form-control slat-basic" id="slat-basic" data-placeholder="Tracy Yowell">
                                    <option></option>
                                    <?php $i = 1; while ( $i <= 100) { ?>
                                    <option data-dept="Facility" data-userid="user<?= $i ?>" value="Name <?= $i ?>">Name
                                        <?= $i ?>
                                    </option>
                                    <?php $i++; } ?>
                                </select>
                            </div>
                            <section class="section section-refinement-group">
                                <header>
                                    <h2>Points Summary</h2>
                                </header>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <p>
                                            <span>Accumulated Points</span>
                                        </p>
                                        <p>
                                            <span>Spent Points</span>
                                        </p>
                                        <p>
                                            <span>Available Points</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>
                                            <span class="reward-points">12</span>
                                        </p>
                                        <p>
                                            <span class="reward-points">3</span>
                                        </p>
                                        <p>
                                            <span class="reward-points">9</span>
                                        </p>
                                    </div>
                                </div>
                            </section>
                        </section>
                    </div>
                    <div class="col-md-9">
                        <section class="section section-results equalized" data-equalize="layout-columns" style="min-height: 1091px;">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab-get">
                                    <section class="section section-results-header">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <h2>What I Can Get</h2>
                                            </div>
                                            <div class="col-md-3 hidden-xs hidden-sm">
                                            </div>
                                        </div>
                                    </section>
                                    <section class="section">
                                        <?php

                                            $slat = array(
                                                'title' => ' <a href="#interrupt-modal-redeem" data-dismiss="modal" aria-hidden="true">Test - 2 Pennies</a>',
                                                'meta' => array(
                                                    array(
                                                        'label' => 'Points Required: ',
                                                        'value' => '<span class="meta-callout-label">Points Required:</span>5</span>',
                                                        'attributes' => array(
                                                            array('class','meta-callout'),
                                                        )
                                                    ),
                                                ),
                                                'action' => array(
                                                    'type' => 'custom',
                                                    'content' => '
                                                        <div class="action">
                                                         <button class="btn btn-sm btn-default interrupt-modal-redeem" href="#interrupt-modal-redeem" data-dismiss="modal" aria-hidden="true">Redeem <i class="fa fa-fw fa-chevron-right visible-xs"></i></button>

                                                        </div>
                                                    ',
                                                ),
                                            );

                                            echo createSlat($slat);

                                              $slat = array(
                                                'title' => ' <a href="#interrupt-modal-redeem" data-dismiss="modal" aria-hidden="true">$10 MH-Gift Shop Certificate</a>',
                                                'meta' => array(
                                                    array(
                                                        'label' => 'Points Required: ',
                                                        'value' => '<span class="meta-callout-label">Points Required:</span>5</span>',
                                                        'attributes' => array(
                                                            array('class','meta-callout'),
                                                        )
                                                    ),
                                                ),
                                                'action' => array(
                                                    'type' => 'custom',
                                                    'content' => '
                                                        <div class="action">
                                                         <button class="btn btn-sm btn-default interrupt-modal-redeem" href="#interrupt-modal-redeem" data-dismiss="modal" aria-hidden="true">Redeem <i class="fa fa-fw fa-chevron-right visible-xs"></i></button>

                                                        </div>
                                                    ',
                                                ),
                                            );

                                            echo createSlat($slat);

                                              $slat = array(
                                                'title' => ' <a href="#interrupt-modal-redeem" data-dismiss="modal" aria-hidden="true">1 Week Membership to MedCentral Health & Fitness Center</a>',
                                                'meta' => array(
                                                    array(
                                                        'label' => 'Points Required: ',
                                                        'value' => '<span class="meta-callout-label">Points Required:</span>5</span>',
                                                        'attributes' => array(
                                                            array('class','meta-callout'),
                                                        )
                                                    ),                                ),
                                                'action' => array(
                                                    'type' => 'custom',
                                                    'content' => '
                                                        <div class="action">
                                                         <button class="btn btn-sm btn-default interrupt-modal-redeem" href="#interrupt-modal-redeem" data-dismiss="modal" aria-hidden="true">Redeem <i class="fa fa-fw fa-chevron-right visible-xs"></i></button>

                                                        </div>
                                                    ',
                                                ),
                                            );

                                            echo createSlat($slat);

                                        ?>
                                    </section>
                                </div>
                                <div class="tab-pane fade in" id="tab-history">
                                    <section class="section section-results-header">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <h2>My Rewards History</h2>
                                            </div>
                                            <div class="col-md-3 hidden-xs hidden-sm">
                                            </div>
                                        </div>
                                    </section>
                                    <section class="section">
                                        <table class="table table-bordered table-striped" id="RewardResults" width="100%">
                                            <tbody>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Reward</th>
                                                    <th>Points</th>
                                                    <th>Status</th>
                                                </tr>
                                                <tr>
                                                    <td valign="top">8/2/2015</td>
                                                    <td valign="top">Test - 2 Pennies</td>
                                                    <td valign="top">2</td>
                                                    <td valign="top">Submitted</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </section>
                                </div>
                            </div>

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
                        <!-- /section-main -->
                    </div>
                    <!-- /column -->
                </div>
            </section>
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
                    <section class="section section-refinement-options equalized" data-equalize="layout-columns" style="min-height: 1091px;">
                        <div class="form-group">
                            <label class="control-label " for="text2">
                                Select User
                            </label>
                            <select class="form-control slat-basic" id="slat-basic" data-placeholder="Tracy Yowell">
                                <option></option>
                                <?php $i = 1; while ( $i <= 100) { ?>
                                <option data-dept="Facility" data-userid="user<?= $i ?>" value="Name <?= $i ?>">Name
                                    <?= $i ?>
                                </option>
                                <?php $i++; } ?>
                            </select>
                        </div>
                        <section class="section section-refinement-group">
                            <header>
                                <h2>Points Summary</h2>
                            </header>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>
                                        <span>Accumulated Points</span>
                                        <span class="reward-points">12</span>
                                    </p>
                                    <p>
                                        <span>Spent Points</span>
                                        <span class="reward-points">3</span>
                                    </p>
                                    <p>
                                        <span>Available Points</span>
                                        <span class="reward-points">9</span>
                                    </p>
                                </div>
                            </div>
                        </section>
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
            healthStream.growl = function() {
                $('#growl-reward-submitted').on("click", function(e) {
                    e.preventDefault();
                    HealthStream.utilities.growl({
                        type: 'success',
                        title: 'Submitted',
                        text: 'Reward redemption submitted successfully',
                        sticky: true
                    });
                });
            }
            healthStream.modal = function() {
                $('.interrupt-modal-redeem').click(function(e) {
                    e.preventDefault();
                    HealthStream.utilities.interrupt({
                        type: 'success',
                        title: 'Are you sure you want to redeem this item?',
                        text: 'Test - 2 Pennies <br><strong>5 Points</strong>',
                        actions: [{
                            type: 'success',
                            label: 'Yes, Redeem',
                            id: 'growl-reward-submitted',

                        }, {
                            label: 'Cancel'
                        }]
                    });
                });
            };

            $(window).on('load', function() {

                healthStream.datepicker();
                healthStream.select2();
                healthStream.modal();
                healthStream.growl();

            });
        }(window, jQuery));
        </script>
        <?php
include_site_end($options);
?>
