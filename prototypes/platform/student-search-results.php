<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Search Results';
$patterns['focus']['title'] = 'Search Results';
$patterns['header']['mainNavActive'] = 'scheduling';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>


    <style>
    tr td:first-child {
        color: #0099cc;
    }

    tr td:first-child:hover {
        text-decoration: underline;
        cursor: pointer;
    }
    /*Unseen Column*/

    @media only screen and (max-width: 800px) {
        #unseen table td:nth-child(2),
        #unseen table th:nth-child(2) {
            display: none;
        }
    }

    @media only screen and (max-width: 640px) {
        #unseen table td:nth-child(4),
        #unseen table th:nth-child(4),
        #unseen table td:nth-child(7),
        #unseen table th:nth-child(7),
        #unseen table td:nth-child(8),
        #unseen table th:nth-child(8) {
            display: none;
        }
    }
    /*flip-scroll*/

    @media only screen and (max-width: 800px) {
        #flip-scroll .cf:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0;
        }
        #flip-scroll * html .cf {
            zoom: 1;
        }
        #flip-scroll *:first-child+html .cf {
            zoom: 1;
        }
        #flip-scroll table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
        }
        #flip-scroll th,
        #flip-scroll td {
            margin: 0;
            vertical-align: top;
        }
        #flip-scroll th {
            text-align: left;
        }
        #flip-scroll table {
            display: block;
            position: relative;
            width: 100%;
        }
        #flip-scroll thead {
            display: block;
            float: left;
        }
        #flip-scroll tbody {
            display: block;
            width: auto;
            position: relative;
            overflow-x: auto;
            white-space: nowrap;
        }
        #flip-scroll thead tr {
            display: block;
        }
        #flip-scroll th {
            display: block;
            text-align: right;
        }
        #flip-scroll tbody tr {
            display: inline-block;
            vertical-align: top;
        }
        #flip-scroll td {
            display: block;
            min-height: 1.25em;
            text-align: left;
        }
        /* sort out borders */
        #flip-scroll th {
            border-bottom: 0;
            border-left: 0;
        }
        #flip-scroll td {
            border-left: 0;
            border-right: 0;
            border-bottom: 0;
        }
        #flip-scroll tbody tr {
            border-left: 1px solid #babcbf;
        }
        #flip-scroll th:last-child,
        #flip-scroll td:last-child {
            border-bottom: 1px solid #babcbf;
        }
    }
    /*no more table*/

    @media only screen and (max-width: 800px) {
        /* Force table to not be like tables anymore */
        #no-more-tables table,
        #no-more-tables thead,
        #no-more-tables tbody,
        #no-more-tables th,
        #no-more-tables td,
        #no-more-tables tr {
            display: block;
        }
        /* Hide table headers (but not display: none;, for accessibility) */
        #no-more-tables thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }
        #no-more-tables tr {
            border: 1px solid #ccc;
        }
        #no-more-tables td {
            /* Behave like a "row" */
            border: none;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-left: 50%;
            white-space: normal;
            text-align: left;
        }
        #no-more-tables td:before {
            /* Now like a table header */
            position: absolute;
            /* Top/left values mimic padding */
            top: 6px;
            left: 6px;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
            text-align: left;
            font-weight: bold;
            box-shadow: none;
        }
        #no-more-tables td:after {
            box-shadow: none;
        }
        /*
    Label the data
    */
        #no-more-tables td:before {
            content: attr(data-title);
        }
    }
    /*testing out selecting styles*/

    .checkable {
        position: relative;
        width: 30px;
        margin-bottom: 7px;
        height: 30px;
    }

    .checkable > .select label {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        background-color: #e0e0e0;
        margin: 0;
        cursor: pointer;
        text-align: center;
        padding-top: 12px;
        overflow: hidden;
    }

    .checkable > .select .checkbox {
        position: absolute;
        right: 100%;
        outline: none;
    }

    .checkable > .select .icon {
        display: inline-block;
        width: 20px;
        height: 20px;
        background: url('/content/images/qa-sprite.png') center -60px no-repeat;
    }

    .checkable.checkable-checked > .select label span,
    .selected .checkable > .select label span {
        background-position: center -90px;
    }

    .checkable.checkable-checked > .select label,
    .selected .checkable > .select label {
        background: #fc7b00 !important;
    }

    .checkable.checkable-checked,
    .selected .checkable,
    .selected td {
        color: #fc7b00;
    }

    #searchField {
        font-weight: 600;
    }

    .select label {
        width: 100%;
    }

    table.dataTable thead th,
    table.dataTable thead td {
        font-weight: 600;
    }

    .dropdown-menu {
        width: 200px;
    }

    .checkbox-dropdown label {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: 400;
        line-height: 1.428571429;
    }

    .checkbox-dropdown-menu {
        text-align: left;
        max-height: 300px;
        overflow: auto;
    }
    </style>
    <div class="layout  layout-search">
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
                            </div>

                            <div class="col-md-3">
                                <span class=" search">
                                    <input class="form-control" type="text" id="searchField" placeholder="Search">
                                </span>
                            </div>

                        </section>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox-dropdown columns  btn-group ">
                                        <div class="keep-open dropdown " title="Columns">
                                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                Choose Columns <i class="fa fa-caret-down"></i>
                                            </a>
                                            <ul class="dropdown-menu checkbox-dropdown-menu dropdown-menu-right" role="menu">
                                                <li>
                                                    <label>
                                                        <input class="toggle-vis" data-column="1" type="checkbox" value="0" checked="checked"> Name</label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input class="toggle-vis" data-column="2" type="checkbox" value="1"> Status</label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input class="toggle-vis" data-column="3" type="checkbox" value="2" checked="checked"> User ID</label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input class="toggle-vis" data-column="4" type="checkbox" value="3" checked="checked"> Job Category</label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input class="toggle-vis" data-column="5" type="checkbox" value="4"> Job Title</label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input class="toggle-vis" data-column="6" type="checkbox" value="5"> Affiliation</label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input class="toggle-vis" data-column="7" type="checkbox" value="6" checked="checked"> Hire Date</label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input class="toggle-vis" data-column="8" type="checkbox" value="8" checked="checked"> Review Date</label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input class="toggle-vis" data-column="9" type="checkbox" value="9"> Job Function</label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input class="toggle-vis" data-column="9" type="checkbox" value="9"> Email Addresses</label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input class="toggle-vis" data-column="9" type="checkbox" value="9"> Certification</label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input class="toggle-vis" data-column="9" type="checkbox" value="9"> License</label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input class="toggle-vis" data-column="9" type="checkbox" value="9"> Active Date Range</label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input class="toggle-vis" data-column="9" type="checkbox" value="9"> Active Month</label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input class="toggle-vis" data-column="9" type="checkbox" value="9"> Custom Field 1</label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input class="toggle-vis" data-column="9" type="checkbox" value="9"> Custom Field 2</label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input class="toggle-vis" data-column="9" type="checkbox" value="9"> Custom Field 3</label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input class="toggle-vis" data-column="9" type="checkbox" value="9"> Custom Field 4</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <section id="no-more-tables">
                                <table id="resultsTable" class="table display table-hover table-bordered dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th class=" unsortable">
                                                <div class="select">
                                                    <label>
                                                        <input id="selectAllRows" class="" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </th>
                                            <th>Name</th>
                                            <th class="hideOnLoad">Status</th>
                                            <th>User ID</th>
                                            <th>Job Category</th>
                                            <th class="hideOnLoad">Job Title</th>
                                            <th class="hideOnLoad">Affiliation</th>
                                            <th>Hire Date</th>
                                            <th>Review Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="checkable">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td data-title="Name"> admin4, test</td>
                                            <td data-title="Status">Active</td>
                                            <td data-title="User ID">testadmin4</td>
                                            <td data-title="Job Category">Other Clinical</td>
                                            <td data-title="Job Title">002-Cardiologist</td>
                                            <td data-title="Affiliation">002 - Cardiology</td>
                                            <td data-title="Hire Date">9/2/2015</td>
                                            <td data-title="Reivew Date">9/2/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td data-title="Name">Analyzer, Alan A</td>
                                            <td data-title="Status">Active</td>
                                            <td data-title="User ID">ba1</td>
                                            <td data-title="Job Category">Other Clinical</td>
                                            <td data-title="Job Title">001-Radiologist</td>
                                            <td data-title="Affiliation">001 - Radiology</td>
                                            <td data-title="Hire Date">9/2/2015</td>
                                            <td data-title="Reivew Date">9/3/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td data-title="Name">Austin, Rachael</td>
                                            <td data-title="Status">Active</td>
                                            <td data-title="User ID">RAustin</td>
                                            <td data-title="Job Category">RN - Direct Patient Care</td>
                                            <td data-title="Job Title">04763-Physician</td>
                                            <td data-title="Affiliation">chi696 - AIMS Community College</td>
                                            <td data-title="Hire Date">9/2/2015</td>
                                            <td data-title="Reivew Date">9/2/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td data-title="Name">Bailey, Eric</td>
                                            <td data-title="Status">Active</td>
                                            <td data-title="User ID">ebailey</td>
                                            <td data-title="Job Category">Radiology</td>
                                            <td data-title="Job Title">02468-Registered Nurse</td>
                                            <td data-title="Affiliation">001 - Radiology</td>
                                            <td data-title="Hire Date">9/4/2015</td>
                                            <td data-title="Reivew Date">9/19/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td data-title="Name">Bankhead, Wanda</td>
                                            <td data-title="Status">Active</td>
                                            <td data-title="User ID">wbankhead1</td>
                                            <td data-title="Job Category">EMT-I</td>
                                            <td data-title="Job Title">002-Cardiologist</td>
                                            <td data-title="Affiliation">chi595 - Southwest Adams County Fire Dept</td>
                                            <td data-title="Hire Date">9/19/2015</td>
                                            <td data-title="Reivew Date">9/4/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td data-title="Name">Banner, Bruce</td>
                                            <td data-title="Status">Active</td>
                                            <td data-title="User ID">preview3</td>
                                            <td data-title="Job Category">Other Clinical</td>
                                            <td data-title="Job Title">001-Radiologist</td>
                                            <td data-title="Affiliation">001 - Radiology</td>
                                            <td data-title="Hire Date">10/2/2015</td>
                                            <td data-title="Reivew Date">9/19/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td data-title="Name">Barkley, Chris</td>
                                            <td data-title="Status">Active</td>
                                            <td data-title="User ID">cbarkley</td>
                                            <td data-title="Job Category">Radiology</td>
                                            <td data-title="Job Title">04763-Physician</td>
                                            <td data-title="Affiliation">002 - Cardiology</td>
                                            <td data-title="Hire Date">11/27/2015</td>
                                            <td data-title="Reivew Date">9/19/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td data-title="Name">Bartol, Rita</td>
                                            <td data-title="Status">Active</td>
                                            <td data-title="User ID">rbartol</td>
                                            <td data-title="Job Category">Other Clinical</td>
                                            <td data-title="Job Title">02468-Registered Nurse</td>
                                            <td data-title="Affiliation">001 - Radiology</td>
                                            <td data-title="Hire Date">9/2/2015</td>
                                            <td data-title="Hire Date">11/27/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td data-title="Name">Barton, Clint</td>
                                            <td data-title="Status">Active</td>
                                            <td data-title="User ID">preview7</td>
                                            <td data-title="Job Category">Other Clinical</td>
                                            <td data-title="Job Title">002-Cardiologist</td>
                                            <td data-title="Affiliation">002 - Cardiology</td>
                                            <td data-title="Hire Date">1/6/2015</td>
                                            <td data-title="Hire Date">11/27/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td data-title="Name">Bickel, Steve</td>
                                            <td data-title="Status">Active</td>
                                            <td data-title="User ID">sbickel</td>
                                            <td data-title="Job Category">Physician</td>
                                            <td data-title="Job Title">001-Radiologist</td>
                                            <td data-title="Affiliation">chi551 - Alpine Resuce Team</td>
                                            <td data-title="Hire Date">9/2/2015</td>
                                            <td data-title="Hire Date">11/27/2015</td>
                                        </tr>
                                        <tr>
                                            <td class="checkable">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td data-title="Name">Bluthardt, Shelby</td>
                                            <td data-title="Status">Active</td>
                                            <td data-title="User ID">sbluthardt</td>
                                            <td data-title="Job Category">RN - Direct Patient Care</td>
                                            <td data-title="Job Title">04763-Physician</td>
                                            <td data-title="Affiliation">002 - Cardiology</td>
                                            <td data-title="Hire Date">9/2/2015</td>
                                            <td data-title="Hire Date">11/27/2015</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                        </div>
                    </div>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'html' => '
                                        <a href="/advanced-student-search-four.php" class="btn btn-success">Continue</a>
                                        <a href="/advanced-student-search-four.php" class="btn btn-default">New Search</a>
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Save Results As <i class="fa fa-caret-up"></i></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="active">
                                                    <a href="#">CSV Export</a>
                                                </li>
                                                <li>
                                                    <a href="#">Excel Export</a>
                                                </li>
                                                <li>
                                                    <a href="#">PDF Export </a>
                                                </li>
                                                <li>
                                                    <a href="#">New Student Group</a>
                                                </li>
                                                <li>
                                                    <a href="#">Criteria as Profile Group</a>
                                                </li>
                                            </ul>
                                        </div>
                                    ',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>

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

        <script>
        $(document).ready(function() {
            var table = $('#resultsTable').DataTable({
                "paging": true,
                "order": [
                    [1, "asc"]
                ],
                "dom": '<"top">t<"bottom"rlip><"#testID" and >',
                "columnDefs": [{
                    "visible": false,
                    "targets": "hideOnLoad",
                }, {
                    "orderable": false,
                    "targets": "unsortable"
                }, ],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search"
                }
            });
            $('#resultsTable tbody').on('click', 'tr', function() {
                $(this).toggleClass('selected');
            });

            $('#searchField').keyup(function() {
                table.search($(this).val()).draw();
                $('h2 small').html($("#resultsTable_info").html());
            });
            $("#resultsTable_info").hide();

            $('input.toggle-vis').on('change', function(e) {
                // Get the column API object
                var column = table.column($(this).attr('data-column'));

                // Toggle the visibility
                column.visible(!column.visible());
            });
            $('h2 small').html($("#resultsTable_info").html());

            $('.checkbox-dropdown').click(function() {
                e.stopPropagation();
            });

            $('#selectAllRows').change(function() {

                var $checkbox = $(this);
                if ($checkbox.prop('checked')) {
                    $(".checkbox").prop('checked', $(this).prop("checked"));
                    $(".table tr").addClass('selected');
                    $(".checkbox").addClass('checkable-checked');
                } else {
                    $(".checkbox").prop('checked', $(this).prop("checked", false));
                    $(".table tr").removeClass('selected');
                    $(".checkbox").removeClass('checkable-checked');
                }
            });


            $('.checkable .select input[type="checkbox"]').on('change', function() {
                var $checkbox = $(this);
                var $checkable = $checkbox.closest('.checkable');

                if ($checkbox.prop('checked')) {
                    $checkable.parent().addClass('selected');
                    $checkable.addClass('checkable-checked');
                } else {
                    $checkable.removeClass('checkable-checked');
                    $checkable.parent().removeClass('selected');
                }

                $(document).trigger('checked.hstm.checkable');
            });

            $(document).on('checked.hstm.checkable', function() {
                var $layout = $('.layout-assessment');

                if ($layout.find('.checkable > .select .checkbox:checked').length > 0) {
                    $('.layout-assessment').addClass('layout-assessment-reflective');
                } else {
                    $('.layout-assessment').removeClass('layout-assessment-reflective');
                }
            });
        });
        </script>

  <?= createSiteEnd(); ?>
