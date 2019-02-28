(function (window, $) {
    'use strict';

    window.HealthStream = window.HealthStream || {};
    window.HealthStream.utilities = window.HealthStream.utilities || {};
    var healthStream = window.HealthStream;

    healthStream.utilities.toggleText = function(){
        $('a[data-toggle-text]')
            .click(function(){
                var $t = $(this),
                    text = $t.attr('data-toggle-text').split('|');
                if ( $t.text() !== text[0] ) {
                    $t.html(text[0]+'<i class="fa fa-fw fa-caret-down"></i>');
                } else {
                    $t.html(text[1]+'<i class="fa fa-fw fa-caret-up"></i>');
                }
            })
            .each(function(){
                var $t = $(this),
                    text = $t.attr('data-toggle-text').split('|');
                $t.html(text[0]+'<i class="fa fa-fw fa-caret-down"></i>');
            });
    };

    $(window).on('load', function(){
        healthStream.utilities.toggleText();
    });


}(window, jQuery));