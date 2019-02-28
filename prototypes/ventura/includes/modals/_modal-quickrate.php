<!--Modal -->
<style>
.modal-body h3 {
    margin-top:0px;
}
</style>

<div id="modal-quickrate" class="modal fade modal-quickrate" tabindex="-1">
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
                            <input type="hidden" id="qr-statementid" value=""/>
                            <div class="form-group">
                                <label class="control-label">Rating <a href="#" class="js-rating-definitions-qr" data-params="assessment=competency-3&amp;statement=statement-1"><i class="fa fa-fw fa-info-circle"></i></a></label>
                                <select class="form-control" id="statement-rating">
                                    <option selected="">Choose</option>
                                    <option value="rating-option-0">Not Applicable</option>
                                    <option value="rating-option-1">Novice</option>
                                    <option value="rating-option-2">Advanced Beginner</option>
                                    <option value="rating-option-3">Competent</option>
                                    <option value="rating-option-4">Proficient</option>
                                    <option value="rating-option-5">Expert</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="checkbox"><input type="checkbox"> Add to Reflective Plan</label>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Comment / Evidence of Achievement</label>
                                <!--<textarea class="form-control" style="height:100px">She is very dependable and a leader on the team. She contributes during meetings and always offers constructive criticism. She embodies our company’s vision and I put a lot of trust in her to help mentor our new hires. I trust Stephanie and always know where I stand with her.</textarea>-->
                                <textarea class="form-control" style="height:100px"></textarea>
                            </div>


                      
                           
                                                  
                        </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" data-dismiss="modal" id="qr-save">Save</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
           
          
           
          
          
        </div>
    </div>
</div><!-- /modal

