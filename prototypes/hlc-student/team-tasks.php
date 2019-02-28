<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My Team';
$patterns['header'] = array(
    'mainNav' => '
        <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
        <li class="{active=todo}"><a href="/">To Do</a></li>
        <li class="{active=completed}"><a href="/completed.php">Completed</a></li>
        <li class="{active=profile} dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="/advanced-practice.php">Advanced Practice</a></li>
                <li><a href="/certifications.php">Certifications</a></li>
                <li><a href="/documents.php">Documents</a></li>
                <li><a href="/education.php">Education</a></li>
                <li><a href="/goals.php">Goals</a></li>
                <li><a href="/job-descriptions.php">Job Descriptions</a></li>
                <li><a href="/disciplines-licenses.php">Licenses</a></li>
                <li><a href="/notes.php">Notes</a></li>
                <li><a href="/personal-information.php">Personal Information</a></li>
            </ul>
        </li>
        <li class="{active=team} dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Team <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="/team-people.php">People</a></li>
                <li><a href="/team-tasks.php">Tasks</a></li>
            </ul>
        </li>
        <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'team',
);
$patterns['focus']['title'] = 'My Team: Tasks';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Team Members:',
        'value' => '5',
    ),
    array(
        'label' => 'Requiring Attention:',
        'value' => '1',
    ),
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<style>
    label.checkbox {
        font-weight: 400;
    }
    .section-refinement-group.disabled {
        display: none;
    }
</style>
<div class="layout  layout-search">
    <div class="container">

        <section class="section section-main section-box">
            <div class="row">

                <div class="col-md-3 hidden-xs hidden-sm">
                    <section class="section section-refinement-options" data-equalize="layout-columns">
                        <header>
                            <h2>Refine</h2>
                        </header>
                        <section class="section section-refinement-group">
                            <h3>Date Range</h3>
                            <div class="form-group">
                                <select class="form-control" id="select-daterange">
                                    <optgroup label="Presets">
                                        <option>Since January 1</option>
                                        <option>Last 6 Months</option>
                                        <option selected="">Last 12 Months</option>
                                        <option>Last 24 Months</option>
                                        <option>Previous Calendar Year</option>
                                    </optgroup>
                                    <optgroup label="Custom">
                                        <option value="custom">Custom Range</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group" id="custom-daterange" style="display:none">
                                <label>Start Date</label>
                                <div class="input-group date">
                                    <input type="text" class="form-control" value="<?php echo date('m/d/Y');?>">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                                <label style="margin-top: 10px;">End Date</label>
                                <div class="input-group date">
                                    <input type="text" class="form-control" value="<?php echo date('m/d/Y',strtotime("+365 days")); ?>">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                        </section>
                        <section class="section section-refinement-group">
                            <h3>Team Members</h3>
                            <div class="form-group">
                                <select class="form-control" id="people" placeholder="All" multiple>
                                    <option></option>
                                    <option value="Jill Smith">Jill Smith</option>
                                    <option value="Jack White">Jack White</option>
                                    <option value="Joe Danford">Joe Danford</option>
                                    <option value="Pat Morris">Pat Morris</option>
                                    <option value="Sam Jones">Sam Jones</option>
                                </select>
                            </div>
                        </section>
                        <section class="section section-refinement-group">
                            <h3>Tasks</h3>
                            <div class="form-group">
                                <ul class="list-unstyled">
                                    <li><label class="checkbox"><input type="checkbox"> All</label></li>
                                    <li><label class="checkbox"><input type="checkbox"> Requires Attention</label></li>
                                    <li><label class="checkbox"><input type="checkbox"> Assignments</label></li>
                                    <li><label class="checkbox"><input type="checkbox"> Live Classes</label></li>
                                    <li><label class="checkbox"><input type="checkbox"> Virtual Classes</label></li>
                                    <li><label class="checkbox"><input type="checkbox"> Electives</label></li>
                                    <li><label class="checkbox"><input type="checkbox"> Profile Tasks</label></li>
                                    <li><label class="checkbox"><input type="checkbox" checked> Assessments</label></li>
                                </ul>
                            </div>
                        </section>
                        <section class="section section-refinement-group">
                            <h3 data-toggle="collapse" data-target="#options-assessment">Assessments<i class="fa fa-fw fa-angle-down"></i></h3>
                            <div class="collapse in" id="options-assessment">
                                <div class="form-group">
                                    <strong>Type:</strong>
                                    <ul class="list-unstyled">
                                        <li><label class="checkbox"><input type="checkbox"> Self</label></li>
                                        <li><label class="checkbox"><input type="checkbox" checked> Employee</label></li>
                                        <li><label class="checkbox"><input type="checkbox"> Peer</label></li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <strong>Status:</strong>
                                    <ul class="list-unstyled">
                                        <li><label class="checkbox"><input type="checkbox"> Assigned</label></li>
                                        <li><label class="checkbox"><input type="checkbox"> Evaluate</label></li>
                                        <li><label class="checkbox"><input type="checkbox"> Review</label></li>
                                        <li><label class="checkbox"><input type="checkbox"> Completed</label></li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        <section class="section section-refinement-group disabled">
                            <h3 data-toggle="collapse" data-target="#options-learning">Learning<i class="fa fa-fw fa-angle-down"></i></h3>
                            <div class="collapse in" id="options-learning">
                                <div class="form-group">
                                    <strong>Status:</strong>
                                    <ul class="list-unstyled">
                                        <li><label class="checkbox"><input type="checkbox"> Assigned</label></li>
                                        <li><label class="checkbox"><input type="checkbox"> Evaluate</label></li>
                                        <li><label class="checkbox"><input type="checkbox"> Review</label></li>
                                        <li><label class="checkbox"><input type="checkbox"> Completed</label></li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </section>
                </div>
                <div class="col-md-9">
                    <section class="section section-results" data-equalize="layout-columns">
                        <section class="section section-results-header">
                            <h2>Results <small>Showing 1-20 of 25</small></h2>
                            <div class="section section-refinement-applied">
                                <h3>Refinements</h3>
                                <div class="tag-group">
                                    <a href="#" class="tag">Dates: Last 12 Months<i class="fa fa-times"></i></a>
                                    <a href="#" class="tag">Assessments: Employee<i class="fa fa-times"></i></a>
                                </div>
                            </div>
                        </section>


                        <section class="section">

                            <?php

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-attention','slat-callout')),
                                    ),
                                    'title' => '<a href="#">2014 Performace Review: Jill Smith</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Employee Assessment',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Review',
                                        ),
                                        array(
                                            'label' => 'Rater:',
                                            'value' => 'Juniper, Stephanie H.',
                                        ),
                                        array(
                                            'label' => 'Due: ',
                                            'value' => 'Apr 3, 2014',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-split',
                                        'options' => array(
                                            array(
                                                'content' => 'Resume',
                                                'link' => '#'
                                            ),
                                            array(
                                                'content' => 'Print',
                                                'link' => '#',
                                            ),
                                            array(
                                                'content' => 'Select Alternate Rater',
                                                'link' => '#',
                                            ),
                                            array(
                                                'content' => 'Select Peers',
                                                'link' => '#',
                                            ),
                                            array(
                                                'content' => 'Revert',
                                                'link' => '#',
                                            ),
                                            array(
                                                'content' => 'Revert',
                                                'link' => '#',
                                            ),
                                            array(
                                                'content' => 'Delete',
                                                'link' => '#',
                                            ),
                                        )
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout','slat-spaced')),
                                    ),
                                    'title' => '<a href="#">2014 Performace Review - Danford, Joe</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Employee Assessment',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Completed',
                                        ),
                                        array(
                                            'label' => 'Rater:',
                                            'value' => 'Juniper, Stephanie H.',
                                        ),
                                        array(
                                            'label' => 'Due: ',
                                            'value' => 'Apr 3, 2014',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-split',
                                        'options' => array(
                                            array(
                                                'content' => 'Print',
                                                'link' => '#'
                                            ),
                                            array(
                                                'content' => 'Revert',
                                                'link' => '#',
                                            )
                                        )
                                    )
                                );
                                echo createSlat($slat);

                                $slat['title'] = '<a href="#">2014 Performace Review - Jones, Sam</a>';
                                echo createSlat($slat);

                                $slat['title'] = '<a href="#">2014 Performace Review - Morris, Pat</a>';
                                echo createSlat($slat);

                                $slat['title'] = '<a href="#">2014 Performace Review - White, Jack</a>';
                                echo createSlat($slat);

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-spaced','slat-callout')),
                                    ),
                                    'title' => '<a href="#">2015 Performace Review - Smith, Jill</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Employee Assessment',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'In Progress',
                                        ),
                                        array(
                                            'label' => 'Rater:',
                                            'value' => 'Juniper, Stephanie H.',
                                        ),
                                        array(
                                            'label' => 'Due: ',
                                            'value' => 'May 2, 2015',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-split',
                                        'options' => array(
                                            array(
                                                'content' => 'Resume',
                                                'link' => '#'
                                            ),
                                            array(
                                                'content' => 'Print',
                                                'link' => '#',
                                            ),
                                            array(
                                                'content' => 'Select Alternate Rater',
                                                'link' => '#',
                                            ),
                                            array(
                                                'content' => 'Select Peers',
                                                'link' => '#',
                                            ),
                                            array(
                                                'content' => 'Revert',
                                                'link' => '#',
                                            ),
                                            array(
                                                'content' => 'Revert',
                                                'link' => '#',
                                            ),
                                            array(
                                                'content' => 'Delete',
                                                'link' => '#',
                                            ),
                                        )
                                    )
                                );
                                echo createSlat($slat);

                                $slat['title'] = '<a href="#">2015 Performace Review - Danford, Joe</a>';
                                echo createSlat($slat);

                                $slat['title'] = '<a href="#">2015 Performace Review - Jones, Sam</a>';
                                echo createSlat($slat);

                                $slat['title'] = '<a href="#">2015 Performace Review - Morris, Pat</a>';
                                echo createSlat($slat);

                                $slat['title'] = '<a href="#">2015 Performace Review - White, Jack</a>';
                                echo createSlat($slat);

                            ?>

                        </section>

                        <?php
                            $stickybar = array(
                                'sets' => array(
                                    array(
                                        'position' => 'left',
                                        'classes' => array('visible-xs','visible-sm'),
                                        'html' => '<a href="#modal-refine" class="btn btn-default" data-toggle="modal">Refine Results</a>',
                                    ),
                                    array(
                                        'position' => 'right',
                                        'classes' => array('hidden-xs','hidden-sm'),
                                        'html' => '
                                            <div class="btn-group dropup">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 25 <i class="fa fa-caret-up"></i></button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li class="active"><a href="#">20 per page</a></li>
                                                    <li><a href="#">50 per page</a></li>
                                                    <li><a href="#">100 per page</a></li>
                                                    <li><a href="#">250 per page</a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        ',
                                    ),
                                    array(
                                        'position' => 'right',
                                        'classes' => array('visible-xs','visible-sm'),
                                        'html' => '
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        ',
                                    ),
                                ),
                            );
                            echo createStickybar($stickybar);
                        ?>

                    </section><!-- /section-main -->
                </div><!-- /column -->
            </div><!-- /row -->
        </section>


    </div><!-- /container -->
</div><!-- /layout -->

<!-- Modal -->
<div id="modal-refine" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <section class="section section-refinement-group">
                        <h3>Date Range</h3>
                        <div class="form-group">
                            <select class="form-control" id="select-daterange-modal">
                                <optgroup label="Presets">
                                    <option>Since January 1</option>
                                    <option>Last 6 months</option>
                                    <option selected="">Last 12 months</option>
                                    <option>Last 24 months</option>
                                    <option>Previous Calendar Year</option>
                                </optgroup>
                                <optgroup label="Custom">
                                    <option value="custom">Custom Range</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group" id="custom-daterange-modal" style="display:none">
                            <label>Start Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="<?php echo date('m/d/Y');?>">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <label style="margin-top: 10px;">End Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="<?php echo date('m/d/Y',strtotime("+365 days")); ?>">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Assessments</h3>
                        <div class="form-group">
                            <strong>Type:</strong>
                            <ul class="list-unstyled">
                                <li><label class="checkbox"><input type="checkbox"> Self</label></li>
                                <li><label class="checkbox"><input type="checkbox" checked> Employee</label></li>
                                <li><label class="checkbox"><input type="checkbox"> Peer</label></li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <strong>State:</strong>
                            <ul class="list-unstyled">
                                <li><label class="checkbox"><input type="checkbox"> Assigned</label></li>
                                <li><label class="checkbox"><input type="checkbox"> Evaluate</label></li>
                                <li><label class="checkbox"><input type="checkbox"> Review</label></li>
                                <li><label class="checkbox"><input type="checkbox"> Completed</label></li>
                            </ul>
                        </div>
                    </section>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){

        function formatPeople(option) {
            var userid = $(option.element).data('userid');
            var dept = $(option.element).data('dept');
            if (!option.id) return option.text; // optgroup
            return '<div class="slat slat-select2"><div class="title">' + option.text + ' <span>[userid]</span></div><ul class="meta"><li><span class="meta-label">Department:</span><span class="meta-value">dept</span></li></ul></div>';
        }
        $('#people').select2({
            minimumInputLength: 1,
            formatResult: formatPeople,
            escapeMarkup: function(m) { return m; },
            dropdownCssClass: 'select2-slats'
        });

        $('#select-daterange').on('change',function(){
            if ( $(this).val() === 'custom' ) {
                $('#custom-daterange').show().find('input:eq(0)').focus();
            } else {
                $('#custom-daterange').hide();
            }
        });

        $('#select-daterange-modal').on('change',function(){
            if ( $(this).val() === 'custom' ) {
                $('#custom-daterange-modal').show().find('input:eq(0)').focus();
            } else {
                $('#custom-daterange-modal').hide();
            }
        });

        $('.section-refinement-group h3[data-toggle="collapse"]').click(function(){
            if ( !$(this).siblings('div:eq(0)').hasClass('in') ) {
                $(this).find('i').attr('class','fa fa-fw fa-angle-down');
            } else {
                $(this).find('i').attr('class','fa fa-fw fa-angle-right');
            }
        });

    });
</script>
<?= createSiteEnd(); ?>