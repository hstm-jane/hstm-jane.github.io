<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My Goals';
$patterns['header']['mainNavActive'] = 'profile';
$patterns['focus']['type'] = 'search';
$patterns['focus']['title'] = 'My Goals';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout layout-search">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-main section-box" data-equalize="layout-columns">
                    <section class="section">
                        <h2>Results <small>Showing 1-20 of 25</small></h2>
                        <?php
                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-attention','slat-spaced','slat-callout')),
                            ),
                            'title' => '<a href="#modal-goal-manage" data-toggle="modal">This is the title of a goal</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Individual',
                                ),
                                array(
                                    'label' => 'Date: ',
                                    'value' => 'Apr. 1, 2014',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'In Progress',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-goal-manage" data-toggle="modal">Manage<i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-spaced')),
                            ),
                            'title' => '<a href="#modal-goal-manage" data-toggle="modal">This is the title of a goal</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Departmental',
                                ),
                                array(
                                    'label' => 'Date: ',
                                    'value' => 'Jan. 1, 2015',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'In Progress',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-goal-manage" data-toggle="modal">Manage<i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-spaced')),
                            ),
                            'title' => '<a href="#modal-goal-manage" data-toggle="modal">This is the title of a goal</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Individual',
                                ),
                                array(
                                    'label' => 'Date: ',
                                    'value' => 'Jan. 1, 2015',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'In Progress',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-goal-manage" data-toggle="modal">Manage<i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-spaced')),
                            ),
                            'title' => '<a href="#modal-goal-manage" data-toggle="modal">This is the title of a goal</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Individual',
                                ),
                                array(
                                    'label' => 'Date: ',
                                    'value' => 'Jan. 1, 2015',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'In Progress',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-goal-manage" data-toggle="modal">Manage<i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
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
                                    'html' => '<a href="#modal-goal-add" class="btn btn-success" data-toggle="modal">Add Goal</a>',
                                ),
                                array(
                                    'position' => 'right',
                                    'classes' => array('hidden-xs'),
                                    'html' => '
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 25 <i class="fa fa-caret-up"></i></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="active"><a href="#">20 per page</a></li>
                                                <li><a href="#">50 per page</a></li>
                                                <li><a href="#">100 per page</a></li>
                                                <li><a href="#">250 per page</a></li>
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
include ('includes/modals/_modal-goal-add.php');
include ('includes/modals/_modal-goal-manage.php');
?>

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $('a[data-toggle="modalpage"]').click(function(e){
            e.preventDefault();
            var target = $(this).attr('href');
            $(target).show().siblings('.modal-page').hide();
        });
    });
</script>
<?= createSiteEnd(); ?>
