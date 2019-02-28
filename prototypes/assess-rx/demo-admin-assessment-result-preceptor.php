<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Assessment Results';
$patterns['focus']['title'] = 'Assessment Results';
$patterns['header'] = array(
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="/content/images/prototype-actors/allisongrayce.jpg">',
    'mainNav' => '
        <li class="{active=home}"><a href="/demo-admin.php">Home</a></li>
        <li class="{active=results}"><a href="/demo-admin-assessment-results.php">Assessment Results</a></li>
        <li class="{active=users}"><a href="/demo-admin-manage-users.php">Manage Users</a></li>',
    'logoLarge' => './content/images/logo-assess-large.png',
    'mainNavActive' =>'results',
    'alerts' => '',
    'userInstitution' => '',
);

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
.slat-group .slat-group-content{
  background-color: white;
}

.assessment-metrics > .row > div:not(:first-child) {
  border-left: 1px solid #ededed;
}

.assessment-metrics h2 {
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

.assessment-metrics .segment-score{
  text-align: center;
  display: block;
  font-size: 32px;
  color: #09C; //#0D75A1; //#26CCDA;
  font-weight: bold;
  font-family: 'Merriweather', serif;
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
    /*color:white;*/
    text-align: center;
    font-size: 12px;
    line-height: 20px;
    background-color: rgba(0,0,0,.1);
}

.progress-bar:not(.progress-bar-success):not(.progress-bar-warning):not(.progress-bar-danger) {
  background-color: #09C; //#6FD9F8;
}

.segment-percentile{
  font-size:12px;
}
.index-container {
    text-align: center;
  }


.table--working-prefs th {
  background-color: #eee;
  border: none !important;
}
.table--working-prefs td {
  vertical-align: middle;
}

.table--working-prefs th,
.table--working-prefs td:nth-child(3),
.table--working-prefs td:nth-child(4),
.table--working-prefs td:nth-child(5) {
  text-align: center;
}

.table--working-prefs td:nth-child(2) {
  font-size: .825em;
  text-align: right;
}
.table--working-prefs td:nth-child(6) {
  font-size: .825em;
}
@media ( max-width: 991px) {
  .table--working-prefs th:nth-child(2),
  .table--working-prefs th:nth-child(6),
  .table--working-prefs td:nth-child(2),
  .table--working-prefs td:nth-child(6) {
    display: none;
  }
}

.text-light {
  color: #CCC;
}

.row.danger {
  background-color: #F2DAB0;
}

.assessment-score {
    color: #09C;
    font-weight: bold;
    font-family: 'Merriweather', serif;
}

@media ( min-width: 992px) {
    .index-container {
      text-align: right;
    }
}
.index {
  display: inline-block;
  background: #333;
  color: #fff;
  border-radius: 6px;
  padding: 10px;
  text-align: center;
  margin-bottom: 10px;
}
.index-score {
  font-size: 48px;
  font-family: 'Merriweather',serif;
  line-height: 1;
}

.index-label{
  font-size:16px;
}

.section-details {
  display: block;
  padding-top: 30px;
}
.section-details + .section-details {
  border-top: 2px solid #ddd;
  margin-top: 30px;
  padding-top: 50px;
}

.section-details h2 {
  font-family: 'Merriweather', serif;
  color: #09C;
}

@media ( max-width: 991px) {
.btn-path-results-report {
  text-align: center;
}
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
  .index {
    float: left;
  }
}

</style>

<div class="layout">
  <div class="container" id="path-results-container" >
    <section class="section section-main section-box">
      <section class="return-link hidden-print">
        <a href="/demo-admin-assessment-result-detail.php"><i class="fa fa-fw fa-chevron-left"></i>Return to Results Detail</a>
      </section>
      <section class="section section-details">
        <h1>Preceptor Card</h1>
        <section class="section feedback">
          <section class="section">
            <h4>Problem Identification</h4>
            <ul>
              <li>Ask orientee for patients assigned:
                <ul>
                  <li>What complications could occur?</li>
                  <li>What clinical data would lead you to believe this complication could or is occurring?</li>
                </ul>
              </li>
            </ul>
          </section>
          <section class="section">
            <h4><span class="fa fa-lg fa-times text-danger"></span> Problem Management</h4>
            <ul>
              <li>Communication with MD / Anticipate MD orders:
                <ul>
                  <li>Give multiple opportunities to call physicians</li>
                  <li>Before calling, ask Abigail the following:
                    <ul>
                      <li>What data are you going to give the MD?</li>
                      <li>What orders will you expect to get from the MD?</li>
                      <li>Why are these orders needed?</li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li>Independent nursing actions:
                <ul>
                  <li>Ask Abigail Abbot for patients assigned:
                    <ul>
                      <li>What nursing actions do you need to take and why?</li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </section>
          <section class="section">
            <h4><span class="fa fa-lg fa-times text-danger"></span> Rationale</h4>
            <ul>
              <li>Ask Abigail Abbot for patients assigned:
                <ul>
                  <li>Why are these particular interventions relevant for this patient?</li>
                </ul>
              </li>
            </ul>
          </section>

          <section class="section">
            <h4>Problem Identification</h4>
            <ul>
              <li>Ask orientee for patients assigned:
                <ul>
                  <li>What clinical data indicates the patient needs immediate intervention &amp; why?</li>
                </ul>
              </li>
              <li>If actions/interventions taken by the orientee are irrelevant or could have caused harm ask:
                <ul>
                  <li>What makes the action unacceptable and what should have been done?</li>
                </ul>
              </li>
            </ul>
          </section>

          <section class="section">
            <h4>Please also include in the patient assignment the following throughout orientation:</h4>
          </section>

          <section class="section">
            <h4><span class="fa fa-lg fa-times text-danger"></span> Patients experiencing:</h4>
            <ul>
              <li>Respiratory compromise</li>
              <li>Neurological deficits</li>
              <li>Cardiac complications</li>
              <li>Genitourinary complications</li>
            </ul>
          </section>

          <section class="section">
            <h4>Discuss the following topics with Abigail:</h4>
            <ul>
              <li>The most likely diagnosis for the patient who is experiencing symptoms of flank pain with hematuria
              <li>The additional disease process for which a patient with a history of intermittent claudication of the lower extremities is at high risk</li>
              <li>Diagnoses that are surgical emergencies</li>
              <li>The appropriate dose of acetaminophen for pediatric patients</li>
              <li>The most common symptom of appendicitis</li>
              <li>The side effects of Gentamyacin</li>
            </ul>
          </section>

          <section class="section">
            <h4>Review the following skills with Abigail:</h4>
            <ul>
              <li>Assist with Central line insertion</li>
              <li>Chest Tube - Use of Pleurevac or Thoraclex</li>
            </ul>
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

  $(".js-btn-view-behavioral").click(function(){

    $(".section-details").not("#behavioral-details").hide();

    $("#behavioral-details").toggle();
    var btnText = $(this).text();
    $(".js-btn-view-behavioral").text(btnText == "View Details" ? "Hide Details" : "View Details");
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

  $(".js-btn-view-judgment").click(function(){

    $(".section-details").not("#judgment-details").hide();

    $("#judgment-details").toggle();
    var btnText = $(this).text();
    $(".js-btn-view-judgment").text(btnText == "View Details" ? "Hide Details" : "View Details");
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


var BenchmarkColor = "#09C"; //"#0D75A1"; //"#6BD8FA";
var employeeColor = "#574"; // "#F9C05E";

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
  "colors" : [employeeColor, BenchmarkColor],
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
    "valueField": "employee"
  },
  {
    "balloonText" : "Benchmark: " + knowledgeBenchmark + "%",
    "fillAlphas": 1,
    "id": "AmGraph-2",
    "lineAlpha": 0.2,
    "title": " Benchmark",
    "type": "column",
    "valueField": "Benchmark",
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
    "Benchmark": knowledgeBenchmark
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
  "colors" : [employeeColor, BenchmarkColor],
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
    "title": "Benchmark",
    "type": "column",
    "valueField": "Benchmark",

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
    "Benchmark": skillsBenchmark
  },

  ],
});

var chart = AmCharts.makeChart("behavioral-bar", {
  "type": "serial",
  "startEffect": "easeInSine",
  "startDuration": .25,
  "theme": "light",
  "categoryField": "assessment",
  "columnSpacing": 0,
  "columnWidth": .2,
  "colors" : [employeeColor, BenchmarkColor],
  "allLabels": [

  {
    "text": "Benchmark: " + behavioralBenchmark + "%",
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
    "balloonText": "Benchmark:" + behavioralBenchmark + "%",
    "fillAlphas": 1,
    "id": "AmGraph-2",
    "lineAlpha": 0.2,
    "title": "Benchmark",
    "type": "column",
    "valueField": "Benchmark",

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
    "Benchmark": behavioralBenchmark
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
  "colors" : [employeeColor, BenchmarkColor],

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
    "title": "Benchmark",
    "type": "column",
    "valueField": "Benchmark"
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
    "Benchmark": judgmentBenchmark
  },

  ],
});


  $('.branding a').click(function(e){
    e.preventDefault();
    window.location.href="/demo-start.php";
  });

</script>





<?=createSiteEnd();?>