<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Assessment Results';
$patterns['focus']['title'] = 'Assessment Results';

$patterns['header']['mainNavActive'] ='results';


?>
<style>

</style>

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
    font-size:18px;
    display:block;
}
.chart-container {
    margin-top:20px;
    margin-bottom:30px;
}
h2 .segment-score{
    font-weight:600;
    font-family: 'Merriweather', serif;
    margin-bottom:30px;
}
.metric .panel{
    border: 1px solid #cfdbe2;
    border-top: 3px solid #cfdbe2;
    border-radius: 4px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
</style>
<div class="layout ">
    <div class="container">
        <section class=" section-main section-box">
     <section class="">

         <h1 style="font-weight: 600;  font-family: 'Merriweather', serif;"">Gertrude Peckinpah</h1>
         <h4>Results for <span style="font-weight: 600">Registerd Nurse / Emergency </span> Assessment Path</h4>
   <hr>
     </section>

     <section class="section">
            <div class="row">
                 <div class="col-md-6">


                        <h2 class="text-center" style="margin-top:0">Knowledge <span class="segment-score">85%</span></h2>


                        <div class="chart-container segment-score">
                            <canvas id="myChart3" class="segment-score" width="400" height="150"> </canvas>
                        </div>

                        <span class="average-score text-center">Benchmark 75%</span>
                </div>

                <div class="col-md-6">


                        <h2 class="text-center" style="margin-top:0">Knowledge <span class="segment-score">85%</span></h2>


                        <div class="chart-container segment-score">
                            <canvas id="myChart" class="segment-score" width="400" height="150"> </canvas>
                        </div>

                        <span class="average-score text-center">Benchmark 75%</span>
                </div>

                <div class="col-md-6" style="border-left: 1px solid #ededed">


                        <h2 class="text-center" style="margin-top:0">Skills <span class="segment-score">85%</span></h2>

                        <div class="chart-container">


                            <canvas id="myChart2" width="400" height="150"> </canvas>

                        </div>
                        <span class="text-center average-score">Benchmark 75%</span>
                </div>
            </div>
             <hr>
        </section>

            <section class="section">
            <div class="row">

                <div class="col-md-6">

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

                </div>
                <div class="col-md-6">

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



    var ctx = $("#myChart");
    var ctx2 = $("#myChart2");
    var ctx3 = $("#myChart3");

    Chart.pluginService.register({
        beforeDraw: function(chart) {
            var width = chart.chart.width,
            height = chart.chart.height,
            ctx = chart.chart.ctx;

            ctx.restore();
            var fontSize = (height / 114).toFixed(2);
            ctx.font = fontSize + "em sans-serif";
            ctx.textBaseline = "middle";

            var text = "85%",
            textX = Math.round((width - ctx.measureText(text).width) / 2),
            textY = height / 2;

            ctx.fillText(text, textX, textY);
            ctx.save();
        }
    });


    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [75, 25],
                backgroundColor: [
                '#faebca',
                '#ededed'
                ],
                labels: [
                'Industry Average',


                ,
                ]
            }, {
                data: [85, 20],
                backgroundColor: [
                '#d6e9c7',
                '#ededed',

                ],
                labels: [
                'Employee',


                ],
            },]
        },
        options: {
            cutoutPercentage: 70,
            responsive: true,
            legend: {
                display: false,
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        var dataset = data.datasets[tooltipItem.datasetIndex];
                        var index = tooltipItem.index;
                        return dataset.labels[index] + ': ' + dataset.data[index];
                    }
                }
            }
        }
    });

    var myChart2 = new Chart(ctx2, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [80, 22],
                backgroundColor: [
                    '#fe9237',
                    '#ededed'
                ],
                labels: [
                'Industry Average',                ,
                ]
            }, {
                data: [90, 10],
                backgroundColor: [
                    '#0099cc',
                    '#ededed',
                ],
                labels: [
                    'Employee',
                ],
            },]
        },
        options: {
            cutoutPercentage: 70,
            responsive: true,
            legend: {
                display: false,
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        var dataset = data.datasets[tooltipItem.datasetIndex];
                        var index = tooltipItem.index;
                        return dataset.labels[index] + ': ' + dataset.data[index];
                    }
                }
            }
        }
    });

    var myChart3 = new Chart(ctx3, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [80, 22],
                backgroundColor: [
                    '#fe9237',
                    '#ededed'
                ],
                labels: [
                'Industry Average',                ,
                ]
            }, {
                data: [90, 10],
                backgroundColor: [
                    '#0099cc',
                    '#ededed',
                ],
                labels: [
                    'Employee',
                ],
            },]
        },
        options: {
            cutoutPercentage: 70,
            responsive: true,
            legend: {
                display: false,
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        var dataset = data.datasets[tooltipItem.datasetIndex];
                        var index = tooltipItem.index;
                        return dataset.labels[index] + ': ' + dataset.data[index];
                    }
                }
            }
        }
    });




</script>


<?=createSiteEnd();?>