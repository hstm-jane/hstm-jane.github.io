<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Mild Asthma';
$patterns['focus']['title'] = 'Mild Asthma';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-sim',
    'type' => 'SIM Session',
);
$patterns['focus']['meta_primary'] = array(
    array(
        'label' => 'From SIM Event:',
        'value' => '<a href="sim-event.php" class="meta-value">Mild Asthma</a>',
    ),
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Status:',
        'value' => 'Registered',
    ),
    array(
        'label' => 'Next Session:',
        'value' => 'Oct 15, 2013 8:00am - 10:00am ET',
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
                        <h2>Meeting Times</h2>

                        <?php

                        $nested = createSlat(array(
                            'attributes' => array(
                                array('class','slat','slat-nometa'),
                            ),
                            'title' => 'Asthma Scenario 1',
                            'meta' => array(),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a href="#modal-debrief" data-toggle="modal" class="btn btn-default btn-sm">View Debrief <i class="fa fa-fw fa-chevron-right visible-xs"></i></a></div>',
                            )
                        ));
                        $nested1 = createSlat(array(
                            'attributes' => array(
                                array('class','slat','slat-nometa'),
                            ),
                            'title' => 'Asthma Scenario 2',
                            'meta' => array(),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a href="#modal-debrief" data-toggle="modal" class="btn btn-default btn-sm">View Debrief <i class="fa fa-fw fa-chevron-right visible-xs"></i></a></div>',
                            )
                        ));
                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-callout','slat-status')),
                            ),
                            'title' => 'Session 1 of 3',
                            'meta' => array(
                                array(
                                    'label' => 'Location:',
                                    'value' => 'Smith Hall',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'Passed',
                                ),
                                array(
                                    'label' => 'Date: ',
                                    'value' => 'Oct 13, 2013, 8AM-10AM',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'status-complete',
                            ),
                            'nested' => array(
                                'show' => array($nested, $nested1)
                            ),
                        );
                        echo createSlat($slat);

                        $nested = createSlat(array(
                            'attributes' => array(
                                array('class','slat','slat-nometa'),
                            ),
                            'title' => 'Asthma Scenario 3',
                            'meta' => array(),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a href="#modal-debrief" data-toggle="modal" class="btn btn-default btn-sm">View Debrief <i class="fa fa-fw fa-chevron-right visible-xs"></i></a></div>',
                            )
                        ));
                        $nested1 = createSlat(array(
                            'attributes' => array(
                                array('class','slat','slat-nometa'),
                            ),
                            'title' => 'Asthma Scenario 4',
                            'meta' => array(),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a href="#modal-debrief" data-toggle="modal" class="btn btn-default btn-sm">View Debrief <i class="fa fa-fw fa-chevron-right visible-xs"></i></a></div>',
                            )
                        ));
                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-callout','slat-status')),
                            ),
                            'title' => 'Session 2 of 3',
                            'meta' => array(
                                array(
                                    'label' => 'Location:',
                                    'value' => 'Smith Hall',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'Failed',
                                ),
                                array(
                                    'label' => 'Date: ',
                                    'value' => 'Oct 14, 2013, 8AM-10AM',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'status-fail',
                            ),
                            'nested' => array(
                                'show' => array($nested, $nested1)
                            ),
                        );
                        echo createSlat($slat);

                        $nested = createSlat(array(
                            'attributes' => array(
                                array('class','slat'),
                            ),
                            'title' => 'Smith Hall',
                            'meta' => array(
                                array(
                                    'label' => 'Address:',
                                    'value' => '1234 Clark Place, Nashville, TN 37208',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'View Map <i class="fa fa-fw fa-map-marker visible-xs"></i>',
                                'link' => '#',
                            ),
                        ));
                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-callout','slat-status')),
                            ),
                            'title' => 'Session 3 of 3',
                            'meta' => array(
                                array(
                                    'label' => 'Location:',
                                    'value' => 'Smith Hall',
                                ),
                                array(
                                    'label' => 'Date: ',
                                    'value' => 'Oct 15, 2013, 8AM-10AM',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Add to Calendar <i class="fa fa-fw fa-calendar visible-xs"></i>',
                                'link' => '#',
                            ),
                            'nested' => array(
                                'show' => array($nested)
                            ),
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
                        <h2>Instructors</h2>
                        <section class="section">
                            <h3>Joe Smith</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </section>
                    </section>

                    <section class="section">
                        <h2>Size</h2>
                        <ul class="list-unstyled">
                            <li>12 Registered</li>
                            <li>8 Available</li>
                        </ul>
                    </section>


                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>Options</h3>
                        <p><a href="sim-session-registration-with-selection.php">View Alternate Sessions</a></p>
                        <p><a href="#" class="btn btn-sm btn-danger modal-confirm-drop">Drop Session</a>
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
</div> <!-- /layout -->

<!-- Modal -->
<div id="modal-debrief" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Debrief Files</h4>
            </div>
            <div class="modal-body">

                <?php

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal')),
                    ),
                    'title' => 'This-is-an-incredibly-long-non-breaking-file-name-that-makes-designers-weep.pdf',
                    'meta' => array(
                        array()
                    ),
                    'action' => array(
                        'type' => 'action-single',
                        'content' => 'View Debrief <i class="fa fa-download"></i>',
                        'link' => '#',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal')),
                    ),
                    'title' => 'This-is-another-incredibly-long-non-breaking-file-name-that-makes-designers-weep-and-causes-defects.pdf',
                    'meta' => array(
                        array()
                    ),
                    'action' => array(
                        'type' => 'action-single',
                        'content' => 'View Debrief <i class="fa fa-download"></i>',
                        'link' => '#',
                    )
                );
                echo createSlat($slat);

                ?>
            </div>
            <div class="modal-footer">
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
        $('.modal-confirm-drop').click(function(e){
            e.preventDefault();
            HealthStream.utilities.interrupt({
                type: 'warning',
                title: 'You are about to drop a session',
                text: 'You will still need to attend a session to complete this event.',
                actions: [
                    {
                        type: 'danger',
                        label: 'Yes, drop this session',
                        url: 'sim-session.php?action=dropped',
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

