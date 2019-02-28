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

                    <?php

                        $focusNav = array(
                            'tabs' => array(
                                array(
                                    'active' => (!$show_password),
                                    'id' => 'tab-settings',
                                    'label' => 'Manage Settings',
                                ),
                                array(
                                    'active' => ($show_password),
                                    'id' => 'tab-password',
                                    'label' => 'Manage Password',
                                ),
                            ),
                        );
                        echo createFocusNav($focusNav);

                    ?>

                    <div class="tab-content">

                        <div class="tab-pane fade<?php echo (!$show_password)?' in active':''; ?>" id="tab-settings">
                            <section class="section">
                                <h2>Manage Global ID</h2>
                                <div id="alert-updated" class="alert alert-info">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    Your account information was successfully updated.
                                </div>
                                <form data-toggle="validator" id="createIdForm">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="first_name" id="first_name" class="form-control  stored" placeholder="First Name" value="Stephanie" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="last_name" id="last_name" class="form-control stored" placeholder="Last Name" value="Juniper" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Personal Email Address</label>
                                                sjuniper@jupitethealthcare.com (<a href="#" class="change-email">change</a>)
                                            </div>
                                            <div class="new-email">
                                                <div class="form-group">
                                                    <label>New Personal Email Address</label>
                                                    <input type="email" name="email" id="email" class="form-control stored" placeholder="someone@gmail.com">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirm New Personal Email Address</label>
                                                    <input type="email" name="confirmEmail" id="confirmEmail" class="form-control stored" placeholder="someone@gmail.com">
                                                </div>
                                            </div>
                                        </div> <!-- /column -->
                                    </div>

                                    <?php
                                        $stickybar = array(
                                            'sets' => array(
                                                array(
                                                    'html' => '
                                                        <button type="submit" class="btn btn-success update-account">Save</button>
                                                        <button type="button" class="btn btn-default">Cancel</button>
                                                    ',
                                                ),
                                            ),
                                        );
                                        echo createStickybar($stickybar);
                                    ?>

                                </form>
                                <div class="form-modified">Updated: Sep 20, 2013 at 3:27pm by sjuniper</div>
                            </section>
                        </div> <!-- / tab-pane -->

                        <div class="tab-pane fade<?php echo ($show_password)?' in active':''; ?>" id="tab-password">
                            <section class="section">
                                <h2>Manage Password</h2>
                                <div id="alert-forgot" class="alert alert-info">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    Your new password was successfully created. Please <a href="#modal-global-id-sign-in" data-toggle="modal"><strong>log in</strong></a> again.
                                </div>
                                <form data-toggle="validator" id="newPasswordForm" method="post" action="#">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label class="control-label" for="inputNewPassword">New Password</label>
                                                <input type="password" name="password" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="inputNewPasswordConfirm">Confirm New Password</label>
                                                <input type="password" name="confirmPassword" class="form-control" required>
                                            </div>
                                            <!--
                                            <div class="form-group">
                                                <label class="control-label" for="inputPasswordReminder">Password Reminder</label>
                                                <input type="text" id="inputPasswordReminder" class="form-control required">
                                                <span class="help-block">Please enter a password reminder.</span>
                                            </div>
                                            -->
                                        </div>
                                    </div>

                                    <?php
                                        $stickybar = array(
                                            'sets' => array(
                                                array(
                                                    'html' => '
                                                        <button type="submit" class="btn btn-success change-password">Change Password</button>
                                                        <button type="button" class="btn btn-default cancel-change">Cancel</button>
                                                    ',
                                                ),
                                            ),
                                        );
                                        echo createStickybar($stickybar);
                                    ?>

                                </form>
                                <div class="form-modified">Updated: Sep 20, 2013 at 3:27pm by sjuniper</div>
                            </section>
                        </div> <!-- / tab-pane -->
                    </div><!-- /tab-content -->
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



<!-- Modal -->
<div id="modal-global-id-sign-in" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Global ID Sign In</h4>
            </div>
            <form data-toggle="validator" id="loginForm" method="post" action="global-id-account-manage.php">
                <div class="modal-body">
                    <div id="alert-forgot" class="alert alert-info" style="display:none"></div>
                    <div id="alert-same" class="alert alert-info" style="display:none">The personal email address <b>sjuniper@jupiterhealthcare.com</b> is already associated with a global id account. If this is you, please sign in below. If this is not you, please <a href="#" class="global-id-create-same"><b>create a new account</b></a> with a different email address.</div>
                    <div class="form-group">
                        <label for="email">Personal Email Address</label>
                        <input type="email" name="email" class="form-control personal-email" placeholder="someone@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success login-submit" type="submit">Sign In</button>
                    <button class="btn btn-default pw-cancel">Cancel</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?= createFooter($patterns['footer']); ?>
<?= createSiteScripts(); ?>

<script>

$( document ).ready(function() {
    $('#alert-forgot').hide();
    $('.new-email').hide();
    $('#alert-updated').hide();

});


$( document ).on('click','.change-password',function(e){
    e.preventDefault();
    $('#alert-forgot').fadeIn('fast');
});

$( document ).on('click','.update-account',function(e){
    e.preventDefault();
    $('#alert-updated').fadeIn('fast');
});

$( document ).on('click','.change-email',function(e){
    e.preventDefault();
    $('.new-email').fadeIn('fast');
});


$(function(){

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
$('#newPasswordForm').formValidation({
    framework: 'bootstrap',
    fields: {
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

</script>
<?= createSiteEnd(); ?>


