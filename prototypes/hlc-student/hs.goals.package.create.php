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
      </style>
   </head>
   <body>
      
    
      <style>
      </style>
      <div class="">
         <div class="container">
            <section class="section section-main section-box">
            
                <h1>Create Goal Package</h1>
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
                                        <p style="margin-top:20px;">
                                            Please answer the following questions to help us set up your goal package. <br>
                                            Alternatively you can go to the <a href="hs.goals.package.create.advanced.php">Advanced Settings</a> to manually enable and require fields. 
                                        </p>


                <div class="wizard-box">

                    <div class="step step1" data-stepid="1">
                        <p>Enter the dates that you want the package to be available.</p>
                            <div>
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
                            <div class="wizard-buttons">
                                <button class="btn btn-primary  next" data-stepid="1">Next</button>
                                <button class="btn btn-default draft">Save as Draft</button>
                                <button class="btn btn-default cancel">Cancel</button>
                            </div>
                    </div><!--step-->

                     <div class="step step2">
                        <p>Will all goals in this package be measurable?
                            <span class="help-block">
                                It is recommended that all goals be measurable.  If a goal is measurable, 
                                    the employee or administrator will enter in starting, target, and actual values.
                            </span>
                        </p>
                        
                            
                      <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                      <label class="radio-inline"><input type="radio" name="optradio">No</label>

                            <div class="wizard-buttons">
                                <button class="btn btn-primary next" data-stepid="2">Next</button>
                                 <button class="btn btn-default  prev" data-stepid="2">Previous</button>
                                <button class="btn btn-default draft">Save as Draft</button>
                                <button class="btn btn-default cancel">Cancel</button>
                            </div>
                    </div><!--step-->

                     <div class="step step3">
                        <p>Will all goals in this package have stretch goals?
                            <span class="help-block">
                             For example, a specific goal may have a target of 90%, and then enter a stretch goal of 95%
                             </span>
                        </p>
                            
                      <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                      <label class="radio-inline"><input type="radio" name="optradio">No</label>

                            <div class="wizard-buttons">
                                <button class="btn btn-primary next" data-stepid="3">Next</button>
                                 <button class="btn btn-default  prev" data-stepid="3">Previous</button>
                                <button class="btn btn-default draft">Save as Draft</button>
                                <button class="btn btn-default cancel">Cancel</button>
                            </div>
                    </div><!--step-->
                   
                    <div class="step step4">
                        <p>It appears that your organization uses our Performance
                        Center.  <br>Who should be allowed to link this package to 
                        employee assessments?
                        <span class="help-block">
                            Linking a package to an assessment will automatically import the goals within 
                the package to the selected assessment(s).
                            </span>
                        </p>
                            
                     <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                           Allow Administrators to Link
                        </label>
                        </div>
                        <div class="checkbox ">
                            <label>
                                <input type="checkbox" value="" >
                                 Allow Managers to Link
                            </label>
                        </div>
                        <div class="checkbox ">
                            <label>
                                <input type="checkbox" value="" >
                                 Allow Employees to Link
                            </label>
                        </div>

                            <div class="wizard-buttons">
                                <button class="btn btn-primary next" data-stepid="4">Next</button>
                                 <button class="btn btn-default  prev" data-stepid="4">Previous</button>
                                <button class="btn btn-default draft">Save as Draft</button>
                                <button class="btn btn-default cancel">Cancel</button>
                            </div>
                    </div><!--step-->

                    <div class="step step5">
                        <p>It appears that your organization uses our Performance
                        Center.  <br> Select an assessment to link this package to.
                        <span class="help-block">
                            Linking a package to an assessment will automatically import the goals within 
                            the package to the selected assessment(s).
                            </span>
                        </p>
                            
                        <p><a href="#">Select Assessment(s)</a><br><Br><a href="#">Skip for now</a></p>

                            <div class="wizard-buttons">
                                <button class="btn btn-primary next" data-stepid="5">Next</button>
                                 <button class="btn btn-default  prev" data-stepid="5">Previous</button>
                                <button class="btn btn-default draft">Save as Draft</button>
                                <button class="btn btn-default cancel">Cancel</button>
                            </div>
                    </div><!--step-->

                      <div class="step step6">
                        <p>Should managers and employees be allowed to upload resources and documents to goals?
                            <!--<span class="help-block">
                                It is recommended that all goals be measurable.  If a goal is measurable, 
                                    the employee or administrator will enter in starting, target, and actual values.
                            </span>-->
                        </p>
                        
                            
                      <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                      <label class="radio-inline"><input type="radio" name="optradio">No</label>

                            <div class="wizard-buttons">
                                <button class="btn btn-primary next" data-stepid="6">Next</button>
                                 <button class="btn btn-default  prev" data-stepid="6">Previous</button>
                                <button class="btn btn-default draft">Save as Draft</button>
                                <button class="btn btn-default cancel">Cancel</button>
                            </div>
                    </div><!--step-->


                     <div class="step step7">
                        <p>You’re done setting up the goals package!  Now you can start adding goals to your package. <br> Select an assessment to link this package to.
                        <!--<span class="help-block">
                            Linking a package to an assessment will automatically import the goals within 
                            the package to the selected assessment(s).
                            </span>-->
                        </p>
                            
                        <p><a href="#">Enter Goals Now</a><br><Br><a href="#">Skip for Now</a></p>

                            <div class="wizard-buttons">
                                <button class="btn btn-primary finish" data-stepid="7">Finish</button>
                                 <button class="btn btn-default  prev" data-stepid="7">Previous</button>
                                <button class="btn btn-default draft">Save as Draft</button>
                                <button class="btn btn-default cancel">Cancel</button>
                            </div>
                    </div><!--step-->

                </div><!--wizard-box-->

            </section>



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
            
            function goNext(stepid) {
                $('.step').hide();
                if(stepid == "1") {
                    $('.step2').show();
                }
                 if(stepid == "2") {
                    $('.step3').show();
                }
                 if(stepid == "3") {
                    $('.step4').show();
                }
                 if(stepid == "4") {
                    $('.step5').show();
                }
                  if(stepid == "5") {
                    $('.step6').show();
                }
                 if(stepid == "6") {
                    $('.step7').show();
                }
            }
             function goPrev(stepid) {
                $('.step').hide();
                if(stepid == "2") {
                    $('.step1').show();
                }
                 if(stepid == "3") {
                    $('.step2').show();
                }
                 if(stepid == "4") {
                    $('.step3').show();
                }
                 if(stepid == "5") {
                    $('.step4').show();
                }
                  if(stepid == "6") {
                    $('.step5').show();
                }
                 if(stepid == "7") {
                    $('.step6').show();
                }
            }
               
              
            $(window).on('load', function() {

                healthStream.datepicker();
               $('.step1').show();

               $('.next').click(function(){
                   goNext($(this).data('stepid'));
               });
                $('.prev').click(function(){
                   goPrev($(this).data('stepid'));
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