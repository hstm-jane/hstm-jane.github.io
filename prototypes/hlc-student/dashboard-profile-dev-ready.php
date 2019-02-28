<?php

include "includes/helpers/helpers.php";

ob_start();                      // start capturing output
include "includes/applauncher.newstyle.php";   // execute the file
$applauncher = ob_get_contents();    // get the contents from the buffer
ob_end_clean();

$patterns['start']['title'] = 'Brad K. Bruno | HealthStream';

if ($_SERVER['HTTP_HOST'] != 'hstm-hccdemo-employee.patternmanager.com') {

    $patterns['header'] = array(
        'classes' => array('site-header--assessments'),
        'userName' => 'Darcy L. Crane',
        'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">',
        'mainNav' => '
        <li class="{active=dashboard}"><a href="/dashboard-manager-dev-ready.php">MyTeam</a></li>
        <li class="{active=todo}"><a href="/todo.php?rater">To Do</a></li>
        <li class="{active=completed}"><a href="/completed-filtered.php">Completed</a></li>
        <li class="{active=profile} dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <i class="fa fa-angle-down"></i></a>
        <ul class="dropdown-menu">
        <li><a href="/advanced-practice.php">Advanced Practice</a></li>
        <li><a href="/certifications.php">Certifications</a></li>
        <li><a href="/documents.php">Documents</a></li>
        <li><a href="/education.php">Education</a></li>
        <li><a href="/goals.php">Goals</a></li>
        <li><a href="/job-descriptions.php">Job Descriptions</a></li>
        <li><a href="/disciplines-licenses.php">Licenses</a></li>
        <li><a href="/notes.php">Notes</a></li>
        <li><a href="/personal-information.php">Personal Information</a></li>
        </ul>
        </li>

        <li class="{active=raters}"><a href="/assessment-overview.php">Raters</a></li>
        <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#" >Help</a></li>
        <li class="visible-xs"><a href="#" >Logout</a></li>' . $applauncher,
        'mainNavActive' =>'dashboard',
    );
}
else {


    $patterns['header'] = array(
        'classes' => array('site-header--assessments'),
        'userName' => 'Stephanie P. Juniper',
        'userImage' => '<img src="./content/images/avatar.jpg">',
        'mainNav' => '
        <li class="{active=dashboard}"><a href="/dashboard-manager-dev-ready.php">MyTeam</a></li>
        <li class="{active=todo}"><a href="/todo-hccdemo-employee.php">To Do</a></li>
        <li class="{active=completed}"><a href="/completed-filtered.php">Completed</a></li>
        <li class="{active=profile} dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <i class="fa fa-angle-down"></i></a>
        <ul class="dropdown-menu">
        <li><a href="/advanced-practice.php">Advanced Practice</a></li>
        <li><a href="/certifications.php">Certifications</a></li>
        <li><a href="/documents.php">Documents</a></li>
        <li><a href="/education.php">Education</a></li>
        <li><a href="/goals.php">Goals</a></li>
        <li><a href="/job-descriptions.php">Job Descriptions</a></li>
        <li><a href="/disciplines-licenses.php">Licenses</a></li>
        <li><a href="/notes.php">Notes</a></li>
        <li><a href="/personal-information.php">Personal Information</a></li>
        </ul>
        </li>
        <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#" >Help</a></li>
        <li class="visible-xs"><a href="#" >Logout</a></li>' . $applauncher,
        'mainNavActive' =>'dashboard',
    );

}

// $patterns['focus']['supporting'] = ' ';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<div class="layout layout-dashboard-manager">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <section class="profile-return-link">
                    <a href="dashboard-manager-dev-ready.php"><i class="fa fa-fw fa-chevron-left"></i>Return to MyTeam</a>
                </section>
                <div class="panel panel-default panel-employee">
                    <div class="panel-body text-center clearfix">
                        <div class="upload-photo-btn center-block">
                            <div class="pv-lg ">
                                <img src="/content/images/prototype-actors/bbrune.jpg" alt="Contact" class="center-block img-responsive img-circle img-thumbnail thumb96">
                                            <!-- <div class="img-circle img-thumbnail ">
                                                <div class="profile-initial-circle center-block"> MW </div>
                                            </div> -->
                                            <a href="#modal-upload-photo" data-toggle="modal">
                                                <span class="profile-photo-edit">
                                                    <em class="fa fa-camera"></em>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <h3 class="m0 text-bold">
                                       <span class="employee-name">Brad K. Bruno</span>
                                       <small>
                                           <span class="job-title">Clinical Nurse Supervisor</span>

                                           <!-- <span class="department">Radiology</span> -->
                                       </small>
                                   </h3>
                                   <div class="mv-lg">
                                    <?php if(isset($_GET['inactive'])) { ?>
                                        <div class="badge badge-warning">Inactive</div>
                                    <?php } else if(isset($_GET['loa'])) { ?>
                                        <div class="badge badge-info" style="background-color:#f3ca06">On Leave </div>
                                        <!-- <div class="text-muted text-sm mt-sm" style="font-style:italic;"> Leave of Absense ends <?=date('M j, Y',strtotime('+30days'))?></div> -->
                                    <?php } else  { ?>
                                        <div class="badge badge-success">Active</div>
                                    <?php } ?>
                                </div>
                                <div class="text-center">
                                    <a href="#modal-message-single" data-toggle="modal" class="btn btn-blue">Send message</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default  panel-direct-reports">
                            <div class="panel-heading">
                                <div class="panel-title text-center">Employees</div>
                                <div class="pull-right" style="margin-right:-5px;">
                                    <a href="#modal-team" data-toggle="modal" class="btn btn-xs btn-default btn-svg" title="View List">
                                        <!-- <em class="fa fa-list"></em> -->
                                        <svg aria-hidden="true" data-prefix="fal" data-icon="list-ul" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-list-ul fa-w-16">
                                            <path fill="currentColor" d="M506 114H134a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h372a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm6 154v-24a6 6 0 0 0-6-6H134a6 6 0 0 0-6 6v24a6 6 0 0 0 6 6h372a6 6 0 0 0 6-6zm0 160v-24a6 6 0 0 0-6-6H134a6 6 0 0 0-6 6v24a6 6 0 0 0 6 6h372a6 6 0 0 0 6-6zM48 60c-19.882 0-36 16.118-36 36s16.118 36 36 36 36-16.118 36-36-16.118-36-36-36zm0 160c-19.882 0-36 16.118-36 36s16.118 36 36 36 36-16.118 36-36-16.118-36-36-36zm0 160c-19.882 0-36 16.118-36 36s16.118 36 36 36 36-16.118 36-36-16.118-36-36-36z" class=""></path>
                                        </svg>
                                    </a>
                                    <a href="dashboard-manager-team-chart-test10.php" target="_new" class="view-chart btn btn-xs btn-default btn-svg" title="View Org Chart">
                                        <svg aria-hidden="true" data-prefix="fal" data-icon="sitemap" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-sitemap fa-w-20">
                                            <path fill="currentColor" d="M616 320h-72v-48c0-26.468-21.532-48-48-48H336v-32h56c13.255 0 24-10.745 24-24V24c0-13.255-10.745-24-24-24H248c-13.255 0-24 10.745-24 24v144c0 13.255 10.745 24 24 24h56v32H144c-26.467 0-48 21.532-48 48v48H24c-13.255 0-24 10.745-24 24v144c0 13.255 10.745 24 24 24h144c13.255 0 24-10.745 24-24V344c0-13.255-10.745-24-24-24h-40v-48c0-8.822 7.178-16 16-16h160v64h-56c-13.255 0-24 10.745-24 24v144c0 13.255 10.745 24 24 24h144c13.255 0 24-10.745 24-24V344c0-13.255-10.745-24-24-24h-56v-64h160c8.822 0 16 7.178 16 16v48h-40c-13.255 0-24 10.745-24 24v144c0 13.255 10.745 24 24 24h144c13.255 0 24-10.745 24-24V344c0-13.255-10.745-24-24-24zm-456 32v128H32V352h128zm224 0v128H256V352h128zM256 160V32h128v128H256zm352 320H480V352h128v128z" class=""></path>
                                        </svg>
                                    </a>
                                    <?php if(isset($_GET['noemail'])) { ?>
                                        <div data-toggle="tooltip" data-placement="left" title="To message your team, add an email address under your Account Settings." class="disabled-email-button">
                                            <button type="button" class="btn btn-xs btn-default btn-svg disabled" disabled>
                                                <!-- <em class="fa fa-list"></em> -->
                                                <svg aria-hidden="true" data-prefix="fal" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16">
                                                    <path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z" class=""></path>
                                                </svg>
                                            </button>
                                        </div>
                                    <?php } else { ?>
                                        <button type="button" class="btn btn-xs btn-default btn-svg " data-target="#modal-team-message-all" data-toggle="modal" data-backdrop="static" data-keyboard="false" title="Message Team">
                                            <!-- <em class="fa fa-list"></em> -->
                                            <svg aria-hidden="true" data-prefix="fal" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16">
                                                <path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z" class=""></path>
                                            </svg>
                                        </button>
                                    <?php } ?>
                                </div>
                                <div class="clearfix pr pt-sm team-result-count"><small class="text-muted pull-left ">Showing 1 - <span class="number-employees">25</span> of 49</small></div>
                            </div>
                            <div class="panel-body">
                                <a href="#" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/19.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </div>
                                        <div class="media-body pt-sm">
                                            <div>Michele Brown
                                                <div class="text-sm text-muted">Nurse Manager - Acute Care</div>
                                            </div>
                                            <!-- <p class="text-muted text-sm">3 Tasks </p> -->
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/72.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </div>
                                        <div class="media-body pt-sm">
                                            <div>Nicholas Frazier
                                                <div class="text-sm text-muted">Quality Coordinator (RN)</div>
                                            </div>
                                            <!-- <p class="text-muted text-sm">0 Tasks </p> -->
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/83.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </div>
                                        <div class="media-body pt-sm">
                                            <div>Chris Horton
                                                <div class="text-sm text-muted">Diabetes Educator (RN)</div>
                                            </div>
                                            <!-- <p class="text-muted text-sm">1 Tasks / <span class="text-warning">1 Past Due</span> </p> -->
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/76.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </div>
                                        <div class="media-body pt-sm">
                                            <div>Ella Lane
                                                <div class="text-sm text-muted">Case Manager (RN)</div>
                                            </div>
                                            <!-- <p class="text-muted text-sm">2 Tasks </p> -->
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/78.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </div>
                                        <div class="media-body pt-sm">
                                            <div>Andrea Martinez
                                                <div class="text-sm text-muted">LPN - I.V. Certified</div>
                                            </div>
                                            <!-- <p class="text-muted text-sm">9 Tasks / <span class="text-warning">2 Past Due</span><</p> -->
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/8.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </div>
                                        <div class="media-body pt-sm">
                                            <div>Tanya Rivera
                                                <div class="text-sm text-muted">Nurse - Staff (RN) - Acute Care</div>
                                            </div>
                                            <!-- <p class="text-muted text-sm">8 Tasks </p> -->
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/98.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </div>
                                        <div class="media-body pt-sm">
                                            <div>Elmer Romero
                                                <div class="text-sm text-muted">Nurse - Staff (RN) - Telephone</div>
                                            </div>
                                            <!-- <p class="text-muted text-sm">5 Tasks / <span class="text-warning">1 Past Due</span></p> -->
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/19.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </div>
                                        <div class="media-body pt-sm">
                                            <div>Michele Brown
                                                <div class="text-sm text-muted">Nurse Manager - Acute Care</div>
                                            </div>
                                            <!-- <p class="text-muted text-sm">3 Tasks </p> -->
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/72.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </div>
                                        <div class="media-body pt-sm">
                                            <div>Nicholas Frazier
                                                <div class="text-sm text-muted">Quality Coordinator (RN)</div>
                                            </div>
                                            <!-- <p class="text-muted text-sm">0 Tasks </p> -->
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/83.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </div>
                                        <div class="media-body pt-sm">
                                            <div>Chris Horton
                                                <div class="text-sm text-muted">Diabetes Educator (RN)</div>
                                            </div>
                                            <!-- <p class="text-muted text-sm">1 Tasks / <span class="text-warning">1 Past Due</span> </p> -->
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/76.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </div>
                                        <div class="media-body pt-sm">
                                            <div>Ella Lane
                                                <div class="text-sm text-muted">Case Manager (RN)</div>
                                            </div>
                                            <!-- <p class="text-muted text-sm">2 Tasks </p> -->
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/78.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </div>
                                        <div class="media-body pt-sm">
                                            <div>Andrea Martinez
                                                <div class="text-sm text-muted">LPN - I.V. Certified</div>
                                            </div>
                                            <!-- <p class="text-muted text-sm">9 Tasks / <span class="text-warning">2 Past Due</span><</p> -->
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/8.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </div>
                                        <div class="media-body pt-sm">
                                            <div>Tanya Rivera
                                                <div class="text-sm text-muted">Nurse - Staff (RN) - Acute Care</div>
                                            </div>
                                            <!-- <p class="text-muted text-sm">8 Tasks </p> -->
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="team-member-link">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="/content/images/prototype-actors/98.jpg" alt="Contact" class="media-object img-circle img-thumbnail thumb48">
                                        </div>
                                        <div class="media-body pt-sm">
                                            <div>Elmer Romero
                                                <div class="text-sm text-muted">Nurse - Staff (RN) - Telephone</div>
                                            </div>
                                            <!-- <p class="text-muted text-sm">5 Tasks / <span class="text-warning">1 Past Due</span></p> -->
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <div id="panelDemo14" class="panel panel-default panel-profile-info">
                            <div class="panel-body">
                                <div role="tabpanel">
                                    <!-- Nav tabs-->
                                    <ul role="tablist" class="nav nav-tabs">
                                        <li role="presentation" class="active"><a href="#todo" aria-controls="todo" role="tab" data-toggle="tab">To Do List </a>
                                        </li>
                                        <li role="presentation"><a href="#completions" aria-controls="completions" role="tab" data-toggle="tab">Completions</a>
                                        </li>
                                        <li role="presentation"><a href="#goals" aria-controls="goals" role="tab" data-toggle="tab">Goals </a>
                                        </li>
                                        <li role="presentation"><a href="#notes" aria-controls="notes" role="tab" data-toggle="tab">Notes</a>
                                        </li>
                                        <li role="presentation"><a href="#personal" aria-controls="personal" role="tab" data-toggle="tab">Personal</a>
                                        </li>
                                        <li role="presentation"><a href="#professional" aria-controls="professional" role="tab" data-toggle="tab">Professional <span class="badge badge-alert ">2</span></a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes-->
                                    <div class="tab-content">
                                        <div id="personal" role="tabpanel" class="tab-pane ">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="lead bb">About</p>
                                                    <form class="form-horizontal p-20">
                                                        <div class="form-group">
                                                            <div class="col-sm-4"><strong>Hire Date</strong></div>
                                                            <div class="col-sm-8">
                                                                Apr. 20, 2017
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-4"><strong>Supervisor</strong></div>
                                                            <div class="col-sm-8">
                                                                <a href="#" class="team-member-link">Darcy Crane</a>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-4"><strong>Department</strong></div>
                                                            <div class="col-sm-8">
                                                                Radiology
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-4"><strong>Job Title</strong></div>
                                                            <div class="col-sm-8">
                                                                Clinical Nurse Supervisor
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-4"><strong>Position Status</strong></div>
                                                            <div class="col-sm-8">
                                                                Full Time
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-12">
                                                    <br>
                                                    <p class="lead bb">Location</p>
                                                        <!--  <div class="alert alert-warning">
                                                           <em class="fa fa-exclamation-circle fa-lg fa-fw"></em>Employee's job title has recently changed.</div> -->
                                                           <form class="form-horizontal p-20">
                                                            <div class="form-group">
                                                                <div class="col-sm-4"><strong>Address</strong></div>
                                                                <div class="col-sm-8">
                                                                    2717 Valley View Ln.
                                                                    <br>Nashville, TN 37217
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-4"><strong>Country</strong></div>
                                                                <div class="col-sm-8">
                                                                    United States
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-4"><strong>Email</strong></div>
                                                                <div class="col-sm-8">
                                                                    <a href="mailto:bbruno@jupiterhealth.com">bbruno@jupiterhealth.com</a>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-4"><strong>Phone</strong></div>
                                                                <div class="col-sm-8">
                                                                    (273)-433-8282
                                                                </div>
                                                            </div>
                                                            <!--  <div class="form-group">
                                                             <div class="col-sm-4"><strong>Time Zone:</strong></div>
                                                             <div class="col-sm-8">
                                                                 Central Time
                                                             </div>
                                                         </div>
                                                         <div class="form-group">
                                                             <div class="col-sm-4"><strong>Preferred Language:</strong></div>
                                                             <div class="col-sm-8">
                                                                 English</strong>
                                                             </div>
                                                         </div> -->
                                                     </form>
                                                 </div>
                                                 <div class="col-md-12">
                                                    <br>
                                                    <p class="lead bb">Activity</p>
                                                        <!--  <div class="alert alert-warning">
                                                           <em class="fa fa-exclamation-circle fa-lg fa-fw"></em>Employee's job title has recently changed.</div> -->
                                                           <form class="form-horizontal p-20">
                                                            <div class="form-group">
                                                                <div class="col-sm-4"><strong>Last Login</strong></div>
                                                                <div class="col-sm-8">

                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                               <div class="col-sm-4 pl-xl"><strong>Student Access:</strong></div>
                                                               <div class="col-sm-8">
                                                                   Apr. 20, 2017 at 9:20 am
                                                               </div>
                                                           </div>
                                                           <div class="form-group">
                                                               <div class="col-sm-4 pl-xl"><strong>Administrator Access:</strong></div>
                                                               <div class="col-sm-8">
                                                                   May 4, 2017 at 11:43 am
                                                               </div>
                                                           </div>
                                                       </form>
                                                   </div>
                                               </div>
                                           </div>
                                           <div id="professional" role="tabpanel" class="tab-pane ">
                                            <section class="section">
                                                <p class="lead bb">Licenses</p>
                                                <div class="slat slat-attention">
                                                    <div class="slat-default">
                                                        <div class="title">AEMT</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-label">State:</span><span class="meta-value">MI</span></li>
                                                            <li><span class="meta-label">Country:</span><span class="meta-value">United States</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h5>State Certification Number</h5>
                                                                <p>1234567890</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>National Expiration Date</h5>
                                                                <p>Feb 7, 2014</p>
                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                    </div>
                                                </div>
                                                <div class="slat">
                                                    <div class="slat-default">
                                                        <div class="title">NCAC ll - National Certified Addiction Counsler, Level ll</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-label">State:</span><span class="meta-value">MI</span></li>
                                                            <li><span class="meta-label">Country:</span><span class="meta-value">United States</span></li>
                                                            <li><span class="meta-label">State License:</span><span class="meta-value">123456789011112</span></li>
                                                            <li><span class="meta-label">Expires:</span><span class="meta-value">Jan. 1, 2018</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h5>Certifying Body</h5>
                                                                <p>National Association of Alcoholism and Drug Abuse Counselors Certification Commission (NAADAC)</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>Updated</h5>
                                                                <p>Stephanie Juniper, Feb 7, 2016 11:54am</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>System Managed</h5>
                                                                <p>No</p>
                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                    </div>
                                                </div>
                                            </section>
                                            <br>
                                            <section class="section">
                                                <p class="lead bb">Certifications</p>
                                                <div class="slat slat-attention">
                                                    <div class="slat-default">
                                                        <div class="title">CWCA - Certified Wound Care Associate</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-label">Country:</span><span class="meta-value">United States</span></li>
                                                            <li><span class="meta-label">State:</span><span class="meta-value">TN</span></li>
                                                            <li><span class="meta-label">License:</span><span class="meta-value">123456789011112</span></li>
                                                            <li><span class="meta-label">Expires: </span><span class="meta-value">Jan 1, 2015</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h5>Certifying Body</h5>
                                                                <p>American Board of Wound Management (ABWM)</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>Updated</h5>
                                                                <p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>System Managed</h5>
                                                                <p>No</p>
                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                    </div>
                                                </div>
                                            </section>
                                            <br>
                                            <section class="section">
                                                <p class="lead bb">Work Experience</p>
                                                <div class="slat ">
                                                    <div class="slat-default">
                                                        <div class="title">Ambulance Driver and Attendant, Except Emergency Medical Technician</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-label">SETTING:</span><span class="meta-value">Ambulatory Care</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h5>Company Name</h5>
                                                                <p>ACME Patient Transport</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>Location</h5>
                                                                <p>Hartford, CT</p>
                                                            </section>
                                                        </div>
                                                        <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                    </div>
                                                </div>
                                            </section>
                                            <br>
                                            <section class="section">
                                                <p class="lead bb">Education</p>
                                                <div class="slat slat-callout" data-filter-category="0">
                                                    <div class="slat-default">
                                                        <div class="title">Bachelors</div>
                                                        <ul class="meta">
                                                            <li>
                                                                <span class="meta-label">FIELD OF STUDY:</span>
                                                                <span class="meta-value">Agricultural and Food Products Processing</span>
                                                            </li>
                                                            <li>
                                                                <span class="meta-label">School Name:</span>
                                                                <span class="meta-value">Frist University</span>
                                                            </li>
                                                            <li class="meta-callout">
                                                                <span class="meta-label">DATES:</span>
                                                                <span class="meta-value">
                                                                    <span class="meta-callout-label">DATES:</span>2014
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <!-- <div class="action">
                                                            <a class="btn btn-sm btn-default" data-hijax="true" data-target="#manage-education-modal-container" href="/HSAPP/Education/GetEducationEditorModalDialog?educationLevelId=983b611b-2d9f-e811-9e24-005056b113bb&amp;userEducationModalScreenName=Professional">Manage <i class="visible-xs fa-fw fa-pencil fa"></i></a>
                                                        </div> -->
                                                    </div>
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse" style="height: 0px;">
                                                            <section class="section">
                                                                <h5>City, State/Province</h5>
                                                                <p>Frist City, Tennessee</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>Country</h5>
                                                                <p>United States</p>
                                                            </section>
                                                        </div>
                                                        <a class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information" href="javascript:;">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div id="todo" role="tabpanel" class="tab-pane active">
                                            <div class="focus-mini">
                                                <ul class="meta">
                                                    <li><span class="meta-label">Total Tasks:</span><span class="meta-value">10</span></li>
                                                    <li><span class="meta-label">Requiring Attention:</span><span class="meta-value">2</span></li>
                                                </ul>
                                            </div>
                                            <div class="filter-mini" data-target="tasks">
                                                <div class="filter-row">
                                                    <div class="filter-cell">
                                                        <div class="filter-toggle">
                                                            <div class="hidden-xs">Show: <i class="fa-fw fa-caret-down fa"></i></div>
                                                            <div class="visible-xs">Show: All Tasks<span class="badge">10</span><i class="fa-fw fa-caret-down fa"></i></div>
                                                        </div>
                                                    </div>
                                                    <div class="filter-cell">
                                                        <ul>
                                                            <li>
                                                                <label class="checkbox active">
                                                                    <input type="checkbox" value="all" checked=""> All Tasks</label>
                                                                </li>
                                                                <li>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="1"> Assignments</label>
                                                                    </li>
                                                                    <li>
                                                                        <label class="checkbox">
                                                                            <input type="checkbox" value="2"> Live Classes</label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="checkbox">
                                                                                <input type="checkbox" value="3"> Electives</label>
                                                                            </li>
                                                                            <li style="display: none;">
                                                                                <label class="checkbox">
                                                                                    <input type="checkbox" value="4"> Profile Tasks</label>
                                                                                </li>
                                                                                <li>
                                                                                    <label class="checkbox">
                                                                                        <input type="checkbox" value="5"> Assessments</label>
                                                                                    </li>
                                                                                    <li style="display: none;">
                                                                                        <label class="checkbox">
                                                                                            <input type="checkbox" value="6"> Hidden Option with No Matches</label>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <section class="section filter-target" id="tasks">
                                                                            <div class="slat slat-attention slat-spaced slat-callout-w active" data-filter-category="1">
                                                                                <div class="slat-default">
                                                                                    <div class="title">Understanding Chronic Pain Management</div>
                                                                                    <ul class="meta">
                                                                                        <li><span class="meta-type">Course</span></li>
                                                                                        <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                                                                                        <li class="meta-hide-xs"><span class="meta-label">Complete:</span><span class="meta-value">2 of 3</span></li>
                                                                                        <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Dec. 31, 2013 at 12am</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="slat slat-attention slat-spaced slat-callout-w active" data-filter-category="2">
                                                                                <div class="slat-default">
                                                                                    <div class="title">Course Name: Class Name</div>
                                                                                    <ul class="meta">
                                                                                        <li><span class="meta-type">Live Class</span></li>
                                                                                        <li><span class="meta-label">Status:</span><span class="meta-value">Not Registered</span></li>
                                                                                        <li class="meta-hide-xs"><span class="meta-label">Attendance:</span><span class="meta-value">Mandatory</span></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="slat slat-spaced slat-callout-w active" data-filter-category="2">
                                                                                <div class="slat-default">
                                                                                    <div class="title">Course Name: Class Name</div>
                                                                                    <ul class="meta">
                                                                                        <li><span class="meta-type">Live Class</span></li>
                                                                                        <li><span class="meta-label">Status:</span><span class="meta-value">Registered</span></li>
                                                                                        <li class="meta-hide-xs"><span class="meta-label">Attendance:</span><span class="meta-value">Mandatory</span></li>
                                                                                        <li class="meta-hide-xs"><span class="meta-label">Location:</span><span class="meta-value">North Tower: Westmoreland Hall</span></li>
                                                                                        <li class="meta-callout"><span class="meta-label">Starts: </span><span class="meta-value"><span class="meta-callout-label">Starts:</span>Jul 15, 2014 at 3:30pm</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="slat slat-spaced slat-callout-w active" data-filter-category="2">
                                                                                <div class="slat-default">
                                                                                    <div class="title">Course Name: Live Event Title</div>
                                                                                    <ul class="meta">
                                                                                        <li><span class="meta-type">Live Event</span></li>
                                                                                        <li><span class="meta-label">Status:</span><span class="meta-value">Registered</span></li>
                                                                                        <li class="meta-hide-xs"><span class="meta-label">Location:</span><span class="meta-value">Cummins Station: 450</span></li>
                                                                                        <li class="meta-callout">
                                                                                            <span class="meta-value">
                                                                                               <span class="meta-value">
                                                                                                   <div>Jul 15, 2014 at 3:30pm - </div>
                                                                                                   <div>Jul 25, 2014 at 3:30pm</div>
                                                                                               </span>
                                                                                           </span>
                                                                                       </li>
                                                                                   </ul>
                                                                               </div>
                                                                           </div>
                                                                           <div class="slat slat-spaced slat-callout-w active" data-filter-category="2">
                                                                            <div class="slat-default">
                                                                                <div class="title">Course Name: Live Event Title</div>
                                                                                <ul class="meta">
                                                                                    <li><span class="meta-type">Live Event</span></li>
                                                                                    <li><span class="meta-label">Status:</span><span class="meta-value">Registered</span></li>
                                                                                    <li class="meta-hide-xs"><span class="meta-label">Location:</span><span class="meta-value">Cummins Station: 450</span></li>
                                                                                    <li class="meta-callout">
                                                                                        <span class="meta-value">
                                                                                           <div>Aug 27, 2014</div>
                                                                                           <div>5:30am - 6:30am</div>
                                                                                       </span>
                                                                                   </li>
                                                                               </ul>
                                                                           </div>
                                                                       </div>
                                                                       <div class="slat slat-spaced slat-callout-w active" data-filter-category="1">
                                                                        <div class="slat-default">
                                                                            <div class="title">Choose a Course</div>
                                                                            <ul class="meta">
                                                                                <li><span class="meta-type">Equivalent</span></li>
                                                                                <li><span class="meta-label">Status:</span><span class="meta-value">Not Enrolled</span></li>
                                                                                <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Sep 1, 2014</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slat slat-spaced slat-callout-w active" data-filter-category="1">
                                                                        <div class="slat-default">
                                                                            <div class="title">Pain Management Curriculum</div>
                                                                            <ul class="meta">
                                                                                <li><span class="meta-type">Curriculum</span></li>
                                                                                <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                                                                                <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Sep 1, 2014</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slat slat-spaced slat-callout-w active" data-filter-category="1">
                                                                        <div class="slat-default">
                                                                            <div class="title">Fire Safety</div>
                                                                            <ul class="meta">
                                                                                <li><span class="meta-type">Course</span></li>
                                                                                <li><span class="meta-label">Status:</span><span class="meta-value">Assigned</span></li>
                                                                                <li class="meta-hide-xs"><span class="meta-label">Complete:</span><span class="meta-value">0 of 3</span></li>
                                                                                <li class="meta-hide-xs"><span class="meta-label">Institution:</span><span class="meta-value">General Hospital</span></li>
                                                                                <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Sep 15, 2014</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slat slat-spaced slat-callout-w active" data-filter-category="5">
                                                                        <div class="slat-default">
                                                                            <div class="title">Competency Appraisal - Employee Assesses Self</div>
                                                                            <ul class="meta">
                                                                                <li><span class="meta-type">Self Assessment</span></li>
                                                                                <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                                                                                <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Aug 11, 2017</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slat slat-spaced slat-callout-w active" data-filter-category="3">
                                                                        <div class="slat-default">
                                                                            <div class="title">This is an example of an elective</div>
                                                                            <ul class="meta">
                                                                                <li><span class="meta-type">Course</span></li>
                                                                                <li><span class="meta-label">Status:</span><span class="meta-value">Not Yet Started</span></li>
                                                                                <li class="meta-hide-xs"><span class="meta-label">Enrolled By:</span><span class="meta-value">Self</span></li>
                                                                                <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value">Elective</span></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                            <div id="completions" role="tabpanel" class="tab-pane tab-completions">
                                                                <div class="focus-mini">
                                                                    <ul class="meta">
                                                                        <li><span class="meta-label">Total Completions:</span><span class="meta-value">17</span></li>
                                                                        <li><span class="meta-label">Est Learning Time:</span><span class="meta-value">8h 47m</span></li>
                                                                    </ul>
                                                                </div>
                                                                <section class="section clearfix">
                                                                    <div class="date-range pull-left " style="">
                                                                        <div class="form-group date-selector" style="">
                                                                            <div class="pull-left">
                                                                                <label class="control-label mt-lg">Date Range:</label>
                                                                            </div>
                                                                            <div class="pull-left mt">
                                                                                <select class="form-control date-range__control">
                                                                                    <optgroup label="Presets">
                                                                                        <option>Since January 1</option>
                                                                                        <option>Last 6 months</option>
                                                                                        <option selected="">Last 12 months</option>
                                                                                        <option>Last 24 months</option>
                                                                                        <option>Previous Calendar Year</option>
                                                                                        <option>Complete History</option>
                                                                                    </optgroup>
                                                                                    <optgroup label="Custom">
                                                                                        <option value="custom">Custom Range</option>
                                                                                    </optgroup>
                                                                                </select>

                                                                            </div>
                                                                            <div class="date-range__custom collapse ">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6 mt">
                                                                                        <div class="form-group">
                                                                                            <label class="control-label">Start:</label>
                                                                                            <div class="input-group date">
                                                                                                <input type="text" class="form-control">
                                                                                                <span class="input-group-btn">
                                                                                                   <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                                                                               </span>
                                                                                           </div>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-sm-6 mt">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">End:</label>
                                                                                        <div class="input-group date">
                                                                                            <input type="text" class="form-control">
                                                                                            <span class="input-group-btn">
                                                                                               <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                                                                           </span>
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <div class="pull-right mt"> <a class="btn btn-default btn-print pull-right" href="#modal-print" data-toggle="modal"><i class="fa fa-print"></i> Print </a></div>
                                                           </section>
                                                           <section class="section">
                                                            <div class="panel-group panel-group-slats panel-ce-credits" role="tablist" id="panel-group-1" aria-multiselectable="true">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab">
                                                                        <a role="button" data-toggle="collapse" data-parent="#panel-group-1" href="#panel-1" class="collapsed">
                                                                           CE Credit Summary
                                                                           <div class="panel-heading-icon">
                                                                               <i class="fa fa-chevron-down panel-heading-icon-closed"></i>
                                                                               <i class="fa fa-chevron-up panel-heading-icon-open"></i>
                                                                           </div>
                                                                       </a>
                                                                   </div>
                                                                   <div id="panel-1" class="panel-collapse collapse" role="tabpanel">
                                                                    <div class="panel-body">
                                                                        <div class="slat slat-simple">
                                                                            <div class="slat-default">
                                                                                <div class="title">AMA PRA Category 1 Credit™</div>
                                                                                <ul class="meta">
                                                                                    <li><span class="meta-label">Discipline:</span><span class="meta-value">AEMT</span></li>
                                                                                    <li><span class="meta-label">Credits:</span><span class="meta-value">5.75</span></li>
                                                                                    <li><span class="meta-label">Courses:</span><span class="meta-value">2</span></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="slat slat-simple">
                                                                            <div class="slat-default">
                                                                                <div class="title">AMA PRA Category 1 Credit™</div>
                                                                                <ul class="meta">
                                                                                    <li><span class="meta-label">Discipline:</span><span class="meta-value">Emergency Medical Technician - First Responder</span></li>
                                                                                    <li><span class="meta-label">Credits:</span><span class="meta-value">4</span></li>
                                                                                    <li><span class="meta-label">Courses:</span><span class="meta-value">2</span></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section class="section">
                                                        <div class="slat slat-callout">
                                                            <div class="slat-default">
                                                                <div class="title">Student-Entered Learning Event</div>
                                                                <ul class="meta">
                                                                    <li><span class="meta-type">Learning Event</span></li>
                                                                    <li><span class="meta-label">Est. Time:</span><span class="meta-value">1h</span></li>
                                                                    <li><span class="meta-label">Entry:</span><span class="meta-value">Student</span></li>
                                                                    <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">May 19, 2013</span></li>
                                                                </ul>
                                                            </div>
                                                            <div class="slat-nested">
                                                                <div class="collapse-group collapse">
                                                                    <section class="section">
                                                                        <h5>Added</h5>
                                                                        <p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
                                                                    </section>
                                                                    <section class="section">
                                                                        <h5>Updated</h5>
                                                                        <p>Stephanie Juniper, Feb 7, 2014 11:57am</p>
                                                                    </section>
                                                                    <section class="section">
                                                                        <h5>Comments</h5>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                                    </section>
                                                                    <section class="section">
                                                                        <small class="text-muted">
                                                                           Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
                                                                       </small>
                                                                   </section>
                                                               </div>
                                                               <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                           </div>
                                                       </div>
                                                       <div class="slat slat-callout">
                                                        <div class="slat-default">
                                                            <div class="title">Understanding Chronic Pain Management</div>
                                                            <ul class="meta">
                                                                <li><span class="meta-type">Course</span></li>
                                                                <li><span class="meta-label">Est. Time:</span><span class="meta-value">2h 10m</span></li>
                                                                <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">May 21, 2013</span></li>
                                                            </ul>
                                                            <div class="action">
                                                                <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slat slat-callout">
                                                        <div class="slat-default">
                                                            <div class="title">Advanta 2 Med Surg Bed</div>
                                                            <ul class="meta">
                                                                <li><span class="meta-type">Course</span></li>
                                                                <li><span class="meta-label">Est. Time:</span><span class="meta-value">15m</span></li>
                                                                <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">May 18, 2013</span></li>
                                                            </ul>
                                                            <div class="action">
                                                                <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slat slat-callout">
                                                        <div class="slat-default">
                                                            <div class="title">Content with Video</div>
                                                            <ul class="meta">
                                                                <li><span class="meta-type">Course</span></li>
                                                                <li><span class="meta-label">Est. Time:</span><span class="meta-value">2h</span></li>
                                                                <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">May 28, 2013</span></li>
                                                            </ul>
                                                            <div class="action">
                                                                <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slat slat-callout">
                                                        <div class="slat-default">
                                                            <div class="title">Content with Video</div>
                                                            <ul class="meta">
                                                                <li><span class="meta-type">Course</span></li>
                                                                <li><span class="meta-label">Est. Time:</span><span class="meta-value">2h</span></li>
                                                                <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">May 29, 2013</span></li>
                                                            </ul>
                                                            <div class="action">
                                                                <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slat slat-callout">
                                                        <div class="slat-default">
                                                            <div class="title">Content with Video</div>
                                                            <ul class="meta">
                                                                <li><span class="meta-type">Course</span></li>
                                                                <li><span class="meta-label">Est. Time:</span><span class="meta-value">2h</span></li>
                                                                <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">May 30, 2013</span></li>
                                                            </ul>
                                                            <div class="action">
                                                                <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slat slat-callout">
                                                        <div class="slat-default">
                                                            <div class="title">Admin-Entered Learning Event</div>
                                                            <ul class="meta">
                                                                <li><span class="meta-type">Learning Event</span></li>
                                                                <li><span class="meta-label">Est. Time:</span><span class="meta-value">1h</span></li>
                                                                <li><span class="meta-label">Entry:</span><span class="meta-value">Admin</span></li>
                                                                <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">July 11, 2013</span></li>
                                                            </ul>
                                                            <div class="action">
                                                                <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="slat-nested">
                                                            <div class="slat slat-callout">
                                                                <div class="slat-default">
                                                                    <div class="title">CE - AHIMA</div>
                                                                    <ul class="meta">
                                                                        <li><span class="meta-label">Discipline:</span><span class="meta-value">Pharmacist, Nuclear</span></li>
                                                                        <li><span class="meta-label">Credits:</span><span class="meta-value">4.00 AMA PRA Category 1 Credit™</span></li>
                                                                        <li><span class="meta-label">License:</span><span class="meta-value">123456789011112</span></li>
                                                                        <li><span class="meta-label">State:</span><span class="meta-value">TN</span></li>
                                                                    </ul>
                                                                    <div class="action">
                                                                        <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="collapse-group collapse">
                                                                <section class="section">
                                                                    <h5>Added</h5>
                                                                    <p>Admin's Name, Feb 7, 2014 11:54am</p>
                                                                </section>
                                                                <section class="section">
                                                                    <h5>Updated</h5>
                                                                    <p>Admin's Name, Feb 7, 2014 11:54am</p>
                                                                </section>
                                                                <section class="section">
                                                                    <h5>Comments</h5>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                                </section>
                                                                <section class="section">
                                                                    <small class="text-muted">
                                                                       Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
                                                                   </small>
                                                               </section>
                                                           </div>
                                                           <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                       </div>
                                                   </div>
                                                   <div class="slat slat-callout">
                                                    <div class="slat-default">
                                                        <div class="title">Admin-Entered Learning Event as a Course</div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Course</span></li>
                                                            <li><span class="meta-label">Est. Time:</span><span class="meta-value">1h</span></li>
                                                            <li><span class="meta-label">Entry:</span><span class="meta-value">Admin</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">July 11, 2013</span></li>
                                                        </ul>
                                                        <div class="action">
                                                            <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="slat-nested">
                                                        <div class="collapse-group collapse">
                                                            <section class="section">
                                                                <h5>Added</h5>
                                                                <p>Admin's Name, Feb 7, 2014 11:54am</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>Updated</h5>
                                                                <p>Admin's Name, Feb 7, 2014 11:54am</p>
                                                            </section>
                                                            <section class="section">
                                                                <h5>Comments</h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                            </section>
                                                            <section class="section">
                                                                <small class="text-muted">
                                                                   Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
                                                               </small>
                                                           </section>
                                                       </div>
                                                       <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
                                                   </div>
                                               </div>
                                               <div class="slat slat-callout">
                                                <div class="slat-default">
                                                    <div class="title">Heart Disease and Treatment Options</div>
                                                    <ul class="meta">
                                                        <li><span class="meta-type">Course</span></li>
                                                        <li><span class="meta-label">Est. Time:</span><span class="meta-value">1h</span></li>
                                                        <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">Oct 10, 2013</span></li>
                                                    </ul>
                                                    <div class="action">
                                                        <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slat slat-callout">
                                                <div class="slat-default">
                                                    <div class="title">Lippencott - 18-lead electrocardiogram</div>
                                                    <ul class="meta">
                                                        <li><span class="meta-type">Course</span></li>
                                                        <li><span class="meta-label">Est. Time:</span><span class="meta-value">1h</span></li>
                                                        <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">Oct 16, 2013</span></li>
                                                    </ul>
                                                    <div class="action">
                                                        <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slat slat-callout">
                                                <div class="slat-default">
                                                    <div class="title">A Day in the Life of ICD-10</div>
                                                    <ul class="meta">
                                                        <li><span class="meta-type">Course</span></li>
                                                        <li><span class="meta-label">Est. Time:</span><span class="meta-value">1h</span></li>
                                                        <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">Oct 19, 2013</span></li>
                                                    </ul>
                                                    <div class="action">
                                                        <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                    </div>
                                                </div>
                                                <div class="slat-nested">
                                                    <div class="slat slat-callout">
                                                        <div class="slat-default">
                                                            <div class="title">CE - AHIMA</div>
                                                            <ul class="meta">
                                                                <li><span class="meta-label">Discipline:</span><span class="meta-value">Pharmacist, Nuclear</span></li>
                                                                <li><span class="meta-label">Credits:</span><span class="meta-value">4.00 AMA PRA Category 1 Credit™</span></li>
                                                                <li><span class="meta-label">License:</span><span class="meta-value">123456789011112</span></li>
                                                                <li><span class="meta-label">State:</span><span class="meta-value">TN</span></li>
                                                            </ul>
                                                            <div class="action">
                                                                <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slat slat-callout">
                                                        <div class="slat-default">
                                                            <div class="title">CE - AAPC</div>
                                                            <ul class="meta">
                                                                <li><span class="meta-label">Discipline:</span><span class="meta-value">Emergency Medical Technician - First Responder</span></li>
                                                                <li><span class="meta-label">Credits:</span><span class="meta-value">2.00 Contact Hours</span></li>
                                                                <li><span class="meta-label">License:</span><span class="meta-value">123456789011112</span></li>
                                                                <li><span class="meta-label">State:</span><span class="meta-value">TN</span></li>
                                                            </ul>
                                                            <div class="action">
                                                                <a class="btn btn-sm btn-default" href="#">Certificate <i class="fa fa-fw fa-print visible-xs"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slat slat-callout">
                                                <div class="slat-default">
                                                    <div class="title">Performance Appraisal</div>
                                                    <ul class="meta">
                                                        <li><span class="meta-type">Self Assessment</span></li>
                                                        <li><span class="meta-label">Rater:</span><span class="meta-value">Jane Doe</span></li>
                                                        <li class="meta-callout"><span class="meta-label">Completed: </span><span class="meta-value">Dec 15, 2013</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div id="goals" role="tabpanel" class="tab-pane">
                                        <div id="filter-goals">
                                            <div class="slat slat-callout" data-filter-category="0">
                                                <div class="slat-default">
                                                    <div class="title">
                                                        <a data-hijax="true" data-target="#manage-goal-modal-container" href="#">Reduce Logging Errors </a>
                                                    </div>
                                                    <ul class="meta">
                                                        <li><span class="meta-type">Individual</span></li>
                                                        <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                                                        <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Aug 18, 2017</span>
                                                        </li>
                                                    </ul>
                                                    <!-- <div class="action"><a class="btn btn-sm btn-default" data-hijax="true" data-target="#manage-goal-modal-container" href="/HSAPP/Goal/GetGoalEditorModalDialog?modalDialogId=goal-modal&amp;goalId=51c167b8-0842-e711-857d-005056b13ce3">Manage <i class="visible-xs fa-fw fa-pencil fa"></i></a> -->
                                                    </div>
                                                </div>
                                                <div class="slat slat-callout" data-filter-category="0">
                                                    <div class="slat-default">
                                                        <div class="title">
                                                            <a data-hijax="true" data-target="#manage-goal-modal-container" href="#">Improve Safety Ratings </a>
                                                        </div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Individual</span></li>
                                                            <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Aug 18, 2017</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="slat slat-callout" data-filter-category="0">
                                                    <div class="slat-default">
                                                        <div class="title">
                                                            <a data-hijax="true" data-target="#manage-goal-modal-container" href="#">Improve Patient Satisfaction </a>
                                                        </div>
                                                        <ul class="meta">
                                                            <li><span class="meta-type">Individual</span></li>
                                                            <li><span class="meta-label">Status:</span><span class="meta-value">Not Yet Started</span></li>
                                                            <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Aug 18, 2017</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="notes" role="tabpanel" class="tab-pane">
                                            <section class="section">
                                                <h2 class="mb-lg">
                                                    <a href="#modal-note-add-employee" data-toggle="modal" class="btn btn-blue pull-right">Add Note</a>
                                                    Results<br class="visible-sm visible-xs"/> <small>Showing 1-10 of 15</small>
                                                </h2>
                                                <?php

                                                $content = '
                                                <section class="section">
                                                <h5>Detail</h5>
                                                <p>This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                                                </section>
                                                <section class="section">
                                                <h5>Attachments</h5>
                                                <ul class="list-unstyled">
                                                <li><i class="fa fa-paperclip"></i> <a href="#">This is a document</a></li>
                                                </ul>
                                                </section>
                                                ';
                                                $slat = array(
                                                 'title' => 'This is my note',
                                                 'meta' => array(
                                                     array(
                                                         'label' => 'Regarding:',
                                                         'value' => 'Stephanie Juniper',
                                                     ),
                                                     array(
                                                         'label' => 'Updated: ',
                                                         'value' => 'Mar 1, 2014 at 2:13pm',
                                                         'attributes' => array(
                                                             array('class','meta-callout'),
                                                         )
                                                     ),

                                                 ),
                                                 'action' => array(
                                                     'type' => 'custom',
                                                     'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-note-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                                 ),
                                                 'nested' => array(
                                                     'hide' => array($content),
                                                 )
                                             );
                                                echo createSlat($slat);

                                                echo createSlat($slat);

                                                echo createSlat($slat);

                                                echo createSlat($slat);

                                                echo createSlat($slat);

                                                ?>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /layout -->
        <?php
        include ('includes/modals/_modal-dashboard-team.php');
        include ('includes/modals/_modal-dashboard-team-message-all.php');
        include ('includes/modals/_modal-dashboard-upload-photo.php');
        include ('includes/modals/_modal-message-single.php');
        include ('includes/modals/_modal-note-add-employee.php');
        include ('includes/modals/_modal-note-edit.php');
        include ('includes/modals/_modal-documents-employee.php');
        include ('includes/modals/_modal-document-add-employee.php');
        ?>
        <!-- Modal -->
        <div id="modal-print" class="modal modal-transcript fade" tabindex="-1" role="dialog" aria-labelledby="modal-print-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                        <h4 id="modal-print-label" class="modal-title">Customize &amp; Print</h4>
                    </div>
                    <div class="modal-body">
                        <fieldset>
                            <legend>Choose a Range:</legend>
                            <select id="printRangeSelect" class="form-control">
                                <optgroup label="Presets">
                                    <option>Since January 1</option>
                                    <option>Last 6 months</option>
                                    <option selected="">Last 12 months</option>
                                    <option>Last 24 months</option>
                                    <option>Previous Calendar Year</option>
                                    <option>Complete History</option>
                                </optgroup>
                                <optgroup label="Custom">
                                    <option value="custom">Custom Range</option>
                                </optgroup>
                            </select>
                        </fieldset>
                        <fieldset id="printRangeCustom" class="hide">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Start:</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>End:</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Sort By:</legend>
                            <select class="form-control">
                                <option selected>Date</option>
                                <option>Name</option>
                            </select>
                        </fieldset>
                        <fieldset>
                            <legend>Completions</legend>
                            <select class="form-control">
                                <option selected>All</option>
                                <option>Assigned only</option>
                                <option>Elective only</option>
                                <option>Learning Events only</option>
                                <option>CE Credits only</option>
                                <option>Assessments only</option>
                            </select>
                        </fieldset>
                        <div class="collapse" id="print-options">
                            <fieldset>
                                <legend>Student Demographics <small>Include checked items</small></legend>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled">
                                            <li><label class="checkbox"><input type="checkbox">Student User ID</label></li>
                                            <li><label class="checkbox"><input type="checkbox">Job Title</label></li>
                                            <li><label class="checkbox"><input type="checkbox">Job Category</label></li>
                                            <li><label class="checkbox"><input type="checkbox">Department</label></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled">
                                            <li><label class="checkbox"><input type="checkbox">Hire/Re-hire Date</label></li>
                                            <li><label class="checkbox"><input type="checkbox">Active Date</label></li>
                                            <li><label class="checkbox"><input type="checkbox">Review Date</label></li>
                                        </ul>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Transcript Data <small>Include checked items</small></legend>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled">
                                            <li><label class="checkbox"><input type="checkbox" checked>Estimated Time</label></li>
                                            <li><label class="checkbox"><input type="checkbox">Course Score</label></li>
                                            <li><label class="checkbox"><input type="checkbox">CE Credit</label></li>

                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled">
                                            <li><label class="checkbox"><input type="checkbox">Time with Completion Date</label></li>
                                            <li><label class="checkbox"><input type="checkbox" checked>Learning Event Comments</label></li>
                                        </ul>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Learning Events <small>Include checked items</small></legend>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled">
                                            <li><label class="checkbox"><input type="checkbox" checked>Administrator-entered</label></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled">
                                            <li><label class="checkbox"><input type="checkbox" checked>Student-entered</label></li>
                                        </ul>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Assessments <small>Include checked items</small></legend>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled">
                                            <li><label class="checkbox"><input type="checkbox" checked>Self Assessments</label></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled">
                                            <li><label class="checkbox"><input type="checkbox" checked>Peer Assessments</label></li>
                                        </ul>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <p><a href="#" data-toggle="collapse" data-target="#print-options" data-toggle-text="Show Additional Options|Hide Additional Options">Show Additional Options</a></p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" data-dismiss="modal">Continue</button>
                        <button class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div><!-- /modal -->

        <div class="site-footer">
            <div class="focus focus-promo">
                <div class="container">
                </div>
            </div>
            <div class="container">
                <div class="links">
                    <div class="row">
                        <div class="col-md-9">
                            <section class="section">
                                <h4>Sitemap</h4>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <section class="section">
                                            <ul class="list-unstyled">
                                                <li><a href="#">To-Do List</a></li>
                                                <li><a href="#">Completions</a></li>
                                                <li><a href="#">Connections</a></li>
                                            </ul>
                                        </section>
                                    </div>
                                    <div class="col-sm-3">
                                        <section class="section">
                                            <ul class="list-unstyled">
                                                <li><a href="#">Certifications</a></li>
                                                <li><a href="#">Licenses</a></li>
                                                <li><a href="#">Resuscitation Cards</a></li>
                                            </ul>
                                        </section>
                                    </div>
                                    <div class="col-sm-3">
                                        <section class="section">
                                            <ul class="list-unstyled">
                                                <li><a href="#">Catalog</a></li>
                                                <li><a href="#">Upcoming Events</a></li>
                                                <li><a href="#">Help</a></li>
                                            </ul>
                                        </section>
                                    </div>
                                    <div class="col-sm-3">
                                        <section class="section">
                                            <ul class="list-unstyled">
                                                <li><a href="#">Account Settings</a></li>
                                                <li><a href="#">Logout</a></li>
                                            </ul>
                                        </section>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-3">
                            <section class="section support">
                                <h4>Support</h4> To talk with a customer service representative call 1-800-521-0574
                            </section>
                        </div>
                    </div>
                </div>
                <div class="legal">
                    <div class="divider"></div>
                    <div class="logo"><img src="./content/images/powered-by-hstream.png" alt="Powered by hStream"></div>
                    <div class="copyright">Copyright &copy; 2017 HealthStream, Inc. All Rights Reserved.</div>
                    <div class="build">Build: 13.01.28.895.8 | O:STS2 | S:192.231.71.2</div>
                </div>
            </div>
        </div>
        <?= createPrototypeNav(); ?>
        <?= createSiteScripts(); ?>
        <script src="/scripts/healthstream.utilities.applauncher.js"></script>
        <script src="/scripts/dataTables.js"></script>
        <script src="http://hstm-platform.patternmanager.com/scripts/dataTables.rowReorder.min.js"></script>
        <script src="/scripts/prototype.datatables.js"></script>
        <!-- <script src="/scripts/hovercard.js"></script> -->

        <script src="/scripts/cropper.js"></script>
        <script src="/scripts/prototype.dashboard-profile.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <?= createSiteEnd(); ?>