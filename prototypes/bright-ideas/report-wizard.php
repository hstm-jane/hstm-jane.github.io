<?php

include 'includes/helpers.php';


$options = json_decode('{
    "head": {
        "title" : "Report Wizard"
    },
    "header": {
        "nav_up" : "true",
        "nav_main_active" : "reports"
    },
    "focus": {
        "title": "Report Wizard",
        "icon": "hs-icons-assessment",
        "type": "Reports",
        "meta": [

        ]

    }
}',true);

include_site_start($options);
$patterns['header']['mainNavActive'] = 'reports';
echo createHeader($patterns['header']);
include_renewed_focus_bar($options);
?>
    <div class="layout layout-assessment">
        <div class="container">
            <section class="section section-main section-box">
                <div class="row">
                    <div class="col-md-4">
                        <section class="section" data-equalize="layout-columns">
                            <form>
                                <section class="section section-refinement-group">
                                    <nav class="catalog-categories report-list">
                                        <h3>Detailed Reports <small> </small></h3>
                                        <div class="limit-height" style="height: 120px;">
                                            <ul class="nav nav-tabs">
                                                <li class="report-item">
                                                    <a class="" href="#si" data-toggle="tab">
                                                        <div class="cc-col">Submitted Ideas</div>
                                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                    </a>
                                                </li>
                                                <li class="report-item">
                                                    <a class="" href="#ici" data-toggle="tab">
                                                        <div class="cc-col">Implemented/Closed Ideas</div>
                                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3>Composite Reports<small></small></h3>
                                        <div class="limit-height" style="height: 200px;">
                                            <ul class="nav nav-tabs">
                                                <li class="report-item">
                                                    <a href="#oibo" data-toggle="tab">
                                                        <div class="cc-col">Overdue Ideas by Officer</div>
                                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                    </a>
                                                </li>
                                                <li class="report-item">
                                                    <a href="#oibd" data-toggle="tab">
                                                        <div class="cc-col">Overdue Ideas by Dept</div>
                                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                    </a>
                                                </li>
                                                <li class="report-item">
                                                    <a href="#bibr" data-toggle="tab">
                                                        <div class="cc-col">BI Benefits Report</div>
                                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                    </a>
                                                </li>
                                                <li class="report-item">
                                                    <a href="#noibd" data-toggle="tab">
                                                        <div class="cc-col">Number of Ideas by Dept</div>
                                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </section>
                            </form>
                        </section>
                    </div>
                    <!-- /column -->
                    <div class="col-md-8">
                        <section class="section">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#di" data-toggle="tab"> </a>
                                </li>
                            </ul>
                            <div class="tab-content tab-content-rating" style="min-height: 420px;">
                                <div class="tab-pane fade in active" id="di">
                                    <section class="section">
                                        <div class="supporting">
                                            <h2>You have not selected a report:
                                                <hr>
                                                <small> Please choose a report from the list in the left column</small></h2>
                                        </div>
                                    </section>
                                </div>
                                <div class="tab-pane fade in" id="si">
                                    <section class="section">
                                        <div class="supporting">
                                            <h2>Specify Report Criteria: <small> Submitted Ideas</small></h2>
                                            <hr>
                                        </div>
                                    </section>
                                        <section>
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Facility
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="1000000 - Nursing Information Services">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                        <option data-dept="Facility" data-userid="user<?= $i ?>" value="Department <?= $i ?>">Department
                                                            <?= $i ?>
                                                        </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Submitter Department
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="1000000 - Nursing Information Services">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                        <option data-dept="Facility" data-userid="user<?= $i ?>" value="Department <?= $i ?>">Department
                                                            <?= $i ?>
                                                        </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Officer Name
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="Tracy Yowell">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                            <option data-dept="Facility" data-userid="user<?= $i ?>" value="Name <?= $i ?>">Name
                                                                <?= $i ?>
                                                            </option>
                                                            <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>

                                             <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectcosts">Status
                                                    </label>
                                                    <select id="selectcosts" name="selectcosts" class="form-control selectcosts">
                                                        <option value="0"></option>
                                                        <option value="1">Open</option>
                                                        <option value="2">Closed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        </section>
                                        <section class="section">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="hire-from-date">From Date Submitted </label>
                                                    <div class="input-group date datepicker" id="hire-from-date">
                                                        <input type="text" class="form-control" value="10/20/2015">
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-md-offset-2">
                                                <div class="form-group">
                                                    <label for="hire-through-date">Through Date Submitted</label>
                                                    <div class="input-group date datepicker" id="hire-through-date">
                                                        <input type="text" class="form-control" value="10/20/2015">
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
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectcosts">Cost Savings
                                                    </label>
                                                    <select id="selectcosts" name="selectcosts" class="form-control selectcosts">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selecthours">Time Savings?
                                                    </label>
                                                    <select id="selecthours" name="selecthours" class="form-control selecthours">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectbasic">Safety Issue
                                                    </label>
                                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectbasic">Success Story
                                                    </label>
                                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!-- /tab-pane -->
                                <div class="tab-pane fade in" id="ici">
                                    <section class="section">
                                        <div class="supporting">
                                            <h2>Specify Report Criteria: <small> Implemented/Closed Ideas</small></h2>
                                            <hr>
                                        </div>
                                    </section>
                                    <section>
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Facility
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="1000000 - Nursing Information Services">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                        <option data-dept="Facility" data-userid="user<?= $i ?>" value="Department <?= $i ?>">Department
                                                            <?= $i ?>
                                                        </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Submitter Department
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="1000000 - Nursing Information Services">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                        <option data-dept="Facility" data-userid="user<?= $i ?>" value="Department <?= $i ?>">Department
                                                            <?= $i ?>
                                                        </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Officer Name
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="Tracy Yowell">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                            <option data-dept="Facility" data-userid="user<?= $i ?>" value="Name <?= $i ?>">Name
                                                                <?= $i ?>
                                                            </option>
                                                            <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>

                                             <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectcosts">Status
                                                    </label>
                                                    <select id="selectcosts" name="selectcosts" class="form-control selectcosts">
                                                        <option value="0"></option>
                                                        <option value="1">Open</option>
                                                        <option value="2">Closed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        </section>
                                        <section class="section">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="hire-from-date">From Date Submitted </label>
                                                    <div class="input-group date datepicker" id="hire-from-date">
                                                        <input type="text" class="form-control" value="10/20/2015">
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-md-offset-2">
                                                <div class="form-group">
                                                    <label for="hire-through-date">Through Date Submitted</label>
                                                    <div class="input-group date datepicker" id="hire-through-date">
                                                        <input type="text" class="form-control" value="10/20/2015">
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
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectcosts">Cost Savings
                                                    </label>
                                                    <select id="selectcosts" name="selectcosts" class="form-control selectcosts">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selecthours">Time Savings?
                                                    </label>
                                                    <select id="selecthours" name="selecthours" class="form-control selecthours">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectbasic">Safety Issue
                                                    </label>
                                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectbasic">Success Story
                                                    </label>
                                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!-- /tab-pane -->
                                <div class="tab-pane fade in" id="oibo">
                                    <section class="section">
                                        <div class="supporting">
                                            <h2>Specify Report Criteria: <small> Overdue Ideas by Officer</small></h2>
                                            <hr>
                                        </div>
                                    </section>
                                        <section>
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Facility
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="1000000 - Nursing Information Services">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                        <option data-dept="Facility" data-userid="user<?= $i ?>" value="Department <?= $i ?>">Department
                                                            <?= $i ?>
                                                        </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Submitter Department
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="1000000 - Nursing Information Services">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                        <option data-dept="Facility" data-userid="user<?= $i ?>" value="Department <?= $i ?>">Department
                                                            <?= $i ?>
                                                        </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Officer Name
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="Tracy Yowell">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                            <option data-dept="Facility" data-userid="user<?= $i ?>" value="Name <?= $i ?>">Name
                                                                <?= $i ?>
                                                            </option>
                                                            <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>

                                             <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectcosts">Status
                                                    </label>
                                                    <select id="selectcosts" name="selectcosts" class="form-control selectcosts">
                                                        <option value="0"></option>
                                                        <option value="1">Open</option>
                                                        <option value="2">Closed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        </section>
                                        <section class="section">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="hire-from-date">From Date Submitted </label>
                                                    <div class="input-group date datepicker" id="hire-from-date">
                                                        <input type="text" class="form-control" value="10/20/2015">
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-md-offset-2">
                                                <div class="form-group">
                                                    <label for="hire-through-date">Through Date Submitted</label>
                                                    <div class="input-group date datepicker" id="hire-through-date">
                                                        <input type="text" class="form-control" value="10/20/2015">
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
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectcosts">Cost Savings
                                                    </label>
                                                    <select id="selectcosts" name="selectcosts" class="form-control selectcosts">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selecthours">Time Savings?
                                                    </label>
                                                    <select id="selecthours" name="selecthours" class="form-control selecthours">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectbasic">Safety Issue
                                                    </label>
                                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectbasic">Success Story
                                                    </label>
                                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!-- /tab-pane -->
                                <div class="tab-pane fade in" id="oibd">
                                    <section class="section">
                                        <div class="supporting">
                                            <h2>Specify Report Criteria: <small> Overdue Ideas by Dept.</small></h2>
                                            <hr>
                                        </div>
                                    </section>
                                        <section>
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Facility
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="1000000 - Nursing Information Services">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                        <option data-dept="Facility" data-userid="user<?= $i ?>" value="Department <?= $i ?>">Department
                                                            <?= $i ?>
                                                        </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Submitter Department
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="1000000 - Nursing Information Services">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                        <option data-dept="Facility" data-userid="user<?= $i ?>" value="Department <?= $i ?>">Department
                                                            <?= $i ?>
                                                        </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Officer Name
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="Tracy Yowell">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                            <option data-dept="Facility" data-userid="user<?= $i ?>" value="Name <?= $i ?>">Name
                                                                <?= $i ?>
                                                            </option>
                                                            <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>

                                             <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectcosts">Status
                                                    </label>
                                                    <select id="selectcosts" name="selectcosts" class="form-control selectcosts">
                                                        <option value="0"></option>
                                                        <option value="1">Open</option>
                                                        <option value="2">Closed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        </section>
                                        <section class="section">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="hire-from-date">From Date Submitted </label>
                                                    <div class="input-group date datepicker" id="hire-from-date">
                                                        <input type="text" class="form-control" value="10/20/2015">
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-md-offset-2">
                                                <div class="form-group">
                                                    <label for="hire-through-date">Through Date Submitted</label>
                                                    <div class="input-group date datepicker" id="hire-through-date">
                                                        <input type="text" class="form-control" value="10/20/2015">
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
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectcosts">Cost Savings
                                                    </label>
                                                    <select id="selectcosts" name="selectcosts" class="form-control selectcosts">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selecthours">Time Savings?
                                                    </label>
                                                    <select id="selecthours" name="selecthours" class="form-control selecthours">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectbasic">Safety Issue
                                                    </label>
                                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectbasic">Success Story
                                                    </label>
                                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!-- /tab-pane -->
                                <div class="tab-pane fade in" id="bibr">
                                    <section class="section">
                                        <div class="supporting">
                                            <h2>Specify Report Criteria: <small> BI Benefits Report</small></h2>
                                            <hr>
                                        </div>
                                    </section>
                                        <section>
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Facility
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="1000000 - Nursing Information Services">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                        <option data-dept="Facility" data-userid="user<?= $i ?>" value="Department <?= $i ?>">Department
                                                            <?= $i ?>
                                                        </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Submitter Department
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="1000000 - Nursing Information Services">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                        <option data-dept="Facility" data-userid="user<?= $i ?>" value="Department <?= $i ?>">Department
                                                            <?= $i ?>
                                                        </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Officer Name
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="Tracy Yowell">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                            <option data-dept="Facility" data-userid="user<?= $i ?>" value="Name <?= $i ?>">Name
                                                                <?= $i ?>
                                                            </option>
                                                            <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>

                                             <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectcosts">Status
                                                    </label>
                                                    <select id="selectcosts" name="selectcosts" class="form-control selectcosts">
                                                        <option value="0"></option>
                                                        <option value="1">Open</option>
                                                        <option value="2">Closed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        </section>
                                        <section class="section">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="hire-from-date">From Date Submitted </label>
                                                    <div class="input-group date datepicker" id="hire-from-date">
                                                        <input type="text" class="form-control" value="10/20/2015">
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-md-offset-2">
                                                <div class="form-group">
                                                    <label for="hire-through-date">Through Date Submitted</label>
                                                    <div class="input-group date datepicker" id="hire-through-date">
                                                        <input type="text" class="form-control" value="10/20/2015">
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
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectcosts">Cost Savings
                                                    </label>
                                                    <select id="selectcosts" name="selectcosts" class="form-control selectcosts">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selecthours">Time Savings?
                                                    </label>
                                                    <select id="selecthours" name="selecthours" class="form-control selecthours">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectbasic">Safety Issue
                                                    </label>
                                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectbasic">Success Story
                                                    </label>
                                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!-- /tab-pane -->
                                <div class="tab-pane fade in" id="noibd">
                                    <section class="section">
                                        <div class="supporting">
                                            <h2>Specify Report Criteria: <small> Number of Ideas by Dept.</small></h2>
                                            <hr>
                                        </div>
                                    </section>
                                       <section>
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Facility
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="1000000 - Nursing Information Services">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                        <option data-dept="Facility" data-userid="user<?= $i ?>" value="Department <?= $i ?>">Department
                                                            <?= $i ?>
                                                        </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Submitter Department
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="1000000 - Nursing Information Services">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                        <option data-dept="Facility" data-userid="user<?= $i ?>" value="Department <?= $i ?>">Department
                                                            <?= $i ?>
                                                        </option>
                                                        <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Officer Name
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="Tracy Yowell">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                            <option data-dept="Facility" data-userid="user<?= $i ?>" value="Name <?= $i ?>">Name
                                                                <?= $i ?>
                                                            </option>
                                                            <?php $i++; } ?>
                                                    </select>
                                                </div>
                                            </div>

                                             <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectcosts">Status
                                                    </label>
                                                    <select id="selectcosts" name="selectcosts" class="form-control selectcosts">
                                                        <option value="0"></option>
                                                        <option value="1">Open</option>
                                                        <option value="2">Closed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        </section>
                                        <section class="section">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="hire-from-date">From Date Submitted </label>
                                                    <div class="input-group date datepicker" id="hire-from-date">
                                                        <input type="text" class="form-control" value="10/20/2015">
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-md-offset-2">
                                                <div class="form-group">
                                                    <label for="hire-through-date">Through Date Submitted</label>
                                                    <div class="input-group date datepicker" id="hire-through-date">
                                                        <input type="text" class="form-control" value="10/20/2015">
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
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectcosts">Cost Savings
                                                    </label>
                                                    <select id="selectcosts" name="selectcosts" class="form-control selectcosts">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selecthours">Time Savings?
                                                    </label>
                                                    <select id="selecthours" name="selecthours" class="form-control selecthours">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectbasic">Safety Issue
                                                    </label>
                                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectbasic">Success Story
                                                    </label>
                                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!-- /tab-pane -->
                            </div>
                            <!-- /tab-content -->
                             <?= createStickybar($patterns['stickybar'] = array(
        'largeLeft' => '<a href="./reports/examples/bi-detail-reports/submitted-ideas.html" target="_blank" class="btn btn-success">Run Report</a>
                                                    <a href="" class="btn btn-default">Cancel</a>',
        'smallLeft' => '',
        'largeRight' => '',
        'smallRight' => '',
    )
); ?>

                           
                                <!-- /stickybar -->
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
    <div id="modal-report-list" class="modal fade" tabindex="-1">
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
        (function(window, $) {
            'use strict';

            window.HealthStream = window.HealthStream || {};
            var healthStream = window.HealthStream;

            healthStream.reports = {};
            healthStream.reports.wizard = function() {
                $('.report-list').show();
                $('li.report-item').on("click", function() {
                    var selected = $(this).find(':selected');

                    $('.' + selected.val()).show();
                    $('.optionvalue').html(selected.html());

                    // if ($(this).val() == "default") {
                    $('div').removeClass('in active');
                    $('nav li').removeClass('active');
                    $('#di').addClass('in active');
                    // }
                });
            };
            healthStream.reports.datepicker = function() {
                $('.datepicker').datepicker({
                    autoclose: true
                });
            };

            $(window).on('load', function() {
                healthStream.reports.wizard();
                healthStream.reports.datepicker();
            });

        }(window, jQuery));
        </script>
        <?php
include_site_end($options);
?>
