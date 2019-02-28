<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Chronic Pain Management Class';
$patterns['focus']['title'] = 'Chronic Pain Management Class';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-class-live',
    'type' => 'Live Class',
);
$patterns['focus']['meta_primary'] = array(
    array(
        'label' => 'From Course:',
        'value' => '<a href="course.php" class="meta-value">Chronic Pain Management</a>',
    ),
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Status:',
        'value' => 'Not Registered',
    ),
    array(
        'label' => 'Next Session:',
        'value' => 'Oct 13, 2013 8am ET',
    ),
    array(
        'label' => 'Location:',
        'value' => 'Smith Hall',
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
                        <h2>Sessions</h2>

                        <?php

                        $nested = createSlat(array(
                            'title' => 'Smith Hall',
                            'meta' => array(
                                array(
                                    'label' => 'Address:',
                                    'value' => '1234 Clark Place, Nashville, TN 37208',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'View Map<i class="fa fa-fw fa-map-marker visible-xs"></i>',
                                'link' => '#',
                            ),
                        ));

                        $slat = array(
                            'title' => 'Session 1 of 3',
                            'meta' => array(
                                array(
                                    'label' => 'Location:',
                                    'value' => 'Smith Hall',
                                ),
                                array(
                                    'label' => 'Duration:',
                                    'value' => '2h',
                                ),
                                array(
                                    'label' => 'Date:',
                                    'value' => 'Oct 13, 2013 at 8am',
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
                            'title' => 'Johnson Hall',
                            'meta' => array(
                                array(
                                    'label' => 'Address:',
                                    'value' => '1234 Clark Place, Nashville, TN 37208',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'View Map<i class="fa fa-fw fa-map-marker visible-xs"></i>',
                                'link' => '#',
                            ),
                        ));

                        $slat = array(
                            'title' => 'Session 2 of 3',
                            'meta' => array(
                                array(
                                    'label' => 'Location:',
                                    'value' => 'Johnson Hall',
                                ),
                                array(
                                    'label' => 'Duration:',
                                    'value' => '2h',
                                ),
                                array(
                                    'label' => 'Date:',
                                    'value' => 'Oct 15, 2013 at 8am',
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
                            'title' => 'Johnson Hall',
                            'meta' => array(
                                array(
                                    'label' => 'Address:',
                                    'value' => '1234 Clark Place, Nashville, TN 37208',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'View Map<i class="fa fa-fw fa-map-marker visible-xs"></i>',
                                'link' => '#',
                            ),
                        ));

                        $slat = array(
                            'title' => 'Session 3 of 3',
                            'meta' => array(
                                array(
                                    'label' => 'Location:',
                                    'value' => 'Johnson Hall',
                                ),
                                array(
                                    'label' => 'Duration:',
                                    'value' => '2h',
                                ),
                                array(
                                    'label' => 'Date:',
                                    'value' => 'Oct 17, 2013 at 8am',
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

                    <section class="section">
                        <h2>Notes</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </section>

                    <section class="section">
                        <div class="row">
                            <div class="col-sm-6">
                                <section class="section">
                                    <h2>Instructors</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="#modal-instructor" data-toggle="modal">Joe Smith</a></li>
                                        <li><a href="#modal-instructor" data-toggle="modal">John Smith</a></li>
                                    </ul>
                                </section>
                            </div><!-- /column -->
                            <div class="col-sm-6">
                                <section class="section">
                                    <h2>Size</h2>
                                    <ul class="list-unstyled">
                                        <li>12 Registered</li>
                                        <li>8 Available</li>
                                    </ul>
                                </section>
                            </div><!-- /column -->
                        </div><!-- /row -->
                    </section>

                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>Options</h3>
                        <p>This class may have alternate locations and/or times to work with your schedule.</p>
                        <p><a href="registration-with-selection.php">View Alternate Classes</a></p>
                    </section>
                    <section class="section section-box">
                        <h3>Support</h3>
                        <p>To talk with a customer service representative call 1-800-521-0574</p>
                        <ul class="list-unstyled">
                            <li><a href="#">Visit the help forum</a></li>
                            <li><a href="#">Send us an email</a></li>
                        </ul>
                    </section>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->

        </div><!-- /row -->
    </div><!-- /container -->
</div> <!-- /layout-->

<div id="modal-instructor" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Class Instructor</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h2>Instructor Name</h2>
                </section>
                <section class="section">
                    <h3>This is a group header</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
                <section class="section">
                    <h3>This is a group header</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>
