<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Resources';
$patterns['focus']['title'] = 'Resources';
$patterns['header']['mainNavActive'] = 'resources';
$patterns['focus']['type'] = 'search';
$patterns['focus']['search'] = array(
    'placeholder' => 'Search All Resources',
    'url' => '/search-my-events.php',
);


?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
    <div class="layout layout-min">
        <div class="container">
                <section class="section section-main section-box">
                    <section class="section">
                        <h2>Browse By Type</h2>
                        <nav class="nav-collapsing-tabs">
                            <a href="#" class="nav-header">
                                <span>Buildings</span><i class="fa fa-chevron-down"></i></a>
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#tab-buildings" data-toggle="tab">Buildings</a>
                                </li>
                                <li>
                                    <a href="#tab-rooms" data-toggle="tab">Rooms</a>
                                </li>
                                <li>
                                    <a href="#tab-equipment" data-toggle="tab">Equipment</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="tab-content" style="margin-top: 20px">
                            <div class="tab-pane active in" id="tab-buildings">
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                            ),
                                            'title' => '<form><a href="/building-view.php">Southside Building</a></form>',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Building',
                                                ),
                                                array(
                                                    'label' => 'Address:',
                                                    'value' => 'Not provided',
                                                )
                                            ),
                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => 'View',
                                                'link' => '/building-view.php',
                                            )
                                        );
                                        echo createSlat($slat);

                                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                            ),
                                            'title' => '<form><a href="/building-view.php">Northside Building</a></form>',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Building',
                                                ),
                                                array(
                                                    'label' => 'Address:',
                                                    'value' => '209 10th Ave S, Nashville, TN 37203',
                                                )
                                            ),
                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => 'View',
                                                'link' => '/building-view.php',
                                            )
                                        );
                                        echo createSlat($slat);

                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-rooms">
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                            ),
                                            'title' => '<form><a href="/room-view.php">Room 203 South</a></form>',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Room',
                                                ),
                                                array(
                                                    'label' => 'Building:',
                                                    'value' => 'Southside Building',
                                                )
                                            ),
                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => 'View',
                                                'link' => '/room-view.php',
                                            )
                                        );
                                        echo createSlat($slat);

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                            ),
                                            'title' => '<form><a href="/room-view.php">Room 202 South</a></form>',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Room',
                                                ),
                                                array(
                                                    'label' => 'Building:',
                                                    'value' => 'Southside Building',
                                                )
                                            ),
                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => 'View',
                                                'link' => '/room-view.php',
                                            )
                                        );
                                        echo createSlat($slat);

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                            ),
                                            'title' => '<form><a href="/room-view.php">Room 201 South</a></form>',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Room',
                                                ),
                                                array(
                                                    'label' => 'Building:',
                                                    'value' => 'Southside Building',
                                                )
                                            ),
                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => 'View',
                                                'link' => '/room-view.php',
                                            )
                                        );
                                        echo createSlat($slat);

                                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                            ),
                                            'title' => '<a href="/room-view.php">Room 103 North</a></form>',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Room',
                                                ),
                                                array(
                                                    'label' => 'Building:',
                                                    'value' => 'Northside Building',
                                                )
                                            ),
                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => 'View',
                                                'link' => '/room-view.php',
                                            )
                                        );
                                        echo createSlat($slat);

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                            ),
                                            'title' => '<form><a href="/room-view.php">Room 102 North</a></form>',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Room',
                                                ),
                                                array(
                                                    'label' => 'Building:',
                                                    'value' => 'Northside Building',
                                                )
                                            ),
                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => 'View',
                                                'link' => '/room-view.php',
                                            )
                                        );
                                        echo createSlat($slat);

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                            ),
                                            'title' => '<form><a href="/room-view.php">Room 101 North</a></form>',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Room',
                                                ),
                                                array(
                                                    'label' => 'Building:',
                                                    'value' => 'Northside Building',
                                                )
                                            ),
                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => 'View',
                                                'link' => '/room-view.php',
                                            )
                                        );
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
                                            'title' => '<form><a href="/equipment-view.php">Medication Cart 2</a></form>',
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
                                                'link' => '/building-view/B1/equipment-view/E5/',
                                            )
                                        );
                                        echo createSlat($slat);

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                            ),
                                            'title' => '<form><a href="/equipment-view.php">Medication Cart 1</a></form>',
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

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                            ),
                                            'title' => '<form><a href="/equipment-view.php">Ventilator 1</a></form>',
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
                                                'link' => '/building-view/B1/room-view/R3/equipment-view/E3/',
                                            )
                                        );
                                        echo createSlat($slat);

                                        ?>
                                    </div>

                                    <div class="col-md-6">
                                        <?php

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                            ),
                                            'title' => '<form><a href="/equipment-view.php">Crash Cart 1</a></form>',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Equipment',
                                                ),
                                                array(
                                                    'label' => 'Building:',
                                                    'value' => 'Northside Building',
                                                )
                                            ),
                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => 'View',
                                                'link' => '/equipment-view.php',
                                            )
                                        );
                                        echo createSlat($slat);

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                            ),
                                            'title' => '<form><a href="/equipment-view.php">IV Pole 1</a></form>',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Equipment',
                                                ),
                                                array(
                                                    'label' => 'Building:',
                                                    'value' => 'Northside Building',
                                                ),
                                                array(
                                                    'label' => 'Room:',
                                                    'value' => 'Room 102 North',
                                                )
                                            ),
                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => 'View',
                                                'link' => '/equipment-view.php',
                                            )
                                        );
                                        echo createSlat($slat);

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                            ),
                                            'title' => '<form><a href="/equipment-view.php">EKG TV</a></form>',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Equipment',
                                                ),
                                                array(
                                                    'label' => 'Building:',
                                                    'value' => 'Northside Building',
                                                ),
                                                array(
                                                    'label' => 'Room:',
                                                    'value' => 'Room 102 North',
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
                                    'position' => 'left',
                                    'classes' => array('visible-xs'),
                                    'html' => '
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Add <i class="fa fa-caret-up"></i></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="/building-add.php">Building</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-building" data-toggle="modal">Room</a>
                                                </li>
                                                <li>
                                                    <a href="/equipment-add.php">Equipment</a>
                                                </li>
                                            </ul>
                                        </div>
                                    ',
                                ),
                                array(
                                    'position' => 'left',
                                    'classes' => array('hidden-xs'),
                                    'html' => '
                                        <a href="/building-add.php" class="btn btn-success">Add Building</a>
                                        <a href="#modal-building" class="btn btn-success" data-toggle="modal">Add Room</a>
                                        <a href="/equipment-add.php" class="btn btn-success">Add Equipment</a>
                                    ',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>
        </div>
    </div>
    <!-- /layout -->
    <!-- Modal -->
    <div id="modal-building" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Add Room</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <div class="form-group">
                            <select class="form-control" id="building-select">
                                <option value="">Choose a Building</option>
                                    <option value="1">
                                       Southside Building
                                    </option>
                                    <option value="2">
                                       Northside Building
                                    </option>
                            </select>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-success js-btn-continue">Continue</a>
                    <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->
    <?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>

        <script>
        $(function() {
            $("#building-select").select2({
                placeholder: "Choose"
            });

            $('.js-btn-continue').click(function(e) {
                e.preventDefault();
                var building = $('#building-select').val();
                if (building) {
                    location.href = "/room-view.php";
                } else {
                    alert("Please choose a building");
                }
            });
        });
        </script>
        <?= createSiteEnd(); ?>

