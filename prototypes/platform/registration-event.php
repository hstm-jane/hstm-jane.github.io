<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Event Settings.';
$patterns['focus']['title'] = 'Event Settings';
$patterns['header']['mainNavActive'] = 'scheduling';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

    <div class="layout layout-min">
        <div class="container">
            <section class="section section-main section-box">
                <div class="container">
                    <div id="rootwizard" class="tabbable tabs-left">
                        <div class="col-md-2 hidden-xs hidden-sm" id="leftCol">
                            <nav class="nav-collapsing-tabs">
                                <ul class="nav wizard-tabs nav-tabs nav-stacked" id="sidebar">
                                    <li class="active">
                                        <a href="#sec0" data-toggle="tab" role="tab">Basic</a>
                                    </li>
                                    <!--  <li><a href="#sec1" data-toggle="tab" role="tab">Rules</a></li> -->
                                    <!--      <li><a href="#sec2" data-toggle="tab" role="tab">Waitlist</a></li> -->
                                    <li>
                                        <a href="#sec1" data-toggle="tab" role="tab">Grading</a>
                                    </li>
                                    <!--   <li><a href="#sec4" data-toggle="tab" role="tab">Alerts</a></li> -->
                                    <li>
                                        <a href="#sec2" data-toggle="tab" role="tab">Permissions</a>
                                    </li>
                                    <!-- <li class="text-center hidden-xs hidden-sm er-top-link"><a class="er-top-link" href="#er-top"> Go To Top <i class="fa fa-arrow-up"></i></a></li> -->
                                </ul>
                            </nav>
                        </div>
                        <!--/left-->
                        <!--right-->
                        <div class="col-md-10">
                            <section class="section section-box event-well" id="sec0">
                                <div class="numberCircle pull-left">1</div>
                                <h2 class="rules-title">Basic Registration</h2>
                                <div class="rhr"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <label class="min">Minimum Registrants</label>
                                            <input type="text-inline" class="form-control text-center input-sm" id="min" placeholder="1">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-3">
                                        <div class="form-group">
                                            <label class="max">Maximum Registrants</label>
                                            <input type="text-inline" class="form-control text-center input-sm" id="max" rows="1" placeholder="8">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <label class="control-label">Registration Access</label>
                                        <div>
                                            <div class="radio">
                                                <input type="radio" name="admin-self" checked=""> Open for Admin Registration
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="admin-self"> Open for Admin and Self-Registration
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="admin-self"> Not open for Registration.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 pad-top-5 pad-bot-15 reduce-width-19">
                                        <strong>Close Registration </strong>
                                    </div>
                                    <div class="col-xs-3 col-sm-2 col-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control text-center input-sm" id="min" rows="0" placeholder="1">
                                        </div>
                                    </div>
                                    <div class="col-xs-5 col-sm-2 col-md-2 text-center">
                                        <select class="form-control option-center input-sm">
                                            <option selected="" id="days"> Day(s)</option>
                                            <option id="hours"> Hour(s)</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pad-top-5">
                                        <strong>before event starts.</strong>
                                    </div>
                                </div>
                                <!--  <hr> -->
                                <!--  <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label class="control-label">Event Visibility</label>
                    <select class="form-control input-sm" name="event-vis-dropdown">
                        <option selected="" value="1">Hide From All</option>
                        <option id="show-catalog" value="2">Show in Catalog</option>
                        <option id="show-student-dropdown" value="3">Only Show The Following Student Groups</option>

                    </select>

                </div>
            </div>
            <div class="col-xs-12 col-sm-6 hidden" id="select-student-text">  <label></label>
              <span style="color:#B2B2B2">[ search student groups below ]</span>
          </div>
      </div>
      <div class="row">

         <div class="col-md-10 hidden" style="margin-top: 20px;margin-bottom:20px" id="select-student-dropdown">
            <div class="resource-picker">
                <div class="resource-picker-search">
                    <div class="input-group">
                        <input type="text" class="form-control resource-picker-input input-sm" placeholder="Search" data-type="groups" tabindex="4">
                        <span class="btn btn-success input-group-addon" style="color:#fff; border: none" data-toggle="modal" data-target="#modal-personnel"><i class="fa fa-search"></i></span>
                    </div>
                </div>
                <div class="resource-picker-overlay">
                    <div class="resource-picker-holder"></div>
                    <div class="resource-picker-clear">
                        <a href="#">Close Results</a>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 25px; margin-bottom: 25px; display: none;" id="resources-table-one">

            <table class="rth-table">
                <tbody>
                    <tr></tr>
                    <tr><th colspan="2" class="rth-resource">Name</th><th class="rth-divider">Remove</th></tr></tbody><tbody><tr class="rth-item" data-id="G0"><td class="rth-resource"><a href="#" class="rth-detail" data-id="G0" data-title="Nurses" data-start="1429542697" data-end="1429543597">Nurses</a></td><td class="rth-block"></td><td class="rth-options"><button class="btn btn-sm btn-danger rth-btn-remove" data-id="G0"><i class="fa fa-minus"></i></button></td></tr></tbody></table>


                </div> -->
                            </section>
                            <!-- Rules -->
                            <!--  <section class="section section-box"  id="sec1" style="background-color: rgba(0, 0, 0, 0.02)">
                <div class="container" style="padding-left: 0px">
                   <div class="numberCircle pull-left">2</div>
                   <h2 class="rules-title">Registration Rules</h2>

                   <div class="rhr"></div>

                   <div class="row">
                       <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="padding-top: 5px;padding-bottom: 5px">
                         <label class="min"></label>
                         <strong>Attend </strong>
                     </div>

                     <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 text-center">
                        <select class="form-control option-center input-sm" name="event-completion-dropdown" id="event-completion-dropdown">
                            <option selected="" id="all" value="1"> All</option>
                            <option id="one" value="2"> One</option>
                            <option id="any" value="3"> Any</option>
                            <option id="exactly" value="4"> exactly</option>
                            <option id="more-than" value="5"> more than</option>
                            <option id="less-than" value="6"> less than</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 hidden" id="how-many-days">
                     <div class="left-inner-addon">
                         <input type="text" class="form-control input-sm text-center" id="min" rows="0" placeholder="1">
                     </div>


                 </div>
                 <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="top: 5px;">
                    <strong> event(s) for completion</strong>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-xs-1">
                    <div class="checkbox" style="margin-top: 5px;margin-left: 8px;">
                        <label>
                          <input type="checkbox" name="checkbox-approval" id="checkbox-approval"> <strong></strong>
                      </label>
                  </div>
              </div>
              <div class="col-xs-10 col-sm-3 text-center">
                <select class="form-control option-center input-sm" name="reg-group-approval" id="reg-group-approval">
                    <option selected="" id="manager" value="1"> Manager</option>
                    <option id="instructor" value="2"> Instructor</option>
                    <option id="administrator" value="3"> Administrator</option>


                </select>
            </div>
            <div class="col-xs-12 col-sm-6" style="top: 5px;">
                <strong> approval required before event registration</strong>
            </div>
        </div>
        <div class="hidden" id="cb-fields">
           <hr>
           <div class="row">
               <div class="col-xs-2 col-sm-1" style="padding-top: 20px;padding-bottom: 20px;">
                  if
              </div>
              <div class="col-xs-10 col-sm-11 col-md-2 col-lg-2" style="padding-top: 15px;">
                 <input type="text" class="form-control input-sm text-center" id="approval-group-ph" rows="0" placeholder="Manager" style="background-color: #FFF;" disabled=""></input>
             </div>
             <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding-top: 20px;">
                 does not respond
             </div>

             <div class="col-xs-3 col-sm-2 col-md-2" style="padding-top: 15px;">

                 <input type="text" class="form-control text-center input-sm" id="min" rows="0" placeholder="1">

             </div>
             <div class="col-xs-5 col-sm-4 col-md-3 col-lg-2" style="top: 15px">
                <select class="form-control option-center input-sm">
                    <option selected="" id="days"> Day(s)</option>
                    <option id="hours"> Hour(s)</option>


                </select>
            </div>
        </div>
        <div clas="row" style="margin-bottom: 84px;">

            <div class="col-xs-12 col-sm-6 col-md-4" style="padding-top: 20px;padding-bottom:20px">
                before event start time, then:
            </div>
            <div class="col-xs-12 col-sm-6" style="padding-top: 20px;padding-bottom:20px">
                <select class="form-control option-center input-sm">
                    <option selected="" id="days"> Student is not registered</option>
                    <option id="hours"> Student is registered</option>
                </select>
            </div>
        </div>

        <div id="area"></div>
    </div>
</div>
</section> -->
                            <!-- Waitlist -->
                            <!-- <section class="section section-box" id="sec2" style="background-color: rgba(0, 0, 0, 0.02)">
 <div class="numberCircle pull-left">3</div>
 <h2 class="rules-title">Waitlist Options</h2>
 <div class="rhr"></div>


 <div class="row">
     <div class="col-xs-12">
        <label class="control-label">Are waitlists allowed?</label>
        <div>
            <div class="radio-inline">
                <label><input type="radio" name="wl-allowed" id="wl-allowed-yes"> Yes</label>
            </div>
            <div class="radio-inline">
                <label><input type="radio" name="wl-allowed" id="wl-allowed-no" checked=""> No</label>
            </div>
        </div>
        <div class="hidden" id="wl-fields">
            <hr>
            <div class="row">
             <div class="col-xs-12">
                <label class="control-label">Can a student be registered for one event and waitlisted for another?</label>
                <div>
                    <div class="radio-inline">
                        <label><input type="radio" name="radio"> Yes</label>
                    </div>
                    <div class="radio-inline">
                        <label><input type="radio" name="radio" checked=""> No</label>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
         <div class="col-xs-12">
            <label class="control-label">When a seat becomes available for a waitlisted selection:</label>

            <div class="radio">
                <label>
                    <input type="radio" name="student-available"> Student has 24 hours to register or student is dropped from waitlist
                </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="student-available" checked=""> Student is automatically registered to waitlist and dropped from other registration
            </label>
        </div>
        <hr>

    </div>
</div> -->
                            <!-- <div clas="row">
    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">How many waitlists can a student be on?</label>
            <input type="text" style="width:88px" class="form-control required text-center input-sm" placeholder="1">
        </div>
    </div>

</div> -->
                            <!-- <div class="row"> -->
                            <!--    <hr> -->
                            <!--  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2" style="padding-top: 5px;padding-bottom: 20px">
       <strong>Waitlist closes </strong>
   </div>
   <div class="col-xs-4 col-sm-2" style="top: 0px;">
       <input type="text" class="form-control text-center input-sm" id="min" rows="0" placeholder="1">
   </div>

   <div class="col-xs-5 col-sm-4 col-md-2 col-lg-2 text-center">
    <select class="form-control option-center input-sm">
        <option selected="" id="days">Day(s)</option>
        <option id="hours"> Hour(s)</option>


    </select>
   </div>
    <div class="col-xs-12 col-sm-4" style="top: 5px;">
        <strong> Before Event Starts</strong>
    </div>
</div>


</section> -->
                            <!-- Grading -->
                            <section class="section section-box event-well" id="sec1">
                                <div class="numberCircle pull-left">2</div>
                                <h2 class="rules-title">Grading</h2>
                                <div class="rhr"></div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group pad-bot-1">
                                            <label class="min">What is required to complete this event?</label>
                                            <div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="radio-one" id="attendance-only"> Attendance Only
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio-one" checked=""> Pass-Fail
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-2 col-md-2 reduce-width-10">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="radio-one"> Grade
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-3 col-sm-2 col-md-2 col-lg-1 pad-top-5">
                                                <input type="text" class="form-control input-sm text-center" id="min" rows="0" placeholder="80" width="45px">
                                            </div>
                                            <div class="col-xs-3 lg-screen-margin pad-top-10">
                                                / 100
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label class="no-show">A "No-Show" to this event means:</label>
                                            <!-- <div class="radio"> -->
                                            <!--  <label>
          <input type="radio" name="no-show-means" checked="">  -->
                                            <br /> Student is allowed to re-register for a different event.
                                            <!--  </label> -->
                                            <!--  </div> -->
                                            <!-- <div class="radio">
              <label></label>
              <input type="radio" name="radio-two"> Admin approval required for re-register

          </div>
          <div class="radio">
              <label></label>
              <input type="radio" name="radio-two"> Student fails the event

          </div> -->
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label class="student-fails">If a student fails the event, then:</label>
                                            <!--  <div class="radio">
      <label>
        <input type="radio" name="student-fails-means" checked="">  -->
                                            <br /> Student is allowed to re-register for a different event.
                                            <!--   </label>
    </div> -->
                                            <!--  <div class="col-xs-12 col-sm-7 col-md-6">
     <select class="form-control input-sm">
      <option selected="">Student is allowed to re-register for a different event</option>
      <option>Admin approval required for re-register</option>
      <option> Student fails the course </option>

  </select>
</div> -->
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- 5. Alerts -->
                            <!-- <section class="section section-box" id="sec4" style="background-color: rgba(0, 0, 0, 0.02)">
   <div class="numberCircle pull-left">5</div>
   <h2 class="rules-title">Alerts</h2>
   <div class="rhr"></div>
   <div class="row" style="padding-top:5px">
      <div class="col-xs-12">
        <label>Event Reminders</label>
    </div>
</div>
<div class="row" style="padding-top:15px;">
    <div class="col-xs-4 col-sm-2" style="padding-top:5px;padding-bottom:10px">
      <label></label>
      Remind
  </div>
  <div class="col-xs-5 col-sm-3 text-center" style="margin-left: -40px;padding-bottom:10px">
      <select class="form-control option-center input-sm">
          <option selected="" id="days"> Students</option>
          <option id="hours"> Instructors</option>
          <option id="hours"> Technicians</option>
          <option id="hours"> Teaching Assistants</option>


      </select>
  </div>

  <div class="col-xs-3 col-sm-2" style="padding-bottom:10px">
         <input type="text" class="form-control text-center input-sm" id="min" rows="0" placeholder="1">
 </div>
 <div class="col-xs-4 col-sm-2 col-md-2" style=" padding-bottom:10px">
  <select class="form-control input-sm">
      <option selected="" id="days"> Day(s)</option>
      <option id="hours"> Hour(s)</option>


  </select>
</div>
<div class="col-xs-5 col-sm-3 col-md-3">
    <span style="color: red; padding-right:5px;">before</span> event
</div>

<div class="col-xs-12">
  <label class="control-label"></label>
  <div style="padding-left:5px">
    Repeat
    <div class="radio-inline" style="padding-left:45px">
      <input type="radio" name="before-event"> Daily
  </div>
  <div class="radio-inline">
      <input type="radio" name="before-event"> Weekly
  </div>
</div>




<div class="row" style="padding-top:15px;">
    <div class="col-xs-4 col-sm-2" style="padding-top:5px;padding-bottom:10px">
      <label></label>
      Remind
  </div>
  <div class="col-xs-5 col-sm-3 text-center" style="margin-left: -40px;padding-bottom:10px">
      <select class="form-control option-center input-sm">
          <option selected="" id="days"> Students</option>
          <option id="hours"> Instructors</option>
          <option id="hours"> Technicians</option>
          <option id="hours"> Teaching Assistants</option>


      </select>
  </div>

  <div class="col-xs-3 col-sm-2" style="padding-bottom:10px">
         <input type="text" class="form-control text-center input-sm" id="min" rows="0" placeholder="1">
 </div>
 <div class="col-xs-4 col-sm-2 col-md-2" style=" padding-bottom:10px">
  <select class="form-control input-sm">
      <option selected="" id="days"> Day(s)</option>
      <option id="hours"> Hour(s)</option>


  </select>
</div>
<div class="col-xs-5 col-sm-3 col-md-3">
    <span style="color: red; padding-right:5px;">after</span> event
</div>

<div class="col-xs-12">
  <label class="control-label"></label>
  <div style="padding-left:5px">
    Repeat
    <div class="radio-inline" style="padding-left:45px">
      <input type="radio" name="before-event"> Daily
  </div>
  <div class="radio-inline">
      <input type="radio" name="before-event"> Weekly
  </div>
</div>
<hr>
<div class="row">
   <div class="col-xs-12">
      <label class="control-label">Notify students when waitlist closes?</label>
      <div>
          <div class="radio-inline">
              <label></label><input type="radio" name="wl-closes" checked=""> Yes
          </div>
          <div class="radio-inline">
              <label></label><input type="radio" name="wl-closes"> No
          </div>
          <hr>
      </div>
  </div>
</div>

<div class="row">
   <div class="col-xs-12">
      <label class="control-label">Notify student when seat is available from waitlist section?</label>
      <div>
          <div class="radio-inline">
              <label></label><input type="radio" name="wl-avail" checked=""> Yes
          </div>
          <div class="radio-inline">
              <label></label><input type="radio" name="wl-avail"> No
          </div>

      </div>
  </div>
</div>





-->
                            <section class="section section-box event-well" id="sec2">
                                <div class="numberCircle pull-left">3</div>
                                <h2 class="rules-title">Permissions</h2>
                                <div class="rhr"></div>
                                <p>
                                </p>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Event Visibility</label>
                                            <select class="form-control input-sm" name="event-vis-dropdown">
                                                <option selected="" value="1">Hide From All</option>
                                                <option id="show-catalog" value="2">Show in Catalog</option>
                                                <option id="show-student-dropdown" value="3">Only Show The Following Student Groups</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 hidden pad-top-28" id="select-student-text">
                                        <span style="color:#B2B2B2">[ search student groups below ]</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10 hidden pad-bot-20" id="select-student-dropdown">
                                        <div class="resource-picker">
                                            <div class="resource-picker-search">
                                                <div class="input-group">
                                                    <input type="text" class="form-control resource-picker-input input-sm" placeholder="Search" data-type="groups" tabindex="4">
                                                    <span class="btn-success input-group-addon" style="color:#fff; border: none" data-toggle="modal" data-target="#modal-personnel"><i class="fa fa-search"></i></span>
                                                </div>
                                            </div>
                                            <div class="resource-picker-overlay">
                                                <div class="resource-picker-holder"></div>
                                                <div class="resource-picker-clear">
                                                    <a href="#">Close Results</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pad-bot-25 hidden" id="resources-table-one">
                                        <table class="rth-table">
                                            <tbody>
                                                <tr></tr>
                                                <tr>
                                                    <th colspan="2" class="rth-resource">Name</th>
                                                    <th class="rth-divider">Remove</th>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr class="rth-item" data-id="G0">
                                                    <td class="rth-resource">
                                                        <a href="#" class="rth-detail" data-id="G0" data-title="Nurses" data-start="1429542697" data-end="1429543597">Nurses</a>
                                                    </td>
                                                    <td class="rth-block"></td>
                                                    <td class="rth-options">
                                                        <button class="btn btn-sm btn-danger rth-btn-remove" data-id="G0"><i class="fa fa-minus"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                            </section>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'classes' => array('hidden-xs'),
                                            'html' => '
                                                <a href="/scheduling-calendar.php" class="btn btn-success">Save</a>
                                                <a href="/scheduling-calendar.php" class="btn btn-default"> Cancel</a>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>


                            </div>
                            <!--/right-->
                        </div>
                        <!--/row-->
                    </div>
                    <!--/container-->
            </section>
            </div>
            <!-- /layout -->
            <!-- Modal -->
            <div id="modal-example" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                            <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body">
                            <section class="section">
                            </section>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-success">Success</a>
                            <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /modal -->
            <?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>

                <script>
                $(function() {

                    // add / remove button functionality for Ratios
                    $(document).on('click', '.btn-add', function(e) {
                        e.preventDefault();

                        var controlForm = $('.controls form:first'),
                            currentEntry = $('.controls form:first .entry:first'),
                            newEntry = $(currentEntry.clone()).appendTo(controlForm)

                        newEntry.find('select').val('')
                        controlForm.find('.entry:last .btn-first')
                            .addClass('btn-remove')

                        .html('<span class="fa fa-minus"></span>');
                        controlForm.find('.entry:last').removeClass('hidden')

                    }).on('click', '.btn-remove', function(e) {
                        $(this).parents('.entry:last').remove();

                        e.preventDefault();
                        return false;
                    });

                    // add / remove button functionality for Seat Allocation

                    $(document).on('click', '.btn-add-two', function(e) {
                        e.preventDefault();

                        var controlForm = $('.controls-two form:first'),
                            currentEntry = $('.controls-two form:first .entry:first'),
                            newEntry = $(currentEntry.clone()).appendTo(controlForm);

                        newEntry.find('select').val('');
                        controlForm.find('.entry:last .btn-first')
                            .addClass('btn-remove')

                        .html('<span class="fa fa-minus"></span>');
                        controlForm.find('.entry:last').removeClass('hidden')

                    }).on('click', '.btn-remove', function(e) {
                        $(this).parents('.entry:first').remove();

                        e.preventDefault();
                        return false;
                    });


                    // disable text fields
                    $('#attendance-only').click(function() {
                        $('#attended').removeAttr("disabled");
                        $('#attended-text').removeClass('text-disabled');
                    });
                    $('#attended').click(function() {
                        $('#elapses-days').removeAttr("disabled");
                        $('#elapses-count').removeAttr("disabled");
                        $('#elapses-time').removeAttr("disabled");
                        $('#elapses-start').removeAttr("disabled");
                        $('#elapses-text').removeClass('text-disabled');
                    });




                    // ratios - restrict dropdown selection duplicates

                    $('select[name="ratios-dropdown"]').change(function() {

                        if ($(this).val() == "4") {

                            if ($('#ratios-dropdown-next option[value=4]').prop('selected', true)) {

                                $('#ratios-dropdown-next option[value=1]').attr("selected")
                                $('#ratios-dropdown-next option[value=4]').prop('selected', false)

                            }


                            $('#ratios-dropdown-next option[value=4]').prop('disabled', true);
                            $('#ratios-dropdown-next option[value=2]').prop('disabled', false);
                            $('#ratios-dropdown-next option[value=3]').prop('disabled', false);
                            $('#ratios-dropdown-next option[value=1]').prop('disabled', false);


                        } else if ($(this).val() == "3") {




                            $('#ratios-dropdown-next option[value=3]').prop('disabled', true);
                            $('#ratios-dropdown-next option[value=2]').prop('disabled', false);
                            $('#ratios-dropdown-next option[value=4]').prop('disabled', false);
                            $('#ratios-dropdown-next option[value=1]').prop('disabled', false);

                            if ($('#ratios-dropdown-next option[value=3]').prop('selected', true)) {

                                $('#ratios-dropdown-next option[value=2]').attr("selected")
                                $('#ratios-dropdown-next option[value=3]').prop('selected', false)
                            }

                        } else if ($(this).val() == "2") {



                            $('#ratios-dropdown-next option[value=2]').prop('disabled', true);
                            $('#ratios-dropdown-next option[value=3]').prop('disabled', false);
                            $('#ratios-dropdown-next option[value=4]').prop('disabled', false);
                            $('#ratios-dropdown-next option[value=1]').prop('disabled', false);

                            if ($('#ratios-dropdown-next option[value=2]').prop('selected', true)) {

                                $('#ratios-dropdown-next option[value=3]').attr("selected")
                                $('#ratios-dropdown-next option[value=2]').prop('selected', false)

                            }

                        } else if ($(this).val() == "1") {



                            $('#ratios-dropdown-next option[value=1]').prop('disabled', true);
                            $('#ratios-dropdown-next option[value=2]').prop('disabled', false);
                            $('#ratios-dropdown-next option[value=4]').prop('disabled', false);
                            $('#ratios-dropdown-next option[value=3]').prop('disabled', false);


                            if ($('#ratios-dropdown-next option[value=1]').prop('selected', true)) {

                                $('#ratios-dropdown-next option[value=4]').attr("selected")
                                $('#ratios-dropdown-next option[value=1]').prop('selected', false)
                            }

                        }
                    });


                    // visibility
                    $("#reg-group-approval").change(function() {
                            var str = "";
                            var id = "";
                            $("#reg-group-approval option:selected").each(function() {
                                str += $(this).text() + " ";
                                id = $(this).attr('id');
                                //$("#"+id).hide();
                            });
                            var tx = $("#approval-group-ph").add;
                            var button = "";
                            $("#approval-group-ph").html(tx + " " + str);
                        })
                        .trigger('change');
                });


                // Basic Registration - show student dropdown
                $('select[name="event-vis-dropdown"]').change(function() {

                    if ($(this).val() == "3") {

                        $('#select-student-dropdown').removeClass('hidden')
                        $('#select-student-text').removeClass('hidden')

                    } else if ($(this).val() == "2") {

                        $('#select-student-dropdown').addClass('hidden')
                        $('#select-student-text').addClass('hidden')

                    } else if ($(this).val() == "1") {

                        $('#select-student-dropdown').addClass('hidden')
                        $('#select-student-text').addClass('hidden')

                    }
                });


                // Registration Rules - show "How Many Days"
                $('select[name="event-completion-dropdown"]').change(function() {

                    if ($(this).val() == "6") {

                        $('#how-many-days').removeClass('hidden')


                    } else if ($(this).val() == "5") {

                        $('#how-many-days').removeClass('hidden')


                    } else if ($(this).val() == "4") {

                        $('#how-many-days').removeClass('hidden')


                    } else if ($(this).val() == "3") {

                        $('#how-many-days').addClass('hidden')


                    } else if ($(this).val() == "2") {

                        $('#how-many-days').addClass('hidden')


                    } else if ($(this).val() == "1") {

                        $('#how-many-days').addClass('hidden')


                    }
                });

                // Registration Rules - Append data to input field
                $('select[name="reg-group-approval"]').change(function() {

                    if ($(this).val() == "3") {

                        $('#approval-group-ph').attr("placeholder", "Administrator");

                    } else if ($(this).val() == "2") {

                        $('#approval-group-ph').attr("placeholder", "Instructor");

                    } else if ($(this).val() == "1") {

                        $('#approval-group-ph').attr("placeholder", "Manager");

                    }
                });
                // Registration Rules checkbox approval shows hidden sub-fields
                $('#checkbox-approval').click(function() {

                    $('#cb-fields').toggleClass('hidden');


                });
                // Waitlist Options radio selected yes shows hidden sub-fields
                $('#wl-allowed-yes').click(function() {

                    $('#wl-fields').removeClass('hidden');


                });
                // Waitlist Options radio selected no hides sub-fields
                $('#wl-allowed-no').click(function() {

                    $('#wl-fields').addClass('hidden');


                });
                // ratios - hide field until user clicks button to add ratio
                $('#show-ratios').click(function() {

                    $('#ratio-fields').toggleClass('hidden');
                    $(this).toggleClass('hidden');
                    $('#hide-ratios').removeClass('hidden')

                });
                $('#hide-ratios').click(function() {

                    $('#ratio-fields').toggleClass('hidden');
                    $(this).toggleClass('hidden');
                    $('#show-ratios').removeClass('hidden')

                });
                // Seat Allocation - hide field until user clicks button to add seat allocation fields
                $('#show-seat-allocation').click(function() {

                    $('#seat-allocation-fields').toggleClass('hidden');
                    $(this).toggleClass('hidden');
                    $('#hide-seat-allocation').removeClass('hidden')


                });
                $('#hide-seat-allocation').click(function() {

                    $('#seat-allocation-fields').toggleClass('hidden');
                    $(this).toggleClass('hidden');
                    $('#show-seat-allocation').removeClass('hidden')


                });


                /* activate sidebar */
                $('#sidebar').affix({
                    offset: {
                        top: 200
                    }
                });

                /* activate scrollspy menu */
                var $body = $(document.body);
                var navHeight = $('.navbar').outerHeight(true) + 10;

                $body.scrollspy({
                    target: '#leftCol',
                    offset: navHeight
                });

                /* smooth scrolling sections */
                $('li a[href*=#]:not([href=#])').click(function() {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top - 5
                            }, 300);
                            return false;
                        }
                    }
                });
                </script>
                <?= createSiteEnd(); ?>

