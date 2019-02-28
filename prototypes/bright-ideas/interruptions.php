<?php


include 'includes/helpers.php';

$options = json_decode('{
    "head": {
        "title" : "Interruption Examples"
    },
    "header":{
        "nav_main_active" : ""
    },
    "focus": {
        "title": "This is an interruption modal example page"
    }
}',true);


include_site_start($options);
//include_site_header($options);
$patterns['header']['mainNavActive'] = 'none';
echo createHeader($patterns['header']);
include_renewed_focus_bar($options);
?>
<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <section class="section section-main section-box" data-equalize="layout-columns">

                    <section class="section">
                        <h2>Interruption Modals</h2>

                        <?php

                        include_slat('{
                            "attributes":[
                                ["class", "slat"]
                            ],
                            "title":{
                                "text":"An interrupt modal with a success message"
                            },
                            "meta":[
                                {
                                    "type": "Interrupt"
                                },
                                {
                                    "label": "Icon:",
                                    "value": "Success"
                                },
                                {
                                    "label": "Duration:",
                                    "value": "User Action Required"
                                }
                            ],
                            "action":{
                                "type":"link",
                                "text":"Try It!",
                                "attributes":[
                                    ["href","#"],
                                    ["id","interrupt-success-example"]
                                ]
                            }
                        }');

                        include_slat('{
                            "attributes":[
                                ["class", "slat"]
                            ],
                            "title":{
                                "text":"An interrupt modal with an info message"
                            },
                            "meta":[
                                {
                                    "type": "Interrupt"
                                },
                                {
                                    "label": "Icon:",
                                    "value": "Info"
                                },
                                {
                                    "label": "Duration:",
                                    "value": "User Action Required"
                                }
                            ],
                            "action":{
                                "type":"link",
                                "text":"Try It!",
                                "attributes":[
                                    ["href","#"],
                                    ["id","interrupt-info-example"]
                                ]
                            }
                        }');

                        include_slat('{
                            "attributes":[
                                ["class", "slat"]
                            ],
                            "title":{
                                "text":"An interrupt modal with a warning message"
                            },
                            "meta":[
                                {
                                    "type": "Interrupt"
                                },
                                {
                                    "label": "Icon:",
                                    "value": "Warning"
                                },
                                {
                                    "label": "Duration:",
                                    "value": "User Action Required"
                                }
                            ],
                            "action":{
                                "type":"link",
                                "text":"Try It!",
                                "attributes":[
                                    ["href","#"],
                                    ["id","interrupt-warning-example"]
                                ]
                            }
                        }');

                        include_slat('{
                            "attributes":[
                                ["class", "slat"]
                            ],
                            "title":{
                                "text":"An interrupt modal with a failure message"
                            },
                            "meta":[
                                {
                                    "type": "Interrupt"
                                },
                                {
                                    "label": "Icon:",
                                    "value": "Failure"
                                },
                                {
                                    "label": "Duration:",
                                    "value": "User Action Required"
                                }
                            ],
                            "action":{
                                "type":"link",
                                "text":"Try It!",
                                "attributes":[
                                    ["href","#"],
                                    ["id","interrupt-failure-example"]
                                ]
                            }
                        }');

                        include_slat('{
                            "attributes":[
                                ["class", "slat"]
                            ],
                            "title":{
                                "text":"An interrupt modal with a generic message"
                            },
                            "meta":[
                                {
                                    "type": "Interrupt"
                                },
                                {
                                    "label": "Icon:",
                                    "value": "None"
                                },
                                {
                                    "label": "Duration:",
                                    "value": "User Action Required"
                                }
                            ],
                            "action":{
                                "type":"link",
                                "text":"Try It!",
                                "attributes":[
                                    ["href","#"],
                                    ["id","interrupt-generic-example"]
                                ]
                            }
                        }');

                        ?>

                    </section>
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php
                    include_sidebar($options);
                    ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div> <!-- /layout -->

<?= 
createFooter($patterns['footer']); 
include_site_scripts($options);
?>
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
<?php
include_site_end($options);
?>
