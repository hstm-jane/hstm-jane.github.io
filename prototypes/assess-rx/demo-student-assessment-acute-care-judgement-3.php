<?php

include "includes/helpers/helpers.php";
$patterns['start']['title'] = 'RN: Emergency Skills Self-Assessment';
$patterns['header']['classes'] = array('site-header-min');
$patterns['header']['logoLarge'] = './content/images/logo-assess-large.png';
$patterns['footer']['classes'] = array('site-footer-min');

?>
<?= createSiteStart($patterns['start']); ?>
    <div class="no-focus">
    <?= createHeader($patterns['header']); ?>
    </div>
        <style>

            .container {
                max-width: 100% !important;
            }

            .section-main h1,
            .section-main h2,
            .section-main h3,
            .section-main h4 {
                color: white !important;
                font-weight: normal;
            }

            .analysis {
                padding: 10px
            }

            .analysis__box {
                background-color: white;
                border-radius: 4px;
                min-height: 100px;
                opacity: .7;
                margin: 20px 10px 10px 0;
                padding: 0 7px 7px;
                cursor: pointer;
            }

            .analysis__box.active {
                opacity: 1;
            }

            .analysis__box h4 {
                color: #555 !important;
                padding: 10px;
                border-bottom: 1px solid #333;
            }

            .padding-0 {
                padding-right: 0;
                padding-left: 0;
            }


            .chat {
                background-color: #ebebeb;
                min-height: 600px;
                position: relative;
                padding: 10px;
                padding-bottom: 70px;
            }

            .chat__message__wrapper {
                margin: 10px auto;
            }

            .chat__message {
                border-radius: 5px;
                width: auto;
                max-width: 45%;
                padding: 10px;
                text-align: left;

            }

            .chat__message p {

                margin-bottom: 0
            }

            .chat__message--user {
                background-color: #9B9B9B;
                margin-left: auto;
                margin-right: 0;
                color: white;
            }

            .chat__message--system {

                background-color: #37A2C5;
                color: white;
            }

            .chat__input-block {
                background-color: #D8D8D8;
                width: 100%;
                position: absolute;
                bottom: 0;
                padding: 7px;
                left: 0;


            }

            .chat__message--system .chat__message__arrow {
                width: 0;
                height: 0;
                border: 0 solid transparent;
                border-left-width: 0px;
                border-right-width: 30px;
                border-top: 21px solid #37A2C5;
                position: relative;
                top: 1px;
                left: -10px;
                float: left;
            }

            .chat__message--user .chat__message__arrow {
                width: 0;
                height: 0;
                border: 0 solid transparent;
                border-left-width: 30px;
                border-right-width: 0px;
                border-top: 21px solid #9B9B9B;
                position: relative;
                top: 1px;
                float: right;
                right: -10px;
            }

            .vignette-summary {
                background-color: #757474;
                min-height: 600px;
                padding: 10px;
                color: white;
            }

            .timer {
                color: white;
                float: right;
            }

            .padding-0 {
                padding: 0;
            }
        </style>

        <div class="layout layout-min">

            <div class="container-fluid">
                <section class="section section-main section-box" style="background: #333; " data-equalize="layout-columns">
                    <h2 style="background-color: #333;">RN: Acute Care Judgment Assessment <span class="timer">5:00</span> </h2>

                    <div class="row">
                        <!--analysis-->
                        <div class="col-md-3">
                            <div class="analysis">
                                <h4 class="hidden-xs">Analysis</h4>
                                <div class="analysis__box active hidden-xs">
                                    <h4>Problem</h4>
                                    <a href="#" class="tag">
                                        Blood transfusion reaction<i class="fa fa-times"></i>
                                    </a>
                                </div>

                                <div class="analysis__box active hidden-xs">
                                    <h4>Observation</h4>
                                    <a href="#" class="tag animated bounceInRight">
                                        Fever<i class="fa fa-times"></i>
                                    </a>
                                    <a href="#" class="tag animated bounceInRight">
                                        Chills<i class="fa fa-times"></i>
                                    </a>
                                </div>
                                <div class="analysis__box active hidden-xs">
                                    <h4>Action</h4>
                                </div>
                                <div class="analysis__box hidden-xs">
                                    <h4>Rationale</h4>
                                </div>
                            </div>
                        </div>

                        <!--chat-->
                        <div class="col-md-6 padding-0">
                            <div class="chat">
                                <div class=" chat__message__wrapper">
                                    <div class="chat__message--system chat__message">
                                        <p>Based on the video you just watched, what is the primary problem being shown?</p>
                                        <div class="chat__message__arrow"></div>
                                    </div>
                                </div>
                                <div class=" chat__message__wrapper text-right">
                                    <div class="chat__message--user chat__message">
                                        <p>Blood transfusion reaction</p>
                                        <div class="chat__message__arrow"></div>
                                    </div>
                                </div>
                                <div class="chat__message__wrapper ">
                                    <div class=" chat__message--system chat__message">
                                        <p>Why, what clinical data led you to this conclusion?</p>
                                        <div class="chat__message__arrow"></div>
                                    </div>
                                </div>
                                <div class=" chat__message__wrapper text-right animated fadeIn">
                                    <div class="chat__message--user chat__message">
                                        <p>Fever and Chills</p>
                                        <div class="chat__message__arrow"></div>
                                    </div>
                                </div>
                                <div class="chat__message__wrapper ">
                                    <div class=" chat__message--system chat__message animated fadeIn">
                                        <p>What actions would you take to resolve this problem?</p>
                                        <div class="chat__message__arrow"></div>
                                    </div>
                                </div>
                                <div class="chat__input-block">
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-label="" placeholder="Enter your answer">
                                        <div class="input-group-btn">
                                            <a href="/demo-student-assessment-acute-care-judgement-4.php" class="btn btn-success">Send <i class="fa fa-paper-plane"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!--summary-->
                        <div class="col-md-3 padding-0">
                            <div class="vignette-summary">
                                <h4>Summary</h4>
                                <p>Larry Farino is a 26-year-old construction worker who was severely injured when he fell from a scaffold. On admission, clinical data indicated severe blood loss. Clinical Data T 102.9 (39.4)</p>
                                <p><a href="#modal-clinical-data" data-toggle="modal" style="color:#82DCF9; ">View Mr. Farino's Clinical Data</a></p>
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

            </section>
        </div>
        </div>
        </div>
        </div>



        <?= createFooter($patterns['footer']); ?>
            <?= createPrototypeNav(); ?>
                <?= createSiteScripts(); ?>
                    <script>
                        // Update the count down every 1 second
                        var timer2 = "5:01";
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

                        //scroll to chosen filter
                        $(window).scroll(function() {

                            var elementWidth = $('.section-progress:visible').parent().width();

                            if ($(window).scrollTop() > elementPosition.top) {
                                $('.section-progress:visible').css({
                                    'position': 'fixed',
                                    'top': '0',
                                    'width': elementWidth,
                                    'margin-top': '0',
                                    'z-index': '5'
                                });
                                $('form').css({
                                    'margin-top': '145px',
                                    'display': 'block'
                                });
                                $('.stickybar').css('padding-top', '90px');
                            } else {
                                $('.section-progress:visible').css({
                                    'position': 'static',
                                    'width': 'auto'
                                });
                                $('form').css({
                                    'margin-top': 'auto',
                                    'display': 'inline'
                                });

                            }

                            $(window).resize();

                       });

                        $('.branding a').click(function(e){
                        e.preventDefault();
                        window.location.href="/demo-start.php";
                      });
                    </script>
                    <?= createSiteEnd(); ?>