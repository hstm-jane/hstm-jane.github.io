<?php
include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Add User';
$patterns['focus']['title'] = 'Add User';
$patterns['header'] = array(
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="/content/images/prototype-actors/allisongrayce.jpg">',
    'mainNav' => '
        <li class="{active=home}"><a href="/demo-admin.php">Home</a></li>
        <li class="{active=results}"><a href="/demo-admin-assessment-results.php">Assessment Results</a></li>
        <li class="{active=users}"><a href="/demo-admin-manage-users.php">Manage Users</a></li>',
    'logoLarge' => './content/images/logo-assess-large.png',
    'mainNavActive' =>'users',
    'alerts' => '',
    'userInstitution' => '',
);
?>
<?=createSiteStart($patterns['start']);?>
<?=createHeader($patterns['header']);?>
<?=createFocus($patterns['focus']);?>
<style>


.roles-fieldset{
    margin-top: 15px;
}

.slat-completed{
    opacity: .6;
    transition: all .2s ease;
}

.slat-completed:hover{
    opacity: 1;
}


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
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">
                                First Name
                            </label>
                            <input class="form-control" type="textbox"></input>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">
                                Middle Name/Initial (Optional)
                            </label>
                            <input class="form-control" type="textbox"></input>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">
                                Last Name
                            </label>
                            <input class="form-control" type="textbox"></input>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">
                                Email Address
                            </label>
                            <input class="form-control" type="textbox"></input>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">
                                Assign a Username
                            </label>
                            <input class="form-control" type="textbox"></input>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">
                                Temporary Password
                            </label>
                            <input class="form-control" type="textbox"></input>
                        </div>
                    </div>


                </div>
            </fieldset>
            <fieldset class="roles-fieldset">
                <legend>
                    Assign Roles to generate Assessment Paths or to give Admin privileges.
                </legend>

                <div class="row">
                    <div class="col-md-4">
                        <label>Role Options</label>
                        <div class="role-group">
                            <div class="form-group">
                                <a href="#modal-employee" class="btn btn-default js-employee-modal btn-block" data-toggle="modal">Assign Employee Role</a>
                            </div>
                            <div class="form-group">
                                <a href="#modal-supervisor" class="btn btn-default btn-block" data-toggle="modal">Assign Admin Role</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label>Assigned Role(s)</label>
                        <div class="message">Assignment of at least one role is required. </div>
                        <?php

                        $nested = '
                        <div class="row">
                        <div class="col-md-2 "><p> Organization:</p></div>
                        <div class="col-md-4">Springfield Medical Association</div>
                        </div>
                        <div class="row">
                        <div class="col-md-2 ">  <p>Affiliation:</p></div>
                        <div class="col-md-4"> Springfield General Hospital </div>
                        </div>
                        <div class="row">
                        <div class="col-md-2 "> <p>Access Level:</p></div>
                        <div class="col-md-4"> Department</div>
                        </div>
                        <div class="row">
                        <div class="col-md-2 "> <p>Department:</p> </div>
                        <div class="col-md-4"> Labor and Delivery</div>
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
                            <li>
                            <span class="meta-label">
                            Department:
                            </span>
                            <span class="meta-value">
                            Labor and Delivery
                            </span>
                            </li>
                            </ul>
                            ',
                            'action' => array(
                                'type' => 'custom',
                                'content' => '
                                <div class="action">
                                <a class="btn btn-sm btn-danger js-remove-role" href="#">
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
                        <div class="col-md-3 "> Organization:</div>
                        <div class="col-md-8">Springfield Medical Association</p></div>
                        </div>
                        <div class="row">
                        <div class="col-md-3"> Affiliation:</div>
                        <div class="col-md-8">Springfield General Hospital </p></div>
                        </div>
                        <div class="row">
                        <div class="col-md-3 ">
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
                                array('class', array('slat', 'slat-modal', "js-student-slat")),
                            ),
                            'meta' => array(

                                array(
                                    'label' => 'Profession:',
                                    'value' => 'Registered Nurse',
                                ),
                                array(
                                    'label' => 'Specialty: ',
                                    'value' => 'Emergency',

                                ),
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '
                                <div class="action">
                                <a class="btn btn-sm btn-danger js-remove-role" href="#">
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
                        'html' => '<a class="btn btn-success" href="/demo-admin-manage-users.php">Save</a>


                        <a class="btn btn-default" href="/demo-admin-manage-users.php">Cancel</a>',
                    ),

                    array(
                        'position' => 'right',
                        'classes' => array('visible-xs', 'visible-sm'),
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


        <div id="modal-employee" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                        <h4 class="modal-title">Assign Employee Role</h4>
                    </div>
                    <div class="modal-body">
                        <div class="role-group">
                            <div class="permission-set ">
                                <div class="form-group">
                                    <label class="control-label">
                                        Which Affiliation will the employee be assigned Assess items?
                                    </label>
                                    <select class="form-control js-affiliation-select" >
                                        <option value="0" disabled selected>Choose Affiliation </option>
                                        <option value="1">Arkham Asylum </option>
                                        <option value="2">All Saints Hospital</option>
                                        <option value="3">Brookhaven Hospital</option>
                                        <option value="4">Chicago Hope</option>
                                        <option value="5">Holby City Hospital</option>
                                        <option value="6">James Rivers Hospital </option>
                                        <option value="7">Kingdom Hospital</option>
                                        <option value="8">Mayfield Psychiatric Hospital</option>
                                        <option value="9">New Bedlam Rest Home for the Emotionally Interesting</option>
                                        <option value="10">Princeton-Plainsboro Teaching Hospital</option>
                                        <option value="11"> Richmond Trinity Hospital</option>
                                        <option value="12">Sacred Heart Hospital </option>
                                        <option value="13">Shady Acres Mental Hospital</option>
                                        <option value="14">Springfield General Hospital </option>
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label">Admins in the following department will be able to view the user's results </label>


                                    <select class="form-control js-department-select ">
                                        <option value="0" disabled selected>Choose Department </option>


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



                                <div class="form-group">
                                    <label class="control-label">
                                        Assign Assessment Paths based on the following Profession
                                    </label>
                                <!--     <div class="js-enterprise-admin-mutli-affiliaton">
                                        <label class="checkbox"><input type="radio" name="multi-affiliations"> This user will have different professions at different affiliations.</label>
                                        <label class="checkbox"><input type="radio" name="multi-affiliations"> Professions will be the same at any affilliaton the user belongs to.</label>
                                    </div> -->


                                    <select class="form-control js-profession-select"  style="min-width:500px;" >
                                        <option value="0" disabled selected>Choose Profession </option>

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
                                        RN Specialty
                                    </label>
                                    <select class="form-control js-specialty-select" >

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
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-success" href="#modal-pathway" data-dismiss="modal" data-toggle="modal">Assign Role</a>

                        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div><!-- /modal -->




        <div id="modal-supervisor" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                        <h4 class="modal-title">Assign Admin Role</h4>
                    </div>
                    <div class="modal-body">


                        <div class="role-group">



                            <div class="permission-set">
                                <div class="form-group">
                                    <label class="control-label">
                                        Give user access to edit employees and view results at the following level
                                    </label>
                                    <select class="form-control js-access-select ">
                                        <option value="0">
                                            Select
                                        </option>
                                        <option value="1">
                                            Affiliation
                                        </option>
                                        <option value="2">
                                            Department
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group js-admin-control">
                                    <label class="control-label">Affiliation </label>
                                    <select class="form-control js-affiliation-select " >
                                        <option value="0" disabled selected>Choose Affiliation </option>

                                        <option value="1">Arkham Asylum </option>
                                        <option value="2">All Saints Hospital</option>
                                        <option value="3">Brookhaven Hospital</option>
                                        <option value="4">Chicago Hope</option>
                                        <option value="5">Holby City Hospital</option>
                                        <option value="6">James Rivers Hospital </option>
                                        <option value="7">Kingdom Hospital</option>
                                        <option value="8">Mayfield Psychiatric Hospital</option>
                                        <option value="9">New Bedlam Rest Home for the Emotionally Interesting</option>
                                        <option value="10">Princeton-Plainsboro Teaching Hospital</option>
                                        <option value="11"> Richmond Trinity Hospital</option>
                                        <option value="12">Sacred Heart Hospital </option>
                                        <option value="13">Shady Acres Mental Hospital</option>
                                        <option value="14">Springfield General Hospital </option>
                                    </select>
                                </div>
                                <div class="form-group js-admin-control ">
                                    <label class="control-label">Department(s) </label>

                                    <select class="form-control js-department-select" >

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

                    <div class="modal-footer">
                        <button class="btn btn-success js-btn-assign-supervisor" >Apply Role</button>

                        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>

                </div>
            </div>
        </div>


        <div id="modal-pathway" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                        <h4 class="modal-title">Assessment Path</h4>
                    </div>
                    <div class="modal-body pathway-message">

                        <p>This role will assign the following Assessment Path to the employee:</p>

                        <h3>Registered Nurse: Emergency</h3>
                        <hr>


                        <div class="slat-group">
                            <div class="slat-group-header">
                  <div class="slat-group-header-title">
                    <h4>Assessments Needed to Finish Assessment Path </h4>
                </div>
            </div>
            <div class="slat-group-content">
              <?php
              $slat = array(
               'title' => 'Emergency Nurse Competency Exam',
               'attributes' => array(
                array('class', array('slat')),
            ),

               'meta' => '
               <ul class="meta">
               <li><span class="meta-type">Knowledge Assessment</span></li>
               </ul>',
               'action' => array(
                'type' => 'custom',
                'content' => '',
            ),

           );

              echo createSlat($slat);

              $slat = array(
               'title' => 'Pharmacology Competency Exam',
               'attributes' => array(
                array('class', array('slat', 'slat', 'slat-taken')),
            ),

               'meta' => '
               <ul class="meta">
               <li><span class="meta-type">Knowledge Assessment</span></li>

               </ul>',
               'action' => array(
                'type' => 'custom',
                'content' => '',
            ),

           );

              echo createSlat($slat);
              ?>
          </div>
          <div class="slat-group-footer"></div>
      </div>
  </section>

  <section class="section">

      <div class="slat-group">
                <div class="slat-group-header">
                  <div class="slat-group-header-title">
                    <h4>Available to Assign Again</h4>
                  </div>
              </div>
              <div class="slat-group-content">
                  <?php
                  $slat = array(
                   'title' => 'Emergency Nurse Skills Checklist',
                   'attributes' => array(
                    array('class', array('slat', 'slat-completed', 'slat-modal')),
                ),

                   'meta' => array(
                    array(
                        'type' => 'Skills Self Assessment',
                    ),

                    array(
                        'label' => '',
                        'value' => '<span class="meta-callout-label">Completed:</span>' . date('M d, Y'),
                        'attributes' => array(
                            array('class','meta-callout'),
                        )
                    )
                ),
                   'action' => array(
                        'type' => 'custom',
                        'content' => '<div class="action">
                            <a class="btn btn-sm btn-default btn-reassign" href="#">Reassign <i class="fa fa-fw fa-plus visible-xs"></i></a>
                            </div>',
                        'link' => '#',
                    )

               );

                  echo createSlat($slat);

                  ?>
              </div>
              <div class="slat-group-footer"></div>

          </div>

      </div>

      <div class="modal-footer">
       <button class="btn btn-success js-btn-assign-employee" data-dismiss="modal" >Apply Role Assessments</button>

       <a href="#modal-employee" class="btn btn-default" data-dismiss="modal" data-toggle="modal">Back</a>
   </div>

</div>
</div>
</div>


</section>
<?=createFooter($patterns['footer']);?>
<?=createPrototypeNav();?>
<?=createSiteScripts();?>
<script>

   $(document).ready(function(){



      $(document).on("click", ".btn-reassign", function(){
        $(this).html('Reassign <i class="fa fa-fw fa-check visible-xs"></i>');
        $(this).closest(".slat-completed").removeClass("slat-completed");

      });



      $(".js-checkbox-role input").change(function(){
        $(this).parent().next().toggle();
    });

      $(".js-department-select").select2({
        placeholder: "Enter or select departmet(s)",
        allowClear: true,

    });

      $(".js-profession-select").select2({
        placeholder: "Enter or select profession(s)",
        allowClear: true
    });

      $(".js-specialty-select").select2({
        placeholder: "Enter or select RN Specialty",
        allowClear: true
    });
      $(".js-affiliation-select").select2({
        placeholder: "Enter or select affiliation(s)",
        allowClear: true
    });


      $(".js-remove-role").on("click", function(e){
        $(this).parents(".js-admin-slat").hide();
        $(this).parents(".js-student-slat").hide();
//$(e.target).parentsUntil(".js-student-slat").hide();
});


      $(".js-access-select").on("change", function(){
        if($(this).val() == "1"){
            $(".js-admin-control").hide();
            $(this).parentsUntil("permission-set").find(".js-admin-control:first").show();

        }
        else if($(this).val() == "2"){
            $(".js-admin-control").show();
        }
        else{
            $(".js-admin-control").hide();


        }
    });
      $(".js-btn-assign-employee").on("click", function(){
        $('#modal-employee').modal('hide');
        $(".js-student-slat").show();
        $(".message").hide();

    });
      $(".js-btn-assign-supervisor").on("click", function(){
        $('#modal-supervisor').modal('hide');
        $(".js-admin-slat").show();
        $(".message").hide();


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

      $('.branding a').click(function(e){
        e.preventDefault();
        window.location.href="/demo-start.php";
      });
  });

</script>
