<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Course Name';
$patterns['focus']['title'] = 'Course Name';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-course',
    'type' => 'Course',
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Student:',
        'value' => 'Stephanie Juniper',
    ),
    array(
        'label' => 'Status:',
        'value' => 'Not Yet Started',
    ),
    array(
        'label' => 'Est Time:',
        'value' => '2h 10m',
    ),
);
$patterns['footer']['classes'] = array('site-footer-min');

$tab = (!empty($_GET['tab']))?$_GET['tab']:'1';
$tabs = ['Getting Started','Licenses','Learning Activities','Overview','On Completion','History'];

?>
<?= createSiteStart($patterns['start']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout layout-min layout-unenrolled layout-unlicensed">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <section class="section section-main section-box" data-equalize="layout-columns">

                    <nav class="nav-focus">
                        <div class="nav-mobile"><span><i class="fa fa-caret-down"></i><span><?= $tabs[$tab-1]; ?></span></span> <a href="#nav-main" class="toggle"><i class="fa fa-bars"></i></a></div>
                        <ul class="nav">
                            <li<?php if ($tab == '1') { echo ' class="active"'; } ?>><a href="#tab-1"><i class="fa fa-caret-down"></i><?= $tabs[0]; ?></a></li>
                            <li<?php if ($tab == '2') { echo ' class="active"'; } ?>><a href="#tab-2"><i class="fa fa-caret-down"></i><?= $tabs[1]; ?></a></li>
                            <li class="unenrolled"><a href="#" id="nav-start"><i class="fa fa-caret-down"></i>Start Course</a></li>
                            <li class="enrolled<?php if ($tab == '3') { echo ' active"'; } ?>"><a href="#tab-3"><i class="fa fa-caret-down"></i><?= $tabs[2]; ?></a></li>
                            <li class="enrolled<?php if ($tab == '4') { echo ' active"'; } ?>"><a href="#tab-4"><i class="fa fa-caret-down"></i><?= $tabs[3]; ?></a></li>
                            <li class="enrolled<?php if ($tab == '5') { echo ' active"'; } ?>"><a href="#tab-5"><i class="fa fa-caret-down"></i><?= $tabs[4]; ?></a></li>
                            <li<?php if ($tab == '6') { echo ' class="active"'; } ?>><a href="#tab-6"><i class="fa fa-caret-down"></i><?= $tabs[5]; ?></a></li>
                        </ul>
                    </nav><!-- /nav-focus -->

                    <div class="tab-content">

                        <div class="tab-pane fade<?php if ($tab == '1') { echo ' in active'; } ?>" id="tab-1">
                            <div class="connect-item unlicensed">
                                <div class="connect-item-text">
                                    <h2>Add License <small>Match CE credits to your licenses</small></h2>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                                <a href="#" class="connect-item-link" id="connect-item-link-1"></a>
                            </div>
                            <div class="connect-item licensed">
                                <div class="connect-item-text">
                                    <h2>Confirm Licenses <small>Match CE credits to your licenses</small></h2>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                                <a href="#" class="connect-item-link" id="connect-item-link-2"></a>
                            </div>
                            <div class="connect-item unenrolled">
                                <div class="connect-item-text">
                                    <h2>Start Course <small>Start a new course enrollment</small></h2>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                                <a href="#" class="connect-item-link" id="connect-item-link-3"></a>
                            </div>
                            <div class="connect-item enrolled">
                                <div class="connect-item-text">
                                    <h2>Resume Course <small>Pick up where you left off</small></h2>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                                <a href="#" class="connect-item-link" id="connect-item-link-4"></a>
                            </div>
                            <div class="connect-item">
                                <div class="connect-item-text">
                                    <h2>Print Certificates and Review Completions <small>Completed content and certificates</small></h2>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                                <a href="#" class="connect-item-link" id="connect-item-link-5"></a>
                            </div>
                        </div> <!-- /tab-pane -->

                        <div class="tab-pane fade<?php if ($tab == '2') { echo ' in active'; } ?>" id="tab-2">
                            <section class="section">
                                <h2>My Licenses</h2>
                                <p>Manage your license information to assure continuing education credit is appropriately awarded for CE courses.</p>

                                <?php

                                $content = '
                                    <section class="section">
                                        <h5>Certifying Body</h5>
                                        <p>National Association of Alcoholism and Drug Abuse Counselors Certification Commission (NAADAC)</p>
                                    </section>
                                    <section class="section">
                                        <h5>Updated</h5>
                                        <p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
                                    </section>
                                    <section class="section">
                                        <h5>System Managed</h5>
                                        <p>No</p>
                                    </section>
                                ';

                                $slat = array(
                                    'title' => 'NCAC ll - National Certified Addiction Counsler, Level ll',
                                    'meta' => array(
                                        array(
                                            'label' => 'State:',
                                            'value' => 'MI',
                                        ),
                                        array(
                                            'label' => 'Country:',
                                            'value' => 'United States',
                                        ),
                                        array(
                                            'label' => 'State License:',
                                            'value' => '123456789011112',
                                        ),
                                        array(
                                            'label' => 'Expires:',
                                            'value' => 'Jan. 1, 2015',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-discipline-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                    ),
                                    'nested' => array(
                                        'hide' => array($content),
                                    )
                                );

                                echo createSlat($slat);

                                ?>
                            </section>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '
                                                <a href="#modal-discipline-add" class="btn btn-success" data-toggle="modal">Add License</a>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </div><!-- /tab-pane -->

                        <div class="tab-pane fade<?php if ($tab == '3') { echo ' in active'; } ?>" id="tab-3">
                            <section>
                                <h2>Learning Activities</h2>
                                <?php

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    ),
                                    'title' => '<a href="#">Chronic Pain Management 1</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Online Activity',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'In Progress',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '30m',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Resume',
                                        'link' => '#',
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    ),
                                    'title' => 'Chronic Pain Management 2',
                                    'meta' => array(
                                        array(
                                            'type' => 'Online Activity',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '1h 30m',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="attachment-incomplete.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    ),
                                    'title' => 'Post Test',
                                    'meta' => array(
                                        array(
                                            'type' => 'Test',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '10m',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="test-start.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )
                                );
                                echo createSlat($slat);

                                ?>
                            </section>
                        </div> <!-- /tab-pane -->

                        <div class="tab-pane fade<?php if ($tab == '4') { echo ' in active'; } ?>" id="tab-4">
                            <section class="section">
                                <h2>Description</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </section>

                            <section class="section">
                                <h3>Author</h3>
                                <p><a href="#modal-author" data-toggle="modal">Jane Doe</a></p>
                            </section>

                            <section class="section">
                                <h2>Learning Objectives</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                                <ul>
                                    <li>An ordered list item</li>
                                    <li>An ordered list item</li>
                                    <li>An ordered list item</li>
                                    <li>An ordered list item</li>
                                </ul>
                            </section>

                            <section class="section">
                                <h2>Course Outline</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                <ol>
                                    <li>An unordered list item</li>
                                    <li>An unordered list item</li>
                                    <li>An unordered list item</li>
                                    <li>An unordered list item</li>
                                </ol>
                            </section>

                            <section class="section">
                                <h2>Technical Requirements</h2>
                                <div data-toggle="limit-height" data-labels="Show all information|Show less information">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                    <p>
                                        <b>Browser Requirements</b>
                                        <ul>
                                            <li>An unordered list item</li>
                                            <li>An unordered list item</li>
                                            <li>An unordered list item</li>
                                            <li>An unordered list item</li>
                                        </ul>
                                    </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </section>

                            <section class="section">
                                <h2>Continuing Education Credits</h2>
                                <p>You will earn or renew the following credits upon successful completion of this course.</p>

                                <?php

                                $content = '
                                    <section class="section">
                                        <h5>Statement</h5>
                                        <p>The American Heart Association is accredited by the Accreditation Council for Continuing Medical Education to provide continuing education. The American Heart Association designates this enduring material for a maximim of 2.5 AMA PRA Category 1 Credits.</p>
                                    </section>
                                ';
                                $content1 = '
                                    <section class="section">
                                        <h5>Disciplines</h5>
                                        <p>Emergency Physicians, Physician Assistants, Physician, Surgeons</p>
                                    </section>
                                ';
                                $content2 = '
                                    <section class="section"><h5>Locations</h5>
                                        <p>
                                            <span class="label label-default label-location">AK</span>
                                            <span class="label label-default label-location">AL</span>
                                            <span class="label label-default label-location">AR</span>
                                            <span class="label label-default label-location">CA</span>
                                            <span class="label label-default label-location">CO</span>
                                            <span class="label label-default label-location">CT</span>
                                            <span class="label label-default label-location">DC</span>
                                            <span class="label label-default label-location">DE</span>
                                            <span class="label label-default label-location">AK</span>
                                            <span class="label label-default label-location">AL</span>
                                            <span class="label label-default label-location">AR</span>
                                            <span class="label label-default label-location">CA</span>
                                            <span class="label label-default label-location">CO</span>
                                            <span class="label label-default label-location">CT</span>
                                            <span class="label label-default label-location">DC</span>
                                            <span class="label label-default label-location">DE</span>
                                            <span class="label label-default label-location">AK</span>
                                            <span class="label label-default label-location">AL</span>
                                            <span class="label label-default label-location">AR</span>
                                            <span class="label label-default label-location">CA</span>
                                            <span class="label label-default label-location">CO</span>
                                            <span class="label label-default label-location">CT</span>
                                            <span class="label label-default label-location">DC</span>
                                            <span class="label label-default label-location">DE</span>
                                            <span class="label label-default label-location">AK</span>
                                            <span class="label label-default label-location">AL</span>
                                            <span class="label label-default label-location">AR</span>
                                            <span class="label label-default label-location">CA</span>
                                            <span class="label label-default label-location">CO</span>
                                            <span class="label label-default label-location">CT</span>
                                            <span class="label label-default label-location">DC</span>
                                            <span class="label label-default label-location">DE</span>
                                        </p>
                                    </section>
                                ';
                                $slat = array(
                                    'title' => 'Name of Accrediting / Approval Body',
                                    'nested' => array(
                                        'hide' => array($content,$content1,$content2),
                                    ),
                                    'meta' => array(
                                        array(
                                            'label' => 'Credit:',
                                            'value' => '2.0 AMA PRA Category 1 Credits',
                                        ),
                                        array(
                                            'label' => 'Expiration:',
                                            'value' => 'Apr 4, 2016',
                                        )
                                    ),
                                    'action' => array(),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );
                                echo createSlat($slat);

                                ?>
                            </section>

                            <section class="section">
                                <h2>Certifications</h2>
                                <p>You will earn or renew the following certifcations upon successful completion of this course.</p>
                                <?php

                                 $slat = array(
                                     'title' => 'Certification Name',
                                     'meta' => array(
                                         array(
                                             'label' => 'Certifying Body:',
                                             'value' => 'Name of Accrediting / Approval Body'
                                         ),
                                         array(
                                             'label' => 'Certification Period: ',
                                             'value' => 'Apr 1, 2012 — Apr 1, 2013'
                                         )
                                     ),
                                     'action' => array()
                                 );
                                 echo createSlat($slat);

                                ?>
                            </section>

                        </div><!-- /tab-pane -->

                        <div class="tab-pane fade<?php if ($tab == '5') { echo ' in active'; } ?>" id="tab-5">
                            <section class="section">
                                <h2>Continuing Education Credits</h2>
                                <p>You will earn or renew the following credits upon successful completion of this course.</p>

                                <?php

                                $content = '
                                    <section class="section">
                                        <h5>Statement</h5>
                                        <p>The American Heart Association is accredited by the Accreditation Council for Continuing Medical Education to provide continuing education. The American Heart Association designates this enduring material for a maximim of 2.5 AMA PRA Category 1 Credits.</p>
                                    </section>
                                ';
                                $content1 = '
                                    <section class="section">
                                        <h5>Disciplines</h5>
                                        <p>Emergency Physicians, Physician Assistants, Physician, Surgeons</p>
                                    </section>
                                ';
                                $content2 = '
                                    <section class="section"><h5>Locations</h5>
                                        <p>
                                            <span class="label label-default label-location">AK</span>
                                            <span class="label label-default label-location">AL</span>
                                            <span class="label label-default label-location">AR</span>
                                            <span class="label label-default label-location">CA</span>
                                            <span class="label label-default label-location">CO</span>
                                            <span class="label label-default label-location">CT</span>
                                            <span class="label label-default label-location">DC</span>
                                            <span class="label label-default label-location">DE</span>
                                            <span class="label label-default label-location">AK</span>
                                            <span class="label label-default label-location">AL</span>
                                            <span class="label label-default label-location">AR</span>
                                            <span class="label label-default label-location">CA</span>
                                            <span class="label label-default label-location">CO</span>
                                            <span class="label label-default label-location">CT</span>
                                            <span class="label label-default label-location">DC</span>
                                            <span class="label label-default label-location">DE</span>
                                            <span class="label label-default label-location">AK</span>
                                            <span class="label label-default label-location">AL</span>
                                            <span class="label label-default label-location">AR</span>
                                            <span class="label label-default label-location">CA</span>
                                            <span class="label label-default label-location">CO</span>
                                            <span class="label label-default label-location">CT</span>
                                            <span class="label label-default label-location">DC</span>
                                            <span class="label label-default label-location">DE</span>
                                            <span class="label label-default label-location">AK</span>
                                            <span class="label label-default label-location">AL</span>
                                            <span class="label label-default label-location">AR</span>
                                            <span class="label label-default label-location">CA</span>
                                            <span class="label label-default label-location">CO</span>
                                            <span class="label label-default label-location">CT</span>
                                            <span class="label label-default label-location">DC</span>
                                            <span class="label label-default label-location">DE</span>
                                        </p>
                                    </section>
                                ';
                                $slat = array(
                                    'title' => 'Name of Accrediting / Approval Body',
                                    'nested' => array(
                                        'hide' => array($content,$content1,$content2),
                                    ),
                                    'meta' => array(
                                        array(
                                            'label' => 'Credit:',
                                            'value' => '2.0 AMA PRA Category 1 Credits',
                                        ),
                                        array(
                                            'label' => 'Expiration:',
                                            'value' => 'Apr 4, 2016',
                                        )
                                    ),
                                    'action' => array(),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );
                                echo createSlat($slat);

                                ?>
                            </section>

                            <section class="section">
                                <h2>Certifications</h2>
                                <p>You will earn or renew the following certifcations upon successful completion of this course.</p>
                                <?php

                                $slat = array(
                                    'title' => 'Certification Name',
                                    'meta' => array(
                                        array(
                                            'label' => 'Certifying Body:',
                                            'value' => 'Name of Accrediting / Approval Body'
                                        ),
                                        array(
                                            'label' => 'Certification Period: ',
                                            'value' => 'Apr 1, 2012 — Apr 1, 2013'
                                        )
                                    ),
                                    'action' => array()
                                );

                                echo createSlat($slat);

                                ?>
                            </section>

                        </div><!-- /tab-pane -->

                        <div class="tab-pane fade<?php if ($tab == '6') { echo ' in active'; } ?>" id="tab-6">
                            <section class="section">
                                <h2>Completion History &amp; Certificates</h2>
                                <p>Review completed course content and print certificates of completion.</p>
                                <?php

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    ),
                                    'title' => '<a href="connect-combined-completed.php">May 13, 2013</a>',
                                    'meta' => array(
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Completed',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                        'link' => '#',
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    ),
                                    'title' => '<a href="connect-combined-completed.php">May 13, 2011</a>',
                                    'meta' => array(
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Completed',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                        'link' => '#',
                                    )
                                );
                                echo createSlat($slat);

                                ?>
                            </section>

                        </div><!-- /tab-pane -->


                    </div><!-- /tab-content -->
                </section><!-- /section-main -->

            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>Options</h3>
                        <p>You can leave and return to the course at another time.</p>
                        <a href="#" class="btn btn-sm btn-default">Exit Course</a>
                    </section>
                    <section class="section section-box" id="sidebar-credit">
                        <h3>Additional Credit</h3>
                        <p>You may be eligible for additional credit for this course. Make sure your certifications and licenses are up to date and then refresh your credits.</p>
                        <p><a href="#" class="btn btn-sm btn-default">Refresh Credits</a></p>
                    </section>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div> <!-- /layout -->

<div id="modal-author" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Course Author</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h2>Jane Doe</h2>
                </section>
                <section class="section">
                    <h3>This is a group header</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
                <section class="section">
                    <h3>This is a group header</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-discipline-add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-discipline-add-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="modal-discipline-add-label" class="modal-title">Add License</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Discipline</label>
                    <select class="form-control" id="add-discipline">
                        <option value="">Select a Discipline</option>
                        <option value="default">This is a Discipline that shows default fields</option>
                        <option value="emt">Emergency Medical Technician</option>
                        <option value="pharmacist">Pharmacist</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Country</label>
                    <select class="form-control">
                        <option>Select a Country</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">State/Province of Licensure</label>
                    <select class="form-control">
                        <option>Select a State/Province</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">State License Number <small>Optional</small></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
                            <div class="input-group date">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="discipline-fields-emt" class="discipline-fields">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">NREMT Certification Number <small>Optional</small></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">National Expiration Date  <small>Optional</small></label>
                                <div class="input-group date">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="discipline-fields-pharmacist" class="discipline-fields">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">NABP eProfile ID Number <small>Optional</small></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Birthdate  <small>Optional</small></label>
                                <div class="input-group date">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-discipline-edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-discipline-edit-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="modal-discipline-edit-label" class="modal-title">Manage Licenses</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Discipline</label>
                    <select class="form-control">
                        <option>Another Option</option>
                        <option selected>NCAC ll - National Certified Addiction Counsler, Level ll</option>
                        <option>Another Option</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Country</label>
                    <select class="form-control">
                        <option>Another Option</option>
                        <option selected>United States</option>
                        <option>Another Option</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">State/Province of Licensure</label>
                    <select class="form-control">
                        <option>Another Option</option>
                        <option selected>MI</option>
                        <option>Another Option</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">State License Number <small>Optional</small></label>
                            <input type="text" class="form-control" value="123456789011112">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="Jan. 1, 2015">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
    <script>
        $(function(){

            $('#sidebar-credit').hide();
            $('.nav-focus li a').click(function(){
                if ( $(this).attr('href') === '#tab-2') {
                    $('#sidebar-credit').show();
                } else {
                    $('#sidebar-credit').hide();
                }
                $(window).resize();
            });

            $('#connect-item-link-1').click(function(e) {
                e.preventDefault();
                $('.nav-focus a[href="#tab-2"]').click();
            });
            $('#connect-item-link-2').click(function(e) {
                e.preventDefault();
                $('.nav-focus a[href="#tab-2"]').click();
            });
            $('.nav-focus a[href="#tab-2"]').click(function(){
                // delay until new tab is shown then swap license option on start screen
                setTimeout(function(){
                    $('.layout').removeClass('layout-unlicensed').addClass('layout-licensed');
                },300);
            });
            $('#connect-item-link-3, #nav-start').click(function(e) {
                e.preventDefault();
                HealthStream.utilities.interrupt({
                    type: 'info',
                    title: 'Course Enrollment',
                    text: 'Are you sure you want to start a new course enrollment?',
                    actions: [
                    {
                        id: 'connect-confirm-enroll',
                        type: 'success',
                        label: 'Enroll'
                    },
                    {
                        label: 'Cancel'
                    }
                    ]
                });
            });
            $(document).on('click','#connect-confirm-enroll',function(e) {
                e.preventDefault();
                $('.layout').removeClass('layout-unenrolled').addClass('layout-enrolled');
                $('.meta .meta-value:eq(1)').text('In Progress');
                $('.nav-focus a[href="#tab-3"]').click();
                $('.fph-cell-supporting').html('<figure class="fph-chart-holder"><canvas class="fph-chart" data-type="Doughnut" width="108" height="108" data-segments="[[30,0],[90,0],[10,0]]"></canvas><figcaption>0%</figcaption></figure>');
                HealthStream.focusbar.pageheader.chart();
            });

            $('#connect-item-link-4').click(function(e) {
                e.preventDefault();
                $('.nav-focus a[href="#tab-3"]').click();
            });

            $('#connect-item-link-5').click(function(e) {
                e.preventDefault();
                HealthStream.utilities.interrupt({
                    type: 'info',
                    title: 'Review Completions (No Credit)',
                    text: 'Do you want to review a course you’ve already completed? This will not give you credit for retaking it.',
                    actions: [
                    {
                        id: 'connect-confirm-complete',
                        type: 'success',
                        label: 'Review Completed Courses'
                    },
                    {
                        label: 'Cancel'
                    }
                    ]
                });
            });

            $(document).on('click','#connect-confirm-complete',function(e) {
                e.preventDefault();
                $('.nav-focus a[href="#tab-6"]').click();
            });
        });
    </script>
<?= createSiteEnd(); ?>
