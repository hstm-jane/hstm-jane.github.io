<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Portable Account Verified';
$patterns['header']['classes'] = array('site-header-min');
$patterns['focus']['title'] = 'Portable Account Verified';
$patterns['footer']['classes'] = array('site-footer-min');

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout">
    <div class="container">
        <section class="section section-main section-box">
            <div style="padding:20px 0 40px 0"> <!-- temp padding-->
                <h2>Your portable account's email address is successfully confirmed.</h2>
                <p><a href="nrp.php">Log back in to your organization's site to continue</a></p>
            </div>
        </section><!-- /section-main -->
    </div><!-- /container -->
</div> <!-- /layout -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
    <script>
        $(function(){
            // any javascript just for this page
        });
    </script>
<?= createSiteEnd(); ?>
