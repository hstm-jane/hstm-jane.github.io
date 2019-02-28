<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html>

<head>
    <title>Select a Course to Add</title>
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
    <link href="content/styles/healthstream.prototype.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/notifications.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/sitemap.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/Common/css.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/site.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/stickybar.css" type="text/css" rel="stylesheet">
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
    <form name="Form1" method="post" action="./assign-curriculum.php" id="Form1">
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
                    <a href="/HLC/Login/Logout.aspx?organizationID=072d25dd-c9a9-e111-b22e-0015171c1a75&amp;organizationNodeID=6afaafa9-caa9-e111-b22e-0015171c1a75" id="identity-logout"></a>
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
        <div class="primary-content container-fluid">
            <div class="row bb-thick">
                <div class="col-md-9 title-bar">
                    <h4>Group Assignment</h4>
                    <h1>Browse</h1>
                </div>
                <div class="col-md-3 add-rtn">
                    <a id="featureTitle_lbCancel_Dyn" class="rp" href="#"><img border="0" src="./../admin-assets/images/Override/ArrowLeft_Admin.png" alt="Return to Group Assignment Editor">Return to Group Assignment Editor</a>
                </div>
            </div><!--end title row-->

            <div class="row mt-1 mb-1 browseBar"><!--form row with input-->
                <div class="col-12 text-center ts mb-lg"><a href="#">Alphabetical</a> | <a href="#">Category</a> </div>
                <div class="input-group search-col">
                    <input type="text" class="form-control col-10 search-input" style="width: 480px;">
                    <button type="submit" class="btn btn-default col-2">Search</button>
                </div>
                <div class="input-group col-md-7 search-col ts text-center">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="checkCourse" name="checkCourse" value="checkDraft" checked="checked"> Course
                    </label>&nbsp;
                    <label class="checkbox-inline">
                        <input type="checkbox" id="checkBundles" name="checkBundles" value="checkDeactivated"> Course Bundles
                    </label>&nbsp;
                    <label class="checkbox-inline">
                        <input type="checkbox" id="checkCurriculum" name="checkCurriculum" value="checkCurriculum" checked="checked"> Curriculum
                    </label>&nbsp;
                    <label class="checkbox-inline">
                        <input type="checkbox" id="checkEquiv" name="checkEquiv" value="checkEquiv" checked="checked"> Equivalent
                    </label>
                </div>
            </div><!--end form row -->
            <table style="width: 100%; border-top: 1px dotted #ccc;">
                <tbody><tr>
                    
                    <td style="padding-right: 0px; padding-left: 0px; padding-bottom: 0px;" class="pt-lg">
                        <img src="./content/images/spacer.gif" width="0" height="300">
                    </td>
                    <td valign="top" width="100%">
                        <div id="pnlSearchResults">
	
                            
                            <span id="pageNavigationBar1" class="ts"><table cellspacing="0" cellpadding="0" border="0" style="width:100%;border-collapse:collapse;">
		<tbody><tr>
			<td class="ts pt-lg" align="left" nowrap="nowrap" style="width:30%;"><span>Results per page: </span><select name="pageNavigationBar1$cmbPageSize" onchange="javascript:setTimeout('WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;pageNavigationBar1$cmbPageSize&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))', 0)" id="pageNavigationBar1_cmbPageSize" hstm-noprompt="true">
				<option value="5">5</option>
				<option selected="selected" value="25">25</option>
				<option value="50">50</option>
				<option value="100">100</option>
				<option value="250">250</option>

			</select></td><td align="center" style="width:40%;" class="pt-lg"><a id="pageNavigationBar1_cmdFirstPage1" disabled="disabled" hstm-noprompt="true">&lt;&lt;</a><span>&nbsp;</span><a id="pageNavigationBar1_cmdPreviousPage2" disabled="disabled" hstm-noprompt="true">&lt;</a><span>&nbsp;</span><a id="pageNavigationBar1_cmdPreviousPage1" disabled="disabled" hstm-noprompt="true">Previous</a><span>&nbsp;</span><span id="pageNavigationBar1_pnlPageNumbers"><a id="pageNavigationBar1_cmdPage1" disabled="disabled" hstm-noprompt="true">1</a><span>&nbsp;</span><a id="pageNavigationBar1_cmdPage2" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar1$cmdPage2','')">2</a><span>&nbsp;</span><a id="pageNavigationBar1_cmdPage3" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar1$cmdPage3','')">3</a><span>&nbsp;</span><a id="pageNavigationBar1_cmdPage4" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar1$cmdPage4','')">4</a><span>&nbsp;</span><a id="pageNavigationBar1_cmdPage5" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar1$cmdPage5','')">5</a><span>&nbsp;</span><a id="pageNavigationBar1_cmdPage6" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar1$cmdPage6','')">6</a><span>&nbsp;</span><a id="pageNavigationBar1_cmdPage7" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar1$cmdPage7','')">7</a><span>&nbsp;</span><a id="pageNavigationBar1_cmdPage8" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar1$cmdPage8','')">8</a><span>&nbsp;</span><a id="pageNavigationBar1_cmdPage9" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar1$cmdPage9','')">9</a><span>&nbsp;</span><a id="pageNavigationBar1_cmdPage10" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar1$cmdPage10','')">10</a><span>&nbsp;</span></span><span>&nbsp;</span><a id="pageNavigationBar1_cmdNextPage1" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar1$cmdNextPage1','')">Next</a><span>&nbsp;</span><a id="pageNavigationBar1_cmdNextPage2" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar1$cmdNextPage2','')">&gt;</a><span>&nbsp;</span><a id="pageNavigationBar1_cmdLastPage1" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar1$cmdLastPage1','')">&gt;&gt;</a></td><td class="ts pt-lg" align="right" style="width:30%;">1360 Record(s)</td>
		</tr>
	</tbody></table></span>
    <table class="grd ts" cellspacing="0" cellpadding="0" style="padding: 0.3em 0 0.3em 0" width="100%" border="0">
        <tbody>
            <tr>
                <th id="thCourseName" align="left" colspan="2">Name</th>
                <th id="tdVersionHeader" align="center">Version</th>
            </tr>
        
            <tr valign="top">
                <td valign="center" align="left" width="100%" style="word-break:break-all">
                    <span style="display:inline-block;width:68%;"><input id="rC_ctl00_cC" type="checkbox" name="rC$ctl00$cC"><label for="rC_ctl00_cC">2-Year BLS Curriculum</label></span>
                </td>
                <td align="right" width="1%">
                    <img src="./content/images/iconSM_Curriculum.gif" id="rC_ctl00_imgO" alt="Curriculum">
                    <img src="./content/images/iconSM_evaluation.gif" id="rC_ctl11_imgE" alt="Evaluation">   
                </td>
                <td id="rC_ctl00_tV" valign="top" align="center" width="1%">
                    <span id="rC_ctl00_lV">2</span>
                </td>
            </tr>
                
            <tr valign="top" class="alt">
                <td valign="center" align="left" width="100%" style="word-break:break-all">
                    <span style="display:inline-block;width:68%;"><input id="rC_ctl01_cC" type="checkbox" name="rC$ctl01$cC"><label for="rC_ctl01_cC">1.0 HCC: Introduction to HealthStream Competency Center</label></span>   
                </td>
                <td align="right" width="1%">
                    <img src="./content/images/iconSM_onlineCourse.gif" id="rC_ctl01_imgC" alt="Online Course">
                </td>
                <td id="rC_ctl01_tV" valign="top" align="center" width="1%">
                    <span id="rC_ctl01_lV">2</span>
                </td>
            </tr>
                           
            <tr valign="top">
                <td valign="center" align="left" width="100%" style="word-break:break-all">                    
                    <span style="display:inline-block;width:68%;"><input id="rC_ctl02_cC" type="checkbox" name="rC$ctl02$cC"><label for="rC_ctl02_cC">2010 Annual Training Update</label></span>    
                </td>
                <td align="right" width="1%">
                    <img src="./content/images/iconSM_liveClass.gif" id="rC_ctl02_imgC" alt="Classroom">
                </td>
                <td id="rC_ctl02_tV" valign="top" align="center" width="1%">
                    <span id="rC_ctl02_lV">1</span>
                </td>
            </tr>
                
            <tr valign="top" class="alt">
                <td valign="center" align="left" width="100%" style="word-break:break-all">
                    <span style="display:inline-block;width:68%;"><input id="rC_ctl03_cC" type="checkbox" name="rC$ctl03$cC"><label for="rC_ctl03_cC">2011 Annual Certification Requirements</label></span>
                </td>
                <td align="right" width="1%">
                    <img src="./content/images/iconSM_Curriculum.gif" id="rC_ctl03_imgC" alt="Curriculum">
                </td>
                <td id="rC_ctl03_tV" valign="top" align="center" width="1%">
                    <span id="rC_ctl03_lV">1</span>
                </td>
            </tr>

                <tr valign="top">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl04_cC" type="checkbox" name="rC$ctl04$cC"><label for="rC_ctl04_cC">01 A Knowledge Assessment - RN-BC: Cardiac-Vascular Nursing</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        
                        
                        
                        <img src="./content/images/iconSM_test.gif" id="rC_ctl04_imgT" alt="Test">
                        
                        
                        
                        
                        <img src="./content/images/iconSM_CourseAttachments.gif" id="rC_ctl04_imgP" alt="Course Attachment">
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl04_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl04_lV">2</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top" class="alt">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl05_cC" type="checkbox" name="rC$ctl05$cC"><label for="rC_ctl05_cC">01 A Knowledge Assessment - RN-BC: Nursing Professional Development</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        
                        
                        
                        <img src="./content/images/iconSM_test.gif" id="rC_ctl05_imgT" alt="Test">
                        
                        
                        
                        
                        <img src="./content/images/iconSM_CourseAttachments.gif" id="rC_ctl05_imgP" alt="Course Attachment">
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl05_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl05_lV">1</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl06_cC" type="checkbox" name="rC$ctl06$cC"><label for="rC_ctl06_cC">01 A Knowledge Assessment - RN-BC: Pain Management Nursing</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        
                        
                        
                        <img src="./content/images/iconSM_test.gif" id="rC_ctl06_imgT" alt="Test">
                        
                        
                        
                        
                        <img src="./content/images/iconSM_CourseAttachments.gif" id="rC_ctl06_imgP" alt="Course Attachment">
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl06_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl06_lV">2</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top" class="alt">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl07_cC" type="checkbox" name="rC$ctl07$cC"><label for="rC_ctl07_cC">01 A Knowledge Assessment - RN-BC: Psychiatric and Mental Health Nursing</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        
                        
                        
                        <img src="./content/images/iconSM_test.gif" id="rC_ctl07_imgT" alt="Test">
                        
                        
                        
                        
                        <img src="./content/images/iconSM_CourseAttachments.gif" id="rC_ctl07_imgP" alt="Course Attachment">
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl07_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl07_lV">2</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl08_cC" type="checkbox" name="rC$ctl08$cC"><label for="rC_ctl08_cC">1 BARD® SURESTEP® Foley Catheter Utilization and Introduction</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        <img src="./content/images/iconSM_onlineCourse.gif" id="rC_ctl08_imgO" alt="Online">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl08_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl08_lV">4</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top" class="alt">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl09_cC" type="checkbox" name="rC$ctl09$cC"><label for="rC_ctl09_cC">2 BARD® SURESTEP® Foley Catheter Insertion, Male Catheterization</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        <img src="./content/images/iconSM_onlineCourse.gif" id="rC_ctl09_ImgO" alt="Online">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl09_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl09_lV">5</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl10_cC" type="checkbox" name="rC$ctl10$cC"><label for="rC_ctl10_cC">2015 Policy</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        
                        
                        
                        <img src="./content/images/iconSM_test.gif" id="rC_ctl10_imgT" alt="Test">
                        
                        
                        
                        
                        <img src="./content/images/iconSM_CourseAttachments.gif" id="rC_ctl10_imgP" alt="Course Attachment">
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl10_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl10_lV">1</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top" class="alt">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl11_cC" type="checkbox" name="rC$ctl11$cC"><label for="rC_ctl11_cC">2015 Sexually Transmitted Diseases Treatment Guidelines - 20-514024</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        <img src="./content/images/iconSM_onlineCourse.gif" id="rC_ctl11_ImgO" alt="Online">
                        
                        
                        <img src="./content/images/iconSM_test.gif" id="rC_ctl11_imgT" alt="Test">
                        <img src="./content/images/iconSM_evaluation.gif" id="rC_ctl11_imgE" alt="Evaluation">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl11_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl11_lV">1</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl12_cC" type="checkbox" name="rC$ctl12$cC"><label for="rC_ctl12_cC">2016 Performance Review System Coaching Report</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        
                        
                        
                        
                        
                        <img src="./content/images/iconSM_Checklist.gif" id="rC_ctl12_imgChecklist" alt="Checklist">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl12_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl12_lV">1</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top" class="alt">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl13_cC" type="checkbox" name="rC$ctl13$cC"><label for="rC_ctl13_cC">2916 Onboarding Curriculum - All Home Health New Hires 2016 COPY</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <img src="./content/images/iconSM_Curriculum.gif" id="rC_ctl13_imgCu" alt="Curriculum">
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl13_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl13_lV">2</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl14_cC" type="checkbox" name="rC$ctl14$cC"><label for="rC_ctl14_cC">3 BARD® SURESTEP® Foley Catheter Insertion, Female Catheterization</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        <img src="./content/images/iconSM_onlineCourse.gif" id="rC_ctl14_imgO" alt="Online">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl14_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl14_lV">4</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top" class="alt">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl15_cC" type="checkbox" name="rC$ctl15$cC"><label for="rC_ctl15_cC">30 60 90 Onboarding checklist</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        
                        
                        
                        
                        
                        <img src="./content/images/iconXSM_Checklist.gif" id="rC_ctl15_imgChecklist" alt="Checklist">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl15_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl15_lV">1</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl16_cC" type="checkbox" name="rC$ctl16$cC"><label for="rC_ctl16_cC">300 Wound Surface</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        <img src="./content/images/iconSM_onlineCourse.gif" id="rC_ctl16_imgO" alt="Online">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl16_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl16_lV">1</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top" class="alt">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl17_cC" type="checkbox" name="rC$ctl17$cC"><label for="rC_ctl17_cC">3M PICC/CVC Securement Device + Tegaderm™ CHG (1877-2100) -  Application &amp; Removal for PICCs</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        <img src="./content/images/iconSM_onlineCourse.gif" id="rC_ctl17_ImgO" alt="Online">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl17_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl17_lV">1</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl18_cC" type="checkbox" name="rC$ctl18$cC"><label for="rC_ctl18_cC">3M PICC/CVC Securement Device + Tegaderm™ CHG (1877-2100) - Application &amp; Removal for CVCs</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        <img src="./content/images/iconSM_onlineCourse.gif" id="rC_ctl18_imgO" alt="Online">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl18_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl18_lV">1</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top" class="alt">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl19_cC" type="checkbox" name="rC$ctl19$cC"><label for="rC_ctl19_cC">3M PICC/CVC Securement Device + Tegaderm™ CHG (1877-2100) - Application &amp; Removal for CVCs (Animation)</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        <img src="./content/images/iconSM_onlineCourse.gif" id="rC_ctl19_ImgO" alt="Online">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl19_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl19_lV">1</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl20_cC" type="checkbox" name="rC$ctl20$cC"><label for="rC_ctl20_cC">3M PICC/CVC Securement Device + Tegaderm™ I.V. Advanced (1837-2100) -  Application &amp; Removal for PICCs</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        <img src="./content/images/iconSM_onlineCourse.gif" id="rC_ctl20_imgO" alt="Online">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl20_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl20_lV">2</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top" class="alt">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl21_cC" type="checkbox" name="rC$ctl21$cC"><label for="rC_ctl21_cC">3M PICC/CVC Securement Device + Tegaderm™ I.V. Advanced (1837-2100) -  Application &amp; Removal for PICCs (Animation)</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        <img src="./content/images/iconSM_onlineCourse.gif" id="rC_ctl21_ImgO" alt="Online">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl21_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl21_lV">1</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl22_cC" type="checkbox" name="rC$ctl22$cC"><label for="rC_ctl22_cC">3M PICC/CVC Securement Device + Tegaderm™ I.V. Advanced (1837-2100) - Application &amp; Removal for CVCs</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        <img src="./content/images/iconSM_onlineCourse.gif" id="rC_ctl22_imgO" alt="Online">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl22_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl22_lV">1</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top" class="alt">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl23_cC" type="checkbox" name="rC$ctl23$cC"><label for="rC_ctl23_cC">3M™ Coban™ 2 Two-Layer Compression Lower Leg Application</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        <img src="./content/images/iconSM_onlineCourse.gif" id="rC_ctl23_ImgO" alt="Online">
                        
                        
                        <img src="./content/images/iconSM_test.gif" id="rC_ctl23_imgT" alt="Test">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl23_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl23_lV">1</span>
                    </td>

                </tr>
                
                
                
            
                <tr valign="top">
                    <td valign="center" align="left" width="100%" style="word-break:break-all">
                        
                        <span style="display:inline-block;width:68%;"><input id="rC_ctl24_cC" type="checkbox" name="rC$ctl24$cC"><label for="rC_ctl24_cC">4 BARD® SURESTEP® Foley Catheter Maintenance, General Care and Maintenance</label></span>
                        
                        
                    </td>
                    <td align="right" width="1%">
                        <img src="./content/images/iconSM_onlineCourse.gif" id="rC_ctl24_imgO" alt="Online">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    <td id="rC_ctl24_tV" valign="top" align="center" width="1%">
                        <span id="rC_ctl24_lV">4</span>
                    </td>

                </tr>
                
                
                
            
    </tbody></table>
                            <span id="pageNavigationBar2" class="ts"><table cellspacing="0" cellpadding="0" border="0" style="width:100%;border-collapse:collapse;">
		<tbody><tr>
			<td class="ts" align="left" nowrap="nowrap" style="width:30%;"></td><td align="center" style="width:40%;"><a id="pageNavigationBar2_cmdFirstPage1" disabled="disabled" hstm-noprompt="true">&lt;&lt;</a><span>&nbsp;</span><a id="pageNavigationBar2_cmdPreviousPage2" disabled="disabled" hstm-noprompt="true">&lt;</a><span>&nbsp;</span><a id="pageNavigationBar2_cmdPreviousPage1" disabled="disabled" hstm-noprompt="true">Previous</a><span>&nbsp;</span><span id="pageNavigationBar2_pnlPageNumbers"><a id="pageNavigationBar2_cmdPage1" disabled="disabled" hstm-noprompt="true">1</a><span>&nbsp;</span><a id="pageNavigationBar2_cmdPage2" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar2$cmdPage2','')">2</a><span>&nbsp;</span><a id="pageNavigationBar2_cmdPage3" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar2$cmdPage3','')">3</a><span>&nbsp;</span><a id="pageNavigationBar2_cmdPage4" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar2$cmdPage4','')">4</a><span>&nbsp;</span><a id="pageNavigationBar2_cmdPage5" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar2$cmdPage5','')">5</a><span>&nbsp;</span><a id="pageNavigationBar2_cmdPage6" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar2$cmdPage6','')">6</a><span>&nbsp;</span><a id="pageNavigationBar2_cmdPage7" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar2$cmdPage7','')">7</a><span>&nbsp;</span><a id="pageNavigationBar2_cmdPage8" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar2$cmdPage8','')">8</a><span>&nbsp;</span><a id="pageNavigationBar2_cmdPage9" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar2$cmdPage9','')">9</a><span>&nbsp;</span><a id="pageNavigationBar2_cmdPage10" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar2$cmdPage10','')">10</a><span>&nbsp;</span></span><span>&nbsp;</span><a id="pageNavigationBar2_cmdNextPage1" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar2$cmdNextPage1','')">Next</a><span>&nbsp;</span><a id="pageNavigationBar2_cmdNextPage2" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar2$cmdNextPage2','')">&gt;</a><span>&nbsp;</span><a id="pageNavigationBar2_cmdLastPage1" hstm-noprompt="true" href="javascript:__doPostBack('pageNavigationBar2$cmdLastPage1','')">&gt;&gt;</a></td><td class="ts" align="right" style="width:30%;"></td>
		</tr>
	</tbody></table></span>
                            <div id="dvLegend">
                            <h3 class="ts">
                                Legend:</h3>
                            <div class="hlst">
                                <ul class="txs">
		<li><img alt="Online" src="./content/images/iconSM_onlineCourse.gif" align="absMiddle">Online&nbsp;</li><li><img alt="Test" src="./content/images/iconSM_test.gif" align="absMiddle">Test&nbsp;</li><li><img alt="Evaluation" src="./content/images/iconSM_evaluation.gif" align="absMiddle">Evaluation&nbsp;</li><li><img alt="Checklist" src="./content/images/iconSM_Checklist.gif" align="absMiddle">Checklist&nbsp;</li><li><img alt="Classroom" src="./content/images/iconSM_liveClass.gif" align="absMiddle">Classroom&nbsp;</li><li><img alt="Course Attachment" src="./content/images/iconSM_CourseAttachments.gif" align="absMiddle">Course Attachment&nbsp;</li><li><img alt="Curriculum" src="./content/images/iconSM_Curriculum.gif" align="absMiddle">Curriculum&nbsp;</li>
	</ul>
                            </div>
                            </div>
                        
</div>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td class="bc btn_reverse" colspan="3" align="right"><div class="stickybar sticky"><div class="stickybar-floater"><div class="stickybar-outer"><div class="stickybar-inner"><div class="stickybar-left"><button type="submit" name="btnSelect" value="Select" id="btnSelect" accesskey="L" class="btn btn-success">Select</button> <button type="submit" name="btnSelectAll" value="Check All Current Search Results" id="btnSelectAll" class="btn btn-success">Check All Current Search Results</button><button type="submit" name="btnSelectAllClear" value="Clear All Selected Items" id="btnSelectAllClear" class="btn btn-default">Clear All Selected Items</button></div><div class="stickybar-right"></div></div></div></div></div></td>
                </tr>
            </tbody></table>
        </div>
    </div>
    <div id="pf" class="pf">
	<div class="sm">
		Questions? Concerns? Contact HealthStream Customer Service.
	</div><div class="txxs">
		<a target="_blank" href="http://www.healthstream.com/" id="pf-logo"><img border="0" src="./content/images/hstmLogo.gif"></a>&nbsp;Copyright © 2018 HealthStream, Inc. All Rights Reserved.<br>Build 13.01.28.895.508&nbsp;&nbsp;Jul 31 2018 11:49 AM CT<br><br>AO:56716
	</div>
</div>




<script type="text/javascript">
//<![CDATA[
var Page_ValidationSummaries =  new Array(document.getElementById("validationSummary"));
//]]>
</script>

</form>

<script src="scripts/healthstream.stickybar.js"></script>
<script src="admin-assets/js/stickybar.js"></script>
<script src="admin-assets/js/OverrideIcons.js"></script>
<script src="admin-assets/js/bootstrap.js"></script>

<span style="border-radius: 3px; text-indent: 20px; width: auto; padding: 0px 4px 0px 0px; text-align: center; font: bold 11px/20px &quot;Helvetica Neue&quot;, Helvetica, sans-serif; color: rgb(255, 255, 255); background: url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMzBweCIgd2lkdGg9IjMwcHgiIHZpZXdCb3g9Ii0xIC0xIDMxIDMxIj48Zz48cGF0aCBkPSJNMjkuNDQ5LDE0LjY2MiBDMjkuNDQ5LDIyLjcyMiAyMi44NjgsMjkuMjU2IDE0Ljc1LDI5LjI1NiBDNi42MzIsMjkuMjU2IDAuMDUxLDIyLjcyMiAwLjA1MSwxNC42NjIgQzAuMDUxLDYuNjAxIDYuNjMyLDAuMDY3IDE0Ljc1LDAuMDY3IEMyMi44NjgsMC4wNjcgMjkuNDQ5LDYuNjAxIDI5LjQ0OSwxNC42NjIiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSIxIj48L3BhdGg+PHBhdGggZD0iTTE0LjczMywxLjY4NiBDNy41MTYsMS42ODYgMS42NjUsNy40OTUgMS42NjUsMTQuNjYyIEMxLjY2NSwyMC4xNTkgNS4xMDksMjQuODU0IDkuOTcsMjYuNzQ0IEM5Ljg1NiwyNS43MTggOS43NTMsMjQuMTQzIDEwLjAxNiwyMy4wMjIgQzEwLjI1MywyMi4wMSAxMS41NDgsMTYuNTcyIDExLjU0OCwxNi41NzIgQzExLjU0OCwxNi41NzIgMTEuMTU3LDE1Ljc5NSAxMS4xNTcsMTQuNjQ2IEMxMS4xNTcsMTIuODQyIDEyLjIxMSwxMS40OTUgMTMuNTIyLDExLjQ5NSBDMTQuNjM3LDExLjQ5NSAxNS4xNzUsMTIuMzI2IDE1LjE3NSwxMy4zMjMgQzE1LjE3NSwxNC40MzYgMTQuNDYyLDE2LjEgMTQuMDkzLDE3LjY0MyBDMTMuNzg1LDE4LjkzNSAxNC43NDUsMTkuOTg4IDE2LjAyOCwxOS45ODggQzE4LjM1MSwxOS45ODggMjAuMTM2LDE3LjU1NiAyMC4xMzYsMTQuMDQ2IEMyMC4xMzYsMTAuOTM5IDE3Ljg4OCw4Ljc2NyAxNC42NzgsOC43NjcgQzEwLjk1OSw4Ljc2NyA4Ljc3NywxMS41MzYgOC43NzcsMTQuMzk4IEM4Ljc3NywxNS41MTMgOS4yMSwxNi43MDkgOS43NDksMTcuMzU5IEM5Ljg1NiwxNy40ODggOS44NzIsMTcuNiA5Ljg0LDE3LjczMSBDOS43NDEsMTguMTQxIDkuNTIsMTkuMDIzIDkuNDc3LDE5LjIwMyBDOS40MiwxOS40NCA5LjI4OCwxOS40OTEgOS4wNCwxOS4zNzYgQzcuNDA4LDE4LjYyMiA2LjM4NywxNi4yNTIgNi4zODcsMTQuMzQ5IEM2LjM4NywxMC4yNTYgOS4zODMsNi40OTcgMTUuMDIyLDYuNDk3IEMxOS41NTUsNi40OTcgMjMuMDc4LDkuNzA1IDIzLjA3OCwxMy45OTEgQzIzLjA3OCwxOC40NjMgMjAuMjM5LDIyLjA2MiAxNi4yOTcsMjIuMDYyIEMxNC45NzMsMjIuMDYyIDEzLjcyOCwyMS4zNzkgMTMuMzAyLDIwLjU3MiBDMTMuMzAyLDIwLjU3MiAxMi42NDcsMjMuMDUgMTIuNDg4LDIzLjY1NyBDMTIuMTkzLDI0Ljc4NCAxMS4zOTYsMjYuMTk2IDEwLjg2MywyNy4wNTggQzEyLjA4NiwyNy40MzQgMTMuMzg2LDI3LjYzNyAxNC43MzMsMjcuNjM3IEMyMS45NSwyNy42MzcgMjcuODAxLDIxLjgyOCAyNy44MDEsMTQuNjYyIEMyNy44MDEsNy40OTUgMjEuOTUsMS42ODYgMTQuNzMzLDEuNjg2IiBmaWxsPSIjYmQwODFjIj48L3BhdGg+PC9nPjwvc3ZnPg==&quot;) 3px 50% / 14px 14px no-repeat rgb(189, 8, 28); position: absolute; opacity: 1; z-index: 8675309; display: none; cursor: pointer; border: none; -webkit-font-smoothing: antialiased;">Save</span><span style="width: 24px; height: 24px; background: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pjxzdmcgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCIgdmlld0JveD0iMCAwIDI0IDI0IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxkZWZzPjxtYXNrIGlkPSJtIj48cmVjdCBmaWxsPSIjZmZmIiB4PSIwIiB5PSIwIiB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHJ4PSI2IiByeT0iNiIvPjxyZWN0IGZpbGw9IiMwMDAiIHg9IjUiIHk9IjUiIHdpZHRoPSIxNCIgaGVpZ2h0PSIxNCIgcng9IjEiIHJ5PSIxIi8+PHJlY3QgZmlsbD0iIzAwMCIgeD0iMTAiIHk9IjAiIHdpZHRoPSI0IiBoZWlnaHQ9IjI0Ii8+PHJlY3QgZmlsbD0iIzAwMCIgeD0iMCIgeT0iMTAiIHdpZHRoPSIyNCIgaGVpZ2h0PSI0Ii8+PC9tYXNrPjwvZGVmcz48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIGZpbGw9IiNmZmYiIG1hc2s9InVybCgjbSkiLz48L3N2Zz4=&quot;) 50% 50% / 14px 14px no-repeat rgba(0, 0, 0, 0.4); position: absolute; opacity: 1; z-index: 8675309; display: none; cursor: pointer; border: none; border-radius: 12px;"></span>

</body>
</html>