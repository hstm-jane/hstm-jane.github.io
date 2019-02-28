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
                    <h3 class="title">Complete your HealthStream ID Registration</h3>
                    <div class="form-group">
                        <label for="email">PIN <small>Enter the unique PIN assigned during account creation (<a href="" data-toggle="tooltip" data-placement="top" data-trigger="hover" title="You must login to your organization’s HLC portal to retrieve your unique PIN">Forgot PIN?</a>)</small></label>
                        <input type="text" name="pin" class="form-control" placeholder="PIN" required>
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
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
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
                pin: {
                    validators: {
                        notEmpty: {
                            message: 'The PIN is required'
                        },
                        numeric: {
                            message: 'The PIN must be a number'
                        },
                        stringLength: {
                            max: 5,
                            message: 'The PIN must be 5 digits',
                            min: 5,
                        },
                    }

                }
            }
        });
    });
</script>

<?= createSiteEnd(); ?>