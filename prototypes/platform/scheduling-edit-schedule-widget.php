<?php

include "includes/helpers.php";

$options = json_decode('{
    "head": {
        "title" : "Edit Event Schedule"
    },
    "header": {
        "nav_main_active": "scheduling"
    },
    "focus": {
            "title": "Edit Event Schedule"
        },
    "footer":{
        "class":["site-footer-min"]
    }
}',true);

$date_now = Date('U');
$date_rounded = $date_now - ($date_now % 1800) + 1800;
$date_future = $date_rounded + (3600 * 1);

include_site_start($options);

?>

    <div class="layout layout-min">
        <div class="container">
            <section class="section-main section-box" id="manualRecurrenceSection">
                <div id="recurrenceFieldsWrapper">
                    <div id="recurrenceFields" style="display: block;">
                        <section>
                            <a class="scheduleEventLink" href="#"><i class="fa-fw fa-chevron-left fa"></i>Return to Event Schedule</a>
                            <h2>Ocurrences
                                <button class="btn btn-default btn-md" id="btnRecurrence" type="button" data-toggle="modal" data-target="#modal-recurrence">
                                    <i class="fa fa-refresh"></i> Recurrence Pattern
                                </button>
                            </h2>
                            <div class="row reccurrenceRowsHeader">
                                <div class="col-md-1" align="center">
                                    #
                                </div>
                                <div class="col-md-4" align="left">
                                    Start Date &amp; Time
                                </div>
                                <div class="col-md-4" align="left">
                                    End Date &amp; Time
                                </div>
                                <div class="col-md-3" align="right">
                                    Actions
                                </div>
                            </div>
                            <div id="lstEvents">
                                <div class="row occurrenceListItem">
                                    <div class="col-md-1" align="center">
                                        <span class="occurrenceNumber">1</span>
                                    </div>
                                    <div class="datetime-group">
                                        <div class="col-md-4" align="left">
                                            <div class="input-group bootstrap-datepicker">
                                                <input type="text" class="form-control start-datetime dtp-form dateTimePicker datetime-input" value="<?= Date('m/d/Y') ?> <?= Date('h:i A', $date_rounded); ?>">
                                                <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4" align="left">
                                            <div class="input-group bootstrap-datepicker">
                                                <input type="text" class="form-control end-datetime dtp-form dateTimePicker datetime-input" value="<?= Date('m/d/Y') ?> <?= Date('h:i A', strtotime('+1 hour', $date_rounded)); ?>">
                                                <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3" align="right">
                                        <button class="btn btn-danger btn-sm btn-remove" type="button" data-eventid="d1632944-dbc6-e411-80f6-0050560211d2"><i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top:10px;margin-left:3px">
                                <div class="col-md-12">
                                    <button id="btnAddEvent" type="button" class="btn btn-success btn-sm">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
            <section class="section section-main section-box" id="scheduleEventSection">
                <h2>Event Details</h2>
                <div class="row">
                    <div class="col-md-5 form-group">
                        <label>Event Name</label>
                        <input class="form-control" data-val="true" data-val-required="This is a required field." id="EventSeriesName" maxlength="64" name="EventSeriesName" type="text" value="This is an event name">
                        <span class="help-block">
                            <span class="field-validation-valid" data-valmsg-for="EventSeriesName" data-valmsg-replace="true"></span>
                        </span>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Event Type</label>
                        <label>NRP</label>
                    </div>
                </div>
                <section class="recurrence show-when-recurrence-updated">
                    <h4 class="recurrence-area" id="RecurrenceSentence">
                        <span id="PatternDescription">
                            Will occur
                            <span class="occurrenceStatementSpan" id="patternTypeValue"></span> every
                            <span class="occurrenceStatementSpan" id="patternUnitNumber"></span>
                            <span class="occurrenceStatementSpan" id="patternUnit"></span> from
                            <span class="occurrenceStatementSpan" id="recurrenceStartTime"></span> to
                            <span class="occurrenceStatementSpan" id="recurrenceEndTime"></span> starting on
                            <span class="occurrenceStatementSpan" id="recurrenceStartDate"></span> and ending after
                            <span class="occurrenceStatementSpan" id="occurenceCount"></span> occurrences
                        </span>
                        <span id="WithModifications show-when-recurrence-updated" style="display:hidden;padding-left:1em;color:green;font-size:14px;font-weight:600"> with modifications </span>
                        <!--     <span class="show-when-recurrence-updated" >
                            <i class="fa fa-2x fa-check"></i> Updated
                        </span> -->
                    </h4>
                </section>
                <section id="recurrence-check" class="section recurrence-area show-when-recurrence-updated">
                    <hr>
                    <div class="row show-when-recurrence-updated">
                        <div class="col-md-12">
                            <h2 class="resource=picker-title">Choose Occurrence</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 remove-right-padding form-group occurrence-list-controls">
                            <select id="ddlEvents" class="form-control" name="occurrence-dropdown">
                                <option value="0" selected="selected">All Occurrences</option>
                            </select>
                            <span id="helpBlock" class="help-block">Updated </i>
                            </span>
                        </div>
                        <div class="col-md-5 form-group">
                            <button class="btn btn-default btn-md" id="btnRecurrence" type="button" data-toggle="modal" data-target="#modal-recurrence">
                                <i class="fa fa-refresh"></i> Recurrences Pattern
                            </button>
                            <a class="btn btn-default recurrenceLink" href="/recurrence"><i class="fa fa-edit"></i> Edit Recurrences</a>
                        </div>
                    </div>
                </section>
                <section class="event-date-time">
                    <h2 class="resource-picker-title">Schedule</h2>
                    <div class="row">
                        <div class="col-sm-3 col-md-3">
                            <div class="form-group">
                                <label class="control-label">Start</label>
                                <div class="input-group bootstrap-datepicker">
                                    <input type="text" class="form-control dtp-form dateTimePicker datetime-input " id="event-start-date" value="<?= Date('m/d/Y') ?> <?= Date('h:i A', $date_rounded); ?>" tabindex="1">
                                    <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <div class="form-group">
                                <label class="control-label">End</label>
                                <div class="input-group bootstrap-datepicker">
                                    <input type="text" class="form-control dtp-form dateTimePicker datetime-input " id="event-end-date" value="<?= Date('m/d/Y') ?> <?= Date('h:i A', strtotime('+1 hour', $date_rounded)); ?>" tabindex="1">
                                    <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 form-group hide-when-recurrence-updated">
                            <label>Recurring Event</label>
                            <button class="btn btn-default btn-md" id="btnRecurrence" type="button" data-toggle="modal" data-target="#modal-recurrence">
                                <i class="fa fa-refresh"></i> Recurrence Pattern
                            </button>
                            <a class="btn btn-default recurrenceLink" href="/recurrence"><i class="fa fa-edit"></i> Edit Recurrences</a>
                        </div>
                    </div>
                </section>
                <section class="section" id="event-resources">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Select Resources
                                <!-- empty span filled by js.   -->
                                <span class="h5"></span>
                            </h2>
                            <div class="resource-picker">
                                <div class="resource-picker-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control resource-picker-input" id="resource-picker-input" placeholder="Search" data-type="rooms" tabindex="4">
                                        <span class="input-group-addon resource-picker-addon" <span class="input-group-addon resource-picker-addon" data-toggle="modal" data-target="#modal-resource"><i class="fa fa-search"></i></span>
                                    </div>
                                    <div class="btn-group resource-picker-type">
                                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" tabindex="5">
                                            <span>All</span> <i class="fa fa-caret-down "></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="#">All</a>
                                            </li>
                                            <li>
                                                <a href="#">Rooms</a>
                                            </li>
                                            <li>
                                                <a href="#">Equipment</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="resource-picker-overlay">
                                    <div class="resource-picker-holder"></div>
                                    <div class="resource-picker-clear">
                                        <a href="#">Close Results</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2>Select Personnel
                                <span class="h5"></span>
                            </h2>
                            <div class="resource-picker">
                                <div class="resource-picker-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control resource-picker-input" placeholder="Search" data-type="people" tabindex="4">
                                        <span class="input-group-addon resource-picker-addon" data-toggle="modal" data-target="#modal-personnel">
                                            <i class="fa fa-search"></i></span>
                                    </div>
                                </div>
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
                <!--  <section class="section" id="resources-table"></section>  -->
                <?php
                include TABLE_RESOURCE_AVAILABILITY;
                include TABLE_ALL_OCCURRENCES;
                ?>
                    <section class="section">
                        <div class="stickybar">
                            <div class="stickybar-floater">
                                <div class="stickybar-outer">
                                    <div class="stickybar-inner">
                                        <div class="stickybar-left">
                                            <div class="btn-group dropup">
                                                <button class="btn btn-success" id="btnSave" name="SaveEvent" type="submit">Save</button>
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <button class="btn btn-success" id="btnSaveAdd" name="SaveAddEvent" type="submit">Save and Add Another</button>
                                                    </li>
                                                    <li>
                                                        <button class="btn btn-success" id="btnSaveCopy" name="SaveCopyEvent" type="submit">Save and Copy</button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a class="btn btn-default" href="/scheduling-calendar.php">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-modified">Last Modified: Mar 10, 2015 at 12:09 AM EST by demo1</div>
                    </section>
            </section>
        </div>
        <!-- /layout -->
    </div>
    <?php
    include MODAL_PERSONNEL;
    include MODAL_RECURRENCE;
    include MODAL_RESOURCE;

    include_site_scripts($options);
?>
        <script src="/scripts/date.format.js"></script>
        <script src="/scripts/prototype.scheduling.js"></script>

        <?php
            include_site_end($options);
?>
