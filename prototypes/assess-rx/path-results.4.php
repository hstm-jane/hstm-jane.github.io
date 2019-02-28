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

.chart-container {
  margin-top:30px;
  margin-bottom:30px;
}

h2{
  font-weight: 600;
/*  border-bottom: 3px solid #555;
display: inline-block;
width: auto;*/
}

.segment-score{
  font-weight:600;
  font-family: 'Merriweather', serif;
  font-size: 1.1em;
/*  border-radius: 50%;
border: 3px solid #555;
height:85px;
width:85px;
display: inline-block;
vertical-align: middle;
color: #f9f9f9;
text-align: center;
padding-top: 15px;*/
}

#chartdiv, #chartdiv2 , #chartdiv3, #chartdiv4  {
  width       : 100%;
  height      : 300px;
  font-size   : 11px;
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

</style>
<div class="layout ">
  <div class="container">
    <section class="section section-main section-box">
      <section class="">
        <h1 style="font-weight: 600;">Gertrude Peckinpah</h1>
        <h4>Results for <span style="font-weight: 600">Registerd Nurse / Emergency </span> Assessment Path</h4>

      </section>
      <section class="section">
        <div class="row" >
          <div class="col-md-5">
            <section >
              <h2 style="margin-top: 0;">Knowledge <span class="segment-score">85%</span></h2>


              <div class="chart-container">
                <div id="chartdiv"></div>

              </div>
            </section>
          </div>
          <div class="col-md-7">
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
                  <li><span class="meta-type">Knowledge    Assessment</span></li>

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
          </div>
        </div>


        <div class="row">
          <div class="col-md-5">
            <section class="">
              <h2 style="margin-top:0">Skills <span class="segment-score">90%</span></h2>
              <div class="chart-container">
                <div id="chartdiv2"></div>
              </div>
            </section>
          </div>
          <div class="col-md-7" >
            <section >

              <div class="slat-group">
                <div class="slat-group-header">
                  <div class="slat-group-header-title">
                    <h3>Skills Self Assessments</h3>
                  </div>
                </div>
                <div class="slat-group-content">
                  <?php
                  $slat = array(
                    'title' => 'Emergency Nurse Skills Checklist',
                    'attributes' => array(
                      array('class', array('slat slat-callout')),
                    ),
                    'meta' => array(
                      array(
                        'type' => 'Skills Self Assessment',
                      ),

                      array(
                        'label' => 'Score: ',
                        'value' => 'Score: 80%',
                        'attributes' => array(
                          array('class','meta-callout'),
                        )
                      )
                    ),

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


        <div class="row">

          <div class="col-md-5">
            <section class="">
              <h2 style="margin-top:0">Behavioral <span class="segment-score">90%</span></h2>


              <div class="chart-container">
                <div id="chartdiv3"></div>



              </div>

            </section>
          </div>
          <div class="col-md-7" >



            <section class="">

              <div class="slat-group">
                <div class="slat-group-header">
                  <div class="slat-group-header-title">
                    <h3>Behavioral Assessments</h3>
                  </div>
                </div>
                <div class="slat-group-content">
                  <?php
                  $slat = array(
                    'title' => 'Emergency Nurse Skills Checklist',
                    'attributes' => array(
                      array('class', array('slat slat-callout')),
                    ),
                    'meta' => array(
                      array(
                        'type' => 'Skills Self Assessment',
                      ),

                      array(
                        'label' => 'Score: ',
                        'value' => 'Score: 80%',
                        'attributes' => array(
                          array('class','meta-callout'),
                        )
                      )
                    ),

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


        <div class="row">
          <div class="col-md-5">
            <section class="">
              <h2 style="margin-top:0">Judgment <span class="segment-score">90%</span></h2>


              <div class="chart-container">
                <div id="chartdiv4"></div>



              </div>

            </section>
          </div>
          <div class="col-md-7" >



            <section class="">

              <div class="slat-group">
                <div class="slat-group-header">
                  <div class="slat-group-header-title">
                    <h3>Judgment Assessments</h3>
                  </div>
                </div>
                <div class="slat-group-content">
                  <?php
                  $slat = array(
                    'title' => 'Emergency Nurse Skills Checklist',
                    'attributes' => array(
                      array('class', array('slat slat-callout')),
                    ),
                    'meta' => array(
                      array(
                        'type' => 'Skills Self Assessment',
                      ),

                      array(
                        'label' => 'Score: ',
                        'value' => 'Score: 80%',
                        'attributes' => array(
                          array('class','meta-callout'),
                        )
                      )
                    ),

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
var chartData = [];
for ( var i = -5; i < 5.1; i += 0.1 ) {
  var dp = {
    category: i,
    value: NormalDensityZx( i, 0, 1 )
  };
  if ( verticals.indexOf( Math.round( i * 10 ) / 10 ) !== -1 ) {
    dp.vertical = dp.value;
  }
  chartData.push( dp );
}

/**
* Create a chart

*/
var chart = AmCharts.makeChart( "chartdiv", {
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
    "balloonText": "",
    "lineThickness": 3,
    "valueField": "value",
    "fillAlphas": 1,
    "fillToGraph": 1,
    "fillColors": '#09c',


  },
  {
    "balloonText": "rwar",
    "fillAlphas": 1,
    "type": "column",
    "valueField": "vertical",
    "fixedColumnWidth": 3,
    "labelText": "[[value]]",
    "labelOffset": 20,
// "colors": ["#FF6600", "#FCD202", "#B0DE09", "#0D8ECF", "#2A0CD0", "#CD0D74", "#CC0000", "#00CC00", "#0000CC", "#DDDDDD", "#999999", "#333333", "#990000"],

}, ],
"chartCursor": {
  "categoryBalloonEnabled": false,
  "cursorAlpha": 0,
  "zoomable": false
},
// "colors": ["#FF6600", "#FCD202", "#B0DE09", "#0D8ECF", "#2A0CD0", "#CD0D74", "#CC0000", "#00CC00", "#0000CC", "#DDDDDD", "#999999", "#333333", "#990000"],

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


</script>





<?=createSiteEnd();?>