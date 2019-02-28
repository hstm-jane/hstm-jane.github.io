<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Edit Admin Group';
$patterns['focus']['title'] = 'Edit Admin Group';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>


    <div class="layout layout-min">
        <div class="container">
            <section class="section section-box section-main">
                <input name="__RequestVerificationToken" type="hidden" value="G4TnWJTds2E8BhjqYGkLO32UQBudIbipt0ivHxJbtAkcTWWB99MqC66EoQQgN6qDOHn-Av1eQYlL_mVI_YqCP8DWNa5lDziLN0NZteHhRSo1">
                <input id="AdminGroupId" name="AdminGroupId" type="hidden" value="a7bca531-8e87-e511-80db-00505602112d">
                <input id="OwnerOrgNodeId" name="OwnerOrgNodeId" type="hidden" value="adbf6cad-fb4d-4dee-89d4-80ffd0affa4d">
                <section class="section">
                    <span id="AdminUserGuids">
                        <span id="AdminUserGuidsfcf6e809-2e7a-4153-8362-5e19bcae175d">
                            <input id="AdminGroupUserAdminIdfcf6e809-2e7a-4153-8362-5e19bcae175d" name="AdminGroupUserAdminIdfcf6e809-2e7a-4153-8362-5e19bcae175d" type="hidden" value="a9bca531-8e87-e511-80db-00505602112d">
                            <input id="UserNamefcf6e809-2e7a-4153-8362-5e19bcae175d" name="UserNamefcf6e809-2e7a-4153-8362-5e19bcae175d" type="hidden" value="demo1">
                            <input id="UserAdminIdfcf6e809-2e7a-4153-8362-5e19bcae175d" name="UserAdminIdfcf6e809-2e7a-4153-8362-5e19bcae175d" type="hidden" value="54e0b771-1e43-4705-ab35-584d47340f70">
                            <input id="OrgNodeIdfcf6e809-2e7a-4153-8362-5e19bcae175d" name="OrgNodeIdfcf6e809-2e7a-4153-8362-5e19bcae175d" type="hidden" value="adbf6cad-fb4d-4dee-89d4-80ffd0affa4d">
                        </span>
                    </span>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="Name">Name</label>
                                <input class="form-control" data-val="true" data-val-length="Admin Group Name cannot contain more than 70 characters." data-val-length-max="70" data-val-required="This is a required field." id="Name" maxlength="70" name="Name" type="text" value="AdminGroup">
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
                                    <input id="IncludesOwnerInstitutionAdmins" name="IncludesOwnerInstitutionAdmins" type="checkbox" value="true">
                                    <input name="IncludesOwnerInstitutionAdmins" type="hidden" value="false"> Include all administrators at and above "ACME General Medical Center"
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

                                <?php

                                $slat = array(
                                    'attributes' => array(
                                        array('class',array('slat','slat-callout')),
                                        array('data-filter-category',array('0')),
                                        array('id',array('divSlatfcf6e809-2e7a-4153-8362-5e19bcae175dadbf6cad-fb4d-4dee-89d4-80ffd0affa4d')),
                                    ),
                                    'title' => 'Demonstration, Jack H',
                                    'meta' =>
                                        '<ul class="meta">
                                            <li class="meta-callout">
                                                <span class="meta-label">Affiliation:</span>
                                                <span class="meta-value">ACME General Medical Center</span>
                                            </li>
                                            <li>
                                                <span class="meta-label">Username:</span>
                                                <span class="meta-value" id="spanfcf6e809-2e7a-4153-8362-5e19bcae175dadbf6cad-fb4d-4dee-89d4-80ffd0affa4d">demo1</span>
                                            </li>
                                        </ul>',

                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Remove <i class="visible-xs fa-fw fa-times fa"></i>',
                                        'link' => '#',
                                    )
                                );
                                echo createSlat($slat);

                                ?>

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
                                                <button href="/add-admin-group.php" class="btn btn-success" id="SaveAndAddAnother" name="SaveAndAddAnother" type="submit">Save and Add Another</button>
                                            </li>
                                            <li>
                                                <button href="/add-admin-group.php" class="btn btn-success" id="SaveAndCopy" name="SaveAndCopy" type="submit">Save and Copy</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="btn btn-default" href="/admin-group.php">Cancel</a>
                                ',
                            ),
                            array(
                                'classes' => array('hidden-xs'),
                                'html' => '
                                    <button href="/admin-group.php" class="btn btn-success" id="Save" name="Save" type="submit">Save</button>
                                    <button href="/add-admin-group.php" class="btn btn-success" id="SaveAndAddAnother" name="SaveAndAddAnother" type="submit">Save and Add Another</button>
                                    <button href="/add-admin-group.php" class="btn btn-success" id="SaveAndCopy" name="SaveAndCopy" type="submit">Save and Copy</button>
                                    <a class="btn btn-default" href="/admin-group.php">Cancel</a>
                                ',
                            ),
                        ),
                    );
                    echo createStickybar($stickybar);
                ?>

                <div class="form-modified">Last Modified: Nov 10, 2015 at 4:34 AM ET by demo1</div>


            </section>
        </div>
    </div>
    <!-- /layout -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>
