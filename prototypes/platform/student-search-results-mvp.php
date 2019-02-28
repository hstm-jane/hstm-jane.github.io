<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Search Results';
$patterns['focus']['title'] = 'Search Results';
$patterns['header']['mainNavActive'] = 'scheduling';


?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<?php


 
    $mobile_expand_row_html = '
        <a href="#" class="btn btn-default visible-xs visible-sm no-select pull-right expand-mobile-row btn-sm visible-xs">
            <i class="fa fa-fw no-select fa-caret-down"></i>
        </a>';
?>
    <div class="layout layout-search new-data-table-styles-wrapper">
        <div class="container">
            <section class="section section-main  section-box">
                <section class="section">
                    <div class="row">
                        <section class="section section-results-header">
                            <div class="col-md-9">
                                <h2>Results
                                    <!--The empty small tag is used with javascript-->
                                    <small></small>
                                </h2>
                                <div class="alert seat-availability-message" data-template="You have {selected} people selected and {max} slots available." data-max="4"></div>
                                <div class="visible-xs">
                                    <input type="button" class="btn-default btn " id="select-all-mobile" value="Select All">
                                    <input type="button" class="btn-default btn" id="deselect-all-mobile" value="Deselect All">
                                </div>
                                <div class="checkbox-dropdown columns  btn-group ">
                                    <div class="keep-open dropdown hidden-xs " title="Columns">
                                        <a href="#" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                                            Choose Columns <i class="fa fa-caret-down"></i>
                                        </a>
                                        <ul id="checkbox-dropdown-menu" class="dropdown-menu checkbox-dropdown-menu dropdown-menu-left" role="menu">
                                            <li>
                                                <label>
                                                    <input class="toggle-vis" data-column="9" type="checkbox"> Active Month</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="toggle-vis" data-column="9" type="checkbox"> Active Date Range</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="toggle-vis" data-column="4" type="checkbox" checked="checked"> Institution</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="toggle-vis" data-column="9" type="checkbox"> Certification</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="toggle-vis" data-column="9" type="checkbox"> Email Addresses</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="toggle-vis" data-column="7" type="checkbox"> Hire Date</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="toggle-vis" data-column="6" type="checkbox"> Job Category</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="toggle-vis" data-column="9" type="checkbox"> Job Function</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="toggle-vis" data-column="3" type="checkbox" checked="checked"> Job Title</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="toggle-vis" data-column="9" type="checkbox"> License</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="toggle-vis" data-column="1" type="checkbox" checked="checked"> Name</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="toggle-vis" data-column="8" type="checkbox"> Review Date</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="toggle-vis" data-column="5" type="checkbox" checked="checked"> Status</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="toggle-vis" data-column="2" type="checkbox" checked="checked"> User ID</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="toggle-vis" data-column="9" type="checkbox"> [Name of Custom Field #1]</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="toggle-vis" data-column="9" type="checkbox"> [Name of Custom Field #2]</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="toggle-vis" data-column="9" type="checkbox"> [Name of Custom Field #3]</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="toggle-vis" data-column="9" type="checkbox"> [Name of Custom Field #4]</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </section>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div style="overflow-x:auto" class="no-more-tables">
                                <table id="resultsTable" width="100%" class="table display table-hover  dataTable   no-footer">
                                    <thead>
                                        <tr>
                                            <th class="unsortable checkable-dt checkable-dt-check-all">
                                                <div class="select">
                                                    <label>
                                                        <input id="selectAllRows" class="checkbox-check-all" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </th>
                                            <th>Name</th>
                                            <th>User ID</th>
                                            <th>Institution</th>
                                            <th>Department</th>
                                            <th>Job Title</th>
                                            <th class="hideOnLoad">Status</th>
                                            <th class="hideOnLoad">Job Category</th>
                                            <th class="hideOnLoad">Hire Date</th>
                                            <th class="hideOnLoad">Review Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="uncheckable-dt-row">
                                            <td class="uncheckable-dt">
                                                <i class="fa fa-info-circle  fa-lg unavailable-not-nrp"><i>
                                            </td>
                                            <td>admin4, test
                                                <?= $mobile_expand_row_html ?>
                                            </td>
                                            <td>testadmin4</td>
                                            <td>002-Cardiologist</td>
                                            <td>002-Cardiologist</td>
                                            <td>002 - Cardiology</td>
                                            <td>Active</td>
                                            <td>Other Clinical</td>
                                            <td>9/2/2015</td>
                                            <td>9/2/2015</td>
                                        </tr>
                                        <tr class="uncheckable-dt-row">
                                            <td class="uncheckable-dt">
                                                <i class="fa fa-info-circle fa-lg unavailable-already-registered"><i>
                                            </td>
                                            <td>admin5, test
                                                <?= $mobile_expand_row_html ?>
                                            </td>
                                            <td>testadmin4</td>
                                            <td>002-Cardiologist</td>
                                            <td>002-Cardiologist</td>
                                            <td>002 - Cardiology</td>
                                            <td>Active</td>
                                            <td>Other Clinical</td>
                                            <td>9/2/2015</td>
                                            <td>9/2/2015</td>
                                        </tr>
                                        <tr class="uncheckable-dt-row" >
                                            <td class="uncheckable-dt">
                                                <i class="fa fa-info-circle fa-lg unavailable-registered-other-event"><i>
                                            </td>
                                            <td >Analyzer, Alan
                                                <?=   $mobile_expand_row_html ?>
                                            </td>
                                            <td>testadmin4</td>
                                            <td>002-Cardiologist</td>
                                            <td>002 - Cardiology</td>
                                            <td>002-Cardiologist</td>
                                            <td>Active</td>
                                            <td>Other Clinical</td>
                                            <td>9/2/2015</td>
                                            <td>9/2/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable-dt">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td >Analyzer, Alan A <?=   $mobile_expand_row_html ?></td>
                                            <td>ba1</td>
                                            <td>001-Radiologist</td>
                                            <td>001 - Radiology</td>
                                            <td>001 - Radiology</td>
                                            <td>Active</td>
                                            <td>Other Clinical</td>
                                            <td>9/2/2015</td>
                                            <td>9/3/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable-dt">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td >Austin, Rachael <?= $mobile_expand_row_html ?></td>
                                            <td>RAustin</td>
                                            <td>04763-Physician</td>
                                            <td>04763-Physician</td>

                                            <td>chi696 - AIMS Community College</td>
                                            <td>Active</td>
                                            <td>RN - Direct Patient Care</td>
                                            <td>9/2/2015</td>
                                            <td>9/2/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable-dt">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td >Bailey, Eric <?= $mobile_expand_row_html ?></td>
                                            <td>ebailey</td>
                                            <td>02468-Registered Nurse</td>
                                            <td>001 - Radiology</td>
                                            <td>001 - Radiology</td>
                                            <td>Active</td>
                                            <td>Radiology</td>
                                            <td>9/4/2015</td>
                                            <td>9/19/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable-dt">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td >Bankhead, Wanda <?= $mobile_expand_row_html ?></td>
                                            <td>wbankhead1</td>
                                            <td>002-Cardiologist</td>
                                            <td>002-Cardiologist</td>
                                            <td>chi595 - Southwest Adams County Fire Dept</td>
                                            <td>Active</td>
                                            <td>EMT-I</td>
                                            <td>9/19/2015</td>
                                            <td>9/4/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable-dt">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td >Banner, Bruce <?= $mobile_expand_row_html ?></td>
                                            <td>preview3</td>
                                            <td>001-Radiologist</td>
                                            <td>001 - Radiology</td>
                                            <td>001 - Radiology</td>
                                            <td>Active</td>
                                            <td>Other Clinical</td>
                                            <td>10/2/2015</td>
                                            <td>9/19/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable-dt">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td >Barkley, Chris <?= $mobile_expand_row_html ?></td>
                                            <td>cbarkley</td>
                                            <td>04763-Physician</td>
                                            <td>002 - Cardiology</td>
                                            <td>002 - Cardiology</td>
                                            <td>Active</td>
                                            <td>Radiology</td>
                                            <td>11/27/2015</td>
                                            <td>9/19/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable-dt">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td >Bartol, Rita <?= $mobile_expand_row_html ?></td>
                                            <td>rbartol</td>
                                            <td>02468-Registered Nurse</td>
                                            <td>001 - Radiology</td>
                                            <td>001 - Radiology</td>
                                            <td>Active</td>
                                            <td>Other Clinical</td>
                                            <td>9/2/2015</td>
                                            <td>11/27/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable-dt">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td >Barton, Clint <?= $mobile_expand_row_html ?></td>
                                            <td>preview7</td>
                                            <td>Other Clinical</td>
                                            <td>002 - Cardiology</td>
                                            <td>002 - Cardiology</td>
                                            <td>Active</td>
                                            <td>002-Cardiologist</td>
                                            <td>1/6/2015</td>
                                            <td>11/27/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable-dt">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td >Bickel, Steve <?= $mobile_expand_row_html ?></td>
                                            <td>sbickel</td>
                                            <td>001-Radiologist</td>
                                            <td>chi551 - Alpine Resuce Team</td>
                                            <td>001-Radiologist</td>
                                            <td>Active</td>
                                            <td>Physician</td>
                                            <td>9/2/2015</td>
                                            <td>11/27/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable-dt">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td >Bluthardt, Shelby <?= $mobile_expand_row_html ?></td>
                                            <td>sbluthardt</td>
                                            <td>04763-Physician</td>
                                            <td>002 - Cardiology</td>
                                            <td>002 - Cardiology</td>
                                            <td>Active</td>
                                            <td>RN - Direct Patient Care</td>
                                            <td>9/2/2015</td>
                                            <td>11/27/2015</td>
                                        </tr>
                                    </tbody>
                                </table>

                        </div>
                        </div>
                    </div>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'html' => '
                                        <a href="/student-search-four" id="continueBtn" class="btn btn-success">Continue</a>
                                        <a href="/student-search-four" class="btn btn-default">New Search</a>
                                    ',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>

                </section>
            </section>
        </div>
    <!-- /container -->
    </div>
    <!-- /layout -->

<?php
// Defined in helpers.php file
include MODAL_SEARCH_FILTERS;
?>
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>


<script type="text/javascript" src="/scripts/dataTables.js"></script>
<script type="text/javascript" src="/scripts/prototype.datatables.js"></script>


<script>
(function(window, $) {
    'use strict';

    window.HealthStream = window.HealthStream || {};
    var healthStream = window.HealthStream;

    healthStream.studentSearchResults = {};


    healthStream.studentSearchResults.resultsDataTable = function() {
        var table = $('#resultsTable').DataTable({
            "paging": true,
            "order": [
                [1, "asc"]
            ],
            "dom": 't<"bottom"rlip>',
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

        updateSelected(table);
        expandMobileRow();
        generateDynamicDataTitles();
        customizeColumns(table);
        selectRowsOnClick(table);
        selectRowOnCheckboxChange(table);
        keepDropDownMenuOpen();

        //search reuslts on keyup
        $('#searchField').keyup(function() {
            table.search($(this).val()).draw();
            $('h2 small').html($("#resultsTable_info").html());
        });

        //hide datatables standard info (we use the html later so we want it on the page)
        $("#resultsTable_info").hide();

        //place default info into Results header
        $('h2 small').html($("#resultsTable_info").html());

        $('.checkbox-check-all').change(function() {

            var $checkbox = $(this);

            if ($checkbox.prop('checked')) {
                selectAll(table);

            } else {
                deselectAll(table);

            }
             updateSelected(table);
        });

        $("#select-all-mobile").click(function(){
            $(this).hide();
            $("#deselect-all-mobile").show();
            selectAll(table);
            updateSelected(table);
        });

        $("#deselect-all-mobile").click(function(){
            $(this).hide();
            deselectAll(table);
            $("#select-all-mobile").show();
            updateSelected(table);
        });

        $('.unavailable-not-nrp').parents("tr").click(function(e) {

            HealthStream.utilities.interrupt({
                type: 'info',
                title: 'Student is Not Enrolled in an NRP Course',
                text: 'Students must be enrolled in an NRP course to be selected for this event.',
                actions: [{
                    label: 'Continue'
                }]
            });
        });

        $('.unavailable-already-registered').parents("tr").click(function(e) {

            HealthStream.utilities.interrupt({
                type: 'info',
                title: 'Student is Already Registered for this Event',
                text: 'This student is already registered for this event.',
                actions: [{
                    label: 'Continue'
                }]
            });
        });

        $('.unavailable-registered-other-event').parents("tr").click(function(e) {

            HealthStream.utilities.interrupt({
                type: 'info',
                title: 'Student is Already Registered on a different Event',
                text: 'This student is already registered for a different event for this learning Activity.',
                actions: [{
                    label: 'Continue'
                }]
            });
        });

        $("#continueBtn").click(function(event){
            var $alert = $('.alert');
            var max = $alert.attr('data-max');
            var selected = table.rows('.selected').data().length;

            if (selected > max){
            event.preventDefault();

                HealthStream.utilities.interrupt({
                type: 'warning',
                title: 'There are too many people selected.',
                text: 'There are ' + selected + " people selected and " + max + " spots available. Please select no more than " + max + " people.",
                actions: [{
                    label: 'Continue'
                }]
            });

            }
        });

        //reinitialize jquery when table is redrawn (pagination)
        $(".dataTable").on( 'draw.dt', function () {
           expandMobileRow();
           generateDynamicDataTitles();
           updateSelected(table);
        });


        selectRowWithID("test");
};

$(window).on('load', function() {
    healthStream.studentSearchResults.resultsDataTable();
});


}(window, jQuery));
</script>


<?= createSiteEnd(); ?>