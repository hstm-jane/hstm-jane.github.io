<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Select2 Slat Examples';
$patterns['focus']['title'] = 'Select2 Slat Examples';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-main section-box" data-equalize="layout-columns">
                    <div class="row">
                        <div class="col-sm-6">
                            <section class="section">
                                <h3>Select2 Slat</h3>
                                <div class="form-group">
                                    <select class="form-control" id="slat-basic" data-placeholder="Type 1 to see slats">
                                        <option></option>
                                        <?php $i = 1; while ( $i <= 100) { ?>
                                        <option data-dept="Nursing" data-userid="user<?= $i ?>" value="Student <?= $i ?>">Student <?= $i ?></option>
                                        <?php $i++; } ?>
                                    </select>
                                </div>
                            </section>
                        </div>
                        <div class="col-sm-6">
                            <section class="section">
                                <h3>Select2 Slat w/ Truncation</h3>
                                <div class="form-group">
                                    <select class="form-control" id="slat-truncate" data-placeholder="Type 1 to see slats">
                                        <option></option>
                                        <?php $i = 1; while ( $i <= 100) { ?>
                                        <option data-dept="Nursing" data-userid="user<?= $i ?>" value="Student <?= $i ?>">Student <?= $i ?></option>
                                        <?php $i++; } ?>
                                    </select>
                                </div>
                            </section>
                        </div>
                        <div class="col-sm-6">
                            <section class="section">
                                <h3>Select2 Slat w/ Success Icon</h3>
                                <div class="form-group">
                                    <select class="form-control" id="slat-icon-success" data-placeholder="Type 1 to see slats">
                                        <option></option>
                                        <?php $i = 1; while ( $i <= 100) { ?>
                                        <option data-dept="Nursing" data-userid="user<?= $i ?>" value="Student <?= $i ?>">Student <?= $i ?></option>
                                        <?php $i++; } ?>
                                    </select>
                                </div>
                            </section>
                        </div>
                        <div class="col-sm-6">
                            <section class="section">
                                <h3>Select2 Slat w/ Danger Icon</h3>
                                <div class="form-group">
                                    <select class="form-control" id="slat-icon-danger" data-placeholder="Type 1 to see slats">
                                        <option></option>
                                        <?php $i = 1; while ( $i <= 100) { ?>
                                        <option data-dept="Nursing" data-userid="user<?= $i ?>" value="Student <?= $i ?>">Student <?= $i ?></option>
                                        <?php $i++; } ?>
                                    </select>
                                </div>
                            </section>
                        </div>
                        <div class="col-sm-6">
                            <section class="section">
                                <h3>Select2 Slat w/ Default Button</h3>
                                <div class="form-group">
                                    <select class="form-control" id="slat-button-default" data-placeholder="Type 1 to see slats">
                                        <option></option>
                                        <?php $i = 1; while ( $i <= 100) { ?>
                                        <option data-dept="Nursing" data-userid="user<?= $i ?>" value="Student <?= $i ?>">Student <?= $i ?></option>
                                        <?php $i++; } ?>
                                    </select>
                                </div>
                            </section>
                        </div>
                        <div class="col-sm-6">
                            <section class="section">
                                <h3>Select2 Slat w/ Success Button</h3>
                                <div class="form-group">
                                    <select class="form-control" id="slat-button-success" data-placeholder="Type 1 to see slats">
                                        <option></option>
                                        <?php $i = 1; while ( $i <= 100) { ?>
                                        <option data-dept="Nursing" data-userid="user<?= $i ?>" value="Student <?= $i ?>">Student <?= $i ?></option>
                                        <?php $i++; } ?>
                                    </select>
                                </div>
                            </section>
                        </div>
                        <div class="col-sm-6">
                            <section class="section">
                                <h3>Select2 Slat w/ Danger Button</h3>
                                <div class="form-group">
                                    <select class="form-control" id="slat-button-danger" data-placeholder="Type 1 to see slats">
                                        <option></option>
                                        <?php $i = 1; while ( $i <= 100) { ?>
                                        <option data-dept="Nursing" data-userid="user<?= $i ?>" value="Student <?= $i ?>">Student <?= $i ?></option>
                                        <?php $i++; } ?>
                                    </select>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div style="height:400px;"></div>

                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php include_sidebar() ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){

        function formatBasic(option) {
            var userid = $(option.element).data('userid');
            var dept = $(option.element).data('dept');
            if (!option.id) return option.text; // optgroup
            return '<div class="slat slat-select2"><div class="title">' + option.text + ' <span>[' + userid + ']</span></div><ul class="meta"><li><span class="meta-label">Department:</span><span class="meta-value">' + dept + '</span></li></ul></div>';
        }
        function formatTruncate(option) {
            var userid = $(option.element).data('userid');
            var dept = $(option.element).data('dept');
            if (!option.id) return option.text; // optgroup
            return '<div class="slat slat-select2 slat-select2-nowrap"><div class="title">' + option.text + ' <span>[' + userid + ']</span></div><ul class="meta"><li><span class="meta-label">Department:</span><span class="meta-value">A really long string that is forced to truncate in all browsers</span></li><li><span class="meta-label">Department:</span><span class="meta-value">' + dept + '</span></li></ul></div>';
        }
        function formatIconSuccess(option) {
            var userid = $(option.element).data('userid');
            var dept = $(option.element).data('dept');
            if (!option.id) return option.text; // optgroup
            return '<div class="slat slat-select2 slat-select2-action"><div class="action"><i class="icon success fa fa-check"></i></div><div class="title">' + option.text + ' <span>[' + userid + ']</span></div><ul class="meta"><li><span class="meta-label">Department:</span><span class="meta-value">' + dept + '</span></li></ul></div>';
        }
        function formatIconDanger(option) {
            var userid = $(option.element).data('userid');
            var dept = $(option.element).data('dept');
            if (!option.id) return option.text; // optgroup
            return '<div class="slat slat-select2 slat-select2-action"><div class="action"><i class="icon danger fa fa-times"></i></div><div class="title">' + option.text + ' <span>[' + userid + ']</span></div><ul class="meta"><li><span class="meta-label">Department:</span><span class="meta-value">' + dept + '</span></li></ul></div>';
        }
        function formatButtonDefault(option) {
            var userid = $(option.element).data('userid');
            var dept = $(option.element).data('dept');
            if (!option.id) return option.text; // optgroup
            return '<div class="slat slat-select2 slat-select2-action"><div class="action"><span class="btn btn-default"><i class="fa fa-plus"></i></span></div><div class="title">' + option.text + ' <span>[' + userid + ']</span></div><ul class="meta"><li><span class="meta-label">Department:</span><span class="meta-value">' + dept + '</span></li></ul></div>';
        }
        function formatButtonSuccess(option) {
            var userid = $(option.element).data('userid');
            var dept = $(option.element).data('dept');
            if (!option.id) return option.text; // optgroup
            return '<div class="slat slat-select2 slat-select2-action"><div class="action"><span class="btn btn-success"><i class="fa fa-check"></i></span></div><div class="title">' + option.text + ' <span>[' + userid + ']</span></div><ul class="meta"><li><span class="meta-label">Department:</span><span class="meta-value">' + dept + '</span></li></ul></div>';
        }
        function formatButtonDanger(option) {
            var userid = $(option.element).data('userid');
            var dept = $(option.element).data('dept');
            if (!option.id) return option.text; // optgroup
            return '<div class="slat slat-select2 slat-select2-action"><div class="action"><span class="btn btn-danger"><i class="fa fa-times"></i></span></div><div class="title">' + option.text + ' <span>[' + userid + ']</span></div><ul class="meta"><li><span class="meta-label">Department:</span><span class="meta-value">' + dept + '</span></li></ul></div>';
        }

        $('#slat-basic').select2({
            minimumInputLength: 1,
            formatResult: formatBasic,
            escapeMarkup: function(m) { return m; },
            dropdownCssClass: 'select2-slats'
        });
        $('#slat-truncate').select2({
            minimumInputLength: 1,
            formatResult: formatTruncate,
            escapeMarkup: function(m) { return m; },
            dropdownCssClass: 'select2-slats'
        });
        $('#slat-icon-success').select2({
            minimumInputLength: 1,
            formatResult: formatIconSuccess,
            escapeMarkup: function(m) { return m; },
            dropdownCssClass: 'select2-slats'
        });
        $('#slat-icon-danger').select2({
            minimumInputLength: 1,
            formatResult: formatIconDanger,
            escapeMarkup: function(m) { return m; },
            dropdownCssClass: 'select2-slats'
        });
        $('#slat-button-default').select2({
            minimumInputLength: 1,
            formatResult: formatButtonDefault,
            escapeMarkup: function(m) { return m; },
            dropdownCssClass: 'select2-slats'
        });
        $('#slat-button-success').select2({
            minimumInputLength: 1,
            formatResult: formatButtonSuccess,
            escapeMarkup: function(m) { return m; },
            dropdownCssClass: 'select2-slats'
        });
        $('#slat-button-danger').select2({
            minimumInputLength: 1,
            formatResult: formatButtonDanger,
            escapeMarkup: function(m) { return m; },
            dropdownCssClass: 'select2-slats'
        });

    });
</script>
<?= createSiteEnd(); ?>