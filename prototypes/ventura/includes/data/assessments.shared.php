<?php

/*  =============================================================================
    Common Data for Reuse in Assessments
    ========================================================================== */

    // Statement Detail Content
    $commonStatementContent = '
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
                <li><a href="course-preenrollment-assessrx-1.php" target="_new"><i class="fa fa-globe fa-li"></i>AssessRx Acute Care Baseline Clinical Judgment Assessment</a></li>
                <li><a href="course-preenrollment-assessrx-2.php" target="_new"><i class="fa fa-globe fa-li"></i>AssessRx Pharmacology: RN Assessment</a></li>
                <li><a href="course-preenrollment-assessrx-3.php" target="_new"><i class="fa fa-globe fa-li"></i>AssessRx Acute Care Skills Self-Assessment</a></li>
            </ul>
        </section>
        <section class="section">
            <h3>References</h3>
            <ul class="list-unstyled">
                <li><a href="#">View References</a></li>
            </ul>
        </section>';

    $commonRatingScale = array(
        array(
            'Not Applicable',
            '<ul>
                <li>Unable to provide rating</li>
                <li>Does not effect the overall rating</li>
            </ul>',
        ),
        array(
            'Novice',
            '<ul>
                <li>Beginner with no experience</li>
                <li>Taught general rules to help perform tasks</li>
                <li>Rules are: context-free, independent of specific cases, and applied universally</li>
                <li>Rule-governed behavior is limited and inflexible</li>
                <li>Ex. “Tell me what I need to do and I’ll do it.”</li>
            </ul>',
        ),
        array(
            'Advanced Beginner',
            '<ul>
                <li>Demonstrates acceptable performance</li>
                <li>Has gained prior experience in actual situations to recognize recurring meaningful components</li>
                <li>Principles, based on experiences, begin to be formulated to guide actions</li>
            </ul>',
        ),
        array(
            'Competent',
            '<ul>
                <li>Typically a nurse with 2-3 years of experience on the job in the same area or in similar day-to-day situations</li>
                <li>More aware of long-term goals</li>
                <li>Gains perspective from planning own actions based on conscious, abstract, and analytical thinking and helps to achieve greater efficiency and organization</li>
            </ul>',
        ),
        array(
            'Proficient',
            '<ul>
                <li>Perceives and understands situations as whole parts</li>
                <li>More holistic understanding improves decision-making</li>
                <li>Learns from experiences what to expect in certain situations and how to modify plans</li>
            </ul>',
        ),
        array(
            'Expert',
            '<ul>
                <li>No longer relies on principles, rules, or guidelines to connect situations and determine actions</li>
                <li>Much more background of experience</li>
                <li>Has intuitive grasp of clinical situations</li>
            </ul>',
        ),
    );

    // Statement Rating Options
    $commonStatementOptions = array(
        'ratings' => $commonRatingScale,
        'risks' => array(
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
        'validations' => array(
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
    );

    // Common Actor Ratings
    $commonRatings = array(
        'rater' => array(
            'id' => 'rater',
            'visible' => false,
            'rating' => 5,
            'risks' => array('Low Risk','New Equipment','Policy Change','Safety','Teamwork','Time Sensitive'),
            'validations' => array('Direct Observation','Documentation Review','Evidence of Daily Work','Evidence Submission','Peer Review'),
            'comment' => 'She is very dependable and a leader on the team. She contributes during meetings and always offers constructive criticism.<br><br>She embodies our company’s vision and I put a lot of trust in her to help mentor our new hires.<br><br>I trust Stephanie and always know where I stand with her.',
            'documents' => array('',''),
            'date' => date('M j, Y',strtotime('-7days')),
        ),
        'employee' => array(
            'id' => 'employee',
            // 'actor' => 'employee',
            'visible' => false,
            'rating' => 5,
            'risks' => array('Low Risk','New Equipment','Policy Change','Safety','Teamwork','Time Sensitive'),
            'validations' => array('Direct Observation','Documentation Review','Evidence of Daily Work','Evidence Submission','Peer Review'),
            'comment' => 'Overall, I am very satisfied in the direction of my role as it has changed dramatically over the last year.<br><br>I appreciate my manager asking me for feedback and putting in action plans geared towards team goals.<br><br>A strong working relationship with colleagues makes improvement much easier.',
            'documents' => array('',''),
            'date' => date('M j, Y',strtotime('-7days')),
        ),
        'peer-1' => array(
            'id' => 'peer-1',
            'visible' => false,
            'rating' => 4,
            'risks' => array('Low Risk','New Equipment','Policy Change','Safety','Teamwork','Time Sensitive'),
            'validations' => array('Direct Observation','Documentation Review','Evidence of Daily Work','Evidence Submission','Peer Review'),
            'comment' => 'She is a great communicator and always follows up on her shared tasks.<br><br>Her unique IT background brings a new perspective and I’ve personally learned a lot from her.',
            'documents' => array(''),
            'date' => date('M j, Y',strtotime('-7days')),
        ),
        'peer-2' => array(
            'id' => 'peer-2',
            'visible' => false,
            'rating' => 4,
            'risks' => array('Low Risk','New Equipment','Policy Change','Safety','Teamwork','Time Sensitive'),
            'validations' => array('Direct Observation','Documentation Review','Evidence of Daily Work','Evidence Submission','Peer Review'),
            'comment' => 'I look to her as a role model and mentor. She is also very resourceful and can solve almost any problem.',
            'documents' => array(''),
            'date' => date('M j, Y',strtotime('-7days')),
        ),
        'peer-3' => array(
            'id' => 'peer-3',
            'visible' => false,
            'rating' => 0,
            'comment' => 'I am new and cannot rate this person',
            'date' => date('M j, Y',strtotime('-7days')),
        ),
    );

    // Common Shared Ratings
    $sharedRatings = array(
        'employee-1' => array(
            'id' => 'employee',
            'role' => 'employee',
            'nameLastFirst' => 'Juniper, Stephanie P.',
            'nameFirstLast' => 'Stephanie P. Juniper',
            'image' => '/content/images/avatar.jpg',
            'rating' => 5,
            'risks' => array('Low Risk','New Equipment','Policy Change','Safety','Teamwork','Time Sensitive'),
            'validations' => array('Direct Observation','Documentation Review','Evidence of Daily Work','Evidence Submission','Peer Review'),
            'comment' => 'Overall, I am very satisfied in the direction of my role as it has changed dramatically over the last year.<br><br>I appreciate my manager asking me for feedback and putting in action plans geared towards team goals.<br><br>A strong working relationship with colleagues makes improvement much easier.',
            'documents' => array('',''),
            'date' => date('M j, Y',strtotime('-60days')),
        ),
        'employee-2' => array(
            'id' => 'employee',
            'role' => 'employee',
            'nameLastFirst' => 'Juniper, Stephanie P.',
            'nameFirstLast' => 'Stephanie P. Juniper',
            'image' => '/content/images/avatar.jpg',
            'rating' => 5,
            'risks' => array('Low Risk','New Equipment','Policy Change','Safety','Teamwork','Time Sensitive'),
            'validations' => array('Direct Observation','Documentation Review','Evidence of Daily Work','Evidence Submission','Peer Review'),
            'comment' => 'Overall, I am very satisfied in the direction of my role as it has changed dramatically over the last year.<br><br>I appreciate my manager asking me for feedback and putting in action plans geared towards team goals.<br><br>A strong working relationship with colleagues makes improvement much easier.',
            'documents' => array('',''),
            'date' => date('M j, Y',strtotime('-120days')),
        ),
        'employee-3' => array(
            'id' => 'employee',
            'role' => 'employee',
            'nameLastFirst' => 'Juniper, Stephanie P.',
            'nameFirstLast' => 'Stephanie P. Juniper',
            'image' => '/content/images/avatar.jpg',
            'rating' => 5,
            'risks' => array('Low Risk','New Equipment','Policy Change','Safety','Teamwork','Time Sensitive'),
            'validations' => array('Direct Observation','Documentation Review','Evidence of Daily Work','Evidence Submission','Peer Review'),
            'comment' => 'Overall, I am very satisfied in the direction of my role as it has changed dramatically over the last year.<br><br>I appreciate my manager asking me for feedback and putting in action plans geared towards team goals.<br><br>A strong working relationship with colleagues makes improvement much easier.',
            'documents' => array('',''),
            'date' => date('M j, Y',strtotime('-180days')),
        ),
    );

    // Common Historical Ratings
    $historicalRatings1 = array(
        'assessment-1' => array(
            'title' => 'Nursing Skills Assessment',
            'section' => '6ss',
            'ratings' => array(
                'rater' => array(
                    'id' => 'rater',
                    'role' => 'rater',
                    'nameLastFirst' => 'Crane, Darcy L.',
                    'nameFirstLast' => 'Darcy L. Crane',
                    'image' => 'https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg',
                    'rating' => 5,
                    'risks' => array('Low Risk','New Equipment','Policy Change','Safety','Teamwork','Time Sensitive'),
                    'validations' => array('Direct Observation','Documentation Review','Evidence of Daily Work','Evidence Submission','Peer Review'),
                    'comment' => 'She is very dependable and a leader on the team. She contributes during meetings and always offers constructive criticism.<br><br>She embodies our company’s vision and I put a lot of trust in her to help mentor our new hires.<br><br>I trust Stephanie and always know where I stand with her.',
                    'documents' => array('First Document Name','Second Document Name'),
                    'date' => date('M j, Y',strtotime('-365days')),
                ),
                'employee' => array(
                    'id' => 'employee',
                    'role' => 'employee',
                    'nameLastFirst' => 'Juniper, Stephanie P.',
                    'nameFirstLast' => 'Stephanie P. Juniper',
                    'image' => '/content/images/avatar.jpg',
                    'rating' => 5,
                    'risks' => array('Low Risk','New Equipment','Policy Change','Safety','Teamwork','Time Sensitive'),
                    'validations' => array('Direct Observation','Documentation Review','Evidence of Daily Work','Evidence Submission','Peer Review'),
                    'comment' => 'Overall, I am very satisfied in the direction of my role as it has changed dramatically over the last year.<br><br>I appreciate my manager asking me for feedback and putting in action plans geared towards team goals.<br><br>A strong working relationship with colleagues makes improvement much easier.',
                    'documents' => array('First Document Name','Second Document Name'),
                    'date' => date('M j, Y',strtotime('-365days')),
                ),
                'peer-1' => array(
                    'id' => 'peer-1',
                    'role' => 'peer',
                    'nameLastFirst' => 'Andrzejewski, Alexa A.',
                    'nameFirstLast' => 'Alexa A. Andrzejewski',
                    'image' => 'https://s3.amazonaws.com/uifaces/faces/twitter/ladylexy/128.jpg',
                    'rating' => 4,
                    'risks' => array('Low Risk','New Equipment','Policy Change','Safety','Teamwork','Time Sensitive'),
                    'validations' => array('Direct Observation','Documentation Review','Evidence of Daily Work','Evidence Submission','Peer Review'),
                    'comment' => 'She is a great communicator and always follows up on her shared tasks.<br><br>Her unique IT background brings a new perspective and I’ve personally learned a lot from her.',
                    'documents' => array('Document Name'),
                    'date' => date('M j, Y',strtotime('-365days')),
                ),
                'peer-2' => array(
                    'id' => 'peer-2',
                    'role' => 'peer',
                    'nameLastFirst' => 'Ng, Grace C.',
                    'nameFirstLast' => 'Grace C. Ng',
                    'image' => 'https://s3.amazonaws.com/uifaces/faces/twitter/uxceo/128.jpg',
                    'rating' => 4,
                    'risks' => array('Low Risk','New Equipment','Policy Change','Safety','Teamwork','Time Sensitive'),
                    'validations' => array('Direct Observation','Documentation Review','Evidence of Daily Work','Evidence Submission','Peer Review'),
                    'comment' => 'I look to her as a role model and mentor. She is also very resourceful and can solve almost any problem.',
                    'documents' => array('Document Name'),
                    'date' => date('M j, Y',strtotime('-365days')),
                ),
                'peer-3' => array(
                    'id' => 'peer-3',
                    'role' => 'peer',
                    'nameLastFirst' => 'Chanda, Himanshu Y.',
                    'nameFirstLast' => 'Himanshu Y. Chanda',
                    'image' => 'https://s3.amazonaws.com/uifaces/faces/twitter/himanshuchanda/128.jpg',
                    'rating' => 0,
                    'comment' => 'I am new and cannot rate this person',
                    'date' => date('M j, Y',strtotime('-365days')),
                ),
            )
        )
    );

    $historicalRatings2 = array(
        'assessment-1' => array(
            'title' => 'Nursing Skills Assessment',
            'section' => '6ss',
            'ratings' => array(
                'rater' => array(
                    'id' => 'rater',
                    'role' => 'rater',
                    'nameLastFirst' => 'Crane, Darcy L.',
                    'nameFirstLast' => 'Darcy L. Crane',
                    'image' => 'https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg',
                    'rating' => 1,
                    'risks' => array('Low Risk','New Equipment','Policy Change','Safety','Teamwork','Time Sensitive'),
                    'validations' => array('Direct Observation','Documentation Review','Evidence of Daily Work','Evidence Submission','Peer Review'),
                    'comment' => 'She needs to put in more effort to keep the team informed of her progress. Colleagues are often not aware of work she\'s completed, resulting in confusion in front of patients.',
                    'documents' => array('First Document Name','Second Document Name'),
                    'date' => date('M j, Y',strtotime('-365days')),
                ),
                'employee' => array(
                    'id' => 'employee',
                    'role' => 'employee',
                    'nameLastFirst' => 'Juniper, Stephanie P.',
                    'nameFirstLast' => 'Stephanie P. Juniper',
                    'image' => '/content/images/avatar.jpg',
                    'rating' => 3,
                    'risks' => array('Low Risk','New Equipment','Policy Change','Safety','Teamwork','Time Sensitive'),
                    'validations' => array('Direct Observation','Documentation Review','Evidence of Daily Work','Evidence Submission','Peer Review'),
                    'comment' => 'Overall, I think I am doing the work needed. I have had some feedback to communicate better but I\'m working on it.',
                    'documents' => array('First Document Name','Second Document Name'),
                    'date' => date('M j, Y',strtotime('-365days')),
                ),
                'peer-1' => array(
                    'id' => 'peer-1',
                    'role' => 'peer',
                    'nameLastFirst' => 'Andrzejewski, Alexa A.',
                    'nameFirstLast' => 'Alexa A. Andrzejewski',
                    'image' => 'https://s3.amazonaws.com/uifaces/faces/twitter/ladylexy/128.jpg',
                    'rating' => 1,
                    'risks' => array('Low Risk','New Equipment','Policy Change','Safety','Teamwork','Time Sensitive'),
                    'validations' => array('Direct Observation','Documentation Review','Evidence of Daily Work','Evidence Submission','Peer Review'),
                    'comment' => 'She struggles with communicatation and needs to follow up on her shared tasks. I\'ve gone to help a patient not nowing the work was already completed.',
                    'documents' => array('Document Name'),
                    'date' => date('M j, Y',strtotime('-365days')),
                ),
                'peer-2' => array(
                    'id' => 'peer-2',
                    'role' => 'peer',
                    'nameLastFirst' => 'Ng, Grace C.',
                    'nameFirstLast' => 'Grace C. Ng',
                    'image' => 'https://s3.amazonaws.com/uifaces/faces/twitter/uxceo/128.jpg',
                    'rating' => 4,
                    'risks' => array('Low Risk','New Equipment','Policy Change','Safety','Teamwork','Time Sensitive'),
                    'validations' => array('Direct Observation','Documentation Review','Evidence of Daily Work','Evidence Submission','Peer Review'),
                    'comment' => 'I like working with her. She has a good attitude and wants to do bette. She could follow up more on shared tasks.',
                    'documents' => array('Document Name'),
                    'date' => date('M j, Y',strtotime('-365days')),
                ),
                'peer-3' => array(
                    'id' => 'peer-3',
                    'role' => 'peer',
                    'nameLastFirst' => 'Chanda, Himanshu Y.',
                    'nameFirstLast' => 'Himanshu Y. Chanda',
                    'image' => 'https://s3.amazonaws.com/uifaces/faces/twitter/himanshuchanda/128.jpg',
                    'rating' => 0,
                    'comment' => 'I am new and cannot rate this person',
                    'date' => date('M j, Y',strtotime('-365days')),
                ),
            )
        )
    );