<?php


include 'includes/helpers.php';

$options = json_decode('{
    "head": {
        "title" : "Catalog"
    },
    "header": {
        "nav_main_active": "catalog"
    },
    "footer": {
        "promo" : false
    }
}',true);

include_site_start($options);
//include_site_header($options);
$patterns['header']['mainNavActive'] = 'none';
echo createHeader($patterns['header']);
?>
<div class="focus focus-error focus-error-404">
    <div class="container">
        <div class="primary">
            <div class="row">
                <div class="col-sm-7 col-sm-offset-5 col-md-6 col-md-offset-4">
                    <section class="section">
                        <h1>Something seems to be&nbsp;missing</h1>
                        <p>Sorry, we couldn't find the page you were looking for.</p>
                        <p><a href="index.php" class="btn btn-lg btn-focus">Continue <i class="fa fa-chevron-right"></i></a></p>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_site_footer($options);
include_site_scripts($options);
include_site_end($options);
?>