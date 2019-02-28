<?php

include "includes/helpers/helpers.php";

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
        'value' => 'Registered',
    ),
    array(
        'label' => 'Next Session:',
        'value' => 'Tue Oct 13, 2013, 8:00am - 10:00am ET',
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
                   <section class="section catalog-class-meeting-rooms ">
                        <h2>Meeting Times</h2>

                        
<div class="slat slat-callout slat-muted">
<div class="slat-default">
<div class="title">Session 1 of 3</div>
<ul class="meta">
<li><span class="meta-label">Location:</span><span class="meta-value">Smith Hall</span></li>
<li class="meta-callout"><span class="meta-label">Date:</span><span class="meta-value">Oct 13, 2013, 8AM-10AM</span></li>
</ul>
<div class="action">
    <a class="btn btn-sm btn-default" href="#">Add to Calendar <i class="fa fa-fw fa-calendar visible-xs"></i></a>
</div></div>
<div class="slat-nested">
<div class="collapse-group collapse">

<div class="slat slat-callout">
<div class="slat-default">
<div class="title">Smith Hall</div>
<ul class="meta">
<li><span class="meta-label">Address:</span><span class="meta-value">1234 Clark Place, Nashville, TN 37208</span></li>
</ul>
<div class="action">
    <a class="btn btn-sm btn-default" href="#">View Map<i class="fa fa-fw fa-map-marker visible-xs"></i></a>
</div></div>
</div>

</div>
<a href="#" class="collapse-toggle toggle-text-initialized" data-toggle-text="Show additional information|Hide additional information">Show additional information<i class="fa-fw fa-caret-down fa"></i></a>
</div>
</div>


<div class="slat slat-callout slat-attention">
<div class="slat-default">
<div class="title">Session 2 of 3</div>
<ul class="meta">
<li><span class="meta-label">Location:</span><span class="meta-value">Johnson Hall</span></li>
<li class="meta-callout"><span class="meta-label">Date:</span><span class="meta-value">Oct 15, 2013, 8AM-10AM</span></li>
</ul>
<div class="action">
    <a class="btn btn-sm btn-default" href="#">Add to Calendar <i class="fa fa-fw fa-calendar visible-xs"></i></a>
</div></div>
<div class="slat-nested">

<div class="slat slat-callout">
<div class="slat-default">
<div class="title">Johnson Hall</div>
<ul class="meta">
<li><span class="meta-label">Address:</span><span class="meta-value">1234 Clark Place, Suite 1234, Nashville, TN 37208-3720</span></li>
<li><span class="meta-label">Room:</span><span class="meta-value">5555</span></li>
<li><span class="meta-label">Phone:</span><span class="meta-value">615-301-3100-1234</span></li>
<li><span class="meta-label">Handicap Accessible:</span><span class="meta-value">No</span></li>
<li><span class="meta-label">Directions:</span><span class="meta-value">Section door on left.</span></li>
</ul>
<div class="action">
    <a class="btn btn-sm btn-default" href="#">View Map<i class="fa fa-fw fa-map-marker visible-xs"></i></a>
</div></div>
</div>

</div>
</div>


<div class="slat slat-callout">
<div class="slat-default">
<div class="title">Session 3 of 3</div>
<ul class="meta">
<li><span class="meta-label">Location:</span><span class="meta-value">Johnson Hall</span></li>
<li class="meta-callout"><span class="meta-label">Date:</span><span class="meta-value">Oct 17, 2013, 8AM-10AM</span></li>
</ul>
<div class="action">
    <a class="btn btn-sm btn-default" href="#">Add to Calendar <i class="fa fa-fw fa-calendar visible-xs"></i></a>
</div></div>
<div class="slat-nested">
<div class="slat">
<div class="slat-default">
<div class="title">Johnson Hall</div>
<ul class="meta">
<li><span class="meta-label">Address:</span><span class="meta-value">1234 Clark Place, Suite 1234, Nashville, TN 37208-3720</span></li>
<li><span class="meta-label">Room:</span><span class="meta-value">5555</span></li>
<li><span class="meta-label">Phone:</span><span class="meta-value">615-301-3100-1234</span></li>
<li><span class="meta-label">Handicap Accessible:</span><span class="meta-value">No</span></li>
<li><span class="meta-label">Directions:</span><span class="meta-value">Section door on left.</span></li>
</ul>
</div>
</div>

</div>
</div>

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
                                array('class', array('slat')),
                            ),
                            'title' => 'Dianne J. Demonstration',
                            'meta' => array(),
                            'action' => array(),
                            'nested' => array(
                                'hide' => array($content),
                            )
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
                                array('class', array('slat')),
                            ),
                            'title' => 'Jack D. Demonstration',
                            'meta' => array(),
                            'action' => array(),
                            'nested' => array(
                                'hide' => array($content),
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

                </section><!-- /section-main  -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>Options</h3>
                        <p><a href="registration-with-selection.php">View Alternate Classes</a></p>
                        <p><a href="#" class="btn btn-sm btn-danger modal-confirm-drop">Drop Class</a>
                    </section>
                    <section class="section section-box">
                        <h3>Support</h3>
                        <p>To talk with a customer service representative call 1-800-521-0574</p>
                        <ul class="list-unstyled">
                            <li><a href="#">Visit the help forum</a></li>
                            <li><a href="#">Send us an email</a></li>
                        </ul>
                    </section>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div> <!-- /layout -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $('.modal-confirm-drop').click(function(e){
            e.preventDefault();
            HealthStream.utilities.interrupt({
                type: 'warning',
                title: 'You are about to drop a class',
                text: 'You will still need to attend a class to complete this course.',
                actions: [
                    {
                        type: 'danger',
                        label: 'Yes, drop this class',
                        url: 'registration.php?action=dropped',
                    },
                    {
                        label: 'Cancel'
                    }
                ]
            });
        });
    });
</script>
<?= createSiteEnd(); ?>

