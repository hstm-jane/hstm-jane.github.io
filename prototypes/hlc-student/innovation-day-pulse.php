<style>
    .fph-chart-holder canvas {
        margin: -4px 0 0 -4px;
    }
    .fph-chart-holder {
        position: relative;
        height: 100px;
        width: 100px;
        border-radius: 50%;
        background: #09C;
        margin: auto;
        text-align: center;
        overflow: hidden;
    }
    .fph-chart-holder canvas {
    margin: -4px 0 0 -4px;
}
.fph-chart-holder figcaption {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 100px;
    font-size: 26px;
    font-weight: 300;
    line-height: 98px;
    border-radius: 50%;
    color: #fff;
    text-shadow: 1px 1px 0 #007aa3;
}
.pulse-thumbnail{
    width:100%;

}

.pulse-thumbnail img{
    width:100%;

}
.pulse-type{
    text-transform: capitalize;
    border-right: 1px solid #ccc;
    padding-right:5px;
}
.pulse-item{
    padding: 10px;
    background-color: #eee;
    border: 1px solid #e1e1e1;
    border-left: 3px solid #ccc;
    margin: 7px 0;
}
.pulse-item h3{
    margin-top: 10px;
}
.pulse-item{
    border-left: 3px solid #ccc;
    padding:10px;
    margin: 7px 0;
}
.pulse-item:nth-of-type(odd) {
    background-color: #f9f9f9;
    border: 1px solid #ececec;
    border-left: 3px solid #ccc;
    }
.pulse-item .action{
    width:120px;
}
    .pulse-item .action .btn{
            display: block;
    width: 100%;
    }
    .pulse-item .action.action-split .btn-group{
        width:91px;
    }

    .pulse-item .action.action-split .btn-group{
        display:inline-block;
    }
.pulse-item .action.action-split .btn-group .btn.dropdown-toggle {
        width: 30px;
    margin-left: -1px;
}
</style>
<?php

    include "includes/helpers/helpers.php";

    $patterns['start']['title'] = 'Pulse';
    $patterns['focus']['title'] = 'Pulse';
    $patterns['header']['mainNavActive'] = 'profile';

    $patterns['focus']['meta_secondary'] = array(
        array(
            'label' => 'Saved For Later: ',
            'value' => '10',
        ),
        array(
            'label' => 'Completed: ',
            'value' => '123',
        )
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
                                    'id' => 'saved',
                                    'label' => 'Saved for Later',
                                ),
                                array(
                                    'id' => 'completed',
                                    'label' => 'Completed',
                                ),
                                array(
                                    'id' => 'shared',
                                    'label' => 'Shared',
                                ),
                            ),
                        );
                        echo createFocusNav($focusNav);

                    ?>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="saved">
                            <section class="section">
                                <h2>Pulse</h2>
                                <section class="section">
                        <div class="pulse-item">
                            <?php

                                libxml_use_internal_errors(true);
                                $c = file_get_contents('https://youtu.be/cFCpnmz2OiM');
                                $d = new DomDocument();
                                $d->loadHTML($c);
                                $xp = new domxpath($d);


                                foreach ($xp->query("//meta[@property='og:title']") as $el) {
                                        echo '<h3> ' .$el->getAttribute("content") . "</h3>";
                                    };

                                foreach ($xp->query("//meta[@property='og:image']") as $el) {
                                    echo '<div class="row"><div class="col-sm-2"><div class="pulse-thumbnail"><img src="' . $el->getAttribute("content") . '""> </div> </div>';
                                }
                                foreach ($xp->query("//meta[@property='og:description']") as $el) {
                                    echo '<div class="col-sm-10">' . $el->getAttribute("content") . "</div></div>";
                                }
                                foreach ($xp->query("//meta[@property='og:type']") as $el) {
                                    echo '<span class="pulse-type"> <small>' . $el->getAttribute("content"). '</small></span> ' .
                                    '<span><small>Completed</small></span>'
                                         ;
                                }


                            ?>
                        </div>
                        <div class="pulse-item">
                            <?php

                                libxml_use_internal_errors(true);
                                $c = file_get_contents('https://youtu.be/75PvE2opUVI');
                                $d = new DomDocument();
                                $d->loadHTML($c);
                                $xp = new domxpath($d);


                                foreach ($xp->query("//meta[@property='og:title']") as $el) {
                                        echo '<h3> ' .$el->getAttribute("content") . "</h3>";
                                    };

                                foreach ($xp->query("//meta[@property='og:image']") as $el) {
                                    echo '<div class="row"><div class="col-sm-2"><div class="pulse-thumbnail"><img src="' . $el->getAttribute("content") . '""> </div> </div>';
                                }
                                foreach ($xp->query("//meta[@property='og:description']") as $el) {
                                    echo '<div class="col-sm-10">' . $el->getAttribute("content") . "</div></div>";
                                }
                                foreach ($xp->query("//meta[@property='og:type']") as $el) {
                                    echo '<span class="pulse-type"> <small>' . $el->getAttribute("content"). '</small></span> ' .
                                    '<span><small>Completed</small></span>'
                                         ;
                                }


                            ?>
                        </div>
                        <div class="pulse-item">
                            <?php

                                libxml_use_internal_errors(true);
                                $c = file_get_contents('https://youtu.be/B2YCMkTLLNk');
                                $d = new DomDocument();
                                $d->loadHTML($c);
                                $xp = new domxpath($d);


                                foreach ($xp->query("//meta[@property='og:title']") as $el) {
                                        echo '<h3> ' .$el->getAttribute("content") . "</h3>";
                                    };

                                foreach ($xp->query("//meta[@property='og:image']") as $el) {
                                    echo '<div class="row"><div class="col-sm-2"><div class="pulse-thumbnail"><img src="' . $el->getAttribute("content") . '""> </div> </div>';
                                }
                                foreach ($xp->query("//meta[@property='og:description']") as $el) {
                                    echo '<div class="col-sm-8">' . $el->getAttribute("content") . "</div>";
                                }
                                ?>

                                <div class="col-sm-2">
                                    <div class="action action-split">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default btn-sm hidden-xs">Mark as Complete</a>
                                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="course-elective.php">Save for Later</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> <!--end row-->
                            </div>

                                <?php
                                foreach ($xp->query("//meta[@property='og:type']") as $el) {
                                    echo '<span class="pulse-type"> <small>' . $el->getAttribute("content"). '</small></span> ' .
                                    '<span><small>Completed</small></span>'
                                         ;
                                }
                            ?>

                        </div>
                                </section>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="completed">
                            <section class="section">
                                <h2>Completed</h2>
                                <section class="section">
                                    <div class="pulse-item">
                                        <?php

                                            libxml_use_internal_errors(true);
                                            $c = file_get_contents('https://youtu.be/cFCpnmz2OiM');
                                            $d = new DomDocument();
                                            $d->loadHTML($c);
                                            $xp = new domxpath($d);


                                            foreach ($xp->query("//meta[@property='og:title']") as $el) {
                                                    echo '<h3> ' .$el->getAttribute("content") . "</h3>";
                                                };

                                            foreach ($xp->query("//meta[@property='og:image']") as $el) {
                                                echo '<div class="row"><div class="col-sm-2"><div class="pulse-thumbnail"><img src="' . $el->getAttribute("content") . '""> </div> </div>';
                                            }
                                            foreach ($xp->query("//meta[@property='og:description']") as $el) {
                                                echo '<div class="col-sm-10">' . $el->getAttribute("content") . "</div></div>";
                                            }
                                            foreach ($xp->query("//meta[@property='og:type']") as $el) {
                                                echo '<span class="pulse-type"> <small>' . $el->getAttribute("content"). '</small></span> ' .
                                                '<span><small>Completed</small></span>'
                                                     ;
                                            }


                                        ?>
                                    </div>
                                    <div class="pulse-item">
                                        <?php

                                            libxml_use_internal_errors(true);
                                            $c = file_get_contents('https://youtu.be/75PvE2opUVI');
                                            $d = new DomDocument();
                                            $d->loadHTML($c);
                                            $xp = new domxpath($d);


                                            foreach ($xp->query("//meta[@property='og:title']") as $el) {
                                                    echo '<h3> ' .$el->getAttribute("content") . "</h3>";
                                                };

                                            foreach ($xp->query("//meta[@property='og:image']") as $el) {
                                                echo '<div class="row"><div class="col-sm-2"><div class="pulse-thumbnail"><img src="' . $el->getAttribute("content") . '""> </div> </div>';
                                            }
                                            foreach ($xp->query("//meta[@property='og:description']") as $el) {
                                                echo '<div class="col-sm-10">' . $el->getAttribute("content") . "</div></div>";
                                            }
                                            foreach ($xp->query("//meta[@property='og:type']") as $el) {
                                                echo '<span class="pulse-type"> <small>' . $el->getAttribute("content"). '</small></span> ' .
                                                '<span><small>Completed</small></span>'
                                                     ;
                                            }


                                        ?>
                                    </div>
                                    <div class="pulse-item">
                                        <?php

                                            libxml_use_internal_errors(true);
                                            $c = file_get_contents('https://youtu.be/B2YCMkTLLNk');
                                            $d = new DomDocument();
                                            $d->loadHTML($c);
                                            $xp = new domxpath($d);


                                            foreach ($xp->query("//meta[@property='og:title']") as $el) {
                                                    echo '<h3> ' .$el->getAttribute("content") . "</h3>";
                                                };

                                            foreach ($xp->query("//meta[@property='og:image']") as $el) {
                                                echo '<div class="row"><div class="col-sm-2"><div class="pulse-thumbnail"><img src="' . $el->getAttribute("content") . '""> </div> </div>';
                                            }
                                            foreach ($xp->query("//meta[@property='og:description']") as $el) {
                                                echo '<div class="col-sm-8">' . $el->getAttribute("content") . "</div>";
                                            }
                                            ?>

                                            <div class="col-sm-2">
                                                <div class="action action-split">
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-default btn-sm hidden-xs">Mark as Complete</a>
                                                        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="course-elective.php">Save for Later</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> <!--end row-->
                                        </div>

                                            <?php
                                            foreach ($xp->query("//meta[@property='og:type']") as $el) {
                                                echo '<span class="pulse-type"> <small>' . $el->getAttribute("content"). '</small></span> ' .
                                                '<span><small>Completed</small></span>'
                                                     ;
                                            }
                                        ?>
                                    </div>
                                </section>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="shared">
                            <section class="section">
                                <h2>Shared with You</h2>
                                <section class="section">
                                    <div class="pulse-item">
                                        <?php

                                            libxml_use_internal_errors(true);
                                            $c = file_get_contents('https://youtu.be/cFCpnmz2OiM');
                                            $d = new DomDocument();
                                            $d->loadHTML($c);
                                            $xp = new domxpath($d);


                                            foreach ($xp->query("//meta[@property='og:title']") as $el) {
                                                    echo '<h3> ' .$el->getAttribute("content") . "</h3>";
                                                };

                                            foreach ($xp->query("//meta[@property='og:image']") as $el) {
                                                echo '<div class="row"><div class="col-sm-2"><div class="pulse-thumbnail"><img src="' . $el->getAttribute("content") . '""> </div> </div>';
                                            }
                                            foreach ($xp->query("//meta[@property='og:description']") as $el) {
                                                echo '<div class="col-sm-10">' . $el->getAttribute("content") . "</div></div>";
                                            }
                                            foreach ($xp->query("//meta[@property='og:type']") as $el) {
                                                echo '<span class="pulse-type"> <small>' . $el->getAttribute("content"). '</small></span> ' .
                                                '<span><small>Completed</small></span>'
                                                     ;
                                            }


                                        ?>
                                    </div>
                                    <div class="pulse-item">
                                        <?php

                                            libxml_use_internal_errors(true);
                                            $c = file_get_contents('https://youtu.be/75PvE2opUVI');
                                            $d = new DomDocument();
                                            $d->loadHTML($c);
                                            $xp = new domxpath($d);


                                            foreach ($xp->query("//meta[@property='og:title']") as $el) {
                                                    echo '<h3> ' .$el->getAttribute("content") . "</h3>";
                                                };

                                            foreach ($xp->query("//meta[@property='og:image']") as $el) {
                                                echo '<div class="row"><div class="col-sm-2"><div class="pulse-thumbnail"><img src="' . $el->getAttribute("content") . '""> </div> </div>';
                                            }
                                            foreach ($xp->query("//meta[@property='og:description']") as $el) {
                                                echo '<div class="col-sm-10">' . $el->getAttribute("content") . "</div></div>";
                                            }
                                            foreach ($xp->query("//meta[@property='og:type']") as $el) {
                                                echo '<span class="pulse-type"> <small>' . $el->getAttribute("content"). '</small></span> ' .
                                                '<span><small>Completed</small></span>'
                                                     ;
                                            }


                                        ?>
                                    </div>
                                    <div class="pulse-item">
                                        <?php

                                            libxml_use_internal_errors(true);
                                            $c = file_get_contents('https://youtu.be/B2YCMkTLLNk');
                                            $d = new DomDocument();
                                            $d->loadHTML($c);
                                            $xp = new domxpath($d);


                                            foreach ($xp->query("//meta[@property='og:title']") as $el) {
                                                    echo '<h3> ' .$el->getAttribute("content") . "</h3>";
                                                };

                                            foreach ($xp->query("//meta[@property='og:image']") as $el) {
                                                echo '<div class="row"><div class="col-sm-2"><div class="pulse-thumbnail"><img src="' . $el->getAttribute("content") . '""> </div> </div>';
                                            }
                                            foreach ($xp->query("//meta[@property='og:description']") as $el) {
                                                echo '<div class="col-sm-8">' . $el->getAttribute("content") . "</div>";
                                            }
                                            ?>

                                            <div class="col-sm-2">
                                                <div class="action action-split">
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-default btn-sm hidden-xs">Mark as Complete</a>
                                                        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="course-elective.php">Save for Later</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> <!--end row-->
                                        </div>

                                            <?php
                                            foreach ($xp->query("//meta[@property='og:type']") as $el) {
                                                echo '<span class="pulse-type"> <small>' . $el->getAttribute("content"). '</small></span> ' .
                                                '<span><small>Completed</small></span>'
                                                     ;
                                            }
                                        ?>
                                    </div>
                                </section>
                            </section>
                        </div>


                </section>
            </div>
            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>Trending Types</h3>
                        <p><figure class="fph-chart-holder">
                                <canvas class="fph-chart" data-type="line" width="108" height="108" data-segments="[[30,0],[90,0],[10,0]]" style="width: 108px; height: 108px;"></canvas>
                                <figcaption>0%</figcaption>
                            </figure>
                        </p>
                    </section>
                    <section class="section section-box">
                        <h3>Activity</h3>
                        <p><figure class="fph-chart-holder">
                                <canvas class="fph-chart" data-type="line" width="108" height="108" data-segments="[[30,0],[90,0],[10,0]]" style="width: 108px; height: 108px;"></canvas>
                                <figcaption>5%</figcaption>
                            </figure>
                        </p>
                    </section>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->

        </div>
    </div><!-- /container -->
</div><!-- /layout -->

<!-- Modal -->
<div id="modal-filter" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Filter Results</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

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