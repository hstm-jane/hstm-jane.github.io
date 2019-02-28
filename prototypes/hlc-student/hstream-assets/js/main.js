// Turn on placeholder.js
$('input, textarea').placeholder();



$(window).load(function(){
    // Starts foundation elements.
    enableHCAHPSCharting();
});

$(document).foundation();

//var apiUrl = $('#welcome-form').attr('data-url');

function buildStateInput(data, statesDictionary) {
    var $stateSelect = $('#state-select');

    var stateArray = new Array();

    $.each(data, function (key, index) {

        if ($.inArray(index.state, stateArray) == -1) {
            stateArray.push(index.state);

            $stateSelect.append('<option value="' + index.state + '">' + statesDictionary[index.state] + '</option>');
        }

    });
}

function hideSurvey() {
    $.post(
            hideSurveyUrl,
            {
                "_token": window.Laravel.csrfToken
            }
    ).done(function( data )
        {
            //console.log( "Data Loaded: " + data );
        }
    );
}

$(document).ready(function() {

    var statesDictionary = {
        AL: "Alabama",
        AK: "Alaska",
        AZ: "Arizona",
        AR: "Arkansas",
        CA: "California",
        CO: "Colorado",
        CT: "Connecticut",
        DE: "Delaware",
        DC: "District of Columbia",
        FL: "Florida",
        GA: "Georgia",
        HI: "Hawaii",
        ID: "Idaho",
        IL: "Illinois",
        IN: "Indiana",
        IA: "Iowa",
        KS: "Kansas",
        KY: "Kentucky",
        LA: "Louisiana",
        ME: "Maine",
        MD: "Maryland",
        MA: "Massachusetts",
        MI: "Michigan",
        MN: "Minnesota",
        MS: "Mississippi",
        MO: "Missouri",
        MT: "Montana",
        NE: "Nebraska",
        NV: "Nevada",
        NH: "New Hampshire",
        NJ: "New Jersey",
        NM: "New Mexico",
        NY: "New York",
        NC: "North Carolina",
        ND: "North Dakota",
        OH: "Ohio",
        OK: "Oklahoma",
        OR: "Oregon",
        PA: "Pennsylvania",
        RI: "Rhode Island",
        SC: "South Carolina",
        SD: "South Dakota",
        TN: "Tennessee",
        TX: "Texas",
        UT: "Utah",
        VT: "Vermont",
        VA: "Virginia",
        VI: "Virgin Islands",
        WA: "Washington",
        WV: "West Virginia",
        WI: "Wisconsin",
        WY: "Wyoming"
    };

    var hospitalData;

    $.ajax({
        dataType: "json",
        url: '//' + location.host + '/hstream-assets/json/' + currentYear + '/' + currentQuarter,
        data: null,
        success: function(data) {
            hospitalData = data;
            buildStateInput(data, statesDictionary);
        }
    });

    //$('form').submit(function (event) {
    //    return false;
    //});

    // SISTERS //
    $(".sister-companies").click(function(){

        $(".sister-sites").animate({
            right: '10%',
            opacity: '1'
        });
        $(".close-sister").show();
        $(".sister-companies").hide();
    });
    $(".close-sister").click(function(){
        $(".sister-sites").animate({
            right: '-40%',
            opacity: '0'
        });
        $(".close-sister").hide();
        $(".sister-companies").show();
    });

    /**
     * When a state is selected, we get all the cities within that state that
     * have HCAHPS data and set the "city" select to those cities.
     */
    $('#state-select').on('change', function() {

        var currentState = $('#state-select').val();

        var $citySelect = $('#city-select');

        $citySelect.prop('disabled', false);

        var cityArray = new Array();

        $.each(hospitalData, function(index, hospital) {

            if ( currentState == hospital.state && $.inArray(hospital.city, cityArray) == -1 )
            {
                cityArray.push( hospital.city );
            }

        });

        cityArray.sort();

        $("#city-select option:nth-child(n+2), #hospital-select option:nth-child(n+2)").remove();

        $.each(cityArray, function(key, index)
        {
            $citySelect.append('<option value="' + index + '">' + index + '</option>');
        });

    });

    /**
     * When a city is selected, we insert all hospitals in that city
     * into the hospital selector.
     */
    $('#city-select').on('change', function() {

        var selectedCity = $('#city-select').val();

        var selectedState = $('#state-select').val();

        // Set hospital jQuery object.
        var $hospitalSelect = $('#hospital-select');

        // We'll use this in the future to store hospital information.
        var hospitalArray = new Array();

        // Enable to the select field.
        $hospitalSelect.prop('disabled', false);

        $(hospitalData).each(function(index, hospital) {

            if (selectedCity === hospital.city && selectedState == hospital.state && $.inArray( hospital.name, hospitalArray) == -1 )
            {
                hospitalArray.push( hospital );
            }

        });

        hospitalArray.sort();

        $("#hospital-select option:nth-child(n+2)").remove();

        $.each(hospitalArray, function(key, index) {
            $hospitalSelect.append('<option data-url="' + index.permalink + '" value="' + index.name + '">' + index.name + '</option>');
        });

    });

    $('.slideshow').slick({
        vertical: true,
        slidesToShow: 3,
        prevArrow: $('.carousel-previous'),
        nextArrow: $('.carousel-next')
    });

    $('#select-historical-span').on('change', function() {
        window.location = $(this).val();
    });




});


if ($('.hover-over-form').length == 1 && ! $('body').hasClass('no-survey') )
{
    $('.hover-over-background').delay(800).fadeIn(400);

    $('.hover-over-form').css('z-index', '1000');

    $('.hover-over-form').delay(800).fadeTo(400, 1);
}



$('.survey-sidebar-button').click(function()
{
    $('.hover-over-form').fadeIn(400);

    $('.hover-over-background').fadeIn(400);

    $('.hover-over-form').css('z-index', '1000');

    $('.hover-over-form').css('opacity', '1');
});



$('.no-thanks, .close-survey').click(function(event)
{
    event.preventDefault();

    $('.hover-over-background, .hover-over-form').fadeOut(400);

    hideSurvey();
});



$('.see-impact-report').click(function(event)
{
    $('.slideshow').get(0).slick.setPosition();

    $('.hover-over-background, .hover-over-form').css('display', 'block');
});

$('.vertical-align').each(function(index) {
    $(this).css("margin-top", ($(this).parent().height() - $(this).height())/2 + 'px' );
});


$('#welcome-form').on('valid.fndtn.abide', function(e) {
    e.preventDefault();

    redirect();

    return false;
});

$('.see-more-form').on('valid.fndtn.abide', function(e) {

    var dataObject =  $('.see-more-form').serialize();

    dataObject += '&website-url=' + window.location;

    $.post(
        apiUrl,
        dataObject
    ).done(function( data )
        {
            //console.log( "Data Loaded: " + data );
        }
    );

    //$('.survey-sidebar-button').css('display', 'none');

    $('.button.submit-survey, .no-thanks').css('display', 'none');

    $('.thank-you-submission').fadeIn(600);

    $('.hover-over-background, .hover-over-form').delay(2000).fadeOut(400);

    hideSurvey();
});




function redirect()
{
    var hospital = $("#hospital-select").val();

    var permalink = $("#hospital-select option:selected").attr('data-url');

    var provider_number = permalink.split("/").pop();

    hospital = hospital.toLowerCase().replace(/ /g, '-');

    var redirectUrl = permalink;

    $('#welcome-form').attr('action', redirectUrl);

    $('.diagnostic-submit-animation').css('display', 'block');

    $('#welcome-form input[type=text], #welcome-form select, #welcome-form input[type=email], input[type=submit]').animate({
        opacity: 0.7,
    });

    $.post(
        apiUrl,
        {
            "create":           "true",
            "first_name":       $('#first_name').val(),
            "last_name":        $('#last_name').val(),
            "phone_number":     $('#phone_number').val(),
            "job_title":        $('#job_title').val(),
            "email":            $("#email").val(),
            "state":            $("#state-select").val(),
            "city":             $("#city-select").val(),
            "newsletter":       $("#newsletter").is(':checked') ? 'true' : 'false',
            "provider_number":  provider_number,
            "hospital":         $("#hospital-select").val(),
            "_token":           $('#welcome-form').find('input[name="_token"]').val()
        }
    ).done(function( data )
        {
            //console.log( "Data Loaded: " + data );

            window.location = redirectUrl;

        }
    );
}


$('.newsletter-signup-link').click(function(event){
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $(".newsletter-signup-header").offset().top - 80
    }, 1400);
});

  var nav = navigator.userAgent;

if(nav.indexOf('MSIE 8.0') > -1)
{
    // on load show only first tab
    $('.content', '.tabs-content').removeClass('active').css('display', 'none');

    $('.content:first-child', '.tabs-content').addClass('active').css('display', 'block');

    // When user clicks on tabs link
    $('.detailed-overview .tabs dd a').on('click', function (event) {
        event.preventDefault();

        var currentPanel = '#' + this.href.split('#')[1];

        var currentElement = $(currentPanel);

        var $domItem = $(this).closest('.accordionContent').find('.tabs-content .content');

        $domItem.removeClass('active').css('display', 'none');

        currentElement.addClass('active').css('display', 'block');
    });

    $('.data-section .tabs dd a').on('click', function (event) {

        event.preventDefault();

        var currentPanel = '#' + this.href.split('#')[1];

        var currentElement = $(currentPanel);

        $(this).css('display', 'block')

        $(this).parents('.tabs').next('.tabs-content').children('.content').removeClass('active').css('display', 'none');

        currentElement.addClass('active').css('display', 'block');
    });

}