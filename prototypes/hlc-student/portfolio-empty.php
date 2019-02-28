<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'My Portfolio';
$patterns['header']['mainNavActive'] = 'profile';
$patterns['focus']['title'] = 'My Portfolio';
$patterns['focus']['action'] = array(
    'text' => 'Print',
    'link' => '#',
);
$patterns['focus']['supporting'] = ' ';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<style>
.slat-group-footer .timestamp {
    font-size: 12px;
    color: #999;
    font-style: italic;
}
.slat-group-header {
    display: table;
    width: 100%;
}
.slat-group-header-title {
    display: table-cell;
    vertical-align: bottom;
}
.slat-group-header-title h2,
.slat-group-header-title h3,
.slat-group-header-title h4 {
    margin: 0;
}
.slat-group-header-actions {
    display: table-cell;
    vertical-align: bottom;
    text-align: right;
    width: 40%;
}
.slat-group-header-actions {
    white-space: nowrap;
}

.slat-group-content {
    margin: 10px 0 5px;
    border: 1px solid #eee;
    padding: 0 7px;
    border-radius: 3px;
}
.slat-group-content .collapse-group .slat:first-child {
    margin-top: 0;
}
.slat-group-content .collapse-toggle {
    display: inline-block;
    margin: 0 0 7px;
    font-size: 13px;
    text-decoration: none;
}

</style>
<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <section class="section section-main section-box" data-equalize="layout-columns">

                    <?php

                        $focusNav = array(
                            'tabs' => array(
                                array(
                                    'id' => 'tab-1',
                                    'label' => 'Personal',
                                ),
                                array(
                                    'active' => true,
                                    'id' => 'tab-2',
                                    'label' => 'Professional',
                                ),
                                array(
                                    'id' => 'tab-3',
                                    'label' => 'Transcript',
                                ),
                                array(
                                    'id' => 'tab-4',
                                    'label' => 'Goals',
                                ),
                                array(
                                    'id' => 'tab-5',
                                    'label' => 'Notes',
                                ),
                                array(
                                    'id' => 'tab-6',
                                    'label' => 'Documents',
                                ),
                            ),
                        );
                        echo createFocusNav($focusNav);

                    ?>

                    <div class="tab-content">
                        <div class="tab-pane fade" id="tab-1">
                            This is the personal tab
                        </div> <!-- /tab-pane -->

                        <div class="tab-pane fade in active" id="tab-2">

                            <section class="section">
                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Work Experience</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-gear"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#">Move Up</a></li>
                                                    <li><a href="#">Move Down</a></li>
                                                    <li><a href="#">Add Item</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message slat-message-sm">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#" class="btn btn-default">Add Work Experience</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </section>

                            <section class="section">
                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Education</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-gear"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#">Move Up</a></li>
                                                    <li><a href="#">Move Down</a></li>
                                                    <li><a href="#">Add Item</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message slat-message-sm">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#" class="btn btn-default">Add Education</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </section>

                            <section class="section">
                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Licenses</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-gear"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#">Move Up</a></li>
                                                    <li><a href="#">Move Down</a></li>
                                                    <li><a href="#">Add Item</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message slat-message-sm">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#" class="btn btn-default">Add Licenses</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </section>

                            <section class="section">
                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Certifications</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-gear"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#">Move Up</a></li>
                                                    <li><a href="#">Move Down</a></li>
                                                    <li><a href="#">Add Item</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message slat-message-sm">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#" class="btn btn-default">Add Certifications</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </section>

                            <section class="section">
                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Resucitation Programs</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-gear"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#">Move Up</a></li>
                                                    <li><a href="#">Move Down</a></li>
                                                    <li><a href="#">Add Item</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message slat-message-sm">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#" class="btn btn-default">Add Resucitation Programs</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </section>

                            <section class="section">
                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Activities</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-gear"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#">Move Up</a></li>
                                                    <li><a href="#">Move Down</a></li>
                                                    <li><a href="#">Add Item</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message slat-message-sm">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#" class="btn btn-default">Add Activities</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </section>

                            <section class="section">
                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Publications</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-gear"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#">Move Up</a></li>
                                                    <li><a href="#">Move Down</a></li>
                                                    <li><a href="#">Add Item</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message slat-message-sm">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#" class="btn btn-default">Add Publications</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </section>

                            <section class="section">
                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Awards &amp; Recognition</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-gear"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#">Move Up</a></li>
                                                    <li><a href="#">Move Down</a></li>
                                                    <li><a href="#">Add Item</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message slat-message-sm">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#" class="btn btn-default">Add Awards &amp; Recognition</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </section>

                            <section class="section">
                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Other</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-gear"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#">Move Up</a></li>
                                                    <li><a href="#">Move Down</a></li>
                                                    <li><a href="#">Add Item</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message slat-message-sm">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#" class="btn btn-default">Add Other</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </section>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '
                                                <a href="#modal-sections" data-toggle="modal" class="btn btn-success">Manage Sections</a>
                                                <a href="#modal-print" data-toggle="modal" class="btn btn-success">Print</a>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </div> <!-- /tab-pane -->

                        <div class="tab-pane fade" id="tab-3">
                            This is the transcript tab
                        </div> <!-- /tab-pane -->

                        <div class="tab-pane fade" id="tab-4">
                            <section class="section">
                                <h2>Goals <small>Showing 1-20 of 25</small></h2>
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
                                            'html' => '
                                                <a href="#modal-goal-add" class="btn btn-success" data-toggle="modal">Add Goal</a>
                                            ',
                                        ),
                                        array(
                                            'position' => 'right',
                                            'classes' => array('hidden-xs','hidden-sm'),
                                            'html' => '
                                                <div class="btn-group dropup">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 35 <i class="fa fa-caret-up"></i></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="active"><a href="#">20 per page</a></li>
                                                        <li><a href="#">50 per page</a></li>
                                                        <li><a href="#">100 per page</a></li>
                                                        <li><a href="#">250 per page</a></li>
                                                        <li><a href="#">Show All</a></li>
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
                                                <a href="#modal-refine-goals" class="btn btn-default" data-toggle="modal"><i class="fa fa-filter"></i></a>
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


                        </div> <!-- /tab-pane -->

                        <div class="tab-pane fade" id="tab-5">
                            <section class="section">
                                <h2>Notes <small>Showing 1-20 of 25</small></h2>
                                <?php

                                $content = '
                                    <section class="section">
                                        <h5>Detail</h5>
                                        <p>This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                    </section>
                                    <section class="section">
                                        <h5>Attachments</h5>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-paperclip"></i> <a href="#">This is a document</a></li>
                                        </ul>
                                    </section>
                                ';
                                $slat = array(
                                    'title' => 'This is my note',
                                    'meta' => array(
                                        array(
                                            'label' => 'Regarding:',
                                            'value' => 'Stephanie Juniper',
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
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-note-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                    ),
                                    'nested' => array(
                                        'hide' => array($content),
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
                                            'html' => '
                                                <a href="#modal-note-add" data-toggle="modal" class="btn btn-success">Add Note</a>
                                            ',
                                        ),
                                        array(
                                            'position' => 'right',
                                            'classes' => array('hidden-xs','hidden-sm'),
                                            'html' => '
                                                <div class="btn-group dropup">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 35 <i class="fa fa-caret-up"></i></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="active"><a href="#">20 per page</a></li>
                                                        <li><a href="#">50 per page</a></li>
                                                        <li><a href="#">100 per page</a></li>
                                                        <li><a href="#">250 per page</a></li>
                                                        <li><a href="#">Show All</a></li>
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
                                                <a href="#modal-refine-notes" class="btn btn-default" data-toggle="modal"><i class="fa fa-filter"></i></a>
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

                        </div> <!-- /tab-pane -->

                        <div class="tab-pane fade" id="tab-6">
                            <section class="section">
                                <h2>Documents <small>Showing 1-20 of 25</small></h2>
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
                                            'html' => '
                                                <a href="#modal-document-add" data-toggle="modal" class="btn btn-success">Add Document</a>
                                            ',
                                        ),
                                        array(
                                            'position' => 'right',
                                            'classes' => array('hidden-xs','hidden-sm'),
                                            'html' => '
                                                <div class="btn-group dropup">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 35 <i class="fa fa-caret-up"></i></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="active"><a href="#">20 per page</a></li>
                                                        <li><a href="#">50 per page</a></li>
                                                        <li><a href="#">100 per page</a></li>
                                                        <li><a href="#">250 per page</a></li>
                                                        <li><a href="#">Show All</a></li>
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
                                                <a href="#modal-refine-documents" class="btn btn-default" data-toggle="modal"><i class="fa fa-filter"></i></a>
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

                        </div> <!-- /tab-pane -->

                    </div><!-- /tab-content -->
                </section><!-- /section-main -->

            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>Portfolio Status</h3>
                        <div class="progress">
                            <div class="progress-bar" style="width:40%">40%</div>
                        </div>
                        <p>Completing your Portfolio ensures accurate awarding of CE credit and helps us make better recomendations.</p>
                        <p><a href="#" class="btn btn-sm btn-success">Complete Portfolio</a></p>
                    </section>
                    <?php include_sidebar(); ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div> <!-- /layout -->

<!-- Modal -->
<div id="modal-refine-goals" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <section class="section section-refinement-group section-refinement-group-first">
                        <h3>Search</h3>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Date Range <small>Based on Start Date</small></h3>
                        <div class="form-group">
                            <select class="form-control" id="select-daterange">
                                <optgroup label="Presets">
                                    <option>Since January 1</option>
                                    <option>Last 6 Months</option>
                                    <option selected>Last 12 Months</option>
                                    <option>Last 24 Months</option>
                                    <option>Previous Calendar Year</option>
                                </optgroup>
                                <optgroup label="Custom">
                                    <option value="custom">Custom Range</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group" id="custom-daterange" style="display:none">
                            <label>Start Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/05/2015">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <label style="margin-top: 10px;">End Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/04/2016">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Search</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div id="modal-refine-notes" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <section class="section section-refinement-group section-refinement-group-first">
                        <h3>Search</h3>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Date Range <small>Based on Start Date</small></h3>
                        <div class="form-group">
                            <select class="form-control" id="select-daterange">
                                <optgroup label="Presets">
                                    <option>Since January 1</option>
                                    <option>Last 6 Months</option>
                                    <option selected>Last 12 Months</option>
                                    <option>Last 24 Months</option>
                                    <option>Previous Calendar Year</option>
                                </optgroup>
                                <optgroup label="Custom">
                                    <option value="custom">Custom Range</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group" id="custom-daterange" style="display:none">
                            <label>Start Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/05/2015">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <label style="margin-top: 10px;">End Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/04/2016">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Search</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-refine-documents" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <section class="section section-refinement-group section-refinement-group-first">
                        <h3>Search</h3>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Date Range <small>Based on Start Date</small></h3>
                        <div class="form-group">
                            <select class="form-control" id="select-daterange">
                                <optgroup label="Presets">
                                    <option>Since January 1</option>
                                    <option>Last 6 Months</option>
                                    <option selected>Last 12 Months</option>
                                    <option>Last 24 Months</option>
                                    <option>Previous Calendar Year</option>
                                </optgroup>
                                <optgroup label="Custom">
                                    <option value="custom">Custom Range</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group" id="custom-daterange" style="display:none">
                            <label>Start Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/05/2015">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <label style="margin-top: 10px;">End Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/04/2016">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Search</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-refine" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <section class="section section-refinement-group section-refinement-group-first">
                        <h3>Search</h3>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Date Range <small>Based on Start Date</small></h3>
                        <div class="form-group">
                            <select class="form-control" id="select-daterange">
                                <optgroup label="Presets">
                                    <option>Since January 1</option>
                                    <option>Last 6 Months</option>
                                    <option selected>Last 12 Months</option>
                                    <option>Last 24 Months</option>
                                    <option>Previous Calendar Year</option>
                                </optgroup>
                                <optgroup label="Custom">
                                    <option value="custom">Custom Range</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group" id="custom-daterange" style="display:none">
                            <label>Start Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/05/2015">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <label style="margin-top: 10px;">End Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/04/2016">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Search</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-sections" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">

                <?php

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Work Experience',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success work-experience" data-section="work-experience">Selected<i class="fa fa-check visible-xs"></i>
                                </a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Education',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success education" data-section="education">Selected<i class="fa fa-check visible-xs"></i></a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Licenses',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success licenses" data-section="licenses">Selected<i class="fa fa-check visible-xs"></i></a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Certifications',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success certifications" data-section="certifications">Selected<i class="fa fa-check visible-xs"></i></a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Resucitation Programs',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success resucitation-programs" data-section="resucitation-programs">Selected<i class="fa fa-check visible-xs"></i></a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Activities',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success activities" data-section="activities">Selected<i class="fa fa-check visible-xs"></i></a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Publications',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success publications" data-section="publications">Selected<i class="fa fa-check visible-xs"></i></a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Awards &amp; Recognition',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success awards" data-section="awards">Selected<i class="fa fa-check visible-xs"></i></a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Other',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success other" data-section="other">Selected<i class="fa fa-check visible-xs"></i></a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                ?>

            </div>
            <div class="modal-footer">

                <button class="btn btn-default" data-dismiss="modal" onClick="window.parent.closeModal();">Close</button>
            </div>
        </div>
    </div>
</div>

<?php
include ('includes/modals/_modal-goal-add.php');
include ('includes/modals/_modal-goal-manage.php');
include ('includes/modals/_modal-note-add.php');
include ('includes/modals/_modal-note-edit.php');
include ('includes/modals/_modal-document-add.php');
include ('includes/modals/_modal-document-edit.php');
?>
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
    <script>
        $(function(){
            $('.slat-group-header-collapse-toggle').click(function(e){
                e.preventDefault();
                $(this).closest('.slat-group').find('.collapse-toggle').click();
            });

            $('.slat-group').on('show.bs.collapse hide.bs.collapse','.collapse-group',function(){
                var $group = $(this).closest('.slat-group'),
                    $btn = $group.find('.slat-group-header-collapse-toggle'),
                    icons = ['<i class="fa fa-expand"></i>','<i class="fa fa-compress"></i>'];

                if ( $btn.html() === icons[0] ) {
                    $btn.html(icons[1]);
                } else {
                    $btn.html(icons[0]);
                }
            });
        });
    </script>
    <script>
        $(function(){
            $('a[data-toggle="modalpage"]').click(function(e){
                e.preventDefault();
                var target = $(this).attr('href');
                $(target).show().siblings('.modal-page').hide();
            });
            $('#select-daterange').on('change',function(){
                if ( $(this).val() === 'custom' ) {
                    $('#custom-daterange').show().find('input:eq(0)').focus();
                } else {
                    $('#custom-daterange').hide();
                }
            });

            $('#select-daterange-modal').on('change',function(){
                if ( $(this).val() === 'custom' ) {
                    $('#custom-daterange-modal').show().find('input:eq(0)').focus();
                } else {
                    $('#custom-daterange-modal').hide();
                }
            });

            $('.slat-radio .btn').click(function(e){
                var $btn = $(this);
                e.preventDefault();
                $('.slat-radio .btn').removeClass('btn-success').addClass('btn-default').html('Select<i class="fa fa-plus visible-xs"></i>');
                $btn.removeClass('btn-default').addClass('btn-success').html('Selected<i class="fa fa-check visible-xs"></i>');
            });
        });
    </script>
<?= createSiteEnd(); ?>
