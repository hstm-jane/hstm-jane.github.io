<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Pain Management Curriculum';
$patterns['focus']['title'] = 'Pain Management Curriculum';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-curriculum',
    'type' => 'Curriculum',
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Due:',
        'value' => '{30days}',
    ),
);
$patterns['focus']['supporting'] = '
    <figure class="fph-chart-holder">
        <canvas class="fph-chart" data-type="Doughnut" data-segments="[[1,1],[1,0],[1,0],[1,0],[1,0]]" width="108" height="108"></canvas>
        <figcaption>20%</figcaption>
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
                                    'id' => 'courses',
                                    'label' => 'Courses',
                                ),
                                array(
                                    'id' => 'overview',
                                    'label' => 'Overview',
                                ),
                            ),
                        );
                        echo createFocusNav($focusNav);

                    ?>

                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="courses">

                            <section class="section">
                                <h2>Examples of slats on a Curriculum page</h2>

                                <?php

                                $slat = array(
                                    'title' => '<a href="curriculum-course.php">Example of an assigned course, Not Yet Started</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '2h 10m',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Start',
                                        'link' => 'curriculum-course.php',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );

                                echo createSlat($slat);

                                $slat = array(
                                    'title' => '<a href="curriculum-course.php">Example of an in-progress course</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'In Progress',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '2h 10m',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Resume',
                                        'link' => 'curriculum-course.php',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );

                                echo createSlat($slat);

                                $slat = array(
                                    'title' => '<a href="curriculum-course.php">Example of an exempt course</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Exempt',
                                        )
                                    ),
                                    'action' => array(),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );

                                echo createSlat($slat);

                                $slat = array(
                                    'title' => 'Example of a locked course',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '2h 10m',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="curriculum-course.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );

                                echo createSlat($slat);

                                $slat = array(
                                    'title' => '<a href="equivalent.php">Example of an equivalent</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Equivalent',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Unenrolled',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Choose',
                                        'link' => 'equivalent.php',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );

                                echo createSlat($slat);

                                $slat = array(
                                    'title' => '<a href="course-complete.php">Example of a passed course</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Completed',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '2h 30m',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'status-complete',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat','slat-status')),
                                    )
                                );

                                echo createSlat($slat);

                                $slat['title'] = '<a href="course-complete.php">Example of a failed course</a>';
                                $slat['action']['type'] = 'status-fail';
                                echo createSlat($slat);

                                ?>
                            </section>
                        </div> <!-- /tab-pane -->

                        <div class="tab-pane fade" id="overview">
                            <section class="section">
                                This is the curriculum description. The admin has a text area they can enter content. It is not a wysiwyg.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </section>
                        </div><!-- /tab-pane -->
                    </div><!-- /tab-content -->
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>Description</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. <a href="#overview" data-toggle="focus" class="block">Read Overview</a></p>
                    </section>
                    <?php include_sidebar(); ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div> <!-- /layout -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>