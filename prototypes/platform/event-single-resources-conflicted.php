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

        <style>
          .layout-subnav-nav a .fa.fa-warning {
            position: static;
            color: red;
          }
          
          .layout-subnav-nav li.active a .fa.fa-warning,
          .layout-subnav-nav li.active a:hover .fa.fa-warning {
            color: red;
          }
        </style>
        <div class="layout layout-subnav layout-min">
          <div class="container">
            <section class="section section-main section-box">
              <div class="layout-subnav-container">
                <div class="layout-subnav-nav">
                  <div class="layout-subnav-nav-mobile">
                    <span><i class="fa fa-caret-down"></i>
<span>Resources &amp; Personnel</span>
                    </span>
                    <a href="#" class="toggle"><i class="fa fa-bars"></i></a>
                  </div>
                  <ul>
                    <li>
                      <a href="/event-single-settings-conflicted.php">Settings<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>
                      <a href="/event-single-permissions-conflicted.php">Permisssions<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li class="active">
                      <a href="/event-single-resources-conflicted.php">Resources &amp;&nbsp; Personnel<i class="fa fa-warning"></i> <i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>
                      <a href="/event-single-roster-conflicted.php">Roster<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>
                      <a href="/event-single-grading-conflicted.php">Grading<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>
                      <a href="/event-single-message-conflicted.php">Send Message<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>
                      <a href="/event-single-content-conflicted.php">Content<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="/event-series-settings-conflicted.php">Add Series</a>
                    </li>
                  </ul>
                </div>
                <!-- /subnav -->
                <div class="layout-subnav-content">
                  <section class="section">

                    <div class="alert alert-danger">Resources and Personnel for this event are currently double-booked with another event. Please review the conflicts.</div>

                    <h2 class="page-header">Resources & Personnel</h2>
                    <div class="row">
                      <div class="col-sm-6 select2-container-no-search">
                        <div class="form-group">
                          <label>Select Resources</label>
                          <div class="resource-picker">
                            <div class="resource-picker-search">
                              <input type="text" class="form-control resource-picker-input" id="resource-picker-input" placeholder="Quick Search" data-type="rooms" tabindex="4">
                              <div class="btn-group resource-picker-type">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" tabindex="5">
                                  <span>All</span> <i class="fa fa-caret-down "></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                  <li>
                                    <a href="#">All</a>
                                  </li>
                                  <li>
                                    <a href="#">Rooms</a>
                                  </li>
                                  <li>
                                    <a href="#">Equipment</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <div class="resource-picker-overlay">
                              <div class="resource-picker-holder"></div>
                              <div class="resource-picker-clear">
                                <a href="#">Close Results</a>
                              </div>
                            </div>
                          </div>
                          <div style="font-size:12px;margin-top:5px">
                            <a href="#modal-browse-resources" data-trigger="modal">Browse All Resources</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Select Personnel</label>
                          <input type="text" class="form-control" placeholder="Quick Search">
                          <div style="font-size:12px;margin-top:5px">
                            <a href="#modal-browse-resources" data-trigger="modal">Browse All Personnel</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="urg">
                      <div class="urg-scroll">
                        <div class="urg-nav">
                          <div class="urg-table">
                            <div class="urg-row">
                              <div class="urg-cell urg-head" style="height: 40px;"></div>
                            </div>
                            <div class="urg-row">
                              <div class="urg-cell urg-subhead" style="height: 25px;">
                                <span class="urg-label">Instructor</span>
                              </div>
                            </div>
                            <div class="urg-row">
                              <div class="urg-cell urg-item" style="height: 40px;">
                                <a href="#"><span class="btn btn-xs btn-default urg-item-edit"><i class="fa fa-pencil"></i></span>Demonstration, Jack D.</a>
                                <button class="btn btn-xs btn-danger urg-item-remove"><i class="fa fa-times"></i></button>
                              </div>
                            </div>
                            <div class="urg-row">
                              <div class="urg-cell urg-subhead" style="height: 25px;">
                                <span class="urg-label">Personnel</span>
                              </div>
                            </div>
                            <div class="urg-row">
                              <div class="urg-cell urg-item" style="height: 40px;">
                                <a href="#"><span class="btn btn-xs btn-default urg-item-edit"><i class="fa fa-pencil"></i></span>Demonstration, Jill P.</a>
                                <button class="btn btn-xs btn-danger urg-item-remove"><i class="fa fa-times"></i></button>
                              </div>
                            </div>
                            <div class="urg-row">
                              <div class="urg-cell urg-item urg-item-alt" style="height: 40px;">
                                <a href="#" class="urg-limit"><span class="btn btn-xs btn-default urg-item-edit"><i class="fa fa-pencil"></i></span>Demonstration-Longnamenstein, Jane F.</a>
                                <button class="btn btn-xs btn-danger urg-item-remove"><i class="fa fa-times"></i></button>
                              </div>
                            </div>
                            <div class="urg-row">
                              <div class="urg-cell urg-subhead" style="height: 25px;">
                                <span class="urg-label">Resources</span>
                              </div>
                            </div>
                            <div class="urg-row">
                              <div class="urg-cell urg-item" style="height: 40px;">
                                <a href="#"><span class="btn btn-xs btn-default urg-item-edit"><i class="fa fa-pencil"></i></span>Conference Room A</a>
                                <button class="btn btn-xs btn-danger urg-item-remove"><i class="fa fa-times"></i></button>
                              </div>
                            </div>
                            <div class="urg-row">
                              <div class="urg-cell urg-item urg-item-alt" style="height: 40px;">
                                <a href="#" class="urg-indent"><span class="btn btn-xs btn-default urg-item-edit"><i class="fa fa-pencil"></i></span>Projector 12</a>
                                <button class="btn btn-xs btn-danger urg-item-remove"><i class="fa fa-times"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="urg-schedule">
                          <div class="urg-table">
                            <div class="urg-row">
                              <div class="urg-cell urg-head" style="height: 40px;">
                                <ul class="urg-days">
                                  <li style="left:0px;width:180px">Mon Oct 26, 2015</li>
                                  <li style="left:180px;width:1200px">Tue Oct 27, 2015</li>
                                </ul>
                              </div>
                            </div>
                            <div class="urg-row">
                              <div class="urg-cell urg-subhead" style="height: 25px;">
                                <div class="urg-table urg-times">
                                  <div class="urg-row">
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">10:30 PM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">11:00 PM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">11:30 PM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">12:00 AM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">12:30 AM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">1:00 AM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">1:30 AM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">2:00 AM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">2:30 AM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">3:00 AM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">3:30 AM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">4:00 AM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">4:30 AM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">5:00 AM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">5:30 AM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">6:00 AM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">6:30 AM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">7:00 AM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">7:30 AM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">8:00 AM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">8:30 AM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">9:00 AM</span>
                                    </div>
                                    <div class="urg-cell urg-time">
                                      <span class="urg-label">9:30 AM</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="urg-row">
                              <div class="urg-cell urg-item" style="height: 40px;">
                                <ul class="urg-status">
                                  <li class="urg-available" style="left:300px;width:120px;"><i class="fa fa-check"></i> Available</li>
                                </ul>
                              </div>
                            </div>
                            <div class="urg-row">
                              <div class="urg-cell urg-subhead" style="height: 25px;"></div>
                            </div>
                            <div class="urg-row">
                              <div class="urg-cell urg-item" style="height: 40px;">
                                <ul class="urg-status">
                                  <li class="urg-available" style="left:300px;width:120px;"><i class="fa fa-check"></i> Available</li>
                                </ul>
                              </div>
                            </div>
                            <div class="urg-row">
                              <div class="urg-cell urg-item urg-item-alt" style="height: 40px;">
                                <ul class="urg-status">
                                  <li class="urg-available" style="left:300px;width:120px;"><i class="fa fa-check"></i> Available</li>
                                </ul>
                              </div>
                            </div>
                            <div class="urg-row">
                              <div class="urg-cell urg-subhead" style="height: 25px;"></div>
                            </div>
                            <div class="urg-row">
                              <div class="urg-cell urg-item" style="height: 40px;">
                                <ul class="urg-status">
                                  <li class="urg-unavailable" style="left:240px;width:300px;"></li>
                                  <li class="urg-conflict" style="left:300px;width:120px;"><i class="fa fa-warning"></i> Conflict</li>
                                </ul>
                              </div>
                            </div>
                            <div class="urg-row">
                              <div class="urg-cell urg-item urg-item-alt" style="height: 40px;">
                                <ul class="urg-status">
                                  <li class="urg-available" style="left:300px;width:120px;"><i class="fa fa-check"></i> Available</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="urg-start" style="left:300px"></div>
                          <div class="urg-end" style="left:420px"></div>
                        </div>
                      </div>
                    </div>
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
                    function resizeGrid() {
                      $('.urg').each(function() {
                        var $nav = $(this).find('.urg-nav');
                        var $schedule = $(this).find('.urg-schedule');

                        $nav.find('.urg-row').each(function(index) {
                          var $a = $(this).find('.urg-cell:eq(0)');
                          var $b = $schedule.find('> .urg-table > .urg-row').eq(index).find('.urg-cell:eq(0)');

                          $a.height('auto');
                          $b.height('auto');

                          var height = ($a.height() > $b.height()) ? $a.height() : $b.height();

                          $a.height(height);
                          $b.height(height);
                        });

                      });
                    }
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

                    $(window).on('load resize', function() {
                      resizeGrid();
                    });
                  });
                </script>
                <?= createSiteEnd(); ?>