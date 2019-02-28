<?php

include "includes/helpers.php";

$options = json_decode('{
    "head": {
        "title" : "Welcome to Bright Ideas"
    },
    "header": {
        "nav_main_active" : "Affiliation"
    },
    "focus": {
        "title": "Affiliation",
        "action": {

        },
        "meta": [

        ]
    }
}',true);
include_site_start($options);
?>
<?php $patterns['header']['mainNavActive'] = 'none'; ?>
<?php echo createHeader($patterns['header']); ?>
<?php $focus = array( 'title' => 'Affiliation', ); echo createFocus($focus); ?>
    <div class="layout">
        <div class="container">
            <section class="section section-box section-main">
                <section class="slat-button-container">
                    <section class="section">
                         <?php

                            $slat = array(
                                'title' => ' <a href="./activity.php">GEN01 - ACME General Medical Center</a>',
                                'meta' => array(
                                    
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Continue',
                                    'link' => './activity.php',
                                )
                            );

                            echo createSlat($slat);

                             $slat = array(
                                'title' => ' <a href="./activity.php">CORP - ACME HealthCare Enterprise</a>',
                                'meta' => array(
                                  
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Continue',
                                    'link' => './activity.php',
                                )
                            );

                            echo createSlat($slat);

                        ?>
                    </section>
                </section>
            </section>
        </div>
        <!-- /container -->
    </div>
    <!-- /layout -->
<?= 
createFooter($patterns['footer']); 
include_site_scripts($options);
include_site_end($options);
?>