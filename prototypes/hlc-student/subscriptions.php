<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My Subscriptions';
$patterns['header']['mainNavActive'] = false;
$patterns['focus']['title'] = 'My Subscriptions';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-main section-box" data-equalize="layout-columns">

                    <?php

                        $focusNav = array(
                            'tabs' => array(
                                array(
                                    'url' => 'alerts.php',
                                    'label' => 'Alerts',
                                ),
                                array(
                                    'active' => true,
                                    'url' => 'subscriptions.php',
                                    'label' => 'Subscriptions',
                                ),
                            ),

                        );
                        echo createFocusNav($focusNav);
                    ?>

                    <form id="form-account-settings">
                        <section class="section">
                            <h2>Delivery Method</h2>
                            <div class="form-group">
                                <div class="btn-group btn-block" data-toggle="buttons">
                                    <label class="btn btn-default active">
                                        <input type="radio" name="options" id="option1" selected> HTML
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" name="options" id="option1"> Plain Text
                                    </label>
                                </div>
                            </div>
                        </section>
                        <hr>
                        <section class="section">
                            <h2>Supervisor Alerts</h2>
                            <div class="slat">
                                <div class="slat-manage">
                                    <input type="checkbox" class="control-checkbox">
                                    <div class="row">
                                        <div class="col-sm-8"><span class="title">Alert me when a student assignment is <input type="text" class="form-control input-sm" value="1" maxlength="2"> day(s) past due.</span></div>
                                        <div class="col-sm-4 "><label class="checkbox"><input type="checkbox">Include in summary</label></div>
                                    </div>
                                </div>
                            </div>
                            <section class="section">
                                <p>Your summary for supervisor alerts is sent <b>monthly on the last Wednesday of the month at 5am</b>.</p>
                                <a href="#modal-supervisor-summary" data-toggle="modal" class="btn btn-sm btn-default">Change Schedule</a>
                            </section>
                        </section>
                        <hr>
                        <section class="section">
                            <h2>Student Alerts</h2>

                            <div class="slat">
                                <div class="slat-manage">
                                    <input type="checkbox" class="control-checkbox">
                                    <div class="row">
                                        <div class="col-sm-8"><span class="title">Alert me when an assignment is <input type="text" class="form-control input-sm" value="1" maxlength="2"> day(s) past due.</span></div>
                                        <div class="col-sm-4 "><label class="checkbox"><input type="checkbox">Include in summary</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slat">
                                <div class="slat-manage">
                                    <input type="checkbox" class="control-checkbox">
                                    <div class="row">
                                        <div class="col-sm-8"><span class="title">Alert me when a new assignment is available.</span></div>
                                        <div class="col-sm-4"><label class="checkbox"><input type="checkbox">Include in summary</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slat">
                                <div class="slat-manage">
                                    <input type="checkbox" class="control-checkbox">
                                    <div class="row">
                                        <div class="col-sm-8"><span class="title">Alert me <input type="text" class="form-control input-sm" value="1" maxlength="2"> day(s) before an assignment is due.</span></div>
                                        <div class="col-sm-4"><label class="checkbox"><input type="checkbox">Include in summary</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slat">
                                <div class="slat-manage">
                                    <input type="checkbox" class="control-checkbox">
                                    <div class="row">
                                        <div class="col-sm-8"><span class="title">Alert me when a student dropped from a class.</span></div>
                                        <div class="col-sm-4"><label class="checkbox"><input type="checkbox">Include in summary</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slat">
                                <div class="slat-manage">
                                    <input type="checkbox" class="control-checkbox">
                                    <div class="row">
                                        <div class="col-sm-8"><span class="title">Alert me when class is cancelled.</span></div>
                                        <div class="col-sm-4"><label class="checkbox"><input type="checkbox">Include in summary</label></div>
                                    </div>
                                </div>
                            </div>
                            <section class="section">
                                <p>Your summary for student alerts is sent <b>weekly on Tuesdays and Thursdays at 5am</b>.</p>
                                <a href="#modal-student-summary" data-toggle="modal" class="btn btn-sm btn-default">Change Schedule</a>
                            </section>
                        </section>
                        <hr>
                        <section class="section">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Save</button>
                                <button type="button" class="btn btn-default">Cancel</button>
                            </div>
                            <div class="form-modified">Last Modified: Sep 20, 2013 11:27am by sjuniper</div>
                        </section>
                    </form>
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php include_sidebar() ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->

<div id="modal-supervisor-summary" class="modal modal-lg fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="" class="modal-title">Manage Schedule for Supervisor Alerts Summary</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Frequency</label>
                                <select class="form-control" id="summary-frequency">
                                    <option value="daily">Daily</option>
                                    <option value="weekly">Weeky</option>
                                    <option value="monthly">Monthly</option>
                                    <option value="quarterly">Quarterly</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label" for="inputFirstName">Time</label>
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section summary-option" id="summary-weekly">
                    <label>Day(s)</label>
                    <ul>
                        <li><label class="checkbox"><input type="checkbox"> Sunday</label></li>
                        <li><label class="checkbox"><input type="checkbox"> Monday</label></li>
                        <li><label class="checkbox"><input type="checkbox"> Tuesday</label></li>
                        <li><label class="checkbox"><input type="checkbox"> Wednesday</label></li>
                        <li><label class="checkbox"><input type="checkbox"> Thursday</label></li>
                        <li><label class="checkbox"><input type="checkbox"> Friday</label></li>
                        <li><label class="checkbox"><input type="checkbox"> Saturday</label></li>
                    </ul>
                </section>
                <section class="section summary-option" id="summary-monthly">
                    <label>Day</label>
                    <ul>
                        <li>
                            <input type="radio" name="monthly-type" checked>
                            <div class="content">
                                The <select class="form-control">
                                        <option>first</option>
                                        <option>second</option>
                                        <option>third</option>
                                        <option>fourth</option>
                                        <option>last</option>
                                    </select> <select class="form-control">
                                        <option>Sunday</option>
                                        <option>Monday</option>
                                        <option>Tuesday</option>
                                        <option>Wednesday</option>
                                        <option>Thursday</option>
                                        <option>Friday</option>
                                        <option>Saturday</option>
                                    </select> of the month
                            </div>
                        </li>
                        <li>
                            <input type="radio" name="monthly-type">
                            <div class="content">
                                Specific day of the month: <input type="text" class="form-control" maxlength="2">
                            </div>
                        </li>
                    </ul>
                </section>
                <section class="section summary-option" id="summary-quarterly">
                    <label>Day</label>
                    <ul>
                        <li>
                            <input type="radio" name="quarterly-type" checked>
                            <div class="content">
                                The <select class="form-control">
                                        <option>first</option>
                                        <option>second</option>
                                        <option>third</option>
                                        <option>fourth</option>
                                        <option>last</option>
                                    </select> <select class="form-control">
                                        <option>Sunday</option>
                                        <option>Monday</option>
                                        <option>Tuesday</option>
                                        <option>Wednesday</option>
                                        <option>Thursday</option>
                                        <option>Friday</option>
                                        <option>Saturday</option>
                                    </select> of the quarter
                            </div>
                        </li>
                        <li>
                            <input type="radio" name="quarterly-type">
                            <div class="content">
                                Specific day of the quarter: <input type="text" class="form-control" maxlength="2">
                            </div>
                        </li>
                    </ul>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->
<div id="modal-student-summary" class="modal modal-lg fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="" class="modal-title">Manage Schedule for Student Alerts Summary</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Frequency</label>
                                <select class="form-control" id="summary-frequency">
                                    <option value="daily">Daily</option>
                                    <option value="weekly">Weeky</option>
                                    <option value="monthly">Monthly</option>
                                    <option value="quarterly">Quarterly</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label" for="inputFirstName">Time</label>
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section summary-option" id="summary-weekly">
                    <label>Day(s)</label>
                    <ul>
                        <li><label class="checkbox"><input type="checkbox"> Sunday</label></li>
                        <li><label class="checkbox"><input type="checkbox"> Monday</label></li>
                        <li><label class="checkbox"><input type="checkbox"> Tuesday</label></li>
                        <li><label class="checkbox"><input type="checkbox"> Wednesday</label></li>
                        <li><label class="checkbox"><input type="checkbox"> Thursday</label></li>
                        <li><label class="checkbox"><input type="checkbox"> Friday</label></li>
                        <li><label class="checkbox"><input type="checkbox"> Saturday</label></li>
                    </ul>
                </section>
                <section class="section summary-option" id="summary-monthly">
                    <label>Day</label>
                    <ul>
                        <li>
                            <input type="radio" name="monthly-type" checked>
                            <div class="content">
                                The <select class="form-control">
                                        <option>first</option>
                                        <option>second</option>
                                        <option>third</option>
                                        <option>fourth</option>
                                        <option>last</option>
                                    </select> <select class="form-control">
                                        <option>Sunday</option>
                                        <option>Monday</option>
                                        <option>Tuesday</option>
                                        <option>Wednesday</option>
                                        <option>Thursday</option>
                                        <option>Friday</option>
                                        <option>Saturday</option>
                                    </select> of the month
                            </div>
                        </li>
                        <li>
                            <input type="radio" name="monthly-type">
                            <div class="content">
                                Specific day of the month: <input type="text" class="form-control" maxlength="2">
                            </div>
                        </li>
                    </ul>
                </section>
                <section class="section summary-option" id="summary-quarterly">
                    <label>Day</label>
                    <ul>
                        <li>
                            <input type="radio" name="quarterly-type" checked>
                            <div class="content">
                                The <select class="form-control">
                                        <option>first</option>
                                        <option>second</option>
                                        <option>third</option>
                                        <option>fourth</option>
                                        <option>last</option>
                                    </select> <select class="form-control">
                                        <option>Sunday</option>
                                        <option>Monday</option>
                                        <option>Tuesday</option>
                                        <option>Wednesday</option>
                                        <option>Thursday</option>
                                        <option>Friday</option>
                                        <option>Saturday</option>
                                    </select> of the quarter
                            </div>
                        </li>
                        <li>
                            <input type="radio" name="quarterly-type">
                            <div class="content">
                                Specific day of the quarter: <input type="text" class="form-control" maxlength="2">
                            </div>
                        </li>
                    </ul>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
    <script>
        $(function(){
            $('#summary-frequency').change(function(){
                $(".summary-option").removeClass('active');
                $('#summary-' + $(this).val()).addClass('active');
            });
        });
    </script>
<?= createSiteEnd(); ?>