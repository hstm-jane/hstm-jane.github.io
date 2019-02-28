<?php

include "includes/helpers/helpers.php";

$patterns['focus']['title'] = 'Focus Bar Examples';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div id="standard">
  <?php
    $focus = array(
            'title' => 'Standard Focus Bar',
        );

        echo createFocus($focus);
    ?>
</div>
<div id="primaryMeta">
    <?php
       $focus = array(
                'title' => 'Focus Bar with Primary Meta',
                'meta_primary' => array(
                                    array(
                                        'pill_type' => 'Pill Type',
                                        'label' => 'Primary Meta Label:',
                                        'value' => '<a href="#" class="meta-value">Primary Meta Value (link)</a>',
                                        'attributes' => array(
                                            array('class','meta-hidden-xs'),
                                        )
                                    ),

                                ),

        );

        echo createFocus($focus);

    ?>
</div>
<div id="secondaryMeta">
    <?php
       $focus = array(
                'title' => 'Focus Bar with Secondary Meta',
                'meta_primary' => array(
                                    array(
                                        'label' => 'Primary Meta Label:',
                                        'value' => '<a href="#" class="meta-value">Primary Meta Value (link)</a>',
                                        'attributes' => array(
                                            array('class','meta-hidden-xs'),
                                        )
                                    )
                            ),
                'meta_secondary' => array(
                    array(
                        'label' => 'Label:',
                        'value' => 'Value',
                    ),
                    array(
                        'label' => 'Another Label: ',
                        'value' => 'Another Value',
                        )
                )
                );
        echo createFocus($focus);

    ?>
</div>
<div id="icon">
    <?php
        $focus = array(
            'title' => 'Icon Focus Bar',
            'icon' => array(
                'class' => 'hs-icons-course',
                'type' => 'Type Label',
            ),
            'meta_primary' => array(
                array(
                    'pill_type' => 'Pill Type',
                )
            ),
            'meta_secondary' => array(
                array(
                    'label' => 'Label:',
                    'value' => 'Value',
                ),
                array(
                    'label' => 'Another Label: ',
                    'value' => 'Another Value',
                    )
            ),
        );

        echo createFocus($focus);
    ?>
</div>
<div id="supporting">
    <?php
        $focus = array(
            'title' => 'Focus Bar with Supporting HTML',

            'supporting' => '<figure class="fph-chart-holder">
                                <canvas class="fph-chart" data-type="Doughnut" width="108" height="108" data-segments="[[30,0],[90,0],[10,0]]" style="width: 108px; height: 108px;"></canvas>
                                <figcaption>0%</figcaption>
                            </figure>',
            'meta_secondary' => array(
                array(
                    'label' => 'Label:',
                    'value' => 'Value',
                ),
                array(
                    'label' => 'Another Label: ',
                    'value' => 'Another Value',
                    )
            ),
            );


        echo createFocus($focus);
    ?>
</div>
<div id="action">
    <?php
        $focus = array(
            'title' => "Action Focus Bar",
            'action' => array(
                'text' => 'Action <i class="fa fa-chevron-right"></i>',
                'link' => '#'
                ),
        );

        echo createFocus($focus);
    ?>
</div>
<div id="search">
    <?php
            $focus = array(
                'title' => 'Search Focus',
                'type' => 'search',

            );

            echo createFocus($focus);
    ?>
</div>
<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-main section-box" data-equalize="layout-columns">

                    <section class="section">
                        <h3>Examples of all of our Focus Bars</h3>
                        <ol>
                            <li><a href="#" id="standardLink">Standard Focus Bar</a></li>
                            <li><a href="#" id="primaryMetaLink">Primary Meta</a></li>
                            <li><a href="#" id="secondaryMetaLink">Secondary Meta</a></li>
                            <li><a href="#" id="actionLink">Action</a></li>
                            <li><a href="#" id="iconLink">Icon</a></li>
                            <li><a href="#" id="supportingLink">Supporting HTML</a></li>
                            <li><a href="#" id="searchLink">Search Input</a></li>
                        </ol>

                    </section>
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php include_sidebar() ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>

<script>
 $(window).load(function(){
    $(".focus").hide();
    $("#standard .focus ").show();

    $("#standardLink").click(function(e){
        e.preventDefault();
        $(".focus").hide();
        $("#standard .focus").show();
    });
    $("#primaryMetaLink").click(function(e){
        e.preventDefault();
        $(".focus").hide();
        $("#primaryMeta .focus").show();
    });
     $("#secondaryMetaLink").click(function(e){
        e.preventDefault();
        $(".focus").hide();
        $("#secondaryMeta .focus").show();
    });

      $("#iconLink").click(function(e){
        e.preventDefault();
        $(".focus").hide();
        $("#icon .focus").show();
    });
       $("#actionLink").click(function(e){
        e.preventDefault();
        $(".focus").hide();
        $("#action .focus").show();
    });
    $("#supportingLink").click(function(e){
        e.preventDefault();
        $(".focus").hide();
        $("#supporting .focus").show();
    });
    $("#searchLink").click(function(e){
        e.preventDefault();
        $(".focus").hide();
        $("#search .focus").show();
    });
 });
</script>