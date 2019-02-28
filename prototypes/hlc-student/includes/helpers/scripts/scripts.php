<?php

/*  =============================================================================
    Create Site Start
    ========================================================================== */

    function createSiteScripts() {
        $html = file_get_contents(dirname(__FILE__).'/templates/scripts.html');
        return $html;
    }

?>