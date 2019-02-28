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
        "title": "Manage Points",
        "action": {

        },
        "meta": [
            ["Available Points:","9"]
        ]
    }
}',true);

include_site_start($options);;
$patterns['header']['mainNavActive'] = 'manage';
echo createHeader($patterns['header']);
$focus = array( 'title' => 'Manage Points', ); echo createFocus($focus);
?>
    <div class="layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="section section-main section-box" data-equalize="layout-columns">
                        <div class="container">
                            <section class="section">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group ">
                                            <label class="control-label " for="select1">
                                                Select
                                            </label>
                                            <select class="select form-control" id="select1" name="select1">
                                                <option value="1000000 Nursing Information Services">
                                                    MedCentral Health System - MHS
                                                </option>
                                                <option value="Second Choice">
                                                    second choice
                                                </option>
                                                <option value="Third Choice">
                                                    third choice
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-4 pull-right" style="text-align: right;">
                                        <div class="form-group ">
                                            <label class="control-label " for="select1">
                                                &nbsp;
                                            </label>
                                            <button class="btn btn-success btn-sm" name="submit" type="submit">
                                                Points Report
                                            </button>
                                            <button class="btn btn-default btn-sm" name="submit" type="submit">
                                                Clear All Points
                                            </button>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr>
                                                <th> User </th>
                                                <th> Department #</th>
                                                <th>Points Accrued</th>
                                                <th>Points Spent</th>
                                                <th>Balance</th>
                                                <th style="text-align:center"> Action</th>
                                            </tr>
                                            <tr>
                                                <td> April Blankenship</td>
                                                <td>1000000</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td align="center">
                                                    <button class="btn btn-default btn-sm" name="submit" type="submit">
                                                        Zero Points
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '
                                                <a href="./report-wizard.php" class="btn btn-default">Points Report</a>
                                                <button class="btn btn-default" name="submit" type="submit">
                                                    Clear All Points
                                                </button>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </div>
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
                    <button class="btn btn-success" data-dismiss="modal">Update</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->
<?=
createFooter($patterns['footer']);
include_site_scripts($options);
include_site_end($options);
?>
