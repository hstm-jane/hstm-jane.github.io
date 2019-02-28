<?php

    $employeeImage = '/content/images/avatar.jpg';
    $employeeName = 'Stephanie P. Juniper';
    $employeeID = 'sjuniper';
    $employeeSupervisor = 'Crane, Darcy L.';

    // if ( !empty($assessment) ) {
    //     $employeeImage = $assessment['actors']['employee']['image'];
    //     $employeeName = $assessment['actors']['employee']['nameFirstLast'];
    //     $employeeID = $assessment['actors']['employee']['nameEmployeeID'];
    //     $employeeSupervisor = $assessment['actors']['rater']['nameLastFirst'];
    // }

?>
    <!-- Modal -->
    <!--<div id="modal-assessment-by-state" class="modal modal-lg fade in" tabindex="-1" style="display:block;">-->
    <div id="modal-assessment-by-title" class="modal modal-xl fade modal-assessment-by-title" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="assessment assessment--header">
                        <div class="assessment__summary">
                            <div class="assessment__basics">Employee</div>
                            <div class="assessment__state">State</div>
                            <div class="assessment__due">Due</div>
                            <div class="assessment__progress">Progress</div>
                            <div class="assessment__actions"></div>
                        </div>
                    </div>
                    <?php foreach ($assessments as $assessment) { ?>
                    <div class="modal-assessment modal-assessment-data <?= $assessment['class'] ?>
                                <?php if ($assessment['actionable'] == true) { ?>
                                    assessment-flag 
                                <?php } ?>" data-state="<?= $assessment['data-state'] ?>" data-titleid="<?= $assessment['title-id'] ?>" data-empid="<?= $assessment['empid'] ?>" data-actionable="<?= $assessment['actionable'] ?>" data-employee-progress="<?= $assessment['data-employee-progress'] ?>">
                        <div class="assessment__summary">
                            <div class="assessment__basics">
                                <div class="assessment__title">
                                    <?= $assessment['employee'] ?>
                                </div>
                                <ul class="meta">
                                    <li>
                                        <span class="meta-type">
                                            <?= $assessment['type-description'] ?>
                                        </span>
                                    </li>
                                    <li class="meta-hide-lg">
                                        <span class="meta-label">State:</span>
                                        <span class="meta-value">
                                            <?= $assessment['state'] ?>
                                        </span>
                                    </li>
                                    <li class="meta-hide-lg">
                                        <span class="meta-label">Due:</span>
                                        <span class="meta-value">
                                            <?= $assessment['date'] ?>
                                        </span>
                                    </li>
                                    <?php if ($assessment['actionable'] == true) { ?>
                                    <li>
                                        <span class="action-badge-solid-blue">
                                            <a href="<?= $assessment['url'] ?>"><i class="fa fa-flag"></i> Action Needed</a>
                                        </span>
                                    </li>
                                    <?php } ?> </ul>
                            </div>
                            <div class="assessment__state" data-state="<?= $assessment['data-state'] ?>">
                                <?= $assessment['state'] ?>
                                    <span class="data-state collapse">
                                        <?= $assessment['data-state'] ?>
                                    </span>
                            </div>
                            <div class="assessment__due" data-date="<?= $assessment['data-date'] ?>">
                                <?= $assessment['date'] ?>
                                    <span class="data-date collapse">
                                        <?= $assessment['data-date'] ?>
                                    </span>
                            </div>
                            <div class="assessment__progress">
                                <ul class="assessment__actors">
                                    <li class="assessment__actor">
                                        <div class="assessment__actor__name">
                                            <span>Rater:</span>
                                            <span class="rater-name">
                                                <?= $assessment['rater'] ?>
                                            </span>
                                        </div>
                                        <div class="assessment__actor__progress" data-id="<?= $assessment['progress_id'] ?>">
                                            <div class="progress">
                                                <?= $assessment['rater_progress'] ?>
                                            </div>
                                            <div class="collapse data-rater-progress">
                                                <?= $assessment['data-rater-progress'] ?>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="assessment__actor assessment__actor_employee">
                                        <div class="assessment__actor__name">
                                            <span>Employee:</span>
                                            <?= $assessment['employee'] ?>
                                        </div>
                                        <div class="assessment__actor__progress" data-id="<?= $assessment['progress_id'] ?>">
                                            <div class="progress">
                                                <?= $assessment['employee_progress'] ?>
                                            </div>
                                            <div class="collapse data-employee-progress">
                                                <?= $assessment['data-employee-progress'] ?>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="assessment__actor assessment__actor_peers">
                                        <div class="assessment__actor__name">
                                            <span>Peers Submitted:</span>
                                        </div>
                                        <div class="assessment__actor__progress" data-id="<?= $assessment['progress_id'] ?>">
                                            <div class="progress progress-peer">
                                                <?= $assessment['peers_progress'] ?>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                          <div class="assessment__actions-lg" style="position:relative;">
                              <div class="action action-split">
                                  <div class="btn-group">
                                      <a href="<?= $assessment['url'] ?>" class="btn btn-default btn-sm hidden-xs">
                                          <?= $assessment['action-label'] ?>
                                      </a>
                                      <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                      <ul class="dropdown-menu dropdown-menu-right">
                                          <?php if ($assessment['action-label'] == 'View') { ?>
                                          <li>
                                              <a href="<?= $assessment['url'] ?>">View Assessment</a>
                                          </li>
                                          <?php } else { ?>
                                          <li>
                                              <a href="<?= $assessment['url'] ?>">
                                                  <?= $assessment['action-label'] ?>
                                              </a>
                                          </li>
                                          <?php } ?>
                                          <li>
                                             <!--  <a href="#" class="js-progress-modal" data-id="<?//= $assessment['progress_id'] ?>" data-dismiss="modal" data-state="<?//= $assessment['data-state'] ?>">View Progress</a> -->
                                             <a href="#">View Progress</a>
                                          </li>
                                          <?php if($assessment['state'] == "Evaluate") { ?>
                                          <?php if($i % 2 == 0) { ?>
                                          <!--Make the even numbered assessments go to the multi page-->
                                          <li>
                                              <a href="/assessment-manage-rater-peers.php">Manage Rater &amp; Peers</a>
                                          </li>
                                          <?php } else { ?>
                                          <!--Make the odd numbered assessments go to the single page-->
                                          <li>
                                              <a href="/assessment-manage-rater-peers.php?single">Manage Rater &amp; Peers</a>
                                          </li>
                                          <?php } ?>
                                          <?php }?>
                                          <?php if($assessment['state'] == "Evaluate" ) { ?>
                                          <li>
                                              <a href="/assessment-dynamic-section.php">Add to a Dynamic Section</a>
                                          </li>
                                          <?php } ?>
                                          <li class="divider"></li>
                                          <li>
                                              <a href="#">Print</a>
                                          </li>
                                           <?php if($assessment['data-state'] != "approval" ) { ?>
                                              <?php if($assessment['state'] == "Closed" ) { ?>
                                              <li>
                                                  <a href="#" class="js-revert">Revert to Review</a>
                                              </li>
                                              <?php } else { ?>
                                              <li>
                                                  <a href="#" class="js-revert">Revert to [State Name]</a>
                                              </li>
                                              <li>
                                                  <a href="#" class="js-reset">Reset</a>
                                              </li>
                                            <?php } ?>
                                          <?php } ?>
                                          <?php if($assessment['state'] == "Evaluate") { ?>
                                          <li>
                                              <a href="#" class="js-delete">Delete</a>
                                          </li>
                                          <?php } ?> </ul>
                                  </div>
                              </div>
                          </div>
                            <div class="assessment__assignedto" style="display:none;">
                                <?= $assessment['assignedto'] ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?> </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->
