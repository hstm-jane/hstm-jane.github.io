<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Checklist for Jane Doe';
$patterns['focus']['title'] = 'Checklist for Jane Doe';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-checklist',
    'type' => 'Checklist',
);
$patterns['focus']['meta_primary'] = array(
    array(
        'label' => 'From Course:',
        'value' => '<a href="course.php" class="meta-value">Checklist Course</a>',
        'attributes' => array(
            array('class','meta-hidden-xs'),
        )
    )
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Items:',
        'value' => '5',
    ),
    array(
        'label' => 'Due:',
        'value' => date('M j, Y'),
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
                                    'label' => 'Items',
                                ),
                                array(
                                    'id' => 'tab-2',
                                    'label' => 'Evaluators',
                                ),
                                array(
                                    'id' => 'tab-3',
                                    'label' => 'History',
                                ),
                            ),
                        );
                        echo createFocusNav($focusNav);

                    ?>

                    <div class="tab-content">
                        <div class="tab-pane active fade in" id="tab-1">
                            <section class="section">
                                <div class="alert alert-info">
                                    <strong>This checklist is read-only</strong> and is not available to be graded until the student completes the prerequisite learning activities.
                                </div>
                            </section>
                            <section class="section">
                                <h2>A Section Title</h2>
                                <div class="checklist-item">
                                    <div class="checklist-row">
                                        <div class="checklist-col checklist-number"><span>1</span></div>
                                        <div class="checklist-col checklist-description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class="checklist-item">
                                    <div class="checklist-row">
                                        <div class="checklist-col checklist-number"><span>2</span></div>
                                        <div class="checklist-col checklist-description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="section">
                                <h2>A Section Title</h2>
                                <div class="checklist-item">
                                    <div class="checklist-row">
                                        <div class="checklist-col checklist-number"><span>1</span></div>
                                        <div class="checklist-col checklist-description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class="checklist-item">
                                    <div class="checklist-row">
                                        <div class="checklist-col checklist-number"><span>2</span></div>
                                        <div class="checklist-col checklist-description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class="checklist-item">
                                    <div class="checklist-row">
                                        <div class="checklist-col checklist-number"><span>3</span></div>
                                        <div class="checklist-col checklist-description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="tab-2">
                            <section class="section">
                                <h2>Evaluators</h2>
                            <?php

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat')),
                                ),
                                'title' => 'Demonstration, Jack H.',
                                'meta' => array(
                                    array(
                                        'type' => 'Evaluator',
                                    ),
                                    array(
                                        'label' => 'Job Title:',
                                        'value' => 'RN Clinical Reviewer',
                                    ),
                                    array(
                                        'label' => 'Department:',
                                        'value' => 'Cardiology',
                                    ),
                                    array(
                                        'label' => 'Institution:',
                                        'value' => 'ACME General Medical Center',
                                    )
                                ),
                                'action' => array()
                            );
                            echo createSlat($slat);

                            $slat['title'] = 'Smith, John P.';
                            echo createSlat($slat);

                            ?>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="tab-3">
                            <section class="section">
                                <h2>History</h2>
                                <?php

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    ),
                                    'title' => '<a href="checklist-student-graded.php">Aug 25, 2014</a>',
                                    'meta' => array(
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Failed',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'status-fail',
                                    )
                                );
                                echo createSlat($slat);

                                $slat['title'] = '<a href="checklist-student-graded.php">Aug 17, 2014</a>';
                                echo createSlat($slat);

                                ?>
                            </section>
                        </div>
                    </div>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'html' => '<a href="#" class="btn btn-success">Print</a>',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>

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