<?php

include "includes/helpers/helpers.php";

?>
<?= createSiteStart($patterns['start']); ?>

<div class="authentication">
    <img src="/content/images/login-bg.jpg" class="bg">
</div>

<!-- Modal -->
<div id="modal-healthstream-id-reset-password" class="modal show modal-external" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="branding">
                    <img src="/content/images/logo-healthstream-large.png" alt="HealthStream">
                </div>
            </div>
            <form data-toggle="validator" id="forgotPasswordForm" method="post" action="healthstream-id-forgot-password-complete-change.php">
                <div class="modal-body">
                    <h3 class="title">Forgotten Password Change Request</h3>
                    <div class="form-group">
                        <label>Please enter email address used in registering for HealthStream ID</label>
                        <input type="text" name="email" class="form-control email-address" placeholder="someone@gmail.com">
                    </div>
                    <div class="form-group nav-buttons">
                        <button class="btn btn-success" type="submit">Submit</button>
                        <a href="healthstream-id-login.php" class="btn btn-default">Cancel</a>
                    </div>
                </div>
                <div class="modal-footer">
                    Copyright &copy; <?php echo date("Y") ?> HealthStream, Inc. All Rights Reserved.
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function() {

        $('#forgotPasswordForm').formValidation({
            framework: 'bootstrap',
            fields: {
                email: {
                    validators: {
                        emailAddress: {
                            message: 'Email address format is invalid'
                        }
                    }
                },
            }
        });
    });
</script>

<?= createSiteEnd(); ?>