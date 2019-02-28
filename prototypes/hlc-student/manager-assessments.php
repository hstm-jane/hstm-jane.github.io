<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Assessments';
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
        <li class="{active=team}"><a href="/manager-assessments.php">Team</a></li>
        <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'team',
);
$patterns['focus']['title'] = 'Assessments';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Status:',
        'value' => 'WIP',
    ),
    array(
        'label' => 'Updated:',
        'value' => date ("M d, Y", getlastmod()),
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
        '<label class="control-label">Type:</label><ul class="list-unstyled"><li><label class="checkbox"><input type="checkbox"> Self</label></li><li><label class="checkbox"><input type="checkbox" checked=""> Employee</label></li><li><label class="checkbox"><input type="checkbox"> Peer</label></li></ul>',
        '<label class="control-label">Status:</label><ul class="list-unstyled"><li><label class="checkbox"><input type="checkbox" checked> Requires Attention</label></li><li><label class="checkbox"><input type="checkbox"> Assigned</label></li><li><label class="checkbox"><input type="checkbox"> Evaluate</label></li><li><label class="checkbox"><input type="checkbox"> Review</label></li><li><label class="checkbox"><input type="checkbox"> Completed</label></li></ul>'

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
        '<div class="tag-group"><a href="#" class="tag">Type: Employee<i class="fa fa-times"></i></a> <a href="#" class="tag">Status: Requires Attention<i class="fa fa-times"></i></a> </div>'
    )
];

$sortMobile = (object) [
    'visible' => 'mobile',
    'header' => 'Sort',
    'controls' => array(
        '<select class="form-control js-select2"><option>Date</option><option>Name</option><option>Type</option></select>'
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
                                <div class="col-md-9">
                                    <h2>Results <small>Showing 1-20 of 35</small></h2>
                                    <?= makeFilter($appliedFiltersMobile); ?>
                                </div>
                                <div class="col-md-3 hidden-xs hidden-sm">
                                    <div class="section-results-header-sort">
                                        <div class="dropdown">
                                            <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Date <i class="fa fa-sort"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="active"><a href="#">Date</a></li>
                                                <li><a href="#">Name</a></li>
                                                <li><a href="#">Type</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section">
                            <?php for ( $i = 0; $i < 20; $i++ ) { ?>
                            <div class="slat slat-callout slat-attention">
                                <div class="slat-default">
                                    <div class="title">
                                        <a href="#">2015 Performance Review - <?= $employeeList[$i] ?></a>
                                    </div>
                                    <ul class="meta">
                                        <li><span class="meta-type">Employee Assessment</span></li>
                                        <li><span class="meta-label">Status:</span><span class="meta-value">Evaluation</span></li>
                                        <li><span class="meta-label">Rater:</span><span class="meta-value">Juniper, Stephanie P.</span></li>
                                        <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value">Dec. 12, 2015</span></li>
                                    </ul>
                                    <div class="action action-split">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default btn-sm hidden-xs">Resume</a>
                                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-caret-down"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#">Resume</a></li>
                                                <li><a href="#">Revert</a></li>
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
</script>
<?= createSiteEnd(); ?>