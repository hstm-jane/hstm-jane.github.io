<?php

include "includes/helpers/helpers.php";

$patterns['header']['mainNavActive'] = false;
$patterns['focus']['title'] = 'This is a receipt modal example pag';

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
                        <a href="#modal-receipt" data-toggle="modal">Show Receipt</a>

                    </section>
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php
                    include_sidebar();
                    ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div> <!-- /layout -->

<style>
    .row-spaced + .row-spaced {
        margin-top: 10px;
    }
</style>

<!-- Modal -->
<div id="modal-receipt" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Receipt</h4>
            </div>
            <div class="modal-body">
                <div class="row row-spaced">
                    <div class="col-xs-4">
                        <h3 style="margin-top:5px">Title</h3>
                    </div>
                    <div class="col-xs-8 text-right">
                        <img style="height: 40px;" alt="HealthStream Logo" src="/content/images/logo-healthstream-large.png">
                    </div>
                </div>
                <div class="row row-spaced">
                    <div class="col-sm-4">
                        <label>Course Name:</label>
                    </div>
                    <div class="col-sm-8">
                        Cash Money Course
                    </div>
                </div>
                <div class="row row-spaced">
                    <div class="col-sm-4">
                        <label>Course Fee:</label>
                    </div>
                    <div class="col-sm-8">
                        US $1.00
                    </div>
                </div>
                <div class="row row-spaced">
                    <div class="col-sm-4">
                        <label>Order Number:</label>
                    </div>
                    <div class="col-sm-8">
                        TRRH6UKZH5
                    </div>
                </div>
                <div class="row row-spaced">
                    <div class="col-sm-4">
                        <label>User ID:</label>
                    </div>
                    <div class="col-sm-8">
                        dmaul
                    </div>
                </div>
                <div class="row row-spaced">
                    <div class="col-sm-4">
                        <label>Cardholder's Name:</label>
                    </div>
                    <div class="col-sm-8">
                        Darth Maul
                    </div>
                </div>
                <div class="row row-spaced">
                    <div class="col-sm-4">
                        <label>Card Type:</label>
                    </div>
                    <div class="col-sm-8">
                        Visa
                    </div>
                </div>
                <div class="row row-spaced">
                    <div class="col-sm-4">
                        <label>Address 1:</label>
                    </div>
                    <div class="col-sm-8">
                        123 Sesame ST
                    </div>
                </div>
                <div class="row row-spaced">
                    <div class="col-sm-4">
                        <label>Address 2:</label>
                    </div>
                    <div class="col-sm-8">

                    </div>
                </div>
                <div class="row row-spaced">
                    <div class="col-sm-4">
                        <label>City:</label>
                    </div>
                    <div class="col-sm-8">
                        Goodlettsville
                    </div>
                </div>
                <div class="row row-spaced">
                    <div class="col-sm-4">
                        <label>State:</label>
                    </div>
                    <div class="col-sm-8">
                        Tennessee
                    </div>
                </div>
                <div class="row row-spaced">
                    <div class="col-sm-4">
                        <label>Country:</label>
                    </div>
                    <div class="col-sm-8">
                        United States
                    </div>
                </div>
                <div class="row row-spaced">
                    <div class="col-sm-4">
                        <label>Zip:</label>
                    </div>
                    <div class="col-sm-8">
                        37072
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success">Print</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>
