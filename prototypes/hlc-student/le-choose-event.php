<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Live Event Title';
$patterns['focus']['title'] = 'Live Event Title';
$patterns['focus']['icon'] = array(
'class' => 'hs-icons-class-live',
'type' => 'Live Event',
);

$patterns['focus']['meta_primary'] = array(
array(
'label' => 'FROM COURSE:',
'value' => '<a href="#" class="meta-value">Course Title</a>',
),
);
$patterns['focus']['meta_secondary'] = array(
array(
'label' => 'Status:',
'value' => 'Not Registered',
),
);

$patterns['search']['filters'] = array(
array (
'visible' => 'mobile',
'header' => 'Sort',
'controls' => array(
'<select class="form-control js-select2"><option>Name</option><option>ID</option><option>Department</option></select>'
)
),
array(
"state" => 'open', // static / open / closed
"header" => 'Date Range',
"controls" => array(
'

<div class="form-group">
<label class="control-label">From</label>
<div class="input-group bootstrap-datepicker">
<input type="text" class="form-control datepicker" id="event-start-date" value="05/17/2016" tabindex="1">
<span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
</div>
</div>

<div class="form-group">
<label class="control-label">Through</label>
<div class="input-group bootstrap-datepicker">
<input type="text" class="form-control datepicker" id="event-end-date" value="05/17/2016" tabindex="1">
<span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
</div>
</div>


'
)
),
array(
"state" => 'closed', // static / open / closed
"header" => 'Building/Location Name',
"controls" => array(
'<div class="form-group">
<input type="text" class="form-control" placeholder="Search for Building/Location">
    </div>'
)
),
array(
"state" => 'closed', // static / open / closed
"header" => 'Address',
"controls" => array(
'<div class="form-group">
<label class="control-label">Country</label>
<input type="text" class="form-control" placeholder="DDL">
</div>
<div class="form-group">
<label class="control-label">State</label>
<input type="text" class="form-control" placeholder="Search for State">
    </div>
<div class="form-group">
<label class="control-label">City</label>
<input type="text" class="form-control" placeholder="Search for City">
    </div>
<div class="form-group">
<label class="control-label">Zip Code</label>
<input type="text" class="form-control" placeholder="Search for Zip Code">
    </div>
<button class="btn btn-default btn-sm">Apply Address</button>
'
)
),
array(
"state" => 'closed', // static / open / closed
"header" => 'Equipment',
"controls" => array(
'<div class="form-group">
<input type="text" class="form-control" placeholder="Search for Equipment">
    </div>'
)
),
);


$mobileTags = array(
'visible' => 'mobile',
'state' => 'static', // static / open / closed
'controls' => array(
'<div class="tag-group"><a href="#" class="tag">Search Term<i class="fa fa-times"></i></a> <a href="#" class="tag">Department<i class="fa fa-times"></i></a> </div>'
)
);


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
          
          .search-filter-panel.search-filter-closed {
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
          
          .search-filter .search-filter-panel-header {
            position: relative;
            padding-right: 40px;
            margin-bottom: 10px;
          }
          
          .search-filter .search-filter-toggle {
            cursor: pointer;
          }
          
          .search-filter .search-filter-toggle .search-filter-title {
            color: #09c;
            font-weight: 600;
          }
          
          .search-filter .search-filter-title {
            font-size: 16px;
            font-weight: 300;
            color: #555;
          }
          
          .search-filter .search-filter-arrow {
            position: absolute;
            top: 50%;
            right: 0;
            width: 20px;
            height: 20px;
            margin-top: -10px;
          }
          
          .search-filter .search-filter-arrow i {
            display: none;
            text-align: center;
            font-size: 14px;
            width: 20px;
            height: 20px;
            line-height: 20px;
            color: #09C;
          }
          
          .search-filter .search-filter-arrow i:first-child {
            display: block;
          }
          
          .search-filter .search-filter-control label {
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
          
          .search-filter-closed .search-filter-panel-header {
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
                    <h2>Refine Events</h2>
                    <div class="search-filter search-filter-desktop">
                      <div class="search-filter-panel-header">
                        <div class="search-filter-title">Applied Filters
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
                        <div class="col-md-8">
                          <h2>Choose Event <small>Showing 1-20 of 35</small></h2>
                          <div class="search-filter search-filter-mobile">
                            <div class="search-filter-control">
                              <?= createTags($patterns['search']); ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 hidden-xs hidden-sm text-right">
                          <a class="btn btn-default expand-all" href="#">Expand All</a>
                          <a class="btn btn-default collapse-all hidden" href="#">Collapse All</a>
                        </div>
                      </div>
                    </section>
                    <section class="section">
                      <?php for ( $i = 0; $i < 10; $i++ ) {
    $header1 = '<section class="section"><h4>Personnel</h4>';
    $header2 = '<section class="section"><h4>Location(s)</h4>';
    $hr = "<hr>";
    $sectionClose = "</section>";
    
    $nested = createSlat(array(
    'title' => "",
    'meta' => array(
    array(
    'label' => 'Instructor:',
    'value' => 'Jack H Demonstration'
    )
    ),
    'action' => array(
    'type' => '',
    'content' => '',
    'link' => '',
    ),
    
    
    ));
    $nested2 = createSlat(array(
    'title' => "",
    'meta' => array(
    array(
    'label' => 'ADDRESS:',
    'value' => '123 Main St, Somewhereville, TN 37122'
    )
    ),
    'action' => array(
    'type' => '',
    'content' => '',
    'link' => '',
    ),
    
    ));
    
    $slat = array(
    'attributes' => array(
    array('class',array('slat')),
    ),
    'title' => 'NRP Event ' . $i,
    'meta' => array(
    array(
    'type' => 'Live Event',
    ),
    array(
    
    'value' => '<div>Jul 15, 2016 at 3:30pm - </div>
    <div>Jul 25, 2016 at 3:30pm</div>',
    'attributes' => array(
    array('class','meta-callout'),
    )
    
    )
    ),
    'action' => array(
    'type' => ($i%4 == 0 ? 'action-single-warning' : 'action-single-success'),
    'content' => ($i%4 == 0 ? 'Join Waitlist <i class="fa fa-fw  fa-clock-o visible-xs"></i></a>' : 'Register <i class="fa fa-fw fa-plus visible-xs"></i>') ,
    'link' => '#',
    ),
    'nested' => array(
    
    'hide' => array($header1,$nested, $sectionClose,$hr,$header2,$nested2,$sectionClose),
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
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-10 of 35 <i class="fa fa-caret-up"></i></button>
<ul class="dropdown-menu" role="menu">
<li class="active"><a href="#">10 per page</a></li>
<li class=""><a href="#">20 per page</a></li>
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

                  </section>
                  <!-- /section-main -->
                </div>
                <!-- /column -->
              </div>
              <!-- /row -->
            </section>
          </div>
          <!-- /container -->
        </div>
        <!-- /layout -->

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
        </div>
        <!-- /modal -->

        <?= createFooter($patterns['footer']); ?>
          <?= createPrototypeNav(); ?>
            <?= createSiteScripts(); ?>
              <script src="/scripts/prototype.search-filters.js"></script>

              <script>
                $(function() {
                  $('.js-select2').select2();

                  $(document).on('click', '.search-filter-toggle', function() {
                    $(this).closest('.search-filter').toggleClass('search-filter-closed');
                    $(window).resize();
                  });

                  $('#modal-filter').on('show.bs.modal', function() {
                    $('.js-select2').each(function() {
                      $(this).select2("destroy");
                    });
                    $(this).find('.modal-body').html($('.search-filters').html());
                    $('.js-select2').select2();
                    $('.search-filters').empty();
                  });
                  $('#modal-filter').on('hidden.bs.modal', function() {
                    $('.js-select2').each(function() {
                      $(this).select2("destroy");
                    });
                    $('.search-filters').append($('#modal-filter .modal-body').html());
                    $('.js-select2').select2();
                    $('#modal-filter .modal-body').empty();

                  });
                  $('.slat .btn').click(function(e) {
                    e.preventDefault();
                  });
                  $('.expand-all').on('click', function() {
                    $(".collapse-group.collapse:not('.in')").siblings().trigger("click");
                    $('.collapse-all').show();
                    $('.collapse-all').removeClass("hidden");
                    $('.expand-all').hide();
                  });

                  $('.collapse-all').on('click', function() {
                    $('.collapse-group.in').siblings().trigger("click");
                    $('.expand-all').show();
                    $('.collapse-all').hide();
                  });
                  $('.collapse').on('hidden.bs.collapse', function() {
                    $(".collapse-all").hide();
                    $('.expand-all').show();
                  });
                  $('.collapse').on('shown.bs.collapse', function() {
                    $(".collapse-all").show();
                    $(".collapse-all").removeClass("hidden");
                    $('.expand-all').hide();
                  });


                });
              </script>
              <?= createSiteEnd(); ?>