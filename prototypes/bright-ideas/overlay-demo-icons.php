<?php

include "includes/helpers.php";


$options = json_decode('{
    "head": {
        "title" : "Welcome to Bright Ideas"
    },
    "header": {
        "nav_main_active" : "home"
    },
    "focus": {
        "title": "Activity",
        "action": {
            "label": "Submit New Idea",
            "link": "./new-idea.php"
        },
        "meta": [

        ]
    }
}',true);

include_site_start($options);
include_site_header_overlay($options);
include_renewed_focus_bar($options);
?>
    <style>
    .idea-details {
        padding-right: 10px;
    }

    .nav-activity {
        margin-bottom: 0px !important;
    }

    th {
        font-weight: 600;
    }

    .selected-ideas-count {
        font-size: 14px;
        font-weight: 400;
    }

    .idea-count {
        /*background: #F1F1F1;*/
        font-size: 14px;
        padding: 2px 9px;
        border-radius: 5px;
        /*  border: 1px solid #B7B7B7;*/
        font-weight: 700;
    }

    .ideas-count-add {
        margin-left: 10px;
    }

    .selected-ideas-title {
        font-size: 18px;
    }
    </style>
    <div class="layout">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <section class="section section-main section-box" data-equalize="layout-columns">
                        <nav class="nav-focus nav-activity">
                            <div class="nav-mobile">
                                <span><i class="fa fa-caret-down"></i>
                                    <span>Account Settings</span>
                                </span>
                                <a href="#nav-main" class="toggle"><i class="fa fa-bars"></i></a>
                            </div>
                            <ul class="nav">
                                <li class="active activity">
                                    <a href="#tab-today"><i class="fa fa-caret-down"></i>Today</a>
                                </li>
                                <li class="activity">
                                    <a href="#tab-week"><i class="fa fa-caret-down"></i>This Week</a>
                                </li>
                                <li class="activity">
                                    <a href="#tab-this-month"><i class="fa fa-caret-down"></i>This Month</a>
                                </li>
                                <li class="activity">
                                    <a href="#tab-last-month"><i class="fa fa-caret-down"></i>Last Month </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab-today">
                                <h4 class="selected-ideas-title">Friday, <b>December 9</b>, 2015
                                    <span class="ideas-count-add selected-ideas-count pull-right hidden-xs">NEW IDEAS SUBMITTED:
                                        <span class="idea-count">1</span>
                                    </span>
                                    <span class="selected-ideas-count pull-right hidden-xs">IDEAS IMPLEMENTED:
                                        <span class="idea-count">0</span>
                                    </span>
                                </h4>
                                <hr style="border-top: 1px dotted #eee">
                                <section class="section">
                                    <h3> Overall Bright Ideas Summary: FY 2015 - 2015 </h3>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered" id="Table1" width="100%">
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        <span id="AsOfDate">10/8/2015</span>
                                                    </th>
                                                    <th style="text-align:right" width="161" style="WIDTH: 161px">Submitted Ideas
                                                    </th>
                                                    <th title="Total Number of Implemented Ideas" style="text-align:right">Implemented Ideas
                                                    </th>
                                                    <th title="Total Implemented Ideas Goal" style="text-align:right">Ideas Goal#
                                                    </th>
                                                    <th title="Percentage of Goal Reached" style="text-align:right">&nbsp;Ideas Goal%
                                                    </th>
                                                    <th title="Implemented Ideas Goal Per FTE" style="text-align:right">Goal /FTE
                                                    </th>
                                                    <th title="Total Number of FTEs" style="text-align:right">Number Of FTEs</th>
                                                </tr>
                                                <tr>
                                                    <td id="TDCorp">Corporation</td>
                                                    <td align="right" style="WIDTH: 161px">
                                                        <span id="CorporateSubmitIdeas">2</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateImplementedGoal">0.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateGoal">NA</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateFTEGoal">2</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateFTECount">0.0</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="TDFacility">Facility</td>
                                                    <td style="WIDTH: 161px; HEIGHT: 15px" align="right">
                                                        <span id="FacilitySubmitIdeas">2</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityImplementedIdeas">0</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityImplementedGoal">0.0</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityGoalP">NA</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityFTEGoal">2</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityFTECount">0.0</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="TDDept">Department</td>
                                                    <td align="right" style="WIDTH: 161px">
                                                        <span id="DeptSubmitIdeas">1</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="DeptImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="DeptImplementedGoal">0.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="DeptGoalP">NA</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="FTEGoal">2</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="FTECount">0.0</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                                <!--  <section class="section">
                                    <h3>My Goal Summary: FY 2015 - 2015</h3>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered" id="Table2" width="100%">
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        <span id="MyAsOfDate">10/8/2015</span>
                                                    </th>
                                                    <th style="text-align:right" width="25%">Submitted Ideas
                                                    </th>
                                                    <th title="Total Number of Implemented Ideas" style="text-align:right" width="25%">Implemented Ideas
                                                    </th>
                                                    <th title="Total Implemented Ideas Goal" style="text-align:right" width="25%">Ideas Goal#
                                                    </th>
                                                    <th title="Percentage of Goal Reached" style="text-align:right" width="25%">Ideas Goal%
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td id="TDCorp">Corporation</td>
                                                    <td align="right">
                                                        <span id="MyCorporateSubmitIdeas">1</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyCorporateImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyCorporateImplementedGoal">2.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyCorporateGoal">0.0%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="TDFacility">Facility</td>
                                                    <td align="right">
                                                        <span id="MyFacilitySubmitIdeas">1</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyFacilityImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyFacilityImplementedGoal">2.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyFacilityGoalP">0.0%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="TDDept">Department</td>
                                                    <td align="right">
                                                        <span id="MyDeptSubmitIdeas">1</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyDeptImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyDeptImplementedGoal">2.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyDeptGoalP">0.0%</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section> -->
                            </div>
                            <!-- /tab -->
                            <div class="tab-pane fade" id="tab-week">
                                <h4 class="selected-ideas-title"><b>Week of December 3</b>, 2015
                                    <span class=" ideas-count-add selected-ideas-count pull-right hidden-xs">NEW IDEAS SUBMITTED:
                                        <span class="idea-count">2</span>
                                    </span>
                                    <span class="selected-ideas-count pull-right hidden-xs">IDEAS IMPLEMENTED:
                                        <span class="idea-count">1</span>
                                    </span>
                                </h4>
                                <hr style="border-top: 1px dotted #eee">
                                <section class="section">
                                    <h3> Overall Bright Ideas Summary: FY 2015 - 2015 </h3>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered" id="Table1" width="100%">
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        <span id="AsOfDate">10/8/2015</span>
                                                    </th>
                                                    <th style="text-align:right" width="161" style="WIDTH: 161px">Submitted Ideas
                                                    </th>
                                                    <th title="Total Number of Implemented Ideas" style="text-align:right">Implemented Ideas
                                                    </th>
                                                    <th title="Total Implemented Ideas Goal" style="text-align:right">Ideas Goal#
                                                    </th>
                                                    <th title="Percentage of Goal Reached" style="text-align:right">&nbsp;Ideas Goal%
                                                    </th>
                                                    <th title="Implemented Ideas Goal Per FTE" style="text-align:right">Goal /FTE
                                                    </th>
                                                    <th title="Total Number of FTEs" style="text-align:right">Number Of FTEs</th>
                                                </tr>
                                                <tr>
                                                    <td id="TDCorp">Corporation</td>
                                                    <td align="right" style="WIDTH: 161px">
                                                        <span id="CorporateSubmitIdeas">2</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateImplementedGoal">0.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateGoal">NA</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateFTEGoal">2</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateFTECount">0.0</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="TDFacility">Facility</td>
                                                    <td style="WIDTH: 161px; HEIGHT: 15px" align="right">
                                                        <span id="FacilitySubmitIdeas">2</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityImplementedIdeas">0</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityImplementedGoal">0.0</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityGoalP">NA</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityFTEGoal">2</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityFTECount">0.0</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="TDDept">Department</td>
                                                    <td align="right" style="WIDTH: 161px">
                                                        <span id="DeptSubmitIdeas">1</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="DeptImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="DeptImplementedGoal">0.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="DeptGoalP">NA</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="FTEGoal">2</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="FTECount">0.0</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                                <!-- <section class="section">
                                    <h3>My Goal Summary: FY 2015 - 2015</h3>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered" id="Table2" width="100%">
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        <span id="MyAsOfDate">10/8/2015</span>
                                                    </th>
                                                    <th style="text-align:right" width="25%">Submitted Ideas
                                                    </th>
                                                    <th title="Total Number of Implemented Ideas" style="text-align:right" width="25%">Implemented Ideas
                                                    </th>
                                                    <th title="Total Implemented Ideas Goal" style="text-align:right" width="25%">Ideas Goal#
                                                    </th>
                                                    <th title="Percentage of Goal Reached" style="text-align:right" width="25%">Ideas Goal%
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td id="TDCorp">Corporation</td>
                                                    <td align="right">
                                                        <span id="MyCorporateSubmitIdeas">1</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyCorporateImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyCorporateImplementedGoal">2.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyCorporateGoal">0.0%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="TDFacility">Facility</td>
                                                    <td align="right">
                                                        <span id="MyFacilitySubmitIdeas">1</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyFacilityImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyFacilityImplementedGoal">2.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyFacilityGoalP">0.0%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="TDDept">Department</td>
                                                    <td align="right">
                                                        <span id="MyDeptSubmitIdeas">1</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyDeptImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyDeptImplementedGoal">2.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyDeptGoalP">0.0%</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section> -->
                            </div>
                            <!-- /tab -->
                            <div class="tab-pane fade" id="tab-this-month">
                                <h4 class="selected-ideas-title">Month of <b>December</b>, 2015
                                    <span class=" ideas-count-add selected-ideas-count pull-right hidden-xs">NEW IDEAS SUBMITTED:
                                        <span class="idea-count">3</span>
                                    </span>
                                    <span class="selected-ideas-count pull-right hidden-xs">IDEAS IMPLEMENTED:
                                        <span class="idea-count">2</span>
                                    </span>
                                </h4>
                                <hr style="border-top: 1px dotted #eee">
                                <section class="section">
                                    <h3> Overall Bright Ideas Summary: FY 2015 - 2015 </h3>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered" id="Table1" width="100%">
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        <span id="AsOfDate">10/8/2015</span>
                                                    </th>
                                                    <th style="text-align:right" width="161" style="WIDTH: 161px">Submitted Ideas
                                                    </th>
                                                    <th title="Total Number of Implemented Ideas" style="text-align:right">Implemented Ideas
                                                    </th>
                                                    <th title="Total Implemented Ideas Goal" style="text-align:right">Ideas Goal#
                                                    </th>
                                                    <th title="Percentage of Goal Reached" style="text-align:right">&nbsp;Ideas Goal%
                                                    </th>
                                                    <th title="Implemented Ideas Goal Per FTE" style="text-align:right">Goal /FTE
                                                    </th>
                                                    <th title="Total Number of FTEs" style="text-align:right">Number Of FTEs</th>
                                                </tr>
                                                <tr>
                                                    <td id="TDCorp">Corporation</td>
                                                    <td align="right" style="WIDTH: 161px">
                                                        <span id="CorporateSubmitIdeas">2</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateImplementedGoal">0.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateGoal">NA</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateFTEGoal">2</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateFTECount">0.0</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="TDFacility">Facility</td>
                                                    <td style="WIDTH: 161px; HEIGHT: 15px" align="right">
                                                        <span id="FacilitySubmitIdeas">2</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityImplementedIdeas">0</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityImplementedGoal">0.0</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityGoalP">NA</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityFTEGoal">2</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityFTECount">0.0</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="TDDept">Department</td>
                                                    <td align="right" style="WIDTH: 161px">
                                                        <span id="DeptSubmitIdeas">1</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="DeptImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="DeptImplementedGoal">0.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="DeptGoalP">NA</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="FTEGoal">2</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="FTECount">0.0</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                                <!-- <section class="section">
                                    <h3>My Goal Summary: FY 2015 - 2015</h3>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered" id="Table2" width="100%">
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        <span id="MyAsOfDate">10/8/2015</span>
                                                    </th>
                                                    <th style="text-align:right" width="25%">Submitted Ideas
                                                    </th>
                                                    <th title="Total Number of Implemented Ideas" style="text-align:right" width="25%">Implemented Ideas
                                                    </th>
                                                    <th title="Total Implemented Ideas Goal" style="text-align:right" width="25%">Ideas Goal#
                                                    </th>
                                                    <th title="Percentage of Goal Reached" style="text-align:right" width="25%">Ideas Goal%
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td id="TDCorp">Corporation</td>
                                                    <td align="right">
                                                        <span id="MyCorporateSubmitIdeas">1</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyCorporateImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyCorporateImplementedGoal">2.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyCorporateGoal">0.0%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="TDFacility">Facility</td>
                                                    <td align="right">
                                                        <span id="MyFacilitySubmitIdeas">1</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyFacilityImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyFacilityImplementedGoal">2.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyFacilityGoalP">0.0%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="TDDept">Department</td>
                                                    <td align="right">
                                                        <span id="MyDeptSubmitIdeas">1</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyDeptImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyDeptImplementedGoal">2.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyDeptGoalP">0.0%</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section> -->
                            </div>
                            <!-- /tab -->
                            <div class="tab-pane fade" id="tab-last-month">
                                <h4 class="selected-ideas-title">Month of <b>November</b>, 2015
                                    <span class=" ideas-count-add selected-ideas-count pull-right hidden-xs">NEW IDEAS SUBMITTED:
                                        <span class="idea-count">4</span>
                                    </span>
                                    <span class="selected-ideas-count pull-right hidden-xs">IDEAS IMPLEMENTED:
                                        <span class="idea-count">3</span>
                                    </span>
                                </h4>
                                <hr style="border-top: 1px dotted #eee">
                                <section class="section">
                                    <h3> Overall Bright Ideas Summary: FY 2015 - 2015 </h3>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered" id="Table1" width="100%">
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        <span id="AsOfDate">10/8/2015</span>
                                                    </th>
                                                    <th style="text-align:right" width="161" style="WIDTH: 161px">Submitted Ideas
                                                    </th>
                                                    <th title="Total Number of Implemented Ideas" style="text-align:right">Implemented Ideas
                                                    </th>
                                                    <th title="Total Implemented Ideas Goal" style="text-align:right">Ideas Goal#
                                                    </th>
                                                    <th title="Percentage of Goal Reached" style="text-align:right">&nbsp;Ideas Goal%
                                                    </th>
                                                    <th title="Implemented Ideas Goal Per FTE" style="text-align:right">Goal /FTE
                                                    </th>
                                                    <th title="Total Number of FTEs" style="text-align:right">Number Of FTEs</th>
                                                </tr>
                                                <tr>
                                                    <td id="TDCorp">Corporation</td>
                                                    <td align="right" style="WIDTH: 161px">
                                                        <span id="CorporateSubmitIdeas">2</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateImplementedGoal">0.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateGoal">NA</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateFTEGoal">2</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="CorporateFTECount">0.0</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="TDFacility">Facility</td>
                                                    <td style="WIDTH: 161px; HEIGHT: 15px" align="right">
                                                        <span id="FacilitySubmitIdeas">2</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityImplementedIdeas">0</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityImplementedGoal">0.0</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityGoalP">NA</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityFTEGoal">2</span>
                                                    </td>
                                                    <td style="HEIGHT: 15px" align="right">
                                                        <span id="FacilityFTECount">0.0</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="TDDept">Department</td>
                                                    <td align="right" style="WIDTH: 161px">
                                                        <span id="DeptSubmitIdeas">1</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="DeptImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="DeptImplementedGoal">0.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="DeptGoalP">NA</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="FTEGoal">2</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="FTECount">0.0</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                                <!--  <section class="section">
                                    <h3>My Goal Summary: FY 2015 - 2015</h3>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered" id="Table2" width="100%">
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        <span id="MyAsOfDate">10/8/2015</span>
                                                    </th>
                                                    <th style="text-align:right" width="25%">Submitted Ideas
                                                    </th>
                                                    <th title="Total Number of Implemented Ideas" style="text-align:right" width="25%">Implemented Ideas
                                                    </th>
                                                    <th title="Total Implemented Ideas Goal" style="text-align:right" width="25%">Ideas Goal#
                                                    </th>
                                                    <th title="Percentage of Goal Reached" style="text-align:right" width="25%">Ideas Goal%
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td id="TDCorp">Corporation</td>
                                                    <td align="right">
                                                        <span id="MyCorporateSubmitIdeas">1</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyCorporateImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyCorporateImplementedGoal">2.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyCorporateGoal">0.0%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="TDFacility">Facility</td>
                                                    <td align="right">
                                                        <span id="MyFacilitySubmitIdeas">1</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyFacilityImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyFacilityImplementedGoal">2.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyFacilityGoalP">0.0%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="TDDept">Department</td>
                                                    <td align="right">
                                                        <span id="MyDeptSubmitIdeas">1</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyDeptImplementedIdeas">0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyDeptImplementedGoal">2.0</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="MyDeptGoalP">0.0%</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section> -->
                            </div>
                            <!-- /tab -->
                        </div>
                    </section>
                    <!-- /section-main -->
                </div>
                <!-- /column -->
                <div class="col-md-3">
                    <section class="section section-sidebar" data-equalize="layout-columns">
                        <?php include_sidebar() ?>
                    </section>
                    <!-- /section-sidebar -->
                </div>
                <!-- /column -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /layout -->
<?= 
createFooter($patterns['footer']); 
include_site_scripts($options);
include_site_end($options);
include "includes/_overlay-icons.php";
// include "includes/_overlay.php";
?>
