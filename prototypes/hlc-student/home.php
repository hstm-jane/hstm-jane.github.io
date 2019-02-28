<?php

include "includes/helpers/helpers.php";

$patterns['header']['mainNavActive'] = false;

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<div class="focus focus-home">
    <div id="calendar-home"></div>
</div>
<div class="layout layout-home">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <section class="section section-box" data-equalize="home-sections">
                    <h3>What's New</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">New Policies from your HR Team</a></li>
                        <li><a href="#">OSHA News and Updates</a></li>
                        <li><a href="#">Weekly Newsletter</a></li>
                        <li><a href="#">New Releases in the Catalog</a></li>
                        <li><a href="#">CMS and Value-Based Pricing</a></li>
                    </ul>
                </section>
                <!-- <section class="section section-box">
                    <h5>What's New</h5>
                    <a href="#">
                        <h4>New Policies from your HR Team</h4>
                        <div style="color:#555;font-size:13px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    </a>
                </section>
                <section class="section section-box">
                    <h5>What's New</h5>
                    <a href="#">
                        <h4>OSHA News and Updates</h4>
                        <div style="color:#555;font-size:13px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    </a>
                </section>
                <section class="section section-box">
                    <h5>What's New</h5>
                    <a href="#">
                        <h4>New Releases in the Catalog</h4>
                        <div style="color:#555;font-size:13px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    </a>
                </section> -->
            </div><!-- /column -->
            <div class="col-md-4">
                <section class="section section-box" data-equalize="home-sections">
                    <h3>Learning Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Pain Management</a></li>
                        <li><a href="#">Lippencott - Glucose Monitoring</a></li>
                        <li><a href="#">ICD-10 Clinical User Bundle</a></li>
                        <li><a href="#">Fire Safety</a></li>
                    </ul>
                </section>
            </div><!-- /column -->
            <div class="col-md-4">
                <section class="section section-box" data-equalize="home-sections">
                    <h3>Resources</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Professional Portfolio</a></li>
                        <li><a href="#">Education Calendar</a></li>
                        <li><a href="#">Leave of Absence Policy</a></li>
                    </ul>
                </section>
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div> <!-- /layout -->

<!-- Modal -->
<div id="modal-events" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">The Date</h4>
            </div>
            <div class="modal-body">
                This is some Event info.
            </div>
            <!-- <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        var options = {
                template: $('#calendar-home-template').html(),
                daysOfTheWeek: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
                events: [
                    { date: moment().subtract({'M':1}), title: 'Event Last Month', type: 'course', action: 'Start', url: 'course.php' },
                    { date: moment().subtract({'d':14}), title: 'Event Two Weeks Ago', type: 'course', action: 'Start', url: 'course.php' },
                    { date: moment().subtract({'d':7,'h':1}), title: 'Event Last Week', type: 'course', action: 'Start', url: 'course.php' },
                    { date: moment().subtract({'d':7}), title: 'Second Event Last Week', type: 'course', action: 'Start', url: 'course.php' },
                    { date: moment().add({'h':.5}), title: 'Event 1/2 Hour From Now', type: 'course', action: 'Start', url: 'course.php' },
                    { date: moment().add({'h':1}), title: 'Event 1 Hour From Now', type: 'course', action: 'Start', url: 'course.php' },
                    { date: moment().add({'d':1}), title: 'Event Tomorrow', type: 'course', action: 'Start', url: 'course.php' },
                    { date: moment().add({'d':2}), title: 'Event Day After Tomorrow', type: 'course', action: 'Start', url: 'course.php' },
                    { date: moment().add({'d':3}), title: 'Event 3 Days From Now', type: 'course', action: 'Start', url: 'course.php' },
                    { date: moment().add({'d':3,'h':1}), title: 'Second Event 3 Days From Now', type: 'course', action: 'Start', url: 'course.php' },
                    { date: moment().add({'M':1}), title: 'Event Next Month', type: 'course', action: 'Start', url: 'course.php' },
                    { date: moment().add({'M':3}), title: 'Event 3 Months Out', type: 'course', action: 'Start', url: 'course.php' },
                ],
                clickEvents: {
                    click: function(target){
                        if(target.events.length > 0){
                            var html = _.template( $('#calendar-slat').html(), {events:target.events} );
                            $('#modal-events .modal-title').text(target.date.format('MMM d, YYYY'));
                            $('#modal-events .modal-body').html(html);
                            $('#modal-events').modal('show');
                        }
                    }
                },
                constraints: {
                    startDate: moment().subtract({'M':1}),
                    endDate: moment().add({'M':3})
                },
                doneRendering: function(){
                    var T = this;
                    if(this.month.subtract('months',1).format('YYYYMM') < limitPast.format('YYYYMM')){
                        $('.clndr-previous-button').addClass('disabled');
                    }
                    if(this.month.add('months',1).format('YYYYMM') >= limitFuture.format('YYYYMM')){
                        $('.clndr-next-button').addClass('disabled');
                    }
                    if(this.month.format('YYYYMM') === moment().format('YYYYMM')){
                        $('.clndr-today-button').addClass('disabled');
                        $('.clndr-today-button').hide();
                    }
                    $('.clndr .more').click(function(e){
                        e.preventDefault();
                        var html = _.template( $('#calendar-slat').html(), {events:T.eventsThisMonth} );
                        $('#modal-events .modal-title').text('Events This Month');
                        $('#modal-events .modal-body').html(html);
                        $('#modal-events').modal('show');
                    });
                }
            },
            limitPast = options.constraints.startDate,
            limitFuture = options.constraints.endDate,
            calendar = $('#calendar-home').clndr(options);
    });
</script>
<script id="calendar-slat" type="text/template">
    <% _.each(events, function(event) { %>
    <div class="slat">
        <div class="slat-default">
            <div class="title"><%= event.title %></div>
            <ul class="meta">
                <li><span class="meta-type"><%= event.type %></span></li>
                <li><span class="meta-label">Due:</span><span class="meta-value"><%= event.date.format('MMM D, YYYY [at] hh:mma') %></span></li>
            </ul>
            <a class="btn btn-sm btn-default" href="<%= event.url %>"><%= event.action %> <i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
        </div>
    </div>
    <% }); %>
</script>
<script id="calendar-home-template" type="text/template">
    <% var eventsLaterThisMonth = _.filter(eventsThisMonth, function(event){ return event.date.dayOfYear() >= moment().dayOfYear(); });%>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="clndr-grid-header">
                    <h3><%= month %> <%= year %></h3>
                    <div class="clndr-controls">
                        <div class="btn btn-primary btn-sm clndr-today-button">Today</div>
                        <div class="btn-group">
                            <div class="btn btn-primary btn-sm clndr-previous-button"><i class="fa fa-chevron-left"></i></div>
                            <div class="btn btn-primary btn-sm clndr-next-button"><i class="fa fa-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="clndr-grid">
                    <div class="days-of-the-week clearfix">
                        <% _.each(daysOfTheWeek, function(day) { %>
                        <div class="header-day"><%= day %></div>
                        <% }); %>
                    </div>
                    <div class="days clearfix">
                        <% _.each(days, function(day) { %>
                        <div class="<%= day.classes %>" id="<%= day.id %>">
                            <span class="day-number"><%= day.day %></span>
                            <% if( day.events.length > 0 ) { %>
                                <span class="day-events"><%= day.events.length %></span>
                            <% } %>
                        </div>
                        <% }); %>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-1 hidden-xs">
                <div class="clndr-events-header">
                    <% if( month === moment().format('MMM')) { %>
                    <h3>Upcoming in <%= month %> <span class="badge"><%= eventsLaterThisMonth.length %></span></h3>
                    <% } else { %>
                    <h3>Scheduled in <%= month %> <span class="badge"><%= eventsThisMonth.length %></span></h3>
                    <% } %>
                </div>
                <div class="clndr-events">
                    <%
                        if(eventsThisMonth.length === 0){
                    %>
                        <div class="no-results">
                            <p class="lead">You don't have anything scheduled in <%= month %>.</p>
                            <p>There's always room to grow, <a href="catalog.php">browse the catalog</a> for an elective.</p>
                        </div>
                    <%
                        }
                        else if(month === moment().format('MMM')){
                            _.each(eventsLaterThisMonth, function(event,index) {
                                if ( index < 5 ){
                    %>
                    <a class="slat slat-calendar" href="<%= event.url %>" >
                        <div class="date"><%= event.date.format('MMM D, YYYY [at] h:mma') %></div>
                        <div class="title"><%= event.title %></div>
                    </a>
                    <%
                                }
                            });

                            if(eventsLaterThisMonth.length > 5) {

                    %>
                    <div class="slat slat-calendar slat-calender-plus">
                        Plus <%= (eventsLaterThisMonth.length - 5) %> more&hellip;
                    </div>
                    <%
                            }
                        } else {

                            _.each(eventsThisMonth, function(event,index) {
                                if(index<5){
                    %>
                    <a class="slat slat-calendar" href="<%= event.url %>" >
                        <div class="date"><%= event.date.format('MMM D, YYYY [at] h:mma') %></div>
                        <div class="title"><%= event.title %></div>
                    </a>
                    <%
                                }
                            });

                            if(eventsThisMonth.length > 5){
                    %>
                    <div class="slat slat-calendar slat-calender-plus">
                        Plus <%= (eventsThisMonth.length - eventsLaterThisMonth.length) %> more&hellip;
                    </div>
                    <%
                            }
                        }
                    %>

                </div>
                <div class="clndr-events-footer">
                    <ul class="list-unstyled">
                        <% if(eventsThisMonth.length > 6){ %>
                        <li><a href="#" class="more btn btn-primary">View everything scheduled this month <i class="fa fa-fw fa-chevron-right"></i></a></li>
                        <% } %>
                        <li><a href="index.php" class="btn btn-focus">View My To-Do List <i class="fa fa-fw fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</script>
<?= createSiteEnd(); ?>
