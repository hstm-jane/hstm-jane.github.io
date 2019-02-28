<?php

include "includes/helpers/helpers.php";

?>
<?= createSiteStart($patterns['start']); ?>

<div class="authentication">
    <img src="/content/images/login-bg.jpg" class="bg">
</div>

<!-- Modal -->
<div id="modal-healthstream-id-reset-password-sent" class="modal show modal-external" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="branding">
                    <img src="/content/images/logo-healthstream-large.png" alt="HealthStream">
                </div>
            </div>
            <div class="modal-body">
                <h3 class="title">Unrecognized Email Address or Password</h3>

                <div class="form-group">
                    <p>You have entered an email address and password combination that is not recognized as having been used to register for a HealthStream ID.</p>
                </div>

                <div class="form-group nav-buttons">
                    <a href="healthstream-id-login-already-have-one-summit.php" class="btn btn-success" type="submit">Try Again</a>
                </div>

                <div class="form-group">
                    <p class="small">Need a HealthStream ID? <a href="healthstream-id-create-combined-summit.php">Create ID</a></p>
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