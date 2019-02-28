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
                        <figure class="ag-chart-holder">
                            <canvas class="ag-chart" data-type="Doughnut" data-segments="dataEmployeeProgress" width="150" height="150"></canvas>
                            <figcaption class="ag-chart-center">
                                <span class="ag-chart-center-value"></span>
                                <span class="ag-chart-center-label"></span>
                            </figcaption>
                            <figcaption>Employee Progress</figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4">
                        <figure class="ag-chart-holder">
                            <canvas class="ag-chart" data-type="Doughnut" data-segments="dataRaterProgress" width="150" height="150"></canvas>
                            <figcaption class="ag-chart-center">
                                <span class="ag-chart-center-value"></span>
                                <span class="ag-chart-center-label"></span>
                            </figcaption>
                            <figcaption>Rater Progress</figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4">
                        <figure class="ag-chart-holder">
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

            <section class="section-header">
                <div class="row">
                    <div class="col-sm-9 section-header-title">
                        <h2>Employee Assessments</h2>
                    </div>
                    <div class="col-sm-3">
                        <div class="section-header-sort">
                            <div class="dropdown">
                                <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Employee <i class="fa fa-sort"></i></a>
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
            </section>

            <section class="section">
                <div class="ag-header ag-header-md">
                    <div class="ag-col">
                        <div class="row">
                            <div class="col-md-9">
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
                                    <div class="col-md-2 ag-peers">Peers</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-6 ag-state">State</div>
                                    <div class="col-md-6 ag-state">Due</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ag-col ag-col-actions">Actions</div>
                </div>
                <div class="ag-header ag-header-sm">
                    <div class="ag-col">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-sm-6">Employee</div>
                                    <div class="col-sm-6">Progress</div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-sm-5">State</div>
                                    <div class="col-sm-7">Due</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ag-col ag-col-actions">Actions</div>
                </div>
                <div class="ag-list ag-list-overview">

                    <div class="ag-item">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-8 col-md-9">
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
                                <div class="col-sm-4 col-md-3">
                                    <div class="row">
                                        <div class="col-sm-5 col-md-6 ag-state">
                                            <label>State:</label> Evaluate
                                        </div>
                                        <div class="col-sm-7 col-md-6 ag-due">
                                            <label>Due:</label> Oct. 25, 2015
                                        </div>
                                    </div>
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

                    <div class="ag-item">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-8 col-md-9">
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
                                <div class="col-sm-4 col-md-3">
                                    <div class="row">
                                        <div class="col-sm-5 col-md-6 ag-state">
                                            <label>State:</label> Evaluate
                                        </div>
                                        <div class="col-sm-7 col-md-6 ag-due">
                                            <label>Due:</label> Oct. 25, 2015
                                        </div>
                                    </div>
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

                    <div class="ag-item">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-8 col-md-9">
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
                                <div class="col-sm-4 col-md-3">
                                    <div class="row">
                                        <div class="col-sm-5 col-md-6 ag-state">
                                            <label>State:</label> Review
                                        </div>
                                        <div class="col-sm-7 col-md-6 ag-due">
                                            <label>Due:</label> Oct. 25, 2015
                                        </div>
                                    </div>
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

                    <div class="ag-item">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-8 col-md-9">
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
                                <div class="col-sm-4 col-md-3">
                                    <div class="row">
                                        <div class="col-sm-5 col-md-6 ag-state">
                                            <label>State:</label> Evaluate
                                        </div>
                                        <div class="col-sm-7 col-md-6 ag-due">
                                            <label>Due:</label> Oct. 25, 2015
                                        </div>
                                    </div>
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

                    <div class="ag-item">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-8 col-md-9">
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
                                <div class="col-sm-4 col-md-3">
                                    <div class="row">
                                        <div class="col-sm-5 col-md-6 ag-state">
                                            <label>State:</label> Closed
                                        </div>
                                        <div class="col-sm-7 col-md-6 ag-due">
                                            <label>Due:</label> Oct. 25, 2015
                                        </div>
                                    </div>
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

                    <div class="ag-item">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-8 col-md-9">
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
                                <div class="col-sm-4 col-md-3">
                                    <div class="row">
                                        <div class="col-sm-5 col-md-6 ag-state">
                                            <label>State:</label> Evaluate
                                        </div>
                                        <div class="col-sm-7 col-md-6 ag-due">
                                            <label>Due:</label> Oct. 25, 2015
                                        </div>
                                    </div>
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

                    <div class="ag-item">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-8 col-md-9">
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
                                <div class="col-sm-4 col-md-3">
                                    <div class="row">
                                        <div class="col-sm-5 col-md-6 ag-state">
                                            <label>State:</label> Evaluate
                                        </div>
                                        <div class="col-sm-7 col-md-6 ag-due">
                                            <label>Due:</label> Oct. 25, 2015
                                        </div>
                                    </div>
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

                    <div class="ag-item">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-8 col-md-9">
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
                                <div class="col-sm-4 col-md-3">
                                    <div class="row">
                                        <div class="col-sm-5 col-md-6 ag-state">
                                            <label>State:</label> Evaluate
                                        </div>
                                        <div class="col-sm-7 col-md-6 ag-due">
                                            <label>Due:</label> Oct. 25, 2015
                                        </div>
                                    </div>
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

                    <div class="ag-item">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-8 col-md-9">
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
                                <div class="col-sm-4 col-md-3">
                                    <div class="row">
                                        <div class="col-sm-5 col-md-6 ag-state">
                                            <label>State:</label> Approval
                                        </div>
                                        <div class="col-sm-7 col-md-6 ag-due">
                                            <label>Due:</label> Oct. 25, 2015
                                        </div>
                                    </div>
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

                    <div class="ag-item">
                        <div class="ag-col">
                            <div class="row">
                                <div class="col-sm-8 col-md-9">
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
                                <div class="col-sm-4 col-md-3">
                                    <div class="row">
                                        <div class="col-sm-5 col-md-6 ag-state">
                                            <label>State:</label> Evaluate
                                        </div>
                                        <div class="col-sm-7 col-md-6 ag-due">
                                            <label>Due:</label> Oct. 25, 2015
                                        </div>
                                    </div>
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
                            ',
                        ),
                        array(
                            'classes' => array('visible-xs'),
                            'html' => '
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        Options
                                    </button>
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
<div id="modal-peers" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Assessment Progress</h4>
            </div>
            <div class="modal-body ag-progress">
                <div class="row row-spaced">
                    <div class="col-sm-6">
                        <label>Employee:</label> Wilder, Janice M.
                    </div>
                    <div class="col-sm-6">
                        <div class="progress">
                            <div class="progress-bar" style="width:60%">60%</div>
                            <div class="progress-label progress-label-start">Not Yet Started</div>
                            <div class="progress-label progress-label-end">Submitted</div>
                        </div>
                    </div>
                </div>
                <div class="row row-spaced">
                    <div class="col-sm-6">
                        <label>Rater:</label> Crane, Davy L.
                    </div>
                    <div class="col-sm-6">
                        <div class="progress">
                            <div class="progress-bar">20%</div>
                            <div class="progress-label progress-label-start">Not Yet Started</div>
                            <div class="progress-label progress-label-end">Submitted</div>
                        </div>
                    </div>
                </div>
                <div class="row row-spaced">
                    <div class="col-sm-6">
                        <label>Peer:</label> Park, Jennifer S.
                    </div>
                    <div class="col-sm-6">
                        <div class="progress">
                            <div class="progress-bar">20%</div>
                            <div class="progress-label progress-label-start">Not Yet Started</div>
                            <div class="progress-label progress-label-end">Submitted</div>
                        </div>
                    </div>
                </div>
                <div class="row row-spaced">
                    <div class="col-sm-6">
                        <label>Peer:</label> Roley, Phillip A.
                    </div>
                    <div class="col-sm-6">
                        <div class="progress">
                            <div class="progress-bar" style="width:50%">50%</div>
                            <div class="progress-label progress-label-start">Not Yet Started</div>
                            <div class="progress-label progress-label-end">Submitted</div>
                        </div>
                    </div>
                </div>
                <div class="row row-spaced">
                    <div class="col-sm-6">
                        <label>Peer:</label> Rink, Christopher P.
                    </div>
                    <div class="col-sm-6">
                        <div class="progress progress-end">
                            <div class="progress-bar" style="width:100%">100%</div>
                            <div class="progress-label progress-label-start">Not Yet Started</div>
                            <div class="progress-label progress-label-end">Submitted</div>
                        </div>
                    </div>
                </div>
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

    var dataEmployeeProgress = [
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
    ],
    dataRaterProgress = [
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
    ],
    dataState = [
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
            }
        });
    });

</script>
<?= createSiteEnd(); ?>