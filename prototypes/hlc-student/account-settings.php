<?php

$show_password = (!empty($_GET['view']) &&  $_GET['view'] === 'password');

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My Account';
$patterns['header']['mainNavActive'] = 'none';
$patterns['focus']['title'] = 'My Account';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Department:',
        'value' => '54001 - Emergency Room',
    ),
    array(
        'label' => 'Job Title:',
        'value' => 'RNER - Emergency Room Coordinator RN',
    )
);

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
                                        </div> <!-- /column -->
                                        <div class="col-sm-4">
                                            <label class="control-label">Profile Picture</label>
                                            <div class="photomgmt">
                                                <div class="photomgmt-image">
                                                    <img src="/content/images/avatar-default.png">
                                                </div>
                                                <div class="photomgmt-actions">
                                                    <div class="btn-group btn-group-justified">
                                                        <div class="btn-group">
                                                            <a href="#modal-photomgmt" data-toggle="modal" class="btn btn-default btn-sm">Upload</a>
                                                        </div>
                                                        <div class="btn-group">
                                                            <button class="btn btn-default btn-sm disabled" id="btn-photo-remove" type="button">Remove</button>
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
                                                    'html' => '<a href="#" class="btn btn-success">Save</a> <a href="#" class="btn btn-default">Cancel</a>',
                                                ),
                                            ),
                                        );
                                        echo createStickybar($stickybar);
                                    ?>
                                    <div class="form-modified">Updated: Sep 20, 2013 at 3:27pm by sjuniper</div>
                                </form>
                            </section>
                        </div> <!-- / tab-pane -->

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
                                                    'html' => '<button type="submit" class="btn btn-success">Change Password</button>
                                                        <button type="button" class="btn btn-default">Cancel</button>',
                                                ),
                                            ),
                                        );
                                        echo createStickybar($stickybar);
                                    ?>
                                    <div class="form-modified">Updated: Sep 20, 2013 at 3:27pm by sjuniper</div>
                                </form>
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
<div id="modal-photomgmt" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Manage Profile Picture</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" style="display:none">
                    We were unable to process your image. Please upload a valid JPG, GIF or PNG.
                </div>
                <form class="validate">
                    <input type="hidden" id="cropData" name="cropData" />
                    <div class="form-group">
                        For best results, select an image that is at least 400 pixels by 400 pixels and less than 8mb. Smaller images will be padded.
                    </div>
                    <div class="form-group">
                        <label class="control-label">Profile Picture</label>
                        <div class="row">
                            <div class="col-sm-10">
                                 <div class="photomgmt">
                                    <div class="photomgmt-image">
                                        <img src="/content/images/avatar-default.png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 hidden-xs">
                                <div class="photomgmt-preview">
                                    <img src="/content/images/avatar-default.png">
                                </div>

                                    <!-- <div class="img-preview preview-sm"></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Choose File <small>Files accepted: .jpg, .gif, or .png up to 8mb</small></label>
                        <input type="file" class="form-control" id="input-photo-file" accept="image/*" style="height:auto">
                        <div class="help-block">Allowed filetypes: .jpg, .gif, .png</div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success disabled" data-dismiss="modal" id="btn-photo-upload">Upload Image</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script src="/scripts/cropper.js"></script>
<script>
$(function(){
    $('#btn-photo-remove').click(function(){
        $('.photomgmt-image').html('<img src="/content/images/avatar-default.png">');
        $('.photomgmt-preview').html('<img src="/content/images/avatar-default.png">');
        $('.nav-account .avatar').html('<i class="fa fa-user-md"></i>');
        $('#btn-photo-remove').addClass('disabled');
    });
    $('#btn-photo-upload').click(function(){
        $('.photomgmt-image').html('<img src="/content/images/avatar.jpg">');
        $('.photomgmt-preview').html('<img src="/content/images/avatar.jpg">');
        $('.nav-account .avatar').html('<i class="fa fa-user-md"></i><img src="/content/images/avatar.jpg">');
        $('#btn-photo-remove').removeClass('disabled');
    });
    $('#modal-photomgmt').on('show.bs.modal',function(){
        $('#input-photo-file').val('');
    });
    $('#input-photo-file').change(function(){
        var allowed = ['jpeg','jpg','png','gif'];
        var file = $(this).val();
        var test = file.substring(file.lastIndexOf(".") + 1).toLowerCase();

        if ( file.length === 0 ) {
            $('#input-photo-file').closest('.form-group').removeClass('has-error');
            $('#btn-photo-upload').addClass('disabled');
            $('#photomgmt-server').hide();
        }
        else if ( $.inArray(test, allowed) < 0 ) {
            $('#input-photo-file').closest('.form-group').addClass('has-error');
            $('#btn-photo-upload').addClass('disabled');
            $('#photomgmt-server').show();
        }
        else {
            $('#input-photo-file').closest('.form-group').removeClass('has-error');
            $('#btn-photo-upload').removeClass('disabled');
            $('#photomgmt-server').hide();
            readURL(this);
        }
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                var $modalImage = $('.modal .photomgmt-image img');
                $modalImage.attr('src', e.target.result);
                var $cropData = $('#cropData');

                $modalImage
                    .cropper('destroy')
                    .cropper({
                        aspectRatio: 1 / 1,
                        preview: '.photomgmt-preview',
                        crop: function(e) {
                            $cropData.val(JSON.stringify($(this).cropper("getCropBoxData")));
                        }
                    });
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

});
</script>
<?= createSiteEnd(); ?>


