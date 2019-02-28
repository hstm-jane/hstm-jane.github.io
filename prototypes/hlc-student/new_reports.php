<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<HTML>

<head>
    <title>Import Results</title>
    <meta name="GENERATOR" content="Microsoft Visual Studio .NET 7.1">
    <meta name="CODE_LANGUAGE" content="C#">
    <meta name="vs_defaultClientScript" content="JavaScript">
    <meta name="vs_targetSchema" content="http://schemas.microsoft.com/intellisense/ie5">
    <link rel="SHORTCUT ICON" href="admin-assets/images/healthstream-favicon.ico" />
    <link href="admin-assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <!-- <link href="http://www.healthstream.com/HLC/Common/Css.ashx?t=249f97ba-3b3d-e511-840d-005056b10f02" type="text/css" rel="stylesheet"> -->
    <!-- <link href="admin-assets/css/Common/css.css" type="text/css" rel="stylesheet"> -->
    <link href="admin-assets/css/site.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/stickybar.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/override-blue-1.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/font-awesome.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/font-awesome-animation.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/sitemap.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/notifications.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/NewReports.css" type="text/css" rel="stylesheet">

    <style>

    </style>
    <!-- <script src="admin-assets/js/jquery-1.8.3.min.js"></script> -->
    <script src="admin-assets/js/jquery.js"></script>
    <!-- <script src="admin-assets/js/jquery.storageapi.js"></script> -->
    <script src="admin-assets/js/stickybar.js"></script>
    <script src="admin-assets/js/OverrideIcons.js"></script>
    <!-- <script src="admin-assets/js/jquery-ui.js"></script> -->
    <script src="admin-assets/js/notifications.js"></script>
    <!-- <script src="http://www.healthstream.com/HLC/Scripts/jquery-1.4.2.min.js" type="text/javascript"></script> -->
    <script src="admin-assets/js/bootstrap.js"></script>
    <script>
        $(function() {

            $('.date-range__control').on('change', function() {
                var $control = $(this);
                var $custom = $('.date-range__custom');
                if ($control.val() === 'custom') {
                    $('#modal-custom-range').modal('show');

                } else {
                    $('#modal-custom-range').modal('hide');
                    $('.import-results-date-range-label').text(" - " + $control.val())
                }
            });

            $('#rangeSelect').on('click', function() {
                $('.import-results-date-range-label').text('- Aug 15, 2017 - Aug 15, 2018 ')
            });


        });
    </script>
</head>

<body id="hlcBody" onbeforeunload="">
    <form name="Form1" method="post" action="./ServicesMainMenu.aspx" id="Form1">


        <div id="ph" class="ph">

        </div>

        <div id="mb">
            <div id="mb_n" class="nm tabs txs">
                <div class="levelwrap level1">
                    <ul>
                        <li><a accesskey="O" onfocus="af(event);" href="/HLC/Admin/People/PeopleMainMenu.aspx" title="Manage students, student groups, administrators, and roles. Use Alt-O to access via keyboard." class="nt" id="AP"><span class="wrap"><span class="innerWrap">People</span></span></a></li>
                        <li><a accesskey="C" onfocus="af(event);" href="/HLC/Admin/Courses/CourseMainMenu.aspx" title="Manage courses, accreditations, categories, and class scheduling. Use Alt-C to access via keyboard." class="nt" id="AC"><span class="wrap"><span class="innerWrap">Courses</span></span></a></li>
                        <li><a accesskey="M" onfocus="af(event);" href="/HLC/Admin/Simulation/SimulationMainMenu.aspx" title="Manage simulation features. Use Alt-M to access via keyboard." class="nt" id="SM"><span class="wrap"><span class="innerWrap">Simulation</span></span></a></li>
                        <li><a accesskey="Y" onfocus="af(event);" href="/HLC/Admin/HAC/AssessmentsMainMenu.aspx" title="HealthStream Assessments Center. Use Alt-Y to access via keyboard." class="nt" id="ACMP"><span class="wrap"><span class="innerWrap">Assessments</span></span></a></li>
                        <li><a accesskey="E" onfocus="af(event);" href="/HLC/Admin/Education/EducationMainMenu.aspx" title="Manage assignments, classes, and activities. Use Alt-E to access via keyboard." class="nt" id="AE"><span class="wrap"><span class="innerWrap">Education</span></span></a></li>
                        <li><a accesskey="R" onfocus="af(event);" href="/HLC/Admin/Reports/ReportsMainMenu.aspx" title="Access reports. Use Alt-R to access via keyboard." class="nt" id="AR"><span class="wrap"><span class="innerWrap">Reports</span></span></a></li>
                        <li><a accesskey="T" onfocus="af(event);" href="/HLC/Admin/Tools/ToolsMainMenu.aspx" title="Manage organization and institution information, buildings, and resources. Use Alt-T to access via keyboard." class="nt" id="AT"><span class="wrap"><span class="innerWrap">Tools</span></span></a></li>
                        <li><a accesskey="V" onfocus="af(event);" href="/HLC/Admin/Services/ServicesMainMenu.aspx" title="Access additional HealthStream products and services. Use Alt-V to access via keyboard." class="nts" id="AS"><span class="wrap"><span class="innerWrap">Services</span></span></a></li>
                        <li><a accesskey="I" onfocus="af(event);" href="/HLC/Admin/MyProfile/MyProfileMainMenu.aspx" title="Manage profile information and preferences. Use Alt-I to access via keyboard." class="nt" id="AMP"><span class="wrap"><span class="innerWrap">My Profile</span></span></a></li>
                    </ul>
                </div>
                <div class="nb" style="content:'';clear:both;display:block;">

                </div>
            </div>
        </div>
        <style>
            .import-results-col {
        padding:15px;
        margin-top:20px;
    }


    .import-result-heading{
        height: 27px;
        color: #333333;
        font-family: "Open Sans";
        font-size: 20px;
        font-weight: 600;
        line-height: 27px;
        margin-top:10px;
        margin-bottom:3px;
    }
    .import-result-heading small{
        font-style: italic;
        font-weight: 400;
        color: #999;
        display: inline-block;
        font-size:75%;
    }
    .import-result-container-single {
        height: 84px;
        width: 450px;
        border: 1px solid #D7DBE0;
        border-radius: 8px;
        background-color: #FFFFFF;
        box-shadow: 0 2px 5px -1px rgba(69,90,100,0.3);
        display:inline-block;
        position:relative;
        margin:3px;
    }
    .import-result-container {
        height: 84px;
        width: 220px;
        border: 1px solid #D7DBE0;
        border-radius: 8px;
        background-color: #FFFFFF;
        box-shadow: 0 2px 5px -1px rgba(69,90,100,0.3);
        display:inline-block;
        position:relative;
        margin:3px;
    }
    .import-result-single {
        height: 84px;
        width: 214px;
        color: #777777;
        font-family: "Open Sans";
        font-size: 17px;
        font-weight: 600;
        line-height: 24px;
        /* position:absolute;
        top:15px;
        left:10px; */
        float:left;
        position:relative;

    }

    .import-result-single:last-of-type {
        margin-left:20px;
    }

    .import-result {
        height: 24px;
        width: 68px;
        color: #777777;
        font-family: "Open Sans";
        font-size: 17px;
        font-weight: 600;
        line-height: 24px;
        position:absolute;
        top:15px;
        left:10px;
    }
    .import-result-value {
        height: 33px;
        width: 89px;
        color: #777777;
        font-family: "Open Sans";
        font-size: 24px;
        font-weight: 600;
        line-height: 33px;
        text-align: right;
        position:absolute;
        top:10px;
        right:10px;
    }
    
    .import-result-container .progress {
        margin-top:60px;
        margin-right:45px;
        margin-left:10px;
        height:7px;
    }
    .import-result-single .progress {
        margin-top:60px;
        margin-right:45px;
        margin-left:10px;
        height:7px;
    }
    .import-result-percent  {
        font-size:12px;
        position:absolute;
        top:55px;
        right:10px;
    }
    .import-result-container.import-result-success .import-result-percent {
        color: #5cb85c;
    }
    .import-result-container.import-result-error .import-result-percent {
        color: #EC5F59;
    }
    .import-result-container.no-results .import-result-percent {
        color: #C2C2C2 !important;
    }
    .import-results-header {
        width:75%;
        height:50px;
        position:absolute;
    }
    .import-results-header h2 {
        color:#333;
        font-size:20px;
    }
    .import-results-header a {
        font-size:14px;
        margin-left:40px;
        font-weight:400;
    }
    .date-range .date-selector .control-label {
        font-size:16px;
        padding-right:10px;
        padding-top:10px;
        font-weight:600;
    }
    .modal .modal-title {
        font-size:16px;
        font-weight:500;
    }
    .modal .control-label {
        font-size:14px;
        font-weight:600;
    }
    .modal .input-group-btn:last-child>.btn, .input-group-btn:last-child>.btn-group {
        height:34px;
    }
    .import-results-date-range-label {
        font-size:18px;
    }
    .modal-body {
        font-size:14px;
    }
    .import-result-container:hover {
        background-color:#f3f3f3;
    }
    .modal-admin-lg .modal-dialog {
        width:900px;
    }
    .modal h1 {
        color: #333;
        font-size:22px;
        line-height:30px;
    }
    .modal th {
        font-weight:600;
    }
    .modal table th, .modal table td {
        color:#333;
        font-size:12px;
    }
    .modal h2 {
        margin-bottom:20px;
    }
    .modal h2 small {
        padding-left:5px;
        font-size:14px;
        font-style:italic;
    }

</style>

        <table class="occ brdr">
            <tr>
                <td class="af vlst">
                    <div class="import-results-header">
                        <h2>Import Results
                            <small class="import-results-date-range-label"> - Last 24 Hours</small>
                            <div class="date-range pull-right " style="">
                                <div class="form-group date-selector" style="">
                                    <div class="pull-left">
                                        <label class="control-label mt-lg">Date Range:</label>
                                    </div>
                                    <div class="pull-left mt">
                                        <select class="form-control date-range__control">
                                            <optgroup label="Presets">
                                                <option selected="">Last 24 hours</option>
                                                <option>Last 72 hours</option>
                                                <option>Last 7 days</option>
                                                <option>Last 14 days</option>
                                                <option>Last 30 days</option>
                                            </optgroup>
                                            <optgroup label="Custom">
                                                <option value="custom">Custom Range</option>
                                            </optgroup>
                                        </select>


                                    </div>

                                </div>
                            </div>
                        </h2>

                    </div>


                    <div class="import-results-col">
                        <div class="import-result-heading">Student Import</div>
                        <div class="import-result-section">
                            <a href="#modal-report" data-toggle="modal" class="import-result-container-single">
                                <div class="import-result-single import-result-success">
                                    <div class="import-result"> Success</div>
                                    <div class="import-result-value">200,000</div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" style="width: 100%">
                                            <span class="sr-only">100% Success</span>
                                        </div>
                                    </div>
                                    <div class="import-result-percent">100%</div>
                                </div>
                                <div class="import-result-single  import-result-error no-results">
                                    <div class="import-result"> Error</div>
                                    <div class="import-result-value">0</div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" style="width: 0%">
                                            <span class="sr-only">0% Error</span>
                                        </div>
                                    </div>
                                    <div class="import-result-percent">0%</div>
                                </div>
                            </a>
                        </div>

                        <div class="import-result-heading">Student Job Function <small>Not Used</small></div>

                        <div class="import-result-section">
                            <a href="#modal-report" data-toggle="modal" class="import-result-container-single no-result">
                                <div class="import-result-single import-result-success">
                                    <div class="import-result"> Success</div>
                                    <div class="import-result-value">0</div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" style="width: 0%">
                                            <span class="sr-only">0% Success</span>
                                        </div>
                                    </div>
                                    <div class="import-result-percent">100%</div>
                                </div>
                                <div class="import-result-single  import-result-error no-results ">
                                    <div class="import-result"> Error</div>
                                    <div class="import-result-value">0</div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" style="width: 0%">
                                            <span class="sr-only">0% Error</span>
                                        </div>
                                    </div>
                                    <div class="import-result-percent">0%</div>
                                </div>
                            </a>
                        </div>




                        <div class="import-result-heading">Role Import</div>

                        <div class="import-result-section">
                            <a href="#modal-report" data-toggle="modal" class="import-result-container-single">
                                <div class="import-result-single import-result-success">
                                    <div class="import-result"> Success</div>
                                    <div class="import-result-value">986</div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" style="width: 82%">
                                            <span class="sr-only">82% Success</span>
                                        </div>
                                    </div>
                                    <div class="import-result-percent">82%</div>
                                </div>
                                <div class="import-result-single  import-result-error">
                                    <div class="import-result"> Error</div>
                                    <div class="import-result-value">211</div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" style="width: 18%">
                                            <span class="sr-only">18% Error</span>
                                        </div>
                                    </div>
                                    <div class="import-result-percent">18%</div>
                                </div>
                            </a>
                        </div>




                        <div class="import-result-heading">Supplemental Manager Import</div>
                        <div class="import-result-section">
                            <a href="#modal-new-report-success" data-toggle="modal" class="import-result-container import-result-success">
                                <div class="import-result"> Success</div>
                                <div class="import-result-value">698</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" style="width: 64%">
                                        <span class="sr-only">64% Success</span>
                                    </div>
                                </div>
                                <div class="import-result-percent">64%</div>
                            </a>
                            <a href="#modal-new-report-error" data-toggle="modal" class="import-result-container import-result-error">
                                <div class="import-result"> Error</div>
                                <div class="import-result-value">390</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" style="width: 36%">
                                        <span class="sr-only">36% Error</span>
                                    </div>
                                </div>
                                <div class="import-result-percent">36%</div>
                            </a>
                        </div>
                        <button class="btn btn-default" style="margin-top:15px;margin-bottom:15px;"><i class="fa fa-cog"></i> Manage Import Settings</button>

                    </div>
                </td>
                <td class="af vlst">
                    <div class="import-results-col">
                        <div class="import-result-heading">Student Badge Import</div>
                        <div class="import-result-section">
                            <a href="#modal-report" data-toggle="modal" class="import-result-container-single">
                                <div class="import-result-single import-result-success">
                                    <div class="import-result"> Success</div>
                                    <div class="import-result-value">200</div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" style="width: 100%">
                                            <span class="sr-only">100% Success</span>
                                        </div>
                                    </div>
                                    <div class="import-result-percent">100%</div>
                                </div>
                                <div class="import-result-single  import-result-error no-results">
                                    <div class="import-result"> Error</div>
                                    <div class="import-result-value">0</div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" style="width: 0%">
                                            <span class="sr-only">0% Error</span>
                                        </div>
                                    </div>
                                    <div class="import-result-percent">0%</div>
                                </div>
                            </a>
                        </div>


                        

                        <div class="import-result-heading">Student License Import</div>

                        <div class="import-result-section">
                            <a href="#modal-report" data-toggle="modal" class="import-result-container-single">
                                <div class="import-result-single import-result-success">
                                    <div class="import-result"> Success</div>
                                    <div class="import-result-value">8,454</div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" style="width: 59%">
                                            <span class="sr-only">59% Success</span>
                                        </div>
                                    </div>
                                    <div class="import-result-percent">59%</div>
                                </div>
                                <div class="import-result-single  import-result-error no-results">
                                    <div class="import-result"> Error</div>
                                    <div class="import-result-value">5,820</div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" style="width: 41%">
                                            <span class="sr-only">41% Error</span>
                                        </div>
                                    </div>
                                    <div class="import-result-percent">41%</div>
                                </div>
                            </a>
                        </div>


                       
                        <div class="import-result-heading">Supervisor Import</div>

                        <div class="import-result-section">
                            <a href="#modal-report" data-toggle="modal" class="import-result-container-single">
                                <div class="import-result-single import-result-success">
                                    <div class="import-result"> Success</div>
                                    <div class="import-result-value">8,454</div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" style="width: 59%">
                                            <span class="sr-only">59% Success</span>
                                        </div>
                                    </div>
                                    <div class="import-result-percent">59%</div>
                                </div>
                                <div class="import-result-single  import-result-error no-results">
                                    <div class="import-result"> Error</div>
                                    <div class="import-result-value">0</div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" style="width: 41%">
                                            <span class="sr-only">0% Error</span>
                                        </div>
                                    </div>
                                    <div class="import-result-percent">0%</div>
                                </div>
                            </a>
                        </div>

                       


                        <!---->
                    </div>
                </td>
                <td class="vlst promo">
                    <!-- <div id="pnlSMH" class="dash" style="text-align:center;PADDING-RIGHT:5px;PADDING-LEFT:5px;PADDING-BOTTOM:5px;PADDING-TOP:5px"> -->

                    <!-- <a id="lnkSMH" href="javascript:RH_ShowMeHow(0,&#39;http://www.healthstream.com/hlchelp/AdministratorHLCSimManager/Administrator.htm>HLC_Window&#39;,HH_HELP_CONTEXT,300);">
                                <img src="http://www.healthstream.com/HSAPP/HLC/Images/iconLG_showMeHow.gif" alt="Click here for modules that demonstrate service functions."
                                    border="0"></a> -->

                    <!-- </div> -->
                    <div id="pR_p">
                        <!-- <div>
        <a href="  /HLC/Common/Promotion.aspx?promotionID=b098828a-6a42-e811-8494-005056b1380a" target="_blank">
            <img alt="" src="/HLCThemes/50031/01589972_IM_EN18_Engage-HLC-Promos-TX-FINAL.png" style="margin: 0px; border-width: 0px; border-style: solid;" />
        </a>
    </div> -->
                        <!-- <div>
        <a href="/HLC/Common/Promotion.aspx?promotionID=2be8330a-2589-e811-a919-005056b1394b" target="_blank">
            <img alt="" src="/HLCThemes/50031/01633904-HLC%20Ad-%20Manikin%20Sustainment%20Program-V3%20(1).jpg" />
        </a>
    </div> -->
                        <!-- <div>
        <a href="/HLC/Common/Promotion.aspx?promotionID=9c1271b6-5b8c-e811-a52b-005056b12710" target="_blank">
            <img alt="" src="/HLCThemes/50031/(HLC)%20Banner_%20Clinical%20Risk%20Webinar%20Series.jpg" style="border-width: 0px; border-style: solid;" />
        </a>
    </div> -->
                        <!-- <div>
        <a href="/HLC/Common/Promotion.aspx?promotionID=9d16e11e-0a9c-e811-b5a9-005056b11eee" target="_blank"><img alt="" src="/HLCThemes/50031/HLC%20Ad-%20Resuscitation%20Coaching-v2%20(2)%20(1).jpg" />
        </a>
    </div> -->
                    </div>

                </td>
            </tr>
        </table>

        <div id="pf" class="pf">
            <div class="sm">
                Questions? Concerns? Contact HealthStream Customer Service.
            </div>
            <div class="txxs">
                <!-- <a target="_blank" href="http://www.healthstream.com/" id="pf-logo"> -->
                <!-- <img border="0" src="/HLC/images/hstmLogo.gif" /></a> -->
                <!-- &nbsp;Copyright © 2018 HealthStream, Inc. All Rights Reserved.<br>Build 13.01.28.895.512&nbsp;&nbsp;Aug 13 2018 2:24 PM CT<br><br>AO:56716 -->
            </div>
        </div>
        <script type="text/javascript">
            function sh() {
                RH_ShowHelp(0, 'http://www.healthstream.com/hlchelp/AdministratorHLCSimManager/Administrator.htm>HLC_Window', HH_HELP_CONTEXT, 6);
                return false;
            }
        </script>
    </form>
    <div id="modal-report" class="modal fade modal-admin-lg" tabindex="-1" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">View Report</h4>
                </div>
                <div class="modal-body">

                    <!-- REPORT GROUP -->
                    <article>
                        <!-- REPORT GROUP HEADER -->
                        <header>
                            <!-- ADDITIONAL INFO AREA -->
                            <div class="additional-info">
                                <h4><span id="lblInstitutionName">HLC Test Facility</span></h4>
                                <h1>Student Import Results Report</h1>

                                <div class="info-header-text-block">
                                    <b>Date Range:</b> <span id="lblDateRange">Jul 01, 2018 through Jul 31, 2018</span>
                                </div>

                                <div class="info-header-text-block">
                                    <b>Report Generated:</b> <span id="lblReportGenerated">Aug 16, 2018, 2:18 pm ET</span>
                                </div>

                                <div class="additional-data"></div>
                            </div>
                            <!-- /ADDITIONAL INFO AREA -->

                        </header>
                        <!-- /REPORT GROUP HEADER -->

                        <!-- REPORT GROUP TABLE AREA -->
                        <div id="divHasRecords">

                            <section class="report-tables">


                                <div class="table-wrapper">
                                    <div id="divNoImportStatusSummaryRecords">
                                    </div>
                                    <table class="student-import-results">
                                        <thead>
                                            <tr class="title">
                                                <th colspan="4">
                                                    <h2>Import Status Summary</h2>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr class="table-row stripe">
                                                <th>Update Day</th>
                                                <th>Institution</th>
                                                <th>Status</th>
                                                <th>Records</th>
                                            </tr>

                                            <tr class="table-row">
                                                <td>7/11/2018</td>
                                                <td>ARSVH - St. Vincent Health System - Little Rock</td>
                                                <td>Completed</td>
                                                <td>30</td>
                                            </tr>
                                            <tr class="table-row">
                                                <td>7/11/2018</td>
                                                <td>CHHME - CHI Health at Home – Home Medical Equipment</td>
                                                <td>Completed</td>
                                                <td>14</td>
                                            </tr>
                                            <tr class="table-row stripe">
                                                <td>7/19/2018</td>
                                                <td>CHHCO - CHI Health at Home – Corporate Staff</td>
                                                <td>Completed</td>
                                                <td>15</td>
                                            </tr>

                                            <tr class="table-row">
                                                <td>7/19/2018</td>
                                                <td>CHHCO - CHI Health at Home – Corporate Staff</td>
                                                <td>Failed</td>
                                                <td>2</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>



                            </section>
                            <!-- /REPORT GROUP TABLE AREA -->


                            <!-- REPORT GROUP TABLE AREA -->
                            <section class="report-tables">

                                <!-- REPORT GROUP TABLE FOR ITEM -->
                                <div class="table-wrapper">
                                    <div id="divNoImportActionsRecords">
                                    </div>
                                    <table class="student-import-results">
                                        <tbody>
                                            <tr class="title">
                                                <th colspan="8">
                                                    <h2>Import Action Summary</h2>
                                                </th>
                                            </tr>

                                            <tr class="table-row stripe">
                                                <th>Update Day</th>
                                                <th>Institution</th>
                                                <th>Students Added</th>
                                                <th>Students Updated</th>
                                                <th>Users Removed</th>
                                                <th>Departments Added</th>
                                                <th>Job Titles Added</th>
                                                <th>Custom Vals Added</th>
                                            </tr>

                                            <tr class="table-row">
                                                <td>7/11/2018</td>
                                                <td>ARSVH - St. Vincent Health System - Little Rock</td>
                                                <td>6</td>
                                                <td>24</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0/0/0/0</td>
                                            </tr>
                                            <tr class="table-row stripe">
                                                <td>7/11/2018</td>
                                                <td>CHHCO - CHI Health at Home – Corporate Staff</td>
                                                <td>6</td>
                                                <td>2</td>
                                                <td>3</td>
                                                <td>1</td>
                                                <td>0</td>
                                                <td>0/0/0/0</td>
                                            </tr>

                                            <tr class="table-row">
                                                <td>7/11/2018</td>
                                                <td>CHHME - CHI Health at Home – Home Medical Equipment</td>
                                                <td>6</td>
                                                <td>24</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0/0/0/0</td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                                <!-- /REPORT GROUP TABLE FOR ITEM -->

                            </section>
                            <!-- /REPORT GROUP TABLE AREA -->

                            <!-- REPORT GROUP TABLE AREA -->
                            <section class="report-tables">

                                <!-- REPORT GROUP TABLE FOR ITEM -->
                                <div class="table-wrapper">
                                    <div id="divImportErrorDetailRecords">

                                    </div>
                                    <table class="student-import-results error-detail with-counter">
                                        <tbody>
                                            <tr class="title">
                                                <th colspan="6">
                                                    <h2>Import Error Detail</h2>
                                                </th>
                                            </tr>
                                            <tr class="table-row stripe">
                                                <th></th>
                                                <th>Date</th>
                                                <th>Institution</th>
                                                <th>Student</th>
                                                <th>Student ID</th>
                                                <th>Error Message</th>
                                            </tr>

                                            <tr class="table-row">
                                                <td></td>
                                                <td>7/11/2018</td>
                                                <td>N/A</td>
                                                <td>Berry, Karen L</td>
                                                <td>FCP5587</td>
                                                <td>Institution not found with code: 34357.</td>
                                            </tr>

                                            <tr class="table-row stripe">
                                                <td></td>
                                                <td>7/19/2018</td>
                                                <td>N/A</td>
                                                <td>Fialkowski, Lori J</td>
                                                <td>HEJ9003</td>
                                                <td>Institution not found with code: 33608.</td>
                                            </tr>



                                        </tbody>
                                    </table>
                                </div>
                                <!-- /REPORT GROUP TABLE FOR ITEM -->

                            </section>
                            <!-- /REPORT GROUP TABLE AREA -->
                        </div>
                    </article>

                    </section>
                </div>
                <div class="modal-footer">
                    <div class="pull-left">
                        <button type="button" class="btn btn-default btn-export"><em class="fa fa-download"></em> Export to CSV</button>
                        <button class="btn btn-default" data-dismiss="modal">Print</button>
                        <button class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-new-report-success" class="modal fade modal-admin-lg" tabindex="-1" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">View Report</h4>
                </div>
                <div class="modal-body">
                    <h2>Supplemental Manager Report<small>- 698 of 1088 records imported successfully</small></h2>

                    <div class="modal-header-left pull-left">
                        <div class="SupplementalMgrHeader text-muted"></div>

                    </div>
                    <table class="table  table-striped dataTable" id="SupplementalMgrTable">
                        <thead>
                            <tr>
                                <th class="">Date</th>
                                <th class="">Institution</th>
                                <th class="">Student</th>
                                <th class="">Student ID</th>
                                <th class="">Manager</th>
                                <th class="">Manager ID</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <?= date('m/d/o', strtotime('-1 days')) ?>
                                </td>
                                <td>COCENCO - Corporate</td>
                                <td>Brown, Brittany</td>
                                <td>britbrow0315</td>
                                <td>Frey, Daphne L</td>
                                <td>dfrey1</td>

                            </tr>
                            <tr>
                                <td>
                                    <?= date('m/d/o', strtotime('-1 days')) ?>
                                </td>
                                <td>COCENCO - Corporate</td>
                                <td>Lawton, Richard</td>
                                <td>rlawton</td>
                                <td>Frey, Daphne L</td>
                                <td>dfrey1</td>

                            </tr>

                            <tr>
                                <td>
                                    <?= date('m/d/o', strtotime('-1 days')) ?>
                                </td>
                                <td>COCENCO - Corporate</td>
                                <td>Jurta, Kiley L</td>
                                <td>kjurta</td>
                                <td>Frey, Daphne L</td>
                                <td>dfrey1</td>

                            </tr>
                            <tr>
                                <td>
                                    <?= date('m/d/o', strtotime('-1 days')) ?>
                                </td>
                                <td>COCENCO - Corporate</td>
                                <td>Leingang, Tammy</td>
                                <td>STA58636</td>
                                <td>Frey, Daphne L</td>
                                <td>dfrey1</td>

                            </tr>
                            <tr>
                                <td>
                                    <?= date('m/d/o', strtotime('-1 days')) ?>
                                </td>
                                <td>COCENPA - Parker Adventist Hospital</td>
                                <td>Gustafson, Jeffrey Dean</td>
                                <td>STA11000156</td>
                                <td>Sheppard, Amy</td>
                                <td>amyshep0520</td>

                            </tr>

                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <div class="pull-left">
                        <button type="button" class="btn btn-default btn-export"><em class="fa fa-download"></em> Export to CSV</button>
                        <button class="btn btn-default" data-dismiss="modal">Print</button>
                        <button class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-new-report-error" class="modal fade modal-admin-lg" tabindex="-1" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">View Report</h4>
                </div>
                <div class="modal-body">
                    <h2>Supplemental Manager Report<small>- 390 of 1088 records with errors</small></h2>

                    <div class="modal-header-left pull-left">
                        <div class="SupplementalMgrHeader text-muted"></div>

                    </div>
                    <table class="table  table-striped dataTable" id="SupplementalMgrTable">
                        <thead>
                            <tr>
                                <th class="">Date</th>
                                <th class="">Institution</th>
                                <th class="">Student</th>
                                <th class="">Student ID</th>
                                <th class="">Manager</th>
                                <th class="">Manager ID</th>
                                <th class="">Error Message</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <?= date('m/d/o', strtotime('-1 days')) ?>
                                </td>
                                <td>COCENCO - Corporate</td>
                                <td>Brown, Brittany</td>
                                <td>britbrow0315</td>
                                <td>Frey, Daphne L</td>
                                <td>dfrey1</td>
                                <td>Multiple usernames exists for the same UniqueID.</td>

                            </tr>
                            <tr>
                                <td>
                                    <?= date('m/d/o', strtotime('-1 days')) ?>
                                </td>
                                <td>COCENCO - Corporate</td>
                                <td>Lawton, Richard</td>
                                <td>rlawton</td>
                                <td>Frey, Daphne L</td>
                                <td>dfrey1</td>
                                <td>Multiple usernames exists for the same UniqueID.</td>

                            </tr>

                            <tr>
                                <td>
                                    <?= date('m/d/o', strtotime('-1 days')) ?>
                                </td>
                                <td>COCENCO - Corporate</td>
                                <td>Jurta, Kiley L</td>
                                <td>kjurta</td>
                                <td>Frey, Daphne L</td>
                                <td>dfrey1</td>
                                <td>Multiple usernames exists for the same UniqueID.</td>

                            </tr>
                            <tr>
                                <td>
                                    <?= date('m/d/o', strtotime('-1 days')) ?>
                                </td>
                                <td>COCENCO - Corporate</td>
                                <td>Leingang, Tammy</td>
                                <td>STA58636</td>
                                <td>Frey, Daphne L</td>
                                <td>dfrey1</td>
                                <td>Multiple usernames exists for the same UniqueID.</td>

                            </tr>
                            <tr>
                                <td>
                                    <?= date('m/d/o', strtotime('-1 days')) ?>
                                </td>
                                <td>COCENPA - Parker Adventist Hospital</td>
                                <td>Gustafson, Jeffrey Dean</td>
                                <td>STA11000156</td>
                                <td>Sheppard, Amy</td>
                                <td>amyshep0520</td>
                                <td>Multiple usernames exists for the same UniqueID.</td>

                            </tr>

                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <div class="pull-left">
                        <button type="button" class="btn btn-default btn-export"><em class="fa fa-download"></em> Export to CSV</button>
                        <button class="btn btn-default" data-dismiss="modal">Print</button>
                        <button class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="modal-custom-range" class="modal fade" tabindex="-1" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Custom Range </h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <div class="form-group">

                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="control-label">Start Date</label>
                                    <div class="input-group date" style="position: relative;">
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">End Date</label>
                                    <div class="input-group date" style="position: relative;">
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" data-dismiss="modal" id="rangeSelect">Apply</button>
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>

</HTML>