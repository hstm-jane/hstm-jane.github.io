<div id="modal-search-filter-layout" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Search Filter Templates</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h3>
                            Saved Templates
                        </h3>
                        <select class="form-control">
                        <option>None Selected</option>
                            <option>Default Layout 1</option>
                            <option>Custom Layout 1</option>
                            <option>Custom Layout 1</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3>
                            Save New Filter Template As...
                        </h3>
                        <input class="form-control" id="text" name="text" type="text" placeholder="My Filter Layout">
                    </div>
                </div>
                <h3>Filters To Be Added</h3>
                <?php

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-toggle','slat-modal')),
                    ),
                    'title' => 'Department',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'action-single',
                        'content' => '<i class="fa fa-plus"></i>',
                        'link' => '#',
                    )
                );
                echo createSlat($slat);

                $slat['title'] = 'Job Title';
                echo createSlat($slat);

                $slat['title'] = 'Job Category';
                echo createSlat($slat);

                $slat['title'] = 'Job Function';
                echo createSlat($slat);

                $slat['title'] = 'Hire / Re-Hire Dates';
                echo createSlat($slat);

                $slat['title'] = 'Active Date Range';
                echo createSlat($slat);

                $slat['title'] = 'Active Month';
                echo createSlat($slat);

                $slat['title'] = 'Review Month';
                echo createSlat($slat);

                $slat['title'] = 'Review Day Range';
                echo createSlat($slat);

                $slat['title'] = 'Email Addresses';
                echo createSlat($slat);

                $slat['title'] = 'Certification';
                echo createSlat($slat);

                $slat['title'] = 'License';
                echo createSlat($slat);

                ?>


            </div>
            <div class="modal-footer">
                <a href="advanced-student-search-demo.php" class="btn btn-success">Save</a>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button class="btn btn-danger pull-right" data-dismiss="modal">Delete Template</button>
            </div>
        </div>
    </div>
</div>
<!-- /modal -->