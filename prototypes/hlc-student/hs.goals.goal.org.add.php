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
       .help-block,label {
           margin:0px;
       }
       .creategoal-question {
           margin: 15px 0 0 0px;
       }
       textarea {
           min-height:20px;
       }
       .creategoal-answer {
           margin-left:20px;
           margin-top:15px;
       }
       .question-title {
           font-size:16px;
       }
       
      </style>
   </head>
   <body>
      
    
      <style>
      </style>
      <div class="">
         <div class="container">
            <section class="section section-main section-box">
            
                <h1>Create Organization Goal</h1>
                <h3>2017 Performance Review Package</h3>
                <!--<div style="margin:30px 0;"> <a href="hs.goals.goal.add.php"><i class="fa fa-plus"></i> Add Organization Goal</a></div>-->
                <section>
                    <div class="row creategoal-question">
                        <div class="col-lg-7">
                            <label class="control-label question-title">Goal Title</label>
                            <span class="help-block">What is your Goal?</span>
                            <div class="creategoal-answer">
                                <input type="text" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row creategoal-question">
                        <div class="col-lg-7">
                            <label class="control-label question-title">Description</label>
                            <span class="help-block">Describe your goal</span>
                             <div class="creategoal-answer">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row creategoal-question">
                        <div class="col-lg-7">
                            <label class="control-label question-title">Type</label>
                            <span class="help-block">What type of goal is this?</span>
                             <div class="creategoal-answer">
                                <textarea class="form-control" rows="3" placeholder="selectbox"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row creategoal-question">
                        <div class="col-lg-7">
                            <label class="control-label question-title">Dates</label>
                            <span class="help-block">What dates will this goal be active?</span>
                             <div class="creategoal-answer">
                                <div class="row" style="margin-top:10px;">
                                    <div class="col-lg-2"><label class="control-label" >Start Date</label></div>
                                    <div class="col-lg-4">
                                        <div class="input-group bootstrap-datepicker">
                                            <input type="text" class="form-control datepicker" id="event-end-date" tabindex="1">
                                            <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:10px;">
                                    <div class="col-lg-2"> <label class="control-label">End Date</label></div>
                                    <div class="col-lg-4">
                                        <div class="input-group bootstrap-datepicker">
                                            <input type="text" class="form-control datepicker" id="event-end-date" tabindex="1">
                                            <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="row creategoal-question">
                        <div class="col-lg-7">
                            <label class="control-label question-title">Weight</label>
                            <span class="help-block">Define the percentage weight that this goal should have. </span>
                             <div class="creategoal-answer">
                                <input type="text" style="width:50px" class="form-control pull-left" > <span class="pull-left" style="font-size:22px;margin-left:7px;">%</span>
                                <div class="pull-left" style="margin-top:7px;margin-left:10px;font-size:12px;">(you have 100% remaining in the goal package)</div>
                            </div>
                        </div>
                    </div>

                    <div class="row creategoal-question">
                        <div class="col-lg-7">
                            <label class="control-label question-title">Measurements</label>
                            <span class="help-block">What dates will this goal be active?</span>
                             <div class="creategoal-answer">
                                <div class="row" style="margin-top:10px;">
                                    <div class="col-lg-3"><label class="control-label" >Starting Value</label></div>
                                     <div style="width:50px;float:left;margin-right:7px;">
                                       <input class="form-control" type="text"/>
                                    </div>
                                    <div style="width:100px;float:left;">
                                        <select class="form-control">
                                            <option>Percentile</option>
                                            <option>Dollars</option>
                                            <option>Units</option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="row" style="margin-top:10px;">
                                    <div class="col-lg-3"><label class="control-label" >Target Value</label></div>
                                     <div style="width:50px;float:left;margin-right:7px;">
                                       <input class="form-control" type="text"/>
                                    </div>
                                    <div style="width:100px;float:left;">
                                        <select class="form-control">
                                            <option>Percentile</option>
                                            <option>Dollars</option>
                                            <option>Units</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:10px;">
                                    <div class="col-lg-3"> <label class="control-label">Stretch Date</label></div>
                                    <div style="width:50px;float:left;margin-right:7px;">
                                       <input class="form-control" type="text"/>
                                    </div>
                                    <div style="width:100px;float:left;">
                                        <select class="form-control">
                                            <option>Percentile</option>
                                            <option>Dollars</option>
                                            <option>Units</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="row creategoal-question">
                        <div class="col-lg-7">
                            <label class="control-label question-title">Scoring</label>
                            <span class="help-block">Define the percentage weight that this goal should have. </span>
                             <div class="creategoal-answer">
                                
                                <div class="row" style="margin-top:10px;margin-left:0px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:18px;"> <label class="control-label">1 = </label></div>
                                    <div style="width:150px;float:left;margin-right:7px;">
                                       <input class="form-control" type="text"/>
                                    </div>
                                </div>
                                 <div class="row" style="margin-top:10px;margin-left:0px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:18px;"> <label class="control-label">2 = </label></div>
                                    <div style="width:150px;float:left;margin-right:7px;">
                                       <input class="form-control" type="text"/>
                                    </div>
                                </div>
                                 <div class="row" style="margin-top:10px;margin-left:0px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:18px;"> <label class="control-label">3 = </label></div>
                                    <div style="width:150px;float:left;margin-right:7px;">
                                       <input class="form-control" type="text"/>
                                    </div>
                                </div>
                                 <div class="row" style="margin-top:10px;margin-left:0px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:18px;"> <label class="control-label">4 = </label></div>
                                    <div style="width:150px;float:left;margin-right:7px;">
                                       <input class="form-control" type="text"/>
                                    </div>
                                </div>
                                 <div class="row" style="margin-top:10px;margin-left:0px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:18px;"> <label class="control-label">5 = </label></div>
                                    <div style="width:150px;float:left;margin-right:7px;">
                                       <input class="form-control" type="text"/>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                <div class="row creategoal-question">
                        <div class="col-lg-7">
                            <label class="control-label question-title">Resources</label>
                            <span class="help-block">Upload any resources that you would like to share about this goal.</span>
                             <div class="creategoal-answer">
                             <div class="input-group">
                                    <label class="input-group-btn">
                                        <span class="btn btn-default">
                                            Browse… <input type="file" style="display: none;" multiple="">
                                        </span>
                                    </label>
                                    <input type="text" class="form-control input-sm" readonly="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row creategoal-question">
                        <div class="col-lg-7">
                            <label class="control-label question-title">Assign</label>
                            <span class="help-block">Which employees should receive this goal?</span>
                             <div class="creategoal-answer">
                             <div class="checkbox ">
                                <label>
                                    <input type="checkbox" value="" >
                                    Your Direct Reports
                                </label>
                            </div>
                            <div class="checkbox ">
                                <label>
                                    <input type="checkbox" value="" >
                                    Custom Assignment
                                </label>
                            </div>
                            </div>
                        </div>

                        
                    </div>

                    <br>
                        <button class="btn btn-primary next" data-stepid="4">Save Goal</button>
                        <button class="btn btn-default  cancel" data-stepid="4">Cancel</button>
                    </div>

                    
            </section>



         </div>
      </div>
      
      <script src="/scripts/jquery.js"></script>
      <script src="/scripts/bootstrap.plugins.js"></script>
      <script src="/scripts/bootstrap-datepicker.js"></script>
      <!--<script src="/scripts/bootstrap-timepicker.js"></script>-->
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
                   location.href = "hs.goals.goals.manage.php?numOf=0";
               });
               $('.cancel').click(function() {
                   location.href = "hs.goals.packages.php?numOf=1";
               });

            });
        }(window, jQuery));

      </script>