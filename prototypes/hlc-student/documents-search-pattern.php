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
        <section class="section section-main section-box">
            <div class="row">

                <div class="col-md-3 hidden-xs hidden-sm">
                    <section class="section section-refinement-options" data-equalize="layout-columns">
                        <header>
                            <h2>Refine</h2>
                        </header>
                        <section class="section section-refinement-group">
                            <h3>Search Terms</h3>
                            <ul class="list-unstyled">
                                <li><a href="#" class="label label-default">Keyword <i class="fa fa-times"></i></a></li>
                            </ul>
                        </section>
                        <section class="section section-refinement-group">
                            <h3>File Type</h3>
                            <ul class="list-unstyled">
                                <li class="checkbox">
                                    <label><input type="checkbox"> <i class="fa fa-fw fa-file-word-o"></i> Word Document</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> <i class="fa fa-fw fa-file-pdf-o"></i> Portable Document File</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> <i class="fa fa-fw fa-file-excel-o"></i> Excel Spreadsheet</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> <i class="fa fa-fw fa-file-powerpoint-o"></i> Powerpoint File</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> <i class="fa fa-fw fa-file-text-o"></i> Text File</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> <i class="fa fa-fw fa-file-image-o"></i> Image File</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> <i class="fa fa-fw fa-file-video-o"></i> Video File</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> <i class="fa fa-fw fa-file-o"></i> Unknown File Type</label>
                                </li>
                            </ul>
                        </section>
                    </section>
                </div>

                <div class="col-md-9">
                    <section class="section section-results" data-equalize="layout-columns">
                        <section class="section section-results-header">
                            <div class="row">
                                <div class="col-md-9">
                                    <h2>Results <small>Showing 1-10 of 15</small></h2>
                                    <div class="section section-refinement-applied">
                                        <h3>Refinements</h3>
                                        <ul>
                                            <li><a href="#" class="label label-default">Keyword <i class="fa fa-times"></i></a></li>
                                            <li><a href="#" class="label label-default">File Type <i class="fa fa-times"></i></a></li>
                                            <li><a href="#" class="label label-default">File Type <i class="fa fa-times"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 hidden-xs hidden-sm">
                                    <div class="section-results-header-sort">
                                        <div class="dropdown">
                                            <a class="btn btn-default" data-toggle="dropdown" href="#">Date Updated <i class="fa fa-sort"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="active"><a href="#">Date Updated</a></li>
                                                <li><a href="#">Name</a></li>
                                                <li><a href="#">Size</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section">
                            <?php

                            $content = '
                                <section class="section">
                                    <h5>Description</h5>
                                    <p>This is a longer form area for the file description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                </section>
                            ';
                            $slat = array(
                                'title' => '<a href="#">This is the document name</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'DOC',
                                    ),
                                    array(
                                        'label' => 'Size:',
                                        'value' => '14kb',
                                    ),
                                    array(
                                        'label' => 'Updated: ',
                                        'value' => 'Mar 1, 2014 at 2:13pm',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-pencil visible-xs"></i></a></div>',
                                ),
                                'nested' => array(
                                    'hide' => array($content),
                                )
                            );
                            echo createSlat($slat);

                            $content = '
                                <section class="section">
                                    <h5>Description</h5>
                                    <p>This is a longer form area for the file description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                </section>
                            ';
                            $slat = array(
                                'title' => '<a href="#">This is the document name</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'PDF',
                                    ),
                                    array(
                                        'label' => 'Size:',
                                        'value' => '14kb',
                                    ),
                                    array(
                                        'label' => 'Updated: ',
                                        'value' => 'Mar 1, 2014 at 2:13pm',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-pencil visible-xs"></i></a></div>',
                                ),
                                'nested' => array(
                                    'hide' => array($content),
                                )
                            );
                            echo createSlat($slat);

                            $content = '
                                <section class="section">
                                    <h5>Description</h5>
                                    <p>This is a longer form area for the file description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                </section>
                            ';
                            $slat = array(
                                'title' => '<a href="#">This is the document name</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'XLS',
                                    ),
                                    array(
                                        'label' => 'Size:',
                                        'value' => '14kb',
                                    ),
                                    array(
                                        'label' => 'Updated: ',
                                        'value' => 'Mar 1, 2014 at 2:13pm',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-pencil visible-xs"></i></a></div>',
                                ),
                                'nested' => array(
                                    'hide' => array($content),
                                )
                            );
                            echo createSlat($slat);

                            $content = '
                                <section class="section">
                                    <h5>Description</h5>
                                    <p>This is a longer form area for the file description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                </section>
                            ';
                            $slat = array(
                                'title' => '<a href="#">This is the document name</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'PDF',
                                    ),
                                    array(
                                        'label' => 'Size:',
                                        'value' => '14kb',
                                    ),
                                    array(
                                        'label' => 'Updated: ',
                                        'value' => 'Mar 1, 2014 at 2:13pm',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-pencil visible-xs"></i></a></div>',
                                ),
                                'nested' => array(
                                    'hide' => array($content),
                                )
                            );
                            echo createSlat($slat);

                            $content = '
                                <section class="section">
                                    <h5>Description</h5>
                                    <p>This is a longer form area for the file description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                </section>
                            ';
                            $slat = array(
                                'title' => '<a href="#">This is the document name</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'JPG',
                                    ),
                                    array(
                                        'label' => 'Size:',
                                        'value' => '14kb',
                                    ),
                                    array(
                                        'label' => 'Updated: ',
                                        'value' => 'Mar 1, 2014 at 2:13pm',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-pencil visible-xs"></i></a></div>',
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
                                            <a href="#modal-filter" class="btn btn-default" data-toggle="modal"><i class="fa fa-filter"></i></a>
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
            </div><!-- /row -->
        </section>
    </div><!-- /container -->
</div><!-- /layout -->

<!-- Modal -->
<div id="modal-filter" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <section class="section section-refinement-group">
                        <h3>Sort</h3>
                        <select class="form-control">
                            <option selected>Date Updated</option>
                            <option>Name</option>
                            <option>Size</option>
                        </select>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Search Terms</h3>
                        <ul class="list-unstyled">
                            <li><a href="#" class="label label-default">Keyword <i class="fa fa-times"></i></a></li>
                        </ul>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>File Type</h3>
                        <ul class="list-unstyled">
                            <li class="checkbox">
                                <label><input type="checkbox"> <i class="fa fa-fw fa-file-word-o"></i> Word Document</label>
                            </li>
                            <li class="checkbox">
                                <label><input type="checkbox"> <i class="fa fa-fw fa-file-pdf-o"></i> Portable Document File</label>
                            </li>
                            <li class="checkbox">
                                <label><input type="checkbox"> <i class="fa fa-fw fa-file-excel-o"></i> Excel Spreadsheet</label>
                            </li>
                            <li class="checkbox">
                                <label><input type="checkbox"> <i class="fa fa-fw fa-file-powerpoint-o"></i> Powerpoint File</label>
                            </li>
                            <li class="checkbox">
                                <label><input type="checkbox"> <i class="fa fa-fw fa-file-text-o"></i> Text File</label>
                            </li>
                            <li class="checkbox">
                                <label><input type="checkbox"> <i class="fa fa-fw fa-file-image-o"></i> Image File</label>
                            </li>
                            <li class="checkbox">
                                <label><input type="checkbox"> <i class="fa fa-fw fa-file-video-o"></i> Video File</label>
                            </li>
                            <li class="checkbox">
                                <label><input type="checkbox"> <i class="fa fa-fw fa-file-o"></i> Unknown File Type</label>
                            </li>
                        </ul>
                    </section>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?php
include ('includes/modals/_modal-document-add.php');
include ('includes/modals/_modal-document-edit.php');
?>

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>
