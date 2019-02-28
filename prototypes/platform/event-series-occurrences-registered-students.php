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
                        <span><i class="fa fa-caret-down"></i><span>Occurrences</span></span> <a href="#" class="toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul>
                        <li><a href="/event-series-settings.php">Series Settings<i class="fa fa-chevron-right"></i></a></li>
                        <li class="active"><a href="/event-series-occurrences.php">Occurrences<i class="fa fa-chevron-right"></i></a></li>
                        <li><a href="/event-series-resources.php">Resources &amp;&nbsp;Personnel<i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>

                <div class="layout-subnav-content">
                    <section class="section">

                        <h2 class="page-header">Occurrences <span class="badge">52</span>
                            <span class="page-header-options">
                                <button class="btn btn-sm btn-default" type="button">Add Occurrence</button>
                                <button class="btn btn-sm btn-default" id="btnRecurrence" type="button" >
                                    <i class="fa fa-refresh"></i> Recurrence Pattern
                                </button>
                            </span>
                        </h2>
                        <p>
                            Occurs on Wednesday every week from 11:00 AM to 12:00 PM starting on 2/17/2016 and ending after 10 occurrences.
                        </p>
                        <table class="event-occurrences">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="hidden-sm">
                                            <div class="row">
                                                <div class="col-md-6">Start</div>
                                                <div class="col-md-6">End</div>
                                            </div>
                                        </div>
                                        <div class="visible-sm">
                                            Dates
                                        </div>
                                    </th>
                                    <th>Registered</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    for ( $i = 1; $i <= 10; $i++ ) {
                                        $action = ($i === 1 || $i === 4 || $i === 8 )?'View':'Manage';
                                        $disabled = ( $i === 1 || $i === 4 || $i === 8 );
                                        $disable = ( $disabled )?' disabled':'';
                                        $graded = ( $i === 1 );
                                        $registered = ( $graded )?10:rand(0,10);
                                ?>

                                <tr class="event-occurrence">
                                    <td class="event-occurrence__times">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group event-occurrence__start">
                                                    <div class="input-group">
                                                        <input type="text" class="datetimepicker input-sm form-control" value="<?= date('m/d/y',strtotime('+'.(2*$i).' days')) ?> 10:00 AM"<?= $disable ?>>
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group event-occurrence__end">
                                                    <div class="input-group">
                                                        <input type="text" class="datetimepicker input-sm form-control" value="<?= date('m/d/y',strtotime('+'.(2*$i+1).' days')) ?> 10:00 AM"<?= $disable ?>>
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="event-occurrence__registered"><?= $registered ?>/10</td>
                                    <td class="event-occurrence__actions">
                                        <div class="hidden-xs">
                                            <a href="/event-single-settings.php" class="btn btn-sm btn-default"><?= $action ?></a>
                                            <?php if ( !$graded && !$disabled ) { ?>
                                                <button class="btn btn-sm btn-danger remove-button js-delete-occurrence">Remove</button>
                                                <button class="btn btn-sm btn-warning undo-delete js-undo-delete">Undo</button>
                                            <?php } ?>
                                        </div>
                                        <div class="visible-xs">
                                            <div class="btn-group">
                                                <a class="btn btn-default btn-sm dropdown-toggle js-actions-button" data-toggle="dropdown">
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><?= $action ?></a></li>
                                                    <?php if ( !$graded && !$disabled ) { ?>
                                                    <li class="remove-button"><a class="js-delete-occurrence" href="#">Remove</a>
                                                    </li>
                                                    <li class="undo-delete"><a class="js-undo-delete " href="#">Undo</a>
                                                    </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>

                        <button class="btn btn-default btn-sm">Add Occurrence</button>
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

<script src="/scripts/date.format.js"></script>
<script src="/scripts/prototype.scheduling.js"></script>

<script>
    $(function(){

    $('.js-confirm-save').click(function(e){
        e.preventDefault();
        HealthStream.utilities.growl({
            type: 'success',
            title: 'Changes Saved',
            text: 'Your changes have been saved'
        });
    });

     $(function () {

        $(".js-delete-occurrence").click(function(){
            $(this).parents("tr").find("input").prop( "disabled", true );
            $(this).parents("tr").addClass("delete-row");
            $(this).parents("tr").find("a:not(.js-actions-button)").addClass("disabled");
            $(this).parents("tr").find(".dropdown-menu li:not(.undo-delete)").addClass("disabled");
        });

        $(".js-undo-delete").click(function(){
            $(this).parents("tr").removeClass("delete-row");
            $(this).parents("tr").find("a:not(.undo-button)").removeClass("disabled");
            $(this).parents("tr").find("input").prop( "disabled", false );
            $(this).parents("tr").find("a:not(.js-actions-button)").removeClass("disabled");
            $(this).parents("tr").find(".dropdown-menu li:not(.undo-delete)").removeClass("disabled");
        });
});


    $(function () {
            $('.datetimepicker').datetimepicker({
                sideBySide: true
            });
        });

     $('#btnRecurrence').click(function() {
                HealthStream.utilities.interrupt({
                    type: 'failure',
                    title: 'Cannot Change Recurrence Pattern',
                    text: 'Students have registered for at least one event in the series. This prevents you from modifying the recurrence pattern. Individual occurrences can still be Edited, Added or Deleted.',
                    actions: [{
                        label: 'Continue'
                    }]
                });
            });



    <?php if ( !empty($_GET['save']) && $_GET['save'] === 'true' ) { ?>
    setTimeout(function(){ $('.js-confirm-save').click(); },500);
    <?php } ?>

    });
</script>

<?= createSiteEnd(); ?>

