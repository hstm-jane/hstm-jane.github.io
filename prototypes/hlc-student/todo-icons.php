<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My To-Do List';
$patterns['focus']['title'] = 'My To-Do List';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Total Tasks:',
        'value' => '8',
    ),
    array(
        'label' => 'Requiring Attention:',
        'value' => '2',
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
                    <section class="section">
                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-attention','slat-spaced','slat-callout')),
                            ),
                            'title' => '<a href="course.php">Understanding Chronic Pain Management</a>',
                            'meta' => array(
                                array(
                                    'type' => '<i class="fa fa-fw fa-cube"></i> Course',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'In Progress',
                                ),
                                array(
                                    'label' => 'Complete:',
                                    'value' => '2 of 3',
                                    'attributes' => array(
                                        array('class','meta-hide-xs'),
                                    )
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span>Dec. 31, 2013 at 12am',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Resume',
                                'link' => 'course.php',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-attention','slat-spaced','slat-callout')),
                            ),
                            'title' => '<a href="registration.php">This is an example of a class that needs registration</a>',
                            'meta' => array(
                                array(
                                    'type' => '<i class="fa fa-fw fa-bell"></i> Live Class',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'Not Registered',
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
                                array('data-filter-category',array('2')),
                            ),
                            'title' => '<a href="registration-registered-class-single.php">This is an example of a registered class</a>',
                            'meta' => array(
                                array(
                                    'type' => '<i class="fa fa-fw fa-bell"></i> Live Class',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'Registered',
                                ),
                                array(
                                    'label' => 'Starts: ',
                                    'value' => '<span class="meta-callout-label">Starts:</span>Jul 15, 2014 at 3:30pm',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'View Class',
                                'link' => 'registration-registered-class-single.php',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-spaced','slat-callout')),
                            ),
                            'title' => '<a href="equivalent.php">Choose a Course</a>',
                            'meta' => array(
                                array(
                                    'type' => '<i class="fa fa-fw fa-exchange"></i> Equivalent',
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
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Choose Course',
                                'link' => 'equivalent.php',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-spaced','slat-callout')),
                            ),
                            'title' => '<a href="curriculum.php">Pain Management Curriculum</a>',
                            'meta' => array(
                                array(
                                    'type' => '<i class="fa fa-fw fa-cubes"></i> Curriculum',
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
                            ),
                            'title' => '<a href="assessment.php">2014 Performance Appraisal</a>',
                            'meta' => array(
                                array(
                                    'type' => '<i class="fa fa-fw fa-star"></i> Assessment',
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
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Start',
                                'link' => 'assessment.php',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-spaced','slat-callout')),
                            ),
                            'title' => '<a href="profile-activity.php">Please Update Your Profile</a>',
                            'meta' => array(
                                array(
                                    'type' => '<i class="fa fa-fw fa-user"></i> Profile Activity',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'Assigned',
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span>Oct 25, 2014',
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
                            ),
                            'title' => '<a href="course-elective.php">This is an example of an elective</a>',
                            'meta' => array(
                                array(
                                    'type' => '<i class="fa fa-fw fa-cube"></i> Course',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'Not Yet Started',
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => 'Elective',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Start',
                                'link' => 'course-elective.php',
                            )
                        );
                        echo createSlat($slat);

                        ?>
                    </section>
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php include_sidebar() ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>