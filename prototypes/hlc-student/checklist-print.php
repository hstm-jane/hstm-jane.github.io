<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Checklist for Jane Doe';
$patterns['header']['classes'] = array('site-header-min');
$patterns['focus']['title'] = 'Checklist for Jane Doe';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-checklist',
    'type' => 'Checklist',
);
$patterns['focus']['meta_primary'] = array(
    array(
        'label' => 'From Course:',
        'value' => '<a href="course.php" class="meta-value">Checklist Course</a>',
        'attributes' => array(
            array('class','meta-hidden-xs'),
        )
    )
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Items:',
        'value' => '5',
    ),
    array(
        'label' => 'Due:',
        'value' => date('M j, Y'),
    ),
);
$patterns['footer']['classes'] = array('site-footer-min');

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<style>
    @media only print {
        .site-header a[href]:after { content: ""; }
        .focus { border: none; }
        .focus-pageheader .fph-separator { display: none; }
        .focus-pageheader { border-bottom: 1px solid #CCC; }
        .focus-pageheader .fph-icon { border: 1px solid #CCC; }
        .focus-pageheader .meta a.meta-value { border: none; }
        .focus-pageheader .meta a.meta-value[href]:after { content: ""; }
        .site-footer .focus-promo,
        .site-footer .links {
            display: none;
        }
        .checklist-btn-pass,
        .checklist-btn-fail,
        .checklist-btn-skip {
            border: 1px dotted #CCC;
            color: #ccc;
        }
        .checklist-btn-pass.selected,
        .checklist-btn-fail.selected,
        .checklist-btn-skip.selected {
            border: 2px solid #000;
            color: #000 !important;
            font-weight: bold;
            text-transform: uppercase;
        }
        .slat { page-break-inside: avoid; }
    }
</style>
<div class="layout">
    <div class="container">
        <section class="section section-main section-box" data-equalize="layout-columns">
            <section class="section">
                <h2>A Section Title</h2>
                <div class="checklist-item checklist-item-review">
                    <input type="hidden" name="checklist-item-1">
                    <div class="checklist-row">
                        <div class="checklist-col checklist-number"><span>1</span></div>
                        <div class="checklist-col checklist-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="checklist-comments">
                                <div class="collapse-group collapse">
                                    <h5>Comment</h5>
                                    <textarea class="form-control"></textarea>
                                </div>
                                <a href="#" class="collapse-toggle" data-toggle-text="Add Comment|Remove Comment">Add Comment<i class="fa fa-fw fa-caret-down"></i></a>
                            </div>
                        </div>
                        <div class="checklist-col checklist-actions">
                            <button class="btn btn-default checklist-btn-pass">Yes</button>
                            <button class="btn btn-default checklist-btn-fail">No</button>
                        </div>
                    </div>
                </div>
                <div class="checklist-item checklist-item-review">
                    <input type="hidden" name="checklist-item-2">
                    <div class="checklist-row">
                        <div class="checklist-col checklist-number"><span>2</span></div>
                        <div class="checklist-col checklist-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="checklist-comments">
                                <div class="collapse-group collapse">
                                    <h5>Comment</h5>
                                    <textarea class="form-control"></textarea>
                                </div>
                                <a href="#" class="collapse-toggle" data-toggle-text="Add Comment|Remove Comment">Add Comment<i class="fa fa-fw fa-caret-down"></i></a>
                            </div>
                        </div>
                        <div class="checklist-col checklist-actions checklist-actions-3btn">
                            <button class="btn btn-sm btn-default checklist-btn-pass">Yes</button>
                            <button class="btn btn-sm btn-default checklist-btn-fail">No</button>
                            <button class="btn btn-sm btn-default checklist-btn-skip">N/A</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <h2>A Section Title</h2>
                <div class="checklist-item checklist-item-review">
                    <input type="hidden" name="checklist-item-3">
                    <div class="checklist-row">
                        <div class="checklist-col checklist-number"><span>1</span></div>
                        <div class="checklist-col checklist-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="checklist-comments">
                                <div class="collapse-group collapse">
                                    <h5>Comment</h5>
                                    <textarea class="form-control"></textarea>
                                </div>
                                <a href="#" class="collapse-toggle" data-toggle-text="Add Comment|Remove Comment">Add Comment<i class="fa fa-fw fa-caret-down"></i></a>
                            </div>
                        </div>
                        <div class="checklist-col checklist-actions">
                            <button class="btn btn-default checklist-btn-pass">Yes</button>
                            <button class="btn btn-default checklist-btn-fail">No</button>
                        </div>
                    </div>
                </div>
                <div class="checklist-item checklist-item-review">
                    <input type="hidden" name="checklist-item-4">
                    <div class="checklist-row">
                        <div class="checklist-col checklist-number"><span>2</span></div>
                        <div class="checklist-col checklist-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="checklist-comments">
                                <div class="collapse-group collapse">
                                    <h5>Comment</h5>
                                    <textarea class="form-control"></textarea>
                                </div>
                                <a href="#" class="collapse-toggle" data-toggle-text="Add Comment|Remove Comment">Add Comment<i class="fa fa-fw fa-caret-down"></i></a>
                            </div>
                        </div>
                        <div class="checklist-col checklist-actions checklist-actions-3btn">
                            <button class="btn btn-sm btn-default checklist-btn-pass">Yes</button>
                            <button class="btn btn-sm btn-default checklist-btn-fail">No</button>
                            <button class="btn btn-sm btn-default checklist-btn-skip">N/A</button>
                        </div>
                    </div>
                </div>
                <div class="checklist-item checklist-item-review">
                    <input type="hidden" name="checklist-item-5">
                    <div class="checklist-row">
                        <div class="checklist-col checklist-number"><span>3</span></div>
                        <div class="checklist-col checklist-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="checklist-comments">
                                <div class="collapse-group collapse">
                                    <h5>Comment</h5>
                                    <textarea class="form-control"></textarea>
                                </div>
                                <a href="#" class="collapse-toggle" data-toggle-text="Add Comment|Remove Comment">Add Comment<i class="fa fa-fw fa-caret-down"></i></a>
                            </div>
                        </div>
                        <div class="checklist-col checklist-actions">
                            <button class="btn btn-default checklist-btn-pass">Yes</button>
                            <button class="btn btn-default checklist-btn-fail">No</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <h2>Comments</h2>
                <textarea class="form-control" style="height:120px;"></textarea>
            </section>
        </section><!-- /section-main -->
    </div><!-- /container -->
</div><!-- /layout -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>