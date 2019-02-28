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
<div class="focus focus-error">
    <div class="container">
        <div class="primary">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-5 col-md-offset-4">
                    <section class="section">
                        <h1>Looks like something&nbsp;is&nbsp;broken</h1>
                        <p>Something unexpected happened.<br>We're looking into it, but in the meantime&hellip;</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="index.php" class="btn btn-default btn-block">View my To Do list</a>
                            </div>
                            <div class="col-sm-6">
                                <a href="transcript.php" class="btn btn-default btn-block">View my Transcript</a>
                            </div>
                        </div>
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