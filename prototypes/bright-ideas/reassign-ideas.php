<?php

include "includes/helpers.php";


$options = json_decode('{
    "head": {
        "title" : "Welcome to Bright Ideas"
    },
    "header": {
        "nav_main_active" : "manage"
    },
    "focus": {
        "title": "Reassign Ideas",
        "action": {

        },
        "meta": [

        ]
    }
}',true);

include_site_start($options);
$patterns['header']['mainNavActive'] = 'manage';
echo createHeader($patterns['header']);
$focus = array( 'title' => 'Reassign Ideas', ); echo createFocus($focus);
?>

    <div class="layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="section section-main section-box" data-equalize="layout-columns">
                        <div class="container">
                            <section class="section search-filters">
                                <!-- filter -->
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="search-filter">
                                            <div class="search-filter-header">
                                                <span class="filter-title">
                                                    Select a source user:
                                                </span>
                                            </div>
                                            <div class="search-filter-body">
                                                <div class="row">
                                                    <div class="col-sm-5 hidden-xs pull-right">
                                                        <div class="filter">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="filter-select-all">
                                                </div>
                                                <div class="multiselect multi-filter f-one" id="one">
                                                    <ul class="user-list">
                                                        <li class="user-list-from">User 1</li>
                                                        <li class="user-list-from">User 2</li>
                                                        <li class="user-list-from">User 3</li>
                                                        <li class="user-list-from">User 4</li>
                                                        <li class="user-list-from">User 5</li>
                                                        <li class="user-list-from">User 6</li>
                                                        <li class="user-list-from">User 7</li>
                                                        <li class="user-list-from">User 8</li>
                                                        <li class="user-list-from">User 9</li>
                                                        <li class="user-list-from">User 10</li>
                                                        <li class="user-list-from">User 11</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- filter -->
                                    <div class="col-md-5">
                                        <div class="search-filter">
                                            <div class="search-filter-header">
                                                <span class="filter-title">
                                                    Select a user to receive ideas:
                                                </span>
                                            </div>
                                            <div class="search-filter-body">
                                                <div class="row">
                                                    <div class="col-md-5 pull-right">
                                                        <div class="filter">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-7 pull-left">
                                                        <div class="filter-select-all">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="multiselect multi-filter f-two" id="two">
                                                    <ul class="user-list">
                                                        <li class="user-list-to">User 1</li>
                                                        <li class="user-list-to">User 2</li>
                                                        <li class="user-list-to">User 3</li>
                                                        <li class="user-list-to">User 4</li>
                                                        <li class="user-list-to">User 5</li>
                                                        <li class="user-list-to">User 6</li>
                                                        <li class="user-list-to">User 7</li>
                                                        <li class="user-list-to">User 8</li>
                                                        <li class="user-list-to">User 9</li>
                                                        <li class="user-list-to">User 10</li>
                                                        <li class="user-list-to">User 11</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 pull-left">
                                        <label class="checkbox-inline" checked>
                                            <input type="checkbox" id="checkAllOne" value="option1" checked> Transfer Accrued / Spent Points
                                        </label>
                                    </div>
                                    <div class="col-md-3 pull-left">
                                        <label class="checkbox-inline" checked>
                                            <input type="checkbox" id="checkAllOne" value="option1" checked> Transfer Reward History
                                        </label>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <?php
                            $stickybar = array(
                                'sets' => array(
                                    array(
                                        'html' => '
                                            <button class="btn btn-success interrupt-modal-reassign" href="#interrupt-modal-reassign" data-dismiss="modal" aria-hidden="true">Reassign Ideas</button>
                                            <button href="#modal-search-filters" class="btn btn-default">Cancel</button>
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
        </div>
        <!-- /container -->
    </div>
    <!-- /layout -->
    <div id="modal-edit-users" class="modal modal-lg fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 id="" class="modal-title">Edit Users</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <div class="row">
                            <div class="col-sm-6">
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm">Update</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->
 <?=
createFooter($patterns['footer']);
include_site_scripts($options);
?>
        <script>
        (function(window, $) {
                'use strict';

                window.HealthStream = window.HealthStream || {};
                var healthStream = window.HealthStream;


                healthStream.filter = function() {
                    // Filter Results
                    $('.filter-input-box').keyup(function() {

                        $(this).parents('.search-filter-body:eq(0)').find("input:text.filter-input-box");
                        var filterID = $(this).closest('.filter-input-box').get(0).id;
                        var valThis = this.value.toLowerCase(),
                            length = this.value.length;

                        $(this).parents('.search-filter-body:eq(0)').find('label span.check-text').each(function() {
                            var text = $(this).text(),
                                textL = text.toLowerCase(),
                                htmlR = '<b>' + text.substr(0, length) + '</b>' + text.substr(length);
                            (textL.indexOf(valThis) == 0) ? $(this).closest('.filter-label').show(): $(this).closest('.filter-label').hide();
                        });
                    });

                    $(".user-list-from").click(function(e) {
                        $(".user-list-from").removeClass("active");
                        $(this).toggleClass("active");
                        e.preventDefault(); /*ignores actual link*/
                    });
                    $(".user-list-to").click(function(e) {
                        $(".user-list-to").removeClass("active");
                        $(this).toggleClass("active");
                        e.preventDefault(); /*ignores actual link*/
                    });
                };

                healthStream.modal = function() {
                    $('.interrupt-modal-reassign').click(function(e) {
                        e.preventDefault();
                        HealthStream.utilities.interrupt({
                            type: 'warning',
                            title: 'Are you sure you want to reassign this user\'s ideas?',
                            text: '<span>This cannot be undone</span>',
                            actions: [{
                                type: 'success',
                                label: 'Yes, Reassign Ideas'
                            }, {
                                label: 'No, Cancel'
                            }]
                        });
                    });
                };
                    $(window).on('load', function() {
                        healthStream.filter();
                        healthStream.modal();
                    });

                }(window, jQuery));
        </script>
        <?php
include_site_end($options);
?>
