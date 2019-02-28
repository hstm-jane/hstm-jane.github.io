<?php

    $employeeImage = '/content/images/avatar.jpg';
    $employeeName = 'Stephanie P. Juniper';
    $employeeID = 'sjuniper';
    $employeeSupervisor = 'Crane, Darcy L.';

    if ( !empty($assessment) ) {
        $employeeImage = $assessment['actors']['employee']['image'];
        $employeeName = $assessment['actors']['employee']['nameFirstLast'];
        $employeeID = $assessment['actors']['employee']['nameEmployeeID'];
        $employeeSupervisor = $assessment['actors']['rater']['nameLastFirst'];
    }

?>
<!-- Modal -->
<div id="modal-employee-todo" class="modal modal-lg fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Employee To-Do List</h4>
            </div>
            <div class="modal-body">

                <div class="modal-focus modal-focus--icon modal-focus--meta">
                    <div class="modal-focus__icon">
                        <img src="<?= $employeeImage ?>" class="modal-focus__avatar">
                    </div>
                    <div class="modal-focus__primary">
                        <h2 class="modal-focus__title"><?=$employeeName ?></h2>
                    </div>
                    <div class="modal-focus__secondary">
                        <ul class="meta">
                            <li><span class="meta-label">Total Tasks:</span><span class="meta-value">10</span></li>
                            <li><span class="meta-label">Requiring Attention:</span><span class="meta-value">2</span></li>
                        </ul>
                    </div>
                </div>

                <div class="filter-mini" data-target="tasks">
                    <div class="filter-row">
                        <div class="filter-cell">
                            <div class="filter-toggle">
                                Show: <i class="fa fa-fw fa-caret-down"></i>
                            </div>
                        </div>
                        <div class="filter-cell">
                            <ul>
                                <li><label class="checkbox"><input type="checkbox" value='all' checked> All Tasks</label></li><li><label class="checkbox"><input type="checkbox" value="1"> Assignments</label></li><li><label class="checkbox"><input type="checkbox" value="2"> Live Classes</label></li><li><label class="checkbox"><input type="checkbox" value="3"> Electives</label></li><li><label class="checkbox"><input type="checkbox" value="4"> Profile Tasks</label></li><li><label class="checkbox"><input type="checkbox" value="5"> Assessments</label></li><li><label class="checkbox"><input type="checkbox" value="6"> Hidden Option with No Matches</label></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <section class="section" id="tasks">
                    <?php

                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-attention','slat-spaced','slat-callout-w')),
                            array('data-filter-category',array('1')),
                        ),
                        'title' => 'Understanding Chronic Pain Management',
                        'meta' => array(
                            array(
                                'type' => 'Course',
                            ),
                            array(
                                'label' => 'Status:',
                                'value' => 'In Progress',
                            ),
                            array(
                                'label' => 'Complete:',
                                'value' => '2 of 3',
                                'attributes' => array(
                                    array('class','meta-hide-xs'),
                                )
                            ),
                            array(
                                'label' => 'Due: ',
                                'value' => '<span class="meta-callout-label">Due:</span>Dec. 31, 2013 at 12am',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(
                            'type' => 'custom',
                            'content' => '',
                        )
                    );
                    echo createSlat($slat);

                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-attention','slat-spaced','slat-callout-w')),
                            array('data-filter-category',array('2')),
                        ),
                        'title' => 'Course Name: Class Name',
                        'meta' => array(
                            array(
                                'type' => 'Live Class',
                            ),
                            array(
                                'label' => 'Status:',
                                'value' => 'Not Registered',
                            ),
                            array(
                                'label' => 'Attendance:',
                                'value' => 'Mandatory',
                                'attributes' => array(
                                    array('class','meta-hide-xs'),
                                )
                            )
                        ),
                        'action' => array(
                            'type' => 'custom',
                            'content' => '',
                        )
                    );
                    echo createSlat($slat);

                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-spaced','slat-callout-w')),
                            array('data-filter-category',array('2')),
                        ),
                        'title' => 'Course Name: Class Name',
                        'meta' => array(
                            array(
                                'type' => 'Live Class',
                            ),
                            array(
                                'label' => 'Status:',
                                'value' => 'Registered',
                            ),
                            array(
                                'label' => 'Attendance:',
                                'value' => 'Mandatory',
                                'attributes' => array(
                                    array('class','meta-hide-xs'),
                                )
                            ),
                            array(
                                'label' => 'Location:',
                                'value' => 'North Tower: Westmoreland Hall',
                                'attributes' => array(
                                    array('class','meta-hide-xs'),
                                )
                            ),
                            array(
                                'label' => 'Starts: ',
                                'value' => '<span class="meta-callout-label">Starts:</span>Jul 15, 2014 at 3:30pm',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            ),
                        ),
                        'action' => array(
                            'type' => 'custom',
                            'content' => '',
                        )
                    );
                    echo createSlat($slat);

                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-spaced','slat-callout-w')),
                            array('data-filter-category',array('2')),
                        ),
                        'title' => 'Course Name: Live Event Title',
                        'meta' => array(
                            array(
                                'type' => 'Live Event',
                            ),
                            array(
                                'label' => 'Status:',
                                'value' => 'Registered',
                            ),
                            array(
                                'label' => 'Location:',
                                'value' => 'Cummins Station: 450',
                                'attributes' => array(
                                    array('class','meta-hide-xs'),
                                )
                            ),
                            array(
                                'label' => '',
                                'value' => '<span class="meta-value"><div>Jul 15, 2014 at 3:30pm - </div>
                                    <div>Jul 25, 2014 at 3:30pm</div></span>',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(
                            'type' => 'custom',
                            'content' => '',
                        )
                    );
                    echo createSlat($slat);

                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-spaced','slat-callout-w')),
                            array('data-filter-category',array('2')),
                        ),
                        'title' => 'Course Name: Live Event Title',
                        'meta' => array(
                            array(
                                'type' => 'Live Event',
                            ),
                            array(
                                'label' => 'Status:',
                                'value' => 'Registered',
                            ),
                            array(
                                'label' => 'Location:',
                                'value' => 'Cummins Station: 450',
                                'attributes' => array(
                                    array('class','meta-hide-xs'),
                                )
                            ),
                            array(
                                'label' => '',
                                'value' => '<div>Aug 27, 2014</div><div>5:30am - 6:30am</div>',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(
                            'type' => 'custom',
                            'content' => '',
                        )
                    );
                    echo createSlat($slat);

                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-spaced','slat-callout-w')),
                            array('data-filter-category',array('1')),
                        ),
                        'title' => 'Choose a Course',
                        'meta' => array(
                            array(
                                'type' => 'Equivalent',
                            ),
                            array(
                                'label' => 'Status:',
                                'value' => 'Not Enrolled',
                            ),
                            array(
                                'label' => 'Due: ',
                                'value' => '<span class="meta-callout-label">Due:</span>Sep 1, 2014',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            ),
                        ),
                        'action' => array(
                            'type' => 'custom',
                            'content' => '',
                        )
                    );
                    echo createSlat($slat);

                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-spaced','slat-callout-w')),
                            array('data-filter-category',array('1')),
                        ),
                        'title' => 'Pain Management Curriculum',
                        'meta' => array(
                            array(
                                'type' => 'Curriculum',
                            ),
                            array(
                                'label' => 'Status:',
                                'value' => 'In Progress',
                            ),
                            array(
                                'label' => 'Due: ',
                                'value' => '<span class="meta-callout-label">Due:</span>Sep 1, 2014',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            ),
                        ),
                        'action' => array(
                            'type' => 'custom',
                            'content' => '',
                        )
                    );
                    echo createSlat($slat);


                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-spaced','slat-callout-w')),
                            array('data-filter-category',array('1')),
                        ),
                        'title' => 'Fire Safety',
                        'meta' => array(
                            array(
                                'type' => 'Course',
                            ),
                            array(
                                'label' => 'Status:',
                                'value' => 'Assigned',
                            ),
                            array(
                                'label' => 'Complete:',
                                'value' => '0 of 3',
                                'attributes' => array(
                                    array('class','meta-hide-xs'),
                                )
                            ),
                            array(
                                'label' => 'Institution:',
                                'value' => 'General Hospital',
                                'attributes' => array(
                                    array('class','meta-hide-xs'),
                                )
                            ),
                            array(
                                'label' => 'Due: ',
                                'value' => '<span class="meta-callout-label">Due:</span>Sep 15, 2014',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            ),
                        ),
                        'action' => array(
                            'type' => 'custom',
                            'content' => '',
                        )
                    );
                    echo createSlat($slat);

                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-spaced','slat-callout-w')),
                            array('data-filter-category',array('5')),
                        ),
                        'title' => 'Competency Appraisal - Employee Assesses Self',
                        'meta' => array(
                            array(
                                'type' => 'Self Assessment',
                            ),
                            array(
                                'label' => 'Status:',
                                'value' => 'In Progress',
                            ),
                            array(
                                'label' => 'Due: ',
                                'value' => '<span class="meta-callout-label">Due:</span>{today}',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            ),
                        ),
                        'action' => array(
                            'type' => 'custom',
                            'content' => '',
                        )
                    );
                    echo createSlat($slat);

                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-spaced','slat-callout-w')),
                            array('data-filter-category',array('3')),
                        ),
                        'title' => 'This is an example of an elective',
                        'meta' => array(
                            array(
                                'type' => 'Course',
                            ),
                            array(
                                'label' => 'Status:',
                                'value' => 'Not Yet Started',
                            ),
                            array(
                                'label' => 'Enrolled By:',
                                'value' => 'Self',
                                'attributes' => array(
                                    array('class','meta-hide-xs'),
                                )
                            ),
                            array(
                                'label' => 'Due: ',
                                'value' => 'Elective',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(
                            'type' => 'custom',
                            'content' => '',
                        )
                    );
                    echo createSlat($slat);

                    ?>
                </section>

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->