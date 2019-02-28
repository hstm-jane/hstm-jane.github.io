<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My To-Do List';
$patterns['focus']['title'] = 'My To-Do List';

if (isset($_GET['rater'])) {
    $patterns['header'] = array(
        'classes' => array('site-header--assessments'),
        'userName' => 'Darcy L. Crane',
        'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">',
        'mainNav' => '
            <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
            <li class="{active=todo}"><a href="/todo.php?rater">To Do</a></li>
            <li class="{active=completed}"><a href="/completed-filtered.php">Completed</a></li>
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
            <li class="{active=raters}"><a href="/assessment-overview.php">Raters</a></li>
            <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
            <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
            <li class="disabled"><a href="#">Help</a></li>
            <li class="visible-xs"><a href="#">Logout</a></li>',
        'mainNavActive' => 'todo',
    );
}

$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Total Tasks:',
        'value' => '17',
    ),
    array(
        'label' => 'Requiring Attention:',
        'value' => '5',
    ),
);
$patterns['focus']['action'] = array(
    'text' => '
Quick Start

',
    'link' => '#',
);

?>
    <?=createSiteStart($patterns['start']);?>
        <?=createHeader($patterns['header']);?>
            <?=createFocus($patterns['focus']);?>
                <style>
                .admin-widget {
                    width: 100%;
                    clear: both;
                    float: none;
                }

                .app-card-wrapper>div {
                    height: 0;
                    padding-bottom: 19%;

                    display: inline-block;
                    margin: 2%;
                    background-color: #fff;
                    -webkit-box-shadow: 0 5px 10px 2px rgba(0, 0, 0, .1);
                    box-shadow: 0 5px 10px 2px rgba(0, 0, 0, .1);
                    position: relative;
                    background-position: center;
                    max-width: 19%;
                    transition: all .2s ease;

                    overflow: hidden;
                    background-clip: border-box;
                }

                .attention-section .call-out {
                    color: white;
                    background-color: #fc7b00;
                }

                .task-tile {
                    height: 200px;
                    width: 100%;
                    position: relative;
                    -webkit-box-shadow: 0 5px 10px 2px rgba(0, 0, 0, .1);
                    box-shadow: 0 5px 10px 2px rgba(0, 0, 0, .1);
                    transition: all .2s ease;
                    background-color: #f9f9f9;
                    margin-bottom: 25px;
                }

                .task-tile.task-tile_remainder .remainder-amount {
                    font-size: 60px;
                    text-align: center;
                    margin-top: 15%;
                    color: #555;
                }

                .task-tile:hover {
                    -webkit-box-shadow: 0 5px 10px 2px rgba(0, 0, 0, .3);
                    box-shadow: 0 5px 10px 2px rgba(0, 0, 0, .3);
                    cursor: pointer;
                    transform: scale(1.1, 1.1);
                }

                .task-tile_content {
                    position: relative;
                }

                .task-tile_title {
                    padding: 5px;
                }

                .task-tile_title h2 {
                    margin: 0;
                    font-size: 20px;
                }

                .task-tile_footer {
                    position: absolute;
                    bottom: 0;
                    /*background-color:#444;*/
                    width: 100%;

                    text-align: right;
                }

                .section>h1 {
                    margin-bottom: 30px;
                }

                .task-tile_footer .action {
                    position: absolute;
                    max-width: 120px;
                    left: 5px;
                    top: 5px;
                }

                .meta-info {

                    -webkit-flex: 1;
                    /* Safari 6.1+ */
                    -ms-flex: 1;
                    /* IE 10 */
                    flex: 1;
                }

                a .meta-info {
                    color: #555;
                }

                a .task-tile_title h2 {
                    text-decoration: none;
                }

                a:hover .task-tile_title h2 {
                    text-decoration: none;
                    color: #555;
                }

                .meta-wrapper {
                    width: 100%;
                    display: -webkit-flex;
                    /* Safari */
                    display: flex;
                    text-align: center;
                    margin-bottom: 5px;
                }

                .meta-wrapper .meta-info:not(:first-child) {
                    border-left: 1px solid #ccc;
                }

                .call-out {
                    width: 100%;
                    background-color: rgba(0, 0, 0, .6);
                    padding: 5px;
                    color: white;
                }

                .hidden-tile {
                    display: none;
                }

                .checkbox-dropdown .checkbox-dropdown-menu {
                    max-width: 250px;
                    text-align: left;
                    max-height: 300px;
                    overflow: auto;
                }

                .checkbox-dropdown label {
                    display: block;
                    padding: 3px 20px;
                    clear: both;
                    font-weight: 400;
                    line-height: 1.428571429;
                }

                .checkbox-dropdown li {
                    white-space: nowrap;
                }

                .search-tasks {
                    width: 400px;
                    margin: 15px auto;
                }

                .actions {
                    position: absolute;
                    top: 5px;
                    right: 5px;
                    color: #666;
                }

                .actions:hover {
                    color: #fc7b00;
                }
                </style>
                <div class="layout">
                    <div class="container">
                        <section class="section section-main section-box" data-equalize="layout-columns">
                            <div class="container-fluid main-section">
                                <h1 style="font-weight:600; text-align:center">My To-Do List
                                </h1>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <div class="form-group search-tasks">
                                                <input type="text" class="form-control" placeholder="Search All Tasks">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <label>Filter By: </label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="checkbox-dropdown columns  btn-group ">
                                            <div class="keep-open dropdown" title="Columns">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    Due Date <i class="fa fa-caret-down"></i>
                                                </a>
                                                <ul class="dropdown-menu checkbox-dropdown-menu " role="menu">
                                                    <li>
                                                        <label>
                                                            <input class="toggle-vis" data-column="1" type="checkbox" value="0" checked> All </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input class="toggle-vis" data-column="2" type="checkbox" value="1" checked> Past Due</label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input class="toggle-vis" data-column="3" type="checkbox" value="2" checked> Due Within a Week</label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input class="toggle-vis" data-column="4" type="checkbox" value="3" checked> Due Within a Month</label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input class="toggle-vis" data-column="5" type="checkbox" value="4" checked> Due After a Month</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="checkbox-dropdown columns  btn-group ">
                                            <div class="keep-open dropdown" title="Columns">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    Task Type <i class="fa fa-caret-down"></i>
                                                </a>
                                                <ul class="dropdown-menu checkbox-dropdown-menu " role="menu">
                                                    <li>
                                                        <label>
                                                            <input class="toggle-vis" data-column="1" type="checkbox" value="0" checked="checked"> All </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input class="toggle-vis" data-column="4" type="checkbox" value="3" checked> Assessment</label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input class="toggle-vis" data-column="2" type="checkbox" value="1" checked> Course</label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input class="toggle-vis" data-column="3" type="checkbox" value="2" checked> Class (belongs to courses)</label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input class="toggle-vis" data-column="5" type="checkbox" value="4" checked> Live Event</label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input class="toggle-vis" data-column="5" type="checkbox" value="4" checked> Profile Task</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="checkbox-dropdown columns  btn-group ">
                                            <div class="keep-open dropdown" title="Columns">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    Obligation <i class="fa fa-caret-down"></i>
                                                </a>
                                                <ul class="dropdown-menu checkbox-dropdown-menu " role="menu">
                                                    <li>
                                                        <label>
                                                            <input class="toggle-vis" data-column="1" type="checkbox" value="0" checked="checked"> All </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input class="toggle-vis" data-column="5" type="checkbox" value="4" checked> Mandatory (Assigned Learning)</label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input class="toggle-vis" data-column="5" type="checkbox" value="4" checked> Optional (Electives)</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="checkbox-dropdown columns  btn-group ">
                                            <div class="keep-open dropdown" title="Columns">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    Setting <i class="fa fa-caret-down"></i>
                                                </a>
                                                <ul class="dropdown-menu checkbox-dropdown-menu " role="menu">
                                                    <li>
                                                        <label>
                                                            <input class="toggle-vis" data-column="1" type="checkbox" value="0" checked="checked"> All </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input class="toggle-vis" data-column="5" type="checkbox" value="4" checked> Online</label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input class="toggle-vis" data-column="5" type="checkbox" value="4" checked> In-Person</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <section class="section attention-section">
                                    <h1>Top Priorities <span>5</span></h1>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3">
                                            <a href="/assessment.php?assessment=performance-2&state=4">
                                                <div class="task-tile">
                                                    <div class="task-tile_title">
                                                        <h2>Nursing Fundamentals Appraisal</h2>
                                                    </div>
                                                    <div class="task-tile_content">
                                                    </div>
                                                    <div class="task-tile_footer">
                                                        <div class="meta-wrapper">
                                                            <div class="meta-info">
                                                                <div class="meta-label"></div>
                                                                <div class="meta-value">Self Assessment</div>
                                                            </div>
                                                            <div class="meta-info">
                                                                <!--  <div class="meta-label">Session</div> -->
                                                                <div class="meta-value">In Review</div>
                                                            </div>
                                                        </div>
                                                        <div class="call-out">
                                                            Queued Action: Sign Off
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>A Practical Approach to Implementing New CDC GBS Guidelines - 20-406920</h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="meta-wrapper">
                                                        <div class="meta-info">
                                                            <div class="meta-label"></div>
                                                            <div class="meta-value">Mandatory</div>
                                                        </div>
                                                        <div class="meta-info">
                                                            <!--  <div class="meta-label">Session</div> -->
                                                            <div class="meta-value">1 of 4</div>
                                                        </div>
                                                        <div class="meta-info">
                                                            <div class="meta-label">
                                                                <a href="#">See more</a>
                                                            </div>
                                                            <div class="meta-value"><i class="fa fa-share"></i></div>
                                                        </div>
                                                    </div>
                                                    <div class="call-out">
                                                        Past Due: June 6, 2017
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>01 A Knowledge Assessment - CRRN: Rehabilitation Nursing
                                                    </h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: January 6, 2019
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="task-tile task-tile_remainder">
                                                <div class="task-tile_title">
                                                </div>
                                                <div class="task-tile_content">
                                                    <p class="remainder-amount">+2</p>
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        2 More Priority Items
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 hidden-tile">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>01 A Knowledge Assessment - CRRN: Rehabilitation Nursing
                                                    </h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: January 6, 2019
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 hidden-tile">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>01 A Knowledge Assessment - CRRN: Rehabilitation Nursing
                                                    </h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: January 6, 2019
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <hr />
                                <section class="section">
                                    <h1>Up Next</h1>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>Fire Safety</h2>
                                                    <div class="actions">
                                                        <i class="fa fa-flag"></i>
                                                    </div>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: Apr 30, 2019 at 1:00pm CT
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>A Practical Approach to Implementing New CDC GBS Guidelines - 20-406920</h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: January 6, 2019
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>01 A Knowledge Assessment - CRRN: Rehabilitation Nursing
                                                    </h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: January 6, 2019
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="task-tile task-tile_remainder">
                                                <div class="task-tile_title">
                                                </div>
                                                <div class="task-tile_content">
                                                    <p class="remainder-amount">+4</p>
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        4 More Items
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 hidden-tile">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>01 A Knowledge Assessment - CRRN: Rehabilitation Nursing
                                                    </h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: January 6, 2019
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 hidden-tile">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>01 A Knowledge Assessment - CRRN: Rehabilitation Nursing
                                                    </h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: January 6, 2019
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 hidden-tile">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>01 A Knowledge Assessment - CRRN: Rehabilitation Nursing
                                                    </h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: January 6, 2019
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 hidden-tile">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>01 A Knowledge Assessment - CRRN: Rehabilitation Nursing
                                                    </h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: January 6, 2019
                                                    </div>
                                                </div>
                                            </div>
                                </section>
                                <hr />
                                <section class="section ">
                                    <h1>Attend in Person</h1>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>Fire Safety</h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: Apr 30, 2019 at 1:00pm CT
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>A Practical Approach to Implementing New CDC GBS Guidelines - 20-406920</h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: January 6, 2019
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>01 A Knowledge Assessment - CRRN: Rehabilitation Nursing
                                                    </h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: January 6, 2019
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </section>
                                <hr />
                                <section class="section ">
                                    <h1>Electives</h1>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>Fire Safety</h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: Apr 30, 2019 at 1:00pm CT
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>A Practical Approach to Implementing New CDC GBS Guidelines - 20-406920</h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: January 6, 2019
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>01 A Knowledge Assessment - CRRN: Rehabilitation Nursing
                                                    </h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: January 6, 2019
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>01 A Knowledge Assessment - CRRN: Rehabilitation Nursing
                                                    </h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: January 6, 2019
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </section>
                                <hr>
                                <section class="section">
                                    <h1>All Assigned Learning</h1>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>Fire Safety</h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: Apr 30, 2019 at 1:00pm CT
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>A Practical Approach to Implementing New CDC GBS Guidelines - 20-406920</h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: January 6, 2019
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="task-tile">
                                                <div class="task-tile_title">
                                                    <h2>01 A Knowledge Assessment - CRRN: Rehabilitation Nursing</h2>
                                                </div>
                                                <div class="task-tile_content">
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        Starts: January 6, 2019
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="task-tile task-tile_remainder">
                                                <div class="task-tile_title">
                                                </div>
                                                <div class="task-tile_content">
                                                    <p class="remainder-amount">+14</p>
                                                </div>
                                                <div class="task-tile_footer">
                                                    <div class="call-out">
                                                        14 More Assigned Items
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </section>
                                </div>
                        </section>
                        </div>
                        </div>
                        <?=createFooter($patterns['footer']);?>
                            <?=createPrototypeNav();?>
                                <?=createSiteScripts();?>
                                    <script>
                                    $(".keep-open").on({
                                        "shown.bs.dropdown": function() {
                                            this.closable = false;
                                            $(this).blur(function() {
                                                alert("test");
                                            });
                                        },
                                        "click": function() { this.closable = false; },
                                        "hide.bs.dropdown": function() { return this.closable; }
                                    });

                                    $(".nav-account .trigger-close").click(function() {
                                        $(".nav-account").removeClass("nav-account-open");
                                    });
                                    $(".trigger-open").click(function() {
                                        $(".nav-account").addClass("nav-account-open");
                                    });
                                    $(".task-tile_remainder").click(function() {
                                        $(this).parentsUntil(".section").find(".hidden-tile").show();
                                        $(this).hide();
                                    });
                                    </script>
                                    <?=createSiteEnd();?>