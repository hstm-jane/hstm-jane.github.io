<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Leadership Training';
$patterns['header']['mainNavActive'] = 'scheduling';
$patterns['focus']['title'] = 'Leadership Training';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Type:',
        'value' => 'NRP',
    ),
    array(
        'label' => 'Occurrences:',
        'value' => '52',
    ),
    array(
        'label' => 'Time Zone:',
        'value' => 'ET',
    ),
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout layout-subnav layout-min">
    <div class="container">
        <section class="section section-main section-box">
            <div class="layout-subnav-container">

                <div class="layout-subnav-nav">
                    <div class="layout-subnav-nav-mobile">
                        <span><i class="fa fa-caret-down"></i><span>Resources &amp; Personnel</span></span> <a href="#" class="toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul>
                        <li><a href="/event-series-settings.php">Series Settings<i class="fa fa-chevron-right"></i></a></li>
                        <li><a href="/event-series-occurrences.php">Occurrences<i class="fa fa-chevron-right"></i></a></li>
                        <li class="active"><a href="/event-series-resources.php">Resources &amp;&nbsp;Personnel<i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>

                <div class="layout-subnav-content">
                    <section class="section">
                        <h2 class="page-header">Resources &amp; Personnel</h2>
                        <div class="row">
                            <div class="col-sm-6 select2-container-no-search">
                                <div class="form-group">
                                    <label>Select Resources</label>
                                    <div class="resource-picker">
                                        <div class="resource-picker-search">
                                            <input type="text" class="form-control resource-picker-input" id="resource-picker-input" placeholder="Quick Search" data-type="rooms" tabindex="4">
                                            <div class="btn-group resource-picker-type">
                                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" tabindex="5">
                                                    <span>All</span> <i class="fa fa-caret-down "></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li>
                                                        <a href="#">All</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Rooms</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Equipment</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="resource-picker-overlay">
                                            <div class="resource-picker-holder"></div>
                                            <div class="resource-picker-clear">
                                                <a href="#">Close Results</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="font-size:12px;margin-top:5px">
                                        <a href="#modal-browse-resources" data-trigger="modal">Browse All Resources</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Select Personnel</label>
                                    <input type="text" class="form-control" placeholder="Quick Search">
                                    <div style="font-size:12px;margin-top:5px">
                                        <a href="#modal-browse-resources" data-trigger="modal">Browse All Personnel</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="urg urg-series">
                            <div class="urg-scroll">
                                <div class="urg-nav">
                                    <div class="urg-table">
                                        <div class="urg-row">
                                            <div class="urg-cell urg-head"></div>
                                        </div>
                                        <div class="urg-row">
                                            <div class="urg-cell urg-subhead">
                                                <span class="urg-label">Instructor</span>
                                            </div>
                                        </div>
                                        <div class="urg-row">
                                            <div class="urg-cell urg-item">
                                                <a href="#"><span class="btn btn-xs btn-default urg-item-edit"><i class="fa fa-pencil"></i></span>Demonstration, Jack D.</a><button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                        <div class="urg-row">
                                            <div class="urg-cell urg-subhead">
                                                <span class="urg-label">Personnel</span>
                                            </div>
                                        </div>
                                        <div class="urg-row">
                                            <div class="urg-cell urg-item">
                                                <a href="#" class="urg-limit"><span class="btn btn-xs btn-default urg-item-edit"><i class="fa fa-pencil"></i></span>Demonstration, Jill P.</a><button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                        <div class="urg-row">
                                            <div class="urg-cell urg-item urg-item-alt">
                                                <a href="#" class="urg-limit"><span class="btn btn-xs btn-default urg-item-edit"><i class="fa fa-pencil"></i></span>Demonstration-Longnamenstein, Jane F.</a><button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                        <div class="urg-row">
                                            <div class="urg-cell urg-subhead">
                                                <span class="urg-label">Resources</span>
                                            </div>
                                        </div>
                                        <div class="urg-row">
                                            <div class="urg-cell urg-item">
                                                <a href="#"><span class="btn btn-xs btn-default urg-item-edit"><i class="fa fa-pencil"></i></span>Conference Room A</a><button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                        <div class="urg-row">
                                            <div class="urg-cell urg-item urg-item-alt">
                                                <a href="#" class="urg-indent"><span class="btn btn-xs btn-default urg-item-edit"><i class="fa fa-pencil"></i></span>Projector 12</a><button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="urg-schedule">
                                    <div class="urg-table">
                                        <div class="urg-row">
                                            <div class="urg-cell urg-head">
                                                <a href="#"><span>Sat Oct 24, 2015</span> <span>11:00 AM - 12:00 PM</span></a>
                                            </div>
                                            <div class="urg-cell urg-head">
                                                <a href="#"><span>Sun Oct 25, 2015 11:00 AM -</span> <span>Mon Oct 26, 2015 12:00 PM</span></a>
                                            </div>
                                            <div class="urg-cell urg-head">
                                                <a href="#"><span>Tue Oct 27, 2015</span> <span>11:00 AM - 12:00 PM</span></a>
                                            </div>
                                            <div class="urg-cell urg-head">
                                                <a href="#"><span>Wed Oct 28, 2015 11:00 AM -</span> <span>Thu Oct 29, 2015 12:00 PM</span></a>
                                            </div>
                                        </div>
                                        <div class="urg-row">
                                            <div class="urg-cell urg-subhead"></div>
                                            <div class="urg-cell urg-subhead"></div>
                                            <div class="urg-cell urg-subhead"></div>
                                            <div class="urg-cell urg-subhead"></div>
                                        </div>
                                        <div class="urg-row">
                                            <div class="urg-cell urg-item urg-conflict">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                            <div class="urg-cell urg-item">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                            <div class="urg-cell urg-item">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                            <div class="urg-cell urg-item">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                        </div>
                                        <div class="urg-row">
                                            <div class="urg-cell urg-subhead"></div>
                                            <div class="urg-cell urg-subhead"></div>
                                            <div class="urg-cell urg-subhead"></div>
                                            <div class="urg-cell urg-subhead"></div>
                                        </div>
                                        <div class="urg-row">
                                            <div class="urg-cell urg-item urg-conflict">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                            <div class="urg-cell urg-item">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                            <div class="urg-cell urg-item">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                            <div class="urg-cell urg-item">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                        </div>
                                        <div class="urg-row">
                                            <div class="urg-cell urg-item urg-item-alt urg-conflict">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                            <div class="urg-cell urg-item urg-item-alt">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                            <div class="urg-cell urg-item urg-item-alt">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                            <div class="urg-cell urg-item urg-item-alt">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                        </div>
                                        <div class="urg-row">
                                            <div class="urg-cell urg-subhead"></div>
                                            <div class="urg-cell urg-subhead"></div>
                                            <div class="urg-cell urg-subhead"></div>
                                            <div class="urg-cell urg-subhead"></div>
                                        </div>
                                        <div class="urg-row">
                                            <div class="urg-cell urg-item">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                            <div class="urg-cell urg-item">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                            <div class="urg-cell urg-item">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                            <div class="urg-cell urg-item">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                        </div>
                                        <div class="urg-row">
                                            <div class="urg-cell urg-item urg-item-alt">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                            <div class="urg-cell urg-item urg-item-alt">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                            <div class="urg-cell urg-item urg-item-alt">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                            <div class="urg-cell urg-item urg-item-alt">
                                                <label class="urg-status"><input type="checkbox"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'position' => 'left',
                                    'classes' => array('hidden-xs'),
                                    'html' => '
                                        <a href="#" class="btn btn-success js-confirm-save">Save Series</a>
                                        <a href="/events.php" class="btn btn-default">Return to Events</a>
                                    ',
                                ),
                                array(
                                    'position' => 'left',
                                    'classes' => array('visible-xs'),
                                    'html' => '
                                        <a href="#" class="btn btn-success js-confirm-save">Save</a>
                                        <a href="/events.php" class="btn btn-default">Close</a>
                                    ',
                                ),
                                array(
                                    'position' => 'right',
                                    'classes' => array('hidden-xs'),
                                    'html' => '<a href="#" class="btn btn-danger js-confirm-delete">Delete Series</a>',
                                ),
                                array(
                                    'position' => 'right',
                                    'classes' => array('visible-xs'),
                                    'html' => '<a href="#" class="btn btn-danger js-confirm-delete">Delete</a>',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>

                    <div class="form-modified">Last Modified: Mar 3, 2016 at 6:23 AM ET by demo1</div>

                </div><!-- /content -->
            </div>
        </section>
    </div>
</div>
<!-- /layout -->
<div class="modal fade" id="modal-global-event" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Availability</h4>
            </div>
            <div class="modal-body">
                <p>Setting an event's availability to "Healthstream Cross-Organization" allows students from all organizations to register for the event. </p>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>

<script>
    $(function(){
        function resizeGrid() {
            $('.urg').each(function(){
                var $nav = $(this).find('.urg-nav');
                var $schedule = $(this).find('.urg-schedule');

                $nav.find('.urg-row').each(function(index){
                    var $a = $(this).find('.urg-cell:eq(0)');
                    var $b = $schedule.find('> .urg-table > .urg-row').eq(index).find('.urg-cell:eq(0)');

                    $a.height('auto');
                    $b.height('auto');

                    var height = ( $a.height() > $b.height() )?$a.height():$b.height();

                    $a.height(height);
                    $b.height(height);
                });

            });
        }

        $(window).on('load resize',function(){
            resizeGrid();
        });

        $('.js-confirm-save').click(function(e){
            e.preventDefault();
            HealthStream.utilities.growl({
                type: 'success',
                title: 'Changes Saved',
                text: 'Your changes have been saved'
            });
        });

        <?php if ( !empty($_GET['save']) && $_GET['save'] === 'true' ) { ?>
        setTimeout(function(){ $('.js-confirm-save').click(); },500);
        <?php } ?>

    });
</script>
<?= createSiteEnd(); ?>
