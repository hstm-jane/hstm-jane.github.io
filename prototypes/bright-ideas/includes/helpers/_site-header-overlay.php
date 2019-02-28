<?php

function include_site_header_overlay( $options ) {

    global $defaults;
    $options = json_decode(json_encode(array_replace_recursive($defaults,$options)), FALSE);

    $base = $options->base;
    $site_header_class = (!empty($options->header->class))? ' ' . implode(' ', $options->header->class) : "";
    $alerts = (!empty($options->header->alerts))?$options->header->alerts:false;
    $avatar = (!empty($options->header->avatar))?$options->header->avatar:false;
    $institution = (!empty($options->header->institution))?$options->header->institution:false;
    $nav_main_active = (!empty($options->header->nav_main_active))? $options->header->nav_main_active : "";

    $_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segments = explode('/', $_SERVER['REQUEST_URI_PATH']);

?>
    <style>
    

    </style>
    <!-- <div class="site-switch">
        You're viewing the new look. Looking for the current version? <a href="#">Switch back.</a>
    </div> -->
    <div class="site-header<?= $site_header_class ?>">
        <div class="container">
            <a href="#" class="trigger-open trigger-open-header"><i class="fa fa-bars"></i>
                <span>Menu</span>
            </a>
            <div class="branding">
                <a href="/">
                    <img src="./content/images/logo-healthstream-large.png" alt="HealthStream" class="logo-large">
                    <img src="./content/images/logo-healthstream-small.png" alt="HealthStream" class="logo-small">
                </a>
            </div>
            <nav class="nav-account">
                <div class="name">Tracy Yowell</div>
                <div class="avatar">
                    <i class="fa fa-user-md"></i>
                    <?php if ( $avatar === "true" ) { ?>
                    <img src="./content/images/avatar.jpg">
                    <?php } ?>
                </div>
                <?php if ($alerts) { ?>
                <a href="alerts.php" class="alerts">
                    <span class="badge">
                            <?= $alerts ?>
                        </span>
                </a>
                <?php } ?>
                <div class="institution">
                    <a href="#">
                        <?= $institution ?>
                    </a>
                </div>
                <div class="logout">
                    <a href="/authentication/login.php">Logout</a>
                </div>
                <a href="#" class="trigger-open trigger-open-account"><i class="fa fa-angle-down"></i></a>
                <a href="#" class="trigger-close"><i class="fa fa-times"></i></a>
                <ul class="nav">
                    <li>
                        <a href="/account-settings.php">Profile Settings</a>
                    </li>
                    <li class="hide-header-open">
                        <a href="account-settings.php?view=password">Manage Password</a>
                    </li>
                    <!-- <li><a href="alerts.php">Alerts
                     < ? if ($alerts) { ?>
                        <span class="badge">< ?= $alerts ?></span>
                    < ? } ?>
                    </a></li>-->
                    <li class="hide-header-open logout">
                        <a href="/authentication/login.php">Logout</a>
                    </li>
                </ul>
            </nav>
            <!-- /account -->
        </div>
        <!-- /container -->
        <nav class="nav-main">
            <div class="container">
                <ul class="nav">
                    <li class="<?php if($nav_main_active === 'home'){ echo ' active'; } ?>">
                        <a href="./activity.php">Activity</a>
                    </li>
                    <li class="<?php if($nav_main_active === 'ideas'){ echo ' active'; } ?>">
                        <a href="./my-ideas.php">My Ideas</a>
                    </li>
                    <li class="<?php if($nav_main_active === 'points'){ echo ' active'; } ?>">
                        <a href="./my-points.php">My Points</a>
                    </li>
                    <li class="<?php if($nav_main_active === 'reports'){ echo ' active'; } ?>">
                        <a href="./report-wizard.php">Reports</a>
                    </li>
                    <li class="<?php if($nav_main_active === 'search'){ echo ' active'; } ?>">
                        <a href="./search-bright-ideas.php">Search</a>
                    </li>
                    <li class="dropdown<?php if($nav_main_active === 'manage'){ echo ' active'; } ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="./import.php">Import</a>
                            </li>
                            <li>
                                <a href="./organizational-goals.php">Organizational Goals</a>
                            </li>
                            <li>
                                <a href="./department-goals.php">Department Goals</a>
                            </li>
                            <li>
                                <a href="./managers.php">Managers</a>
                            </li>
                            <li>
                                <a href="./users.php">Users</a>
                            </li>
                            <li>
                                <a href="./organization.php">Organization</a>
                            </li>
                            <li>
                                <a href="./ftes.php">FTE's</a>
                            </li>
                            <li>
                                <a href="./outstanding-rewards.php">Rewards</a>
                            </li>
                            <li>
                                <a href="./points.php">Points</a>
                            </li>
                            <li>
                                <a href="./reassign-ideas.php">Reassign Ideas</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if($nav_main_active === 'help'){ echo ' active'; } ?>">
                        <a href="./help/Default.php" target="_blank">Help</a>
                    </li>
                    <li class="visible-xs">
                        <a href="./authentication/login.php">Logout</a>
                    </li>
                    <div class="overlay-pull-right">
                          <img src="./content/images/overlay-icon.png" class="overlay-icon" id="trigger-overlay">
                    </div>
                </ul>
            </div>
        </nav>
    </div>
    <!-- /site-header -->
    <style>
    .attention-sidebar-title {
        color: #fc7b00;
    }
    </style>
    <?php

}

?>
