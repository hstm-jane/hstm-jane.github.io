<?php

include "includes/helpers/helpers.php";
$patterns['start']['title'] = 'RN: Acute Care Judgment Assessment';
$patterns['focus']['title'] = 'RN: Acute Care Judgment Assessment';
$patterns['header']['classes'] = array('site-header-min');
$patterns['header']['logoLarge'] = './content/images/logo-assess-large.png';
$patterns['footer']['classes'] = array('site-footer-min');

?>
<?= createSiteStart($patterns['start']); ?>
<div class="no-focus">
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
</div>
<div class="layout layout-min">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-main section-box" data-equalize="layout-columns">

                    <section class="section"><h1><?= $patterns['start']['title'] ?></h1></section>

                        <?php

                            $patients = array (
                                'Mr. Farino (705-2)',
                                'Ms. Rivera (700-3)',
                                'Ms. Brooks (700-4)',
                                'Mr. Collins (700-6)',
                                'Mr. Hutchinson (700-7)',
                                'Ms. Corona (700-8)',
                                'Ms. Green (700-0)',
                                'Ms. Myerson (700-10)',
                            );

                            foreach( $patients as $index => $patient ) {
                                if ($index===0) {
                                    $slat = array(
                                        'attributes' => array(
                                            array('class',array('slat')),
                                        ),
                                        'title' => '<a href="/demo-student-assessment-acute-care-judgement-video.php" >'.$patient.'</a>',
                                        'meta' => array(
                                            array(
                                                'type' => 'Clinical Vignette',
                                            ),
                                            array(
                                                'label' => 'Status:',
                                                'value' => 'Not Yet Started',
                                            ),
                                        ),
                                        'action' => array(
                                            'type' => 'action-single-success',
                                            'content' => 'Start',
                                            'link' => '/demo-student-assessment-acute-care-judgement-video.php',
                                        )
                                    );
                                } else {
                                    $slat = array(
                                        'attributes' => array(
                                            array('class',array('slat')),
                                        ),
                                        'title' => $patient,
                                        'meta' => array(
                                            array(
                                                'type' => 'Clinical Vignette',
                                            ),
                                            array(
                                                'label' => 'Status:',
                                                'value' => 'Not Yet Started',
                                            ),
                                        ),
                                        'action' => array(
                                            'type' => 'custom',
                                            'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
                                        )
                                    );
                                }
                                echo createSlat($slat);
                            }

                        ?>
                    </section>
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php include_sidebar() ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->


<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $('.branding a').click(function(e){
            e.preventDefault();
            window.location.href="/demo-start.php";
          });
    });
</script>
<?= createSiteEnd(); ?>