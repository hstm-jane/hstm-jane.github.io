<?php

/*  =============================================================================
    Create Site Start
    ========================================================================== */

    function createSiteStart ( $options = array() ) {
        $html = file_get_contents(dirname(__FILE__).'/templates/start.html');
        $html = str_replace('{title}', (!empty($options['title']))? $options['title'] . ' | ' : '', $html);
        $html = str_replace('{cache}', '?cache='.date('U'), $html);
        return $html;
    }

?>