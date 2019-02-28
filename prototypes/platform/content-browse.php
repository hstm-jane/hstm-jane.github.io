<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Content';
$patterns['focus']['title'] = 'Content';

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
$patterns['search']['filters'] = array(
                array (
                    'visible' => 'mobile',
                    'header' => 'Sort',
                    'controls' => array(
                        '<select class="form-control js-select2"><option>Name</option><option>ID</option><option>Department</option></select>'
                    )
                ),
                array(
                    "state" => 'static', // static / open / closed
                    "header" => 'Favorites',
                    "controls" => array(
                        '<ul class="list-unstyled">
                        <li><label class="radio"><input type="radio" name="favorites" checked=""> Show Only Favorites</label></li>
                        <li><label class="radio"><input type="radio" name="favorites" > Show All</label></li>
                        </ul>'
                    )
                ),
                array(
                    "state" => 'static', // static / open / closed
                    "header" => 'Type',
                    "controls" => array(
                        '<ul class="list-unstyled">
                        <li><li><label class="radio"><input type="radio" name="type" checked=""> All Content Types</label></li><li><label class="radio"><input type="radio" name="type"> Evaluations</label></li><li><label class="radio"><input type="radio" name="type"> Tests</label></li></ul>'
                    )
                ),
                array(
                    "state" => 'static', // static / open / closed
                    "header" => 'Keyword',
                    "controls" => array(
                       '<div class="input-group"><input type="text" class="form-control" placeholder="Search"><span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span></div>'
                    )
                )
            );


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
/*.slat-favorite {
    padding: 15px 10px;
}*/
.slat-favorite .favorite {
    display: block;
    position: absolute;
    top: -11px;
    right: -11px;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 30px 30px 0;
    border-color: transparent #e0e0e0  transparent transparent;
    z-index: 0;
    cursor: pointer;
}

.slat-favorite .favorite.success {
    border-color: transparent #5cb85c  transparent transparent;

}

.slat-favorite .favorite i {
    display: block;
    position: absolute;
    top: 2px;
    left: 16px;
    font-size: 12px;
    color: #fff;
    text-shadow: 1px 1px 0 rgba(0,0,0,.3);
}
</style>
<div class="layout layout-search">
    <div class="container">
        <section class="section section-main section-box">
            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm">
                     <section class="section section-filters" data-equalize="layout-columns">
                            <h2>Refine Results</h2>
                           <!--  <div class="search-filter search-filter--desktop">
                                <div class="search-filter__header">
                                    <div class="search-filter__title">Applied Filters
                                    </div>
                                </div>

                                <?= createTags($patterns['search']); ?>
                            </div> -->

                            <?= createSearch($patterns['search']); ?>
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
                            <?php for ( $i = 0; $i < 4; $i++ ) {

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-callout', 'slat-favorite')),
                                ),
                                'title' => '<a href="#">Event Evaluation</a>',
                                'meta' => array(
                                    array(
                                        'label' => 'ID:',
                                        'value' => '123456',
                                    ),
                                    array(
                                        'label' => 'Department:',
                                        'value' => 'Nursing',
                                    ),

                                ),
                                 'meta' => '
                                    <ul class="meta">
                                        <li><span class="meta-type"> Evaluation</span></li>
                                        <li><span class="meta-label">Status:</span>
                                        <span class="meta-value">Active</span></li>
                                        <li><span class="meta-label">Updated:</span>
                                        <span class="meta-value">Jul 21, 2016</span></li>

                                    </ul> <div class="favorite"><i class="fa fa-star"></i></div>',

                                'action' => array(),
                            );

                            echo '<div class="checkable">';
                            echo createSlat($slat);

                            echo '<div class="select"><label><input type="checkbox" class="checkbox"><span class="icon"></span></label></div></div>';

                            } ?>
                            <?php for ( $i = 0; $i < 1; $i++ ) {

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-callout', 'slat-favorite')),
                                ),
                                'title' => '<a href="#">Instructor Evaluation</a>',
                                'meta' => array(
                                    array(
                                        'label' => 'ID:',
                                        'value' => '123456',
                                    ),
                                    array(
                                        'label' => 'Department:',
                                        'value' => 'Nursing',
                                    ),

                                ),
                                 'meta' => '
                                    <ul class="meta">
                                        <li><span class="meta-type"> Evaluation</span></li>
                                        <li><span class="meta-label">Status:</span>
                                        <span class="meta-value">Active</span></li>
                                        <li><span class="meta-label">Updated:</span>
                                        <span class="meta-value">Jul 21, 2016</span></li>

                                    </ul> <div class="favorite"><i class="fa fa-star"></i></div>',

                                'action' => array(),
                            );

                            echo '<div class="checkable">';
                            echo createSlat($slat);

                            echo '<div class="select"><label><input type="checkbox" class="checkbox"><span class="icon"></span></label></div></div>';

                            } ?>
                            <?php for ( $i = 0; $i < 5; $i++ ) {

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-callout', 'slat-favorite')),
                                ),
                                'title' => '<a href="#">Training Evaluation</a>',
                                'meta' => array(
                                    array(
                                        'label' => 'ID:',
                                        'value' => '123456',
                                    ),
                                    array(
                                        'label' => 'Department:',
                                        'value' => 'Nursing',
                                    ),

                                ),
                                 'meta' => '
                                    <ul class="meta">
                                        <li><span class="meta-type"> Evaluation</span></li>
                                        <li><span class="meta-label">Status:</span>
                                        <span class="meta-value">Active</span></li>
                                        <li><span class="meta-label">Updated:</span>
                                        <span class="meta-value">Jul 21, 2016</span></li>

                                    </ul> <div class="favorite"><i class="fa fa-star"></i></div>',

                                'action' => array(),
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
                                        'html' => '<a href="/event-single-content.php" class="btn btn-success js-checkable-dependent">Add</a> <a href="/assessment-overview.php" class="btn btn-default">Cancel</a>',
                                    ),
                                    array(
                                        'position' => 'left',
                                        'classes' => array('visible-md','visible-lg'),
                                        'html' => '<a href="/event-single-content.php" class="btn btn-success js-checkable-dependent">Add Selected</a> <a href="/event-single-content.php" class="btn btn-default">Cancel</a>',
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


$(".slat-favorite .favorite").click(function(){
    $(this).toggleClass("success");
});

 $(function(){


        $(document).on('click', '.search-filter__toggle', function(){
            $(this).closest('.search-filter').toggleClass('search-filter--closed');
            $(window).resize();
        });

        $('#modal-filter').on('show.bs.modal', function() {
            $('.js-select2').each(function(){
                $(this).select2("destroy");
            });
            $(this).find('.modal-body').html($('.search-filters').html());
            $('.js-select2').select2();
            $('.search-filters').empty();
        });

        $('#modal-filter').on('hidden.bs.modal', function() {
            $('.js-select2').each(function(){
                $(this).select2("destroy");
            });
            $('.search-filters').append($('#modal-filter .modal-body').html());
            $('.js-select2').select2();
            $('#modal-filter .modal-body').empty();

        });
        $('.slat .btn').click(function(e){
            e.preventDefault();
        });
    });

</script>

<script>

</script>
<?= createSiteEnd(); ?>