<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Package Overview';
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
$patterns['focus']['title'] = 'Package Overview';

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
            <div class="assessment-header">
                <div class="assessment-return"><a href="goals-management.php"><i class="fa fa-fw fa-chevron-left"></i>Return to Goal Packages</a> </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h3 style="margin-top:0px;">Organization Goals</h3>
                    <div class="slat-simple">
                        <div class="slat-default">
                              <div class="meta-type">People</div><div class="title" style="display:inline;"> <a href="/goals-management-manage-goals.php">Increase employee retention to 88%</a></div>
                              <div class="owner">Darcy L. Crane</div>
                                <div class="progress-status">
                                    <div class="progress-container">
                                        <div class="progress-info">
                                            <div class="progress">
                                                <div style="width: 75%;" class="progress-bar progress-bar-success purple-soft"></div> 
                                            </div>
                                        </div>
                                    </div>
                                     <div class="status"> <div class="status-number"> 75% </div></div>
                                </div>
                        </div>
                    </div>

                     <div class="slat-simple">
                        <div class="slat-default">
                              <div class="meta-type">People</div><div class="title" style="display:inline;">
                                   <a href="/goals-management-manage-goals.php">Improve employee satisfaction to the 50th percentile</a></div>
                              <div class="owner">Darcy L. Crane</div>
                                <div class="progress-status">
                                    <div class="progress-container">
                                        <div class="progress-info">
                                            <div class="progress">
                                                <div style="width: 75%;" class="progress-bar progress-bar-success purple-soft"></div> 
                                            </div>
                                        </div>
                                    </div>
                                     <div class="status"> <div class="status-number"> 75% </div></div>
                                </div>
                        </div>
                    </div>
                      <div class="slat-simple">
                        <div class="slat-default">
                              <div class="meta-type">Service</div><div class="title" style="display:inline;">
                                   <a href="/goals-management-manage-goals.php">HCAHPS: Achieve 65th percentile overall rating of hospital</a></div>
                              <div class="owner">Darcy L. Crane</div>
                                <div class="progress-status">
                                    <div class="progress-container">
                                        <div class="progress-info">
                                            <div class="progress">
                                                <div style="width: 75%;" class="progress-bar progress-bar-success purple-soft"></div> 
                                            </div>
                                        </div>
                                    </div>
                                     <div class="status"> <div class="status-number"> 75% </div></div>
                                </div>
                        </div>
                    </div>
                    <div class="slat-simple">
                        <div class="slat-default">
                              <div class="meta-type">Quality</div><div class="title" style="display:inline;">
                                   <a href="/goals-management-manage-goals.php">Achieve the best practice compliance in 19 to 28 CMS indicators</a></div>
                              <div class="owner">Darcy L. Crane</div>
                                <div class="progress-status">
                                    <div class="progress-container">
                                        <div class="progress-info">
                                            <div class="progress">
                                                <div style="width: 75%;" class="progress-bar progress-bar-success purple-soft"></div> 
                                            </div>
                                        </div>
                                    </div>
                                     <div class="status"> <div class="status-number"> 75% </div></div>
                                </div>
                        </div>
                    </div>
                    <div class="slat-simple">
                        <div class="slat-default">
                              <div class="meta-type">Quality</div><div class="title" style="display:inline;">
                                   <a href="/goals-management-manage-goals.php">Decrease falls to a total of 120 falls</a></div>
                              <div class="owner">Darcy L. Crane</div>
                                <div class="progress-status">
                                    <div class="progress-container">
                                        <div class="progress-info">
                                            <div class="progress">
                                                <div style="width: 75%;" class="progress-bar progress-bar-success purple-soft"></div> 
                                            </div>
                                        </div>
                                    </div>
                                     <div class="status"> <div class="status-number"> 75% </div></div>
                                </div>
                        </div>
                    </div>
                     <div class="slat-simple">
                        <div class="slat-default">
                              <div class="meta-type">Quality</div><div class="title" style="display:inline;">
                                   <a href="/goals-management-manage-goals.php">decrease HAI to a total of 1409 infections</a></div>
                              <div class="owner">Darcy L. Crane</div>
                                <div class="progress-status">
                                    <div class="progress-container">
                                        <div class="progress-info">
                                            <div class="progress">
                                                <div style="width: 75%;" class="progress-bar progress-bar-success purple-soft"></div> 
                                            </div>
                                        </div>
                                    </div>
                                     <div class="status"> <div class="status-number"> 75% </div></div>
                                </div>
                        </div>
                    </div>
                    <div class="slat-simple">
                        <div class="slat-default">
                              <div class="meta-type">Finance</div><div class="title" style="display:inline;">
                                   <a href="/goals-management-manage-goals.php">Achieve operating margin of 0.61%</a></div>
                              <div class="owner">Darcy L. Crane</div>
                                <div class="progress-status">
                                    <div class="progress-container">
                                        <div class="progress-info">
                                            <div class="progress">
                                                <div style="width: 75%;" class="progress-bar progress-bar-success purple-soft"></div> 
                                            </div>
                                        </div>
                                    </div>
                                     <div class="status"> <div class="status-number"> 75% </div></div>
                                </div>
                        </div>
                    </div>
                      <div class="slat-simple">
                        <div class="slat-default">
                              <div class="meta-type">Growth</div><div class="title" style="display:inline;">
                                   <a href="/goals-management-manage-goals.php">Increase net revenue to $260 M</a></div>
                              <div class="owner">Darcy L. Crane</div>
                                <div class="progress-status">
                                    <div class="progress-container">
                                        <div class="progress-info">
                                            <div class="progress">
                                                <div style="width: 75%;" class="progress-bar progress-bar-success purple-soft"></div> 
                                            </div>
                                        </div>
                                    </div>
                                     <div class="status"> <div class="status-number"> 75% </div></div>
                                </div>
                        </div>
                    </div>
                      <div class="slat-simple">
                        <div class="slat-default">
                              <div class="meta-type">Growth</div><div class="title" style="display:inline;">
                                   <a href="/goals-management-manage-goals.php">Achieve Op encounters by 5.0%</a></div>
                              <div class="owner">Darcy L. Crane</div>
                                <div class="progress-status">
                                    <div class="progress-container">
                                        <div class="progress-info">
                                            <div class="progress">
                                                <div style="width: 75%;" class="progress-bar progress-bar-success purple-soft"></div> 
                                            </div>
                                        </div>
                                    </div>
                                     <div class="status"> <div class="status-number"> 75% </div></div>
                                </div>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="col-md-8"><br>
                <h2>TBD</h2>
  Overview information about the goal packge. Consider it home page for the package

            <ul>
            <li>Can view goals</li>
            <li>Can view statistics</li>
            <li>Can edit package if not published</li>
            <li>Edit top level goals if not published published</li>
            <li>Charts</li>
            <li>Can do actions like publish, etc. </li>
            </ul>
                </div>
            </div>

          
          
          

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
