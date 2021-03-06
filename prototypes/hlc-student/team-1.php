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
$patterns['focus']['type'] = 'search';
$patterns['focus']['title'] = 'My Team';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

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
                            <h3>Team Members</h3>
                            <div class="form-group">
                                <select class="form-control" id="people" data-placeholder="Select a Person">
                                    <option></option>
                                    <?php
                                        for ( $i = 1; $i <= 30; $i++ ) {
                                            echo '<option value="' . $i . '">Team Member ' . $i . '</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="tag-group">
                                <a href="#" class="tag">Jack Demonstration<i class="fa fa-times"></i></a>
                            </div>
                        </section>
                        <section class="section section-refinement-group">
                            <h3>Assessments</h3>
                            <div class="form-group">
                                <strong>Type:</strong>
                                <ul class="list-unstyled">
                                    <li>
                                        <label class="checkbox"><input type="checkbox"> Self</label>
                                    </li>
                                    <li>
                                        <label class="checkbox"><input type="checkbox" checked> Employee</label>
                                    </li>
                                    <li>
                                        <label class="checkbox"><input type="checkbox"> Peer</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <strong>State:</strong>
                                <ul class="list-unstyled">
                                    <li>
                                        <label class="checkbox"><input type="checkbox"> Assigned</label>
                                    </li>
                                    <li>
                                        <label class="checkbox"><input type="checkbox"> Evaluate</label>
                                    </li>
                                    <li>
                                        <label class="checkbox"><input type="checkbox"> Review</label>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <section class="section section-refinement-group">
                            <h3>Learning</h3>
                            <div class="form-group">
                                <strong>Status:</strong>
                                <ul class="list-unstyled">
                                    <li>
                                        <label class="checkbox"><input type="checkbox"> Past Due</label>
                                    </li>
                                    <li>
                                        <label class="checkbox"><input type="checkbox"> Not Yet Started</label>
                                    </li>
                                    <li>
                                        <label class="checkbox"><input type="checkbox"> In Progress</label>
                                    </li>
                                    <li>
                                        <label class="checkbox"><input type="checkbox"> Completed</label>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </section>
                </div>
                <div class="col-md-9">
                    <section class="section section-results" data-equalize="layout-columns">
                        <section class="section section-results-header">
                            <div class="row">
                                <div class="col-md-9">
                                    <h2>Results <small>Showing 1-20 of 25</small></h2>
                                    <div class="section section-refinement-applied">
                                        <h3>Refinements</h3>
                                        <div class="tag-group">
                                            <a href="#" class="tag">Jack Demonstration<i class="fa fa-times"></i></a>
                                            <a href="#" class="tag">Assessments: Employee<i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 hidden-xs hidden-sm">
                                    <div class="section-results-header-sort">
                                        <div class="dropdown">
                                            <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Best Match <i class="fa fa-sort"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="active"><a href="#">Best Match</a></li>
                                                <li><a href="#">Date Updated</a></li>
                                                <li><a href="#">Name</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section">

                            <?php

                                $slat = array(
                                    'title' => '<a href="#">2014 Performace Review: Jack Demonstration</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Assessment',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Completed',
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
                                                'content' => '???',
                                                'link' => '#',
                                            ),
                                            array(
                                                'content' => '???',
                                                'link' => '#',
                                            ),
                                        )
                                    )
                                );
                                echo createSlat($slat);

                                $slat = array(
                                    'title' => '<a href="#">2015 Performace Review: Jack Demonstration</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Assessment',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'In Progress',
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
                                                'content' => '???',
                                                'link' => '#',
                                            ),
                                            array(
                                                'content' => '???',
                                                'link' => '#',
                                            ),
                                        )
                                    )
                                );
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
                        <h3>Team Members</h3>
                        <div class="form-group">
                            <select class="form-control" id="people" data-placeholder="Select a Person">
                                <option></option>
                                <?php
                                    for ( $i = 1; $i <= 30; $i++ ) {
                                        echo '<option value="' . $i . '">Team Member ' . $i . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="tag-group">
                            <a href="#" class="tag">Jack Demonstration<i class="fa fa-times"></i></a>
                        </div>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Assessments</h3>
                        <div class="form-group">
                            <strong>Type:</strong>
                            <ul class="list-unstyled">
                                <li>
                                    <label class="checkbox"><input type="checkbox"> Self</label>
                                </li>
                                <li>
                                    <label class="checkbox"><input type="checkbox" checked> Employee</label>
                                </li>
                                <li>
                                    <label class="checkbox"><input type="checkbox"> Peer</label>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <strong>State:</strong>
                            <ul class="list-unstyled">
                                <li>
                                    <label class="checkbox"><input type="checkbox"> Assigned</label>
                                </li>
                                <li>
                                    <label class="checkbox"><input type="checkbox"> Evaluate</label>
                                </li>
                                <li>
                                    <label class="checkbox"><input type="checkbox"> Review</label>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Learning</h3>
                        <div class="form-group">
                            <strong>Status:</strong>
                            <ul class="list-unstyled">
                                <li>
                                    <label class="checkbox"><input type="checkbox"> Past Due</label>
                                </li>
                                <li>
                                    <label class="checkbox"><input type="checkbox"> Not Yet Started</label>
                                </li>
                                <li>
                                    <label class="checkbox"><input type="checkbox"> In Progress</label>
                                </li>
                                <li>
                                    <label class="checkbox"><input type="checkbox"> Completed</label>
                                </li>
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
<script src="/scripts/healthstream.catalog.js"></script>
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

    });
</script>
<?= createSiteEnd(); ?>