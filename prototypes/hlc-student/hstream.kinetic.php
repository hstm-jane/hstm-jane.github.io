<?php include("includes/helpers/_auth.php");?>
<?php include "hstream.include.start.php"; ?>

    <body class="hstream">
    <div class="wrapper kinetic">
        <div class="content">
		<div class="container">
			<div class="row" style="background-color:#FFFFFF">
				<div class="col-md-12">
					<div class="row">
<img src="/content/images/hstream-logo.png" class="logo-sm"/>
</div>

<div class="row" style="background-color:#29719f;color:#ffffff;padding:10px;">
<h1 style="color:#ffffff;margin: 0px;"> To Do API</h1>
</div>

<h1 id="overview"><a name="user-content-overview" href="#overview" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Overview</h1>
<p>Base URL: <a href="https://www.healthstream.com/api/hs/usertask/v1">https://www.healthstream.com/api/hs/usertask/v1</a><br />
API Version: 1.0<br />
Documentation Last Updated: 11/19/2016</p>
<h2 id="table-of-contents"><a name="user-content-table-of-contents" href="#table-of-contents" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Table of Contents</h2>
<div class="toc">
<ul>
<li><a href="#overview">Overview</a><ul>
<li><a href="#table-of-contents">Table of Contents</a></li>
</ul>
</li>
<li><a href="#api-endpoints">API Endpoints</a><ul>
<li><a href="#get-a-users-tasks">Get a User&rsquo;s Tasks</a><ul>
<li><a href="#request">Request</a><ul>
<li><a href="#http-request">HTTP Request</a></li>
<li><a href="#parameters">Parameters</a></li>
<li><a href="#authorization">Authorization</a></li>
<li><a href="#request-body">Request Body</a></li>
</ul>
</li>
<li><a href="#response">Response</a><ul>
<li><a href="#http-response-messages">HTTP Response Messages</a></li>
<li><a href="#response-body">Response Body</a></li>
</ul>
</li>
</ul>
</li>
<li><a href="#get-a-task">Get a Task</a><ul>
<li><a href="#request_1">Request</a><ul>
<li><a href="#http-request_1">HTTP Request</a></li>
<li><a href="#parameters_1">Parameters</a></li>
<li><a href="#authorization_1">Authorization</a></li>
<li><a href="#request-body_1">Request Body</a></li>
</ul>
</li>
<li><a href="#response_1">Response</a><ul>
<li><a href="#http-response-messages_1">HTTP Response Messages</a></li>
<li><a href="#response-body_1">Response Body</a></li>
</ul>
</li>
</ul>
</li>
<li><a href="#create-tasks-for-a-user">Create Tasks for a User</a><ul>
<li><a href="#request_2">Request</a><ul>
<li><a href="#http-request_2">HTTP Request</a></li>
<li><a href="#parameters_2">Parameters</a></li>
<li><a href="#authorization_2">Authorization</a></li>
<li><a href="#request-body_2">Request Body</a></li>
</ul>
</li>
<li><a href="#response_2">Response</a><ul>
<li><a href="#http-response-messages_2">HTTP Response Messages</a></li>
<li><a href="#response-body_2">Response Body</a></li>
</ul>
</li>
</ul>
</li>
<li><a href="#update-a-task">Update a Task</a><ul>
<li><a href="#request_3">Request</a><ul>
<li><a href="#http-request_3">HTTP Request</a></li>
<li><a href="#parameters_3">Parameters</a></li>
<li><a href="#authorization_3">Authorization</a></li>
<li><a href="#request-body_3">Request Body</a></li>
</ul>
</li>
<li><a href="#response_3">Response</a><ul>
<li><a href="#http-response-messages_3">HTTP Response Messages</a></li>
<li><a href="#response-body_3">Response Body</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</div>
<h1 id="api-endpoints"><a name="user-content-api-endpoints" href="#api-endpoints" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>API Endpoints</h1>
<h2 id="get-a-users-tasks"><a name="user-content-get-a-users-tasks" href="#get-a-users-tasks" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Get a User&rsquo;s Tasks</h2>
<h3 id="request"><a name="user-content-request" href="#request" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Request</h3>
<h4 id="http-request"><a name="user-content-http-request" href="#http-request" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>HTTP Request</h4>
<p><span class="label label-primary">GET</span> <a href="https://www.healthstream.com/api/hs/usertask/v1/user/{UserId}/tasks">https://www.healthstream.com/api/hs/usertask/v1/user/{UserId}/tasks</a></p>
<h4 id="parameters"><a name="user-content-parameters" href="#parameters" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Parameters</h4>
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

<h4 id="authorization"><a name="user-content-authorization" href="#authorization" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Authorization</h4>
<p>An Authorization token is <span class="text-danger">required</span> when using this endpoint. The bearer authroization token must be inclued as a header parameter.</p>
<h4 id="request-body"><a name="user-content-request-body" href="#request-body" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Request Body</h4>
<p>A Request Body should not be sent with this request.</p>
<h3 id="response"><a name="user-content-response" href="#response" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Response</h3>
<h4 id="http-response-messages"><a name="user-content-http-response-messages" href="#http-response-messages" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>HTTP Response Messages</h4>
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

<h4 id="response-body"><a name="user-content-response-body" href="#response-body" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Response Body</h4>
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
<h2 id="get-a-task"><a name="user-content-get-a-task" href="#get-a-task" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Get a Task</h2>
<h3 id="request_1"><a name="user-content-request_1" href="#request_1" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Request</h3>
<h4 id="http-request_1"><a name="user-content-http-request_1" href="#http-request_1" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>HTTP Request</h4>
<p><span class="label label-primary">GET</span> <a href="https://www.healthstream.com/api/hs/usertask/v1/user/{UserId}/task/{TaskId">https://www.healthstream.com/api/hs/usertask/v1/user/{UserId}/task/{TaskId</a>}</p>
<h4 id="parameters_1"><a name="user-content-parameters_1" href="#parameters_1" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Parameters</h4>
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

<h4 id="authorization_1"><a name="user-content-authorization_1" href="#authorization_1" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Authorization</h4>
<p>An Authorization token is <span class="text-danger">required</span> when using this endpoint. The bearer authroization token must be inclued as a header parameter.</p>
<h4 id="request-body_1"><a name="user-content-request-body_1" href="#request-body_1" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Request Body</h4>
<p>A Request Body should not be sent with this request.</p>
<h3 id="response_1"><a name="user-content-response_1" href="#response_1" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Response</h3>
<h4 id="http-response-messages_1"><a name="user-content-http-response-messages_1" href="#http-response-messages_1" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>HTTP Response Messages</h4>
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

<h4 id="response-body_1"><a name="user-content-response-body_1" href="#response-body_1" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Response Body</h4>
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
<h2 id="create-tasks-for-a-user"><a name="user-content-create-tasks-for-a-user" href="#create-tasks-for-a-user" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Create Tasks for a User</h2>
<h3 id="request_2"><a name="user-content-request_2" href="#request_2" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Request</h3>
<h4 id="http-request_2"><a name="user-content-http-request_2" href="#http-request_2" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>HTTP Request</h4>
<p><span class="label label-warning">POST</span> <a href="https://www.healthstream.com/api/hs/usertask/v1/user/{UserId}/tasks">https://www.healthstream.com/api/hs/usertask/v1/user/{UserId}/tasks</a></p>
<h4 id="parameters_2"><a name="user-content-parameters_2" href="#parameters_2" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Parameters</h4>
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

<h4 id="authorization_2"><a name="user-content-authorization_2" href="#authorization_2" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Authorization</h4>
<p>An Authorization token is <span class="text-danger">required</span> when using this endpoint. The bearer authroization token must be inclued as a header parameter.</p>
<h4 id="request-body_2"><a name="user-content-request-body_2" href="#request-body_2" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Request Body</h4>
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
<h3 id="response_2"><a name="user-content-response_2" href="#response_2" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Response</h3>
<h4 id="http-response-messages_2"><a name="user-content-http-response-messages_2" href="#http-response-messages_2" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>HTTP Response Messages</h4>
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

<h4 id="response-body_2"><a name="user-content-response-body_2" href="#response-body_2" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Response Body</h4>
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


<h2 id="update-a-task"><a name="user-content-update-a-task" href="#update-a-task" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Update a Task</h2>
<h3 id="request_3"><a name="user-content-request_3" href="#request_3" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Request</h3>
<h4 id="http-request_3"><a name="user-content-http-request_3" href="#http-request_3" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>HTTP Request</h4>
<p><span class="label label-warning">PUT</span> <a href="https://www.healthstream.com/api/hs/usertask/v1/user/{UserId}/task/{TaskId">https://www.healthstream.com/api/hs/usertask/v1/user/{UserId}/task/{TaskId</a>}</p>
<h4 id="parameters_3"><a name="user-content-parameters_3" href="#parameters_3" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Parameters</h4>
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

<h4 id="authorization_3"><a name="user-content-authorization_3" href="#authorization_3" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Authorization</h4>
<p>An Authorization token is <span class="text-danger">required</span> when using this endpoint. The bearer authroization token must be inclued as a header parameter.</p>
<h4 id="request-body_3"><a name="user-content-request-body_3" href="#request-body_3" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Request Body</h4>
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


<h3 id="response_3"><a name="user-content-response_3" href="#response_3" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Response</h3>
<h4 id="http-response-messages_3"><a name="user-content-http-response-messages_3" href="#http-response-messages_3" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>HTTP Response Messages</h4>
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

<h4 id="response-body_3"><a name="user-content-response-body_3" href="#response-body_3" class="headeranchor-link" aria-hidden="true"><span class="headeranchor"></span></a>Response Body</h4>
				</div>				
			</div>
		</div>

           
        </div>
    </div>

<?php include "hstream.include.footer.php"; ?>
<?php include "hstream.include.end.php"; ?>