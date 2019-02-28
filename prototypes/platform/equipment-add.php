<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Add Equipment';
$patterns['header']['mainNavActive'] = 'resources';
$patterns['focus']['title'] = 'Add Equipment';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

    <div class="layout layout-min">
        <div class="container">
            <section class="section section-main section-box">
                <form id="equipment-add" class="validate">
                    <input type="hidden" name="action">
                    <section class="section">
                        <h3>Equipment Details</h3>
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
                                    <label class="control-label">Description <small>Optional</small></label>
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Contact Info <small>Optional</small></label>
                                    <textarea class="form-control" name="contact"></textarea>
                                </div>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /row -->
                    </section>
                    <section class="section">
                        <h3>Location</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Building <small>Optional</small></label>
                                    <select class="form-control" name="building" data-select="select2-room-sd-container">
                                        <option value="select2-room-sd-container">Southside Building</option>
                                        <option value="select2-room-sd-container">Northside Building</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Room <small>Optional</small></label>
                                    <select class="form-control" name="room" data-select="select2-room-sd-container">
                                        <option value="select2-room-sd-container">Room 201 South</option>
                                        <option value="select2-room-sd-container">Room 202 South</option>
                                        <option value="select2-room-sd-container">Room 203 South</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /row -->
                    </section>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'classes' => array('visible-xs'),
                                    'html' => '
                                        <div class="btn-group dropup">
                                            <a href="#" class="btn btn-success js-btn-save">Save</a>
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-caret-up"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="#" class="js-btn-save-add">Save and Add Another</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="js-btn-save-clone">Save and Clone</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="#" class="btn btn-default js-btn-back">Cancel</a>
                                    ',
                                ),
                                array(
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

                </form>
            </section>
            <!-- /section-main -->
        </div>
    </div>
    <!-- /layout -->
    <?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>

        <script>
        $(function() {
            var $el = $('form'),
                action = 'equipment-add';
            $('.js-btn-save').click(function(e) {
                e.preventDefault();
                if (validate($el)) {
                    $el.find('input[name="action"]').val(action);
                    $.post('/server.php', $el.serialize(), function(data) {
                        location.href = ((data.building) ? 'building-add/' + data.building : '') + ((data.room) ? '/room-add/' + data.room : '') + '/equipment-add/' + data.id + '/';
                        // location.href = '/' + ((data.building)?'building-add/'+data.building+'/':'') + ((data.room)?'room-add/'+data.room+'/':'') + '?tab=equipment';
                    });
                }
            });
            $('.js-btn-save-add').click(function(e) {
                e.preventDefault();
                if (validate($el)) {
                    $el.find('input[name="action"]').val(action);
                    $.post('/server.php', $el.serialize(), function(data) {
                        location.href = '/' + ((data.building) ? 'building-add/' + data.building + '/' : '') + ((data.room) ? 'room-add/' + data.room + '/' : '') + 'equipment-add/';
                    });
                }
            });
            $('.js-btn-save-clone').click(function(e) {
                e.preventDefault();
                if (validate($el)) {
                    $el.find('input[name="action"]').val(action);
                    $.post('/server.php', $el.serialize(), function(data) {
                        location.href = '/' + ((data.building) ? 'building-add/' + data.building + '/' : '') + ((data.room) ? 'room-add/' + data.room + '/' : '') + 'equipment-add/' + data.id + '/equipment-clone/';
                    });
                }
            });
            $('.js-btn-back').click(function(e) {
                window.history.back()
            });
            $('select[name="building"], select[name="room"]').change(function() {
                var $el = $(this);
                $el.attr('data-select', $el.val());
                getLocationOptions();
            });
            getLocationOptions();
        });
        </script>
        <?= createSiteEnd(); ?>

