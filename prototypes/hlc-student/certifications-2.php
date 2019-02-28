<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My Certifications';
$patterns['header']['mainNavActive'] = 'profile';
$patterns['focus']['title'] = 'My Certifications';

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
                                'id' => 'tab-1',
                                'label' => 'My Certifications',
                            ),
                            array(

                                'id' => 'tab-2',
                                'label' => 'Missing Data?',
                            ),
                        ),
                    );
                    echo createFocusNav($focusNav);

                ?>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab-1">
                        <section class="section">
                            <p class="lead">Manage your certification information to assure accurate documentation and recognition of professional credentials.</p>
                        </section>

                        <section class="section">
                            <?php

                            $content = '
                                <section class="section">
                                    <h5>Certifying Body</h5>
                                    <p>American Board of Wound Management (ABWM)</p>
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
                                'title' => 'CWCA - Certified Wound Care Associate',
                                'meta' => array(
                                    array(
                                        'label' => 'Country:',
                                        'value' => 'United States',
                                    ),
                                    array(
                                        'label' => 'State:',
                                        'value' => 'TN',
                                    ),
                                    array(
                                        'label' => 'License:',
                                        'value' => '123456789011112',
                                    ),
                                    array(
                                        'label' => 'Expires: ',
                                        'value' => 'Jan 1, 2015',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-certification-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
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
                                        'label' => 'Country:',
                                        'value' => 'United States',
                                    ),
                                    array(
                                        'label' => 'License:',
                                        'value' => '123456789011112',
                                    ),
                                    array(
                                        'label' => 'Expires: ',
                                        'value' => 'Jan 1, 2015',
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-certification-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                                ),
                                'nested' => array(
                                    'hide' => array($content),
                                )
                            );
                            echo createSlat($slat);

                            echo createSlat($slat);

                            echo createSlat($slat);

                            echo createSlat($slat);


                            ?>
                        </section>
                         <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'position' => 'left',
                                    'html' => '<a href="#modal-certification-add" class="btn btn-success" data-toggle="modal">Add Certification</a>',
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
                    </div>
                    <div class="tab-pane fade" id="tab-2">
                        <section class="section">
                        <h2>Linking Accounts</h2>
                        <p>
                            Your organization has not yet given permission to link your ePortfolio to this account. Check back soon.
                        </p>
                        </section>

                    </div>
                </div>





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

<!-- Modal -->
<div id="modal-certification-add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-certification-add-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="modal-certification-add-label" class="modal-title">Add Certification</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Certification</label>
                    <div class="js-certification-list">
                        <select class="form-control" data-placeholder="Choose a Certificate">
                            <option></option>
                            <?php $i = 1; while ( $i <= 600) { ?>
                            <option data-cb="Certifying Body <?= $i ?>" value="Certification <?= $i ?>">Certification <?= $i ?></option>
                            <?php $i++; } ?>
                        </select>
                    </div>
                    <div class="js-certification-selection" style="display:none">
                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-modal')),
                            ),
                            'title' => 'Certification Name',
                            'meta' => array(
                                array(
                                    'label' => 'Certifying Body:',
                                    'value' => 'Certifying Body',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Manage <i class="fa fa-fw fa-pencil visible-xs"></i>',
                                'link' => '#',
                            )
                        );
                        echo createSlat($slat);

                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Country</label>
                    <select class="form-control">
                        <option>These are the options for Country</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Certification Period</label>
                            <input type="text" class="form-control" value="2 Years" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">System Managed</label>
                            <div>
                                <label class="radio-inline"><input type="radio" name="radio" value="yes" disabled checked> Yes</label>
                                <label class="radio-inline"><input type="radio" name="radio" value="no" disabled> No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Certification Number <small>Optional</small></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-certification-edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-certification-edit-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="modal-certification-edit-label" class="modal-title">Manage Certification</h4>
            </div>
            <div class="modal-body">
                <!-- <div class="form-group">
                    <label class="control-label">Certifying Body</label>
                    <select class="form-control">

                        <option>These are the options for Certifying Body</option>
                    </select>
                </div> -->
                <div class="form-group">
                    <label class="control-label">Certification</label>
                    <div class="js-certification-list" style="display:none">
                        <select class="form-control" data-placeholder="Choose a Certificate">
                            <option></option>
                            <?php $i = 1; while ( $i <= 600) { ?>
                            <option data-cb="Certifying Body <?= $i ?>" value="Certification <?= $i ?>"<?= ($i===12)?' selected':'';?>>Certification <?= $i ?></option>
                            <?php $i++; } ?>
                        </select>
                    </div>
                    <div class="js-certification-selection">
                        <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-modal')),
                            ),
                            'title' => 'Certification Name',
                            'meta' => array(
                                array(
                                    'label' => 'Certifying Body:',
                                    'value' => 'Certifying Body',
                                )
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Manage <i class="fa fa-fw fa-pencil visible-xs"></i>',
                                'link' => '#',
                            )
                        );
                        echo createSlat($slat);

                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Country</label>
                    <select class="form-control">
                        <option>These are the options for Country</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Certification Period</label>
                            <input type="text" class="form-control" value="2 Years" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">System Managed</label>
                            <div>
                                <label class="radio-inline"><input type="radio" name="radio" value="yes" disabled checked> Yes</label>
                                <label class="radio-inline"><input type="radio" name="radio" value="no" disabled> No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Certification Number <small>Optional</small></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Expiration Date <small>Optional</small></label>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>
<?= createSiteScripts(); ?>
    <script>
        $(function(){

            // TEMPLATE FOR THE SELECT2 RESULTS
            function formatCertification(option) {
                var cb = $(option.element).data('cb');
                if (!option.id) return option.text; // optgroup
                return '<div class="slat slat-select2"><div class="title">' + option.text + '</div><ul class="meta"><li><span class="meta-label">Certifiying Body:</span><span class="meta-value">' + cb + '</span></li></ul></div>';
            }

            // INITIALIZE SELECT2
            $('.js-certification-list select').select2({
                // minimumInputLength: 1,
                formatResult: formatCertification,
                escapeMarkup: function(m) { return m; },
                dropdownCssClass: 'select2-slats'
            });

            // WHEN VALUE CHANGES, SWITCH TO SLAT
            $('.js-certification-list').on('change select2-close', 'select', function(){
                var $list = $(this).closest('.js-certification-list'),
                    $selection = $list.siblings('.js-certification-selection');

                if ( $list.find('option:selected').val() !== '' ) {
                    $selection.find('.title').text( $list.find('option:selected').val() );
                    $selection.find('.meta-value').text( $list.find('option:selected').attr('data-cb') );
                    $selection.show();
                    $list.hide();
                }
            });

            // SWITCH FROM SLAT TO SELECT2
            $('.js-certification-selection').on('click', '.btn', function(e){
                var $selection = $(this).closest('.js-certification-selection'),
                    $list = $selection.siblings('.js-certification-list');

                e.preventDefault();
                $selection.hide();
                $list.show().find('select').select2('open');
            });

            // RESET SLAT AND SELECT2 FOR ADDING NEW CERTIFICATIONS
            $('#modal-certification-add').on('show.bs.modal',function(){
                var $modal = $(this);
                $modal.find('.js-certification-list').show().find('select').select2("val", "");
                $modal.find('.js-certification-selection').hide();
            });

        });

    </script>
<?= createSiteEnd(); ?>
