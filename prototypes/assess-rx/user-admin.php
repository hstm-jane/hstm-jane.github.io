<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Manage Users';
$patterns['focus']['title'] = 'Manage Users';

$patterns['header'] = array(
    'mainNav' => '

<li class="{active=admin} dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <i class="fa fa-angle-down"></i></a>
<ul class="dropdown-menu">
<li><a href="#">Assessment Results</a></li>
<li><a href="/user-admin.php">Manage Users</a></li>

</ul>
</li>


<li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' => 'admin',
    'logoLarge' => './content/images/logo.png',

);

$patterns['search']['filters'] = array(
    array(
        'visible' => 'mobile',
        'header' => 'Sort',
        'controls' => array(
            '<select class="form-control js-select2"><option>Name</option><option>ID</option><option>Department</option></select>',
        ),
    ),
    array(
        "state" => 'open', // static / open / closed
        "header" => '',
        "controls" => array(
            '<label class="control-label">Name</label><div class="input-group"><input type="text" class="form-control" placeholder="Search"><span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span></div>',
            '<label class="control-label">Username</label><div class="input-group"><input type="text" class="form-control" placeholder="user123"><span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span></div>',
            '<label class="control-label">Department</label><div class="form-group"><input type="text" class="form-control" placeholder="Cardiology"></div>',

        ),
    ),

);

?>


  <?=createSiteStart($patterns['start']);?>
    <?=createHeader($patterns['header']);?>
      <?=createFocus($patterns['focus']);?>
        <style>
          .indent {
            padding: 15px;
          }

          .permission-set {
            background-color: #efefef;
            padding: 5px;
            border-radius: 5px;
          }

          .student-conditional-field,
          .admin-conditional-field,
          .rn-conditional-field,
          .js-admin-slat,
          .js-student-slat {
            display: none;
          }
        </style>
        <div class="layout layout-search">
          <div class="container">
            <section class="section section-main section-box">
              <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm">
                  <section class="section section-filters" data-equalize="layout-columns">
                    <h2>Refine</h2>
                    <div class="search-filter search-filter--desktop">
                      <div class="search-filter__header">
                        <div class="search-filter__title">Applied Filters
                        </div>
                      </div>

                      <?=createTags($patterns['search']);?>
                    </div>

                    <?=createSearch($patterns['search']);?>
                  </section>
                </div>
                <div class="col-md-9">
                  <section class="section visible-print">
                    <h1>My Completed</h1>
                  </section>
                  <section class="section visible-print">
                    <h2>Student Information</h2>
                    <div class="row">
                      <div class="col-xs-6">
                        <label>Name:</label> Stephanie Junipe
                      </div>
                      <div class="col-xs-6">
                        <label>Report Range:</label> Jul 13, 2011 &ndash; Jul 12, 2013
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-6">
                        <label>User ID:</label> 1234567890
                      </div>
                      <div class="col-xs-6">
                        <label>Hire/Re-hire Date:</label>
                        <?=date('M j, Y');?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-6">
                        <label>Job Title:</label> RN
                      </div>
                      <div class="col-xs-6">
                        <label>Active Date:</label>
                        <?=date('M j, Y');?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-6">
                        <label>Job Category:</label> Nurse
                      </div>
                      <div class="col-xs-6">
                        <label>Review Date:</label>
                        <?=date('M j, Y');?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-6">
                        <label>Department:</label> Nursing
                      </div>
                    </div>
                  </section>
                  <section class="section section-results" data-equalize="layout-columns">

                    <section class="section section-results-header">
                      <div class="row">
                        <div class="col-md-6">
                          <h2>AssessRx Users <small>Showing 1-20 of 35</small></h2>
                          <div class="section section-refinement-applied">
                            <h3>Refinements</h3>
                            <div class="tag-group">
                              <a href="#" class="tag">Last 12 Months<i class="fa fa-times"></i></a>
                              <a href="#" class="tag">Curriculums<i class="fa fa-times"></i></a>
                              <a href="#" class="tag">Courses<i class="fa fa-times"></i></a>
                              <a href="#" class="tag">Learning Events<i class="fa fa-times"></i></a>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 hidden-xs hidden-sm">
                          <div class="section-results-header-sort">
                            <div class="dropdown">
                              <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Date <i class="fa fa-sort"></i></a>
                              <ul class="dropdown-menu dropdown-menu-right">
                                <li class="active"><a href="#">Date</a></li>
                                <li><a href="#">Name A - Z</a></li>
                                <li><a href="#">Name Z - A</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>


                      <?php

$credits = '';
$credits .= createSlat(array(
    'attributes' => array(
        array('class', array('slat', 'slat-simple')),
    ),
    'title' => 'AMA PRA Category 1 Credit&trade;',
    'meta' => array(
        array(
            'label' => 'Discipline:',
            'value' => 'AEMT',
        ),
        array(
            'label' => 'Credits:',
            'value' => '5.75',
        ),
        array(
            'label' => 'Courses:',
            'value' => '2',
        ),
    ),
    'action' => array(),

));

$credits .= createSlat(array(
    'attributes' => array(
        array('class', array('slat', 'slat-simple')),
    ),
    'title' => 'AMA PRA Category 1 Credit&trade;',
    'meta' => array(
        array(
            'label' => 'Discipline:',
            'value' => 'Emergency Medical Technician - First Responder',
        ),
        array(
            'label' => 'Credits:',
            'value' => '4.00',
        ),
        array(
            'label' => 'Courses:',
            'value' => '2',
        ),
    ),
    'action' => array(),
));

?>


                    </section>

                    <section class="section">

                      <?php

$slat = array(
    'title' => '<a href="user-edit.php">Doe, Jon R</a>',
    'meta' => array(

        array(
            'label' => 'Username:',
            'value' => 'user123',

        ),
    ),
    'action' => array(
        'type' => 'custom',
        'content' => '<div class="action action-multi">
          <div class="btn-group">
          <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-fw fa-caret-down"></i></a>
          <ul class="dropdown-menu dropdown-menu-right">
          <li><a href="/user-edit.php" data-toggle="modal">Edit User</a></li><li><a href="#modal-reset-password" data-toggle="modal">Reset Password</a></li>
          </ul>
          </div>
          </div>',
    ),
);

for ($i = 0; $i <= 19; $i++) {
    echo createSlat($slat);
}

?>
                    </section>

<?php
  $stickybar = array(
      'sets' => array(
          array(
              'position' => 'left',
              'classes' => array('hidden-xs', 'hidden-sm'),
              'html' => '
            <a href="/user-add.4.php"  class="btn btn-success ">Add User</a>',
          ),
          array(
              'position' => 'left',
              'classes' => array('visible-xs', 'visible-sm'),
              'html' => '
                  <a href="/user-add.2.php" data-toggle="modal" class="btn btn-success">Add User</a>
                  <a href="#modal-refine" class="btn btn-default" data-toggle="modal">Filter</a>
            ',
          ),
      ),
  );
  echo createStickybar($stickybar);
?>

                  </section>
                  <!-- /section-main -->
                </div>
                <!-- /column -->
              </div>
              <!-- /row -->
            </section>


          </div>
          <!-- /container -->
        </div>
        <!-- /layout -->

        <!-- Modal -->
        <div id="modal-refine" class="modal fade" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
              </div>
              <div class="modal-body">
                <section class="section section-refinement-options">
                  <section class="section section-refinement-group section-refinement-group-first">
                    <h3>Sort</h3>
                    <select class="form-control">
                      <option>Date</option>
                      <option>Name A - Z</option>
                    </select>
                  </section>
                  <section class="section section-refinement-group">
                    <h3>Search</h3>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <span class="input-group-btn">
<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
</span>
                    </div>
                  </section>
                  <section class="section section-refinement-group">
                    <h3>Name</h3>
                    <div class="date-range">
                      <input class="form-control" type="textbox">

                      <div class="date-range__custom">
                        <div class="form-group">
                          <label>Start:</label>
                          <div class="input-group date">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>End:</label>
                          <div class="input-group date">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section class="section section-refinement-group">
                    <h3>Completions</h3>
                    <select class="form-control">
                      <option selected="">All</option>
                      <option>Assigned only</option>
                      <option>Elective only</option>
                      <option>Learning Events only</option>
                      <option>Assessments only</option>
                    </select>
                  </section>
                  <div style="height:80px">
                    <!-- space to handle custom range's end date drop down -->
                  </div>
                </section>
              </div>
              <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /modal -->


        <!-- Modal -->
        <div id="modal-reset-password" class="modal fade" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Reset Password</h4>
              </div>
              <div class="modal-body">
                <section class="section ">
                  <h3>Assign a Temporary Password for <b>Jon R. Doe</b></h3>
                  <section class="section section-refinement-group section-refinement-group-first">
                  

               <input type="textbox" class="form-control"></section>

                </section>
              </div>
              <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save Password</button>

                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /modal -->



        <!-- Modal -->
        <div id="modal-add-user" class="modal modal-transcript fade" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add User</h4>
              </div>
              <div class="modal-body">
                <fieldset>
                  <legend>User Info</legend>
                  <div class="row">
                    <div class="col-md-6">

                      <div class="form-group">
                        <label class="control-label">First Name</label>
                        <input class="form-control" type="textbox">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label">Middle Name/Initial</label>
                        <input class="form-control" type="textbox">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label">Last Name</label>
                        <input class="form-control" type="textbox">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label">Username</label>
                        <input class="form-control" type="textbox">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label">Email Address</label>
                    <input class="form-control" type="textbox">
                  </div>
                </fieldset>
                <fieldset class="roles-fieldset">
                  <legend>Roles</legend>
                  <div class="permission-set">
                    <div class="form-group">
                      <label class="control-label">Organization</label>
                      <select class="form-control ">
                        <option value="0">Select</option>
                        <option value="1">HCC</option>
                        <option value="2">HCA</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Institution</label>
                      <select class="form-control ">
                        <option value="0">Select</option>
                        <option value="1">HCC</option>
                        <option value="2">HCA</option>
                      </select>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="control-label">Role</label>
                          <select class="form-control js-role-select">
                            <option value="0">Select</option>
                            <option value="1">Student</option>
                            <option value="2">Admin</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group student-conditional-field">
                          <label class="control-label">Department</label>
                          <select class="form-control ">
                            <option value="0">Select</option>
                            <option value="1">Student</option>
                            <option value="2">Admin</option>
                          </select>
                        </div>
                        <div class="form-group admin-conditional-field">
                          <label class="control-label">Org Node</label>
                          <select class="form-control ">
                            <option value="0">Select</option>
                            <option value="1">HSTM Level</option>
                            <option value="2">Organization</option>
                            <option value="2">Institution</option>
                            <option value="2">Department</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group student-conditional-field">
                          <label class="control-label">Profession</label>
                          <select class="form-control js-profession-select ">
                            <option value="0">Select</option>
                            <option value="9">Behavioral Health Technologist</option>
                            <option value="10">Cardiovascular Technologist</option>
                            
                            <option value="2">Case Manager</option>
                            <option value="11">Dietitian</option>
                            <option value="12">Educator</option>
                            <option value="13">Leader</option>
                            <option value="14">Licensed Practical/ Vocational Nurse</option>
                            <option value="15">Medical Assistant</option>
                            <option value="16">Medical Laboratory Technologist</option>
                            
                            <option value="3">Occupational Therapist</option>
                            <option value="17">Paramedicine Professional</option>
                            <option value="18">Pharmacist</option>
                            <option value="4">Pharmacy Technician</option>
                            <option value="5">Physical Therapist</option>
                            <option value="19">Radiology Technician</option>
                            <option value="20">Respiratory Therapist</option>
                            
                            <option value="1">Registered Nurse</option>
                            <option value="6">Social Worker</option>
                            <option value="7">Speech Therapist</option>
                            <option value="8">Surgical Technologist</option>
                            
                            <option value="21">Unlicensed Assistive Personnel</option>

                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group student-conditional-control rn-conditional-field">
                          <label class="control-label">Specialty</label>
                          <select class="form-control">
                            <option value="0">Select</option>
                            <option value="1">Emergency</option>
                            <option value="2">Medical-Surgical</option>
                            <option value="2">Medical-Surgical Critical Care</option>
                            <option value="2">Neonatal ICU</option>
                            <option value="2">Obstetrics</option>
                            <option value="2">Perioperative</option>
                            <option value="2">Telemetry</option>
                            <option value="2">Acute Rehabilitation</option>
                            <option value="2">Ambulatory Care</option>
                            <option value="2">Behavioral Health</option>
                            <option value="2">Cardiac Critical Care</option>
                            <option value="2">Maternal Health/Gynecology</option>
                            <option value="2">Neuro Critical Care</option>
                            <option value="2">Oncology</option>
                            <option value="2">Pediatric Intensive Care</option>
                            <option value="2">Pediatrics</option>
                            <option value="2">Perianesthesia Care</option>
                            <option value="2">Post-Acute/ Long term care</option>
                            <option value="2">Progressive Care</option>
                            <option value="2">Trauma</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <button class="btn btn-default js-create-role">Add Role</button>
                      </div>
                    </div>
                  </div>
                  <?php

$slat = array(
    'title' => 'Student',
    'attributes' => array(
        array('class', array('slat', 'slat-modal', 'js-student-slat')),
    ),

    'meta' => '
<ul class="meta">

<li><span class="meta-label">Department:</span><span class="meta-value">HCA-Tulane Medical Center</li>
</ul>',
    'action' => array(
        'type' => 'custom',
        'content' => '<div class="action"><a class="btn btn-sm btn-danger " href="#"><i class="fa fa-times"></i> Locked</a></div>',
    ),

);

echo createSlat($slat);

$nested = '<ul class="meta">

<li><span class="meta-label">Department:</span><span class="meta-value">HCA-Tulane Medical Center</li>
</ul>';
$slat = array(
    'title' => 'Admin',
    'attributes' => array(
        array('class', array('slat', 'slat-modal', 'js-admin-slat')),
    ),

    'meta' => '
<ul class="meta">

<li><span class="meta-label">Department:</span><span class="meta-value">HCA-Tulane Medical Center</li>
</ul>',
    'action' => array(
        'type' => 'custom',
        'content' => '<div class="action"><a class="btn btn-sm btn-danger " href="#"><i class="fa fa-times"></i> Locked</a></div>',
    ),
    'nested' => array(
        'hide' => array($nested),
    ),
    'toggle' => array('Show More', 'Show Less'),

);

echo createSlat($slat);

?>
                </fieldset>

              </div>
              <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /modal -->


        <!-- Modal -->
        <div id="modal-edit-user" class="modal modal-transcript fade" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Edit User</h4>
              </div>
              <div class="modal-body">
                <fieldset>
                  <legend>User Info</legend>
                  <div class="row">
                    <div class="col-md-6">

                      <div class="form-group">
                        <label class="control-label">First Name</label>
                        <input class="form-control" type="textbox" value="Michelle">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label">Middle Name/Initial</label>
                        <input class="form-control" type="textbox" value="L">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label">Last Name</label>
                        <input class="form-control" type="textbox" value="Baldwin">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label">Username</label>
                        <input class="form-control" type="textbox" value="user123">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label">Email Address</label>
                    <input class="form-control" type="textbox" value="someone@gmail.com">
                  </div>
                </fieldset>
                <fieldset class="roles-fieldset">
                  <legend>Roles</legend>
                  <div class="permission-set">
                    <div class="form-group">
                      <label class="control-label">Organization</label>
                      <select class="form-control ">
                        <option value="0">Select</option>
                        <option value="1">HCC</option>
                        <option value="2">HCA</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Institution</label>
                      <select class="form-control ">
                        <option value="0">Select</option>
                        <option value="1">HCC</option>
                        <option value="2">HCA</option>
                      </select>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="control-label">Role</label>
                          <select class="form-control js-role-select">
                            <option value="0">Select</option>
                            <option value="1">Student</option>
                            <option value="2">Admin</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group student-conditional-field">
                          <label class="control-label">Department</label>
                          <select class="form-control ">
                            <option value="0">Select</option>
                            <option value="1">Student</option>
                            <option value="2">Admin</option>
                          </select>
                        </div>
                        <div class="form-group admin-conditional-field">
                          <label class="control-label">Org Node</label>
                          <select class="form-control ">
                            <option value="0">Select</option>
                            <option value="1">HSTM Level</option>
                            <option value="2">Organization</option>
                            <option value="2">Institution</option>
                            <option value="2">Department</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group student-conditional-field">
                          <label class="control-label">Profession</label>
                          <select class="form-control js-profession-select ">
                            <option value="0">Select</option>
                            <option value="1">Registered Nurse</option>
                            <option value="2">Case Manager</option>
                            <option value="3">Occupational Therapist</option>
                            <option value="4">Pharmacy Technician</option>
                            <option value="5">Physical Therapist</option>
                            <option value="6">Social Worker</option>
                            <option value="7">Speech Therapist</option>
                            <option value="8">Surgical Technologist</option>
                            <option value="9">Behavioral Health Technologist</option>
                            <option value="10">Cardiovascular Technologist</option>
                            <option value="11">Dietitian</option>
                            <option value="12">Educator</option>
                            <option value="13">Leader</option>
                            <option value="14">Licensed Practical/ Vocational Nurse</option>
                            <option value="15">Medical Assistant</option>
                            <option value="16">Medical Laboratory Technologist</option>
                            <option value="17">Paramedicine Professional</option>
                            <option value="18">Pharmacist</option>
                            <option value="19">Radiology Technician</option>
                            <option value="20">Respiratory Therapist</option>
                            <option value="21">Unlicensed Assistive Personnel</option>

                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group student-conditional-control rn-conditional-field">
                          <label class="control-label">Specialty</label>
                          <select class="form-control">
                            <option value="0">Select</option>
                            <option value="1">Emergency</option>
                            <option value="2">Medical-Surgical</option>
                            <option value="2">Medical-Surgical Critical Care</option>
                            <option value="2">Neonatal ICU</option>
                            <option value="2">Obstetrics</option>
                            <option value="2">Perioperative</option>
                            <option value="2">Telemetry</option>
                            <option value="2">Acute Rehabilitation</option>
                            <option value="2">Ambulatory Care</option>
                            <option value="2">Behavioral Health</option>
                            <option value="2">Cardiac Critical Care</option>
                            <option value="2">Maternal Health/Gynecology</option>
                            <option value="2">Neuro Critical Care</option>
                            <option value="2">Oncology</option>
                            <option value="2">Pediatric Intensive Care</option>
                            <option value="2">Pediatrics</option>
                            <option value="2">Perianesthesia Care</option>
                            <option value="2">Post-Acute/ Long term care</option>
                            <option value="2">Progressive Care</option>
                            <option value="2">Trauma</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <button class="btn btn-default js-create-role">Add Role</button>
                      </div>
                    </div>
                  </div>
                  <?php

$slat = array(
    'title' => 'Student',
    'attributes' => array(
        array('class', array('slat', 'slat-modal')),
    ),

    'meta' => '
<ul class="meta">

<li><span class="meta-label">Department:</span><span class="meta-value">HCA-Tulane Medical Center</li>
</ul>',
    'action' => array(
        'type' => 'custom',
        'content' => '<div class="action"><a class="btn btn-sm btn-danger " href="#"><i class="fa fa-times"></i> Locked</a></div>',
    ),

);

echo createSlat($slat);
$slat = array(
    'title' => 'Student',
    'attributes' => array(
        array('class', array('slat', 'slat-modal')),
    ),

    'meta' => '
<ul class="meta">

<li><span class="meta-label">Department:</span><span class="meta-value">Department 2 </li>
</ul>',
    'action' => array(
        'type' => 'custom',
        'content' => '<div class="action"><a class="btn btn-sm btn-danger " href="#"><i class="fa fa-times"></i> Locked</a></div>',
    ),

);

echo createSlat($slat);

$nested = '<ul class="meta">

<li><span class="meta-label">Department:</span><span class="meta-value">HCA-Tulane Medical Center</li>
</ul>';
$slat = array(
    'title' => 'Admin',
    'attributes' => array(
        array('class', array('slat', 'slat-modal')),
    ),

    'meta' => '
<ul class="meta">

<li><span class="meta-label">Department:</span><span class="meta-value">HCA-Tulane Medical Center</li>
</ul>',
    'action' => array(
        'type' => 'custom',
        'content' => '<div class="action"><a class="btn btn-sm btn-danger " href="#"><i class="fa fa-times"></i> Locked</a></div>',
    ),
    'nested' => array(
        'hide' => array($nested),
    ),
    'toggle' => array('Show More', 'Show Less'),

);

echo createSlat($slat);

?>
                </fieldset>

              </div>
              <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /modal -->









        <?=createFooter($patterns['footer']);?>
          <?=createPrototypeNav();?>
            <?=createSiteScripts();?>


              <script>
                var removeRoleBtn = '<button class="btn btn-danger js-remove-role"> <i class="fa fa-minus"></i></button>';
                var addRoleBtn = '<button class="btn btn-default js-add-role"> <i class="fa fa-plus"></i></button>';


                $(".roles-fieldset").on("click", ".js-add-role", function(e) {
                  if ($(".roles-fieldset .row").length >= 1) {
                    // $(".js-remove-role").remove();
                    // addRole(e);
                    // $(removeRoleBtn).appendTo(".roles-fieldset .row .js-role-actions");

                    // } else {
                    //   $(addRoleBtn).appendTo(".roles-fieldset .row .js-role-actions");
                  }

                  $(".js-add-role:not(:last)").hide();

                });

                $(".js-create-role").click(function() {
                  if ($(".js-role-select").val() == '1') {
                    $(".js-student-slat").show();
                    $(".rn-conditional-field").hide();
                    $(".student-conditional-field").hide();
                    $('select').prop('selectedIndex', 0);


                  } else if ($(".js-role-select").val() == '2') {
                    $(".js-admin-slat").show();
                    $(".rn-conditional-field").hide();
                    $(".admin-conditional-field").hide();
                    $('select').prop('selectedIndex', 0);


                  }
                });
                $(".roles-fieldset").on("change", ".js-role-select", function() {
                  if ($(this).val() == "1") {
                    $(".admin-conditional-field").hide();
                    $(".student-conditional-field").show();

                    $(".roles-fieldset").on("change", ".js-profession-select", function() {
                      if ($(this).val() == "1") {
                        $(".rn-conditional-field").show();
                      } else {
                        $(".rn-conditional-field").hide();
                      }
                    });
                  } else if ($(this).val() == "2") {
                    $(".student-conditional-field").hide();
                    $(".rn-conditional-field").hide();
                    $(".admin-conditional-field").show();

                  }
                });


                $(".roles-fieldset").on("click", ".js-remove-role", function(e) {
                  removeRole(e);
                  if ($(".roles-fieldset .row").length > 1) {

                    $(".js-remove-role").show();
                  } else {
                    $(".js-remove-role").hide();
                  }
                });

                function addRole(e) {
                  $(e.target).parents(".row").clone().appendTo(".roles-fieldset");
                }

                function removeRole(e) {
                  $(e.target).parents(".row").remove();
                }
                $(function() {
                  $('.slat-toggle .btn').click(function(e) {
                    var $btn = $(this);
                    e.preventDefault();
                    $btn.toggleClass('btn-success btn-default');
                    if ($btn.hasClass('btn-success')) {
                      $btn.html('Selected<i class="fa fa-check visible-xs"></i>');
                    } else {
                      $btn.html('Select<i class="fa fa-plus visible-xs"></i>');
                    }
                  });

                  $('.date-range__control').on('change', function() {
                    var $control = $(this);
                    var $custom = $control.siblings('.date-range__custom')
                    if ($control.val() === 'custom') {
                      $custom.addClass('date-range__custom--open');
                    } else {
                      $custom.removeClass('date-range__custom--open');
                    }
                  });

                  $('#rangeSelect').on('change', function() {
                    if ($(this).val() === 'custom') {
                      $('#rangeCustom').removeClass('hide');
                    } else {
                      $('#rangeCustom').addClass('hide');
                    }
                  });

                  $('#printRangeSelect').on('change', function() {
                    if ($(this).val() === 'custom') {
                      $('#printRangeCustom').removeClass('hide');
                    } else {
                      $('#printRangeCustom').addClass('hide');
                    }
                  });

                  $('.input-group.date').datepicker({
                    todayBtn: "linked",
                    autoclose: true,
                    orientation: 'top'
                  }).css('position', 'relative');

                  $("#ce-awarded-checkbox").change(function() {
                    $(".ce-awarded-yes").slideToggle();
                  });

                });



                $(function() {
                  $('.js-select2').select2();

                  $(document).on('click', '.search-filter__toggle', function() {
                    $(this).closest('.search-filter').toggleClass('search-filter--closed');
                    $(window).resize();
                  });

                  $('#modal-filter').on('show.bs.modal', function() {
                    $('.js-select2').each(function() {
                      $(this).select2("destroy");
                    });
                    $(this).find('.modal-body').html($('.search-filters').html());
                    $('.js-select2').select2();
                    $('.search-filters').empty();
                  });
                  $('#modal-filter').on('hidden.bs.modal', function() {
                    $('.js-select2').each(function() {
                      $(this).select2("destroy");
                    });
                    $('.search-filters').append($('#modal-filter .modal-body').html());
                    $('.js-select2').select2();
                    $('#modal-filter .modal-body').empty();

                  });
                  $('.slat .btn').click(function(e) {
                    e.preventDefault();
                  });
                });
              </script>
              <?=createSiteEnd();?>