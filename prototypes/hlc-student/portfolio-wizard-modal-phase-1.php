<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'My Portfolio';

?>
<?= createSiteStart($patterns['start']); ?>

<style>
    body {
      height: auto;
      overflow: auto
    }
    .committee-work-membership-experience,
    .memberships-committee-work-experience,
    .committee-work-container-hidden,
    .memberships-container-hidden,
    .teaching-container-hidden,
    .irb-options {
        display: none;
    }
    .committee-work-save-experience,
    .memberships-save-experience,
    .teaching-save-experience {
        display: none;
        -webkit-animation: fadeOut 1s;
        animation: fadeOut 1s;
    }
</style>



<body>

<div class="layout layout-wizard" id="wizard-content">

    <div class="container">
        <section class="section section-main section-box">

            <!-- WIZARD JUMP NAVIGATION -->
            <nav class="nav-focus">
                <div class="nav-mobile visible-xs visible-sm">
                    <span><span class="focus-nav-title">Personal Information</span></span>
                    <a href="#nav-main" id="nav-main" class="nav-default toggle"><i class="fa fa-bars"></i></a>
                </div>

                <ul class="nav">
                    <li class="li personal-information active" data-li="personal-information">
                        <a class="wizard-nav-link personal-information active size-check" href="#" data-rel="personal-information">Personal Information</a>
                    </li>

                    <li class="li work-experience" data-li="work-experience">
                        <a class="wizard-nav-link work-experience size-check" href="#" data-rel="work-experience">Work Experience</a>
                    </li>

                    <li class="li education" data-li="education">
                        <a class="wizard-nav-link education size-check" href="#" data-rel="education">Education</a>
                    </li>

                    <li class="li licenses" data-li="licenses">
                        <a class="wizard-nav-link licenses size-check" href="#" data-rel="licenses">Licenses</a>
                    </li>

                    <li class="li certifications" data-li="certifications">
                        <a class="wizard-nav-link certifications size-check" href="#" data-rel="certifications">Certifications</a>
                    </li>

                    <li class="li resucitation-programs" data-li="resucitation-programs">
                        <a class="wizard-nav-link resucitation-programs size-check" href="#" data-rel="resucitation-programs">Resucitation Programs</a>
                    </li>

                    <li class="li activities" data-li="activities">
                        <a class="wizard-nav-link activities size-check" href="#" data-rel="activities">Volunteer Service</a>
                    </li>

                    <li class="li committee-work" data-li="committee-work">
                        <a class="wizard-nav-link committee-work size-check" href="#" data-rel="committee-work">Committee Work</a>
                    </li>

                    <li class="li memberships" data-li="memberships">
                        <a class="wizard-nav-link memberships size-check" href="#" data-rel="memberships">Memberships &amp; Associations</a>
                    </li>

                    <li class="li teaching" data-li="teaching">
                        <a class="wizard-nav-link teaching size-check" href="#" data-rel="teaching">Teaching &amp; Preceptorship</a>
                    </li>

                    <li class="li publications" data-li="publications">
                        <a class="wizard-nav-link publications size-check" href="#" data-rel="publications">Publications &amp; Research</a>
                    </li>
                    <li class="li awards" data-li="awards">
                        <a class="wizard-nav-link awards size-check" href="#" data-rel="awards">Awards &amp; Recognition</a>
                    </li>

                    <li class="li other" data-li="other">
                        <a class="wizard-nav-link other size-check" href="#" data-rel="other">Other</a>
                    </li>
                </ul>
            </nav>
            <!-- /WIZARD JUMP NAVIGATION -->

            <div class="row">
                <div class="col-md-12">
                    <section class="section wizard-container">

                    <!-- WIZARD GROUP PERSONAL INFO -->
                        <section class="section wizard-group active" id="personal-information">
                            <h2>Personal Information</h2>
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
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
                                        <div class="row">
                                            <div class="col-xs-7 col-sm-5">
                                                <div class="form-group">
                                                    <label class="control-label">ZIP Code</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-5 col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">Ext <small>Optional</small></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-7 col-sm-5">
                                                <div class="form-group">
                                                    <label class="control-label">Phone <small>Optional</small></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-5 col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">Ext <small>Optional</small></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-7 col-sm-5">
                                                <div class="form-group">
                                                    <label class="control-label">Fax <small>Optional</small></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div style="display: none">
                                    <div class="section-footer-personal-information">
                                        <a class="wizard-nav-link btn btn-success size-check" href="#" data-rel="work-experience"><span class="button-label">Next: </span>Work Experience</a>
                                        <a class="btn btn-default" href="#" onClick ="window.parent.closeModal(); return false;">Finished</a>
                                    </div>
                                </div>

                            </form>
                        </section>
                        <!-- /WIZARD GROUP PERSONAL INFO -->

                        <!-- WIZARD GROUP WORK EXPERIENCE -->
                        <section class="section wizard-group" id="work-experience">

                            <div class="work-experience-container-add" style="display: none;">
                                <h2>Add Work Experience</h2>
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group profession">
                                                <label class="control-label">Profession</label>
                                                <select class="form-control">
                                                    <option>Choose a Profession</option>
                                                    <option value="with-specialty" data-profession="surgeon">Surgeon: With a specialty</option>
                                                    <option value="without-specialty" data-profession="tech">Without a specialty</option>
                                                    <option value="without-specialty" data-profession="student">Has no specialty</option>
                                                    <option value="with-specialty" data-profession="nurse">Nurse: Has specialty</option>
                                                </select>
                                            </div>
                                            <div class="form-group surgeon professional-specialty hidden">
                                                <label class="control-label">Specialty</label>
                                                <select class="form-control">
                                                    <option>Choose a Surgeon Specialty</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="form-group nurse professional-specialty hidden">
                                                <label class="control-label">Specialty</label>
                                                <select class="form-control">
                                                    <option>Choose a Nurse Specialty</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Settings</label>
                                                <select class="form-control">
                                                    <option>Choose a Setting</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="row date-row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Start Date</label>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <select class="form-control">
                                                                    <option disabled selected>MM</option>
                                                                    <option>01</option>
                                                                    <option>02</option>
                                                                    <option>03</option>
                                                                    <option>04</option>
                                                                    <option>05</option>
                                                                    <option>06</option>
                                                                    <option>07</option>
                                                                    <option>08</option>
                                                                    <option>09</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <select class="form-control">
                                                                    <option disabled selected>YYYY</option>
                                                                    <option>1970</option>
                                                                    <option>1971</option>
                                                                    <option>1972</option>
                                                                    <option>1973</option>
                                                                    <option>...</option>
                                                                    <option>...</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Completion Date</label>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <select class="form-control">
                                                                    <option disabled selected>MM</option>
                                                                    <option>01</option>
                                                                    <option>02</option>
                                                                    <option>03</option>
                                                                    <option>04</option>
                                                                    <option>05</option>
                                                                    <option>06</option>
                                                                    <option>07</option>
                                                                    <option>08</option>
                                                                    <option>09</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <select class="form-control">
                                                                    <option disabled selected>YYYY</option>
                                                                    <option>1970</option>
                                                                    <option>1971</option>
                                                                    <option>1972</option>
                                                                    <option>1973</option>
                                                                    <option>...</option>
                                                                    <option>...</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">I Currently Work Here?</label>
                                                <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                                                <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
                                            </div>

                                            <div class="experience-additional-info collapse-group collapse">

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
                                                    <label class="control-label">Description</label>
                                                    <textarea rows="4" class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <a href="#" class="collapse-toggle" data-toggle-text="Show additional information|Hide additional information">Show additional information</a>
                                        </div>
                                    </div>
                                </form>
                            </div>

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
                                                <a href="#" class="btn btn-default btn-sm show-add size-check" data-section="work-experience">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#" class="show-add size-check" data-section="work-experience">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#" class="hide-section size-check" data-section="work-experience">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#" class="btn btn-default btn-sm show-add size-check" data-section="work-experience">Add Work Experience</a> <a href="#" class="btn btn-default btn-sm hide-section size-check" data-section="work-experience">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div style="display: none">
                                <div class="section-footer-work-experience">
                                    <div class="work-experience-next-step">
                                        <a class="wizard-nav-link btn btn-success size-check" href="#" data-rel="education"><span class="button-label">Next: </span>Education</a>
                                        <a class="btn btn-default" href="#" onClick ="window.parent.closeModal(); return false;">Finished</a>
                                    </div>
                                    <div class="work-experience-save-experience">
                                        <a class="btn btn-success size-check hide-add" href="#" data-section="work-experience"><span class="button-label">Save</a>
                                        <a class="btn btn-default hide-add size-check" href="#" data-section="work-experience">Cancel</a>
                                    </span>
                                </div>
                            </div>
                        </section>


                        <!-- WIZARD GROUP EDUCATION -->
                        <section class="section wizard-group" id="education">

                            <div class="education-container-add" style="display: none;">
                                <h2>Add Education</h2>
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
                                            <div class="row date-row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Start Date</label>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <select class="form-control">
                                                                    <option disabled selected>MM</option>
                                                                    <option>01</option>
                                                                    <option>02</option>
                                                                    <option>03</option>
                                                                    <option>04</option>
                                                                    <option>05</option>
                                                                    <option>06</option>
                                                                    <option>07</option>
                                                                    <option>08</option>
                                                                    <option>09</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <select class="form-control">
                                                                    <option disabled selected>YYYY</option>
                                                                    <option>1970</option>
                                                                    <option>1971</option>
                                                                    <option>1972</option>
                                                                    <option>1973</option>
                                                                    <option>...</option>
                                                                    <option>...</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Completion Date</label>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <select class="form-control">
                                                                    <option disabled selected>MM</option>
                                                                    <option>01</option>
                                                                    <option>02</option>
                                                                    <option>03</option>
                                                                    <option>04</option>
                                                                    <option>05</option>
                                                                    <option>06</option>
                                                                    <option>07</option>
                                                                    <option>08</option>
                                                                    <option>09</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <select class="form-control">
                                                                    <option disabled selected>YYYY</option>
                                                                    <option>1970</option>
                                                                    <option>1971</option>
                                                                    <option>1972</option>
                                                                    <option>1973</option>
                                                                    <option>...</option>
                                                                    <option>...</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Degree in Progress?</label>
                                                <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                                                <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Comments</label>
                                                <textarea rows="4" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Attachment</label>
                                                <ul class="control-attachments">
                                                    <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                                                </ul>
                                                <div class="control-add-new">
                                                    <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

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
                                                <a href="#" class="btn btn-default btn-sm show-add size-check" data-section="education">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#" class="show-add size-check" data-section="education">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#" class="hide-section size-check" data-section="education">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#" class="btn btn-default btn-sm show-add size-check" data-section="education">Add Education</a> <a href="#" class="btn btn-default btn-sm hide-section size-check" data-section="education">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div style="display: none">
                                <div class="section-footer-education">
                                    <div class="education-next-step">
                                        <a class="wizard-nav-link btn btn-success size-check" href="#" data-rel="licenses"><span class="button-label">Next: </span>Licenses</a>
                                        <a class="btn btn-default" href="#" onClick ="window.parent.closeModal(); return false;">Finished</a>
                                    </div>
                                    <div class="education-save-experience">
                                        <a class="btn btn-success size-check hide-add" href="#" data-section="education"><span class="button-label">Save</a>
                                        <a class="btn btn-default hide-add size-check" href="#" data-section="education">Cancel</a>
                                    </span>
                                </div>
                            </div>

                        </section>
                        <!-- /WIZARD GROUP EDUCATION -->

                        <!-- WIZARD GROUP LICENSES -->
                        <section class="section wizard-group" id="licenses">
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
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>Not Yet Available, Coming Soon.</h3>
                                                <a href="#" class="btn btn-default btn-sm hide-section size-check" data-section="licenses">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div style="display: none">
                                <div class="section-footer-licenses">
                                    <div class="licenses-next-step">
                                        <a class="wizard-nav-link btn btn-success size-check" href="#" data-rel="certifications"><span class="button-label">Next: </span>Certifications</a>
                                        <a class="btn btn-default" href="#" onClick ="window.parent.closeModal(); return false;">Finished</a>
                                    </div>
                                </div>
                            </div>

                        </section>
                        <!-- /WIZARD GROUP EDUCATION -->


                        <!-- WIZARD GROUP CERTIFICATIONS -->
                        <section class="section wizard-group" id="certifications">

                            <div class="certifications-container-manage" style="display: none;">
                                <h2>Manage Certification</h2>
                                <form>
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
                                        <ul class="control-attachments control-attachments">
                                            <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                                        </ul>
                                        <div class="control-add-new">
                                            <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="certifications-container-add" style="display: none;">
                                <h2>Add Certifications</h2>
                                <form>
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
                                        <ul class="control-attachments control-attachments">
                                            <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                                        </ul>
                                        <div class="control-add-new">
                                            <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                                        </div>
                                    </div>
                                </form>
                            </div>

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
                                                <a href="#" class="btn btn-default btn-sm show-add size-check" data-section="certifications">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#" class="show-add size-check" data-section="certifications">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#" class="hide-section size-check" data-section="certifications">Hide Section</a></li>
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
                                                            <a href="#" class="btn btn-default btn-sm hidden-xs show-manage size-check" data-section="certifications">Manage</a>
                                                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                                <i class="fa fa-caret-down"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="#" class="show-manage size-check" data-section="certifications">Manage</a></li>
                                                                <li><a href="#">Removed</a></li>
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

                                        echo createSlat($slat);
                                        ?>

                                    </div>

                                </div>
                            </div>

                            <div style="display: none">
                                <div class="section-footer-certifications">
                                    <div class="certifications-next-step">
                                        <a class="wizard-nav-link btn btn-success size-check" href="#" data-rel="resucitation-programs"><span class="button-label">Next: </span>Resucitation Programs</a>
                                        <a class="btn btn-default" href="#" onClick ="window.parent.closeModal(); return false;">Finished</a>
                                    </div>
                                    <div class="certifications-save-experience">
                                        <a class="btn btn-success size-check hide-add hide-manage" href="#" data-section="certifications"><span class="button-label">Save</a>
                                        <a class="btn btn-default hide-add hide-manage size-check" href="#" data-section="certifications">Cancel</a>
                                    </span>
                                </div>
                            </div>

                        </section>
                        <!-- /WIZARD GROUP CERTIFICATIONS -->

                        <!-- WIZARD GROUP RESUCITATION PROGRAMS -->
                        <section class="section wizard-group" id="resucitation-programs">

                            <div class="resucitation-programs-container-add" style="display: none;">
                                <h2>Add Resucitation Program</h2>
                                <form>
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
                                        <ul class="control-attachments control-attachments">
                                            <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                                        </ul>
                                        <div class="control-add-new">
                                            <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                                        </div>
                                    </div>
                                </form>
                            </div>

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
                                                <a href="#" class="btn btn-default btn-sm show-add size-check" data-section="resucitation-programs">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#" class="show-add size-check" data-section="resucitation-programs">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#" class="hide-section size-check" data-section="resucitation-programs">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#modal-resucitation-programs" class="btn btn-default btn-sm show-add size-check" data-section="resucitation-programs">Add Resucitation Programs</a>
                                                <a href="#" class="btn btn-default btn-sm hide-section size-check" data-section="resucitation-programs">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div style="display: none">
                                <div class="section-footer-resucitation-programs">
                                    <div class="resucitation-programs-next-step">
                                        <a class="wizard-nav-link btn btn-success size-check" href="#" data-rel="activities"><span class="button-label">Next: </span>Volunteer Service</a>
                                        <a class="btn btn-default" href="#" onClick ="window.parent.closeModal(); return false;">Finished</a>
                                    </div>

                                    <div class="resucitation-programs-save-experience">
                                        <a class="btn btn-success size-check hide-add" href="#" data-section="resucitation-programs"><span class="button-label">Save</a>
                                        <a class="btn btn-default hide-add size-check" href="#" data-section="resucitation-programs">Cancel</a>
                                    </span>
                                </div>
                            </div>

                        </section>
                        <!-- /WIZARD GROUP RESUCITATION PROGRAMS -->

                        <!-- WIZARD GROUP ACTIVITIES -->
                        <section class="section wizard-group" id="activities">

                            <div class="activities-container-add" style="display: none;">
                                <h2>Add an Activity</h2>
                                <form>
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
                                        <div class="row date-row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Start Date</label>
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <select class="form-control">
                                                                <option disabled selected>MM</option>
                                                                <option>01</option>
                                                                <option>02</option>
                                                                <option>03</option>
                                                                <option>04</option>
                                                                <option>05</option>
                                                                <option>06</option>
                                                                <option>07</option>
                                                                <option>08</option>
                                                                <option>09</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <select class="form-control">
                                                                <option disabled selected>YYYY</option>
                                                                <option>1970</option>
                                                                <option>1971</option>
                                                                <option>1972</option>
                                                                <option>1973</option>
                                                                <option>...</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Completion Date</label>
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <select class="form-control">
                                                                <option disabled selected>MM</option>
                                                                <option>01</option>
                                                                <option>02</option>
                                                                <option>03</option>
                                                                <option>04</option>
                                                                <option>05</option>
                                                                <option>06</option>
                                                                <option>07</option>
                                                                <option>08</option>
                                                                <option>09</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <select class="form-control">
                                                                <option disabled selected>YYYY</option>
                                                                <option>1970</option>
                                                                <option>1971</option>
                                                                <option>1972</option>
                                                                <option>1973</option>
                                                                <option>...</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Current Activity?</label>
                                            <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                                            <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Description</label>
                                            <textarea rows="4" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Attachment</label>
                                            <ul class="control-attachments control-attachments">
                                                <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                                            </ul>
                                            <div class="control-add-new">
                                                <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="activities-container-hidden">
                                <div class="slat-group">
                                    <div class="slat-group-header-title">
                                        <h2>Volunteer Service</h2>
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
                                            <h2>Volunteer Service</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default btn-sm show-add size-check" data-section="activities">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#" class="show-add size-check" data-section="activities">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#" class="hide-section size-check" data-section="activities">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#" data-section="activities" class="btn btn-default btn-sm show-add size-check">Add Volunteer Service</a> <a href="#" class="btn btn-default btn-sm hide-section size-check" data-section="activities">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div style="display: none">
                                <div class="section-footer-activities">
                                    <div class="activities-next-step">
                                        <a class="wizard-nav-link btn btn-success size-check" href="#" data-rel="committee-work"><span class="button-label">Next: </span>Committee Work</a>
                                        <a class="btn btn-default" href="#" onClick ="window.parent.closeModal(); return false;">Finished</a>
                                    </div>
                                    <div class="activities-save-experience">
                                        <a class="btn btn-success size-check hide-add" href="#" data-section="activities"><span class="button-label">Save</a>
                                        <a class="btn btn-default hide-add size-check" href="#" data-section="activities">Cancel</a>
                                    </span>
                                </div>
                            </div>

                        </section>
                        <!-- /WIZARD GROUP ACTIVITIES -->

                        <!-- WIZARD GROUP COMMITTEE WORK -->
                        <section class="section wizard-group" id="committee-work">

                            <div class="committee-work-container-add" style="display: none;">
                                <h2>Add Committee Work</h2>
                                <form>
                                    <div class="form-group">
                                        <label class="control-label">Committee Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Committee Type</label>
                                        <select class="form-control">
                                            <option>Select a Committee Type</option>
                                            <option>National Organization</option>
                                            <option>Local or State Organization</option>
                                            <option>Facility or Workplace Committee</option>
                                            <option>Fraternity</option>
                                            <option>Sorority</option>
                                            <option>Alumni Organization</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Organization/Work Group</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Role</label>
                                        <select id="inputCountry" class="form-control">
                                            <option>Select a Role</option>
                                            <option>Chair</option>
                                            <option>Co-Chair</option>
                                            <option>Officer/Board Member</option>
                                            <option>Member</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea rows="4" class="form-control"></textarea>
                                    </div>
                                    <div class="row date-row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">From</label>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>MM</option>
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                            <option>04</option>
                                                            <option>05</option>
                                                            <option>06</option>
                                                            <option>07</option>
                                                            <option>08</option>
                                                            <option>09</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>YYYY</option>
                                                            <option>1970</option>
                                                            <option>1971</option>
                                                            <option>1972</option>
                                                            <option>1973</option>
                                                            <option>...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">To</label>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>MM</option>
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                            <option>04</option>
                                                            <option>05</option>
                                                            <option>06</option>
                                                            <option>07</option>
                                                            <option>08</option>
                                                            <option>09</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>YYYY</option>
                                                            <option>1970</option>
                                                            <option>1971</option>
                                                            <option>1972</option>
                                                            <option>1973</option>
                                                            <option>...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">To Present?</label>
                                        <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                                        <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Add a Link</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group new-memberships-group">
                                        <label class="control-label">Memberships &amp; Associations</label>
                                        <div class="control-add-new">
                                            <a href="#" data-section="committee-work" class="show-add-membership size-check">New Memberships &amp; Associations</a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="committee-work-container-add-membership" style="display: none;">
                                <h2>Add Memberships &amp; Associations</h2>
                                <form>
                                    <div class="form-group">
                                        <label class="control-label">Organization Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Membership Type</label>
                                        <select class="form-control">
                                            <option>Select a Membership Type</option>
                                            <option>National Organization</option>
                                            <option>Local or State Organization</option>
                                            <option>Facility or Workplace Committee</option>
                                            <option>Fraternity</option>
                                            <option>Sorority</option>
                                            <option>Alumni Organization</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Role</label>
                                        <select id="inputCountry" class="form-control">
                                            <option>Select a Role</option>
                                            <option>Chair</option>
                                            <option>Co-Chair</option>
                                            <option>Officer/Board Member</option>
                                            <option>Member</option>
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
                                        <label class="control-label">Description</label>
                                        <textarea rows="4" class="form-control"></textarea>
                                    </div>
                                    <div class="row date-row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">From</label>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>MM</option>
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                            <option>04</option>
                                                            <option>05</option>
                                                            <option>06</option>
                                                            <option>07</option>
                                                            <option>08</option>
                                                            <option>09</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>YYYY</option>
                                                            <option>1970</option>
                                                            <option>1971</option>
                                                            <option>1972</option>
                                                            <option>1973</option>
                                                            <option>...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">To</label>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>MM</option>
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                            <option>04</option>
                                                            <option>05</option>
                                                            <option>06</option>
                                                            <option>07</option>
                                                            <option>08</option>
                                                            <option>09</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>YYYY</option>
                                                            <option>1970</option>
                                                            <option>1971</option>
                                                            <option>1972</option>
                                                            <option>1973</option>
                                                            <option>...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">To Present?</label>
                                        <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                                        <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
                                    </div>
                                </form>
                            </div>

                            <div class="committee-work-container-hidden">
                                <div class="slat-group">
                                    <div class="slat-group-header-title">
                                        <h2>Committee Work</h2>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>You've chosen to hide this section</h3>
                                                <a href="#" class="btn btn-default btn-sm show-section" data-section="committee-work">Show Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div class="committee-work-container">
                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Committee Work</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#" data-section="committee-work" class="btn btn-default btn-sm show-add size-check">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#" data-section="committee-work" class="show-add size-check">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#" class="hide-section size-check" data-section="committee-work">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#modal-committee-work" data-section="committee-work" class="btn btn-default btn-sm show-add size-check">Add Committee Work</a> <a href="#" class="btn btn-default btn-sm hide-section size-check" data-section="committee-work">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div style="display: none">
                                <div class="section-footer-committee-work">
                                    <div class="committee-work-next-step">
                                        <a class="wizard-nav-link btn btn-success size-check" href="#" data-rel="memberships"><span class="button-label">Next: </span>Memberships &amp; Associations</a>
                                        <a class="btn btn-default" href="#" onClick ="window.parent.closeModal(); return false;">Finished</a>
                                    </div>
                                    <div class="committee-work-save-experience">
                                        <a class="btn btn-success size-check hide-add" href="#" data-section="committee-work"><span class="button-label">Save</a>
                                        <a class="btn btn-default hide-add size-check" href="#" data-section="committee-work">Cancel</a></span>
                                    </div>
                                    <div class="committee-work-membership-experience">
                                        <a class="btn btn-success size-check hide-add-membership" href="#" data-section="committee-work"><span class="button-label">Save</a>
                                        <!--<a class="btn btn-success size-check show-add-membership" href="#" data-section="committee-work"><span class="button-label">Save and Add Another</a>-->
                                        <a class="btn btn-default hide-add-membership size-check" href="#" data-section="committee-work">Cancel</a>
                                    </div>
                                </div>
                            </div>

                        </section>
                        <!-- /WIZARD GROUP -->

                        <!-- WIZARD GROUP MEMBERSHIPS & ASSOCIATIONS -->
                        <section class="section wizard-group" id="memberships">

                            <div class="memberships-container-add" style="display: none;">
                                <h2>Add Memberships &amp; Associations</h2>
                                <form>
                                    <div class="form-group">
                                        <label class="control-label">Organization Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Membership Type</label>
                                        <select class="form-control">
                                            <option>Select a Membership Type</option>
                                            <option>National Organization</option>
                                            <option>Local or State Organization</option>
                                            <option>Facility or Workplace Committee</option>
                                            <option>Fraternity</option>
                                            <option>Sorority</option>
                                            <option>Alumni Organization</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Role</label>
                                        <select id="inputCountry" class="form-control">
                                            <option>Select a Role</option>
                                            <option>Chair</option>
                                            <option>Co-Chair</option>
                                            <option>Officer/Board Member</option>
                                            <option>Member</option>
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
                                        <label class="control-label">Description</label>
                                        <textarea rows="4" class="form-control"></textarea>
                                    </div>
                                    <div class="row date-row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">From</label>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>MM</option>
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                            <option>04</option>
                                                            <option>05</option>
                                                            <option>06</option>
                                                            <option>07</option>
                                                            <option>08</option>
                                                            <option>09</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>YYYY</option>
                                                            <option>1970</option>
                                                            <option>1971</option>
                                                            <option>1972</option>
                                                            <option>1973</option>
                                                            <option>...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">To</label>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>MM</option>
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                            <option>04</option>
                                                            <option>05</option>
                                                            <option>06</option>
                                                            <option>07</option>
                                                            <option>08</option>
                                                            <option>09</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>YYYY</option>
                                                            <option>1970</option>
                                                            <option>1971</option>
                                                            <option>1972</option>
                                                            <option>1973</option>
                                                            <option>...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">To Present?</label>
                                        <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                                        <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
                                    </div>
                                    <div class="form-group new-work-committees-group">
                                        <label class="control-label">Committee Work</label>
                                        <div class="control-add-new">
                                            <a href="#" data-section="memberships" class="show-add-committee-work size-check">New Committee Work</a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="memberships-container-add-committee-work" style="display: none;">
                                <h2>Add Committee Work</h2>
                                <form>
                                    <div class="form-group">
                                        <label class="control-label">Committee Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Role</label>
                                        <select id="inputCountry" class="form-control">
                                            <option>Select a Role</option>
                                            <option>Chair</option>
                                            <option>Co-Chair</option>
                                            <option>Officer/Board Member</option>
                                            <option>Member</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea rows="4" class="form-control"></textarea>
                                    </div>
                                    <div class="row date-row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">From</label>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>MM</option>
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                            <option>04</option>
                                                            <option>05</option>
                                                            <option>06</option>
                                                            <option>07</option>
                                                            <option>08</option>
                                                            <option>09</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>YYYY</option>
                                                            <option>1970</option>
                                                            <option>1971</option>
                                                            <option>1972</option>
                                                            <option>1973</option>
                                                            <option>...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">To</label>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>MM</option>
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                            <option>04</option>
                                                            <option>05</option>
                                                            <option>06</option>
                                                            <option>07</option>
                                                            <option>08</option>
                                                            <option>09</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>YYYY</option>
                                                            <option>1970</option>
                                                            <option>1971</option>
                                                            <option>1972</option>
                                                            <option>1973</option>
                                                            <option>...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">To Present?</label>
                                        <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                                        <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Add a Link</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </form>
                            </div>

                            <div class="memberships-container-hidden">
                                <div class="slat-group">
                                    <div class="slat-group-header-title">
                                        <h2>Memberships &amp; Associations</h2>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>You've chosen to hide this section</h3>
                                                <a href="#" class="btn btn-default btn-sm show-section" data-section="memberships">Show Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div class="memberships-container">
                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Memberships &amp; Associations</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#" data-section="memberships" class="btn btn-default btn-sm show-add size-check">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#" data-section="memberships" class="show-add size-check">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#" class="hide-section size-check" data-section="memberships">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#modal-memberships" data-section="memberships" class="btn btn-default btn-sm show-add size-check">Add Memberships &amp; Associations</a> <a href="#" class="btn btn-default btn-sm hide-section size-check" data-section="memberships">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div style="display: none">
                                <div class="section-footer-memberships">
                                    <div class="memberships-next-step">
                                        <a class="wizard-nav-link btn btn-success size-check" href="#" data-rel="teaching"><span class="button-label">Next: </span>Teaching & Preceptorship</a>
                                        <a class="btn btn-default" href="#" onClick ="window.parent.closeModal(); return false;">Finished</a>
                                    </div>
                                    <div class="memberships-save-experience">
                                        <a class="btn btn-success size-check hide-add" href="#" data-section="memberships"><span class="button-label">Save</a>
                                        <a class="btn btn-default hide-add size-check" href="#" data-section="memberships">Cancel</a></span>
                                    </div>
                                    <div class="memberships-committee-work-experience">
                                        <a class="btn btn-success size-check hide-add-committee-work" href="#" data-section="memberships"><span class="button-label">Save</a>
                                        <a class="btn btn-success size-check show-add-committee-work" href="#" data-section="memberships"><span class="button-label">Save and Add Another</a>
                                        <a class="btn btn-default hide-add-committee-work size-check" href="#" data-section="memberships">Cancel</a>
                                    </div>
                                </div>
                            </div>

                        </section>
                        <!-- /WIZARD GROUP -->


                        <!-- WIZARD GROUP TEACHING & PRECEPTORSHIPS -->
                        <section class="section wizard-group" id="teaching">

                            <div class="teaching-container-add" style="display: none;">
                                <h2>Add Teaching &amp; Preceptorship</h2>
                                <form>
                                    <div class="form-group">
                                        <label class="control-label">Activity Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Presentation/Instruction Type</label>
                                        <select class="form-control">
                                            <option>Select a Presentation/Instruction Type</option>
                                            <option>Poster</option>
                                            <option>Invited</option>
                                            <option>Community/Patient Education</option>
                                            <option>Other Activity Name</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Author(s)/Contributors</label>
                                        <textarea rows="4" class="form-control"></textarea>
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

                                    <div class="row date-row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">From</label>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>MM</option>
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                            <option>04</option>
                                                            <option>05</option>
                                                            <option>06</option>
                                                            <option>07</option>
                                                            <option>08</option>
                                                            <option>09</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>YYYY</option>
                                                            <option>1970</option>
                                                            <option>1971</option>
                                                            <option>1972</option>
                                                            <option>1973</option>
                                                            <option>...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">To</label>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>MM</option>
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                            <option>04</option>
                                                            <option>05</option>
                                                            <option>06</option>
                                                            <option>07</option>
                                                            <option>08</option>
                                                            <option>09</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <select class="form-control">
                                                            <option disabled selected>YYYY</option>
                                                            <option>1970</option>
                                                            <option>1971</option>
                                                            <option>1972</option>
                                                            <option>1973</option>
                                                            <option>...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Is Current?</label>
                                        <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                                        <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Link</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </form>
                            </div>

                            <div class="teaching-container-hidden">
                                <div class="slat-group">
                                    <div class="slat-group-header-title">
                                        <h2>Teaching &amp; Preceptorship</h2>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>You've chosen to hide this section</h3>
                                                <a href="#" class="btn btn-default btn-sm show-section" data-section="teaching">Show Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div class="teaching-container">

                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Teaching &amp; Preceptorship</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default btn-sm show-add size-check" data-section="teaching">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#" class="show-add size-check" data-section="teaching">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#" class="hide-section size-check" data-section="teaching">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#modal-teaching" class="btn btn-default btn-sm show-add size-check" data-section="teaching">Add Teaching &amp; Preceptorship</a>
                                                <a href="#" class="btn btn-default btn-sm hide-section size-check" data-section="teaching">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div style="display: none">
                                <div class="section-footer-teaching">
                                    <div class="teaching-next-step">
                                        <a class="wizard-nav-link btn btn-success size-check" href="#" data-rel="publications"><span class="button-label">Next: </span>Publications &amp; Research</a>
                                        <a class="btn btn-default" href="#" onClick ="window.parent.closeModal(); return false;">Finished</a>
                                    </div>

                                    <div class="teaching-save-experience">
                                        <a class="btn btn-success size-check hide-add" href="#" data-section="teaching"><span class="button-label">Save</a>
                                        <a class="btn btn-default hide-add size-check" href="#" data-section="teaching">Cancel</a>
                                    </span>
                                </div>
                            </div>

                        </section>
                        <!-- /WIZARD GROUP RESUCITATION PROGRAMS -->

                        <!-- WIZARD GROUP PUBLICATIONS -->
                        <section class="section wizard-group" id="publications">

                            <div class="publications-container-add" style="display: none;">
                                <h2>Add a Publication</h2>
                                <form>
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
                                        <label class="control-label">Publication Title</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Author(s)/Editor(s)/Contributors</label>
                                        <textarea rows="4" class="form-control"></textarea>
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
                                        <label class="control-label">Journal Title</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Published?</label>
                                        <input type="checkbox" name="Press" value="Yes" class="published"> Yes
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Link</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">IRB Approved</label>
                                        <input type="checkbox" name="Press" value="Yes" class="irb-approved"> Yes
                                    </div>
                                    <div class="irb-options">
                                        <div class="form-group">
                                            <label class="control-label">IRB Approval Date</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Study Complete</label>
                                            <input type="checkbox" name="irb-study-complete" value="Yes"> Yes
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Nurse Principle Investigator</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </form>
                            </div>


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
                                                <a href="#" data-section="publications" class="btn btn-default btn-sm show-add size-check">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#" data-section="publications" class="show-add size-check">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#" class="hide-section size-check" data-section="publications">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#modal-publications" data-section="publications" class="btn btn-default btn-sm show-add size-check">Add Publications</a> <a href="#" class="btn btn-default btn-sm hide-section size-check" data-section="publications">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div style="display: none">
                                <div class="section-footer-publications">
                                    <div class="publications-next-step">
                                        <a class="wizard-nav-link btn btn-success size-check" href="#" data-rel="awards"><span class="button-label">Next: </span>Awards &amp; Recognition</a>
                                        <a class="btn btn-default" href="#" onClick ="window.parent.closeModal(); return false;">Finished</a>
                                    </div>
                                    <div class="publications-save-experience">
                                        <a class="btn btn-success size-check hide-add" href="#" data-section="publications"><span class="button-label">Save</a>
                                        <a class="btn btn-default hide-add size-check" href="#" data-section="publications">Cancel</a></span>
                                    </div>
                                </div>
                            </div>

                        </section>
                        <!-- /WIZARD GROUP PUBLICATIONS -->

                        <!-- WIZARD GROUP AWARDS AND RECOGNITION -->
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
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>Not Yet Available, Coming Soon.</h3>
                                                <a href="#" class="btn btn-default btn-sm hide-section size-check" data-section="awards">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div style="display: none">
                                <div class="section-footer-awards">
                                    <div class="licenses-next-step">
                                        <a class="wizard-nav-link btn btn-success size-check" href="#" data-rel="other"><span class="button-label">Next: </span>Other</a>
                                        <a class="btn btn-default" href="#" onClick ="window.parent.closeModal(); return false;">Finished</a>
                                    </div>
                                </div>
                            </div>

                        </section>
                        <!-- /WIZARD GROUP AWARDS & RECOGNITION -->

                        <!-- WIZARD GROUP OTHER -->
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
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message">
                                                <h3>Not Yet Available, Coming Soon.</h3>
                                                <a href="#" class="btn btn-default btn-sm hide-section size-check" data-section="other">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </div>

                            <div style="display: none">
                                <div class="section-footer-other">
                                    <div class="licenses-next-step">
                                        <a class="btn btn-default" href="#" onClick ="window.parent.closeModal(); return false;">Finished</a>
                                    </div>
                                </div>
                            </div>

                        </section>
                        <!-- /WIZARD GROUP OTHER -->



                    </section>
                </div>
            </div>
        </section>
    </div><!-- /container -->
</div> <!-- /layout -->

<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script src="/scripts/prototype.portfolio.wizard.modal-phase-1.js"></script>
<?= createSiteEnd(); ?>
