<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Slat Helper Examples';
$patterns['header']['mainNavActive'] = false;
$patterns['focus']['title'] = 'Slat Helper Examples';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-main section-box" data-equalize="layout-columns">

                    <section class="section">
                        <h3>A slat using only default values</h3>
                        <?php

                            echo createSlat();

                        ?>
                    </section>

                    <section class="section">
                        <h3>A slat with a description</h3>
                        <?php

                            $slat = array(
                                'description' => 'This is a rarely used description',
                            );

                            echo createSlat($slat);

                        ?>
                    </section>

                    <section class="section">
                        <h3>A slat with customized values</h3>
                        <?php

                            $slat = array(
                                'title' => '<a href="#">This is my custom title</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Curriculum',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'In Progress',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => '<span class="meta-callout-label">Due:</span>' . date('M d, Y'),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Resume',
                                    'link' => '#',
                                )
                            );

                            echo createSlat($slat);

                        ?>
                    </section>

                    <section class="section">
                        <h3>A slat with custom meta html</h3>
                        <?php

                            $slat = array(
                                'meta' => '
                                    <ul class="meta">
                                        <li><span class="meta-type"><i class="hs-icons-checklist-sm"></i> Checklist</span></li>
                                        <li><span class="meta-label">Custom:</span><span class="meta-value"><a href="#">A Custom Linked Value</a></span></li>
                                    </ul>',
                            );

                            echo createSlat($slat);

                        ?>
                    </section>

                    <section class="section">
                        <h3>A slat with custom button html</h3>
                        <?php

                            $slat = array(
                                'title' => 'Course 102',
                                'meta' => array(
                                    array(
                                        'type' => 'Course',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Not Yet Started',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => '<span class="meta-callout-label">Due:</span>' . date('M d, Y'),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
                                )
                            );

                            echo createSlat($slat);

                        ?>
                    </section>

                    <section class="section">
                        <h3>A slat with a success button</h3>
                        <?php

                            $slat = array(
                                'title' => '<a href="#">Nursing Class</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Live Class',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Not Registered',
                                    ),
                                    array(
                                        'label' => 'Starts: ',
                                        'value' => '<span class="meta-callout-label">Starts:</span>' . date('M d, Y'),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single-success',
                                    'content' => 'Register<i class="fa fa-plus visible-xs"></i>',
                                    'link' => '#',
                                )
                            );

                            echo createSlat($slat);

                        ?>
                    </section>

                    <section class="section">
                        <h3>A slat with a danger button</h3>
                        <?php

                            $slat = array(
                                'title' => '<a href="#">Nursing Class</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Virtual Class',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Not Registered',
                                    ),
                                    array(
                                        'label' => 'Starts: ',
                                        'value' => '<span class="meta-callout-label">Starts:</span>' . date('M d, Y'),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single-danger',
                                    'content' => 'Drop<i class="fa fa-times visible-xs"></i>',
                                    'link' => '#',
                                )
                            );

                            echo createSlat($slat);

                        ?>
                    </section>

                    <section class="section">
                        <h3>A slat with a split button</h3>
                        <?php

                            $slat = array(
                                'title' => '<a href="#">An Elective Course</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Course',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'In Progress',
                                    ),
                                    array(
                                        'label' => 'Due:',
                                        'value' => 'Elective',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-split',
                                    'options' => array(
                                        array(
                                            'content' => 'Resume',
                                            'link' => '#'
                                        ),
                                         array(
                                            'content' => 'Un-enroll',
                                            'link' => '#',
                                        ),
                                    )
                                ),
                            );

                            // button is default grey
                            echo createSlat($slat);

                            // make the button green
                            $slat['action']['type'] = 'action-split-success';
                            echo createSlat($slat);

                            // make the button red
                            $slat['action']['type'] = 'action-split-danger';
                            echo createSlat($slat);

                        ?>
                    </section>

                    <section class="section">
                        <h3>A slat with an options button</h3>
                        <?php

                            $slat = array(
                                'title' => '<a href="#">An Elective Course</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Course',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'In Progress',
                                    ),
                                    array(
                                        'label' => 'Due:',
                                        'value' => 'Elective',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-multi',
                                    'options' => array(
                                        array(
                                            'content' => 'Resume',
                                            'link' => '#'
                                        ),
                                         array(
                                            'content' => 'Un-enroll',
                                            'link' => '#',
                                        ),
                                    )
                                ),
                            );

                            // button is default grey
                            echo createSlat($slat);

                            // make the button green
                            $slat['action']['type'] = 'action-multi-success';
                            echo createSlat($slat);

                            // make the button red
                            $slat['action']['type'] = 'action-multi-danger';
                            echo createSlat($slat);

                        ?>
                    </section>

                    <section class="section">
                        <h3>A slat with attention</h3>
                        <?php

                            $slat = array(
                                'attributes' => array(
                                    array('class', array('slat','slat-callout','slat-attention')),
                                ),
                            );

                            echo createSlat($slat);

                        ?>
                    </section>

                    <section class="section">
                        <h3>A slat with nested slats - both shown and hidden</h3>
                        <?php

                            $nested = createSlat(array(
                                'title' => 'A Nested Slat',
                            ));

                            $slat = array(
                                'title' => 'A Slat w/ Nested Slats',
                                'nested' => array(
                                    'show' => array($nested,$nested),
                                    'hide' => array($nested,$nested),
                                )
                            );

                            echo createSlat($slat);

                        ?>
                    </section>

                    <section class="section">
                        <h3>A slat with nested content (mixed)</h3>
                        <?php

                            $nested = createSlat(array(
                                'title' => 'A Nested Slat',
                            ));

                            $content = '
                                <section class="section">
                                    <h4>Section Title</h4>
                                    <p>This is some dummy content</p>
                                </section>
                            ';

                            $slat = array(
                                'title' => 'A Slat w/ Nested Content',
                                'nested' => array(
                                    'hide' => array($content,$content,$nested),
                                )
                            );

                            echo createSlat($slat);

                        ?>
                    </section>

                    <section class="section">
                        <h3>A slat with nested content and customized toggle text</h3>
                        <?php

                            $nested = createSlat(array(
                                'title' => 'A Nested Slat',
                            ));

                            $slat = array(
                                'title' => 'A Slat w/ Nested Slats',
                                'nested' => array(
                                    'hide' => array($nested,$nested),
                                ),
                                'toggle' => array('Show More','Show Less'),
                            );

                            echo createSlat($slat);

                        ?>
                    </section>

                    <section class="section">
                        <h3>Slats with statuses</h3>
                        <?php

                            // complete
                            $slat = array(
                                'title' => 'Complete Status',
                                'action' => array(
                                    'type' => 'status-complete',
                                ),
                            );

                            echo createSlat($slat);

                            // fail
                            $slat = array(
                                'title' => 'Fail Status',
                                'action' => array(
                                    'type' => 'status-fail',
                                ),
                            );

                            echo createSlat($slat);

                            // pending
                            $slat = array(
                                'title' => 'Pending Status',
                                'action' => array(
                                    'type' => 'status-pending',
                                ),
                            );

                            echo createSlat($slat);

                        ?>
                    </section>

                    <section class="section">
                        <h3>An action-less callout slat</h3>
                        <?php

                            $nested = createSlat(array(
                                'attributes' => array(
                                    array('class','slat'),
                                ),
                                'meta' => array(
                                    array(
                                        'label' => 'Meta Label:',
                                        'value' => 'Meta Value',
                                    ),
                                ),
                                'action' => array(),
                            ));

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-callout-wr')),
                                ),
                                'nested' => array(
                                    'show' => array($nested)
                                ),
                                'action' => array(),
                            );

                            echo createSlat($slat);

                        ?>
                    </section>

                    <section class="section">
                        <h3>A slat that is muted</h3>
                        <?php

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-muted')),
                                ),
                                'action' => array(),
                            );

                            echo createSlat($slat);

                        ?>
                    </section>

                    <section class="section">
                        <h3>A slat with a small-screen sized button (slat-modal)</h3>
                        <?php

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-modal')),
                                ),
                            );

                            echo createSlat($slat);

                        ?>
                    </section>



                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php include_sidebar() ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>