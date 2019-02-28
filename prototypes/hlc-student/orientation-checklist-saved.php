<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Orientation Checklist';
$patterns['focus']['title'] = 'Orientation Checklist';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-checklist',
    'type' => 'Checklist',
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Employee:',
        'value' => 'Juniper, Stephanie P.',
    ),
    array(
        'label' => 'Role:',
        'value' => 'Perioperative RN Educator',
    ),
    array(
        'label' => 'Status:',
        'value' => 'In Progress',
    ),
);
$patterns['focus']['supporting'] = '
    <figure class="fph-chart-holder">
        <canvas class="fph-chart" data-type="Doughnut" data-segments="[[4,1],[5,1],[6,1],[6,0],[9,0],[3,0],[2,0],[2,0],[6,0],[8,0],[5,0],[7,0],[7,0],[4,0],[4,0],[6,0],[7,0],[11,0],[2,0]]" width="108" height="108"></canvas>
        <figcaption>14%</figcaption>
    </figure>';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<style>
.orientation-checklist .assessment-group {
    font-size: 12px;
}
.orientation-checklist .table {
    display: table;
    width: 100%;
    margin-bottom: 0;
    height: 100%
}

.box2.box-heading .table {
    height: auto;
}
.orientation-checklist .td {
    display: table-cell;
    padding-right: 4px;
    height: 100%
}
.orientation-checklist .td.checks {
    border-right: 1px solid #ddd;
    height: 100%;
    vertical-align: middle;
    width: 16%;
}

.orientation-checklist .box-heading .td.checks {
    height: auto;
    padding: 5px;
}

.orientation-checklist .td.checks.text-center.last {
    border-right: none;
}

.orientation-checklist .boxes {
  display: table;
  width: 100%;
  height: 100%;
  border-collapse: collapse;
  margin-top: -1px;
  page-break-inside: avoid;
}

.orientation-checklist .box {
  display: table-cell;
  vertical-align: middle;
  padding: 10px;
  border: 1px solid #ddd;
}
.orientation-checklist .box textarea {
    font-size: 12px;
}
.orientation-checklist .box-heading {
    background-color: #eee;
    font-size: 11px;
    font-weight: bold;
}
.orientation-checklist .box-heading .td.checks {
    font-size: 10px;
}
.orientation-checklist .box1 {
  width: 40%;
}
.orientation-checklist .box2 {
  width: 35%;
  padding: 0;
}
.orientation-checklist .box2-heading {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: center;
}
.orientation-checklist .box3 {
  width: 25%;
}
.orientation-checklist .box-title {
    width: 100%;
    display: block;
    width: 100%;
    font-size: 14px;
}
.orientation-checklist .mobile-only {
    display: none;
}
.orientation-checklist .legend {
    border: 1px solid #ddd;
    padding: 10px;
    font-size: 11px;
    color: #666666;
    display: none;
}
.orientation-checklist .legend ul {
    margin-bottom: 0;
}
.orientation-checklist .form-modified {
    margin-top: 3px;
    margin-bottom: 0px;
}
.orientation-checklist .form-modified.green {
    color: green;
}
#modal-legend li {
    margin-bottom: 20px;
}
#modal-legend li h4 {
    margin-bottom: 5px;
}
#modal-legend li p {
    font-size: 13px;
    color: #666666;
}


@media (max-width: 767px) { /* Set for print width  more than anything else */
    .orientation-checklist .boxes {
        margin-bottom: 10px;
    }
    .orientation-checklist .box {
        display: block;
        width: 100%;
        margin-top: -1px;
    }
    .orientation-checklist .box.box1  {
        border: none;
        padding: 10px 0;
    }
    .orientation-checklist .box1 .td {
        font-weight: bold;
    }
    .orientation-checklist .box.box3 {
        padding-bottom: 20px;
    }
    .orientation-checklist .box-title {
        margin-bottom: 5px;
    }
    .orientation-checklist .box-heading-area {
        display: none;
    }
    .orientation-checklist .mobile-only {
        display: block;
    }
    .orientation-checklist label.mobile-only {
        font-size: 10px;
    }
    .orientation-checklist .box-heading {
        padding: 5px;
        border-bottom: 1px solid #ddd;
        text-align: center;
    }
    .orientation-checklist .td.checks {
        height: auto;
        padding: 10px;
        vertical-align: bottom;
    }
    .orientation-checklist .legend {
        display: block;
    }
    .orientation-checklist .form-modified {
        font-weight: normal;
    }
}

@media print {
    .orientation-checklist .legend {
        display: block;
    }
}
</style>

<div class="layout orientation-checklist">
    <div class="container">
        <section class="section section-main section-box">
            <section class="section">
                <p><b>Competency Statement:</b> The perioperative RN has completed facility or health care organization-specific education and competency verification activities related to the role of perioperative RN educator.</p>
                <p><b>Outcome Statement:</b> Not applicable</p>
            </section>


            <!-- Standard Group -->
            <section class="section assessment-group">
                <div class="box-title">
                    <h3>Standard 1: Assessment</h3>
                    <p>Collects data necessary to support perioperative education.</p>
                </div>

                <div class="boxes box-heading-area">
                    <div class="box box1 box-heading">
                        Competency Statements/Performance Criteria
                    </div>
                    <div class="box box2 box-heading">
                        <div class="box2-heading">Verification Method</div>
                        <div class="table">
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">DEM/ DO/ DA</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">KAT</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">S/ SBT/ CS</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">V</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">RWM/ P&amp;P</a></div>
                            <div class="td checks text-center last"><a href="#modal-legend" data-toggle="modal" title="View Legend">O</a></div>
                        </div>

                    </div>
                    <div class="box box3 box-heading">
                        Not Met (Explain Why)
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">1.</div>
                        <div class="td">
                            Uses evidence-based processes to collect data for assessing the educational needs of perioperative personnel.
                            <div class="form-modified green">Reviewed: Sep 20, 2016 at 3:27pm by sjuniper</div>
                        </div>

                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes" checked></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes" checked></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">2.</div>
                        <div class="td">
                            Involves internal and external stakeholders, as applicable, in data collection.
                            <div class="form-modified green">Reviewed: Sep 20, 2016 at 3:27pm by sjuniper</div>
                        </div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes" checked=""></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">3.</div>
                        <div class="td">
                            Determines priorities for educational activities based on the needs of perioperative services, the organization, and perioperative patients.
                            <div class="form-modified">Reviewed: Sep 20, 2016 at 3:27pm by yatittle</div>
                        </div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes" checked disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes" checked disabled></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" disabled></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">4.</div>
                        <div class="td">
                            Considers a variety of evidence-based strategies to meet the cognitive, psychomotor, and affective domains of learners.
                            <div class="form-modified">Reviewed: Sep 20, 2016 at 3:27pm by yatittle</div>
                        </div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes disabled"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes" checked disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes" disabled></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" disabled></textarea>
                    </div>
                </div>
            </section>
            <!-- /Standard Group -->




            <!-- Standard Group -->
            <section class="section assessment-group">
                <div class="box-title">
                    <h3>Standard 2: Diagnosis</h3>
                    <p>Analyzes collected data to develop ideas and establish effective methods for the delivery of perioperative education.</p>
                </div>

                <div class="boxes box-heading-area">
                    <div class="box box1 box-heading">
                        Competency Statements/Performance Criteria
                    </div>
                    <div class="box box2 box-heading">
                        <div class="box2-heading">Verification Method<br>
                        </div>
                        <div class="table">
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">DEM/ DO/ DA</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">KAT</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">S/ SBT/ CS</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">V</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">RWM/ P&amp;P</a></div>
                            <div class="td checks text-center last"><a href="#modal-legend" data-toggle="modal" title="View Legend">O</a></div>
                        </div>

                    </div>
                    <div class="box box3 box-heading">
                        Not Met (Explain Why)
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">1.</div>
                        <div class="td">
                            Synthesizes collected data to identify issues and variances relative to perioperative education.
                            <div class="form-modified">Reviewed: Sep 20, 2016 at 3:27pm by yatittle</div>
                        </div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes" checked disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes" checked disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes" disabled></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" disabled></textarea>
                    </div>
                </div>


                <div class="boxes">

                    <div class="box box1">

                        <div class="td">2.</div>
                        <div class="td">
                            Reports issues and variances to internal and external stakeholders as applicable.
                            <div class="form-modified">Reviewed: Sep 20, 2016 at 3:27pm by mknight</div>
                        </div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes" disabled></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..." disabled>This is a short comment left by a reviewer.</textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">3.</div>
                        <div class="td">
                            Identifies the effect of individual learning styles and interpersonal interactions on learner outcomes.
                            <div class="form-modified green">Reviewed: Sep 8, 2016 at 3:27pm by sjuniper</div>
                        </div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes" checked></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes" checked></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">4.</div>
                        <div class="td">
                            Identifies educational resources and teaching modalities that will meet the needs of learners.
                            <div class="form-modified green">Reviewed: Sep 14, 2016 at 3:27pm by sjuniper</div>
                        </div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes" checked></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes" checked></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes" checked></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes" checked></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes" checked></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes" checked></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">5.</div>
                        <div class="td">
                            Recognizes multicultural, generational, and experiential effects on learning.
                            <div class="form-modified">Reviewed: Sep 3, 2016 at 3:27pm by pputnam</div>
                        </div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes" checked disabled></div>
                            <div class="td checks text-center" ><label class="mobile-only">KAT</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes" checked disabled></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>
            </section>
            <!-- /Standard Group -->



            <!-- Standard Group -->
            <section class="section assessment-group">
                <div class="box-title">
                    <h3>Standard 3: Outcome Identification</h3>
                    <p>Identifies expected outcomes for perioperative education.</p>
                </div>

                <div class="boxes box-heading-area">
                    <div class="box box1 box-heading">
                        Competency Statements/Performance Criteria
                    </div>
                    <div class="box box2 box-heading">
                        <div class="box2-heading">Verification Method<br>
                        </div>
                        <div class="table">
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">DEM/ DO/ DA</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">KAT</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">S/ SBT/ CS</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">V</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">RWM/ P&amp;P</a></div>
                            <div class="td checks text-center last"><a href="#modal-legend" data-toggle="modal" title="View Legend">O</a></div>
                        </div>

                    </div>
                    <div class="box box3 box-heading">
                        Not Met (Explain Why)
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">1.</div>
                        <div class="td">
                            Develops outcomes for perioperative education using assessment findings and analysis.
                            <div class="form-modified green">Reviewed: Oct 1, 2016 at 3:27pm by sjuniper</div>
                        </div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met...">Lack of attention to findings and previous research.</textarea>
                    </div>
                </div>


                <div class="boxes">

                    <div class="box box1">

                        <div class="td">2.</div>
                        <div class="td">
                            Supports perioperative personnel and other health care personnel to achieve quality patient care outcomes.
                            <div class="form-modified">Reviewed: Sep 20, 2016 at 3:27pm by mknight</div>
                        </div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes" checked disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes" disabled></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" disabled></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">3.</div>
                        <div class="td">
                            Advises and counsels perioperative personnel to achieve professional goals.
                            <div class="form-modified">Reviewed: Sep 20, 2016 at 3:27pm by yatittle</div>
                        </div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes" checked disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes" disabled></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" disabled></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">4.</div>
                        <div class="td">
                            Promotes acquisition of effective educational resources and activities to support safe perioperative practice and worker safety.
                            <div class="form-modified">Reviewed: Sep 20, 2016 at 3:27pm by yatittle</div>
                        </div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes" disabled></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes" checked disabled></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" disabled></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">5.</div>
                        <div class="td">
                            Identifies a time frame in which to achieve the educational outcomes.
                            <div class="form-modified green">Reviewed: Sep 20, 2016 at 3:27pm by sjuniper</div>
                        </div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes" checked></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">6.</div>
                        <div class="td">
                            Modifies outcomes based on issues and research.
                            <div class="form-modified green">Reviewed: Sep 20, 2016 at 3:27pm by sjuniper</div>
                        </div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes" checked></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>
            </section>
            <!-- /Standard Group -->


            <!-- Standard Group -->
            <section class="section assessment-group">
                <div class="box-title">
                    <h3>Standard 4: Planning</h3>
                    <p>Develops processes and plans to attain expected educational outcomes for perioperative services.</p>
                </div>

                <div class="boxes box-heading-area">
                    <div class="box box1 box-heading">
                        Competency Statements/Performance Criteria
                    </div>
                    <div class="box box2 box-heading">
                        <div class="box2-heading">Verification Method<br>
                        </div>
                        <div class="table">
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">DEM/ DO/ DA</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">KAT</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">S/ SBT/ CS</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">V</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">RWM/ P&amp;P</a></div>
                            <div class="td checks text-center last"><a href="#modal-legend" data-toggle="modal" title="View Legend">O</a></div>
                        </div>

                    </div>
                    <div class="box box3 box-heading">
                        Not Met (Explain Why)
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">1.</div> <div class="td">Recognizes organizational and perioperative services structure, as well as lines of authority, when planning perioperative education.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>


                <div class="boxes">

                    <div class="box box1">

                        <div class="td">2.</div> <div class="td">Develops an educational plan that is consistent with the mission, vision, values, and strategic plan of the organization.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">3.</div> <div class="td">Includes sufficient time and materials, and intellectual, human, and financial resources in the plan.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">4.</div> <div class="td">Establishes a timeline for educational processes and designs specific strategies to carry out the plan.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">5.</div> <div class="td">Uses current literature and guidelines, organizational policies and procedures, and regulatory and accreditation standards to guide the educational planning process.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">6.</div> <div class="td">Modifies the educational plan based on issues and variances in perioperative services.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>
            </section>
            <!-- /Standard Group -->



            <!-- Standard Group -->
            <section class="section assessment-group">
                <div class="box-title">
                    <h3>Standard 5: Implementation</h3>
                    <p>Implements perioperative education within the organizational and perioperative services structure.</p>
                </div>

                <div class="boxes box-heading-area">
                    <div class="box box1 box-heading">
                        Competency Statements/Performance Criteria
                    </div>
                    <div class="box box2 box-heading">
                        <div class="box2-heading">Verification Method<br>
                        </div>
                        <div class="table">
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">DEM/ DO/ DA</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">KAT</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">S/ SBT/ CS</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">V</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">RWM/ P&amp;P</a></div>
                            <div class="td checks text-center last"><a href="#modal-legend" data-toggle="modal" title="View Legend">O</a></div>
                        </div>

                    </div>
                    <div class="box box3 box-heading">
                        Not Met (Explain Why)
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">1.</div> <div class="td">Implements the educational plan by following the defined timeline with special consideration for the perioperative patient and workplace safety.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">2.</div> <div class="td">Provides those implementing the plan with sufficient time and material, as well as intellectual, human, and financial resources.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">3.</div> <div class="td">Incorporates a variety of teaching strategies designed to meet the needs of the learner.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">4.</div> <div class="td">Integrates an innovative and creative perspective into the perioperative educator role.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">5.</div> <div class="td">Implements information technologies to support the teaching/learning process.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">6.</div> <div class="td">Uses effective oral, written, and electronic communication to convey pertinent educational information.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">7.</div> <div class="td">Implements educational processes and strategies to support changes in perioperative practice.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">8.</div> <div class="td">Creates opportunities for perioperative personnel to develop and improve critical thinking and technological skills.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">9.</div> <div class="td">Maintains the requisite level of professional practice necessary to effectively educate perioperative personnel.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>
            </section>
            <!-- /Standard Group -->



            <!-- Standard Group -->
            <section class="section assessment-group">
                <div class="box-title">
                    <h3>Standard 5a: Coordination of Care</h3>
                    <p>Coordinates implementation of perioperative education, using human and capital resources.</p>
                </div>

                <div class="boxes box-heading-area">
                    <div class="box box1 box-heading">
                        Competency Statements/Performance Criteria
                    </div>
                    <div class="box box2 box-heading">
                        <div class="box2-heading">Verification Method<br>
                        </div>
                        <div class="table">
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">DEM/ DO/ DA</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">KAT</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">S/ SBT/ CS</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">V</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">RWM/ P&amp;P</a></div>
                            <div class="td checks text-center last"><a href="#modal-legend" data-toggle="modal" title="View Legend">O</a></div>
                        </div>

                    </div>
                    <div class="box box3 box-heading">
                        Not Met (Explain Why)
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">1.</div> <div class="td">Organizes perioperative education with consideration for budgetary and health care organization resources.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">2.</div> <div class="td">Promotes efficient integration of personnel to implement the education.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">3.</div> <div class="td">Coordinates and leads applicable clinical and community partnerships related to perioperative education.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>
            </section>
            <!-- /Standard Group -->



            <!-- Standard Group -->
            <section class="section assessment-group">
                <div class="box-title">
                    <h3>Standard 5b: Health Teaching—Health Promotion</h3>
                    <p>Employs strategies to promote workplace safety and health through perioperative education.</p>
                </div>

                <div class="boxes box-heading-area">
                    <div class="box box1 box-heading">
                        Competency Statements/Performance Criteria
                    </div>
                    <div class="box box2 box-heading">
                        <div class="box2-heading">Verification Method<br>
                        </div>
                        <div class="table">
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">DEM/ DO/ DA</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">KAT</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">S/ SBT/ CS</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">V</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">RWM/ P&amp;P</a></div>
                            <div class="td checks text-center last"><a href="#modal-legend" data-toggle="modal" title="View Legend">O</a></div>
                        </div>

                    </div>
                    <div class="box box3 box-heading">
                        Not Met (Explain Why)
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">1.</div> <div class="td">Promotes health and workplace safety.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">2.</div> <div class="td">Uses regulatory and evidence-based professional guidelines to provide education related to workplace safety practices.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>
            </section>
            <!-- /Standard Group -->



            <!-- Standard Group -->
            <section class="section assessment-group">
                <div class="box-title">
                    <h3>Standard 5c: Consultation</h3>
                    <p>Provides consultation to communicate the identified educational plan.</p>
                </div>

                <div class="boxes box-heading-area">
                    <div class="box box1 box-heading">
                        Competency Statements/Performance Criteria
                    </div>
                    <div class="box box2 box-heading">
                        <div class="box2-heading">Verification Method<br>
                        </div>
                        <div class="table">
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">DEM/ DO/ DA</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">KAT</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">S/ SBT/ CS</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">V</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">RWM/ P&amp;P</a></div>
                            <div class="td checks text-center last"><a href="#modal-legend" data-toggle="modal" title="View Legend">O</a></div>
                        </div>

                    </div>
                    <div class="box box3 box-heading">
                        Not Met (Explain Why)
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">1.</div> <div class="td">Acts as a resource to internal and external stakeholders regarding perioperative care.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">2.</div> <div class="td">Provides consultation based on experience and knowledge of perioperative standards of care.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>
            </section>
            <!-- /Standard Group -->



            <!-- Standard Group -->
            <section class="section assessment-group">
                <div class="box-title">
                    <h3>Standard 6: Evaluation</h3>
                    <p>Evaluates the effectiveness of the educational plan toward achieving desired outcomes.</p>
                </div>

                <div class="boxes box-heading-area">
                    <div class="box box1 box-heading">
                        Competency Statements/Performance Criteria
                    </div>
                    <div class="box box2 box-heading">
                        <div class="box2-heading">Verification Method<br>
                        </div>
                        <div class="table">
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">DEM/ DO/ DA</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">KAT</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">S/ SBT/ CS</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">V</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">RWM/ P&amp;P</a></div>
                            <div class="td checks text-center last"><a href="#modal-legend" data-toggle="modal" title="View Legend">O</a></div>
                        </div>

                    </div>
                    <div class="box box3 box-heading">
                        Not Met (Explain Why)
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">1.</div> <div class="td">Measures progress toward achieving perioperative educational goals at regular intervals to determine effectiveness of the educational plan.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">2.</div> <div class="td">Reviews educational activities and resources for compliance with current literature and guidelines, organizational policies and procedures, and regulatory and accreditation standards.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">3.</div> <div class="td">Includes internal and external stakeholders when evaluating progress toward or achievement of outcomes.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">4.</div> <div class="td">Takes action based on the results of the evaluation to modify processes or structures.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">5.</div> <div class="td">Reports evaluation results to internal and external stakeholders.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">6.</div> <div class="td">Provides timely and constructive feedback to learners.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>
            </section>
            <!-- /Standard Group -->



            <!-- Standard Group -->
            <section class="section assessment-group">
                <div class="box-title">
                    <h3>Standard 7: Education</h3>
                    <p>Acquires and maintains specialized knowledge and skill in perioperative education.</p>
                </div>

                <div class="boxes box-heading-area">
                    <div class="box box1 box-heading">
                        Competency Statements/Performance Criteria
                    </div>
                    <div class="box box2 box-heading">
                        <div class="box2-heading">Verification Method<br>
                        </div>
                        <div class="table">
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">DEM/ DO/ DA</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">KAT</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">S/ SBT/ CS</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">V</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">RWM/ P&amp;P</a></div>
                            <div class="td checks text-center last"><a href="#modal-legend" data-toggle="modal" title="View Legend">O</a></div>
                        </div>

                    </div>
                    <div class="box box3 box-heading">
                        Not Met (Explain Why)
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">1.</div> <div class="td">Uses advanced educational preparation, perioperative experience, and perioperative skills to direct educational processes and activities for self and members of perioperative services.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">2.</div> <div class="td">Establishes a learning environment that is open to and respectful of others.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">3.</div> <div class="td">Bases educational activity design and competency statement development on sound educational principles and research.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">4.</div> <div class="td">Maintains an awareness of and provides education regarding regulatory and accreditation standards affecting perioperative services.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">5.</div> <div class="td">Maintains an awareness of, uses, and provides education regarding professional standards, recommended practices, and guidelines pertinent to perioperative services.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">6.</div> <div class="td">Participates in ongoing educational activities related to perioperative education.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">7.</div> <div class="td">Maintains competence necessary to practice perioperative education, including the effective use of available technologies to optimize care.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">8.</div> <div class="td">Maintains records of education and competency verification activities of perioperative personnel.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>
            </section>
            <!-- Standard Group -->



            <!-- Standard Group -->
            <section class="section assessment-group">
                <div class="box-title">
                    <h3>Standard 8: Professional Practice Evaluation</h3>
                    <p>Follows regulatory, accreditation standards, organizational policies and procedures, and professional guidelines to evaluate professional practice of perioperative services personnel.</p>
                </div>

                <div class="boxes box-heading-area">
                    <div class="box box1 box-heading">
                        Competency Statements/Performance Criteria
                    </div>
                    <div class="box box2 box-heading">
                        <div class="box2-heading">Verification Method<br>
                        </div>
                        <div class="table">
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">DEM/ DO/ DA</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">KAT</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">S/ SBT/ CS</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">V</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">RWM/ P&amp;P</a></div>
                            <div class="td checks text-center last"><a href="#modal-legend" data-toggle="modal" title="View Legend">O</a></div>
                        </div>

                    </div>
                    <div class="box box3 box-heading">
                        Not Met (Explain Why)
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">1.</div> <div class="td">Verifies competence of perioperative services personnel at regular intervals.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">2.</div> <div class="td">Participates in a systematic peer review of perioperative personnel.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">3.</div> <div class="td">Provides rationale for practice decisions and actions.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">4.</div> <div class="td">Conducts formal performance reviews at regular intervals based on patient and perioperative services outcomes.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">5.</div> <div class="td">Solicits formal and informal feedback regarding perioperative education from internal and external stakeholders.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>
            </section>
            <!-- Standard Group -->



            <!-- Standard Group -->
            <section class="section assessment-group">
                <div class="box-title">
                    <h3>Standard 9: Quality of Practice </h3>
                    <p>Evaluates systematically the quality and effectiveness of perioperative education.</p>
                </div>

                <div class="boxes box-heading-area">
                    <div class="box box1 box-heading">
                        Competency Statements/Performance Criteria
                    </div>
                    <div class="box box2 box-heading">
                        <div class="box2-heading">Verification Method<br>
                        </div>
                        <div class="table">
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">DEM/ DO/ DA</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">KAT</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">S/ SBT/ CS</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">V</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">RWM/ P&amp;P</a></div>
                            <div class="td checks text-center last"><a href="#modal-legend" data-toggle="modal" title="View Legend">O</a></div>
                        </div>

                    </div>
                    <div class="box box3 box-heading">
                        Not Met (Explain Why)
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">1.</div> <div class="td">Incorporates research and current evidence to enhance the quality of perioperative education and improve delivery of care.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">2.</div> <div class="td">Analyzes issues and variances that affect perioperative education.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">3.</div> <div class="td">Uses analysis to develop and enact new educational activities to improve perioperative practice.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">4.</div> <div class="td">Assists perioperative personnel to participate in constructive self- and peer-evaluation.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">5.</div> <div class="td">Guides improvement of perioperative education and delivery of care using key indicators.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">6.</div> <div class="td">Engages in continued learning to improve educational practices that facilitate learning.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">7.</div> <div class="td">Uses feedback gained from self-reflection, program recipient review, peer-review, and administrative evaluations to improve educator role effectiveness.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>
            </section>
            <!-- /Standard Group -->



            <!-- Standard Group -->
            <section class="section assessment-group">
                <div class="box-title">
                    <h3>Standard 10: Collegiality</h3>
                    <p>Interacts with and contributes to the professional growth of peers, colleagues, and others by acting as a role model for professional behavior and promoting the professional development of others.</p>
                </div>

                <div class="boxes box-heading-area">
                    <div class="box box1 box-heading">
                        Competency Statements/Performance Criteria
                    </div>
                    <div class="box box2 box-heading">
                        <div class="box2-heading">Verification Method<br>
                        </div>
                        <div class="table">
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">DEM/ DO/ DA</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">KAT</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">S/ SBT/ CS</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">V</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">RWM/ P&amp;P</a></div>
                            <div class="td checks text-center last"><a href="#modal-legend" data-toggle="modal" title="View Legend">O</a></div>
                        </div>

                    </div>
                    <div class="box box3 box-heading">
                        Not Met (Explain Why)
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">1.</div> <div class="td">Serves as a professional role model and educator, mentor, consultant, and resource to motivate, develop, recruit, and retain perioperative personnel and colleagues.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">2.</div> <div class="td">Models collegial relationships with perioperative personnel and colleagues to promote positive learning environments.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">3.</div> <div class="td">Shares expertise to advance the mission, vision, values, and strategic plan of the organization and promote positive perioperative outcomes.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">4.</div> <div class="td">Provides opportunities for and support of continuing education, professional development, and formal education.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">5.</div> <div class="td">Promotes specialty certification.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">6.</div> <div class="td">Promotes active membership and participation in professional organizations.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">7.</div> <div class="td">Uses feedback gained from self-reflection, program recipient review, peer-review, and administrative evaluations to improve educator role effectiveness.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>
            </section>
            <!-- /Standard Group -->


            <!-- Standard Group -->
            <section class="section assessment-group">
                <div class="box-title">
                    <h3>Standard 11: Collaboration</h3>
                    <p>Collaborates with internal and external stakeholders to improve perioperative education.</p>
                </div>

                <div class="boxes box-heading-area">
                    <div class="box box1 box-heading">
                        Competency Statements/Performance Criteria
                    </div>
                    <div class="box box2 box-heading">
                        <div class="box2-heading">Verification Method<br>
                        </div>
                        <div class="table">
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">DEM/ DO/ DA</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">KAT</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">S/ SBT/ CS</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">V</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">RWM/ P&amp;P</a></div>
                            <div class="td checks text-center last"><a href="#modal-legend" data-toggle="modal" title="View Legend">O</a></div>
                        </div>

                    </div>
                    <div class="box box3 box-heading">
                        Not Met (Explain Why)
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">1.</div> <div class="td">Participates on committees at all levels as a perioperative resource to influence organizational decisions, policies, and procedures.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">2.</div> <div class="td">Oversees perioperative educational activities, providing input regarding perioperative and organizational interests.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">3.</div> <div class="td">Interacts with health care providers to promote positive perioperative educational outcomes.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">4.</div> <div class="td">Partners with internal and external stakeholders to influence decisions affecting perioperative services and outcomes.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>
            </section>
            <!-- /Standard Group -->



            <!-- Standard Group -->
            <section class="section assessment-group">
                <div class="box-title">
                    <h3>Standard 12: Ethics</h3>
                    <p>Promotes the use of ethical processes to deliver perioperative education.</p>
                </div>

                <div class="boxes box-heading-area">
                    <div class="box box1 box-heading">
                        Competency Statements/Performance Criteria
                    </div>
                    <div class="box box2 box-heading">
                        <div class="box2-heading">Verification Method<br>
                        </div>
                        <div class="table">
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">DEM/ DO/ DA</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">KAT</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">S/ SBT/ CS</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">V</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">RWM/ P&amp;P</a></div>
                            <div class="td checks text-center last"><a href="#modal-legend" data-toggle="modal" title="View Legend">O</a></div>
                        </div>

                    </div>
                    <div class="box box3 box-heading">
                        Not Met (Explain Why)
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">1.</div> <div class="td">Promotes an educational environment where perioperative team members engage in competent, ethical, and legal practices.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">2.</div> <div class="td">Maintains sensitivity to diversity within the perioperative educational setting.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">3.</div> <div class="td">Fosters a nondiscriminatory climate within the perioperative educational setting.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">4.</div> <div class="td">Uses resources and promotes educational activities within the organization to address ethical issues.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>
            </section>
            <!-- /Standard Group -->



            <!-- Standard Group -->
            <section class="section assessment-group">
                <div class="box-title">
                    <h3>Standard 13: Research</h3>
                    <p>Supports and integrates current research and other available evidence into perioperative education.</p>
                </div>

                <div class="boxes box-heading-area">
                    <div class="box box1 box-heading">
                        Competency Statements/Performance Criteria
                    </div>
                    <div class="box box2 box-heading">
                        <div class="box2-heading">Verification Method<br>
                        </div>
                        <div class="table">
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">DEM/ DO/ DA</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">KAT</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">S/ SBT/ CS</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">V</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">RWM/ P&amp;P</a></div>
                            <div class="td checks text-center last"><a href="#modal-legend" data-toggle="modal" title="View Legend">O</a></div>
                        </div>

                    </div>
                    <div class="box box3 box-heading">
                        Not Met (Explain Why)
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">1.</div> <div class="td">Evaluates and updates educational resources and activities based on available evidence and current research findings.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">2.</div> <div class="td">Creates a supportive environment with sufficient resources for perioperative personnel to investigate research findings and initiate evidence-based best practices.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">3.</div> <div class="td">Promotes dissemination of knowledge gained from evidence-based activities via presentations, publications, and consultation.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">4.</div> <div class="td">Promotes perioperative research priorities that align with the mission, vision, values, and strategic plan of the organization.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">5.</div> <div class="td">Promotes perioperative research priorities that align with those set by professional nursing organizations, regulatory agencies, and accrediting bodies.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">6.</div> <div class="td">Incorporates evidence-based practice and evidence-based educational activities to improve perioperative patient outcomes.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>
            </section>
            <!-- /Standard Group -->



            <!-- Standard Group -->
            <section class="section assessment-group">
                <div class="box-title">
                    <h3>Standard 14: Resource Utilization</h3>
                    <p>Supports and integrates current research and other available evidence into perioperative education.</p>
                </div>

                <div class="boxes box-heading-area">
                    <div class="box box1 box-heading">
                        Competency Statements/Performance Criteria
                    </div>
                    <div class="box box2 box-heading">
                        <div class="box2-heading">Verification Method<br>
                        </div>
                        <div class="table">
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">DEM/ DO/ DA</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">KAT</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">S/ SBT/ CS</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">V</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">RWM/ P&amp;P</a></div>
                            <div class="td checks text-center last"><a href="#modal-legend" data-toggle="modal" title="View Legend">O</a></div>
                        </div>

                    </div>
                    <div class="box box3 box-heading">
                        Not Met (Explain Why)
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">1.</div> <div class="td">Allocates physical and human resources to promote quality perioperative education.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">2.</div> <div class="td">Allocates fiscal resources to support the perioperative educational plan.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">3.</div> <div class="td">Designs and implements educational resources and activities that promote continuous quality improvement within perioperative services.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">4.</div> <div class="td">Advocates for human and material resources to support high-quality perioperative practices and a safe work environment.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">5.</div> <div class="td">Promotes creative thinking among perioperative personnel, peers, and colleagues to develop new and innovative devices, practices, and strategies to advance and improve perioperative services.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">6.</div> <div class="td">Advocates for environmental consciousness when using and managing educational resources in the perioperative setting.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">7.</div> <div class="td">Provides documentation for internal and external stakeholders to demonstrate costs, risks, and benefits that support decisions for perioperative education.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>
            </section>
            <!-- /Standard Group -->



            <!-- Standard Group -->
            <section class="section assessment-group">
                <div class="box-title">
                    <h3>Standard 15: Leadership</h3>
                    <p>Provides leadership within the organization and the profession.</p>
                </div>

                <div class="boxes box-heading-area">
                    <div class="box box1 box-heading">
                        Competency Statements/Performance Criteria
                    </div>
                    <div class="box box2 box-heading">
                        <div class="box2-heading">Verification Method<br>
                        </div>
                        <div class="table">
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">DEM/ DO/ DA</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">KAT</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">S/ SBT/ CS</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">V</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">RWM/ P&amp;P</a></div>
                            <div class="td checks text-center last"><a href="#modal-legend" data-toggle="modal" title="View Legend">O</a></div>
                        </div>

                    </div>
                    <div class="box box3 box-heading">
                        Not Met (Explain Why)
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">1.</div> <div class="td">Maintains membership in relevant professional organizations related to leadership and perioperative practice.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">2.</div> <div class="td">Achieves and maintains relevant professional specialty certification(s).</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">3.</div> <div class="td">Assumes leadership role on administrative teams participating in decision making that affects perioperative practice.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">4.</div> <div class="td">Participates in activities to influence legislative or regulatory decisions that affect perioperative services and perioperative practice.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">5.</div> <div class="td">Leads committees, task forces, councils, and teams to make decisions that positively influence perioperative services, perioperative practice, or perioperative patient outcomes.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">6.</div> <div class="td">Supports perioperative personnel in promoting positive patient outcomes.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">7.</div> <div class="td">Promotes life-long learning among personnel involved with perioperative services.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">8.</div> <div class="td">Creates an environment that supports loyalty, teamwork, respect, and professionalism among personnel involved with perioperative services.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">9.</div> <div class="td">Promotes an environment that fosters independent and creative critical thinking.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">10.</div> <div class="td">Provides leadership and initiates change supporting evidence-based practices in the perioperative setting.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">11.</div> <div class="td">Advances knowledge of perioperative services and perioperative practice by communicating pertinent information through publishing and presenting for professional and lay audiences.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>
            </section>
            <!-- /Standard Group -->



            <!-- Standard Group -->
            <section class="section assessment-group">
                <div class="box-title">
                    <h3>Standard 16: Advocacy</h3>
                    <p>Advocates for individuals and groups related to perioperative health and safety.</p>
                </div>

                <div class="boxes box-heading-area">
                    <div class="box box1 box-heading">
                        Competency Statements/Performance Criteria
                    </div>
                    <div class="box box2 box-heading">
                        <div class="box2-heading">Verification Method<br>
                        </div>
                        <div class="table">
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">DEM/ DO/ DA</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">KAT</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">S/ SBT/ CS</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">V</a></div>
                            <div class="td checks text-center"><a href="#modal-legend" data-toggle="modal" title="View Legend">RWM/ P&amp;P</a></div>
                            <div class="td checks text-center last"><a href="#modal-legend" data-toggle="modal" title="View Legend">O</a></div>
                        </div>

                    </div>
                    <div class="box box3 box-heading">
                        Not Met (Explain Why)
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">1.</div> <div class="td">Allocates educational resources to support advocacy activities related to perioperative practice.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>

                <div class="boxes">

                    <div class="box box1">

                        <div class="td">2.</div> <div class="td">Promotes a philosophy of advocacy in the perioperative education environment.</div>
                    </div>
                    <div class="box-heading mobile-only">Verification Method</div>
                    <div class="box box2">

                        <div class="table">
                            <div class="td checks text-center"><label class="mobile-only">DEM/ DO/ DA</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">KAT</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">S/ SBT/ CS</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">V</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center"><label class="mobile-only">RWM/ P</label><input type="checkbox" value="Yes"></div>
                            <div class="td checks text-center last"><label class="mobile-only">0</label><input type="checkbox" value="Yes"></div>
                        </div>

                    </div>

                    <div class="box box3">
                        <textarea class="form-control" rows="2" placeholder="Explain why not met..."></textarea>
                    </div>
                </div>
            </section>
            <!-- /Standard Group -->


            <!-- Footer Legend -->
            <section class="section legend">
                <h5><b>Legend</b></h5>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><b>DEM/DO/DA -</b> Demonstration/Direct Observation/Documentation Audit</li>
                            <li><b>S/SBT/CS -</b> Skills Laboratory/Scenario-based Training/Controlled Simulation</li>
                            <li><b>RWM/P&amp;P -</b> Review of Written or Visual Materials/Policy/Procedure Review (Specify P&amp;P #s _________________)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><b>KAT -</b> Knowledge Assessment Test</li>
                            <li><b>V -</b> Verbalization</li>
                            <li><b>O -</b> Other: ____________________________________________________</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Footer Legend -->


            <!-- Sticky Bar Section -->
            <?php
                $stickybar = array(
                    'sets' => array(
                        array(
                            'classes' => array('visible-xs'),
                            'html' => '
                                <div class="btn-group dropup">
                                    <a href="#" class="btn btn-success">Save</a>
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-up"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Save</a></li>
                                        <li><a href="#">Print</a></li>
                                    </ul>
                                </div>
                                <a href="#" class="btn btn-default js-btn-back">Cancel</a>
                            ',
                        ),
                        array(
                            'classes' => array('hidden-xs'),
                            'html' => '
                                <a href="#" class="btn btn-success">Save Progress</a>
                                <a href="#" class="btn btn-success">Print</a>
                                <a href="#" class="btn btn-default">Cancel</a>
                            ',
                        ),
                    ),
                );
                echo createStickybar($stickybar);
            ?>
            <!-- Sticky Bar Section -->

        </section><!-- /section-main -->
    </div><!-- /container -->
</div><!-- /layout -->

<!-- modal -->
<div id="modal-legend" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Verification Methods</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h3>DEM/DO/DA:</h3>
                    <p>Demonstration/Direct Observation/Documentation Audit</p>
                </section>
                <section class="section">
                    <h3>S/SBT/CS:</h3>
                    <p>Skills Laboratory/Scenario-based Training/Controlled Simulation</p>
                </section>
                <section class="section">
                    <h3>RWM/P&amp;P:</h3>
                    <p>Review of Written or Visual Materials/Policy/Procedure Review</p>
                </section>
                <section class="section">
                    <h3>KAT:</h3>
                    <p>Knowledge Assessment Test</p>
                 </section>
                <section class="section">
                    <h3>V:</h3>
                    <p>Verbalization<p>
                </section>
                <section class="section">
                    <h3>O:</h3>
                    <p>Other</p>
                </section>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $('#checklist-clear').click(function(e){
            e.preventDefault();
            HealthStream.utilities.interrupt({
                title: 'Clear My Work',
                text: 'Are you sure you want to remove all your ratings and comments from this checklist?',
                actions: [
                {
                    type: 'danger',
                    id: 'checklist-clear-confirm',
                    label: 'Yes, clear my work'
                },
                {
                    label: 'Cancel'
                },
                ]
            });
            $('#checklist-clear-confirm').click(function(){
                $('input:checkbox').removeAttr('checked');
            });
        });
    });
</script>
<?= createSiteEnd(); ?>