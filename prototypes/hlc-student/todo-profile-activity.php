<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My To-Do List';
$patterns['focus']['title'] = 'My To-Do List';

if ( isset($_GET['rater'])) {
    $patterns['header'] = array(
    'classes' => array('site-header--assessments'),
    'userName' => 'Darcy L. Crane',
    'userImage' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">',
    'mainNav' => '
    <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
    <li class="{active=todo}"><a href="/todo.php?rater">To Do</a></li>
    <li class="{active=completed}"><a href="/completed-filtered.php">Completed</a></li>
    <li class="{active=profile} dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <i class="fa fa-angle-down"></i></a>
    <ul class="dropdown-menu">
    <li><a href="/advanced-practice.php">Advanced Practice</a></li>
    <li><a href="/certifications.php">Certifications</a></li>
    <li><a href="/documents.php">Documents</a></li>
    <li><a href="/education.php">Education</a></li>
    <li><a href="/goals.php">Goals</a></li>
    <li><a href="/job-descriptions.php">Job Descriptions</a></li>
    <li><a href="/disciplines-licenses.php">Licenses</a></li>
    <li><a href="/notes.php">Notes</a></li>
    <li><a href="/personal-information.php">Personal Information</a></li>
    </ul>
    </li>
    <li class="{active=raters}"><a href="/assessment-overview.php">Raters</a></li>
    <li class="{active=catalog}"><a href="/catalog.php">Catalog</a></li>
    <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
    <li class="disabled"><a href="#">Help</a></li>
    <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'todo',
    );
}

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
$patterns['focus']['action'] = array(
'text' => 'Quick Start <i class="fa fa-chevron-right"></i>',
'link' => 'course.php',
);
$patterns['focus']['supporting'] = '<img src="/content/images/coaching-quick.png">';

?>
  <?= createSiteStart($patterns['start']); ?>
    <?= createHeader($patterns['header']); ?>
      <?= createFocus($patterns['focus']); ?>
        <div class="layout">
          <div class="container">
            <div class="row">
              <div class="col-md-9">
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
                              <input type="checkbox" value="1"> Assigned Learning</label>
                          </li>
                          <li>
                            <label class="checkbox">
                              <input type="checkbox" value="2"> Live Classes</label>
                          </li>
                          <li>
                            <label class="checkbox">
                              <input type="checkbox" value="3"> Elective Learning</label>
                          </li>
                          <li>
                            <label class="checkbox">
                              <input type="checkbox" value="4"> Profile Tasks</label>
                          </li>
                          <li>
                            <label class="checkbox">
                              <input type="checkbox" value="5"> Assessments</label>
                          </li>
                          <li>
                            <label class="checkbox">
                              <input type="checkbox" value="6"> Hidden Option with No Matches</label>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <section class="section" id="tasks">
                    <?php if ( isset($_GET['rater'])) { ?>
                      <div class="alert alert-info alert-nudge" style="background-color:#2196f3;color: #fff;padding:15px 10px;">
                        <div class="slat-default">
                          <div class="title" style="font-size:16px;font-weight:500;"><i class="fa fa-flag" style="padding-right:10px;"></i>
                            <a href="/assessment-overview.php" style="color: #fff;">You have 19 tasks to complete as a manager or rater.</a>
                            <div class="action" style="float:right;width:120px;">
                              <a class="btn btn-sm btn-default" href="assessment-overview.php" style="margin-top:-5px;width:100%;">View <i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                            </div>
                          </div>

                        </div>
                      </div>
                      <?php } ?>

                        <?php









$slat = array(
'attributes' => array(
array('class',array('slat','slat-spaced','slat-callout')),
array('data-filter-category',array('4')),
),
'title' => '<a href="profile-activity.3.php">Please Update Your Profile</a>',
'meta' => array(
array(
'type' => 'Profile Activity',
),
array(
'label' => 'Status:',
'value' => 'Assigned',
),
array(
'label' => 'Due:',
'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+30days')),
'attributes' => array(
array('class','meta-callout'),
)
),
),
'action' => array(
'type' => 'action-single',
'content' => 'Start',
'link' => 'profile-activity.3.php',
)
);
echo createSlat($slat);

$slat = array(
'attributes' => array(
array('class',array('slat','slat-spaced','slat-callout')),
array('data-filter-category',array('5')),
),
'title' => '<a href="assessment.php?assessment=competency-6">Nursing Skills Assessment – Reflective/Development Plan 1 – Juniper, Stephanie</a>',
'meta' => array(
array(
'type' => 'Self Assessment',
),
array(
'label' => 'State:',
'value' => 'Evaluate',
),
array(
'label' => 'Due:',
'value' => '<span class="meta-callout-label">Due:</span>' .date('M j, Y',strtotime('+37days')),
'attributes' => array(
array('class','meta-callout'),
)
),
),
'action' => array(
'type' => 'action-split',
'options' => array(
array(
'content' => 'Start',
'link' => 'assessment.php?assessment=competency-6',
),
array(
'content' => 'Print',
'link' => '#',
),
)
)
);
echo createSlat($slat);

$slat = array(
'attributes' => array(
array('class',array('slat','slat-spaced','slat-callout')),
array('data-filter-category',array('3')),
),
'title' => '<a href="course-elective.php">Managment Development Skills</a>',
'meta' => array(
array(
'type' => 'Course',
),
array(
'label' => 'Status:',
'value' => 'Not Yet Started',
),
array(
'label' => 'Enrolled By:',
'value' => 'Self',
'attributes' => array(
array('class','meta-hide-xs'),
)
),
array(
'label' => 'Due: ',
'value' => 'Elective',
'attributes' => array(
array('class','meta-callout'),
)
)
),
'action' => array(
'type' => 'action-split',
'options' => array(
array(
'content' => 'Start',
'link' => 'course-elective.php'
),
array(
'content' => 'Un-enroll',
'link' => '#',
),
)
)
);
echo createSlat($slat);



?>
                  </section>
                </section>
                <!-- /section-main -->
              </div>
              <!-- /column -->

              <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                  <section class="section section-box">
                    <h3>Reminder</h3>
                    <ul class="list-links">
                      <li><a href="/highlight.php">Scheduled Downtime 4/19 at 11PM</a></li>
                    </ul>
                  </section>
                  <section class="section section-box">
                    <h3>Options</h3>
                    <ul class="list-links">
                      <li><a href="/todo-pending.php">My Submitted Assessments</a></li>
                      <li><a href="/todo-optional.php">Optional Assessments</a></li>
                      <li><a id="myAssessmentsLink" href="/todo-pending.php">My Assessments (old version)</a></li>
                    </ul>
                  </section>
                  <?php include_sidebar() ?>
                </section>
                <!-- /section-sidebar -->
              </div>
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
              <script src="/scripts/healthstream.tours/plugin/bootstrap-tour.js"></script>
              <script src="/scripts/healthstream.tours/localization/localization-eng-tour.js"></script>
              <script src="/scripts/healthstream.tours/tours/to-do-tour.js"></script>
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