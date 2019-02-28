<?php
$assessments = array(
    array(
        'class' => ' assessment--attention',
        'title' => 'Initial Nursing Competency Appraisal',
        'title-id' => '1',
        'url' => '/assessment-newtabs.php?assessment=competency-1&user=rater&state=5&tabs',
        'state' => '<a href="#" class="js-state-detail" data-actor="Rater Darcy L. Crane">Review<span class="assessment__state-description">Rater<br>Sign&nbsp;Off</span> <i class="fa fa-info-circle"></i></a>',
        'data-state' => 'signoff',
        'date' => date('M j, Y',strtotime('-60days')),
        'data-date' => date('Y/m/d',strtotime('-60days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => '<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>',
        'data-rater-progress' => 100,
        'employee' => 'Juniper, Stephanie P.',
        'empid' => '5',
        'employee_image' => '/content/images/avatar.jpg',
        'employee_progress' => '<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>',
        'data-employee-progress' => 100,
        'peers_progress' => '<div class="progress-bar progress-bar--submitted">3 of 3</div>',
        'progress_id' => 0,
        'assignedto' => '',
        'actionable' => true,
        'type-description' => "Employee Assessment",
        'action-label' => 'Sign Off',
    ),
    array(
        'class' => ' assessment--attention',
        'title' => 'Prioritization, Organization, Delegation',
        'title-id' => '8',
        'url' => '/assessment-newtabs.php?assessment=competency-1&user=rater&state=5&tabs',
        'state' => '<a href="#" class="js-state-detail" data-actor="Rater Darcy L. Crane">Review<span class="assessment__state-description">Rater<br>Sign&nbsp;Off</span> <i class="fa fa-info-circle"></i></a>',
        'data-state' => 'signoff',
        'date' => date('M j, Y',strtotime('-55days')),
        'data-date' => date('Y/m/d',strtotime('-55days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => '<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>',
        'data-rater-progress' => 100,
        'employee' => 'Conner, Rosalyn F.',
        'empid' => '2',
        'employee_image' => '/content/images/prototype-actors/esthercrawford.jpg',
        'employee_progress' => '<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>',
        'data-employee-progress' => 100,
        'peers_progress' => '<div class="progress-bar progress-bar--submitted">3 of 3</div>',
        'progress_id' => 0,
        'assignedto' => '',
        'actionable' => false,
        'type-description' => "Employee Assessment",
        'action-label' => 'View',
    ),
    array(
        'class' => ' assessment--attention',
        'title' => 'Emergency Management of Malignancy-Associated Hypercalcemia',
        'title-id' => '5',
        'url' => '/assessment-newtabs.php?assessment=competency-2&user=rater&state=4&tabs',
        'state' => '<a href="#" class="js-state-detail" data-actor="Employee Rosalyn F. Conner">Review <span class="assessment__state-description">Employee<br>Sign&nbsp;Off</span> <i class="fa fa-info-circle"></i></a>',
        'data-state' => 'signoff',
        'date' => date('M j, Y',strtotime('-45days')),
        'data-date' => date('Y/m/d',strtotime('-45days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-rater-progress' => 100,
        'employee' => 'Montoya, Alice G.',
        'empid' => '7',
        'employee_image' => '/content/images/prototype-actors/rhein_wein.jpg',
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-employee-progress' => 100,
        'peers_progress' => '<div class="progress-bar" style="width:33%;">1 of 3</div>',
        'progress_id' => 1,
        'assignedto' => 'TBD',
        'actionable' => false,
        'type-description' => "Employee Assessment",
        'action-label' => 'View',
    ),
    array(
        'class' => ' assessment--attention',
        'title' => 'RN Community Health Competency Appraisal',
        'title-id' => '9',
        'url' => '/assessment-newtabs.php?assessment=competency-2&user=rater&state=4&tabs',
        'state' => '<a href="#" class="js-state-detail" data-actor="Employee Rosalyn F. Conner">Review <span class="assessment__state-description">Employee<br>Sign&nbsp;Off</span> <i class="fa fa-info-circle"></i></a>',
        'data-state' => 'signoff',
        'date' => date('M j, Y',strtotime('-30days')),
        'data-date' => date('Y/m/d',strtotime('-30days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-rater-progress' => 100,
        'employee' => 'Montoya, Alice G.',
          'empid' => '7',
        'employee_image' => '/content/images/prototype-actors/rhein_wein.jpg',
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-employee-progress' => 100,
        'peers_progress' => '<div class="progress-bar" style="width:33%;">1 of 3</div>',
        'progress_id' => 1,
        'assignedto' => 'TBD',
        'actionable' => false,
        'type-description' => "Employee Assessment",
        'action-label' => 'View',
    ),
    array(
        'class' => '',
        'title' => 'Initial Nursing Competency Appraisal',
        'title-id' => '1',
        'url' => '/assessment-newtabs.php?assessment=competency-2&user=rater&state=4&tabs',
        'state' => 'Review',
        'data-state' => 'review',
        'date' => date('M j, Y',strtotime('+5days')),
        'data-date' => date('Y/m/d',strtotime('+5days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-rater-progress' => 100,
        'employee' => 'Lewis, Audrey K.',
        'empid' => '6',
        'employee_image' => '/content/images/prototype-actors/alewis.jpg',
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-employee-progress' => 100,
        'peers_progress' => '<div class="progress-bar progress-bar--submitted">3 of 3</div>',
        'progress_id' => 2,
        'assignedto' => 'TBD',
        'actionable' => false,
        'type-description' => "Employee Assessment",
        'action-label' => 'Review',
    ),
    array(
        'class' => '',
        'title' => 'Healthcare Fraud, Waste, and Abuse Prevention',
        'title-id' => '6',
        'url' => '/assessment-newtabs.php?assessment=competency-8&user=rater&state=2&approval&tabs',
        'state' => '<a href="#" class="js-state-detail-approval">Approval <span class="assessment__state-description">HR Approver</span> <i class="fa fa-info-circle"></i></a>',
        'data-state' => 'approval',
        'date' => date('M j, Y',strtotime('+5days')),
        'data-date' => date('Y/m/d',strtotime('+5days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-rater-progress' => 100,
        'employee' => 'Flangan, Simon P.',
        'empid' => '3',
        'employee_image' => '/content/images/prototype-actors/himanshuchanda.jpg',
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-employee-progress' => 100,
        'peers_progress' => '<div class="progress-bar progress-bar--submitted">3 of 3</div>',
        'progress_id' => 2,
        'assignedto' => 'TBD',
        'actionable' => false,
        'type-description' => "Employee Assessment",
        'action-label' => 'View',
    ),
    array(
        'class' => '',
        'title' => 'RN Community Health Competency Appraisal',
        'title-id' => '9',
        'url' => '/assessment-newtabs.php?assessment=competency-7&user=rater&state=1&tabs',
        'state' => 'Review',
        'data-state' => 'review',
        'date' => date('M j, Y',strtotime('+7days')),
        'data-date' => date('Y/m/d',strtotime('+7days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-rater-progress' => 100,
        'employee' => 'Lewis, Audrey K.',
        'empid' => '6',
        'employee_image' => '/content/images/prototype-actors/alewis.jpg',
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-employee-progress' => 100,
        'peers_progress' => '<div class="progress-bar progress-bar--submitted">3 of 3</div>',
        'progress_id' => 2,
        'assignedto' => 'TBD',
        'actionable' => false,
        'type-description' => "Employee Assessment",
        'action-label' => 'Review',
    ),
    array(
        'class' => '',
        'title' => 'Critical Thinking in Case Management',
        'title-id' => '4',
        'url' => '/assessment-newtabs.php?assessment=competency-8&user=rater&state=2&approval&tabs',
        'state' => '<a href="#" class="js-state-detail-approval">Approval <span class="assessment__state-description">HR Approver</span> <i class="fa fa-info-circle"></i></a>',
        'data-state' => 'approval',
        'date' => date('M j, Y',strtotime('+8days')),
        'data-date' => date('Y/m/d',strtotime('+8days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-rater-progress' => 100,
        'employee' => 'Juniper, Stephanie P.',
        'empid' => '5',
        'employee_image' => '/content/images/avatar.jpg',
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-employee-progress' => 100,
        'peers_progress' => '<div class="progress-bar progress-bar--submitted">3 of 3</div>',
        'progress_id' => 2,
        'assignedto' => 'TBD',
        'actionable' => false,
        'type-description' => "Employee Assessment",
        'action-label' => 'View',
    ),
    array(
        'class' => '',
        'title' => 'RN Nursing Care of Children',
        'title-id' => '10',
        'url' => '/assessment-newtabs.php?assessment=competency-3&user=rater&state=0&progress=3&tabs',
        'state' => 'Evaluate',
        'data-state' => 'evaluate',
        'date' => date('M j, Y',strtotime('+10days')),
        'data-date' => date('Y/m/d',strtotime('+10days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => '<div class="progress-bar" style="width:43%;">43%</div>',
        'data-rater-progress' => 43,
        'employee'  => 'Chamberland, Marie S.',
        'empid' => '1',
        'employee_image' => '/content/images/prototype-actors/brynn.jpg',
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-employee-progress' => 100,
        'peers_progress' => '<div class="progress-bar" style="width:66%;">2 of 3</div>',
        'progress_id' => 2,
        'assignedto' => 'TBD',
        'actionable' => true,
        'type-description' => "Employee Assessment",
        'action-label' => 'Rate',
    ),
    array(
        'class' => '',
        'title' => 'RN Nutrition',
        'title-id' => '11',
        'url' => '/assessment-newtabs.php?assessment=competency-4&user=rater&state=0&progress=1&tabs',
        'state' => 'Evaluate',
        'data-state' => 'evaluate',
        'date' => date('M j, Y',strtotime('+15days')),
        'data-date' => date('Y/m/d',strtotime('+15days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => 'Not Yet Started',
        'data-rater-progress' => 0,
        'employee'  => 'Flangan, Simon P.',
        'empid' => '3',
        'employee_image' => '/content/images/prototype-actors/himanshuchanda.jpg',
        'employee_progress' => '<div class="progress-bar">&nbsp;In Progress&nbsp;</div>',
        'data-employee-progress' => 50,
        'peers_progress' => '<div class="progress-bar" style="width:66%;">2 of 3</div>',
        'progress_id' => 3,
        'assignedto' => 'TBD',
        'actionable' => true,
        'type-description' => "Employee Assessment",
        'action-label' => 'Rate',
    ),
    array(
        'class' => '',
        'title' => 'Communication',
        'title-id' => '3',
        'url' => '/assessment-newtabs.php?assessment=competency-6&user=rater&state=0&progress=0&tabs',
        'state' => 'Evaluate',
        'data-state' => 'evaluate',
        'date' => date('M j, Y',strtotime('+20days')),
        'data-date' => date('Y/m/d',strtotime('+20days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => 'Not Yet Started',
        'data-rater-progress' => 0,
        'employee' => 'Chamberland, Marie S.',
        'empid' => '1',
        'employee_image' => '/content/images/prototype-actors/allisongrayce.jpg',
        'employee_progress' => 'Not Yet Started',
        'data-employee-progress' => 0,
        'peers_progress' => '0 of 3',
        'progress_id' => 3,
        'assignedto' => '',
        'actionable' => true,
        'type-description' => "Employee Assessment",
        'action-label' => 'Rate',
    ),
    array(
        'class' => '',
        'title' => 'Prioritization, Organization, Delegation',
        'title-id' => '8',
        'url' => '/assessment-newtabs.php?assessment=performance-1&user=rater&tabs',
        'state' => 'Evaluate',
        'data-state' => 'evaluate',
        'date' => date('M j, Y',strtotime('+20days')),
        'data-date' => date('Y/m/d',strtotime('+20days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => 'Not Yet Started',
        'data-rater-progress' => 0,
        'employee'  => 'Flangan, Simon P.',
        'empid' => '3',
        'employee_image' => '/content/images/prototype-actors/himanshuchanda.jpg',
        'employee_progress' => 'Not Yet Started',
        'data-employee-progress' => 0,
        'peers_progress' => '0 of 3',
        'progress_id' => 4,
        'assignedto' => 'TBD',
        'actionable' => true,
        'type-description' => "Employee Assessment",
        'action-label' => 'Rate',
    ),
    array(
        'class' => '',
        'title' => 'Initial Nursing Competency Appraisal',
        'title-id' => '1',
        'url' => '/assessment-newtabs.php?assessment=competency-3&user=rater&state=0&progress=3&tabs',
        'state' => 'Evaluate',
        'data-state' => 'evaluate',
        'date' => date('M j, Y',strtotime('+21days')),
        'data-date' => date('Y/m/d',strtotime('+21days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => '<div class="progress-bar" style="width:75%;">75%</div>',
        'data-rater-progress' => 75,
        'employee' => 'Conner, Rosalyn F.',
        'empid' => '2',
        'employee_image' => '/content/images/prototype-actors/allisongrayce.jpg',
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-employee-progress' => 100,
        'peers_progress' => '<div class="progress-bar" style="width:66%;">2 of 3</div>',
        'progress_id' => 2,
        'assignedto' => 'TBD',
        'actionable' => true,
        'type-description' => "Employee Assessment",
        'action-label' => 'Rate',
    ),
    array(
        'class' => '',
        'title' => 'Annual Performance Appraisal',
        'title-id' => '2',
        'url' => '/assessment-newtabs.php?assessment=competency-4&user=rater&state=0&progress=1&tabs',
        'state' => 'Evaluate',
        'data-state' => 'evaluate',
        'date' => date('M j, Y',strtotime('+24days')),
        'data-date' => date('Y/m/d',strtotime('+24days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => 'Not Yet Started',
        'data-rater-progress' => 0,
        'employee' => 'Flangan, Simon P.',
        'empid' => '3',
        'employee_image' => '/content/images/prototype-actors/himanshuchanda.jpg',
        'employee_progress' => '<div class="progress-bar">&nbsp;In Progress&nbsp;</div>',
        'data-employee-progress' => 50,
        'peers_progress' => '<div class="progress-bar" style="width:66%;">2 of 3</div>',
        'progress_id' => 3,
        'assignedto' => 'TBD',
        'actionable' => true,
        'type-description' => "Employee Assessment",
       'action-label' => 'Rate',
    ),
    array(
        'class' => '',
        'title' => 'Annual Performance Appraisal',
        'title-id' => '2',
        'url' => '/assessment-newtabs.php?assessment=competency-6&user=rater&state=0&progress=0&tabs',
        'state' => 'Evaluate',
        'data-state' => 'evaluate',
        'date' => date('M j, Y',strtotime('+25days')),
        'data-date' => date('Y/m/d',strtotime('+25days')),
        'rater' => 'Peeples, Misty R.',
        'rater_progress' => 'Not Yet Started',
        'data-rater-progress' => 0,
        'employee' => 'Park, Jennifer S.',
        'empid' => '8',
        'employee_image' => '/content/images/prototype-actors/kfriedson.jpg',
        'employee_progress' => 'Not Yet Started',
        'data-employee-progress' => 0,
        'peers_progress' => '0 of 3',
        'progress_id' => 3,
        'assignedto' => '',
        'actionable' => true,
        'type-description' => "Employee Assessment",
        'action-label' => 'Rate',
    ),
    array(
        'class' => '',
        'title' => 'Nursing Skills Assessment Reflective Plan',
        'title-id' => '17',
        'url' => '/assessment-newtabs.php?assessment=performance-1&user=rater&tabs',
        'state' => 'Evaluate',
        'data-state' => 'evaluate',
        'date' => date('M j, Y',strtotime('+25days')),
        'data-date' => date('Y/m/d',strtotime('+25days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => 'Not Yet Started',
        'data-rater-progress' => 0,
        'employee' => 'Lewis, Audrey K.',
        'empid' => '6',
        'employee_image' => '/content/images/prototype-actors/alewis.jpg',
        'employee_progress' => 'Not Yet Started',
        'data-employee-progress' => 0,
        'peers_progress' => '0 of 3',
        'progress_id' => 4,
        'assignedto' => 'TBD',
        'actionable' => true,
        'type-description' => "Employee Assessment",
        'action-label' => 'View',
    ),
     array(
        'class' => ' ',
        'title' => 'RN Community Health Competency Appraisal',
        'title-id' => '9',
        'url' => '/assessment-newtabs.php?assessment=competency-2&user=rater&state=4&tabs',
        'state' => '<a href="#" class="js-state-detail" data-actor="Employee Rosalyn F. Conner">Review <span class="assessment__state-description">Employee<br>Sign&nbsp;Off</span> <i class="fa fa-info-circle"></i></a>',
        'data-state' => 'signoff',
        'date' => date('M j, Y',strtotime('+30days')),
        'data-date' => date('Y/m/d',strtotime('+30days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-rater-progress' => 100,
        'employee' => 'Conner, Rosalyn F.',
        'empid' => '2',
        'employee_image' => '/content/images/prototype-actors/esthercrawford.jpg',
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-employee-progress' => 100,
        'peers_progress' => '<div class="progress-bar" style="width:33%;">1 of 3</div>',
        'progress_id' => 1,
        'assignedto' => 'TBD',
        'actionable' => false,
        'type-description' => "Employee Assessment",
        'action-label' => 'View',
    ),
    array(
        'class' => '',
        'title' => 'RN Community Health Competency Appraisal',
        'title-id' => '9',
        'url' => '/assessment-newtabs.php?assessment=competency-7&user=rater&state=1&tabs',
        'state' => 'Review',
        'data-state' => 'review',
        'date' => date('M j, Y',strtotime('+35days')),
        'data-date' => date('Y/m/d',strtotime('+35days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-rater-progress' => 100,
        'employee' => 'Park, Jennifer S.',
        'empid' => '8',
        'employee_image' => '/content/images/prototype-actors/kfriedson.jpg',
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-employee-progress' => 100,
        'peers_progress' => '<div class="progress-bar progress-bar--submitted">3 of 3</div>',
        'progress_id' => 2,
        'assignedto' => 'TBD',
        'actionable' => true,
        'type-description' => "Employee Assessment",
        'action-label' => 'View',
    ),
    array(
        'class' => ' ',
        'title' => 'Critical Thinking in Case Management',
        'title-id' => '4',
        'url' => '/assessment-newtabs.php?assessment=competency-8&user=rater&state=2&approval&tabs',
        'state' => '<a href="#" class="js-state-detail-approval">Approval <span class="assessment__state-description">HR Approver</span> <i class="fa fa-info-circle"></i></a>',
        'data-state' => 'approval',
        'date' => date('M j, Y',strtotime('+45days')),
        'data-date' => date('Y/m/d',strtotime('+45days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-rater-progress' => 100,
        'employee' => 'Conner, Rosalyn F.',
        'empid' => '2',
        'employee_image' => '/content/images/prototype-actors/esthercrawford.jpg',
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-employee-progress' => 100,
        'peers_progress' => '<div class="progress-bar progress-bar--submitted">3 of 3</div>',
        'progress_id' => 2,
        'assignedto' => 'TBD',
        'actionable' => false,
        'type-description' => "Employee Assessment",
        'action-label' => 'View',
    ),
    array(
        'class' => '',
        'title' => 'Initial Nursing Competency Appraisal',
        'title-id' => '1',
        'url' => '/assessment-newtabs.php?assessment=competency-3&user=rater&state=0&progress=3&tabs',
        'state' => 'Evaluate',
        'data-state' => 'evaluate',
        'date' => date('M j, Y',strtotime('+45days')),
        'data-date' => date('Y/m/d',strtotime('+45days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => '<div class="progress-bar" style="width:22%;">22%</div>',
        'data-rater-progress' => 22,
        'employee' => 'Montoya, Alice G.',
        'empid' => '7',
        'employee_image' => '/content/images/prototype-actors/rhein_wein.jpg',
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-employee-progress' => 100,
        'peers_progress' => '<div class="progress-bar" style="width:66%;">2 of 3</div>',
        'progress_id' => 2,
        'assignedto' => 'TBD',
        'actionable' => true,
        'type-description' => "Employee Assessment",
        'action-label' => 'View',
    ),
    array(
        'class' => '',
        'title' => 'Annual Performance Appraisal',
        'title-id' => '2',
        'url' => '/assessment-newtabs.php?assessment=competency-4&user=rater&state=0&progress=1&tabs',
        'state' => 'Evaluate',
        'data-state' => 'evaluate',
        'date' => date('M j, Y',strtotime('+50days')),
        'data-date' => date('Y/m/d',strtotime('+50days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => 'Not Yet Started',
        'data-rater-progress' => 0,
        'employee'=> 'Franks, Iva R.',
        'empid' => '4',
        'employee_image' => '/content/images/prototype-actors/ladylexy.jpg',
        'employee_progress' => '<div class="progress-bar">&nbsp;In Progress&nbsp;</div>',
        'data-employee-progress' => 50,
        'peers_progress' => '<div class="progress-bar" style="width:66%;">2 of 3</div>',
        'progress_id' => 3,
        'assignedto' => 'TBD',
        'actionable' => false,
        'type-description' => "Employee Assessment",
        'action-label' => 'View',
    ),
    array(
         'class' => '',
        'title' => 'Annual Performance Appraisal',
        'title-id' => '2',
        'url' => '/assessment-newtabs.php?assessment=competency-6&user=rater&state=0&progress=0&tabs',
        'state' => 'Evaluate',
        'data-state' => 'evaluate',
        'date' => date('M j, Y',strtotime('+60days')),
        'data-date' => date('Y/m/d',strtotime('+60days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => 'Not Yet Started',
        'data-rater-progress' => 0,
        'employee' => 'Montoya, Alice G.',
        'empid' => '7',
        'employee_image' => '/content/images/prototype-actors/rhein_wein.jpg',
        'employee_progress' => 'Not Yet Started',
        'data-employee-progress' => 0,
        'peers_progress' => '0 of 3',
        'progress_id' => 3,
        'assignedto' => '',
        'actionable' => true,
        'type-description' => "Employee Assessment",
        'action-label' => 'View',
    ),
    array(
        'class' => '',
        'title' => 'Nursing Skills Assessment Reflective Plan',
        'title-id' => '17',
        'url' => '/assessment-newtabs.php?assessment=performance-1&user=rater&tabs',
        'state' => 'Evaluate',
        'data-state' => 'evaluate',
        'date' => date('M j, Y',strtotime('+60days')),
        'data-date' => date('Y/m/d',strtotime('+60days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => 'Not Yet Started',
        'data-rater-progress' => 0,
        'employee' => 'Juniper, Stephanie P.',
        'empid' => '5',
        'employee_image' => '/content/images/avatar.jpg',
        'employee_progress' => 'Not Yet Started',
        'data-employee-progress' => 0,
        'peers_progress' => '0 of 3',
        'progress_id' => 4,
        'assignedto' => 'TBD',
        'actionable' => true,
        'type-description' => "Employee Assessment",
        'action-label' => 'View',
    ),
    array(
        'class' => '',
        'title' => 'Healthcare Fraud, Waste, and Abuse Prevention',
        'title-id' => '6',
        'url' => '/assessment-newtabs.php?assessment=competency-8&user=rater&state=2&approval&tabs',
        'state' => '<a href="#" class="js-state-detail-approval">Approval <span class="assessment__state-description">HR Approver</span> <i class="fa fa-info-circle"></i></a>',
        'data-state' => 'approval',
        'date' => date('M j, Y',strtotime('+65days')),
        'data-date' => date('Y/m/d',strtotime('+65days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-rater-progress' => 100,
        'employee' => 'Juniper, Stephanie P.',
        'empid' => '5',
        'employee_image' => '/content/images/avatar.jpg',
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-employee-progress' => 100,
        'peers_progress' => '<div class="progress-bar progress-bar--submitted">3 of 3</div>',
        'progress_id' => 2,
        'assignedto' => 'TBD',
        'actionable' => false,
        'type-description' => "Employee Assessment",
        'action-label' => 'View',
    ),
    array(
        'class' => '',
        'title' => 'RN Nursing Care of Children',
        'title-id' => '10',
        'url' => '/assessment-newtabs.php?assessment=competency-3&user=rater&state=0&progress=3&tabs',
        'state' => 'Evaluate',
        'data-state' => 'evaluate',
        'date' => date('M j, Y',strtotime('+65days')),
        'data-date' => date('Y/m/d',strtotime('+65days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => '<div class="progress-bar" style="width:66%;">66%</div>',
        'data-rater-progress' => 66,
        'employee' => 'Juniper, Stephanie P.',
        'empid' => '5',
        'employee_image' => '/content/images/avatar.jpg',
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'data-employee-progress' => 100,
        'peers_progress' => '<div class="progress-bar" style="width:66%;">2 of 3</div>',
        'progress_id' => 2,
        'assignedto' => 'TBD',
        'actionable' => true,
        'type-description' => "Employee Assessment",
        'action-label' => 'View',
    ),
    array(
        'class' => '',
        'title' => 'RN Nutrition',
        'title-id' => '11',
        'url' => '/assessment-newtabs.php?assessment=competency-4&user=rater&state=0&progress=1&tabs',
        'state' => 'Evaluate',
        'data-state' => 'evaluate',
        'date' => date('M j, Y',strtotime('+70days')),
        'data-date' => date('Y/m/d',strtotime('+70days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => 'Not Yet Started',
        'data-rater-progress' => 0,
        'employee' => 'Montoya, Alice G.',
        'empid' => '7',
        'employee_image' => '/content/images/prototype-actors/rhein_wein.jpg',
        'employee_progress' => '<div class="progress-bar">&nbsp;In Progress&nbsp;</div>',
        'data-employee-progress' => 50,
        'peers_progress' => '<div class="progress-bar" style="width:66%;">2 of 3</div>',
        'progress_id' => 3,
        'assignedto' => 'TBD',
        'actionable' => true,
        'type-description' => "Employee Assessment",
        'action-label' => 'View',
    ),
    array(
        'class' => '',
        'title' => 'Initial Nursing Competency Appraisal',
        'title-id' => '12',
        'url' => 'assessment.php?assessment=competency-8&user=rater&state=2&approval&manager&tabs',
        'state' => '<a href="#" class="modal-state-detail-approval-manager2">Approval <span class="assessment__state-description">Manager<br>Level 2</span> <i class="fa fa-info-circle"></i></a>',
        'data-state' => 'approval',
        'date' => date('M j, Y',strtotime('+70days')),
        'data-date' => date('Y/m/d',strtotime('+70days')),
        'rater' => 'Crane, Darcy L.',
        'rater_progress' => 'Not Yet Started',
        'data-rater-progress' => 0,
        'employee' => 'Bruno, Brad K.',
        'empid' => '9',
        'employee_image' => '/content/images/prototype-actors/bbrune.jpg',
        'employee_progress' => 'Not Yet Started',
        'data-employee-progress' => 0,
        'peers_progress' => '0 of 3',
        'progress_id' => 4,
        'assignedto' => 'TBD',
        'actionable' => false,
        'type-description' => "Approval",
        'action-label' => 'View',
    ),

   
);
?>
