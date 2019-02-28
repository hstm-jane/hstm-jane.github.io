<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'RQI BLS';
$patterns['focus']['title'] = 'RQI BLS';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-curriculum',
    'type' => 'MOC Curriculum',
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Due:',
        'value' => 'Dec 31, 2016',
    ),
    array(
        'label' => 'Status:',
        'value' => 'In Progress',
    ),
);
$patterns['focus']['supporting'] = '
    <figure class="fph-chart-holder">
        <canvas class="fph-chart" data-type="Doughnut" data-segments="[[1,1],[1,0],[1,0],[1,0],[1,0],[1,0],[1,0],[1,0],[1,0],[1,0]]" width="108" height="108"></canvas>
        <figcaption>10%</figcaption>
    </figure>';

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
                                    'id' => 'tab-pane-1',
                                    'label' => 'Available Course(s)',
                                ),
                                array(
                                    'id' => 'tab-pane-2',
                                    'label' => 'Full Schedule',
                                ),
                            ),
                        );
                        echo createFocusNav($focusNav);
                    ?>

                    <section class="section">
                        <div class="alert alert-accent">
                            <h4>Past Due</h4>
                            Complete your Available Courses by Jun 30, 2015 to receive a three month extension of your expiration date.
                        </div>
                    </section>

                    <div class="tab-content">

                        <div class="tab-pane fade in active" id="tab-pane-1">
                            <section class="section">
                                <h2>Available Course(s)</h2>

                                <?php

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout','slat-attention')),
                                    ),
                                    'title' => '<a href="course.php">Manikin Activity - Adult/Child Ventilations</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '5m',
                                        ),
                                        array(
                                            'label' => 'Status',
                                            'value' => 'Past Due - Not Yet Started',
                                        ),
                                        array(
                                            'label' => 'Due: ',
                                            'value' => 'Jun 30, 2015',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single-success',
                                        'content' => 'Start',
                                        'link' => 'course.php',
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">2-Rescuer Adult BLS Patient Case 1</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '10m',
                                        ),
                                        array(
                                            'label' => 'Status',
                                            'value' => 'Not Yet Started',
                                        ),
                                        array(
                                            'label' => 'Due: ',
                                            'value' => 'Dec 31, 2015',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single-success',
                                        'content' => 'Start',
                                        'link' => 'course.php',
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">Manikin Activity - Adult/Child Compressions</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '5m',
                                        ),
                                        array(
                                            'label' => 'Status',
                                            'value' => 'Not Yet Available',
                                        ),
                                        array(
                                            'label' => 'Due: ',
                                            'value' => 'Sep 30, 2015',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                );
                                echo createSlat($slat);

                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">1-Rescuer Adult BLS</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '3m',
                                        ),
                                        array(
                                            'label' => 'Status',
                                            'value' => 'Not Yet Available',
                                        ),
                                        array(
                                            'label' => 'Due: ',
                                            'value' => 'Dec 31, 2015',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">Adult/Child Choking</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '3m',
                                        ),
                                        array(
                                            'label' => 'Status',
                                            'value' => 'Not Yet Available',
                                        ),
                                        array(
                                            'label' => 'Due: ',
                                            'value' => 'Dec 31, 2015',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">Infant Choking</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '3m',
                                        ),
                                        array(
                                            'label' => 'Status',
                                            'value' => 'Not Yet Available',
                                        ),
                                        array(
                                            'label' => 'Due: ',
                                            'value' => 'Dec 31, 2015',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                );
                                echo createSlat($slat);

                                ?>

                            </section>
                        </div>

                        <div class="tab-pane fade" id="tab-pane-2">
                            <section class="section">
                                <h2>Full Schedule 2015-2016</h2>

                                <?php

                                $nested = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout','slat-status')),
                                    ),
                                    'title' => '<a href="course.php">2-Rescuer Adult BLS</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '3m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Complete',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'status-complete',
                                    )
                                ));
                                $nested1 = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout','slat-status')),
                                    ),
                                    'title' => '<a href="course.php">2-Rescuer Adult BLS Patient Case 1</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '10m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Started',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'action-single-success',
                                        'content' => 'Start',
                                        'link' => 'course.php',
                                    )
                                ));
                                $nested2 = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">1-Rescuer Adult BLS</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '3m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                ));
                                $nested3 = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">Adult/Child Choking</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '3m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                ));
                                $nested4 = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">Infant Choking</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '3m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                ));
                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout','slat-status','slat-open')),
                                    ),
                                    'title' => 'Year 1: Jan 1, 2015 to Dec 31, 2015',
                                    'meta' => array(
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'In Progress',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(),
                                    'nested' => array(
                                        'hide' => array($nested,$nested1,$nested2,$nested3,$nested4),
                                    )
                                );
                                echo createSlat($slat);


                                $nested = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout','slat-status')),
                                    ),
                                    'title' => '<a href="course.php">Manikin Activity - Adult/Child Compressions</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '5m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Complete',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'status-complete',
                                    )
                                ));
                                $nested1 = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout','slat-status')),
                                    ),
                                    'title' => '<a href="course.php">Manikin Activity - Adult/Child Ventilations</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '5m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Complete',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'status-complete',
                                    )
                                ));
                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout','slat-status')),
                                    ),
                                    'title' => 'Q1: Jan 1, 2015 to Mar 31, 2015',
                                    'meta' => array(
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Complete',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'status-complete',
                                    ),
                                    'nested' => array(
                                        'hide' => array($nested,$nested1),
                                    )
                                );
                                echo createSlat($slat);


                                $nested = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout','slat-status')),
                                    ),
                                    'title' => '<a href="course.php">Manikin Activity - Adult/Child Compressions</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '5m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Complete',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'status-complete',
                                    )
                                ));
                                $nested1 = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout','slat-status','slat-attention')),
                                    ),
                                    'title' => '<a href="course.php">Manikin Activity - Adult/Child Ventilations</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '5m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Past Due - Not Yet Started',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'action-single-success',
                                        'content' => 'Start',
                                        'link' => 'course.php',
                                    )
                                ));
                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout','slat-status','slat-open','slat-attention')),
                                    ),
                                    'title' => 'Q2: Apr 1, 2015 to Jun 30, 2015',
                                    'meta' => array(
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Past Due',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(),
                                    'nested' => array(
                                        'hide' => array($nested,$nested1),
                                    )
                                );
                                echo createSlat($slat);


                                $nested = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">Manikin Activity - Adult/Child Compressions</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '5m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                ));
                                $nested1 = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">Manikin Activity - Adult/Child Ventilations</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '5m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                ));
                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout','slat-open')),
                                    ),
                                    'title' => 'Q3: Jul 1, 2015 to Sep 30, 2015',
                                    'meta' => array(
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(),
                                    'nested' => array(
                                        'hide' => array($nested,$nested1),
                                    )
                                );
                                echo createSlat($slat);


                                $nested = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">Manikin Activity - Adult/Child 1-Rescuer CPR</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '10m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                ));
                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
                                    ),
                                    'title' => 'Q4: Oct 1, 2015 to Dec 31, 2015',
                                    'meta' => array(
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(),
                                    'nested' => array(
                                        'hide' => array($nested),
                                    )
                                );
                                echo createSlat($slat);


                                $nested = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">2-Rescuer Adult BLS</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '3m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                ));
                                $nested1 = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">2-Rescuer Adult BLS Patient Case 2</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '10m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                ));
                                $nested2 = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">1-Rescuer Child BLS</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '12m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                ));
                                $nested3 = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">A2-Rescuer Infant BLS</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '10m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                ));
                                $nested4 = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">1-Rescuer Infant BLS</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '10m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                ));
                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout','slat-status')),
                                    ),
                                    'title' => 'Year 2: Jan 1, 2016 to Dec 31, 2016',
                                    'meta' => array(
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(),
                                    'nested' => array(
                                        'hide' => array($nested,$nested1,$nested2,$nested3,$nested4),
                                    )
                                );
                                echo createSlat($slat);


                                $nested = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">Manikin Activity - Adult/Child Compressions</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '5m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                ));
                                $nested1 = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">Manikin Activity - Adult/Child Ventilations</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '5m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                ));
                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
                                    ),
                                    'title' => 'Q5: Jan 1, 2016 to Mar 31, 2016',
                                    'meta' => array(
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(),
                                    'nested' => array(
                                        'hide' => array($nested,$nested1),
                                    )
                                );
                                echo createSlat($slat);


                                $nested = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">Manikin Activity - Infant Compressions</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '5m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                ));
                                $nested1 = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">Manikin Activity - Infant Ventilations</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '10m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                ));
                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
                                    ),
                                    'title' => 'Q6: Apr 1, 2016 to Jun 30, 2016',
                                    'meta' => array(
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(),
                                    'nested' => array(
                                        'hide' => array($nested,$nested1),
                                    )
                                );
                                echo createSlat($slat);


                                $nested = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">Manikin Activity - Adult/Child Compressions</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '5m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                ));
                                $nested1 = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">Manikin Activity - Adult/Child Ventilations</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '5m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                ));
                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
                                    ),
                                    'title' => 'Q7: Jul 1, 2016 to Sep 30, 2016',
                                    'meta' => array(
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(),
                                    'nested' => array(
                                        'hide' => array($nested,$nested1),
                                    )
                                );
                                echo createSlat($slat);


                                $nested = createSlat(array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => '<a href="course.php">Manikin Activity - Infant 1-Rescuer CPR</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '10m',
                                        ),
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                ));
                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
                                    ),
                                    'title' => 'Q8: Oct 1, 2016 to Dec 31, 2016',
                                    'meta' => array(
                                        array(
                                            'label' => 'Status: ',
                                            'value' => 'Not Yet Available',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(),
                                    'nested' => array(
                                        'hide' => array($nested),
                                    )
                                );
                                echo createSlat($slat);

                                ?>
                            </section>
                        </div>

                    </div>

                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <img src="/content/images/rqi.png" style="width:100%">
                    </section>
                    <section class="section section-box">
                        <h3>My Cards</h3>
                        <dl style="margin:0">
                            <dt>BLS - Basic Life Support</dt>
                            <dd>Exprires: Dec 31, 2016</dd>
                            <dd><a href="#modal-certification" data-toggle="modal">View Details</a> | <a href="#" id="open-ecard">View e-card</a></dd>
                        </dl>
                    </section>
                    <section class="section section-box">
                        <h3>Additional Information</h3>
                        <ul class="list-links">
                            <li><a href="#">CPR Quality</a></li>
                            <li><a href="#">Get With The Guidelines&reg;-Resuscitation</a></li>
                            <li><a href="#">Resuscitation Quality Improvement</a></li>
                            <li><a href="#">Order a Course Completion Card</a></li>
                            <li><a href="#">Welcome to Laerdal Medical &mdash; Helping Save Lives</a></li>
                            <li><a href="#">Watch RQI Introduction Video</a></li>
                        </ul>
                    </section>
                    <?php include_sidebar(); ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div> <!-- /layout -->

<div id="modal-certification" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">View Certification</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Certifying Body</label>
                    <select class="form-control" disabled>
                        <option>American Heart Association (AHA)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Certification</label>
                    <select class="form-control" disabled>
                        <option>BLS &mdash; Basic Life Support</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Country</label>
                    <select class="form-control" disabled>
                        <option>United States</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Certification Period</label>
                            <input type="text" class="form-control" value="2 Years" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">System Managed</label>
                            <div>
                                <label class="radio-inline"><input type="radio" name="radio" value="yes" disabled checked> Yes</label>
                                <label class="radio-inline"><input type="radio" name="radio" value="no" disabled> No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Certification Number <small>Optional</small></label>
                            <input type="text" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Expiration Date <small>Optional</small></label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="12/31/2016" disabled>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button" disabled><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        setTimeout(function(){$('.slat-open .collapse-toggle').click();},300);

        $('#open-ecard').click(function(e){
            e.preventDefault();
            alert('This would pop open a new window with the printable certificate e-card');
        });

        // HealthStream.utilities.growl({
        //     type: 'success',
        //     title: 'Congratulations',
        //     text: 'You completed a course.',
        //     sticky: true
        // });

        HealthStream.utilities.growl({
            type: 'success',
            title: 'Congratulations',
            text: 'The completion of Q1 in your RQI BLS has earned you a three month extension.',
            sticky: true
        });
    });
</script>
<?= createSiteEnd(); ?>