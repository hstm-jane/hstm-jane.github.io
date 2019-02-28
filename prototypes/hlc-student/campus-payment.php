<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Campus Checkout';
$patterns['header']['mainNavActive'] = 'catalog';
$patterns['focus']['title'] = 'Campus Checkout';

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
                        <h2>Order Details</h2>
                        <p><strong>Course:</strong> <a href="campus-course-buy.php">Brain Surgery for Dummies - Version 4</a></p>
                        <ul class="list-pricing">
                            <li>Course Fee: <span>$4.99</span></li>
                            <!--<li>No-Show Fee: <span>$1.00</span></li>
                            <li>Cancellation Fee: <span>$1.00</span></li>-->
                        </ul>
                    </section>
                    <hr>
                    <section class="section">
                        <h2>Payment Information</h2>
                        <p>HealthStream does not store your personal payment information.</p>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">Cardholder's Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Card Type</label>
                                    <label class="label-checkbox">
                                        <input type="radio" name="options" autocomplete="off"> Visa
                                    </label>
                                    <label class="label-checkbox">
                                        <input type="radio" name="options" autocomplete="off"> Mastercard
                                    </label>
                                    <label class="label-checkbox">
                                        <input type="radio" name="options" autocomplete="off"> AmEx
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Card Number</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Card Expiration</label>
                                    <input type="text" class="form-control form-control-inline" size="3" max-length="2" placeholder="mm"> / <input type="text" class="form-control form-control-inline" size="4" max-length="4" placeholder="yyyy">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">CCV Verification Code</label>
                                    <input type="text" class="form-control form-control-inline" size="5" max-length="4">
                                </div>
                            </div>
                        </div>
                    </section>
                    <hr>
                    <section class="section">
                        <h2>Billing Information</h2>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Address 1</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Address 2 <small>Optional</small></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">City</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">State</label>
                                    <select class="form-control">
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Country</label>
                                    <select id="inputCountry" class="form-control">
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Australia</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">ZIP Code + EXT</label>
                                    <input type="text" class="form-control form-control-inline" size="5">
                                    <input type="text" class="form-control form-control-inline" size="4">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Email Address <small>Optional, for sending a receipt</small></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </section>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'html' => '
                                        <a href="#" type="submit" class="btn btn-success" id="interrupt-review-payment">Purchase Now</a>
                                        <a href="course-enroll.php" class="btn btn-default">Cancel</a>
                                    ',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>

                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php include_sidebar() ?>
                </section> <!-- /section-sidebar -->
            </div><!-- /column -->

        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
$(function(){
    $('#interrupt-review-payment').click(function(e){
        e.preventDefault();
        HealthStream.utilities.interrupt({
            // type: 'failure',
            title: 'Confirm Payment',
            text: 'You are about to submit a payment of $[total amount] using your [card type] ending in [last 4 digits].',
            actions: [
                {
                    type: 'success',
                    label: 'Submit Order',
                    url: 'course.php'
                },
                {
                    label: 'Change Payment'
                },
                {
                    label: 'Cancel',
                    url: 'course-enroll.php'
                }
            ]
        });
    });
});
</script>
<?= createSiteEnd(); ?>


