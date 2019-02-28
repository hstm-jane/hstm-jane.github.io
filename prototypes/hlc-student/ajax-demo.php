<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Ajax Test Page';
$patterns['header']['mainNavActive'] = 'none';
$patterns['focus']['title'] = 'Ajax Test Page';

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
                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-callout','slat-ajax')),
                            ),
                            'title' => '<a href="#">This is an example of an ajax slat for more information</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Class',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'Unregistered',
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => 'Register Now',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Choose',
                                'link' => '#',
                            ),
                            'nested' => array(
                                'hide' => array(
                                    'type' => 'section',
                                    'data' => ''

                                )
                            )
                        );

                        echo createSlat($slat);

                        echo createSlat($slat);

                        echo createSlat($slat);

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
    var loading = '<div class="ajax-loading" style="background:url(/content/images/loading-bars.gif) left center no-repeat;height:20px;"></div><div class="ajax-content"></div>';
    $('.slat-nested .collapse-group').html(loading);
    $('.slat').on('click','.collapse-toggle', function(){
        var $t = $(this),
            $slat = $t.closest('.slat'),
            $el = $t.closest('.slat-nested').find('.collapse-group'),
            content = '<section class="section"><h5>Added</h5><p>Admin Name, Feb 7, 2014 11:54am</p></section><section class="section"><h5>Updated</h5><p>Admin Name, Feb 7, 2014 11:54am</p></section><section class="section"><h5>Comments</h5><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></section><section class="section"><small class="text-muted">Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1</small></section>';
        if ( $slat.find('.ajax-loading').length > 0 && !$el.hasClass('loaded') ) {
            $el.html(loading);
            setTimeout(function(){
                $el.addClass('loaded');
                $el.find('.ajax-content, .ajax-loading').slideUp(function(){
                   $el.find('.ajax-content').html(content).slideDown();
               });
            },1000);
        }

    });
</script>
<?= createSiteEnd(); ?>