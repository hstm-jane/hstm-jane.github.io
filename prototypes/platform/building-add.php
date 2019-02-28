
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5DJQJHL');</script>
<!-- End Google Tag Manager -->
<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Add Building';
$patterns['header']['mainNavActive'] = 'resources';
$patterns['focus']['title'] = 'Add Building';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout layout-min">
    <div class="container">
        <section class="section section-main section-box">
            <section class="section">
                <h3>Building Details</h3>
                <form id="building-add" class="validate">
                    <input type="hidden" name="action">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <select class="form-control" name="status">
                                    <option selected>Active</option>
                                    <option>Inactive</option>
                                    <option>Retired</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" class="form-control required" name="name">
                                <span class="help-block">This is a required field.</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Address 1 <small>Optional</small></label>
                                <input type="text" class="form-control" name="address_1">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Address 2 <small>Optional</small></label>
                                <input type="text" class="form-control" name="address_2">
                            </div>
                            <div class="form-group">
                                <label class="control-label">City <small>Optional</small></label>
                                <input type="text" class="form-control" name="city">
                            </div>
                            <div class="form-group">
                                <label class="control-label">State <small>Optional</small></label>
                                <select class="form-control" name="state">
                                    <?= getStateOptions(""); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Zip Code <small>Optional</small></label>
                                <input type="text" class="form-control" name="zip">
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </form>
            </section>

            <?php
                $stickybar = array(
                    'sets' => array(
                        array(
                            'position' => 'left',
                            'classes' => array('visible-xs'),
                            'html' => '
                                <div class="btn-group dropup">
                                    <a href="#" class="btn btn-success js-btn-save">Save</a>
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-up"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><button class="js-btn-save-add btn">Save and Add Another</button></li>
                                        <li><a href="#" class="js-btn-save-clone">Save and Clone</a></li>
                                    </ul>
                                </div>
                                <a href="#" class="btn btn-default js-btn-back">Cancel</a>
                            ',
                        ),
                        array(
                            'position' => 'left',
                            'classes' => array('hidden-xs'),
                            'html' => '
                                <a href="#" class="btn btn-success js-btn-save">Save</a>
                                <a href="#" class="btn btn-success js-btn-save-add">Save and Add Another</a>
                                <a href="#" class="btn btn-success js-btn-save-clone">Save and Clone</a>
                                <a href="#" class="btn btn-default js-btn-back">Cancel</a>
                            ',
                        ),
                    ),
                );
                echo createStickybar($stickybar);
            ?>

        </section><!-- /section-main -->
    </div>
</div><!-- /layout -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>

    <script>
        $(function(){
            var $el = $('form');
            $('.js-btn-save').click(function(e){
                e.preventDefault();
                if ( validate($el) ) {
                    $el.find('input[name="action"]').val('building-add');
                    $.post('/server.php', $el.serialize(), function(data) {
                        location.href = "/building-add/" + data.id + "/";
                        // location.href = "/";
                    });
                }
            });
            $('.js-btn-save-add').click(function(e){
                e.preventDefault();
                if ( validate($el) ) {
                    $el.find('input[name="action"]').val('building-add');
                    $.post('/server.php', $el.serialize(), function(data) {
                        location.href = "/building-add/";
                    });
                }
            });
            $('.js-btn-save-clone').click(function(e){
                e.preventDefault();
                if ( validate($el) ) {
                    $el.find('input[name="action"]').val('building-add');
                    $.post('/server.php', $el.serialize(), function(data) {
                        location.href = "/building-add/" + data.id + "/building-clone/";
                    });
                }
            });
            $('.js-btn-back').click(function(e){
                window.history.back();
            });
            $('select[name="state"]').select2();
        });
    </script>
<?= createSiteEnd(); ?>
