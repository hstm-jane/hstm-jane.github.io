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
        "title": "Manage Facility Reward Email",
        "action": {

        },
        "meta": [

        ]
    }
}',true);

include_site_start($options);
$patterns['header']['mainNavActive'] = 'manage';
echo createHeader($patterns['header']);
$focus = array( 'title' => 'Facility Reward Email', ); echo createFocus($focus);
?>
    <div class="layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="section section-main section-box" data-equalize="layout-columns">
                        <div class="container">
                            <section>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="dropdown pull-right">
                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Options
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <li>
                                                    <a href="./my-points.php"> Redeem Points For Users</a>
                                                </li>
                                                <li>
                                                    <a href="./sent-rewards.php"> View Sent Rewards</a>
                                                </li>
                                                <li>
                                                    <a href="./outstanding-rewards.php"> View Outstanding Rewards</a>
                                                </li>
                                                <li>
                                                    <a href="./facility-reward-email.php"> Facility Reward Emails</a>
                                                </li>
                                                <li>
                                                    <a href="./manage-rewards.php"> Manage Rewards Options</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="section">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group ">
                                            <label class="control-label " for="select1">
                                                Assign Facility Reward Manager
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
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group ">
                                            <label class="control-label " for="select1">
                                                Manager
                                            </label>
                                            <select class="select form-control" id="select1" name="select1">
                                                <option value="Facilities">
                                                    -- Select a Manager --
                                                </option>
                                                <option value="Second Choice">
                                                    Second Choice
                                                </option>
                                                <option value="Third Choice">
                                                    Third Choice
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group ">
                                            <label class="control-label " for="select1">
                                                &nbsp;
                                            </label>
                                            <button class="btn btn-default btn-sm" name="Assign" type="">Assign</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr>
                                                <th>Facility</th>
                                                <th>Manager</th>
                                            </tr>
                                            <tr>
                                                <td>Methodist Health System</td>
                                                <td>MELODY YOWELL</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
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
    <div id="modal-edit-managers" class="modal modal-lg fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 id="" class="modal-title">Edit Managers</h4>
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
