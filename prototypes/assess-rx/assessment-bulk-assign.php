<?php
include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Assign Assessments';
$patterns['header']['mainNavActive'] ='assign-assessments';
$patterns['header'];
$patterns['focus']['title'] = 'Assign Assessments';

?>
    <?= createSiteStart($patterns['start']); ?>
        <?= createHeader($patterns['header']); ?>
            <?= createFocus($patterns['focus']); ?>
            

                <div class="layout layout-search bulk-assign">
                    <div class="container">
                        <section class="section section-main section-box">
                            <section class="section select_assignment-method">
                                <h3 class="assessment-groups__title">Choose Assignment Method</h3>
                                <div class="assessment-groups">

                                    <input type="radio" id="assessment-group-method_student-group" class="form-radio">
                                    <label for="assessment-group-method_student-group" class="assign-method">
                                        <div class="assessment-group assessment-group--assign-method">
                                            <div class="assessment-group__box equalized" data-equalize="assessment-group-method" style="min-height: 77px;">
                                                <div class="assessment-group__icon"><i class="fa fa-users"></i></div>
                                                <div class="assessment-group__assign-meta">Student Group</div>                                                   
                                            </div>
                                        </div>
                                    </label>

                                    <!-- 
                                    /////////// future additional cards  ///////////     
                                    <input type="radio" id="assessment-group-method_employees" class="form-radio">
                                    <label for="assessment-group-method_employees" class="assign-method">
                                        <div class="assessment-group assessment-group--assign-method">
                                            <div class="assessment-group__box equalized" data-equalize="assessment-group-method" style="min-height: 77px;">
                                                <div class="assessment-group__icon"><i class="fa fa-user"></i></div>
                                                <div class="assessment-group__assign-meta">Employee</div>                                                   
                                            </div>
                                        </div>
                                    </label> -->

                                </div><!--end assessment-groups -->
                            </section><!-- /select_assignment-method section-->

                            <section class="section select_student-group hidden"><!--add hidden class when done dev. re-factor hard coded boxes to for loop-->
                                <h3 class="assessment-groups__title clearfix ">Select Student Group</h3>
                                <h5>Please choose an Institution to search for Student Groups.</h5>

                                <!--Filter Bar for Affiliation Admin-->
                                <div class="filterbar_affiliation-admin">
                                    <div class="panel-group filter-bar-flat" role="tablist" id="filterbar-panel-group-affiliation">
                                        <div class="panel panel-default filterbar-panel">
                                            <div class="panel-heading" role="tab">
                                                <a role="button" data-toggle="collapse" data-parent="#filterbar-panel-group-affiliation" href="#filterbar-panel-affiliation" class=""> Student Group Filters
                                                    <div class="panel-heading-icon"> <i class="fa fa-chevron-down panel-heading-icon-closed"></i> <i class="fa fa-chevron-up panel-heading-icon-open"></i> </div>
                                                </a>
                                            </div>
                                            <div id="filterbar-panel-affiliation" class="panel-collapse in" role="tabpanel">
                                                <div class="panel-body">
                                                    <div class="filter-bar-row row1" id="row1">
                                                        <div class="filter-item">
                                                            <div class="form-group">
                                                                <div class="filter-label">
                                                                    <label class="control-label">Institution:</label>
                                                                </div>
                                                                <div class="filter-control">
                                                                    <select class="form-control input-sm dd-filter filter-institution" id="filter-institution">
                                                                        <option hidden disabled selected value>Select Institution</option>
                                                                        <option value="Institution1">Institution One</option>
                                                                        <option value="Institution2">Institution Two</option>
                                                                        <option value="Institution3">Institution Three</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="filter-item">
                                                            <div class="form-group">
                                                                <div class="filter-label">
                                                                    <label class="control-label">Department</label>
                                                                </div>
                                                                <div class="filter-control">
                                                                    <select class="form-control input-sm dd-filter filter-dept" id="filter-dept" disabled>
                                                                        <option hidden disabled selected value>Select Department</option>
                                                                        <option value="DepartmentA">Department A</option>
                                                                        <option value="DepartmentB">Department B</option>
                                                                        <option value="DepartmentC">Department C</option>
                                                                        <option value="DepartmentD">Department D</option>
                                                                        <option value="DepartmentE">Department E</option>
                                                                        <option value="DepartmentF">Department F</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="filter-item">
                                                            <div class="form-group">
                                                                <div class="filter-label">
                                                                    <label class="control-label">Type</label>
                                                                </div>
                                                                <div class="filter-control">
                                                                    <select class="form-control input-sm dd-filter filter-type" id="filter-type" disabled>
                                                                        <option hidden disabled selected value>Select Type</option>
                                                                        <option value="TypeAA">Type AA</option>
                                                                        <option value="TypeBB">Type BB</option>
                                                                        <option value="TypeCC">Type CC</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="filter-item sort-cell">
                                                            <a class="btn btn-default btn-sm btn-reset reset-filters disabled">Reset Filters</a>
                                                            <a class="btn btn-default btn-sm btn-search disabled">Search</a>
                                                        </div>
                                                    </div><!--/filter bar row1-->
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <!--/Filter Bar-->

                                <!--Filter Bar for Department Admin. hidden but here for reference-->
                                <div class="filterbar_dept-admin hidden">
                                    <div class="panel-group filter-bar-flat " role="tablist" id="filterbar-panel-group-dept">
                                        <div class="panel panel-default filterbar-panel">
                                            <div class="panel-heading" role="tab">
                                                <a role="button" data-toggle="collapse" data-parent="#filterbar-panel-group-dept" href="#filterbar-panel-dept" class=""> Student Group Filters
                                                    <div class="panel-heading-icon"> <i class="fa fa-chevron-down panel-heading-icon-closed"></i> <i class="fa fa-chevron-up panel-heading-icon-open"></i> </div>
                                                </a>
                                            </div>
                                            <div id="filterbar-panel-dept" class="panel-collapse in filterbar-panel-dept" role="tabpanel">
                                                <div class="panel-body">
                                                    <div class="filter-bar-row row1" id="row1">
                                                        <div class="filter-item">
                                                            <div class="form-group">
                                                                <div class="filter-label">
                                                                    <label class="control-label">Institution:</label>
                                                                </div>
                                                                <div class="filter-control">
                                                                    <select class="form-control input-sm dd-filter filter-institution" id="filter-institution" disabled>
                                                                        <option hidden disabled value>Select Institution</option>
                                                                        <option hidden disabled value="Institution1">Institution One</option>
                                                                        <option selected value="Institution2">Institution Two</option>
                                                                        <option hidden disabled value="Institution3">Institution Three</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="filter-item">
                                                            <div class="form-group">
                                                                <div class="filter-label">
                                                                    <label class="control-label">Department</label>
                                                                </div>
                                                                <div class="filter-control">
                                                                    <select class="form-control input-sm dd-filter filter-dept" id="filter-dept">
                                                                        <option hidden disabled selected value>Select Department</option>
                                                                        <option value="DepartmentA">Department A</option>
                                                                        <option value="DepartmentB">Department B</option>
                                                                        <option value="DepartmentC">Department C</option>
                                                                        <option value="DepartmentD">Department D</option>
                                                                        <option value="DepartmentE">Department E</option>
                                                                        <option value="DepartmentF">Department F</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="filter-item">
                                                            <div class="form-group">
                                                                <div class="filter-label">
                                                                    <label class="control-label">Type</label>
                                                                </div>
                                                                <div class="filter-control">
                                                                    <select class="form-control input-sm dd-filter filter-type" id="filter-type" disabled>
                                                                        <option hidden disabled selected value>Select Type</option>
                                                                        <option value="TypeAA">Type AA</option>
                                                                        <option value="TypeBB">Type BB</option>
                                                                        <option value="TypeCC">Type CC</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="filter-item sort-cell">
                                                            <a class="btn btn-default btn-sm btn-reset reset-filters disabled">Reset Filters</a>
                                                            <a class="btn btn-default btn-sm btn-search disabled" >Search</a>
                                                        </div>
                                                    </div><!--/filter bar row1-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/Filter Bar dept admin-->

                                <div class="assessment-groups assessment-student-groups-grid col-lg-12 hidden">
                                    <div class="assessment-groups">
                                    <div id="assessmentStudentGroupsHeader">
                                    <div class="alert alert-info">
                                        <p> Student Groups with 1000 or more people are not eligible for bulk assignments.</p>
                                    </div>
                                        <small class="text-muted">Showing 1 to 6 of 2049 entries</small>
                                    </div>
                                    <div id="searchStudentGroupsListTable_filter" class="dataTables_filter">
                                        <label><select class="form-control input-sm select2" placeholder="Quick Search" aria-controls="searchStudentGroupsListTable" multiple></select></label>
                                    </div>
                                        <div class="assessment-group assessment-group--student-groups" data-id="2">
                                            <div class="assessment-group__box equalized box-disabled" data-equalize="assessment-group-title" style="min-height: 77px;">
                                                <div class="assessment-group__title">Clinical Support A
                                                <div class="assessment-group__title-meta"><small><strong>Last Updated:</strong> December 18, 2018</small></div>
                                                </div>
                                                <div class="assessment-group__total">1067<div class="assessment-group__meta">people</div></div>
                                                </div>
                                            </div>

                                            <div class="assessment-group assessment-group--student-groups" data-id="3">
                                            <div class="assessment-group__box equalized" data-equalize="assessment-group-title" style="min-height: 77px;">
                                                <div class="assessment-group__title">Clinical Support B
                                                <div class="assessment-group__title-meta"><small><strong>Last Updated:</strong> December 18, 2018</small></div>
                                                </div>
                                                <div class="assessment-group__total">100<div class="assessment-group__meta">people</div></div>
                                                </div>
                                            </div>
                                            
                                            <div class="assessment-group assessment-group--student-groups" data-id="1">
                                            <div class="assessment-group__box equalized box-disabled" data-equalize="assessment-group-title" style="min-height: 77px;">
                                                <div class="assessment-group__title">Clinical Support C
                                                <div class="assessment-group__title-meta"><small><strong>Last Updated:</strong> December 18, 2018</small></div>
                                                </div>
                                                <div class="assessment-group__total">2500<div class="assessment-group__meta">people</div></div>
                                                </div>
                                            </div>
                                            
                                            <div class="assessment-group assessment-group--student-groups" data-id="18">
                                            <div class="assessment-group__box equalized" data-equalize="assessment-group-title" style="min-height: 77px;">
                                                <div class="assessment-group__title">Clinical Support D
                                                <div class="assessment-group__title-meta"><small><strong>Last Updated:</strong> December 18, 2018</small></div>
                                                </div>
                                                <div class="assessment-group__total">678<div class="assessment-group__meta">people</div></div>
                                                </div>
                                            </div>
                                            
                                            <div class="assessment-group assessment-group--student-groups" data-id="9">
                                            <div class="assessment-group__box equalized" data-equalize="assessment-group-title" style="min-height: 77px;">
                                                <div class="assessment-group__title">Clinical Support E
                                                <div class="assessment-group__title-meta"><small><strong>Last Updated:</strong> December 18, 2018</small></div>
                                                </div>
                                                <div class="assessment-group__total">357<div class="assessment-group__meta">people</div></div>
                                                </div>
                                            </div>
                                            
                                            <div class="assessment-group assessment-group--student-groups" data-id="10">
                                            <div class="assessment-group__box equalized" data-equalize="assessment-group-title" style="min-height: 77px;">
                                                <div class="assessment-group__title">Clinical Support F
                                                <div class="assessment-group__title-meta"><small><strong>Last Updated:</strong> December 18, 2018</small></div>
                                                </div>
                                                <div class="assessment-group__total">12<div class="assessment-group__meta">people</div></div>
                                                </div>
                                            </div>
                                    </div><!-- /assessment-groups -->
                                    <div class="assessment-groups more-student-groups" style="display: none">
                                                <div class="assessment-group assessment-group--student-groups" data-id="4">
                                                <div class="assessment-group__box equalized box-disabled" data-equalize="assessment-group-title" style="min-height: 77px;">
                                                    <div class="assessment-group__title">Clinical Support G
                                                    <div class="assessment-group__title-meta"><small><strong>Last Updated:</strong> December 18, 2018</small></div>
                                                    </div>
                                                    <div class="assessment-group__total">12000<div class="assessment-group__meta">people</div></div>
                                                    </div>
                                                </div>
                                                
                                                <div class="assessment-group assessment-group--student-groups" data-id="5">
                                                <div class="assessment-group__box equalized" data-equalize="assessment-group-title" style="min-height: 77px;">
                                                    <div class="assessment-group__title">Clinical Support H
                                                    <div class="assessment-group__title-meta"><small><strong>Last Updated:</strong> December 18, 2018</small></div>
                                                    </div>
                                                    <div class="assessment-group__total">415<div class="assessment-group__meta">people</div></div>
                                                    </div>
                                                </div>
                                                
                                                <div class="assessment-group assessment-group--student-groups" data-id="16">
                                                <div class="assessment-group__box equalized" data-equalize="assessment-group-title" style="min-height: 77px;">
                                                    <div class="assessment-group__title">Clinical Support I
                                                    <div class="assessment-group__title-meta"><small><strong>Last Updated:</strong> December 18, 2018</small></div>
                                                    </div>
                                                    <div class="assessment-group__total">60<div class="assessment-group__meta">people</div></div>
                                                    </div>
                                                </div>
                                                
                                                <div class="assessment-group assessment-group--student-groups" data-id="12">
                                                <div class="assessment-group__box equalized" data-equalize="assessment-group-title" style="min-height: 77px;">
                                                    <div class="assessment-group__title">Clinical Support J
                                                    <div class="assessment-group__title-meta"><small><strong>Last Updated:</strong> December 18, 2018</small></div>
                                                    </div>
                                                    <div class="assessment-group__total">59<div class="assessment-group__meta">people</div></div>
                                                    </div>
                                                </div>
                                                
                                                <div class="assessment-group assessment-group--student-groups" data-id="15">
                                                <div class="assessment-group__box equalized" data-equalize="assessment-group-title" style="min-height: 77px;">
                                                    <div class="assessment-group__title">Clinical Support K
                                                    <div class="assessment-group__title-meta"><small><strong>Last Updated:</strong> December 18, 2018</small></div>
                                                    </div>
                                                    <div class="assessment-group__total">2<div class="assessment-group__meta">people</div></div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="pull-right">
                                            <a class="see-more">See More</a>
                                            <a class="see-less" style="display: none">See Less</a>
                                        </div>
                                </div><!-- /assessment-groups-assessment-grid -->
                            </section><!-- /select_student-group section -->

                            <div class="clearfix"></div>
                            <section class="section select_assessment hidden">
                                <h3 class="assessment-groups__title clearfix">Select Assessments</h3>
                                <h5>Please choose a Profession and Specialty (if applicable) then select Search to see a list of related assessments.</h5>
                                         <!--Filter Bar-->
                                         <div class="filterbar_assessments">
                                            <div class="panel-group filter-bar-flat " role="tablist" id="filterbar-panel-assessments">
                                                <div class="panel panel-default filterbar-panel">
                                                    <div class="panel-heading" role="tab">
                                                        <a role="button" data-toggle="collapse" data-parent="#filterbar-panel-assessments" href="#filterbar-panel" class=""> Assessment Filters
                                                            <div class="panel-heading-icon"> <i class="fa fa-chevron-down panel-heading-icon-closed"></i> <i class="fa fa-chevron-up panel-heading-icon-open"></i> </div>
                                                        </a>
                                                    </div>
                                                    <div id="filterbar-panel" class="panel-collapse in" role="tabpanel">
                                                        <div class="panel-body">
                                                            <div class="filter-bar-row row1" id="filter-assessment-row">
                                                                <div class="filter-item">
                                                                    <div class="form-group">
                                                                        <div class="filter-label">
                                                                            <label class="control-label">Profession:</label>
                                                                        </div>
                                                                        <div class="filter-control">
                                                                            <select class="form-control input-sm dd-filter filter-profession" id="filter-profession">
                                                                                <option hidden disabled selected value>Select Profession</option>
                                                                                <option value="Profession1">Profession One</option>
                                                                                <option value="Profession2">Profession Two</option>
                                                                                <option value="Profession3">Profession Three</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="filter-item">
                                                                    <div class="form-group">
                                                                        <div class="filter-label">
                                                                            <label class="control-label">Specialty</label>
                                                                        </div>
                                                                        <div class="filter-control">
                                                                            <select class="form-control input-sm dd-filter filter-specialty" id="filter-specialty" disabled>
                                                                                <option hidden disabled selected value>No related specialties</option>
                                                                                <!-- <option value="SpecialtyA">Specialty A</option>
                                                                                <option value="SpecialtyB">Specialty B</option>
                                                                                <option value="SpecialtyC">Specialty C</option>
                                                                                <option value="SpecialtyD">Specialty D</option>
                                                                                <option value="SpecialtyE">Specialty E</option>
                                                                                <option value="SpecialtyF">Specialty F</option> -->
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="filter-item sort-cell">
                                                                    <a class="btn btn-default btn-sm btn-reset reset-filters disabled">Reset Filters</a>
                                                                    <a class="btn btn-default btn-sm btn-search disabled">Search</a>
                                                                </div>
                                                            </div><!--/filter assessment row-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--/Filter Bar-->
                                        <div class="row">
                                                <div class="assessment-groups assessment-groups-assessment-list assessment-groups-list collapse col-lg-12">
                                                    <div class="table-responsive">
                                                        <div  id="groupedByAssessmentHeader"><small class="text-muted"></small></div>
                                                        <table class="table table-striped table-condensed table-hover dataTable" id="groupedByAssessmentListTable" >
                                                            <thead>
                                                                <tr>  
                                                                    <th class="checkable-dt checkable-dt-check-all unsortable">
                                                                        <div class="select">
                                                                            <label>
                                                                                <input id="selectAllRows" class="checkbox-check-all" type="checkbox">
                                                                                <span class="icon"></span>
                                                                            </label>
                                                                        </div>
                                                                    </th> 
                                                                    <th class="assessmentName">Assessment Name</th>
                                                                    <th class="assessmentType">Assessment Type</th>
                                                                    <th class="tbd unsortable">&nbsp;</th><!--check with Niki on what this should be-->
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr data-id="2">
                                                                    <td class="checkable-dt">
                                                                        <div class="select">
                                                                            <label>
                                                                                <input class="checkbox" type="checkbox">
                                                                                <span class="icon"></span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td>RN: Case Manager Assessment</td>
                                                                    <td>Knowledge Assessment</td>
                                                                    <td>Registered Nurse/Case Management</td>
                                                                </tr>
                                                                <tr data-id="3">                                                                    
                                                                    <td class="checkable-dt">
                                                                        <div class="select">
                                                                            <label>
                                                                                <input class="checkbox" type="checkbox">
                                                                                <span class="icon"></span>
                                                                            </label>
                                                                        </div>
                                                                    </td> 
                                                                    <td>RN: Case Manager Skills Self-Assessment</td>
                                                                    <td>Skills Self-Check</td>
                                                                    <td>Registered Nurse/Case Management</td>
                                                                </tr>
                                                                <tr data-id="1">
                                                                    <td class="checkable-dt">
                                                                        <div class="select">
                                                                            <label>
                                                                                <input class="checkbox" type="checkbox">
                                                                                <span class="icon"></span>
                                                                            </label>
                                                                        </div>
                                                                    </td> 
                                                                    <td>RN: Acute Care Judgment Assessment</td>
                                                                    <td>Behavioral Fit</td>
                                                                    <td>Registered Nurse/Case Management</td>
                                                                </tr>
                                                                <tr data-id="18">
                                                                    <td class="checkable-dt">
                                                                        <div class="select">
                                                                            <label>
                                                                                <input class="checkbox" type="checkbox">
                                                                                <span class="icon"></span>
                                                                            </label>
                                                                        </div>
                                                                    </td> 
                                                                    <td>Nursing Behavioral Assessment</td>
                                                                    <td>Judgment Assessment</td>
                                                                    <td>Registered Nurse/Case Management</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            
                            </section><!--/select-assessment section -->

                            <section class="section configure_assignments container hidden">
                                <h3 class="assessment-groups__title clearfix ">Assignment Configuration</h3>
                                <div class="row assessment-groups">
                                    <div class="col-xs-12 col-sm-6 form-group">
                                        <label class="control-label" for="#assignmentName">Assignment Name:</label>
                                        <input id="assignmentName" type="text" class="form-control" placeholder="">
                                    </div><!-- /col -->
                                    <div class="col-xs-12 col-sm-3">
                                    <label class="control-label">Due Date:</label>
                                        <input type="text" class="form-control one-month" placeholder="Jan 31, 2018" readonly> <!--calculate 30 days from today in whatever form needed for assignment -->
                                    </div>
                                </div>

                                <div class="assessment-groups assessment-groups-assessment-grid col-lg-12">
                                <label for="reassign-config" class="control-label">Plan Re-assignments Rules:</label>
                                    <div class="assessment-groups">
                                        <div class="assessment-group assessment-group--config" >
                                            <div class="assessment-group__box equalized assessment-group__config-meta" data-equalize="assessment-group-title">
                                                    <label class="config-method assessment-config__label">
                                                        <input type="radio" name="reassign-config" id="assessment-group-config_new-assign" class="form-radio">
                                                            <div>Only assign to employees who have not completed the selected assignment(s).</div>
                                                    </label>
                                            </div>
                                        </div>
                                        <div class="assessment-group assessment-group--config">
                                        <div class="assessment-group__box equalized assessment-group__config-meta" data-equalize="assessment-group-title">
                                                    <label class="config-method assessment-config__label">
                                                        <input type="radio" name="reassign-config" id="assessment-group-config_re-assign" class="form-radio">
                                                            <div>Assign to all employees and re-assign if assessment was previously completed.</div>
                                                    </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>   

                            </section>
                            <?php
                                    $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'position' => 'left',
                                            'html' => '
                                            <a href="#" class="btn btn-success submit_bulk-assign hidden">Assign Assessments</a>
                                            <a class="btn btn-default reset-all hidden">Reset All</a>'
                                            )
                                        )
                                    );
                                    echo createStickybar($stickybar);
                                    ?>
                          
                        </section><!-- / section section-main section-box -->
                    </div><!--/container-->
                </div><!-- /layout -->

                        <!-- <input type="hidden" id="numberOfActionItems" value="<?= $numberOfActionItems ?>" />
                        <input type="hidden" id="numberOfAssessments" value="<?= $numberOfAssessments ?>" />
                        <input type="hidden" id="clickGroup" value="<?= $click ?>" /> -->
                        <?= createFooter($patterns['footer']); ?>
                            <?= createPrototypeNav(); ?>
                                <?= createSiteScripts(); ?>
                                    <script src="/scripts/healthstream.utilities.applauncher.js"></script>
                                    <script src="/scripts/modernizr.js"></script>
                                    <script src="/scripts/dataTables.js"></script>
                                    <script src="http://hstm-platform.patternmanager.com/scripts/dataTables.rowReorder.min.js"></script>
                                    <script src="/scripts/prototype.datatables.js"></script>
                                    <script>
                                        (function(window, $) {
                                          'use strict';
                                          window.HealthStream = window.HealthStream || {};
                                          var healthStream = window.HealthStream;
                                          healthStream.studentSearchResults = {};
                                          healthStream.studentSearchResults.resultsDataTable = function() {
                                            var assessmentTable = $('#groupedByAssessmentListTable').DataTable({
                                                  "paging": true,
                                                  "order": [
                                                    [1, "asc"]
                                                  ],
                                                  "dom": 'ft<"bottom"rlip>',
                                                  "columnDefs": [{
                                                    "visible": false,
                                                    "targets": "hideOnLoad",
                                                  }, {
                                                    "orderable": false,
                                                    "targets": "unsortable"
                                                  }],
                                                  language: {
                                                    search: "_INPUT_",
                                                    searchPlaceholder: "Quick Search"
                                                  },
                                                  "pageLength": 25
                                            });

                                            expandMobileRow();
                                            generateDynamicDataTitles();
                                            customizeColumns(assessmentTable);
                                            selectRowsOnClick(assessmentTable);
                                            selectRowOnCheckboxChange(assessmentTable);
                                            keepDropDownMenuOpen();
                                            updateTableHeaderCounts();

                                            $('.checkbox-check-all').change(function() {
                                            var $checkbox = $(this);
                                                if ($checkbox.prop('checked')) {
                                                    selectAll(assessmentTable);
                                                } else {
                                                    deselectAll(assessmentTable);
                                                }
                                            updateSelected(assessmentTable);
                                            });

                                            //place default info into Results header
                                            function updateTableHeaderCounts() {
                                              $(".dataTables_info").hide();
                                              $('#groupedByAssessmentHeader small').html($("#groupedByAssessmentListTable_info").html());
                                              $('#groupedByAssessmentListTable_filter input').prop('placeholder','Quick Search');
                                            }
                                            //reinitialize jquery when table is redrawn (pagination)
                                            $(".dataTable").on('draw.dt', function() {
                                              expandMobileRow();
                                              generateDynamicDataTitles();
                                              updateTableHeaderCounts();
                                            });

                                            };
                                          $(window).on('load', function() {
                                            healthStream.studentSearchResults.resultsDataTable();
                                            HealthStream.utilities.applauncher();
                                          });
                                        }(window, jQuery));
                                    </script>

                                    <script>
                                        // add active class to selected assignment method and show reset button and next section
                                        $('#assessment-group-method_student-group').click(function(){
                                            $(this).parent().find('.assessment-group__box').toggleClass('active');
                                            $('.stickybar, .select_student-group, .reset-all').removeClass('hidden');
                                        });

                                        // select student group for the affiliation admin version
                                        $('.filter-institution').change(function(){
                                            $(this).parents().find('.filter-dept, .filter-type').prop('disabled', false);
                                            $('.filterbar_affiliation-admin').find('a.btn').removeClass('disabled');
                                            $('.filterbar_affiliation-admin').find('.btn-search').addClass('btn-success').removeClass('btn-default');
                                        })

                                        // reset filters for student group -  affiliation admin
                                        function resetStudentAff(){
                                            $('.select_student-group .btn-reset').click(function(){
                                                $(this).siblings().addBack().addClass('disabled');
                                                resetAssessments();
                                                $('.assessment-group--student-groups').children().removeClass('active');
                                                $('.select_assessment, .assessment-student-groups-grid').addClass('hidden');
                                                $('.btn-search').removeClass('btn-success').addClass('btn-default');
                                                if($('.filterbar_affiliation-admin').not('.hidden')){
                                                    $('.select_student-group select').find('option:contains("Select")').prop('selected', true).addBack().not('.filter-institution').prop('disabled', true);
                                                }else{
                                                    $('.select_student-group select').not('.filter-institution').find('option:contains("Select")').prop('selected', true).addBack().not('.filter-dept').prop('disabled', true);
                                                }
                                            });
                                        }
                                        resetStudentAff();

                                        // search student group for affiliation admin
                                        $('.filterbar_affiliation-admin').find('a.btn-search').click(function(){
                                            $('.assessment-student-groups-grid').removeClass('hidden');
                                        });


                                                // for the DEPARTMENT admin version (institution locked down)
                                                $('.filterbar_dept-admin').find('select.filter-dept').change(function(){
                                                    $('.filterbar_dept-admin').find('select.filter-type').prop('disabled', false);
                                                    $('.filterbar_dept-admin').find('a.btn').removeClass('disabled');
                                                    $('.filterbar_dept-admin').find('.btn-search').addClass('btn-success').removeClass('btn-default');
                                                });

                                                $('.filterbar_dept-admin').find('a.btn-search').click(function(){
                                                    $('.assessment-student-groups-grid').removeClass('hidden');
                                                });
                                                /// end dept admin version

                                        // Select student group section 
                                        $('.select_student-group').find('.assessment-group__box').click(function(){
                                            $(this).toggleClass('active');
                                            $('.select_assessment').removeClass('hidden');
                                        })

                                        $('.see-more').click(function(){
                                            $(this).hide();
                                            $('.more-student-groups').show();
                                            $('.see-less').show();
                                        });

                                        $('.see-less').click(function(){
                                            $(this).hide();
                                            $('.more-student-groups').hide();
                                            $('.see-more').show();
                                        });

                                        $('.box-disabled').parent().css('cursor', 'not-allowed');

                                        $('.select2').select2();


                                        // select assessments section 
                                        $('.filterbar_assessments').find('select.filter-profession').change(function(){
                                            $('.filterbar_assessments').find('a.btn').removeClass('disabled');
                                            $('.filterbar_assessments').find('.btn-search').addClass('btn-success').removeClass('btn-default');
                                        })
            
                                        $('.select_assessment').find('.btn-search').click(function() {
                                            $('.assessment-groups-assessment-list').show();
                                        });

                                        // reset filters for assessments
                                        $('.filterbar_assessments').find('a.btn-reset').click(function(){
                                           resetAssessments(); 
                                        });

                                        function resetAssessments(){
                                            resetConfig();
                                            $('#groupedByAssessmentListTable .selected').removeClass('selected');
                                            $('#groupedByAssessmentListTable_filter').find('input').val('');
                                            $('select.filter-specialty').prop('disabled', true);
                                            $('.filterbar_assessments').find('a.btn').addClass('disabled');
                                            $('.filterbar_assessments').find('.btn-search').removeClass('btn-success').addClass('btn-default');
                                            $('.filterbar_assessments').find('select option:contains("Select")').prop('selected', true);
                                            $('.assessment-groups-assessment-list').hide();
                                        }

                                        $('#groupedByAssessmentListTable').on('click', function(){
                                            $('.configure_assignments').removeClass('hidden');
                                        });

                                        function resetConfig(){
                                            $('.assessment-group__config-meta').removeClass('active');
                                            $('#assignmentName').val('');
                                            $('.configure_assignments').addClass('hidden');
                                        }


                                        // Assessment configuration - select radio to add active class
                                        $('input[name="reassign-config"]').click(function(event){
                                            $(event.target).parentsUntil('.assessment-groups').find('.assessment-group__config-meta').addClass('active');
                                            $('input[name="reassign-config"]').not(':checked').parentsUntil('.assessment-groups').find('.assessment-group__config-meta').removeClass('active');
                                            $('.submit_bulk-assign').removeClass('hidden');
                                        });

                                          // Reset entire form
                                          $('.reset-all').on('click', function(){
                                            $('.section-main .active, .selected').removeClass('active selected');
                                            resetConfig();
                                            resetAssessments();
                                            resetStudentAff();
                                            $('.configure_assignments, .select_assessment, .select_student-group, .reset-all, .submit_bulk-assign').addClass('hidden');                                
                                        });

                                        $('.submit_bulk-assign').click(function() {
                                            HealthStream.utilities.interrupt({
                                                type: 'warning',
                                                title: 'Assign Assessments to <# of users> Employees',
                                                text: 'Selecting Confirm Assignment will assign the selected assessments to <# of users> employees. Select Cancel to go back and make changes. This assignment request could take up to 24 hours to complete.',
                                                actions: [{
                                                    type: 'success',
                                                    label: 'Confirm Assignment',
                                                    url: '/admin-assessment-results-search.php'
                                                },
                                                {
                                                    label: 'Cancel'
                                                }]
                                            })
                                        });

                                        $(document).ready(function(){
                                            $('.stickybar').addClass('hidden');
                                        })

                                    </script>
                                    <?= createSiteEnd(); ?>
