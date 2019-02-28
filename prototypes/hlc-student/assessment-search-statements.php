<?php 
//session_start();
//$_SESSION["returnFromstatement"] = true;

include "includes/helpers/helpers.php";
include "includes/data/assessments.php";

$patterns['start']['title'] = 'Statement Search';
$patterns['focus']['title'] = 'Statement Search';

$patterns['header'] = array(
    'classes' => array('site-header--assessments'),
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">',
    'mainNav' => '
        <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
        <li class="{active=todo}"><a href="todo.php?rater">To Do</a></li>
        <li class="{active=completed}"><a href="/completed-filtered.php">Completed</a></li>
        <li class="{active=profile} dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="/advanced-practice.php">Advanced Practice</a></li>
                <li><a href="/certifications.php">Certifications</a></li>
                <li><a href="/documents.php">Documents</a></li>
                <li><a href="/education.php">Education</a></li>
                <li><a href="/goals.php">Goals</a></li>
                <li><a href="/job-descriptions.php">Job Descriptions</a></li>
                <li><a href="/disciplines-licenses.php">Licenses</a></li>
                <li><a href="/notes.php">Notes</a></li>
                <li><a href="/personal-information.php">Personal Information</a></li>
            </ul>
        </li>
        <li class="{active=raters}"><a href="/assessment-overview.php">Raters</a></li>
        <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'raters',
);

$assessmentID = (!empty($_GET['assessment']))?$_GET['assessment']:'competency-1';
$assessment = $assessments[$assessmentID];
$assessmentTitle = $assessment['title'];
$sectionTitle = (!empty($_GET['section']))?$_GET['section']:'Job Description';
$single = isset($_GET['single']);

// focus is missing the type meta in the primary area
$patterns['focus']['meta_primary'] = array(
    // array(
    //     'label' => 'For:',
    //     'value' => '<a href="assessment.php" class="meta-value">'.$assessment['title'].'</a>',
    //     'attributes' => array(
    //         array('class','meta-hidden-xs'),
    //     )
    // )
);


// if($single) {
//     $patterns['focus']['meta_secondary'] = array(
//         array(
//             'label' => 'Section:',
//             'value' =>  $sectionTitle,
//         ),
//         array(
//             'label' => 'Assessment:',
//             'value' =>  $assessmentTitle,
//         ),
//         array(
//             'label' => 'Employee:',
//             'value' =>  $assessment['actors']['employee']['nameFirstLast'],
//         ),
//     );
// }
// else {
    $patterns['focus']['meta_secondary'] = array(
        array(
            'label' => 'Section:',
            'value' =>  $sectionTitle,
        ),
        
    );
//}
    


$statements = array(
    array(
        'title' => $assessment['statements']['statement-1']['title'],
        'description' => $assessment['statements']['statement-1']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'In Development',
        'data-status' => 'indev'
    ),
    array(
        'title' => $assessment['statements']['statement-2']['title'],
        'description' => $assessment['statements']['statement-2']['description'],
        'date' => date('M j, Y',strtotime('-300days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-3']['title'],
        'description' => $assessment['statements']['statement-3']['description'],
        'date' => date('M j, Y',strtotime('-196days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-4']['title'],
        'description' => $assessment['statements']['statement-4']['description'],
        'date' => date('M j, Y',strtotime('-95days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Reviewed',
        'data-status' => 'reviewed'
    ),
    array(
        'title' => $assessment['statements']['statement-5']['title'],
        'description' => $assessment['statements']['statement-5']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-6']['title'],
        'description' => $assessment['statements']['statement-6']['description'],
        'date' => date('M j, Y',strtotime('-400days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Dev Complete',
        'data-status' => 'devcomp'
    ),
    array(
        'title' => $assessment['statements']['statement-7']['title'],
        'description' => $assessment['statements']['statement-7']['description'],
        'date' => date('M j, Y',strtotime('-5days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
        array(
        'title' => $assessment['statements']['statement-1']['title'],
        'description' => $assessment['statements']['statement-1']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'In Development',
        'data-status' => 'indev'
    ),
    array(
        'title' => $assessment['statements']['statement-2']['title'],
        'description' => $assessment['statements']['statement-2']['description'],
        'date' => date('M j, Y',strtotime('-300days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-3']['title'],
        'description' => $assessment['statements']['statement-3']['description'],
        'date' => date('M j, Y',strtotime('-196days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-4']['title'],
        'description' => $assessment['statements']['statement-4']['description'],
        'date' => date('M j, Y',strtotime('-95days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-5']['title'],
        'description' => $assessment['statements']['statement-5']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-6']['title'],
        'description' => $assessment['statements']['statement-6']['description'],
        'date' => date('M j, Y',strtotime('-400days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'In Development',
        'data-status' => 'indev'
    ),
    array(
        'title' => $assessment['statements']['statement-7']['title'],
        'description' => $assessment['statements']['statement-7']['description'],
        'date' => date('M j, Y',strtotime('-5days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Reviewed',
        'data-status' => 'reviewed'
    ),
     array(
        'title' => $assessment['statements']['statement-1']['title'],
        'description' => $assessment['statements']['statement-1']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'In Development',
        'data-status' => 'indev'
    ),
    array(
        'title' => $assessment['statements']['statement-2']['title'],
        'description' => $assessment['statements']['statement-2']['description'],
        'date' => date('M j, Y',strtotime('-300days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-3']['title'],
        'description' => $assessment['statements']['statement-3']['description'],
        'date' => date('M j, Y',strtotime('-196days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Development Complete',
        'data-status' => 'devcomp'
    ),
    array(
        'title' => $assessment['statements']['statement-4']['title'],
        'description' => $assessment['statements']['statement-4']['description'],
        'date' => date('M j, Y',strtotime('-95days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Reviewed',
        'data-status' => 'reviewed'
    ),
    array(
        'title' => $assessment['statements']['statement-5']['title'],
        'description' => $assessment['statements']['statement-5']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-6']['title'],
        'description' => $assessment['statements']['statement-6']['description'],
        'date' => date('M j, Y',strtotime('-400days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Dev Complete',
        'data-status' => 'devcomp'
    ),
    array(
        'title' => $assessment['statements']['statement-7']['title'],
        'description' => $assessment['statements']['statement-7']['description'],
        'date' => date('M j, Y',strtotime('-5days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
        array(
        'title' => $assessment['statements']['statement-1']['title'],
        'description' => $assessment['statements']['statement-1']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'In Development',
        'data-status' => 'indev'
    ),
    array(
        'title' => $assessment['statements']['statement-2']['title'],
        'description' => $assessment['statements']['statement-2']['description'],
        'date' => date('M j, Y',strtotime('-300days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-3']['title'],
        'description' => $assessment['statements']['statement-3']['description'],
        'date' => date('M j, Y',strtotime('-196days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-4']['title'],
        'description' => $assessment['statements']['statement-4']['description'],
        'date' => date('M j, Y',strtotime('-95days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
        array(
        'title' => $assessment['statements']['statement-6']['title'],
        'description' => $assessment['statements']['statement-6']['description'],
        'date' => date('M j, Y',strtotime('-400days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Dev Complete',
        'data-status' => 'devcomp'
    ),
    array(
        'title' => $assessment['statements']['statement-7']['title'],
        'description' => $assessment['statements']['statement-7']['description'],
        'date' => date('M j, Y',strtotime('-5days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
        array(
        'title' => $assessment['statements']['statement-1']['title'],
        'description' => $assessment['statements']['statement-1']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'In Development',
        'data-status' => 'indev'
    ),
    array(
        'title' => $assessment['statements']['statement-2']['title'],
        'description' => $assessment['statements']['statement-2']['description'],
        'date' => date('M j, Y',strtotime('-300days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-3']['title'],
        'description' => $assessment['statements']['statement-3']['description'],
        'date' => date('M j, Y',strtotime('-196days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-4']['title'],
        'description' => $assessment['statements']['statement-4']['description'],
        'date' => date('M j, Y',strtotime('-95days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-6']['title'],
        'description' => $assessment['statements']['statement-6']['description'],
        'date' => date('M j, Y',strtotime('-400days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'In Development',
        'data-status' => 'indev'
    ),
    array(
        'title' => $assessment['statements']['statement-7']['title'],
        'description' => $assessment['statements']['statement-7']['description'],
        'date' => date('M j, Y',strtotime('-5days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Reviewed',
        'data-status' => 'reviewed'
    ),
     array(
        'title' => $assessment['statements']['statement-1']['title'],
        'description' => $assessment['statements']['statement-1']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'In Development',
        'data-status' => 'indev'
    ),
    array(
        'title' => $assessment['statements']['statement-2']['title'],
        'description' => $assessment['statements']['statement-2']['description'],
        'date' => date('M j, Y',strtotime('-300days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-3']['title'],
        'description' => $assessment['statements']['statement-3']['description'],
        'date' => date('M j, Y',strtotime('-196days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Development Complete',
        'data-status' => 'devcomp'
    ),
    array(
        'title' => $assessment['statements']['statement-4']['title'],
        'description' => $assessment['statements']['statement-4']['description'],
        'date' => date('M j, Y',strtotime('-95days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Reviewed',
        'data-status' => 'reviewed'
    ),
    array(
        'title' => $assessment['statements']['statement-5']['title'],
        'description' => $assessment['statements']['statement-5']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-6']['title'],
        'description' => $assessment['statements']['statement-6']['description'],
        'date' => date('M j, Y',strtotime('-400days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Dev Complete',
        'data-status' => 'devcomp'
    ),
    array(
        'title' => $assessment['statements']['statement-7']['title'],
        'description' => $assessment['statements']['statement-7']['description'],
        'date' => date('M j, Y',strtotime('-5days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
        array(
        'title' => $assessment['statements']['statement-1']['title'],
        'description' => $assessment['statements']['statement-1']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'In Development',
        'data-status' => 'indev'
    ),
    array(
        'title' => $assessment['statements']['statement-2']['title'],
        'description' => $assessment['statements']['statement-2']['description'],
        'date' => date('M j, Y',strtotime('-300days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-3']['title'],
        'description' => $assessment['statements']['statement-3']['description'],
        'date' => date('M j, Y',strtotime('-196days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-4']['title'],
        'description' => $assessment['statements']['statement-4']['description'],
        'date' => date('M j, Y',strtotime('-95days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
        array(
        'title' => $assessment['statements']['statement-6']['title'],
        'description' => $assessment['statements']['statement-6']['description'],
        'date' => date('M j, Y',strtotime('-400days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Dev Complete',
        'data-status' => 'devcomp'
    ),
    array(
        'title' => $assessment['statements']['statement-7']['title'],
        'description' => $assessment['statements']['statement-7']['description'],
        'date' => date('M j, Y',strtotime('-5days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
        array(
        'title' => $assessment['statements']['statement-1']['title'],
        'description' => $assessment['statements']['statement-1']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'In Development',
        'data-status' => 'indev'
    ),
    array(
        'title' => $assessment['statements']['statement-2']['title'],
        'description' => $assessment['statements']['statement-2']['description'],
        'date' => date('M j, Y',strtotime('-300days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-3']['title'],
        'description' => $assessment['statements']['statement-3']['description'],
        'date' => date('M j, Y',strtotime('-196days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-5']['title'],
        'description' => $assessment['statements']['statement-5']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-6']['title'],
        'description' => $assessment['statements']['statement-6']['description'],
        'date' => date('M j, Y',strtotime('-400days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Dev Complete',
        'data-status' => 'devcomp'
    ),
    array(
        'title' => $assessment['statements']['statement-7']['title'],
        'description' => $assessment['statements']['statement-7']['description'],
        'date' => date('M j, Y',strtotime('-5days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
        array(
        'title' => $assessment['statements']['statement-1']['title'],
        'description' => $assessment['statements']['statement-1']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'In Development',
        'data-status' => 'indev'
    ),
    array(
        'title' => $assessment['statements']['statement-2']['title'],
        'description' => $assessment['statements']['statement-2']['description'],
        'date' => date('M j, Y',strtotime('-300days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-3']['title'],
        'description' => $assessment['statements']['statement-3']['description'],
        'date' => date('M j, Y',strtotime('-196days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-4']['title'],
        'description' => $assessment['statements']['statement-4']['description'],
        'date' => date('M j, Y',strtotime('-95days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
        array(
        'title' => $assessment['statements']['statement-6']['title'],
        'description' => $assessment['statements']['statement-6']['description'],
        'date' => date('M j, Y',strtotime('-400days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Dev Complete',
        'data-status' => 'devcomp'
    ),
    array(
        'title' => $assessment['statements']['statement-7']['title'],
        'description' => $assessment['statements']['statement-7']['description'],
        'date' => date('M j, Y',strtotime('-5days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
        array(
        'title' => $assessment['statements']['statement-1']['title'],
        'description' => $assessment['statements']['statement-1']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'In Development',
        'data-status' => 'indev'
    ),
    array(
        'title' => $assessment['statements']['statement-2']['title'],
        'description' => $assessment['statements']['statement-2']['description'],
        'date' => date('M j, Y',strtotime('-300days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-3']['title'],
        'description' => $assessment['statements']['statement-3']['description'],
        'date' => date('M j, Y',strtotime('-196days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),array(
        'title' => $assessment['statements']['statement-5']['title'],
        'description' => $assessment['statements']['statement-5']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-6']['title'],
        'description' => $assessment['statements']['statement-6']['description'],
        'date' => date('M j, Y',strtotime('-400days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Dev Complete',
        'data-status' => 'devcomp'
    ),
    array(
        'title' => $assessment['statements']['statement-7']['title'],
        'description' => $assessment['statements']['statement-7']['description'],
        'date' => date('M j, Y',strtotime('-5days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
        array(
        'title' => $assessment['statements']['statement-1']['title'],
        'description' => $assessment['statements']['statement-1']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'In Development',
        'data-status' => 'indev'
    ),
    array(
        'title' => $assessment['statements']['statement-2']['title'],
        'description' => $assessment['statements']['statement-2']['description'],
        'date' => date('M j, Y',strtotime('-300days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-3']['title'],
        'description' => $assessment['statements']['statement-3']['description'],
        'date' => date('M j, Y',strtotime('-196days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-4']['title'],
        'description' => $assessment['statements']['statement-4']['description'],
        'date' => date('M j, Y',strtotime('-95days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
        array(
        'title' => $assessment['statements']['statement-6']['title'],
        'description' => $assessment['statements']['statement-6']['description'],
        'date' => date('M j, Y',strtotime('-400days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Dev Complete',
        'data-status' => 'devcomp'
    ),
    array(
        'title' => $assessment['statements']['statement-7']['title'],
        'description' => $assessment['statements']['statement-7']['description'],
        'date' => date('M j, Y',strtotime('-5days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
        array(
        'title' => $assessment['statements']['statement-1']['title'],
        'description' => $assessment['statements']['statement-1']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'In Development',
        'data-status' => 'indev'
    ),
    array(
        'title' => $assessment['statements']['statement-2']['title'],
        'description' => $assessment['statements']['statement-2']['description'],
        'date' => date('M j, Y',strtotime('-300days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-3']['title'],
        'description' => $assessment['statements']['statement-3']['description'],
        'date' => date('M j, Y',strtotime('-196days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),array(
        'title' => $assessment['statements']['statement-5']['title'],
        'description' => $assessment['statements']['statement-5']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-6']['title'],
        'description' => $assessment['statements']['statement-6']['description'],
        'date' => date('M j, Y',strtotime('-400days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Dev Complete',
        'data-status' => 'devcomp'
    ),
    array(
        'title' => $assessment['statements']['statement-7']['title'],
        'description' => $assessment['statements']['statement-7']['description'],
        'date' => date('M j, Y',strtotime('-5days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
        array(
        'title' => $assessment['statements']['statement-1']['title'],
        'description' => $assessment['statements']['statement-1']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'In Development',
        'data-status' => 'indev'
    ),
    array(
        'title' => $assessment['statements']['statement-2']['title'],
        'description' => $assessment['statements']['statement-2']['description'],
        'date' => date('M j, Y',strtotime('-300days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-3']['title'],
        'description' => $assessment['statements']['statement-3']['description'],
        'date' => date('M j, Y',strtotime('-196days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-4']['title'],
        'description' => $assessment['statements']['statement-4']['description'],
        'date' => date('M j, Y',strtotime('-95days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
        array(
        'title' => $assessment['statements']['statement-6']['title'],
        'description' => $assessment['statements']['statement-6']['description'],
        'date' => date('M j, Y',strtotime('-400days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Dev Complete',
        'data-status' => 'devcomp'
    ),
    array(
        'title' => $assessment['statements']['statement-7']['title'],
        'description' => $assessment['statements']['statement-7']['description'],
        'date' => date('M j, Y',strtotime('-5days')),
        'category' => 'Alternative Medicine',
        'data-category' => 'altmed',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
        array(
        'title' => $assessment['statements']['statement-1']['title'],
        'description' => $assessment['statements']['statement-1']['description'],
        'date' => date('M j, Y',strtotime('-30days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'In Development',
        'data-status' => 'indev'
    ),
    array(
        'title' => $assessment['statements']['statement-2']['title'],
        'description' => $assessment['statements']['statement-2']['description'],
        'date' => date('M j, Y',strtotime('-300days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),
    array(
        'title' => $assessment['statements']['statement-3']['title'],
        'description' => $assessment['statements']['statement-3']['description'],
        'date' => date('M j, Y',strtotime('-196days')),
        'category' => 'Tenet Care',
        'data-category' => 'tenet',
        'status' => 'Approved',
        'data-status' => 'approved'
    ),



  
);
$cat1count = 0;
$cat2count = 0;
foreach($statements as $statement) {  
        if ($statement['data-category'] == 'altmed') {
            $cat1count ++;
        }
         if ($statement['data-category'] == 'tenet') {
            $cat2count ++;
        }
}


?>
<?= createSiteStart($patterns['start']); ?>
<style>
    
    .btn-success:focus, .btn-success:hover, 
    .btn-default:focus, .btn-default:hover, 
    {
        background-position:  -14px !important;
    }
     .checkable .slat {
        border-left: inherit;
    }
    .checkable-single > .select .icon {
        background-position: center 0;
    }
    .checkable-single.checkable-checked > .select .icon {
        background-position: center -30px;
    }
</style>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout layout-search">
    <div class="container">
        <section class="section section-main section-box">
          <div class="assessment-header">
                <?php 
                if(isset($_SERVER['HTTP_REFERER'])) {
                    echo '<div class="assessment-return"><a href="'.$_SERVER['HTTP_REFERER'] .'"><i class="fa fa-fw fa-chevron-left"></i>Return to Assessment Summary</a></div>';
                }
                else {
                    echo '<div class="assessment-return"><a href="assessment-performance-rater-summary.php"><i class="fa fa-fw fa-chevron-left"></i>Return to Assessment Summary</a></div>';
                }
            ?>
            </div>
            <div class="row">

                <div class="col-md-3 hidden-xs hidden-sm">
                    <section class="section section-refinement-options" data-equalize="layout-columns">
                        <section class="section section-refinement-group section-refinement-group-first">
                            <h3>Search</h3>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </section>
                        <section class="section section-refinement-group">
                            <h3>Status</h3>
                            <ul class="list-unstyled">
                                <li class="checkbox">
                                    <label><input type="checkbox" value="indev" class="status-filter " checked> In Development</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox" value="devcomp" class="status-filter "> Development Complete</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox" value="reviewed" class="status-filter "> Reviewed</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox" value="approved" class="status-filter" checked> Approved</label>
                                </li>
                            </ul>
                        </section>
                        <section class="section section-refinement-group">
                            <nav class="catalog-categories">
                            
                            <h3>Categories</h3>
                            <div class="cc-back collapse">
                            <a href="#"><i class="fa fa-fw fa-reply"></i>Back</a>
                            </div>
                            <div class="cc-current collapse">Current Category</div>
                                <div data-toggle="limit-height" data-labels="Show More|Show Less" data-height="240">
                                    <ul class="cc-categories">
                                      
                                        <li>
                                            <a href="#" class="altmed category-filter">
                                                  <div class="cc-col">Alternative Medicine (<span class="cat1total"><?= $cat1count ?></span>)</div>
                                                <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                            </a>
                                        </li>
                                        <li>
                                             <a href="#" class="tenet category-filter">
                                                    <div class="cc-col">Tenet Care (<span class="cat2total"><?= $cat2count ?></span>)</div>
                                                <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                            </a>
                                        </li>
                                      
                                    </ul>
                                </div>
                            </nav>
                        </section>
                    </section>
                </div>
                <div class="col-md-9">
                    <div class="alert alert-danger collapse" id="ValidationMessage">
                        You must select a Statement to add to the Dynamic Section
                    </div>
                    <section class="section section-results" data-equalize="layout-columns">
                    
                        <section class="section section-results-header">
                        
                            <div class="row">
                                <div class="col-md-9">
                                    <h2>Results <small class="result-count">Showing 1-25 of 31</small></h2>
                                    
                                    <div class="section section-refinement-applied">
                                        <h3>Refinements</h3>
                                        <div class="tag-group">
                                            <a href="#" class="tag">Search Term<i class="fa fa-times"></i></a>
                                            <a href="#" class="tag">Status<i class="fa fa-times"></i></a>
                                            <a href="#" class="tag">Category<i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 hidden-xs hidden-sm">
                                    <div class="section-results-header-sort">
                                        <div class="dropdown">
                                            <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Name <i class="fa fa-sort"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="active"><a href="#">Name</a></li>
                                                <li><a href="#">Owner</a></li>
                                                <li><a href="#">Date Updated</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section">
                        
                        <?php 
                        $cnt = 1;
                        foreach ($statements as $statement){
                            $content = '
                                <section class="section">
                                    <h5>Summary</h5>
                                    <p>'.$statement['description'].'</p>
                                </section>
                            ';
                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-callout','slat-toggle','statement',$statement['data-status'],$statement['data-category'])),
                                ),
                                'title' => $statement['title'],
                                'meta' => array(
                                    array(
                                        'label' => 'Owner:',
                                        'value' => 'County Memorial Hospital',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => $statement['status'],
                                    ),
                                    array(
                                        'label' => '',
                                        'value' => 'Updated: '.$statement['date'],
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                
                                'nested' => array(
                                    'hide' => array($content)
                                ),
                                'action' => array(),
                                );

                                echo '<div class="checkable">';
                                echo createSlat($slat);
                                echo '<div class="select"><label><input type="checkbox" class="checkbox"><span class="icon"></span></label></div></div>';
                            $cnt ++;
                            }

                        ?>

                        </section>

                        <?php
                            $stickybar = array(
                                'sets' => array(
                                    array(
                                        'position' => 'left',
                                        'classes' => array('visible-xs','visible-sm'),
                                        'html' => '
                                            <a href="assessment-dynamic-section.php" class="btn btn-success">Add</a>
                                            <a href="/assessment-dynamic-section.php" class="btn btn-default">Cancel</a>
                                        ',
                                    ),
                                    array(
                                        'position' => 'left',
                                        'classes' => array('visible-md','visible-lg'),
                                        'html' => '
                                            <a href="#" class="btn btn-success add-selected">Add Selected</a>
                                            <a href="/assessment-dynamic-section.php" class="btn btn-default">Cancel</a>
                                        ',
                                    ),
                                    array(
                                        'position' => 'right',
                                        'classes' => array('hidden-xs','hidden-sm'),
                                        'html' => '
                                            <div class="btn-group dropup">
                                                <button type="button" class="btn btn-default dropdown-toggle results" data-toggle="dropdown">Results  <i class="fa fa-caret-up"></i></button>
                                                <ul class="dropdown-menu result-dd" role="menu">
                                                <li class="" ><a href="#" class="perpage" data-value="5">5 per page</a></li>
                                                    <li class="active" ><a href="#" class="perpage" data-value="25">25 per page</a></li>
                                                    <li ><a href="#" data-value="50" class="perpage">50 per page</a></li>
                                                    <li><a href="#"  data-value="100" class="perpage">100 per page</a></li>
                                                    <li><a href="#" data-value="250" class="perpage">250 per page</a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default prev-pg disabled"><i class="fa fa-chevron-left"></i></a>
                                                <a href="#" class="btn btn-default next-pg"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        ',
                                    ),
                                    
                                ),
                            );
                            echo createStickybar($stickybar);
                        ?>

                    </section><!-- /section-main -->
                </div><!-- /column -->
            </div><!-- /row -->
        </section>


    </div><!-- /container -->
</div><!-- /layout -->

<!-- Modal -->
<div id="modal-refine" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <section class="section section-refinement-group">
                        <h3>Search</h3>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Status</h3>
                        <ul class="list-unstyled">
                            <li class="checkbox">
                                <label><input type="checkbox" checked> In Development</label>
                            </li>
                            <li class="checkbox">
                                <label><input type="checkbox"> Development Complete</label>
                            </li>
                            <li class="checkbox">
                                <label><input type="checkbox"> Reviewed</label>
                            </li>
                            <li class="checkbox">
                                <label><input type="checkbox" checked> Approved</label>
                            </li>
                        </ul>
                    </section>
                    <section class="section section-refinement-group">
                        <nav class="catalog-categories">
                            <h3>Categories</h3>
                            <div class="cc-back">
                                <a href="#"><i class="fa fa-fw fa-reply"></i>Back</a>
                            </div>
                            <div class="cc-current">Current Category</div>
                            <input type="hidden" id="currentCategoryData" value="">
                            <div data-toggle="limit-height" data-labels="Show More|Show Less" data-height="240">
                                <ul>
                                    <?php for($i=0;$i<10;$i++) { ?>
                                    <li>
                                        <a href="#">
                                            <div class="cc-col">Subcategory</div>
                                            <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </nav>
                    </section>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-preview" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Statement Example 1</h4>
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
                <a href="#" class="btn btn-success" data-dismiss="modal">Select</a>
                <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
var page = 1; 
var totalperpage = 25;
var totalitems = $('.statement:visible').length;
var totalFiltered = 0; 
var currentStartItem = 1;
var currentEndItem = totalitems;

    $(function(){

        ShowCount();
        filterByStatus();

        $('.next-pg').click(function() {
            GoToPage(page + 1);
        });
        $('.prev-pg').click(function() {
             GoToPage(page - 1);
        });

        $('.slat-toggle .btn').click(function(e){
            var $btn = $(this);
            e.preventDefault();
            $btn.toggleClass('btn-success btn-default');
            if($btn.hasClass('btn-success')){
                $btn.html('Selected<i class="fa fa-check visible-xs"></i>');
            } else {
                $btn.html('Select<i class="fa fa-plus visible-xs"></i>');
            }
        });
        $('.add-selected').click(function(e){
            e.preventDefault();
            if ($('.checkable-checked').length < 1){
                $('#ValidationMessage').show();
                document.body.scrollTop = document.documentElement.scrollTop = 0;
                setTimeout(function() {
                    $(document.body).scrollTop(0);
                }, 0);
            }
            else {
                $('#ValidationMessage').hide();
                 window.location.href = "assessment-dynamic-section.php?returnFromStatement&title=" + $('.checkable-checked').find('.title').text();
            }
           
        });
       
        //filter by status
        $('.status-filter').change(function(){
            filterByStatus();
            filterByCategory($('#currentCategoryData').val(), $('.cc-current').text());
        });

        function filterByStatus(){
            $('.status-filter').each(function(i){
                if(this.checked){
                    $('.statement.' + $(this).val()).parent('.checkable').show();
                }
                else {
                    $('.statement.' + $(this).val()).parent('.checkable').hide();
                }
             
            });
            totalitems = $('.statement:visible').length;
            
            ShowCount();
            
            $(window).resize();
        } 

        $('.perpage').click(function(){
            $('.result-dd li').removeClass("active");
            totalperpage = parseInt($(this).data('value'));
            $(this).parent('li').addClass("active");
          
            GoToPage(1);
            
        });

        function filterByCategory(categoryData, categoryText) {
           
            if (categoryData != '') {
                $('.cc-categories').hide();
                $(".cc-back").show();
                $('.cc-current').show();

                if($('.cc-current').text() != categoryText) {
                    $('.cc-current').text(categoryText);
                }
                $('.statement:visible').filter(':not(.' + categoryData + ')').parent('.checkable').hide();

                $('#currentCategoryData').val(categoryData);
                 totalitems = $('.statement:visible').length;

                ShowCount();

                $(window).resize();
               
            }
        }

        $('.category-filter').click(function(e){
            e.preventDefault();
            filterByCategory(this.classList[0], $(this).find('.cc-col').text().split("(")[0]);
        });
        
        $(".cc-back").click(function(){
            $('.cc-categories').show();
            $(".cc-back").hide();
            $('.cc-current').hide();
            $('.statement').parent('.checkable').show();
            $('#currentCategoryData').val('');
            filterByStatus();
        });
      
    });
     function GoToPage(pageToGoTo) {
            page = pageToGoTo;
            ShowCount();
           
            // $('.statement:visible:gt(' + ((totalperpage * page) -1) + ')').parent('.checkable').hide();


            // if(page > 1) {
            //      $('.statement:visible:lt(' + ((totalperpage * (page-1)) -1) + ')').parent('.checkable').hide();
            // }
            
            // $('.statement').parent('.checkable').show();
            // if (thepage == 1) {
            //     $('.statement:gt(' + totalperpage -1 + ')').parent('.checkable').hide();
            // }
            // else if(thepage == 2) { 
            //     $('.statement:lt(' + totalperpage + ')').parent('.checkable').hide();
            // }
             $(window).resize();
        }
          
        function ShowCount(){
            var total = $('.statement:visible').length;
            $('.prev-pg').removeClass('disabled');
            $('.next-pg').removeClass('disabled');

            if(page == 1) {
                //on page 1. disable back button.
                $('.prev-pg').addClass('disabled');
            }
            if (totalitems <= totalperpage && page > 1) {
                //was on a page greater than one 
                //have now filtered down to less records than records per page
                //send them to page one.  
                GoToPage(1);
            }
            if (Math.floor((total/totalperpage) + 1) == page) {
                //we're on the last page.  disable the go forward button.
                 $('.next-pg').addClass('disabled');
            }

            var current =$('.statement:visible').length;
            var numberStart = 1;
            var numberEnd= 0;
            
            $('.cat1total').text($('.statement.altmed:visible').length);
            $('.cat2total').text($('.statement.tenet:visible').length);

            if (page == 1 && current > totalperpage) {
                current = totalperpage; 
                numberStart = 1;
            }
            
            else {
                current = current;
                numberStart = (totalperpage * (page-1))+1;
            }

            if ((totalperpage * page) > total) {
                    numberEnd = totalitems;
            }
            else {
                    // numberEnd = ((totalperpage * page) + totalperpage);
                    numberEnd = (totalperpage * page);
            }
            currentStartItem = numberStart;
            currentEndItem = numberEnd;
          
            $('.result-count').text("Showing " + numberStart + "-" + numberEnd + " of " + total);
            $('.results').html("Results " + numberStart + "-" + numberEnd + " of " + total + "<i class='fa fa-caret-up'></i>");

            // $('.result-count').text("Showing 1-25 of 51");
            //  $('.result').text("Results 1-25 of 51");
            // $('.results').html("Results " + numberStart + "-" + numberEnd + " of " + total);
            
        }
</script>
<?= createSiteEnd(); ?>