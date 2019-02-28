<?php

include "includes/helpers/helpers.php";

$patterns['footer']['classes'] = array('site-footer-min');

$patterns['start']['title'] = 'Feedback - RN: Emergency Skills Self-Assessment';
$patterns['header']['classes'] = array('site-header-min');




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

            <div class="col-md-9"  style="border-right: 1px solid #ddd;"">

                <h1>Your assessment was received.</h1>
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


            </div><!-- /column -->
            <div class="col-md-3 hidden-sm hidden-xs">
                <section class="section section-progress ">
                    <div class="text-center">
                        <h3>Score</h3>
                      <div class="student-assessment-score text-center">
                      75%

                  </div>
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
    $(".btn-submit").click(function(e) {
        e.preventDefault();
        $(".question input").each(function(){
            if (!$(this).is(':checked')) {
                $(this).closest(".label-warning").show();
                $(this).closest(".question").addClass("error");
            }
        });
    });


    var elementPosition = $('.section-progress:visible').offset();

    //scroll to chosen filter
    $(window).scroll(function() {

        var elementWidth = $('.section-progress:visible').parent().width();

        if ($(window).scrollTop() > elementPosition.top) {
            $('.section-progress:visible').css({'position': 'fixed', 'top': '0', 'width' : elementWidth,  'margin-top': '0', 'z-index': '5'});
            $('form').css({'margin-top': '145px', 'display':'block'});
            $('.stickybar').css('padding-top', '90px');
        } else {
            $('.section-progress:visible').css({'position': 'static', 'width' : 'auto'});
            $('form').css({'margin-top': 'auto', 'display':'inline'});

        }

        $(window).resize();

    });

</script>
<?= createSiteEnd(); ?>
