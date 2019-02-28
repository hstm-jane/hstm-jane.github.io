<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My To-Do List';
$patterns['header']['mainNav'] = '
    <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
    <li class="{active=todo}"><a href="/">To Do</a></li>
    <li class="{active=completed}"><a href="/completed.php">Completed</a></li>
    <li class="{active=profile} dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <i class="fa fa-angle-down"></i></a>
        <ul class="dropdown-menu">
            <li><a href="/advanced-practice.php">Advanced Practice</a></li>
            <li><a href="/certifications.php">Certifications</a></li>
            <li><a href="/documents.php">Documents</a></li>
            <li><a href="/education.php">Education</a></li>
            <li><a href="/goals.php">Goals</a></li>
            <li><a href="/job-descriptions.php">Job Descriptions</a></li>
            <li><a href="/disciplines-licenses.php">Licenses</a></li>
            <li><a href="/notes.php">Notes</a></li>
            <li><a href="/personal-information.php">Personal Information</a></li>
        </ul>
    </li>
    <li class="{active=raters}"><a href="/assessment-overview-summary.php">Raters</a></li>
    <li class="{active=catalog}"><a href="/catalog-unified-main.php">Catalog</a></li>
    <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
    <li class="disabled"><a href="#">Help</a></li>
    <li class="visible-xs"><a href="#">Logout</a></li>';
$patterns['focus']['title'] = 'My To-Do List';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Total Tasks:',
        'value' => '17',
    ),
    array(
        'label' => 'Requiring Attention:',
        'value' => '5',
    ),
);
$patterns['focus']['action'] = array(
    'text' => 'Quick Start <i class="fa fa-chevron-right"></i>',
    'link' => 'course.php',
);
$patterns['focus']['supporting'] = '<img src="/content/images/coaching-quick.png">';

?>

<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-main section-box" data-equalize="layout-columns">
                    <div class="filter-mini" data-target="tasks">
                        <div class="filter-row">
                            <div class="filter-cell">
                                <div class="filter-toggle">
                                    Show: <i class="fa fa-fw fa-caret-down"></i>
                                </div>
                            </div>
                            <div class="filter-cell">
                                <ul>
                                    <li><label class="checkbox"><input type="checkbox" value='all' checked> All Tasks</label></li>
                                    <li><label class="checkbox"><input type="checkbox" value="6"> Rater Tasks</label></li>
                                    <li><label class="checkbox"><input type="checkbox" value="1"> Assignments</label></li>
                                    <li><label class="checkbox"><input type="checkbox" value="2"> Live Classes</label></li>
                                    <li><label class="checkbox"><input type="checkbox" value="3"> Electives</label></li>
                                    <li><label class="checkbox"><input type="checkbox" value="4"> Profile Tasks</label></li>
                                    <li><label class="checkbox"><input type="checkbox" value="5"> Assessments</label></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <section class="section" id="tasks">
                        <?php

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-attention','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('6')),
                                    array('data-filter-count',array('2')),
                                ),
                                'title' => '<a href="/assessment-overview-summary.php?click=review">Rater Assessments in Review</a> <span class="badge">2</span>',
                                'meta' => array(
                                    array(
                                        'type' => 'Rater Task',
                                    ),
                                    array(
                                        'label' => 'State:',
                                        'value' => 'Review',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('-60days')).'<a href="/assessment-overview-summary.php?click=review">First of 2 Due</a>',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="/assessment-overview-summary.php?click=review">View<i class="fa fa-fw fa-chevron-right visible-xs"></i></a></div>',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-attention','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('1')),
                                    array('data-filter-count',array('1')),
                                ),
                                'title' => '<a href="moc.php">RQI BLS</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'MOC Curriculum',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'In Progress',
                                    ),
                                    array(
                                        'label' => 'Complete:',
                                        'value' => '1 of 10',
                                        'attributes' => array(
                                            array('class','meta-hide-xs'),
                                        )
                                    ),
                                    array(
                                        'label' => 'Due:',
                                        'value' => '<span class="meta-callout-label">Due:</span>'.date('M j, Y',strtotime('-30days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Resume',
                                    'link' => 'moc.php',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-attention','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('5')),
                                    array('data-filter-count',array('1')),
                                ),
                                'title' => '<a href="assessment.php?assessment=performance-2&state=4">Nursing Fundamentals Appraisal</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Self Assessment',
                                    ),
                                    array(
                                        'label' => 'State:',
                                        'value' => 'Review',
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Sign Off',
                                    'link' => 'assessment.php?assessment=performance-2&state=4',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-attention','slat-spaced')),
                                    array('data-filter-category',array('2')),
                                    array('data-filter-count',array('1')),
                                ),
                                'title' => '<a href="registration.php">Pain Management Class</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Live Class',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Not Registered',
                                    ),
                                    array(
                                        'label' => 'Attendance:',
                                        'value' => 'Mandatory',
                                        'attributes' => array(
                                            array('class','meta-hide-xs'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Choose Class',
                                    'link' => 'registration.php',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('5')),
                                    array('data-filter-count',array('1')),
                                ),
                                'title' => '<a href="assessment.php?assessment=competency-1&progress=1">Initial Nursing Competency Appraisal</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Self Assessment',
                                    ),
                                    array(
                                        'label' => 'State:',
                                        'value' => 'Evaluate',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+7days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Resume',
                                    'link' => 'assessment.php?assessment=competency-1&progress=1',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('5')),
                                    array('data-filter-count',array('7')),
                                ),
                                'title' => '<a href="#modal-assessment-peers" data-toggle="modal">Initial Nursing Competency Appraisal</a> <span class="badge">7</span>',
                                'meta' => array(
                                    array(
                                        'type' => 'Peer Assessment',
                                    ),
                                    array(
                                        'label' => 'State:',
                                        'value' => 'Evaluate',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+7days')).'<a href="#modal-assessment-peers" data-toggle="modal">First of 7 Due</a>',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-assessment-peers" data-toggle="modal">Choose<i class="fa fa-fw fa-chevron-right visible-xs"></i></a></div>',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('6')),
                                    array('data-filter-count',array('14')),
                                ),
                                'title' => '<a href="/assessment-overview-summary.php?click=evaluate">Rater Assessments in Evaluate</a> <span class="badge">14</span>',
                                'meta' => array(
                                    array(
                                        'type' => 'Rater Task',
                                    ),
                                    array(
                                        'label' => 'State:',
                                        'value' => 'Evaluate',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+10days')).'<a href="/assessment-overview-summary.php?click=evaluate">First of 14 Due</a>',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="/assessment-overview-summary.php?click=evaluate">View<i class="fa fa-fw fa-chevron-right visible-xs"></i></a></div>',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('5')),
                                    array('data-filter-count',array('1')),
                                ),
                                'title' => '<a href="assessment.php?assessment=performance-1">Annual Performance Appraisal</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Self Assessment',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Not Yet Started',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+15days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Start',
                                    'link' => 'assessment.php?assessment=performance-1',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('1')),
                                    array('data-filter-count',array('1')),
                                ),
                                'title' => '<a href="curriculum.php">Pain Management Curriculum</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Curriculum',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'In Progress',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+30days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Resume',
                                    'link' => 'curriculum.php',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('1')),
                                    array('data-filter-count',array('1')),
                                ),
                                'title' => '<a href="course-institution-specific.php">Fire Safety</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Course',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Assigned',
                                    ),
                                    array(
                                        'label' => 'Complete:',
                                        'value' => '0 of 3',
                                        'attributes' => array(
                                            array('class','meta-hide-xs'),
                                        )
                                    ),
                                    array(
                                        'label' => 'Institution:',
                                        'value' => 'General Hospital',
                                        'attributes' => array(
                                            array('class','meta-hide-xs'),
                                        )
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+30days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Start',
                                    'link' => 'course-institution-specific.php',
                                )
                            );
                            echo createSlat($slat);

                            // $slat = array(
                            //     'attributes' => array(
                            //         array('class',array('slat','slat-spaced','slat-callout')),
                            //         array('data-filter-category',array('4')),
                            //     ),
                            //     'title' => '<a href="profile-activity.php">Please Update Your Profile</a>',
                            //     'meta' => array(
                            //         array(
                            //             'type' => 'Profile Activity',
                            //         ),
                            //         array(
                            //             'label' => 'Status:',
                            //             'value' => 'Assigned',
                            //         ),
                            //         array(
                            //             'label' => 'Due:',
                            //             'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+30days')),
                            //             'attributes' => array(
                            //                 array('class','meta-callout'),
                            //             )
                            //         ),
                            //     ),
                            //     'action' => array(
                            //         'type' => 'action-single',
                            //         'content' => 'Start',
                            //         'link' => 'profile-activity.php',
                            //     )
                            // );
                            // echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('5')),
                                    array('data-filter-count',array('1')),
                                ),
                                'title' => '<a href="assessment.php?assessment=competency-6">Nursing Skills Assessment – Reflective/Development Plan 1 – Juniper, Stephanie</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Self Assessment',
                                    ),
                                    array(
                                        'label' => 'State:',
                                        'value' => 'Evaluate',
                                    ),
                                    array(
                                        'label' => 'Due:',
                                        'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+37days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Start',
                                    'link' => 'assessment.php?assessment=competency-6',
                                )
                            );
                            echo createSlat($slat);

                            //Prereq for Live Event Training
                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('2')),
                                    array('data-filter-count',array('1')),
                                ),
                                'title' => '<a href="/le-registration-registered-event.php">Prerequisite Title</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Learning Content',
                                    ),
                                    array(
                                        'label' => 'Applies To:',
                                        'value' => 'Live Event Training',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Assigned',
                                    ),

                                    array(
                                        'label' => 'Due:',
                                        'value' => '<div><span class="meta-callout-label">Due:</span>'.date('M j, Y',strtotime('+40days')).' at 2:30pm</div>',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Start',
                                    'link' => '#',
                                )
                            );
                            echo createSlat($slat);

                            //Live Event Training
                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('2')),
                                    array('data-filter-count',array('1')),
                                ),
                                'title' => '<a href="/le-registration-registered-event.php">Live Event Training</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Live Event',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Registered',
                                    ),
                                    array(
                                        'label' => 'Location:',
                                        'value' => 'Cummins Station: 450',
                                        'attributes' => array(
                                            array('class','meta-hide-xs'),
                                        )
                                    ),
                                    array(
                                        'label' => 'Date:',
                                        'value' => '<div>'.date('M j, Y',strtotime('+40days')).' at 3:30pm - </div>
                                            <div>'.date('M j, Y',strtotime('+50days')).' at 3:30pm</div>',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-split',
                                    'options' => array(
                                        array(
                                            'content' => 'View Event',
                                            'link' => '/le-registration-registered-event-3.php',
                                        ),
                                        array(
                                            'content' => 'Add to Calendar',
                                            'link' => '#',
                                        ),
                                    )
                                )
                            );
                            echo createSlat($slat);

                            //Live Event Training 2 Evaluation
                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('2')),
                                    array('data-filter-count',array('1')),
                                ),
                                'title' => '<a href="/le-registration-registered-event.php">Live Event Training 2 Evaluation</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Learning Content',
                                    ),
                                    array(
                                        'label' => 'Applies To:',
                                        'value' => 'Live Event Training 2',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Assigned',
                                    ),

                                    array(
                                        'label' => 'Date:',
                                        'value' => '<span class="meta-value">
                                            <div>Due: '.date('M j, Y',strtotime('+50days')).', 2014</div></span>',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Start',
                                    'link' => 'curriculum.php',
                                )
                            );
                            echo createSlat($slat);

                            //Live Event Training 2
                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('2')),
                                    array('data-filter-count',array('1')),
                                ),
                                'title' => '<a href="/le-registration-registered-event.php">Live Event Training 2</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Live Event',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Graded',
                                    ),
                                    array(
                                        'label' => 'Location:',
                                        'value' => 'Cummins Station: 450',
                                        'attributes' => array(
                                            array('class','meta-hide-xs'),
                                        )
                                    ),
                                    array(
                                        'label' => 'Date:',
                                        'value' => '<span class="meta-value"><div>'.date('M j, Y',strtotime('+50days')).' at 3:30pm - </div>
                                            <div>'.date('M j, Y',strtotime('+60days')).' at 3:30pm</div></span>',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-split',
                                    'options' => array(
                                        array(
                                            'content' => 'View Event',
                                            'link' => '#',
                                        ),
                                        array(
                                            'content' => 'Add to Calendar',
                                            'link' => '#',
                                        ),
                                    )
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('2')),
                                    array('data-filter-count',array('1')),
                                ),
                                'title' => '<a href="/le-registration-registered-event.php">NRP Course Name: Live Event Title</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Live Event',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Registered',
                                    ),
                                    array(
                                        'label' => 'Location:',
                                        'value' => 'Cummins Station: 450',
                                        'attributes' => array(
                                            array('class','meta-hide-xs'),
                                        )
                                    ),
                                    array(
                                        'label' => '',
                                        'value' => '<span class="meta-value"><div>Jul 15, 2014 at 3:30pm - </div>
                                            <div>Jul 25, 2014 at 3:30pm</div></span>',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-split',
                                    'options' => array(
                                        array(
                                            'content' => 'View Event',
                                            'link' => '/le-registration-registered-event.php'
                                        ),
                                        array(
                                            'content' => 'Add to Calendar',
                                            'link' => '#',
                                        ),
                                    )
                                )
                            );
                            echo createSlat($slat);


                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('3')),
                                    array('data-filter-count',array('1')),
                                ),
                                'title' => '<a href="course-elective.php">Management Development Skills</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Course',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Not Yet Started',
                                    ),
                                    array(
                                        'label' => 'Enrolled By:',
                                        'value' => 'Self',
                                        'attributes' => array(
                                            array('class','meta-hide-xs'),
                                        )
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => 'Elective',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-split',
                                    'options' => array(
                                        array(
                                            'content' => 'Start',
                                            'link' => 'course-elective.php'
                                        ),
                                        array(
                                            'content' => 'Un-enroll',
                                            'link' => '#',
                                        ),
                                    )
                                )
                            );
                            echo createSlat($slat);

                            ?>
                    </section>
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>Reminder</h3>
                        <ul class="list-links">
                            <li><a href="/highlight.php">Scheduled Downtime 4/19 at 11PM</a></li>
                        </ul>
                    </section>
                    <section class="section section-box">
                        <h3>Options</h3>
                        <ul class="list-links">
                            <li><a href="/todo-pending.php">Pending Assessments</a></li>
                        </ul>
                    </section>
                    <?php include_sidebar() ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->


<!-- Modal -->
<div id="modal-assessment-peers" class="modal modal-lg fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Initial Nursing Competency Appraisal</h4>
                <!-- <div class="input-group modal-search">
                    <input type="text" class="form-control" placeholder="Search Employees">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                    </span>
                </div> -->
            </div>
            <div class="modal-body">
                <section class="section modal-search-results">
                    <!-- <h3>Results <small>Showing 1-7 of 7</small></h3> -->

                    <?php
                        $employees = array(
                            'Chamberland, Marie S.',
                            'Conner, Rosalyn F.',
                            'Flangan, Simone P.',
                            'Franks, Iva R.',
                            'Lewis, Audrey K.',
                            'Montoya, Alice G.',
                            'Park, Jennifer S.',
                        );
                        $progress = array(
                            'Not Yet Started',
                            '10%',
                            '30%',
                            '70%',
                        );
                        for ( $i = 0; $i < 7; $i++ ) {

                            $this_progress = $progress[rand(0,3)];

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-callout')),
                                ),

                                'title' => '<a href="#">'.$employees[$i].'</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Peer Assessment',
                                    ),
                                    array(
                                        'label' => 'State:',
                                        'value' => 'Evaluate',
                                    ),
                                    // array(
                                    //     'label' => 'Progress:',
                                    //     'value' => $this_progress,
                                    // ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+7days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),

                                    // array(
                                    //     'label' => 'Rater:',
                                    //     'value' => 'Crane, Darcy L.',
                                    // ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => ($this_progress === 'Not Yet Started')?'Start':'Resume',
                                    'link' => '#',
                                ),
                            );
                            echo createSlat($slat);

                        }

                    ?>

                </section>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                <!-- <div class="btn-group pull-right">
                    <button class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                    <button class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
                </div> -->
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
    <script>
        $(function(){

            // helper to keep the task count correct
            var task_total = 0;
            $('#tasks .slat[data-filter-category]').each(function(){
                if ( $(this).attr('data-filter-count') !== undefined ) {
                    task_total = task_total + ($(this).attr('data-filter-count') * 1);
                } else {
                    task_total++;
                }
            });
            $('.focus-pageheader .meta-value:eq(0)').text(task_total);
            $('.focus-pageheader .meta-value:eq(1)').text($('#tasks .slat-attention').length);

            <?php if (!empty($_GET['growlTitle']) && !empty($_GET['growlText'])) { ?>
            // Show Growl on Load
            var growl = {};
            growl.title = "<?= $_GET['growlTitle']; ?>";
            growl.text = "<?= $_GET['growlText']; ?>";
            <?php echo (!empty($_GET['growlType']))?'growl.type = "'.$_GET['growlType'].'";'."\n":''; ?>
            <?php echo (!empty($_GET['growlSticky']))?'growl.sticky = '.$_GET['growlSticky'].';'."\n":''; ?>

            setTimeout(function(){
                HealthStream.utilities.growl(growl);
            },500);
            <?php } ?>
        });
    </script>

<?= createSiteEnd(); ?>