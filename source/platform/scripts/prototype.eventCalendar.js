(function(window, $) {
    'use strict';

    window.HealthStream = window.HealthStream || {};
    window.HealthStream.eventCalendar = window.HealthStream.eventCalendar || {};
    var healthStream = window.HealthStream;

    // match event colors by integer value -> value 1 - > class name ending -> css -> html
    // js mock string values to match marc's class names


    // #edit Make eventlist global for so both calendars can access array
    var EventList = [{
        start: moment().subtract({
            'd': 24
        }),
        end: moment().subtract({
            'd': 23,
            'h': 23
        }),
        title: 'Sample Event',
        color: '#09c',
        id: 'event-5'
    }, {
        start: moment("2015-05-27 06:30"),
        end: moment('2015-05-27 07:30'),
        title: 'Sample Event',
        color: '#000',
        id: 'event-1'
    }, {
        start: moment().add({
            'h': 3
        }),
        end: moment().add({
            'h': 6
        }),
        title: 'This is an event',
        color: '#f00',
        id: 'event-2'
    }, {
        start: moment().add({
            'h': 3
        }),
        end: moment().add({
            'h': 24
        }),
        title: 'This is an event title that is really long. Like, really, really long. I think these exist, right?',
        color: '#09c',
        id: 'event-3'
    }, {
        start: moment().add({
            'd': 1
        }),
        end: moment().add({
            'd': 1,
            'h': 1
        }),
        title: 'This is another event',
        color: '#ffa500',
        id: 'event-4'
    }];

    // console.log(moment().format('YYYYMMDD'));

    /*  =============================================================================
        Overrideable Settings
        ========================================================================== */

    healthStream.eventCalendar.settings = {
        // TO DO
        // move everything that is configurable/translatable in here so it can be easily overwritten

    };


    /*  =============================================================================
        Calendar Alt Buttons
        ========================================================================== */

    // Calendar Alternate Page
    $('#calendar-list').addClass('block');
    $('#event-margin').removeClass('margin');

    $('#event-list-toggle').on('click', function() {

        $('#calendar-list, #event-list-a, #calendar-resources').toggle('block');

    });

    // list button toggle event
    $('#btn-list').on('click', function() {

        $('#calendar-list').hide();
        $('#event-list-a').show();

        $('#btn-week').removeClass('btn-primary').addClass('btn-default');
        $(this).addClass('btn-primary').removeClass('btn-default');
    });

    // #edit Grid button toggle event
    $('#btn-week').on('click', function() {

        if ($('#calendar-list').css('display') == 'none') {

            $('#event-list-a').hide();
            $('#calendar-list').show();

            // check list element classes for week active and give appropriate view
            if ($('li').hasClass('week-active')) {

                $('#calendar-list').fullCalendar('changeView', 'agendaWeek');

            } else {

                $('#calendar-list').fullCalendar('changeView', 'agendaDay');
            }

        } else if ($('#calendar-list').css('display') == 'block') {

            $('#calendar-list').fullCalendar('changeView', 'agendaWeek');

        }

        $('#btn-list').removeClass('btn-primary').addClass('btn-default');
        $(this).addClass('btn-primary').removeClass('btn-default');


    });



    /*  =============================================================================
        Create the Calendar Instance
        ========================================================================== */

    healthStream.eventCalendar.createCalendar = function() {

        var HSEC = this,
            calendar = HSEC.calendar,
            options = {
                template: $('#eventCalendarCalendar').html(),
                daysOfTheWeek: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
                forceSixRows: true,
                multiDayEvents: {
                    startDate: 'start',
                    endDate: 'end'
                },



                clickEvents: {

                    click: function(target, date, jsEvent, events) {


                        // remove selected state
                        $('#calendar-resources .day-active').removeClass('day-active');
                        $('#calendar-resources .week-active').removeClass('week-active');

                        // show selected state
                        $(target.element).addClass('day-active');

                        // show the day's events
                        HSEC.showSelectedEvents([moment(target.date).format('YYYYMMDD')], '<b>' + target.date.format('dddd') + '</b>' + target.date.format(', MMMM DD, YYYY'), target.events.length, target.events);

                        // toggle list/grid view
                        if ($('#calendar-list').css('display') == 'none') {

                        } else if ($('#calendar-list').css('display') == 'block') {

                            $('#calendar-list').fullCalendar('changeView', 'agendaDay');
                            $('.btn-list').removeClass('btn-primary');
                            $('#btn-week').addClass('btn-primary');

                        }
                        // send
                        $('#calendar-list').fullCalendar('gotoDate', target.date.format("YYYY-MM-DD"), target.events);


                    }
                },

                doneRendering: function(target, date, jsEvent, view) {
                    var calendar = this;


                    // the datepicker is destroyed and initialized every calendar update
                    $('.clndr-datepicker')
                        .datepicker({
                            startView: 1,
                            minViewMode: 1
                        })
                        .on('changeDate', function(e) {
                            var $day = $('#calendar-resources').find('.day-active'),
                                $week = $('#calendar-resources').find('.week-active');

                            calendar.setYear(moment(e.date).format('YYYY')).setMonth(moment(e.date).format('MMMM'));
                            // calendar.setYear(moment(e.date).format('YYYY'))
                            if ($week.length === 1) {
                                $('.clndr-week-controls li').eq($week.index()).trigger('click');
                            } else {
                                $('.clndr .day').not('.adjacent-month').eq(0).trigger('click');
                            }
                        });

                    // swap the icons
                    $('.clndr-datepicker').find('.prev').html('<i class="fa fa-chevron-left"></i>');
                    $('.clndr-datepicker').find('.next').html('<i class="fa fa-chevron-right"></i>');

                    // hide the today button if on the current month *remove: Davis
                    // if (calendar.month.format('YYYYMM') === moment().format('YYYYMM')) {
                    //     $('.clndr-today-button').addClass('disabled');
                    //     $('.clndr-today-button').hide();
                    // }

                }
            },

            calendar = $('#calendar-resources').clndr(options);

        // click the calendar month+year top open the datepicker
        $('#calendar-resources').on('click', '.clndr-date', function() {
            $('.clndr-datepicker').fadeIn();
        });

        // click the NEW calendar title top open the datepicker
        $('#calendar-resources').on('click', '.clndr-date', function() {

            $('#calendar').hide();
            $('.clndr-datepicker').show();
            $('#calendar-resources').fadeIn();



        });


        // click today to get today's events
        $('#calendar-resources').find('.day.today').trigger('click');

        // return the calendar instance to an accessable spot
        return calendar;
    };


    /*  =============================================================================
        Set the Calendar to Week View
        ========================================================================== */

    healthStream.eventCalendar.setWeek = function($el) {
        var HSEC = this,
            id = $el.attr('data-id'),
            calendar = HSEC.calendar,
            min = id * 7,
            max = min + 7,
            selectedDates = [],
            selectedEvents = [],
            possibleEvents = [].concat(calendar.eventsLastMonth, calendar.eventsThisMonth, calendar.eventsNextMonth);

        // remove the selected state
        $('#calendar-resources .day-active').removeClass('day-active');
        $('#calendar-resources .week-active').removeClass('week-active');


        // select the week
        $el.addClass('week-active');

        // select all the days in that week
        for (var i = min; i < max; i++) {
            var $el = $('#calendar-resources .day').eq(i);
            $el.addClass('day-active');
            selectedDates.push($el.attr('data-date'));
        }

        // filter the event list down to only what is visible
        selectedEvents = $.grep(possibleEvents, function(event) {
            for (var i = 0; i < 7; i++) {
                if (event.start.format('YYYYMMDD') <= selectedDates[i] && event.end.format('YYYYMMDD') >= selectedDates[i]) {
                    return true;

                }
            }
        });

        // show the week's events
        HSEC.showSelectedEvents(selectedDates, 'Week of ' + moment(selectedDates[0], 'YYYYMMDD').format('MMMM D, YYYY'), selectedEvents.length, selectedEvents);

        $('#calendar-list').fullCalendar('gotoDate', moment(selectedDates[0], 'YYYYMMDD'));

        // show day/week view
        $('#calendar-list').fullCalendar('changeView', 'agendaWeek');

        // show list view
        if ($('#calendar-list').css('display') == 'none') {



        } else if ($('#calendar-list').css('display') == 'block') {


            $('#btn-day, .btn-list').removeClass('btn-primary');
            $('#btn-week').addClass('btn-primary');

        }


    };


    /*  =============================================================================
        Show the Events in the Selected Date Range (Day,Week)
        ========================================================================== */

    healthStream.eventCalendar.showSelectedEvents = function(dates, label, count, events) {
        var html = '<b>',
            days = ['Sunday', 'Monday', 'Tuesday', 'Wednseday', 'Thursday', 'Friday', 'Saturday'],
            html = '</b>';
        // update the events header with the day/week and event count *done: Davis*
       // html += '<b>';

        $('.selected-events-title').html(label);
        $('.selected-events-count').text(count + ((count === 1) ? 'Event' : ' Events')).show();

        // if there is only one day and there are events
        if (events.length > 0 && dates.length === 1) {
            html = _.template($('#eventCalendarItem').html(), {
                events: events
            });
            $('.selected-events-list').html(html);

        }
        // if there is a week and there are events
        else if (events.length > 0 && dates.length > 1) {
            $(dates).each(function(index) {
                var today = moment(dates[index], 'YYYYMMDD'),
                    eventsToday = $.grep(events, function(thisEvent) {
                        for (var i = 0; i < 7; i++) {
                            if (thisEvent.start.format('YYYYMMDD') <= dates[index] && thisEvent.end.format('YYYYMMDD') >= dates[index]) {
                                return true;
                            }
                        }
                    });

                // reprocess all events to adjust start/end times for multi-day events
                // if event.start is before 12am today say 12am
                // if event.end is after 11:59pm today say 11:59pm
                // have template convert all 12:00am to 11:59pm to say ALL DAY

                if (eventsToday.length > 0) {
                    html += '<section class="section">';
                    html += '<h4><b>' + days[today.format('e')] + '</b>, ' + today.format('MMMM DD, YYYY') + '</h4>';
                    html += _.template($('#eventCalendarItem').html(), {
                        events: eventsToday
                    });
                    html += '</section>';

                }
            });

            $('.selected-events-list').html(html);
        }
        // if there are no events
        else {
            $('.selected-events-count').hide();
            $('.selected-events-list').html('<div class="selected-events-empty">There are no events scheduled during this time.</div>');
        }

    };

    /*  =============================================================================
        Update the Calendar Instance with Event Data
        ========================================================================== */

    healthStream.eventCalendar.updateEvents = function(events, trigger) {
        var HSEC = this,
            $day = $('#calendar-resources').find('.day-active'),
            $week = $('#calendar-resources').find('.week-active');


        // update the calendar with the new event data
        HSEC.calendar.setEvents(events);

        // highlight the same selected days from the previous rendering
        if ($week.length === 1) {
            $('.clndr-week-controls li').eq($week.index()).trigger('click');

        } else {
            $('.clndr .day').eq($day.index()).trigger('click');

        }
    };


    /*  =============================================================================
        Load Event Data Asynchronously -- WIP
        ========================================================================== */

    healthStream.eventCalendar.getEvents = function() {
        var HSEC = this,

            // get global events
            events = EventList;

        HSEC.updateEvents(events);

    }


    /*  =============================================================================
        Initialize the Calendar
        ========================================================================== */

    healthStream.eventCalendar.initialize = function(events) {
        var HSEC = this;

        // create an accessible calendar instance without events
        HSEC.calendar = HSEC.createCalendar();

        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();




        /**********Calendar (List View) Begin************/
        $('#calendar-list').fullCalendar({
            // keep header empty for core file override
            header: {
                left: '',
                center: '',
                right: ''
            },

            eventSources: [

                // update the calendar with the new event data

                {
                    // call events globally
                    events: EventList,
                },
            ],

            forceEventDuration: true,
            defaultTimedEventDuration: '01:00',
            selectable: true,
            selectHelper: true,

            defaultView: 'agendaWeek',
            aspectRatio: 1.15,

            weekends: true,
            weekNumbers: false,

            weekNumberTitle: 'W',
            weekNumberCalculation: 'local',


            editable: false,
            eventLimit: true, // allow "more" link when too many events

            height: 850,


            eventClick: function() {
              //  tooltip.hide();
                   $("#modal-event").modal();
                },

            // dayClick: function(date, jsEvent, view) {


            //     var content = '<a href=\"/scheduling/addEvent\" type=\"button\" class=\"btn btn-default\">Add Event</a>';

            // tooltip.set({
            //     'content.text': content,
            //     //'position.target': this;
            // })
            // .reposition(jsEvent).show(jsEvent);

            // },


        });




        // bind the click events for the week buttons
        $('#calendar-resources').on('click', '.clndr-week-controls li', function() {
            HSEC.setWeek($(this));
        });

        // bind the today button click
        $('#calendar-resources').on('click', '.clndr-today-button', function() {
            $('#calendar-resources').find('.day.today').trigger('click');

        });

    }

}(window, jQuery));
