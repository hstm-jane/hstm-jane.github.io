<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'What is Portable Portfolio?';

?>
<?= createSiteStart($patterns['start']); ?>


<body>

<div class="layout layout-wizard" id="wizard-content">
    <div class="container">
        <section class="section section-main section-box">

            <section class="section">
                <h3>What is my Portable Portfolio?</h3>

                <p>Your HealthStream ePortfolio provides you with a central location to track and maintain all records associated with your career. Your ePortfolio will travel with you, eliminating the need for duplicate documentation. As you join a company, it can be shared with your employer which highlights your accomplishments such as certifications you've already earned.</p>
            </section>

            <section class="section" id="data-message">
                <h3>Why is my data not displayed?</h3>

                <p>Once you've linked your ePortfolio to an account, most of the records you create are shared. However, if the record was imported or created by an administrator, then the record may not be shared.</p>
            </section>

        </section>
    </div><!-- /container -->
</div> <!-- /layout -->

<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>
