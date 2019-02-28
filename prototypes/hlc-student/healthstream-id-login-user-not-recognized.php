<?php

include "includes/helpers/helpers.php";

?>
<?= createSiteStart($patterns['start']); ?>

<div class="authentication">
    <img src="/content/images/login-bg.jpg" class="bg">
</div>

<!-- Modal -->
<div id="modal-healthstream-id-log-in" class="modal show modal-external" data-backdrop="static">
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
                    <div id="alert-error" class="alert alert-danger">
                        We could not find you based on the information provided. You can try entering the information again, or you can <a href="healthstream-id-create.php"><b>create a new account</b>.</a>
                    </div>
                    <div class="form-group">
                        <label for="email">Personal Email Address</label>
                        <input type="email" name="email" class="form-control personal-email" placeholder="someone@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <div class="pull-right small">
                            <a href="healthstream-id-forgot-password.php">Forgot?</a>
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