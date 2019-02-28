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
        "title": "Import User Data",
        "action": {

        },
        "meta": [
        ["Select Datasource File:"," (CSV)"]
        ]
    }
}',true);

include_site_start($options);
$patterns['header']['mainNavActive'] = 'manage';
echo createHeader($patterns['header']);
$focus = array( 'title' => 'Import User Data', ); echo createFocus($focus);
?>

    <div class="layout">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <section class="section section-main section-box" data-equalize="layout-columns">
                        <section class="section file-upload-section">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputFile">File Input</label>
                                        <input class="form-control" style="background-color: #ffffff; height: 37px;" type="file" id="exampleInputFile" />
                                        <p class="help-block">This service will allow you to submit changes to the existing employee database. </p>
                                        <p class="help-block">Please select a comma separated file (CSV or TXT extension only) using the file selection control above.
                                            <br> Clicking the Submit button will upload the selected file to our server where it will be processed immediately.
                                        </p>
                                        <p class="help-block">
                                            For further information regarding the file format or the import process, please review the User Guide (MS Word).
                                        </p>
                                    </div>
                                    <button type="submit" class="btn btn-success">Upload</button>
                                </div>
                                <!-- /.col-lg-6 -->
                            </div>
                            <!-- /.row -->
                        </section>
                        <section class="section">
                            <div class="layout layout-connections">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <section class="section section-box connections-links equalized" data-equalize="home-sections" style="min-height: 249px;">
                                                <h3 class="connection-links-header">Step 1
                                                    <span><i class="fa fa-fw fa-arrow-right hidden-xs"></i></span>
                                                </h3>
                                                <ul class="list-unstyled">
                                                    <li>Login to Bright Ideas.</li>
                                                    <li>Import Comma Separated File (.CSV or .TXT).</li>
                                                </ul>
                                            </section>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-md-4">
                                            <section class="section section-box connections-links equalized" data-equalize="home-sections" style="min-height: 249px;">
                                                <h3 class="connection-links-header">Step 2
                                                    <span><i class="fa fa-fw fa-arrow-right hidden-xs"></i></span>
                                                </h3>
                                                <ul class="list-unstyled">
                                                    <li class="link-attention"><b>Errors?</b></li>
                                                    <li><b>Yes:</b> check email for explanation.<br/>
                                                    <b>No:</b> success email.</li>
                                                </ul>
                                            </section>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-md-4">
                                            <section class="section section-box connections-links equalized" data-equalize="home-sections" style="min-height: 249px;">
                                                <h3 class="connection-links-header">Step 3
                                                    <span><i class="fa fa-fw fa-check"></i></span>
                                                </h3>
                                                <ul class="list-unstyled">
                                                    <li>Correct errors within Comma Separated File.</li>
                                                    <li>Re-submit to Bright Ideas.</li>
                                                </ul>
                                            </section>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /container -->
                            </div>
                        </section>
                    </section>
                    <!-- /section-main -->
                </div>
                <!-- /column -->
                <div class="col-md-3">
                    <section class="section section-sidebar" data-equalize="layout-columns">
                        <?php include_sidebar() ?>
                    </section>
                    <!-- /section-sidebar -->
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
