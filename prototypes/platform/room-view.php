<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Room 203 South';
$patterns['focus']['title'] = 'Room 203 South';
$patterns['header']['mainNavActive'] = 'resources';
$patterns['focus']['meta_secondary'] = array(
     array(
            'label' => 'Type:',
            'value' => 'Room'
            ),
     array(
            'label' => 'Building:',
            'value' => '<a href="/building-view.php" class="meta-value">Southside Building</a>'
            ),
     array(
            'label' => 'OCCUPANCY:',
            'value' => 'Not Provided'
            ),
    );

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

    <div class="layout layout-min">
        <div class="container">
            <section class="section section-box section-main">
                <section class="section">
                    <h2 class="page-header">Description</h2>
                    <p>Not Provided</p>
                </section>
                <section class="section">
                    <h2 class="page-header">In This Room</h2>
                    <div class="slat">
                        <div class="slat-message">
                            <h3>Would you like to add equipment?</h3>
                            <a href="/equipment-add.php" class="btn btn-default">Add Equipment</a>
                        </div>
                    </div>
                </section>

                <?php
                    $stickybar = array(
                        'sets' => array(
                            array(
                                'html' => '
                                    <a href="/room-edit.php" class="btn btn-success">Edit Room</a>
                                    <a href="/building-add.php" class="btn btn-success">Add Equipment</a>
                                ',
                            ),
                        ),
                    );
                    echo createStickybar($stickybar);
                ?>

            </section>
        </div>
    </div>
    <!-- /layout -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>

