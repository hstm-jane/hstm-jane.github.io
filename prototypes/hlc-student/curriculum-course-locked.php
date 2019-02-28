<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Understanding Chronic Pain Management';
$patterns['header']['navMainActive'] = 'catalog';
$patterns['focus']['title'] = 'Understanding Chronic Pain Management';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-course',
    'type' => 'Course',
);
$patterns['focus']['meta_primary'] = array(
    array(
        'label' => 'From Curriculum:',
        'value' => '<a href="curriculum-preenrollment.php" class="meta-value">Pain Management Curriculum</a>',
    ),
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Est Time:',
        'value' => '2h 10m',
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

                    <section class="section">
                        <a href="curriculum-preenrollment.php"><i class="fa fa-fw fa-chevron-left"></i>Return to Curriculum</a>
                    </section>

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
                                            'value' => 'Not Yet Started',
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
                                    'title' => '<a href="egistration-locked.php">Not First Item Class</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Class',
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

                    <section class="section" id="jump-description">
                        <h2>Description</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </section>


                    <section class="section">
                        <h3>Author</h3>
                        <p><a href="#modal-author" data-toggle="modal">Jane Doe</a></p>
                    </section>

                    <section class="section" id="jump-learning-objectives">
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

                    <section class="section" id="jump-course-outline">
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

                    <section class="section" id="jump-about-the-authors">
                        <h2>About the Authors</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    </section>

                    <section class="section" id="jump-continuing-education-credits">
                        <h2>Continuing Education Credits</h2>
                        <p>You will earn or renew the following credits upon successful completion of this course.</p>
                        <?php

                        $content = '
                            <section class="section">
                                <h5>Statement</h5>
                                <p>The American Heart Association is accredited by the Accreditation Council for Continuing Medical Education to provide continuing education. The American Heart Association designates this enduring material for a maximim of 2.5 AMA PRA Category 1 Credits.</p>
                            </section>
                        ';
                        $content1 = '
                            <section class="section">
                                <h5>Disciplines</h5>
                                <p>Emergency Physicians, Physician Assistants, Physician, Surgeons</p>
                            </section>
                        ';
                        $content2 = '
                            <section class="section"><h5>Locations</h5>
                                <p>
                                    <span class="label label-default">AK</span>
                                    <span class="label label-default">AL</span>
                                    <span class="label label-default">AR</span>
                                    <span class="label label-default">CA</span>
                                    <span class="label label-default">CO</span>
                                    <span class="label label-default">CT</span>
                                    <span class="label label-default">DC</span>
                                    <span class="label label-default">DE</span>
                                </p>
                            </section>
                        ';
                        $slat = array(
                            'title' => 'Name of Accrediting / Approval Body',
                            'nested' => array(
                                'hide' => array($content,$content1,$content2),
                            ),
                            'meta' => array(
                                array(
                                    'label' => 'Credit:',
                                    'value' => '2.0 AMA PRA Category 1 Credits',
                                ),
                                array(
                                    'label' => 'Expiration:',
                                    'value' => 'Apr 4, 2016',
                                )
                            ),
                            'action' => array(),
                            'attributes' => array(
                                array('class',array('slat')),
                            )
                        );

                        echo createSlat($slat);

                        ?>
                    </section>

                    <section class="section" id="jump-certifications">
                        <h2>Certifications</h2>
                        <p>You will earn or renew the following certifcations upon successful completion of this course.</p>
                        <?php

                        $slat = array(
                            'title' => 'Certification Name',
                            'meta' => array(
                                array(
                                    'label' => 'Certifying Body:',
                                    'value' => 'Name of Accrediting / Approval Body'
                                ),
                                array(
                                    'label' => 'Certification Period: ',
                                    'value' => 'Apr 1, 2012 — Apr 1, 2013'
                                )
                            ),
                            'action' => array()
                        );

                        echo createSlat($slat);

                        ?>
                    </section>

                    <section class="section" id="jump-technical-requirements">
                        <h2>Technical Requirements</h2>
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
                    </section>

                    <section class="section" id="jump-catalog">
                        <h2>Catalog</h2>
                        <p>This course belongs to the following categories in the HLC catalog:</p>
                        <ul>
                            <li>Subject > Emergency Treatment > Resuscitation</li>
                            <li>Audience > Critical Care Paramedics</li>
                        </ul>
                    </section>

                </section><!-- /section-main -->

            </div><!-- /column -->

            <div class="col-md-3" >
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php include_sidebar(); ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>
