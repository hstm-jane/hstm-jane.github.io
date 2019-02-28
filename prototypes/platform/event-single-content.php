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
                    <li>
                      <a href="/event-single-message.php">Send Message<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li class="active">
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
                    <h2 class="page-header">Learning Content</h2>

                    <?php

$slat = array(
'title' => '<a href="#">Event Evaluation</a>',
'meta' => array(
array(
'type' => 'Evaluation',
),
array(
'label' => 'Description:',
'value' => 'An evaluation to collect feedback on the event.',
),
),
'action' => array(
'type' => 'custom',
'content' => '<div class="action"><a class="btn btn-sm btn-default" data-toggle="modal" data-target="#evaluation-modal-settings" href="#"> Settings</a></div>',
)
);

echo createSlat($slat);

?>
                      <?php

$slat = array(
'title' => '<a href="#">Leadership Training PreTest</a>',
'meta' => array(
array(
'type' => 'Test',
),
array(
'label' => 'Description:',
'value' => 'An evaluation to collect feedback on the event.',
),
),
'action' => array(
'type' => 'action-single',
'content' => 'Settings',
'link' => '#',
)
);

echo createSlat($slat);

?>

                  </section>

                  <?php
$stickybar = array(
'sets' => array(
array(
'position' => 'left',
'html' => '
<a href="#" class="btn btn-success js-confirm-save">Save</a>
<a href="/content-browse.php" class="btn btn-default">Add Content</a>
',
),
array(
'position' => 'right',
'html' => '<a href="#" class="btn btn-danger js-confirm-delete">Delete</a>',
),
),
);
echo createStickybar($stickybar);
?>

                    <div class="form-modified">Last Modified: Mar 3, 2016 at 6:23 AM ET by demo1</div>

                </div>
                <!-- /content -->
              </div>
            </section>
          </div>
        </div>
        <!-- /layout -->
        <div class="modal fade" id="evaluation-modal-settings" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Evaluation Settings</h4>
              </div>
              <div class="modal-body">
                <h3>Instructor Evaluation</h3>
                <p>Collect feedback on instructor's performance.</p>
                <hr>
                <div class="form-group">
                  <label>How would you evaluate multiple insturctors?</label>
                  <select class="form-control">
                    <option>Evaluate them individually</option>
                    <option>Evaluate them as a group</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>When should the evaluation be available?</label>

                  <input class="form-control-inline input-sm" type="text" placeholder="0" size="3" />

                  <select class="form-control-inline input-sm">
                    <option>day(s)</option>
                    <option>week(s)</option>
                    <option>month(s)</option>
                    <option>year(s)</option>
                  </select>

                  <select class="form-control-inline input-sm">
                    <option>before</option>
                    <option>after</option>
                  </select>

                  the event is

                  <select class="form-control-inline input-sm">
                    <option>graded</option>
                    <option>due</option>
                  </select>

                </div>
                <div class="form-group">
                  <label>When should the evaluation be due?</label>
                  <input class="form-control-inline input-sm" type="text" placeholder="0" size="3" />

                  <select class="form-control-inline input-sm">
                    <option>day(s)</option>
                    <option>week(s)</option>
                    <option>month(s)</option>
                    <option>year(s)</option>
                  </select>

                  <select class="form-control-inline input-sm">
                    <option>before</option>
                    <option>after</option>
                  </select>

                  the event is

                  <select class="form-control-inline input-sm">
                    <option>graded</option>
                    <option>due</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Should the evaluation be required?</label>
                  <label class="checkbox">
                    <input type="checkbox"> Yes, the evaluation is mandatory. </label>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
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

                    $('.js-confirm-save').click(function(e) {
                      e.preventDefault();
                      HealthStream.utilities.growl({
                        type: 'success',
                        title: 'Changes Saved',
                        text: 'Your changes have been saved'
                      });
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

                    //when no seats are availabel, badge turns red
                    if ($("#seats-available span").html() > 0) {
                      var $badge = $("#seats-available span");

                      $badge.removeClass("danger");
                    } else {
                      var $badge = $("#seats-available span");

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