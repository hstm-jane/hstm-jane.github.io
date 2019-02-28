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
<div id="modal-employee-profile" class="modal modal-lg fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Employee Profile</h4>
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
                            <li><span class="meta-label">Employee ID:</span><span class="meta-value"><?= $employeeID ?></span></li>
                        </ul>
                    </div>
                </div>

                <section class="section">
                    <h3>About</h3>

                    <table class="table table--profile">
                        <tr>
                            <th>Hire Date<th>
                            <td><?= date('M j, Y',strtotime('-7 years 64 days')); ?></td>
                        </tr>
                        <tr>
                            <th>Supervisor<th>
                            <td><?= $employeeSupervisor ?></td>
                        </tr>
                        <tr>
                            <th>Department<th>
                            <td>002-Cardiology</td>
                        </tr>
                        <tr>
                            <th>Job Title<th>
                            <td>002-Cardiologist</td>
                        </tr>
                        <tr>
                            <th>Position Status<th>
                            <td>None</td>
                        </tr>
                    </table>
                </section>

                <section class="section">

                    <h3>Licenses</h3>

                    <?php

                    $content = '
                        <section class="section">
                            <h5>State Certification Number</h5>
                            <p>1234567890</p>
                        </section>
                        <section class="section">
                            <h5>National Expiration Date</h5>
                            <p>Feb 7, 2014</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'AEMT',
                        'meta' => array(
                            array(
                                'label' => 'State:',
                                'value' => 'MI',
                            ),
                            array(
                                'label' => 'Country:',
                                'value' => 'United States',
                            )
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

                    $content = '
                        <section class="section">
                            <h5>Certifying Body</h5>
                            <p>National Association of Alcoholism and Drug Abuse Counselors Certification Commission (NAADAC)</p>
                        </section>
                        <section class="section">
                            <h5>Updated</h5>
                            <p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
                        </section>
                        <section class="section">
                            <h5>System Managed</h5>
                            <p>No</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'NCAC ll - National Certified Addiction Counsler, Level ll',
                        'meta' => array(
                            array(
                                'label' => 'State:',
                                'value' => 'MI',
                            ),
                            array(
                                'label' => 'Country:',
                                'value' => 'United States',
                            ),
                            array(
                                'label' => 'State License:',
                                'value' => '123456789011112',
                            ),
                            array(
                                'label' => 'Expires:',
                                'value' => 'Jan. 1, 2015',
                            )
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

                    ?>


                </section>

                <section class="section">

                    <h3>Certifications</h3>

                    <?php

                    $content = '
                        <section class="section">
                            <h5>Certifying Body</h5>
                            <p>American Board of Wound Management (ABWM)</p>
                        </section>
                        <section class="section">
                            <h5>Updated</h5>
                            <p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
                        </section>
                        <section class="section">
                            <h5>System Managed</h5>
                            <p>No</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'CWCA - Certified Wound Care Associate',
                        'meta' => array(
                            array(
                                'label' => 'Country:',
                                'value' => 'United States',
                            ),
                            array(
                                'label' => 'State:',
                                'value' => 'TN',
                            ),
                            array(
                                'label' => 'License:',
                                'value' => '123456789011112',
                            ),
                            array(
                                'label' => 'Expires: ',
                                'value' => 'Jan 1, 2015',
                            )
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

                    ?>

                </section>

                <section class="section">
                    <h3>Job Description</h3>
                    <?php

                    $content = '
                        <section class="section">
                            <h5>Summary</h5>
                            <p>Responsible for the directing of patient care for a designated shift. Reports to the Nursing Coordinator and coordinates with all related departments within limits of patient care issues for a designated shift.</p>
                            </section>
                        ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Charge Nurse',
                        'meta' => array(),
                        'action' => array(
                            'type' => 'action-single',
                            'content' => 'Print <i class="fa fa-fw fa-print visible-xs"></i>',
                            'link' => '#',
                        ),
                        'nested' => array(
                            'hide' => array($content),
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