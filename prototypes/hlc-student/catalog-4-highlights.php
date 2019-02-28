<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Catalog';
$patterns['header']['mainNavActive'] = 'catalog';
$patterns['focus']['title'] = 'Catalog';
$patterns['focus']['type'] = 'search';
$patterns['focus']['search'] = array(
    'placeholder' => 'Search',
    'url' => 'catalog-results.php',
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<style>
    @media only print {
        .site-header { border-bottom: 1px solid #999; }
        .site-header a[href]:after { content: ""; }
        .site-header .trigger-open { display: none !important; }

        .focus-pageheader { display: none; }
        .section-carousel { display: none; }

        .tag {
            border: 1px solid #ccc;
        }
        .tag i {
            display: none;
        }

        .section,
        .slat { page-break-inside: avoid; }
        .slat .title a[href]:after { content: ""; }
        .slat .btn { display: none; }

        .site-footer .focus-promo,
        .site-footer .links {
            display: none;
        }
        section[data-equalize="layout-columns"] {
            height: auto !important;
            min-height: 0 !important;
        }
    }
</style>
<div class="layout layout-search">
    <div class="container">

        <section class="section section-carousel hidden-print">
            <div>
                <div class="hs-item">
                    <div class="hs-item-image" style="background-image:url('/content/images/catalog-CE-Center.jpg');"></div>
                    <div class="hs-item-text">
                        <h2>CE Center for You <small>Unlimited Access to Education</small></h2>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                    <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
                </div>
            </div>
            <div>
                <div class="hs-item">
                    <div class="hs-item-image" style="background-image:url('/content/images/catalog-OneSource.png');"></div>
                    <div class="hs-item-text">
                        <h2>OneSource <small>Medical Product Training</small></h2>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                    <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
                </div>
            </div>
            <div>
                <div class="hs-item">
                    <div class="hs-item-image" style="background-image:url('/content/images/catalog-Connect2Know.png');"></div>
                    <div class="hs-item-text">
                        <h2>Connect2Know <small>Wound Care Resource Center</small></h2>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                    <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
                </div>
            </div>
            <div>
                <div class="hs-item">
                    <div class="hs-item-image" style="background-image:url('/content/images/catalog-template.png');"></div>
                    <div class="hs-item-text">
                        <h2>Feature #4 <small>with additional text</small></h2>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                    <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
                </div>
            </div>
            <!--<div>
                <div class="hs-item">
                    <div class="hs-item-image" style="background-image:url('/content/images/catalog-template.png');"></div>
                    <div class="hs-item-text">
                        <h2>Feature #5 <small>with additional text</small></h2>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                    <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
                </div>
            </div> -->
        </section>

        <section class="section section-main section-box">
            <div class="row">

                <div class="col-md-3 hidden-xs hidden-sm">
                    <section class="section section-refinement-options" data-equalize="layout-columns">
                        <header>
                            <h2>Refine</h2>
                        </header>
                        <section class="section section-refinement-group">
                            <h3>Search Terms</h3>
                            <div class="tag-group">
                                <a href="#" class="tag">Keyword A<i class="fa fa-times"></i></a>
                                <a href="#" class="tag">A-long-non-breaking-keyword-a-long-non-breaking-keyword<i class="fa fa-times"></i></a>
                                <a href="#" class="tag">Keyword C<i class="fa fa-times"></i></a>
                                <a href="#" class="tag">Keyword D<i class="fa fa-times"></i></a>
                                <a href="#" class="tag">Keyword E<i class="fa fa-times"></i></a>
                            </div>
                        </section>
                        <section class="section section-refinement-group">
                            <nav class="catalog-categories">
                                <h3>Categories</h3>
                                <div data-toggle="limit-height" data-labels="Show More|Show Less" data-height="240">
                                    <ul>
                                        <?php for($i=0;$i<20;$i++) { ?>
                                        <li>
                                            <a href="#">
                                                <div class="cc-col">Subcategory</div>
                                                <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                            </a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </nav>
                        </section>
                        <section class="section section-refinement-group">
                            <h3>Course Type</h3>
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
                        <section class="section section-refinement-group">
                            <h3>Alphabetical</h3>
                            <select class="form-control">
                                <option>All</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                            </select>
                        </section>
                    </section>
                </div>
                <div class="col-md-9">
                    <section class="section section-results" data-equalize="layout-columns">
                        <section class="section section-results-header">
                            <div class="row">
                                <div class="col-md-9">
                                    <h2>Results <small>Showing 1-10 of 15</small></h2>
                                    <div class="section section-refinement-applied">
                                        <h3>Refinements</h3>
                                        <div class="tag-group">
                                            <a href="#" class="tag">Keyword A<i class="fa fa-times"></i></a>
                                            <a href="#" class="tag">A-long-non-breaking-keyword-a-long-non-breaking-keyword<i class="fa fa-times"></i></a>
                                            <a href="#" class="tag">Keyword C<i class="fa fa-times"></i></a>
                                            <a href="#" class="tag">Keyword D<i class="fa fa-times"></i></a>
                                            <a href="#" class="tag">Keyword E<i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 hidden-xs hidden-sm">
                                    <div class="section-results-header-sort">
                                        <div class="dropdown">
                                            <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Best Match <i class="fa fa-sort"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="active"><a href="#">Best Match</a></li>
                                                <li><a href="#">Date Updated</a></li>
                                                <li><a href="#">Name</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section">
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
                                        'html' => '<a href="#modal-refine" class="btn btn-default" data-toggle="modal">Refine Results</a>',
                                    ),
                                    array(
                                        'position' => 'right',
                                        'classes' => array('hidden-xs','hidden-sm'),
                                        'html' => '
                                            <div class="btn-group dropup">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-10 of 15 <i class="fa fa-caret-up"></i></button>
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
                                        'classes' => array('visible-xs','visible-sm'),
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

                    </section><!-- /section-main -->
                </div><!-- /column -->
            </div><!-- /row -->
        </section>


    </div><!-- /container -->
</div><!-- /layout -->

<div class="modal fade" id="modal-splash">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-splash">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="modal-splash-image">
                            <img src="/content/images/catalog-splash-donotuse.png">
                        </div>
                    </div>
                    <div class="col-sm-8 modal-splash-title">
                        <h1>Title of splash page</h1>
                        <p class="lead">Unlimited Access to Education</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 modal-splash-bullet">
                        <p><strong>Search</strong> for courses by category, by keyword search or both</p>
                    </div>
                    <div class="col-sm-4 modal-splash-bullet">
                        <p><strong>Enroll</strong> in courses and they will appear on your To Do list</p>
                    </div>
                    <div class="col-sm-4 modal-splash-bullet">
                        <p><strong>Complete</strong> courses for credit and recognition found on your transcript</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 modal-splash-reminder">
                        <p>Remember to complete your profile in order to receive CE Credit</p>
                    </div>
                    <div class="col-sm-4">
                        <a href="catalog-results.php" class="btn btn-success btn-lg btn-block">Get Started</a>
                        <div class="form-group">
                            <label class="checkbox"><input type="checkbox"> Don't show this again</label>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div id="modal-refine" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <section class="section section-refinement-group">
                        <h3>Search Terms</h3>
                        <div class="tag-group">
                            <a href="#" class="tag">Keyword A<i class="fa fa-times"></i></a>
                            <a href="#" class="tag">A-long-non-breaking-keyword-a-long-non-breaking-keyword<i class="fa fa-times"></i></a>
                            <a href="#" class="tag">Keyword C<i class="fa fa-times"></i></a>
                            <a href="#" class="tag">Keyword D<i class="fa fa-times"></i></a>
                            <a href="#" class="tag">Keyword E<i class="fa fa-times"></i></a>
                        </div>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Sort</h3>
                        <select class="form-control">
                            <option>Best Match</option>
                            <option>Date Updated</option>
                            <option>Name</option>
                        </select>
                    </section>
                    <section class="section section-refinement-group">
                        <nav class="catalog-categories">
                            <h3>Categories</h3>
                            <div data-toggle="limit-height" data-labels="Show More|Show Less" data-height="240">
                                <ul>
                                    <?php for($i=0;$i<20;$i++) { ?>
                                    <li>
                                        <a href="#">
                                            <div class="cc-col">Subcategory</div>
                                            <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </nav>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Course Type</h3>
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
                    <section class="section section-refinement-group">
                        <h3>Alphabetical</h3>
                        <select class="form-control">
                            <option>All</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                        </select>
                    </section>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script src="/scripts/healthstream.catalog.js"></script>
<?= createSiteEnd(); ?>