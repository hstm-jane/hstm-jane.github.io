 <!--modal resource search -->
    <div id="modal-resource" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                            <h4 class="modal-title" id="tModal">Resources</h4>
                        </div>
                    </div>
                </div>
                <div class="modal-body ">
                <section class="section minimize-modal-section" id="event-resources">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <div class="resource-picker">
                                <div class="resource-picker-search">
                                    <div class="input-group">
                                        <input type="text" id="resourceSearchMdl" class="form-control resource-picker-input">
                                        <span id="btnSearchMdl" class="input-group-addon resource-picker-addon">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                    <div id="grpResourceTypeMdl" class="btn-group resource-picker-type">
                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                                            <span id="spnResourceClassificationIdMdl" data-id="3">All</span>
                                            <span class="fa fa-caret-down"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right resource-menu">
                                            <li>
                                                <a style="cursor: pointer" data-id="">All</a>
                                            </li>
                                            <li>
                                                <a style="cursor: pointer" id="room" data-id="B">Room</a>
                                            </li>
                                            <li>
                                                <a style="cursor: pointer" data-id="E">Equipment</a>
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
                            </div </div>
                        </div>
                    </div>
                    </section>
                    <section class="section recurrence-area show-when-recurrence-updated  minimize-modal-section">

                    <div class="row show-when-recurrence-updated">
                        <div class="col-md-12">
                            <h3 class="resource=picker-title">Choose Occurrence</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 remove-right-padding form-group occurrence-list-controls">
                            <select id="ddlEventsResources" class="form-control occurrence-dropdown" name="occurrence-dropdown">
                                <option value="1" selected="selected">All Occurrences</option>
                            </select>
                            <span id="helpBlock" class="help-block">Updated </i>
                            </span>
                        </div>

                    </div>
                </section>
                 <!--    <section style="margin:0 0 20px;">
                        <h3>Apply Changes To</h3>
                        <label id="lblEventsMdl" class="form-label lbl-date"></label>
                        <select id="ddlEventsMdl" class="form-control" style="display: none;"></select>
                    </section> -->
                    <sectionid="secResults">
                        <h3>
                            Results
                            <small id="smPagingCount">Showing 1-6 of 63</small>
                            <div class="pull-right hidden-xs">Add/Remove</div>
                        </h3>
                        <div class="grpResourceResults" id="grpResults">

                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat')),
                            ),
                            'title' => '<a href="#">Northside Building</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Building',
                                ),
                                array(
                                    'label' => 'Address:',
                                    'value' => '209 10th Ave S',
                                ),
                                array(
                                    'label' => 'City:',
                                    'value' => 'Nashville',
                                ),
                                array(
                                    'label' => 'State:',
                                    'value' => 'TN',
                                ),
                                array(
                                    'label' => 'Zip:',
                                    'value' => '37203',
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
                            'title' => '<a href="#">Eastside Building</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Building',
                                ),
                                array(
                                    'label' => 'Address:',
                                    'value' => '206 10th Ave S',
                                ),
                                array(
                                    'label' => 'City:',
                                    'value' => 'Nashville',
                                ),
                                array(
                                    'label' => 'State:',
                                    'value' => 'TN',
                                ),
                                array(
                                    'label' => 'Zip:',
                                    'value' => '37203',
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
                            'title' => '<a href="#">Southside Building</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Building',
                                ),
                                array(
                                    'label' => 'Address:',
                                    'value' => '106 11th Ave E',
                                ),
                                array(
                                    'label' => 'City:',
                                    'value' => 'Nashville',
                                ),
                                array(
                                    'label' => 'State:',
                                    'value' => 'TN',
                                ),
                                array(
                                    'label' => 'Zip:',
                                    'value' => '37203',
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
                            'title' => '<a href="#">Westside Building</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Building',
                                ),
                                array(
                                    'label' => 'Address:',
                                    'value' => '1189 Hermitage Square',
                                ),
                                array(
                                    'label' => 'City:',
                                    'value' => 'Nashville',
                                ),
                                array(
                                    'label' => 'State:',
                                    'value' => 'TN',
                                ),
                                array(
                                    'label' => 'Zip:',
                                    'value' => '37216',
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
                            'title' => '<a href="#">Classroom A</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Room',
                                ),
                                array(
                                    'label' => 'Building:',
                                    'value' => 'B7',
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
                            'title' => '<a href="#">Projector NRP 1999</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Equipment',
                                ),
                                array(
                                    'label' => 'Type:',
                                    'value' => 'Projector',
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
                            'title' => '<a href="#">Room 101 West</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Room',
                                ),
                                array(
                                    'label' => 'Building:',
                                    'value' => 'B1',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Add',
                                'link' => '#',
                            )
                        );
                        echo createSlat($slat);

                        $slat['title'] = '<a href="#">Room 402 East</a>';
                        echo createSlat($slat);

                        $slat['title'] = '<a href="#">Room 202 South</a>';
                        echo createSlat($slat);

                        $slat['title'] = '<a href="#">Room 201 South</a>';
                        echo createSlat($slat);

                        $slat['title'] = '<a href="#">Room 203 South</a>';
                        echo createSlat($slat);

                        ?>
                     <!--    </section> -->
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