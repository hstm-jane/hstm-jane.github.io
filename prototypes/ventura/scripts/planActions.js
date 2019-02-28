(function (window, document, $) {

    // ========= Opens Modal for entering Plan Names/Notes and saves the planMeta object to session Storage
    $(window).on('load', function(){
        $('#planDetailsModal').modal('show');
    });

    $(document).on('click', '#planMetaSubmit', function(event){
        event.preventDefault();
        let planMeta = buildPlanMeta();
        $('#planNameFill').html(planMeta.planName || `Plan Name`);
        $('#planNotesFill').html(planMeta.planNotes || `This is where the notes for the plan would go. Information such as what the purpose of the plan is or who should be assigned this plan.`); // this is just filler text provided in the prototype. Consider requiring those fields or having a different default. 
        sessionStorage.setItem('planMeta', JSON.stringify(planMeta)); // setting this into local storage to superficially use in other screens where this information is needed rather than hard code something in
        $('#planDetailsModal').modal('hide');
    });

}(window, document, jQuery));

// =================== Builds object from plan details modal =================
function buildPlanMeta(){
    let planMeta = {
        planName: $('#planName').val(),
        planNotes: $('#planNotes').val()
    };
    return planMeta;
}
