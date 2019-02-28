<!-- Modal -->
<div class="modal modal-bg-white fill-in" id="modalFillIn" tabindex="-1" aria-hidden="true">
 <div class="modal-dialog modal-expand">
     <div class="row">
        <button type="button" class="close-overlay" data-dismiss="modal" aria-hidden="true">
            <i class="fa fa-times"></i> exit
        </button>
    </div>
    <div class="container">
     <div class="row">
        <div class="col-md-3">
            <section class="section equalized section-results" data-equalize="layout-columns" style="min-height: 513px; margin-top: 8%;">
                    <h2>Refine</h2>
                    <div class="container">
                        <div class="tag-group">
                            <a href="#" class="tag">State<i class="fa fa-times"></i></a>
                            <a href="#" class="tag">Country<i class="fa fa-times"></i></a>
                        </div>
                        <hr class="hidden-xs">
                    </div>
                    <div class="panel-group" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title" style="color:#0099cc">

                                    <strong>Date Range</strong>

                                </h4>
                            </div>
                            <div id="collapseTwo" aria-labelledby="headingTwo">
                                <div class="panel-body">


                                    <div class="form-group">
                                        <label>From: </label>
                                        <input type="text" class="form-control" placeholder="1/14/2015">
                                    </div>
                                    <div class="form-group">
                                        <label>To: </label>
                                        <input type="text" class="form-control" placeholder="2/14/2015">
                                    </div>

                                </div>
                            </div>
                        </div><!-- panel one end -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <strong>Building</strong><i class="indicator fa fa-chevron-down pull-right"></i>
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="resource-picker">
                                        <div class="resource-picker-search">

                                            <input type="text" class="form-control resource-picker-input" placeholder="Search" data-type="people" tabindex="4">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- panel two end -->

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <strong>Location</strong><i class="indicator fa fa-chevron-down pull-right"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <form>
                                        <div class="form-group">
                                            <label>Country: </label>
                                            <input type="text" class="form-control" placeholder="country">
                                        </div>
                                        <div class="form-group">
                                            <label>State: </label>
                                            <input type="text" class="form-control" placeholder="state">
                                        </div>
                                        <div class="form-group">
                                            <label>City: </label>
                                            <input type="text" class="form-control" placeholder="city">
                                        </div>
                                        <div class="form-group">
                                            <label>Zipcode: </label>
                                            <input type="text" class="form-control" placeholder="zip">
                                        </div>
                                        <button type="submit" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- panel three end -->
                    </div>
        </section><!-- /section-sidebar -->
    </div><!-- /column -->
    <div class="col-md-9">
    <section class="section section-main section-results equalized" data-equalize="layout-columns" style="min-height: 513px;">
                <div class="primary">
                    <div class="input-group">
                        <input id="search-field-modal" type="text" class="form-control input-lg" placeholder="Search Events">
                        <span class="input-group-btn">
                         <button href="#" type="button" class="btn btn-focus btn-lg" data-toggle="modal" style="padding: 7.5px 13px;"><i class="fa fa-search fa-lg search-icon"></i>

                         </button></span>
                     </div>
                                <!-- <div class="btn-group search-btn">
                                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                All Events <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu" style="text-align:left">
                                                <li><a href="#">Title</a></li>
                                        </ul>
                                    </div> -->
                                </div>
                                <section class="section section-results-header">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h2>Results <small>Showing 1-3 of 3</small></h2>
                                        </div>

                                    </div>
                                </section>
                                <section class="section">

                                    <?php

                                    $slat = array(
                                        'attributes' => array(
                                            array('class',array('slat')),
                                        ),
                                        'title' => '<form><a href="#">Orientation To Learning Environment</a></form>',
                                        'meta' => array(),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'Options <i class="fa fa-fw fa-plus visible-xs"></i>',
                                            'link' => '#',
                                        )
                                    );
                                    echo createSlat($slat);

                                    $content = '
                                        <section class="section"><h5>Added</h5>
                                            <p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
                                        </section>
                                        <section class="section"><h5>Updated</h5>
                                            <p>Stephanie Juniper, Feb 7, 2014 11:57am</p>
                                        </section>
                                        <section class="section"><h5>Comments</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></section>
                                            <section class="section"><small class="text-muted">Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1</small>
                                            </section>
                                    ';
                                    $slat = array(
                                        'attributes' => array(
                                            array('class',array('slat')),
                                        ),
                                        'title' => 'Student-Entered Learning Event',
                                        'meta' => array(
                                            array(
                                                'type' => 'Learning Event',
                                            ),
                                            array(
                                                'label' => 'Est. Time:',
                                                'value' => '1h',
                                            ),
                                            array(
                                                'label' => 'Entry:',
                                                'value' => 'Student',
                                            ),
                                            array(
                                                'label' => 'Completed:',
                                                'value' => 'May 19, 2013',
                                                'attributes' => array(
                                                    array('class','meta-callout'),
                                                )
                                            )
                                        ),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'Options <i class="fa fa-fw fa-pencil visible-xs"></i>',
                                            'link' => '#',
                                        ),
                                        'nested' => array(
                                            'hide' => array($content)
                                        ),
                                    );
                                    echo createSlat($slat);

                                    $slat = array(
                                        'attributes' => array(
                                            array('class',array('slat')),
                                        ),
                                        'title' => '<form><a href="course-enroll.php">Performance Skill Practice Stations</a></form>',
                                        'meta' => array(),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'Options <i class="fa fa-fw fa-plus visible-xs"></i>',
                                            'link' => '#',
                                        )
                                    );
                                    echo createSlat($slat);

                                    $slat = array(
                                        'attributes' => array(
                                            array('class',array('slat')),
                                        ),
                                        'title' => '<form><a href="course-enroll.php">Integrated Skills Station</a></form>',
                                        'meta' => array(),
                                        'action' => array(
                                            'type' => 'action-single',
                                            'content' => 'Options <i class="fa fa-fw fa-plus visible-xs"></i>',
                                            'link' => '#',
                                        )
                                    );
                                    echo createSlat($slat);

                                    ?>


                                </section>
                            </div>
                    </section>
                </div><!-- /column -->
            </div>
        </div>
    </div>
</div>