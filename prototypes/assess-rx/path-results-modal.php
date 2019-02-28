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

.student-score{
  display:block;
}

.average-score{
  font-size:20px;
  display:block;
}

.modal .chart-container {

  margin-bottom:30px;
}

h1,h2, .modal h3{
  font-weight: 600;
}

.segment-score{

  font-weight:600;
  font-family: 'Merriweather', serif;
  font-size: 1.1em;
}

#chartdiv, #chartdiv2 , #chartdiv3, #chartdiv4 {
  width       : 100%;
  height      : 300px;
  font-size   : 11px;
  text-align: center;
}

.assessment-metrics .chart-container {
  height: 150px;
}

.section-main > .section .row{
  padding-top: 20px;
  margin: auto 10px ;

}

.section-main > .section .row:nth-child(odd){
  background-color: #f9f9f9;
}

.slat-group .slat-group-content{
  background-color: white;
}
.assessment-metrics h2{
  text-align: center;
  font-family: 'Merriweather', serif;
}

.assessment-metrics > div{
  border-left: 1px solid #ededed;
}
.assessment-metrics .segment-score{
  text-align: center;
  display: inline-block;
  width:100%;
  font-size: 30px;
  color: #F18805;
}
.assessment-metrics .chart-container{
  margin-top: 0;
}

.assessment-metrics .assessment-metric{
 cursor: pointer;
 transition: all .2s ease;
 margin-right: 5px;
margin-left: 5px;
border-radius: 3px;
}
.assessment-metrics .assessment-metric:hover{
     transform: scale(1.1,1.1);
     -webkit-box-shadow: 0 5px 10px 2px rgba(0,0,0,.1);
    box-shadow: 0 5px 10px 2px rgba(0,0,0,.1);


}

.amcharts-chart-div  a {
  display:none !important;
}

.index{
  height:80px;
  width:100%;
  border-radius: 5px;
  color: #F18805;
  font-size:36px;
  text-align:center;
  font-family: 'Merriweather', serif;

}
.index-label{
  font-size:16px;
}
.path-name{
  font-weight: 600;
  font-family: "Merriweather", serif;
}

.modal .amcharts-graph-column .amcharts-graph-column-front {
   stroke-dasharray: 5, 5 !important;
   stroke-width: 5;
}

.path-results--actions .btn-feedback{

}

@media print {

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

<div class="layout ">
  <div class="container">
    <section class="section section-main section-box">
      <section class="return-link hidden-print">
        <a href="assessment-results.2.php"><i class="fa fa-fw fa-chevron-left"></i>Return to Results List</a>
      </section>
      <section >
        <div class="row">
          <div class="col-md-10">
            <h1>Gertrude Peckinpah</h1>
            <h4>Results for <span class="path-name">Registered Nurse / Emergency</span> Assessment Path</h4>
          </div>
          <div class="col-md-2">
            <div class="index">
              87<div class="index-label">Index</div>
            </div>
            <div class="path-results--actions">
              <a href="#" class="btn btn-primary btn-block btn-feedback hidden-print" >Show Feedback</a>
            </div>
          </div>
        </div>
        <hr>
      </section>
      <section >
        <div class="row assessment-metrics">
          <div class="col-sm-6 col-md-3 .d-print-inline-block visible-print-inline-block">
            <div class="knowledge-metric assessment-metric">
              <h2>Knowledge</h2>
              <span class="segment-score"></span>
              <div id="knowledge-bar" class="chart-container"></div>
              <div class="print-benchmark-score visible-print"></div>
              <hr class="visible-sm visible-xs hidden-print">

            </div>
          </div>
          <div class="col-sm-6 col-md-3" >
            <div class="skills-metric assessment-metric .d-print-inline-block visible-print-inline-block">
              <h2>Skills</h2>
              <span class="segment-score"></span>
              <div id="skills-bar" class="chart-container"></div>
              <div class="print-benchmark-score visible-print"></div>
              <hr class="visible-sm visible-xs hidden-print">
            </div>
          </div>
          <div class="col-sm-6 col-md-3 .d-print-inline-block visible-print-inline-block" >
            <div class="behavioral-metric assessment-metric">
              <h2>Behavioral</h2>
              <span class="segment-score"></span>
              <div id="behavioral-bar" class="chart-container"></div>
              <div class="print-benchmark-score visible-print"></div>
              <hr class="visible-sm visible-xs hidden-print">

            </div>
          </div>
          <div class="col-sm-6 col-md-3 .d-print-inline-block visible-print-inline-block">
            <div class="judgment-metric assessment-metric">
              <h2>Judgment</h2>
              <span class="segment-score"></span>
              <div id="judgment-bar" class="chart-container"></div>
              <div class="print-benchmark-score visible-print"></div>
              <hr class="visible-sm visible-xs hidden-print">

            </div>
          </div>
        </div>
        <hr>
      </section>
    </section>
  </div>
  <!-- /container -->
</div>
<!-- /layout -->



<!--Modals-->

<div id="modal-knowledge" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h3 class="modal-title">Gertrude's Knowledge Results</h3>
            </div>

          <div class="modal-body" >


        <section >
          <h3>Knowledge Score <span class="segment-score">85%</span></h3>


          <div class="chart-container">
            <div id="chartdiv"></div>

          </div>
        </section>
<hr>

        <div class="slat-group">
          <div class="slat-group-header">
            <div class="slat-group-header-title">
              <h3>Knowledge Assessments</h3>
            </div>
          </div>
          <div class="slat-group-content">
            <?php
            $slat = array(
              'title' => 'Emergency Nurse Competency Exam',
              'attributes' => array(
                  array('class',array('slat','slat-modal')),
              ),
              'meta' => array(
                array(
                  'type' => 'Knowledge Assessment',
                ),
                  // array(
                  //     'label' => 'Completed:',
                  //     'value' => '8/25/2017',
                  // ),
                array(
                  'label' => 'Due: ',
                  'value' => '<span class="meta-callout-label">Score:</span> 85%',
                  'attributes' => array(
                    array('class','meta-callout'),
                  )
                )
              ),
              'action' => array(
                  'type' => 'action-single',
                  'content' => 'View<i class="fa fa-chevron-right visible-xs"></i>',
                  'link' => '#',
              )

            );

            echo createSlat($slat);

            $slat = array(
              'title' => 'Pharmacology Competency Exam',
              'attributes' => array(
                                    array('class',array('slat','slat-modal')),
                                ),

              'meta' => array(
                array(
                  'type' => 'Knowledge Assessment',
                ),
                  // array(
                  //     'label' => 'Completed:',
                  //     'value' => '8/25/2017',
                  // ),
                array(
                  'label' => 'Due: ',
                  'value' => '<span class="meta-callout-label">Score:</span> 85%',
                  'attributes' => array(
                    array('class','meta-callout'),
                  )
                )
              ),
              'action' => array(
                  'type' => 'action-single',
                  'content' => 'View<i class="fa fa-chevron-right visible-xs"></i>',
                  'link' => '#',
              )

            );

            echo createSlat($slat);
            ?>
          </div>
          <div class="slat-group-footer"></div>
        </div>


      </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>


<?=createFooter($patterns['footer']);?>
<?=createPrototypeNav();?>
<?=createSiteScripts();?>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script>


/*  probability.js    12-25-2008    JavaScript
Copyright (C)2008 Steven Whitney.
Initially published by http://25yearsofprogramming.com.

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License (GPL)
Version 3 as published by the Free Software Foundation.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Functions related to probability calculations.

*/
//----------------------------------------------------------------------------------------------
// Calculates a point Z(x), the Probability Density Function, on any normal curve.
// This is the height of the point ON the normal curve.
// For values on the Standard Normal Curve, call with Mean = 0, StdDev = 1.
function NormalDensityZx( x, Mean, StdDev ) {
  var a = x - Mean;
  return Math.exp( -( a * a ) / ( 2 * StdDev * StdDev ) ) / ( Math.sqrt( 2 * Math.PI ) * StdDev );
}
//----------------------------------------------------------------------------------------------
// Calculates Q(x), the right tail area under the Standard Normal Curve.
function StandardNormalQx( x ) {
if ( x === 0 ) // no approximation necessary for 0
  return 0.50;

var t1, t2, t3, t4, t5, qx;
var negative = false;
if ( x < 0 ) {
  x = -x;
  negative = true;
}
t1 = 1 / ( 1 + ( 0.2316419 * x ) );
t2 = t1 * t1;
t3 = t2 * t1;
t4 = t3 * t1;
t5 = t4 * t1;
qx = NormalDensityZx( x, 0, 1 ) * ( ( 0.319381530 * t1 ) + ( -0.356563782 * t2 ) +
  ( 1.781477937 * t3 ) + ( -1.821255978 * t4 ) + ( 1.330274429 * t5 ) );
if ( negative == true )
  qx = 1 - qx;
return qx;
}
//----------------------------------------------------------------------------------------------
// Calculates P(x), the left tail area under the Standard Normal Curve, which is 1 - Q(x).
function StandardNormalPx( x ) {
  return 1 - StandardNormalQx( x );
}
//----------------------------------------------------------------------------------------------
// Calculates A(x), the area under the Standard Normal Curve between +x and -x.
function StandardNormalAx( x ) {
  return 1 - ( 2 * StandardNormalQx( Math.abs( x ) ) );
}
//----------------------------------------------------------------------------------------------

/**
* Define values where to put vertical lines at
*/
var verticals = [
2.4, -0.2
];

/**
* Calculate data
*/
var chartData2 = [.39, .02];
var chartData = [];
for ( var i = -5; i < 5.1; i += 0.1 ) {
  var dp = {
    category: i,
    value: NormalDensityZx( i, 0, 1 ),
    dashLengthColumn: 5,

  };
  if ( verticals.indexOf( Math.round( i * 10 ) / 10 ) !== -1 ) {
    dp.vertical = dp.value;
  }
  chartData.push( dp );
}




var chart = AmCharts.makeChart( "chartdiv", {
  "type": "serial",
  "theme": "light",
  "dataProvider": chartData,
  "precision": 2,
  "addClassNames": true,
  "backgroundColor": "#ffffff",
  "backgroundAlpha": 0,
  "valueAxes": [ {
    "gridAlpha": 0.2,
    "dashLength": 0,
    // "color": "#fff",
    // "gridColor" : "#fff",
    // "axisColor" : "#fff"

  } ],

  "graphs": [ {
    "balloonText": "",
    "lineThickness": 3,
    "valueField": "value",
    "fillAlphas": 1,
    "fillToGraph": 1,
    "fillColors": '#09c',
    "labelColorField": "#fff"




  },
  {
    "balloonText": "rwar",
    "fillAlphas": 0,
    "type": "column",
    "valueField": "vertical",
    "fixedColumnWidth": 3,
    "labelText": "[[value]]",
    "labelOffset": 20,
    "dashLengthField": "dashLengthColumn",
  }, ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },


  "categoryField": "category",
  "categoryAxis": {
    "gridAlpha": 0.05,
    // "gridColor" : "#fff",
    // "axisColor" : "#fff",
    "startOnAxis": true,
    // "color": "#fff",
    "tickLength": 5,
    "labelFunction": function( label, item ) {
      return '' + Math.round( item.dataContext.category * 10 ) / 10;
    }
  }

} );

var chart2 = AmCharts.makeChart( "chartdiv2", {
  "type": "serial",
  "theme": "light",
  "dataProvider": chartData,
  "precision": 2,
  "valueAxes": [ {
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "lineThickness": 3,
    "valueField": "value"
  }, {
    "balloonText": "rwar",
    "fillAlphas": 1,
    "type": "column",
    "valueField": "vertical",
    "fixedColumnWidth": 10,
    "labelText": "[[value]]",
    "labelOffset": 20
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "category",
  "categoryAxis": {
    "gridAlpha": 0.05,
    "startOnAxis": true,
    "tickLength": 5,
    "labelFunction": function( label, item ) {
      return '' + Math.round( item.dataContext.category * 10 ) / 10;
    }
  }

} );
var chart2 = AmCharts.makeChart( "chartdiv3", {
  "type": "serial",
  "theme": "light",
  "dataProvider": chartData,
  "precision": 2,
  "valueAxes": [ {
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "lineThickness": 3,
    "valueField": "value"
  }, {
    "balloonText": "rwar",
    "fillAlphas": 1,
    "type": "column",
    "valueField": "vertical",
    "fixedColumnWidth": 10,
    "labelText": "[[value]]",
    "labelOffset": 20
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "category",
  "categoryAxis": {
    "gridAlpha": 0.05,
    "startOnAxis": true,
    "tickLength": 5,
    "labelFunction": function( label, item ) {
      return '' + Math.round( item.dataContext.category * 10 ) / 10;
    }
  }

} );

var chart2 = AmCharts.makeChart( "chartdiv4", {
  "type": "serial",
  "theme": "light",
  "dataProvider": chartData,
  "precision": 2,
  "valueAxes": [ {
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "lineThickness": 3,
    "valueField": "value"
  }, {
    "balloonText": "rwar",
    "fillAlphas": 1,
    "type": "column",
    "valueField": "vertical",
    "fixedColumnWidth": 10,
    "labelText": "[[value]]",
    "labelOffset": 20
  } ],

  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },

  "categoryField": "category",
  "categoryAxis": {
    "gridAlpha": 0.05,
    "startOnAxis": true,
    "tickLength": 5,
    "labelFunction": function( label, item ) {
      return '' + Math.round( item.dataContext.category * 10 ) / 10;
    }
  }

} );


var knowledgeBenchmark = 80;
var skillsBenchmark = 99;
var behavioralBenchmark = 78;
var judgmentBenchmark = 93;

var employeeKnowledge = 85;
var employeeSkills = 76;
var employeeBehavioral = 85;
var employeeJudgment = 85;


$(".knowledge-metric .segment-score").text(employeeKnowledge);
$(".knowledge-metric .print-benchmark-score").text("Benchmark: " +knowledgeBenchmark);



$(".skills-metric .segment-score").text(employeeSkills);
$(".skills-metric .print-benchmark-score").text("Benchmark: " + skillsBenchmark);

$(".behavioral-metric .segment-score").text(employeeBehavioral);
$(".behavioral-metric .print-benchmark-score").text("Benchmark: " + behavioralBenchmark);

$(".judgment-metric .segment-score").text(employeeJudgment);
$(".judgment-metric .print-benchmark-score").text("Benchmark: " + judgmentBenchmark);




//Create BarCharts
var chart = AmCharts.makeChart("knowledge-bar", {
  "type": "serial",
  "theme": "light",
  "categoryField": "assessment",
  "columnSpacing": 0,
  "columnWidth": .2,
  "startEffect": "easeInSine",
  "startDuration": .25,
  "colors" : ["#F5A623", "#67DAFB"],
  "addClassNames" : true,
  "allLabels": [

    {
      "text": "Benchmark: " + knowledgeBenchmark,
      "bold": false,
      "x": "60%",
      "y": "50%",
    }
  ],

  "maximum": 100,
  "trendLines": [],
  "graphs": [
    {
      "balloonText" : "Employee: " + employeeKnowledge ,
      "fillAlphas": 1,
      "id": "AmGraph-1",
      "lineAlpha": 0.2,
      "title": "Employee",
      "type": "column",
      "valueField": "employee",
      "showBalloon" : false
    },
    {
      "balloonText" : "Benchmark: " + knowledgeBenchmark,
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
  "colors" : ["#F5A623", "#67DAFB"],
    "allLabels": [

    {
      "text": "Benchmark: " + skillsBenchmark,
      "bold": false,
      "x": "60%",
      "y": "50%",
    }
  ],


  "maximum": 100,

  "graphs": [
  {
    "balloonText": "Employee: " + employeeSkills,
    "fillAlphas": 1,
    "id": "AmGraph-1",
    "lineAlpha": 0.2,
    "title": "Employee",
    "type": "column",
    "valueField": "employee",
  },
  {
    "balloonText": "Benchmark:" + skillsBenchmark,
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

var chart = AmCharts.makeChart("behavioral-bar", {
  "type": "serial",
  "theme": "light",
    "startEffect": "easeInSine",
  "startDuration": .25,
  "categoryField": "assessment",
  "columnSpacing": 0,
  "columnWidth": .2,
  "colors" : ["#F5A623", "#67DAFB"],
  "allLabels": [

    {
      "text": "Benchmark: " + behavioralBenchmark,
      "bold": false,
      "x": "60%",
      "y": "50%",
    }
  ],

  "maximum": 100,
  "graphs": [
  {
    "balloonText": "Employee:[[value]]",
    "fillAlphas": 1,
    "id": "AmGraph-1",
    "lineAlpha": 0.2,
    "title": "Employee",
    "type": "column",
    "valueField": "employee"
  },
  {
    "balloonText": "Benchmark:[[value]]",
    "fillAlphas": 1,
    "id": "AmGraph-2",
    "lineAlpha": 0.2,
    "title": "Average",
    "type": "column",
    "valueField": "average"
  }
  ],
  "guides": [],
  "valueAxes": [
  {
    "id": "ValueAxis-1",
    "axisAlpha": 0,
    "gridAlpha": 0,
    "minimum": 0,
    "maximum" : 100,
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
    "employee": employeeBehavioral,
    "average": behavioralBenchmark
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
  "colors" : ["#F5A623", "#67DAFB"],
   "allLabels": [

    {
      "text": "Benchmark: " + judgmentBenchmark,
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


$(".assessment-metrics > div").click(function(){
  $('#modal-knowledge').modal('show');
});
</script>





<?=createSiteEnd();?>