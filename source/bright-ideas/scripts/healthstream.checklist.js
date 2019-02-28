(function (window, $) {
    'use strict';

    window.HealthStream = window.HealthStream || {};
    var healthStream = window.HealthStream;

    healthStream.checklist = {};

    healthStream.checklist.init = function(){
        var T = this;

        // Toggle buttons and set value
        $('.checklist-actions').on('click','.btn',function(){
            T.setValue($(this));
        });

        // Clear comment value on add/remove
        $('.checklist-item-review .collapse-toggle').click(function(){
            $(this).closest('.checklist-item').find('textarea').val('');
        });

        // Mark All Success
        $('.js-checklist-all-success').click(function(e){
            e.preventDefault();
            healthStream.checklist.markAllSuccess();
        });
    };

    healthStream.checklist.setValue = function($el){
        var $item = $el.closest('.checklist-item'),
            $value = $item.find('input[type="hidden"]');

        if ( !$item.hasClass('checklist-item-locked') ) {
            if ( $el.hasClass('checklist-btn-pass') ) {
                $el.toggleClass('btn-default btn-success selected');
            } else {
                $el.toggleClass('btn-default btn-danger selected');
            }
            $el.siblings('.btn').removeClass('btn-danger btn-success selected').addClass('btn-default');

            if ( $item.find('.checklist-actions .btn.selected').length > 0 ) {
                $item.addClass('checklist-item-selected');
                $value.val($el.text());
            } else {
                // nothing selected, remove values
                healthStream.checklist.removeValue($el);
            }
        }
    };

    healthStream.checklist.removeValue = function($el){
        var $item = $el.closest('.checklist-item'),
            $value = $item.find('input[type="hidden"]');

        $item.removeClass('checklist-item-selected');
        $value.val('');
        if( $item.find('.collapse-group.in').length > 0 ){
            $item.find('.collapse-toggle').trigger('click');
        }
    };

    healthStream.checklist.clearMine = function(){
        $('.checklist-item').each(function(){
            var $el = $(this);
            if ( !$el.hasClass('checklist-item-locked') ) {
                $el.find('input[type="hidden"]').val('');
                $el.find('.btn.selected').trigger('click');
            }
        });
    };

    healthStream.checklist.markAllSuccess = function(){
        $('.checklist-item').each(function(){
            var $el = $(this);
            if ( !$el.hasClass('checklist-item-locked') ) {
                $el.find('.checklist-btn-pass').not('.selected').trigger('click');
            }
        });
    };

    $(window).on('load', function(){
        healthStream.checklist.init();
    });

}(window, jQuery));