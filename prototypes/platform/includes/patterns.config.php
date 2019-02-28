<?php

/*  =============================================================================
    Prototype-Specific Patterns Config (Base)
    ========================================================================== */

    $patterns = array();


/*  =============================================================================
    Prototype-Specific Patterns Config (Start)
    ========================================================================== */

    $patterns['start'] = array();


/*  =============================================================================
    Prototype-Specific Patterns Config (Header)
    ========================================================================== */

    $patterns['header'] = array(
        'alerts' => 0,
        'mainNav' => '
            <li class="{active=myevents}"><a href="/search-my-events.php">My Events</a></li>
            <li class="{active=admin}"><a href="/admin-groups.php">Admin Groups</a></li>
            <li class="{active=resources}"><a href="/resources-main.php">Resources</a></li>
            <li class="{active=scheduling}"><a href="/scheduling-calendar.php">Scheduling</a></li>
            <li class="disabled"><a href="#">Help</a></li>
            <li class="visible-xs"><a href="#">Logout</a></li>',
        'mainNavActive' =>'admin',
    );


/*  =============================================================================
    Prototype-Specific Patterns Config (Focus Search)
    ========================================================================== */

    $patterns['focus']['search'] = array(
        'placeholder' => 'Search',
        'url' => '#',
    );


/*  =============================================================================
    Prototype-Specific Patterns Config (Footer)
    ========================================================================== */

    $patterns['footer'] = array(
        'classes' => array('site-footer-min'),
        'focus' => '',
        'sitemap' => '',
        'support' => '',
    );


?>