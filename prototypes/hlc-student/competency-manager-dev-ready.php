<?php

    include "includes/helpers/helpers.php";
    $patterns['start']['title'] = 'Competency Manager';
    $patterns['header']['classes'] = array (
        'site-header-min',
        'cmgr-site__header'
    );
    $patterns['footer']['classes'] = array (
        'site-footer-min',
        'cmgr-site__footer'
    );

    $tags = array (
        'Case Manager Care',
        'Critical Care',
        'Emergency Medicine',
        'Registered Nurse',
        'Airway Management',
        'Blood Transfusion',
        'Care Cordination',
        'Cardiac Rythms',
        'Documentation and Reporting',
        'Diabetes Care',
        'Discharge Planning',
        'Enteral/Parenteral Nutrition',
        'Research and Evidence',
        'Telemetry',
        'Trauma Intensive Care',
    );

    $mov = array (
        'Checklist',
        'Judgement Assessment',
        'Knowledge Assessment',
        'Skills Assessment',
        'Skills Self-Assessment',
    );

    $mor = array (
        'Checklist',
        'Course',
        'Preceptor Live, Simulation',
    );

?>
<?= createSiteStart($patterns['start']); ?>
<link rel="stylesheet" type="text/css" href="/content/styles/healthstream.cmgr.css">
<?= createHeader($patterns['header']); ?>
<div class="layout layout-min">
    <div class="container">
        <section class="section section-box">

            <!-- FILTERS -->
            <section class="cmgr-filters">
                <div class="cmgr-filters__group">
                    <label class="cmgr-filters__label">Tags</label>
                    <select class="form-control select2" multiple>
                        <?php foreach($tags as $tag){ ?>
                        <option><?php echo $tag ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="cmgr-filters__group">
                    <label class="cmgr-filters__label">Status</label>
                    <select class="form-control">
                        <option>All</option>
                        <option>Draft</option>
                        <option>Published</option>
                    </select>
                </div>
                <div class="cmgr-filters__group">
                    <label class="cmgr-filters__label">Search</label>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
                <div class="cmgr-filters__group">
                    <button class="btn btn-default">Clear</button>
                </div>
            </section>

            <!-- EXISITING COMPETENCIES -->
            <section class="section">

                <div class="cmgr-section__header">
                    <h2>Competencies</h2>
                    <button class="btn btn-sm btn-success js-competency-add">Add Competency</button>
                </div>

                <table class="table cmgr-table">
                    <thead>
                        <tr>
                            <th>Competency Name</th>
                            <th>Tags</th>
                            <th>Status</th>
                            <th>Last Updated</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cmgr-competency__summary is-stripe">
                            <td>Airway Management</td>
                            <td class="is-large">
                                <span class="label label-info">Registered Nurse</span>
                                <span class="label label-info">Critical Care</span>
                                <span class="label label-info">Airway Management</span>
                            </td>
                            <td class="is-large">Draft</td>
                            <td class="is-large">5/10/2018 9:00 AM</td>
                            <td class="is-small" colspan="3"></td>
                            <td>
                                <button class="btn btn-sm btn-default js-competency-edit">
                                    <i class="fa fa-pencil"></i>
                                </button>
                                 <button class="btn btn-sm btn-default is-large js-toggle-detail">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="cmgr-competency__detail">
                            <td colspan="5">
                                <div class="cmgr-competency__collapse">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <section class="section">
                                                <div class="cmgr-section__header">
                                                    <h4>Description</h4>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </p>
                                            </section>
                                        </div>
                                        <div class="col-sm-8">
                                            <section class="section">
                                                <div class="cmgr-section__header">
                                                    <h4>Components</h4>
                                                </div>
                                                <div class="cmgr-cards">
                                                    <div class="cmgr-card">
                                                        <div class="cmgr-card__container" data-type="1">
                                                            <div class="cmgr-card__type">Knowledge</div>
                                                            <div class="cmgr-card__group">
                                                                <div class="cmgr-card__group-title">Method of Validation</div>
                                                                <div class="cmgr-card__group-labels">
                                                                    <span class="label label-info">Knowledge Assessment</span>
                                                                </div>
                                                            </div>
                                                            <div class="cmgr-card__group">
                                                                <div class="cmgr-card__group-title">Method of Remediation</div>
                                                                <div class="cmgr-card__group-labels">
                                                                    <span class="label label-info">Checklist</span>
                                                                    <span class="label label-info">Course</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="cmgr-card">
                                                        <div class="cmgr-card__container" data-type="1">
                                                            <div class="cmgr-card__type">Judgement</div>
                                                            <div class="cmgr-card__group">
                                                                <div class="cmgr-card__group-title">Method of Validation</div>
                                                                <div class="cmgr-card__group-labels">
                                                                    <span class="label label-info">Judgement Assessment</span>
                                                                </div>
                                                            </div>
                                                            <div class="cmgr-card__group">
                                                                <div class="cmgr-card__group-title">Method of Remediation</div>
                                                                <div class="cmgr-card__group-labels">
                                                                    <span class="label label-info">Checklist</span>
                                                                    <span class="label label-info">Course</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="cmgr-card">
                                                        <div class="cmgr-card__container" data-type="1">
                                                            <div class="cmgr-card__type">Skill</div>
                                                            <div class="cmgr-card__group">
                                                                <div class="cmgr-card__group-title">Method of Validation</div>
                                                                <div class="cmgr-card__group-labels">
                                                                    <span class="label label-info">Skills Self-Assessment</span>
                                                                </div>
                                                            </div>
                                                            <div class="cmgr-card__group">
                                                                <div class="cmgr-card__group-title">Method of Remediation</div>
                                                                <div class="cmgr-card__group-labels">
                                                                    <span class="label label-info">Course</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="cmgr-card">
                                                        <div class="cmgr-card__container" data-type="1">
                                                            <div class="cmgr-card__type">Skill</div>
                                                            <div class="cmgr-card__group">
                                                                <div class="cmgr-card__group-title">Method of Validation</div>
                                                                <div class="cmgr-card__group-labels">
                                                                    <span class="label label-info">Skills Assessment</span>
                                                                </div>
                                                            </div>
                                                            <div class="cmgr-card__group">
                                                                <div class="cmgr-card__group-title">Method of Remediation</div>
                                                                <div class="cmgr-card__group-labels">
                                                                    <span class="label label-info">Checklist</span>
                                                                    <span class="label label-info">Course</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>

                                </div>
                            </td>
                        </tr>
                        <tr class="cmgr-competency__summary">
                            <td>Arrythmia Interpretation</td>
                            <td class="is-large">
                                <span class="label label-info">Registered Nurse</span>
                                <span class="label label-info">Critical Care</span>
                                <span class="label label-info">Cardiac Rhythms</span>
                            </td>
                            <td class="is-large">Published</td>
                            <td class="is-large">5/10/2018 9:00 AM</td>
                            <td class="is-small" colspan="3"></td>
                            <td>
                                <button class="btn btn-sm btn-default js-competency-edit">
                                    <i class="fa fa-pencil"></i>
                                </button>
                                 <button class="btn btn-sm btn-default is-large js-toggle-detail">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="cmgr-competency__detail">
                            <td colspan="5">
                                <div class="cmgr-competency__collapse">

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <section class="section">
                                                <div class="cmgr-section__header">
                                                    <h4>Description</h4>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </p>
                                            </section>
                                        </div>
                                        <div class="col-sm-8">
                                            <section class="section">
                                                <div class="cmgr-section__header">
                                                    <h4>Components</h4>
                                                </div>
                                                <div class="cmgr-cards">
                                                    <div class="cmgr-card">
                                                        <div class="cmgr-card__container" data-type="1">
                                                            <div class="cmgr-card__type">Knowledge</div>
                                                            <div class="cmgr-card__group">
                                                                <div class="cmgr-card__group-title">Method of Validation</div>
                                                                <div class="cmgr-card__group-labels">
                                                                    <span class="label label-info">Knowledge Assessment</span>
                                                                </div>
                                                            </div>
                                                            <div class="cmgr-card__group">
                                                                <div class="cmgr-card__group-title">Method of Remediation</div>
                                                                <div class="cmgr-card__group-labels">
                                                                    <span class="label label-info">Checklist</span>
                                                                    <span class="label label-info">Course</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="cmgr-card">
                                                        <div class="cmgr-card__container" data-type="1">
                                                            <div class="cmgr-card__type">Judgement</div>
                                                            <div class="cmgr-card__group">
                                                                <div class="cmgr-card__group-title">Method of Validation</div>
                                                                <div class="cmgr-card__group-labels">
                                                                    <span class="label label-info">Judgement Assessment</span>
                                                                </div>
                                                            </div>
                                                            <div class="cmgr-card__group">
                                                                <div class="cmgr-card__group-title">Method of Remediation</div>
                                                                <div class="cmgr-card__group-labels">
                                                                    <span class="label label-info">Checklist</span>
                                                                    <span class="label label-info">Course</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="cmgr-card">
                                                        <div class="cmgr-card__container" data-type="1">
                                                            <div class="cmgr-card__type">Skill</div>
                                                            <div class="cmgr-card__group">
                                                                <div class="cmgr-card__group-title">Method of Validation</div>
                                                                <div class="cmgr-card__group-labels">
                                                                    <span class="label label-info">Skills Self-Assessment</span>
                                                                </div>
                                                            </div>
                                                            <div class="cmgr-card__group">
                                                                <div class="cmgr-card__group-title">Method of Remediation</div>
                                                                <div class="cmgr-card__group-labels">
                                                                    <span class="label label-info">Course</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="cmgr-card">
                                                        <div class="cmgr-card__container" data-type="1">
                                                            <div class="cmgr-card__type">Skill</div>
                                                            <div class="cmgr-card__group">
                                                                <div class="cmgr-card__group-title">Method of Validation</div>
                                                                <div class="cmgr-card__group-labels">
                                                                    <span class="label label-info">Skills Assessment</span>
                                                                </div>
                                                            </div>
                                                            <div class="cmgr-card__group">
                                                                <div class="cmgr-card__group-title">Method of Remediation</div>
                                                                <div class="cmgr-card__group-labels">
                                                                    <span class="label label-info">Checklist</span>
                                                                    <span class="label label-info">Course</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>

                                </div>
                            </td>
                        </tr>
                        <tr class="cmgr-competency__summary is-stripe">
                            <td>Communication</td>
                            <td class="is-large">
                                <span class="label label-info">Communication</span>
                            </td>
                            <td class="is-large">Published</td>
                            <td class="is-large">5/10/2018 9:00 AM</td>
                            <td class="is-small" colspan="3"></td>
                            <td>
                                <button class="btn btn-sm btn-default js-competency-edit">
                                    <i class="fa fa-pencil"></i>
                                </button>
                                 <button class="btn btn-sm btn-default is-large js-toggle-detail">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="cmgr-competency__detail">
                            <td colspan="5">
                                <div class="cmgr-competency__collapse">

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <section class="section">
                                                <div class="cmgr-section__header">
                                                    <h4>Description</h4>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </p>
                                            </section>
                                        </div>
                                        <div class="col-sm-8">
                                            <section class="section">
                                                <div class="cmgr-section__header">
                                                    <h4>Components</h4>
                                                </div>
                                                <div class="cmgr-cards">

                                                    <div class="cmgr-card">
                                                        <div class="cmgr-card__container" data-type="1">
                                                            <div class="cmgr-card__type">Skill</div>
                                                            <div class="cmgr-card__group">
                                                                <div class="cmgr-card__group-title">Method of Validation</div>
                                                                <div class="cmgr-card__group-labels">
                                                                    <span class="label label-info">Skills Assessment</span>
                                                                </div>
                                                            </div>
                                                            <div class="cmgr-card__group">
                                                                <div class="cmgr-card__group-title">Method of Remediation</div>
                                                                <div class="cmgr-card__group-labels">
                                                                    <span class="label label-info">Checklist</span>
                                                                    <span class="label label-info">Course</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </section>
                                        </div>
                                    </div>

                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- PAGINATION -->
            <section class="section">
                <!-- stickybar -->
                <div class="stickybar">
                    <div class="stickybar-floater">
                        <div class="stickybar-outer">
                            <div class="stickybar-inner">
                                <div class="stickybar-left"></div>
                                <div class="stickybar-right">
                                    <div class="hidden-xs hidden-sm">
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-10 of 15 <i class="fa fa-caret-up"></i></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="active"><a href="#">10 per page</a></li>
                                                <li><a href="#">50 per page</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="visible-xs visible-sm">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /stickybar -->
            </section>

        </section>
    </div><!-- /container -->
</div><!-- /layout -->

<div id="modal-competency-add" class="modal fade" tabindex="-1" aria-hidden="false" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Competency</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Competency Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Description</label>
                    <textarea class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Tags</label>
                    <select class="form-control select2" multiple>
                        <?php foreach($tags as $tag){ ?>
                        <option><?php echo $tag ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <label class="radio-inline">
                      <input type="radio" name="status" value="draft" checked> Draft
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="status" value="published"> Published
                    </label>
                </div>
                <div class="form-group">
                    <label class="form-label">Components</label>
                    <div class="cmgr-modal-components">

                        <div class="cmgr-modal-components__add">
                            <table>
                                <tr>
                                    <td>Type</td>
                                    <td>
                                        <select class="form-control input-sm" name="type">
                                            <option>Knowledge</option>
                                            <option>Judgement</option>
                                            <option>Skill</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Validation</td>
                                    <td>
                                        <select class="form-control input-sm select2" multiple name="mov">
                                            <?php foreach($mov as $option){ ?>
                                            <option><?php echo $option ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Remediation</td>
                                    <td>
                                        <select class="form-control input-sm select2" multiple name="mor">
                                            <?php foreach($mor as $option){ ?>
                                            <option><?php echo $option ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <button class="btn btn-xs btn-default js-component-add"><i class="fa fa-plus"></i></button>
                        </div>

                        <table class="cmgr-modal-components__list is-empty">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Validation</th>
                                    <th>Remediation</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-success js-competency-reset">Save and Add Another</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div id="modal-competency-edit" class="modal fade" tabindex="-1" aria-hidden="false" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Edit Competency</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Competency Name</label>
                    <input type="text" class="form-control" value="Airway Management">
                </div>
                <div class="form-group">
                    <label class="control-label">Description</label>
                    <textarea class="form-control js-edit-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Tags</label>
                    <select class="form-control select2 js-edit-tags" multiple>
                        <?php
                        $selected = array ('Registered Nurse','Critical Care','Airway Management');
                        foreach($tags as $option){ ?>
                        <option<?php echo (in_array($option, $selected))?' selected':'';?>><?php echo $option ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <label class="radio-inline">
                      <input class="js-edit-status" type="radio" name="status" value="draft" checked> Draft
                    </label>
                    <label class="radio-inline">
                      <input class="js-edit-status" type="radio" name="status" value="published"> Published
                    </label>
                </div>
                <div class="form-group">
                    <label class="form-label">Components</label>
                    <div class="cmgr-modal-components">

                        <div class="cmgr-modal-components__add">
                            <table>
                                <tr>
                                    <td>Type</td>
                                    <td>
                                        <select class="form-control input-sm" name="type">
                                            <option>Knowledge</option>
                                            <option>Judgement</option>
                                            <option>Skill</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Validation</td>
                                    <td>
                                        <select class="form-control input-sm select2" multiple name="mov">
                                            <?php foreach($mov as $option){ ?>
                                            <option><?php echo $option ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Remediation</td>
                                    <td>
                                        <select class="form-control input-sm select2" multiple name="mor">
                                            <?php foreach($mor as $option){ ?>
                                            <option><?php echo $option ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <button class="btn btn-xs btn-default js-component-add"><i class="fa fa-plus"></i></button>
                        </div>

                        <table class="cmgr-modal-components__list">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Validation</th>
                                    <th>Remediation</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Knowledge</td>
                                    <td>Knowledge Assessment</td>
                                    <td>Checklist, Course</td>
                                    <td><button class="btn btn-xs btn-danger js-component-remove"><i class="fa fa-times"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Judgement</td>
                                    <td>Judgement Assessment</td>
                                    <td>Checklist, Course</td>
                                    <td><button class="btn btn-xs btn-danger js-component-remove"><i class="fa fa-times"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Skill</td>
                                    <td>Skills Self-Assessment</td>
                                    <td>Course</td>
                                    <td><button class="btn btn-xs btn-danger js-component-remove"><i class="fa fa-times"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Skill</td>
                                    <td>Skills Assessment</td>
                                    <td>Checklist, Course</td>
                                    <td><button class="btn btn-xs btn-danger js-component-remove"><i class="fa fa-times"></i></button></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<?= createFooter($patterns['footer']); ?>
<?= createSiteScripts(); ?>
<script>
    $('.js-toggle-detail').on('click',function(){
        var $btn = $(this);
        var $summary = $btn.closest('tr');
        var $detail = $summary.next('tr').find('.cmgr-competency__collapse');
        var icon = $btn.html();

        if ( icon.indexOf('down') > -1 ) {
            icon = icon.replace('down','up');
        } else {
            icon = icon.replace('up','down');
        }
        $summary.toggleClass('is-expanded');
        $detail.slideToggle(200);
        $btn.html(icon);
    });

    $('.select2').select2();

    $('.js-competency-add').on('click',function() {
        $('#modal-competency-add').modal('show');
    });

    $('.js-competency-edit').on('click',function() {
        $('#modal-competency-edit').modal('show');
    });

    $('.js-competency-reset').on('click',function() {
        var $modal = $('#modal-competency-add');
        var $list = $modal.find('.cmgr-modal-components__list');

        $modal.find('input,textarea,select').val('').trigger('change');
        $list.addClass('is-empty').find('tbody').empty();

    });

    $('.cmgr-modal-components')
        .on('click','.js-component-add',function() {
            var $control =  $(this).closest('.cmgr-modal-components');
            var $list = $control.find('.cmgr-modal-components__list');
            var $components = $list.find('tbody');
            var type = $control.find('select[name="type"]').val();
            var mov = $control.find('select[name="mov"]').val();
            var mor = $control.find('select[name="mor"]').val();
            var count = $components.find('tr').length;

            var html = '';
            html += '<tr>';
            html += '<td>'+type+'</td>';
            html += '<td>'+((mov)?mov:'')+'</td>';
            html += '<td>'+((mor)?mor:'')+'</td>';
            html += '<td><button class="btn btn-xs btn-danger js-component-remove"><i class="fa fa-times"></i></button></td>';
            html += '</tr>';

            $components.append(html);

            if ( count === 0 ) {
                $list.toggleClass('is-empty');
            }
        })
        .on('click','.js-component-remove',function() {
            var $row = $(this).closest('tr');
            var $list = $(this).closest('.cmgr-modal-components__list');
            var count = $list.find('tbody tr').length;

            $row.hide(function(){
               $row.remove();
            });

            if ( count === 1) {
                $list.toggleClass('is-empty');
            }

        });



</script>
<?= createSiteEnd(); ?>