<?php

$show_password = (!empty($_GET['view']) &&  $_GET['view'] === 'password');

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Manage HealthStream ID™';
$patterns['header']['mainNavActive'] = 'none';
$patterns['focus']['title'] = 'Manage HealthStream ID';


$patterns['header']['logoLarge'] = '/content/images/logo_ePortfolio.svg';
$patterns['header']['logoSmall'] = '/content/images/logo_ePortfolio.svg';
$patterns['header']['accountNav'] = '<li><a href="/healthstream-id-manage-eportfolio.php">Account Settings</a></li>
    <li class="hide-header-open"><a href="/healthstream-id-manage-eportfolio.php?view=password">Manage  Password</a></li>

    <li class="hide-header-open logout"><a href="#">Logout</a></li>';
$patterns['header']['alerts'] = '';
$patterns['header']['mainNav'] =    ' <li class="{active=profile}"><a href="/eportfolio.2.php">Profile</a></li>' .' <li class=""><a href="/completed.2.php">Transcript</a></li>' . ' <li class=""><a href="#">Help</a></li>' ;
?>

<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<style>
.focus{
    background-color: #487AA3;
    border-top: 5px solid #3a6282;
    color: #fff;
}

.focus-pageheader .fph-separator {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 5px;
    border-top: 1px solid #799ebc;
    background-image: -webkit-linear-gradient(top,#638eb1 0,#769bba 100%);
    background-image: linear-gradient(to bottom,#638eb1 0,#769bba 100%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff638eb1', endColorstr='#ff769bba', GradientType=0);
}

.site-header {
    background: #fff;
    border-top: 3px solid #487AA3;
    position: relative;
    z-index: 400;
}

nav.nav-focus {
    margin-bottom: 0;
}

nav.nav-focus .nav li.active i, nav.nav-focus .nav li:hover.active i {
    display: block;
    color: #769bba;
}

.modal-wizard-body {
    padding: 0;
}

@-webkit-keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@-webkit-keyframes fadeOut {
    from { opacity: 1; }
    to { opacity: 0; }
}

@keyframes fadeOut {
    from { opacity: 1; }
    to { opacity: 0; }
}

.work-experience-save-experience,
.education-save-experience,
.licenses-save-experience,
.certifications-save-experience,
.resucitation-programs-save-experience,
.activities-save-experience,
.committee-work-save-experience,
.memberships-save-experience,
.publications-save-experience,
.committee-work-membership-experience,
.awards-save-experience,
.other-save-experience,
.memberships-committee-work-experience,
.teaching-save-experience
{
    display: none;
    -webkit-animation: fadeOut 1s;
    animation: fadeOut 1s;
}

.show {
    display: block;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

label.radio-inline {
    display: inline-block;
}

.modal-footer.alt, .irb-options  {
    display: none;
}




/*Hack for eportfolio*/


.site-footer .links{
    display:none;
}
/*.col-md-3 .section-sidebar .section-box:last-of-type {
display:none;
}
*/
/*.institution{
    display:none;
}*/
</style>


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
                                    'label' => 'Manage ID',
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




                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '<button type="submit" class="btn btn-success">Save</button> ' .
                                            '<button  class="btn btn-default">Cancel</button>',

                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </form>
                    </section>
                </div>
                 <div class="tab-pane fade<?php echo ($show_password)?' in active':''; ?>" id="tab-password">
                            <section class="section">
                                <h2>Manage Password</h2>
                                <form action="/HSAPP/GlobalUser/SaveAccountPassword" method="post" novalidate="novalidate">                <section class="form-group">
                    <h2>Manage Your HealthStream ID Password</h2>
                </section>
<input name="__RequestVerificationToken" type="hidden" value="oV_BhSUHQsC2F_ELX-hMl7ac2ok2f0EG9Yi40i4i8314-60rS8HsQ4pZqJuVzpj-ZppEqkTANHW3RnDiilXiSy0ZQ92srxV4-C9JgvFU4Qao6ALp0">                <fieldset>
                    <div class="form-group">
                        <input id="PersonId" name="PersonId" type="hidden" value="51996b6f-c80a-45a3-b1c4-82ccbd1b04db">
                        <input id="PersonalEmailAddress" name="PersonalEmailAddress" type="hidden" value="q289223@mvrht.net">
                        <input id="FirstName" name="FirstName" type="hidden" value="Michelle">
                        <input id="LastName" name="LastName" type="hidden" value="Baldwin">
                        <input id="IsEmailAddressConfirmed" name="IsEmailAddressConfirmed" type="hidden" value="True">

                        <input id="LastUpdatedByDate" name="LastUpdatedByDate" type="hidden" value="9/29/2017 11:55:02 AM">
                        <input id="LastUpdatedByPersonFullName" name="LastUpdatedByPersonFullName" type="hidden" value="Michelle Baldwin">
                    </div>



<div>
    <div class="collapse-group in">
        <div>
           <b>Password Requirements:</b>
        </div>
        <ul>
            <li>
                Must be at least 8 characters
            </li>
            <li>
                Cannot contain your username
            </li>
            <li>
                Must contain 3 of the 4 following elements
                <br>
                <ol>
                    <li>
                        Lowercase letters
                    </li>
                    <li>
                        Uppercase letters
                    </li>
                    <li>
                        Numbers
                    </li>
                    <li>
                        Special characters (!, @, #, *, %, &amp;, etc.)
                    </li>
                </ol>
            </li>
        </ul>
    </div>
    <a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show password requirements|Hide password requirements" href="javascript:;">Hide password requirements<i class="fa-fw fa-caret-up fa"></i></a>
</div>




                    <div class="form-group">
                        <label class="control-label" for="NewPassword">New Password</label>
                        <input class="form-control" data-val="true" data-val-required="Required" id="NewPassword" name="NewPassword" type="password">
                        <span class="help-block"><span class="field-validation-valid" data-valmsg-for="NewPassword" data-valmsg-replace="true"></span></span>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="ConfirmNewPassword">Confirm New Password</label>
                        <input class="form-control" data-val="true" data-val-equalto="Passwords must match." data-val-equalto-other="*.NewPassword" data-val-required="Required" id="ConfirmNewPassword" name="ConfirmNewPassword" type="password">
                        <span class="help-block"><span class="field-validation-valid" data-valmsg-for="ConfirmNewPassword" data-valmsg-replace="true"></span></span>
                    </div>


                    <div class="form-group">
                        <div class="stickybar"><div class="stickybar-floater"><div class="stickybar-outer"><div class="stickybar-inner"><div class="stickybar-left"><button class="btn btn-success" type="submit">Change Password</button>&nbsp;<a class="btn btn-default" href="/HSAPP/ResuscitationCard">Cancel</a></div><div class="stickybar-right"></div></div></div></div></div>
                    </div>

                    <div class="form-group">
                        <span class="help-block">
                            <small>
                                Last Modified: Stephanie Juniper on Sep&nbsp;29,&nbsp;2017 at&nbsp;11:55am&nbsp;ET
                            </small>
                        </span>
                    </div>
                </fieldset>
</form>
                            </section>
                        </div> <!-- / tab-pane -->
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

    <script>


        $(".institution").html("ePortfolio");

        $(".nav-main li a").each(function(){
            if($(this).text() != "Transcript" && $(this).text() != "Profile" && $(this).text() != "Help") {$(this).hide() }

        });


    </script>
<?= createSiteEnd(); ?>


