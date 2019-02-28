<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'Understanding Chronic Pain Management';
$patterns['focus']['title'] = 'Understanding Chronic Pain Management';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-equivalent',
    'type' => 'Equivalent',
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Status:',
        'value' => 'Not Enrolled',
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
                                <h2>Choose a Course</h2>
                                <?php

                                $slat = array(
                                     'attributes' => array(
                                         array('class',array('slat')),
                                     ),
                                    'title' => 'Understanding Chronic Pain Management Course 1',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single-success',
                                        'content' => 'Enroll <i class="fa fa-plus visible-xs"></i>',
                                        'link' => 'equivalent-enrolled-course.php',
                                    )
                                );
                                echo createSlat($slat);

                                $slat['title'] = 'Understanding Chronic Pain Management Course 2';
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
                    </div><!-- /tab-content -->
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
<?php if ( $action === 'unenrolled' ) { ?>
<script>
    $(function(){
        HealthStream.utilities.growl({
            title: 'You unenrolled from the course',
            text: '%3Cdl%20class%3D%22gritter-class%22%3E%0A%3Cdt%3EUnderstanding%20Chronic%20Pain%20Management%20Course%3C%2Fdt%3E%0A%3C%2Fdl%3E'
        });
    });
</script>
<?php } ?>
<?= createSiteEnd(); ?>
