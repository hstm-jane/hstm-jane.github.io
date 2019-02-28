<?php


include 'includes/helpers.php';

$options = json_decode('{
    "head": {
        "title" : "Welcome to the HLC"
    },
    "focus": {
        "title": "My To-Do List",
        "action": {
            "label": "Quick Start",
            "link": "course.php"
        },
        "meta": [
            ["Total Tasks:","10"],
            ["Requiring Attention:","3"]
        ],
        "supporting": "<img src=\"/content/images/coaching-quick.png\">"
    }
}',true);

include_site_start($options);
//include_site_header($options);
echo createHeader($patterns['header']);
include_renewed_focus_bar($options);
?>
<style>

    .slat-checkbox {
        margin-left: 30px;
        border-left: none !important;
    }
    .slat-checkbox .slat-input {
        position: absolute;
        top: -1px;
        left: -30px;
        bottom: -1px;
        width: 30px;
        background: #ddd;
        border: 1px solid #D3d3d3;
    }
    .slat-checkbox .slat-input a {
        width: 25px;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        font-size: 16px;
    }
    .slat-checkbox .slat-input i {
        position: absolute;
        top: 50%;
        left: 8px;
        margin-top: -.5em;
        color: #fff;
    }

    .slat-checkbox-success .slat-input {
        background: green;
        border-color: green;
        color: #fff;
    }
    .slat-checkbox-danger .slat-input {
        background: red;
        border-color: red;
        color: #fff;
    }

    .meta-value {
        display: inline !important;
    }

</style>
<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-main section-box" data-equalize="layout-columns">

                    <section class="section" id="tasks">

                        <div class="slat slat-checkbox slat-callout">
                            <div class="slat-default">
                                <div class="title"><a href="course-elective.php">This is an example of an elective</a></div>
                                <ul class="meta">
                                    <li><span class="meta-type"><i class="hs-icons-course-sm"></i> Course</span></li>
                                    <li><span class="meta-label">Status:</span><span class="meta-value">Not Yet Started</span></li>
                                    <li><span class="meta-label">Enrolled By:</span><span class="meta-value">Self</span></li>
                                    <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value">Elective</span></li>
                                </ul>
                                <div class="action action-split">
                                    <div class="btn-group">
                                        <a href="course-elective.php" class="btn btn-default btn-sm hidden-xs">Start</a>
                                        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="course-elective.php">Start</a></li>
                                            <li><a href="#">Unenroll</a></li>
                                            <li><a href="#">Another Option</a></li>
                                            <li><a href="#">Another Option</a></li>
                                            <li><a href="#">Another Option</a></li>
                                            <li><a href="#">Another Option</a></li>
                                            <li><a href="#">Another Option</a></li>
                                            <li><a href="#">Another Option</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="slat-input">
                                <!-- <input type="checkbox"> -->
                                <a href="#"><i class="fa fa-square"></i></a>
                                <!-- <a href="#"><i class="fa fa-check-square"></i></a> -->
                                <!-- <a href="#"><i class="fa fa-plus-square"></i></a> -->
                                <!-- <a href="#"><i class="fa fa-minus-square"></i></a> -->
                            </div>
                        </div>

                        <div class="slat slat-checkbox slat-checkbox-success slat-callout">
                            <div class="slat-default">
                                <div class="title"><a href="course-elective.php">This is an example of an elective</a></div>
                                <ul class="meta">
                                    <li><span class="meta-type"><i class="hs-icons-course-sm"></i> Course</span></li>
                                    <li><span class="meta-label">Status:</span><span class="meta-value">Not Yet Started</span></li>
                                    <li><span class="meta-label">Enrolled By:</span><span class="meta-value">Self</span></li>
                                    <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value">Elective</span></li>
                                </ul>
                                <div class="action action-split">
                                    <div class="btn-group">
                                        <a href="course-elective.php" class="btn btn-default btn-sm hidden-xs">Start</a>
                                        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="course-elective.php">Start</a></li>
                                            <li><a href="#">Unenroll</a></li>
                                            <li><a href="#">Another Option</a></li>
                                            <li><a href="#">Another Option</a></li>
                                            <li><a href="#">Another Option</a></li>
                                            <li><a href="#">Another Option</a></li>
                                            <li><a href="#">Another Option</a></li>
                                            <li><a href="#">Another Option</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="slat-input">
                                <!-- <input type="checkbox"> -->
                                <!-- <a href="#"><i class="fa fa-square"></i></a> -->
                                <!-- <a href="#"><i class="fa fa-check-square"></i></a> -->
                                <!-- <a href="#"><i class="fa fa-circle"></i></a> -->
                                <!-- <a href="#"><i class="fa fa-dot-circle-o"></i></a> -->
                                <a href="#"><i class="fa fa-check-circle"></i></a>
                                <!-- <a href="#"><i class="fa fa-plus-square"></i></a> -->
                                <!-- <a href="#"><i class="fa fa-minus-square"></i></a> -->
                            </div>
                        </div>

                        <div class="slat slat-checkbox slat-checkbox-danger slat-callout">
                            <div class="slat-default">
                                <div class="title"><a href="course-elective.php">This is an example of an elective</a></div>
                                <ul class="meta">
                                    <li><span class="meta-type"><i class="hs-icons-course-sm"></i> Course</span></li>
                                    <li><span class="meta-label">Status:</span><span class="meta-value">Not Yet Started</span></li>
                                    <li><span class="meta-label">Enrolled By:</span><span class="meta-value">Self</span></li>
                                    <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value">Elective</span></li>
                                </ul>
                                <div class="action action-split">
                                    <div class="btn-group">
                                        <a href="course-elective.php" class="btn btn-default btn-sm hidden-xs">Start</a>
                                        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="course-elective.php">Start</a></li>
                                            <li><a href="#">Unenroll</a></li>
                                            <li><a href="#">Another Option</a></li>
                                            <li><a href="#">Another Option</a></li>
                                            <li><a href="#">Another Option</a></li>
                                            <li><a href="#">Another Option</a></li>
                                            <li><a href="#">Another Option</a></li>
                                            <li><a href="#">Another Option</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="slat-input">
                                <!-- <input type="checkbox"> -->
                                <a href="#"><i class="fa fa-square"></i></a>
                                <!-- <a href="#"><i class="fa fa-check-square"></i></a> -->
                                <!-- <a href="#"><i class="fa fa-plus-square"></i></a> -->
                                <!-- <a href="#"><i class="fa fa-minus-square"></i></a> -->
                            </div>
                        </div>
                    </section>
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>Reminder</h3>
                        <ul class="list-links">
                            <li><a href="/highlight.php">Scheduled Downtime 4/19 at 11PM</a></li>
                        </ul>
                    </section>
                    <?php include_sidebar() ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->
<?= 
createFooter($patterns['footer']); 
include_site_scripts($options);
include_site_end($options);
?>
