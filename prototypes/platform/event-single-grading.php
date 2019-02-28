<?php
include "includes/helpers.php";

$patterns['start']['title'] = 'Leadership Training';
$patterns['header']['mainNavActive'] = 'scheduling';
$patterns['focus']['title'] = 'Leadership Training';
$patterns['focus']['meta_secondary'] = array(
array(
'label' => 'Type:',
'value' => 'NRP',
),
array(
'label' => 'STARTS: ',
'value' => 'Sat Dec 12, 2015 at 10:00am',
),
array(
'label' => 'ENDS: ',
'value' => 'Sat Dec 12, 2015 at 11:00am',
),
array(
'label' => 'Time Zone:',
'value' => 'ET',
),
);

function make_action_html() {
    
    // random id for ptotoyping purposes
    $grading_id = 'grading_' . rand(1,1000000);
    
    // html for actions
    $html = '';
    $html .= '<td class="actions hidden-sm hidden-xs no-select">';
    $html .= '<div class="btn-group grading-actions">';
    $html .= '<label class="btn btn-sm btn-default"><input type="radio" class="js-grading-pass" name="' . $grading_id . '" value="1" autocomplete="off">Pass</label>';
    $html .= '<label class="btn btn-sm btn-default"><input type="radio" class="js-grading-fail" name="' . $grading_id . '" value="0" autocomplete="off">Fail</label>';
    $html .= '<label class="btn btn-sm btn-default no-show-btn"><input type="radio" class="js-grading-noshow" name="' . $grading_id . '" value="-1" autocomplete="off">No Show</label>';
    $html .= '</div>';
    $html .= '</td>';
    
    return $html;
}

$mobile_actions_html = '
<div class="no-select mobile-actions pass-fail-actions visible-sm visible-xs pull-right">
<span class="actions-dropdown">
<a href="#" class="btn no-select btn-default btn-sm pull-right dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-fw no-select fa-caret-down"></i>
</a>
<ul class="dropdown-menu no-select dropdown-menu-right">
<li class="no-select expand-mobile-row"><a href="#" class="no-select">View More Info</a></li>
<li><a class="js-grading-pass">Pass</a></li>
<li><a class="js-grading-fail">Fail</a></li>
<li><a class="js-grading-noshow">No Show</a></li>
</ul>
</span>
<span class="mobile-grade-view">
<span>N/S</span>
<i class="fa fa-2x pass-fail-mobile-icon"></i>
</span>
</div>';

?>
  <?= createSiteStart($patterns['start']); ?>
    <?= createHeader($patterns['header']); ?>
      <?= createFocus($patterns['focus']); ?>

        <div class="layout layout-subnav layout-min">
          <div class="container">
            <section class="section section-main section-box">
              <div class="layout-subnav-container">

                <div class="layout-subnav-nav">
                  <div class="layout-subnav-nav-mobile">
                    <span><i class="fa fa-caret-down"></i>
<span>Grading</span>
                    </span>
                    <a href="#" class="toggle"><i class="fa fa-bars"></i></a>
                  </div>
                  <ul>
                    <li>
                      <a href="/event-single-settings.php">Settings<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>
                      <a href="/event-single-permissions.php">Permisssions<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>
                      <a href="/event-single-resources.php">Resources &amp;&nbsp; Personnel<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>
                      <a href="/event-single-roster.php">Roster<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li class="active">
                      <a href="/event-single-grading.php">Grading<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>
                      <a href="/event-single-message.php">Send Message<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>
                      <a href="/event-single-content.php">Content<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="/event-series-settings.php">Add Series</a>
                    </li>
                    <li>
                      <a href="/event-single-settings-conflicted.php">Clone Event</a>
                    </li>
                  </ul>
                </div>

                <!-- /subnav -->
                <div class="layout-subnav-content new-data-table-styles-wrapper">
                  <section class="section">
                    <h2 class="page-header">Grading</h2>
                    <div class="row">
                      <div class="col-md-6">
                        <h3 id="instructorCandidateHeader">Instructor Candidates <small></small></h3>
                      </div>

                    </div>
                    <div class="no-more-tables">
                      <table id="instructorCandidateTable" width="100%" class="table table-no-select display table-hover dataTable no-footer">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>User ID</th>
                            <th>Department</th>
                            <th>Institution</th>
                            <th class="unsortable hidden-xs actions">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>admin4, test
                              <?= $mobile_actions_html  ?>
                            </td>
                            <td>testadmin4</td>
                            <td>002-Cardiologist</td>
                            <td>002 - Cardiology</td>


                            <?= make_action_html() ?>
                          </tr>
                          <tr>
                            <td>Analyzer, Alan
                              <?= $mobile_actions_html  ?>
                            </td>
                            <td>testadmin4</td>
                            <td>002-Cardiologist</td>
                            <td>002 - Cardiology</td>
                            <?= make_action_html() ?>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <h3 id="studentHeader">Students <small></small></h3>
                      </div>

                    </div>
                    <div class="no-more-tables">
                      <table id="studentTable" width="100%" class="table table-no-select display table-hover dataTable no-footer">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Department</th>
                            <th>Institution</th>
                            <th class="unsortable hidden-xs actions">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>admin4, test
                              <?= $mobile_actions_html  ?>
                            </td>
                            <td>testadmin4</td>
                            <td>002-Cardiologist</td>
                            <td>002 - Cardiology</td>


                            <?= make_action_html() ?>
                          </tr>
                          <tr>
                            <td>Analyzer, Alan
                              <?= $mobile_actions_html  ?>
                            </td>
                            <td>testadmin4</td>
                            <td>002-Cardiologist</td>
                            <td>002 - Cardiology</td>


                            <?= make_action_html() ?>
                          </tr>
                          <tr>
                            <td>Analyzer, Alan A
                              <?= $mobile_actions_html  ?>
                            </td>

                            <td>ba1</td>
                            <td>Other Clinical</td>
                            <td>001-Radiologist</td>


                            <?= make_action_html() ?>
                          </tr>
                          <tr>
                            <td>Austin, Rachael
                              <?= $mobile_actions_html  ?>
                            </td>

                            <td>RAustin</td>
                            <td>RN - Direct Patient Care</td>
                            <td>04763-Physician</td>



                            <?= make_action_html() ?>
                          </tr>
                          <tr>
                            <td>Bailey, Eric
                              <?= $mobile_actions_html ?>
                            </td>

                            <td>ebailey</td>
                            <td>Radiology</td>
                            <td>02468-Registered Nurse</td>


                            <?= make_action_html() ?>
                          </tr>
                          <tr>
                            <td>Bankhead, Wanda
                              <?= $mobile_actions_html ?>
                            </td>

                            <td>wbankhead1</td>
                            <td>EMT-I</td>
                            <td>002-Cardiologist</td>

                            <?= make_action_html() ?>
                          </tr>
                          <tr>
                            <td>Banner, Bruce
                              <?= $mobile_actions_html ?>
                            </td>

                            <td>preview3</td>
                            <td>Other Clinical</td>
                            <td>001-Radiologist</td>

                            <?= make_action_html() ?>
                          </tr>
                          <tr>
                            <td>Barkley, Chris
                              <?= $mobile_actions_html ?>
                            </td>

                            <td>cbarkley</td>
                            <td>Radiology</td>
                            <td>04763-Physician</td>

                            <?= make_action_html() ?>
                          </tr>
                          <tr>
                            <td>Bartol, Rita
                              <?= $mobile_actions_html ?>
                            </td>

                            <td>rbartol</td>
                            <td>Other Clinical</td>
                            <td>02468-Registered Nurse</td>

                            <?= make_action_html() ?>
                          </tr>
                          <tr>
                            <td>Barton, Clint
                              <?= $mobile_actions_html ?>
                            </td>

                            <td>preview7</td>
                            <td>Other Clinical</td>
                            <td>002-Cardiologist</td>

                            <?= make_action_html() ?>
                          </tr>
                          <tr>
                            <td>Bickel, Steve
                              <?= $mobile_actions_html ?>
                            </td>

                            <td>sbickel</td>
                            <td>Physician</td>
                            <td>001-Radiologist</td>

                            <?= make_action_html() ?>
                          </tr>
                          <tr>
                            <td>Bluthardt, Shelby
                              <?= $mobile_actions_html ?>
                            </td>

                            <td>sbluthardt</td>
                            <td>RN - Direct Patient Care</td>
                            <td>04763-Physician</td>

                            <?= make_action_html() ?>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </section>

                  <?php
$stickybar = array(
'sets' => array(
array(
'position' => 'left',
'classes' => array('hidden-xs'),
'html' => '
<a href="#" class="btn btn-success js-grading-save">Save</a>
<a href="#" class="btn btn-success js-grading-submit">Finalize and Submit to AAP</a>
<a href="#" class="btn btn-default">Cancel</a>
',
),
array(
'position' => 'left',
'classes' => array('visible-xs'),
'html' => '
<a href="#" class="btn btn-success js-grading-save">Save</a>
<a href="#" class="btn btn-success js-grading-submit">Submit to AAP</a>
<a href="#" class="btn btn-default">Cancel</a>
',
),
),
);
echo createStickybar($stickybar);
?>

                    <div class="form-modified">Last Modified: Mar 3, 2016 at 6:23 AM ET by demo1</div>

                </div>
                <!-- /content -->
              </div>
            </section>
          </div>
        </div>
        <!-- /layout -->
        <?php
include MODAL_MESSAGE_GROUP;
include 'includes/patterns/modals/_modal-grading-save-submit.php';
?>
          <?= createFooter($patterns['footer']); ?>
            <?= createPrototypeNav(); ?>
              <?= createSiteScripts(); ?>
                <?= createDatatableScripts(); ?>
                  <script type="text/javascript" src="/scripts/datatables.js"></script>
                  <script type="text/javascript" src="/scripts/prototype.datatables.js"></script>
                  <script>
                    (function(window, $) {
                      'use strict';
                      window.HealthStream = window.HealthStream || {};
                      var healthStream = window.HealthStream;
                      healthStream.studentSearchResults = {};
                      healthStream.studentSearchResults.resultsDataTable = function() {
                        var icTable = $('#instructorCandidateTable').DataTable({
                          "paging": true,
                          "order": [
                            [0, "asc"]
                          ],
                          "select": false,
                          "dom": 't<"bottom"ri>',
                          "columnDefs": [{
                            "visible": false,
                            "targets": "hideOnLoad",
                          }, {
                            "orderable": false,
                            "targets": "unsortable"
                          }],
                          language: {
                            search: "_INPUT_",
                            searchPlaceholder: "Search"
                          }
                        });
                        var sTable = $('#studentTable').DataTable({
                          "paging": true,
                          "order": [
                            [0, "asc"]
                          ],
                          "dom": 't<"bottom"rlip>',
                          "columnDefs": [{
                            "visible": false,
                            "targets": "hideOnLoad",
                          }, {
                            "orderable": false,
                            "targets": "unsortable"
                          }],
                          language: {
                            search: "_INPUT_",
                            searchPlaceholder: "Search"
                          }
                        });

                        expandMobileRow();
                        generateDynamicDataTitles();
                        customizeColumns(icTable);
                        customizeColumns(sTable);

                        keepDropDownMenuOpen();
                        updateTableHeaderCounts();
                        //place default info into Results header
                        function updateTableHeaderCounts() {
                          $(".dataTables_info").hide();
                          $('#studentHeader small').html($("#studentTable_info").html());

                        }

                        $('.dataTable')
                          .on('change', '.grading-actions input[type="radio"]', function() {
                            var $input = $(this);
                            var $btn = $(this).closest('.btn');
                            var $group = $(this).closest('.btn-group');
                            var $btns = $group.find('.btn');
                            var $row = $(this).closest('tr');
                            var $mobile = $row.find('.mobile-actions');
                            var $icon = $mobile.find('.pass-fail-mobile-icon');
                            var $iconNA = $mobile.find(".mobile-grade-view span");

                            // reset controls
                            $row.find('.btn-group .btn').addClass('btn-default').removeClass('active btn-success btn-danger');
                            $icon.removeClass('fa-green fa-red fa-check-circle fa-times-circle');
                            $iconNA.hide();
                            $mobile.find('li').removeClass('active');

                            // show control as active
                            if ($input.prop('checked') === true) {

                              $btn.addClass('active').removeClass('btn-default');

                              if ($input.hasClass('js-grading-pass')) {
                                $btn.addClass('btn-success');
                                $icon.addClass("fa-green fa-check-circle");
                                $mobile.find('.js-grading-pass').closest('li').addClass('active');
                              }

                              if ($input.hasClass('js-grading-fail')) {
                                $btn.addClass('btn-danger');
                                $icon.addClass("fa-red fa-times-circle");
                                $mobile.find('.js-grading-fail').closest('li').addClass('active');
                              }

                              if ($input.hasClass('js-grading-noshow')) {
                                $iconNA.show();
                                $mobile.find('.js-grading-noshow').closest('li').addClass('active');
                              }

                            }

                            // show control as inactive
                            else {
                              $(this).find('input[type="radio"]').prop('checked', false);
                            }

                          })
                          .on('click', '.grading-actions .btn', function(e) {
                            var $btn = $(this);
                            var $radio = $btn.find('input[type="radio"]');

                            // disable the label + radio button default behavior
                            e.preventDefault();

                            // toggle radio to off if checked
                            if ($btn.hasClass('active')) {
                              $radio.prop('checked', false).change();
                            } else {
                              $radio.prop('checked', true).change();
                            }
                          })
                          .on('click', '.mobile-actions .js-grading-pass', function() {
                            var $row = $(this).closest('tr');

                            if ($(this).parents("li").hasClass("active")) {
                              $(this).closest(".active").removeClass("active");
                              $row.find('.js-grading-pass').prop('checked', false).change();
                            } else {
                              $row.find('.js-grading-pass').prop('checked', true).change();
                            }

                          })
                          .on('click', '.mobile-actions .js-grading-fail', function() {
                            var $row = $(this).closest('tr');

                            if ($(this).parents("li").hasClass("active")) {
                              $(this).closest(".active").removeClass("active");
                              $row.find('.js-grading-fail').prop('checked', false).change();
                            } else {
                              $row.find('.js-grading-fail').prop('checked', true).change();
                            }
                          })
                          .on('click', '.mobile-actions .js-grading-noshow', function() {
                            var $row = $(this).closest('tr');
                            if ($(this).parents("li").hasClass("active")) {
                              $(this).closest(".active").removeClass("active");
                              $row.find('.js-grading-noshow').prop('checked', false).change();
                            } else {
                              $row.find('.js-grading-noshow').prop('checked', true).change();
                            }
                          });


                        //reinitialize jquery when table is redrawn (pagination)
                        $(".dataTable").on('draw.dt', function() {
                          expandMobileRow();
                          generateDynamicDataTitles();
                          updateTableHeaderCounts();
                        });

                        $('#sendMessageGroup').formValidation({
                          framework: 'bootstrap',
                          fields: {
                            subject_group: {
                              validators: {
                                notEmpty: {
                                  message: 'This field is required'
                                },
                              }
                            },
                            message_group: {
                              validators: {
                                notEmpty: {
                                  message: 'This field is required'
                                },
                              }
                            },
                          }
                        });

                        $('.grading-actions .btn').bind("click", function(e) {
                          e.preventDefault();
                          HealthStream.utilities.interrupt({
                            type: 'warning',
                            title: 'Grading Will Clear Waitlist',
                            text: 'There are students waitlisted for this event. Grading will release these students. What would you like to do?',
                            actions: [{
                                label: 'Continue Grading and Clear Waitlist'
                              }, {
                                label: 'Edit Roster',
                                url: '/event-single-roster.php',
                              }

                            ]
                          });
                          $('.grading-actions .btn').unbind('click');
                        });
                      };
                      $(window).on('load', function() {
                        healthStream.studentSearchResults.resultsDataTable();
                      });
                    }(window, jQuery));
                  </script>
                  <?= createSiteEnd(); ?>