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
      /*editable table styles*/
        td:focus {
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;	
            outline: none;
            background-color:#e0f2f9;
             /*margin-top:-3px;*/
        }
        input.error {
            /*-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px red;
            -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px red;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px red;	
            outline: thin auto red;*/
              -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;	
            outline: none;
            background-color:#f2dddd;
        }
        input {
            /*-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #7ab5d3;
            -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #7ab5d3;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #7ab5d3;	
            outline: rgb(91, 157, 217) auto 5px;*/
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;	
            outline: none;
            background-color:#e0f2f9;
            outline-offset: 0px;
            border: none;
            /*height:35px !important;*/
            /*margin-top:-3px;*/
        }
        #mainTable thead th, #mainTable tbody td { 
        /*width: 25%;*/
        }
        #mainTable td + td, #mainTable th + th {
            /*text-align: right;*/
        }
        /*table.scrollable thead tr, table.scrollable tfoot tr  {
            position: relative;
            display: block
        }
        html>body table.scrollable tbody {
            display: block;
            height: 330px;
            overflow: auto;
            width: 100%
        }
        html>body table.scrollable td, html>body table.scrollable th {
            width: 200px
        }*/
      </style>
      <style>
        body {
            color: #777;
        }
        h3, h1 {
            margin-top:0px;
            padding-top:0px;
        }
        select option:invalid { color: red !important; }
        .sidebar-column {
            margin-top:0px !important;
            padding-top:0px !important;
            /*overflow-y: hidden;*/
            padding: 0 0px 0px 0px;
            margin: 0;
        }
        .content-column {
            margin-top:0px !important;
            padding-top:0px !important;
            /*overflow-y: hidden;*/
            padding: 0 0px 0px 0px;
            margin: 0;
            border-top: 1px solid #e2e2e2;
        }
        .content {
            padding:15px;
        }
        .header {
             padding:15px;
             padding-top:0px !important;
        }
        .sidebar {
            box-shadow: 0 1px 1px rgba(0,0,0,0.07 ), 0 0px 30px rgba(0,0,0,0.07);
            border-left: 1px solid #e2e2e2;
            border-top: 1px solid #e2e2e2;
            /*height:50vh;*/
            padding:15px;
            min-height:500px;
        }
        .section-box {
            padding-right:0px !important;
            padding-left:0px !important;
            padding-bottom:0px !important;
        }
        .slat-lowfi {
            border:1px solid #ececec !important;
        }
        .section {
            padding-left:20px;
        }
        .section {
            padding-left:20px;
        }
        .help-block {
            color:#ccc;
            font-size:12px;
        }
        #mainTable {
            margin-top:15px;
        }
        .goal-assigned-icon {
            display: inline-block;
            width: 30px;
            height: 30px;
            /*border: 1px solid #66c2e0;*/
            background: #09C;
            -webkit-box-shadow: inset 0 0 30px #007aa3;
            box-shadow: inset 0 0 30px #007aa3;
            border-radius: 50%;
        }
        .add-new-top-level-goal {
            display:block;
            margin-top:40px;
            margin-bottom:40px;
        }
        .add-goal-inline {
            color:#b5b5b5;
            margin:8px 40px; 
            font-style:italic;
        }
        .table {
            margin:0px;
        }
        td {
            border-top: none !important;
            border-bottom: 1px solid #e3e3e3;
        }
        td.edit-disabled:focus {
            -webkit-box-shadow:none;
            -moz-box-shadow:none;
            box-shadow:none;
            outline:none;
        }
        .table .table {
            background-color:#fff;
        }
        .table>tbody>tr>td {
            padding:0px;
            /*padding-top: 2px;*/
        }
        td.goal-name {
            padding-top: 10px !important;
            height:40px;
        }
        td.avatar-column {
            width:40px;
            padding-top:5px !important;
        }
        .creategoal-answer {
            font-size:13px;
        }
      </style>
   </head>
   <body>
      <style>
      </style>
      <div class="">
         <div class="container">
            <section class="section section-main section-box">
                <div class="header">
                    <h1>Manage Goals</h1>
                    <h3>2017 Performance Review Package</h3>
                </div>
                <div class="col-lg-7 content-column">
                    <div class="content">
                        <table id="mainTable" class="table ">
                            <!--<thead><tr><th>Name</th><th>Cost</th><th>Profit</th><th>Fun</th></tr></thead>-->
                            <tbody>
                                <tr>
                                    <td class="avatar-column"><div class="goal-assigned-icon" style="overflow:hidden;"><img src="/content/images/avatar.jpg" width="100%" height="100%"></div></td>
                                    <td class="goal-name">Organization Goal 1</td>
                                </tr>
                                <tr>
                                    <td class="edit-disabled"></td>
                                    <td class="edit-disabled ">
                                         <table id="tier1-goal-subtable" class="table ">
                                            <!--<thead><tr><th>Name</th><th>Cost</th><th>Profit</th><th>Fun</th></tr></thead>-->
                                            <tbody>
                                                <tr>
                                                    <td class="avatar-column"><div class="goal-assigned-icon" style="overflow:hidden;"><img src="/content/images/avatar.jpg" width="100%" height="100%"></div></td>
                                                    <td class="goal-name">Department Goal 1</td>
                                                </tr>
                                                 <tr>
                                                    <td class="edit-disabled"></td>
                                                    <td class="edit-disabled ">
                                                        <table id="tier2-goal-subtable" class="table ">
                                                            <!--<thead><tr><th>Name</th><th>Cost</th><th>Profit</th><th>Fun</th></tr></thead>-->
                                                            <tbody>
                                                                <tr>
                                                                    <td class="avatar-column edit-disabled"><div class="goal-assigned-icon" style="overflow:hidden;"><img src="/content/images/avatar.jpg" width="100%" height="100%"></div></td>
                                                                    <td class="goal-name"><span class="goal-name-value">Team Goal 1<span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="avatar-column edit-disabled"><div class="goal-assigned-icon" style="overflow:hidden;"><img src="/content/images/avatar.jpg" width="100%" height="100%"></div></td>
                                                                    <td class="goal-name">Team Goal 2</td>
                                                                </tr>       
                                                                <tr>
                                                                    <td class="avatar-column edit-disabled"><div class="goal-assigned-icon" style="overflow:hidden;"><img src="/content/images/avatar.jpg" width="100%" height="100%"></div></td>
                                                                    <td class="goal-name">Team Goal 2</td>
                                                                </tr>                         
                                                            </tbody>
                                                            <!--<tfoot><tr><th><strong>TOTAL</strong></th><th></th><th></th><th></th></tr></thead>-->
                                                        </table>
                                                        <div class="add-goal-inline edit-disabled">Add Team Goal</div>
                                                    </td>
                                                </tr>  
                                                  <tr>
                                                    <td class="avatar-column edit-disabled"><div class="goal-assigned-icon" style="overflow:hidden;"><img src="/content/images/avatar.jpg" width="100%" height="100%"></div></td>
                                                    <td class="goal-name">Department Goal 2</td>
                                                </tr>   
                                                <tr>
                                                    <td class="edit-disabled"></td>
                                                    <td class="edit-disabled">
                                                         <table id="tier2-goal-subtable" class="table ">
                                                            <!--<thead><tr><th>Name</th><th>Cost</th><th>Profit</th><th>Fun</th></tr></thead>-->
                                                            <tbody>
                                                                           
                                                            </tbody>
                                                            <!--<tfoot><tr><th><strong>TOTAL</strong></th><th></th><th></th><th></th></tr></thead>-->
                                                        </table>
                                                           <div class="add-goal-inline edit-disabled">Add Team Goal</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--<tfoot><tr><th><strong>TOTAL</strong></th><th></th><th></th><th></th></tr></thead>-->
                                        </table>
                                         <div class="add-goal-inline edit-disabled">Add Department Goal</div>
                                    </td>
                                </tr> 
                                <!--<tr>
                                    <td class="avatar-column"><div class="goal-assigned-icon" style="overflow:hidden;"><img src="/content/images/avatar.jpg" width="100%" height="100%"></div></td>
                                    <td class="goal-name">Organization Goal 2</td>
                                </tr>                         -->
                            </tbody>
                            <!--<tfoot><tr><th><strong>TOTAL</strong></th><th></th><th></th><th></th></tr></thead>-->
                        </table>
                        <div class="add-new-top-level-goal">
                            <a href="#">
                                <span class="fa-stack">
                                    <i class="fa fa-circle-o fa-stack-2x"></i>
                                    <i class="fa fa-plus fa-stack-1x"></i>
                                </span>
                                Add another organization goal
                            </a>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-5 sidebar-column">
                     <div class="sidebar">
                        <h3>Goal Details</h3>

                        <div class="form-group">
                            <label class="control-label question-title">Goal Title</label>
                            <!--<span class="help-block">What is your Goal?</span>-->
                            <div class="creategoal-answer" style="margin-left:15px;">
                                <input type="text" id="GoalNameTextBox" class="form-control input-sm"/>
                            </div>
                        </div>  
                         <div class="form-group">
                            <label class="control-label question-title">Description</label>
                            <!--<span class="help-block">What is your Goal?</span>-->
                            <div class="creategoal-answer" style="margin-left:15px;">
                                <input type="text" class="form-control input-sm"/>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label class="control-label question-title">Type</label>
                            <!--<span class="help-block">What type of goal is this?</span>-->
                             <div class="creategoal-answer" style="margin-left:15px;">
                                <select class="form-control input-sm" placeholder="Choose"> 
                                    <!--<option disabled selected>Select Type</option>-->
                                     <option value="" disabled selected hidden>Please Choose...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>  

                    <div style="margin-top:25px;" class="show-advanced"><a href="#" class="pull-right">Show Advanced Settings</a></div>
                    <div style="margin-top:25px;" class="hide-advanced collapse"><a href="#" class="pull-right ">Hide Advanced Settings</a></div>

                     <div class="clearfix"></div>
                    <div class="advanced-settings collapse">
                        <!--<hr>-->
                         
                    <h4 style="margin-bottom:20px;">Advanced Settings</h4>
                        
                         <div class="form-group">
                            <label class="control-label question-title">Dates</label>
                            <!--<span class="help-block">What dates will this goal be active?</span>-->
                             <div class="creategoal-answer" style="margin-left:15px;">
                                <div class="row" style="margin-top:10px;">
                                    <div class="col-lg-4">Start Date</div>
                                    <div class="col-lg-8">
                                        <div class="input-group bootstrap-datepicker">
                                            <input type="text" class="form-control datepicker input-sm" id="event-end-date" tabindex="1">
                                            <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:10px;">
                                    <div class="col-lg-4">End Date</div>
                                    <div class="col-lg-8 ">
                                        <div class="input-group bootstrap-datepicker">
                                            <input type="text" class="form-control datepicker input-sm" id="event-end-date" tabindex="1">
                                            <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 

<div class="row">
    <div class="col-lg-6">
                        <div class="form-group">
                              <label class="control-label question-title">Measurements</label>
                            <!--<span class="help-block">What dates will this goal be active?</span>-->
                             <div class="creategoal-answer" style="margin-left:25px;">
                                <div class="row" style="margin-top:10px;">
                                    <div style="width:60px;float:left;margin-right:7px;">Starting</div>
                                     <div style="width:40px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                    <div style="width:90px;float:left;">
                                        <select class="form-control input-sm">
                                            <option>Percentile</option>
                                            <option>Dollars</option>
                                            <option>Units</option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="row" style="margin-top:10px;">
                                    <div style="width:60px;float:left;margin-right:7px;">Target</div>
                                     <div style="width:40px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                    <div style="width:90px;float:left;">
                                        <select class="form-control input-sm">
                                            <option>Percentile</option>
                                            <option>Dollars</option>
                                            <option>Units</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:10px;">
                                    <div style="width:60px;float:left;margin-right:7px;">Stretch</div>
                                    <div style="width:40px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                    <div style="width:90px;float:left;">
                                        <select class="form-control input-sm">
                                            <option>Percentile</option>
                                            <option>Dollars</option>
                                            <option>Units</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>

                  
                        <div class="col-lg-5" style="border-left:1px #e9e9e9 solid;margin-left:20px;">

                                <div class="form-group">
                         <label class="control-label question-title">Scoring</label>
                            <!--<span class="help-block">Define the percentage weight that this goal should have. </span>-->
                             <div class="creategoal-answer">
                                
                                <div class="row" style="margin-top:10px;margin-left:15px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:14px;">1 = </div>
                                    <div style="width:75px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                </div>
                                 <div class="row" style="margin-top:10px;margin-left:15px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:14px;">2 = </div>
                                    <div style="width:75px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                </div>
                                 <div class="row" style="margin-top:10px;margin-left:15px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:14px;">3 = </div>
                                    <div style="width:75px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                </div>
                                 <div class="row" style="margin-top:10px;margin-left:15px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:14px;">4 = </div>
                                    <div style="width:75px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                </div>
                                 <div class="row" style="margin-top:10px;margin-left:15px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:14px;">5 = </div>
                                    <div style="width:75px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                </div>

                        </div>
                            </div>
                     </div>
                     </div>

                    <div class="form-group">

                        <label class="control-label question-title">Resources</label>
                            <span class="help-block">Upload any resources that you would like to share about this goal.</span>
                             <div class="creategoal-answer" style="margin-left:20px;">
                             <div class="input-group">
                                    <label class="input-group-btn">
                                        <span class="btn btn-default btn-sm">
                                            Browse… <input type="file" style="display: none;" multiple="">
                                        </span>
                                    </label>
                                    <input type="text" class="form-control input-sm" readonly="">
                                </div>
                            </div>
                        </div>
                



                        <!--end of column-->
                    </div>
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
      <script src="/scripts/editabletable.js"></script>
      <script>
        $(function() {

            $('.show-advanced').click(function() {
                $('.advanced-settings').show();
                $('.show-advanced').hide();
                $('.hide-advanced').show();
            });

            $('.hide-advanced').click(function() {
                $('.advanced-settings').hide();
                $('.hide-advanced').hide();
                $('.show-advanced').show();
            });    


            $('#mainTable').editableTableWidget().editAddGoals();
            $('.add-goal-inline').click(function(){
                var avatar = '<img src="/content/images/avatar.jpg" width="100%" height="100%"/>';
                var markup = '  <tr>' +
                                    '<td class="avatar-column"><div class="goal-assigned-icon" style="overflow:hidden;">' + avatar + '</div></td>' +
                                    '<td class="goal-name"></td>' + 
                                '</tr>  ';
                $(this).prev("table").find('tbody').first().append(markup);
                var newEditor = $(this).prev("table").find('td').last();
                console.log(newEditor);
                newEditor.focus();
                   $('#mainTable').editableTableWidget().editAddGoals();
            });
        });
        $.fn.editAddGoals = function () {
        'use strict';
        var element = $(this),
            footer = element.find('tfoot tr'),
            dataRows = element.find('tbody tr');
        element.find('td').on('validate', function (evt, value) {
            var cell = $(this),
                column = cell.index();
            if (column === 0) {
                return !!value && value.trim().length > 0;
            } else {
                return value.trim().length > 0;
            }
        });
        // initialTotal();
        return this;

        $('.goal-name-value').click(function() {
            console.log('hey');
            console.log($(this));
            $('#GoalNameTextBox').val($(this).html());
        })
       
    
    };
      </script>