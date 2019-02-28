<?php

    include "includes/helpers/helpers.php";

    $patterns['start']['title'] = 'Live Event Title';
    $patterns['focus']['title'] = 'Live Event Title';
    $patterns['focus']['icon'] = array(
                    'class' => 'hs-icons-class-live',
                    'type' => 'Live Event',
                );

    $patterns['focus']['meta_primary'] = array(
        array(
            'label' => 'FROM COURSE:',
            'value' => '<a href="#" class="meta-value">Course Title</a>',
        ),
    );

    $patterns['focus']['meta_secondary'] = array(
        array(
            'label' => 'STARTS: ',
            'value' => 'Sat Aug 27, 2014 at 5:30am',
        ),
        array(
            'label' => 'ENDS: ',
            'value' => 'Sat Aug 27, 2014 at  6:30am',
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
                                'title' => 'Oct 20, 2016 7:30am - 8:30pm',
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