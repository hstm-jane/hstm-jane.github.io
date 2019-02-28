<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'NRP Course';
$patterns['focus']['title'] = 'NRP Course';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-course',
    'type' => 'Course',
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Status:',
        'value' => 'In Progress',
    ),
    array(
        'label' => 'Est Time:',
        'value' => '2h 40m',
    ),
    array(
        'label' => 'Due:',
        'value' => '{30days}',
    ),
);
$patterns['focus']['supporting'] = '
    <figure class="fph-chart-holder">
        <canvas class="fph-chart" data-type="Doughnut" data-segments="[[30,0],[30,0],[90,0],[10,0]]" width="108" height="108"></canvas>
        <figcaption>0%</figcaption>
    </figure>';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<style>
    #nrp-modal .nrp-verify-account {
        display: none;
    }
    #nrp-modal .nrp-confirm-account {
        display: none;
    }
    #nrp-modal .form-content {
        padding-left: 0;
    }

    #nrp-modal .help-block {
        font-size: 12px;
    }

</style>

<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <section class="section section-main section-box" data-equalize="layout-columns">

                    <?php

                        $focusNav = array(
                            'tabs' => array(
                                array(
                                    'active' => true,
                                    'id' => 'learning-activities',
                                    'label' => 'Learning Activities',
                                ),
                                array(
                                    'id' => 'overview',
                                    'label' => 'Overview',
                                ),
                                array(
                                    'id' => 'completion',
                                    'label' => 'On Completion',
                                ),
                            ),
                        );
                        echo createFocusNav($focusNav);

                    ?>

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="learning-activities">
                            <section>
                                <h2>Learning Activities</h2>
                                <?php

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    ),
                                    'title' => '<a href="#">NRP Activity 1</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Online Activity',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'In Progress',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '30m',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Resume',
                                        'link' => '#',
                                    )
                                );
                                echo createSlat($slat);


                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    ),
                                    'title' => 'NRP Activity 2',
                                    'meta' => array(
                                        array(
                                            'type' => 'Online Activity',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '1h 30m',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="attachment-incomplete.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    ),
                                    'title' => 'NRP Activity 3',
                                    'meta' => array(
                                        array(
                                            'type' => 'Test',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '10m',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="test-start.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                );
                                echo createSlat($slat);

                                ?>
                            </section>
                        </div> <!-- /tab-pane -->

                        <div class="tab-pane fade" id="overview">
                            <section class="section">
                                <h2>Description</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </section>

                            <section class="section">
                                <h3>Author</h3>
                                <p><a href="#modal-author" data-toggle="modal">Jane Doe</a></p>
                            </section>

                            <section class="section">
                                <h2>Learning Objectives</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                                <ul>
                                    <li>An ordered list item</li>
                                    <li>An ordered list item</li>
                                    <li>An ordered list item</li>
                                    <li>An ordered list item</li>
                                </ul>
                            </section>

                            <section class="section">
                                <h2>Course Outline</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                <ol>
                                    <li>An unordered list item</li>
                                    <li>An unordered list item</li>
                                    <li>An unordered list item</li>
                                    <li>An unordered list item</li>
                                </ol>
                            </section>

                            <section class="section">
                                <h2>Technical Requirements</h2>
                                <div data-toggle="limit-height" data-labels="Show all information|Show less information">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                    <p>
                                        <b>Browser Requirements</b>
                                        <ul>
                                            <li>An unordered list item</li>
                                            <li>An unordered list item</li>
                                            <li>An unordered list item</li>
                                            <li>An unordered list item</li>
                                        </ul>
                                    </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </section>

                            <section class="section">
                                <h2>Catalog</h2>
                                <p>This course belongs to the following categories in the HLC catalog:</p>
                                <ul>
                                    <li>Subject > Emergency Treatment > Resuscitation</li>
                                    <li>Audience > Critical Care Paramedics</li>
                                </ul>
                            </section>

                        </div><!-- /tab-pane -->

                        <div class="tab-pane fade" id="completion">

                            <section class="section">
                                <h2>Continuing Education Credits</h2>
                                <p>You will earn or renew the following credits upon successful completion of this course.</p>

                                <?php

                                $content = '
                                    <section class="section">
                                        <h5>Statement</h5>
                                        <p>The American Heart Association is accredited by the Accreditation Council for Continuing Medical Education to provide continuing education. The American Heart Association designates this enduring material for a maximim of 2.5 AMA PRA Category 1 Credits.</p>
                                    </section>
                                ';
                                $content1 = '
                                    <section class="section">
                                        <h5>Disciplines</h5>
                                        <p>Emergency Physicians, Physician Assistants, Physician, Surgeons</p>
                                    </section>
                                ';
                                $content2 = '
                                    <section class="section"><h5>Locations</h5>
                                        <p>
                                            <span class="label label-default label-location">AK</span>
                                            <span class="label label-default label-location">AL</span>
                                            <span class="label label-default label-location">AR</span>
                                            <span class="label label-default label-location">CA</span>
                                            <span class="label label-default label-location">CO</span>
                                            <span class="label label-default label-location">CT</span>
                                            <span class="label label-default label-location">DC</span>
                                            <span class="label label-default label-location">DE</span>
                                            <span class="label label-default label-location">AK</span>
                                            <span class="label label-default label-location">AL</span>
                                            <span class="label label-default label-location">AR</span>
                                            <span class="label label-default label-location">CA</span>
                                            <span class="label label-default label-location">CO</span>
                                            <span class="label label-default label-location">CT</span>
                                            <span class="label label-default label-location">DC</span>
                                            <span class="label label-default label-location">DE</span>
                                            <span class="label label-default label-location">AK</span>
                                            <span class="label label-default label-location">AL</span>
                                            <span class="label label-default label-location">AR</span>
                                            <span class="label label-default label-location">CA</span>
                                            <span class="label label-default label-location">CO</span>
                                            <span class="label label-default label-location">CT</span>
                                            <span class="label label-default label-location">DC</span>
                                            <span class="label label-default label-location">DE</span>
                                            <span class="label label-default label-location">AK</span>
                                            <span class="label label-default label-location">AL</span>
                                            <span class="label label-default label-location">AR</span>
                                            <span class="label label-default label-location">CA</span>
                                            <span class="label label-default label-location">CO</span>
                                            <span class="label label-default label-location">CT</span>
                                            <span class="label label-default label-location">DC</span>
                                            <span class="label label-default label-location">DE</span>
                                        </p>
                                    </section>
                                ';
                                $slat = array(
                                    'title' => 'Name of Accrediting / Approval Body',
                                    'nested' => array(
                                        'hide' => array($content,$content1,$content2),
                                    ),
                                    'meta' => array(
                                        array(
                                            'label' => 'Credit:',
                                            'value' => '2.0 AMA PRA Category 1 Credits',
                                        ),
                                        array(
                                            'label' => 'Expiration:',
                                            'value' => 'Apr 4, 2016',
                                        )
                                    ),
                                    'action' => array(),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );

                                echo createSlat($slat);

                                ?>
                            </section>

                            <section class="section">
                                <h2>Certifications</h2>
                                <p>You will earn or renew the following certifcations upon successful completion of this course.</p>
                                <?php

                                $slat = array(
                                    'title' => 'Certification Name',
                                    'meta' => array(
                                        array(
                                            'label' => 'Certifying Body:',
                                            'value' => 'Name of Accrediting / Approval Body'
                                        ),
                                        array(
                                            'label' => 'Certification Period: ',
                                            'value' => 'Apr 1, 2012 — Apr 1, 2013'
                                        )
                                    ),
                                    'action' => array()
                                );

                                echo createSlat($slat);

                                ?>
                            </section>
                        </div><!-- /tab-pane -->
                    </div><!-- /tab-content -->
                </section><!-- /section-main -->

            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>Portable Account</h3>
                        <p>Workflow examples.</p>
                        <ul class="list-links">
                            <li><a href="#nrp-modal" data-toggle="modal" class="init-workflow">Create Account</a><li>
                            <li><a href="nrp-verified.php">Account Verification Screen</a></li>
                            <li><a href="#nrp-edit-modal" data-toggle="modal">Edit Account</a></li>
                        </ul>
                    </section>
                    <section class="section section-box" id="sidebar-credit">
                        <h3>Additional Credit</h3>
                        <p>You may be eligible for additional credit for this course. Make sure your certifications and licenses are up to date.</p>
                        <ul class="list-unstyled">
                            <li><a href="disciplines-licenses.php">Manage Licenses</a><li>
                            <li><a href="certifications.php">Manage Certifications</a></li>
                        </ul>
                        <p><a href="#" class="btn btn-sm btn-default">Refresh Credits</a></p>
                    </section>
                    <?php include_sidebar(); ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div> <!-- /layout -->

<div id="nrp-modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="nrp-create-account">
                <form id="nrp-create-account-form">
                    <div class="modal-header">
                        <button type="button" class="close init-workflow" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                        <h4 class="modal-title">Access NRP eCard Across HealthStream</h4>
                    </div>
                    <div class="modal-body">
                        <Div class="intro-text">By providing your personal email address below, your NRP Card will be accessible whenever you access HealthStream at any other healthcare organization with this account. <strong>Entering your name and email is required to proceed.</strong><br>
                        <a href="#"><small>Learn More of the Benefits</small></a>

                        <hr>
                        </div>

                        <div class="form-group email-group">
                            <label class="control-label">Email Address</label>
                            <input type="email" name="email" class="form-control emailAddress" required>
                            <p class="help-block">Created this before elsewhere? If yes, give the same email address and confirm on the next page.</p>
                        </div>
                        <div class="form-group email-group">
                            <label class="control-label">Confirm Email Address</label>
                            <input type="email" name="email2" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">First Name</label>
                            <input type="text" name="firstname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Middle Name <small>Optional</small></label>
                            <input type="text" name="middlename" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label" required>Last Name</label>
                            <input type="text" name="lastname" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Continue</button>

                        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                <form>
            </div>

            <div class="nrp-verify-account">
                <form>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                        <h4 class="modal-title">Have We Met? Verify Email Address</h4>
                    </div>
                    <div class="modal-body">
                        <p><b>jim.smith@gmail.com</b> is already associated with a portable account to share your NRP card.</p>

                        <p>If this is your account, an email will be sent to the address above to confirm.</p>

                        <p>If this is not your email, please provide another personal email address as your portable account.</p>

                    </div>
                    <div class="modal-footer">
                        <button class="is-me btn btn-success">This is me</button>
                        <button class="not-me btn btn-default">This is not me</button>
                    </div>
                <form>
            </div>

            <div class="nrp-confirm-account">
                <form>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                        <h4 class="modal-title">Account Confirmation</h4>
                    </div>
                    <div class="modal-body">
                        <p>A confirmation email has been sent to <b class="email-value">jim.smith@gmail.com</b></p>

                        <p>Please follow the next steps:</p>

                        <ol>
                            <li>Open the confrimation email sent to the address above and click the verify account link.</li>
                            <li>Once confirmed, your portable account is created for your NRP card to be accessed in other HealthStream sites.</li>
                        </ol>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" data-dismiss="modal">Continue to Application</button>
                        <button class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                <form>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<div id="nrp-edit-modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="nrp-edit-account">
                <form>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                        <h4 class="modal-title">Edit NRP eCard Across HealthStream</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group email-group">
                            <label class="control-label">Email Address</label>
                            <input type="email" name="email" class="form-control emailAddress" value="jim.smith@gmail.com">
                        </div>
                        <div class="form-group email-group">
                            <label class="control-label">Confirm Email Address</label>
                            <input type="email" name="email2" class="form-control" value="jim.smith@gmail.com">
                        </div>
                        <div class="form-group">
                            <label class="control-label">First Name</label>
                            <input type="text" name="firstname" class="form-control" value="Jim">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Middle Name <small>Optional</small></label>
                            <input type="text" name="middlename" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Last Name</label>
                            <input type="text" name="lastname" class="form-control" value="Smith">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="email-check btn btn-success" data-dismiss="modal">Save Changes</button>
                        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                <form>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>

<script src="/scripts/form-validation/js/formValidation.min.js"></script>
<script src="/scripts/form-validation/js/framework/bootstrap.min.js"></script>
<script>
    $( document ).ready(function() {

        // Form Validation
        $('#nrp-create-account-form').formValidation({
            framework: 'bootstrap',

            row: {
                valid: '',
                invalid: 'has-error'
            },

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
                email2: {
                    validators: {
                        notEmpty: {
                            message: 'Confirmation email is required'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        },
                        identical: {
                            field: 'email',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                },
                firstname: {
                    validators: {
                        notEmpty: {
                            message: 'First name is required'
                        },
                    }
                },
                lastname: {
                    validators: {
                        notEmpty: {
                            message: 'Last name is required'
                        },
                    }
                },

            }
        });
        $('#nrp-create-account-form').on('err.field.fv', function(e, data) {
            // $(e.target)  --> The field element
            // data.fv      --> The FormValidation instance
            // data.field   --> The field name
            // data.element --> The field element

            data.fv.disableSubmitButtons(false);
        })
        $('#nrp-create-account-form').on('success.field.fv', function(e, data) {
            // e, data parameters are the same as in err.field.fv event handler
            // Despite that the field is valid, by default, the submit button will be disabled if all the following conditions meet
            // - The submit button is clicked
            // - The form is invalid
            data.fv.disableSubmitButtons(false);
        });
    });

    $(function(){
        // This is a hack to make the prototype only show
        // the additional credits sidebar section when the
        // On Completion tab is active
        $('#sidebar-credit').hide();
        $('.nav-focus li a').click(function(){
            if ( $(this).attr('href') === '#completion') {
                $('#sidebar-credit').show();
            } else {
                $('#sidebar-credit').hide();
            }
        });
    });

    // Reset form and validation on openeing of modal
    $('#nrp-modal').on('shown.bs.modal', function(){
        $('#nrp-create-account-form').formValidation('resetForm', true);
    });

    // Proceed to next steps if form is validated
    $('#nrp-create-account-form').on('success.form.fv', function(e) {
        // Prevent form submission
        e.preventDefault();

        // Do whatever you want here ...
        var knownEmail = 'jim.smith@gmail.com';
        var enteredEmail = $('.emailAddress').val();

        if (knownEmail == enteredEmail) {
            $('.nrp-create-account').hide();
            $('.nrp-verify-account').show();
        }
        else {
            $('.nrp-create-account').hide();
            $('.nrp-confirm-account').show();
            $('b.email-value').html(enteredEmail);
        }
    });

    // Send users back to create account screen if recognized email not users
    $('.not-me').click(function() {
        event.preventDefault();
        $('.nrp-verify-account').hide();
        $('.nrp-create-account').show();
        $('#nrp-create-account-form').find('[name="email"], [name="email2"]').val('');
        $('.email-group').removeClass('has-success');
        $('#nrp-create-account-form').find('[name="email2"]').removeClass('has-success');

        $('input[name="email"]')[0].focus();
        $('input[name="email"]').attr('placeholder', 'Please enter a new personal email address.');
        $('input[name="email2"]').attr('placeholder', 'Please confirm new personal email address.');

        $('.intro-text').hide();
        $('.help-block').hide();
    });

    // Send users back to confirm account screen if recognized email not users
    $('.is-me').click(function() {
        event.preventDefault();
        $('.nrp-verify-account').hide();
        $('.nrp-confirm-account').show();
    });

    // Makes sure create account state loaded
    $('.init-workflow').click(function() {
        event.preventDefault();
        $('.nrp-verify-account').hide();
        $('.nrp-confirm-account').hide();
        $('.nrp-create-account').show();
    });

</script>
<?= createSiteEnd(); ?>