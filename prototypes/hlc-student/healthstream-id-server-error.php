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
                <h3 class="title">Oops!</h3>

                <div class="form-group">
                    <p>Looks like something went wrong on our end.</p>
                </div>

                <div class="form-group nav-buttons">
                    <a href="index.php" class="btn btn-success" type="submit">HealthStream Home</a>
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