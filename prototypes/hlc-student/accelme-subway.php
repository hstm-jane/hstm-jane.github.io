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
<div class="tab-pane fade in active" id="tab-7" style="">
<style>


*,
*::after,
*::before {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.clearfix::before,
.clearfix::after {
  content: '';
  display: table;
}

.clearfix::after {
  clear: both;
}

/*body {
  font-family: 'Avenir Next', Avenir, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  color: #515158;
  background: #f0f0f0;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}*/

a {
  text-decoration: none;
  color: #aaa;
  outline: none;
}

a:hover,
button:hover {
  color: #515158;
  outline: none;
}

a:focus,
button:focus {
  outline: none;
}

.hidden {
  position: absolute;
  overflow: hidden;
  width: 0;
  height: 0;
  pointer-events: none;
}

/* Icons */
.icon {
  display: block;
  width: 1em;
  height: 1em;
  margin: 0 auto;
  fill: currentColor;
}

.container {
  position: relative;

}



.main {
  position: relative;
  top: 0;
  left: 0;
  overflow: hidden;
/*  width: calc(100vw - 300px);*/
width:90%;
  height: 100vh;
}

.mall {
  position: relative;
  width: 100%;
  height: 100%;
  pointer-events: none;
  -webkit-perspective: 3500px;
  perspective: 3500px;
  -webkit-perspective-origin: 0% 50%;
  perspective-origin: 0% 50%;
  -webkit-transition: -webkit-transform 0.8s;
  transition: transform 0.8s;
  -webkit-transition-timing-function: cubic-bezier(0.2, 1, 0.3, 1);
  transition-timing-function: cubic-bezier(0.2, 1, 0.3, 1);
}

.mall.mall--content-open {
  -webkit-transform: translate3d(0,-25%,0) scale3d(0.8,0.8,1);
  transform: translate3d(0,-25%,0) scale3d(0.8,0.8,1);
}

.surroundings,
.levels {
  position: relative;

}

.surroundings {
  width: 192vmin;
  /* double of mall map */
  height: 128vmin;
  margin: -64vmin 0 0 -96vmin;
  pointer-events: none;
  -webkit-transition: opacity 0.8s;
  transition: opacity 0.8s;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.surroundings__map {
  opacity: 0.3;
  max-width: 100%;
  display: block;
}

.surroundings--hidden {
  opacity: 0;
}

.levels {
  width: 96vmin;
  height: 64vmin;
  margin: auto;
  -webkit-transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.surroundings,
.levels {
  -webkit-transform: rotateX(70deg) rotateZ(-45deg) translateZ(-15vmin);
  transform: rotateX(70deg) rotateZ(-45deg) translateZ(-15vmin);
}

.level {
  position: relative;
  width: 100%;
  height: 100%;
  cursor: pointer;
  pointer-events: auto;
  -webkit-transition: opacity 1s, -webkit-transform 1s;
  transition: opacity 1s, transform 1s;
  -webkit-transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
  transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.level::after {
  font-size: 2.5vmin;
  line-height: 0;
  position: absolute;
  z-index: 100;
  top: -2em;
    left: 3.5em;
  white-space: nowrap;
  color: #7d7d86;
  -webkit-transform: rotateZ(45deg) rotateX(-70deg) translateZ(5vmin);
  transform: rotateZ(45deg) rotateX(-70deg) translateZ(5vmin);
  -webkit-transition: -webkit-transform 1s, color 0.3s;
  transition: transform 1s, color 0.3s;
  -webkit-transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
  transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
}

.level:hover::after,
.level--current::after {
  color: #515158;
}

.level--current::after {
  -webkit-transform: rotateZ(-20deg) rotateZ(45deg) rotateX(-70deg) translateZ(5vmin) translateX(5vmin) translateY(-10vmin);
  transform: rotateZ(-20deg) rotateZ(45deg) rotateX(-70deg) translateZ(5vmin) translateX(5vmin) translateY(-10vmin);
}

.level--1::after {
  content: 'L1';
}

.level--2::after {
  content: 'L2';
}

.level--3::after {
  content: 'L3';
}

.level--4::after {
  content: 'L4';
}

.level:not(:first-child) {
  position: absolute;
  top: 0;
  left: 0;
}

.level--2 {
  -webkit-transform: translateZ(10vmin);
  transform: translateZ(10vmin);
}

.level--3 {
  -webkit-transform: translateZ(20vmin);
  transform: translateZ(20vmin);
}

.level--4 {
  -webkit-transform: translateZ(30vmin);
  transform: translateZ(30vmin);
}


/* Selection transitions */

.levels--selected-1 .level:not(.level--1),
.levels--selected-2 .level:not(.level--2),
.levels--selected-3 .level:not(.level--3),
.levels--selected-4 .level:not(.level--4) {
  opacity: 0;
  /* fade out all others */
}

/* Other levels */

.level--current ~ .level {
  -webkit-transform: translateZ(90vmin);
  transform: translateZ(90vmin);
}

.levels--selected-2 .level--1,
.levels--selected-3 .level--1,
.levels--selected-4 .level--1,
.levels--selected-3 .level--2,
.levels--selected-4 .level--2,
.levels--selected-4 .level--3 {
  -webkit-transform: translateZ(-60vmin);
  transform: translateZ(-60vmin);
}

/* Delays */
/* 1 */

.levels--selected-1 .level--3,
.levels--selected-2 .level--3,
.levels--selected-3 .level--2,
.levels--selected-4 .level--2 {
  -webkit-transition-delay: 0.1s;
  transition-delay: 0.1s;
}

.levels--selected-1 .level--2,
.levels--selected-2 .level--current,
.levels--selected-2 .level--current::after,
.levels--selected-3 .level--current,
.levels--selected-3 .level--current::after,
.levels--selected-4 .level--3 {
  -webkit-transition-delay: 0.25s;
  transition-delay: 0.25s;
}

.levels--selected-1 .level--current,
.levels--selected-1 .level--current::after,
.levels--selected-4 .level--current,
.levels--selected-4 .level--current::after {
  -webkit-transition-delay: 0.45s;
  transition-delay: 0.45s;
}

/* Current level */

.level.level--current {
  -webkit-transform: translateZ(15vmin) rotate3d(0,0,1,20deg);
  /* go to center */
  transform: translateZ(15vmin) rotate3d(0,0,1,20deg);
}

/* Navigation classes */
.levels--open .level,
.levels--open .level::after {
  -webkit-transition: -webkit-transform 1s, opacity 1s;
  transition: transform 1s, opacity 1s;
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
}

.levels--open .level.level--current {
  opacity: 1;
}

.levels--open .level.level--moveOutUp,
.levels--open .level.level--moveOutDown {
  opacity: 0;
}

.levels--open .level.level--moveOutUp {
  -webkit-transform: translateZ(90vmin);
  transform: translateZ(90vmin);
}

.levels--open .level.level--moveOutDown {
  -webkit-transform: translateZ(-60vmin);
  transform: translateZ(-60vmin);
}


/* Level nav */
.mallnav {
  position: absolute;
  top: 0;
  right: 0;
  text-align: center;
  -webkit-transition: opacity 0.8s;
  transition: opacity 0.8s;
}

.mallnav--hidden {
  pointer-events: none;
  opacity: 0;
}

/* Box button */
.boxbutton {
  font-size: 2em;
  display: block;
  width: 2em;
  height: 2em;
  margin: 0;
  padding: 0;
  color: #fff;
  border: 0;
  background: #d7d7dc;
}

.boxbutton--dark {
  background: #c4c4c7;
}

.boxbutton--darker {
  background: #2c2c2f;
}

.boxbutton--alt {
  background: #3d1975;
}

.boxbutton--disabled,
.boxbutton--disabled:focus,
.boxbutton--disabled:hover {
  cursor: default;
  pointer-events: none;
  opacity: 0.2;
}

/* Level map */

.map__ground {
  fill: #d7d7dc;
}

.map__outline {
  -webkit-transition: fill 0.3s;
  transition: fill 0.3s;
  fill: #bbb;
}

.level:hover .map__outline,
.level--current .map__outline {
  fill: #09c;
}

.map__tree {
  fill: #7bad7f;
}

.map__lake {
  fill: #a2bbdd;
}

.map__space {
  -webkit-transition: fill-opacity 0.8s;
  transition: fill-opacity 0.8s;
  fill: #bdbdbd;
  fill-opacity: 0.6;
}

.level--current .map__space {
  fill-opacity: 1;
}

 .map__space--selected {
  fill: #A4A4A4;
 }

/* Content */
.content {
  position: absolute;
  top: 100%;
  width: 100%;
  height: 50%;
}

.content__item {
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  padding: 3em;
  text-align: center;
  background: #d7d7dc;
  -webkit-transition: -webkit-transform 0.8s;
  transition: transform 0.8s;
  -webkit-transition-timing-function: cubic-bezier(0.2, 1, 0.3, 1);
  transition-timing-function: cubic-bezier(0.2, 1, 0.3, 1);
}

.content--open .content__item {
  -webkit-transition: none;
  transition: none;
}

.content__item--current {
  -webkit-transform: translate3d(0,-100%,0);
  transform: translate3d(0,-100%,0);
}

.content__item-title {
  font-size: 1.85em;
  margin: 0;
  padding: 0 0 0.75em 0;
  pointer-events: none;
  font-weight: normal;
  opacity: 0;
  -webkit-transform: translate3d(0,-3em,0) translate3d(0,-100%,0);
  transform: translate3d(0,-3em,0) translate3d(0,-100%,0);
}

.content__item[data-category='1'] .content__item-title {
  color: #7cbf7f;
}

.content__item[data-category='2'] .content__item-title {
  color: #6584c7;
}

.content__item[data-category='3'] .content__item-title {
  color: #dc4b7c;
}

.content__item[data-category='4'] .content__item-title {
  color: #8d65e0;
}

.content__item--hover .content__item-title {
  opacity: 1;
  -webkit-transition: opacity 0.3s;
  transition: opacity 0.3s;
}

.content__item--current .content__item-title {
  opacity: 1;
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.content__item-details {
  opacity: 0;
  margin: 0 auto;
  max-width: 50vmax;
}

.content__item--current .content__item-details {
  opacity: 1;
}

.content__meta {
  margin: 0;
  font-size: 0.85em;
  line-height: 1.5;
}

.content__meta-item {
  display: inline-block;
  padding: 0 0.25em;
  color: ;
}

.content__meta .icon {
  display: inline-block;
  vertical-align: middle;
}

.content__desc {
  text-align: left;
  margin: 7vmin 0 0 0;
}

.content__button {
  position: absolute;
  top: -100%;
  right: 0;
  -webkit-transition: opacity 0.3s 0.7s;
  transition: opacity 0.3s 0.7s;
}

.content__button--hidden {
  pointer-events: none;
  opacity: 0;
  -webkit-transition: none;
  transition: none;
}

/* Spaces list (sidebar) */

.spaces-list {
  position: absolute;
  top: 0;
  right: 0;
  width: 300px;
  min-height: 100vh;
  padding: 5em 0 1em;
  background: #fff;
}

.search {
  position: fixed;
  z-index: 100;
  top: 0;
  right: 0;
  left: calc(100vw - 300px);
}

.search__input {
  width: 100%;
  padding: 1.315em 2em;
  color: #fff;
  border: 0;
  background: #515158;
  border-radius: 0;
}

.search__input:focus {
  outline: none;
}

.label {
  position: absolute;
  top: 4em;
  right: 0;
}

.label__text {
  font-size: 0.85em;
  line-height: 1;
  display: block;
  padding: 1em;
  color: #e4e4e4;
}

.label__checkbox {
  position: absolute;
  z-index: 10;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  cursor: pointer;
  opacity: 0;
}

.label__checkbox:checked + .label__text {
  color: #515158;
}

.list {
  margin: 0 0 2em;
  padding: 0 1em 1em 2em;
  list-style: none;
}

.list__item {
  font-size: 1.05em;
  line-height: 1;
  position: relative;
  display: block;
}

.list__item:first-child {
  margin-top: 2em;
}

.grouped-by-category [data-category='1']:first-child,
.grouped-by-category :not([data-category='1']) + [data-category='1'],
.grouped-by-category [data-category='2']:first-child,
.grouped-by-category :not([data-category='2']) + [data-category='2'],
.grouped-by-category [data-category='3']:first-child,
.grouped-by-category :not([data-category='3']) + [data-category='3'],
.grouped-by-category [data-category='4']:first-child,
.grouped-by-category :not([data-category='4']) + [data-category='4'] {
  margin-top: 4em;
}

.grouped-by-category [data-category='1']:first-child::before,
.grouped-by-category :not([data-category='1']) + [data-category='1']::before,
.grouped-by-category [data-category='2']:first-child::before,
.grouped-by-category :not([data-category='2']) + [data-category='2']::before,
.grouped-by-category [data-category='3']:first-child::before,
.grouped-by-category :not([data-category='3']) + [data-category='3']::before,
.grouped-by-category [data-category='4']:first-child::before,
.grouped-by-category :not([data-category='4']) + [data-category='4']::before {
  font-size: 1.25em;
  position: absolute;
  top: -1.75em;
  left: 0;
  color: #c7c7c9;
}

.grouped-by-category [data-category='1']:first-child::before,
.grouped-by-category :not([data-category='1']) + [data-category='1']::before {
  content: 'Nourish & Refresh';
  color: #7cbf7f;
}

.grouped-by-category [data-category='2']:first-child::before,
.grouped-by-category :not([data-category='2']) + [data-category='2']::before {
  content: 'Learn & Create';
  color: #6584c7;
}

.grouped-by-category [data-category='3']:first-child::before,
.grouped-by-category :not([data-category='3']) + [data-category='3']::before {
  content: 'Swap & Give';
  color: #dc4b7c;
}

.grouped-by-category [data-category='4']:first-child::before,
.grouped-by-category :not([data-category='4']) + [data-category='4']::before {
  content: 'Relax & Recharge';
  color: #8d65e0;
}

.list__item::after {
  content: 'L' attr(data-level) ' / ' attr(data-space);
  font-size: 0.65em;
  line-height: 3;
  position: absolute;
  top: 0;
  right: 0;
  padding: 0 0.5em;
  pointer-events: none;
  color: #c7c7c9;
}

.list__link {
  font-size: 0.85em;
  display: block;
  padding: 0.5em 0.5em 0.5em 0;
}

.list__item--active .list__link,
.list__link:hover {
  color: #515158;
}

/* Pins */
.level__pins {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.level__pins--active {
  pointer-events: auto;
}

.pin {
  position: absolute;
  width: 5.5vmin;
  height: 8.25vmin;
  margin: -8.25vmin 0 0 -2.25vmin; /* let the bottom tip be the reference point for individual coordinates */
  -webkit-transform: rotateZ(-20deg) rotateZ(45deg) rotateX(-70deg);
  transform: rotateZ(-20deg) rotateZ(45deg) rotateX(-70deg);
  -webkit-transform-origin: 50% 100%;
  transform-origin: 50% 100%;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.pin__icon {
  position: relative;
  display: block;
  width: 100%;
  height: 100%;
  opacity: 0;
  -webkit-transform: translate3d(0,-100px,0);
  transform: translate3d(0,-100px,0);
  -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
  transition: opacity 0.3s, transform 0.3s;
  -webkit-transition-timing-function: cubic-bezier(0.2,1,0.3,1);
  transition-timing-function: cubic-bezier(0.2,1,0.3,1);
}

.level__pins--active .pin__icon {
  opacity: 1;
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.pin:nth-child(2) .pin__icon {
  -webkit-transition-delay: 0.05s;
  transition-delay: 0.05s;
}
.pin:nth-child(3) .pin__icon {
  -webkit-transition-delay: 0.1s;
  transition-delay: 0.1s;
}
.pin:nth-child(4) .pin__icon {
  -webkit-transition-delay: 0.15s;
  transition-delay: 0.15s;
}
.pin:nth-child(5) .pin__icon {
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
}
.pin:nth-child(6) .pin__icon {
  -webkit-transition-delay: 0.25s;
  transition-delay: 0.25s;
}
.pin:nth-child(7) .pin__icon {
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}
.pin:nth-child(8) .pin__icon {
  -webkit-transition-delay: 0.35s;
  transition-delay: 0.35s;
}
.pin:nth-child(9) .pin__icon {
  -webkit-transition-delay: 0.4s;
  transition-delay: 0.4s;
}

.pin[data-category='1'] .icon--pin {
  fill: #7cbf7f;
}
.pin[data-category='2'] .icon--pin {
  fill: #6584c7;
}
.pin[data-category='3'] .icon--pin {
  fill: #dc4b7c;
}
.pin[data-category='4'] .icon--pin {
  fill: #8d65e0;
}

.pin--active .icon--pin {
  stroke: #515158;
  stroke-width: 15px;
}

.icon--pin {
  width: 100%;
  height: 100%;
}

.icon--logo {
  position: absolute;
  top: 11%;
  left: 25%;
  width: 50%;
  height: 50%;
  fill: white;
  fill-opacity: 0.6;
  -webkit-transition: fill-opacity 0.3s;
  transition: fill-opacity 0.3s;
}

.pin--active .icon--logo,
.pin:hover .icon--logo {
  fill-opacity: 1;
}

/* Pins for floor 1 */
.pin--1-1 { top: 60vmin; left: 8vmin; }
.pin--1-2 { top: 15vmin; left: 15vmin; }
.pin--1-3 { top: 15vmin; left: 88vmin; }
.pin--1-4 { top: 40vmin; left: 77vmin; }
.pin--1-5 { top: 33vmin; left: 38vmin; }
.pin--1-6 { top: 6vmin; left: 27vmin; }
.pin--1-7 { top: 36vmin; left: 61vmin; }
.pin--1-8 { top: 9vmin; left: 59vmin; }
.pin--1-9 { top: 8vmin; left: 51vmin; }

/* Pins for floor 2 */
.pin--2-1 { top: 7vmin; left: 22vmin; }
.pin--2-2 { top: 39vmin; left: 5vmin; }
.pin--2-3 { top: 21vmin; left: 84vmin; }
.pin--2-4 { top: 39vmin; left: 53vmin; }
.pin--2-5 { top: 14vmin; left: 50vmin; }
.pin--2-6 { top: 60vmin; left: 15vmin; }
.pin--2-7 { top: 34vmin; left: 37vmin; }
.pin--2-8 { top: 52vmin; left: 74vmin; }

/* Pins for floor 3 */
.pin--3-1 { top: 17vmin; left: 15vmin; }
.pin--3-2 { top: 42vmin; left: 5vmin; }
.pin--3-3 { top: 19vmin; left: 85vmin; }
.pin--3-4 { top: 61vmin; left: 57vmin; }
.pin--3-5 { top: 58vmin; left: 25vmin; }
.pin--3-6 { top: 30vmin; left: 57vmin; }
.pin--3-7 { top: 32vmin; left: 37vmin; }

/* Pins for floor 4 */
.pin--4-1 { top: 55vmin; left: 21vmin; }
.pin--4-2 { top: 18vmin; left: 20vmin; }
.pin--4-3 { top: 21vmin; left: 88vmin; }
.pin--4-4 { top: 52vmin; left: 74vmin; }
.pin--4-5 { top: 33vmin; left: 38vmin; }
.pin--4-6 { top: 39vmin; left: 56vmin; }
.pin--4-7 { top: 58vmin; left: 10vmin; }

/* Mobile compatability */
.open-search,
.close-search {
  display: none;
}

@media screen and (max-width: 65.625em), screen and (max-height: 40.625em) {
  .main {
    width: 100vw;
  }
  .spaces-list,
  .search {
    width: 100vw;
    right: 100%;
    left: auto;
  }
  .spaces-list--open,
  .spaces-list--open .search {
    right: 0;
  }
  .open-search,
  .close-search {
    position: absolute;
    display: block;
    top: 0;
    right: 0;
    z-index: 1000;
  }
  .mallnav {
    top: 4em;
  }
  .container {
    overflow: hidden;
  }
  .container--overflow {
    overflow: auto;
  }
  .content__item {
    overflow: auto;
  }

}
</style>
<div class="text-right">
<div class="btn-group text-right">
                                                <a href="#" class="btn btn-default active" ><i class="fa fa-map-marker"></i></a>
                                                <a href="#" class="btn btn-default"><i class="fa fa-th-large"></i></a>
                                            </div>
                                            </div>


<svg width="100%" height="727px" viewBox="0 0 1174 727" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 46.1 (44463) - http://www.bohemiancoding.com/sketch -->
    <desc>Created with Sketch.</desc>
    <defs>
        <linearGradient x1="49.9903333%" y1="0.0876315789%" x2="49.9903333%" y2="100.087632%" id="linearGradient-1">
            <stop stop-color="#000000" stop-opacity="0" offset="0%"></stop>
            <stop stop-color="#000000" stop-opacity="0.8" offset="100%"></stop>
        </linearGradient>
        <linearGradient x1="49.9903333%" y1="99.9468421%" x2="49.9903333%" y2="-0.0531578947%" id="linearGradient-2">
            <stop stop-color="#000000" stop-opacity="0" offset="0%"></stop>
            <stop stop-color="#000000" stop-opacity="0.8" offset="100%"></stop>
        </linearGradient>
        <linearGradient x1="100.001579%" y1="49.9605556%" x2="0.00157894737%" y2="49.9605556%" id="linearGradient-3">
            <stop stop-color="#000000" stop-opacity="0" offset="0%"></stop>
            <stop stop-color="#000000" stop-opacity="0.8" offset="100%"></stop>
        </linearGradient>
        <linearGradient x1="-0.120789474%" y1="49.9605556%" x2="99.8792105%" y2="49.9605556%" id="linearGradient-4">
            <stop stop-color="#000000" stop-opacity="0" offset="0%"></stop>
            <stop stop-color="#000000" stop-opacity="0.8" offset="100%"></stop>
        </linearGradient>
    </defs>
    <g id="AccelME-Road-" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Desktop" transform="translate(-119.000000, -453.000000)">
            <g id="Jun023" transform="translate(87.000000, 431.000000)">
                <g id="Group" stroke="#3F4547" stroke-width="50">
                    <path d="M1205.80294,266 L934.872083,266 C897.070268,266 866.336214,237.4 866.336214,202 C866.336214,132.4 805.93898,76 731.406223,76 C656.873466,76 596.476232,132.4 596.476232,202 L596.476232,604 C596.476232,670.3 653.982109,724 724.980985,724 L741.151167,724 C803.15471,724 853.485739,677 853.485739,619.1 L853.485739,607 C853.485739,578.9 877.901642,556.2 907.886085,556.2 L1053.52481,556.4 C1089.72031,556.4 1119.06223,529.1 1119.06223,495.3 L1119.06223,454 C1119.06223,420.2 1089.72031,392.9 1053.63189,392.9 L265.576491,392.9 C180.442092,392.9 111.370787,328.4 111.370787,248.9 C111.370787,168.5 180.442092,104 265.576491,104 C350.71089,104 419.782195,168.5 419.782195,248 L419.782195,474.4 C419.782195,515.6 384.015039,548.9 340.002161,548.9 L294.490061,548.9 C251.333881,548.9 216.316335,581.6 216.316335,621.9 C216.316335,662.2 181.29879,694.9 138.14261,694.9 L32.2332757,694.9" id="Shape"></path>
                </g>
                <g id="Group" transform="translate(32.000000, 74.000000)" fill-rule="nonzero" fill="#FFFFFF">
                    <rect id="Rectangle-path" x="1163.28832" y="190" width="10.7116788" height="4"></rect>
                    <path d="M714.576095,651.9 L714.361861,647.9 C721.324453,647.6 728.287044,646.7 735.035401,645.2 L735.999453,649.1 C729.143978,650.6 721.860036,651.6 714.576095,651.9 Z M676.978102,651.1 C669.801277,650.3 662.624453,648.9 655.768978,647 L656.947263,643.2 C663.588504,645.1 670.551095,646.4 677.513686,647.2 L676.978102,651.1 Z M771.026642,635.1 L768.670073,631.7 C774.561496,628.2 780.024453,624.1 785.166058,619.7 L788.165328,622.6 C782.809489,627.3 777.025182,631.5 771.026642,635.1 Z M621.384489,632.1 C615.385949,628.4 609.601642,624.2 604.35292,619.6 L607.245073,616.7 C612.386679,621.1 617.956752,625.2 623.741058,628.8 L621.384489,632.1 Z M70.4828467,622.9 L49.0594891,622.9 L49.0594891,618.9 L70.3757299,618.9 L70.3757299,622.9 L70.4828467,622.9 Z M107.866606,622.9 L107.759489,618.9 C114.72208,618.8 121.577555,617.7 128.218796,615.9 L129.504197,619.7 C122.434489,621.6 115.257664,622.7 107.866606,622.9 Z M162.174818,601.6 L159.175547,598.7 C164.10292,594.2 168.387591,589 171.922445,583.5 L175.671533,585.5 C171.922445,591.4 167.42354,596.8 162.174818,601.6 Z M810.874088,594.4 L807.125,592.6 C810.338504,586.8 813.016423,580.7 814.944526,574.5 L819.014964,575.6 C816.979745,582.1 814.194708,588.4 810.874088,594.4 Z M580.572993,592.1 C576.931022,586.3 573.717518,580.2 571.146715,573.9 L575.110036,572.5 C577.573723,578.6 580.680109,584.5 584.214964,590.1 L580.572993,592.1 Z M186.276095,551.4 L181.991423,551.2 C182.09854,550.1 182.09854,549 182.09854,547.8 C182.09854,542.1 182.741241,536.5 184.133759,531 L188.311314,531.9 C187.025912,537.1 186.383212,542.4 186.383212,547.8 C186.383212,549.1 186.383212,550.3 186.276095,551.4 Z M823.728102,540.6 L819.443431,540.6 L819.443431,533 C819.443431,528.7 819.979015,524.4 821.157299,520.3 L825.334854,521.3 C824.263686,525.1 823.835219,529.1 823.835219,533.1 L823.835219,540.6 L823.728102,540.6 Z M562.791606,539.5 C562.577372,536.4 562.363139,533.2 562.363139,530 L562.363139,519.4 L566.64781,519.4 L566.64781,530 C566.64781,533.1 566.754927,536.1 567.076277,539.2 L562.791606,539.5 Z M204.378832,502 L201.165328,499.4 C205.878467,494.2 211.341423,489.6 217.44708,485.8 L219.80365,489.1 C214.12646,492.7 208.877737,497 204.378832,502 Z M844.722993,493.9 L842.15219,490.7 C848.15073,486.5 854.791971,483.6 862.075912,481.9 L863.14708,485.8 C856.505839,487.3 850.293066,490.1 844.722993,493.9 Z M566.64781,484.5 L562.363139,484.5 L562.363139,464.6 L566.64781,464.6 L566.64781,484.5 Z M1021.78704,484.5 L1017.28814,484.5 L1017.28814,480.5 L1021.67993,480.5 C1027.25,480.5 1032.60584,479.9 1037.85456,478.6 L1038.92573,482.5 C1033.35566,483.8 1027.57135,484.5 1021.78704,484.5 Z M979.90438,484.4 L958.588139,484.4 L958.588139,480.4 L979.90438,480.4 L979.90438,484.4 Z M921.20438,484.3 L899.888139,484.3 L899.888139,480.3 L921.20438,480.3 L921.20438,484.3 Z M253.545438,477.4 L253.009854,473.4 C256.116241,473.1 259.222628,472.9 262.436131,472.9 L274.647445,472.9 L274.647445,476.9 L262.436131,476.9 C259.436861,476.9 256.437591,477.1 253.545438,477.4 Z M312.138321,476.8 L311.924088,472.8 C318.886679,472.5 325.742153,471.3 332.276277,469.3 L333.561679,473.1 C326.599088,475.2 319.422263,476.5 312.138321,476.8 Z M1071.59635,464 L1068.48996,461.3 C1073.2031,456.5 1076.95219,451.1 1079.73723,445.3 L1083.70055,446.9 C1080.59416,453.2 1076.52372,459 1071.59635,464 Z M365.910949,454.5 L362.911679,451.7 C367.839051,447.1 372.016606,441.9 375.444343,436.3 L379.193431,438.3 C375.55146,444.2 371.052555,449.6 365.910949,454.5 Z M566.64781,429.7 L562.363139,429.7 L562.363139,409.8 L566.64781,409.8 L566.64781,429.7 Z M1089.37774,412 L1085.09307,412 L1085.09307,392 L1089.37774,392 L1089.37774,412 Z M389.797993,404.2 L385.513321,404 C385.620438,402.8 385.620438,401.6 385.620438,400.4 L385.620438,384.2 L389.905109,384.2 L389.905109,400.4 C389.905109,401.6 389.905109,402.9 389.797993,404.2 Z M566.64781,374.9 L562.363139,374.9 L562.363139,355 L566.64781,355 L566.64781,374.9 Z M1080.70128,358.4 C1078.13047,352.4 1074.59562,346.9 1070.20383,341.9 L1073.52445,339.3 C1078.23759,344.6 1082.0938,350.5 1084.77172,356.9 L1080.70128,358.4 Z M1040.53248,323.5 C1034.42682,321.7 1028.21405,320.9 1021.78704,320.9 L1020.18029,320.9 L1020.18029,316.9 L1021.78704,316.9 C1028.64252,316.9 1035.39088,317.8 1041.81788,319.7 L1040.53248,323.5 Z M982.796533,320.9 L961.480292,320.9 L961.480292,316.9 L982.796533,316.9 L982.796533,320.9 Z M924.096533,320.9 L902.780292,320.9 L902.780292,316.9 L924.096533,316.9 L924.096533,320.9 Z M865.289416,320.9 L843.973175,320.9 L843.973175,316.9 L865.289416,316.9 L865.289416,320.9 Z M806.589416,320.9 L785.273175,320.9 L785.273175,316.9 L806.589416,316.9 L806.589416,320.9 Z M747.889416,320.9 L726.573175,320.9 L726.573175,316.9 L747.889416,316.9 L747.889416,320.9 Z M689.189416,320.9 L667.873175,320.9 L667.873175,316.9 L689.189416,316.9 L689.189416,320.9 Z M630.489416,320.9 L609.173175,320.9 L609.173175,316.9 L630.489416,316.9 L630.489416,320.9 Z M562.363139,320.9 L562.363139,300.2 L566.64781,300.2 L566.64781,320.9 L562.363139,320.9 Z M513.089416,320.9 L491.773175,320.9 L491.773175,316.9 L513.089416,316.9 L513.089416,320.9 Z M454.389416,320.9 L433.073175,320.9 L433.073175,316.9 L454.389416,316.9 L454.389416,320.9 Z M395.689416,320.9 L374.373175,320.9 L374.373175,316.9 L395.689416,316.9 L395.689416,320.9 Z M336.989416,320.9 L315.673175,320.9 L315.673175,316.9 L336.989416,316.9 L336.989416,320.9 Z M278.289416,320.9 L256.973175,320.9 L256.973175,316.9 L278.289416,316.9 L278.289416,320.9 Z M219.375182,320.3 C212.198358,319.7 205.021533,318.6 198.058942,317.1 L199.022993,313.2 C205.77135,314.7 212.841058,315.7 219.80365,316.3 L219.375182,320.3 Z M162.603285,305 C156.176277,302 149.963504,298.5 144.07208,294.6 L146.535766,291.3 C152.320073,295 158.318613,298.4 164.531387,301.4 L162.603285,305 Z M115.900365,271.1 C111.187226,266.1 106.795438,260.7 102.832117,255 L106.366971,252.8 C110.223175,258.2 114.507847,263.5 119.113869,268.4 L115.900365,271.1 Z M566.64781,265.3 L562.363139,265.3 L562.363139,245.4 L566.64781,245.4 L566.64781,265.3 Z M389.905109,239.7 L385.620438,239.7 L385.620438,219.8 L389.905109,219.8 L389.905109,239.7 Z M86.014781,223.5 C83.6582117,217.2 81.7301095,210.6 80.2304745,204 L84.4080292,203.2 C85.8005474,209.6 87.7286496,216 89.9781022,222.1 L86.014781,223.5 Z M566.64781,210.5 L562.363139,210.5 L562.363139,190.6 L566.64781,190.6 L566.64781,210.5 Z M1125.90456,194 L1104.58832,194 L1104.58832,190 L1125.90456,190 L1125.90456,194 Z M1067.20456,194 L1045.88832,194 L1045.88832,190 L1067.20456,190 L1067.20456,194 Z M1008.50456,194 L987.188321,194 L987.188321,190 L1008.50456,190 L1008.50456,194 Z M949.804562,194 L928.488321,194 L928.488321,190 L949.804562,190 L949.804562,194 Z M890.783212,193 C883.49927,191.8 876.536679,189.6 870.002555,186.4 L872.037774,182.9 C878.143431,185.9 884.677555,188 891.533029,189.1 L890.783212,193 Z M389.905109,184.9 L385.620438,184.9 L385.620438,174 C385.620438,171 385.513321,168 385.299088,165.1 L389.583759,164.9 C389.797993,167.9 389.905109,171 389.905109,174.1 L389.905109,184.9 Z M81.5158759,169 L77.2312044,168.9 C77.445438,162.2 78.1952555,155.4 79.4806569,148.8 L83.6582117,149.5 C82.479927,155.9 81.7301095,162.5 81.5158759,169 Z M842.47354,162 C838.724453,156.1 835.939416,149.7 834.225547,143 L838.403102,142.1 C840.009854,148.4 842.580657,154.4 846.115511,159.9 L842.47354,162 Z M566.64781,155.7 L562.363139,155.7 L562.363139,135.8 L566.64781,135.8 L566.64781,155.7 Z M378.657847,131.4 C376.515511,125.2 373.944708,119 370.945438,113.1 L374.801642,111.4 C377.908029,117.5 380.585949,123.8 382.728285,130.2 L378.657847,131.4 Z M94.3698905,116.7 L90.4065693,115.1 C93.2987226,109 96.7264599,103 100.475547,97.2 L104.117518,99.3 C100.475547,104.8 97.154927,110.7 94.3698905,116.7 Z M830.690693,108.2 C829.619526,101.8 827.905657,95.4 825.763321,89.2 L829.833759,87.9 C832.083212,94.3 833.79708,100.9 834.975365,107.5 L830.690693,108.2 Z M569.64708,101.5 L565.469526,100.6 C566.969161,94 569.111496,87.5 571.789416,81.2 L575.752737,82.7 C573.181934,88.9 571.146715,95.2 569.64708,101.5 Z M351.235949,84.1 C346.844161,79 341.916788,74.2 336.882299,69.8 L339.774453,66.9 C345.023175,71.5 350.057664,76.4 354.556569,81.6 L351.235949,84.1 Z M127.147628,72.5 L124.148358,69.6 C129.289964,64.9 134.860036,60.5 140.644343,56.5 L143.215146,59.7 C137.537956,63.7 132.075,68 127.147628,72.5 Z M809.588686,58.5 C805.625365,53.1 801.233577,48 796.520438,43.2 L799.626825,40.5 C804.554197,45.4 809.160219,50.7 813.12354,56.3 L809.588686,58.5 Z M593.748358,53 L590.32062,50.6 C594.712409,45.2 599.532664,40.2 604.781387,35.5 L607.780657,38.4 C602.639051,42.9 597.925912,47.8 593.748358,53 Z M307.103832,49.7 C300.998175,46.5 294.571168,43.7 288.037044,41.4 L289.536679,37.7 C296.285036,40.1 302.819161,43 309.139051,46.2 L307.103832,49.7 Z M175.028832,42.9 L173.42208,39.2 C180.063321,36.6 186.918796,34.4 193.881387,32.8 L194.952555,36.7 C188.204197,38.2 181.562956,40.4 175.028832,42.9 Z M252.367153,33.1 C245.404562,32.3 238.334854,31.9 231.372263,32 L231.265146,28 C238.441971,27.9 245.725912,28.3 252.79562,29.1 L252.367153,33.1 Z M767.920255,21.7 C761.921715,18.3 755.601825,15.4 749.174818,13 L750.781569,9.3 C757.42281,11.8 763.956934,14.8 770.169708,18.3 L767.920255,21.7 Z M637.452007,18.4 L635.416788,14.9 C641.843796,11.7 648.485036,9 655.340511,6.9 L656.733029,10.7 C650.091788,12.7 643.557664,15.3 637.452007,18.4 Z M713.612044,4.7 C706.756569,4 699.579745,3.8 692.617153,4.2 L692.40292,0.2 C699.579745,-0.1 706.970803,1.04083409e-16 714.040511,0.7 L713.612044,4.7 Z" id="Shape"></path>
                    <rect id="Rectangle-path" x="0.107116788" y="618.9" width="10.7116788" height="4"></rect>
                </g>
                <g id="Group" transform="translate(393.000000, 330.000000)" fill-rule="nonzero">
                    <rect id="Rectangle-path" fill="url(#linearGradient-1)" x="3" y="0" width="48" height="38"></rect>
                    <rect id="Rectangle-path" fill="#3F4547" x="0" y="38" width="54" height="14"></rect>
                </g>
                <g id="Group" transform="translate(393.000000, 403.000000)" fill-rule="nonzero">
                    <rect id="Rectangle-path" fill="url(#linearGradient-2)" x="3" y="13" width="48" height="38"></rect>
                    <rect id="Rectangle-path" fill="#3F4547" x="0" y="0" width="54" height="14"></rect>
                </g>
                <g id="Group" transform="translate(612.000000, 359.000000)" fill-rule="nonzero">
                    <polygon id="Shape" fill="url(#linearGradient-3)" points="35 59 35 10 9 10 9 59"></polygon>
                    <rect id="Rectangle-path" fill="#3F4547" transform="translate(4.000000, 35.000000) rotate(90.000000) translate(-4.000000, -35.000000) " x="-31" y="31" width="70" height="8"></rect>
                </g>
                <g id="Group" transform="translate(551.000000, 365.000000)" fill-rule="nonzero">
                    <polygon id="Shape" fill="url(#linearGradient-4)" points="0 53 0 2 21 2 21 53"></polygon>
                    <rect id="Rectangle-path" fill="#3F4547" transform="translate(31.000000, 28.000000) rotate(90.000000) translate(-31.000000, -28.000000) " x="3" y="21" width="56" height="14"></rect>
                </g>
                <g id="1" transform="translate(103.000000, 611.000000)">
                    <g id="Group" stroke-width="1" fill-rule="evenodd">
                        <g id="Group-16">
                            <path d="M59.1563711,28.9567823 C58.6408778,12.9757649 45.9191054,0.0056930344 29.5888798,0 C13.2586542,0.0056930344 0.537223824,12.9757649 0.0217305287,28.9567823 C-0.730472362,52.2737768 18.2408439,59.2902743 26.579042,74.2519036 C27.8782083,76.5826988 31.2995513,76.5826988 32.5987176,74.2519036 C40.9369157,59.2902743 59.908232,52.2737768 59.1563711,28.9567823" id="Fill-52" fill="#DE4F4D"></path>
                            <path d="M30.0117417,50.9450549 C17.6387548,50.9450549 7.60861057,41.409943 7.60861057,29.6483516 C7.60861057,17.8864319 17.6387548,8.35164835 30.0117417,8.35164835 C42.3847286,8.35164835 52.4148728,17.8864319 52.4148728,29.6483516 C52.4148728,41.409943 42.3847286,50.9450549 30.0117417,50.9450549" id="Fill-53" fill="#FFFFFE"></path>
                        </g>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#DE4F4D">
                        <tspan x="21.369863" y="42.5107527">1</tspan>
                    </text>
                </g>
                <g id="1" transform="translate(296.000000, 494.000000)">
                    <g id="Group" stroke-width="1" fill-rule="evenodd">
                        <g id="Group-16">
                            <path d="M59.1563711,28.9567823 C58.6408778,12.9757649 45.9191054,0.0056930344 29.5888798,0 C13.2586542,0.0056930344 0.537223824,12.9757649 0.0217305287,28.9567823 C-0.730472362,52.2737768 18.2408439,59.2902743 26.579042,74.2519036 C27.8782083,76.5826988 31.2995513,76.5826988 32.5987176,74.2519036 C40.9369157,59.2902743 59.908232,52.2737768 59.1563711,28.9567823" id="Fill-52" fill="#DE4F4D"></path>
                            <path d="M30.0117417,50.9450549 C17.6387548,50.9450549 7.60861057,41.409943 7.60861057,29.6483516 C7.60861057,17.8864319 17.6387548,8.35164835 30.0117417,8.35164835 C42.3847286,8.35164835 52.4148728,17.8864319 52.4148728,29.6483516 C52.4148728,41.409943 42.3847286,50.9450549 30.0117417,50.9450549" id="Fill-53" fill="#FFFFFE"></path>
                        </g>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#DE4F4D">
                        <tspan x="21.369863" y="42.5107527">1</tspan>
                    </text>
                </g>
                <g id="2" transform="translate(72.000000, 156.000000)">
                    <g id="Group-12" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9779677,30.0998132 C59.4553147,13.4879662 46.5571978,0.00591775945 30.0001635,0 C13.4431293,0.00591775945 0.544665517,13.4879662 0.0220125932,30.0998132 C-0.740290743,54.3372153 18.494516,61.6306798 26.9485225,77.1828997 C28.2653859,79.6057001 31.7345944,79.6057001 33.0518046,77.1828997 C41.505811,61.6306798 60.7406178,54.3372153 59.9779677,30.0998132" id="Fill-56" fill="#297CB4"></path>
                        <path d="M30.4225352,52.6666667 C17.8210278,52.6666667 7.6056338,42.5879919 7.6056338,30.155914 C7.6056338,17.7234889 17.8210278,7.64516129 30.4225352,7.64516129 C43.0236908,7.64516129 53.2394366,17.7234889 53.2394366,30.155914 C53.2394366,42.5879919 43.0236908,52.6666667 30.4225352,52.6666667" id="Fill-57" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#297CB4">
                        <tspan x="21.1267606" y="41.1075269">2</tspan>
                    </text>
                </g>
                <g id="2" transform="translate(378.000000, 224.000000)">
                    <g id="Group-12" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9779677,30.0998132 C59.4553147,13.4879662 46.5571978,0.00591775945 30.0001635,0 C13.4431293,0.00591775945 0.544665517,13.4879662 0.0220125932,30.0998132 C-0.740290743,54.3372153 18.494516,61.6306798 26.9485225,77.1828997 C28.2653859,79.6057001 31.7345944,79.6057001 33.0518046,77.1828997 C41.505811,61.6306798 60.7406178,54.3372153 59.9779677,30.0998132" id="Fill-56" fill="#297CB4"></path>
                        <path d="M30.4225352,52.6666667 C17.8210278,52.6666667 7.6056338,42.5879919 7.6056338,30.155914 C7.6056338,17.7234889 17.8210278,7.64516129 30.4225352,7.64516129 C43.0236908,7.64516129 53.2394366,17.7234889 53.2394366,30.155914 C53.2394366,42.5879919 43.0236908,52.6666667 30.4225352,52.6666667" id="Fill-57" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#297CB4">
                        <tspan x="21.1267606" y="41.1075269">2</tspan>
                    </text>
                </g>
                <g id="2" transform="translate(395.000000, 128.000000)">
                    <g id="Group-12" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9779677,30.0998132 C59.4553147,13.4879662 46.5571978,0.00591775945 30.0001635,0 C13.4431293,0.00591775945 0.544665517,13.4879662 0.0220125932,30.0998132 C-0.740290743,54.3372153 18.494516,61.6306798 26.9485225,77.1828997 C28.2653859,79.6057001 31.7345944,79.6057001 33.0518046,77.1828997 C41.505811,61.6306798 60.7406178,54.3372153 59.9779677,30.0998132" id="Fill-56" fill="#297CB4"></path>
                        <path d="M30.4225352,52.6666667 C17.8210278,52.6666667 7.6056338,42.5879919 7.6056338,30.155914 C7.6056338,17.7234889 17.8210278,7.64516129 30.4225352,7.64516129 C43.0236908,7.64516129 53.2394366,17.7234889 53.2394366,30.155914 C53.2394366,42.5879919 43.0236908,52.6666667 30.4225352,52.6666667" id="Fill-57" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#297CB4">
                        <tspan x="21.1267606" y="41.1075269">2</tspan>
                    </text>
                </g>
                <g id="2" transform="translate(301.000000, 59.000000)">
                    <g id="Group-12" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9779677,30.0998132 C59.4553147,13.4879662 46.5571978,0.00591775945 30.0001635,0 C13.4431293,0.00591775945 0.544665517,13.4879662 0.0220125932,30.0998132 C-0.740290743,54.3372153 18.494516,61.6306798 26.9485225,77.1828997 C28.2653859,79.6057001 31.7345944,79.6057001 33.0518046,77.1828997 C41.505811,61.6306798 60.7406178,54.3372153 59.9779677,30.0998132" id="Fill-56" fill="#297CB4"></path>
                        <path d="M30.4225352,52.6666667 C17.8210278,52.6666667 7.6056338,42.5879919 7.6056338,30.155914 C7.6056338,17.7234889 17.8210278,7.64516129 30.4225352,7.64516129 C43.0236908,7.64516129 53.2394366,17.7234889 53.2394366,30.155914 C53.2394366,42.5879919 43.0236908,52.6666667 30.4225352,52.6666667" id="Fill-57" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#297CB4">
                        <tspan x="21.1267606" y="41.1075269">2</tspan>
                    </text>
                </g>
                <g id="2" transform="translate(221.000000, 33.000000)">
                    <g id="Group-12" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9779677,30.0998132 C59.4553147,13.4879662 46.5571978,0.00591775945 30.0001635,0 C13.4431293,0.00591775945 0.544665517,13.4879662 0.0220125932,30.0998132 C-0.740290743,54.3372153 18.494516,61.6306798 26.9485225,77.1828997 C28.2653859,79.6057001 31.7345944,79.6057001 33.0518046,77.1828997 C41.505811,61.6306798 60.7406178,54.3372153 59.9779677,30.0998132" id="Fill-56" fill="#297CB4"></path>
                        <path d="M30.4225352,52.6666667 C17.8210278,52.6666667 7.6056338,42.5879919 7.6056338,30.155914 C7.6056338,17.7234889 17.8210278,7.64516129 30.4225352,7.64516129 C43.0236908,7.64516129 53.2394366,17.7234889 53.2394366,30.155914 C53.2394366,42.5879919 43.0236908,52.6666667 30.4225352,52.6666667" id="Fill-57" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#297CB4">
                        <tspan x="21.1267606" y="41.1075269">2</tspan>
                    </text>
                </g>
                <g id="2" transform="translate(142.000000, 71.000000)">
                    <g id="Group-12" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9779677,30.0998132 C59.4553147,13.4879662 46.5571978,0.00591775945 30.0001635,0 C13.4431293,0.00591775945 0.544665517,13.4879662 0.0220125932,30.0998132 C-0.740290743,54.3372153 18.494516,61.6306798 26.9485225,77.1828997 C28.2653859,79.6057001 31.7345944,79.6057001 33.0518046,77.1828997 C41.505811,61.6306798 60.7406178,54.3372153 59.9779677,30.0998132" id="Fill-56" fill="#297CB4"></path>
                        <path d="M30.4225352,52.6666667 C17.8210278,52.6666667 7.6056338,42.5879919 7.6056338,30.155914 C7.6056338,17.7234889 17.8210278,7.64516129 30.4225352,7.64516129 C43.0236908,7.64516129 53.2394366,17.7234889 53.2394366,30.155914 C53.2394366,42.5879919 43.0236908,52.6666667 30.4225352,52.6666667" id="Fill-57" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#297CB4">
                        <tspan x="21.1267606" y="41.1075269">2</tspan>
                    </text>
                </g>
                <g id="3" transform="translate(142.000000, 314.000000)">
                    <g id="Group-5" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9781453,30.0999126 C59.4544656,13.4880108 46.5566876,0.005917779 30.0000885,0 C13.442449,0.005917779 0.544670947,13.4880108 0.0220317576,30.0999126 C-0.740598353,54.3373949 18.493703,61.6308835 26.9481808,77.1831548 C28.2660501,79.6056151 31.734127,79.6056151 33.0519962,77.1831548 C41.5036996,61.6308835 60.7376541,54.3373949 59.9781453,30.0999126" id="Fill-36" fill="#E9842C"></path>
                        <path d="M30.0006825,53.325 C17.7772264,53.325 7.86885246,43.1562693 7.86885246,30.6126751 C7.86885246,18.0687307 17.7772264,7.9 30.0006825,7.9 C42.2210673,7.9 52.1311475,18.0687307 52.1311475,30.6126751 C52.1311475,43.1562693 42.2210673,53.325 30.0006825,53.325" id="Fill-37" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#E9842C">
                        <tspan x="21.1267606" y="41.1075269">3</tspan>
                    </text>
                </g>
                <g id="3" transform="translate(221.000000, 321.000000)">
                    <g id="Group-5" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9781453,30.0999126 C59.4544656,13.4880108 46.5566876,0.005917779 30.0000885,0 C13.442449,0.005917779 0.544670947,13.4880108 0.0220317576,30.0999126 C-0.740598353,54.3373949 18.493703,61.6308835 26.9481808,77.1831548 C28.2660501,79.6056151 31.734127,79.6056151 33.0519962,77.1831548 C41.5036996,61.6308835 60.7376541,54.3373949 59.9781453,30.0999126" id="Fill-36" fill="#E9842C"></path>
                        <path d="M30.0006825,53.325 C17.7772264,53.325 7.86885246,43.1562693 7.86885246,30.6126751 C7.86885246,18.0687307 17.7772264,7.9 30.0006825,7.9 C42.2210673,7.9 52.1311475,18.0687307 52.1311475,30.6126751 C52.1311475,43.1562693 42.2210673,53.325 30.0006825,53.325" id="Fill-37" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#E9842C">
                        <tspan x="21.1267606" y="41.1075269">3</tspan>
                    </text>
                </g>
                <g id="3" transform="translate(327.000000, 342.000000)">
                    <g id="Group-5" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9781453,30.0999126 C59.4544656,13.4880108 46.5566876,0.005917779 30.0000885,0 C13.442449,0.005917779 0.544670947,13.4880108 0.0220317576,30.0999126 C-0.740598353,54.3373949 18.493703,61.6308835 26.9481808,77.1831548 C28.2660501,79.6056151 31.734127,79.6056151 33.0519962,77.1831548 C41.5036996,61.6308835 60.7376541,54.3373949 59.9781453,30.0999126" id="Fill-36" fill="#E9842C"></path>
                        <path d="M30.0006825,53.325 C17.7772264,53.325 7.86885246,43.1562693 7.86885246,30.6126751 C7.86885246,18.0687307 17.7772264,7.9 30.0006825,7.9 C42.2210673,7.9 52.1311475,18.0687307 52.1311475,30.6126751 C52.1311475,43.1562693 42.2210673,53.325 30.0006825,53.325" id="Fill-37" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#E9842C">
                        <tspan x="21.1267606" y="41.1075269">3</tspan>
                    </text>
                </g>
                <g id="3" transform="translate(407.000000, 325.333333)">
                    <g id="Group-5" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9781453,30.0999126 C59.4544656,13.4880108 46.5566876,0.005917779 30.0000885,0 C13.442449,0.005917779 0.544670947,13.4880108 0.0220317576,30.0999126 C-0.740598353,54.3373949 18.493703,61.6308835 26.9481808,77.1831548 C28.2660501,79.6056151 31.734127,79.6056151 33.0519962,77.1831548 C41.5036996,61.6308835 60.7376541,54.3373949 59.9781453,30.0999126" id="Fill-36" fill="#E9842C"></path>
                        <path d="M30.0006825,53.325 C17.7772264,53.325 7.86885246,43.1562693 7.86885246,30.6126751 C7.86885246,18.0687307 17.7772264,7.9 30.0006825,7.9 C42.2210673,7.9 52.1311475,18.0687307 52.1311475,30.6126751 C52.1311475,43.1562693 42.2210673,53.325 30.0006825,53.325" id="Fill-37" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#E9842C">
                        <tspan x="21.1267606" y="41.1075269">3</tspan>
                    </text>
                </g>
                <g id="3" transform="translate(491.000000, 332.000000)">
                    <g id="Group-5" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9781453,30.0999126 C59.4544656,13.4880108 46.5566876,0.005917779 30.0000885,0 C13.442449,0.005917779 0.544670947,13.4880108 0.0220317576,30.0999126 C-0.740598353,54.3373949 18.493703,61.6308835 26.9481808,77.1831548 C28.2660501,79.6056151 31.734127,79.6056151 33.0519962,77.1831548 C41.5036996,61.6308835 60.7376541,54.3373949 59.9781453,30.0999126" id="Fill-36" fill="#E9842C"></path>
                        <path d="M30.0006825,53.325 C17.7772264,53.325 7.86885246,43.1562693 7.86885246,30.6126751 C7.86885246,18.0687307 17.7772264,7.9 30.0006825,7.9 C42.2210673,7.9 52.1311475,18.0687307 52.1311475,30.6126751 C52.1311475,43.1562693 42.2210673,53.325 30.0006825,53.325" id="Fill-37" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#E9842C">
                        <tspan x="21.1267606" y="41.1075269">3</tspan>
                    </text>
                </g>
                <g id="3" transform="translate(685.000000, 307.000000)">
                    <g id="Group-5" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9781453,30.0999126 C59.4544656,13.4880108 46.5566876,0.005917779 30.0000885,0 C13.442449,0.005917779 0.544670947,13.4880108 0.0220317576,30.0999126 C-0.740598353,54.3373949 18.493703,61.6308835 26.9481808,77.1831548 C28.2660501,79.6056151 31.734127,79.6056151 33.0519962,77.1831548 C41.5036996,61.6308835 60.7376541,54.3373949 59.9781453,30.0999126" id="Fill-36" fill="#E9842C"></path>
                        <path d="M30.0006825,53.325 C17.7772264,53.325 7.86885246,43.1562693 7.86885246,30.6126751 C7.86885246,18.0687307 17.7772264,7.9 30.0006825,7.9 C42.2210673,7.9 52.1311475,18.0687307 52.1311475,30.6126751 C52.1311475,43.1562693 42.2210673,53.325 30.0006825,53.325" id="Fill-37" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#E9842C">
                        <tspan x="21.1267606" y="41.1075269">3</tspan>
                    </text>
                </g>
                <g id="3" transform="translate(773.000000, 331.000000)">
                    <g id="Group-5" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9781453,30.0999126 C59.4544656,13.4880108 46.5566876,0.005917779 30.0000885,0 C13.442449,0.005917779 0.544670947,13.4880108 0.0220317576,30.0999126 C-0.740598353,54.3373949 18.493703,61.6308835 26.9481808,77.1831548 C28.2660501,79.6056151 31.734127,79.6056151 33.0519962,77.1831548 C41.5036996,61.6308835 60.7376541,54.3373949 59.9781453,30.0999126" id="Fill-36" fill="#E9842C"></path>
                        <path d="M30.0006825,53.325 C17.7772264,53.325 7.86885246,43.1562693 7.86885246,30.6126751 C7.86885246,18.0687307 17.7772264,7.9 30.0006825,7.9 C42.2210673,7.9 52.1311475,18.0687307 52.1311475,30.6126751 C52.1311475,43.1562693 42.2210673,53.325 30.0006825,53.325" id="Fill-37" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#E9842C">
                        <tspan x="21.1267606" y="41.1075269">3</tspan>
                    </text>
                </g>
                <g id="3" transform="translate(857.000000, 314.000000)">
                    <g id="Group-5" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9781453,30.0999126 C59.4544656,13.4880108 46.5566876,0.005917779 30.0000885,0 C13.442449,0.005917779 0.544670947,13.4880108 0.0220317576,30.0999126 C-0.740598353,54.3373949 18.493703,61.6308835 26.9481808,77.1831548 C28.2660501,79.6056151 31.734127,79.6056151 33.0519962,77.1831548 C41.5036996,61.6308835 60.7376541,54.3373949 59.9781453,30.0999126" id="Fill-36" fill="#E9842C"></path>
                        <path d="M30.0006825,53.325 C17.7772264,53.325 7.86885246,43.1562693 7.86885246,30.6126751 C7.86885246,18.0687307 17.7772264,7.9 30.0006825,7.9 C42.2210673,7.9 52.1311475,18.0687307 52.1311475,30.6126751 C52.1311475,43.1562693 42.2210673,53.325 30.0006825,53.325" id="Fill-37" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#E9842C">
                        <tspan x="21.1267606" y="41.1075269">3</tspan>
                    </text>
                </g>
                <g id="4" transform="translate(965.000000, 328.000000)">
                    <g id="Group" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9779874,30.0999126 C59.4553345,13.4880108 46.5568707,0.005917779 29.9998365,0 C13.4428022,0.005917779 0.544685266,13.4880108 0.0220323416,30.0999126 C-0.740617811,54.3373949 18.494189,61.6308835 26.9481954,77.1831548 C28.2654056,79.6056151 31.7342673,79.6056151 33.0514775,77.1831548 C41.505484,61.6308835 60.7402907,54.3373949 59.9779874,30.0999126" id="Fill-28" fill="#82BC4C"></path>
                        <path d="M30.3947368,52.6666667 C17.9682504,52.6666667 7.89473684,42.6631723 7.89473684,30.3234046 C7.89473684,17.9832924 17.9682504,7.97979798 30.3947368,7.97979798 C42.8212233,7.97979798 52.8947368,17.9832924 52.8947368,30.3234046 C52.8947368,42.6631723 42.8212233,52.6666667 30.3947368,52.6666667" id="Fill-29" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#82BC4C">
                        <tspan x="21.1267606" y="40.2580645">4</tspan>
                    </text>
                </g>
                <g id="4" transform="translate(1097.000000, 344.000000)">
                    <g id="Group" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9779874,30.0999126 C59.4553345,13.4880108 46.5568707,0.005917779 29.9998365,0 C13.4428022,0.005917779 0.544685266,13.4880108 0.0220323416,30.0999126 C-0.740617811,54.3373949 18.494189,61.6308835 26.9481954,77.1831548 C28.2654056,79.6056151 31.7342673,79.6056151 33.0514775,77.1831548 C41.505484,61.6308835 60.7402907,54.3373949 59.9779874,30.0999126" id="Fill-28" fill="#82BC4C"></path>
                        <path d="M30.3947368,52.6666667 C17.9682504,52.6666667 7.89473684,42.6631723 7.89473684,30.3234046 C7.89473684,17.9832924 17.9682504,7.97979798 30.3947368,7.97979798 C42.8212233,7.97979798 52.8947368,17.9832924 52.8947368,30.3234046 C52.8947368,42.6631723 42.8212233,52.6666667 30.3947368,52.6666667" id="Fill-29" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#82BC4C">
                        <tspan x="21.1267606" y="40.2580645">4</tspan>
                    </text>
                </g>
                <g id="4" transform="translate(1068.000000, 441.000000)">
                    <g id="Group" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9779874,30.0999126 C59.4553345,13.4880108 46.5568707,0.005917779 29.9998365,0 C13.4428022,0.005917779 0.544685266,13.4880108 0.0220323416,30.0999126 C-0.740617811,54.3373949 18.494189,61.6308835 26.9481954,77.1831548 C28.2654056,79.6056151 31.7342673,79.6056151 33.0514775,77.1831548 C41.505484,61.6308835 60.7402907,54.3373949 59.9779874,30.0999126" id="Fill-28" fill="#82BC4C"></path>
                        <path d="M30.3947368,52.6666667 C17.9682504,52.6666667 7.89473684,42.6631723 7.89473684,30.3234046 C7.89473684,17.9832924 17.9682504,7.97979798 30.3947368,7.97979798 C42.8212233,7.97979798 52.8947368,17.9832924 52.8947368,30.3234046 C52.8947368,42.6631723 42.8212233,52.6666667 30.3947368,52.6666667" id="Fill-29" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#82BC4C">
                        <tspan x="21.1267606" y="40.2580645">4</tspan>
                    </text>
                </g>
                <g id="4" transform="translate(954.000000, 496.000000)">
                    <g id="Group" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9779874,30.0999126 C59.4553345,13.4880108 46.5568707,0.005917779 29.9998365,0 C13.4428022,0.005917779 0.544685266,13.4880108 0.0220323416,30.0999126 C-0.740617811,54.3373949 18.494189,61.6308835 26.9481954,77.1831548 C28.2654056,79.6056151 31.7342673,79.6056151 33.0514775,77.1831548 C41.505484,61.6308835 60.7402907,54.3373949 59.9779874,30.0999126" id="Fill-28" fill="#82BC4C"></path>
                        <path d="M30.3947368,52.6666667 C17.9682504,52.6666667 7.89473684,42.6631723 7.89473684,30.3234046 C7.89473684,17.9832924 17.9682504,7.97979798 30.3947368,7.97979798 C42.8212233,7.97979798 52.8947368,17.9832924 52.8947368,30.3234046 C52.8947368,42.6631723 42.8212233,52.6666667 30.3947368,52.6666667" id="Fill-29" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#82BC4C">
                        <tspan x="21.1267606" y="40.2580645">4</tspan>
                    </text>
                </g>
                <g id="4" transform="translate(836.000000, 482.000000)">
                    <g id="Group" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9779874,30.0999126 C59.4553345,13.4880108 46.5568707,0.005917779 29.9998365,0 C13.4428022,0.005917779 0.544685266,13.4880108 0.0220323416,30.0999126 C-0.740617811,54.3373949 18.494189,61.6308835 26.9481954,77.1831548 C28.2654056,79.6056151 31.7342673,79.6056151 33.0514775,77.1831548 C41.505484,61.6308835 60.7402907,54.3373949 59.9779874,30.0999126" id="Fill-28" fill="#82BC4C"></path>
                        <path d="M30.3947368,52.6666667 C17.9682504,52.6666667 7.89473684,42.6631723 7.89473684,30.3234046 C7.89473684,17.9832924 17.9682504,7.97979798 30.3947368,7.97979798 C42.8212233,7.97979798 52.8947368,17.9832924 52.8947368,30.3234046 C52.8947368,42.6631723 42.8212233,52.6666667 30.3947368,52.6666667" id="Fill-29" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#82BC4C">
                        <tspan x="21.1267606" y="40.2580645">4</tspan>
                    </text>
                </g>
                <g id="4" transform="translate(786.000000, 633.000000)">
                    <g id="Group" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9779874,30.0999126 C59.4553345,13.4880108 46.5568707,0.005917779 29.9998365,0 C13.4428022,0.005917779 0.544685266,13.4880108 0.0220323416,30.0999126 C-0.740617811,54.3373949 18.494189,61.6308835 26.9481954,77.1831548 C28.2654056,79.6056151 31.7342673,79.6056151 33.0514775,77.1831548 C41.505484,61.6308835 60.7402907,54.3373949 59.9779874,30.0999126" id="Fill-28" fill="#82BC4C"></path>
                        <path d="M30.3947368,52.6666667 C17.9682504,52.6666667 7.89473684,42.6631723 7.89473684,30.3234046 C7.89473684,17.9832924 17.9682504,7.97979798 30.3947368,7.97979798 C42.8212233,7.97979798 52.8947368,17.9832924 52.8947368,30.3234046 C52.8947368,42.6631723 42.8212233,52.6666667 30.3947368,52.6666667" id="Fill-29" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#82BC4C">
                        <tspan x="21.1267606" y="40.2580645">4</tspan>
                    </text>
                </g>
                <g id="4" transform="translate(699.000000, 632.000000)">
                    <g id="Group" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9779874,30.0999126 C59.4553345,13.4880108 46.5568707,0.005917779 29.9998365,0 C13.4428022,0.005917779 0.544685266,13.4880108 0.0220323416,30.0999126 C-0.740617811,54.3373949 18.494189,61.6308835 26.9481954,77.1831548 C28.2654056,79.6056151 31.7342673,79.6056151 33.0514775,77.1831548 C41.505484,61.6308835 60.7402907,54.3373949 59.9779874,30.0999126" id="Fill-28" fill="#82BC4C"></path>
                        <path d="M30.3947368,52.6666667 C17.9682504,52.6666667 7.89473684,42.6631723 7.89473684,30.3234046 C7.89473684,17.9832924 17.9682504,7.97979798 30.3947368,7.97979798 C42.8212233,7.97979798 52.8947368,17.9832924 52.8947368,30.3234046 C52.8947368,42.6631723 42.8212233,52.6666667 30.3947368,52.6666667" id="Fill-29" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#82BC4C">
                        <tspan x="21.1267606" y="40.2580645">4</tspan>
                    </text>
                </g>
                <g id="4" transform="translate(614.000000, 651.000000)">
                    <g id="Group" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9779874,30.0999126 C59.4553345,13.4880108 46.5568707,0.005917779 29.9998365,0 C13.4428022,0.005917779 0.544685266,13.4880108 0.0220323416,30.0999126 C-0.740617811,54.3373949 18.494189,61.6308835 26.9481954,77.1831548 C28.2654056,79.6056151 31.7342673,79.6056151 33.0514775,77.1831548 C41.505484,61.6308835 60.7402907,54.3373949 59.9779874,30.0999126" id="Fill-28" fill="#82BC4C"></path>
                        <path d="M30.3947368,52.6666667 C17.9682504,52.6666667 7.89473684,42.6631723 7.89473684,30.3234046 C7.89473684,17.9832924 17.9682504,7.97979798 30.3947368,7.97979798 C42.8212233,7.97979798 52.8947368,17.9832924 52.8947368,30.3234046 C52.8947368,42.6631723 42.8212233,52.6666667 30.3947368,52.6666667" id="Fill-29" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#82BC4C">
                        <tspan x="21.1267606" y="40.2580645">4</tspan>
                    </text>
                </g>
                <g id="4" transform="translate(560.000000, 575.000000)">
                    <g id="Group" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9779874,30.0999126 C59.4553345,13.4880108 46.5568707,0.005917779 29.9998365,0 C13.4428022,0.005917779 0.544685266,13.4880108 0.0220323416,30.0999126 C-0.740617811,54.3373949 18.494189,61.6308835 26.9481954,77.1831548 C28.2654056,79.6056151 31.7342673,79.6056151 33.0514775,77.1831548 C41.505484,61.6308835 60.7402907,54.3373949 59.9779874,30.0999126" id="Fill-28" fill="#82BC4C"></path>
                        <path d="M30.3947368,52.6666667 C17.9682504,52.6666667 7.89473684,42.6631723 7.89473684,30.3234046 C7.89473684,17.9832924 17.9682504,7.97979798 30.3947368,7.97979798 C42.8212233,7.97979798 52.8947368,17.9832924 52.8947368,30.3234046 C52.8947368,42.6631723 42.8212233,52.6666667 30.3947368,52.6666667" id="Fill-29" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#82BC4C">
                        <tspan x="21.1267606" y="40.2580645">4</tspan>
                    </text>
                </g>
                <g id="4" transform="translate(583.000000, 466.000000)">
                    <g id="Group" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.9779874,30.0999126 C59.4553345,13.4880108 46.5568707,0.005917779 29.9998365,0 C13.4428022,0.005917779 0.544685266,13.4880108 0.0220323416,30.0999126 C-0.740617811,54.3373949 18.494189,61.6308835 26.9481954,77.1831548 C28.2654056,79.6056151 31.7342673,79.6056151 33.0514775,77.1831548 C41.505484,61.6308835 60.7402907,54.3373949 59.9779874,30.0999126" id="Fill-28" fill="#82BC4C"></path>
                        <path d="M30.3947368,52.6666667 C17.9682504,52.6666667 7.89473684,42.6631723 7.89473684,30.3234046 C7.89473684,17.9832924 17.9682504,7.97979798 30.3947368,7.97979798 C42.8212233,7.97979798 52.8947368,17.9832924 52.8947368,30.3234046 C52.8947368,42.6631723 42.8212233,52.6666667 30.3947368,52.6666667" id="Fill-29" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#82BC4C">
                        <tspan x="21.1267606" y="40.2580645">4</tspan>
                    </text>
                </g>
                <g id="5" transform="translate(552.000000, 246.000000)">
                    <g id="Group-2" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.81,30.11875 C59.29,13.5838421 46.4658621,0.164236842 30.0037931,0.158346491 C13.5417241,0.164236842 0.717586207,13.5838421 0.197586207,30.11875 C-0.560344828,54.2438947 18.5641379,61.5035789 26.9696552,76.9837675 C28.2793103,79.395 31.7282759,79.395 33.037931,76.9837675 C41.4434483,61.5035789 60.567931,54.2438947 59.81,30.11875" id="Fill-30" fill="#773882"></path>
                        <path d="M30.0037931,52.8333289 C17.6531034,52.8333289 7.64103448,42.7729561 7.64103448,30.3630263 C7.64103448,17.95275 17.6531034,7.89237719 30.0037931,7.89237719 C42.3544828,7.89237719 52.3665517,17.95275 52.3665517,30.3630263 C52.3665517,42.7729561 42.3544828,52.8333289 30.0037931,52.8333289" id="Fill-31" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#773882">
                        <tspan x="21.1267606" y="41.9569892">5</tspan>
                    </text>
                </g>
                <g id="5" transform="translate(585.000000, 334.000000)">
                    <g id="Group-2" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.81,30.11875 C59.29,13.5838421 46.4658621,0.164236842 30.0037931,0.158346491 C13.5417241,0.164236842 0.717586207,13.5838421 0.197586207,30.11875 C-0.560344828,54.2438947 18.5641379,61.5035789 26.9696552,76.9837675 C28.2793103,79.395 31.7282759,79.395 33.037931,76.9837675 C41.4434483,61.5035789 60.567931,54.2438947 59.81,30.11875" id="Fill-30" fill="#773882"></path>
                        <path d="M30.0037931,52.8333289 C17.6531034,52.8333289 7.64103448,42.7729561 7.64103448,30.3630263 C7.64103448,17.95275 17.6531034,7.89237719 30.0037931,7.89237719 C42.3544828,7.89237719 52.3665517,17.95275 52.3665517,30.3630263 C52.3665517,42.7729561 42.3544828,52.8333289 30.0037931,52.8333289" id="Fill-31" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#773882">
                        <tspan x="21.1267606" y="41.9569892">5</tspan>
                    </text>
                </g>
                <g id="5" transform="translate(587.000000, 153.000000)">
                    <g id="Group-2" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.81,30.11875 C59.29,13.5838421 46.4658621,0.164236842 30.0037931,0.158346491 C13.5417241,0.164236842 0.717586207,13.5838421 0.197586207,30.11875 C-0.560344828,54.2438947 18.5641379,61.5035789 26.9696552,76.9837675 C28.2793103,79.395 31.7282759,79.395 33.037931,76.9837675 C41.4434483,61.5035789 60.567931,54.2438947 59.81,30.11875" id="Fill-30" fill="#773882"></path>
                        <path d="M30.0037931,52.8333289 C17.6531034,52.8333289 7.64103448,42.7729561 7.64103448,30.3630263 C7.64103448,17.95275 17.6531034,7.89237719 30.0037931,7.89237719 C42.3544828,7.89237719 52.3665517,17.95275 52.3665517,30.3630263 C52.3665517,42.7729561 42.3544828,52.8333289 30.0037931,52.8333289" id="Fill-31" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#773882">
                        <tspan x="21.1267606" y="41.9569892">5</tspan>
                    </text>
                </g>
                <g id="5" transform="translate(594.000000, 41.000000)">
                    <g id="Group-2" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.81,30.11875 C59.29,13.5838421 46.4658621,0.164236842 30.0037931,0.158346491 C13.5417241,0.164236842 0.717586207,13.5838421 0.197586207,30.11875 C-0.560344828,54.2438947 18.5641379,61.5035789 26.9696552,76.9837675 C28.2793103,79.395 31.7282759,79.395 33.037931,76.9837675 C41.4434483,61.5035789 60.567931,54.2438947 59.81,30.11875" id="Fill-30" fill="#773882"></path>
                        <path d="M30.0037931,52.8333289 C17.6531034,52.8333289 7.64103448,42.7729561 7.64103448,30.3630263 C7.64103448,17.95275 17.6531034,7.89237719 30.0037931,7.89237719 C42.3544828,7.89237719 52.3665517,17.95275 52.3665517,30.3630263 C52.3665517,42.7729561 42.3544828,52.8333289 30.0037931,52.8333289" id="Fill-31" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#773882">
                        <tspan x="21.1267606" y="41.9569892">5</tspan>
                    </text>
                </g>
                <g id="5" transform="translate(706.000000, 22.000000)">
                    <g id="Group-2" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.81,30.11875 C59.29,13.5838421 46.4658621,0.164236842 30.0037931,0.158346491 C13.5417241,0.164236842 0.717586207,13.5838421 0.197586207,30.11875 C-0.560344828,54.2438947 18.5641379,61.5035789 26.9696552,76.9837675 C28.2793103,79.395 31.7282759,79.395 33.037931,76.9837675 C41.4434483,61.5035789 60.567931,54.2438947 59.81,30.11875" id="Fill-30" fill="#773882"></path>
                        <path d="M30.0037931,52.8333289 C17.6531034,52.8333289 7.64103448,42.7729561 7.64103448,30.3630263 C7.64103448,17.95275 17.6531034,7.89237719 30.0037931,7.89237719 C42.3544828,7.89237719 52.3665517,17.95275 52.3665517,30.3630263 C52.3665517,42.7729561 42.3544828,52.8333289 30.0037931,52.8333289" id="Fill-31" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#773882">
                        <tspan x="21.1267606" y="41.9569892">5</tspan>
                    </text>
                </g>
                       <a href="#">
                <g id="5" transform="translate(826.000000, 44.000000)">
                    <g id="Group-2" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.81,30.11875 C59.29,13.5838421 46.4658621,0.164236842 30.0037931,0.158346491 C13.5417241,0.164236842 0.717586207,13.5838421 0.197586207,30.11875 C-0.560344828,54.2438947 18.5641379,61.5035789 26.9696552,76.9837675 C28.2793103,79.395 31.7282759,79.395 33.037931,76.9837675 C41.4434483,61.5035789 60.567931,54.2438947 59.81,30.11875" id="Fill-30" fill="#773882"></path>
                        <path d="M30.0037931,52.8333289 C17.6531034,52.8333289 7.64103448,42.7729561 7.64103448,30.3630263 C7.64103448,17.95275 17.6531034,7.89237719 30.0037931,7.89237719 C42.3544828,7.89237719 52.3665517,17.95275 52.3665517,30.3630263 C52.3665517,42.7729561 42.3544828,52.8333289 30.0037931,52.8333289" id="Fill-31" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#773882">
                        <tspan x="21.1267606" y="41.9569892">5</tspan>
                    </text>
                </g>
                </a>
                       <a href="#">
                <g id="5" transform="translate(843.000000, 176.000000)">
                    <g id="Group-2" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.81,30.11875 C59.29,13.5838421 46.4658621,0.164236842 30.0037931,0.158346491 C13.5417241,0.164236842 0.717586207,13.5838421 0.197586207,30.11875 C-0.560344828,54.2438947 18.5641379,61.5035789 26.9696552,76.9837675 C28.2793103,79.395 31.7282759,79.395 33.037931,76.9837675 C41.4434483,61.5035789 60.567931,54.2438947 59.81,30.11875" id="Fill-30" fill="#773882"></path>
                        <path d="M30.0037931,52.8333289 C17.6531034,52.8333289 7.64103448,42.7729561 7.64103448,30.3630263 C7.64103448,17.95275 17.6531034,7.89237719 30.0037931,7.89237719 C42.3544828,7.89237719 52.3665517,17.95275 52.3665517,30.3630263 C52.3665517,42.7729561 42.3544828,52.8333289 30.0037931,52.8333289" id="Fill-31" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#773882">
                        <tspan x="21.1267606" y="41.9569892">5</tspan>
                    </text>
                </g>
                </a>
                       <a href="#">
                <g id="5" transform="translate(938.000000, 187.000000)">
                    <g id="Group-2" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.81,30.11875 C59.29,13.5838421 46.4658621,0.164236842 30.0037931,0.158346491 C13.5417241,0.164236842 0.717586207,13.5838421 0.197586207,30.11875 C-0.560344828,54.2438947 18.5641379,61.5035789 26.9696552,76.9837675 C28.2793103,79.395 31.7282759,79.395 33.037931,76.9837675 C41.4434483,61.5035789 60.567931,54.2438947 59.81,30.11875" id="Fill-30" fill="#773882"></path>
                        <path d="M30.0037931,52.8333289 C17.6531034,52.8333289 7.64103448,42.7729561 7.64103448,30.3630263 C7.64103448,17.95275 17.6531034,7.89237719 30.0037931,7.89237719 C42.3544828,7.89237719 52.3665517,17.95275 52.3665517,30.3630263 C52.3665517,42.7729561 42.3544828,52.8333289 30.0037931,52.8333289" id="Fill-31" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#773882">
                        <tspan x="21.1267606" y="41.9569892">5</tspan>
                    </text>
                </g>
                </a>
                       <a href="#">
                <g id="5" transform="translate(1047.000000, 213.000000)">
                    <g id="Group-2" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.81,30.11875 C59.29,13.5838421 46.4658621,0.164236842 30.0037931,0.158346491 C13.5417241,0.164236842 0.717586207,13.5838421 0.197586207,30.11875 C-0.560344828,54.2438947 18.5641379,61.5035789 26.9696552,76.9837675 C28.2793103,79.395 31.7282759,79.395 33.037931,76.9837675 C41.4434483,61.5035789 60.567931,54.2438947 59.81,30.11875" id="Fill-30" fill="#773882"></path>
                        <path d="M30.0037931,52.8333289 C17.6531034,52.8333289 7.64103448,42.7729561 7.64103448,30.3630263 C7.64103448,17.95275 17.6531034,7.89237719 30.0037931,7.89237719 C42.3544828,7.89237719 52.3665517,17.95275 52.3665517,30.3630263 C52.3665517,42.7729561 42.3544828,52.8333289 30.0037931,52.8333289" id="Fill-31" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#773882">
                        <tspan x="21.1267606" y="41.9569892">5</tspan>
                    </text>
                </g>
                </a>
                <a href="#">
                <g id="5" transform="translate(1128.000000, 191.000000)">
                    <g id="Group-2" stroke-width="1" fill-rule="evenodd">
                        <path d="M59.81,30.11875 C59.29,13.5838421 46.4658621,0.164236842 30.0037931,0.158346491 C13.5417241,0.164236842 0.717586207,13.5838421 0.197586207,30.11875 C-0.560344828,54.2438947 18.5641379,61.5035789 26.9696552,76.9837675 C28.2793103,79.395 31.7282759,79.395 33.037931,76.9837675 C41.4434483,61.5035789 60.567931,54.2438947 59.81,30.11875" id="Fill-30" fill="#773882"></path>
                        <path d="M30.0037931,52.8333289 C17.6531034,52.8333289 7.64103448,42.7729561 7.64103448,30.3630263 C7.64103448,17.95275 17.6531034,7.89237719 30.0037931,7.89237719 C42.3544828,7.89237719 52.3665517,17.95275 52.3665517,30.3630263 C52.3665517,42.7729561 42.3544828,52.8333289 30.0037931,52.8333289" id="Fill-31" fill="#FFFFFE"></path>
                    </g>
                    <text font-family="Helvetica-Bold, Helvetica" font-size="36" font-weight="bold" fill="#773882">
                        <tspan x="21.1267606" y="41.9569892">5</tspan>
                    </text>
                </g>
                </a>
                <path d="" id="Path-2" stroke="#979797"></path>
            </g>
        </g>
    </g>
</svg>






</div>
<!-- /tab-pane -->
</div>
<!-- /tab-content -->
</section>
</div>
<!-- /container -->
</div>
<!-- /layout -->






                              <?=createFooter($patterns['footer']);?>
                              <?=createPrototypeNav();?>
                              <?=createSiteScripts();?>
                              <script src="/scripts/prototype.portfolio.js"></script>
                              <script src="/scripts/prototype.portfolio.wizard.helper.js"></script>
                              <script type="text/javascript" src="/scripts/subway.js"></script>
                                <script src="/scripts/classie.js"></script>
    <script src="/scripts/list.min.js"></script>
    <script src="/scripts/main.js"></script>
                              <script type="text/javascript">
                                $(".subway-map").subwayMap({ debug: true });

                                var canvas = document.getElementById("canvas"),
                                context = canvas.getContext('2d');


// var stars = [], // Array that contains the stars

// x = 10, // Number of stars


// Push stars to array

// for (var i = 0; i < x; i++) {
//   stars.push({
//     x: Math.random() * canvas.width,
//     y: Math.random() * canvas.height,
//     radius: Math.random() * 1 + 1,
//     vx: Math.floor(Math.random() * 50) - 25,
//     vy: Math.floor(Math.random() * 50) - 25
//   });
// }

// Draw the scene

// function draw() {
// // ctx.clearRect(0,0,canvas.width,canvas.height);

// // ctx.globalCompositeOperation = "lighter";

// for (var i = 0, x = stars.length; i < x; i++) {
//   var s = stars[i];


//   ctx.fillStyle = color;
//   ctx.beginPath();
//   ctx.arc(s.x, s.y, 10, 0, 2 * Math.PI);
//   ctx.fill();

// }

// ctx.beginPath();
// for (var i = 0, x = stars.length; i < x; i++) {
//   var starI = stars[i];
// // ctx.moveTo(starI.x,starI.y);
// }
// for (var j = 0, x = stars.length; j < x; j++) {
//   var starII = stars[j];

//   ctx.lineTo(starII.x,starII.y);

// }

// ctx.lineWidth = .2;
// ctx.strokeStyle = color;
// ctx.stroke();
// }

function draw2(){
  var startingX = 77, startingY = 127, firstX = 225, firstY = 121, secondX = 279, secondY = 160, endingX = 212, endingY = 293, radius = 20;

  context.moveTo( startingX, startingY );
  context.bezierCurveTo( firstX, firstY, secondX, secondY, endingX, endingY );
   context.arc(secondX.x, secondY.y, radius, 0, 2 * Math.PI, false);
      context.fillStyle = 'green';
      context.fill();

  context.moveTo( startingX + 230, startingY + 357 )
  context.bezierCurveTo( firstX + 208, firstY + 172, secondX - 154, secondY + 270, endingX, endingY );

  context.moveTo( startingX + 230, startingY + 357 )
  context.bezierCurveTo( firstX - 21, firstY + 465, secondX + 150, secondY + 447, endingX + 299, endingY + 172 );

  context.moveTo( startingX + 446, startingY + 101 )
  context.bezierCurveTo( firstX + 122, firstY + 199, secondX + 319, secondY + 180, endingX + 299, endingY + 172 );

  context.moveTo( startingX + 446, startingY + 101 )
  context.bezierCurveTo( firstX + 363, firstY + 68, secondX + 297, secondY + 184, endingX + 498, endingY - 115 );

  context.moveTo( startingX + 683, startingY + 124 )
  context.bezierCurveTo( firstX + 650, firstY + 24, secondX + 491, secondY - 60, endingX + 498, endingY - 115 );

  context.moveTo( startingX + 683, startingY + 124 )
  context.bezierCurveTo( firstX + 412, firstY + 236, secondX + 627, secondY + 162, endingX + 630, endingY + 173 );

  context.lineWidth = 7;
  context.strokeStyle = "#09c";
  context.stroke();






}

function draw3(){
   var startingX2 = 54, startingY2 = 232, firstX2 = 146, firstY2 = 161, secondX2= 281, secondY2 = 175, endingX2 = 219, endingY2 = 342;

context.moveTo( startingX2, startingY2 );
context.bezierCurveTo( firstX2, firstY2, secondX2, secondY2, endingX2, endingY2 );

context.moveTo( startingX2 + 287, startingY2 + 159 )
context.bezierCurveTo( firstX2 + 119, firstY2 + 339, secondX2 - 86, secondY2 + 213, endingX2, endingY2 );

context.moveTo( startingX2 + 287, startingY2 + 159 )
context.bezierCurveTo( firstX2 + 221, firstY2 + 186, secondX2 + 221, secondY2 + 223, endingX2 + 306, endingY2 - 41 );

context.moveTo( startingX2 + 601, startingY2 + 142 )
context.bezierCurveTo( firstX2 + 479, firstY2 + 16, secondX2 + 259, secondY2 + 68, endingX2 + 306, endingY2 - 41 );

context.moveTo( startingX2 + 601, startingY2 + 142 )
context.bezierCurveTo( firstX2 + 518, firstY2 + 265, secondX2 + 296, secondY2 + 418, endingX2 + 605, endingY2 + 147 );


context.strokeStyle = "#06D6A0";
context.stroke();
}

// function distance( point1, point2 ){
//   var xs = 0;
//   var ys = 0;

//   xs = point2.x - point1.x;
//   xs = xs * xs;

//   ys = point2.y - point1.y;
//   ys = ys * ys;

//   return Math.sqrt( xs + ys );
// }

// Update star locations

// function update() {
//   for (var i = 0, x = stars.length; i < x; i++) {
//     var s = stars[i];

//     s.x += s.vx / FPS;
//     s.y += s.vy / FPS;

//     if (s.x < 0 || s.x > canvas.width) s.vx = -s.vx;
//     if (s.y < 0 || s.y > canvas.height) s.vy = -s.vy;
//   }
// }



// Update and draw

function tick() {
  draw2();




}

// tick();



  $(document).ready(function(){
    $(".js-overall-progress").addClass('progressWidth');
  });






//end card rotate
</script>




<?=createSiteEnd();?>