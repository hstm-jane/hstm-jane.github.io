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
        'classes' => array(),
        'role' => 'Rater',
        'name' => 'Crane, Davy L.',
        'rating' => array(
            'value' => 5,
            'comment' => 'Stephanie is very dependable and a leader on the team. She contributes during meetings and always offers constructive criticism.<br><br>She embodies our company’s vision and I put a lot of trust in her to help mentor our new hires.<br><br>I trust Stephanie and always know where I stand with her.',
            'riskoutcome' => '',
            'validation' => '',
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
            'riskoutcome' => '',
            'validation' => '',
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
            'riskoutcome' => '',
            'validation' => '',
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
            'riskoutcome' => '',
            'validation' => '',
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

            <section class="section">
                <h2>Assessment Sign Off</h2>
                <div class="alert alert-info">
                    <p>Please click Sign Off below to complete your responsibilities for this Assessment.</p>
                    <p>When you click Sign Off below, you will no longer be able to make changes to this Assessment.</p>
                </div>
            </section>


           <section class="section section-dynamic">
                <header class="section-header">
                    <h2>Job Description  <span class="average-rating">Section Rating: <a href="#modal-ratings" data-toggle="modal">Exceeds Expectations<i class="fa fa-fw fa-info-circle"></i></a></span></h2>
                </header>

                <?= makeStatement(array(
                    'checkable' => false,
                    'callout' => true,
                    'dynamic' => true,
                    'editable' => false,
                    'title' => 'Registered Nurse',
                    'description' => 'The Registered Nurse provides professional nursing care to patients within an assigned department using the nursing process, functions as a liaison between patient and physician, and practices in the roles of care provider, educator, and member of the interdisciplinary team.',
                    'url' => 'assessment-performance-employee-rate-job.php?readonly=true',
                    'actors' => $hasrating,
                )) ?>

            </section>


            <section class="section">
                <header class="section-header">
                    <h2>Organizational Expectations <span class="average-rating">Section Rating: <a href="#modal-ratings" data-toggle="modal">Exceeds Expectations<i class="fa fa-fw fa-info-circle"></i></a></span></h2>
                </header>
                <?= makeStatement(array(
                    'checkable' => false,
                    'callout' => true,
                    'editable' => false,
                    'title' => 'Mission Vision Value',
                    'description' => 'Supports the mission, vision, and values of the organization.',
                    'url' => 'assessment-performance-employee-rate.php?readonly=true&title=Mission Vision Value',
                    'actors' => $hasrating,
                )) ?>
                <?= makeStatement(array(
                    'checkable' => false,
                    'callout' => true,
                    'editable' => false,
                    'stripe' => true,
                    'title' => 'Service to Customers and Patients',
                    'description' => 'Demonstrates service commitment to key constituents, patients, coworkers, and organization.',
                    'url' => 'assessment-performance-employee-rate.php?readonly=true&title=Service to Customers and Patients',
                    'actors' => $hasrating,
                )) ?>
                <?= makeStatement(array(
                    'checkable' => false,
                    'callout' => true,
                    'editable' => false,
                    'title' => 'Integrity',
                    'description' => 'Acts with integrity.',
                    'url' => 'assessment-performance-employee-rate.php?readonly=true&title=Integrity',
                    'actors' => $hasrating,
                )) ?>

            </section>

            <section class="section">
                <header class="section-header">
                    <h2>Performance Standards <span class="average-rating">Section Rating: <a href="#modal-ratings" data-toggle="modal">Exceeds Expectations<i class="fa fa-fw fa-info-circle"></i></a></span></h2>
                </header>
                <?= makeStatement(array(
                    'checkable' => false,
                    'callout' => true,
                    'editable' => false,
                    'title' => 'Professional Development',
                    'description' => 'Focuses on developing personal knowledge, skills, and abilities to continuously improve and grow.',
                    'url' => 'assessment-performance-employee-rate.php?readonly=true&title=Professional Development',
                    'actors' => $hasrating,
                )) ?>
                <?= makeStatement(array(
                    'checkable' => false,
                    'callout' => true,
                    'editable' => false,
                    'stripe' => true,
                    'title' => 'Effective Communication',
                    'description' => 'Communicates effectively with others.',
                    'url' => 'assessment-performance-employee-rate.php?readonly=true&title=Effective Communication',
                    'actors' => $hasrating,
                )) ?>
                <?= makeStatement(array(
                    'checkable' => false,
                    'callout' => true,
                    'editable' => false,
                    'title' => 'Collaboration',
                    'description' => 'Collaborates effectively in team environment.',
                    'url' => 'assessment-performance-employee-rate.php?readonly=true&title=Collaboration',
                    'actors' => $hasrating,
                )) ?>
            </section>

            <section class="section">
            <hr>
            </section>
            <section class="section">
                <form class="validate">
                    <div class="form-group">
                        <label class="control-label">Comments</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-actions">
                        <a href="#" class="btn btn-success js-signoff">Sign Off</a>
                        <a href="#" class="btn btn-success js-signoff">Sign Off and Print</a>
                    </div>
                </form>
            </section>
        </section><!-- /section-main -->
    </div><!-- /container -->
</div><!-- /layout -->

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
                        <!-- <section class="section">
                            <h3>Risk / Outcome</h3>
                            <div class="detail__risk-outcome">{riskoutcome}</div>
                        </section>
                        <section class="section">
                            <h3>Method of Validation</h3>
                            <div class="detail__validation">{validation}</div>
                        </section> -->
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
                var $modal = $('#modal-rating-detail');
                var $actors = $modal.find('.detail__actors');
                var template = $modal.find('.detail__template').html();
                var $statement = $(this).closest('.statement');
                var $actor = $statement.find('.actor:first');

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
            });
        $('.js-signoff').click(function(e){
            var growl = {
                growlType: 'success',
                growlTitle: 'Assessment Completed',
                growlText: encodeURIComponent('<dl class="gritter-class"><dd><?= $patterns['focus']['title']; ?></dd></dl>'),
                growlSticky: 'false'
            }
            e.preventDefault();
            window.location.href = '/?' + $.param(growl);
        });
    });
</script>
<?= createSiteEnd(); ?>