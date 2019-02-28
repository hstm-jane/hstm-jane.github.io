<!-- modal -->
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
                            for ($i=1;$i<10;$i++) {

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
                                        'type' => 'custom',
                                        'content' => '',
                                    )
                                );
                        ?>

                        <div class="checkable">
                            <?= createSlat($slat); ?>
                            <div class="select">
                                <label><input type="checkbox" class="checkbox"><span class="icon"></span></label>
                            </div>
                        </div>

                        <?php } ?>

                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-success" data-dismiss="modal">Add Selected</a>
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