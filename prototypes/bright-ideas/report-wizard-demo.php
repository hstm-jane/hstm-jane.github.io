<?php


include 'includes/helpers.php';

$options = json_decode('{
    "head": {
        "title" : "Report Configurations"
    },
    "header": {
        "nav_up" : "true",
        "nav_main_active" : "reports"
    },
    "focus": {
        "title": "Report Configurations",
        "icon": "hs-icons-assessment",
        "type": "Reports",
        "meta": [

        ]

    }
}',true);

include_site_start($options);
//include_site_header($options);
$patterns['header']['mainNavActive'] = 'reports';
echo createHeader($patterns['header']);
include_renewed_focus_bar($options);
?>
    <style>
    nav.catalog-categories .cc-col {
        display: table-cell;
        padding: 10px 10px;
        border-left: 3px solid transparent;
    }

    nav.catalog-categories .cc-col:hover,
    nav.catalog-categories .cc-col:active {
        border-left: 3px solid #2AAAD5;
    }

    nav.catalog-categories .cc-col.cc-col-icon:hover,
    nav.catalog-categories .cc-col.cc-col-icon:active {
        border-left: none;
    }

    li.active .cc-col {
        border-left: 3px solid #2AAAD5;
    }

    li.active .cc-col.cc-col-icon {
        border-left: none;
        color: #868686;
    }

    .nav-tabs>li>a {
        background-color: #FFFFFF;
        border-color: #ddd;
    }

    a:active,
    a:hover {
        outline: 0;
    }

    .nav-tabs>li.report-item.active>a,
    .nav-tabs>li.report-item.active>a:focus,
    .nav-tabs>li.report-item.active>a:hover {
        color: #808080;
        background-color: #F3F3F3;
        border: 2px solid #ddd;
        border-bottom-color: transparent;
        cursor: default;
    }

    nav.catalog-categories li.active:last-child {
        border-bottom: 1px solid #ddd;
    }

    .nav>li.report-item>a:focus,
    .nav>li.report-item>a:hover {
        text-decoration: none;
        background-color: transparent;
    }

    .tab-content-rating {
        /* border-left: 2px solid #ddd;*/
        padding-top: 10px;
        padding-left: 20px;
        padding-bottom: 5px;
    }

    .nav>li>a {
        padding: 2px 3px;
    }

    .nav-tabs.nav-justified>.active>a,
    .nav-tabs.nav-justified>.active>a:focus,
    .nav-tabs.nav-justified>.active>a:hover {
        /*border-top: 5px solid #E2E2E2;*/
        border-right-color: transparent;
    }

    .nav-tabs.nav-justified>li>a {
        margin-bottom: 0;
        border-bottom: 1px solid #ddd;
        border-radius: 10px 10px 0 0;
    }

    .nav-activity {
        margin-bottom: 0px !important;
    }

    .report-list {
        display: none;
    }

    .modal .section-refinement-group+.section-refinement-group,
    .stickybar {
        border-top: 1px solid #fff;
    }

    .options-text {
        font-weight: 600;
        font-size: 14px;
    }
    </style>
    <div class="layout layout-assessment">
        <div class="container">
            <section class="section section-main section-box">

                <?php

                    $focusNav = array(
                        'tabs' => array(
                            array(
                                'active' => true,
                                'id' => 'tab-recent',
                                'label' => 'Recent',
                            ),
                            array(
                                'id' => 'tab-popular',
                                'label' => 'Popular',
                            ),
                            array(
                                'id' => 'tab-fav',
                                'label' => 'Favorites',
                            ),
                            array(
                                'id' => 'tab-types',
                                'label' => 'Types',
                            ),
                            array(
                                'id' => 'tab-all',
                                'label' => 'All',
                            ),
                        ),
                    );
                    echo createFocusNav($focusNav);

                ?>

                <div class="row">
                    <div class="col-md-4">
                        <section class="section" data-equalize="layout-columns">
                            <div class="tab-content">
                                <div class="tab-pane fade in" id="tab-types">
                                    <section class="section">
                                        <div class="form-group">
                                            <label>Choose Report Type
                                                <span class="pull-right">
                                                    <a href="#modal-legend" class="more" data-toggle="modal"><i class="fa fa-cog"></i></a>
                                                    <a href="#modal-report-list" class="more" data-toggle="modal">options</a>
                                                </span>
                                            </label>
                                            <select class="form-control report-type">
                                                <option selected="selected" value="">--- Please Select A Report Type ---</option>
                                                <option value="detailed-reports">Detailed Reports</option>
                                                <option value="composite-reports">Composite Reports</option>
                                                <!-- <option value="composite-reports">My Favorite Reports</option> -->
                                            </select>
                                        </div>
                                    </section>
                                </div>
                                <div class="tab-pane fade in active" id="tab-recent">
                                    <nav class="catalog-categories">
                                        <h3>Recent Reports:
                                            <span class="pull-right options-text">
                                                <a href="#modal-legend" class="more" data-toggle="modal"><i class="fa fa-cog"></i></a>
                                                <a href="#modal-report-list" class="more" data-toggle="modal">options</a>
                                            </span>
                                        </h3>
                                        <div class="limit-height" style="height: 200px;">
                                            <ul class="nav nav-tabs">
                                                <li class="report-item">
                                                    <a href="#oibo" data-toggle="tab">
                                                        <div class="cc-col">Overdue Ideas by Officer</div>
                                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                    </a>
                                                </li>
                                                <li class="report-item">
                                                    <a href="#oibd" data-toggle="tab">
                                                        <div class="cc-col">Overdue Ideas by Dept</div>
                                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                    </a>
                                                </li>
                                                <li class="report-item">
                                                    <a href="#bibr" data-toggle="tab">
                                                        <div class="cc-col">BI Benefits Report</div>
                                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                    </a>
                                                </li>
                                                <li class="report-item">
                                                    <a href="#noibd" data-toggle="tab">
                                                        <div class="cc-col">Number of Ideas by Dept</div>
                                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- </div> -->
                                    </nav>
                                </div>
                                <div class="tab-pane fade in" id="tab-popular">
                                    <nav class="catalog-categories">
                                        <h3>Popular Reports:
                                            <span class="pull-right options-text">
                                                <a href="#modal-legend" class="more" data-toggle="modal"><i class="fa fa-cog"></i></a>
                                                <a href="#modal-report-list" class="more" data-toggle="modal">options</a>
                                            </span>
                                        </h3>
                                        <div class="limit-height" style="height: 200px;">
                                            <ul class="nav nav-tabs">
                                                <li class="report-item">
                                                    <a href="#oibo" data-toggle="tab">
                                                        <div class="cc-col">Overdue Ideas by Officer</div>
                                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                    </a>
                                                </li>
                                                <li class="report-item">
                                                    <a href="#oibd" data-toggle="tab">
                                                        <div class="cc-col">Overdue Ideas by Dept</div>
                                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                    </a>
                                                </li>
                                                <li class="report-item">
                                                    <a href="#bibr" data-toggle="tab">
                                                        <div class="cc-col">BI Benefits Report</div>
                                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                    </a>
                                                </li>
                                                <li class="report-item">
                                                    <a href="#noibd" data-toggle="tab">
                                                        <div class="cc-col">Number of Ideas by Dept</div>
                                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- </div> -->
                                    </nav>
                                </div>
                                <div class="tab-pane fade in" id="tab-fav">
                                    <nav class="catalog-categories">
                                        <h3>Favorite Reports:
                                            <span class="pull-right options-text">
                                                <a href="#modal-legend" class="more" data-toggle="modal"><i class="fa fa-cog"></i></a>
                                                <a href="#modal-report-list" class="more" data-toggle="modal">options</a>
                                            </span>
                                        </h3>
                                        <div class="limit-height" style="height: 200px;">
                                            <ul class="nav nav-tabs">
                                                <li class="report-item">
                                                    <a href="#oibo" data-toggle="tab">
                                                        <div class="cc-col">Overdue Ideas by Officer</div>
                                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                    </a>
                                                </li>
                                                <li class="report-item">
                                                    <a href="#oibd" data-toggle="tab">
                                                        <div class="cc-col">Overdue Ideas by Dept</div>
                                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                    </a>
                                                </li>
                                                <li class="report-item">
                                                    <a href="#bibr" data-toggle="tab">
                                                        <div class="cc-col">BI Benefits Report</div>
                                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                    </a>
                                                </li>
                                                <li class="report-item">
                                                    <a href="#noibd" data-toggle="tab">
                                                        <div class="cc-col">Number of Ideas by Dept</div>
                                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- </div> -->
                                    </nav>
                                </div>
                                <div class="tab-pane fade in" id="tab-two-all">
                                    <section class="section dotted">
                                        <div class="form-group">
                                            <label class="control-label " for="text2">
                                                Search All Reports
                                                <span class="pull-right options-text">
                                                    <a href="#modal-legend" class="more" data-toggle="modal"><i class="fa fa-cog"></i></a>
                                                    <a href="#modal-report-list" class="more" data-toggle="modal">options</a>
                                                </span>
                                            </label>
                                            <select class="form-control slat-basic" id="slat-basic" data-placeholder="Search Reports...">
                                                <option></option>
                                                <?php $i = 1; while ( $i <= 100) { ?>
                                                    <option data-dept="Report Group" data-userid="user<?= $i ?>" value="Report <?= $i ?>">Report Name
                                                        <?= $i ?>
                                                    </option>
                                                    <?php $i++; } ?>
                                            </select>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <section class="section section-refinement-group">
                                <nav class="catalog-categories report-list detailed-reports">
                                    <h3>Detailed Reports</h3>
                                    <div class="limit-height" style="height: 120px;">
                                        <ul class="nav nav-tabs">
                                            <li class="report-item">
                                                <a class="" href="#si" data-toggle="tab">
                                                    <div class="cc-col">Submitted Ideas</div>
                                                    <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                </a>
                                            </li>
                                            <li class="report-item">
                                                <a class="" href="#ici" data-toggle="tab">
                                                    <div class="cc-col">Implemented/Closed Ideas</div>
                                                    <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- </div> -->
                                </nav>
                                <nav class="catalog-categories report-list composite-reports">
                                    <h3>Composite Reports</h3>
                                    <div class="limit-height" style="height: 200px;">
                                        <ul class="nav nav-tabs">
                                            <li class="report-item">
                                                <a href="#oibo" data-toggle="tab">
                                                    <div class="cc-col">Overdue Ideas by Officer</div>
                                                    <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                </a>
                                            </li>
                                            <li class="report-item">
                                                <a href="#oibd" data-toggle="tab">
                                                    <div class="cc-col">Overdue Ideas by Dept</div>
                                                    <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                </a>
                                            </li>
                                            <li class="report-item">
                                                <a href="#bibr" data-toggle="tab">
                                                    <div class="cc-col">BI Benefits Report</div>
                                                    <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                </a>
                                            </li>
                                            <li class="report-item">
                                                <a href="#noibd" data-toggle="tab">
                                                    <div class="cc-col">Number of Ideas by Dept</div>
                                                    <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- </div> -->
                                </nav>
                            </section>
                            </form>
                        </section>
                    </div>
                    <!-- /column -->
                    <div class="col-md-8">
                        <section class="section">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#di" data-toggle="tab"> </a>
                                </li>
                            </ul>
                            <div class="tab-content tab-content-rating" data-equalize="layout-columns">
                                <div class="tab-pane fade in active" id="di">
                                    <section class="section">
                                        <div class="supporting">
                                            <h2>You have not selected a report:
                                                <hr>
                                                <small> Please choose a report by using the dropdown in the left column</small></h2>
                                        </div>
                                    </section>
                                </div>
                                <div class="tab-pane fade in" id="tab-all">
                                    <table class="occ brdr">
                                        <tbody>
                                            <tr>
                                                <td colspan="3">
                                                    <div id="validationSummary" class="vale" style="display:none;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="vlst" valign="top">
                                                    <h3 id="H33">Request Manager</h3>
                                                    <ul id="Ul3" class="ts">
                                                        <li id="rmli">
                                                            <a href="/HLC/Admin/Reports/RequestManager.aspx">Manage Requests
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h3 id="ph3">People Reports</h3>
                                                    <ul id="prul" class="ts">
                                                        <li id="discli">
                                                            <a id="lnkbtnDiscipline" href="javascript:__doPostBack('lnkbtnDiscipline','')">Discipline Listing</a>
                                                        </li>
                                                        <li id="expcertli">
                                                            <a href="#ExpiringCertification&amp;d=DW">Expiring Certification</a>
                                                        </li>
                                                        <li id="prelli">
                                                            <a href="#ExpiringLicense&amp;d=DW">Expiring License</a>
                                                        </li>
                                                        <li id="irLi">
                                                            <a href="#InstructorResume&amp;d=HLC">Instructor Resume</a>
                                                        </li>
                                                        <li id="rfli">
                                                            <a href="#RoleFeatures&amp;d=HLC">Role Features</a>
                                                        </li>
                                                        <li id="ruli">
                                                            <a href="#RoleUtilization&amp;d=HLC">Role Utilization</a>
                                                        </li>
                                                        <li id="stavli">
                                                            <a href="#StudentTranscript&amp;d=HLC">Student and Group Transcript</a>
                                                        </li>
                                                        <li id="dwsasco">
                                                            <a href="#StudentAssignmentCompletion2&amp;d=DW">Student Assignment Completion</a>
                                                        </li>
                                                        <li id="scirli">
                                                            <a href="#StudentCertificationImportResults&amp;d=HLC">Student Certification Import Results</a>
                                                        </li>
                                                        <li id="sgli">
                                                            <a href="#StudentGroupListing2&amp;d=HLC">Student Group</a>
                                                        </li>
                                                        <li id="slli">
                                                            <a href="#StudentListing2&amp;d=HLC">Student Listing</a>
                                                        </li>
                                                    </ul>
                                                    <h3 id="cs3">Course Reports</h3>
                                                    <ul id="csul" class="ts">
                                                        <li id="A1">
                                                            <a href="#Annotation&amp;d=HLC">Annotations</a>
                                                        </li>
                                                        <li id="ccc">
                                                            <a href="#CECreditCourses&amp;d=HLC">CE Credit Courses</a>
                                                        </li>
                                                        <li id="cdsli">
                                                            <a href="#CourseDevelopmentStatus&amp;d=HLC">Course Development Status</a>
                                                        </li>
                                                        <li id="cLi">
                                                            <a href="#courselisting&amp;d=HLC">Course Listing</a>
                                                        </li>
                                                        <li id="esli">
                                                            <a href="#EvaluationStructure&amp;d=HLC">Evaluation Structure</a>
                                                        </li>
                                                        <li id="excLi">
                                                            <a href="#Expiringcourses&amp;d=HLC">Expiring Courses</a>
                                                        </li>
                                                        <li id="tsli">
                                                            <a href="#TestStructure&amp;d=HLC">Test Structure</a>
                                                        </li>
                                                    </ul>
                                                    <h3 id="hdSimulationReports">Simulation Reports
                                                    </h3>
                                                    <ul id="ulSimulationReports" class="ts">
                                                        <li id="liSimulationAssignmentCompletion">
                                                            <a href="#AssignmentCompletion2&amp;d=DW">Assignment Completion - Schedulable
                                                            </a>
                                                        </li>
                                                        <li id="liSimulationAssignmentCompletionDrillThrough">
                                                            <a href="#AssignmentCompletionDrillDown2&amp;d=DW">Assignment Completion - Drill-Through
                                                            </a>
                                                        </li>
                                                        <li id="liSimulationEnterpriseAssignemntDrillThrough">
                                                            <a href="#EnterpriseAssignmentCompletion&amp;d=DW">Enterprise Assignment Drill-through
                                                            </a>
                                                        </li>
                                                        <li id="liSimulationDailyEvent">
                                                            <a href="#DailyEvent&amp;d=HLC">Simulation Daily Events
                                                            </a>
                                                        </li>
                                                        <li id="liSimulationEventCompletion">
                                                            <a id="lbSimulationEventCompletion" href="javascript:__doPostBack('lbSimulationEventCompletion','')">Simulation Event Completion</a>
                                                        </li>
                                                        <li id="liSimulationPersonnelUtilization">
                                                            <a id="lbSimulationPersonnelUtilization" href="javascript:__doPostBack('lbSimulationPersonnelUtilization','')">Personnel Utilization</a>
                                                        </li>
                                                        <li id="liSimulationResourceUtilization">
                                                            <a id="lbSimulationResourceUtilization" href="javascript:__doPostBack('lbSimulationResourceUtilization','')">Simulation Resource Utilization</a>
                                                        </li>
                                                        <li id="liSimulationStudentHoursEncounters">
                                                            <a id="lbSimulationStudentHoursEncounters" href="javascript:__doPostBack('lbSimulationStudentHoursEncounters','')">Student Hours and Encounters</a>
                                                        </li>
                                                        <li id="liCenterResourceUtilization">
                                                            <a id="lbCenterResourceUtilization" href="javascript:__doPostBack('lbCenterResourceUtilization','')">Center Resource Utilization</a>
                                                        </li>
                                                        <li id="liSimulationResourceUtilizationByEvent">
                                                            <a id="lbSimulationResourceUtilizationByEvent" href="javascript:__doPostBack('lbSimulationResourceUtilizationByEvent','')">Resource Utilization By Event</a>
                                                        </li>
                                                        <li id="liGradedActivities">
                                                            <a id="lbGradedActivities" href="javascript:__doPostBack('lbGradedActivities','')">Graded Activities</a>
                                                        </li>
                                                        <li id="liSimulationEventRegistrationStatus">
                                                            <a id="lbSimulationEventRegistrationStatus" href="javascript:__doPostBack('lbSimulationEventRegistrationStatus','')">Simulation Event Registration Status</a>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="vlst" valign="top">
                                                    <ul id="Ul2" class="ts">
                                                    </ul>
                                                    <h3 id="eh3">Education Reports</h3>
                                                    <ul id="eul" class="ts">
                                                        <li id="dwascodd">
                                                            <a href="#AssignmentCompletionDrillDown2&amp;d=DW">Assignment Completion - Drill-Through</a>
                                                        </li>
                                                        <li id="dwasco">
                                                            <a href="#AssignmentCompletion2&amp;d=DW">Assignment Completion - Schedulable</a>
                                                        </li>
                                                        <li id="ccli">
                                                            <a href="#ClassContacts&amp;d=HLC">Class Contacts</a>
                                                        </li>
                                                        <li id="cgsba">
                                                            <a href="#ClassGradingStatusByAdministrator&amp;d=HLC">Class Grading Status by Administrator</a>
                                                        </li>
                                                        <li id="cgsbc">
                                                            <a href="#ClassGradingStatusByCourse&amp;d=HLC">Class Grading Status by Course</a>
                                                        </li>
                                                        <li id="crs">
                                                            <a href="#ClassRegistrationStatus&amp;d=HLC">Class Registration Status</a>
                                                        </li>
                                                        <li id="csli">
                                                            <a href="#ClassSignInAndRoster&amp;d=HLC">Class Roster and Sign-In Sheet</a>
                                                        </li>
                                                        <li id="dwde">
                                                            <a href="#DataExport&amp;d=DW">Completion Data Export</a>
                                                        </li>
                                                        <li id="dwCA">
                                                            <a href="#CourseActivity&amp;d=DW">Course Activity</a>
                                                        </li>
                                                        <li id="Li1">
                                                            <a href="#CourseCertificate&amp;d=HLC">Course Certificates</a>
                                                        </li>
                                                        <li id="dwcocodd">
                                                            <a href="#CourseCompletionDrillDown&amp;d=DW">Course Completion - Drill-Through</a>
                                                        </li>
                                                        <li id="dwcoco">
                                                            <a href="#CourseCompletion2&amp;d=DW">Course Completion - Schedulable</a>
                                                        </li>
                                                        <li id="dwdelindd">
                                                            <a href="#DelinquencyDrillDown&amp;d=DW">Delinquent/Past Due - Drill-Through</a>
                                                        </li>
                                                        <li id="dwdelin">
                                                            <a href="#Delinquency2&amp;d=DW">Delinquent/Past Due - Schedulable</a>
                                                        </li>
                                                        <li id="dweacomp">
                                                            <a href="#EnterpriseAssignmentCompletion&amp;d=DW">Enterprise Assignment Completion</a>
                                                        </li>
                                                        <li id="dwECA">
                                                            <a href="#EnterpriseCourseActivity&amp;d=DW">Enterprise Course Activity</a>
                                                        </li>
                                                        <li id="dweccomp">
                                                            <a href="#EnterpriseCourseCompletion&amp;d=DW">Enterprise Course Completion</a>
                                                        </li>
                                                        <li id="dwesi2">
                                                            <a href="#EvaluationScores2&amp;d=DW">Evaluation Scores by Course</a>
                                                        </li>
                                                        <li id="EntCPr">
                                                            <a href="#EnterpriseProgress&amp;d=DW">Enterprise Learning Progress</a>
                                                        </li>
                                                        <li id="dwfail">
                                                            <a href="#Failure&amp;d=DW">Failed Courses</a>
                                                        </li>
                                                        <li id="icsli">
                                                            <a href="#InstructorClassSchedule&amp;d=HLC">Instructor Class Schedule</a>
                                                        </li>
                                                        <li id="cPr">
                                                            <a href="#Progress&amp;d=DW">Learning Progress</a>
                                                        </li>
                                                        <li id="nsli">
                                                            <a href="#NoShow&amp;d=HLC">No-Show</a>
                                                        </li>
                                                        <li id="dwtqa2">
                                                            <a href="#TQA2&amp;d=DW">Test Question Analysis</a>
                                                        </li>
                                                        <li id="dwtcc">
                                                            <a href="#TopCourseCompletes&amp;d=DW">Top 10 Completions</a>
                                                        </li>
                                                        <li id="thsi">
                                                            <a href="#TrainingHoursSummary&amp;d=DW">Training Hours Summary </a>
                                                        </li>
                                                        <li id="upcli">
                                                            <a href="#UpcomingClass&amp;d=HLC">Upcoming Classes</a>
                                                        </li>
                                                    </ul>
                                                    <h3 id="th3">Tools Reports</h3>
                                                    <ul id="tul" class="ts">
                                                        <li id="dbsli">
                                                            <a href="#DailyBuildingSchedule&amp;d=HLC">Daily Building Schedule</a>
                                                        </li>
                                                        <li id="drsli">
                                                            <a href="#DailyRoomSchedule&amp;d=HLC">Daily Room Schedule</a>
                                                        </li>
                                                        <li id="dlli">
                                                            <a href="#DepartmentListing&amp;d=HLC">Department Listing</a>
                                                        </li>
                                                        <li id="duli">
                                                            <a href="#DepartmentUtilization&amp;d=HLC">Department Utilization</a>
                                                        </li>
                                                        <li id="jtlli">
                                                            <a href="#JobTitleListing&amp;d=HLC">Job Title Listing</a>
                                                        </li>
                                                        <li id="jtuli">
                                                            <a href="#JobTitleUtilization&amp;d=HLC">Job Title Utilization</a>
                                                        </li>
                                                        <li id="ohli">
                                                            <a id="btnOrgHierarchy" href="javascript:__doPostBack('btnOrgHierarchy','')">Organization Hierarchy</a>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="vlst" valign="top">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade in" id="si">
                                    <section class="section">
                                        <div class="supporting">
                                            <h2>Specify Report Criteria: <small> Submitted Ideas</small></h2>
                                            <hr>
                                        </div>
                                    </section>
                                    <section class="section search-filters">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label " for="select">
                                                        Idea Type
                                                    </label>
                                                    <select class="select form-control" id="select" name="select">
                                                        <option value="First Choice">
                                                            First Choice
                                                        </option>
                                                        <option value="Second Choice">
                                                            Second Choice
                                                        </option>
                                                        <option value="Third Choice">
                                                            Third Choice
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label " for="select1">
                                                        Submitter Facility
                                                    </label>
                                                    <select class="select form-control" id="select1" name="select1">
                                                        <option value="First Choice">
                                                            First Choice
                                                        </option>
                                                        <option value="Second Choice">
                                                            Second Choice
                                                        </option>
                                                        <option value="Third Choice">
                                                            Third Choice
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label " for="select2">
                                                        Responsible Facility
                                                    </label>
                                                    <select class="select form-control" id="select2" name="select2">
                                                        <option value="First Choice">
                                                            First Choice
                                                        </option>
                                                        <option value="Second Choice">
                                                            Second Choice
                                                        </option>
                                                        <option value="Third Choice">
                                                            Third Choice
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label " for="select3">
                                                        Responsible Officer
                                                    </label>
                                                    <select class="select form-control" id="select3" name="select3">
                                                        <option value="First Choice">
                                                            All
                                                        </option>
                                                        <option value="Second Choice">
                                                            New
                                                        </option>
                                                        <option value="Third Choice">
                                                            Open
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="hire-from-date">From Date </label>
                                                    <div class="input-group date datepicker" id="hire-from-date">
                                                        <input type="text" class="form-control" value="10/20/2015">
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-md-offset-2">
                                                <div class="form-group">
                                                    <label for="hire-through-date">Through Date </label>
                                                    <div class="input-group date datepicker" id="hire-through-date">
                                                        <input type="text" class="form-control" value="10/20/2015">
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!-- /tab-pane -->
                                <div class="tab-pane fade in" id="ici">
                                    <section class="section">
                                        <div class="supporting">
                                            <h2>Specify Report Criteria: <small> Implemented/Closed Ideas</small></h2>
                                            <hr>
                                        </div>
                                    </section>
                                    <section class="section search-filters">
                                        <div class="row">
                                            <!-- content goes here -->
                                        </div>
                                    </section>
                                </div>
                                <!-- /tab-pane -->
                                <div class="tab-pane fade in" id="oibo">
                                    <section class="section">
                                        <div class="supporting">
                                            <h2>Specify Report Criteria: <small> Overdue Ideas by Officer</small></h2>
                                            <hr>
                                        </div>
                                    </section>
                                    <section class="section search-filters">
                                        <div class="row">
                                            <!-- content goes here -->
                                        </div>
                                    </section>
                                </div>
                                <!-- /tab-pane -->
                                <div class="tab-pane fade in" id="oibd">
                                    <section class="section">
                                        <div class="supporting">
                                            <h2>Specify Report Criteria: <small> Overdue Ideas by Dept.</small></h2>
                                            <hr>
                                        </div>
                                    </section>
                                    <section class="section search-filters">
                                        <div class="row">
                                            <!-- content goes here -->
                                        </div>
                                    </section>
                                </div>
                                <!-- /tab-pane -->
                                <div class="tab-pane fade in" id="bibr">
                                    <section class="section">
                                        <div class="supporting">
                                            <h2>Specify Report Criteria: <small> BI Benefits Report</small></h2>
                                            <hr>
                                        </div>
                                    </section>
                                    <section class="section search-filters">
                                        <div class="row">
                                            <!-- content goes here -->
                                        </div>
                                    </section>
                                </div>
                                <!-- /tab-pane -->
                                <div class="tab-pane fade in" id="noibd">
                                    <section class="section">
                                        <div class="supporting">
                                            <h2>Specify Report Criteria: <small> Number of Ideas by Dept.</small></h2>
                                            <hr>
                                        </div>
                                    </section>
                                    <section class="section search-filters">
                                        <div class="row">
                                            <!-- content goes here -->
                                        </div>
                                    </section>
                                </div>
                                <!-- /tab-pane -->
                            </div>
                            <!-- /tab-content -->

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '
                                                <a href="assessment.php" class="btn btn-success" data-toggle="modal">Run Report</a>
                                                <a href="assessment.php" class="btn btn-default" data-toggle="modal">Cancel</a>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </section>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /row -->
            </section>
            <!-- /section-main -->
        </div>
        <!-- /container -->
    </div>
    <!-- /layout -->
    <!-- Modal -->
    <div id="modal-report-list" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Reports Options</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <h3>Default Reports View</h3>
                        <div class="form-group ">
                            <label class="control-label requiredField">
                                Make this list my default view
                                <span class="asteriskField">
                                    *
                                </span>
                            </label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="radio">
                                        <label class="radio">
                                            <input name="radio" type="radio" value="Yes" checked /> Recent
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label class="radio">
                                            <input name="radio" type="radio" value="No" /> Popular
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label class="radio">
                                            <input name="radio" type="radio" value="No" /> Type
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="radio">
                                        <label class="radio">
                                            <input name="radio" type="radio" value="Yes" /> Favorites
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label class="radio">
                                            <input name="radio" type="radio" value="No" /> All
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--    <hr> -->
                    <section class="section">
                        <h3>Favorite Reports</h3>
                        <div class="form-group">
                            <label class="control-label " for="text2">
                                Reports Added To Favorites List
                            </label>
                            <select class="form-control slat-basic" id="slat-basic" data-placeholder="Search Reports..." multiple>
                                <option></option>
                                <?php $i = 1; while ( $i <= 100) { ?>
                                    <option data-dept="Report Group" data-userid="user<?= $i ?>" value="Report <?= $i ?>">Report Name
                                        <?= $i ?>
                                    </option>
                                    <?php $i++; } ?>
                            </select>
                        </div>
                    </section>
                    <section class="section">
                        <h3>Reports Type</h3>
                        <div class="form-group">
                            <label>List of Report Types
                            </label>
                            <select class="form-control report-types">
                                <option value="default">--- Please Select A Report Type ---</option>
                                <option selected="selected" value="detailed-reports-two">Detailed Reports</option>
                                <option value="detailed-reports-two">Composite Reports</option>
                            </select>
                        </div>
                        <div class="form-group" id="detailed-reports-two">
                            <label class="control-label ">
                                Add or Remove Reports From Report Type List
                            </label>
                            <select class="form-control slat-basic" id="slat-basic" data-placeholder="Search Reports..." multiple>
                                <option selected="">Test Question Analysis</option>
                                <option selected="">Hours Completed</option>
                                <option selected="">Overdue by Dept</option>
                                <option selected="">Number of Ideas By Dept</option>
                                <option selected="">Overdue Ideas by Officer</option>
                                <?php $i = 1; while ( $i <= 100) { ?>
                                    <option data-dept="Report Group" data-userid="user<?= $i ?>" value="Report <?= $i ?>">Report Name
                                        <?= $i ?>
                                    </option>
                                    <?php $i++; } ?>
                            </select>
                        </div>
                    </section>
                    <section class="section">
                        <h3>Create A New Report Type</h3>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group ">
                                    <label class="control-label requiredField" for="name">
                                        Reports Type Name
                                        <span class="asteriskField">
                                            *
                                        </span>
                                    </label>
                                    <input class="form-control" id="name" name="name" type="text" />
                                </div>
                                <div class="form-group ">
                                    <label class="control-label ">
                                        Choose Reports To Add
                                    </label>
                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="Search Reports..." multiple>
                                        <option></option>
                                        <?php $i = 1; while ( $i <= 100) { ?>
                                            <option data-dept="Report Group" data-userid="user<?= $i ?>" value="Report <?= $i ?>">Report Name
                                                <?= $i ?>
                                            </option>
                                            <?php $i++; } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" name="submit" type="submit">Save</button>
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->
<?=
createFooter($patterns['footer']);
include_site_scripts($options);
?>

        <script>
        (function(window, $) {
            'use strict';

            window.HealthStream = window.HealthStream || {};
            var healthStream = window.HealthStream;

            healthStream.reports = {};
            healthStream.reports.wizard = function() {

                $('.report-type').change(function() {
                    var selected = $(this).find(':selected');
                    $('.report-list').hide();
                    $('.' + selected.val()).show();
                    $('.optionvalue').html(selected.html());

                    if ($(this).val() == "default") {
                        $('div').removeClass('in active');
                        $('li.report-item').removeClass('active');
                        $('#di').addClass('in active');
                    }
                });

                $('.report-types').change(function() {
                    var selected = $(this).find(':selected');
                    $('.report-type-list').hide();
                    $('#detailed-reports-two').show();
                    $('.optionvalue').html(selected.html());

                    if ($(this).val() == "default") {
                        //$('div').removeClass('in active');
                        $('#detailed-reports-two').hide();
                        //$('#di').addClass('in active');
                    }
                });
                $('.report-all').click(function() {
                    $('li.report-item').removeClass('active');
                    $('#tab-two-all').addClass('in active');
                    $('#tab-recent, #tab-fav, #tab-popular, #tab-types').removeClass('active');
                });
                $('#tab-recent, #tab-fav, #tab-popular, #tab-types').click(function() {
                    // $('#tab-all').removeClass('active');
                    // $('#di').addClass('in active');

                });
            };
            healthStream.reports.datepicker = function() {
                $('.datepicker').datepicker({
                    autoclose: true
                });
            };

            healthStream.reports.select2 = function() {
                function formatBasic(option) {
                    var userid = $(option.element).data('userid');
                    var dept = $(option.element).data('dept');
                    if (!option.id) return option.text; // optgroup
                    return '<div class="slat slat-select2"><div class="title">' + option.text + ' <span></span></div><ul class="meta"><li><span class="meta-label">Type:</span><span class="meta-value">' + dept + '</span></li></ul></div>';
                }


                $('.slat-basic').select2({
                    minimumInputLength: 1,
                    formatResult: formatBasic,
                    escapeMarkup: function(m) {
                        return m;
                    },
                    dropdownCssClass: 'select2-slats'
                });
            };


            $(window).on('load', function() {
                healthStream.reports.wizard();
                healthStream.reports.datepicker();
                healthStream.reports.select2();
            });
        }(window, jQuery));
        </script>
        <?php
include_site_end($options);
?>
