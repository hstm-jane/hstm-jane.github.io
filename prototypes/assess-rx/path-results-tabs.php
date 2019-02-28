<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Assessment Results';
$patterns['focus']['title'] = 'Assessment Results';

$patterns['header']['mainNavActive'] ='results';


?>


<?=createSiteStart($patterns['start']);?>
<div class="no-focus">
  <?= createHeader($patterns['header']); ?>

  <?= createFocus($patterns['focus']); ?>
</div>
<style>

.section-details{
  display: none;
}

h1,h2, .modal h3{
  font-weight: 600;
}
.results-section > h3{
  font-weight:600;
}
.segment-score{
  color: #26ccda;
  font-weight:600;
  font-family: 'Merriweather', serif;
  font-size: 1.1em;
}





.slat-group .slat-group-content{
  background-color: white;
}

.assessment-metrics h2{
  text-align: center;
  /*font-family: 'Merriweather', serif;*/

}

.selected.assessment-metric{
background-color: white;
box-shadow: 0 0 3px rgba(0,0,0,.5);

}
.selected.assessment-metrics{
background-color: #ededed;

}

.assessment-metrics .chart-container {
  height: 120px;
}

.assessment-metrics > div{
  border-left: 1px solid #ededed;
}

.assessment-metrics .segment-score{
  text-align: center;
  display: inline-block;
  width:100%;
  font-size: 30px;
  color: #26ccda;
}

.assessment-metrics .chart-container{
  margin-top: 0;
}

.assessment-metrics .assessment-metric{
 padding:10px 4px;

 text-align: center;
}


.amcharts-chart-div  a {
  display:none !important;
}



.index-label{
  font-size:16px;
}

.path-name{
  font-weight: 600;
  font-family: "Merriweather", serif;
}


.empty-state-img{
  margin: 35px auto;
}



.assessment-results__section{
  margin:15px;
}



.categories__header{
    background-color: #eee;
    font-weight:600;
}

.categories .row{
  padding:7px 0;
  border-bottom: 1px solid #eee;
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

.progress {
    margin-bottom:0;
    color:white;
    text-align: center;
}

.progress.warning {
 background-color: #FAC05E;
}

.progress-bar{
    border-right: 1px solid white;
    background: #59CD90;
    background-color: #26ccda;
}
.segment-percentile{
  font-size:12px;
}

@media print {
.assessment-details-tab{
  display:block;
}
  .chart-container  {
    width       : 100%;
    height      : 200px;
    font-size   : 11px;
    text-align: left;
  }

  .print-benchmark-score {
    text-align: center;
    margin-top:15px;
  }
  .assessment-metrics h2{
    font-size:23px;
  }
  .assessment-metrics .segment-score{
    font-size:20px;
  }
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float:left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }

  .visible-sm.hidden-print{
    display:none !important;
  }
  .assessment-metrics .chart-container{
    display:none;
  }
  .index{
    float:right;
  }
}
</style>

<div class="layout">
  <div class="container" id="path-results-container" >
    <section class="section section-main section-box">
      <section class="return-link hidden-print">
        <a href="assessment-results.2.php"><i class="fa fa-fw fa-chevron-left"></i>Return to Results List</a>
      </section>
      <section >
        <div class="row">
          <div class="col-md-9">
            <h1>Abigail Abbot</h1>
            <h4>Assessment Path: <span style="font-size: 600">Emergency RN</span></h4>

          </div>
          <div class="col-md-3 text-right">
              <div style="font-size: 13px; margin-top: 10px;">Path Assigned: 10/12/2017</div>
              <div style="font-size: 13px; margin-bottom:5px">Path Completed: 10/18/2017</div>
              <a href="#" class="btn btn-block btn-primary">View Full Report</a>
          </div>

        </div>
        <hr>
      </section>
      <section >
              <div class="assessment-metrics">
        <div class="row ">

          <div class="col-sm-6 col-md-3 .d-print-inline-block visible-print-inline-block">
            <div class="knowledge-metric assessment-metric">
              <h2>Knowledge</h2>
              <span class="segment-score"></span>
              <span class="segment-percentile">60th Percentile</span>
              <div id="knowledge-bar" class="chart-container"></div>
              <a href="#knowledge-details " class="scroll-link btn-xs btn js-btn-view-details btn-default js-btn-view-knowledge hidden-print">View Details</a>
              <div class="print-benchmark-score visible-print"></div>
              <hr class="visible-sm visible-xs hidden-print">
            </div>
          </div>


          <div class="col-sm-6 col-md-3" >
            <div class="skills-metric assessment-metric .d-print-inline-block visible-print-inline-block">
              <h2>Skills</h2>
              <span class="segment-score"></span>
              <span class="segment-percentile">40th Percentile</span>
              <div id="skills-bar" class="chart-container"></div>
              <div class="print-benchmark-score visible-print"></div>
              <a href="#skills-details" class="btn-xs btn btn-default hidden-print js-btn-view-skills js-btn-view-details scroll-link">View Details</a>

              <hr class="visible-sm visible-xs hidden-print">
            </div>
          </div>

          <div class="col-sm-6 col-md-3 .d-print-inline-block visible-print-inline-block" >
            <div class="behavioral-metric assessment-metric">
              <h2>Behavioral</h2>
              <img src="./content/images/empty_data.svg" class="empty-state-img">
              <p>Scores will show when the employee completes this section.</p>

              <hr class="visible-sm visible-xs hidden-print">
            </div>
          </div>



          <div class="col-sm-6 col-md-3 .d-print-inline-block visible-print-inline-block">
            <div class="judgment-metric assessment-metric">
              <h2>Judgment</h2>
              <span class="segment-score"></span>
              <span class="segment-percentile">70th Percentile</span>
              <div id="judgment-bar" class="chart-container"></div>
              <div class="print-benchmark-score visible-print"></div>
              <a href="#" class="btn-xs btn btn-default hidden-print">View Details</a>
              <hr class="visible-sm visible-xs hidden-print">

            </div>
          </div>

             </div>
        </div>
        <hr>
      </section>
      <section class="section knowledge-details section-details" id="knowledge-details" style="padding-top:20px;">
        <h2>Knowlede Score Assessment Details </h2>

                <section class="section">
                        <ul class="nav nav-tabs hidden-print">
                          <li class="active">
                            <a href="#assessment-1" data-toggle="tab">RN: Emergency Assessment</a>
                          </li>
                          <li><a href="#assessment-2" data-toggle="tab">Pharmacology: RN Assessment</a></li>

                        </ul>
                        <div class="tab-content">
                          <section id="assessment-1" class="active tab-pane section results-section assessment-details-tab">
                            <h3>RN: Emergency Assessment: 85%</h3>

                            <section class="section feedback ">
                              <h3>Results by Category</h3>
                              <section class="assessment-results__section  categories">
                                <div class="row categories__header">


                                  <div class="col-md-5 text-left"> Category</div>
                                  <div class="col-md-4 text-center"> Number Answered Correctly</div>
                                  <div class="col-md-3 text-center"> Percentage Correct</div>

                                </div>
                                <div class="row">
                                  <div class="col-md-5 text-left">Cardiovascular</div>
                                  <div class="col-md-4">
                                    <div class="progress ">
                                      <div class="progress-bar" style="width:100%;">3 of 3 correct</div>
                                    </div>
                                  </div>

                                  <div class="col-md-3 text-center">100%</div>
                                </div>
                                <div class="row">
                                  <div class="col-md-5 text-left">Respiratory</div>
                                  <div class="col-md-4">
                                    <div class="progress">
                                      <div class="progress-bar" style="width:50%;">2 of 4 correct</div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 text-center">50%</div>
                                </div>
                                <div class="row">
                                  <div class="col-md-5 text-left">Gastrointestinal</div>
                                  <div class="col-md-4">
                                    <div class="progress">
                                      <div class="progress-bar" style="width:75%;">3 of 4 correct</div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 text-center">75%</div>
                                </div>
                                <div class="row">
                                  <div class="col-md-5 text-left">Neurology</div>
                                  <div class="col-md-4">
                                    <div class="progress">
                                      <div class="progress-bar" style="width:83%;">5 of 6 correct</div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 text-center">83%</div>
                                </div>
                                <div class="row danger">
                                  <div class="col-md-5 text-left">Professional Issues</div>
                                  <div class="col-md-4">
                                    <div class="progress  warning">0 of 1 correct
                                      <div class="progress-bar" style="width:0%;"></div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 text-center">0%</div>
                                </div>
                              </section>


                            </section>
                             <section class="feedback">

                                      <h3>Feedback</h3>
                                      <div><p>Based on the questions answered incorrectly, it is recommended that Abigail review the following topics:</p>
                                          <ul>

                                              <li>The most likely diagnosis for the patient who is experiencing symptoms of flank pain with hematuria</li>
                                              <li>The additional disease process for which a patient with a history of intermittent claudication of the lower extremities is at high risk</li>
                                              <li>
                                              Diagnoses that are surgical emergencies</li>
                                              <li>The appropriate dose of acetaminophen for pediatric patients</li>
                                              <li>The most common symptom of appendicitis</li>
                                          </ul></div>
                                      </section>

                          </section>
                          <section id="assessment-2" class="tab-pane section results-section assessment-details-tab">
                            <h3>Pharmacology: RN Assessment: 80%</h3>

                            <section class="section feedback ">
                              <h3>Results by Category</h3>
                              <section class="assessment-results__section  categories">
                                <div class="row categories__header hidden-xs">


                                  <div class="col-md-5 text-left"> Category</div>
                                  <div class="col-md-4 text-center"> Number Answered Correctly</div>
                                  <div class="col-md-3 text-center"> Percentage Correct</div>

                                </div>
                                <div class="row">
                                  <div class="col-md-5 text-left">Cardiovascular</div>
                                  <div class="col-md-4">
                                    <div class="progress ">
                                      <div class="progress-bar" style="width:80%;">2 of 3 correct</div>
                                    </div>
                                  </div>

                                  <div class="col-md-3 text-center">66%</div>
                                </div>
                                <div class="row">
                                  <div class="col-md-5 text-left">Respiratory</div>
                                  <div class="col-md-4">
                                    <div class="progress">
                                      <div class="progress-bar" style="width:50%;">2 of 4 correct</div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 text-center">50%</div>
                                </div>
                                <div class="row">
                                  <div class="col-md-5 text-left">Gastrointestinal</div>
                                  <div class="col-md-4">
                                    <div class="progress warning">0 of 4 correct
                                      <div class="progress-bar" style="width:0%;"></div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 text-center">0%</div>
                                </div>
                                <div class="row">
                                  <div class="col-md-5 text-left">Neurology</div>
                                  <div class="col-md-4">
                                    <div class="progress">
                                      <div class="progress-bar" style="width:44%;">5 of 6 correct</div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 text-center">83%</div>
                                </div>
                                <div class="row danger">
                                  <div class="col-md-5 text-left">Professional Issues</div>
                                  <div class="col-md-4">
                                    <div class="progress  ">
                                      <div class="progress-bar" style="width:90%;">9 of 10 correct</div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 text-center">90%</div>
                                </div>
                              </section>


                            </section>
                             <section class="feedback">

                                      <h3>Feedback</h3>
                                      <div><p>Based on the questions answered incorrectly, it is recommended that Abigail review the following topics:</p>
                                          <ul>

                                              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                              <li>Etiam cursus lectus eget nulla sodales gravida. </li>
                                              <li>Donec sed convallis risus. </li>
                                              <li>Suspendisse ut vulputate nulla.</li>
                                              <li>Fusce tincidunt ex ut euismod pharetra. Maecenas facilisis at dolor ut interdum.</li>
                                              <li>Fusce tincidunt ex ut euismod pharetra. Maecenas facilisis at dolor ut interdum.</li>
                                              <li>Fusce tincidunt ex ut euismod pharetra. Maecenas facilisis at dolor ut interdum.</li>
                                          </ul>
                                        </div>
                                      </section>

                          </section>
                      </div>
                    </section>
      </section>

      <section class="section skills-details section-details" id="skills-details" style="padding-top:20px;">
        <h2>RN: Emergency Skills Self-Assessment 76% </h2>




                          <section  class=" section results-section ">


                            <section class="section feedback ">
                              <h3>Results by Category</h3>
                              <section class="assessment-results__section  categories">
                                <div class="row categories__header">


                                  <div class="col-md-5 text-left"> Category</div>
                                  <div class="col-md-4 text-center"> Number Answered Correctly</div>
                                  <div class="col-md-3 text-center"> Percentage Correct</div>

                                </div>
                                <div class="row">
                                  <div class="col-md-5 text-left">Cardiovascular</div>
                                  <div class="col-md-4">
                                    <div class="progress ">
                                      <div class="progress-bar" style="width:100%;">3 of 3 correct</div>
                                    </div>
                                  </div>

                                  <div class="col-md-3 text-center">100%</div>
                                </div>
                                <div class="row">
                                  <div class="col-md-5 text-left">Respiratory</div>
                                  <div class="col-md-4">
                                    <div class="progress">
                                      <div class="progress-bar" style="width:50%;">2 of 4 correct</div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 text-center">50%</div>
                                </div>
                                <div class="row">
                                  <div class="col-md-5 text-left">Gastrointestinal</div>
                                  <div class="col-md-4">
                                    <div class="progress">
                                      <div class="progress-bar" style="width:75%;">3 of 4 correct</div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 text-center">75%</div>
                                </div>
                                <div class="row">
                                  <div class="col-md-5 text-left">Neurology</div>
                                  <div class="col-md-4">
                                    <div class="progress">
                                      <div class="progress-bar" style="width:83%;">5 of 6 correct</div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 text-center">83%</div>
                                </div>
                                <div class="row danger">
                                  <div class="col-md-5 text-left">Professional Issues</div>
                                  <div class="col-md-4">
                                    <div class="progress  warning">0 of 1 correct
                                      <div class="progress-bar" style="width:0%;"></div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 text-center">0%</div>
                                </div>
                              </section>


                            </section>
                             <section class="feedback">

                                      <h3>Feedback</h3>
                                      <div><p>Based on the questions answered incorrectly, it is recommended that Abigail review the following topics:</p>
                                          <ul>

                                              <li>The most likely diagnosis for the patient who is experiencing symptoms of flank pain with hematuria</li>
                                              <li>The additional disease process for which a patient with a history of intermittent claudication of the lower extremities is at high risk</li>
                                              <li>
                                              Diagnoses that are surgical emergencies</li>
                                              <li>The appropriate dose of acetaminophen for pediatric patients</li>
                                              <li>The most common symptom of appendicitis</li>
                                          </ul></div>
                                      </section>

                          </section>



      </section>
    </section>
  </div>
  <!-- /container -->
</div>
<!-- /layout -->





<?=createFooter($patterns['footer']);?>
<?=createPrototypeNav();?>
<?=createSiteScripts();?>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script>




  $(".js-btn-view-knowledge").click(function(){
    $(".section-details").not("#knowledge-details").hide();
    $("#knowledge-details").toggle();
    var btnText = $(this).text();
    $(this).text(btnText == "View Details" ? "Hide Details" : "View Details");
    $(".js-btn-view-details").not(this).text( "View Details");

    if($(".section-details").is(":visible") == true){
      $(".assessment-metric").removeClass("selected");
      $(this).closest(".assessment-metric").addClass("selected");
      $(this).closest(".assessment-metrics").addClass("selected");

    }else{
      $(this).closest(".assessment-metric").removeClass("selected");
      $(this).closest(".assessment-metrics").removeClass("selected");

    };
  });


  $(".js-btn-view-skills").click(function(){

    $(".section-details").not("#skills-details").hide();

    $("#skills-details").toggle();
    var btnText = $(this).text();
    $(".js-btn-view-skills").text(btnText == "View Details" ? "Hide Details" : "View Details");
    $(".js-btn-view-details").not(this).text( "View Details");


    if($(".section-details").is(":visible") == true){
      $(".assessment-metric").removeClass("selected");
      $(this).closest(".assessment-metric").addClass("selected");
      $(this).closest(".assessment-metrics").addClass("selected");

    }else{
      $(this).closest(".assessment-metric").removeClass("selected");
      $(this).closest(".assessment-metrics").removeClass("selected");

    };
  });

$( "a.scroll-link" ).click(function( event ) {
        event.preventDefault();

        if($($(this).attr("href")).is(":visible") == true){
          $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
        }
    });

var knowledgeBenchmark = 80;
var skillsBenchmark = 99;
var behavioralBenchmark = 78;
var judgmentBenchmark = 93;

var employeeKnowledge = 85;
var employeeSkills = 76;
var employeeBehavioral = 85;
var employeeJudgment = 85;


$(".knowledge-metric .segment-score").text(employeeKnowledge + "%");
$(".knowledge-metric .print-benchmark-score").text("Benchmark: " +knowledgeBenchmark);



$(".skills-metric .segment-score").text(employeeSkills + "%");
$(".skills-metric .print-benchmark-score").text("Benchmark: " + skillsBenchmark);

$(".behavioral-metric .segment-score").text(employeeBehavioral + "%");
$(".behavioral-metric .print-benchmark-score").text("Benchmark: " + behavioralBenchmark);

$(".judgment-metric .segment-score").text(employeeJudgment + "%");
$(".judgment-metric .print-benchmark-score").text("Benchmark: " + judgmentBenchmark);


var benchmarkColor = "#FAC05E";
var employeeColor ="#26ccda";

//Create BarCharts
var chart = AmCharts.makeChart("knowledge-bar", {
  "addClassNames" : true,
  "type": "serial",
  "theme": "light",
  "categoryField": "assessment",
  "columnSpacing": 0,
  "columnWidth": .2,
  "startEffect": "easeInSine",
  "startDuration": .25,
  "colors" : [employeeColor, benchmarkColor],
  "addClassNames" : true,
  "allLabels": [

  {
    "text": "Benchmark: " + knowledgeBenchmark + "%",
    "bold": false,
    "x": "60%",
    "y": "50%",
  }
  ],

  "maximum": 100,
  "trendLines": [],
  "graphs": [
  {
    "balloonText" : "Employee: " + employeeKnowledge + "%",
    "fillAlphas": 1,
    "id": "AmGraph-1",
    "lineAlpha": 0.2,
    "title": "Employee",
    "type": "column",
    "valueField": "employee",
    "showBalloon" : false
  },
  {
    "balloonText" : "Benchmark: " + knowledgeBenchmark + "%",
    "fillAlphas": 1,
    "id": "AmGraph-2",
    "lineAlpha": 0.2,
    "title": " Average",
    "type": "column",
    "valueField": "average",
  }
  ],

  "valueAxes": [
  {
    "id": "ValueAxis-1",
    "axisAlpha": 0,
    "gridAlpha": 0,
    "minimum": 0,
    "labelsEnabled" : false



  }
  ],
  "categoryAxis":
  {
    "position": "left",
    "axisAlpha": 0,
    "gridAlpha": 0,
    "labelsEnabled" :false
  },

  "dataProvider": [
  {
    "assessment": "Knowledge",
    "employee": employeeKnowledge,
    "average": knowledgeBenchmark
  },

  ],
  "export": {
    "enabled": true
  }
});
var chart = AmCharts.makeChart("skills-bar", {
  "type": "serial",
  "startEffect": "easeInSine",
  "startDuration": .25,
  "theme": "light",
  "categoryField": "assessment",
  "columnSpacing": 0,
  "columnWidth": .2,
  "colors" : [employeeColor, benchmarkColor],
  "allLabels": [

  {
    "text": "Benchmark: " + skillsBenchmark + "%",
    "bold": false,
    "x": "60%",
    "y": "50%",
  }
  ],
  "maximum": 100,
  "graphs": [
  {
    "balloonText": "Employee: " + employeeSkills + "%",
    "fillAlphas": 1,
    "id": "AmGraph-1",
    "lineAlpha": 0.2,
    "title": "Employee",
    "type": "column",
    "valueField": "employee",
  },
  {
    "balloonText": "Benchmark:" + skillsBenchmark + "%",
    "fillAlphas": 1,
    "id": "AmGraph-2",
    "lineAlpha": 0.2,
    "title": "Average",
    "type": "column",
    "valueField": "average",

  }
  ],

  "valueAxes": [
  {
    "id": "ValueAxis-1",
    "position": "left",
    "axisAlpha": 0,
    "gridAlpha": 0,
    "minimum": 0,
    "labelsEnabled" : false


  }
  ],
  "categoryAxis":
  {
    "position": "left",
    "axisAlpha": 0,
    "gridAlpha": 0,
    "labelsEnabled" :false
  },

  "dataProvider": [
  {
    "assessment": "Skills",
    "employee": employeeSkills,
    "average": skillsBenchmark
  },

  ],
});
var chart = AmCharts.makeChart("judgment-bar", {
  "type": "serial",
  "theme": "light",
  "categoryField": "assessment",
  "startEffect": "easeInSine",
  "startDuration": .25,
  "columnSpacing": 0,
  "columnWidth": .2,
  "colors" : [employeeColor, benchmarkColor],

  "allLabels": [

  {
    "text": "Benchmark: " + judgmentBenchmark + "%",
    "bold": false,
    "x": "60%",
    "y": "50%",
  }
  ],

  "maximum": 100,


  "trendLines": [],
  "graphs": [
  {
    "balloonText": "Employee:[[value]]",
    "fillAlphas": 1,
    "id": "AmGraph-1",
    "lineAlpha": 0,
    "title": "Employee",
    "type": "column",
    "valueField": "employee"
  },
  {
    "balloonText": "Benchmark:[[value]]",
    "fillAlphas": 1,
    "id": "AmGraph-2",
    "lineAlpha": 0,
    "title": "Average",
    "type": "column",
    "valueField": "average"
  }
  ],
  "guides": [],
  "valueAxes": [{
    "labelsEnabled" : false,
    "gridAlpha" : 0,
    "axisAlpha" : 0,
    "minimum" : 0,
    "maximum" : 100,
  }],
  "categoryAxis":
  {

    "position": "left",
    "axisAlpha": 0,
    "gridAlpha": 0,
    "labelsEnabled" :false

  },

  "balloon": {},
  "titles": [],
  "dataProvider": [
  {
    "assessment": "Judgement",
    "employee": employeeJudgment,
    "average": judgmentBenchmark
  },

  ],
});


</script>





<?=createSiteEnd();?>