<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Resources';
$patterns['focus']['title'] = 'Resources';
$patterns['header']['mainNavActive'] = 'resources';
$patterns['focus']['type'] = 'search';
$patterns['focus']['search'] = array(
    'placeholder' => 'Search All Resources',
    'url' => '#',
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
                                <a href="#tab-equipment" data-toggle="tab">Equipment</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="tab-content" style="margin-top: 20px">
                        <div class="tab-pane active in" id="tab-buildings">
                            <div class="slat">
                                <div class="slat-message">
                                    <h3>Would you like to add a building?</h3>
                                    <a href="/building-add/" class="btn btn-default">Add Building</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-equipment">
                            <div class="slat">
                                <div class="slat-message">
                                    <h3>Would you like to add equipment?</h3>
                                    <a href="/equipment-add/" class="btn btn-default">Add Equipment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <?php

                    if ( count($_SESSION['data']['buildings']) > 1 ) {

                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'position' => 'left',
                                    'classes' => array('visible-xs'),
                                    'html' => '
                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Add <i class="fa fa-caret-up"></i></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="/building-add/">Building</a>
                                            </li>
                                            <li>
                                                <a href="#modal-building" data-toggle="modal">Room</a>
                                            </li>
                                            <li>
                                                <a href="/equipment-add/">Equipment</a>
                                            </li>
                                        </ul>
                                    ',
                                ),
                                array(
                                    'position' => 'left',
                                    'classes' => array('hidden-xs'),
                                    'html' => '
                                        <a href="/building-add/" class="btn btn-success">Add Building</a>
                                        <a href="#modal-building" class="btn btn-success" data-toggle="modal">Add Room</a>
                                        <a href="/equipment-add/" class="btn btn-success">Add Equipment</a>
                                    ',
                                ),

                            ),
                        );
                        echo createStickybar($stickybar);
                    }

                    elseif ( count($_SESSION['data']['buildings']) === 1 ) {

                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'position' => 'left',
                                    'classes' => array('visible-xs'),
                                    'html' => '
                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Add <i class="fa fa-caret-up"></i></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="/building-add/">Building</a>
                                            </li>
                                            <li>
                                                <a href="/building-add/B0/room-add/">Room</a>
                                            </li>
                                            <li>
                                                <a href="/equipment-add/">Equipment</a>
                                            </li>
                                        </ul>
                                    ',
                                ),
                                array(
                                    'position' => 'left',
                                    'classes' => array('hidden-xs'),
                                    'html' => '
                                        <a href="/building-add/" class="btn btn-success">Add Building</a>
                                        <a href="/building-add/B0/room-add/" class="btn btn-success">Add Room</a>
                                        <a href="/equipment-add/" class="btn btn-success">Add Equipment</a>
                                    ',
                                ),

                            ),
                        );
                        echo createStickybar($stickybar);

                    }

                    else {

                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'position' => 'left',
                                    'classes' => array('visible-xs'),
                                    'html' => '
                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Add <i class="fa fa-caret-up"></i></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="/building-add/">Building</a>
                                            </li>
                                            <li>
                                                <a href="/equipment-add/">Equipment</a>
                                            </li>
                                        </ul>
                                    ',
                                ),
                                array(
                                    'position' => 'left',
                                    'classes' => array('hidden-xs'),
                                    'html' => '
                                        <a href="/building-add/" class="btn btn-success">Add Building</a>
                                        <a href="/equipment-add/" class="btn btn-success">Add Equipment</a>
                                    ',
                                ),

                            ),
                        );
                        echo createStickybar($stickybar);

                    }
                ?>

            </section>
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
                                <?php foreach ( $_SESSION['data']['buildings'] as $key => $value ) { ?>
                                    <option value="<?php $key ?>">
                                        <?php $value['name'] ?>
                                    </option>
                                    <?php } ?>
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
                    location.href = "/building-view/" + $('#building-select').val() + "/room-view/";
                } else {
                    alert("Please choose a building");
                }
            });
        });
        </script>
        <?= createSiteEnd(); ?>

