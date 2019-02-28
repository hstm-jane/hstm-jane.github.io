<div id="modal-license" class="modal fade modal-xl modal-license dashboard-modal-table">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">19 Employees with 22 Outstanding Licenses </h4>
            </div>
            <div class="modal-body">
                <div class="modal-header-left pull-left">
                    <div class="licenseHeader text-muted"></div>
                    <div class="show-hidden-items">
                        <div class="checkbox c-checkbox">
                            <label class="text-muted">
                                <input type="checkbox" class="show-hidden" />
                             <span class="fa fa-check"></span>Show hidden items</label>
                         </div>
                     </div>
                 </div>
                 <table class="table  table-striped license-table dataTable" id="licenseTable">
                    <thead>
                        <tr>
                            <th class="unsortable sorting_disabled team-photo"></th>
                            <th class="employee">Employee</th>
                            <!-- <th class="job-title">Job Title</th> -->
                            <th class="license">License</th>
                            <th class="expires">Expires</th>
                            <th class="unsortable sorting_disabled team-action">
                                <div class="action action-split">
                                    <div class="btn-group">
                                        <a href="#" data-target="#modal-team-message-all" data-toggle="modal" data-dismiss="modal" data-backdrop="static" data-keyboard="false" class="btn btn-default hidden-xs" title="Message All">
                                        Message All</a>
                                        <a href="#" class="btn btn-default dropdown-toggle hidden-xs" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <a href="#" class="btn btn-xs btn-default btn btn-default dropdown-toggle visible-xs" data-toggle="dropdown">
                                            <svg aria-hidden="false" data-prefix="fal" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16" style="position: absolute;left: 5px;top: 2px;">
                                                <path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z" class=""></path>
                                            </svg>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="#" data-target="#modal-team-message-all" data-toggle="modal" data-dismiss="modal" data-backdrop="static" data-keyboard="false" title="Message All">Message All</a>
                                            </li>
                                            <li>
                                                <a href="#" data-target="#modal-team-message-all" data-toggle="modal" data-dismiss="modal" data-backdrop="static" data-keyboard="false" title="Message - Expired">Message - Expired</a>
                                            </li>
                                            <li>
                                                <a href="#" data-target="#modal-team-message-all" data-toggle="modal" data-dismiss="modal" data-backdrop="static" data-keyboard="false" title="Message - Expiring Soon">Message - Expiring Soon</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr data-id="1">
                            <td><img src="/content/images/prototype-actors/mtnmissy.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Chamberland, Marie S.</a><div class="text-muted text-sm">Nurse Manager - Acute Care</div></td>
                            <!-- <td>Nurse Manager - Acute Care</td> -->
                            <td>Registered Nurses - Advanced Registered Nurse Practitioner</td>
                            <td class="text-attention"><?= date('M j, Y', strtotime('-45 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="2">
                            <td><img src="/content/images/prototype-actors/himanshuchanda.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Conner, Rosalyn F.</a><div class="text-muted text-sm">Quality Coordinator (RN)</div></td>
                            <!-- <td>Quality Coordinator (RN)</td> -->
                            <td>Clinical Nurse Specialist</td>
                            <td class="text-attention"><?= date('M j, Y', strtotime('-30 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr data-id="3" class="hidden">
                            <td><img src="/content/images/prototype-actors/alewis.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Flangan, Sarah H.</a><div class="text-muted text-sm">Diabetes Educator (RN)</div></td>
                            <!-- <td>Diabetes Educator (RN)</td> -->
                            <td>NCAC ll - National Certified Addiction Counsler, Level l</td>
                            <td class="text-attention"><?= date('M j, Y', strtotime('-15 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="unhide-item hide-unhide">Un-hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="4">
                            <td><img src="/content/images/prototype-actors/ladylexy.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Franks, Iva R.</a><div class="text-muted text-sm">Case Manager (RN)</div></td>
                            <!-- <td>Case Manager (RN)</td> -->
                            <td>Emergency Medical Technician - Intermediate</td>
                            <td class="text-attention"><?= date('M j, Y', strtotime('-5 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="5">
                            <td><img src="/content/images/avatar.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Juniper, Stephanie P.</a><div class="text-muted text-sm">LPN - I.V. Certified</div></td>
                            <!-- <td>LPN - I.V. Certified</td> -->
                            <td>NCAC ll - National Certified Addiction Counsler, Level ll</td>
                            <td><?= date('M j, Y', strtotime('+1 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group dropup">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="6">
                            <td><img src="/content/images/prototype-actors/alewis.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Lewis, Audry K.</a><div class="text-muted text-sm">Nurse - Staff (RN) - Acute Care</div></td>
                            <!-- <td>Nurse - Staff (RN) - Acute Care</td> -->
                            <td>Health Educators</td>
                            <td><?= date('M j, Y', strtotime('+6 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group dropup">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="6">
                            <td><img src="http://www.designskilz.com/random-users/images/imageM15.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Wagner, Anton K.</a><div class="text-muted text-sm">LPN - I.V. Certified</div></td>
                            <!-- <td>LPN - I.V. Certified</td> -->
                            <td>Emergency Medical Technician - Intermediate</td>
                            <td><?= date('M j, Y', strtotime('+7 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group dropup">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="6">
                            <td><img src="http://www.designskilz.com/random-users/images/imageF13.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Lawson, Julie E.</a><div class="text-muted text-sm">Nurse - Staff (RN) - Acute Care</div></td>
                            <!-- <td>Nurse - Staff (RN) - Acute Care</td> -->
                            <td>NCAC ll - National Certified Addiction Counsler, Level ll</td>
                            <td><?= date('M j, Y', strtotime('+9 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group dropup">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="6">
                            <td><img src="http://www.designskilz.com/random-users/images/imageF47.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Parker, Megan K.</a><div class="text-muted text-sm">Quality Coordinator (RN)</div></td>
                            <!-- <td>Quality Coordinator (RN)</td> -->
                            <td>Clinical Nurse Specialist</td>
                            <td><?= date('M j, Y', strtotime('+11 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group dropup">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="6">
                            <td><img src="http://www.designskilz.com/random-users/images/imageM4.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Banks, Andrew S.</a><div class="text-muted text-sm">Nurse - Staff (RN) - Acute Care</div></td>
                            <!-- <td>Nurse - Staff (RN) - Acute Care</td> -->
                            <td>AEMT</td>
                            <td><?= date('M j, Y', strtotime('+15 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group dropup">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="6">
                            <td><img src="http://www.designskilz.com/random-users/images/imageF6.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Stewart, Eleanor C.</a><div class="text-muted text-sm">Nurse - Staff (RN) - Acute Care</div></td>
                            <!-- <td>Nurse - Staff (RN) - Acute Care</td> -->
                            <td>Respiratory Therapists - Critical Care Practitioner</td>
                            <td><?= date('M j, Y', strtotime('18 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group dropup">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="6">
                            <td><img src="/content/images/prototype-actors/alewis.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Lewis, Audry K.</a><div class="text-muted text-sm">Nurse - Staff (RN) - Acute Care</div></td>
                            <!-- <td>Nurse - Staff (RN) - Acute Care</td> -->
                            <td>NCAC ll - National Certified Addiction Counsler, Level ll</td>
                            <td><?= date('M j, Y', strtotime('+18 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group dropup">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="6">
                            <td><img src="http://www.designskilz.com/random-users/images/imageM26.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Hunt, Raymond N.</a><div class="text-muted text-sm">Quality Coordinator (RN)</div></td>
                            <!-- <td>Quality Coordinator (RN)</td> -->
                            <td>Clinical Documentation Improvement</td>
                            <td><?= date('M j, Y', strtotime('+22 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group dropup">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="6">
                            <td><img src="http://www.designskilz.com/random-users/images/imageM37.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Jenkins, Paul V.</a><div class="text-muted text-sm">Nurse - Staff (RN) - Acute Care</div></td>
                            <!-- <td>Nurse - Staff (RN) - Acute Care</td> -->
                            <td>Certified Prevention Specialist I</td>
                            <td><?= date('M j, Y', strtotime('+24 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group dropup">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="6">
                            <td><img src="http://www.designskilz.com/random-users/images/imageF15.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Gilbery, Monica P.</a><div class="text-muted text-sm">Quality Coordinator (RN)</div></td>
                            <!-- <td>Quality Coordinator (RN)</td> -->
                            <td>Registered Nurses</td>
                            <td><?= date('M j, Y', strtotime('+25 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group dropup">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="6">
                            <td><img src="/content/images/prototype-actors/alewis.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Lewis, Audry K.</a><div class="text-muted text-sm">Nurse - Staff (RN) - Acute Care</div></td>
                            <!-- <td>Nurse - Staff (RN) - Acute Care</td> -->
                            <td>Licensed Independent Chemical Dependency Councelor</td>
                            <td><?= date('M j, Y', strtotime('+26 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group dropup">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="6">
                            <td><img src="http://www.designskilz.com/random-users/images/imageF46.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Lewis, Eleanor K.</a><div class="text-muted text-sm">Diabetes Educator (RN)</div></td>
                            <!-- <td>Diabetes Educator (RN)</td> -->
                            <td>Licensed Practical Nurses</td>
                            <td><?= date('M j, Y', strtotime('+28 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group dropup">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="6">
                            <td><img src="http://www.designskilz.com/random-users/images/imageM49.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Hall, Mark H.</a><div class="text-muted text-sm">Nurse - Staff (RN) - Acute Care</div></td>
                            <!-- <td>Nurse - Staff (RN) - Acute Care</td> -->
                            <td>Registered Nurses</td>
                            <td><?= date('M j, Y', strtotime('+28 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group dropup">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="6">
                            <td><img src="http://www.designskilz.com/random-users/images/imageM40.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Parker, Raymond P.</a><div class="text-muted text-sm">Diabetes Educator (RN)</div></td>
                            <!-- <td>Diabetes Educator (RN)</td> -->
                            <td>NCAC ll - National Certified Addiction Counsler, Level ll</td>
                            <td><?= date('M j, Y', strtotime('+29 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group dropup">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="6">
                            <td><img src="http://www.designskilz.com/random-users/images/imageF16.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Watkins, Marie J.</a><div class="text-muted text-sm">Nurse - Staff (RN) - Acute Care</div></td>
                            <!-- <td>Nurse - Staff (RN) - Acute Care</td> -->
                            <td>Licensed Practical Nurses</td>
                            <td><?= date('M j, Y', strtotime('+29 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group dropup">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="6">
                            <td><img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Peters, Avery K.</a><div class="text-muted text-sm">Case Manager (RN)</div></td>
                            <!-- <td>Case Manager (RN)</td> -->
                            <td>Occupational Therapists</td>
                            <td><?= date('M j, Y', strtotime('+30 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group dropup">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="6">
                            <td><img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Image" class="media-box-object img-circle thumb38 img-thumbnail tn-sm"></td>
                            <td><a href="dashboard-profile-dev-ready.php#professional">Peters, Avery K.</a><div class="text-muted text-sm">Nurse - Staff (RN) - Acute Care</div></td>
                            <!-- <td>Nurse - Staff (RN) - Acute Care</td> -->
                            <td>Registered Nurses</td>
                            <td><?= date('M j, Y', strtotime('+30 days')) ?></td>
                            <td class="team-action">
                                <div class="action action-split">
                                    <div class="btn-group dropup">
                                        <a href="mailto:bbruno@jupiterhealth.com" class="btn btn-default hidden-xs">Message</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="mailto:bbruno@jupiterhealth.com">Send Message</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile-dev-ready.php" class="">View Profile</a>
                                            </li>
                                            <li><a href="#" class="hide-item hide-unhide">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-export-mobile"><em class="fa fa-download"></em> </button>

              <button type="button" class="btn btn-default btn-export"><em class="fa fa-download"></em> Export to CSV</button>
              <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
              <div class="paginate"></div>
          </div>
      </div>
  </div>
</div>