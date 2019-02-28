<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Select Affiliation';
$patterns['header']['mainNavActive'] = false;
$patterns['focus']['title'] = 'Select Affiliation';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
    <div class="layout layout-min">
        <div class="container">
            <section class="section section-box section-main">
                <section class="slat-button-container">
                    <section class="section">

                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('data-filter-category',array('0')),
                            ),
                            'title' => '<a href="/search-my-events.php">GEN01 - ACME General Medical Center</a>',
                            'meta' => array(),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Continue',
                                'link' => '/search-my-events.php',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('data-filter-category',array('0')),
                            ),
                            'title' => '<a href="/search-my-events.php">Jupiter Healthcare</a>',
                            'meta' => array(),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Continue',
                                'link' => '/search-my-events.php',
                            )
                        );
                        echo createSlat($slat);

                        ?>

                    </section>
                </section>
            </section>
        </div>
    </div>
    <!-- /layout -->
    <!-- Modal -->
    <div id="modal-example" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-success">Success</a>
                    <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>

