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
        'userName' => 'Stephanie P. Juniper',
        'mainNav' => '
            <li class="{active=home}""><a href="/">Home</a></li>

            <li class="{active=results}""><a href="/assessment-results.2.php">Assessment Results</a></li>
            <li class="{active=users}""><a href="/admin-user-list.php">Manage Users</a></li>
            <li class="{active=assign-assessments}"><a href="/assessment-bulk-assign.php">Assign Assessments</a></li>
			<li class=""><a href="/#">Help</a></li>
			<li class=""><div class="container-fluid"><div class="row"><a href="https://l64qq104.optimalworkshop.com/questions/d8003d3k" target="_blank" class="btn btn-primary col-xs-10" id="giveFeedback">Give Feedback</a></div></div></li>',


        'logoLarge' => './content/images/logo-assess-large.png',
        'logoSmall' => './content/images/logo-assess-small.png',

        'mainNavActive' =>'admin',
        'alerts' => '',
        'userInstitution' => '',
    );


/*  =============================================================================
    Prototype-Specific Patterns Config (Focus Search)
    ========================================================================== */

    $patterns['focus']['search'] = array(
        'placeholder' => 'Search',
        'url' => '#',
    );

/*  =============================================================================
    Prototype-Specific Patterns Config (Stickybar)
    ========================================================================== */

    $patterns['stickybar'] = array(
        'largeLeft' => '',
        'smallLeft' => '',
        'largeRight' => '',
        'smallRight' => '',
    );


/*  =============================================================================
    Prototype-Specific Patterns Config (Footer)
    ========================================================================== */

    $patterns['footer'] = array(
        'classes' => array("hidden-print"),
        'sitemap' => '
            <div class="row">
                <div class="col-sm-3">
                     <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Assessment Results</a></li>
                            <li><a href="#">Manage Users</a></li>
                        </ul>
                    </section>
                </div>
            </div>',
    );


?>