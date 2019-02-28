<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Institution Search';
$patterns['focus']['title'] = 'Institution  Search';
$patterns['header']['mainNavActive'] = 'scheduling';

$patterns['search']['filters'] = array(
    array(
        "state" => 'static', // static / open / closed
        "header" => 'Institution Name',
        "controls" => array(
           '<div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" value="Search">
                    <span class="input-group-addon js-fake-search"><i class="fa fa-search"></i></span>
                </div>
            </div>',
        )
    ),
    array(
        "state" => 'static', // static / open / closed
        "header" => 'City &amp; State',
        "controls" => array(
           '<div class="form-group">
                <label class="control-label">City</label>
                <input type="text" class="form-control" value="" placeholder="City">
            </div>',
            '<div class="form-group">
                <label class="control-label">State</label>
                <input type="text" class="form-control" value="" placeholder="State">
            </div>',
            '<div class="form-group">
                <button class="btn btn-sm btn-default js-fake-search">Apply</button>
            </div>',
        )
    ),
    array(
        "state" => 'static', // static / open / closed
        "header" => 'ZIP Code',
        "controls" => array(
           '<div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" value="Search">
                    <span class="input-group-addon js-fake-search"><i class="fa fa-search"></i></span>
                </div>
            </div>',
        )
    ),

);

$patterns['search']['tags'] =array(
    array(
        'value' => 'State',
        'href' => '#',
        'class' => '',
    ),
    array(
        'value' => 'Country',
        'href' => '#',
        'class' => ''
    ),
);
?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>


<?php

$date_now = Date('U');
$date_rounded = $date_now - ($date_now % 1800) + 1800;
$date_future = $date_rounded + (3600 * 1);
?>
    <div class="layout layout-search">
        <div class="container">
            <section class="section section-main section-box">
                <div class="row">
                    <div class="col-md-3 hidden-xs hidden-sm">
                        <section class="section section-filters" data-equalize="layout-columns">
                            <h2>Refine Results</h2>
                            <?= createSearch($patterns['search']); ?>
                        </section>
                    </div>
                    <div class="col-md-9">
                        <section class="section section-results" data-equalize="layout-columns">
                            <section class="section section-results-header">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h2>Results</h2>
                                    </div>
                                </div>
                            </section>
                            <section class="section">
                                <div class="slat">
                                    <div class="slat-message">
                                        <h3>Find an Institution by Name, City &amp; State, or ZIP code</h3>
                                        <div class="visible-xs visible-sm">
                                            <a href="#modal-filter" class="btn btn-default" data-toggle="modal">Search</a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- /section-main -->
                        </section>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /row -->
            </section>
        </div>
        <!-- /container -->
    </div>
    <!-- /layout -->

    <!-- Refine Modal -->
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
    </div>
    <!-- / Refine Modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script src="/scripts/prototype.search-filters.js"></script>
<script>
    $(function(){
        $('body').on('click','.js-fake-search',function(){
            window.location.href = 'search-institutions-results.php';
        });
    });
</script>
<?= createSiteEnd(); ?>

