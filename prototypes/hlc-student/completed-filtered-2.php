<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My Completions';
$patterns['header']['mainNavActive'] = 'completed';
$patterns['focus']['title'] = 'My Completions';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Total Completions:',
        'value' => '35',
    ),
    array(
        'label' => 'Est. Learning Time:',
        'value' => '8h 47m',
    ),
);
$patterns['focus']['action'] = '<a href="#modal-print" class="btn btn-focus" data-toggle="modal">Print <i class="fa fa-chevron-right"></i></a>';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<style>



    @media only print {
        .site-header {
            height: 60px;
            border-bottom: 1px solid #ccc;
        }
        .site-header a[href]:after { content: ""; }
        .site-header .trigger-open { display: none !important; }

        .focus-pageheader { display: none; }

        /*.section,*/
        .slat { page-break-inside: avoid; }

        .slat .btn {
            display: none !important;
        }

        .slat .collapse-group {
            height: auto;
            display: block !important;
        }
        .slat .collapse-toggle {
            display: none !important;
        }

        .site-footer .focus-promo,
        .site-footer .links {
            display: none;
        }
        section[data-equalize="layout-columns"] {
            height: auto !important;
            min-height: 0 !important;
        }
        .section-refinement-options {
            display: none;
        }

        .tag {
            border: 1px solid #ccc;
            padding-right: 5px;
        }
        .tag i.fa-times{
            display: none;
        }

        .credit-summary__list {
            display: block !important;
        }
        .credit-summary__toggle-icon {
            display: none;
        }
    }
</style>
<div class="layout layout-search">
    <div class="container">
        <section class="section section-main section-box">
            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm hidden-print">
                    <section class="section section-refinement-options" data-equalize="layout-columns">
                        <section class="section section-refinement-group section-refinement-group-first">
                            <h3>Search</h3>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </section>
                        <section class="section section-refinement-group">
                            <h3>Date Range</h3>
                            <div class="date-range">
                                <select class="form-control date-range__control">
                                    <optgroup label="Presets">
                                        <option>Since January 1</option>
                                        <option>Last 6 months</option>
                                        <option selected="">Last 12 months</option>
                                        <option>Last 24 months</option>
                                        <option>Previous Calendar Year</option>
                                        <option>Complete History</option>
                                    </optgroup>
                                    <optgroup label="Custom">
                                        <option value="custom">Custom Range</option>
                                    </optgroup>
                                </select>
                                <div class="date-range__custom">
                                    <div class="form-group">
                                        <label>Start:</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>End:</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section section-refinement-group">
                            <h3>Completions</h3>
                            <select class="form-control">
                                <option selected>All</option>
                                <option>Assigned only</option>
                                <option>Elective only</option>
                                <option>Learning Events only</option>
                                <option>Assessments only</option>
                            </select>
                        </section>
                    </section>
                </div>
                <div class="col-md-9">
                    <section class="section visible-print">
                        <h1>My Completed</h1>
                    </section>
                    <section class="section visible-print">
                        <h2>Student Information</h2>
                        <div class="row">
                            <div class="col-xs-6">
                                <label>Name:</label> Stephanie Juniper
                            </div>
                            <div class="col-xs-6">
                                <label>Report Range:</label> Jul 13, 2011 &ndash; Jul 12, 2013
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <label>User ID:</label> 1234567890
                            </div>
                            <div class="col-xs-6">
                                <label>Hire/Re-hire Date:</label> <?= date('M j, Y'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <label>Job Title:</label> RN
                            </div>
                            <div class="col-xs-6">
                                <label>Active Date:</label> <?= date('M j, Y'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <label>Job Category:</label> Nurse
                            </div>
                            <div class="col-xs-6">
                                <label>Review Date:</label> <?= date('M j, Y'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <label>Department:</label> Nursing
                            </div>
                        </div>
                    </section>
                    <section class="section section-results" data-equalize="layout-columns">

                        <section class="section section-results-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2><?= date('M j, Y',strtotime('-12 months')); ?> - <?= date('M j, Y'); ?> <small>Showing 1-20 of 35</small></h2>
                                    <div class="section section-refinement-applied">
                                        <h3>Refinements</h3>
                                        <div class="tag-group">
                                            <a href="#" class="tag">Last 12 Months<i class="fa fa-times"></i></a>
                                            <a href="#" class="tag">Curriculums<i class="fa fa-times"></i></a>
                                            <a href="#" class="tag">Courses<i class="fa fa-times"></i></a>
                                            <a href="#" class="tag">Learning Events<i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 hidden-xs hidden-sm">
                                    <div class="section-results-header-sort">
                                        <div class="dropdown">
                                            <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Date <i class="fa fa-sort"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="active"><a href="#">Date</a></li>
                                                <li><a href="#">Name A-Z</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <?php

                            $credits = '';
                            $credits .= createSlat(array(
                                'attributes' => array(
                                    array('class',array('slat','slat-simple')),
                                ),
                                'title' => 'AMA PRA Category 1 Credit&trade;',
                                'meta' => array(
                                    array(
                                        'label' => 'Discipline:',
                                        'value' => 'AEMT',
                                    ),
                                    array(
                                        'label' => 'Credits:',
                                        'value' => '5.75',
                                    ),
                                    array(
                                        'label' => 'Courses:',
                                        'value' => '2',
                                    )
                                ),
                                'action' => array()
                            ));

                            $credits .= createSlat(array(
                                'attributes' => array(
                                    array('class',array('slat','slat-simple')),
                                ),
                                'title' => 'AMA PRA Category 1 Credit&trade;',
                                'meta' => array(
                                    array(
                                        'label' => 'Discipline:',
                                        'value' => 'Emergency Medical Technician - First Responder',
                                    ),
                                    array(
                                        'label' => 'Credits:',
                                        'value' => '4.00',
                                    ),
                                    array(
                                        'label' => 'Courses:',
                                        'value' => '2',
                                    )
                                ),
                                'action' => array()
                            ));

                            ?>

                            <div class="panel-group panel-group-slats" role="tablist" id="panel-group-1" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab">
                                        <a role="button" data-toggle="collapse" data-parent="#panel-group-1" href="#panel-1" class="collapsed">
                                            CE Credit Summary
                                            <div class="panel-heading-icon">
                                                <i class="fa fa-chevron-down panel-heading-icon-closed"></i>
                                                <i class="fa fa-chevron-up panel-heading-icon-open"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="panel-1" class="panel-collapse collapse" role="tabpanel">
                                        <div class="panel-body">
                                           <?= $credits ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <section class="section">

                            <?php

                            $content = '
                                <section class="section">
                                    <h5>Added</h5>
                                    <p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
                                </section>
                                <section class="section">
                                    <h5>Updated</h5>
                                    <p>Stephanie Juniper, Feb 7, 2014 11:57am</p>
                                </section>
                                <section class="section">
                                    <h5>Comments</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </section>
                                <section class="section">
                                    <small class="text-muted">
                                        Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
                                    </small>
                                </section>
                            ';
                            $slat = array(
                                'title' => 'Student-Entered Learning Event',
                                'meta' => array(
                                    array(
                                        'type' => 'Learning Event',
                                    ),
                                    array(
                                        'label' => 'Est. Time:',
                                        'value' => '1h',
                                    ),
                                    array(
                                        'label' => 'Entry:',
                                        'value' => 'Student',
                                    ),
                                    array(
                                        'label' => 'Completed: ',
                                        'value' => date('M j, Y', strtotime('-30 days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-learningevent-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                ),
                                'nested' => array(
                                    'hide' => array($content),
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'title' => '<a href="course-complete.php">Understanding Chronic Pain Management</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Course',
                                    ),
                                    array(
                                        'label' => 'Est. Time:',
                                        'value' => '2h 10m',
                                    ),
                                    array(
                                        'label' => 'Completed: ',
                                        'value' => date('M j, Y', strtotime('-45 days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
                                    'link' => '#',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'title' => '<a href="course.php">Advanta 2 Med Surg Bed</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Course',
                                    ),
                                    array(
                                        'label' => 'Est. Time:',
                                        'value' => '15m',
                                    ),
                                    array(
                                        'label' => 'Completed: ',
                                        'value' => date('M j, Y', strtotime('-52 days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
                                    'link' => '#',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'title' => '<a href="#">Care of the Surgical Patient</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Peer Assessment',
                                    ),
                                    array(
                                        'label' => 'Employee:',
                                        'value' => 'Davy L. Crane',
                                    ),
                                    array(
                                        'label' => 'Rater:',
                                        'value' => 'Jane F. Doe',
                                    ),
                                    array(
                                        'label' => 'Completed: ',
                                        'value' => date('M j, Y', strtotime('-64 days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Print <i class="fa fa-fw fa-trophy visible-xs"></i>',
                                    'link' => '#',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'title' => '<a href="#">Care of the Surgical Patient</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Self Assessment',
                                    ),
                                    array(
                                        'label' => 'Rater:',
                                        'value' => 'Jane F. Doe',
                                    ),
                                    array(
                                        'label' => 'Completed: ',
                                        'value' => date('M j, Y', strtotime('-68 days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Print <i class="fa fa-fw fa-trophy visible-xs"></i>',
                                    'link' => '#',
                                )
                            );
                            echo createSlat($slat);

                            $content = '
                                <section class="section">
                                    <h5>Added</h5>
                                    <p>Admin\'s Name, Feb 7, 2014 11:54am</p>
                                </section>
                                <section class="section">
                                    <h5>Updated</h5>
                                    <p>Admin\'s Name, Feb 7, 2014 11:54am</p>
                                </section>
                                <section class="section">
                                    <h5>Comments</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </section>
                                <section class="section">
                                    <small class="text-muted">
                                        Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
                                    </small>
                                </section>
                            ';

                            $slat = array(
                                'title' => 'Admin-Entered Learning Event',
                                'meta' => array(
                                    array(
                                        'type' => 'Learning Event',
                                    ),
                                    array(
                                        'label' => 'Est. Time:',
                                        'value' => '1h',
                                    ),
                                    array(
                                        'label' => 'Entry:',
                                        'value' => 'Admin',
                                    ),
                                    array(
                                        'label' => 'Completed: ',
                                        'value' => date('M j, Y', strtotime('-140 days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
                                    'link' => '#',
                                ),
                                'nested' => array(
                                    'hide' => array($content),
                                )
                            );
                            echo createSlat($slat);

                            $nested = createSlat(array(
                                'attributes' => array(
                                    array('class',array('slat')),
                                ),
                                'title' => 'CE - AHIMA',
                                'meta' => array(
                                    array(
                                        'label' => 'Discipline:',
                                        'value' => 'Pharmacist, Nuclear',
                                    ),
                                    array(
                                        'label' => 'Credits:',
                                        'value' => '4.00 AMA PRA Category 1 Credit™',
                                    ),
                                    array(
                                        'label' => 'License:',
                                        'value' => '123456789011112',
                                    ),
                                    array(
                                        'label' => 'State:',
                                        'value' => 'TN',
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'CE Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
                                    'link' => '#',
                                )
                            ));
                            $content = '
                                <section class="section">
                                    <h5>Added</h5>
                                    <p>Admin\'s Name, Feb 7, 2014 11:54am</p>
                                </section>
                                <section class="section">
                                    <h5>Updated</h5>
                                    <p>Admin\'s Name, Feb 7, 2014 11:54am</p>
                                </section>
                                <section class="section">
                                    <h5>Comments</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </section>
                                <section class="section">
                                    <small class="text-muted">
                                        Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
                                    </small>
                                </section>
                            ';
                            $slat = array(
                                'title' => '<a data-toggle="modal" href="#modal-learningevent-details">Admin-Entered Learning Event as a Course</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Course',
                                    ),
                                    array(
                                        'label' => 'Est. Time:',
                                        'value' => '1h',
                                    ),
                                    array(
                                        'label' => 'Entry:',
                                        'value' => 'Admin',
                                    ),
                                    array(
                                        'label' => 'Completed: ',
                                        'value' => date('M j, Y', strtotime('-160 days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-split',
                                    'options' => array(
                                        array(
                                            'content' => 'Certificate',
                                            'link' => '#'
                                        ),
                                        array(
                                            'content' => 'Refresh Credits',
                                            'link' => '#',
                                        ),
                                    )
                                ),
                                'nested' => array(
                                    'show' => array($nested),
                                    'hide' => array($content),
                                )
                            );
                            echo createSlat($slat);


                            $slat = array(
                                'title' => '<a href="course.php">Heart Disease and Treatment Options</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Course',
                                    ),
                                    array(
                                        'label' => 'Est. Time:',
                                        'value' => '1h',
                                    ),
                                    array(
                                        'label' => 'Completed: ',
                                        'value' => date('M j, Y', strtotime('-175 days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
                                    'link' => '#',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'title' => '<a href="course.php">Lippencott - 18-lead electrocardiogram</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Course',
                                    ),
                                    array(
                                        'label' => 'Est. Time:',
                                        'value' => '1h',
                                    ),
                                    array(
                                        'label' => 'Completed: ',
                                        'value' => date('M j, Y', strtotime('-190 days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
                                    'link' => '#',
                                )
                            );
                            echo createSlat($slat);

                            $nested = createSlat(array(
                                'attributes' => array(
                                    array('class',array('slat')),
                                ),
                                'title' => 'CE - AHIMA',
                                'meta' => array(
                                    array(
                                        'label' => 'Discipline:',
                                        'value' => 'Pharmacist, Nuclear',
                                    ),
                                    array(
                                        'label' => 'Credits:',
                                        'value' => '4.00 AMA PRA Category 1 Credit™',
                                    ),
                                    array(
                                        'label' => 'License:',
                                        'value' => '123456789011112',
                                    ),
                                    array(
                                        'label' => 'State:',
                                        'value' => 'TN',
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'CE Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
                                    'link' => '#',
                                )
                            ));
                            $nested1 = createSlat(array(
                                'attributes' => array(
                                    array('class',array('slat')),
                                ),
                                'title' => 'CE - AAPC',
                                'meta' => array(
                                    array(
                                        'label' => 'Discipline:',
                                        'value' => 'Emergency Medical Technician - First Responder',
                                    ),
                                    array(
                                        'label' => 'Credits:',
                                        'value' => '2.00 Contact Hours',
                                    ),
                                    array(
                                        'label' => 'License:',
                                        'value' => '123456789011112',
                                    ),
                                    array(
                                        'label' => 'State:',
                                        'value' => 'TN',
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'CE Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
                                    'link' => '#',
                                )
                            ));
                            $slat = array(
                                'title' => '<a href="course.php">A Day in the Life of ICD-10</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Course',
                                    ),
                                    array(
                                        'label' => 'Est. Time:',
                                        'value' => '1h',
                                    ),
                                    array(
                                        'label' => 'Completed: ',
                                        'value' => date('M j, Y', strtotime('-210 days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
                                    'link' => '#',
                                ),
                                'nested' => array(
                                    'show' => array($nested,$nested1),
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'title' => '<a href="course.php">Blood Transfusions</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Course',
                                    ),
                                    array(
                                        'label' => 'Est. Time:',
                                        'value' => '1h',
                                    ),
                                    array(
                                        'label' => 'Completed: ',
                                        'value' => date('M j, Y', strtotime('-220 days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Certificate <i class="fa fa-fw fa-trophy visible-xs"></i>',
                                    'link' => '#',
                                )
                            );
                            echo createSlat($slat);

                            ?>
                        </section>

                        <?php
                            $stickybar = array(
                                'sets' => array(
                                    array(
                                        'position' => 'left',
                                        'classes' => array('hidden-xs','hidden-sm'),
                                        'html' => '
                                            <a href="#modal-print" data-toggle="modal" class="btn btn-default">Print</a>
                                            <a href="#modal-learningevent" data-toggle="modal" class="btn btn-default">Add Learning Event</a>
                                        ',
                                    ),
                                    array(
                                        'position' => 'left',
                                        'classes' => array('visible-xs','visible-sm'),
                                        'html' => '
                                            <div class="btn-group dropup">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-caret-up"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#modal-print" data-toggle="modal">Print</a></li>
                                                    <li><a href="#modal-learningevent" data-toggle="modal">Add Learning Event</a></li>
                                                </ul>
                                            </div>
                                            <a href="#modal-refine" class="btn btn-default" data-toggle="modal"><i class="fa fa-filter"></i></a>
                                        ',
                                    ),
                                    array(
                                        'position' => 'right',
                                        'classes' => array('hidden-xs','hidden-sm'),
                                        'html' => '
                                            <div class="btn-group dropup">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 35 <i class="fa fa-caret-up"></i></button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li class="active"><a href="#">20 per page</a></li>
                                                    <li><a href="#">50 per page</a></li>
                                                    <li><a href="#">100 per page</a></li>
                                                    <li><a href="#">250 per page</a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        ',
                                    ),
                                    array(
                                        'position' => 'right',
                                        'classes' => array('visible-xs','visible-sm'),
                                        'html' => '
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        ',
                                    ),
                                ),
                            );
                            echo createStickybar($stickybar);
                        ?>

                    </section><!-- /section-main -->
                </div><!-- /column -->
            </div><!-- /row -->
        </section>


    </div><!-- /container -->
</div><!-- /layout -->

<!-- Modal -->
<div id="modal-refine" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <section class="section section-refinement-group section-refinement-group-first">
                        <h3>Search</h3>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </section>
                    <section class="section section-refinement-group">
                            <h3>Date Range</h3>
                            <div class="date-range">
                                <select class="form-control date-range__control">
                                    <optgroup label="Presets">
                                        <option>Since January 1</option>
                                        <option>Last 6 months</option>
                                        <option selected="">Last 12 months</option>
                                        <option>Last 24 months</option>
                                        <option>Previous Calendar Year</option>
                                        <option>Complete History</option>
                                    </optgroup>
                                    <optgroup label="Custom">
                                        <option value="custom">Custom Range</option>
                                    </optgroup>
                                </select>
                                <div class="date-range__custom">
                                    <div class="form-group">
                                        <label>Start:</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>End:</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <section class="section section-refinement-group">
                        <h3>Completions</h3>
                        <select class="form-control">
                            <option selected="">All</option>
                            <option>Assigned only</option>
                            <option>Elective only</option>
                            <option>Learning Events only</option>
                            <option>Assessments only</option>
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
<div id="modal-print" class="modal modal-transcript fade" tabindex="-1" role="dialog" aria-labelledby="modal-print-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="modal-print-label" class="modal-title">Customize &amp; Print</h4>
            </div>
            <div class="modal-body">
                <fieldset>
                    <legend>Choose a Range:</legend>
                    <select id="printRangeSelect" class="form-control">
                        <optgroup label="Presets">
                            <option>Since January 1</option>
                            <option>Last 6 months</option>
                            <option selected>Last 12 months</option>
                            <option>Last 24 months</option>
                            <option>Previous Calendar Year</option>
                            <option>Complete History</option>
                        </optgroup>
                        <optgroup label="Custom">
                            <option value="custom">Custom Range</option>
                        </optgroup>
                    </select>
                </fieldset>
                <fieldset id="printRangeCustom" class="hide">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Start:</label>
                                <div class="input-group date">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>End:</label>
                                <div class="input-group date">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Sort By:</legend>
                    <select class="form-control">
                        <option selected>Date</option>
                        <option>Name</option>
                    </select>
                </fieldset>
                <fieldset>
                    <legend>Completions</legend>
                    <select class="form-control">
                        <option selected>All</option>
                        <option>Assigned only</option>
                        <option>Elective only</option>
                        <option>Learning Events only</option>
                    </select>
                </fieldset>
                <div class="collapse" id="print-options">
                    <fieldset>
                        <legend>Student Demographics <small>Include checked items</small></legend>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled">
                                    <li><label class="checkbox"><input type="checkbox">Student User ID</label></li>
                                    <li><label class="checkbox"><input type="checkbox">Job Title</label></li>
                                    <li><label class="checkbox"><input type="checkbox">Job Category</label></li>
                                    <li><label class="checkbox"><input type="checkbox">Department</label></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled">
                                    <li><label class="checkbox"><input type="checkbox">Hire/Re-hire Date</label></li>
                                    <li><label class="checkbox"><input type="checkbox">Active Date</label></li>
                                    <li><label class="checkbox"><input type="checkbox">Review Date</label></li>
                                </ul>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Transcript Data <small>Include checked items</small></legend>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled">
                                    <li><label class="checkbox"><input type="checkbox" checked>Estimated Time</label></li>
                                    <li><label class="checkbox"><input type="checkbox">Course Score</label></li>

                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled">
                                    <li><label class="checkbox"><input type="checkbox">Time with Completion Date</label></li>
                                    <li><label class="checkbox"><input type="checkbox" checked>Learning Event Comments</label></li>
                                </ul>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Learning Events <small>Include checked items</small></legend>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled">
                                    <li><label class="checkbox"><input type="checkbox" checked>Administrator-entered</label></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled">
                                    <li><label class="checkbox"><input type="checkbox" checked>Student-entered</label></li>
                                </ul>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Assessments <small>Include checked items</small></legend>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled">
                                    <li><label class="checkbox"><input type="checkbox" checked>Self Assessments</label></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled">
                                    <li><label class="checkbox"><input type="checkbox" checked>Peer Assessments</label></li>
                                </ul>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <p><a href="#" data-toggle="collapse" data-target="#print-options" data-toggle-text="Show Additional Options|Hide Additional Options">Show Additional Options</a></p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Continue</button>
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-daterange" class="modal modal-transcript fade" tabindex="-1" role="dialog" aria-labelledby="modal-daterange-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="modal-daterange-label" class="modal-title">Date Range</h4>
            </div>
            <div class="modal-body">
                <fieldset>
                    <legend>Choose a Range:</legend>
                    <select id="rangeSelect" class="form-control">
                        <optgroup label="Presets">
                            <option>Since January 1</option>
                            <option>Last 6 months</option>
                            <option selected>Last 12 months</option>
                            <option>Last 24 months</option>
                            <option>Previous Calendar Year</option>
                            <option>Complete History</option>
                        </optgroup>
                        <optgroup label="Custom">
                            <option value="custom">Custom Range</option>
                        </optgroup>
                    </select>
                </fieldset>
                <fieldset id="rangeCustom" class="hide">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Start:</label>
                                <div class="input-group date">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>End:</label>
                                <div class="input-group date">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Sort By:</legend>
                    <select class="form-control">
                        <option selected>Date</option>
                        <option>Name</option>
                    </select>
                </fieldset>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Update Transcript</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-learningevent" class="modal modal-transcript fade" tabindex="-1" role="dialog" aria-labelledby="modal-learningevent-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="modal-learningevent-label" class="modal-title">Add a Learning Event</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label" for="">Course Name</label>
                    <input type="text" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label" for="">Completion Date</label>
                    <div class="input-group col-sm-6 date">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div><!-- /input-group -->
                </div>
                <div class="form-group">
                    <label class="control-label" for="">Estimated Completion Time</label>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <select class="form-control">
                                        <?php for ($i=0;$i<=30;$i++) { ?>
                                        <option><?= $i ?></option>
                                        <?php } ?>
                                    </select>
                                    <span class="input-group-addon" style="background: none;border:none">Hours</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <select class="form-control">
                                        <?php for ($i=0;$i<=59;$i++) { ?>
                                        <option><?= str_pad($i, 2, '0', STR_PAD_LEFT); ?></option>
                                        <?php } ?>
                                    </select>
                                    <span class="input-group-addon" style="background: none;border:none">Minutes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="">Comments</label>
                    <span class="help-block">Example: Description, location, instructor, delivery method, CE earned, etc.</span>
                    <textarea id="" class="form-control" style="height:100px;"></textarea>
                    <span class="help-block"><small>Your comments will appear on your transcript and can be seen by system administrators.</small></span>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-learningevent-edit" class="modal modal-transcript fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="" class="modal-title">Edit Learning Event</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label" for="">Course Name</label>
                    <input type="text" id="" class="form-control" value="Student-Entered Learning Event">
                </div>
                <div class="form-group">
                    <label class="control-label" for="">Completion Date</label>
                    <div class="input-group col-sm-6 date">
                        <input type="text" class="form-control" value="2/7/2014">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div><!-- /input-group -->
                </div>
                <div class="form-group">
                    <label class="control-label" for="">Estimated Completion Time</label>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <select class="form-control">
                                        <?php for ($i=0;$i<=30;$i++) { ?>
                                        <option<?php if ($i == 2) { echo ' selected';} ?>><?= $i ?></option>
                                        <?php } ?>
                                    </select>
                                    <span class="input-group-addon" style="background: none;border:none">Hours</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <select class="form-control">
                                        <?php for ($i=0;$i<=59;$i++) { ?>
                                        <option<?php if ($i == 0) { echo ' selected';} ?>><?= str_pad($i, 2, '0', STR_PAD_LEFT); ?></option>
                                        <?php } ?>
                                    </select>
                                    <span class="input-group-addon" style="background: none;border:none">Minutes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="">Comments</label>
                    <span class="help-block">Example: Description, location, instructor, delivery method, CE earned, etc.</span>
                    <textarea id="" class="form-control" style="height:100px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</textarea>
                    <span class="help-block"><small>Your comments will appear on your transcript and can be seen by system administrators.</small></span>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button class="btn btn-danger pull-right" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-learningevent-details" class="modal modal-transcript fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="" class="modal-title">About this Learning Event</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <p>An administrator has given you credit for the live learning event or course, {LEARNING EVENT NAME}. You may be eligible for additional credit, please make sure your certifications, disciplines and licenses are up to date.</p>
                </section>
                <section class="section">
                    <ul class="list-unstyled">
                        <li><a href="disciplines-licenses.php">Manage <i class=\"fa fa-fw fa-pencil visible-xs\"></i> Disciplines and Licenses</a></li>
                        <li><a href="certifications.php">Manage <i class=\"fa fa-fw fa-pencil visible-xs\"></i> Certifications</a></li>
                    </ul>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Refresh Credits</button>
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
        $('.slat-toggle .btn').click(function(e){
            var $btn = $(this);
            e.preventDefault();
            $btn.toggleClass('btn-success btn-default');
            if($btn.hasClass('btn-success')){
                $btn.html('Selected<i class="fa fa-check visible-xs"></i>');
            } else {
                $btn.html('Select<i class="fa fa-plus visible-xs"></i>');
            }
        });

        $('.date-range__control').on('change',function(){
            var $control = $(this);
            var $custom = $control.siblings('.date-range__custom')
            if ( $control.val() === 'custom' ) {
                $custom.addClass('date-range__custom--open');
            } else {
                $custom.removeClass('date-range__custom--open');
            }
        });

        $('#rangeSelect').on('change', function(){
            if ( $(this).val() === 'custom' ) {
                $('#rangeCustom').removeClass('hide');
            } else {
                $('#rangeCustom').addClass('hide');
            }
        });

        $('#printRangeSelect').on('change', function(){
            if ( $(this).val() === 'custom' ) {
                $('#printRangeCustom').removeClass('hide');
            } else {
                $('#printRangeCustom').addClass('hide');
            }
        });

        $('.input-group.date').datepicker({
            todayBtn: "linked",
            autoclose: true
        }).css('position','relative');

    });
</script>
<?= createSiteEnd(); ?>