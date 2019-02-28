<?php

    include "includes/helpers/helpers.php";

    $patterns['start']['title'] = 'Onboarding';
    $patterns['focus']['title'] = 'Onboarding';
    $patterns['focus']['icon'] = array(
                    'class' => 'hs-icons-class-live',
                    'type' => 'Live Event',
                );


    $patterns['focus']['meta_secondary'] = array(
        array(
            'label' => 'STARTS: ',
            'value' => 'Sat Jul 15, 2014 at 3:30pm',
        ),
        array(
            'label' => 'ENDS: ',
            'value' => 'Sat Jul 25, 2014 at  3:30pm',
        ),
        array(
            'label' => 'Time Zone:',
            'value' => 'ET',
        ),
         array(
            'label' => 'Status:',
            'value' => 'Registered',
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
                        <h2>Meeting Times</h2>
                        <?php

                            $nested = createSlat(array(
                                'title' => 'Cummins Station',
                                'meta' => array(
                                    array(
                                        'label' => 'Address:',
                                        'value' => '1234 Clark Place, Nashville, TN 37208',
                                    )
                                ),
                                'action' => array(
                                    'type' => '',
                                    'content' => '',
                                    'link' => '',
                                ),
                            ));

                            $slat = array(
                                'attributes' => array(
                                    array('class', array('slat')),
                                ),
                                'title' => 'Jul 15, 2014 at 3:30pm - Jul 25, 2014 at 3:30pm',
                                'meta' => array(
                                    array(
                                        'label' => '',
                                        'value' => '',
                                    ),

                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Add to Calendar <i class="fa fa-fw fa-calendar visible-xs"></i>',
                                    'link' => '#',
                                ),
                                'nested' => array(
                                    'show' => array($nested),
                                )
                            );

                            echo createSlat($slat);
                        ?>
                    </section>
                    <section class="section">
                        <label>Host:</label> <span>[Institution Name], [Organization Name]</span>
                    </section>
                    <section class="section">
                        <h2>Learning Activities</h2>
                        <section>
                            <h3>Activities to Complete Before the Event</h3>
                            <?php

                                $slat = array(
                                    'attributes' => array(
                                        array('class', array('slat', 'slat-callout')),
                                    ),
                                    'title' => 'Onboarding PreTest',

                                    'meta' => array(
                                                array(
                                                    'type' => 'Test',
                                                ),
                                                array(
                                                    'label' => 'Status:',
                                                    'value' => 'Assigned',
                                                ),
                                                array(
                                                    'label' => '',
                                                    'value' => '<span class="meta-value">
                                                        <div>Due: Jul 14, 2014 at 2:30pm</div></span>',
                                                    'attributes' => array(
                                                        array('class','meta-callout'),
                                                    )
                                                )
                                            ),
                                    'action' => array(
                                        'type' => 'action-single-success',
                                        'content' => 'Start',
                                        'link' => '#',
                                    )
                                );

                                echo createSlat($slat);
                            ?>

                        </section>
                    <hr>
                    <!-- <section>
                        <h3>Activities to Complete During the Event</h3>

                            <?php

                                $slat = array(
                                    'attributes' => array(
                                        array('class', array('slat', 'slat-callout')),
                                    ),
                                    'title' => 'A Completed Learning Activity',
                                    'meta' => array(
                                        array(
                                                'type' => 'Evaluation',
                                            ),
                                        array(
                                                'label' => 'Status:',
                                                'value' => 'Assigned'
                                            ),
                                        array(
                                            'label' => '',
                                            'value' => '<span class="meta-value">
                                                <div>Due:  Jul 25, 2014 at 3:30am</div></span>',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                                )
                                            )

                                    ),
                                    'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )

                                );

                                echo createSlat($slat);
                            ?>
                    <hr>

                    </section> -->
                    <section>
                        <h3>Activities to Complete After the Event</h3>

                            <?php

                                $slat = array(
                                    'attributes' => array(
                                        array('class', array('slat', 'slat-callout')),
                                    ),
                                    'title' => 'Onboarding Event Evaluation',

                                    'meta' => array(
                                        array(
                                            'type' => 'Evaluation',
                                        ),
                                        array(
                                            'label' => 'For:',
                                            'value' => 'Onboarding',
                                        ),
                                        array(
                                            'label' => '',
                                            'value' => '<span class="meta-value">
                                                <div>Due: Aug 3, 2014 at 2:30pm</div></span>',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )

                                    ),
                                    'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )

                                );

                                echo createSlat($slat);
                            ?>
                            <?php

                                $slat = array(
                                    'attributes' => array(
                                        array('class', array('slat', 'slat-callout')),
                                    ),
                                    'title' => 'Onboarding Instructor Evaluation',

                                    'meta' => array(
                                        array(
                                            'type' => 'Evaluation',
                                        ),
                                        array(
                                            'label' => 'For:',
                                            'value' => 'Onboarding',
                                        ),

                                        array(
                                            'label' => '',
                                            'value' => '<span class="meta-value">
                                                <div>Due: Aug 3, 2014 at 2:30pm</div></span>',
                                            'attributes' => array(
                                                array('class','meta-callout'),
                                            )
                                        )

                                    ),
                                    'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
                                    )

                                );

                                echo createSlat($slat);
                            ?>

                        </section>
                    <hr>

                    </section>
                    <section class="section">
                        <h2>Personnel</h2>

                         <?php

                            $content = '
                                <section class="section">
                                    <h5>Phone</h5>
                                    <p>
                                        <a href="tel:1-555-555-5555">555-555-5555</a>
                                    </p>
                                </section>
                                <section class="section">
                                    <h5>Biography</h5>
                                    <p>
                                        A very interesting story about the life of this admin.
                                    </p>
                                </section>
                                <section class="section">
                                    <h5>Credentials</h5>
                                    <p>
                                        Here are the all reasons this person is awesome.
                                    </p>
                                </section>

                                ';

                            $slat = array(
                                'attributes' => array(
                                    array('class', array('slat')),
                                ),
                                'title' => 'John Smith',
                                'meta' => array(
                                    array(
                                        'label' => 'Function:',
                                        'value' => 'Instructor',
                                    ),
                                    array(
                                        'label' => 'Email:',
                                        'value' => 'djd@healthstream.com',
                                    ),
                                ),
                                'action' => array(
                                    'type' => '',
                                    'content' => '',
                                    'link' => '',
                                ),
                                'nested' => array(
                                    'hide' => array($content),
                                )

                            );

                            echo createSlat($slat);

                        ?>
                    </section>

                </section>
            </div>
            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>Options</h3>
                        <p><a href="#" class="btn btn-sm btn-danger modal-confirm-drop">Drop Event</a>
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

        </div>
    </div><!-- /container -->
</div><!-- /layout -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>

<script>
    $(function(){
        $('.js-select2').select2();

        $(document).on('click', '.search-filter-toggle', function(){
            $(this).closest('.search-filter').toggleClass('search-filter-closed');
            $(window).resize();
        });

        $('#modal-filter').on('show.bs.modal', function() {
            $('.js-select2').each(function(){
                $(this).select2("destroy");
            });
            $(this).find('.modal-body').html($('.search-filters').html());
            $('.js-select2').select2();
            $('.search-filters').empty();
        });
        $('#modal-filter').on('hidden.bs.modal', function() {
            $('.js-select2').each(function(){
                $(this).select2("destroy");
            });
            $('.search-filters').append($('#modal-filter .modal-body').html());
            $('.js-select2').select2();
            $('#modal-filter .modal-body').empty();

        });
        $('.slat .btn').click(function(e){
            e.preventDefault();
        });
        $('.expand-all').on('click', function() {
            $(".collapse-group.collapse:not('.in')").siblings().trigger("click");
            $('.collapse-all').show();
            $('.collapse-all').removeClass("hidden");
            $('.expand-all').hide();
        });

        $('.collapse-all').on('click', function() {
            $('.collapse-group.in').siblings().trigger("click");
            $('.expand-all').show();
            $('.collapse-all').hide();
        });
        $('.collapse').on('hidden.bs.collapse', function() {
            $(".collapse-all").hide();
            $('.expand-all').show();
        });
        $('.collapse').on('shown.bs.collapse', function() {
            $(".collapse-all").show();
            $(".collapse-all").removeClass("hidden");
            $('.expand-all').hide();
        });


});
</script>
<?= createSiteEnd(); ?>