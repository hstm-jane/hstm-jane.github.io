<div id="modal-search-filters" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Search Filters</h4>
            </div>
            <div class="modal-body">
                <h3>Select Filters To Add</h3>
                    <?php

                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-toggle','slat-modal')),
                        ),
                        'title' => 'Department',
                        'meta' => array(),
                        'action' => array(
                            'type' => 'action-single-success',
                            'content' => '<i class="fa fa-check"></i>',
                            'link' => '#',
                        )
                    );
                    echo createSlat($slat);

                    $slat['title'] = 'Job Title';
                    echo createSlat($slat);

                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-toggle','slat-modal')),
                        ),
                        'title' => 'Job Category',
                        'meta' => array(),
                        'action' => array(
                            'type' => 'action-single',
                            'content' => '<i class="fa fa-plus"></i>',
                            'link' => '#',
                        )
                    );
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
                    <a href="advanced-student-search-demo.php" class="btn btn-success">Update</a>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->