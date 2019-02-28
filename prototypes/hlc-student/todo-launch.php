<style>
.waffle{
    height: 48px;
    vertical-align: middle;
    padding-top:10px;
    padding-left:20px;  
    position:relative;  
}
.waffle-icon {
    font-size: 24;
    cursor: pointer;
}
.waffle-text {
    display:block;
    font-size:10px !important; 
    text-transform:uppercase;
    display:none;
}
.app-menu {
    background-color: #efefef;
    border: 1px #ccc solid;
    position: absolute;
    display:none;
    width:500px;
    z-index: 999;
    
}
.app {
    height:100px;
    width: 100px;
    /*border: 2px solid #333;*/
    border-radius: 9px;
    padding: 4px;
    min-height: 100px;
    cursor: pointer;
    margin: 10px;
    background-color: #09C;
    color: #fff;
    float: left;
    display:flex;
    align-items: center;
    justify-content: center;
   
}
.app:hover {
    transform: scale(1.05);
    box-shadow: 0 0 3px rgba(0,0,0,.2);
}
.app a:hover {
    text-decoration: none;
    color:#fff;
}
.app a {
    color: #fff;
    text-decoration: none;
}
</style>
<?php

include "includes/helpers/helpers.php";
$patterns['header'] = array(
    
    'mainNav' => '
        <li class="waffle"><i class="waffle-icon icon-waffle4"></i><span class="waffle-text">Apps</span>
        <div class="app-menu" id="appmenu" draggable="true" ondragstart="drag(event)">
            <div class="app" draggable="true" ondragstart="drag(event)">
                <a href="#">
                <span class="dropdown-title">HLC: Administrator</span></a>
                <!--<ul class="dropdown">
                    <li onclick="pageCalendar()"><a href="http://hstm-platform.patternmanager.com/scheduling-calendar.php">Calendar</a></li>
                    <li onclick="pageStudentSearch()"><a href="http://hstm-platform.patternmanager.com/student-search-demo.php" target="_blank">Student Search</a></li>
                    <li onclick="pageReports()"><a href="http://www.healthstream.com/HLC/Admin/Reports/ReportsMainMenu.aspx"><i class="icon-plane icon-large"></i>Reports</a></li>
                </ul>-->
            </div>
             <div class="app" draggable="true" ondragstart="drag(event)">
                 <a href="http://www.healthstream.com/hlc/admin/sitemap.aspx" target="_blank">
                    <div class="product-container">
                        <div class="product-title">SimCenter: SimView</div>
                        <div class="product-links">
                        </div>
                    </div>
            </div>
             <div class="app" draggable="true" ondragstart="drag(event)">
                <a href="https://demo.coi-smart.com/login.php" target="_blank">
                    <div class="product-container">
                        <div class="product-title">COI-SMART</div>
                        <div class="product-links">
                        </div>
                    </div>
                </a>
            </div>
             <div class="app" draggable="true" ondragstart="drag(event)">
                <a href="http://hstm-hlc-student.patternmanager.com/" target="_blank">
                    <div class="product-container">
                        <div class="product-title">HLC: Student</div>
                        <div class="product-links">
                        </div>
                    </div>
                </a>
            </div>
             <div class="app" draggable="true" ondragstart="drag(event)">
                <a href="http://www.healthlinesystems.com/echo_login.aspx" target="_blank">
                    <div class="product-container">
                        <div class="product-title">EchoAccess</div>
                        <div class="product-links">
                        </div>
                    </div>
                </a>
            </div>
             <div class="app" draggable="true" ondragstart="drag(event)">
                 <a href="http://hstm-platform.patternmanager.com" target="_blank">
                    <div class="product-container">
                        <div class="product-title">Live Events</div>
                        <div class="product-links">
                        </div>
                    </div>
                </a>
            </div>
            <div class="app" draggable="true" ondragstart="drag(event)">
                <a href="http://community.healthstream.com/p/duplicateemail.aspx" target="_blank">
                    <div class="product-container">
                        <div class="product-title">HealthStream Community</div>
                        <div class="product-links">
                        </div>
                    </div>
                </a>
            </div>
            <div class="app" draggable="true" ondragstart="drag(event)">
                 <a href="http://precyseuniversity.com/login/" target="_blank">
                    <div class="product-container">
                        <div class="product-title">Precyse University DNA</div>
                        <div class="product-links">
                        </div>
                    </div>
                </a>
            </div>
            <div class="app" draggable="true" ondragstart="drag(event)">
                 <a href="http://www.mysimcenter.com/en-US/SimManagerNotLoggedIn.aspx" target="_blank">
                    <div class="product-container">
                        <div class="product-title">SimCenter: SimStore</div>
                        <div class="product-links">
                        </div>
                    </div>
                </a>
            </div>
           
        </div></li>
        <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
        <li class="{active=todo}"><a href="/todo.php">To Do</a></li>
        <li class="{active=completed}"><a href="/completed-filtered.php">Completed</a></li>
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
        <li class="{active=raters}"><a href="/assessment-overview.php">Raters</a></li>
        <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'raters',
);
$patterns['start']['title'] = 'My To-Do List';
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
<link href="https://file.myfontastic.com/uZsquXbgqNZrKo4YSaHQHS/icons.css" rel="stylesheet">
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
                                    <li><label class="checkbox"><input type="checkbox" value='all' checked> All Tasks</label></li><li><label class="checkbox"><input type="checkbox" value="1"> Assignments</label></li><li><label class="checkbox"><input type="checkbox" value="2"> Live Classes</label></li><li><label class="checkbox"><input type="checkbox" value="3"> Electives</label></li><li><label class="checkbox"><input type="checkbox" value="4"> Profile Tasks</label></li><li><label class="checkbox"><input type="checkbox" value="5"> Assessments</label></li><li><label class="checkbox"><input type="checkbox" value="6"> Hidden Option with No Matches</label></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <section class="section" id="tasks">
                        <?php

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-attention','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('1')),
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
                                ),
                                'title' => '<a href="assessment.php?assessment=competency-14&user=peer-1">Initial Nursing Competency Appraisal</a>',
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
                                        'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+7days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Start',
                                    'link' => 'assessment.php?assessment=competency-14&user=peer-1',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('5')),
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

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('4')),
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
                                        'label' => 'Due:',
                                        'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+30days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Start',
                                    'link' => 'profile-activity.php',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('5')),
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
                                ),
                                'title' => '<a href="course-elective.php">Managment Development Skills</a>',
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

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('5')),
                                ),
                                'title' => '<a href="/todo-pending.php">Pending Assessments</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Assessment',
                                    ),
                                    array(
                                        'label' => 'Pending:',
                                        'value' => '5',
                                    ),
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'View',
                                    'link' => '/todo-pending.php',
                                ),
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
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
    <script src="/scripts/healthstream.tours/plugin/bootstrap-tour.js"></script>
    <script src="/scripts/healthstream.tours/localization/localization-eng-tour.js"></script>
    <script src="/scripts/healthstream.tours/tours/to-do-tour.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/TweenMax.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/utils/Draggable.min.js"></script>
    
    <script>
        $(function(){

            // helper to keep the task count correct
            $('.focus-pageheader .meta-value:eq(0)').text($('#tasks .slat').length);
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

            $('.waffle-icon').click(function() {
                if($('.app-menu').hasClass('open')){
                    $('.app-menu').hide();
                    $('.app-menu').removeClass('open');
                }
                else {
                    $('.app-menu').show();
                    $('.app-menu').addClass('open');
                }
            });
            createSortable('appmenu');
        });

        function createSortable(selector) {
        var sortable = document.getElementById(selector);
        var width = 75;
        
        //TweenMax.set(sortable, {width : width * sortable.children.length + 40});
        TweenMax.set(sortable, {width: 500});
        Draggable.create(sortable.children, {
            type: 'x',
            bounds: sortable,
            edgeResistance: 0.7,
            onPress: function() {
            var t = this.target,
                i = 0,
                child = t;

            while (child = child.previousSibling) {
                if (child.nodeType === 1) i++;
            }

            t.currentIndex = i;
            t.currentWidth = t.offsetWidth;
            t.kids = Array.prototype.slice.call(t.parentNode.children, 0);

            TweenMax.set(this.target, {
                backgroundColor: '#555',
                scale: 0.75
            });
            },
            onDrag: function() {
            var t = this.target,
                elements = t.kids.slice(0),
                indexChange = Math.round(this.x / t.currentWidth),
                bound1 = t.currentIndex,
                bound2 = bound1 + indexChange;

            if (bound1 < bound2) {
                // move right
                TweenLite.to(elements.splice(bound1 + 1, bound2 - bound1), 0.15, { xPercent: -100 });
                TweenLite.to(elements, 0.15, { xPercent: 0 });
            } else if (bound1 === bound2) {
                // moved
                elements.splice(bound1, 1);
                TweenLite.to(elements, 0.15, { xPercent: 0 });
            } else {
                // move left
                TweenLite.to(elements.splice(bound2, bound1 - bound2), 0.15, { xPercent: 100 });
                TweenLite.to(elements, 0.15, { xPercent: 0 });
            }
            },
            liveSnap: function(x) {
            var h = this.target.currentWidth;
            return Math.round(x / h) * h;
            },
            onDragEnd: function() {
            var t = this.target,
                max = t.kids.length - 1,
                xPos = this.x,
                newIndex = Math.round(this.x / t.currentWidth);

            newIndex += (newIndex < 0 ? -1 : 0) + t.currentIndex;
            if (newIndex === max) {
                console.log('in if');
                t.parentNode.appendChild(t);
            } else {
                console.log('in else');
                t.parentNode.insertBefore(t, t.kids[newIndex + 1]);
            }
            TweenLite.set(t.kids, { xPercent: 0, overwrite: "all" });
            TweenLite.set(t, { x: 0, scale: 1,   });
            }
        });

        }
    </script>

<?= createSiteEnd(); ?>