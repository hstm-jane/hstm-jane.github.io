<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = '2015 Performance Appraisal';
$patterns['focus']['title'] = '2015 Performance Appraisal';
$patterns['focus']['icon'] = array('class' => 'hs-icons-assessment','type' => 'Assessment');
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Due:',
        'value' =>  'May 1, 2014',
    ),
);
?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout">
    <div class="container">
        <section class="section section-main section-box">

            <section class="section section-charts hidden-xs">
                <div class="row">
                    <div class="col-sm-4">
                        <figure class="ag-chart-holder" id="chartEmployeeProgress">
                            <canvas class="ag-chart" data-type="Doughnut" data-segments="dataEmployeeProgress" width="150" height="150"></canvas>
                            <figcaption class="ag-chart-center">
                                <span class="ag-chart-center-value"></span>
                                <span class="ag-chart-center-label"></span>
                            </figcaption>
                            <figcaption>Employee Progress</figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4">
                        <figure class="ag-chart-holder" id="chartRaterProgress">
                            <canvas class="ag-chart" data-type="Doughnut" data-segments="dataRaterProgress" width="150" height="150"></canvas>
                            <figcaption class="ag-chart-center">
                                <span class="ag-chart-center-value"></span>
                                <span class="ag-chart-center-label"></span>
                            </figcaption>
                            <figcaption>Rater Progress</figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4">
                        <figure class="ag-chart-holder" id="chartState">
                            <canvas class="ag-chart" data-type="Doughnut" data-segments="dataState" width="150" height="150"></canvas>
                            <figcaption class="ag-chart-center">
                                <span class="ag-chart-center-value"></span>
                                <span class="ag-chart-center-label"></span>
                            </figcaption>
                            <figcaption>State</figcaption>
                        </figure>
                    </div>
                </div>
            </section>

            <section class="section-header" style="margin-top: 20px;">
                <div class="row">
                    <div class="col-sm-6 section-header-title">
                        <h2>Employee Assessments</h2>
                    </div>
                    <div class="col-sm-6 hidden-xs">

                        <div class="section-header-sort">
                            <div class="btn-toolbar" style="display: inline-block;">
                                <div class="btn-group dropdown">
                                    <button class="btn btn-default js-view-all" disabled>View All</button>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Sort: Employee <i class="fa fa-sort"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="active"><a href="#">Employee</a></li>
                                        <li><a href="#">Employee Progress</a></li>
                                        <li><a href="#">Rater</a></li>
                                        <li><a href="#">Rater Progress</a></li>
                                        <li><a href="#">Status</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="ag-header ag-header-md">
                    <div class="ag-col">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-6">Employee</div>
                                            <div class="col-md-6 ag-employee-progress">Progress</div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-6 ag-rater-label">Rater</div>
                                            <div class="col-md-6 ag-rater-progress">Progress</div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 ag-peers">Peers Complete</div>
                                </div>
                            </div>
                            <div class="col-md-2 ag-state">State</div>
                        </div>
                    </div>
                    <div class="ag-col ag-col-actions">Actions</div>
                </div>
                <div class="ag-header ag-header-sm">
                    <div class="ag-col">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-6">Employee</div>
                                    <div class="col-sm-6">Progress</div>
                                </div>
                            </div>
                            <div class="col-sm-3">State</div>
                        </div>
                    </div>
                    <div class="ag-col ag-col-actions">Actions</div>
                </div>
                <div class="ag-list ag-list-overview">

                    <div class="ag-item" data-employee-progress="Not Yet Started" data-rater-progress="Not Yet Started" data-state="Evaluate">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-9 col-md-10">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-employee-label">
                                                    <a href="#">Basille, Victor P.</a>
                                                </div>
                                                <div class="col-sm-6 ag-employee-progress">
                                                    <div class="progress progress-start">
                                                        <div class="progress-bar" style="width:0%;">0%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-rater-label">
                                                    <label>Rater:</label> Crane, Davy L.
                                                </div>
                                                <div class="col-sm-6 ag-rater-progress">
                                                    <div class="progress progress-start">
                                                        <div class="progress-bar" style="width:0%;">0%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ag-peers">
                                            <div class="row">
                                                <div class="col-sm-6 hidden-lg hidden-md">
                                                    <label>Peers Complete:</label>
                                                </div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="progress progress-start">
                                                        <div class="progress-bar" style="width:0%">0 of 3</div>
                                                        <div class="progress-label progress-label-start">0 of 3</div>
                                                        <div class="progress-label progress-label-end">3 of 3</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-2 ag-state">
                                    <label>State:</label> Evaluate
                                </div>
                            </div>
                        </div>
                        <div class="ag-col ag-col-actions">
                            <div class="action action-split">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-default btn-sm hidden-xs">Start</a>
                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Start</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#modal-peers" data-toggle="modal">View Progress</a></li>
                                        <li><a href="assessment-manage-rater-peers-single.php">Manage Rater &amp; Peers</a></li>
                                        <li><a href="#">Print</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ag-item" data-employee-progress="In Progress" data-rater-progress="In Progress" data-state="Evaluate">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-9 col-md-10">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-employee-label">
                                                    <a href="#">Bradford, Julie D.</a>
                                                </div>
                                                <div class="col-sm-6 ag-employee-progress">
                                                    <div class="progress">
                                                        <div class="progress-bar">10%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-rater-label">
                                                    <label>Rater:</label> Crane, Davy L.
                                                </div>
                                                <div class="col-sm-6 ag-rater-progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width:60%;">60%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ag-peers">
                                            <div class="row">
                                                <div class="col-sm-6 hidden-lg hidden-md">
                                                    <label>Peers Complete:</label>
                                                </div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width:33%;">1 of 3</div>
                                                        <div class="progress-label progress-label-start">0 of 3</div>
                                                        <div class="progress-label progress-label-end">3 of 3</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-2 ag-state">
                                    <label>State:</label> Evaluate
                                </div>
                            </div>
                        </div>
                        <div class="ag-col ag-col-actions">
                            <div class="action action-split">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-default btn-sm hidden-xs">Resume</a>
                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Resume</a></li>
                                        <li><a href="#">Reset</a></li>
                                        <li><a href="#modal-peers" data-toggle="modal">View Progress</a></li>
                                        <li><a href="assessment-manage-rater-peers-single.php">Manage Rater &amp; Peers</a></li>
                                        <li><a href="#">Print</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ag-item" data-employee-progress="Submitted" data-rater-progress="Submitted" data-state="Review">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-9 col-md-10">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-employee-label">
                                                    <a href="#">Fiedler, Joanne M.</a>
                                                </div>
                                                <div class="col-sm-6 ag-employee-progress">
                                                    <div class="progress progress-end">
                                                        <div class="progress-bar" style="width:100%">100%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-rater-label">
                                                    <label>Rater:</label> Fey, Lester P.
                                                </div>
                                                <div class="col-sm-6 ag-rater-progress">
                                                    <div class="progress progress-end">
                                                        <div class="progress-bar" style="width:100%">100%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ag-peers">
                                            <div class="row">
                                                <div class="col-sm-6 hidden-lg hidden-md">
                                                    <label>Peers Complete:</label>
                                                </div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="progress progress-end">
                                                        <div class="progress-bar" width="100%">3 of 3</div>
                                                        <div class="progress-label progress-label-start">0 of 3</div>
                                                        <div class="progress-label progress-label-end">3 of 3</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-2 ag-state">
                                    <label>State:</label> Review
                                </div>
                            </div>
                        </div>
                        <div class="ag-col ag-col-actions">
                            <div class="action action-split">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-default btn-sm hidden-xs">View</a>
                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">View</a></li>
                                        <li><a href="#">Reset</a></li>
                                        <li><a href="#">Revert</a></li>
                                        <li><a href="#modal-peers" data-toggle="modal">View Progress</a></li>
                                        <li><a href="#">Print</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ag-item" data-employee-progress="In Progress" data-rater-progress="Not Yet Started" data-state="Evaluate">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-9 col-md-10">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-employee-label">
                                                    <a href="#">Montoya, Alice G.</a>
                                                </div>
                                                <div class="col-sm-6 ag-employee-progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width:100%">100%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-rater-label">
                                                    <label>Rater:</label> Crane, Davy L.
                                                </div>
                                                <div class="col-sm-6 ag-rater-progress">
                                                    <div class="progress progress-start">
                                                        <div class="progress-bar" style="width:0%;">0%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ag-peers">
                                            <div class="row">
                                                <div class="col-sm-6 hidden-lg hidden-md">
                                                    <label>Peers Complete:</label>
                                                </div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="progress progress-start">
                                                        <div class="progress-bar"></div>
                                                        <div class="progress-label progress-label-start">No Peers</div>
                                                        <div class="progress-label progress-label-end">No Peers</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-2 ag-state">
                                    <label>State:</label> Evaluate
                                </div>
                            </div>
                        </div>
                        <div class="ag-col ag-col-actions">
                            <div class="action action-split">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-default btn-sm hidden-xs">Start</a>
                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Start</a></li>
                                        <li><a href="#">Reset</a></li>
                                        <li><a href="#modal-peers" data-toggle="modal">View Progress</a></li>
                                        <li><a href="assessment-manage-rater-peers-single.php">Manage Rater &amp; Peers</a></li>
                                        <li><a href="#">Print</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ag-item" data-employee-progress="Submitted" data-rater-progress="Submitted" data-state="Closed">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-9 col-md-10">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-employee-label">
                                                    <a href="#">Moore, Rita H.</a>
                                                </div>
                                                <div class="col-sm-6 ag-employee-progress">
                                                    <div class="progress progress-end">
                                                        <div class="progress-bar" style="width:100%">100%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-rater-label">
                                                    <label>Rater:</label> Crane, Davy L.
                                                </div>
                                                <div class="col-sm-6 ag-rater-progress">
                                                    <div class="progress progress-end">
                                                        <div class="progress-bar" style="width:100%;">100%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ag-peers">
                                            <div class="row">
                                                <div class="col-sm-6 hidden-lg hidden-md">
                                                    <label>Peers Complete:</label>
                                                </div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="progress progress-end">
                                                        <div class="progress-bar" style="width:100%">3 of 3</div>
                                                        <div class="progress-label progress-label-start">0 of 3</div>
                                                        <div class="progress-label progress-label-end">3 of 3</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-2 ag-state">
                                    <label>State:</label> Closed
                                </div>
                            </div>
                        </div>
                        <div class="ag-col ag-col-actions">
                            <div class="action action-split">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-default btn-sm hidden-xs">Print</a>
                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Print</a></li>
                                        <li><a href="#">Revert</a></li>
                                        <li><a href="#modal-peers" data-toggle="modal">View Progress</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ag-item" data-employee-progress="Submitted" data-rater-progress="In Progress" data-state="Evaluate">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-9 col-md-10">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-employee-label">
                                                    <a href="#">Park, Jennifer S.</a>
                                                </div>
                                                <div class="col-sm-6 ag-employee-progress">
                                                    <div class="progress progress-end">
                                                        <div class="progress-bar" style="width:80%">80%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-rater-label">
                                                    <label>Rater:</label> Fey, Lester P.
                                                </div>
                                                <div class="col-sm-6 ag-rater-progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width:60%;">60%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ag-peers">
                                            <div class="row">
                                                <div class="col-sm-6 hidden-lg hidden-md">
                                                    <label>Peers Complete:</label>
                                                </div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width:66%">2 of 3</div>
                                                        <div class="progress-label progress-label-start">0 of 3</div>
                                                        <div class="progress-label progress-label-end">3 of 3</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-2 ag-state">
                                    <label>State:</label> Evaluate
                                </div>
                            </div>
                        </div>
                        <div class="ag-col ag-col-actions">
                            <div class="action action-split">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-default btn-sm hidden-xs">View</a>
                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">View</a></li>
                                        <li><a href="#">Reset</a></li>
                                        <li><a href="#modal-peers" data-toggle="modal">View Progress</a></li>
                                        <li><a href="assessment-manage-rater-peers-single.php">Manage Rater &amp; Peers</a></li>
                                        <li><a href="#">Print</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ag-item" data-employee-progress="In Progress" data-rater-progress="Not Yet Started" data-state="Evaluate">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-9 col-md-10">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-employee-label">
                                                    <a href="#">Roley, Phillip A.</a>
                                                </div>
                                                <div class="col-sm-6 ag-employee-progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width:50%">50%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-rater-label">
                                                    <label>Rater:</label> Fey, Lester P.
                                                </div>
                                                <div class="col-sm-6 ag-rater-progress">
                                                    <div class="progress progress-start">
                                                        <div class="progress-bar" style="width:0%;">0%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ag-peers">
                                            <div class="row">
                                                <div class="col-sm-6 hidden-lg hidden-md">
                                                    <label>Peers Complete:</label>
                                                </div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width:33%">1 of 3</div>
                                                        <div class="progress-label progress-label-start">0 of 3</div>
                                                        <div class="progress-label progress-label-end">3 of 3</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-2 ag-state">
                                    <label>State:</label> Evaluate
                                </div>
                            </div>
                        </div>
                        <div class="ag-col ag-col-actions">
                            <div class="action action-split">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-default btn-sm hidden-xs">View</a>
                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">View</a></li>
                                        <li><a href="#">Reset</a></li>
                                        <li><a href="#modal-peers" data-toggle="modal">View Progress</a></li>
                                        <li><a href="assessment-manage-rater-peers-single.php">Manage Rater &amp; Peers</a></li>
                                        <li><a href="#">Print</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ag-item" data-employee-progress="In Progress" data-rater-progress="Not Yet Started" data-state="Evaluate">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-9 col-md-10">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-employee-label">
                                                    <a href="#">Rink, Christopher P.</a>
                                                </div>
                                                <div class="col-sm-6 ag-employee-progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width:30%">30%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-rater-label">
                                                    <label>Rater:</label> Crane, Davy L.
                                                </div>
                                                <div class="col-sm-6 ag-rater-progress">
                                                    <div class="progress progress-start">
                                                        <div class="progress-bar" style="width:0%;">0%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ag-peers">
                                            <div class="row">
                                                <div class="col-sm-6 hidden-lg hidden-md">
                                                    <label>Peers Complete:</label>
                                                </div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="progress progress-start">
                                                        <div class="progress-bar" style="width:0%">0 of 3</div>
                                                        <div class="progress-label progress-label-start">0 of 3</div>
                                                        <div class="progress-label progress-label-end">3 of 3</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-2 ag-state">
                                    <label>State:</label> Evaluate
                                </div>
                            </div>
                        </div>
                        <div class="ag-col ag-col-actions">
                            <div class="action action-split">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-default btn-sm hidden-xs">Start</a>
                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Start</a></li>
                                        <li><a href="#">Reset</a></li>
                                        <li><a href="#modal-peers" data-toggle="modal">View Progress</a></li>
                                        <li><a href="assessment-manage-rater-peers-single.php">Manage Rater &amp; Peers</a></li>
                                        <li><a href="#">Print</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ag-item" data-employee-progress="Submitted" data-rater-progress="Submitted" data-state="Approval">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-9 col-md-10">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-employee-label">
                                                    <a href="#">Story, Yvonne G.</a>
                                                </div>
                                                <div class="col-sm-6 ag-employee-progress">
                                                    <div class="progress progress-end">
                                                        <div class="progress-bar" style="width:100%">100%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-rater-label">
                                                    <label>Rater:</label> Crane, Davy L.
                                                </div>
                                                <div class="col-sm-6 ag-rater-progress">
                                                    <div class="progress progress-end">
                                                        <div class="progress-bar" style="width:100%;">100%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ag-peers">
                                            <div class="row">
                                                <div class="col-sm-6 hidden-lg hidden-md">
                                                    <label>Peers Complete:</label>
                                                </div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="progress progress-end">
                                                        <div class="progress-bar" style="width:100%">3 of 3</div>
                                                        <div class="progress-label progress-label-start">0 of 3</div>
                                                        <div class="progress-label progress-label-end">3 of 3</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-2 ag-state">
                                    <label>State:</label> Approval
                                </div>
                            </div>
                        </div>
                        <div class="ag-col ag-col-actions">
                            <div class="action action-split">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-default btn-sm hidden-xs">View</a>
                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">View</a></li>
                                        <li><a href="#">Reset</a></li>
                                        <li><a href="#modal-activity" data-toggle="modal">View Approval Activity</a></li>
                                        <li><a href="#modal-peers" data-toggle="modal">View Progress</a></li>
                                        <li><a href="assessment-manage-rater-peers-single.php">Manage Rater &amp; Peers</a></li>
                                        <li><a href="#">Print</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ag-item" data-employee-progress="In Progress" data-rater-progress="Not Yet Started" data-state="Evaluate">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-9 col-md-10">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-employee-label">
                                                    <a href="#">Wilder, Janice M.</a>
                                                </div>
                                                <div class="col-sm-6 ag-employee-progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width:100%">100%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 ag-rater-label">
                                                    <label>Rater:</label> Crane, Davy L.
                                                </div>
                                                <div class="col-sm-6 ag-rater-progress">
                                                    <div class="progress progress-start">
                                                        <div class="progress-bar" style="width:0%;">0%</div>
                                                        <div class="progress-label progress-label-start">Not Yet Started</div>
                                                        <div class="progress-label progress-label-end">Submitted</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ag-peers">
                                            <div class="row">
                                                <div class="col-sm-6 hidden-lg hidden-md">
                                                    <label>Peers Complete:</label>
                                                </div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width:66%">2 of 3</div>
                                                        <div class="progress-label progress-label-start">0 of 3</div>
                                                        <div class="progress-label progress-label-end">3 of 3</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-2 ag-state">
                                    <label>State:</label> Evaluate
                                </div>
                            </div>
                        </div>
                        <div class="ag-col ag-col-actions">
                            <div class="action action-split">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-default btn-sm hidden-xs">Start</a>
                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Start</a></li>
                                        <li><a href="#">Reset</a></li>
                                        <li><a href="#modal-peers" data-toggle="modal">View Progress</a></li>
                                        <li><a href="assessment-manage-rater-peers-single.php">Manage Rater &amp; Peers</a></li>
                                        <li><a href="#">Print</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php
                $stickybar = array(
                    'sets' => array(
                        array(
                            'classes' => array('hidden-xs'),
                            'html' => '
                                <a href="assessment-manage-rater-peers.php" class="btn btn-default">Manage Rater &amp; Peers</a>
                                <a href="assessment-dynamic-section.php" class="btn btn-default">Add to Dynamic Section</a>
                                <a href="/" class="btn btn-default">Return to To Do</a>
                                <!-- <a href="#modal-refine" class="btn btn-default" data-toggle="modal">Filter</a> -->
                            ',
                        ),
                        array(
                            'classes' => array('visible-xs'),
                            'html' => '
                                <a href="#modal-refine" class="btn btn-default" data-toggle="modal">Filter</a>
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-caret-up"></i></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="assessment-manage-rater-peers.php">Manage Rater &amp; Peers</a></li>
                                        <li><a href="assessment-dynamic-section.php">Add to Dynamic Section</a></li>
                                    </ul>
                                </div>
                                <a href="#" class="btn btn-default">Return to To Do</a>
                            ',
                        ),
                    ),
                );
                echo createStickybar($stickybar);
            ?>

        </section>
    </div><!-- /container -->
</div><!-- /layout -->

<!-- Modal -->
<div id="modal-refine" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Filter Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <section class="section section-refinement-group">
                        <h3>Sort</h3>
                        <select class="form-control">
                            <option>Employee</option>
                            <option>Employee Progress</option>
                            <option>Rater</option>
                            <option>Rater Progress</option>
                            <option>Status</option>
                        </select>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Employee Progress</h3>
                        <select class="form-control" id="js-refine-employee">
                            <option value="">Any Employee Progress</option>
                            <option value="Submitted" data-count="4">Submitted (4)</option>
                            <option value="In Progress" data-count="5">In Progress (5)</option>
                            <option value="Not Yet Started" data-count="1">Not Yet Started (1)</option>
                        </select>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Rater Progress</h3>
                        <select class="form-control" id="js-refine-rater">
                            <option value="">Any Rater Progress</option>
                            <option value="Submitted" data-count="3">Submitted (3)</option>
                            <option value="In Progress" data-count="2">In Progress (2)</option>
                            <option value="Not Yet Started" data-count="5">Not Yet Started (5)</option>
                        </select>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>State</h3>
                        <select class="form-control" id="js-refine-state">
                            <option value="">Any State</option>
                            <option value="Approval" data-count="1">Approval (1)</option>
                            <option value="Review" data-count="1">Review (1)</option>
                            <option value="Evaluate" data-count="7">Evaluate (7)</option>
                            <option value="Closed" data-count="1">Closed (1)</option>
                        </select>
                    </section>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-activity" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Assessment Approval Activity</h4>
            </div>
            <div class="modal-body">

                <?php

                $content = '
                    <section class="section">
                        <h5>Comments</h5>
                        <p>More details please. She had a large jump in multiple areas.</p>
                    </section>
                ';
                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal')),
                    ),
                    'title' => 'Martin, Sarah L.',
                    'meta' => array(
                        array(
                            'label' => 'Status:',
                            'value' => 'Pending',
                        ),
                        array(
                            'label' => 'Date: ',
                            'value' => 'Dec 23, 2014',
                            'attributes' => array(
                                array('class','meta-callout'),
                            )
                        )
                    ),
                    'action' => array(
                        'type' => 'status-pending',
                    ),
                    'nested' => array(
                        'hide' => array($content)
                    ),
                );
                echo createSlat($slat);


                $content = '
                    <section class="section">
                        <h5>Comments</h5>
                        <p>More details please. She had a large jump in multiple areas.</p>
                    </section>
                ';
                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal')),
                    ),
                    'title' => 'Martin, Sarah L.',
                    'meta' => array(
                        array(
                            'label' => 'Status:',
                            'value' => 'Rejected',
                        ),
                        array(
                            'label' => 'Date: ',
                            'value' => 'Dec 22, 2014',
                            'attributes' => array(
                                array('class','meta-callout'),
                            )
                        )
                    ),
                    'action' => array(
                        'type' => 'status-fail',
                    ),
                    'nested' => array(
                        'hide' => array($content)
                    ),
                );
                echo createSlat($slat);

                $content = '
                    <section class="section">
                        <h5>Comments</h5>
                        <p>Rita is a highly motivated and engaged employee. She inspires other to exhibit a positive work attitude.</p>
                    </section>
                ';
                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal')),
                    ),
                    'title' => 'Smith, John P.',
                    'meta' => array(
                        array(
                            'label' => 'Status:',
                            'value' => 'Accepted',
                        ),
                        array(
                            'label' => 'Date: ',
                            'value' => 'Dec 21, 2014',
                            'attributes' => array(
                                array('class','meta-callout'),
                            )
                        )
                    ),
                    'action' => array(
                        'type' => 'status-complete',
                    ),
                    'nested' => array(
                        'hide' => array($content)
                    ),
                );
                echo createSlat($slat);

                $content = '
                    <section class="section">
                        <h5>Comments</h5>
                        <p>Rita is a highly motivated and engaged employee. She inspires other to exhibit a positive work attitude.</p>
                    </section>
                ';
                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal')),
                    ),
                    'title' => 'Conner, Jill B.',
                    'meta' => array(
                        array(
                            'label' => 'Status:',
                            'value' => 'Accepted',
                        ),
                        array(
                            'label' => 'Date: ',
                            'value' => 'Dec 20, 2014',
                            'attributes' => array(
                                array('class','meta-callout'),
                            )
                        )
                    ),
                    'action' => array(
                        'type' => 'status-complete',
                    ),
                    'nested' => array(
                        'hide' => array($content)
                    ),
                );
                echo createSlat($slat);

                ?>
            </div>
            <div class="modal-footer">
               <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>

    $(function(){

        window.dataEmployeeProgress = [
            {
                value: 4,
                color: '#5cb85c',
                label: "Submitted"
            },
            {
                value: 5,
                color: '#5bc0de',
                label: "In Progress"
            },
            {
                value: 1,
                color: '#DDD',
                label: "Not Yet Started"
            }
        ];
        window.dataRaterProgress = [
            {
                value: 3,
                color: '#5cb85c',
                label: "Submitted"
            },
            {
                value: 2,
                color: '#5bc0de',
                label: "In Progress"
            },
            {
                value: 5,
                color: '#DDD',
                label: "Not Yet Started"
            }
        ];
        window.dataState = [
            {
                value: 1,
                color: '#d9534f',
                label: "Approval"
            },
            {
                value: 1,
                color: '#5cb85c',
                label: "Review"
            },
            {
                value: 7,
                color: '#5bc0de',
                label: "Evaluate"
            },
            {
                value: 1,
                color: '#DDD',
                label: "Closed"
            }
        ];

        $('.ag-chart').each(function(){
            var $chart = $(this),
                $holder = $chart.closest('.ag-chart-holder'),
                name = $holder.find('figcaption:eq(1)').text(),
                data = window[$chart.attr('data-segments')],
                ctx = $chart[0].getContext("2d"),
                progress,
                chartOptions = {
                    segmentStrokeColor: '#fff',
                    segmentStrokeWidth: 2,
                    percentageInnerCutout: 70,
                    animation : true,
                    animationEasing : "easeInOutCubic",
                    showTooltips: false
                };
            $holder.find('.ag-chart-center-value').text(data[0].value);
            $holder.find('.ag-chart-center-label').text(data[0].label);
            progress = new window.Chart(ctx).Doughnut(data,chartOptions);
            $chart.on('click',function(evt){
                var activePoints = progress.getSegmentsAtEvent(evt);
                if ( activePoints.length > 0 ) {
                    $holder.find('.ag-chart-center-value').text(activePoints[0].value);
                    $holder.find('.ag-chart-center-label').text(activePoints[0].label);
                    // console.log(activePoints[0].label + ': ' + activePoints[0].value);
                    $('.ag-list').trigger('refine.hs.aglist', {type: name, label: activePoints[0].label, value: activePoints[0].value });
                }
            });
        });


        $('#js-refine-employee').change(function(){
            $('.ag-list').trigger('refine.hs.aglist', {type: 'Employee Progress', label: $(this).val(), value: $(this).find('option:selected').attr('data-count') });
        });

        $('#js-refine-rater').change(function(){
            $('.ag-list').trigger('refine.hs.aglist', {type: 'Rater Progress', label: $(this).val(), value: $(this).find('option:selected').attr('data-count') });
        });

        $('#js-refine-state').change(function(){
            $('.ag-list').trigger('refine.hs.aglist', {type: 'State', label: $(this).val(), value: $(this).find('option:selected').attr('data-count') });
        });

        $('.js-view-all').click(function(e){
            e.preventDefault();
            $(this).prop('disabled',true);
            $('#js-refine-employee, #js-refine-rater, #js-refine-state').val('');
            $('.ag-list').trigger('refine.hs.aglist');
        });

        $('.ag-list')
            .on('refresh.hs.aglist',function(event,data){
                var employee = $('#js-refine-employee').val(),
                    rater = $('#js-refine-rater').val(),
                    state = $('#js-refine-state').val(),
                    none = employee.length + state.length + rater.length;

                $('.ag-item')
                    .hide()
                    .removeClass('ag-item-alt')
                    .each(function(){
                        $item = $(this);
                        if ( none === 0 || $item.attr('data-employee-progress') === employee || $item.attr('data-rater-progress') === rater || $item.attr('data-state') === state ) {
                            $item.show();
                        }
                    });

                $('.ag-item:visible:odd').addClass('ag-item-alt');
            })
            .on('refine.hs.aglist',function(event,data){
                $('.js-view-all').prop('disabled',false);
                if ( data && data.type === 'Employee Progress' ) {
                    $('#js-refine-employee').val(data.label);
                    $('#js-refine-rater, #js-refine-state').val('');
                    $('#chartRaterProgress, #chartState').fadeTo("fast" , 0.5).find('.ag-chart-center-value, .ag-chart-center-label').fadeTo("fast", 0);
                    $('#chartEmployeeProgress').fadeTo("fast", 1);
                    $('#chartEmployeeProgress').find('.ag-chart-center-value').html(data.value).fadeTo("fast", 1);
                    $('#chartEmployeeProgress').find('.ag-chart-center-label').html(data.label).fadeTo("fast", 1);
                }
                else if ( data && data.type === 'Rater Progress' ) {
                    $('#js-refine-rater').val(data.label);
                    $('#js-refine-employee, #js-refine-state').val('');
                    $('#chartEmployeeProgress, #chartState').fadeTo("fast", 0.5).find('.ag-chart-center-value, .ag-chart-center-label').fadeTo("fast", 0);
                    $('#chartRaterProgress').fadeTo("fast", 1);
                    $('#chartRaterProgress').find('.ag-chart-center-value').html(data.value).fadeTo("fast", 1);
                    $('#chartRaterProgress').find('.ag-chart-center-label').html(data.label).fadeTo("fast", 1);
                }
                else if ( data && data.type === 'State' ) {
                    $('#js-refine-state').val(data.label);
                    $('#js-refine-employee, #js-refine-rater').val('');
                    $('#chartEmployeeProgress, #chartRaterProgress').fadeTo("fast" , 0.5).find('.ag-chart-center-value, .ag-chart-center-label').fadeTo("fast", 0);
                    $('#chartState').fadeTo("fast", 1);
                    $('#chartState').find('.ag-chart-center-value').html(data.value).fadeTo("fast", 1);
                    $('#chartState').find('.ag-chart-center-label').html(data.label).fadeTo("fast", 1);
                }
                else {
                     $('#js-refine-employee, #js-refine-rater, #js-refine-state').val('');
                     $('#chartEmployeeProgress, #chartRaterProgress, #chartState').fadeTo("fast", 1).find('.ag-chart-center-value, .ag-chart-center-label').fadeTo("fast", 1);
                     $('.js-view-all').prop('disabled',true);
                }
                $('.ag-list').trigger('refresh.hs.aglist');
            });

        $('.ag-list').trigger('refresh.hs.aglist');

    });



</script>
<?= createSiteEnd(); ?>