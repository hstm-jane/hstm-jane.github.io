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
        <canvas class="fph-chart" data-type="Doughnut" data-segments="[[1,1],[1,0],[1,0],[1,0]]" width="108" height="108"></canvas>
        <figcaption>25%</figcaption>
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
                                <h2>Courses</h2>

                                <?php

                                // Course 1 Grouping

                                $nested = createSlat(array(
                                    'title' => 'Live Class',
                                    'meta' => array(
                                        array(
                                            'type' => 'Live Class',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Completed',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'status-complete',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                ));

                                $nested1 = createSlat(array(
                                    'title' => 'Post-Test',
                                    'meta' => array(
                                        array(
                                            'type' => 'Tese',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Completed',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'status-complete',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                ));

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-status')),
                                    ),
                                    'title' => '<a href="curriculum-course.php">Course 1</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Completed',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'status-complete',
                                    ),
                                    'nested' => array(
                                        'show' => array(),
                                        'hide' => array($nested,$nested1),
                                    )
                                );

                                echo createSlat($slat);

                                $nested = createSlat(array(
                                    'title' => 'Pre-Test',
                                    'meta' => array(
                                        array(
                                            'type' => 'Test',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single-success',
                                        'content' => 'Start',
                                        'link' => '#',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                ));

                                $nested1 = createSlat(array(
                                    'title' => 'A Live Class',
                                    'meta' => array(
                                        array(
                                            'type' => 'Live Class',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Registered',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Preview Class',
                                        'link' => 'registration-locked.php',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                ));

                                $nested2 = createSlat(array(
                                    'title' => 'Post-Test',
                                    'meta' => array(
                                        array(
                                            'type' => 'Test',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                ));

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-open')),
                                    ),
                                    'title' => '<a href="curriculum-course.php">Course 2</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'In Progress',
                                        )
                                    ),
                                    'action' => array(),
                                    'nested' => array(
                                        'show' => array(),
                                        'hide' => array($nested,$nested1,$nested2),
                                    )
                                );

                                echo createSlat($slat);

                                $nested = createSlat(array(
                                    'title' => 'A New Live Class',
                                    'meta' => array(
                                        array(
                                            'type' => 'Live Class',
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
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat','slat-attention')),
                                    )
                                ));

                                $nested1 = createSlat(array(
                                    'title' => 'Post-Test',
                                    'meta' => array(
                                        array(
                                            'type' => 'Test',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                ));

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-open')),
                                    ),
                                    'title' => 'Course 3: Basics',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Preview',
                                        'link' => 'course-preview.php',
                                    ),
                                    'nested' => array(
                                        'show' => array(),
                                        'hide' => array($nested,$nested1),
                                    )
                                );

                                echo createSlat($slat);

                                $nested = createSlat(array(
                                    'title' => 'Pre-Test',
                                    'meta' => array(
                                        array(
                                            'type' => 'Test',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                ));

                                $nested1 = createSlat(array(
                                    'title' => 'A New Live Class',
                                    'meta' => array(
                                        array(
                                            'type' => 'Live Class',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Registered',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Preview Class',
                                        'link' => 'registration-locked.php',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                ));

                                $nested2 = createSlat(array(
                                    'title' => 'Post-Test',
                                    'meta' => array(
                                        array(
                                            'type' => 'Test',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                ));

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    ),
                                    'title' => 'Course 4: Advanced',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Preview',
                                        'link' => 'course-preview.php',
                                    ),
                                    'nested' => array(
                                        'show' => array(),
                                        'hide' => array($nested,$nested1,$nested2),
                                    )
                                );

                                echo createSlat($slat);



                                ?>
                            </section>
                        </div> <!-- /tab-pane -->

                        <div class="tab-pane fade" id="overview">
                            <section class="section">
                                <h2>Description</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </section>
                            <section class="section">
                                <h2>Catalog</h2>
                                <p>This course belongs to the following categories in the HLC catalog:</p>
                                <ul>
                                    <li>Subject > Emergency Treatment > Resuscitation</li>
                                    <li>Audience > Critical Care Paramedics</li>
                                </ul>
                            </section>
                        </div><!-- /tab-pane -->
                    </div><!-- /tab-content -->
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php include_sidebar(); ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div> <!-- /layout -->

<!-- Modal -->
<div id="modal-course-preview" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Course 3: Basics</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h2>Learning Activities</h2>
                    <?php

                    $slat = array(
                        'title' => 'Chronic Pain Management 1',
                        'meta' => array(
                            array(
                                'type' => 'Online Activity',
                            ),
                            array(
                                'label' => 'Status:',
                                'value' => 'In Progress',
                            ),
                            array(
                                'label' => 'Est. Time:',
                                'value' => '30m',
                            )
                        ),
                        'action' => array(
                            'type' => 'custom',
                            'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
                        ),
                        'attributes' => array(
                            array('class',array('slat')),
                        )
                    );

                    echo createSlat($slat);

                    $slat = array(
                        'title' => 'Chronic Pain Management Class',
                        'meta' => array(
                            array(
                                'type' => 'Live Class',
                            ),
                            array(
                                'label' => 'Status:',
                                'value' => 'Not Yet Started',
                            ),
                            array(
                                'label' => 'Est. Time:',
                                'value' => '30m',
                            )
                        ),
                        'action' => array(
                            'type' => 'action-single',
                            'content' => 'Preview Schedule',
                            'link' => 'registration-locked.php',
                        ),
                        'attributes' => array(
                            array('class',array('slat')),
                        )
                    );

                    echo createSlat($slat);

                    $slat = array(
                        'title' => 'Chronic Pain Management 2',
                        'meta' => array(
                            array(
                                'type' => 'Online Activity',
                            ),
                            array(
                                'label' => 'Status:',
                                'value' => 'Not Yet Started',
                            ),
                            array(
                                'label' => 'Est. Time:',
                                'value' => '1h 30m',
                            )
                        ),
                        'action' => array(
                            'type' => 'custom',
                            'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
                        ),
                        'attributes' => array(
                            array('class',array('slat')),
                        )
                    );

                    echo createSlat($slat);

                    $slat = array(
                        'title' => 'Post Test',
                        'meta' => array(
                            array(
                                'type' => 'Test',
                            ),
                            array(
                                'label' => 'Status:',
                                'value' => 'Not Yet Started',
                            ),
                            array(
                                'label' => 'Est. Time:',
                                'value' => '10m',
                            )
                        ),
                        'action' => array(
                            'type' => 'custom',
                            'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
                        ),
                        'attributes' => array(
                            array('class',array('slat')),
                        )
                    );

                    echo createSlat($slat);

                    ?>
                </section>

                <section class="section">
                    <h2>Description</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>

                <section class="section">
                    <h2>Authors</h2>
                    <section class="section">
                        <h3>Jane Doe</h3>
                        <div data-toggle="limit-height" data-labels="Show all information|Show less information" data-height="50">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </section>
                </section>

                <section class="section">
                    <h2>Learning Objectives</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                    <ul>
                        <li>An ordered list item</li>
                        <li>An ordered list item</li>
                        <li>An ordered list item</li>
                        <li>An ordered list item</li>
                    </ul>
                </section>

                <section class="section">
                    <h2>Course Outline</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    <ol>
                        <li>An unordered list item</li>
                        <li>An unordered list item</li>
                        <li>An unordered list item</li>
                        <li>An unordered list item</li>
                    </ol>
                </section>

                <section class="section">
                    <h2>Technical Requirements</h2>
                    <div data-toggle="limit-height" data-labels="Show all information|Show less information">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                        <p>
                            <b>Browser Requirements</b>
                            <ul>
                                <li>An unordered list item</li>
                                <li>An unordered list item</li>
                                <li>An unordered list item</li>
                                <li>An unordered list item</li>
                            </ul>
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </section>

                <section class="section">
                    <h2>Catalog</h2>
                    <p>This course belongs to the following categories in the HLC catalog:</p>
                    <ul>
                        <li>Subject > Emergency Treatment > Resuscitation</li>
                        <li>Audience > Critical Care Paramedics</li>
                    </ul>
                </section>

            </div>
            <div class="modal-footer">
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
        setTimeout(function(){$('.slat-open .collapse-toggle').click();},300);
    });
</script>
<?= createSiteEnd(); ?>