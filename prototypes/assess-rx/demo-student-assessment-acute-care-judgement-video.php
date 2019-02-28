<?php

include "includes/helpers/helpers.php";
$patterns['start']['title'] = 'Mr. Farino (705-2)';
$patterns['focus']['title'] = 'Mr. Farino (705-2)';
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

                    <p>Press play to watch the video below, then click the Continue button. </p>

                    <section class="section">
                        <video controls="controls" width="100%" name="Farino" id="video" src="https://clients.sturdy.io/healthstream/hstm-assess-video/705_02_11.mp4" poster="/content/images/assessment/Farino.png"></video>
                        <!-- <a href="http://pmsi-pbds.com/MNavigator/pvs.aspx?FName=smil/705_02_11.smil" target="_blank"><img src="/content/images/assessment/Farino.png" width="100%"></a> -->
                    </section>

                    <section class="section">
                        <div class="form-group">
                            <a href="/demo-student-assessment-acute-care-judgement-1.php" class="btn btn-success">Continue</a>
                        </div>
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
        $("#video").click(function(e){
            // handle click if not Firefox (Firefox supports this feature natively)
            if (typeof InstallTrigger === 'undefined') {
                // get click position
                var clickY = (e.pageY - $(this).offset().top);
                var height = parseFloat( $(this).height() );
                // avoids interference with controls
                if (clickY > 0.82*height) return;
                // toggles play / pause
                this.paused ? this.play() : this.pause();
            }
        });
    });
</script>
<?= createSiteEnd(); ?>