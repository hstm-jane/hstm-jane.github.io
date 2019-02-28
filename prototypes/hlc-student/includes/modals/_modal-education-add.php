<!-- Modal -->
<div id="modal-education-new" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-education-new-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 id="modal-education-new-label" class="modal-title">Add Education</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">School Name</label>
                    <input type="text" name="schoolname" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">City</label>
                    <input type="text" name="city" class="form-control">
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
                <div class="form-group">
                    <label class="control-label">Degree</label>
                    <select class="form-control">
                        <option disabled selected>Select a Degree</option>
                        <option>BA</option>
                        <option>BS</option>
                        <option>Masters</option>
                        <option>Doctorate</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Field of Study</label>
                    <select class="form-control">
                        <option disabled selected>Select a Field of Study</option>
                        <option>Biology</option>
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
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->