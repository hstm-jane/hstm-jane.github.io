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
                padding: 10px;
                border-radius: 5px;
                margin: auto 15px 15px;
               
            }



            .student-conditional-field,
            .admin-conditional-field,
            .rn-conditional-field,
            .js-admin-slat,
            .js-student-slat, 
            .dept-admin-conditional-field {
                display: none;
         /*   }
            .role-group{
                border: 1px solid #ddd;
                border-radius: 5px;
padding:5px;
margin: 10px auto;
            }*/
        </style>
        <div class="layout layout-search">
            <div class="container">
                <section class="section section-main section-box">
                    <h2></h2>
                    <fieldset>
                        <legend>
                            Who are you adding ? 
                        </legend>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        First Name
                                    </label>
                                    <input class="form-control" type="textbox"></input>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Middle Name/Initial (Optional)
                                    </label>
                                    <input class="form-control" type="textbox"></input>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Last Name
                                    </label>
                                    <input class="form-control" type="textbox"></input>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Assign a Username
                                    </label>
                                    <input class="form-control" type="textbox"></input>
                                </div>
                            </div>
                        </div>      
                    </fieldset>
                    <fieldset class="roles-fieldset">
                        <legend>
                            What will the user be doing in AssessRx?
                        </legend>

                        <div class="row">
                            <div class="col-md-6">
                            <label>Role Options</label>
                            <div class="role-group">
                                <label class="checkbox"><input type="checkbox"> <b>Employee </b> - Taking assessments </label>
                                <div class="permission-set ">

                                    <div class="form-group">
                                        <label class="control-label">
                                            Assign AssessRx Paths based on the following Profession(s)
                                        </label>
                                        <select class="form-control js-profession-select" multiple="multiple">
                                            <option value="1">Behavioral Health Technologist</option>
                                            <option value="2">Cardiovascular Technologist</option>
                                            <option value="3">Case Manager</option>
                                            <option value="4">Dietitian</option>
                                            <option value="5">Educator</option>
                                            <option value="6">Leader</option>
                                            <option value="7">Licensed Practical/ Vocational Nurse</option>
                                            <option value="8">Medical Assistant</option>
                                            <option value="9">Medical Laboratory Technologist</option>
                                            <option value="10">Occupational Therapist</option>
                                            <option value="11">Paramedicine Professional</option>
                                            <option value="12">Pharmacist</option>
                                            <option value="13">Pharmacy Technician</option>
                                            <option value="14">Physical Therapist</option>
                                            <option value="15">Radiology Technician</option>
                                            <option value="16">Respiratory Therapist</option>
                                            <option value="17">Registered Nurse</option>
                                            <option value="18">Social Worker</option>
                                            <option value="19">Speech Therapist</option>
                                            <option value="20">Surgical Technologist</option>
                                            <option value="21">Unlicensed Assistive Personnel</option>

                                        </select>
                                    </div>

                                    <div class="form-group rn-conditional-field">
                                        <label class="control-label">
                                           AssignRx Paths continued (RN Specialty)
                                        </label>
                                        <select class="form-control js-specialty-select" multiple="multiple">

                                            <option>
                                                Acute Rehabilitation
                                            </option>
                                            <option >
                                                Ambulatory Care
                                            </option>
                                            <option >
                                                Behavioral Health
                                            </option>
                                            <option >
                                                Cardiac Critical Care
                                            </option>
                                            <option >
                                                Emergency
                                            </option>
                                            <option>
                                                Maternal Health/Gynecology
                                            </option>
                                            <option >
                                                Medical-Surgical
                                            </option>
                                            <option >
                                                Medical-Surgical Critical Care
                                            </option>

                                            <option >
                                                Neonatal ICU
                                            </option>
                                            <option>
                                                Neuro Critical Care
                                            </option>
                                            <option>
                                                Obstetrics
                                            </option>
                                            <option>
                                                Oncology
                                            </option>
                                            <option>
                                                Pediatric Intensive Care
                                            </option>
                                            <option>
                                                Pediatrics
                                            </option>
                                            <option>
                                                Perianesthesia Care
                                            </option>
                                            <option>
                                                Perioperative
                                            </option>
                                            <option>
                                                Post-Acute/ Long term care
                                            </option>
                                            <option>
                                                Progressive Care
                                            </option>
                                            <option>
                                                Telemetry
                                            </option>

                                            <option>
                                                Trauma
                                            </option>
                                        </select>
                                    </div>

                                    <div class="form-group ">
                                        <label class="control-label">Let Admins in the following departments view the user's results: </label>

                                        <select class="form-control js-department-select js-multiple-select" multiple="multiple">

                                            <option value="1">
                                                Admissions
                                            </option>
                                            <option value="2">
                                                Anesthetics
                                            </option>
                                            <option value="3">
                                                Cardiology
                                            </option>
                                            <option value="4">
                                                Critical Care
                                            </option>
                                            <option value="5">
                                                Diagnostic Imaging
                                            </option>
                                            <option value="6">
                                                General Surgery
                                            </option>
                                            <option value="7">
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
                                            <option value="8">
                                                Radiology
                                            </option>
                                            <option value="9">
                                                Labor and Delivery
                                            </option>
                                            <option value="10">
                                                Obstetrics
                                            </option>
                                        </select>
                                    </div>

                                 </div>
                                </div>
                                <div class="role-group">

                                <label class="checkbox"><input type="checkbox"> <b>Admin </b>  - Assigning and managing assessments </label> 

                                <div class="permission-set">
                                    <div class="form-group">
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
                                    <div class="form-group ">
                                        <label class="control-label">Department(s) </label>

                                        <select class="form-control js-department-select js-multiple-select" multiple="multiple">

                                            <option value="1">
                                                Admissions
                                            </option>
                                            <option value="2">
                                                Anesthetics
                                            </option>
                                            <option value="3">
                                                Cardiology
                                            </option>
                                            <option value="4">
                                                Critical Care
                                            </option>
                                            <option value="5">
                                                Diagnostic Imaging
                                            </option>
                                            <option value="6">
                                                General Surgery
                                            </option>
                                            <option value="7">
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
                                            <option value="8">
                                                Radiology
                                            </option>
                                            <option value="9">
                                                Labor and Delivery
                                            </option>
                                            <option value="10">
                                                Obstetrics
                                            </option>
                                        </select>
                                    </div>
                                </div>

</div>
                            </div>
<div class="col-md-6">
    <label>Assigned Role(s)</label>
<div class="message">No roles have been assigned yet. </div>
    <?php

    $nested = '
    <div class="row">
        <div class="col-md-3 col-md-offset-1 "> Organization:</div>
        <div class="col-md-8">Springfield Medical Association</p></div>
    </div>
    <div class="row">
        <div class="col-md-3 col-md-offset-1 "> Institution:</div>
        <div class="col-md-8">Springfield General Hospital </p></div>
    </div>
    <div class="row">
        <div class="col-md-3 col-md-offset-1 ">
       <p>Department: </p>
       </div>
       <div class="col-md-8 ">
   General Surgery
       </div>
   </div>

        ';

    $slat = array(
        'title' => 'Employee',
        'attributes' => array(
            array('class', array('slat', 'slat-modal')),
        ),
       'meta' => array(
                                 
            array(
                'label' => 'Profession:',
                'value' => 'Registered Nurse',
            ),
            array(
                'label' => 'Specialty: ',
                'value' => 'Medical-Surgical Critical Care',
                
            ),
        ),
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
</div>
                        </div>
                    </fieldset>


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



                $(".checkbox input").change(function(){
                    $(this).parent().next().toggle();
                });

                $(".js-department-select").select2({
                    placeholder: "Enter or select departmet(s)",
                    allowClear: true
                });

                $(".js-profession-select").select2({
                    placeholder: "Enter or select profession(s)",
                    allowClear: true
                });

                $(".js-specialty-select").select2({
                    placeholder: "Enter or select RN Specialty",
                    allowClear: true
                });
                $(".js-profession-select").on("change", function(e){


                    var value = $(this).val();
                   if (~value.indexOf("17")){
                    $(".rn-conditional-field").show();
                   }
                   else{
                    $(".rn-conditional-field").hide();
                  
                   }
                });
                $(".permission-set").hide();
              
            </script>
