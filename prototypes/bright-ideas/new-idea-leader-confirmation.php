<?php

include "includes/helpers.php";


$options = json_decode('{
    "head": {
        "title" : "Welcome to Bright Ideas"
    },
    "header": {
        "nav_main_active" : "new idea Confirmation"
    },
    "focus": {
        "title": "",
        "meta": [

        ]

    }
}',true);

include_site_start($options);
//include_site_header($options);
echo createHeader($patterns['header']);
$focus = array( 'title' => 'New Idea Confirmation', ); echo createFocus($focus);
?>

    <div class="layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="section section-main section-box" data-equalize="layout-columns">
                        <section class="section alert alert-success">
                            <div class="row">
                                <div class="col-md-12 text-center">

                                    <section class="section">
                                        <b>New Bright Idea # Submitted!</b> <br>
                                    </section>

                                    <section>
                                        <p>Thank you for submitting a new bright idea. Your new bright idea will be reviewed and assigned to the
                                        appropriate person for implementation upon acceptance. You can view your new idea in the My Ideas section of this site.</p>
                                    </section>
                                </div>
                            </div>
                        </section>

                        <?php
                            $stickybar = array(
                                'sets' => array(
                                    array(
                                        'html' => '
                                            <a href="#" class="btn btn-default">Email Your Idea</a>
                                            <a href="#" class="btn btn-default">Submit Another Idea</a>
                                            <a href="#" class="btn btn-default">View Ideas</a>
                                        ',
                                    ),
                                ),
                            );
                            echo createStickybar($stickybar);
                        ?>

                    </section>
                    <!-- /section-main -->
                </div>
                <!-- /column -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /layout -->
<?=
createFooter($patterns['footer']);
include_site_scripts($options);
include_site_end($options);
?>