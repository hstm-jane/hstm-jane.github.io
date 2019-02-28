<?php

include "includes/helpers.php";
    $patterns['start']['title'] = 'Calendar';
    $patterns['focus']['title'] = 'Calendar';
    $patterns['focus']['type'] = 'search';
    $patterns['focus']['search'] = array(
        'placeholder' => 'Search All Events',
        'url' => '/search-events.php',
    );
?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>


    <div class="layout layout-search">
        <div class="container">
            <section class="section section-box section-main" id="event-resources">
                <section class="section">
                    <div class="row">
                        <div class="col-md-5 col-calendar">
                            <div id="cal-float">
                                <section class="section">
                                    <div id="calendar-resources"></div>
                                </section>
                                <section class="section hidden-xs hidden-sm">
                                    <h3>Filter</h3>
                                    <div id="divRefineContainer">
                                        <div id="divRefineEvents">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <a id="aManagePreset" class="pull-right" href="#modal-save-new-filter" data-toggle="modal">Save New Filter</a>
                                                        <label class="control-label">My Filters</label>
                                                        <select id="inputPresets" class="form-control">
                                                            <option>No Filters</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Personnel</label>
                                                        <input type="text" class="form-control" name="txtPeople">
                                                    </div>
                                                    <div class="tag-group" id="divPeopleFilters">
                                                        <a href="#" class="tag">Person 1 <i class="fa fa-times"></i></a>
                                                        <a href="#" class="tag">Person 2 <i class="fa fa-times"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Rooms</label>
                                                        <input type="text" class="form-control" name="txtRoom">
                                                    </div>
                                                    <div class="tag-group" id="divRoomFilters">
                                                        <a href="#" class="tag">Room 1 <i class="fa fa-times"></i></a>
                                                        <a href="#" class="tag">Room 2 <i class="fa fa-times"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Equipment</label>
                                                        <input type="text" class="form-control" name="txtEquipment">
                                                    </div>
                                                    <div class="tag-group" id="divEquipmentFilters">
                                                        <a href="#" class="tag">Equipment 1 <i class="fa fa-times"></i></a>
                                                        <a href="#" class="tag">Equipment 2 <i class="fa fa-times"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="selected-events">
                                <div class="selected-events-header">
                                    <h3 class="selected-events-title"></h3>
                                    <div class="selected-events-count">0 Events</div>
                                    <ul class="selected-events-info" id="event-margin">
                                        <li class="colorswitcher  pull-right">
                                            <span>
                                                Color By:
                                            </span>
                                            <select>
                                                <option value="2">Room</option>
                                                <option value="1">Personnel</option>
                                            </select>
                                        </li>
                                        <li class="selected-events-timezone">All times displayed in EST</li>
                                        <li class="selected-events-colorlegend">
                                            <a href="#modal-colorlegend" data-toggle="modal">Color Legend</a>
                                        </li>
                                    </ul>

                                    <div class="list-btn-container pull-right">
                                        <div class="fc-button-group hidden-xs">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary btn-list btn-sm active" id="btn-list">
                                                    <input type="radio" id="btn-list" checked><i class="fa fa-list-ul"></i>
                                                </label>
                                                <label class="btn btn-default btn-list btn-sm" id="btn-week">
                                                    <input type="radio" id="btn-week"> <i class="fa fa-align-justify fa-rotate"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selected-events-list accordian" id="event-list-a"></div>
                                <div id='calendar-list'></div>
                            </div>
                        </div>
                    </div>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'html' => '
                                        <a href="./scheduling-edit-schedule.php" class="btn btn-success">Add NRP Event</a>
                                        <a href="/event-single-unsaved.php" class="btn btn-success">Add Event</a>
                                    ',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>

                </section>
            </section>
            <!-- /section-main -->
        </div>
        <!-- /container -->
    </div>
    <!-- /layout -->
    <!-- Modals -->
    <?php
        include MODAL_EVENT_DETAILS;
        include MODAL_REFINE;
        include MODAL_COLOR_LEGEND;
        include MODAL_POPOVER;
        include MODAL_SAVE_NEW_FILTER;
        include MODAL_MESSAGE_GROUP;
    ?>
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<style>
.slat-calendar{
    color: #666;
}
    .slat-calendar > div{
        display: inline-block;
        vertical-align: middle;
        text-align: center;

    }
    .slat-calendar-icon{
     margin-left: 10px;
    }
    .slat-calendar .slat-calendar-title{
        text-align: left;
        margin-right: 10px;
        margin-left: 10px;
        width: 45%;
    }
    .slat-calendar .slat-calendar-title a{
        display:block;
        width: 100%
    }


    @media (max-width: 767px){
        .slat-calendar .slat-calendar-title{
            display:block;
            margin-left: 0;
            width: 100%;
            padding-right:50px;
        }
        .slat-calendar-icon{
             margin-left: 0px;
             margin-right:10px;
        }
    }

</style>
        <script id="eventCalendarItem" type="text/template">
            <% _.each(events, function(event) { %>
                <div class="slat ">
                    <div class="slat-calendar slat-default">
                        <div class="slat-calendar-time">
                            <% if( event.start.format('h:mm A') === '12:00am' && event.end.format('h:mm A') === '11:59pm' ) { %>
                                ALL DAY
                                <% } else { %>
                                    <%= event.start.format('h:mm A') %> -
                                        <%= event.end.format('h:mm A') %>
                                            <% } %>
                        </div>
                        <div class="slat-calendar-title title">
                            <a class="event-title-link reduce" href="#modal-event" data-toggle="modal">
                                <%= event.title %>
                            </a>
                        </div>
                        <div class="slat-calendar-icon"><i class="fa fa-refresh fa-lg"></i></div>
                        <div class="slat-calendar-icon"><i class="fa  fa-arrow-left "></i><i class="fa  fa-arrow-right "></i></div>

                            <div class="action action-multi slat-calendar-action">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Options <i class="fa fa-fw fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="/event-single-settings.php">Manage Event</a>
                                        </li>
                                        <li>
                                            <a href="/event-single-roster.php">Manage Roster</a>
                                        </li>
                                         <li>
                                            <a href="#modal-message-group" data-toggle="modal">Send Message</a>
                                        </li>
                                        <li class="divider">
                                        </li>
                                        <li >
                                            <a href="/event-series-occurrences.php">Manage Series</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                    </div>
                </div>
                <% }); %>
        </script>
        <script id="eventCalendarCalendar" type="text/template">
            <div class="clndr-header">
                <div class="clndr-controls" style="top:0px !important">
                    <div class="btn btn-default clndr-previous-button"><i class="fa fa-chevron-left"></i>
                    </div>
                    <button class="clndr-date btn btn-default">
                        <%= month %>
                            <%= year %>
                    </button>
                    <div class="btn btn-default clndr-next-button"><i class="fa fa-chevron-right"></i>
                    </div>
                </div>
                <div class="btn btn-default clndr-today-button pull-right">Today</div>
            </div>
            <div class="clndr-container">
                <div class="clndr-grid">
                    <div class="days-of-the-week clearfix">
                        <% _.each(daysOfTheWeek, function(day) { %>
                            <div class="header-day">
                                <%= day %>
                            </div>
                            <% }); %>
                    </div>
                    <div class="days clearfix">
                        <% _.each(days, function(day) { %>
                            <div class="<%= day.classes %>" id="<%= day.id %>" data-date="<%= day.date.format('YYYYMMDD') %>">
                                <div class="day-wrap">
                                    <span class="day-number">
                                        <%= day.day %>
                                    </span>
                                    <% if( day.events.length> 0 ) { %>
                                        <span class="day-events">
                                            <%= day.events.length %>
                                        </span>
                                        <% } %>
                                </div>
                            </div>
                            <% }); %>
                    </div>
                </div>
                <ul class="clndr-week-controls">
                    <li data-id="0"><i class="fa fa-caret-right"></i>
                    </li>
                    <li data-id="1"><i class="fa fa-caret-right"></i>
                    </li>
                    <li data-id="2"><i class="fa fa-caret-right"></i>
                    </li>
                    <li data-id="3"><i class="fa fa-caret-right"></i>
                    </li>
                    <li data-id="4"><i class="fa fa-caret-right"></i>
                    </li>
                    <li data-id="5"><i class="fa fa-caret-right"></i>
                    </li>
            </div>
            <div class="clndr-datepicker"></div>
        </script>
        <script src="/scripts/prototype.eventCalendar.js"></script>
        <script src="/scripts/prototype.index.js"></script>
        <script type="text/javascript">
        $(function() {
            window.HealthStream.eventCalendar.initialize();
            window.HealthStream.eventCalendar.getEvents();
        });
        (function(window, $) {
                'use strict';
                window.HealthStream = window.HealthStream || {};
                var healthStream = window.HealthStream;
                var tempScrollTop = $(window).scrollTop();
                healthStream.peoplepicker = {
                    memory: {
                        event: [],
                        resources: {}
                    },
                    init: function() {
                        var T = this;
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
                                var $el = $(this),
                                    $rp = $el.closest('.resource-picker'),
                                    resources = [$el.attr('data-id')],
                                    addons = $el.attr('data-addons').split(',').filter(function(e) {
                                        return e;
                                    });
                                $.merge(resources, addons);
                                T.setResources(resources);
                                $(this).addClass('disabled');
                                e.preventDefault();
                            })
                            .on('click', '.resource-picker-remove', function(e) {
                                $('.rth-btn-remove[data-id="' + $(this).attr('data-id') + '"]').trigger('click');
                                $(this).addClass('resource-picker-add');
                                $(this).removeClass('resource-picker-remove');
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
                        // Listeners
                        $('#event-resources')
                            .on('resourcesTableUpdated', function() {
                                // Update options button
                                $('.rth-conflict').each(function() {
                                    $(this).closest('.rth-item').addClass('rth-item-conflict');
                                    $(this).closest('.rth-nested-item').addClass('rth-item-conflict');
                                });
                            });
                        $('#event-resources')
                            .on('resourcesTableUpdated', function() {
                                var $el = $('.resource-picker-overlay.active'),
                                    $rp = $el.closest('.resource-picker');
                                if ($el.length > 0) {
                                    T.getResources($rp.find('.resource-picker-input'), $rp);
                                }
                            });
                    },
                    getDateTime: function(timestamp) {
                        var offset = new Date().getTimezoneOffset(),
                            adjusted = timestamp * 1 + (60 * offset),
                            date = new Date(adjusted * 1000),
                            d = date.format('m/d/Y'),
                            t = date.format('h:i A');
                        return [d, t];
                    },
                    getResources: function($el, $rp) {
                        var m = this.memory.resources,
                            selected = [];
                        for (var id in m) {
                            if (m.hasOwnProperty(id)) {
                                selected.push(id);
                            }
                        }
                        $.getJSON('/server.php', {
                            action: 'search',
                            type: $el.attr('data-type'),
                            q: $el.val(),
                            selected: selected.join(',')
                        }, function(data) {
                            $rp.find('.resource-picker-overlay').addClass('active');
                            $rp.find('.resource-picker-holder').html(data.html).scrollTop(0);
                            $('#resource-picker-backdrop').show();
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
                        this.getResourcesTable();
                    },
                    setResources: function(resources) {
                        var T = this;
                        $(resources).each(function() {
                            if (typeof T.memory.resources[this] === 'undefined') {
                                T.memory.resources[this] = [];
                            }
                        });
                        this.getResourcesTable();
                    },
                    removeResource: function(id) {
                        delete this.memory.resources[id];
                        this.getResourcesTable();
                    },
                    removeResources: function(ids) {
                        var m = this.memory.resources;
                        $(ids).each(function() {
                            delete m[this];
                        });
                        this.getResourcesTable();
                    },
                    getResourcesTable: function() {
                        var $table = $('#resources-table'),
                            params = {
                                action: 'availability',
                                schedule: {
                                    event: $.extend({}, this.memory.event),
                                    resources: $.extend({}, this.memory.resources)
                                }
                            };
                        for (var id in params.schedule.resources) {
                            if (params.schedule.resources.hasOwnProperty(id) && params.schedule.resources[id].length === 0) {
                                params.schedule.resources[id] = [params.schedule.event];
                            }
                        }
                        $('.rth-loading').show();
                        $.post('/server.php', params, function(data) {
                            setTimeout(function() {
                                $table.html(data.html);
                                $('#event-resources').trigger('resourcesTableUpdated');
                            }, 300);
                        });
                    },
                    getResourceModal: function($el) {
                        var id = $el.attr('data-id'),
                            title = $el.attr('data-title'),
                            start = this.getDateTime($el.attr('data-start')),
                            end = this.getDateTime($el.attr('data-end'));
                        $('#modal-resource .modal-title').text(title);
                        $('#modal-resource .btn-remove-resource').attr('data-id', id);
                        $('#modal-resource .btn-save-resource').attr('data-id', id);
                        $('#resource-start-date').val(start[0]);
                        $('#resource-start-time').val(start[1]);
                        $('#resource-end-date').val(end[0]);
                        $('#resource-end-time').val(end[1]);
                        $.getJSON('/server.php', {
                            action: 'detail',
                            id: id,
                            start: $el.attr('data-start'),
                            end: $el.attr('data-end')
                        }, function(data) {
                            $('#modal-resource .resource-detail').html(data.html);
                            $('#modal-resource').modal('show');
                        });
                        $('#resource-start-date, #resource-end-date')
                            .datepicker({
                                autoclose: true
                            });
                        $('#resource-start-time')
                            .timepicker({
                                upArrowStyle: 'fa fa-chevron-up',
                                downArrowStyle: 'fa fa-chevron-down',
                                minuteStep: 30,
                                defaultTime: false
                            });
                        $('#resource-end-time')
                            .timepicker({
                                upArrowStyle: 'fa fa-chevron-up',
                                downArrowStyle: 'fa fa-chevron-down',
                                minuteStep: 30,
                                defaultTime: false
                            });
                    }
                };
                $(window).on('load', function() {
                    healthStream.peoplepicker.init();
                });
            }
            (window, jQuery));
        </script>

<?= createSiteEnd(); ?>