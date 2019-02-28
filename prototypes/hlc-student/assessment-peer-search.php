<?php
    include "includes/helpers/helpers.php";
    
    $patterns['start']['title'] = 'Select Peers';
    $patterns['focus']['title'] = 'Select Peers';
    
    $patterns['header'] = array(
        'classes' => array('site-header--assessments'),
        'userName' => 'Darcy L. Crane',
        'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">',
        'mainNav' => '
            <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
            <li class="{active=todo}"><a href="/todo.php?rater">To Do</a></li>
            <li class="{active=completed}"><a href="/completed-filtered.php">Completed</a></li>
            <li class="{active=profile} dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="/advanced-practice.php">Advanced Practice</a></li>
                    <li><a href="/certifications.php">Certifications</a></li>
                    <li><a href="/documents.php">Documents</a></li>
                    <li><a href="/education.php">Education</a></li>
                    <li><a href="/goals.php">Goals</a></li>
                    <li><a href="/job-descriptions.php">Job Descriptions</a></li>
                    <li><a href="/disciplines-licenses.php">Licenses</a></li>
                    <li><a href="/notes.php">Notes</a></li>
                    <li><a href="/personal-information.php">Personal Information</a></li>
                </ul>
            </li>
            <li class="{active=raters}"><a href="/assessment-overview.php">Raters</a></li>
            <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
            <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
            <li class="disabled"><a href="#">Help</a></li>
            <li class="visible-xs"><a href="#">Logout</a></li>',
        'mainNavActive' =>'raters',
    );
    
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
    $returnFromRaters = (isset($_GET['returnFromRaters']))?'&returnFromRaters':'';
    $single = (isset($_GET['single']))?'&single':'';
    
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
<div class="layout layout-search">
    <div class="container">
        <section class="section section-main section-box">
        <div class="assessment-header">
            <div class="assessment-return"><a href="assessment-overview.php?tabs"><i class="fa fa-fw fa-chevron-left"></i>Return to Manage Rater and Peers</a></div>
        </div>
            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm">
                    <section class="section section-refinement-options" data-equalize="layout-columns">
                        <section class="section section-refinement-group section-refinement-group-first">
                            <h2>Refine</h2>
                            <div class="form-group">
                                <label class="control-label">Department</label>
                                <div style="margin-left:10px;">Nursing</div>
                            </div>
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
                            <button class="btn btn-sm btn-default">Apply</button>
                        </section>
                    </section>
                </div>
                <div class="col-md-9">
                    <section class="section section-results" data-equalize="layout-columns">
                        <section class="section section-results-header">
                            <div class="row">
                                <div class="col-md-9">
                                    <h2>Employees <small>Showing 1-20 of 35</small></h2>
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
                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => $employees[$i],
                                    'meta' => array(
                                        array(
                                            'label' => 'ID:',
                                            'value' => '123456',
                                        ),
                                        array(
                                            'label' => 'Department:',
                                            'value' => 'Nursing',
                                        )
                                    ),
                                    'action' => array(),
                                );
                                
                                echo '<div class="checkable">';
                                echo createSlat($slat);
                                echo '<div class="select"><label><input type="checkbox" class="checkbox"><span class="icon"></span></label></div></div>';
                                
                                } ?>
                        </section>
                        <?php
                            $returnAddUrl = "/assessment-manage-rater-peers.php";
                            $returnCancelUrl = "/assessment-manage-rater-peers.php";
                            
                            
                            $stickybar = array(
                                'sets' => array(
                                    array(
                                        'position' => 'left',
                                        'classes' => array('visible-xs','visible-sm'),
                                        'html' => '<a href="assessment-manage-rater-peers.php?returnFromPeers'.$returnFromRaters.''.$single.'"   class="btn btn-success js-checkable-dependent">Add</a> <a href="' . $returnCancelUrl . '" class="btn btn-default">Cancel</a>',
                                    ),
                                    array(
                                        'position' => 'left',
                                        'classes' => array('visible-md','visible-lg'),
                                        'html' => '<a href="assessment-manage-rater-peers.php?returnFromPeers'.$returnFromRaters.''.$single.'"  class="btn btn-success js-checkable-dependent">Add Selected</a> <a  href="' . $returnCancelUrl . '" class="btn btn-default">Cancel</a>',
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
                    </section>
                    <!-- /section-main -->
                </div>
                <!-- /column -->
            </div>
            <!-- /row -->
        </section>
    </div>
    <!-- /container -->
</div>
<!-- /layout -->
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
</div>
<!-- /modal -->
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
                    <div data-toggle="limit-height" data-labels="Show More|Show Less">
                        <div class="limit-height" style="height: 100px;">
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
                        </div>
                        <div class="limit-height-link"><a href="#" class="limit-height-trigger">Show More<i class="fa fa-fw fa-caret-down"></i></a></div>
                    </div>
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
</div>
<!-- /modal -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $('.js-select2').select2();
    });
    
</script>
<?= createSiteEnd(); ?>