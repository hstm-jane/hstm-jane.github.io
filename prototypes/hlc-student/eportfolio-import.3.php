<?php

include "includes/helpers/helpers.php";
include "includes/data/org-names.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'ePortfolio';
$patterns['header']['mainNavActive'] = 'profile';
$patterns['header']['logoLarge'] = '/content/images/logo_ePortfolio.svg';
$patterns['header']['logoSmall'] = '/content/images/ePortfolio_Logo.png';
$patterns['header']['accountNav'] = '<li><a href="/healthstream-id-manage-eportfolio.php">Account Settings</a></li>
<li class="hide-header-open"><a href="/healthstream-id-manage-eportfolio.php?view=password">Manage  Password</a></li>

<li class="hide-header-open logout"><a href="#">Logout</a></li>';



$patterns['header']['mainNav'] =    ' <li class="{active=profile}"><a href="/eportfolio.2.php">Profile</a></li>' .' <li class=""><a href="/completed.2.php">Transcript</a></li>' . ' <li class=""><a href="#">Help</a></li>' ;
$patterns['focus']['title'] = 'Profile';
$patterns['header']['alerts'] = '';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<?php

$importAction ='<div class="action"><a class="btn btn-sm btn-default js-import " href="#"> Import</a><i class="fa loading-status fa-spinner fa-pulse fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span></div>';


?>

<link rel="stylesheet" href="/content/styles/animate.css">

<style>
.modal .slat-group{
    position: relative;
    padding: 0;
    }

.modal .slat-group-content{
    border: none;
    margin-bottom:40px;

    }

.slat-group-header {
    margin-bottom: 20px;
    }

.modal .slat-group .slat {
    margin-top: 25px;
    }

.modal .slat-group .slat:not(:last-child)
    {
        margin-bottom: 35px;
    }

.flag
    {

    padding: 3px 7px;
    margin-left: -20px;
    margin-top: 0;
    position: absolute;
    top: -25px;
    left: -7px;
    width: auto;
    text-transform: uppercase;
    color: #fff;
    font-weight: normal;
    background: #1797BE;
    text-shadow: 1px 1px 0 #007aa3;
    font-size:12px;


    }

.arrowLeft
    {
     width: 0; height: 0;
     line-height: 0;
     border-left: 14px solid transparent;
     border-top: 7px solid #045E7A;
     top: 100%;
     left: 0;
     position: absolute;
    }



@media screen and (max-width: 768px) {

  .arrowRight, .arrowLeft {
    top: 100%;
  }

}
.importing{
    opacity: .5;
}
.loading-status{
    display:none;
}
.importing .loading-status{
    display:block;
}

.metric-box-header{
    transform: scale(1.15);
    font-size: 12px;
    color: #aaa;
    text-align: center;
    margin-bottom: 15px;
}
.metric-box-header .highlight-text {
    color: #777;
    font-weight: 600;
}
.list-links .org-unchecked{
    border-left-color: #ccc;
}
.exclude{
    opacity: .5;
}
.import-section{
    -webkit-box-shadow: 0 0 3px rgba(0,0,0,.6);
    box-shadow: 0 0 3px rgba(0,0,0,.6);
}
.org-list li:hover{
    cursor: pointer;
}
.new-count{
    display: inline-block;
    position: relative;
    padding: 2px 5px;
    color: #fff;
    border-radius: 3px;
    background-color: #5cb85c;
    border: 1px solid #5cb85c;
    font-size: 11px;
    font-weight: normal;
    max-width: 90%;
    white-space: nowrap;
    word-wrap: normal;
    overflow: hidden;
    text-overflow: ellipsis;
    text-align: center;
}

.svg-wrapper{
    transition: all .2s ease-in-out;
}

.new-count{
    font-size: .9em;
    font-style: italic;
    white-space: nowrap
}

.slat-import-record{
    display:none;
    transition: all .2s ease;
    /*opacity: .8;*/
}
.org-unchecked{
    color: #333;
}
.import-message.alert{
    padding:7px;
    margin-bottom: 0;
}

.import-message{
    font-size:14px;
    display:inline-block;

}
.focus{
    background-color: #487AA3;
    border-top: 5px solid #3a6282;
    color: #fff;
}

.focus-pageheader .fph-separator {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 5px;
    border-top: 1px solid #799ebc;
    background-image: -webkit-linear-gradient(top,#638eb1 0,#769bba 100%);
    background-image: linear-gradient(to bottom,#638eb1 0,#769bba 100%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff638eb1', endColorstr='#ff769bba', GradientType=0);
}

.site-header {
    background: #fff;
    border-top: 3px solid #487AA3;
    position: relative;
    z-index: 400;
}

nav.nav-focus {
    margin-bottom: 0;
}

nav.nav-focus .nav li.active i, nav.nav-focus .nav li:hover.active i {
    display: block;
    color: #769bba;
}

.modal-wizard-body {
    padding: 0;
}

@-webkit-keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@-webkit-keyframes fadeOut {
    from { opacity: 1; }
    to { opacity: 0; }
}

@keyframes fadeOut {
    from { opacity: 1; }
    to { opacity: 0; }
}

.work-experience-save-experience,
.education-save-experience,
.licenses-save-experience,
.certifications-save-experience,
.resucitation-programs-save-experience,
.activities-save-experience,
.committee-work-save-experience,
.memberships-save-experience,
.publications-save-experience,
.committee-work-membership-experience,
.awards-save-experience,
.other-save-experience,
.memberships-committee-work-experience,
.teaching-save-experience
{
    display: none;
    -webkit-animation: fadeOut 1s;
    animation: fadeOut 1s;
}

.show {
    display: block;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

label.radio-inline {
    display: inline-block;
}

.modal-footer.alt, .irb-options  {
    display: none;
}




/*Hack for eportfolio*/


.site-footer .links{
    display:none;
}
/*.col-md-3 .section-sidebar .section-box:last-of-type {
display:none;
}
*/
/*.institution{
display:none;
}*/
</style>

<div class="layout ">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-box section-main " >
                    <?php

                    $focusNav = array(
                        'tabs' => array(
                            array(
                                'id' => 'tab-1',
                                'label' => 'Personal',
                            ),
                            array(
                                'active' => true,
                                'id' => 'tab-2',
                                'label' => 'Professional',
                            ),
// array(
//     'id' => 'tab-3',
//     'label' => 'Transcript',
// ),
// array(
//     'id' => 'tab-4',
//     'label' => 'Goals',
// ),
// array(
//     'id' => 'tab-5',
//     'label' => 'Notes',
// ),
// array(
//     'id' => 'tab-6',
//     'label' => 'Documents',
// ),
                            array(
                                'id' => 'tab-3',
                                'label' => 'Documents',
                            ),
                        ),
                    );
                    echo createFocusNav($focusNav);
                    ?>

                    <div class="tab-content">

                        <div class="tab-pane fade" id="tab-1">


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
                                            'html' => '
                                            <button type="submit" class="btn btn-success">Save</button>
                                            <button type="button" class="btn btn-default">Cancel</button>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                                ?>

                                <div class="form-modified">Updated: Sep 20, 2013 at 3:27pm by sjuniper</div>

                            </form>
                        </div>
                        <div class="tab-pane fade in active" id="tab-2">

                            <section class="section work-experience-container">





                                <div class="slat-group">
                                    <div class="slat-group-header ">
                                        <div class="slat-group-header-title">
                                            <h2>Work Experience <!-- <a class="animated bounce alert alert-warning import-message"><i class=" fa fa-cloud-download"></i> Records available for import</a> --></h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a class="btn btn-default btn-sm" href="#modal-work-experience" data-toggle="modal">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#modal-work-experience" data-toggle="modal">Add Item</a></li>
                                                        <li><a href="#" class="import-section-link">Import Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <!-- <li><a href="#">Move Section Up</a></li> -->
                                                        <li><a href="#">Move Section Down</a></li>
                                                        <li><a href="#" class="hide-section" data-section="work-experience">Hide Section</a></li>
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
                                        <?php

                                            $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat', 'slat-callout', 'org-1', 'slat-import-record')),
                                            ),
                                            'title' => 'Registered Nurse',
                                            'meta' => array(
                                                array(
                                                    'label' => 'Speciality:',
                                                    'value' => 'Pediatrics',
                                                ),
                                                array(

                                                    'value' => '<span class="meta-callout-label">Dates:</span>May 2008 - Jun 2010',
                                                    'attributes' => array(
                                                        array('class','meta-callout'),
                                                    )
                                                ),


                                            ),
                                            'action' => array(
                                                'type' => 'custom',
                                                'content' => $importAction,
                                            )

                                        );
                                        echo createSlat($slat);


                                            $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat', 'slat-callout', 'org-1', 'slat-import-record')),
                                            ),
                                            'title' => 'Certified Nursing Assisant',
                                            'meta' => array(
                                                array(
                                                    'label' => 'Speciality:',
                                                    'value' => 'Pediatrics',
                                                ),
                                                array(

                                                    'value' => '<span class="meta-callout-label">Dates:</span>May 2008 - Jun 2010',
                                                    'attributes' => array(
                                                        array('class','meta-callout'),
                                                    )
                                                ),


                                            ),
                                            'action' => array(
                                                'type' => 'custom',
                                                'content' => $importAction,
                                            )

                                        );
                                        echo createSlat($slat);

                                            $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat', 'slat-callout', 'org-3', 'slat-import-record')),
                                            ),
                                            'title' => 'Registered Nurse',
                                            'meta' => array(
                                                array(
                                                    'label' => 'Speciality:',
                                                    'value' => 'Pediatrics',
                                                ),
                                                array(
                                                    'label' => 'Setting:',
                                                    'value' => 'Ambulatory Care',
                                                ),
                                                array(

                                                    'value' => '<span class="meta-callout-label">Dates:</span>May 2008 - Jun 2010',
                                                    'attributes' => array(
                                                        array('class','meta-callout'),
                                                    )
                                                ),
                                            ),
                                             'action' => array(
                                                'type' => 'custom',
                                                'content' => $importAction,
                                            )

                                        );
                                        echo createSlat($slat);

                                            $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat', 'slat-callout', 'org-2', 'slat-import-record')),
                                            ),
                                            'title' => 'Registered Nurse',
                                            'meta' => array(
                                                array(
                                                    'label' => 'Speciality:',
                                                    'value' => 'Pediatrics',
                                                ),
                                                array(

                                                    'value' => '<span class="meta-callout-label">Dates:</span>May 2008 - Jun 2010',
                                                    'attributes' => array(
                                                        array('class','meta-callout'),
                                                    )
                                                ),
                                            ),
                                            'action' => array(
                                                'type' => 'custom',
                                                'content' => $importAction,
                                            )

                                        );

                                        echo createSlat($slat);
                                        ?>


                                        <?php

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat', 'slat-callout','org-2', 'slat-import-record')),
                                            ),
                                            'title' => 'Community Health Worker',
                                            'meta' => array(
                                                array(
                                                    'label' => 'Setting:',
                                                    'value' => 'Ambulatory Care',
                                                ),
                                                array(

                                                    'value' => '<span class="meta-callout-label">Dates:</span>May 2008 - Jun 2010',
                                                    'attributes' => array(
                                                        array('class','meta-callout'),
                                                    )
                                                ),
                                            ),
                                           'action' => array(
                                                'type' => 'custom',
                                                'content' => $importAction,
                                            )

                                        );
                                        echo createSlat($slat);
                                        ?>

                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </section>

                            <section class="section education-container">
                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Education <!-- <a class="animated bounce alert alert-warning import-message"><i class=" fa fa-cloud-download"></i> Records available for import</a> --></h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#modal-education" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#modal-education" data-toggle="modal" >Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#">Move Section Up</a></li>
                                                        <li><a href="#">Move Section Down</a></li>
                                                        <li><a href="#" class="hide-section" data-section="education">Hide Section</a></li>
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

                                        <?php

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat', 'slat-callout', 'org-2', 'slat-import-record')),
                                            ),
                                            'title' => 'Vanderbilt',

                                            'meta' => array(
                                                array(
                                                    'label' => 'Degree:',
                                                    'value' => 'Bachelors',
                                                ),
                                                array(
                                                    'label' => 'Field of Study:',
                                                    'value' => 'Nursing',
                                                ),

                                                array(

                                                    'value' => '<span class="meta-callout-label">Dates:</span>Aug  2004 - May 2008',
                                                    'attributes' => array(
                                                        array('class','meta-callout'),
                                                    )
                                                ),


                                            ),
                                            'action' => array(
                                                'type' => 'custom',
                                                'content' => $importAction,
                                            )

                                        );
                                        echo createSlat($slat);
                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat', 'slat-callout', 'org-3', 'slat-import-record')),
                                            ),
                                            'title' => 'Vanderbilt',

                                            'meta' => array(
                                                array(
                                                    'label' => 'Degree:',
                                                    'value' => 'Bachelors',
                                                ),
                                                array(
                                                    'label' => 'Field of Study:',
                                                    'value' => 'Nursing',
                                                ),

                                                array(

                                                    'value' => '<span class="meta-callout-label">Dates:</span>Aug  2004 - May 2008',
                                                    'attributes' => array(
                                                        array('class','meta-callout'),
                                                    )
                                                ),


                                            ),
                                           'action' => array(
                                                'type' => 'custom',
                                                'content' => $importAction,
                                            )

                                        );
                                        echo createSlat($slat);
                                        ?>


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

                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message slat-message-sm">
                                                <h3>This section is not yet available. Check back soon!</h3>
                                                <a href="#" class="btn btn-default btn-sm hide-section" data-section="licenses">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer">
                                        <div class="timestamp">Last Update: <?= date('M d, Y'); ?></div>
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
                                                        <li><a href="#modal-certifications" data-toggle="modal">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#">Move Section Up</a></li>
                                                        <li><a href="#">Move Section Down</a></li>
                                                        <li><a href="#" class="hide-section" data-section="certifications">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slat-group-content">
                                                  <div class="slat">
                                            <div class="slat-message slat-message-sm">
                                                <h3>This section is not yet available. Check back soon!</h3>
                                                <a href="#" class="btn btn-default btn-sm hide-section" data-section="licenses">Hide Section</a>
                                            </div>
                                        </div>

                                        <?php


                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat', 'slat-import-record', 'org-2')),
                                            ),
                                            'title' => '<a href="#">ABLS-Provider - Advanced Burn Life Support - Provider</a>',
                                            'meta' => array(
                                                array(
                                                    'label' => 'Country:',
                                                    'value' => 'United States',
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

                                        );
                                        echo createSlat($slat);
                                        ?>



                                    </div>
                                    <div class="slat-group-footer">
                                        <div class="timestamp">Last Update: <?= date('M d, Y'); ?></div>
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
                                                        <li><a href="#modal-resucitation-programs" data-toggle="modal">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#">Move Section Up</a></li>
                                                        <li><a href="#">Move Section Down</a></li>
                                                        <li><a href="#" class="hide-section" data-section="resucitation-programs">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message slat-message-sm">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#modal-resucitation-programs" data-toggle="modal" class="btn btn-default btn-sm">Add Resucitation Programs</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="resucitation-programs">Hide Section</a>
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
                                                        <li><a href="#modal-activities" data-toggle="modal">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#">Move Section Up</a></li>
                                                        <li><a href="#">Move Section Down</a></li>
                                                        <li><a href="#" class="hide-section" data-section="activities">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message slat-message-sm">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#modal-activities" data-toggle="modal" class="btn btn-default btn-sm">Add Volunteer Service</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="activities">Hide Section</a>
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
                                            <div class="btn-group">
                                                <a href="#modal-committee-work" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#modal-committee-work" data-toggle="modal">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#">Move Section Up</a></li>
                                                        <li><a href="#">Move Section Down</a></li>
                                                        <li><a href="#" class="hide-section" data-section="committee-work">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message slat-message-sm">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#modal-committee-work" data-toggle="modal" class="btn btn-default btn-sm">Add Committee Work</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="committee-work">Hide Section</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-footer"></div>
                                </div>
                            </section>

                            <section class="section memberships-container">
                                <div class="slat-group">
                                    <div class="slat-group-header">
                                        <div class="slat-group-header-title">
                                            <h2>Memberships &amp; Associstions</h2>
                                        </div>
                                        <div class="slat-group-header-actions">
                                            <div class="btn-group">
                                                <a href="#modal-memberships" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#modal-memberships" data-toggle="modal">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#">Move Section Up</a></li>
                                                        <li><a href="#">Move Section Down</a></li>
                                                        <li><a href="#" class="hide-section" data-section="memberships">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message slat-message-sm">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#modal-memberships" data-toggle="modal" class="btn btn-default btn-sm">Add Memberships &amp; Associations</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="memberships">Hide Section</a>
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
                                            <div class="btn-group">
                                                <a href="#modal-teaching" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#modal-teaching" data-toggle="modal">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#">Move Section Up</a></li>
                                                        <li><a href="#">Move Section Down</a></li>
                                                        <li><a href="#" class="hide-section" data-section="teaching">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message slat-message-sm">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#modal-teaching" data-toggle="modal" class="btn btn-default btn-sm">Add Teaching &amp; Preceptorship</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="teaching">Hide Section</a>
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
                                                        <li><a href="#modal-publications" data-toggle="modal">Add Item</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li><a href="#">Move Section Up</a></li>
                                                        <li><a href="#">Move Section Down</a></li>
                                                        <li><a href="#" class="hide-section" data-section="publications">Hide Section</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message slat-message-sm">
                                                <h3>This section is empty, add your first item.</h3>
                                                <a href="#modal-publications" data-toggle="modal" class="btn btn-default btn-sm">Add Publications &amp; Research</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="publications">Hide Section</a>
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

                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message slat-message-sm">
                                                <h3>This section is not yet available. Check back soon!</h3>
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

                                    </div>
                                    <div class="slat-group-content">
                                        <div class="slat">
                                            <div class="slat-message slat-message-sm">
                                                <h3>This section is not yet available. Check back soon!</h3>
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
                                            <a href="#modal-sections" data-toggle="modal" class="btn btn-default">Manage Sections</a>
                                            <a href="portfolio-print.php" class="btn btn-default" target="_blank">Print</a>
                                            <a href="#modal-import-records" class="btn btn-default " data-toggle="modal">View Records to Copy</a>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>
                        </div>
                        <div class="tab-pane fade" id="tab-3">
                        </div>

                    </div>
                </section>
            </div>
            <div class="col-md-3">
                <section class="section section-sidebar">
                    <section class="section section-box">
                        <h3>ePortfolio Support</h3>
                        <ul class="list-links">
                            <li><a href="http://www.healthstream.com/eportfolio/support/" target="_blank">ePortfolio FAQs and Help</a></li>
                            <li><a href="#modal-portable-portfolio-about"></a></li><li><a href="#" >Manage Login and Password</a></li>


                        </ul>
                    </section>
                    <section class="section section-box-import section-box">
                        <div class="metric-box-header">
                                                        <span class="highlight-text">Records</span> Available for
                                                     <span class="highlight-text">Import</span>
                                                    </div>

                        <div class="svg-wrapper text-center">
                            <svg class="animated pulse" width="237px" height="163px" viewBox="0 0 237 163" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <!-- Generator: Sketch 47 (45396) - http://www.bohemiancoding.com/sketch -->
                                <desc>Created with Sketch.</desc>
                                <defs></defs>
                                <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Section-Box-/-New-Records-" transform="translate(-12.000000, -41.000000)">
                                        <g id="Group-2">
                                            <path d="M211.241884,97.9354344 C208.63439,76.1722093 189.017842,59.686532 165.611329,59.5876777 C160.67424,59.5867365 155.770113,60.3400457 151.092516,61.817872 C134.021168,42.9698461 106.189591,36.0964761 81.3998413,44.6063594 C56.6100915,53.1162427 40.1341984,75.1995846 40.1427805,99.9049566 C40.1427805,100.600082 40.1427805,101.324171 40.1427805,102.019297 C17.7281079,114.840653 7.11942069,140.014886 14.1505541,163.698404 C21.1816875,187.381922 44.1474385,203.830956 70.4186848,204 L189.726798,204 C217.856403,203.884273 241.960857,185.149964 247.240934,159.299233 C252.521011,133.448501 237.498505,107.718496 211.396669,97.9064708 L211.241884,97.9354344 Z M189.572014,192.443539 L70.4805988,192.443539 C49.1765172,192.251121 30.7455374,178.519454 25.7748937,159.136364 C20.80425,139.753275 30.5693329,119.692164 49.4608247,110.476657 C51.7536775,109.383468 53.0847246,107.077287 52.8041761,104.683944 C52.6184344,103.090948 52.5565204,101.468989 52.5565204,99.875993 C52.5280559,79.3480065 66.655812,61.146438 87.5285546,54.8195898 C108.401297,48.4927417 131.253114,55.485235 144.096243,72.1289002 C145.831183,74.3561715 149.003138,75.1314087 151.680698,73.9825682 C156.045761,72.0860126 160.798565,71.097844 165.611329,71.086212 C183.996562,71.1640373 198.918223,85.0217284 199.137714,102.222042 C199.166018,104.740527 200.930431,106.9533 203.502644,107.696155 C225.143488,114.24966 238.524767,134.505174 235.113394,155.545994 C231.702021,176.586813 212.502336,192.218327 189.757755,192.472502 L189.572014,192.443539 Z" id="Shape" fill="#6FD071" fill-rule="nonzero"></path>
                                            <g id="Green-Arrow" transform="translate(100.000000, 127.000000)" stroke="#6FD070" stroke-width="9" stroke-linecap="round">
                                                <path d="M28.5,0 L28.5,50.6" id="Line"></path>
                                                <path d="M27.4776875,29.4458416 L55.5,55.6" id="Line-Copy-2" transform="translate(42.000000, 43.000000) scale(-1, 1) translate(-42.000000, -43.000000) "></path>
                                                <path d="M0.477687462,29.4458416 L28.5,55.6" id="Line-Copy-2"></path>
                                            </g>
                                        </g>
                                        <g id="Group" transform="translate(96.000000, 78.000000)" font-family="HelveticaNeue, Helvetica Neue" fill="#000000" font-weight="normal">
                                            <text id="4" font-size="36">
                                                <tspan x="0.992" y="34">8</tspan>
                                            </text>
                                            <text id="New" font-size="18">
                                                <tspan x="22.347" y="22">New</tspan>
                                            </text>
                                            <text id="Records" font-size="11">
                                                <tspan x="22.3255" y="34">Records</tspan>
                                            </text>
                                        </g>
                                    </g>
                                </g>
                            </svg>


                        </div>
                        <a href="#modal-import-records" class="btn btn btn-default btn-sm btn-block" data-toggle="modal"> View Records to Copy </a>

                        <div class="hidden org-list animated pulse">
                            <h4 style="font-weight: 600">Select Records to Review</h4>

                            <ul class="list-links js-org-list">

                                <li class="org-unchecked org-1">

                                    <div class="form-group">
                                        <label class="checkbox"><input type="checkbox" id="ce-awarded-checkbox">
                                            <?php
                                            $randomKey = array_rand($org_names);
                                            $randomOrg = $org_names[$randomKey]. ' <span class="new-count"> (1 new) </span>';

                                            echo $randomOrg;
                                            ?>
                                        </label>
                                    </div>
                                </li>
                                <li class="org-unchecked org-2">

                                    <div class="form-group">
                                        <label class="checkbox"><input type="checkbox" id="ce-awarded-checkbox">
                                            <?php
                                            $randomKey = array_rand($org_names);
                                            $randomOrg = $org_names[$randomKey]  ;

                                            echo $randomOrg;
                                            ?>
                                        </label>
                                    </div>
                                </li>
                                <li class="org-unchecked org-3">

                                    <div class="form-group">
                                        <label class="checkbox"><input type="checkbox" id="ce-awarded-checkbox">
                                            <?php
                                            $randomKey = array_rand($org_names);
                                            $randomOrg = $org_names[$randomKey] . ' <span class="new-count ">(3 new)</span>';

                                            echo $randomOrg;
                                            ?>
                                        </label>
                                    </div>
                                </li>
                                <li class="org-unchecked org-4">

                                    <div class="form-group">
                                        <label class="checkbox"><input type="checkbox" id="ce-awarded-checkbox">
                                            <?php
                                            $randomKey = array_rand($org_names);
                                            $randomOrg = $org_names[$randomKey];

                                            echo $randomOrg;
                                            ?>
                                        </label>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </section>


                </section>
            </div>



        </div><!-- col -->
    </div><!-- row -->
</div> <!-- /tab-pane -->

<!-- Modal -->
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
                        array('class',array('slat','slat-modal','slat-toggle')),
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
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
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
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
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
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
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
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
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
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
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
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
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
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
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
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
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
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
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
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
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
                    )
                );
                echo createSlat($slat);

                $slat = array(
                    'attributes' => array(
                        array('class',array('slat','slat-modal','slat-toggle')),
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
                    )
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
                                    <option value="custom">Choose a Custom Range</option>
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
                                    <option value="custom">Choose a Custom Range</option>
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
                                    <option value="custom">Choose a Custom Range</option>
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
                <a class="btn btn-default" href="#" onClick ="window.closeModal();">Finished</a>
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
                                <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                                <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
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
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
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
                        <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                        <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
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
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
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
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
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
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <div class="field-shim">
                                <label><input type="checkbox" name="vehicle" value="Current" checked> Notify me upon expiration</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <ul class="control-attachments control-attachments">
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
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
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <div class="field-shim">
                                <label><input type="checkbox" name="vehicle" value="Current" checked> Notify me upon expiration</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <ul class="control-attachments control-attachments">
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
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
                        <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                        <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea rows="4" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Attachment</label>
                        <ul class="control-attachments control-attachments">
                            <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                        </ul>
                        <div class="control-add-new">
                            <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
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
                    <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                    <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
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
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
            <div class="modal-footer alt">
                <a href="#" class="btn btn-success close-committee-work">Save</a> <a class="btn btn-success refresh-committee-work" href="#">Save and Add Another</a>  <a href="#" class="btn btn-default close-committee-work">Cancel</a>
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
                    <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                    <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
                </div>
                <div class="form-group new-work-committees-group">
                    <label class="control-label">Committee Work</label>
                    <div class="control-add-new">
                        <a href="#" class="add-committee-work">New Committee Work</a>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
            <div class="modal-footer alt">
                <a href="#" class="btn btn-success close-memberships">Save</a> <!--<a class="btn btn-success refresh-memberships" href="#">Save and Add Another</a>-->  <a href="#" class="btn btn-default close-memberships">Cancel</a>
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
                    <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                    <label class="radio-inline"><input type="radio" name="optradio" checked>No</label>
                </div>
                <div class="form-group">
                    <label class="control-label">Link</label>
                    <input type="text" class="form-control">
                </div>

            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
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
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
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
                        <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
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
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
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
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
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
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-modified">
                        <p>This license is not available in your portable portfolio, it is restricted to your organization.</p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
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
                            <label class="control-label">Expiration Date  <small>Optional</small></label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="Aug 27, 2015">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <div class="field-shim">
                                <label><input type="checkbox" name="vehicle" value="Current" checked> Notify me upon expiration</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Attachment</label>
                    <ul class="control-attachments control-attachments">
                        <li><button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
                    </ul>
                    <div class="control-add-new">
                        <a href="#">Attach Documents</a> | <a href="#">New Document</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
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
                <h4 class="modal-title">About ePortfolio</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h3>What is my ePortfolio?</h3>

                    <p>Your HealthStream ePortfolio provides you with a central location to track and maintain all records associated with your career. Your ePortfolio will travel with you, eliminating the need for duplicate documentation. As you join a company, it can be shared with your employer which highlights your accomplishments such as certifications you've already earned.</p>
                </section>

                <section class="section" id="data-message">
                    <h3>Why is my data not displayed?</h3>

                    <p>Once you've linked your ePortfolio to an account, most of the records you create are shared. However, if the record was imported or created by an administrator, then the record may not be shared.</p>
                </section>

            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div id="modal-import-records" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Records Available for Import</h4>
            </div>
            <div class="modal-body">
                <section class="section">


                    <div class="slat-group">
                        <div class="slat-group-header ">
                            <div class="slat-group-header-title">
                                <h2><a href="#" class="group-header-link">Carter Valley Medical <i class="fa fa-caret-right"></i></a></h2>
                            </div>

                        </div>
                        <div class="slat-group-content collapse">
                            <div class="slat slat-callout slat-modal slat-import-record" style="display: block;">
                                <div class="slat-default">
                                    <div class="title">Registered Nurse
                                        <div class="flag">Work Experience <span class="arrowLeft"></span>
                                        </div>
                                    </div>
                                    <ul class="meta">
                                        <li><span class="meta-label">Speciality:</span><span class="meta-value">Pediatrics</span></li>
                                        <li class="meta-callout"><span class="meta-value"><span class="meta-callout-label">Dates:</span>May 2008 - Jun 2010</span></li>
                                    </ul>
                                    <div class="action"><a class="btn btn-sm btn-default js-import " href="#"> Add <i class="fa fa-fw fa-plus visible-xs"></i></a><i class="fa loading-status fa-spinner fa-pulse fa-3x fa-fw"></i>
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                            </div>
                             <div class="slat slat-callout slat-modal slat-import-record" style="display: block;">
                                <div class="slat-default">
                                    <div class="title">Registered Nurse
                                        <div class="flag">Education <span class="arrowLeft"></span>
                                        </div>
                                    </div>
                                    <ul class="meta">
                                        <li><span class="meta-label">Speciality:</span><span class="meta-value">Pediatrics</span></li>
                                        <li class="meta-callout"><span class="meta-value"><span class="meta-callout-label">Dates:</span>May 2008 - Jun 2010</span></li>
                                    </ul>
                                    <div class="action"><a class="btn btn-sm btn-default js-import " href="#"> Add <i class="fa fa-fw fa-plus visible-xs"></i> </a><i class="fa loading-status fa-spinner fa-pulse fa-3x fa-fw"></i>
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                            </div>

                             <div class="slat slat-callout slat-import-record slat-modal" style="display: block;">
                                <div class="slat-default">
                                    <div class="title">Registered Nurse
                                        <div class="flag">Resuscitation Programs <span class="arrowLeft"></span>
                                        </div>
                                    </div>
                                    <ul class="meta">
                                        <li><span class="meta-label">Speciality:</span><span class="meta-value">Pediatrics</span></li>
                                        <li class="meta-callout"><span class="meta-value"><span class="meta-callout-label">Dates:</span>May 2008 - Jun 2010</span></li>
                                    </ul>
                                    <div class="action"><a class="btn btn-sm btn-default js-import " href="#"> Add <i class="fa fa-fw fa-plus visible-xs"></i></a><i class="fa loading-status fa-spinner fa-pulse fa-3x fa-fw"></i>
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                       <div class="slat-group">
                        <div class="slat-group-header ">
                            <div class="slat-group-header-title">
                                <h2><a href="#southeast-group" class="group-header-link">Southeast United Hospitals <i class="fa fa-caret-right"></i> </a></h2>
                            </div>

                        </div>
                        <div class="slat-group-content collapse" id="#southest-group">
                            <div class="slat slat-callout slat-modal slat-import-record" style="display: block;">
                                <div class="slat-default">
                                    <div class="title">Registered Nurse
                                        <div class="flag">Work Experience <span class="arrowLeft"></span>
                                        </div>
                                    </div>
                                    <ul class="meta">
                                        <li><span class="meta-label">Speciality:</span><span class="meta-value">Pediatrics</span></li>
                                        <li class="meta-callout"><span class="meta-value"><span class="meta-callout-label">Dates:</span>May 2008 - Jun 2010</span></li>
                                    </ul>
                                    <div class="action"><a class="btn btn-sm btn-default js-import " href="#"> Add <i class="fa fa-fw fa-plus visible-xs"></i></a><i class="fa loading-status fa-spinner fa-pulse fa-3x fa-fw"></i>
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                            </div>
                             <div class="slat slat-callout slat-modal slat-import-record" style="display: block;">
                                <div class="slat-default">
                                    <div class="title">Registered Nurse
                                        <div class="flag">Education <span class="arrowLeft"></span>
                                        </div>
                                    </div>
                                    <ul class="meta">
                                        <li><span class="meta-label">Speciality:</span><span class="meta-value">Pediatrics</span></li>
                                        <li class="meta-callout"><span class="meta-value"><span class="meta-callout-label">Dates:</span>May 2008 - Jun 2010</span></li>
                                    </ul>
                                    <div class="action"><a class="btn btn-sm btn-default js-import " href="#"> Add <i class="fa fa-fw fa-plus visible-xs"></i> </a><i class="fa loading-status fa-spinner fa-pulse fa-3x fa-fw"></i>
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                            </div>

                             <div class="slat slat-callout slat-import-record slat-modal" style="display: block;">
                                <div class="slat-default">
                                    <div class="title">Registered Nurse
                                        <div class="flag">Resuscitation Programs <span class="arrowLeft"></span>
                                        </div>
                                    </div>
                                    <ul class="meta">
                                        <li><span class="meta-label">Speciality:</span><span class="meta-value">Pediatrics</span></li>
                                        <li class="meta-callout"><span class="meta-value"><span class="meta-callout-label">Dates:</span>May 2008 - Jun 2010</span></li>
                                    </ul>
                                    <div class="action"><a class="btn btn-sm btn-default js-import " href="#"> Add <i class="fa fa-fw fa-plus visible-xs"></i></a><i class="fa loading-status fa-spinner fa-pulse fa-3x fa-fw"></i>
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                    </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
<!-- /MANAGE MODALS -->

<?php
include ('includes/modals/_modal-goal-add.php');
include ('includes/modals/_modal-goal-manage.php');
include ('includes/modals/_modal-note-add.php');
include ('includes/modals/_modal-note-edit.php');
include ('includes/modals/_modal-document-add.php');
include ('includes/modals/_modal-document-edit.php');
?>

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>

<script src="/scripts/prototype.portfolio.js"></script>
<script src="/scripts/prototype.portfolio.wizard.helper.js"></script>

<script>

    //hide/show import records when user selects/deselects orgs
    $(".js-org-list").on('change', 'input' , function(){

        $(this).closest('li[class^="org"]').toggleClass("org-unchecked");
        var $orgClass = $(this).closest('li[class^="org-"]').attr('class').match(/org-[\w-]*\b/);

        $(".slat." + $orgClass).toggle();
    });

    //import record
    $(".js-import").click(function(e){
        e.preventDefault();

        $(this).closest(".slat").addClass('importing').removeClass(function (index, className) {

            return (className.match (/(^|\s)org-\S+/g) || []).join(' ') + " slat-import-record";

        });
        $(this).text("Manage");


        $(this).closest(".slat-group").find(".slat-message").parent().fadeOut();
        $(this).hide();


        setTimeout(function () {
            $(".importing").removeClass('importing');
        }, 1500);
    });


    $(".institution").html("ePortfolio");



   // function enterImportMode() {
   //      $(".svg-wrapper").toggle();
   //      $(".org-list").toggleClass("hidden");
   //  };

    function enterImportMode() {
        $(".svg-wrapper").hide();
        $(".org-list").removeClass("hidden");
    };

    function exitImportMode(){
        $(".svg-wrapper").show();
        $(".org-list").addClass("hidden");
    }


    $(".import-section-link").click(function(e) {
        e.preventDefault();
        $(this).closest(".slat-group").find(".slat-import-record").fadeToggle();
        enterImportMode();
        $(this).text("Hide Import Items");
    });


    var i = 0;

    $(".import-mode-btn").click(function(e) {


        if (i % 2 != 0){
            $(".slat-import-record").hide();
            $(".js-org-list input").attr('checked', false);
        }
        e.preventDefault();
        $(".slat-group-header-actions").toggle();
        $(".action:visible").toggle();
        $(".slat-message .btn ").toggle();
        $(".slat-message").html("<h3>This section is empty.</h3>");
        var btnText = $(this).text();
        $(".import-mode-btn").text(
            btnText == "Exit Import Mode" ? "Enter Import Mode" : "Exit Import Mode");


        enterImportMode();
        $(".stickybar .btn").not(".import-mode-btn").toggleClass("disabled");
        $(".import-mode-btn").toggleClass("btn-success btn-default");
        $(".section-main").addClass("import-section");
        $(".col-md-3 .section-box").not(".section-box-import").addClass("exclude");

        i++;


    });
    $(".modal").on('shown.bs.modal', function(e){

        e.preventDefault();
        $('.group-header-link').click(function() {
           $(this).closest(".slat-group").find(".slat-group-content").slideToggle();

            //change caret direction in header from right to down
           $(this).find("i").toggleClass('fa-caret-right fa-caret-down');
        });
    });



    var elementPosition = $('.section-box-import').offset();

        //scroll to chosen filter
        $(window).scroll(function() {
            var elementWidth = $('.section-box-import').parent().width();

            if ($(window).scrollTop() > elementPosition.top) {
                $('.section-box-import').css({'position': 'fixed', 'top': '0', 'width' : elementWidth,  'margin-top': '0', 'z-index': '5'});
                $('form').css({'margin-top': '145px', 'display':'block'});
                $('.stickybar').css('padding-top', '90px');
            } else {
                $('.section-box-import').css({'position': 'static', 'width' : 'auto'});
                $('form').css({'margin-top': 'auto', 'display':'inline'});

            }

            $(window).resize();

        });

    </script>



    <?= createSiteEnd(); ?>
