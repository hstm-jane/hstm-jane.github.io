<?php

include "includes/helpers/helpers.php";

?>
<?= createSiteStart($patterns['start']); ?>

<div class="authentication">
    <img src="/content/images/login-bg.jpg" class="bg">
</div>

<!-- Modal -->
<div id="modal-healthstream-id-new-password" class="modal show modal-external" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="branding">
                    <img src="/content/images/logo-healthstream-large.png" alt="HealthStream">
                </div>
            </div>
            <form data-toggle="validator" id="newPasswordForm" method="post" action="healthstream-id-reset-password-sent.php">
                <div class="modal-body">
                    <h3 class="title">Create New HealthStream ID Password</h3>
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Retype New Password</label>
                        <input type="password" name="confirmPassword" class="form-control" required>
                    </div>
                    <div class="form-group nav-buttons">
                        <a href="healthstream-id-new-password-success.php" class="btn btn-success" type="submit">Create Password</a>
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
        $('#newPasswordForm').formValidation({
            framework: 'bootstrap',
            fields: {
                confirmPassword: {
                    validators: {
                        identical: {
                            field: 'password',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                },
            }
        });
    });
</script>
<?= createSiteEnd(); ?>