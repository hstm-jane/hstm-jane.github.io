
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
        var storageName = $(this).data("section");
        e.preventDefault();
        $btn.toggleClass('btn-success btn-default');
        if($btn.hasClass('btn-success')){
            $btn.html('Selected<i class="fa fa-check visible-xs"></i>');
            localStorage.setItem(storageName, "Shown");
        } else {
            $btn.html('Select<i class="fa fa-plus visible-xs"></i>');
            localStorage.setItem(storageName, "Hidden");
        }
        $("." + $(this).data('section') + "-container").slideToggle( "slow", function() {
        });
    });



    $('.nav-focus li > a').on('shown.bs.tab', function (e) {
        $(window).resize();
    });

});

// Showing and hiding and storing settings locally
$( ".hide-section" ).click(function() {
    event.preventDefault();
    $("." + $(this).data('section') + "-container").slideToggle( "slow", function() {
    });
    $(".btn-success." + $(this).data('section')).toggleClass('btn-success btn-default').html('Select<i class="fa fa-plus visible-xs"></i>');
    var storageName = $(this).data("section");
    localStorage.setItem(storageName, "Hidden");
    //document.getElementById("result").innerHTML = (storageName + " = " + localStorage.getItem(storageName));

});

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
        $( ".btn-success." + (key)).toggleClass('btn-success btn-default').html('Select<i class="fa fa-plus visible-xs"></i>');
    }
};
});

