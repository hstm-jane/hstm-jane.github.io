<?php

include "includes/helpers/helpers.php";


$patterns['start']['title'] = 'Manage Rater and Peers';
$patterns['focus']['title'] = 'Manage Rater and Peers';

$patterns['focus']['meta_secondary'] = array(
      array(
        'label' => 'Employee:',
        'value' => 'Juniper, Stephanie P.',
    ),
    array(
        'label' => 'Assessment:',
        'value' => '<a href="assessment.php?assessment=competency-1&user=rater&state=5" 
                    class="meta-value">Initial Nursing Competency Appraisal</a>',
        'attributes' => array(
            array('class','meta-hidden-xs'),
        )

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
                <section class="section section-main section-box">
                    <section class="section">
                        <h2>Manage Rater and Peers<small>Current Assessment</small></h2>
                        <p>Use the options below to change the rater or peers for selected assessments. Additions will apply only to active assessments in the Evaluate state  and in departments that you have permissions to manage. These steps must be repeated if new employees are added to a student group(s) after completing this process.</p>
                    </section>

                     <section class="section">
                     <h2><b>1:</b> Assessment</h2>
                     <h3>Initial Nursing Competency Appraisal</h3>
                    </section>
                                         <!-- START: Select Additional Assessments -->

                    <?php  
                          $actormanagement = array(
                                    'actor' => array(
                                        array(
                                             'employee' => 'Conner, Rosalyn F.',
                                             'rater' => 'Crane, Darcy L.',
                                             'peer-1' => 'Park, Jennifer S.',
                                             'peer-2' => 'Montoya, Alice G.',
                                             'peer-3' => 'Juniper, Stephanie P',
                                         ),
                                        array(
                                             'employee' => 'Montoya, Alice G.',
                                             'rater' => 'Crane, Darcy L.',
                                             'peer-1' => 'Park, Jennifer S.',
                                             'peer-2' => 'Juniper, Stephanie P',
                                             'peer-3' => 'Conner, Rosalyn F.',
                                         ),
                                        array(
                                             'employee' => 'Riley, Phillip A.',
                                             'rater' => 'Crane, Darcy L.',
                                             'peer-1' => 'Park, Jennifer S.',
                                             'peer-2' => 'Montoya, Alice G.',
                                             'peer-3' => 'Juniper, Stephanie P',
                                         ),
                                        array(
                                             'employee' => 'Story, Yvonne G.',
                                             'rater' => 'Crane, Darcy L.',
                                             'peer-1' => 'Park, Jennifer S.',
                                             'peer-2' => 'Juniper, Stephanie P',
                                             'peer-3' => 'Conner, Rosalyn F.',
                                         ),
                                ),
                            )
                    ?>

                    <section class="section actor-management">
                     <h2><b>2:</b> Employee <small>The employee for this assessment</small></h2>
                      <div class="checkable checkable-checked">
                                                <div class="select">
                                                    <label>
                                                        <input type="checkbox" class="checkbox" checked="true"1>
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                                <div class="actor-management slat slat-callout">
                                                    <div class="actor-management__employee">
                                                        <div class="title">
                                                           <span class="meta-value">
                                                                <a href="assessment-manage-rater-peers-single.php">
                                                                    Juniper, Stephanie P.</a>
                                                            </span>
                                                        </div>   
                                                    </div>
                                                    <div class="actor-management__rater">
                                                        <span class="meta-label">Rater:</span>
                                                        <span class="meta-value">Riley, Phillip A.</span>
                                                    </div>
                                                    <div class="actor-management__peers">
                                                        <span class="meta-label">Peers:</span>
                                                        <span class="meta-value">
                                                            <span>Rita Moore</span>
                                                            <span>Sheen, Cybill</span>
                                                            <span>Juniper, Stephanie</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                        <div class="panel-group panel-group-slats" role="tablist" id="panel-group-1" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab">
                                        <a role="button" data-toggle="collapse" data-parent="#panel-group-1" href="#panel-1" class="collapsed">
                                           <!-- Apply the Selected Raters and Peers to Additional Employees with this Assessment?-->
                                           
                                            Manage Additional Employees
                                            <div class="panel-heading-icon">
                                                <i class="fa fa-chevron-down panel-heading-icon-closed"></i>
                                                <i class="fa fa-chevron-up panel-heading-icon-open"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="panel-1" class="panel-collapse collapse" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="section-header">
                                                <div class="row">
                                                    <div class="col-xs-10 section-header-title">
                                                        <div class="description"><!--Select the assessments to update-->
                                                            Select the additional employees below for this assessment that you would like to assign the above rater and peers to.
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-2 text-right">
                                                         <a class="btn btn-default btn-sm" href="#" id="btn-select-all" data-labels="Select All|Deselect All">Select All</a>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="actor-management-heading">
                                            <div class="select">
                                                <label></label>
                                            </div>
                                            <div class="actor-management-heading__employee">Employee</div>
                                            <div class="actor-management-heading__rater">Rater</div>
                                            <div class="actor-management-heading__peers">Peers</div>
                                        </div>

                                        <?php foreach ($actormanagement['actor'] as $actor) { ?>
                                            <div class="checkable">
                                                <div class="select">
                                                    <label>
                                                        <input type="checkbox" class="checkbox">
                                                        <span class="icon"></span>
                                                    </label>
                                                </div>
                                                <div class="actor-management slat slat-callout">
                                                    <div class="actor-management__employee">
                                                        <div class="title">
                                                           <span class="meta-value">
                                                                <a href="assessment-manage-rater-peers-single.php">
                                                                    <?= $actor['employee'] ?></a>
                                                            </span>
                                                        </div>   
                                                    </div>
                                                    <div class="actor-management__rater">
                                                        <span class="meta-label">Rater:</span>
                                                        <span class="meta-value"><?= $actor['rater'] ?></span>
                                                    </div>
                                                    <div class="actor-management__peers">
                                                        <span class="meta-label">Peers:</span>
                                                        <span class="meta-value">
                                                            <span><?= $actor['peer-1'] ?></span>
                                                            <span><?= $actor['peer-2'] ?></span>
                                                            <span><?= $actor['peer-3'] ?></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                      <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                     <!-- END: Select Additional Assessments -->

                    <!-- START: No Selected Rater -->
                   <!-- <section class="section">
                         <h2>Rater <small>The primary rater or select an alternate from your department</small></h2>
                        <div class="slat">
                            <div class="slat-message">
                                <h3>You don't have an alternate rater selected.</h3>
                                <a href="assessment-rater-search.php" class="btn btn-default">Select Rater</a>
                            </div>
                        </div>
                    </section>-->
                    <!-- End: No Selected Rater -->

                    <section class="section">
                        <h2><b>3:</b> Rater <small>The primary rater or select an alternate from your department</small></h2>

                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'Riley, Phillip A.',
                            'meta' => array(
                                array(
                                    'label' => 'ID:',
                                    'value' => '123456',
                                ),
                                array(  
                                    'label' => 'Department:',
                                    'value' => 'Nursing',
                                ),
                                array(
                                    'label' => 'Job Title:',
                                    'value' => 'RN',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Change<i class="fa fa-pencil visible-xs"></i>',
                                'link' => 'assessment-rater-search.php',
                            )
                        );
                        echo createSlat($slat);

                        ?>
                    </section>

                    <!-- START: No Selected Peers -->
                    <!--<section class="section">
                        <h2>Peers <small>Select additional raters within your department</small></h2>
                        <div class="slat">
                            <div class="slat-message">
                                <h3>You don't have any peers selected.</h3>
                                <a href="assessment-peer-search.php" class="btn btn-default">Select Peers</a>
                            </div>
                        </div>
                    </section>-->
                    <!-- End: No Selected Peers -->

                    <!-- START: Selected Peers -->
                    <section class="section">
                        <h2><b>4:</b> Peers <small>Select additional raters within your department</small></h2>

                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => 'Rita Moore',
                            'meta' => array(
                                array(
                                    'label' => 'ID:',
                                    'value' => '12345',
                                ),
                                array(
                                    'label' => 'Department:',
                                    'value' => 'Nursing',
                                ),
                                array(
                                    'label' => 'Job Title:',
                                    'value' => 'RN',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single-danger',
                                'content' => 'Remove<i class="fa fa-times visible-xs"></i>',
                                'link' => '#',
                            )
                        );
                        echo createSlat($slat);

                        $slat['title'] = 'Sheen, Cybill';
                        echo createSlat($slat);

                        $slat['title'] = 'Juniper, Stephanie';
                        echo createSlat($slat);

                        ?>
                    </section>
                    <section class="section section-footer">
                        <a href="assessment-peer-search.php" class="btn btn-default">Select Peers</a>
                    </section>
                    <!-- END: Selected Peers -->




                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'html' => '<a href="#" class="btn btn-success">Save</a> <a href="#" class="btn btn-default">Cancel</a>',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>
                        </section>
                   
                 
                       
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

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
$(function(){
    
    $('#btn-select-all').click(function(e){

        var $btn = $(this),
            labels = $btn.attr('data-labels').split('|');

        if ( $btn.text() === labels[0] ) {
            $btn.text(labels[1]);
            $(".checkbox" ).prop( "checked", true );
            $(".checkable").addClass("checkable-checked");
        } else {
            $btn.text(labels[0]);
             $(".checkbox" ).prop( "checked", false );
            $(".checkable").removeClass("checkable-checked");
        }
        e.preventDefault();
    });
});
</script>
<?= createSiteEnd(); ?>