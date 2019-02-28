<?php
    include "includes/helpers/helpers.php";
    
    $patterns['start']['title'] = 'Manage Rater and Peers';
    $patterns['focus']['title'] = 'Manage Rater and Peers';
    $patterns['header'] = array(
        'classes' => array('site-header--assessments'),
        'userName' => 'Darcy L. Crane',
        'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">',
        'mainNav' => '
            <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
            <li class="{active=todo}"><a href="/todo.php?rater">To Do</a></li>
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
            <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
            <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
            <li class="disabled"><a href="#">Help</a></li>
            <li class="visible-xs"><a href="#">Logout</a></li>',
        'mainNavActive' =>'raters',
    );
    
    $returnFromRaters = (isset($_GET['returnFromRaters']))?'&returnFromRaters':'';
    $returnFromPeers = (isset($_GET['returnFromPeers']))?'&returnFromPeers':'';
    $single = (isset($_GET['single']))?'&single':'';
    
    ?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <section class="section section-main section-box">
                <section class="return-link">
                    <a href="assessment-overview.php#details">
                    <i class="fa fa-fw fa-chevron-left"></i>Return to Rater Overview
                    </a>
                </section>
                <section class="section actor-management-page-header">
                    <h3>Assessment: Initial Nursing Competency Appraisal</h3>
                    <?php if( isset($_GET['single'])) { ?>
                    <h4>Employee: Stephanie Juniper</h4>
                    <?php } ?>
                </section>
                <section class="section">
                    <?php if( !isset($_GET['single'])) { ?>
                    <!--<h3>Step 1: <small>Select Rater and/or Peers</small></h3>-->
                    <!--<h3>Bulk Edit: <small>Select Rater and/or Peers to apply to the selected assessments below</small></h3>-->
                    <h4>Select Rater and/or Peers to apply to the selected assessments below</h4>
                    <?php } ?>
                    <div class="row actor-management actor-management__select-rater-peers">
                        <div class="col-sm-6">
                            <div class="select-box">
                                <h3>Rater </h3>
                                
                                <?php if(isset($_GET['returnFromRaters']) || isset($_GET['single'])) {?>

                                    <!--A rater has been selected-->
                                    <a href="assessment-rater-search.php?a=b<?=$returnFromPeers?><?=$single?>" >Change Rater</a>
                                <div class="checkable checkable-checked chk-peer-selector checkable">
                                    <div class="select">
                                            <label>
                                            <input type="checkbox" class="checkbox" checked>
                                            <span class="icon"></span>
                                            </label>
                                        </div>
                                        <div class="slat slat-callout" data-filter-category="0">
                                            <div class="slat-default">
                                                <div class="title">Benson, Carol D. </div>
                                                <ul class="meta">
                                                    <li class="meta-callout">
                                                        <span class="meta-label">DEPARTMENT:</span>
                                                        <span class="meta-value">Nursing</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                               
                               
                                <?php } else {?>
                                    <!--A rater has NOT been selected-->
                                    <a href="assessment-rater-search.php?a=b<?=$returnFromPeers?><?=$single?>" >Select Rater</a>
                                    <ul class="list-unstyled mini-slat">
                                        <li>
                                            <h4>No alternate rater has been selected.</h4>
                                        </li>
                                    </ul>
                                <?php }?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="select-box">
                                <h3>Peers</h3>
                                <a  href="assessment-peer-search.php?a=b<?=$returnFromRaters?><?=$single?>">Select Peers</a>
                                <?php if(isset($_GET['returnFromPeers'])|| isset($_GET['single'])) {?>
                                <!--Peers have been selected-->
                               <div class="checkable checkable-checked chk-peer-selector checkable">
                                   <div class="select">
                                        <label>
                                        <input type="checkbox" class="checkbox" checked>
                                        <span class="icon"></span>
                                        </label>
                                    </div>
                                    <div class="slat slat-callout" data-filter-category="0">
                                        <div class="slat-default">
                                            <div class="title">Brooks, Linda G. </div>
                                            <ul class="meta">
                                                <li class="meta-callout">
                                                    <span class="meta-label">DEPARTMENT:</span>
                                                    <span class="meta-value">Nursing</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkable checkable-checked chk-peer-selector checkable">
                                   <div class="select">
                                        <label>
                                        <input type="checkbox" class="checkbox" checked>
                                        <span class="icon"></span>
                                        </label>
                                    </div>
                                    <div class="slat slat-callout" data-filter-category="0">
                                        <div class="slat-default">
                                            <div class="title">Jones, Robert P.</div>
                                            <ul class="meta">
                                                <li class="meta-callout">
                                                    <span class="meta-label">DEPARTMENT:</span>
                                                    <span class="meta-value">Nursing</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                 <div class="checkable checkable-checked chk-peer-selector checkable">
                                   <div class="select">
                                        <label>
                                        <input type="checkbox" class="checkbox" checked>
                                        <span class="icon"></span>
                                        </label>
                                    </div>
                                    <div class="slat slat-callout" data-filter-category="0">
                                        <div class="slat-default">
                                            <div class="title">Chamberland, Marie S.</div>
                                            <ul class="meta">
                                                <li class="meta-callout">
                                                    <span class="meta-label">DEPARTMENT:</span>
                                                    <span class="meta-value">Nursing</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                               
                               
                              
                                <?php } else {?>
                                <!--Peers have NOT been selected-->
                                <ul class="list-unstyled mini-slat">
                                    <li>
                                        <h4 >No peers have been selected.</h4>
                                    </li>
                                </ul>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </section>
                <?php  
                    $actormanagement = array(
                              'actor' => array(
                                  
                                  array(
                                       'employee' => 'Conner, Rosalyn F.',
                                       'rater' => 'Crane, Darcy L.',
                                       'peer-1' => 'Park, Jennifer S.Park, Jennifer S.Park, Jennifer S.Park, Jennifer S.Park, Jennifer S.Park, Jennifer S.Park, Jennifer S.Park, Jennifer S.',
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
                <?php if( !isset($_GET['single'])) { ?>
                <!--<hr class="hr-darker">-->
                <section class="section actor-management ">
                    <div class="row">
                        <div class="col-xs-8 ">
                            <!--<h2>Assessments <small>Select additional assessments to update</small></h2>-->
                            <!--<h2>Assessments</h2>-->
                        </div>
                        <div class="col-xs-12">
                            <div class="pull-left">

                                <!--<h3 style="margin:0;">Assessments:  <small> (Optional) Assign the above raters and/or peers to the selected assessments below</small></h3>-->
                                 <!--<h4 style="margin:0;">Assign the above raters and/or peers to the selected assessments below</h4>-->
                            </div>
                            <!--<h3>Step 1: <small>Select Rater and/or Peers</small></h3></div>-->
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
                                        href="assessment-manage-rater-peers.php?single">
                                    Edit<i class="fa fa-pencil visible-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                </section>
                <?php }?>
                <?php
                    $stickybar = array(
                        'sets' => array(
                           array(
                                    'position' => 'left',
                                    'classes' => array('visible-xs','visible-sm, visible-md','visible-lg'),
                                    'html' => '<a href="/assessment-overview.php#details" class="btn btn-success save-button">Apply Selections</a><a href="/assessment-overview.php#details" class="btn btn-default">Cancel</a>',
                                ),
                              
                        ),
                    );
                    
                    echo createStickybar($stickybar);
                    ?>
            </section>
            <!-- /section-main -->
            </div><!-- /column -->
            <!-- /column -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /layout -->
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
    
             HealthStream.utilities.growl({
                    type: 'success',
                    title: 'Assessment Changes Saved',
                    text: 'Raters and/or Peers have been successfully updated..',
                    sticky: true
                });
                
        });
    });
</script>
<?= createSiteEnd(); ?>