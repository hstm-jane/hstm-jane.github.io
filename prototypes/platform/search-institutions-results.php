<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Institution Search';
$patterns['focus']['title'] = 'Institution  Search';
$patterns['header']['mainNavActive'] = 'scheduling';

$patterns['search']['filters'] = array(
    array(
        "state" => 'static', // static / open / closed
        "header" => 'Institution Name',
        "controls" => array(
           '<div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" value="Search">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                </div>
            </div>',
        ),
    ),
    array(
        "state" => 'static', // static / open / closed
        "header" => 'City &amp; State',
        "controls" => array(
           '<div class="form-group">
                <label class="control-label">City</label>
                <input type="text" class="form-control" value="" placeholder="City">
            </div>',
            '<div class="form-group">
                <label class="control-label">State</label>
                <input type="text" class="form-control" value="" placeholder="State">
            </div>',
            '<div class="form-group">
                <button class="btn btn-sm btn-default">Apply</button>
            </div>',
        ),
    ),
    array(
        "state" => 'static', // static / open / closed
        "header" => 'ZIP Code',
        "controls" => array(
           '<div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" value="Search">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                </div>
            </div>',
        )
    ),
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
    <div class="layout layout-search">
        <div class="container">
            <section class="section section-main section-box">
                <div class="row">
                    <div class="col-md-3 hidden-xs hidden-sm">
                        <section class="section section-filters" data-equalize="layout-columns">
                            <h2>Refine Results</h2>
                            <?= createSearch($patterns['search']); ?>
                        </section>
                    </div>
                    <div class="col-md-9">
                        <section class="section section-results" data-equalize="layout-columns">
                            <section class="section section-results-header">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h2>Results <small></small></h2>
                                    </div>
                                </div>
                            </section>
                            <section class="section">
                                <table id="resultsTable" width="100%" class="table display table-hover dataTable no-footer">
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
                                            <th>Institution</th>
                                            <th>Address Line 1</th>
                                            <th class="hideOnLoad">Address Line 2</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Country</th>
                                            <th>ZIP Code</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                            $institutions = array(
                                                array('Institution A','Montgomery','Alabama'),
                                                array('Institution B','Juneau','Alaska'),
                                                array('Institution C','Phoneix','Arizona'),
                                                array('Institution D','Little Rock','Arkansas'),
                                                array('Institution E','Sacremento','California'),
                                                array('Institution F','Denver','Colorado'),
                                                array('Institution G','Hartford','Connecticut'),
                                                array('Institution H','Dover','Deleware'),
                                                array('Institution I','Tallahassee','Florida'),
                                                array('Institution J','Atlanta','Georgia'),
                                                array('Institution K','Honolulu','Hawaii'),
                                                array('Institution L','Boise','Idaho'),
                                                array('Institution M','Springfield','Illinois'),
                                                array('Institution N','Indianapolis','Indiana'),
                                                array('Institution O','Des Moines','Iowa'),
                                            );

                                            foreach ($institutions as $institution) {

                                        ?>
                                        <tr>
                                            <td class="checkable-dt">
                                                <div class="select">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td><?= $institution[0] ?></td>
                                            <td>1234 Main Street</td>
                                            <td></td>
                                            <td><?= $institution[1] ?></td>
                                            <td><?= $institution[2] ?></td>
                                            <td>United States</td>
                                            <td>12345</td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </section>
                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '
                                                <a href="/event-single-targeted-institutions.php" class="btn btn-success">Continue</a>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        <!-- /container -->
    </div>
    <!-- /layout -->

    <!-- Refine Modal -->
    <div id="modal-filter" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Refine Results</h4>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- / Refine Modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script src="/scripts/dataTables.js"></script>
<script src="/scripts/prototype.datatables.js"></script>
<script src="/scripts/prototype.search-filters.js"></script>

<script>
    (function(window, $) {
        'use strict';

        window.HealthStream = window.HealthStream || {};
        var healthStream = window.HealthStream;

        healthStream.institutionSearchResults = {};

        healthStream.institutionSearchResults.resultsDataTable = function() {
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

            //reinitialize jquery when table is redrawn (pagination)
            $(".dataTable").on( 'draw.dt', function () {
               expandMobileRow();
               generateDynamicDataTitles();
               updateSelected(table);
            });

        };

        $(window).on('load', function() {
            healthStream.institutionSearchResults.resultsDataTable();
        });

    }(window, jQuery));
</script>

<?= createSiteEnd(); ?>

