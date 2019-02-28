<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My Goals';
$patterns['header']['mainNavActive'] = 'profile';
$patterns['focus']['type'] = 'search';
$patterns['focus']['title'] = 'My Goals';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<style>
.description {
    margin-top: -3px;
    font-size: 90%;
    color: #777;
    font-weight: 500;
    color: #999;
}
.goal-parent-action
{
    margin-left: 3px;
}

</style>
<div class="layout layout-search">
    <div class="container">
        <section class="section section-main section-box">
            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm">
                    <section class="section section-refinement-options" data-equalize="layout-columns">
                        <header>
                            <h2>Refine</h2>
                        </header>
                        <section class="section section-refinement-group">
                            <h3>Date Range <small>Based on Start Date</small></h3>
                            <div class="form-group">
                                <select class="form-control" id="select-daterange">
                                    <optgroup label="Presets">
                                        <option>Since January 1</option>
                                        <option>Last 6 Months</option>
                                        <option selected="">Last 12 Months</option>
                                        <option>Last 24 Months</option>
                                        <option>Previous Calendar Year</option>
                                    </optgroup>
                                    <optgroup label="Custom">
                                        <option value="custom">Custom Range</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group" id="custom-daterange" style="display:none">
                                <label>Start Date</label>
                                <div class="input-group date">
                                    <input type="text" class="form-control" value="<?php echo date('m/d/Y');?>">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                                <label style="margin-top: 10px;">End Date</label>
                                <div class="input-group date">
                                    <input type="text" class="form-control" value="<?php echo date('m/d/Y',strtotime("+365 days")); ?>">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                        </section>
                        <section class="section section-refinement-group">
                            <h3>Type</h3>
                            <ul class="list-unstyled">
                                <li class="checkbox">
                                    <label><input type="checkbox"> Strategic</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> Departmental</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> Developmental</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> Individual</label>
                                </li>
                            </ul>
                        </section>
                        <section class="section section-refinement-group">
                            <h3>Status</h3>
                            <ul class="list-unstyled">
                                <li class="checkbox">
                                    <label><input type="checkbox"> Not Yet Started</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> In Progress</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> Complete</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox"> Not Applicable</label>
                                </li>
                            </ul>
                        </section>
                    </section>
                </div>
                <div class="col-md-9">
                    <section class="section section-results" data-equalize="layout-columns">
                        <section class="section section-results-header">
                            <div class="row">
                                <div class="col-md-9">
                                    <h2>Results <small>Showing 1-10 of 15</small></h2>
                                    <div class="section section-refinement-applied">
                                        <h3>Refinements</h3>
                                        <div class="tag-group">
                                            <a href="#" class="tag">Strategic<i class="fa fa-times"></i></a>
                                            <a href="#" class="tag">Complete<i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 hidden-xs hidden-sm">
                                    <div class="section-results-header-sort">
                                        <div class="dropdown">
                                            <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: End Date <i class="fa fa-sort"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#">Summary</a></li>
                                                <li><a href="#">Start Date</a></li>
                                                <li class="active"><a href="#">End Date</a></li>
                                                <li><a href="#">Status</a></li>
                                                <li><a href="#">Progress</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section">
                            <?php

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-attention','slat-spaced','slat-callout')),
                                ),
                                'title' => '<a href="#modal-goal-manage" data-toggle="modal">This is the title of a goal</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Individual',
                                    ),
                                    array(
                                        'label' => 'Date: ',
                                        'value' => 'Apr. 1, 2016',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'In Progress',
                                    ),
                                    array(
                                        'label' => 'Derived:',
                                        'value' => 'Yes',
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-goal-manage" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced')),
                                ),
                                'title' => '<a href="#modal-goal-manage" data-toggle="modal">This is the title of a goal</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Departmental',
                                    ),
                                    array(
                                        'label' => 'Date: ',
                                        'value' => 'Jan. 1, 2017',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'In Progress',
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-goal-manage" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                )
                            );
                            echo createSlat($slat);
                                $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                ),
                                'title' => '<a href="#modal-goal-manage" data-toggle="modal">This is the title of a goal</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Individual',
                                    ),
                                    array(
                                        'label' => 'Date: ',
                                        'value' => 'Apr. 1, 2017',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'In Progress',
                                    ),
                                    array(
                                        'label' => 'Derived:',
                                        'value' => 'Yes',
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-goal-manage" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                )
                            );
                            echo createSlat($slat);
                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced')),
                                ),
                                'title' => '<a href="#modal-goal-manage" data-toggle="modal">This is the title of a goal</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Departmental',
                                    ),
                                    array(
                                        'label' => 'Date: ',
                                        'value' => 'Jan. 1, 2017',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'In Progress',
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-goal-manage" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced')),
                                ),
                                'title' => '<a href="#modal-goal-manage" data-toggle="modal">This is the title of a goal</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Individual',
                                    ),
                                    array(
                                        'label' => 'Date: ',
                                        'value' => 'Jan. 1, 2017',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                    
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'In Progress',
                                    ),
                                    array(
                                        'label' => 'Derived:',
                                        'value' => 'Yes',
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-goal-manage" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                )
                            );
                            echo createSlat($slat);

                             $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-spaced','slat-callout')),
                                ),
                                'title' => '<a href="#modal-goal-manage" data-toggle="modal">This is the title of a goal</a>',
                                'meta' => array(
                                    array(
                                        'type' => 'Individual',
                                    ),
                                    array(
                                        'label' => 'Date: ',
                                        'value' => 'Apr. 1, 2017',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Not Yet Started',
                                    ),
                                    array(
                                        'label' => 'Derived:',
                                        'value' => 'Yes',
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-goal-manage" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                )
                            );
                            echo createSlat($slat);
                            


                            ?>

                        </section>

                        <?php
                            $stickybar = array(
                                'sets' => array(
                                    array(
                                        'position' => 'left',
                                        'classes' => array('visible-xs','visible-sm'),
                                        'html' => '
                                            <a class="btn btn-success add-goal" >Add Goal</a>
                                            <a href="#modal-refine" class="btn btn-default" data-toggle="modal">Refine Results</a>
                                        ',
                                    ),
                                    array(
                                        'position' => 'left',
                                        'classes' => array('hidden-xs','hidden-sm'),
                                        'html' => '
                                            <a class="btn btn-success add-goal"">Add Goal</a>
                                        ',
                                    ),
                                    array(
                                        'position' => 'right',
                                        'classes' => array('hidden-xs'),
                                        'html' => '
                                            <div class="btn-group dropup">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 25 <i class="fa fa-caret-up"></i></button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li class="active"><a href="#">20 per page</a></li>
                                                    <li><a href="#">50 per page</a></li>
                                                    <li><a href="#">100 per page</a></li>
                                                    <li><a href="#">250 per page</a></li>
                                                    <li><a href="#">Show all</a></li>
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

                    </section>
                </div>
            </div>
        </section><!-- /section-main -->
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
                        <h3>Date Range <small>Based on Start Date</small></h3>
                        <div class="form-group">
                            <select class="form-control" id="select-daterange-modal">
                                <optgroup label="Presets">
                                    <option>Since January 1</option>
                                    <option>Last 6 Months</option>
                                    <option selected="">Last 12 Months</option>
                                    <option>Last 24 Months</option>
                                    <option>Previous Calendar Year</option>
                                </optgroup>
                                <optgroup label="Custom">
                                    <option value="custom">Custom Range</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group" id="custom-daterange-modal" style="display:none">
                            <label>Start Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="<?php echo date('m/d/Y');?>">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <label style="margin-top: 10px;">End Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="<?php echo date('m/d/Y',strtotime("+365 days")); ?>">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Type</h3>
                        <ul class="list-unstyled">
                            <li class="checkbox">
                                <label><input type="checkbox"> Strategic</label>
                            </li>
                            <li class="checkbox">
                                <label><input type="checkbox"> Departmental</label>
                            </li>
                            <li class="checkbox">
                                <label><input type="checkbox"> Developmental</label>
                            </li>
                            <li class="checkbox">
                                <label><input type="checkbox"> Individual</label>
                            </li>
                        </ul>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Status</h3>
                        <ul class="list-unstyled">
                            <li class="checkbox">
                                <label><input type="checkbox"> Not Yet Started</label>
                            </li>
                            <li class="checkbox">
                                <label><input type="checkbox"> In Progress</label>
                            </li>
                            <li class="checkbox">
                                <label><input type="checkbox"> Complete</label>
                            </li>
                            <li class="checkbox">
                                <label><input type="checkbox"> Not Applicable</label>
                            </li>
                        </ul>
                    </section>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?php
include ('includes/modals/_modal-goal-add.php');
include ('includes/modals/_modal-goal-manage.php');
?>

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $('a[data-toggle="modalpage"]').click(function(e){
            e.preventDefault();
            var target = $(this).attr('href');
            $(target).show().siblings('.modal-page').hide();
        });
        $('#select-daterange').on('change',function(){
            if ( $(this).val() === 'custom' ) {
                $('#custom-daterange').show().find('input:eq(0)').focus();
            } else {
                $('#custom-daterange').hide();
            }
        });

        $('#modal-goal-manage').on('hidden.bs.modal', function () {
            $("#modal-page-manage-goal").show().siblings('.modal-page').hide();
        });


        $('#select-daterange-modal').on('change',function(){
            if ( $(this).val() === 'custom' ) {
                $('#custom-daterange-modal').show().find('input:eq(0)').focus();
            } else {
                $('#custom-daterange-modal').hide();
            }
        });

        $('.slat-radio .btn').click(function(e){
            var $btn = $(this);
            e.preventDefault();
            $('.slat-radio .btn').removeClass('btn-success').addClass('btn-default').html('Select<i class="fa fa-plus visible-xs"></i>');
            $btn.removeClass('btn-default').addClass('btn-success').html('Selected<i class="fa fa-check visible-xs"></i>');
        });

        $(".remove").click(function(e){
            HandleAddGoalState('add');
            e.preventDefault();
        });
        $(".add-resource").click(function(){
            
        });
        $(".attach-parent").click(function(){
            HandleAddGoalState('edit');
        });
       
        $(".add-goal").click(function(){
            $('#modal-goal-add').modal('show')
            HandleAddGoalState("add");
        });

        function HandleAddGoalState(type){
            console.log("here");
            if(type == "add") {
                $(".goal-add-parent").show();
                $(".goal-edit-parent").hide();
            }
            else if(type == "edit") {
                $(".goal-add-parent").hide();
                $(".goal-edit-parent").show();
            }
        }
    });
</script>
<?= createSiteEnd(); ?>
