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

$video = (!empty($_GET['video']))?$_GET['video']:'uxiywy5fks';

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

                        <style>
                            .wistia__templates {
                                display: none;
                            }
                            .wistia__loading,
                            .wistia__error {
                                text-align: center;
                                padding: 10%;
                            }
                        </style>

                        <div class="wistia">
                            <div class="wistia__embed"></div>
                            <div class="wistia__templates">
                                <div class="wistia__loading">
                                    <h2>Loading</h2>
                                    <img src="/content/images/loading-spinner.gif">
                                </div>
                                <div class="wistia__error">
                                    <h2>There was a problem loading the video</h2>
                                    <p>Please try again later. If the problem persists, please contant your support representative.</p>
                                </div>
                            </div>
                        </div>

                        <!-- generic wistia embed code (responsive size / standard embed) w/ video id -->
                        <!-- <script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js" async></script>
                        <div class="wistia_responsive_padding" style="padding:56.25% 0 28px 0;position:relative;">
                            <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                                <div class="wistia_embed wistia_async_uxiywy5fks seo=false videoFoam=true" style="height:100%;width:100%">&nbsp;</div>
                            </div>
                        </div> -->
                        <!-- /wistia embed -->

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
</div><!-- /layout-->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    function getWistiaVideo(id) {
        var url = 'http://fast.wistia.net/oembed?url=https%3A%2F%2Fsupport.wistia.com%2Fmedias%2F' + id + '&embedType=async&videoFoam=true';
        var $embed = $('.wistia__embed');
        var loading = $('.wistia__loading').clone();
        var error = $('.wistia__error').clone();

        $embed.html(loading);
        $.getJSON( url, function( data ) {
            $embed.html(data.html);
        }).fail(function() {
            $embed.html(error);
        });
    }

    $(function(){
        getWistiaVideo('<?= $video ?>');
    })
</script>

<?= createSiteEnd(); ?>
