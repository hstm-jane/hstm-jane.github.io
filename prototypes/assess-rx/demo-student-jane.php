<?php

include "includes/helpers/helpers.php";
$patterns['start']['title'] = 'My To-Do List';
$patterns['focus']['title'] = 'My To-Do List';

$patterns['header'] = array(
    'classes' => array('site-header--assessments'),
    'userName' => 'Stephanie P. Juniper',
    'userImage' => '<img src="./content/images/avatar.jpg">',
    'mainNav' => '
        <li class="{active=connections}"><a href="#">Connections</a></li>
        <li class="{active=todo}"><a href="/demo-student.php">To Do</a></li>
        <li class="{active=completed}"><a href="#">Completed</a></li>
        <li class="{active=profile} dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="#">Advanced Practice</a></li>
                <li><a href="#">Certifications</a></li>
                <li><a href="#">Documents</a></li>
                <li><a href="#">Education</a></li>
                <li><a href="#">Goals</a></li>
                <li><a href="#">Job Descriptions</a></li>
                <li><a href="#">Licenses</a></li>
                <li><a href="#">Notes</a></li>
                <li><a href="#">Personal Information</a></li>
            </ul>
        </li>
        <li class="{active=catalog}"><a href="#">Catalog</a></li>
        <li class="{active=calendar}"><a href="#">Event Calendar</a></li>
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'todo',
);

$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Total Tasks:',
        'value' => '6',
    ),
    array(
        'label' => 'Requiring Attention:',
        'value' => '1',
    ),
);
$patterns['focus']['action'] = array(
    'text' => 'Quick Start <i class="fa fa-chevron-right"></i>',
    'link' => '#',
);
$patterns['focus']['supporting'] = '<img src="/content/images/coaching-quick.png">';

$patterns['footer'] = array(
    'sitemap' => '
        <div class="row">
            <div class="col-sm-3">
                 <section class="section">
                    <ul class="list-unstyled">
                        <li><a href="#">To-Do List</a></li>
                        <li><a href="#">Completions</a></li>
                        <li><a href="#">Connections</a></li>
                    </ul>
                </section>
            </div>
            <div class="col-sm-3">
                <section class="section">
                    <ul class="list-unstyled">
                        <li><a href="#">Certifications</a></li>
                        <li><a href="#">Licenses</a></li>
                        <li><a href="#">Resuscitation Cards</a></li>
                    </ul>
                </section>
            </div>
            <div class="col-sm-3">
                <section class="section">
                    <ul class="list-unstyled">
                        <li><a href="#">Catalog</a></li>
                        <li><a href="#">Upcoming Events</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </section>
            </div>
            <div class="col-sm-3">
                <section class="section">
                    <ul class="list-unstyled">
                        <li><a href="#">Account Settings</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </section>
            </div>
        </div>',
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
                    <div class="filter-mini" data-target="tasks">
                        <div class="filter-row">
                            <div class="filter-cell">
                                <div class="filter-toggle">
                                    Show: <i class="fa fa-fw fa-caret-down"></i>
                                </div>
                            </div>
                            <div class="filter-cell">
                                <ul>
                                    <li><label class="checkbox"><input type="checkbox" value='all' checked> All Tasks</label></li><li><label class="checkbox"><input type="checkbox" value="1"> Assigned Learning</label></li><li><label class="checkbox"><input type="checkbox" value="2"> Live Classes</label></li><li><label class="checkbox"><input type="checkbox" value="3"> Elective Learning</label></li><li><label class="checkbox"><input type="checkbox" value="4"> Profile Tasks</label></li><li><label class="checkbox"><input type="checkbox" value="5"> Assessments</label></li><li><label class="checkbox"><input type="checkbox" value="6"> Hidden Option with No Matches</label></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <section class="section" id="tasks">


                        <?php

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('5')),
                                ),
                                'title' => '<a href="/demo-student-assessment-emergency-knowledge.php" >RN: Emergency Assessment</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Clinical Development Assessment',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+60days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Assigned',
                                    ),
                                ),
                                 'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Start',
                                    'link' => '/demo-student-assessment-emergency-knowledge.php',

                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('5')),
                                ),
                                'title' => '<a href="/demo-student-assessment-pharmacology-knowledge.php">Pharmacology: RN Assessment</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Clinical Development Assessment',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+60days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Assigned',
                                    ),
                                ),
                                 'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Start',
                                    'link' => '/demo-student-assessment-pharmacology-knowledge.php',

                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('5')),
                                ),
                                'title' => '<a href="/demo-student-assessment-cardiac-rhythm-identification-knowledge.php">Cardiac Rhythm Identification Assessment</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Clinical Development Assessment',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+60days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Assigned',
                                    ),
                                ),
                                 'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Start',
                                    'link' => '/demo-student-assessment-cardiac-rhythm-identification-knowledge.php',

                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('5')),
                                ),
                                'title' => '<a href="/demo-student-assessment-emergency-skills.php">RN: Emergency Skills Self-Assessment</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Clinical Development Assessment',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+60days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Assigned',
                                    ),
                                ),
                                 'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Start',
                                    'link' => '/demo-student-assessment-emergency-skills.php',

                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('5')),
                                ),
                                'title' => '<a href="/demo-student-assessment-behavioral.php">RN: Behavioral Assessment</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Clinical Development Assessment',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+60days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Assigned',
                                    ),
                                ),
                                 'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Start',
                                    'link' => '/demo-student-assessment-behavioral.php',

                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('5')),
                                ),
                                'title' => '<a href="/demo-student-assessment-acute-care-judgement.php">RN: Acute Care Judgment Assessment</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Clinical Development Assessment',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+60days')),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Assigned',
                                    ),
                                ),
                                 'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Start',
                                    'link' => '/demo-student-assessment-acute-care-judgement.php',

                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                    array('data-filter-category',array('1')),
                                ),
                                'title' => '<a href="#">A Look at Eating Disorders</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Course',
                                    ),
                                    array(
                                        'label' => 'Due:',
                                        'value' => 'Elective',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Assigned',
                                    ),
                                ),
                                 'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Start',
                                    'link' => '#',

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
                            <li><a href="#">Scheduled Downtime 4/19 at 11PM</a></li>
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
<!--     <script src="/scripts/healthstream.tours/plugin/bootstrap-tour.js"></script>
    <script src="/scripts/healthstream.tours/localization/localization-eng-tour.js"></script>
    <script src="/scripts/healthstream.tours/tours/to-do-tour.js"></script> -->
    <script>
        $(function(){
            // HealthStream.utilities.applauncher();
            // helper to keep the task count correct
            $('.focus-pageheader .meta-value:eq(0)').text($('#tasks .slat').length);
            $('.focus-pageheader .meta-value:eq(1)').text($('#tasks .slat-attention').length);
              <?php if ( isset($_GET['rater'])) { ?>
            $('input[type="checkbox"]').click(function() {
                if($(this).val() == '5' || $(this).val() == 'all') {
                    $('.alert-nudge').show();
                }
                else {
                    $('.alert-nudge').hide();
                }
            });
            <?php } ?>
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
    <script>
        $(function(){
            $('.branding a').click(function(e){
                e.preventDefault();
                window.location.href="/demo-start.php";
              });
        });
    </script>

<?= createSiteEnd(); ?>