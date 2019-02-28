<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'HealthStream ID';
$patterns['header']['mainNavActive'] = false;
$patterns['focus']['title'] = 'HealthStream ID: Modals and Pages';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <section class="section section-main section-box" data-equalize="layout-columns">

                    <section class="section">
                        <h2>Modals and Pages</h2>

                        <?php

                        $slatNumber = 0;
                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-create.php" target="hstmid">'.$slatNumber.'. Create HealthStream ID</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'Default HealthStream ID Registration Modal.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-create.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-create-no-terms.php" target="hstmid">'.$slatNumber.'. Create HealthStream ID - No Terms</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'Modal shown when user wants to create account and has already accepted terms of service.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-create-no-terms.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-create-success-email.php" target="hstmid">'.$slatNumber.'. Successful Account Creation - Message Sent</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'Modal shown after user successfully created HealthStream ID. Email account verification message included.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-create-success-email.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-create-success-email-pin.php" target="hstmid">'.$slatNumber.'. Successful Account Creation - Message Sent - PIN Included</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'Modal shown after user successfully created HealthStream ID in case the PIN is needed. Email account verification message included, as well as PIN.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-create-success-email-pin.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-login.php" target="hstmid">'.$slatNumber.'. Login</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'Default HealthStream ID Login Modal.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-login.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-login-user-not-recognized.php" target="hstmid">'.$slatNumber.'. Login - Account Not Recognized Error</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'User has attempted to log in with their ID, but system does not recognize the email address.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-login-user-not-recognized.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-login-pin.php" target="hstmid">'.$slatNumber.'. Login with PIN</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'Default HealthStream ID Login Modal with PIN.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-login-pin.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-login-pin-not-recognized.php" target="hstmid">'.$slatNumber.'. Login with PIN - PIN not Recognized</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'User input PIN does not match the account information provided.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-login-pin-not-recognized.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-success-linked-accounts.php" target="hstmid">'.$slatNumber.'. Successful Linking of Accounts</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'User input PIN matches the account information provided.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-success-linked-accounts.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-expired-verification-link.php" target="hstmid">'.$slatNumber.'. Expired Verification Link</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'User attempts to validate email address, but link has expired.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-expired-verification-link.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-reset-password.php" target="hstmid">'.$slatNumber.'. Reset Password</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'User clicks reset password link from Login modal.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-reset-password.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-reset-password-sent.php" target="hstmid">'.$slatNumber.'. Reset Password - Message Sent</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'User successfully submits email address via Reset Password modal.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-reset-password-sent.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-new-password.php" target="hstmid">'.$slatNumber.'. Create New Password</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'Allows user to create new HealthStream ID password.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-new-password.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-new-password-success.php" target="hstmid">'.$slatNumber.'. Create New Password - Success</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'When user successfully creates a new password, they are taken to the login modal with a new password success message, and are prompted to log in again.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-new-password-success.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-promotional-modal.php" target="hstmid">'.$slatNumber.'. HealthStream ID Promotional Modal</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'Modal visible over page within system. Allows user to create new ID, Log In, or wait until later.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-promotional-modal.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-success-linked-accounts-growl.php" target="hstmid">'.$slatNumber.'. Growl Messaging for Successfully Linking Accounts</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Growl Message',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'Visible over page within system. Verifies successful account linking.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-success-linked-accounts-growl.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-real-page-create-success-email-pin.php" target="hstmid">'.$slatNumber.'. Successful Account Creation - Message Sent - PIN Included - Over Real Page</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'Visible over page within system. Modal shown after user successfully created HealthStream ID in case the PIN is needed. Email account verification message included, as well as PIN.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-real-page-create-success-email-pin.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-real-page-create-reminder-email-pin.php" target="hstmid">'.$slatNumber.'. Successful Account Creation - Reminder - Message Sent - PIN Included - Over Real Page</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'Visible over page within system. Modal shown as reminder after user successfully created HealthStream ID in case the PIN is needed. Email account verification message included, as well as PIN.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-real-page-create-reminder-email-pin.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-portfolio-teaser.php" target="hstmid">'.$slatNumber.'. HealthStream ID Portfolio Teaser</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Page',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'Call to action page to encourage users to get a HealthStream ID and extend their portfolio. Some extended portfolio options are visible, but disabled.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-portfolio-teaser.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-incomplete-registration.php" target="hstmid">'.$slatNumber.'. External User Incomplete Registration</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'In the event that a user attempts to register for a HealthStream ID with a personal email address that has previously been used for registration, but the confirmation/ validation of email address has not yet occurred, an external modal notification should be provided to the user that there is a pending confirmation.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-incomplete-registration.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-create-confirmation-form.php" target="hstmid">'.$slatNumber.'. External Confirmation Form to Enter Password</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'When a user follows URL in confirmation email, a modal will open for entering HealthStream ID password.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-create-confirmation-form.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-invalid-verification-link.php" target="hstmid">'.$slatNumber.'. Invalid Verification Link</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'When user follows URL in confirmation email that has been made invalid by previous confirmation process, a modal will open informing that the link is invalid and offering a link for resend of email.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-invalid-verification-link.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-create-confirmation-complete.php" target="hstmid">'.$slatNumber.'. Registration / Account Confirmation Complete</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'When a user has successfully completed registration and confirmation, this modalappears informing of completion and offering login link.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-create-confirmation-complete.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-forgot-password.php" target="hstmid">'.$slatNumber.'. Forgotten Password</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'When a user on ~/portfolio (external site) wishes to log in with HealthStream ID, but has forgotten password, they may choose appropriate link on the login page. When this is done, an external modal should appear containing a form for entering HealthStream ID email address.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-forgot-password.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-forgot-password-incomplete-registration.php" target="hstmid">'.$slatNumber.'. Forgotten Password - Incomplete Registration</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'After submission of email address for confirmation prior to change of password, if the email address returns as part of an unconfirmed/ incomplete registration, notification appears that the password cannot be reset until confirmation of registration has been completed.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-forgot-password-incomplete-registration.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-forgot-password-unrecognized-email.php" target="hstmid">'.$slatNumber.'. Forgotten Password - Unrecognized Email Address</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'After submission of email address for confirmation prior to change of password, if the email address is not recognized as a registered HealthStream ID, notification appears that the email address is unrecognized. Includes link try to enter email adress again or create new ID.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-forgot-password-unrecognized-email.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-forgot-password-complete-change.php" target="hstmid">'.$slatNumber.'. Forgotten Password - Complete Password Change</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'After submission of email address for confirmation prior to change of password, if the email address is recognized as a registered HealthStream ID, notification appears that an email containing a link for password change will be sent to the address. ',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-forgot-password-complete-change.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-forgot-password-new-password-create.php" target="hstmid">'.$slatNumber.'. Forgotten Password - Enter New Password Form</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'When a valid email address with HealthStream ID is entered for forgotten password change, a form for entering new password should appear.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-forgot-password-new-password-create.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-forgot-password-change-success.php" target="hstmid">'.$slatNumber.'. Forgotten Password - Password Change Success</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'When HealthStream ID forgotten password has been updated, notice should appear informing user of success, along with link to ~/portfolio.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-forgot-password-change-success.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-real-page-did-you-know.php" target="hstmid">'.$slatNumber.'. Did You Know?</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Page',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'A reminder for a logged in user that they can now use their HealthStream ID to login.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-real-page-did-you-know.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-server-error.php" target="hstmid">'.$slatNumber.'. Server Error</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'This modal displayes when there is in unforeseen server error in the login/registration process.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-server-error.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-login-already-have-one.php" target="hstmid">'.$slatNumber.'. Login - "I Already Have One"</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'When a user has been presented with the “Sales Pitch” modal for HealthStream ID and selects “I Already Have One”, a form for entering their HealthStream ID and Password needs to then be presented so a link may be made with the HLC they are currently accessing.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-login-already-have-one.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-create-confirmation-link-invalid.php" target="hstmid">'.$slatNumber.'. Registration Complete - Confirmation Link Invalid Due to Previous Confirmation Completion</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'When a user follows link in HealthStream ID confirmation email message after registration has already been confirmed, the registration should not be “re-confirmed”, nor should the user be able to select link to re-send confirmation email message. Instead, the user should be notified that the registration/ confirmation process for HealthStream ID has already been completed and should be given the opportunity to login.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-create-confirmation-link-invalid.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-link-form-validation-unrecognized-email.php" target="hstmid">'.$slatNumber.'. Link Form Validation - Unrecognized Email Address</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'When a user has entered an unrecognized email address in HSTM ID Link Request form, athis modal will appear.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-link-form-validation-unrecognized-email.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-link-form-validation-incomplete-registration.php" target="hstmid">'.$slatNumber.'. Link Form Validation - Incomplete Registration</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'When a user has entered an unconfirmed email address in HSTM ID Link Request form, this modal will appear.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-link-form-validation-incomplete-registration.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-terms-conditions.php" target="hstmid">'.$slatNumber.'. Create HealthStream ID - Terms and Conditions</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'When a user clicks the "terms and conditions" link on the Create ID page, the user is directed to this modal. On dismissal, user is returned to Create ID modal.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-terms-conditions.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-create-combined.php" target="hstmid">'.$slatNumber.'. Create HealthStream ID - Combined Accounts</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'Alternate HealthStream ID Registration Modal if user is combining accounts.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-create-combined.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-create-confirmation-form-forgot-password.php" target="hstmid">'.$slatNumber.'. External Confirmation Form to Enter Password with Forgot Password Link</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'When a user follows URL in confirmation email, a modal will open for entering HealthStream ID password. Includes a forgot password link.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-create-confirmation-form-forgot-password.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                                array('id',++$slatNumber),
                            ),
                            'title' => '<a href="healthstream-id-cancel-confirmation.php" target="hstmid">'.$slatNumber.'. Cancel Confirmation Due to Forgotten Password</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'If user cannot remember their HealthStream ID password to combine their accounts and selects the "forgot password" link, this modal appears. It allows thm to begin the registration process over again.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-cancel-confirmation.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-attention')),
                            ),
                            'title' => '<a href="healthstream-id-create-confirmation-form-forgot-password-update-password.php" target="hstmid">'.++$slatNumber.'. External Confirmation Form to Enter Password with Forgot Password Link - Update Password Variation</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'When a user follows URL in confirmation email, a modal will open for entering HealthStream ID password. Includes a forgot password link that allows the user to update their password.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-create-confirmation-form-forgot-password-update-password.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-attention')),
                            ),
                            'title' => '<a href="healthstream-id-forgot-password-update-password.php" target="hstmid">'.++$slatNumber.'. Forgotten Password - Update Password Form</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'This modal appears after click of forgot password link on Modal #40.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-forgot-password-update-password.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-attention')),
                            ),
                            'title' => '<a href="healthstream-id-create-confirmation-complete-updated-password.php" target="hstmid">'.++$slatNumber.'. Registration / Account Confirmation Complete - Update Password Variation</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'When a user has successfully completed registration and confirmation after updating their password ( Via Modal 41), this modal appears informing of completion and offering login link.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-create-confirmation-complete-updated-password.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-attention')),
                            ),
                            'title' => '<a href="healthstream-id-promotional-modal-summit.php" target="hstmid">'.++$slatNumber.'. Summit User Testing Entry Point</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Modal Workflow',
                                ),
                                array(
                                    'label' => 'Notes:',
                                    'value' => 'This is the entry point for Summit User Testing.  Some pages have been modified with a summit specific URL to support the user 
                                    testing requirements, while not affecting the original page.',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="healthstream-id-promotional-modal-summit.php" target="hstmid">View It!</a></div>',
                            )
                        );
                        echo createSlat($slat);

                        ?>

                    </section>
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php
                    include_sidebar();
                    ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div> <!-- /layout -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>
