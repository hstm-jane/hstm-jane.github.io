<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Search Pattern';
$patterns['focus']['title'] = 'Search Pattern';

$patterns['search']['filters'] = array(
                array (
                    'visible' => 'mobile',
                    'header' => 'Sort',
                    'controls' => array(
                        '<select class="form-control js-select2"><option>Name</option><option>ID</option><option>Department</option></select>'
                    )
                ),
                array(
                    "state" => 'closed', // static / open / closed
                    "header" => 'Filter Header',
                    "controls" => array(
                        '<select class="form-control js-select2"><option>Option 1</option><option>Option 2</option><option>Department 3</option></select>'
                    )
                ),
                array(
                    "state" => 'open', // static / open / closed
                    "header" => 'Name Search',
                    "controls" => array(
                       '<label class="control-label">First Name</label><div class="input-group"><input type="text" class="form-control" placeholder="Search"><span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span></div>',
                       '<label class="control-label">Last Name</label><div class="input-group"><input type="text" class="form-control" placeholder="Search"><span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span></div>'
                    )
                )
            );


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

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>


<div class="layout layout-search">
    <div class="container">
        <section class="section section-main section-box">
                <div class="row">
                    <div class="col-md-3 hidden-xs hidden-sm">
                        <section class="section section-filters" data-equalize="layout-columns">
                            <h2>Refine Results</h2>
                            <div class="search-filter search-filter--desktop">
                                <div class="search-filter__header">
                                    <div class="search-filter__title">Applied Filters
                                    </div>
                                </div>

                                <?= createTags($patterns['search']); ?>
                            </div>

                            <?= createSearch($patterns['search']); ?>
                        </section>
                    </div>
                    <div class="col-md-9">
                        <section class="section section-results" data-equalize="layout-columns">
                            <section class="section section-results-header">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h2>Results <small>Showing 1-20 of 35</small></h2>
                                        <div class="search-filter search-filter--mobile">
                                            <div class="search-filter__control">
                                                <?= createTags($patterns['search']); ?>
                                            </div>
                                        </div>
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
                <h4 class="modal-title">Refine Results</h4>
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

        $(document).on('click', '.search-filter__toggle', function(){
            $(this).closest('.search-filter').toggleClass('search-filter--closed');
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