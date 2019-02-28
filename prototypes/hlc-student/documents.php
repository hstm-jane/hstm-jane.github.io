<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My Documents';
$patterns['header']['mainNavActive'] = 'profile';
$patterns['focus']['type'] = 'search';
$patterns['focus']['title'] = 'My Documents';

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
                        <h2>Results <small>Showing 1-10 of 15</small></h2>
                        <?php

                        $content = '
                            <section class="section">
                                <h5>Description</h5>
                                <p>This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                            </section>
                        ';
                        $slat = array(
                            'title' => '<a href="#">This is the document name</a>',
                            'meta' => array(
                                array(
                                    'label' => 'Attachment:',
                                    'value' => 'Word Document',
                                ),
                                array(
                                    'label' => 'Updated: ',
                                    'value' => 'Mar 1, 2014 at 2:13pm',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),

                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                            ),
                            'nested' => array(
                                'hide' => array($content),
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'title' => '<a href="#">This is the document name</a>',
                            'meta' => array(
                                array(
                                    'label' => 'Attachment:',
                                    'value' => 'Portable Document File',
                                ),
                                array(
                                    'label' => 'Updated: ',
                                    'value' => 'Mar 1, 2014 at 2:13pm',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),

                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                            ),
                            'nested' => array(
                                'hide' => array($content),
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'title' => '<a href="#">This is the document name</a>',
                            'meta' => array(
                                array(
                                    'label' => 'Attachment:',
                                    'value' => 'Excel Spreadsheet',
                                ),
                                array(
                                    'label' => 'Updated: ',
                                    'value' => 'Mar 1, 2014 at 2:13pm',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),

                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                            ),
                            'nested' => array(
                                'hide' => array($content),
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'title' => '<a href="#">This is the document name</a>',
                            'meta' => array(
                                array(
                                    'label' => 'Attachment:',
                                    'value' => 'Portable Document File',
                                ),
                                array(
                                    'label' => 'Updated: ',
                                    'value' => 'Mar 1, 2014 at 2:13pm',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),

                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                            ),
                            'nested' => array(
                                'hide' => array($content),
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'title' => '<a href="#">This is the document name</a>',
                            'meta' => array(
                                array(
                                    'label' => 'Attachment:',
                                    'value' => 'Image',
                                ),
                                array(
                                    'label' => 'Updated: ',
                                    'value' => 'Mar 1, 2014 at 2:13pm',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),

                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                            ),
                            'nested' => array(
                                'hide' => array($content),
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
                                    'classes' => array('visible-xs','visible-sm'),
                                    'html' => '<a href="#modal-document-add" data-toggle="modal" class="btn btn-success">Add Document</a>',
                                ),
                                array(
                                    'position' => 'left',
                                    'classes' => array('visible-md','visible-lg'),
                                    'html' => '<a href="#modal-document-add" data-toggle="modal" class="btn btn-success">Add Document</a>',
                                ),
                                array(
                                    'position' => 'right',
                                    'classes' => array('hidden-xs','hidden-sm'),
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
include ('includes/modals/_modal-document-add.php');
include ('includes/modals/_modal-document-edit.php');
?>

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>
