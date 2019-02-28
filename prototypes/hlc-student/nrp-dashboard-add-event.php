<html>
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HealthStream | Add Event</title>

    <!-- Styles
    ================================================== -->

    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.bootstrap.css?">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.plugins.css?">
    <link rel="stylesheet" type="text/css" href="http://hstm-platform.patternmanager.com//content/styles/healthstream.app.css?">

    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.icons.css?">
    <link rel="stylesheet" type="text/css" href="http://hstm-platform.patternmanager.com/content/styles/healthstream.prototype.css?">

    <!-- IE 7/8 Handling
    ================================================== -->
    <script>
        if (document.documentMode < 8) {
            location.href = "unsupported-browser.php";
        } else if (document.documentMode == 8) {
            var html = document.getElementsByTagName('html')[0];
            html.className = 'ie ie8' + html.className;
            var ie8docmode = document.createElement('script');
            ie8docmode.setAttribute('src','/scripts/respond.js');
            document.getElementsByTagName('head')[0].appendChild(ie8docmode);
        }
    </script>

    <!-- Feature Detection Using Modernizr
    ================================================== -->
    <script src="/scripts/modernizr.js"></script>
    <!--[if lt IE 9]>
    <script src="/scripts/respond.js"></script>
    <![endif]-->

</head>
    <body>

            <section class="" id="manualRecurrenceSection">
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
                                                <input type="text" class="form-control start-datetime dtp-form dateTimePicker datetime-input" value="06/19/2018 10:00 AM">
                                                <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4" align="left">
                                            <div class="input-group bootstrap-datepicker">
                                                <input type="text" class="form-control end-datetime dtp-form dateTimePicker datetime-input" value="06/19/2018 11:00 AM">
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
                            <span id="helpBlock" class="help-block">Updated
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
                                    <input type="text" class="form-control dtp-form dateTimePicker datetime-input " id="event-start-date" value="06/19/2018 10:00 AM" tabindex="1">
                                    <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <div class="form-group">
                                <label class="control-label">End</label>
                                <div class="input-group bootstrap-datepicker">
                                    <input type="text" class="form-control dtp-form dateTimePicker datetime-input " id="event-end-date" value="06/19/2018 11:00 AM" tabindex="1">
                                    <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 form-group hide-when-recurrence-updated">
                            <label>Recurring Event</label>
                            <button class="btn btn-default btn-md" id="btnRecurrence" type="button" data-toggle="modal" data-target="#modal-recurrence">
                                <i class="fa fa-refresh"></i> Recurrence Pattern
                            </button>
                            <!-- <a class="btn btn-default recurrenceLink" href="/recurrence"><i class="fa fa-edit"></i> Edit Recurrences</a> -->
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
                                        <span class="input-group-addon resource-picker-addon" <span="" data-toggle="modal" data-target="#modal-resource"><i class="fa fa-search"></i></span>
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
                <section class="section" id="resources-tables" style="display: none">
    <h2>Resource Availability</h2>
    <div class="rth">
        <table class="rth-table">
            <tbody>
                <tr>
                    <th colspan="2" class="rth-header" data-blocks="18">Resources</th>
                    <th colspan="16" class="rth-divider" id="date-update">Tuesday, June 19, 2018</th>
                    <th colspan="2" class="rth-divider">Wed, Sep 9, 2015</th>
                </tr><tr><th colspan="2" class="rth-resource">Name</th>
                <th class="rth-divider">4:00pm</th>
                <th>4:30pm</th>
                <th>5:00pm</th>
                <th>5:30pm</th>
                <th>6:00pm</th>
                <th>6:30pm</th>
                <th>7:00pm</th>
                <th>7:30pm</th>
                <th>8:00pm</th>
                <th>8:30pm</th>
                <th>9:00pm</th>
                <th>9:30pm</th>
                <th>10:00pm</th>
                <th>10:30pm</th>
                <th>11:00pm</th>
                <th>11:30pm</th>
                <th class="rth-divider">12:00am</th>
                <th>12:30am</th>
            </tr>
        </tbody>
        <tbody>
            <tr class="rth-item">
                <td class="rth-resource">
                    <a href="#" class="rth-detail" data-id="R1" data-title="Room 102 North" data-start="1441736068" data-end="1441752268">Room 102 North</a>
                </td><td class="rth-options">
                <button class="btn btn-xs btn-danger rth-btn-remove" data-id="R1">
                    <i class="fa fa-fw fa-times"></i>
                </button>
            </td>
            <td class="rth-block rth-divider"></td>
            <td class="rth-block"></td>
            <td class="rth-block"></td>
            <td class="rth-block"></td>
            <td class="rth-block" colspan="10">
                <div class="rth-proposed"><i class="fa fa-check"></i> Available</div>
            </td><td class="rth-block"></td>
            <td class="rth-block"></td>
            <td class="rth-block rth-divider"></td><td class="rth-block"></td>
        </tr>
        <tr class="rth-nested-item">
            <td class="rth-resource">
                <span class="rth-indent">↳</span><a href="#" class="rth-detail" data-id="E0" data-title="EKG TV" data-start="1441736968" data-end="1441751368">EKG TV</a>
            </td>
            <td class="rth-options"><button class="btn btn-xs btn-danger rth-btn-remove" data-id="E0"><i class="fa fa-fw fa-times"></i></button>
            </td>
            <td class="rth-block rth-divider"></td>
            <td class="rth-block"></td>
            <td class="rth-block"></td>
            <td class="rth-block"></td>
            <td class="rth-block" colspan="9"><div class="rth-proposed"><i class="fa fa-check"></i> Available</div></td>
            <td class="rth-block"></td><td class="rth-block"></td><td class="rth-block"></td>
            <td class="rth-block rth-divider"></td><td class="rth-block"></td>
        </tr>
        <tr class="rth-item">
            <td class="rth-resource"><a href="#" class="rth-detail" data-id="E3" data-title="Ventilator 1" data-start="1441736968" data-end="1441751368">Ventilator 1</a></td><td class="rth-options"><button class="btn btn-xs btn-danger rth-btn-remove" data-id="E3"><i class="fa fa-fw fa-times"></i></button>
        </td>
        <td class="rth-block rth-divider"></td>
        <td class="rth-block"></td>
        <td class="rth-block"></td>
        <td class="rth-block"></td>
        <td class="rth-block" colspan="9"><div class="rth-proposed"><i class="fa fa-check"></i> Available</div></td>
        <td class="rth-block"></td>
        <td class="rth-block"></td>
        <td class="rth-block"></td>
        <td class="rth-block rth-divider"></td>
        <td class="rth-block"></td>
    </tr>
    <tr class="rth-item">
            <td class="rth-resource"><a href="#" class="rth-detail" data-id="P#" data-title="Davis Dolezal" data-start="1441736968" data-end="1441751368">Davis Dolezal</a><span class="instructor-label">Instructor</span></td><td class="rth-options"><button class="btn btn-xs btn-danger rth-btn-remove" data-id="P#"><i class="fa fa-fw fa-times"></i></button>
        </td>
        <td class="rth-block rth-divider"></td>
        <td class="rth-block"></td>
        <td class="rth-block"></td>
        <td class="rth-block"></td>
        <td class="rth-block" colspan="9"><div class="rth-proposed"><i class="fa fa-check"></i> Available</div></td>
        <td class="rth-block"></td>
        <td class="rth-block"></td>
        <td class="rth-block"></td>
        <td class="rth-block rth-divider"></td>
        <td class="rth-block"></td>
    </tr>
</tbody>
</table>
<div class="rth-loading"></div>
</div>
</section>
                <section class="section show-when-recurrence-updated all-occurrences-list" id="all-occurrences-list">
    <div class="row">
        <div class="col-md-12">
            <h2>Resources and Personnel
                <span style="font-size:17px;">( <strong>All Occurrences</strong> )
            </span></h2>
            <span>* click on table to add or remove scheduled dates for resources</span>
            <span class="pull-right" style="font-size: 12px"> <i class="fa fa-1 fa-circle"></i>
                <span style="font-size: 14px"> &nbsp; scheduled </span>
            </span>
        </div>
    </div>
    <div class="table-responsive table-scrollable">
        <table class="table table-condensed table-striped all-occurrences-table">
            <thead>
                <tr id="all-occurrences-dates" class="table-clickable all-occurrences-dates" style="height: 51px">
                    <th class="all-occurrences-blank-date">Resources</th>
                </tr>
            </thead>
            <tbody class="all-occurrences-body">
                <tr height="38px" class="occurrences-row">
                    <td class="resource-title" value="">
                        <a href="#">Projector NRP 1999</a>
                    </td>
                </tr>
                <tr height="38px" class="occurrences-row">
                    <td class="resource-title" value="">
                        <a href="#">Ben's Laptop w/ ie8</a>
                    </td>
                </tr>
                <tr height="38px" class="occurrences-row">
                    <td class="resource-title" value="">
                        <a href="#">NA: Room West</a>
                    </td>
                </tr>
                <tr height="38px" class="occurrences-row">
                    <td class="resource-title" value="">
                        <a href="#">Parker, Scott </a>
                        <br>
                        <span class="instructor-label">Instructor</span>
                    </td>
                </tr>
                <tr height="38px" class="occurrences-row">
                    <td class="resource-title" value="">
                        <a href="#">Winner, Laura </a>
                        <br>
                        <span class="instructor-label">Instructor</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
                    <section class="section">
                        <div class="stickybar">
                            <div class="stickybar-floater">
                                <div class="stickybar-outer">
                                    <div class="stickybar-inner">
                                        <div class="stickybar-left">
                                            <button class="btn btn-success" id="btnSave" name="SaveEvent" type="submit">Save</button>

                                            <a class="btn btn-default" href="#" onclick="parent.closeLiveEventsModal();" >Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-modified">Last Modified: Mar 10, 2015 at 12:09 AM EST by demo1</div>
                    </section>
            </section>
        <!-- /layout -->

    <!-- Plugins -->
    <div id="modal-recurrence" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" data-backdrop="static" novalidate="novalidate">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                        <h4 class="modal-title">Recurrence Rules</h4>
                    </div>
                    <div class="modal-body" onkeydown="return">
                        <div class="row">
                            <div class="col-sm-3 remove-right-padding">
                                <div class="form-group">
                                    <label class="control-label" for="PatternTypeId">Repeats</label>
                                    <select class="form-control" id="ddlPatternType" name="PatternTypeId">
                                        <option value="1">Same Day</option>
                                        <option value="2">Daily</option>
                                        <option value="4" selected="selected">Weekly</option>
                                        <option value="8">Monthly</option>
                                        <option value="16">Yearly</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 remove-right-padding">
                                <div class="form-group">
                                    <div class="col-xs-12 remove-left-padding">
                                        <label class="control-label">Every</label>
                                    </div>
                                    <div class="col-xs-5 remove-left-padding remove-right-padding" id="txtPatternIncrementValue">
                                        <input class="form-control recurrence-validate-field" data-val="true" data-val-number="The field PatternIncrementValue must be a number." id="PatternIncrementValue" maxlength="3" name="PatternIncrementValue" type="text" value="1">
                                        <span class="help-block">
                                            <span class="field-validation-valid" data-valmsg-for="PatternIncrementValue" data-valmsg-replace="false">Invalid
                                            </span>
                                        </span>
                                    </div>
                                    <div id="lblMinuteInc" class="patternTimeUnit">minute(s)</div>
                                    <div id="lblDayInc" class="patternTimeUnit">day(s)</div>
                                    <div id="lblWeekInc" class="patternTimeUnitSelected patternTimeUnit">week(s)</div>
                                    <div id="lblMonthInc" class="patternTimeUnit">month(s)</div>
                                    <div id="lblYearInc" class="patternTimeUnit">year(s)</div>
                                </div>
                            </div>
                            <div class="col-sm-6 remove-right-padding">
                                <div id="grpDayOfWeek" class="form-group" style="display: block;">
                                    <div class="col-xs-12 remove-left-padding">
                                        <label class="control-label">On</label>
                                    </div>
                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-default">
                                            <input type="checkbox" class="recurrence-validate-field" name="PatternDayOfTheWeekOptions" value="1"> S
                                        </label>
                                        <label class="btn btn-default ">
                                            <input type="checkbox" class="recurrence-validate-field" name="PatternDayOfTheWeekOptions" value="2"> M
                                        </label>
                                        <label class="btn btn-default ">
                                            <input type="checkbox" class="recurrence-validate-field" name="PatternDayOfTheWeekOptions" value="4"> T
                                        </label>
                                        <label class="btn btn-default ">
                                            <input type="checkbox" class="recurrence-validate-field" name="PatternDayOfTheWeekOptions" value="8"> W
                                        </label>
                                        <label class="btn btn-default ">
                                            <input type="checkbox" class="recurrence-validate-field" name="PatternDayOfTheWeekOptions" value="16"> T
                                        </label>
                                        <label class="btn btn-default active">
                                            <input type="checkbox" class="recurrence-validate-field" name="PatternDayOfTheWeekOptions" value="32" checked="checked"> F
                                        </label>
                                        <label class="btn btn-default ">
                                            <input type="checkbox" class="recurrence-validate-field" name="PatternDayOfTheWeekOptions" value="64"> S
                                        </label>
                                    </div>
                                    <span id="grpDayOfWeek-validation" class="help-block has-error hidden">Must select 1 or more days</span>
                                </div>
                                <div id="grpDayOptions" class="form-group small-negative-right-margins" style="display: none;">
                                    <div class="col-xs-12 remove-left-padding">
                                        <label class="control-label">On</label>
                                    </div>
                                    <div>
                                        <div class="col-xs-6 col-sm-5 remove-left-padding remove-right-padding" id="grpMonthOfYear" style="margin-right: 5px; display: none;">
                                            <select class="form-control" data-val="true" data-val-number="The field PatternMonthOfYearId must be a number." id="ddlPatternMonthOfYear" name="PatternMonthOfYearId">
                                                <option selected="selected" value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-offset-2 col-sm-offset-0 col-xs-pull-2 col-sm-pull-0 col-xs-4 remove-left-padding remove-right-padding">
                                            <select class="form-control" data-val="true" id="ddlPatternOrderOption" name="PatternOrderOptionId">
                                                <option selected="selected" value="7">Day</option>
                                                <option value="1">First</option>
                                                <option value="2">Second</option>
                                                <option value="3">Third</option>
                                                <option value="4">Fourth</option>
                                                <option value="6">Last</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-2 col-xs-pull-2 col-sm-pull-0 remove-left-padding remove-right-padding" id="txtDay" style="display: inline-block;">
                                            <input class="form-control recurrence-validate-field" data-val="true" id="PatternDay" name="PatternDay" type="text" value="1">
                                            <span class="help-block">
                                                <span class="field-validation-valid" data-valmsg-for="PatternDay" data-valmsg-replace="false">
                                                    Invalid
                                                </span>
                                            </span>
                                        </div>
                                        <div class="col-xs-7 remove-left-padding remove-right-padding" id="grpDayOption" style="display: none;">
                                            <select class="form-control" data-val="true" data-val-number="The field PatternDayOptionId must be a number." id="ddlDayOption" name="PatternDayOptionId">
                                                <option value="128">Day</option>
                                                <option value="256">Weekday</option>
                                                <option value="512">Weekend Day</option>
                                                <option value="1">Sunday</option>
                                                <option value="2">Monday</option>
                                                <option value="4">Tuesday</option>
                                                <option value="8">Wednesday</option>
                                                <option value="16">Thursday</option>
                                                <option selected="selected" value="32">Friday</option>
                                                <option value="64">Saturday</option>
                                            </select>
                                        </div>
                                    </div>
                                    <span id="grpDayOptions-validation" class="col-xs-12 remove-left-padding help-block has-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row datetime-group">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label" for="PatternStartDate">Start Date:</label>
                                    <div class="input-group" id="dtpPatternStartDate">
                                        <input class="form-control datetime-input dtp-form  dateTimePickerDate" data-val="true" data-val-date="Must be a valid date" id="PatternStartDate" name="PatternStartDate" type="text" value="06/19/2018">
                                        <span class="input-group-addon dtp-form datepicker-icon btn">
                                            <i class="fa fa-calendar dtp-form"></i>
                                        </span>
                                    </div>
                                    <span class="help-block">
                                        <span class="field-validation-valid" data-valmsg-for="PatternStartDate" data-valmsg-replace="true">
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <div class="col-xs-12 remove-left-padding">
                                        <label class="control-label">End</label>
                                    </div>
                                    <div id="txtAfterOption" class="col-xs-2 remove-left-padding remove-right-padding" style="margin: 6px 0px 0px 5px; display: none;">
                                        After
                                    </div>
                                    <div id="grpEndDateOption" class="col-xs-4 col-sm-3 remove-left-padding remove-right-padding" style="margin-right: 5px; display: block;">
                                        <select class="form-control" id="ddlEndDateOption" name="ddlEndDateOption">
                                            <option value="1">After</option>
                                            <option value="2">By</option>
                                        </select>
                                    </div>
                                    <div id="txtPatternOccurrenceCount" class="col-xs-7 col-sm-6 remove-left-padding remove-right-padding">
                                        <div class="col-xs-4 remove-left-padding remove-right-padding">
                                            <input class="form-control recurrence-validate-field" data-val="true" data-val-number="The field PatternOccurrenceCount must be a number." id="PatternOccurrenceCount" maxlength="3" name="PatternOccurrenceCount" type="text" value="5">
                                            <span class="help-block">
                                                <span class="field-validation-valid" data-valmsg-for="PatternOccurrenceCount" data-valmsg-replace="false">
                                                    Invalid
                                                </span>
                                            </span>
                                        </div>
                                        <div style="margin: 6px 0 0 5px; display: inline-block;">occurrence(s)</div>
                                    </div>
                                    <div id="dtPatternEndDate" class="col-xs-7 col-sm-6 remove-left-padding" style="display: none;">
                                        <div class="input-group" id="dtpPatternEndDate">
                                            <input class="form-control datetime-input dateTimePickerDate dtp-form" data-val="true" data-val-date="Must be a valid date" id="PatternEndDate" name="PatternEndDate" type="text" value="06/19/2018">
                                            <span class="input-group-addon dtp-form datepicker-icon btn">
                                                <i class="fa fa-calendar dtp-form"></i>
                                            </span>
                                        </div>
                                        <span class="help-block">
                                            <span class="field-validation-valid" data-valmsg-for="PatternEndDate" data-valmsg-replace="true">
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label" for="EventStartTime">Start Time:</label>
                                    <div class="input-group bootstrap-timepicker" id="dtpEventStartTime">
                                        <input class="form-control datetime-input dateTimePickerTime  dtp-form" data-val="true" data-val-date="Must be a valid time" id="EventStartTime" name="EventStartTime" type="text" value="10:00 AM">
                                        <span class="input-group-addon dtp-form timepicker-icon btn">
                                            <i class="fa fa-clock-o dtp-form"></i>
                                        </span>
                                    </div>
                                    <span class="help-block">
                                        <span class="field-validation-valid">
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div id="grpEndTimeDuration" class="col-sm-4" style="display: block;">
                                <div class="form-group">
                                    <label class="control-label" for="EventEndTime">End Time:</label>
                                    <div class="input-group bootstrap-timepicker" id="dtpEventEndTime">
                                        <input class="form-control datetime-input dateTimePickerTime  dtp-form" id="EventEndTime" name="EventEndTime" type="text" value="11:00 AM">
                                        <span class="input-group-addon dtp-form timepicker-icon btn">
                                            <i class="fa fa-clock-o dtp-form"></i>
                                        </span>
                                    </div>
                                    <span class="help-block">
                                        <span class="field-validation-valid">
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="has-error">
                            <span id="has-events-validation" class="help-block has-error hidden">The recurrence rules must contain at least 1 occurrence</span>
                            <span id="invalid-resource-validation" class="help-block has-error hidden">Invalid time condition based on event time change</span>
                            <span id="invalid-event-times-validation" class="help-block has-error hidden">The end time must be greater than the start time.</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" id="btnUpdateRecurrence" data-dismiss="modal" type="button">Update</button>
                        <button class="btn btn-default" data-dismiss="modal" type="button">Cancel</button>
                    </div>
                    <input id="EndBy" name="EndBy" type="hidden" value="false">
                    <input id="IsPatternModified" name="IsPatternModified" type="hidden" value="True">
                </div>
            </div>
        </div>

        <div id="modal-resource" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                    <h4 class="modal-title" id="tModal">Resources</h4>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body ">
                        <section class="section minimize-modal-section" id="event-resources">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <div class="resource-picker">
                                        <div class="resource-picker-search">
                                            <div class="input-group">
                                                <input type="text" id="resourceSearchMdl" class="form-control resource-picker-input">
                                                <span id="btnSearchMdl" class="input-group-addon resource-picker-addon">
                                                    <i class="fa fa-search"></i>
                                                </span>
                                            </div>
                                            <div id="grpResourceTypeMdl" class="btn-group resource-picker-type">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                                                    <span id="spnResourceClassificationIdMdl" data-id="3">All</span>
                                                    <span class="fa fa-caret-down"></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right resource-menu">
                                                    <li>
                                                        <a style="cursor: pointer" data-id="">All</a>
                                                    </li>
                                                    <li>
                                                        <a style="cursor: pointer" id="room" data-id="B">Room</a>
                                                    </li>
                                                    <li>
                                                        <a style="cursor: pointer" data-id="E">Equipment</a>
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
                            </div>
                            </section>
                            <section class="section recurrence-area show-when-recurrence-updated  minimize-modal-section">

                            <div class="row show-when-recurrence-updated">
                                <div class="col-md-12">
                                    <h3 class="resource=picker-title">Choose Occurrence</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 remove-right-padding form-group occurrence-list-controls">
                                    <select id="ddlEventsResources" class="form-control occurrence-dropdown" name="occurrence-dropdown">
                                        <option value="1" selected="selected">All Occurrences</option>
                                    </select>
                                    <span id="helpBlock" class="help-block">Updated
                                    </span>
                                </div>

                            </div>
                        </section>
                         <!--    <section style="margin:0 0 20px;">
                                <h3>Apply Changes To</h3>
                                <label id="lblEventsMdl" class="form-label lbl-date"></label>
                                <select id="ddlEventsMdl" class="form-control" style="display: none;"></select>
                            </section> -->
                            <sectionid="secresults">
                                <h3>
                                    Results
                                    <small id="smPagingCount">Showing 1-6 of 63</small>
                                    <div class="pull-right hidden-xs">Add/Remove</div>
                                </h3>
                                <div class="grpResourceResults" id="grpResults">


        <div class="slat">
        <div class="slat-default">
        <div class="title"><a href="#">Northside Building</a></div>
        <ul class="meta">
        <li><span class="meta-type">Building</span></li>
        <li><span class="meta-label">Address:</span><span class="meta-value">209 10th Ave S</span></li>
        <li><span class="meta-label">City:</span><span class="meta-value">Nashville</span></li>
        <li><span class="meta-label">State:</span><span class="meta-value">TN</span></li>
        <li><span class="meta-label">Zip:</span><span class="meta-value">37203</span></li>
        </ul>
        <div class="action">
            <a class="btn btn-sm btn-default" href="#">Add<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
        </div></div>
        </div>


        <div class="slat">
        <div class="slat-default">
        <div class="title"><a href="#">Eastside Building</a></div>
        <ul class="meta">
        <li><span class="meta-type">Building</span></li>
        <li><span class="meta-label">Address:</span><span class="meta-value">206 10th Ave S</span></li>
        <li><span class="meta-label">City:</span><span class="meta-value">Nashville</span></li>
        <li><span class="meta-label">State:</span><span class="meta-value">TN</span></li>
        <li><span class="meta-label">Zip:</span><span class="meta-value">37203</span></li>
        </ul>
        <div class="action">
            <a class="btn btn-sm btn-default" href="#">Add<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
        </div></div>
        </div>


        <div class="slat">
        <div class="slat-default">
        <div class="title"><a href="#">Southside Building</a></div>
        <ul class="meta">
        <li><span class="meta-type">Building</span></li>
        <li><span class="meta-label">Address:</span><span class="meta-value">106 11th Ave E</span></li>
        <li><span class="meta-label">City:</span><span class="meta-value">Nashville</span></li>
        <li><span class="meta-label">State:</span><span class="meta-value">TN</span></li>
        <li><span class="meta-label">Zip:</span><span class="meta-value">37203</span></li>
        </ul>
        <div class="action">
            <a class="btn btn-sm btn-default" href="#">Add<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
        </div></div>
        </div>


        <div class="slat">
        <div class="slat-default">
        <div class="title"><a href="#">Westside Building</a></div>
        <ul class="meta">
        <li><span class="meta-type">Building</span></li>
        <li><span class="meta-label">Address:</span><span class="meta-value">1189 Hermitage Square</span></li>
        <li><span class="meta-label">City:</span><span class="meta-value">Nashville</span></li>
        <li><span class="meta-label">State:</span><span class="meta-value">TN</span></li>
        <li><span class="meta-label">Zip:</span><span class="meta-value">37216</span></li>
        </ul>
        <div class="action">
            <a class="btn btn-sm btn-default" href="#">Add<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
        </div></div>
        </div>


        <div class="slat">
        <div class="slat-default">
        <div class="title"><a href="#">Classroom A</a></div>
        <ul class="meta">
        <li><span class="meta-type">Room</span></li>
        <li><span class="meta-label">Building:</span><span class="meta-value">B7</span></li>
        </ul>
        <div class="action">
            <a class="btn btn-sm btn-default" href="#">Add<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
        </div></div>
        </div>


        <div class="slat">
        <div class="slat-default">
        <div class="title"><a href="#">Projector NRP 1999</a></div>
        <ul class="meta">
        <li><span class="meta-type">Equipment</span></li>
        <li><span class="meta-label">Type:</span><span class="meta-value">Projector</span></li>
        </ul>
        <div class="action">
            <a class="btn btn-sm btn-default" href="#">Add<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
        </div></div>
        </div>


        <div class="slat">
        <div class="slat-default">
        <div class="title"><a href="#">Room 101 West</a></div>
        <ul class="meta">
        <li><span class="meta-type">Room</span></li>
        <li><span class="meta-label">Building:</span><span class="meta-value">B1</span></li>
        </ul>
        <div class="action">
            <a class="btn btn-sm btn-default" href="#">Add<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
        </div></div>
        </div>


        <div class="slat">
        <div class="slat-default">
        <div class="title"><a href="#">Room 402 East</a></div>
        <ul class="meta">
        <li><span class="meta-type">Room</span></li>
        <li><span class="meta-label">Building:</span><span class="meta-value">B1</span></li>
        </ul>
        <div class="action">
            <a class="btn btn-sm btn-default" href="#">Add<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
        </div></div>
        </div>


        <div class="slat">
        <div class="slat-default">
        <div class="title"><a href="#">Room 202 South</a></div>
        <ul class="meta">
        <li><span class="meta-type">Room</span></li>
        <li><span class="meta-label">Building:</span><span class="meta-value">B1</span></li>
        </ul>
        <div class="action">
            <a class="btn btn-sm btn-default" href="#">Add<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
        </div></div>
        </div>


        <div class="slat">
        <div class="slat-default">
        <div class="title"><a href="#">Room 201 South</a></div>
        <ul class="meta">
        <li><span class="meta-type">Room</span></li>
        <li><span class="meta-label">Building:</span><span class="meta-value">B1</span></li>
        </ul>
        <div class="action">
            <a class="btn btn-sm btn-default" href="#">Add<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
        </div></div>
        </div>


        <div class="slat">
        <div class="slat-default">
        <div class="title"><a href="#">Room 203 South</a></div>
        <ul class="meta">
        <li><span class="meta-type">Room</span></li>
        <li><span class="meta-label">Building:</span><span class="meta-value">B1</span></li>
        </ul>
        <div class="action">
            <a class="btn btn-sm btn-default" href="#">Add<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
        </div></div>
        </div>

                             <!--    </section> -->
                                </div>

                        </sectionid="secresults"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <div class="btn-group pull-right">
                                <button id="btnPageDown" class="btn btn-default" disabled="disabled" type="button"><i class="fa fa-chevron-left"></i></button>
                                <button id="btnPageUp" class="btn btn-default" type="button"><i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modal-personnel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                    <h4 class="modal-title" id="tModal">Personnel</h4>
                                </div>
                            </div>

                        </div>
                        <div class="modal-body">
                        <div class="row">
                                <div class="col-md-12 form-group">
                                    <div class="resource-picker">
                                        <div class="resource-picker-search">
                                            <div class="input-group">
                                                <input type="text" id="peopleSearchMdl" class="form-control form-control resource-picker-input">
                                                <span id="btnSearchMdl" class="input-group-addon resource-picker-addon">
                                                    <i class="fa fa-search"></i>
                                                </span>
                                            </div>
                                            <div id="grpResourceTypeMdl" class="btn-group resource-picker-type" style="display: none;">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                                                    <span id="spnResourceClassificationIdMdl" data-id="3">All</span>
                                                    <span class="fa fa-caret-down"></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li>
                                                        <a style="cursor: pointer" data-id="3">All</a>
                                                    </li>
                                                    <li>
                                                        <a style="cursor: pointer" data-id="1">Room</a>
                                                    </li>
                                                    <li>
                                                        <a style="cursor: pointer" data-id="2">Equipment</a>
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
                            </div>
                        <section class="section recurrence-area show-when-recurrence-updated minimize-modal-section">

                            <div class="row show-when-recurrence-updated">
                                <div class="col-md-12">
                                    <h3 class="resource=picker-title">Choose Occurrence</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 remove-right-padding form-group occurrence-list-controls">
                                    <select id="ddlEventsPersonnel" class="form-control" name="occurrence-dropdown">
                                        <option value="1" selected="selected">All Occurrences</option>
                         <!--                <option value="2">10/05/2015 4:30 PM - 10/05/2015 5:30 PM</option>
                                        <option value="3">10/06/2015 4:30 PM - 10/06/2015 5:30 PM</option>
                                        <option value="4">10/07/2015 4:30 PM - 10/07/2015 5:30 PM</option>
                                        <option value="5">10/08/2015 4:30 PM - 10/08/2015 5:30 PM</option>
                                        <option value="6">10/09/2015 4:30 PM - 10/09/2015 5:30 PM</option>
                                        <option value="7">10/10/2015 4:30 PM - 10/10/2015 5:30 PM</option>
                                        <option value="8">10/15/2015 4:30 PM - 10/15/2015 5:30 PM</option>
                                        <option value="9">10/22/2015 4:30 PM - 10/22/2015 5:30 PM</option>
                                        <option value="10">10/29/2015 4:30 PM - 10/29/2015 5:30 PM</option>
                                        <option value="11">11/06/2015 4:30 PM - 11/06/2015 5:30 PM</option> -->
                                    </select>
                                    <span id="helpBlock" class="help-block">Updated
                                    </span>
                                </div>

                            </div>
                        </section>
                            <section style="margin:0 0 20px;">
                                <h3>Apply Changes To</h3>
                                <label id="lblEventsMdl" class="form-label lbl-date"></label>
                                <select id="ddlEventsMdl" class="form-control" style="display: none;"></select>
                            </section>
                            <section id="secResults">
                                <h3>
                                    Results
                                    <small id="smPagingCount">Showing 1-6 of 28</small>
                                    <div class="pull-right hidden-xs">Add/Remove</div>
                                </h3>
                                <div class="grpPeopleResults" id="grpResults">
                       <!--        <section class="section"> -->

            <div class="slat">
            <div class="slat-default">
            <div class="title"><a href="#">Stark, John</a></div>
            <ul class="meta">
            <li><span class="meta-type">Student</span></li>
            <li><span class="meta-label">User ID:</span><span class="meta-value">ironman</span></li>
            <li><span class="meta-label">Status:</span><span class="meta-value">Active</span></li>
            <li><span class="meta-label">Affiliation:</span><span class="meta-value">Department</span></li>
            </ul>
            <div class="action">
                <a class="btn btn-sm btn-default" href="#">Add<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
            </div></div>
            </div>


            <div class="slat">
            <div class="slat-default">
            <div class="title"><a href="#">Smith, John D</a></div>
            <ul class="meta">
            <li><span class="meta-type">Instructor</span></li>
            <li><span class="meta-label">User ID:</span><span class="meta-value">jinstructor</span></li>
            <li><span class="meta-label">Status:</span><span class="meta-value">Active</span></li>
            <li><span class="meta-label">Affiliation:</span><span class="meta-value">Department</span></li>
            </ul>
            <div class="action">
                <a class="btn btn-sm btn-default" href="#">Add<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
            </div></div>
            </div>


            <div class="slat">
            <div class="slat-default">
            <div class="title"><a href="#">Nye, Bill</a></div>
            <ul class="meta">
            <li><span class="meta-type">Student</span></li>
            <li><span class="meta-label">User ID:</span><span class="meta-value">scienceguy</span></li>
            <li><span class="meta-label">Status:</span><span class="meta-value">Active</span></li>
            <li><span class="meta-label">Affiliation:</span><span class="meta-value">Department</span></li>
            </ul>
            <div class="action">
                <a class="btn btn-sm btn-default" href="#">Add<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
            </div></div>
            </div>

                               <!--  </section> -->
                                </div>
                            </section>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <div class="btn-group pull-right">
                                <button id="btnPageDown" class="btn btn-default" disabled="disabled" type="button"><i class="fa fa-chevron-left"></i></button>
                                <button id="btnPageUp" class="btn btn-default" type="button"><i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <script src="http://hstm-platform.patternmanager.com/scripts/jquery.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/underscore.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/moment.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/clndr.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/bootstrap.plugins.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/bootstrap-datepicker.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/bootstrap-timepicker.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/bootstrap-datetimepicker.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/bootstrap-colorselector.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/full-calendar.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/date.format.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/select2.js"></script>

    <!-- HealthStream Scripts -->
    <script src="http://hstm-platform.patternmanager.com/scripts/healthstream.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/healthstream.focusbar.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/healthstream.stickybar.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/healthstream.utilities.autocomplete.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/healthstream.utilities.equalize.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/healthstream.utilities.growl.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/healthstream.utilities.interrupt.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/healthstream.utilities.limitHeight.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/healthstream.utilities.toggleText.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/healthstream.wizard.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/healthstream.subnav.js"></script>

    <!-- Prototype JS Scripts -->
    <script src="http://hstm-platform.patternmanager.com/scripts/jquery.dataTables.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/dataTables.bootstrap.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/dataTables.tableTools.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/prototype.validation/formValidation.min.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/prototype.validation/framework/bootstrap.min.js"></script>


    <script type='text/javascript'>

    function getLocationOptions(options) {
        var $b = $('select[name="building"]'),
            $r = $('select[name="room"]'),
            buildings = '',
            building = $b.attr('data-select'),
            rooms = '',
            room = $r.attr('data-select');

        $.getJSON('/server.php?', {
            action: 'filter',
            building: building,
            room: room
        }, function(data) {

            $.each(data.buildings, function() {
                buildings += '<option value="' + this.id + '"' + ((this.selected) ? ' selected' : '') + '>' + this.name + '</option>';
                if (this.selected) {
                    $b.attr('data-select', this.id);
                }
            });
            $.each(data.rooms, function() {
                rooms += '<option value="' + this.id + '"' + ((this.selected) ? ' selected' : '') + '>' + this.name + '</option>';
                if (this.selected) {
                    $r.attr('data-select', this.id);
                }
            });
            $b.html(buildings).val($b.attr('data-select')).select2();;
            $r.html(rooms).val($r.attr('data-select')).select2();

            if (options && options.allowEmpty === false) {
                $b.find('option:eq(0)').remove();
                $r.find('option:eq(0)').remove();
            }

            $(document).trigger('locationUpdated');
        });
    }

    function validate($el) {
        var errors = 0;
        $el.find('.required').each(function() {
            var $t = $(this),
                $p = $t.parents('.form-group');

            if ($t.val() === '') {
                $p.addClass('has-error');
                errors++;
            } else {
                $p.removeClass('has-error');
            }
        });
        if (errors > 0) {
            $el.find('.error:eq(0) .required').focus();
            return false;
        } else {
            // alert('The client side validation passed');
            return true;
        }
    }

    function getParam(param) {
        param = param.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
        var pattern = '[\\?&]' + param + '=([^&#]*)',
            regex = new RegExp(pattern),
            results = regex.exec(window.location.href);
        if (results !== null) {
            return results[1];
        }
    }

    $(function() {
        $('.map-blocker').click(function() {
            $(this).remove();
        });
        $('a[href="#"]').click(function(event) {
            event.preventDefault();
        });

        if (getParam('tab')) {
            $('.nav-collapsing-tabs a[href="#tab-' + getParam('tab') + '"]').click();
        }

        $(document).on('locationUpdated', function() {
            var $building = $('select[name="building'),
                $room = $('select[name="room'),
                $metaBuilding = $('#meta-building'),
                $metaRoom = $('#meta-room');

            if ($building.length > 0 && $building.val()) {
                $metaBuilding
                    .find('a')
                    .attr('href', '/building-view/' + $building.val() + '/')
                    .text($building.find('option:selected').text())
                    .end()
                    .show();
            } else {
                //$metaBuilding.hide();
            }

            if ($room.length > 0 && $room.val()) {
                $metaRoom
                    .find('a')
                    .attr('href', '/building-view/' + $building.val() + '/room-view/' + $room.val() + '/')
                    .text($room.find('option:selected').text())
                    .end()
                    .show();
            } else {
                //$metaRoom.hide();
            }

        });

        // Permission Modal
        $('.collapsable-table').on('click', '.collapsable-options button', function() {
            var $button = $(this),
                $row = $button.parents('.collapsable-row'),
                title = $button.attr('data-title'),
                $remove = $('#modal-permissions').find('.btn-danger'),
                isDisabled = $(this).closest('.collapsable-table').hasClass('collapsable-table-disabled');
            $row.addClass('collapsable-row-active');
            $('#modal-permissions .modal-title').html(title);
            $('#modal-permissions .collapsable-table').html($row.find('.collapsable-check').clone());
            $('#modal-permissions').modal('show');
            $('#modal-permissions input[type="checkbox"]').removeAttr('id');
            if (isDisabled) {
                $remove.hide();
            }
        });
        $('#modal-permissions').on('click', 'input[type="checkbox"]', function() {
            var $el = $(this),
                $checkboxes = $el.closest('.modal-body').find('input[type="checkbox"]'),
                $row = $('.collapsable-row-active'),
                index = $checkboxes.index($el);
            $row.find('input[type="checkbox"]').eq(index).click();
        });
        $('#modal-permissions').on('hide.bs.modal', function() {
            $('.per-row-active').removeClass('collapsable-row-active');
        });


        $('#interrupt-modal-example').click(function(e) {
            e.preventDefault();
            HealthStream.utilities.interrupt({
                type: 'warning',
                title: 'You might want to check',
                text: '%3Cul%3E%0A%3Cli%3EThing%20you%20shouldn%27t%20do.%3C%2Fli%3E%0A%3Cli%3EAnother%20thing%20you%20should%20reconsider.%3C%2Fli%3E%0A%3C%2Ful%3E',
                actions: [{
                    label: 'Go Back'
                }]
            });
        });
    });
    </script>
            <script src="/scripts/date.format.js"></script>
            <script src="/scripts/prototype.scheduling.js"></script>

                <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-64200254-1', 'auto');
      ga('send', 'pageview');

        </script>
    <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"54ac9448ca","applicationID":"9436983","transactionName":"YlxRYxdZWEcEVxBeCVsWZkUMF0VXDVEAQgpcV1QaAFxfQEhHB18DUUxfUktIXkQ=","queueTime":0,"applicationTime":4,"atts":"ThtSFV9DS0k=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
    </html>

    </body>
    </html>