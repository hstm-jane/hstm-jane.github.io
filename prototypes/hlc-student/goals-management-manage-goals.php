<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Manage Goals';
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
        <li class="{active=goals}"><a href="/goals-management.php">Goals</a></li>
        <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'goals',
);
$patterns['focus']['title'] = 'Manage Goals';

?>
<style>
/**/
.help-text {
    color: #ababab
}
.sidebar h3 {
    margin:0 !important;
}

</style>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout layout-goal-management ">
    <div class="container">
        <section class="section section-main section-box" style="padding:0;">
        
 <div class="col-lg-7 content-column">
                    <div class="content">
                         <div class="assessment-header">
                <div class="assessment-return"><a href="goals-management.php"><i class="fa fa-fw fa-chevron-left"></i>Return to Goal Package Overview</a> </div>
            </div>
                         <h4>Goal Package: <strong>2017 Organization Goals</strong></h4>
                        <table id="mainTable" class="table ">
                            <!--<thead><tr><th>Name</th><th>Cost</th><th>Profit</th><th>Fun</th></tr></thead>-->
                            <tbody>
                                <tr>
                                    <td class="avatar-column"><div class="goal-assigned-icon" style="overflow:hidden;"><img src="/content/images/avatar.jpg" width="100%" height="100%"></div></td>
                                    <td class="goal-name">HCAHPS: Achieve 65th percentile overall rating of hospital</td>
                                </tr>
                                <tr>
                                    <td class="edit-disabled"></td>
                                    <td class="edit-disabled ">
                                         <table id="tier1-goal-subtable" class="table ">
                                            <!--<thead><tr><th>Name</th><th>Cost</th><th>Profit</th><th>Fun</th></tr></thead>-->
                                            <tbody>
                                                <tr>
                                                    <td class="avatar-column"><div class="goal-assigned-icon" style="overflow:hidden;"><img src="/content/images/avatar.jpg" width="100%" height="100%"></div></td>
                                                    <td class="goal-name">ED: Achieve pt perception of the 50th percentile</td>
                                                </tr>
                                                 <tr>
                                                    <td class="edit-disabled"></td>
                                                    <td class="edit-disabled ">
                                                        <table id="tier2-goal-subtable" class="table ">
                                                            <!--<thead><tr><th>Name</th><th>Cost</th><th>Profit</th><th>Fun</th></tr></thead>-->
                                                            <tbody>
                                                                <tr>
                                                                    <td class="avatar-column edit-disabled"><div class="goal-assigned-icon" style="overflow:hidden;"><img src="/content/images/avatar.jpg" width="100%" height="100%"></div></td>
                                                                    <td class="goal-name"><span class="goal-name-value">Team Goal 1<span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="avatar-column edit-disabled"><div class="goal-assigned-icon" style="overflow:hidden;"><img src="/content/images/avatar.jpg" width="100%" height="100%"></div></td>
                                                                    <td class="goal-name">Team Goal 2</td>
                                                                </tr>       
                                                                <tr>
                                                                    <td class="avatar-column edit-disabled"><div class="goal-assigned-icon" style="overflow:hidden;"><img src="/content/images/avatar.jpg" width="100%" height="100%"></div></td>
                                                                    <td class="goal-name">Team Goal 2</td>
                                                                </tr>                         
                                                            </tbody>
                                                            <!--<tfoot><tr><th><strong>TOTAL</strong></th><th></th><th></th><th></th></tr></thead>-->
                                                        </table>
                                                        <div class="add-goal-inline edit-disabled">Add Team Goal</div>
                                                    </td>
                                                </tr>  
                                                  <tr>
                                                    <td class="avatar-column edit-disabled"><div class="goal-assigned-icon" style="overflow:hidden;"><img src="/content/images/avatar.jpg" width="100%" height="100%"></div></td>
                                                    <td class="goal-name">Ambulatory: Achieve pt perception of the 65th percentile</td>
                                                </tr>   
                                                <tr>
                                                    <td class="edit-disabled"></td>
                                                    <td class="edit-disabled">
                                                         <table id="tier2-goal-subtable" class="table ">
                                                            <!--<thead><tr><th>Name</th><th>Cost</th><th>Profit</th><th>Fun</th></tr></thead>-->
                                                            <tbody>
                                                                           
                                                            </tbody>
                                                            <!--<tfoot><tr><th><strong>TOTAL</strong></th><th></th><th></th><th></th></tr></thead>-->
                                                        </table>
                                                           <div class="add-goal-inline edit-disabled">Add Team Goal</div>
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td class="avatar-column edit-disabled"><div class="goal-assigned-icon" style="overflow:hidden;"><img src="/content/images/avatar.jpg" width="100%" height="100%"></div></td>
                                                    <td class="goal-name">Inpatient: Achieve pt perception of the 65th percentile</td>
                                                </tr>   
                                                <tr>
                                                    <td class="edit-disabled"></td>
                                                    <td class="edit-disabled">
                                                         <table id="tier2-goal-subtable" class="table ">
                                                            <!--<thead><tr><th>Name</th><th>Cost</th><th>Profit</th><th>Fun</th></tr></thead>-->
                                                            <tbody>
                                                                           
                                                            </tbody>
                                                            <!--<tfoot><tr><th><strong>TOTAL</strong></th><th></th><th></th><th></th></tr></thead>-->
                                                        </table>
                                                           <div class="add-goal-inline edit-disabled">Add Team Goal</div>
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td class="avatar-column edit-disabled"><div class="goal-assigned-icon" style="overflow:hidden;"><img src="/content/images/avatar.jpg" width="100%" height="100%"></div></td>
                                                    <td class="goal-name">Physician: Achieve 37% overall on physician engagement survey</td>
                                                </tr>   
                                                <tr>
                                                    <td class="edit-disabled"></td>
                                                    <td class="edit-disabled">
                                                         <table id="tier2-goal-subtable" class="table ">
                                                            <!--<thead><tr><th>Name</th><th>Cost</th><th>Profit</th><th>Fun</th></tr></thead>-->
                                                            <tbody>
                                                                           
                                                            </tbody>
                                                            <!--<tfoot><tr><th><strong>TOTAL</strong></th><th></th><th></th><th></th></tr></thead>-->
                                                        </table>
                                                           <div class="add-goal-inline edit-disabled">Add Team Goal</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--<tfoot><tr><th><strong>TOTAL</strong></th><th></th><th></th><th></th></tr></thead>-->
                                        </table>
                                         <div class="add-goal-inline edit-disabled">Add Department Goal</div>
                                    </td>
                                </tr> 
                                <!--<tr>
                                    <td class="avatar-column"><div class="goal-assigned-icon" style="overflow:hidden;"><img src="/content/images/avatar.jpg" width="100%" height="100%"></div></td>
                                    <td class="goal-name">Organization Goal 2</td>
                                </tr>                         -->
                            </tbody>
                            <!--<tfoot><tr><th><strong>TOTAL</strong></th><th></th><th></th><th></th></tr></thead>-->
                        </table>
                        <div class="add-new-top-level-goal">
                            <a href="#">
                                <span class="fa-stack">
                                    <i class="fa fa-circle-o fa-stack-2x"></i>
                                    <i class="fa fa-plus fa-stack-1x"></i>
                                </span>
                                Add another organization goal
                            </a>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-5 sidebar-column">
                     <div class="sidebar">
                        <h3>Goal Details</h3>
                        Not sure how what these fileds mean? Here are some <a href="#" class="show-help">tips</a>.
                        <div class="form-group">
                            <label class="control-label question-title">Goal Title</label>
                             <div class="help-text collapse">Here is some help text.<a href="javascript:aboutA('whats-a-good-base');">More&nbsp;→</a></div>
                            <!--<span class="help-block">What is your Goal?</span>-->
                            <div class="creategoal-answer" style="margin-left:15px;">
                                <input type="text" id="GoalNameTextBox" class="form-control input-sm"/>
                            </div>
                        </div>  
                         <div class="form-group">
                            <label class="control-label question-title">Description</label>
                             <div class="help-text collapse">Here is some help text. <a href="javascript:aboutA('whats-a-good-base');">More&nbsp;→</a></div>
                            <!--<span class="help-block">What is your Goal?</span>-->
                            <div class="creategoal-answer" style="margin-left:15px;">
                                <input type="text" class="form-control input-sm"/>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label class="control-label question-title">Type</label>
                             <div class="help-text collapse">Here is some help text. <a href="javascript:aboutA('whats-a-good-base');">More&nbsp;→</a></div>
                            <!--<span class="help-block">What type of goal is this?</span>-->
                             <div class="creategoal-answer" style="margin-left:15px;">
                                <select class="form-control input-sm" placeholder="Choose"> 
                                    <!--<option disabled selected>Select Type</option>-->
                                     <option value="" disabled selected hidden>Please Choose...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>  

                    <div style="margin-top:25px;" class="show-advanced"><a href="#" class="pull-right">Show Advanced Settings</a></div>
                    <div style="margin-top:25px;" class="hide-advanced collapse"><a href="#" class="pull-right ">Hide Advanced Settings</a></div>

                     <div class="clearfix"></div>
                    <div class="advanced-settings collapse">
                        <!--<hr>-->
                         
                    <h4 style="margin-bottom:20px;">Advanced Settings</h4>
                        
                         <div class="form-group">
                            <label class="control-label question-title">Dates</label>
                            <!--<span class="help-block">What dates will this goal be active?</span>-->
                             <div class="creategoal-answer" style="margin-left:15px;">
                                <div class="row" style="margin-top:10px;">
                                    <div class="col-lg-4">Start Date</div>
                                    <div class="col-lg-8">
                                        <div class="input-group bootstrap-datepicker">
                                            <input type="text" class="form-control datepicker input-sm" id="event-end-date" tabindex="1">
                                            <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:10px;">
                                    <div class="col-lg-4">End Date</div>
                                    <div class="col-lg-8 ">
                                        <div class="input-group bootstrap-datepicker">
                                            <input type="text" class="form-control datepicker input-sm" id="event-end-date" tabindex="1">
                                            <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 

<div class="row">
    <div class="col-lg-6">
                        <div class="form-group">
                              <label class="control-label question-title">Measurements</label>
                            <!--<span class="help-block">What dates will this goal be active?</span>-->
                             <div class="creategoal-answer" style="margin-left:25px;">
                                <div class="row" style="margin-top:10px;">
                                    <div style="width:60px;float:left;margin-right:7px;">Starting</div>
                                     <div style="width:40px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                    <div style="width:90px;float:left;">
                                        <select class="form-control input-sm">
                                            <option>Percentile</option>
                                            <option>Dollars</option>
                                            <option>Units</option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="row" style="margin-top:10px;">
                                    <div style="width:60px;float:left;margin-right:7px;">Target</div>
                                     <div style="width:40px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                    <div style="width:90px;float:left;">
                                        <select class="form-control input-sm">
                                            <option>Percentile</option>
                                            <option>Dollars</option>
                                            <option>Units</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:10px;">
                                    <div style="width:60px;float:left;margin-right:7px;">Stretch</div>
                                   
                                    <div style="width:40px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                    <div style="width:90px;float:left;">
                                        <select class="form-control input-sm">
                                            <option>Percentile</option>
                                            <option>Dollars</option>
                                            <option>Units</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>

                  
                        <div class="col-lg-5" style="border-left:1px #e9e9e9 solid;margin-left:20px;">

                                <div class="form-group">
                         <label class="control-label question-title">Scoring</label>
                            <!--<span class="help-block">Define the percentage weight that this goal should have. </span>-->
                             <div class="creategoal-answer">
                                
                                <div class="row" style="margin-top:10px;margin-left:15px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:14px;">1 = </div>
                                    <div style="width:75px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                </div>
                                 <div class="row" style="margin-top:10px;margin-left:15px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:14px;">2 = </div>
                                    <div style="width:75px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                </div>
                                 <div class="row" style="margin-top:10px;margin-left:15px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:14px;">3 = </div>
                                    <div style="width:75px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                </div>
                                 <div class="row" style="margin-top:10px;margin-left:15px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:14px;">4 = </div>
                                    <div style="width:75px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                </div>
                                 <div class="row" style="margin-top:10px;margin-left:15px;">
                                    <div style="width:30px;float:left;margin-right:7px;font-size:14px;">5 = </div>
                                    <div style="width:75px;float:left;margin-right:7px;">
                                       <input class="form-control input-sm" type="text"/>
                                    </div>
                                </div>

                        </div>
                            </div>
                     </div>
                     </div>

                    <div class="form-group">

                        <label class="control-label question-title">Resources</label>
                            <span class="help-block">Upload any resources that you would like to share about this goal.</span>
                             <div class="creategoal-answer" style="margin-left:20px;">
                             <div class="input-group">
                                    <label class="input-group-btn">
                                        <span class="btn btn-default btn-sm">
                                            Browse… <input type="file" style="display: none;" multiple="">
                                        </span>
                                    </label>
                                    <input type="text" class="form-control input-sm" readonly="">
                                </div>
                            </div>
                        </div>
                



                        <!--end of column-->
                    </div>
                </div>

           <?php
                // $stickybar = array(
                //     'sets' => array(
                //         array(
                //             'html' => '
                //                 <a href="goals-management-create-package.php" class="btn btn-default">Create New Goal Package</a>
                //             ',
                //         ),
                //     ),
                // );
                // echo createStickybar($stickybar);
            ?>


        </section>
    </div><!-- /container -->
</div> <!-- /layout -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="/scripts/wizard.js"></script>
<script src="/scripts/prototype.goals.wizard.js"></script>
<script>

    $('.show-help').click(function() {
        if($('help-text').is(':visible')) {
             $('.help-text').hide();
        }
        else {
            $('.help-text').show();
        }

 
       
    });

    
</script>

<!-- start Mixpanel --><script type="text/javascript">(function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,
0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
mixpanel.init("3f282003949f95867527ffca875ca965");</script><!-- end Mixpanel -->


<?= createSiteEnd(); ?>
