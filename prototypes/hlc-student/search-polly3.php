<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Catalog';
$patterns['header']['mainNavActive'] = 'catalog';
$patterns['focus']['title'] = 'Catalog';

$search = (object) [
    "state" => 'open',
    "header" => 'Search Term',
    "controls" => array(
        '<div class="input-group"><input type="text" class="form-control" placeholder="" value="ICD-10"><span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span></div>'

    )
];

$appliedFiltersDesktop = (object) [
    'visible' => 'desktop',
    'state' => 'static',
    'header' => 'Applied Filters',
    'controls' => array(
        '<div class="tag-group"><a href="#" class="tag">Search Term: ICD-10<i class="fa fa-times"></i></a> <a href="#" class="tag">Category: Specialty<i class="fa fa-times"></i></a> <a href="#" class="tag">Modality: E-Learning<i class="fa fa-times"></i></a></div>'
    )
];

$appliedFiltersMobile = (object) [
    'visible' => 'mobile',
    'state' => 'static',
    'controls' => array(
        '<div class="tag-group"><a href="#" class="tag">Search Term: Heart Valves<i class="fa fa-times"></i></a> <a href="#" class="tag">CE Credit: 1.5 Hour(s)<i class="fa fa-times"></i></a> <a href="#" class="tag">Specialty: Cardiology<i class="fa fa-times"></i></a></div>'
    )
];

$sortMobile = (object) [
    'visible' => 'mobile',
    'header' => 'Sort',
    'controls' => array(
        '<select class="form-control js-select2"><option>Relevance</option><option selected>A-Z</option></select>'
    )
];

$courseList = array(
    'A Day in the Life of ICD-10',
    'Advanta 2 Med Surg Bed',
    'Cardiogenic Shock (Case Study)',
    'Course 1',
    'Course 2',
    'Course 3',
    'Course 4',
    'Course 5',
    'Course 6',
    'Course 7',
    'Course 8',
    'Course 9',
    'Course 10',
    'Course 11',
    'Course 12',
    'Course 13',
    'Course 14',
    'Heart Disease and Treatment Options',
    'Lippencott - 18-lead electrocardiogram',
    'Understanding Chronic Pain Management',
);

$categoryList = array (
    'Content Partner',
    'Audience',
    'Airway Management',
    'HealthStream Products',
    'Subject',
    'CE Center',
    'Bleeding and Splinting',
    'Cardiac Arrest Management',
    'DEMO',
    'DNA Precyse',
    'InService Center',
    'IV / IO Therapy',
    'JCAHO Standards',
    'kathy',
    'Medical Assessment',
    'OneSource',
    'Profile Activity Template',
    'Program - AARC - Respiratory Care',
    'Program - Ancillary Services',
    'Program - Basic Trauma',
    'Program - Business of Healthcare',
    'Program - Compliance',
    'Program - Critical Care',
    'Program - Nursing Resources',
    'Program - Oncology Nursing',
    'Program - Psychiatric Nursing',
    'Simulation',
    'Specialty',
    'Trauma Assessment',
);

$publisherList = array (
    'Content Partner 1',
    'Content Partner 2',
    'Content Partner 3',
    'Content Partner 4',
    'Content Partner 5',
    'Content Partner 6',
    'Content Partner 7',
    'Content Partner 8',
    'Content Partner 9',
    'Content Partner 10',
    'Content Partner 11',
    'Content Partner 12',
    'Content Partner 13',
    'Content Partner 14',
    'Content Partner 15',
    'Content Partner 16',
    'Content Partner 17',
    'Content Partner 18',
    'Content Partner 19',
    'Content Partner 20',
);

$categoryBadgeList = array (
    '(8297)',
    '(7233)',
    '(6174)',
    '(5568)',
    '(1845)',
    '(3)',
    '(1)',
    '(2)',
    '(16)',
    '(194)',
    '(14)',
    '(3)',
    '(3)',
    '(2)',
    '(1)',
    '(3)',
    '(1)',
    '(3)',
    '(2)',
    '(6)',
    '(1)',
    '(1)',
    '(2)',
    '(3)',
    '(1)',
    '(1)',
    '(1)',
    '(1541)',
    '(11)',
);

$badgeList = array (
    '(5)',
    '(7)',
    '(5)',
    '(4)',
    '(2)',
    '(7)',
    '(12)',
    '(8)',
    '(24)',
    '(1)',
    '(7)',
    '(9)',
    '(4)',
    '(3)',
    '(5)',
    '(7)',
    '(9)',
    '(3)',
    '(2)',
    '(9)',
    '(10)',
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

<div class="layout layout-search">
    <div class="container search-polly search-polly2">
        <section class="section section-main section-box">
            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm">
                    <section class="section section-filters" data-equalize="layout-columns">
                        <h2>Filters</h2>
                        <div class="search-filters">
                            <?= makeFilter($appliedFiltersDesktop); ?>
                            <?= makeFilter($search); ?>
                            <?= makeFilter($sortMobile); ?>
                            <section class="section section-refinement-group no-border">
                                <nav class="catalog-categories">
                                    <h3>Categories</h3>
                                    <div data-toggle="limit-height" data-labels="Show More|Show Less" data-height="200">
                                        <ul class="category-wrapper">
                                            <?php for($i=0;$i<29;$i++) { ?>
                                            <li>
                                                <a href="#">
                                                    <div class="cc-col"><?= $categoryList[$i] ?><span class="badge"><?= $categoryBadgeList[$i] ?> </span></div>
                                                    <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </nav>
                            </section>

                            <section class="section section-refinement-group">
                                <nav class="catalog-categories">
                                    <h3>Publisher</h3>
                                    <div data-toggle="limit-height" data-labels="Show More|Show Less" data-height="200">
                                        <ul class="category-wrapper">
                                            <?php for($i=0;$i<20;$i++) { ?>
                                            <li>
                                                <a href="#">
                                                    <div class="cc-col"><?= $publisherList[$i] ?><span class="badge"><?= $badgeList[$i] ?> </span></div>
                                                    <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </nav>
                            </section>

                            <section class="section section-refinement-group">
                                <nav>
                                    <h3>Modality</h3>
                                    <ul class="list-unstyled">
                                        <li class="checkbox">
                                            <label><input type="checkbox" checked> E-Learning <span class="badge">(35)</span></label>
                                         </li>
                                        <li class="checkbox">
                                            <label><input type="checkbox"> SIM <span class="badge">(47)</span></label>
                                        </li>
                                        <li class="checkbox">
                                            <label><input type="checkbox"> Video <span class="badge">(68)</span></label>
                                        </li>
                                        <li class="checkbox">
                                            <label><input type="checkbox"> PDF <span class="badge">(5)</span></label>
                                        </li>
                                    </ul>
                                </nav>
                            </section>
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
                                            <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: A-Z <i class="fa fa-sort"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#">Relevance</a></li>
                                                <li class="active"><a href="#">A-Z</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section">
                            <?php for ( $i = 0; $i < 20; $i++ ) {

                                $content = '
                                    <section class="section">
                                        <h5>Description</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita error molestias dicta ducimus ratione laborum deserunt aliquam, perferendis ad nostrum atque, fugiat deleniti sapiente a pariatur nulla beatae voluptatibus illum.</p>
                                    </section>
                                    <section class="section">
                                        <small class="text-muted"><b>Content Owner</b> Lippencot Professional Development</small>
                                    </section>
                                ';
                                $slat = array(
                                    'title' => '<a href="#">'.$courseList[$i].'</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'CE:',
                                            'value' => '1.5 Hour(s)',
                                        ),
                                        array(
                                            'label' => 'Activities:',
                                            'value' => 'Online, Evaluation',
                                        ),
                                        array(
                                            'label' => 'Alerts:',
                                            'value' => 'Mobile Compatible, Expiring in 30 Days',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => '<i class="fa fa-info fa-fw visible-xs"></i> Info',
                                        'link' => 'course-enroll.php',
                                    ),
                                    'nested' => array(
                                        'hide' => array($content)
                                    ),
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
<div id="modal-filter" class="search-polly search-polly2 search-polly-modal-filter modal fade" tabindex="-1">
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
            $(this).find('.modal-body').html($('.search-filters').html());
            $('.search-filters').empty();
        });
        $('#modal-filter').on('hidden.bs.modal', function() {
            $('.search-filters').append($('#modal-filter .modal-body').html());
            $('#modal-filter .modal-body').empty();
        });
        $('.slat .btn').click(function(e){
            e.preventDefault();
        });
        $('a[data-toggle="pill"]').on('click', function(){
          if ($(this).parent('li').hasClass('disabled')) {
            return false;
          };
        });

        //$('#modal-filter').on('click', '.limit-height-link', function(){
          //  $(this).parent().find('div.limit-height').removeAttr('style');
        //})
    });
</script>


<?= createSiteEnd(); ?>