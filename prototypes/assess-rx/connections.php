<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Education Topics';
$patterns['focus']['title'] = 'Education Topics';


$patterns['header'] = array(
'mainNav' => '
<li class="{active=prescriptions}"><a href="/assess-rx.php">Rx List</a></li>
<li class="{active=completed}"><a href="/completed.php">Completed</a></li>
<li class="{active=topics}"><a href="/connections.php">Education Topics</a></li>
<li class="{active=admin} dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <i class="fa fa-angle-down"></i></a>
<ul class="dropdown-menu">
<li><a href="#">Assessment Results</a></li>
<li><a href="/user-admin.php">User Administration</a></li>

</ul>
</li>

<li class="disabled"><a href="#">Help</a></li>
<li class="visible-xs"><a href="#">Logout</a></li>',
'mainNavActive' =>'topics',
'logoLarge' => './content/images/logo.png'

);




?>
  <?= createSiteStart($patterns['start']); ?>
    <?= createHeader($patterns['header']); ?>
      <?= createFocus($patterns['focus']); ?>

        <div class="layout layout-connections">
          <div class="container">
            <section class="section section-main section-box">
              <h2>
<div class="row">
<div class="col-md-3">
Education Topics
</div>
<div class="col-md-9">
<div class="form-group">
<input type="textbox" class="form-control" placeholder="Search Topics">
</div>
</div>


</div>
</h2>
            </section>
          </div>
          <!-- /container -->
        </div>
        <!-- /layout -->

        <?= createFooter($patterns['footer']); ?>
          <?= createPrototypeNav(); ?>
            <?= createSiteScripts(); ?>
              <?= createSiteEnd(); ?>