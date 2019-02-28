<!-- Modal -->
<div id="modal-note-edit" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Manage Note</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Subject</label>
                    <input type="text" class="form-control" value="This is my note">
                </div>
                <div class="form-group">
                    <label class="control-label">Detail</label>
                    <textarea class="form-control">This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Documents <small>Optional</small></label>
                    <ul class="control-attachments">
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This is a document with an annoyingly long name that will probably wrap and be uppercase and not have spaces</a></li>
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This is a document name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a>
                    </div>
                </div>
                <div class="form-group form-modified">
                    <ul class="list-unstyled">
                        <li>Created: Sep. 18, 2013 at 3:23pm by Stephanie Juniper</li>
                        <li>Updated: Sep. 18, 2013 at 3:23pm by Stephanie Juniper</li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button class="btn btn-danger pull-right" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->