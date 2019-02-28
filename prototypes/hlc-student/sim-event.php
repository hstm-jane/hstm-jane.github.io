<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'Mild Asthma';
$patterns['focus']['title'] = 'Mild Asthma';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-sim',
    'type' => 'SIM Event',
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Status:',
        'value' => 'In Progress',
    ),
    array(
        'label' => 'Due:',
        'value' => 'Dec 31, 2015',
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

                    <?php

                        $focusNav = array(
                            'tabs' => array(
                                array(
                                    'active' => true,
                                    'id' => 'sessions',
                                    'label' => 'Sessions',
                                ),
                                array(
                                    'id' => 'overview',
                                    'label' => 'Overview',
                                ),
                            ),
                        );
                        echo createFocusNav($focusNav);

                    ?>

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="sessions">
                            <section>
                                <h2>Sessions</h2>
                                <?php

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    ),
                                    'title' => '<a href="sim-session.php">Mild Asthma</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'SIM Session',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Registered',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Choose Session',
                                        'link' => 'sim-session.php',
                                    )
                                );

                                echo createSlat($slat);

                                ?>
                            </section>
                        </div> <!-- /tab-pane -->

                        <div class="tab-pane fade" id="overview">
                            <section class="section">
                                <h2>Description</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </section>

                            <section class="section">
                                <h3>Author</h3>
                                <p><a href="#modal-author" data-toggle="modal">Jane Doe</a></p>
                            </section>

                            <section class="section">
                                <h2>Learning Objectives</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                                <ul>
                                    <li>An ordered list item</li>
                                    <li>An ordered list item</li>
                                    <li>An ordered list item</li>
                                    <li>An ordered list item</li>
                                </ul>
                            </section>

                            <section class="section">
                                <h2>Course Outline</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                <ol>
                                    <li>An unordered list item</li>
                                    <li>An unordered list item</li>
                                    <li>An unordered list item</li>
                                    <li>An unordered list item</li>
                                </ol>
                            </section>

                            <section class="section">
                                <h2>Technical Requirements</h2>
                                <div data-toggle="limit-height" data-labels="Show all information|Show less information">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                    <p>
                                        <b>Browser Requirements</b>
                                        <ul>
                                            <li>An unordered list item</li>
                                            <li>An unordered list item</li>
                                            <li>An unordered list item</li>
                                            <li>An unordered list item</li>
                                        </ul>
                                    </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </section>

                            <section class="section">
                                <h2>Catalog</h2>
                                <p>This course belongs to the following categories in the HLC catalog:</p>
                                <ul>
                                    <li>Subject > Emergency Treatment > Resuscitation</li>
                                    <li>Audience > Critical Care Paramedics</li>
                                </ul>
                            </section>

                        </div><!-- /tab-pane -->

                    </div><!-- /tab-content -->
                </section><!-- /section-main -->

            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box" id="sidebar-credit">
                        <h3>Additional Credit</h3>
                        <p>You may be eligible for additional credit for this course. Make sure your certifications and licenses are up to date.</p>
                        <ul class="list-unstyled">
                            <li><a href="disciplines-licenses.php">Manage Licenses</a><li>
                            <li><a href="certifications.php">Manage Certifications</a></li>
                        </ul>
                        <p><a href="#" class="btn btn-sm btn-default">Refresh Credits</a></p>
                    </section>
                    <?php include_sidebar(); ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div> <!-- /layout -->

<div id="modal-author" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Course Author</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h2>Jane Doe</h2>
                </section>
                <section class="section">
                    <h3>This is a group header</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
                <section class="section">
                    <h3>This is a group header</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
    <script>
        $(function(){
            // This is a hack to make the prototype only show
            // the additional credits sidebar section when the
            // On Completion tab is active
            $('#sidebar-credit').hide();
            $('.nav-focus li a').click(function(){
                if ( $(this).attr('href') === '#completion') {
                    $('#sidebar-credit').show();
                } else {
                    $('#sidebar-credit').hide();
                }
            });
        });
    </script>
<?= createSiteEnd(); ?>
