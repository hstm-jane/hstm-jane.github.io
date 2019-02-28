<?php

/*  =============================================================================
    Need to research what this does anymore (MAS 2016.03.07)
    ========================================================================== */

    include "includes/routes.php";


/*  =============================================================================
    Old Pattern Defaults
    ========================================================================== */

    $defaults = json_decode('{
        "base":"",
        "head": {
            "theme" : "blue"
        },
        "header": {
            "class": [],
            "alerts" : "",
            "avatar" : "true",
            "nav_main_active" : "resources"
        },
        "footer": {
            "promo" : "false"
        }
    }',true);

    // $themes = ["blue","crimson","cyan","green","teal","default"];
    // if ( !empty( $_GET['theme'] ) && in_array($_GET['theme'], $themes)) {
    //     $theme = ($_GET['theme'] !== "default")?$_GET['theme']:"";
    //     $defaults['head']['theme'] = $theme;
    // }


/*  =============================================================================
    New Helpers
    ========================================================================== */

    include 'helpers/start/start.php';
    include 'helpers/prototype-nav/prototype-nav.php';
    include 'helpers/scripts/scripts.php';
    include 'helpers/end/end.php';


/*  =============================================================================
    New Pattern Helpers
    ========================================================================== */

    include 'patterns.config.php';
    include '../shared/patterns/include.php';


/*  =============================================================================
    State Function (Move this)
    ========================================================================== */

    function getStateOptions($selected){
        $state_options = array(
            "AL" => "Alabama",
            "AK" => "Alaska",
            "AZ" => "Arizona",
            "AR" => "Arkansas",
            "CA" => "California",
            "CO" => "Colorado",
            "CT" => "Connecticut",
            "DE" => "Delaware",
            "DC" => "Dist of Columbia",
            "FL" => "Florida",
            "GA" => "Georgia",
            "HI" => "Hawaii",
            "ID" => "Idaho",
            "IL" => "Illinois",
            "IN" => "Indiana",
            "IA" => "Iowa",
            "KS" => "Kansas",
            "KY" => "Kentucky",
            "LA" => "Louisiana",
            "ME" => "Maine",
            "MD" => "Maryland",
            "MA" => "Massachusetts",
            "MI" => "Michigan",
            "MN" => "Minnesota",
            "MS" => "Mississippi",
            "MO" => "Missouri",
            "MT" => "Montana",
            "NE" => "Nebraska",
            "NV" => "Nevada",
            "NH" => "New Hampshire",
            "NJ" => "New Jersey",
            "NM" => "New Mexico",
            "NY" => "New York",
            "NC" => "North Carolina",
            "ND" => "North Dakota",
            "OH" => "Ohio",
            "OK" => "Oklahoma",
            "OR" => "Oregon",
            "PA" => "Pennsylvania",
            "RI" => "Rhode Island",
            "SC" => "South Carolina",
            "SD" => "South Dakota",
            "TN" => "Tennessee",
            "TX" => "Texas",
            "UT" => "Utah",
            "VT" => "Vermont",
            "VA" => "Virginia",
            "WA" => "Washington",
            "WV" => "West Virginia",
            "WI" => "Wisconsin",
            "WY" => "Wyoming"
        );
        $html = '<option value="">Choose</option>';
        foreach ( $state_options as $key => $value ) {
            $html .= '<option value="'.$key.'"'.(($selected === $key)?' selected':'').'>'.$value.'</option>';
        }
        return $html;
    }


?>
