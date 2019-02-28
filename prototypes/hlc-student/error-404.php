<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Catalog';
$patterns['header']['mainNavActive'] = 'catalog';
$patterns['footer']['focus'] = false;

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<div class="focus focus-error focus-error-404">
    <div class="container">
        <div class="primary">
            <div class="row">
                <div class="col-sm-7 col-sm-offset-5 col-md-6 col-md-offset-4">
                    <section class="section">
                        <h1>Something seems to be&nbsp;missing</h1>
                        <p>Sorry, we couldn't find the page you were looking for.</p>
                        <p><a href="index.php" class="btn btn-lg btn-focus">Continue <i class="fa fa-chevron-right"></i></a></p>
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