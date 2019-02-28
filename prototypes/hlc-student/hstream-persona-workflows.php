<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'MyTeam';
$patterns['header'] = array(
    'mainNav' => '
        <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
        <li class="{active=todo}"><a href="/">To Do</a></li>
        <li class="{active=completed}"><a href="/completed.php">Completed</a></li>
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
        <li class="{active=team} dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Team <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="/team-people.php">People</a></li>
                <li><a href="/team-tasks.php">Tasks</a></li>
            </ul>
        </li>
        <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
        <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
        <li class="disabled"><a href="#">Help</a></li>
        <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'team',
);
$patterns['focus']['title'] = 'MyTeam: People';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Team Members:',
        'value' => '5',
    ),
    array(
        'label' => 'Requiring Attention:',
        'value' => '1',
    ),
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<style>
    label.checkbox {
        font-weight: 400;
    }
    .list-cards {
        margin: 10px 5px 20px;
    }
    .card {
        width: 25%;
    }
    .card a {
        display: block;
        text-decoration: none;
    }
    .card-inner {
        position: relative;
        margin: 10px;
        background-color: #fff;
        box-shadow: 0 0 5px rgba(0,0,0,.3);
    }
    .card-image {
       padding: 5px 5px 0;
    }
    .card-image img {
        width: 100%;
    }
    .card-text {
        padding: 5px 10px 10px;
        color: #333;
    }
    .card-name {
        font-size: 21px;
        font-weight: 300;
        color: #09C;
    }
    .card-id {
        color: #777;
    }
    .card-title {
        color: #555;
    }
    .card-flag {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 50px 50px 0 0;
        border-color: #FC7B00 transparent transparent transparent;
    }
    .card-flag-icon {
        position: absolute;
        top: -45px;
        left: 7px;
        font-size: 18px;
        color: #fff;
        text-shadow: 1px 1px 0 rgba(0,0,0,.2);
    }
    .card-attention .card-flag {
        display: block;
    }
    .card-attention .card-name {
        color: #FC7B00;
    }

    @media screen and (min-width: 767px) and (max-width: 960px) {
        .card {
            width: 33.3333333%;
        }
    }
    @media screen and (max-width: 766px) {
        .card {
            width: 50%;
        }
        .card-name {
            font-size: 16px;
        }
    }
</style>
<div class="layout">
    <div class="container">

        <section class="list-cards team-people">

            <?php
                $team = array(
                    array("Smith","Jill","uxceo",'JHC934568',true),
                    array("Danford","Joe","jadlimcaco",'JHC934468',false),
                    array("Jones","Sam","stylecampaign",'JHC954768',false),
                    array("Morris","Pat","adellecharles",'JHC986553',false),
                    array("White","Jack","mko",'JHC894325',false)
                );
                $twitter = array(
                    'uxceo'
                    ,'jadlimcaco'
                    ,'adellecharles'
                    ,'abecherian'
                    ,'c_southam'
                    ,'enda'
                    ,'jina'
                    ,'brynn'
                    ,'chadengle'
                    ,'stylecampaign'
                    ,'boheme'
                    ,'mko'
                    ,'amarkdalen'
                    ,'geeftvorm'
                    ,'jsa'
                    ,'jadlimcaco'
                    ,'adellecharles'
                    ,'abecherian'
                    ,'c_southam'
                    ,'enda'
                    ,'jina'
                    ,'brynn'
                    ,'chadengle'
                    ,'uxceo'
                    ,'stylecampaign'
                    ,'boheme'
                    ,'mko'
                    ,'amarkdalen'
                    ,'geeftvorm'
                );
                foreach($team as $person) {
            ?>
                <div class="card<?php if($person[4]===true) { echo ' card-attention'; } ?>">
                    <a href="./team-person.php" class="card-inner">
                        <div class="card-image">
                            <img src="https://s3.amazonaws.com/uifaces/faces/twitter/<?= $person[2]; ?>/128.jpg">
                        </div>
                        <div class="card-text">
                            <div class="card-name"><?php echo $person[0] . ', ' . $person[1]; ?></div>
                            <div class="card-id"><?php echo $person[3]; ?></div>
                            <div class="card-title">Registered Nurse</div>
                        </div>
                        <div class="card-flag"><i class="card-flag-icon fa fa-flag"></i></div>
                    </a>
                </div>
            <?php
                }
            ?>


        </section>

    </div><!-- /container -->
</div><!-- /layout -->

<!-- Modal -->
<div id="modal-refine" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <section class="section section-refinement-group">
                        <h3>Date Range</h3>
                        <div class="form-group">
                            <select class="form-control" id="select-daterange-modal">
                                <optgroup label="Presets">
                                    <option>Since January 1</option>
                                    <option>Last 6 months</option>
                                    <option selected="">Last 12 months</option>
                                    <option>Last 24 months</option>
                                    <option>Previous Calendar Year</option>
                                </optgroup>
                                <optgroup label="Custom">
                                    <option value="custom">Custom Range</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group" id="custom-daterange-modal" style="display:none">
                            <label>Start Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="<?php echo date('m/d/Y');?>">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <label style="margin-top: 10px;">End Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="<?php echo date('m/d/Y',strtotime("+365 days")); ?>">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Assessments</h3>
                        <div class="form-group">
                            <strong>Type:</strong>
                            <ul class="list-unstyled">
                                <li>
                                    <label class="checkbox"><input type="checkbox"> Self</label>
                                </li>
                                <li>
                                    <label class="checkbox"><input type="checkbox" checked> Employee</label>
                                </li>
                                <li>
                                    <label class="checkbox"><input type="checkbox"> Peer</label>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <strong>State:</strong>
                            <ul class="list-unstyled">
                                <li>
                                    <label class="checkbox"><input type="checkbox"> Assigned</label>
                                </li>
                                <li>
                                    <label class="checkbox"><input type="checkbox"> Evaluate</label>
                                </li>
                                <li>
                                    <label class="checkbox"><input type="checkbox"> Review</label>
                                </li>
                                <li>
                                    <label class="checkbox"><input type="checkbox"> Completed</label>
                                </li>
                            </ul>
                        </div>
                    </section>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script src="/scripts/masonry.js"></script>
<script>
    $(function(){

        setTimeout(function(){
            $('.list-cards').masonry({
              columnWidth: '.card',
              itemSelector: '.card'
            });
        },200);

        function formatPeople(option) {
            var userid = $(option.element).data('userid');
            var dept = $(option.element).data('dept');
            if (!option.id) return option.text; // optgroup
            return '<div class="slat slat-select2"><div class="title">' + option.text + ' <span>[userid]</span></div><ul class="meta"><li><span class="meta-label">Department:</span><span class="meta-value">dept</span></li></ul></div>';
        }
        $('#people').select2({
            minimumInputLength: 1,
            formatResult: formatPeople,
            escapeMarkup: function(m) { return m; },
            dropdownCssClass: 'select2-slats'
        });

        $('#select-daterange').on('change',function(){
            if ( $(this).val() === 'custom' ) {
                $('#custom-daterange').show().find('input:eq(0)').focus();
            } else {
                $('#custom-daterange').hide();
            }
        });

        $('#select-daterange-modal').on('change',function(){
            if ( $(this).val() === 'custom' ) {
                $('#custom-daterange-modal').show().find('input:eq(0)').focus();
            } else {
                $('#custom-daterange-modal').hide();
            }
        });

    });
</script>
<?= createSiteEnd(); ?>