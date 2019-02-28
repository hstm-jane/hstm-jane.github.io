<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Medication Cart 2';
$patterns['header']['mainNavActive'] = 'resources';
$patterns['focus']['title'] = 'Medication Cart 2';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Type:',
        'value' => 'Equipment',
    ),
    array(
        'label' => 'Building:',
        'value' => '<a href="/building-view.php" class="meta-value">Southside Building</a>', // Building should be linked, but not this way
    ),
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

    <div class="layout layout-min show-attributes">
        <div class="container">
            <section class="section section-main section-box">
                <div class="row">
                    <div class="col-sm-9">
                        <section class="section">
                            <h3>Description</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </section>
                    </div>
                    <div class="col-sm-3">
                        <section class="section well">
                            <h3>Contact Info</h3>
                            <p>John Smith Equipment Services 1-800-555-5555 jsmith@hca.com
                            </p>
                        </section>
                    </div>
                </div>
                <section class="section">
                    <h3>Permissions</h3>
                    <div class="collapsable-table collapsable-table-disabled">
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
                                    <input type="checkbox" checked="" disabled="">
                                </div>
                            </div>
                            <div class="collapsable-cell collapsable-check">
                                <div class="collapsable-check-label">
                                    <label>Permission 2</label>
                                </div>
                                <div class="collapsable-checkbox">
                                    <input type="checkbox" disabled="">
                                </div>
                            </div>
                            <div class="collapsable-cell collapsable-check">
                                <div class="collapsable-check-label">
                                    <label>Permission 3</label>
                                </div>
                                <div class="collapsable-checkbox">
                                    <input type="checkbox" disabled="">
                                </div>
                            </div>
                            <div class="collapsable-cell collapsable-check">
                                <div class="collapsable-check-label">
                                    <label>Permission 4</label>
                                </div>
                                <div class="collapsable-checkbox">
                                    <input type="checkbox" disabled="">
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
                                    <input type="checkbox" checked="" disabled="">
                                </div>
                            </div>
                            <div class="collapsable-cell collapsable-check">
                                <div class="collapsable-check-label">
                                    <label>Permission 2</label>
                                </div>
                                <div class="collapsable-checkbox">
                                    <input type="checkbox" disabled="">
                                </div>
                            </div>
                            <div class="collapsable-cell collapsable-check">
                                <div class="collapsable-check-label">
                                    <label>Permission 3</label>
                                </div>
                                <div class="collapsable-checkbox">
                                    <input type="checkbox" checked="" disabled="">
                                </div>
                            </div>
                            <div class="collapsable-cell collapsable-check">
                                <div class="collapsable-check-label">
                                    <label>Permission 4</label>
                                </div>
                                <div class="collapsable-checkbox">
                                    <input type="checkbox" disabled="">
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
                                    <input type="checkbox" disabled="">
                                </div>
                            </div>
                            <div class="collapsable-cell collapsable-check">
                                <div class="collapsable-check-label">
                                    <label>Permission 2</label>
                                </div>
                                <div class="collapsable-checkbox">
                                    <input type="checkbox" checked="" disabled="">
                                </div>
                            </div>
                            <div class="collapsable-cell collapsable-check">
                                <div class="collapsable-check-label">
                                    <label>Permission 3</label>
                                </div>
                                <div class="collapsable-checkbox">
                                    <input type="checkbox" disabled="">
                                </div>
                            </div>
                            <div class="collapsable-cell collapsable-check">
                                <div class="collapsable-check-label">
                                    <label>Permission 4</label>
                                </div>
                                <div class="collapsable-checkbox">
                                    <input type="checkbox" checked="" disabled="">
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

                <?php
                    $stickybar = array(
                        'sets' => array(
                            array(
                                'html' => '<a href="/equipment-edit.php" class="btn btn-success">Edit Equipment</a>',
                            ),
                        ),
                    );
                    echo createStickybar($stickybar);
                ?>

            </section>
        </div>
    </div>
    <!-- /layout -->
    <?php include PATH_PATTERNS_MODALS . "_modal_permissions.php"; ?>
    <?= createFooter($patterns['footer']); ?>
    <?= createPrototypeNav(); ?>
    <?= createSiteScripts(); ?>
    <?= createSiteEnd(); ?>

