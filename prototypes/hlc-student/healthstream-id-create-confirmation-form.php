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

            <form data-toggle="validator" id="createIdForm" method="post" action="#">
                <div class="modal-body">
                    <h3 class="title">Registration Confirmation</h3>
                    <p>Please enter your HealthStream ID password to confirm your registration.</p>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group nav-buttons">
                        <button class="btn btn-success" type="submit">Confirm Registration</button>
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

        // PROTOTYPE: FORM VALIDATION
        $('#createIdForm').formValidation({
            framework: 'bootstrap',
            fields: {
                password: {
                    validators: {
                        notEmpty: {
                            message: 'Password is required'
                        },
                    }
                },
            }
        }).on('success.form.fv', function(e) {
            e.preventDefault();
            window.location.href = 'healthstream-id-create-confirmation-complete-updated-password.php';
        });
    });
</script>
<?= createSiteEnd(); ?>