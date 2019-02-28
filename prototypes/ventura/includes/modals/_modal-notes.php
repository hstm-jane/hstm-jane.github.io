<?php

function createNoteSlat($slat){
    $html = '
    <div class="checkable">
        '.createSlat($slat).'
        <div class="select">
            <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
        </div>
    </div>';
    return $html;
}

?><!-- modal -->
<div id="modal-select-notes" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-page active" id="modal-selects-notes-list">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">My Notes</h4>
                    <div class="input-group modal-search">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div><!-- /input-group -->
                </div>
                <div class="modal-body">
                    <section class="section modal-search-results">
                        <h3>Results <small>Showing 1-<?= (!empty($assessment))?count($assessment['statements']).' of '.count($assessment['statements']):'10 of 15'; ?></small></h3>

                        <?php


                            $noteCount = 0;

                            // check for assessment data first
                            if ( !empty($assessments) ) {

                                foreach ($assessment['statements'] as $statement) {

                                    if ( $noteCount < 10 ) {

                                        $noteTitle = str_ireplace(' ', '-',strtolower(preg_replace("/[^A-Za-z0-9 ]/", '', $statement['title']))) .'_'.date('Ymd',strtotime('-'.(10 + $noteCount).'days'));

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat','slat-callout-wr')),
                                            ),
                                            'title' => '<a href="#modal-selects-notes-view" data-toggle="modalpage">' . $noteTitle . '</a>',
                                            'meta' => array(
                                                array(
                                                    'label' => 'Regarding:',
                                                    'value' => $assessment['actors']['employee']['nameFirstLast'],
                                                ),
                                                array(
                                                    'label' => 'Updated:',
                                                    'value' => date('M j, Y',strtotime('-'.(10 + $noteCount).'days')),
                                                    'attributes' => array(
                                                        array('class','meta-callout'),
                                                    )
                                                ),
                                            ),
                                            'action' => array(
                                                'type' => 'custom',
                                                'content' => '',
                                            ),
                                            'nested' => array(
                                                'hide' => array('
                                                    <section class="section">
                                                        <h5>Detail</h5>
                                                        <p>This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                                    </section>
                                                    <section class="section">
                                                        <h5>Attachments</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fa fa-paperclip"></i> <a href="#">'.$noteTitle.'.doc</a></li>
                                                        </ul>
                                                    </section>
                                                '),
                                            )
                                        );

                                        echo createNoteSlat($slat);

                                        $noteCount++;
                                    }
                                }

                            } else {

                                // fill the quota with generic notes
                                for ($noteCount; $noteCount < 10; $noteCount++) {

                                    $slat = array(
                                        'attributes' => array(
                                            array('class',array('slat','slat-callout-wr')),
                                        ),
                                        'title' => '<a href="#modal-selects-notes-view" data-toggle="modalpage">Progress-Note_'.date('Ymd',strtotime('-'.(10 + $noteCount).'days')).'</a>',
                                        'meta' => array(
                                            array(
                                                'label' => 'Regarding:',
                                                'value' => 'Stephanie P. Juniper',
                                            ),
                                            array(
                                                'label' => 'Updated:',
                                                'value' => date('M j, Y',strtotime('-'.(10 + $noteCount).'days')),
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            ),
                                        ),
                                        'action' => array(
                                            'type' => 'custom',
                                            'content' => '',
                                        ),
                                        'nested' => array(
                                            'hide' => array('
                                                <section class="section">
                                                    <h5>Detail</h5>
                                                    <p>This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                                </section>
                                                <section class="section">
                                                    <h5>Attachments</h5>
                                                    <ul class="list-unstyled">
                                                        <li><i class="fa fa-paperclip"></i> <a href="#">document-title.doc</a></li>
                                                    </ul>
                                                </section>
                                            '),
                                        )
                                    );

                                    echo createNoteSlat($slat);

                                }

                            }

                        ?>

                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-success" data-dismiss="modal">Add Selected</a>
                    <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                    <div class="btn-group pull-right">
                        <button class="btn btn-default disabled"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-default<?= ($noteCount < 10)?' disabled':'' ?>"><i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-page" id="modal-selects-notes-view">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">View Note</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <h3>This is the note</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#modal-selects-notes-list" class="btn btn-success" data-toggle="modalpage">Select</a>
                    <a href="#modal-selects-notes-list" class="btn btn-default" data-toggle="modalpage">Back</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- /modal -->