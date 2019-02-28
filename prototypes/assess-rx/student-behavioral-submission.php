<?php

include "includes/helpers/helpers.php";

$patterns['footer']['classes'] = array('site-footer-min');

$patterns['start']['title'] = 'Feedback - RN: Emergency Skills Self-Assessment';
$patterns['header']['classes'] = array('site-header-min');




$patterns['footer']['classes'] = array('site-footer-min');

?>
    <?= createSiteStart($patterns['start']); ?>
        <div class="no-focus">
            <?= createHeader($patterns['header']); ?>

                <?= createFocus($patterns['focus']); ?>
        </div>
        <style>
            .student-assessment-score {
                font-size: 40px;
            }

            .confirmation-imgp-container {
                text-align: center;
                width:100%;
                
                
            }

            .confirmation-imgp-container img {
                margin: 30px auto 40px;
                width: 30%;
               
            }
        </style>
        <div class="layout layout-min">

            <div class="container">
                <section class="section section-main section-box" data-equalize="layout-columns">
                    <div class="row">

                        <div class="col-md-12" >

                            <h1 class="text-center">Thank you! Your assessment was received.</h1>
                            <div class="confirmation-imgp-container">
                                <img src="./content/images/finished.svg">
                            </div>
                        </div>
                        <!-- /column -->


                    </div>
                    <!-- /row -->
                </section>
                <!-- /section-main -->

            </div>
            <!-- /container -->
        </div>
        <!-- /layout -->



        <?= createFooter($patterns['footer']); ?>
            <?= createPrototypeNav(); ?>
                <?= createSiteScripts(); ?>
                    <script>
                        $(".btn-submit").click(function(e) {
                            e.preventDefault();
                            $(".question input").each(function() {
                                if (!$(this).is(':checked')) {
                                    $(this).closest(".label-warning").show();
                                    $(this).closest(".question").addClass("error");
                                }
                            });
                        });


                        var elementPosition = $('.section-progress:visible').offset();

                        //scroll to chosen filter
                        $(window).scroll(function() {

                            var elementWidth = $('.section-progress:visible').parent().width();

                            if ($(window).scrollTop() > elementPosition.top) {
                                $('.section-progress:visible').css({
                                    'position': 'fixed',
                                    'top': '0',
                                    'width': elementWidth,
                                    'margin-top': '0',
                                    'z-index': '5'
                                });
                                $('form').css({
                                    'margin-top': '145px',
                                    'display': 'block'
                                });
                                $('.stickybar').css('padding-top', '90px');
                            } else {
                                $('.section-progress:visible').css({
                                    'position': 'static',
                                    'width': 'auto'
                                });
                                $('form').css({
                                    'margin-top': 'auto',
                                    'display': 'inline'
                                });

                            }

                            $(window).resize();

                        });
                    </script>
                    <?= createSiteEnd(); ?>