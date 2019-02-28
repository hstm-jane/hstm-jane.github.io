<?php

include "includes/helpers/helpers.php";
$patterns['start']['title'] = 'RN: Emergency Skills Self-Assessment';
$patterns['header']['classes'] = array('site-header-min');
$patterns['header']['logoLarge'] = './content/images/logo-assess-large.png';
$patterns['footer']['classes'] = array('site-footer-min');

?>
    <?= createSiteStart($patterns['start']); ?>
    <?= createHeader($patterns['header']); ?>

        <style>

            .site-header-min {
                border-bottom: 5px solid #09c;
            }

            .layout-min {
                border-bottom: 5px solid #09c;
                margin-bottom: 20px;
                padding-bottom: 0;
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
                opacity: .44;
                margin: 20px 10px 10px 0;
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
                padding:10px
            }

            .chat__message {
                border-radius: 5px;
                width: auto;
                max-width:45%;
                padding-top:10px;

            }
            .chat__message p{
                padding:5px 20px;
                margin-bottom: 0
            }
            .chat__message--user {}

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

            .chat__message--system__arrow{
                width: 0;
                height: 0;
                border: 0 solid transparent;
                border-left-width: 0px;
                border-right-width: 30px;
                border-top: 21px solid #37A2C5;
                position:relative;
                top:15px;
            }

            .vignette-summary {
                background-color: #757474;
                min-height: 600px;
                padding: 10px;
                color: white;
            }

            .timer {
                color: white;
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
                                <h4>Analysis</h4>
                                <div class="analysis__box active">
                                    <h4>Problem</h4>
                                </div>
                                <div class="analysis__box">
                                    <h4>Observation</h4>
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
                        <div class="col-md-6 padding-0">
                            <div class="chat">
                                <div class="chat__message--system chat__message animated fadeIn"><p>Let's see how we can help Mr. Farino. What is his primary problem? </p><div class="chat__message--system__arrow"></div></div>
                                <div class="chat__input-block">
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-label="" placeholder="Enter your answer">
                                        <div class="input-group-btn">
                                            <a href="/demo-student-assessment-acute-care-judgement-response.php" class="btn btn-success">Send <i class="fa fa-paper-plane"></i></a>
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
                                <p><a href="#">View Mr. Farino's Clinical Data</a></p>
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

            $('.branding a').click(function(e){
                e.preventDefault();
                window.location.href="/demo-start.php";
              });
        </script>
        <?= createSiteEnd(); ?>