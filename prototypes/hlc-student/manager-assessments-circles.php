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
        <li class="{active=team}"><a href="/manager-assessments-circles.php">Team</a></li>
        <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'team',
);
$patterns['focus']['title'] = 'My Team';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Total Tasks:',
        'value' => '35',
    ),
    array(
        'label' => 'Action Items:',
        'value' => '6',
    ),
);
$patterns['focus']['supporting'] = ' ';

$dateRangeControls = '<div class="form-group">
    <select class="form-control js-select-daterange">
        <option>Since January 1</option>
        <option>Last 6 Months</option>
        <option selected="">Last 12 Months</option>
        <option>Last 24 Months</option>
        <option>Previous Calendar Year</option>
        <option value="custom">Custom Range</option>
    </select>
</div>
<div class="form-group js-select-daterange-custom" style="display:none">
    <div class="form-group">
        <label class="control-label">Start Date</label>
        <div class="input-group date">
            <input type="text" class="form-control" value="09/21/2015">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
            </span>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label">End Date</label>
        <div class="input-group date">
            <input type="text" class="form-control" value="09/20/2016">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
            </span>
        </div>
    </div>
</div>';

$range = (object) [
    "state" => 'open', // static / open / closed
    "header" => 'Date Range',
    "controls" => array( $dateRangeControls )
];

$employees = (object) [
    "state" => 'closed', // static / open / closed
    "header" => 'Employees',
    "controls" => array(
        '<label class="control-label">First Name</label><div class="input-group"><input type="text" class="form-control" placeholder="Search"><span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span></div>',
        '<label class="control-label">Last Name</label><div class="input-group"><input type="text" class="form-control" placeholder="Search"><span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span></div>',
        '<label class="control-label">Department</label><select class="form-control js-select2"><option>Department 1</option><option>Department 2</option><option>Department 3</option></select>'
    )
];

$assessments = (object) [
    "state" => 'open',
    "header" => 'Assessments',
    "controls" => array(
        '<label class="control-label">Name:</label><div class="input-group"><input type="text" class="form-control" placeholder="Search"><span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span></div>',
        '<label class="control-label">Kind:</label><ul class="list-unstyled"><li><label class="radio"><input type="radio" name="kind" checked> All</label></li><li><label class="radio"><input type="radio" name="kind"> All Assigned</label></li><li><label class="radio"><input type="radio" name="kind"> Action Items</label></li><li><label class="radio"><input type="radio" name="kind"> Not Assigned</label></li></ul>',
        '<label class="control-label">Type:</label><ul class="list-unstyled"><li><label class="radio"><input type="radio" name="type"> Self</label></li><li><label class="radio"><input type="radio" name="type" checked=""> Employee</label></li><li><label class="radio"><input type="radio" name="type"> Peer</label></li></ul>',
        '<label class="control-label">Status:</label><ul class="list-unstyled"><li><label class="radio"><input type="radio" name="status"> All</label></li><li><label class="radio"><input type="radio" name="status" checked> All Not Closed</label></li><li><label class="radio"><input type="radio" name="status"> Assigned</label></li><li><label class="radio"><input type="radio" name="status"> Evaluate</label></li><li><label class="radio"><input type="radio" name="status"> Review</label></li><li><label class="radio"><input type="radio" name="status"> Approval</label></li><li><label class="radio"><input type="radio" name="status"> Closed</label></li></ul>'

    )
];



$appliedFiltersDesktop = (object) [
    'visible' => 'desktop',
    'state' => 'static',
    'header' => 'Applied Filters',
    'controls' => array(
        '<div class="tag-group"><a href="#" class="tag">Employee<i class="fa fa-times"></i></a> <a href="#" class="tag">Requires Attention<i class="fa fa-times"></i></a> </div>'
    )
];

$appliedFiltersMobile = (object) [
    'visible' => 'mobile',
    'state' => 'static',
    'controls' => array(
        '<div class="tag-group" id="mobile-show-additional"><a href="#" class="tag">Type: Employee<i class="fa fa-times"></i></a> <a href="#" class="tag">Status: Requires Attention<i class="fa fa-times"></i></a><br> </div>'
    )
];

$sortMobile = (object) [
    'visible' => 'mobile',
    'header' => 'Sort',
    'controls' => array(
        '<select class="form-control js-select2"><option selected>Due Date</option><option>Action Items</option><option>Assessment Title</option><option>Assessment Type</option><option>Assessment Status</option><option>Employee Name</option><option>Employee Progress</option><option>Rater Name</option><option>Rater Progress</option></select>'
    )
];

$employeeList = array(
    'Benson, Carol D.',
    'Brooks, Linda G.',
    'Jones, Robert P.',
    'Casey, Michelle B.',
    'Chamberland, Marie S.',
    'Clements, Larry W.',
    'Franks, Iva R.',
    'Henrich, Anna R.',
    'Jones, Marian R.',
    'Kelley, Robert A.',
    'Kight, Mercedes K.',
    'Lloyd, James B.',
    'Mitchell, Kurt P.',
    'Morrison, Kay S.',
    'Scott, Julie G.',
    'Shaner, Charles L.',
    'Seymour, Mary W.',
    'Sheridan, Pauline A.',
    'Wilson, Jeffery M.',
    'Wolfe, Michelle C.',
);

$employeeProgress = array(
    '15',
    '0',
    '100',
    '15',
    '0',
    '100',
    '15',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
);

$raterProgress = array(
    '15',
    '0',
    '100',
    '0',
    '0',
    '0',
    '25',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
);
$peerProgress = array(
    '0',
    '33',
    '100',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
);

$slatButtonVal = array(
    'Resume',
    'Start',
    'View',
    'Resume',
    'Start',
    'Resume',
    'Resume',
    'Start',
    'Start',
    'Start',
    'Start',
    'Start',
    'Start',
    'Start',
    'Start',
    'Start',
    'Start',
    'Start',
    'Start',
    'Start',
);

$slatButtonOptionsStart = '<li><a href="#">Start</a></li><li><a href="#">Delete</a></li><li><a href="#">View Progress</a></li><li><a href="#">Delete</a></li><li><a href="#">Manage Rater and Peers</a></li><li><a href="#">Print</a></li>';

$slatButtonOptionsResume = '<li><a href="#">Resume</a></li><li><a href="#">Reset</a></li><li><a href="#">View Progress</a></li><li><a href="#">Delete</a></li><li><a href="#">Manage Rater and Peers</a></li><li><a href="#">Print</a></li>';

$slatButtonOptionsView = '<li><a href="#">Print</a></li><li><a href="#">Revert</a></li><li><a href="#">View Progress</a></li>';

function makeFilter($filter){

    // SCREEN SIZE VISIBILITY
    if ( !empty($filter->visible) && $filter->visible === 'mobile' ) {
        $visible = ' search-filter-mobile';
    }
    else if ( !empty($filter->visible) && $filter->visible === 'desktop' ) {
        $visible = ' search-filter-desktop';
    }
    else {
        $visible = '';
    }

    // OPEN OR CLOSED
    if ( !empty($filter->state) && $filter->state === 'closed' ) {
        $closed = ' search-filter-closed';
    } else {
        $closed = '';
    }

    // ABILITY TO TOGGLE
    if ( !empty($filter->state) && ( $filter->state === 'open' || $filter->state === 'closed' ) ) {
        $toggle = ' search-filter-toggle';
        $arrow = '<div class="search-filter-arrow"><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-right"></i></div>';
    } else {
        $toggle = '';
        $arrow = '';
    }

    $html = '';
    $html .= '<div class="search-filter' . $closed . $visible .'">';

    if ( !empty($filter->header) ) {
        $html .= '<div class="search-filter-header' . $toggle . '">';
        $html .= '<div class="search-filter-title">' . $filter->header . '</div>';
        $html .= $arrow;
        $html .= '</div>';
    }

    foreach ($filter->controls as $control) {
        $html .= '<div class="search-filter-control">' . $control . '</div>';
    }

    if ( !empty($filter->footer) ) {
        $html .= '<div class="search-filter-footer">' . $filter->footer . '</div>';
    }
    $html .= '</div>';

    return $html;
}

?>

<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<style>

    .section-main .section-filters {
        border-right: 1px solid #ddd;
        padding: 20px 15px 20px 0;
        margin: 0;
    }

    .section-main .section-results {
        margin: 0;
        padding: 20px 0 20px;
    }

    .search-filter-desktop,
    .search-filter-mobile,
    .search-filter-closed .search-filter-control,
    .search-filter-closed .search-filter-footer {
        display: none;
    }

    .search-filter {
        padding: 15px 0 20px;
        border-bottom: 1px solid #ddd;
    }
    .search-filter.search-filter-closed {
        padding: 15px 0;
    }

    .search-filter:last-of-type {
        border-bottom: none;
    }

    .search-filter-control .control-label {
        font-weight: bold;
    }

    .search-filter-control .control-label + .list-unstyled {
        margin-top: -10px;
    }

    @media (min-width: 767px) {
        .search-filter-desktop {
            display: block;
        }
    }
    @media (max-width: 766px) {
        .search-filter-mobile {
            display: block;
        }
    }

    .search-filter-header {
        position: relative;
        padding-right: 40px;
        margin-bottom: 10px;
    }

    .search-filter-toggle {
        cursor: pointer;
    }

    .search-filter-title {
        font-size: 16px;
        font-weight: 300;
        color: #555;
    }
    .search-filter-arrow {
        position: absolute;
        top: 50%;
        right: 0;
        width: 20px;
        height: 20px;
        margin-top: -10px;
    }

    .search-filter-arrow i {
        display: none;
        text-align: center;
        font-size: 14px;
        width: 20px;
        height: 20px;
        line-height: 20px;
        color: #09C;
    }

    .search-filter-arrow i:first-child {
        display: block;
    }

    .search-filter-control label {
        font-weight: normal;
    }

    .search-filter-control + .search-filter-control {
        margin-top: 10px;
    }

    .search-filter-footer {
        margin-top: 5px;
    }

    .search-filter.active {
        padding-bottom: 20px;
    }

    .search-filter-closed .search-filter-header {
        margin-bottom: 0;
    }

    .search-filter-closed .search-filter-arrow i {
        display: inline-block;
    }
    .search-filter-closed .search-filter-arrow i:first-child {
        display: none;
    }

    .section-results-header .search-filter {
        padding: 0;
    }

    #modal-filter .modal-body {
        padding: 0 20px;
    }

    .slat-green .title a {
        color: green !important;
    }
    .slat-green {
        border-left-color: green !important;
    }

    @media (max-width: 766px) {
        .eval-progress {
            margin-bottom: 5px;
        }
    }
    .progress-circle {
        border-radius: 50%;
        /*background-color: #5bc0de;*/
        /*color: #fff;*/
        /*text-shadow: 1px 1px 0 rgba(0,0,0,.3);*/
        background-color: #DDD;
        color: #555;
        width: 35px;
        width: 35px;
        line-height: 35px;
        text-align: center;
        font-size: 10px;
        font-weight: 600;
        margin-right: 10px;
    }
    .progress-info {
        font-size: 12px;
    }
    .progress-info .meta-label {
        font-weight: 700;
        color: #666666;
    }

    #show-additional {
        margin-left: -999999px;
        display: inline-block;
    }


    /* renamed flag classes to follow slat conventions and allow flags on non-attention slats */
    .slat .flag {
        display: none;
    }
    .slat-flag {
        padding: 15px 10px;
    }
    .slat-flag .flag {
        display: block;
        position: absolute;
        top: -1px;
        left: -3px;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 30px 30px 0 0;
        border-color: #FC7B00 transparent transparent transparent;
        z-index: 0;
    }
    .slat-flag .flag i {
        display: block;
        position: absolute;
        top: -27px;
        left: 4px;
        font-size: 12px;
        color: #fff;
        text-shadow: 1px 1px 0 rgba(0,0,0,.3);
    }


    /* added a wrapper around progress to prevent the margin jump in collapsable elements */
    .slat-progress {
        margin-top: 10px;
        padding: 10px 0 0;
        border-top: 1px solid #ddd;
    }

    /* removed spacing until we add back in the individual toggle */
    .slat .slat-nested {
        margin: 0;
    }

</style>

<div class="layout layout-search">
    <div class="container">

        <section class="section section-main section-box">
            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm">
                    <section class="section section-filters" data-equalize="layout-columns">
                        <h2>Filters</h2>
                        <div class="search-filters">
                            <?= makeFilter($appliedFiltersDesktop); ?>
                            <?= makeFilter($sortMobile); ?>
                            <?= makeFilter($range); ?>
                            <?= makeFilter($assessments); ?>
                            <?= makeFilter($employees); ?>
                        </div>
                    </section>
                </div>
                <div class="col-md-9">
                    <section class="section section-results" data-equalize="layout-columns">
                        <section class="section section-results-header">
                            <div class="row">
                                <div class="col-md-4">
                                    <h2>Results <small>Showing 1-20 of 35</small></h2>
                                    <?= makeFilter($appliedFiltersMobile); ?>
                                </div>

                                <div class="col-md-8 hidden-xs hidden-sm">
                                    <div class="section-results-header-sort">
                                        <div class="dropdown" id="desktop-show-additional">
                                            <a class="btn btn-default" data-toggle="dropdown" href="#">Sort By: Action Items<i class="fa fa-sort"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="active"><a href="#">Due Date</a></li>
                                                <li><a href="#">Action Items</a></li>
                                                <li><a href="#">Assessment Title</a></li>
                                                <li><a href="#">Assessment Type</a></li>
                                                <li><a href="#">Assessment Status</a></li>
                                                <li><a href="#">Employee Name</a></li>
                                                <li><a href="#">Employee Progress</a></li>
                                                <li><a href="#">Rater Name</a></li>
                                                <li><a href="#">Rater Progress</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section">
                            <?php for ( $i = 0; $i < 20; $i++ ) {

                                // mark the first 5 with a flag
                                if ( $i <= 5 ) {
                                    $flag = ' slat-flag';
                                    $flag_html = '<div class="flag"><i class="fa fa-flag"></i></div>';
                                } else {
                                    $flag = '';
                                    $flag_html = '';
                                }

                            ?>
                            <div class="slat slat-callout<?= $flag ?>">
                                <?= $flag_html ?>
                                <div class="slat-default">
                                    <div class="title">
                                        <a href="#">2015 Performance Review - <?= $employeeList[$i] ?></a>
                                    </div>
                                    <ul class="meta">
                                        <li><span class="meta-type">Employee Assessment</span></li>
                                        <li><span class="meta-label">Status:</span><span class="meta-value">Evaluation</span></li>
                                        <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value">Dec. 12, 2015</span></li>
                                    </ul>
                                    <div class="action action-split">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default btn-sm hidden-xs"><?= $slatButtonVal[$i] ?></a>
                                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-caret-down"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                            <?php if ($slatButtonVal[$i] == "Start") { ?>
                                                 <?= $slatButtonOptionsStart ?>
                                            <?php } ?>
                                            <?php if ($slatButtonVal[$i] == "Resume") { ?>
                                                 <?= $slatButtonOptionsResume ?>
                                            <?php } ?>
                                            <?php if ($slatButtonVal[$i] == "View") { ?>
                                                 <?= $slatButtonOptionsView ?>
                                            <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="slat-nested">
                                    <div class="slat-progress">
                                        <div class="row">
                                            <div class="eval-progress col-xs-12 col-sm-4">
                                                <div class="progress-circle pull-left">
                                                    <?= $employeeProgress[$i] ?>%
                                                </div>
                                                <div class="progress-info">
                                                    <span class="meta-label">EMPLOYEE</span> - In Progress<br>
                                                    <?= $employeeList[$i] ?>
                                                </div>
                                            </div>
                                            <div class="eval-progress col-xs-12 col-sm-4">
                                                <div class="progress-circle pull-left">
                                                    <?= $raterProgress[$i] ?>%
                                                </div>
                                                <div class="progress-info">
                                                    <span class="meta-label">RATER</span> - Not Started<br>
                                                    Juniper, Stephanie P.
                                                </div>
                                            </div>
                                            <div class="eval-progress col-xs-12 col-sm-4">
                                                <div class="progress-circle pull-left">
                                                    <?= $peerProgress[$i] ?>%
                                                </div>
                                                <div class="progress-info">
                                                    <span class="meta-label">PEERS COMPLETE</span><br>
                                                    0 OF 3
                                                </div>
                                            </div>
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
                                        'classes' => array('visible-xs','visible-sm'),
                                        'html' => '<a href="#modal-filter" class="btn btn-default" data-toggle="modal">Filter Results</a>',
                                    ),
                                    array(
                                        'position' => 'right',
                                        'classes' => array('hidden-xs','hidden-sm'),
                                        'html' => '
                                            <div class="btn-group dropup">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 35 <i class="fa fa-caret-up"></i></button>
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
                                            </div>'
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
<div id="modal-filter" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Filter Results</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
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

        $('#modal-filter').on('show.bs.modal', function() {
            $('.js-select2').each(function(){
                $(this).select2("destroy");
            });
            $(this).find('.modal-body').html($('.search-filters').html());
            $('.js-select2').select2();
            $('.search-filters').empty();
        });
        $('#modal-filter').on('hidden.bs.modal', function() {
            $('.js-select2').each(function(){
                $(this).select2("destroy");
            });
            $('.search-filters').append($('#modal-filter .modal-body').html());
            $('.js-select2').select2();
            $('#modal-filter .modal-body').empty();

        });
        $('.slat .btn').click(function(e){
            e.preventDefault();
        });
    });

    // Ok load, check window size and position how additional button accordingly
    onResize = function() {
        if($(window).width() <= 960) {
            $("#show-additional").appendTo("#mobile-show-additional").css("margin-left", "0");
        } else {
            $("#show-additional").prependTo("#desktop-show-additional").css("margin-left", "0");
        }
    }
    $(document).ready(onResize);
    $(window).resize(onResize);






</script>
<?= createSiteEnd(); ?>