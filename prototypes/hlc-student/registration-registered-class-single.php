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
    array(
        'label' => 'Status:',
        'value' => 'Oct 13, 2013, 8AM-10AM',
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
                            'title' => 'Session 1 of 1',
                            'meta' => array(
                                array(
                                    'label' => 'Location:',
                                    'value' => 'Smith Hall',
                                ),
                                array(
                                    'label' => 'Date:',
                                    'value' => 'Oct 13, 2013, 8AM-10AM',
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


                    <section class="section">
                        <h2>Instructors</h2>

                        <?php

                        $content = '
                            <section class="section">
                                <h5>Email</h5>
                                <a href="mailto:djd@healthstream.com" class="meta-value">djd@healthstream.com</a>
                            </section>
                            <section class="section">
                                <h5>Address</h5>
                                <address>1234 Acme Road<br>Suite 678<br>Nashville, Tennessee 37203</address>
                            </section>
                            <section class="section">
                                <h5>Phone</h5>
                                <p>(615) 555-5555</p>
                            </section>
                            <section class="section">
                                <h5>Fax</h5>
                                <p>(615) 555-5555</p>
                            </section>
                            <section class="section">
                                <h5>Biography</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </section>
                            <section class="section">
                                <h5>Credentials</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </section>
                        ';

                        $slat = array(
                            'attributes' => array(
                                array('class', array('slat')),
                            ),
                            'title' => 'Dianne J. Demonstration',
                            'meta' => array(),
                            'action' => array(),
                            'nested' => array(
                                'hide' => array($content),
                            )
                        );

                        echo createSlat($slat);

                        $content = '
                            <section class="section">
                                <h5>Email</h5>
                                <a href="mailto:jdd@healthstream.com" class="meta-value">jdd@healthstream.com</a>
                            </section>
                            <section class="section">
                                <h5>Address</h5>
                                <address>1234 Acme Road<br>Suite 678<br>Nashville, Tennessee 37203</address>
                            </section>
                            <section class="section">
                                <h5>Phone</h5>
                                <p>(615) 555-5555</p>
                            </section>
                            <section class="section">
                                <h5>Fax</h5>
                                <p>(615) 555-5555</p>
                            </section>
                            <section class="section">
                                <h5>Biography</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </section>
                            <section class="section">
                                <h5>Credentials</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </section>
                        ';

                        $slat = array(
                            'attributes' => array(
                                array('class', array('slat')),
                            ),
                            'title' => 'Jack D. Demonstration',
                            'meta' => array(),
                            'action' => array(),
                            'nested' => array(
                                'hide' => array($content),
                            )
                        );

                        echo createSlat($slat);

                        ?>

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
                        <p><a href="registration-with-selection.php">View Alternate Classes</a></p>
                        <p><a href="#" class="btn btn-sm btn-danger modal-confirm-drop">Drop Class</a>
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
            </div><!-- /column-->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->

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
<script>
    $(function(){
        $('.modal-confirm-drop').click(function(e){
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
