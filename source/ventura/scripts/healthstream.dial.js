(function (window, $) {
    'use strict';

    $(document).ready(function(){

        // convert radios to slider
        $('#dialRadios').radiosToSlider();

        //this function disables radio buttons in the dial 
        $(function($){
            var disabledOptions = ['#1_3_Month', '#2_6_Month']; //place input IDs to be disabled in this array
            $.each(disabledOptions, function(index, value){
                var optionText = value.slice("1");
                $(value).prop('disabled', true).addClass('disabled').off('click change');
            $('ins\[data-radio=' + optionText + '\]').prop('disabled', true).addClass('hidden').off('click change');
            $('label\[for=' + optionText + '\]').addClass('slider-label-disabled');
            });
        });
    

        // get slider input value
        $('#dialRadios').click(function() {
            var selectedMonthValue = $('input[name=monthOptions]:checked').attr('id'); 
            var selectedOption = selectedMonthValue.slice(0,1)
            var splitMonth = selectedMonthValue.split('_');
            var labeledMonth = splitMonth[1] + ' ' + 'months';
            $('.knob')
                .val(selectedOption)
                .trigger('change');
            $('.knob').val(labeledMonth).trigger('format');
            $('.selectedTerm').text(labeledMonth).trigger('change');
        });

        // pass input value to dial and render inner text
        $(function($) {
            $(".knob").knob({
                format : function () {
                    var selectedOption = $('.knob').attr('value');
                    switch (selectedOption) { // switch handles initial value before click
                        case '1': 
                            return '3 months';
                        case '2':
                            return '6 months';
                        case '3': 
                            return '12 months';
                        case '4':
                            return '24 months';  
                        default: 
                            return 'error';
                    }
                }
            });
        }); 
        

        //fill right side h2
        $('#certifyingBody').change(function(){
            var partner = "";
            $( "#certifyingBody option:selected" ).each(function() {
            partner += $( this ).attr('data-name') + " ";
            });
            $('.contentPartner').text(partner);
        })
        .trigger( "change" );
        

        $('#certification').change(function(){
            var cert = "";
            $( "#certification option:selected" ).each(function() {
            cert += $( this ).attr('data-name') + " ";
            });
            $('.certType').text(cert);
        })
        .trigger( "change" );   
       
        });
}(window, jQuery));