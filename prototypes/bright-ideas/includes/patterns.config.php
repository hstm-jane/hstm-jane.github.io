<?php


/*  =============================================================================
    Prototype-Specific Patterns Config (Base)
    ========================================================================== */

    $patterns = array();


/*  =============================================================================
    Prototype-Specific Patterns Config (Header)
    ========================================================================== */

    $patterns['header'] = array(
        'mainNav' => '
            <li class="{active=activity}"><a href="activity.php">Activity</a></li>
            <li class="{active=myideas}"><a href="my-ideas.php">My Ideas</a></li>
            <li class="{active=search}"><a href="search-bright-ideas.php">Search</a></li>
            <li class="{active=mypoints}"><a href="my-points.php">My Points</a></li>
            <li class="{active=reports}"><a href="reports.php">Reports</a></li>
            <li class="dropdown {active=manage}">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="import.php">Import</a></li>
                    <li><a href="organizational-goals.php">Organizational Goals</a></li>
                    <li><a href="department-goals.php">Department Goals</a></li>
                    <li><a href="managers.php">Managers</a></li>
                    <li><a href="officers.php">Officers</a></li>
                    <li><a href="users.php">Users</a></li>
                    <li><a href="organization.php">Organization</a></li>
                    <!--<li><a href="ftes.php">FTE\'s</a></li>-->
                    <li><a href="outstanding-rewards.php">Rewards</a></li>
                    <li><a href="points.php">Points</a></li>
                    <li><a href="reassign-ideas.php">Reassign Ideas</a></li>
                    <!-- <li><a href="./new-ideas.php">New Ideas</a></li> -->
                </ul>
            </li>
            <li class=""><a href="./help/Default.php" target="_blank">Help</a></li>
            <li class="visible-xs visible-sm"><a href="./authentication/login.php">Logout</a></li>',
        'mainNavActive' =>'activity',
    );


/*  =============================================================================
    Prototype-Specific Patterns Config (Footer)
    ========================================================================== */

    $patterns['footer'] = array(
        'sitemap' => '
            <div class="row">
                <div class="col-sm-3">
                    <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">My Ideas</a></li>
                            <li><a href="#">My Points</a></li>
                            <li><a href="#">Organizational Goals</a></li>
                            <li><a href="#">FTEs</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-sm-3">
                    <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">Reports</a></li>
                            <li><a href="#">Department Goals</a></li>
                            <li><a href="#">Submit New Idea</a></li>
                            <li><a href="#">Import</a></li>
                            <li><a href="#">Rewards</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-sm-3">
                    <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">Search</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Departments Goals</a></li>
                            <li><a href="#">Managers</a></li>
                            <li><a href="#">Points</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-sm-3">
                    <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">Users</a></li>
                            <li><a href="#">Organization</a></li>
                            <li><a href="#">Reassign Ideas</a></li>
                            <li><a href="#">Account Settings</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </section>
                </div>
            </div>',
    );
?>