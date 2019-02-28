<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'CE Tracker File';

?>
<?= createSiteStart($patterns['start']); ?>
<style>
    body {
        background: #fff;
    }
    header .image-container{
        float:right;
        width: 128px;
        text-align:center;
        border: 1px dotted #999;
        position: relative;
        top: -10px;
    }
    header .image-container img{
        max-width:100%;
        margin: auto;
    }
    .resume {
        max-width: 980px;
    }
    .resume .resume-header {
        padding: 20px 0;
        text-align: center;
    }
    .resume .resume-header h1 {
        margin-top: 4px;
    }
    .resume .resume-footer {
        font-size: 11px;
        color: #999;
        text-align: center;
        border-top: 1px solid #ddd;
        padding: 30px 0;
    }
    .resume article {
        margin-bottom: 40px;
    }
    .resume .resume-section {
        margin-bottom: 20px;
    }
/*    .resume .resume-section .row {
        margin-bottom: 10px;
    }*/
    .resume .resume-section ul {
        list-style: none;
        padding: 0;
    }
    .resume article h4 {
        text-transform: uppercase;
        color: #999 !important;
        padding-bottom: 5px;
        border-bottom: 1px dotted #999;
        letter-spacing: 1px;
    }
    .resume .date-range {
        color: #999 !important;
        text-transform: uppercase;
        text-align: right;
    }
    .resume .company-location-setting {
        color: #999 !important;
    }
    .resume .meta-label {
        font-size: .8em;
        text-transform: uppercase;
        margin-right: 5px;
        color: #999 !important;
        font-weight: 600;
    }
    .resume .meta-value {
        /*color: #999 !important;*/
    }
    .resume .resume-logo {
        width: 120px;
        margin-bottom: 5px;
        margin-top: 10px;
    }
    .resume .print-bar {
        display: block;
        background-color: #eee;
        text-align: center;
        padding: 5px;
        margin: 10px 0;
        font-size: 11px;
        color: #333;
        border-radius: 5px;
        width: 33%;
    }
    .resume .print-bar:hover {
        text-decoration: none;
        background-color: #eaeaea;
    }

    .resume .print-bar.btn:first-child:hover {
            border-right: 1px dotted #999;
    }
    .resume .print-bar.btn:not(:first-child){
        border-left: 1px dotted #999;
    }
    .action-bar, .action-bar .btn-group{
        width:100%;
    }

    @media screen and (max-width: 767px) {
        .resume .date-range {
            text-align: left;
            font-size: 11px;
        }
    }

    @media print {
        body {
            font-size: 12px;
        }
        .resume .col-sm-6 {
            width: 50%;
            float: left;
        }
        .resume .col-sm-6.date-range {
            text-align: right;
            float: right;
            width: 50%;
        }
        .resume article {
            /*page-break-inside: avoid;*/
        }
        .resume .print-bar {
            display: none;
        }
        .resume .count {
            background-color: #333;
        }


    }

</style>


<div class="container resume">
    <div class="action-bar">
        <div class="btn-group" role="group">
            <a href="javascript:;" class="print-bar btn"  onclick="javascript:window.print();"><i class="fa fa-print"></i> Print</a>
            <a href="#" class="print-bar btn export-btn" ><i class="fa fa-file-word-o "></i> Export</a>
            <a href="#modal-share" data-toggle="modal" class="print-bar btn share-btn" ><i class="fa fa-envelope "></i> Share</a>
        </div>
    </div>
    <header class="resume-header">
        <h1>Dr. Stephanie Juniper </h1>
        <h4>License Name</h4>
        <h5>1/1/2017 - 12/31/2017, 16 Credits</h5>
    </header>

    <div class="row">
        <div class="col-sm-6">
            <!-- PERSONAL -->
            <article class="personal-information">
                <h4>Personal Information</h4>
                <section class="resume-section personal">
                    <strong>Stephanie Juniper</strong><br>
                    123 East Elm St.<br>
                    Seattle, WA 12345<br>
                    Unites States<br>
                    <small>Phone:</small> 555-555-5555<br>
                    <small>Fax:</small> 555-556-5656<br>
                    Email: sjuniper@jupiterhealthcare.com
                </section>
            </article>
            <!-- /PERSONAL -->
        </div>
        <div class="col-sm-6">
            <!-- LICENSES -->
            <article>
                <h4>License</h4>
                <section class="resume-section">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Profession and Title -->
                            <strong>License name</strong>
                        </div>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <span class="meta-label">State License Number:</span>
                                <span class="meta-value">231232321321-32132321321321</span>
                            </li>
                            <li>
                                <span class="meta-label">State:</span>
                                <span class="meta-value">TN</span>
                            </li>
                            <li>
                                <span class="meta-label">Issued:</span>
                                <span class="meta-value">7/30/2017</span>
                            </li>
                            <li>
                                <span class="meta-label">Expired:</span>
                                <span class="meta-value">7/30/2019</span>
                            </li>
                        </ul>
                    </div>
                </section>
            </article>
            <!-- /LICENSES -->
        </div>
    </div>

    <!-- CE CREDITS -->
    <article>
        <h4>CE Credits</h4>
        <section class="resume-section">
            <div>
                <!-- Activity/Event Name -->
                <strong>Managing Your Time</strong>
            </div>
            <div>
                <ul>
                    <li>
                        <span class="meta-label">Date of Completion:</span>
                        <span class="meta-value">1/27/2017</span>
                    </li>
                    <li>
                        <span class="meta-label">Provider Name:</span>
                        <span class="meta-value">OnCourse Learning</span>
                    </li>
                    <li>
                        <span class="meta-label">Accrediting Body:</span>
                        <span class="meta-value">Accreditation Council for Continuing Medical Education</span>
                    </li>
                    <li>
                        <span class="meta-label">CE Credit:</span>
                        <span class="meta-value">1.0</span>
                    </li>
                </ul>
            </div>
        </section>
        <section class="resume-section">
            <div>
                <!-- Activity/Event Name -->
                <strong>Substance Abuse and Women</strong>
            </div>
            <div>
                <ul>
                    <li>
                        <span class="meta-label">Date of Completion:</span>
                        <span class="meta-value">3/17/2017</span>
                    </li>
                    <li>
                        <span class="meta-label">Provider Name:</span>
                        <span class="meta-value">OnCourse Learning</span>
                    </li>
                    <li>
                        <span class="meta-label">Accrediting Body:</span>
                        <span class="meta-value">American Nurses Credentialing Center</span>
                    </li>
                    <li>
                        <span class="meta-label">CE Credit:</span>
                        <span class="meta-value">1.0</span>
                    </li>
                </ul>
            </div>
        </section>
        <section class="resume-section">
            <div>
                <!-- Activity/Event Name -->
                <strong>Human Trafficking: A Personal View</strong>
            </div>
            <div>
                <ul>
                    <li>
                        <span class="meta-label">Date of Completion:</span>
                        <span class="meta-value">4/2/2017</span>
                    </li>
                    <li>
                        <span class="meta-label">Provider Name:</span>
                        <span class="meta-value">Elite</span>
                    </li>
                    <li>
                        <span class="meta-label">Accrediting Body:</span>
                        <span class="meta-value">American Nurses Credentialing Center</span>
                    </li>
                    <li>
                        <span class="meta-label">CE Credit:</span>
                        <span class="meta-value">1.0</span>
                    </li>
                </ul>
            </div>
        </section>
        <section class="resume-section">
            <div>
                <!-- Activity/Event Name -->
                <strong>Patient and Family Anger: What to do when frustration spills into the workplace</strong>
            </div>
            <div>
                <ul>
                    <li>
                        <span class="meta-label">Date of Completion:</span>
                        <span class="meta-value">6/8/2017</span>
                    </li>
                    <li>
                        <span class="meta-label">Provider Name:</span>
                        <span class="meta-value">Elite</span>
                    </li>
                    <li>
                        <span class="meta-label">Accrediting Body:</span>
                        <span class="meta-value">American Nurses Credentialing Center</span>
                    </li>
                    <li>
                        <span class="meta-label">CE Credit:</span>
                        <span class="meta-value">3.0</span>
                    </li>
                </ul>
            </div>
        </section>
        <section class="resume-section">
            <div>
                <!-- Activity/Event Name -->
                <strong>Alzheimer's and Dementia</strong>
            </div>
            <div>
                <ul>
                    <li>
                        <span class="meta-label">Date of Completion:</span>
                        <span class="meta-value">8/8/2017</span>
                    </li>
                    <li>
                        <span class="meta-label">Provider Name:</span>
                        <span class="meta-value">CEUFast Inc.</span>
                    </li>
                    <li>
                        <span class="meta-label">Accrediting Body:</span>
                        <span class="meta-value">American Nurses Credentialing Center</span>
                    </li>
                    <li>
                        <span class="meta-label">CE Credit:</span>
                        <span class="meta-value">4.0</span>
                    </li>
                </ul>
            </div>
        </section>
        <section class="resume-section">
            <div>
                <!-- Activity/Event Name -->
                <strong>Annual Regulatory Requirements, Current Practice</strong>
            </div>
            <div>
                <ul>
                    <li>
                        <span class="meta-label">Date of Completion:</span>
                        <span class="meta-value">8/9/2017</span>
                    </li>
                    <li>
                        <span class="meta-label">Provider Name:</span>
                        <span class="meta-value">CEUFast Inc.</span>
                    </li>
                    <li>
                        <span class="meta-label">Accrediting Body:</span>
                        <span class="meta-value">American Nurses Credentialing Center</span>
                    </li>
                    <li>
                        <span class="meta-label">CE Credit:</span>
                        <span class="meta-value">5.0</span>
                    </li>
                </ul>
            </div>
        </section>
        <section class="resume-section">
            <div>
                <!-- Activity/Event Name -->
                <strong>Alarm Management</strong>
            </div>
            <div>
                <ul>
                    <li>
                        <span class="meta-label">Date of Completion:</span>
                        <span class="meta-value">8/10/2017</span>
                    </li>
                    <li>
                        <span class="meta-label">Provider Name:</span>
                        <span class="meta-value">HealthStream</span>
                    </li>
                    <li>
                        <span class="meta-label">Accrediting Body:</span>
                        <span class="meta-value">American Nurses Credentialing Center</span>
                    </li>
                    <li>
                        <span class="meta-label">CE Credit:</span>
                        <span class="meta-value">1.0</span>
                    </li>
                </ul>
            </div>
        </section>

    </article>


    <footer class="resume-footer">
        This CE Tracker File was produced through HealthStream<br>
        <img src="/content/images/logo-healthstream-small.png" alt="HealthStream" class="resume-logo"><br>
        Copyright &copy; 2015 HealthStream, Inc. All Rights Reserved.<br>
        Build: 13.01.28.895.8 | O:STS2 | S:192.231.71.2
    </footer>

</div>

<!-- Modal -->
<div id="modal-share" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Share your CE Tracker File</h4>
            </div>
            <div class="modal-body">

				<div class="form-group">
                        <label class="control-label">Email Address(es) <small>Separate with comma</small></label>
                        <textarea class="form-control"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Send</button>

                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->
<?=createSiteScripts(); ?>
<?= createSiteEnd(); ?>