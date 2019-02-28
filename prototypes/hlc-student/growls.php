<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Growl Examples';
$patterns['header']['mainNavActive'] = false;
$patterns['focus']['title'] = 'This is an growl-style notification example page';

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
                        <h2>Growls</h2>

                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'A growl-style notification with a success message',
                            'meta' => array(
                                array(
                                    'type' => 'Growl',
                                ),
                                array(
                                    'label' => 'Icon:',
                                    'value' => 'Success',
                                ),
                                array(
                                    'label' => 'Duration:',
                                    'value' => 'User Action Required',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#" id="growl-success-example">Try It! <i class="fa fa-chevron-right visible-xs"></i></a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'A growl-style notification with an info message',
                            'meta' => array(
                                array(
                                    'type' => 'Growl',
                                ),
                                array(
                                    'label' => 'Icon:',
                                    'value' => 'Info',
                                ),
                                array(
                                    'label' => 'Duration:',
                                    'value' => 'User Action Required',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#" id="growl-info-example">Try It! <i class="fa fa-chevron-right visible-xs"></i></a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'A growl-style notification with a warning message',
                            'meta' => array(
                                array(
                                    'type' => 'Growl',
                                ),
                                array(
                                    'label' => 'Icon:',
                                    'value' => 'Warning',
                                ),
                                array(
                                    'label' => 'Duration:',
                                    'value' => 'User Action Required',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#" id="growl-warning-example">Try It! <i class="fa fa-chevron-right visible-xs"></i></a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'A growl-style notification with a failure message',
                            'meta' => array(
                                array(
                                    'type' => 'Growl',
                                ),
                                array(
                                    'label' => 'Icon:',
                                    'value' => 'Failure',
                                ),
                                array(
                                    'label' => 'Duration:',
                                    'value' => 'User Action Required',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#" id="growl-failure-example">Try It! <i class="fa fa-chevron-right visible-xs"></i></a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'A growl-style notification with a generic message',
                            'meta' => array(
                                array(
                                    'type' => 'Growl',
                                ),
                                array(
                                    'label' => 'Icon:',
                                    'value' => 'None',
                                ),
                                array(
                                    'label' => 'Duration:',
                                    'value' => '6 seconds',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#" id="growl-generic-example">Try It! <i class="fa fa-chevron-right visible-xs"></i></a></div>',
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

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
$(document).ready(function(){

    $('#growl-success-example').click(function(e){
        e.preventDefault();
        HealthStream.utilities.growl({
            type: 'success',
            title: 'You\'re registered for a class',
            text: '%3Cdl%20class%3D%22gritter-class%22%3E%0A%3Cdt%3EPain%20Management%20Class%3C%2Fdt%3E%0A%3Cdd%3EJul%2011%2C%202013%20%201pm%20-%203pm%3C%2Fdd%3E%0A%3Cdd%3ESmith%20Hall%3C%2Fdd%3E%0A%3C%2Fdl%3E%0A%3Cp%3E%3Ca%20href%3D%22%23%22%3EView%20class%20details%3C%2Fa%3E%3C%2Fp%3E',
            sticky: true
        });
    });

    $('#growl-info-example').click(function(e){
        e.preventDefault();
        HealthStream.utilities.growl({
            type: 'info',
            title: 'This is the title!',
            text: 'This%20is%20the%20message%20body.%0A%0A%3Cp%3E%3Ca%20href%3D%22http%3A%2F%2Fwww.healthstream.com%22%3EThis%20is%20a%20Link%3C%2Fa%3E%3C%2Fp%3E',
            sticky: true
        });
    });

    $('#growl-warning-example').click(function(e){
        e.preventDefault();
        HealthStream.utilities.growl({
            type: 'warning',
            title: 'This is the title!',
            text: 'This%20is%20the%20message%20body.%0A%0A%3Cp%3E%3Ca%20href%3D%22http%3A%2F%2Fwww.healthstream.com%22%3EThis%20is%20a%20Link%3C%2Fa%3E%3C%2Fp%3E',
            sticky: true
        });
    });

    $('#growl-failure-example').click(function(e){
        e.preventDefault();
        HealthStream.utilities.growl({
            type: 'failure',
            title: 'This is the title!',
            text: 'This%20is%20the%20message%20body.%0A%0A%3Cp%3E%3Ca%20href%3D%22http%3A%2F%2Fwww.healthstream.com%22%3EThis%20is%20a%20Link%3C%2Fa%3E%3C%2Fp%3E',
            sticky: true
        });
    });

    $('#growl-generic-example').click(function(e){
        e.preventDefault();
        HealthStream.utilities.growl({
            title: 'This is the title!',
            text: 'This%20is%20the%20message%20body.%20This%20growl%20will%20remove%20itself%20in%206%20seconds.'
        });
    });

});
</script>
<?= createSiteEnd(); ?>
