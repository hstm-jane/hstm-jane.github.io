<?php

$show_password = (!empty($_GET['view']) &&  $_GET['view'] === 'password');

include "includes/helpers.php";

$options = json_decode('{
    "head": {
        "title" : "My Account"
    },
    "focus": {
        "title": "My Account Settings",
        "meta": [
            ["Department:","1000000 - Nursing Information Services"],
            ["Facility:","Medcentral Health System"]
        ]
    }
}',true);



include_site_start($options);
//include_site_header($options);
$patterns['header']['mainNavActive'] = 'none';
echo createHeader($patterns['header']);
include_renewed_focus_bar($options);
?>
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
                                        'label' => 'Account Settings',
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
                                    <h2>Account Settings</h2>
                                    <form id="form-account-settings" class="validate">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputFirstName">First Name</label>
                                                    <input type="text" id="inputFirstName" class="form-control required">
                                                    <span class="help-block">Please enter your first name.</span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputMiddleName">Middle Name <small>Optional</small></label>
                                                    <input type="text" id="inputMiddleName" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputLastName">Last Name</label>
                                                    <input type="text" id="inputLastName" class="form-control required">
                                                    <span class="help-block">Please enter your last name.</span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputUserID">User ID</label>
                                                    <input type="text" id="inputUserID" class="form-control required">
                                                    <span class="help-block">Please enter a valid User ID.</span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputEmail Adress">Email Address</label>
                                                    <input type="text" id="inputEmailAddress" class="form-control">
                                                    <span class="help-block">Please enter a valid email address.</span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputTimeZone">Time Zone</label>
                                                    <select id="inputTimeZone" class="form-control">
                                                        <option selected>Eastern</option>
                                                        <option>Central</option>
                                                        <option>Mountain</option>
                                                        <option>Pacific</option>
                                                        <option>...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputLanguage">Preferred Language</label>
                                                    <select id="inputLanguage" class="form-control">
                                                        <option selected>English</option>
                                                        <option>Spanish</option>
                                                        <option>...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- /column -->
                                            <!-- <div class="col-sm-4">
                                            <label class="control-label">Photo</label>
                                            <div class="form-group well" style="text-align: center">
                                                <img src="./content/images/avatar.jpg" width="150" height="150" style="margin-bottom: 10px">
                                                <div>
                                                    <button class="btn btn-default btn-sm" type="button" style="margin: 5px 5px 0">Upload Photo</button><button class="btn btn-default btn-sm" type="button" style="margin: 5px 5px 0">Remove Photo</button>
                                                </div>
                                            </div>
                                        </div> -->
                                        </div>

                                        <?php
                                            $stickybar = array(
                                                'sets' => array(
                                                    array(
                                                        'html' => '
                                                            <button type="submit" class="btn btn-success">Save</button>
                                                            <button type="button" class="btn btn-default">Cancel</button>
                                                        ',
                                                    ),
                                                ),
                                            );
                                            echo createStickybar($stickybar);
                                        ?>

                                        <div class="form-modified">Updated: Sep 20, 2013 at 3:27pm by sjuniper</div>

                                    </form>
                                </section>
                            </div>
                            <!-- / tab-pane -->
                            <div class="tab-pane fade<?php echo ($show_password)?' in active':''; ?>" id="tab-password">
                                <section class="section">
                                    <h2>Manage Password</h2>
                                    <form id="form-manage-password" class="validate">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputNewPassword">New Password</label>
                                                    <input type="text" id="inputNewPassword" class="form-control required">
                                                    <span class="help-block">Please enter a valid password.</span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputNewPasswordConfirm">Confirm New Password</label>
                                                    <input type="text" id="inputConfirmNewPassword" class="form-control required">
                                                    <span class="help-block">This does not match the password.</span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputPasswordReminder">Password Reminder</label>
                                                    <input type="text" id="inputPasswordReminder" class="form-control required">
                                                    <span class="help-block">Please enter a password reminder.</span>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                            $stickybar = array(
                                                'sets' => array(
                                                    array(
                                                        'html' => '
                                                            <button type="submit" class="btn btn-success">Change Password</button>
                                                            <button type="button" class="btn btn-default">Cancel</button>
                                                        ',
                                                    ),
                                                ),
                                            );
                                            echo createStickybar($stickybar);
                                        ?>

                                        <div class="form-modified">Updated: Sep 20, 2013 at 3:27pm by sjuniper</div>

                                    </form>
                                </section>
                            </div>
                            <!-- / tab-pane -->
                        </div>
                        <!-- /tab-content -->
                    </section>
                    <!-- /section-main -->
                </div>
                <!-- /column -->
                <div class="col-md-3">
                    <section class="section section-sidebar" data-equalize="layout-columns">
                        <?php include_sidebar() ?>
                    </section>
                    <!-- /section-sidebar -->
                </div>
                <!-- /column -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /layout -->
    <?php
// include_site_footer($options);
echo createFooter();
include_site_scripts($options);
?>
        <script>
        $(function() {
            // HealthStream.utilities.validate();
        });
        </script>
        <?php
include_site_end($options);
?>
