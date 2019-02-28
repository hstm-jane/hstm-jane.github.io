<?php

include "includes/helpers/helpers.php";


$patterns['start']['title'] = 'Manage Rater and Peers';
$patterns['focus']['title'] = 'Manage Rater and Peers';

$employees = array(
    'Basile, Victor P.'
    ,'Bradford, Julie D.'
    ,'Fiedler, Joanne M.'
    ,'Montoya, Alice G.'
    ,'Moore, Rita H.'
    ,'Park, Jennifer S.'
    ,'Riley, Phillip A.'
    ,'Rink, Christopher P.'
    ,'Story, Yvonne G.'
    ,'Wilder, Janice M.'
);
?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-main section-box">
                 <?php if(!empty($_REQUEST['return-to-prev']) && $_REQUEST['return-to-prev'] == "1") { ?>
                        <section class="section">
                            <a href="assessment-manage-rater-peers.php">
                                <i class="fa fa-fw fa-chevron-left"></i>Return to Manage Rater and Peers for Assessment
                            </a>
                        </section>
                    <?php } ?>
                    <section class="section">
                        <h2>Manage Rater and Peers for Basile, Victor P.</h2>
                        <p>Use the options below to change the rater or peers for this assessment.</p>
                    </section>
                    <section class="section">
                        <h2>Rater <small>The primary rater or select an alternate from your department</small></h2>

                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'Riley, Phillip A.',
                            'meta' => array(
                                array(
                                    'label' => 'ID:',
                                    'value' => '123456',
                                ),
                                array(
                                    'label' => 'Department:',
                                    'value' => 'Nursing',
                                ),
                                array(
                                    'label' => 'Job Title:',
                                    'value' => 'RN',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-rater" data-toggle="modal">Change<i class="fa fa-pencil visible-xs"></i></a></div>',
                            )
                        );
                        echo createSlat($slat);

                        ?>

                    </section>

                    <!-- START: No Selected Peers -->
                    <section class="section">
                        <h2>Peers <small>Select additional raters within your department</small></h2>
                        <div class="slat">
                            <div class="slat-message">
                                <h3>You don't have any peers selected.</h3>
                                <a href="#modal-peers" class="btn btn-default" data-toggle="modal">Select Peers</a>
                            </div>
                        </div>
                    </section>
                    <!-- End: No Selected Peers -->

                    <!-- START: Selected Peers -->
                    <section class="section">
                        <h2>Peers <small>Select additional raters within your department</small></h2>
                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'Rita Moore',
                            'meta' => array(
                                array(
                                    'label' => 'ID:',
                                    'value' => '12345',
                                ),
                                array(
                                    'label' => 'Department:',
                                    'value' => 'Nursing',
                                ),
                                array(
                                    'label' => 'Job Title:',
                                    'value' => 'RN',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single-danger',
                                'content' => 'Remove<i class="fa fa-times visible-xs"></i>',
                                'link' => '#',
                            )
                        );
                        echo createSlat($slat);

                        $slat['title'] = 'Sheen, Cybill';
                        echo createSlat($slat);

                        $slat['title'] = 'Juniper, Stephanie';
                        echo createSlat($slat);

                        ?>

                        <a href="#modal-peers" class="btn btn-default" data-toggle="modal">Select Peers</a>
                    </section>
                    <!-- END: Selected Peers -->

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'html' => '<a href="#" class="btn btn-success">Save</a> <a href="#" class="btn btn-default">Cancel</a>',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>Support</h3>
                        <p>To talk with a customer service representative call 1-800-521-0574</p>
                    </section>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->
<!-- Modal -->
<div id="modal-peers" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">2015 Performance Assessment: Peer List</h4>
                <div class="input-group modal-search">
                    <input type="text" class="form-control" placeholder="Search Employees">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                    </span>
                </div><!-- /input-group -->
            </div>
            <div class="modal-body">
                <section class="section modal-search-results">
                    <h3>Results <small>Showing 1-10 of 15</small></h3>

                    <?php for ( $i = 0; $i < 10; $i++ ) {

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-toggle','slat-modal')),
                            ),
                            'title' => $employees[$i],
                            'meta' => array(
                                array(
                                    'label' => 'ID:',
                                    'value' => '123456',
                                ),
                                array(
                                    'label' => 'Department:',
                                    'value' => 'Nursing',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Select<i class="fa fa-plus"></i>',
                                'link' => '#',
                            )
                        );
                        echo createSlat($slat);
                    }

                    ?>

                </section>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Add Peers</a>
                <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                <div class="btn-group pull-right">
                    <button class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                    <button class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div><!-- /modal -->
<!-- Modal -->
<div id="modal-rater" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">2015 Performance Assessment: Rater List</h4>
                <div class="input-group modal-search">
                    <input type="text" class="form-control" placeholder="Search Employees">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                    </span>
                </div><!-- /input-group -->
            </div>
            <div class="modal-body">
                <section class="section modal-search-results">
                    <h3>Results <small>Showing 1-10 of 15</small></h3>

                    <?php for ( $i = 0; $i < 10; $i++ ) {

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-toggle','slat-modal')),
                            ),
                            'title' => $employees[$i],
                            'meta' => array(
                                array(
                                    'label' => 'ID:',
                                    'value' => '123456',
                                ),
                                array(
                                    'label' => 'Department:',
                                    'value' => 'Nursing',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Select<i class="fa fa-plus"></i>',
                                'link' => '#',
                            )
                        );
                        echo createSlat($slat);

                    }

                    ?>

                </section>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Set Rater</a>
                <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                <div class="btn-group pull-right">
                    <button class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                    <button class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div><!-- /modal -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
$(function(){
    $('.ag-item .btn, .slat-toggle .btn').click(function(e){
        var $btn = $(this);
        e.preventDefault();
        $btn.toggleClass('btn-success btn-default');
        if($btn.hasClass('btn-success')){
            $btn.html('Selected<i class="fa fa-check visible-xs"></i>');
        } else {
            $btn.html('Select<i class="fa fa-plus visible-xs"></i>');
        }
    });
    $('.slat-radio .btn').click(function(e){
        var $btn = $(this);
        e.preventDefault();
        $('.slat-radio .btn').removeClass('btn-success').addClass('btn-default').html('Select<i class="fa fa-plus visible-xs"></i>');
        $btn.removeClass('btn-default').addClass('btn-success').html('Selected<i class="fa fa-check visible-xs"></i>');
    });
    $('#btn-select-all').click(function(e){
        var $btn = $(this),
            labels = $btn.attr('data-labels').split('|');

        if ( $btn.text() === labels[0] ) {
            $btn.text(labels[1]);
            $('.ag-item .btn-default').click();
        } else {
            $btn.text(labels[0]);
            $('.ag-item .btn-success').click();
        }
        e.preventDefault();
    });
});
</script>
<?= createSiteEnd(); ?>