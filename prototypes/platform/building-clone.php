<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Clone Building';
$patterns['header']['mainNavActive'] = 'resources';
$patterns['focus']['title'] = 'Clone Building';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout layout-min">
    <div class="container">
        <section class="section section-main section-box">
            <section class="section">
                <h3>Building Details</h3>
                <form id="building-clone" class="validate">
                    <input type="hidden" name="action">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <select class="form-control" name="status">
                                    <option selected="">Active</option>
                                    <option>Inactive</option>
                                    <option>Retired</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" class="form-control required" name="name" value="Northside Building Copy">
                                <span class="help-block">This is a required field.</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Address 1 <small>Optional</small></label>
                                <input type="text" class="form-control" name="address_1" value="209 10th Ave S">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Address 2 <small>Optional</small></label>
                                <input type="text" class="form-control" name="address_2" value="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">City <small>Optional</small></label>
                                <input type="text" class="form-control" name="city" value="Nashville">
                            </div>
                            <div class="form-group">
                                <label class="control-label">State <small>Optional</small></label>
                                <select class="form-control select2-hidden-accessible" name="state" tabindex="-1" aria-hidden="true">
                                    <option value="">Choose</option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">Dist of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN" selected="">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 540px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-state-2l-container"><span class="select2-selection__rendered" id="select2-state-2l-container" title="Tennessee">Tennessee</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Zip Code <small>Optional</small></label>
                                <input type="text" class="form-control" name="zip" value="37203">
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
                                        <li><a href="#" class="js-btn-save-add">Save and Add Another</a></li>
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
