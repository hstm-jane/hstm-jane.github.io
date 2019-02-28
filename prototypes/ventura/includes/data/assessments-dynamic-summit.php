<?php
include "includes/data/assessments.php";
$assessments = array(
    array(
        'class' => '',
        'title' => $assessments['competency-7']['title'], 
        'url' => '/assessment.php?assessment=competency-7&user=rater&state=1',
        'state' => 'Review',
        'data-state' => 'review',
        'dynamicsectionurl' => '',
        'date' => date('M j, Y',strtotime('+5days')),
        'data-date' => date('m/d/Y',strtotime('+5days')),
        'rater' => $assessments['competency-7']['actors']['rater']['nameLastFirst'],
        'rater_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'employee' => $assessments['competency-2']['actors']['employee']['nameLastFirst'],
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'peers_progress' => '<div class="progress-bar progress-bar--submitted">3 of 3</div>',
        'progress_id' => 2,
        'assignedto' => 'TBD', 
        'type-description' => "Employee Assessment"
    ),
    array(
        'class' => '',
        'title' => $assessments['competency-7']['title'],
        'url' => '/assessment.php?assessment=competency-3&user=rater&state=0&progress=3',
        'state' => 'Evaluate',
        'data-state' => 'evaluate',
        'dynamicsectionurl' => '/assessment-dynamic-section-summit.php?assessment=competency-7',
        'date' => date('M j, Y',strtotime('+10days')),
        'data-date' => date('m/d/Y',strtotime('+10days')),
        'rater' => $assessments['competency-3']['actors']['rater']['nameLastFirst'],
        'rater_progress' => '<div class="progress-bar" style="width:43%;">43%</div>',
        'employee' => $assessments['competency-7']['actors']['employee']['nameLastFirst'],
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'peers_progress' => '<div class="progress-bar" style="width:66%;">2 of 3</div>',
        'progress_id' => 2,
        'assignedto' => 'TBD', 
        'type-description' => "Employee Assessment"

    ),
    array(
        'class' => '',
        'title' => $assessments['competency-3']['title'],
        'url' => '/assessment.php?assessment=competency-7&user=rater&state=1',
        'state' => 'Approval',
        'data-state' => 'review',
        'dynamicsectionurl' => '',
        'date' => date('M j, Y',strtotime('+5days')),
        'data-date' => date('m/d/Y',strtotime('+5days')),
        'rater' => $assessments['competency-7']['actors']['rater']['nameLastFirst'],
        'rater_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'employee' => $assessments['competency-3']['actors']['employee']['nameLastFirst'],
        'employee_progress' => '<div class="progress-bar progress-bar--submitted">Submitted</div>',
        'peers_progress' => '<div class="progress-bar progress-bar--submitted">3 of 3</div>',
        'progress_id' => 2,
        'assignedto' => 'TBD', 
        'type-description' => "Employee Assessment"
    ),
    array(
        'class' => '',
        'title' => $assessments['competency-2']['title'],
        'url' => '/assessment.php?assessment=competency-3&user=rater&state=0&progress=0&no-empsignoff-alert',
        'state' => 'Evaluate',
        'data-state' => 'evaluate',
        'dynamicsectionurl' => '/assessment-dynamic-section-summit.php?assessment=competency-2',
        'date' => date('M j, Y',strtotime('+20days')),
        'data-date' => date('m/d/Y',strtotime('+20days')),
        'rater' => $assessments['competency-6']['actors']['rater']['nameLastFirst'],
        'rater_progress' => 'Not Yet Started',
        'employee' => $assessments['competency-6']['actors']['employee']['nameLastFirst'],
        'employee_progress' => 'Not Yet Started',
        'peers_progress' => '0 of 3',
        'progress_id' => 3,
        'assignedto' => '', 
        'type-description' => "Employee Assessment"
    ),
   
);

?>
