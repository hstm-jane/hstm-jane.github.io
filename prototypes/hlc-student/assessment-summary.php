<?php
include "includes/helpers/helpers.php";
include "includes/data/assessments-overview.php";

$patterns['start']['title'] = 'Assessment Rater Overview';
$patterns['header'] = array(
    'classes' => array('site-header--assessments'),
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">',
    'mainNav' => '
        <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
        <li class="{active=todo}"><a href="/">To Do</a></li>
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
$patterns['focus']['title'] = 'Assessment Rater Overview';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Total Assessments:',
        'value' =>  '1',
    ),
    array(
        'label' => 'Require Attention:',
        'value' =>  '1',
    ),
);

/* grouping structure */
$groupings = array(
    'state' => array(
        'evaluate' => array(0,0),
        'approval' => array(0,0),
        'review' => array(0,0),
    ),
    'employee' => array(),
    'title' => array(),
);

/* loop and tally */
foreach ($assessments as $assessment) {

    /* count state groupings (total,actionable) */
    $groupings['state'][$assessment['data-state']][0]++;
    if ( $assessment['actionable'] ) {
        $groupings['state'][$assessment['data-state']][1]++;
    }

    /* count employee groupings (total,actionable) */
    if ( empty($groupings['employee'][$assessment['employee']]) ) {
        $groupings['employee'][$assessment['employee']] = array(0,0,$assessment['employee_image']);
    }
    $groupings['employee'][$assessment['employee']][0]++;
    if ( $assessment['actionable'] ) {
        $groupings['employee'][$assessment['employee']][1]++;
    }

    /* count title groupings (total,actionable) */
    if ( empty($groupings['title'][$assessment['title']]) ) {
        $groupings['title'][$assessment['title']] = array(0,0);
    }
    $groupings['title'][$assessment['title']][0]++;
    if ( $assessment['actionable'] ) {
        $groupings['title'][$assessment['title']][1]++;
    }
}

/* sort array alphabetically */
ksort($groupings['employee']);
ksort($groupings['title']);

function makeGroupingBox($type,$title,$total,$actionable=false,$image=false){
    $html = '<div class="assessment-group assessment-group--'.$type.'">';
    $html .= '<div class="assessment-group__box" data-equalize="assessment-group-'.$type.'">';
    if ( $image ) {
       $html .= '<div class="assessment-group__image"><div class="assessment-group__image-holder"><img src="'.$image.'"></div></div>';
    }
    $html .= '<div class="assessment-group__title">'.$title.'</div>';
    $html .= '<div class="assessment-group__total">'.$total.'</div>';

    $html .= '</div>';

    if ( $actionable ) {
        $html .= '<div class="assessment-group__actionable">'.$actionable.'</div>';
    }

    $html .= '</div>';

    return $html;
}

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<style>
    .assessment-groups {
        margin: 0 -10px;
    }
    .assessment-groups:after {
        content: "";
        display: table;
        clear: both;
    }
    .assessment-group {
        position: relative;
        padding: 10px;
        cursor: pointer;
    }
    @media screen and (min-width:768px){
        .assessment-group--state {
            float: left;
            width: 33.3333%;
        }
        .assessment-group--employee {
            float: left;
            width: 33.3333%;
        }
    }
    @media screen and (min-width:1200px){
        .assessment-group--title {
            float: left;
            width: 50%;
        }
    }
    .assessment-group__box {
        display: table;
        width: 100%;
        border: 1px solid #ccc;
        background: #f3f3f3;
        vertical-align: middle;
    }
    .assessment-group__image {
        display: table-cell;
        vertical-align: middle;
        padding: 10px 0 10px 10px;
        width: 60px;
    }
    .assessment-group__image-holder {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        overflow: hidden;
    }
    .assessment-group__image img {
        width: 100%;
        height: 100%;
    }
    .assessment-group__title {
        display: table-cell;
        font-size: 16px;
        padding: 10px;
        vertical-align: middle;
    }
    .assessment-group__total {
        display: table-cell;
        width: 1%;
        white-space: nowrap;
        font-size: 18px;
        padding: 10px 25px 10px 25px;
        vertical-align: middle;
        text-align: right;
        border-left: 1px dotted #ccc;
    }
    .assessment-group__actionable {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 30px;
        height: 30px;
        padding: 0 7px;
        background: #fc7b00;
        color: #fff;
        line-height: 30px;
        font-weight: 600;
        font-size: 13px;
        text-align: center;
        border-radius: 15px;
        cursor: pointer;
    }
</style>

<style>
    .assessment__state-description:before {
        content: '\A';
        white-space: pre;
    }
</style>
<div class="layout layout-search">
    <div class="container">
        <section class="section section-main section-box">

            <section class="section">
                <header class="section-header">
                    <div class="row">
                        <div class="col-sm-9">
                            <h2 class="section-header-title">Assessments Summary</h2>
                        </div>
                        <div class="col-sm-3">
                            <div class="section-header-action hidden-xs">
                                <a href="#" class="btn btn-default btn-sm">Ungroup</a>
                            </div>
                        </div>
                    </div>
                </header>

                <section class="section">
                    <h3>Grouped by State</h3>
                    <div class="assessment-groups">
                        <?php echo makeGroupingBox('state','Evaluate',$groupings['state']['evaluate'][0],$groupings['state']['evaluate'][1]); ?>
                        <?php echo makeGroupingBox('state','Approval',$groupings['state']['approval'][0],$groupings['state']['approval'][1]); ?>
                        <?php echo makeGroupingBox('state','Review',$groupings['state']['review'][0],$groupings['state']['review'][1]); ?>
                    </div>
                </section>

                <section class="section">
                    <h3>Grouped by Employee</h3>
                    <div class="assessment-groups">
                        <?php
                            foreach ( $groupings['employee'] as $key => $value ) {
                                echo makeGroupingBox('employee',$key,$value[0],$value[1],$value[2]);
                            }
                        ?>
                    </div>
                </section>

                <section class="section">
                    <h3>Grouped by Title</h3>
                    <div class="assessment-groups">
                        <?php
                            foreach ( $groupings['title'] as $key => $value ) {
                                echo makeGroupingBox('title',$key,$value[0],$value[1]);
                            }
                        ?>
                    </div>
                </section>

            </section>

            <?php
                $stickybar = array(
                    'sets' => array(
                        array(
                            'position' => 'left',
                            'html' => '
                                <a href="#" class="btn btn-default">Ungroup</a>
                            ',
                        ),
                    ),
                );
                echo createStickybar($stickybar);
            ?>

        </section>
    </div><!-- /container -->
</div><!-- /layout -->

<!-- Modal -->
<div id="modal-progress" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Assessment Progress</h4>
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
                    <tbody></tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-filter" class="modal fade" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Sort &amp; Filter Assessments</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h3 class="page-header">Sort</h3>
                    <div class="form-group">
                        <label class="control-label">First</label>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control js-sort js-sort-primary" data-target="sort-direction-1">
                                        <option value="due" selected data-directions="Oldest to Newest|Newest to Oldest">Due</option>
                                        <option value="assessment" data-directions="Assessments A - Z|Assessments Z - A">Assessment</option>
                                        <option value="state" data-directions="States Descending|States Ascending">State</option>
                                        <option value="employee" data-directions="Names A - Z|Names Z - A">Employee Name</option>
                                        <option value="progress" data-directions="Most to Least Complete|Least to Most Complete">Peer Progress</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" id="sort-direction-1">
                                        <option value="asc">Newest to Oldest</option>
                                        <option selected value="desc">Oldest to Newest</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <label class="control-label">Second <small>Optional</small></label>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control js-sort js-sort-secondary" data-target="sort-direction-2">
                                        <option value="" data-directions="None">None</option>
                                         <option value="due" data-directions="Oldest to Newest|Newest to Oldest">Due</option>
                                        <option value="assessment" selected data-directions="Assessments A - Z|Assessments Z - A">Assessment</option>
                                        <option value="state" data-directions="States Descending|States Ascending">State</option>
                                        <option value="employee" data-directions="Names A - Z|Names Z - A">Employee Name</option>
                                        <option value="progress" data-directions="Most to Least Complete|Least to Most Complete">Peer Progress</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" id="sort-direction-2">
                                        <option value="asc" selected>Assessments A - Z</option>
                                        <option value="desc">Assessments Z - A</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <h3 class="page-header">Filter</h3>
                    <div class="form-group">
                        <label class="control-label">Assignment</label>
                        <select class="form-control" id="filter-assignment">
                            <option value="all" selected>All</option>
                            <option value="assigned">All Assigned</option>
                            <option value="not-assigned">Not Assigned</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">State</label>
                        <select class="form-control" id="filter-state">
                            <option value="all">All</option>
                            <option selected value="all-not-closed">All-Not Closed</option>
                            <option value="assigned">Assigned</option>
                            <option value="evaluate">Evaluate</option>
                            <option value="review">Review</option>
                            <option value="approval">Approval</option>
                            <option value="closed">Closed</option>
                        </select>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal" id="apply-sort-filter-button">Apply</button>
                <button class="btn btn-default" data-dismiss="modal">Reset Filters</button>
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-state-detail" class="modal fade" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">State Detail</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-state-detail-approval" class="modal fade" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">State Detail</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h3>Approval Activity</h3>

                    <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">Sampson, Frieda D.</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">HR Reviewer</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Pending</span></li>
                            </ul>
                            <div class="status status-pending"></div>
                        </div>
                    </div>

                    <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">Smith, Carolyn D.</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">Education Reviewer</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Accepted</span></li>
                                <li class="meta-callout"><span class="meta-label">Date: </span><span class="meta-value">Aug 28, 2016</span></li>
                            </ul>
                            <div class="status status-accepted"></div>
                        </div>
                    </div>

                    <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">Delta, Meredith S.</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">Manager Level 3</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Accepted</span></li>
                                <li class="meta-callout"><span class="meta-label">Date: </span><span class="meta-value">Aug 27, 2016</span></li>
                            </ul>
                            <div class="status status-success"></div>
                        </div>
                    </div>

                    <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">Barker, Aaron L.</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">Manager Level 2</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Accepted</span></li>
                                <li class="meta-callout"><span class="meta-label">Date: </span><span class="meta-value">Aug 26, 2016</span></li>
                            </ul>
                            <div class="status status-success"></div>
                        </div>
                    </div>

                    <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">Peeples, Misty R.</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">Manager Level 1</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Accepted</span></li>
                                <li class="meta-callout"><span class="meta-label">Date: </span><span class="meta-value">Aug 25, 2016</span></li>
                            </ul>
                            <div class="status status-success"></div>
                        </div>
                        <div class="slat-nested">
                            <div class="collapse-group collapse">
                                <section class="section">
                                    <h5>Comments</h5>
                                    <p>Thank you, approved</p>
                                </section>
                            </div>
                            <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show Comments|Hide Comments">Show Comments<i class="fa-fw fa-caret-down fa"></i></a>
                        </div>
                    </div>

                    <div class="slat slat-modal">
                        <div class="slat-default">
                            <div class="title">Peeples, Misty R.</div>
                            <ul class="meta">
                                <li><span class="meta-label">Role:</span><span class="meta-value">Manager Level 1</span></li>
                                <li><span class="meta-label">Status:</span><span class="meta-value">Rejected</span></li>
                                <li class="meta-callout"><span class="meta-label">Date: </span><span class="meta-value">Aug 24, 2016</span></li>
                            </ul>
                            <div class="status status-fail"></div>
                        </div>
                        <div class="slat-nested">
                            <div class="collapse-group collapse">
                                <section class="section">
                                    <h5>Comments</h5>
                                    <p>More details please. She had a large jump in multiple areas.</p>
                                </section>
                            </div>
                            <a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show Comments|Hide Comments">Show Comments<i class="fa-fw fa-caret-down fa"></i></a>
                        </div>
                    </div>
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
<script src="scripts/prototype.raters.js"></script>
<script>
    $(function(){

        // $('.focus-pageheader .meta-value:eq(0)').text($('.assessment').length);
        // $('.focus-pageheader .meta-value:eq(1)').text($('.assessment--attention').length);

    <?php if (!empty($_GET['growlTitle']) && !empty($_GET['growlText'])) { ?>
        // Show Growl on Load
        var growl = {};
        growl.title = "<?= $_GET['growlTitle']; ?>";
        growl.text = "<?= $_GET['growlText']; ?>";
        <?php echo (!empty($_GET['growlType']))?'growl.type = "'.$_GET['growlType'].'";'."\n":''; ?>
        <?php echo (!empty($_GET['growlSticky']))?'growl.sticky = '.$_GET['growlSticky'].';'."\n":''; ?>

        setTimeout(function(){
            HealthStream.utilities.growl(growl);
        },500);
        <?php } ?>
    });
</script>
<?= createSiteEnd(); ?>
