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
<div id="modal-employee-completions" class="modal modal-lg fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Employee Completions</h4>
            </div>
            <div class="modal-body">

                <div class="modal-focus modal-focus--icon modal-focus--meta">
                    <div class="modal-focus__icon">
                        <img src="<?= $employeeImage ?>" class="modal-focus__avatar">
                    </div>
                    <div class="modal-focus__primary">
                        <h2 class="modal-focus__title"><?= $employeeName ?></h2>
                    </div>
                    <div class="modal-focus__secondary">
                        <ul class="meta">
                            <li><span class="meta-label">Total Completions:</span><span class="meta-value">17</span></li>
                            <li><span class="meta-label">Est Learning Time:</span><span class="meta-value">8h 47m</span></li>
                        </ul>
                    </div>
                </div>

                <section class="section">
                    <div class="date-range">
                        <div class="form-group">
                            <label class="control-label">Date Range:</label>
                            <select class="form-control date-range__control">
                                <optgroup label="Presets">
                                    <option>Since January 1</option>
                                    <option>Last 6 months</option>
                                    <option selected="">Last 12 months</option>
                                    <option>Last 24 months</option>
                                    <option>Previous Calendar Year</option>
                                    <option>Complete History</option>
                                </optgroup>
                                <optgroup label="Custom">
                                    <option value="custom">Custom Range</option>
                                </optgroup>
                            </select>
                            <div class="date-range__custom">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Start:</label>
                                            <div class="input-group date">
                                                <input type="text" class="form-control">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">End:</label>
                                            <div class="input-group date">
                                                <input type="text" class="form-control">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section">
                    <?php

                            $credits = '';
                            $credits .= createSlat(array(
                                'attributes' => array(
                                    array('class',array('slat','slat-simple')),
                                ),
                                'title' => 'AMA PRA Category 1 Credit&trade;',
                                'meta' => array(
                                    array(
                                        'label' => 'Discipline:',
                                        'value' => 'AEMT',
                                    ),
                                    array(
                                        'label' => 'Credits:',
                                        'value' => '5.75',
                                    ),
                                    array(
                                        'label' => 'Courses:',
                                        'value' => '2',
                                    )
                                ),
                                'action' => array()
                            ));

                            $credits .= createSlat(array(
                                'attributes' => array(
                                    array('class',array('slat','slat-simple')),
                                ),
                                'title' => 'AMA PRA Category 1 Credit&trade;',
                                'meta' => array(
                                    array(
                                        'label' => 'Discipline:',
                                        'value' => 'Emergency Medical Technician - First Responder',
                                    ),
                                    array(
                                        'label' => 'Credits:',
                                        'value' => '4',
                                    ),
                                    array(
                                        'label' => 'Courses:',
                                        'value' => '2',
                                    )
                                ),
                                'action' => array()
                            ));

                            ?>

                            <div class="panel-group panel-group-slats" role="tablist" id="panel-group-1" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab">
                                        <a role="button" data-toggle="collapse" data-parent="#panel-group-1" href="#panel-1" class="collapsed">
                                            CE Credit Summary
                                            <div class="panel-heading-icon">
                                                <i class="fa fa-chevron-down panel-heading-icon-closed"></i>
                                                <i class="fa fa-chevron-up panel-heading-icon-open"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="panel-1" class="panel-collapse collapse" role="tabpanel">
                                        <div class="panel-body">
                                           <?= $credits ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </section>

                <section class="section">
                        <?php

                        $content = '
                            <section class="section">
                                <h5>Added</h5>
                                <p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
                            </section>
                            <section class="section">
                                <h5>Updated</h5>
                                <p>Stephanie Juniper, Feb 7, 2014 11:57am</p>
                            </section>
                            <section class="section">
                                <h5>Comments</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </section>
                            <section class="section">
                                <small class="text-muted">
                                    Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
                                </small>
                            </section>
                        ';
                        $slat = array(
                            'title' => 'Student-Entered Learning Event',
                            'meta' => array(
                                array(
                                    'type' => 'Learning Event',
                                ),
                                array(
                                    'label' => 'Est. Time:',
                                    'value' => '1h',
                                ),
                                array(
                                    'label' => 'Entry:',
                                    'value' => 'Student',
                                ),
                                array(
                                    'label' => 'Completed: ',
                                    'value' => 'May 19, 2013',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '',
                            ),
                            'nested' => array(
                                'hide' => array($content),
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'title' => 'Understanding Chronic Pain Management',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'Est. Time:',
                                    'value' => '2h 10m',
                                ),
                                array(
                                    'label' => 'Completed: ',
                                    'value' => 'May 21, 2013',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                'link' => '#',
                            ),
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'title' => 'Advanta 2 Med Surg Bed',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'Est. Time:',
                                    'value' => '15m',
                                ),
                                array(
                                    'label' => 'Completed: ',
                                    'value' => 'May 18, 2013',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                'link' => '#',
                            ),
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'title' => 'Content with Video',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'Est. Time:',
                                    'value' => '2h',
                                ),
                                array(
                                    'label' => 'Completed: ',
                                    'value' => 'May 28, 2013',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                'link' => '#',
                            ),
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'title' => 'Content with Video',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'Est. Time:',
                                    'value' => '2h',
                                ),
                                array(
                                    'label' => 'Completed: ',
                                    'value' => 'May 29, 2013',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                'link' => '#',
                            ),
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'title' => 'Content with Video',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'Est. Time:',
                                    'value' => '2h',
                                ),
                                array(
                                    'label' => 'Completed: ',
                                    'value' => 'May 30, 2013',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                'link' => '#',
                            ),
                        );
                        echo createSlat($slat);

                        $content = '
                            <section class="section">
                                <h5>Added</h5>
                                <p>Admin\'s Name, Feb 7, 2014 11:54am</p>
                            </section>
                            <section class="section">
                                <h5>Updated</h5>
                                <p>Admin\'s Name, Feb 7, 2014 11:54am</p>
                            </section>
                            <section class="section">
                                <h5>Comments</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </section>
                            <section class="section">
                                <small class="text-muted">
                                    Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
                                </small>
                            </section>
                        ';
                        $nested = createSlat(array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'CE - AHIMA',
                            'meta' => array(
                                array(
                                    'label' => 'Discipline:',
                                    'value' => 'Pharmacist, Nuclear',
                                ),
                                array(
                                    'label' => 'Credits:',
                                    'value' => '4.00 AMA PRA Category 1 Credit™',
                                ),
                                array(
                                    'label' => 'License:',
                                    'value' => '123456789011112',
                                ),
                                array(
                                    'label' => 'State:',
                                    'value' => 'TN',
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                'link' => '#',
                            ),
                        ));
                        $slat = array(
                            'title' => 'Admin-Entered Learning Event',
                            'meta' => array(
                                array(
                                    'type' => 'Learning Event',
                                ),
                                array(
                                    'label' => 'Est. Time:',
                                    'value' => '1h',
                                ),
                                array(
                                    'label' => 'Entry:',
                                    'value' => 'Admin',
                                ),
                                array(
                                    'label' => 'Completed: ',
                                    'value' => 'July 11, 2013',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                'link' => '#',
                            ),
                            'nested' => array(
                                'show' => array($nested),
                                'hide' => array($content),
                            )
                        );
                        echo createSlat($slat);


                        $content = '
                            <section class="section">
                                <h5>Added</h5>
                                <p>Admin\'s Name, Feb 7, 2014 11:54am</p>
                            </section>
                            <section class="section">
                                <h5>Updated</h5>
                                <p>Admin\'s Name, Feb 7, 2014 11:54am</p>
                            </section>
                            <section class="section">
                                <h5>Comments</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </section>
                            <section class="section">
                                <small class="text-muted">
                                    Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
                                </small>
                            </section>
                        ';
                        $slat = array(
                            'title' => 'Admin-Entered Learning Event as a Course',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'Est. Time:',
                                    'value' => '1h',
                                ),
                                array(
                                    'label' => 'Entry:',
                                    'value' => 'Admin',
                                ),
                                array(
                                    'label' => 'Completed: ',
                                    'value' => 'July 11, 2013',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                'link' => '#',
                            ),
                            'nested' => array(
                                'hide' => array($content),
                            )
                        );
                        echo createSlat($slat);


                        $slat = array(
                            'title' => 'Heart Disease and Treatment Options',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'Est. Time:',
                                    'value' => '1h',
                                ),
                                array(
                                    'label' => 'Completed: ',
                                    'value' => 'Oct 10, 2013',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                'link' => '#',
                            ),
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'title' => 'Lippencott - 18-lead electrocardiogram',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'Est. Time:',
                                    'value' => '1h',
                                ),
                                array(
                                    'label' => 'Completed: ',
                                    'value' => 'Oct 16, 2013',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                'link' => '#',
                            ),
                        );
                        echo createSlat($slat);

                        $nested = createSlat(array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'CE - AHIMA',
                            'meta' => array(
                                array(
                                    'label' => 'Discipline:',
                                    'value' => 'Pharmacist, Nuclear',
                                ),
                                array(
                                    'label' => 'Credits:',
                                    'value' => '4.00 AMA PRA Category 1 Credit™',
                                ),
                                array(
                                    'label' => 'License:',
                                    'value' => '123456789011112',
                                ),
                                array(
                                    'label' => 'State:',
                                    'value' => 'TN',
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                'link' => '#',
                            ),
                        ));
                        $nested1 = createSlat(array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'CE - AAPC',
                            'meta' => array(
                                array(
                                    'label' => 'Discipline:',
                                    'value' => 'Emergency Medical Technician - First Responder',
                                ),
                                array(
                                    'label' => 'Credits:',
                                    'value' => '2.00 Contact Hours',
                                ),
                                array(
                                    'label' => 'License:',
                                    'value' => '123456789011112',
                                ),
                                array(
                                    'label' => 'State:',
                                    'value' => 'TN',
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                'link' => '#',
                            ),
                        ));
                        $slat = array(
                            'title' => 'A Day in the Life of ICD-10',
                            'meta' => array(
                                array(
                                    'type' => 'Course',
                                ),
                                array(
                                    'label' => 'Est. Time:',
                                    'value' => '1h',
                                ),
                                array(
                                    'label' => 'Completed: ',
                                    'value' => 'Oct 19, 2013',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
                                'link' => '#',
                            ),
                            'nested' => array(
                                'show' => array($nested,$nested1),
                            )
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'title' => 'Performance Appraisal',
                            'meta' => array(
                                array(
                                    'type' => 'Self Assessment',
                                ),
                                array(
                                    'label' => 'Rater:',
                                    'value' => 'Jane Doe',
                                ),
                                array(
                                    'label' => 'Completed: ',
                                    'value' => 'Dec 15, 2013',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '',
                            ),
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