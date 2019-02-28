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
        'value' => 'Registered',
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
                        <h2>Currently Registered</h2>

                        <?php

                        $slat = array(
                            'title' => '<a href="registration-registered-class.php">Chronic Pain Management Class (Section 1)</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Live Class',
                                ),
                                array(
                                    'label' => 'Location:',
                                    'value' => 'Multiple',
                                ),
                                array(
                                    'label' => 'Date: ',
                                    'value' => 'Multiple Meeting Times',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-danger" id="modal-confirm-drop" href="modal-confirm-drop" data-toggle="modal"><i class="fa fa-times visible-xs"></i> Drop</a></div>',
                            )
                        );

                        echo createSlat($slat);

                        ?>

                    </section>

                    <section class="section">
                        <h2>Alternate Classes <small>Other times and locations for the class</small></h2>
                        <?php

                        $slat = array(
                            'title' => '<a href="#modal-class" data-toggle="modal">Chronic Pain Management Class (Section 2)</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Live Class',
                                ),
                                array(
                                    'label' => 'Location:',
                                    'value' => 'Smith Hall',
                                ),
                                array(
                                    'label' => 'Date: ',
                                    'value' => 'Oct 13, 2013, 8:30AM-2:30PM',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
                            )
                        );

                        echo createSlat($slat);

                        $slat = array(
                            'title' => '<a href="#modal-class" data-toggle="modal">Chronic Pain Management Class (Section 3)</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Live Class',
                                ),
                                array(
                                    'label' => 'Location:',
                                    'value' => 'Smith Hall',
                                ),
                                array(
                                    'label' => 'Date: ',
                                    'value' => 'Oct 15, 2013, 8:30AM-2:30PM',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
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
</div> <!-- /layout -->

<!-- Modal -->
<div id="modal-class" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="" class="modal-title">Chronic Pain Management</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h2>Meeting Times <small>All sessions are required</small></h2>

                    <?php

                    $nested = createSlat(array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Smith Hall',
                        'meta' => array(
                            array(
                                'label' => 'Address:',
                                'value' => '1234 Clark Place, Nashville, TN 37208',
                            )
                        ),
                        'action' => array(),
                    ));
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout-wr')),
                        ),
                        'title' => 'Session 1 of 3',
                        'meta' => array(
                            array(
                                'label' => 'Duration:',
                                'value' => '2h',
                            ),
                            array(
                                'label' => 'Date:',
                                'value' => 'Oct 13, 2013, 8AM-10AM',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(),
                        'nested' => array(
                            'show' => array($nested),
                        )
                    );
                    echo createSlat($slat);


                    $nested = createSlat(array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Johnson Hall',
                        'meta' => array(
                            array(
                                'label' => 'Address:',
                                'value' => '1234 Clark Place, Nashville, TN 37208',
                            )
                        ),
                        'action' => array(),
                    ));
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout-wr')),
                        ),
                        'title' => 'Session 2 of 3',
                        'meta' => array(
                            array(
                                'label' => 'Duration:',
                                'value' => '2h',
                            ),
                            array(
                                'label' => 'Date:',
                                'value' => 'Oct 15, 2013, 8AM-10AM',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(),
                        'nested' => array(
                            'show' => array($nested),
                        )
                    );
                    echo createSlat($slat);

                    $nested = createSlat(array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Johnson Hall',
                        'meta' => array(
                            array(
                                'label' => 'Address:',
                                'value' => '1234 Clark Place, Nashville, TN 37208',
                            )
                        ),
                        'action' => array(),
                    ));
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout-wr')),
                        ),
                        'title' => 'Session 3 of 3',
                        'meta' => array(
                            array(
                                'label' => 'Duration:',
                                'value' => '2h',
                            ),
                            array(
                                'label' => 'Date:',
                                'value' => 'Oct 17, 2013, 8AM-10AM',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(),
                        'nested' => array(
                            'show' => array($nested),
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
                <hr>
                <section class="section">
                    <h2>Instructors</h2>
                    <section class="section">
                        <h3>Joe Smith</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </section>
                </section>
                <hr>
                <section class="section">
                    <h2>Size</h2>
                    <ul class="list-unstyled">
                        <li>12 Registered</li>
                        <li>8 Available</li>
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
        $('#modal-confirm-drop').click(function(e){
            e.preventDefault();
            HealthStream.utilities.interrupt({
                type: 'warning',
                title: 'You are about to drop a class',
                text: 'You will still need to attend a class to complete this course.',
                actions: [
                    {
                        type: 'danger',
                        label: 'Yes, drop this class',
                        url: 'registration.php?action=dropped',
                    },
                    {
                        label: 'Cancel'
                    }
                ]
            });
        });
    });
</script>
<?= createSiteEnd(); ?>

