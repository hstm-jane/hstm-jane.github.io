
// Selected values functionality for occurrence dropdown
if ($("select[name='occurrence-dropdown'] option:selected").val() == "0"){
        
        $(".btn-add-all").removeClass("btn-danger");
        $(".btn-add-all").on('click', function(){
            $(this).toggle().show().html('Remove').removeClass('btn-success').addClass('btn-danger');
        })
        
    $(".btn-add-all").on('click', function(){
        
        if($('#recurrence-check').css('display') == 'none')
            {

            $("#resources-tables").show();
            $("#all-occurrences-list").hide();   
        }
    })

    } else {
        
        $(".btn-add-all").text('Add');
        $(".btn-add-all").on('click', function(){

            $(this).toggle().show().html('Remove').removeClass('btn-success').addClass('btn-danger')
            $("#resources-tables").show();
        })

    }
// select dropdown list for occurrences
$('select[name="occurrence-dropdown"]').on('change', function() {

    var selectedValue = $( "select[name='occurrence-dropdown'] option:selected" ).text();

    // log value 
    // console.log(selectedValue);

    // get partial text from first part of string in option 
    var firstValue = selectedValue.substring(0, 19);
    var secondValue = selectedValue.substring(22, 41);
    var tableValue = selectedValue.substring(0, 11);
    
    $("#event-end-date").val(secondValue);
    $("#event-start-date").val(firstValue);
    $('#date-update').text(tableValue);

     // log values 
    // console.log(firstValue);
    // console.log(secondValue);
     $(".btn-add-all").removeClass("btn-danger");

});

// DateTime Picker 
var dateTimeValue =  $(".datetime-input").val();
$('dateTimeValue').on("change", function(){
  updateDateTimeFields();
});

// get input value from search input and copy to modal search input for resources
var $resourceVal = $("#resourceSearchMdl");


 $("#resource-picker-input").keyup(function(event) {
    event.preventDefault();
    $resourceVal.val( this.value );
});

 // get input value from search input and copy to modal search input for people
 var $peopleVal = $("#peopleSearchMdl");

 $("#people-picker-input").keyup(function() {
    $peopleVal.val( this.value );
});

// filter list results in people search modal
$('#peopleSearchMdl').keyup(function () {
    var valThis = this.value.toLowerCase(),
        lenght  = this.value.length;

    $('.grpPeopleResults> .slat .title').each(function () {
        var text  = $(this).text(),
            textL = text.toLowerCase(),
            htmlR = text.substr(0, lenght) + text.substr(lenght);
        (textL.indexOf(valThis) == 0) ? $(this).closest('.slat').show() : $(this).closest('.slat').hide();
    });

});
// filter list results in people search modal
$('#resourceSearchMdl').keyup(function () {
    var valThis = this.value.toLowerCase(),
        lenght  = this.value.length;

    $('.grpResourceResults> .slat .title').each(function () {
        var text  = $(this).text(),
            textL = text.toLowerCase(),
            htmlR = text.substr(0, lenght) + text.substr(lenght);
        (textL.indexOf(valThis) == 0) ? $(this).closest('.slat').show() : $(this).closest('.slat').hide();
    });

});
// Recurrence button to change screens to add custom occurrences
$(".recurrenceLink").click(function(event) {

     recurrenceLink();

});
// Custom occurrence list to add new rows of occurrences
$("#btnAddEvent").click(function() {

    addOccurrenceRows(); // add rows
    removeOccurrenceRows(); // remove rows

});
// Event link button to change screens back to event details
$(".scheduleEventLink").click(function() {

   scheduleEventLink(); // call schedule event link function
   
   if ($('select[name="occurrence-dropdown"]').val() == "0"){

    $(".event-date-time, #resources-tables, .btn-add").hide();

} else {

    $('.btn-add, .event-date-time, #resources-tables').show();

}
});
 // if update button is clicked in modal
$('#btnUpdateRecurrence').click(function() {

    // close recurrence modal
    $('#modal-recurrence').hide();
    $("#RecurrenceSentence").show();

    // display items that should appear when recurrence rules are updated
    $('.show-when-recurrence-updated').show();
    $("#recurrence-updated").show();
     $(".hide-when-recurrence-updated").hide();
     //
    recurrenceLink();
    recurrencesUpdated();
    removeOccurrenceRows();
    cloneOccurrenceTable();

});

$('#ddlPatternType').change(UpdateRecurrenceModalState);

// When modal appears - do the following
$('#modal-resource').on('shown.bs.modal', function () {
  
  // Selected values functionality for occurrence dropdown
  if ($("select[id='ddlEventsResources'] option:selected").val() == "0"){

     if ($('#ddlEvents').is(":hidden")) {
        $(".btn-add-all").text('Add');
        $(".btn-add-all").on('click', function(){            

        })
        
    }
    $(".btn-add-all").on('click', function(){
        $(this).toggle().show().html('Remove').removeClass('btn-success').addClass('btn-danger');

    })

} else {

    $(".btn-add-all").on('click', function(){

        $(this).toggle().show().html('Remove').removeClass('btn-success').addClass('btn-danger')
        $("#resources-tables").show();
        $("#all-occurrences-list").hide();
    })
}
})
$('#modal-personnel').on('shown.bs.modal', function () {
  // Selected values functionality for occurrence dropdown
  if ($("select[id='ddlEventsPersonnel'] option:selected").val() == "0"){

     if ($('#ddlEvents').is(":hidden")) {
        $(".btn-add-all").text('Add');
        $(".btn-add-all").on('click', function(){            

        }) 
    }
    $(".btn-add-all").on('click', function(){
        $(this).toggle().show().html('Remove').removeClass('btn-success').addClass('btn-danger');

    })

} else {

    $(".btn-add-all").on('click', function(){
            //$(".btn-add-all").text('Add');
            $(this).toggle().show().html('Remove').removeClass('btn-success').addClass('btn-danger')
            $("#resources-tables").show();
            $("#all-occurrences-list").hide();
        })
}
})


$(".resource-menu li a").click(function(){
  var selText = $(this).text();
  $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
});

$('.resource-menu li a').data(function () {
    var valThis = this.data.toLowerCase(),
    lenght  = this.data.length;

    $('.slat .slat-default ul li span').each(function () {
        var text  = $(this).text(),
        textL = text.toLowerCase(),
        htmlR = '<b>' + text.substr(0, lenght) + '</b>' + text.substr(lenght);
        (textL.indexOf(valThis) == 0) ? $(this).closest('.slat').show() : $(this).closest('.slat').hide();
    });

});
$('.resource-picker-input').keyup(function () {
    var valThis = this.value.toLowerCase(),
    lenght  = this.value.length;

    $('.slat .slat-default .title form a').each(function () {
        var text  = $(this).text(),
        textL = text.toLowerCase(),
        htmlR = '<b>' + text.substr(0, lenght) + '</b>' + text.substr(lenght);
        (textL.indexOf(valThis) == 0) ? $(this).closest('.slat').show() : $(this).closest('.slat').hide();
    });

});
Date.prototype.addHours= function(h){
    this.setHours(this.getHours()+h);
    return this;
}
Test:
$(function() {

    function formatBasic(option) {
        var userid = $(option.element).data('userid');
        var dept = $(option.element).data('dept');
                if (!option.id) return option.text; // optgroup
                return '<div class="slat slat-select2"><div class="title">' + option.text + ' <span>[' + userid + ']</span></div><ul class="meta"><li><span class="meta-label">Department:</span><span class="meta-value">' + dept + '</span></li></ul></div>';
            }

            function formatTruncate(option) {
                var userid = $(option.element).data('userid');
                var dept = $(option.element).data('dept');
                if (!option.id) return option.text; // optgroup
                return '<div class="slat slat-select2 slat-select2-nowrap"><div class="title">' + option.text + ' <span>[' + userid + ']</span></div><ul class="meta"><li><span class="meta-label">Department:</span><span class="meta-value">A really long string that is forced to truncate in all browsers</span></li><li><span class="meta-label">Department:</span><span class="meta-value">' + dept + '</span></li></ul></div>';
            }

            function formatIconSuccess(option) {
                var userid = $(option.element).data('userid');
                var dept = $(option.element).data('dept');
                if (!option.id) return option.text; // optgroup
                return '<div class="slat slat-select2 slat-select2-action"><div class="action"><i class="icon success fa fa-check"></i></div><div class="title">' + option.text + ' <span>[' + userid + ']</span></div><ul class="meta"><li><span class="meta-label">Department:</span><span class="meta-value">' + dept + '</span></li></ul></div>';
            }

            $('#slat-basic').select2({
                minimumInputLength: 1,
                formatResult: formatBasic,
                escapeMarkup: function(m) {
                    return m;
                },
                dropdownCssClass: 'select2-slats'
            });
            $('#slat-truncate').select2({
                minimumInputLength: 1,
                formatResult: formatTruncate,
                escapeMarkup: function(m) {
                    return m;
                },
                dropdownCssClass: 'select2-slats'
            });
            $('#slat-icon-success').select2({
                minimumInputLength: 1,
                formatResult: formatIconSuccess,
                escapeMarkup: function(m) {
                    return m;
                },
                dropdownCssClass: 'select2-slats'
            });

        });
        function addOccurrenceRows(){

            var cloneMe = $("#lstEvents .occurrenceListItem:visible").last().clone();
            var occurrenceNumber = $(".occurrenceListItem:visible").length + 1;
            cloneMe.find(".occurrenceNumber").html(occurrenceNumber);
            cloneMe.appendTo("#lstEvents");
            applyDateTimePickerSettings();
        }

        function removeOccurrenceRows(){

            $(".btn-remove").unbind();
            $(".btn-remove").on('click', function() {
                $(this).closest(".occurrenceListItem").hide();
                var adjustedOccurrenceNumber = 1;
                
                $(".occurrenceListItem:visible").each(function() {
                    $(this).find(".occurrenceNumber").html(adjustedOccurrenceNumber);
                    adjustedOccurrenceNumber++;
                });
            });
        }

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

                        // toggle circle icon views on table
                        $('td.clickable').unbind();
                        $('td.clickable').on("click", function(){
                            if ($(this).find('i').hasClass('fa fa-1x fa-circle')){

                                $(this).find('i').removeClass('fa fa-1x fa-circle');

                            } else {

                                $(this).find('i').addClass('fa fa-1x fa-circle');
                            }
                        });
                        //apply action of input click when input icon is clicked
                        $('.input-group-addon').on('click', function() {
                            $(this).siblings('input').trigger('focus');
                        });

                        //Show either time or date picker or both 
                        $('.dateTimePicker').datetimepicker({
                            inline: false,
                            sideBySide: true
                        });

                        $('.dateTimePickerDate').datetimepicker({
                            inline: false,
                            sideBySide: false,
                            format: 'L'

                        });

                        $('.dateTimePickerTime').datetimepicker({
                            inline: false,
                            sideBySide: false,
                            format: 'LT'

                        });
                         if (!($('#RecurrenceSentence').is(":visible"))) {

                                $('.btn-add-all').text('Add');

                                // var occurrenceStartTime = $('#event-start-date').val();
                                // var occurrenceEndTime = $('#event-end-date').val();
                                // $("#all-occurrences-dates").append("<th class='all-occurrences-date'>" + occurrenceStartTime + " - " + occurrenceEndTime + "</th>");
                                // $(".occurrences-row").append("<td class='text-center icon clickable'><i class=''></i></td>");
                             }
                        // Choose Occurrence dropdown listeners for resource modal dropdown
                        $("#ddlEventsResources").on('change', function() {


                            //, 
                            var ddlEventValue = $(this).val();
                            // subtitle date and time values
                            var thisOccurrence = $("#ddlEventsResources option:selected").text();    
                             //var newOption = $(this).find(".start-datetime").val();

                             if (ddlEventValue != "0") {

                                $("#resources-tables").show();
                                $(".all-occurrences-list").hide();
                                $(".btn-add-all").text('Add');
                                $(".event-date-time").show();


                            $("#event-resources").find("h2 span").html("for " + thisOccurrence);
                                //$(".occurrence-list-controls").addClass("has-success").delay(3000).queue(function() {
                                //$(this).removeClass("has-success").dequeue();
                                $(".lbl-date").html(thisOccurrence);
                                $("#ddlEvents  option:selected").html(thisOccurrence);
                               // });



                            } else {
                                $('.event-date-time').hide();
                                $(".btn-add-all").text('Add To All');
                                $(".all-occurrences-list").show();
                                $("#resources-tables").hide();
                                $("#event-resources").find("h2 span").html("for all Occurrences");
                                $(".lbl-date").html("All Occurrences");
   
                             }
                             


                         });
                        // Choose Occurrence dropdown listeners for main page dropdown
                        $("#ddlEvents").on('change', function() {

                                //$("#event-resources").unbind();
                                //, 
                                var ddlEventValue = $(this).val();
                                  // subtitle date and time values
                                  var thisOccurrenceMain = $("#ddlEvents option:selected").text();
                                //var newOption = $(this).find(".start-datetime").val();
                                
                                if (ddlEventValue != "0") {

                                    $("#resources-tables").show();
                                    $(".all-occurrences-list").hide();
                                    $(".btn-add-all").text('Add');
                                //     //$('.btn-add-all').show();
                                $(".event-date-time").show();

                                $("#event-resources").find("h2 span").html("for " + thisOccurrenceMain);
                                   // $(".occurrence-list-controls").addClass("has-success").delay(3000).queue(function() {
                                    //$(this).removeClass("has-success").dequeue();
                                    $(".lbl-date").html(thisOccurrenceMain);
                                    $("#ddlEvents Resources option:selected").html(thisOccurrenceMain);
                                   // });



                            } else {

                                    $('.event-date-time').hide();

                                    $(".btn-add-all").text('Add To All');
                                    $(".all-occurrences-list").show();
                                    $("#resources-tables").hide();
                                    $("#event-resources").find("h2 span").html("for all Occurrences");
                                    $(".lbl-date").html("All Occurrences");
                                    $("#ddlEvents Resources option:selected").html("All Occurrences");
                                }

                            });

                        // add resource from modal to table
                        $(".btn-add-all").on("click", function(){
                            $('td.clickable').unbind();

                         // clone table row and add selected item from resources and personnel

                            $(".occurrences-row").last().clone().appendTo("tbody.all-occurrences-body").find(".resource-title").css( "color", "#0099cc" );
                            $("tr.occurrences-row:nth-last-of-type(1) td:first-child").empty();
                            $("table.rth-table > tbody:last-child").append("<tr class='rth-item'><td class='rth-resource'><a href='/' class='rth-detail' data-id='R1' data-title='' data-start='1440736068' data-end='1440752268'></a></td><td class='rth-options'><button class='btn btn-xs btn-danger rth-btn-remove' data-id='R1'><i class='fa fa-fw fa-times'></i></button></td><td class='rth-block rth-divider'></td><td class='rth-block'></td><td class='rth-block'></td><td class='rth-block'></td><td class='rth-block' colspan='10'><div class='rth-proposed'><i class='fa fa-check'></i> Available</div></td><td class='rth-block'></td><td class='rth-block'></td><td class='rth-block rth-divider'></td><td class='rth-block'></td></tr>");
                            //$el.closest(".slat").find(".title").closest("div").last().clone().appendTo( "tr.rth-table:last-child td:first-child");
                            $(this).closest("#grpResults .slat").find(".title").closest("div").clone().appendTo( "tr:last-child td:first-child");
                            $("tr:last-child").removeClass("hidden");
                             // $( this ).css( "color", "#000" );
                            $('.fixed-column').find('thead th:not(:first-child),tbody td:not(:first-child)').remove();
                             // toggle circle icon views on table
                                $('td.clickable').on("click", function(){
                                    if ($(this).find('i').hasClass('fa fa-1x fa-circle')){

                                        $(this).find('i').removeClass('fa fa-1x fa-circle');

                                    } else {

                                        $(this).find('i').addClass('fa fa-1x fa-circle');
                                    }
                                });

                        });

                          // Event Resource Pickers  
                            var count = 0;
                        
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
                               // window.resourcePicker = setTimeout(function() {
                                T.getResources($el, $rp);
                                //}, 300);
                            }
                        })
                        
                        .on('click', '.resource-picker-add', function(e) {
                            $('td.clickable').unbind();
                            var $el = $(this),
                            $rp = $el.closest('.resource-picker'),
                            resources = [$el.attr('data-id')],
                            addons = $el.attr('data-addons').split(',').filter(function(e) {
                                return e;
                            });

                            // clone table row and add selected item from resources and personnel
                            $(".occurrences-row").last().clone().appendTo("tbody.all-occurrences-body").find(".resource-title");
                            $("tr.occurrences-row:nth-last-of-type(1) td:first-child").empty();
                            $("table.rth-table > tbody:last-child").append("<tr class='rth-item'><td class='rth-resource'><a href='/' class='rth-detail' data-id='R1' data-title='' data-start='1440736068' data-end='1440752268'></a></td><td class='rth-options'><button class='btn btn-xs btn-danger rth-btn-remove' data-id='R1'><i class='fa fa-fw fa-times'></i></button></td><td class='rth-block rth-divider'></td><td class='rth-block'></td><td class='rth-block'></td><td class='rth-block'></td><td class='rth-block' colspan='10'><div class='rth-proposed'><i class='fa fa-check'></i> Available</div></td><td class='rth-block'></td><td class='rth-block'></td><td class='rth-block rth-divider'></td><td class='rth-block'></td></tr>");
                            //$el.closest(".slat").find(".title").closest("div").last().clone().appendTo( "tr.rth-table:last-child td:first-child");
                            $el.closest(".slat").find(".title").closest("div").appendTo( "tr:last-child td:first-child");
                            $("tr:last-child").removeClass("hidden");
                            $('.fixed-column').find('thead th:not(:first-child),tbody td:not(:first-child)').remove();
                            //<span class='instructor-label'>

                            // rebuild fixed column table
                            //cloneOccurrenceTable();
                            
                            $.merge(resources, addons);
                            T.setResources(resources);
                            
                            if ($("#ddlEvents:hidden").length)

                              $("#resources-tables").show();

                            else


                            // toggle circle icon views on table
                                $('td.clickable').on("click", function(){
                                    if ($(this).find('i').hasClass('fa fa-1x fa-circle')){

                                        $(this).find('i').removeClass('fa fa-1x fa-circle');

                                    } else {

                                        $(this).find('i').addClass('fa fa-1x fa-circle');
                                    }
                                });

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
                            })

                        // Resource Picker modal issue
                        .on('mouseover', '.input-group-addon, .resource-picker-input', function(e) {
                                var $el = $(this),
                                $rp = $el.closest('.resource-picker');
                                $rp.find('.resource-picker-input').val('').trigger('keyup');
                                $('#resource-picker-backdrop').hide();
                                e.preventDefault();
                            })
                        .on('mouseleave', '.resource-picker-overlay', function(e) {
                                var $el = $(this),
                                $rp = $el.closest('.resource-picker');
                                $rp.find('.resource-picker-input').val('').trigger('keyup');
                                $('#resource-picker-backdrop').hide();
                                e.preventDefault();
                            })
                      
                        

                            $('.resource-picker-overlay').not(this).each(function() {
                              $(this).closest('.resource-picker-clear').trigger('click');
                            })
                      

                     

                        // Resource Modal
                        $('#modal-resource')
                        .on('click', '.btn-save-resource', function() {
                            var id = $(this).attr('data-id'),
                            dates = T.getDates($('#resource-start-date'), $('#resource-start-time'), $('#resource-end-date'), $('#resource-end-time'));
                            T.setResource(id, dates[0], dates[1]);
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
                        d = date.format('mm/dd/YYYY'),
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

                       // $('.rth-loading').show();
                       $.post('/server.php', params, function(data) {
                        clearTimeout(window.resourcePicker);
                          //  setTimeout(function() {
                            $table.html(data.html);
                            $('#event-resources').trigger('resourcesTableUpdated');
                           // }, 300);
                   });
                       //cloneOccurrenceTable()
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
                    // if update button is not clicked in modal
                    $('#btnCancelRecurrence').click(function() {
                    $('#toggle-recurrence').prop('checked', false);
                        
                        $('input[type="checkbox"]').click(function() {

                            if ($(this).prop("checked") === false) {
                                $('.event-date-time, #resources-tables').removeClass('hidden');

                            } else if ($(this).prop("checked") === true) {
                                $('.event-date-time').addClass('hidden');
                            }
                        });
                    });
                }
            };

            $(window).on('load', function() {
                healthStream.peoplepicker.init();
            });


        }

        (window, jQuery));

            // datetime picker 
            $(document).click(function(e) {
                var target = $(e.target);
                if (target.parents('.bootstrap-datetimepicker-widget').length < 1 && !target.hasClass('datepicker') && !target.hasClass('timepicker') && !target.hasClass('dtp-form')) {
                    if ($('.bootstrap-datetimepicker-widget').length > 0) {

                        $('.datetime-input').each(function() {
                            $(this).data('DateTimePicker').hide();
                        });


                    }
                }
            });

            $('.datetime-input').on("dp.show", function() {

                $('.datetime-input').not(this).each(function() {
                    $(this).data('DateTimePicker').hide();
                });
            });


            function scheduleEventLink(){

                $("#ddlEvents").html("<option value='0'>All Occurrences</option>");
                $("#ddlEventsResources").html("<option value='0'>All Occurrences</option>");
                $("#ddlEventsPersonnel").html("<option value='0'>All Occurrences</option>");
                $('.table').find('thead th:not(:first-child),tbody td:not(:first-child)').remove()
            var optionValue = 1; // start value at 2 to skip all occurrences option
            
            $(".occurrenceListItem:visible").each(function() {

                var newOption = $(this).find(".start-datetime").val() + " - " + $(this).find(".end-datetime").val();
                
                $("#ddlEvents").append("<option value=" + optionValue + ">" + newOption + "</option>");
                $("#ddlEventsResources").append("<option value=" + optionValue + ">" + newOption + "</option>");
                $("#ddlEventsPersonnel").append("<option value=" + optionValue + ">" + newOption + "</option>");
                $(".all-occurrences-dates").append("<th class='all-occurrences-date'>" + newOption + "</th>");
                $(".dt-subtitle").append("<h5='" + newOption + "'</h5>");
                $(".occurrences-row").append("<td class='text-center icon clickable'><i class='fa fa-1x fa-circle'></i></td>");

                optionValue ++;
            });
            
            $("select[name='occurrence-dropdown']").find("option[value='0']").attr("selected", true);
            // display items that should appear when recurrence rules are updated
            $('.show-when-recurrence-updated, #recurrence-updated, #scheduleEventSection').show();
            $(".hide-when-recurrence-updated, #manualRecurrenceSection, .event-date-time, .recurrence, #resources-tables").hide();
            $('.fixed-column').find('thead th:not(:first-child),tbody td:not(:first-child)').remove();
;
            // toggle circle icon views on table
            $('td.clickable').unbind();
            $('td.clickable').on("click", function(){
                if ($(this).find('i').hasClass('fa fa-1x fa-circle')){

                    $(this).find('i').removeClass('fa fa-1x fa-circle');

                } else {

                    $(this).find('i').addClass('fa fa-1x fa-circle');
                }
            });
              applyDateTimePickerSettings();

        }
        function recurrenceLink(){

            // Recurrence button to change screens to add custom occurrences


                event.preventDefault();
                $("#scheduleEventSection").hide();
                $("#manualRecurrenceSection").show();
                
                removeOccurrenceRows();

        }
        function recurrencesUpdated() {

            //close recurrence modal
            $('#modal-recurrence').hide();

            //display items that should appear when recurrence rules are updated
            $('.show-when-recurrence-updated, #reccurrence-updated').show();
            $(".hide-when-recurrence-updated, #resources-tables, .event-date-time").hide();
            $(".btn-add-all").text('Add To All');

            // Declaring values to generate the reccurrence rules confirmation statement
            var patternTypeValue = $("#ddlPatternType option:selected").text();
            var patternUnitNumber = $("#PatternIncrementValue").val();
            var patternUnit = $(".patternTimeUnitSelected").text();
            var recurrenceStartTime = $("#EventStartTime").val();
            var recurrenceEndTime = $("#EventEndTime").val();
            var recurrenceStartDate = $("#PatternStartDate").val();
            var occurenceCount = $("#PatternOccurrenceCount").val();
            
            $("#patternTypeValue").html(patternTypeValue);
            $("#patternUnitNumber").html(patternUnitNumber);
            $("#patternUnit").html(patternUnit);
            $("#recurrenceStartTime").html(recurrenceStartTime);
            $("#recurrenceEndTime").html(recurrenceEndTime);
            $("#recurrenceStartDate").html(recurrenceStartDate);
            $("#occurenceCount").html(occurenceCount);

    // Make the first selection option All Occurrences
    $("#ddlEvents").html("<option value='0'>All Occurrences</option>");
    $("#ddlEventsResources").html("<option value='0'>All Occurrences</option>");
    $("#ddlEventsPersonnel").html("<option value='0'>All Occurrences</option>");

    // log to console to check value 
   //console.log(patternTypeValue);

   // values for reccurrence modal fields
   var optionValue = $("#PatternOccurrenceCount").val();

    // Daily
    if (patternTypeValue === 'Daily') {

        var rType = 'days';
        var iType = '0';
    }

     // Weekly
     if (patternTypeValue === 'Weekly') {

       var rType = 'weeks';
         var iType = '1'; // value must be 1 for weeks or the dates display incorrectly
     }

     // Monthly
     if (patternTypeValue === 'Monthly') {

       var rType = 'months';
       var iType = '0';

   }
   
       // log to console to check value 
       //console.log(patternUnitNumber);
       //console.log(iType);
       $("#ddlEvents").html("<option value='0'>All Occurrences</option>");
       $("#ddlEventsResources").html("<option value='0'>All Occurrences</option>");
       $("#ddlEventsPersonnel").html("<option value='0'>All Occurrences</option>");
       $("#lstEvents").html("<div class='row occurrenceListItem'><div class='col-md-1' align='center'><span class='occurrenceNumber'>" + 1 + "</span></div><div class='datetime-group'><div class='col-md-4' align='left'><div class='input-group bootstrap-datepicker'><input type='text' class='form-control start-datetime dtp-form dateTimePicker datetime-input' value='" + moment().format("MM/DD/YYYY") + " " + recurrenceStartTime + "'><span class='input-group-addon dtp-form'><i class='fa fa-calendar dtp-form'></i></span></div></div><div class='col-md-4' align='left'><div class='input-group bootstrap-datepicker'><input type='text' class='form-control end-datetime dtp-form dateTimePicker datetime-input' value='" + moment().format("MM/DD/YYYY") + " " + recurrenceEndTime + "'><span class='input-group-addon dtp-form'><i class='fa fa-calendar dtp-form'></i></span></div></div></div><div class='col-md-3' align='right'><button class='btn btn-danger btn-sm btn-remove' type='button' data-eventid='" + optionValue + "'><i class='fa fa-minus'></i></button></div> </div>");
   // var optionValue = 0; // start value at 2 to skip all occurrences option    
    var occurrenceNumber = $(".occurrenceListItem:visible").length + 1;
       
       for(var i = occurrenceNumber; i <= optionValue; i++) {

    
    
    var rowCount = i;
    var ndate =  moment().add(patternUnitNumber - iType + i, rType).format("MM/DD/YYYY");

         // log to console to check value 
         //   console.log(i);

         $("#ddlEvents").append("<option value=" + rowCount + ">" + ndate + " " + recurrenceStartTime + " - " + ndate + " " + recurrenceEndTime + "</option>");
         $("#ddlEventsResources").append("<option value=" + rowCount + ">" + ndate + " " + recurrenceStartTime + " - " + ndate + " " + recurrenceEndTime + "</option>");
         $("#ddlEventsPersonnel").append("<option value=" + rowCount + ">" + ndate + " " + recurrenceStartTime + " - " + ndate + " " + recurrenceEndTime + "</option>");
         //$(".all-occurrences-dates").append("<th class='all-occurrences-date'>" + ndate + " " + recurrenceStartTime + " - " + ndate + " " + recurrenceEndTime + "</th>");
         //$(".occurrences-row").append("<td class='text-center icon clickable'><i class='fa fa-1x fa-circle'></i></td>");
         $("#lstEvents").append("<div class='row occurrenceListItem'><div class='col-md-1' align='center'><span class='occurrenceNumber'>" + rowCount + "</span></div><div class='datetime-group'><div class='col-md-4' align='left'><div class='input-group bootstrap-datepicker'><input type='text' class='form-control start-datetime dtp-form dateTimePicker datetime-input' value='" + ndate + " " + recurrenceStartTime + "'><span class='input-group-addon dtp-form'><i class='fa fa-calendar dtp-form'></i></span></div></div><div class='col-md-4' align='left'><div class='input-group bootstrap-datepicker'><input type='text' class='form-control end-datetime dtp-form dateTimePicker datetime-input' value='" + ndate + " " + recurrenceEndTime + "'><span class='input-group-addon dtp-form'><i class='fa fa-calendar dtp-form'></i></span></div></div></div><div class='col-md-3' align='right'><button class='btn btn-danger btn-sm btn-remove' type='button' data-eventid='" + optionValue + "'><i class='fa fa-minus'></i></button></div> </div>");
         $('.fixed-column').find('tbody td:not(:first-child)').remove();
         $('.table').find('thead th:not(:first-child),tbody td:not(:first-child)').remove();
         
         rowCount++;

     };
     
     applyDateTimePickerSettings();



     $('td.clickable').unbind();
     $('td.clickable').on('click', function() {
        if ($(this).find('i').hasClass('fa fa-1x fa-circle')){

            $(this).find('i').removeClass('fa fa-1x fa-circle');

        } else {

            $(this).find('i').addClass('fa fa-1x fa-circle');
        }
    });


 }

 function applyDateTimePickerSettings() {
            //apply action of input click when input icon is clicked
            $('.input-group-addon').on('click', function() {
                $(this).siblings('input').trigger('focus');
            });

            //Show either time or date picker or both 
            $('.dateTimePicker').datetimepicker({
                inline: false,
                sideBySide: true
            });

            $('.dateTimePickerDate').datetimepicker({
                inline: false,
                sideBySide: false,
                format: 'L'

            });

            $('.datetime-input').on("dp.show", function() {
                $('.datetime-input').not(this).each(function() {
                    $(this).data('DateTimePicker').hide();
                });
            });

            $('.dateTimePickerTime').datetimepicker({
                inline: false,
                sideBySide: false,
                format: 'LT'

            });


        }
        
        function UpdateRecurrenceModalState() {
            var selectedRecurrenceType = $('#ddlPatternType').val();
                // Same day
                if (selectedRecurrenceType === '0') {

                    $(".patternTimeUnit").removeClass("patternTimeUnitSelected");
                    $('#lblMinuteInc').css('display', 'inline-block');
                    $('#lblMinuteInc').addClass("patternTimeUnitSelected");
                    $('#grpMonthOfYear, .patternTimeUnit, #grpDayOfWeek, #grpEndTimeDuration, #grpEndDateOption, #grpDayOptions').hide();
                    $('#txtAfterOption').show();

                    if ($('#grpEndTimeDuration').is(":visible")) {

                        var difference = $('#dtpEventEndTime').data("DateTimePicker").date().diff($('#dtpEventStartTime').data("DateTimePicker").date(), 'minutes');
                        
                        $('#EventEndTime').data('end-time-difference', difference);
                    }
                    
                    $('#dtpEventEndTime').data("DateTimePicker").date($('#dtpEventStartTime').data("DateTimePicker").date().add(1, 'minutes'));
                    $('#ddlEndDateOption').val(1);
                    $('#PatternDay').val($('#PatternDay').data('memory'));
                    $('form').validate().element($("#PatternDay"));


                } else {

                    if (!($('#grpEndTimeDuration').is(":visible"))) {

                        var diff = 60;
                        
                        if ($('#EventEndTime').data('end-time-difference')) {
                            diff = $('#EventEndTime').data('end-time-difference');
                        }
                        
                        var newEndDateTime = $('#dtpEventStartTime').data("DateTimePicker").date().add(diff, "minutes");
                        
                        if (newEndDateTime.diff(moment().startOf('day').add(1, "days"), "minutes") >= 0) {
                            newEndDateTime = moment().startOf('day').add(1, "days").add(-1, "minutes");
                        }
                        
                        $("#dtpEventEndTime").data("DateTimePicker").date(newEndDateTime);
                    }

                    $('#grpEndTimeDuration, #grpEndDateOption').show();
                    $('#txtAfterOption').hide();
                    $('#lblMinuteInc').css('display', 'none');
                }

                // Daily
                if (selectedRecurrenceType === '2') {

                    $(".patternTimeUnit").removeClass("patternTimeUnitSelected");
                    $('#lblDayInc').addClass("patternTimeUnitSelected");
                    $('#grpMonthOfYear, #grpDayOfWeek, #grpDayOptions, .patternTimeUnit').hide();
                    $('#lblDayInc').css('display', 'inline-block');
                    $('#PatternDay').val($('#PatternDay').data('memory'));
                    $('form').validate().element($("#PatternDay"));
                }

                // Weekly
                if (selectedRecurrenceType === '4') {


                    $('#grpMonthOfYear, .patternTimeUnit, #grpDayOptions').hide();
                    $(".patternTimeUnit").removeClass("patternTimeUnitSelected");
                    $('#lblWeekInc').addClass("patternTimeUnitSelected");
                    $('#grpDayOfWeek').show();
                    $('#lblWeekInc').css('display', 'inline-block');
                    $('#PatternDay').val($('#PatternDay').data('memory'));
                    $('form').validate().element($("#PatternDay"));
                }

                // Monthly
                if (selectedRecurrenceType === '8') {

                    $('#grpMonthOfYear, .patternTimeUnit, #grpDayOfWeek').hide();
                    $(".patternTimeUnit").removeClass("patternTimeUnitSelected");
                    $('#lblMonthInc').css('display', 'inline-block');
                    $('#lblMonthInc').addClass("patternTimeUnitSelected");
                    $('#grpDayOptions').show();

                    if ($('#ddlPatternOrderOption').val() === '7') {

                        $('#txtDay').css('display', 'inline-block');
                        $('#grpDayOption').css('display', 'none');

                    } else {

                        $('#txtDay').css('display', 'none');
                        $('#grpDayOption').css('display', 'inline-block');
                        $('#PatternDay').val($('#PatternDay').data('memory'));
                        $('form').validate().element($("#PatternDay"));

                    }

                    if ($('#PatternDay').val() > 31) {

                        $('#PatternDay').val(31);

                    } else if ($('#PatternDay').val() < 1) {

                        $('#PatternDay').val(1);
                    }


                }

                // Yearly
                if (selectedRecurrenceType === '16') {

                    $('#grpMonthOfYear, #grpDayOptions').show();
                    $('#grpDayOfWeek, .patternTimeUnit').hide();

                    if ($('#ddlPatternOrderOption').val() === '7') {

                        $('#txtDay').css('display', 'inline-block');
                        $('#grpDayOption').css('display', 'none');

                    } else {

                        $('#txtDay').css('display', 'none');
                        $('#grpDayOption').css('display', 'inline-block');
                        $('#PatternDay').val($('#PatternDay').data('memory'));
                        $('form').validate().element($("#PatternDay"));
                    }

                    $('#lblYearInc').css('display', 'inline-block');
                    $(".patternTimeUnit").removeClass("patternTimeUnitSelected");
                    $('#lblYearInc').addClass("patternTimeUnitSelected");


                }


                // End date
                if ($('#ddlEndDateOption').val() === '1') {

                    if (!($('#txtPatternOccurrenceCount').is(":visible"))) {

                        $('#PatternOccurrenceCount').val($('#PatternOccurrenceCount').data('memory'));
                        $('form').validate().element($('#PatternOccurrenceCount'));
                    }
                    
                    $('#txtPatternOccurrenceCount').show();
                    $('#dtPatternEndDate').hide();

                } else {

                    if (($('#txtPatternOccurrenceCount').is(":visible"))) {
                        if ($('form').validate().element($('#PatternOccurrenceCount')))

                            $('#PatternOccurrenceCount').data('memory', $('#PatternOccurrenceCount').val());
                        else {

                            $('#PatternOccurrenceCount').val($('#PatternOccurrenceCount').data('memory'));
                        }
                    }
                    
                    $('#txtPatternOccurrenceCount').hide();
                    $('#dtPatternEndDate').show();
                }

                $("#grpDayOptions-validation").text("");
                $(".recurrence-validate-field").each(function() {
                    $('form').validate().element(this);

                });
            }

            function initEndDateTimeChange() {
                $('#dtpEventEndTime').datetimepicker().off("dp.change");
                $('#dtpEventEndTime').datetimepicker().on('dp.change', function(e) {

                    var input = $(this).find('input');
                    
                    if ($.trim(input.val()) === "" || !(moment($.trim(input.val()), 'LT', true).isValid())) {
                        //$('#EventStartTime').val($('#EventStartTime').data('memory'));
                        $('#dtpEventEndTime').data("DateTimePicker").date(moment().startOf('day').hour($('#EventEndTime').data('memory').hour).minute($('#EventEndTime').data('memory').minute));
                        return;
                    }
                });
            }

            function initStartDateTimeChange() {
                $('#dtpEventStartTime').datetimepicker().off("dp.change");
                $('#dtpEventStartTime').datetimepicker().on('dp.change', function(e) {

                    var input = $(this).find('input');
                    
                    if ($.trim(input.val()) === "" || !(moment($.trim(input.val()), 'LT', true).isValid())) {
                        //$('#EventStartTime').val($('#EventStartTime').data('memory'));
                        
                        $('#dtpEventStartTime').data("DateTimePicker").date(moment().startOf('day').hour($('#EventStartTime').data('memory').hour).minute($('#EventStartTime').data('memory').minute));
                        
                        return;
                    }
                    
                    var curStartTime = moment().startOf('day').hour($('#EventStartTime').data('memory').hour).minute($('#EventStartTime').data('memory').minute);
                    var newStartTime = moment().startOf('day').hour($(this).data("DateTimePicker").date().hour()).minute($(this).data("DateTimePicker").date().minute());
                    var endTime = moment().startOf('day').hour($('#dtpEventEndTime').data("DateTimePicker").date().hour()).minute($('#dtpEventEndTime').data("DateTimePicker").date().minute());
                    var difference = newStartTime.diff(curStartTime, "milliseconds");

                    endTime.add(difference, "milliseconds");
                    
                    if (endTime.diff(moment().startOf('day').add(1, "day")) >= 0) {

                        $(this).data("DateTimePicker").date(moment().startOf('day').hour($('#EventStartTime').data('memory').hour).minute($('#EventStartTime').data('memory').minute));
                        
                        return;
                    }

                    $("#dtpEventEndTime").data("DateTimePicker").minDate(e.date.add(1, "minutes"));


                    $('#dtpEventEndTime').data("DateTimePicker").date(endTime);
                    $('#EventStartTime').data('memory', {

                        hour: $('#dtpEventStartTime').data("DateTimePicker").date().hour(),
                        minute: $('#dtpEventStartTime').data("DateTimePicker").date().minute()

                    });
                });
}

function patternStartEndEvents() {

    var startTime = $('#dtpEventStartTime').data("DateTimePicker").date();
    
    if (startTime < $('#dtpEventEndTime').data("DateTimePicker").date()) {

        $('#dtpEventEndTime').data("DateTimePicker").minDate(moment().startOf('day').hour(startTime.hour()).minute(startTime.minute() + 1));
        initEndDateTimeChange();
        initStartDateTimeChange();
        updateDateTimeFields();

    } else {

        $('#dtpEventEndTime').data("DateTimePicker").minDate(moment().startOf('day'));
        $('#dtpEventEndTime').datetimepicker().on('dp.change', function(e) {

            var input = $(this).find('input');
            
            if ($.trim(input.val()) === "" || !(moment($.trim(input.val()), 'LT', true).isValid())) {

                $('#dtpEventEndTime').data("DateTimePicker").date(moment().startOf('day').hour($('#EventEndTime').data('memory').hour).minute($('#EventEndTime').data('memory').minute));
                
                return;

            } else {

                if ($('#dtpEventStartTime').data("DateTimePicker").date() < $('#dtpEventEndTime').data("DateTimePicker").date()) {

                    $('#dtpEventEndTime').data("DateTimePicker").minDate(moment().startOf('day').hour($('#dtpEventStartTime').data("DateTimePicker").date().hour()).minute($('#dtpEventStartTime').data("DateTimePicker").date().minute() + 1));
                    
                    initEndDateTimeChange();
                    initStartDateTimeChange();
                    updateDateTimeFields();
                }
            }
        });
$('#EventStartTime').data('memory', {

    hour: $('#dtpEventStartTime').data("DateTimePicker").date().hour(),
    minute: $('#dtpEventStartTime').data("DateTimePicker").date().minute()
});

$('#dtpEventStartTime').datetimepicker().on('dp.change', function(e) {
    var input = $(this).find('input');

    if ($.trim(input.val()) === "" || !(moment($.trim(input.val()), 'LT', true).isValid())) {

        $('#dtpEventStartTime').data("DateTimePicker").date(moment().startOf('day').hour($('#EventStartTime').data('memory').hour).minute($('#EventStartTime').data('memory').minute));

        return;

    } else {
        if ($('#dtpEventStartTime').data("DateTimePicker").date() < $('#dtpEventEndTime').data("DateTimePicker").date()) {
                                //$('#dtpEventEndTime').data("DateTimePicker").minDate(moment().startOf('day').hour($('#dtpEventStartTime').data("DateTimePicker").date().hour()).minute($('#dtpEventStartTime').data("DateTimePicker").date().minute() + 1));
                                initEndDateTimeChange();
                                initStartDateTimeChange();
                                updateDateTimeFields();
                            }
                            
                            $('#EventStartTime').data('memory', {
                                hour: $('#dtpEventStartTime').data("DateTimePicker").date().hour(),
                                minute: $('#dtpEventStartTime').data("DateTimePicker").date().minute()
                            });
                        }
                    });
}
}

function closeOtherDatetimePickers($showing) {
    $('.datetime-input').each(function() {
        var $other = $(this).parent();
        
        if ($other[0] != $showing[0]) {
            $other.data('DateTimePicker').hide();
        }
    });
}

$('#ddlPatternType').change(UpdateRecurrenceModalState);


function initEndDateTimeChange() {

    $('#dtpEventEndTime').datetimepicker().off("dp.change");
    $('#dtpEventEndTime').datetimepicker().on('dp.change', function(e) {

        var input = $(this).find('input');
        
        if ($.trim(input.val()) === "" || !(moment($.trim(input.val()), 'LT', true).isValid())) {
                    //$('#EventStartTime').val($('#EventStartTime').data('memory'));
                    $('#dtpEventEndTime').data("DateTimePicker").date(moment().startOf('day').hour($('#EventEndTime').data('memory').hour).minute($('#EventEndTime').data('memory').minute));
                    return;
                }
            });
}

function initStartDateTimeChange() {

    $('#dtpEventStartTime').datetimepicker().off("dp.change");
    $('#dtpEventStartTime').datetimepicker().on('dp.change', function(e) {

        var input = $(this).find('input');
        
        if ($.trim(input.val()) === "" || !(moment($.trim(input.val()), 'LT', true).isValid())) {
                    //$('#EventStartTime').val($('#EventStartTime').data('memory'));
                    $('#dtpEventStartTime').data("DateTimePicker").date(moment().startOf('day').hour($('#EventStartTime').data('memory').hour).minute($('#EventStartTime').data('memory').minute));
                    
                    return;
                }
                var curStartTime = moment().startOf('day').hour($('#EventStartTime').data('memory').hour).minute($('#EventStartTime').data('memory').minute);
                var newStartTime = moment().startOf('day').hour($(this).data("DateTimePicker").date().hour()).minute($(this).data("DateTimePicker").date().minute());
                var endTime = moment().startOf('day').hour($('#dtpEventEndTime').data("DateTimePicker").date().hour()).minute($('#dtpEventEndTime').data("DateTimePicker").date().minute());
                var difference = newStartTime.diff(curStartTime, "milliseconds");

                endTime.add(difference, "milliseconds");
                
                if (endTime.diff(moment().startOf('day').add(1, "day")) >= 0) {

                    $(this).data("DateTimePicker").date(moment().startOf('day').hour($('#EventStartTime').data('memory').hour).minute($('#EventStartTime').data('memory').minute));
                    
                    return;
                }

                $("#dtpEventEndTime").data("DateTimePicker").minDate(e.date.add(1, "minutes"));


                $('#dtpEventEndTime').data("DateTimePicker").date(endTime);
                $('#EventStartTime').data('memory', {

                    hour: $('#dtpEventStartTime').data("DateTimePicker").date().hour(),
                    minute: $('#dtpEventStartTime').data("DateTimePicker").date().minute()
                });
            });
}

function patternStartEndEvents() {

    var startTime = $('#dtpEventStartTime').data("DateTimePicker").date();
    
    if (startTime < $('#dtpEventEndTime').data("DateTimePicker").date()) {

        $('#dtpEventEndTime').data("DateTimePicker").minDate(moment().startOf('day').hour(startTime.hour()).minute(startTime.minute() + 1));
        initEndDateTimeChange();
        initStartDateTimeChange();
        updateDateTimeFields();

    } else {
        $('#dtpEventEndTime').data("DateTimePicker").minDate(moment().startOf('day'));

        $('#dtpEventEndTime').datetimepicker().on('dp.change', function(e) {

            var input = $(this).find('input');
            
            if ($.trim(input.val()) === "" || !(moment($.trim(input.val()), 'LT', true).isValid())) {

                $('#dtpEventEndTime').data("DateTimePicker").date(moment().startOf('day').hour($('#EventEndTime').data('memory').hour).minute($('#EventEndTime').data('memory').minute));
                
                return;

            } else {

                if ($('#dtpEventStartTime').data("DateTimePicker").date() < $('#dtpEventEndTime').data("DateTimePicker").date()) {

                    $('#dtpEventEndTime').data("DateTimePicker").minDate(moment().startOf('day').hour($('#dtpEventStartTime').data("DateTimePicker").date().hour()).minute($('#dtpEventStartTime').data("DateTimePicker").date().minute() + 1));
                    
                    initEndDateTimeChange();
                    initStartDateTimeChange();
                    updateDateTimeFields();
                }
            }
        });
$('#EventStartTime').data('memory', {

    hour: $('#dtpEventStartTime').data("DateTimePicker").date().hour(),
    minute: $('#dtpEventStartTime').data("DateTimePicker").date().minute()
});

$('#dtpEventStartTime').datetimepicker().on('dp.change', function(e) {

    var input = $(this).find('input');

    if ($.trim(input.val()) === "" || !(moment($.trim(input.val()), 'LT', true).isValid())) {
        $('#dtpEventStartTime').data("DateTimePicker").date(moment().startOf('day').hour($('#EventStartTime').data('memory').hour).minute($('#EventStartTime').data('memory').minute));

        return;

    } else {

        if ($('#dtpEventStartTime').data("DateTimePicker").date() < $('#dtpEventEndTime').data("DateTimePicker").date()) {
                            //$('#dtpEventEndTime').data("DateTimePicker").minDate(moment().startOf('day').hour($('#dtpEventStartTime').data("DateTimePicker").date().hour()).minute($('#dtpEventStartTime').data("DateTimePicker").date().minute() + 1));
                            initEndDateTimeChange();
                            initStartDateTimeChange();
                            updateDateTimeFields();
                        }
                        $('#EventStartTime').data('memory', {
                            hour: $('#dtpEventStartTime').data("DateTimePicker").date().hour(),
                            minute: $('#dtpEventStartTime').data("DateTimePicker").date().minute()
                        });
                    }
                });
}
}
function updateDateTimeFields(){

    var eventStartDate = $("#event-start-date").value();

    $('select[name="occurrence-dropdown"]').value(eventStartDate);
}
function closeOtherDatetimePickers($showing) {
    $('.datetime-input').each(function() {

        var $other = $(this).parent();
        
        if ($other[0] != $showing[0]) {
            $other.data('DateTimePicker').hide();
        }
    });
}
function cloneOccurrenceTable(){
 //$('.clickable').unbind();
           // var cloneMe = $(".all-occurrences-table").last().clone();
            //cloneMe.appendTo("#all-occurrences-list");
  var $table = $('.all-occurrences-table');
    //Make a clone of our table
    var $fixedColumn = $table.clone().insertBefore($table).addClass('fixed-column');


    //Remove everything except for first column
    $fixedColumn.find('thead th:not(:first-child),tbody td:not(:first-child)').remove();

    //Match the height of the rows to that of the original table's
    $fixedColumn.find('tr').each(function (i, elem) {
        $(this).height($table.find('tr:eq(' + i + ')').height());

    //       $fixedColumn.find('tr').each(function (i, elem) {
    //     $(this).height($table.find('tr:eq(' + i + ')').height());
    // });
    });
    //$('.fixed-column').find('tbody td:last-child').remove();
    $('td.clickable').unbind();
     $('td.clickable').on('click', function() {
        if ($(this).find('i').hasClass('fa fa-1x fa-circle')){

            $(this).find('i').removeClass('fa fa-1x fa-circle');

        } else {

            $(this).find('i').addClass('fa fa-1x fa-circle');
        }
    });
    }
