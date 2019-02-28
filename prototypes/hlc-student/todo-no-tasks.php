<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My To-Do List';
$patterns['focus']['title'] = 'My To-Do List';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Total Tasks:',
        'value' => '0 ',
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
                      <?php if ( isset($_GET['rater'])) { ?>
                        <div class="alert alert-info alert-nudge ">
                            <div class="nudge-container">
                                <div class="title" ><i class="fa fa-flag"></i>
                                    <a href="/assessment-overview.php" >You have 19 assessment tasks as a manager or rater.</a> 
                                </div>
                                 <div class="action">
                                        <a class="btn btn-sm btn-default" href="assessment-overview.php">
                                            View 
                                            <i class="fa fa-fw fa-chevron-right visible-xs"></i>
                                        </a>
                                    </div>
                               
                            </div>
                        </div>
                        <?php } ?>
                        <div class="slat">
                            <div class="slat-message">
                                <h3>You're up to date, but there's always room to grow.</h3>
                                <a href="catalog.php" class="btn btn-success">Find an Elective in the Catalog</a>
                            </div>
                        </div>
                    </section>
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php include_sidebar() ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
    <script src="/scripts/healthstream.tours/plugin/bootstrap-tour.js"></script>
    <script src="/scripts/healthstream.tours/localization/localization-eng-tour.js"></script>
    <script src="/scripts/healthstream.tours/tours/to-do-tour.js"></script>
<?= createSiteEnd(); ?>