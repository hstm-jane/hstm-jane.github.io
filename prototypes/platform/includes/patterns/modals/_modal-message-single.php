
<!-- Message Modal -->
<div id="modal-message-single" class="modal fade modal-message-single" tabindex="-1">
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
                    <hr />


                <form data-toggle="validator" id="sendMessage" method="post" action="message-sent-growl.php">
                    <div class="form-group">
                        <label class="message-label">To:</label> Student Name
                    </div>
                    <div class="form-group">
                        <label class="message-label">CC:</label> User@CurrentUserEmail.com
                    </div>
                    <div class="form-group">
                        <label class="control-label">Subject</label>
                        <input type="text" name="subject" placeholder="Subject" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label class="control-label">Message</label>
                        <textarea class="form-control" name="message" placeholder="Message" rows="3"></textarea>
                    </div>
            </form>

                </section>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success">Send Message</a>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!--/Message Modal -->
