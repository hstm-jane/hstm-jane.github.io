<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'This is the Attachment title';
$patterns['focus']['title'] = 'This is the Attachment title';

$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-attachment',
    'type' => 'Attachment',
);
$patterns['focus']['meta_primary'] = array(
    array(
        'label' => 'From Course:',
        'value' => '<a href="course.php" class="meta-value">Chronic Pain Management</a>',
        'attributes' => array(
            array('class','meta-hidden-xs'),
        )

    ),
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Status:',
        'value' => 'Not Yet Started',
    ),
);

?>
<style>
     .section-main {
        position: relative;
        padding-top: 50px;
    }
    .nav-focus {
        
        margin-top: 30px !important;
        margin-bottom: 0px !important;
        position: absolute;
        left: 0;
        top: 0;
        width:100%;
        
    }
    .nav-focus li {
        font-weight:normal;
        background-color: #f3f3f3;
        padding: 0px 15px 0px 15px !important;
        margin: 0px !important;
        border-right: 1px solid #e2e2e2;
         border-top: 1px solid #e2e2e2;
        float: left;
        height: 29px;
        list-style: none;
        
    }
    .nav-focus li a {
        padding: 5px 0px !important;
        position: relative;
        display: block;
       
    }
    .nav-focus li.active {
        font-weight:600;
        background-color: #fff;
        height: 30px;
    }
     .nav-focus li.active a {
        color: #333 !important;
    }
    .nav-focus li.active a:hover {
        text-decoration: none;
    }
    .nav-focus ul {
        border-bottom:  1px solid #e2e2e2;
        height: 30px;
        padding-left: 0px;
    }
    
    .nav-focus ul i {
        color: #09C;
        font-size: 36px;
        position: absolute;
        top: -15px;
        left: 50%;
        margin-left: -12px;
        display: none;
    }
    .nav-focus li.active i {
        display: none !important;
        color: #40b3d9;
    }


.breadcrumb {
  padding: 8px 15px;
  font-size: 11px;
  position: absolute; 
  top: 0px; 
  left: 0px;
  margin-bottom: @line-height-computed;
  list-style: none;
  background-color: #fff;
  border-radius: @border-radius-base;
 
}
 .breadcrumb  > li {
    display: inline-block;
 }
  .breadcrumb > li + li:before {
      /*content: "@{breadcrumb-separator}\00a0"; // Unicode space added since inline-block means non-collapsing white-space*/
      content: ">\00a0";
      padding: 0 5px;
      color: #ccc;
    }
  .breadcrumb > li > .active {
       color: #333;
  }
 
</style>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout">
   
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-box section-main" data-equalize="layout-columns">
                     <ol class="breadcrumb">
  <li><a href="#">To Do</a></li>
  <li><a href="#">Curriculum</a></li>
  <li><a href="#">Course</a></li>
  <li class="active">Attachment</li>
  
</ol>
                    <section class="section">
                        <h2>Instructions</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </section>
                        <section class="section">
                            <h2>Attachments</h2>
                            <?php

                            $slat = array(
                                'attributes' => array(
                                    array('class',array('slat','slat-status')),
                                ),
                                'title' => '<a href="#">This is the Attachment title</a>',
                                'meta' => array(
                                    array(
                                        'label' => 'Filetype:',
                                        'value' => 'File',
                                    ),
                                    array(
                                        'label' => 'Status:',
                                        'value' => 'Not Yet Started',
                                    ),
                                    array(
                                        'label' => 'Updated:',
                                        'value' => 'May 13, 2013',
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Open',
                                    'link' => '#',
                                )
                            );
                            echo createSlat($slat);

                            ?>
                        </section>
                    </section><!-- /section-main -->
                </div><!-- /column -->

                <div class="col-md-3">
                    <section class="section section-sidebar" data-equalize="layout-columns">
                        <section class="section section-box">
                            <h3>Support</h3>
                            <p>To talk with a customer service representative call 1-800-521-0574</p>
                            <ul class="list-unstyled">
                                <li><a href="#">Visit the help forum</a></li>
                                <li><a href="#">Send us an email</a></li>
                            </ul>
                        </section>
                    </section><!-- /section-sidebar -->
                </div><!-- /column -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /layout-->

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>
