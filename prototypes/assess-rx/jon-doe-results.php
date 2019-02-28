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
  .score{
    -webkit-box-shadow: 0 0 3px rgba(0,0,0,.2);
    box-shadow: 0 0 3px rgba(0,0,0,.2);
    text-align: center;
    padding-bottom:15px;
    min-height:120px;
  }
  .score h3{
    color:#8F2D56;


    font-weight: 600;
    padding:15px;
    border-bottom: 1px solid #8F2D56;
    width:90%;
    text-align:left;
    margin:10px auto;
  }

  .score h4{
    color:white;
    font-weight:600;
    padding:10px;
    font-size:14px;
  }

  .skills-score h4{
    color: #06D6A0;
    border-bottom: 1px solid #06D6A0;

  }
  .knowledge-score h4{
    color: #F18805;
    border-bottom: 1px solid #F18805;

  }
  .interpersonal-score h4{
    color: #587291;
    border-bottom: 1px solid #587291;

  }
  .judgement-score h4{
    color: #8A4F7D;
    border-bottom: 1px solid #8A4F7D;


  }

  .index-score.score p{
    color: #8F2D56;
    font-size:40px;
    font-weight:  600;
    padding:15px;
    border-left:10px solid #06D6A0;
    border-right:10px solid #F18805;
    border-bottom:10px solid #587291;
    border-top:10px solid #8A4F7D;
    border-radius:50%;
    height:140px;
    width:140px;
    margin:auto;
    padding-top:30px;
    font-family: 'Merriweather', serif;
  }

  .score p{
    font-family: 'Merriweather', serif;
    font-size:20px;
    margin:0;
  }

  .score i{
    font-size:16px;

  }
</style>

<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Jon Doe Results';
$patterns['focus']['title'] = '<div class="assess-rx__image-holder"><img src="./content/images/bbrune.jpg"></div> Jon Doe Assessment Results';

// $patterns['focus']['meta_secondary'] = array(
// 	array(
// 		'label' => 'Profession:',
// 		'value' => 'Registered Nurse',
// 	),
// 	array(
// 		'label' => 'Specialty: ',
// 		'value' => 'Emergency',
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
</style>


<div class="layout layout-search">

  <div class="container">
    <section class="section section-main section-box">
      <section class="section ">
        <h2>Jon Doe as a Registered Nurse: Emergency</h2>

        <div class="row">
          <div class="col-md-3" style="border-right: 1px solid #ddd;">
            <div class="score index-score">
              <h3>Assessment Index</h3>
              <p class="text-center">
                87%
              </p>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="score skills-score">

                  <h4>Skills</h4>
                  <p>
                    3.5
                  </p>
                  <p>
                    <span style="color:#F0A202">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-full"></i>
                    </span>
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="score knowledge-score">

                  <h4>Knowledge</h4>
                  <p>
                    94%
                  </p>
                  <p>

                  </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="score interpersonal-score">

                  <h4>Interpersonal</h4>
                  <p>
                    86%
                  </p>
                  <p>

                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="score judgement-score">

                  <h4>Judgement</h4>
                  <p>
                    72%
                  </p>
                  <p>

                  </p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-md-9" >
            <section class="section">
              <div class="slat-group">
                <div class="slat-group-header">
                  <div class="slat-group-header-title">
                    <h2>Knowledge Assessments</h2>
                  </div>
                </div>
                <div class="slat-group-content">
                  <?php
                  $slat = array(
                   'title' => 'Emergency Nurse Competency Exam',
                   'attributes' => array(
                    array('class', array('slat')),
                  ),

                   'meta' => '
                   <ul class="meta">
                   <li><span class="meta-type">Knowledge Assessment</span></li>
                   </ul>',
                   'action' => array(
                    'type' => 'custom',
                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="/knowledge-emergency-nurse.php">View Details</a></div>',
                  ),

                 );

                  echo createSlat($slat);

                  $slat = array(
                   'title' => 'Pharmacology Competency Exam',
                   'attributes' => array(
                    array('class', array('slat', 'slat')),
                  ),

                   'meta' => '
                   <ul class="meta">
                   <li><span class="meta-type">Knowledge       Assessment</span></li>

                   </ul>',
                   'action' => array(
                    'type' => 'custom',
                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#"> View Details</a></div>',
                  ),

                 );

                  echo createSlat($slat);
                  ?>
                </div>
                <div class="slat-group-footer"></div>
              </div>
            </section>

            <section class="section">

              <div class="slat-group">
                <div class="slat-group-header">
                  <div class="slat-group-header-title">
                    <h2>Skills Self Assessments</h2>
                  </div>
                </div>
                <div class="slat-group-content">
                  <?php
                  $slat = array(
                   'title' => 'Emergency Nurse Skills Checklist',
                   'attributes' => array(
                    array('class', array('slat')),
                  ),

                   'meta' => '
                   <ul class="meta">

                   <li><span class="meta-type">Skills Self Assessment</span></li>
                   </ul>',
                   'action' => array(
                    'type' => 'custom',
                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#">View Details</a></div>',
                  ),

                 );

                  echo createSlat($slat);

                  ?>
                </div>
                <div class="slat-group-footer"></div>

              </div>
            </section>
          </div>


        </div>
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