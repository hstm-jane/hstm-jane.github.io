<?php

include "includes/helpers.php";

$patterns['start']['title'] = "What's Wrong?";
$patterns['focus']['title'] = "What's Wrong?";

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

    <div class="layout layout-min">
        <div class="container">
            <section class="section section-box section-main">
                 <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <input class="form-control" placeholder="Name">
                                <span class="help-block">
                                    <span class="field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"></span>
                                </span>
                            </div>
                            <div class="form-group">

                                <textarea class="form-control" cols="20" id="Description" name="Description" placeholder="Description" rows="2" style="height:182px;"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    <input id="IncludesOwnerInstitutionAdmins" name="IncludesOwnerInstitutionAdmins" type="checkbox" value="true">
                                    <input name="IncludesOwnerInstitutionAdmins" type="hidden" value="false"> Check this if you want it to be true. If it is true, it means something really awesome will happen and you will be happy.
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="control-label">

                                <div class="select2-container select2-container-multi" id="s2id_peopleSearch" style="width: 100%;">
                                    <ul class="select2-choices">
                                        <li class="select2-search-field">
                                            <label for="s2id_autogen1" class="select2-offscreen"></label>
                                            <input placeholder="Admin Groups" > </li>
                                    </ul>
                                    <div class="select2-drop select2-drop-multi select2-display-none select2-slats">
                                        <ul class="select2-results"> </ul>
                                    </div>
                                </div>
                                <input id="peopleSearch" name="peopleSearch" type="text" value="" tabindex="-1" class="select2-offscreen">
                            </div>
                        </div>
                    </div>

                <?php
                    $stickybar = array(
                        'sets' => array(
                            array(
                                'html' => '
                                    <a class="btn btn-success" href="#">Edit Something</a>
                                    <a class="btn btn-success" href="#">Save Something</a>
                                    <a class="btn btn-success" href="#">Go Somewhere Else</a>
                                    <a class="btn btn-success" href="#" id="btnDelete">Delete Something</a>
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

