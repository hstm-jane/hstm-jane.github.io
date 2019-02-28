<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Add Admin Group';
$patterns['focus']['title'] = 'Add Admin Group';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

    <div class="layout layout-min">
        <div class="container">
            <section class="section section-box section-main">
                <section class="section">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="Name">Name</label>
                                <input class="form-control" data-val="true" data-val-length="Admin Group Name cannot contain more than 70 characters." data-val-length-max="70" data-val-required="This is a required field." id="Name" maxlength="70" name="Name" type="text" value="">
                                <span class="help-block">
                                    <span class="field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"></span>
                                </span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="Description">
                                    <span>Description</span>&nbsp;<small>Optional</small></label>
                                <textarea class="form-control" cols="20" id="Description" name="Description" rows="2" style="height:182px;"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    <input checked="checked" id="IncludesOwnerInstitutionAdmins" name="IncludesOwnerInstitutionAdmins" type="checkbox" value="true">
                                    <input name="IncludesOwnerInstitutionAdmins" type="hidden" value="true"> Include all administrators at and above "ACME General Medical Center"
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    <span>Admin Users</span>&nbsp;<small>Optional</small></label>
                                <div class="select2-container select2-container-multi" id="s2id_peopleSearch" style="width: 100%;">
                                    <ul class="select2-choices">
                                        <li class="select2-search-field">
                                            <label for="s2id_autogen1" class="select2-offscreen"></label>
                                            <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input select2-default" id="s2id_autogen1" placeholder="" style="width: 538px;"> </li>
                                    </ul>
                                    <div class="select2-drop select2-drop-multi select2-display-none select2-slats">
                                        <ul class="select2-results"> </ul>
                                    </div>
                                </div>
                                <input id="peopleSearch" name="peopleSearch" type="text" value="" tabindex="-1" class="select2-offscreen">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="divAdminUsers">
                            </div>
                        </div>
                    </div>
                </section>

                <?php
                    $stickybar = array(
                        'sets' => array(
                            array(
                                'classes' => array('visible-xs'),
                                'html' => '
                                    <div class="btn-group dropup">
                                        <button class="btn btn-success" id="Save" name="Save" type="submit">Save</button>
                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-up"></i></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <button class="btn btn-success" id="SaveAndAddAnother" name="SaveAndAddAnother" type="submit">Save and Add Another</button>
                                            </li>
                                            <li>
                                                <button class="btn btn-success" id="SaveAndCopy" name="SaveAndCopy" type="submit">Save and Copy</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="btn btn-default" href="/admin-group.php">Cancel</a>
                                ',
                            ),
                            array(
                                'classes' => array('hidden-xs'),
                                'html' => '
                                    <button class="btn btn-success" id="Save" name="Save" type="submit">Save</button>
                                    <button class="btn btn-success" id="SaveAndAddAnother" name="SaveAndAddAnother" type="submit">Save and Add Another</button>
                                    <button class="btn btn-success" id="SaveAndCopy" name="SaveAndCopy" type="submit">Save and Copy</button>
                                    <a class="btn btn-default" href="/admin-group.php">Cancel</a>
                                ',
                            ),
                        ),
                    );
                    echo createStickybar($stickybar);
                ?>

            </section>
        </div>
    </div>
    <!-- /layout -->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>
