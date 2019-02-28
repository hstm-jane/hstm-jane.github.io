<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My Completions';
$patterns['header']['mainNavActive'] = 'completed';
$patterns['focus']['title'] = 'My Completions';
$patterns['focus']['meta_secondary'] = array(
array(
'label' => 'Total Completions:',
'value' => '35',
),
array(
'label' => 'Est. Learning Time:',
'value' => '8h 47m',
),
);


$cetrackerlogo = '<svg viewBox="0 0 149 25" xmlns="http://www.w3.org/2000/svg">
  <path d="M23.171 22.129c-.967.506-1.956.91-2.968 1.214-1.012.304-2.033.52-3.062.65a25.62 25.62 0 0 1-3.196.194c-2.035 0-3.859-.282-5.473-.844-1.613-.562-3.013-1.391-4.2-2.487a10.537 10.537 0 0 1-2.664-3.846c-.59-1.467-.885-3.078-.885-4.832 0-2.013.348-3.775 1.045-5.287.697-1.513 1.673-2.77 2.927-3.77 1.253-1 2.681-1.74 4.283-2.218a17.641 17.641 0 0 1 5.069-.716c2.653 0 5.66.59 9.023 1.77v6.207a24.888 24.888 0 0 0-3.432-1.796c-1.13-.478-2.46-.717-3.99-.717-1.36 0-2.63.27-3.81.81-1.181.54-2.132 1.31-2.851 2.31-.72 1-1.08 2.17-1.08 3.508 0 1.18.315 2.263.945 3.247.63.984 1.504 1.765 2.623 2.344 1.118.58 2.38.869 3.786.869 1.136 0 2.21-.138 3.221-.413 1.012-.276 1.864-.582 2.555-.92a22.52 22.52 0 0 0 2.134-1.197v5.92zm22.364 1.754H27.91V.507h17.338v4.689H34.96V9.48h9.816v4.705H34.96v4.992h10.575v4.706zM66.971.32V1.84h-8.837v22.044h-1.839V1.839h-8.837V.321H66.97zm9.58 9.58l-.961 1.552c-1.293-1.18-2.333-1.771-3.12-1.771-1.552 0-3.21 1.484-4.976 4.453v9.748h-1.653V8.366h1.653v4.082h.068c1.855-2.923 3.665-4.385 5.43-4.385 1.012 0 2.199.613 3.56 1.838zm14.016 11.283v1.383c-1.428 1.08-2.474 1.62-3.137 1.62-.383 0-.647-.127-.793-.38-.146-.253-.253-.767-.32-1.543-1.63 1.282-3.25 1.923-4.858 1.923-1.17 0-2.159-.383-2.968-1.147-.81-.765-1.215-1.693-1.215-2.783 0-1.687.782-3.016 2.345-3.989 1.563-.973 3.795-1.532 6.695-1.678v-1.973c0-2.114-1.146-3.171-3.44-3.171-1.462 0-3.042.658-4.74 1.973V9.716c1.755-1.102 3.424-1.653 5.01-1.653 1.405 0 2.563.346 3.474 1.037.91.692 1.366 1.695 1.366 3.01v9.665c0 .528.124.792.371.792.315 0 1.052-.46 2.21-1.383zm-4.25-.37v-4.841c-2.126-.079-3.888.295-5.288 1.121-1.4.827-2.1 1.881-2.1 3.163 0 .72.293 1.327.877 1.821.585.495 1.316.742 2.193.742 1.417 0 2.856-.669 4.317-2.007zm17.54-11.992v1.838c-1.484-.652-2.828-.978-4.031-.978-1.732 0-3.14.601-4.225 1.805-1.085 1.203-1.627 2.766-1.627 4.688 0 1.957.542 3.511 1.627 4.664 1.085 1.152 2.538 1.728 4.36 1.728 1.327 0 2.72-.298 4.183-.893v1.72c-1.552.528-2.991.793-4.318.793-2.271 0-4.107-.72-5.507-2.16-1.4-1.439-2.1-3.327-2.1-5.666 0-2.44.706-4.433 2.117-5.98 1.411-1.545 3.213-2.318 5.406-2.318 1.203 0 2.574.253 4.115.759zm5.009-8.5v23.56h-1.653V.323h1.653zm10.98 8.044l-8.484 7.37 9.8 8.147h-2.278l-9.782-8.146 8.568-7.37h2.176zm15.095 7.185h-12.228c-.034.27-.05.54-.05.81 0 1.731.618 3.199 1.854 4.402 1.237 1.203 2.699 1.804 4.386 1.804 1.967 0 3.89-.77 5.768-2.31v1.872c-1.777 1.372-3.767 2.058-5.97 2.058-2.238 0-4.088-.776-5.55-2.328-1.461-1.552-2.192-3.525-2.192-5.92 0-2.271.674-4.152 2.024-5.641 1.349-1.49 3.047-2.235 5.093-2.235 1.923 0 3.548.672 4.874 2.015 1.327 1.344 1.99 3.168 1.99 5.473zm-12.009-1.332h10.052c-.585-3.025-2.22-4.537-4.908-4.537-1.27 0-2.37.396-3.297 1.189-.928.793-1.543 1.909-1.847 3.348zM149.007 9.9l-.962 1.552c-1.293-1.18-2.333-1.771-3.12-1.771-1.552 0-3.21 1.484-4.975 4.453v9.748h-1.653V8.366h1.653v4.082h.067c1.855-2.923 3.666-4.385 5.43-4.385 1.013 0 2.2.613 3.56 1.838z" fill="currentColor" fill-rule="evenodd"/>
</svg>';


function license ($name,$target,$credits) {
$html = '
<div class="cet__license">
<div class="cet__license-info">
<div class="cet__license-state-bg" data-state="TN"></div>
<div class="cet__license-name">'.$name.'</div>
<div class="cet__license-meta">
<span>State License Number:</span>
<span>90832180932108932180931280912309</span>
</div>
<div class="cet__license-meta">
<span>State/Province:</span>
<span>TN</span>
</div>
<div class="cet__license-meta">
<span>Issued:</span>
<span>7/30/2017</span>
</div>
<div class="cet__license-meta">
<span>Expires:</span>
<span>7/30/2019</span>
</div>
</div>
<div class="cet__license-ce">
<div class="cet__license-ce-target">
<div>
<div class="cet__license-ce-label">CE Target</div>
<div class="cet__license-ce-value">'.$target.'</div>
</div>
</div>
<div class="cet__license-ce-linked">
<div>
<div class="cet__license-ce-label">CE Linked</div>
<div class="cet__license-ce-value">'.$credits.'</div>
</div>
</div>
</div>
</div>
';
return $html;
}



?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout">
    <div class="container">
        <section class="section section-main section-box">
            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm"></div>
                <div class="col-md-9">
                    <section class="section section-results">

                        <!-- No HealthStream ID – no access, visual cue to create it (maybe an unlock button) -->
                        <section class="section">
                            <h3>No HealthStream ID</h3>
                            <div class="cet__widget is-locked">
                                <div class="cet__widget-logo">
                                    <?php echo $cetrackerlogo ?>
                                </div>
                                <div class="cet__widget-icon">
                                    <i class="fa fa-lock"></i>
                                </div>
                                <div class="cet__widget-body">
                                    <div class="cet__widget-message">
                                        Create your HealthStream ID <span>to unlock CE Tracker</span>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-default">Get Started</a>
                                </div>
                            </div>
                        </section>

                        <!-- Unconfirmed HealthStream ID – no access, visual cue to confirm (requires user to check personal email, click link to confirm) -->
                        <section class="section">
                            <h3>Unconfirmed HealthStream ID</h3>
                            <div class="cet__widget is-locked">
                                <div class="cet__widget-logo">
                                    <?php echo $cetrackerlogo ?>
                                </div>
                                <div class="cet__widget-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="cet__widget-body">
                                    <div class="cet__widget-message">
                                        Confirm your HealthStream ID <span>to unlock CE Tracker</span>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-default">Resend Confirmation</a>
                                </div>
                            </div>
                        </section>


                        <!-- Confirmed HealthStream ID – full access to CETracker - w/o Licenses -->
                        <section class="section">
                            <h3>Confirmed HealthStream ID - w/o Licenses</h3>
                            <div class="cet__widget is-unlocked">
                                <div class="cet__widget-header">
                                    <div class="cet__widget-logo"><?php echo $cetrackerlogo ?></div>
                                    <a href="ce-tracker.php" class="cet__widget-action">Open CE Tracker <i class="fa fa-chevron-right"></i></a>
                                </div>
                                <div class="cet__widget-body">
                                    <div class="cet__widget-message">
                                        Manage your licenses and CE <span>easily with CE Tracker</span>
                                    </div>
                                    <a href="ce-tracker.php" class="btn btn-focus">Get Started</a>
                                </div>
                            </div>
                        </section>

                        <!-- Confirmed HealthStream ID – full access to CETracker - w/ Licenses -->
                        <section class="section">
                            <h3>Confirmed HealthStream ID - w/ Licenses</h3>
                            <div class="cet__widget is-unlocked">
                                <div class="cet__widget-header">
                                    <div class="cet__widget-logo"><?php echo $cetrackerlogo ?></div>
                                    <a href="ce-tracker.php" class="cet__widget-action">Open CE Tracker <i class="fa fa-chevron-right"></i></a>
                                </div>
                                <div class="cet__widget-body">
                                    <div id="cetracker" class="carousel slide">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <?php echo license('License 1',15,12); ?>
                                            </div>
                                            <div class="item">
                                                <?php echo license('License 2',12,3); ?>
                                            </div>
                                            <div class="item">
                                                <?php echo license('License 3',0,0); ?>
                                            </div>
                                        </div>
                                        <ol class="carousel-indicators">
                                            <li data-target="#cetracker" data-slide-to="0" class="active"></li>
                                            <li data-target="#cetracker" data-slide-to="1"></li>
                                            <li data-target="#cetracker" data-slide-to="2"></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </section>
                    <!-- /section-main -->
                </div>
                <!-- /column -->
            </div>
            <!-- /row -->
        </section>
    </div>
    <!-- /container -->
</div>
<!-- /layout -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>
