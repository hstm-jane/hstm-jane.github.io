(function (window, $) {
    'use strict';

    window.HealthStream = window.HealthStream || {};
    var healthStream = window.HealthStream;
    window.HealthStream.login = window.HealthStream.login || {};


    healthStream.login.initialize = function(){

        $('.nav-tab').on('click', function(e){
            var target = $(this).attr('href');
            $('.nav-tab, .tab-pane').removeClass('selected');
            $('.has-error').removeClass('has-error');
            $('.alert').removeClass('active');
            $('.help-block').hide();
            $(this).addClass('selected');
            $(target).addClass('selected').scrollTop(0);
            e.preventDefault();
        });
        $('.slat-affiliate').on('click',function(){
            $('.slat-affiliate.selected').removeClass('selected');
            $('.slat-affiliate input[type="radio"]:checked').closest('.slat-affiliate').addClass('selected');
        });
        $(".pw-reminder").on("click", function(e){
            $('.alert').removeClass('active');
            $("#alert-reminder").addClass('active');
            e.preventDefault();
        });
        $(".pw-reset").on("click", function(e){
            $('#tab-password-reset .form-control').val('');
            $('.tab-pane').removeClass('selected');
            $('#tab-password-reset').addClass('selected');
            e.preventDefault();
        });
        $('#button-reset').click(function(e){
            // demoing some faked error handling
            $(".alert").removeClass('active');
            var required = '';
            $(this).closest('form').find('.required').each(function(){
                required += $(this).val();
            });
            if ( required === '' ) {
                $(this).closest('form').addClass('has-error');
            } else {
                $(this).closest('form').removeClass('has-error');
                $('.nav-tab[href="#tab-signin"]').click();
                $("#alert-reset").addClass('active');
            }
            e.preventDefault();
        });
        $('#button-login').click(function(e){
            // demoing some faked error handling
            var required = '';
            $(".alert").removeClass('active');
            $(this).closest('form').find('.required').each(function(){
                required += $(this).val();
                if ( $(this).val() === '' ) {
                    $(this).closest('.form-group').addClass('has-error');
                } else {
                    $(this).closest('.form-group').removeClass('has-error');
                }
            });
            if ( required !== '' ) {
                $("#alert-unauthorized").addClass('active');
            }
            e.preventDefault();
        });
        $('#button-update').click(function(e){
            var required = '';
            $(".alert").removeClass('active');
            $(this).closest('form').find('.required').each(function(){
                required += $(this).val();
                if ( $(this).val() === '' ) {
                    $(this).closest('.form-group').addClass('has-error');
                    e.preventDefault();
                } else {
                    $(this).closest('.form-group').removeClass('has-error');
                }
            });
        });

    };

    $(function(){
        healthStream.login.initialize();
    });


}(window, jQuery));