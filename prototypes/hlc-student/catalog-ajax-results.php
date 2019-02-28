<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Catalog';
$patterns['header']['mainNavActive'] = 'catalog';
$patterns['focus']['title'] = 'Catalog';
$patterns['focus']['type'] = 'search';
$patterns['focus']['search'] = array(
    'placeholder' => 'Search',
    'url' => 'catalog-ajax-results.php',
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout">
    <div class="container">
        <section class="section section-main section-box">
            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm">
                    <section class="section catalog-sidebar" data-equalize="layout-columns">
                        <section class="section">
                            <h2>Search Terms</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="label label-default">Keyword <i class="fa fa-times"></i></a></li>
                            </ul>
                        </section>
                        <section class="section">
                            <nav class="category-slider">
                                <div class="cs-wrap">
                                    <h2>Categories</h2>
                                    <ul></ul>
                                </div>
                            </nav>
                        </section>
                        <section class="section">
                            <h2>Course Type</h2>
                            <ul class="list-unstyled">
                                <li class="checkbox">
                                    <label><input type="checkbox"> Online <small>(web-based-training)</small></label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> Classroom</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> Virtual Class <small>(web meeting)</small></label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> Video</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> Test</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> Evaluation</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> Attachment</label>
                                </li>
                            </ul>
                        </section>
                        <section class="section">
                            <h2>Alphabetical</h2>
                            <select class="form-control">
                                <option>All</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                            </select>
                        </section>
                    </section>
                </div>
                <div class="col-md-9" data-equalize="layout-columns">
                    <section class="section">
                        <h2>Results <small>Showing 1-10 of 55</small></h2>
                    </section>
                    <section class="section">
                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => '<a href="course-enroll.php">AORN Caring for the Older Adult</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'CE:',
                                    'value' => 'No',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => '<i class="fa fa-info visible-xs"></i> Info',
                                'link' => 'course-enroll.php',
                            )
                        );
                        echo createSlat($slat);

                        $nested = createSlat(array(
                            'attributes' => array(
                                array('class','slat'),
                            ),
                            'title' => 'CE - AHIMA',
                            'meta' => array(
                                array(
                                    'label' => 'Discipline:',
                                    'value' => 'Registered Nurse',
                                ),
                                array(
                                    'label' => 'Credits:',
                                    'value' => '1.0',
                                ),
                            ),
                            'action' => array(),
                        ));
                        $nested1 = createSlat(array(
                            'attributes' => array(
                                array('class','slat'),
                            ),
                            'title' => 'CE - AAPC',
                            'meta' => array(
                                array(
                                    'label' => 'Discipline:',
                                    'value' => 'Registered Nurse',
                                ),
                                array(
                                    'label' => 'Credits:',
                                    'value' => '1.0',
                                ),
                            ),
                            'action' => array(),
                        ));
                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => '<a href="course-enroll.php">Coronary Artery Disease (CAD)</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Curriculum',
                                ),
                                array(
                                    'label' => 'CE:',
                                    'value' => 'Yes',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => '<i class="fa fa-info visible-xs"></i> Info',
                                'link' => 'course-enroll.php',
                            ),
                            'nested' => array(
                                'hide' => array($nested,$nested1)
                            ),
                        );
                        echo createSlat($slat);


                        $nested = createSlat(array(
                            'attributes' => array(
                                array('class','slat'),
                            ),
                            'title' => 'CE - AHIMA',
                            'meta' => array(
                                array(
                                    'label' => 'Discipline:',
                                    'value' => 'Registered Nurse',
                                ),
                                array(
                                    'label' => 'Credits:',
                                    'value' => '1.0',
                                ),
                            ),
                            'action' => array(),
                        ));
                        $nested1 = createSlat(array(
                            'attributes' => array(
                                array('class','slat'),
                            ),
                            'title' => 'CE - AAPC',
                            'meta' => array(
                                array(
                                    'label' => 'Discipline:',
                                    'value' => 'Registered Nurse',
                                ),
                                array(
                                    'label' => 'Credits:',
                                    'value' => '1.0',
                                ),
                            ),
                            'action' => array(),
                        ));
                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => '<a href="course-enroll.php">Moderate Sedation</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'CE:',
                                    'value' => 'Yes',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => '<i class="fa fa-info visible-xs"></i> Info',
                                'link' => 'course-enroll.php',
                            ),
                            'nested' => array(
                                'hide' => array($nested,$nested1)
                            ),
                        );
                        echo createSlat($slat);


                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => '<a href="course-enroll.php">Profile of Multisystem Trauma Patients</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'CE:',
                                    'value' => 'No',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => '<i class="fa fa-info visible-xs"></i> Info',
                                'link' => 'course-enroll.php',
                            )
                        );
                        echo createSlat($slat);


                        $nested = createSlat(array(
                            'attributes' => array(
                                array('class','slat'),
                            ),
                            'title' => 'CE - AHIMA',
                            'meta' => array(
                                array(
                                    'label' => 'Discipline:',
                                    'value' => 'AEMT',
                                ),
                                array(
                                    'label' => 'Credits:',
                                    'value' => '2.50 AMA PRA Category 1',
                                ),
                            ),
                            'action' => array(),
                        ));
                        $nested1 = createSlat(array(
                            'attributes' => array(
                                array('class','slat'),
                            ),
                            'title' => 'CE - AAPC',
                            'meta' => array(
                                array(
                                    'label' => 'Discipline:',
                                    'value' => 'Registered Nurses - Advanced Registered Nurse Practitioner',
                                ),
                                array(
                                    'label' => 'Credits:',
                                    'value' => '3.25',
                                ),
                            ),
                            'action' => array(),
                        ));
                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => '<a href="course-enroll.php">Understanding Chronic Pain Management</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'CE:',
                                    'value' => '2.50 &ndash; 3.25',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => '<i class="fa fa-info visible-xs"></i> Info',
                                'link' => 'course-enroll.php',
                            ),
                            'nested' => array(
                                'hide' => array($nested,$nested1)
                            ),
                        );
                        echo createSlat($slat);


                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => '<a href="course-enroll.php">AORN Caring for the Older Adult</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'CE:',
                                    'value' => 'No',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => '<i class="fa fa-info visible-xs"></i> Info',
                                'link' => 'course-enroll.php',
                            )
                        );
                        echo createSlat($slat);

                        $nested = createSlat(array(
                            'attributes' => array(
                                array('class','slat'),
                            ),
                            'title' => 'CE - AHIMA',
                            'meta' => array(
                                array(
                                    'label' => 'Discipline:',
                                    'value' => 'Registered Nurse',
                                ),
                                array(
                                    'label' => 'Credits:',
                                    'value' => '1.0',
                                ),
                            ),
                            'action' => array(),
                        ));
                        $nested1 = createSlat(array(
                            'attributes' => array(
                                array('class','slat'),
                            ),
                            'title' => 'CE - AAPC',
                            'meta' => array(
                                array(
                                    'label' => 'Discipline:',
                                    'value' => 'Registered Nurse',
                                ),
                                array(
                                    'label' => 'Credits:',
                                    'value' => '1.0',
                                ),
                            ),
                            'action' => array(),
                        ));
                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => '<a href="course-enroll.php">Coronary Artery Disease (CAD)</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Curriculum',
                                ),
                                array(
                                    'label' => 'CE:',
                                    'value' => 'Yes',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => '<i class="fa fa-info visible-xs"></i> Info',
                                'link' => 'course-enroll.php',
                            ),
                            'nested' => array(
                                'hide' => array($nested,$nested1)
                            ),
                        );
                        echo createSlat($slat);


                        $nested = createSlat(array(
                            'attributes' => array(
                                array('class','slat'),
                            ),
                            'title' => 'CE - AHIMA',
                            'meta' => array(
                                array(
                                    'label' => 'Discipline:',
                                    'value' => 'Registered Nurse',
                                ),
                                array(
                                    'label' => 'Credits:',
                                    'value' => '1.0',
                                ),
                            ),
                            'action' => array(),
                        ));
                        $nested1 = createSlat(array(
                            'attributes' => array(
                                array('class','slat'),
                            ),
                            'title' => 'CE - AAPC',
                            'meta' => array(
                                array(
                                    'label' => 'Discipline:',
                                    'value' => 'Registered Nurse',
                                ),
                                array(
                                    'label' => 'Credits:',
                                    'value' => '1.0',
                                ),
                            ),
                            'action' => array(),
                        ));
                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => '<a href="course-enroll.php">Moderate Sedation</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'CE:',
                                    'value' => 'Yes',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => '<i class="fa fa-info visible-xs"></i> Info',
                                'link' => 'course-enroll.php',
                            ),
                            'nested' => array(
                                'hide' => array($nested,$nested1)
                            ),
                        );
                        echo createSlat($slat);


                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => '<a href="course-enroll.php">Profile of Multisystem Trauma Patients</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'CE:',
                                    'value' => 'No',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => '<i class="fa fa-info visible-xs"></i> Info',
                                'link' => 'course-enroll.php',
                            )
                        );
                        echo createSlat($slat);


                        $nested = createSlat(array(
                            'attributes' => array(
                                array('class','slat'),
                            ),
                            'title' => 'CE - AHIMA',
                            'meta' => array(
                                array(
                                    'label' => 'Discipline:',
                                    'value' => 'AEMT',
                                ),
                                array(
                                    'label' => 'Credits:',
                                    'value' => '2.50 AMA PRA Category 1',
                                ),
                            ),
                            'action' => array(),
                        ));
                        $nested1 = createSlat(array(
                            'attributes' => array(
                                array('class','slat'),
                            ),
                            'title' => 'CE - AAPC',
                            'meta' => array(
                                array(
                                    'label' => 'Discipline:',
                                    'value' => 'Registered Nurses - Advanced Registered Nurse Practitioner',
                                ),
                                array(
                                    'label' => 'Credits:',
                                    'value' => '3.25',
                                ),
                            ),
                            'action' => array(),
                        ));
                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => '<a href="course-enroll.php">Understanding Chronic Pain Management</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'CE:',
                                    'value' => '2.50 &ndash; 3.25',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => '<i class="fa fa-info visible-xs"></i> Info',
                                'link' => 'course-enroll.php',
                            ),
                            'nested' => array(
                                'hide' => array($nested,$nested1)
                            ),
                        );
                        echo createSlat($slat);

                        ?>
                    </section>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'position' => 'left',
                                    'classes' => array('visible-xs','visible-sm'),
                                    'html' => '<a href="#modal-filter" class="btn btn-success" data-toggle="modal">Filter Results</a>',
                                ),
                                array(
                                    'position' => 'right',
                                    'classes' => array('hidden-xs'),
                                    'html' => '
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-10 of 55 <i class="fa fa-caret-up"></i></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="active"><a href="#">10 per page</a></li>
                                                <li><a href="#">50 per page</a></li>
                                                <li><a href="#">Show all</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    ',
                                ),
                                array(
                                    'position' => 'right',
                                    'classes' => array('visible-xs'),
                                    'html' => '
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    ',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>

                </div>
            </div>
        </section>


        <!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->
<!-- Modal -->
<div id="modal-filter" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Filter Results</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h2>Search Terms</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="label label-default">Keyword <i class="fa fa-times"></i></a></li>
                    </ul>
                </section>
                <section class="section">
                    <nav class="category-slider">
                        <div class="cs-wrap">
                            <h2>Categories</h2>
                            <ul></ul>
                        </div>
                    </nav>
                </section>
                <section class="section">
                    <h2>Course Type</h2>
                    <ul class="list-unstyled">
                        <li class="checkbox">
                            <label><input type="checkbox"> Online <small>(web-based-training)</small></label>
                        </li>
                        <li class="checkbox">
                            <label><input type="checkbox"> Classroom</label>
                        </li>
                        <li class="checkbox">
                            <label><input type="checkbox"> Virtual Class <small>(web meeting)</small></label>
                        </li>
                        <li class="checkbox">
                            <label><input type="checkbox"> Video</label>
                        </li>
                        <li class="checkbox">
                            <label><input type="checkbox"> Test</label>
                        </li>
                        <li class="checkbox">
                            <label><input type="checkbox"> Evaluation</label>
                        </li>
                        <li class="checkbox">
                            <label><input type="checkbox"> Attachment</label>
                        </li>
                    </ul>
                </section>
                <section class="section">
                    <h2>Alphabetical</h2>
                    <select class="form-control">
                        <option>All</option>
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                    </select>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script src="/scripts/healthstream.catalog.js"></script>
<?= createSiteEnd(); ?>