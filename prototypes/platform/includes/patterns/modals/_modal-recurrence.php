<?php

$date_now = Date('U');
$date_rounded = $date_now - ($date_now % 1800) + 1800;
$date_future = $date_rounded + (3600 * 1);
?>

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
                                    <input class="form-control recurrence-validate-field" data-val="true" data-val-number="The field PatternIncrementValue must be a number." id="PatternIncrementValue" maxlength="3" name="PatternIncrementValue" type="text" value="1" />
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
                                    <input class="form-control datetime-input dtp-form  dateTimePickerDate" data-val="true" data-val-date="Must be a valid date" id="PatternStartDate" name="PatternStartDate" type="text"  value="<?= Date('m/d/Y') ?>">
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
                                        <input class="form-control datetime-input dateTimePickerDate dtp-form" data-val="true" data-val-date="Must be a valid date" id="PatternEndDate" name="PatternEndDate" type="text" value="<?= Date('m/d/Y') ?>">
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
                                    <input class="form-control datetime-input dateTimePickerTime  dtp-form" data-val="true" data-val-date="Must be a valid time" id="EventStartTime" name="EventStartTime" type="text" value="<?= Date('h:i A', $date_rounded); ?>">
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
                                    <input class="form-control datetime-input dateTimePickerTime  dtp-form" id="EventEndTime" name="EventEndTime" type="text" value="<?= Date('h:i A', strtotime('+1 hour', $date_rounded)); ?>">
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