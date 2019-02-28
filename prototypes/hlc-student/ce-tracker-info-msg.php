<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'CE Tracker';
$patterns['header']['mainNavActive'] = 'completed';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>

<div class="focus focus-pageheader">
    <div class="fph-separator"></div>
    <div class="cet__focus">
        <div class="cet__focus-group">
            <img src="/content/images/ce-tracker-logo.svg" alt="CE Tracker" />
        </div>
        <div class="cet__focus-group">
            <button class="btn btn-lg btn-focus">Add License</button>
            <button class="btn btn-lg btn-focus">Add CE Record</button>
        </div>
    </div>
</div>

<div class="layout">
    <div class="container">
        <section class="section section-main section-box">
            <div class="cet__header">
                <div>
                    <h2>Licenses <small>Showing 1-5 of 5</small></h2>
                </div>
                <div class="header-right">
                    <label class="checkbox"><input type="checkbox" id="show-expired" value="true"> Show Expired Licenses</label>
                </div>
            </div>
            <div class="cet__list">
                <!-- ALERT-->
                <div class="alert alert-info mb mt">
                <div class="title"><i class="fa fa-lg fa-info-circle pr"></i>This is a tool to help you keep track of the continuing education you need to earn to renew your license. It's your responsibility to associate it correctly.</div>
                </div>
                <!-- EMPTY STATE -->
                <div class="cet__item">
                    <div class="cet__item-empty">
                        <h3>No Licenses? Here's how to get started</h3>
                        <div>
                            <button class="btn btn-success">Add License</button>
                        </div>
                    </div>
                </div>


                <!-- LICENSE + CE EMPTY STATE -->

                <div class="cet__item">
                    <div class="cet__item-col">
                        <div class="cet__item-col-header">
                            <span>License</span>
                        </div>
                        <div class="cet__license">
                            <div class="cet__license-info">
                                <div class="cet__license-state-bg" data-state="TN"></div>
                                <div class="cet__license-name">
                                    <a href="#">Examples of strings that are way outside of normal usage that wrap like crazy and wreak havoc on the layout causing things to push out of boxes and make people cry.</a>
                                </div>
                                <div class="cet__license-meta">
                                    <span>State License Number:</span>
                                    <span>908321809321089321809312809123098321809312809321809312809321809321089321809321809321890321809312809321089321809321809312809123809123809321089123809123809312890132809312809231809132098</span>
                                </div>
                                <div class="cet__license-meta">
                                    <span>State/Province:</span>
                                    <span>TN</span>
                                </div>
                                <div class="cet__license-meta">
                                    <span>Issued:</span>
                                    <span>7/30/2017</span>
                                </div>
                                <div class="cet__license-meta">
                                    <span>Expires:</span>
                                    <span>7/30/2019</span>
                                </div>
                                <div class="cet__license-actions">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-default">Edit</button>
                                        <button class="btn btn-sm btn-default js-modal-ce-print">Print</button>
                                    </div>
                                    <button class="btn btn-sm btn-default js-modal-ce-records">Link CE Records</button>
                                </div>
                            </div>
                            <div class="cet__license-ce">
                                <div class="cet__license-ce-target">
                                    <div>
                                        <div class="cet__license-ce-label">CE Target</div>
                                        <div class="cet__license-ce-value">
                                            <button class="btn btn-xs btn-default js-modal-ce-target">Set Target</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="cet__license-ce-linked">
                                    <div>
                                        <div class="cet__license-ce-label">CE Linked</div>
                                        <div class="cet__license-ce-value">0</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cet__item-col">
                        <div class="cet__item-col-header">
                            <span>Title / Event</span>
                            <span>Date</span>
                            <span>CE</span>
                        </div>

                        <div class="cet__ce--empty">
                            <h3>Let's start tracking your CE</h3>
                            <div>
                                <button class="btn btn-success js-modal-ce-target">Set CE Target</button>
                                <button class="btn btn-default js-modal-ce-records">Link CE Records</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- LICENSE + < MAX VISIBLE CE RECORDS -->


                <div class="cet__item">

                    <div class="cet__item-col">
                        <div class="cet__item-col-header">
                            <span>License</span>
                        </div>
                        <div class="cet__license">
                            <div class="cet__license-info">
                                <div class="cet__license-state-bg" data-state="AL"></div>
                                <div class="cet__license-name">
                                    <a href="#">License Name</a>
                                </div>
                                <div class="cet__license-meta">
                                    <span>State License Number:</span>
                                    <span>12</span>
                                </div>
                                <div class="cet__license-meta">
                                    <span>State/Province:</span>
                                    <span>AL</span>
                                </div>
                                <div class="cet__license-meta">
                                    <span>Issued:</span>
                                    <span>7/30/2017</span>
                                </div>
                                <div class="cet__license-meta">
                                    <span>Expires:</span>
                                    <span>7/30/2019</span>
                                </div>
                                <div class="cet__license-actions">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-default">Edit</button>
                                        <button class="btn btn-sm btn-default js-modal-ce-print">Print</button>
                                    </div>
                                    <button class="btn btn-sm btn-default js-modal-ce-records">Link CE Records</button>
                                </div>
                            </div>
                            <div class="cet__license-ce">
                                <div class="cet__license-ce-target">
                                    <div>
                                        <div class="cet__license-ce-label">CE Target</div>
                                        <div class="cet__license-ce-value"><a href="#" class="js-modal-ce-target">15</a></div>
                                    </div>
                                </div>
                                <div class="cet__license-ce-linked">
                                    <div>
                                        <div class="cet__license-ce-label">CE Linked</div>
                                        <div class="cet__license-ce-value">999.99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cet__item-col">

                        <div class="cet__item-col-header">
                            <span>Title / Event</span>
                            <span>Date</span>
                            <span>CE</span>
                        </div>

                        <div class="cet__ce is-stripe">
                            <div class="cet__ce-names">
                                <div class="cet__ce-name">
                                    <a href="#">Nursing 1</a>
                                </div>
                                <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                            </div>
                            <div class="cet__ce-date">
                                Jun 6, 2018
                            </div>
                            <div class="cet__ce-credits">
                                1
                            </div>
                            <div class="cet__ce-actions">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">View/Edit CE Record</a></li>
                                        <li><a href="#">View Certificate</a></li>
                                        <li><a href="#">Unlink from License</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="cet__ce">
                            <div class="cet__ce-names">
                                <div class="cet__ce-name">
                                    <a href="#">Nursing 1</a>
                                </div>
                                <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                            </div>
                            <div class="cet__ce-date">
                                Jun 6, 2018
                            </div>
                            <div class="cet__ce-credits">
                                1
                            </div>
                            <div class="cet__ce-actions">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">View/Edit CE Record</a></li>
                                        <li><a href="#">View Certificate</a></li>
                                        <li><a href="#">Unlink from License</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="cet__ce is-stripe">
                            <div class="cet__ce-names">
                                <div class="cet__ce-name">
                                    <a href="#">Nursing 1</a>
                                </div>
                                <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                            </div>
                            <div class="cet__ce-date">
                                Jun 6, 2018
                            </div>
                            <div class="cet__ce-credits">
                                1
                            </div>
                            <div class="cet__ce-actions">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">View/Edit CE Record</a></li>
                                        <li><a href="#">View Certificate</a></li>
                                        <li><a href="#">Unlink from License</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>


                <!-- LICENSE + > MAX VISIBLE CE RECORDS -->


                <div class="cet__item">

                    <div class="cet__item-col">
                        <div class="cet__item-col-header">
                            <span>License</span>
                        </div>
                        <div class="cet__license">
                            <div class="cet__license-info">
                                <div class="cet__license-state-bg" data-state="AK"></div>
                                <div class="cet__license-name">
                                    <a href="#">License Name</a>
                                </div>
                                <div class="cet__license-meta">
                                    <span>State License Number:</span>
                                    <span>231232321321-32132321321321</span>
                                </div>
                                <div class="cet__license-meta">
                                    <span>State/Province:</span>
                                    <span>AK</span>
                                </div>
                                <div class="cet__license-meta">
                                    <span>Issued:</span>
                                    <span>7/30/2017</span>
                                </div>
                                <div class="cet__license-meta">
                                    <span>Expires:</span>
                                    <span>7/30/2019</span>
                                </div>
                                <div class="cet__license-actions">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-default">Edit</button>
                                        <button class="btn btn-sm btn-default js-modal-ce-print">Print</button>
                                    </div>
                                    <button class="btn btn-sm btn-default js-modal-ce-records">Link CE Records</button>
                                </div>
                            </div>
                            <div class="cet__license-ce">
                                <div class="cet__license-ce-target">
                                    <div>
                                        <div class="cet__license-ce-label">CE Target</div>
                                        <div class="cet__license-ce-value"><a href="#" class="js-modal-ce-target">15</a></div>
                                    </div>
                                </div>
                                <div class="cet__license-ce-linked">
                                    <div>
                                        <div class="cet__license-ce-label">CE Linked</div>
                                        <div class="cet__license-ce-value">5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cet__item-col">

                        <div class="cet__item-col-header">
                            <span>Title / Event</span>
                            <span>Date</span>
                            <span>CE</span>
                        </div>

                        <div class="cet__ce is-stripe">
                            <div class="cet__ce-names">
                                <div class="cet__ce-name">
                                    <a href="#">Nursing 1</a>
                                </div>
                                <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                            </div>
                            <div class="cet__ce-date">
                                Jun 6, 2018
                            </div>
                            <div class="cet__ce-credits">
                                1
                            </div>
                            <div class="cet__ce-actions">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">View/Edit CE Record</a></li>
                                        <li><a href="#">View Certificate</a></li>
                                        <li><a href="#">Unlink from License</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="cet__ce">
                            <div class="cet__ce-names">
                                <div class="cet__ce-name">
                                    <a href="#">Nursing 1</a>
                                </div>
                                <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                            </div>
                            <div class="cet__ce-date">
                                Jun 6, 2018
                            </div>
                            <div class="cet__ce-credits">
                                1
                            </div>
                            <div class="cet__ce-actions">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">View/Edit CE Record</a></li>
                                        <li><a href="#">View Certificate</a></li>
                                        <li><a href="#">Unlink from License</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="cet__ce is-stripe">
                            <div class="cet__ce-names">
                                <div class="cet__ce-name">
                                    <a href="#">Nursing 1</a>
                                </div>
                                <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                            </div>
                            <div class="cet__ce-date">
                                Jun 6, 2018
                            </div>
                            <div class="cet__ce-credits">
                                1
                            </div>
                            <div class="cet__ce-actions">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">View/Edit CE Record</a></li>
                                        <li><a href="#">View Certificate</a></li>
                                        <li><a href="#">Unlink from License</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="collapse-group collapse">

                            <div class="cet__ce">
                                <div class="cet__ce-names">
                                    <div class="cet__ce-name">
                                        <a href="#">Nursing 1</a>
                                    </div>
                                    <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                                </div>
                                <div class="cet__ce-date">
                                    Jun 6, 2018
                                </div>
                                <div class="cet__ce-credits">
                                    1
                                </div>
                                <div class="cet__ce-actions">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-caret-down"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">View/Edit CE Record</a></li>
                                            <li><a href="#">View Certificate</a></li>
                                            <li><a href="#">Unlink from License</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="cet__ce is-stripe">
                                <div class="cet__ce-names">
                                    <div class="cet__ce-name">
                                        <a href="#">Nursing 1</a>
                                    </div>
                                    <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                                </div>
                                <div class="cet__ce-date">
                                    Jun 6, 2018
                                </div>
                                <div class="cet__ce-credits">
                                    1
                                </div>
                                <div class="cet__ce-actions">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-caret-down"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">View/Edit CE Record</a></li>
                                            <li><a href="#">View Certificate</a></li>
                                            <li><a href="#">Unlink from License</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            </div>
                            <a href="#" class="collapse-toggle" data-toggle-text="Show all linked CE records|Show fewer linked CE records">Show all linked CE records</a>


                    </div>

                </div>


                <!-- EXPIRED LICENSE + > MAX VISIBLE CE RECORDS -->


                <div class="cet__item">

                    <div class="cet__item-col">
                        <div class="cet__item-col-header">
                            <span>License</span>
                        </div>
                        <div class="cet__license is-expired">
                            <div class="cet__license-info">
                                <div class="cet__license-state-bg" data-state="FL"></div>
                                <div class="cet__license-name">
                                    <a href="#">License Name</a>
                                </div>
                                <div class="cet__license-meta">
                                    <span>State License Number:</span>
                                    <span>231232321321-32132321321321</span>
                                </div>
                                <div class="cet__license-meta">
                                    <span>State/Province:</span>
                                    <span>FL</span>
                                </div>
                                <div class="cet__license-meta">
                                    <span>Issued:</span>
                                    <span>7/30/2017</span>
                                </div>
                                <div class="cet__license-meta">
                                    <span>Expires:</span>
                                    <span>7/30/2019</span>
                                </div>
                                <div class="cet__license-actions">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-default">Edit</button>
                                        <button class="btn btn-sm btn-default js-modal-ce-print">Print</button>
                                    </div>
                                    <button class="btn btn-sm btn-default js-modal-ce-records">Link CE Records</button>
                                </div>
                            </div>
                            <div class="cet__license-ce">
                                <div class="cet__license-ce-target">
                                    <div>
                                        <div class="cet__license-ce-label">CE Target</div>
                                        <div class="cet__license-ce-value"><a href="#" class="js-modal-ce-target">5</a></div>
                                    </div>
                                </div>
                                <div class="cet__license-ce-linked">
                                    <div>
                                        <div class="cet__license-ce-label">CE Linked</div>
                                        <div class="cet__license-ce-value">5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cet__item-col">

                        <div class="cet__item-col-header">
                            <span>Title / Event</span>
                            <span>Date</span>
                            <span>CE</span>
                        </div>

                        <div class="cet__ce is-stripe">
                            <div class="cet__ce-names">
                                <div class="cet__ce-name">
                                    <a href="#">Nursing 1</a>
                                </div>
                                <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                            </div>
                            <div class="cet__ce-date">
                                Jun 6, 2018
                            </div>
                            <div class="cet__ce-credits">
                                1
                            </div>
                            <div class="cet__ce-actions">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">View/Edit CE Record</a></li>
                                        <li><a href="#">View Certificate</a></li>
                                        <li><a href="#">Unlink from License</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="cet__ce">
                            <div class="cet__ce-names">
                                <div class="cet__ce-name">
                                    <a href="#">Nursing 1</a>
                                </div>
                                <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                            </div>
                            <div class="cet__ce-date">
                                Jun 6, 2018
                            </div>
                            <div class="cet__ce-credits">
                                1
                            </div>
                            <div class="cet__ce-actions">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">View/Edit CE Record</a></li>
                                        <li><a href="#">View Certificate</a></li>
                                        <li><a href="#">Unlink from License</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="cet__ce is-stripe">
                            <div class="cet__ce-names">
                                <div class="cet__ce-name">
                                    <a href="#">Nursing 1</a>
                                </div>
                                <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                            </div>
                            <div class="cet__ce-date">
                                Jun 6, 2018
                            </div>
                            <div class="cet__ce-credits">
                                1
                            </div>
                            <div class="cet__ce-actions">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">View/Edit CE Record</a></li>
                                        <li><a href="#">View Certificate</a></li>
                                        <li><a href="#">Unlink from License</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="collapse-group collapse">

                            <div class="cet__ce">
                                <div class="cet__ce-names">
                                    <div class="cet__ce-name">
                                        <a href="#">Nursing 1</a>
                                    </div>
                                    <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                                </div>
                                <div class="cet__ce-date">
                                    Jun 6, 2018
                                </div>
                                <div class="cet__ce-credits">
                                    1
                                </div>
                                <div class="cet__ce-actions">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-caret-down"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">View/Edit CE Record</a></li>
                                            <li><a href="#">View Certificate</a></li>
                                            <li><a href="#">Unlink from License</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="cet__ce is-stripe">
                                <div class="cet__ce-names">
                                    <div class="cet__ce-name">
                                        <a href="#">Nursing 1</a>
                                    </div>
                                    <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                                </div>
                                <div class="cet__ce-date">
                                    Jun 6, 2018
                                </div>
                                <div class="cet__ce-credits">
                                    1
                                </div>
                                <div class="cet__ce-actions">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-caret-down"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">View/Edit CE Record</a></li>
                                            <li><a href="#">View Certificate</a></li>
                                            <li><a href="#">Unlink from License</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <a href="#" class="collapse-toggle" data-toggle-text="Show all linked CE records|Show fewer linked CE records">Show all linked CE records</a>


                    </div>

                </div>
            </div>
        </section><!-- /section-main -->
    </div><!-- /container -->
</div><!-- /layout -->

<div id="modal-ce-target" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Manage CE Target</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h3>What is your CE Target?</h3>
                    <p>A concise paragraph about why the user should set their own target CE and date
                    oustside of what is available on the license. It might be that that their institution doesn’t let them control it, or it might be that that they’d like to hit their goal ahead of the expiration.
                    </p>
                </section>
                <section class="section">
                    <div class="form-group">
                        <label class="form-label">Target Number of CE Credits</label>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" value="15" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Target Start Date</label>
                                <div class="input-group date">
                                    <input type="text" class="form-control" value="<?php echo date('n/j/Y'); ?>" />
                                    <div class="input-group-btn">
                                        <button class="btn btn-default"><i class="fa fa-calendar"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Target End Date</label>
                                <div class="input-group date">
                                    <input type="text" class="form-control" value="<?php echo date('n/j/Y',strtotime('+1 year')); ?>" />
                                    <div class="input-group-btn">
                                        <button class="btn btn-default"><i class="fa fa-calendar"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="form-group">
                        <label class="form-label">Notifications</label>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" checked>
                            Send me reminders when I am close to reaching my target date
                          </label>
                        </div>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<div id="modal-ce-records" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Manage Linked CE Records</h4>
            </div>
            <div class="modal-body">
                <div class="cet__modal">
                    <section class="cet__modal-license">
                        <div class="cet__modal-license-wrapper">
                            <div class="cet__license">
                                <div class="cet__license-info">
                                    <div class="cet__license-state-bg" data-state="AL"></div>
                                    <div class="cet__license-name">
                                        <a href="#">License Name</a>
                                    </div>
                                    <div class="cet__license-meta">
                                        <span>State License Number:</span>
                                        <span>231232321321-32132321321321</span>
                                    </div>
                                    <div class="cet__license-meta">
                                        <span>State/Province:</span>
                                        <span>AL</span>
                                    </div>
                                    <div class="cet__license-meta">
                                        <span>Issued:</span>
                                        <span>7/30/2017</span>
                                    </div>
                                    <div class="cet__license-meta">
                                        <span>Expires:</span>
                                        <span>7/30/2019</span>
                                    </div>
                                    <div class="cet__license-actions">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-default">Edit</button>
                                            <button class="btn btn-sm btn-default js-modal-ce-print">Print</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="cet__license-ce">
                                    <div class="cet__license-ce-target">
                                        <div>
                                            <div class="cet__license-ce-label">CE Target</div>
                                            <div class="cet__license-ce-value"><a href="#" class="js-modal-ce-target">15</a></div>
                                        </div>
                                    </div>
                                    <div class="cet__license-ce-linked">
                                        <div>
                                            <div class="cet__license-ce-label">CE Linked</div>
                                            <div class="cet__license-ce-value">3</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="cet__modal-records">
                        <div class="cet__modal-records-header">
                            <h3>Linked CE Records</h3>
                        </div>
                        <div class="cet__item-col-header cet__modal-records-col-header">
                            <span>Title / Event</span>
                            <span>Date</span>
                            <span>CE</span>
                        </div>
                        <div class="cet__modal-records-list">
                            <div class="cet__ce is-stripe">
                                <div class="cet__ce-names">
                                    <div class="cet__ce-name">
                                        <a href="#">Nursing 1</a>
                                    </div>
                                    <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                                </div>
                                <div class="cet__ce-date">
                                    Jun 6, 2018
                                </div>
                                <div class="cet__ce-credits">
                                    1
                                </div>
                                <div class="cet__ce-actions">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-default">
                                            <i class="fa fa-unlink"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="cet__ce">
                                <div class="cet__ce-names">
                                    <div class="cet__ce-name">
                                        <a href="#">Nursing 1</a>
                                    </div>
                                    <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                                </div>
                                <div class="cet__ce-date">
                                    Jun 6, 2018
                                </div>
                                <div class="cet__ce-credits">
                                    1
                                </div>
                                <div class="cet__ce-actions">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-default">
                                            <i class="fa fa-unlink"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="cet__ce is-stripe">
                                <div class="cet__ce-names">
                                    <div class="cet__ce-name">
                                        <a href="#">Nursing 1</a>
                                    </div>
                                    <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                                </div>
                                <div class="cet__ce-date">
                                    Jun 6, 2018
                                </div>
                                <div class="cet__ce-credits">
                                    1
                                </div>
                                <div class="cet__ce-actions">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-default">
                                            <i class="fa fa-unlink"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="cet__modal-records">
                        <div class="cet__modal-records-header">
                            <h3>Unlinked CE Records</h3>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                    Show: Last Year <i class="fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="active"><a href="#">Last Year</a></li>
                                    <li><a href="#">All</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cet__item-col-header cet__modal-records-col-header">
                            <span>Title / Event</span>
                            <span>Date</span>
                            <span>CE</span>
                        </div>
                        <div class="cet__modal-records-list">
                            <div class="cet__ce is-stripe">
                                <div class="cet__ce-names">
                                    <div class="cet__ce-name">
                                        <a href="#">Nursing 1</a>
                                    </div>
                                    <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                                </div>
                                <div class="cet__ce-date">
                                    Jun 6, 2018
                                </div>
                                <div class="cet__ce-credits">
                                    1
                                </div>
                                <div class="cet__ce-actions">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-default">
                                            <i class="fa fa-link"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="cet__ce">
                                <div class="cet__ce-names">
                                    <div class="cet__ce-name">
                                        <a href="#">Nursing 1</a>
                                    </div>
                                    <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                                </div>
                                <div class="cet__ce-date">
                                    Jun 6, 2018
                                </div>
                                <div class="cet__ce-credits">
                                    1
                                </div>
                                <div class="cet__ce-actions">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-default">
                                            <i class="fa fa-link"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="cet__ce is-stripe">
                                <div class="cet__ce-names">
                                    <div class="cet__ce-name">
                                        <a href="#">Nursing 1</a>
                                    </div>
                                    <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                                </div>
                                <div class="cet__ce-date">
                                    Jun 6, 2018
                                </div>
                                <div class="cet__ce-credits">
                                    1
                                </div>
                                <div class="cet__ce-actions">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-default">
                                            <i class="fa fa-link"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse-group collapse">
                                <div class="cet__ce">
                                    <div class="cet__ce-names">
                                        <div class="cet__ce-name">
                                            <a href="#">Nursing 1</a>
                                        </div>
                                        <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                                    </div>
                                    <div class="cet__ce-date">
                                        Jun 6, 2018
                                    </div>
                                    <div class="cet__ce-credits">
                                        1
                                    </div>
                                    <div class="cet__ce-actions">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-default">
                                                <i class="fa fa-link"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="cet__ce is-stripe">
                                    <div class="cet__ce-names">
                                        <div class="cet__ce-name">
                                            <a href="#">Nursing 1</a>
                                        </div>
                                        <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                                    </div>
                                    <div class="cet__ce-date">
                                        Jun 6, 2018
                                    </div>
                                    <div class="cet__ce-credits">
                                        1
                                    </div>
                                    <div class="cet__ce-actions">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-default">
                                                <i class="fa fa-link"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="cet__ce">
                                    <div class="cet__ce-names">
                                        <div class="cet__ce-name">
                                            <a href="#">Nursing 1</a>
                                        </div>
                                        <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                                    </div>
                                    <div class="cet__ce-date">
                                        Jun 6, 2018
                                    </div>
                                    <div class="cet__ce-credits">
                                        1
                                    </div>
                                    <div class="cet__ce-actions">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-default">
                                                <i class="fa fa-link"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="cet__ce is-stripe">
                                    <div class="cet__ce-names">
                                        <div class="cet__ce-name">
                                            <a href="#">Nursing 1</a>
                                        </div>
                                        <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                                    </div>
                                    <div class="cet__ce-date">
                                        Jun 6, 2018
                                    </div>
                                    <div class="cet__ce-credits">
                                        1
                                    </div>
                                    <div class="cet__ce-actions">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-default">
                                                <i class="fa fa-link"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="cet__ce">
                                    <div class="cet__ce-names">
                                        <div class="cet__ce-name">
                                            <a href="#">Nursing 1</a>
                                        </div>
                                        <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                                    </div>
                                    <div class="cet__ce-date">
                                        Jun 6, 2018
                                    </div>
                                    <div class="cet__ce-credits">
                                        1
                                    </div>
                                    <div class="cet__ce-actions">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-default">
                                                <i class="fa fa-link"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="cet__ce is-stripe">
                                    <div class="cet__ce-names">
                                        <div class="cet__ce-name">
                                            <a href="#">Nursing 1</a>
                                        </div>
                                        <div class="cet__ce-approver">American Association of Nurse Practitioners</div>
                                    </div>
                                    <div class="cet__ce-date">
                                        Jun 6, 2018
                                    </div>
                                    <div class="cet__ce-credits">
                                        1
                                    </div>
                                    <div class="cet__ce-actions">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-default">
                                                <i class="fa fa-link"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="collapse-toggle" data-toggle-text="Show More|Show Less">Show More</a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<div id="modal-ce-print" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Print CE Tracker File</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h3>What is a CE Tracker File?</h3>
                    <p>A CE Tracker File the output of the proof of credit you'll need to maintain your licensure. Select a date range and we'll include all qualifying CE in that range.
                    </p>
                </section>
                <section class="section">
                    <div class="form-group">
                        <label class="form-label">License</label>
                        <input class="form-control" readonly type="text" value="License Name">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">CE Completion Start Date</label>
                                <div class="input-group date">
                                    <input type="text" class="form-control" value="<?php echo date('n/j/Y'); ?>" />
                                    <div class="input-group-btn">
                                        <button class="btn btn-default"><i class="fa fa-calendar"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">CE Completion End Date</label>
                                <div class="input-group date">
                                    <input type="text" class="form-control" value="<?php echo date('n/j/Y',strtotime('+1 year')); ?>" />
                                    <div class="input-group-btn">
                                        <button class="btn btn-default"><i class="fa fa-calendar"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success js-page-ce-print" data-dismiss="modal">Continue</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->


<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>

    $('.js-modal-ce-target').on('click', function(e){
        e.preventDefault();
        $('#modal-ce-records').modal('hide');
        $('#modal-ce-target').modal('show');
    });
    $('.js-modal-ce-records').on('click', function(e){
        e.preventDefault();
        $('#modal-ce-records').modal('show');
    });
    $('.js-modal-ce-print').on('click', function(e){
        e.preventDefault();
        $('#modal-ce-print').modal('show');
    });
    $('.js-page-ce-print').on('click', function(e){
        window.open('ce-tracker-print.php');
    });

    $('.input-group.date').datepicker({
        todayBtn: "linked",
        autoclose: true,
        orientation: 'top'
    }).css('position', 'relative');

    // JS FOR ALERT VISIBILITY BEHAVIOR
    
    $(document).ready(function () {
        var alertsCheck = $("#show-alerts");
        var alertsDismiss = $("#alert-close");
        var alertWarning = $(".alert-warning");
        
</script>
<?= createSiteEnd(); ?>
