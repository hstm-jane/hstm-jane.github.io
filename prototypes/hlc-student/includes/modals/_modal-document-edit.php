<!-- Modal -->
<div id="modal-document-edit" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Manage Document</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Document Name</label>
                    <input type="text" class="form-control" value="This is the document name">
                </div>
                <div class="form-group">
                    <label class="control-label">Description <small>Optional</small></label>
                    <textarea class="form-control">This is a longer form area for the file description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <ul class="control-attachments">
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                </div>
                <div class="form-group form-modified">
                    <ul class="list-unstyled">
                        <li>Owner: GEN01-ACME General Medical Center</li>
                        <li>Created: Mar. 1, 2014 at 2:13pm by Stephanie Juniper</li>
                        <li>Updated: Mar. 1, 2014 at 2:13pm by Stephanie Juniper</li>
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