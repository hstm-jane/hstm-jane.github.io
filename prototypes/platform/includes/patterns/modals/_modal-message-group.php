<!-- Message Modal -->
<div id="modal-message-group" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i>
                </button>
                <h4 class="modal-title">Send Message</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h3>Event Title</h3>
                    <form data-toggle="validator" id="sendMessageGroup" method="post" action="message-sent-growl.php">
                        <div class="form-group">
                            <label class="control-label">To</label>
                            <select id="inputPresets" class="form-control">
                                <option>All</option>
                                <option>All Instructors</option>
                                <option>All Students</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Subject</label>
                            <input type="text" name="subject_group"  class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Message</label>
                            <textarea class="form-control" name="message_group" rows="3" placeholder="Message"></textarea>
                        </div>

                    </section>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Send Message</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--/Message Modal -->
