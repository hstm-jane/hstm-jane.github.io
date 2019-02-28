<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Add Users';
$patterns['focus']['title'] = 'Add Users';



$patterns['search']['filters'] = array(
  array(
    'visible' => 'mobile',
    'header' => 'Sort',
    'controls' => array(
      '<select class="form-control js-select2"><option>Name</option><option>ID</option><option>Department</option></select>',
    ),
  ),
  array(
"state" => 'open', // static / open / closed
"header" => 'Name',
"controls" => array(
  '<label class="control-label">First Name</label><input type="text" class="form-control" placeholder="">',
  '<label class="control-label">Middle Name</label><input type="text" class="form-control" placeholder="">',
  '<label class="control-label">Last Name</label><input type="text" class="form-control" placeholder="">',

),
),
  array(
"state" => 'open', // static / open / closed
"header" => 'Account',
"controls" => array(
  '<label class="control-label">Username</label><input type="text" class="form-control" placeholder="">',
  '<label class="control-label">Affiliation</label>
  <select class="form-control js-affiliation-select" >
  <option></option>
  <option value="1">Arkham Asylum </option>
  <option value="2">All Saints Hospital</option>
  <option value="3">Brookhaven Hospital</option>
  <option value="4">Chicago Hope</option>
  <option value="5">Holby City Hospital</option>
  <option value="6">James Rivers Hospital </option>
  <option value="7">Kingdom Hospital</option>
  <option value="8">Mayfield Psychiatric Hospital</option>
  <option value="9">New Bedlam Rest Home for the Emotionally Interesting</option>
  <option value="10">Princeton-Plainsboro Teaching Hospital</option>
  <option value="11"> Richmond Trinity Hospital</option>
  <option value="12">Sacred Heart Hospital </option>
  <option value="13">Shady Acres Mental Hospital</option>
  <option value="14">Springfield General Hospital </option>
  </select>',

),
),

);

?>





<?=createSiteStart($patterns['start']);?>
<?=createHeader($patterns['header']);?>
<?=createFocus($patterns['focus']);?>

<div class="layout layout-search">
  <div class="container">
    <section class="section section-main section-box">
      <div class="row">
        <div class="col-md-3 hidden-xs hidden-sm">
          <section class="section section-filters" data-equalize="layout-columns">
            <h2>Refine</h2>
            <?=createSearch($patterns['search']);?>
            <div class="search-filter">
              <button class="btn btn-default ">Apply Filters</button>
            </div>
          </section>
        </div>
        <div class="col-md-9">


          <section class="section section-results" data-equalize="layout-columns">

            <section class="section section-results-header">
              <div class="row">
                <div class="col-md-6">
                  <h2>Add Users <small>Showing 51- 100 of 3000</small></h2>

                </div>
                <div class="col-md-6 hidden-xs hidden-sm">
                  <div class="section-results-header-sort">
                    <div class="dropdown">
                      <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Name <i class="fa fa-sort"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li class="active"><a href="#">Name A - Z</a></li>
                        <li><a href="#">Name Z - A</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

            </section>

            <section class="section">



              <?php
              sort($actors);
              for ($x = 0; $x <= 50; $x++) {


                $slat = array(
                  'attributes' => array(
                    array('class',array('slat')),
                  ),
                  'title' => '<a href="user-edit.php">'. $actors[$x] . '</a>',
                  'meta' => array(

                    array(
                      'label' => 'Username:',
                      'value' => 'user12' . $x ,

                    ),
                  ),


                  'action' => array(),
                );

                echo '<div class="checkable">';
                echo createSlat($slat);

                echo '<div class="select"><label><input type="checkbox" class="checkbox"><span class="icon"></span></label></div></div>';

              }
              ?>
          </section>

          <?php
          $stickybar = array(
            'sets' => array(
              array(
                'position' => 'left',
                'classes' => array('hidden-xs', 'hidden-sm'),
                'html' => '<a href="#"  class="btn btn-success ">Add Selected Users </a>
                <a href="/user-add.6.php"  class="btn btn-default ">Create New  User</a>'
                ,
              ),

              array(
                'position' => 'right',
                'classes' => array('hidden-xs', 'hidden-sm'),
                'html' => '
                <label class="stickybar-text">Showing 51 - 100 of 3000</label>
                <div class="btn-group">
                <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                </div>
                ',
              ),
              array(
                'position' => 'left',
                'classes' => array('visible-xs', 'visible-sm'),
                'html' => '
                <a href="/user-add.2.php" data-toggle="modal" class="btn btn-success">Add User</a>
                <a href="#modal-refine" class="btn btn-default" data-toggle="modal">Filter</a>
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
<div id="modal-refine" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title">Refine Results</h4>
      </div>
      <div class="modal-body">
        <section class="section section-refinement-options">
          <?=createSearch($patterns['search']);?>
        </section>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" data-dismiss="modal">Apply</button>
        <button class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- /modal -->


<?=createFooter($patterns['footer']);?>
<?=createPrototypeNav();?>
<?=createSiteScripts();?>


<script>



  $(function() {
    $('.js-select2').select2();

    $(document).on('click', '.search-filter__toggle', function() {
      $(this).closest('.search-filter').toggleClass('search-filter--closed');
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

  });
</script>
<?=createSiteEnd();?>
