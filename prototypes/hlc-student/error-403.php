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
                        <h1>You Do Not Have Permission</h1>
                        <p>You do not have permission to access this resource.</p>
                        <!--continue button goes to user's default 'home' tab - most likely To Do page - but may not be. -->
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