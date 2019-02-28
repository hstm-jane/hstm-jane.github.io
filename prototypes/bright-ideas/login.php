<?php
include "includes/helpers.php";


$options = json_decode('{
    "head": {
        "title" : "Login"
    }
}',true);


include_site_start($options);

?>
<div class="site-login">

    <div class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="branding">
                        <a href="/"><img src="/content/images/logo-healthstream-large.png" alt="HealthStream"></a>
                    </div>
                </div>
                <div class="modal-body">
                    <section class="section section-toggle active" id="signin">
                        <h3>Sign In</h3>
                        <form name="login" action="" method="post">
                            <div class="form-group">
                                <label for="username">User ID</label>
                                <input type="text" name="username" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" value="">
                            </div>
                            <div class="form-group form-actions">
                                <input type="submit" name="submit" value="Sign In"  href="/" class="btn btn-primary btn-lg">
                            </div>
                        </form>
                    </section>
                    <section class="section section-toggle" id="reset">
                        <h3>Reset Password</h3>
                        <p>Enter your User ID to have instructions for resetting your password emailed to you.</p>
                        <div class="form-response">
                            <div class="alert alert-success">
                                An email has been sent to {email address} with instructions for resetting your password.
                            </div>
                            <div class="alert alert-danger">
                                That User ID is not recognized. Please try again or contact your administrator.
                            </div>
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="userID">User ID</label>
                                <input type="text" name="userID" class="form-control">
                            </div>
                            <div class="form-group form-actions">
                                <a href="#" class="btn btn-primary btn-reset">Send Reset Email</a> <a href="#signin" class="btn btn-default btn-cancel">Cancel</a>
                            </div>
                        </form>
                    </section>
                    <section class="section section-toggle" id="reminder">
                        <h3>Password Reminder</h3>
                        <p>Enter your User ID to retreive your password reminder.</p>
                        <form>
                            <div class="form-response">
                                <div class="alert alert-danger">
                                    Please enter your User ID.
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="userID">User ID</label>
                                <input type="text" name="userID" class="form-control">
                            </div>
                            <div class="form-group form-actions">
                                <a href="#" class="btn btn-primary btn-reminder">Show Reminder</a> <a href="#" class="btn btn-default btn-cancel">Cancel</a>
                            </div>
                        </form>
                    </section>
                    <section class="section section-toggle" id="instructions">
                        <h3>Instructions</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </section>
                    <section class="section">
                        <ul class="nav" id="nav-login">
                            <li class="active"><a href="#signin">Sign In</a></li>
                            <li><a href="#reminder">Password Reminder</a></li>
                            <li><a href="#reset">Reset Password</a></li>
                            <li><a href="#instructions">Instructions</a></li>
                        </ul>
                    </section>
                </div><!-- /modal-body -->
                <div class="modal-footer">
                    <div class="copyright">Copyright &copy; <?= date('Y') ?> HealthStream, Inc. All Rights Reserved.</div>
                </div><!-- /modal-footer -->
            </div><!-- /modal-content -->
        </div><!-- /modal-dialog -->
    </div><!-- /modal -->

</div>


<?php
include_site_scripts($options);
?>
<script>
    $(function(){
        $('#nav-login a').click(function(e){
            var $el = $(this),
                $target = $($el.attr('href'));
            $el.closest('li').addClass('active').siblings().removeClass('active');
            $target.addClass('active').siblings().removeClass('active');
            e.preventDefault();
        });
        $('a.btn-cancel').click(function(e){
            $('#nav-login a[href="#signin"]').click();
            e.preventDefault();
        });
    });
</script>
<?php
include_site_end($options);
?>