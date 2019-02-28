<!-- Refine Modal -->
<div id="modal-refine" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Refine Results</h4>
            </div>
            <div class="modal-body">
                    <div class="tag-group">
                        <a href="#" class="tag">John<i class="fa fa-times"></i></a>
                        <a href="#" class="tag">Doe<i class="fa fa-times"></i></a>
                    </div>
                    <hr>
                    <!-- Default Section -->
                    <section class="section">
                            <div class="form-group">
                            <label>First Name</label>
                                <input type="text" class="form-control">
                            </div>
                           <div class="form-group">
                            <label>Last Name</label>
                               <input type="text" class="form-control">
                            </div>
                             <div class="form-group">
                              <label>Middle Name</label>
                                <input type="text" class="form-control">
                            </div>
                           <div class="form-group">
                              <label>User ID</label>
                               <input type="text" class="form-control">
                            </div>
                            <label>Status</label>
                            <div class="form-group">
                                  <div class="radio">
                                    <label>
                                       <input type="radio" name="optionsStatus" id="optionsStatus1" value="option1">  Active
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <label>
                                      <input type="radio" name="optionsStatus" id="optionsStatus2" value="option2"> Inactive
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <label>
                                      <input type="radio" name="optionsStatus" id="optionsStatus3" value="option3"> Both
                                    </label>
                                  </div>
                            </div>   
                </section>
                <section class="section section-refinement-group">
                    <div class="panel-group" role="tablist" aria-multiselectable="true">
                                <?php 
                           include SEARCH_FILTER_INSTITUTION;
                           include SEARCH_FILTER_STUDENT_GROUPS;
                           include SEARCH_FILTER_HIRE_REHIRE;
                           include SEARCH_FILTER_REVIEW_TIMEFRAME;
                           include SEARCH_FILTER_ACTIVE_TIMEFRAME;
                           include SEARCH_FILTER_JOB_FUNCTIONS;
                           ?>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- / Refine Modal -->
