<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html>

<head>
    <title>Add Interval Plan | hStream Resuscitate</title>
    <meta name="GENERATOR" content="Microsoft Visual Studio .NET 7.1">
    <meta name="CODE_LANGUAGE" content="C#">
    <meta name="vs_defaultClientScript" content="JavaScript">
    <meta name="vs_targetSchema" content="http://schemas.microsoft.com/intellisense/ie5">

    <!-- ====================== STYLE SHEETS ====================== -->
    <link rel="SHORTCUT ICON" href="admin-assets/images/healthstream-favicon.ico" />
    <link href="admin-assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/font-awesome.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/font-awesome-animation.css" type="text/css" rel="stylesheet">
    <link href="content/styles/healthstream.bootstrap.css" rel="stylesheet" type="text/css">
    <link href="content/styles/healthstream.app.css" type="text/css" rel="stylesheet">
    <link href="content/styles/healthstream.plugins.css" type="text/css" rel="stylesheet">
    <link href="content/styles/healthstream.prototype.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/notifications.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/sitemap.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/Common/css.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/site.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/stickybar.css" type="text/css" rel="stylesheet">
    <link href="getorgchart/getorgchart.css" type="text/css" rel="stylesheet" >
    <link href="admin-assets/css/override-blue-1.css" type="text/css" rel="stylesheet">
  

    <style>#ph, .ph { background: #fff url('admin-assets/images/logo-General_Hospital-large.png') 15px center no-repeat; border-top: 3px solid #094579; }
    </style>
    <style>#mb .nb, .mb .nb { background: #094579; border-top-color: #073761; } #pf, .fp { border-top-color: #073761; } #pf .sm, .fp .sm { background: #094579; }</style>
        
    <!-- ====================== IE7/8 copied from other prototypes ====================== -->
    <script src="admin-assets/js/jquery.js"></script>

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
    <form name="IntervalForm" method="post" action="./SiteMap.aspx" id="IntervalForm">
        <div id="ph" class="ph">
        </div>
        <table class width ="100%" border="0" cellpadding="0" cellspacing="0" id="identity-bar">
            <tbody>
                <tr>
                    <td height="23" class="txxs">
                        &nbsp;&nbsp;&nbsp;Test Manager&nbsp;
                        <span class="pipe-egg">|</span>
                        &nbsp;General Hospital&nbsp;|&nbsp;
                        <a href="/HLC/Login/LoginSelect.aspx?CurrentOrganizationID=072d25dd-c9a9-e111-b22e-0015171c1a75&amp;CurrentUserID=9cf205e2-b066-e511-b711-005056b15b8c">Administrator</a>
                    </td>
                    <td align="right" class="txxs">
                        <a href="/HLC/Admin/SiteMap.aspx" class="nl" title="Site map containing links to all features. Use Alt-8 to access via keyboard." accesskey="8"><i class="fa fa-sitemap" border="0" alt="Site map containing links to all features. Use Alt-8 to access via keyboard."></i>&nbsp;Site Map</a>
                        &nbsp;<a href="#" class="nl" onclick="return sh();" title="Access help on the HLC. Use Alt-H to access via keyboard." accesskey="H"><i class="fa fa-question-circle" border="0" alt="Access help on the HLC. Use Alt-H to access via keyboard."></i> Help</a>
                    </td>
                    <td valign="top" width="10%" align="left">
                    <a href="/HLC/Login/Logout.aspx?organizationID=072d25dd-c9a9-e111-b22e-0015171c1a75&amp;organizationNodeID=6afaafa9-caa9-e111-b22e-0015171c1a75" alt="logout" id="identity-logout"></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div id="mb"><!--main navbar start-->
            <div id="mb_n" class="nm tabs txs">
                <div class="levelwrap level1">
                    <ul>
                        <li><a accesskey="O" onfocus="af(event);" href="/HLC/Admin/People/PeopleMainMenu.aspx" title="Manage students, student groups, administrators, and roles. Use Alt-O to access via keyboard." class="nt" id="AP"><span class="wrap"><span class="innerWrap">People</span></span></a></li>
                        <li><a accesskey="C" onfocus="af(event);" href="/HLC/Admin/Courses/CourseMainMenu.aspx" title="Manage courses, accreditations, categories, and class scheduling. Use Alt-C to access via keyboard." class="nts" id="AC"><span class="wrap"><span class="innerWrap">Courses</span></span></a></li>
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
        </div><!--main navbar end-->

        <div class="primary-content container-fluid"><!--container-->
            <div class="row greyLine"><!--TITLE ROW start-->
                <div class="col-md-8 title-bar">
                    <h4>hStream Resuscitate</h4>
                    <h1>Add Interval Plan</h1>
                </div>
                <div class="col-md-4 add-rtn">
                    <a id="featureTitle_lbCancel_Dyn" class="rp" href="/"><img border="0" src="./../admin-assets/images/Override/ArrowLeft_Admin.png" alt="Back">Return to Interval Plans</a>
                </div>
            </div><!--end title row-->

            <main class="row display-flex">
            <section id="intervalPlanForm" class="col-md-8 p-int"><!-- left column, form with dial -->
                <form>
                    <div class="form-group row pl-lg pr-lg">
                        <label for="groupPlanName" class="control-label">Group Plan Name</label>
                        <input type="text" class="form-control" id="groupPlanName">
                    </div>
                    <div class="form-group row pb-xl dash">
                        <div class="col-12 col-md-6">
                            <label for="certifyingBody" class="control-label">Certifying Body</label>
                            <select class="form-control" id="certifyingBody">
                                <option value="CP1" data-name="Content Partner One" selected>Content Partner One</option>
                                <option value="CP2" data-name="Content Partner Two">Content Partner Two</option>
                                <option value="CP3" data-name="Content Partner Three">Content Partner Three</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="certification" class="control-label">Certification</label>
                            <select class="form-control" id="certification">
                                <option value="ALS" data-name="Advanced Life Support (ALS)">ALS - Advanced Life Support</option>
                                <option value="BLS" data-name="Basic Life Support (BLS)" selected>BLS - Basic Life Support</option>
                                <option value="PALS" data-name="Pediatric Advanced Life Support (PALS)">PALS - Pediatric Advanced Life Support</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row pl-lg pr-lg dash">
                        <label for="dialBlock" class="control-label">How often should learning activities be assigned?</label>
                        <p class="instructions pb-lg">Choose the optimal interval for the selected learners:</p>
                        <div id="dialBlock" class="pb-sm pl-xl pr-xl col-6 col-offset-3">
                            <div id="dialArc" class="text-center block row">
                                <input class="knob" data-angleOffset=-90 data-angleArc=180 data-fgColor="#26B7FB" data-width="250" data-cursor="true" data-rotation="clockwise" data-step="1" data-min="0.7" data-max="4.3" value="1" readonly="readonly">
                            </div>
                            <div id="dialRadios" class="text-center block row mb-xl">
                                <input id="1_3_Month" name="monthOptions" type="radio" checked>
                                <label for="1_3_Month">3 months</label>
                                <input id="2_6_Month" name="monthOptions" type="radio">
                                <label for="2_6_Month">6 months</label>
                                <input id="3_12_Month" name="monthOptions" type="radio">
                                <label for="3_12_Month">12 months</label>
                                <input id="4_24_Month" name="monthOptions" type="radio">
                                <label for="4_24_Month">24 months</label>
                            </div>
                        </div>
                        <div class="col-3">&nbsp;</div>
                        <p class="pv-lg"><em>CONTENT PARTNER recommends performing maintence of competency activities at least once every three months.</em></p>
                    </div>

                    <div class="form-group row pl-lg pr-lg">
                        <div class="col-md-4 pl0">
                            <label for="studentGroups" class="control-label">Student Groups</label>
                        </div>
                        <div class="col-md-7 col-md-offset-1 text-right">
                            <a id="ctl00_CPH_lnkAddStudentGroups" hstm-noprompt="true" href="javascript:__doPostBack('ctl00$CPH$lnkAddStudentGroups','')">Search Student Groups</a>
                            |
                            <a id="ctl00_CPH_lnkCreateStudentGroup" hstm-noprompt="true" href="javascript:__doPostBack('ctl00$CPH$lnkCreateStudentGroup','')">Add New Student Group</a>
                        </div>
                        <textarea id="studentGroups" class="form-control" rows="6"></textarea>
                    </div>


                    <div class="form-group row pl-lg pr-lg">
                        <div class="col-12">
                            <label for="intervalPlanDescription" class="control-label">Description</label>
                        </div>
                        <textarea id="intervalPlanDescription" class="form-control" rows="3"></textarea>
                    </div>
             
                </form>
                <table>
                    <tbody>
                        <tr>
                            <td class="bc btn_reverse" colspan="3" align="right">
                                <div class="stickybar">
                                    <div class="stickybar-floater">
                                        <div class="stickybar-outer">
                                            <div class="stickybar-inner">
                                                <div class="stickybar-left">
                                                    <button type="submit" name="btnSubmit-intervalPlan" value="Submit" id="btnSubmit-intervalPlan" class="btn btn-success">Submit</button> 
                                                    <button type="submit" name="btnCancel-intervalPlan" value="Cancel" id="btnCancel-intervalPlan" class="btn btn-default">Cancel</button>
                                                </div>
                                            <div class="stickybar-right">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>


            <!-- right column, summary that will update based on form selections -->
            <section id="intervalSettings" class="col-md-4 bg-gray">
                <h2 class="mt-lg mh-lg pt-xl"><span class="certType">BLS Maintenance of Competency</span></h2>
                <h4 class="pb-xl mh-lg pt-sm partner"><span class="contentPartner">CP1</span></h4>
                <div id="intervalPlanSummary" class="row ph-xl pb-lg">
                    <h3 class="mb-lg med-heading">Learners will be assigned:</h3>
                    <ul>
                        <li>2-Year BLS Cognitive Curriculum</li>
                        <li>Maintenance of Competency Skills Check Activities</li>
                    </ul>
                </div>
                <div id="intervalPlanActivities" class="row ph-xl pb-lg">
                    <h3 class="mb-lg med-heading">One or more of the following MOC learning activities will be due in intervals of <span class="selectedTerm">3 months</span> based on the learner's previous completion:</h3>
                    <ul id="intervalPlanList">
                    <li>
				Adult Compressions</li>
			<li>
				Adult Ventilation</li>
			<li>
				Adult One Rescuer CPR</li>
			<li>
				Adult Two Rescuer CPR</li>
			<li>
				Child Compressions</li>
			<li>
				Child Ventilation</li>
			<li>
				Child One Rescuer CPR</li>
			<li>
				Child Two Rescuer CPR</li>
			<li>
				Infant Compressions</li>
			<li>
				Infant Ventilation</li>
			<li>
				Infant One Rescuer CPR</li>
			<li>
				Infant Two Rescuer CPR</li> 
                    </ul>
                </div>
            </section>
        </main> 
    </div><!--end container-->

<div id="pf" class="pf">
    <div class="sm ">
        Questions? Concerns? Contact HealthStream Customer Service.
    </div>
    <div class="txxs col-12">
        <a target="_blank" href="http://www.healthstream.com/" id="pf-logo">
        <img border="0" src="admin-assets/images/hstmLogo.gif"></a>&nbsp;Copyright © 2017 HealthStream, Inc. All Rights Reserved.
        <br>Build 13.01.28.895.435&nbsp;&nbsp;Nov 2 2017 1:25 PM CT
        <br>
        <br>AO:56716
    </div>
</div>

</form>


<!-- ====================== SCRIPTS - deleted out some that were already commented out or didn't seem necessary for this prototype ====================== -->
    <!-- PROTOTYPE ONLY -->
    <script src="/scripts/jquery.js"></script>
    <script type="text/javascript" src="/scripts/jquery.knob.js"></script>
    <script type="text/javascript" src="/scripts/jquery.radios-to-slider.js"></script>
    <script src="/scripts/healthstream.dial.js"></script> 
        <script src="admin-assets/js/stickybar.js"></script>
    <script src="admin-assets/js/OverrideIcons.js"></script>
    <script src="admin-assets/js/bootstrap.js"></script>
</body>
</html>