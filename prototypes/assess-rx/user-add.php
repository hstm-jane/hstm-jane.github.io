<?php
    include "includes/helpers/helpers.php";

    $patterns['start']['title'] = 'Add User';
    $patterns['focus']['title'] = 'Add User';

    $patterns['header'] = array(
        'mainNav' =>
        '
    <li class="{active=assignments}">
        <a href="/assess-rx.php">
            Assignments
        </a>
    </li>
    <li class="{active=completed}">
        <a href="/completed.php">
            Completed
        </a>
    </li>
    <li class="{active=connections}">
        <a href="/connections.php">
            Education Topics
        </a>
    </li>
    <li class="{active=admin} dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Admin
            <i class="fa fa-angle-down">
            </i>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a href="#">
                    Assessment Results
                </a>
            </li>
            <li>
                <a href="/user-admin.php">
                    User Administration
                </a>
            </li>
        </ul>
    </li>
    <li class="disabled">
        <a href="#">
            Help
        </a>
    </li>
    <li class="visible-xs">
        <a href="#">
            Logout
        </a>
    </li>
    ',
        'mainNavActive' => 'admin',
        'logoLarge' => './content/images/logo.png',

    );

    $patterns['search']['filters'] = array(
        array(
            'visible' => 'mobile',
            'header' => 'Sort',
            'controls' => array(
                '
            <select class="form-control js-select2">
                <option>
                    Name
                </option>
                <option>
                    ID
                </option>
                <option>
                    Department
                </option>
            </select>
            ',
            ),
        ),
        array("state" => 'open', // static / open / closed
             "header" => '',
            "controls" => array(
                '
            <label class="control-label">
                Name
            </label>
            <div class="input-group">
                <input class="form-control" placeholder="Search" type="text">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search">
                        </i>
                    </button>
                </span>
            </input>
        </div>
        ',
                '
        <label class="control-label">
            Username
        </label>
        <div class="input-group">
            <input class="form-control" placeholder="user123" type="text">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <i class="fa fa-search">
                    </i>
                </button>
            </span>
        </input>
    </div>
    ',
                '
    <label class="control-label">
        Department
    </label>
    <div class="form-group">
        <input class="form-control" placeholder="Cardiology" type="text"/>
    </div>
    ',

            ),
        ),

    );
?>
        <?=createSiteStart($patterns['start']); ?>
        <?=createHeader($patterns['header']); ?>
        <?=createFocus($patterns['focus']); ?>
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
            .js-student-slat, 
            .dept-admin-conditional-field {
                display: none;
            }
        </style>
        <div class="layout layout-search">
            <div class="container">
                <section class="section section-main section-box">
                    <fieldset>
                        <legend>
                            User Info
                        </legend>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">
                                        First Name
                                    </label>
                                    <input class="form-control" type="textbox">
                                </input>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">
                                    Middle Name/Initial 
                                </label>
                                <input class="form-control" type="textbox">
                            </input>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">
                                Last Name
                            </label>
                            <input class="form-control" type="textbox">
                        </input>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">
                            Username
                        </label>
                        <input class="form-control" type="textbox">
                    </input>
                </div>
            </div>
            <div class="col-md-6">
                <label class="control-label">
                    Email Address
                </label>
                <input class="form-control" type="textbox">
            </input>
        </div>
    </div>
</fieldset>
<fieldset class="roles-fieldset">
    <legend>
        Roles
    </legend>
    <div class="permission-set">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">
                        Organization
                    </label>
                    <select class="form-control js-org-select ">
                        <option value="0" selected disabled>
                            Select an Organization
                        </option>
                        <option value="1">
                            AAPO
                        </option>
                        <option value="1">
                            ACME Healthcare
                        </option>
                        <option value="1">
                            HCAA
                        </option>
                        <option value="2">
                            HCCA
                        </option>
                        <option value="2">
                         North Western Healthcare
                     </option>
                     <option value="2">
                         Springfield Medical Association
                     </option>
                 </select>
             </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">
                    Institution
                </label>
                <select class="form-control js-institution-select" disabled>
                    <option value="0" selected disabled>
                        Organization must be selected first.
                    </option>
                    <option value="1" >
                        Select an Institution
                    </option>
                    <option value="2">
                        Greenview General Hospital
                    </option>
                    <option value="3">
                        Horizon Medical Plaza
                    </option>
                     <option value="6">
                        Sacred Heart Hospital
                    </option>
                    <option value="4">
                        Springfield General Hospital
                    </option>
                    <option value="5">
                        Stonecreek Medical Center
                    </option>
                   
                </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">
                Role
            </label>
            <select class="form-control js-role-select">
                <option value="0" disabled selected>
                    Select a Role
                </option>
                <option value="1">
                    Student
                </option>
                <option value="2">
                    Admin
                </option>
            </select>
        </div>
    </div>


    <div class="col-md-6">
       <!-- if student show this control -->
        <div class="form-group student-conditional-field">
            <label class="control-label">
                Department
            </label>
            <select class="form-control js-department-select ">
                <option value="0" disabled selected>
                    Select a Department
                </option>
                <option value="1">
                    Admissions
                </option>
                <option value="1">
                    Anesthetics
                </option>
                <option value="1">
                    Cardiology
                </option>
                <option value="1">
                    Critical Care
                </option>
                <option value="1">
                    Diagnostic Imaging
                </option>
                <option value="1">
                    General Surgery
                </option>
                <option value="1">
                    Gynecology
                </option>
                <option>
                    Haematology
                </option>
                <option>
                    Human Resources
                </option>
                <option>
                    Neonatal
                </option>
                <option>
                    Neurology
                </option>
                <option value="1">
                    Radiology
                </option>
                <option value="9">
                    Labor and Delivery
                </option>
                <option value="2">
                    Obstetrics
                </option>
            </select>
        </div>

       <!--  if admin show this control -->
        <div class="form-group admin-conditional-field">
            <label class="control-label">
                Access Level
            </label>
            <select class="form-control js-access-select ">
                <option value="0">
                    Select
                </option>
                <option value="1">
                    HealthStream
                </option>
                <option value="2">
                    Organization
                </option>
                <option value="2">
                    Institution
                </option>
                <option value="9">
                    Department
                </option>
            </select>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-md-6">
        <div class="form-group student-conditional-field">
            <label class="control-label">
                Profession
            </label>

            <select class="form-control js-profession-select ">
                <option value="0">
                    Select
                </option>
             
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


<!--if admin show this control -->
         <div class="form-group dept-admin-conditional-field">
            <label class="control-label">
                Department
            </label>
            <select class="form-control js-department-select ">
                <option value="0" disabled selected>
                    Select a Department
                </option>
                <option value="1">
                    Admissions
                </option>
                <option value="1">
                    Anesthetics
                </option>
                <option value="1">
                    Cardiology
                </option>
                <option value="1">
                    Critical Care
                </option>
                <option value="1">
                    Diagnostic Imaging
                </option>
                <option value="1">
                    General Surgery
                </option>
                <option value="1">
                    Gynecology
                </option>
                <option>
                    Haematology
                </option>
                <option>
                    Human Resources
                </option>
                <option>
                    Neonatal
                </option>
                <option>
                    Neurology
                </option>
                <option value="1">
                    Radiology
                </option>
                <option value="9">
                    Labor and Delivery
                </option>
                <option value="2">
                    Obstetrics
                </option>
            </select>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group student-conditional-control rn-conditional-field">
            <label class="control-label">
                Specialty
            </label>
            <select class="form-control">
                <option value="0">
                    Select
                </option>
                <option value="2">
                    Acute Rehabilitation
                </option>
                <option value="2">
                    Ambulatory Care
                </option>
                <option value="2">
                    Behavioral Health
                </option>
                <option value="2">
                    Cardiac Critical Care
                </option>
                <option value="1">
                    Emergency
                </option>
                 <option value="2">
                    Maternal Health/Gynecology
                </option>
                <option value="2">
                    Medical-Surgical
                </option>
                <option value="2">
                    Medical-Surgical Critical Care
                </option>
                
                <option value="2">
                    Neonatal ICU
                </option>
                <option value="2">
                    Neuro Critical Care
                </option>
                <option value="2">
                    Obstetrics
                </option>
                     <option value="2">
                    Oncology
                </option>
                   <option value="2">
                    Pediatric Intensive Care
                </option>
                <option value="2">
                    Pediatrics
                </option>
                <option value="2">
                    Perianesthesia Care
                </option>
                <option value="2">
                    Perioperative
                </option>
                  <option value="2">
                    Post-Acute/ Long term care
                </option>
                <option value="2">
                    Progressive Care
                </option>
                <option value="2">
                    Telemetry
                </option>
                
                
               
                
           
             
                
              
                <option value="2">
                    Trauma
                </option>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 text-right">
        <button class="btn btn-default js-create-role">
            Add Role
        </button>
    </div>
</div>
</div>
</fieldset>


<?php

    $nested = '
    <div class="row">
        <div class="col-md-2 col-md-offset-1"> Organization:</div>
        <div class="col-md-3">Springfield Medical Association</p></div>
    </div>
    <div class="row">
        <div class="col-md-2 col-md-offset-1"> Institution:</div>
        <div class="col-md-3">Springfield General Hospital </p></div>
    </div>
    <div class="row">
        <div class="col-md-2 col-md-offset-1">
       <p>Profession: </p>
       </div>
       <div class="col-md-3">
     Registered Nurse
       </div>
   </div>
    <div class="row">
        <div class="col-md-2 col-md-offset-1">
       <p>Specialty: </p>
       </div>
       <div class="col-md-3">
         Maternal Health/Gynecology
       </div>
   </div>
        ';

    $slat = array(
        'title' =>
        'Student',
        'attributes' => array(
            array('class', array('slat', 'slat-modal', 'js-student-slat')),
        ),
        'meta' => '

                    <span class="meta-label">
                        Department:
                    </span>
                    <span class="meta-value">
                        Labor and Delivery
                    </span>

            ',
        'action' => array(
            'type' => 'custom',
            'content' => '
            <div class="action">
                <a class="btn btn-sm btn-danger " href="#">
                    <i class="fa fa-times">
                    </i>
                    Locked
                </a>
            </div>
            ',
        ),
        'nested' => array(
            'hide' => array($nested),
        ),
        'toggle' => array('Show More', 'Show Less'),

    );

    echo createSlat($slat);

    $nested = '

        <div class="row">
            <div class="col-md-2 col-md-offset-1"><p> Organization:</p></div>
            <div class="col-md-3">Northwestern Healthcare</div>
        </div>
         <div class="row">
            <div class="col-md-2 col-md-offset-1">  <p>Institution:</p></div>
            <div class="col-md-3"> Sacred Heart Hospital </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-1"> <p>Profession:</p></div>
            <div class="col-md-3"> Registered Nurse </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-1"> <p>Specialty:</p> </div>
            <div class="col-md-3"> Maternal Health </div>
        </div>

    ';

    $slat = array(
        'title' =>
        'Student',
        'attributes' => array(
            array('class', array('slat', 'slat-modal', 'js-student-slat')),
        ),
        'meta' => '
            <span class="meta-label">
                Department:
            </span>
            <span class="meta-value">
                Obstetrics
            </span>
            ',
        'action' => array(
            'type' => 'custom',
            'content' => '
            <div class="action">
                <a class="btn btn-sm btn-danger " href="#">
                    <i class="fa fa-times">
                    </i>
                    Locked
                </a>
            </div>
            ',
        ),
        'nested' => array(
            'hide' => array($nested),
        ),
        'toggle' => array('Show More', 'Show Less'),

    );

    echo createSlat($slat);

    $nested = '
        <div class="row">
            <div class="col-md-2 col-md-offset-1"><p> Organization:</p></div>
            <div class="col-md-3">Springfield Medical Association</div>
        </div>
         <div class="row">
            <div class="col-md-2 col-md-offset-1">  <p>Institution:</p></div>
            <div class="col-md-3"> Springfield General Hospital </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-1"> <p>Access Level:</p></div>
            <div class="col-md-3"> Registered Nurse </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-1"> <p>Department:</p> </div>
            <div class="col-md-3"> Labor and Delivery</div>
        </div>';
    $slat = array(
        'title' => 'Admin',
        'attributes' => array(
            array('class', array('slat', 'slat-modal', 'js-admin-slat')),
        ),

        'meta' => '
            <ul class="meta">
                <li>
                    <span class="meta-label">
                        Access Level:
                    </span>
                    <span class="meta-value">
                        Department
                    </span>
                </li>
            </ul>
            ',
        'action' => array(
            'type' => 'custom',
            'content' => '
        <div class="action">
            <a class="btn btn-sm btn-danger " href="#">
                <i class="fa fa-times">
                </i>
                Locked
            </a>
        </div>
        ',
        ),
        'nested' => array(
            'hide' => array($nested),
        ),
        'toggle' => array('Show More', 'Show Less'),

    );

    echo createSlat($slat);
?>
 <?php
        $stickybar = array(
            'sets' => array(
                array(
                    'position' => 'left',
                    'html' => '<a class="btn btn-success" href="/user-admin.php">Save</a>
                    <a class="btn btn-success" href="#">Save and Continue Editing</a>
                    <a class="btn btn-default" href="/user-admin.php">Cancel</a>',
                ),
                
                array(
                    'position' => 'right',
                    'classes' => array('visible-xs','visible-sm'),
                    'html' => '
                        <div class="btn-group">
                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    ',
                ),
            ),
        );
        echo createStickybar($stickybar);
    ?>
</div>

 
</section>
<?=createFooter($patterns['footer']); ?>
<?=createPrototypeNav(); ?>
<?=createSiteScripts(); ?>
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
      if ($(".js-role-select").val() == '1' && $(".js-department-select").val() == '9') {
        $(".js-student-slat:first-of-type").show();
        $(".rn-conditional-field").hide();
        $(".student-conditional-field").hide();
        $(".dept-admin-conditional-field").hide();
        
        $('select').prop('selectedIndex', 0);

    }
    else if ($(".js-role-select").val() == '1' ){
          $(".js-student-slat").show();
            $(".rn-conditional-field").hide();
            $(".student-conditional-field").hide();
            $('select').prop('selectedIndex', 0);
    }

    else if ($(".js-role-select").val() == '2') {
        $(".js-admin-slat").show();
        $(".rn-conditional-field").hide();
        $(".admin-conditional-field").hide();
        $(".dept-admin-conditional-field").hide();
        
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

    $(".roles-fieldset").on("change", ".js-org-select", function(){
        if($(this).val() > "0" ){
            $(".js-institution-select").removeAttr('disabled');
            $(".js-institution-select").find("option").eq(0).remove();
        }

    });

    $(".roles-fieldset").on("change", ".js-access-select", function() {
        if ($(this).val() == "9"){
        $(".dept-admin-conditional-field").show();
        }
    });




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
</script>
