<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Performance Appraisal - Rater Workflow';
$patterns['header']['userName'] = 'Davy L. Crane';
$patterns['header']['userImage'] = '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/holdenweb/128.jpg">';
$patterns['focus']['title'] = 'Performance Appraisal - Rater Workflow';
$patterns['focus']['icon'] = '<div class="fph-cell fph-cell-icon"><div class="fph-icon" style="overflow:hidden;"><img src="./content/images/avatar.jpg" width="100%" height="100%"></div><div class="fph-icon-label"><span>Employee Assessment</span></div></div>';

$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Employee:',
        'value' => 'Juniper, Stephanie P.',
    ),
    array(
        'label' => 'Rater:',
        'value' => 'Crane, Davy L.',
    ),
    array(
        'label' => 'State:',
        'value' => 'Evaluation',
    ),
    array(
        'label' => 'Due:',
        'value' => date('M j, Y'),
    ),
);
$patterns['focus']['supporting'] = '
    <figure class="fph-chart-holder">
        <canvas class="fph-chart" data-type="Doughnut" data-segments="[[1,1],[1,1],[1,1],[1,0],[1,0],[1,0],[1,0]]" width="108" height="108"></canvas>
        <figcaption>43%</figcaption>
    </figure>';

$risks_selected = 'Low Risk, New Equipment, Policy Change, Safety, Teamwork, Time Sensitive';
$mov_selected = 'Direct Observation, Documentation Review, Evidence of Daily Work, Evidence Submission, Peer Review';

$hasrating = array(
    array(
        'classes' => array('actor--user','actor--details'),
        'role' => 'Rater',
        'name' => 'Crane, Davy L.',
        'rating' => array(
            'value' => 5,
            'comment' => 'Stephanie is very dependable and a leader on the team. She contributes during meetings and always offers constructive criticism.<br><br>She embodies our company’s vision and I put a lot of trust in her to help mentor our new hires.<br><br>I trust Stephanie and always know where I stand with her.',
            'riskoutcome' => $risks_selected,
            'validation' => $mov_selected,
            'documents' => array('First Document Name', 'Second Document Name'),
            'submitted' => date('M j, Y')
        )
    ),
    array(
        'classes' => array('actor--additional'),
        'role' => 'Employee',
        'name' => 'Juniper, Stephanie P.',
        'rating' => array(
            'value' => 5,
            'comment' => 'Overall, I am very satisfied in the direction of my role as it has changed dramatically over the last year.<br><br>I appreciate my manager asking me for feedback and putting in action plans geared towards team goals.<br><br>A strong working relationship with colleagues makes improvement much easier.',
            'riskoutcome' => $risks_selected,
            'validation' => $mov_selected,
            'documents' => array('First Document Name', 'Second Document Name'),
            'submitted' => date('M j, Y')
        )
    ),
    array(
        'classes' => array('actor--additional'),
        'role' => 'Peer',
        'name' => 'Peer 1',
        'rating' => array(
            'value' => 5,
            'comment' => 'Stephanie is a great communicator and always follows up on her shared tasks.<br><br>Her unique IT background brings a new perspective and I’ve personally learned a lot from her.',
            'riskoutcome' => $risks_selected,
            'validation' => $mov_selected,
            'documents' => array('Document Name'),
            'submitted' => date('M j, Y')
        )
    ),
    array(
        'classes' => array('actor--additional'),
        'role' => 'Peer',
        'name' => 'Peer 2',
        'rating' => array(
            'value' => 4,
            'comment' => 'I look to Stephanie as a role model and mentor. She also very resourceful and can solve almost any problem.',
            'riskoutcome' => $risks_selected,
            'validation' => $mov_selected,
            'documents' => array('Document Name'),
            'submitted' => date('M j, Y')
        )
    ),
    array(
        'classes' => array('actor--additional'),
        'role' => 'Peer',
        'name' => 'Peer 3',
        'rating' => array(
            'value' => 0,
            'comment' => 'I am new and cannot rate this person',
            'riskoutcome' => '',
            'validation' => '',
            'documents' => array(),
            'submitted' => date('M j, Y')
        )
    )
);

$norating = array(
    array(
        'classes' => array('actor--user'),
        'role' => 'Rater',
        'name' => 'Crane, Davy L.',
        'rating' => array()
    ),
    array(
        'classes' => array('actor--additional'),
        'role' => 'Employee',
        'name' => 'Juniper, Stephanie P.',
        'rating' => array(
            'value' => 5,
            'comment' => 'Overall, I am very satisfied in the direction of my role as it has changed dramatically over the last year.<br><br>I appreciate my manager asking me for feedback and putting in action plans geared towards team goals.<br><br>A strong working relationship with colleagues makes improvement much easier.',
            'riskoutcome' => $risks_selected,
            'validation' => $mov_selected,
            'documents' => array('First Document Name', 'Second Document Name'),
            'submitted' => date('M j, Y')
        )
    ),
    array(
        'classes' => array('actor--additional'),
        'role' => 'Peer',
        'name' => 'Peer 1',
        'rating' => array(
            'value' => 5,
            'comment' => 'Stephanie is a great communicator and always follows up on her shared tasks.<br><br>Her unique IT background brings a new perspective and I’ve personally learned a lot from her.',
            'riskoutcome' => $risks_selected,
            'validation' => $mov_selected,
            'documents' => array('Document Name'),
            'submitted' => date('M j, Y')
        )
    ),
    array(
        'classes' => array('actor--additional'),
        'role' => 'Peer',
        'name' => 'Peer 2',
        'rating' => array(
            'value' => 4,
            'comment' => 'I look to Stephanie as a role model and mentor. She also very resourceful and can solve almost any problem.',
            'riskoutcome' => $risks_selected,
            'validation' => $mov_selected,
            'documents' => array('Document Name'),
            'submitted' => date('M j, Y')
        )
    ),
    array(
        'classes' => array('actor--additional'),
        'role' => 'Peer',
        'name' => 'Peer 3',
        'rating' => array(
            'value' => 0,
            'comment' => 'I am new and cannot rate this person',
            'riskoutcome' => '',
            'validation' => '',
            'documents' => array(),
            'submitted' => date('M j, Y')
        )
    )
);


?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout layout-assessment">
    <div class="container">
        <section class="section section-main section-box">

            <section class="section page-header">
                <h2>About this Assessment <span class="average-rating">Assessment Rating: <a href="#modal-ratings" data-toggle="modal">Exceeds Expectations<i class="fa fa-fw fa-info-circle"></i></a></span></h2>
                <p class="lead">This assessment is intended to measure the Frontline Nurse's critical thinking abilities, an essential component of a nurses' performance. This brief but critical assessment measures the primary core skills essential for critical thinking.  The results will guide your individual development plan.</p>
            </section>

            <section class="section">
                <header class="section-header">
                    <h2>Essential Attributes for Success <span class="average-rating">Section Rating: <a href="#modal-ratings" data-toggle="modal">Exceeds Expectations<i class="fa fa-fw fa-info-circle"></i></a></span></h2>
                </header>

                <?= makeStatement(array(
                    'editable' => true,
                    'title' => 'Engagement',
                    'description' => 'Employee Engagement',
                    'url' => 'assessment-workflow-rater-rate.php',
                    'actors' => $hasrating
                )) ?>

                <?= makeStatement(array(
                    'editable' => true,
                    'stripe' => true,
                    'title' => 'Personal Integrity',
                    'description' => 'Acts with Integrity',
                    'url' => 'assessment-workflow-rater-rate.php',
                    'actors' => $hasrating
                )) ?>

            </section>

            <section class="section">
                <header class="section-header">
                    <h2>Organizational Expectations <span class="average-rating">Section Rating: <a href="#modal-ratings" data-toggle="modal">Exceeds Expectations<i class="fa fa-fw fa-info-circle"></i></a></span></h2>
                </header>
                <?= makeStatement(array(
                    'editable' => true,
                    'title' => 'Learning',
                    'description' => 'Demonstrates willingness to learn and share knowledge.',
                    'url' => 'assessment-workflow-rater-rate.php',
                    'actors' => $hasrating,
                )) ?>
                <?= makeStatement(array(
                    'editable' => true,
                    'stripe' => true,
                    'title' => 'Optimizes Satisfaction',
                    'description' => 'Demonstrates the ability to apply customer service principles to everyday work situations.',
                    'url' => 'assessment-workflow-rater-rate.php',
                    'actors' => $norating,
                )) ?>
                <?= makeStatement(array(
                    'editable' => true,
                    'title' => 'Team Contributor',
                    'description' => 'Effectively participates as a valued member of interdisciplinary teams.',
                    'url' => 'assessment-workflow-rater-rate.php',
                    'actors' => $norating,
                )) ?>
            </section>

            <section class="section">
                <header class="section-header">
                    <h2>Goals <span class="average-rating">Section Rating: <a href="#modal-ratings" data-toggle="modal">Exceeds Expectations<i class="fa fa-fw fa-info-circle"></i></a></span></h2>
                </header>
                <?= makeStatement(array(
                    'editable' => true,
                    'title' => 'Increase employee engagement survey completion rates to 85%',
                    'description' => 'Complete employee engagement survey delivered by the HealthStream Learning Center.',
                    'url' => 'assessment-workflow-rater-rate.php',
                    'actors' => $norating,
                )) ?>
            </section>

            <section class="section section-dynamic">
                <header class="section-header">
                    <h2>Dynamic Statement Section <span class="average-rating">Section Rating: <a href="#modal-ratings" data-toggle="modal">Exceeds Expectations<i class="fa fa-fw fa-info-circle"></i></a></span></h2>
                </header>

                <?= makeStatement(array(
                    'dynamic' => true,
                    'editable' => true,
                    'title' => 'This is the title of a dynamic statement',
                    'description' => 'This is the description of a dynamic statement.',
                    'url' => 'assessment-workflow-rater-rate.php',
                    'actors' => $norating,
                )) ?>

                <footer class="section-footer">
                    <a href="assessment-search-statements.php?single" class="btn btn-default">Select Statements</a>
                </footer>
            </section>

            <section class="section">
                <header class="section-header">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2 class="section-header-title">Dynamic Goals Section</h2>
                        </div>
                        <div class="col-sm-4">
                            <div class="section-header-action">
                                <label class="checkbox"><input type="checkbox"> Not Applicable</label>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="slat">
                    <div class="slat-message">
                        <h3>You don't have any goals selected.</h3>
                        <a href="#modal-select-goals" class="btn btn-sm btn-default" data-toggle="modal">Select Goals</a>
                    </div>
                </div>
            </section>

            <?php
                $stickybar = array(
                    'sets' => array(
                        array(
                            'classes' => array('hidden-xs'),
                            'html' => '
                                <a href="#" class="btn btn-success js-submit-to-review">Submit to Review</a>
                                <a href="#" class="btn btn-default js-toggle-additional" data-button-text="Expand All|Collapse All">Expand All</a>
                                <div class="btn-group dropup">
                                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Employee <i class="fa fa-caret-up"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-header">About Stephanie P. Juniper</li>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">To-Do List</a></li>
                                        <li><a href="#">Transcript</a></li>
                                        <li><a href="#">Assignment Completion Report</a></li>
                                    </ul>
                                </div>
                            ',
                        ),
                        array(
                            'classes' => array('visible-xs'),
                            'html' => '
                                <a href="#" class="btn btn-success js-submit-to-review">Review</a>
                                <div class="btn-group dropup">
                                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Employee <i class="fa fa-caret-up"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-header">About Stephanie P. Juniper</li>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">To-Do List</a></li>
                                        <li><a href="#">Transcript</a></li>
                                        <li><a href="#">Assignment Completion Report</a></li>
                                    </ul>
                                </div>
                            ',
                        ),
                    ),
                );
                echo createStickybar($stickybar);
            ?>

        </section><!-- /section-main -->

    </div><!-- /container -->
</div><!-- /layout -->


<div class="modal fade" id="modal-ratings" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Rating Explanations</h4>
            </div>
            <div class="modal-body">
                <h3>Exceeds Expectations</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="modal-rating-detail">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Rating Details</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h2 class="detail__title">Engagement</h2>
                    <div class="detail__description">Employee Engagement</div>
                    <hr>
                </section>
                <div class="detail__actors"></div>
                <div class="detail__template">
                    <div class="detail__actor">
                        <section class="section">
                            <h3>Rated By</h3>
                            <div><span class="detail__role">{role}</span><span class="detail__actor">{actor}</span></div>
                        </section>
                        <section class="section">
                            <h3>Rating</h3>
                            <div class="detail__rating">{rating}</div>
                        </section>
                        <section class="section">
                            <h3>Comment / Evidence of Achievement</h3>
                            <div class="detail__comment">{comment}</div>
                        </section>
                        <section class="section">
                            <h3>Risk / Outcome</h3>
                            <div class="detail__risk-outcome">{riskoutcome}</div>
                        </section>
                        <section class="section">
                            <h3>Method of Validation</h3>
                            <div class="detail__validation">{validation}</div>
                        </section>
                        <div class="detail__submitted">{submitted}</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="assessment-rate-wide.php" class="btn btn-default detail__edit">Edit Rating</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="modal-select-statements" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-page active" id="modal-selects-statements-list">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Select Statements</h4>
                    <div class="input-group modal-search">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div><!-- /input-group -->
                </div>
                <div class="modal-body">
                    <section class="section modal-search-results">
                        <h3>Results <small>Showing 1-10 of 15</small></h3>

                        <?php
                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-modal')),
                            ),
                            'title' => '<a href="#modal-selects-statements-view" data-toggle="modalpage">This is the title of a dynamic statement</a>',
                            'meta' => array(
                                array(
                                    'label' => 'Owner:',
                                    'value' => 'General Healthcare',
                                ),
                                array(
                                    'label' => 'Updated:',
                                    'value' => 'Dec 13, 2015',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single-success',
                                'content' => '<i class="fa fa-check"></i>',
                                'link' => '#',
                            )
                        );
                        echo createSlat($slat);

                        for ($i=1;$i<10;$i++) {

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-modal')),
                                ),
                                'title' => '<a href="#modal-selects-statements-view" data-toggle="modalpage">This is the title of a dynamic statement</a>',
                                'meta' => array(
                                    array(
                                        'label' => 'Owner:',
                                        'value' => 'General Healthcare',
                                    ),
                                    array(
                                        'label' => 'Updated:',
                                        'value' => 'Dec 13, 2015',
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => '<i class="fa fa-plus"></i>',
                                    'link' => '#',
                                )
                            );
                            echo createSlat($slat);

                        }

                        ?>

                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-success" data-dismiss="modal">Done</a>
                    <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                    <div class="btn-group pull-right">
                        <button class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-page" id="modal-selects-statements-view">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">View Statement</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <h3>Accountability</h3>
                        <p>Takes ownership for decisions, methods and results of work within the scope of one’s role.</p>
                    </section>
                    <section class="section">
                        <h4 class="page-header">Behavioral Criteria</h4>
                        <div data-toggle="limit-height" data-labels="Show More|Show Less"><div class="limit-height" style="height: 100px;">
                            <ul>
                                <li>Takes personal action that positively impacts the operational and financial success of the organization.</li>
                                <li>Takes responsibility for achieving job principle accountabilities, tasks, objectives and outcomes even when other resources are required.</li>
                                <li>Takes pride in and stands behind own words, decisions and actions.</li>
                                <li>Ensures accuracy and completeness of work, applying quality standards were defined.</li>
                                <li>Anticipates problems to minimize negative impact and/or ramifications.</li>
                                <li>Acknowledges own errors, including any unintended consequences; personally fixes problems without passing blame.</li>
                                <li>Manages others’ expectations openly when completion of tasks is not possible or delayed</li>
                                <li>Goes willingly and appropriately beyond the scope of one’s job to get the work done.</li>
                            </ul>
                        </div><div class="limit-height-link"><a href="#" class="limit-height-trigger">Show More<i class="fa fa-fw fa-caret-down"></i></a></div></div>
                    </section>
                    <section class="section">
                        <h4 class="page-header">Evidence of Achievement</h4>
                        <p>Select one of the following:</p>
                        <ol>
                            <li>Provide your  manager with three written examples of situations that you assumed responsibility for, and describe the actions taken to minimize negative impact or ramifications</li>
                            <li>Increase  responsibilities through the year by joining shared governance councils, committee membership.  Provide manger with three months of meeting minutes which identify your contributions to the meeting</li>
                            <li>Self enrolls in  Ascend’s  Own Your Own Engagement  and submit completed workbook exercises to your unit manager</li>
                        </ol>
                    </section>
                    <section class="section">
                        <h4 class="page-header">Category</h4>
                        <ul>
                            <li>Organizational Development</li>
                        </ul>
                    </section>
                    <section class="section">
                        <h4 class="page-header">Category</h4>
                        <ul>
                            <li>Article-Creating a Culture of Accountability in Health Care - File</li>
                            <li>Employee Insights - Employee Engagement Survery - File</li>
                            <li>Employee Insights-Employee Engagement Survery Results - File</li>
                        </ul>
                    </section>
                    <section class="section">
                        <h4 class="page-header">References</h4>
                        <p>Scott T, Mannion R, Davies H, Marshall M. Implementing a culture change in health care: Theory and practice. Int J Qual Health Care. 2003;15(2):111-118.</p>
                        <p>Tucker A, Edmondson A. Why hospitals don't learn from failures: Organizational and psychological dynamics that inhibit system change. Calif Manage Rev.2003;45(2):51-72.</p>
                        <p>Roberts V, Perryman M. Creating a culture for health care quality and safety. Health Care Manag. 2007;26(2):155-158.</p>
                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#modal-selects-statements-list" class="btn btn-success" data-toggle="modalpage">Select</a>
                    <a href="#modal-selects-statements-list" class="btn btn-default" data-toggle="modalpage">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modal-select-goals" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-page active" id="modal-selects-goals-list">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Select Goals</h4>
                    <div class="input-group modal-search">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div><!-- /input-group -->
                </div>
                <div class="modal-body">
                    <section class="section modal-search-results">
                        <h3>Results <small>Showing 1-10 of 15</small></h3>

                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-modal')),
                            ),
                            'title' => '<a href="#modal-selects-goals-view" data-toggle="modalpage">This is the title of a dynamic goal</a>',
                            'meta' => array(
                                array(
                                    'label' => 'Status:',
                                    'value' => 'Active',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single-success',
                                'content' => '<i class="fa fa-check"></i>',
                                'link' => '#',
                            )
                        );
                        echo createSlat($slat);

                        for ($i=1;$i<10;$i++) {

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-modal')),
                                ),
                                'title' => '<a href="#modal-selects-goals-view" data-toggle="modalpage">This is the title of a dynamic goal</a>',
                                'meta' => array(
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Active',
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => '<i class="fa fa-plus"></i>',
                                    'link' => '#',
                                )
                            );
                            echo createSlat($slat);

                        }

                        ?>

                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-success" data-dismiss="modal">Done</a>
                    <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                    <div class="btn-group pull-right">
                        <button class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-page" id="modal-selects-goals-view">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">View Goal</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <h3>This is the goal</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#modal-selects-goals-list" class="btn btn-success" data-toggle="modalpage">Select</a>
                    <a href="#modal-selects-goals-list" class="btn btn-default" data-toggle="modalpage">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
$(function(){

    // BUILD OUT RATING DETAIL FOR MODAL
    function makeActorDetail(template,$actor){
        template = template.replace("{role}", $actor.find('.actor__role').text());
        template = template.replace("{actor}", $actor.find('.actor__name').text());
        template = template.replace("{rating}", $actor.find('.actor__rating').html());
        template = template.replace("{comment}", $actor.find('.actor__comment').html());
        template = template.replace("{riskoutcome}", $actor.find('.actor__risk-outcome').html());
        template = template.replace("{validation}", $actor.find('.actor__validation').html());
        template = template.replace("{submitted}", $actor.find('.actor__submitted').html());
        return template;
    }

    // TOGGLE ADDITIONAL INFORMATION + BUTTON TEXT
    $('.statement')
        .on('shown.bs.collapse hidden.bs.collapse','.collapse-group',function(){
            var $btn = $('.js-toggle-additional');
            var label = $btn.attr('data-button-text').split('|');
            if ( $('.statement .collapse-group').length === $('.statement .collapse-group.in').length ) {
                $btn.text(label[1]);
            } else {
                $btn.text(label[0]);
            }
        })
        .on('show.bs.collapse','.collapse-group',function(){
            $(this).closest('.statement').addClass('statement--expanded');
        })
        .on('hide.bs.collapse','.collapse-group',function(){
            $(this).closest('.statement').removeClass('statement--expanded');
        });
    $('.js-toggle-additional').on('click',function(e){
        e.preventDefault();
        if ( $('.statement .collapse-group').length === $('.statement .collapse-group.in').length ) {
            $('.statement .collapse-group.in + .collapse-toggle').click();
        } else {
            $('.statement .collapse-group.collapse + .collapse-toggle').click();
        }
    });

    // SHOW RATING DETAIL MODALS
    $('.statement')
        .on('click','.js-rating-detail',function(e){
            var $modal = $('#modal-rating-detail');
            var $actors = $modal.find('.detail__actors');
            var template = $modal.find('.detail__template').html();
            var $statement = $(this).closest('.statement');
            var $actor = $(this).closest('.actor');

            e.preventDefault();

            if ( $actor.hasClass('actor--user') ) {
                $modal.addClass('modal--edit');
            } else {
                $modal.removeClass('modal--edit');
            }
            $actors.removeClass('detail__actors--multiple');
            $modal.find('.detail__title').text($statement.find('.title').text());
            $modal.find('.detail__description').text($statement.find('.description').text());
            $actors.html(makeActorDetail(template,$actor));
            $modal.modal('show');
        })
        .on('click','.js-ratings-detail',function(e){
            var $modal = $('#modal-rating-detail');
            var $actors = $modal.find('.detail__actors');
            var template = $modal.find('.detail__template').html();
            var $statement = $(this).closest('.statement');

            e.preventDefault();

            $actors.addClass('detail__actors--multiple');
            $actors.html('');
            $statement.find('.collapse-group .actor').each(function(){
                $actors.append(makeActorDetail(template,$(this)));
            });

            $modal.removeClass('modal--edit');
            $modal.find('.detail__title').text($statement.find('.title').text());
            $modal.find('.detail__description').text($statement.find('.description').text());

            $modal.modal('show');
        })
        .on('click','.js-user-rating-detail',function(e){
            $(this).closest('.statement').find('.actor--user:first .js-rating-detail').click();
        });


    // NEEDED FOR DYNAMIC STATEMENTS/GOALS
    $('a[data-toggle="modalpage"]').click(function(e){
        e.preventDefault();
        var target = $(this).attr('href');
        $(target).show().siblings('.modal-page').hide();
    });

    // SUBMIT TO REVIEW INTERRUPT
    $('.js-submit-to-review').click(function(e){
        e.preventDefault();
        HealthStream.utilities.interrupt({
            type: 'warning',
            title: 'You are about to submit your ratings',
            text: 'If you are satisfied with your ratings, you can choose to review now or at another time.',
            actions: [
            {
                type: 'success',
                label: 'I\'m ready to review',
                url: '/assessment-workflow-rater-review.php',
            },
            {
                type: 'success',
                label: 'Lock my ratings and review later',
                url: '/'
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