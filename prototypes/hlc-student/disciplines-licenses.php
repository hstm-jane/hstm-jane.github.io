<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My Licenses';
$patterns['header']['mainNavActive'] = 'profile';
$patterns['focus']['title'] = 'My Licenses';

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
                        <p class="lead">Manage your discipline and license information to assure continuing education credit is appropriately awarded for CE courses.</p>
                    </section>

                    <section class="section">
                        <?php

                        $content = '
                            <section class="section">
                                <h5>State Certification Number</h5>
                                <p>1234567890</p>
                            </section>
                            <section class="section">
                                <h5>National Expiration Date</h5>
                                <p>Feb 7, 2014</p>
                            </section>
                        ';
                        $slat = array(
                            'title' => 'AEMT',
                            'meta' => array(
                                array(
                                    'label' => 'State:',
                                    'value' => 'MI',
                                ),
                                array(
                                    'label' => 'Country:',
                                    'value' => 'United States',
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-discipline-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                            ),
                            'nested' => array(
                                'hide' => array($content),
                            )
                        );
                        echo createSlat($slat);

                        $content = '
                            <section class="section">
                                <h5>Certifying Body</h5>
                                <p>National Association of Alcoholism and Drug Abuse Counselors Certification Commission (NAADAC)</p>
                            </section>
                            <section class="section">
                                <h5>Updated</h5>
                                <p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
                            </section>
                            <section class="section">
                                <h5>System Managed</h5>
                                <p>No</p>
                            </section>
                        ';
                        $slat = array(
                            'title' => 'NCAC ll - National Certified Addiction Counsler, Level ll',
                            'meta' => array(
                                array(
                                    'label' => 'State:',
                                    'value' => 'MI',
                                ),
                                array(
                                    'label' => 'Country:',
                                    'value' => 'United States',
                                ),
                                array(
                                    'label' => 'State License:',
                                    'value' => '123456789011112',
                                ),
                                array(
                                    'label' => 'Expires:',
                                    'value' => 'Jan. 1, 2015',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                )
                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-discipline-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                            ),
                            'nested' => array(
                                'hide' => array($content),
                            )
                        );
                        echo createSlat($slat);

                        ?>
                    </section>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'position' => 'left',
                                    'html' => '<a href="#modal-discipline-add" class="btn btn-success" data-toggle="modal">Add License</a>',
                                ),
                                array(
                                    'position' => 'right',
                                    'classes' => array('hidden-xs'),
                                    'html' => '
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-10 of 15 <i class="fa fa-caret-up"></i></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="active"><a href="#">10 per page</a></li>
                                                <li><a href="#">50 per page</a></li>
                                                <li><a href="#">Show all</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    ',
                                ),
                                array(
                                    'position' => 'right',
                                    'classes' => array('visible-xs'),
                                    'html' => '
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    ',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>

                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php include_sidebar(); ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->


<?php
include ('includes/modals/_modal-discipline-add.php');
include ('includes/modals/_modal-discipline-manage.php');
?>

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
$(function(){

    $('#add-discipline').on('change',function(){
        var d = $(this).val();
        if ( d === 'emt' ) {
            $('.discipline-fields').hide();
            $('#discipline-fields-emt').show();
        }
        else if ( d === 'pharmacist' ) {
            $('.discipline-fields').hide();
            $('#discipline-fields-pharmacist').show();
        }
        else {
            $('.discipline-fields').hide();
        }
    });
    $('.discipline-fields').hide();


    $('.input-group.date').datepicker({
        todayBtn: "linked",
        autoclose: true
    }).css('position','relative');

});
</script>
<?= createSiteEnd(); ?>
