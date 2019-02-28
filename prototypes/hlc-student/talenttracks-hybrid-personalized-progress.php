<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'TalentTracks';
$patterns['header']['mainNavActive'] = 'catalog';
$patterns['focus']['title'] = 'TalentTracks';
$patterns['focus']['type'] = 'search';
$patterns['focus']['search'] = array(
    'placeholder' => 'Search',
    'url' => 'talenttracks-landing.php',
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<style>
    .layout-talenttracks .talenttracks__survey.active {
        background-color: #ccc;
        color: #000;
    }

    .layout-talenttracks .talenttracks__survey.active .date {
        font-size: 11px;
        font-style: italic;
        font-weight: 400;
        margin-bottom: 3px;
        color: #333;
    }
    .layout-talenttracks .talenttracks__survey.active p {
        font-weight: normal;
        font-size: 12px;
        margin: 0;
    }
    .layout-talenttracks .talenttracks__message.active {
        background-image: url('/content/images/talenttracks-message-active.png');
    }

    .talenttracks__header.talenttracks__header--small .talenttracks__survey.active {
        min-height: none;
        height: auto;
        padding: 10px;
    }

    .talenttracks__header.talenttracks__header--small .talenttracks__survey.active .btn {
        margin-top: 10px;
    }

</style>

<div class="layout layout-search layout-talenttracks">
    <div class="container">

        <section class="section section-main section-box">

            <div class="talenttracks__header talenttracks__header--large">
                <div class="talenttracks__message active">Take a survey so we can customize your courses to your experience level</div>
                <div class="talenttracks__survey active">
                    <div class="talenttracks__survey-title">Emerging Leader</div>
                    <div class="date">Survey Completed: 5/13/2016</div>
                    <p>The content you are receiving is targeted for emerging leaders. Lorem ipsum dolorem infinitum ...</p>
                </div>
                <div class="talenttracks__survey">
                    <div class="talenttracks__survey-title">New Leader Survey</div>
                    <div class="talenttracks__survey-experience">1-3 years</div>
                    <a href="talenttracks-survey.php" class="btn btn-sm btn-success">Take Survey <i class="fa fa-chevron-right"></i></a>
                </div>
                <div class="talenttracks__survey talenttracks__survey--last">
                    <div class="talenttracks__survey-title">Experienced Leader Survey</div>
                    <div class="talenttracks__survey-experience">3+ years</div>
                    <a href="talenttracks-survey.php" class="btn btn-sm btn-success">Take Survey <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>

            <div class="talenttracks__header talenttracks__header--small">
                <div class="talenttracks__survey active">
                    <div class="talenttracks__survey-title">Emerging Leader</div>
                    <div class="date">Survey Completed: 5/13/2016</div>
                    <p>The content you are receiving is targeted for emerging leaders. Lorem ipsum dolorem infinitum ...</p>

                    <div class="btn-group">
                        <button type="button" class="btn btn-success btn-block dropdown-toggle" data-toggle="dropdown">
                            Take Another Survey <i class="fa fa-caret-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="talenttracks-survey.php">New Leader (1-3 Years)</a></li>
                            <li><a href="talenttracks-survey.php">Experienced Leader (3+ Years)</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm">
                    <section class="section section-refinement-options" data-equalize="layout-columns">
                        <header>
                            <h2>Refine</h2>
                        </header>
                        <section class="section section-refinement-group">
                            <nav class="catalog-categories">
                                <h3>Categories</h3>
                                <ul>
                                    <li>
                                        <a href="#" class="active">
                                            <div class="cc-col">Accountability</div>
                                            <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                        </a>
                                    </li>
                                    <?php
                                    $categories = array(
                                        'Budgeting and Finance',
                                        'Building Relationships',
                                        'Change Management',
                                        'Coaching',
                                        'Communication',
                                        'Conflict Management',
                                        'Dealing with Difficult People',
                                        'Influence',
                                        'Innovation',
                                        'Leadership',
                                        'Negotiation',
                                        'Performance Management',
                                        'Problem Solving',
                                        'Process Improvement/Quality',
                                        'Resilience',
                                        'Self-Development',
                                        'Service Excellence',
                                        'Staffing',
                                        'Teamwork',
                                        'Vision',
                                        'Workplace Diversity',
                                    );

                                    foreach($categories as $category) {
                                    ?>
                                    <li>
                                        <a href="#">
                                            <div class="cc-col"><?= $category ?></div>
                                            <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>

                            </nav>
                        </section>

                    </section>
                </div>
                <div class="col-md-9">
                    <section class="section section-results" data-equalize="layout-columns">
                        <section class="section section-results-header">
                            <div class="row">
                                <div class="col-md-9">
                                    <h2>Accountability <small>Showing 1-5 of 5</small></h2>
                                    <div class="section section-refinement-applied">
                                        <h3>Refinements</h3>
                                        <div class="tag-group">
                                            <a href="#" class="tag">Track: Emerging Leader<i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 hidden-xs hidden-sm">
                                    <div class="section-results-header-sort">
                                        <div class="dropdown">
                                            <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: A-Z <i class="fa fa-sort"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="active"><a href="#">A-Z</a></li>
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

                        $content = '
                            <section class="section">
                                <h5>Description</h5>
                                <p>This course helps managers grow their leadership skills to give structure to their teams, measure performance, and realign resources to achieve goals.</p>
                            </section>
                        ';

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => '<a href="#">90-Day Action Plans</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'Completed',
                                )
                            ),
                            'action' => array(
                                'type' => 'status-complete',
                            ),
                            'nested' => array(
                                'hide' => array($content),
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => '<a href="#">Business Ethics - What Employees Need to Know</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'Completed',
                                )
                            ),
                            'action' => array(
                                'type' => 'status-complete',
                            ),
                            'nested' => array(
                                'hide' => array($content),
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => '<a href="#">Goal Setting in Health Care - Part 1</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'In Progress',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => '<i class="fa fa-chevron-right visible-xs"></i> Resume',
                                'link' => '#',
                            ),
                            'nested' => array(
                                'hide' => array($content),
                            )
                        );
                        echo createSlat($slat);

                        $courses = array(
                            'How to Prevent and Respond to Bullying at Work',
                            'Non-Negotiables',
                        );

// Developing the Capacity to Think Strategically
// Developing the Strategic Thinking Skill of Seeing the Big Picture
// Diversity on the Job: The Importance of Diversity and the Changing Workplace
// Effective Communication for Employees
// Effective Decision-Making Strategies for Employees
// Effective Meetings for Employees
// Embracing Organizational Change
// Generating Creative and Innovative Ideas: Enhancing Your Creativity
// Generating Creative and Innovative Ideas: Verifying and Building on Ideas
// Generational Diversity
// Getting Results without Authority: Persuasive Communication
// Handling Customer Complaints


                        foreach( $courses as $course ) {

                            $content = '
                                <section class="section">
                                    <h5>Description</h5>
                                    <p>This course helps managers grow their leadership skills to give structure to their teams, measure performance, and realign resources to achieve goals.</p>
                                </section>
                            ';

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat')),
                                ),
                                'title' => '<a href="#">' . $course . '</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Course',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Not Enrolled',
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => '<i class="fa fa-chevron-right visible-xs"></i> Enroll',
                                    'link' => '#',
                                ),
                                'nested' => array(
                                    'hide' => array($content),
                                )
                            );
                            echo createSlat($slat);

                        }

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

<!-- Modal -->
<div id="modal-refine" class="modal fade" tabindex="-1">
    <div class="modal-dialog layout-talenttracks">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <header>
                        <h2>Refine</h2>
                    </header>
                    <section class="section section-refinement-group">
                        <nav class="catalog-categories">
                            <h3>Categories</h3>
                            <ul>
                                <li>
                                    <a href="#" class="active">
                                        <div class="cc-col">Accountability</div>
                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                    </a>
                                </li>
                                <?php foreach($categories as $category) { ?>
                                <li>
                                    <a href="#">
                                        <div class="cc-col"><?= $category ?></div>
                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>

                        </nav>
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