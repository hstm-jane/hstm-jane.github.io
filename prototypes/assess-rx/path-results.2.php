<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Assessment Results';
$patterns['focus']['title'] = 'Assessment Results';

$patterns['header']['mainNavActive'] ='results';


?>

<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<?=createSiteStart($patterns['start']);?>
<div class="no-focus">
  <?= createHeader($patterns['header']); ?>

  <?= createFocus($patterns['focus']); ?>
</div>
<style>
.student-score{

  display:block;
}

.average-score{
  font-size:20px;
  display:block;
}
h2 {
  font-weight: 600;
}
h2 .segment-score{
  font-weight:600;
  font-family: 'Merriweather', serif;

}
.chart-container {
  margin-top:30px;
  margin-bottom:30px;
}
</style>
<div class="layout ">
  <div class="container">
    <section class="section section-main section-box">
      <div class="row">
        <div class="col-md-6">
          <section class="section">
            <h2 class="student-score">Employee Knowledge <span class="segment-score">75%</span></h2>

            <div class="chart-container">



              <canvas id="polar-chart" width="800" height="350"></canvas>


            </div>
            <span class="text-right average-score">Average Score 75%</span>
          </section>
        </div>
        <div class="col-md-6" >


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
                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="/knowledge-emergency-nurse.php">View </a></div>',
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
                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#"> View </a></div>',
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
                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#">View </a></div>',
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
  </div>
  <!-- /container -->
</div>
<!-- /layout -->



<?=createFooter($patterns['footer']);?>
<?=createPrototypeNav();?>
<?=createSiteScripts();?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>


<script>



  new Chart(document.getElementById("polar-chart"), {
    type: 'polarArea',
    data: {
      labels: ["Employee Score", "Average Score", "Employee Percentile"],
      datasets: [
      {
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [75,55,50]
      }
      ]
    },
    options: {
      legend:{
        labels:{
          boxWidth: 20,
          padding: 50

        },
      },
      scale: {
        ticks: {
          beginAtZero: true,
          min: 0,
          max: 100,
          stepSize: 20
        },
      }
    }


  });





</script>


<?=createSiteEnd();?>