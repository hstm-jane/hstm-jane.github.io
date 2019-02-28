$('.btn-toggle #yes').ready(function() {

      $('#att tr.highlight td.icon i').removeClass('fa-green fa-check-circle');
      $('#pf tr.highlight td.icon i').removeClass('fa-green fa-check-circle');
 });
$('.btn-toggle #yes').click(function() {

        $(this).parent().find('#yes').addClass('btn-success active');
        $(this).parent().find('#no').removeClass('btn-danger active');
        $(this).closest('tr').removeClass('danger');
        $(this).parent().parent().parent().find('i').removeClass('fa-red fa-minus'); 
        $(this).parent().parent().parent().find('i').addClass('fa-green fa-check-circle'); 
 });
$('.btn-toggle #no').click(function() {

        $(this).parent().find('#yes').removeClass('btn-success active');
        $(this).parent().find('#no').addClass('btn-danger active');
        $(this).closest('tr').addClass('danger');
        $(this).parent().parent().parent().find('i').removeClass('fa-green fa-check-circle');
        $(this).parent().parent().parent().find('i').addClass('fa-red fa-minus');  
 });

// attendance table
$('#att-all').click(function() {
    //$('.btn-group[data-toggle="buttons-checkbox"] button').button('toggle');
      $('#att tr.highlight').removeClass('danger');
      $('#att tr.highlight td.icon i').addClass('fa-green fa-check-circle');
      $('#att tr.highlight td.icon i').removeClass('fa-red fa-minus');
      $('#att tr.highlight td div #yes').addClass('btn-success active'); 
      $('#att tr.highlight td div #no').removeClass('btn-danger active');  
       //$('#pf tr.highlight td div button.btn').toggleClass('active'); 
});
$('#dna-all').click(function() {
    //$('.btn-group[data-toggle="buttons-checkbox"] button').button('toggle');
      $('#att tr.highlight').removeClass('danger');
      $('#att tr.highlight td.icon i').removeClass('fa-green fa-check-circle');
      $('#att tr.highlight td.icon i').removeClass('fa-red fa-minus');
      $('#att tr.highlight td div #yes').removeClass('btn-success active'); 
      $('#att tr.highlight td div #no').removeClass('btn-danger active');  
     
});
// pass / fail table
$('#pass-all').click(function() {
      $('#pf tr.highlight').removeClass('danger');
      $('#pf tr.highlight td.icon i').addClass('fa-green fa-check-circle');
      $('#pf tr.highlight td.icon i').removeClass('fa-red fa-minus');
      $('#pf tr.highlight td div #yes').addClass('btn-success active'); 
      $('#pf tr.highlight td div #no').removeClass('btn-danger active');  

});
$('#fail-all').click(function() {
      $('#pf tr.highlight').removeClass('danger');
      $('#pf tr.highlight td.icon i').removeClass('fa-green fa-check-circle');
      $('#pf tr.highlight td.icon i').removeClass('fa-red fa-minus');
      $('#pf tr.highlight td div #yes').removeClass('btn-success active'); 
      $('#pf tr.highlight td div #no').removeClass('btn-danger active');  
});

$('form').submit(function(){
    alert($(this["options"]).val());
    return false;
});