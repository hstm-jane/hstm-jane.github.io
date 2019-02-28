<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'Understanding Chronic Pain Management';
$patterns['focus']['title'] = 'Understanding Chronic Pain Management';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-course',
    'type' => 'Course',
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Status:',
        'value' => 'In Progress',
    ),
    array(
        'label' => 'Est Time:',
        'value' => '2h 40m',
    ),
    array(
        'label' => 'Due:',
        'value' => '{30days}',
    ),
);
$patterns['focus']['supporting'] = '
    <figure class="fph-chart-holder">
        <canvas class="fph-chart" data-type="Doughnut" data-segments="[[30,0],[30,0],[90,0],[10,0]]" width="108" height="108"></canvas>
        <figcaption>0%</figcaption>
    </figure>';

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
                                    'id' => 'learning-activities',
                                    'label' => 'Learning Activities',
                                ),
                                array(
                                    'id' => 'overview',
                                    'label' => 'Overview',
                                ),
                                array(
                                    'id' => 'completion',
                                    'label' => 'On Completion',
                                ),
                            ),
                        );
                        echo createFocusNav($focusNav);

                    ?>

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="learning-activities">
                            <section>
                                <h2>Learning Activities</h2>
                                <?php

                                $slat = array(
                                    'title' => '<a href="attachment-incomplete.php">Chronic Pain Management 1</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Online Activity',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'In Progress',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '30m',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Resume',
                                        'link' => 'attachment-incomplete.php',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );

                                echo createSlat($slat);

                                $slat = array(
                                    'title' => '<a href="registration-locked.php">Chronic Pain Management Class</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Live Class',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '30m',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Preview Schedule',
                                        'link' => 'egistration-locked.php',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );

                                echo createSlat($slat);

                                $slat = array(
                                    'title' => 'Chronic Pain Management 2',
                                    'meta' => array(
                                        array(
                                            'type' => 'Online Activity',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '1h 30m',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="attachment-incomplete.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );

                                echo createSlat($slat);

                                $slat = array(
                                    'title' => 'Post Test',
                                    'meta' => array(
                                        array(
                                            'type' => 'Test',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '10m',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="test-start.php"><i class="fa fa-lock"></i> Locked</a></div>',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
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

                        <div class="tab-pane fade" id="completion">

                            <section class="section">
                                <h2>Continuing Education Credits</h2>
                                <p>You will earn or renew the following credits upon successful completion of this course.</p>

                                <?php

                                $content = '
                                    <section class="section">
                                        <h5>Statement</h5>
                                        <p>The American Heart Association is accredited by the Accreditation Council for Continuing Medical Education to provide continuing education. The American Heart Association designates this enduring material for a maximim of 2.5 AMA PRA Category 1 Credits.</p>
                                    </section>
                                ';
                                $content1 = '
                                    <section class="section">
                                        <h5>Disciplines</h5>
                                        <p>Emergency Physicians, Physician Assistants, Physician, Surgeons</p>
                                    </section>
                                ';
                                $content2 = '
                                    <section class="section"><h5>Locations</h5>
                                        <p>
                                            <span class="label label-default label-location">AK</span>
                                            <span class="label label-default label-location">AL</span>
                                            <span class="label label-default label-location">AR</span>
                                            <span class="label label-default label-location">CA</span>
                                            <span class="label label-default label-location">CO</span>
                                            <span class="label label-default label-location">CT</span>
                                            <span class="label label-default label-location">DC</span>
                                            <span class="label label-default label-location">DE</span>
                                            <span class="label label-default label-location">AK</span>
                                            <span class="label label-default label-location">AL</span>
                                            <span class="label label-default label-location">AR</span>
                                            <span class="label label-default label-location">CA</span>
                                            <span class="label label-default label-location">CO</span>
                                            <span class="label label-default label-location">CT</span>
                                            <span class="label label-default label-location">DC</span>
                                            <span class="label label-default label-location">DE</span>
                                            <span class="label label-default label-location">AK</span>
                                            <span class="label label-default label-location">AL</span>
                                            <span class="label label-default label-location">AR</span>
                                            <span class="label label-default label-location">CA</span>
                                            <span class="label label-default label-location">CO</span>
                                            <span class="label label-default label-location">CT</span>
                                            <span class="label label-default label-location">DC</span>
                                            <span class="label label-default label-location">DE</span>
                                            <span class="label label-default label-location">AK</span>
                                            <span class="label label-default label-location">AL</span>
                                            <span class="label label-default label-location">AR</span>
                                            <span class="label label-default label-location">CA</span>
                                            <span class="label label-default label-location">CO</span>
                                            <span class="label label-default label-location">CT</span>
                                            <span class="label label-default label-location">DC</span>
                                            <span class="label label-default label-location">DE</span>
                                        </p>
                                    </section>
                                ';
                                $slat = array(
                                    'title' => 'Name of Accrediting / Approval Body',
                                    'nested' => array(
                                        'hide' => array($content,$content1,$content2),
                                    ),
                                    'meta' => array(
                                        array(
                                            'label' => 'Credit:',
                                            'value' => '2.0 AMA PRA Category 1 Credits',
                                        ),
                                        array(
                                            'label' => 'Expiration:',
                                            'value' => 'Apr 4, 2016',
                                        )
                                    ),
                                    'action' => array(),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );

                                echo createSlat($slat);

                                ?>
                            </section>

                            <section class="section">
                                <h2>Certifications</h2>
                                <p>You will earn or renew the following certifcations upon successful completion of this course.</p>
                                <?php

                                $slat = array(
                                    'title' => 'Certification Name',
                                    'meta' => array(
                                        array(
                                            'label' => 'Certifying Body:',
                                            'value' => 'Name of Accrediting / Approval Body'
                                        ),
                                        array(
                                            'label' => 'Certification Period: ',
                                            'value' => 'Apr 1, 2012 — Apr 1, 2013'
                                        )
                                    ),
                                    'action' => array()
                                );

                                echo createSlat($slat);

                                ?>
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
                    <section class="section section-box">
                        <h3>Options</h3>
                        <ul class="list-unstyled">
                            <li><a href="#modal-share" data-toggle="modal">Share This Course</a><li>
                        </ul>
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

<div id="modal-share" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Share This Course</h4>
            </div>
            <div class="modal-body">
                <section>
                    <div class="form-group">
                        <label class="control-label">Shareable Link</label>
                        <p>Copy the link to share with others.</p>
                        <textarea class="form-control js-textarea-link" id="js-copy-target">https://www.healthstream.com/hlc/acme/28WN9WNW8SO2MSIO2JNSISMAOSJWKISMS/28WN9WNW8SO2MSIO2JNSISMAOSJWKISMS/28WN9WNW8SO2MSIO2JNSISMAOSJWKISMS/hlc/acme/28WN9WNW8SO2MSIO2JNSISMAOSJWKISMS/acme/28WN9WNW8SO2MSIO2JNSISMAOSJWKISMS/acme/28WN9WNW8SO2MSIO2JNSISMAOSJWKISMS</textarea>

                    </div>
                    <div class="alert alert-success fade hidden" id="copy-success" role="alert">
                            The link has been copied to your clipboard.
                        </div>
                </section>

            </div>
            <div class="modal-footer">
                <a href="#" id="js-copy-button" class="btn btn-success js-btn-copy-link">Copy Link</a>
                <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>d

<?= createSiteEnd(); ?>
    <script>
    $(document).ready(function(){
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

        $("#js-copy-button").click(function(){
            copyToClipboard(document.getElementById("js-copy-target"));
        });

        function copyToClipboard(elem) {
              // create hidden text element, if it doesn't already exist
            var targetId = "_hiddenCopyText_";
            var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
            var origSelectionStart, origSelectionEnd;
            if (isInput) {
                // can just use the original source element for the selection and copy
                target = elem;
                origSelectionStart = elem.selectionStart;
                origSelectionEnd = elem.selectionEnd;
            } else {
                // must use a temporary form element for the selection and copy
                target = document.getElementById(targetId);
                if (!target) {
                    var target = document.createElement("textarea");
                    target.style.position = "absolute";
                    target.style.left = "-9999px";
                    target.style.top = "0";
                    target.id = targetId;
                    document.body.appendChild(target);
                }
                target.textContent = elem.textContent;
            }
            // select the content
            var currentFocus = document.activeElement;
            target.focus();
            target.setSelectionRange(0, target.value.length);

            // copy the selection
            var succeed;
            try {
                    $("#copy-success").removeClass("hidden");
                    succeed = document.execCommand("copy");

                    $("#copy-success").addClass("in");
                    setTimeout(function() {
                        $("#copy-success").removeClass('in');
                        $("#copy-success").addClass('hidden');
                    }, 5000);
            } catch(e) {
                succeed = false;
            }
            // restore original focus
            if (currentFocus && typeof currentFocus.focus === "function") {
                currentFocus.focus();
            }

            if (isInput) {
                // restore prior selection
                elem.setSelectionRange(origSelectionStart, origSelectionEnd);
            } else {
                // clear temporary content
                target.textContent = "";
            }
            return succeed;
        }

        //when modal displays, auto resize textarea height
        $('#modal-share').on('shown.bs.modal', function() {
            var textareaAutoHeight = document.getElementById("js-copy-target").scrollHeight;
                $(".js-textarea-link").height( textareaAutoHeight );
        });
    });




    </script>
