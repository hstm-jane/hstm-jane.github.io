<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Registration Settings';
$patterns['focus']['title'] = 'Registration Settings';
$patterns['header']['mainNavActive'] = 'scheduling';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
    <style>
    .col-md-10 {
        margin-bottom: -20px;
    }

    .rth-table tbody tr {
        background-color: #fff;
    }
    </style>

    <div class="layout layout-min">
        <div class="container">
            <section class="section section-main section-box">
                <div class="row">
                    <div class="col-md-12 ">
                        <div id="rootwizard" class="tabbable tabs-left">
                            <ul>
                                <li>
                                    <a href="#tab1" data-toggle="tab">Registration
                                        <span class="pull-right hidden"><i class="fa fa-check" style="color:green"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab2" data-toggle="tab">Rules
                                        <span class="pull-right hidden"><i class="fa fa-check" style="color:green"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab3" data-toggle="tab">Seat Allocation
                                        <span class="pull-right hidden"><i class="fa fa-check" style="color:green"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab4" data-toggle="tab">Ratios
                                        <span class="pull-right hidden"><i class="fa fa-check" style="color:green"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab5" data-toggle="tab">Waitlist
                                        <span class="pull-right hidden"><i class="fa fa-check" style="color:green"></i></span>
                                    </a>
                                </li>
                                <!-- <li><a href="#tab6" data-toggle="tab">Instructors</a></li> -->
                                <li>
                                    <a href="#tab6" data-toggle="tab">Grading
                                        <span class="pull-right hidden"><i class="fa fa-check" style="color:green"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab7" data-toggle="tab">Alerts
                                        <span class="pull-right hidden"><i class="fa fa-check" style="color:green"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab8" style="display: none" data-toggle="tab"></a>
                                </li>
                                <li class="text-center hidden-xs hidden-sm">
                                    <a href="/registration/rules-summary" style="background: #fff; border: none !Important"> Go To Advanced <i class="fa fa-arrow-right"></i></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="col-md-8 col-md-offset-3 hidden-md hidden-lg" style="padding-top:3%">
                                    <ul class="pager wizard" style="margin: 0px 0;">
                                        <li class="previous first" style="display:none;font:">
                                            <a href="#">First</a>
                                        </li>
                                        <li class="previous">
                                            <a href="#">Previous</a>
                                        </li>
                                        <li class="next">
                                            <a href="#" style="width:86px">Next</a>
                                        </li>
                                        <li class="next last" style="width:86px; float: none">
                                            <a href="#tab8" style="float:none">Skip Wizard</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="tab1">
                                    <div class="col-md-10">
                                        <!-- 1. basic registration -->
                                        <section class="section section-box" id="event-resources" style="background-color: rgba(0, 0, 0, 0.02)">
                                            <div class="numberCircle pull-left">1</div>
                                            <h2 class="rules-title">Basic Registration</h2>
                                            <div class="rhr"></div>
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <label class="min">Minimum Registrants</label>
                                                    <input type="text-inline" style="width: 146px" class="form-control text-center input-sm" id="min" placeholder="1">
                                                </div>
                                                <div class="col-xs-4">
                                                    <label class="max">Maximum Registrants</label>
                                                    <input type="text-inline" style="width: 146px" class="form-control text-center input-sm" id="max" rows="1" placeholder="10">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label> </label>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="checkbox"> no limit
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <label class="access">Registration Access</label>
                                                    <select class="form-control option-center input-sm" style="min-width: 220px;">
                                                        <option selected="" id="admin-only" value="1"> Admin Only</option>
                                                        <option id="self-register" value="2"> Self and Admin Registration</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="row" style="padding-top:5px">
                                                <div class="col-xs-3" style="top: 5px;">
                                                    <label class="min"></label>
                                                    <strong>Close Registration </strong>
                                                </div>
                                                <div class="col-xs-2" style="left: -73px;top: 0px;">
                                                    <div class="left-inner-addon">
                                                        <input type="text" class="form-control text-center input-sm" id="min" rows="0" placeholder="1">
                                                    </div>
                                                </div>
                                                <div class="col-xs-3 text-center" style="left: -74px;">
                                                    <select class="form-control option-center input-sm">
                                                        <option selected="" id="days"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Day(s)</option>
                                                        <option id="hours"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hour(s)</option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-3" style="top: 5px;left: -75px;">
                                                    <strong> Before Event Starts</strong>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Event Visibility</label>
                                                        <select class="form-control input-sm" name="event-vis-dropdown">
                                                            <option selected="" value="1">Hide From All</option>
                                                            <option id="show-catalog" value="2">Show in Catalog</option>
                                                            <option id="show-student-dropdown" value="3">Only Show The Following Student Groups</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 hidden" id="select-student-text" style="top: 29px;">
                                                    <label></label>
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
                                            </div>
                                            <div style="margin-top:25px;margin-bottom:25px" id="resources-table-one">
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
                                                <!--   <table class="table">
      <thead>
        <tr>

          <th>Group</th>
          <th>Seats</th>
          <th></th>
          <th><div class="pull-right">Remove</div></th>
        </tr>
      </thead>
      <tbody>
        <tr>

          <td>Physicians</td>
          <td><input type="text" class="form-control text-center input-sm" style="width:60px" id="min" rows="0" placeholder="1">
                       </td>
                       <td></td>
          <td><div class="btn btn-sm btn-danger pull-right"><i class="fa fa-minus"></i></div></td>
        </tr>
        <tr>


             <td>Nurses</td>
          <td><input type="text" class="form-control text-center input-sm" style="width:60px" id="min" rows="0" placeholder="1">
                       </td>
                       <td></td>
          <td><div class="btn btn-sm btn-danger pull-right"><i class="fa fa-minus"></i></div></td>
        </tr>
        <tr>

             <td>Doctors</td>
          <td><input type="text" class="form-control text-center input-sm" style="width:60px" id="min" rows="0" placeholder="1">
                       </td>
                       <td></td>
          <td><div class="btn btn-sm btn-danger pull-right"><i class="fa fa-minus"></i></div></td>
        </tr>
      </tbody>
    </table> -->
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <div class="col-md-10">
                                        <!-- 2. registration rules -->
                                        <section class="section section-box" style="background-color: rgba(0, 0, 0, 0.02)">
                                            <div class="numberCircle pull-left">2</div>
                                            <h2 class="rules-title">Registration Rules</h2>
                                            <!--  <li class="next pull-right"><a href="#" style="width:86px">Next <i class="fa fa-chevron-right"></i></a></li> -->
                                            <div class="rhr"></div>
                                            <div class="row">
                                                <div class="col-xs-2" style="top: 5px;">
                                                    <label class="min"></label>
                                                    <strong>Attend </strong>
                                                </div>
                                                <div class="col-xs-4 text-center" style="left: -73px;">
                                                    <select class="form-control option-center input-sm" name="event-completion-dropdown" id="event-completion-dropdown" style="width:148px">
                                                        <option selected="" id="all" value="1"> All</option>
                                                        <option id="one" value="2"> One</option>
                                                        <option id="any" value="3"> Any</option>
                                                        <option id="exactly" value="4"> exactly</option>
                                                        <option id="more-than" value="5"> more than</option>
                                                        <option id="less-than" value="6"> less than</option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-2 hidden" id="how-many-days" style="left: -177px;">
                                                    <div class="left-inner-addon">
                                                        <input type="text" class="form-control input-sm text-center" id="min" rows="0" placeholder="1" style="width:100px;">
                                                    </div>
                                                </div>
                                                <div class="col-xs-4" style="top: 5px;left: -197px;">
                                                    <strong> event(s) for completion</strong>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <div class="checkbox" style="margin-top: 5px;margin-left: 18px;">
                                                        <label>
                                                            <input type="checkbox" name="checkbox-approval" id="checkbox-approval">
                                                            <Strong></strong>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-3 text-center">
                                                    <select class="form-control option-center input-sm" name="reg-group-approval" id="reg-group-approval">
                                                        <option selected="" id="manager" value="1"> Manager</option>
                                                        <option id="instructor" value="2"> Instructor</option>
                                                        <option id="administrator" value="3"> Administrator</option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-6" style="top: 5px;left: 0px;">
                                                    <strong> approval required before event registration</strong>
                                                </div>
                                            </div>
                                            <div class="hidden" id="cb-fields">
                                                <hr />
                                                <div class="row">
                                                    <div class="col-xs-1" style="top: 20px; padding-left:20px">
                                                        <label></label>if
                                                    </div>
                                                    <div class="col-xs-2" style="left: -31px;top: 15px;">
                                                        <div class="left-inner-addon">
                                                            <input type="text" class="form-control input-sm text-center" id="approval-group-ph" rows="0" placeholder="" style="width:120px; background-color: #FFF;" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-3" style="top: 20px; margin-left:-30px">
                                                        <label class="min"></label>
                                                        does not respond
                                                    </div>
                                                    <div class="col-xs-2" style="left: -67px;top: 15px;">
                                                        <div class="left-inner-addon">
                                                            <input type="text" class="form-control text-center input-sm" id="min" rows="0" placeholder="1">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-2 text-center" style="left: -58px; top: 15px">
                                                        <select class="form-control option-center input-sm">
                                                            <option selected="" id="days"> Day(s)</option>
                                                            <option id="hours"> Hour(s)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div clas="row" style="margin-bottom: 84px;">
                                                    <div class="col-xs-6" style="top: 40px;padding-left: 43px;">
                                                        before event start time, then:
                                                    </div>
                                                    <div class="col-xs-4" style="margin-top: 35px; margin-left: -184px;">
                                                        <select class="form-control option-center input-sm" style="width: 245px;">
                                                            <option selected="" id="days"> Student is not registered</option>
                                                            <option id="hours"> Student is registered</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div id="area"></div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <div class="col-md-10">
                                        <!-- 3. seat allocation -->
                                        <section class="section section-box" style="background-color: rgba(0, 0, 0, 0.02)" id="event-resources-two">
                                            <!-- <button type="button" id="hide-seat-allocation" class="btn btn-danger btn-xs hidden pull-right" style="margin-top: 10px">Remove All</button> -->
                                            <div class="numberCircle pull-left">3</div>
                                            <h2 class="rules-title">Seat Allocation</h2>
                                            <div class="rhr"></div>
                                            <!-- start -->
                                            <div class="container hidden" id="seat-allocation-fields">
                                                <div class="col-sm-12">
                                                    <div style="margin-top: 20px;margin-bottom:40px" id="select-student-dropdown">
                                                        <div class="resource-picker">
                                                            <div class="resource-picker-search">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control resource-picker-input input-sm" placeholder="Search User Groups" data-type="groups" tabindex="4">
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
                                                </div>
                                                <div class="container" id="resources-table">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 text-center">
                                                    <button type="button" id="show-seat-allocation" class="btn btn-success btn-sm">Add Seat Allocation</button>
                                                </div>
                                                <!-- end -->
                                        </section>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab4">
                                        <div class="col-md-10">
                                            <!-- 4. ratios -->
                                            <section class="section section-box" style="background-color: rgba(0, 0, 0, 0.02)">
                                                <div class="numberCircle pull-left">4</div>
                                                <h2 class="rules-title">Ratios</h2>
                                                <hr />
                                                <!-- start -->
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="control-group hidden" id="ratio-fields">
                                                            <div class="controls">
                                                                <form role="form" autocomplete="off">
                                                                    <div class="entry input-group col-xs-12">
                                                                        <div class="col-xs-2" style="top: 0px;">
                                                                            <div class="left-inner-addon">
                                                                                <input type="text" class="form-control text-center input-sm" id="min" rows="0" placeholder="8">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-4" style="top: 0px;">
                                                                            <select class="form-control option-center input-sm" id="ratios-dropdown" name="ratios-dropdown">
                                                                                <option selected="" id="students" value="1"> Students</option>
                                                                                <option class="" id="instructors" value="2"> Instructors</option>
                                                                                <option class="" id="technicians" value="3"> Technicians</option>
                                                                                <option class="" id="teaching-assistants" value="4"> Teaching Assistants</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-xs-2" style="top: 0px;">
                                                                            <div class="left-inner-addon">
                                                                                <input type="text" class="form-control text-center input-sm" id="min" rows="0" placeholder="1">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-4" style="top: 0px;">
                                                                            <select class="form-control option-center input-sm" id="ratios-dropdown-next" name="ratios-dropdown-next">
                                                                                <option class="" id="students" value="1" disabled> Students</option>
                                                                                <option selected="" class="" id="instructors" value="2"> Instructors</option>
                                                                                <option class="" id="technicians" value="3"> Technicians</option>
                                                                                <option class="" id="teaching-assistants" value="4"> Teaching Assistants</option>
                                                                            </select>
                                                                        </div>
                                                                        <span class="input-group-btn">
                                                                            <button class="btn btn-danger btn-sm btn-first" type="button" style="margin-top: 11px">
                                                                                <span class="fa fa-minus"></span>
                                                                            </button>
                                                                        </span>
                                                                        <hr />
                                                                    </div>
                                                                </form>
                                                                <br>
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-success btn-sm btn-add" type="button" style="margin-top: -4px;margin-left: 15px;">
                                                                        <span class="fa fa-plus"></span>
                                                                    </button>
                                                                </span>
                                                                <br>
                                                                <small style="margin-left:13px">Press <span class="fa fa-plus gs"></span> to add another ratio</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 text-center">
                                                            <button type="button" id="show-ratios" class="btn btn-success btn-sm">Add Ratios</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end -->
                                            </section>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab5">
                                        <div class="col-md-10">
                                            <!-- 5. waitlist options -->
                                            <section class="section section-box" style="background-color: rgba(0, 0, 0, 0.02)">
                                                <div class="numberCircle pull-left">5</div>
                                                <h2 class="rules-title">Waitlist Options</h2>
                                                <div class="rhr"></div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <label class="control-label">Are waitlists allowed?</label>
                                                        <div>
                                                            <div class="radio-inline">
                                                                <label>
                                                                    <input type="radio" name="wl-allowed" id="wl-allowed-yes"> Yes</label>
                                                            </div>
                                                            <div class="radio-inline">
                                                                <label>
                                                                    <input type="radio" name="wl-allowed" id="wl-allowed-no" checked> No</label>
                                                            </div>
                                                        </div>
                                                        <div class="hidden" id="wl-fields">
                                                            <hr />
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <label class="control-label">Can a student be registered for one event and waitlisted for another?</label>
                                                                    <div>
                                                                        <div class="radio-inline">
                                                                            <label>
                                                                                <input type="radio" name="radio"> Yes</label>
                                                                        </div>
                                                                        <div class="radio-inline">
                                                                            <label>
                                                                                <input type="radio" name="radio" checked> No</label>
                                                                        </div>
                                                                        <hr />
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
                                                                            <input type="radio" name="student-available" checked> Student is automatically registered to waitlist and dropped from other registration
                                                                        </label>
                                                                    </div>
                                                                    <hr />
                                                                </div>
                                                            </div>
                                                            <div clas="row">
                                                                <div class="col-xs-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">How many waitlists can a student be on?</label>
                                                                        <input type="text" style="width:88px" class="form-control required text-center input-sm" placeholder="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="margin-top: 58px;">
                                                                <hr />
                                                                <div class="col-xs-3" style="top: 5px;">
                                                                    <label class="min"></label>
                                                                    <strong>Waitlist closes </strong>
                                                                </div>
                                                                <div class="col-xs-2" style="left: -99px;top: 0px;">
                                                                    <div class="left-inner-addon">
                                                                        <input type="text" class="form-control text-center input-sm" id="min" rows="0" placeholder="1">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-3 text-center" style="left: -100px;">
                                                                    <select class="form-control option-center input-sm">
                                                                        <option selected="" id="days"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Day(s)</option>
                                                                        <option id="hours"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hour(s)</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xs-3" style="top: 5px;left: -105px;">
                                                                    <strong> Before Event Starts</strong>
                                                                </div>
                                                            </div>
                                                        </div>
                                            </section>
                                            </div>
                                            </div>
                                            <!--   <div class="tab-pane" id="tab6"> -->
                                            <!-- Instructors -->
                                            <!--  <div class="col-md-10">
                <section class="section section-box" style="background-color: rgba(0, 0, 0, 0.02)">
                     <div class="numberCircle pull-left">6</div>
                     <h2 class="rules-title">Instructors</h2>
                     <div class="rhr"></div>

                      <div class="row">
                         <div class="col-xs-12">
                            <label class="control-label">Allow instructors to self-enroll?</label>
                            <div>
                                <div class="radio-inline">
                                    <label></label><input type="radio" name="radio"> Yes
                                </div>
                                <div class="radio-inline">
                                    <label></label><input type="radio" name="radio"> No
                                </div>

                         </div>
                        </div>
                      </div>



                </section>

            </div>
        </div> -->
                                            <div class="tab-pane" id="tab6">
                                                <div class="col-md-10">
                                                    <!-- 6. grading -->
                                                    <section class="section section-box" style="background-color: rgba(0, 0, 0, 0.02)">
                                                        <div class="numberCircle pull-left">6</div>
                                                        <h2 class="rules-title">Grading</h2>
                                                        <div class="rhr"></div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                    <label class="min">What is required to complete this event?</label>
                                                                    <div>
                                                                        <div class="radio">
                                                                            <label>
                                                                                <input type="radio" name="radio-one" id="attendance-only" checked> Attendance Only
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox" style="padding-left: 50px;">
                                                                            <label></label>
                                                                            <input type="checkbox" name="checkbox" class="" id="attended">
                                                                            <span id="attended-text">Automatically mark event "Attended":</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row" style="padding-top:5px">
                                                                    <div class="col-xs-1">
                                                                    </div>
                                                                    <div class="col-xs-2" style="left: -33px;top: 0px;">
                                                                        <div class="left-inner-addon">
                                                                            <input type="text" class="form-control text-center input-sm" id="elapses-count" rows="0" placeholder="1" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-2 text-center" style="left: -38px;">
                                                                        <select class="form-control option-center input-sm" id="elapses-days" disabled>
                                                                            <option selected="" id="days"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Day(s)</option>
                                                                            <option id="hours"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hour(s)</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xs-2 text-center" style="margin-left:-42px">
                                                                        <select class="form-control option-center input-sm" id="elapses-time" disabled>
                                                                            <option selected="" id=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;After</option>
                                                                            <option id="hours"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Before</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xs-2" style="top: 5px; margin-left:-2px">
                                                                        <span class="text-disabled" id="elapses-text">event</span>
                                                                    </div>
                                                                    <div class="col-xs-2 text-center" style="margin-left:-82px">
                                                                        <select class="form-control option-center input-sm" id="elapses-start" disabled>
                                                                            <option selected="" id=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Starts</option>
                                                                            <option id="hours"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ends</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--  <div class="col-xs-3" style="top: 5px; margin-left:-2px">
                       <span class="text-disabled" id="elapses-text">time elapses by</span>

                      </div> -->
                                                                    <!-- <div class="col-xs-2" style="left: -83px;top: 0px;">
                       <div class="left-inner-addon">
                       <input type="text" class="form-control text-center input-sm" id="elapses-count" rows="0" placeholder="1" disabled>
                        </div>
                      </div> -->
                                                                    <!-- <div class="col-xs-3 text-center" style="left: -78px;">
                            <select class="form-control option-center input-sm" id="elapses-days" disabled>
                                <option selected="" id="days"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Day(s)</option>
                                <option id="hours"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hour(s)</option>


                            </select>
                    </div> -->
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="radio-one"> Pass-Fail
                                                                    </label>
                                                                </div>
                                                                <div class="row" style="padding-top:5px">
                                                                    <div class="col-xs-3">
                                                                        <div class="radio">
                                                                            <label>
                                                                                <input type="radio" name="radio-one"> Grade
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-1" style="left: -140px;top: 5px;">
                                                                        <div class="left-inner-addon">
                                                                            <input type="text" class="form-control input-sm text-center" id="min" rows="0" placeholder="1" style="width:45px">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-2" style="left: -148px;top: 10px;">
                                                                        / 100
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div class="col-xs-12">
                                                                    <label class="no-show">A "No-Show" to this event means:</label>
                                                                    <div class="radio">
                                                                        <label></label>
                                                                        <input type="radio" name="radio-two" checked> Student is allowed to re-register for a different event
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label></label>
                                                                        <input type="radio" name="radio-two"> Admin approval required for re-register
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label></label>
                                                                        <input type="radio" name="radio-two"> Student fails the event
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row" style="padding-top:5px;margin-bottom: 14px">
                                                            <div class="col-xs-4" style="top: 5px;">
                                                                <label class="min"></label>
                                                                <strong>If students fails event, then: </strong>
                                                            </div>
                                                            <div class="col-xs-7" style="left: -15px;top: 0px;">
                                                                <select class="form-control input-sm">
                                                                    <option selected="">Student is allowed to re-register for a different event</option>
                                                                    <option>Admin approval required for re-register</option>
                                                                    <option> Student fails the course </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab7">
                                                <div class="col-md-10">
                                                    <!-- 7. Alerts -->
                                                    <section class="section section-box" style="background-color: rgba(0, 0, 0, 0.02)">
                                                        <div class="numberCircle pull-left">7</div>
                                                        <h2 class="rules-title">Alerts</h2>
                                                        <div class="rhr"></div>
                                                        <div class="row" style="padding-top:5px">
                                                            <div class="col-xs-12">
                                                                <label>Event Reminders</label>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="padding-top:15px">
                                                            <div class="col-xs-2" style="padding-top:5px">
                                                                <label></label>
                                                                Remind
                                                            </div>
                                                            <div class="col-xs-4 text-center" style="margin-left: -40px">
                                                                <select class="form-control option-center input-sm">
                                                                    <option selected="" id="days"> Students</option>
                                                                    <option id="hours"> Instructors</option>
                                                                    <option id="hours"> Technicians</option>
                                                                    <option id="hours"> Teaching Assistants</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xs-2" style="left: -10px;top: 0px;">
                                                                <div class="left-inner-addon">
                                                                    <input type="text" class="form-control text-center input-sm" id="min" rows="0" placeholder="1">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-2 text-center" style="left: -18px;">
                                                                <select class="form-control option-center input-sm">
                                                                    <option selected="" id="days"> Day(s)</option>
                                                                    <option id="hours"> Hour(s)</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xs-2" style=" left: -28px; padding-top:5px">
                                                                <span style="color: red; padding-right:5px;">before</span> event
                                                            </div>
                                                            <div class="col-xs-12">
                                                                <label class="control-label"></label>
                                                                <div style="padding-left:5px">
                                                                    Repeat
                                                                    <div class="radio-inline" style="padding-left:45px">
                                                                        <label></label>
                                                                        <input type="radio" name="remind-before"> Daily
                                                                    </div>
                                                                    <div class="radio-inline">
                                                                        <label></label>
                                                                        <input type="radio" name="remind-before"> Weekly
                                                                    </div>
                                                                </div>
                                                                <div class="row" style="padding-top:20px">
                                                                    <div class="col-xs-2" style="padding-top:5px">
                                                                        <label></label>
                                                                        Remind
                                                                    </div>
                                                                    <div class="col-xs-4 text-center" style="margin-left: -40px">
                                                                        <select class="form-control option-center input-sm">
                                                                            <option selected="" id="days"> Students</option>
                                                                            <option id="hours"> Instructors</option>
                                                                            <option id="hours"> Technicians</option>
                                                                            <option id="hours"> Teaching Assistants</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xs-2" style="left: -10px;top: 0px;">
                                                                        <div class="left-inner-addon">
                                                                            <input type="text" class="form-control text-center input-sm" id="min" rows="0" placeholder="1">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-2 text-center" style="left: -18px;">
                                                                        <select class="form-control option-center input-sm">
                                                                            <option selected="" id="days"> Day(s)</option>
                                                                            <option id="hours"> Hour(s)</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xs-2" style=" left: -28px; padding-top:5px">
                                                                        <span style="color: red; padding-right: 17px">after</span> event
                                                                    </div>
                                                                    <div class="col-xs-12">
                                                                        <label class="control-label"></label>
                                                                        <div style="padding-left:5px">
                                                                            Repeat
                                                                            <div class="radio-inline" style="padding-left:45px">
                                                                                <label></label>
                                                                                <input type="radio" name="remind-after"> Daily
                                                                            </div>
                                                                            <div class="radio-inline">
                                                                                <label></label>
                                                                                <input type="radio" name="remind-after"> Weekly
                                                                            </div>
                                                                        </div>
                                                                        <hr />
                                                                        <div class="row">
                                                                            <div class="col-xs-12">
                                                                                <label class="control-label">Notify students when waitlist closes?</label>
                                                                                <div>
                                                                                    <div class="radio-inline">
                                                                                        <label></label>
                                                                                        <input type="radio" name="wl-closes" checked> Yes
                                                                                    </div>
                                                                                    <div class="radio-inline">
                                                                                        <label></label>
                                                                                        <input type="radio" name="wl-closes"> No
                                                                                    </div>
                                                                                    <hr />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-xs-12">
                                                                                <label class="control-label">Notify student when seat is available from waitlist section?</label>
                                                                                <div>
                                                                                    <div class="radio-inline">
                                                                                        <label></label>
                                                                                        <input type="radio" name="wl-avail" checked> Yes
                                                                                    </div>
                                                                                    <div class="radio-inline">
                                                                                        <label></label>
                                                                                        <input type="radio" name="wl-avail"> No
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                    </section>
                                                    </div>
                                                    </div>
                                                    <!-- exit wizard -->
                                                    <div class="tab-pane" id="tab8">
                                                        <div class="col-md-10">
                                                            <section class="section save-continue text-center" style="background: #fff">
                                                                <h2>Save &amp; Continue?</h2>
                                                                <div class="row">
                                                                    <!-- seat allocation form fields go here -->
                                                                </div>
                                                            </section>
                                                            <section class="section" style="background: #fff">
                                                                <div class="row text-center">
                                                                    <a href="#tab1" class="btn btn-default previous">Go Back</a>
                                                                    <a href="/rules-summary" class="btn btn-success">Yes, Continue <i class="fa fa-arrow-right"></i></a>
                                                                    <!-- seat allocation form fields go here -->
                                                                </div>
                                                            </section>
                                                        </div>
                                                    </div>
                                                    <!--         <div class="row ">
            <div class="col-md-8 col-md-offset-3 hidden-xs hidden-sm">
        <ul class="pager wizard">
            <li class="previous first" style="display:none;font:"><a href="#">First</a></li>
            <li class="previous"><a href="#"><i class="fa fa-chevron-left"></i> Previous</a></li>
            <li class="next"><a href="#" style="width:86px">Next <i class="fa fa-chevron-right"></i></a></li>
            <li class="next last" style="width:86px; float: none"><a href="#tab8" style="float:none">Skip Wizard</a></li>


        </ul>
        <hr />
    </div>
    </div> -->
                                                    <?php
                                                        $stickybar = array(
                                                            'sets' => array(
                                                                array(
                                                                    'position' => 'left',
                                                                    'classes' => array('hidden-xs','hidden-sm'),
                                                                    'html' => '
                                                                        <div class="col-md-8 col-md-offset-3 hidden-xs hidden-sm">
                                                                            <ul class="pager wizard">
                                                                                <li class="previous first" style="display:none;font:">
                                                                                    <a href="#">First</a>
                                                                                </li>
                                                                                <li class="previous">
                                                                                    <a href="#"><i class="fa fa-chevron-left"></i> Previous</a>
                                                                                </li>
                                                                                <li class="next">
                                                                                    <a href="#" style="width:86px">Next <i class="fa fa-chevron-right"></i></a>
                                                                                </li>
                                                                                <li class="next last" style="width:86px; float: none">
                                                                                    <a href="#tab8" style="float:none">Skip Wizard</a>
                                                                                </li>
                                                                            </ul>
                                                                            <hr style="margin-top: -24px;border-top: 1px solid rgba(139, 139, 139, 0.2);">
                                                                        </div>
                                                                    ',
                                                                ),
                                                            ),
                                                        );
                                                        echo createStickybar($stickybar);
                                                    ?>


                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <!--  <hr /> -->
                                                    <!-- <button class="btn btn-success pull-right" id="btnSave" name="SaveEvent" type="submit">Save All Rules</button> -->
                                                </div>
                                            </div>
            </section>
            </div>
            </div>
            <!-- /layout -->
            <!-- start of modal -->
            <!-- end of modal -->

                <?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>

                <script src="/scripts/date.format.js"></script>
                <script>
                $(document).ready(function() {
                    $('#rootwizard').bootstrapWizard({
                        'tabClass': 'nav nav-tabs'
                    });
                });
                /* End of custom JS added */


                (function(window, $) {
                    'use strict';

                    window.HealthStream = window.HealthStream || {};
                    var healthStream = window.HealthStream;

                    healthStream.peoplepicker = {
                        memory: {
                            event: [],
                            resources: {}
                        },
                        init: function() {
                            var T = this;

                            $('.input-group-addon').on('click', function() {
                                $(this).siblings('input').trigger('focus');
                            });


                            $('#resources-table-one').hide();
                            // Event Resource Pickers
                            $('#event-resources')
                                .on('click', '.resource-picker-type li', function() {
                                    var $el = $(this),
                                        $rp = $el.closest('.resource-picker'),
                                        type = $(this).text();
                                    $rp.find('.resource-picker-type button span').html(type);
                                    $rp.find('.resource-picker-input').attr('data-type', type.toLowerCase()).focus().trigger('keyup');
                                })
                                .on('keyup', '.resource-picker-input', function() {
                                    var $el = $(this),
                                        $rp = $el.closest('.resource-picker'),
                                        resources;

                                    $rp.find('.resource-picker-overlay').removeClass('active');
                                    clearTimeout(window.resourcePicker);
                                    if ($el.val().length > 0) {
                                        window.resourcePicker = setTimeout(function() {
                                            T.getResourcesOne($el, $rp);
                                        }, 300);
                                    }
                                })
                                .on('click', '.resource-picker-add', function(e) {
                                    $('.rth-btn-add[data-id="' + $(this).attr('data-id') + '"]').trigger('click');
                                    $('#resources-table-one').show();
                                    $(this).addClass('disabled');
                                    e.preventDefault();
                                })
                                // .on('click', '.resource-picker-add-area', function(){
                                //     $('.rth-btn-add[data-id="' + $(this).attr('data-id') + '"]').trigger('click');
                                //    $('#resources-table-one').show();
                                //     $(this).addClass('disabled');
                                //     e.preventDefault();
                                // })
                                .on('click', '.resource-picker-remove', function(e) {
                                    $('.rth-btn-remove[data-id="' + $(this).attr('data-id') + '"]').trigger('click');
                                    $(this).addClass('disabled');
                                    e.preventDefault();
                                })
                                .on('click', '.resource-picker-clear', function(e) {
                                    var $el = $(this),
                                        $rp = $el.closest('.resource-picker');
                                    $rp.find('.resource-picker-input').val('').trigger('keyup');
                                    $('#resource-picker-backdrop').hide();
                                    e.preventDefault();
                                })
                                .on('click', '.rth-detail', function(e) {
                                    T.getResourceModal($(this));
                                    e.preventDefault();
                                })
                                .on('click', '.rth-block div', function() {
                                    $(this).closest('tr').find('.rth-detail').trigger('click');
                                })
                                .on('click', '.rth-btn-remove', function(e) {
                                    var resources = [$(this).attr('data-id')],
                                        $nested = $(this).closest('.rth-item').nextUntil('.rth-item');

                                    $($nested).each(function() {
                                        resources.push($(this).find('.rth-options button').attr('data-id'));
                                    });
                                    T.removeResourcesOne(resources);
                                    e.preventDefault();
                                });
                            // Event Resource Pickers
                            $('#event-resources-two')
                                .on('click', '.resource-picker-type li', function() {
                                    var $el = $(this),
                                        $rp = $el.closest('.resource-picker'),
                                        type = $(this).text();
                                    $rp.find('.resource-picker-type button span').html(type);
                                    $rp.find('.resource-picker-input').attr('data-type', type.toLowerCase()).focus().trigger('keyup');
                                })
                                .on('keyup', '.resource-picker-input', function() {
                                    var $el = $(this),
                                        $rp = $el.closest('.resource-picker'),
                                        resources;

                                    $rp.find('.resource-picker-overlay').removeClass('active');
                                    clearTimeout(window.resourcePicker);
                                    if ($el.val().length > 0) {
                                        window.resourcePicker = setTimeout(function() {
                                            T.getResources($el, $rp);
                                        }, 300);
                                    }
                                })
                                .on('click', '.resource-picker-add', function(e) {
                                    var $el = $(this),
                                        $rp = $el.closest('.resource-picker'),
                                        resources = [$el.attr('data-id')],
                                        addons = $el.attr('data-addons').split(',').filter(function(e) {
                                            return e
                                        });

                                    $.merge(resources, addons);
                                    T.setResources(resources);
                                    $(this).addClass('disabled');
                                    e.preventDefault();
                                })
                                .on('click', '.resource-picker-remove', function(e) {
                                    $('.rth-btn-remove[data-id="' + $(this).attr('data-id') + '"]').trigger('click');
                                    $(this).addClass('disabled');
                                    e.preventDefault();
                                })
                                .on('click', '.resource-picker-clear', function(e) {
                                    var $el = $(this),
                                        $rp = $el.closest('.resource-picker');
                                    $rp.find('.resource-picker-input').val('').trigger('keyup');
                                    $('#resource-picker-backdrop').hide();
                                    e.preventDefault();
                                })
                                .on('click', '.rth-detail', function(e) {
                                    T.getResourceModal($(this));
                                    e.preventDefault();
                                })
                                .on('click', '.rth-block div', function() {
                                    $(this).closest('tr').find('.rth-detail').trigger('click');
                                })
                                .on('click', '.rth-btn-remove', function(e) {
                                    var resources = [$(this).attr('data-id')],
                                        $nested = $(this).closest('.rth-item').nextUntil('.rth-item');

                                    $($nested).each(function() {
                                        resources.push($(this).find('.rth-options button').attr('data-id'));
                                    });
                                    T.removeResources(resources);
                                    e.preventDefault();
                                });
                            // Resource Picker Backdrop
                            $('#resource-picker-backdrop').click(function() {
                                $('.resource-picker-clear').trigger('click');
                            });

                            // Resource Modal
                            $('#modal-resource')
                                .on('click', '.btn-save-resource', function() {
                                    var id = $(this).attr('data-id'),
                                        dates = T.getDates($('#resource-start-date'), $('#resource-start-time'), $('#resource-end-date'), $('#resource-end-time'));
                                    T.setResource(id, dates[0], dates[1]);
                                });

                            // Listeners
                            $('#event-resources')
                                .on('resourcesTableUpdated', function() {
                                    // Update options button
                                    $('.rth-conflict').each(function() {
                                        $(this).closest('.rth-item').addClass('rth-item-conflict');
                                        $(this).closest('.rth-nested-item').addClass('rth-item-conflict');
                                    });
                                });

                            $('#event-resources')
                                .on('resourcesTableUpdated', function() {
                                    var $el = $('.resource-picker-overlay.active'),
                                        $rp = $el.closest('.resource-picker');
                                    if ($el.length > 0) {
                                        T.getResources($rp.find('.resource-picker-input'), $rp);
                                    }
                                });

                            //this.setEventDates();
                        },
                        getDateTime: function(timestamp) {
                            var offset = new Date().getTimezoneOffset(),
                                adjusted = timestamp * 1 + (60 * offset),
                                date = new Date(adjusted * 1000),
                                d = date.format('m/d/Y'),
                                t = date.format('h:i A');
                            return [d, t];
                        },
                        // getDates: function($sd,$st,$ed,$et){
                        //     var sd = $sd.val().split('/'),
                        //         st = $st.val().replace(' AM',':0').replace(' PM',':12').split(':'),
                        //         ed = $ed.val().split('/'),
                        //         et = $et.val().replace(' AM',':0').replace(' PM',':12').split(':');

                        //     function formatDate(d,t){
                        //         if ( t[0] === '12'){
                        //             t[0] = 0;
                        //         }
                        //         t[0] = (t[0]*1) + (t[2]*1);
                        //         var date = new Date( d.join('/') + ' ' + t[0] + ':' + t[1] );
                        //         var offset = date.getTimezoneOffset() * 60;
                        //         return Math.round(date.getTime() / 1000) - offset;
                        //     }
                        //     return [formatDate(sd,st),formatDate(ed,et)];
                        // },
                        // setEventDates: function(){
                        //     var m = this.memory.event,
                        //         d = this.getDates($('#event-start-date'),$('#event-start-time'),$('#event-end-date'),$('#event-end-time'));
                        //     if ( m[0] !== d[0] || m[1] !== d[1] ) {
                        //        this.memory.event = m = d;
                        //        this.getResourcesTable();
                        //     }
                        //     return m;
                        // },
                        //start
                        getResourcesOne: function($el, $rp) {
                            var m = this.memory.resources,
                                selected = [];
                            for (var id in m) {
                                if (m.hasOwnProperty(id)) {
                                    selected.push(id)
                                }
                            }
                            $.getJSON('/wizard-server-two.php', {
                                action: 'search',
                                type: $el.attr('data-type'),
                                q: $el.val(),
                                selected: selected.join(',')
                            }, function(data) {
                                $rp.find('.resource-picker-overlay').addClass('active');
                                $rp.find('.resource-picker-holder').html(data.html).scrollTop(0);
                                $('#resource-picker-backdrop').show();
                            });
                        },
                        setResourceOne: function(id, start, end) {
                            if (typeof start !== 'undefined' && typeof end !== 'undefined') {
                                this.memory.resources[id] = [
                                    [start, end]
                                ];
                            } else {
                                this.memory.resources[id] = [];
                            }
                            this.getResourcesTableOne();
                        },
                        setResourcesOne: function(resources) {
                            var T = this;
                            $(resources).each(function() {
                                if (typeof T.memory.resources[this] === 'undefined') {
                                    T.memory.resources[this] = [];
                                }
                            });
                            this.getResourcesTableOne();
                        },
                        removeResourceOne: function(id) {
                            delete this.memory.resources[id];
                            this.getResourcesTableOne();
                        },
                        removeResourcesOne: function(ids) {
                            var m = this.memory.resources;
                            $(ids).each(function() {
                                delete m[this];
                            });
                            this.getResourcesTableOne();
                        },
                        getResourcesTableOne: function() {
                            var $table = $('#resources-table-one'),
                                params = {
                                    action: 'availability',
                                    schedule: {
                                        event: $.extend({}, this.memory.event),
                                        resources: $.extend({}, this.memory.resources)
                                    }
                                };

                            for (var id in params.schedule.resources) {
                                if (params.schedule.resources.hasOwnProperty(id) && params.schedule.resources[id].length === 0) {
                                    params.schedule.resources[id] = [params.schedule.event];
                                }
                            }

                            $('.rth-loading').show();
                            $.post('/wizard-server.php', params, function(data) {
                                setTimeout(function() {
                                    $table.html(data.html);
                                    $('#event-resources').trigger('resourcesTableOneUpdated');
                                }, 300);
                            });
                        },

                        //end
                        getResources: function($el, $rp) {
                            var m = this.memory.resources,
                                selected = [];
                            for (var id in m) {
                                if (m.hasOwnProperty(id)) {
                                    selected.push(id)
                                }
                            }
                            $.getJSON('/wizard-server.php', {
                                action: 'search',
                                type: $el.attr('data-type'),
                                q: $el.val(),
                                selected: selected.join(',')
                            }, function(data) {
                                $rp.find('.resource-picker-overlay').addClass('active');
                                $rp.find('.resource-picker-holder').html(data.html).scrollTop(0);
                                $('#resource-picker-backdrop').show();
                            });
                        },
                        setResource: function(id, start, end) {
                            if (typeof start !== 'undefined' && typeof end !== 'undefined') {
                                this.memory.resources[id] = [
                                    [start, end]
                                ];
                            } else {
                                this.memory.resources[id] = [];
                            }
                            this.getResourcesTable();
                        },
                        setResources: function(resources) {
                            var T = this;
                            $(resources).each(function() {
                                if (typeof T.memory.resources[this] === 'undefined') {
                                    T.memory.resources[this] = [];
                                }
                            });
                            this.getResourcesTable();
                        },
                        removeResource: function(id) {
                            delete this.memory.resources[id];
                            this.getResourcesTable();
                        },
                        removeResources: function(ids) {
                            var m = this.memory.resources;
                            $(ids).each(function() {
                                delete m[this];
                            });
                            this.getResourcesTable();
                        },
                        getResourcesTable: function() {
                            var $table = $('#resources-table'),
                                params = {
                                    action: 'availability',
                                    schedule: {
                                        event: $.extend({}, this.memory.event),
                                        resources: $.extend({}, this.memory.resources)
                                    }
                                };

                            for (var id in params.schedule.resources) {
                                if (params.schedule.resources.hasOwnProperty(id) && params.schedule.resources[id].length === 0) {
                                    params.schedule.resources[id] = [params.schedule.event];
                                }
                            }

                            $('.rth-loading').show();
                            $.post('/wizard-server.php', params, function(data) {
                                setTimeout(function() {
                                    $table.html(data.html);
                                    $('#event-resources').trigger('resourcesTableUpdated');
                                }, 300);
                            });
                        },
                        getResourceModal: function($el) {
                            var id = $el.attr('data-id'),
                                title = $el.attr('data-title'),
                                start = this.getDateTime($el.attr('data-start')),
                                end = this.getDateTime($el.attr('data-end'));

                            $('#modal-resource .modal-title').text(title);
                            $('#modal-resource .btn-remove-resource').attr('data-id', id);
                            $('#modal-resource .btn-save-resource').attr('data-id', id);
                            $('#resource-start-date').val(start[0]);
                            $('#resource-start-time').val(start[1]);
                            $('#resource-end-date').val(end[0]);
                            $('#resource-end-time').val(end[1]);

                            $.getJSON('/wizard-server.php', {
                                action: 'detail',
                                id: id,
                                start: $el.attr('data-start'),
                                end: $el.attr('data-end')
                            }, function(data) {
                                $('#modal-resource .resource-detail').html(data.html);
                                $('#modal-resource').modal('show');
                            });

                            $('#resource-start-date, #resource-end-date')
                                .datepicker({
                                    autoclose: true
                                });
                            $('#resource-start-time')
                                .timepicker({
                                    upArrowStyle: 'fa fa-chevron-up',
                                    downArrowStyle: 'fa fa-chevron-down',
                                    minuteStep: 30,
                                    defaultTime: false
                                });
                            $('#resource-end-time')
                                .timepicker({
                                    upArrowStyle: 'fa fa-chevron-up',
                                    downArrowStyle: 'fa fa-chevron-down',
                                    minuteStep: 30,
                                    defaultTime: false
                                });
                        }
                    };

                    $(window).on('load', function() {
                        healthStream.peoplepicker.init();
                    });


                }(window, jQuery));
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
                // $(".resource-picker-add-area").hover(
                //         function () {
                //           $(this).addClass("active");
                //         },
                //         function () {
                //           $(this).removeClass("active");
                //         }
                //       );
                </script>
 <?= createSiteEnd(); ?>
