<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'Pulse';
$patterns['header']['mainNavActive'] = 'pulse';
$patterns['header']['mainNav'] = '
<li class="{active=pulse}"><a href="#">Pulse</a></li>';
$patterns['focus']['title'] = 'Pulse';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<style>

nav.nav-focus {
    margin-bottom: 0;
}

.modal-wizard-body {
    padding: 0;
}

@-webkit-keyframes fadeIn {
    from { opacity: 0; }
      to { opacity: 1; }
}

@keyframes fadeIn {
    from { opacity: 0; }
      to { opacity: 1; }
}

@-webkit-keyframes fadeOut {
    from { opacity: 1; }
      to { opacity: 0; }
}

@keyframes fadeOut {
    from { opacity: 1; }
      to { opacity: 0; }
}

.work-experience-save-experience,
.education-save-experience,
.licenses-save-experience,
.certifications-save-experience,
.resucitation-programs-save-experience,
.activities-save-experience,
.publications-save-experience,
.publications-author-experience,
.publications-author-experience-manage,
.awards-save-experience,
.other-save-experience {
    display: none;
    -webkit-animation: fadeOut 1s;
    animation: fadeOut 1s;
}

.show {
    display: block;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

.portfolio-container {
     padding-right:30px;
     border-right: 1px solid #ddd;
}

label.radio-inline {
    display: inline-block;
}

.card-wrapper {
    display: inline-block;
    display: none;
}

.card {
    display: block;
    padding: 10px;
    margin: 10px 0;
    height: 100px;
    overflow: hidden;
    border: 1px solid #eee;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
}

.card-container {
    height: 80px;
    position: relative;
    z-index: 90;
}



.card-thumb {
    float:left;
    width: 80px;
    height: 80px;
    background-color: #d9edf7;
    border: 1px solid #bce8f1;
    border-radius: 3px;
    font-size: 42px;
    line-height: 80px;
    text-align: center;
    color: #31708f;
    margin-right: 10px;
}


.card-alert .card-thumb {
    background-color: #f2dede;
    border-color: #ebccd1;
    color: #a94442;
}

.card-warning .card-thumb {
    background-color: #fcf8e3;
    border-color: #faebcc;
    color: #8a6d3b;
}

h4.card-title {
    margin-bottom: 5px;
}

.card-title a {
    color: #31708f;
    font-weight: bold;
}

.card-title-alert a {
    color: #a94442;
}

.card-title-warning a {
    color: #8a6d3b;
}

@media (max-width: 991px) {

    .portfolio-container {
         padding-right:10px;
         border-right: none;
    }

    .section-main .section.card-container {
        height: auto;
        margin-bottom: 0px
    }
}

</style>

<div class="layout layout-search">
    <div class="container">
        <section class="section section-main section-box">


            <?php

                $focusNav = array(
                    'tabs' => array(
                        array(
                            'active' => true,
                            'id' => 'tab-1',
                            'label' => 'Beats',
                        ),
                        array(
                            'id' => 'tab-2',
                            'label' => 'Metrics',
                        ),
                    ),
                );
                echo createFocusNav($focusNav);
            ?>


            <section class="section card-container">
                <div id="card-row" class="row">
                    <div class="card-wrapper col-md-4 col-xs-12">
                        <div class="card">

                            <div class="card-thumb">
                                <i class="fa fa-history"></i>
                            </div>
                            <h4 class="card-title"><a href="#modal-certifications-manage" data-toggle="modal">My Activity</a></h4>
                            <p>A summary of your recent beats.</p>
                        </div>
                    </div>
                    <div class="card-wrapper col-md-4 col-xs-12">
                        <div class="card">

                            <div class="card-thumb">
                                <i class="fa fa-tags"></i>
                            </div>
                            <h4 class="card-title"><a href="#modal-beat-tags" data-toggle="modal">Beat Tags</a></h4>
                            <p>See your beats by content tags.</p>
                        </div>
                    </div>
                    <div class="card-wrapper col-md-4 col-xs-12">
                        <div class="card card-info">
                            <div class="card-thumb">
                                <i class="fa fa-fire"></i>
                            </div>
                            <h4 class="card-title"><a href="#modal-education" data-toggle="modal">Trending</a></h4>
                            <p>Hot topics in your community.</p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="tab-content">

                <div class="tab-pane fade active in" id="tab-1">
                    <div class="row">
                            <div class="col-md-9">
                                <section class="section" style="padding-right:30px; border-right: 1px solid #ddd;">

                                    <section class="section pulse-saved-container">
                                        <div class="slat-group">
                                            <div class="slat-group-header">
                                                <div class="slat-group-header-title">
                                                    <h3>Beats</h3>
                                                </div>
                                                <div class="slat-group-header-actions">
                                                    <div class="btn-group">
                                                        <a class="btn btn-default btn-sm" href="#modal-work-experience" data-toggle="modal">Sort: A - Z</a>
                                                        <div class="btn-group">
                                                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                                <i class="fa fa-caret-down"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a>A - Z</a></li>
                                                                <li><a>Z - A</a></li>
                                                                <li><a>Type</a></li>
                                                                <li><a>Popularity</a></li>
                                                                <li><a>Status</a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="slat-group-content">
                                                <?php

                                                    $slat = array(
                                                        'attributes' => array(
                                                            array('class',array('slat', 'slat-callout')),
                                                        ),
                                                        'title' => '<a href="#">How to Perform CPR</a>',
                                                        'meta' => array(
                                                            array(
                                                                'label' => 'Type:',
                                                                'value' => 'Video',
                                                            ),
                                                            array(
                                                                'label' => 'Duration:',
                                                                'value' => '4:58',
                                                            ),
                                                            array(
                                                                'label' => 'Date:',
                                                                'value' => 'Jul 15, 2016',
                                                            ),
                                                            array(
                                                                'label' => 'Updated:',
                                                                'value' => 'Aug 1, 2016',
                                                            ),
                                                            array(

                                                                'value' => '<span class="meta-callout-label">Status:</span>Completed',
                                                                'attributes' => array(
                                                                    array('class','meta-callout'),
                                                                )
                                                            ),
                                                        ),
                                                        'action' => array(
                                                            'type' => 'custom',
                                                            'content' => '
                                                                <div class="action action-split">
                                                                    <div class="btn-group">
                                                                        <a href="https://www.youtube.com/watch?v=cosVBV96E2g" target="_blank" class="btn btn-default btn-sm hidden-xs">View</a>
                                                                        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                                            <i class="fa fa-caret-down"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                                            <li><a href="#" >Mark as Saved</a></li>
                                                                            <li><a href="#">Share</a></li>
                                                                            <li><a href="#">Edit</a></li>
                                                                            <li><a href="#">Remove</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            ',
                                                        ),

                                                    );
                                                    echo createSlat($slat);
                                                    echo createSlat($slat);
                                                    echo createSlat($slat);
                                                    $slat = array(
                                                        'attributes' => array(
                                                            array('class',array('slat', 'slat-callout')),
                                                        ),
                                                        'title' => '<a href="#">How to Perform CPR</a>',
                                                        'meta' => array(
                                                            array(
                                                                'label' => 'Type:',
                                                                'value' => 'Video',
                                                            ),
                                                            array(
                                                                'label' => 'Duration:',
                                                                'value' => '4:58',
                                                            ),
                                                            array(
                                                                'label' => 'Date:',
                                                                'value' => 'Jul 15, 2016',
                                                            ),
                                                            array(
                                                                'label' => 'Updated:',
                                                                'value' => 'Aug 1, 2016',
                                                            ),
                                                            array(

                                                                'value' => '<span class="meta-callout-label">Status:</span>Saved',
                                                                'attributes' => array(
                                                                    array('class','meta-callout'),
                                                                )
                                                            ),
                                                        ),
                                                        'action' => array(
                                                            'type' => 'custom',
                                                            'content' => '
                                                                <div class="action action-split">
                                                                    <div class="btn-group">
                                                                        <a href="https://www.youtube.com/watch?v=cosVBV96E2g" target="_blank" class="btn btn-default btn-sm hidden-xs">Start</a>
                                                                        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                                            <i class="fa fa-caret-down"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                                            <li><a href="#" >Mark as Complete</a></li>
                                                                            <li><a href="#">Share</a></li>
                                                                            <li><a href="#">Edit</a></li>
                                                                            <li><a href="#">Remove</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            ',
                                                        ),

                                                    );
                                                    echo createSlat($slat);
                                                    echo createSlat($slat);
                                                ?>
                                            </div>
                                            <div class="slat-group-footer"></div>
                                        </div>
                                    </section>

                                </section>
                            </div>
                            <div class="col-md-3">
                                <section class="section">
                                    <h2>A Metric of Some Sort</h2>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:40%">40%</div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis nisl lacinia turpis vehicula convallis. </p>

                                    <p><a href="#" class=" btn btn-success btn-sm">An Actionable Item</a></p>
                                </section>

                                <section class="section">
                                    <h2>A Heading</h2>

                                    <p><a href="#">An Actionable Item</a></p>
                                </section>
                            </div>
                    </div>
                </div> <!-- /tab-pane -->

                <div class="tab-pane fade" id="tab-2">
                    <div class="row">
                        <div class="col-md-9">
                            <section class="section" style="padding-right:30px; border-right: 1px solid #ddd;">

                                <section class="section pulse-completed-container">
                                    A detailed metrics dashboard might go here
                                </section>
                            </section>
                        </div>
                        <div class="col-md-3">
                            <section class="section">
                                <h2>A Metric of Some Sort</h2>
                                <div class="progress">
                                    <div class="progress-bar" style="width:40%">40%</div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis nisl lacinia turpis vehicula convallis. </p>

                                <p><a href="#" class=" btn btn-success btn-sm">An Actionable Item</a></p>
                            </section>

                            <section class="section">
                                <h2>A Heading</h2>

                                <p><a href="#">An Actionable Item</a></p>
                            </section>
                        </div>
                    </div>
                </div> <!-- /tab-pane -->



                <div class="tab-pane fade in active" id="tab-4">



                </div>

        </section>
    </div><!-- /container -->
</div> <!-- /layout -->


<!-- Modal -->
<div id="modal-sections" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">

                <?php

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Work Experience',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success work-experience" data-section="work-experience">Selected<i class="fa fa-check visible-xs"></i>
                                </a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Education',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success education" data-section="education">Selected<i class="fa fa-check visible-xs"></i></a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Licenses',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success licenses" data-section="licenses">Selected<i class="fa fa-check visible-xs"></i></a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Certifications',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success certifications" data-section="certifications">Selected<i class="fa fa-check visible-xs"></i></a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Resucitation Programs',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success resucitation-programs" data-section="resucitation-programs">Selected<i class="fa fa-check visible-xs"></i></a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Activities',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success activities" data-section="activities">Selected<i class="fa fa-check visible-xs"></i></a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Committee Work',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success committee-work" data-section="committee-work">Selected<i class="fa fa-check visible-xs"></i></a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Memberships &amp; Associations',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success memberships" data-section="memberships">Selected<i class="fa fa-check visible-xs"></i></a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Teaching &amp; Preceptorship',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success teaching" data-section="teaching">Selected<i class="fa fa-check visible-xs"></i></a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Publications &amp; Research',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success publications" data-section="publications">Selected<i class="fa fa-check visible-xs"></i></a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Awards &amp; Recognition',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success awards" data-section="awards">Selected<i class="fa fa-check visible-xs"></i></a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
                    ),
                    'title' => 'Other',
                    'meta' => array(),
                    'action' => array(
                        'type' => 'custom',
                        'content' => '
                            <div class="action">
                                <a href="#" class="btn btn-sm btn-success other" data-section="other">Selected<i class="fa fa-check visible-xs"></i></a>
                            </div>
                        ',
                    )
                );
                echo createSlat($slat);

                ?>
            </div>
            <div class="modal-footer">

                <button class="btn btn-default" data-dismiss="modal" onClick="window.parent.closeModal();">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-refine-goals" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <section class="section section-refinement-group section-refinement-group-first">
                        <h3>Search</h3>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Date Range <small>Based on Start Date</small></h3>
                        <div class="form-group">
                            <select class="form-control" id="select-daterange">
                                <optgroup label="Presets">
                                    <option>Since January 1</option>
                                    <option>Last 6 Months</option>
                                    <option selected>Last 12 Months</option>
                                    <option>Last 24 Months</option>
                                    <option>Previous Calendar Year</option>
                                </optgroup>
                                <optgroup label="Custom">
                                    <option value="custom">Choose a Custom Range</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group" id="custom-daterange" style="display:none">
                            <label>Start Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/05/2015">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <label style="margin-top: 10px;">End Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/04/2016">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Search</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div id="modal-refine-notes" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <section class="section section-refinement-group section-refinement-group-first">
                        <h3>Search</h3>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Date Range <small>Based on Start Date</small></h3>
                        <div class="form-group">
                            <select class="form-control" id="select-daterange">
                                <optgroup label="Presets">
                                    <option>Since January 1</option>
                                    <option>Last 6 Months</option>
                                    <option selected>Last 12 Months</option>
                                    <option>Last 24 Months</option>
                                    <option>Previous Calendar Year</option>
                                </optgroup>
                                <optgroup label="Custom">
                                    <option value="custom">Choose a Custom Range</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group" id="custom-daterange" style="display:none">
                            <label>Start Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/05/2015">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <label style="margin-top: 10px;">End Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/04/2016">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Search</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-refine-documents" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                <section class="section section-refinement-options">
                    <section class="section section-refinement-group section-refinement-group-first">
                        <h3>Search</h3>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </section>
                    <section class="section section-refinement-group">
                        <h3>Date Range <small>Based on Start Date</small></h3>
                        <div class="form-group">
                            <select class="form-control" id="select-daterange">
                                <optgroup label="Presets">
                                    <option>Since January 1</option>
                                    <option>Last 6 Months</option>
                                    <option selected>Last 12 Months</option>
                                    <option>Last 24 Months</option>
                                    <option>Previous Calendar Year</option>
                                </optgroup>
                                <optgroup label="Custom">
                                    <option value="custom">Choose a Custom Range</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group" id="custom-daterange" style="display:none">
                            <label>Start Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/05/2015">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <label style="margin-top: 10px;">End Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="06/04/2016">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Search</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div id="modal-portfolio-wizard" class="modal fade" tabindex="-1">
    <div class="modal-dialog" style="width:auto; max-width:770px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Complete Portfolio</h4>
            </div>
            <div class="modal-body modal-wizard-body">
                <iframe id="portfolio-wizard-modal" src="portfolio-wizard-modal.php" width="100%" height="770" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>

            <div class="modal-footer">
                <a class="wizard-nav-link btn btn-success size-check" href="#" data-rel="work-experience"><span class="button-label">Next: </span>Work Experience</a>
                <a class="btn btn-default" href="#" onClick ="window.closeModal();">Finished</a>
            </div>

        </div>

    </div>
</div>




<!-- ADD MODALS -->


<!-- Modal -->
<div id="modal-education" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Trending</h4>
            </div>
            <div class="modal-body">
                <?php
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat', 'slat-callout', 'slat-modal')),
                        ),
                        'title' => '<a href="#">How to Perform CPR</a>',
                        'meta' => array(
                            array(
                                'label' => 'Type:',
                                'value' => 'Video',
                            ),
                            array(
                                'label' => 'Duration:',
                                'value' => '4:58',
                            ),
                            array(
                                'label' => 'Date:',
                                'value' => 'Jul 15, 2016',
                            ),
                            array(
                                'label' => 'Updated:',
                                'value' => 'Aug 1, 2016',
                            ),
                            array(

                                'value' => '<span class="meta-callout-label">Status:</span>Completed',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            ),
                        ),
                        'action' => array(
                            'type' => 'action-single',
                            'content' => 'Resume',
                            'link' => 'https://www.youtube.com/watch?v=cosVBV96E2g',
                        ),

                    );
                    echo createSlat($slat);
                    echo createSlat($slat);
                    echo createSlat($slat);
                ?>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>


<!-- /ADD MODALS -->

<!-- MANAGE MODALS -->
<!-- Modal -->
<div id="modal-licenses-manage" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Manage License</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Discipline</label>
                    <select class="form-control" id="add-discipline">
                        <option value="">Select a Discipline</option>
                        <option value="default">Select a Discipline</option>
                        <option value="emt" selected="">Emergency Medical Technician</option>
                        <option value="pharmacist">Pharmacist</option>
                    </select>
                </div>
                <div class="form-group">
                        <label class="control-label">Country</label>
                        <select id="inputCountry" class="form-control">
                            <option selected="">United States</option>
                            <option>Canada</option>
                            <option>Australia</option>
                            <option>...</option>
                            <option>...</option>
                        </select>
                    </div>
                <div class="form-group">
                    <label class="control-label">State or Province of Licensure</label>
                    <select class="form-control">
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR" selected>Arkansas</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">State License Number <small>Optional</small></label>
                            <input type="text" class="form-control" value="1234567890">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="Feb 7, 2016">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="discipline-fields-pharmacist" class="discipline-fields">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">NABP eProfile ID Number <small>Optional</small></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Email Address</label>
                    <input type="text" class="form-control" value="jdoe@email.com">
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <ul class="control-attachments control-attachments">
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-modified">
                        <p>This license is not available in your portable portfolio, it is restricted to your organization.</p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-certifications-manage" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">My Activity</h4>
            </div>
            <div class="modal-body">
                <?php
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat', 'slat-callout', 'slat-modal')),
                        ),
                        'title' => '<a href="#">How to Perform CPR</a>',
                        'meta' => array(
                            array(
                                'label' => 'Type:',
                                'value' => 'Video',
                            ),
                            array(
                                'label' => 'Duration:',
                                'value' => '4:58',
                            ),
                            array(
                                'label' => 'Date:',
                                'value' => 'Jul 15, 2016',
                            ),
                            array(
                                'label' => 'Updated:',
                                'value' => 'Aug 1, 2016',
                            ),
                            array(

                                'value' => '<span class="meta-callout-label">Status:</span>Completed',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            ),
                        ),
                        'action' => array(
                            'type' => 'action-single',
                            'content' => 'Resume',
                            'link' => 'https://www.youtube.com/watch?v=cosVBV96E2g',
                        ),

                    );
                    echo createSlat($slat);
                    echo createSlat($slat);
                    echo createSlat($slat);
                ?>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!-- /MANAGE MODALS -->

<!-- Modal -->
<div id="modal-portable-portfolio-about" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">About ePortfolio</h4>
            </div>
            <div class="modal-body">
                 <section class="section">
                <h3>What is my ePortfolio?</h3>

                <p>Your HealthStream ePortfolio provides you with a central location to track and maintain all records associated with your career. Your ePortfolio will travel with you, eliminating the need for duplicate documentation. As you join a company, it can be shared with your employer which highlights your accomplishments such as certifications you've already earned.</p>
            </section>

            <section class="section" id="data-message">
                <h3>Why is my data not displayed?</h3>

                <p>Once you've linked your ePortfolio to an account, most of the records you create are shared. However, if the record was imported or created by an administrator, then the record may not be shared.</p>
            </section>

            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div id="modal-beat-tags" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">My Beat Tags</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <div id="piechart" style="width: 100%; height: 300px;"></div>
                </section>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>
<!-- /MANAGE MODALS -->

<?php
include ('includes/modals/_modal-goal-add.php');
include ('includes/modals/_modal-goal-manage.php');
include ('includes/modals/_modal-note-add.php');
include ('includes/modals/_modal-note-edit.php');
include ('includes/modals/_modal-document-add.php');
include ('includes/modals/_modal-document-edit.php');
?>

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>

<script src="/scripts/prototype.portfolio.js"></script>
<script src="/scripts/prototype.portfolio.wizard.helper.js"></script>

<script>

    // Dismisses card
    $( ".card-dismiss" ).click(function(e) {
        e.preventDefault();
        $(this).closest('.card-wrapper').remove();

        // Grabs next hidden card and makes it visible
        $(".card-wrapper").each(function() {
           if($('#card-row').children().slice(2).first().css('display') == 'none') {
                $(this).fadeIn();
            }
        });

        // If no cards left, removes the contaier div and padding
        if($.trim($("#card-row").html())=='') {
            $('.card-container').remove();
        }

        if($('#card-row .card-wrapper').length == 1) {
           $('.card-wrapper').removeClass('col-md-4').addClass('col-md-12');
        }
    });

    // On page load, show first 3 cards
    $( document ).ready(function() {
        $('#card-row').children().slice(0,3).show();
    });


</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Category', 'Quantity'],
          ['Cardiology',     2],
          ['Leadership',      5],
          ['Communication',  6],
          ['Population Health', 4],
        ]);

        var options = {
          title: 'My Beat Tags',
          chartArea:{left:20,top:0,width:'100%',height:'100%'},
          enableInteractivity: false,
          height: 500,
          width: 500,
          slices: {0: {color: 'fc7b00'}, 1: {color: '09c'}, 2: {color: '5cb85c'}, 3: {color: '007aa3'}},

        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>




<?= createSiteEnd(); ?>
