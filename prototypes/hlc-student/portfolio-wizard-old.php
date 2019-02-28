<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'My Portfolio Wizard';
$patterns['header']['mainNavActive'] = 'profile';
$patterns['focus']['title'] = 'My Portfolio Wizard';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout layout-wizard">

    <div class="container">
        <section class="section section-main section-box">
            <nav class="nav-focus">
                <div class="nav-mobile visible-xs visible-sm">
                    <span><i class="fa fa-caret-down"></i><span class="focus-nav-title">Personal Information</span></span>
                    <a href="#nav-main" class="toggle"><i class="fa fa-bars"></i></a>
                </div>

                <ul class="nav">
                    <li class="li personal-information active" data-li="personal-information">
                        <a class="wizard-nav-link personal-information active" href="#" data-rel="personal-information">Personal Information</a>
                    </li>
                    <li class="li work-experience" data-li="work-experience">
                        <a class="wizard-nav-link work-experience" href="#" data-rel="work-experience">Work Experience</a>
                    </li>
                    <li class="li education" data-li="education">
                        <a class="wizard-nav-link education" href="#" data-rel="education">Education</a>
                    </li>
                    <li class="li licenses" data-li="licenses">
                        <a class="wizard-nav-link licenses" href="#" data-rel="licenses">Licenses</a>
                    </li>
                    <li class="li certifications" data-li="certifications">
                        <a class="wizard-nav-link certifications" href="#" data-rel="certifications">Certifications</a>
                    </li>
                    <li class="li resucitation-programs" data-li="resucitation-programs">
                        <a class="wizard-nav-link resucitation-programs" href="#" data-rel="resucitation-programs">Resucitation Programs</a>
                    </li>
                    <li class="li activities" data-li="activities">
                        <a class="wizard-nav-link activities" href="#" data-rel="activities">Activities</a>
                    </li>
                    <li class="li publications" data-li="publications">
                        <a class="wizard-nav-link publications" href="#" data-rel="publications">Publications</a>
                    </li>
                    <li class="li awards" data-li="awards">
                        <a class="wizard-nav-link awards" href="#" data-rel="awards">Awards &amp; Recognition</a>
                    </li>
                    <li class="li other" data-li="other">
                        <a class="wizard-nav-link other" href="#" data-rel="other">Other</a>
                    </li>
                </ul>
            </nav>
            <div class="row">

                <div class="col-md-3">
                    <section class="section wizard-nav" data-equalize="layout-columns">
                        <h2>Portfolio Status</h2>
                        <div class="progress">
                            <div class="progress-bar" style="width:40%">40%</div>
                        </div>
                        <p class="message-text">Completing your Portfolio ensures accurate awarding of CE credit and helps us make better recomendations.</p>

                        <hr>

                        <div class="wizard-progress-links nav-focus">
                            <ul class="list-links">
                                <li>
                                    <a class="wizard-nav-link personal-information active" href="#" data-rel="personal-information">Personal Information</a>
                                </li>
                                <li>
                                    <a class="wizard-nav-link work-experience" href="#" data-rel="work-experience">Work Experience</a>
                                </li>
                                <li>
                                    <a class="wizard-nav-link education" href="#" data-rel="education">Education</a>
                                </li>
                                <li>
                                    <a class="wizard-nav-link licenses" href="#" data-rel="licenses">Licenses</a>
                                </li>
                                <li>
                                    <a class="wizard-nav-link certifications" href="#" data-rel="certifications">Certifications</a>
                                </li>
                                <li>
                                    <a class="wizard-nav-link resucitation-programs" href="#" data-rel="resucitation-programs">Resucitation Programs</a>
                                </li>
                                <li>
                                    <a class="wizard-nav-link activities" href="#" data-rel="activities">Activities</a>
                                </li>
                                <li>
                                    <a class="wizard-nav-link publications" href="#" data-rel="publications">Publications</a>
                                </li>
                                <li>
                                    <a class="wizard-nav-link awards" href="#" data-rel="awards">Awards &amp; Recognition</a>
                                </li>
                                <li>
                                    <a class="wizard-nav-link other" href="#" data-rel="other">Other</a>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>

                <div class="col-md-9">
                    <section class="section wizard-container" data-equalize="layout-columns">

                    <!--<div id="result">sdsadsadsadsadsa</div>-->

                        <section class="section wizard-group active" id="personal-information">
                            <h2>Personal Information</h2>
                            <form>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">Country</label>
                                            <select id="inputCountry" class="form-control">
                                                <option>United States</option>
                                                <option>Canada</option>
                                                <option>Australia</option>
                                                <option>...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Address 1</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Address 2</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">City</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">State</label>
                                            <select class="form-control">
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option>...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">ZIP Code + Ext</label>
                                            <div class="row">
                                                <div class="col-xs-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Phone + Ext</label>
                                            <div class="row">
                                                <div class="col-xs-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Fax</label>
                                            <input type="text" id="inputFax" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Date of Birth</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                    $stickybar = array(
                                        'sets' => array(
                                            array(
                                                'html' => '
                                                    <a class="wizard-nav-link btn btn-success" href="#" data-rel="work-experience"><span class="button-label">Next: </span>Work Experience</a>
                                                    <a class="btn btn-default" href="/portfolio.php">Finished</a>
                                                ',
                                            ),
                                        ),
                                    );
                                    echo createStickybar($stickybar);
                                ?>

                            </form>
                        </section>


                        <section class="section wizard-group" id="work-experience">

                            <div class="work-experience-container-hidden">
                                <div class="slat-group">
                                    <div class="slat-group-header-title">
                                        <h2>Work Experience</h2>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>You've chosen to hide this section</h3>
                                                <a href="#" class="btn btn-default btn-sm show-section" data-section="work-experience">Show Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div class="work-experience-container">
                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Work Experience</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#modal-work-experience" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#modal-work-experience" data-toggle="modal">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#" class="hide-section" data-section="work-experience">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#modal-work-experience" data-toggle="modal" class="btn btn-default btn-sm">Add Work Experience</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="work-experience">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '
                                                <a class="wizard-nav-link btn btn-success" href="#" data-rel="education"><span class="button-label">Next: </span>Education</a>
                                                <a class="btn btn-default" href="/portfolio.php">Finished</a>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </section>

                        <section class="section wizard-group" id="education">

                            <div class="education-container-hidden">
                                <div class="slat-group">
                                    <div class="slat-group-header-title">
                                        <h2>Education</h2>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>You've chosen to hide this section</h3>
                                                <a href="#" class="btn btn-default btn-sm show-section" data-section="education">Show Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div class="education-container">
                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Education</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#modal-education" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#modal-education" data-toggle="modal" >Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#" class="hide-section" data-section="education">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#modal-education" data-toggle="modal" class="btn btn-default btn-sm">Add Education</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="education">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '
                                                <a class="wizard-nav-link btn btn-success" href="#" data-rel="licenses"><span class="button-label">Next: </span>Licenses</a>
                                                    <a class="btn btn-default" href="/portfolio.php">Finished</a>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </section>

                        <section class="section wizard-group"  id="licenses">

                            <div class="licenses-container-hidden">
                                <div class="slat-group">
                                    <div class="slat-group-header-title">
                                        <h2>Licenses</h2>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>You've chosen to hide this section</h3>
                                                <a href="#" class="btn btn-default btn-sm show-section" data-section="licenses">Show Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div class="licenses-container">
                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Licenses</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#modal-licenses" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#modal-education" data-toggle="modal">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#" class="hide-section" data-section="licenses">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <?php

                                        $content = '
                                            <section class="section">
                                                <h5>State License Number</h5>
                                                <p>1234567890</p>
                                            </section>
                                            <section class="section">
                                                <h5>Expiration Date</h5>
                                                <p>Feb 7, 2016</p>
                                            </section>
                                        ';
                                        $slat = array(
                                            'title' => '<a href="#">Emergency Medical Technician</a>',
                                            'meta' => array(
                                                array(
                                                    'label' => 'State:',
                                                    'value' => 'AK',
                                                ),
                                                array(
                                                    'label' => 'Country:',
                                                    'value' => 'United States',
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
                                                'content' => '
                                                    <div class="action action-split">
                                                        <div class="btn-group">
                                                            <a href="#modal-licenses-manage" data-toggle="modal" class="btn btn-default btn-sm hidden-xs">Manage</a>
                                                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                                <i class="fa fa-caret-down"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="#modal-licenses-manage" data-toggle="modal">Manage</a></li>
                                                                <li><a href="#">Remove</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                ',
                                            ),
                                            'nested' => array(
                                                'hide' => array($content),
                                            )
                                        );
                                        echo createSlat($slat);
                                        ?>
                                    </div>

                                    <div class="slat-group-footer">
                                        <div class="timestamp">Last Update: <?= date('M d, Y'); ?></div>
                                    </div>
                                </div>
                            </div>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '
                                                <a class="wizard-nav-link btn btn-success" href="#" data-rel="certifications"><span class="button-label">Next: </span>Certifications</a>
                                                <a class="btn btn-default" href="/portfolio.php">Finished</a>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </section>

                        <section class="section wizard-group" id="certifications">

                            <div class="certifications-container-hidden">
                                <div class="slat-group">
                                    <div class="slat-group-header-title">
                                        <h2>Certifications</h2>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>You've chosen to hide this section</h3>
                                                <a href="#" class="btn btn-default btn-sm show-section" data-section="certifications">Show Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div class="certifications-container">

                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Certifications</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#modal-certifications" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#modal-certifications" data-toggle="modal">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#" class="hide-section" data-section="certifications">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slat-group-content">
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
                                                'content' => '
                                                    <div class="action action-split">
                                                        <div class="btn-group">
                                                            <a href="#modal-certifications-manage" data-toggle="modal" class="btn btn-default btn-sm hidden-xs">Manage</a>
                                                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                                <i class="fa fa-caret-down"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="#modal-certifications-manage" data-toggle="modal">Manage</a></li>
                                                                <li><a href="#">Remove</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                ',
                                            ),
                                            'nested' => array(
                                                'hide' => array($content),
                                            )
                                        );
                                        echo createSlat($slat);
                                        ?>
                                    </div>

                                    <div class="slat-group-footer">
                                        <div class="timestamp">Last Update: <?= date('M d, Y'); ?></div>
                                    </div>
                                </div>
                            </div>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '
                                                <a class="wizard-nav-link btn btn-success" href="#" data-rel="resucitation-programs"><span class="button-label">Next: </span>Resucitation Programs</a>
                                                <a class="btn btn-default" href="/portfolio.php">Finished</a>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </section>

                        <section class="section wizard-group" id="resucitation-programs">

                            <div class="resucitation-programs-container-hidden">
                                <div class="slat-group">
                                    <div class="slat-group-header-title">
                                        <h2>Resucitation Programs</h2>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>You've chosen to hide this section</h3>
                                                <a href="#" class="btn btn-default btn-sm show-section" data-section="resucitation-programs">Show Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div class="resucitation-programs-container">

                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Resucitation Programs</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#modal-resucitation-programs" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#modal-resucitation-programs" data-toggle="modal">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#" class="hide-section" data-section="resucitation-programs">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#modal-resucitation-programs" data-toggle="modal" class="btn btn-default btn-sm">Add Resucitation Programs</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="resucitation-programs">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '
                                                <a class="wizard-nav-link btn btn-success" href="#" data-rel="activities"><span class="button-label">Next: </span>Activities</a>
                                                <a class="btn btn-default" href="/portfolio.php">Finished</a>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </section>

                        <section class="section wizard-group" id="activities">

                            <div class="activities-container-hidden">
                                <div class="slat-group">
                                    <div class="slat-group-header-title">
                                        <h2>Activities</h2>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>You've chosen to hide this section</h3>
                                                <a href="#" class="btn btn-default btn-sm show-section" data-section="activities">Show Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div class="activities-container">

                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Activities</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#modal-activities" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#modal-activities" data-toggle="modal">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#" class="hide-section" data-section="activities">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#modal-activities" data-toggle="modal" class="btn btn-default btn-sm">Add Activities</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="activities">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '
                                                <a class="wizard-nav-link btn btn-success" href="#" data-rel="publications"><span class="button-label">Next: </span>Publications</a>
                                                <a class="btn btn-default" href="/portfolio.php">Finished</a>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </section>

                        <section class="section wizard-group" id="publications">

                            <div class="publications-container-hidden">
                                <div class="slat-group">
                                    <div class="slat-group-header-title">
                                        <h2>Publications</h2>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>You've chosen to hide this section</h3>
                                                <a href="#" class="btn btn-default btn-sm show-section" data-section="publications">Show Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div class="publications-container">

                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Publications</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#modal-publications" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#modal-publications" data-toggle="modal">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#" class="hide-section" data-section="publications">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#modal-publications" data-toggle="modal" class="btn btn-default btn-sm">Add Publications</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="publications">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '
                                                <a class="wizard-nav-link btn btn-success" href="#" data-rel="awards"><span class="button-label">Next: </span>Awards &amp; Recognition</a>
                                                <a class="btn btn-default" href="/portfolio.php">Finished</a>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>
                        </section>

                        <section class="section wizard-group" id="awards">

                            <div class="awards-container-hidden">
                                <div class="slat-group">
                                    <div class="slat-group-header-title">
                                        <h2>Awards &amp; Recognition</h2>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>You've chosen to hide this section</h3>
                                                <a href="#" class="btn btn-default btn-sm show-section" data-section="awards">Show Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div class="awards-container">

                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Awards &amp; Recognition</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#modal-awards" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#modal-awards" data-toggle="modal">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#" class="hide-section" data-section="awards">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#modal-awards" data-toggle="modal" class="btn btn-default btn-sm">Add Awards &amp; Recognition</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="awards">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '
                                                <a class="wizard-nav-link btn btn-success" href="#" data-rel="other"><span class="button-label">Next: </span>Other</a>
                                                <a class="btn btn-default" href="/portfolio.php">Finished</a>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </section>

                        <section class="section wizard-group" id="other">

                            <div class="other-container-hidden">
                                <div class="slat-group">
                                    <div class="slat-group-header-title">
                                        <h2>Other</h2>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>You've chosen to hide this section</h3>
                                                <a href="#" class="btn btn-default btn-sm show-section" data-section="other">Show Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div class="other-container">

                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Other</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#modal-other" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#modal-other" data-toggle="modal">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#" class="hide-section" data-section="other">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#modal-other" data-toggle="modal" class="btn btn-default btn-sm">Add Other</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="other">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'html' => '<a class="btn btn-default" href="/portfolio.php">Finished</a>',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </section>

                    </section>
                </div>
            </div>
        </section>
    </div><!-- /container -->
</div> <!-- /layout -->

<!-- ADD MODALS -->
<!-- Modal -->
<div id="modal-work-experience" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Work Experience</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Company Name *</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Title *</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Location</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Profession</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Specialty</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Settings Group</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Country</label>
                                <select id="inputCountry" class="form-control">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>Australia</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">State</label>
                                <select class="form-control">
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Time Period *</label>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <select class="form-control">
                                            <option value="AL">January</option>
                                            <option value="AK">February</option>
                                            <option value="AZ">March</option>
                                            <option value="AR">April</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control mobile-shim" maxlength="4" placeholder="YYYY">
                                    </div>
                                    <div class="col-sm-1 wizard-to-text">
                                        to
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control">
                                            <option value="AL">January</option>
                                            <option value="AK">February</option>
                                            <option value="AZ">March</option>
                                            <option value="AR">April</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control .mobile-shim" maxlength="4" placeholder="YYYY">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 field-shim">
                                        <label><input type="checkbox" name="vehicle" value="Current"> I currently work here</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Description</label>
                                <textarea rows="4" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-education" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Education</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Degree</label>
                                <select class="form-control">
                                    <option>These are the options for Degree</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Field of Study</label>
                                <select class="form-control education-fos">
                                    <option>Options for Field of Study</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">School Name</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Country</label>
                                <select id="inputCountry" class="form-control">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>Australia</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">City</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">State</label>
                                <select class="form-control">
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Time Period</label>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <select class="form-control">
                                            <option value="AL">January</option>
                                            <option value="AK">February</option>
                                            <option value="AZ">March</option>
                                            <option value="AR">April</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control mobile-shim" maxlength="4" placeholder="YYYY">
                                    </div>
                                    <div class="col-sm-1 wizard-to-text">
                                        to
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control">
                                            <option value="AL">January</option>
                                            <option value="AK">February</option>
                                            <option value="AZ">March</option>
                                            <option value="AR">April</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control mobile-shim" maxlength="4" placeholder="YYYY">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 field-shim">
                                        <label><input type="checkbox" name="vehicle" value="Current"> Currently attending</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Comments</label>
                                <textarea rows="4" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Attachment</label>
                                <ul class="wizard-control-attachments">
                                    <li><button class="btn btn-xs btn-danger wizard-control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="wizard-control-attachment-link"><i class="fa fa-fw fa-paperclip wizard-control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                                </ul>
                                <div class="control-add-new">
                                    <a href="#">Attach Documents</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-licenses" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add a License</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Discipline</label>
                    <select class="form-control" id="add-discipline">
                        <option value="">Select a Discipline</option>
                        <option value="default">Select a Discipline</option>
                        <option value="emt">Emergency Medical Technician</option>
                        <option value="pharmacist">Pharmacist</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Country</label>
                    <select class="form-control">
                        <option>Select a Country</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">State/Province of Licensure</label>
                    <select class="form-control">
                        <option>Select a State/Province</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">State License Number <small>Optional</small></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
                            <div class="input-group date">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="discipline-fields-pharmacist" class="discipline-fields">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">NABP eProfile ID Number <small>Optional</small></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Email Address</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <ul class="wizard-control-attachments">
                        <li><button class="btn btn-xs btn-danger wizard-control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="wizard-control-attachment-link"><i class="fa fa-fw fa-paperclip wizard-control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-certifications" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add a Certification</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Certifying Body</label>
                    <select class="form-control">
                        <option>These are the options for Certifying Body</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Certification</label>
                    <select class="form-control">
                        <option>These are the options for Certification within the Certifying Body</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Country</label>
                    <select id="inputCountry" class="form-control">
                        <option>United States</option>
                        <option>Canada</option>
                        <option>Australia</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
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
                            <div class="field-shim">
                                <label><input type="checkbox" name="vehicle" value="Current" checked> Notify me upon expiration</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <ul class="wizard-control-attachments">
                        <li><button class="btn btn-xs btn-danger wizard-control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="wizard-control-attachment-link"><i class="fa fa-fw fa-paperclip wizard-control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-resucitation-programs" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add a Resucitation Program</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Certifying Body</label>
                    <select class="form-control">
                        <option>Options for Certifying Body/Resucitation Program</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Certification</label>
                    <select class="form-control">
                        <option>Options for Certification within the Certifying Body/Resucitation Program</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Country</label>
                    <select id="inputCountry" class="form-control">
                        <option>United States</option>
                        <option>Canada</option>
                        <option>Australia</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
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
                            <div class="field-shim">
                                <label><input type="checkbox" name="vehicle" value="Current" checked> Notify me upon expiration</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <ul class="wizard-control-attachments">
                        <li><button class="btn btn-xs btn-danger wizard-control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="wizard-control-attachment-link"><i class="fa fa-fw fa-paperclip wizard-control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-activities" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add an Activity</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Type</label>
                    <select class="form-control" id="add-discipline">
                        <option value="">Select a Type</option>
                        <option value="default">Research</option>
                        <option value="emt">Teaching</option>
                        <option value="pharmacist">Volunteer Service</option>
                        <option value="pharmacist">Presentations</option>
                        <option value="pharmacist">Consulting</option>
                        <option value="pharmacist">More If Needed...</option>
                    </select>
                </div>

                <div id="activity-fields-teaching" class="activity-fields">
                    <div class="form-group">
                        <label class="control-label">Activity Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Organization Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Country</label>
                        <select id="inputCountry" class="form-control">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Australia</option>
                            <option>...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">City</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">State</label>
                        <select class="form-control">
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option>...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Time Period</label>
                        <div class="row">
                            <div class="col-sm-3">
                                <select class="form-control">
                                    <option value="AL">January</option>
                                    <option value="AK">February</option>
                                    <option value="AZ">March</option>
                                    <option value="AR">April</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control mobile-shim" maxlength="4" placeholder="YYYY">
                            </div>
                            <div class="col-sm-1 wizard-to-text">
                                to
                            </div>
                            <div class="col-sm-3">
                                <select class="form-control">
                                    <option value="AL">January</option>
                                    <option value="AK">February</option>
                                    <option value="AZ">March</option>
                                    <option value="AR">April</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control mobile-shim" maxlength="4" placeholder="YYYY">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 field-shim">
                                <label><input type="checkbox" name="vehicle" value="Current"> Current activity</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea rows="4" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Attachment</label>
                        <ul class="wizard-control-attachments">
                            <li><button class="btn btn-xs btn-danger wizard-control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="wizard-control-attachment-link"><i class="fa fa-fw fa-paperclip wizard-control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                        </ul>
                        <div class="control-add-new">
                            <a href="#">Attach Documents</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-publications" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add a Publication</h4>
            </div>

            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Publication Title</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Publication Type</label>
                    <select id="inputCountry" class="form-control">
                        <option>Select a Publication Type</option>
                        <option>Book</option>
                        <option>Article</option>
                        <option>Thesis</option>
                        <option>Dissertation</option>
                        <option>Book Chapters</option>
                        <option>Published Proceedings/Abstracts</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Role</label>
                    <select id="inputCountry" class="form-control">
                        <option>Select a Role</option>
                        <option>Author</option>
                        <option>Editor</option>
                        <option>Reviewer</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Abstract</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Publisher</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Is In Press</label>
                    <input type="checkbox" name="Press" value="Yes"> Yes
                </div>
                <div class="form-group">
                    <label class="control-label">Issue Date</label>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Volume/Issue</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Pages</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Link to URL</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Authors</label>
                    <ul class="wizard-control-attachments">
                        <li>
                            <button class="btn btn-xs btn-danger wizard-control-attachment-remove"><i class="fa fa-times"></i></button>
                                <span class="wizard-control-attachment-link no-icon">Joe Smith</span>
                        </li>
                        <li>
                            <button class="btn btn-xs btn-danger wizard-control-attachment-remove"><i class="fa fa-times"></i></button>
                            <span class="wizard-control-attachment-link no-icon"></i>Jane Doe</span>
                        </li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#" id="wizard-add-author-link" data-labels="+ Add Another|Close">Add Author</a>
                    </div>
                </div>


                <div id="wizard-author-add" class="wizard-author-add">
                    <h4>Author Information</h4>
                    <div class="form-group">
                        <label class="control-label">Rank</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label class="control-label">First Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">MI</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label class="control-label">Last Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Title</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Organization</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="control-add-new">
                        <a href="#" class="btn btn-sm btn-success">Add Author</a>
                        <a href="#" class="btn btn-sm btn-default">Cancel</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-awards" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Awards &amp; Recognition</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Name of Honor</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Type of Honor</label>
                    <select id="inputCountry" class="form-control">
                        <option>Select an Honor</option>
                        <option>Award</option>
                        <option>Scholorship</option>
                        <option>Fellowship</option>
                        <option>Grant</option>
                        <option>Fellow</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Honor Given By</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Description</label>
                    <textarea rows="4" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Date</label>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Select Documents</label>
                    <select id="inputCountry" class="form-control">
                        <option>Select One</option>
                        <option>Document 1</option>
                        <option>Document 1</option>
                        <option>Document 3</option>
                        <option>Document 4</option>
                        <option>...</option>
                    </select>
                    <div class="control-add-new">
                        <a href="#">Attach New Document</a>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-other" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Other</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Title</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Organization Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Country</label>
                    <select id="inputCountry" class="form-control">
                        <option>United States</option>
                        <option>Canada</option>
                        <option>Australia</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">City</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">State</label>
                    <select class="form-control">
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Time Period</label>
                    <div class="row">
                        <div class="col-sm-3">
                            <select class="form-control">
                                <option value="AL">January</option>
                                <option value="AK">February</option>
                                <option value="AZ">March</option>
                                <option value="AR">April</option>
                                <option>...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control mobile-shim" maxlength="4" placeholder="YYYY">
                        </div>
                        <div class="col-sm-1 wizard-to-text">
                            to
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control">
                                <option value="AL">January</option>
                                <option value="AK">February</option>
                                <option value="AZ">March</option>
                                <option value="AR">April</option>
                                <option>...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control mobile-shim" maxlength="4" placeholder="YYYY">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Description</label>
                    <textarea rows="4" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <ul class="wizard-control-attachments">
                        <li><button class="btn btn-xs btn-danger wizard-control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="wizard-control-attachment-link"><i class="fa fa-fw fa-paperclip wizard-control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!-- /ADD MODALS -->

<!-- MANAGE MODALS -->
<!-- Modal -->
<div id="modal-licenses-manage" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Manage License</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Discipline</label>
                    <select class="form-control" id="add-discipline">
                        <option value="">Select a Discipline</option>
                        <option value="default">Select a Discipline</option>
                        <option value="emt" selected="">Emergency Medical Technician</option>
                        <option value="pharmacist">Pharmacist</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Country</label>
                    <select id="inputCountry" class="form-control">
                        <option selected="">United States</option>
                        <option>Canada</option>
                        <option>Australia</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">State or Province of Licensure</label>
                    <select class="form-control">
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR" selected>Arkansas</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">State License Number <small>Optional</small></label>
                            <input type="text" class="form-control" value="1234567890">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="Feb 7, 2016">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="discipline-fields-pharmacist" class="discipline-fields">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">NABP eProfile ID Number <small>Optional</small></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Email Address</label>
                    <input type="text" class="form-control" value="jdoe@email.com">
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <ul class="wizard-control-attachments">
                        <li><button class="btn btn-xs btn-danger wizard-control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="wizard-control-attachment-link"><i class="fa fa-fw fa-paperclip wizard-control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-certifications-manage" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Manage Certification</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Certifying Body</label>
                    <select class="form-control">
                        <option selected="">American Board of Wound Management (ABWM)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Certification</label>
                    <select class="form-control">
                        <option selected="">CWCA - Certified Wound Care Associate</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Country</label>
                    <select id="inputCountry" class="form-control">
                        <option selected="">United States</option>
                        <option>Canada</option>
                        <option>Australia</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Certification Number <small>Optional</small></label>
                            <input type="text" class="form-control" value="123456789011112">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="Aug 27, 2015">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <div class="field-shim">
                                <label><input type="checkbox" name="vehicle" value="Current" checked> Notify me upon expiration</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <ul class="wizard-control-attachments">
                        <li><button class="btn btn-xs btn-danger wizard-control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="wizard-control-attachment-link"><i class="fa fa-fw fa-paperclip wizard-control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- /MANAGE MODALS -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>



<script src="/scripts/prototype.portfolio.wizard.js"></script>

<script>
    //localStorage.clear();
</script>

<script src="/scripts/healthstream.tours/plugin/bootstrap-tour.js"></script>
    <script src="/scripts/healthstream.tours/localization/localization-eng-tour.js"></script>
<?= createSiteEnd(); ?>
