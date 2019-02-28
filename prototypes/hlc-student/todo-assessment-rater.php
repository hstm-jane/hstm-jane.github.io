<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My To-Do List';
$patterns['focus']['title'] = 'My To-Do List';
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
    'text' => 'Quick Start <i class="fa fa-chevron-right"></i>',
    'link' => 'course.php',
);
$patterns['focus']['supporting'] = '<img src="/content/images/coaching-quick.png">';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-main section-box" data-equalize="layout-columns">
                    <div class="filter-mini" data-target="tasks">
                        <div class="filter-row">
                            <div class="filter-cell">
                                <div class="filter-toggle">
                                    Show: <i class="fa fa-fw fa-caret-down"></i>
                                </div>
                            </div>
                            <div class="filter-cell">
                                <ul>
                                    <li><label class="checkbox"><input type="checkbox" value='all' checked> All Tasks</label></li><li><label class="checkbox"><input type="checkbox" value="1"> Assignments</label></li><li><label class="checkbox"><input type="checkbox" value="2"> Live Classes</label></li><li><label class="checkbox"><input type="checkbox" value="3"> Electives</label></li><li><label class="checkbox"><input type="checkbox" value="4"> Profile Tasks</label></li><li><label class="checkbox"><input type="checkbox" value="5"> Assessments</label></li><li><label class="checkbox"><input type="checkbox" value="6"> Hidden Option with No Matches</label></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <section class="section" id="tasks">
                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-attention','slat-spaced','slat-callout')),
                                array('data-filter-category',array('5')),
                            ),
                            'title' => '<a href="assessment-competency-rater-signoff-remote.php">Delegation - Jones, John D.</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Employee Assessment',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'In Progress',
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span> Apr 29, 2016',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Sign Off',
                                'link' => 'assessment-competency-rater-signoff-remote.php',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-spaced','slat-callout')),
                                array('data-filter-category',array('5')),
                            ),
                            'title' => '<a href="assessment-overview.php">Care of the Surgical Patient</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Employee Assessment',
                                ),
                                array(
                                    'label' => 'Assessments:',
                                    'value' => '4',
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span> Jun 19, 2016 <a href="#">First of 4 Assessments</a>',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Manage',
                                'link' => 'assessment-overview.php',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-spaced','slat-callout')),
                                array('data-filter-category',array('5')),
                            ),
                            'title' => '<a href="assessment-overview.php">Critical Thinking</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Employee Assessment',
                                ),
                                array(
                                    'label' => 'Assessments:',
                                    'value' => '3',
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span> Jun 19, 2016 <a href="#">First of 3 Assessments</a>',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Manage',
                                'link' => 'assessment-overview.php',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-spaced','slat-callout')),
                                array('data-filter-category',array('5')),
                            ),
                            'title' => '<a href="assessment-competency-rater-summary.php">Retired ED EMT Specimen Collection - Jones, John D.</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Employee Assessment',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'In Progress',
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span> Jun 19, 2016',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Resume',
                                'link' => 'assessment-competency-rater-summary.php',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-spaced','slat-callout')),
                                array('data-filter-category',array('1')),
                            ),
                            'title' => '<a href="course.php">Understanding Chronic Pain Management</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'Assigned',
                                ),
                                array(
                                    'label' => 'Complete:',
                                    'value' => '0 of 3',
                                    'attributes' => array(
                                        array('class','meta-hide-xs'),
                                    )
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span>Aug 25, 2016',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Start',
                                'link' => 'course.php',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-spaced','slat-callout')),
                                array('data-filter-category',array('3')),
                            ),
                            'title' => '<a href="course-elective.php">Organizational Orientation</a>',
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
                                    'attributes' => array(
                                        array('class','meta-hide-xs'),
                                    )
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
                                )
                            )
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
    <script src="/scripts/healthstream.tours/plugin/bootstrap-tour.js"></script>
    <script src="/scripts/healthstream.tours/localization/localization-eng-tour.js"></script>
    <script src="/scripts/healthstream.tours/tours/to-do-tour.js"></script>
    <script>
        $(function(){
            // prototype only: update focus bar meta with slat counts
            $('.focus .meta-value:eq(0)').text($('.slat').length);

            if ( $('.slat-attention').length === 0 ) {
                $('.focus .meta-value:eq(1)').closest('li').remove();
            } else {
                $('.focus .meta-value:eq(1)').text($('.slat-attention').length);
            }
        });
    </script>
<?php if (!empty($_GET['growlTitle']) && !empty($_GET['growlText'])) { ?>
    <script>
    $(function(){
        // Show Growl on Load
        var growl = {};
        growl.title = "<?= $_GET['growlTitle']; ?>";
        growl.text = "<?= $_GET['growlText']; ?>";
        <?php echo (!empty($_GET['growlType']))?'growl.type = "'.$_GET['growlType'].'";'."\n":''; ?>
        <?php echo (!empty($_GET['growlSticky']))?'growl.sticky = '.$_GET['growlSticky'].';'."\n":''; ?>

        setTimeout(function(){
            HealthStream.utilities.growl(growl);
        },500);
    });
    </script>
<?php } ?>
<?= createSiteEnd(); ?>