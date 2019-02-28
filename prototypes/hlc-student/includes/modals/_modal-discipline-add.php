<!-- Modal -->
<div id="modal-discipline-add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-discipline-add-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="modal-discipline-add-label" class="modal-title">Add License</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Discipline</label>
                    <select class="form-control" id="add-discipline">
                        <option value="">Select a Discipline</option>
                        <option value="default">This is a Discipline that shows default fields</option>
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

                <div id="discipline-fields-emt" class="discipline-fields">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">NREMT Certification Number <small>Optional</small></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">National Expiration Date  <small>Optional</small></label>
                                <div class="input-group date">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
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
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Birthdate  <small>Optional</small></label>
                                <div class="input-group date">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->