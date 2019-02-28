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
<span>Permissions</span>
                    </span>
                    <a href="#" class="toggle"><i class="fa fa-bars"></i></a>
                  </div>
                  <ul>
                    <li>
                      <a href="/event-single-settings.php">Settings<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li class="active">
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

                    <h2 class="page-header">Administrator Group Permissions</h2>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <input type="text" class="form-control" placeholder="Search for Admin Groups...">
                        </div>
                      </div>
                    </div>

                    <?php

$slat = array(
'attributes' => array(
array('class',array('slat','slat-attention')),
),
'title' => '<a href="#">Default Group</a>',
'meta' => array(
array(
'label' => 'Description:',
'value' => 'This group has been created by default and cannot be deleted',
)
),
'action' => array(
'type' => 'action-single-danger',
'content' => 'Remove<i class="fa fa-times visible-xs"></i>',
'link' => '#',
)
);
echo createSlat($slat);

$slat = array(
'attributes' => array(
array('class',array('slat')),
),
'title' => '<a href="#">Admin Group 1</a>',
'meta' => array(
array(
'label' => 'Description:',
'value' => 'A group created to control events',
)
),
'action' => array(
'type' => 'action-single-danger',
'content' => 'Remove<i class="fa fa-times visible-xs"></i>',
'link' => '#',
)
);
echo createSlat($slat);

?>


                  </section>
                  <section class="section">
                    <h2 class="page-header">Student Group Permissions</h2>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <input type="text" class="form-control" placeholder="Search for Student Groups...">
                        </div>
                      </div>
                    </div>
                    <?php

$slat = array(
'attributes' => array(
array('class',array('slat','slat-attention')),
),
'title' => '<a href="#">Default Group</a>',
'meta' => array(
array(
'label' => 'Description:',
'value' => 'This group has been created by default and cannot be deleted',
)
),
'action' => array(
'type' => 'action-single-danger',
'content' => 'Remove<i class="fa fa-times visible-xs"></i>',
'link' => '#',
)
);
echo createSlat($slat);

$slat = array(
'attributes' => array(
array('class',array('slat')),
),
'title' => '<a href="#">Admin Group 1</a>',
'meta' => array(
array(
'label' => 'Description:',
'value' => 'A group created to control events',
)
),
'action' => array(
'type' => 'action-single-danger',
'content' => 'Remove<i class="fa fa-times visible-xs"></i>',
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
'html' => '
<a href="#" class="btn btn-success">Save</a>
<a href="#" class="btn btn-default">Cancel</a>
',
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



        <?php
include MODAL_MESSAGE_GROUP;
?>
          <?= createFooter($patterns['footer']); ?>
            <?= createPrototypeNav(); ?>
              <?= createSiteScripts(); ?>

                <script>
                  $(function() {
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
                  });
                </script>

                <?= createSiteEnd(); ?>