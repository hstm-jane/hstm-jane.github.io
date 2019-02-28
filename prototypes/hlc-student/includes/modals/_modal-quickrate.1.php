<!--Modal -->
<style>
.modal-body h3 {
    margin-top: 0px;
}
</style>
<div id="modal-quickrate1" class="modal fade modal-quickrate" tabindex="-1">
    <div class="modal-dialog" style="width:700px;">
        <div class="modal-content">
            <div class="modal-page active" id="modal-page-goal-new">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Quick Rate</h4>
                </div>
                <div class="modal-body" style="padding-bottom:0px;">
                    <form class="validate">
                        <h3>My Rating</h3>
                        <input type="hidden" id="qr-statementid" value="" />
                        <div class="form-group">
                            <label class="control-label">Rating
                                <a href="#" class="js-rating-definitions-qr" data-params="assessment=competency-3&amp;statement=statement-1"><i class="fa fa-fw fa-info-circle"></i></a>
                            </label>
                            <select class="form-control" id="statement-rating">
                                <option value="0" selected="">Choose</option>
                                <option value="rating-option-0">Not Applicable</option>
                                <option value="rating-option-1">Novice</option>
                                <option value="rating-option-2">Advanced Beginner</option>
                                <option value="rating-option-3">Competent</option>
                                <option value="rating-option-4">Proficient</option>
                                <option value="rating-option-5">Expert</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Reflective Plan</label>
                            <label class="checkbox">
                                <input type="checkbox"> Add to Reflective Plan</label>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Comment / Evidence of Achievement</label>
                            <!--<textarea class="form-control" style="height:100px">She is very dependable and a leader on the team. She contributes during meetings and always offers constructive criticism. She embodies our company’s vision and I put a lot of trust in her to help mentor our new hires. I trust Stephanie and always know where I stand with her.</textarea>-->
                            <textarea class="form-control" style="height:100px"></textarea>
                        </div>
                        <div class="panel-group " role="tablist" id="risk-panel-group" aria-expanded="false">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <a role="button" data-toggle="collapse" data-parent="#risk-panel-group" href="#risk-panel" class="collapsed"> Risk/Outcome
                                        <small>Optional</small>
                                        <div class="panel-heading-icon"> <i class="fa fa-chevron-down panel-heading-icon-closed"></i> <i class="fa fa-chevron-up panel-heading-icon-open"></i> </div>
                                    </a>
                                </div>
                                <div id="risk-panel" class="panel-collapse collapse" role="tabpanel" style="height: 0px;">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <ul class="list-unstyled">
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Age Related</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Communication</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Decreased Volume</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">High Risk</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">High Volume</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Hospital Initiative</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Increased Risk</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Infection Control</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Learner's Needs</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-4">
                                                <ul class="list-unstyled">
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox" checked="">Low Risk</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Low Volume</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox" checked="">New Equipment</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">New Scope of Practice</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Orientation</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Performance Issue</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox" checked="">Policy Change</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Problem Prone</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Professional Development</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-4">
                                                <ul class="list-unstyled">
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Quality</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Regulatory</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox" checked="">Safety</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Satisfaction (Employee)</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Satisfaction (Patient)</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Satisfaction (Physician)</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Special Needs Population</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox" checked="">Teamwork</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox" checked="">Time Sensitive</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group " role="tablist" id="mov-panel-group" aria-expanded="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <a role="button" data-toggle="collapse" data-parent="#mov-panel-group" href="#mov-panel" class=""> Methods of Validation
                                        <div class="panel-heading-icon"> <i class="fa fa-chevron-down panel-heading-icon-closed"></i> <i class="fa fa-chevron-up panel-heading-icon-open"></i> </div>
                                    </a>
                                </div>
                                <div id="mov-panel" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <ul class="list-unstyled">
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Case Study</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Confidence Based Learning</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox" checked="">Direct Observation</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox" checked="">Documentation Review</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox" checked="">Evidence of Daily Work</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox" checked="">Evidence Submission</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-4">
                                                <ul class="list-unstyled">
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Exemplar</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Inservice Education</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Mock Survey</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Online Simulation</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox" checked="">Peer Review</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">PI Data Trending</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-4">
                                                <ul class="list-unstyled">
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Presentation</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Simulation Lab</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Skills Checklist</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Skills Lab/Skills Fair</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Testing - Oral</label>
                                                    </li>
                                                    <li class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Testing - Written</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success quickrate-save" id="qr-save">Save</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-interrupt" class="modal modal-interrupt fade confirm">
    <div class="modal-dialog">
        <div class="modal-content modal-has-icon">
            <div class="modal-body">
                <div class="modal-icon">
                    <img src="./content/images/icon-warning.png">
                </div>
                <div class="modal-title">You are about to clear the rating for this statement</div>
                <div class="modal-text">You have selected to remove the previously saved rating from this statement.
                    <br>
                    <br>Removing a rating from this statement will remove the rating and all associated information.</div>
            </div>
            <div class="modal-footer">
                <a href="#" id="interrupt-action-0" class="btn btn-danger">Yes, remove the rating</a>
                <a href="#" id="interrupt-action-1" class="btn btn-default">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!-- /modal
