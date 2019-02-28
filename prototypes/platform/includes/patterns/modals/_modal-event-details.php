<!-- Sample Event Details Modal -->
<div id="modal-event" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" class="close" data-dismiss="modal"><i class="fa-times fa"></i>
                </button>
                <h4 class="modal-title">Event Details</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h3><b>Name:</b> Sample Event</h3>
                </section>
                <section class="section">
                    <div class="row">
                        <div class="col-sm-12">
                            <i class="small">All times displayed in EST</i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Start:</label>
                            <p>05/27/2015 6:30 AM</p>
                        </div>
                        <div class="col-sm-6">
                            <label>End:</label>
                            <p>05/27/2015 7:30 AM</p>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <h3>Resources &amp; Personnel</h3>

                    <?php

                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-simple')),
                        ),
                        'title' => 'A_4Feb15Room_CheckedAdminGroup',
                        'description' => '05/27/2015 6:30 AM - 05/27/2015 7:30 AM',
                        'meta' => array(
                            array(
                                'type' => 'Room',
                            )
                        ),
                        'action' => array()
                    );
                    echo createSlat($slat);

                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-simple')),
                        ),
                        'title' => 'A_4Feb15Equipment_CheckedAdminGroup',
                        'description' => '05/27/2015 6:30 AM - 05/27/2015 7:30 AM',
                        'meta' => array(
                            array(
                                'type' => 'Equipment',
                            )
                        ),
                        'action' => array()
                    );
                    echo createSlat($slat);

                    ?>
                </section>
            </div>
            <div class="modal-footer">
                <a class="btn btn-success" href="/scheduling-edit-schedule.php">Edit Event</a>
                <!-- <a class="btn btn-success" href="/registration-rules">Define Rules</a> -->
                <button class="btn btn-default" data-dismiss="modal">Close</button>
                <a class="btn btn-danger pull-right" href="#">Delete</a>
            </div>
        </div>
    </div>
</div>
<!-- /Sample Event Details   -->