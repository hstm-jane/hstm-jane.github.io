<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Competency Appraisal - Rater Workflow';
$patterns['header']['userName'] = 'Davy L. Crane';
$patterns['header']['userImage'] = '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/holdenweb/128.jpg">';
$patterns['focus']['title'] = 'Competency Appraisal - Rater Workflow';
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
        <canvas class="fph-chart" data-type="Doughnut" data-segments="[[1,1],[1,1],[1,1],[1,1],[1,0],[1,0],[1,0]]" width="108" height="108"></canvas>
        <figcaption>57%</figcaption>
    </figure>';

$risks_selected = 'Low Risk, New Equipment, Policy Change, Safety, Teamwork, Time Sensitive';
$mov_selected = 'Direct Observation, Documentation Review, Evidence of Daily Work, Evidence Submission, Peer Review';
$ratings = array('Not Applicable','Novice','Advanced Beginner','Competent','Proficient','Expert');

$hasrating = array(
    array(
        'classes' => array('actor--user'),
        'role' => 'Rater',
        'name' => 'Crane, Davy L.',
        'rating' => array(
            'value' => 4,
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
            'value' => 4,
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
                <h2>About this Assessment <span class="average-rating">Assessment Rating: <a href="#modal-ratings" data-toggle="modal">Proficient<i class="fa fa-fw fa-info-circle"></i></a></span></h2>
                <p class="lead">Orientation for MS RN</p>
            </section>

            <section class="section">
                <header class="section-header">
                    <h2>Essential Attributes of Medical Surgical RN's <span class="average-rating">Section Rating: <a href="#modal-ratings" data-toggle="modal">Proficient<i class="fa fa-fw fa-info-circle"></i></a></span></h2>
                </header>

                <?= makeStatement(array(
                    'checkable' => true,
                    'callout' => true,
                    'editable' => false,
                    'title' => 'Critical Thinking',
                    'description' => 'Demonstrates ability to consistently apply critical thinking abilities to positively impact patient and organizational outcomes.',
                    'url' => 'assessment-competency-rater-rate.php?readonly=true&title=Critical Thinking',
                    'actors' => $hasrating,
                    'ratings' => $ratings,
                )) ?>

                <?= makeStatement(array(
                    'checkable' => true,
                    'callout' => true,
                    'editable' => false,
                    'stripe' => true,
                    'title' => 'Communication',
                    'description' => 'Conveys and presents information clearly, confidently and effectively in one-on-one and group settings in a timely manner.',
                    'url' => 'assessment-competency-rater-rate.php?readonly=true&title=Communication',
                    'actors' => $hasrating,
                    'ratings' => $ratings,
                )) ?>

                <?= makeStatement(array(
                    'checkable' => true,
                    'callout' => true,
                    'editable' => false,
                    'title' => 'Prioritization, Organization, Delegation',
                    'description' => 'Demonstrates ability to prioritize, delegate and organize the care to be delivered and as well as the team delivering the care.',
                    'url' => 'assessment-competency-rater-rate.php?readonly=true&title=Prioritization%2C%20Organization%2C%20Delegation',
                    'actors' => $hasrating,
                    'ratings' => $ratings,
                )) ?>

            </section>

            <section class="section">
                <header class="section-header">
                    <h2>Nursing Orientation <span class="average-rating">Section Rating: <a href="#modal-ratings" data-toggle="modal">Proficient<i class="fa fa-fw fa-info-circle"></i></a></span></h2>
                </header>
                <?= makeStatement(array(
                    'checkable' => true,
                    'callout' => true,
                    'editable' => false,
                    'title' => 'Relationship Based Care',
                    'description' => 'Applies Relationship Based Care principals to strengthen teamwork and collaboration with all colleagues to improve the patient experience.',
                    'url' => 'assessment-competency-rater-rate.php?readonly=true&title=Relationship Based Care',
                    'actors' => $hasrating,
                    'ratings' => $ratings,
                )) ?>
                <?= makeStatement(array(
                    'checkable' => true,
                    'callout' => true,
                    'editable' => false,
                    'stripe' => true,
                    'title' => 'Alcohol Withdrawal',
                    'description' => 'Directs nursing care towards preventing complications of alcohol withdrawal.',
                    'url' => 'assessment-competency-rater-rate.php?readonly=true&title=Alcohol Withdrawal',
                    'actors' => $hasrating,
                    'ratings' => $ratings,
                )) ?>
            </section>

            <section class="section">
                <header class="section-header">
                    <h2>Med-Surg Core Orientation <span class="average-rating">Section Rating: <a href="#modal-ratings" data-toggle="modal">Proficient<i class="fa fa-fw fa-info-circle"></i></a></span></h2>
                </header>
                <?= makeStatement(array(
                    'checkable' => true,
                    'callout' => true,
                    'editable' => false,
                    'title' => 'Blood Transfusion',
                    'description' => 'Initiates and administers blood transfusions.',
                    'url' => 'assessment-competency-rater-rate.php?readonly=true&title=Blood Transfusion',
                    'actors' => $hasrating,
                    'ratings' => $ratings,
                )) ?>
                <?= makeStatement(array(
                    'checkable' => true,
                    'callout' => true,
                    'editable' => false,
                    'stripe' => true,
                    'title' => 'Patient Controlled Analgesia - PCA',
                    'description' => 'Safely cares for patient receiving PCA.',
                    'url' => 'assessment-competency-rater-rate.php?readonly=true&title=Patient Controlled Analgesia - PCA',
                    'actors' => $hasrating,
                    'ratings' => $ratings,
                )) ?>
            </section>

            <section class="section section-reflective">
                <header class="section-header">
                    <h2>Reflective Plan</h2>
                </header>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Due Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control js-validate">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <span class="help-block">This field is required</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Instructions <small>Optional</small></label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Options <small>Optional</small></label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="checkbox"><input type="checkbox"> Include Ratings</label>
                                    <label class="checkbox"><input type="checkbox"> Include Comments</label>
                                </div>
                                <div class="col-sm-6">
                                    <label class="checkbox"><input type="checkbox"> Include Risks/Outcomes</label>
                                    <label class="checkbox"><input type="checkbox"> Include Methods Of Validation</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php
                $stickybar = array(
                    'sets' => array(
                        array(
                            'classes' => array('hidden-xs','hidden-sm'),
                            'html' => '
                                <a href="assessment-competency-rater-signoff.php" class="btn btn-success" id="btn-signoff">Begin Sign off Process</a>
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
                                <a href="/" class="btn btn-default">Cancel</a>
                            ',
                        ),
                        array(
                            'classes' => array('visible-xs','visible-sm'),
                            'html' => '
                                <a href="assessment-competency-rater-signoff.php" class="btn btn-success" id="btn-signoff">Sign off</a>
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
                                <a href="/" class="btn btn-default">Cancel</a>
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
                <h3>Proficient</h3>
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
                            <h3>Comments</h3>
                            <div class="detail__comment">{comment}</div>
                        </section>
                        <section class="section">
                            <h3>Risk/Outcome</h3>
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

    // CHECKABLE FOR REFLECTIVE PLAN
    $('.checkable .select input[type="checkbox"]').on('change', function(){
        var $checkbox = $(this);
        var $checkable = $checkbox.closest('.checkable');

        if ( $checkbox.prop('checked') ) {
            $checkable.addClass('checkable-checked');
        } else {
            $checkable.removeClass('checkable-checked');
        }

        $(document).trigger('checked.hstm.checkable');
    });
    $(document).on('checked.hstm.checkable', function(){
        var $layout = $('.layout-assessment');

        if ( $layout.find('.checkable > .select .checkbox:checked').length > 0 ) {
            $('.layout-assessment').addClass('layout-assessment-reflective');
        } else {
            $('.layout-assessment').removeClass('layout-assessment-reflective');
        }
    });
    $('#btn-signoff').click(function(e){
        var $layout = $('.layout-assessment');
        if ( $layout.find('.checkable .checkbox:checked').length > 0 && $('.js-validate').val() === '' ) {
            e.preventDefault();
            $('.js-validate').focus().closest('.form-group').addClass('has-error');
        }
    });

});
</script>
<?= createSiteEnd(); ?>