<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Leadership Training';
$patterns['header']['mainNavActive'] = 'scheduling';
$patterns['focus']['title'] = 'Leadership Training';
$patterns['focus']['meta_secondary'] = array(
array(
'label' => 'Type:',
'value' => 'NRP',
),
array(
'label' => 'Occurrences:',
'value' => '52',
),
array(
'label' => 'Time Zone:',
'value' => 'ET',
),
);

?>
  <?= createSiteStart($patterns['start']); ?>
    <?= createHeader($patterns['header']); ?>
      <?= createFocus($patterns['focus']); ?>

        <div class="layout layout-subnav layout-min">
          <div class="container">
            <section class="section section-main section-box">
              <div class="layout-subnav-container">
                <div class="layout-subnav-nav">
                  <div class="layout-subnav-nav-mobile">
                    <span><i class="fa fa-caret-down"></i><span>Series Settings</span></span> <a href="#" class="toggle"><i class="fa fa-bars"></i></a>
                  </div>
                  <ul>
                    <li class="active"><a href="/event-series-settings.php">Series Settings<i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="/event-series-occurrences.php">Occurrences<i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="/event-series-resources.php">Resources &amp;&nbsp;Personnel<i class="fa fa-chevron-right"></i></a></li>
                  </ul>
                </div>
                <!-- /subnav -->

                <div class="layout-subnav-content">

                  <section class="section">
                    <h2 class="page-header">General</h2>
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" class="form-control" value="Leadership Training">
                        </div>
                      </div>
                      <!-- <div class="col-sm-4">
<div class="form-group">
<label>Type</label>
<select class="form-control" disabled>
<option>NRP</option>
<option>Standard</option>
</select>
</div>
</div> -->
                    </div>

                  </section>

                  <?php
$stickybar = array(
'sets' => array(
array(
'position' => 'left',
'classes' => array('hidden-xs'),
'html' => '
<a href="#" class="btn btn-success js-confirm-save">Save Series</a>
<a href="/events.php" class="btn btn-default">Return to Events</a>
',
),
array(
'position' => 'left',
'classes' => array('visible-xs'),
'html' => '
<a href="#" class="btn btn-success js-confirm-save">Save</a>
<a href="/events.php" class="btn btn-default">Close</a>
',
),
array(
'position' => 'right',
'classes' => array('hidden-xs'),
'html' => '<a href="#" class="btn btn-danger js-confirm-delete">Delete Series</a>',
),
array(
'position' => 'right',
'classes' => array('visible-xs'),
'html' => '<a href="#" class="btn btn-danger js-confirm-delete">Delete</a>',
),
),
);
echo createStickybar($stickybar);
?>

                </div>
                <!-- /content -->
              </div>
            </section>
          </div>
        </div>
        <!-- /layout -->
        <div class="modal fade" id="modal-global-event" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Availability</h4>
              </div>
              <div class="modal-body">
                <p>Setting availability to "Cross-Organization" makes the event accessible by all HealthStream Customer Organizations. </p>
                <p>However, <b>Registration Access</b> of these events can only be set to self-registration and admin of hosting organization. Meaning only admins of your organization will be able to register students. </p>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <?= createFooter($patterns['footer']); ?>
          <?= createPrototypeNav(); ?>
            <?= createSiteScripts(); ?>

              <script>
                $(function() {

                  $('.js-confirm-save').click(function(e) {
                    e.preventDefault();
                    HealthStream.utilities.growl({
                      type: 'success',
                      title: 'Changes Saved',
                      text: 'Your changes have been saved'
                    });
                  });

                  <?php if ( !empty($_GET['save']) && $_GET['save'] === 'true' ) { ?>
                  setTimeout(function() {
                    $('.js-confirm-save').click();
                  }, 500);
                  <?php } ?>

                });
              </script>

              <?= createSiteEnd(); ?>