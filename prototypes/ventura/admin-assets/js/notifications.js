// TOGGLE STATE
// -----------------------------------

(function(window, document, $, undefined){

  $(function(){

    var messagesbtn = '<li class="messages-toggle">' +
         '<a href="#" data-toggle-state="offsidebar-open">' +
             '<i class="fa fa-bell fa-fw  faa-tada animated"></i> ' +
             ' Messages ' +
             '<span class="badge">5</span>' +
       '</a>' +
     '</li>';
    $('.level1.level1 ul').append(messagesbtn);


    var $body = $('body');

    $('[data-toggle-state]')
      .on('click', function (e) {
        e.stopPropagation();
        var element = $(this),
            classname = element.data('toggleState'),
            target = element.data('target'),
            noPersist = (element.attr('data-no-persist') !== undefined);

        // Specify a target selector to toggle classname
        // use body by default
        var $target = target ? $(target) : $body;

        if(classname) {
          if( $target.hasClass(classname) ) {
            $target.removeClass(classname);
          }
          else {
            $target.addClass(classname);
          }

        }
        $(window).resize();

    });

  });



})(window, document, window.jQuery);
$(function() {

    $( ":checkbox" ).click(function(){
        console.log(this);
      console.log('yo');
    });
    // $(".checkbox label").click(function(){
    //   console.log('yo');
    // });
    // $(".checkbox ").click(function(){
    //   console.log('blah');
    // });
    // $(".c-checkbox span").click(function(){
    //   console.log('boom1');
    // });
});