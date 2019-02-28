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

$actions_html = '
<td class="actions hidden-xs hidden-sm grading-actions">
    <div class="numeric-grade-actions">
        <div style="position: relative; display:inline-block;">
            <input type="text" maxlength="3"  class="input-sm form-control numeric-grade-input">
            <span class="status-icon"></span>
        </div>
        <input type="button" class="btn btn-sm btn-default no-show-btn" name="Grading" value="No Show">
    </div>

</td>';

$mobile_actions_html = '
<div class="no-select mobile-actions numeric-grade-actions visible-xs visible-sm pull-right">
    <span class="actions-dropdown">
        <a href="#" class="btn no-select btn-default btn-sm pull-right dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-fw no-select fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu no-select dropdown-menu-right">
            <li class="no-select expand-mobile-row"><a href="#" class="no-select">View More Info</a></li>
            <li><a class="no-show-btn" href="#">No Show</a></li>
        </ul>
    </span>
    <div>
        <input type="text" maxlength="3" class="form-control input-sm numeric-grade-input">
    </div>
</div>';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout layout-subnav layout-min">
    <div class="container">
        <section class="section section-main section-box">
            <div class="layout-subnav-container">
                <div class="layout-subnav-nav">
                    <div class="layout-subnav-nav-mobile">
                        <span><i class="fa fa-caret-down"></i>
                            <span>Grading</span>
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
                            <a href="/event-single-resources.php">Resources &amp;&nbsp; Personnel<i class="fa fa-chevron-right"></i></a>
                        </li>
                        <li>
                            <a href="/event-single-roster.php">Roster<i class="fa fa-chevron-right"></i></a>
                        </li>
                        <li>
                            <a href="/event-single-grading.php">Grading<i class="fa fa-chevron-right"></i></a>
                        </li>
                        <li>
                            <a href="/event-single-message.php">Send Message<i class="fa fa-chevron-right"></i></a>
                        </li>
                        <li class="active">
                            <a href="/event-single-content.php">Content<i class="fa fa-chevron-right"></i></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="/event-series-settings.php">Add Series</a>
                        </li>
                    </ul>
                </div>
                <!-- /subnav -->
                <div class="layout-subnav-content new-data-table-styles-wrapper">
                    <section class="section">
                        <h2 class="page-header">Grading</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <h3 id="studentHeader">Students <small id="resultsNumber"></small></h3>
                            </div>
                            <div class="col-md-6">
                                <h3 id="passingGrade"><small>Passing Grade: 80</small></h3>
                            </div>
                        </div>
                        <div class="no-more-tables">
                            <table id="studentTable" width="100%" class="table table-no-select display table-hover dataTable no-footer">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Department</th>
                                        <th>Institution</th>
                                        <th class="unsortable hidden-xs actions">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>admin4, Test Samual L Jackson
                                            <?= $mobile_actions_html  ?>
                                        </td>
                                        <td>testadmin4</td>
                                        <td>002-Cardiologist</td>
                                        <td>002 - Cardiology</td>
                                        <?= $actions_html ?>
                                    </tr>
                                    <tr>
                                        <td>Analyzer, Alan
                                            <?= $mobile_actions_html  ?>
                                        </td>
                                        <td>testadmin4</td>
                                        <td>002-Cardiologist</td>
                                        <td>002 - Cardiology</td>
                                        <?= $actions_html ?>
                                    </tr>
                                    <tr>
                                        <td>Analyzer, Alan A
                                            <?= $mobile_actions_html  ?>
                                        </td>
                                        <td>ba1</td>
                                        <td>Other Clinical</td>
                                        <td>001-Radiologist</td>
                                        <?= $actions_html ?>
                                    </tr>
                                    <tr>
                                        <td>Austin, Rachael
                                            <?= $mobile_actions_html  ?>
                                        </td>
                                        <td>RAustin</td>
                                        <td>RN - Direct Patient Care</td>
                                        <td>04763-Physician</td>
                                        <?= $actions_html ?>
                                    </tr>
                                    <tr>
                                        <td>Bailey, Eric
                                            <?= $mobile_actions_html ?>
                                        </td>
                                        <td>ebailey</td>
                                        <td>Radiology</td>
                                        <td>02468-Registered Nurse</td>
                                        <?= $actions_html ?>
                                    </tr>
                                    <tr>
                                        <td>Bankhead, Wanda
                                            <?= $mobile_actions_html ?>
                                        </td>
                                        <td>wbankhead1</td>
                                        <td>EMT-I</td>
                                        <td>002-Cardiologist</td>
                                        <?= $actions_html ?>
                                    </tr>
                                    <tr>
                                        <td>Banner, Bruce
                                            <?= $mobile_actions_html ?>
                                        </td>
                                        <td>preview3</td>
                                        <td>Other Clinical</td>
                                        <td>001-Radiologist</td>
                                        <?= $actions_html ?>
                                    </tr>
                                    <tr>
                                        <td>Barkley, Chris
                                            <?= $mobile_actions_html ?>
                                        </td>
                                        <td>cbarkley</td>
                                        <td>Radiology</td>
                                        <td>04763-Physician</td>
                                        <?= $actions_html ?>
                                    </tr>
                                    <tr>
                                        <td>Bartol, Rita
                                            <?= $mobile_actions_html ?>
                                        </td>
                                        <td>rbartol</td>
                                        <td>Other Clinical</td>
                                        <td>02468-Registered Nurse</td>
                                        <?= $actions_html ?>
                                    </tr>
                                    <tr>
                                        <td>Barton, Clint
                                            <?= $mobile_actions_html ?>
                                        </td>
                                        <td>preview7</td>
                                        <td>Other Clinical</td>
                                        <td>002-Cardiologist</td>
                                        <?= $actions_html ?>
                                    </tr>
                                    <tr>
                                        <td>Bickel, Steve
                                            <?= $mobile_actions_html ?>
                                        </td>
                                        <td>sbickel</td>
                                        <td>Physician</td>
                                        <td>001-Radiologist</td>
                                        <?= $actions_html ?>
                                    </tr>
                                    <tr>
                                        <td>Bluthardt, Shelby
                                            <?= $mobile_actions_html ?>
                                        </td>
                                        <td>sbluthardt</td>
                                        <td>RN - Direct Patient Care</td>
                                        <td>04763-Physician</td>
                                        <?= $actions_html ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'position' => 'left',
                                    'classes' => array('hidden-xs'),
                                    'html' => '
                                        <a href="#" class="btn btn-success js-grading-save">Save</a>
                                        <a href="#" class="btn btn-success js-grading-submit">Finalize and Submit to AAP</a>
                                        <a href="#" class="btn btn-default">Cancel</a>
                                    ',
                                ),
                                array(
                                    'position' => 'left',
                                    'classes' => array('visible-xs'),
                                    'html' => '
                                        <a href="#" class="btn btn-success js-grading-save">Save</a>
                                        <a href="#" class="btn btn-success js-grading-submit">Submit to AAP</a>
                                        <a href="#" class="btn btn-default">Cancel</a>
                                    ',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>

                    <div class="form-modified">Last Modified: Mar 3, 2016 at 6:23 AM ET by demo1</div>

                </div>
                <!-- /content -->
            </div>
        </section>
    </div>
</div>
<!-- /layout -->

<?php
include MODAL_MESSAGE_GROUP;
include 'includes/patterns/modals/_modal-grading-save-submit.php';
?>
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createDatatableScripts(); ?>
<script type="text/javascript" src="/scripts/datatables.js"></script>
<script type="text/javascript" src="/scripts/prototype.datatables.js"></script>
<script>
    (function(window, $) {
        'use strict';
        window.HealthStream = window.HealthStream || {};
        var healthStream = window.HealthStream;
        healthStream.studentSearchResults = {};
        healthStream.studentSearchResults.resultsDataTable = function() {

            var pTable = $('#studentTable').DataTable({
                "paging": true,
                "order": [
                    [0, "asc"]
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

            expandMobileRow();
            generateDynamicDataTitles();
            customizeColumns(pTable);

            keepDropDownMenuOpen();
            updateTableHeaderCounts();
            //place default info into Results header
            function updateTableHeaderCounts() {
                $(".dataTables_info").hide();
                $('#studentHeader #resultsNumber').html($("#studentTable_info").html());

            }


            //reinitialize jquery when table is redrawn (pagination)
            $(".dataTable").on('draw.dt', function() {
                expandMobileRow();
                generateDynamicDataTitles();
                updateTableHeaderCounts();
            });
        };

        $(".numeric-grade-input").change(function() {
            var gradeValue = $(this).val(),
                parentRow = $(this).parents("tr");

            parentRow.find(".no-show-btn").removeClass("active");
            parentRow.find(".numeric-grade-input").attr("placeholder", "");
            parentRow.find(".numeric-grade-input").val(gradeValue);

            if ($(this).val() >= 70) {
                parentRow.find(".numeric-grade-actions").addClass("passing-value");
                parentRow.find(".numeric-grade-actions").removeClass("failing-value");

            } else if ($(this).val() < 70 && $(this).val() !== "") {
                parentRow.find(".numeric-grade-actions").addClass("failing-value");
                parentRow.find(".numeric-grade-actions").removeClass("passing-value");

            } else {
                parentRow.find(".numeric-grade-actions").removeClass("passing-value failing-value");
            }
        });

        //when no-show, remove grades and mark on both mobile and large screens
        $(".no-show-btn").click(function() {
            var parentRow = $(this).parents("tr");

            if ($(this).hasClass("active")) {
                parentRow.find(".numeric-grade-input").val("");
                parentRow.find(".numeric-grade-input").attr("placeholder", "");
            }else {
                parentRow.find(".numeric-grade-actions").find(".numeric-grade-input").attr("placeholder", "N/S");
                parentRow.find(".numeric-grade-actions").find(".numeric-grade-input").val("");
            }

            parentRow.find(".numeric-grade-actions").removeClass("passing-value failing-value");
            parentRow.find(".no-show-btn").toggleClass("active");
            parentRow.find(".mobile-actions .no-show-btn").parent().toggleClass("active");

        });

        //validation
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


        $(window).on('load', function() {
            healthStream.studentSearchResults.resultsDataTable();
        });
    }(window, jQuery));
</script>
<?= createSiteEnd(); ?>