<?php

include 'includes/helpers.php';

$options = json_decode('{
    "head": {
        "title" : "Alerts"
    },
    "header": {
        "nav_main_active": ""
    },
    "focus": {
        "title": "My Alerts",
        "meta": [
            ["Total:","55"],
            ["Unread:","3"]
        ]
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
        <div class="row">
            <div class="col-md-9">
                <section class="section section-main section-box" data-equalize="layout-columns">

                    <?php

                        $focusNav = array(
                            'tabs' => array(
                                array(
                                    'active' => true,
                                    'url' => 'alerts.php',
                                    'label' => 'Messages',
                                ),
                                array(
                                    'url' => 'alerts-preferences.php',
                                    'label' => 'Preferences',
                                ),
                            ),

                        );
                        echo createFocusNav($focusNav);
                    ?>

                    <section class="section">

                        <?php
                            for ($i=0; $i < 10; $i++) {
                        ?>

                        <div class="slat<?php if($i < 3){ echo ' slat-attention '; } ?>">
                            <div class="slat-manage">
                                <input type="checkbox" class="control-checkbox">
                                <div class="row">
                                    <div class="col-sm-8"><a href="#modal-alert" class="title" data-toggle="modal">This is the alert title</a></div>
                                    <div class="col-sm-4">Jan 12, 2013 8:00am</div>
                                </div>
                            </div>
                        </div>

                        <?php
                            }
                        ?>
                    </section>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'position' => 'left',
                                    'classes' => array('hidden-xs'),
                                    'html' => '
                                        <a href="#" class="btn btn-default">Select All</a>
                                        <a href="#" class="btn btn-default">Clear Selections</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    ',
                                ),
                                array(
                                    'position' => 'left',
                                    'classes' => array('visible-xs'),
                                    'html' => '
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                Options <i class="fa fa-caret-up"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Select All</a></li>
                                                <li><a href="#">Clear Selections</a></li>
                                                <li><a href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    ',
                                ),
                                array(
                                    'position' => 'right',
                                    'classes' => array('hidden-xs'),
                                    'html' => '
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 15 <i class="fa fa-caret-up"></i></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="active"><a href="#">20 per page</a></li>
                                                <li><a href="#">50 per page</a></li>
                                                <li><a href="#">100 per page</a></li>
                                                <li><a href="#">250 per page</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    ',
                                ),
                                array(
                                    'position' => 'right',
                                    'classes' => array('visible-xs'),
                                    'html' => '
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    ',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>

                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>Note</h3>
                        <p>Alerts older than 60 days will be automatically deleted.</p>
                        <p>These alerts are only for <strong>Jupiter Healthcare</strong></p>
                    </section>
                    <?php include_sidebar() ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->

<!-- Modal -->
<div id="modal-alert" class="modal modal-lg modal-frame fade" tabindex="-1" role="dialog" aria-labelledby="modal-alert-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h3 id="modal-alert-label" class="modal-title">This is the alert title</h3>
                <p>Jan 12, 2013 8:00am</p>
            </div>
            <div class="modal-body" style="padding: 0;">
                <iframe src="http://sturdy.io"></iframe>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs-6">
                        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
                    </div>
                    <div class="col-xs-6">
                        <!-- <div class="btn-group pull-right">
                            <button class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                            <button class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /modal -->
<?php
include_site_footer($options);
include_site_scripts($options);
include_site_end($options);
?>