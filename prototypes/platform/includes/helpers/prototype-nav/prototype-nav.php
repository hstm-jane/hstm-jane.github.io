<?php

/*  =============================================================================
    Create Site Start
    ========================================================================== */

    function createPrototypeNav () {
        $html = file_get_contents(dirname(__FILE__).'/templates/prototype-nav.html');
        return $html;
    }

?>