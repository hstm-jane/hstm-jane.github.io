<?php

include "includes/helpers/helpers.php";

?>
<?= createSiteStart($patterns['start']); ?>

<div class="authentication">
    <img src="/content/images/login-bg.jpg" class="bg">
</div>

<!-- Modal -->
<div id="modal-healthstream-id-create" class="modal show modal-external" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="branding">
                    <img src="/content/images/logo-healthstream-large.png" alt="HealthStream">
                </div>
            </div>
            <form data-toggle="validator" id="createIdForm" method="post" action="global-id-growl.php">
                <div class="modal-body">
                    <h3 class="title">Create a HealthStream ID</h3>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control  stored" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control stored" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <label>Personal Email Address</label>
                        <input type="email" name="email" id="email" class="form-control stored" placeholder="someone@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm Personal Email Address</label>
                        <input type="email" name="confirmEmail" id="confirmEmail" class="form-control stored" placeholder="someone@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Retype Password</label>
                        <input type="password" name="confirmPassword" class="form-control" required>
                    </div>
                    <div class="form-group nav-buttons">
                        <button class="btn btn-success" type="submit">Create Account</button>
                    </div>
                    <div class="form-group">
                        <p class="small">Already have a HealthStream ID? <a href="healthstream-id-login.php">Log In</a></p>
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
            }
        });
    });
</script>

<?= createSiteEnd(); ?>