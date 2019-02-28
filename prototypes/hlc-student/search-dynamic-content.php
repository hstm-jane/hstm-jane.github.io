<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Search';
$patterns['focus']['title'] = 'Select Statements';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-assessment',
    'type' => 'Assessment',
);
$patterns['focus']['meta_primary'] = array(
    array(
        'label' => 'For:',
        'value' => '<a href="assessment.php" class="meta-value">2014 Performance Appraisal</a>',
    ),
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Due:',
        'value' => 'May 1, 2014',
    ),
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
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
                            <h3>Course Type</h3>
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
                                </div>
                                <div class="col-md-3 hidden-xs hidden-sm">
                                    <div class="section-results-header-sort">
                                        <div class="dropdown">
                                            <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Name <i class="fa fa-sort"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="active"><a href="#">Name</a></li>
                                                <li><a href="#">Owner</a></li>
                                                <li><a href="#">Date Updated</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section">
                            <section class="section">
                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-callout','slat-toggle')),
                            ),
                            'meta' => array(
                                array(
                                    'label' => 'Owner:',
                                    'value' => 'County Memorial Hospital',
                                ),
                                array(
                                    'label' => 'Updated:',
                                    'value' => '{today}',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => '<i class=\"fa fa-plus fa-fw visible-xs\"></i> Select',
                                'link' => '#',
                            )
                        );

                        for ($i=0;$i<20;$i++){
                            $slat['title'] = '<a href="#modal-preview" data-toggle="modal">Statement Example '.($i + 1).'</a>';
                            echo createSlat($slat);
                        }

                        ?>
                        </section>

                        <?php
                            $stickybar = array(
                                'sets' => array(
                                    array(
                                        'position' => 'left',
                                        'classes' => array('visible-xs','visible-sm'),
                                        'html' => '
                                            <a href="#" class="btn btn-success">Add</a>
                                            <a href="#" class="btn btn-default">Cancel</a>
                                        ',
                                    ),
                                    array(
                                        'position' => 'left',
                                        'classes' => array('visible-md','visible-lg'),
                                        'html' => '
                                            <a href="#" class="btn btn-success">Add to Dynamic Section</a>
                                            <a href="#" class="btn btn-default">Cancel</a>
                                        ',
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
                    <section class="section section-refinement-group">
                        <h3>Sort</h3>
                        <select class="form-control">
                            <option selected>Name</option>
                            <option>Owner</option>
                            <option>Date Updated</option>
                        </select>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Course Type</h3>
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
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
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
        $('.slat-toggle .btn').click(function(e){
            var $btn = $(this);
            e.preventDefault();
            $btn.toggleClass('btn-success btn-default');
            if($btn.hasClass('btn-success')){
                $btn.html('Selected<i class="fa fa-check visible-xs"></i>');
            } else {
                $btn.html('Select<i class="fa fa-plus visible-xs"></i>');
            }
        });
    });
</script>
<?= createSiteEnd(); ?>