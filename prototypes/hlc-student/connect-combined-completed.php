<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'Course Name';
$patterns['focus']['title'] = 'Course Name';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-course',
    'type' => 'Course',
);
$patterns['focus']['meta_primary'] = array(
    array(
        'label' => 'From:',
        'value' => '<a href="connect-combined.php" class="meta-value">Completion History &amp; Certificates</a>',
    ),
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
$patterns['focus']['supporting'] = '
    <figure class="fph-chart-holder">
        <canvas class="fph-chart" data-type="Doughnut" data-segments="[[30,1],[90,1],[10,1]]" width="108" height="108"></canvas>
        <figcaption>100%</figcaption>
    </figure>';
$patterns['footer']['classes'] = array('site-footer-min');

?>
<?= createSiteStart($patterns['start']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout layout-min">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <section class="section section-main section-box" data-equalize="layout-columns">

                    <?php

                        $focusNav = array(
                            'tabs' => array(
                                array(
                                    'active' => true,
                                    'id' => 'tab-1',
                                    'label' => 'Learning Activities',
                                ),
                                array(
                                    'id' => 'tab-2',
                                    'label' => 'Overview',
                                ),
                                array(
                                    'id' => 'tab-3',
                                    'label' => 'On Completion',
                                ),
                            ),
                        );
                        echo createFocusNav($focusNav);

                    ?>

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab-1">
                            <section>
                                <h2>Learning Activities</h2>
                                <?php

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-status')),
                                    ),
                                    'title' => '<a href="attachment-complete.php">Chronic Pain Management 1</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Online Activity',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Completed',
                                        ),
                                        array(
                                            'label' => 'Last Accessed:',
                                            'value' => 'May 19, 2013 9:05am',
                                        )

                                    ),
                                    'action' => array(
                                        'type' => 'status-complete',
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-status')),
                                    ),
                                    'title' => '<a href="attachment-complete.php">Chronic Pain Management 2</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Online Activity',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Completed',
                                        ),
                                        array(
                                            'label' => 'Last Accessed:',
                                            'value' => 'May 20, 2013 10:12am',
                                        )

                                    ),
                                    'action' => array(
                                        'type' => 'status-complete',
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-status')),
                                    ),
                                    'title' => 'Post Assessment',
                                    'meta' => array(
                                        array(
                                            'type' => 'Test',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Completed',
                                        ),
                                        array(
                                            'label' => 'Score:',
                                            'value' => 'Passed, 82%',
                                        ),
                                        array(
                                            'label' => 'Last Accessed:',
                                            'value' => 'May 21, 2013 10:46am',
                                        )

                                    ),
                                    'action' => array(
                                        'type' => 'status-complete',
                                    )
                                );
                                echo createSlat($slat);

                                ?>
                            </section>
                        </div> <!-- /tab-pane -->

                        <div class="tab-pane fade" id="tab-2">
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

                        <div class="tab-pane fade" id="tab-3">
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
                        <p>You may be eligible for additional credit for this course. Make sure your certifications and licenses are up to date.</p>
                        <ul class="list-unstyled">
                            <li><a href="connect.php?tab=2">Manage Licenses</a><li>
                        </ul>
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

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
    <script>
        $(function(){
            // This is a hack to make the prototype only show
            // the additional credits sidebar section when the
            // On Completion tab is active
            $('#sidebar-credit').hide();
            $('.nav-focus li a').click(function(){
                if ( $(this).attr('href') === '#tab-3') {
                    $('#sidebar-credit').show();
                } else {
                    $('#sidebar-credit').hide();
                }
            });
        });
    </script>
<?= createSiteEnd(); ?>
