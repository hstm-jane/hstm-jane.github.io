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
        "title": "Sent Rewards",
        "action": {

        },
        "meta": [

        ]
    }
}',true);

include_site_start($options);
$patterns['header']['mainNavActive'] = 'manage';
echo createHeader($patterns['header']);
$focus = array( 'title' => 'Sent Rewards', ); echo createFocus($focus);
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
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr>
                                                <th>Status</th>
                                                <th>Reward Description</th>
                                                <th>Points</th>
                                                <th>Date Sent</th>
                                            </tr>
                                            <tr>
                                                <td>Submitted</td>
                                                <td>Tracy Yowell 1000000 Nursing Information Services Test - 2 Pennies</td>
                                                <td> 2 </td>
                                                <td>12/2/2015</td>
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