<?php

include "includes/helpers/helpers.php";

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
        'value' => 'Registered',
    ),
    array(
        'label' => 'Next Session:',
        'value' => 'Tue Oct 13, 2013, 8:00am - 10:00am ET',
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

                        $slat = array(
                            'title' => 'Session 1 of 2',
                            'meta' => array(
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
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Add to Calendar <i class="fa fa-fw fa-calendar visible-xs"></i>',
                                'link' => '#',
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
                        <p><a href="registration-virtual-with-selection.php">View Alternate Classes</a></p>
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
                        url: 'registration-virtual.php?action=dropped',
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
