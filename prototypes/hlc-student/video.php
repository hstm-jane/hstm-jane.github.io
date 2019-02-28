<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'This is the Video title';
$patterns['focus']['title'] = 'This is the Video title';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-video',
    'type' => 'Video',
);
$patterns['focus']['meta_primary'] = array(
    array(
        'label' => 'From Course:',
        'value' => '<a href="course.php" class="meta-value">Chronic Pain Management</a>',
    ),
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Status:',
        'value' => 'In Progress',
    ),
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-box section-main" data-equalize="layout-columns">
                    <section class="section">
                        <div id="wistia_pkjr5xydyl" class="wistia_embed"></div>
                    </section>
                    <script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js"></script>
                    <script>
                        wistiaEmbed = Wistia.embed("pkjr5xydyl", {
                            videoFoam: true,
                            playerPreference: 'auto'
                        });
                    </script>
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>From Course</h3>
                        <p><a href="#">This is the course name</a></p>
                    </section>
                    <section class="section section-box">
                        <h3>Support</h3>
                        <p>To talk with a customer service representative call 1-800-521-0574</p>
                        <ul class="list-unstyled">
                            <li><a href="#">Visit the help forum</a></li>
                            <li><a href="#">Send us an email</a></li>
                        </ul>
                    </section>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout-->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>
