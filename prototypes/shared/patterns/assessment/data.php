<?php

$templateStatementCompetency = array(
    'name' => 'Statement Name',
    'description' => 'Statement Description',
    'content' => 'Statement Content'
    'ratingOptions' => array(
        'Not Applicable',
        'Novice',
        'Advanced Beginner',
        'Competent',
        'Proficient',
        'Expert',
    ),
    'riskoutcomeOptions' => array(
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
        'Satisfaction (Employee)',
        'Satisfaction (Patient)',
        'Satisfaction (Physician)',
        'Special Needs Population',
        'Teamwork',
        'Time Sensitive',
    ),
    'movOptions' => array(
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
        'Testing - Written'
    ),
    'checkable' => false,
    'dynamic' => false,
);

$templateStatementPerformance = array(
    'name' => 'Statement Name',
    'description' => 'Statement Description',
    'content' => 'Statement Content'
    'ratingOptions' => array(
        'Not Applicable',
        'Requires Action',
        'Below Expectations',
        'Meets Expectations',
        'Above Expectations',
        'Expert',
    ),
    'checkable' => false,
    'dynamic' => false,
);


$assessment = array(
    'name' => 'Competency Appraisal',
    'description' => 'Orientation for MS RN',
    'employee' => 'Juniper, Stephanie P.',
    'rater' => 'Crane, Davy L.',
    'due' => date('M j,Y',strtotime('+30days'),
    'state' => 'Evaluation',
    'type' => 'Peer',
    'rating' => 'Pending',
    'viewAs' => 'employee',
    'sections' => array(
        array(
            'name' => 'Essential Attributes of Medical Surgical RNs',
            'rating' => 'Proficient',
            'statements' => array(
                array(
                    'name' => 'Critical Thinking',
                    'description' => 'Demonstrates ability to consistently apply critical thinking abilities to positively impact patient and organizational outcomes.',
                    'content' => 'This is all the page content'
                    'ratingOptions' => array(
                        'Not Applicable',
                        'Novice',
                        'Advanced Beginner',
                        'Competent',
                        'Proficient',
                        'Expert',
                    ),
                    'riskoutcomeOptions' => array(
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
                        'Satisfaction (Employee)',
                        'Satisfaction (Patient)',
                        'Satisfaction (Physician)',
                        'Special Needs Population',
                        'Teamwork',
                        'Time Sensitive',
                    ),
                    'movOptions' => array(
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
                        'Testing - Written'
                    ),
                    'rating' => array(
                        'label' => 'My Rating',
                        'value' => 4,
                        'date' => date('M j,Y',strtotime('-7 days'),
                    ),
                    'checkable' => false,
                    'dynamic' => false,
                    'actorsShow' => array(
                        array(
                            'name' => 'Juniper, Stephanie P.',
                            'role' => 'employee',
                            'rating' => array(
                                'value' => 4,
                                'comment' => 'Overall, I am very satisfied in the direction of my role as it has changed dramatically over the last year.<br><br>I appreciate my manager asking me for feedback and putting in action plans geared towards team goals.<br><br>A strong working relationship with colleagues makes improvement much easier.',
                                'riskoutcome' => array(
                                    'Low Risk',
                                    'New Equipment',
                                    'Policy Change',
                                    'Safety',
                                    'Teamwork',
                                    'Time Sensitive',
                                ),
                                'mov' => array(
                                    'Direct Observation',
                                    'Documentation Review',
                                    'Evidence of Daily Work',
                                    'Evidence Submission',
                                    'Peer Review',
                                ),
                                'date' => date('M j,Y',strtotime('-7 days'),
                                'documents' => array(
                                    'First Document Name',
                                    'Second Document Name',
                                ),
                            )
                        )
                    ),
                    'actorsHide' => array(
                        array(
                            'name' => 'Crane, Davy L.',
                            'role' => 'rater',
                            'rating' => array(
                                'value' => 4,
                                'comment' => 'Stephanie is very dependable and a leader on the team. She contributes during meetings and always offers constructive criticism.<br><br>She embodies our company’s vision and I put a lot of trust in her to help mentor our new hires.<br><br>I trust Stephanie and always know where I stand with her.',
                                'riskoutcome' => array(
                                    'Low Risk',
                                    'New Equipment',
                                    'Policy Change',
                                    'Safety',
                                    'Teamwork',
                                    'Time Sensitive',
                                ),
                                'mov' => array(
                                    'Direct Observation',
                                    'Documentation Review',
                                    'Evidence of Daily Work',
                                    'Evidence Submission',
                                    'Peer Review',
                                ),
                                'date' => date('M j,Y',strtotime('-7 days'),
                                'documents' => array(
                                    'First Document Name',
                                    'Second Document Name',
                                ),
                            )
                        )
                    ),
                )
            ),
        )
    ),
);

$assessment['state'] = 'Evaluation'; // Evaluation|Review|Approval|Sign Off
$assessment['type'] = 'employee'; // Employee|Self|Peer
$assessment['rating'] = 'Proficient'; // assessment rating
$assessment['sections'][0]['rating'] = 'Proficient'; // section rating


$assessment['sections'][0][0]['checkable'] = true; // reflective plan


$assessment['sections'][0][0]['rating'] = array( // statement-level rating
    'label' => 'My Rating',
    'value' => 4,
    'date' => date('M j, Y',strtotime('-7 days'),
);

$assessment['sections'][0][0][0]['rating'] = array(
    'value' => 4,
    'comment' => 'Overall, I am very satisfied in the direction of my role as it has changed dramatically over the last year.<br><br>I appreciate my manager asking me for feedback and putting in action plans geared towards team goals.<br><br>A strong working relationship with colleagues makes improvement much easier.',
    'documents' => array(
        'First Document Name',
        'Second Document Name',
    ),
    'riskoutcome' => array(
        'Low Risk',
        'New Equipment',
        'Policy Change',
        'Safety',
        'Teamwork',
        'Time Sensitive',
    ),
    'mov' => array(
        'Direct Observation',
        'Documentation Review',
        'Evidence of Daily Work',
        'Evidence Submission',
        'Peer Review',
    ),
    'date' => date('M j, Y',strtotime('-7 days')),
);


function setStatementRating($statement,$rating){
    // loop through sections and statements until it matches the name
    // set $assessment['sections'][0][0]['rating'] = $rating
}
function setActorRating($statement,$actor,$rating,$template = array()){
    // set up some base templates
    // loop through sections and statements until it matches the name
    // loop through actors until matches name
    // set $assessment['sections'][0][0][0]['rating'] with $rating
}

