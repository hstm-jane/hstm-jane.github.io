<?php

include "includes/helpers/helpers.php";

?>
<?= createSiteStart($patterns['start']); ?>
<style>
.nav-tabs {
    position: relative;
    z-index: 100;
    margin-bottom: -1px;
}
.nav-tab {
        display: inline-block;
    padding: 10px;
    border: 1px solid transparent;
    border-bottom-color: #ddd;
    font-size: 18px;
    font-weight: 300;
    line-height: 1;
    color: #555;
    text-decoration: none;
}
.login-window .nav-tab.selected {
    border-color: #ddd;
    border-bottom-color: #fff;
}
</style>
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
                   <div class="nav-tabs">
                        <a id="signinTab" href="#tabSignin" class="nav-tab selected">Sign In</a>
                        <a id="instructionsTabHeader" href="#tabInstructions" class="nav-tab">Instructions</a>
            </div>
                <div class="modal-body">
                 
                    <section><button class="btn btn-lg btn-default">Log in with Blue Elephant ID</button></section>
                    <section><hr></section>
                    <!--<h3 class="title">HealthStream ID Login</h3>-->
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