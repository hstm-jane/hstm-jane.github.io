<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My To-Do List';
$patterns['header'] = array(
    'classes' => array('site-header--assessments'),
    'userName' => 'Dana Rotkinson',
    'userImage' => '',
    'mainNav' => '
        <li class="{active=connections}"><a href="#">Connections</a></li>
        <li class="{active=todo}"><a href="#">To Do</a></li>
        <li class="{active=completed}"><a href="#">Completed</a></li>
        <li class="{active=profile}"><a href="/portfolio-no-healthstream-id-summit.php">Profile</a></li>       
        <li class="{active=catalog}"><a href="#">Catalog</a></li>
        <li class="{active=calendar}"><a href="#">Event Calendar</a></li>
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'todo',
);

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
    'link' => '#',
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
                                        'value' => '<span class="meta-callout-label">Due:</span>10/1/2016',
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
<?= createPrototypeNav('summit'); ?>
<?= createSiteScripts(); ?>
    <script src="/scripts/healthstream.tours/plugin/bootstrap-tour.js"></script>
    <script src="/scripts/healthstream.tours/localization/localization-eng-tour.js"></script>
    <script src="/scripts/healthstream.tours/tours/to-do-tour.js"></script>
    <script>
        $(function(){
            $('.badge').hide();
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
        });
    </script>

<?= createSiteEnd(); ?>