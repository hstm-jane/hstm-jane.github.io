<?php function include_site_scripts( $options ) { global $defaults; $options=json_decode(json_encode(array_replace_recursive($defaults,$options)), FALSE); ?>

<!-- Plugins -->
<script src="/scripts/jquery.js"></script>
<script src="/scripts/underscore.js"></script>
<script src="/scripts/moment.js"></script>
<script src="/scripts/clndr.js"></script>
<script src="/scripts/bootstrap.plugins.js"></script>
<script src="/scripts/bootstrap-datepicker.js"></script>
<script src="/scripts/bootstrap-timepicker.js"></script>
<script src="/scripts/bootstrap-datetimepicker.js"></script>
<script src="/scripts/bootstrap-colorselector.js"></script>
<script src="/scripts/full-calendar.js"></script>
<script src="/scripts/date.format.js"></script>
<script src="/scripts/select2.js"></script>

<!-- HealthStream Scripts -->
<script src="/scripts/healthstream.js"></script>
<script src="/scripts/healthstream.focusbar.js"></script>
<script src="/scripts/healthstream.stickybar.js"></script>
<script src="/scripts/healthstream.utilities.autocomplete.js"></script>
<script src="/scripts/healthstream.utilities.equalize.js"></script>
<script src="/scripts/healthstream.utilities.growl.js"></script>
<script src="/scripts/healthstream.utilities.interrupt.js"></script>
<script src="/scripts/healthstream.utilities.limitHeight.js"></script>
<script src="/scripts/healthstream.utilities.toggleText.js"></script>
<script src="/scripts/healthstream.wizard.js"></script>
<script src="/scripts/healthstream.subnav.js"></script>

<!-- Prototype JS Scripts -->
<script src="/scripts/jquery.dataTables.js"></script>
<script src="/scripts/dataTables.bootstrap.js"></script>
<script src="/scripts/dataTables.tableTools.js"></script>
<script src="/scripts/prototype.validation/formValidation.min.js"></script>
<script src="/scripts/prototype.validation/framework/bootstrap.min.js"></script>


<script type='text/javascript'>

function getLocationOptions(options) {
    var $b = $('select[name="building"]'),
        $r = $('select[name="room"]'),
        buildings = '',
        building = $b.attr('data-select'),
        rooms = '',
        room = $r.attr('data-select');

    $.getJSON('/server.php?', {
        action: 'filter',
        building: building,
        room: room
    }, function(data) {

        $.each(data.buildings, function() {
            buildings += '<option value="' + this.id + '"' + ((this.selected) ? ' selected' : '') + '>' + this.name + '</option>';
            if (this.selected) {
                $b.attr('data-select', this.id);
            }
        });
        $.each(data.rooms, function() {
            rooms += '<option value="' + this.id + '"' + ((this.selected) ? ' selected' : '') + '>' + this.name + '</option>';
            if (this.selected) {
                $r.attr('data-select', this.id);
            }
        });
        $b.html(buildings).val($b.attr('data-select')).select2();;
        $r.html(rooms).val($r.attr('data-select')).select2();

        if (options && options.allowEmpty === false) {
            $b.find('option:eq(0)').remove();
            $r.find('option:eq(0)').remove();
        }

        $(document).trigger('locationUpdated');
    });
}

function validate($el) {
    var errors = 0;
    $el.find('.required').each(function() {
        var $t = $(this),
            $p = $t.parents('.form-group');

        if ($t.val() === '') {
            $p.addClass('has-error');
            errors++;
        } else {
            $p.removeClass('has-error');
        }
    });
    if (errors > 0) {
        $el.find('.error:eq(0) .required').focus();
        return false;
    } else {
        // alert('The client side validation passed');
        return true;
    }
}

function getParam(param) {
    param = param.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var pattern = '[\\?&]' + param + '=([^&#]*)',
        regex = new RegExp(pattern),
        results = regex.exec(window.location.href);
    if (results !== null) {
        return results[1];
    }
}

$(function() {
    $('.map-blocker').click(function() {
        $(this).remove();
    });
    $('a[href="#"]').click(function(event) {
        event.preventDefault();
    });

    if (getParam('tab')) {
        $('.nav-collapsing-tabs a[href="#tab-' + getParam('tab') + '"]').click();
    }

    $(document).on('locationUpdated', function() {
        var $building = $('select[name="building'),
            $room = $('select[name="room'),
            $metaBuilding = $('#meta-building'),
            $metaRoom = $('#meta-room');

        if ($building.length > 0 && $building.val()) {
            $metaBuilding
                .find('a')
                .attr('href', '/building-view/' + $building.val() + '/')
                .text($building.find('option:selected').text())
                .end()
                .show();
        } else {
            //$metaBuilding.hide();
        }

        if ($room.length > 0 && $room.val()) {
            $metaRoom
                .find('a')
                .attr('href', '/building-view/' + $building.val() + '/room-view/' + $room.val() + '/')
                .text($room.find('option:selected').text())
                .end()
                .show();
        } else {
            //$metaRoom.hide();
        }

    });

    // Permission Modal
    $('.collapsable-table').on('click', '.collapsable-options button', function() {
        var $button = $(this),
            $row = $button.parents('.collapsable-row'),
            title = $button.attr('data-title'),
            $remove = $('#modal-permissions').find('.btn-danger'),
            isDisabled = $(this).closest('.collapsable-table').hasClass('collapsable-table-disabled');
        $row.addClass('collapsable-row-active');
        $('#modal-permissions .modal-title').html(title);
        $('#modal-permissions .collapsable-table').html($row.find('.collapsable-check').clone());
        $('#modal-permissions').modal('show');
        $('#modal-permissions input[type="checkbox"]').removeAttr('id');
        if (isDisabled) {
            $remove.hide();
        }
    });
    $('#modal-permissions').on('click', 'input[type="checkbox"]', function() {
        var $el = $(this),
            $checkboxes = $el.closest('.modal-body').find('input[type="checkbox"]'),
            $row = $('.collapsable-row-active'),
            index = $checkboxes.index($el);
        $row.find('input[type="checkbox"]').eq(index).click();
    });
    $('#modal-permissions').on('hide.bs.modal', function() {
        $('.per-row-active').removeClass('collapsable-row-active');
    });


    $('#interrupt-modal-example').click(function(e) {
        e.preventDefault();
        HealthStream.utilities.interrupt({
            type: 'warning',
            title: 'You might want to check',
            text: '%3Cul%3E%0A%3Cli%3EThing%20you%20shouldn%27t%20do.%3C%2Fli%3E%0A%3Cli%3EAnother%20thing%20you%20should%20reconsider.%3C%2Fli%3E%0A%3C%2Ful%3E',
            actions: [{
                label: 'Go Back'
            }]
        });
    });
});
</script>
<?php } ?>
