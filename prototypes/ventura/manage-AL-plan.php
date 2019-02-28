<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html>

<head>
    <title>Manage Learning Plan</title>
    <meta name="GENERATOR" content="Microsoft Visual Studio .NET 7.1">
    <meta name="CODE_LANGUAGE" content="C#">
    <meta name="vs_defaultClientScript" content="JavaScript">
    <meta name="vs_targetSchema" content="http://schemas.microsoft.com/intellisense/ie5">
    <link rel="SHORTCUT ICON" href="admin-assets/images/healthstream-favicon.ico" />
    <link href="admin-assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/font-awesome.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/font-awesome-animation.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/Common/css.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/notifications.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/sitemap.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/site.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/stickybar.css" type="text/css" rel="stylesheet">
    <link href="admin-assets/css/override-blue-1.css" type="text/css" rel="stylesheet">


    <script src="admin-assets/js/jquery.js"></script>
    <script src="admin-assets/js/stickybar.js"></script>
    <script src="admin-assets/js/OverrideIcons.js"></script>
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
            <div class="row">
                <div class="col-md-9 title-bar">
                    <h4>Adaptive Learning Plan Management</h4>
                    <h1>Manage Learning Plan</h1>
                </div>
                <div class="col-md-3 add-rtn">
                    <a id="featureTitle_lbAdd_Dyn" class="featureTitleicon_add" href="./plan-builder.php"><img alt="Add Plan" src="/HLC/Images/Override/Admin_plus.png" border="0">Add Plan</a>
                    <a id="featureTitle_lbCancel_Dyn" class="rp" href="#)"><img border="0" src="./../admin-assets/images/Override/ArrowLeft_Admin.png" alt="Return to Courses">Return to Courses</a>
                </div>
            </div><!--end title row-->

            <div class="row mt-1 mb-1"><!--form row with input-->
                <div class="input-group search-col">
                    <input type="text" class="form-control col-10 search-input" placeholder="Search" style="width: 480px;">
                    <button type="submit" class="btn btn-default col-2">Search</button>
                </div>
                <div class="input-group col-md-7 search-col ts text-center">
                    <span id="lblPlanStatus" class="mb-0">Status:&nbsp;&nbsp;</span>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="checkDraft" name="checkDraft" value="checkDraft" checked="checked"> Draft
                    </label>&nbsp;
                    <label class="checkbox-inline">
                        <input type="checkbox" id="checkActive" name="checkActive" value="checkActive" checked="checked"> Active
                    </label>&nbsp;
                    <label class="checkbox-inline">
                        <input type="checkbox" id="checkDeactivated" name="checkDeactivated" value="checkDeactivated"> Deactivated
                    </label>
                </div>
            </div><!--end form row -->
            <div class="dash text-center"></div>

            <div id="searchResults" class="table-responsive">
                <table class="table table-striped ts" style="border-top: 0 !important;">
                    <thead>
                        <tr class="dash">
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Last Updated</th>
                            <th scope="col">Updated By</th>
                        </tr>
                    </thead>  
                    <tbody>
                        <tr>
                            <th scope="row"><a href="#">CP1 — BLS Maintenance of Competency</a></th>
                            <td>Draft</td>
                            <td>5/23/2018</td>
                            <td>Cindy Saroha</td>
                        </tr>

                        <tr>
                            <th scope="row"><a href="#">CP1 — ACLS Maintenance of Competency</a></th>
                            <td>Draft</td>
                            <td>5/23/2018</td>
                            <td>Cindy Saroha</td>
                        </tr>

                        <tr>
                            <th scope="row"><a href="#">CP1 — PALS Maintenance of Competency</a></th>
                            <td>Draft</td>
                            <td>5/23/2018</td>
                            <td>Cindy Saroha</td>
                        </tr>

                        <tr>
                            <th scope="row"><a href="#">CP2 — BLS Maintenance of Competency</a></th>
                            <td>Published</td>
                            <td>4/16/2018</td>
                            <td>Cindy Saroha</td>
                        </tr>

                        <tr>
                            <th scope="row"><a href="#">CP2 — ACLS Maintenance of Competency</a></th>
                            <td>Published</td>
                            <td>4/8/2018</td>
                            <td>Cindy Saroha</td>
                        </tr>

                        <tr>
                            <th scope="row"><a href="#">CP2 — PALS Maintenance of Competency</a></th>
                            <td>Draft</td>
                            <td>4/8/2018</td>
                            <td>Cindy Saroha</td>
                        </tr>

                    
                    </tbody>      
                </table>
            </div><!--results-->

        
        </div> <!--end container-->

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
</body>

</html>