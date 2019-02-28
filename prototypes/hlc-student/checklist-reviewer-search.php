<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Evaluate Checklists';
$patterns['focus']['title'] = 'Evaluate Checklists';

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
                                <h2>Search by Student</h2>
                                <div class="form-group">
                                    <select class="form-control" id="people" data-placeholder="Select a Student" multiple>
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
                                <h2>Search by Course</h2>
                                <div class="form-group">
                                    <select class="form-control" id="course" data-placeholder="Select a Course">
                                        <option></option>
                                        <?php $i = 1; while ( $i <= 100) { ?>
                                        <option data-checklist="Fire Safety" value="Course <?= $i ?>">Course <?= $i ?></option>
                                        <?php $i++; } ?>
                                    </select>
                                </div>
                            </section>
                        </div>
                    </div>
                    <section class="section" id="js-checklist-blank">
                        <h2>Checklists</h2>
                        <div class="slat">
                            <div class="slat-message">
                                <h3>Select a student or course using the controls above.</h3>
                            </div>
                        </div>
                    </section>
                    <section class="section" id="js-checklists-checklist" style="display:none">
                        <h2>Checklists</h2>
                        <?php

                            $slat = array(
                                'title' => '<a href="checklist-reviewer.php">CPR Checklist</a>',
                                'meta' => array(
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Not Yet Started',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => 'Oct 30, 2014',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-split',
                                    'options' => array(
                                        array(
                                            'content' => 'Evaluate',
                                            'link' => 'checklist-reviewer.php'
                                        ),
                                         array(
                                            'content' => 'Print',
                                            'link' => '#',
                                        ),
                                    )
                                ),
                            );
                            echo createSlat($slat);

                            $slat['title'] = '<a href="checklist-reviewer.php">CPR 2 Checklist</a>';
                            echo createSlat($slat);

                        ?>
                    </section>

                    <section class="section" id="js-checklists-people" style="display:none">
                        <h2>Checklists</h2>
                        <?php

                            $slat = array(
                                'title' => '<a href="checklist-reviewer.php">Student 1</a>',
                                'meta' => array(
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Not Yet Started',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => 'Oct 30, 2014',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-split',
                                    'options' => array(
                                        array(
                                            'content' => 'Evaluate',
                                            'link' => 'checklist-reviewer.php'
                                        ),
                                         array(
                                            'content' => 'Print',
                                            'link' => '#',
                                        ),
                                    )
                                ),
                            );
                            echo createSlat($slat);

                            $slat['title'] = '<a href="checklist-reviewer.php">Student 2</a>';
                            echo createSlat($slat);

                        ?>
                    </section>

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

        function formatPeople(option) {
            var userid = $(option.element).data('userid');
            var dept = $(option.element).data('dept');
            if (!option.id) return option.text; // optgroup
            return '<div class="slat slat-select2"><div class="title">' + option.text + ' <span>[' + userid + ']</span></div><ul class="meta"><li><span class="meta-label">Department:</span><span class="meta-value">' + dept + '</span></li></ul></div>';
        }
        function formatCourse(option) {
            var checklist = $(option.element).data('checklist');
            if (!option.id) return option.text; // optgroup
            return '<div class="slat slat-select2"><div class="title">' + option.text + '</div><ul class="meta"><li><span class="meta-label">Checklist:</span><span class="meta-value">' + checklist + '</span></li></ul></div>';
        }
        $('#people').select2({
            minimumInputLength: 1,
            formatResult: formatPeople,
            escapeMarkup: function(m) { return m; },
            dropdownCssClass: 'select2-slats'
        });
        $('#course').select2({
            minimumInputLength: 1,
            formatResult: formatCourse,
            escapeMarkup: function(m) { return m; },
            dropdownCssClass: 'select2-slats'
        });

        function showChecklists() {
            if ( $('#people').val() !== "" || $('#course').val() !== "" ) {
                $('#js-checklist-list').show();
                $('#js-checklist-blank').hide();
            }
        }

        $('#people').on('change',function(){
            $('#course').select2("val", "");
            if ( $('#people').val() !== "" ) {
                $('#js-checklists-checklist').show().find('h2').html('Checklists <small>for ' + $('#people').val() + '</small>');
                $('#js-checklist-blank, #js-checklists-people').hide();
            }
        });

        $('#course').on('change',function(){
            $('#people').select2("val", "");
            if ( $('#course').val() !== "" ) {
                $('#js-checklists-people').show().find('h2').html('Checklists <small>for Students in ' + $('#course').val() + '</small>');
                $('#js-checklist-blank, #js-checklists-checklist').hide();
            }
        });
    });
</script>
<?= createSiteEnd(); ?>