<?php

include "includes/helpers.php";


$options = json_decode('{
    "head": {
        "title" : "Welcome to Bright Ideas"
    },
    "header": {
        "nav_main_active" : "ideas"
    },
    "focus": {
        "title": "Bright Idea Information",
        "action": {
            "label": "Submit New Idea",
            "link": "./new-idea.php"
        },
        "meta": [

        ]
    }
}',true);

include_site_start($options);
//include_site_header($options);
echo createHeader($patterns['header']);
$focus = array( 'title' => 'Bright Idea Information', ); echo createFocus($focus);
?>

    <div class="layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="section section-main section-box" data-equalize="layout-columns">

                        <?php

                            $focusNav = array(
                                'tabs' => array(
                                    array(
                                        'active' => true,
                                        'id' => 'tab-idea',
                                        'label' => 'Idea',
                                    ),
                                    array(
                                        'id' => 'tab-comments',
                                        'label' => 'Comments',
                                    ),
                                    array(
                                        'id' => 'tab-history',
                                        'label' => 'History',
                                    ),
                                ),
                            );
                            echo createFocusNav($focusNav);

                        ?>

                        <section class="section">
                            <div class="row">
                                <div class="col-sm-4">
                                    <a href="./search-bright-ideas.php"><i class="fa fa-fw fa-chevron-left"></i>Return to Search Results</a>
                                </div>
                                <div class="col-sm-8">
                                    <div class="dropdown pull-right">
                                        <span class="comments-added">COMMENTS ADDED:
                                            <span class="comments-count">2</span>
                                        </span>
                                        <span class="comments-added">HISTORY:
                                            <span class="comments-count">2</span>
                                        </span>
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Options
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li>
                                                <a class="interrupt_modal_delete" data-toggle="modal" data-target="#interrupt_modal_delete">Delete</a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#modal_idea_redelegate">Redelegate</a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#modal_idea_email">Email</a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#modal_idea_implement">Implement</a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#modal_idea_reassign">Reassign</a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#modal_idea_close">Close</a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#modal_idea_change_status">Change Status</a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#modal_idea_add_comments">Add Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab-idea">
                                    <hr>
                                    <section class="section">
                                        <div class="row">
                                            <div class="col-md-6">
                                             <div class="form-group ">
                                                    <label class="control-label " for="text">
                                                        Idea Name
                                                    </label>
                                                    <input class="form-control" id="text" name="text" type="text" />
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label " for="text">
                                                        Idea #
                                                    </label>
                                                    <input class="form-control" id="text" name="text" type="text" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Name
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="Tracy Yowell">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                            <option data-dept="Facility" data-userid="user<?= $i ?>" value="Name <?= $i ?>">Name
                                                                <?= $i ?>
                                                            </option>
                                                            <?php $i++; } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Department
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="1000000 - Nursing Information Services">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                            <option data-dept="Facility" data-userid="user<?= $i ?>" value="Department <?= $i ?>">Department
                                                                <?= $i ?>
                                                            </option>
                                                            <?php $i++; } ?>
                                                    </select>
                                                </div>

                                            </div>
                                            <!-- end col -->
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label " for="date">
                                                        Log Date
                                                    </label>
                                                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" disabled />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Responsible
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="Name 1">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                            <option data-dept="Facility" data-userid="user<?= $i ?>" value="Name <?= $i ?>">Name
                                                                <?= $i ?>
                                                            </option>
                                                            <?php $i++; } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label " for="tel">
                                                        Phone #
                                                    </label>
                                                    <input class="form-control" id="tel" name="tel" type="text" />
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label " for="text2">
                                                        Delegated To
                                                    </label>
                                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="Tracy Yowell">
                                                        <option></option>
                                                        <?php $i = 1; while ( $i <= 100) { ?>
                                                            <option data-dept="Facility" data-userid="user<?= $i ?>" value="Name <?= $i ?>">Name
                                                                <?= $i ?>
                                                            </option>
                                                            <?php $i++; } ?>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </section>
                                    <section>

                                             <div class="row">
                                                <div class="col-md-3">
                                                    <label class="control-label " for="text4">
                                                        Target Implementation Date
                                                    </label>
                                                    <div class="input-group date datepicker" id="date1">
                                                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" />
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                            </div>
                                            <div class="col-md-3">

                                                    <label class="control-label " for="date1">
                                                        Actual Implementation Date
                                                    </label>
                                                    <div class="input-group date datepicker" id="date1">
                                                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" />
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>

                                            </div>
                                            <!-- Select Basic -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectbasic">Safety Issue
                                                    </label>
                                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectbasic">Success Story
                                                    </label>
                                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                      <div class="row">
                                         <!-- Select Basic -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="selectcosts">Cost Savings
                                                    </label>
                                                    <select id="selectcosts" name="selectcosts" class="form-control selectcosts">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="selecthours">Time Savings?
                                                    </label>
                                                    <select id="selecthours" name="selecthours" class="form-control selecthours">
                                                        <option value="0"></option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
                                            </div>

                                             <div class="col-md-3">
                                                <div class="form-group ">
                                                    <label class="control-label " for="date">
                                                        Actual Cost Savings
                                                    </label>
                                                    <input type="text" class="form-control" aria-label="Actual Costs" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group ">
                                                    <label class="control-label " for="date">
                                                        Actual Time Savings
                                                    </label>
                                                    <input type="text" class="form-control" aria-label="Actual Time" placeholder="">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-3">
                                                <div id="dollars" class="input-group">
                                                    <span class="input-group-addon">$</span>
                                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="dollars">
                                                    <span class="input-group-addon">dollars / year</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div id="hours" class="input-group">
                                                    <span class="input-group-addon">#</span>
                                                    <input type="text" class="form-control" aria-label="Total Hours" placeholder="hours">
                                                    <span class="input-group-addon">hours / year</span>
                                                </div>
                                            </div>
                                            </div>

                                    </section>
                                    <section class="section">
                                        <div class="form-group ">
                                            <label class="control-label " for="message">
                                                Brief Description of Your Idea (One Sentence)
                                            </label>
                                            <textarea class="description-area form-control" cols="40" id="message" name="message" rows="1"></textarea>
                                            <div class="row">
                                                <div class="col-xs-9">
                                                    <p>
                                                        <div class="charfield" id="charfield">
                                                            <span class="pleaseNote">Please Note:</span> The Brief Description field is limited to 255 characters.
                                                        </div>
                                                    </p>
                                                </div>
                                                <div class="col-xs-3">
                                                    <p>
                                                        <div class="charNumDes" id="charNumDes"></div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label " for="textarea">
                                                Benefits of Your Idea
                                            </label>
                                            <textarea class="benefits-area form-control" onkeyup="countChar(this)" cols="40" id="textarea" name="textarea" rows="10"></textarea>
                                            <div class="row">
                                                <div class="col-xs-9">
                                                    <p>
                                                        <div class="charfield" id="charfield">
                                                            <span class="pleaseNote">Please Note:</span> The Benefits field is limited to 2500 characters. If you need to input more information, please use additional comments / Instructions section.
                                                        </div>
                                                    </p>
                                                </div>
                                                <div class="col-xs-3">
                                                    <p>
                                                        <div class="charNumBen" id="charNumBen"></div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label " for="textarea1">
                                                Additional Comments / Instructions
                                            </label>
                                            <textarea class="comment-area form-control" onkeyup="countChar(this)" cols="40" id="textarea1" name="textarea1" rows="10"></textarea>
                                            <div class="row">
                                                <div class="col-xs-9">
                                                    <p>
                                                        <div class="charfield" id="charfield">
                                                            <span class="pleaseNote">Please Note:</span> The Additional comments field is limited to 4000 characters.
                                                        </div>
                                                    </p>
                                                </div>
                                                <div class="col-xs-3">
                                                    <p>
                                                        <div class="charNumCom" id="charNumCom"></div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="tab-pane fade" id="tab-comments">
                                    <hr>
                                    <h2>Comments</h2>
                                    <div class="slat slat-callout">
                                        <div class="slat-default">
                                            <div class="title">Comment Added</div>
                                            <ul class="meta">
                                                <li>
                                                    <span class="meta-label">Added:</span>
                                                    <span class="meta-value">11/6/2015</span>
                                                </li>
                                                <li>
                                                    <span class="meta-label"> By:</span>
                                                    <span class="meta-value">Virtusa Test</span>
                                                </li>
                                                <li>
                                                    <span class="meta-label">Comment:</span>
                                                    <span class="meta-value">
                                                        Great Idea if implemented in other departments as well.
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="slat slat-callout">
                                        <div class="slat-default">
                                            <div class="title">Comment Added</div>
                                            <ul class="meta">
                                                <li>
                                                    <span class="meta-label">Added:</span>
                                                    <span class="meta-value">11/16/2015</span>
                                                </li>
                                                <li>
                                                    <span class="meta-label"> By:</span>
                                                    <span class="meta-value">BigPapa Test</span>
                                                </li>
                                                <li>
                                                    <span class="meta-label">Comment:</span>
                                                    <span class="meta-value">
                                                        Another Great Idea if I have to say so myself.
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--/slat-->
                                </div>
                                <!-- /tab -->
                                <div class="tab-pane fade" id="tab-history">
                                    <hr>
                                    <h2>History</h2>
                                    <div class="slat slat-callout">
                                        <div class="slat-default">
                                            <div class="title">Assigned</div>
                                            <ul class="meta">
                                                <li>
                                                    <span class="meta-label">Date:</span>
                                                    <span class="meta-value">11/16/2015</span>
                                                </li>
                                                <li>
                                                    <span class="meta-label"> By:</span>
                                                    <span class="meta-value">Virtusa Test</span>
                                                </li>
                                                <li>
                                                    <span class="meta-label">Description:</span>
                                                    <span class="meta-value">
                                                        Bright Idea assigned to Tracy Yowell
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="slat slat-callout">
                                        <div class="slat-default">
                                            <div class="title">Submitted</div>
                                            <ul class="meta">
                                                <li>
                                                    <span class="meta-label">Date:</span>
                                                    <span class="meta-value">11/16/2015</span>
                                                </li>
                                                <li>
                                                    <span class="meta-label"> By:</span>
                                                    <span class="meta-value">BigPapa Test</span>
                                                </li>
                                                <li>
                                                    <span class="meta-label">Description:</span>
                                                    <span class="meta-value">
                                                        Bright Idea submitted by Virtusa Test
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--/slat-->
                                </div>
                                <!-- /tab -->
                            </div>
                        </section>
                        <!-- /sticky -->

                        <?php
                            $stickybar = array(
                                'sets' => array(
                                    array(
                                        'html' => '
                                            <button class="btn btn-success" name="submit" type="submit">
                                                Update
                                            </button>
                                            <button class="btn btn-default" name="cancel" type="cancel">
                                                Cancel
                                            </button>
                                        ',
                                    ),
                                ),
                            );
                            echo createStickybar($stickybar);
                        ?>

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
    <!-- modals -->
    <!-- modal idea add comments -->
    <div id="modal_idea_add_comments" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 id="" class="modal-title">Add Comment</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label for="select" class="control-label ">
                                        Idea Number
                                    </label>
                                    <input id="id_number" name="id_number" type="text" value="MHS16.8424" class="form-control">
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="textarea">
                                        Comment
                                    </label>
                                    <textarea class="form-control" onkeyup="countChar(this)" cols="40" id="comment-area" name="textarea" rows="10"></textarea>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <p>
                                                <div id="charNum"></div>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <p>
                                                <div id="charfield">
                                                    <strong>Please Note:</strong> The Comments field is limited to 4000 characters. If you need to input more information, please add an additional comment.
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-md-offset-5 text-center search_user">
                                </div>
                            </div>
                        </div>
                        </form>
                    </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" data-dismiss="modal">Add Comment</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->
    <!-- modal idea change status -->
    <div id="modal_idea_change_status" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 id="" class="modal-title">Change To work In Progress</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label for="select" class="control-label ">
                                        Idea Number
                                    </label>
                                    <input id="id_number" name="id_number" type="text" placeholder="Your name" value="MHS16.8424" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="hire-from-date">
                                        Target Imp. Date
                                    </label>
                                    <div id="hire-from-date" class="input-group date datepicker">
                                        <input type="text" value="10/20/2015" class="form-control">
                                        <span class="input-group-addon">
                                            <span class="fa fa-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-2 col-md-offset-5 text-center search_user">
                                </div>
                            </div>
                        </div>
                        </form>
                    </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" data-dismiss="modal">Change Status</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->
    <!-- modal idea close -->
    <div id="modal_idea_close" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 id="" class="modal-title">Close Idea</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label for="select" class="control-label ">
                                        Idea Number
                                    </label>
                                    <input id="id_number" name="id_number" type="text" placeholder="Your name" value="MHS16.8424" class="form-control">
                                </div>
                                <div class="form-group ">
                                    <label for="select" class="control-label ">
                                        Reason for closing Idea
                                    </label>
                                    <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                </div>
                                <div class="col-md-2 col-md-offset-5 text-center search_user">
                                </div>
                            </div>
                        </div>
                        </form>
                    </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" data-dismiss="modal">Close Idea</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->
    <!-- modal idea reassign -->
    <div id="modal_idea_reassign" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Assign Idea</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label for="select" class="control-label ">
                                        Idea Number
                                    </label>
                                    <input id="id_number" name="id_number" type="text" placeholder="Your name" value="MHS16.8424" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="selectDepertment" class="control-label">Select facility</label>
                                    <select class="form-control">
                                        <option>All</option>
                                        <option>Select facility 1</option>
                                        <option>Select facility 2</option>
                                        <option>Select facility 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="selectDepertment" class="control-label">Select Responsible Department</label>
                                    <!-- <a id="lnkSortBy" href="#" class="pull-right">Sort By Name</a>
                                    <select class="form-control">
                                        <option>1000000 - Nursing Information Services</option>
                                        <option>MHS580975 - Mpf-Oncology</option>
                                        <option>MHS636020 - Anesthesiology</option>
                                        <option>MHS9999OLD - Termed Employees</option>
                                    </select> -->
                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="">
                                        <option></option>
                                        <?php $i = 1; while ( $i <= 100) { ?>
                                            <option data-dept="Facility" data-userid="Facility<?= $i ?>" value="Name <?= $i ?>">Department
                                                <?= $i ?>
                                            </option>
                                            <?php $i++; } ?>
                                    </select>
                                </div>
                                <div class="form-group well">
                                    <label for="select" class="control-label text-warning">
                                        If you are not sure what Department to assign this idea to, you may submit the idea for reassignment by the Bright Ideas coordinator by clicking the button below.
                                    </label>
                                </div>
                            </div>
                        </div>
                        </form>
                    </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" data-dismiss="modal">Asign Idea</button>
                    <button class="btn btn-success" data-dismiss="modal">Reassign to BI Coordinator</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->
    <!-- modal idea implement -->
    <div id="modal_idea_implement" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 id="" class="modal-title">Implement Idea</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label for="select" class="control-label ">
                                        Idea Number
                                    </label>
                                    <input id="id_number" name="id_number" type="text" placeholder="Your name" value="MHS16.8424" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="selectDepertment" class="control-label">Implement Type</label>
                                    <select class="form-control">
                                        <option>Customer Service</option>
                                        <option>Financial</option>
                                        <option>Innovation</option>
                                        <option>Quality</option>
                                        <option>Safety</option>
                                        <option>Teamwork</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="row_list">
                                        <label for="selectDepertment" class="control-label">Would you like to share this idea as a success story?</label>
                                        <select class="form-control">
                                            <option>No</option>
                                            <option>Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group ">
                                    <label for="select" class="control-label ">
                                        Annual Cost Savings
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="">$</span>
                                        </span>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="select" class="control-label ">
                                        Annual Time Savings
                                    </label>
                                    <input id="id_number" name="id_number" type="text" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        </form>
                    </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" data-dismiss="modal">Implement Idea</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->
    <!-- modal idea email -->
    <div id="modal_idea_email" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 id="" class="modal-title">Email Idea</h4>
                </div>
                <div class="modal-body">
                    <section class="section hide_section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label for="select" class="control-label ">
                                        Idea Number
                                    </label>
                                    <input id="id_number" name="id_number" type="text" placeholder="Your name" value="MHS16.8424" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="selectDepertment" class="control-label">Send To</label>
                                    <select class="form-control">
                                        <option value=""></option>
                                        <option value="april.blankenship@healthstream.com">Blankenship, April</option>
                                        <option value="april.blankenship@healthstream.com">Blankenship, April2</option>
                                        <option value="annicafischer@mhd.com">Fischer, Annica</option>
                                        <option value="cherylflynn@mhd.com">Flynn, Cheryl</option>
                                        <option value="stephenmaffei@mhd.com">Maffei, Steve</option>
                                        <option value="jesus.ramirez@healthstream.com">Ramirez, Chuy</option>
                                        <option value="libby.sandberg@healthstream.com">Sandberg, Libby</option>
                                        <option value="libby.sandberg@healthstream.com">Sandberg, Libby2</option>
                                        <option value="munagav@virtusa.com">Snow, Jon</option>
                                        <option value="patt@bhclg.com">Test, Abigail</option>
                                        <option value="patt@bhclg.com">Test, Zoran</option>
                                        <option value="tracy.yowell@healthstream.com">Yowell3, Tracy</option>
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label for="select" class="control-label ">
                                        or Email Address
                                    </label>
                                    <input id="id_email" name="id_email" type="email" value="" class="form-control">
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="select">
                                        Email Message
                                    </label>
                                    <textarea rows="3" placeholder="Please enter your message here..." name="email_message" id="email_message" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="row_list">
                                        <label class="control-label" for="selectDepertment">Send a copy of this email to me?</label>
                                        <select class="form-control">
                                            <option value="no">No</option>
                                            <option value="yes">Yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" id="show_hide">Email Idea</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->
    <!-- modal idea redelegate -->
    <div id="modal_idea_redelegate" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" id="close_modal" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 id="" class="modal-title">Delegate Idea</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label for="select" class="control-label ">
                                        Idea Number
                                    </label>
                                    <input id="del_id_number" name="id_number" type="text" placeholder="Your name" value="" class="form-control">
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="selectDepertment">Delegate Idea To</label>
                                    <select class="form-control slat-basic" id="slat-basic" data-placeholder="Tracy Yowell">
                                        <option></option>
                                        <?php $i = 1; while ( $i <= 100) { ?>
                                            <option data-dept="Facility" data-userid="user<?= $i ?>" value="Name <?= $i ?>">Name
                                                <?= $i ?>
                                            </option>
                                            <?php $i++; } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" id="show">Delegate Idea</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->

<?=
createFooter($patterns['footer']);
include_site_scripts($options);
?>
        <script>
        (function(window, $) {
            'use strict';
            window.HealthStream = window.HealthStream || {};
            var healthStream = window.HealthStream;

            healthStream.datepicker = function() {
                $('.datepicker').datepicker({
                    autoclose: true
                });
            };
            healthStream.charCount = function() {
                    $('#modal_idea_add_comments').on('show.bs.modal', function(e) {
                        $('#comment-area').keyup(function() {
                            var max = 4000;
                            var len = $(this).val().length;
                            if (len >= max) {
                                $('#charNum').text(' you have reached the limit');
                            } else {
                                var char = max - len;
                                $('#charNum').text(char + ' characters remaining');
                            }
                        });
                    });
                },
                healthStream.hidden = function() {
                    $("#dollars").hide();
                    $("#hours").hide();

                    // toggle dollars
                    $('select.selectcosts').on('change', function(e) {
                        if ($('#selectcosts').val() == 2) {
                            $("#dollars").show();
                        } else {
                            $("#dollars").hide();
                        }
                    });

                    // toggle hours
                    $('select.selecthours').on('change', function(e) {
                        if ($('#selecthours').val() == 2) {
                            $("#hours").show();
                        } else {
                            $("#hours").hide();
                        }
                    });

                },
                healthStream.modal = function() {
                    $('.interrupt_modal_delete').click(function(e) {
                        e.preventDefault();
                        HealthStream.utilities.interrupt({
                            type: 'danger',
                            title: 'Are you sure you want to delete idea #24564?',
                            text: '<span>This cannot be undone</span>',
                            actions: [{
                                type: 'danger',
                                label: 'Yes, Delete Idea'
                            }, {
                                label: 'No, Cancel'
                            }]
                        });
                    });
                },

                healthStream.charCount = function() {

                    $('textarea.comment-area').keyup(function() {
                        var max = 4000;
                        var charTen = max - 10;
                        var len = $(this).val().length;

                        if (len <= charTen) {
                            $('.charNumCom').css("color", "black");
                        } else {
                            $('.charNumCom').css("color", "red");
                        }


                        if (len > max) {
                            var charNeg = len - max;
                            $('.charNumCom').text('-' + charNeg + ' characters remaining');
                        } else {
                            var char = max - len;
                            $('.charNumCom').text(char + ' characters remaining');
                        }
                        $('.charfieldCom').show();
                    });
                    $('textarea.benefits-area').keyup(function() {
                        var max = 2500;
                        var charTen = max - 10;
                        var len = $(this).val().length;

                        if (len <= charTen) {
                            $('.charNumBen').css("color", "black");
                        } else {
                            $('.charNumBen').css("color", "red");
                        }
                        if (len > max) {
                            var charNeg = len - max;
                            $('.charNumBen').first().text('-' + charNeg + ' characters remaining');
                        } else {
                            var char = max - len;
                            $('.charNumBen').text(char + ' characters remaining');
                        }
                    });
                    $('textarea.description-area').keyup(function() {
                        var max = 255;
                        var charTen = max - 10;
                        var len = $(this).val().length;

                        if (len <= charTen) {
                            $('.charNumDes').css("color", "black");
                        } else {
                            $('.charNumDes').css("color", "red");
                        }


                        if (len > max) {
                            var charNeg = len - max;
                            $('.charNumDes').text('-' + charNeg + ' characters remaining');
                        } else {
                            var char = max - len;
                            $('.charNumDes').text(char + ' characters remaining');
                        }
                    });
                },
                healthStream.select2 = function() {
                    function formatBasic(option) {
                        var userid = $(option.element).data('userid');
                        var dept = $(option.element).data('dept');
                        if (!option.id) return option.text; // optgroup
                        return '<div class="slat slat-select2"><div class="title">' + option.text + ' <span>[' + userid + ']</span></div><ul class="meta"><li><span class="meta-label">Example:</span><span class="meta-value">' + dept + '</span></li></ul></div>';
                    }


                    $('.slat-basic').select2({
                        minimumInputLength: 1,
                        formatResult: formatBasic,
                        escapeMarkup: function(m) {
                            return m;
                        },
                        dropdownCssClass: 'select2-slats'
                    });
                };
            $(window).on('load', function() {

                healthStream.datepicker();
                healthStream.select2();
                healthStream.charCount();
                healthStream.hidden();
                healthStream.modal();

            });
        }(window, jQuery));
        </script>
        <?php
include_site_end($options);
?>
