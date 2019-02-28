<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'RN: Emergency Assessment';
$patterns['header']['mainNavActive'] = 'todo';
$patterns['focus']['title'] = 'RN: Emergency Assessment';
$patterns['focus']['icon'] = array(
    'class' => 'fa-list fa',
    'type' => 'Clinical Development Assessment',
);

// $patterns['focus']['action'] = array(
//     'text' => 'Enroll <i class="fa fa-chevron-right"></i>',
//     'link' => 'payment.php',
// );
$patterns['focus']['supporting'] = ' ';
$patterns['focus']['meta_secondary'] = array(

    array(
        'label' => 'Est Time:',
        'value' => '30m',
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




                    <section class="section ">
                        <h2>You are about to start a Knowledge Assessment.</h2>
                        <ul class="list-links" >
                            <li>Estimated Time: <b>30m</b>.</li>
                            <li>Length: <b>40</b> question(s).</li>
                            <li>This test is not timed. </li>
                        </ul>
                    </section>



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
                        'html' => '<a href="http://hstm-assess-rx.patternmanager.com/knowledge-assessment.php" target="_blank" class="btn btn-success " data-toggle="modal">Start Assessment</a> <a href="/todo.php" class="btn btn-default " data-toggle="modal">Cancel</a>',

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

<div id="modal-author" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Course Author</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h2>Jane Doe</h2>
                </section>
                <section class="section">
                    <h3>This is a group header</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
                <section class="section">
                    <h3>This is a group header</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>
