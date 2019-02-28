<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My Advanced Practice';
$patterns['header']['mainNavActive'] = 'profile';
$patterns['focus']['title'] = 'My Advanced Practice';

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
                        <p class="lead">Manage your advanced practice information to assure accurate documentation and recognition of professional credentials.</p>
                    </section>

                    <section class="section">
                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'Clinical Nurse Specialist',
                            'meta' => array(
                                array(
                                    'label' => 'Specialty:',
                                    'value' => 'CNS Acute Care/Critical Care (Pediatric)',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-advpractice-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                            )
                        );
                        echo createSlat($slat);

                        echo createSlat($slat);

                        echo createSlat($slat);

                        echo createSlat($slat);

                        echo createSlat($slat);

                        ?>
                    </section>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'position' => 'left',
                                    'html' => '<a href="#modal-advpractice-new" class="btn btn-success" data-toggle="modal">Add Advanced Practice</a>',
                                ),
                                array(
                                    'position' => 'right',
                                    'classes' => array('hidden-xs'),
                                    'html' => '
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-10 of 15 <i class="fa fa-caret-up"></i></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="active"><a href="#">10 per page</a></li>
                                                <li><a href="#">50 per page</a></li>
                                                <li><a href="#">Show all</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    ',
                                ),
                                array(
                                    'position' => 'right',
                                    'classes' => array('visible-xs'),
                                    'html' => '
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                        </div>
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
                    <?php include_sidebar(); ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->

<!-- Modal -->
<div id="modal-advpractice-new" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-advpractice-new-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="modal-advpractice-new-label" class="modal-title">Add Advanced Practice</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Advanced Practice Type</label>
                    <select class="form-control">
                        <option>These are the options for Advanced Practice Type</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Specialty</label>
                    <select class="form-control">
                        <option>These are the options for Specialty within the Advanced Practice Type</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-advpractice-edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-advpractice-edit-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="modal-advpractice-edit-label" class="modal-title">Manage Advanced Practice</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Advanced Practice Type</label>
                    <select class="form-control">
                        <option>Another option</option>
                        <option selected>Clinical Nurse Specialist</option>
                        <option>Another option</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Specialty</label>
                    <select class="form-control">
                        <option>Another option</option>
                        <option selected>CNS Acute Care/Critical Care (Pediatric)</option>
                        <option>Another option</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button class="btn btn-danger pull-right" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>

