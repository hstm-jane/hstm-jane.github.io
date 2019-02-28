<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = date('Y').' Performance Appraisal';
$patterns['focus']['title'] = date('Y').' Performance Appraisal';
$patterns['focus']['icon'] = '<div class="fph-cell fph-cell-icon"><div class="fph-icon" style="overflow:hidden;"><img src="https://secure.gravatar.com/avatar/522a2de34a1aac9b3fb6ca2f9b3698d7?s=100" width="100%" height="100%"></div><div class="fph-icon-label"><span>Assessment</span></div></div>';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Employee:',
        'value' => 'Crane, Davy L.',
    ),
    array(
        'label' => 'Rater:',
        'value' => 'Juniper, Stephanie P.',
    ),
    array(
        'label' => 'State:',
        'value' => 'Sign Off',
    ),
    array(
        'label' => 'Due:',
        'value' => date('M j, Y'),
    ),
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout layout-assessment">
    <div class="container">
        <section class="section section-main section-box">
            <section class="section page-header">
                <h2>Assessment Sign Off</h2>
                <div class="form-group">
                    <ul class="list-unstyled">
                        <li class="radio"><label type="checkbox" style="font-weight:400"><input type="radio" name="signoff-type" value="together"> <strong>Together:</strong> all parties are available to sign off together</label></li>
                        <li class="radio"><label type="checkbox" style="font-weight:400"><input type="radio" name="signoff-type" value="remote-1" checked> <strong>Remote with Employee Sign Off:</strong> all parties are not available to sign off together</label></li>
                        <li class="radio"><label type="checkbox" style="font-weight:400"><input type="radio" name="signoff-type" value="remote-2"> <strong>Remote without Employee Sign Off:</strong> manager will perform all duties</label></li>
                    </ul>
                </div>
            </section>
            <div class="tab-content">
                <div class="tab-pane signoff-type" id="signoff-type-together">
                    <form class="validate">
                        <div class="row">
                            <div class="col-md-6">
                                <section class="section">
                                    <h3>Rater</h3>
                                    <div class="form-group">
                                        <label class="control-label">User ID</label>
                                        <input type="text" class="form-control">
                                        <span class="help-block">Required</span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <input type="text" class="form-control">
                                        <span class="help-block">Required</span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Comments <small>Optional</small></label>
                                        <textarea class="form-control"></textarea>
                                        <span class="help-block">Required</span>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="alert alert-info">
                                    <h4>REQUIRED: Employee or Witness Sign Off</h4>
                                    <p>Either the Employee's or a Witness's user ID and password are required to complete the Assessment sign off. If a Witness signs-off, the Witness will be required to document Comments to indicate the reason for the Witness sign off and any other important information.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <section class="section">
                                    <div class="form-group">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default active">
                                                <input type="radio" name="participant-type" value="employee" checked> Employee
                                            </label>
                                            <label class="btn btn-default">
                                                <input type="radio" name="participant-type" value="witness"> Witness
                                            </label>
                                        </div>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane participant-type active" id="participant-type-employee">
                                            <h3>Employee</h3>
                                            <div class="form-group">
                                                <label class="control-label">User ID:</label>
                                                <input type="text" class="form-control">
                                                <span class="help-block">Required</span>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Password</label>
                                                <input type="text" class="form-control">
                                                <span class="help-block">Required</span>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Comments <small>Optional</small></label>
                                                <textarea class="form-control"></textarea>
                                                <span class="help-block">Required</span>
                                            </div>
                                        </div>

                                        <div class="tab-pane participant-type" id="participant-type-witness">
                                            <h3>Witness</h3>
                                            <div class="form-group">
                                                <label class="control-label">User ID:</label>
                                                <input type="text" class="form-control">
                                                <span class="help-block">Required</span>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Password</label>
                                                <input type="text" class="form-control">
                                                <span class="help-block">Required</span>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Comments</label>
                                                <textarea class="form-control"></textarea>
                                                <span class="help-block">Required</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <a href="#" class="btn btn-success">Sign Off</a>
                                        <a href="#" class="btn btn-default">Sign Off and Print</a>
                                    </div>
                                </section>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane signoff-type active" id="signoff-type-remote-1">
                    <div class="alert alert-info">
                        <p>Please click Continue Sign Off below to allow the employee to sign off on this Assessment.</p>
                    </div>
                    <div class="form-actions">
                        <a href="#" class="btn btn-success">Continue Sign Off</a>
                    </div>
                </div>
                <div class="tab-pane signoff-type" id="signoff-type-remote-2">
                    <form class="validate">
                        <div class="alert alert-info">
                            <p>Please click Sign Off below to complete your responsibilities for this Assessment.</p>
                            <p>When you click Sign Off below, you will no longer be able to make changes to this Assessment.</p>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Comments</label>
                            <textarea class="form-control"></textarea>
                            <span class="help-block">Required</span>
                        </div>
                        <div class="form-actions">
                            <a href="#" class="btn btn-success">Sign Off</a>
                            <a href="#" class="btn btn-default">Sign Off and Print</a>
                        </div>
                    </form>
                </div>
            </div>
        </section><!-- /section-main -->
    </div><!-- /container -->
</div><!-- /layout -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $('input[name="signoff-type"]').on('change',function(){
            var selected = $('input[name="signoff-type"]:checked').val();
            $('.signoff-type').removeClass('active');
            $('#signoff-type-' + selected).addClass('active');
        });
        $('input[name="participant-type"]').on('change',function(){
            var selected = $('input[name="participant-type"]:checked').val();
            $('.participant-type').removeClass('active');
            $('#participant-type-' + selected).addClass('active');
        });
    });
</script>
<?= createSiteEnd(); ?>