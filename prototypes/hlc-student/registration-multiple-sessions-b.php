<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'Chronic Pain Management Class';
$patterns['focus']['title'] = 'Chronic Pain Management Class';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-class-live',
    'type' => 'Live Class',
);
$patterns['focus']['meta_primary'] = array(
    array(
        'label' => 'From Course:',
        'value' => '<a href="course.php" class="meta-value">Chronic Pain Management</a>',
    ),
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Status:',
        'value' => 'Not Registered',
    ),
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <section class="section section-main section-box" data-equalize="layout-columns">
                    <section class="section">
                        <h2>Choose a Class <small>Time and location options for the class</small></h2>

                        <?php

                        $slat = array(
                            'title' => '<a href="#modal-class-1" data-toggle="modal">Chronic Pain Management Class</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Live Class',
                                ),
                                array(
                                    'label' => 'Location:',
                                    'value' => 'Multiple',
                                ),
                                array(
                                    'label' => 'Starts: ',
                                    'value' => '<span class="meta-callout-label">Starts:</span> Nov 17, 2015, 8:00AM - 3 Sessions',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single-success',
                                'content' => 'Register',
                                'link' => 'registration-registered-class.php',
                            )
                        );

                        echo createSlat($slat);

                        $slat = array(
                            'title' => '<a href="#modal-class-2" data-toggle="modal">Chronic Pain Management Class</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Live Class',
                                ),
                                array(
                                    'label' => 'Location:',
                                    'value' => 'Smith Hall',
                                ),
                                array(
                                    'label' => 'Starts: ',
                                    'value' => '<span class="meta-callout-label">Starts:</span> Dec 15, 2015, 10:00AM - 2 Sessions',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single-success',
                                'content' => 'Register',
                                'link' => 'registration-registered-class-single.php',
                            )
                        );

                        echo createSlat($slat);

                        $slat = array(
                            'title' => '<a href="#modal-class-3" data-toggle="modal">Chronic Pain Management Class</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Live Class',
                                ),
                                array(
                                    'label' => 'Location:',
                                    'value' => 'Smith Hall',
                                ),
                                array(
                                    'label' => 'Starts: ',
                                    'value' => '<span class="meta-callout-label">Starts:</span> Jan 19, 2016, 11:00AM - 4 Sessions',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single-success',
                                'content' => 'Register',
                                'link' => 'registration-registered-class-single.php',
                            )
                        );

                        echo createSlat($slat);

                        $slat = array(
                            'title' => '<a href="#modal-class-4" data-toggle="modal">Chronic Pain Management Class</a>',
                            'meta' => array(
                                array(
                                    'type' => 'Live Class',
                                ),
                                array(
                                    'label' => 'Location:',
                                    'value' => 'Smith Hall',
                                ),
                                array(
                                    'label' => 'Starts: ',
                                    'value' => '<span class="meta-callout-label">Starts:</span> Jan 29, 2016, 9:00AM - 1 Session',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single-success',
                                'content' => 'Register',
                                'link' => 'registration-registered-class-single.php',
                            )
                        );

                        echo createSlat($slat);

                        ?>

                    </section>

                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php
                    include_sidebar();
                    ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div> <!-- /layout -->

<!-- Modal -->
<!-- Modal -->
<div id="modal-class-1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="" class="modal-title">Chronic Pain Management Class</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h2>Meeting Times <small>All sessions are required</small></h2>

                    <?php

                    $nested = createSlat(array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Smith Hall',
                        'meta' => array(
                            array(
                                'label' => 'Address:',
                                'value' => '1234 Clark Place, Nashville, TN 37208',
                            )
                        ),
                        'action' => array(),
                    ));
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout-wr')),
                        ),
                        'title' => 'Session 1 of 3',
                        'meta' => array(
                            array(
                                'label' => 'Duration:',
                                'value' => '1h',
                            ),
                            array(
                                'label' => 'Date:',
                                'value' => 'Nov 17, 2015, <span>8:00AM-9:00AM</span>',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(),
                        'nested' => array(
                            'show' => array($nested),
                        )
                    );
                    echo createSlat($slat);


                    $nested = createSlat(array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Johnson Hall',
                        'meta' => array(
                            array(
                                'label' => 'Address:',
                                'value' => '1234 Clark Place, Nashville, TN 37208',
                            )
                        ),
                        'action' => array(),
                    ));
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout-wr')),
                        ),
                        'title' => 'Session 2 of 3',
                        'meta' => array(
                            array(
                                'label' => 'Duration:',
                                'value' => '1h',
                            ),
                            array(
                                'label' => 'Date:',
                                'value' => 'Nov 17, 2015, <span>11:00AM-12:000PM</span>',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(),
                        'nested' => array(
                            'show' => array($nested),
                        )
                    );
                    echo createSlat($slat);


                    $nested = createSlat(array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Johnson Hall',
                        'meta' => array(
                            array(
                                'label' => 'Address:',
                                'value' => '1234 Clark Place, Nashville, TN 37208',
                            )
                        ),
                        'action' => array(),
                    ));
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout-wr')),
                        ),
                        'title' => 'Session 3 of 3',
                        'meta' => array(
                            array(
                                'label' => 'Duration:',
                                'value' => '1h',
                            ),
                            array(
                                'label' => 'Date:',
                                'value' => 'Nov 17, 2015, <span>1:30PM-2:30PM</span>',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(),
                        'nested' => array(
                            'show' => array($nested),
                        )
                    );
                    echo createSlat($slat);

                    ?>
                </section>
                <section class="section">
                    <h2>Size</h2>
                    <ul class="list-unstyled">
                        <li>12 Registered</li>
                        <li>8 Available</li>
                    </ul>
                </section>
                <section class="section">
                    <h2>Notes</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
                <section class="section">
                    <h2>Instructors</h2>

                    <?php

                    $content = '
                        <section class="section">
                            <h5>Email</h5>
                            <a href="mailto:djd@healthstream.com" class="meta-value">djd@healthstream.com</a>
                        </section>
                        <section class="section">
                            <h5>Address</h5>
                            <address>1234 Acme Road<br>Suite 678<br>Nashville, Tennessee 37203</address>
                        </section>
                        <section class="section">
                            <h5>Phone</h5>
                            <p>(615) 555-5555</p>
                        </section>
                        <section class="section">
                            <h5>Fax</h5>
                            <p>(615) 555-5555</p>
                        </section>
                        <section class="section">
                            <h5>Biography</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </section>
                        <section class="section">
                            <h5>Credentials</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Dianne J. Demonstration',
                        'meta' => array(),
                        'action' => array(),
                        'nested' => array(
                            'hide' => array($content)
                        ),
                    );
                    echo createSlat($slat);

                    $content = '
                        <section class="section">
                            <h5>Email</h5>
                            <a href="mailto:jdd@healthstream.com" class="meta-value">jdd@healthstream.com</a>
                        </section>
                        <section class="section">
                            <h5>Address</h5>
                            <address>1234 Acme Road<br>Suite 678<br>Nashville, Tennessee 37203</address>
                        </section>
                        <section class="section">
                            <h5>Phone</h5>
                            <p>(615) 555-5555</p>
                        </section>
                        <section class="section">
                            <h5>Fax</h5>
                            <p>(615) 555-5555</p>
                        </section>
                        <section class="section">
                            <h5>Biography</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </section>
                        <section class="section">
                            <h5>Credentials</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Jack D. Demonstration',
                        'meta' => array(),
                        'action' => array(),
                        'nested' => array(
                            'hide' => array($content)
                        ),
                    );
                    echo createSlat($slat);

                    ?>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<div id="modal-class-2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="" class="modal-title">Chronic Pain Management Class</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h2>Meeting Times <small>All sessions are required</small></h2>
                    <?php

                    $nested = createSlat(array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Smith Hall',
                        'meta' => array(
                            array(
                                'label' => 'Address:',
                                'value' => '1234 Clark Place, Nashville, TN 37208',
                            )
                        ),
                        'action' => array(),
                    ));
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout-wr')),
                        ),
                        'title' => 'Session 1 of 2',
                        'meta' => array(
                            array(
                                'label' => 'Duration:',
                                'value' => '1.5h',
                            ),
                            array(
                                'label' => 'Date:',
                                'value' => 'Dec 15, 2015, <span>10:00AM-11:30AM</span>',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(),
                        'nested' => array(
                            'show' => array($nested),
                        )
                    );
                    echo createSlat($slat);


                    $nested = createSlat(array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Smith Hall',
                        'meta' => array(
                            array(
                                'label' => 'Address:',
                                'value' => '1234 Clark Place, Nashville, TN 37208',
                            )
                        ),
                        'action' => array(),
                    ));
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout-wr')),
                        ),
                        'title' => 'Session 2 of 2',
                        'meta' => array(
                            array(
                                'label' => 'Duration:',
                                'value' => '1.5h',
                            ),
                            array(
                                'label' => 'Date:',
                                'value' => 'Dec 16, 2015, <span>10:00AM-11:30AM</span>',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(),
                        'nested' => array(
                            'show' => array($nested),
                        )
                    );
                    echo createSlat($slat);

                    ?>
                </section>
                <section class="section">
                    <h2>Size</h2>
                    <ul class="list-unstyled">
                        <li>12 Registered</li>
                        <li>8 Available</li>
                    </ul>
                </section>
                <section class="section">
                    <h2>Notes</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
                <section class="section">
                    <h2>Instructors</h2>

                    <?php

                    $content = '
                        <section class="section">
                            <h5>Email</h5>
                            <a href="mailto:djd@healthstream.com" class="meta-value">djd@healthstream.com</a>
                        </section>
                        <section class="section">
                            <h5>Address</h5>
                            <address>1234 Acme Road<br>Suite 678<br>Nashville, Tennessee 37203</address>
                        </section>
                        <section class="section">
                            <h5>Phone</h5>
                            <p>(615) 555-5555</p>
                        </section>
                        <section class="section">
                            <h5>Fax</h5>
                            <p>(615) 555-5555</p>
                        </section>
                        <section class="section">
                            <h5>Biography</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </section>
                        <section class="section">
                            <h5>Credentials</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Dianne J. Demonstration',
                        'meta' => array(),
                        'action' => array(),
                        'nested' => array(
                            'hide' => array($content)
                        ),
                    );
                    echo createSlat($slat);

                    $content = '
                        <section class="section">
                            <h5>Email</h5>
                            <a href="mailto:jdd@healthstream.com" class="meta-value">jdd@healthstream.com</a>
                        </section>
                        <section class="section">
                            <h5>Address</h5>
                            <address>1234 Acme Road<br>Suite 678<br>Nashville, Tennessee 37203</address>
                        </section>
                        <section class="section">
                            <h5>Phone</h5>
                            <p>(615) 555-5555</p>
                        </section>
                        <section class="section">
                            <h5>Fax</h5>
                            <p>(615) 555-5555</p>
                        </section>
                        <section class="section">
                            <h5>Biography</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </section>
                        <section class="section">
                            <h5>Credentials</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Jack D. Demonstration',
                        'meta' => array(),
                        'action' => array(),
                        'nested' => array(
                            'hide' => array($content)
                        ),
                    );
                    echo createSlat($slat);

                    ?>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<div id="modal-class-3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="" class="modal-title">Chronic Pain Management Class</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h2>Meeting Times <small>All sessions are required</small></h2>

                    <?php

                    $nested = createSlat(array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Smith Hall',
                        'meta' => array(
                            array(
                                'label' => 'Address:',
                                'value' => '1234 Clark Place, Nashville, TN 37208',
                            )
                        ),
                        'action' => array(),
                    ));
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout-wr')),
                        ),
                        'title' => 'Session 1 of 4',
                        'meta' => array(
                            array(
                                'label' => 'Duration:',
                                'value' => '45m',
                            ),
                            array(
                                'label' => 'Date:',
                                'value' => 'Jan 19, 2015, <span>11:00AM-11:45AM</span>',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(),
                        'nested' => array(
                            'show' => array($nested),
                        )
                    );
                    echo createSlat($slat);


                    $nested = createSlat(array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Smith Hall',
                        'meta' => array(
                            array(
                                'label' => 'Address:',
                                'value' => '1234 Clark Place, Nashville, TN 37208',
                            )
                        ),
                        'action' => array(),
                    ));
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout-wr')),
                        ),
                        'title' => 'Session 2 of 4',
                        'meta' => array(
                            array(
                                'label' => 'Duration:',
                                'value' => '45m',
                            ),
                            array(
                                'label' => 'Date:',
                                'value' => 'Jan 19, 2016, <span>1:00PM-1:45PM</span>',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(),
                        'nested' => array(
                            'show' => array($nested),
                        )
                    );
                    echo createSlat($slat);


                    $nested = createSlat(array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Smith Hall',
                        'meta' => array(
                            array(
                                'label' => 'Address:',
                                'value' => '1234 Clark Place, Nashville, TN 37208',
                            )
                        ),
                        'action' => array(),
                    ));
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout-wr')),
                        ),
                        'title' => 'Session 3 of 4',
                        'meta' => array(
                            array(
                                'label' => 'Duration:',
                                'value' => '45m',
                            ),
                            array(
                                'label' => 'Date:',
                                'value' => 'Jan 20, 2016, <span>11:00AM-11:45AM</span>',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(),
                        'nested' => array(
                            'show' => array($nested),
                        )
                    );
                    echo createSlat($slat);


                    $nested = createSlat(array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Smith Hall',
                        'meta' => array(
                            array(
                                'label' => 'Address:',
                                'value' => '1234 Clark Place, Nashville, TN 37208',
                            )
                        ),
                        'action' => array(),
                    ));
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout-wr')),
                        ),
                        'title' => 'Session 4 of 4',
                        'meta' => array(
                            array(
                                'label' => 'Duration:',
                                'value' => '45m',
                            ),
                            array(
                                'label' => 'Date:',
                                'value' => 'Jan 20, 2016, <span>1:00PM-1:45PM</span>',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(),
                        'nested' => array(
                            'show' => array($nested),
                        )
                    );
                    echo createSlat($slat);

                    ?>
                </section>
                <section class="section">
                    <h2>Size</h2>
                    <ul class="list-unstyled">
                        <li>12 Registered</li>
                        <li>8 Available</li>
                    </ul>
                </section>
                <section class="section">
                    <h2>Notes</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
                <section class="section">
                    <h2>Instructors</h2>

                    <?php

                    $content = '
                        <section class="section">
                            <h5>Email</h5>
                            <a href="mailto:djd@healthstream.com" class="meta-value">djd@healthstream.com</a>
                        </section>
                        <section class="section">
                            <h5>Address</h5>
                            <address>1234 Acme Road<br>Suite 678<br>Nashville, Tennessee 37203</address>
                        </section>
                        <section class="section">
                            <h5>Phone</h5>
                            <p>(615) 555-5555</p>
                        </section>
                        <section class="section">
                            <h5>Fax</h5>
                            <p>(615) 555-5555</p>
                        </section>
                        <section class="section">
                            <h5>Biography</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </section>
                        <section class="section">
                            <h5>Credentials</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Dianne J. Demonstration',
                        'meta' => array(),
                        'action' => array(),
                        'nested' => array(
                            'hide' => array($content)
                        ),
                    );
                    echo createSlat($slat);

                    $content = '
                        <section class="section">
                            <h5>Email</h5>
                            <a href="mailto:jdd@healthstream.com" class="meta-value">jdd@healthstream.com</a>
                        </section>
                        <section class="section">
                            <h5>Address</h5>
                            <address>1234 Acme Road<br>Suite 678<br>Nashville, Tennessee 37203</address>
                        </section>
                        <section class="section">
                            <h5>Phone</h5>
                            <p>(615) 555-5555</p>
                        </section>
                        <section class="section">
                            <h5>Fax</h5>
                            <p>(615) 555-5555</p>
                        </section>
                        <section class="section">
                            <h5>Biography</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </section>
                        <section class="section">
                            <h5>Credentials</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Jack D. Demonstration',
                        'meta' => array(),
                        'action' => array(),
                        'nested' => array(
                            'hide' => array($content)
                        ),
                    );
                    echo createSlat($slat);

                    ?>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<div id="modal-class-4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="" class="modal-title">Chronic Pain Management Class</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h2>Meeting Times <small>All sessions are required</small></h2>

                    <?php

                    $nested = createSlat(array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Smith Hall',
                        'meta' => array(
                            array(
                                'label' => 'Address:',
                                'value' => '1234 Clark Place, Nashville, TN 37208',
                            )
                        ),
                        'action' => array(),
                    ));
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout-wr')),
                        ),
                        'title' => 'Session 1 of 1',
                        'meta' => array(
                            array(
                                'label' => 'Duration:',
                                'value' => '2h',
                            ),
                            array(
                                'label' => 'Date:',
                                'value' => 'Jan 29, 2016, <span>9:00AM-11:00AM</span>',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            )
                        ),
                        'action' => array(),
                        'nested' => array(
                            'show' => array($nested),
                        )
                    );
                    echo createSlat($slat);

                    ?>
                </section>
                <section class="section">
                    <h2>Size</h2>
                    <ul class="list-unstyled">
                        <li>12 Registered</li>
                        <li>8 Available</li>
                    </ul>
                </section>
                <section class="section">
                    <h2>Notes</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
                <section class="section">
                    <h2>Instructors</h2>

                    <?php

                    $content = '
                        <section class="section">
                            <h5>Email</h5>
                            <a href="mailto:djd@healthstream.com" class="meta-value">djd@healthstream.com</a>
                        </section>
                        <section class="section">
                            <h5>Address</h5>
                            <address>1234 Acme Road<br>Suite 678<br>Nashville, Tennessee 37203</address>
                        </section>
                        <section class="section">
                            <h5>Phone</h5>
                            <p>(615) 555-5555</p>
                        </section>
                        <section class="section">
                            <h5>Fax</h5>
                            <p>(615) 555-5555</p>
                        </section>
                        <section class="section">
                            <h5>Biography</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </section>
                        <section class="section">
                            <h5>Credentials</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Dianne J. Demonstration',
                        'meta' => array(),
                        'action' => array(),
                        'nested' => array(
                            'hide' => array($content)
                        ),
                    );
                    echo createSlat($slat);

                    $content = '
                        <section class="section">
                            <h5>Email</h5>
                            <a href="mailto:jdd@healthstream.com" class="meta-value">jdd@healthstream.com</a>
                        </section>
                        <section class="section">
                            <h5>Address</h5>
                            <address>1234 Acme Road<br>Suite 678<br>Nashville, Tennessee 37203</address>
                        </section>
                        <section class="section">
                            <h5>Phone</h5>
                            <p>(615) 555-5555</p>
                        </section>
                        <section class="section">
                            <h5>Fax</h5>
                            <p>(615) 555-5555</p>
                        </section>
                        <section class="section">
                            <h5>Biography</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </section>
                        <section class="section">
                            <h5>Credentials</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat')),
                        ),
                        'title' => 'Jack D. Demonstration',
                        'meta' => array(),
                        'action' => array(),
                        'nested' => array(
                            'hide' => array($content)
                        ),
                    );
                    echo createSlat($slat);

                    ?>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-instructor" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Instructor Details</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h3>Dianne J Demonstation</h3>
                    <dl>
                        <dt>Email:</dt>
                        <dd>djd@healthstream.com</dd>
                        <dt>Address:</dt>
                        <dd>
                            <address>
                                1234 Acme Road<br>
                                Suite 678<br>
                                Nashville, Tennessee 37203
                            </address>
                        </dd>
                        <dt>Phone:</dt>
                        <dd>Hide if empty</dd>
                        <dt>Fax:</dt>
                        <dd>Hide if empty</dd>
                    </dl>
                </section>
                <section class="section">
                    <h3>Biography</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
                <section class="section">
                    <h3>Credentials</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
<?php if ( $action === 'dropped' ) { ?>
<script>
    $(function(){
        HealthStream.utilities.growl({
            title: 'You dropped the class',
            text: '%3Cdl%20class%3D%22gritter-class%22%3E%0A%3Cdt%3ECronic%20Pain%20Management%20Class%3C%2Fdt%3E%0A%3Cdd%3EOct%2013%2C%202013%20at%208am%3C%2Fdd%3E%0A%3Cdd%3ESmith%20Hall%3C%2Fdd%3E%0A%3C%2Fdl%3E'
        });
    });
</script>
<?php } ?>
<?= createSiteEnd(); ?>
