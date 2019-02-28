<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My Connections';
$patterns['header']['mainNavActive'] = 'connections';
$patterns['focus']['title'] = 'My Connections';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout layout-connections">
    <div class="container">
        <div class="connections-promo">
            <img src="/content/images/Connect2Know.jpg">
        </div>
        <div class="row">
            <div class="col-md-4">
                <section class="section section-box connections-links" data-equalize="home-sections">
                    <h3 class="connection-links-header">What's New <span><i class="fa fa-fw fa-bullhorn"></i></span></h3>
                    <ul class="list-unstyled">
                        <li><a href="#">New Policies from your HR Team</a></li>
                        <li class="link-attention"><a href="#">OSHA News and Updates</a></li>
                        <li><a href="#">Weekly Newsletter</a></li>
                        <li><a href="#">New Releases in the Catalog</a></li>
                        <li><a href="#">CMS and Value-Based Pricing</a></li>
                    </ul>
                </section>
            </div><!-- /column -->
            <div class="col-md-4">
                <section class="section section-box connections-links" data-equalize="home-sections">
                    <h3 class="connection-links-header">Learning Links <span><i class="fa fa-fw fa-graduation-cap"></i></span></h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Pain Management</a></li>
                        <li><a href="#">Lippencott - Glucose Monitoring</a></li>
                        <li class="link-attention"><a href="#">ICD-10 Clinical User Bundle</a></li>
                        <li><a href="#">Fire Safety</a></li>
                    </ul>
                </section>
            </div><!-- /column -->
            <div class="col-md-4">
                <section class="section section-box connections-links" data-equalize="home-sections">
                    <h3 class="connection-links-header">Resources <span><i class="fa fa-fw fa-bookmark"></i></span></h3>
                    <ul class="list-unstyled">
                        <li class="link-attention"><a href="#">Professional Portfolio</a></li>
                        <li class="link-attention"><a href="#">Education Calendar</a></li>
                        <li><a href="#">Leave of Absence Policy</a></li>
                    </ul>
                </section>
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div> <!-- /layout -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>
