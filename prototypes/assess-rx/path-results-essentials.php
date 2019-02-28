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
/*             //prototype only. we have an enterprise license for prod*/
             .amcharts-chart-div a {
     display: none !important;
 }

        </style>

        <div class="layout">
            <div class="container" id="path-results-container">
                <section class="section section-main section-box">
                    <section class="return-link hidden-print">
                        <a href="/demo-admin-assessment-results.php"><i class="fa fa-fw fa-chevron-left"></i>Return to Results List</a>
                    </section>
                    <section>
                        <div class="row">

                            <div class="col-md-10">
                                <h1>Abigail Abbot</h1>
                                <h4> Registered Nurse / Emergency Path Results </h4>
                                <a href="/full-report-essentials.php" class="btn btn-default btn-sm btn-path-results-report">View Full Report</a>
                            </div>

                        </div>


                        <hr>
                    </section>
                    <section>
                        <div class="assessment-metrics">
                            <div class="row ">
                                <div class="col-sm-6 col-xs-6 col-md-6 visible-print-inline-block">
                                    <div class="knowledge-metric assessment-metric">
                                        <h2>Knowledge</h2>
                                        <span class="segment-score"></span>
                                        <span class="segment-percentile">60th Percentile</span>
                                        <div id="knowledge-bar" class="chart-container"></div>
                                        <a href="#knowledge-details " class="scroll-link btn-xs btn js-btn-view-details btn-default js-btn-view-knowledge hidden-print">View Details</a>
                                        <div class="print-benchmark-score visible-print"></div>
                                        <!--                                        <hr class="visible-sm visible-xs hidden-print">-->
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-6 col-md-6">
                                    <div class="skills-metric assessment-metric visible-print-inline-block">
                                        <h2>Skills</h2>
                                        <span class="segment-score"></span>
                                        <span class="segment-percentile">40th Percentile</span>
                                        <div id="skills-bar" class="chart-container"></div>
                                        <div class="print-benchmark-score visible-print"></div>
                                        <a href="#skills-details" class="btn-xs btn btn-default hidden-print js-btn-view-skills js-btn-view-details scroll-link">View Details</a>
                                        <!--                                        <hr class="visible-sm visible-xs hidden-print">-->
                                    </div>
                                </div>


                            </div>
                        </div>
                    </section>
                    <hr>

                    <section class="section knowledge-details section-details" id="knowledge-details">
                        <h2>Knowledge Assessment Details</h2>
                        <section class="section">
                            <nav class="nav-collapsing-tabs">
                                <a href="#" class="nav-header">
                                <span>RN:Emergency Assessment</span><i class="fa fa-chevron-down"></i></a>

                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active">
                                        <a href="#assessment-1" data-toggle="tab">RN: Emergency Assessment</a>
                                    </li>
                                    <li>
                                        <a href="#assessment-2" data-toggle="tab">Pharmacology: RN Assessment</a>
                                    </li>
                                </ul>
                            </nav>


                            <div class="tab-content">
                                <section id="assessment-1" class="active tab-pane section results-section assessment-details-tab">
                                    <h3>RN: Emergency Assessment: <span class="score-font">85%</span></h3>

                                    <section class="section feedback ">
                                        <h3>Results by Category</h3>
                                        <section class="assessment-results__section categories">
                                            <div class="row categories__header hidden-xs hidden-sm">


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

                                                <div class="col-md-3  col-percentage-correct">100%</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5 text-left">Respiratory</div>
                                                <div class="col-md-4">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width:50%;">2 of 4 correct</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-percentage-correct">50%</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5 text-left">Gastrointestinal</div>
                                                <div class="col-md-4">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width:75%;">3 of 4 correct</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-percentage-correct">75%</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5 text-left">Neurology</div>
                                                <div class="col-md-4">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width:83%;">5 of 6 correct</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-percentage-correct">83%</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5 text-left">Professional Issues</div>
                                                <div class="col-md-4">
                                                    <div class="progress warning">0 of 1 correct
                                                        <div class="progress-bar" style="width:0%;"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-percentage-correct">0%</div>
                                            </div>
                                        </section>


                                    </section>
                                    <section class="section feedback">
                                        <h3>Feedback</h3>
                                        <div>
                                            <p>Based on the questions answered incorrectly, it is recommended that Abigail review the following topics:</p>
                                            <ul>
                                                <li>The most likely diagnosis for the patient who is experiencing symptoms of flank pain with hematuria</li>
                                                <li>The additional disease process for which a patient with a history of intermittent claudication of the lower extremities is at high risk</li>
                                                <li>
                                                    Diagnoses that are surgical emergencies</li>
                                                <li>The appropriate dose of acetaminophen for pediatric patients</li>
                                                <li>The most common symptom of appendicitis</li>
                                            </ul>
                                        </div>
                                    </section>

                                </section>

                                <section id="assessment-2" class="tab-pane section results-section assessment-details-tab">
                                    <h3>Pharmacology: RN Assessment: <span class="score-font"> 80%</span></h3>

                                    <section class="section feedback ">
                                        <h3>Results by Category</h3>
                                        <section class="assessment-results__section  categories">
                                            <div class="row categories__header hidden-sm hidden-xs">


                                                <div class="col-md-5 text-left"> Category</div>
                                                <div class="col-md-4 text-center"> Number Answered Correctly</div>
                                                <div class="col-md-3 text-center"> Percentage Correct</div>

                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5 text-left">Cardiovascular</div>
                                                <div class="col-sm-4">
                                                    <div class="progress ">
                                                        <div class="progress-bar" style="width:80%;">2 of 3 correct</div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3 col-percentage-correct">66%</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5 text-left">Respiratory</div>
                                                <div class="col-sm-4">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width:50%;">2 of 4 correct</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-percentage-correct">50%</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5 text-left">Gastrointestinal</div>
                                                <div class="col-sm-4">
                                                    <div class="progress warning">0 of 4 correct
                                                        <div class="progress-bar" style="width:0%;"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-percentage-correct">0%</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5 text-left">Neurology</div>
                                                <div class="col-sm-4">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width:44%;">5 of 6 correct</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-percentage-correct">83%</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5 text-left">Professional Issues</div>
                                                <div class="col-sm-4">
                                                    <div class="progress  ">
                                                        <div class="progress-bar" style="width:90%;">9 of 10 correct</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-percentage-correct">90%</div>
                                            </div>
                                        </section>


                                    </section>
                                    <section class="section feedback">

                                        <h3>Feedback</h3>
                                        <div>
                                            <p>Based on the questions answered incorrectly, it is recommended that Abigail review the following topics:</p>
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

                    <section class="section  skills-details section-details" id="skills-details">
                          <h2>Skills Score Details</h2>
                         <section class="feedback section">
                      
                        <h3>RN: Emergency Skills Self-Assessment: <span class="score-font">76%</span></h3>

                       
                            <section class="section">
                                <h4>Self-Assessment Rating Scale:</h4>
                                <ul>
                                    <li><label>No Experience</label> - Theory or observation only during the past 12 months</li>
                                    <li><label>Limited Experience</label> - Performed less than 12 times within the past 12 months and may need a review</li>
                                    <li><label>Experienced</label> - Performed at least once per month within the past 12 months and may need minimal assistance</li>
                                    <li><label>Highly Skilled</label> - Performed on at least a weekly basis over the past 12 months; proficient</li>
                                </ul>
                            </section>

                            <section class="assessment-results__section categories">
                                <div class="row categories__header">
                                    <div class="col-sm-9 text-left">Cardiovascular</div>
                                    <div class="col-sm-3 hidden-sm hidden-xs">Rating</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9 text-left">Assessment - Ausculation (rate, rhythm)</div>
                                    <div class="col-sm-3">Highly Skilled</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9 text-left">Assessment - Doppler</div>
                                    <div class="col-sm-3">Highly Skilled</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9 text-left">Assist with Arterial line insertion</div>
                                    <div class="col-sm-3">Limited Experience</div>
                                </div>
                                <div class="row danger">
                                    <div class="col-sm-9 text-left">Assist with Central line insertion</div>
                                    <div class="col-sm-3">No Experience</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9 text-left">Assist with setup/insertion of Cardioversion</div>
                                    <div class="col-sm-3">Experienced</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9 text-left">Care of patient - Acute MI</div>
                                    <div class="col-sm-3">Experienced</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9 text-left">Care of patient - Angina</div>
                                    <div class="col-sm-3">Experienced</div>
                                </div>
                            </section>

                            <section class="assessment-results__section categories">
                                <div class="row categories__header">
                                    <div class="col-sm-9 text-left">Pulmonary</div>
                                    <div class="col-sm-3  hidden-sm hidden-xs ">Rating</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9 text-left">Cardiovascular</div>
                                    <div class="col-sm-3">Experienced</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9 text-left">Cardiovascular</div>
                                    <div class="col-sm-3">Experienced</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9 text-left">Cardiovascular</div>
                                    <div class="col-sm-3">Experienced</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9 text-left">Cardiovascular</div>
                                    <div class="col-sm-3">Experienced</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9 text-left">Cardiovascular</div>
                                    <div class="col-sm-3">Experienced</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9 text-left">Cardiovascular</div>
                                    <div class="col-sm-3">Experienced</div>
                                </div>
                                <div class="row danger">
                                    <div class="col-sm-9 text-left">Cardiovascular</div>
                                    <div class="col-sm-3">Not Experienced</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9 text-left">Cardiovascular</div>
                                    <div class="col-sm-3">Experienced</div>
                                </div>
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
                        $(".js-btn-view-knowledge").click(function() {
                            $(".section-details").not("#knowledge-details").hide();
                            $("#knowledge-details").toggle();
                            var btnText = $(this).text();
                            $(this).text(btnText == "View Details" ? "Hide Details" : "View Details");
                            $(".js-btn-view-details").not(this).text("View Details");
                            if ($(".section-details").is(":visible") == true) {
                                $(".assessment-metric").removeClass("selected");
                                $(this).closest(".assessment-metric").addClass("selected");
                                $(this).closest(".assessment-metrics").addClass("selected");
                            } else {
                                $(this).closest(".assessment-metric").removeClass("selected");
                                $(this).closest(".assessment-metrics").removeClass("selected");
                            };
                        });


                        $(".js-btn-view-skills").click(function() {

                            $(".section-details").not("#skills-details").hide();

                            $("#skills-details").toggle();
                            var btnText = $(this).text();
                            $(".js-btn-view-skills").text(btnText == "View Details" ? "Hide Details" : "View Details");
                            $(".js-btn-view-details").not(this).text("View Details");


                            if ($(".section-details").is(":visible") == true) {
                                $(".assessment-metric").removeClass("selected");
                                $(this).closest(".assessment-metric").addClass("selected");
                                $(this).closest(".assessment-metrics").addClass("selected");

                            } else {
                                $(this).closest(".assessment-metric").removeClass("selected");
                                $(this).closest(".assessment-metrics").removeClass("selected");

                            };
                        });

                        $(".js-btn-view-behavioral").click(function() {

                            $(".section-details").not("#behavioral-details").hide();

                            $("#behavioral-details").toggle();
                            var btnText = $(this).text();
                            $(".js-btn-view-behavioral").text(btnText == "View Details" ? "Hide Details" : "View Details");
                            $(".js-btn-view-details").not(this).text("View Details");


                            if ($(".section-details").is(":visible") == true) {
                                $(".assessment-metric").removeClass("selected");
                                $(this).closest(".assessment-metric").addClass("selected");
                                $(this).closest(".assessment-metrics").addClass("selected");

                            } else {
                                $(this).closest(".assessment-metric").removeClass("selected");
                                $(this).closest(".assessment-metrics").removeClass("selected");

                            };
                        });

                        $(".js-btn-view-judgment").click(function() {

                            $(".section-details").not("#judgment-details").hide();

                            $("#judgment-details").toggle();
                            var btnText = $(this).text();
                            $(".js-btn-view-judgment").text(btnText == "View Details" ? "Hide Details" : "View Details");
                            $(".js-btn-view-details").not(this).text("View Details");

                            if ($(".section-details").is(":visible") == true) {
                                $(".assessment-metric").removeClass("selected");
                                $(this).closest(".assessment-metric").addClass("selected");
                                $(this).closest(".assessment-metrics").addClass("selected");
                            } else {
                                $(this).closest(".assessment-metric").removeClass("selected");
                                $(this).closest(".assessment-metrics").removeClass("selected");
                            };
                        });

                        $("a.scroll-link").click(function(event) {
                            event.preventDefault();
                            if ($($(this).attr("href")).is(":visible") == true) {
                                $("html, body").animate({
                                    scrollTop: $($(this).attr("href")).offset().top
                                }, 500);
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
                        $(".knowledge-metric .print-benchmark-score").text("Benchmark: " + knowledgeBenchmark);

                        $(".skills-metric .segment-score").text(employeeSkills + "%");
                        $(".skills-metric .print-benchmark-score").text("Benchmark: " + skillsBenchmark);

                        $(".behavioral-metric .segment-score").text(employeeBehavioral + "%");
                        $(".behavioral-metric .print-benchmark-score").text("Benchmark: " + behavioralBenchmark);

                        $(".judgment-metric .segment-score").text(employeeJudgment + "%");
                        $(".judgment-metric .print-benchmark-score").text("Benchmark: " + judgmentBenchmark);


                        var BenchmarkColor = "#FFBC42"; //"#0D75A1"; //"#6BD8FA";
                        var employeeColor = "#09c"; // "#F9C05E";

                        //Create BarCharts
                        var chart = AmCharts.makeChart("knowledge-bar", {
                            "addClassNames": true,
                            "type": "serial",
                            "theme": "light",
                            "categoryField": "assessment",
                            "columnSpacing": 0,
                            "columnWidth": .2,
                            "startEffect": "easeInSine",
                            "startDuration": .25,
                            "colors": [employeeColor, BenchmarkColor],
                            "addClassNames": true,
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
                            "graphs": [{
                                    "balloonText": "Employee: " + employeeKnowledge + "%",
                                    "fillAlphas": 1,
                                    "id": "AmGraph-1",
                                    "lineAlpha": 0.2,
                                    "title": "Employee",
                                    "type": "column",
                                    "valueField": "employee"
                                },
                                {
                                    "balloonText": "Benchmark: " + knowledgeBenchmark + "%",
                                    "fillAlphas": 1,
                                    "id": "AmGraph-2",
                                    "lineAlpha": 0.2,
                                    "title": " Benchmark",
                                    "type": "column",
                                    "valueField": "Benchmark",
                                }
                            ],

                            "valueAxes": [{
                                "id": "ValueAxis-1",
                                "axisAlpha": 0,
                                "gridAlpha": 0,
                                "minimum": 0,
                                "labelsEnabled": false



                            }],
                            "categoryAxis": {
                                "position": "left",
                                "axisAlpha": 0,
                                "gridAlpha": 0,
                                "labelsEnabled": false
                            },

                            "dataProvider": [{
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
                            "colors": [employeeColor, BenchmarkColor],
                            "allLabels": [

                                {
                                    "text": "Benchmark: " + skillsBenchmark + "%",
                                    "bold": false,
                                    "x": "60%",
                                    "y": "50%",
                                }
                            ],
                            "maximum": 100,
                            "graphs": [{
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

                            "valueAxes": [{
                                "id": "ValueAxis-1",
                                "position": "left",
                                "axisAlpha": 0,
                                "gridAlpha": 0,
                                "minimum": 0,
                                "labelsEnabled": false


                            }],
                            "categoryAxis": {
                                "position": "left",
                                "axisAlpha": 0,
                                "gridAlpha": 0,
                                "labelsEnabled": false
                            },

                            "dataProvider": [{
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
                            "colors": [employeeColor, BenchmarkColor],
                            "allLabels": [

                                {
                                    "text": "Benchmark: " + behavioralBenchmark + "%",
                                    "bold": false,
                                    "x": "60%",
                                    "y": "50%",
                                }
                            ],
                            "maximum": 100,
                            "graphs": [{
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

                            "valueAxes": [{
                                "id": "ValueAxis-1",
                                "position": "left",
                                "axisAlpha": 0,
                                "gridAlpha": 0,
                                "minimum": 0,
                                "labelsEnabled": false


                            }],
                            "categoryAxis": {
                                "position": "left",
                                "axisAlpha": 0,
                                "gridAlpha": 0,
                                "labelsEnabled": false
                            },

                            "dataProvider": [{
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
                            "colors": [employeeColor, BenchmarkColor],

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
                            "graphs": [{
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
                                "labelsEnabled": false,
                                "gridAlpha": 0,
                                "axisAlpha": 0,
                                "minimum": 0,
                                "maximum": 100,
                            }],
                            "categoryAxis": {

                                "position": "left",
                                "axisAlpha": 0,
                                "gridAlpha": 0,
                                "labelsEnabled": false

                            },

                            "balloon": {},
                            "titles": [],
                            "dataProvider": [{
                                    "assessment": "Judgement",
                                    "employee": employeeJudgment,
                                    "Benchmark": judgmentBenchmark
                                },

                            ],
                        });


                        $('.branding a').click(function(e) {
                            e.preventDefault();
                            window.location.href = "/demo-start.php";
                        });
                    </script>





                    <?=createSiteEnd();?>