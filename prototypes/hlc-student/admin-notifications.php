<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html>

<head>
    <title>Site Map</title>
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
    <style>

        .label {
            vertical-align: baseline;
            border-radius: .25em;
            display: inline-block;
            padding: 0 .545em;
            font-size: 75%;
            line-height: 1.818em;
            border-color: #818a91;
            background: #818a91;
            color: #fff;
            font-weight:400;
        }

        .label-pill {
            padding-right: .818em;
            padding-left: .818em;
            border-radius: 999px
        }

        .badge-info,.label-info,.panel-info>.panel-heading .badge-info {
            border-color: #59c4e4;
            background: #59c4e4;
            color: #fff
        }

        .badge-warning,.label-warning,.panel-warning>.panel-heading .badge-warning {
            border-color: #f4ab43;
            background: #f4ab43;
            color: #fff
        }

        .badge-success,.label-success,.panel-warning>.panel-heading .badge-success {
            border-color: #78bd5d;
            background: #78bd5d;
            color: #fff
        }

        .badge-danger,.label-danger,.panel-warning>.panel-heading .badge-danger {
            border-color: #e46050;
            background: #e46050;
            color: #fff
        }
        .label-purple {
            border-color: #9289ca;
            background: #9289ca;
            color: #fff
        }
    </style>
    <style>

    </style>
    <!-- <script src="admin-assets/js/jquery-1.8.3.min.js"></script> -->
    <script src="admin-assets/js/jquery.js"></script>
    <script src="admin-assets/js/stickybar.js"></script>
    <script src="admin-assets/js/OverrideIcons.js"></script>
    <!-- <script src="admin-assets/js/jquery-ui.js"></script> -->
    <script src="admin-assets/js/notifications.js"></script>
    <!-- <script src="http://www.healthstream.com/HLC/Scripts/jquery-1.4.2.min.js" type="text/javascript"></script> -->
    <script src="admin-assets/js/bootstrap.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        LoadOldReport();
    });

    function LoadOldReport() {
        if (IsIE7())
            $("#hdnLoadOldReport").val("true");
        else
            $("#hdnLoadOldReport").val("false");
    }

    function IsIE7() {
        var version = GetInternetExplorerVersion();
        var IE7BrowserMode = version <= 7 && version > -1;
        var IE7DocumentMode = (document.documentMode && document.documentMode == 7);
        return (IE7BrowserMode || IE7DocumentMode);
    }

    function GetInternetExplorerVersion()
    // Returns the version of Internet Explorer or a -1 for other browsers.
    {
        var rv = -1;
        if (navigator.appName == 'Microsoft Internet Explorer') {
            var ua = navigator.userAgent;
            var re = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
            if (re.exec(ua) != null)
                rv = parseFloat(RegExp.$1);
        }
        return rv;
    }
    </script>
</head>

<body id="hlcBody" onbeforeunload="" class="">
    <form name="Form1" method="post" action="./SiteMap.aspx" id="Form1">
        <div id="ph" class="ph">
        </div>
        <nav class="nav-account">
            <div class="identity txxs">&nbsp;&nbsp;&nbsp;Test Manager&nbsp;<span class="pipe-egg">|</span>&nbsp;General Hospital&nbsp;|&nbsp;<a href="/HLC/Login/LoginSelect.aspx?CurrentOrganizationID=072d25dd-c9a9-e111-b22e-0015171c1a75&amp;CurrentUserID=9cf205e2-b066-e511-b711-005056b15b8c">Administrator</a></div>
            <a href="#" class="btn btn-default btn-xs pull-right">Logout</a>
        </nav>
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
                        <li><a accesskey="V" onfocus="af(event);" href="/HLC/Admin/Services/ServicesMainMenu.aspx" title="Access additional HealthStream products and services. Use Alt-V to access via keyboard." class="nt" id="AS"><span class="wrap"><span class="innerWrap">Services</span></span></a></li>
                        <li><a accesskey="I" onfocus="af(event);" href="/HLC/Admin/MyProfile/MyProfileMainMenu.aspx" title="Manage profile information and preferences. Use Alt-I to access via keyboard." class="nt" id="AMP"><span class="wrap"><span class="innerWrap">My Profile</span></span></a></li>

                    </ul>
                </div>
                <div class="nb" style="content:'';clear:both;display:block;">
                </div>
            </div>
        </div>
        <div id="siteMapDiv" class="occ brdr">
            <div id="validationSummary" class="vale" style="display:none;">
            </div>
            <table width="100%">
                <tr>
                    <td class="af vlst">
                        <h5 id="smh3">People</h5>
                        <ul id="smul" class="txs">
                            <li id="manS">
                                <h4>Student Management</h4>
                            </li>
                            <li id="addS"><a href="/HLC/Admin/People/StudentEditor.aspx">Add a Student</a></li>
                            <li id="acqS">
                                <a id="lnkAcquireStudent" href="javascript:__doPostBack(&#39;lnkAcquireStudent&#39;,&#39;&#39;)">Acquire a Student</a>
                            </li>
                            <li id="editS">
                                <a id="lnkEditExistingStudent" href="javascript:__doPostBack(&#39;lnkEditExistingStudent&#39;,&#39;&#39;)">Manage Students</a></li>
                            <!--<li id="addCS">
                                    <A href="/HLC/Admin/People/CommunityStudentEditor.aspx">Add a Community Student</A></li>-->
                            <!--<li id="editCS">
                                    <a id="lnkEditExistingCommunityStudent" href="javascript:__doPostBack(&#39;lnkEditExistingCommunityStudent&#39;,&#39;&#39;)">Manage Community Students</a>
                                </li>-->
                            <li id="manSGR">
                                <br>
                                <h4>Student Group Management </h4>
                            </li>
                            <li id="addSGR">
                                <a id="lnkAddEditStudentGroup" href="javascript:__doPostBack(&#39;lnkAddEditStudentGroup&#39;,&#39;&#39;)">Add a Student Group</a></li>
                            <li id="editSGR">
                                <a id="lnkEditStudentGroup" href="javascript:__doPostBack(&#39;lnkEditStudentGroup&#39;,&#39;&#39;)">Manage Student Groups</a></li>
                            <li id="manAdmn">
                                <br>
                                <h4>Administrator Management</h4>
                            </li>
                            <li id="addA"><a href="/HLC/Admin/People/AdminEditor.aspx">Add an Administrator</a></li>
                            <li id="acqA">
                                <a id="lnkAcquireAdministrator" href="javascript:__doPostBack(&#39;lnkAcquireAdministrator&#39;,&#39;&#39;)">Acquire an Administrator</a>
                            </li>
                            <li id="editA">
                                <a id="lnkEditExistingAdministrator" href="javascript:__doPostBack(&#39;lnkEditExistingAdministrator&#39;,&#39;&#39;)">Manage Administrators</a></li>
                            <li id="liViewHealthStreamIdAccount">
                            </li>
                        </ul>
                        <h5 id="cmh3">Courses</h5>
                        <ul id="cmul" class="txs">
                            <li id="cmli">
                                <h4>Course Management</h4>
                            </li>
                            <li id="acli"><a href="/hlc/admin/courses/CourseBuilder/CourseProperties.aspx">Add a Course</a></li>
                            <li id="ecli">
                                <a id="btnEditCourse" href="javascript:__doPostBack(&#39;btnEditCourse&#39;,&#39;&#39;)">Manage Courses</a></li>
                            <li id="acgli"><a href="/HLC/Admin/Courses/CourseGroupEditor.aspx">Create Course Bundle</a></li>
                            <li id="ecgli"><a href="/HLC/Common/Course/CourseGroupSearch.aspx">Manage Course Bundles</a></li>
                            <li id="annli">
                                <a id="btnAddAnnotation" href="javascript:__doPostBack(&#39;btnAddAnnotation&#39;,&#39;&#39;)">Add Course Annotation</a></li>
                            <li id="ennli">
                                <a id="btnAnnotationManagement" href="javascript:__doPostBack(&#39;btnAnnotationManagement&#39;,&#39;&#39;)">Manage Course Annotations</a></li>
                            <li id="mceli">
                                <a href="/HLC/Admin/Courses/ManageChecklistEvaluators.aspx">Manage Checklist Evaluators</a></li>
                            <li id="catmli">
                                <br>
                                <h4>Category Management</h4>
                            </li>
                            <li id="acatli"><a href="/hlc/admin/courses/categorization/categoryeditor.aspx?m=4F009B9D-C6E6-4739-9516-9105C421CDCE">Add a Category</a></li>
                            <li id="ecatli"><a href="/hlc/admin/courses/categorization/categoryeditor.aspx">Manage Categories</a></li>
                            <li id="Li4">
                                <br>
                                <h4>CE Credit Management</h4>
                            </li>
                            <li id="acertli"><a href="/hlc/admin/courses/accreditationmanagement/certificateeditor.aspx">Add a Certificate Template</a></li>
                            <li id="ecertli"><a href="/hlc/admin/courses/accreditationmanagement/CertificateTemplateSelector.aspx">Manage Certificate Templates</a></li>
                            <li id="acpli"><a href="/hlc/admin/courses/AccreditationManagement/CourseProviderEditor.aspx">Add a Course Provider</a></li>
                            <li id="ecpli"><a href="/hlc/admin/courses/AccreditationManagement/CourseProviderMainMenu.aspx">Manage Course Providers</a></li>
                            <li id="aabli"><a href="/hlc/admin/courses/AccreditationManagement/AccreditingBodyEditor.aspx">Add an Accrediting/Approving Body</a></li>
                            <li id="eabli"><a href="/hlc/admin/courses/AccreditationManagement/AccreditingBodyMainMenu.aspx">Manage Accrediting/Approving Bodies</a></li>
                            <li id="curmgmt">
                                <br>
                                <h4>Curriculum Management</h4>
                            </li>
                            <li id="accli"><a href="/hlc/admin/courses/CourseBuilder/CurriculumProperties.aspx">Add a Curriculum</a></li>
                            <li id="amocccli">
                                <a href="/hlc/admin/courses/CourseBuilder/MocCurriculumProperties.aspx">Add an MOC Curriculum</a></li>
                            <li id="eccli">
                                <a id="btnEditCurriculumCourse" href="javascript:__doPostBack(&#39;btnEditCurriculumCourse&#39;,&#39;&#39;)">Manage Curricula</a></li>
                            <li id="aecli"><a href="/hlc/admin/courses/CourseBuilder/CourseEquivalentProperties.aspx">Add an Equivalent</a></li>
                            <li id="eecli">
                                <a id="btnEditEquivalentCourse" href="javascript:__doPostBack(&#39;btnEditEquivalentCourse&#39;,&#39;&#39;)">Manage Equivalents</a></li>
                            <li id="cctli">
                                <br>
                                <h4>Course Creation Tools</h4>
                            </li>
                            <li id="hsvli">
                                <a onclick="document.getElementById(&#39;Form1&#39;).target =&#39;_blank&#39;;" id="lnkHstmVideo" href="javascript:__doPostBack(&#39;lnkHstmVideo&#39;,&#39;&#39;)">HealthStream Video</a></li>
                            <li id="tali"><a href="/HLC/Admin/Courses/LaunchTeamAuthor.aspx" target="_blank">Team Author</a></li>
                            <li id="proli"><a href="/hlc/admin/courses/ADAM.aspx" target="_blank">A.D.A.M. Resource Collection</a></li>
                            <li id="acrli">
                                <br>
                                <h4>Authoring Center Resources</h4>
                            </li>
                            <li id="Li15">
                                <a id="btnCoursewareExchange" href="javascript:__doPostBack(&#39;btnCoursewareExchange&#39;,&#39;&#39;)">Courseware Exchange</a></li>
                            <li id="liec"><a href="/HLC/Admin/Courses/CoursewareExchangeCourses.aspx">Manage Courseware Exchange Courses</a></li>
                            <li id="limac"><a href="/hlc/admin/courses/ManageAuthoringCenterEditor.aspx">Manage Authored Content</a></li>
                            <li id="limFTP"><a href="/hlc/admin/courses/EmailFtpInfo.aspx">Email FTP Account Information</a></li>
                        </ul>
                    </td>
                    <td class="af vlst">
                        <h5 id="amh3">Education</h5>
                        <ul id="amul" class="txs">
                            <li id="Li5">
                                <h4>Assignment Management</h4>
                            </li>
                            <li id="agali"><a href="/HLC/Admin/Education/GroupAssignmentEditor.aspx">Add a Group Assignment</a></li>
                            <li id="egali">
                                <a id="lnkManageGroupAssignment" href="javascript:__doPostBack(&#39;lnkManageGroupAssignment&#39;,&#39;&#39;)">Manage Group Assignments</a></li>
                            <li id="aili">
                                <a id="lnkAddIndivAssignment" href="javascript:__doPostBack(&#39;lnkAddIndivAssignment&#39;,&#39;&#39;)">Add an Individual Assignment</a></li>
                            <li id="acgali"><a href="/HLC/Admin/Education/CertificationAssignmentEditor.aspx">Add a Certification Based Assignment</a></li>
                            <li id="Li6">
                                <br>
                                <h4>Class Management</h4>
                            </li>
                            <li id="Li1">
                                <a id="btnAddClass" href="javascript:__doPostBack(&#39;btnAddClass&#39;,&#39;&#39;)">Add a Class</a></li>
                            <li id="Li2">
                                <a id="btnEditClass" href="javascript:__doPostBack(&#39;btnEditClass&#39;,&#39;&#39;)">Manage Classes</a></li>
                            <li id="calview">
                                <a id="btnCalenderView" href="javascript:__doPostBack(&#39;btnCalenderView&#39;,&#39;&#39;)">View Calendar</a>
                            </li>
                            <li id="bapsli">
                                <br>
                                <h4>BLS/ACLS/PALS Skills</h4>
                            </li>
                            <li id="vgssli"><a href="/HLC/Admin/Education/HeartCodeInstructorInstitutionSelector.aspx">Validate G2015 BLS/ACLS/PALS Student Hands-on Session</a></li>
                            <li id="Li7">
                                <br>
                                <h4>Other Learning Event Management</h4>
                            </li>
                            <li id="aoali"><a href="/HLC/Admin/Education/LearningEventEditor.aspx">Add
                            a Learning Event</a></li>
                            <li id="eoali"><a href="/HLC/Admin/Education/LearningEventSearch.aspx">Manage
                            Learning Events</a></li>
                        </ul>
                        <h5 id="ih3">Reports</h5>
                        <ul id="iul" class="txs">
                            <li id="liRequestTitle">
                                <h4>Request Manager</h4>
                            </li>
                            <li id="rmli"><a href="/HLC/Admin/Reports/RequestManager.aspx">Manage
                            Requests</a>
                            </li>
                            <li id="liDataVisualizations">
                                <br />
                                <h4>Control Centers &amp; Data Visualizations</h4>
                            </li>
                            <li id="cali"><a href="http://controlcenter.healthstream.com/knowledgeq?orgId=072d25dd-c9a9-e111-b22e-0015171c1a75&orgNodeId=6afaafa9-caa9-e111-b22e-0015171c1a75" id="lnkCA">KnowledgeQ&trade;</a></li>
                            <li id="pudli"><a href="https://controlcenter.healthstream.com/precyse/?orgId=072d25dd-c9a9-e111-b22e-0015171c1a75&orgNodeId=6afaafa9-caa9-e111-b22e-0015171c1a75" id="lnkpud">nThrive Education</a></li>
                            <li id="liHSAnalyticsTitle">
                                <br />
                                <h4>HealthStream Analytics</h4>
                            </li>
                            <li id="liccr">
                                <a id="lnkCreateCustomReports" href="javascript:__doPostBack(&#39;lnkCreateCustomReports&#39;,&#39;&#39;)">Create Reports</a></li>
                            <li id="licr">
                                <a id="lnkCustomReports" href="javascript:__doPostBack(&#39;lnkCustomReports&#39;,&#39;&#39;)">View Reports</a>
                            </li>
                            <li id="liReportTitle">
                                <br />
                                <h4>Reports</h4>
                            </li>
                            <li id="A1"><a href="/HLC/Common/Report/reportconfigure.aspx?r=Annotation&d=HLC">Annotations</a></li>
                            <li id="dwascodd"><a href="/HLC/Common/Report/reportconfigure.aspx?r=AssignmentCompletionDrillDown2&d=DW">Assignment Completion - Drill-Through</a></li>
                            <li id="dwasco"><a href="/HLC/Common/Report/reportconfigure.aspx?r=AssignmentCompletion2&d=DW">Assignment Completion - Schedulable</a></li>
                            <li id="adrli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=AssignmentDetailsReport&d=HLC">Assignment Structure Report</a> </li>
                            <li id="ccc"><a href="/HLC/Common/Report/reportconfigure.aspx?r=CECreditCourses&amp;d=HLC">CE Credit Courses</a></li>
                            <li id="dwcsda"><a href="/HLC/Common/Report/reportconfigure.aspx?r=TQA2&amp;d=DW&type=524288">Checklist Task Analysis</a></li>
                            <li id="clscli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=ClassContacts&d=HLC">Class Contacts</a></li>
                            <li id="cgsbc"><a href="/HLC/Common/Report/reportconfigure.aspx?r=ClassGradingStatusByCourse&d=HLC">Class Grading Status by Course</a></li>
                            <li id="cgsba"><a href="/HLC/Common/Report/reportconfigure.aspx?r=ClassGradingStatusByAdministrator&d=HLC">Class Grading Status by Administrator</a></li>
                            <li id="crs"><a href="/HLC/Common/Report/reportconfigure.aspx?r=ClassRegistrationStatus&d=HLC">Class Registration Status</a></li>
                            <li id="crli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=ClassSignInAndRoster&d=HLC">Class Roster and Sign-In Sheet</a></li>
                            <li id="dwde"><a href="/HLC/Common/Report/reportconfigure.aspx?r=DataExport&d=DW">Completion Data Export</a></li>
                            <li id="dwCA"><a href="/HLC/Common/Report/reportconfigure.aspx?r=CourseActivity&d=DW">Course Activity</a></li>
                            <li id="Li3"><a href="/HLC/Common/Report/reportconfigure.aspx?r=CourseCertificate&d=HLC">Course Certificates</a></li>
                            <li id="dwcocodd"><a href="/HLC/Common/Report/reportconfigure.aspx?r=CourseCompletionDrillDown&d=DW">Course Completion - Drill-Through</a></li>
                            <li id="dwcoco"><a href="/HLC/Common/Report/reportconfigure.aspx?r=CourseCompletion2&d=DW">Course Completion - Schedulable</a></li>
                            <li id="cdsli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=CourseDevelopmentStatus&d=HLC">Course Development Status</a></li>
                            <li id="cLi"><a href="/HLC/Common/Report/reportconfigure.aspx?r=courselisting&d=HLC">Course Listing</a></li>
                            <li id="dbsli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=DailyBuildingSchedule&amp;d=HLC">Daily Building Schedule</a></li>
                            <li id="drsli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=DailyRoomSchedule&d=HLC">Daily Room Schedule</a></li>
                            <li id="dwdelindd"><a href="/HLC/Common/Report/reportconfigure.aspx?r=DelinquencyDrillDown&d=DW">Delinquent&#47;Past Due - Drill-Through</a></li>
                            <li id="dwdelin"><a href="/HLC/Common/Report/reportconfigure.aspx?r=Delinquency2&d=DW">Delinquent&#47;Past Due - Schedulable</a></li>
                            <li id="dlli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=DepartmentListing&d=HLC">Department Listing</a></li>
                            <li id="duli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=DepartmentUtilization&d=HLC">Department Utilization</a></li>
                            <li id="discli">
                                <a id="lnkbtnDiscipline" href="javascript:__doPostBack(&#39;lnkbtnDiscipline&#39;,&#39;&#39;)">Discipline Listing</a></li>
                            <li id="dweacomp"><a href="/HLC/Common/Report/reportconfigure.aspx?r=EnterpriseAssignmentCompletion&d=DW">Enterprise Assignment Completion</a></li>
                            <li id="dwECA"><a href="/HLC/Common/Report/reportconfigure.aspx?r=EnterpriseCourseActivity&d=DW">Enterprise Course Activity</a></li>
                            <li id="EntCPr"><a href="/HLC/Common/Report/reportconfigure.aspx?r=EnterpriseProgress&d=DW">Enterprise Learning Progress</a></li>
                            <li id="dwesi2"><a href="/HLC/Common/Report/reportconfigure.aspx?r=EvaluationScores2&d=DW">Evaluation Scores by Course</a></li>
                            <li id="esli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=EvaluationStructure&d=HLC">Evaluation Structure</a></li>
                            <li id="excLi"><a href="/HLC/Common/Report/reportconfigure.aspx?r=Expiringcourses&d=HLC">Expiring Courses</a></li>
                            <li id="dwexli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=ExpiringLicense&d=DW">Expiring License</a></li>
                            <li id="expcertli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=ExpiringCertification&d=DW">Expiring Certification</a></li>
                            <li id="dwfail"><a href="/HLC/Common/Report/reportconfigure.aspx?r=Failure&d=DW">Failed Courses</a></li>
                            <li id="icsli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=InstructorClassSchedule&d=HLC">Instructor Class Schedule</a></li>
                            <li id="irrLi"><a href="/HLC/Common/Report/reportconfigure.aspx?r=InstructorResume&d=HLC">Instructor Resume</a></li>
                            <li id="jtlli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=JobTitleListing&d=HLC">Job Title Listing</a></li>
                            <li id="jtuli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=JobTitleUtilization&d=HLC">Job Title Utilization</a></li>
                            <li id="cPr"><a href="/HLC/Common/Report/reportconfigure.aspx?r=progress&d=DW">Learning Progress</a></li>
                            <li id="nsli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=NoShow&d=HLC">No Show</a></li>
                            <li id="ohli">
                                <a id="btnOrgHierarchy" href="javascript:__doPostBack(&#39;btnOrgHierarchy&#39;,&#39;&#39;)">Organization Hierarchy</a></li>
                            <li id="rfli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=RoleFeatures&d=HLC">Role Features</a></li>
                            <li id="ruli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=RoleUtilization&d=HLC">Role Utilization</a></li>
                            <li id="stavli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=StudentTranscript&d=HLC">Student and Group Transcript</a></li>
                            <li id="dwsasco"><a href="/HLC/Common/Report/reportconfigure.aspx?r=StudentAssignmentCompletion2&amp;d=DW">Student Assignment Completion</a></li>
                            <li id="scirli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=StudentCertificationImportResults&amp;d=HLC">Student Certification Import Results</a></li>
                            <li id="sgrli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=StudentGroupListing2&d=HLC">Student Group</a></li>
                            <li id="sirli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=StudentImportResults2&amp;d=HLC">Student Import Results</a></li>
                            <li id="slli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=StudentListing2&d=HLC">Student Listing</a></li>
                            <li id="testScoresli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=TestScores&d=DW">Test Scores Report</a> </li>
                            <li id="tsli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=TestStructure&d=HLC">Test Structure</a></li>
                            <li id="dwtcc"><a href="/HLC/Common/Report/reportconfigure.aspx?r=TopCourseCompletes&d=DW">Top 10 Completions </a></li>
                            <li id="thsi"><a href="/HLC/Common/Report/reportconfigure.aspx?r=TrainingHoursSummary&d=DW">Training Hours Summary </a></li>
                            <li id="ucli"><a href="/HLC/Common/Report/reportconfigure.aspx?r=UpcomingClass&d=HLC">Upcoming Classes</a></li>
                        </ul>
                    </td>
                    <td class="af vlst">
                        <h5 id="omh3">Tools</h5>
                        <ul id="omul" class="txs">
                            <li id="smli">
                                <h4>Site Management</h4>
                            </li>
                            <li id="athli"><a href="/HLC/Admin/Tools/ThemeEditor.aspx">Add a Theme</a></li>
                            <li id="ethli"><a href="/HLC/Admin/Tools/ThemeSearch.aspx">Manage Themes</a></li>
                            <li id="ahili"><a href="/HLC/Admin/Tools/HighlightEditor.aspx">Add a
                            Highlight</a></li>
                            <li id="ehili"><a href="/HLC/Admin/Tools/HighlightSearch.aspx">Manage
                            Highlights</a></li>
                            <li id="astli"><a href="/HLC/Admin/Tools/ConnectionLinkEditor.aspx">Add My Connections Link</a></li>
                            <li id="estli"><a href="/HLC/Admin/Tools/ConnectionLinkSelector.aspx">Manage My Connections Links</a></li>
                            <br>
                            <br>
                            <li id="Li8">
                                <h4>Organization Management</h4>
                            </li>
                            <li id="eopli"><a href="/HLC/Admin/Tools/CustomerOrganizationEditor.aspx" id="lnkCustOrgEdit">Manage Organization Properties</a></li>
                            <li id="Li9">
                                <br>
                                <h4>Building Management</h4>
                            </li>
                            <li id="abrtli"><a href="/HLC/Admin/Tools/BuildingResourceTypeEditor.aspx">Add a Building Resource Type</a></li>
                            <li id="ebrtli"><a href="/HLC/Admin/Tools/BuildingResourceTypeList.aspx">Manage Building Resource Types</a></li>
                            <li id="abli"><a href="/HLC/Admin/Tools/BuildingEditor.aspx">Add a Building</a></li>
                            <li id="ebli"><a href="/HLC/Admin/Tools/BuildingSearch.aspx">Manage Buildings
                            and Resources</a></li>
                            <li id="Li10">
                                <br>
                                <h4>Institution Management</h4>
                            </li>
                            <li id="adli"><a href="/HLC/Admin/Tools/DepartmentEditor.aspx">Add a
                            Department</a></li>
                            <li id="edli"><a href="/HLC/Admin/Tools/DepartmentSearch.aspx">Manage
                            Departments</a></li>
                            <li id="ajtli"><a href="/HLC/Admin/Tools/JobTitleEditor.aspx">Add a Job
                            Title</a></li>
                            <li id="ejtli"><a href="/HLC/Admin/Tools/JobTitleSearch.aspx">Manage
                            Job Titles</a></li>
                            <li id="ejtmli"><a href="/HLC/Admin/Tools/JobMappings.aspx">Manage Job
                            Title Mappings</a></li>
                            <!--<li id="emoli">
                                    <a href="/HLC/Admin/Tools/CommunityOrderList.aspx">Manage Orders</a></li>-->
                            <!--<li id="ecsc">
                                    <a href="/HLC/Community/Admin/SearchConfig.aspx">Community Search Configuration</a></li>-->
                            <!--<li id="emp">
                                    <a href="/HLC/Admin/Tools/ProviderList.aspx">Manage Providers</a></li>-->
                            <li id="malist">
                                <br>
                                <h4>Alerts Management</h4>
                                <li id="mali">
                                    <a id="lnkManageAlerts" href="javascript:__doPostBack(&#39;lnkManageAlerts&#39;,&#39;&#39;)">Manage Alert Subscriptions</a></li>
                                <li id="matli"><a href="/HLC/Admin/Tools/AlertTemplatesSelector.aspx">Manage Alert Templates</a></li>
                                <li id="msds">
                                    <a id="lnkManageSummaryDeliverySchedule" href="javascript:__doPostBack(&#39;lnkManageSummaryDeliverySchedule&#39;,&#39;&#39;)">Manage Summary Delivery Schedule</a></li>
                            </li>
                        </ul>
                        <h5 id="opsh3">Services</h5>
                        <ul id="opsul" class="txs">
                            <li id="ctkli">
                                <a href="http://community.healthstream.com/wound_care_resource_center/default.aspx" target="_blank" title="Connect2Know Wound Care Resource Center.">Connect2Know Wound Care Resource Center
                                </a>
                            </li>
                            <li id="ibli"><a href="http://www.healthstream.com/enhance/" target="_blank" title="Submit an enhancement request.">Idea Box</a></li>
                            <li><a target="_blank" href="http://catalog.healthstream.com">Course Library</a>
                                <li><a target="_blank" href="http://www.healthstream.com/products_index.htm">Products
                                and Services</a>
                                    <li><a target="_blank" href="http://www.healthstream.com/aboutHSTM.htm">About Us</a></li>
                                    <li id="lish"><a href="javascript:RH_ShowMeHow(0,'http://www.healthstream.com/hlchelp/AdministratorHLCSimManager/Administrator.htm>HLC_Window',HH_DISPLAY_SEARCH,0);" id="aSearchOnline">Search Online Help</a></li>
                                    <li id="liug"><a href="javascript:RH_ShowMeHow(0,'http://www.healthstream.com/hlchelp/AdministratorHLCSimManager/Administrator.htm>HLC_Window',HH_HELP_CONTEXT,0);" id="aUserGuide">User Guides</a></li>
                        </ul>
                        <h5 id="ch5">Assessments</h5>
                        <ul id="mtul" class="txs">
                            <li>
                                <h4 id="mth3">Manage Tools</h4>
                            </li>
                            <li id="licat">
                                <a id="lnkSearchCategory" href="HAC/CategoryEditor.aspx">Categories</a></li>
                        </ul>
                        <ul id="ulmbb" class="txs">
                            <li>
                                <h4 id="hmbb">Manage Building Blocks</h4>
                            </li>
                            <li id="lijd">
                                <a id="lnkJobDescriptions" href="javascript:__doPostBack(&#39;lnkJobDescriptions&#39;,&#39;&#39;)">Job Descriptions</a></li>
                            <li id="list">
                                <a id="lnkSearchStatement" href="javascript:__doPostBack(&#39;lnkSearchStatement&#39;,&#39;&#39;)">Statements</a></li>
                            <li id="lirss">
                                <a id="lnkSearchRatingScale" href="javascript:__doPostBack(&#39;lnkSearchRatingScale&#39;,&#39;&#39;)">Rating Scales</a></li>
                            <li id="ligo">
                                <a id="lnkSearchGoals" href="javascript:__doPostBack(&#39;lnkSearchGoals&#39;,&#39;&#39;)">Goals</a></li>
                            <li id="lirs">
                                <a id="lnkSearchResource" href="javascript:__doPostBack(&#39;lnkSearchResource&#39;,&#39;&#39;)">Resources</a></li>
                        </ul>
                        <ul id="ulmt" class="txs">
                            <li>
                                <h4 id="hmt">Manage Templates
                                </h4>
                            </li>
                            <li id="liatc">
                                <a id="lnkTemplateConfiguration" href="javascript:__doPostBack(&#39;lnkTemplateConfiguration&#39;,&#39;&#39;)">Assessment Template Configuration</a></li>
                            <li id="lit">
                                <a id="lnkSearchTemplates" href="javascript:__doPostBack(&#39;lnkSearchTemplates&#39;,&#39;&#39;)">Assessment Templates</a></li>
                        </ul>
                        <ul id="hcclifa" class="txs">
                            <li>
                                <h4 id="fa">Manage Assignments</h4>
                            </li>
                            <li id="hcclimga">
                                <a id="lnkBtnManageGroupAssignment" href="javascript:__doPostBack(&#39;lnkBtnManageGroupAssignment&#39;,&#39;&#39;)">Group Assignments</a></li>
                            <li id="hccliaia">
                                <a id="lnkBtnAddIndivAssignment" href="javascript:__doPostBack(&#39;lnkBtnAddIndivAssignment&#39;,&#39;&#39;)">Individual Assignments</a></li>
                            <li id="hcclimarp">
                                <a id="lnkBtnManageAlternateRaterAndPeer" href="javascript:__doPostBack(&#39;lnkBtnManageAlternateRaterAndPeer&#39;,&#39;&#39;)">Alternate Rater & Peers</a></li>
                            <li id="hcclimda">
                                <a id="lnkBtnManageDynamicAssessments" href="javascript:__doPostBack(&#39;lnkBtnManageDynamicAssessments&#39;,&#39;&#39;)">Dynamic Assessments</a>
                            </li>
                            <li id="hcclima">
                                <a id="lnkBtnManageApprovals" href="javascript:__doPostBack(&#39;lnkBtnManageApprovals&#39;,&#39;&#39;)">Approvals</a>
                            </li>
                        </ul>
                        <ul id="ulmc" class="txs">
                            <li>
                                <h4 id="hmc">Manage Libraries</h4>
                            </li>
                            <li id="slijdl">
                                <a id="lnkJobDescriptionLibraries" href="javascript:__doPostBack(&#39;lnkJobDescriptionLibraries&#39;,&#39;&#39;)">Job Description Libraries</a></li>
                            <li id="sliml">
                                <a id="lnkManageLibraries" href="javascript:__doPostBack(&#39;lnkManageLibraries&#39;,&#39;&#39;)">Statement Libraries</a></li>
                            <li id="slirs">
                                <a id="lnkRatingScaleLibraries" href="javascript:__doPostBack(&#39;lnkRatingScaleLibraries&#39;,&#39;&#39;)">Rating Scale Libraries</a></li>
                            <li id="slirsl">
                                <a id="lnkResourceLibrary" href="javascript:__doPostBack(&#39;lnkResourceLibrary&#39;,&#39;&#39;)">Resource Libraries</a></li>
                            <li id="sliatl">
                                <a id="lnkAssessmentTemplateLibraries" href="javascript:__doPostBack(&#39;lnkAssessmentTemplateLibraries&#39;,&#39;&#39;)">Assessment Template Libraries</a></li>
                            <li id="slicr">
                                <a id="lnkCustomReportsSubscription" href="javascript:__doPostBack(&#39;lnkCustomReportsSubscription&#39;,&#39;&#39;)">Custom Report Libraries</a></li>
                            <li id="slisub">
                                <a id="lnkLibrarySubscriptions" href="javascript:__doPostBack(&#39;lnkLibrarySubscriptions&#39;,&#39;&#39;)">Library Subscriptions</a></li>
                        </ul>
                        <h5 id="poh3">My Profile</h5>
                        <ul id="poul" class="txs">
                            <li id="maili"><a href="/HLC/Common/People/UserInformation.aspx">Manage
                            Account Information</a></li>
                            <li id="irli"><a href="/HLC/Admin/MyProfile/AdminResume.aspx">Manage
                            Instructor Resume</a></li>
                            <li id="bali"><a href="/HLC/Admin/MyProfile/AdminAddress.aspx">Manage
                            Business Address</a></li>
                            <li id="spli"><a href="/HLC/Admin/MyProfile/AdminSettings.aspx">Manage
                            System Preferences</a></li>
                            <li id="myali">
                                <a id="lnkMyAlerts" href="javascript:__doPostBack(&#39;lnkMyAlerts&#39;,&#39;&#39;)">Manage Alerts</a></li>
                        </ul>
                    </td>
                    <td class="vlst promo">
                        <div id="pR_p">
                            <div><a href="http://community.healthstream.com/" target="_blank"><img style="margin-bottom: 10px; vertical-align: middle;" alt="Enter the HealthStream Community" src="admin-assets/images/BTN-Community-2017-Ask-Share-Learn.png" /></a></div>
                            <div><a href="/HLC/Common/Promotion.aspx?promotionID=7342bc54-0db4-e711-98a4-005056b15b7f "><img alt="" src="admin-assets/images/01512154_WebinarSeries_HLC_v1.png" /></a></div>
                            <div><a href="/HLC/Common/Promotion.aspx?promotionID=155ce937-80ba-e711-8149-005056b1394b%20" target="_blank"><img alt="" style="border-width: 0px; border-style: solid;" src="admin-assets/images/Q4_17_ProvAdv_HLC.png" /></a></div>
                        </div>
                        <!--
                        <ul class="ts">
                            <li>
                                <a href="">Show Me How Index</a></li>
                        </ul>
                        -->
                    </td>
                </tr>
            </table>
        </div>
        <aside class="offsidebar">
            <!-- START Off Sidebar (right)-->
            <nav>
                <div role="tabpanel">
                    <!-- Nav tabs-->
                    <ul role="tablist" class="nav nav-tabs nav-justified">
                        <li role="presentation" class="active">
                            <a href="#notifications" aria-controls="app-settings" role="tab" data-toggle="tab">
                                <!-- <em class="icon-equalizer fa-lg"></em> -->
                                Notifications
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#alerts" aria-controls="app-chat" role="tab" data-toggle="tab">
                                <!-- <em class="icon-user fa-lg"></em> -->
                                Alerts
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes-->
                    <div class="tab-content">
                        <div id="notifications" role="tabpanel" class="tab-pane fade in active">
                            <div style="display:table;width:100%;height:100%;">
                                <div style="display:table-cell;width:150px;" class="type-filter">
                                    <div style="padding:20px 20px 0 20px;font-weight:700;">Show:</div>
                                    <div class="checkbox c-checkbox">
                                        <label>
                                            <input type="checkbox" checked="" value="new">
                                            <span class="fa fa-check"></span> What's New?</label>
                                    </div>
                                    <div class="checkbox c-checkbox">
                                        <label>
                                            <input type="checkbox" checked="" value="courseware">
                                            <span class="fa fa-check"></span> Courseware</label>
                                    </div>
                                    <div class="checkbox c-checkbox">
                                        <label>
                                            <input type="checkbox" value="system">
                                            <span class="fa fa-check"></span> System</label>
                                    </div>
                                    <div class="checkbox c-checkbox">
                                        <label>
                                            <input type="checkbox" checked="" value="feedback">
                                            <span class="fa fa-check"></span> Feedback</label>
                                    </div>
                                </div>
                                <div style="display:table-cell;padding:20px;height:100%;">
                                    <div class="message-wrapper ">
                                        <div class="notification " data-type="system" style="display:none;">
                                            <h3 class="notification-date ">November 2, 2017</h3>
                                            <h2 class="notification-title ">System Downtime</h2>
                                            <div class="label label-warning">system</div>
                                            <div class="notification-lead ">
                                                Scheduled Downtime on 11/15/2017!</div>
                                            <a href="# " class="notification-link ">Read more</a>
                                        </div>
                                        <div class="notification " data-type="feedback">
                                            <h3 class="notification-date ">November 1, 2017</h3>
                                            <h2 class="notification-title ">Feedback Opportunity: Your Neonatal Training Needs</h2>
                                            <div class="label label-info">feedback</div>
                                            <div class="notification-lead ">
                                                Would your organization benefit from neonatal post-resuscitation/pre-transport stabilization courseware; why or why not? Please click here to complete our short survey (less than 10 questions). Thank you in advance for your time!</div>
                                            <a href="# " class="notification-link ">Complete the survey</a>
                                        </div>
                                        <div class="notification " data-type="system" style="display:none;">
                                            <h3 class="notification-date ">October 31, 2017</h3>
                                            <h2 class="notification-title ">Expected this Winter: HLC Search Improvements</h2>
                                            <div class="label label-warning">system</div>
                                            <p class="notification-lead ">We're improving our top-level categories and related search functionality, so HealthStream Learning Center (HLC) users can more easily access courses. </p>
                                            <a href="# " class="notification-link ">Read more</a>
                                        </div>
                                        <div class="notification " data-type="new">
                                            <h3 class="notification-date ">October 13, 2017</h3>
                                            <h2 class="notification-title ">Quarterly Courseware Update</h2>
                                            <div class="label label-success">what's new</div>
                                            <p class="notification-lead ">We estimate you will see 32 new nursing and allied health courses, 56 courses renewed, and 19 courses retiring (numbers subject to change throughout the quarter).</p>
                                            <a href="# " class="notification-link ">Review the list of course changes</a>
                                        </div>
                                        <div class="notification " data-type="courseware">
                                            <h3 class="notification-date ">October 10, 2017 </h3>
                                            <h2 class="notification-title ">Expiring Next Month: EMF Series Versions</h2>
                                            <div class="label label-purple">courseware</div>
                                            <p class="notification-lead ">We have completed the annual review and content update for our Electronic Fetal Monitoring (EFM) Series. The current course versions expire on December 1, 2017. In-progress students must complete by this date; otherwise, you must unenroll/re-enroll to complete the new course version from the beginning. As of October 1, 2017, enrolled students that had not accessed the module from their To-Do Lists received the new course version. </p>
                                            <a href="# " class="notification-link ">Read more</a>
                                        </div>
                                        <div class="notification " data-type="courseware">
                                            <h3 class="notification-date ">October 5, 2017 </h3>
                                            <h2 class="notification-title ">Expected Next Month: Enhanced ECCO Courses</h2>
                                            <div class="label label-purple">courseware</div>
                                            <p class="notification-lead ">The new course versions for Essentials of Critical Care Orientation (ECCO) 3.0 will be available next week, November 9. Students in progress will remain enrolled in the current version of any courses started prior to November 9. After this date, the new course versions will be automatically displayed. </p>
                                            <a href="# " class="notification-link ">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="alerts" role="tabpanel " class="tab-pane fade alerts-panel">
                            <div style="display:table;width:100%;height:100%;">
                                <div style="display:table-cell;width:100%;">
                                    <div class="message-wrapper ">
                                        <div class="alert ">
                                            <div class="alert-status"><i class="fa fa-circle text-primary"></i></div>
                                            <h3 class="alert-date ">11/02/2017</h3>
                                            <h2 class="alert-title "><a href="#">HealthStream Alerts</a></h2>
                                        </div>
                                        <div class="alert read">
                                            <div class="alert-status"></div>
                                            <h3 class="alert-date ">10/31/2017</h3>
                                            <h2 class="alert-title "><a href="#">HealthStream Alerts</a></h2>
                                        </div>
                                        <div class="alert ">
                                            <div class="alert-status"><i class="fa fa-circle text-primary"></i></div>
                                            <h3 class="alert-date ">10/29/2017</h3>
                                            <h2 class="alert-title "><a href="#">Assessment - Employee Signature Required</a></h2>
                                        </div>
                                        <div class="alert ">
                                            <div class="alert-status"><i class="fa fa-circle text-danger"></i></div>
                                            <h3 class="alert-date ">10/20/2017</h3>
                                            <h2 class="alert-title "><a href="#">HealthStream Alerts</a></h2>
                                        </div>
                                        <div class="alert ">
                                            <div class="alert-status"><i class="fa fa-circle text-primary"></i></div>
                                            <h3 class="alert-date ">10/02/2017</h3>
                                            <h2 class="alert-title "><a href="#">HealthStream Alerts</a></h2>
                                        </div>
                                        <div class="alert ">
                                            <div class="alert-status"><i class="fa fa-circle text-primary"></i></div>
                                            <h3 class="alert-date ">9/30/2017</h3>
                                            <h2 class="alert-title "><a href="#">HealthStream Alerts</a></h2>
                                        </div>
                                        <div class="alert read">
                                            <div class="alert-status"></div>
                                            <h3 class="alert-date ">9/29/2017</h3>
                                            <h2 class="alert-title "><a href="#">Assessment - Employee Signature Required</a></h2>
                                        </div>
                                        <div class="alert ">
                                            <div class="alert-status"><i class="fa fa-circle text-primary"></i></div>
                                            <h3 class="alert-date ">9/20/2017</h3>
                                            <h2 class="alert-title "><a href="#">HealthStream Alerts</a></h2>
                                        </div>
                                        <div class="alert ">
                                            <div class="alert-status"><i class="fa fa-circle text-primary"></i></div>
                                            <h3 class="alert-date ">9/02/2017</h3>
                                            <h2 class="alert-title "><a href="#">HealthStream Alerts</a></h2>
                                        </div>
                                        <div class="alert ">
                                            <div class="alert-status"><i class="fa fa-circle text-primary"></i></div>
                                            <h3 class="alert-date ">8/30/2017</h3>
                                            <h2 class="alert-title "><a href="#">HealthStream Alerts</a></h2>
                                        </div>
                                        <div class="alert ">
                                            <div class="alert-status"><i class="fa fa-circle text-primary"></i></div>
                                            <h3 class="alert-date ">8/29/2017</h3>
                                            <h2 class="alert-title "><a href="#">Assessment - Approval Required</a></h2>
                                        </div>
                                        <div class="alert ">
                                            <div class="alert-status"><i class="fa fa-circle text-primary"></i></div>
                                            <h3 class="alert-date ">8/20/2017</h3>
                                            <h2 class="alert-title "><a href="#">Assessment - Employee Signature Required</a></h2>
                                        </div>
                                        <div class="alert ">
                                            <div class="alert-status"><i class="fa fa-circle text-primary"></i></div>
                                            <h3 class="alert-date ">8/02/2017</h3>
                                            <h2 class="alert-title "><a href="#">Assessment - Employee Signature Required</a></h2>
                                        </div>
                                        <div class="alert ">
                                            <div class="alert-status"><i class="fa fa-circle text-primary"></i></div>
                                            <h3 class="alert-date ">7/31/2017</h3>
                                            <h2 class="alert-title "><a href="#">HealthStream Alerts</a></h2>
                                        </div>
                                        <div class="alert ">
                                            <div class="alert-status"><i class="fa fa-circle text-primary"></i></div>
                                            <h3 class="alert-date ">7/29/2017</h3>
                                            <h2 class="alert-title "><a href="#">Assessment - Approval Required</a></h2>
                                        </div>
                                        <div class="alert ">
                                            <div class="alert-status"><i class="fa fa-circle text-primary"></i></div>
                                            <h3 class="alert-date ">7/20/2017</h3>
                                            <h2 class="alert-title "><a href="#">HealthStream Alerts</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </nav>
            <!-- END Off Sidebar (right)-->
        </aside>
        <div id="pf" class="pf">
            <div class="sm">
                Questions? Concerns? Contact HealthStream Customer Service.
            </div>
            <div class="txxs">
                <a target="_blank" href="http://www.healthstream.com/" id="pf-logo">
                <img border="0" src="admin-assets/images/hstmLogo.gif"></a>&nbsp;Copyright © 2017 HealthStream, Inc. All Rights Reserved.
                <br>Build 13.01.28.895.435&nbsp;&nbsp;Nov 2 2017 1:25 PM CT
                <br>
                <br>AO:56716
            </div>
        </div>
    </form>
</body>

</html>