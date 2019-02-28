<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My Education';
$patterns['header']['mainNavActive'] = 'profile';
$patterns['focus']['title'] = 'My Education';

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
                        <p class="lead">Manage all Education information on the My Profile page to assure accurate documentation and recognition of professional credentials.</p>
                    </section>

                    <section class="section">
                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'This is the Degree',
                            'meta' => array(
                                array(
                                    'label' => 'Field of Study:',
                                    'value' => 'This is a field of study',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-education-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                            ),
                        );
                        echo createSlat($slat);

                        $content = '
                            <section class="section">
                                <h5>Description</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </section>
                        ';
                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'This is the Degree',
                            'meta' => array(
                                array(
                                    'label' => 'Field of Study:',
                                    'value' => 'Other',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-education-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                            ),
                            'nested' => array(
                                'show' => array($content),
                            )
                        );

                        echo createSlat($slat);

                        ?>
                    </section>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'position' => 'left',
                                    'html' => '<a href="#modal-education-new" class="btn btn-success" data-toggle="modal">Add Education</a>',
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



<?php
include ('includes/modals/_modal-education-add.php');
include ('includes/modals/_modal-education-edit.php');
?>



<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
$(function(){
    $('.education-fos').change(function(){
        var $el = $(this);
            $dg = $el.parents('.modal-body').find('.education-dg');

        if ( $el.val() === 'Other' ) {
            $dg.show();
        } else {
            $dg.hide();
        }
    });
    $('#modal-education-edit, #modal-education-new').on('show.bs.modal',function(){
        $(this).find('.education-fos').change();
    });

});
</script>
<?= createSiteEnd(); ?>
