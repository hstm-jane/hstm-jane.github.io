<?php

/*  =============================================================================
    Old Pattern Defaults
    ========================================================================== */

    $defaults = json_decode('{
        "base":"/",
        "head": {
            "theme" : "blue"
        },
        "header": {
            "class": [],
            "alerts" : "3",
            "avatar" : "true",
            "institution" : "Jupiter Healthcare",
            "nav_main_active" : "todo",
            "nav_up" : "false"
        },
        "footer": {
            "promo" : "true"
        }
    }',true);


/*  =============================================================================
    Old Pattern Helpers
    ========================================================================== */

    include "_site-start.php";
    include "_site-header.php";
    include "_focus_renewed.php";
    include "_slat.php";
    include "_sidebar.php";
    include "_site-scripts.php";
    include "_site-footer.php";
    include "_site-end.php";
    include "_statement.php";


/*  =============================================================================
    New Helpers
    ========================================================================== */

    include 'start/start.php';
    include 'prototype-nav/prototype-nav.php';
    include 'scripts/scripts.php';
    include 'end/end.php';


/*  =============================================================================
    Shared Pattern Helpers
    ========================================================================== */

    include 'patterns.config.php';
    include '../shared/patterns/include.php';


?>