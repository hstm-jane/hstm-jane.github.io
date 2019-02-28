<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Report Generation';
$patterns['header']['classes'] = array('site-header-min');
$patterns['footer']['classes'] = array('site-footer-min');

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<div class="focus focus-loading">
    <div class="container">
        <section class="section">
            <h1>Please wait while your records are updating.</h1>
            <p>Your assessment should display within <span class="countdown">5 minutes</span></p>
        </section>
    </div>
</div>
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>
