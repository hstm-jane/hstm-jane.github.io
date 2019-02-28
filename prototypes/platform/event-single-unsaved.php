<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Add Event';
$patterns['header']['mainNavActive'] = 'scheduling';
$patterns['focus']['title'] = 'Add Event';

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
                    <li class="active">
                      <a href="/event-single-settings.php">Settings<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li class="disabled">
                      <a href="/event-single-permissions.php">Permisssions<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li class="disabled">
                      <a href="/event-single-resources.php">Resources &amp;&nbsp;Personnel<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li class="disabled">
                      <a href="/event-single-roster.php">Roster<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li class="disabled">
                      <a href="/event-single-grading.php">Grading<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li class="disabled">
                      <a href="/event-single-content.php">Content<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li class="disabled">
                      <a href="/event-single-messages.php">Send Message<i class="fa fa-chevron-right"></i></a>
                    </li>
                  </ul>
                </div>

                <div class="layout-subnav-content">
                  <section class="section">
                    <h2 class="page-header">General</h2>
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="form-group">
                          <label>Event Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>Type</label>
                          <select class="form-control">
                            <option>NRP</option>
                            <option>Standard</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Start</label>
                          <div class="input-group">
                            <input type="text" class="form-control" value="12/12/2015 10:00 AM">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>End</label>
                          <div class="input-group">
                            <input type="text" class="form-control" value="12/12/2015 11:00 AM">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Availability</label>
                          <label class="checkbox">
                            <input type="checkbox"> Cross-Organization
                            <a href="#modal-global-event" data-toggle="modal"> <i class="fa fa-fw fa-info-circle"></i> </a>
                          </label>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section class="section">
                    <h2 class="page-header">Registration</h2>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Minimum Registrants</label>
                              <input type="text" class="form-control" value="1">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Maximum Registrants</label>
                              <input type="text" class="form-control" value="10">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Registration Access</label>
                              <select class="form-control">
                                <option>Admin Only</option>
                                <option>...</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Waitlist</label>
                              <label class="checkbox">
                                <input type="checkbox"> Allowed </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <label>Registration Rules</label>
                    <div class="form-group">
                      <div class="radio">
                        <label>
                          <input type="radio" name="registrationRules">Never close registration</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="radio">
                        <label>
                          <input type="radio" name="registrationRules">Close Registration
                          <input type="text" class="form-control form-control-inline" style="width:50px;display:inline-block;margin:0 5px;text-align:center" value="1">
                          <select class="form-control form-control-inline" style="display:inline-block;margin:0 5px;">
                            <option>Day(s)</option>
                          </select> before event starts
                        </label>
                      </div>
                    </div>

                  </section>

                  <section class="section">
                    <h2 class="page-header">Grading</h2>
                    <div class="form-group">
                      <label>What is required to complete this event?</label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="example-1"> Attendance Only</label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="example-1"> Pass-Fail</label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="example-1" checked> Grade
                          <input type="text" class="form-control form-control-inline" style="width:50px;display:inline-block;margin:0 5px" value="80"> / 100</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>What does a "No-Show" to this event mean?</label>
                      <p style="padding:10px 0 20px">Student is allowed to re-register for a different event</p>
                    </div>
                    <div class="form-group">
                      <label>What is happens when a student fails the event?</label>
                      <p style="padding:10px 0 20px">Student is allowed to re-register for a different event</p>
                    </div>
                  </section>

                  <?php
$stickybar = array(
'sets' => array(
array(
'html' => '
<a href="/event-single-settings.php?save=true" class="btn btn-success">Save</a>
<a href="/events.php" class="btn btn-default">Cancel</a>
',
),
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
                <p>Setting availability to "Cross-Organization" makes the event accessible by all HealthStream Customer Organizations. </p>
                <p>However, <b>Registration Access</b> of these events can only be set to self-registration and admin of hosting organization. Meaning only admins of your organization will be able to register students. </p>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <?= createFooter($patterns['footer']); ?>
          <?= createPrototypeNav(); ?>
            <?= createSiteScripts(); ?>
              <?= createSiteEnd(); ?>

                <script>
                  $('input[type="checkbox"]').one('change', function(e) {
                    if (e.target.checked) {
                      $('#modal-global-event').modal();
                    }
                  });
                </script>