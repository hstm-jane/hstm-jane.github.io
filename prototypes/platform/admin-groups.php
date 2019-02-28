<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Admin Groups';
$patterns['focus']['title'] = 'Admin Groups';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
    <div class="layout layout-min">
        <div class="container">
            <section class="section section-box section-main">
                <section class="section">
                    <div>
                        <div id="adminGroups">
                            <section class="section">
                                <div class="row">
                                    <div class="col-md-6">

                                        <?php

                                        $slat = array(
                                            'title' => '<a href="/admin-group.php">ACME GENERAL MEDICAL CENTER</a>',
                                            'meta' => array(
                                                array(
                                                    'label' => 'Description: ',
                                                    'value' => '',
                                                    'attributes' => array(
                                                        array('class','meta-callout'),
                                                    )
                                                )
                                            ),
                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => 'View',
                                                'link' => '/admin-group.php',
                                            )
                                        );
                                        echo createSlat($slat);

                                        $slat = array(
                                            'title' => '<a href="/admin-group.php">Donna\'s LL Admin Group</a>',
                                            'meta' => array(
                                                array(
                                                    'label' => 'Description: ',
                                                    'value' => 'test group',
                                                    'attributes' => array(
                                                        array('class','meta-callout'),
                                                    )
                                                )
                                            ),
                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => 'View',
                                                'link' => '/admin-group.php',
                                            )
                                        );
                                        echo createSlat($slat);

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                            ),
                                            'title' => '<a href="/admin-group.php">qwerty</a>',
                                            'meta' => array(),
                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => 'View',
                                                'link' => '/admin-group.php',
                                            )
                                        );
                                        echo createSlat($slat);

                                        $slat['title'] = '<a href="/admin-group.php">P_New_Admin Group(CT)</a>';
                                        echo createSlat($slat);

                                        $slat['title'] = '<a href="/admin-group.php">P_New_Admin Group(ET)</a>';
                                        echo createSlat($slat);

                                        ?>

                                    </div>
                                    <div class="col-md-6">
                                        <?php

                                        $slat['title'] = '<a href="/admin-group.php">P_New_Admin Group(CT+ET)</a>';
                                        echo createSlat($slat);

                                        $slat['title'] = '<a href="/admin-group.php">P_New_Admin Group(CT+ET+MT)</a>';
                                        echo createSlat($slat);

                                        $slat['title'] = '<a href="/admin-group.php">P_New_Admin Group(CT+ET+MT+PT)</a>';
                                        echo createSlat($slat);

                                        $slat = array(
                                            'title' => '<a href="/admin-group.php">P_Admin Group(PT)</a>',
                                            'meta' => array(
                                                array(
                                                    'label' => 'Description: ',
                                                    'value' => 'Admin Group having ...',
                                                    'attributes' => array(
                                                        array('class','meta-callout'),
                                                    )
                                                )
                                            ),
                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => 'View',
                                                'link' => '/admin-group.php',
                                            )
                                        );
                                        echo createSlat($slat);

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                            ),
                                            'title' => '<a href="/admin-group.php">P_Admin Group(MT)</a>',
                                            'meta' => array(),
                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => 'View',
                                                'link' => '/admin-group.php',
                                            )
                                        );
                                        echo createSlat($slat);

                                        ?>

                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>

                <?php
                    $stickybar = array(
                        'sets' => array(
                            array(
                                'position' => 'left',
                                'html' => '<a class="btn btn-success" href="/admin-add-group.php">Add Admin Group</a>',
                            ),
                            array(
                                'position' => 'right',
                                'classes' => array('hidden-xs','hidden-sm'),
                                'html' => '
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-10 of 15 <i class="fa fa-caret-up"></i></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="active">
                                                <a href="#">10 per page</a>
                                            </li>
                                            <li>
                                                <a href="#">50 per page</a>
                                            </li>
                                            <li>
                                                <a href="#">Show all</a>
                                            </li>
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
                                'classes' => array('visible-xs','visible-sm'),
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

            </section>
        </div>
    </div>
    <!-- /layout -->
    <!-- Modal -->
    <div id="modal-example" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-success">Success</a>
                    <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>

