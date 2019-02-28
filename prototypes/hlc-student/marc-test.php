<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Manage Peers';
$patterns['focus']['title'] = 'Additional Learning';
$patterns['search']['filters'] = array(
    array (
        'visible' => 'mobile',
        'header' => 'Sort',
        'controls' => array(
            '<select class="form-control js-select2">
                <option>Name</option>
                <option>Type</option>
                <option>Updated</option>
            </select>'
        )
    ),
    array(
        "state" => 'static', // static / open / closed
        "header" => 'Keyword',
        "controls" => array(
            '<div class="form-group">
                <input type="text" class="form-control" placeholder="Search" value="Lea">
            </div>'
        ),
    ),
    array(
        "state" => 'static', // static / open / closed
        "header" => 'Type',
        "controls" => array(
            '<div class="form-group">
                <select class="form-control">
                    <option>All</option>
                    <option selected>Evaluation</option>
                </select>
            </div>',
        ),
    ),
);
$patterns['search']['tags'] = array(
     array(
        'value' => 'Type: Evaluation',
        'href' => '#',
        'class' => '',
    ),
);

$evals = array(
    array('Event Evaluation','An evaluation to collect feedback on the event.'),
    array('Event Evaluation - Series','An evaluation to collect feedback on an event series.'),
    array('Instructor Evaluation','Collect feedback on instructor’s performance.'),
    array('Training Event Evaluation','An evaluation to collect feedback on the event.'),
    array('Training Event Evaluation - Series','An evaluation to collect feedback on an event series.'),
    array('Training Instructor Evaluation','Collect feedback on instructor’s performance.'),
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<style>
.checkable .slat {
    border-left: inherit;
}
.checkable-single > .select .icon {
    background-position: center 0;
}
.checkable-single.checkable-checked > .select .icon {
    background-position: center -30px;
}
</style>
<div class="layout layout-search">
    <div class="container">
        <section class="section section-main section-box">
            <div class="row">

                <div class="col-md-3 hidden-xs hidden-sm">
                    <section class="section section-filters" data-equalize="layout-columns">
                        <h2>Refine Results</h2>
                        <div class="search-filter search-filter--desktop">
                            <div class="search-filter__header">
                                <div class="search-filter__title">Search Terms</div>
                            </div>
                            <?= createTags($patterns['search']); ?>
                        </div>
                        <?= createSearch($patterns['search']); ?>
                    </section>
                </div>
                <div class="col-md-9">
                    <section class="section section-results" data-equalize="layout-columns">
                        <section class="section section-results-header">
                            <div class="row">
                                <div class="col-md-9">
                                    <h2>Results <small>Showing 1-6 of 6</small></h2>
                                    <div class="section section-refinement-applied">
                                        <h3>Refinements</h3>
                                        <div class="tag-group">
                                            <?= createTags($patterns['search']); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 hidden-xs hidden-sm">
                                    <div class="section-results-header-sort">
                                        <div class="dropdown">
                                            <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Name</a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#">Name</a></li>
                                                <li><a href="#">Type</a></li>
                                                <li class="active"><a href="#">Updated</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section">
                            <?php foreach( $evals as $i => $eval ) {

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat')),
                                ),
                                'title' => '<a href="#">'.$eval[0].'</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Evaluation',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Active',
                                    ),
                                    array(
                                        'label' => 'Updated:',
                                        'value' => date('M j, Y',strtotime('-'.(17 * $i).'days')),
                                        'attributes' => array(
                                            // array('class','meta-callout'),
                                        )
                                    ),
                                ),
                                'action' => array(),
                                'nested' => array(
                                    'hide' => array(
                                        '<section class="section">
                                            <h5>Description</h5>
                                            <p>'.$eval[1].'</p>
                                        </section>'
                                    ),
                                )
                            );

                            echo '<div class="checkable">';
                            echo createSlat($slat);
                            echo '<div class="select"><label><input type="checkbox" class="checkbox"><span class="icon"></span></label></div></div>';

                            } ?>
                        </section>

                        <?php
                            $stickybar = array(
                                'sets' => array(
                                    array(
                                        'position' => 'left',
                                        'classes' => array('visible-xs','visible-sm'),
                                        'html' => '<a href="/assessment-overview.php" class="btn btn-success js-checkable-dependent">Add</a> <a href="#modal-filter" class="btn btn-default" data-toggle="modal">Filter</a> <a href="/assessment-overview.php" class="btn btn-default">Cancel</a>',
                                    ),
                                    array(
                                        'position' => 'left',
                                        'classes' => array('visible-md','visible-lg'),
                                        'html' => '<a href="/assessment-overview.php" class="btn btn-success js-checkable-dependent">Add Selected</a> <a href="/assessment-overview.php" class="btn btn-default">Cancel</a>',
                                    ),
                                    array(
                                        'position' => 'right',
                                        'html' => '
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default disabled"><i class="fa fa-chevron-left"></i></a>
                                                <a href="#" class="btn btn-default disabled"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        ',
                                    )
                                ),
                            );
                            echo createStickybar($stickybar);
                        ?>
                    </section><!-- /section-main -->
                </div><!-- /column -->
            </div><!-- /row -->
        </section>


    </div><!-- /container -->
</div><!-- /layout -->


<!-- Refine Modal -->
<div id="modal-filter" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- / Refine Modal -->

<!-- Modal -->
<div id="modal-preview" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Statement Example 1</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h3>Accountability</h3>
                    <p>Takes ownership for decisions, methods and results of work within the scope of one’s role.</p>
                </section>
                <section class="section">
                    <h4 class="page-header">Behavioral Criteria</h4>
                    <div data-toggle="limit-height" data-labels="Show More|Show Less"><div class="limit-height" style="height: 100px;">
                        <ul>
                            <li>Takes personal action that positively impacts the operational and financial success of the organization.</li>
                            <li>Takes responsibility for achieving job principle accountabilities, tasks, objectives and outcomes even when other resources are required.</li>
                            <li>Takes pride in and stands behind own words, decisions and actions.</li>
                            <li>Ensures accuracy and completeness of work, applying quality standards were defined.</li>
                            <li>Anticipates problems to minimize negative impact and/or ramifications.</li>
                            <li>Acknowledges own errors, including any unintended consequences; personally fixes problems without passing blame.</li>
                            <li>Manages others’ expectations openly when completion of tasks is not possible or delayed</li>
                            <li>Goes willingly and appropriately beyond the scope of one’s job to get the work done.</li>
                        </ul>
                    </div><div class="limit-height-link"><a href="#" class="limit-height-trigger">Show More<i class="fa fa-fw fa-caret-down"></i></a></div></div>
                </section>
                <section class="section">
                    <h4 class="page-header">Evidence of Achievement</h4>
                    <p>Select one of the following:</p>
                    <ol>
                        <li>Provide your  manager with three written examples of situations that you assumed responsibility for, and describe the actions taken to minimize negative impact or ramifications</li>
                        <li>Increase  responsibilities through the year by joining shared governance councils, committee membership.  Provide manger with three months of meeting minutes which identify your contributions to the meeting</li>
                        <li>Self enrolls in  Ascend’s  Own Your Own Engagement  and submit completed workbook exercises to your unit manager</li>
                    </ol>
                </section>
                <section class="section">
                    <h4 class="page-header">Category</h4>
                    <ul>
                        <li>Organizational Development</li>
                    </ul>
                </section>
                <section class="section">
                    <h4 class="page-header">Category</h4>
                    <ul>
                        <li>Article-Creating a Culture of Accountability in Health Care - File</li>
                        <li>Employee Insights - Employee Engagement Survery - File</li>
                        <li>Employee Insights-Employee Engagement Survery Results - File</li>
                    </ul>
                </section>
                <section class="section">
                    <h4 class="page-header">References</h4>
                    <p>Scott T, Mannion R, Davies H, Marshall M. Implementing a culture change in health care: Theory and practice. Int J Qual Health Care. 2003;15(2):111-118.</p>
                    <p>Tucker A, Edmondson A. Why hospitals don't learn from failures: Organizational and psychological dynamics that inhibit system change. Calif Manage Rev.2003;45(2):51-72.</p>
                    <p>Roberts V, Perryman M. Creating a culture for health care quality and safety. Health Care Manag. 2007;26(2):155-158.</p>
                </section>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Select</a>
                <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $('.js-select2').select2();
    });

</script>
<?= createSiteEnd(); ?>