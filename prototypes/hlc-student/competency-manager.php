<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Competency Management | HealthStream</title>
    <link rel="stylesheet" type="text/css" href="hstream-validate-assets/css/healthstream.bootstrap.css?cache=1508080580">
    <link rel="stylesheet" type="text/css" href="hstream-validate-assets/css/healthstream.app.css?cache=1508080580">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="hstream-validate-assets/css/panels.css">
    <link rel="stylesheet" type="text/css" href="hstream-validate-assets/css/opentip.css">
    <link rel="stylesheet" type="text/css" href="hstream-validate-assets/css/hstream-validate.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" />
    <style>
        .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
       background-color: #5bc0de;
       color:#fff;
       border:none;
       padding:2px 5px;
       font-size:12px;
       font-weight:600;
   }
   .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
       color:#fff;
   }
   .label.label-info {
       font-weight:600 !important;
       font-size:12px;
   }
   .comp-name {
       font-weight:600 !important;
   }
   th.comp-status {
       text-align:left;
   }
   td {
       
   }
   .component  .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice, 
   .new-component  .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
       color: #555;
       background: #fff;
       border: 1px solid #ccc;
       border-radius: 4px;
       cursor: default;
       float: left;
       margin: 5px 0 0 6px;
       padding: 0 6px;
   }
   .component .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove, 
   .new-component .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
       color:#999;
   }
   </style>
</head>

<body>
    <div class="site-header hstream-validate-header">
        <div class="container"><a href="#" class="trigger-open trigger-open-header"><i class="fa fa-bars"></i><span>Menu</span></a>
            <div class="branding" style="">
                <div class="logo"><a href="/"><img src="./content/images/logo-healthstream-large.png" alt="HealthStream" class="logo-large" style="max-width:224px;height:50px;"><img src="hstream-validate-assets/images/hstream-validate-beta.png" alt="hStream Validate | Beta" class="logo-small"></a></div>
            </div>
        </div>
    </div>
    <div class="layout hstream-validate">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="validate-details-container" style="position:relative;">
                        <div style="min-height:50px;background-color:#f9f9f9; border-bottom: 1px solid #c3c3c3;margin-top:-15px;margin-left:-15px;margin-right:-60px;width:1110px;padding:7px 15px;">
                            <div style="display:table;">
                                <div style="display:table-cell;font-weight:600;padding-right:10px;vertical-align:middle;">Tags:</div>
                                <div style="display:table-cell; width:300px;vertical-align:middle;">
                                    <select class="form-control select2" id="select2-filter-5" multiple="multiple">
                                        <optgroup label="Heading">
                                            <option>Case Manager Care</option>
                                            <option>Critical Care</option>
                                            <option>Emergency Medicine</option>
                                            <option selected="selected">Registered Nurse</option>

                                        </optgroup>
                                        <optgroup label="Heading 2">
                                            <option>Airway Management</option>
                                            <option>Blood Transfusion</option>
                                            <option>Care Coordination</option>
                                            <option>Cardiac Rhythms</option>
                                            <option>Documentation and Reporting</option>
                                            <option>Diabetes Care</option>
                                            <option>Discharge Planning</option>
                                            <option>Enteral/Parenteral Nutritionz</option>
                                            <option>Research and Evidence</option>
                                            <option>Telemetry</option>
                                            <option>Trauma Intensive Care</option>
                                        </optgroup>

                                    </select>
                                </div>
                                <div style="display:table-cell;vertical-align:middle;font-weight:600;padding-right:10px;padding-left:20px;">Status:</div>
                                <div style="display:table-cell; vertical-align:middle;width:200px;">
                                    <select name="account" class="form-control m-b">
                                        <option selected>All</option>
                                        <option>Draft</option>

                                        <option>Published</option>
                                    </select>
                                </div>
                                <div style="display:table-cell;vertical-align:middle;font-weight:600;padding-right:10px;padding-left:20px;">Search:</div>
                                <div style="display:table-cell; vertical-align:middle;width:300px;">
                                    <div id="datetimepicker2" class="input-group date">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon">
                                            <span class="fa fa-search"></span>
                                        </span>
                                    </div>
                                </div>
                                <div style="display:table-cell;font-weight:600;padding-right:10px;padding-left:20px;"><button class="btn btn-default">Clear</button></div>
                            </div>
                        </div>
                        <h2 style="margin-top:15px;">Competency Manager
                        <a href="#modal-comp-add" class="btn btn-success mb pull-right" style="margin-bottom:15px;" data-toggle="modal">Add Competency</a>
                        
                        </h2>
                        <table class="table validate-table mt">
                            <thead>
                                <tr>
                                    <th class="comp-name">Competency Name</th>
                                    <th class="comp-tags">Tags</th>
                                    <th class="comp-status">Status</th>

                                    <th class="comp-date">Last Updated</th>

                                    <th class="comp-actions"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="validate-result-row odd">
                                    <td class="comp-name highlight-text">Airway Management</td>
                                    <td class="comp-tags">
                                        <div class=" label label-info mr-sm">Registered Nurse</div>
                                        <div class=" label label-info mr-sm">Critical Care</div>
                                        <div class=" label label-info mr-sm">Airway Management</div>
                                    </td>
                                    <td class="comp-status text-muted">Draft</td>
                                    <td class="comp-date">5/10/2018<br>9:00 AM</td>
                                    <td class="comp-actions"><a class="btn btn-default btn-sm expand-detail" href="#">Show Detail <i class="fa fa-chevron-down"></i></a></td>
                                </tr>
                                <tr class="validate-detail-row hidden">
                                    <td colspan="6">
                                        <div class="validate-detail-table-wrapper" style="display:none;">
                                            <table class="validate-detail-table">
                                                <tr>
                                                    <td class="detail-label">Description:</td>
                                                    <td class="detail-value "><input type="text" class="form-control" value="Ensures adequate airway maintenance following intracranial surgery" /></td>

                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Tags:</td>
                                                    <td class="detail-value ">
                                                        <select class="form-control select2" id="select2-edit" multiple="multiple" style="width:100%">
                                                            <optgroup label="Heading">
                                                                <option>Case Manager Care</option>
                                                                <option selected="selected">Critical Care</option>
                                                                <option>Emergency Medicine</option>
                                                                <option selected="selected">Registered Nurse</option>

                                                            </optgroup>
                                                            <optgroup label="Heading 2">
                                                                <option selected="selected">Airway Management</option>
                                                                <option>Blood Transfusion</option>
                                                                <option>Care Coordination</option>
                                                                <option>Cardiac Rhythms</option>
                                                                <option>Documentation and Reporting</option>
                                                                <option>Diabetes Care</option>
                                                                <option>Discharge Planning</option>
                                                                <option>Enteral/Parenteral Nutritionz</option>
                                                                <option>Research and Evidence</option>
                                                                <option>Telemetry</option>
                                                                <option>Trauma Intensive Care</option>
                                                            </optgroup>

                                                        </select>
                                                    </td>

                                                </tr>
                                                <tr class="components">
                                                    <td class="detail-label">Components:</td>
                                                    <td class="detail-value">
                                                        <div class="component">
                                                            <span style="font-weight:600;">Component 1</span>
                                                            <span class="text-muted  pl"><i class="fa fa-times"></i></span><br>
                                                            <table style="width:100%;border:none;margin-left:15px;">
                                                                <tr>
                                                                    <td style="width:150px;vertical-align:middle !important;">Component Type: </td>
                                                                    <td>
                                                                        <select class="form-control input-sm col-lg-4 col-md-6 col-sm-12">
                                                                            <option selected="selected">Knowledge</option>
                                                                            <option>Skills</option>
                                                                            <option>Judgment</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:150px;vertical-align:middle !important;">Method of Validation: </td>
                                                                    <td>
                                                                        <select class="form-control select2" id="select2-comp-mov-1" multiple="multiple" style="width:100%">
                                                                            <option>Checklist</option>
                                                                            <option>Judgment Assessment</option>
                                                                            <option selected="selected">Knowledge Assessment</option>
                                                                            <option>Skills Assessment</option>

                                                                            <option select="selected">Skills Self-Assessment</option>

                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:150px;vertical-align:middle !important;">Method of Remediation: </td>
                                                                    <td>
                                                                        <select class="form-control select2" id="select2-comp-mor-1" multiple="multiple" style="width:100%">
                                                                            <option>Checklist</option>

                                                                            <option selected="selected">Course</option>
                                                                            <option>Preceptor Live, Simulation</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="component">
                                                            <span style="font-weight:600;">Component 2</span>
                                                            <span class="text-muted  pl"><i class="fa fa-times"></i></span><br>
                                                            <table style="width:100%;border:none;margin-left:15px;">
                                                                <tr>
                                                                    <td style="width:150px;vertical-align:middle !important;">Component Type: </td>
                                                                    <td>
                                                                        <select class="form-control input-sm col-lg-4 col-md-6 col-sm-12">
                                                                            <option>Knowledge</option>
                                                                            <option selected="selected">Skills</option>
                                                                            <option>Judgment</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:150px;vertical-align:middle !important;">Method of Validation: </td>
                                                                    <td>
                                                                        <select class="form-control select2" id="select2-comp-mov-2" multiple="multiple" style="width:100%">
                                                                            <option>Checklist</option>
                                                                            <option>Judgment Assessment</option>
                                                                            <option>Knowledge Assessment</option>
                                                                            <option>Skills Assessment</option>
                                                                            <option selected="selected">Skills Self-Assessment</option>

                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:150px;vertical-align:middle !important;">Method of Remediation: </td>
                                                                    <td>
                                                                        <select class="form-control select2" id="select2-comp-mor-2" multiple="multiple" style="width:100%">
                                                                            <option selected="selected">Checklist</option>

                                                                            <option>Course</option>
                                                                            <option>Preceptor Live, Simulation</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="component">
                                                            <span style="font-weight:600;">Component 3</span>
                                                            <a href="#" class="comp-remove"><span class="text-muted  pl"><i class="fa fa-times"></i></span></a><br>
                                                            <table style="width:100%;border:none;margin-left:15px;">
                                                                <tr>
                                                                    <td style="width:150px;vertical-align:middle !important;">Component Type: </td>
                                                                    <td>
                                                                        <select class="form-control input-sm col-lg-4 col-md-6 col-sm-12">
                                                                            <option>Knowledge</option>
                                                                            <option>Skills</option>
                                                                            <option selected="selected">Judgment</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:150px;vertical-align:middle !important;">Method of Validation: </td>
                                                                    <td>
                                                                        <select class="form-control select2" id="select2-comp-mov-3" multiple="multiple" style="width:100%">
                                                                            <option>Checklist</option>
                                                                            <option selected="selected">Judgment Assessment</option>
                                                                            <option>Knowledge Assessment</option>
                                                                            <option>Skills Assessment</option>

                                                                            <option select="selected">Skills Self-Assessment</option>

                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:150px;vertical-align:middle !important;">Method of Remediation: </td>
                                                                    <td>
                                                                        <select class="form-control select2" id="select2-comp-mor-3" multiple="multiple" style="width:100%">
                                                                            <option>Checklist</option>
                                                                            <option>Course</option>
                                                                            <option selected="selected">Preceptor Live, Simulation</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="new-component collapse">
                                                            <span style="font-weight:600;">Component 4</span>
                                                            <span class="text-muted  pl"><i class="fa fa-times"></i></span><br>
                                                            <table style="width:100%;border:none;margin-left:15px;">
                                                                <tr>
                                                                    <td style="width:150px;vertical-align:middle !important;">Component Type: </td>
                                                                    <td>
                                                                        <select class="form-control input-sm col-lg-4 col-md-6 col-sm-12">
                                                                            <option>Knowledge</option>
                                                                            <option>Skills</option>
                                                                            <option>Judgment</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:150px;vertical-align:middle !important;">Method of Validation: </td>
                                                                    <td>
                                                                        <select class="form-control select2" id="select2-comp-mov-new" multiple="multiple" style="width:100%">
                                                                            <option>Checklist</option>
                                                                            <option>Judgment Assessment</option>
                                                                            <option>Knowledge Assessment</option>
                                                                            <option>Skills Assessment</option>

                                                                            <option>Skills Self-Assessment</option>

                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:150px;vertical-align:middle !important;">Method of Remediation: </td>
                                                                    <td>
                                                                        <select class="form-control select2" id="select2-comp-mor-new" multiple="multiple" style="width:100%">
                                                                            <option>Checklist</option>
                                                                            <option>Course</option>
                                                                            <option>Preceptor Live, Simulation</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <a href="#" class="add-component" style="font-weight:600;"><i class="fa fa-plus"></i> Add Component</a>

                                                    </td>


                                                </tr>

                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="validate-result-row even">
                                    <td class="comp-name">Arrhythmia Interpretation</td>
                                    <td class="comp-tags">
                                        <div class=" label label-info mr-sm">Registered Nurse</div>
                                        <div class=" label label-info mr-sm">Critical Care</div>
                                        <div class=" label label-info mr-sm">Cardiac Rhythms</div>
                                    </td>
                                    <td class="comp-status text-success">Published</td>
                                    <td class="comp-date">5/10/2018<br>9:00 AM</td>
                                    <td class="comp-actions"><a class="btn btn-default btn-sm expand-detail" href="#">Show Detail <i class="fa fa-chevron-down"></i></a></td>
                                </tr>
                               <tr class="validate-detail-row hidden">
                                   <td colspan="6">
                                       <div class="validate-detail-table-wrapper" style="display:none;">
                                           <table class="validate-detail-table">
                                               <tr>
                                                   <td class="detail-label">Description:</td>
                                                   <td class="detail-value "><input type="text" class="form-control" value="Ensures adequate airway maintenance following intracranial surgery" /></td>

                                               </tr>
                                               <tr>
                                                   <td class="detail-label">Tags:</td>
                                                   <td class="detail-value ">
                                                       <select class="form-control select2" id="select2-edit111" multiple="multiple" style="width:100%">
                                                           <optgroup label="Heading">
                                                               <option>Case Manager Care</option>
                                                               <option selected="selected">Critical Care</option>
                                                               <option>Emergency Medicine</option>
                                                               <option selected="selected">Registered Nurse</option>

                                                           </optgroup>
                                                           <optgroup label="Heading 2">
                                                               <option>Airway Management</option>
                                                               <option>Blood Transfusion</option>
                                                               <option>Care Coordination</option>
                                                               <option selected="selected">Cardiac Rhythms</option>
                                                               <option>Documentation and Reporting</option>
                                                               <option>Diabetes Care</option>
                                                               <option>Discharge Planning</option>
                                                               <option>Enteral/Parenteral Nutritionz</option>
                                                               <option>Research and Evidence</option>
                                                               <option>Telemetry</option>
                                                               <option>Trauma Intensive Care</option>
                                                           </optgroup>

                                                       </select>
                                                   </td>

                                               </tr>
                                               <tr class="components">
                                                   <td class="detail-label">Components:</td>
                                                   <td class="detail-value">
                                                       <div class="component">
                                                           <span style="font-weight:600;">Component 1</span>
                                                           <span class="text-muted  pl"><i class="fa fa-times"></i></span><br>
                                                           <table style="width:100%;border:none;margin-left:15px;">
                                                               <tr>
                                                                   <td style="width:150px;vertical-align:middle !important;">Component Type: </td>
                                                                   <td>
                                                                       <select class="form-control input-sm col-lg-4 col-md-6 col-sm-12">
                                                                           <option selected="selected">Knowledge</option>
                                                                           <option>Skills</option>
                                                                           <option>Judgment</option>
                                                                       </select>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                   <td style="width:150px;vertical-align:middle !important;">Method of Validation: </td>
                                                                   <td>
                                                                       <select class="form-control select2" id="select2-comp-mov-11" multiple="multiple" style="width:100%">
                                                                           <option>Checklist</option>
                                                                           <option>Judgment Assessment</option>
                                                                           <option selected="selected">Knowledge Assessment</option>
                                                                           <option>Skills Assessment</option>

                                                                           <option select="selected">Skills Self-Assessment</option>

                                                                       </select>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                   <td style="width:150px;vertical-align:middle !important;">Method of Remediation: </td>
                                                                   <td>
                                                                       <select class="form-control select2" id="select2-comp-mor-11" multiple="multiple" style="width:100%">
                                                                           <option>Checklist</option>

                                                                           <option selected="selected">Course</option>
                                                                           <option>Preceptor Live, Simulation</option>
                                                                       </select>
                                                                   </td>
                                                               </tr>
                                                           </table>
                                                       </div>
                                                    
                                                       <div class="new-component collapse">
                                                           <span style="font-weight:600;">Component 2</span>
                                                           <span class="text-muted  pl"><i class="fa fa-times"></i></span><br>
                                                           <table style="width:100%;border:none;margin-left:15px;">
                                                               <tr>
                                                                   <td style="width:150px;vertical-align:middle !important;">Component Type: </td>
                                                                   <td>
                                                                       <select class="form-control input-sm col-lg-4 col-md-6 col-sm-12">
                                                                           <option>Knowledge</option>
                                                                           <option>Skills</option>
                                                                           <option>Judgment</option>
                                                                       </select>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                   <td style="width:150px;vertical-align:middle !important;">Method of Validation: </td>
                                                                   <td>
                                                                       <select class="form-control select2" id="select2-comp-mov-new11" multiple="multiple" style="width:100%">
                                                                           <option>Checklist</option>
                                                                           <option>Judgment Assessment</option>
                                                                           <option>Knowledge Assessment</option>
                                                                           <option>Skills Assessment</option>

                                                                           <option>Skills Self-Assessment</option>

                                                                       </select>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                   <td style="width:150px;vertical-align:middle !important;">Method of Remediation: </td>
                                                                   <td>
                                                                       <select class="form-control select2" id="select2-comp-mor-new11" multiple="multiple" style="width:100%">
                                                                           <option>Checklist</option>
                                                                           <option>Course</option>
                                                                           <option>Preceptor Live, Simulation</option>
                                                                       </select>
                                                                   </td>
                                                               </tr>
                                                           </table>
                                                       </div>
                                                       <a href="#" class="add-component" style="font-weight:600;"><i class="fa fa-plus"></i> Add Component</a>

                                                   </td>


                                               </tr>

                                           </table>
                                       </div>
                                   </td>
                               </tr>
                                <tr class="validate-result-row odd">
                                    <td class="comp-name">Communication</td>
                                    <td class="comp-tags">
                                        <div class=" label label-info mr-sm">Communication</div>
                                    </td>
                                    <td class="comp-status text-success">Published</td>
                                    <td class="comp-date">5/10/2018<br>9:00 AM</td>
                                    <td class="comp-actions"><a class="btn btn-default btn-sm expand-detail" href="#">Show Detail <i class="fa fa-chevron-down"></i></a></td>
                                </tr>
                                <tr class="validate-detail-row hidden">
                                    <td colspan="6">
                                        <div class="validate-detail-table-wrapper" style="display:none;">
                                            <table class="validate-detail-table">
                                                <tr>
                                                    <td class="detail-label">Description:</td>
                                                    <td class="detail-value "><input type="text" class="form-control" value="Ensures adequate airway maintenance following intracranial surgery" /></td>

                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Tags:</td>
                                                    <td class="detail-value ">
                                                        <select class="form-control select2" id="select2-edit11" multiple="multiple" style="width:100%">
                                                            <optgroup label="Heading">
                                                                <option>Case Manager Care</option>
                                                                <option>Critical Care</option>
                                                                <option>Emergency Medicine</option>
                                                                <option>Registered Nurse</option>

                                                            </optgroup>
                                                            <optgroup label="Heading 2">
                                                                <option>Airway Management</option>
                                                                <option>Blood Transfusion</option>
                                                                <option>Care Coordination</option>
                                                                <option>Cardiac Rhythms</option>
                                                                <option  selected="selected"> Communication</option>
                                                                <option>Documentation and Reporting</option>
                                                                <option>Diabetes Care</option>
                                                                <option>Discharge Planning</option>
                                                                <option>Enteral/Parenteral Nutritionz</option>
                                                                <option>Research and Evidence</option>
                                                                <option>Telemetry</option>
                                                                <option>Trauma Intensive Care</option>
                                                            </optgroup>

                                                        </select>
                                                    </td>

                                                </tr>
                                                <tr class="components">
                                                    <td class="detail-label">Components:</td>
                                                    <td class="detail-value">
                                                        <div class="component">
                                                            <span style="font-weight:600;">Component 1</span>
                                                            <span class="text-muted  pl"><i class="fa fa-times"></i></span><br>
                                                            <table style="width:100%;border:none;margin-left:15px;">
                                                                <tr>
                                                                    <td style="width:150px;vertical-align:middle !important;">Component Type: </td>
                                                                    <td>
                                                                        <select class="form-control input-sm col-lg-4 col-md-6 col-sm-12">
                                                                            <option selected="selected">Knowledge</option>
                                                                            <option>Skills</option>
                                                                            <option>Judgment</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:150px;vertical-align:middle !important;">Method of Validation: </td>
                                                                    <td>
                                                                        <select class="form-control select2" id="select2-comp-mov-111" multiple="multiple" style="width:100%">
                                                                            <option>Checklist</option>
                                                                            <option>Judgment Assessment</option>
                                                                            <option selected="selected">Knowledge Assessment</option>
                                                                            <option>Skills Assessment</option>

                                                                            <option select="selected">Skills Self-Assessment</option>

                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:150px;vertical-align:middle !important;">Method of Remediation: </td>
                                                                    <td>
                                                                        <select class="form-control select2" id="select2-comp-mor-111" multiple="multiple" style="width:100%">
                                                                            <option>Checklist</option>

                                                                            <option selected="selected">Course</option>
                                                                            <option>Preceptor Live, Simulation</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>

                                                        <div class="new-component collapse">
                                                            <span style="font-weight:600;">Component 2</span>
                                                            <span class="text-muted  pl"><i class="fa fa-times"></i></span><br>
                                                            <table style="width:100%;border:none;margin-left:15px;">
                                                                <tr>
                                                                    <td style="width:150px;vertical-align:middle !important;">Component Type: </td>
                                                                    <td>
                                                                        <select class="form-control input-sm col-lg-4 col-md-6 col-sm-12">
                                                                            <option>Knowledge</option>
                                                                            <option>Skills</option>
                                                                            <option>Judgment</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:150px;vertical-align:middle !important;">Method of Validation: </td>
                                                                    <td>
                                                                        <select class="form-control select2" id="select2-comp-mov-new111" multiple="multiple" style="width:100%">
                                                                            <option>Checklist</option>
                                                                            <option>Judgment Assessment</option>
                                                                            <option>Knowledge Assessment</option>
                                                                            <option>Skills Assessment</option>

                                                                            <option>Skills Self-Assessment</option>

                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:150px;vertical-align:middle !important;">Method of Remediation: </td>
                                                                    <td>
                                                                        <select class="form-control select2" id="select2-comp-mor-new111" multiple="multiple" style="width:100%">
                                                                            <option>Checklist</option>
                                                                            <option>Course</option>
                                                                            <option>Preceptor Live, Simulation</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <a href="#" class="add-component" style="font-weight:600;"><i class="fa fa-plus"></i> Add Component</a>

                                                    </td>


                                                </tr>

                                            </table>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="site-footer ">
        <div class="focus focus-promo">
            <div class="container"></div>
        </div>
        <div class="container">
            <div class="legal">
                <div class="divider"></div>
                <div class="logo"><img src="content/images/logo-healthstream-small.png" alt="HealthStream"></div>
                <div class="copyright">Copyright &copy;

                    2017 HealthStream,
                    Inc. All Rights Reserved.</div>
            </div>
        </div>
    </div>
   

    <div id="modal-comp-add" class="modal fade" tabindex="-1" aria-hidden="false" >
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <h4 class="modal-title">Add Competency</h4>
                    </div>
                    <div class="modal-body">
                        
                        <div class="form-group">
                            <label class="control-label">Competency Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mb-sm">
                                 <label class="control-label">Tags</label>
                                        <select class="form-control select2" id="select2-edit2" multiple="multiple" style="width:100%">
                                            <optgroup label="Heading">
                                                <option>Case Manager Care</option>
                                                <option>Critical Care</option>
                                                <option>Emergency Medicine</option>
                                                <option>Registered Nurse</option>

                                            </optgroup>
                                            <optgroup label="Heading 2">
                                                <option>Airway Management</option>
                                                <option>Blood Transfusion</option>
                                                <option>Care Coordination</option>
                                                <option>Cardiac Rhythms</option>
                                                <option>Documentation and Reporting</option>
                                                <option>Diabetes Care</option>
                                                <option>Discharge Planning</option>
                                                <option>Enteral/Parenteral Nutritionz</option>
                                                <option>Research and Evidence</option>
                                                <option>Telemetry</option>
                                                <option>Trauma Intensive Care</option>
                                            </optgroup>

                                        </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group mt-sm" style="margin-top:10px;">
                                    <label class="control-label">Status</label>
                                    <select class="form-control">
                                        <option>Draft</option>
                                        <option>Published</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-12">
                            <div class="new-component collapse">
                                <span style="font-weight:600;">Component</span>
                                <span class="text-muted  pl"><i class="fa fa-times"></i></span><br>
                                <table style="width:100%;border:none;margin-left:15px;">
                                    <tr>
                                        <td style="width:150px;vertical-align:middle !important; font-size:12px;">Component Type: </td>
                                        <td style="padding:5px;">
                                            <select class="form-control input-sm col-lg-4 col-md-6 col-sm-12">
                                                <option>Knowledge</option>
                                                <option>Skills</option>
                                                <option>Judgment</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:150px;vertical-align:middle !important; font-size:12px; ">Method of Validation: </td>
                                        <td style="padding:5px;">
                                            <select class="form-control select2" id="select2-comp-mov-new-modal" multiple="multiple" style="width:100%">
                                                <option>Checklist</option>
                                                <option>Judgment Assessment</option>
                                                <option>Knowledge Assessment</option>
                                                <option>Skills Assessment</option>

                                                <option>Skills Self-Assessment</option>

                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:150px;vertical-align:middle !important; font-size:12px;">Method of Remediation: </td>
                                        <td style="padding:5px;">
                                            <select class="form-control select2" id="select2-comp-mor-new-modal" multiple="multiple" style="width:100%">
                                                <option>Checklist</option>
                                                <option>Course</option>
                                                <option>Preceptor Live, Simulation</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <a href="#" class="add-component" style="font-weight:600;"><i class="fa fa-plus"></i> Add Component</a>

                        </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" data-dismiss="modal">Save</button>
                        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
               
                
                
               
            </div>
        </div>
    </div>
    <script src="hstream-validate-assets/js/jquery.js"></script>
    <script src="hstream-validate-assets/js/bootstrap.plugins.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        // Select2
        // -----------------------------------

        (function(window, document, $, undefined) {

            $(function() {

                if (!$.fn.select2) return;

                // Select 2


                $('#select2-filter').select2({
                    theme: 'bootstrap'
                });
                $('#select2-edit').select2({
                    theme: 'bootstrap'
                });
                $('.select2').select2({
                    theme: 'bootstrap'
                });


            });

        })(window, document, window.jQuery);


        $(function() {

                $('.comp-remove').click(function(e) {
                    e.preventDefault();
                    $(this).parents('.component').hide();
                });
                $('.add-component').click(function(e) {
                    e.preventDefault();
                    $('.new-component').show();
                });

                $('.expand-detail').click(function(e) {
                        e.preventDefault();
                        var btn = $(this);

                        if ($(btn).parents('tr').next('.validate-detail-row').hasClass('hidden')) {
                            $(btn).html('Hide Detail  <i class="fa fa-chevron-up"></i>');
                            $(btn).parents('tr').next('.validate-detail-row').removeClass('hidden');
                            $(btn).parents('tr').next('.validate-detail-row').find('.validate-detail-table-wrapper').slideToggle();
                        } else {
                            $(btn).html('Show Detail  <i class="fa fa-chevron-down"></i>');

                            $(btn).parents('tr').next('.validate-detail-row').find('.validate-detail-table-wrapper').slideToggle(function() {
                                    $(this).parents('tr').addClass('hidden');
                                }

                            );
                        }
                    }

                );

            }

        )
    </script>
</body>

</html>