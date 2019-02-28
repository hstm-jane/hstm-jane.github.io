<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Catalog';
$patterns['header']['mainNavActive'] = 'catalog';
$patterns['focus']['title'] = 'Catalog';
$patterns['focus']['type'] = 'search';
$patterns['focus']['search'] = array(
    'placeholder' => 'Search',
    'url' => 'catalog-ajax-results.php',
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout">
    <div class="container">
        <section class="section section-carousel hidden-print">
            <div>
                <div class="hs-item">
                    <div class="hs-item-image" style="background-image:url('/content/images/catalog-CE-Center.jpg');"></div>
                    <div class="hs-item-text">
                        <h2>CE Center for You <small>Unlimited Access to Education</small></h2>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                    <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
                </div>
            </div>
            <div>
                <div class="hs-item">
                    <div class="hs-item-image" style="background-image:url('/content/images/catalog-OneSource.png');"></div>
                    <div class="hs-item-text">
                        <h2>OneSource <small>Medical Product Training</small></h2>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                    <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
                </div>
            </div>
            <div>
                <div class="hs-item">
                    <div class="hs-item-image" style="background-image:url('/content/images/catalog-Connect2Know.png');"></div>
                    <div class="hs-item-text">
                        <h2>Connect2Know <small>Wound Care Resource Center</small></h2>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                    <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
                </div>
            </div>
            <div>
                <div class="hs-item">
                    <div class="hs-item-image" style="background-image:url('/content/images/catalog-template.png');"></div>
                    <div class="hs-item-text">
                        <h2>Feature #4 <small>with additional text</small></h2>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                    <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
                </div>
            </div>
            <div>
                <div class="hs-item">
                    <div class="hs-item-image" style="background-image:url('/content/images/catalog-template.png');"></div>
                    <div class="hs-item-text">
                        <h2>Feature #5 <small>with additional text</small></h2>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                    <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
                </div>
            </div>
        </section>
        <section class="section section-main section-box catalog-portal">
            <div class="row">
                <div class="col-md-3">
                    <section class="section catalog-sidebar" data-equalize="layout-columns">
                        <nav class="category-slider">
                            <div class="cs-wrap">
                                <h2>Categories</h2>
                                <ul></ul>
                            </div>
                        </nav>
                    </section>
                </div>
                <div class="col-md-9" data-equalize="layout-columns">
                    <section class="section catalog-results hidden-xs hidden-sm">
                        <h2>Results <small>Showing 1-10 of <span class="catalog-results-count"></span></small></h2>
                        <div id="catalog-results"></div>
                    </section>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'classes' => array('hidden-xs','hidden-sm'),
                                    'html' => '<a href="catalog-results.php" class="btn btn-success">View More Results</a>',
                                ),
                                array(
                                    'classes' => array('visible-xs','visible-sm'),
                                    'html' => '<a href="catalog-results.php" class="btn btn-success">View <span class="catalog-results-count"></span> Results</a>',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>

                </div>
            </div>
        </section>
    </div><!-- /container -->
</div><!-- /layout -->

<div class="modal fade" id="modal-splash">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-splash">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="modal-splash-image">
                            <img src="/content/images/catalog-splash-donotuse.png">
                        </div>
                    </div>
                    <div class="col-sm-8 modal-splash-title">
                        <h1>Title of splash page</h1>
                        <p class="lead">Unlimited Access to Education</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 modal-splash-bullet">
                        <p><strong>Search</strong> for courses by category, by keyword search or both</p>
                    </div>
                    <div class="col-sm-4 modal-splash-bullet">
                        <p><strong>Enroll</strong> in courses and they will appear on your To Do list</p>
                    </div>
                    <div class="col-sm-4 modal-splash-bullet">
                        <p><strong>Complete</strong> courses for credit and recognition found on your transcript</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 modal-splash-reminder">
                        <p>Remember to complete your profile in order to receive CE Credit</p>
                    </div>
                    <div class="col-sm-4">
                        <a href="catalog-results.php" class="btn btn-success btn-lg btn-block">Get Started</a>
                        <div class="form-group">
                            <label class="checkbox"><input type="checkbox"> Don't show this again</label>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script src="/scripts/healthstream.catalog.js"></script>
<?= createSiteEnd(); ?>