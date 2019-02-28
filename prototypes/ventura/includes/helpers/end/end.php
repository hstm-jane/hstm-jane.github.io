<?php

/*  =============================================================================
    Create Site Start
    ========================================================================== */

    function createSiteEnd () {
        $html = file_get_contents(dirname(__FILE__).'/templates/end.html');
        return $html;
    }

?>