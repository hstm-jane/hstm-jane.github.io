<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Reg. M.';
$patterns['focus']['title'] = 'Reg. M.';
$patterns['header']['mainNavActive'] = 'scheduling';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
    <style>
    .wl-text {
        display: none;
    }

    .pr-text {
        display: none;
    }

    .ru-text {
        display: none;
    }

    .wl-text1 {
        display: none;
    }

    .pr-text1 {
        display: none;
    }

    .ru-text1 {
        display: none;
    }
    </style>
    <!-- see who is registered, selected, waitlisted, pending approval, make changes, and grade -->

    <div class="layout layout-min">
        <div class="container">
            <section class="section section-main section-box">
                <section class="registration-selection" id="event-resources">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="resource-picker well" style="margin-top:25px;margin-bottom:0px; border: 1px solid #F2F2F2 !important; background-color: #F9F9F9">
                                <div class="resource-picker-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control resource-picker-input input-md" placeholder="Add Users" data-type="groups" tabindex="4">
                                        <span class="btn-success input-group-addon" style="color:#fff; border: none" data-toggle="modal" data-target="#modal-personnel"><i class="fa fa-search"></i></span>
                                    </div>
                                </div>
                                <!-- start -->
                                <div class="resource-picker-overlay active">
                                    <div class="resource-picker-holder">

                                        <?php

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                            ),
                                            'title' => 'Booker T',
                                            'meta' => array(
                                                array(
                                                    'label' => 'User ID:',
                                                    'value' => 'tbooker',
                                                )
                                            ),
                                            'action' => array(
                                                'type' => 'custom',
                                                'content' => '
                                                    <a class="btn btn-sm btn-default btn-dropdown wl" style="margin-right: 84px;" href="#" data-id="G0" data-addons=""><i class="fa fa-plus"></i> W</a>
                                                    <a class="btn btn-sm btn-default btn-dropdown pr" style="margin-right: 42px;" href="#" data-id="G0" data-addons=""><i class="fa fa-plus"></i> P</a>
                                                    <a class="btn btn-sm btn-default btn-dropdown resource-picker-add ru" href="#" data-id="G0" data-addons=""><i class="fa fa-plus"></i> R</a>
                                                ',
                                            )
                                        );
                                        echo createSlat($slat);

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                            ),
                                            'title' => 'Willie Mac',
                                            'meta' => array(
                                                array(
                                                    'label' => 'User ID:',
                                                    'value' => 'wmac',
                                                )
                                            ),
                                            'action' => array(
                                                'type' => 'custom',
                                                'content' => '
                                                    <a class="btn btn-sm btn-default btn-dropdown wl" style="margin-right: 84px;" href="#" data-id="G0" data-addons=""><i class="fa fa-plus"></i> W</a>
                                                    <a class="btn btn-sm btn-default btn-dropdown pr" style="margin-right: 42px;" href="#" data-id="G0" data-addons=""><i class="fa fa-plus"></i> P</a>
                                                    <a class="btn btn-sm btn-default btn-dropdown resource-picker-add ru" href="#" data-id="G0" data-addons=""><i class="fa fa-plus"></i> R</a>
                                                ',
                                            )
                                        );
                                        echo createSlat($slat);

                                        ?>

                                    </div>
                                    <span class="wl-text" style="font-size: 12px;color:grey;margin-top: 3px;float: left !important">Add user to waitlist</span>
                                    <span class="pr-text" style="font-size: 12px;color:grey;margin-top: 3px;float: left !important">Add user to pending registration</span>
                                    <span class="ru-text" style="font-size: 12px;color:grey;margin-top: 3px;float: left !important">Add user to registered users</span>
                                    <div class="resource-picker-clear">
                                        <a href="#">Close Results</a>
                                    </div>
                                </div>
                                <!-- end -->
                                <div class="resource-picker-overlay">
                                    <div class="resource-picker-holder"></div>
                                    <div class="resource-picker-clear">
                                        <a href="#">Close Results</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--  <hr> -->
                <section class="section">
                    <div class="container">
                        <h2>Registered <small>See who is Registered</small></h2>
                        <div class="row">
                            <div class="col-md-12 well">
                                <div class="table-responsive" id="pp-table-registered">
                                    <table id="pp-registered" class="table table-bordered registered" style="background-color: #fff" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Remove</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>User ID</th>
                                                <th>Dept.</th>
                                                <th>Institution</th>
                                                <th>Reg. Date</th>
                                                <th>Reg. By</th>
                                                <td class="text-center print-hidden">Add To:</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>Susy Q</td>
                                                <td>active</td>
                                                <td>SQuoozie</td>
                                                <td>P1</td>
                                                <td>Healthcare</td>
                                                <td>10/2/2015</td>
                                                <td></td>
                                                <td class="text-center print-hidden">
                                                    <select class="addTo" name="options">
                                                        <option value="" selected>Add To</option>
                                                        <option value="registered">Registered</option>
                                                        <option value="waitlisted">Waitlisted</option>
                                                        <option value="pending">Pending</option>
                                                    </select>
                                                    <!-- <input type="checkbox" class="checkbox"><label>Check ME!</label> -->
                                                </td>
                                            </tr>
                                            <tr style="background-color:#AEEBFF">
                                                <td></td>
                                                <td>John Smith</td>
                                                <td>active</td>
                                                <td>jsmith</td>
                                                <td>P0</td>
                                                <td>Healthcare</td>
                                                <td>10/2/2015</td>
                                                <td></td>
                                                <td class="text-center print-hidden">
                                                    <select class="addTo" name="options">
                                                        <option value="" selected>Add To</option>
                                                        <option value="registered">Registered</option>
                                                        <option value="waitlisted">Waitlisted</option>
                                                        <option value="pending">Pending</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table responsive   -->
                            </div>
                        </div>
                    </div>
                </section>
                <hr>
                <section class="section">
                    <div class="container">
                        <h2>Waitlisted <small>See who is Waitlisted</small></h2>
                        <div class="row">
                            <div class="col-md-12 well">
                                <div class="table-responsive" id="pp-table-waitlisted">
                                    <table id="pp-waitlisted" class="table table-bordered waitlisted" style="background-color: #fff" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Remove</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>User ID</th>
                                                <th>Dept.</th>
                                                <th>Institution</th>
                                                <th>Reg. Date</th>
                                                <th>Reg. By</th>
                                                <td class="text-center print-hidden">Add To:</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>Mike Williams</td>
                                                <td>active</td>
                                                <td>mwilliams</td>
                                                <td>P3</td>
                                                <td>Healthcare</td>
                                                <td>10/2/2015</td>
                                                <td></td>
                                                <td class="text-center print-hidden">
                                                    <select class="addTo" name="options">
                                                        <option value="" selected>Add To</option>
                                                        <option value="registered">Registered</option>
                                                        <option value="waitlisted">Waitlisted</option>
                                                        <option value="pending">Pending</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table responsive   -->
                            </div>
                        </div>
                    </div>
                </section>
                <hr>
                <section class="section">
                    <div class="container">
                        <h2>Pending Approval <small>See who is Pending Approval</small></h2>
                        <div class="row">
                            <div class="col-md-12 well">
                                <div class="table-responsive" id="pp-table-pending">
                                    <table id="pp-pending" class="table table-bordered pending" style="background-color: #fff" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Remove</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>User ID</th>
                                                <th>Dept.</th>
                                                <th>Institution</th>
                                                <th>Reg. Date</th>
                                                <th>Reg. By</th>
                                                <td class="text-center print-hidden">Add To:</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>Bill Bones</td>
                                                <td>active</td>
                                                <td>bbones</td>
                                                <td>P4</td>
                                                <td>Healthcare</td>
                                                <td>10/2/2015</td>
                                                <td></td>
                                                <td class="text-center print-hidden">
                                                    <select class="addTo" name="options-four">
                                                        <option value="" selected>Add To</option>
                                                        <option value="registered">Registered</option>
                                                        <option value="waitlisted">Waitlisted</option>
                                                        <option value="pending">Pending</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table responsive   -->
                            </div>
                        </div>
                    </div>
                </section>

                <?php
                    $stickybar = array(
                        'sets' => array(
                            array(
                                'html' => '
                                    <a href="/grading-management" class="btn btn-success">Grade Users</a>
                                    <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                                ',
                            ),
                        ),
                    );
                    echo createStickybar($stickybar);
                ?>

            </section>
        </div>
    </div>
    <!-- /layout -->
    <!-- Modal -->
    <div id="modal-example" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-success">Success</a>
                    <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->
    <?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>

        <script>
        // on hover show hidden text inside select2
        $('.wl').hover(function() {
            $('.wl-text').toggle(100, 'linear');
        });
        $('.pr').hover(function() {
            $('.pr-text').toggle(100, 'linear');
        });
        $('.ru').hover(function() {
            $('.ru-text').toggle(100, 'linear');
        });

        // disable select options for each table
        $("#pp-registered tbody tr td select.addTo option").each(function() {
            if ($(this).val().toLowerCase() == "registered") {
                $(this).attr("disabled", "disabled").siblings().removeAttr("disabled");
            }
        });
        $("#pp-waitlisted tbody tr td select.addTo option").each(function() {
            if ($(this).val().toLowerCase() == "waitlisted") {
                $(this).attr("disabled", "disabled").siblings().removeAttr("disabled");
            }
        });
        $("#pp-pending tbody tr td select.addTo option").each(function() {
            if ($(this).val().toLowerCase() == "pending") {
                $(this).attr("disabled", "disabled").siblings().removeAttr("disabled");
            }
        });
        // ADD To: each table
        var val = $('table.table tbody tr td select.addTo').find('select.addTo').val();



        // $('#pp-registered tbody tr td select.addTo option:contains(var)')
        // console.log(tableVal);
        // $("table.table tbody tr td select.addTo option:contains(var)").attr("disabled","disabled");
        //$("select").prop("selectedIndex",-1)

        $('table.table tbody tr td select.addTo').on('change', function() {
            var val = $(this).val();
            var row = $(this).closest('tr').clone();
            var table = $('#pp-' + val).DataTable();
            var oldVal = $(this).closest('tr');
            //console.log(val);
            oldVal.remove();
            $('.' + val + ' tbody').append(row);
            val.fnGetData(row);
            val.remove();
            // disable select options for each table
            table.row.add(val).draw();
        });

        $('table.table tbody tr td div.text-center #remove-pp').on('click', function() {
            $(this).parent().parent().parent().closest('tr').remove();
        });

        // print, csv, pdf, copy, excel



        // Tables
        $('#pp-registered').dataTable({
            // "deferRender": true,
            dom: 'T<"clear">lfrtip',
            tableTools: {
                sSwfPath: "src/plugins/TableTools/swf/copy_csv_xls_pdf.swf",
                "aButtons": [
                    //      {
                    //     "sExtends": "copy",
                    //      "mColumns": [1, 2, 3, 4, 5, 6, 7]
                    // },
                    // {
                    //     "sExtends": "csv",
                    //      "mColumns": [1, 2, 3, 4, 5, 6, 7]
                    // },

                    // {
                    //     "sExtends": "print",
                    //      "mColumns": [1, 2, 3, 4, 5, 6, 7]
                    // },
                    // "xls",
                    // {
                    //     "sExtends": "pdf",
                    //     "mColumns": [1, 2, 3, 4, 5, 6, 7],
                    //     "sPdfOrientation": "landscape",
                    //     "sPdfMessage": "Your custom message would go here."
                    // },

                ]
            },
            /* Commented out the json request code and uncommented ajax reuest to arrays.txt file to show functionality */
            // "ajax": "/server.php?dt=true&action=search&type=people&q=j&selected=",

            "order": [
                [1, "asc"]
            ],
            // Add checkboxes to left column
            "aoColumnDefs": [{
                // remove sorting from column [0] left column
                'bSortable': true,
                "aTargets": [0],
                // Didn't know how to center checkboxes, so I wrapped them with a container and added text-center class to the container
                "mRender": function(data, type, full) {
                    if (data == "1") {
                        return '<div class=\"text-center\"><a href=\"#remove-pp\" id=\"remove-pp\" class=\"remove-pp btn btn-xs btn-danger\" value=\"' + data + '\"><i class=\"fa fa-times\"></i></a></div>';
                    } else {
                        return '<div class=\"text-center\"><a href=\"#remove-pp\" id=\"remove-pp\" class=\"remove-pp btn btn-xs btn-danger\" value=\"' + data + '\"><i class=\"fa fa-times\"></i></a></div>';
                    }
                }
            }],

        });
        $('#pp-selected').dataTable({
            // "deferRender": true,
            dom: 'T<"clear">lfrtip',
            tableTools: {
                sSwfPath: "src/plugins/TableTools/swf/copy_csv_xls_pdf.swf",
                "aButtons": [
                    //      {
                    //     "sExtends": "copy",
                    //      "mColumns": [1, 2, 3, 4, 5, 6, 7]
                    // },
                    // {
                    //     "sExtends": "csv",
                    //      "mColumns": [1, 2, 3, 4, 5, 6, 7]
                    // },

                    // {
                    //     "sExtends": "print",
                    //      "mColumns": [1, 2, 3, 4, 5, 6, 7]
                    // },
                    // "xls",
                    // {
                    //     "sExtends": "pdf",
                    //     "mColumns": [1, 2, 3, 4, 5, 6, 7],
                    //     "sPdfOrientation": "landscape",
                    //     "sPdfMessage": "Your custom message would go here."
                    // },

                ]
            },
            /* Commented out the json request code and uncommented ajax reuest to arrays.txt file to show functionality */
            // "ajax": "/server.php?dt=true&action=search&type=people&q=j&selected=",

            "order": [
                [1, "asc"]
            ],
            // "processing": true,
            //"serverSide": true,
            // Add checkboxes to left column
            "aoColumnDefs": [{
                // remove sorting from column [0] left column
                'bSortable': true,
                "aTargets": [0],
                // Didn't know how to center checkboxes, so I wrapped them with a container and added text-center class to the container
                "mRender": function(data, type, full) {
                    if (data == "1") {
                        return '<div class=\"text-center\"><a href=\"#remove-pp\" id=\"remove-pp\" class=\"remove-pp btn btn-xs btn-danger\" value=\"' + data + '\"><i class=\"fa fa-times\"></i></a></div>';
                    } else {
                        return '<div class=\"text-center\"><a href=\"#remove-pp\" id=\"remove-pp\" class=\"remove-pp btn btn-xs btn-danger\" value=\"' + data + '\"><i class=\"fa fa-times\"></i></a></div>';
                    }
                }
            }],

        });
        $('#pp-waitlisted').dataTable({
            // "deferRender": true,
            dom: 'T<"clear">lfrtip',
            tableTools: {
                sSwfPath: "src/plugins/TableTools/swf/copy_csv_xls_pdf.swf",
                "aButtons": [
                    //      {
                    //     "sExtends": "copy",
                    //      "mColumns": [1, 2, 3, 4, 5, 6, 7]
                    // },
                    // {
                    //     "sExtends": "csv",
                    //      "mColumns": [1, 2, 3, 4, 5, 6, 7]
                    // },

                    // {
                    //     "sExtends": "print",
                    //      "mColumns": [1, 2, 3, 4, 5, 6, 7]
                    // },
                    // "xls",
                    // {
                    //     "sExtends": "pdf",
                    //     "mColumns": [1, 2, 3, 4, 5, 6, 7],
                    //     "sPdfOrientation": "landscape",
                    //     "sPdfMessage": "Your custom message would go here."
                    // },

                ]
            },
            /* Commented out the json request code and uncommented ajax reuest to arrays.txt file to show functionality */
            //"ajax": "/server.php?dt=true&action=search&type=people&q=j&selected=",

            "order": [
                [1, "asc"]
            ],
            //"processing": true,
            //"serverSide": true,
            // Add checkboxes to left column
            "aoColumnDefs": [{
                // remove sorting from column [0] left column
                'bSortable': true,
                "aTargets": [0],
                // Didn't know how to center checkboxes, so I wrapped them with a container and added text-center class to the container
                "mRender": function(data, type, full) {
                    if (data == "1") {
                        return '<div class=\"text-center\"><a href=\"#remove-pp\" id=\"remove-pp\" class=\"remove-pp btn btn-xs btn-danger\" value=\"' + data + '\"><i class=\"fa fa-times\"></i></a></div>';
                    } else {
                        return '<div class=\"text-center\"><a href=\"#remove-pp\" id=\"remove-pp\" class=\"remove-pp btn btn-xs btn-danger\" value=\"' + data + '\"><i class=\"fa fa-times\"></i></a></div>';
                    }
                }
            }],

        });
        $('#pp-pending').dataTable({
            // "deferRender": true,
            dom: 'T<"clear">lfrtip',
            tableTools: {
                sSwfPath: "src/plugins/TableTools/swf/copy_csv_xls_pdf.swf",
                "aButtons": [
                    //      {
                    //     "sExtends": "copy",
                    //      "mColumns": [1, 2, 3, 4, 5, 6, 7]
                    // },
                    // {
                    //     "sExtends": "csv",
                    //      "mColumns": [1, 2, 3, 4, 5, 6, 7]
                    // },

                    // {
                    //     "sExtends": "print",
                    //      "mColumns": [1, 2, 3, 4, 5, 6, 7]
                    // },
                    // "xls",
                    // {
                    //     "sExtends": "pdf",
                    //     "mColumns": [1, 2, 3, 4, 5, 6, 7],
                    //     "sPdfOrientation": "landscape",
                    //     "sPdfMessage": "Your custom message would go here."
                    // },

                ]
            },
            /* Commented out the json request code and uncommented ajax reuest to arrays.txt file to show functionality */
            //"ajax": "/server.php?dt=true&action=search&type=people&q=j&selected=",

            "order": [
                [1, "asc"]
            ],
            //"processing": true,
            //"serverSide": true,
            // Add checkboxes to left column
            "aoColumnDefs": [{
                // remove sorting from column [0] left column
                'bSortable': true,
                "aTargets": [0],
                // Didn't know how to center checkboxes, so I wrapped them with a container and added text-center class to the container
                "mRender": function(data, type, full) {
                    if (data == "1") {
                        return '<div class=\"text-center\"><a href=\"#remove-pp\" id=\"remove-pp\" class=\"remove-pp btn btn-xs btn-danger\" value=\"' + data + '\"><i class=\"fa fa-times\"></i></a></div>';
                    } else {
                        return '<div class=\"text-center\"><a href=\"#remove-pp\" id=\"remove-pp\" class=\"remove-pp btn btn-xs btn-danger\" value=\"' + data + '\"><i class=\"fa fa-times\"></i></a></div>';
                    }
                }
            }],

        });

        (function(window, $) {
            'use strict';


            window.HealthStream = window.HealthStream || {};
            var healthStream = window.HealthStream;

            healthStream.peoplepicker = {
                memory: {
                    event: [],
                    resources: {}
                },
                init: function() {
                    var T = this;

                    $('.input-group-addon').on('click', function() {
                        $(this).siblings('input').trigger('focus');
                    });

                    $('#add-pp').hide();

                    // Event Resource Pickers
                    $('#event-resources')
                        .on('click', '.resource-picker-type li', function() {
                            var $el = $(this),
                                $rp = $el.closest('.resource-picker'),
                                type = $(this).text();
                            $rp.find('.resource-picker-type button span').html(type);
                            $rp.find('.resource-picker-input').attr('data-type', type.toLowerCase()).focus().trigger('keyup');
                        })
                        .on('keyup', '.resource-picker-input', function() {
                            var $el = $(this),
                                $rp = $el.closest('.resource-picker'),
                                resources;

                            $rp.find('.resource-picker-overlay').removeClass('active');
                            clearTimeout(window.resourcePicker);
                            if ($el.val().length > 0) {
                                window.resourcePicker = setTimeout(function() {
                                    T.getResources($el, $rp);
                                }, 300);
                            }
                        })
                        .on('click', '.resource-picker-add', function(e) {
                            //$('#pp-table-section').show(); // add datatable
                            // $('#pp-register-button').show(); // show register button
                            //$('.rth-btn-add[data-id="' + $(this).attr('data-id') + '"]').trigger('click');
                            var $el = $(this),
                                $rp = $el.closest('.resource-picker'),
                                resources = [$el.attr('data-id')],
                                addons = $el.attr('data-addons').split(',').filter(function(e) {
                                    return e
                                });

                            //$.merge(resources, addons);
                            // T.setResources(resources);
                            $(this).addClass('disabled');
                            e.preventDefault();
                        })
                        .on('click', '.resource-picker-remove', function(e) {
                            // $('#pp-table-section').hide(); //remove datatable
                            // $('#pp-register-button').hide(); //remove register button
                            $('.rth-btn-remove[data-id="' + $(this).attr('data-id') + '"]').trigger('click');
                            $(this).addClass('disabled');
                            e.preventDefault();
                        })
                        .on('click', '.resource-picker-clear', function(e) {
                            var $el = $(this),
                                $rp = $el.closest('.resource-picker');
                            $rp.find('.resource-picker-input').val('').trigger('keyup');
                            $('#resource-picker-backdrop').hide();
                            e.preventDefault();
                        })
                        .on('click', '.rth-detail', function(e) {
                            T.getResourceModal($(this));
                            e.preventDefault();
                        })
                        .on('click', '.rth-block div', function() {
                            $(this).closest('tr').find('.rth-detail').trigger('click');
                        })
                        .on('click', '.rth-btn-remove', function(e) {
                            var resources = [$(this).attr('data-id')],
                                $nested = $(this).closest('.rth-item').nextUntil('.rth-item');

                            $($nested).each(function() {
                                resources.push($(this).find('.rth-options button').attr('data-id'));
                            });
                            T.removeResources(resources);
                            e.preventDefault();
                        });

                    // Resource Picker Backdrop
                    $('#resource-picker-backdrop').click(function() {
                        $('.resource-picker-clear').trigger('click');
                    });

                },
                getResources: function($el, $rp) {
                    var m = this.memory.resources,
                        selected = [];
                    for (var id in m) {
                        if (m.hasOwnProperty(id)) {
                            selected.push(id)
                        }
                    }
                    $.getJSON('/wizard-server.php?', {
                        action: 'search',
                        type: $el.attr('data-type'),
                        q: $el.val(),
                        selected: selected.join(',')
                    }, function(data) {
                        $rp.find('.resource-picker-overlay').addClass('active');
                        $rp.find('.resource-picker-holder').html(data.html).scrollTop(0);
                        //$('#resource-picker-backdrop').show();


                    });
                },
                setResource: function(id, start, end) {
                    if (typeof start !== 'undefined' && typeof end !== 'undefined') {
                        this.memory.resources[id] = [
                            [start, end]
                        ];
                    } else {
                        this.memory.resources[id] = [];
                    }
                    // this.getResourcesTable();
                },
                setResources: function(resources) {
                    var T = this;
                    $(resources).each(function() {
                        if (typeof T.memory.resources[this] === 'undefined') {
                            T.memory.resources[this] = [];
                        }
                    });
                    // this.getResourcesTable();
                },
                removeResource: function(id) {
                    delete this.memory.resources[id];
                    // this.getResourcesTable();
                },
                removeResources: function(ids) {
                    var m = this.memory.resources;
                    $(ids).each(function() {
                        delete m[this];
                    });
                    //this.getResourcesTable();
                },


            };

            $(window).on('load', function() {
                healthStream.peoplepicker.init();
            });
        }(window, jQuery));
        </script>
        <?= createSiteEnd(); ?>

