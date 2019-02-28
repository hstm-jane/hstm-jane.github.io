<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'TalentTracks';
$patterns['header']['mainNavActive'] = 'catalog';
$patterns['focus']['title'] = 'TalentTracks';
$patterns['focus']['type'] = 'search';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>


<div class="focus focus-pageheader focus-talenttracks">
    <div class="fph-separator"></div>
    <div class="fph-table">
        <div class="fph-row">
            <div class="fph-cell fph-cell-search-label">
                <h1>TalentTracks</h1>
            </div>
            <div class="fph-cell fph-cell-search-input">
                <form class="primary">
                    <div class="input-group">
                        <input type="text" class="form-control input-lg" placeholder="Search TalentTracks">
                        <span class="input-group-btn">
                            <a href="#" class="btn btn-focus btn-lg" type="button"><i class="fa fa-search fa-lg"></i></a>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="layout layout-search layout-talenttracks">
    <div class="container">

        <section class="section section-main section-box">

            <div class="talenttracks__header talenttracks__header--large">
                <div class="talenttracks__message">Take a survey so we can customize your courses to your experience level</div>
                <div class="talenttracks__survey">
                    <div class="talenttracks__survey-title">Emerging Leader Survey</div>
                    <div class="talenttracks__survey-experience">0-1 years</div>
                    <a href="talenttracks-survey.php" class="btn btn-sm btn-success">Take Survey <i class="fa fa-chevron-right"></i></a>
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
                <div class="btn-group">
                    <button type="button" class="btn btn-success btn-block dropdown-toggle" data-toggle="dropdown">
                        Customize your results - Choose a Survey <i class="fa fa-caret-down"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="talenttracks-survey.php">Emerging Leader (0-1 Years)</a></li>
                        <li><a href="talenttracks-survey.php">New Leader (1-3 Years)</a></li>
                        <li><a href="talenttracks-survey.php">Experienced Leader (3+ Years)</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm">
                    <section class="section section-refinement-options" data-equalize="layout-columns">
                        <section class="section section-refinement-group section-refinement-group-first">
                            <nav class="catalog-categories">
                                <h3 style="margin-top:0">Recommended Learning</h3>
                                <ul>
                                    <li>
                                        <a href="#" class="active">
                                            <div class="cc-col">Emerging Leader</div>
                                            <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </section>
                        <section class="section section-refinement-group">
                            <nav class="catalog-categories">
                                <h3>Categories</h3>
                                <ul>
                                    <?php
                                    $categories = array(
                                        'Leadership',
                                        'Communication',
                                        'Accountability',
                                        'Coaching',
                                        'Resilience',
                                        'Self-Development',
                                        'Conflict Management',
                                        'Dealing with Difficult People',
                                        'Workplace Diversity',
                                        'Influence',
                                        'Negotiation',
                                        'Building Relationships',
                                        'Teamwork',
                                        'Service Excellence',
                                        'Performance Management',
                                        'Change Management',
                                        'Innovation',
                                        'Vision',
                                        'Problem Solving',
                                        'Process Improvement/Quality',
                                        'Staffing',
                                        'Budgeting and Finance',
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
                                    <h2>Results <small>Showing 1-20 of 55</small></h2>
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

                        $courses = array(
                            'Achieving Goals through Perseverance and Resilience',
                            'Basic Accounting Principles and Framework',
                            'Becoming a Leader: How to Prepare for a Leadership Role',
                            'Bouncing Back with Perseverance and Resilience',
                            'Business Ethics - What Employees Need to Know',
                            'Business Writing for Employees',
                            'Communicating Through Social Media',
                            'Communicating Up - How to Talk to High-Level Management',
                            'Communication between All Ages in the Workplace',
                            'Communication Skills for Employees',
                            'Conflict Resolution and Consensus Building',
                            'Conflict Resolution for Employees',
                            'Critical Thinking for Employees',
                            'Culture and Its Effect on Communication',
                            'Customer Service - How to Promote Excellent Service among Your Staff',
                            'Customer Service Fundamentals: Building Rapport in Customer Relationships',
                            'Customer Service Skills--How We Can All Improve',
                            'Dealing with Workplace Change- What Employees Need to Know',
                            'Decision Making: Tools and Techniques',
                            'Developing Character for Perseverance and Resilience',
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
                                        'label' => 'CE:',
                                        'value' => 'No',
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
                                    array(
                                        'position' => 'right',
                                        'classes' => array('hidden-xs','hidden-sm'),
                                        'html' => '
                                            <div class="btn-group dropup">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 55 <i class="fa fa-caret-up"></i></button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li class="active"><a href="#">20 per page</a></li>
                                                    <li><a href="#">50 per page</a></li>
                                                    <li><a href="#">Show all</a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        ',
                                    ),
                                    array(
                                        'position' => 'right',
                                        'classes' => array('visible-xs','visible-sm'),
                                        'html' => '
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        ',
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <section class="section section-refinement-group section-refinement-group-first">
                        <nav class="catalog-categories">
                            <h3>Recommended Learning</h3>
                            <ul>
                                <li>
                                    <a href="#" class="active">
                                        <div class="cc-col">Emerging Leader</div>
                                        <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </section>
                    <section class="section section-refinement-group">
                        <nav class="catalog-categories">
                            <h3>Categories</h3>
                            <ul>
                                <?php for($i=0;$i<8;$i++) { ?>
                                <li>
                                    <a href="#">
                                        <div class="cc-col">Category</div>
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