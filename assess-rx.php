<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Assignments';
$patterns['focus']['title'] = 'Assignments';


$patterns['header'] = array(
'mainNav' => '
<li class="{active=assignments}"><a href="/assess-rx.php">Assignments</a></li>
<li class="{active=completed}"><a href="/completed.php">Completed</a></li>
<li class="{active=connections}"><a href="/connections.php">Education Topics</a></li>
<li class="{active=admin} dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <i class="fa fa-angle-down"></i></a>
<ul class="dropdown-menu">
<li><a href="#">Assessment Results</a></li>
<li><a href="/user-admin.php">User Administration</a></li>

</ul>
</li>

<li class="disabled"><a href="#">Help</a></li>
<li class="visible-xs"><a href="#">Logout</a></li>',
'mainNavActive' =>'assignments',
'logoLarge' => './content/images/logo.png'
);


$patterns['focus']['meta_secondary'] = array(
array(
'label' => 'Total Tasks:',
'value' => '17',
),
array(
'label' => 'Requiring Attention:',
'value' => '5',
),
);

?>
  <?= createSiteStart($patterns['start']); ?>
    <?= createHeader($patterns['header']); ?>
      <?= createFocus($patterns['focus']); ?>
        <div class="layout">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <section class="section section-main section-box" data-equalize="layout-columns">
                  <div class="filter-mini" data-target="tasks">
                    <div class="filter-row">
                      <div class="filter-cell">
                        <div class="filter-toggle">
                          Show: <i class="fa fa-fw fa-caret-down"></i>
                        </div>
                      </div>
                      <div class="filter-cell">
                        <ul>
                          <li>
                            <label class="checkbox">
                              <input type="checkbox" value='all' checked> All Tasks</label>
                          </li>
                          <li>
                            <label class="checkbox">
                              <input type="checkbox" value="1"> Knowledge</label>
                          </li>
                          <li>
                            <label class="checkbox">
                              <input type="checkbox" value="2"> Self-Assessment</label>
                          </li>
                          <li>
                            <label class="checkbox">
                              <input type="checkbox" value="3"> Clinical Judgement</label>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>

                  <section class="section" id="tasks">
                    <?php if ( isset($_GET['rater'])) { ?>
                      <div class="alert alert-info alert-nudge ">
                        <div class="nudge-container">
                          <div class="title"><i class="fa fa-flag"></i>
                            <a href="/assessment-overview.php">You have 19 assessment tasks as a manager or rater.</a>
                          </div>
                          <div class="action">
                            <a class="btn btn-sm btn-default" href="assessment-overview.php">
    View
    <i class="fa fa-fw fa-chevron-right visible-xs"></i>
    </a>
                          </div>

                        </div>
                      </div>
                      <?php } ?>

                        <?php






$slat = array(
'attributes' => array(
array('class',array('slat','slat-spaced','slat-callout')),
array('data-filter-category',array('1')),
),
'title' => '<a href="">Emergency Nurse Competency Exam</a>',
'meta' => array(
array(
'type' => 'Knowledge Assessment',
),

),
'action' => array(
'type' => 'action-single',
'content' => 'Start',
'link' => '',
)
);
echo createSlat($slat);
$slat = array(
'attributes' => array(
array('class',array('slat','slat-spaced','slat-callout')),
array('data-filter-category',array('1')),
),
'title' => '<a href=""> Pharmacology Competency Exam: RN</a>',
'meta' => array(
array(
'type' => 'Knowledge Assessment',
),
),
'action' => array(
'type' => 'action-single',
'content' => 'Start',
'link' => '',
)
);
echo createSlat($slat);
$slat = array(
'attributes' => array(
array('class',array('slat','slat-spaced','slat-callout')),
array('data-filter-category',array('2')),
),
'title' => '<a href="">  Emergency Nurse Skills Checklist</a>',
'meta' => array(
array(
'type' => 'Skills Self-Assessment ',
),
),
'action' => array(
'type' => 'action-single',
'content' => 'Start',
'link' => '',
)
);
echo createSlat($slat);
$slat = array(
'attributes' => array(
array('class',array('slat','slat-spaced','slat-callout')),
array('data-filter-category',array('2')),
),
'title' => '<a href="">  Care of the Surgical Patient</a>',
'meta' => array(
array(
'type' => 'Skills Self-Assessment ',
),
),
'action' => array(
'type' => 'action-single',
'content' => 'Start',
'link' => '',
)
);
echo createSlat($slat);
$slat = array(
'attributes' => array(
array('class',array('slat','slat-spaced','slat-callout')),
array('data-filter-category',array('3')),
),
'title' => '<a href="">  Acute Care Baseline Assessment</a>',
'meta' => array(
array(
'type' => 'Clinical Judgement ',
),
),
'action' => array(
'type' => 'action-single',
'content' => 'Start',
'link' => '',
)
);
echo createSlat($slat);






?>
                  </section>
                </section>
                <!-- /section-main -->
              </div>
              <!-- /column -->


              <!-- /column -->
            </div>
            <!-- /row -->
          </div>
          <!-- /container -->
        </div>
        <!-- /layout -->


        <?= createFooter($patterns['footer']); ?>
          <?= createPrototypeNav(); ?>
            <?= createSiteScripts(); ?>

              <script>
                $(function() {

                  // helper to keep the task count correct
                  $('.focus-pageheader .meta-value:eq(0)').text($('#tasks .slat').length);
                  $('.focus-pageheader .meta-value:eq(1)').text($('#tasks .slat-attention').length);
                  <?php if ( isset($_GET['rater'])) { ?>
                  $('input[type="checkbox"]').click(function() {
                    if ($(this).val() == '5' || $(this).val() == 'all') {
                      $('.alert-nudge').show();
                    } else {
                      $('.alert-nudge').hide();
                    }
                  });
                  <?php } ?>
                  <?php if (!empty($_GET['growlTitle']) && !empty($_GET['growlText'])) { ?>
                  // Show Growl on Load
                  var growl = {};
                  growl.title = "<?= $_GET['growlTitle']; ?>";
                  growl.text = "<?= $_GET['growlText']; ?>";
                  <?php echo (!empty($_GET['growlType']))?'growl.type = "'.$_GET['growlType'].'";'."\n":''; ?>
                  <?php echo (!empty($_GET['growlSticky']))?'growl.sticky = '.$_GET['growlSticky'].';'."\n":''; ?>

                  setTimeout(function() {
                    HealthStream.utilities.growl(growl);
                  }, 500);
                  <?php } ?>
                });
              </script>

              <?= createSiteEnd(); ?>