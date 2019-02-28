<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'My Portfolio';
$patterns['header']['mainNavActive'] = 'profile';
$patterns['focus']['title'] = 'My Portfolio';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<style>
    .with {
        display: none;
    }
    .list-links {
        margin-bottom: 20px;
    }
    .modal-footer.alt, .irb-options {
        display: none;
    }
</style>


<!-- MODAL LIST -->
<div class="layout layout-search">
    <div class="container">
        <section class="section section-main section-box">
            <h3>Committee Work</h3>
            <ul class="list-links">
                <li><a href="#modal-committee-work" data-toggle="modal" class="without-list">No Associated Membership/Association</a></li>
                <li><a href="#modal-committee-work" data-toggle="modal" class="without-list without-data">No Associated Membership/Association and no existing Memberships</a></li>
                <li><a href="#modal-committee-work" data-toggle="modal" class="with-list">With Associated Membership/Association - Only one allowed, so no link to add more until user deletes attached</a></li>
                <li><a href="#modal-committee-work" data-toggle="modal" class="without-list hide-control">With Membership Selection Hidden - Modal launched from Memberships modal</a></li>
            </ul>

            <h3>Memberships &amp; Associtions</h3>
            <ul class="list-links">
                <li><a href="#modal-memberships" data-toggle="modal" class="without-list">No Associated Committees</a></li>
                <li><a href="#modal-memberships" data-toggle="modal" class="without-list without-data">No Associated Committees and no existing Committeess</a></li>
                <li><a href="#modal-memberships" data-toggle="modal" class="with-list">With Associated Committees - Multiples Allowed</a></li>
                <li><a href="#modal-memberships" data-toggle="modal" class="with-list without-data">With Associated Committees - Multiples Allowed - and no other existing committees</a></li>
                <li><a href="#modal-memberships" data-toggle="modal" class="without-list hide-control alt-footer">With Committee Selection Hidden - Modal launched from Committee modal</a></li>
            </ul>

            <h3>Work Experience</h3>
            <ul class="list-links">
                <li><a href="#modal-work-experience" data-toggle="modal" class="without-list">Professsion without Specialty - Expanded State Shown</a></li>
                <li><a href="#modal-work-experience" data-toggle="modal" class="with-list">Professsion with Specialty - Expanded State Shown</a></li>
            </ul>

            <h3>Education</h3>
            <ul class="list-links">
                <li><a href="#modal-education" data-toggle="modal" class="without-list">Only State</a></li>
            </ul>

            <h3>Licenses</h3>
            <ul class="list-links">
                <li><a href="#modal-licenses" data-toggle="modal" class="without-list">Without Associated Attachments</a></li>
                <li><a href="#modal-licenses" data-toggle="modal" class="without-list without-data">Without Associated Attachments and no existing documents</a></li>
                <li><a href="#modal-licenses" data-toggle="modal" class="with-list">With Associated Attachments</a></li>
                <li><a href="#modal-licenses" data-toggle="modal" class="with-list without-data">With Associated Attachments and no other esisting documents</a></li>
            </ul>

            <h3>Certifications</h3>
            <ul class="list-links">
                <li><a href="#modal-certifications" data-toggle="modal" class="without-list">Without Associated Attachments</a></li>
                <li><a href="#modal-certifications" data-toggle="modal" class="without-list without-data">Without Associated Attachments and no existing documents</a></li>
                <li><a href="#modal-certifications" data-toggle="modal" class="with-list">With Associated Attachments</a></li>
                <li><a href="#modal-certifications" data-toggle="modal" class="with-list without-data">With Associated Attachments and no other esisting documents</a></li>
            </ul>

            <h3>Resucitation Programs</h3>
            <ul class="list-links">
                <li><a href="#modal-resucitation-programs" data-toggle="modal" class="without-list">Without Associated Attachments</a></li>
                <li><a href="#modal-resucitation-programs" data-toggle="modal" class="without-list without-data">Without Associated Attachments and no existing documents</a></li>
                <li><a href="#modal-resucitation-programs" data-toggle="modal" class="with-list">With Associated Attachments</a></li>
                <li><a href="#modal-resucitation-programs" data-toggle="modal" class="with-list without-data">With Associated Attachments and no other existing documents</a></li>
            </ul>

            <h3>Volunteer Service</h3>
            <ul class="list-links">
                <li><a href="#modal-activities" data-toggle="modal" class="without-list">Without Associated Attachments</a></li>
                <li><a href="#modal-activities" data-toggle="modal" class="without-list without-data">Without Associated Attachments and no existing documents</a></li>
                <li><a href="#modal-activities" data-toggle="modal" class="with-list">With Associated Attachments</a></li><li><a href="#modal-activities" data-toggle="modal" class="with-list without-data">With Associated Attachments and no other existing documents</a></li>
            </ul>

            <h3>Teaching &amp; Preceptorship</h3>
            <ul class="list-links">
                <li><a href="#modal-teaching" data-toggle="modal" class="without-list">Only State</a></li>
            </ul>

            <h3>Publications &amp; Research</h3>
            <ul class="list-links">
                <li><a href="#modal-publications" data-toggle="modal" class="without-list">Only State</a></li>
            </ul>

            <h3>Awards &amp; Recognition</h3>
            <ul class="list-links">
                <li><a href="#modal-awards" data-toggle="modal" class="without-list">Without Associated Attachments</a></li>
                <li><a href="#modal-awards" data-toggle="modal" class="without-list without-data">Without Associated Attachments and no existing documents</a></li>
                <li><a href="#modal-awards" data-toggle="modal" class="with-list">With Associated Attachments</a></li>
                <li><a href="#modal-awards" data-toggle="modal" class="with-list without-data">With Associated Attachments and no other existing documents</a></li>
            </ul>

            <h3>Other</h3>
            <ul class="list-links">
                <li><a href="#modal-other" data-toggle="modal" class="without-list">Without Associated Attachments</a></li>
                <li><a href="#modal-other" data-toggle="modal" class="without-list without-data">Without Associated Attachments and no existing documnts</a></li>
                <li><a href="#modal-other" data-toggle="modal" class="with-list">With Associated Attachments</a></li>
                <li><a href="#modal-other" data-toggle="modal" class="with-list without-data">With Associated Attachments and no other existing documents</a></li>
            </ul>

            <hr>

            <h3>Document Modals</h3>
            <ul class="list-links">
                <li><a href="#modal-documents" data-toggle="modal">Attach Documents</a></li>
                <li><a href="#modal-document-add" data-toggle="modal">New Document</a></li>
            </ul>
        </section>
    </div>
</div>
<!-- /MODAL LIST -->

<!-- MODALS -->

<!-- Modal Committee Work -->
<div id="modal-committee-work" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Committee Work</h4>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="control-label">Committee Name</label>
                        <input type="text" class="form-control" value="Sample Committee One">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Committee Type</label>
                        <select class="form-control">
                            <option>Select a Committee Type</option>
                            <option selected>National Organization</option>
                            <option>Local or State Organization</option>
                            <option>Facility or Workplace Committee</option>
                            <option>Fraternity</option>
                            <option>Sorority</option>
                            <option>Alumni Organization</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Organization/Work Group</label>
                        <input type="text" class="form-control" value="Internal Services">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Role</label>
                        <select id="inputCountry" class="form-control">
                            <option>Select a Role</option>
                            <option selected="">Chair</option>
                            <option>Co-Chair</option>
                            <option>Officer/Board Member</option>
                            <option>Member</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea rows="4" class="form-control">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras est dolor, commodo ac dignissim et, porta quis augue. Maecenas ligula sem, porttitor non justo ut, ornare tempor nibh. Sed fermentum vehicula lectus, sed auctor sem mollis ac.</textarea>
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
                                            <option selected>03</option>
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
                                            <option>1974</option>
                                            <option>...</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option selected>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
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
                                            <option disabled>MM</option>
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
                                            <option selected>12</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-6">
                                        <select class="form-control">
                                            <option disabled>YYYY</option>
                                            <option>1970</option>
                                            <option>1971</option>
                                            <option>1972</option>
                                            <option>1973</option>
                                            <option>1974</option>
                                            <option>...</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option selected>2015</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">To Present?</label>
                        <label class="radio-inline"><input type="radio" name="optradio" checked="checked">Yes</label>
                        <label class="radio-inline"><input type="radio" name="optradio">No</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Add a Link</label>
                        <input type="text" class="form-control" value="http://www.samplelink.com">
                    </div>
                    <div class="form-group new-memberships-group hide-group">
                        <label class="control-label">Membership/Association</label>
                        <div class="control-add-new without">
                            <span class="no-data"><a href="#">Attach Membership/Association</a> |</span> <a href="#">New Membership/Association</a>
                        </div>
                        <div class="control-add-new with">
                            <ul class="control-attachments control-attachments">
                                <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button>Sample Membership One</li>
                            </ul>
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

<!-- Modal Memberships -->
<div id="modal-memberships" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Memberships &amp; Associations</h4>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="control-label">Organization Name</label>
                        <input type="text" class="form-control" value="Sample Organization One">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Membership Type</label>
                        <select class="form-control">
                            <option>Select a Membership Type</option>
                            <option selected>National Organization</option>
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
                            <option selected="">Co-Chair</option>
                            <option>Officer/Board Member</option>
                            <option>Member</option>
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
                        <label class="control-label">City</label>
                        <input type="text" class="form-control" value="Nashville">
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
                            <option value="TN" selected>Tennessee</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea rows="4" class="form-control">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras est dolor, commodo ac dignissim et, porta quis augue. </textarea>
                    </div>
                    <div class="row date-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">From</label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <select class="form-control">
                                            <option disabled>MM</option>
                                            <option selected>01</option>
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
                                            <option disabled>YYYY</option>
                                            <option>1970</option>
                                            <option>1971</option>
                                            <option>1972</option>
                                            <option>1973</option>
                                            <option>1974</option>
                                            <option>...</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option selected>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
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
                                            <option disabled>MM</option>
                                            <option selected>01</option>
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
                                            <option disabled>YYYY</option>
                                            <option>1970</option>
                                            <option>1971</option>
                                            <option>1972</option>
                                            <option>1973</option>
                                            <option>1974</option>
                                            <option>...</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option selected>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">To Present?</label>
                        <label class="radio-inline"><input type="radio" name="optradio2">Yes</label>
                        <label class="radio-inline"><input type="radio" name="optradio2" checked="checked">No</label>
                    </div>
                    <div class="form-group new-work-committees-group hide-group">
                        <label class="control-label">Committee Work</label>
                        <div class="control-add-new without">
                            <span class="no-data"><a href="#">Attach Committee Work</a> |</span> <a href="#">New Committee Work</a>
                        </div>
                        <div class="control-add-new with">
                            <ul class="control-attachments control-attachments">
                                <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button>Sample Committee One</li>
                                <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button>Sample Committee Two</li>
                                <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button>Sample Committee Three</li>
                            </ul>
                            <span class="no-data"><a href="#">Attach Committee Work</a> |</span> <a href="#">New Committee Work</a>
                        </div>
                    </div>
                <form>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
            <div class="modal-footer alt">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a class="btn btn-success" href="#">Save and Add Another</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Work Experience -->
<div id="modal-work-experience" class="modal fade layout-wizard" tabindex="-1">
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
                        <form>
                            <div class="form-group">
                                <label class="control-label">Profession</label>
                                <select class="form-control without">
                                    <option>Choose a Profession</option>
                                    <option>Surgeon: With a specialty</option>
                                    <option selected>Nurse: Without a specialty</option>
                                    <option>Has no specialty</option>
                                    <option>Nurse: Has specialty</option>
                                </select>
                                <select class="form-control with">
                                    <option>Choose a Profession</option>
                                    <option selected>Surgeon: With a specialty</option>
                                    <option>Profession: Without a specialty</option>
                                    <option>Has no specialty</option>
                                    <option>Nurse: Has specialty</option>
                                </select>
                            </div>
                            <div class="form-group surgeon with">
                                <label class="control-label">Specialty</label>
                                <select class="form-control">
                                    <option>Choose a Surgeon Specialty</option>
                                    <option>Specialty One</option>
                                    <option selected>Specialty Two</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Settings</label>
                                <select class="form-control">
                                    <option>Choose a Setting</option>
                                    <option>Setting One</option>
                                    <option selected="">Setting Two</option>
                                    <option>Setting Three</option>
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
                                                    <option disabled>MM</option>
                                                    <option selected>01</option>
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
                                                    <option disabled>YYYY</option>
                                                    <option>1970</option>
                                                    <option>1971</option>
                                                    <option>1972</option>
                                                    <option>1973</option>
                                                    <option>1974</option>
                                                    <option>...</option>
                                                    <option>2010</option>
                                                    <option>2011</option>
                                                    <option>2012</option>
                                                    <option selected>2013</option>
                                                    <option>2014</option>
                                                    <option>2015</option>
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
                                                    <option selected="">07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-6">
                                                <select class="form-control">
                                                    <option disabled>YYYY</option>
                                                    <option>1970</option>
                                                    <option>1971</option>
                                                    <option>1972</option>
                                                    <option>1973</option>
                                                    <option>1974</option>
                                                    <option>...</option>
                                                    <option>2010</option>
                                                    <option>2011</option>
                                                    <option>2012</option>
                                                    <option>2013</option>
                                                    <option>2014</option>
                                                    <option selected="">2015</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">I Currently Work Here?</label>
                                <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                                <label class="radio-inline"><input type="radio" name="optradio" checked="checked">No</label>
                            </div>

                            <div class="experience-additional-info collapse-group in" style="height: auto;">

                                <div class="form-group">
                                    <label class="control-label">Company Name</label>
                                    <input type="text" class="form-control" value="ACME Medical">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Title</label>
                                    <input type="text" class="form-control with" value="Chief of Neurology">
                                    <input type="text" class="form-control without" value="LPN">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Location</label>
                                    <input type="text" class="form-control" value="St. Mary's Hospital">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Country</label>
                                    <select id="inputCountry" class="form-control">
                                        <option selected>United States</option>
                                        <option>Canada</option>
                                        <option>Australia</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">State</label>
                                    <select class="form-control">
                                        <option value="AL" selected>Alabama</option>
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

                            <a href="#" class="collapse-toggle" data-toggle-text="Show additional information|Hide additional information">Hide additional information</a>
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

<!-- Modal Education -->
<div id="modal-education" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Education</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="control-label">School Name</label>
                        <input type="text" name="schoolname" class="form-control" value="University of Texas at Austin">
                    </div>
                    <div class="form-group">
                        <label class="control-label">City</label>
                        <input type="text" name="city" class="form-control" value="Austin">
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
                            <option value="AR">Arkansas</option>
                            <option>...</option>
                            <option>...</option>
                            <option value="TX" selected>Texas</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Degree</label>
                        <select class="form-control">
                            <option disabled>Select a Degree</option>
                            <option>BA</option>
                            <option selected>BS</option>
                            <option>Masters</option>
                            <option>Doctorate</option>
                            <option>...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Field of Study</label>
                        <select class="form-control">
                            <option disabled>Select a Field of Study</option>
                            <option selected="">Biology</option>
                            <option>Chemistry</option>
                            <option>Engineering</option>
                            <option>English</option>
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
                                            <option selected>02</option>
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
                                            <option disabled>YYYY</option>
                                            <option>1970</option>
                                            <option>1971</option>
                                            <option>1972</option>
                                            <option>1973</option>
                                            <option>1974</option>
                                            <option>...</option>
                                            <option selected>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
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
                                            <option disabled>MM</option>
                                            <option>01</option>
                                            <option selected>02</option>
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
                                            <option disabled>YYYY</option>
                                            <option>1970</option>
                                            <option>1971</option>
                                            <option>1972</option>
                                            <option>1973</option>
                                            <option>1974</option>
                                            <option>...</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option>2013</option>
                                            <option selected>2014</option>
                                            <option>2015</option>
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
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Licenses -->
<div id="modal-licenses" class="modal fade layout-wizard" tabindex="-1">
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
                        <option value="default" disabled>Select a Discipline</option>
                        <option value="emt" selected="">Emergency Medical Technician</option>
                        <option value="pharmacist">Pharmacist</option>
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
                    <label class="control-label">State or Province of Licensure</label>
                    <select class="form-control">
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option>...</option>
                        <option>...</option>
                        <option value="TX" selected>Texas</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">State License Number <small>Optional</small></label>
                            <input type="text" class="form-control" value="12345678-23">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="12/31/2016">
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
                    <input type="text" class="form-control" value="sample@email.com">
                </div>
                <div class="form-group">
                    <label class="control-label">Attachments</label>
                    <ul class="control-attachments control-attachments with">
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>my_document.doc</a></li>
                    </ul>
                    <div class="control-add-new">
                        <span class="no-data"><a href="#">Attach Documents</a> |</span> <a href="#">New Document</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Certifications -->
<div id="modal-certifications" class="modal fade layout-wizard" tabindex="-1">
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
                        <option disabled>Select a Certifying Body</option>
                        <option selected>Certifying Body 1</option>
                        <option>Certifying Body 2</option>
                        <option>Certifying Body 3</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Certification</label>
                    <select class="form-control">
                        <option disabled>Select a Certification</option>
                        <option>Certification 1</option>
                        <option selected>Certification 2</option>
                        <option>Certification 3</option>
                        <option>...</option>
                        <option>...</option>
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
                            <input type="text" class="form-control" value="8675309">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="12/31/2018">
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
                    <ul class="control-attachments control-attachments with">
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <span class="no-data"><a href="#">Attach Documents</a> |</span> <a href="#">New Document</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Recucitations -->
<div id="modal-resucitation-programs" class="modal fade layout-wizard" tabindex="-1">
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
                        <option disabled>Select a Certifying Body</option>
                        <option selected>Certifying Body 1</option>
                        <option>Certifying Body 2</option>
                        <option>Certifying Body 3</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Certification</label>
                    <select class="form-control">
                        <option disabled>Select a Certification</option>
                        <option>Certification 1</option>
                        <option>Certification 2</option>
                        <option selected>Certification 3</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Country</label>
                    <select id="inputCountry" class="form-control">
                        <option>United States</option>
                        <option>Canada</option>
                        <option selected>Australia</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Certification Number <small>Optional</small></label>
                            <input type="text" class="form-control" value="13571113171923">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="11/23/2016">
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
                    <ul class="control-attachments control-attachments with">
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <span class="no-data"><a href="#">Attach Documents</a> |</span> <a href="#">New Document</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Activities -->
<div id="modal-activities" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Volunteer Service</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="control-label">Volunteer Type</label>
                        <select class="form-control" id="add-discipline">
                            <option value="">Select a Type</option>
                            <option value="default">Research</option>
                            <option value="emt">Teaching</option>
                            <option value="pharmacist" selected>Volunteer Service</option>
                            <option value="pharmacist">Presentations</option>
                            <option value="pharmacist">Consulting</option>
                            <option value="pharmacist">More If Needed...</option>
                        </select>
                    </div>

                    <div id="activity-fields-teaching" class="activity-fields">
                        <div class="form-group">
                            <label class="control-label">Activity Name</label>
                            <input type="text" class="form-control" value="Activity 1">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Organization Name</label>
                            <input type="text" class="form-control" value="Elk's Lodge">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Country</label>
                            <select id="inputCountry" class="form-control">
                                <option selected>United States</option>
                                <option>Canada</option>
                                <option>Australia</option>
                                <option>...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">City</label>
                            <input type="text" class="form-control" value="Phoenix">
                        </div>
                        <div class="form-group">
                            <label class="control-label">State</label>
                            <select class="form-control">
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ" selected>Arizona</option>
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
                                                <option selected>01</option>
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
                                                <option disabled>YYYY</option>
                                                <option>1970</option>
                                                <option>1971</option>
                                                <option>1972</option>
                                                <option>1973</option>
                                                <option selected>1974</option>
                                                <option>...</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                                <option>2015</option>
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
                                                <option selected>12</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6">
                                            <select class="form-control">
                                                <option disabled>YYYY</option>
                                                <option>1970</option>
                                                <option>1971</option>
                                                <option>1972</option>
                                                <option>1973</option>
                                                <option>1974</option>
                                                <option>...</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                                <option selected>2015</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Current Activity?</label>
                            <label class="radio-inline"><input type="radio" name="optradio" checked>Yes</label>
                            <label class="radio-inline"><input type="radio" name="optradio">No</label>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea rows="4" class="form-control">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras cursus interdum porttitor. Vestibulum eu lectus lacinia, bibendum nunc sed, accumsan purus. Nulla facilisi. </textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Attachment</label>
                            <ul class="control-attachments control-attachments with">
                                <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                            </ul>
                            <div class="control-add-new">
                                <span class="no-data"><a href="#">Attach Documents</a> |</span> <a href="#">New Document</a>
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

<!-- Modal Teaching -->
<div id="modal-teaching" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Teaching &amp; Preceptorship</h4>
            </div>

            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Activity Name</label>
                    <input type="text" class="form-control" value="Teaching">
                </div>
                <div class="form-group">
                    <label class="control-label">Presentation/Instruction Type</label>
                    <select class="form-control">
                        <option>Select a Presentation/Instruction Type</option>
                        <option selected>Poster</option>
                        <option>Invited</option>
                        <option>Community/Patient Education</option>
                        <option>Other Activity Name</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Author(s)/Contributors</label>
                    <textarea rows="4" class="form-control">Phillip Phillips, James James, Robert Roberts</textarea>
                </div>

                <div class="form-group">
                    <label class="control-label">Country</label>
                    <select id="inputCountry" class="form-control">
                        <option selected>United States</option>
                        <option>Canada</option>
                        <option>Australia</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">City</label>
                    <input type="text" class="form-control" value="Phoenix">
                </div>
                <div class="form-group">
                    <label class="control-label">State</label>
                    <select class="form-control">
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ" selected>Arizona</option>
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
                                        <option selected>01</option>
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
                                        <option disabled>YYYY</option>
                                        <option>1970</option>
                                        <option>1971</option>
                                        <option>1972</option>
                                        <option>1973</option>
                                        <option>1974</option>
                                        <option>...</option>
                                        <option>2010</option>
                                        <option selected>2011</option>
                                        <option>2012</option>
                                        <option>2013</option>
                                        <option>2014</option>
                                        <option>2015</option>
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
                                        <option selected>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option disabled>YYYY</option>
                                        <option>1970</option>
                                        <option>1971</option>
                                        <option>1972</option>
                                        <option>1973</option>
                                        <option>1974</option>
                                        <option>...</option>
                                        <option>2010</option>
                                        <option>2011</option>
                                        <option>2012</option>
                                        <option selected>2013</option>
                                        <option>2014</option>
                                        <option>2015</option>
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
                    <input type="text" class="form-control" value="http://www.example-link.com">
                </div>

            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Publications & Research -->
<div id="modal-publications" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Publication/Research</h4>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="control-label">Publication Type</label>
                        <select id="inputCountry" class="form-control">
                            <option>Select a Publication Type</option>
                            <option selected>Book</option>
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
                        <input type="text" class="form-control" value="A Book of Hearts">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Author(s)/Editor(s)/Contributors</label>
                        <textarea rows="4" class="form-control">Debbie Reynolds</textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea rows="4" class="form-control">Nullam lorem tellus, elementum at ipsum aliquam, aliquam euismod arcu. Donec vel augue nisl. Integer erat turpis, placerat nec porta a, posuere sed libero. Donec lobortis nisi a quam sagittis, sed maximus ex lobortis. Proin libero lorem, ornare a rutrum cursus, pellentesque a erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas malesuada vulputate urna et interdum. Ut varius dictum diam, non efficitur sapien ullamcorper ac. Curabitur mattis vehicula leo ac mollis. Sed lacinia, sem quis pharetra congue, diam urna eleifend nisi, sed fringilla diam quam in quam. Nullam sed mollis urna.</textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Date</label>
                        <div class="input-group">
                            <input type="text" class="form-control" value="10/31/1999">
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
                        <input type="text" class="form-control" value="http://www.abookofhearts.com">
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

            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Awards -->
<div id="modal-awards" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Awards &amp; Recognition</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="control-label">Name of Honor</label>
                        <input type="text" class="form-control" value="Sample Award Name">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Type of Honor</label>
                        <select id="inputCountry" class="form-control">
                            <option>Select an Honor</option>
                            <option selected>Award</option>
                            <option>Scholorship</option>
                            <option>Fellowship</option>
                            <option>Grant</option>
                            <option>Fellow</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Honor Given By</label>
                        <input type="text" class="form-control" value="New England Journal of Medicine">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea rows="4" class="form-control">Nullam lorem tellus, elementum at ipsum aliquam, aliquam euismod arcu. Donec vel augue nisl. Integer erat turpis, placerat nec porta a, posuere sed libero. Donec lobortis nisi a quam sagittis, sed maximus ex lobortis. Proin libero lorem, ornare a rutrum cursus, pellentesque a erat. </textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Date</label>
                        <div class="input-group">
                            <input type="text" class="form-control" value="3/15/2014">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Attachment</label>
                        <ul class="control-attachments control-attachments with">
                            <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                        </ul>
                        <div class="control-add-new">
                            <span class="no-data"><a href="#">Attach Documents</a> |</span> <a href="#">New Document</a>
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
<div id="modal-other" class="modal fade layout-wizard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Other</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="control-label">Title</label>
                        <input type="text" class="form-control" value="Title of Other">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Organization Name</label>
                        <input type="text" class="form-control" value="Organization Name Goes Here">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Country</label>
                        <select id="inputCountry" class="form-control">
                            <option selected>United States</option>
                            <option>Canada</option>
                            <option>Australia</option>
                            <option>...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">City</label>
                        <input type="text" class="form-control" value="Birmingham">
                    </div>
                    <div class="form-group">
                        <label class="control-label">State</label>
                        <select class="form-control">
                            <option value="AL">Alabama</option>
                            <option value="AK" selected>Alaska</option>
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
                                            <option disabled>MM</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option selected>05</option>
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
                                            <option disabled>YYYY</option>
                                            <option>1970</option>
                                            <option>1971</option>
                                            <option>1972</option>
                                            <option>1973</option>
                                            <option>1974</option>
                                            <option>...</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option selected>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
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
                        <label class="control-label">Is Current?</label>
                        <label class="radio-inline"><input type="radio" name="optradio" checked>Yes</label>
                        <label class="radio-inline"><input type="radio" name="optradio">No</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea rows="4" class="form-control">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras cursus interdum porttitor. Vestibulum eu lectus lacinia, bibendum nunc sed, accumsan purus.</textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Attachment</label>
                        <ul class="control-attachments control-attachments with">
                            <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                        </ul>
                        <div class="control-add-new">
                            <span class="no-data"><a href="#">Attach Documents</a> |</span> <a href="#">New Document</a>
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
<!-- /ADD MODALS -->






<!-- Modal -->
<div id="modal-documents" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">My Documents</h4>
                <div class="input-group modal-search">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                    </span>
                </div><!-- /input-group -->
            </div>
            <div class="modal-body">
                <section class="section modal-search-results">
                    <h3>Results <small>Showing 1-10 of 15</small></h3>
                    <?php

                    $content = '
                        <section class="section"><h5>Description</h5>
                            <p>This is a longer form area for the file description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout','slat-modal')),
                        ),
                        'title' => '<a href="#">This document is already attached</a>',
                        'meta' => array(
                            array(
                                'label' => 'Attachment:',
                                'value' => 'Excel Spreadsheet',
                            ),
                            array(
                                'label' => 'Updated: ',
                                'value' => 'Mar 1, 2014 at 2:13pm',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            ),

                        ),
                        'action' => array(
                            'type' => 'action-single-success',
                            'content' => '<i class="fa fa-check visible-xs"></i>',
                            'link' => '#',
                        ),
                        'nested' => array(
                            'hide' => array($content),
                        )
                    );
                    echo createSlat($slat);

                    $content = '
                        <section class="section"><h5>Description</h5>
                            <p>This is a longer form area for the file description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout','slat-modal')),
                        ),
                        'title' => '<a href="#">This is the document name</a>',
                        'meta' => array(
                            array(
                                'label' => 'Attachment:',
                                'value' => 'Word Document',
                            ),
                            array(
                                'label' => 'Updated: ',
                                'value' => 'Mar 1, 2014 at 2:13pm',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            ),

                        ),
                        'action' => array(
                            'type' => 'action-single',
                            'content' => '<i class="fa fa-plus visible-xs"></i>',
                            'link' => '#',
                        ),
                        'nested' => array(
                            'hide' => array($content),
                        )
                    );
                    echo createSlat($slat);

                    $content = '
                        <section class="section"><h5>Description</h5>
                            <p>This is a longer form area for the file description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout','slat-modal')),
                        ),
                        'title' => '<a href="#">This is the document name</a>',
                        'meta' => array(
                            array(
                                'label' => 'Attachment:',
                                'value' => 'Portable Document File',
                            ),
                            array(
                                'label' => 'Updated: ',
                                'value' => 'Mar 1, 2014 at 2:13pm',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            ),

                        ),
                        'action' => array(
                            'type' => 'action-single',
                            'content' => '<i class="fa fa-plus visible-xs"></i>',
                            'link' => '#',
                        ),
                        'nested' => array(
                            'hide' => array($content),
                        )
                    );
                    echo createSlat($slat);

                    $content = '
                        <section class="section"><h5>Description</h5>
                            <p>This is a longer form area for the file description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout','slat-modal')),
                        ),
                        'title' => '<a href="#">This is the document name</a>',
                        'meta' => array(
                            array(
                                'label' => 'Attachment:',
                                'value' => 'Excel Spreadsheet',
                            ),
                            array(
                                'label' => 'Updated: ',
                                'value' => 'Mar 1, 2014 at 2:13pm',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            ),

                        ),
                        'action' => array(
                            'type' => 'action-single',
                            'content' => '<i class="fa fa-plus visible-xs"></i>',
                            'link' => '#',
                        ),
                        'nested' => array(
                            'hide' => array($content),
                        )
                    );
                    echo createSlat($slat);

                    $content = '
                        <section class="section"><h5>Description</h5>
                            <p>This is a longer form area for the file description. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                        </section>
                    ';
                    $slat = array(
                        'attributes' => array(
                            array('class',array('slat','slat-callout','slat-modal')),
                        ),
                        'title' => '<a href="#">This is the document name</a>',
                        'meta' => array(
                            array(
                                'label' => 'Attachment:',
                                'value' => 'Image',
                            ),
                            array(
                                'label' => 'Updated: ',
                                'value' => 'Mar 1, 2014 at 2:13pm',
                                'attributes' => array(
                                    array('class','meta-callout'),
                                )
                            ),

                        ),
                        'action' => array(
                            'type' => 'action-single',
                            'content' => '<i class="fa fa-plus visible-xs"></i>',
                            'link' => '#',
                        ),
                        'nested' => array(
                            'hide' => array($content),
                        )
                    );
                    echo createSlat($slat);

                    ?>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Attach</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                <div class="btn-group pull-right">
                    <button class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                    <button class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /modal -->

<!-- Modal -->
<div id="modal-document-add" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Document</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Document Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Description <small>Optional</small></label>
                    <textarea class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <input type="file" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <div class="hidden-xs">
                    <button class="btn btn-success" data-dismiss="modal">Save and Attach</button>
                    <button class="btn btn-success" data-dismiss="modal">Save, Attach, and Add Another</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
                <div class="visible-xs">
                    <div class="btn-group dropup">
                        <a href="#" class="btn btn-success">Save and Attach</a>
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-caret-up"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Save, Attach, and Add Another</a></li>
                        </ul>
                    </div>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /modal -->





<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>

<script src="/scripts/prototype.portfolio.js"></script>
<script src="/scripts/prototype.portfolio.wizard.helper.js"></script>

<script>
$( ".without-list" ).click(function() {
    $('.modal').on('show.bs.modal', function () {
        $('.with').hide();
        $('.without').show();
        $('.hide-group').show();
        $('.modal-footer').show();
        $('.modal-footer.alt').hide();
        $('.no-data').show();
    })
});
$( ".with-list" ).click(function() {
    $('.modal').on('show.bs.modal', function () {
        $('.without').hide();
        $('.with').show();
        $('.hide-group').show();
        $('.modal-footer').show();
        $('.modal-footer.alt').hide();
        $('.no-data').show();
    })
});
$( ".without-data" ).click(function() {
    $('.modal').on('show.bs.modal', function () {
        $('.no-data').hide();
    })
});
$( ".hide-control" ).click(function() {
    $('.modal').on('show.bs.modal', function () {
        $('.hide-group').hide();
    })
});
$( ".alt-footer" ).click(function() {
    $('.modal').on('show.bs.modal', function () {
        $('.modal-footer').hide();
        $('.modal-footer.alt').show();
    })
});
</script>



<?= createSiteEnd(); ?>
