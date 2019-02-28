<!-- Modal -->

<?php
$employees = array(
    'Benson, Carol D.',
    'Brooks, Linda G.',
    'Jones, Robert P.',
    'Casey, Michelle B.',
    'Chamberland, Marie S.',
    'Clements, Larry W.',
    'Franks, Iva R.',
    'Henrich, Anna R.',
    'Jones, Marian R.',
    'Kelley, Robert A.',
    'Kight, Mercedes K.',
    'Lloyd, James B.',
    'Mitchell, Kurt P.',
    'Morrison, Kay S.',
    'Scott, Julie G.',
    'Shaner, Charles L.',
    'Seymour, Mary W.',
    'Sheridan, Pauline A.',
    'Wilson, Jeffery M.',
    'Wolfe, Michelle C.',
);
?>
<style>
.checkable .slat {
    border-left: inherit;
}
.checkable-single > .select .icon {
    background-position: center 0;
}
.checkable-single.checkable-checked > .select .icon {
    background-position: center -30px;
}
.modal-search {
    width: 100%;
}
</style>
<div id="modal-note-select-employee" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add Note: Select Employee</h4>
                
            </div>
            <div class="modal-body">
            <div class="input-group row" style="border-bottom: 1px solid #e5e5e5">
                    <div class="form-group col-sm-6">
                        <label class="control-label">First Name</label>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="control-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    
                    <div class="form-group col-sm-6">
                        <label class="control-label">User ID</label>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="control-label">User ID</label>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <div class="form-group col-sm-12">
                        <div class="pull-left">
                            <button class="btn btn-success" data-dismiss="modal">Search</button>
                        </div>
                    </div>
                </div>
                <section class="section modal-search-results">
                    <h3>Results <small>Showing 1-5 of 74</small></h3>
               
                                <?php for ( $i = 0; $i < 5; $i++ ) {

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                    ),
                                    'title' => $employees[$i],
                                    'meta' => array(
                                        array(
                                            'label' => 'ID:',
                                            'value' => '123456',
                                        ),
                                        array(
                                            'label' => 'Department:',
                                            'value' => 'Nursing',
                                        )
                                    ),
                                    'action' => array(),
                                );

                                echo '<div class="checkable checkable-single">';
                                echo createSlat($slat);
                                echo '<div class="select"><label><input type="checkbox" class="checkbox"><span class="icon"></span></label></div></div>';

                                } ?> 
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" id="selectEmployee">Add Selected</button>
                <button class="btn btn-default" id="selectEmployeeCancel">Cancel</button>
                <div class="pull-right">
                    <div class="btn-group">
                        <a class="btn btn-default disabled" href="#">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <a class="btn btn-default" href="#">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /modal -->