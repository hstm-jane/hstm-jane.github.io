<div class="modal show" id="modal-statement-additional-ratings">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Additional Ratings</h4>
            </div>
            <div class="modal-body">

                <section class="section">
                    <h3 class="statement-title"></h3>
                    <div class="statement-description"></div>
                    <hr>
                </section>

                <section class="section">
                    <h4>Additional Ratings</h4>
                    <?php

                    $content = '
                        <section class="section">
                            <h5>Comments</h5>
                            <p>5/15/2013: Rita is a highly motivated and engaged employee. She inspires other to exhibit a positive work attitude.</p>
                        </section>
                        <section class="section">
                            <h5>Documents</h5>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-paperclip"></i> <a href="#">This is a document</a></li>
                            </ul>
                        </section>
                        <section class="section">
                            <h5>Risk/Outcome</h5>
                            <p>Risk/Outcome Selection, Risk/Outcome Selection, Risk/Outcome Selection, Risk/Outcome Selection, Risk/Outcome Selection, Risk/Outcome Selection, Risk/Outcome Selection</p>
                        </section>
                        <section class="section">
                            <h5>Method of Validation</h5>
                            <p>Method of Validation Selection, Method of Validation Selection, Method of Validation Selection, Method of Validation Selection</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout-wr')),
                        ),
                        'title' => 'Crane, Davy L.',
                        'meta' => array(
                            array(
                                'type' => 'Employee',
                            ),
                            array(
                                'label' => 'Submitted:',
                                'value' => 'Jul 18, 2014',
                            ),
                            array(
                                'label' => 'Rating: ',
                                'value' => 'Exceeds Expectations',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(),
                        'nested' => array(
                            'hide' => array($content)
                        ),
                    );
                    echo createSlat($slat);

                    $content = '
                        <section class="section">
                            <h5>Comments</h5>
                            <p>5/15/2013: Rita is a highly motivated and engaged employee. She inspires other to exhibit a positive work attitude.</p>
                        </section>
                        <section class="section">
                            <h5>Documents</h5>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-paperclip"></i> <a href="#">This is a document</a></li>
                            </ul>
                        </section>
                        <section class="section">
                            <h5>Risk/Outcome</h5>
                            <p>Risk/Outcome Selection, Risk/Outcome Selection, Risk/Outcome Selection, Risk/Outcome Selection, Risk/Outcome Selection, Risk/Outcome Selection, Risk/Outcome Selection</p>
                        </section>
                        <section class="section">
                            <h5>Method of Validation</h5>
                            <p>Method of Validation Selection, Method of Validation Selection, Method of Validation Selection, Method of Validation Selection</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout-wr')),
                        ),
                        'title' => 'Peer 1',
                        'meta' => array(
                            array(
                                'type' => 'Peer',
                            ),
                            array(
                                'label' => 'Submitted:',
                                'value' => 'Jul 18, 2014',
                            ),
                            array(
                                'label' => 'Rating: ',
                                'value' => 'Exceeds Expectations',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(),
                        'nested' => array(
                            'hide' => array($content)
                        ),
                    );
                    echo createSlat($slat);

                    echo createSlat($slat);

                    echo createSlat($slat);

                    ?>
                </section>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->