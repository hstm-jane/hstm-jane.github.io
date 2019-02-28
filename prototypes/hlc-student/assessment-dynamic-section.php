<?php
session_start(); 

include "includes/helpers/helpers.php";
include "includes/data/assessments.php";

 $_SESSION = array();
session_destroy();

//echo isset($_GET['returnFromStatement']);

$assessmentID = (!empty($_GET['assessment']))?$_GET['assessment']:'competency-1';
$assessment = $assessments[$assessmentID];
$assessmentTitle = $assessment['title'];

$title = (!empty($_GET['title']))?$_GET['title']:'';

if ($assessment == 'competency-7') {
    $assessment['date'] = date('M j, Y',strtotime('+10days'));  
}
else {
     $assessment['date'] = date('M j, Y',strtotime('+20days'));  
}

$patterns['start']['title'] = $assessments['competency-7']['title'];
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
$patterns['focus']['title'] = $assessment['title'];
$patterns['focus']['icon'] = array('class' => 'hs-icons-assessment','type' => 'Assessment');
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Due:',
        'value' =>  $assessment['date'],
    ),
);

$employees = array(
    'Basile, Victor P.',
    'Bradford, Julie D.',
    'Fiedler, Joanne M.',
    'Juniper, Stephanie P.',
    'Montoya, Alice G.',
    'Park, Jennifer S.',
    'Riley, Phillip A.',
    'Rink, Christopher P.',
    'Story, Yvonne G.',
    'Wilder, Janice M.'
);
?>
<?= createSiteStart($patterns['start']); ?>
<style>
    
    .btn-success:focus, .btn-success:hover, 
    .btn-default:focus, .btn-default:hover, 
    {
        background-position:  -14px;
    }

    .checkable .slat {
        border-left: inherit;
    }
    .checkable-single > .select .icon {
        background-position: center 0;
    }
    .checkable-single.checkable-checked > .select .icon {
        background-position: center -30px;
    }
    .text-right {
        margin-top: 20px;
    }
    .selected-section {
       /* margin-left: 20px;*/
    }
</style>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

 <input type="hidden" value='<?= isset($_GET['returnFromStatement'])?>' id="ReturnFromSelectStatements">
 <input type="hidden" value='<?= isset($_GET['returnFromJob'])?>' id="ReturnFromJobDescriptions">
 <input type="hidden" value='<?= $assessmentTitle ?>' id="AssessmentTitle">

<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            
                <section class="section section-main section-box" data-equalize="layout-columns">
                <div class="alert alert-danger collapse " id="ValidationMessage">
                        
                    </div>
                 <section class="section">
                            <h2>Add to a Dynamic Section</h2>
                            <p>Use the options below to update the dynamic sections of this assessment. Additions will apply only to active assessments in the Evaluate state in departments that you have permisions to manage. These steps must be repeated if new employees are added to a student group(s) after completing this process.</p>
                        </section>
                <div class="tab-content">
                    <div class="collapse in active" id="step1">
                       
                        <section class="section">
                            <h3>Step 1: Sections <small>Choose a dynamic section to add content</small></h3>
                            <select class="form-control" id="SectionType">
                                <?php
                                    $sections = array(
                                        array('Choose',''),
                                        array('Dynamic Statements Section','statements'),
                                        array('Dynamic Job Descriptions Section','jobdescriptions')
                                    );
                                    for ( $i = 0; $i < 3; $i++ ) {
                                ?>
                                <option value='<?= $sections[$i][1] ?>'><?= $sections[$i][0] ?></option>
                                <?php } ?>
                            </select>
                        </section>
                        <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'html' => '
                                        <a href="assessment-overview.php" class="btn btn-default">Cancel</a>
                                    ',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>
                    </div> <!--/select type tab-->
                    <div class="collapse" id="step1-complete">
                       
                        <section class="section">
                            <h3>Step 1: Sections </h3>
                            <h4>
                                <?php
                                    if(isset($_GET['returnFromStatement'])) {
                                        echo '<span class="selected-section">Dynamic Statements Section</span>';
                                    }
                                    else if(isset($_GET['returnFromJob'])) {
                                        echo '<span class="selected-section">Dynamic Job Descriptions Section</span>';
                                    }
                                    else {
                                        echo '<span class="selected-section"></span>';
                                    }
                                ?>
                            
                            <small style="font-size:14px"> - <span style="font-style:normal;">(<a href="assessment-dynamic-section.php" >Change Section</a></span> - You will lose any unsaved work on this section<span style="font-style:normal;">)</span></small></h4>
                        </section>
                    </div> <!--/select type tab-->

                    <div class="collapse" id="step2-statements">

                       
                        
                        <!-- START: Statements - Display Selections -->
                        <section class="section statements-selected collpase" >
                            <h3>Step 2: Statements <small>Choose the items(s) to share</small></h3>

                            <?php

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat')),
                                ),
                                'title' => '<a href="#modal-preview" data-toggle="modal">'.$title.'</a>',
                                'meta' => array(
                                    array(
                                        'label' => 'Owner:',
                                        'value' => 'County Memorial Hospital',
                                    ),
                                    array(
                                        'label' => 'Updated:',
                                        'value' => 'Apr 13, 2016',
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single-danger',
                                    'content' => 'Remove<i class="fa fa-times visible-xs"></i>',
                                    'link' => '#',
                                )
                            );
                            echo createSlat($slat);

                            ?>
                        </section>
                        <section class="section section-footer statements-selected-footer collpase">
                            <a href="assessment-search-statements.php?assessment=<?= $assessmentID ?>" class="btn btn-default">Select Statements</a>
                        </section>
                        <!-- END: Statements - Display Selections -->
                       
                        <!-- START: Statements - Nothing selected -->
                        <section class="section statements-not-selected collpase">
                            <h3>Step 2: Statements <small>Choose the items(s) to share</small></h3>
                            <div class="slat">
                                <div class="slat-message">
                                    <h3>You don't have any statements selected.</h3>
                                    <a href="assessment-search-statements.php?assessment=<?= $assessmentID ?>" class="btn btn-default">Select Statements</a>
                                </div>
                            </div>
                        </section>
                        <!-- END: Statements - Nothing Selected -->
                       
                    </div><!--/statements tab-->

                    <div class="collapse" id="step2-jobdescriptions">
                        
                        <section class="section jobdescriptions-selected collpase">
                            <h3>Step 2: Job Descriptions <small>Choose the items(s) to share</small></h3>

                            <?php

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat')),
                                ),
                                 'title' => '<a href="#modal-preview" data-toggle="modal">'.$title.'</a>',
                                'meta' => array(
                                    array(
                                        'label' => 'Owner:',
                                        'value' => 'County Memorial Hospital',
                                    ),
                                    array(
                                        'label' => 'Updated:',
                                        'value' => 'Dec 13, 2015',
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single-danger',
                                    'content' => 'Remove<i class="fa fa-times visible-xs"></i>',
                                    'link' => '#',
                                )
                            );
                            echo createSlat($slat);

                            ?>
                        </section>
                        <section class="section section-footer jobdescriptions-selected-footer collpase">
                            <a href="assessment-search-job-descriptions.php?assessment=<?= $assessmentID ?>" class="btn btn-default">Select Job Descriptions</a>
                        </section>
                        <!-- END: Job Descriptions - Display Selections -->
                      
                        <!-- START: Job Descriptions - Nothing selected -->
                        <section class="section jobdescriptions-not-selected collpase">
                            <h3>Step 2: Job Descriptions <small>Choose the items(s) to share</small></h3>
                            <div class="slat">
                                <div class="slat-message">
                                    <h3>You don't have any job descriptions selected.</h3>
                                    <a href="assessment-search-job-descriptions.php?assessment=<?= $assessmentID ?>" class="btn btn-default">Select Job Descriptions</a>
                                </div>
                            </div>
                        </section>
                        <!-- END: Job Descriptions - Nothing Selected -->
                       
                    </div> <!--/job description tab-->

                    <div class="collapse" id="step3">

                        <section class="section  people">
                            <div class="section-header">
                                <div class="row">
                                    <div class="col-xs-8 section-header-title">
                                        <h3>Step 3: People <small>Choose who receives the updates</small></h3>
                                    </div>
                                    <div class="col-xs-4 text-right">
                                        <a class="btn btn-default btn-sm" href="#" id="btn-select-all" data-labels="Select All|Deselect All">Select All</a>
                                    </div>
                                </div>
                            </div>
                             <?php for ( $i = 0; $i < 7; $i++ ) {

                                $slat = array(
                                    'attributes' => array(
                                            array('class',array('slat','slat-callout')),
                                        ),
                                        'title' => $employees[$i],
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
                                    'action' => array(),
                                );
                                
                                if ($employees[$i] == 'Juniper, Stephanie P.') {
                                    echo '<div class="checkable checkable-checked">';
                                }
                                else {
                                    echo '<div class="checkable">';
                                }
                               
                                echo createSlat($slat);
                                echo '<div class="select"><label><input type="checkbox" class="checkbox"><span class="icon"></span></label></div></div>';

                                } ?>
                         <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'html' => '
                                        <a href="#" class="btn btn-success" id="Add">Save</a>
                                        <a href="#" class="btn btn-success" id="SaveAndAdd">Save and Add Another</a>
                                        <a href="assessment-overview.php" class="btn btn-default">Cancel</a>
                                    ',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>

                        </section>
                    </div> <!--/people tab-->

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

<!-- Modal -->
<div id="modal-preview" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title"><?= $_GET['title'] ?></h4>
            </div>
            <div class="modal-body">
                <section class="section">

                        Demonstrates ability to consistently apply critical thinking abilities to positively impact patient and organizational outcomes.

                </section>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div><!-- /modal -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        if($('#ReturnFromSelectStatements').val() == "1") {
                $('#step1').hide();
                $('#step1-complete').show();
                $('#step2-statements').show();
                $('#step3').show(); 
                $('.statements-not-selected').hide();
                $('.statements-selected').show();
                $('.statements-selected-footer').show();
        }
        else if($('#ReturnFromJobDescriptions').val() == "1") {
            console.log('here');
                $('#step1').hide();
                $('#step1-complete').show();
                $('#step2-jobdescriptions').show();
                $('#step3').show(); 
                $('.jobdescriptions-not-selected').hide();
                $('.jobdescriptions-selected').show();
                $('.jobdescriptions-selected-footer').show();
        }
      
        $('#SectionType').change(function(e){
            e.preventDefault();
            $('.selected-section').text($('#SectionType option:selected').text());
            ManageSections();
        });

        function ManageSections(){
            if($("#SectionType").val() == "statements") {
                $('#step1').hide();
                $('#step1-complete').show();
                $('#step2-statements').show();
                $('.statements-not-selected').show();
                $('.statements-selected').hide();
                $('.statements-selected-footer').hide();
                $('#step3').show();
               
            }
            else if($("#SectionType").val() == "jobdescriptions") { 
                $('#step1').hide();
                $('#step1-complete').show();
                $('#step2-jobdescriptions').show();
                $('.jobdescriptions-not-selected').show();
                $('.jobdescriptions-selected').hide();
                $('.jobdescriptions-selected-footer').hide();
                $('#step3').show();
            }
            $(window).resize();
        }

        function ResetPage() {
            $('#step1').show();
            $('#step1-complete').hide();
            $('#step2-statements').hide();
            $('.statements-not-selected').hide();
            $('.statements-selected').hide();
            $('.statements-selected-footer').hide();
            $('.jobdescriptions-not-selected').hide();
            $('.jobdescriptions-selected').hide();
            $('.jobdescriptions-selected-footer').hide();
            $('#step3').hide();
            $("#SectionType").val('');
            $(window).resize();
        }

        function IsValidDynamicSection(){
            if ($('.selected-section:contains("Statement")').length > 0) {
                if ($('.statements-selected:visible').length == 0 || $('.checkable-checked').length == 0) {
                    $('#ValidationMessage').show();
                    $('#ValidationMessage').html("You must select at least one Statement and at least one Person to add to the Dynamic Section.");
                   
                    document.body.scrollTop = document.documentElement.scrollTop = 0;
                    setTimeout(function() {
                        $(document.body).scrollTop(0);
                    }, 0);
                     return false;
                }
            }
            else if ($('.selected-section:contains("Job")').length > 0) {
                if ($('.jobdescriptions-selected:visible').length == 0 || $('.checkable-checked').length == 0) {
                    $('#ValidationMessage').show();
                    $('#ValidationMessage').html("You must select at least one Job Description and at least one Person to add to the Dynamic Section.");
                   
                    document.body.scrollTop = document.documentElement.scrollTop = 0;
                    setTimeout(function() {
                        $(document.body).scrollTop(0);
                    }, 0);
                     return false;
                }
            }
            return true;
        }

        $('#Add').click(function(e){
            e.preventDefault();
            if(IsValidDynamicSection()) {
                window.location.href = "/assessment-overview.php" + 
                    "?growlTitle=Dynamic Section Added Successfully" + 
                    "&growlType=success" + 
                    "&growlText=The " + $('.selected-section').html() + " has been added to the following assessment:<br> <br>Juniper, Stephanie P.<br>" + $('#AssessmentTitle').val();
            }
        });

         $('#SaveAndAdd').click(function(e){
            e.preventDefault();
            if(IsValidDynamicSection()) {
                ResetPage();
                HealthStream.utilities.growl({
                    type: 'success',
                    title:'Dynamic Section Added Successfully',
                    text: "The " + $('.selected-section').html() + " has been added to the following assessment:<br> <br>Juniper, Stephanie P.<br>" + $('#AssessmentTitle').val() ,
                    sticky: false
                });
            }

        });

        $('#step2-statements > section.section.statements-selected > div > div > div.action > a').click(function(){
           
            $('.statements-not-selected').show();
            $('.statements-selected').hide();
            $('.statements-selected-footer').hide();
           
            
        });
        $('#step2-jobdescriptions > section.section.jobdescriptions-selected > div > div > div.action > a').click(function(){

            $('.jobdescriptions-not-selected').show();
            $('.jobdescriptions-selected').hide();
            $('.jobdescriptions-selected-footer').hide();
        });

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

     $('.checkable-checked').find('.checkbox').prop( "checked", true );

    });
</script>
<?= createSiteEnd(); ?>