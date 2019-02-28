<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Admin Group';
$patterns['focus']['title'] = 'Admin Group';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

    <div class="layout layout-min">
        <div class="container">
            <section class="section section-box section-main">
                <section class="section">
                    <h2 class="page-header">Description</h2>
                    <p>Not Provided</p>
                </section>
                <section class="section">
                    <h2 class="page-header">Admin Users in this Group</h2>

                    <?php

                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout','slat-simple')),
                            array('data-filter-category',array('0')),
                        ),
                        'title' => 'Demonstration, Jack H',
                        'meta' => array(
                            array(
                                'label' => 'Affiliation: ',
                                'value' => 'ACME General Medical Center',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            ),
                            array(
                                'label' => 'Username:',
                                'value' => 'demo1',
                            )
                        ),
                        'action' => array()
                    );

                    echo createSlat($slat);

                    ?>

                </section>

                <?php
                    $stickybar = array(
                        'sets' => array(
                            array(
                                'position' => 'left',
                                'html' => '<a class="btn btn-success" href="/admin-edit-group.php">Edit Admin Group</a>',
                            ),
                            array(
                                'position' => 'right',
                                'html' => '<a class="btn btn-danger" href="#" id="btnDelete">Delete Admin Group</a>',
                            ),
                        ),
                    );
                    echo createStickybar($stickybar);
                ?>

                <div class="form-modified">Last Modified: Nov 10, 2015 at 4:34 AM ET by demo1</div>

            </section>
        </div>
    </div>
    <!-- /layout -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>

