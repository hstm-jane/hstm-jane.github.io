<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action'])) ? $_GET['action'] : false;

$patterns['start']['title'] = 'My Portfolio';
$patterns['header']['mainNavActive'] = 'profile';
$patterns['focus']['title'] = 'My Portfolio';

?>
<?=createSiteStart($patterns['start']);?>
<?=createHeader($patterns['header']);?>
<?=createFocus($patterns['focus']);?>
<div class="layout layout-search">
  <div class="container">
    <section class="section section-main section-box">
      <?php

$focusNav = array(
	'tabs' => array(
		array(
			'id' => 'tab-1',
			'label' => 'Personal',
		),
		array(

			'id' => 'tab-2',
			'label' => 'Professional',
		),
		array(
			'id' => 'tab-3',
			'label' => 'Transcript',
		),
		array(
			'id' => 'tab-4',
			'label' => 'Goals',
		),
		array(
			'id' => 'tab-5',
			'label' => 'Notes',
		),
		array(
			'id' => 'tab-6',
			'label' => 'Documents',
		),
		array(
			'active' => true,
			'id' => 'tab-7',
			'label' => 'AccelME',
		),
	),
);
echo createFocusNav($focusNav);

?>
      <div class="tab-content">
        <div class="tab-pane fade" id="tab-1">
          <div class="row">
            <div class="col-md-9">
              <section class="section" style="padding-right:30px; border-right: 1px solid #ddd;">
                <h2>Personal Information</h2>
                <form>
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label class="control-label">Country</label>
                        <select id="inputCountry" class="form-control">
                          <option>United States</option>
                          <option>Canada</option>
                          <option>Australia</option>
                          <option>...</option>
                          <option>...</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Address 1</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Address 2 <small>Optional</small></label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="control-label">City</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="control-label">State</label>
                        <select class="form-control">
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option>...</option>
                          <option>...</option>
                        </select>
                      </div>
                      <div class="row">
                        <div class="col-xs-7 col-sm-5">
                          <div class="form-group">
                            <label class="control-label">ZIP Code</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-xs-5 col-sm-3">
                          <div class="form-group">
                            <label class="control-label">Ext <small>Optional</small></label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-7 col-sm-5">
                          <div class="form-group">
                            <label class="control-label">Phone <small>Optional</small></label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-xs-5 col-sm-3">
                          <div class="form-group">
                            <label class="control-label">Ext <small>Optional</small></label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-7 col-sm-5">
                          <div class="form-group">
                            <label class="control-label">Fax <small>Optional</small></label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
$stickybar = array(
	'sets' => array(
		array(
			'html' => '<button type="submit" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-default">Cancel</button>
                        ',
		),
	),
);
echo createStickybar($stickybar);
?>
                  <div class="form-modified">Updated: Sep 20, 2013 at 3:27pm by sjuniper</div>
                </form>
              </section>
            </div>
            <div cl ass="col-md-3">
              <section class="section">
                <h2>Portfolio Status</h2>
                <div class="progress">
                  <div class="progress-bar" style="width:40%">40%</div>
                </div>
                <p>Completing your Portfolio ensures accurate awarding of CE credit and helps us make better recomendations.</p>
                <!--<p><a href="/portfolio-wizard.php" class="btn btn-sm btn-success">Complete Portfolio</a></p>-->
                <p>
                  <a href="#modal-portfolio-wizard" data-toggle="modal" class="size-check-init btn btn-success btn-sm">Complete Portfolio</a>
                </p>
              </section>
              <section class="section">
                <h2>About Portable Portfolio</h2>
                <p>
                  <a href="#modal-portable-portfolio-about" data-toggle="modal">What is my Portable Portfolio?</a>
                </p>
              </section>
            </div>
          </div>
        </div>
        <!-- /tab-pane -->
        <div class="tab-pane" id="tab-2">
          <div class="row">
            <div class="col-md-9">
              <section class="section" style="padding-right:30px; border-right: 1px solid #ddd;">
                <section class="section work-experience-container">
                  <div class="slat-group">
                    <div class="slat-group-header">
                      <div class="slat-group-header-title">
                        <h2>Work Experience</h2>
                      </div>
                      <div class="slat-group-header-actions">
                        <div class="btn-group">
                          <a class="btn btn-default btn-sm" href="#modal-work-experience" data-toggle="modal">Add</a>
                          <div class="btn-group">
                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li>
                                <a href="#modal-work-experience" data-toggle="modal">Add Item</a>
                              </li>
                              <li role="presentation" class="divider"></li>
                              <!-- <li><a href="#">Move Section Up</a></li> -->
                              <li>
                                <a href="#">Move Section Down</a>
                              </li>
                              <li>
                                <a href="#" class="hide-section" data-section="work-experience">Hide Section</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-content">
                      <div class="slat">
                        <div class="slat-message slat-message-sm">
                          <h3>This section is empty, add your first item.</h3>
                          <a class="btn btn-default btn-sm" href="#modal-work-experience" data-toggle="modal">Add Work Experience</a>
                          <a href="#" class="btn btn-default btn-sm hide-section" data-section="work-experience">Hide Section</a>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-footer"></div>
                  </div>
                </section>
                <section class="section education-container">
                  <div class="slat-group">
                    <div class="slat-group-header">
                      <div class="slat-group-header-title">
                        <h2>Education</h2>
                      </div>
                      <div class="slat-group-header-actions">
                        <div class="btn-group">
                          <a href="#modal-education" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                          <div class="btn-group">
                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li>
                                <a href="#modal-education" data-toggle="modal">Add Item</a>
                              </li>
                              <li role="presentation" class="divider"></li>
                              <li>
                                <a href="#">Move Section Up</a>
                              </li>
                              <li>
                                <a href="#">Move Section Down</a>
                              </li>
                              <li>
                                <a href="#" class="hide-section" data-section="education">Hide Section</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-content">
                      <div class="slat">
                        <div class="slat-message slat-message-sm">
                          <h3>This section is empty, add your first item.</h3>
                          <a href="#modal-education" data-toggle="modal" class="btn btn-default btn-sm">Add Education</a>
                          <a href="#" class="btn btn-default btn-sm hide-section" data-section="education">Hide Section</a>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-footer"></div>
                  </div>
                </section>
                <section class="section licenses-container">
                  <div class="slat-group">
                    <div class="slat-group-header">
                      <div class="slat-group-header-title">
                        <h2>Licenses</h2>
                      </div>
                      <div class="slat-group-header-actions">
                        <div class="btn-group">
                          <a href="#modal-licenses" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                          <div class="btn-group">
                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li>
                                <a href="#modal-licenses" data-toggle="modal">Add Item</a>
                              </li>
                              <li role="presentation" class="divider"></li>
                              <li>
                                <a href="#">Move Section Up</a>
                              </li>
                              <li>
                                <a href="#">Move Section Down</a>
                              </li>
                              <li>
                                <a href="#" class="hide-section" data-section="licenses">Hide Section</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-content">
                      <?php

$slat = array(
	'attributes' => array(
		array('class', array('slat')),
	),
	'title' => '<a href="#">Slat with Split Action</a>',
	'meta' => array(
		array(
			'label' => 'Label:',
			'value' => 'Value',
		),
		array(
			'label' => 'Label:',
			'value' => 'Value',
		),
	),
	'action' => array(
		'type' => 'custom',
		'content' => '
                          <div class="action action-split">
                            <div class="btn-group">
                              <a href="#modal-licenses-manage" data-toggle="modal" class="btn btn-default btn-sm hidden-xs">Manage</a>
                              <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-caret-down"></i>
                              </a>
                              <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#modal-licenses-manage" data-toggle="modal">Manage</a></li>
                                <li><a href="#">Remove</a></li>
                              </ul>
                            </div>
                          </div>
                          ',
	),
	'nested' => array(
		'show' => array('<div class="form-modified" style="margin:0">This license is not available in your portable portfolio, it is restricted to your organization.</div>'),
	),
);
echo createSlat($slat);

echo createSlat($slat);

?>
                    </div>
                    <div class="slat-group-footer">
                      <div class="timestamp">Last Update:
                        <?=date('M d, Y');?>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="section certifications-container">
                  <div class="slat-group">
                    <div class="slat-group-header">
                      <div class="slat-group-header-title">
                        <h2>Certifications</h2>
                      </div>
                      <div class="slat-group-header-actions">
                        <div class="btn-group">
                          <a href="#modal-certifications" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                          <div class="btn-group">
                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li>
                                <a href="#modal-certifications" data-toggle="modal">Add Item</a>
                              </li>
                              <li role="presentation" class="divider"></li>
                              <li>
                                <a href="#">Move Section Up</a>
                              </li>
                              <li>
                                <a href="#">Move Section Down</a>
                              </li>
                              <li>
                                <a href="#" class="hide-section" data-section="certifications">Hide Section</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-content">
                      <?php

$slat = array(
	'attributes' => array(
		array('class', array('slat')),
	),
	'title' => '<a href="#">Slat with Split Action</a>',
	'meta' => array(
		array(
			'label' => 'Label:',
			'value' => 'Value',
		),
		array(
			'label' => 'Label:',
			'value' => 'Value',
		),
	),
	'action' => array(
		'type' => 'custom',
		'content' => '
                          <div class="action action-split">
                            <div class="btn-group">
                              <a href="#modal-certifications-manage" data-toggle="modal" class="btn btn-default btn-sm hidden-xs">Manage</a>
                              <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-caret-down"></i>
                              </a>
                              <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#modal-certifications-manage" data-toggle="modal">Manage</a></li>
                                <li><a href="#">Remove</a></li>
                              </ul>
                            </div>
                          </div>
                          ',
	),
);
echo createSlat($slat);

echo createSlat($slat);

echo createSlat($slat);

?>
                      <div class="collapse-group collapse">
                        <?php
echo createSlat($slat);

echo createSlat($slat);

echo createSlat($slat);
?>
                      </div>
                      <a href="#" class="collapse-toggle" data-toggle-text="Show More|Show Less">Show More<i class="fa fa-fw fa-caret-down"></i></a>
                    </div>
                    <div class="slat-group-footer">
                      <div class="timestamp">Last Update:
                        <?=date('M d, Y');?>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="section resucitation-programs-container">
                  <div class="slat-group">
                    <div class="slat-group-header">
                      <div class="slat-group-header-title">
                        <h2>Resucitation Programs</h2>
                      </div>
                      <div class="slat-group-header-actions">
                        <div class="btn-group">
                          <a href="#modal-resucitation-programs" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                          <div class="btn-group">
                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li>
                                <a href="#modal-resucitation-programs" data-toggle="modal">Add Item</a>
                              </li>
                              <li role="presentation" class="divider"></li>
                              <li>
                                <a href="#">Move Section Up</a>
                              </li>
                              <li>
                                <a href="#">Move Section Down</a>
                              </li>
                              <li>
                                <a href="#" class="hide-section" data-section="resucitation-programs">Hide Section</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-content">
                      <div class="slat">
                        <div class="slat-message slat-message-sm">
                          <h3>This section is empty, add your first item.</h3>
                          <a href="#modal-resucitation-programs" data-toggle="modal" class="btn btn-default btn-sm">Add Resucitation Programs</a>
                          <a href="#" class="btn btn-default btn-sm hide-section" data-section="resucitation-programs">Hide Section</a>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-footer"></div>
                  </div>
                </section>
                <section class="section activities-container">
                  <div class="slat-group">
                    <div class="slat-group-header">
                      <div class="slat-group-header-title">
                        <h2>Volunteer Service</h2>
                      </div>
                      <div class="slat-group-header-actions">
                        <div class="btn-group">
                          <a href="#modal-activities" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                          <div class="btn-group">
                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li>
                                <a href="#modal-activities" data-toggle="modal">Add Item</a>
                              </li>
                              <li role="presentation" class="divider"></li>
                              <li>
                                <a href="#">Move Section Up</a>
                              </li>
                              <li>
                                <a href="#">Move Section Down</a>
                              </li>
                              <li>
                                <a href="#" class="hide-section" data-section="activities">Hide Section</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-content">
                      <div class="slat">
                        <div class="slat-message slat-message-sm">
                          <h3>This section is empty, add your first item.</h3>
                          <a href="#modal-activities" data-toggle="modal" class="btn btn-default btn-sm">Add Volunteer Service</a>
                          <a href="#" class="btn btn-default btn-sm hide-section" data-section="activities">Hide Section</a>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-footer"></div>
                  </div>
                </section>
                <section class="section committee-work-container">
                  <div class="slat-group">
                    <div class="slat-group-header">
                      <div class="slat-group-header-title">
                        <h2>Committee Work</h2>
                      </div>
                      <div class="slat-group-header-actions">
                        <div class="btn-group js-popover-element" data-toggle="popover">
                          <a href="#modal-committee-work" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                          <div class="btn-group">
                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li>
                                <a href="#modal-committee-work" data-toggle="modal">Add Item</a>
                              </li>
                              <li role="presentation" class="divider"></li>
                              <li>
                                <a href="#">Move Section Up</a>
                              </li>
                              <li>
                                <a href="#">Move Section Down</a>
                              </li>
                              <li>
                                <a href="#" class="hide-section" data-section="committee-work">Hide Section</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-content">
                      <div class="slat">
                        <div class="slat-message slat-message-sm">
                          <h3>This section is empty, add your first item.</h3>
                          <a href="#modal-committee-work" data-toggle="modal" class="btn btn-default btn-sm">Add Committee Work</a>
                          <a href="#" class="btn btn-default btn-sm hide-section" data-section="committee-work">Hide Section</a>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-footer"></div>
                  </div>
                </section>
                <section class="section memberships-container" id="memberships-container">
                  <div class="slat-group">
                    <div class="slat-group-header">
                      <div class="slat-group-header-title">
                        <h2>Memberships &amp; Associations</h2>
                      </div>
                      <div class="slat-group-header-actions">
                        <div class="btn-group js-popover-element" data-toggle="popover">
                          <a href="#modal-memberships" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                          <div class="btn-group">
                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li>
                                <a href="#modal-memberships" data-toggle="modal">Add Item</a>
                              </li>
                              <li role="presentation" class="divider"></li>
                              <li>
                                <a href="#">Move Section Up</a>
                              </li>
                              <li>
                                <a href="#">Move Section Down</a>
                              </li>
                              <li>
                                <a href="#" class="hide-section" data-section="memberships">Hide Section</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-content">
                      <div class="slat">
                        <div class="slat-message slat-message-sm">
                          <h3>This section is empty, add your first item.</h3>
                          <a href="#modal-memberships" data-toggle="modal" class="btn btn-default btn-sm">Add Memberships &amp; Associations</a>
                          <a href="#" class="btn btn-default btn-sm hide-section" data-section="memberships">Hide Section</a>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-footer"></div>
                  </div>
                </section>
                <section class="section teaching-container">
                  <div class="slat-group">
                    <div class="slat-group-header">
                      <div class="slat-group-header-title">
                        <h2>Teaching &amp; Preceptorship</h2>
                      </div>
                      <div class="slat-group-header-actions">
                        <div class="btn-group js-popover-element" data-toggle="popover">
                          <a href="#modal-teaching" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                          <div class="btn-group">
                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li>
                                <a href="#modal-teaching" data-toggle="modal">Add Item</a>
                              </li>
                              <li role="presentation" class="divider"></li>
                              <li>
                                <a href="#">Move Section Up</a>
                              </li>
                              <li>
                                <a href="#">Move Section Down</a>
                              </li>
                              <li>
                                <a href="#" class="hide-section" data-section="teaching">Hide Section</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-content">
                      <div class="slat">
                        <div class="slat-message slat-message-sm">
                          <h3>This section is empty, add your first item.</h3>
                          <a href="#modal-teaching" data-toggle="modal" class="btn btn-default btn-sm">Add Teaching &amp; Preceptorship</a>
                          <a href="#" class="btn btn-default btn-sm hide-section" data-section="teaching">Hide Section</a>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-footer"></div>
                  </div>
                </section>
                <section class="section publications-container">
                  <div class="slat-group">
                    <div class="slat-group-header">
                      <div class="slat-group-header-title">
                        <h2>Publications &amp; Research</h2>
                      </div>
                      <div class="slat-group-header-actions">
                        <div class="btn-group">
                          <a href="#modal-publications" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                          <div class="btn-group">
                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li>
                                <a href="#modal-publications" data-toggle="modal">Add Item</a>
                              </li>
                              <li role="presentation" class="divider"></li>
                              <li>
                                <a href="#">Move Section Up</a>
                              </li>
                              <li>
                                <a href="#">Move Section Down</a>
                              </li>
                              <li>
                                <a href="#" class="hide-section" data-section="publications">Hide Section</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-content">
                      <div class="slat">
                        <div class="slat-message slat-message-sm">
                          <h3>This section is empty, add your first item.</h3>
                          <a href="#modal-publications" data-toggle="modal" class="btn btn-default btn-sm">Add Publications &amp; Research</a>
                          <a href="#" class="btn btn-default btn-sm hide-section" data-section="publications">Hide Section</a>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-footer"></div>
                  </div>
                </section>
                <section class="section awards-container">
                  <div class="slat-group">
                    <div class="slat-group-header">
                      <div class="slat-group-header-title">
                        <h2>Awards &amp; Recognition</h2>
                      </div>
                      <div class="slat-group-header-actions">
                        <div class="btn-group">
                          <a href="#modal-awards" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                          <div class="btn-group">
                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li>
                                <a href="#modal-awards" data-toggle="modal">Add Item</a>
                              </li>
                              <li role="presentation" class="divider"></li>
                              <li>
                                <a href="#">Move Section Up</a>
                              </li>
                              <li>
                                <a href="#">Move Section Down</a>
                              </li>
                              <li>
                                <a href="#" class="hide-section" data-section="awards">Hide Section</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-content">
                      <div class="slat">
                        <div class="slat-message slat-message-sm">
                          <h3>This section is empty, add your first item.</h3>
                          <a href="#modal-awards" data-toggle="modal" class="btn btn-default btn-sm">Add Awards &amp; Recognition</a>
                          <a href="#" class="btn btn-default btn-sm hide-section" data-section="awards">Hide Section</a>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-footer"></div>
                  </div>
                </section>
                <section class="section other-container">
                  <div class="slat-group">
                    <div class="slat-group-header">
                      <div class="slat-group-header-title">
                        <h2>Other</h2>
                      </div>
                      <div class="slat-group-header-actions">
                        <div class="btn-group">
                          <a href="#modal-other" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                          <div class="btn-group">
                            <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li>
                                <a href="#modal-other" data-toggle="modal">Add Item</a>
                              </li>
                              <li role="presentation" class="divider"></li>
                              <li>
                                <a href="#">Move Section Up</a>
                              </li>
                              <!-- <li><a href="#">Move Section Down</a></li> -->
                              <li>
                                <a href="#" class="hide-section" data-section="other">Hide Section</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-content">
                      <div class="slat">
                        <div class="slat-message slat-message-sm">
                          <h3>This section is empty, add your first item.</h3>
                          <a href="#modal-other" data-toggle="modal" class="btn btn-default btn-sm">Add Other</a>
                          <a href="#" class="btn btn-default btn-sm hide-section" data-section="other">Hide Section</a>
                        </div>
                      </div>
                    </div>
                    <div class="slat-group-footer"></div>
                  </div>
                </section>
                <?php
$stickybar = array(
	'sets' => array(
		array(
			'html' => '
                      <a href="#modal-sections" data-toggle="modal" class="btn btn-success">Manage Sections</a>
                      <a href="portfolio-print.php" class="btn btn-success" target="_blank">Print</a>
                      ',
		),
	),
);
echo createStickybar($stickybar);
?>
              </section>
            </div>
            <div class="col-md-3">
              <section class="section">
                <h2>Portfolio Status</h2>
                <div class="progress">
                  <div class="progress-bar" style="width:40%">40%</div>
                </div>
                <p>Completing your Portfolio ensures accurate awarding of CE credit and helps us make better recomendations.</p>
                <!--<p><a href="/portfolio-wizard.php" class="btn btn-sm btn-success">Complete Portfolio</a></p>-->
                <p>
                  <a href="#modal-portfolio-wizard" data-toggle="modal" class="size-check-init btn btn-success btn-sm">Complete Portfolio</a>
                </p>
              </section>
              <section class="section">
                <h2>About Portable Portfolio</h2>
                <p>
                  <a href="#modal-portable-portfolio-about" data-toggle="modal">What is my Portable Portfolio?</a>
                </p>
              </section>
            </div>
          </div>
        </div>
        <!-- /tab-pane -->
        <div class="tab-pane fade" id="tab-3">
          <div class="row">
            <div class="col-md-3 hidden-xs hidden-sm hidden-print" data-equalize="layout-columns">
              <section class="section section-refinement-options equalized">
                <section class="section section-refinement-group section-refinement-group-first text-center">
                  <a href="#modal-ce-summary" class="btn btn-default btn-lg" data-toggle="modal">View CE Summary <i class="fa fa-chevron-right"></i> </a>
                </section>
                <section class="section section-refinement-group">
                  <h3>Search</h3>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                    </span>
                  </div>
                </section>
                <section class="section section-refinement-group">
                  <h3>Date Range</h3>
                  <select class="form-control">
                    <optgroup label="Presets">
                      <option>Since January 1</option>
                      <option>Last 6 months</option>
                      <option selected="">Last 12 months</option>
                      <option>Last 24 months</option>
                      <option>Previous Calendar Year</option>
                      <option>Complete History</option>
                    </optgroup>
                    <optgroup label="Custom">
                      <option value="custom">Custom Range</option>
                    </optgroup>
                  </select>
                </section>
                <section class="section section-refinement-group">
                  <h3>Course Type</h3>
                  <ul class="list-unstyled">
                    <li class="checkbox">
                      <label>
                        <input type="checkbox" checked=""> Curriculum</label>
                      </li>
                      <li class="checkbox">
                        <label>
                          <input type="checkbox" checked=""> Courses</label>
                        </li>
                        <li class="checkbox">
                          <label>
                            <input type="checkbox" checked=""> Learning Events</label>
                          </li>
                          <li class="checkbox">
                            <label>
                              <input type="checkbox"> Assessments</label>
                            </li>
                          </ul>
                        </section>
                      </section>
                    </div>
                    <div class="col-md-9" data-equalize="layout-columns">
                      <section class="section visible-print">
                        <h1>My Completed</h1>
                      </section>
                      <section class="section visible-print">
                        <h2>Student Information</h2>
                        <div class="row">
                          <div class="col-xs-6">
                            <label>Name:</label> Stephanie Juniper
                          </div>
                          <div class="col-xs-6">
                            <label>Report Range:</label> Jul 13, 2011 – Jul 12, 2013
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6">
                            <label>User ID:</label> 1234567890
                          </div>
                          <div class="col-xs-6">
                            <label>Hire/Re-hire Date:</label> Jun 5, 2015
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6">
                            <label>Job Title:</label> RN
                          </div>
                          <div class="col-xs-6">
                            <label>Active Date:</label> Jun 5, 2015
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6">
                            <label>Job Category:</label> Nurse
                          </div>
                          <div class="col-xs-6">
                            <label>Review Date:</label> Jun 5, 2015
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6">
                            <label>Department:</label> Nursing
                          </div>
                        </div>
                      </section>
                      <section class="section section-results">
                        <section class="section section-results-header">
                          <div class="row">
                            <div class="col-md-9">
                              <h2>Transcript <small>Showing 1-20 of 35</small></h2>
                              <div class="section section-refinement-applied">
                                <h3>Refinements</h3>
                                <div class="tag-group">
                                  <a href="#" class="tag">Last 12 Months<i class="fa fa-times"></i></a>
                                  <a href="#" class="tag">Curriculum<i class="fa fa-times"></i></a>
                                  <a href="#" class="tag">Courses<i class="fa fa-times"></i></a>
                                  <a href="#" class="tag">Learning Events<i class="fa fa-times"></i></a>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3 hidden-xs hidden-sm">
                              <div class="section-results-header-sort">
                                <div class="dropdown">
                                  <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Date <i class="fa fa-sort"></i></a>
                                  <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="active">
                                      <a href="#">Date</a>
                                    </li>
                                    <li>
                                      <a href="#">Name</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                        <section class="section">
                          <?php

$content = '
                          <section class="section">
                            <h5>Added</h5>
                            <p>Stephanie Juniper, Feb 7, 2014 11:54am</p>
                          </section>
                          <section class="section">
                            <h5>Updated</h5>
                            <p>Stephanie Juniper, Feb 7, 2014 11:57am</p>
                          </section>
                          <section class="section">
                            <h5>Comments</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                          </section>
                          <section class="section">
                            <small class="text-muted">
                              Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
                            </small>
                          </section>
                          ';
$slat = array(
	'title' => 'Student-Entered Learning Event',
	'meta' => array(
		array(
			'type' => 'Learning Event',
		),
		array(
			'label' => 'Est. Time:',
			'value' => '1h',
		),
		array(
			'label' => 'Entry:',
			'value' => 'Student',
		),
		array(
			'label' => 'Completed: ',
			'value' => 'May 19, 2013',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),
	),
	'action' => array(
		'type' => 'custom',
		'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-learningevent-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
	),
	'nested' => array(
		'hide' => array($content),
	),
);
echo createSlat($slat);

$slat = array(
	'title' => '<a href="course-complete.php">Understanding Chronic Pain Management</a>',
	'meta' => array(
		array(
			'type' => 'Course',
		),
		array(
			'label' => 'Est. Time:',
			'value' => '2h 10m',
		),
		array(
			'label' => 'Completed: ',
			'value' => 'May 21, 2013',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),
	),
	'action' => array(
		'type' => 'action-single',
		'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
		'link' => '#',
	),
);
echo createSlat($slat);

$slat = array(
	'title' => '<a href="course.php">Advanta 2 Med Surg Bed</a>',
	'meta' => array(
		array(
			'type' => 'Course',
		),
		array(
			'label' => 'Est. Time:',
			'value' => '15m',
		),
		array(
			'label' => 'Completed: ',
			'value' => 'May 18, 2013',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),
	),
	'action' => array(
		'type' => 'action-single',
		'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
		'link' => '#',
	),
);
echo createSlat($slat);

$slat = array(
	'title' => '<a href="course.php">Content with Video</a>',
	'meta' => array(
		array(
			'type' => 'Course',
		),
		array(
			'label' => 'Est. Time:',
			'value' => '2h',
		),
		array(
			'label' => 'Completed: ',
			'value' => 'May 28, 2013',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),
	),
	'action' => array(
		'type' => 'action-single',
		'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
		'link' => '#',
	),
);
echo createSlat($slat);

$slat = array(
	'title' => '<a href="course.php">Content with Video</a>',
	'meta' => array(
		array(
			'type' => 'Course',
		),
		array(
			'label' => 'Est. Time:',
			'value' => '2h',
		),
		array(
			'label' => 'Completed: ',
			'value' => 'May 29, 2013',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),
	),
	'action' => array(
		'type' => 'action-single',
		'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
		'link' => '#',
	),
);
echo createSlat($slat);

$slat = array(
	'title' => '<a href="course.php">Content with Video</a>',
	'meta' => array(
		array(
			'type' => 'Course',
		),
		array(
			'label' => 'Est. Time:',
			'value' => '2h',
		),
		array(
			'label' => 'Completed: ',
			'value' => 'May 30, 2013',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),
	),
	'action' => array(
		'type' => 'action-single',
		'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
		'link' => '#',
	),
);
echo createSlat($slat);

$content = '
                          <section class="section">
                            <h5>Added</h5>
                            <p>Admin\'s Name, Feb 7, 2014 11:54am</p>
                          </section>
                          <section class="section">
                            <h5>Updated</h5>
                            <p>Admin\'s Name, Feb 7, 2014 11:54am</p>
                          </section>
                          <section class="section">
                            <h5>Comments</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                          </section>
                          <section class="section">
                            <small class="text-muted">
                              Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
                            </small>
                          </section>
                          ';
$nested = createSlat(array(
	'attributes' => array(
		array('class', array('slat')),
	),
	'title' => 'CE - AHIMA',
	'meta' => array(
		array(
			'label' => 'Discipline:',
			'value' => 'Pharmacist, Nuclear',
		),
		array(
			'label' => 'Credits:',
			'value' => '4.00 AMA PRA Category 1 Credit™',
		),
		array(
			'label' => 'License:',
			'value' => '123456789011112',
		),
		array(
			'label' => 'State:',
			'value' => 'TN',
		),
	),
	'action' => array(
		'type' => 'action-single',
		'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
		'link' => '#',
	),
));
$slat = array(
	'title' => 'Admin-Entered Learning Event',
	'meta' => array(
		array(
			'type' => 'Learning Event',
		),
		array(
			'label' => 'Est. Time:',
			'value' => '1h',
		),
		array(
			'label' => 'Entry:',
			'value' => 'Admin',
		),
		array(
			'label' => 'Completed: ',
			'value' => 'July 11, 2013',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),
	),
	'action' => array(
		'type' => 'action-single',
		'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
		'link' => '#',
	),
	'nested' => array(
		'show' => array($nested),
		'hide' => array($content),
	),
);
echo createSlat($slat);

$content = '
                          <section class="section">
                            <h5>Added</h5>
                            <p>Admin\'s Name, Feb 7, 2014 11:54am</p>
                          </section>
                          <section class="section">
                            <h5>Updated</h5>
                            <p>Admin\'s Name, Feb 7, 2014 11:54am</p>
                          </section>
                          <section class="section">
                            <h5>Comments</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                          </section>
                          <section class="section">
                            <small class="text-muted">
                              Enrollment ID: ci:052f3783-1890-e311-8219-001511711350b3|c:88b2b9f46-1890-e311-8219-001511711350b3|v:1
                            </small>
                          </section>
                          ';
$slat = array(
	'title' => '<a data-toggle="modal" href="#modal-learningevent-details">Admin-Entered Learning Event as a Course</a>',
	'meta' => array(
		array(
			'type' => 'Course',
		),
		array(
			'label' => 'Est. Time:',
			'value' => '1h',
		),
		array(
			'label' => 'Entry:',
			'value' => 'Admin',
		),
		array(
			'label' => 'Completed: ',
			'value' => 'July 11, 2013',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),
	),
	'action' => array(
		'type' => 'action-single',
		'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
		'link' => '#',
	),
	'nested' => array(
		'hide' => array($content),
	),
);
echo createSlat($slat);

$slat = array(
	'title' => '<a href="course.php">Heart Disease and Treatment Options</a>',
	'meta' => array(
		array(
			'type' => 'Course',
		),
		array(
			'label' => 'Est. Time:',
			'value' => '1h',
		),
		array(
			'label' => 'Completed: ',
			'value' => 'Oct 10, 2013',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),
	),
	'action' => array(
		'type' => 'action-single',
		'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
		'link' => '#',
	),
);
echo createSlat($slat);

$slat = array(
	'title' => '<a href="course.php">Lippencott - 18-lead electrocardiogram</a>',
	'meta' => array(
		array(
			'type' => 'Course',
		),
		array(
			'label' => 'Est. Time:',
			'value' => '1h',
		),
		array(
			'label' => 'Completed: ',
			'value' => 'Oct 16, 2013',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),
	),
	'action' => array(
		'type' => 'action-single',
		'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
		'link' => '#',
	),
);
echo createSlat($slat);

$nested = createSlat(array(
	'attributes' => array(
		array('class', array('slat')),
	),
	'title' => 'CE - AHIMA',
	'meta' => array(
		array(
			'label' => 'Discipline:',
			'value' => 'Pharmacist, Nuclear',
		),
		array(
			'label' => 'Credits:',
			'value' => '4.00 AMA PRA Category 1 Credit™',
		),
		array(
			'label' => 'License:',
			'value' => '123456789011112',
		),
		array(
			'label' => 'State:',
			'value' => 'TN',
		),
	),
	'action' => array(
		'type' => 'action-single',
		'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
		'link' => '#',
	),
));
$nested1 = createSlat(array(
	'attributes' => array(
		array('class', array('slat')),
	),
	'title' => 'CE - AAPC',
	'meta' => array(
		array(
			'label' => 'Discipline:',
			'value' => 'Emergency Medical Technician - First Responder',
		),
		array(
			'label' => 'Credits:',
			'value' => '2.00 Contact Hours',
		),
		array(
			'label' => 'License:',
			'value' => '123456789011112',
		),
		array(
			'label' => 'State:',
			'value' => 'TN',
		),
	),
	'action' => array(
		'type' => 'action-single',
		'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
		'link' => '#',
	),
));
$slat = array(
	'title' => '<a href="course.php">A Day in the Life of ICD-10</a>',
	'meta' => array(
		array(
			'type' => 'Course',
		),
		array(
			'label' => 'Est. Time:',
			'value' => '1h',
		),
		array(
			'label' => 'Completed: ',
			'value' => 'Oct 19, 2013',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),
	),
	'action' => array(
		'type' => 'action-single',
		'content' => 'Certificate <i class="fa fa-fw fa-print visible-xs"></i>',
		'link' => '#',
	),
	'nested' => array(
		'show' => array($nested, $nested1),
	),
);
echo createSlat($slat);

?>
                        </section>
                        <?php
$stickybar = array(
	'sets' => array(
		array(
			'position' => 'left',
			'classes' => array('hidden-xs', 'hidden-sm'),
			'html' => '
                              <a href="#modal-print" data-toggle="modal" class="btn btn-success">Print</a>
                              <a href="#modal-learningevent" data-toggle="modal" class="btn btn-success">Add Learning Event</a>
                              ',
		),
		array(
			'position' => 'left',
			'classes' => array('visible-xs', 'visible-sm'),
			'html' => '
                              <div class="btn-group dropup">
                                <a href="#" class="btn btn-success">Print</a>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                  <i class="fa fa-caret-up"></i>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#modal-print" data-toggle="modal">Print</a></li>
                                  <li><a href="#modal-learningevent" data-toggle="modal">Add Learning Event</a></li>
                                  <li><a href="#modal-ce-summary" data-toggle="modal">View CE Credit Summary</a></li>
                                </ul>
                              </div>
                              ',
		),
		array(
			'position' => 'right',
			'classes' => array('hidden-xs', 'hidden-sm'),
			'html' => '
                              <div class="btn-group dropup">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 35 <i class="fa fa-caret-up"></i></button>
                                <ul class="dropdown-menu" role="menu">
                                  <li class="active"><a href="#">20 per page</a></li>
                                  <li><a href="#">50 per page</a></li>
                                  <li><a href="#">100 per page</a></li>
                                  <li><a href="#">250 per page</a></li>
                                  <li><a href="#">All results</a></li>
                                </ul>
                              </div>
                              <div class="btn-group">
                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                              </div>
                              ',
		),
		array(
			'position' => 'right',
			'classes' => array('visible-xs', 'visible-sm'),
			'html' => '
                              <a href="#modal-refine" class="btn btn-default" data-toggle="modal"><i class="fa fa-filter"></i></a>
                              <div class="btn-group">
                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                              </div>
                              ',
		),
	),
);
echo createStickybar($stickybar);
?>
                      </section>
                    </div>
                    <!-- col -->
                  </div>
                  <!-- row -->
                </div>
                <!-- /tab-pane -->
                <div class="tab-pane fade" id="tab-4">
                  <div class="row">
                    <div class="col-md-3 hidden-xs hidden-sm hidden-print">
                      <section class="section section-refinement-options">
                        <section class="section section-refinement-group section-refinement-group-first">
                          <h3>Search</h3>
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                              <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                          </div>
                        </section>
                        <section class="section section-refinement-group">
                          <h3>Date Range <small>Based on Start Date</small></h3>
                          <div class="form-group">
                            <select class="form-control" id="select-daterange">
                              <optgroup label="Presets">
                                <option>Since January 1</option>
                                <option>Last 6 Months</option>
                                <option selected>Last 12 Months</option>
                                <option>Last 24 Months</option>
                                <option>Previous Calendar Year</option>
                              </optgroup>
                              <optgroup label="Custom">
                                <option value="custom">Custom Range</option>
                              </optgroup>
                            </select>
                          </div>
                          <div class="form-group" id="custom-daterange" style="display:none">
                            <label>Start Date</label>
                            <div class="input-group date">
                              <input type="text" class="form-control" value="06/05/2015">
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                              </span>
                            </div>
                            <label style="margin-top: 10px;">End Date</label>
                            <div class="input-group date">
                              <input type="text" class="form-control" value="06/04/2016">
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                              </span>
                            </div>
                          </div>
                        </section>
                        <section class="section section-refinement-group">
                          <h3>Type</h3>
                          <ul class="list-unstyled">
                            <li class="checkbox">
                              <label>
                                <input type="checkbox"> Strategic</label>
                              </li>
                              <li class="checkbox">
                                <label>
                                  <input type="checkbox"> Departmental</label>
                                </li>
                                <li class="checkbox">
                                  <label>
                                    <input type="checkbox"> Developmental</label>
                                  </li>
                                  <li class="checkbox">
                                    <label>
                                      <input type="checkbox"> Individual</label>
                                    </li>
                                  </ul>
                                </section>
                                <section class="section section-refinement-group">
                                  <h3>Status</h3>
                                  <ul class="list-unstyled">
                                    <li class="checkbox">
                                      <label>
                                        <input type="checkbox"> Not Yet Started</label>
                                      </li>
                                      <li class="checkbox">
                                        <label>
                                          <input type="checkbox"> In Progress</label>
                                        </li>
                                        <li class="checkbox">
                                          <label>
                                            <input type="checkbox"> Complete</label>
                                          </li>
                                          <li class="checkbox">
                                            <label>
                                              <input type="checkbox"> Not Applicable</label>
                                            </li>
                                          </ul>
                                        </section>
                                      </section>
                                    </div>
                                    <div class="col-md-9">
                                      <section class="section">
                                        <section class="section section-results-header">
                                          <div class="row">
                                            <div class="col-md-9">
                                              <h2>Goals <small>Showing 1-20 of 35</small></h2>
                                              <div class="section section-refinement-applied">
                                                <h3>Refinements</h3>
                                                <div class="tag-group">
                                                  <a href="#" class="tag">Last 12 Months<i class="fa fa-times"></i></a>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-3 hidden-xs hidden-sm">
                                              <div class="section-results-header-sort">
                                                <div class="dropdown">
                                                  <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Date <i class="fa fa-sort"></i></a>
                                                  <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="active">
                                                      <a href="#">Date</a>
                                                    </li>
                                                    <li>
                                                      <a href="#">Name</a>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </section>
                                        <?php
$slat = array(
	'attributes' => array(
		array('class', array('slat', 'slat-attention', 'slat-spaced', 'slat-callout')),
	),
	'title' => '<a href="#modal-goal-manage" data-toggle="modal">This is the title of a goal</a>',
	'meta' => array(
		array(
			'type' => 'Individual',
		),
		array(
			'label' => 'Date: ',
			'value' => 'Apr. 1, 2014',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),
		array(
			'label' => 'Status:',
			'value' => 'In Progress',
		),
	),
	'action' => array(
		'type' => 'custom',
		'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-goal-manage" data-toggle="modal">Manage<i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
	),
);
echo createSlat($slat);

$slat = array(
	'attributes' => array(
		array('class', array('slat', 'slat-spaced')),
	),
	'title' => '<a href="#modal-goal-manage" data-toggle="modal">This is the title of a goal</a>',
	'meta' => array(
		array(
			'type' => 'Departmental',
		),
		array(
			'label' => 'Date: ',
			'value' => 'Jan. 1, 2015',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),
		array(
			'label' => 'Status:',
			'value' => 'In Progress',
		),
	),
	'action' => array(
		'type' => 'custom',
		'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-goal-manage" data-toggle="modal">Manage<i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
	),
);
echo createSlat($slat);

$slat = array(
	'attributes' => array(
		array('class', array('slat', 'slat-spaced')),
	),
	'title' => '<a href="#modal-goal-manage" data-toggle="modal">This is the title of a goal</a>',
	'meta' => array(
		array(
			'type' => 'Individual',
		),
		array(
			'label' => 'Date: ',
			'value' => 'Jan. 1, 2015',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),
		array(
			'label' => 'Status:',
			'value' => 'In Progress',
		),
	),
	'action' => array(
		'type' => 'custom',
		'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-goal-manage" data-toggle="modal">Manage<i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
	),
);
echo createSlat($slat);

$slat = array(
	'attributes' => array(
		array('class', array('slat', 'slat-spaced')),
	),
	'title' => '<a href="#modal-goal-manage" data-toggle="modal">This is the title of a goal</a>',
	'meta' => array(
		array(
			'type' => 'Individual',
		),
		array(
			'label' => 'Date: ',
			'value' => 'Jan. 1, 2015',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),
		array(
			'label' => 'Status:',
			'value' => 'In Progress',
		),
	),
	'action' => array(
		'type' => 'custom',
		'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-goal-manage" data-toggle="modal">Manage<i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
	),
);
echo createSlat($slat);
?>
                                      </section>
                                      <?php
$stickybar = array(
	'sets' => array(
		array(
			'position' => 'left',
			'html' => '
                                            <a href="#modal-goal-add" class="btn btn-success" data-toggle="modal">Add Goal</a>
                                            ',
		),
		array(
			'position' => 'right',
			'classes' => array('hidden-xs', 'hidden-sm'),
			'html' => '
                                            <div class="btn-group dropup">
                                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 35 <i class="fa fa-caret-up"></i></button>
                                              <ul class="dropdown-menu" role="menu">
                                                <li class="active"><a href="#">20 per page</a></li>
                                                <li><a href="#">50 per page</a></li>
                                                <li><a href="#">100 per page</a></li>
                                                <li><a href="#">250 per page</a></li>
                                                <li><a href="#">Show All</a></li>
                                              </ul>
                                            </div>
                                            <div class="btn-group">
                                              <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                              <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                            ',
		),
		array(
			'position' => 'right',
			'classes' => array('visible-xs', 'visible-sm'),
			'html' => '
                                            <a href="#modal-refine-goals" class="btn btn-default" data-toggle="modal"><i class="fa fa-filter"></i></a>
                                            <div class="btn-group">
                                              <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                              <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                            ',
		),
	),
);
echo createStickybar($stickybar);
?>
                                    </div>
                                  </div>
                                </div>
                                <!-- /tab-pane -->
                                <div class="tab-pane fade" id="tab-5">
                                  <div class="row">
                                    <div class="col-md-3 hidden-xs hidden-sm hidden-print">
                                      <section class="section section-refinement-options">
                                        <section class="section section-refinement-group section-refinement-group-first">
                                          <h3>Search</h3>
                                          <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <span class="input-group-btn">
                                              <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                            </span>
                                          </div>
                                        </section>
                                        <section class="section section-refinement-group">
                                          <h3>Date Range</h3>
                                          <div class="form-group">
                                            <select class="form-control" id="select-daterange">
                                              <optgroup label="Presets">
                                                <option>Since January 1</option>
                                                <option>Last 6 Months</option>
                                                <option selected>Last 12 Months</option>
                                                <option>Last 24 Months</option>
                                                <option>Previous Calendar Year</option>
                                              </optgroup>
                                              <optgroup label="Custom">
                                                <option value="custom">Custom Range</option>
                                              </optgroup>
                                            </select>
                                          </div>
                                          <div class="form-group" id="custom-daterange" style="display:none">
                                            <label>Start Date</label>
                                            <div class="input-group date">
                                              <input type="text" class="form-control" value="06/05/2015">
                                              <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                              </span>
                                            </div>
                                            <label style="margin-top: 10px;">End Date</label>
                                            <div class="input-group date">
                                              <input type="text" class="form-control" value="06/04/2016">
                                              <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                              </span>
                                            </div>
                                          </div>
                                        </section>
                          <!-- <section class="section section-refinement-group">
        <h3>Facet</h3>
        <ul class="list-unstyled">
        <li class="checkbox">
        <label><input type="checkbox"> Facet Name</label>
        </li>
        </ul>
      </section> -->
    </section>
  </div>
  <div class="col-md-9">
    <section class="section">
      <section class="section section-results-header">
        <div class="row">
          <div class="col-md-9">
            <h2>Notes <small>Showing 1-20 of 35</small></h2>
            <div class="section section-refinement-applied">
              <h3>Refinements</h3>
              <div class="tag-group">
                <a href="#" class="tag">Last 12 Months<i class="fa fa-times"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 hidden-xs hidden-sm">
            <div class="section-results-header-sort">
              <div class="dropdown">
                <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Date <i class="fa fa-sort"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="active">
                    <a href="#">Date</a>
                  </li>
                  <li>
                    <a href="#">Name</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php

$content = '
      <section class="section">
        <h5>Detail</h5>
        <p>This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
      </section>
      <section class="section">
        <h5>Attachments</h5>
        <ul class="list-unstyled">
          <li><i class="fa fa-paperclip"></i> <a href="#">This is a document</a></li>
        </ul>
      </section>
      ';
$slat = array(
	'title' => 'This is my note',
	'meta' => array(
		array(
			'label' => 'Regarding:',
			'value' => 'Stephanie Juniper',
		),
		array(
			'label' => 'Updated: ',
			'value' => 'Mar 1, 2014 at 2:13pm',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),

	),
	'action' => array(
		'type' => 'custom',
		'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-note-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
	),
	'nested' => array(
		'hide' => array($content),
	),
);
echo createSlat($slat);

echo createSlat($slat);

echo createSlat($slat);

echo createSlat($slat);

echo createSlat($slat);

?>
    </section>
    <?php
$stickybar = array(
	'sets' => array(
		array(
			'position' => 'left',
			'html' => '
          <a href="#modal-note-add" data-toggle="modal" class="btn btn-success">Add Note</a>
          ',
		),
		array(
			'position' => 'right',
			'classes' => array('hidden-xs', 'hidden-sm'),
			'html' => '
          <div class="btn-group dropup">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 35 <i class="fa fa-caret-up"></i></button>
            <ul class="dropdown-menu" role="menu">
              <li class="active"><a href="#">20 per page</a></li>
              <li><a href="#">50 per page</a></li>
              <li><a href="#">100 per page</a></li>
              <li><a href="#">250 per page</a></li>
              <li><a href="#">Show All</a></li>
            </ul>
          </div>
          <div class="btn-group">
            <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
            <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
          </div>
          ',
		),
		array(
			'position' => 'right',
			'classes' => array('visible-xs', 'visible-sm'),
			'html' => '
          <a href="#modal-refine-notes" class="btn btn-default" data-toggle="modal"><i class="fa fa-filter"></i></a>
          <div class="btn-group">
            <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
            <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
          </div>
          ',
		),
	),
);
echo createStickybar($stickybar);
?>
  </div>
</div>
</div>
<!-- /tab-pane -->
<div class="tab-pane fade" id="tab-6">
  <div class="row">
    <div class="col-md-3 hidden-xs hidden-sm hidden-print">
      <section class="section section-refinement-options">
        <section class="section section-refinement-group section-refinement-group-first">
          <h3>Search</h3>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </section>
        <section class="section section-refinement-group">
          <h3>Date Range</h3>
          <div class="form-group">
            <select class="form-control" id="select-daterange">
              <optgroup label="Presets">
                <option>Since January 1</option>
                <option>Last 6 Months</option>
                <option selected>Last 12 Months</option>
                <option>Last 24 Months</option>
                <option>Previous Calendar Year</option>
              </optgroup>
              <optgroup label="Custom">
                <option value="custom">Custom Range</option>
              </optgroup>
            </select>
          </div>
          <div class="form-group" id="custom-daterange" style="display:none">
            <label>Start Date</label>
            <div class="input-group date">
              <input type="text" class="form-control" value="06/05/2015">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
              </span>
            </div>
            <label style="margin-top: 10px;">End Date</label>
            <div class="input-group date">
              <input type="text" class="form-control" value="06/04/2016">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
              </span>
            </div>
          </div>
        </section>
      </section>
    </div>
    <div class="col-md-9">
      <section class="section">
        <section class="section section-results-header">
          <div class="row">
            <div class="col-md-9">
              <h2>Documents <small>Showing 1-20 of 35</small></h2>
              <div class="section section-refinement-applied">
                <h3>Refinements</h3>
                <div class="tag-group">
                  <a href="#" class="tag">Last 12 Months<i class="fa fa-times"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-3 hidden-xs hidden-sm">
              <div class="section-results-header-sort">
                <div class="dropdown">
                  <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Date <i class="fa fa-sort"></i></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li class="active">
                      <a href="#">Date</a>
                    </li>
                    <li>
                      <a href="#">Name</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php

$content = '
        <section class="section">
          <h5>Description</h5>
          <p>This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
        </section>
        ';
$slat = array(
	'title' => '<a href="#">This is the document name</a>',
	'meta' => array(
		array(
			'label' => 'Attachment:',
			'value' => 'Word Document',
		),
		array(
			'label' => 'Updated: ',
			'value' => 'Mar 1, 2014 at 2:13pm',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),

	),
	'action' => array(
		'type' => 'custom',
		'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
	),
	'nested' => array(
		'hide' => array($content),
	),
);
echo createSlat($slat);

$slat = array(
	'title' => '<a href="#">This is the document name</a>',
	'meta' => array(
		array(
			'label' => 'Attachment:',
			'value' => 'Portable Document File',
		),
		array(
			'label' => 'Updated: ',
			'value' => 'Mar 1, 2014 at 2:13pm',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),

	),
	'action' => array(
		'type' => 'custom',
		'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
	),
	'nested' => array(
		'hide' => array($content),
	),
);
echo createSlat($slat);

$slat = array(
	'title' => '<a href="#">This is the document name</a>',
	'meta' => array(
		array(
			'label' => 'Attachment:',
			'value' => 'Excel Spreadsheet',
		),
		array(
			'label' => 'Updated: ',
			'value' => 'Mar 1, 2014 at 2:13pm',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),

	),
	'action' => array(
		'type' => 'custom',
		'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
	),
	'nested' => array(
		'hide' => array($content),
	),
);
echo createSlat($slat);

$slat = array(
	'title' => '<a href="#">This is the document name</a>',
	'meta' => array(
		array(
			'label' => 'Attachment:',
			'value' => 'Portable Document File',
		),
		array(
			'label' => 'Updated: ',
			'value' => 'Mar 1, 2014 at 2:13pm',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),

	),
	'action' => array(
		'type' => 'custom',
		'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
	),
	'nested' => array(
		'hide' => array($content),
	),
);
echo createSlat($slat);

$slat = array(
	'title' => '<a href="#">This is the document name</a>',
	'meta' => array(
		array(
			'label' => 'Attachment:',
			'value' => 'Image',
		),
		array(
			'label' => 'Updated: ',
			'value' => 'Mar 1, 2014 at 2:13pm',
			'attributes' => array(
				array('class', 'meta-callout'),
			),
		),

	),
	'action' => array(
		'type' => 'custom',
		'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-document-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
	),
	'nested' => array(
		'hide' => array($content),
	),
);
echo createSlat($slat);

?>
      </section>
      <?php
$stickybar = array(
	'sets' => array(
		array(
			'position' => 'left',
			'html' => '
            <a href="#modal-document-add" data-toggle="modal" class="btn btn-success">Add Document</a>
            ',
		),
		array(
			'position' => 'right',
			'classes' => array('hidden-xs', 'hidden-sm'),
			'html' => '
            <div class="btn-group dropup">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 35 <i class="fa fa-caret-up"></i></button>
              <ul class="dropdown-menu" role="menu">
                <li class="active"><a href="#">20 per page</a></li>
                <li><a href="#">50 per page</a></li>
                <li><a href="#">100 per page</a></li>
                <li><a href="#">250 per page</a></li>
                <li><a href="#">Show All</a></li>
              </ul>
            </div>
            <div class="btn-group">
              <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
              <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
            </div>
            ',
		),
		array(
			'position' => 'right',
			'classes' => array('visible-xs', 'visible-sm'),
			'html' => '
            <a href="#modal-refine-documents" class="btn btn-default" data-toggle="modal"><i class="fa fa-filter"></i></a>
            <div class="btn-group">
              <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
              <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
            </div>
            ',
		),
	),
);
echo createStickybar($stickybar);
?>
    </div>
  </div>
</div>
<!-- /tab-pane -->
<div class="tab-pane fade in active" id="tab-7">

<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <style>
  .progressWidth{
    width:40%;
  }
  .progress-bar{
     transition: width .6s ease-out;
  }
    .breadcrumb {
      padding:15px;
    list-style: none;
    text-align: center;
    }




    .breadcrumb li {
        display:inline-block;
        vertical-align: middle;
        text-align: center;
        color: white;
        width: 150px;
        height: 150px;
        -webkit-transition: all 1000ms linear;
        -moz-transition: all 1000ms linear;
        -ms-transition: all 1000ms linear;
        -o-transition: all 1000ms linear;
        transition: all 1000ms linear;
    }
    .breadcrumb li a{
      color:white;
    }

    .breadcrumb li.hidden{
      transform: scale(1.5);
    }

    .breadcrumb .active  {
      background: #5cb85c;
    }

    .breadcrumb li.completed  {
      background-color: #333;

    }






    .accel-me-container h3 {
      margin-top: 0;
    }








    /* entire container, keeps perspective */

    .card-container {
      -webkit-perspective: 800px;
      -moz-perspective: 800px;
      -o-perspective: 800px;
      perspective: 800px;
      margin-bottom: 60px;
    }

    .card-container.static.hover .card {
      -webkit-transform: none;
      -moz-transform: none;
      -o-transform: none;
      transform: none;
    }

    .card-container.hover.manual-flip .card {
      -webkit-transform: rotateY( 180deg);
      -moz-transform: rotateY( 180deg);
      -o-transform: rotateY( 180deg);
      transform: rotateY( 180deg);
    }
    /* flip speed goes here */

    .card {
      -webkit-transition: -webkit-transform .5s;
      -moz-transition: -moz-transform .5s;
      -o-transition: -o-transform .5s;
      transition: transform .5s;
      -webkit-transform-style: preserve-3d;
      -moz-transform-style: preserve-3d;
      -o-transform-style: preserve-3d;
      transform-style: preserve-3d;
      position: relative;
    }
    /* hide back of pane during swap */

    .front,
    .back {
      -webkit-backface-visibility: hidden;
      -moz-backface-visibility: hidden;
      -o-backface-visibility: hidden;
      backface-visibility: hidden;
      position: absolute;
      top: 0;
      left: 0;
      background-color: #FFF;
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.14);
    }
    /* front pane, placed above back */

    .front {
      z-index: 2;
    }
    /* back, initially hidden pane */

    .back {
      -webkit-transform: rotateY( 180deg);
      -moz-transform: rotateY( 180deg);
      -o-transform: rotateY( 180deg);
      transform: rotateY( 180deg);
      z-index: 3;
    }
    /*Style*/

    .card {
      background: none repeat scroll 0 0 #FFFFFF;
      border-radius: 4px;
      color: #444444;

    }
    .card:hover{
       cursor:pointer;
    }

    .card.card-education {}

    .card-container,
    .front,
    .back {
      width: 100%;
      height: 300px;
      border-radius: 4px;
      -webkit-box-shadow: 0px 0px 19px 0px rgba(0, 0, 0, 0.16);
      -moz-box-shadow: 0px 0px 19px 0px rgba(0, 0, 0, 0.16);
      box-shadow: 0px 0px 19px 0px rgba(0, 0, 0, 0.16);
    }

    .card-container.completed {
      opacity: .5;
      transition: all .2s ease;
      filter: grayscale(100%);
    }

    .card-container.completed:hover {
      opacity: 1;
      filter: grayscale(0%);
    }

    .card .cover {
      height: 90px;
      overflow: hidden;
      border-radius: 4px 4px 0 0;
      background-color: #09c;
    }
                  /*
                    .card.journey-badge .cover {
                      background-image: url("./content/images/badge.png");
                      background-position: ;
                      background-repeat: no-repeat;
                      background-position: 97% 5%;
                      background-size: 15%;
                    }*/
                    .card.card-education .cover{
                      background-image: url("./content/images/accelME/bokeh-books.jpg");
                      background-size:100%;
                    }

                    .card.card-education .user{
                      background-color:#D64933;
                    }

                    .card.card-innovation .cover{
                      background-image: url("./content/images/accelME/edison-bulbs.jpg");
                      background-size:100%;
                      background-position:left bottom;
                    }
                    .card.card-innovation .user{
                      background-color:#816A78;
                    }


                    .card.card-expertise .cover{
                     background-image: url("./content/images/accelME/chess.jpg");
                     background-size:100%;
                     background-position:left bottom;

                   }
                   .card.card-expertise .user{
                    background-color:#EA8C55;
                  }

                  .card.card-profession-engagement .cover{
                    background-image: url("./content/images/accelME/meeting-space-2.jpg");
                    background-size:100%;
                    background-position:left bottom;

                  }
                  .card.card-profession-engagement .user{
                    background-color:#2B303A;
                  }
                  .card.card-leadership .cover{
                    background-image: url("./content/images/accelME/globes.jpg");
                    background-size:100%;
                    background-position:left bottom;

                  }
                  .card.card-leadership .user{
                    background-color:#0e7c7B;

                  }

                  .card.card-level .cover{
                    background-image: url("./content/images/accelME/confetti.jpg");
                    background-size:100%;
                    background-position:right top;

                  }
                  .card.card-level .user{
                    background-color:#000;

                  }

                  .card .cover img {
                    width: 100%;
                    display: none;
                  }

                  .card .user {
                    border-radius: 50%;
                    display: block;
                    height: 110px;
                    margin: -80px auto 0;
                    overflow: hidden;
                    width: 110px;
                    z-index: 5555555;
                    background-color: #09c;
                    position: relative;
                    text-align: center;
                    color: white;
                    border: 2px solid white;
                    opacity: .9;
                  }

                  .card .user i {
                    position: relative;
                    color: white;
                    margin-top: 28%;
                    font-size: 50px;
                  }

                  .card .user .points-value {
                    line-height: 1em;
                    font-size: 35px;
                  }

                  .card .user .points-label {
                    font-size: 15px;
                  }

                  .card .user p {
                    margin: 0;
                  }

                  .card .user div {
                    margin-top: 20px;
                  }

                  .card .content {
                    background-color: rgba(0, 0, 0, 0);
                    box-shadow: none;
                    padding: 10px 20px 20px;
                  }
/*
                  .accel-me-container>.progress .progress-bar {
                    background: #0099cc;

                    background: -moz-linear-gradient(left, #0099cc 0%, #a3d9ed 100%);

                    background: -webkit-linear-gradient(left, #0099cc 0%, #a3d9ed 100%);

                    background: linear-gradient(to right, #0099cc 0%, #a3d9ed 100%);

                    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#0099cc', endColorstr='#a3d9ed', GradientType=1);

                  }*/

                  .card .back .content .main {
                    height: 215px;
                  }

                  .card .name {
                    font-size: 20px;
                    line-height: 28px;
                    margin: 10px 0;
                    text-align: center;
                    text-transform: capitalize;
                  }

                  .card h5 {
                    margin: 5px 0;
                    font-weight: 400;
                    line-height: 20px;
                  }

                  .card .profession {
                    color: #999999;
                    text-align: center;
                    margin-bottom: 20px;
                  }

                  .card .footer {
                    border-top: 1px solid #EEEEEE;
                    color: #999999;
                    margin: 30px 0 0;
                    padding: 10px 0 0;
                    text-align: center;
                    position: absolute;
                    bottom: 10px;
                    right: 10px;
                    left: 10px;
                  }

                  .card .footer .social-links {
                    font-size: 18px;
                  }

                  .card .footer .social-links a {
                    margin: 0 7px;
                  }

                  .card .footer .btn-simple {
                    margin-top: -6px;
                  }

                  .card .header {
                    padding: 15px 20px;
                    height: 90px;
                  }

                  .card .motto {

                    border-bottom: 1px solid #EEEEEE;
                    color: #999999;
                    font-size: 14px;
                    font-weight: 400;
                    padding-bottom: 10px;
                    text-align: center;
                  }

                  .card .stats-container {
                    width: 100%;
                    margin-top: 50px;
                  }

                  .card .stats {
                    display: block;
                    float: left;
                    width: 33.333333%;
                    text-align: center;
                  }

                  .card .stats:first-child {
                    border-right: 1px solid #EEEEEE;
                  }

                  .card .stats:last-child {
                    border-left: 1px solid #EEEEEE;
                  }

                  .card .stats h4 {

                    font-weight: 300;
                    margin-bottom: 5px;
                  }

                  .card .stats p {
                    color: #777777;
                  }
                  /*      Just for presentation        */

                  .popover.accelMe-tip {}

                  .popover.accelMe-tip .bg-info {
                    background-image: -webkit-linear-gradient(top, #26a8d4 0, #40b3d9 100%);
                    background-image: linear-gradient(to bottom, #26a8d4 0, #40b3d9 100%);
                    background-color: #40b3d9;
                    color: #fff;
                    text-shadow: 1px 1px 0 #008ab8;
                  }

                  .popover.right .arrow:after {
                    left: 1px;
                    border-left-width: 0;
                    border-right-color: #40b3d9;
                  }

                  pre.prettyprint {
                    background-color: #ffffff;
                    border: 1px solid #999;
                    margin-top: 20px;
                    padding: 20px;
                    text-align: left;
                  }

                  .atv,
                  .str {
                    color: #05AE0E;
                  }

                  .tag,
                  .pln,
                  .kwd {
                    color: #3472F7;
                  }

                  .atn {
                    color: #2C93FF;
                  }

                  .pln {
                    color: #333;
                  }

                  .com {
                    color: #999;
                  }

                  .btn-simple {
                    opacity: .8;
                    color: #666666;
                    background-color: transparent;
                  }

                  .btn-simple:hover,
                  .btn-simple:focus {
                    background-color: transparent;
                    box-shadow: none;
                    opacity: 1;
                  }

                  .btn-simple i {
                    font-size: 16px;
                  }

                  .navbar-brand-logo {
                    padding: 0;
                  }

                  .navbar-brand-logo .logo {
                    border: 1px solid #333333;
                    border-radius: 50%;
                    float: left;
                    overflow: hidden;
                    width: 60px;
                  }

                  .navbar .navbar-brand-logo .brand {
                    color: #FFFFFF;
                    float: left;
                    font-size: 18px;
                    font-weight: 400;
                    line-height: 20px;
                    margin-left: 10px;
                    margin-top: 10px;
                    width: 60px;
                  }

                  .navbar-default .navbar-brand-logo .brand {
                    color: #555;
                  }
                  /*       Fix bug for IE      */

                  @media screen and (-ms-high-contrast: active),
                  (-ms-high-contrast: none) {
                    .front,
                    .back {
                      -ms-backface-visibility: visible;
                      backface-visibility: visible;
                    }
                    .back {
                      visibility: hidden;
                      -ms-transition: all 0.2s cubic-bezier(.92, .01, .83, .67);
                    }
                    .front {
                      z-index: 4;
                    }
                    .card-container:not(.manual-flip):hover .back,
                    .card-container.manual-flip.hover .back {
                      z-index: 5;
                      visibility: visible;
                    }
                  }

                  .hexagon {
                    position: relative;
                    width: 35px;
                    height: 20.21px;
                    background-color: #64C7CC;
                    margin: 10.10px 0;
                    display: inline-block;
                    vertical-align: middle;
                    border-left: solid 3px #a9f2f4;
                    border-right: solid 3px #a9f2f4;
                    z-index: 5;
                  }

                  .hexagon:not(:first-of-type) {
                    margin-right: -47px;
                    z-index: 4;
                    left: -27px;
                    position: relative;
                  }

                  .hexagon:before,
                  .hexagon:after {
                    content: "";
                    position: absolute;
                    z-index: 1;
                    width: 24.75px;
                    height: 24.75px;
                    -webkit-transform: scaleY(0.5774) rotate(-45deg);
                    -ms-transform: scaleY(0.5774) rotate(-45deg);
                    transform: scaleY(0.5774) rotate(-45deg);
                    background-color: inherit;
                    left: 2.1256px;
                  }

                  .hexagon:before {
                    top: -12.3744px;
                    border-top: solid 4.2426px #a9f2f4;
                    border-right: solid 4.2426px #a9f2f4;
                  }

                  .hexagon:after {
                    bottom: -12.3744px;
                    border-bottom: solid 4.2426px #a9f2f4;
                    border-left: solid 4.2426px #a9f2f4;
                  }

                  .hexagon i {
                    position: absolute;
                    color: white;
                    font-size: 18px;
                    left: 50%;
                    margin-left: -12px;
                    z-index: 55555;
                  }

                  #modal-badges .modal-body {
                    text-align: center;
                  }

                  #modal-badges label {
                    margin-top: 50px;
                    text-align: center;
                  }

                  #modal-badges .hexagon {
                    position: relative;
                    width: 80px;
                    height: 46.19px;
                    background-color: #64C7CC;
                    margin: 23.09px 0;
                    box-shadow: 0 0 5px rgba(0, 0, 0, 0.35);
                    border-left: solid 3px #a9f2f4;
                    border-right: solid 3px #a9f2f4;
                    display: inline-block;
                    left: 0;
                    margin-bottom: 20px;
                  }

                  #modal-badges .hexagon:before,
                  #modal-badges .hexagon:after {
                    content: "";
                    position: absolute;
                    z-index: 1;
                    width: 56.57px;
                    height: 56.57px;
                    -webkit-transform: scaleY(0.5774) rotate(-45deg);
                    -ms-transform: scaleY(0.5774) rotate(-45deg);
                    transform: scaleY(0.5774) rotate(-45deg);
                    background-color: inherit;
                    left: 8.7157px;
                    box-shadow: 0 0 5px rgba(0, 0, 0, 0.35);
                  }

                  #modal-badges .hexagon:before {
                    top: -28.2843px;
                    border-top: solid 4.2426px #a9f2f4;
                    border-right: solid 4.2426px #a9f2f4;
                  }

                  #modal-badges .hexagon:after {
                    bottom: -28.2843px;
                    border-bottom: solid 4.2426px #a9f2f4;
                    border-left: solid 4.2426px #a9f2f4;
                  }
                  /*cover up extra shadows*/

                  #modal-badges .hexagon span {
                    display: block;
                    position: absolute;
                    top: 1.7320508075688772px;
                    left: 0;
                    width: 74px;
                    height: 42.7239px;
                    z-index: 2;
                    background: inherit;
                  }

                  .points {
                    color: white;
                    font-size: .9em;
                    text-align: right;
                    margin-right: 5px;
                    margin-top: 5px;
                  }
                    /*.marker{
  font-size: 1.5em;
}*/

.marker .fa {
  display: none;
}

.completed .card .user div
{
  display:none;
}
.progress-circle {
   font-size: 20px;
   margin: 20px;
   position: relative; /* so that children can be absolutely positioned */
   padding: 0;
   width: 5em;
   height: 5em;
   background-color: #F2E9E1;
   border-radius: 50%;
   line-height: 5em;
}

.progress-circle:after{
    border: none;
    position: absolute;
    top: 0.35em;
    left: 0.35em;
    text-align: center;
    display: block;
    border-radius: 50%;
    width: 4.3em;
    height: 4.3em;
    background-color: white;
    content: " ";
}
/* Text inside the control */
.progress-circle span {
    position: absolute;
    line-height: 5em;
    width: 5em;
    text-align: center;
    display: block;
    color: #0099cc;
    z-index: 2;
}
.left-half-clipper {
   /* a round circle */
   border-radius: 50%;
   width: 5em;
   height: 5em;
   position: absolute; /* needed for clipping */
   clip: rect(0, 5em, 5em, 2.5em); /* clips the whole left half*/
}
/* when p>50, don't clip left half*/
.progress-circle.over50 .left-half-clipper {
   clip: rect(auto,auto,auto,auto);
}
.value-bar {
   /*This is an overlayed square, that is made round with the border radius,
   then it is cut to display only the left half, then rotated clockwise
   to escape the outer clipping path.*/
   position: absolute; /*needed for clipping*/
   clip: rect(0, 2.5em, 5em, 0);
   width: 5em;
   height: 5em;
   border-radius: 50%;
   border: 0.45em solid #0099cc; /*The border is 0.35 but making it larger removes visual artifacts */
   /*background-color: #4D642D;*/ /* for debug */
   box-sizing: border-box;

}
/* Progress bar filling the whole right half for values above 50% */
.progress-circle.over50 .first50-bar {
   /*Progress bar for the first 50%, filling the whole right half*/
   position: absolute; /*needed for clipping*/
   clip: rect(0, 5em, 5em, 2.5em);
   background-color: #53777A;
   border-radius: 50%;
   width: 5em;
   height: 5em;
}
.progress-circle:not(.over50) .first50-bar{ display: none; }


/* Progress bar rotation position */
.progress-circle.p0 .value-bar { display: none; }
.progress-circle.p1 .value-bar { transform: rotate(4deg); }
.progress-circle.p2 .value-bar { transform: rotate(7deg); }
.progress-circle.p3 .value-bar { transform: rotate(11deg); }
.progress-circle.p4 .value-bar { transform: rotate(14deg); }
.progress-circle.p5 .value-bar { transform: rotate(18deg); }
.progress-circle.p6 .value-bar { transform: rotate(22deg); }
.progress-circle.p7 .value-bar { transform: rotate(25deg); }
.progress-circle.p8 .value-bar { transform: rotate(29deg); }
.progress-circle.p9 .value-bar { transform: rotate(32deg); }
.progress-circle.p10 .value-bar { transform: rotate(36deg); }
.progress-circle.p11 .value-bar { transform: rotate(40deg); }
.progress-circle.p12 .value-bar { transform: rotate(43deg); }
.progress-circle.p13 .value-bar { transform: rotate(47deg); }
.progress-circle.p14 .value-bar { transform: rotate(50deg); }
.progress-circle.p15 .value-bar { transform: rotate(54deg); }
.progress-circle.p16 .value-bar { transform: rotate(58deg); }
.progress-circle.p17 .value-bar { transform: rotate(61deg); }
.progress-circle.p18 .value-bar { transform: rotate(65deg); }
.progress-circle.p19 .value-bar { transform: rotate(68deg); }
.progress-circle.p20 .value-bar { transform: rotate(72deg); }
.progress-circle.p21 .value-bar { transform: rotate(76deg); }
.progress-circle.p22 .value-bar { transform: rotate(79deg); }
.progress-circle.p23 .value-bar { transform: rotate(83deg); }
.progress-circle.p24 .value-bar { transform: rotate(86deg); }
.progress-circle.p25 .value-bar { transform: rotate(90deg); }
.progress-circle.p26 .value-bar { transform: rotate(94deg); }
.progress-circle.p27 .value-bar { transform: rotate(97deg); }
.progress-circle.p28 .value-bar { transform: rotate(101deg); }
.progress-circle.p29 .value-bar { transform: rotate(104deg); }
.progress-circle.p30 .value-bar { transform: rotate(108deg); }
.progress-circle.p31 .value-bar { transform: rotate(112deg); }
.progress-circle.p32 .value-bar { transform: rotate(115deg); }
.progress-circle.p33 .value-bar { transform: rotate(119deg); }
.progress-circle.p34 .value-bar { transform: rotate(122deg); }
.progress-circle.p35 .value-bar { transform: rotate(126deg); }
.progress-circle.p36 .value-bar { transform: rotate(130deg); }
.progress-circle.p37 .value-bar { transform: rotate(133deg); }
.progress-circle.p38 .value-bar { transform: rotate(137deg); }
.progress-circle.p39 .value-bar { transform: rotate(140deg); }
.progress-circle.p40 .value-bar { transform: rotate(144deg); }
.progress-circle.p41 .value-bar { transform: rotate(148deg); }
.progress-circle.p42 .value-bar { transform: rotate(151deg); }
.progress-circle.p43 .value-bar { transform: rotate(155deg); }
.progress-circle.p44 .value-bar { transform: rotate(158deg); }
.progress-circle.p45 .value-bar { transform: rotate(162deg); }
.progress-circle.p46 .value-bar { transform: rotate(166deg); }
.progress-circle.p47 .value-bar { transform: rotate(169deg); }
.progress-circle.p48 .value-bar { transform: rotate(173deg); }
.progress-circle.p49 .value-bar { transform: rotate(176deg); }
.progress-circle.p50 .value-bar { transform: rotate(180deg); }
.progress-circle.p51 .value-bar { transform: rotate(184deg); }
.progress-circle.p52 .value-bar { transform: rotate(187deg); }
.progress-circle.p53 .value-bar { transform: rotate(191deg); }
.progress-circle.p54 .value-bar { transform: rotate(194deg); }
.progress-circle.p55 .value-bar { transform: rotate(198deg); }
.progress-circle.p56 .value-bar { transform: rotate(202deg); }
.progress-circle.p57 .value-bar { transform: rotate(205deg); }
.progress-circle.p58 .value-bar { transform: rotate(209deg); }
.progress-circle.p59 .value-bar { transform: rotate(212deg); }
.progress-circle.p60 .value-bar { transform: rotate(216deg); }
.progress-circle.p61 .value-bar { transform: rotate(220deg); }
.progress-circle.p62 .value-bar { transform: rotate(223deg); }
.progress-circle.p63 .value-bar { transform: rotate(227deg); }
.progress-circle.p64 .value-bar { transform: rotate(230deg); }
.progress-circle.p65 .value-bar { transform: rotate(234deg); }
.progress-circle.p66 .value-bar { transform: rotate(238deg); }
.progress-circle.p67 .value-bar { transform: rotate(241deg); }
.progress-circle.p68 .value-bar { transform: rotate(245deg); }
.progress-circle.p69 .value-bar { transform: rotate(248deg); }
.progress-circle.p70 .value-bar { transform: rotate(252deg); }
.progress-circle.p71 .value-bar { transform: rotate(256deg); }
.progress-circle.p72 .value-bar { transform: rotate(259deg); }
.progress-circle.p73 .value-bar { transform: rotate(263deg); }
.progress-circle.p74 .value-bar { transform: rotate(266deg); }
.progress-circle.p75 .value-bar { transform: rotate(270deg); }
.progress-circle.p76 .value-bar { transform: rotate(274deg); }
.progress-circle.p77 .value-bar { transform: rotate(277deg); }
.progress-circle.p78 .value-bar { transform: rotate(281deg); }
.progress-circle.p79 .value-bar { transform: rotate(284deg); }
.progress-circle.p80 .value-bar { transform: rotate(288deg); }
.progress-circle.p81 .value-bar { transform: rotate(292deg); }
.progress-circle.p82 .value-bar { transform: rotate(295deg); }
.progress-circle.p83 .value-bar { transform: rotate(299deg); }
.progress-circle.p84 .value-bar { transform: rotate(302deg); }
.progress-circle.p85 .value-bar { transform: rotate(306deg); }
.progress-circle.p86 .value-bar { transform: rotate(310deg); }
.progress-circle.p87 .value-bar { transform: rotate(313deg); }
.progress-circle.p88 .value-bar { transform: rotate(317deg); }
.progress-circle.p89 .value-bar { transform: rotate(320deg); }
.progress-circle.p90 .value-bar { transform: rotate(324deg); }
.progress-circle.p91 .value-bar { transform: rotate(328deg); }
.progress-circle.p92 .value-bar { transform: rotate(331deg); }
.progress-circle.p93 .value-bar { transform: rotate(335deg); }
.progress-circle.p94 .value-bar { transform: rotate(338deg); }
.progress-circle.p95 .value-bar { transform: rotate(342deg); }
.progress-circle.p96 .value-bar { transform: rotate(346deg); }
.progress-circle.p97 .value-bar { transform: rotate(349deg); }
.progress-circle.p98 .value-bar { transform: rotate(353deg); }
.progress-circle.p99 .value-bar { transform: rotate(356deg); }
.progress-circle.p100 .value-bar { transform: rotate(360deg); }


.circle-chart__circle {
  transform: rotate(-90deg);
  transform-origin: center;
}

.circle-chart__circle {
  animation: circle-chart-fill 2s reverse;
  transform: rotate(-90deg);
  transform-origin: center;
}

@keyframes circle-chart-fill {
  to { stroke-dasharray: 0 100; }
}



.level-circles .row span{
  width: 70px;
  height:70px;
  border:3px solid #09c;
  display: block;
  border-radius: 50%;
  color: #000;
border: 2px solid #666;
  margin:auto;
/*  background-color: #09c;*/
/*//font-family: 'Merriweather', serif;*/
    transition: all .2s ease;
/*color:white;*/
/*2*/
margin-top: 9px;
background-color: white;

 }
 .level-circles{

  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
  background-color: #ccc;
 }
 .level-circles .row a:hover span,
 .level-circles .row .active{

   border-color:#09c;
   background-color:white;
   border-width: 5px;
   color: #333;

 }

  .level-circles .row a:hover span{

   border-color:#09c;
   background-color:white;
   border-width: 5px;

 }
 .level-circles div{
  padding: 5px;
  cursor:pointer;
 }
  .level-circles p{
    text-decoration: none;
    font-style: normal;
    font-size:24px;
    padding-top: 14px;

 }
.level-circles a{

    display: inline-block;
    width: 90px;
    height: 90px;
    margin: auto;
    transition: all .2s ease;
    border-radius: 50%;
    text-align: center;

}

.level-circles .current span{

background-color: #F5A623;
color:white;
border-color: white;
}

 .level-circles a:hover{
  text-decoration:none;

 }

 .level-circles .row .completed {
  background: #419641;
  color:white;
  border-color: #419641;
 }

 .col-md-3 span{
  /*font-family: 'Merriweather', serif;*/
  line-height: 1em;


 }

.total-progress{
  position:relative;
background-color: #ccc;
  border-right: none;
   border-top-left-radius: 4px;
   border-bottom-left-radius: 4px;
   height: 200px;
   padding-top:15px;
   padding-bottom:15px;
}

.total-progress-score{
  position:absolute; top:33%; left: 50%;  margin-left: -60px; width:120px;text-align: center; vertical-align: middle; font-size:25px;
}
.separator{
  display:inline-block;
  height: 40px;
  border-left:1px solid #ccc;
  margin-bottom:-10px
}.level-circles{
  display: table;
}
.level-circles .row{
  display: table-row;
}
.level-circles .col-md-4{
  display:table-cell;
}

.bonus {

}
</style>

<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<div class="container accel-me-container">
  <h2><span style="font-size: 1.3em">AccelME</span> <span class="separator"></span> <b>Professional Advancement </b>Journey
    <a href="#modal-badges" data-toggle="modal">
      <div class="hexagon"><i class="fa fa-cubes"></i></div>
      <div class="hexagon"><i class="fa fa-cubes"></i></div>
      <div class="hexagon"><i class="fa fa-cubes"></i></div>
      <div class="hexagon"><i class="fa fa-cubes"></i></div>
    </a>
  </h2>




  <div class="level-wrapper">
  <div class="container">
    <div class="row" style=" ">
      <div class="col-md-3 text-center total-progress" style="">
          <span class="total-progress-score" style="">33% <br /> <label style="font-size:16px; font-family: 'Open Sans', serif;">Accomplished</label></span>
          <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="150" height="150" xmlns="http://www.w3.org/2000/svg">
          <circle class="circle-chart__background" stroke="#efefef" stroke-width="2" fill="#ffffff" cx="16.91549431" cy="16.91549431" r="15.91549431" />

          <circle class="circle-chart__circle" stroke="#0099cc" stroke-width="2" stroke-dasharray="33,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
        </svg>
      </div>
      <div class="col-md-9 level-circles" style="">
        <div class="row">
          <div class="col-md-4"><a href="#level-1" data-toggle="tab"><span class="completed bg-success"><p><i class="fa fa-check"></i></p></span></a> Novice</div>
          <div class="col-md-4"><a href="#level-2" class="current" data-toggle="tab"><span><p>2</p></span></a> Advanced Beginner</div>
          <div class="col-md-4"><a href="#level-3" data-toggle="tab"><span><p>3</p></span></a> Competent</div>




        </div>
        <div class="row">
          <div class="col-md-4"><a href="#level-4" data-toggle="tab"><span><p>4</p></span></a> Preficient</div>
          <div class="col-md-4"><a href="#level-5" data-toggle="tab"><span><p>5</p></span></a> Expert</div>
          <div class="col-md-4"><a href="#level-Bonus" data-toggle="tab"><span><p style="font-size:16px; padding-top: 15px"><i class="fa fa-star fa-2x bonus" style="color: #F5A623"></i></p></span></a> Bonus</div>

        </div>
      </div>
    </div>
  </div>
  </div>

<div class="tab-content" style="margin-top:20px">
  <div class="tab-pane fade " id="level-1">

    <div class="container" style="margin-top:25px;">
      <h2 style="margin-top: 0; margin-bottom: 15px">Level 1 Tasks</h2>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip completed">
            <div class="card journey-badge" onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <i class="fa fa-check"></i>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">15 CE Units</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Education</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Stay sharp! Earn 15 continuing education units.</p>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" rel="tooltip"  data-original-title="Flip Card">
                      <i class="fa fa-reply"></i> Back
                    </button>
                  </div>
                </div>
                <!-- end back panel -->
              </div>
              <!-- end card -->
            </div>
            <!-- end card-container -->
          </div>
          <!-- end col sm 3 -->
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip completed">
            <div class="card" onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <i class="fa fa-check"></i>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">ADN Degree</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Education</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Launch your journey! Achieve Associate's Degree in Nursing.</p>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" rel="tooltip"  data-original-title="Flip Card">
                      <i class="fa fa-reply"></i> Back
                    </button>
                  </div>
                </div>
                <!-- end back panel -->
              </div>
              <!-- end card -->
            </div>
            <!-- end card-container -->
          </div>
          <!-- end col sm 3 -->
        </div>
      </div>
    </div>
  </div>
  <div class="tab-pane fade active in" id="level-2">
    <div class="container" style="margin-top:25px;">
       <h2 style="margin-top: 0; margin-bottom: 30px">L2 - Advanced Beginner Tasks</h2>
      <div class="row">

        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip">
            <div class="card journey-badge card-profession-engagement" onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Professional Membership</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">"Professional Engagement"</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Collaborate and contribute! Be an active member in a Local, State, or National Organization.</p>
                    <p class="text-center">
                      <a href="#" class="professional-membership-action" data-target="#tab-2" data-toggle="tab">Add a <strong>Membership</strong> record.</a>
                    </p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip">
            <div class="card journey-badge card-leadership" onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                  <img src="https://www.clipartsgram.com/image/129556292-kyz84k3.jpg" />
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">In-service Provider</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">"Leadership"</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Share your knowledge! Teach an in-service.</p>
                    <p class="text-center">
                      <a href="#" class="in-service-provider-action" data-toggle="tab" data-target="#tab-2">Add a <strong>Teaching</strong> record.</a>
                    </p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip" title="" data-original-title="Flip Card">
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3  col-sm-6">
          <div class="card-container manual-flip">
            <div class="card journey-badge card-innovation" onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Committee Membership</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">"Innovation"</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Innovate and improve! Be an active member on a Housewide or Unit Committee/Council.</p>
                    <p class="text-center">
                      <a href="#" class="committee-action" data-toggle="tab" data-target="#tab-2">Add a <strong>Committee</strong> record.</a>
                    </p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip">
            <div class="card card-education" onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">15</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">15 CE Units</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">"Education"</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Improve quality! Earn 15 continuing education units.</p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip"  data-original-title="Flip Card">
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col-sm-3 -->
        <div class="col-md-3  col-sm-6">
          <div class="card-container manual-flip">
            <div class="card card-profession-engagement" onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">50</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Mentor, Preceptor, or Super User</h3>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" >
                    <i class="fa fa-mail-forward"></i> Read More
                  </button>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">"Professional Engagement"</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Help others accelerate their learning and confidence. Be a Mentor, Preceptor, or Super User. </p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3  col-sm-6">
          <div class="card-container manual-flip completed" >
            <div class="card card-education" onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">100</p>
                    <p class="points-label">points</p>

                  </div>
                  <i class="fa fa-check"></i>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">ADN Degree</h3>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" >
                    <i class="fa fa-mail-forward"></i> Read More
                  </button>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">"Education"</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Launch your journey! Achieve Associate's Degree in Nursing.</p>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                      <i class="fa fa-reply"></i> Back
                    </button>
                  </div>
                </div>
                <!-- end back panel -->
              </div>
              <!-- end card -->
            </div>
            <!-- end card-container -->
          </div>
          <!-- end col sm 3 -->
        </div>
        <!-- end row -->

        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip ">
            <div class="card card-expertise" onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Specialty Certification</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Expertise</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Validate your expertise! Earn a specialty certification. </p>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" rel="tooltip"  data-original-title="Flip Card">
                      <i class="fa fa-reply"></i> Back
                    </button>
                  </div>
                </div>
                <!-- end back panel -->
              </div>
              <!-- end card -->
            </div>
            <!-- end card-container -->
          </div>
          <!-- end col sm 3 -->

        </div>
      </div>
      <!-- end contaniner -->
    </div>
  </div>
  <div class="tab-pane fade" id="level-3">
    <div class="container" style="margin-top:25px;">
      <div class="row">

        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip">
            <div class="card card-education" onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">5</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">15 CE Units</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">"Education"</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Keep growing! Earn 15 continuing education units.</p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip"  data-original-title="Flip Card">
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip ">
            <div class="card card-education" onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">15</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">BSN degree</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" rel="tooltip"  data-original-title="Flip Card">
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Education</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Advance your career! Achieve Bachelor of Science degree in Nursing.</p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip"  data-original-title="Flip Card">
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col-sm-3 -->
        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip completed">
            <div class="card card-leadership" onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Committee Membership</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Innovation</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Innovate and improve! Be an active member on a <b>Housewide</b> Committee/Council.</p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip"  data-original-title="Flip Card">
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip">
            <div class="card card-leadership" onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Committee Membership</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Innovation</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Innovate and improve! Be an active member on a <b>Unit</b> Committee/Council.</p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip"  data-original-title="Flip Card">
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3  col-sm-6">
          <div class="card-container manual-flip completed">
            <div class="card journey-badge card-profession-engagement" onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Active Volunteer</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Professional Engagement</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Give back to the community! Be an active volunteer.</p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip completed">
            <div class="card card-profession-engagement" onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Mentor, Preceptor, or Super User</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Leadership</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Help others accelerate their learning and confidence. Be a Mentor, Preceptor, or Super User. </p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3  col-sm-6">
          <div class="card-container manual-flip">
            <div class="card card-leadership" onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">50</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">In-Service Provider</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Leadership</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Share your knowledge! Teach an in-service.</p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3  col-sm-6">
          <div class="card-container manual-flip " onclick="rotateCard(this)">
            <div class="card card-education">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">100</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Specialty Certification</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Experience</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Validate your expertise! Earn a specialty certification. </p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end contaniner -->
  </div>
  <div class="tab-pane fade" id="level-4">
    <div class="container" style="margin-top:25px;">
      <div class="row">

        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip">
            <div class="card card-education"  onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                  <img src="https://www.clipartsgram.com/image/129556292-kyz84k3.jpg" />
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">5</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">15 CE Units</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Education</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Improve safety! Earn 15 continuing education units.</p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip"  data-original-title="Flip Card">
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip">
            <div class="card card-education"  onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">100</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">BSN degree</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Education</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Advance your career! Achieve Bachelor of Science degree in Nursing.</p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip"  data-original-title="Flip Card">
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col-sm-3 -->
        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip" >
            <div class="card card-leadership"  onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Committee Membership</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Innovation</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Innovate and improve! Be an active member on a <b>Housewide</b> Committee/Council.</p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip"  data-original-title="Flip Card">
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip">
            <div class="card card-leadership"  onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">

                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Committee Membership</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Innovation</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Innovate and improve! Be an active member on a <b>Unit</b> Committee/Council.</p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip"  data-original-title="Flip Card">
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3  col-sm-6">
          <div class="card-container manual-flip">
            <div class="card card-innovation"  onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Active Volunteer</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Professional Engagement</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Innovate and improve! Be an active member on a Unit Committee/Council.</p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip">
            <div class="card card-profession-engagement"  onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Mentor, Preceptor, or Super User</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Leadership</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Help others accelerate their learning and confidence. Be a Mentor, Preceptor, or Super User. </p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3  col-sm-6">
          <div class="card-container manual-flip ">
            <div class="card card-leadership"  onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">50</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">In-Service Provider</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Leadership</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Share your knowledge! Teach an in-service.</p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3  col-sm-6">
          <div class="card-container manual-flip ">
            <div class="card card-education"  onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Specialty Certification</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Expertise</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Validate your expertise! Earn a specialty certification. </p>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                      <i class="fa fa-reply"></i> Back
                    </button>
                  </div>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3  col-sm-6">
          <div class="card-container manual-flip ">
            <div class="card journey-badge card-education"  onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Researcher</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Expertise</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Contribute to the nursing profession! Particpate in a research project.</p>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                      <i class="fa fa-reply"></i> Back
                    </button>
                  </div>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3  col-sm-6">
          <div class="card-container manual-flip "  onclick="rotateCard(this)">
            <div class="card card-education">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Professional Membership</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Expertise</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Collaborate and contribute! Be an active member in a Local, State, or National Organization.</p>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                      <i class="fa fa-reply"></i> Back
                    </button>
                  </div>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
      </div>
      <!-- end contaniner -->
    </div>
  </div>
  <div class="tab-pane fade" id="level-5">
    <div class="container" style="margin-top:25px;">

        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip" >
            <div class="card card-education"  onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">

                </div>
                <div class="user">
                  <div>
                    <p class="points-value">5</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">15 CE Units</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Education</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Equip yourself with the latest evidence! Earn 15 continuing education units.</p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip"  data-original-title="Flip Card">
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip">
            <div class="card card-education"  onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">100</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">MSN Degree</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Education</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Master your domain! Achieve Master's degree in Nursing.</p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip"  data-original-title="Flip Card">
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col-sm-3 -->
        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip completed">
            <div class="card journey-badge card-leadership"  onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Committee Membership</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Innovation</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Be the change! Be an active member on a Housewide Committee/Council.</p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip"  data-original-title="Flip Card">
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip">
            <div class="card card-leadership"  onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                  <img src="https://www.clipartsgram.com/image/129556292-kyz84k3.jpg" />
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Committee Leadership</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Innovation</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Lead the charge! Actively lead on a Unit Committee/Council.</p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip"  data-original-title="Flip Card">
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3  col-sm-6">
          <div class="card-container manual-flip ">
            <div class="card card-education"  onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Professional Membership</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Professional Engagement</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Collaborate and contribute! Be an active member in a Local, State, or National Organization.</p>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                      <i class="fa fa-reply"></i> Back
                    </button>
                  </div>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3  col-sm-6">
          <div class="card-container manual-flip">
            <div class="card card-innovation"  onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Active Volunteer</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Professional Engagement</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Give back to the community! Be an active volunteer.</p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3 col-sm-6">
          <div class="card-container manual-flip">
            <div class="card card-profession-engagement"  onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Mentor, Preceptor, or Super User</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Leadership</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Help others accelerate their learning and confidence. Be a Mentor, Preceptor, or Super User. </p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3  col-sm-6">
          <div class="card-container manual-flip ">
            <div class="card card-leadership"  onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">50</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">In-Service Provider</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Leadership</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Share your knowledge! Teach an in-service.</p>
                  </div>
                </div>
                <div class="footer">
                  <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                    <i class="fa fa-reply"></i> Back
                  </button>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3  col-sm-6">
          <div class="card-container manual-flip ">
            <div class="card card-education"  onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Specialty Certification</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Expertise</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Validate your expertise! Earn a specialty certification. </p>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                      <i class="fa fa-reply"></i> Back
                    </button>
                  </div>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
        <div class="col-md-3  col-sm-6">
          <div class="card-container manual-flip ">
            <div class="card card-education"  onclick="rotateCard(this)">
              <div class="front">
                <div class="cover">
                </div>
                <div class="user">
                  <div>
                    <p class="points-value">10</p>
                    <p class="points-label">points</p>
                  </div>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Researcher</h3>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" >
                      <i class="fa fa-mail-forward"></i> Read More
                    </button>
                  </div>
                </div>
              </div>
              <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">Expertise</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <p class="text-center">Contribute to the nursing profession! Particpate in a research project.</p>
                  </div>
                  <div class="footer">
                    <button class="btn btn-simple" rel="tooltip" title="Flip Card" >
                      <i class="fa fa-reply"></i> Back
                    </button>
                  </div>
                </div>
              </div>
              <!-- end back panel -->
            </div>
            <!-- end card -->
          </div>
          <!-- end card-container -->
        </div>
        <!-- end col sm 3 -->
      </div>
      <!-- end contaniner -->
    </div>
  </div>
</div>
</div>
<!-- end row -->
<div class="space-200"></div>
</div>
</div>
<!-- /content -->
</div>
</section>
</section>
</div>
</div>
</div>
<!-- /tab-pane -->
</div>
<!-- /tab-content -->
</section>
</div>
<!-- /container -->
</div>
<!-- /layout -->
<!-- Modal -->
<div id="modal-badges" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title">Badges Acheived</h4>
      </div>
      <div class="modal-body">
        <h2>Look at what you've acheived!</h2>
        <div class="row">
          <div class="col-md-3">
            <label>Badge Label 1</label>
            <div class="hexagon">
            </i><span></span></div>
          </div>
          <div class="col-md-3">
            <label>Badge Label 2</label>
            <div class="hexagon"><span></span></div>
          </div>
          <div class="col-md-3">
            <label>Badge Label 3</label>
            <div class="hexagon"><span></span></div>
          </div>
          <div class="col-md-3">
            <label>Badge Label 4</label>
            <div class="hexagon"><span></span></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <label>Badge Label 5</label>
            <div class="hexagon"><span></span></div>
          </div>
          <div class="col-md-3">
            <label>Badge Label 6</label>
            <div class="hexagon"><span></span></div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal" onClick="window.parent.closeModal();">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="modal-sections" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title">Refine Results</h4>
      </div>
      <div class="modal-body">
        <?php

$slat = array(
	'attributes' => array(
		array('class', array('slat', 'slat-modal', 'slat-toggle')),
	),
	'title' => 'Work Experience',
	'meta' => array(),
	'action' => array(
		'type' => 'custom',
		'content' => '
            <div class="action">
              <a href="#" class="btn btn-sm btn-success work-experience" data-section="work-experience">Selected<i class="fa fa-check visible-xs"></i>
              </a>
            </div>
            ',
	),
);
echo createSlat($slat);

$slat = array(
	'attributes' => array(
		array('class', array('slat', 'slat-modal', 'slat-toggle')),
	),
	'title' => 'Education',
	'meta' => array(),
	'action' => array(
		'type' => 'custom',
		'content' => '
            <div class="action">
              <a href="#" class="btn btn-sm btn-success education" data-section="education">Selected<i class="fa fa-check visible-xs"></i></a>
            </div>
            ',
	),
);
echo createSlat($slat);

$slat = array(
	'attributes' => array(
		array('class', array('slat', 'slat-modal', 'slat-toggle')),
	),
	'title' => 'Licenses',
	'meta' => array(),
	'action' => array(
		'type' => 'custom',
		'content' => '
            <div class="action">
              <a href="#" class="btn btn-sm btn-success licenses" data-section="licenses">Selected<i class="fa fa-check visible-xs"></i></a>
            </div>
            ',
	),
);
echo createSlat($slat);

$slat = array(
	'attributes' => array(
		array('class', array('slat', 'slat-modal', 'slat-toggle')),
	),
	'title' => 'Certifications',
	'meta' => array(),
	'action' => array(
		'type' => 'custom',
		'content' => '
            <div class="action">
              <a href="#" class="btn btn-sm btn-success certifications" data-section="certifications">Selected<i class="fa fa-check visible-xs"></i></a>
            </div>
            ',
	),
);
echo createSlat($slat);

$slat = array(
	'attributes' => array(
		array('class', array('slat', 'slat-modal', 'slat-toggle')),
	),
	'title' => 'Resucitation Programs',
	'meta' => array(),
	'action' => array(
		'type' => 'custom',
		'content' => '
            <div class="action">
              <a href="#" class="btn btn-sm btn-success resucitation-programs" data-section="resucitation-programs">Selected<i class="fa fa-check visible-xs"></i></a>
            </div>
            ',
	),
);
echo createSlat($slat);

$slat = array(
	'attributes' => array(
		array('class', array('slat', 'slat-modal', 'slat-toggle')),
	),
	'title' => 'Activities',
	'meta' => array(),
	'action' => array(
		'type' => 'custom',
		'content' => '
            <div class="action">
              <a href="#" class="btn btn-sm btn-success activities" data-section="activities">Selected<i class="fa fa-check visible-xs"></i></a>
            </div>
            ',
	),
);
echo createSlat($slat);

$slat = array(
	'attributes' => array(
		array('class', array('slat', 'slat-modal', 'slat-toggle')),
	),
	'title' => 'Committee Work',
	'meta' => array(),
	'action' => array(
		'type' => 'custom',
		'content' => '
            <div class="action">
              <a href="#" class="btn btn-sm btn-success committee-work" data-section="committee-work">Selected<i class="fa fa-check visible-xs"></i></a>
            </div>
            ',
	),
);
echo createSlat($slat);

$slat = array(
	'attributes' => array(
		array('class', array('slat', 'slat-modal', 'slat-toggle')),
	),
	'title' => 'Memberships &amp; Associations',
	'meta' => array(),
	'action' => array(
		'type' => 'custom',
		'content' => '
            <div class="action">
              <a href="#" class="btn btn-sm btn-success memberships" data-section="memberships">Selected<i class="fa fa-check visible-xs"></i></a>
            </div>
            ',
	),
);
echo createSlat($slat);

$slat = array(
	'attributes' => array(
		array('class', array('slat', 'slat-modal', 'slat-toggle')),
	),
	'title' => 'Teaching &amp; Preceptorship',
	'meta' => array(),
	'action' => array(
		'type' => 'custom',
		'content' => '
            <div class="action">
              <a href="#" class="btn btn-sm btn-success teaching" data-section="teaching">Selected<i class="fa fa-check visible-xs"></i></a>
            </div>
            ',
	),
);
echo createSlat($slat);

$slat = array(
	'attributes' => array(
		array('class', array('slat', 'slat-modal', 'slat-toggle')),
	),
	'title' => 'Publications &amp; Research',
	'meta' => array(),
	'action' => array(
		'type' => 'custom',
		'content' => '
            <div class="action">
              <a href="#" class="btn btn-sm btn-success publications" data-section="publications">Selected<i class="fa fa-check visible-xs"></i></a>
            </div>
            ',
	),
);
echo createSlat($slat);

$slat = array(
	'attributes' => array(
		array('class', array('slat', 'slat-modal', 'slat-toggle')),
	),
	'title' => 'Awards &amp; Recognition',
	'meta' => array(),
	'action' => array(
		'type' => 'custom',
		'content' => '
            <div class="action">
              <a href="#" class="btn btn-sm btn-success awards" data-section="awards">Selected<i class="fa fa-check visible-xs"></i></a>
            </div>
            ',
	),
);
echo createSlat($slat);

$slat = array(
	'attributes' => array(
		array('class', array('slat', 'slat-modal', 'slat-toggle')),
	),
	'title' => 'Other',
	'meta' => array(),
	'action' => array(
		'type' => 'custom',
		'content' => '
            <div class="action">
              <a href="#" class="btn btn-sm btn-success other" data-section="other">Selected<i class="fa fa-check visible-xs"></i></a>
            </div>
            ',
	),
);
echo createSlat($slat);

?>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal" onClick="window.parent.closeModal();">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="modal-refine-goals" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title">Refine Results</h4>
      </div>
      <div class="modal-body">
        <section class="section section-refinement-options">
          <section class="section section-refinement-group section-refinement-group-first">
            <h3>Search</h3>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </section>
          <section class="section section-refinement-group">
            <h3>Date Range <small>Based on Start Date</small></h3>
            <div class="form-group">
              <select class="form-control" id="select-daterange">
                <optgroup label="Presets">
                  <option>Since January 1</option>
                  <option>Last 6 Months</option>
                  <option selected>Last 12 Months</option>
                  <option>Last 24 Months</option>
                  <option>Previous Calendar Year</option>
                </optgroup>
                <optgroup label="Custom">
                  <option value="custom">Custom Range</option>
                </optgroup>
              </select>
            </div>
            <div class="form-group" id="custom-daterange" style="display:none">
              <label>Start Date</label>
              <div class="input-group date">
                <input type="text" class="form-control" value="06/05/2015">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                </span>
              </div>
              <label style="margin-top: 10px;">End Date</label>
              <div class="input-group date">
                <input type="text" class="form-control" value="06/04/2016">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                </span>
              </div>
            </div>
          </section>
        </section>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" data-dismiss="modal">Search</button>
        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="modal-refine-notes" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title">Refine Results</h4>
      </div>
      <div class="modal-body">
        <section class="section section-refinement-options">
          <section class="section section-refinement-group section-refinement-group-first">
            <h3>Search</h3>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </section>
          <section class="section section-refinement-group">
            <h3>Date Range <small>Based on Start Date</small></h3>
            <div class="form-group">
              <select class="form-control" id="select-daterange">
                <optgroup label="Presets">
                  <option>Since January 1</option>
                  <option>Last 6 Months</option>
                  <option selected>Last 12 Months</option>
                  <option>Last 24 Months</option>
                  <option>Previous Calendar Year</option>
                </optgroup>
                <optgroup label="Custom">
                  <option value="custom">Custom Range</option>
                </optgroup>
              </select>
            </div>
            <div class="form-group" id="custom-daterange" style="display:none">
              <label>Start Date</label>
              <div class="input-group date">
                <input type="text" class="form-control" value="06/05/2015">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                </span>
              </div>
              <label style="margin-top: 10px;">End Date</label>
              <div class="input-group date">
                <input type="text" class="form-control" value="06/04/2016">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                </span>
              </div>
            </div>
          </section>
        </section>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" data-dismiss="modal">Search</button>
        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="modal-refine-documents" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title">Refine Results</h4>
      </div>
      <div class="modal-body">
        <section class="section section-refinement-options">
          <section class="section section-refinement-group section-refinement-group-first">
            <h3>Search</h3>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </section>
          <section class="section section-refinement-group">
            <h3>Date Range <small>Based on Start Date</small></h3>
            <div class="form-group">
              <select class="form-control" id="select-daterange">
                <optgroup label="Presets">
                  <option>Since January 1</option>
                  <option>Last 6 Months</option>
                  <option selected>Last 12 Months</option>
                  <option>Last 24 Months</option>
                  <option>Previous Calendar Year</option>
                </optgroup>
                <optgroup label="Custom">
                  <option value="custom">Custom Range</option>
                </optgroup>
              </select>
            </div>
            <div class="form-group" id="custom-daterange" style="display:none">
              <label>Start Date</label>
              <div class="input-group date">
                <input type="text" class="form-control" value="06/05/2015">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                </span>
              </div>
              <label style="margin-top: 10px;">End Date</label>
              <div class="input-group date">
                <input type="text" class="form-control" value="06/04/2016">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                </span>
              </div>
            </div>
          </section>
        </section>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" data-dismiss="modal">Search</button>
        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="modal-portfolio-wizard" class="modal fade" tabindex="-1">
  <div class="modal-dialog" style="width:auto; max-width:770px">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title">Complete Portfolio</h4>
      </div>
      <div class="modal-body modal-wizard-body">
        <iframe id="portfolio-wizard-modal" src="portfolio-wizard-modal.php" width="100%" height="770" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div>
      <div class="modal-footer">
        <a class="wizard-nav-link btn btn-success size-check" href="#" data-rel="work-experience"><span class="button-label">Next: </span>Work Experience</a>
        <a class="btn btn-default" href="#" onClick="window.closeModal();">Finished</a>
      </div>
    </div>
  </div>
</div>
<!-- ADD MODALS -->
<!-- Modal -->
<div id="modal-work-experience" class="modal fade layout-wizard" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title">Add Work Experience</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group profession">
                <label class="control-label">Profession</label>
                <select class="form-control">
                  <option>Choose a Profession</option>
                  <option value="with-specialty" data-profession="surgeon">Surgeon: With a specialty</option>
                  <option value="without-specialty" data-profession="tech">Without a specialty</option>
                  <option value="without-specialty" data-profession="student">Has no specialty</option>
                  <option value="with-specialty" data-profession="nurse">Nurse: Has specialty</option>
                </select>
              </div>
              <div class="form-group surgeon professional-specialty hidden">
                <label class="control-label">Specialty</label>
                <select class="form-control">
                  <option>Choose a Surgeon Specialty</option>
                  <option>...</option>
                  <option>...</option>
                  <option>...</option>
                  <option>...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group nurse professional-specialty hidden">
                <label class="control-label">Specialty</label>
                <select class="form-control">
                  <option>Choose a Nurse Specialty</option>
                  <option>...</option>
                  <option>...</option>
                  <option>...</option>
                  <option>...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group">
                <label class="control-label">Settings</label>
                <select class="form-control">
                  <option>Choose a Setting</option>
                  <option>...</option>
                  <option>...</option>
                  <option>...</option>
                  <option>...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="row date-row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label">Start Date</label>
                    <div class="row">
                      <div class="col-xs-6">
                        <select class="form-control">
                          <option disabled selected>MM</option>
                          <option>01</option>
                          <option>02</option>
                          <option>03</option>
                          <option>04</option>
                          <option>05</option>
                          <option>06</option>
                          <option>07</option>
                          <option>08</option>
                          <option>09</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                        </select>
                        <label class="control-label"><small>Optional</small></label>
                      </div>
                      <div class="col-xs-6">
                        <select class="form-control">
                          <option disabled selected>YYYY</option>
                          <option>1970</option>
                          <option>1971</option>
                          <option>1972</option>
                          <option>1973</option>
                          <option>...</option>
                          <option>...</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label">Completion Date</label>
                    <div class="row">
                      <div class="col-xs-6">
                        <select class="form-control">
                          <option disabled selected>MM</option>
                          <option>01</option>
                          <option>02</option>
                          <option>03</option>
                          <option>04</option>
                          <option>05</option>
                          <option>06</option>
                          <option>07</option>
                          <option>08</option>
                          <option>09</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                        </select>
                        <label class="control-label"><small>Optional</small></label>
                      </div>
                      <div class="col-xs-6">
                        <select class="form-control">
                          <option disabled selected>YYYY</option>
                          <option>1970</option>
                          <option>1971</option>
                          <option>1972</option>
                          <option>1973</option>
                          <option>...</option>
                          <option>...</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">I Currently Work Here?</label>
                <label class="radio-inline">
                  <input type="radio" name="optradio">Yes</label>
                  <label class="radio-inline">
                    <input type="radio" name="optradio" checked>No</label>
                  </div>
                  <div class="experience-additional-info collapse-group collapse">
                    <div class="form-group">
                      <label class="control-label">Company Name</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="control-label">Title</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="control-label">Location</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="control-label">Country</label>
                      <select id="inputCountry" class="form-control">
                        <option>United States</option>
                        <option>Canada</option>
                        <option>Australia</option>
                        <option>...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="control-label">State</label>
                      <select class="form-control">
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option>...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Description</label>
                      <textarea rows="4" class="form-control"></textarea>
                    </div>
                  </div>
                  <a href="#" class="collapse-toggle" data-toggle-text="Show additional information|Hide additional information">Show additional information</a>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-success" data-dismiss="modal">Save</a>
            <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div id="modal-education" class="modal fade layout-wizard" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
            <h4 class="modal-title">Add Education</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label class="control-label">School Name</label>
                <input type="text" name="schoolname" class="form-control">
              </div>
              <div class="form-group">
                <label class="control-label">City</label>
                <input type="text" name="city" class="form-control">
              </div>
              <div class="form-group">
                <label class="control-label">Country</label>
                <select id="inputCountry" class="form-control">
                  <option selected="">United States</option>
                  <option>Canada</option>
                  <option>Australia</option>
                  <option>...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group">
                <label class="control-label">State or Province of Licensure</label>
                <select class="form-control">
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR" selected>Arkansas</option>
                  <option>...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group">
                <label class="control-label">Degree</label>
                <select class="form-control">
                  <option disabled selected>Select a Degree</option>
                  <option>BA</option>
                  <option>BS</option>
                  <option>Masters</option>
                  <option>Doctorate</option>
                  <option>...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group">
                <label class="control-label">Field of Study</label>
                <select class="form-control">
                  <option disabled selected>Select a Field of Study</option>
                  <option>Biology</option>
                  <option>Chemistry</option>
                  <option>Engineering</option>
                  <option>English</option>
                  <option>...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="row date-row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label">Start Date</label>
                    <div class="row">
                      <div class="col-xs-6">
                        <select class="form-control">
                          <option disabled selected>MM</option>
                          <option>01</option>
                          <option>02</option>
                          <option>03</option>
                          <option>04</option>
                          <option>05</option>
                          <option>06</option>
                          <option>07</option>
                          <option>08</option>
                          <option>09</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                        </select>
                        <label class="control-label"><small>Optional</small></label>
                      </div>
                      <div class="col-xs-6">
                        <select class="form-control">
                          <option disabled selected>YYYY</option>
                          <option>1970</option>
                          <option>1971</option>
                          <option>1972</option>
                          <option>1973</option>
                          <option>...</option>
                          <option>...</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label">Completion Date</label>
                    <div class="row">
                      <div class="col-xs-6">
                        <select class="form-control">
                          <option disabled selected>MM</option>
                          <option>01</option>
                          <option>02</option>
                          <option>03</option>
                          <option>04</option>
                          <option>05</option>
                          <option>06</option>
                          <option>07</option>
                          <option>08</option>
                          <option>09</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                        </select>
                        <label class="control-label"><small>Optional</small></label>
                      </div>
                      <div class="col-xs-6">
                        <select class="form-control">
                          <option disabled selected>YYYY</option>
                          <option>1970</option>
                          <option>1971</option>
                          <option>1972</option>
                          <option>1973</option>
                          <option>...</option>
                          <option>...</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Degree in Progress?</label>
                <label class="radio-inline">
                  <input type="radio" name="optradio">Yes</label>
                  <label class="radio-inline">
                    <input type="radio" name="optradio" checked>No</label>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a>
                <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div id="modal-licenses" class="modal fade layout-wizard" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add a License</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label">Discipline</label>
                  <select class="form-control" id="add-discipline">
                    <option value="">Select a Discipline</option>
                    <option value="default">Select a Discipline</option>
                    <option value="emt">Emergency Medical Technician</option>
                    <option value="pharmacist">Pharmacist</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Country</label>
                  <select class="form-control">
                    <option>Select a Country</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">State/Province of Licensure</label>
                  <select class="form-control">
                    <option>Select a State/Province</option>
                  </select>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">State License Number <small>Optional</small></label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Expiration Date <small>Optional</small></label>
                      <div class="input-group date">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="discipline-fields-pharmacist" class="discipline-fields">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">NABP eProfile ID Number <small>Optional</small></label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Email Address</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label class="control-label">Attachment</label>
                  <ul class="control-attachments control-attachments">
                    <li>
                      <button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button>
                      <a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a>
                    </li>
                  </ul>
                  <div class="control-add-new">
                    <a href="#">Attach Documents</a> |
                    <a href="#">New Document</a>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a>
                <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div id="modal-certifications" class="modal fade layout-wizard" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Add a Certification</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label">Certifying Body</label>
                  <select class="form-control">
                    <option>These are the options for Certifying Body</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Certification</label>
                  <select class="form-control">
                    <option>These are the options for Certification within the Certifying Body</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Country</label>
                  <select id="inputCountry" class="form-control">
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Australia</option>
                    <option>...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Certification Number <small>Optional</small></label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Expiration Date <small>Optional</small></label>
                      <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                      </div>
                      <div class="field-shim">
                        <label>
                          <input type="checkbox" name="vehicle" value="Current" checked> Notify me upon expiration</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <ul class="control-attachments control-attachments">
                      <li>
                        <button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button>
                        <a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a>
                      </li>
                    </ul>
                    <div class="control-add-new">
                      <a href="#">Attach Documents</a> |
                      <a href="#">New Document</a>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <a href="#" class="btn btn-success" data-dismiss="modal">Save</a>
                  <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div id="modal-resucitation-programs" class="modal fade layout-wizard" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                  <h4 class="modal-title">Add a Resucitation Program</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label class="control-label">Certifying Body</label>
                    <select class="form-control">
                      <option>Options for Certifying Body/Resucitation Program</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Certification</label>
                    <select class="form-control">
                      <option>Options for Certification within the Certifying Body/Resucitation Program</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Country</label>
                    <select id="inputCountry" class="form-control">
                      <option>United States</option>
                      <option>Canada</option>
                      <option>Australia</option>
                      <option>...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Certification Number <small>Optional</small></label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Expiration Date <small>Optional</small></label>
                        <div class="input-group">
                          <input type="text" class="form-control">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                          </span>
                        </div>
                        <div class="field-shim">
                          <label>
                            <input type="checkbox" name="vehicle" value="Current" checked> Notify me upon expiration</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Attachment</label>
                      <ul class="control-attachments control-attachments">
                        <li>
                          <button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button>
                          <a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a>
                        </li>
                      </ul>
                      <div class="control-add-new">
                        <a href="#">Attach Documents</a> |
                        <a href="#">New Document</a>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <a href="#" class="btn btn-success" data-dismiss="modal">Save</a>
                    <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal -->
            <div id="modal-activities" class="modal fade layout-wizard" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Add Volunteer Service</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label class="control-label">Volunteer Type</label>
                      <select class="form-control" id="add-discipline">
                        <option value="">Select a Type</option>
                        <option value="default">Research</option>
                        <option value="emt">Teaching</option>
                        <option value="pharmacist">Volunteer Service</option>
                        <option value="pharmacist">Presentations</option>
                        <option value="pharmacist">Consulting</option>
                        <option value="pharmacist">More If Needed...</option>
                      </select>
                    </div>
                    <div id="activity-fields-teaching" class="activity-fields">
                      <div class="form-group">
                        <label class="control-label">Activity Name</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Organization Name</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Country</label>
                        <select id="inputCountry" class="form-control">
                          <option>United States</option>
                          <option>Canada</option>
                          <option>Australia</option>
                          <option>...</option>
                          <option>...</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="control-label">City</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="control-label">State</label>
                        <select class="form-control">
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option>...</option>
                          <option>...</option>
                        </select>
                      </div>
                      <div class="row date-row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">Start Date</label>
                            <div class="row">
                              <div class="col-xs-6">
                                <select class="form-control">
                                  <option disabled selected>MM</option>
                                  <option>01</option>
                                  <option>02</option>
                                  <option>03</option>
                                  <option>04</option>
                                  <option>05</option>
                                  <option>06</option>
                                  <option>07</option>
                                  <option>08</option>
                                  <option>09</option>
                                  <option>10</option>
                                  <option>11</option>
                                  <option>12</option>
                                </select>
                                <label class="control-label"><small>Optional</small></label>
                              </div>
                              <div class="col-xs-6">
                                <select class="form-control">
                                  <option disabled selected>YYYY</option>
                                  <option>1970</option>
                                  <option>1971</option>
                                  <option>1972</option>
                                  <option>1973</option>
                                  <option>...</option>
                                  <option>...</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">Completion Date</label>
                            <div class="row">
                              <div class="col-xs-6">
                                <select class="form-control">
                                  <option disabled selected>MM</option>
                                  <option>01</option>
                                  <option>02</option>
                                  <option>03</option>
                                  <option>04</option>
                                  <option>05</option>
                                  <option>06</option>
                                  <option>07</option>
                                  <option>08</option>
                                  <option>09</option>
                                  <option>10</option>
                                  <option>11</option>
                                  <option>12</option>
                                </select>
                                <label class="control-label"><small>Optional</small></label>
                              </div>
                              <div class="col-xs-6">
                                <select class="form-control">
                                  <option disabled selected>YYYY</option>
                                  <option>1970</option>
                                  <option>1971</option>
                                  <option>1972</option>
                                  <option>1973</option>
                                  <option>...</option>
                                  <option>...</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Current Activity?</label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio">Yes</label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio" checked>No</label>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea rows="4" class="form-control"></textarea>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Attachment</label>
                            <ul class="control-attachments control-attachments">
                              <li>
                                <button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button>
                                <a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a>
                              </li>
                            </ul>
                            <div class="control-add-new">
                              <a href="#">Attach Documents</a> |
                              <a href="#">New Document</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <a href="#" class="btn btn-success" data-dismiss="modal">Save</a>
                        <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal -->
                <div id="modal-committee-work" class="modal fade layout-wizard" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                        <h4 class="modal-title">Add Committee Work</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label class="control-label">Committee Name</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label class="control-label">Committee Type</label>
                          <select class="form-control">
                            <option>Select a Committee Type</option>
                            <option>National Organization</option>
                            <option>Local or State Organization</option>
                            <option>Facility or Workplace Committee</option>
                            <option>Fraternity</option>
                            <option>Sorority</option>
                            <option>Alumni Organization</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Organization/Work Group</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label class="control-label">Role</label>
                          <select id="inputCountry" class="form-control">
                            <option>Select a Role</option>
                            <option>Chair</option>
                            <option>Co-Chair</option>
                            <option>Officer/Board Member</option>
                            <option>Member</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Description</label>
                          <textarea rows="4" class="form-control"></textarea>
                        </div>
                        <div class="row date-row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="control-label">From</label>
                              <div class="row">
                                <div class="col-xs-6">
                                  <select class="form-control">
                                    <option disabled selected>MM</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                  </select>
                                  <label class="control-label"><small>Optional</small></label>
                                </div>
                                <div class="col-xs-6">
                                  <select class="form-control">
                                    <option disabled selected>YYYY</option>
                                    <option>1970</option>
                                    <option>1971</option>
                                    <option>1972</option>
                                    <option>1973</option>
                                    <option>...</option>
                                    <option>...</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="control-label">To</label>
                              <div class="row">
                                <div class="col-xs-6">
                                  <select class="form-control">
                                    <option disabled selected>MM</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                  </select>
                                  <label class="control-label"><small>Optional</small></label>
                                </div>
                                <div class="col-xs-6">
                                  <select class="form-control">
                                    <option disabled selected>YYYY</option>
                                    <option>1970</option>
                                    <option>1971</option>
                                    <option>1972</option>
                                    <option>1973</option>
                                    <option>...</option>
                                    <option>...</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label">To Present?</label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio">Yes</label>
                            <label class="radio-inline">
                              <input type="radio" name="optradio" checked>No</label>
                            </div>
                            <div class="form-group">
                              <label class="control-label">Add a Link</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="form-group new-memberships-group">
                              <label class="control-label">Memberships &amp; Associations</label>
                              <div class="control-add-new">
                                <a href="#" class="add-memberships">New Memberships &amp; Associations</a>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <a href="#" class="btn btn-success" data-dismiss="modal">Save</a>
                            <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                          </div>
                          <div class="modal-footer alt">
                            <a href="#" class="btn btn-success close-committee-work">Save</a>
                            <a class="btn btn-success refresh-committee-work" href="#">Save and Add Another</a>
                            <a href="#" class="btn btn-default close-committee-work">Cancel</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal -->
                    <div id="modal-memberships" class="modal fade layout-wizard" tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                            <h4 class="modal-title">Memberships &amp; Associations</h4>
                          </div>
                          <div class="modal-body">
                            <div class="form-group">
                              <label class="control-label">Organization Name</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                              <label class="control-label">Membership Type</label>
                              <select class="form-control">
                                <option>Select a Membership Type</option>
                                <option>National Organization</option>
                                <option>Local or State Organization</option>
                                <option>Facility or Workplace Committee</option>
                                <option>Fraternity</option>
                                <option>Sorority</option>
                                <option>Alumni Organization</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label class="control-label">Role</label>
                              <select id="inputCountry" class="form-control">
                                <option>Select a Role</option>
                                <option>Chair</option>
                                <option>Co-Chair</option>
                                <option>Officer/Board Member</option>
                                <option>Member</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label class="control-label">Country</label>
                              <select id="inputCountry" class="form-control">
                                <option>United States</option>
                                <option>Canada</option>
                                <option>Australia</option>
                                <option>...</option>
                                <option>...</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label class="control-label">City</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                              <label class="control-label">State</label>
                              <select class="form-control">
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option>...</option>
                                <option>...</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label class="control-label">Description</label>
                              <textarea rows="4" class="form-control"></textarea>
                            </div>
                            <div class="row date-row">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label class="control-label">From</label>
                                  <div class="row">
                                    <div class="col-xs-6">
                                      <select class="form-control">
                                        <option disabled selected>MM</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                      </select>
                                      <label class="control-label"><small>Optional</small></label>
                                    </div>
                                    <div class="col-xs-6">
                                      <select class="form-control">
                                        <option disabled selected>YYYY</option>
                                        <option>1970</option>
                                        <option>1971</option>
                                        <option>1972</option>
                                        <option>1973</option>
                                        <option>...</option>
                                        <option>...</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label class="control-label">To</label>
                                  <div class="row">
                                    <div class="col-xs-6">
                                      <select class="form-control">
                                        <option disabled selected>MM</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                      </select>
                                      <label class="control-label"><small>Optional</small></label>
                                    </div>
                                    <div class="col-xs-6">
                                      <select class="form-control">
                                        <option disabled selected>YYYY</option>
                                        <option>1970</option>
                                        <option>1971</option>
                                        <option>1972</option>
                                        <option>1973</option>
                                        <option>...</option>
                                        <option>...</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label">To Present?</label>
                              <label class="radio-inline">
                                <input type="radio" name="optradio">Yes</label>
                                <label class="radio-inline">
                                  <input type="radio" name="optradio" checked>No</label>
                                </div>
                                <div class="form-group new-work-committees-group">
                                  <label class="control-label">Committee Work</label>
                                  <div class="control-add-new">
                                    <a href="#" class="add-committee-work">New Committee Work</a>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a>
                                <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal -->
                        <div id="modal-teaching" class="modal fade layout-wizard" tabindex="-1">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                <h4 class="modal-title">Teaching &amp; Preceptorship</h4>
                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                  <label class="control-label">Activity Name</label>
                                  <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                  <label class="control-label">Presentation/Instruction Type</label>
                                  <select class="form-control">
                                    <option>Select a Presentation/Instruction Type</option>
                                    <option>Poster</option>
                                    <option>Invited</option>
                                    <option>Community/Patient Education</option>
                                    <option>Other Activity Name</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label class="control-label">Author(s)/Contributors</label>
                                  <textarea rows="4" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                  <label class="control-label">Country</label>
                                  <select id="inputCountry" class="form-control">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>Australia</option>
                                    <option>...</option>
                                    <option>...</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label class="control-label">City</label>
                                  <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                  <label class="control-label">State</label>
                                  <select class="form-control">
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option>...</option>
                                    <option>...</option>
                                  </select>
                                </div>
                                <div class="row date-row">
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                      <label class="control-label">From</label>
                                      <div class="row">
                                        <div class="col-xs-6">
                                          <select class="form-control">
                                            <option disabled selected>MM</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                            <option>06</option>
                                            <option>07</option>
                                            <option>08</option>
                                            <option>09</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                          </select>
                                          <label class="control-label"><small>Optional</small></label>
                                        </div>
                                        <div class="col-xs-6">
                                          <select class="form-control">
                                            <option disabled selected>YYYY</option>
                                            <option>1970</option>
                                            <option>1971</option>
                                            <option>1972</option>
                                            <option>1973</option>
                                            <option>...</option>
                                            <option>...</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                      <label class="control-label">To</label>
                                      <div class="row">
                                        <div class="col-xs-6">
                                          <select class="form-control">
                                            <option disabled selected>MM</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                            <option>06</option>
                                            <option>07</option>
                                            <option>08</option>
                                            <option>09</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                          </select>
                                          <label class="control-label"><small>Optional</small></label>
                                        </div>
                                        <div class="col-xs-6">
                                          <select class="form-control">
                                            <option disabled selected>YYYY</option>
                                            <option>1970</option>
                                            <option>1971</option>
                                            <option>1972</option>
                                            <option>1973</option>
                                            <option>...</option>
                                            <option>...</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label">Is Current?</label>
                                  <label class="radio-inline">
                                    <input type="radio" name="optradio">Yes</label>
                                    <label class="radio-inline">
                                      <input type="radio" name="optradio" checked>No</label>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Link</label>
                                      <input type="text" class="form-control">
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <a href="#" class="btn btn-success" data-dismiss="modal">Save</a>
                                    <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Modal -->
                            <div id="modal-publications" class="modal fade layout-wizard" tabindex="-1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                    <h4 class="modal-title">Add Publication/Research</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form-group">
                                      <label class="control-label">Publication Type</label>
                                      <select id="inputCountry" class="form-control">
                                        <option>Select a Publication Type</option>
                                        <option>Book</option>
                                        <option>Article</option>
                                        <option>Thesis</option>
                                        <option>Dissertation</option>
                                        <option>Book Chapters</option>
                                        <option>Published Proceedings/Abstracts</option>
                                        <option>...</option>
                                        <option>...</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Publication Title</label>
                                      <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Author(s)/Editor(s)/Contributors</label>
                                      <textarea rows="4" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Description</label>
                                      <textarea rows="4" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Date</label>
                                      <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                          <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                        </span>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Journal Title</label>
                                      <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Published?</label>
                                      <input type="checkbox" name="Press" value="Yes" class="published"> Yes
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Link</label>
                                      <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">IRB Approved</label>
                                      <input type="checkbox" name="Press" value="Yes" class="irb-approved"> Yes
                                    </div>
                                    <div class="irb-options">
                                      <div class="form-group">
                                        <label class="control-label">IRB Approval Date</label>
                                        <div class="input-group">
                                          <input type="text" class="form-control">
                                          <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                          </span>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label">Study Complete</label>
                                        <input type="checkbox" name="irb-study-complete" value="Yes"> Yes
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label">Nurse Principle Investigator</label>
                                        <input type="text" class="form-control">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <a href="#" class="btn btn-success" data-dismiss="modal">Save</a>
                                    <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Modal -->
                            <div id="modal-awards" class="modal fade layout-wizard" tabindex="-1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                    <h4 class="modal-title">Add Awards &amp; Recognition</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form-group">
                                      <label class="control-label">Name of Honor</label>
                                      <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Type of Honor</label>
                                      <select id="inputCountry" class="form-control">
                                        <option>Select an Honor</option>
                                        <option>Award</option>
                                        <option>Scholorship</option>
                                        <option>Fellowship</option>
                                        <option>Grant</option>
                                        <option>Fellow</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Honor Given By</label>
                                      <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Description</label>
                                      <textarea rows="4" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Date</label>
                                      <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                          <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                        </span>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Select Documents</label>
                                      <select id="inputCountry" class="form-control">
                                        <option>Select One</option>
                                        <option>Document 1</option>
                                        <option>Document 1</option>
                                        <option>Document 3</option>
                                        <option>Document 4</option>
                                        <option>...</option>
                                      </select>
                                      <div class="control-add-new">
                                        <a href="#">Attach Documents</a> |
                                        <a href="#">New Document</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <a href="#" class="btn btn-success" data-dismiss="modal">Save</a>
                                    <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Modal -->
                            <div id="modal-other" class="modal fade layout-wizard" tabindex="-1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                    <h4 class="modal-title">Other</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form-group">
                                      <label class="control-label">Title</label>
                                      <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Organization Name</label>
                                      <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Country</label>
                                      <select id="inputCountry" class="form-control">
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Australia</option>
                                        <option>...</option>
                                        <option>...</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">City</label>
                                      <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">State</label>
                                      <select class="form-control">
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option>...</option>
                                        <option>...</option>
                                      </select>
                                    </div>
                                    <div class="row date-row">
                                      <div class="col-sm-6">
                                        <div class="form-group">
                                          <label class="control-label">Start Date</label>
                                          <div class="row">
                                            <div class="col-xs-6">
                                              <select class="form-control">
                                                <option disabled selected>MM</option>
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                                <option>05</option>
                                                <option>06</option>
                                                <option>07</option>
                                                <option>08</option>
                                                <option>09</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                              </select>
                                              <label class="control-label"><small>Optional</small></label>
                                            </div>
                                            <div class="col-xs-6">
                                              <select class="form-control">
                                                <option disabled selected>YYYY</option>
                                                <option>1970</option>
                                                <option>1971</option>
                                                <option>1972</option>
                                                <option>1973</option>
                                                <option>...</option>
                                                <option>...</option>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-sm-6">
                                        <div class="form-group">
                                          <label class="control-label">Completion Date</label>
                                          <div class="row">
                                            <div class="col-xs-6">
                                              <select class="form-control">
                                                <option disabled selected>MM</option>
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                                <option>05</option>
                                                <option>06</option>
                                                <option>07</option>
                                                <option>08</option>
                                                <option>09</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                              </select>
                                              <label class="control-label"><small>Optional</small></label>
                                            </div>
                                            <div class="col-xs-6">
                                              <select class="form-control">
                                                <option disabled selected>YYYY</option>
                                                <option>1970</option>
                                                <option>1971</option>
                                                <option>1972</option>
                                                <option>1973</option>
                                                <option>...</option>
                                                <option>...</option>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Description</label>
                                      <textarea rows="4" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Attachment</label>
                                      <ul class="control-attachments control-attachments">
                                        <li>
                                          <button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button>
                                          <a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a>
                                        </li>
                                      </ul>
                                      <div class="control-add-new">
                                        <a href="#">Attach Documents</a> |
                                        <a href="#">New Document</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <a href="#" class="btn btn-success" data-dismiss="modal">Save</a>
                                    <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /ADD MODALS -->
                            <!-- MANAGE MODALS -->
                            <!-- Modal -->
                            <div id="modal-licenses-manage" class="modal fade" tabindex="-1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                    <h4 class="modal-title">Manage License</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form-group">
                                      <label class="control-label">Discipline</label>
                                      <select class="form-control" id="add-discipline">
                                        <option value="">Select a Discipline</option>
                                        <option value="default">Select a Discipline</option>
                                        <option value="emt" selected="">Emergency Medical Technician</option>
                                        <option value="pharmacist">Pharmacist</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Country</label>
                                      <select id="inputCountry" class="form-control">
                                        <option selected="">United States</option>
                                        <option>Canada</option>
                                        <option>Australia</option>
                                        <option>...</option>
                                        <option>...</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">State or Province of Licensure</label>
                                      <select class="form-control">
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR" selected>Arkansas</option>
                                        <option>...</option>
                                        <option>...</option>
                                      </select>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-6">
                                        <div class="form-group">
                                          <label class="control-label">State License Number <small>Optional</small></label>
                                          <input type="text" class="form-control" value="1234567890">
                                        </div>
                                      </div>
                                      <div class="col-sm-6">
                                        <div class="form-group">
                                          <label class="control-label">Expiration Date <small>Optional</small></label>
                                          <div class="input-group date">
                                            <input type="text" class="form-control" value="Feb 7, 2016">
                                            <span class="input-group-btn">
                                              <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div id="discipline-fields-pharmacist" class="discipline-fields">
                                      <div class="row">
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <label class="control-label">NABP eProfile ID Number <small>Optional</small></label>
                                            <input type="text" class="form-control">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Email Address</label>
                                      <input type="text" class="form-control" value="jdoe@email.com">
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Attachment</label>
                                      <ul class="control-attachments control-attachments">
                                        <li>
                                          <button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button>
                                          <a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a>
                                        </li>
                                      </ul>
                                      <div class="control-add-new">
                                        <a href="#">Attach Documents</a> |
                                        <a href="#">New Document</a>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="form-modified">
                                        <p>This license is not available in your portable portfolio, it is restricted to your organization.</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <a href="#" class="btn btn-success" data-dismiss="modal">Save</a>
                                    <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Modal -->
                            <div id="modal-certifications-manage" class="modal fade" tabindex="-1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                    <h4 class="modal-title">Manage Certification</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form-group">
                                      <label class="control-label">Certifying Body</label>
                                      <select class="form-control">
                                        <option selected="">American Board of Wound Management (ABWM)</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Certification</label>
                                      <select class="form-control">
                                        <option selected="">CWCA - Certified Wound Care Associate</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Country</label>
                                      <select id="inputCountry" class="form-control">
                                        <option selected="">United States</option>
                                        <option>Canada</option>
                                        <option>Australia</option>
                                        <option>...</option>
                                        <option>...</option>
                                      </select>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-6">
                                        <div class="form-group">
                                          <label class="control-label">Certification Number <small>Optional</small></label>
                                          <input type="text" class="form-control" value="123456789011112">
                                        </div>
                                      </div>
                                      <div class="col-sm-6">
                                        <div class="form-group">
                                          <label class="control-label">Expiration Date <small>Optional</small></label>
                                          <div class="input-group">
                                            <input type="text" class="form-control" value="Aug 27, 2015">
                                            <span class="input-group-btn">
                                              <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                          </div>
                                          <div class="field-shim">
                                            <label>
                                              <input type="checkbox" name="vehicle" value="Current" checked> Notify me upon expiration</label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label">Attachment</label>
                                        <ul class="control-attachments control-attachments">
                                          <li>
                                            <button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button>
                                            <a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a>
                                          </li>
                                        </ul>
                                        <div class="control-add-new">
                                          <a href="#">Attach Documents</a> |
                                          <a href="#">New Document</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <a href="#" class="btn btn-success" data-dismiss="modal">Save</a>
                                      <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- /MANAGE MODALS -->
                              <!-- Modal -->
                              <div id="modal-portable-portfolio-about" class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                      <h4 class="modal-title">About Portable Portfolio</h4>
                                    </div>
                                    <div class="modal-body">
                                      <iframe id="portable-portfolio-about" src="portable-portfolio-about.php" width="100%" height="450" frameborder="0" scrolling="auto" marginheight="0" marginwidth="0"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- /MANAGE MODALS -->
                              <?php
include 'includes/modals/_modal-goal-add.php';
include 'includes/modals/_modal-goal-manage.php';
include 'includes/modals/_modal-note-add.php';
include 'includes/modals/_modal-note-edit.php';
include 'includes/modals/_modal-document-add.php';
include 'includes/modals/_modal-document-edit.php';
?>
                              <?=createFooter($patterns['footer']);?>
                              <?=createPrototypeNav();?>
                              <?=createSiteScripts();?>
                              <script src="/scripts/prototype.portfolio.js"></script>
                              <script src="/scripts/prototype.portfolio.wizard.helper.js"></script>
                              <script>
                              $(document).ready(function(){
                                $(".js-overall-progress").addClass('progressWidth');
                              });
                //Card rotate
                $().ready(function() {
                  $('[rel="tooltip"]').tooltip();
                });

        $(".level-circles a").click(function(){
          $(".level-circles a").removeClass("active");
          $(this).addClass("active");
        });

                $("#education-bucket").click(function() {
                  $(".card:not(.card-education").parents(".col-md-3").hide();
                  $(".card.card-education").parents(".col-md-3").show();

                });

                $("#experience-bucket").click(function() {
                  $(".card:not(.card-expereince").parents(".col-md-3").hide();
                  $(".card.card-experience").parents(".col-md-3").show();

                });
                $("#leadership-bucket").click(function() {
                  $(".card:not(.card-leadership").parents(".col-md-3").hide();
                  $(".card.card-leadership").parents(".col-md-3").show();

                });

                $('.professional-membership-action').on('shown.bs.tab', function(e) {


                  var template = '<div class="popover accelMe-tip" id="popover"><div class="arrow"></div><h3 class="popover-title bg-info"></h3><div class="popover-content"></div><div class="popover-navigation"></div></div>",';

                  var content = 'Click <b> Add</b> to create a Membership record. Select Local or State Organization or National Organization from the Membership Type drop-down menu to earn 10 points in Level 2. '

                  var title = '<span id="test"></span>Add a Membership Record';


                  $('#memberships-container .slat-group-header-actions .js-popover-element').popover({
                    template: template,
                    content: content,
                    html: true,
                    title: title,
                    placement: "top",
                    delay: 2000,
                    trigger: 'focus',

                  });

                  $('#memberships-container .slat-group-header-actions .js-popover-element').popover('show');
                  $('html, body').animate({ scrollTop: $("#popover").offset().top }, 1000);


                  $(".nav-focus .nav li").removeClass("active");

                  $("#memberships-container").fadeOut(function() { $(this).addClass('alert alert-info').fadeIn('fast'); });

                });



                $('.in-service-provider-action').on('shown.bs.tab', function(e) {
                  $(".section").removeClass("alert alert-info");

                  $(".js-popover-element").popover("hide");

                  var template = '<div class="popover accelMe-tip" id="popover"><div class="arrow"></div><h3 class="popover-title bg-info"></h3><div class="popover-content"></div><div class="popover-navigation"></div></div>",';

                  var content = 'Click <b>Add</b> to create a Teaching record. Select Inservice from the Presentation Type drop-down menu to earn 10 points in Level 2.'

                  var title = '<span id="test"></span>Add a Teaching Record';


                  $('.teaching-container .slat-group-header-actions .js-popover-element').popover({
                    template: template,
                    content: content,
                    html: true,
                    title: title,
                    placement: "top"


                  });
                  $('.teaching-container .slat-group-header-actions .js-popover-element').popover('show');
                  $('html, body').animate({ scrollTop: $("#popover").offset().top }, 1000);


                  $(".nav-focus .nav li").removeClass("active");
                  $(".teaching-container").fadeOut(function() { $(this).addClass('alert alert-info').fadeIn('fast'); });


                });

                $('.committee-action').on('shown.bs.tab', function(e) {



                  var template = '<div class="popover accelMe-tip" id="popover"><div class="arrow"></div><h3 class="popover-title bg-info"></h3><div class="popover-content"></div><div class="popover-navigation"></div></div>",';

                  var content = 'Click <b>Add</b> to create a Committee record. Select Council or Committee Unit or Council or Committee (organization-wide) from the Committee Type drop-down menu. The record must also be in progress to earn 10 points in Level 2.'

                  var title = '<span id="test"></span>Add a Committee Record';


                  $('.committee-work-container .slat-group-header-actions .js-popover-element').popover({
                    template: template,
                    content: content,
                    html: true,
                    title: title,
                    placement: "top"
                  });

                  $('.committee-work-container .slat-group-header-actions .js-popover-element').delay(5000).popover('show');
                  $('html, body').animate({ scrollTop: $("#popover").offset().top }, 1000);


                  $(".nav-focus .nav li").removeClass("active");
                  $(".committee-work-container").fadeOut(function() { $(this).addClass('alert alert-info').fadeIn('fast'); });

                });

                function rotateCard(btn) {
                  var $card = $(btn).closest('.card-container');
                  console.log($card);
                  if ($card.hasClass('hover')) {
                    $card.removeClass('hover');
                  } else {
                    $card.addClass('hover');
                  }
                }

                //end card rotate
              </script>
              <?=createSiteEnd();?>