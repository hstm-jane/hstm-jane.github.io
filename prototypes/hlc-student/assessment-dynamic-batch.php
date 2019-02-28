<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = '2014 Performance Appraisal';
$patterns['focus']['title'] = '2014 Performance Appraisal';
$patterns['focus']['icon'] = array('class' => 'hs-icons-assessment','type' => 'Assessment');
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Due:',
        'value' =>  'May 1, 2014',
    ),
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-main section-box" data-equalize="layout-columns">
                    <!-- <section class="section">
                        <h2>Sections <small>Choose the dynamic section to add content</small></h2>
                        <?php
                            $sections = array(
                                'Dynamic Section 1'
                                ,'Dynamic Section 2'
                                ,'Dynamic Section 3'
                                ,'Dynamic Section 4'
                                ,'Dynamic Section 5'
                            );
                            for ( $i = 0; $i < 5; $i++ ) {
                        ?>
                        <div class="slat slat-nometa slat-modal">
                            <div class="slat-default">
                                <div class="title"><?= $sections[$i] ?></div>
                                <div class="action">
                                    <a href="#" class="btn btn-default btn-sm">Add <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </section> -->
                    <section class="section">
                        <h2>Add to a Dynamic Assessment</h2>
                        <p>Use the options below to update the dynamic sections of this assessment. Additions will apply only to active assessments in the Evaluate state in departments that you have permisions to manage. These steps must be repeated if new employees are added to a student group(s) after completing this process.</p>
                    </section>
                    <section class="section">
                        <h2>Sections <small>Choose a dynamic section to add content</small></h2>
                        <select class="form-control">
                            <?php
                                $sections = array(
                                    'Dynamic Section 1'
                                    ,'Dynamic Section 2'
                                    ,'Dynamic Section 3'
                                    ,'Dynamic Section 4'
                                    ,'Dynamic Section 5'
                                );
                                for ( $i = 0; $i < 5; $i++ ) {
                            ?>
                            <option><?= $sections[$i] ?></option>
                            <?php } ?>
                        </select>
                    </section>
                    <section class="section">
                        <h2>Statements <small>Choose the statement(s) to share</small></h2>
                        <div class="slat">
                            <div class="slat-message">
                                <h3>You don't have any statements selected.</h3>
                                <a href="#modal-select-statements" class="btn btn-default" data-toggle="modal">Select Statements</a>
                            </div>
                        </div>
                    </section>
                    <section class="section">
                        <h2>People <small>Choose who receives the updates</small></h2>
                        <?php
                            $employees = array(
                                'Basile, Victor P.'
                                ,'Bradford, Julie D.'
                                ,'Fiedler, Joanne M.'
                                ,'Montoya, Alice G.'
                                ,'Moore, Rita H.'
                                ,'Park, Jennifer S.'
                                ,'Riley, Phillip A.'
                                ,'Rink, Christopher P.'
                                ,'Story, Yvonne G.'
                                ,'Wilder, Janice M.'
                            );
                            for ( $i = 0; $i < 10; $i++ ) {

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-modal')),
                                    ),
                                    'title' => $employees[$i],
                                    'meta' => array(),
                                    'action' => array(
                                        'type' => 'action-single-success',
                                        'content' => '<i class="fa fa-check"></i>',
                                        'link' => '#',
                                    )
                                );
                                echo createSlat($slat);
                            }
                        ?>

                    </section>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'html' => '
                                        <a href="#" class="btn btn-success">Save</a>
                                        <a href="#" class="btn btn-success">Save and Add Another</a>
                                        <a href="#" class="btn btn-default">Cancel</a>
                                    ',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>

                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>Support</h3>
                        <p>To talk with a customer service representative call 1-800-521-0574</p>
                    </section>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->

<!-- Modal -->
<div id="modal-select-statements" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-page active" id="modal-selects-statements-list">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Select Statements</h4>
                    <div class="input-group modal-search">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div><!-- /input-group -->
                </div>
                <div class="modal-body">
                    <section class="section modal-search-results">
                        <h3>Results <small>Showing 1-10 of 15</small></h3>
                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-modal')),
                            ),
                            'title' => '<a href="#modal-selects-statements-view" data-toggle="modalpage">This is the title of a dynamic statement</a>',
                            'meta' => array(
                                array(
                                    'label' => 'Owner:',
                                    'value' => 'General Healthcare',
                                ),
                                array(
                                    'label' => 'Updated:',
                                    'value' => 'Dec 13, 2015',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single-success',
                                'content' => '<i class="fa fa-check"></i>',
                                'link' => '#',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-modal')),
                            ),
                            'title' => '<a href="#modal-selects-statements-view" data-toggle="modalpage">This is the title of a dynamic statement</a>',
                            'meta' => array(
                                array(
                                    'label' => 'Owner:',
                                    'value' => 'General Healthcare',
                                ),
                                array(
                                    'label' => 'Updated:',
                                    'value' => 'Dec 13, 2015',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => '<i class="fa fa-plus"></i>',
                                'link' => '#',
                            )
                        );
                        echo createSlat($slat);

                        echo createSlat($slat);

                        ?>
                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-success" data-dismiss="modal">Done</a>
                    <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                    <div class="btn-group pull-right">
                        <button class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="modal-page" id="modal-selects-statements-view">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">View Statement</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <h3>Accountability</h3>
                        <p>Takes ownership for decisions, methods and results of work within the scope of one’s role.</p>
                    </section>
                    <section class="section">
                        <h4 class="page-header">Behavioral Criteria</h4>
                        <div data-toggle="limit-height" data-labels="Show More|Show Less">
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
                    <a href="#modal-selects-statements-list" class="btn btn-success" data-toggle="modalpage">Select</a>
                    <a href="#modal-selects-statements-list" class="btn btn-default" data-toggle="modalpage">Back</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-select-goals" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-page active" id="modal-selects-goals-list">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Select Goals</h4>
                    <div class="input-group modal-search">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div><!-- /input-group -->
                </div>
                <div class="modal-body">
                    <section class="section modal-search-results">
                        <h3>Results <small>Showing 1-10 of 15</small></h3>
                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-modal')),
                            ),
                            'title' => '<a href="#modal-selects-goals-view" data-toggle="modalpage">This is the title of a dynamic goal</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Statement',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'Active',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single-success',
                                'content' => '<i class="fa fa-check"></i>',
                                'link' => '#',
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-modal')),
                            ),
                            'title' => '<a href="#modal-selects-goals-view" data-toggle="modalpage">This is the title of a dynamic goal</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Statement',
                                ),
                                array(
                                    'label' => 'Status:',
                                    'value' => 'Active',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => '<i class="fa fa-plus"></i>',
                                'link' => '#',
                            )
                        );
                        echo createSlat($slat);

                        echo createSlat($slat);

                        ?>
                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-success" data-dismiss="modal">Done</a>
                    <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                    <div class="btn-group pull-right">
                        <button class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-page" id="modal-selects-goals-view">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">View Goal</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <h3>This is the goal</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#modal-selects-goals-list" class="btn btn-success" data-toggle="modalpage">Select</a>
                    <a href="#modal-selects-goals-list" class="btn btn-default" data-toggle="modalpage">Back</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $('.slat-modal .btn').click(function(e){
            var $btn = $(this);
            e.preventDefault();
            $btn.toggleClass('btn-success btn-default');
            if($btn.hasClass('btn-success')){
                $btn.html('<i class="fa fa-check"></i>');
            } else {
                $btn.html('<i class="fa fa-plus"></i>');
            }
        });
    });
</script>
<?= createSiteEnd(); ?>