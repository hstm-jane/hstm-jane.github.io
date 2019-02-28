<?php

include "includes/helpers/helpers.php";

$patterns['footer']['classes'] = array('site-footer-min');

$patterns['start']['title'] = 'RN: Emergency Skills Knowledge Assessment';
$patterns['header']['classes'] = array('site-header-min');




$patterns['footer']['classes'] = array('site-footer-min');

?>
<?= createSiteStart($patterns['start']); ?>
<div class="no-focus">
<?= createHeader($patterns['header']); ?>

<?= createFocus($patterns['focus']); ?>
</div>

<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <section class="section section-main section-box" data-equalize="layout-columns">




                    <section class="section ">
                        <h2>You are about to start a Knowledge Assessment.</h2>
                        <ul class="list-links" >
                            <li>Estimated Time: <b>30m</b>.</li>
                            <li>Length: <b>40</b> question(s).</li>
                            <li>This test is not timed. </li>
                        </ul>
                    </section>

<a href="javascript:windowClose;">close</a>
<input type="button" value="Close this window" onclick="windowClose();">

                    <section class="section" id="jump-description">
                        <h2>Description</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </section>
<?php
                $stickybar = array(
                'sets' => array(
                    array(
                        'position' => 'left',
                        'html' => '<a href="http://hstm-assess-rx.patternmanager.com/knowledge-assessment.php" target="_blank" class="btn btn-success btn-close-window" data-toggle="modal">Start Assessment</a> <input type="button" class="btn btn-default"  value="Cancel" >',

                    ),
                ),
        );
        echo createStickybar($stickybar);
        ?>
                </section><!-- /section-main -->

            </div><!-- /column -->


        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->


<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script language="javascript" type="text/javascript">
var currentURL = window.location.href;
$(document).ready(function(){


});

function windowClose() {
window.open(currentURL,'_parent','').close();

}

</script>
<?= createSiteEnd(); ?>
