<?php

// GET CHANGELOG
include_once "../shared/changelog/changelog.php";
$releases = getChangelog();

// PROCESS RELEASES
$releases_html = '';
foreach ( $releases as $release ) {
    $releases_html .= '<article class="changelog__entry">';
    $releases_html .= '<h1 class="changelog__version">' . $release['version'] . ' <small class="changelog__date">' . date('M j, Y G:i:s', strtotime($release['published'])) . ' CT </small></h1>';
    $releases_html .= '<div class="changelog__notes">' . $release['notes'] . '</div>';
    $releases_html .='</article>';
}


include 'includes/helpers.php';

$options = json_decode('{
    "head": {
        "title" : "UIL Changelog"
    },
    "header":{
        "class" : ["site-header-min"]
    },
    "focus": {
        "title": "UIL Changelog"
    },
    "footer":{
        "class":["site-footer-min"]
    }
}',true);
include_site_start($options);
//include_site_header($options);
$patterns['header']['mainNavActive'] = 'none';
echo createHeader($patterns['header']);
include_renewed_focus_bar($options);
?>
<div class="layout">
    <div class="container">
        <section class="section section-main section-box">

            <?= $releases_html; ?>

        </section><!-- /section-main -->
    </div><!-- /container -->
</div><!-- /layout -->

<?php
include_site_footer($options);
include_site_scripts($options);
include_site_end($options);
?>