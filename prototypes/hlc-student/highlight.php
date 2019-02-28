<?php

include "includes/helpers/helpers.php";

$patterns['header']['classes'] = array('site-header-min');
$patterns['footer']['classes'] = array('site-footer-min');

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<div class="layout layout-highlight">
    <div class="container">
        <section class="section section-box section-highlight">
            <div class="highlight-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <div class="highlight-remember">
                <label class="checkbox"><input type="checkbox"> Don't show this message again</label>
            </div>
            <div class="highlight-action">
                <a href="/" class="btn btn-success">Continue</a>
            </div>

        </section>
    </div><!-- /container -->
</div><!-- /layout -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
$(function(){
    $('label.answer').click(function(e){
        $t = $(this),
        $a = $t.closest('.question').find('.answer');
        $a.removeClass('selected').has('input:checked').addClass('selected');
    });
});
</script>
<?= createSiteEnd(); ?>