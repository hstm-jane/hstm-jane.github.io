<?php

include "includes/helpers/helpers.php";

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
                                    <li><label class="checkbox"><input type="checkbox" value='all' checked> All Tasks</label></li><li><label class="checkbox"><input type="checkbox" value="1"> Assignments</label></li><li><label class="checkbox"><input type="checkbox" value="2"> Classes &amp; Events</label></li><li><label class="checkbox"><input type="checkbox" value="3"> Electives</label></li><li><label class="checkbox"><input type="checkbox" value="4"> Profile Tasks</label></li><li><label class="checkbox"><input type="checkbox" value="5"> Assessments</label></li>
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
                                    array('class',array('slat','slat-attention','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('2')),
                                ),
                                'title' => '<a href="/le-registration-registered-event-4.php">Leadership Training</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Live Event',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Graded',
                                    ),
                                    array(
                                        'label' => 'Date:',
                                        'value' => date('M j, Y',strtotime('-1days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'View Event',
                                    'link' => '/le-registration-registered-event-4.php',
                                ),
                                'nested' => array(
                                    'show' => array(
                                        '<section class="section"><a href="/le-registration-registered-event-4.php" class="slat-nested-alert"><i class="fa fa-info-circle"></i> Plus 2 supplementary activities</a></section>',
                                    ),
                                ),
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

                            //Live Event Training

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('2')),
                                ),
                                'title' => '<a href="/le-registration-registered-event-3.php">Onboarding</a>',
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
                                        'value' => '<span style="display:inline-block">'.date('M j, Y',strtotime('+40days')).' at 3:30pm - </span><span style="display:inline-block">'.date('M j, Y',strtotime('+50days')).' at 3:30pm</span>',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action action-split">
                                        <div class="btn-group">
                                            <a href="/le-registration-registered-event-3.php" class="btn btn-default btn-sm hidden-xs">View</a>
                                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="/le-registration-registered-event-3.php">View Event</a></li>
                                                <li><a href="#">Add to Calendar</a></li>
                                            </ul>
                                        </div>
                                    </div>',
                                ),
                                'nested' => array(
                                    'show' => array(
                                        '<section class="section"><a href="/le-registration-registered-event-3.php" class="slat-nested-alert"><i class="fa fa-info-circle"></i> Plus 1 preparatory activity</a></section>',
                                    ),
                                ),
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
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
    <script src="/scripts/healthstream.tours/plugin/bootstrap-tour.js"></script>
    <script src="/scripts/healthstream.tours/localization/localization-eng-tour.js"></script>
    <script src="/scripts/healthstream.tours/tours/to-do-tour.js"></script>
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
        });
    </script>

<?= createSiteEnd(); ?>