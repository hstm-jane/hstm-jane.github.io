<!-- modal personell search -->
<div id="modal-personnel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                        <h4 class="modal-title" id="tModal">Personnel</h4>
                    </div>
                </div>

            </div>
            <div class="modal-body">
            <div class="row">
                    <div class="col-md-12 form-group">
                        <div class="resource-picker">
                            <div class="resource-picker-search">
                                <div class="input-group">
                                    <input type="text" id="peopleSearchMdl" class="form-control form-control resource-picker-input">
                                    <span id="btnSearchMdl" class="input-group-addon resource-picker-addon">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                                <div id="grpResourceTypeMdl" class="btn-group resource-picker-type" style="display: none;">
                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                                        <span id="spnResourceClassificationIdMdl" data-id="3">All</span>
                                        <span class="fa fa-caret-down"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a style="cursor: pointer" data-id="3">All</a>
                                        </li>
                                        <li>
                                            <a style="cursor: pointer" data-id="1">Room</a>
                                        </li>
                                        <li>
                                            <a style="cursor: pointer" data-id="2">Equipment</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="resource-picker-overlay">
                                <div class="resource-picker-holder"></div>
                                <div class="resource-picker-clear">
                                    <a href="#">Close Results</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <section class="section recurrence-area show-when-recurrence-updated minimize-modal-section">

                <div class="row show-when-recurrence-updated">
                    <div class="col-md-12">
                        <h3 class="resource=picker-title">Choose Occurrence</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 remove-right-padding form-group occurrence-list-controls">
                        <select id="ddlEventsPersonnel" class="form-control" name="occurrence-dropdown">
                            <option value="1" selected="selected">All Occurrences</option>
             <!--                <option value="2">10/05/2015 4:30 PM - 10/05/2015 5:30 PM</option>
                            <option value="3">10/06/2015 4:30 PM - 10/06/2015 5:30 PM</option>
                            <option value="4">10/07/2015 4:30 PM - 10/07/2015 5:30 PM</option>
                            <option value="5">10/08/2015 4:30 PM - 10/08/2015 5:30 PM</option>
                            <option value="6">10/09/2015 4:30 PM - 10/09/2015 5:30 PM</option>
                            <option value="7">10/10/2015 4:30 PM - 10/10/2015 5:30 PM</option>
                            <option value="8">10/15/2015 4:30 PM - 10/15/2015 5:30 PM</option>
                            <option value="9">10/22/2015 4:30 PM - 10/22/2015 5:30 PM</option>
                            <option value="10">10/29/2015 4:30 PM - 10/29/2015 5:30 PM</option>
                            <option value="11">11/06/2015 4:30 PM - 11/06/2015 5:30 PM</option> -->
                        </select>
                        <span id="helpBlock" class="help-block">Updated </i>
                        </span>
                    </div>

                </div>
            </section>
                <section style="margin:0 0 20px;">
                    <h3>Apply Changes To</h3>
                    <label id="lblEventsMdl" class="form-label lbl-date"></label>
                    <select id="ddlEventsMdl" class="form-control" style="display: none;"></select>
                </section>
                <section id="secResults">
                    <h3>
                        Results
                        <small id="smPagingCount">Showing 1-6 of 28</small>
                        <div class="pull-right hidden-xs">Add/Remove</div>
                    </h3>
                    <div class="grpPeopleResults" id="grpResults">
           <!--        <section class="section"> -->
                    <?php

                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => '<a href="#">Stark, John</a>',
                        'meta' => array(
                            array(
                                'type' => 'Student',
                            ),
                            array(
                                'label' => 'User ID:',
                                'value' => 'ironman',
                            ),
                            array(
                                'label' => 'Status:',
                                'value' => 'Active',
                            ),
                            array(
                                'label' => 'Affiliation:',
                                'value' => 'Department',
                            )
                        ),
                        'action' => array(
                            'type' => 'action-single',
                            'content' => 'Add',
                            'link' => '#',
                        )
                    );
                    echo createSlat($slat);

                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => '<a href="#">Smith, John D</a>',
                        'meta' => array(
                            array(
                                'type' => 'Instructor',
                            ),
                            array(
                                'label' => 'User ID:',
                                'value' => 'jinstructor',
                            ),
                            array(
                                'label' => 'Status:',
                                'value' => 'Active',
                            ),
                            array(
                                'label' => 'Affiliation:',
                                'value' => 'Department',
                            )
                        ),
                        'action' => array(
                            'type' => 'action-single',
                            'content' => 'Add',
                            'link' => '#',
                        )
                    );
                    echo createSlat($slat);

                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => '<a href="#">Nye, Bill</a>',
                        'meta' => array(
                            array(
                                'type' => 'Student',
                            ),
                            array(
                                'label' => 'User ID:',
                                'value' => 'scienceguy',
                            ),
                            array(
                                'label' => 'Status:',
                                'value' => 'Active',
                            ),
                            array(
                                'label' => 'Affiliation:',
                                'value' => 'Department',
                            )
                        ),
                        'action' => array(
                            'type' => 'action-single',
                            'content' => 'Add',
                            'link' => '#',
                        )
                    );
                    echo createSlat($slat);

                    ?>
                   <!--  </section> -->
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <div class="btn-group pull-right">
                    <button id="btnPageDown" class="btn btn-default" disabled="disabled" type="button"><i class="fa fa-chevron-left"></i></button>
                    <button id="btnPageUp" class="btn btn-default" type="button"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>