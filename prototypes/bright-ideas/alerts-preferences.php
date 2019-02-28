<?php

include 'includes/helpers.php';

$options = json_decode('{
    "head": {
        "title" : "Alert Preferences"
    },
    "header": {
        "nav_main_active": ""
    },
    "focus": {
        "title": "My Alerts",
        "meta": [
            ["Total:","55"],
            ["Unread:","3"]
        ]
    }
}',true);

include_site_start($options);
//include_site_header($options);
$patterns['header']['mainNavActive'] = 'none';
echo createHeader($patterns['header']);
include_renewed_focus_bar($options);
?>
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
                                    'label' => 'Messages',
                                ),
                                array(
                                    'active' => true,
                                    'url' => 'alerts-preferences.php',
                                    'label' => 'Preferences',
                                ),
                            ),

                        );
                        echo createFocusNav($focusNav);
                    ?>

                    <form id="form-account-settings">
                        <section class="section">
                            <nav class="nav-collapsing-tabs">
                                <a href="#" class="nav-header"><span>Supervisor</span><i class="fa fa-chevron-down"></i></a>
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#tab-pane-supervisor" data-toggle="tab">Supervisor</a></li>
                                    <li><a href="#tab-pane-student" data-toggle="tab">Student</a></li>
                                </ul>
                            </nav>
                        </section>

                        <div class="tab-content">
                            <section class="section tab-pane active" id="tab-pane-supervisor">
                                <section class="section">

                                    <div class="slat slat-preference">
                                        <div class="slat-default">
                                            <div class="title">Alert me when a student assignment is <input type="text" class="form-control input-sm" value="1" maxlength="2"> day(s) past due.</div>
                                            <div class="action action-multi">
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        Immediately <i class="fa fa-caret-down visible-xs"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#">Never</a></li>
                                                        <li class="active"><a href="#">Immediately</a></li>
                                                        <li><a href="#">Summary</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="pref-id-1" value="immediately">
                                    </div>

                                    <div class="slat slat-preference">
                                        <div class="slat-default">
                                            <div class="title">Alert me when a student has late courses in MOC curriculum.</div>
                                            <div class="action action-multi">
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        Immediately <i class="fa fa-caret-down visible-xs"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#">Never</a></li>
                                                        <li class="active"><a href="#">Immediately</a></li>
                                                        <li><a href="#">Summary</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="pref-id-1" value="immediately">
                                    </div>

                                    <!-- <div class="slat">
                                        <div class="slat-manage">
                                            <input type="checkbox" class="control-checkbox">
                                            <div class="row">
                                                <div class="col-sm-8"><span class="title">Alert me when a student assignment is <input type="text" class="form-control input-sm" value="1" maxlength="2"> day(s) past due.</span></div>
                                                <div class="col-sm-4 "><label class="checkbox"><input type="checkbox">Include in summary</label></div>
                                            </div>
                                        </div>
                                    </div> -->

                                </section>
                                <section class="section">
                                    <h3>Supervisor Summary</h3>
                                    <p>This summary is sent <a href="#modal-supervisor-summary" data-toggle="modal">monthly on the last Wednesday of the month at 5am</a>.</p>
                                </section>
                            </section>

                            <section class="section tab-pane" id="tab-pane-student">
                                <section class="section">

                                    <div class="slat slat-preference">
                                        <div class="slat-default">
                                            <div class="title">Alert me when a certification's expiration date is updated.</div>
                                            <div class="action action-multi">
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        Immediately <i class="fa fa-caret-down visible-xs"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#">Never</a></li>
                                                        <li class="active"><a href="#">Immediately</a></li>
                                                        <li><a href="#">Summary</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="pref-id-1" value="immediately">
                                    </div>

                                    <div class="slat slat-preference">
                                        <div class="slat-default">
                                            <div class="title">Alert me <input type="text" class="form-control input-sm" value="1" maxlength="2"> day(s) before a certification's expiration date.</div>
                                            <div class="action action-multi">
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        Immediately <i class="fa fa-caret-down visible-xs"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#">Never</a></li>
                                                        <li class="active"><a href="#">Immediately</a></li>
                                                        <li><a href="#">Summary</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="pref-id-1" value="immediately">
                                    </div>

                                    <div class="slat slat-preference">
                                        <div class="slat-default">
                                            <div class="title">Alert me when an assignment is <input type="text" class="form-control input-sm" value="1" maxlength="2"> day(s) past due.</div>
                                            <div class="action action-multi">
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        Immediately <i class="fa fa-caret-down visible-xs"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#">Never</a></li>
                                                        <li class="active"><a href="#">Immediately</a></li>
                                                        <li><a href="#">Summary</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="pref-id-1" value="immediately">
                                    </div>

                                    <div class="slat slat-preference">
                                        <div class="slat-default">
                                            <div class="title">Alert me when a new assignment is available.</div>
                                            <div class="action action-multi">
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        Immediately <i class="fa fa-caret-down visible-xs"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#">Never</a></li>
                                                        <li class="active"><a href="#">Immediately</a></li>
                                                        <li><a href="#">Summary</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="pref-id-1" value="immediately">
                                    </div>

                                    <div class="slat slat-preference">
                                        <div class="slat-default">
                                            <div class="title">Alert me <input type="text" class="form-control input-sm" value="1" maxlength="2"> day(s) before an assignment is due.</div>
                                            <div class="action action-multi">
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        Immediately <i class="fa fa-caret-down visible-xs"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#">Never</a></li>
                                                        <li class="active"><a href="#">Immediately</a></li>
                                                        <li><a href="#">Summary</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="pref-id-1" value="immediately">
                                    </div>

                                    <div class="slat slat-preference">
                                        <div class="slat-default">
                                            <div class="title">Alert me when a student dropped from a class.</div>
                                            <div class="action action-multi">
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        Immediately <i class="fa fa-caret-down visible-xs"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#">Never</a></li>
                                                        <li class="active"><a href="#">Immediately</a></li>
                                                        <li><a href="#">Summary</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="pref-id-1" value="immediately">
                                    </div>

                                    <div class="slat slat-preference">
                                        <div class="slat-default">
                                            <div class="title">Alert me when class is cancelled.</div>
                                            <div class="action action-multi">
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        Immediately <i class="fa fa-caret-down visible-xs"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#">Never</a></li>
                                                        <li class="active"><a href="#">Immediately</a></li>
                                                        <li><a href="#">Summary</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="pref-id-1" value="immediately">
                                    </div>

                                    <div class="slat slat-preference">
                                        <div class="slat-default">
                                            <div class="title">Alert me when a new MOC learning schedule is available.</div>
                                            <div class="action action-multi">
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        Immediately <i class="fa fa-caret-down visible-xs"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#">Never</a></li>
                                                        <li class="active"><a href="#">Immediately</a></li>
                                                        <li><a href="#">Summary</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="pref-id-1" value="immediately">
                                    </div>

                                    <div class="slat slat-preference">
                                        <div class="slat-default">
                                            <div class="title">Alert me <input type="text" class="form-control input-sm" value="1" maxlength="2"> day(s) before the end of a MOC learning schedule with incomplete courses.</div>
                                            <div class="action action-multi">
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        Immediately <i class="fa fa-caret-down visible-xs"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#">Never</a></li>
                                                        <li class="active"><a href="#">Immediately</a></li>
                                                        <li><a href="#">Summary</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="pref-id-1" value="immediately">
                                    </div>

                                </section>
                                <section class="section">
                                    <h3>Student Summary</h3>
                                    <p>Send this summary <a href="#modal-student-summary" data-toggle="modal">weekly on Tuesdays and Thursdays at 5am</a>.</p>
                                </section>
                            </section>
                        </div>

                        <section class="section form-inline">
                            <h3>Delivery Method</h3>
                            Send all my alerts and summaries as <label><input type="radio" name="options"> HTML</label> or <label><input type="radio" name="options"> Plain Text</label>
                        </section>

                        <?php
                            $stickybar = array(
                                'sets' => array(
                                    array(
                                        'html' => '
                                            <a href="#" class="btn btn-success" data-toggle="modal">Save</a>
                                            <a href="#" class="btn btn-default" data-toggle="modal">Cancel</a>
                                        ',
                                    ),
                                ),
                            );
                            echo createStickybar($stickybar);
                        ?>

                        <div class="form-modified">Last Modified: Sep 20, 2013 11:27am by sjuniper</div>

                    </form>
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>Note</h3>
                        <p>Alerts older than 60 days will be automatically archived.</p>
                    </section>
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
                                <select class="form-control" id="supervisor-summary-frequency">
                                    <option value="daily">Daily</option>
                                    <option value="weekly">Weekly</option>
                                    <option value="monthly">Monthly</option>
                                    <option value="quarterly">Quarterly</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Time</label>
                                <div class="input-group bootstrap-timepicker">
                                    <input type="text" class="form-control" id="supervisor-timepicker" value="3:30 PM">
                                    <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                </div><!-- /input-group -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section summary-option summary-weekly" id="supervisor-summary-weekly">
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
                <section class="section summary-option summary-monthly-quarterly" id="supervisor-summary-monthly">
                    <label>Day</label>
                    <ul>
                        <li>
                            <input type="radio" name="supervisor-monthly-type" checked>
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
                            <input type="radio" name="supervisor-monthly-type">
                            <div class="content">
                                Specific day of the month: <input type="text" class="form-control" maxlength="2">
                            </div>
                        </li>
                    </ul>
                </section>
                <section class="section summary-option summary-monthly-quarterly" id="supervisor-summary-quarterly">
                    <label>Day</label>
                    <ul>
                        <li>
                            <input type="radio" name="supervisor-quarterly-type" checked>
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
                            <input type="radio" name="supervisor-quarterly-type">
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
                                <select class="form-control" id="student-summary-frequency">
                                    <option value="daily">Daily</option>
                                    <option value="weekly">Weeky</option>
                                    <option value="monthly">Monthly</option>
                                    <option value="quarterly">Quarterly</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Time</label>
                                <div class="input-group bootstrap-timepicker">
                                    <input type="text" class="form-control" id="student-timepicker">
                                    <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                </div><!-- /input-group -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section summary-option summary-weekly" id="student-summary-weekly">
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
                <section class="section summary-option summary-monthly-quarterly" id="student-summary-monthly">
                    <label>Day</label>
                    <ul>
                        <li>
                            <input type="radio" name="student-monthly-type" checked>
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
                            <input type="radio" name="student-monthly-type">
                            <div class="content">
                                Specific day of the month: <input type="text" class="form-control" maxlength="2">
                            </div>
                        </li>
                    </ul>
                </section>
                <section class="section summary-option summary-monthly-quarterly" id="student-summary-quarterly">
                    <label>Day</label>
                    <ul>
                        <li>
                            <input type="radio" name="student-quarterly-type" checked>
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
                            <input type="radio" name="student-quarterly-type">
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
<?php
include_site_footer($options);
include_site_scripts($options);
?>
    <script>
        $(function(){
            $('#supervisor-summary-frequency').change(function(){
                $("#modal-supervisor-summary .summary-option").removeClass('active');
                $('#supervisor-summary-' + $(this).val()).addClass('active');
            });
            $('#student-summary-frequency').change(function(){
                $("#modal-student-summary .summary-option").removeClass('active');
                $('#student-summary-' + $(this).val()).addClass('active');
            });
            $('#supervisor-timepicker').timepicker({
                upArrowStyle: 'fa fa-chevron-up',
                downArrowStyle: 'fa fa-chevron-down'
              });
            $('#student-timepicker').timepicker({
                upArrowStyle: 'fa fa-chevron-up',
                downArrowStyle: 'fa fa-chevron-down'
            });

            $('.bootstrap-timepicker .input-group-addon').click(function(e){
                e.preventDefault();
                $(this).siblings('input').click();
            });

            $('.slat-preference').on('click','.dropdown-menu a', function(e){
                var $a = $(this),
                    $li = $a.closest('li'),
                    $slat = $a.closest('.slat');

                $li.addClass('active').siblings('li').removeClass('active');
                $slat.find('.dropdown-toggle').html($a.text() + ' <i class="fa fa-caret-down visible-xs"></i>');
                $slat.find('input[type="hidden"]').val($a.text().toLowerCase());
                e.preventDefault();
            });

        });
    </script>
<?php
include_site_end($options);
?>