<?php

include "includes/helpers/helpers.php";
$patterns['start']['title'] = 'Assess Admin';
$patterns['focus']['title'] = 'Assess Admin';
$patterns['header'] = array(
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="/content/images/prototype-actors/allisongrayce.jpg">',
    'mainNav' => '
        <li class="{active=home}"><a href="/demo-admin.php">Home</a></li>
        <li class="{active=results}"><a href="/demo-admin-assessment-results.php">Assessment Results</a></li>
        <li class="{active=users}"><a href="/demo-admin-manage-users.php">Manage Users</a></li>',
    'logoLarge' => './content/images/logo-assess-large.png',
    'mainNavActive' =>'home',
    'alerts' => '',
    'userInstitution' => '',
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <section class="section section-main section-box" data-equalize="layout-columns">
          <section class="section-admin-dashboard">

            <section class="section">

              <div class="container">
                <div class="row">
                 <div class="col-sm-6 col-md-3">
                  <div class="panel panel-default panel-card panel-card-animate">
                    <div class="panel-heading">
                      <img src="/content/images/iStock-611765774.jpg"/>
                    </div>

                    <div class="panel-body text-center">
                      <h4 class="panel-header">Manage Users</h4>
                      <i class="fa fa-users fa-3x admin-action-icon text-primary"></i>
                      <div class="card-actions">
                        <p>
                          <a href="/demo-admin-manage-users.php" class="btn btn-sm btn-primary">Edit Users</a>
                        </p>

                        <p>
                          <a href="/demo-admin-user-acquire.php" class="btn btn-sm btn-primary">Add Users</a>
                        </p>
                      </div>

                    </div>


                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="panel panel-default panel-card">
                    <div class="panel-heading">
                      <img src="/content/images/iStock-527033580.jpg"/>

                    </div>

                    <div class="panel-body text-center">
                      <h4 class="panel-header">Assessment Results</h4>
                      <p style="padding-top:10px">
                        <a href="/demo-admin-assessment-results.php" class="btn btn-sm btn-primary">View Results</a>
                      </p>
                    </div>

                  </div>


                </div>
              </div>

            </section>

          </div>
        </div>
      </div>

    </section>
  </section>
  <!-- /section-main -->
</div>
<!-- /column -->


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
  $(function() {

      $('.branding a').click(function(e){
        e.preventDefault();
        window.location.href="/demo-start.php";
      });
    });
  </script>

  <?= createSiteEnd(); ?>