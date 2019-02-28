<?php

$show_password = (!empty($_GET['view']) &&  $_GET['view'] === 'password');

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My Global ID';
$patterns['header']['mainNavActive'] = 'none';
$patterns['focus']['title'] = 'My Global ID';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-box section-main" data-equalize="layout-columns">
                    <section class="section">
                        <h2>Reset Password</h2>
                        <form data-toggle="validator" id="forgotPasswordForm">
                            <div class="row">
                                <div class="col-sm-8">
                                    <p class="messaging-text">To reset your password, please enter your Personal Email Address</p>
                                    <div id="alert-error" class="alert alert-danger" style="display:none">
                                        We could not find you based on the information provided. You can try entering the information again, or you can <a href="global-id-account-create.php"><b>create a new account</b>.</a>
                                    </div>
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="text" name="email2" class="form-control email-address" placeholder="someone@gmail.com">
                                    </div>
                                </div> <!-- /column -->
                            </div>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '
                                                <button class="btn btn-success pw-submit" type="submit">Submit</button>
                                                <a href="global-id-login.php" class="btn btn-default">Cancel</a>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </form>
                    </section>
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php include_sidebar() ?>
                </section> <!-- /section-sidebar -->
            </div><!-- /column -->

        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->



<?= createFooter($patterns['footer']); ?>
<?= createSiteScripts(); ?>

<script>


$(function(){

    $(document).on('click','.pw-submit',function(e){
        var accountMatch = "sjuniper@jupiterhealthcare.com";
        var accountEntered = $('.email-address').val();
        e.preventDefault();

        if (accountMatch == accountEntered) { // User Recognized
            window.location = "global-id-reset-password-sent.php";
        } else {
            $( "#alert-error" ).show();
        }
    });
    $('#forgotPasswordForm').formValidation({
        framework: 'bootstrap',
        fields: {
            email2: {
                validators: {
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
        }
    });
});

</script>
<?= createSiteEnd(); ?>


