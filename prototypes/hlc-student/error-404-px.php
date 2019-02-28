<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = '404';
$patterns['header']['classes'] = array('site-header-min');
$patterns['footer']['classes'] = array('site-footer-min');

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<div class="focus focus-error focus-error-404">
    <div class="container">
        <div class="primary">
            <div class="row">
                <div class="col-sm-7 col-sm-offset-5 col-md-6 col-md-offset-4">
                    <section class="section">
                        <h1>A problem has occurred</h1>
                        <p>Contact Firoj, he probably broke it.</p>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>