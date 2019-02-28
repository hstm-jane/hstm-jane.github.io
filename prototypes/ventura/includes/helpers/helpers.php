<?php

/*  =============================================================================
    Pattern Presets
    ========================================================================== */

    switch ($_SERVER['HTTP_HOST']) {
        // case 'hlc.dev':
        case 'hstm-hccdemo-rater.patternmanager.com':
            $pattern_config = 'patterns.config.hccdemo-rater.php';
            break;
        case 'hstm-hccdemo-employee.patternmanager.com':
            $pattern_config = 'patterns.config.hccdemo-employee.php';
            break;
        default:
            $pattern_config = 'patterns.config.php';
    }
    include $pattern_config;


/*  =============================================================================
    Old Pattern Helpers
    ========================================================================== */

    include "_sidebar.php";
    include "_statement.php";


/*  =============================================================================
    Prototype-Specific Pattern Helpers
    ========================================================================== */

    include 'start/start.php';
    include 'prototype-nav/prototype-nav.php';
    include 'scripts/scripts.php';
    include 'end/end.php';
    include 'array_group_by.php';



/*  =============================================================================
    Shared Pattern Helpers
    ========================================================================== */

    include '../shared/patterns/include.php';
