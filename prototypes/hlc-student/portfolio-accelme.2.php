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

        <style>
          /*Horizontal Timeline*/

          .timeline-horizontal {
            list-style: none;
            padding: 20px;
            position: relative;
          }

          .timeline-horizontal {
            list-style: none;
            position: relative;
            padding: 20px 0px 20px 0px;
            display: inline-block;
          }

          .timeline-horizontal:before {
            height: 3px;
            top: auto;
            bottom: 26px;
            left: 56px;
            right: 0;
            width: 100%;
            margin-bottom: 20px;
          }

          .timeline-horizontal .timeline-item {
            display: table-cell;
            /*height: 280px;*/
            width: 20%;
            min-width: 320px;
            float: none !important;
            padding-left: 0px;
            padding-right: 20px;
            margin: 0 auto;
            vertical-align: bottom;
          }
          /*.timeline-horizontal .timeline-item .timeline-panel {
top: auto;
bottom: 64px;
display: inline-block;
float: none !important;
left: 0 !important;
right: 0 !important;
width: 100%;
margin-bottom: 20px;
}*/
          /*.timeline-horizontal .timeline-item .timeline-panel:before {
top: auto;
bottom: -16px;
left: 28px !important;
right: auto;
border-right: 16px solid transparent !important;
border-top: 16px solid #c0c0c0 !important;
border-bottom: 0 solid #c0c0c0 !important;
border-left: 16px solid transparent !important;
}*/

          .timeline-horizontal .timeline-item:before,
          .timeline-horizontal .timeline-item:after {
            display: none;
          }

          .timeline-horizontal .timeline-item .timeline-badge {
            top: auto;
            bottom: 0px;
            left: 43px;
          }
          /*Horizontal Timeline*/

          header:after,
          #timeline .timeline-item:after,
          header:before,
          #timeline .timeline-item:before {
            content: '';
            display: block;
            width: 100%;
            clear: both;
          }

          .layout-subnav-container {
            padding-left: 0;
          }

          @media (min-width: 768px) {
            .layout-subnav-content {
              margin-left: 150px;
            }
          }

          .climbing-man {
            position: absolute;
            z-index: 1;
            height: 150px;
            right: -41px;
            top: 0;
            display: none;
          }

          .layout-subnav-nav {
            border-right: none;
          }

          .layout-subnav-nav li {
            position: relative;
            border-right: 1px solid #ddd;
            border-top: 1px solid #ddd;
          }

          .layout-subnav-nav li:first-of-type {
            border-top: none;
          }

          .layout-subnav-nav a.completed {
            background-color: #f2fafc;
          }

          .timeline-icon {
            text-align: center;
          }

          .timeline-icon i {
            margin-top: 50%;
            padding-bottom: 1em;
            height: 20px;
            font-size: 20px;
            top: -10px;
            position: relative;
            display: block;
            font-style: normal;
          }

          .level-icon {
            background: white;
            width: 75px;
            height: 75px;
            overflow: hidden;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 50%;
            border: 2px solid #09C;
            color: #09C;
            display: inline-block;
            margin-right: 20px;
            cursor: pointer;
            transition: all .2s ease;
            -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, .2);
            box-shadow: 0 0 3px rgba(0, 0, 0, .2);
            position:relative;
          }

          .level-icon:hover {
            background-color: #f2fafc;
            transform: scale(1.1, 1.1);
          }

          .level-icon.completed {
            background-color: #09c;
            text-shadow: 1px 1px 0 #007aa3;
            color: white;
            opacity: .5;
          }

          .level-icon div {
            margin-top: 19%;
            padding-bottom: 1em;
            height: 20px;
            font-size: 20px;
            position: relative;
            display: block;
            font-style: normal;
          }
           .level-icon span{
             position:absolute;
             display:block;
             height:100%;
             width:20%;
             background-color: rgba(0,153,204, .5)

           }

          .level-icon p {
            margin: 0;
            text-align: center;
          }

          .career-step-img {
            margin-right: 15px;
          }

          *,
          *:before,
          *:after {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
          }

          body,
          html {
            height: 100%;
          }

          @media (min-width: 768px) {
            .layout-subnav-nav li.active a,
            .layout-subnav-nav li.active a:hover {
              pointer-events: none;
              color: #007aa3;
              cursor: default;
              position: relative;
            }
            .layout-subnav-nav li.active {
              border-right: none;
            }
          }
          /*
.layout-subnav-nav li.active a:after {
content: 'Level 4';
background: #d9f0f7;
top: 0;
bottom: 0;
left: 0;
width: 50%;
font-size: 1.1em;
position: absolute;
}*/

          .layout-subnav-nav li.active a:after {
            content: '\a';
            width: 0px;
            height: 0px;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            border-right: 10px solid white;
            position: absolute;
            right: 0;
          }

          */ body {
            background: #f9f9f9;
            background-size: cover;
            margin: 0;
            padding: 0;
            line-height: 20px;
            font-size: 14px;
            color: #726f77;
          }

          img {
            max-width: 100%;
          }

          a {
            text-decoration: none;
          }

          .container {
            max-width: 1100px;
            margin: 0 auto;
          }

          .project-name {
            text-align: center;
            padding: 10px 0;
            border-bottom: 2px dotted #ddd;
          }

          header {
            background: #09C;
            padding: 10px;
            -webkit-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.05);
            -moz-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.05);
            -ms-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.05);
            box-shadow: 0 3px 3px rgba(0, 0, 0, 0.05);
          }

          header .logo {
            color: #ee4d4d;
            float: left;
            font-family: "Dosis", arial, tahoma, verdana;
            font-size: 22px;
            font-weight: 500;
          }

          header .logo > span {
            color: #f7aaaa;
            font-weight: 300;
          }

          header .social {
            float: right;
          }

          header .social .btn {
            font-family: "Dosis";
            font-size: 14px;
            margin: 10px 5px;
          }

          #timeline {
            width: 100%;
            margin: 30px auto;
            position: relative;
            padding: 0 10px;
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            -ms-transition: all 0.4s ease;
            transition: all 0.4s ease;
          }

          #timeline:before {
            content: "";
            width: 3px;
            height: 100%;
            background: #09c;
            left: 50%;
            top: 0;
            position: absolute;
          }

          #timeline:after {
            content: "";
            clear: both;
            display: table;
            width: 100%;
          }

          #timeline .timeline-item {
            margin-bottom: 50px;
            position: relative;
          }

          #timeline .timeline-item.completed .timeline-content {
            opacity: .5;
            transition: all .2s ease;
          }

          #timeline .timeline-item .timeline-content .content-section{
            height:23px;
            overflow:hidden;
          }

            .content-section p{

           white-space: nowrap;
    width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
            }

          #timeline .timeline-item.completed .timeline-content:hover {
            opacity: 1;
            transition: all .2s ease;
          }

          #timeline .timeline-item.completed .timeline-icon {
            background: #09C;
            color: white;
            text-shadow: 1px 1px 0 #007aa3;
          }

          #timeline .timeline-item.locked .timeline-icon {
            background: #ddd;
            color: #666;
            text-shadow: none;
            border-color: #666;
          }

          #timeline .timeline-item .timeline-icon {
            background: white;
            width: 50px;
            height: 50px;
            position: absolute;
            top: 0;
            left: 50%;
            overflow: hidden;
            margin-left: -23px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 50%;
            border: 2px solid #09C;
            color: #09C;
          }

          #timeline .timeline-item .timeline-content {
            width: 45%;
            background: #fff;
            padding: 20px;
            -webkit-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            border-radius: 5px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            transition: all 0.3s ease;
            border-left: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
          }

          #timeline .timeline-item .timeline-content h3 {
            padding: 15px;
            background: #09C;
            color: #fff;
            margin: -20px -20px 0 -20px;
            -webkit-border-radius: 3px 3px 0 0;
            -moz-border-radius: 3px 3px 0 0;
            -ms-border-radius: 3px 3px 0 0;
            border-radius: 3px 3px 0 0;
          }

          #timeline .timeline-item .timeline-content.locked h3 {
            background-color: #A9A9A9;
            color: #ddd;
          }

          #timeline .timeline-item .timeline-content.locked {
            background-color: #ddd;
          }

          #timeline .timeline-item .timeline-content.locked:before {
            border-left: 7px solid #A9A9A9;
          }

          #timeline .timeline-item .timeline-content:before {
            content: '';
            position: absolute;
            left: 45%;
            top: 20px;
            width: 0;
            height: 0;
            border-top: 7px solid transparent;
            border-bottom: 7px solid transparent;
            border-left: 7px solid #09c;
          }

          #timeline .timeline-item .timeline-content.right {
            float: right;
            border-right: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            border-left: none;
          }

          #timeline .timeline-item .timeline-content.right:before {
            content: '';
            right: 45%;
            left: inherit;
            border-left: 0;
            border-right: 7px solid #09c;
          }

          .timeline-content p {
            margin-top: 5px;
          }

          .btn:hover {
            box-shadow: none;
            top: 2px;
            left: 2px;
            -webkit-box-shadow: 2px 2px 0 transparent;
            -moz-box-shadow: 2px 2px 0 transparent;
            -ms-box-shadow: 2px 2px 0 transparent;
            box-shadow: 2px 2px 0 transparent;
          }

          @media screen and (max-width: 768px) {
            #timeline {
              margin: 30px;
              padding: 0px;
              width: 90%;
            }
            #timeline:before {
              left: 0;
            }
            #timeline .timeline-item .timeline-content {
              width: 90%;
              float: right;
            }
            #timeline .timeline-item .timeline-content:before,
            #timeline .timeline-item .timeline-content.right:before {
              left: 10%;
              margin-left: -6px;
              border-left: 0;
              border-right: 7px solid #ee4d4d;
            }
            #timeline .timeline-item .timeline-icon {
              left: 0;
            }
          }

          nav.nav-focus {
            margin-bottom: 0;
          }

          .modal-wizard-body {
            padding: 0;
          }

          @-webkit-keyframes fadeIn {
            from {
              opacity: 0;
            }
            to {
              opacity: 1;
            }
          }

          @keyframes fadeIn {
            from {
              opacity: 0;
            }
            to {
              opacity: 1;
            }
          }

          @-webkit-keyframes fadeOut {
            from {
              opacity: 1;
            }
            to {
              opacity: 0;
            }
          }

          @keyframes fadeOut {
            from {
              opacity: 1;
            }
            to {
              opacity: 0;
            }
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
          .teaching-save-experience {
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

          .modal-footer.alt,
          .irb-options {
            display: none;
          }

          .ladder {
            height: 500px;
            border: 1px solid blue;
          }

          .step {
            min-height: 50px;
            background-color: #26a8d4;
            color: white;
            -webkit-clip-path: polygon(100% 41%, 100% 100%, 0 100%, 0 43%, 51% 0);
            clip-path: polygon(100% 41%, 100% 100%, 0 100%, 0 43%, 51% 0);
            position: relative;
          }

          .step p {
            position: absolute;
            bottom: 0;
          }

          .timeline {
            list-style: none;
            padding: 20px 0 20px;
            position: relative;
          }

          .timeline:before {
            top: 0;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 3px;
            background-color: #eeeeee;
            left: 50%;
            margin-left: -1.5px;
          }

          .timeline > li {
            margin-bottom: 20px;
            position: relative;
          }

          .timeline > li:before,
          .timeline > li:after {
            content: " ";
            display: table;
          }

          .timeline > li:after {
            clear: both;
          }

          .timeline > li:before,
          .timeline > li:after {
            content: " ";
            display: table;
          }

          .timeline > li:after {
            clear: both;
          }

          .timeline > li > .timeline-panel {
            width: 46%;
            float: left;
            border: 1px solid #d4d4d4;
            border-radius: 2px;
            padding: 20px;
            position: relative;
            -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
          }

          .timeline > li > .timeline-panel:before {
            position: absolute;
            top: 26px;
            right: -15px;
            display: inline-block;
            border-top: 15px solid transparent;
            border-left: 15px solid #ccc;
            border-right: 0 solid #ccc;
            border-bottom: 15px solid transparent;
            content: " ";
          }

          .timeline > li > .timeline-panel:after {
            position: absolute;
            top: 27px;
            right: -14px;
            display: inline-block;
            border-top: 14px solid transparent;
            border-left: 14px solid #fff;
            border-right: 0 solid #fff;
            border-bottom: 14px solid transparent;
            content: " ";
          }

          .timeline > li > .timeline-badge {
            color: #fff;
            width: 50px;
            height: 50px;
            line-height: 50px;
            font-size: 1.4em;
            text-align: center;
            position: absolute;
            top: 16px;
            left: 50%;
            margin-left: -25px;
            background-color: #999999;
            z-index: 100;
            border-top-right-radius: 50%;
            border-top-left-radius: 50%;
            border-bottom-right-radius: 50%;
            border-bottom-left-radius: 50%;
          }

          .timeline > li.timeline-inverted > .timeline-panel {
            float: right;
          }

          .timeline > li.timeline-inverted > .timeline-panel:before {
            border-left-width: 0;
            border-right-width: 15px;
            left: -15px;
            right: auto;
          }

          .timeline > li.timeline-inverted > .timeline-panel:after {
            border-left-width: 0;
            border-right-width: 14px;
            left: -14px;
            right: auto;
          }

          .timeline-badge.primary {
            background-color: #2e6da4 !important;
          }

          .timeline-badge.success {
            background-color: #3f903f !important;
          }

          .timeline-badge.warning {
            background-color: #f0ad4e !important;
          }

          .timeline-badge.danger {
            background-color: #d9534f !important;
          }

          .timeline-badge.info {
            background-color: #5bc0de !important;
          }

          .timeline-title {
            margin-top: 0;
            color: inherit;
          }

          .timeline-body > p,
          .timeline-body > ul {
            margin-bottom: 0;
          }

          .timeline-body > p + p {
            margin-top: 5px;
          }

          @media (max-width: 767px) {
            ul.timeline:before {
              left: 40px;
            }
            ul.timeline > li > .timeline-panel {
              width: calc(100% - 90px);
              width: -moz-calc(100% - 90px);
              width: -webkit-calc(100% - 90px);
            }
            ul.timeline > li > .timeline-badge {
              left: 15px;
              margin-left: 0;
              top: 16px;
            }
            ul.timeline > li > .timeline-panel {
              float: right;
            }
            ul.timeline > li > .timeline-panel:before {
              border-left-width: 0;
              border-right-width: 15px;
              left: -15px;
              right: auto;
            }
            ul.timeline > li > .timeline-panel:after {
              border-left-width: 0;
              border-right-width: 14px;
              left: -14px;
              right: auto;
            }
          }
        </style>

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
            'label' => 'AccelMe',
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
                          <p><a href="#modal-portfolio-wizard" data-toggle="modal" class="size-check-init btn btn-success btn-sm">Complete Portfolio</a></p>
                        </section>

                        <section class="section">
                          <h2>About Portable Portfolio</h2>

                          <p><a href="#modal-portable-portfolio-about" data-toggle="modal">What is my Portable Portfolio?</a></p>
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
                                        <li><a href="#modal-work-experience" data-toggle="modal">Add Item</a></li>
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
                                    <a class="btn btn-default btn-sm" href="#modal-work-experience" data-toggle="modal">Add Work Experience</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="work-experience">Hide Section</a>
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
                                        <li><a href="#modal-education" data-toggle="modal">Add Item</a></li>
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
                                    <a href="#modal-education" data-toggle="modal" class="btn btn-default btn-sm">Add Education</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="education">Hide Section</a>
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
                                        <li><a href="#modal-licenses" data-toggle="modal">Add Item</a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li><a href="#">Move Section Up</a></li>
                                        <li><a href="#">Move Section Down</a></li>
                                        <li><a href="#" class="hide-section" data-section="licenses">Hide Section</a></li>
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
                                <div class="slat-group-header-actions">
                                  <div class="btn-group">
                                    <a href="#modal-awards" data-toggle="modal" class="btn btn-default btn-sm">Add</a>
                                    <div class="btn-group">
                                      <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#modal-awards" data-toggle="modal">Add Item</a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li><a href="#">Move Section Up</a></li>
                                        <li><a href="#">Move Section Down</a></li>
                                        <li><a href="#" class="hide-section" data-section="awards">Hide Section</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="slat-group-content">
                                <div class="slat">
                                  <div class="slat-message slat-message-sm">
                                    <h3>This section is empty, add your first item.</h3>
                                    <a href="#modal-awards" data-toggle="modal" class="btn btn-default btn-sm">Add Awards &amp; Recognition</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="awards">Hide Section</a>
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
                                        <li><a href="#modal-other" data-toggle="modal">Add Item</a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li><a href="#">Move Section Up</a></li>
                                        <!-- <li><a href="#">Move Section Down</a></li> -->
                                        <li><a href="#" class="hide-section" data-section="other">Hide Section</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="slat-group-content">
                                <div class="slat">
                                  <div class="slat-message slat-message-sm">
                                    <h3>This section is empty, add your first item.</h3>
                                    <a href="#modal-other" data-toggle="modal" class="btn btn-default btn-sm">Add Other</a> <a href="#" class="btn btn-default btn-sm hide-section" data-section="other">Hide Section</a>
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
                          <p><a href="#modal-portfolio-wizard" data-toggle="modal" class="size-check-init btn btn-success btn-sm">Complete Portfolio</a></p>
                        </section>

                        <section class="section">
                          <h2>About Portable Portfolio</h2>

                          <p><a href="#modal-portable-portfolio-about" data-toggle="modal">What is my Portable Portfolio?</a></p>
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
                                      <li class="active"><a href="#">Date</a></li>
                                      <li><a href="#">Name</a></li>
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
                                      <li class="active"><a href="#">Date</a></li>
                                      <li><a href="#">Name</a></li>
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
                                      <li class="active"><a href="#">Date</a></li>
                                      <li><a href="#">Name</a></li>
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
                                      <li class="active"><a href="#">Date</a></li>
                                      <li><a href="#">Name</a></li>
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

                    <section class="section">
                      <section class="section section-results-header">


                        <div class="form-group">
                          <select class="form-control">
                            <option>Career Path 1</option>
                            <option>Department Challenge 1</option>
                            <option>Department Challenge 2</option>

                          </select>
                        </div>


                        <section class="section">
                          <div class="container">

                            <div class="level-icon completed">
                              <div>
                                <p>Level</p>
                                <p>1</p>
                              </div>
                            </div>
                            <div class="level-icon completed">
                              <div>
                                <p>Level</p>
                                <p>2</p>
                              </div>
                            </div>
                            <div class="level-icon completed">
                              <div>
                                <p>Level</p>
                                <p>3</p>
                              </div>
                            </div>
                            <div class="level-icon">
                            <span>     </span>
                              <div>
                                <p>Level</p>
                                <p>4</p>
                              </div>

                            </div>
                            <div class="level-icon">
                              <div>
                                <p>Level</p>
                                <p>5</p>
                              </div>
                            </div>
                            <div class="level-icon">
                              <div>
                                <p>Level</p>
                                <p>6</p>
                              </div>
                            </div>
                            <div class="level-icon">
                              <div>
                                <p>Level</p>
                                <p>7</p>
                              </div>
                            </div>
                            <div class="level-icon">
                              <div>
                                <p>Level</p>
                                <p>8</p>
                              </div>
                            </div>
                            <div class="level-icon">
                              <div>
                                <p>Level</p>
                                <p>9</p>
                              </div>
                            </div>
                            <div class="level-icon">
                              <div>
                                <p>Level</p>
                                <p>10</p>
                              </div>
                            </div>

                            <h1 class="project-name">Level 4 Challenges</h1>
                            <div id="timeline">
                              <div class="timeline-item completed">
                                <div class="timeline-icon">
                                  <i class="fa fa-user"></i>

                                </div>
                                <div class="timeline-content ">
                                  <h3>Complete Your Personal Profile </h3>
                                  <div class="content-section">
                                  <p>
                                    <img src="./content/images/avatar.jpg" align="left" class="career-step-img"> Keep your personal information up-to-date so you can stay in the loop with relevant career information.
                                  </p>
                                  <a href="#" class="btn btn-default">Review</a>
                                  </div>
                                </div>
                              </div>

                              <div class="timeline-item">
                                <div class="timeline-icon completed">
                                  <i class="fa fa-graduation-cap"></i>

                                </div>
                                <div class="timeline-content right">
                                  <h3>Enter Your Education</h3>
                                    <div class="content-section">
                                  <p>
                                    Formal Education may just earn you a badge for your trophy case! <i class="fa fa-diploma"></i>
                                  </p>
                                  <a href="#" class="btn btn-default">Visit Education</a>
                                  </div>
                                </div>
                              </div>

                              <div class="timeline-item locked">
                                <div class="timeline-icon">
                                  <i class="fa fa-lock"></i>

                                </div>
                                <div class="timeline-content locked">
                                  <h3>Volunteer</h3>
                                  <div class="content-section">
                                  <p>
                                    Complete 20 hours of volunteer work.
                                  </p>
                                  <a href="#" class="btn disabled btn-default">Unlock the Level to Begin</a>
                                </div>
                                </div>
                              </div>
                              <div class="timeline-item">
                                <div class="timeline-icon">
                                  <i>3</i>
                                </div>
                                <div class="timeline-content right">
                                  <h3>LOREM IPSUM DOLOR</h3>
                                             <div class="content-section">
                                  <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, facilis quo. Maiores magnam modi ab libero praesentium blanditiis consequatur aspernatur accusantium maxime molestiae sunt ipsa.
                                  </p>
                                  <a href="#" class="btn">button</a>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>


                        </section>



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
                    <label class="radio-inline">
                      <input type="radio" name="optradio">Yes</label>
                    <label class="radio-inline">
                      <input type="radio" name="optradio" checked>No</label>
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
                      <button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
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
                      <button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
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
                      <button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
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
                        <button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
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
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
              </div>
              <div class="modal-footer alt">
                <a href="#" class="btn btn-success close-committee-work">Save</a> <a class="btn btn-success refresh-committee-work" href="#">Save and Add Another</a> <a href="#" class="btn btn-default close-committee-work">Cancel</a>
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
                <a href="#" class="btn btn-success" data-dismiss="modal">Save</a> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
              </div>
              <div class="modal-footer alt">
                <a href="#" class="btn btn-success close-memberships">Save</a>
                <!--<a class="btn btn-success refresh-memberships" href="#">Save and Add Another</a>--><a href="#" class="btn btn-default close-memberships">Cancel</a>
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
                    <li>
                      <button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
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
                      <button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
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
                      <button class="btn btn-xs btn-danger control-attachment-remove"><i class="fa fa-times"></i></button><a href="#" class="control-attachment-link"><i class="fa fa-fw fa-paperclip control-attachment-icon"></i>This_is_an_attachement_with_an_annoyingly_long_non-breaking_name</a></li>
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
                  var elementPosition = $('.layout-subnav-nav').offset();

                  $(window).scroll(function() {
                    if ($(window).scrollTop() > elementPosition.top) {
                      $('.layout-subnav-nav').css('position', 'fixed').css('top', '0').css('left', 'inherit');
                      $('.layout-subnav-nav').css('z-index', '1101').css('top', '0');
                    } else {
                      $('.layout-subnav-nav').css('position', 'absolute');
                    }
                  });
                </script>



                <?=createSiteEnd();?>