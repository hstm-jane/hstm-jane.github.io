<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Stickybar Helper Examples';
$patterns['focus']['title'] = 'Stickybar Helper Examples';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout">
    <div class="container">
        <section class="section section-main section-box">

            <?php

                $focusNav = array(
                    'tabs' => array(
                        array(
                            'active' => true,
                            'id' => 'tab-1',
                            'label' => 'Example 1',
                        ),
                        array(
                            'id' => 'tab-2',
                            'label' => 'Example 2',
                        ),
                        array(
                            'id' => 'tab-3',
                            'label' => 'Example 3',
                        ),
                    ),
                );
                echo createFocusNav($focusNav);

            ?>

            <div class="tab-content">

                <div class="tab-pane fade in active" id="tab-1">
                    <h2>Basic Stickybar</h2>
                    <p>One Button, One Section</p>
                    <div style="height:800px;"></div>
                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'html' => '<a href="#" class="btn btn-success">Green</a>',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>
                </div>
                <div class="tab-pane fade" id="tab-2">
                    <h2>Two-section Stickybar</h2>
                    <p>Left &amp; Right Sections</p>
                    <div style="height:800px;"></div>
                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'position' => 'left',
                                    'html' => '<a href="#" class="btn btn-success">Green</a> <a href="#" class="btn btn-default">Default</a>',
                                ),
                                array(
                                    'position' => 'right',
                                    'html' => '<a href="#" class="btn btn-danger">Danger</a>',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>
                </div>
                <div class="tab-pane fade" id="tab-3">
                    <h2>Complex Stickybar</h2>
                    <p>Two Sections, Multiple Button Sets w/ Breakpoints for Visibility</p>
                    <div style="height:800px;"></div>
                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'position' => 'left',
                                    'classes' => array('hidden-xs','hidden-sm'),
                                    'html' => '<a href="#" class="btn btn-success">Green Long Label Button</a> <a href="#" class="btn btn-default">Default Long Label Button</a>',
                                ),
                                array(
                                    'position' => 'left',
                                    'classes' => array('visible-xs','visible-sm'),
                                    'html' => '<a href="#" class="btn btn-success">Green</a> <a href="#" class="btn btn-default">Default</a>',
                                ),
                                array(
                                    'position' => 'right',
                                    'html' => '<a href="#" class="btn btn-danger">Danger</a>',
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
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
    <script>
        $(function(){
            $('.nav-focus li a').on('shown.bs.tab', function (e) {
                $(window).resize();
            });
        });
    </script>
<?= createSiteEnd(); ?>