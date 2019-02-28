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
        "title": "Organization Admin",
        "action": {

        },
        "meta": [

        ]
    }
}',true);

include_site_start($options);
$patterns['header']['mainNavActive'] = 'manage';
echo createHeader($patterns['header']);
$focus = array( 'title' => 'Organization Admin', ); echo createFocus($focus);
?>

    <div class="layout  layout-search">
        <div class="container">
            <section class="section section-main section-box" data-equalize="layout-columns">
                <div class="row">
                    <div class="col-md-3">
                        <section class="section section-refinement-options equalized" data-equalize="layout-columns">
                            <header>
                                <h3>Select Organization</h3>
                            </header>
                            <section class="section section-refinement-group">
                               <h3></h3>
                                <div class="form-group">
                                    <label class="control-label " for="select1">
                                        Select Type of Organization
                                    </label>
                                    <select class="select form-control" id="select1" name="select1">
                                        <option value="1000000 Nursing Information Services">
                                            Corporations
                                        </option>
                                        <option value="Second Choice">
                                            Facilities
                                        </option>
                                        <option value="Third Choice">
                                            Departments
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label " for="select1">
                                        Select Organization
                                    </label>
                                    <select class="select form-control form-control" id="select1" name="select1">
                                        <option value="1000000 Nursing Information Services">
                                            1000000 Nursing Information Services
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
                        <section>
                            <div class="container">
                                <h3>Results</h3>
                                <hr style="border-top: 1px dotted #eee;">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group ">
                                            <label class="control-label " for="select1">
                                                Organization Type
                                            </label>
                                            <select class="select form-control" id="select1" name="select1">
                                                <option value="1000000 Nursing Information Services">
                                                    Corporations
                                                </option>
                                                <option value="Second Choice">
                                                    Facilities
                                                </option>
                                                <option value="Third Choice">
                                                    Departments
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group ">
                                            <label class="control-label " for="text">
                                                Department #
                                            </label>
                                            <input class="form-control" id="text" name="text" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group ">
                                            <label class="control-label " for="text">
                                                Department Name
                                            </label>
                                            <input class="form-control" id="text" name="text" type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group ">
                                            <label class="control-label " for="select1">
                                                Parent Organization
                                            </label>
                                            <select class="select form-control" id="select1" name="select1">
                                                <option value="1000000 Nursing Information Services">
                                                    Corporations
                                                </option>
                                                <option value="Second Choice">
                                                    Facilities
                                                </option>
                                                <option value="Third Choice">
                                                    Departments
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group ">
                                            <label class="control-label " for="select1">
                                                Leader
                                            </label>
                                            <select class="select form-control" id="select1" name="select1">
                                                <option value="1000000 Nursing Information Services">
                                                    Corporations
                                                </option>
                                                <option value="Second Choice">
                                                    Facilities
                                                </option>
                                                <option value="Third Choice">
                                                    Departments
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group ">
                                            <label class="control-label " for="select1">
                                                Officer
                                            </label>
                                            <select class="select form-control" id="select1" name="select1">
                                                <option value="1000000 Nursing Information Services">
                                                    Corporations
                                                </option>
                                                <option value="Second Choice">
                                                    Facilities
                                                </option>
                                                <option value="Third Choice">
                                                    Departments
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group ">
                                            <label class="control-label " for="select1">
                                                Support Person
                                            </label>
                                            <select class="select form-control" id="select1" name="select1">
                                                <option value="1000000 Nursing Information Services">
                                                    Corporations
                                                </option>
                                                <option value="Second Choice">
                                                    Facilities
                                                </option>
                                                <option value="Third Choice">
                                                    Departments
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                        <?= createStickybar($patterns['stickybar'] = array(
        'largeLeft' => '<a href="#" class="btn btn-success">Update Information</a>',
        'smallLeft' => '',
        'largeRight' => '',
        'smallRight' => '',
    )
); ?>
                            
                                <!-- /stickybar -->
                            </section>
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
