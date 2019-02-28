<?php

include "includes/helpers/helpers.php";

ob_start();                      // start capturing output
include "includes/applauncher.php";   // execute the file
$applauncher = ob_get_contents();    // get the contents from the buffer
ob_end_clean();

$patterns['start']['title'] = 'Dashboard Details';
$patterns['header'] = array(
    'classes' => array('site-header--assessments'),
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">',
    'mainNav' => '
        <li class="{active=dashboard}"><a href="/dashboard-manager-dev-ready.php">Dashboard</a></li>
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
        <li class="{active=raters}"><a href="/assessment-overview-action-list-dashboard.php">Raters</a></li>
        <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#" >Help</a></li>
        <li class="visible-xs"><a href="#" >Logout</a></li>' . $applauncher,
    'mainNavActive' =>'dashboard',
);

// $patterns['focus']['supporting'] = ' ';

?>
    <?= createSiteStart($patterns['start']); ?>
        <?= createHeader($patterns['header']); ?>

            <div class="layout layout-dashboard-manager">
                <div class="container">
<br><br>This is a blank detail page<br><br>
                </div>
            </div>
            <!-- /layout -->
            <?php
            include ('includes/modals/_modal-dashboard-team.php');
            ?>
                 <?php
            // include ('includes/modals/_modal-dashboard-chart.php');
            ?>
                <?= createFooter($patterns['footer']); ?>
                    <?= createPrototypeNav(); ?>
                        <?= createSiteScripts(); ?>
                            <script src="/scripts/healthstream.utilities.applauncher.js"></script>
                            <script src="/scripts/dataTables.js"></script>
                            <script src="http://hstm-platform.patternmanager.com/scripts/dataTables.rowReorder.min.js"></script>
                            <script src="/scripts/prototype.datatables.js"></script>
                            <script src="/scripts/hovercard.js"></script>
                           <script src="/scripts/prototype.dashboard-manager.js"></script>
                            <?= createSiteEnd(); ?>