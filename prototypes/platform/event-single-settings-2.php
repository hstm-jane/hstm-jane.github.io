
<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Add Event';
$patterns['header']['mainNavActive'] = 'scheduling';
$patterns['focus']['title'] = 'Add Event';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<style>
  .text-danger{
    display:none;
  }
</style>
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
                <input type="text" class="form-control" >
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label>Type</label>
                <select class="form-control" disabled>
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
                <div class="input-group date datetimepicker">
                  <input type="text" class="form-control " >
                  <span class="input-group-addon "><i class="fa fa-calendar"></i></span>
                </div>
              </div>
            </div>


            <div class="col-md-4">
              <div class="form-group">
                <label>End</label>
                <div class="input-group date datetimepicker">
                  <input type="text" class="form-control " >
                  <span class="input-group-addon "><i class="fa fa-calendar"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Availability</label>
                <label class="checkbox">
                  <input type="checkbox" class="js-checkbox-cross-org"> Cross-Organization
                  <a href="#modal-global-event" data-toggle="modal"> <i class="fa fa-fw fa-info-circle"></i> </a>
                </label>
              </div>
            </div>
          </div>
        </section>

        <section class="section">
          <div class="settings-header">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h2>Registration</h2>
                </div>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Minimum Registrants</label>
                    <input type="text" class="form-control" >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Maximum Registrants</label>
                    <input type="text" class="form-control js-max-reg" >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Registration Access</label>
                    <select class="form-control registration-access-select">
                      <option>Admin Only</option>
                      <option>Self-Registration and Admin</option>
                      <option>Not open for registration</option>

                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
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
                  <input type="radio" checked name="registrationRules">Never close registration</label>
                </div>
              </div>
              <div class="form-group">
                <div class="radio">
                  <label>
                    <input type="radio" name="registrationRules">Close Registration
                    <input type="text" class="form-control form-control-inline" style="width:50px;display:inline-block;margin:0 5px;text-align:center" value="1">
                    <select class="form-control form-control-inline" style="display:inline-block;margin:0 5px;">
                      <option>Day(s)</option>
                      <option>Hour(s)</option>
                    </select> before event starts
                  </label>
                </div>
              </div>
            </section>

            <section class="section js-reserved-seating" style="">
              <div class="form-group">
                <label>
                 Seat Allocation
               </label>
               <div class="hs-table hs-table--seat-allocation">
                <table class="hs-table__table">
                  <thead>
                    <tr>
                      <th>Allocate seats for</th>
                      <th>Number to Allocate</th>

                      <th>Seats taken</th>
                    </tr>
                  </thead>
                  <tbody id="tblEventSeatAllocation">
                    <tr>
                      <td>Other Organizations</td>
                      <td>
                            <!-- <div class="row">
                            <div class="col-md-6">
                              <select class="form-control">
                                <option>No Max</option>
                                <option>Reserve Seats</option>
                                <option>Reserve Up To</option>
                              </select>
                            </div> -->
                            <!--  <div class="col-md-6"> -->
                            <div class="form-group">
                              <input class="form-control form-control-inline input-sm js-seats-allocated txtSeats" size="5" type="text" value="">

                            </div>
                            <!--   </div> -->
                            <!-- </div> -->
                          </td>
                          <td>0</td>

                        </tr>
                         <!--  <tr>
                            <td>Your Organization</td>
                            <td>
                              <select>
                                <option>No Max</option>
                                <option>Set Limit</option>
                              </select>
                              <input class="form-control form-control-inline input-sm txtSeats" size="5" type="text" value="">

                           </td>
                            <td>
                        4</td>
                      </tr> -->
                    </tbody>
                  </table>
                  <span class="text-danger">The number of allocated seats cannot be greater than the number of Maximum Registrants.</span>

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
                      <input type="radio" checked name="example-1"> Pass-Fail</label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="example-1" > Grade
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
                        'position' => 'left',
                        'html' => '
                        <a href="#" class="btn btn-success js-confirm-save">Save</a>
                        <a href="/events.php" class="btn btn-default">Return to Events</a>
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
        <div class="modal fade" id="modal-global-event" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Availability</h4>
              </div>
              <div class="modal-body">
                <p>To make the event accessible by all HealthStream Customers, set Availability to <b>Cross-Organization</b>.</p>
                <p><b>Registration Access</b> for these events is limited to self-registration and admin of the hosting organization. Meaning, only admins from your organization can register students from their organization. Students from any organization
                  can register themselves. </p>
                </div>
                <div class="modal-footer">
                 <button class="btn btn-default" data-dismiss="modal">Close</button>
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

          $(function () {
            $('.datetimepicker').datetimepicker({
                
                sideBySide: true
            });
          });

          $(".js-seats-allocated").on("input", function(e){
            var $maxReg = parseInt($(".js-max-reg").val());
           
            if (parseInt($(e.target).val()) > $maxReg) {
              $(e.target).parents(".form-group").addClass("has-error");
              $(".text-danger").show();
              $(".js-confirm-save").addClass("disabled");
           

            }
            else{
              $(e.target).parents(".form-group").removeClass("has-error");
              $(".text-danger").hide();
              $(".js-confirm-save").removeClass("disabled");
            }
          });
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

                      //when no seats are availabel, badge turns red
                      if ($("#seats-available span").html() > 0) {
                        var $badge = $("#seats-available span");

                        $badge.removeClass("danger");
                      } else {
                        var $badge = $("#seats-available span");

                        $badge.addClass("danger");
                      }


                      //when user makes event Cross-Org, show this modal once
                      $('.js-checkbox-cross-org').one('change', function(e) {
                        if (e.target.checked) {
                          $('#modal-global-event').modal();
                        }
                      });

                      //change select options when event is cross org
                      $('.js-checkbox-cross-org').on('change', function(e) {
                        var $el = $(".registration-access-select");
                        if (e.target.checked) {
                          $el.empty();
                          var newOptions = {

                            "Self-Registration and Admin of Hosting Organization": "Value1",
                            "Not open for registration": "Value2"
                          };
                          $.each(newOptions, function(key, value) {
                            $el.append($("<option></option>")
                              .attr("value", value).text(key));
                          });

                        } else {
                          var newOptions = {
                            "Admin Only": "Value1",
                            "Self-Registration and Admin": "Value2",
                            "Not open for registration": "Value3"
                          };


                          $el.empty();
                          $.each(newOptions, function(key, value) {
                            $el.append($("<option></option>")
                              .attr("value", value).text(key));
                          });
                        }

                        $(".js-reserved-seating").toggle();
                      });



                      <?php if ( !empty($_GET['save']) && $_GET['save'] === 'true' ) { ?>
                        setTimeout(function() {
                          $('.js-confirm-save').click();
                        }, 500);
                        <?php } ?>

                      });
                    </script>
                    <?= createSiteEnd(); ?>