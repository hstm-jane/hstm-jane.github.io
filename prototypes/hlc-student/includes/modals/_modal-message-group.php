<div id="modal-message-group" class="modal fade in modal-lg modal-message-group" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i>
                </button>
                <h4 class="modal-title">Message Team</h4>
            </div>
            <div class="modal-body">
                <form id="SendGroupMessage" >
                    <div class="form-group">
                        <div class="row">
                            <label class="control-label col-sm-12">To</label>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <input type="text" name="subject_group" class="form-control hidden-xs" disabled value="55 selected recipients">
                                <input type="text" name="subject_group" class="form-control visible-xs" disabled value="55 selected ">
                            </div>
                            <div class="col-xs-6 edit-selected">
                                <a href="#modal-team-message-all" data-toggle="modal" data-dismiss="modal">Edit Selected</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="control-label  col-sm-12">CC</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="subject_group" class="form-control" disabled value="User@CurrentUserEmail.com">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Subject</label>
                        <input type="text" name="subject_group" id="subject_group" class="form-control" required placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Message</label>
                        <textarea class="form-control" name="message_group" id="message_group" rows="3" placeholder="Message"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" type="submit" class="btn btn-success btn-send-message">Send Message</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>