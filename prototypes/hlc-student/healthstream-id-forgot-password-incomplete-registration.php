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
                <h3 class="title">HealthStream ID Registration Not Completed</h3>

                <div class="form-group">
                    <p>You must confirm your HealthStream ID by following the instructions in the verification email sent to you during registration prior to changing your password.</p>
                </div>

                <div class="form-group nav-buttons">
                    <button class="btn btn-success">Resend Verification Email</button>
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
<script>
    $(function() {

        // PROTOTYPE: FORM VALIDATION
        $('#loginForm').formValidation({
            framework: 'bootstrap',
            fields: {
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Email is required'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter a password'
                        },
                    }
                },
            }
        });
    });
</script>

<?= createSiteEnd(); ?>