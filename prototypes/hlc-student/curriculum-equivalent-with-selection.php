<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Understanding Chronic Pain Management';
$patterns['focus']['title'] = 'Understanding Chronic Pain Management';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-equivalent',
    'type' => 'Equivalent',
);
$patterns['focus']['meta_primary'] = array(
    array(
        'label' => 'From Curriculum:',
        'value' => '<a href="curriculum.php" class="meta-value">Pain Management Curriculum</a>',
    ),
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Status:',
        'value' => 'Enrolled',
    ),
);

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
                                    'id' => 'courses',
                                    'label' => 'Courses',
                                ),
                                array(
                                    'id' => 'overview',
                                    'label' => 'Overview',
                                ),
                            ),
                        );
                        echo createFocusNav($focusNav);

                    ?>

                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="courses">

                            <section class="section">
                                <h2>About this Equivalent</h2>
                                <p>This equivalent is a part of the curriculum: <a href="curriculum.php">Pain Management Curriculum</a></p>
                            </section>

                            <section class="section">
                                <h2>Currently Enrolled</h2>
                                <?php

                                $slat = array(
                                    'title' => 'Understanding Chronic Pain Management Course 1',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'In Progress',
                                        ),
                                        array(
                                            'label' => 'Complete:',
                                            'value' => '1 of 3',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-danger" href="#" id="modal-unenroll-course">Un-enroll<i class="fa fa-times visible-xs"></i></a></div>',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );

                                echo createSlat($slat);

                                ?>
                            </section>

                            <section class="section">
                                <h2>Alternate Courses <small>Other courses that fullfill the requirement</small></h2>
                                <?php

                                $slat = array(
                                    'title' => 'Understanding Chronic Pain Management Course 2',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );

                                echo createSlat($slat);

                                $slat['title'] = 'Understanding Chronic Pain Management Course 3';
                                echo createSlat($slat);

                                ?>
                            </section>

                        </div><!-- /tab-pane -->

                        <div class="tab-pane fade" id="overview">
                            <section class="section">
                                This is the equivalent description. The admin has a text area they can enter content, it is not a wysiwyg. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </section>
                        </div><!-- /tab-pane -->
                    </div><!-- /tab- content -->
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php include_sidebar(); ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div> <!-- /layout -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $('#modal-unenroll-course').click(function(e){
            e.preventDefault();
            HealthStream.utilities.interrupt({
                type: 'warning',
                title: 'You are about to un-enroll from a course',
                text: 'You will still need to complete a course to fullfill this equivalent.',
                actions: [
                    {
                        type: 'danger',
                        label: 'Yes, un-enroll from this course',
                        url: 'curriculum-equivalent.php?action=unenrolled',
                    },
                    {
                        label: 'Cancel'
                    }
                ]
            });
        });
    });
</script>
<?= createSiteEnd(); ?>

