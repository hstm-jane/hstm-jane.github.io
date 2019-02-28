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
        "title": "Edit Organizational Goals",
        "action": {

        },
        "meta": [
        ]
    }
}',true);

include_site_start($options);
$patterns['header']['mainNavActive'] = 'manage';
echo createHeader($patterns['header']);
$focus = array( 'title' => 'Edit Organizational Goals', ); echo createFocus($focus);
?>
    <div class="layout  layout-search">
        <div class="container">
            <section class="section section-main section-box" data-equalize="layout-columns">
                <div class="row">
                    <div class="col-md-3">
                        <section class="section section-refinement-options equalized" data-equalize="layout-columns">
                            <h3>Select Organization</h3>
                            <section class="section section-refinement-group">
                                <h3></h3>
                                <div class="form-group">
                                    <label for="select1">
                                        Select Type of Organization
                                    </label>
                                    <select class="select form-control" id="select1" name="select1">
                                        <option value="Facilities">
                                            Facilities
                                        </option>
                                        <option value="Second Choice">
                                            Second Choice
                                        </option>
                                        <option value="Third Choice">
                                            Third Choice
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label " for="select2">
                                        Select Organization
                                    </label>
                                    <select class="select form-control" id="select2" name="select2">
                                        <option value="Medcentral Health Systems">
                                            Medcentral Health Systems
                                        </option>
                                        <option value="Second Choice">
                                            Second Choice
                                        </option>
                                        <option value="Third Choice">
                                            Third Choice
                                        </option>
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
                                <hr style="border-top: 1px dotted #eee;">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group ">
                                            <label class="control-label " for="text">
                                                Organization #
                                            </label>
                                            <input class="form-control" id="text" name="text" placeholder="MHS" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group ">
                                            <label class="control-label " for="text1">
                                                Organization Name
                                            </label>
                                            <input class="form-control" id="text1" name="text1" placeholder="MedCentral Health System" type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="form-group ">
                                            <label class="control-label " for="number">
                                                Fiscal Year
                                            </label>
                                            <input class="form-control" id="number" name="number" placeholder="2015" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="form-group ">
                                            <label class="control-label " for="number1">
                                                Goal Per FTE
                                            </label>
                                            <input class="form-control" id="number1" name="number1" placeholder="2" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="form-group ">
                                            <label class="control-label " for="number2">
                                                Default Goal
                                            </label>
                                            <input class="form-control" id="number2" name="number2" placeholder="2" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="form-group ">
                                            <label class="control-label " for="number3">
                                                Goal Total
                                            </label>
                                            <input class="form-control" id="number3" name="number3" type="text" />
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--    </section> -->
                            <?= createStickybar($patterns['stickybar'] = array(
        'largeLeft' => '  <a href="#" class="btn btn-success">Add Goal</a>',
        'smallLeft' => '',
        'largeRight' => '',
        'smallRight' => '',
    )
); ?>
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
include_site_scripts($options);
include_site_end($options);
?>
