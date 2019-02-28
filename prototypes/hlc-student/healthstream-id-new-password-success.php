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
            <form data-toggle="validator" id="loginForm" method="post" action="portfolio.php">
                <div class="modal-body">
                    <h3 class="title">HealthStream ID Login</h3>
                    <div id="alert-forgot" class="alert alert-info">
                        Your new password was successfully created. Please log in again.
                    </div>
                    <div class="form-group">
                        <label for="email">Personal Email Address</label>
                        <input type="email" name="email" class="form-control personal-email" placeholder="someone@gmail.com" value="sjuniper@jupiterhealthcare.com" required>
                    </div>
                    <div class="form-group">
                        <div class="pull-right small">
                            <a href="healthstream-id-reset-password.php">Reset</a>
                        </div>
                        <label for="email" class="control-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group nav-buttons">
                        <button class="btn btn-success" type="submit">Log In</button>
                    </div>
                    <div class="form-group">
                        <p class="small">Need a HealthStream ID? <a href="healthstream-id-create.php">Create ID</a></p>
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