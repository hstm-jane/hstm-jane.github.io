<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Assessment Results';
$patterns['focus']['title'] = 'Assessment Results';

$patterns['focus']['title'] = 'Add User';
$patterns['header'] = array(
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="/content/images/prototype-actors/allisongrayce.jpg">',
    'mainNav' => '
        <li class="{active=home}"><a href="/demo-admin.php">Home</a></li>
        <li class="{active=results}"><a href="/demo-admin-assessment-results.php">Assessment Results</a></li>
        <li class="{active=users}"><a href="/demo-admin-manage-users.php">Manage Users</a></li>',
    'logoLarge' => './content/images/logo-assess-large.png',
    'mainNavActive' =>'results',
    'alerts' => '',
    'userInstitution' => '',
);



$mobile_expand_row_html = '
<a href="#" class="btn btn-default visible-xs pull-right expand-mobile-row btn-sm visible-xs">
<i class="fa fa-fw fa-caret-down"></i>
</a>';

?>


<?=createSiteStart($patterns['start']);?>
<div class="no-focus">
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
</div>
<style>
h2 {
    margin-top: 0;
}
</style>
<div class="layout layout-search">
    <div class="container">
        <section class="section section-main section-box">

            <section class="section">
                <div class="row">
                    <div class="col-md-7">
                        <h2>Assessment Results <small>Showing 1-50 of 50</small></h2>
                        <div class="checkbox-dropdown columns  btn-group ">
                            <div class="keep-open dropdown hidden-xs " title="Columns">
                                <a href="#" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Choose Columns <i class="fa fa-caret-down"></i>
                                </a>
                                <ul id="checkbox-dropdown-menu" class="dropdown-menu checkbox-dropdown-menu dropdown-menu-right" role="menu">

                                    <li>
                                        <label>
                                            <input class="toggle-vis" data-column="1" type="checkbox" checked="checked"> Employee</label>
                                        </li>

                                        <li>
                                            <label>
                                                <input class="toggle-vis" data-column="2" type="checkbox" checked="checked"> Path</label>
                                            </li>

                                            <li>
                                                <label>
                                                    <input class="toggle-vis" data-column="3" type="checkbox" checked="checked"> Progress</label>
                                                </li>

                                                <li>
                                                    <label>
                                                        <input class="toggle-vis" data-column="4" type="checkbox" checked="checked"> Score</label>
                                                    </li>

                                                    <li>
                                                        <label>
                                                            <input class="toggle-vis" data-column="5" type="checkbox" checked="checked"> Assigned Date</label>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 pull-down">

                                            <input class="form-control" type="text" id="searchField" placeholder="Search by any of the  displayed content">

                                        </div>
                                    </div>
                                    <div style="overflow-x:auto" class="no-more-tables">
                                        <table id="resultsTable" width="100%" class="table display table-hover dataTable no-footer">
                                            <thead>
                                                <tr>
                                                    <th>Employee</th>
                                                    <th>Assessment Path</th>
                                                    <th>Score</th>
                                                    <th>Assigned</th>
                                                    <th>Affiliation </th>
                                                    <th>Progress</th>
                                                    <th class="unsortable"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <td> Abbot, Abigail</td>
                                                <td> Registered Nurse / Emergency</td>
                                                <td> Completed</td>
                                                <td> 87 </td>
                                                <td> 12-5-2017</td>
                                                <td> Ashland City Medical Center (Ashland City)</td>
                                                <td><a href="demo-admin-assessment-result-detail.php" class="btn btn-sm btn-default">View <a></td>

                                                <?php


                                                sort($actors);


                                                for($x = 0; $x <= 50; $x++) {

                                                    $random_progress = array_rand($assessment_progress);
                                                    $random_profession = array_rand($profession);
                                                    $profession_count = count($profession) - 1;
                                                    $score = '--';

                                                    if (is_array($assessment_progress[$random_progress])) {
                                                        $progress_count = count($assessment_progress[$random_progress]) - 2;
                                                        $score = $assessment_progress[$random_progress][rand(1, $progress_count)];
                                                        $progress = 'Completed';

                                                    }
                                                    else {
                                                        $progress = $assessment_progress[$random_progress];
                                                    }

                                                    if ($x % 2 === 0) {
                                                        $rowClass ="even";
                                                    } else {
                                                        $rowClass ="odd";
                                                    }

                                                    $string = '<tr class="' . $rowClass .'">

                                                    <td>'. $actors[$x] .'</td>
                                                    <td>'. $profession[$random_profession]  . '</td>
                                                    <td>'. $progress . '</td>
                                                    <td>'. $score . '</td>
                                                    <td>'. $random_date[rand(1,99)] .' </td> ' .
                                                    '<td>'. $affiliation[$x] .'</td>' .

                                                    '<td> <a href="demo-admin-assessment-result-detail.php" class="btn btn-sm btn-default">View <a></td>
                                                    </tr>';



                                                    echo $string;

                                                };



                                                ?>

                                            </tbody>
                                        </table>

                                    </div>

                                </section>

                                <?php
                                $stickybar = array(
                                    'sets' => array(
                                        /*array(
                                            'position' => 'left',
                                            'classes' => array('hidden-xs', 'hidden-sm'),
                                            'html' => '
                                            <div class="btn-group dropup">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Batch Actions <i class="fa fa-caret-up"></i></button>
                                            <ul class="dropdown-menu" role="menu">
                                            <li class="active">
                                            <a href="#">Print Preceptor Cards</a>
                                            </li>
                                            <li>
                                            <a href="#">Print Full Reports</a>
                                            </li>
                                            <li>
                                            <a href="#">Send Message </a>
                                            </li>

                                            </ul>
                                            </div>'
                                        ),*/
                                        array(
                                            'position' => 'left',
                                            'classes' => array('visible-xs', 'visible-sm'),
                                            'html' => '
                                            <a href="/user-add.2.php" data-toggle="modal" class="btn btn-success">Print Preceptor Cards</a>

                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                                ?>

                            </section>
                            <!-- /section-main -->




                        </div>
                        <!-- /container -->
                    </div>
                    <!-- /layout -->

                    <!-- Modal -->
                    <div id="modal-refine" class="modal fade" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                    <h4 class="modal-title">Refine Results</h4>
                                </div>
                                <div class="modal-body">
                                    <section class="section section-refinement-options">
                                        <section class="section section-refinement-group section-refinement-group-first">
                                            <h3>Sort</h3>
                                            <select class="form-control">
                                                <option>Date</option>
                                                <option>Name A - Z</option>
                                            </select>
                                        </section>
                                        <section class="section section-refinement-group">
                                            <h3>Search</h3>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </section>
                                        <section class="section section-refinement-group">
                                            <h3>Name</h3>
                                            <div class="date-range">
                                                <input class="form-control" type="textbox">

                                                <div class="date-range__custom">
                                                    <div class="form-group">
                                                        <label>Start:</label>
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>End:</label>
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="section section-refinement-group">
                                            <h3>Completions</h3>
                                            <select class="form-control">
                                                <option selected="">All</option>
                                                <option>Assigned only</option>
                                                <option>Elective only</option>
                                                <option>Learning Events only</option>
                                                <option>Assessments only</option>
                                            </select>
                                        </section>
                                        <div style="height:80px">
                                            <!-- space to handle custom range's end date drop down -->
                                        </div>
                                    </section>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /modal -->


                    <?=createFooter($patterns['footer']);?>
                    <?=createPrototypeNav();?>
                    <?=createSiteScripts();?>

                    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

                    <!-- <script type="text/javascript" src="/scripts/dataTables.js"></script> -->
                    <script type="text/javascript" src="/scripts/prototype.datatables.js"></script>

                    <script type="text/javascript" src="https://cdn.datatables.net/s/bs/pdfmake-0.1.18,dt-1.10.10,b-1.1.0,b-colvis-1.1.0,b-flash-1.1.0,b-html5-1.1.0,b-print-1.1.0,fc-3.2.0,fh-3.1.0,r-2.0.0,se-1.1.0/datatables.min.js"></script>
                    <script>
                        (function(window, $) {
                            'use strict';

                            window.HealthStream = window.HealthStream || {};
                            var healthStream = window.HealthStream;

                            healthStream.studentSearchResults = {};


                            healthStream.studentSearchResults.resultsDataTable = function() {
                                var table = $('#resultsTable').DataTable({
                                    "paging": true,
                                    "pageLength": 50,
                                    "order": [
                                    [5, "asc"]
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
                                updateSelected();
                                expandMobileRow();
                                generateDynamicDataTitles();

//hide and show table columns
$('input.toggle-vis').on('change', function(e) {
// Get the column API object
var column = table.column($(this).attr('data-column'));

// Toggle the visibility
column.visible(!column.visible());
});

//select row on click
$('#resultsTable tbody').on('click', 'tr:not(.uncheckable-dt-row, .disabled)', function() {
    $(this).toggleClass('selected');

    var thisCheckbox = $(this).find(".checbox");
    thisCheckbox.prop("checked", !thisCheckbox.prop("checked"));

    if (thisCheckbox.prop("checked", false)) {
        $("#selectAllRows").parents("th").removeClass("checkable-dt-checked");
        $("#selectAllRows").prop("checked", false);
    }

    updateSelected();
});

//select row on checkbox click
$(".checkbox").change(function() {

    var $checkbox = $(this);

    if ($checkbox.prop('checked')) {
        $checkbox.parents("tr").addClass("selected");
    } else {
        $checkbox.parents("tr").removeClass("selected");
        $("#selectAllRows").parents("th").removeClass("checkable-dt-checked");
        $("#selectAllRows").prop("checked", false);
    }

});

//select or deselect all
$('#selectAllRows').change(function() {

    var $checkbox = $(this);

    if ($checkbox.prop('checked')) {
        $(".checkbox").prop("checked", true);
        $(".checkable-dt-check-all").addClass('checkable-dt-checked');
        table.rows().select();

    } else {
        $(".checkbox").prop("checked", false);
        $(".checkable-dt-check-all").removeClass('checkable-dt-checked');
        table.rows().deselect();
    }

});

//search reults on keyup
$('#searchField').keyup(function() {
    table.search($(this).val()).draw();
    $('h2 small').html($("#resultsTable_info").html());
});

//hide datatables standard info (we use the html later so we want it on the page)
$("#resultsTable_info").hide();

//place default info into Results header
$('h2 small').html($("#resultsTable_info").html());

//keep column menu open until user clicks off
$('body').click(function(event) {
    var target = $(event.target),
    targetInMenu = ($(target).parents('.checkbox-dropdown').length > 0);

    if (targetInMenu === true) {
        $('.dropdown.keep-open').on('hide.bs.dropdown', function() {
            return false;
        });

    } else {
        $('.dropdown.keep-open').removeClass("open");
    }
});






$("#select-all-mobile").click(function(){
    $(this).hide();
    $("#deselect-all-mobile").show();
    $(".checkbox").prop("checked", true);
    $(".checkable-dt-check-all").addClass('checkable-dt-checked');
    table.rows(":not(.disabled, .uncheckable-dt-row)").select();
    updateSelected();
});

$("#deselect-all-mobile").hide();

$("#deselect-all-mobile").click(function(){
    $(this).hide();
    $(".checkbox").prop("checked", false);
    $(".checkable-dt-check-all").removeClass('checkable-dt-checked');
    table.rows().deselect();
    $("#select-all-mobile").show();

    updateSelected();
});


//reinitialize jquery when table is redrawn (pagination)
$(".dataTable").on( 'draw.dt', function () {
    expandMobileRow();
    generateDynamicDataTitles();
    updateSelected(table);
});

function generateDynamicDataTitles() {
//dynamical add data-titles to each cell
$("#no-more-tables").each(function() {
    var nmtTable = $(this);
    var nmtHeadRow = nmtTable.find("thead tr");
    nmtTable.find("tbody tr").each(function() {
        var curRow = $(this);
        for (var i = 1; i < curRow.find("td").length; i++) {
            var rowSelector = "td:eq(" + i + ")";
            var headSelector = "th:eq(" + i + ")";
            curRow.find(rowSelector).attr('data-title', nmtHeadRow.find(headSelector).html());
        }
    });

});
}

function expandMobileRow(){
//show rest of cells on click in mobile
$(".expand-mobile-row").click(function(e) {
    e.stopPropagation();

    $(this).find('i').toggleClass('fa-caret-down fa-caret-up');
    if ($(this).parents("tr").children("td:visible").length == 2) {
        $(this).parents("tr").children("td:nth-of-type(2) ~ td").not('.actions').removeClass("hidden-sm hidden-xs");
        $(this).parents("tr").children("td:nth-of-type(1) ~ td").css('display', 'block');

    } else {
        $(this).parents("tr").children("td:nth-of-type(2) ~ td").addClass("hidden-sm hidden-xs");
        $(this).parents("tr").children("td:nth-of-type(2)").css('display', 'block');
        $(this).parents("tr").children("td:nth-of-type(2)").css('min-height', '30px');
    }
});
}


};

$(window).on('load', function() {
    healthStream.studentSearchResults.resultsDataTable();
});


}(window, jQuery));
</script>

<script>



    $(function() {
        $('.js-select2').select2();

        $(document).on('click', '.search-filter__toggle', function() {
            $(this).closest('.search-filter').toggleClass('search-filter--closed');
            $(window).resize();
        });

        $('#modal-filter').on('show.bs.modal', function() {
            $('.js-select2').each(function() {
                $(this).select2("destroy");
            });
            $(this).find('.modal-body').html($('.search-filters').html());
            $('.js-select2').select2();
            $('.search-filters').empty();
        });
        $('#modal-filter').on('hidden.bs.modal', function() {
            $('.js-select2').each(function() {
                $(this).select2("destroy");
            });
            $('.search-filters').append($('#modal-filter .modal-body').html());
            $('.js-select2').select2();
            $('#modal-filter .modal-body').empty();

        });
        $('.slat .btn').click(function(e) {
            e.preventDefault();
        });

      $('.branding a').click(function(e){
        e.preventDefault();
        window.location.href="/demo-start.php";
      });
    });
</script>
<?=createSiteEnd();?>