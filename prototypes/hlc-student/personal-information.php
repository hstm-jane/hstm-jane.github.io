<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My Personal Information';
$patterns['header']['mainNavActive'] = 'profile';
$patterns['focus']['title'] = 'My Personal Information';

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
                        <p class="lead">Updating this information may require contacting your administrator.</p>
                    </section>

                    <section class="section">
                        <form>
                            <div class="row">
                                <div class="col-md-8">
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
                                    <div class="row">
                                        <div class="col-xs-7 col-sm-5">
                                            <div class="form-group">
                                                <label class="control-label">ZIP Code</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-5 col-sm-3">
                                            <div class="form-group">
                                                <label class="control-label">Ext <small>Optional</small></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-7 col-sm-5">
                                            <div class="form-group">
                                                <label class="control-label">Phone <small>Optional</small></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-5 col-sm-3">
                                            <div class="form-group">
                                                <label class="control-label">Ext <small>Optional</small></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-7 col-sm-5">
                                            <div class="form-group">
                                                <label class="control-label">Fax <small>Optional</small></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '
                                                <button type="submit" class="btn btn-success">Save</button>
                                                <button type="button" class="btn btn-default">Cancel</button>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                            <div class="form-modified">Updated: Sep 20, 2013 at 3:27pm by sjuniper</div>
                        </form>
                    </section>
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
      // HealthStream.utilities.validate();
});
</script>
<?= createSiteEnd(); ?>