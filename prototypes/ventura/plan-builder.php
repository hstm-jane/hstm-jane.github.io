<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html>

<head>
    <title>Plan Builder</title>
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

        <div class="primary-content container-fluid"><!--TITLE ROW start-->
            <div class="row">
                <div class="col-md-9 title-bar">
                    <h4>Manage Learning Plan </h4>
                    <h1>Plan Builder</h1>
                </div>
                <div class="col-md-3 add-rtn">
                    <a id="featureTitle_lbSettings_Dyn" class="featureTitleicon_cog" href="#"><i alt="Settings" class="fa fa-cog align-middle text-gray-dark"></i>Settings</a>
                    <a id="featureTitle_lbCancel_Dyn" class="rp" href="./manage-AL-plan.php"><img border="0" src="./../admin-assets/images/Override/ArrowLeft_Admin.png" alt="Return to Manage Learning Plan">Return to Manage Learning Plan</a>
                </div>
            </div><!--end title row-->

            <div class="row planMeta"><!--Plan metadata row start-->
                <span id="planNameFill">Plan Name</span><br />
                <p id="planNotesFill">Plan Notes </p> 
            </div> <!--end planMeta row-->

            <section id="planBuilder" class="row">
                <div id="planAction" class="col-md-4 bg-gray-lighter pv-xl"><!--need to remove hidden and add col-md-4 when needed -->
                    <h2>Select a To-Do Item</h2>
                    <div class="row">
                        <a href="./browse-assignments.php" alt="browse group assignments" class="toDoLink">
                            <div id="selectLearning" class="col-xs-5 bg-gray-active">
                                <h3>Learning</h3>
                                <p>Select a curriculum, course, or equivalent.</p>
                            </div>
                        </a>

                        <div id="selectAssessment" class="col-xs-5 bg-gray-disabled"><h3>Assessment</h3>
                            <p class="text-center mt-xl"><em>Coming Soon</em></p>
                        </div>
                    </div>
                    <div class="row">
                        <div id="selectProfile" class="col-xs-5 bg-gray-disabled"><h3>Profile Activity</h3>
                            <p class="text-center mt-xl"><em>Coming Soon</em></p>
                        </div>
                    </div>
                </div><!--end planAction col-->

                <div id="planOutline" class="col-md-4 pv-xl"><!--need to add/remove col-md-offset-4 when first col is visible-->
                    <div id="emptyPlan">&nbsp;</div>
                </div>

            </section>
        
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

<!-- ====================== MODALS ======================= -->
<div class="modal fade" id="planDetailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Learning Plan Settings</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Plan Name</label>
            <input type="text" class="form-control" id="planName">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Notes</label>
            <textarea class="form-control" id="planNotes"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="planMetaSubmit">Continue</button>
        <button type="reset" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>


<!-- ====================== SCRIPTS - deleted out some that were already commented out or didn't seem necessary for this prototype ====================== -->

    <script src="admin-assets/js/stickybar.js"></script>
    <script src="admin-assets/js/OverrideIcons.js"></script>
    <script src="admin-assets/js/bootstrap.js"></script>
    <script src="scripts/planActions.js"></script>

 </body>
</html>