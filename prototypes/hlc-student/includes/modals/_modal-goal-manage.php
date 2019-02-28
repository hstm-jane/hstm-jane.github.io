<!-- Modal -->
<div id="modal-goal-manage" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
         <div class="modal-page active" id="modal-page-manage-goal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Manage Goal</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                        <label class="control-label">Parent Goal <small>Optional</small></label>
                        <label class="control-label"><small></small></label>
                        <h5 class="description collapse">Selecting a Parent Goal will turn this goal into a Derived Goal.</h5> 
                        <span class="goal-parent-action goal-view-parent">Goal number 1  ( <a href="#modal-page-manage-view-goal" data-toggle="modalpage">View</a> )</span>
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
                    <ul class="control-attachments">
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This is a document name</a></li>
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This is a document with an annoyingly long name that will probably wrap and be uppercase and not have spaces</a></li>
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This is a document name</a></li>
                    </ul>
                    <p><a href="#">Attach Existing Resources</a> | <a href="#">New Resource</a></p>
                </div>
                <hr>
                <div class="form-group">
                    <label class="control-label">Progress <small>Optional</small></label>
                    <div class="well well-sm" style="max-height: 200px; overflow-y: auto; overflow-x: hidden;">
                        <div class="row row-spaced">
                            <div class="col-sm-3">In Progress</div>
                            <div class="col-sm-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                            <div class="col-sm-3">Apr 9, 2014</div>
                        </div>
                        <div class="row row-spaced">
                            <div class="col-sm-3">In Progress</div>
                            <div class="col-sm-6">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
                            <div class="col-sm-3">Apr 9, 2014</div>
                        </div>
                        <div class="row row-spaced">
                            <div class="col-sm-3">In Progress</div>
                            <div class="col-sm-6">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="col-sm-3">Apr 9, 2014</div>
                        </div>
                    </div>
                    <p><a href="#">Add Progress</a></p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button class="btn btn-danger pull-right" data-dismiss="modal">Delete</button>
            </div>
</div>


            <div class="modal-page " id="modal-page-manage-view-goal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Manage Goal: View Parent Goal</h4>
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
                    <a href="#modal-page-manage-goal" class="btn btn-default" data-toggle="modalpage">Back</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- /modal -->