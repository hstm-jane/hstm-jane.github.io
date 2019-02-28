<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Goals - Package Wizard';
$patterns['header'] = array(
    'classes' => array('site-header--assessments'),
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">',
    'mainNav' => '
        <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
        <li class="{active=todo}"><a href="/todo.php?rater">To Do</a></li>
        <li class="{active=completed}"><a href="/completed-filtered.php">Completed</a></li>
        <li class="{active=profile} dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="/advanced-practice.php">Advanced Practice</a></li>
                <li><a href="/certifications.php">Certifications</a></li>
                <li><a href="/documents.php">Documents</a></li>
                <li><a href="/education.php">Education</a></li>
                <li><a href="/goals.php">Goals</a></li>
                <li><a href="/job-descriptions.php">Job Descriptions</a></li>
                <li><a href="/disciplines-licenses.php">Licenses</a></li>
                <li><a href="/notes.php">Notes</a></li>
                <li><a href="/personal-information.php">Personal Information</a></li>
            </ul>
        </li>
        <li class="{active=goals}"><a href="/goals-management.php">Goals</a></li>
        <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'goals',
);
$patterns['focus']['title'] = 'Goal Package Wizard';

?>
<style>
/**/
</style>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout layout-goal-management ">
    <div class="container">
        <section class="section section-main section-box">
         <div class="assessment-header">
                <div class="assessment-return"><a href="goals-management.php"><i class="fa fa-fw fa-chevron-left"></i>Return to Goal Packages</a> </div>
            </div>
            <form id="createPackageWizard">
  
            <ul class="bs-wizard" style="border-bottom:0;">
                                
                <li class="col-xs-3 bs-wizard-step active">
                     <div class="progress">
                    </div>
                    <a href="#tab1" data-toggle="tab">
                        <div class="bs-wizard-dot">
                            <div class="text-center bs-wizard-stepnum">1</div>
                        </div>
                        <div class="text-center bs-wizard-title">Create Package</div>
                    </a>
                </li>
                <li class="col-xs-3 bs-wizard-step ">
                     <div class="progress">
                    </div>
                    <a href="#tab2" data-toggle="tab">
                        <div class="bs-wizard-dot">
                            <div class="text-center bs-wizard-stepnum">2</div>
                        </div>
                        <div class="text-center bs-wizard-title">Set Dates</div>
                    </a>
                    
                </li>
                
                <li class="col-xs-3 bs-wizard-step ">
                     <div class="progress">
                    </div>
                    <a href="#tab3" data-toggle="tab">
                        <div class="bs-wizard-dot">
                            <div class="text-center bs-wizard-stepnum">3</div>
                        </div>
                        <div class="text-center bs-wizard-title">Rating Scale</div>
                    </a>
                </li>
                
                <li class="col-xs-3 bs-wizard-step "><!-- complete -->
                    <div class="progress">
                    </div>
                     <a href="#tab4" data-toggle="tab">
                        <div class="bs-wizard-dot">
                            <div class="text-center bs-wizard-stepnum">4</div>
                        </div>
                        <div class="text-center bs-wizard-title">Link to Assessment Templates</div>
                    </a>
                </li>
                
                <li class="col-xs-3 bs-wizard-step "><!-- active -->
                     <div class="progress">
                    </div>
                     <a href="#tab5" data-toggle="tab">
                        <div class="bs-wizard-dot">
                            <div class="text-center bs-wizard-stepnum">5</div>
                        </div>
                        <div class="text-center bs-wizard-title">Configurations</div>
                    </a>
                </li>
                 <li class="col-xs-3 bs-wizard-step "><!-- active -->
                     <div class="progress">
                    </div>
                     <a href="#tab6" data-toggle="tab">
                        <div class="bs-wizard-dot">
                            <div class="text-center bs-wizard-stepnum">6</div>
                        </div>
                        <div class="text-center bs-wizard-title">Review</div>
                    </a>
                </li>
                 
            </ul>
            <div class="tab-content">
                <div class="tab-pane bs-wizard-step active" id="tab1">
                <h3>Create Package</h3>
                <div class="help-block">Set up package to house a group of goals.</div>
                  <button class="btn btn-default btn-sm">Import from Existing Package</button>
                <section class="section">
                    <!--<div class="form-group">-->
                        <!--<label for="packageName">Package Name</label>-->
                      
                    <!--</div>-->
                    <div class="form-group">
                        <label for="packageName">Package Name</label>
                        <input type="text" class="form-control" id="packageName" name="packageName" placeholder="Package Name"/>
                    </div>
                    <div class="form-group">
                        <label for="packageName">Goal Package Description <small>Optional</small></label>
                        <textarea class="form-control" id="packageDescription"></textarea>
                    </div>
                     <div class="form-group">
                        <label for="packageName">Will the goals in this package be weighted?</label>
                         <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                         <label class="radio-inline"><input type="radio" name="optradio">No</label>
                    </div>
                </section>          
                        
                            
                     
                </div>
                <div class="tab-pane bs-wizard-step" id="tab2">
                 <h4>Goal Package: <strong>2017 Organization Goals</strong></h4>
                
                <h3>Set Dates</h3>
                 <div class="help-block">Set up the dates associated to this goal package.</div>
                   <section class="section">
                   
                    <div class="form-group" >
                        <label for="packageName">Start Date <small>When should this goal package be made available.</small></label>
                         <div class="input-group bootstrap-datepicker"style="width:200px;">
                            <input type="text" class="form-control datepicker" id="event-end-date"  tabindex="1">
                            <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                        </div>
                    </div>
                     <div class="form-group" >
                        <label for="packageName">End Date <small> When should all of the goals in this package be completed by</small></label>
                         <div class="input-group bootstrap-datepicker" style="width:200px;">
                            <input type="text" class="form-control datepicker" id="event-end-date"  tabindex="1">
                            <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                        </div>
                    </div>
                    
                </section>        
                </div><!-- End Step 2-->
                <div class="tab-pane" id="tab3">
                 <h4>Goal Package: <strong>2017 Organization Goals</strong></h4>
                    <h3>Rating Scale</h3>
                     <div class="help-block">Set up the rating scale that will be used to evaluate all of the goals 
                     in this package. The scale will also be used when the goals are imported into assessments.</div>
                      <section class="section">
                        <div class="form-group">
                            <label for="packageName">Scale</label>
                            <select class="form-control" style="width:100px">
                                <option>5</option>
                                <option>4</option>
                                <option>3</option>
                                <option>2</option>
                                <option>1</option>
                            </select>
                        </div>
                      <div class="form-group">
                            <label for="packageName">Rating Label</label>
                             <div class="row" style="margin-top:10px;margin-left:15px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:14px;">1 = </div>
                                    <div style="width:200px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                </div>
                                 <div class="row" style="margin-top:10px;margin-left:15px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:14px;">2 = </div>
                                    <div style="width:200px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                </div>
                                 <div class="row" style="margin-top:10px;margin-left:15px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:14px;">3 = </div>
                                    <div style="width:200px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                </div>
                                 <div class="row" style="margin-top:10px;margin-left:15px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:14px;">4 = </div>
                                    <div style="width:200px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                </div>
                                 <div class="row" style="margin-top:10px;margin-left:15px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:14px;">5 = </div>
                                    <div style="width:200px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                </div>
                        </div>
                    
                </section>          
                </div><!-- End Step 3-->
                <div class="tab-pane" id="tab4">
                    <h4>Goal Package: <strong>2017 Organization Goals</strong></h4>
                    <h3>Link to Assessment Templates</h3>
                     <div class="help-block">It appears you have the HealthStream Performance Center! You can link this package to automatically push the goals into the selected assessments.</div>
                      <section class="section">
                      <div class="slat">
                                <div class="slat-message">
                                    <h3>You have not linked any assessment templates to this package.</h3>
                                    <a href="#" class="btn btn-default">Select Templates</a>
                                </div>
                            </div>
                      </section>
                </div><!-- End Step 4-->
                <div class="tab-pane" id="tab5">
                     <h4>Goal Package: <strong>2017 Organization Goals</strong></h4>
                    <h3>Configurations</h3>
                     <div class="help-block">Configure who can edit the goals in this package.</div>
                      <section class="section">
                      TBD<br><br>
                      Some things we know about so far: <br>
                      <ol>
                      <li>How many levels are in the hierarchy (max of 4?).</li>
                      <li>Names for the levels?</li>
                      <li>Are personal goals allowed (toggle)?</li>
                      <li>Who's allowed to create their own goals? (staff, etc)
                        <ol>
                        <li>Also indirectly turns on and off approval process.</li>
                        </ol>
                      </li>
                      <li>Who is the approver?
                        <ol>
                        <li>Still need to validate.  Probably makes more sense to be at the goal level. </li>
                        </ol>
                      </li>
                      </ol>
                    
                      </section>
                </div><!-- End Step 5-->

                 <div class="tab-pane" id="tab6">
                     <h4>Goal Package: <strong>2017 Organization Goals</strong></h4>
                    <h3>Review</h3>
                     <div class="help-block">Review all of your goal package settings.</div>
                      <section class="section">
                      TBD<br><br>
                    User reviews settings and finalizes package creation. 
                    <br><br>'Save and Add Goals' will be disabled until all required fields have been entered. 

                   <Br><br> <button class="btn btn-success" disabled>Save and Add Goals</button>
                   <button class="btn btn-default">Save as Draft</button>
                    
                      </section>
                </div><!-- End Step 5-->
              
                <div class="nav-buttons">
                
                    <input type='button' class='btn btn-default button-previous' name='previous' value='Previous' />
                    <input type='button' class='btn btn-success button-next' name='next' value='Next' />
                    
                    <!--<input type='button' class='btn button-first' name='first' value='First' />-->
                    <a href="#" class='btn btn-link save-draft'>Save Draft</a>
                    <span class="draft-saved collapse" style="color:#5cb85c;font-style:italic; margin-left:20px;">Draft Saved</span>
                 
                    
                 
                    <!--<input type='button' class='btn btn-success button-last' name='last' value='Last' />-->
                </div>
                <div style="float:right">
                      
                </div>
                <div style="margin-top:30px;">
                      
            </div>
                      </div>
               
        <!--</div>-->

 <!--end wizard-->
 </form>

 <br><br>
 </section>
    </div><!-- /container -->
</div> <!-- /layout -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="/scripts/wizard.js"></script>
<script src="/scripts/prototype.goals.wizard.js"></script>
<?= createSiteEnd(); ?>
