<?php

include "includes/helpers/helpers.php";

?>
<?= createSiteStart($patterns['start']); ?>

<style>
    .password-requirements {
        font-size: 12px;
    }
    .password-toggle-text {
        font-size: 12px;
        margin-bottom: 10px;
        margin-top: -3px;
        display: block;
    }
</style>

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
            <form data-toggle="validator" id="newPasswordForm" method="post" action="healthstream-id-forgot-password-change-success.php">
                <div class="modal-body">
                    <h3 class="title">Enter New Password</h3>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="collapse-group collapse password-requirements" style="height: 0px;">
                            Your password:
                            <ul>
                                <li>Must be al least 8 characters</li>
                                <li>Cannot contain your first or last name</li>
                                <li>
                                    Must contain 3 of the following 4 elements
                                    <ol>
                                        <li>Lowercase letters</li>
                                        <li>Uppercase letters</li>
                                        <li>Numbers</li>
                                        <li>Special characters (!,@,#,*,%,&amp;, etc.)</li>
                                    </ol>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="collapse-toggle toggle-text-initialized password-toggle-text" data-toggle-text="Show password requirements|Hide password requirements">Show password requirements<i class="fa-fw fa-caret-down fa"></i></a>

                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Retype Password</label>
                        <input type="password" name="confirmPassword" class="form-control" required>
                    </div>
                    <div class="form-group nav-buttons">
                        <button class="btn btn-success" type="submit">Create Password</button>
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
                password: {
                    validators: {
                        regexp: {
                            regexp: /^(((?=.*[a-z])(?=.*[A-Z])(?=.*[\d]))|((?=.*[a-z])(?=.*[A-Z])(?=.*[\W]))|((?=.*[a-z])(?=.*[\d])(?=.*[\W]))|((?=.*[A-Z])(?=.*[\d])(?=.*[\W]))).{8,}$/,
                            message: 'Password must be at least 8 characters long.<br>Password must contain at least three of the following: Uppercase letter, one Lowercase letter, Number, Special Character (!,@,#,$,&,*).<br>Password cannot contain your first or last name.<br>Password cannot exceed 100 characters.'
                        },
                    }
                },
                confirmPassword: {
                    validators: {
                        identical: {
                            field: 'password',
                            message: 'The password and its confirm do not match.'
                        }
                    }
                },
            }
        });
    });
</script>
<?= createSiteEnd(); ?>