<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Edit Equipment';
$patterns['header']['mainNavActive'] = 'resources';
$patterns['focus']['title'] = 'Edit Equipment';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Type:',
        'value' => 'Equipment',
    ),
    array(
        'label' => 'Building:',
        'value' => '<a href="/building-view.php" class="meta-value">Southside Building</a>', // Building should be linked, but not this way
    ),
    array(
        'label' => 'Room:',
        'value' => 'Not Provided',
    ),
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

    <div class="layout layout-min">
        <div class="container">
            <section class="section section-main section-box">
                <form id="equipment-edit" class="validate">
                    <input type="hidden" name="action">
                    <input type="hidden" name="id" value="">
                    <section class="section">
                        <h3>Equipment Details</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Status</label>
                                    <select class="form-control" name="status">
                                        <option>Active</option>
                                        <option>Inactive</option>
                                        <option>Retired</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Name</label>
                                    <input type="text" class="form-control required" name="name" value="Medication Cart 2">
                                    <span class="help-block">This is a required field.</span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Description <small>Optional</small></label>
                                    <textarea class="form-control" name="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</textarea>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Contact Info <small>Optional</small></label>
                                    <textarea class="form-control" name="contact">John Smith Equipment Services 1-800-555-5555 jsmith@hca.com
                                    </textarea>
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
                                    <select class="form-control" name="building" data-select="<?php $b['id'] ?>"></select>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Room <small>Optional</small></label>
                                    <select class="form-control" name="room" data-select="<?php $r['id'] ?>"></select>
                                </div>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /row -->
                    </section>
                    <section class="section">
                        <h3>Permissions</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <select class="form-control" name="groups">
                                    <option>Group 1</option>
                                    <option>Group 2</option>
                                    <option>Group 3</option>
                                    <option>Group 4</option>
                                </select>
                            </div>
                        </div>
                        <section class="section">
                            <div class="alert alert-info alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                The default institution permisions have been removed.
                                <a href="#" class="alert-link">Click here to add them back.</a>
                            </div>
                            <div class="collapsable-table">
                                <div class="collapsable-row collapsable-table-header">
                                    <div class="collapsable-cell">Group</div>
                                    <div class="collapsable-cell">Description</div>
                                    <div class="collapsable-cell collapsable-check">Permission 1</div>
                                    <div class="collapsable-cell collapsable-check">Permission 2</div>
                                    <div class="collapsable-cell collapsable-check">Permission 3</div>
                                    <div class="collapsable-cell collapsable-check">Permission 4</div>
                                    <div class="collapsable-cell collapsable-remove">Remove</div>
                                    <div class="collapsable-cell collapsable-options"></div>
                                </div>
                                <div class="collapsable-row collapsable-row-attention">
                                    <div class="collapsable-cell collapsable-name">
                                        <a href="#">Default Group</a>
                                    </div>
                                    <div class="collapsable-cell collapsable-meta">
                                        <span class="collapsable-limit">
                                            <span class="collapsable-cell-label">Description:</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 1</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 2</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 3</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 4</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-remove">
                                        <div class="collapsable-check-label">
                                            <label>Remove</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-options">
                                        <button type="button" class="btn btn-default btn-sm" data-title="Default Group Options">
                                            <span class="collapsable-options-label">Options</span><i class="fa fa-gear collapsable-options-icon"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="collapsable-row collapsable-muted">
                                    <div class="collapsable-cell collapsable-name">
                                        <a href="#">Removed Group 1</a>
                                    </div>
                                    <div class="collapsable-cell collapsable-meta">
                                        <span class="collapsable-limit">
                                            <span class="collapsable-cell-label">Description:</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 1</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox" disabled>
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 2</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox" disabled>
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 3</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox" disabled>
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 4</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox" disabled>
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-remove">
                                        <div class="collapsable-check-label">
                                            <label>Remove</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-options">
                                        <button type="button" class="btn btn-default btn-sm" data-title="Group 1 Options">
                                            <span class="collapsable-options-label">Options</span><i class="fa fa-gear collapsable-options-icon"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="collapsable-row collapsable-muted">
                                    <div class="collapsable-cell collapsable-name">
                                        <a href="#">Removed Group 2</a>
                                    </div>
                                    <div class="collapsable-cell collapsable-meta">
                                        <span class="collapsable-limit">
                                            <span class="collapsable-cell-label">Description:</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 1</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox" disabled>
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 2</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox" disabled>
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 3</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox" disabled>
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 4</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox" disabled>
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-remove">
                                        <div class="collapsable-check-label">
                                            <label>Remove</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-options">
                                        <button type="button" class="btn btn-default btn-sm" data-title="Group 1 Options">
                                            <span class="collapsable-options-label">Options</span><i class="fa fa-gear collapsable-options-icon"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="collapsable-row">
                                    <div class="collapsable-cell collapsable-name">
                                        <a href="#">Group 1</a>
                                    </div>
                                    <div class="collapsable-cell collapsable-meta">
                                        <span class="collapsable-limit">
                                            <span class="collapsable-cell-label">Description:</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 1</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 2</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 3</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 4</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-remove">
                                        <div class="collapsable-check-label">
                                            <label>Remove</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-options">
                                        <button type="button" class="btn btn-default btn-sm" data-title="Group 1 Options">
                                            <span class="collapsable-options-label">Options</span><i class="fa fa-gear collapsable-options-icon"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="collapsable-row">
                                    <div class="collapsable-cell collapsable-name">
                                        <a href="#">Group 2</a>
                                    </div>
                                    <div class="collapsable-cell collapsable-meta">
                                        <span class="collapsable-limit">
                                            <span class="collapsable-cell-label">Description:</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 1</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 2</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 3</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-check">
                                        <div class="collapsable-check-label">
                                            <label>Permission 4</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-remove">
                                        <div class="collapsable-check-label">
                                            <label>Remove</label>
                                        </div>
                                        <div class="collapsable-checkbox">
                                            <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="collapsable-cell collapsable-options">
                                        <button type="button" class="btn btn-default btn-sm" data-title="Group 2 Options">
                                            <span class="collapsable-options-label">Options</span><i class="fa fa-gear collapsable-options-icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </section>
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

                    <div class="form-modified">Last Modified: December 3, 2015 at 1:20pm by sjuniper</div>

                </form>
            </section>
            <!-- /section-main -->
        </div>
    </div>
    <!-- /layout -->
    <?php include PATH_PATTERNS_MODALS . "_modal_permissions.php"; ?>
    <?= createFooter($patterns['footer']); ?>
    <?= createPrototypeNav(); ?>
    <?= createSiteScripts(); ?>

        <script>
        $(function() {
            var $el = $('form'),
                action = 'equipment-update';
            $('.js-btn-save').click(function(e) {
                e.preventDefault();
                if (validate($el)) {
                    $el.find('input[name="action"]').val(action);
                    $.post('/server.php', $el.serialize(), function(data) {
                        location.href = ((data.building) ? '/building-add/' + data.building : '') + ((data.room) ? '/room-add/' + data.room : '') + '/equipment-add/' + data.id + '/';
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

