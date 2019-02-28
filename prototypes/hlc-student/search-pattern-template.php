<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Search Pattern Template';
$patterns['focus']['title'] = 'Search Pattern Template';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Status:',
        'value' => 'WIP',
    ),
    array(
        'label' => 'Updated:',
        'value' =>  date ("M d, Y", getlastmod()),
    ),
);

$employeeSearch = (object) [
    "state" => 'open', // static / open / closed
    "header" => 'Name Search',
    "controls" => array(
        '<label class="control-label">First Name</label><div class="input-group"><input type="text" class="form-control" placeholder="Search"><span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span></div>',
        '<label class="control-label">Last Name</label><div class="input-group"><input type="text" class="form-control" placeholder="Search"><span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span></div>'
    )
];

$department = (object) [
    "state" => 'closed', // static / open / closed
    "header" => 'Department',
    "controls" => array(
        '<select class="form-control js-select2"><option>Department 1</option><option>Department 2</option><option>Department 3</option></select>'
    )
];


$appliedFiltersDesktop = (object) [
    'visible' => 'desktop',
    'state' => 'static',
    'header' => 'Applied Filters',
    'controls' => array(
        '<div class="tag-group"><a href="#" class="tag">Search Term<i class="fa fa-times"></i></a> <a href="#" class="tag">Department<i class="fa fa-times"></i></a> </div>'
    )
];

$appliedFiltersMobile = (object) [
    'visible' => 'mobile',
    'state' => 'static',
    'controls' => array(
        '<div class="tag-group"><a href="#" class="tag">Search Term<i class="fa fa-times"></i></a> <a href="#" class="tag">Department<i class="fa fa-times"></i></a> </div>'
    )
];

$sortMobile = (object) [
    'visible' => 'mobile',
    'header' => 'Sort',
    'controls' => array(
        '<select class="form-control js-select2"><option>Name</option><option>ID</option><option>Department</option></select>'
    )
];

$employees = array(
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
                            <?= makeFilter($employeeSearch); ?>
                            <?= makeFilter($department); ?>
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
                                            <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Name <i class="fa fa-sort"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="active"><a href="#">Name</a></li>
                                                <li><a href="#">ID</a></li>
                                                <li><a href="#">Department</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section">
                            <?php for ( $i = 0; $i < 20; $i++ ) {
                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    ),
                                    'title' => $employees[$i],
                                    'meta' => array(
                                        array(
                                            'label' => 'ID:',
                                            'value' => '123456',
                                        ),
                                        array(
                                            'label' => 'Department:',
                                            'value' => 'Nursing',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Select <i class="fa fa-plus visible-xs"></i>',
                                        'link' => '#',
                                    )
                                );
                                echo createSlat($slat);
                            }?>

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

        $(document).on('click', '.search-filter-toggle', function(){
            $(this).closest('.search-filter').toggleClass('search-filter-closed');
            $(window).resize();
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