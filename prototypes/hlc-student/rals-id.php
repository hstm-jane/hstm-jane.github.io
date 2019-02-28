<?php

$show_password = (!empty($_GET['view']) &&  $_GET['view'] === 'password');

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Manage RALS Operator ID™';
$patterns['header']['mainNavActive'] = 'none';
$patterns['focus']['title'] = 'Manage RALS Operator ID';

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
                                        <h2>Manage Your RALS Operator ID</h2>
                                        <p><a href="#modal-hstm-id-explanation" data-toggle="modal">What is an RALS Operator ID?</a></p>
                                        <div class="form-group">
                                            <label>RALS Operator ID</label >
                                        <input type="text" class="form-control stored" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm RALS Operator ID</label>
                                            <input type="text" class="form-control stored" placeholder="" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Activation Period</label>

                                            <label class="checkbox js-nrp-checkbox"><input type="checkbox"> I understand there is up to a 24-hour period before my ID will be activated.  </label>

                                        </div>



                                        <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '<input type="button" value="Save" class="btn btn-success">',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>


                                    </section>
                                </section>
                                <!-- /section-main -->
                            </div>
                            <!-- /column -->

                            <div class="col-md-3">
                                <section class="section section-sidebar" data-equalize="layout-columns">
                                    <?php include_sidebar() ?>
                                </section>
                                <!-- /section-sidebar -->
                            </div>
                            <!-- /column -->

                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /container -->
                </div>
                <!-- /layout -->


                <!-- Modal -->
                <div id="modal-hstm-id-explanation" class="modal fade authentication">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close pw-cancel" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                <h4 class="modal-title">What is a RALS Operator ID?</h4>
                            </div>
                            <div class="modal-body">
                                <p>
                                    Some info about a RALS Operator ID could go here.
                                </p>
                            </div>
                            <div class="modal-footer">

                                <button class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <?= createFooter($patterns['footer']); ?>
                    <?= createSiteScripts(); ?>
                        <?= createSiteEnd(); ?>