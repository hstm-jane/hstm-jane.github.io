<?php include "hstream.docs.include.start.php"; ?>
<style>
body > div.wrapper > div.sidebar > div > ul > li {
    margin-left: -18px !important;
   /*list-style-type: circle;*/
   padding-bottom:5px;
}

body > div.wrapper > div.sidebar > div >  ul{
    list-style: none;
        margin-left: 1em;
        padding-left: 1em;
}
body > div.wrapper > div.sidebar > div > ul > li > ul > li:before {
   /* margin-left: -20px !important;*/
   display: inline-block;
   content: "-";
   width: 0.5em;
   margin-left: -1em;

   /*text-indent:-5px;*/
}
ul > li >  a, ul > li > ul> li> a {
    display:block;
}
ul > li >  a > p , ul > li > ul> li>  a > p{
    line-height:35px !important;

}
ul > li >  > a, ul > li > ul> li>  a {
    display:inline-block;
}
body > div.wrapper > div.sidebar > div > ul > li > ul > li > a {
    display:inline-block;
}
body > div > div.sidebar > div > ul > li > ul > li {
     /*margin-left: -18px !important;*/
    /*list-style-type: circle;*/
    padding-bottom:5px;
}
</style>
<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="docs-logo-container">
                <img src="/content/images/hStream-flow-logo.png" class="logo"/>
            </div>

            <ul class="nav">




                <!--<li>
                    <a href="icons.html">
                        <i class="ti-pencil-alt2"></i>
                        <p>Icons</p>
                    </a>
                </li>-->

				<!--<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="ti-export"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>-->

             <li>
                    <a href="hstream.docs.flow.php">
                        <!--<i class="ti-user"></i>-->
                        <p style="text-transform: none;">FLOW DATA APIs</p>
                    </a>
                      <ul class="dashed">
                        <li><a href="hstream.docs.flow.enrollment.php">Enrollment and Completion API</a></li>
                        <li><a href="hstream.docs.flow.course.php">Course Attendance API</a></li>
                        <li class="active"><a href="hstream.docs.flow.standard.php">Standard Evaluation Data API - Summary &amp; Detail</a></li>
                        <li><a href="#">TQA Summary and Detail API</a></li>
                        <li><a href="#">Demographics Data API</a></li>
                        <li><a href="#">Org, Facility and Department Login Summary API</a></li>
                        <li><a href="#">Student Group Criteria API</a></li>
                        <li><a href="#">Discipline/Certification Listing API</a></li>
                        <li><a href="#">Demographics Users By Role API</a></li>
                        <li><a href="#">Employee Hierarchy API</a></li>
                        <li><a href="#">Course Publishing Information API</a></li>
                        <li><a href="#">Course Equivalency API</a></li>
                        <li><a href="#">Course meta data report and Authored course API</a></li>
                    </ul>
                    </li>
                     </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Documentation</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!--<li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>-->
						<li>
                            <a href="#">
								<i class="ti-user"></i>
								<p> Joe Developer</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <!--<div class="header">
                        <h4 class="title">Enrollment and Completion API</h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    </div>-->
                    <div class="content">

                        <div class="places-buttons">
                            <div class="row">
                                <div class="col-md-12">
<h3  id="get-a-users-tasks"><a name="user-content-get-a-users-tasks" href="#get-a-users-tasks" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Standard Evaluation Data API - Summary &amp; Detail</h2>
<h4 id="request"><a name="user-content-request" href="#request" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Request</h3>
<!--<h5 id="http-request"><a name="user-content-http-request" href="#http-request" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>HTTP Request</h4>-->
<!--<p><span class="label label-primary">GET</span> <a href="https://www.healthstream.com/api/hs/usertask/v1/user/{UserId}/tasks">https://www.healthstream.com/api/hs/usertask/v1/user/{UserId}/tasks</a></p>-->
<h5 id="parameters"><a name="user-content-parameters" href="#parameters" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Parameters</h4>
<div class="row"><div class="col-md-9">
<table class="table table-condensed table-striped">
    <tr>
        <th style="width:400px;">Parameter</th>
        <!--<th>Type</th>-->
        <!--<th>Value</th>-->
        <th>Description</th>
    </tr>
    <tr>
        <td>Org Unique Record Identifier <span class="label label-danger">Required</span></td>
        <!--<td>URL</td>-->
        <!--<td>string</td>-->
        <td> 1 or many</td>
    </tr>
     <tr>
        <td>Facility Code or Facility Name <span class="label label-danger">Required</span></td>
        <!--<td>URL</td>-->
        <!--<td>string</td>-->
        <td> 1 or many</td>
    </tr>

     <tr>
        <td>Completion Date Range<br></td>
        <!--<td>URL</td>-->
        <!--<td>string</td>-->
         <td> Begin and End Date</td>
    </tr>


    <tr>
        <td>Course Category<br></td>
        <!--<td>URL</td>-->
        <!--<td>string</td>-->
        <td> 1 or many</td>
    </tr>
     <tr>
        <td>Course Unique Record Identifier<br></td>
        <!--<td>URL</td>-->
        <!--<td>string</td>-->
        <td> 1 or many</td>
    </tr>

</table>
</div></div>

<!--<h5 id="authorization"><a name="user-content-authorization" href="#authorization" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Authorization</h4>-->
<!--<p>An Authorization token is <span class="text-danger">required</span> when using this endpoint. The bearer authroization token must be inclued as a header parameter.</p>-->
<!--<h5 id="request-body"><a name="user-content-request-body" href="#request-body" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Request Body</h4>-->
<!--<p>A Request Body should not be sent with this request.</p>-->
<h4 id="response"><a name="user-content-response" href="#response" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Response</h3>
<h5 id="http-response-messages"><a name="user-content-http-response-messages" href="#http-response-messages" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Fields</h4>
<div class="row"><div class="col-md-9">
<table class="table table-condensed table-striped">
    <tr>
        <th style="width:200px;">Field</th>
        <!--<th>Reason</th>-->
    </tr>
    <tr>
        <td>Org Name</td>
        <!--<td>OK</td>-->
    </tr>
    <tr>
        <td>External Org Unique Record Identifier</td>
        <!--<td>Bad Request</td>-->
    </tr>
    <tr>
        <td>Facility Code</td>
        <!--<td>Unauthorized</td>-->
    </tr>
     <tr>
        <td>Facility Name</td>
        <!--<td>Unauthorized</td>-->
    </tr>
    <tr>
        <td>Facility City</td>
        <!--<td>Not Found</td>-->
    </tr>
    <tr>
        <td>Facility State</td>
        <!--<td>Internal Server Error</td>-->
    </tr>
    <tr>
        <td>Facility Zip Code</td>
        <!--<td>Internal Server Error</td>-->
    </tr>
    <tr>
        <td>Username</td>
        <!--<td>Internal Server Error</td>-->
    </tr>
    <tr>
        <td>First Name</td>
        <!--<td>Internal Server Error</td>-->
    </tr>
    <tr>
        <td>Middle Name</td>
        <!--<td>Internal Server Error</td>-->
    </tr>
    <tr>
        <td>Last Name</td>
        <!--<td>Internal Server Error</td>-->
    </tr>
    <tr>
        <td>Department Code</td>
        <!--<td>Internal Server Error</td>-->
    </tr>
    <tr>
        <td>Department Name</td>
        <!--<td>Internal Server Error</td>-->
    </tr>
    <tr>
        <td>Job Title Code</td>
        <!--<td>Internal Server Error</td>-->
    </tr>
    <tr>
        <td>Job Title Name</td>
        <!--<td>Internal Server Error</td>-->
    </tr>
    <tr>
        <td>Course Unique Record Identifier</td>
        <!--<td>Internal Server Error</td>-->
    </tr>
    <tr>
        <td>Course Name</td>
        <!--<td>Internal Server Error</td>-->
    </tr>
    <tr>
        <td>Course Number</td>
        <!--<td>Internal Server Error</td>-->
    </tr>
    <tr>
        <td>Course Version</td>
        <!--<td>Internal Server Error</td>-->
    </tr>
    <tr>
        <td>Course Module Score  </td>
        <!--<td>Internal Server Error</td>-->
    </tr>

    <tr>
        <td>Completion Date (with Time)</td>
        <!--<td>Internal Server Error</td>-->
    </tr>


</table></div></div>
<h5 id="http-response-messages"><a name="user-content-http-response-messages" href="#http-response-messages" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Sort Order</h4>
<div class="row"><div class="col-md-9">
<table class="table table-condensed table-striped">
    <tr>
        <th style="width:200px;">Field</th>
        <!--<th>Reason</th>-->
    </tr>
    <tr>
        <td>Org Name</td>
        <!--<td>OK</td>-->
    </tr>
    <tr>
        <td>Institute/Facility</td>
        <!--<td>Unauthorized</td>-->
    </tr>
    <tr>
        <td>Last Name</td>
        <!--<td>Not Found</td>-->
    </tr>
    <tr>
        <td>First Name</td>
        <!--<td>Internal Server Error</td>-->
    </tr>
    <tr>
        <td>Middle Name</td>
        <!--<td>Internal Server Error</td>-->
    </tr>
     <tr>
        <td>Course Name</td>
        <!--<td>Internal Server Error</td>-->
    </tr>

</table>
</div></div>


                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
</div>

  <!--   <div class="footer">
            <img src="/content/images/icon-return.png" class="nav return"/>
             <img src="/content/images/icon-home.png" class="nav home"/>
          <img src="/content/images/logo-healthstream-trans-white.png" class="healthstream-logo"/>
    </div> -->
</body>

    <!--   Core JS Files   -->
    <script src="/content/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="/content/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="/content/assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="/content/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="/content/assets/js/bootstrap-notify.js"></script>



    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="/content/assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="/content/assets/js/demo.js"></script>

</html>
