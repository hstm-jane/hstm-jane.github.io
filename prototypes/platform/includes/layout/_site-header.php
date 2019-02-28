<?php

function include_site_header( $options ) {

    global $defaults;
    $options = json_decode(json_encode(array_replace_recursive($defaults,$options)), FALSE);

    $base = $options->base;
    $site_header_class = (!empty($options->header->class))? ' ' . implode(' ', $options->header->class) : "";
    $alerts = (!empty($options->header->alerts))?$options->header->alerts:false;
    $avatar = (!empty($options->header->avatar))?$options->header->avatar:false;
    $nav_main_active = (!empty($options->header->nav_main_active))? $options->header->nav_main_active : "";


?>

    <div class="site-header<?php $site_header_class ?>">
        <div class="container">
            <a href="#" class="trigger-open trigger-open-header"><i class="fa fa-bars"></i><span>Menu</span></a>
            <div class="branding">
                <a href="/admin-groups.php"><img src="/content/images/logo-healthstream.png" alt="HealthStream"></a>
            </div>
            <nav class="nav-account">
                <div class="name">Stephanie Juniper</div>
                <div class="avatar">
                    <i class="fa fa-user-md"></i>
                    <?php if ( $avatar === "true" ) { ?>
                    <img src="/content/images/avatar.jpg" alt="avatar">
                    <?php } ?>
                </div>
                <?php if ($alerts) { ?>
                <a href="#" class="alerts"><span class="badge"><?php $alerts ?></span></a>
                <?php } ?>
                <div class="institution"><a href="/affiliation-select.php">Jupiter Healthcare</a></div>
                <div class="logout"><a href="login.php">Logout</a></div>
                <a href="#" class="trigger-open trigger-open-account"><i class="fa fa-angle-down"></i></a>
                <a href="#" class="trigger-close"><i class="fa fa-times"></i></a>
                <ul class="nav">
                    <li><a href="#">Account Settings</a></li>
                    <li class="hide-header-open"><a href="#">Manage Password</a></li>
                    <li><a href="#">Alerts
                    <?php if ($alerts) { ?>
                        <span class="badge"><?php $alerts ?></span>
                    <?php } ?>
                    </a></li>
                    <li class="hide-header-open logout"><a href="login.php">Logout</a></li>
                </ul>
            </nav><!-- /account -->
        </div><!-- /container -->
        <nav class="nav-main">
            <div class="container">
                <ul class="nav">
                    <li class="<?php if($nav_main_active === 'myschedule'){ echo ' active'; } ?>"><a href="/search-my-events.php">My Events</a></li>
                    <li class="<?php if($nav_main_active === 'admin-groups'){ echo ' active'; } ?>"><a href="/admin-groups.php">Admin Groups</a></li>
                    <li class="<?php if($nav_main_active === 'resources'){ echo ' active'; } ?>"><a href="/resources-main.php">Resources</a></li>
                    <li class="<?php if($nav_main_active === 'scheduling'){ echo ' active'; } ?>"><a href="/scheduling-calendar.php">Scheduling</a></li>
                    <li class="disabled<?php if($nav_main_active === 'help'){ echo ' active'; } ?>"><a href="#">Help</a></li>
                    <li class="visible-xs"><a href="#">Logout</a></li>
                </ul>
            </div>
        </nav>
        <div class="support">
            <h3>Support</h3>
            <p>To talk with a customer service representative call 1-800-521-0574</p>
            <p><a href="#">Send us an email</a></p>
        </div>
    </div><!-- /site-header -->

<?php

}

?>
