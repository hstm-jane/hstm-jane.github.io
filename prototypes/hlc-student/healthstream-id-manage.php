<?php

$show_password = (!empty($_GET['view']) &&  $_GET['view'] === 'password');

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Manage HealthStream ID™';
$patterns['header']['mainNavActive'] = 'none';
$patterns['focus']['title'] = 'Manage HealthStream ID';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<style>
    .password-requirements {
        font-size: 12px;
        margin-top: 10px;
        margin-bottom: -3px;
    }
    .password-toggle-text {
        font-size: 12px;
        display: block;
       
    }
    #nrp-instructor{
        display:none;
            transition: all .2s ease;
    }
    #nrp-instructor.true{
        display:block;
            transition: all .2s ease;
    }
</style>
<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-box section-main" data-equalize="layout-columns">
                    <section class="section">
                        <h2>Manage Your HealthStream ID</h2><p><a href="#modal-hstm-id-explanation" data-toggle="modal">What is a HealthStream ID?</a></p>
                        <div id="alert-same" class="alert alert-info" style="display:none">The personal email address <b>sjuniper@jupiterhealthcare.com</b> is already associated with a global id account. If this is you, please <a href="#modal-global-id-sign-in" data-toggle="modal"><strong>log in</strong></a>. If this is not you, please create a new account with a different email address.</div>
                        <form data-toggle="validator" id="createIdForm" method="post" action="global-id-growl.php">
                            
                              
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" id="first_name" class="form-control  stored"  required>
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" id="last_name" class="form-control stored" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Personal Email Address</label>This will be your HealthStream ID. 
                                        <input type="email" name="email" id="email" class="form-control stored" placeholder="example@gmail.com" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Personal Email Address</label>
                                        <input type="email" name="confirmEmail" id="confirmEmail" class="form-control stored" placeholder="example@gmail.com" required>
                                    </div>
                                 
                                  
                                    <div class="form-group">
                                        <label>Link NRP Instructor Account</label>                                        
                                        <label class="checkbox js-nrp-checkbox"><input type="checkbox"> I'm a 6th Edition NRP Instructor</label>   
                                        <div class="row">
                                            <div class="col-md-12 col-md-offset-1">
                                                <div id="nrp-instructor" >
                                                    <p>
                                                        Link your NRP LMS information to this email by providing your 7 digit instructor login and password:
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>7 Digit NRP Instructor ID (no dashes)</label>
                                                                <input type="text" name="nrpID" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Password for AAP HLC</label>
                                                                <input type="password" name="nrpPassword" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                             
                                    </div>
             
                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '<button type="submit" class="btn btn-success">Save</button>',
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

<!-- Modal -->
<div id="modal-global-id-sign-in" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Global ID Sign In</h4>
            </div>
            <form data-toggle="validator" id="loginForm" method="post" action="index.php">
                <div class="modal-body">
                    <div id="alert-forgot" class="alert alert-info" style="display:none"></div>
                    <div id="alert-same" class="alert alert-info" style="display:none">The personal email address <b>sjuniper@jupiterhealthcare.com</b> is already associated with a global id account. If this is you, please sign in below. If this is not you, please <a href="#" class="global-id-create-same"><b>create a new account</b></a> with a different email address.</div>
                    <div class="form-group">
                        <label for="email">Personal Email Address</label>
                        <input type="email" name="email" class="form-control personal-email" placeholder="someone@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <div class="pull-right small">
                            <a href="#" class="pw-reset">Reset</a>
                        </div>
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

<!-- Modal -->
<div id="modal-global-id-forgot" class="modal fade authentication">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close pw-cancel" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Reset Global ID Password</h4>
            </div>
            <form data-toggle="validator" id="forgotPasswordForm">
                <div class="modal-body">
                    <p class="messaging-text">To reset your password, please enter your Personal Email Address</p>
                    <div id="alert-error" class="alert alert-danger" style="display:none">
                        We could not find you based on the information provided. You can try entering the information again, or you can <a href="#" class="create-new"><b>create a new account</b>.</a>
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="text" name="email2" class="form-control email-address" placeholder="someone@gmail.com">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success pw-submit" type="submit">Submit</button>
                    <button class="btn btn-default pw-cancel">Cancel</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal -->
<div id="modal-hstm-id-explanation" class="modal fade authentication">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close pw-cancel" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">What is a HealthStream ID?</h4>
            </div>
            
                <div class="modal-body">
                    <p>
                        A HealthStream ID is your own personal HealthStream account to ensure you have ongoing access to certain records.   It is separate from your login ID/account at your HealthStream site.  It cannot be used to log in to HealthStream at this time. 
                    </p>
                    <p>
                        It allows certain profile elements you earned or documented in HealthStream (e.g. NRP information) to be accessible/shared with other HealthStream sites you belong to.  This will allow you to maintain a lifelong learning record as you evolve in your career. 
                    </p>
                    <p>
If you are an NRP Instructor, your completions and instructor-led events at the HealthStream sites you are associated with via the HealthStream ID all count towards the qualifications for renewal.
                    </p>
                </div>
                <div class="modal-footer">
                   
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?= createFooter($patterns['footer']); ?>
<?= createSiteScripts(); ?>

<script>


$(function(){
 $(".js-nrp-checkbox input").change(function(){
     $("#nrp-instructor").toggleClass("true");
 });
    $('#modal-global-id-sign-in')
        .on('click','.pw-reset',function(e){
            e.preventDefault();
            $('#modal-global-id-sign-in').modal('hide');
            var delay = setTimeout(function(){ $('#modal-global-id-forgot').modal('show'); }, 400);
        })
        .on('click','.pw-cancel',function(e){
            e.preventDefault();
            $('#modal-global-id-sign-in').modal('hide');
            var delay = setTimeout(function(){ $('#modal-global-id').modal('show'); }, 400);
        });

    $('#modal-global-id-forgot')
        .on('click','.pw-cancel',function(e){
            e.preventDefault();
            $("#modal-global-id-forgot").modal('hide');
            var delay = setTimeout(function(){ $('#modal-global-id-sign-in').modal('show'); }, 400);
        })
        .on('click','.create-new',function(e){
            e.preventDefault();
            $("#modal-global-id-forgot").modal('hide');
            var delay = setTimeout(function(){ $('#modal-global-id-create').modal('show'); }, 400);
        })
        .on('click','.pw-submit',function(e){
            var accountMatch = "sjuniper@jupiterhealthcare.com";
            var accountEntered = $('#modal-global-id-forgot .email-address').val();
            e.preventDefault();

            if (accountMatch == accountEntered) { // User Recognized
                $('#modal-global-id-forgot').modal('hide');
                $('#modal-global-id-sign-in').modal('show');
                $( "#alert-forgot" ).html( "Instructions for reseting your password have been sent to your account email." ).fadeIn();
            } else {
                $( "#alert-error" ).show();
            }
        });

    $('#createIdForm').on('success.form.fv', function(e) {
        // Prevent form submission
        e.preventDefault();

        // Do whatever you want here ...
        var knownEmail = 'sjuniper@jupiterhealthcare.com';
        var enteredEmail = $('#email').val();

        if (knownEmail == enteredEmail) {
            $('#alert-same').fadeIn('fast');
        }
        else {
            window.location = "global-id-growl.php";
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
            password: {
                validators: {
                    regexp: {
                        regexp: /^(((?=.*[a-z])(?=.*[A-Z])(?=.*[\d]))|((?=.*[a-z])(?=.*[A-Z])(?=.*[\W]))|((?=.*[a-z])(?=.*[\d])(?=.*[\W]))|((?=.*[A-Z])(?=.*[\d])(?=.*[\W]))).{8,}$/,
                        message: 'Password must at least 8 characters long and contain 3 of 4 elements: one upper-case letter, one lower-case letter, one number, and one special character (!,@,#,$,&,*).'
                    },
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

</script>
<?= createSiteEnd(); ?>


