<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'Understanding Chronic Pain Management';
$patterns['focus']['title'] = 'Understanding Chronic Pain Management';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-course',
    'type' => 'Course',
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Status:',
        'value' => 'In Progress',
    ),
    array(
        'label' => 'Est Time:',
        'value' => '1h',
    ),
    array(
        'label' => 'Due:',
        'value' => 'Oct 31, 2015',
    ),
);
$patterns['focus']['supporting'] = '
    <figure class="fph-chart-holder">
        <canvas class="fph-chart" data-type="Doughnut" data-segments="[[30,1],[30,0]]" width="108" height="108"></canvas>
        <figcaption>50%</figcaption>
    </figure>';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <section class="section section-main section-box" data-equalize="layout-columns">

                    <?php

                        $focusNav = array(
                            'tabs' => array(
                                array(
                                    'active' => true,
                                    'id' => 'learning-activities',
                                    'label' => 'Learning Activities',
                                ),
                                array(
                                    'id' => 'overview',
                                    'label' => 'Overview',
                                ),
                                array(
                                    'id' => 'completion',
                                    'label' => 'On Completion',
                                ),
                            ),
                        );
                        echo createFocusNav($focusNav);

                    ?>

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="learning-activities">
                            <section>
                                <h2>Learning Activities</h2>
                                <?php
                                $slat = array(
                                    'title' => '<a href="registration-registered-class-single.php">Chronic Pain Management Class</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Live Class',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Completed',
                                        ),
                                        array(
                                            'label' => 'Score:',
                                            'value' => '100%',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '30m',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'status-complete',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );

                                echo createSlat($slat);

                                $slat = array(
                                    'title' => '<a href="evaluation.php">Class Evaluation</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Evaluation',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '30m',
                                        ),
                                        array(
                                            'label' => 'Activity: ',
                                            'value' => 'Optional',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),

                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Start',
                                        'link' => 'evaluation.php',
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
                                                <a href="#" class="btn btn-default js-show-complete">Mark Course Complete</a>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </div> <!-- /tab-pane -->

                        <div class="tab-pane fade" id="overview">
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
                                <h2>Catalog</h2>
                                <p>This course belongs to the following categories in the HLC catalog:</p>
                                <ul>
                                    <li>Subject > Emergency Treatment > Resuscitation</li>
                                    <li>Audience > Critical Care Paramedics</li>
                                </ul>
                            </section>

                        </div><!-- /tab-pane -->

                        <div class="tab-pane fade" id="completion">

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
                    <section class="section section-box" id="sidebar-credit">
                        <h3>Additional Credit</h3>
                        <p>You may be eligible for additional credit for this course. Make sure your certifications and licenses are up to date.</p>
                        <ul class="list-unstyled">
                            <li><a href="disciplines-licenses.php">Manage Licenses</a><li>
                            <li><a href="certifications.php">Manage Certifications</a></li>
                        </ul>
                        <p><a href="#" class="btn btn-sm btn-default">Refresh Credits</a></p>
                    </section>
                    <?php include_sidebar(); ?>
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
                if ( $(this).attr('href') === '#completion') {
                    $('#sidebar-credit').show();
                } else {
                    $('#sidebar-credit').hide();
                }
            });

            HealthStream.utilities.growl({
                type: 'info',
                title: 'Required Activities Completed',
                text: '%3Cp%3EYou%20can%20finish%20the%20remaining%20activities%20or%20mark%20the%20course%20complete%20at%20any%20time.%3C%2Fp%3E%0A%3Cp%3E%3Ca%20href%3D%22%23%22%20class%3D%22js-show-complete%22%3EMark%20Course%20Complete%3C%2Fa%3E%3C%2Fp%3E',
                sticky: true
            });

            $('body').on('click','.js-show-complete',function(e){
                e.preventDefault();
                $('.gritter-close').click();
                HealthStream.utilities.interrupt({
                    type: 'success',
                    title: 'Congratulations!',
                    text: 'You have succesfully completed this course',
                    actions: [
                    {
                        label: 'Return to To Do',
                        url: '/'
                    },
                    {
                        label: 'View Certificate',
                        url: '/completed.php'
                    },
                    {
                        label: 'View Transcript',
                        url: '/completed.php'
                    }
                    ]
                });
            });
        });
    </script>
<?= createSiteEnd(); ?>
