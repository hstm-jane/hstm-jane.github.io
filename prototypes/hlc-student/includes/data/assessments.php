<?php

/*  =============================================================================
    WIP - ASSESSMENT DATA
    ========================================================================== */

    // All assessment data
    $assessments = array();
    include(dirname(__FILE__).'/assessments.shared.php');


/*  =============================================================================
    Assessment: Competency 1
    ========================================================================== */

    $assessments['competency-1'] = array(
        'title' => 'Initial Nursing Competency Appraisal',
        'description' => 'Orientation for MS RN',
        'due' => date('M j, Y',strtotime('+30days')),
        'averageRatings' => $commonRatingScale,
        'optionsReflectivePlan' => true,
        'optionsIsReflectivePlan' => false,
        'optionsShowPeerNames' => false,
        'optionsShowPeerRatings' => true,
        'sections' => array(
            array(
                'title' => 'Essential Attributes of Medical Surgical RNs',
                'dynamic' => false,
                'average' => true,
                'statements' => array('statement-1','statement-2','statement-3'),
            ),
            array(
                'title' => 'Nursing Orientation',
                'dynamic' => false,
                'average' => true,
                'statements' => array('statement-4','statement-5'),
            ),
            array(
                'title' => 'Med-Surg Core Orientation',
                'dynamic' => false,
                'average' => true,
                'statements' => array('statement-6','statement-7'),
            )
        ),
        'statements' => array(
            'statement-1' => array(
                'id' => 'statement-1',
                'title' => 'Critical Thinking',
                'description' => 'Demonstrates ability to consistently apply critical thinking abilities to positively impact patient and organizational outcomes.',
                'content' => $commonStatementContent,
                'options' => $commonStatementOptions,
            ),
            'statement-2' => array(
                'id' => 'statement-2',
                'title' => 'Communication',
                'description' => 'Conveys and presents information clearly, confidently and effectively in one-on-one and group settings in a timely manner.',
                'content' => $commonStatementContent,
                'options' => $commonStatementOptions,
            ),
            'statement-3' => array(
                'id' => 'statement-3',
                'title' => 'Prioritization, Organization, Delegation',
                'description' => 'Demonstrates ability to prioritize, delegate and organize the care to be delivered and as well as the team delivering the care.',
                'content' => $commonStatementContent,
                'options' => $commonStatementOptions,
            ),
            'statement-4' => array(
                'id' => 'statement-4',
                'title' => 'Relationship Based Care',
                'description' => 'Applies Relationship Based Care principals to strengthen teamwork and collaboration with all colleagues to improve the patient experience.',
                'content' => $commonStatementContent,
                'options' => $commonStatementOptions,
            ),
            'statement-5' => array(
                'id' => 'statement-5',
                'title' => 'Alcohol Withdrawal',
                'description' => 'Applies Relationship Based Care principals to strengthen teamwork and collaboration with all colleagues to improve the patient experience.',
                'content' => $commonStatementContent,
                'options' => $commonStatementOptions,
            ),
            'statement-6' => array(
                'id' => 'statement-6',
                'title' => 'Blood Transfusion',
                'description' => 'Initiates and administers blood transfusions.',
                'content' => $commonStatementContent,
                'options' => $commonStatementOptions,
            ),
            'statement-7' => array(
                'id' => 'statement-7',
                'title' => 'Patient Controlled Analgesia - PCA',
                'description' => 'Safely cares for patient receiving PCA.',
                'content' => $commonStatementContent,
                'options' => $commonStatementOptions,
            ),
        ),
        'actors' => array(
            'rater' => array(
                'id' => 'rater',
                'role' => 'rater',
                'nameLastFirst' => 'Crane, Darcy L.',
                'nameFirstLast' => 'Darcy L. Crane',
                'nameEmployeeID' => 'dcrane',
                'image' => '/content/images/prototype-actors/allisongrayce.jpg',
            ),
            'employee' => array(
                'id' => 'employee',
                'role' => 'employee',
                'nameLastFirst' => 'Juniper, Stephanie P.',
                'nameFirstLast' => 'Stephanie P. Juniper',
                'nameEmployeeID' => 'sjuniper',
                'image' => '/content/images/avatar.jpg',
            ),
            'peer-1' => array(
                'id' => 'peer-1',
                'role' => 'peer',
                'nameLastFirst' => 'Andrzejewski, Alexa A.',
                'nameFirstLast' => 'Alexa A. Andrzejewski',
                'nameEmployeeID' => 'aandrzejewski',
                'image' => '/content/images/prototype-actors/ladylexy.jpg',
            ),
            'peer-2' => array(
                'id' => 'peer-2',
                'role' => 'peer',
                'nameLastFirst' => 'Ng, Grace C.',
                'nameFirstLast' => 'Grace C. Ng',
                'nameEmployeeID' => 'gng',
                'image' => '/content/images/prototype-actors/uxceo.jpg',
            ),
            'peer-3' => array(
                'id' => 'peer-3',
                'role' => 'peer',
                'nameLastFirst' => 'Chanda, Himanshu Y.',
                'nameFirstLast' => 'Himanshu Y. Chanda',
                'nameEmployeeID' => 'hchanda',
                'image' => '/content/images/prototype-actors/himanshuchanda.jpg',
            ),
        ),
        'ratingSets' => array(
            // No ratings
            0 => array(),
            // Some Employee Ratings / 1 Peer / No Rater / None Visible
            1 => array(
                'statement-1' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-2' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-3' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-4' => array(
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-5' => array(
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-6' => array(
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-7' => array(
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
            ),
            // All Employee Ratings / All Peers / No Rater / None Visible
            2 => array(
                'statement-1' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-2' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-3' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-4' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-5' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-6' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-7' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
            ),
            // All Employee Ratings / All Peers / Some Rater / None Visible
            3 => array(
                'statement-1' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-2' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-3' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-4' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-5' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-6' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-7' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
            ),
            // All Ratings / None Visible
            4 => array(
                'statement-1' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-2' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-3' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-4' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-5' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-6' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-7' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
            ),
            // All Ratings / Rater Visible
            5 => array(
                'statement-1' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-2' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-3' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-4' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-5' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-6' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-7' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
            ),
            // All Ratings / All Visible
            6 => array(
                'statement-1' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
                    'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
                    'peer-2' => array_merge($commonRatings['peer-2'],array('visible'=>true)),
                    'peer-3' => array_merge($commonRatings['peer-3'],array('visible'=>true)),
                ),
                'statement-2' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
                    'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
                    'peer-2' => array_merge($commonRatings['peer-2'],array('visible'=>true)),
                    'peer-3' => array_merge($commonRatings['peer-3'],array('visible'=>true)),
                ),
                'statement-3' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
                    'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
                    'peer-2' => array_merge($commonRatings['peer-2'],array('visible'=>true)),
                    'peer-3' => array_merge($commonRatings['peer-3'],array('visible'=>true)),
                ),
                'statement-4' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
                    'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
                    'peer-2' => array_merge($commonRatings['peer-2'],array('visible'=>true)),
                    'peer-3' => array_merge($commonRatings['peer-3'],array('visible'=>true)),
                ),
                'statement-5' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
                    'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
                    'peer-2' => array_merge($commonRatings['peer-2'],array('visible'=>true)),
                    'peer-3' => array_merge($commonRatings['peer-3'],array('visible'=>true)),
                ),
                'statement-6' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
                    'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
                    'peer-2' => array_merge($commonRatings['peer-2'],array('visible'=>true)),
                    'peer-3' => array_merge($commonRatings['peer-3'],array('visible'=>true)),
                ),
                'statement-7' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
                    'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
                    'peer-2' => array_merge($commonRatings['peer-2'],array('visible'=>true)),
                    'peer-3' => array_merge($commonRatings['peer-3'],array('visible'=>true)),
                ),
            ),
        )
    );


/*  =============================================================================
    Assessment: Competency 2
    ========================================================================== */

    $assessments['competency-2'] = $assessments['competency-1'];
    $assessments['competency-2']['actors']['employee']['nameLastFirst'] = 'Conner, Rosalyn F.';
    $assessments['competency-2']['actors']['employee']['nameFirstLast'] = 'Rosalyn F. Conner';
    $assessments['competency-2']['actors']['employee']['image'] = '/content/images/prototype-actors/esthercrawford.jpg';
    $assessments['competency-2']['ratingSets'][6] = array(
        'statement-1' => array(
            'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
            'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
            'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
        ),
        'statement-2' => array(
            'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
            'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
            'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
        ),
        'statement-3' => array(
            'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
            'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
            'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
        ),
        'statement-4' => array(
            'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
            'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
            'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
        ),
        'statement-5' => array(
            'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
            'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
            'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
        ),
        'statement-6' => array(
            'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
            'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
            'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
        ),
        'statement-7' => array(
            'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
            'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
            'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
        ),
    );


/*  =============================================================================
    Assessment: Competency 3
    ========================================================================== */

    $assessments['competency-3'] = $assessments['competency-1'];
    $assessments['competency-3']['actors']['employee']['nameLastFirst'] = 'Montoya, Alice G.';
    $assessments['competency-3']['actors']['employee']['nameFirstLast'] = 'Alice G. Montoya';
    $assessments['competency-3']['actors']['employee']['nameEmployeeID'] = 'amontoya';
    $assessments['competency-3']['actors']['employee']['image'] = '/content/images/prototype-actors/rhein_wein.jpg';
    $assessments['competency-3']['ratingSets'][3] = array(
        'statement-1' => array(
            'rater' => $commonRatings['rater'],
            'employee' => $commonRatings['employee'],
            'peer-1' => $commonRatings['peer-1'],
            'peer-3' => $commonRatings['peer-3'],
        ),
        'statement-2' => array(
            'rater' => $commonRatings['rater'],
            'employee' => $commonRatings['employee'],
            'peer-1' => $commonRatings['peer-1'],
            'peer-3' => $commonRatings['peer-3'],
        ),
        'statement-3' => array(
            'rater' => $commonRatings['rater'],
            'employee' => $commonRatings['employee'],
            'peer-1' => $commonRatings['peer-1'],
            'peer-3' => $commonRatings['peer-3'],
        ),
        'statement-4' => array(
            'employee' => $commonRatings['employee'],
            'peer-1' => $commonRatings['peer-1'],
            'peer-3' => $commonRatings['peer-3'],
        ),
        'statement-5' => array(
            'employee' => $commonRatings['employee'],
            'peer-1' => $commonRatings['peer-1'],
            'peer-3' => $commonRatings['peer-3'],
        ),
        'statement-6' => array(
            'employee' => $commonRatings['employee'],
            'peer-1' => $commonRatings['peer-1'],
            'peer-3' => $commonRatings['peer-3'],
        ),
        'statement-7' => array(
            'employee' => $commonRatings['employee'],
            'peer-1' => $commonRatings['peer-1'],
            'peer-3' => $commonRatings['peer-3'],
        ),
    );


/*  =============================================================================
    Assessment: Competency 4
    ========================================================================== */

    $assessments['competency-4'] = $assessments['competency-1'];
    $assessments['competency-4']['actors']['employee']['nameLastFirst'] = 'Park, Jennifer S.';
    $assessments['competency-4']['actors']['employee']['nameFirstLast'] = 'Jennifer S. Park';
    $assessments['competency-4']['actors']['employee']['nameEmployeeID'] = 'jpark';
    $assessments['competency-4']['actors']['employee']['image'] = '/content/images/prototype-actors/kfriedson.jpg';


/*  =============================================================================
    Assessment: Competency 5
    ========================================================================== */

    $assessments['competency-5'] = $assessments['competency-1'];
    $assessments['competency-5']['actors']['rater']['nameLastFirst'] = 'Peeples, Misty R.';
    $assessments['competency-5']['actors']['rater']['nameFirstLast'] = 'Misty R. Peeples';
    $assessments['competency-5']['actors']['rater']['nameEmployeeID'] = 'mpeeples';
    $assessments['competency-5']['actors']['rater']['image'] = '/content/images/prototype-actors/mtnmissy.jpg';
    $assessments['competency-5']['actors']['employee']['nameLastFirst'] = 'Crane, Darcy L.';
    $assessments['competency-5']['actors']['employee']['nameFirstLast'] = 'Darcy L. Crane';
    $assessments['competency-5']['actors']['employee']['nameEmployeeID'] = 'dcrane';
    $assessments['competency-5']['actors']['employee']['image'] = '/content/images/prototype-actors/allisongrayce.jpg';


/*  =============================================================================
    Assessment: Competency 6
    ========================================================================== */

    $assessments['competency-6'] = array(
        'title' => 'Nursing Skills Assessment – Reflective/Development Plan 1 – Juniper, Stephanie',
        'description' => 'Orientation for MS RN',
        'due' => date('M j, Y',strtotime('+30days')),
        'averageRatings' => $commonRatingScale,
        'optionsReflectivePlan' => true,
        'optionsIsReflectivePlan' => true,
        'optionsShowPeerNames' => false,
        'optionsShowPeerRatings' => true,
        'sections' => array(
            array(
                'title' => 'Nursing Orientation',
                'dynamic' => false,
                'average' => true,
                'statements' => array('statement-4'),
            ),
        ),
        'statements' => array(
            'statement-4' => array(
                'id' => 'statement-4',
                'title' => 'Relationship Based Care',
                'description' => 'Applies Relationship Based Care principals to strengthen teamwork and collaboration with all colleagues to improve the patient experience.',
                'content' => $commonStatementContent,
                'options' => $commonStatementOptions,
            ),
        ),
        'actors' => array(
            'rater' => array(
                'id' => 'rater',
                'role' => 'rater',
                'nameLastFirst' => 'Crane, Darcy L.',
                'nameFirstLast' => 'Darcy L. Crane',
                'nameEmployeeID' => 'dcrane',
                'image' => '/content/images/prototype-actors/allisongrayce.jpg',
            ),
            'employee' => array(
                'id' => 'employee',
                'role' => 'employee',
                'nameLastFirst' => 'Juniper, Stephanie P.',
                'nameFirstLast' => 'Stephanie P. Juniper',
                'nameEmployeeID' => 'sjuniper',
                'image' => '/content/images/avatar.jpg',
            ),
            'peer-1' => array(
                'id' => 'peer-1',
                'role' => 'peer',
                'nameLastFirst' => 'Andrzejewski, Alexa A.',
                'nameFirstLast' => 'Alexa A. Andrzejewski',
                'nameEmployeeID' => 'aandrzejewski',
                'image' => '/content/images/prototype-actors/ladylexy.jpg',
            ),
            'peer-2' => array(
                'id' => 'peer-2',
                'role' => 'peer',
                'nameLastFirst' => 'Ng, Grace C.',
                'nameFirstLast' => 'Grace C. Ng',
                'nameEmployeeID' => 'gng',
                'image' => '/content/images/prototype-actors/uxceo.jpg',
            ),
            'peer-3' => array(
                'id' => 'peer-3',
                'role' => 'peer',
                'nameLastFirst' => 'Chanda, Himanshu Y.',
                'nameFirstLast' => 'Himanshu Y. Chanda',
                'nameEmployeeID' => 'hchanda',
                'image' => '/content/images/prototype-actors/himanshuchanda.jpg',
            ),
        ),
        'ratingSets' => array(
            // No ratings
            0 => array(),
            // Some Employee Ratings / 1 Peer / No Rater / None Visible
            1 => array(
                'statement-4' => array(
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
            ),
            // All Employee Ratings / All Peers / No Rater / None Visible
            2 => array(
                'statement-4' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
            ),
            // All Employee Ratings / All Peers / Some Rater / None Visible
            3 => array(
                'statement-4' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
            ),
            // All Ratings / None Visible
            4 => array(
                'statement-4' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
            ),
            // All Ratings / Rater Visible
            5 => array(
                'statement-4' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
            ),
            // All Ratings / All Visible
            6 => array(
                'statement-4' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
                    'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
                    'peer-2' => array_merge($commonRatings['peer-2'],array('visible'=>true)),
                    'peer-3' => array_merge($commonRatings['peer-3'],array('visible'=>true)),
                ),
            ),
        )
    );


/*  =============================================================================
    Assessment: Competency 7
    ========================================================================== */

    $assessments['competency-7'] = $assessments['competency-1'];
    $assessments['competency-7']['title'] = 'Nursing Skills Assessment';
    // $assessments['competency-7']['actors']['employee']['nameLastFirst'] = 'Fields, Jessica L.';
    // $assessments['competency-7']['actors']['employee']['nameFirstLast'] = 'Jessica L. Fields';
    // $assessments['competency-7']['actors']['employee']['nameEmployeeID'] = 'jfields';
    // $assessments['competency-7']['actors']['employee']['image'] = '/content/images/prototype-actors/brynn.jpg';

    $competency_7_rater = array(
        'id' => 'rater',
        'visible' => false,
        'rating' => 1,
        'risks' => array('Low Risk','New Equipment','Policy Change','Safety','Teamwork','Time Sensitive'),
        'validations' => array('Direct Observation','Documentation Review','Evidence of Daily Work','Evidence Submission','Peer Review'),
        'comment' => 'She needs to put in more effort to keep the team informed of her progress. Colleagues are often not aware of work she\'s completed, resulting in confusion in front of patients.',
        'documents' => array('',''),
        'date' => date('M j, Y',strtotime('-7days')),
    );
    $competency_7_employee = array(
        'id' => 'employee',
        'visible' => false,
        'rating' => 3,
        'risks' => array('Low Risk','New Equipment','Policy Change','Safety','Teamwork','Time Sensitive'),
        'validations' => array('Direct Observation','Documentation Review','Evidence of Daily Work','Evidence Submission','Peer Review'),
        'comment' => 'Overall, I think I am doing the work needed. I have had some feedback to communicate better but I\'m working on it.',
        'documents' => array('',''),
        'date' => date('M j, Y',strtotime('-7days')),
    );
    $competency_7_peer_1 = array(
        'id' => 'peer-1',
        'visible' => false,
        'rating' => 1,
        'risks' => array('Low Risk','New Equipment','Policy Change','Safety','Teamwork','Time Sensitive'),
        'validations' => array('Direct Observation','Documentation Review','Evidence of Daily Work','Evidence Submission','Peer Review'),
        'comment' => 'She struggles with communicatation and needs to follow up on her shared tasks. I\'ve gone to help a patient not nowing the work was already completed.',
        'documents' => array(''),
        'date' => date('M j, Y',strtotime('-7days')),
    );
    $competency_7_peer_2 = array(
        'id' => 'peer-2',
        'visible' => false,
        'rating' => 2,
        'risks' => array('Low Risk','New Equipment','Policy Change','Safety','Teamwork','Time Sensitive'),
        'validations' => array('Direct Observation','Documentation Review','Evidence of Daily Work','Evidence Submission','Peer Review'),
        'comment' => 'I like working with her. She has a good attitude and wants to do bette. She could follow up more on shared tasks.',
        'documents' => array(''),
        'date' => date('M j, Y',strtotime('-7days')),
    );

    $competency_7_rater_visible = array_merge($competency_7_rater,array('visible'=>true));
    $competency_7_employee_visible = array_merge($competency_7_employee,array('visible'=>true));
    $competency_7_peer_1_visible = array_merge($competency_7_peer_1,array('visible'=>true));
    $competency_7_peer_2_visible = array_merge($competency_7_peer_2,array('visible'=>true));

    $assessments['competency-7']['ratingSets'][4]['statement-4']['rater'] = $competency_7_rater;
    $assessments['competency-7']['ratingSets'][5]['statement-4']['rater'] = $competency_7_rater_visible;
    $assessments['competency-7']['ratingSets'][6]['statement-4']['rater'] = $competency_7_rater_visible;

    $assessments['competency-7']['ratingSets'][2]['statement-4']['employee'] = $competency_7_employee;
    $assessments['competency-7']['ratingSets'][3]['statement-4']['employee'] = $competency_7_employee;
    $assessments['competency-7']['ratingSets'][4]['statement-4']['employee'] = $competency_7_employee;
    $assessments['competency-7']['ratingSets'][5]['statement-4']['employee'] = $competency_7_employee;
    $assessments['competency-7']['ratingSets'][6]['statement-4']['employee'] = $competency_7_employee_visible;

    $assessments['competency-7']['ratingSets'][1]['statement-4']['peer-1'] = $competency_7_peer_1;
    $assessments['competency-7']['ratingSets'][2]['statement-4']['peer-1'] = $competency_7_peer_1;
    $assessments['competency-7']['ratingSets'][3]['statement-4']['peer-1'] = $competency_7_peer_1;
    $assessments['competency-7']['ratingSets'][4]['statement-4']['peer-1'] = $competency_7_peer_1;
    $assessments['competency-7']['ratingSets'][5]['statement-4']['peer-1'] = $competency_7_peer_1;
    $assessments['competency-7']['ratingSets'][6]['statement-4']['peer-1'] = $competency_7_peer_1_visible;

    $assessments['competency-7']['ratingSets'][2]['statement-4']['peer-2'] = $competency_7_peer_2;
    $assessments['competency-7']['ratingSets'][3]['statement-4']['peer-2'] = $competency_7_peer_2;
    $assessments['competency-7']['ratingSets'][4]['statement-4']['peer-2'] = $competency_7_peer_2;
    $assessments['competency-7']['ratingSets'][5]['statement-4']['peer-2'] = $competency_7_peer_2;
    $assessments['competency-7']['ratingSets'][6]['statement-4']['peer-2'] = $competency_7_peer_2_visible;


/*  =============================================================================
    Assessment: Competency 8
    ========================================================================== */

    $assessments['competency-8'] = $assessments['competency-1'];
    $assessments['competency-8']['actors']['employee']['nameLastFirst'] = 'Lewis, Audrey K.';
    $assessments['competency-8']['actors']['employee']['nameFirstLast'] = 'Audrey K. Lewis';
    $assessments['competency-8']['actors']['employee']['nameEmployeeID'] = 'alewis';
    $assessments['competency-8']['actors']['employee']['image'] = '/content/images/prototype-actors/alewis.jpg';

/*  =============================================================================
    Assessment: Competency 9
    ========================================================================== */

    $assessments['competency-8'] = $assessments['competency-2'];
    $assessments['competency-8']['actors']['employee']['nameLastFirst'] = 'Nicolai, Rodger J.';
    $assessments['competency-8']['actors']['employee']['nameFirstLast'] = 'Rodger J. Nicolai';
    $assessments['competency-8']['actors']['employee']['nameEmployeeID'] = 'alewis';
    $assessments['competency-8']['actors']['employee']['image'] = '/content/images/prototype-actors/alewis.jpg';

/*  =============================================================================
    Assessment: Competency 10
    ========================================================================== */

    $assessments['competency-8'] = $assessments['competency-3'];
    $assessments['competency-8']['actors']['employee']['nameLastFirst'] = 'Lewis, Audrey K.';
    $assessments['competency-8']['actors']['employee']['nameFirstLast'] = 'Audrey K. Lewis';
    $assessments['competency-8']['actors']['employee']['nameEmployeeID'] = 'alewis';
    $assessments['competency-8']['actors']['employee']['image'] = '/content/images/prototype-actors/alewis.jpg';

/*  =============================================================================
    Assessment: Competency 11
    ========================================================================== */

    $assessments['competency-8'] = $assessments['competency-1'];
    $assessments['competency-8']['actors']['employee']['nameLastFirst'] = 'Conkling, Lilly M.';
    $assessments['competency-8']['actors']['employee']['nameFirstLast'] = 'Lilly M. Conkling';
    $assessments['competency-8']['actors']['employee']['nameEmployeeID'] = 'lconkling';
    $assessments['competency-8']['actors']['employee']['image'] = '/content/images/prototype-actors/alewis.jpg';

/*  =============================================================================
    Assessment: Competency 12
    ========================================================================== */

    $assessments['competency-8'] = $assessments['competency-2'];
    $assessments['competency-8']['actors']['employee']['nameLastFirst'] = 'Hancock, Johnny K.';
    $assessments['competency-8']['actors']['employee']['nameFirstLast'] = 'Johnny K. Hancock';
    $assessments['competency-8']['actors']['employee']['nameEmployeeID'] = 'jHancock';
    $assessments['competency-8']['actors']['employee']['image'] = '/content/images/prototype-actors/alewis.jpg';

/*  =============================================================================
    Assessment: Competency 13
    ========================================================================== */

    $assessments['competency-8'] = $assessments['competency-3'];
    $assessments['competency-8']['actors']['employee']['nameLastFirst'] = 'Bruno, Brad K.';
    $assessments['competency-8']['actors']['employee']['nameFirstLast'] = 'Brad K. Bruno';
    $assessments['competency-8']['actors']['employee']['nameEmployeeID'] = 'bbruno';
    $assessments['competency-8']['actors']['employee']['image'] = '/content/images/prototype-actors/alewis.jpg';


/*  =============================================================================
    Assessment: Competency 14
    ========================================================================== */

    $assessments['competency-14'] = $assessments['competency-1'];
    $assessments['competency-14']['actors']['employee']['nameLastFirst'] = 'Andrzejewski, Alexa A.';
    $assessments['competency-14']['actors']['employee']['nameFirstLast'] = 'Alexa A. Andrzejewski';
    $assessments['competency-14']['actors']['employee']['nameEmployeeID'] = 'aandrzejewski';
    $assessments['competency-14']['actors']['employee']['image'] = '/content/images/prototype-actors/ladylexy.jpg';
    $assessments['competency-14']['actors']['peer-1']['nameLastFirst'] = 'Juniper, Stephanie P.';
    $assessments['competency-14']['actors']['peer-1']['nameFirstLast'] = 'Stephanie P. Juniper';
    $assessments['competency-14']['actors']['peer-1']['nameEmployeeID'] = 'sjuniper';
    $assessments['competency-14']['actors']['peer-1']['image'] = '/content/images/avatar.jpg';

/*  =============================================================================
    Assessment: Performance 1
    ========================================================================== */

    $assessments['performance-1'] = array(
        'title' => 'Annual Performance Appraisal',
        'description' => 'This assessment is intended to measure the Frontline Nurse\'s critical thinking abilities, an essential component of a nurses\' performance. This brief but critical assessment measures the primary core skills essential for critical thinking. The results will guide your individual development plan.',
        'due' => date('M j, Y',strtotime('+30days')),
        'averageRatings' => $commonRatingScale,
        'optionsReflectivePlan' => true,
        'optionsIsReflectivePlan' => false,
        'optionsShowPeerNames' => true,
        'optionsShowPeerRatings' => true,
        'sections' => array(
            array(
                'title' => 'Job Description',
                'dynamic' => 'Jobs',
                'average' => false,
                'statements' => array('statement-1'),
            ),
            array(
                'title' => 'Organizational Expectations',
                'dynamic' => false,
                'average' => true,
                'statements' => array('statement-2','statement-3','statement-4'),
            ),
            array(
                'title' => 'Performance Standards',
                'dynamic' => false,
                'average' => true,
                'statements' => array('statement-5','statement-6','statement-7'),
            ),
            array(
                'title' => 'Goals',
                'dynamic' => 'Goals',
                'average' => false,
                'statements' => array('statement-8'),
            ),
        ),
        'statements' => array(
            'statement-1' => array(
                'id' => 'statement-1',
                'title' => 'Registered Nurse',
                'description' => 'The Registered Nurse provides professional nursing care to patients within an assigned department using the nursing process, functions as a liaison between patient and physician, and practices in the roles of care provider, educator, and member of the interdisciplinary team.',
                'content' => '
                    <section class="section">
                        <h2>Job Requirements</h2>
                        <section class="section">
                            <h3>Minimum Education</h3>
                            <ul>
                                <li>Graduate of an accredited school of nursing.
                                </li><li>Bachelor’s degree in nursing (BSN) preferred.</li>
                            </ul>
                        </section>
                        <section class="section">
                            <h3>Minimum Work Experience</h3>
                            <ul>
                                <li>Minimum 1 year post-graduate acute care hospital experience preferred.</li>
                                <li>Experience preferred in appropriate clinical care areas.</li>
                            </ul>
                        </section>
                        <section class="section">
                            <h3>Required Skills</h3>
                            <ul>
                                <li>Ability to function independently, and as part of a team.</li>
                                <li>Empathy for the needs of patients.</li>
                                <li>Effective oral and written communication skills.</li>
                                <li>Ability to communicate through spoken and written English.</li>
                                <li>Detail oriented, with ability to prioritize and multitask.</li>
                                <li>Ability to apply sound judgment with clinical skills for optimal patient care.</li>
                                <li>Demonstrates flexibility by accepting and supporting changes in work assignments as related to department andpatient needs.</li>
                                <li>Strong interpersonal communication and customer service skills.</li>
                                <li>Basic computer skills.</li>
                                <li>Proficient in working with all ages and patient populations.</li>
                                <li>Knowledge of appropriate equipment, policies, procedures, and strategies to promote effective patient outcomes.</li>
                            </ul>
                        </section>
                    </section>
                    <section class="section">
                        <h2>Functional Demands</h2>
                        <ul>
                            <li>Prolonged periods of standing and walking.</li>
                            <li>Lifting, pushing, pulling up to 40 pounds.</li>
                            <li>Transferring, repositioning patients.</li>
                            <li>Reaching, stooping, bending, kneeling, and crouching for patient care functions.</li>
                            <li>Ability to perform effectively in a stressful and fast-paced environment.</li>
                            <li>Ability to pass all required health and other screening tests.</li>
                        </ul>
                    </section>
                    <section class="section">
                        <h2>Organization Expectations</h2>
                        <ul>
                            <li>Provides a positive and professional representation of the organization.</li>
                            <li>Promotes culture of safety for patients and employees through proper identification, reporting, documentation, and prevention.</li>
                            <li>Maintains hospital standards for a clean and quiet patient environment to maintain a positive patient care experience.</li>
                            <li>Maintains competency and knowledge of current standards of practice, trends, and developments in related scope of job role or practice.</li>
                            <li>Adheres to infection-control policies and protocols, medication administration and storage procedures, and controlled substance regulations.</li>
                            <li>Participates in ongoing quality improvement activities.</li>
                            <li>Maintains compliance with organization’s policies, as well as established practices, protocols, and procedures of the position, department, and applicable professional standards.</li>
                            <li>Complies with organizational and regulatory policies for handling confidential patient information.</li>
                            <li>Demonstrates excellent customer service through his/her attitude and actions, consistent with the standards contained in the Vision, Mission, and Values of the organization.</li>
                            <li>Adheres to professional standards, hospital policies and procedures, federal, state, and local requirements, and TJC standards and/or standards from other accrediting bodies.</li>
                        </ul>
                    </section>
                    <section class="section">
                        <h2>Essential Functions</h2>
                        <ul>
                            <li>Receives a report from the previous shift of all patients and identifies special patient care needs. Adjusts patient assignments as necessary to meet special needs.</li>
                            <li>Makes patient rounds and notes problems for follow-up.</li>
                            <li>Assists staff nurses in their evaluation and assessment of patient needs.</li>
                            <li>Manages scheduling of patients\' appointments.</li>
                            <li>Orders medications as prescribed.</li>
                            <li>Participates in staff conferences as appropriate.</li>
                            <li>Makes nursing assignments for the next day.</li>
                            <li>Assists in direct patient care as need is identified.</li>
                            <li>Performs other duties as assigned by the Nursing Coordinator.</li>
                        </ul>
                    </section>
                ',
                'options' => array('ratings' => $commonRatingScale),
            ),
            'statement-2' => array(
                'id' => 'statement-2',
                'title' => 'Mission Vision Value',
                'description' => 'Supports the mission, vision, and values of the organization.',
                'content' => $commonStatementContent,
                'options' => array('ratings' => $commonRatingScale),
            ),
            'statement-3' => array(
                'id' => 'statement-3',
                'title' => 'Service to Customers and Patients',
                'description' => 'Demonstrates service commitment to key constituents, patients, coworkers, and organization.',
                'content' => $commonStatementContent,
                'options' => array('ratings' => $commonRatingScale),
            ),
            'statement-4' => array(
                'id' => 'statement-4',
                'title' => 'Integrity',
                'description' => 'Acts with integrity.',
                'content' => $commonStatementContent,
                'options' => array('ratings' => $commonRatingScale),
            ),
            'statement-5' => array(
                'id' => 'statement-5',
                'title' => 'Professional Development',
                'description' => 'Communicates effectively with others.',
                'content' => $commonStatementContent,
                'options' => array('ratings' => $commonRatingScale),
            ),
            'statement-6' => array(
                'id' => 'statement-6',
                'title' => 'Effective Communication',
                'description' => 'Communicates effectively with others.',
                'content' => $commonStatementContent,
                'options' => array('ratings' => $commonRatingScale),
            ),
            'statement-7' => array(
                'id' => 'statement-7',
                'title' => 'Collaboration',
                'description' => 'Collaborates effectively in team environment.',
                'content' => $commonStatementContent,
                'options' => array('ratings' => $commonRatingScale),
            ),
            'statement-7' => array(
                'id' => 'statement-7',
                'title' => 'Patient Controlled Analgesia - PCA',
                'description' => 'Safely cares for patient receiving PCA.',
                'content' => $commonStatementContent,
                'options' => array('ratings' => $commonRatingScale),
            ),
            'statement-8' => array(
                'id' => 'statement-8',
                'title' => 'Participate in Department Engagement Team',
                'description' => 'Contribute to ES Department Engagement Team on inititatives to improve work environment and team collaboration.',
                'content' => '
                    <section class="section">
                        <h3>Parent Goal</h3>
                        <p><a href="#">Unit based engagement scores to increase by 5% each year.</a></p>
                    </section>
                    <section class="section">
                        <h3>Details</h3>
                        <ul>
                            <li><b>Type:</b> Individual</li>
                            <li><b>Start Date:</b> '. date('M j, Y',strtotime('-90days')).'</li>
                        </ul>
                    </section>
                ',
                'options' => array('ratings' => $commonRatingScale),
            ),
        ),
        'actors' => array(
            'rater' => array(
                'id' => 'rater',
                'role' => 'rater',
                'nameLastFirst' => 'Crane, Darcy L.',
                'nameFirstLast' => 'Darcy L. Crane',
                'nameEmployeeID' => 'dcrane',
                'image' => '/content/images/prototype-actors/allisongrayce.jpg',
            ),
            'employee' => array(
                'id' => 'employee',
                'role' => 'employee',
                'nameLastFirst' => 'Juniper, Stephanie P.',
                'nameFirstLast' => 'Stephanie P. Juniper',
                'nameEmployeeID' => 'sjuniper',
                'image' => '/content/images/avatar.jpg',
            ),
            'peer-1' => array(
                'id' => 'peer-1',
                'role' => 'peer',
                'nameLastFirst' => 'Andrzejewski, Alexa A.',
                'nameFirstLast' => 'Alexa A. Andrzejewski',
                'nameEmployeeID' => 'aandrzejewski',
                'image' => '/content/images/prototype-actors/ladylexy.jpg',
            ),
            'peer-2' => array(
                'id' => 'peer-2',
                'role' => 'peer',
                'nameLastFirst' => 'Ng, Grace C.',
                'nameFirstLast' => 'Grace C. Ng',
                'nameEmployeeID' => 'gng',
                'image' => '/content/images/prototype-actors/uxceo.jpg',
            ),
            'peer-3' => array(
                'id' => 'peer-3',
                'role' => 'peer',
                'nameLastFirst' => 'Chanda, Himanshu Y.',
                'nameFirstLast' => 'Himanshu Y. Chanda',
                'nameEmployeeID' => 'hchanda',
                'image' => '/content/images/prototype-actors/himanshuchanda.jpg',
            ),
        ),
        'ratingSets' => array(
            // No ratings
            0 => array(),
            // Some Employee Ratings / 1 Peer / No Rater / None Visible
            1 => array(
                'statement-1' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-2' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-3' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-4' => array(
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-5' => array(
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-6' => array(
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-7' => array(
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-8' => array(
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
            ),
            // All Employee Ratings / All Peers / No Rater / None Visible
            2 => array(
                'statement-1' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-2' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-3' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-4' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-5' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-6' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-7' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-8' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
            ),
            // All Employee Ratings / All Peers / Some Rater / None Visible
            3 => array(
                'statement-1' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-2' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-3' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-4' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-5' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-6' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-7' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-8' => array(
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
            ),
            // All Ratings / None Visible
            4 => array(
                'statement-1' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-2' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-3' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-4' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-5' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-6' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-7' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-8' => array(
                    'rater' => $commonRatings['rater'],
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
            ),
            // All Ratings / Rater Visible
            5 => array(
                'statement-1' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-2' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-3' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-4' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-5' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-6' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-7' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
                'statement-8' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => $commonRatings['employee'],
                    'peer-1' => $commonRatings['peer-1'],
                    'peer-2' => $commonRatings['peer-2'],
                    'peer-3' => $commonRatings['peer-3'],
                ),
            ),
            // All Ratings / All Visible
            6 => array(
                'statement-1' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
                    'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
                    'peer-2' => array_merge($commonRatings['peer-2'],array('visible'=>true)),
                    'peer-3' => array_merge($commonRatings['peer-3'],array('visible'=>true)),
                ),
                'statement-2' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
                    'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
                    'peer-2' => array_merge($commonRatings['peer-2'],array('visible'=>true)),
                    'peer-3' => array_merge($commonRatings['peer-3'],array('visible'=>true)),
                ),
                'statement-3' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
                    'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
                    'peer-2' => array_merge($commonRatings['peer-2'],array('visible'=>true)),
                    'peer-3' => array_merge($commonRatings['peer-3'],array('visible'=>true)),
                ),
                'statement-4' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
                    'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
                    'peer-2' => array_merge($commonRatings['peer-2'],array('visible'=>true)),
                    'peer-3' => array_merge($commonRatings['peer-3'],array('visible'=>true)),
                ),
                'statement-5' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
                    'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
                    'peer-2' => array_merge($commonRatings['peer-2'],array('visible'=>true)),
                    'peer-3' => array_merge($commonRatings['peer-3'],array('visible'=>true)),
                ),
                'statement-6' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
                    'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
                    'peer-2' => array_merge($commonRatings['peer-2'],array('visible'=>true)),
                    'peer-3' => array_merge($commonRatings['peer-3'],array('visible'=>true)),
                ),
                'statement-7' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
                    'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
                    'peer-2' => array_merge($commonRatings['peer-2'],array('visible'=>true)),
                    'peer-3' => array_merge($commonRatings['peer-3'],array('visible'=>true)),
                ),
                'statement-8' => array(
                    'rater' => array_merge($commonRatings['rater'],array('visible'=>true)),
                    'employee' => array_merge($commonRatings['employee'],array('visible'=>true)),
                    'peer-1' => array_merge($commonRatings['peer-1'],array('visible'=>true)),
                    'peer-2' => array_merge($commonRatings['peer-2'],array('visible'=>true)),
                    'peer-3' => array_merge($commonRatings['peer-3'],array('visible'=>true)),
                ),
            ),
        )
    );


/*  =============================================================================
    Assessment: Performance 2
    ========================================================================== */

    $assessments['performance-2'] = $assessments['performance-1'];
    $assessments['performance-2']['title'] = 'Nursing Fundamentals Appraisal';

/*  =============================================================================
    Assessment: Performance 3
    ========================================================================== */

    $assessments['performance-3'] = $assessments['performance-1'];
    $assessments['performance-3']['title'] = 'Nursing Fundamentals Appraisal 3';

/*  =============================================================================
    Assessment: Performance 4
    ========================================================================== */

    $assessments['performance-4'] = $assessments['performance-1'];
    $assessments['performance-4']['title'] = 'Nursing Fundamentals Appraisal 3';

/*  =============================================================================
    Assessment: Performance 5
    ========================================================================== */

    $assessments['performance-5'] = $assessments['performance-1'];
    $assessments['performance-5']['title'] = 'Nursing Fundamentals Appraisal 2';

/*  =============================================================================
    Assessment: Performance 6
    ========================================================================== */

    $assessments['performance-6'] = $assessments['performance-1'];
    $assessments['performance-6']['title'] = 'Nursing Fundamentals Appraisal 2';


?>