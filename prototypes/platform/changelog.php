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

include "includes/helpers.php";

$patterns['start']['title'] = 'UIL Changelog';
$patterns['header']['mainNavActive'] = false;
$patterns['focus']['title'] = 'UIL Changelog';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout">
    <div class="container">
        <section class="section section-main section-box">

            <?= $releases_html; ?>

        </section><!-- /section-main -->
    </div><!-- /container -->
</div><!-- /layout -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>