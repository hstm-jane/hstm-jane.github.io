<?php
include "includes/helpers.php";

$patterns['start']['title'] = 'Leadership Training';
$patterns['header']['mainNavActive'] = 'scheduling';
$patterns['focus']['title'] = 'Leadership Training';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Type:',
        'value' => 'NRP',
    ),
    array(
        'label' => 'STARTS: ',
        'value' => 'Sat Dec 12, 2015 at 10:00am',
    ),
    array(
        'label' => 'ENDS: ',
        'value' => 'Sat Dec 12, 2015 at 11:00am',
    ),
    array(
        'label' => 'Time Zone:',
        'value' => 'ET',
    ),
);

$ic_actions_html = '<td class="actions hidden-sm hidden-xs">
    <div class="">
        <div class="btn-group">
            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="#">Approve</a></li>
                <li><a href="#">Deny</a></li>
                <li><a href="#">Reset</a></li>
                <li><a href="#modal-message-single" data-toggle="modal">Send Message</a></li>

            </ul>
        </div>
    </div>
</td>';

$provider_actions_html = '
<td class="actions hidden-sm hidden-xs">
    <div class="">
        <div class="btn-group">
            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="#">Drop</a></li>
                <li><a href="#modal-message-single" data-toggle="modal">Send Message</a></li>
            </ul>
        </div>
    </div>
</td>';

$ic_actions_html2 = '
<td class="actions hidden-sm hidden-xs">
    <div class="">
        <div class="btn-group">
            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="#">Approve</a></li>
                <li><a href="#">Deny</a></li>
                <li><a href="#">Reset</a></li>
                <li><a href="#" class="no-email">Send Message</a></li>

            </ul>
        </div>
    </div>
</td>';

$ic_mobile_actions_html = '
<div class="btn-group actions-dropdown mobile-actions no-select visible-sm visible-xs pull-right">
    <a href="#" class="btn no-select btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-fw no-select fa-caret-down"></i>
    </a>
     <ul class="dropdown-menu no-select dropdown-menu-right">
        <li class="visible-xs visible-sm no-select expand-mobile-row"><a href="#" class="no-select">View More Info</a></li>
        <li><a href="#">Approve</a></li>
        <li><a href="#">Deny</a></li>
        <li><a href="#">Reset</a></li>
        <li><a href="#modal-message-single" data-toggle="modal">Send Message</a></li>
    </ul>
</div>';

$ic_mobile_actions_html2 = '
<div class="btn-group actions-dropdown mobile-actions no-select visible-sm visible-xs pull-right">
    <a href="#" class="btn no-select btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-fw no-select fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu no-select dropdown-menu-right">
        <li class="visible-xs visible-sm no-select expand-mobile-row"><a href="#" class="no-select">View More Info</a></li>
        <li><a href="#">Approve</a></li>
        <li><a href="#">Deny</a></li>
        <li><a href="#">Reset</a></li>
        <li><a href="#" class="no-email">Send Message</a></li>
    </ul>
</div>';

$mobile_actions_html = '
<div class="btn-group actions-dropdown mobile-actions no-select visible-sm visible-xs pull-right">
    <a href="#" class="btn no-select btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-fw no-select fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu no-select dropdown-menu-right">
        <li class="visible-xs visible-sm no-select expand-mobile-row"><a href="#" class="no-select">View More Info</a></li>
        <li><a href="#">Drop</a></li>
        <li><a href="#modal-message-single" data-toggle="modal">Send Message</a></li>
    </ul>
</div>';
$wl_actions_html = '
<td class="actions hidden-sm hidden-xs">
    <div class="">
        <div class="btn-group">
            <a href="#" class="btn btn-default btn-sm dropdown-toggle js-actions-button" data-toggle="dropdown">
                <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="#" class="">Make First in Waitlist</a></li>
                <li class="remove-student-button"><a href="#" class="js-remove-student">Remove</a></li>
                <li class="undo-remove-student"><a href="#" class="js-undo-remove-student">Undo</a></li>
                <li><a href="#modal-message-single" data-toggle="modal">Send Message</a></li>
            </ul>
        </div>
    </div>
</td>';

$wl_mobile_actions_html = '
<div class="btn-group actions-dropdown mobile-actions no-select visible-sm visible-xs pull-right">
    <a href="#" class="btn no-select btn-default btn-sm dropdown-toggle js-actions-button" data-toggle="dropdown" >
        <i class="fa fa-fw no-select fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu no-select dropdown-menu-right">

        <li class="visible-xs visible-sm no-select expand-mobile-row"><a href="#" class="no-select">View More Info</a></li>
         <li><a href="#" class="">Make First in Waitlist</a></li>
        <li class="remove-student-button"><a href="#" class="js-remove-student">Remove</a></li>
        <li class="undo-remove-student"><a href="#" class="js-undo-remove-student">Undo</a></li>
        <li><a href="#modal-message-single" data-toggle="modal">Send Message</a></li>
    </ul>
</div>';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<style>
    .btn-group .pagination>.paginate_button:first-child:not(:last-child):not(.dropdown-toggle) a i{
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
    }

    .btn-group .pagination>.paginate_button:not(.dropdown-toggle) a{
        border:none;
        padding: 0;
    }

    .btn-group .pagination>.paginate_button:last-child:not(:first-child) a i, .btn-group>.dropdown-toggle:not(:first-child){

        border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    }

    .disabled a .btn.btn-default{
        background-color: #fff;
        border-color: #ccc;
        background-image: none;
        cursor: not-allowed;
        pointer-events: none;
        opacity: 0.65;
        filter: alpha(opacity=65);
        -webkit-box-shadow: none;
        box-shadow: none;
        background-image: none;
    }
    div.dataTables_wrapper div.dataTables_length select{
        width: auto;
    }

    .dropdown-right{
        text-align:right;
    }
</style>
<div  class="layout layout-subnav layout-min">
    <div class="container">
        <section class="section section-main section-box">
            <div class="layout-subnav-container">
                <div class="layout-subnav-nav">
                    <div class="layout-subnav-nav-mobile">
                        <span><i class="fa fa-caret-down"></i>
                            <span>Roster</span>
                        </span>
                        <a href="#" class="toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a href="/event-single-settings.php">Settings<i class="fa fa-chevron-right"></i></a>
                        </li>
                        <li>
                            <a href="/event-single-permissions.php">Permisssions<i class="fa fa-chevron-right"></i></a>
                        </li>
                        <li>
                            <a href="/event-single-resources.php">Resources &amp;&nbsp;Personnel<i class="fa fa-chevron-right"></i></a>
                        </li>
                        <li class="active">
                            <a href="/event-single-roster.php">Roster<i class="fa fa-chevron-right"></i></a>
                        </li>
                        <li>
                            <a href="/event-single-grading.php">Grading<i class="fa fa-chevron-right"></i></a>
                        </li>
                        <li>
                            <a href="/event-single-message.php">Send Message<i class="fa fa-chevron-right"></i></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="/event-series-settings.php">Add Series</a>
                        </li>
                    </ul>
                </div>
                <!-- /subnav -->
                <div class="layout-subnav-content table-no-select">
                    <section class="section">
                        <div class="roster-header">
                            <div class="page-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>Roster</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h3 id="instructorCandidateHeader">Instructor Candidates <small></small></h3>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="roster-quick-search">
                                        <select class="form-control slat-basic" id="slat-basic" data-placeholder="Quick Search" multiple="multiple">
                                            <option></option>
                                            <option data-dept="003 - Cardiology" data-userid="user3" data-action="disabled fa-2x" data-icon="fa-ban" data-reason="Not Registered">Joe Demo Cool
                                            </option>
                                            <option data-dept="Facility" data-userid="user2" data-action="success" data-icon="fa-check" data-reason="">Shmoe Demo Cool
                                            </option>
                                            <option data-dept="Facility" data-icon="fa-ban" data-userid="user2" data-action="disabled fa-2x" data-reason="Not Registered">Shmoe Demo Cool
                                            </option>
                                        </select>
                                        <i class="fa fa-search fa-lg icon-quick-search"></i>
                                    </div>
                                    <a class="pull-right" href="/student-search-mvp.php">Student Search</a>

                                </div>
                            </div>
                        </div>
                        <div class="no-more-tables roster-seat-table">
                            <table id="instructorCandidateTable" width="100%" class="table table-no-select display table-hover dataTable no-footer">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>User ID</th>
                                        <th>Department</th>
                                        <th>Institution</th>
                                        <th>Registration Date</th>
                                        <th>Registered By</th>
                                        <th>Status</th>
                                        <th class="unsortable hidden-xs actions">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>admin4, test
                                            <?= $ic_mobile_actions_html2 ?>
                                        </td>
                                        <td>testadmin4</td>
                                        <td>003 - Cardiology</td>
                                        <td>ACME Medical Care</td>
                                        <td>9/2/2015</td>
                                        <td>Gertrude Peckinpah</td>
                                        <td>Registered</td>
                                        <?= $ic_actions_html2 ?>
                                    </tr>
                                    <tr>
                                        <td>Analyzer, Alan
                                            <?= $ic_mobile_actions_html  ?>
                                        </td>
                                        <td>testadmin5</td>
                                        <td>002 - Nursing</td>
                                        <td>Jupiter Healthcare</td>
                                        <td>9/19/2015</td>
                                        <td>Marilyn Monroe</td>
                                        <td>Registered</td>
                                        <?= $ic_actions_html ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h3 id="studentHeader">Students <small></small></h3>
                                <div class="roster-legend ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <span class="roster-legend-pair">
                                                    <span class="badge success"> 15 </span>
                                                    Registered
                                                </span>
                                            </div>
                                            <div class="col-sm-4">
                                                <span class="roster-legend-pair" id="seats-available">
                                                    <span class="badge"> 0 </span>
                                                    <label>Seats Available</label>
                                                </span>
                                            </div>
                                            <div class="col-sm-4">
                                                <span class="roster-legend-pair">
                                                    <span class="badge warning"> 3 </span>
                                                    <label>Waitlisted </label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group waitlist-warning alert alert-warning">
                                <small class="waitlist-message">Registration is full. Additional students will be waitlisted.</small>
                                    <div class="roster-quick-search ">
                                        <select class="form-control slat-basic" id="slat-basic" data-placeholder="Quick Search" multiple="multiple">
                                            <option></option>
                                            <option data-dept="003 - Cardiology" data-userid="user3" data-action="disabled fa-2x" data-icon="fa-ban" data-reason="Not Registered">Joe Demo Cool
                                            </option>
                                            <option data-dept="003 - Cardiology" data-userid="user3" data-action="" data-icon="" data-reason="">Joe Demo Cool
                                            </option>
                                            <option data-dept="Facility" data-userid="user2" data-action="warning" data-icon="fa-check" data-reason="">Shmoe Demo Cool
                                            </option>
                                            <option data-dept="Facility" data-userid="user2" data-action="success" data-icon="fa-check" data-reason="">Shmoe Demo Cool
                                            </option>
                                            <option data-dept="Facility" data-icon="fa-ban" data-userid="user2" data-action="disabled fa-2x" data-reason="Not Registered">Shmoe Demo Cool
                                            </option>

                                        </select>
                                        <i class="fa fa-search fa-lg icon-quick-search"></i>
                                    </div>
                                    <a class="pull-right" href="/student-search-mvp.php">Student Search</a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dropdown-right visible-sm visible-xs">
                            <button class="btn btn-default dropdown-toggle sort-btn" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sort: Added Date <i class="fa fa-sort"></i>
                            </button>
                            <ul class="dropdown-menu  dropdown-menu-right sort-menu">
                                <li data-column="0"><a href="#">Name</a></li>
                                <li data-column="1"><a href="#">User ID</a></li>
                                <li data-column="2"><a href="#">Department</a></li>
                                <li data-column="3"><a href="#">Institution</a></li>
                                <li data-column="4" class="active" data-column=""><a href="#">Added Date</a></li>
                                <li data-column="5"><a href="#">Added By</a></li>
                                <li data-column="6"><a href="#">Status</a></li>
                            </ul>
                                        </div>
                        <div class="no-more-tables roster-seat-table">
                            <table id="studentTable" width="100%" class="table table-no-select display table-hover dataTable no-footer">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>User ID</th>
                                        <th>Department</th>
                                        <th>Institution</th>
                                        <th>Added Date</th>
                                        <th>Added By</th>
                                        <th>Status</th>
                                        <th class="unsortable hidden-xs actions">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="waitlisted-row">
                                        <td>admin4, test
                                            <?= $wl_mobile_actions_html ?>
                                        </td>
                                        <td>testadmin4</td>
                                        <td>08-Obstetrics</td>
                                        <td>Dummy Institution</td>
                                        <td>9/28/2016</td>
                                        <td>Susie Q</td>
                                        <td>Waitlist 2</td>
                                        <?= $wl_actions_html ?>
                                    </tr>
                                    <tr class="waitlisted-row">
                                        <td>Analyzer, Alan
                                            <?= $wl_mobile_actions_html ?>
                                        </td>
                                        <td>testadmin4</td>
                                        <td>Dermatology</td>
                                        <td>Jupiter Healthcare</td>
                                        <td>9/27/2016</td>
                                        <td>Rob Thomas</td>
                                        <td>Waitlist 1</td>
                                        <?= $wl_actions_html ?>
                                    </tr>
                                    <tr class="registered-row">
                                        <td>Analyzer, Alan A
                                            <?= $mobile_actions_html ?>
                                        </td>
                                        <td>ba1</td>
                                        <td>Plastic Surgery</td>
                                        <td>Jupiter Healthcare</td>
                                        <td>4/27/2016</td>
                                        <td>Cam Newton</td>
                                        <td>Registered</td>
                                        <?= $provider_actions_html ?>
                                    </tr>
                                    <tr class="registered-row">
                                        <td>Austin, Rachael
                                            <?= $mobile_actions_html  ?>
                                        </td>
                                        <td>RAustin</td>
                                        <td>Nutrition</td>
                                        <td>Sacred Heart</td>
                                        <td>2/27/2016</td>
                                        <td>Cam Newton</td>
                                        <td>Registered</td>
                                        <?= $provider_actions_html ?>
                                    </tr>
                                    <tr class="registered-row">
                                        <td>Bailey, Eric
                                            <?= $mobile_actions_html ?>
                                        </td>
                                        <td>ebailey</td>
                                        <td>Orthopedics</td>
                                        <td>Orthopedic Alliance</td>
                                        <td>9/4/2015</td>
                                        <td>Conan O'brien</td>
                                        <td>Registered</td>
                                        <?= $provider_actions_html ?>
                                    </tr>
                                    <tr>
                                        <td>Bankhead, Wanda
                                            <?= $mobile_actions_html ?>
                                        </td>
                                        <td>wbankhead1</td>
                                        <td>EMT-I</td>
                                        <td>chi595 - Southwest Adams County Fire Dept</td>
                                        <td>9/19/2015</td>
                                        <td>Rebecca Taylor</td>
                                        <td>Registered</td>
                                        <?= $provider_actions_html ?>
                                    </tr>
                                    <tr class="registered-row">
                                        <td>Banner, Bruce
                                            <?= $mobile_actions_html ?>
                                        </td>
                                        <td>preview3</td>
                                        <td>EMT-I</td>
                                        <td>chi595 - Southwest Adams County Fire Dept</td>
                                        <td>9/19/2015</td>
                                        <td>Rebecca Taylor</td>
                                        <td>Registered</td>
                                        <?= $provider_actions_html ?>
                                    </tr>
                                    <tr>
                                        <td>Barkley, Chris
                                            <?= $mobile_actions_html ?>
                                        </td>
                                        <td>cbarkley</td>
                                        <td>EMT-I</td>
                                        <td>chi595 - Southwest Adams County Fire Dept</td>
                                        <td>9/19/2015</td>
                                        <td>Rebecca Taylor</td>
                                        <td>Registered</td>
                                        <?= $provider_actions_html ?>
                                    </tr>
                                    <tr class="registered-row">
                                        <td>Bartol, Rita
                                            <?= $mobile_actions_html ?>
                                        </td>
                                        <td>rbartol</td>
                                        <td>EMT-I</td>
                                        <td>chi595 - Southwest Adams County Fire Dept</td>
                                        <td>9/19/2015</td>
                                        <td>Rebecca Taylor</td>
                                        <td>Registered</td>
                                        <?= $provider_actions_html ?>
                                    </tr>
                                    <tr>
                                        <td>Barton, Clint
                                            <?= $mobile_actions_html ?>
                                        </td>
                                        <td>preview7</td>
                                        <td>EMT-I</td>
                                        <td>chi595 - Southwest Adams County Fire Dept</td>
                                        <td>9/19/2015</td>
                                        <td>Rebecca Taylor</td>
                                        <td>Registered</td>
                                        <?= $provider_actions_html ?>
                                    </tr>
                                    <tr>
                                        <td>Bickel, Steve
                                            <?= $mobile_actions_html ?>
                                        </td>
                                        <td>sbickel</td>
                                        <td>EMT-I</td>
                                        <td>chi595 - Southwest Adams County Fire Dept</td>
                                        <td>9/19/2015</td>
                                        <td>Rebecca Taylor</td>
                                        <td>Registered</td>
                                        <?= $provider_actions_html ?>
                                    </tr>
                                    <tr>
                                        <td>Bluthardt, Shelby
                                            <?= $mobile_actions_html ?>
                                        </td>
                                        <td>Registered</td>
                                        <td>EMT-I</td>
                                        <td>chi595 - Southwest Adams County Fire Dept</td>
                                        <td>9/19/2015</td>
                                        <td>Rebecca Taylor</td>
                                        <td>Registered</td>
                                        <?= $provider_actions_html ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'html' => '
                                        <a href="#" class="btn btn-success">Save</a>
                                        <a href="#" class="btn btn-default">Cancel</a>
                                    ',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>
                    <div class="form-modified">Last Modified: Mar 3, 2016 at 6:23 AM ET by demo1</div>

                </div>
            </div>
        <!-- /content -->

        </section>
    </div>
</div>

<!-- /layout -->

<?php
include MODAL_MESSAGE_GROUP;
include MODAL_MESSAGE_SINGLE;
?>
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createDatatableScripts(); ?>

<script type="text/javascript" src="/scripts/prototype.datatables.js"></script>
<script>
    (function(window, $) {
        'use strict';
        window.HealthStream = window.HealthStream || {};
        var healthStream = window.HealthStream;
        healthStream.studentSearchResults = {};
        healthStream.studentSearchResults.resultsDataTable = function() {
            var icTable = $('#instructorCandidateTable').DataTable({
                "paging": true,
                "order": [
                    [4, "asc"]
                ],
                "select": false,
                "dom": 't<"bottom"ri>',
                "columnDefs": [{
                    "visible": false,
                    "targets": "hideOnLoad",
                }, {
                    "orderable": false,
                    "targets": "unsortable"
                }],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search"
                }
            });
            var pTable = $('#studentTable').DataTable({
                "paging": true,
                "order": [
                    [4, "asc"]
                ],
                "dom": 't<"bottom"rli<"btn-group"p>>',
                "columnDefs": [{
                    "visible": false,
                    "targets": "hideOnLoad",
                }, {
                    "orderable": false,
                    "targets": "unsortable"
                }],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search",
                    paginate: {
                        "previous": '<i class="btn btn-default"><i class="fa fa-chevron-left"></i></i>',
                        "next": '<i class="btn btn-default"><i class="fa fa-chevron-right"></i></i>',
                    },
                     "lengthMenu": '<select class="btn btn-default">'+
                        '<option value="10">Results 1 - 10 of 12 <i class="fa fa-caret-up"></i></option>'+
                        '<option value="20">20 per page</option>'+
                          '<option value="50">50 per page</option>'+
                          '<option value="100">100 per page</option>'+
                          '<option value="250">250 per page</option>'+
                          '<option value="-1">All</option>'+
                        '</select>'
                },
                "pagingType": "simple",

                "lengthMenu": [ 10, 20, 50, 100, 250]

            });

            expandMobileRow();
            generateDynamicDataTitles();
            customizeColumns(icTable);
            customizeColumns(pTable);

            keepDropDownMenuOpen();
            updateTableHeaderCounts();
            //place default info into Results header
            function updateTableHeaderCounts() {
                $(".dataTables_info").hide();
                $('#studentHeader small').html($("#studentTable_info").html());
                $('#instructorCandidateHeader small').html($("#instructorCandidateTable_info").html());
            }

            $(".sort-menu a").click(function(){
                var colNumber = $(this).parent().data("column"),
                    colTitle = $(this).text();
                $(".sort-menu .active").removeClass("active");
                $(this).parent().addClass("active");

                $(".sort-btn").html('Sort: ' + colTitle + ' <i class="fa fa-sort"></i>');
                if(colNumber == 6){
                        pTable
                            .column( colNumber )
                            .order( 'desc' )
                            .draw();
                        }
                else{
                        pTable
                            .column( colNumber )
                            .order( 'asc' )
                            .draw();
                        }


            });

            //reinitialize jquery when table is redrawn (pagination)
            $(".dataTable").on('draw.dt', function() {
                expandMobileRow();
                generateDynamicDataTitles();
                updateTableHeaderCounts();
            });

            $(".js-remove-student").click(function(){
                $(this).parents("tr").addClass("delete-row");
                $(this).parents("tr").find(".dropdown-menu li:not(.undo-remove-student)").addClass("disabled");
            });

            $(".js-undo-remove-student").click(function(){
                $(this).parents("tr").removeClass("delete-row");
                $(this).parents("tr").find("a:not(.undo-button)").removeClass("disabled");
                $(this).parents("tr").find("input").prop( "disabled", false );
                $(this).parents("tr").find("a:not(.js-actions-button)").removeClass("disabled");
                $(this).parents("tr").find(".dropdown-menu li:not(.undo-delete)").removeClass("disabled");
            });

            //update table row count on tab click
            // $('a[href="#tab-waitlisted-students"]').on('shown.bs.tab', function (e) {
            //     $('#studentHeader small').html($("#waitlistTable_info").html());
            // });
            // $('a[href="#tab-registered-students"]').on('shown.bs.tab', function (e) {
            //     $('#studentHeader small').html($("#studentTable_info").html());
            // });



            healthStream.select2 = function() {
                function formatBasic(option) {
                    var userid = $(option.element).data('userid');
                    var dept = $(option.element).data('dept');
                    var action = $(option.element).data('action');
                    var disabledReason = $(option.element).data('reason');
                    var actionIcon = $(option.element).data('icon');


                    if (!option.id) return option.text; // optgroup
                    return '<div class="slat slat-select2 slat-select2-action slat-select2-nowrap"><div class="action"><i class="icon fa ' + actionIcon + ' ' + action + '"></i></div><div class="title">' + option.text + ' <span>[' + userid + ']</span></div><ul class="meta"><li><span class="meta-label">Example:</span><span class="meta-value">' + dept + '</span></li><li><span class="meta-label">Example:</span><span class="meta-value">' + dept + '</span></li><li><span class="meta-value meta-value-unavailable">' + disabledReason + '</span></li></ul></div>';

                }
                $('.slat-basic').select2({
                    minimumInputLength: 1,
                    formatResult: formatBasic,
                    escapeMarkup: function(m) {
                        return m;
                    },
                    dropdownCssClass: 'select2-slats'
                });

                $(".select2-input").keyup(function(){
                    if($(this).val() !== ""){
                        $(this).parents(".roster-quick-search").find(".icon-quick-search").hide();
                    }
                    else{
                        $(this).parents(".roster-quick-search").find(".icon-quick-search").show();
                    }
                });

            $('#sendMessage').formValidation({
                framework: 'bootstrap',
                fields: {
                    subject: {
                        validators: {
                            notEmpty: {
                                message: 'This field is required'
                            },
                        }
                    },
                    message: {
                        validators: {
                            notEmpty: {
                                message: 'This field is required'
                            },
                        }
                    },
                }
            });
            $('#sendMessageGroup').formValidation({
                framework: 'bootstrap',
                fields: {
                    subject_group: {
                        validators: {
                            notEmpty: {
                                message: 'This field is required'
                            },
                        }
                    },
                    message_group: {
                        validators: {
                            notEmpty: {
                                message: 'This field is required'
                            },
                        }
                    },
                }
            });

            //when no seats are availabel, badge turns red
            if($("#seats-available span").html() > 0){
                var $badge = $("#seats-available span");

                $badge.removeClass("danger");
            } else {
                var $badge = $("#seats-available span");

                $badge.addClass("danger");
            }

            //Hide search icon when user is typing in search input
            $(document).on('blur','.select2-input', function() {
               if($(this).val() !== ""){
                    $(this).parents(".roster-quick-search").find(".icon-quick-search").hide();
                }
                else{
                    $(this).parents(".roster-quick-search").find(".icon-quick-search").show();
                }
            });

                $('.no-email').click(function() {
                    HealthStream.utilities.interrupt({
                        type: 'failure',
                        title: 'Cannot Send Message',
                        text: 'You cannot send a message to this individual because their email address cannot be found.',
                        actions: [{
                            label: 'Continue'
                        }]
                    });
                });
            };
        };
        $(window).on('load', function() {
            healthStream.studentSearchResults.resultsDataTable();
            healthStream.select2();
        });
    }(window, jQuery));
</script>

<?= createSiteEnd(); ?>