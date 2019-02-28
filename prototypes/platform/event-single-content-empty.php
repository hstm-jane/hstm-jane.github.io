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
        'label' => 'STARTS: ',
        'value' => 'Sat Dec 12, 2015 at 10:00am',
    ),
    array(
        'label' => 'ENDS: ',
        'value' => 'Sat Dec 12, 2015 at 11:00am',
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
                        <span><i class="fa fa-caret-down"></i>
                            <span>Settings</span>
                        </span>
                        <a href="#" class="toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a href="/event-single-settings.php">Settings<i class="fa fa-chevron-right"></i></a>
                        </li>
                        <li>
                            <a href="/event-single-permissions.php">Permisssions<i class="fa fa-chevron-right"></i></a>
                        </li>
                        <li>
                            <a href="/event-single-resources.php">Resources &amp;&nbsp; Personnel<i class="fa fa-chevron-right"></i></a>
                        </li>
                        <li>
                            <a href="/event-single-roster.php">Roster<i class="fa fa-chevron-right"></i></a>
                        </li>
                        <li>
                            <a href="/event-single-grading.php">Grading<i class="fa fa-chevron-right"></i></a>
                        </li>
                        <li>
                            <a href="/event-single-message.php">Send Message<i class="fa fa-chevron-right"></i></a>
                        </li>
                        <li class="active">
                            <a href="/event-single-content.php">Content<i class="fa fa-chevron-right"></i></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="/event-series-settings.php">Add Series</a>
                        </li>
                    </ul>
                </div>


                <div class="layout-subnav-content">

                    <section class="section">
                        <h2 class="page-header">Learning Content</h2>


                        <div class="slat">
                            <div class="slat-message">
                                <h3>No content has been attached to this event.</h3>

                            </div>
                        </div>


                    </section>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'position' => 'left',
                                    'html' => '
                                        <a href="#" class="btn btn-success js-confirm-save">Save</a>
                                        <a href="/content-browse.php" class="btn btn-default">Add Content</a>
                                    ',
                                ),
                                array(
                                    'position' => 'right',
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


<?php
include MODAL_MESSAGE_GROUP;
?>
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>

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

        $('#sendMessageGroup').formValidation({
            framework: 'bootstrap',
            fields: {
                subject_group: {
                    validators: {
                        notEmpty: {
                            message: 'This field is required'
                        },
                    }
                },
                message_group: {
                    validators: {
                        notEmpty: {
                            message: 'This field is required'
                        },
                    }
                },
            }
        });

            //when no seats are availabel, badge turns red
        if($("#seats-available span").html() > 0){
            var $badge = $("#seats-available span");

            $badge.removeClass("danger");
        } else {
            var $badge = $("#seats-available span");

            $badge.addClass("danger");
        }



        <?php if ( !empty($_GET['save']) && $_GET['save'] === 'true' ) { ?>
        setTimeout(function(){ $('.js-confirm-save').click(); },500);
        <?php } ?>

});
</script>
<?= createSiteEnd(); ?>
