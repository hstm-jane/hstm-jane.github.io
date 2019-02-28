<?php

include "includes/helpers/helpers.php";

?>
<?= createSiteStart($patterns['start']); ?>

<div class="authentication">
    <img src="/content/images/login-bg.jpg" class="bg">
</div>

<!-- Modal -->
<div id="modal-healthstream-id-expired-verification-link" class="modal show modal-external" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="branding">
                    <img src="/content/images/logo-healthstream-large.png" alt="HealthStream">
                </div>
            </div>
            <div class="modal-body">
                <h3 class="title">Invalid Email Verification Link</h3>
                <p>The link you have used for verifying the email provided in HealthStream ID registration is no longer valid.</p>

                <div class="form-group nav-buttons">
                    <a href="healthstream-id-forgot-password-complete-change.php" class="btn btn-success" type="submit">Resend Verification Email</a>
                </div>
            </div>
            <div class="modal-footer">
                Copyright &copy; <?php echo date("Y") ?> HealthStream, Inc. All Rights Reserved.
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>