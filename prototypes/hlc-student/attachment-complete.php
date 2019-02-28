<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'This is the Attachment title';
$patterns['focus']['title'] = 'This is the Attachment title';

$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-attachment',
    'type' => 'Attachment',
);
$patterns['focus']['meta_primary'] = array(
    array(
        'label' => 'From Course:',
        'value' => '<a href="course.php" class="meta-value">Chronic Pain Management</a>',
        'attributes' => array(
            array('class','meta-hidden-xs'),
        )

    ),
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Status:',
        'value' => 'Complete',
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
                <section class="section section-box section-main" data-equalize="layout-columns">
                    <section class="section">
                        <h2>Instructions</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </section>
                    <section class="section">
                        <h2>Attachments</h2>
                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-status')),
                            ),
                            'title' => '<a href="#">This is the Attachment title</a>',
                            'meta' => array(
                                array(
                                    'label' => 'Filetype:',
                                    'value' => 'File',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'Complete',
                                ),
                                array(
                                    'label' => 'Updated:',
                                    'value' => 'May 13, 2013',
                                )
                            ),
                            'action' => array(
                                'type' => 'status-complete',
                            )
                        );
                        echo createSlat($slat);

                        ?>
                    </section>
                </section><!--/section-main -->
            </div><!--/column -->

            <div class="col-md-3">
                    <section class="section section-sidebar" data-equalize="layout-columns">
                        <section class="section section-box">
                            <h3>Support</h3>
                            <p>To talk with a customer service representative call 1-800-521-0574</p>
                            <ul class="unstyled">
                                <li><a href="#">Visit the help forum</a></li>
                                <li><a href="#">Send us an email</a></li>
                            </ul>
                        </section>
                    </section><!--/section-main -->
            </div><!--/column -->

        </div><!--/row -->
    </div><!--/container -->
</div><!--/layout -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>
