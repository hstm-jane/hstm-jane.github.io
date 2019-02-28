'use strict';

$(window).on('load', function(){
    let storedPlanMeta = sessionStorage.getItem('planMeta');
    // console.log("plan meta from storage", storedPlanMeta); 
    let planMeta = JSON.parse(storedPlanMeta);
    $('#planNameFill-assign').html(planMeta.planName || `No Plan Name Was Entered`);
    $('#planNotesFill-assign').html(planMeta.planNotes || `No Plan Notes Were Entered`)
})

$('.assignBtn').on('click', function(){
    $('#assignAction').addClass('hide');
    $('#planOutline').addClass('col-md-offset-4');
})

