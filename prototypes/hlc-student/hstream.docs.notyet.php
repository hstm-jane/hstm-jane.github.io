<?php include("includes/helpers/_auth.php");?>
<?php include "hstream.docs.include.start.php"; ?>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
           <div class="docs-logo-container">
               <img src="/content/images/hStream-kinetic-logo.png" class="logo"/>
            </div>

            <ul class="nav">
                <li>
                    <a href="hstream.docs.php">
                        <!--<i class="ti-panel"></i>-->
                        <p>Introduction</p>
                    </a>
                       <ul>
                        <li>
                            <a href="hstream.docs.notyet.php">
                                <!--<i class="ti-view-list-alt"></i>-->
                                <p>Getting Started</p>
                            </a>
                        </li>
                         <li>
                            <a href="hstream.docs.notyet.php">
                                <!--<i class="ti-view-list-alt"></i>-->
                                <p>Guides</p>
                            </a>
                        </li>
                        </ul>
                </li>
                <li>
                    <a href="hstream.docs.api.php">
                        <!--<i class="ti-user"></i>-->
                        <p>Kinetic API Reference</p>
                    </a>
                    <ul>
                        <li>
                            <a href="hstream.docs.notyet.php">
                                <!--<i class="ti-view-list-alt"></i>-->
                                <p>Authorization</p>
                            </a>
                        </li>
                        <li>
                            <a href="hstream.docs.notyet.php">
                                <!--<i class="ti-text"></i>-->
                                <p>Organization</p>
                            </a>
                        </li>
                        <li>
                            <a href="hstream.docs.notyet.php">
                                <!--<i class="ti-text"></i>-->
                                <p>Person</p>
                            </a>
                            
                        </li>
                        <li>
                            <a href="hstream.docs.notyet.php">
                                <!--<i class="ti-text"></i>-->
                                <p>Student Groups</p>
                            </a>
                        </li>
                        <li>
                            <a href="hstream.docs.todo.php">
                                <!--<i class="ti-text"></i>-->
                                <p>To Do</p>
                            </a>
                        </li>
                    </ul>
                </li>
                 <li>
                    <a href="hstream.docs.flow.php">
                        <!--<i class="ti-user"></i>-->
                        <p>Flow Data APIs</p>
                    </a>
                    <ul>
                        <li>- <a href="#">Enrollment and Completion API</a></li>
                        <li>- <a href="#">Course Attendance API</a></li>
                        <li>- <a href="#">Standard Evaluation Data API - Summary &amp; Detail</a></li>
                        <li>- <a href="#">TQA Summary and Detail API</a></li>
                        <li>- <a href="#">Demographics Data API</a></li>
                        <li>- <a href="#">Org, Facility and Department Login Summary API</a></li>
                        <li>- <a href="#">Student Group Criteria API</a></li>
                        <li>- <a href="#">Discipline/Certification Listing API</a></li>
                        <li>- <a href="#">Demographics Users By Role API</a></li>
                        <li>- <a href="#">Employee Hierarchy API</a></li>
                        <li>- <a href="#">Course Publishing Information API</a></li>
                        <li>- <a href="#">Course Equivalency API</a></li>
                        <li>- <a href="#">Course meta data report and Authored course API</a></li>
                    </ul>
                </li>
                
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
                    <div class="header">
                        
                    </div>
                    <div class="content">
                      
                      
                           
                    </div>
                </div>
            </div>
        </div>


       

    </div>
</div>
    <div class="footer">
            <img src="/content/images/icon-return.png" class="nav return"/>
          <!--   <img src="/content/images/icon-home.png" class="nav home"/>-->
          <img src="/content/images/logo-healthstream-trans-white.png" class="healthstream-logo"/>
    </div>

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
