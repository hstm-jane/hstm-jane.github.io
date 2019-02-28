<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My To-Do List';
$patterns['header'] = array(
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">',
    'mainNav' => '
        <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
        <li class="{active=todo}"><a href="todo-grouped-manager-peers-assessments.php">To Do</a></li>
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
        <li class="{active=raters}"><a href="/assessment-overview-summary-darkblue.php?todo=todo-grouped-manager-peers-assessments.php">Raters</a></li>
        <li class="{active=catalog}"><a href="/catalog-unified-main.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'todo',
);
$patterns['focus']['title'] = 'My To-Do List';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Total Tasks:',
        'value' => '8',
    ),
    array(
        'label' => 'Requiring Attention:',
        'value' => '3',
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
                                    <!--<li><label class="checkbox"><input type="checkbox" value="6"> Rater Tasks</label></li>-->
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
                                array('class',array('slat','slat-attention','slat-callout','slat-spaced')),
                                array('data-filter-category',array('5')),
                                array('data-filter-count',array('3')),
                            ),
                            'title' => '<a href="/assessment-overview-summary.php?click=title&titleid=1#details">Initial Nursing Competency Appraisal</a> <span class="badge">3</span>',
                            'meta' => array(
                                array(
                                    'type' => 'Employee Assessment',
                                ),
                                
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('-60days')).'<a href="assessment-overview-summary.php?click=title&titleid=1#details">First of 3 Due</a>',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="assessment-overview-summary.php?click=title&titleid=1#details#details">View<i class="fa fa-fw fa-chevron-right visible-xs"></i></a></div>',
                            )
                        );
                        
                        echo createSlat($slat);
                         $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-attention','slat-callout','slat-spaced')),
                                array('data-filter-category',array('5')),
                                array('data-filter-count',array('1')),
                            ),
                            'title' => '<a href="/assessment-overview-summary.php?click=title&titleid=8#details">Prioritization, Organization, Delegation</a> ',
                            'meta' => array(
                                array(
                                    'type' => 'Employee Assessment',
                                ),
                                
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('-55days')),
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="assessment-overview-summary.php?click=title&titleid=8#details#details">View<i class="fa fa-fw fa-chevron-right visible-xs"></i></a></div>',
                            )
                        );
                        
                        echo createSlat($slat);
                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-attention','slat-callout','slat-spaced')),
                                array('data-filter-category',array('5')),
                                array('data-filter-count',array('1')),
                            ),
                            'title' => '<a href="/assessment-overview-summary.php?click=title&titleid=9#details">RN Community Health Competency Appraisal</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Employee Assessment',
                                ),
                                
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('-30days')),
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="assessment-overview-summary.php?click=title&titleid=9#details#details">View<i class="fa fa-fw fa-chevron-right visible-xs"></i></a></div>',
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
                                array('class',array('slat','slat-callout','slat-spaced')),
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
                                array('class',array('slat','slat-callout','slat-spaced')),
                                array('data-filter-category',array('5')),
                                array('data-filter-count',array('2')),
                            ),
                            'title' => '<a href="/assessment-overview-summary.php?click=title&titleid=10#details">RN Nursing Care of Children</a> <span class="badge">2</span>',
                            'meta' => array(
                                array(
                                    'type' => 'Employee Assessment',
                                ),
                                
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+10days')).'<a href="assessment-overview-summary.php?click=title&titleid=10#details">First of 2 Due</a>',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="assessment-overview-summary.php?click=title&titleid=10#details#details">View<i class="fa fa-fw fa-chevron-right visible-xs"></i></a></div>',
                            )
                        );
                        
                        echo createSlat($slat);
                        

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-callout','slat-spaced')),
                                array('data-filter-category',array('5')),
                            ),
                            'title' => '<a href="assessment.php?assessment=competency-5&progress=1">Initial Nursing Competency Appraisal</a>',
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
                                'content' => 'Resume',
                                'link' => 'assessment.php?assessment=competency-5&progress=1',
                            )
                        );
                        echo createSlat($slat);

                         $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-callout','slat-spaced')),
                                array('data-filter-category',array('5')),
                                array('data-filter-count',array('2')),
                            ),
                            'title' => '<a href="/assessment-overview-summary.php?click=title&titleid=11#details">RN Nutrition</a> <span class="badge">2</span>',
                            'meta' => array(
                                array(
                                    'type' => 'Employee Assessment',
                                ),
                                
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+15days')).'<a href="assessment-overview-summary.php?click=title&titleid=11#details">First of 2 Due</a>',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="assessment-overview-summary.php?click=title&titleid=11#details#details">View<i class="fa fa-fw fa-chevron-right visible-xs"></i></a></div>',
                            )
                        );
                        
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-callout','slat-spaced')),
                                array('data-filter-category',array('5')),
                                array('data-filter-count',array('1')),
                            ),
                            'title' => '<a href="/assessment-overview-summary.php?click=title&titleid=3#details">Communication</a> ',
                            'meta' => array(
                                array(
                                    'type' => 'Employee Assessment',
                                ),
                                
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+20days')),
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="assessment-overview-summary.php?click=title&titleid=3#details#details">View<i class="fa fa-fw fa-chevron-right visible-xs"></i></a></div>',
                            )
                        );
                         echo createSlat($slat);
                        

                         $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-callout','slat-spaced')),
                                array('data-filter-category',array('5')),
                                array('data-filter-count',array('4')),
                            ),
                            'title' => '<a href="assessment-overview-summary.php?click=title&titleid=2#details">Annual Performance Appraisal</a> <span class="badge">4</span>',
                            'meta' => array(
                                array(
                                    'type' => 'Employee Assessment',
                                ),
                                
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+24days')).'<a href="assessment-overview-summary.php?click=title&titleid=2#details">First of 4 Due</a>',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="assessment-overview-summary.php?click=title&titleid=2#details">View<i class="fa fa-fw fa-chevron-right visible-xs"></i></a></div>',
                            )
                        );
                        echo createSlat($slat);
                       


                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-callout','slat-spaced','slat-spaced')),
                                array('data-filter-category',array('5')),
                                array('data-filter-count',array('2')),
                            ),
                            'title' => '<a href="assessment-overview-summary.php?click=title&titleid=17#details">Nursing Skills Assessment Reflective Plan</a> <span class="badge">2</span>',
                            'meta' => array(
                                array(
                                    'type' => 'Employee Assessment',
                                ),
                                
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+25days')).'<a href="assessment-overview-summary.php?click=title&titleid=17#details">First of 2 Due</a>',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="assessment-overview-summary.php?click=title&titleid=17#details">View<i class="fa fa-fw fa-chevron-right visible-xs"></i></a></div>',
                            )
                        );
                        echo createSlat($slat);
                        
                       
                        
                        

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-callout','slat-spaced')),
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
                                array('class',array('slat','slat-callout','slat-spaced')),
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
                                array('class',array('slat','slat-callout','slat-spaced')),
                                array('data-filter-category',array('3')),
                            ),
                            'title' => '<a href="course-elective.php">Leadership Training</a>',
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
                                    array('class',array('slat','slat-callout','slat-spaced')),
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
    <script src="/scripts/healthstream.tours/plugin/bootstrap-tour.js"></script>
    <script src="/scripts/healthstream.tours/localization/localization-eng-tour.js"></script>
    <script src="/scripts/healthstream.tours/tours/to-do-tour.js"></script>
    <script>
        $(function(){

            // helper to keep the task count correct
            var task_total = 0;
            var attention_total = 0;
            $('#tasks .slat[data-filter-category]').each(function(){
                if ( $(this).attr('data-filter-count') !== undefined ) {
                    task_total = task_total + ($(this).attr('data-filter-count') * 1);
                    if ( $(this).hasClass('slat-attention') ) {
                        attention_total = attention_total + ($(this).attr('data-filter-count') * 1);
                    }
                } else {
                    task_total++;
                    if ( $(this).hasClass('slat-attention') ) {
                        attention_total++;
                    }
                }
            });
            $('.focus-pageheader .meta-value:eq(0)').text(task_total);
            $('.focus-pageheader .meta-value:eq(1)').text(attention_total);


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