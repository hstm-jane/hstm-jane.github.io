<?php

include 'includes/helpers.php';

$options = json_decode('{
    "head": {
        "title" : "This is the Test title"
    },
    "footer":{
        "class":["site-footer-min"]
    }
}',true);

$patterns['header']['mainNavActive'] = 'reports';
$patterns['focus']['title'] = 'Reports';

?>
<?php include_site_start($options); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
    <div class="layout">
        <div class="container">
            <section class="section section-main section-box">
                <div class="row">
                    <div class="col-md-3">
                        <section class="section">
                            <form>
                                <section class="section">
                                    <nav class="bi-reports__list">
                                        <h3>Report List</h3>
                                        <ul>
                                            <li class="bi-reports__list-item active">
                                                <a href="#tab-1" data-toggle="tab">
                                                    Submitted Ideas <i class="fa fa-chevron-right bi-reports__list-icon"></i>
                                                </a>
                                            </li>
                                            <li class="bi-reports__list-item">
                                                <a href="#tab-2" data-toggle="tab">
                                                    Overdue Ideas <i class="fa fa-chevron-right bi-reports__list-icon"></i>
                                                </a>
                                            </li>
                                            <li class="bi-reports__list-item">
                                                <a href="#tab-3" data-toggle="tab">
                                                    BI Benefits Report <i class="fa fa-chevron-right bi-reports__list-icon"></i>
                                                </a>
                                            </li>
                                            <li class="bi-reports__list-item">
                                                <a href="#tab-4" data-toggle="tab">
                                                    Number of Ideas by Dept <i class="fa fa-chevron-right bi-reports__list-icon"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </section>
                            </form>
                        </section>
                    </div>
                    <!-- /column -->
                    <div class="col-md-9">
                        <section class="section">
                            <div class="tab-content bi-reports__settings">

                                <div class="tab-pane in active" id="tab-1">
                                    <section class="section">
                                        <h2 class="page-header">Submitted Ideas <small>Configuration Settings</small></h2>
                                    </section>
                                    <section class="section">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="hire-from-date">From Date Submitted </label>
                                                    <div class="input-group date datepicker" id="hire-from-date">
                                                        <input type="text" class="form-control" value="<?= date('m/d/Y', strtotime('-30 days')) ?>">
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="hire-through-date">Through Date Submitted</label>
                                                    <div class="input-group date datepicker" id="hire-through-date">
                                                        <input type="text" class="form-control" value="<?= date('m/d/Y') ?>">
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label">Status</label>
                                                    <select class="form-control">
                                                        <option>All</option>
                                                        <option>Open</option>
                                                        <option>Closed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="section">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Facility</label>
                                                    <select class="form-control js-select2" multiple>
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 20) { ?>
                                                        <option>Facility <?= $i ?></option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Officer</label>
                                                    <select class="form-control js-select2" multiple>
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 20) { ?>
                                                        <option>Officer <?= $i ?> </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Submitter Department</label>
                                                    <select class="form-control js-select2" multiple>
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 20) { ?>
                                                        <option>Department <?= $i ?> </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Responsible Department</label>
                                                    <select class="form-control js-select2" multiple>
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 20) { ?>
                                                        <option>Department <?= $i ?> </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="section">
                                        <label>Idea Types</label>
                                            <div class="form-group bi-reports__settings-group bi-reports__settings-range">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="checkbox"><input type="checkbox"> Cost Savings</label>
                                                </div>
                                                <div class="col-sm-4 col-md-9">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">Min</div>
                                                                <input type="text" class="form-control input-sm" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">Max</div>
                                                                <input type="text" class="form-control input-sm" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group bi-reports__settings-group bi-reports__settings-range">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="checkbox"><input type="checkbox"> Time Savings</label>
                                                </div>
                                                <div class="col-sm-4 col-md-9">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">Min</div>
                                                                <input type="text" class="form-control input-sm" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">Max</div>
                                                                <input type="text" class="form-control input-sm" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group bi-reports__settings-group">
                                            <label class="checkbox"><input type="checkbox"> Safety Issue</label>
                                        </div>
                                        <div class="form-group bi-reports__settings-group">
                                            <label class="checkbox"><input type="checkbox"> Success Story</label>
                                        </div>


                                    </section>
                                    <section class="section">
                                        <a href="#" class="btn btn-success">Run Report</a>
                                    </section>
                                </div>
                                <!-- /tab-pane -->

                                <div class="tab-pane" id="tab-2">
                                    <section class="section">
                                        <h2 class="page-header">Overdue Ideas <small>Configuration Settings</small></h2>
                                    </section>
                                    <section class="section">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="hire-from-date">From Date Submitted </label>
                                                    <div class="input-group date datepicker" id="hire-from-date">
                                                        <input type="text" class="form-control" value="<?= date('m/d/Y', strtotime('-30 days')) ?>">
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="hire-through-date">Through Date Submitted</label>
                                                    <div class="input-group date datepicker" id="hire-through-date">
                                                        <input type="text" class="form-control" value="<?= date('m/d/Y') ?>">
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="section">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Facility</label>
                                                    <select class="form-control js-select2" multiple>
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 20) { ?>
                                                        <option>Facility <?= $i ?></option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Officer</label>
                                                    <select class="form-control js-select2" multiple>
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 20) { ?>
                                                        <option>Officer <?= $i ?> </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Submitter Department</label>
                                                    <select class="form-control js-select2" multiple>
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 20) { ?>
                                                        <option>Department <?= $i ?> </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Responsible Department</label>
                                                    <select class="form-control js-select2" multiple>
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 20) { ?>
                                                        <option>Department <?= $i ?> </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="section">
                                        <a href="#" class="btn btn-success">Run Report</a>
                                    </section>
                                </div>
                                <!-- /tab-pane -->

                                <div class="tab-pane" id="tab-3">
                                    <section class="section">
                                        <h2 class="page-header">BI Benefits Report <small>Configuration Settings</small></h2>
                                    </section>
                                    <section class="section">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="hire-from-date">From Date Submitted </label>
                                                    <div class="input-group date datepicker" id="hire-from-date">
                                                        <input type="text" class="form-control" value="<?= date('m/d/Y', strtotime('-30 days')) ?>">
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="hire-through-date">Through Date Submitted</label>
                                                    <div class="input-group date datepicker" id="hire-through-date">
                                                        <input type="text" class="form-control" value="<?= date('m/d/Y') ?>">
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label">Status</label>
                                                    <select class="form-control">
                                                        <option>All</option>
                                                        <option>Open</option>
                                                        <option>Closed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="section">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Facility</label>
                                                    <select class="form-control js-select2" multiple>
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 20) { ?>
                                                        <option>Facility <?= $i ?></option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Officer</label>
                                                    <select class="form-control js-select2" multiple>
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 20) { ?>
                                                        <option>Officer <?= $i ?> </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Submitter Department</label>
                                                    <select class="form-control js-select2" multiple>
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 20) { ?>
                                                        <option>Department <?= $i ?> </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Responsible Department</label>
                                                    <select class="form-control js-select2" multiple>
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 20) { ?>
                                                        <option>Department <?= $i ?> </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="section">
                                        <label>Idea Types</label>
                                            <div class="form-group bi-reports__settings-group bi-reports__settings-range">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="checkbox"><input type="checkbox"> Cost Savings</label>
                                                </div>
                                                <div class="col-sm-4 col-md-9">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">Min</div>
                                                                <input type="text" class="form-control input-sm" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">Max</div>
                                                                <input type="text" class="form-control input-sm" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group bi-reports__settings-group bi-reports__settings-range">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="checkbox"><input type="checkbox"> Time Savings</label>
                                                </div>
                                                <div class="col-sm-4 col-md-9">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">Min</div>
                                                                <input type="text" class="form-control input-sm" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">Max</div>
                                                                <input type="text" class="form-control input-sm" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group bi-reports__settings-group">
                                            <label class="checkbox"><input type="checkbox"> Safety Issue</label>
                                        </div>
                                        <div class="form-group bi-reports__settings-group">
                                            <label class="checkbox"><input type="checkbox"> Success Story</label>
                                        </div>


                                    </section>
                                    <section class="section">
                                        <a href="#" class="btn btn-success">Run Report</a>
                                    </section>
                                </div>
                                <!-- /tab-pane -->

                                <div class="tab-pane" id="tab-4">
                                    <section class="section">
                                        <h2 class="page-header">Number of Ideas by Department <small>Configuration Settings</small></h2>
                                    </section>
                                    <section class="section">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="hire-from-date">From Date Submitted </label>
                                                    <div class="input-group date datepicker" id="hire-from-date">
                                                        <input type="text" class="form-control" value="<?= date('m/d/Y', strtotime('-30 days')) ?>">
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="hire-through-date">Through Date Submitted</label>
                                                    <div class="input-group date datepicker" id="hire-through-date">
                                                        <input type="text" class="form-control" value="<?= date('m/d/Y') ?>">
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label">Status</label>
                                                    <select class="form-control">
                                                        <option>All</option>
                                                        <option>Open</option>
                                                        <option>Closed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="section">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Facility</label>
                                                    <select class="form-control js-select2" multiple>
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 20) { ?>
                                                        <option>Facility <?= $i ?></option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Submitter Department</label>
                                                    <select class="form-control js-select2" multiple>
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 20) { ?>
                                                        <option>Department <?= $i ?> </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Responsible Department</label>
                                                    <select class="form-control js-select2" multiple>
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 20) { ?>
                                                        <option>Department <?= $i ?> </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="section">
                                        <a href="#" class="btn btn-success">Run Report</a>
                                    </section>
                                </div>
                                <!-- /tab-pane -->

                            </div>
                            <!-- /tab-content -->
                        </section>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /row -->
            </section>
            <!-- /section-main -->
        </div>
        <!-- /container -->
    </div>
    <!-- /layout -->
    <!-- Modal -->
    <div id="modal-legend" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Information</h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->
    <!-- Modal -->
    <div id="modal-bi-reports" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Custom Report Types</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <h3>Previously Created</h3>
                        <div class="form-group ">
                            <label class="control-label " for="select">
                                Report Types
                            </label>
                            <select class="select form-control" id="select" name="select">
                                <option value="My Favorite Reports">
                                    My Favorite Reports
                                </option>
                            </select>
                        </div>
                    </section>
                    <hr>
                    <section class="section">
                        <h3>Create A New Report Type</h3>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <form method="post">
                                    <div class="form-group ">
                                        <label class="control-label requiredField" for="name">
                                            Reports List Name
                                            <span class="asteriskField">
                                                *
                                            </span>
                                        </label>
                                        <input class="form-control" id="name" name="name" type="text" />
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label ">
                                            Choose reports to add
                                        </label>
                                        <div class=" ">
                                            <div class="checkbox">
                                                <label class="checkbox">
                                                    <input name="checkbox" type="checkbox" value="Report 1" /> Report 1
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="checkbox">
                                                    <input name="checkbox" type="checkbox" value="Report 2" /> Report 2
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="checkbox">
                                                    <input name="checkbox" type="checkbox" value="Report 3" /> Report 3
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label requiredField">
                                            Make this list my default selection
                                            <span class="asteriskField">
                                                *
                                            </span>
                                        </label>
                                        <div class="">
                                            <div class="radio">
                                                <label class="radio">
                                                    <input name="radio" type="radio" value="Yes" /> Yes
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label class="radio">
                                                    <input name="radio" type="radio" value="No" /> No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" name="submit" type="submit">Save</button>
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->
<?php
include_site_footer($options);
include_site_scripts($options);
?>
<script>
    $(function(){
        $('.datepicker').datepicker({
            autoclose: true
        });

        $('.js-select2').select2({
            placeholder: "Select",
            allowClear: true
        });

        $('.bi-reports__settings-range input[type="checkbox"]').on('change',function(){
            var $checkbox = $(this);
            var $range = $checkbox.closest('.bi-reports__settings-range');
            var $minmax = $range.find('input[type="text"]');

            if ( $checkbox.prop('checked') == true ) {
                $minmax.prop('disabled',false);
            } else {
                $minmax.prop('disabled',true);
            }
        });
    });
</script>
<?php
include_site_end($options);
?>
