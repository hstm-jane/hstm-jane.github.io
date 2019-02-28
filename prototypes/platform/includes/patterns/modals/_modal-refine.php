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
                    <a href="#" class="tag">State<i class="fa fa-times"></i></a>
                    <a href="#" class="tag">Country<i class="fa fa-times"></i></a>
                </div>
                <hr>
                <section class="section section-refinement-group">
                    <h3>Date Range</h3>
                    <div class="form-group">
                        <label class="control-label">Start:</label>
                        <div class="input-group bootstrap-datepicker">
                            <input type="text" class="form-control datepicker" id="event-start-date" value="<?php Date('m/d/Y') ?><?php Date('h:i A', $date_rounded); ?>" tabindex="1">
                            <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">End:</label>
                        <div class="input-group bootstrap-datepicker">
                            <input type="text" class="form-control datepicker" id="event-end-date" value="<?php Date('m/d/Y') ?><?php Date('h:i A', $date_rounded); ?>" tabindex="1">
                            <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                        </div>
                    </div>
                </section>
                <section class="section section-refinement-group">
                    <div class="panel-group" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="collapsed tg" data-toggle="collapse" data-parent="#accordion" href="#panelOne" aria-expanded="true" aria-controls="collapseOne">
                                        <strong>Building/Location Name</strong><i class="indicator fa fa-chevron-down pull-right"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="panelOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="resource-picker">
                                        <div class="resource-picker-search">
                                            <input type="text" class="form-control resource-picker-input" placeholder="Search for Building/Location" data-type="people" tabindex="4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- panel two end -->
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
