<?php
include "includes/helpers/helpers.php";
$patterns['start']['title'] = 'Profile Activity';
$patterns['focus']['title'] = 'Please Update Your Profile';
$patterns['focus']['icon'] = array(
'class' => 'hs-icons-profile-activity',
'type' => 'Profile Activity',
);
$patterns['focus']['meta_secondary'] = array(
array(
'label' => 'Total Tasks:',
'value' => '3',
),
array(
'label' => 'Due:',
'value' => 'Oct 25, 2014',
),
);
?>



  <?= createSiteStart($patterns['start']); ?>
    <?= createHeader($patterns['header']); ?>
      <?= createFocus($patterns['focus']); ?>
        <div class="layout">
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <section class="section section-main section-box" data-equalize="layout-columns">
                  <section class="section">
                    <p class="lead">Is your profile up to date? Review each section to ensure it is complete and current.</p>
                  </section>
                  <section class="section">
                    <div class="slat-group">
                      <div class="slat-group-header">
                        <div class="slat-group-header-title">

                          <h2>Certifications</h2>
                        </div>
                        <div class="slat-group-header-actions">
                          <a href="#" class="btn btn-default btn-sm help-certification-add" data-toggle="modal">Add</a>


                        </div>
                      </div>
                      <div class="slat-group-content">
                        <?php

$content = '
<section class="section">
<h5>Certifying Body</h5>
<p>American Board of Wound Management (ABWM)</p>
</section>
<section class="section">
<h5>Updated</h5>
<p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
</section>
<section class="section">
<h5>System Managed</h5>
<p>No</p>
</section>
';
$slat = array(
'title' => 'CWCA - Certified Wound Care Associate',
'meta' => array(
array(
'label' => 'Country:',
'value' => 'United States',
),
array(
'label' => 'State:',
'value' => 'TN',
),
array(
'label' => 'License:',
'value' => '123456789011112',
),
array(
'label' => 'Expires: ',
'value' => 'Jan 1, 2015',
'attributes' => array(
array('class','meta-callout'),
)
)
),
'action' => array(
'type' => 'custom',
'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#" data-help="help-certification-edit">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
),
'nested' => array(
'hide' => array($content)
)
);
echo createSlat($slat);

$content = '
<section class="section">
<h5>Certifying Body</h5>
<p>National Association of Alcoholism and Drug Abuse Counselors Certification Commission (NAADAC)</p>
</section>
<section class="section">
<h5>Updated</h5>
<p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
</section>
<section class="section">
<h5>System Managed</h5>
<p>No</p>
</section>
';
$slat = array(
'title' => 'NCAC ll - National Certified Addiction Counsler, Level ll',
'meta' => array(
array(
'label' => 'Country:',
'value' => 'United States',
),
array(
'label' => 'License:',
'value' => '123456789011112',
),
array(
'label' => 'Expires: ',
'value' => 'Jan 1, 2015',
'attributes' => array(
array('class','meta-callout'),
)
)
),
'action' => array(
'type' => 'custom',
'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-certification-edit" data-help="help-certification-edit">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
),
'nested' => array(
'hide' => array($content)
)
);
echo createSlat($slat);

?>
                      </div>
                    </div>

                  </section>


                  <section class="section">
                    <div class="slat-group ">
                      <div class="slat-group-header ">
                        <h2>Education
<div class="slat-group-content">
<div class="slat">
<div class="slat-message">
<h3>We couldn't find your education. Would you like to add it now?</h3>
<a href="#" class="btn btn-default help-education-add">Add Education</a>
</div>
</div>
</div>
</div>
</section>

<section class="section">
<div class="slat-group ">
<div class="slat-group-header">
<div class="slat-group-header-title">
<h2>Licenses </h2>
                      </div>
                      <div class="slat-group-header-actions">
                        <button class="btn-default btn btn-sm">Add</button>
                      </div>
                    </div>
                    <div class="slat-group-content">
                      <?php

$content = '
<section class="section">
<h5>State Certification Number</h5>
<p>1234567890</p>
</section>
<section class="section">
<h5>National Expiration Date</h5>
<p>Feb 7, 2014</p>
</section>
';
$slat = array(
'title' => 'AEMT',
'meta' => array(
array(
'label' => 'Country:',
'value' => 'United States',
),
array(
'label' => 'State:',
'value' => 'MI',
)
),
'action' => array(
'type' => 'custom',
'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-discipline-edit" data-help="help-licenses-edit">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
),
'nested' => array(
'hide' => array($content)
)
);
echo createSlat($slat);

$content = '
<section class="section">
<h5>Certifying Body</h5>
<p>National Association of Alcoholism and Drug Abuse Counselors Certification Commission (NAADAC)</p>
</section>
<section class="section">
<h5>Updated</h5>
<p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
</section>
<section class="section">
<h5>System Managed</h5>
<p>No</p>
</section>
';
$slat = array(
'title' => 'NCAC ll - National Certified Addiction Counsler, Level ll',
'meta' => array(
array(
'label' => 'Country:',
'value' => 'United States',
),
array(
'label' => 'State:',
'value' => 'MI',
),
array(
'label' => 'State License:',
'value' => '123456789011112',
),
array(
'label' => 'Expires: ',
'value' => 'Jan 1, 2015',
'attributes' => array(
array('class','meta-callout'),
)
)
),
'action' => array(
'type' => 'custom',
'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-disciplines-edit" data-help="help-licenses-edit">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
),
'nested' => array(
'hide' => array($content)
)
);
echo createSlat($slat);

$content = '
<section class="section">
<h5>State Certification Number</h5>
<p>1234567890</p>
</section>
<section class="section">
<h5>National Expiration Date</h5>
<p>Feb 7, 2014</p>
</section>
';
$slat = array(
'title' => 'AEMT',
'meta' => array(
array(
'label' => 'Country:',
'value' => 'United States',
),
array(
'label' => 'State:',
'value' => 'MI',
)
),
'action' => array(
'type' => 'custom',
'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-discipline-edit" data-help="help-licenses-edit">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
),
'nested' => array(
'hide' => array($content)
)
);
echo createSlat($slat);

$content = '
<section class="section">
<h5>Certifying Body</h5>
<p>National Association of Alcoholism and Drug Abuse Counselors Certification Commission (NAADAC)</p>
</section>
<section class="section">
<h5>Updated</h5>
<p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
</section>
<section class="section">
<h5>System Managed</h5>
<p>No</p>
</section>
';
$slat = array(
'title' => 'NCAC ll - National Certified Addiction Counsler, Level ll',
'meta' => array(
array(
'label' => 'Country:',
'value' => 'United States',
),
array(
'label' => 'State:',
'value' => 'MI',
),
array(
'label' => 'State License:',
'value' => '123456789011112',
),
array(
'label' => 'Expires: ',
'value' => 'Jan 1, 2015',
'attributes' => array(
array('class','meta-callout'),
)
)
),
'action' => array(
'type' => 'custom',
'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-disciplines-edit" data-help="help-licenses-edit">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
),
'nested' => array(
'hide' => array($content)
)
);
echo createSlat($slat);

$content = '
<section class="section">
<h5>State Certification Number</h5>
<p>1234567890</p>
</section>
<section class="section">
<h5>National Expiration Date</h5>
<p>Feb 7, 2014</p>
</section>
';
$slat = array(
'title' => 'AEMT',
'meta' => array(
array(
'label' => 'Country:',
'value' => 'United States',
),
array(
'label' => 'State:',
'value' => 'MI',
)
),
'action' => array(
'type' => 'custom',
'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-discipline-edit" data-help="help-licenses-edit">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
),
'nested' => array(
'hide' => array($content)
)
);
echo createSlat($slat);



?>
                    </div>
                  </section>


                  <?php
$stickybar = array(
'sets' => array(
array(
'html' => '
<a href="#" class="btn btn-success help-activity-complete">Finish</a>

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

              <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                  <?php include_sidebar() ?>
                </section>
                <!-- /section-sidebar -->
              </div>
              <!-- /column -->
            </div>
            <!-- /row -->
          </div>
          <!-- /container -->
        </div>
        <!-- /layout -->
        <?= createFooter($patterns['footer']); ?>
          <?= createPrototypeNav(); ?>
            <?= createSiteScripts(); ?>
              <script>
                $(".js-review-btn").click(function(e) {
                  $(this).parents(".slat-group").toggleClass("alert alert-warning");
                  $(this).toggleClass("btn-warning btn-default");
                  $(this).html("Undo");
                });
                $(function() {
                  $('a[data-help="help-certification-edit"]').click(function(e) {
                    alert('This would open the edit certification modal found on the certifications page.');
                    e.preventDefault();
                  });
                  $('.help-certification-add').click(function(e) {
                    alert('This would open the add certification modal found on the certifications page.');
                    e.preventDefault();
                  });
                  $('.help-education-add').click(function(e) {
                    alert('This would open the add education modal found on the education page.');
                    e.preventDefault();
                  });
                  $('a[data-help="help-licenses-edit"]').click(function(e) {
                    alert('This would open the edit licenses modal found on the licenses page.');
                    e.preventDefault();
                  });
                  $('.help-licenses-add').click(function(e) {
                    alert('This would open the add licenses modal found on the licenses page.');
                    e.preventDefault();
                  });
                  $('.help-licenses-previous').click(function(e) {
                    alert('This would load the previous set of licenses results into this section. If it was the first page, this button would be disabled.');
                    e.preventDefault();
                  });
                  $('.help-licenses-next').click(function(e) {
                    alert('This would load the next set of licenses results into this section. If it was the last page, this button would be disabled.');
                    e.preventDefault();
                  });
                  $('.help-activity-complete').click(function(e) {
                    alert('This would save and complete the profile activity, then take you back to the To Do page.');
                    e.preventDefault();
                  });
                  $('.help-activity-save').click(function(e) {
                    alert('This would save the profile activity and return you to the To Do page.');
                    e.preventDefault();
                  });
                });
              </script>
              <?= createSiteEnd(); ?>