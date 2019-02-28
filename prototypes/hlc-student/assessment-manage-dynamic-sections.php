<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Manage Dynamic Sections';
$patterns['focus']['title'] = 'Manage Dynamic Sections';
$patterns['focus']['icon'] = array('class' => 'hs-icons-assessment','type' => 'Assessment');
$patterns['focus']['meta_secondary'] = array();

if ( !empty($_GET['title']) ) {
    $patterns['focus']['meta_primary'] = array(
        array(
            'label' => 'For:',
            'value' => '<a href="assessment-wide.php" class="meta-value">' . $_GET['title'] . '</a>',
            'attributes' => array(
                array('class','meta-hidden-xs'),
            )
        )
    );
}
if ( !empty($_GET['total']) ) {
    array_push( $patterns['focus']['meta_secondary'], array('label' => 'Updating Assessments:', 'value' => $_GET['total']) );
}
if ( !empty($_GET['type']) ) {
    array_push( $patterns['focus']['meta_secondary'], array('label' => 'Type:', 'value' => $_GET['type']) );
}
if ( !empty($_GET['state']) ) {
    array_push( $patterns['focus']['meta_secondary'], array('label' => 'State:', 'value' => $_GET['state']) );
}
if ( !empty($_GET['due']) ) {
    array_push( $patterns['focus']['meta_secondary'], array('label' => 'Due:', 'value' => $_GET['due']) );
}


$employees = array(
    'Benson, Carol D.',
    'Brooks, Linda G.',
    'Jones, Robert P.',
    'Casey, Michelle B.',
    'Chamberland, Marie S.',
    'Clements, Larry W.',
    'Franks, Iva R.',
    'Henrich, Anna R.',
    'Jones, Marian R.',
    'Kelley, Robert A.',
    'Kight, Mercedes K.',
    'Lloyd, James B.',
    'Mitchell, Kurt P.',
    'Morrison, Kay S.',
    'Scott, Julie G.',
    'Shaner, Charles L.',
    'Seymour, Mary W.',
    'Sheridan, Pauline A.',
    'Wilson, Jeffery M.',
    'Wolfe, Michelle C.',
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
                    <section class="section section-refinement-options" data-equalize="layout-columns">
                        <section class="section section-refinement-group section-refinement-group-first">
                            <h3>Search</h3>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </section>
                        <section class="section section-refinement-group">
                            <h3>Status</h3>
                            <ul class="list-unstyled">
                                <li class="checkbox">
                                    <label><input type="checkbox" checked> In Development</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> Development Complete</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> Reviewed</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox" checked> Approved</label>
                                </li>
                            </ul>
                        </section>
                        <section class="section section-refinement-group">
                            <nav class="catalog-categories">
                                <h3>Categories</h3>
                                <div class="cc-back">
                                    <a href="#"><i class="fa fa-fw fa-reply"></i>Back</a>
                                </div>
                                <div class="cc-current">Current Category</div>
                                <div data-toggle="limit-height" data-labels="Show More|Show Less" data-height="240">
                                    <ul>
                                        <?php for($i=0;$i<10;$i++) { ?>
                                        <li>
                                            <a href="#">
                                                <div class="cc-col">Subcategory</div>
                                                <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                            </a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </nav>
                        </section>
                    </section>
                </div>
                <div class="col-md-9">
                    <section class="section section-results" data-equalize="layout-columns">
                        <section class="section section-results-header">
                            <div class="row">
                                <div class="col-md-9">
                                    <h2>Results <small>Showing 1-20 of 35</small></h2>
                                    <div class="section section-refinement-applied">
                                        <h3>Refinements</h3>
                                        <div class="tag-group">
                                            <a href="#" class="tag">Search Term<i class="fa fa-times"></i></a>
                                            <a href="#" class="tag">Department<i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 hidden-xs hidden-sm">
                                    <div class="section-results-header-sort">
                                        <div class="dropdown">
                                            <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Name <i class="fa fa-sort"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="active"><a href="#">Name</a></li>
                                                <li><a href="#">ID</a></li>
                                                <li><a href="#">Department</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section">
                            <?php for ( $i = 0; $i < 20; $i++ ) {

                            $content = '
                                <section class="section">
                                    <h5>Summary</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur, leo eu porttitor pellentesque, risus diam luctus elit, sed fermentum est urna et libero. Nulla turpis mauris, hendrerit vestibulum cursus in, dictum non libero. Pellentesque malesuada posuere felis, quis blandit dolor amet.</p>
                                </section>
                            ';
                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat')),
                                ),
                                'title' => 'Statement Example ' . ($i + 1),
                                'meta' => array(
                                    array(
                                        'label' => 'Owner:',
                                        'value' => 'County Memorial Hospital',
                                    ),
                                    array(
                                        'label' => 'Updated: ',
                                        'value' => 'Jan 4, 2014',
                                    )
                                ),
                                'action' => array(),
                                'nested' => array(
                                    'hide' => array($content)
                                ),
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
                                        'html' => '<a href="/assessment-overview.php" class="btn btn-success js-checkable-dependent">Add</a> <a href="/assessment-overview.php" class="btn btn-default">Cancel</a>',
                                    ),
                                    array(
                                        'position' => 'left',
                                        'classes' => array('visible-md','visible-lg'),
                                        'html' => '<a href="/assessment-overview.php" class="btn btn-success js-checkable-dependent">Add Statement(s)</a> <a href="/assessment-overview.php" class="btn btn-default">Cancel</a>',
                                    ),
                                    array(
                                        'position' => 'right',
                                        'classes' => array('hidden-xs','hidden-sm'),
                                        'html' => '
                                            <div class="btn-group dropup">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 35 <i class="fa fa-caret-up"></i></button>
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
                                        'classes' => array('visible-xs','visible-sm'),
                                        'html' => '
                                            <a href="#modal-refine" class="btn btn-default" data-toggle="modal"><i class="fa fa-filter"></i></a>
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
            </div><!-- /row -->
        </section>


    </div><!-- /container -->
</div><!-- /layout -->

<!-- Modal -->
<div id="modal-refine" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <section class="section section-refinement-options">
                        <section class="section section-refinement-group section-refinement-group-first">
                            <h3>Search</h3>
                            <div class="form-group">
                                <label class="control-label">First Name</label>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <div class="form-group">
                                <label class="control-label">User ID</label>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Department</label>
                                <select class="form-control js-select2">
                                    <option>All Departments</option>
                                    <?php for($i=1;$i<21;$i++) { ?>
                                    <option>Department <?= $i ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </section>
                    </section>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Search</button> <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

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