<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Engagement';
$patterns['focus']['title'] = 'Engagement';
$patterns['focus']['icon'] = '<div class="fph-cell fph-cell-icon"><div class="fph-icon" style="overflow:hidden;"><img src="https://secure.gravatar.com/avatar/522a2de34a1aac9b3fb6ca2f9b3698d7?s=100" width="100%" height="100%"></div><div class="fph-icon-label"><span>Assessment</span></div></div>';
$patterns['focus']['meta_primary'] = array(
    array(
        'label' => 'From Assessment:',
        'value' => '<a href="assessment-wide.php" class="meta-value">'.date('Y').' Performance Appraisal</a>',
        'attributes' => array(
            array('class','meta-hidden-xs'),
        )
    )
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Employee:',
        'value' => 'Crane, Davy L.',
    ),
    array(
        'label' => 'Reviewers:',
        'value' => '2 of 3',
    ),
    array(
        'label' => 'Status:',
        'value' => 'Not Yet Rated',
    ),
    array(
        'label' => 'Due:',
        'value' => date('M j, Y'),
    ),
);

$return = (!empty($_GET['return']))?$_GET['return']:'assessment-wide.php';

$risks = array(
    'Age Related',
    'Communication',
    'Decreased Volume',
    'High Risk',
    'High Volume',
    'Hospital Initiative',
    'Increased Risk',
    'Infection Control',
    'Learner\'s Needs',
    'Low Risk',
    'Low Volume',
    'New Equipment',
    'New Scope of Practice',
    'Orientation',
    'Performance Issue',
    'Policy Change',
    'Problem Prone',
    'Professional Development',
    'Quality',
    'Regulatory',
    'Safety',
    'Satisfaction(Employee)',
    'Satisfaction(Patient)',
    'Satisfaction(Physician)',
    'Special Needs Population',
    'Teamwork',
    'Time Sensitive',
);

$risks_selected = 'Low Risk, New Equipment, Policy Change, Safety, Teamwork, Time Sensitive';

$mov = array(
    'Case Study',
    'Confidence Based Learning',
    'Direct Observation',
    'Documentation Review',
    'Evidence of Daily Work',
    'Evidence Submission',
    'Exemplar',
    'Inservice Education',
    'Mock Survey',
    'Online Simulation',
    'Peer Review',
    'PI Data Trending',
    'Presentation',
    'Simulation Lab',
    'Skills Checklist',
    'Skills Lab/Skills Fair',
    'Testing - Oral',
    'Testing - Written',
);

$mov_selected = 'Direct Observation, Documentation Review, Evidence of Daily Work, Evidence Submission, Peer Review';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout layout-assessment">
    <div class="container">
        <section class="section section-main section-box">

            <section class="section hidden-xs" style="margin: 0 0 20px; padding: 10px; background: #f9f9f9; border: 1px solid #ddd; border-left: 3px solid #ccc">
                <h3 style="margin:0">Additional Ratings</h3>
                <div class="collapse-group collapse">
                    <div class="actors" style="padding: 10px 0;">

                        <div class="actor actor--additional">
                            <div class="actor__basics">
                                <div class="actor__row">
                                    <div class="actor__role"><label>Employee</label></div>
                                    <div class="actor__name"><a href="#" class="js-rating-detail">Crane, Davy L.</a></div>
                                    <div class="actor__rating"><div class="rating-control"><div class="rating-control-row"><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option rating-selected"></span></div><div class="rating-control-cell"><span class="rating-label" data-label="Exceeds Expectations">Exceeds Expectations</span></div></div></div></div>
                                    <div class="actor__summary"><div>Overall, I am very satisfied in the direction of my role as it has changed dramatically over the last year.I appreciate my manager asking me for feedback and putting in action plans geared towards tea… <a href="#" class="js-rating-detail">More</a></div></div>
                                </div>
                            </div>
                            <div class="actor__details">
                                <div class="actor__row">
                                    <div class="actor__risk-outcome">
                                        <label>Risk / Outcome</label>
                                        <?= $risks_selected; ?>
                                    </div>
                                    <div class="actor__validation">
                                        <label>Method of Validation</label>
                                        <?= $mov_selected; ?>
                                    </div>
                                    <div class="actor__comment">
                                        <label>Comment / Evidence of Achievement</label>
                                        Overall, I am very satisfied in the direction of my role as it has changed dramatically over the last year.<br><br>I appreciate my manager asking me for feedback and putting in action plans geared towards team goals.<br><br>A strong working relationship with colleagues makes improvement much easier.
                                        <div class="actor__documents"><ul class="fa-ul"> <li><a href="#"><i class="fa-li fa fa-paperclip"></i>First Document Name</a></li> <li><a href="#"><i class="fa-li fa fa-paperclip"></i>Second Document Name</a></li></ul></div>
                                    </div>
                                </div>
                            </div>
                            <div class="actor__submitted">Submitted: Jan 29, 2016</div>
                        </div>
                        <div class="actor actor--additional">
                            <div class="actor__basics">
                                <div class="actor__row">
                                    <div class="actor__role"><label>Peer</label></div>
                                    <div class="actor__name"><a href="#" class="js-rating-detail">Peer 1</a></div>
                                    <div class="actor__rating"><div class="rating-control"><div class="rating-control-row"><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option rating-selected"></span></div><div class="rating-control-cell"><span class="rating-label" data-label="Exceeds Expectations">Exceeds Expectations</span></div></div></div></div>
                                    <div class="actor__summary"><div>Davy is a great communicator and always follows up on his shared tasks.His unique IT background brings a new perspective and I’ve personally learned a lot from him.</div></div>
                                </div>
                            </div>
                            <div class="actor__details">
                                <div class="actor__row">
                                    <div class="actor__risk-outcome">
                                        <label>Risk / Outcome</label>
                                        <?= $risks_selected; ?>
                                    </div>
                                    <div class="actor__validation">
                                        <label>Method of Validation</label>
                                        <?= $mov_selected; ?>
                                    </div>
                                    <div class="actor__comment">
                                        <label>Comment / Evidence of Achievement</label>
                                        Davy is a great communicator and always follows up on his shared tasks.<br><br>His unique IT background brings a new perspective and I’ve personally learned a lot from him.
                                        <div class="actor__documents"><ul class="fa-ul"> <li><a href="#"><i class="fa-li fa fa-paperclip"></i>Document Name</a></li></ul></div>
                                    </div>
                                </div>
                            </div>
                            <div class="actor__submitted">Submitted: Jan 29, 2016</div>
                        </div>
                        <div class="actor actor--additional">
                            <div class="actor__basics">
                                <div class="actor__row">
                                    <div class="actor__role"><label>Peer</label></div>
                                    <div class="actor__name"><a href="#" class="js-rating-detail">Peer 2</a></div>
                                    <div class="actor__rating"><div class="rating-control"><div class="rating-control-row"><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option rating-selected"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-label" data-label="Above Expectations">Above Expectations</span></div></div></div></div>
                                    <div class="actor__summary"><div>I look to Davy as a role model and mentor. He also very resourceful and can solve almost any problem.</div></div>
                                </div>
                            </div>
                            <div class="actor__details">
                                <div class="actor__row">
                                    <div class="actor__risk-outcome">
                                        <label>Risk / Outcome</label>
                                        <?= $risks_selected; ?>
                                    </div>
                                    <div class="actor__validation">
                                        <label>Method of Validation</label>
                                        <?= $mov_selected; ?>
                                    </div>
                                    <div class="actor__comment">
                                        <label>Comment / Evidence of Achievement</label>
                                        I look to Davy as a role model and mentor. He also very resourceful and can solve almost any problem.
                                        <div class="actor__documents"><ul class="fa-ul"> <li><a href="#"><i class="fa-li fa fa-paperclip"></i>Document Name</a></li></ul></div>
                                    </div>
                                </div>
                            </div>
                            <div class="actor__submitted">Submitted: Jan 29, 2016</div>
                        </div>
                        <div class="actor actor--additional">
                            <div class="actor__basics">
                                <div class="actor__row">
                                    <div class="actor__role"><label>Peer</label></div>
                                    <div class="actor__name"><a href="#" class="js-rating-detail">Peer 3</a></div>
                                    <div class="actor__rating"><div class="rating-control"><div class="rating-control-row"><div class="rating-control-cell"><span class="rating-option rating-selected"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-label" data-label="Not Applicable">Not Applicable</span></div></div></div></div>
                                    <div class="actor__summary"><div>I am new and cannot rate this person</div></div>
                                </div>
                            </div>
                            <div class="actor__details">
                                <div class="actor__row">
                                    <div class="actor__risk-outcome">
                                        <label>Risk / Outcome</label>
                                        No Risk/Outcomes selected
                                    </div>
                                    <div class="actor__validation">
                                        <label>Method of Validation</label>
                                        No Method of Validation selected
                                    </div>
                                    <div class="actor__comment">
                                        <label>Comment / Evidence of Achievement</label>
                                        I am new and cannot rate this person

                                    </div>
                                </div>
                            </div>
                            <div class="actor__submitted">Submitted: Jan 29, 2016</div>
                        </div>

                    </div>

                    <h3>My Shared Ratings</h3>
                    <div class="actors">

                        <div class="actor actor--additional">
                            <div class="actor__basics">
                                <div class="actor__row">
                                    <div class="actor__role"><label>Employee</label></div>
                                    <div class="actor__name"><a href="#" class="js-rating-detail">Crane, Davy L.</a></div>
                                    <div class="actor__rating"><div class="rating-control"><div class="rating-control-row"><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option rating-selected"></span></div><div class="rating-control-cell"><span class="rating-label" data-label="Exceeds Expectations">Exceeds Expectations</span></div></div></div></div>
                                    <div class="actor__summary"><div>Overall, I am very satisfied in the direction of my role as it has changed dramatically over the last year. I appreciate my manager asking me for feedback and putting in action plans geared towards tea… <a href="#" class="js-rating-detail">More</a></div></div>
                                </div>
                            </div>
                            <div class="actor__details">
                                <div class="actor__row">
                                    <div class="actor__risk-outcome">
                                        <label>Risk / Outcome</label>
                                        <?= $risks_selected; ?>
                                    </div>
                                    <div class="actor__validation">
                                        <label>Method of Validation</label>
                                        <?= $mov_selected; ?>
                                    </div>
                                    <div class="actor__comment">
                                        <label>Comment / Evidence of Achievement</label>
                                        Overall, I am very satisfied in the direction of my role as it has changed dramatically over the last year.<br><br>I appreciate my manager asking me for feedback and putting in action plans geared towards team goals.<br><br>A strong working relationship with colleagues makes improvement much easier.
                                        <div class="actor__documents"><ul class="fa-ul"> <li><a href="#"><i class="fa-li fa fa-paperclip"></i>First Document Name</a></li> <li><a href="#"><i class="fa-li fa fa-paperclip"></i>Second Document Name</a></li></ul></div>
                                    </div>
                                </div>
                            </div>
                            <div class="actor__submitted">Submitted: Jan 29, 2016</div>
                        </div>

                        <div class="actor actor--additional">
                            <div class="actor__basics">
                                <div class="actor__row">
                                    <div class="actor__role"><label>Employee</label></div>
                                    <div class="actor__name"><a href="#" class="js-rating-detail">Crane, Davy L.</a></div>
                                    <div class="actor__rating"><div class="rating-control"><div class="rating-control-row"><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option rating-selected"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-label" data-label="Above Expectations">Above Expectations</span></div></div></div></div>
                                    <div class="actor__summary"><div>Overall, I am very satisfied in the direction of my role as it has changed dramatically over the last year. I appreciate my manager asking me for feedback and putting in action plans geared towards tea… <a href="#" class="js-rating-detail">More</a></div></div>
                                </div>
                            </div>
                            <div class="actor__details">
                                <div class="actor__row">
                                    <div class="actor__risk-outcome">
                                        <label>Risk / Outcome</label>
                                        <?= $risks_selected; ?>
                                    </div>
                                    <div class="actor__validation">
                                        <label>Method of Validation</label>
                                        <?= $mov_selected; ?>
                                    </div>
                                    <div class="actor__comment">
                                        <label>Comment / Evidence of Achievement</label>
                                        Overall, I am very satisfied in the direction of my role as it has changed dramatically over the last year.<br><br>I appreciate my manager asking me for feedback and putting in action plans geared towards team goals.<br><br>A strong working relationship with colleagues makes improvement much easier.
                                        <div class="actor__documents"><ul class="fa-ul"> <li><a href="#"><i class="fa-li fa fa-paperclip"></i>First Document Name</a></li> <li><a href="#"><i class="fa-li fa fa-paperclip"></i>Second Document Name</a></li></ul></div>
                                    </div>
                                </div>
                            </div>
                            <div class="actor__submitted">Submitted: Jan 29, 2016</div>
                        </div>

                        <div class="actor actor--additional">
                            <div class="actor__basics">
                                <div class="actor__row">
                                    <div class="actor__role"><label>Employee</label></div>
                                    <div class="actor__name"><a href="#" class="js-rating-detail">Crane, Davy L.</a></div>
                                    <div class="actor__rating"><div class="rating-control"><div class="rating-control-row"><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option  rating-selected"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-option"></span></div><div class="rating-control-cell"><span class="rating-label" data-label="Meets Expectations">Meets Expectations</span></div></div></div></div>
                                    <div class="actor__summary"><div>Overall, I am very satisfied in the direction of my role as it has changed dramatically over the last year. I appreciate my manager asking me for feedback and putting in action plans geared towards tea… <a href="#" class="js-rating-detail">More</a></div></div>
                                </div>
                            </div>
                            <div class="actor__details">
                                <div class="actor__row">
                                    <div class="actor__risk-outcome">
                                        <label>Risk / Outcome</label>
                                        <?= $risks_selected; ?>
                                    </div>
                                    <div class="actor__validation">
                                        <label>Method of Validation</label>
                                        <?= $mov_selected; ?>
                                    </div>
                                    <div class="actor__comment">
                                        <label>Comment / Evidence of Achievement</label>
                                        Overall, I am very satisfied in the direction of my role as it has changed dramatically over the last year.<br><br>I appreciate my manager asking me for feedback and putting in action plans geared towards team goals.<br><br>A strong working relationship with colleagues makes improvement much easier.
                                        <div class="actor__documents"><ul class="fa-ul"> <li><a href="#"><i class="fa-li fa fa-paperclip"></i>First Document Name</a></li> <li><a href="#"><i class="fa-li fa fa-paperclip"></i>Second Document Name</a></li></ul></div>
                                    </div>
                                </div>
                            </div>
                            <div class="actor__submitted">Submitted: Jan 29, 2016</div>
                        </div>

                    </div>
                </div>
                <a href="#" class="collapse-toggle" data-toggle-text="Show Rating Details|Hide Rating Details">Show Rating Details</a>
            </section>
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <section class="section">
                        <section class="section">
                            <h3>Description</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </section>
                        <section class="section">
                            <h3>Behavioral Criteria</h3>
                            <ul>
                                <li>Expresses satisfaction with a career path and takes advantage of professional development opportunities</li>
                                <li>Assumes accountability for communicating and seeking out educational opportunities to increase professional competency</li>
                                <li>Speaks in terms of long term commitment to the organization</li>
                                <li>Addresses disruptive coworks and intervenes when lateral violence is identified</li>
                                <li>Enjoys working cooperatively and goes the extra mile to support coworkers</li>
                                <li>Maintains a positive attitude</li>
                                <li>Makes recommendations to improve processes and resources within the organizationActively participates in hospital committees</li>
                            </ul>
                        </section>
                        <section class="section">
                            <h3>Evidence of Achievement</h3>
                            <p>Employee Centered Verification:  Must complete the following</p>
                            <ul>
                                <li>Completes on the line employee engagement survey</li>
                                <li>Document completion in goal section</li>
                            </ul>
                        </section>
                        <section class="section">
                            <h3>Resources</h3>
                            <p>Employee Centered Verification:  Must complete the following</p>
                            <ul class="fa-ul">
                                <li><a href="#"><i class="fa fa-paperclip fa-li"></i>Completes on the line employee engagement survey</a></li>
                                <li><a href="#"><i class="fa fa-globe fa-li"></i>Document completion in goal section</a></li>
                            </ul>
                        </section>
                        <section class="section">
                            <h3>References</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">View References</a></li>
                            </ul>
                        </section>
                    </section>
                </div><!-- /column -->
                <div class="col-md-4 col-sm-6">
                    <section class="section" data-equalize="layout-columns" data-equalize="layout-columns" style="padding-left: 20px; border-left:1px solid #ddd">
                        <form>
                            <div class="form-group">
                                <label>Rating <a href="#modal-legend" class="more" data-toggle="modal"><i class="fa fa-info-circle"></i></a></label>
                                <select class="form-control" disabled>
                                    <option>Choose</option>
                                    <option>Not Applicable</option>
                                    <option>Requires Action</option>
                                    <option>Below Expectations</option>
                                    <option>Meets Expectations</option>
                                    <option>Above Expectations</option>
                                    <option selected>Exceeds Expectations</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="checkbox"><input type="checkbox" checked disabled> Add to Reflective Plan</label>
                            </div>
                            <div class="form-group">
                                <label>Comment / Evidence of Achievement</label>
                                <textarea class="form-control" style="height:200px" disabled>
Davy is very dependable and a leader on the team. He contributes during meetings and always offers constructive criticism.

He embodies our company’s vision and I put a lot of trust in him to help mentor our new hires.

I trust Davy and always know where I stand with him.
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label>Documents</label>
                                <ul class="control-attachments">
                                    <li><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>First Document Name</a></li>
                                    <li><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>Second Document Name</a></li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label>Risk/Outcome</label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <ul class="list-unstyled">
                                            <?php for ($i=0;$i < ceil(count($risks)/2); $i++ ) { ?>
                                            <li class="checkbox"><label><input type="checkbox" <?= (strpos($risks_selected,$risks[$i]))?'checked':''; ?> disabled><?= $risks[$i] ?></label></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6">
                                        <ul class="list-unstyled">
                                            <?php for ($i=ceil(count($risks)/2);$i < count($risks); $i++ ) { ?>
                                            <li class="checkbox"><label><input type="checkbox" <?= (strpos($risks_selected,$risks[$i]))?'checked':''; ?> disabled><?= $risks[$i] ?></label></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group">
                                <label>Method of Validation</label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <ul class="list-unstyled">
                                            <?php for ($i=0;$i < ceil(count($mov)/2); $i++ ) { ?>
                                            <li class="checkbox"><label><input type="checkbox" <?= (strpos($mov_selected,$mov[$i]))?'checked':''; ?> disabled><?= $mov[$i] ?></label></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6">
                                        <ul class="list-unstyled">
                                            <?php for ($i=ceil(count($mov)/2);$i < count($mov); $i++ ) { ?>
                                            <li class="checkbox"><label><input type="checkbox" <?= (strpos($mov_selected,$mov[$i]))?'checked':''; ?> disabled><?= $mov[$i] ?></label></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div><!-- /column -->
            </div><!-- /row -->

            <?php
                $stickybar = array(
                    'sets' => array(
                        array(
                            'position' => 'left',
                            'html' => '
                                <a href="'.$return.'" class="btn btn-success">Save</a>
                                <a href="#" class="btn btn-success">Save and Next</a>
                                <a href="'.$return.'" class="btn btn-default">Cancel</a>
                            ',
                        ),
                        array(
                            'position' => 'right',
                            'classes' => array('hidden-xs'),
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
    </div><!-- /container -->
</div><!-- /layout -->


<!-- Modal -->
<div id="modal-notes" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">My Notes</h4>
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

                    $content = '
                        <section class="section">
                            <h5>Detail</h5>
                            <p>This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                        </section>
                        <section class="section">
                            <h5>Attachments</h5>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-paperclip"></i> <a href="#">This is a document</a></li>
                            </ul>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-modal','slat-callout')),
                        ),
                        'title' => 'This is my note',
                        'meta' => array(
                            array(
                                'label' => 'Regarding:',
                                'value' => 'Stephanie Juniper',
                            ),
                            array(
                                'label' => 'Updated: ',
                                'value' => 'Mar 1, 2014 at 2:13pm',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(
                            'type' => 'action-single-success',
                            'content' => '<i class="fa fa-check"></i>',
                            'link' => '#',
                        ),
                        'nested' => array(
                            'hide' => array($content),
                        )
                    );
                    echo createSlat($slat);

                    for ($i=1;$i<5;$i++) {

                        $content = '
                            <section class="section">
                                <h5>Detail</h5>
                                <p>This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                            </section>
                            <section class="section">
                                <h5>Attachments</h5>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-paperclip"></i> <a href="#">This is a document</a></li>
                                </ul>
                            </section>
                        ';
                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-modal','slat-callout')),
                            ),
                            'title' => 'This is my note',
                            'meta' => array(
                                array(
                                    'label' => 'Regarding:',
                                    'value' => 'Stephanie Juniper',
                                ),
                                array(
                                    'label' => 'Updated: ',
                                    'value' => 'Mar 1, 2014 at 2:13pm',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => '<i class="fa fa-plus"></i>',
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
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Attach</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                <div class="btn-group pull-right">
                    <button class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                    <button class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-documents" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">My Documents</h4>
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

                    $content = '
                        <section class="section">
                            <h5>Description</h5>
                            <p>This is a longer form area for the file description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-modal','slat-callout')),
                        ),
                        'title' => '<a href="#">This document is already attached</a>',
                        'meta' => array(
                            array(
                                'label' => 'Attachment:',
                                'value' => 'Excel Spreadsheet',
                            ),
                            array(
                                'label' => 'Updated: ',
                                'value' => 'Mar 1, 2014 at 2:13pm',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(
                            'type' => 'action-single-success',
                            'content' => '<i class="fa fa-check"></i>',
                            'link' => '#',
                        ),
                        'nested' => array(
                            'hide' => array($content),
                        )
                    );
                    echo createSlat($slat);

                    $content = '
                        <section class="section">
                            <h5>Description</h5>
                            <p>This is a longer form area for the file description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-modal','slat-callout')),
                        ),
                        'title' => '<a href="#">This is the document name</a>',
                        'meta' => array(
                            array(
                                'label' => 'Attachment:',
                                'value' => 'Word Document',
                            ),
                            array(
                                'label' => 'Updated: ',
                                'value' => 'Mar 1, 2014 at 2:13pm',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(
                            'type' => 'action-single',
                            'content' => '<i class="fa fa-plus"></i>',
                            'link' => '#',
                        ),
                        'nested' => array(
                            'hide' => array($content),
                        )
                    );
                    echo createSlat($slat);

                    $content = '
                        <section class="section">
                            <h5>Description</h5>
                            <p>This is a longer form area for the file description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-modal','slat-callout')),
                        ),
                        'title' => '<a href="#">This is the document name</a>',
                        'meta' => array(
                            array(
                                'label' => 'Attachment:',
                                'value' => 'Portable Document File',
                            ),
                            array(
                                'label' => 'Updated: ',
                                'value' => 'Mar 1, 2014 at 2:13pm',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(
                            'type' => 'action-single',
                            'content' => '<i class="fa fa-plus"></i>',
                            'link' => '#',
                        ),
                        'nested' => array(
                            'hide' => array($content),
                        )
                    );
                    echo createSlat($slat);

                    $content = '
                        <section class="section">
                            <h5>Description</h5>
                            <p>This is a longer form area for the file description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-modal','slat-callout')),
                        ),
                        'title' => '<a href="#">This is the document name</a>',
                        'meta' => array(
                            array(
                                'label' => 'Attachment:',
                                'value' => 'Excel Spreadsheet',
                            ),
                            array(
                                'label' => 'Updated: ',
                                'value' => 'Mar 1, 2014 at 2:13pm',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(
                            'type' => 'action-single',
                            'content' => '<i class="fa fa-plus"></i>',
                            'link' => '#',
                        ),
                        'nested' => array(
                            'hide' => array($content),
                        )
                    );
                    echo createSlat($slat);

                    $content = '
                        <section class="section">
                            <h5>Description</h5>
                            <p>This is a longer form area for the file description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-modal','slat-callout')),
                        ),
                        'title' => '<a href="#">This is the document name</a>',
                        'meta' => array(
                            array(
                                'label' => 'Attachment:',
                                'value' => 'Image',
                            ),
                            array(
                                'label' => 'Updated: ',
                                'value' => 'Mar 1, 2014 at 2:13pm',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(
                            'type' => 'action-single',
                            'content' => '<i class="fa fa-plus"></i>',
                            'link' => '#',
                        ),
                        'nested' => array(
                            'hide' => array($content),
                        )
                    );
                    echo createSlat($slat);

                    ?>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Attach</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                <div class="btn-group pull-right">
                    <button class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                    <button class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-document-add" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Document</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Document Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Description <small>Optional</small></label>
                    <textarea class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <input type="file" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <div class="hidden-xs">
                    <button class="btn btn-success" data-dismiss="modal">Save and Attach</button>
                    <button class="btn btn-success" data-dismiss="modal">Save, Attach, and Add Another</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
                <div class="visible-xs">
                    <div class="btn-group dropup">
                        <a href="#" class="btn btn-success">Save and Attach</a>
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-caret-up"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Save, Attach, and Add Another</a></li>
                        </ul>
                    </div>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-legend" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Rating Definitions</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h3>Great</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </section>
                <section class="section">
                    <h3>Good</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </section>
                <section class="section">
                    <h3>Meh</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </section>
                <section class="section">
                    <h3>Bad</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </section>
                <section class="section">
                    <h3>Worse</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

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

        $('.js-rating-detail').on('click',function(e){
            var $modal = $('#modal-rating-detail');
            var $actors = $modal.find('.detail__actors');
            var template = $modal.find('.detail__template').html();
            var $actor = $(this).closest('.actor');

            e.preventDefault();
            $actors.html(makeActorDetail(template,$actor));
            $modal.modal('show');
        });
    });

</script>
<?= createSiteEnd(); ?>