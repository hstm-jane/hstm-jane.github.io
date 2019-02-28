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
                        <h2>Sign In</h2>
                        <div id="alert-forgot" class="alert alert-info" style="display:none"></div>

                        <form data-toggle="validator" id="loginForm" method="post" action="index.php">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label for="email">Personal Email Address</label>
                                        <input type="email" name="email" class="form-control personal-email" placeholder="someone@gmail.com" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="pull-right small">
                                            <a href="global-id-reset-password.php">Reset</a>
                                        </div>
                                        <label for="email" class="control-label">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>

                                    </div>
                                </div> <!-- /column -->
                            </div>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '<button type="submit" class="btn btn-success">Submit</button>',
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


