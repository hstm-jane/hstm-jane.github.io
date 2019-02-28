<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Goal Packages';
$patterns['header'] = array(
    'classes' => array('site-header--assessments'),
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">',
    'mainNav' => '
        <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
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
        <li class="{active=goals}"><a href="/goals-management.php">Goals</a></li>
        <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'goals',
);
$patterns['focus']['title'] = 'Goal Packages';

?>
<style>
/**/
</style>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout layout-goal-management ">
    <div class="container">
        <section class="section section-main section-box">
        <div class="assessment assessment--header">
            <div class="assessment__summary">
                <div class="assessment__basics sort sort-assessment" data-sortdir="asc" style="width:35%"> <a href="#">Package</a><i class="sortdir fa fa-caret-up"></i></div>
                <div class="assessment__employee sort sort-employee" data-sortdir="desc"> <a href="#">Created by</a></div>
                <div class="assessment__state sort sort-state" data-sortdir="asc"> <a href="#">Status</a></div>
                <div class="assessment__due sort sort-due" data-sortdir="asc"> <a href="#">Start Date</a><i class="sortdir fa fa-caret-down"></i></div>
                <div class="assessment__due sort sort-due" data-sortdir="asc"> <a href="#">End Date</a><i class="sortdir fa fa-caret-down"></i></div>
                  <div class="assessment__due sort sort-due" data-sortdir="asc"> <a href="#">Goals</a><i class="sortdir fa fa-caret-down"></i></div>
                <div class="assessment__actions">Actions</div>
            </div>
        </div>
     <div class="assessment assessment-data" data-state="closed" data-titleid="1" data-empid="5" data-actionable="" data-employee-progress="100">
    <div class="assessment__summary">
        <div class="assessment__basics" style="width:35%">
            <div class="assessment__title" style="font-size:16px;">
                <a href="/goals-management-package-overview.php">
                2017 General Hospital Annual Goals</span></a>
            </div>
            <!--<ul class="meta">-->
            <!--<li><span class="meta-type">Employee Assessment</span></li>-->
            <!--<li class="meta-hide-lg"><span class="meta-label">State:</span><span class="meta-value">Closed</span></li>-->
            <!--<li class="meta-hide-lg"><span class="meta-label">Due:</span><span class="meta-value">Sep 24, 2016</span></li>-->
            <!--<li class="meta-hide-lg"><span class="meta-label">Completed:</span><span class="meta-value">Feb 16, 2017</span></li>-->
            <!--</ul>-->
        </div>
        <div class="assessment__employee">
            Crane, Darcy L.                                       
        </div>
        <div class="assessment__state" data-state="closed">
            Draft  <span style="color:orange;"><i class="fa fa-warning" title="not all required fields have been filled" alt="not all required fields have been filled"></i></span>                                          
        </div>
        <div class="assessment__due" data-date="2016/09/24">
            Jan 1, 2017                                           
        </div>
        <div class="assessment__due" data-date="2016/09/24">
            Dec 31, 2017                                          
        </div>
        <div class="assessment__due" data-date="2016/09/24" style="text-align:center">
            0<br>
            <button class="btn btn-link btn-sm">Add Goals</button>
        </div>
        <div class="assessment__actions-lg" style="position:relative;right:0;">
            <div class="action action-split" style="position: absolute;right: 10;top: 10%;">
                <div class="btn-group">
                    <a href="/goals-management-package-overview.php" class="btn btn-default btn-sm hidden-xs" style="height:30px;">Manage</a>
                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="height:30px;"><i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li><a href="/goals-management-package-overview.php" >Manage</a></li>
                      <li class="divider"></li>
                        <li><a href="goals-management-package-wizard.php">Edit Package Details</a></li>
                       <li><a href="goals-management-manage-goals.php">Add Goals</a></li>
                        <li><a href="#">Duplicate</a></li>
                        <li><a href="#" class="disabled" data-id="4" style="color:#ccc; cursor:not-allowed">Publish</a></li>
                         <li class="divider"></li>
                         <li><a href="#" class="js-progress" data-id="4">Delete</a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
        <div class="assessment__assignedto" style="display:none;">
            TBD                                        
        </div>
    </div>
      <div class="slat-nested" style="margin-left:10px;margin-bottom:10px;margin-top:-20px;">
        <div class="collapse-group collapse">
           <div class="collapse-group in" style="height: auto;">

                        <h5>Description</h5>
                        <p>Here is a desciption of the package.  </p>
                        <div class="row">
                            <div class="col-md-3">

                                <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span data-counter="counterup" data-value="7800">0</span>
                                        </h3>
                                        <small>Organization Goals</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-pie-chart"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 0%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">0% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> progress </div>
                                        <div class="status-number"> 0% </div>
                                    </div>
                                </div>
                            </div>
                         
                            </div>
                            <div class="col-md-3">
                              <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-red-haze">
                                            <span data-counter="counterup" data-value="1349">0</span>
                                        </h3>
                                        <small>Department Goals</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-like"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 0%;" class="progress-bar progress-bar-success red-haze">
                                            <span class="sr-only">0% change</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> of 12 departments </div>
                                        <div class="status-number"> 0% </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-3">
                               <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567">0</span>
                                        </h3>
                                        <small>Team Goals</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-basket"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only">0% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> of 22 teams </div>
                                        <div class="status-number"> 0% </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-purple-soft">
                                            <span data-counter="counterup" data-value="276">0</span>
                                        </h3>
                                        <small>Staff Goals</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 0%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only">56% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> of 132 staff </div>
                                        <div class="status-number"> 0% </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    <!--<div class="row">
                            <div class="col-md-6">
                               <h5>Created by</h5>
                                <p>Crane, Darcy L., Feb 7, 2014 9:33am</p>
                            </div>
                            <div class="col-md-6">
                                 <h5>Updated</h5>
                                <p>Crane, Darcy L., Feb 7, 2014 11:57am</p>
                            </div>
                           
                        </div>
                        -->
                  
                </div>
        </div>
        <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
    </div>
</div>
<div class="assessment assessment-data" data-state="closed" data-titleid="1" data-empid="5" data-actionable="" data-employee-progress="100">
    <div class="assessment__summary">
        <div class="assessment__basics" style="width:35%">
            <div class="assessment__title" style="font-size:16px;">
                 <a href="/goals-management-package-overview.php">
                2017 Q3 HCAPS Increase Goals</span></a>
            </div>
            <!--<ul class="meta">-->
            <!--<li><span class="meta-type">Employee Assessment</span></li>-->
            <!--<li class="meta-hide-lg"><span class="meta-label">State:</span><span class="meta-value">Closed</span></li>-->
            <!--<li class="meta-hide-lg"><span class="meta-label">Due:</span><span class="meta-value">Sep 24, 2016</span></li>-->
            <!--<li class="meta-hide-lg"><span class="meta-label">Completed:</span><span class="meta-value">Feb 16, 2017</span></li>-->
            <!--</ul>-->
        </div>
        <div class="assessment__employee">
            Crane, Darcy L.                                       
        </div>
        <div class="assessment__state" data-state="closed">
            Draft <br> Ready for Publish
        </div>
        <div class="assessment__due" data-date="2016/09/24">
            Jul 1, 2017                                           
        </div>
        <div class="assessment__due" data-date="2016/09/24">
            Sept 30, 2017                                          
        </div>
         <div class="assessment__due" data-date="2016/09/24" style="text-align:center">
            5<br>
            <button class="btn btn-link btn-sm">Add Goals</button>
        </div>
        <div class="assessment__actions-lg" style="position:relative;right:0;">
            <div class="action action-split" style="position: absolute;right: 10;top: 10%;">
                <div class="btn-group">
                    <a href="/goals-management-package-overview.php" class="btn btn-default btn-sm hidden-xs" style="height:30px;">Manage</a>
                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="height:30px;"><i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li><a href="/goals-management-package-overview.php" >Manage</a></li>
                      <li class="divider"></li>
                         <li><a href="goals-management-package-wizard.php">Edit Package Details</a></li>
                       <li><a href="goals-management-manage-goals.php">Add Goals</a></li>
                        <li><a href="/assessment-completed-rater.php?titleid=2">Duplicate</a></li>
                        <li><a href="#" class="js-progress" data-id="4">Publish</a></li>
                         <li class="divider"></li>
                         <li><a href="#" class="js-progress" data-id="4">Delete</a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
        <div class="assessment__assignedto" style="display:none;">
            TBD                                        
        </div>
    </div>
      <div class="slat-nested" style="margin-left:10px;margin-bottom:10px;margin-top:-20px;">
        <div class="collapse-group collapse">
           <div class="collapse-group in" style="height: auto;">

                        <h5>Description</h5>
                        <p>Here is a desciption of the package.  </p>
                        <div class="row">
                            <div class="col-md-3">

                                <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span data-counter="counterup" data-value="7800">5</span>
                                        </h3>
                                        <small>Organization Goals</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-pie-chart"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 100%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">100% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> progress </div>
                                        <div class="status-number"> 100% </div>
                                    </div>
                                </div>
                            </div>
                         
                            </div>
                            <div class="col-md-3">
                              <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-red-haze">
                                            <span data-counter="counterup" data-value="1349">0</span>
                                        </h3>
                                        <small>Department Goals</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-like"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 0%;" class="progress-bar progress-bar-success red-haze">
                                            <span class="sr-only">0% change</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> of 12 departments </div>
                                        <div class="status-number"> 0% </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-3">
                               <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567">0</span>
                                        </h3>
                                        <small>Team Goals</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-basket"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only">0% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> of 22 teams </div>
                                        <div class="status-number"> 0% </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-purple-soft">
                                            <span data-counter="counterup" data-value="276">0</span>
                                        </h3>
                                        <small>Staff Goals</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 0%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only">56% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> of 132 staff </div>
                                        <div class="status-number"> 0% </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    <!--<div class="row">
                            <div class="col-md-6">
                               <h5>Created by</h5>
                                <p>Crane, Darcy L., Feb 7, 2014 9:33am</p>
                            </div>
                            <div class="col-md-6">
                                 <h5>Updated</h5>
                                <p>Crane, Darcy L., Feb 7, 2014 11:57am</p>
                            </div>
                           
                        </div>
                        -->
                  
                </div>
        </div>
        <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
    </div>
</div>
 <div class="assessment assessment-data" data-state="closed" data-titleid="1" data-empid="5" data-actionable="" data-employee-progress="100">
    <div class="assessment__summary">
        <div class="assessment__basics" style="width:35%">
            <div class="assessment__title" style="font-size:16px;">
                <a href="/goals-management-package-overview.php">
                2017 Q2 HCAPS Increase Goals</span></a>
            </div>
            <!--<ul class="meta">-->
            <!--<li><span class="meta-type">Employee Assessment</span></li>-->
            <!--<li class="meta-hide-lg"><span class="meta-label">State:</span><span class="meta-value">Closed</span></li>-->
            <!--<li class="meta-hide-lg"><span class="meta-label">Due:</span><span class="meta-value">Sep 24, 2016</span></li>-->
            <!--<li class="meta-hide-lg"><span class="meta-label">Completed:</span><span class="meta-value">Feb 16, 2017</span></li>-->
            <!--</ul>-->
        </div>
        <div class="assessment__employee">
            Crane, Darcy L.                                       
        </div>
        <div class="assessment__state" data-state="closed">
            Published
        </div>
        <div class="assessment__due" data-date="2016/09/24">
            Apr 1, 2017                                           
        </div>
        <div class="assessment__due" data-date="2016/09/24">
            June 30, 2017                                          
        </div>
         <div class="assessment__due" data-date="2016/09/24" style="text-align:center">
            24<br>
            <button class="btn btn-link btn-sm">Add Goals</button>
        </div>
        <div class="assessment__actions-lg" style="position:relative;right:0;">
             <div class="action action-split" style="position: absolute;right: 10;top: 10%;">
                <div class="btn-group">
                    <a href="/goals-management-package-overview.php" class="btn btn-default btn-sm hidden-xs" style="height:30px;">Manage</a>
                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="height:30px;"><i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li><a href="/goals-management-package-overview.php" >Manage</a></li>
                      <li class="divider"></li>
                        <li><a href="goals-management-package-overview.php">View Package Details</a></li>
                       <li><a href="goals-management-manage-goals.php">Add Goals</a></li>
                        <li><a href="/assessment-completed-rater.php?titleid=2">Duplicate</a></li>
                         <li class="divider"></li>
                        <li><a href="#" class="js-progress" data-id="4">Unpublish</a></li>
                         <li><a href="#" class="js-progress" data-id="4">Delete</a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
        <div class="assessment__assignedto" style="display:none;">
            TBD                                        
        </div>
    </div>
      <div class="slat-nested" style="margin-left:10px;margin-bottom:10px;margin-top:-20px;">
        <div class="collapse-group collapse">
           <div class="collapse-group in" style="height: auto;">

                        <h5>Description</h5>
                        <p>Here is a desciption of the package.  </p>
                        <div class="row">
                            <div class="col-md-3">

                                <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span data-counter="counterup" data-value="7800">5</span>
                                        </h3>
                                        <small>Organization Goals</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-pie-chart"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> Progress </div>
                                        <div class="status-number"> 100% </div>
                                    </div>
                                </div>
                            </div>
                         
                            </div>
                            <div class="col-md-3">
                              <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-red-haze">
                                            <span data-counter="counterup" data-value="1349">19</span>
                                        </h3>
                                        <small>Department Goals</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-like"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 10%;" class="progress-bar progress-bar-success red-haze">
                                            <span class="sr-only">0% change</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> of 12 departments </div>
                                        <div class="status-number"> 10% </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-3">
                               <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567">0</span>
                                        </h3>
                                        <small>Team Goals</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-basket"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 0%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only">0% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> of 22 teams </div>
                                        <div class="status-number"> 0% </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-purple-soft">
                                            <span data-counter="counterup" data-value="276">0</span>
                                        </h3>
                                        <small>Staff Goals</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 0%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only">0% of 132 staff</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> of 132 staff</div>
                                        <div class="status-number"> 0% </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    <!--<div class="row">
                            <div class="col-md-6">
                               <h5>Created by</h5>
                                <p>Crane, Darcy L., Feb 7, 2014 9:33am</p>
                            </div>
                            <div class="col-md-6">
                                 <h5>Updated</h5>
                                <p>Crane, Darcy L., Feb 7, 2014 11:57am</p>
                            </div>
                           
                        </div>
                        -->
                  
                </div>
        </div>
        <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
    </div>
</div>

<div class="assessment assessment-data" data-state="closed" data-titleid="1" data-empid="5" data-actionable="" data-employee-progress="100">
    <div class="assessment__summary">
        <div class="assessment__basics" style="width:35%">
            <div class="assessment__title" style="font-size:16px;">
                <a href="/goals-management-package-overview.php">
                2017 Professional Development Goals</span></a>
            </div>
            <!--<ul class="meta">-->
            <!--<li><span class="meta-type">Employee Assessment</span></li>-->
            <!--<li class="meta-hide-lg"><span class="meta-label">State:</span><span class="meta-value">Closed</span></li>-->
            <!--<li class="meta-hide-lg"><span class="meta-label">Due:</span><span class="meta-value">Sep 24, 2016</span></li>-->
            <!--<li class="meta-hide-lg"><span class="meta-label">Completed:</span><span class="meta-value">Feb 16, 2017</span></li>-->
            <!--</ul>-->
        </div>
        <div class="assessment__employee">
            Crane, Darcy L.                                       
        </div>
        <div class="assessment__state" data-state="closed">
            Active
        </div>
        <div class="assessment__due" data-date="2016/09/24">
            Jan 1, 2017                                           
        </div>
        <div class="assessment__due" data-date="2016/09/24">
            Dec 31, 2017                                          
        </div>
         <div class="assessment__due" data-date="2016/09/24" style="text-align:center">
            349<br>
            <button class="btn btn-link btn-sm">Add Goals</button>
        </div>
        <div class="assessment__actions-lg" style="position:relative;right:0;">
            <div class="action action-split" style="position: absolute;right: 10;top: 10%;">
                <div class="btn-group">
                    <a href="/goals-management-package-overview.php" class="btn btn-default btn-sm hidden-xs" style="height:30px;">Manage</a>
                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="height:30px;"><i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li><a href="/goals-management-package-overview.php" >Manage</a></li>
                      <li class="divider"></li>
                         <li><a href="goals-management-package-overview.php">View Package Details</a></li>
                       <li><a href="goals-management-manage-goals.php">Add Goals</a></li>
                        <li><a href="/assessment-completed-rater.php?titleid=2">Duplicate</a></li>
                         <li class="divider"></li>
                        <li><a href="#" class="js-progress" data-id="4">Unpublish</a></li>
                         <li><a href="#" class="js-progress" data-id="4">Delete</a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
        <div class="assessment__assignedto" style="display:none;">
            TBD                                        
        </div>
    </div>
      <div class="slat-nested" style="margin-left:10px;margin-bottom:10px;margin-top:-20px;">
        <div class="collapse-group collapse">
           <div class="collapse-group in" style="height: auto;">

                        <h5>Description</h5>
                        <p>Here is a desciption of the package.  </p>
                        <div class="row">
                            <div class="col-md-3">

                                <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span data-counter="counterup" data-value="7800">8</span>
                                        </h3>
                                        <small>Organization Goals</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-pie-chart"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">100% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> progress </div>
                                        <div class="status-number"> 100% </div>
                                    </div>
                                </div>
                            </div>
                         
                            </div>
                            <div class="col-md-3">
                              <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-red-haze">
                                            <span data-counter="counterup" data-value="1349">23</span>
                                        </h3>
                                        <small>Department Goals</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-like"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                                            <span class="sr-only">85% change</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> of 12 departments </div>
                                        <div class="status-number"> 85% </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-3">
                               <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567">42</span>
                                        </h3>
                                        <small>Team Goals</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-basket"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 86%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only">86% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> of 22 teams </div>
                                        <div class="status-number"> 86% </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-purple-soft">
                                            <span data-counter="counterup" data-value="276">276</span>
                                        </h3>
                                        <small>Staff Goals</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only">56% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                         <div class="status-title"> of 132 staff</div>
                                        <div class="status-number"> 57% </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    <!--<div class="row">
                            <div class="col-md-6">
                               <h5>Created by</h5>
                                <p>Crane, Darcy L., Feb 7, 2014 9:33am</p>
                            </div>
                            <div class="col-md-6">
                                 <h5>Updated</h5>
                                <p>Crane, Darcy L., Feb 7, 2014 11:57am</p>
                            </div>
                           
                        </div>
                        -->
                  
                </div>
        </div>
        <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
    </div>
</div>
<!--end assessment slat-->

           <?php
                $stickybar = array(
                    'sets' => array(
                        array(
                            'html' => '
                                <a href="goals-management-package-wizard.php" class="btn btn-default">Create New Goal Package</a>
                            ',
                        ),
                    ),
                );
                echo createStickybar($stickybar);
            ?>


        </section>
    </div><!-- /container -->
</div> <!-- /layout -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="/scripts/wizard.js"></script>
<script src="/scripts/prototype.goals.wizard.js"></script>
<?= createSiteEnd(); ?>
