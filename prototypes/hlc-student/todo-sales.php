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
    'link' => '#',
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
                            'title' => '<a href="/assessment.php?assessment=competency-1&state=4">Competency Appraisal</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Self Assessment',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'In Progress',
                                ),
                                array(
                                    'label' => 'State:',
                                    'value' => 'Review',
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Sign Off',
                                'link' => '/assessment.php?assessment=competency-1&state=4',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-attention','slat-spaced','slat-callout')),
                                array('data-filter-category',array('5')),
                            ),
                            'title' => '<a href="/assessment.php?assessment=performance-1&state=4">Performance Appraisal</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Self Assessment',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'In Progress',
                                ),
                                array(
                                    'label' => 'State:',
                                    'value' => 'Review',
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Sign Off',
                                'link' => '/assessment.php?assessment=performance-1&state=4',
                            )
                        );
                        echo createSlat($slat);


                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-spaced','slat-callout')),
                                array('data-filter-category',array('1')),
                            ),
                            'title' => '<a href="curriculum.php">Pain Management Curriculum</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Curriculum',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'In Progress',
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span>' . date('M j, Y',strtotime('+30days')),
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Resume',
                                'link' => 'curriculum.php',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-spaced','slat-callout')),
                                array('data-filter-category',array('1')),
                            ),
                            'title' => '<a href="course.php">Chronic Pain Management</a>',
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
                                    'value' => '<span class="meta-callout-label">Due:</span>' . date('M j, Y',strtotime('+30days')),
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
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
                                array('data-filter-category',array('5')),
                            ),
                            'title' => '<a href="/assessment.php?assessment=competency-1&progress=1">Competency Appraisal</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Self Assessment',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'Not Yet Started',
                                ),
                                array(
                                    'label' => 'State:',
                                    'value' => 'Evaluation',
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span>' . date('M j, Y',strtotime('+30days')),
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Start',
                                'link' => '/assessment.php?assessment=competency-1',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-spaced','slat-callout')),
                                array('data-filter-category',array('5')),
                            ),
                            'title' => '<a href="assessment.php?assessment=performance-1&progress=1">Performance Appraisal</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Self Assessment',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'Not Yet Started',
                                ),
                                array(
                                    'label' => 'State:',
                                    'value' => 'Evaluation',
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span>' . date('M j, Y',strtotime('+30days')),
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Start',
                                'link' => 'assessment.php?assessment=performance-1',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-spaced','slat-callout')),
                                array('data-filter-category',array('5')),
                            ),
                            'title' => '<a href="/assessment.php?assessment=competency-1&progress=1">Competency Appraisal</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Self Assessment',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'In Progress',
                                ),
                                array(
                                    'label' => 'State:',
                                    'value' => 'Evaluation',
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span>' . date('M j, Y',strtotime('+30days')),
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Resume',
                                'link' => '/assessment.php?assessment=competency-1&progress=1',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-spaced','slat-callout')),
                                array('data-filter-category',array('5')),
                            ),
                            'title' => '<a href="assessment.php?assessment=performance-1&progress=1">Performance Appraisal</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Self Assessment',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'In Progress',
                                ),
                                array(
                                    'label' => 'State:',
                                    'value' => 'Evaluation',
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => '<span class="meta-callout-label">Due:</span>' . date('M j, Y',strtotime('+30days')),
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Resume',
                                'link' => 'assessment.php?assessment=performance-1&progress=1',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-spaced','slat-callout')),
                                array('data-filter-category',array('3')),
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
                        <h3>Sales Demo</h3>
                        <ul class="list-links">
                            <li><a href="#modal-sales" data-toggle="modal">Assessment Workflows</a></li>
                        </ul>
                    </section>
                    <?php include_sidebar() ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->

<!-- modal -->
<div id="modal-sales" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Assessment Workflow</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <div class="form-group">
                        <label class="control-label">Choose an Assessment</label>
                        <select class="form-control">
                            <option value="competency-1" selected="">Competency</option>
                            <option value="performance-1">Performance</option>
                        </select>
                    </div>
                    <label class="control-label">And then choose how you'd like to view it...</label>
                </section>
                <section class="section">
                    <h4 class="page-header">Self Assessment <small>View as Employee</small></h4>
                    <ul>
                        <li><a href="assessment.php?user=employee&progress=0">Self Assessment, Evaluation, No Progress</a></li>
                        <li><a href="assessment.php?user=employee&progress=1">Self Assessment, Evaluation, Some Progress</a></li>
                        <li><a href="assessment.php?user=employee&progress=2">Self Assessment, Evaluation, Ready to Submit</a></li>
                        <li><a href="assessment.php?user=employee&state=4">Self Assessment, Review, Remote Sign off</a></li>
                    </ul>
                </section>
                <section class="section">
                    <h4 class="page-header">Peer Assessment <small>View as Peer</small></h4>
                    <ul>
                        <li><a href="assessment.php?user=peer-1&progress=0">Peer Assessment, Evaluation, No Progress</a></li>
                        <li><a href="assessment.php?user=peer-1&progress=2">Peer Assessment, Evaluation, Ready to Submit</a></li>
                    </ul>
                </section>
                <section class="section">
                    <h4 class="page-header">Employee Assessment <small>View as Rater</small></h4>
                    <ul>
                        <li><a href="assessment.php?user=rater&progress=2">Employee Assessment, Evaluation, No Progress</a></li>
                        <li><a href="assessment.php?user=rater&progress=3">Employee Assessment, Evaluation, Some Progress</a></li>
                        <li><a href="assessment.php?user=rater&progress=4">Employee Assessment, Evaluation, Ready to Submit to Review</a></li>
                        <li><a href="assessment.php?user=rater&state=1">Employee Assessment, Review, Ready to Submit to Sign Off</a></li>
                        <li><a href="assessment.php?user=rater&state=3">Employee Assessment, Review, Sign Off</a></li>
                        <li><a href="assessment.php?user=rater&state=4">Employee Assessment, Review, Sign Off Remotely</a></li>
                    </ul>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->



<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
    <script src="/scripts/healthstream.tours/plugin/bootstrap-tour.js"></script>
    <script src="/scripts/healthstream.tours/localization/localization-eng-tour.js"></script>
    <script src="/scripts/healthstream.tours/tours/to-do-tour.js"></script>

    <script>
    $(function(){

        $('#modal-sales').on('click','a',function(e){
            e.preventDefault();
            document.location.href = $(this).attr('href') + '&assessment=' + $('#modal-sales select').val();
        });

        $('.focus-pageheader .meta-value:eq(0)').text($('#tasks .slat').length);
        $('.focus-pageheader .meta-value:eq(1)').text($('#tasks .slat-attention').length);

        <?php if (!empty($_GET['growlTitle']) && !empty($_GET['growlText'])) { ?>

        // Show Growl on Load
        var growl = {};
        growl.title = "<?= $_GET['growlTitle']; ?>";
        growl.text = "<?= $_GET['growlText']; ?>";
        <?php echo (!empty($_GET['growlType']))?'growl.type = "'.$_GET['growlType'].'";'."\n":''; ?>
        <?php echo (!empty($_GET['growlSticky']))?'growl.sticky = '.$_GET['growlSticky'].';'."\n":''; ?>

        setTimeout(function(){
            HealthStream.utilities.growl(growl);
        },500);

        <?php } ?>

    });
    </script>


<?= createSiteEnd(); ?>