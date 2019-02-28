<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Interruption Examples';
$patterns['header']['mainNavActive'] = false;
$patterns['focus']['title'] = 'This is an interruption modal example page';

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
                        <h2>Interruption Modals</h2>

                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'An interrupt modal with a success message',
                            'meta' => array(
                                array(
                                    'type' => 'Interrupt',
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
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#" id="interrupt-success-example">Try It! <i class="fa fa-chevron-right visible-xs"></i></a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'An interrupt modal with an info message',
                            'meta' => array(
                                array(
                                    'type' => 'Interrupt',
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
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#" id="interrupt-info-example">Try It! <i class="fa fa-chevron-right visible-xs"></i></a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'An interrupt modal with a warning message',
                            'meta' => array(
                                array(
                                    'type' => 'Interrupt',
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
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#" id="interrupt-warning-example">Try It! <i class="fa fa-chevron-right visible-xs"></i></a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'An interrupt modal with a failure message',
                            'meta' => array(
                                array(
                                    'type' => 'Interrupt',
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
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#" id="interrupt-failure-example">Try It! <i class="fa fa-chevron-right visible-xs"></i></a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'An interrupt modal with a generic message',
                            'meta' => array(
                                array(
                                    'type' => 'Interrupt',
                                ),
                                array(
                                    'label' => 'Icon:',
                                    'value' => 'None',
                                ),
                                array(
                                    'label' => 'Duration:',
                                    'value' => 'User Action Required',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#" id="interrupt-generic-example">Try It! <i class="fa fa-chevron-right visible-xs"></i></a></div>',
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

    $('#interrupt-success-example').click(function(e){
        e.preventDefault();
        HealthStream.utilities.interrupt({
            type: 'success',
            title: 'Congratulations!',
            text: 'This is the interrupt text. It can hold N characters in length and wrap to multiple lines.',
            actions: [
            {
                type: 'success',
                label: 'Do This'
            },
            {
                label: 'Do That'
            }
            ]
        });
    });

    $('#interrupt-info-example').click(function(e){
        e.preventDefault();
        HealthStream.utilities.interrupt({
            type: 'info',
            title: 'We thought you should know...',
            text: 'This is the interrupt text. It can hold N characters in length and wrap to multiple lines.',
            actions: [
            {
                label: 'Thanks!'
            }
            ]
        });

    });

    $('#interrupt-warning-example').click(function(e){
        e.preventDefault();
        HealthStream.utilities.interrupt({
            type: 'warning',
            title: 'Hold up, you shouldn\'t do that.',
            text: 'This is the interrupt text. It can hold N characters in length and wrap to multiple lines.',
            actions: [
            {
                label: 'Go Back'
            }
            ]
        });
    });

    $('#interrupt-failure-example').click(function(e){
        e.preventDefault();
        HealthStream.utilities.interrupt({
            type: 'failure',
            title: 'There seems to be a problem.',
            text: 'This is the interrupt text. It can hold N characters in length and wrap to multiple lines.',
            actions: [
            {
                label: 'Check Google'
            }
            ]
        });
    });

    $('#interrupt-generic-example').click(function(e){
        e.preventDefault();
        HealthStream.utilities.interrupt({
            title: 'A standard interrupt',
            text: 'This is the interrupt text. It can hold N characters in length and wrap to multiple lines.',
            actions: [
            {
                type: 'success',
                id: 'myId1',
                label: 'Success'
            },
            {
                type: 'danger',
                id: 'myId2',
                label: 'Danger'
            },
            {
                label: 'Another Button'
            },
            {
                label: 'Another Button'
            },
            {
                label: 'Another Button'
            },
            {
                url: 'http://www.healthstream.com',
                label: 'Visit HealthStream'
            }
            ]
        });
        $('#myId1').click(function(){
            alert('You clicked the first button');
        });
        $('#myId2').click(function(){
            alert('You clicked the second button');
        });
    });

});
</script>
<?= createSiteEnd(); ?>
