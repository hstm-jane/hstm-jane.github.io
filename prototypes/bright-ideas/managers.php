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
        "title": "Manager Administration",
        "action": {

        },
        "meta": [

        ]
    }
}',true);

include_site_start($options);
$patterns['header']['mainNavActive'] = 'manage';
echo createHeader($patterns['header']);
$focus = array( 'title' => 'Manager Administration', ); echo createFocus($focus);
?>

    <div class="layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="section section-main section-box" data-equalize="layout-columns">
                        <div class="row">
                            <div class="col-md-3" style="border-right: 1px solid #eee;">
                                <section class="section section-refinement-options equalized" data-equalize="layout-columns">
                                    <h3>Select Manager</h3>
                                    <section class="section section-refinement-group">
                                     <hr>
                                        <div class="form-group">
                                            <label class="control-label " for="select1">
                                                Select Facility
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
                                        <div class="form-group ">
                                            <label class="control-label " for="select2">
                                                Select Manager
                                            </label>
                                            <select class="select form-control" id="select2" name="select2">
                                                <option value="Medcentral Health Systems">
                                                    Peter Brooks
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
                                        <hr>
                                    
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <th>First Name</th>
                                                                <th>Last Name</th>
                                                                <th>Facility</th>
                                                                <th style="text-align:center"> Action</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Anna</td>
                                                                <td>Pitt</td>
                                                                <td>VIRTEST</td>
                                                                <td align="center">
                                                                    <button class="btn btn-default btn-sm" type="button" data-toggle="modal" data-target="#modal-edit-managers">
                                                                        Update Information
                                                                    </button>
                                                                    <button class="btn btn-danger btn-sm" name="submit" type="submit">
                                                                        Delete
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </section>
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
