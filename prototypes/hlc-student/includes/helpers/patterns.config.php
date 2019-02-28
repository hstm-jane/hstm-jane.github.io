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
            <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
            <li class="{active=todo}"><a href="/">To Do</a></li>
            <li class="{active=completed}"><a href="/completed.php">Completed</a></li>
            <li class="{active=profile} dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="/advanced-practice.php">Advanced Practice</a></li>
                    <li><a href="/certifications.php">Certifications</a></li>
                    <li><a href="/documents.php">Documents</a></li>
                    <li><a href="/education.php">Education</a></li>
                    <li><a href="/goals.php">Goals</a></li>
                    <li><a href="/job-descriptions.php">Job Descriptions</a></li>
                    <li><a href="/disciplines-licenses.php">Licenses</a></li>
                    <li><a href="/notes.php">Notes</a></li>
                    <li><a href="/personal-information.php">Personal Information</a></li>
                </ul>
            </li>
            <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
            <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
            <li class="disabled"><a href="#">Help</a></li>
            <li class="visible-xs visible-sm"><a href="#">Logout</a></li>',
        'mainNavActive' =>'todo',
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
        'sitemap' => '
            <div class="row">
                <div class="col-sm-3">
                     <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">To-Do List</a></li>
                            <li><a href="#">Completions</a></li>
                            <li><a href="#">Connections</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-sm-3">
                    <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">Certifications</a></li>
                            <li><a href="#">Licenses</a></li>
                            <li><a href="#">Resuscitation Cards</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-sm-3">
                    <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">Catalog</a></li>
                            <li><a href="#">Upcoming Events</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-sm-3">
                    <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">Account Settings</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </section>
                </div>
            </div>',
    );


?>