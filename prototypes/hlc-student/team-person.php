<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'Smith, Jill';
$patterns['header'] = array(
    'mainNav' => '
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
        <li class="{active=team} dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Team <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="/team-people.php">People</a></li>
                <li><a href="/team-tasks.php">Tasks</a></li>
            </ul>
        </li>
        <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'team',
);
$patterns['focus']['title'] = 'Smith, Jill';
$patterns['focus']['icon'] = '<div class="fph-cell fph-cell-icon"><div class="fph-icon" style="overflow:hidden;"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/uxceo/128.jpg" width="100%" height="100%"></div></div>';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Status:',
        'value' => 'Active',
    ),
    array(
        'label' => 'User ID:',
        'value' => 'JHC934568',
    ),
    array(
        'label' => 'Job Title:',
        'value' => 'Registered Nurse',
    ),
    array(
        'label' => 'Start Date:',
        'value' => 'Jan 1, 2006',
    ),
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <section class="section section-main section-box" data-equalize="layout-columns">

                    <?php

                        $focusNav = array(
                            'tabs' => array(
                                array(
                                    'active' => true,
                                    'id' => 'tab-1',
                                    'label' => 'To Do',
                                ),
                                array(
                                    'id' => 'tab-2',
                                    'label' => 'Completed',
                                ),
                                array(
                                    'id' => 'tab-3',
                                    'label' => 'Profile',
                                ),
                            ),
                        );
                        echo createFocusNav($focusNav);

                    ?>

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab-1">
                            <section class="section">
                                <h2>To Do</h2>

                                <?php

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-attention','slat-spaced','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">Understanding Chronic Pain Management</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'In Progress',
                                        ),
                                        array(
                                            'label' => 'Complete:',
                                            'value' => '2 of 3',
                                        ),
                                        array(
                                            'label' => 'Due: ',
                                            'value' => '<span class="meta-callout-label">Due:</span>Dec. 31, 2013 at 12am',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(),
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-attention','slat-spaced','slat-callout')),
                                    ),
                                    'title' => '<a href="moc.php">RQI BLS</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'MOC',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'In Progress',
                                        ),
                                        array(
                                            'label' => 'Complete:',
                                            'value' => '1 of 10',
                                        ),
                                        array(
                                            'label' => 'Due: ',
                                            'value' => '<span class="meta-callout-label">Due:</span>Dec. 31, 2016',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(),
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-attention','slat-spaced','slat-callout')),
                                    ),
                                    'title' => '<a href="registration.php">This is an example of a class that needs registration</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Live Class',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Registered',
                                        )
                                    ),
                                    'action' => array(),
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
                                    ),
                                    'title' => '<a href="registration-registered-class-single.php">This is an example of a registered class</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Live Class',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Registered',
                                        ),
                                        array(
                                            'label' => 'Location:',
                                            'value' => 'North Tower: Westmoreland Hall',
                                        ),
                                        array(
                                            'label' => 'Starts: ',
                                            'value' => '<span class="meta-callout-label">Starts:</span>Jul 15, 2014 at 3:30pm',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(),
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
                                    ),
                                    'title' => '<a href="equivalent.php">Choose a Course</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Equivalent',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Enrolled',
                                        ),
                                        array(
                                            'label' => 'Due: ',
                                            'value' => '<span class="meta-callout-label">Due:</span>Sep 1, 2014',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(),
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
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
                                            'value' => '<span class="meta-callout-label">Due:</span>Sep 1, 2014',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(),
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
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
                                        ),
                                        array(
                                            'label' => 'Institution:',
                                            'value' => 'General Hospital',
                                        ),
                                        array(
                                            'label' => 'Due: ',
                                            'value' => '<span class="meta-callout-label">Due:</span>Sep 15, 2014',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(),
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
                                    ),
                                    'title' => '<a href="assessment.php">2014 Performance Appraisal</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Assessment',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Assigned',
                                        ),
                                        array(
                                            'label' => 'Due: ',
                                            'value' => '<span class="meta-callout-label">Due:</span>Oct 23, 2014',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(),
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
                                    ),
                                    'title' => '<a href="profile-activity.php">Please Update Your Profile</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Profile Activity',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Assigned',
                                        ),
                                        array(
                                            'label' => 'Due: ',
                                            'value' => '<span class="meta-callout-label">Due:</span>Oct 25  , 2014',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(),
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
                                    ),
                                    'title' => '<a href="course-elective.php">This is an example of an elective</a>',
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
                                        ),
                                        array(
                                            'label' => 'Due: ',
                                            'value' => 'Elective',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(),
                                );
                                echo createSlat($slat);

                                ?>

                            </section>
                        </div> <!-- /tab-pane -->

                        <div class="tab-pane fade" id="tab-2">
                            <section class="section">
                                <h2>Completed</h2>

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
                                            'value' => 'May 19, 2013',
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
                                            'value' => 'May 21, 2013',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
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
                                            'value' => 'May 18, 2013',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                        'link' => '#',
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'title' => '<a href="course.php">Content with Video</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '2h',
                                        ),
                                        array(
                                            'label' => 'Completed: ',
                                            'value' => 'May 28, 2013',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                        'link' => '#',
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'title' => '<a href="course.php">Content with Video</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '2h',
                                        ),
                                        array(
                                            'label' => 'Completed: ',
                                            'value' => 'May 29, 2013',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                        'link' => '#',
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'title' => '<a href="course.php">Content with Video</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '2h',
                                        ),
                                        array(
                                            'label' => 'Completed: ',
                                            'value' => 'May 30, 2013',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
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
                                        'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                        'link' => '#',
                                    )
                                ));
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
                                            'value' => 'July 11, 2013',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                        'link' => '#',
                                    ),
                                    'nested' => array(
                                        'show' => array($nested),
                                        'hide' => array($content),
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
                                            'value' => 'July 11, 2013',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                        'link' => '#',
                                    ),
                                    'nested' => array(
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
                                            'value' => 'Oct 10, 2013',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
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
                                            'value' => 'Oct 16, 2013',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
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
                                        'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
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
                                        'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
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
                                            'value' => 'Oct 19, 2013',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                        'link' => '#',
                                    ),
                                    'nested' => array(
                                        'show' => array($nested,$nested1),
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'title' => 'Performance Appraisal',
                                    'meta' => array(
                                        array(
                                            'type' => 'Self Assessment',
                                        ),
                                        array(
                                            'label' => 'Rater:',
                                            'value' => 'Jane Doe',
                                        ),
                                        array(
                                            'label' => 'Completed: ',
                                            'value' => 'Dec 15, 2013',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Print <i class="fa fa-fw fa-print visible-xs"></i>',
                                        'link' => '#',
                                    )
                                );
                                echo createSlat($slat);

                                ?>
                            </section>

                        </div><!-- /tab-pane -->

                        <div class="tab-pane fade" id="tab-3">

                            <section class="section">
                                <h2>Advanced Practice</h2>
                                <?php

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    ),
                                    'title' => 'Clinical Nurse Specialist',
                                    'meta' => array(
                                        array(
                                            'label' => 'Specialty:',
                                            'value' => 'CNS Acute Care/Critical Care (Pediatric)',
                                        )
                                    ),
                                    'action' => array(),
                                );
                                echo createSlat($slat);

                                ?>
                            </section>

                            <section class="section">
                                <h2>Certifications</h2>

                                <?php

                                $content = '
                                    <section class="section">
                                        <h5>Certifying Body</h5>
                                        <p>American Board of Wound Management (ABWM)</p>
                                    </section>
                                    <section class="section">
                                        <h5>Updated</h5>
                                        <p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
                                    </section>
                                    <section class="section">
                                        <h5>System Managed</h5>
                                        <p>No</p>
                                    </section>
                                ';
                                $slat = array(
                                    'title' => 'WCA - Certified Wound Care Associate',
                                    'meta' => array(
                                        array(
                                            'label' => 'Country:',
                                            'value' => 'United States',
                                        ),
                                        array(
                                            'label' => 'State:',
                                            'value' => 'TN',
                                        ),
                                        array(
                                            'label' => 'License:',
                                            'value' => '123456789011112',
                                        ),
                                        array(
                                            'label' => 'Expires: ',
                                            'value' => 'Jan 1, 2015',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(),
                                    'nested' => array(
                                        'hide' => array($content)
                                    ),
                                );
                                echo createSlat($slat);

                                ?>
                            </section>

                            <section class="section">
                                <h2>Education</h2>
                                <?php

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    ),
                                    'title' => 'This is the Degree',
                                    'meta' => array(
                                        array(
                                            'label' => 'Field of Study:',
                                            'value' => 'This is a field of study',
                                        )
                                    ),
                                    'action' => array(),
                                );
                                echo createSlat($slat);

                                ?>
                            </section>

                            <section class="section">
                                <h2>Goals</h2>
                                <?php

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced')),
                                    ),
                                    'title' => '<a href="javascript:alert(\'Show a modal with read-only goal info\');" data-toggle="modal">This is the title of a goal</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Departmental',
                                        ),
                                        array(
                                            'label' => 'Due: ',
                                            'value' => 'Jan 1, 2015',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'In Progress',
                                        )
                                    ),
                                    'action' => array(),
                                );
                                echo createSlat($slat);

                                ?>
                            </section>

                            <section class="section">
                                <h2>Job Description</h2>
                                <?php

                                $content = '
                                    <section class="section">
                                        <h5>Summary</h5>
                                        <p>Responsible for the directing of patient care for a designated shift. Reports to the Nursing Coordinator and coordinates with all related departments within limits of patient care issues for a designated shift.</p>
                                    </section>
                                ';
                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    ),
                                    'title' => 'Charge Nurse',
                                    'meta' => array(
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Active',
                                        ),
                                        array(
                                            'label' => 'Institiution:',
                                            'value' => 'Jupiter Healthcare',
                                        )
                                    ),
                                    'action' => array(),
                                    'nested' => array(
                                        'hide' => array($content)
                                    ),
                                );
                                echo createSlat($slat);

                                $slat['title'] = 'Registered Nurse';
                                echo createSlat($slat);

                                ?>
                            </section>

                            <section class="section">
                                <h2>Licenses</h2>
                                <?php

                                $content = '
                                    <section class="section">
                                        <h5>State Certification Number</h5>
                                        <p>1234567890</p>
                                    </section>
                                    <section class="section">
                                        <h5>National Expiration Date</h5>
                                        <p>Feb 7, 2014</p>
                                    </section>
                                ';
                                $slat = array(
                                    'title' => 'AEMT',
                                    'meta' => array(
                                        array(
                                            'label' => 'State:',
                                            'value' => 'MI',
                                        ),
                                        array(
                                            'label' => 'Country:',
                                            'value' => 'United States',
                                        )
                                    ),
                                    'action' => array(),
                                    'nested' => array(
                                        'hide' => array($content)
                                    ),
                                );
                                echo createSlat($slat);

                                $content = '
                                    <section class="section">
                                        <h5>Certifying Body</h5>
                                        <p>National Association of Alcoholism and Drug Abuse Counselors Certification Commission (NAADAC)</p>
                                    </section>
                                    <section class="section">
                                        <h5>Updated</h5>
                                        <p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
                                    </section>
                                    <section class="section">
                                        <h5>System Managed</h5>
                                        <p>No</p>
                                    </section>
                                ';
                                $slat = array(
                                    'title' => 'NCAC ll - National Certified Addiction Counsler, Level ll',
                                    'meta' => array(
                                        array(
                                            'label' => 'State:',
                                            'value' => 'MI',
                                        ),
                                        array(
                                            'label' => 'Country:',
                                            'value' => 'United States',
                                        ),
                                        array(
                                            'label' => 'State License:',
                                            'value' => '123456789011112',
                                        ),
                                        array(
                                            'label' => 'Expires: ',
                                            'value' => 'Jan. 1, 2015',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(),
                                    'nested' => array(
                                        'hide' => array($content)
                                    ),
                                );
                                echo createSlat($slat);

                                ?>
                            </section>

                        </div><!-- /tab-pane -->


                    </div><!-- /tab-content -->
                </section><!-- /section-main -->

            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box" id="sidebar-credit">
                        <h3>Additional Credit</h3>
                        <p>You may be eligible for additional credit for this course. Make sure your certifications and licenses are up to date.</p>
                        <ul class="list-unstyled">
                            <li><a href="disciplines-licenses.php">Manage Licenses</a><li>
                            <li><a href="certifications.php">Manage Certifications</a></li>
                        </ul>
                        <p><a href="#" class="btn btn-sm btn-default">Refresh Credits</a></p>
                    </section>
                    <?php include_sidebar(); ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div> <!-- /layout -->

<div id="modal-author" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Course Author</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h2>Jane Doe</h2>
                </section>
                <section class="section">
                    <h3>This is a group header</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
                <section class="section">
                    <h3>This is a group header</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
    <script>
        $(function(){
            // This is a hack to make the prototype only show
            // the additional credits sidebar section when the
            // On Completion tab is active
            $('#sidebar-credit').hide();
            $('.nav-focus li a').click(function(){
                if ( $(this).attr('href') === '#completion') {
                    $('#sidebar-credit').show();
                } else {
                    $('#sidebar-credit').hide();
                }
            });
        });
    </script>
<?= createSiteEnd(); ?>
