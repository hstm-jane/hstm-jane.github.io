<?php

/*  =============================================================================
    Old Pattern Defaults
    ========================================================================== */

    $defaults = json_decode('{
        "base":"./",
        "head": {
            "theme" : "blue"
        },
        "header": {
            "class": [],
            "alerts" : "0",
            "avatar" : "false",
            "institution" : "Nursing Information Services",
            "nav_main_active" : "index",
            "nav_up" : "false"
        },
        "footer": {
            "promo" : "true"
        }
    }',true);

    $themes = ["blue","green","red","teal","default"];
    if ( !empty( $_GET['theme'] ) && in_array($_GET['theme'], $themes)) {
        $theme = ($_GET['theme'] !== "default")?$_GET['theme']:"";
        $defaults['head']['theme'] = $theme;
    }


/*  =============================================================================
    Old Pattern Helpers
    ========================================================================== */

    include "helpers/_site-start.php";
    include "helpers/_site-header.php";
    include "helpers/_focus.php";
    include "helpers/_focus_renewed.php";
    include "helpers/_slat.php";
    include "helpers/_sidebar.php";
    include "helpers/_site-scripts.php";
    include "helpers/_site-footer.php";
    include "helpers/_site-end.php";


/*  =============================================================================
    New Pattern Helpers
    ========================================================================== */

    include 'patterns.config.php';
    include '../shared/patterns/include.php';


/*  =============================================================================
    Overlay
    ========================================================================== */

    include "helpers/_site-header-overlay.php";

?>