<!--Modal -->
<div id="modal-goal-add" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-page active" id="modal-page-goal-new">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Add Goal</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label">Parent Goal <small>Optional</small></label>
                        <label class="control-label"><small></small></label>
                        <h5 class="description">Selecting a Parent Goal will convert this goal into a Derived Goal.</h5> 
                         <span class="goal-parent-action goal-add-parent collapse"><a href="#modal-page-attach-goal" data-toggle="modalpage">Select Parent Goal</a></span>
                         <!-- <button class="btn btn-link">Select Parent Goal</button> -->
                        <span class="goal-parent-action goal-edit-parent collapse">Goal number 1  ( <a href="#modal-page-attach-goal" data-toggle="modalpage">Change</a> | <a href="#" class="remove">Remove</a> )</span>
                        <span class="goal-parent-action goal-view-parent collapse">Goal number 1  ( <a href="#modal-page-attach-goal" data-toggle="modalpage">View</a> )</span>

                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="control-label">Summary</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Detail</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Start Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">End Date <small>Optional</small></label>
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Type</label>
                                <input type="text" class="form-control" value="Individual" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <select class="form-control">
                                    <option>Not Yet Started</option>
                                    <option>In Progress</option>
                                    <option>Complete</option>
                                    <option>Not Applicable</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Resources <small>Optional</small></label>
                        <p><a href="#modal-page-attach-resource" data-toggle="modalpage">Attach Existing Resources</a> | <a href="#modal-page-new-resource" data-toggle="modalpage">New Resource</a></p>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="control-label">Progress <small>Optional</small></label>
                        <p><a href="#modal-page-add-progress" data-toggle="modalpage">Add Progress</a></p>
                        <!-- <textarea class="form-control"></textarea> -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" data-dismiss="modal">Save</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
            <div class="modal-page " id="modal-page-attach-goal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Add Goal: Select Parent Goal</h4>
                    <div class="input-group modal-search">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div><!-- /input-group -->
                </div>
                <div class="modal-body">
                    <section class="section modal-search-results">
                        <h3>Results <small>Showing 1-10 of 15</small></h3>
                        
                        <div class="checkable checkable-single">
                            <div class="slat slat-callout-wr">
                                <div class="slat-default">
                                    <div class="title"><a href="#modal-page-view-goal" data-toggle="modalpage">This is the title of the selected derived goal</a></div>
                                    <ul class="meta">
                                        <li><span class="meta-type">Individual</span></li>
                                        <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                                        <li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Jan 1, 2015</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="select">
                                <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
                            </div>
                        </div>

                        <div class="checkable checkable-single">
                            <div class="slat slat-callout-wr">
                                <div class="slat-default">
                                    <div class="title"><a href="#modal-page-view-goal" data-toggle="modalpage">This is the title of a goal</a></div>
                                    <ul class="meta">
                                        <li><span class="meta-type">Individual</span></li>
                                        <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                                        <li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Jan 1, 2015</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="select">
                                <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
                            </div>
                        </div>


                       
                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#modal-page-goal-new" class="btn btn-success attach-parent" data-toggle="modalpage">Add Selected</a>
                    <a href="#modal-page-goal-new" class="btn btn-default" data-toggle="modalpage">Cancel</a>
                    <div class="btn-group pull-right">
                        <button class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-page " id="modal-page-view-goal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Add Goal: View Parent Goal</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <h3>Summary</h3>
                        <p>This is the summary of the derived goal. This is the summary of the derived goal.</p>
                    </section>
                    <section class="section">
                        <h3>Detail</h3>
                        <p>This is the detail of the derived goal. This is the detail of the derived goal.</p>
                    </section>
                    <section class="section">
                        <h3>Resources</h3>
                        <ul class="control-attachments">
                            <li><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This is a document name</a></li>
                            <li><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This is a document with an annoyingly long name that will probably wrap and be uppercase and not have spaces</a></li>
                            <li><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This is a document name</a></li>
                        </ul>
                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#modal-page-goal-new" class="btn btn-success attach-parent" data-toggle="modalpage">Attach</a>
                    <a href="#modal-page-attach-goal" class="btn btn-default" data-toggle="modalpage">Back</a>
                </div>
            </div>
            <div class="modal-page " id="modal-page-attach-resource">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Add Goal: Attach Existing Resources</h4>
                    <div class="input-group modal-search">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div><!-- /input-group -->
                </div>
                <div class="modal-body">
                    <section class="section modal-search-results">
                        <h3>Results <small>Showing 1-10 of 15</small></h3>

                        <div class="checkable">
                            <div class="slat slat-callout-wr">
                                <div class="slat-default">
                                    <div class="title"><a href="#" data-toggle="modalpage">This document is already attached</a></div>
                                    <ul class="meta">
                                        <li><span class="meta-label">Attachment:</span><span class="meta-value">Excel Spreadsheet</span></li>
                                        <li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Mar 1, 2014 at 2:13pm</span></li>
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
                                <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
                            </div>
                        </div>

                         <div class="checkable">
                            <div class="slat slat-callout-wr">
                                <div class="slat-default">
                                    <div class="title"><a href="#" data-toggle="modalpage">This is the document name</a></div>
                                    <ul class="meta">
                                        <li><span class="meta-label">Attachment:</span><span class="meta-value">Portable Document File</span></li>
                                        <li class="meta-callout"><span class="meta-label">Updated:</span><span class="meta-value">Mar 1, 2014 at 2:13pm</span></li>
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
                                <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
                            </div>
                        </div>
                        
                     
                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#modal-page-goal-new" class="btn btn-success add-resource" data-toggle="modalpage">Add Selected</a>
                    <a href="#modal-page-goal-new" class="btn btn-default" data-toggle="modalpage">Cancel</a>
                    <div class="btn-group pull-right">
                        <button class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-page " id="modal-page-new-resource">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Add Goal: Attach New Resource</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label">Document Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Description <small>Optional</small></label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Attachment</label>
                        <input type="file" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#modal-page-goal-new" class="btn btn-success" data-toggle="modalpage">Done</a>
                    <a href="#modal-page-goal-new" class="btn btn-default" data-toggle="modalpage">Cancel</a>
                </div>
            </div>
            <div class="modal-page " id="modal-page-add-progress">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Add Goal: Add Progress</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label">Status</label>
                        <select class="form-control"><option>In Progress</option></select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Progress</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Documents <small>Optional</small></label>
                        <p><a href="#modal-page-attach-resource" data-toggle="modalpage">Attach Existing Resource</a> | <a href="#modal-page-new-resource" data-toggle="modalpage">New Resource</a></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#modal-page-goal-new" class="btn btn-success" data-toggle="modalpage">Done</a>
                    <a href="#modal-page-goal-new" class="btn btn-default" data-toggle="modalpage">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- /modal