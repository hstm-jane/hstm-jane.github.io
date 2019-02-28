// Slag Group Control
$(function(){
    $('.slat-group-header-collapse-toggle').click(function(e){
        e.preventDefault();
        $(this).closest('.slat-group').find('.collapse-toggle').click();
    });
    $('.slat-group').on('show.bs.collapse hide.bs.collapse','.collapse-group',function(){
        var $group = $(this).closest('.slat-group'),
            $link = $group.find('.slat-group-header-collapse-toggle'),
            labels = ['Show More','Show Less'];

        console.log($link.html());
        if ( $link.html() == labels[0] ) {
            $link.html(labels[1]);
        } else {
            $link.html(labels[0]);
        }
    });
    $('.slat-toggle .btn').click(function(e){
        var $btn = $(this);
        e.preventDefault();
        $btn.toggleClass('btn-success btn-default');
        if($btn.hasClass('btn-success')){
            $btn.html('Selected<i class="fa fa-check visible-xs"></i>');
        } else {
            $btn.html('Select<i class="fa fa-plus visible-xs"></i>');
        }
    });

    $('.nav-focus li > a').on('shown.bs.tab', function (e) {
        $(window).resize();
    });

});

// Adding author to Publication modal
$( "#wizard-add-author-link" ).click(function() {
    $( "#wizard-author-add" ).slideToggle( "slow", function() {
    });
});

// What happens on click of wizard nav
$('.wizard-nav-link').click(function(e) {
    //var $t = $(this);
    var $t = $(this).clone().children().remove().end();
    e.preventDefault();
    $('.wizard-group').fadeOut(0);
    $('#' + $(this).data('rel')).fadeIn(500);
    $('.wizard-nav-link').removeClass( "active" );
    $('.li').removeClass( "active" );
    $(this).addClass( "active" );
    $('.' + $(this).data('rel')).addClass( "active" );
    $('.' + $(this).data('li')).addClass( "active" );
    $('.nav-focus').find('.nav-mobile span span').text($t.text());
});

// Showing and hiding and storing settings locally
$( ".hide-section" ).click(function() {
    event.preventDefault();
    $("." + $(this).data('section') + "-container").slideToggle( "slow", function() {
    });
    $( "." + $(this).data("section") + "-container-hidden" ).slideToggle( "slow", function() {
    });
    $('.wizard-nav-link.' + $(this).data('section')).addClass( "strikethru" );
    $('.li' + $(this).data('section')).addClass( "strikethru" );

    var storageName = $(this).data("section");
    localStorage.setItem(storageName, "Hidden");
    //document.getElementById("result").innerHTML = (storageName + " = " + localStorage.getItem(storageName));
});

$( ".show-section" ).click(function() {
    event.preventDefault();
    $("." + $(this).data('section') + "-container").slideToggle( "slow", function() {
    });
    $( "." + $(this).data("section") + "-container-hidden" ).slideToggle( "slow", function() {
    });
    $('.wizard-nav-link.' + $(this).data('section')).removeClass( "strikethru" );
    $('.li' + $(this).data('section')).removeClass( "strikethru" );
    var storageName = $(this).data("section");
    localStorage.setItem(storageName, "Shown");
    //document.getElementById("result").innerHTML = (storageName + " = " + localStorage.getItem(storageName));
});

/*
$(document).ready(function(){
    document.getElementById("result").innerHTML =
    "Work Experience = " + localStorage.getItem("work-experience") + " | " +
    "Education = " + localStorage.getItem("education") + " | " +
    "Licenses = " + localStorage.getItem("licenses") + " | " +
});
*/



// Retrieving local storage states and hiding the hidden wizard sections
$(document).ready(function(){
    var i,
        ls = localStorage,
        l = ls.length,
        key;

for (var i = 0; i < l; i++) {
        key = ls.key(i);
        if (localStorage.getItem(key) == "Hidden"){
            $("." + (key) + "-container").slideToggle( 0, function() {
            });
            $( "." + (key) + "-container-hidden" ).slideToggle( 0, function() {
            });
            $( ".wizard-nav-link." + (key) ).addClass( "strikethru" );
        }
    };
});


