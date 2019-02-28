<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Charge Nurse';
$patterns['header']['mainNavActive'] = 'profile';
$patterns['focus']['title'] = 'Charge Nurse';
$patterns['focus']['meta_primary'] = array(
    array(
        'label' => 'From:',
        'value' => '<a href="job-descriptions.php" class="meta-value">My Job Descriptions</a>',
    ),
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Institution:',
        'value' => 'Jupiter Healthcare',
    ),
);
$patterns['focus']['action'] = array(
    'text' => 'Print',
    'link' => 'http://hstm-reports.sturdy.io/examples/job-description.html#',
);
$patterns['focus']['supporting'] = ' ';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <section class="section section-main section-box" data-equalize="layout-columns">
                    <section class="section section-job" id="jd1">
                        <section class="section">
                           <p class="lead">Supervises daily staff activities for an assigned area or function. <br><br>Reports to:<br><br> FLSA: Non-exempt <br><br>Grade:<br><br> EEO: □ 01 Officials and Managers X 02 Professionals □ 03 Technicians □ 04 Sales Workers □ 05 Administrative Support Workers □ 06 Craft Workers □ 07 Operatives □ 08 Laborers and Helpers □ 09 Service Workers</p>
                        </section>
                        <section class="section">
                            <h2>Job Requirements</h2>

                            <section class="section">
                                <h3>Minimum Education</h3>
                                <ul>
                                    <li>Graduate of an accredited school of nursing.
                                    <li>Bachelor’s degree in nursing (BSN) preferred.</li>
                                </ul>
                            </section>

                            <section class="section">
                                <h3>Minimum Work Experience</h3>
                                <ul>
                                    <li>Minimum 1 year post-graduate acute care hospital experience preferred.</li>
                                    <li>Experience preferred in appropriate clinical care areas.</li>
                                </ul>
                            </section>

                            <section class="section">
                                <h3>Required Skills</h3>
                                <ul>
                                    <li>Ability to function independently, and as part of a team.</li>
                                    <li>Empathy for the needs of patients.</li>
                                    <li>Effective oral and written communication skills.</li>
                                    <li>Ability to communicate through spoken and written English.</li>
                                    <li>Detail oriented, with ability to prioritize and multitask.</li>
                                    <li>Ability to apply sound judgment with clinical skills for optimal patient care.</li>
                                    <li>Demonstrates flexibility by accepting and supporting changes in work assignments as related to department andpatient needs.</li>
                                    <li>Strong interpersonal communication and customer service skills.</li>
                                    <li>Basic computer skills.</li>
                                    <li>Proficient in working with all ages and patient populations.</li>
                                    <li>Knowledge of appropriate equipment, policies, procedures, and strategies to promote effective patient outcomes.</li>
                                </ul>
                            </section>
                        </section>
                        <section class="section">
                            <h2>Functional Demands</h2>
                            <ul>
                                <li>Prolonged periods of standing and walking.</li>
                                <li>Lifting, pushing, pulling up to 40 pounds.</li>
                                <li>Transferring, repositioning patients.</li>
                                <li>Reaching, stooping, bending, kneeling, and crouching for patient care functions.</li>
                                <li>Ability to perform effectively in a stressful and fast-paced environment.</li>
                                <li>Ability to pass all required health and other screening tests.</li>
                            </ul>
                        </section>
                        <section class="section">
                            <h2>Organization Expectations</h2>
                            <ul>
                                <li>Provides a positive and professional representation of the organization.</li>
                                <li>Promotes culture of safety for patients and employees through proper identification, reporting, documentation, and prevention.</li>
                                <li>Maintains hospital standards for a clean and quiet patient environment to maintain a positive patient care experience.</li>
                                <li>Maintains competency and knowledge of current standards of practice, trends, and developments in related scope of job role or practice.</li>
                                <li>Adheres to infection-control policies and protocols, medication administration and storage procedures, and controlled substance regulations.</li>
                                <li>Participates in ongoing quality improvement activities.</li>
                                <li>Maintains compliance with organization’s policies, as well as established practices, protocols, and procedures of the position, department, and applicable professional standards.</li>
                                <li>Complies with organizational and regulatory policies for handling confidential patient information.</li>
                                <li>Demonstrates excellent customer service through his/her attitude and actions, consistent with the standards contained in the Vision, Mission, and Values of the organization.</li>
                                <li>Adheres to professional standards, hospital policies and procedures, federal, state, and local requirements, and TJC standards and/or standards from other accrediting bodies.</li>
                            </ul>
                        </section>
                        <section class="section">
                            <h2>Essential Functions</h2>
                            <ul>
                                <li>Receives a report from the previous shift of all patients and identifies special patient care needs. Adjusts patient assignments as necessary to meet special needs.</li>
                                <li>Makes patient rounds and notes problems for follow-up.</li>
                                <li>Assists staff nurses in their evaluation and assessment of patient needs.</li>
                                <li>Manages scheduling of patients' appointments.</li>
                                <li>Orders medications as prescribed.</li>
                                <li>Participates in staff conferences as appropriate.</li>
                                <li>Makes nursing assignments for the next day.</li>
                                <li>Assists in direct patient care as need is identified.</li>
                                <li>Performs other duties as assigned by the Nursing Coordinator.</li>
                            </ul>
                        </section>
                    </section>
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


<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>
