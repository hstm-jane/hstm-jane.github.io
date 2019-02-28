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
                  </section>

                  <section class="section">
                    <h2 class="page-header">Managing</h2>
                    <div class="form-group">
                      <label>Who can manage this event?</label>
                      <div class="hs-table">
                        <table class="hs-table__table">
                          <thead>
                            <tr>
                              <th>Group Name</th>
                              <th>Description</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><a href="#">Default</a></td>
                              <td>Administrators in subsidiary institutions cannot manage this event</td>
                              <td class="hs-table__action">
                                <button class="btn btn-sm btn-danger">Remove</button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <button class="btn btn-sm btn-default">Add Admin Group</button>
                      </div>
                    </div>
                  </section>

                  <section class="section">
                    <h2 class="page-header">Registration</h2>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Registration Access</label>
                          <select class="form-control">
                            <option>Admin Only</option>
                            <option>Admin &amp; Self-Registration</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Registrants</label>
                          <div class="row">
                            <div class="col-xs-6">
                              <div class="input-group">
                                <div class="input-group-addon">MIN</div>
                                <input type="text" class="form-control" value="1">
                              </div>
                            </div>
                            <div class="col-xs-6">
                              <div class="input-group">
                                <div class="input-group-addon">MAX</div>
                                <input type="text" class="form-control" value="20">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Waitlist</label>
                          <label class="checkbox">
                            <input type="checkbox"> Allowed</label>
                        </div>
                      </div>
                    </div>
                    <section class="section">
                      <div class="form-group">
                        <label>Registration Rules</label>
                        <div class="form-group">
                          Close Registration
                          <input type="text" class="form-control form-control-inline" style="width:50px;display:inline-block;margin:0 5px;text-align:center" value="1">
                          <select class="form-control form-control-inline" style="display:inline-block;margin:0 5px;">
                            <option>Day(s)</option>
                          </select> before event starts
                        </div>
                      </div>
                    </section>
                    <section class="section">
                      <div class="form-group">
                        <label>Can students outside of your organization register?</label>
                        <label class="checkbox">
                          <input type="checkbox" checked> Yes, this event is Cross-Organization <a href="#modal-global-event" data-toggle="modal"><i class="fa fa-fw fa-info-circle"></i></a></label>
                      </div>
                    </section>
                    <section class="section">
                      <div class="form-group">
                        <label>Which Institutions can register?</label>
                        <div class="hs-table hs-table--seat-allocation">
                          <table class="hs-table__table">
                            <thead>
                              <tr>
                                <th>Institution</th>
                                <th>Reserved Seats</th>
                                <th>Max Registrants</th>
                                <th>Registered</th>
                                <th class="hs-table__action"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Open to any internal Institution</td>
                                <td>
                                  <input type="text" class="form-control form-control-inline input-sm" size="5" value="5">
                                </td>
                                <td>20</td>
                                <td>0</td>
                                <td class="hs-table__action"></td>
                              </tr>
                              <tr>
                                <td>Open to any Cross-Org Institution</td>
                                <td>
                                  <input type="text" class="form-control form-control-inline input-sm" size="5" value="5">
                                </td>
                                <td>20</td>
                                <td>0</td>
                                <td class="hs-table__action"></td>
                              </tr>
                              <tr>
                                <td>Institution A (My Institution)</td>
                                <td>
                                  <input type="text" class="form-control form-control-inline input-sm" size="5" value="5">
                                </td>
                                <td>20</td>
                                <td>0</td>
                                <td class="hs-table__action"></td>
                              </tr>
                              <tr>
                                <td>Institution B (Cross-Org Institution)</td>
                                <td>
                                  <input type="text" class="form-control form-control-inline input-sm" size="5" value="5">
                                </td>
                                <td>20</td>
                                <td>0</td>
                                <td class="hs-table__action">
                                  <button class="btn btn-sm btn-danger">Remove</button>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <a class="btn btn-sm btn-default" href="/search-institutions.php">Add Institution</a>
                        </div>
                      </div>
                    </section>
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
                <p>Setting availability to "Cross-Organization" makes the event accessible by all HealthStream Customer Organizations.</p>
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