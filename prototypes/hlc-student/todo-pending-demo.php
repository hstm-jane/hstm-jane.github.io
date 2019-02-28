<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My Submitted Assessments';
$patterns['focus']['title'] = 'My Submitted Assessments';
// $patterns['header']['mainNavActive'] = false;

$patterns['header'] = array(
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">',
    'mainNav' => '
        <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
        <li class="{active=todo}"><a href="todo-demo.php">To Do</a></li>
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
        <li class="{active=catalog}"><a href="/catalog-unified-main.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'todo',
);

$actions_1 = '<div class="action action-multi">
    <div class="btn-group">
        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-fw fa-caret-down"></i></a>
        <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="#">View Assessment</a></li>
            <li><a href="#modal-progress-1" class="js-progress">View Progress</a></li>
            <li><a href="#">Print PDF</a></li>
        </ul>
    </div>
</div>';

$actions_2 = '<div class="action">
        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">View <i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
</div>';

$actions_3 = '<div class="action action-multi">
    <div class="btn-group">
        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Options <i class="fa fa-fw fa-caret-down"></i></a>
        <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="#">View Assessment</a></li>
            <li><a href="#modal-progress-3" class="js-progress">View Progress</a></li>
            <li><a href="#">Print PDF</a></li>
        </ul>
    </div>
</div>';



?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<style>
.meta-callout .meta-label, .meta-callout .meta-value {
    /*display:inline-block !important;
    width: initial;*/
}
</style>
<div class="layout">
    <div class="container">
        <section class="section section-main section-box">

            <section class="return-link">
                <a href="/todo-demo.php"><i class="fa fa-fw fa-chevron-left"></i>Return to To Do List</a>
            </section>

            <div class="alert alert-info">
            <strong>No Action Required</strong><br>
            This page contains assessments that have been submitted and are waiting on action from your rater or manager. There is no action required on your part. 
            </div>
                <section class="section">
                    <?php



                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-callout')),
                                array('data-filter-category',array('1')),
                            ),
                            'title' => '<a href="#">Initial Nursing Competency Appraisal</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Self Assessment',
                                ),
                                array(
                                    'label' => 'Due:',
                                    'value' => date('M j, Y',strtotime('+7days')),
                                ),
                              
                                array(
                                        'label' => 'Waiting on:',
                                        'value' => '<span class="meta-callout-label">Waiting on:</span>Manager or Rater',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => $actions_2,
                            ),
                        );
                        echo createSlat($slat);

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-callout')),
                                array('data-filter-category',array('1')),
                            ),
                            'title' => '<a href="#">Nursing Fundamentals Appraisal</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Self Assessment',
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => date('M j, Y',strtotime('+7days')),
                                ),
                                
                                array(
                                     'label' => 'Waiting on:',
                                        'value' => '<span class="meta-callout-label">Waiting on:</span>Manager or Rater',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => $actions_2,
                            ),
                        );
                        echo createSlat($slat);
                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-callout')),
                                array('data-filter-category',array('1')),
                            ),
                            'title' => '<a href="#">Nursing Fundamentals Appraisal</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Self Assessment',
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => 'Assignment Deleted',
                                ),
                                array(
                                     'label' => 'Waiting on:',
                                        'value' => '<span class="meta-callout-label">Waiting on:</span>Approver',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => $actions_2,
                            ),
                        );
                        echo createSlat($slat);

                            $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-callout')),
                                array('data-filter-category',array('1')),
                            ),
                            'title' => '<a href="#">2017 Performance Review - Juniper, Stephanie P.</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Peer Assessment',
                                ),
                                array(
                                    'label' => 'Due: ',
                                    'value' => date('M j, Y',strtotime('+9days')),
                                ),
                                array(
                                    'label' => 'Waiting on:',
                                    'value' => '<span class="meta-callout-label">Waiting on:</span>Manager or Rater',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => $actions_2,
                            ),
                        );
                        echo createSlat($slat);

                        ?>
                </section>
        </section><!-- /section-main -->
    </div><!-- /container -->
</div><!-- /layout -->

<div id="modal-progress-1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Competency Appraisal</h4>
            </div>
            <div class="modal-body">

                <table class="modal-progress__table">
                    <thead>
                        <tr>
                            <th class="modal-progress__role">Role</th>
                            <th class="modal-progress__name">Name</th>
                            <th class="modal-progress__progress">Progress</th>
                        </tr>
                    </thead>
                    <tbody><tr><td class="modal-progress__role">Rater</td><td class="modal-progress__name">Crane, Darcy L.</td><td class="modal-progress__progress"><div class="progress">Not Yet Started</div></td></tr><tr><td class="modal-progress__role">Employee</td><td class="modal-progress__name">Juniper, Stephanie P.</td><td class="modal-progress__progress"><div class="progress"><div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div></div></td></tr><tr><td class="modal-progress__role">Peer</td><td class="modal-progress__name">Peer 1</td><td class="modal-progress__progress"><div class="progress"><div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div></div></td></tr><tr><td class="modal-progress__role">Peer</td><td class="modal-progress__name">Peer 2</td><td class="modal-progress__progress"><div class="progress"><div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div></div></td></tr><tr><td class="modal-progress__role">Peer</td><td class="modal-progress__name">Peer 3</td><td class="modal-progress__progress"><div class="progress"><div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div></div></td></tr></tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="modal-progress-2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Competency Appraisal</h4>
            </div>
            <div class="modal-body">

                <table class="modal-progress__table">
                    <thead>
                        <tr>
                            <th class="modal-progress__role">Role</th>
                            <th class="modal-progress__name">Name</th>
                            <th class="modal-progress__progress">Progress</th>
                        </tr>
                    </thead>
                    <tbody><tr><td class="modal-progress__role">Rater</td><td class="modal-progress__name">Crane, Darcy L.</td><td class="modal-progress__progress"><div class="progress"><div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div></div></td></tr><tr><td class="modal-progress__role">Employee</td><td class="modal-progress__name">Juniper, Stephanie P.</td><td class="modal-progress__progress"><div class="progress"><div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div></div></td></tr><tr><td class="modal-progress__role">Peer</td><td class="modal-progress__name">Peer 1</td><td class="modal-progress__progress"><div class="progress"><div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div></div></td></tr><tr><td class="modal-progress__role">Peer</td><td class="modal-progress__name">Peer 2</td><td class="modal-progress__progress"><div class="progress"><div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div></div></td></tr><tr><td class="modal-progress__role">Peer</td><td class="modal-progress__name">Peer 3</td><td class="modal-progress__progress"><div class="progress"><div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div></div></td></tr></tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="modal-progress-3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Performance Appraisal</h4>
            </div>
            <div class="modal-body">

                <table class="modal-progress__table">
                    <thead>
                        <tr>
                            <th class="modal-progress__role">Role</th>
                            <th class="modal-progress__name">Name</th>
                            <th class="modal-progress__progress">Progress</th>
                        </tr>
                    </thead>
                    <tbody><tr><td class="modal-progress__role">Rater</td><td class="modal-progress__name">Crane, Darcy L.</td><td class="modal-progress__progress"><div class="progress">Not Yet Started</div></td></tr><tr><td class="modal-progress__role">Employee</td><td class="modal-progress__name js-employee">Employee Name</td><td class="modal-progress__progress"><div class="progress">Not Yet Started</div></td></tr><tr><td class="modal-progress__role">Peer</td><td class="modal-progress__name">Juniper, Stephanie P.</td><td class="modal-progress__progress"><div class="progress">Not Yet Started</div></td></tr><tr><td class="modal-progress__role">Peer</td><td class="modal-progress__name">Peer 2</td><td class="modal-progress__progress"><div class="progress">Not Yet Started</div></td></tr><tr><td class="modal-progress__role">Peer</td><td class="modal-progress__name">Peer 3</td><td class="modal-progress__progress"><div class="progress">Not Yet Started</div></td></tr></tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $('.js-progress').on('click',function(e){
            var title = $(this).closest('.slat').find('.title').text().split(' - ');
            var $modal = $($(this).attr('href'));

            e.preventDefault();
            $modal.find('.modal-title').text(title[0]);
            $('.js-employee').text(title[1]);
            $modal.modal('show');

        });
    });
</script>
<?= createSiteEnd(); ?>