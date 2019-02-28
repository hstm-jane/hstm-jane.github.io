<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Checklist for Jane Doe';
$patterns['focus']['title'] = 'Checklist for Jane Doe';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-checklist',
    'type' => 'Checklist',
);
$patterns['focus']['meta_primary'] = array(
    array(
        'label' => 'From Course:',
        'value' => '<a href="course.php" class="meta-value">Checklist Course</a>',
        'attributes' => array(
            array('class','meta-hidden-xs'),
        )
    )
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Items:',
        'value' => '10',
    ),
    array(
        'label' => 'Due:',
        'value' => date('M j, Y'),
    ),
);
?>
<?php

    $taskDetails = '<div class="checklist-task-details">
                        <div class="checklist-methods">
                            <h5>Verification Method</h5>
                            <ul class="list-unstyled">
                                <li class="checkbox">
                                    <label><input type="checkbox" value="1"> Demonstration/Direct Observation/Documentation Audit</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox" value="2"> Review of Written or Visual Materials/Policy/Procedure Review</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox" value="3"> Skills Laboratory/Scenario-based Training/Controlled Simulation</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox" value="4"> Knowledge Assessment Test</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox" value="5"> Verbalization</label>
                                </li>
                                <li class="checkbox">
                                    <label><input type="checkbox" value="6"> Other</label>
                                </li>
                            </ul>
                        </div>
                        <div class="checklist-comments">
                            <div class="collapse-group collapse">
                                <h5>Comment</h5>
                                <textarea class="form-control"></textarea>
                            </div>
                            <a href="#" class="collapse-toggle" data-toggle-text="Add Comment|Remove Comment">Add Comment</a>
                        </div>
                    </div>';
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
                        <h2>Protocol for Administration of Blood Transfusions</h2>

                         <div class="panel-group panel-group-slats" role="tablist" id="panel-group-1" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab">
                                        <a role="button" data-toggle="collapse" data-parent="#panel-group-1" href="#panel-1" class="collapsed">
                                            Prefill Methods of Verification
                                            <div class="panel-heading-icon">
                                                <i class="fa fa-chevron-down panel-heading-icon-closed"></i>
                                                <i class="fa fa-chevron-up panel-heading-icon-open"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="panel-1" class="panel-collapse collapse" role="tabpanel">
                                        <div class="panel-body">
                                            <ul class="list-unstyled prefill-mov-items">
                                                <li class="checkbox">
                                                    <label><input type="checkbox" value="1"> Demonstration/Direct Observation/Documentation Audit</label>
                                                </li>
                                                <li class="checkbox">
                                                    <label><input type="checkbox" value="2"> Review of Written or Visual Materials/Policy/Procedure Review</label>
                                                </li>
                                                <li class="checkbox">
                                                    <label><input type="checkbox" value="3"> Skills Laboratory/Scenario-based Training/Controlled Simulation</label>
                                                </li>
                                                <li class="checkbox">
                                                    <label><input type="checkbox" value="4"> Knowledge Assessment Test</label>
                                                </li>
                                                <li class="checkbox">
                                                    <label><input type="checkbox" value="5"> Verbalization</label>
                                                </li>
                                                <li class="checkbox">
                                                    <label><input type="checkbox" value="6"> Other</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="checklist-item checklist-item-review">
                            <input type="hidden" name="checklist-item-1">
                            <div class="checklist-row">
                                <div class="checklist-col checklist-number"><span>1</span></div>
                                <div class="checklist-col checklist-description">
                                    <p>Make sure that a written order is in the patient's medical record. Confirm that the order and the medical record are labeled with the patient's first and last names and assigned identification number.</p>
                                    <?= $taskDetails  ?>
                                </div>
                                <div class="checklist-col checklist-actions checklist-actions-3btn">
                                    <button class="btn btn-sm btn-default checklist-btn-pass">Met</button>
                                    <button class="btn btn-sm btn-default checklist-btn-fail">Unmet</button>
                                    <button class="btn btn-sm btn-default checklist-btn-skip">N/A</button>
                                </div>
                            </div>
                        </div>
                        <div class="checklist-item checklist-item-review">
                            <input type="hidden" name="checklist-item-2">
                            <div class="checklist-row">
                                <div class="checklist-col checklist-number"><span>2</span></div>
                                <div class="checklist-col checklist-description">
                                    <p>Ensure that the indication for the transfusion is documented.</p>
                                    <?= $taskDetails  ?>

                                </div>
                                <div class="checklist-col checklist-actions checklist-actions-3btn">
                                    <button class="btn btn-sm btn-default checklist-btn-pass">Met</button>
                                    <button class="btn btn-sm btn-default checklist-btn-fail">Unmet</button>
                                    <button class="btn btn-sm btn-default checklist-btn-skip">N/A</button>
                                </div>
                            </div>
                        </div>
                        <div class="checklist-item checklist-item-review">
                            <input type="hidden" name="checklist-item-3">
                            <div class="checklist-row">
                                <div class="checklist-col checklist-number"><span>3</span></div>
                                <div class="checklist-col checklist-description">
                                    <p>Unless the transfusion is an emergency, confirm that the practitioner has obtained written informed consent before initiating transfusion therapy and that the consent is in the patient's medical record.</p>

                                    <?= $taskDetails  ?>

                                </div>
                                <div class="checklist-col checklist-actions checklist-actions-3btn">
                                    <button class="btn btn-sm btn-default checklist-btn-pass">Met</button>
                                    <button class="btn btn-sm btn-default checklist-btn-fail">Unmet</button>
                                    <button class="btn btn-sm btn-default checklist-btn-skip">N/A</button>
                                </div>
                            </div>
                        </div>
                        <div class="checklist-item checklist-item-review">
                            <input type="hidden" name="checklist-item-4">
                            <div class="checklist-row">
                                <div class="checklist-col checklist-number"><span>4</span></div>
                                <div class="checklist-col checklist-description">
                                    <p>Review the patient's medication regimen.</p>

                                    <?= $taskDetails  ?>

                                </div>
                                <div class="checklist-col checklist-actions">
                                    <button class="btn btn-sm btn-default checklist-btn-pass">Met</button>
                                    <button class="btn btn-sm btn-default checklist-btn-fail">Unmet</button>
                                </div>
                            </div>
                        </div>
                        <div class="checklist-item checklist-item-review">
                            <input type="hidden" name="checklist-item-5">
                            <div class="checklist-row">
                                <div class="checklist-col checklist-number"><span>5</span></div>
                                <div class="checklist-col checklist-description">
                                    <p>Ensure that a blood sample was obtained for compatibility testing; obtain a blood sample if necessary.</p>

                                    <?= $taskDetails  ?>

                                </div>
                                <div class="checklist-col checklist-actions checklist-actions-3btn">
                                    <button class="btn btn-sm btn-default checklist-btn-pass">Met</button>
                                    <button class="btn btn-sm btn-default checklist-btn-fail">Unmet</button>
                                    <button class="btn btn-sm btn-default checklist-btn-skip">N/A</button>
                                </div>
                            </div>
                        </div>
                        <div class="checklist-item checklist-item-review">
                            <input type="hidden" name="checklist-item-6">
                            <div class="checklist-row">
                                <div class="checklist-col checklist-number"><span>6</span></div>
                                <div class="checklist-col checklist-description">
                                    <p>Make sure the blood bank receives a request form that contains the patient's first and last names, an identification number that's unique to the patient, the prescribed blood component and amount ordered, and the name of the responsible practitioner.</p>

                                    <?= $taskDetails  ?>

                                </div>
                                <div class="checklist-col checklist-actions checklist-actions-3btn">
                                    <button class="btn btn-sm btn-default checklist-btn-pass">Met</button>
                                    <button class="btn btn-sm btn-default checklist-btn-fail">Unmet</button>
                                    <button class="btn btn-sm btn-default checklist-btn-skip">N/A</button>
                                </div>
                            </div>
                        </div>
                        <div class="checklist-item checklist-item-review">
                            <input type="hidden" name="checklist-item-7">
                            <div class="checklist-row">
                                <div class="checklist-col checklist-number"><span>7</span></div>
                                <div class="checklist-col checklist-description">
                                    <p>Gather the necessary equipment.</p>

                                    <?= $taskDetails  ?>

                                </div>
                                <div class="checklist-col checklist-actions checklist-actions-3btn">
                                    <button class="btn btn-sm btn-default checklist-btn-pass">Met</button>
                                    <button class="btn btn-sm btn-default checklist-btn-fail">Unmet</button>
                                    <button class="btn btn-sm btn-default checklist-btn-skip">N/A</button>
                                </div>
                            </div>
                        </div>
                        <div class="checklist-item checklist-item-review">
                            <input type="hidden" name="checklist-item-8">
                            <div class="checklist-row">
                                <div class="checklist-col checklist-number"><span>8</span></div>
                                <div class="checklist-col checklist-description">
                                    <p>Perform hand hygiene.</p>

                                    <?= $taskDetails  ?>

                                </div>
                                <div class="checklist-col checklist-actions">
                                    <button class="btn btn-sm btn-default checklist-btn-pass">Met</button>
                                    <button class="btn btn-sm btn-default checklist-btn-fail">Unmet</button>
                                </div>
                            </div>
                        </div>
                        <div class="checklist-item checklist-item-review">
                            <input type="hidden" name="checklist-item-9">
                            <div class="checklist-row">
                                <div class="checklist-col checklist-number"><span>9</span></div>
                                <div class="checklist-col checklist-description">
                                    <p>Confirm the patient's identity using at least two patient identifiers.</p>

                                    <?= $taskDetails  ?>

                                </div>
                                <div class="checklist-col checklist-actions checklist-actions-3btn">
                                    <button class="btn btn-sm btn-default checklist-btn-pass">Met</button>
                                    <button class="btn btn-sm btn-default checklist-btn-fail">Unmet</button>
                                    <button class="btn btn-sm btn-default checklist-btn-skip">N/A</button>
                                </div>
                            </div>
                        </div>
                        <div class="checklist-item checklist-item-review">
                            <input type="hidden" name="checklist-item-10">
                            <div class="checklist-row">
                                <div class="checklist-col checklist-number"><span>10</span></div>
                                <div class="checklist-col checklist-description">
                                    <p>Verify that the patient's religious beliefs don't prohibit blood transfusion.</p>

                                    <?= $taskDetails  ?>

                                </div>
                                <div class="checklist-col checklist-actions checklist-actions-3btn">
                                    <button class="btn btn-sm btn-default checklist-btn-pass">Met</button>
                                    <button class="btn btn-sm btn-default checklist-btn-fail">Unmet</button>
                                    <button class="btn btn-sm btn-default checklist-btn-skip">N/A</button>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="section">
                        <h2>Comments</h2>
                        <textarea class="form-control" style="height:120px;"></textarea>
                    </section>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'position' => 'left',
                                    'classes' => array('visible-xs'),
                                    'html' => '
                                        <div class="btn-group dropup">
                                            <a href="#" class="btn btn-success">Submit</a>
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-caret-up"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Save Progress</a></li>
                                                <li><a href="#" class="js-checklist-all-success">Mark All Yes</a></li>
                                                <li><a href="#">Print</a></li>
                                            </ul>
                                        </div>
                                        <a href="#" class="btn btn-default js-btn-back">Cancel</a>
                                    ',
                                ),
                                array(
                                    'position' => 'left',
                                    'classes' => array('hidden-xs'),
                                    'html' => '
                                        <a href="#" class="btn btn-success">Submit</a>
                                        <a href="#" class="btn btn-success">Save Progress</a>
                                        <a href="#" class="btn btn-success js-checklist-all-success">Mark All Yes</a>                                 <div class="btn-group dropup">
                                        </div>
                                        <a href="#" class="btn btn-success">Print</a>
                                        <a href="#" class="btn btn-default">Cancel</a>
                                    ',
                                ),
                                array(
                                    'position' => 'right',
                                    'classes' => array('hidden-xs'),
                                    'html' => '<a href="#" class="btn btn-danger" id="checklist-clear">Clear My Work</a>',
                                ),
                                array(
                                    'position' => 'right',
                                    'classes' => array('visible-xs'),
                                    'html' => '<a href="#" class="btn btn-danger" id="checklist-clear2">Clear</a>',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>

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
<script>
    $(function(){
        $('#checklist-clear, #checklist-clear2').click(function(e){
            e.preventDefault();
            HealthStream.utilities.interrupt({
                title: 'Clear My Work',
                text: 'Are you sure you want to remove all your ratings and comments from this checklist?',
                actions: [
                {
                    type: 'danger',
                    id: 'checklist-clear-confirm',
                    label: 'Yes, clear my work'
                },
                {
                    label: 'Cancel'
                },
                ]
            });
            $('#checklist-clear-confirm').click(function(){
                HealthStream.checklist.clearMine();
            });
        });
    });
</script>
<?= createSiteEnd(); ?>