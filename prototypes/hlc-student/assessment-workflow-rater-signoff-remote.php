<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Performance Appraisal - Employee Workflow';
$patterns['header']['userName'] = 'Davy L. Crane';
$patterns['header']['userImage'] = '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/holdenweb/128.jpg">';
$patterns['focus']['title'] = 'Performance Appraisal - Rater Workflow';
$patterns['focus']['icon'] = '<div class="fph-cell fph-cell-icon"><div class="fph-icon" style="overflow:hidden;"><img src="./content/images/avatar.jpg" width="100%" height="100%"></div><div class="fph-icon-label"><span>Employee Assessment</span></div></div>';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Employee:',
        'value' => 'Juniper, Stephanie P.',
    ),
    array(
        'label' => 'Rater:',
        'value' => 'Crane, Davy L.',
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
            </section>
            <section class="section">
                <form class="validate">
                    <div class="alert alert-info">
                        <p>Please click Sign Off below to complete your responsibilities for this Assessment.</p>
                        <p>When you click Sign Off below, you will no longer be able to make changes to this Assessment.</p>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Employee's Comments</label>
                        <textarea class="form-control" disabled>I agree with the rating given to me by my supervisor.</textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Rater's Comments</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-actions">
                        <a href="#" class="btn btn-success js-signoff">Sign Off</a>
                        <a href="#" class="btn btn-default">Sign Off and Print</a>
                    </div>
                </form>
            </section>
        </section><!-- /section-main -->
    </div><!-- /container -->
</div><!-- /layout -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $('.js-signoff').click(function(e){
            var growl = {
                growlType: 'success',
                growlTitle: 'Assessment Completed',
                growlText: encodeURIComponent('<dl class="gritter-class"><dd><?= $patterns['focus']['title']; ?></dd></dl>'),
                growlSticky: 'false'
            }
            e.preventDefault();
            window.location.href = '/?' + $.param(growl);
        });
    });
</script>
<?= createSiteEnd(); ?>