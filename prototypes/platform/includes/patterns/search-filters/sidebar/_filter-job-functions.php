<div class="panel panel-default"> <!-- Jub Function panel -->  
    <div class="panel-heading" role="tab">
        <h4 class="panel-title">
            <a class="tg" id="colSix" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                <i class="indicator fa fa-chevron-down pull-right"></i><strong>Job Function Effective</strong>
            </a>
        </h4>
    </div>

    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="height: auto;">
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label">From:</label>
                <div class="input-group bootstrap-datepicker">
                    <input type="text" class="form-control datepicker" id="event-start-date" value="<?php Date('m/d/Y') ?>" tabindex="1">
                    <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Until:</label>
                <div class="input-group bootstrap-datepicker">
                    <input type="text" class="form-control datepicker" id="event-end-date" value="<?php Date('m/d/Y') ?>" tabindex="1">
                    <span class="input-group-addon dtp-form"><i class="fa fa-calendar dtp-form"></i></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">From Month:</label>
                 <select class="control-group" style="width: 100%">
                         <option>January</option>
                    <option>February</option>
                </select>
            </div>  
            <div class="form-group">
                <label class="control-label">To Month:</label>
                 <select class="control-group" style="width: 100%">
                            <option>January</option>
                    <option>February</option>
                </select>
            </div>    
        </div>
    </div>
</div><!-- /Job Function Effective active -->