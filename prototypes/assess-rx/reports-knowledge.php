<?php

include "includes/helpers/helpers.php";
$patterns['start']['title'] = 'Knowledge Report';


$patterns['header'] = array(
  'mainNav' => '
    <li class="{active=home}""><a href="/">Home</a></li>
    <li class="{active=users}""><a href="/admin-user-list.php">Manage Users</a></li>
    <li class="{active=results}""><a href="/assessment-results.2.php">Assessment Results</a></li>
  ',
  'logoLarge' => './content/images/logo-healthstream-large.png',
  'logoSmall' => './content/images/logo-healthstream-small.png',
  'mainNavActive' =>'results',
  'userInstitution' => 'Assess Administrator',
  'alerts' => '',
);
$patterns['footer']['classes'] = array('site-footer-min');



$add_slat = array (
  'title' => 'An example course for recommended learning',
  'attributes' => array(
      array('class', array('slat', 'slat')),
  ),
  'meta' => array(
    array(
        'type' => 'Course',
    ),
    array(
        'label' => 'CE:',
        'value' => '2.00 Hour(s)',
    ),
    array(
        'label' => 'Activities:',
        'value' => 'Online',
        'attributes' => array (
            array('class','meta-hide-xs'),
        )
    ),
    array(
        'label' => 'Publisher:',
        'value' => 'Lippencott - Walters Kluwer Health',
        'attributes' => array (
            array('class','meta-hide-xs'),
        )
    ),
  ),
  'action' => array(
      'type' => 'action-single',
      'content' => '<i class="fa fa-plus visible-xs"></i> Add to List',
      'link' => '#',
  )

);

$remove_slat = $add_slat;
$remove_slat['action']['type'] = 'action-single-danger';
$remove_slat['action']['content'] = '<i class="fa fa-times visible-xs"></i> Remove from List';

?>
  <?= createSiteStart($patterns['start']); ?>
    <div class="no-focus">
      <?= createHeader($patterns['header']); ?>
    </div>
    <div class="layout layout-min">
      <div class="container">

        <section class="section section-main section-box">

          <!-- REPORT HEADER -->
          <div class="report__header">

            <div class="row">

              <div class="col-md-6">

                <!-- REPORT PARTICIPANT -->
                <div class="report__participant">
                  <h2 class="report__participant-assessment">Knowledge Assessment Summary</h2>
                  <h1 class="report__participant-name">Tamara Jones</h1>
                  <div class="report__participant-meta">
                    <span>ACME General</span>
                    <span>Nursing</span>
                  </div>
                </div>
                <!-- /REPORT PARTICIPANT -->

              </div>
              <div class="col-md-6">

                <!-- REPORT SUMMARY -->
                <div class="report__summary">
                  <div class="report__summary-header">
                    <h2 class="report__summary-title">RN: Emergency Assessment</h2>
                    <div class="report__summary-actions">
                      <button class="report__summary-actions-item" title="Print"><i class="fa fa-print"></i></button>
                      <button class="report__summary-actions-item" title="Share"><i class="fa fa-share"></i></button>
                      <button class="report__summary-actions-item" title="Download"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                  <div class="report__summary-body">
                    <div class="report__summary-col">
                      <div class="report__summary-meta">
                        <span class="report__summary-label">Assigned</span><span>Jun 22, 2018</span>
                      </div>
                      <div class="report__summary-meta">
                        <span class="report__summary-label">Completed</span><span>Jun 16, 2018</span>
                      </div>
                      <div class="report__summary-meta">
                        <span class="report__summary-label">Benchmark</span><span>67%</span>
                      </div>
                    </div>
                    <div class="report__summary-col">
                      <div class="report__summary-label">Score</div>
                      <div class="report__summary-value">
                        <div class="report__summary-score">75</div>
                        <div class="report__summary-trend is-up"><i class="fa fa-arrow-up"></i></div>
                        <!-- <div class="report__summary-trend is-down"><i class="fa fa-arrow-down"></i></div> -->
                      </div>
                    </div>
                    <div class="report__summary-col">
                      <div class="report__summary-label">80th Percentile</div>
                      <div class="report__summary-chart">
                        <canvas id="chart-percentile"></canvas>
                        <div class="report__summary-chart-individual" style="left:80%"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /REPORT SUMMARY -->

              </div>

            </div>

          </div>
          <!-- /REPORT HEADER -->


          <!-- REPORT TRENDS -->
          <div class="report__trends">
            <div class="report__trends-header">
              <h3 class="report__trends-title">
                Knowledge Trends
              </h3>
              <div class="report__trends-legend">
                <div class="report__trends-legend-item">
                  <span></span> Current Results
                </div>
                <div class="report__trends-legend-item">
                  <span></span>
                  <div class="btn-group">
                    <button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                      Compare: June 23, 2017 <i class="fa fa-caret-down"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li><a href="#">None</a></li>
                      <li class="active"><a href="#">June 23, 2017</a></li>
                      <li><a href="#">June 19, 2016</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="report__trends-chart">
              <canvas id="chart-trends"></canvas>
            </div>
          </div>
          <!-- /REPORT TRENDS -->


          <!-- REPORT CATEGORIES -->
          <div class="report__categories">
            <div class="report__categories-header">
              <h3 class="report__categories-title">
                Knowledge Categories
              </h3>
              <div class="report__categories-actions">
                <div class="btn-group">
                  <button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                    Sort: Most Relevant <i class="fa fa-caret-down"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li class="active"><a href="#">Most Relevant</a></li>
                    <li><a href="#">Highest Scoring</a></li>
                    <li><a href="#">Lowest Scoring</a></li>
                  </ul>
                </div>
                <button class="btn btn-sm btn-default js-toggle-all" data-labels="Expand All|Collapse All">Expand All</button>
              </div>
            </div>
            <div class="report__categories-list">

              <div class="report__categories-item is-yellow">
                <div class="report__categories-item-summary">
                  <div class="report__categories-item-score has-bg-color">
                    <span>66%</span>
                  </div>
                  <div class="report__categories-item-title">An absurdly long category name to demonstrate how the category name will wrap across multiple lines on desktop and mobile and the bar will hold its shape.</div>
                  <div class="report__categories-item-questions">
                    <div class="report__categories-item-correct">20 of 30 Correct</div>
                    <div class="report__categories-item-bar">
                      <?php for ($i=0;$i<20;$i++) { echo '<span class="has-bg-color"></span>'; } ?>
                      <?php for ($i=0;$i<10;$i++) { echo '<span></span>'; } ?>
                    </div>
                  </div>
                  <div class="report__categories-item-toggle">
                    <button class="js-toggle-category"><i class="fa fa-chevron-down"></i></button>
                  </div>
                </div>
                <div class="report__categories-item-collapse collapse">
                  <div class="report__categories-item-detail">
                    <section class="section">
                      <h4>Recommended Learning</h4>
                      <?php

                      echo createSlat($remove_slat);
                      echo createSlat($add_slat);

                      ?>
                    </section>
                    <section class="section">
                      <h4>Feedback for Improvement</h4>
                      <ul>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                      </ul>
                    </section>
                  </div>
                </div>
              </div>

              <div class="report__categories-item is-green">
                <div class="report__categories-item-summary">
                  <div class="report__categories-item-score has-bg-color">
                    <span>88%</span>
                  </div>
                  <div class="report__categories-item-title">Category Name</div>
                  <div class="report__categories-item-questions">
                    <div class="report__categories-item-correct">21 of 24 Correct</div>
                    <div class="report__categories-item-bar">
                      <?php for ($i=0;$i<21;$i++) { echo '<span class="has-bg-color"></span>'; } ?>
                      <?php for ($i=0;$i<3;$i++) { echo '<span></span>'; } ?>
                    </div>
                  </div>
                  <div class="report__categories-item-toggle">
                    <button class="js-toggle-category"><i class="fa fa-chevron-down"></i></button>
                  </div>
                </div>
                <div class="report__categories-item-collapse collapse">
                  <div class="report__categories-item-detail">
                    <section class="section">
                      <h4>Recommended Learning</h4>
                      <?php

                      echo createSlat($add_slat);
                      echo createSlat($add_slat);

                      ?>
                    </section>
                    <section class="section">
                      <h4>Feedback for Improvement</h4>
                      <ul>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                      </ul>
                    </section>
                  </div>
                </div>
              </div>

              <div class="report__categories-item is-red">
                <div class="report__categories-item-summary">
                  <div class="report__categories-item-score has-bg-color">
                    <span>50%</span>
                  </div>
                  <div class="report__categories-item-title">Category Name</div>
                  <div class="report__categories-item-questions">
                    <div class="report__categories-item-correct">5 of 10 Correct</div>
                    <div class="report__categories-item-bar">
                      <?php for ($i=0;$i<5;$i++) { echo '<span class="has-bg-color"></span>'; } ?>
                      <?php for ($i=0;$i<5;$i++) { echo '<span></span>'; } ?>
                    </div>
                  </div>
                  <div class="report__categories-item-toggle">
                    <button class="js-toggle-category"><i class="fa fa-chevron-down"></i></button>
                  </div>
                </div>
                <div class="report__categories-item-collapse collapse">
                  <div class="report__categories-item-detail">
                    <section class="section">
                      <h4>Recommended Learning</h4>
                      <?php

                      echo createSlat($add_slat);
                      echo createSlat($add_slat);

                      ?>
                    </section>
                    <section class="section">
                      <h4>Feedback for Improvement</h4>
                      <ul>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                      </ul>
                    </section>
                  </div>
                </div>
              </div>

              <div class="report__categories-list-collapse collapse">

                <div class="report__categories-item is-red">
                  <div class="report__categories-item-summary">
                    <div class="report__categories-item-score has-bg-color">
                      <span>50%</span>
                    </div>
                    <div class="report__categories-item-title">Category Name</div>
                    <div class="report__categories-item-questions">
                      <div class="report__categories-item-correct">5 of 10 Correct</div>
                      <div class="report__categories-item-bar">
                        <?php for ($i=0;$i<5;$i++) { echo '<span class="has-bg-color"></span>'; } ?>
                        <?php for ($i=0;$i<5;$i++) { echo '<span></span>'; } ?>
                      </div>
                    </div>
                    <div class="report__categories-item-toggle">
                      <button class="js-toggle-category"><i class="fa fa-chevron-down"></i></button>
                    </div>
                  </div>
                  <div class="report__categories-item-collapse collapse">
                    <div class="report__categories-item-detail">
                      <section class="section">
                        <h4>Recommended Learning</h4>
                        <?php

                        echo createSlat($add_slat);
                        echo createSlat($add_slat);

                        ?>
                      </section>
                      <section class="section">
                        <h4>Feedback for Improvement</h4>
                        <ul>
                          <li>Lorem</li>
                          <li>Lorem</li>
                          <li>Lorem</li>
                        </ul>
                      </section>
                    </div>
                  </div>
                </div>

              </div>

              <div class="report__categories-list-toggle">
                <div></div>
                <button class="btn js-toggle-list" data-labels="Show More Categories|Show Fewer Categories">Show More Categories<i class="fa fa-chevron-down"></i></button>
              </div>

            </div>


          </div>
          <!-- /REPORT CATEGORIES -->

          <!-- /STICKY BAR - ONLY SHOW WHEN > 0 items -->
          <div class="report__sharebar" data-count="1">
            <?php
              $stickybar = array(
                'sets' => array(
                  array(
                    'position' => 'left',
                    'classes' => array(),
                    'html' => '<div class="report__sharebar-label">Recommended Learning List <span class="report__sharebar-count js-share-count">1</span></div>',
                  ),
                  array(
                    'position' => 'right',
                    'classes' => array(),
                    'html' => '<button class="btn btn-default report__sharebar-action js-share-recommendations">Share List</button>',
                  ),
                ),
              );
              echo createStickybar($stickybar);
            ?>
          </div>

        </section>

      </div>
      <!-- /container -->
    </div>
    <!-- /layout -->

    <div id="modal-share-recommendations" class="modal fade" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
            <h4 class="modal-title">Share Recommended Learning List</h4>
          </div>
          <div class="modal-body">
            <section class="section">
              <p>Sharing will send an email containing links to learning items in the catalog. </p>
            </section>
            <section class="section">
              <p>You have selected <b><span class="js-share-count">1</span> learning item(s)</b> for <b>Tamara Jones</b>:</p>
              <ul class="js-share-learning">
                <li>An example course for recommended learning</li>
              </ul>
            </section>
            <section class="section">
              <p><b>Who would you like to share this with?</b></p>
              <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" />
              </div>
            </section>
          </div>
          <div class="modal-footer">
            <button class="btn btn-success" data-dismiss="modal">Share</button> <button class="btn btn-default" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
  <script>

    // percentile chart
    $(function(){


      function makeBellCurve ( data, individual ) {

        var largest = function (values) {
          return Math.max.apply(null, values);
        }

        var average = function (values) {
          var sum = values.reduce(function(sum, value){
            return sum + value;
          }, 0);
          var avg = sum / values.length;
          return avg;
        }

        var standardDeviation = function (values) {
          var avg = average(values);
          var squareDiffs = values.map(function(value){
            var diff = value - avg;
            var sqrDiff = diff * diff;
            return sqrDiff;
          });
          var avgSquareDiff = average(squareDiffs);
          var stdDev = Math.sqrt(avgSquareDiff);
          return stdDev;
        }

        var plot = function (x, avg, stdDev) {
          var a = x - avg;
          return Math.exp(-(a * a) / (2 * stdDev * stdDev)) / (Math.sqrt(2 * Math.PI) * stdDev);
        }

        var chartData = [];
        for (var i = 1; i <= 100; i += 1) {
          var dp = plot(i, average(data), standardDeviation(data) );
          chartData.push(Math.round(dp * 100000));
        }

        var canvas = document.getElementById('chart-percentile');
        var config = {
          data: {
            labels: Array.apply(null, Array(101)).map(function (_, i) {return i;}),
            datasets: [{
              data: chartData,
              borderColor: 'rgba(81,168,224,.3)',
              borderWidth: 1,
              backgroundColor: 'rgba(81,168,224,.15)',
              pointRadius: 0,
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            tooltips: {
              enabled: false
            },
            hover: {mode: null},
            legend: {
              display: false
            },
            scales: {
              yAxes:[{
                  display:false,
                  gridLines: {
                    display:false
                  },
                  ticks: {
                    beginAtZero: true,
                    max: largest(chartData)
                  },

              }],
              xAxes:[{
                  display: false,
                  gridLines: {
                    display:false
                  },
              }]
            }
          }
        }
        Chart.Line(canvas,config);
      }

      // put in some fake data for the bell curve 100 values between 1 and 100
      var fakeData = [];
      for (var i = 1; i <= 100; i += 1) {
        fakeData.push(Math.floor(Math.random() * 100) + 1);
      }
      makeBellCurve ( fakeData, 80 );

    });

    //trend chart
    $(function(){

      var canvas = document.getElementById('chart-trends');
      var config = {
        data: {
          labels: ['Emergencies','Pharmacology','Cardiovascular','Phychiatric Treatment','Gastrointestinal'],
          datasets: [
            {
              label: 'Current Results',
              backgroundColor: '#51A8E0',
              borderColor: '#51A8E0',
              data: [60,88,90,75,50],
              fill: false,
              pointRadius: 5,
            },
            {
              label: 'Jun 23, 2017',
              backgroundColor: '#FFAA5D',
              borderColor: '#FFAA5D',
              data: [40,20,40,65,60],
              fill: false,
              pointRadius: 5,
            }
          ]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          tooltips: {
            mode: 'index',
            intersect: false,
          },
          hover: {
            mode: 'nearest',
            intersect: true
          },
          legend: false,
          scales: {
            xAxes: [{
              offset: true
            }],
            yAxes: [{
              display: true,
              ticks: {
                beginAtZero: true,
                max: 100
              },
            }]
          }
        }
      };

      Chart.Line(canvas,config);
    });

  </script>

  <script>
    $('.js-toggle-category').on('click',function(){
      var $category = $(this).closest('.report__categories-item');
      var $collapse = $category.find('.report__categories-item-collapse');

      if ( $category.hasClass('is-open') ) {
        $collapse.collapse('hide');
      } else {
        $collapse.collapse('show');
      }
      $category.toggleClass('is-open');
    });

    $('.js-toggle-all').on('click',function(){
      var $el = $(this);
      var labels = $el.attr('data-labels').split('|');
      var label = $el.text();
      var $categories = $('.report__categories-item');
      var $collapsables = $('.report__categories-item-collapse');

      if ( label === labels[0] ) {
        $collapsables.collapse('show');
        $categories.addClass('is-open');
        $el.text(labels[1]);
      } else {
        $collapsables.collapse('hide');
        $categories.removeClass('is-open');
        $el.text(labels[0]);
      }
    });

    $('.js-toggle-list').on('click',function(){
      var $el = $(this);
      var $list = $('.report__categories-list');
      var $collapse = $('.report__categories-list-collapse');
      var labels = $el.attr('data-labels').split('|');
      var label = $el.text();

      if ( label === labels[0] ) {
        $collapse.collapse('show');
        $list.addClass('is-open');
        $el.html(labels[1] + '<i class="fa fa-chevron-up"></i>');
      } else {
        $collapse.collapse('hide');
        $list.removeClass('is-open');
        $el.html(labels[0] + '<i class="fa fa-chevron-down"></i>');
      }
    });

    // HACK FOR DEMO PURPOSES ONLY
    $('.slat').on('click','.action .btn',function(e){
      var $btn = $(this);
      var $share = $('.report__sharebar');
      var count = 0;

      e.preventDefault();

      if ( $btn.hasClass('btn-default') ) {
        $btn.html('<i class="fa fa-times visible-xs"></i> Remove from List');
      } else {
        $btn.html('<i class="fa fa-plus visible-xs"></i> Add to List');
      }

      $btn.toggleClass('btn-default btn-danger');

      count = $('.slat .btn-danger').length;

      $share.attr('data-count',count);
      $('.js-share-count').text(count);
      $('.js-share-learning').html('');

      for (i=0;i<count;i++){
        $('.js-share-learning').append('<li>An example course for recommended learning</li>');
      }

      $(window).trigger('resize');

    });

    $('.js-share-recommendations').on('click',function(){
      $('#modal-share-recommendations').modal('show');
    });


  </script>


<?= createSiteEnd(); ?>