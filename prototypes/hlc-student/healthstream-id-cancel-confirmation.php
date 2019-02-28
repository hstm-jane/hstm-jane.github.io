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
                    <p>Due to the forgotten password, the existing pending confirmation will be cancelled. Please register again.</p>

                    <div class="form-group nav-buttons">
                        <a href="healthstream-id-create-combined.php" class="btn btn-success" type="submit">Continue</a> <a href="healthstream-id-create-confirmation-form-forgot-password.php" class="btn btn-default" type="submit">Cancel</a>
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
                first_name: {
                    validators: {
                        notEmpty: {
                            message: 'First name is required'
                        },
                    }
                },
                last_name: {
                    validators: {
                        notEmpty: {
                            message: 'Last name is required'
                        },
                    }
                },
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
                confirmEmail: {
                    validators: {
                        notEmpty: {
                            message: 'Confirmation Email is required'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        },
                        identical: {
                            field: 'email',
                            message: 'The email address and its confirm are not the same'
                        }
                    }
                },
                confirmPassword: {
                    validators: {
                        identical: {
                            field: 'password',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                },
                privacy: {
                    validators: {
                        notEmpty: {
                            message: 'Must be selected'
                        },
                    }
                },
            }
        });
    });
</script>
<?= createSiteEnd(); ?>