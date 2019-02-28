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
        "title": "Organization FTEs",
        "action": {

        },
        "meta": [

        ]
    }
}',true);

include_site_start($options);
$patterns['header']['mainNavActive'] = 'manage';
echo createHeader($patterns['header']);
$focus = array( 'title' => 'FTE\'s', ); echo createFocus($focus);
?>
    <div class="layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="section section-main section-box" data-equalize="layout-columns">
                        <div class="container">
                            <section class="section">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group ">
                                            <label class="control-label " for="select1">
                                                Fiscal Year
                                            </label>
                                            <select class="select form-control" id="select1" name="select1">
                                                <option value="2015">
                                                    2015
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
                                    <div class="col-sm-3" <div class="form-group ">
                                        <label class="control-label " for="select2">
                                            Select Organization Type
                                        </label>
                                        <select class="select form-control" id="select2" name="select2">
                                            <option value="First Choice">
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
                                <p></p>
                                <h4>Selected Results</h4>
                                <hr class="title-bar">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr>
                                                <th>Fiscal Year</th>
                                                <th>Parent Org.</th>
                                                <th>Organization ID</th>
                                                <th>Organization Name</th>
                                                <th>FTE</th>
                                                <th align="center"> Action</th>
                                            </tr>
                                            <tr>
                                                <td>2015</td>
                                                <td>No Parent</td>
                                                <td>6620</td>
                                                <td>MedCentral Health System</td>
                                                <td>
                                                    <input class="form-control input-sm" id="text3" name="text3" type="text" />
                                                </td>
                                                <td align="center">
                                                    <button class="btn btn-success btn-sm" type="button" data-toggle="modal" data-target="#modal-edit-managers">
                                                        Add Information
                                                    </button>
                                                </td>
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
