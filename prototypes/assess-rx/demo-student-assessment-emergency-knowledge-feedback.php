<?php

include "includes/helpers/helpers.php";
$patterns['start']['title'] = 'RN: Emergency Assessment';
$patterns['focus']['title'] = 'RN: Emergency Assessment';
$patterns['header']['classes'] = array('site-header-min');
$patterns['header']['logoLarge'] = './content/images/logo-assess-large.png';
$patterns['footer']['classes'] = array('site-footer-min');

?>
<?= createSiteStart($patterns['start']); ?>
<div class="no-focus">
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
</div>
<style>

.student-assessment-score {
    font-size:40px;
}

.list-links li{
border-left-color: #666;
}

.list-links{
    margin-top:20px;
}

</style>
<div class="layout layout-min">

    <div class="container">
       <section class="section section-main section-box" data-equalize="layout-columns">
        <div class="row">
            <div class="col-md-9" style="border-right: 1px solid #ddd;"">

                <h2>Your assessment was received.</h2>
                <hr />

                <section class="section">
                    <h3>Feedback</h3>
                    <h4>Based on the questions answered incorrectly, we recommend that you review the following topics: </h4>
                    <ul class="list-links">
                        <li>The most likely diagnosis for the patient who is experiencing symptoms of flank pain with hematuria</li>
                        <li>The additional disease process for which a patient with a history of intermittent claudication of the
                        lower extremities is at high risk</li>
                        <li>Diagnoses that are surgical emergencies</li>
                        <li>The appropriate dose of acetaminophen for pediatric patients</li>
                        <li>The most common symptom of appendicitis</li>
                    </ul>
                </section>

                <section class="section">
                    <div class="form-group">
                        <a href="/demo-student.php" class="btn btn-success">Return</a>
                    </div>
                </section>

            </div><!-- /column -->
            <div class="col-md-3 hidden-sm hidden-xs">
                <section class="section section-progress">
                    <div class="text-center">
                        <h3>Score</h3>
                        <div class="student-assessment-score">75%</div>
                        <small >(30 of 40 questions answered correctly)</small>
                    </div>
                </section>
            </div>

        </section><!-- /section-main -->

    </div><!-- /row -->
</div><!-- /container -->
</div><!-- /layout -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $('.branding a').click(function(e){
            e.preventDefault();
            window.location.href="/demo-start.php";
          });
    });
</script>
<?= createSiteEnd(); ?>