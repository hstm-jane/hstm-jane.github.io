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
        "title": "Officer Administration",
        "action": {

        },
        "meta": [

        ]
    }
}',true);

include_site_start($options);
$patterns['header']['mainNavActive'] = 'manage';
echo createHeader($patterns['header']);
$focus = array( 'title' => 'Officer Administration', ); echo createFocus($focus);
?>
    <div class="layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="section section-main section-box" data-equalize="layout-columns">
                        <div class="row">
                            <div class="col-md-3" style="border-right: 1px solid #eee;">
                                <section class="section section-refinement-options equalized" data-equalize="layout-columns">
                                    <h3>Reassign Officer</h3>
                                    <section class="section section-refinement-group">
                                        <hr>
                                        <div class="form-group">
                                            <label class="control-label " for="text2">
                                                Select Officer
                                            </label>
                                            <select class="form-control slat-basic" id="slat-basic" data-placeholder="Yowell, Tracy">
                                                <option></option>
                                                <?php $i = 1; while ( $i <= 100) { ?>
                                                <option data-dept="Facility" data-userid="user<?= $i ?>" value="Name <?= $i ?>">Name
                                                    <?= $i ?>
                                                </option>
                                                <?php $i++; } ?>
                                            </select>
                                        </div>
                                    </section>
                                </section>
                            </div>
                            <!-- /section-sidebar -->
                            <div class="col-md-9">
                                <section class="section main">
                                    <section class="section">
                                        <h3>Results</h3>
                                        <hr>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <tbody>
                                                    <tr>
                                                        <th>Last Name</th>
                                                        <th>First Name</th>
                                                        <th>Assign Facility</th>
                                                        <th>Assign Department</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Yowell</td>
                                                        <td>Tracy</td>
                                                        <td>
                                                            <select class="select form-control" id="select1" name="select1">
                                                                <option value="Facilities">
                                                                    Facility Name
                                                                </option>
                                                                <option value="Second Choice">
                                                                    Second Choice
                                                                </option>
                                                                <option value="Third Choice">
                                                                    Third Choice
                                                                </option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select form-control" id="select1" name="select1">
                                                                <option value="Facilities">
                                                                    Deapartment Name
                                                                </option>
                                                                <option value="Second Choice">
                                                                    Second Choice
                                                                </option>
                                                                <option value="Third Choice">
                                                                    Third Choice
                                                                </option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
                                    <?= createStickybar($patterns['stickybar'] = array(
        'largeLeft' => '<button class="btn btn-success btn-sm" type="button" data-toggle="modal" data-target="#modal-edit-managers">
                                                                        Update
                                                                    </button>
                                                                    <button class="btn btn-default btn-sm" name="submit" type="submit">
                                                                        Cancel
                                                                    </button>',
        'smallLeft' => '',
        'largeRight' => '',
        'smallRight' => '',
    )
); ?>
                                </section>
                            </div>
                    </section>
                    <!-- /section-main -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /row -->
                </section>
            </div>
            <!-- /container -->
        </div>
        <!-- /layout -->
        <?= 
createFooter($patterns['footer']); 
include_site_scripts($options); ?>
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
            <?=
include_site_end($options);
?>
