<?php

/*  ===================================================================================
    Notes:
    * This file auto-includes the php file named the same as its parent folder.
    * It adds files in file system order, which could be bad for classes.
    * If a specific order is required, manually add those files above the autoloader.
    ================================================================================ */


/*  =============================================================================
    Pattern Class
    ========================================================================== */


    class Pattern
    {
        // set the default values for the template
        protected $settings;

        // output the template
        public function html() {
            trigger_error("HTML template not specified in class", E_USER_ERROR);
        }

        // pass in option
        function __construct($options){
            $this->settings = array_merge($this->settings, $options);
        }
    }


/*  =============================================================================
    Include All Shared Patterns
    ========================================================================== */

    $patternDirectory = dirname(__FILE__);
    $patternsFiles = glob($patternDirectory.'/*' , GLOB_ONLYDIR);

    foreach ($patternsFiles as $pattern) {
        $pattern = str_replace($patternDirectory, '', $pattern);
        include_once $patternDirectory .'/'. $pattern .'/'.$pattern.'.php';
    }

?>