<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Slat Checkbox Examples';
$patterns['header']['mainNavActive'] = false;
$patterns['focus']['title'] = 'Slat Checkbox Examples';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
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

                        <?php

                        $content = '
                            <div class="slat-input">
                                <!-- <input type="checkbox"> -->
                                <a href="#"><i class="fa fa-square"></i></a>
                                <!-- <a href="#"><i class="fa fa-check-square"></i></a> -->
                                <!-- <a href="#"><i class="fa fa-plus-square"></i></a> -->
                                <!-- <a href="#"><i class="fa fa-minus-square"></i></a> -->
                            </div>
                        ';
                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-checkbox','slat-callout')),
                            ),
                            'title' => '<a href="course-elective.php">This is an example of an elective</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'Not Yet Started',
                                ),
                                array(
                                    'label' => 'Enrolled By:',
                                    'value' => 'Self',
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => 'Elective',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'action-split',
                                'options' => array(
                                    array(
                                        'content' => 'Start',
                                        'link' => 'course-elective.php'
                                    ),
                                    array(
                                        'content' => 'Un-enroll',
                                        'link' => '#',
                                    ),
                                    array(
                                        'content' => 'Another Option',
                                        'link' => '#',
                                    ),
                                    array(
                                        'content' => 'Another Option',
                                        'link' => '#',
                                    ),
                                    array(
                                        'content' => 'Another Option',
                                        'link' => '#',
                                    ),
                                    array(
                                        'content' => 'Another Option',
                                        'link' => '#',
                                    ),
                                    array(
                                        'content' => 'Another Option',
                                        'link' => '#',
                                    ),
                                    array(
                                        'content' => 'Another Option',
                                        'link' => '#',
                                    ),
                                )
                            ),
                            'nested' => array(
                                'show' => array($content),
                            ),
                        );
                        echo createSlat($slat);

                        $content = '
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
                        ';
                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-checkbox','slat-checkbox-success','slat-callout')),
                            ),
                            'title' => '<a href="course-elective.php">This is an example of an elective</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'Not Yet Started',
                                ),
                                array(
                                    'label' => 'Enrolled By:',
                                    'value' => 'Self',
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => 'Elective',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'action-split',
                                'options' => array(
                                    array(
                                        'content' => 'Start',
                                        'link' => 'course-elective.php'
                                    ),
                                    array(
                                        'content' => 'Un-enroll',
                                        'link' => '#',
                                    ),
                                    array(
                                        'content' => 'Another Option',
                                        'link' => '#',
                                    ),
                                    array(
                                        'content' => 'Another Option',
                                        'link' => '#',
                                    ),
                                    array(
                                        'content' => 'Another Option',
                                        'link' => '#',
                                    ),
                                    array(
                                        'content' => 'Another Option',
                                        'link' => '#',
                                    ),
                                    array(
                                        'content' => 'Another Option',
                                        'link' => '#',
                                    ),
                                    array(
                                        'content' => 'Another Option',
                                        'link' => '#',
                                    ),
                                )
                            ),
                            'nested' => array(
                                'show' => array($content),
                            ),
                        );
                        echo createSlat($slat);

                        $content = '
                            <div class="slat-input">
                                <!-- <input type="checkbox"> -->
                                <a href="#"><i class="fa fa-square"></i></a>
                                <!-- <a href="#"><i class="fa fa-check-square"></i></a> -->
                                <!-- <a href="#"><i class="fa fa-plus-square"></i></a> -->
                                <!-- <a href="#"><i class="fa fa-minus-square"></i></a> -->
                            </div>
                        ';
                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-checkbox','slat-checkbox-danger','slat-callout')),
                            ),
                            'title' => '<a href="course-elective.php">This is an example of an elective</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'Not Yet Started',
                                ),
                                array(
                                    'label' => 'Enrolled By:',
                                    'value' => 'Self',
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => 'Elective',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'action-split',
                                'options' => array(
                                    array(
                                        'content' => 'Start',
                                        'link' => 'course-elective.php'
                                    ),
                                    array(
                                        'content' => 'Un-enroll',
                                        'link' => '#',
                                    ),
                                    array(
                                        'content' => 'Another Option',
                                        'link' => '#',
                                    ),
                                    array(
                                        'content' => 'Another Option',
                                        'link' => '#',
                                    ),
                                    array(
                                        'content' => 'Another Option',
                                        'link' => '#',
                                    ),
                                    array(
                                        'content' => 'Another Option',
                                        'link' => '#',
                                    ),
                                    array(
                                        'content' => 'Another Option',
                                        'link' => '#',
                                    ),
                                    array(
                                        'content' => 'Another Option',
                                        'link' => '#',
                                    ),
                                )
                            ),
                            'nested' => array(
                                'show' => array($content),
                            ),
                        );
                        echo createSlat($slat);

                        ?>

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
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>