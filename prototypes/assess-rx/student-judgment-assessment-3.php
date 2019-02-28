<?php

include "includes/helpers/helpers.php";

$patterns['footer']['classes'] = array('site-footer-min');

$patterns['start']['title'] = 'RN: Emergency Skills Self-Assessment';
$patterns['header']['classes'] = array('site-header-min');




$patterns['footer']['classes'] = array('site-footer-min');

?>
    <?= createSiteStart($patterns['start']); ?>
              <div class="no-focus">


            <div class="site-header ">

                <div class="container-fluid">

                   
                    <div class="branding">
                        <a href="/">
                <img src="./content/images/logo-assess-large.png" alt="HealthStream" class="logo-large">
                <img src="./content/images/logo-assess-small.png" alt="HealthStream" class="logo-small">
            </a>
                    </div>
                   
                </div>
                <!-- /container -->
      
     
            </div>
            <!-- /site-header -->
            <div class="focus focus-pageheader">
                <div class="fph-separator"></div>
                <div class="fph-table">
                    <div class="fph-row">

                        <div class="fph-cell fph-cell-text">
                            <div class="fph-primary">
                                <h1>Assessment Results</h1>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
 <style>
/*            ----Prottoype Only Styles-----*/
            .branding {
                position: static !important;
                padding-left: 20px;
            }
                      @media (max-width: 767px) {
                .judgment-assessment .chat__input-block {
                    position: fixed;
                }
                  .judgment-assessment .chat{
                    position: fixed;
                      bottom: 0;
                      max-height: auto;
                    
                 
                }
                
                .judgment-assessment .chat__message{
                    max-width: 85%;
       
                }
                          .judgment-assessment .chat__message__wrapper{
                              margin: 20px 5px;
                          }
            }
            /*            ----/End Prottoype Only Styles-----*/
        </style>


        <div class="layout layout-min">

            <div class="container-fluid">
                <section class="section section-main section-box judgment-assessment" s data-equalize="layout-columns">
                    <h2>RN: Acute Care Judgment Assessment <span class="timer">10:00</span> <p> <a href="#modal-clinical-data" data-toggle="modal" class="btn btn-default visible-xs">View Clinical Data</a></p> </h2>
                

                    <div class="row">
                        <!--analysis-->
                        <div class="col-sm-3 hidden-xs ">
                            <div class="analysis hidden-xs">
                                <h4>Analysis</h4>
                                <div class="analysis__box active">
                                    <h4>Problem</h4>
                                    <a href="#" class="tag ">
                                        Blood transfusion reaction<i class="fa fa-times"></i>
                                    </a>
                                </div>
                                <div class="analysis__box active">
                                    <h4>Observation</h4>
                                    <a href="#" class="tag animated bounceInRight">
                                        Fever<i class="fa fa-times"></i>
                                    </a> <a href="#" class="tag animated bounceInRight">
                                        Chills<i class="fa fa-times"></i>
                                    </a>
                                </div>
                                <div class="analysis__box">
                                    <h4>Action</h4>
                                </div>
                                <div class="analysis__box">
                                    <h4>Rationale</h4>
                                </div>
                            </div>
                        </div>

                        <!--chat-->
                        <div class="col-sm-6 padding-0">
                            <div class="chat">
                                <div class=" chat__message__wrapper">
                                    <div class="chat__message--system chat__message">
                                        <p>Based on the video you just watched, what is the primary problem being shown?</p>
                                        <div class="chat__message__arrow"></div>
                                    </div>
                                </div>
                                <div class=" chat__message__wrapper text-right ">
                                    <div class="chat__message--user chat__message">
                                        <p>Blood Transfusion Reaction</p>
                                        <div class="chat__message__arrow"></div>
                                    </div>
                                </div>
                                <div class=" chat__message__wrapper ">
                                    <div class="chat__message--system chat__message">
                                        <p>Why, what clinical data led you to this conclusion?</p>

                                        <div class="chat__message__arrow"></div>

                                    </div>

                                </div>
                                <div class=" chat__message__wrapper text-right animated fadeIn ">
                                    <div class="chat__message--user chat__message">
                                        <p>Fever and Chills</p>
                                        <div class="chat__message__arrow"></div>
                                    </div>
                                </div>

                               
                            </div>
                             <div class="chat__input-block">
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-label="" placeholder="Enter your answer">
                                        <div class="input-group-btn">
                                            <a href="/student-judgment-assessment-4.php" class="btn btn-success">Send <i class="fa fa-paper-plane"></i></a>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <!--summary-->
                        <div class="col-sm-3 padding-0 hidden-xs">
                            <div class="vignette-summary">
                                <h4>Clinical Summary</h4>
                                <p>Larry Farino is a 26-year-old construction worker who was severely injured when he fell from a scaffold. On admission, clinical data indicated severe blood loss. Clinical Data T 102.9 (39.4) </p>
                                <p><a href="#modal-clinical-data" data-toggle="modal" class="btn btn-default">View Clinical Data</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                </section>
                <!-- /section-main -->
            </div>
            <!-- /container -->
        </div>
        <!-- /layout -->

        <div id="modal-clinical-data" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                        <h4 class="modal-title">Mr. Farino's Clinical Data</h4>
                    </div>
                    <div class="modal-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Day 1</th>
                                    <th>Day 2</th>
                                    <th>Day 3</th>
                                </tr>


                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Temperature
                                    </td>
                                    <td>98&#176;</td>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>
                                <tr>
                                    <td>
                                        Blood Pressure
                                    </td>
                                    <td>134/78</td>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>
                                <tr>
                                    <td>
                                        P
                                    </td>
                                    <td>88
                                    </td>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>

                                <tr>
                                    <td>
                                        R
                                    </td>
                                    <td>18</td>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>
                                <tr>
                                    <td>
                                        Blood Glucose
                                    </td>
                                    <td>--
                                    </td>
                                    <td>360</td>
                                    <td>620</td>
                                </tr>
                                <tr>
                                    <td>
                                        BUN
                                    </td>
                                    <td>--
                                    </td>
                                    <td>19</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>
                                        Na
                                    </td>
                                    <td>--
                                    </td>
                                    <td>137</td>
                                    <td>142</td>
                                </tr>
                                <tr>
                                    <td>
                                        Cl
                                    </td>
                                    <td>--
                                    </td>
                                    <td>101</td>
                                    <td>5.8</td>
                                </tr>
                                <tr>
                                    <td>
                                        CO<small>2</small>
                                    </td>
                                    <td>--
                                    </td>
                                    <td>22</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>
                                        Hgb/Hct
                                    </td>
                                    <td>--
                                    </td>
                                    <td>16.4/50</td>
                                    <td>18</td>
                                </tr>
                                <tr>
                                    <td>
                                        Urine Ketones
                                    </td>
                                    <td>--
                                    </td>
                                    <td>mod.</td>
                                    <td>large</td>
                                </tr>
                            </tbody>

                        </table>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success js-btn-assign-employee" data-dismiss="modal">Close</button>

                    </div>
                </div>

            </div>

        </div>



        <?= createFooter($patterns['footer']); ?>
            <?= createPrototypeNav(); ?>
                <?= createSiteScripts(); ?>
                    <script>
                        // Update the count down every 1 second
                        var timer2 = "10:01";
                        var interval = setInterval(function() {
                            var timer = timer2.split(':');
                            //by parsing integer, I avoid all extra string processing
                            var minutes = parseInt(timer[0], 10);
                            var seconds = parseInt(timer[1], 10);
                            --seconds;
                            minutes = (seconds < 0) ? --minutes : minutes;
                            if (minutes < 0) clearInterval(interval);
                            seconds = (seconds < 0) ? 59 : seconds;
                            seconds = (seconds < 10) ? '0' + seconds : seconds;
                            //minutes = (minutes < 10) ?  minutes : minutes;
                            $('.timer').html(minutes + ':' + seconds + ' <i class="fa  fa-clock-o"></i>');
                            timer2 = minutes + ':' + seconds;
                        }, 1000);
                        var elementPosition = $('.section-progress:visible').offset();
                    </script>
                    <?= createSiteEnd(); ?>