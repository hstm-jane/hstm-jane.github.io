<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My To-Do List';
$patterns['header'] = array(
    'classes' => array('site-header--assessments'),
    'userName' => 'Davy L. Crane',
    'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/holdenweb/128.jpg">',
    'mainNav' => '
        <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
        <li class="{active=todo}"><a href="/todo-rater.php">To Do</a></li>
        <li class="{active=completed}"><a href="/completed.php">Completed</a></li>
        <li class="{active=profile} dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="/advanced-practice.php">Advanced Practice</a></li>
                <li><a href="/certifications.php">Certifications</a></li>
                <li><a href="/documents.php">Documents</a></li>
                <li><a href="/education.php">Education</a></li>
                <li><a href="/goals.php">Goals</a></li>
                <li><a href="/job-descriptions.php">Job Descriptions</a></li>
                <li><a href="/disciplines-licenses.php">Licenses</a></li>
                <li><a href="/notes.php">Notes</a></li>
                <li><a href="/personal-information.php">Personal Information</a></li>
            </ul>
        </li>
        <li class="{active=raters}"><a href="/assessment-overview.php">Raters <span class="badge">241</span></a></li>
        <li class="{active=catalog}"><a href="/catalog-unified-main.php">Catalog</a></li>
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'raters',
);
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

                        $items = array(
                            array('ED Anticipatory Rounding',4,'Feb 18, 2016'),
                            array('ED EMT CPI Class',2,'Feb 20, 2016'),
                            array('Anticipatory Rounding',8,'Apr 1, 2016'),
                            array('Bladder Scan',6,'Apr 1, 2016'),
                            array('Blood Specimen Collection',6,'Apr 1, 2016'),
                            array('Charting',5, 'Apr 29, 2016'),
                            array('Critical Thinking',5,'Apr 29, 2016'),
                            array('Delegation',5,'Apr 29, 2016'),
                            array('EKG',6,'Apr 29, 2016'),
                            array('Fluid Warmer Level 1',5,'Apr 29, 2016'),
                            array('General Orientation',6,'Apr 29, 2016'),
                            array('Hand off Communication',5,'Apr 29, 2016'),
                            array('IV Therapy (RN)',5,'Apr 29, 2016'),
                            array('Lifepak 15 and 20',5,'Apr 29, 2016'),
                            array('Prioritizing',5,'Apr 29, 2016'),
                            array('Resourcing',5,'Apr 29, 2016'),
                            array('Restraint Management',6,'Apr 29, 2016'),
                            array('Spinal Precautions and Log Rolling',2,'Apr 29, 2016'),
                            array('T-Pod',4,'Apr 29, 2016'),
                            array('Care of the Cardiac Patient',8,'Apr 29, 2016'),
                            array('Care of the Eye, Ear, Nose and Throat Patient',4,'Apr 29, 2016'),
                            array('Care of the Medical Patient',4,'Apr 29, 2016'),
                            array('Care of the Neuro Patient',4,'Apr 29, 2016'),
                            array('Care of the OB/GYN Patient',4,'Apr 29, 2016'),
                            array('Care of the Pediatric Patient',4,'Apr 29, 2016'),
                            array('Care of the Respiratory Patient',4,'Apr 29, 2016'),
                            array('Care of the Surgical Patient',4,'Apr 29, 2016'),
                            array('Care of the Trauma Patient',4,'Apr 29, 2016'),
                            array('ED Arctic Sun',5,'Apr 29, 2016'),
                            array('ED Cautery',6,'Apr 29, 2016'),
                            array('ED Crutch and Walker Fitting/Teaching',4,'Apr 29, 2016'),
                            array('ED Dash Monitor',6,'Apr 29, 2016'),
                            array('ED RN Triage',4,'Apr 29, 2016'),
                            array('Lift Equipment: HoverJack',5,'Apr 29, 2016'),
                            array('Lift Equipment: HoverMatt',5,'Apr 29, 2016'),
                            array('Lift Equipment: Maxi Lite',5,'Apr 29, 2016'),
                            array('Lift Equipment: Maxi Tube (Blue or Orange)',5,'Apr 29, 2016'),
                            array('Lift Equipment: SARA (Standing And Raising Aid) 3000',5,'Apr 29, 2016'),
                            array('Lab: I-Stat Competency - Semi Annual',2,'Apr 30, 2016'),
                            array('Adult Moderate Sedation - Initial',7,'May 1, 2016'),
                            array('Lab: I-Stat Competency and Training Checklist - Initial',2,'May 26, 2016'),
                            array('Pediatric Moderate Sedation - Initial',12,'Jun 4, 2016'),
                            array('Blood Administration',4,'Jun 5, 2016'),
                            array('Lift Equipment: Maxi Slide Sheets',4,'Jun 19, 2016'),
                            array('ED EMT Care of Specific Patient Types - Jones, John D.',1,'Jul 17, 2016'),
                            array('ED EMT Epic Documentation - Jones, John D.',1,'Jul 17, 2016'),
                            array('ED EMT Gem Ring Cutter - Jones, John D.',1,'Jul 17, 2016'),
                            array('ED EMT IV Therapy - Jones, John D.',1,'Jul 17, 2016'),
                            array('ED EMT Miscellaneous ED Operations - Jones, John D.',1,'Jul 17, 2016'),
                            array('ED EMT Patient Transfers - Jones, John D.',1,'Jul 17, 2016'),
                            array('ED EMT Room Set-ups - Jones, John D.',1,'Jul 17, 2016'),
                            array('ED EMT Soft Goods - Jones, John D.',1,'Jul 17, 2016'),
                            array('ED EMT Splinting - Jones, John D.',1,'Jul 17, 2016'),
                            array('ED EMT Worker Wellness/BAT Testing - Jones, John D.',1,'Jul 17, 2016'),
                            array('ED EMT Wound Cleaning and Dressing - Jones, John D.',1,'Jul 17, 2016'),
                            array('Retired ED EMT Specimen Collection - Jones, John D.',1,'Jul 17, 2016'),
                            array('Urinary Catheterization',6,'Jul 17, 2016'),
                        );

                        foreach ($items as $item) {
                            if ( $item[1] === 1 ) {
                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
                                        array('data-filter-category',array('5')),
                                    ),
                                    'title' => '<a href="assessment-competency-employee-summary.php">' . $item[0] . '</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Employee Assessment',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        ),
                                        array(
                                            'label' => 'Due: ',
                                            'value' => '<span class="meta-callout-label">Due:</span>' . $item[2],
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        ),
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Start',
                                        'link' => 'assessment-competency-employee-summary.php',
                                    )
                                );
                            } else {
                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
                                        array('data-filter-category',array('5')),
                                    ),
                                    'title' => '<a href="assessment-overview.php">' . $item[0] . '</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Employee Assessment',
                                        ),
                                        array(
                                            'label' => 'Assessments:',
                                            'value' => $item[1],
                                        ),
                                        array(
                                            'label' => 'Due: ',
                                            'value' => '<span class="meta-callout-label">Due:</span>' . $item[2] .' <a href="assessment-overview.php">First of '.$item[1].' Assessments</a>',
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
                            }
                            if ( strtotime($item[2]) < strtotime('now') ) {
                                array_push($slat['attributes'][0][1], 'slat-attention');
                            }
                            echo createSlat($slat);
                        }

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
                            'title' => '<a href="course-elective.php">Advanced Management Skills</a>',
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