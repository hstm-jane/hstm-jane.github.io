<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = '"An Error Occurred';
$patterns['header']['classes'] = array('site-header-min');
$patterns['footer']['classes'] = array('site-footer-min');

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<div class="focus focus-error">
    <div class="container">
        <div class="primary">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-5 col-md-offset-4">
                    <section class="section">
                        <h1>Looks like something&nbsp;is&nbsp;broken</h1>
                        <p>Something unexpected happened.<br>We're looking into it, but in the meantime&hellip;</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="index.php" class="btn btn-default btn-block">View My To-Do list</a>
                            </div>
                            <div class="col-sm-6">
                                <a href="completed.php" class="btn btn-default btn-block">View My Completed</a>
                            </div>
                        </div>
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