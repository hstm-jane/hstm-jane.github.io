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
        "title": "Edit Department Goals",
        "action": {

        },
           "meta": [

        ]

    }
}',true);

include_site_start($options);
$patterns['header']['mainNavActive'] = 'manage';
echo createHeader($patterns['header']);
$focus = array( 'title' => 'Edit Department Goals', ); echo createFocus($focus);
?>
    <div class="layout  layout-search">
        <div class="container">
            <section class="section section-main section-box" data-equalize="layout-columns">
                <div class="row">
                    <div class="col-md-3">
                        <section class="section section-refinement-options equalized" data-equalize="layout-columns">
                            <header>
                                <h3>Select Department</h3>
                            </header>
                            <section class="section section-refinement-group">
                                <h3></h3>
                                <div class="form-group">
                                    <label for="text"> Department Name</label>
                                    <select class="form-control">
                                        <option>1000000 - Nursing Information Services</option>
                                        <option>MHS580975 - Mpf-Oncology</option>
                                        <option>MHS636020 - Anesthesiology</option>
                                        <option>MHS9999OLD - Termed Employees</option>
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
                                <hr class="striped">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="text">Department Name</label>
                                            <input type="text" class="form-control" placeholder="Nursing Information Services" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="text">Department #</label>
                                            <input type="text" class="form-control" placeholder="1000000" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="text">Fiscal Year</label>
                                            <input type="text" class="form-control" placeholder="2015" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="text">Default Goal</label>
                                            <input type="text" class="form-control" placeholder="2" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="text">Goal Per FTE</label>
                                            <input type="text" class="form-control" placeholder="2">
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '<a href="#" class="btn btn-success">Update</a>',
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
    <?=
createFooter($patterns['footer']);
include_site_scripts($options);
include_site_end($options);
?>
