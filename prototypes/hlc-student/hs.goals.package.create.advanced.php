<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Basic Page Needs
         ================================================== -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
     
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <title>Goals Prototype</title>
      <!-- Styles
         ================================================== -->
      <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.bootstrap.css?cache=1480457232">
      <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.plugins.css?cache=1480457232">
      <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.app.css?cache=1480457232">
      <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.prototype.css?cache=1480457232">
      <!-- IE 7/8 Handling
         ================================================== -->
      <script>
         if (document.documentMode < 8) {
             location.href = "unsupported-browser.php";
         }
         else if (document.documentMode == 8) {
             var html = document.getElementsByTagName('html')[0];
             html.className = 'ie ie8' + html.className;
             var ie8docmode = document.createElement('script');
             ie8docmode.setAttribute('src','/scripts/respond.js');
             document.getElementsByTagName('head')[0].appendChild(ie8docmode);
             var ie8styles = document.createElement('link');
             ie8styles.setAttribute('rel','stylesheet');
             ie8styles.setAttribute('type','text/css');
             ie8styles.setAttribute('href','/content/styles/healthstream.ie8.css');
             document.getElementsByTagName('head')[0].appendChild(ie8styles);
         }
         else {
             var icons = document.createElement('link');
             icons.setAttribute('rel','stylesheet');
             icons.setAttribute('type','text/css');
             icons.setAttribute('href','/content/styles/healthstream.icons.css');
             document.getElementsByTagName('head')[0].appendChild(icons);
         }
      </script>
      <!-- Feature Detection Using Modernizr
         ================================================== -->
      <script src="/scripts/modernizr.js"></script>
     
    
      <style>
        body {
            color: #777;
        }
        .slat-lowfi {
            border:1px solid #ececec !important;
        }
       
        .section {
            padding-left:20px;
        }
       
        .wizard-box {
            border: 2px #777 solid;
            min-height:300px;
            width: 600px;
            margin-top:20px;
            padding:20px;
            position:relative;
        }
        .section {
            padding-left:20px;
        }
        .wizard-buttons {
            position:absolute; 
            left:20px;
            bottom:20px;
        }
        .step {
            display:none;
        }
        .help-block {
            color:#ccc;
            font-size:12px;
        }
       .step > p {
           margin-bottom: 30px;
       }
       .advanced-settings {
            width:60%;
            display:table;
       }
       .row {
            width:100%;
            display:table-row;
       }
       .advanced-settings .setting {
           display:table-cell;
           width:40%;
           padding-left:20px;
       }
        .advanced-settings .setting.heading {
           font-weight:600;
           padding-left:0px;
           padding-top:10px;
       }
        .advanced-settings .column.heading {
           font-weight:600;
              text-align:center;
       }
       .advanced-settings .column {
           display:table-cell;
            width:20%;
            text-align:center;
       }

      </style>
   </head>
   <body>
      
    
      <style>
      </style>
      <div class="">
         <div class="container">
            <section class="section section-main section-box">
            
                <h1>Create Goal Package - Advanced Settings</h1>
                    <section class="section">

                            <div>
                                    <div style="width:100px;float:left;margin-right:15px;height:35px;margin-top:7px;">
                                    <label for="packageName">Package Name</label>
                                </div>
                                <div style="width:400px;float:left;">
                                    <input type="text" class="form-control" id="packageName" placeholder="Package Name"/>
                                    <small>Example: 2017 Performance Review Package</small>
                                </div>
                                <div class="clearfix">
                            </div>
                            <div style="margin-top:20px;">
                                <div style="width:100px;float:left;margin-right:15px;height:35px;margin-top:7px;">
                                    <label for="packageName">Start Date</label>
                                </div>
                                <div style="width:200px;float:left;">
                                    <div class="input-group bootstrap-datepicker">
                                        <input type="text" class="form-control datepicker" id="event-end-date"  tabindex="1">
                                        <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div>
                                <div style="width:100px;float:left;margin-right:15px;height:35px;margin-top:7px;">
                                    <label for="packageName">End Date</label>
                                </div>
                                <div style="width:200px;float:left;">
                                    <div class="input-group bootstrap-datepicker">
                                        <input type="text" class="form-control datepicker" id="event-end-date" tabindex="1">
                                        <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                                <p style="margin-top:20px;">
                                   Advanced Settings. Alternatively, you can go back to the <a href="hs.goals.package.create.php">Wizard</a> to step through the process. 
                                </p>

                            <div class="advanced-settings">
                                 <div class="row">
                                    <div class="setting heading"></div>
                                    <div class="column heading">Require</div>
                                    <div class="column heading">Optional</div>
                                    <div class="column heading">Hide</div>
                                </div>
                                <div class="row">
                                    <div class="setting heading">Dates</div>
                                </div>
                                <div class="row">
                                    <div class="setting">Target Completion Date</div>
                                    <div class="column"><input type="radio" name="targetcompdate"></div>
                                    <div class="column"><input type="radio" name="targetcompdate"></div>
                                    <div class="column"><input type="radio" name="targetcompdate"></div>
                                </div>
                                 <div class="row">
                                    <div class="setting">Closed/Completed Date</div>
                                    <div class="column"><input type="radio" name="closed"></div>
                                    <div class="column"><input type="radio" name="closed"></div>
                                    <div class="column"><input type="radio" name="closed"></div>
                                </div>
                                  <div class="row">
                                    <div class="setting heading">Measure</div>
                                </div>
                                <div class="row">
                                    <div class="setting">Denomination</div>
                                    <div class="column"><input type="radio" name="demon"></div>
                                    <div class="column"><input type="radio" name="demon"></div>
                                    <div class="column"><input type="radio" name="demon"></div>
                                </div>
                                 <div class="row">
                                    <div class="setting">Starting Value</div>
                                    <div class="column"><input type="radio" name="starting"></div>
                                    <div class="column"><input type="radio" name="starting"></div>
                                    <div class="column"><input type="radio" name="starting"></div>
                                </div>
                                <div class="row">
                                    <div class="setting">Target Value</div>
                                    <div class="column"><input type="radio" name="target"></div>
                                    <div class="column"><input type="radio" name="target"></div>
                                    <div class="column"><input type="radio" name="target"></div>
                                </div>
                                 <div class="row">
                                    <div class="setting">Actual/Final Value</div>
                                    <div class="column"><input type="radio" name="actual"></div>
                                    <div class="column"><input type="radio" name="actual"></div>
                                    <div class="column"><input type="radio" name="actual"></div>
                                </div>
                                <div class="row">
                                    <div class="setting">Milestone Definition</div>
                                    <div class="column"><input type="radio" name="milestone"></div>
                                    <div class="column"><input type="radio" name="milestone"></div>
                                    <div class="column"><input type="radio" name="milestone"></div>
                                </div>
                                <div class="row">
                                    <div class="setting">Progress Updates</div>
                                    <div class="column"><input type="radio" name="progress"></div>
                                    <div class="column"><input type="radio" name="progress"></div>
                                    <div class="column"><input type="radio" name="progress"></div>
                                </div>
                                  <div class="row">
                                    <div class="setting">Weighting</div>
                                    <div class="column"><input type="radio" name="weight"></div>
                                    <div class="column"><input type="radio" name="weight"></div>
                                    <div class="column"><input type="radio" name="weight"></div>
                                </div>
                              <div class="row">
                                    <div class="setting heading">Competency Integration</div>
                                </div>
                                 <div class="row">
                                    <div class="setting">Review Cycle Tag</div>
                                    <div class="column"><input type="radio" name="review"></div>
                                    <div class="column"><input type="radio" name="review"></div>
                                    <div class="column"><input type="radio" name="review"></div>
                                </div>

                             <div class="row">
                                    <div class="setting heading">Other</div>
                                </div>
                                 <div class="row">
                                    <div class="setting">Individual/Personal vs. Group</div>
                                    <div class="column"><input type="radio" name="individual"></div>
                                    <div class="column"><input type="radio" name="individual"></div>
                                    <div class="column"><input type="radio" name="individual"></div>
                                </div>
                                 <div class="row">
                                    <div class="setting">Public vs. Private</div>
                                    <div class="column"><input type="radio" name="public"></div>
                                    <div class="column"><input type="radio" name="public"></div>
                                    <div class="column"><input type="radio" name="public"></div>
                                </div>
                                 <div class="row">
                                    <div class="setting">Upload Resources/Documents</div>
                                    <div class="column"><input type="radio" name="uploaddocs"></div>
                                    <div class="column"><input type="radio" name="uploaddocs"></div>
                                    <div class="column"><input type="radio" name="uploaddocs"></div>
                                </div>
                                <div class="row">
                                    <div class="setting">Default Manager/Authority on Goals</div>
                                    <div class="column"><input type="radio" name="defaultmgr"></div>
                                    <div class="column"><input type="radio" name="defaultmgr"></div>
                                    <div class="column"><input type="radio" name="defaultmgr"></div>
                                </div>
                            </div>

               

                    </section>

<button class="btn btn-primary next" data-stepid="2">Save and Enter Goals</button>
                                <button class="btn btn-default draft">Save as Draft</button>
                                <button class="btn btn-default cancel">Cancel</button>

            </section>
         </div>
      </div>
      
      <script src="/scripts/jquery.js"></script>
      <script src="/scripts/bootstrap.plugins.js"></script>
      <script src="/scripts/bootstrap-datepicker.js"></script>
      <script src="/scripts/bootstrap-timepicker.js"></script>
      <!--<script src="/scripts/charts.js"></script>-->
      <!--<script src="/scripts/gritter.js"></script>-->
      <!--<script src="/scripts/select2.js"></script>-->
      <script src="/scripts/slick.js"></script>
      <!--<script src="/scripts/tinysort.js"></script>-->
      <script src="/scripts/healthstream.js"></script>
      <script src="/scripts/healthstream.jquery.js"></script>
      <!--<script src="/scripts/healthstream.utilities.equalize.js"></script>-->
      <!--<script src="/scripts/healthstream.utilities.limitHeight.js"></script>-->
      <!--<script src="/scripts/healthstream.utilities.toggleText.js"></script>-->
      <!--<script src="/scripts/healthstream.utilities.growl.js"></script>-->
      <!--<script src="/scripts/healthstream.utilities.interrupt.js"></script>-->
      <!--<script src="/scripts/healthstream.focusbar.js"></script>-->
      <!--<script src="/scripts/healthstream.stickybar.js"></script>-->
      <!--<script src="/scripts/healthstream.filtermini.js"></script>-->
      <!--<script src="/scripts/healthstream.checklist.js"></script>-->
      <!--<script src="/scripts/healthstream.checkable.js"></script>-->
      <script src="/scripts/prototype.validation/formValidation.min.js"></script>
      <script src="/scripts/prototype.validation/framework/bootstrap.min.js"></script>
      <script>
               (function(window, $) {
            'use strict';
            window.HealthStream = window.HealthStream || {};
            var healthStream = window.HealthStream;

            healthStream.datepicker = function() {
                $('.datepicker').datepicker({
                    autoclose: true
                });
            };
            
         
              
            $(window).on('load', function() {

                healthStream.datepicker();
              
             
               $('.next').click(function() {
                   location.href = "hs.goals.goals.manage.php";
               });
                $('.cancel').click(function() {
                     location.href = "hs.goals.packages.php?numOf=0";
               });
               $('.draft').click(function() {
                   location.href = "hs.goals.packages.php?numOf=1";
               });

            });
        }(window, jQuery));

      </script>