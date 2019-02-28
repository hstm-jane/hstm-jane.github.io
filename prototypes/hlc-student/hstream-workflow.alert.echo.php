<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>hStream Alert | HealthStream</title>
    <!-- Styles
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.bootstrap.css?cache=1508080580">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.plugins.css?cache=1508080580">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.app.css?cache=1508080580">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.prototype.css?cache=1508080580">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.hstream.css?cache=1508080580">
    <!-- IE 7/8 Handling
    ================================================== -->
    <script>
    if (document.documentMode < 8) {
        location.href = "unsupported-browser.php";
    } else if (document.documentMode == 8) {
        var html = document.getElementsByTagName('html')[0];
        html.className = 'ie ie8' + html.className;
        var ie8docmode = document.createElement('script');
        ie8docmode.setAttribute('src', '/scripts/respond.js');
        document.getElementsByTagName('head')[0].appendChild(ie8docmode);
        var ie8styles = document.createElement('link');
        ie8styles.setAttribute('rel', 'stylesheet');
        ie8styles.setAttribute('type', 'text/css');
        ie8styles.setAttribute('href', '/content/styles/healthstream.ie8.css');
        document.getElementsByTagName('head')[0].appendChild(ie8styles);
    } else {
        var icons = document.createElement('link');
        icons.setAttribute('rel', 'stylesheet');
        icons.setAttribute('type', 'text/css');
        icons.setAttribute('href', '/content/styles/healthstream.icons.css');
        document.getElementsByTagName('head')[0].appendChild(icons);
    }
    </script>
    <!-- Feature Detection Using Modernizr
    ================================================== -->
    <script src="/scripts/modernizr.js"></script>
    <style>
        .logo-text span {
            margin-left: 12px;
        }
        .panel a {
            display:table;
            width:100%;
        }
        .panel a:hover {
           text-decoration: none;
        }

        .alert-text {
            display: table-cell !important;
                font-size: 16px !important;
                /*padding: 10px !important;*/
                vertical-align: middle !important;
        }
        .alert-value {
            display: table-cell !important;
                width: 20% ;
                font-size: 28px !important;
                padding: 10px 10px !important;
                vertical-align: middle !important;
                text-align: center !important;
                border-left: 1px dotted #ccc !important;
                white-space: normal!important;
                word-break: keep-all;
        }
        .alert-value-meta {
            font-size:9px;
            text-transform: uppercase;
            word-break: keep-all !important;
        }
        @media screen and (max-width: 900px) {
        .panel .text-lg {
            /*font-size:32px;*/

        }
    }
        .section-main .panel-title  {
            font-size:24px!important;
        }
    </style>
</head>

<body>
    <div class="site-header site-header--assessments">
        <div class="container">

            <a href="#" class="trigger-open trigger-open-header"><i class="fa fa-bars"></i><span>Menu</span></a>
            <div class="branding" style="">
                <div class="logo">
                    <a href="/">
                            <img src="content/images/hstream-logo.png" alt="HealthStream" class="logo-large">
                        </a>
                </div>
                <div class="logo-text" >
                    <span>Validate</span>
                </div>
            </div>
            <!-- /nav-account -->

        </div>
        <!-- /container -->
    </div>

    <div class="layout hstream-alert">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="section section-box section-main ">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">

                                <!-- START widget-->
                                <div class="panel panel-primary">
                                    <a href="#modal-alerts" data-toggle="modal" class="modal-alerts">
                                            <div class="alert-text">
                                                <p class="m0 panel-title">OIG Alerts</p>
                                            </div>
                                            <div class="text-right right-box alert-value">
                                                26
                                                <div class="alert-value-meta">alerts</div>
                                            </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">

                                <!-- START widget-->
                                <div class="panel panel-danger">
                                    <a href="#modal-alerts" data-toggle="modal" class="panel-heading modal-alerts">
                                            <div class="alert-text">
                                                <p class="m0 panel-title">SAM Alerts</p>
                                            </div>
                                            <div class="text-right right-box alert-value">
                                                12
                                                <div class="alert-value-meta">alerts</div>
                                            </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">

                                <!-- START widget-->
                                <div class="panel panel-green">
                                    <a href="#modal-alerts" data-toggle="modal" class="panel-heading modal-alerts">
                                            <div class="alert-text">
                                                <p class="m0 panel-title">Open Payment Alerts</p>
                                            </div>
                                            <div class="text-right right-box alert-value">
                                                13
                                                <div class="alert-value-meta">alerts</div>
                                            </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
            <!-- col -->
        </div>
        <!-- row -->
    </div>
    <!-- /container -->
    </div>
    <!-- /layout -->

    <div class="site-footer ">
        <div class="focus focus-promo">
            <div class="container">
            </div>
        </div>
        <div class="container">
            <div class="legal">
                <div class="divider"></div>
                <div class="logo"><img src="./content/images/logo-healthstream-small.png" alt="HealthStream"></div>
                <div class="copyright">Copyright &copy; 2017 HealthStream, Inc. All Rights Reserved.</div>
            </div>
        </div>
    </div>

    <!-- modal-->
    <div id="modal-alerts" class="modal fade modal-lg">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">OIG Alerts</h4>
                </div>
                <div class="modal-body">
                    <div class="oigAlertsHeader text-muted"></div>
                    <table class="table table-bordered upcoming-classes-table dataTable" id="oigAlertsTable">
                        <thead>
                            <tr>
                                <th class="employee">Employee</th>
                                <th>Job Title</th>
                                <th>Alert Date</th>
                                <th class="unsortable sorting_disabled"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-id="9">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Bruno, Brad K.</a></td>
                                <td>Clinical Nurse Supervisor</td>
                                <td>1/1/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="1">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Chamberland, Marie S.</a></td>
                                <td>Nurse Manager - Acute Care</td>
                                <td>1/1/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="2">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Conner, Rosalyn F.</a></td>
                                <td>Quality Coordinator (RN)</td>
                                <td>1/10/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="3">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Flangan, Simon P.</a></td>
                                <td>Diabetes Educator (RN)</td>
                                <td>1/12/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="4">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Franks, Iva R.</a></td>
                                <td>Case Manager (RN)</td>
                                <td>1/31/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="5">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Juniper, Stephanie P.</a></td>
                                <td>LPN - I.V. Certified</td>
                                <td>2/1/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="6">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Lewis, Audry K.</a></td>
                                <td>Nurse - Staff (RN) - Acute Care</td>
                                <td>2/6/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="7">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Montoya, Alice G.</a></td>
                                <td>LPN - I.V. Certified</td>
                                <td>2/11/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="8">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Park, Jennifer S.</a></td>
                                <td>Nurse - Staff (RN) - Telephones</td>
                                <td>2/19/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="9">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Grant, Peter  K.</a></td>
                                <td>Clinical Nurse Supervisor</td>
                                <td>2/22/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="10">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Hicks, Ruth P.</a></td>
                                <td>Nurse Manager - Acute Care</td>
                                <td>4/1/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="2">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Nguyen, Crystal  F.</a></td>
                                <td>Quality Coordinator (RN)</td>
                                <td>4/15/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="3">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Mason, Julia  P.</a></td>
                                <td>Diabetes Educator (RN)</td>
                                <td>4/21/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="4">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Sanders, Gregory  R.</a></td>
                                <td>Case Manager (RN)</td>
                                <td>4/30/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="2">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Nguyen, Crystal  F.</a></td>
                                <td>Quality Coordinator (RN)</td>
                                <td>5/6/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="3">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Mason, Julia  P.</a></td>
                                <td>Diabetes Educator (RN)</td>
                                <td>5/16/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="7">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Montoya, Alice G.</a></td>
                                <td>LPN - I.V. Certified</td>
                                <td>8/1/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="8">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Park, Jennifer S.</a></td>
                                <td>Nurse - Staff (RN) - Telephones</td>
                                <td>8/11/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="9">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Grant, Peter  K.</a></td>
                                <td>Clinical Nurse Supervisor</td>
                                <td>8/14/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="10">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Hicks, Ruth P.</a></td>
                                <td>Nurse Manager - Acute Care</td>
                                <td>9/3/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="2">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Nguyen, Crystal  F.</a></td>
                                <td>Quality Coordina<td>9/30/2017</td>
                                <td>9/5/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="3">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Mason, Julia  P.</a></td>
                                <td>Diabetes Educator (RN)</td>
                                <td>9/17/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="4">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Sanders, Gregory  R.</a></td>
                                <td>Case Manager (RN)</td>
                                <td>9/30/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="2">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Nguyen, Crystal  F.</a></td>
                                <td>Quality Coordinator (RN)</td>
                                <td>10/3/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="3">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Mason, Julia  P.</a></td>
                                <td>Diabetes Educator (RN)</td>
                                <td>10/22/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="3">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Mason, Julia  P.</a></td>
                                <td>Diabetes Educator (RN)</td>
                                <td>10/30/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Print</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal-->

    <script src="/scripts/jquery.js"></script>
    <script src="/scripts/bootstrap.plugins.js"></script>
    <script src="/scripts/bootstrap-datepicker.js"></script>
    <script src="/scripts/bootstrap-timepicker.js"></script>
    <script src="/scripts/healthstream.js"></script>
    <script src="/scripts/healthstream.jquery.js"></script>
    <script src="/scripts/dataTables.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/dataTables.rowReorder.min.js"></script>
    <script src="/scripts/prototype.datatables.js"></script>
    <script>
   (function(window, $) {
       'use strict';
       window.HealthStream = window.HealthStream || {};
       var healthStream = window.HealthStream;
       healthStream.oigAlerts = {};
       healthStream.oigAlerts.resultsDataTable = function() {
           var ClassesTable = $('#oigAlertsTable').DataTable({
               "paging": true,
               "order": [
                   [2, "asc"]
               ],
               "dom": 'ft<"bottom"rlip>',
               "columnDefs": [{
                   "visible": false,
                   "targets": "hideOnLoad",
               }, {
                   "orderable": false,
                   "targets": "unsortable"
               }],
               language: {
                   search: "_INPUT_",
                   info: "Showing _START_ to _END_ of _MAX_ alerts",
                   searchPlaceholder: "Quick Search",
                   lengthMenu: "Show _MENU_ alerts",
                   paginate: {
                       previous: '<i class="fa fa-chevron-left"></i>',
                       next: '<i class="fa fa-chevron-right"></i>'
                   }
               },
               "pageLength": 10
           });

           ClassesTable.columns().iterator('column', function(ctx, idx) {
               $(ClassesTable.column(idx).header()).append('<span class="sort-icon"/>');
           });

           expandMobileRow();
           generateDynamicDataTitles();
           customizeColumns(ClassesTable);

           keepDropDownMenuOpen();
           updateTableHeaderCounts();
           //place default info into Results header
           function updateTableHeaderCounts() {
               $(".dataTables_info").hide();
               $('.oigAlertsHeader').html($("#oigAlertsTable_info").html());
               $('#oigAlertsTable_filter input').css('width', '250px');

               // $(".dataTables_info").hide();
               // $('.upcomingClassesHeader').html($("#upcomingClassesTable_info").html());
               // $('#upcomingClassesTable_filter input').css('width', '250px');
           }
           //reinitialize jquery when table is redrawn (pagination)
           $(".dataTable").on('draw.dt', function() {
               expandMobileRow();
               generateDynamicDataTitles();
               updateTableHeaderCounts();
           });



       };



       $(window).on('load', function() {
           healthStream.oigAlerts.resultsDataTable();
       });
   }(window, jQuery));
    </script>
</body>

</html>