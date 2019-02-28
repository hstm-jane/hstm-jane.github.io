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
        .slat-lowfi {
            border:1px solid #ececec !important;
            /*padding:20px;*/
            width:100%;
            
            display:table;
        }
        .goals-header {
            padding:0px 20px;
            width:100%;
            display:table;
        }
        .goals-header > div {
            font-weight:bold;
        }
         
        .goal-title {
            display:table-cell;
            width:60%;
            padding:10px;
        }
        .goal-startdate {
            width:10%;
            display:table-cell;
            padding:10px;
        }
       .goal-enddate {
            width:10%;
            display:table-cell;
            padding:10px;
        }
        .goal-status {
            width:10%;
            display:table-cell;
            padding:10px;
        }
        .goal-action {
            width:10%;
            display:table-cell;
            padding:10px;
            
        }
        .goal-action .btn {
           text-align:right;
        }
      </style>
   </head>
   <body>

       <?php 
       $numberOfPackages = (!empty($_GET['numOf']))?intval($_GET['numOf']):0;
       ?>
      
    
      <style>
      </style>
      <div class="">
         <div class="container">
            <section class="section section-main section-box">

                
               
               <h1>Goals Packages</h1>
            
           <?php  if ($numberOfPackages == 0){ ?>
               <section class="section">
                <div class="slat-lowfi slat">
                    <div class="slat-message">
                    <h3>You currently have no packages. </h3>
                    <a href="hs.goals.package.create.php">Create a New Goal Package</a>
                    </div>
                </div>
                </section>
           <?php } ?>
           <?php  if ($numberOfPackages == 1){ ?>
                <section class="section">
                    <div class="goals-header">
                        <div class="goal-title">
                            
                        </div>
                        <div class="goal-startdate">
                            Start Date
                        </div>
                        <div class="goal-enddate">
                            End Date
                        </div>
                        <div class="goal-status">
                            Status
                        </div>
                        <div class="goal-action">
                              <button class="btn btn-default" style="display:none;">Manage</button>
                        </div>
                    </div>
                    <div class="slat-lowfi slat">
                        <div class="goal-title">
                            <a href="#">2017 Performance Review Package</a>
                        </div>
                        <div class="goal-startdate">
                            Jan 1, 2017
                        </div>
                        <div class="goal-enddate">
                            Dec 31, 2017
                        </div>
                        <div class="goal-status">
                            Draft
                        </div>
                        <div class="goal-action">
                            <button class="btn btn-default">Manage</button>
                        </div>
                    </div>
                    <div> <a href="hs.goals.package.create.php"><i class="fa fa-plus"></i> Add New Goal Package</a></div>
                </section>
           <?php } ?>


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
         $(function(){
         });
      </script>