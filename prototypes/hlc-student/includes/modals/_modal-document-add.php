<!-- Modal -->
<div id="modal-document-add" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Document</h4>
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
                <div class="hidden-xs">
                    <a href="#modal-note-add" class="btn btn-success" data-toggle="modal" data-dismiss="modal">Save</a>
                    <a href="#modal-document-add" class="btn btn-success" data-toggle="modal" data-dismiss="modal">Save and Add Another</a>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
                <div class="visible-xs">
                    <div class="btn-group dropup">
                        <a href="#" class="btn btn-success">Save</a>
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-caret-up"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Save and Add Another</a></li>
                        </ul>
                    </div>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- /modal -->