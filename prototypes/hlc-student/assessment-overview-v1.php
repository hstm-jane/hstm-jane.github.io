<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Assessment Rater Overview';
$patterns['header'] = array(
    'classes' => array('site-header--assessments'),
    'userName' => 'Davy L. Crane',
    'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/holdenweb/128.jpg">',
    'mainNav' => '
        <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
        <li class="{active=todo}"><a href="/todo-rater.php">To Do</a></li>
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
        <li class="{active=raters}"><a href="/assessment-overview">Raters</a></li>
        <li class="{active=catalog}"><a href="/catalog-unified-main.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'raters',
);
$patterns['focus']['title'] = 'Assessment Rater Overview';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Total Assessments:',
        'value' =>  '45',
    ),
    array(
        'label' => 'Require Attention:',
        'value' =>  '4',
    ),
);

$assessments = array(
    array(
        'class' => ' assessment--attention',
        'title' => 'Competency Appraisal',
        'url' => '/assessment-competency-rater-signoff.php',
        'state' => 'Review <a href="#modal-waiting-on" data-toggle="modal"><i class="fa fa-info-circle"></i></a>',
        'date' => date('M d, Y',strtotime('-30days')),
        'rater' => 'Crane, Davy L.',
        'rater_progress' => '<div class="progress-bar progress-bar--100" style="width:100%;">Submitted</div>',
        'employee' => 'Juniper, Stephanie P.',
        'employee_progress' => '<div class="progress-bar progress-bar--100" style="width:100%;">Submitted</div>',
        'peers_progress' => '<div class="progress-bar progress-bar--100" style="width:100%;">3 of 3</div>',
    ),
    array(
        'class' => ' assessment--stripe assessment--attention',
        'state' => 'Review <a href="#modal-waiting-on" data-toggle="modal"><i class="fa fa-info-circle"></i></a>',
        'date' => date('M d, Y',strtotime('-24days')),
        'url' => '/assessment-performance-rater-signoff.php',
        'title' => 'Performance Appraisal',
        'rater' => 'Crane, Davy L.',
        'rater_progress' => '<div class="progress-bar progress-bar--100" style="width: 100%;">Submitted</div>',
        'employee' => 'Juniper, Stephanie P.',
        'employee_progress' => '<div class="progress-bar progress-bar--100" style="width: 100%;">Submitted</div>',
        'peers_progress' => '<div class="progress-bar progress-bar--100" style="width:100%;">3 of 3</div>',
    ),
    array(
        'class' => ' assessment--attention',
        'state' => 'Evaluation',
        'date' => date('M d, Y',strtotime('-17days')),
        'url' => '/assessment-competency-rater-review.php',
        'title' => 'Competency Appraisal',
        'rater' => 'Crane, Davy L.',
        'rater_progress' => '<div class="progress-bar" style="width:38%;">38%</div>',
        'employee' => 'Juniper, Stephanie P.',
        'employee_progress' => '<div class="progress-bar progress-bar--100" style="width:100%;">Submitted</div>',
        'peers_progress' => '<div class="progress-bar progress-bar--100" style="width:100%;">3 of 3</div>',
    ),
    array(
        'class' => ' assessment--stripe assessment--attention',
        'state' => 'Evaluation',
        'date' => date('M d, Y',strtotime('-10days')),
        'url' => '/assessment-performance-rater-summary.php',
        'title' => 'Performance Appraisal',
        'rater' => 'Crane, Davy L.',
        'rater_progress' => '<div class="progress-bar" style="width:57%;">57%</div>',
        'employee' => 'Juniper, Stephanie P.',
        'employee_progress' => '<div class="progress-bar progress-bar--100" style="width:100%;">Submitted</div>',
        'peers_progress' => '<div class="progress-bar progress-bar--100" style="width:100%;">3 of 3</div>',
    ),
    array(
        'class' => ' assessment--stripe',
        'state' => 'Evaluation',
        'date' => date('M d, Y',strtotime('+10days')),
        'url' => '#',
        'title' => 'Performance Appraisal',
        'rater' => 'Crane, Davy L.',
        'rater_progress' => 'Not Yet Started',
        'employee' => 'Fiedler, Joanne M.',
        'employee_progress' => 'Not Yet Started',
        'peers_progress' => '0 of 3',
    ),
    array(
        'class' => '',
        'state' => 'Evaluation',
        'date' => date('M d, Y',strtotime('+15days')),
        'url' => '#',
        'title' => 'Performance Appraisal',
        'rater' => 'Crane, Davy L.',
        'rater_progress' => 'Not Yet Started',
        'employee' => 'Montoya, Alice G.',
        'employee_progress' => 'Not Yet Started',
        'peers_progress' => '0 of 3',
    ),
    array(
        'class' => ' assessment--stripe',
        'state' => 'Evaluation',
        'date' => date('M d, Y',strtotime('+24days')),
        'url' => '#',
        'title' => 'Performance Appraisal',
        'rater' => 'Crane, Davy L.',
        'rater_progress' => 'Not Yet Started',
        'employee' => 'Park, Jennifer S.',
        'employee_progress' => 'Not Yet Started',
        'peers_progress' => '0 of 3',
    ),
    array(
        'class' => '',
        'state' => 'Evaluation',
        'date' => date('M d, Y',strtotime('+34days')),
        'url' => '#',
        'title' => 'Performance Appraisal',
        'rater' => 'Crane, Davy L.',
        'rater_progress' => 'Not Yet Started',
        'employee' => 'Roley, Phillip A.',
        'employee_progress' => 'Not Yet Started',
        'peers_progress' => '0 of 3',
    ),
    array(
        'class' => ' assessment--stripe',
        'state' => 'Evaluation',
        'date' => date('M d, Y',strtotime('+44days')),
        'url' => '#',
        'title' => 'Performance Appraisal',
        'rater' => 'Crane, Davy L.',
        'rater_progress' => 'Not Yet Started',
        'employee' => 'Rink, Christopher P.',
        'employee_progress' => 'Not Yet Started',
        'peers_progress' => '0 of 3',
    ),
);
?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<style>
    .search-filter-control {
        margin-bottom: 30px;
    }

    .checkable.checkable-checked > .select label {
        /*background-color: #e0e0e0 !important;*/
        /*background-color: #09C !important;*/
        background-color: #aaa !important;
    }
</style>
<div class="layout layout-search">
    <div class="container">
        <section class="section section-main section-box">

            <section class="section">
                <div class="row">
                    <div class="col-sm-9">
                        <h2 style="margin:5px 0 10px">Results <small>Showing 1-45 of 45</small></h2>
                        <div class="tag-group"></div>
                    </div>
                    <div class="col-sm-3 text-right">
                        <div class="dropdown hidden-xs">
                            <a href="#modal-filter" class="btn btn-default" data-toggle="modal">Filter Results</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section" style="margin-top: -30px;">


                <div class="assessment assessment--header">
                    <div class="assessment__summary">
                        <div class="assessment__basics"><a href="#">Assessment <i class="fa fa-sort"></i></a></div>
                        <div class="assessment__employee"><a href="#">Employee <i class="fa fa-sort"></i></a></div>
                        <div class="assessment__state"><a href="#">State <i class="fa fa-sort"></i></a></div>
                        <div class="assessment__due"><a href="#">Due <i class="fa fa-sort-up"></i></a></div>
                        <div class="assessment__progress">Progress</div>
                        <div class="assessment__actions"></div>
                    </div>
                </div>

                <?php foreach ($assessments as $assessment) { ?>
                <div class="assessment<?= $assessment['class'] ?>">
                    <div class="assessment__summary">
                        <div class="assessment__basics">
                            <div class="assessment__title">
                                <a href="<?= $assessment['url'] ?>"><?= $assessment['title'] ?><span> - <?= $assessment['employee'] ?></span></a>
                            </div>
                            <ul class="meta">
                                <li><span class="meta-type">Employee Assessment</span></li>
                                <li class="meta-hide-lg"><span class="meta-label">State:</span><span class="meta-value"><?= $assessment['state'] ?></span></li>
                                <li class="meta-hide-lg"><span class="meta-label">Due:</span><span class="meta-value"><?= $assessment['date'] ?></span></li>
                            </ul>
                        </div>
                        <div class="assessment__employee"><?= $assessment['employee'] ?></div>
                        <div class="assessment__state"><?= $assessment['state'] ?></div>
                        <div class="assessment__due"><?= $assessment['date'] ?></div>
                        <div class="assessment__progress">
                            <ul class="assessment__actors">
                                <li class="assessment__actor">
                                    <div class="assessment__actor__name">
                                        <span>Rater:</span> <?= $assessment['rater'] ?>
                                    </div>
                                    <div class="assessment__actor__progress">
                                        <div class="progress">
                                            <?= $assessment['rater_progress'] ?>
                                        </div>
                                    </div>
                                </li>
                                <li class="assessment__actor">
                                    <div class="assessment__actor__name">
                                        <span>Employee:</span> <?= $assessment['employee'] ?>
                                    </div>
                                    <div class="assessment__actor__progress">
                                        <div class="progress">
                                            <?= $assessment['employee_progress'] ?>
                                        </div>
                                    </div>
                                </li>
                                <li class="assessment__actor">
                                    <div class="assessment__actor__name">
                                        <span>Peers Submitted:</span>
                                    </div>
                                    <div class="assessment__actor__progress">
                                        <div class="progress">
                                            <?= $assessment['peers_progress'] ?>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="assessment__actions">
                            <div class="btn-group">
                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="<?= $assessment['url'] ?>">View Assessment</a></li>
                                    <li><a href="#modal-progress" data-toggle="modal">View Progress</a></li>
                                    <li><a href="/assessment-manage-rater.php" class="js-append-meta">Manage Rater</a></li>
                                    <li><a href="/assessment-manage-peers.php" class="js-append-meta">Manage Peers</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Download PDF</a></li>
                                    <li><a href="#">Revert to Previous State</a></li>
                                    <li><a href="#">Restart</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </section>

            <?php
                $stickybar = array(
                    'sets' => array(
                        array(
                            'position' => 'left',
                            'html' => '
                                <a href="#modal-filter" class="btn btn-default" data-toggle="modal">Filter Results</a>
                            ',
                        ),
                    ),
                );
                echo createStickybar($stickybar);
            ?>

        </section>
    </div><!-- /container -->
</div><!-- /layout -->

<!-- Modal -->
<div id="modal-progress" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">2016 Performance Appraisal</h4>
            </div>
            <div class="modal-body">

                <table class="modal-progress__table">
                    <thead>
                        <tr>
                            <th class="modal-progress__role">Role</th>
                            <th class="modal-progress__name">Name</th>
                            <th class="modal-progress__progress">Progress</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="modal-progress__role">Employee</td>
                            <td class="modal-progress__name">Crane, Davy L.</td>
                            <td class="modal-progress__progress">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 60%;">60%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="modal-progress__role">Rater</td>
                            <td class="modal-progress__name">Juniper, Stephanie P.</td>
                            <td class="modal-progress__progress">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 38%;">38%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="modal-progress__role">Peer</td>
                            <td class="modal-progress__name">Peer 1</td>
                            <td class="modal-progress__progress">
                                <div class="progress">
                                    <div class="progress-bar progress-bar--100" style="width: 100%;">Submitted</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="modal-progress__role">Peer</td>
                            <td class="modal-progress__name">Peer 2</td>
                            <td class="modal-progress__progress">
                                <div class="progress">
                                    Not Yet Started
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="modal-progress__role">Peer</td>
                            <td class="modal-progress__name">Peer 3</td>
                            <td class="modal-progress__progress">
                                <div class="progress">
                                    Not Yet Started
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-filter" class="modal fade" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Filter Results</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Sort By:</label>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control js-sort" data-target="sort-direction-1">
                                    <option selected data-directions="Oldest to Newest|Newest to Oldest">Due Date</option>
                                    <option data-directions="Titles A - Z|Titles Z - A">Assessment Title</option>
                                    <option data-directions="States A - Z|States Z - A">Assessment State</option>
                                    <option data-directions="Names A - Z|Names Z - A">Employee Name</option>
                                    <option data-directions="Most to Least Complete|Least to Most Complete">Employee Progress</option>
                                    <option data-directions="Names A - Z|Names Z - A">Rater Name</option>
                                    <option data-directions="Most to Least Complete|Least to Most Complete">Rater Progress</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control" id="sort-direction-1">
                                    <option selected>Oldest to Newest</option>
                                    <option>Newest to Oldest</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Then By:</label>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control js-sort" data-target="sort-direction-2">
                                    <option data-directions="Oldest to Newest|Newest to Oldest">Due Date</option>
                                    <option data-directions="Titles A - Z|Titles Z - A">Assessment Title</option>
                                    <option data-directions="States A - Z|States Z - A">Assessment State</option>
                                    <option data-directions="Names A - Z|Names Z - A">Employee Name</option>
                                    <option selected data-directions="Most to Least Complete|Least to Most Complete">Employee Progress</option>
                                    <option data-directions="Names A - Z|Names Z - A">Rater Name</option>
                                    <option data-directions="Most to Least Complete|Least to Most Complete">Rater Progress</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control" id="sort-direction-2">
                                    <option selected>Most to Least Complete</option>
                                    <option>Least to Most Complete</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label class="control-label">By Assignment:</label>
                    <select class="form-control">
                        <option selected>All</option>
                        <option>All Assigned</option>
                        <option>Not Assigned</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">By State:</label>
                    <select class="form-control">
                        <option selected>All</option>
                        <option>All-Not Closed</option>
                        <option>Assigned</option>
                        <option>Evaluation</option>
                        <option>Review</option>
                        <option>Approval</option>
                        <option>Closed</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-waiting-on" class="modal fade" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">State Details</h4>
            </div>
            <div class="modal-body">
                Waiting on Employee Stephanie Juniper to Sign Off
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
        $('.js-select2').select2();

        $(document)
            .on('click', '.search-filter-toggle', function(){
                $(this).closest('.search-filter').toggleClass('search-filter-closed');
                $(window).resize();
            })
            .on('change', '.js-select-daterange', function(){
                if ( $(this).val() === 'custom' ) {
                    $('.js-select-daterange-custom').show().find('input:eq(0)').focus();
                } else {
                    $('.js-select-daterange-custom').hide();
                }
            });


        $(window).on('update.hstm.checkable', function(){
            var $toggle = $('.js-checkbox-toggle');
            var label = $toggle.attr('data-label').split('|');

            $toggle.text( label[0] );
            if ( $('.checkable > .select .checkbox').length !== $('.checkable > .select .checkbox:checked').length ) {

            } else {
                $toggle.text( label[1] );
            }
        });

        $('.js-checkable-dependent a').click(function(e){
            var url = $(this).attr('href');
            var checked = $('.checkable > .select .checkbox:checked').length;
            e.preventDefault();

            if ( checked ) {
                window.location.href = url + '?total=' + checked;
            }
        });

        $('.js-append-meta').click(function(e){
            var url = $(this).attr('href');
            var $assessment = $(this).closest('.assessment');
            var meta = {
                title: $assessment.find('.assessment__title').text().replace(/^\s+|\s+$/g,''),
                type: $assessment.find('.assessment__basics .meta-type').text(),
                due: $assessment.find('.assessment__due').text(),
                state: $assessment.find('.assessment__state').text()
            };

            e.preventDefault();

            console.log(meta);

            window.location.href = url + '?' + $.param( meta );
        });

        $('.js-checkbox-toggle').on('click', function(e){
            e.preventDefault();
            if ( $('.checkable > .select .checkbox').length !== $('.checkable > .select .checkbox:checked').length ) {
                $('.checkable > .select .checkbox:not(:checked)').click();
            } else {
                $('.checkable > .select .checkbox').click();
            }
        });

        $('.js-sort').on('change',function(){
            var $target = $('#' + $(this).attr('data-target'));
            var directions = $(this).find('option:selected').attr('data-directions').split('|');
            $target.find('option:eq(0)').text(directions[0]);
            $target.find('option:eq(1)').text(directions[1]);
        });
    });
</script>
<?= createSiteEnd(); ?>