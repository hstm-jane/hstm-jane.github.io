<!--Modal -->
<style>
.slat-select2 .meta-value,
.slat-select2 .meta-label {
    color: #666 !important;
}

#modal-note-add > div > div > div.modal-body > div.form-group.assigned-to.collapse > div.js-employee-selection > div > div > ul > li:nth-child(2) {
    display: block;
}
</style>
<?php  
  $employees = array(
            'employee' => array(
                
                array(
                     'name' => 'Spalding, Janet - jspalding',
                     'affiliation' => 'HealthStream',
                     'department' => 'Cardiology',
                     'jobtitle' => 'Nurse'
                 ),
                array(
                     'name' => 'Spears, Krystal - kspears',
                     'affiliation' => 'HealthStream',
                     'department' => 'Cardiology',
                     'jobtitle' => 'Nurse'
                 ),
                array(
                     'name' => 'Spolem, Bob - bspolem',
                     'affiliation' => 'HealthStream',
                     'department' => 'Cardiology',
                     'jobtitle' => 'Nurse'
                 ),
                array(
                     'name' => 'Johnson, Rick - rjohnson',
                     'affiliation' => 'HealthStream',
                     'department' => 'ER/ED',
                     'jobtitle' => 'Nurse'
                 ),
                array(
                     'name' => 'Jones, Sandy - sjones',
                     'affiliation' => 'HealthStream',
                     'department' => 'Cardiology',
                     'jobtitle' => 'Nurse'
                 ),
                array(
                     'name' => 'Bennett, John - jbennett',
                     'affiliation' => 'HealthStream',
                     'department' => 'Administrative',
                     'jobtitle' => 'Administrative Assistant'
                 ),
        ),
    )
?>
<form id="AddNewNote" method="post">
    <div id="modal-note-add" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Add Note</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label">Type</label>
                        <label class="radio-inline">
                            <input type="radio" name="type" value="self" checked="checked"> Self</label>
                        <label class="radio-inline">
                            <input type="radio" name="type" value="other"> Other</label>
                    </div>
                    <div class="form-group assigned-to collapse">
                        <label class="control-label">This note is for the following Employee</label>
                        <div class="js-employee-list" style="display:none">
                            <select class="form-control" data-placeholder="Choose an Employee" required>
                                <option></option>
                                <?php 
                                //$i = 1; while ( $i <= 600) { 
                                foreach ($employees['employee'] as $employee) { ?>
                                <option data-aff="<?= $employee['affiliation'] ?>" data-jobtitle="<?= $employee['jobtitle'] ?>" data-dept="<?= $employee['department'] ?>" value="<?= $employee['name'] ?>">
                                    <?= $employee['name'] ?>
                                </option>
                                <?php } ?> </select>
                        </div>
                        <div class="js-employee-selection">
                            <?php

                        $slat = array(
                            'attributes' => array(
                                array('class',array('slat','slat-modal')),
                            ),
                            'title' => 'Johnson, Rick - rjohnson',
                            'meta' => array(
                                array(
                                    'label' => 'Affiliation:',
                                    'value' => 'HealthStream',
                                ),
                                array(
                                    'label' => 'Department:',
                                    'value' => 'Cardiology',
                                ),
                                 array(
                                    'label' => 'Job Title:',
                                    'value' => 'Nurse',
                                ),
                            ),
                            'action' => array(
                                'type' => 'action-single',
                                'content' => 'Manage <i class="fa fa-fw fa-pencil visible-xs"></i>',
                                'link' => '#',
                            )
                        );
                        echo createSlat($slat);

                        ?> </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Subject</label>
                        <input type="text" class="form-control"> </div>
                    <div class="form-group">
                        <label class="control-label">Detail</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Documents
                            <small>Optional</small>
                        </label>
                        <ul class="control-attachments">
                            <li>No attached documents</li>
                        </ul>
                        <div class="control-add-new">
                            <a href="#modal-select-documents" data-toggle="modal" data-dismiss="modal">Attach Documents</a>
                            <span>|</span>
                            <a href="#modal-document-add" data-toggle="modal" data-dismiss="modal">New Document</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" id="SaveAddNewNoteButton" type="submit">Save</button>
                    <a class="btn btn-success" data-dismiss="modal" data-toggle="modal" href="#modal-note-add">Save and Add Another</a>
                    <button class="btn btn-default" data-dismiss="modal" id="CancelAddNewNoteButton">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- /modal
