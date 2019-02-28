<?php

include "includes/helpers.php";


$options = json_decode('{
    "head": {
        "title" : "Welcome to Bright Ideas"
    },
    "header": {
        "nav_main_active" : "manage"
    },
    "focus": {
        "title": "User Administration",
        "action": {

        },
        "meta": [

        ]
    }
}',true);

include_site_start($options);
$patterns['header']['mainNavActive'] = 'manage';
echo createHeader($patterns['header']);
$focus = array( 'title' => 'User Administration', ); echo createFocus($focus);
?>

    <div class="layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="section section-main section-box" data-equalize="layout-columns">
                        <div class="container">
                            <section class="section">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Department #</th>
                                                <th style="text-align:center"> Action</th>
                                            </tr>
                                            <tr>
                                                <td>Anna</td>
                                                <td>Pitt</td>
                                                <td>100000</td>
                                                <td align="center">
                                                    <button class="btn btn-default btn-sm" type="button" data-toggle="modal" data-target="#modal-edit-users">
                                                        Edit User
                                                    </button>
                                                    <button class="btn btn-danger btn-sm" name="submit" type="submit">
                                                        Delete
                                                    </button>
                                                </td>
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
                                                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal-add-users">
                                                    Add New User
                                                </button>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </div>
                    </section>
                    <!-- /section-main -->
                </div>
                <!-- /column -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /layout -->
    <div id="modal-edit-users" class="modal modal-lg fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 id="" class="modal-title">Edit User</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group ">
                                    <label class="control-label " for="name1">
                                        Nickname
                                    </label>
                                    <input class="form-control" id="name1" name="name1" type="text" />
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="name2">
                                        First Name
                                    </label>
                                    <input class="form-control" id="name2" name="name2" type="text" />
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="name">
                                        Middle Initial
                                    </label>
                                    <input class="form-control" id="name" name="name" type="text" />
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="name3">
                                        Last Name
                                    </label>
                                    <input class="form-control" id="name3" name="name3" type="text" />
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="tel">
                                        Phone Number
                                    </label>
                                    <input class="form-control" id="tel" name="tel" type="text" />
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="number">
                                        Employee ID Number
                                    </label>
                                    <input class="form-control" id="number" name="number" type="text" />
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="select">
                                        Department Number
                                    </label>
                                    <select class="select form-control" id="select" name="select">
                                        <option value="First Choice">
                                            First Choice
                                        </option>
                                        <option value="Second Choice">
                                            Second Choice
                                        </option>
                                        <option value="Third Choice">
                                            Third Choice
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="text">
                                        Password
                                    </label>
                                    <input class="form-control" id="text" name="text" type="text" />
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="subject">
                                        Confirm Password
                                    </label>
                                    <input class="form-control" id="subject" name="subject" type="text" />
                                </div>
                                <div class="form-group ">
                                    <label class="control-label requiredField" for="email">
                                        Email Address
                                        <span class="asteriskField">
                                            *
                                        </span>
                                    </label>
                                    <input class="form-control" id="email" name="email" type="text" />
                                </div>
                                <div class="form-group ">
                                    <label class="control-label requiredField" for="status">
                                        Status
                                        <span class="asteriskField">
                                            *
                                        </span>
                                    </label>
                                    <select class="select form-control" id="status" name="status">
                                        <option value="Active">
                                            Active
                                        </option>
                                        <option value="Inactive">
                                            Inactive
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" data-dismiss="modal">Update</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->
    <div id="modal-add-users" class="modal modal-lg fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 id="" class="modal-title">Add User</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group ">
                                    <label class="control-label " for="name1">
                                        Nickname
                                    </label>
                                    <input class="form-control" id="name1" name="name1" type="text" />
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="name2">
                                        First Name
                                    </label>
                                    <input class="form-control" id="name2" name="name2" type="text" />
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="name">
                                        Middle Initial
                                    </label>
                                    <input class="form-control" id="name" name="name" type="text" />
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="name3">
                                        Last Name
                                    </label>
                                    <input class="form-control" id="name3" name="name3" type="text" />
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="tel">
                                        Phone Number
                                    </label>
                                    <input class="form-control" id="tel" name="tel" type="text" />
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="number">
                                        Employee ID Number
                                    </label>
                                    <input class="form-control" id="number" name="number" type="text" />
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="select">
                                        Department Number
                                    </label>
                                    <select class="select form-control" id="select" name="select">
                                        <option value="First Choice">
                                            First Choice
                                        </option>
                                        <option value="Second Choice">
                                            Second Choice
                                        </option>
                                        <option value="Third Choice">
                                            Third Choice
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="text">
                                        Password
                                    </label>
                                    <input class="form-control" id="text" name="text" type="text" />
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="subject">
                                        Confirm Password
                                    </label>
                                    <input class="form-control" id="subject" name="subject" type="text" />
                                </div>
                                <div class="form-group ">
                                    <label class="control-label requiredField" for="email">
                                        Email Address
                                        <span class="asteriskField">
                                            *
                                        </span>
                                    </label>
                                    <input class="form-control" id="email" name="email" type="text" />
                                </div>
                                <div class="form-group ">
                                    <label class="control-label requiredField" for="status">
                                        Status
                                        <span class="asteriskField">
                                            *
                                        </span>
                                    </label>
                                    <select class="select form-control" id="status" name="status">
                                        <option value="Active">
                                            Active
                                        </option>
                                        <option value="Inactive">
                                            Inactive
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" data-dismiss="modal">Add User</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->
<?=
createFooter($patterns['footer']);
include_site_scripts($options);
include_site_end($options);
?>

