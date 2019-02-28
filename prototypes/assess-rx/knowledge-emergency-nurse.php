<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<style>
.assess-rx__image-holder{
    width: 75px;
    height: 75px;
    border-radius: 50%;
    overflow: hidden;
    display:inline-block;
    vertical-align: middle;
    border: 2px solid white;
}
.assess-rx__image-holder img{
    width: 100%;
    height: 100%;
}

</style>

<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Jon Doe Results';
$patterns['focus']['title'] = '<div class="assess-rx__image-holder"><img src="./content/images/bbrune.jpg"></div> Jon Doe';

// $patterns['focus']['meta_secondary'] = array(
// 	array(
// 		'label' => 'Knowledge Assessment:',
// 		'value' => 'Emergency Nurse Competency Results',
// 	),
// 	array(
// 		'label' => 'Score: ',
// 		'value' => '88%',
// 	),
// );

$patterns['header'] = array(
	'mainNav' => '

    <li class="{active=admin} dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <i class="fa fa-angle-down"></i></a>
    <ul class="dropdown-menu">
    <li><a href="#">Assessment Results</a></li>
    <li><a href="/user-admin.php">Manage Users</a></li>

    </ul>
    </li>


    <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' => 'admin',
    'logoLarge' => './content/images/logo.png',

);

$patterns['search']['filters'] = array(
	array(
		'visible' => 'mobile',
		'header' => 'Sort',
		'controls' => array(
			'<select class="form-control js-select2"><option>Name</option><option>ID</option><option>Department</option></select>',
		),
	),
	array(
		"state" => 'open', // static / open / closed
		"header" => '',
		"controls" => array(
			'<label class="control-label">Name</label><div class="input-group"><input type="text" class="form-control" placeholder="Search"><span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span></div>',
			'<label class="control-label">Username</label><div class="input-group"><input type="text" class="form-control" placeholder="user123"><span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span></div>',
			'<label class="control-label">Department</label><div class="form-group"><input type="text" class="form-control" placeholder="Cardiology"></div>',

		),
	),

);

?>


<?=createSiteStart($patterns['start']);?>
<?=createHeader($patterns['header']);?>
<?=createFocus($patterns['focus']);?>
<style>
.assessment-results__score-card{
    border: 1px solid #ccc;
    background: #f3f3f3;
    box-shadow: 0.5px 0.5px 1px rgba(0,0,0,.2);
    width:100%;
    padding-bottom:20px;
    margin-top:20px;


}
.assessment-results__score-card h1{
    font-size:40px;
    font-weight:600;
    margin-bottom:0;
}
hr {
    margin-top:5px;
    border-color: #ccc;
}

.test-score {
    font-family: 'Merriweather', serif;
    font-size:25px;
    margin:0;
    text-align: center;
    border-radius: 50%;
    border: 2px solid #F18805;
    padding: 21px 0 0;
    width:75px;
    height:75px;
    display:inline-block;
    position: relative;
    margin-right: 5px;

    color:#F18805;
    vertical-align: top;
}
h3 img{
    width:30px;
    vertical-align: bottom;
}
.assessment-results__section{
    padding:0 15px;


}
.categories__header{
    background-color: #eee;
    font-weight:600;
    padding: 7px;
    /*border-top-right-radius: 5px;
    border-top-left-radius: 5px;*/

}
.categories .row{
    border-top: 1px solid #eee;
    padding: 7px;
}
.categories{
    border:1px solid #eee;
    text-align:center;
    /*border-radius: 5px;*/
    margin:20px auto;
}
.results-header{
 /*   border-bottom: 1px solid #ccc;*/
 /* padding: 7px 0;*/
}
h2 {
    font-weight:400;
}
h3{
    margin-top: 0;
}
.feedback{
    border: 1px solid #ececec;
    border-left: 3px solid #ccc;
    padding: 15px;
    margin: 25px auto;

}
.feedback > div > ul li{
    padding: 5px 0;
}
.low-score{
    /*border-left: 1px solid red;*/
}
.low-score > div:last-child{
    color:red;
}
h2 .separator{
    display: inline-block;
    border-left: 1px solid #ccc;
    height: 50px;
    position: relative;
    bottom: -18px;
}

.type{
    display: block;
    position: relative;
    padding: 2px 20px 2px 5px;
    color: #fff;
    border-radius: 3px;
    background-color: #F18805;
    border: 1px solid #F18805;
    font-size: 11px;
    font-weight: 600;
    max-width: 90%;
    white-space: nowrap;
}
.progress {
    margin-bottom:0;
    background-color: #FE4A49;
    background: #DD1C1A;

    color:white;
}
.progress-bar{
    border-right: 1px solid white;
    background: #5cb85c;
}
.fa {
    line-height: 1.5;
}
</style>


<div class="layout layout-search">

    <div class="container">
        <section class="section section-main section-box">
            <section class="section" style="margin-top: 0">
                <h2> <span class=" test-score">76% </span><span >Emergency Nurse Competency Exam</span> <span class="separator"></span> Assessment Results <!-- <div class="type">Knowledge Assessment</div> -->

                </h2>
                <section class="feedback">
                    <h3 class="results-header">Results by Category <i class="fa fa-tags"></i></h3>
                    <section class="assessment-results__section categories">
                        <div class="row categories__header">


                            <div class="col-md-5 text-left"> Category</div>
                            <div class="col-md-4"> Number Answered Correctly</div>
                            <div class="col-md-3"> Percentage Correct</div>

                        </div>
                        <div class="row">
                            <div class="col-md-5 text-left">Cardiovascular</div>
                            <div class="col-md-4">
                                <div class="progress ">
                                    <div class="progress-bar" style="width:100%;">3 of 3 correct</div>
                                </div>
                            </div>

                            <div class="col-md-3">100%</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 text-left">Respiratory</div>
                            <div class="col-md-4">
                                <div class="progress">
                                    <div class="progress-bar" style="width:50%;">2 of 4 correct</div>
                                </div>
                            </div>
                            <div class="col-md-3">50%</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 text-left">Gastrointestinal</div>
                            <div class="col-md-4">
                                <div class="progress">
                                    <div class="progress-bar" style="width:75%;">3 of 4 correct</div>
                                </div>
                            </div>
                            <div class="col-md-3">75%</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 text-left">Neurology</div>
                            <div class="col-md-4">
                                <div class="progress">
                                    <div class="progress-bar" style="width:83%;">5 of 6 correct</div>
                                </div>
                            </div>
                            <div class="col-md-3">83%</div>
                        </div>
                        <div class="row low-score">
                            <div class="col-md-5 text-left">Professional Issues</div>
                            <div class="col-md-4">
                                <div class="progress">0 of 1 correct
                                    <div class="progress-bar" style="width:0%;"></div>
                                </div>
                            </div>
                            <div class="col-md-3">0%</div>
                        </div>
                    </section>
                </section>
                <section class="feedback">

                    <h3>Feedback <i class="fa fa-comment" style="color: #F18805"></i></h3>
                    <div><p>Based on the questions answered incorrectly, it is recommended that Stepanie review the following topics:</p>
                        <ul>

                            <li>The most likely diagnosis for the patient who is experiencing symptoms of flank pain with hematuria</li>
                            <li>The additional disease process for which a patient with a history of intermittent claudication of the lower extremities is at high risk</li>
                            <li>
                            Diagnoses that are surgical emergencies</li>
                            <li>The appropriate dose of acetaminophen for pediatric patients</li>
                            <li>The most common symptom of appendicitis</li>
                        </div>
                    </section>

                    <section class="feedback">
                        <div class="slat-group">
                            <div class="slat-group-header">
                              <div class="slat-group-header-title">
                                <h2>Recommended Courses</h2>
                            </div>
                            <div class="slat-group-header-actions">
                                <div class="btn-group">
                                  <a href="#modal-education" data-toggle="modal" class="btn btn-default btn-sm">Assign All</a>
                                  <div class="btn-group">
                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                      <i class="fa fa-caret-down"></i>
                                  </a>
                                  <ul class="dropdown-menu dropdown-menu-right">
                                     <li>
                                        <a href="#modal-education" data-toggle="modal">Assign All</a>
                                    </li>
                                    <li>
                                        <a href="#modal-education" data-toggle="modal">Recommend All</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slat-group-content">

                    <?php
                    $slat = array(
                        'title' => 'Acute Coronoary Syndrome - 20-477389',
                        'attributes' => array(
                            array('class', array('slat')),
                        ),

                        'meta' => '
                        <ul class="meta">
                        <li><span class="meta-type">Course</span></li>
                        </ul>',
                        'action' => array(
                            'type' => 'custom',
                            'content' => '<div class="action action-split">
                            <div class="btn-group">
                            <a href="#" class="btn btn-default btn-sm hidden-xs">Assign</a>
                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Assign</a></li><li><a href="#"></a><a " >Recommend</a></li>
                            </ul>
                            </div>
                            </div>',
                        ),

                    );

                    echo createSlat($slat);

                    $slat = array(
                        'title' => 'Deep Vein Thrombosis (DVT) and Pulmonary Embolism (PE) Nursing Intervention Guide - Independent Study',
                        'attributes' => array(
                            array('class', array('slat')),
                        ),

                        'meta' => '
                        <ul class="meta">
                        <li><span class="meta-type">Course</span></li>
                        </ul>',
                        'action' => array(
                            'type' => 'custom',
                            'content' => '<div class="action action-split">
                            <div class="btn-group">
                            <a href="#" class="btn btn-default btn-sm hidden-xs">Assign</a>
                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Assign</a></li><li><a href="#"></a><a " >Recommend</a></li>
                            </ul>
                            </div>
                            </div>',
                        ),

                    );

                    echo createSlat($slat);

                    $slat = array(
                        'title' => 'Focusing on Lower Extremity DVT - 20-526465',
                        'attributes' => array(
                            array('class', array('slat')),
                        ),

                        'meta' => '
                        <ul class="meta">
                        <li><span class="meta-type">Course</span></li>
                        </ul>',
                        'action' => array(
                            'type' => 'custom',
                            'content' => '<div class="action action-split">
                            <div class="btn-group">
                            <a href="#" class="btn btn-default btn-sm hidden-xs">Assign</a>
                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Assign</a></li><li><a href="#"></a><a " >Recommend</a></li>
                            </ul>
                            </div>
                            </div>',
                        ),

                    );

                    echo createSlat($slat);

                    $slat = array(
                        'title' => 'Hypovolemic Shock (Tutorial) - 20-580294',
                        'attributes' => array(
                            array('class', array('slat')),
                        ),

                        'meta' => '
                        <ul class="meta">
                        <li><span class="meta-type">Course</span></li>
                        </ul>',
                        'action' => array(
                            'type' => 'custom',
                            'content' => '<div class="action action-split">
                            <div class="btn-group">
                            <a href="#" class="btn btn-default btn-sm hidden-xs">Assign</a>
                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Assign</a></li><li><a href="#"></a><a " >Recommend</a></li>
                            </ul>
                            </div>
                            </div>',
                        ),

                    );

                    echo createSlat($slat);
                    $slat = array(
                        'title' => 'Joint Replacement: Total Knee Arthroplasty',
                        'attributes' => array(
                            array('class', array('slat')),
                        ),

                        'meta' => '
                        <ul class="meta">
                        <li><span class="meta-type">Course</span></li>
                        </ul>',
                        'action' => array(
                            'type' => 'custom',
                            'content' => '<div class="action action-split">
                            <div class="btn-group">
                            <a href="#" class="btn btn-default btn-sm hidden-xs">Assign</a>
                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Assign</a></li><li><a href="#"></a><a " >Recommend</a></li>
                            </ul>
                            </div>
                            </div>',
                        ),

                    );

                    echo createSlat($slat);
                    ?>

                </div>
                <div class="slat-group-footer"></div>
            </div>
        </section>

    </section>
</section>



<!-- /container -->
</div>
<!-- /layout -->




<?=createFooter($patterns['footer']);?>
<?=createPrototypeNav();?>
<?=createSiteScripts();?>


<script>


</script>
<?=createSiteEnd();?>