<?php
session_start();
include "includes/helpers/helpers.php";


$patterns['start']['title'] = 'Manage Rater and Peers';
$patterns['focus']['title'] = 'Manage Rater and Peers';

$patterns['focus']['meta_primary'] = array(
    // array(
    //     'label' => 'For Assessment:',
    //     'value' => 'Initial Nursing Competency Appraisal',
    //     'attributes' => array(
    //         array('class','meta-hidden-xs'),
    //     )
    // ),
);


//START manage page navigation and persistance between peer search, rater search and back and forth between single or multiple employees.
if(empty($_SERVER['HTTP_REFERER']) || 
    (!strpos($_SERVER['HTTP_REFERER'],"rater-search")    
    && !strpos($_SERVER['HTTP_REFERER'],"peer-search") 
    && !strpos($_SERVER['HTTP_REFERER'],"manage-rater-peer"))) {
        // Unset all of the session variables.
        $_SESSION = array();
        session_destroy();
}

if((!empty($_REQUEST['return-to-prev']) && $_REQUEST['return-to-prev'] == "1") 
    || (!empty($_SESSION['returnToPrevious']) && $_SESSION['returnToPrevious'] == true))  {
    $_SESSION["returnToPrevious"] = true;
}
else {
    $_SESSION["returnToPrevious"] = false;
}
if((!empty($_REQUEST['single']) && $_REQUEST['single'] == "1") 
    || (!empty($_SESSION['single']) && $_SESSION['single'] == true))  {
    $_SESSION["single"] = true;
}
else {
    $_SESSION["single"] = false;
}
if((!empty($_REQUEST['rater-postback']) && $_REQUEST['rater-postback'] == "1")  
    || (!empty($_SESSION['returnFromSelectRater']) && $_SESSION['returnFromSelectRater'] == true)) {
     $_SESSION["returnFromSelectRater"] = true;
}
else{
    $_SESSION["returnFromSelectRater"] = false;
}

if((!empty($_REQUEST['peers-postback']) && $_REQUEST['peers-postback'] == "1") 
     || (!empty($_SESSION['returnFromSelectPeers']) && $_SESSION['returnFromSelectPeers'] == true))  {
     $_SESSION["returnFromSelectPeers"] = true;
} 
else {
    $_SESSION["returnFromSelectPeers"] = false;
}

if((!empty($_REQUEST['returnToMultiple']) && $_REQUEST['returnToMultiple'] == "1")) {
    $_SESSION["single"] = false;
}
//END manage page navigation and persistance

 if($_SESSION["single"] == true) {

    $patterns['focus']['meta_secondary'] = array(
        array(
            'label' => 'For Assessment:',
            'value' => 'Initial Nursing Competency Appraisal',
            'attributes' => array(
                array('class','meta-hidden-xs'),
            )
        ),
       array(
            'label' => 'For Employee:',
            'value' => 'Juniper, Stephanie P.',
            'attributes' => array(
              array('class','meta-hidden-xs'),
            )
        )
        
    );
}
else {
   $patterns['focus']['meta_secondary'] = array(
        array(
            'label' => 'For Assessment:',
            'value' => 'Initial Nursing Competency Appraisal',
            'attributes' => array(
                array('class','meta-hidden-xs'),
            )
        ),
         array(
            'label' => 'For Employee:',
            'value' => 'Juniper, Stephanie P.',
            'attributes' => array(
              array('class','meta-hidden-xs'),
            )
        )
    );
}


?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-main section-box">
                    <?php 
                    if($_SESSION["single"] == true) { ?>
                        <!--If we are managing raters and peers for an assessment with ONLY ONE employee -->
                        <!--This used to be in a separate prototype named assessment-manage-rater-peers-single.php-->
                         <?php 
                         if($_SESSION["returnToPrevious"] == true) { ?>
                            <section class="return-link">
                                <a href="assessment-manage-rater-peers.php?returnToMultiple=1">
                                    <i class="fa fa-fw fa-chevron-left"></i>Return to Manage Rater and Peers for Assessment
                                </a>
                            </section>
                        <?php } ?>
                          <section class="return-link">
                                <a href="assessment-manage-rater-peers.php?returnToMultiple=1">
                                    <i class="fa fa-fw fa-chevron-left"></i>Return to Assessment Summary
                                </a>
                            </section>
                        <section class="section">
                            <h2>Manage Rater and Peers for Juniper, Stephanie P.</h2>
                            <p>Use the options below to change the rater or peers for this employee's assessment.</p>
                        </section>
                        
                    <?php }
                    else { ?>
                     <section class="return-link">
                                <a href="assessment-manage-rater-peers.php?returnToMultiple=1">
                                    <i class="fa fa-fw fa-chevron-left"></i>Return to Rater Overview
                                </a>
                            </section>
                             <!--If we are managing raters and peers for an assessment with MULTIPLE employees -->
                        <section class="section" style="margin-bottom:30px!important">
                            <h2>Manage Rater and Peers</h2>
                            <!--<p>Use the options below to change the rater or peers for this assessments. -->
                                <!--Additions will apply only to active assessments in the Evaluate state  and in departments that you have permissions to manage. -->
                                <!--These steps must be repeated if new employees are added to a student group(s) after completing this process.</p>-->
                        </section>
                    <?php } ?>

                    <?php if($_SESSION["returnFromSelectRater"] == true) { ?>
                         <!-- START: Rater Selected -->
                        <section class="section manage-rater"  style="margin-top:0px !important;">
                            <h2>Rater</h2>
                         <!--<h2>Rater <small>The manager or designated alternate who will be rating the employee's assessment.</small></h2>-->
                        <!--<div><b>Current Rater:</b> 	Crane, Darcy L.</div>-->
                            <?php
                              
                                $raterSearchUrl = "/assessment-rater-search.php";

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    ),
                                    'title' => 'Riley, Phillip A.',
                                    'meta' => array(
                                        
                                        array(
                                            'label' => 'Department:',
                                            'value' => 'Cardiology',
                                        ),
                                        array(
                                            'label' => 'Job Title:',
                                            'value' => 'Surgical Technician',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Change<i class="fa fa-pencil visible-xs"></i>',
                                        'link' => $raterSearchUrl,
                                    )
                            );
                            echo createSlat($slat);
                            ?>
                        </section>
                        <!-- END: Rater Selected -->
                    <?php } else { 
                              
                              $raterSearchUrl = "/assessment-rater-search.php";
                                    

                    ?>
                        <!-- START: No Selected Rater -->
                        <section class="section manage-rater" style="margin-top:0px!important;">
                            <h3>Rater</h3>
                              <!--<h2>Rater <small>The employee's manager, or a designated alternate who will be rating the assessment.</small></h2>-->
                             <!--<div style="font-size: 16px;margin-top:0px;"><b style="font-weight: 600;">Current Rater:</b> 	Crane, Darcy L.</div>-->
                             <?php
                              
                                $raterSearchUrl = "/assessment-rater-search.php";

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    ),
                                    'title' => 'Riley, Phillip A.',
                                    'meta' => array(
                                        
                                        array(
                                            'label' => 'Department:',
                                            'value' => 'Cardiology',
                                        ),
                                        array(
                                            'label' => 'Job Title:',
                                            'value' => 'Surgical Technician',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Change<i class="fa fa-pencil visible-xs"></i>',
                                        'link' => $raterSearchUrl,
                                    )
                            );
                            echo createSlat($slat);
                            ?>
                        </section>
                        <!-- End: No Selected Rater -->
                    <?php } ?>
                  

                   
                    <?php if($_SESSION["returnFromSelectPeers"] == true) { ?>
                            <!-- START: Selected Peers -->
                            <section class="section manage-peers">
                                <!--<h2>Peers <small>The employee's colleague(s) who will be rating the assessment. </small></h2>-->
                                <h3>Peers</h3>
                                <?php

                                    $peerSearchUrl = "/assessment-peer-search.php";

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    ),
                                    'title' => 'Rita Moore',
                                    'meta' => array(
                                        
                                        array(
                                            'label' => 'Department:',
                                            'value' => 'Cardiology',
                                        ),
                                        array(
                                            'label' => 'Job Title:',
                                            'value' => 'Surgical Technician',
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
                                <a href="<?php echo $peerSearchUrl?>" class="btn btn-default">Select Peers</a>
                            </section>
                            <!-- END: Selected Peers -->
                    <?php } else { 
                               
                               $peerSearchUrl = "/assessment-peer-search.php";
                        ?>
                            <!-- START: No Selected Peers -->
                            <section class="section">
                                  <h3>Peers</h3>
                                 <!--<h2>Peers <small>The employee's colleague(s) who will be rating the assessment. </small></h2>-->
                            <div class="slat" >
                                    <div class="slat-message" style="padding: 0 0 10px 0;">
                                        <h4>You don't have any peers selected.</h4>
                                        <a href="<?php echo $peerSearchUrl?>" class="btn btn-default" style="margin:0;">Select Peers</a>
                                    </div>
                                </div>
                               
                            </section>
                            <!-- End: No Selected Peers -->
                    <?php } ?>


                    <?php 
                    if($_SESSION["single"] == false) { ?>

                        <!-- START: Select Additional Assessments -->

                          <?php  
                              $actormanagement = array(
                                        'actor' => array(
                                            
                                            array(
                                                 'employee' => 'Conner, Rosalyn F.',
                                                 'rater' => 'Crane, Darcy L.',
                                                 'peer-1' => 'Park, Jennifer S.',
                                                 'peer-2' => 'Montoya, Alice G.',
                                                 'peer-3' => 'Juniper, Stephanie P.',
                                             ),
                                             array(
                                                 'employee' => 'Juniper, Stephanie P.',
                                                 'rater' => 'Crane, Darcy L.',
                                                 'peer-1' => 'Park, Jennifer S.',
                                                 'peer-2' => 'Montoya, Alice G.',
                                                 'peer-3' => 'Conner, Rosalyn F.',
                                             ),
                                            array(
                                                 'employee' => 'Montoya, Alice G.',
                                                 'rater' => 'Crane, Darcy L.',
                                                 'peer-1' => 'Park, Jennifer S.',
                                                 'peer-2' => 'Juniper, Stephanie P.',
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
                                                 'peer-2' => 'Juniper, Stephanie <P class=""></P>',
                                                 'peer-3' => 'Conner, Rosalyn F.',
                                             ),
                                    ),
                                )
                            ?>

                        <!--<a href="#" class="select-more-assessments">Assign selected Rater and Peers to more assessments</a>-->
                        <div class="panel-group panel-group-slats" role="tablist" id="panel-group-1" aria-multiselectable="true" style="border:1px solid #ececec;">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <a role="button" data-toggle="collapse" data-parent="#panel-group-1" href="#panel-1" class="collapsed">
                                    Assign Rater and Peers to More Assessments
                                    <div class="panel-heading-icon">
                                        <i class="fa fa-chevron-down panel-heading-icon-closed"></i>
                                        <i class="fa fa-chevron-up panel-heading-icon-open"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="panel-1" class="panel-collapse collapse" role="tabpanel" style="height: 0px;">
                                <div class="panel-body">
                                                                                    
                                           <!--start assesment content-->

                                     

                        <section class="section actor-management ">
                            <div class="row">
                                <div class="col-xs-8 section-header-title">
                                    <!--<h2>Assessments <small>Select additional assessments to update</small></h2>-->
                                    <!--<h2>Assessments</h2>-->
                                 
                                </div>
                                <div class="col-xs-12">
                                      <div class="pull-left"> <h3 style="margin-top:0px;">Initial Nursing Competency Appraisal</h3></div>
                                    <div class="pull-right"><a class="btn btn-default btn-sm" href="#" id="btn-select-all" data-labels="Select All|Deselect All">Select All</a></div>
                                </div>
                            </div>
                            
                            <div class="actor-management-heading">
                                <div class="select">
                                    <label></label>
                                </div>
                                <div class="actor-management-heading__employee">Assessment For</div>
                                <div class="actor-management-heading__rater">Rater</div>
                                <div class="actor-management-heading__peers">Peers</div>
                            </div>

                            <?php 
                            foreach ($actormanagement['actor'] as $actor) { ?>
                                <?php if ($actor['employee'] == 'Juniper, Stephanie P.'){ ?>
                                    <div class="checkable checkable-checked">
                                <?php }
                                   else { ?>
                                    <div class="checkable ">
                                <?php } ?>
                                    <div class="select">
                                        <label>
                                             <?php if ($actor['employee'] == 'Juniper, Stephanie P.'){ ?>
                                                <input type="checkbox" class="checkbox" checked="true">
                                            <?php }
                                                else { ?>
                                                 <input type="checkbox" class="checkbox">
                                            <?php } ?>
                                            <span class="icon"></span>
                                        </label>
                                    </div>
                                    <div class="actor-management slat slat-callout">
                                        <div class="actor-management__employee">
                                            <div class="title">
                                               <span class="meta-value">
                                                        <?= $actor['employee'] ?>
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
                                        <div class="action">
                                            <a class="btn btn-sm btn-default" 
                                                href="assessment-manage-rater-peers.php?return-to-prev=1&single=1">
                                                    Edit<i class="fa fa-pencil visible-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                          <?php } ?>
                                        
                        </section>

                           </div>
                                    </div>
                                </div>
                            </div>

                            <!--<section class="section">
                            <a href="#" class="btn btn-success save-button">Save</a> <a href="/assessment-manage-rater-peers.php" class="btn btn-default">Cancel</a>
                            </section>-->
                    <!-- END: Select Additional Assessments -->
                <?php } ?>
                  
                <?php
                        $stickybar = array(
                            'sets' => array(
                               array(
                                        'position' => 'left',
                                        'classes' => array('visible-xs','visible-sm, visible-md','visible-lg'),
                                        'html' => '<a href="#" class="btn btn-success save-button">Save</a><a href="/assessment-manage-rater-peers.php" class="btn btn-default">Cancel</a>',
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

    $('.save-button').click(function() {
        window.location.href = "assessment-overview.php" + 
            "?growlTitle=Assessment Changes Saved" + 
                    "&growlType=success" + 
                    "&growlText=Raters and/or Peers have been successfully updated.#details";

    })
});
</script>
<?= createSiteEnd(); ?>