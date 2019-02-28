<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Performance Appraisal - Employee Workflow';
$patterns['focus']['title'] = 'Performance Appraisal - Employee Workflow';
$patterns['focus']['icon'] = '<div class="fph-cell fph-cell-icon"><div class="fph-icon" style="overflow:hidden;"><img src="/content/images/avatar.jpg" width="100%" height="100%"></div><div class="fph-icon-label"><span>Self Assessment</span></div></div>';
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
        'value' => 'Sign Off',
    ),
    array(
        'label' => 'Due:',
        'value' => date('M j, Y'),
    ),
);


$risks_selected = 'Low Risk, New Equipment, Policy Change, Safety, Teamwork, Time Sensitive';
$mov_selected = 'Direct Observation, Documentation Review, Evidence of Daily Work, Evidence Submission, Peer Review';

$hasrating = array(
    array(
        'classes' => array('actor--details'),
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
        'classes' => array('actor--user','actor--additional'),
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

$ratingDetailURL = '/assessment-workflow-employee-rate.php?readonly=true';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout layout-assessment">
    <div class="container">
        <section class="section section-main section-box">

            <section class="section page-header">
                <h2>About this Assessment</h2>
                <p class="lead">This assessment is intended to measure the Frontline Nurse's critical thinking abilities, an essential component of a nurses' performance. This brief but critical assessment measures the primary core skills essential for critical thinking.  The results will guide your individual development plan.</p>
            </section>

            <section class="section">
                <header class="section-header">
                    <h2>Essential Attributes for Success <span class="average-rating">Section Rating: <a href="#modal-ratings" data-toggle="modal">Exceeds Expectations<i class="fa fa-fw fa-info-circle"></i></a></span></h2>
                </header>

                <?= makeStatement(array(
                    'callout' => true,
                    'editable' => false,
                    'title' => 'Engagement',
                    'description' => 'Employee Engagement',
                    'url' => $ratingDetailURL,
                    'actors' => $hasrating
                )) ?>

                <?= makeStatement(array(
                    'callout' => true,
                    'editable' => false,
                    'stripe' => true,
                    'title' => 'Personal Integrity',
                    'description' => 'Acts with Integrity',
                    'url' => $ratingDetailURL,
                    'actors' => $hasrating
                )) ?>

            </section>

            <section class="section">
                <header class="section-header">
                    <h2>Organizational Expectations <span class="average-rating">Section Rating: <a href="#modal-ratings" data-toggle="modal">Exceeds Expectations<i class="fa fa-fw fa-info-circle"></i></a></span></h2>
                </header>
                <?= makeStatement(array(
                    'callout' => true,
                    'editable' => false,
                    'title' => 'Learning',
                    'description' => 'Demonstrates willingness to learn and share knowledge.',
                    'url' => $ratingDetailURL,
                    'actors' => $hasrating
                )) ?>
                <?= makeStatement(array(
                    'callout' => true,
                    'editable' => false,
                    'stripe' => true,
                    'title' => 'Optimizes Satisfaction',
                    'description' => 'Demonstrates the ability to apply customer service principles to everyday work situations.',
                    'url' => $ratingDetailURL,
                    'actors' => $hasrating
                )) ?>
                <?= makeStatement(array(
                    'callout' => true,
                    'editable' => false,
                    'title' => 'Team Contributor',
                    'description' => 'Effectively participates as a valued member of interdisciplinary teams.',
                    'url' => $ratingDetailURL,
                    'actors' => $hasrating
                )) ?>
            </section>

            <section class="section section-dynamic">
                <header class="section-header">
                    <h2>Dynamic Statement Section <span class="average-rating">Section Rating: <a href="#modal-ratings" data-toggle="modal">Exceeds Expectations<i class="fa fa-fw fa-info-circle"></i></a></span></h2>
                </header>

                <?= makeStatement(array(
                    'callout' => true,
                    'editable' => false,
                    'title' => 'This is the title of a dynamic statement',
                    'description' => 'This is the description of a dynamic statement.',
                    'url' => $ratingDetailURL,
                    'actors' => $hasrating
                )) ?>
            </section>

            <section class="section">
                <header class="section-header">
                    <h2>Dynamic Goals Section <span class="average-rating">Section Rating: <a href="#modal-ratings" data-toggle="modal">Exceeds Expectations<i class="fa fa-fw fa-info-circle"></i></a></span></h2>
                </header>
                <?= makeStatement(array(
                    'callout' => true,
                    'editable' => false,
                    'title' => 'Increase employee engagement survey completion rates to 85%',
                    'description' => 'Complete employee engagement survey delivered by the HealthStream Learning Center.',
                    'url' => $ratingDetailURL,
                    'actors' => $hasrating
                )) ?>
            </section>
            <section class="section">
            <hr>
            </section>
            <section class="section">

                <h2>Assessment Sign Off</h2>
                <div class="alert alert-info">
                    <p>Please click Sign Off below to complete your responsibilities for this Assessment.</p>
                    <p>When you click Sign Off below, you will no longer be able to make changes to this Assessment.</p>
                </div>
            </section>
            <section class="section">
                <form class="validate">
                    <div class="form-group">
                        <label class="control-label">Comments</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-actions">
                        <a href="/" class="btn btn-success">Sign Off</a>
                        <a href="/" class="btn btn-default">Sign Off and Print</a>
                    </div>
                </form>
            </section>
        </section><!-- /section-main -->
    </div><!-- /container -->
</div><!-- /layout -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $('input[name="signoff-type"]').on('change',function(){
            var selected = $('input[name="signoff-type"]:checked').val();
            $('.signoff-type').removeClass('active');
            $('#signoff-type-' + selected).addClass('active');
        });
        $('input[name="participant-type"]').on('change',function(){
            var selected = $('input[name="participant-type"]:checked').val();
            $('.participant-type').removeClass('active');
            $('#participant-type-' + selected).addClass('active');
        });
    });
</script>
<?= createSiteEnd(); ?>