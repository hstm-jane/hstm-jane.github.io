<?php

function createDocumentSlat($slat){
    $html = '
    <div class="checkable">
        '.createSlat($slat).'
        <div class="select">
            <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
        </div>
    </div>';
    return $html;
}

?>
    <!-- modal -->
    <div id="modal-select-documents-employee" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-page active" id="modal-selects-notes-list">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <h4 class="modal-title">My Documents</h4>
                        <div class="input-group modal-search">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                        </div>
                        <!-- /input-group -->
                    </div>
                    <div class="modal-body">
                        <section class="section modal-search-results">
                            <h3>Results <small>Showing 1-7 of 7</small></h3>
                            <div class="checkable">
                                <div class="slat slat-callout-wr">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">critical-thinking_20161108</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-label">Attachment:</span><span class="meta-value">Word Document</span></li>
                                            <li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Nov 8, 2016</span></li>
                                        </ul>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>This is a longer form area for the document description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                            </section>
                                        </div>
                                        <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                    </div>
                                </div>
                                <div class="select">
                                    <label>
                                        <input type="checkbox" class="checkbox"><span class="icon"></span></label>
                                </div>
                            </div>
                            <div class="checkable">
                                <div class="slat slat-callout-wr">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">communication_20161107</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-label">Attachment:</span><span class="meta-value">Image</span></li>
                                            <li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Nov 7, 2016</span></li>
                                        </ul>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>This is a longer form area for the document description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                            </section>
                                        </div>
                                        <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                    </div>
                                </div>
                                <div class="select">
                                    <label>
                                        <input type="checkbox" class="checkbox"><span class="icon"></span></label>
                                </div>
                            </div>
                            <div class="checkable">
                                <div class="slat slat-callout-wr">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">prioritization-organization-delegation_20161106</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-label">Attachment:</span><span class="meta-value">Word Document</span></li>
                                            <li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Nov 6, 2016</span></li>
                                        </ul>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>This is a longer form area for the document description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                            </section>
                                        </div>
                                        <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                    </div>
                                </div>
                                <div class="select">
                                    <label>
                                        <input type="checkbox" class="checkbox"><span class="icon"></span></label>
                                </div>
                            </div>
                            <div class="checkable">
                                <div class="slat slat-callout-wr">
                                    <div class="slat-default">
                                        <div class="title"><a href="#">relationship-based-care_20161105</a></div>
                                        <ul class="meta">
                                            <li><span class="meta-label">Attachment:</span><span class="meta-value">Portable Document File</span></li>
                                            <li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Nov 5, 2016</span></li>
                                        </ul>
                                    </div>
                                    <div class="slat-nested">
                                        <div class="collapse-group collapse">
                                            <section class="section">
                                                <h5>Description</h5>
                                                <p>This is a longer form area for the document description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                            </section>
                                        </div>
                                        <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                    </div>
                                </div>
                                <div class="select">
                                    <label>
                                        <input type="checkbox" class="checkbox"><span class="icon"></span></label>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="modal-footer">
                        <a href="#modal-note-add-employee" class="btn btn-success" data-toggle="modal" data-dismiss="modal">Add Selected</a>
                        <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                        <div class="btn-group pull-right">
                            <button class="btn btn-default disabled"><i class="fa fa-chevron-left"></i></button>
                            <button class="btn btn-default<?= ($documentCount < 10)?' disabled':'' ?>"><i class="fa fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->