<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Southside';
$patterns['header']['mainNavActive'] = 'resources';
$patterns['focus']['title'] = 'Southside';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Type:',
        'value' => 'Building',
    ),
    array(
        'label' => 'Address:',
        'value' => 'Not Provided',
    ),
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

    <div class="layout layout-min show-attributes">
        <div class="container">
            <section class="section section-main section-box">
                <section class="section">
                    <h2>In This Building</h2>
                    <nav class="nav-collapsing-tabs">
                        <a href="#" class="nav-header">
                            <span>Rooms</span><i class="fa fa-chevron-down"></i></a>
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a href="#tab-rooms" data-toggle="tab">Rooms</a>
                            </li>
                            <li>
                                <a href="#tab-equipment" data-toggle="tab">Equipment</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="tab-content" style="margin-top:20px;">
                        <div class="tab-pane active in" id="tab-rooms">
                            <div class="row">
                                <div class="col-md-6">

                                    <?php

                                    $slat = array(
                                        'attributes' => array(
                                            array('class',array('slat')),
                                        ),
                                        'title' => '<a href="/room-view.php">Room 203 South</a>',
                                        'meta' => array(
                                            array(
                                                'type' => 'Room',
                                            ),
                                            array(
                                                'label' => 'Occupancy:',
                                                'value' => 'Not Provided',
                                            )
                                        ),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'View',
                                            'link' => '/room-view.php',
                                        )
                                    );
                                    echo createSlat($slat);

                                    $slat['title'] = '<a href="/room-view.php">Room 202 South</a>';
                                    echo createSlat($slat);

                                    ?>

                                </div>
                                <div class="col-md-6">

                                    <?php

                                    $slat['title'] = '<a href="/room-view.php">Room 201 South</a>';
                                    echo createSlat($slat);

                                    ?>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-equipment">
                            <div class="row">
                                <div class="col-md-6">

                                    <?php

                                    $slat = array(
                                        'attributes' => array(
                                            array('class',array('slat')),
                                        ),
                                        'title' => '<a href="/equipment-view.php">Medication Cart 2</a>',
                                        'meta' => array(
                                            array(
                                                'type' => 'Equipment',
                                            ),
                                            array(
                                                'label' => 'Building:',
                                                'value' => 'Southside Building',
                                            )
                                        ),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'View',
                                            'link' => '/equipment-view.php',
                                        )
                                    );
                                    echo createSlat($slat);

                                    $slat['title'] = '<a href="/equipment-view.php">Medication Cart 1</a>';
                                    echo createSlat($slat);

                                    ?>

                                </div>
                                <div class="col-md-6">

                                    <?php

                                    $slat = array(
                                        'attributes' => array(
                                            array('class',array('slat')),
                                        ),
                                        'title' => '<a href="/equipment-view.php">Ventilator 1</a>',
                                        'meta' => array(
                                            array(
                                                'type' => 'Equipment',
                                            ),
                                            array(
                                                'label' => 'Building:',
                                                'value' => 'Southside Building',
                                            ),
                                            array(
                                                'label' => 'Room:',
                                                'value' => 'Room 201 South',
                                            )

                                        ),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'View',
                                            'link' => '/equipment-view.php',
                                        )
                                    );
                                    echo createSlat($slat);

                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <?php
                    $stickybar = array(
                        'sets' => array(
                            array(
                                'html' => '
                                    <a href="/building-edit.php" class="btn btn-success">Edit Building</a>
                                    <a href="/room-add.php" class="btn btn-success">Add Room</a>
                                    <a href="/equipment-add.php" class="btn btn-success">Add Equipment</a>
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

