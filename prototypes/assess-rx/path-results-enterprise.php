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
<a href="#" class="theme-change-btn">Change Theme</a>
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
  padding-top: 30px;
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
        <a href="/demo-admin-assessment-results.php"><i class="fa fa-fw fa-chevron-left"></i>Return to Results List</a>
      </section>
      <section>
        <div class="row">
             <div class="col-md-2 text-left">
            <div class="index-container">
              <div class="index">
                <div class="index-score">87</div>
                <div class="index-label">Index</div>
              </div>
            </div>
          </div>
          <div class="col-md-10">
            <h1>Abigail Abbot</h1>
            <h4>Path Results for: <strong>Registered Nurse / Emergency</strong></h4>
          </div>
         
        </div>
        <div class="btn-path-results-report">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Print <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="/demo-admin-assessment-result-report.php">View Full Report</a></li>
              <li><a href="/demo-admin-assessment-result-preceptor.php">Preceptor Card</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </section>
      <section>
        <div class="assessment-metrics">
          <div class="row">
            <div class="col-sm-6 col-md-3 visible-print-inline-block">
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
            <div class="col-sm-6 col-md-3">
              <div class="skills-metric assessment-metric visible-print-inline-block">
                <h2>Skills</h2>
                <span class="segment-score"></span>
                <span class="segment-percentile">40th Percentile</span>
                <div id="skills-bar" class="chart-container"></div>
                <div class="print-benchmark-score visible-print"></div>
                <a href="#skills-details" class="btn-xs btn btn-default hidden-print js-btn-view-skills js-btn-view-details scroll-link">View Details</a>
                <hr class="visible-sm visible-xs hidden-print">
              </div>
            </div>
            <div class="col-sm-6 col-md-3" >
              <div class="behavioral-metric assessment-metric visible-print-inline-block">
                <h2>Behavioral</h2>
                <span class="segment-score"></span>
                <span class="segment-percentile">40th Percentile</span>
                <div id="behavioral-bar" class="chart-container"></div>
                <div class="print-benchmark-score visible-print"></div>
                <a href="#behavioral-details" class="btn-xs btn btn-default hidden-print js-btn-view-behavioral js-btn-view-details scroll-link">View Details</a>
                <hr class="visible-sm visible-xs hidden-print">
              </div>
            </div>
            <div class="col-sm-6 col-md-3 visible-print-inline-block">
              <div class="judgment-metric assessment-metric">
                <h2>Judgment</h2>
                <span class="segment-score"></span>
                <span class="segment-percentile">70th Percentile</span>
                <div id="judgment-bar" class="chart-container"></div>
                <div class="print-benchmark-score visible-print"></div>
                <a href="#judgment-details" class="btn-xs btn btn-default hidden-print js-btn-view-judgment js-btn-view-details scroll-link">View Details</a>
                <hr class="visible-sm visible-xs hidden-print">
              </div>
            </div>
          </div>
        </div>
      </section>
      <hr>

      <section class="section knowledge-details section-details" id="knowledge-details" >
        <h2>Knowledge Score Assessment Details</h2>
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
                    <div class="row">
                      <div class="col-md-5 text-left">Professional Issues</div>
                      <div class="col-md-4">
                        <div class="progress warning">0 of 1 correct
                          <div class="progress-bar" style="width:0%;"></div>
                        </div>
                      </div>
                      <div class="col-md-3 text-center">0%</div>
                    </div>
                  </section>


                </section>
                <section class="feedback">
                    <h3>Feedback</h3>
                    <p>Based on the questions answered incorrectly, it is recommended that Abigail review the following topics:</p>
                        <ul>
                          <li>The most likely diagnosis for the patient who is experiencing symptoms of flank pain with hematuria</li>
                          <li>The additional disease process for which a patient with a history of intermittent claudication of the lower extremities is at high risk</li>
                          <li>
                          Diagnoses that are surgical emergencies</li>
                          <li>The appropriate dose of acetaminophen for pediatric patients</li>
                          <li>The most common symptom of appendicitis</li>
                      </ul>
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
                    <div class="row">
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

      <section class="section skills-details section-details" id="skills-details" >
        <h2>Skills Score Details</h2>
        <h3>RN: Emergency Skills Self-Assessment: <span class="assessment-score">76%</span></h3>

        <section class="feedback">
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
            <div class="col-md-9 text-left">Cardiovascular</div>
            <div class="col-md-3 ">Rating</div>
          </div>
          <div class="row">
            <div class="col-md-9 text-left">Assessment - Ausculation (rate, rhythm)</div>
            <div class="col-md-3">Highly Skilled</div>
          </div>
          <div class="row">
            <div class="col-md-9 text-left">Assessment - Doppler</div>
            <div class="col-md-3">Highly Skilled</div>
          </div>
          <div class="row">
            <div class="col-md-9 text-left">Assist with Arterial line insertion</div>
            <div class="col-md-3">Limited Experience</div>
          </div>
          <div class="row danger">
            <div class="col-md-9 text-left">Assist with Central line insertion</div>
            <div class="col-md-3">No Experience</div>
          </div>
          <div class="row">
            <div class="col-md-9 text-left">Assist with setup/insertion of Cardioversion</div>
            <div class="col-md-3">Experienced</div>
          </div>
          <div class="row">
            <div class="col-md-9 text-left">Care of patient - Acute MI</div>
            <div class="col-md-3">Experienced</div>
          </div>
          <div class="row">
            <div class="col-md-9 text-left">Care of patient - Angina</div>
            <div class="col-md-3">Experienced</div>
          </div>
        </section>

        <section class="assessment-results__section categories">
          <div class="row categories__header">
            <div class="col-md-9 text-left">Pulmonary</div>
            <div class="col-md-3 ">Rating</div>
          </div>
          <div class="row">
            <div class="col-md-9 text-left">Cardiovascular</div>
            <div class="col-md-3">Experienced</div>
          </div>
          <div class="row">
            <div class="col-md-9 text-left">Cardiovascular</div>
            <div class="col-md-3">Experienced</div>
          </div>
          <div class="row">
            <div class="col-md-9 text-left">Cardiovascular</div>
            <div class="col-md-3">Experienced</div>
          </div>
          <div class="row">
            <div class="col-md-9 text-left">Cardiovascular</div>
            <div class="col-md-3">Experienced</div>
          </div>
          <div class="row">
            <div class="col-md-9 text-left">Cardiovascular</div>
            <div class="col-md-3">Experienced</div>
          </div>
          <div class="row">
            <div class="col-md-9 text-left">Cardiovascular</div>
            <div class="col-md-3">Experienced</div>
          </div>
          <div class="row danger">
            <div class="col-md-9 text-left">Cardiovascular</div>
            <div class="col-md-3">Not Experienced</div>
          </div>
          <div class="row">
            <div class="col-md-9 text-left">Cardiovascular</div>
            <div class="col-md-3">Experienced</div>
          </div>
        </section>
      </section>

      <section class="section behavioral-details section-details" id="behavioral-details">
        <h2>Behavioral Score Details</h2>
        <h3>RN Behavioral Assessment <span class="assessment-score">85%</span></h3>

        <section class="section feedback">
          <h3>Results by Category</h3>
          <section class="assessment-results__section  categories">
            <div class="row categories__header hidden-xs hidden-sm">
              <div class="col-md-3">Category</div>
              <div class="col-md-3">Low <span style="float:right">High</span></div>
              <div class="col-md-6 text-center">Suggested Interview Probes</div>
            </div>
            <div class="row">
              <div class="col-md-3">Accountable</div>
              <div class="col-md-3">
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" style="width:70%;">70%</div>
                </div>
              </div>
              <div class="col-md-6">
                Tell me about a time when you made a mistake at work? What was the mistake? What did you do? How did it turn out?
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">Adaptable</div>
              <div class="col-md-3">
                <div class="progress">
                  <div class="progress-bar progress-bar-success" style="width:80%;">80%</div>
                </div>
              </div>
              <div class="col-md-6">
                Oftentimes, our workdays are filled with inexpected events. Tell me about a time when you had to adjust your workday to accommodate unexpected responsibilities.
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">Collaborative</div>
              <div class="col-md-3">
                <div class="progress">
                  <div class="progress-bar progress-bar-success" style="width:90%;">90%</div>
                </div>
              </div>
              <div class="col-md-6">
                Tell me about a time when you pitched in to help a co-worker on the job. What did you do? What was the result?
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">Emotional Intelligence</div>
              <div class="col-md-3">
                <div class="progress">
                  <div class="progress-bar progress-bar-danger" style="width:30%;">30%</div>
                </div>
              </div>
              <div class="col-md-6">
                Working in a health-related industry forces us to interact with individuals with mentil illness. Tell me about a time when you had to care for a person less fortunate than yourself.
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">Decision Making</div>
              <div class="col-md-3">
                <div class="progress">
                  <div class="progress-bar progress-bar-success" style="width:90%;">90%</div>
                </div>
              </div>
              <div class="col-md-6">
                Tell me about a time when you had to make a judgement call about a patient, What was the situation? What kind of decision did you have to make? What happened?
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">Dependable</div>
              <div class="col-md-3">
                <div class="progress">
                  <div class="progress-bar progress-bar-danger" style="width:30%;">30%</div>
                </div>
              </div>
              <div class="col-md-6">
                Everyone must miss work at some time or another. Tell me how many unexcused or unapproved absenses you think are acceptable for people to have without penalty.
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">Patient Focus</div>
              <div class="col-md-3">
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" style="width:60%;">60%</div>
                </div>
              </div>
              <div class="col-md-6">
                Tell me about the most recent example when you went out of your way to help someone else. What was the situation and what did you do?
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">Quality Focus</div>
              <div class="col-md-3">
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" style="width:60%;">60%</div>
                </div>
              </div>
              <div class="col-md-6">
                Tell me about a time when you were able to catch a potential problem because you sensed something was wrong. What was the situation? What was the problem? What happened?
              </div>
            </div>
          </section>
        </section>

        <section class="section feedback">
          <h3>Working Preferences</h3>
          <table class="table table--working-prefs">
            <thead>
              <tr>
                <th></th>
                <th></th>
                <th>Low</th>
                <th>Med</th>
                <th>High</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Nursing Independence</td>
                <td>Prefers guidance</td>
                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                <td><span class="fa fa-lg fa-check-circle text-success"></span></td>
                <td>Works independently</td>
              </tr>
              <tr>
                <td>Task Variety</td>
                <td>Desired routine tasks</td>
                <td><span class="fa fa-lg fa-check-circle text-success"></span></td>
                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                <td>Needs challenges and variety</td>
              </tr>
              <tr>
                <td>Time with Patients</td>
                <td>Enjoys spending time with fewer patients</td>
                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                <td><span class="fa fa-lg fa-check-circle text-success"></span></td>
                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                <td>Enjoys helping numerous people</td>
              </tr>
              <tr>
                <td>Nursing Environment</td>
                <td>Prefers quiet/calm environment</td>
                <td><span class="fa fa-lg fa-check-circle text-success"></span></td>
                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                <td>Enjoys fast-paced/ dynamic environment</td>
              </tr>
              <tr>
                <td>Schedule Flexibility</td>
                <td>Prefers predictable schedule</td>
                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                <td><span class="fa fa-lg fa-circle-o text-light"></span></td>
                <td><span class="fa fa-lg fa-check-circle text-success"></span></td>
                <td>Wants schedule flexibility</td>
              </tr>
            </tbody>
          </table>

        </section>

        <section class="section feedback">
          <h3>Shift Preferences</h3>
          <div class="row">
            <div class="col-sm-2"><span class="fa fa-lg fa-check-circle text-success"></span> Day Shift</div>
            <div class="col-sm-2"><span class="fa fa-lg fa-times text-danger"></span> 2nd Shift</div>
            <div class="col-sm-2"><span class="fa fa-lg fa-times text-danger"></span> Night Shift</div>
            <div class="col-sm-2"><span class="fa fa-lg fa-check-circle text-success"></span> 12-hr Shifts</div>
            <div class="col-sm-2"><span class="fa fa-lg fa-check-circle text-success"></span> Rotating Shifts</div>
            <div class="col-sm-2"><span class="fa fa-lg fa-check-circle text-success"></span> On Call</div>
          </div>
        </section>
      </section>

      <section class="section judgment-details section-details" id="judgment-details" >
        <h2>Judgment Score Details</h2>
        <h3>RN Acute Care Judgment Assessment <span class="assessment-score">85%</span></h3>
        <section class="feedback">
          <h4>Abigail was presented with the following clinical problems to recognize and manage:</h4>
          <ul>
              <li><a href="#scroll-blood-transfusion-reaction" class="scroll-link">Blood Transfusion Reaction</a></li>
              <li><a href="#scroll-diabetic-ketoacidosis" class="scroll-link">Diabetic Ketoacidosis</a></li>
              <li><a href="#scroll-bowel-perforation-peritonitis" class="scroll-link">Bowel Perforation / Peritonitis</a></li>
              <li><a href="#" class="scroll-link">Digoxin Toxicity</a></li>
              <li><a href="#" class="scroll-link">Increased Intracranial Pressure</a></li>
              <li><a href="#" class="scroll-link">Pulmonary Embolus or Pneumothorax</a></li>
              <li><a href="#" class="scroll-link">Urinary Retention</a></li>
              <li><a href="#" class="scroll-link">Cerebral Vascular Accident</a></li>
              <li><a href="#" class="scroll-link">Myocardial Infarction</a></li>
          </ul>
          <br>
          <h4>Results Summary:</h4>
          <p>Abigail accurately identified <b>5</b> of the eight problems, and successfully managed <b>4</b> of the eight problems.</p>
          <p>Abigail over prioritized <b>1</b> problem(s), under prioritized <b>0</b> problem(s) and accurately prioritized <b>7</b> problem(s).</p>
          <p>When contacting a provider, Abigail omitted relevant data on <b>2</b> problems.</p>
        </section>

        <section class="section feedback" id="scroll-blood-transfusion-reaction">
          <h3>Blood Transfusion Reaction</h3>
          <section class="section">
            <h4>Problem</h4>
            <p>Abigail accurately identified Blood Transfusion Reaction as the primary problem.</p>
          </section>
          <section class="section">
            <h4>Observations</h4>
            <p>Abigail accurately identified:</p>
            <ul>
              <li>Fever</li>
              <li>Chills</li>
            </ul>
            <p>Abigail did not identify:</p>
            <ul>
              <li>Itching</li>
            </ul>
          </section>
          <section class="section">
            <h4>Actions</h4>
            <p>Abigail took the following actions:</p>
            <ul>
              <li>Notify Provider</li>
              <li>Discontinued Blood</li>
              <li>Maintained IV</li>
            </ul>
            <p>Abigail omitted the following actions:</p>
            <ul>
              <li>None</li>
            </ul>
          </section>
        </section>

        <section class="section feedback" id="scroll-diabetic-ketoacidosis">
          <h3>Diabetic Ketoacidosis</h3>
          <section class="section">
            <h4>Problem</h4>
            <p>Abigail accurately identified Diabetic Ketoacidosis as the primary problem.</p>
          </section>
          <section class="section">
            <h4>Observations</h4>
            <p>Abigail accurately identified:</p>
            <ul>
              <li>Increased glucose</li>
              <li>Increased ketones</li>
              <li>Increased potassium</li>
            </ul>
            <p>Abigail did not identify:</p>
            <ul>
              <li>Change in level of consciousness</li>
            </ul>
            <p>Abigail made the following observations:</p>
            <ul>
              <li>None</li>
            </ul>
          </section>
          <section class="section">
            <h4>Actions</h4>
            <p>Abigail took the following actions:</p>
            <ul>
              <li>Notify Provider</li>
              <li>Anticipated order for IV Insulin</li>
              <li>Monitor glucose</li>
              <li>Monitor level of consciousness</li>
            </ul>
            <p>Abigail omitted the following actions:</p>
            <ul>
              <li>None</li>
            </ul>
            <p>Abigail took the following contraindicated actions:</p>
            <ul>
              <li>None</li>
            </ul>
          </section>
          <section class="section">
            <h4>Rationale</h4>
            <p>Abigail provide the following rationales for her actions:</p>
            <ul>
              <li>"To help decrease the blood sugar level"</li>
              <li>"To keep the patient safe"</li>
            </ul>
          </section>
        </section>

        <section class="section feedback" id="scroll-bowel-perforation-peritonitis">
          <h3>Bowel Perforation / Peritonitis</h3>
          <section class="section">
            <h4>Problem</h4>
            <p>Abigail misidentified the primary problem of Bowel Perforation / Peritonitis as "Heart Attack".</p>
          </section>
          <section class="section">
            <h4>Observations</h4>
            <p>Abigail accurately identified:</p>
            <ul>
              <li>Abdominal pain</li>
            </ul>
            <p>Abigail did not identify:</p>
            <ul>
              <li>No bowel sounds</li>
              <li>Increased temperature</li>
              <li>Rigid abdomen</li>
            </ul>
            <p>Abigail made the following observations:</p>
            <ul>
              <li>"Patient appears uncomfortable and sweating"</li>
            </ul>
          </section>
          <section class="section">
            <h4>Actions</h4>
            <p>Abigail took the following actions:</p>
            <ul>
              <li>Notify Provider</li>
            </ul>
            <p>Abigail omitted the following actions:</p>
            <ul>
              <li>Administer pain medication</li>
              <li>Anticipate order for surgery or Anticipate order for diagnostic test</li>
            </ul>
            <p>Abigail took the following contraindicated actions:</p>
            <ul>
              <li>None</li>
            </ul>
          </section>
          <section class="section">
            <h4>Rationale</h4>
            <p>Abigail provide the following rationales for her actions:</p>
            <ul>
              <li>"Surgical intervention is needed for bowel perforation"</li>
              <li>"To get surgery scheduled"</li>
            </ul>
          </section>
        </section>

        <section class="section feedback">
          <h3>Preceptor Card</h3>
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

$(document).ready(function(){
     $(".segment-score").css("color", employeeColor[x]);
});


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


var employeeColor = ["#09c", "#26ccda", "#333", '#09c', '#00487c', '#00487c', '#231651', '#4B1D3F']; // "#F9C05E";
var BenchmarkColor = ["#FFBC42", "#FAC05E", "#09c", '#FED766', '#00487c', '#59F8E8', '#086788', '#FED766']; //"#0D75A1"; //"#6BD8FA";

var x = 0;    
    
$(".theme-change-btn").click(function(){
    x++;
    $(".segment-score").css("color", employeeColor[x]);
    var chart = AmCharts.makeChart("knowledge-bar", {
  "addClassNames" : true,
  "type": "serial",
  "theme": "light",
  "categoryField": "assessment",
  "columnSpacing": 0,
  "columnWidth": .2,
  "startEffect": "easeInSine",
  "startDuration": .25,
  "colors" : [employeeColor[x], BenchmarkColor[x]],
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
  "colors" : [employeeColor[x], BenchmarkColor[x]],
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
  "colors" : [employeeColor[x], BenchmarkColor[x]],
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
  "colors" : [employeeColor[x], BenchmarkColor[x]],

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

});    

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
  "colors" : [employeeColor[x], BenchmarkColor[x]],
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
  "colors" : [employeeColor[x], BenchmarkColor[x]],
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
  "colors" : [employeeColor[x], BenchmarkColor[x]],
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
  "colors" : [employeeColor[x], BenchmarkColor[x]],

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