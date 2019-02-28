<!-- modal -->
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
                            for ($i=0;$i<10;$i++) {

                                $goalNames = array(
                                    'Participate in Department Engagement Team',
                                    'Room Cleanliness &amp; Courtesy',
                                    'Increase Competency',
                                    'Facilitate Communication',
                                    'Improve Logistics',
                                    'Reduce Waste',
                                    'Highlight Achievements',
                                    'Reduce Onboarding Time',
                                    'Improve Training Materials',
                                    'Reduce Repetitive Redundancy',
                                );

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-modal')),
                                    ),
                                    'title' => '<a href="#modal-selects-goals-view" data-toggle="modalpage">'.$goalNames[$i].'</a>',
                                    'meta' => array(
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Active',
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
            <div class="modal-page" id="modal-selects-goals-view">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">View Goal</h4>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <h3>Description</h3>
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