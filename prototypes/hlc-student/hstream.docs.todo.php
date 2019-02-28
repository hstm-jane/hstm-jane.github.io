<?php include "hstream.docs.include.start.php"; ?>
<style>
.sidebar .nav {
    margin-left:-10px;
    margin-top:-30px;
}
div.wrapper>div.sidebar>div>ul>li>a>p{
   display:none;
}
div.wrapper>div.sidebar>div>ul>li{
   margin-left:0px;
}
div.wrapper>div.sidebar>div>ul>li>ul>li>ul>li {
    margin-left: -18px !important;
   /*list-style-type: circle;*/
   padding-bottom:5px;
   color:#ccc;
}
body > div > div.sidebar > div > ul > li > ul > li > a > p {
    font-size:14px !important;
    line-height:14px !important;
    margin-top:20px !important;
    margin-bottom:10px !important;
}

body > div > div.sidebar > div > ul > li > ul > li > ul > li > ul {
    /*display:inline-block;*/
    margin-top:7px;
}
.sidebar .nav ul p {
    line-height:20px !important;
}
div.wrapper>div.sidebar>div>ul>li>ul>li>ul{
    list-style: none;
        margin-left: 1em;
        padding-left: 1em;
}
div.wrapper>div.sidebar>div>ul>li>ul>li>ul>li>ul>li:before {
   /* margin-left: -20px !important;*/
   display: inline-block;
   content: "-";
   width: 0.5em;
   margin-left: -1em;

   /*text-indent:-5px;*/
}
.nav > li >  a, .nav > li > ul> li> a {
    display:block;
}
.nav > li >  a > p , .nav > li > ul> li>  a > p{
    line-height:35px !important;

}
.nav > li > ul > li > a, .nav > li > ul> li> ul > li > a {
    display:inline-block;
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
                <img src="/content/images/hStream-kinetic-logo.png" class="logo"/>
            </div>

            <ul class="nav">

                <li>
                    <a href="#">
                        <!--<i class="ti-user"></i>-->
                        <p>Kinetic API Reference</p>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <!--<i class="ti-view-list-alt"></i>-->
                                <p>People and Organization</p>
                            </a>
                            <ul>
                                <li><p>Authentication</p></li>
                                <li><p>Authorization</p></li>
                                <li><p>Person</p></li>
                                <li><p>Organization</p></li>
                                <li><p>Relationships</p></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <!--<i class="ti-text"></i>-->
                                <p>Functional Services</p>
                            </a>
                            <ul>
                                <li class="active"><a href="hstream.docs.todo.php"><p>To Do</p></a>
                                            <ul>
                                            <li>
                                             <a href="#get-a-users-tasks">Get a User's Tasks</a>
                                            </li>
                                                <li>
                                                 <a href="#get-a-task">Get a Task</a>
                                                </li>
                                                <li>
                                                <a href="#create-tasks-for-a-user">Create Tasks for a User</a>
                                                </li>
                                                <li>
                                                <a href="#update-a-task">Update a Task</a>
                                                </li>
                                        </li>

                                    </ul>
                                </li>
                                <li><p>Student Groups</p></li>
                                <li><p>Search</p></li>
                                <li><p>Taxonomy</p></li>
                                <li><p>Notifications</p></li>
                                <li><p>Assignments</p></li>
                                <li><p>Completions</p></li>
                                <li><p>Events</p></li>
                            </ul>

                        </li>
                        <li>
                            <a href="#">
                                <!--<i class="ti-text"></i>-->
                                <p>Portfolio Services</p>
                            </a>
                            <ul>
                                <li><a href="hstream.docs.eportfolio.teaching.php"><p>Teaching</p></a></li>
                                <li><a href="hstream.docs.eportfolio.volunteer.php"><p>Volunteer Service</p></a></li>
                                <li><a href="hstream.docs.eportfolio.work.php"><p>Work Experience</p></a></li>
                                <li><p>Awards</p></li>
                                <li><p>Memberships</p></li>
                                <li><p>Licenses</p></li>
                                <li><p>Certifications</p></li>
                                <li><p>Education</p></li>
                                <li><p>Research</p></li>
                                <li><p>Documents</p></li>
                                <li><p>Audits</p></li>
                                <li><p>Activities</p></li>


                            </ul>

                        </li>


                    </ul>

                </li>
                <li>
                    <a href="hstream.docs.eportfolio.teaching.php">
                        <!--<i class="ti-text"></i>-->
                        <p>ePortfolio</p>
                    </a>
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
                        <h5 class="title">To Do API</h4>
                        <p class="category">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    </div>
                    <div class="content">

                        <div class="places-buttons">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>
                                    </h5>
                                   <h2 id="api-endpoints"><a name="user-content-api-endpoints" href="#api-endpoints" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>API Endpoints</h2>
<h3  id="get-a-users-tasks"><a name="user-content-get-a-users-tasks" href="#get-a-users-tasks" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Get a User&rsquo;s Tasks</h2>
<h4 id="request"><a name="user-content-request" href="#request" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Request</h3>
<h5 id="http-request"><a name="user-content-http-request" href="#http-request" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>HTTP Request</h4>
<p><span class="label label-primary">GET</span> <a href="https://www.healthstream.com/api/hs/usertask/v1/user/{UserId}/tasks">https://www.healthstream.com/api/hs/usertask/v1/user/{UserId}/tasks</a></p>
<h5 id="parameters"><a name="user-content-parameters" href="#parameters" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Parameters</h4>
<div class="row"><div class="col-md-9">
<table class="table table-condensed table-striped">
    <tr>
        <th style="width:200px;">Parameter</th>
        <th>Type</th>
        <th>Value</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>UserId<br><span class="label label-danger">Required</span></td>
        <td>URL</td>
        <td>string</td>
        <td></td>
    </tr>
</table>
</div></div>

<h5 id="authorization"><a name="user-content-authorization" href="#authorization" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Authorization</h4>
<p>An Authorization token is <span class="text-danger">required</span> when using this endpoint. The bearer authroization token must be inclued as a header parameter.</p>
<h5 id="request-body"><a name="user-content-request-body" href="#request-body" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Request Body</h4>
<p>A Request Body should not be sent with this request.</p>
<h4 id="response"><a name="user-content-response" href="#response" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Response</h3>
<h5 id="http-response-messages"><a name="user-content-http-response-messages" href="#http-response-messages" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>HTTP Response Messages</h4>
<div class="row"><div class="col-md-9">
<table class="table table-condensed table-striped">
    <tr>
        <th style="width:200px;">HTTP Status Code</th>
        <th>Reason</th>
    </tr>
    <tr>
        <td>200</td>
        <td>OK</td>
    </tr>
    <tr>
        <td>400</td>
        <td>Bad Request</td>
    </tr>
    <tr>
        <td>401</td>
        <td>Unauthorized</td>
    </tr>
    <tr>
        <td>404</td>
        <td>Not Found</td>
    </tr>
    <tr>
        <td>500</td>
        <td>Internal Server Error</td>
    </tr>
</table>
</div></div>

<h5 id="response-body"><a name="user-content-response-body" href="#response-body" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Response Body</h4>
<p>Response Content Type: application/json</p>
<p><div class="codehilite"><pre><span class="p">{</span>
    <span class="nt">&quot;TaskCount&quot;</span><span class="p">:</span><span class="mi">0</span><span class="p">,</span>
    <span class="nt">&quot;Tasks&quot;</span><span class="p">:</span> <span class="p">[</span>
        <span class="p">{</span>
            <span class="nt">&quot;TaskTypeName&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
            <span class="nt">&quot;ClientName&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
            <span class="nt">&quot;LastModifiedDateTime&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
            <span class="nt">&quot;TaskId&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
            <span class="nt">&quot;Title&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
            <span class="nt">&quot;TaskTypeCode&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
            <span class="nt">&quot;TaskStatusCode&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
            <span class="nt">&quot;ActionUrl&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
            <span class="nt">&quot;TaskMetadata&quot;</span> <span class="p">:</span> <span class="p">{</span>
                <span class="nt">&quot;Label&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
                <span class="nt">&quot;Value&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span>
            <span class="p">}</span>
        <span class="p">}</span>
    <span class="p">]</span>
<span class="p">}</span>
</pre></div>
<br />
<br></p>
<h3  id="get-a-task"><a name="user-content-get-a-task" href="#get-a-task" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Get a Task</h2>
<h4 id="request_1"><a name="user-content-request_1" href="#request_1" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Request</h3>
<h5 id="http-request_1"><a name="user-content-http-request_1" href="#http-request_1" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>HTTP Request</h4>
<p><span class="label label-primary">GET</span> <a href="https://www.healthstream.com/api/hs/usertask/v1/user/{UserId}/task/{TaskId">https://www.healthstream.com/api/hs/usertask/v1/user/{UserId}/task/{TaskId</a>}</p>
<h5 id="parameters_1"><a name="user-content-parameters_1" href="#parameters_1" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Parameters</h4>
<div class="row"><div class="col-md-9">
<table class="table table-condensed table-striped">
    <tr>
        <th style="width:200px;">Parameter</th>
        <th>Type</th>
        <th>Value</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>UserId<br><span class="label label-danger">Required</span></td>
        <td>URL</td>
        <td>string</td>
        <td></td>
    </tr>
    <tr>
        <td>TaskId<br><span class="label label-danger">Required</span></td>
        <td>URL</td>
        <td>string</td>
        <td></td>
    </tr>
</table>
</div></div>

<h5 id="authorization_1"><a name="user-content-authorization_1" href="#authorization_1" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Authorization</h4>
<p>An Authorization token is <span class="text-danger">required</span> when using this endpoint. The bearer authroization token must be inclued as a header parameter.</p>
<h5 id="request-body_1"><a name="user-content-request-body_1" href="#request-body_1" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Request Body</h4>
<p>A Request Body should not be sent with this request.</p>
<h4 id="response_1"><a name="user-content-response_1" href="#response_1" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Response</h3>
<h5 id="http-response-messages_1"><a name="user-content-http-response-messages_1" href="#http-response-messages_1" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>HTTP Response Messages</h4>
<div class="row"><div class="col-md-9">
<table class="table table-condensed table-striped">
    <tr>
        <th style="width:200px;">HTTP Status Code</th>
        <th>Reason</th>
    </tr>
    <tr>
        <td>200</td>
        <td>OK</td>
    </tr>
    <tr>
        <td>400</td>
        <td>Bad Request</td>
    </tr>
    <tr>
        <td>401</td>
        <td>Unauthorized</td>
    </tr>
    <tr>
        <td>404</td>
        <td>Not Found</td>
    </tr>
    <tr>
        <td>500</td>
        <td>Internal Server Error</td>
    </tr>
</table>
</div></div>

<h5 id="response-body_1"><a name="user-content-response-body_1" href="#response-body_1" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Response Body</h4>
<p>Response Content Type: application/json</p>
<p><div class="codehilite"><pre><span class="p">{</span>
    <span class="nt">&quot;TaskTypeName&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
    <span class="nt">&quot;ClientName&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
    <span class="nt">&quot;LastModifiedDateTime&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
    <span class="nt">&quot;TaskId&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
    <span class="nt">&quot;Title&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
    <span class="nt">&quot;TaskTypeCode&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
    <span class="nt">&quot;TaskStatusCode&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
    <span class="nt">&quot;ActionUrl&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
    <span class="nt">&quot;TaskMetadata&quot;</span> <span class="p">:</span> <span class="p">{</span>
        <span class="nt">&quot;Label&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
        <span class="nt">&quot;Value&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span>
    <span class="p">}</span>
<span class="p">}</span>
</pre></div>
<br />
<br></p>
<h3  id="create-tasks-for-a-user"><a name="user-content-create-tasks-for-a-user" href="#create-tasks-for-a-user" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Create Tasks for a User</h2>
<h4 id="request_2"><a name="user-content-request_2" href="#request_2" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Request</h3>
<h5 id="http-request_2"><a name="user-content-http-request_2" href="#http-request_2" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>HTTP Request</h4>
<p><span class="label label-warning">POST</span> <a href="https://www.healthstream.com/api/hs/usertask/v1/user/{UserId}/tasks">https://www.healthstream.com/api/hs/usertask/v1/user/{UserId}/tasks</a></p>
<h5 id="parameters_2"><a name="user-content-parameters_2" href="#parameters_2" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Parameters</h4>
<div class="row"><div class="col-md-9">
<table class="table table-condensed table-striped">
    <tr>
        <th style="width:200px;">Parameter</th>
        <th>Type</th>
        <th>Value</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>UserId<br><span class="label label-danger">Required</span></td>
        <td>URL</td>
        <td>string</td>
        <td></td>
    </tr>
</table>
</div></div>

<h5 id="authorization_2"><a name="user-content-authorization_2" href="#authorization_2" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Authorization</h4>
<p>An Authorization token is <span class="text-danger">required</span> when using this endpoint. The bearer authroization token must be inclued as a header parameter.</p>
<h5 id="request-body_2"><a name="user-content-request-body_2" href="#request-body_2" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Request Body</h4>
<p>Request Body Content Type: application/json</p>
<div class="codehilite"><pre><span class="p">[</span>
    <span class="p">{</span>
        <span class="nt">&quot;Title&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
        <span class="nt">&quot;TaskTypeCode&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
        <span class="nt">&quot;TaskStatusCode&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
        <span class="nt">&quot;ActionUrl&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
        <span class="nt">&quot;TaskMetadata&quot;</span> <span class="p">:</span> <span class="p">[</span>
            <span class="p">{</span>
                <span class="nt">&quot;Label&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
                <span class="nt">&quot;Value&quot;</span> <span class="p">:</span> <span class="s2">&quot;string&quot;</span>
            <span class="p">}</span>
        <span class="p">]</span>
    <span class="p">}</span>
<span class="p">]</span>
</pre></div>


<p>Note: TaskStatusCode is optional, if not included the task will be created with a status of New</p>
<h4 id="response_2"><a name="user-content-response_2" href="#response_2" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Response</h3>
<h5 id="http-response-messages_2"><a name="user-content-http-response-messages_2" href="#http-response-messages_2" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>HTTP Response Messages</h4>
<div class="row"><div class="col-md-9">
<table class="table table-condensed table-striped">
    <tr>
        <th style="width:200px;">HTTP Status Code</th>
        <th>Reason</th>
    </tr>
    <tr>
        <td>200</td>
        <td>OK</td>
    </tr>
    <tr>
        <td>400</td>
        <td>Bad Request</td>
    </tr>
    <tr>
        <td>401</td>
        <td>Unauthorized</td>
    </tr>
    <tr>
        <td>404</td>
        <td>Not Found</td>
    </tr>
    <tr>
        <td>500</td>
        <td>Internal Server Error</td>
    </tr>
</table>
</div></div>

<h5 id="response-body_2"><a name="user-content-response-body_2" href="#response-body_2" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Response Body</h4>
<p>Response Content Type: application/json</p>
<div class="codehilite"><pre><span class="p">{</span>
    <span class="nt">&quot;SuccessTaskCount&quot;</span><span class="p">:</span> <span class="mi">0</span><span class="p">,</span>
    <span class="nt">&quot;FailedTaskCount&quot;</span><span class="p">:</span> <span class="mi">0</span><span class="p">,</span>
    <span class="nt">&quot;UserId&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
    <span class="nt">&quot;SuccessTasks&quot;</span><span class="p">:</span> <span class="p">[</span>
        <span class="p">{</span>
            <span class="nt">&quot;Task&quot;</span><span class="p">:</span> <span class="p">{</span>
                <span class="nt">&quot;TaskId&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
                <span class="nt">&quot;Title&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
                <span class="nt">&quot;TaskTypeCode&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
                <span class="nt">&quot;TaskStatusCode&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
                <span class="nt">&quot;ActionUrl&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
                <span class="nt">&quot;TaskMetadata&quot;</span><span class="p">:</span> <span class="p">[</span>
                    <span class="p">{</span>
                        <span class="nt">&quot;Label&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
                        <span class="nt">&quot;Value&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span>
                    <span class="p">}</span>
                <span class="p">]</span>
            <span class="p">},</span>
            <span class="nt">&quot;Error&quot;</span><span class="p">:</span> <span class="p">{</span>
                <span class="nt">&quot;Code&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
                <span class="nt">&quot;Message&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span>
            <span class="p">}</span>
        <span class="p">}</span>
    <span class="p">],</span>
    <span class="nt">&quot;FailedTasks&quot;</span><span class="p">:</span> <span class="p">[</span>
        <span class="p">{</span>
            <span class="nt">&quot;Task&quot;</span><span class="p">:</span> <span class="p">{</span>
                <span class="nt">&quot;TaskId&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
                <span class="nt">&quot;Title&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
                <span class="nt">&quot;TaskTypeCode&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
                <span class="nt">&quot;TaskStatusCode&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
                <span class="nt">&quot;ActionUrl&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
                <span class="nt">&quot;TaskMetadata&quot;</span><span class="p">:</span> <span class="p">[</span>
                    <span class="p">{</span>
                        <span class="nt">&quot;Label&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
                        <span class="nt">&quot;Value&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span>
                    <span class="p">}</span>
                <span class="p">]</span>
            <span class="p">},</span>
            <span class="nt">&quot;Error&quot;</span><span class="p">:</span> <span class="p">{</span>
                <span class="nt">&quot;Code&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
                <span class="nt">&quot;Message&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span>
            <span class="p">}</span>
        <span class="p">}</span>
    <span class="p">]</span>
<span class="p">}</span>
</pre></div>


<h3  id="update-a-task"><a name="user-content-update-a-task" href="#update-a-task" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Update a Task</h2>
<h4 id="request_3"><a name="user-content-request_3" href="#request_3" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Request</h3>
<h5 id="http-request_3"><a name="user-content-http-request_3" href="#http-request_3" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>HTTP Request</h4>
<p><span class="label label-warning">PUT</span> <a href="https://www.healthstream.com/api/hs/usertask/v1/user/{UserId}/task/{TaskId">https://www.healthstream.com/api/hs/usertask/v1/user/{UserId}/task/{TaskId</a>}</p>
<h5 id="parameters_3"><a name="user-content-parameters_3" href="#parameters_3" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Parameters</h4>
<div class="row"><div class="col-md-9">
<table class="table table-condensed table-striped">
    <tr>
        <th style="width:200px;">Parameter</th>
        <th>Type</th>
        <th>Value</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>UserId<br><span class="label label-danger">Required</span></td>
        <td>URL</td>
        <td>string</td>
        <td></td>
    </tr>
    <tr>
        <td>TaskId<br><span class="label label-danger">Required</span></td>
        <td>URL</td>
        <td>string</td>
        <td></td>
    </tr>
</table>
</div></div>

<h5 id="authorization_3"><a name="user-content-authorization_3" href="#authorization_3" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Authorization</h4>
<p>An Authorization token is <span class="text-danger">required</span> when using this endpoint. The bearer authroization token must be inclued as a header parameter.</p>
<h5 id="request-body_3"><a name="user-content-request-body_3" href="#request-body_3" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Request Body</h4>
<p>Request Body Content Type: application/json</p>
<div class="codehilite"><pre><span class="p">{</span>
    <span class="nt">&quot;Title&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
    <span class="nt">&quot;TaskTypeCode&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
    <span class="nt">&quot;TaskStatusCode&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
    <span class="nt">&quot;ActionUrl&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
    <span class="nt">&quot;TaskMetadata&quot;</span><span class="p">:</span> <span class="p">[</span>
        <span class="p">{</span>
            <span class="nt">&quot;Label&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span><span class="p">,</span>
            <span class="nt">&quot;Value&quot;</span><span class="p">:</span> <span class="s2">&quot;string&quot;</span>
        <span class="p">}</span>
    <span class="p">]</span>
<span class="p">}</span>
</pre></div>


<h4 id="response_3"><a name="user-content-response_3" href="#response_3" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Response</h3>
<h5 id="http-response-messages_3"><a name="user-content-http-response-messages_3" href="#http-response-messages_3" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>HTTP Response Messages</h4>
<div class="row"><div class="col-md-9">
<table class="table table-condensed table-striped">
    <tr>
        <th style="width:200px;">HTTP Status Code</th>
        <th>Reason</th>
    </tr>
    <tr>
        <td>202</td>
        <td>Accepted</td>
    </tr>
    <tr>
        <td>400</td>
        <td>Bad Request</td>
    </tr>
    <tr>
        <td>401</td>
        <td>Unauthorized</td>
    </tr>
    <tr>
        <td>403</td>
        <td>Unauthorized</td>
    </tr>
    <tr>
        <td>404</td>
        <td>Not Found</td>
    </tr>
    <tr>
        <td>412</td>
        <td>PreConditionFailed</td>
    </tr>
    <tr>
        <td>500</td>
        <td>Internal Server Error</td>
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
