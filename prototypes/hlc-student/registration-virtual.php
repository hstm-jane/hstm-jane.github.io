<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'Chronic Pain Management Virtual Class';
$patterns['focus']['title'] = 'Chronic Pain Management Virtual Class';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-class-virtual',
    'type' => 'Virtual Class',
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
                        <h2>Choose a Class <small>Time and location options for the class</small></h2>

                        <?php

                        $slat = array(
                            'title' => '<a href="#modal-class" data-toggle="modal">Chronic Pain Management Class (Section 1)</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Virtual Class',
                                ),
                                array(
                                    'label' => 'Location:',
                                    'value' => 'Online',
                                ),
                                array(
                                    'label' => 'Date: ',
                                    'value' => 'Previously Recorded',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single-success',
                                'content' => 'Watch<i class="fa fa-plus visible-xs"></i>',
                                'link' => 'registration-virtual-registered-class-single.php',
                            )
                        );

                        echo createSlat($slat);

                        $slat = array(
                            'title' => '<a href="#modal-class" data-toggle="modal">Chronic Pain Management Class (Section 2)</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Virtual Class',
                                ),
                                array(
                                    'label' => 'Location:',
                                    'value' => 'Online',
                                ),
                                array(
                                    'label' => 'Date: ',
                                    'value' => 'Oct 13, 2013, 8:00AM-10:00AM',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-success" href="#modal-email" data-toggle="modal"><i class="fa fa-plus visible-xs"></i> Register</a></div>',
                            )
                        );

                        echo createSlat($slat);

                        $slat = array(
                            'title' => '<a href="#modal-class" data-toggle="modal">Chronic Pain Management Class (Section 3)</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Virtual Class',
                                ),
                                array(
                                    'label' => 'Location:',
                                    'value' => 'Online, North Tower: Westmoreland Hall',
                                ),
                                array(
                                    'label' => 'Date: ',
                                    'value' => 'Oct 15, 2013, 8:00AM-10:00AM',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-success" href="#modal-email-admin" data-toggle="modal"><i class="fa fa-plus visible-xs"></i> Register</a></div>',
                            )
                        );

                        echo createSlat($slat);

                        ?>

                    </section>

                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php
                    include_sidebar();
                    ?>
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
                <h4 id="" class="modal-title">Chronic Pain Management Virtual Class</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h2>Meeting Times <small>All sessions are required</small></h2>

                    <?php

                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout-wr')),
                        ),
                        'title' => 'Session 1 of 1',
                        'meta' => array(
                            array(
                                'label' => 'Duration:',
                                'value' => '2h',
                            ),
                            array(
                                'label' => 'Location:',
                                'value' => 'Online',
                            ),
                            array(
                                'label' => 'Date:',
                                'value' => 'Oct 13, 2013, 8AM-10AM',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array()
                    );
                    echo createSlat($slat);

                    ?>
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
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-email" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="validate">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Email Address Required</h4>
                </div>
                <div class="modal-body">
                    <p>Your email address is required to participate in a virtual class. Please enter it below and click save.</p>
                    <div class="form-group">
                        <label class="control-label">Email Address</label>
                        <input type="text" class="form-control">
                        <span class="help-block">Please provide a valid email address.</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="registration-virtual-registered-class-single.php" class="btn btn-success">Save</a>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-email-admin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="validate">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Email Address Required</h4>
                </div>
                <div class="modal-body">
                    <p>Your email address is required to participate in a virtual class. Your institution requires you contact your HealthStream administrator to add your email address.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?php if ( $action === 'dropped' ) { ?>
<script>
    $(function(){
        HealthStream.utilities.growl({
            type: 'success',
            title: 'You dropped the class',
            text: '%3Cdl%20class%3D%22gritter-class%22%3E%0A%3Cdt%3ECronic%20Pain%20Management%20Virtual%20Class%3C%2Fdt%3E%0A%3Cdd%3EOct%2013%2C%202013%20at%208am%3C%2Fdd%3E%0A%3Cdd%3ESmith%20Hall%3C%2Fdd%3E%0A%3C%2Fdl%3E'
        });
    });
</script>
<?php } ?>
<?= createSiteEnd(); ?>