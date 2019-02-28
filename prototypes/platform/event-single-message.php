<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Leadership Training';
$patterns['header']['mainNavActive'] = 'scheduling';
$patterns['focus']['title'] = 'Leadership Training';
$patterns['focus']['meta_secondary'] = array(
array(
'label' => 'Type:',
'value' => 'NRP',
),
array(
'label' => 'STARTS: ',
'value' => 'Sat Dec 12, 2015 at 10:00am',
),
array(
'label' => 'ENDS: ',
'value' => 'Sat Dec 12, 2015 at 11:00am',
),
array(
'label' => 'Time Zone:',
'value' => 'ET',
),
);

?>
  <?= createSiteStart($patterns['start']); ?>
    <?= createHeader($patterns['header']); ?>
      <?= createFocus($patterns['focus']); ?>
        <div class="layout layout-subnav layout-min">
          <div class="container">
            <section class="section section-main section-box">
              <div class="layout-subnav-container">
                <div class="layout-subnav-nav">
                  <div class="layout-subnav-nav-mobile">
                    <span><i class="fa fa-caret-down"></i>
<span>Settings</span>
                    </span>
                    <a href="#" class="toggle"><i class="fa fa-bars"></i></a>
                  </div>
                  <ul>
                    <li>
                      <a href="/event-single-settings.php">Settings<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>
                      <a href="/event-single-permissions.php">Permisssions<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>
                      <a href="/event-single-resources.php">Resources &amp;&nbsp; Personnel<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>
                      <a href="/event-single-roster.php">Roster<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>
                      <a href="/event-single-grading.php">Grading<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li class="active">
                      <a href="/event-single-message.php">Send Message<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>
                      <a href="/event-single-content.php">Content<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="/event-series-settings.php">Add Series</a>
                    </li>
                    <li>
                      <a href="/event-single-settings-conflicted.php">Clone Event</a>
                    </li>
                  </ul>
                </div>


                <div class="layout-subnav-content">

                  <section class="section">
                    <h2 class="page-header">Send a Message</h2>
                    <form class="validate">
                      <div class="form-group">
                        <label class="control-label">To</label>
                        <ul class="radio-list">
                          <li>
                            <label class="radio">
                              <input type="radio" name="to-group" checked> All</label>
                          </li>
                          <li>
                            <label class="radio">
                              <input type="radio" name="to-group"> All Instructors</label>
                          </li>
                          <li>
                            <label class="radio">
                              <input type="radio" name="to-group"> All Students</label>
                          </li>
                        </ul>
                      </div>
                      <div class="form-group">
                        <label class="control-label">CC</label>
                        <input type="text" class="form-control" disabled value="User@CurrentUserEmail.com">
                      </div>
                      <div class="form-group required">
                        <label class="control-label">Subject</label>
                        <input type="text" class="form-control" id="subject">
                        <small class="help-block">This field is required</small>
                      </div>
                      <div class="form-group required">
                        <label class="control-label">Message</label>
                        <textarea class="form-control" rows="5" id="message"></textarea>
                        <small class="help-block">This field is required</small>
                      </div>
                    </form>
                  </section>

                  <?php
$stickybar = array(
'sets' => array(
array(
'position' => 'left',
'html' => '
<a href="#" class="btn btn-success js-confirm-send">Send</a> <a href="#" class="btn btn-default js-reset">Clear</a>
',
)
),
);
echo createStickybar($stickybar);
?>

                </div>
                <!-- /content -->
              </div>
            </section>
          </div>
        </div>
        <!-- /layout -->
        <div class="modal fade" id="modal-global-event" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Availability</h4>
              </div>
              <div class="modal-body">
                <p>Setting availability to "Cross-Organization" makes the event accessible to students in all HealthStream Customer Organizations.</p>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <?php
include MODAL_MESSAGE_GROUP;
?>
          <?= createFooter($patterns['footer']); ?>
            <?= createPrototypeNav(); ?>
              <?= createSiteScripts(); ?>
                <script>
                  $(function() {

                    $('.js-confirm-send').click(function(e) {
                      e.preventDefault();
                      var errors = 0;

                      $('.required').removeClass('has-error');
                      if ($('#subject').val() === "") {
                        $('#subject').closest('.form-group').addClass('has-error');
                        errors++;
                      }
                      if ($('#message').val() === "") {
                        $('#message').closest('.form-group').addClass('has-error');
                        errors++;
                      }
                      if (errors === 0) {
                        $('form.validate').find(".required input, .required textarea").val("");
                        HealthStream.utilities.growl({
                          type: 'success',
                          title: 'Message Sent',
                          text: 'Your message has been sent to the group'
                        });
                      }
                    });
                    $('.js-reset').click(function(e) {
                      e.preventDefault();
                      $('.required').removeClass('has-error');
                      $('#subject,#message').val("");
                    });

                    $('#sendMessageGroup').formValidation({
                      framework: 'bootstrap',
                      fields: {
                        subject_group: {
                          validators: {
                            notEmpty: {
                              message: 'This field is required'
                            },
                          }
                        },
                        message_group: {
                          validators: {
                            notEmpty: {
                              message: 'This field is required'
                            },
                          }
                        },
                      }
                    });

                    if ($("#seats-available span").html() > 0) {
                      var $badge = $("#seats-available span");

                      $badge.removeClass("danger");
                      $badge.addClass("success");
                    } else {
                      var $badge = $("#seats-available span");

                      $badge.removeClass("success");
                      $badge.addClass("danger");

                    }


                    <?php if ( !empty($_GET['save']) && $_GET['save'] === 'true' ) { ?>
                    setTimeout(function() {
                      $('.js-confirm-save').click();
                    }, 500);
                    <?php } ?>

                  });
                </script>
                <?= createSiteEnd(); ?>