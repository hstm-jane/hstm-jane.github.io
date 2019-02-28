<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>HealthStream: Login</title>
    <link rel="stylesheet" type="text/css" href="src/css/style.css">
</head>
<body>
    <?php
    $persona = (!empty($_GET['persona']))?intval($_GET['persona']):1;
    ?>


    <input type="hidden" value='<?= $persona ?>' id="persona-field"/>
    <input type="hidden" value='<?= $_SERVER['HTTP_HOST'] ?>' id="http-host" />
    <img src="src/images/login-bg.jpg" class="bg">

    <div class="login-window modal">
        <div class="modal-header">
            <div class="branding">
                <img src="src/images/logo-healthstream-large.png">
            </div>
            <div class="nav-tabs">
                <a href="#tab-signin" class="nav-tab selected">Sign In</a>
                <a href="#tab-instructions" class="nav-tab">Instructions</a>
            </div>
        </div>
        <div class="modal-body">
            <div class="tab-content">
            <?php if(isset($_GET['link'])) { ?>
                <div id="tab-signin" class="tab-pane ">
            <?php } else { ?>
                <div id="tab-signin" class="tab-pane selected">
            <?php } ?>
                    <div id="alert-reminder" class="alert alert-info">
                        <strong>Password reminder:</strong> it's password.
                    </div>
                    <div id="alert-reset" class="alert alert-info">
                        Instructions for reseting your password have been sent to your email.
                    </div>
                    <div id="alert-unauthorized" class="alert alert-error">
                        The user ID was not found in this organization.
                    </div>
                    <div id="alert-reset-updated" class="alert alert-success<?php if( !empty($_GET['updated'])){ echo " active"; } ?>">
                        You have successfully changed your password. Please sign in.
                    </div>
                    <div class="login-with-hstream-new">
                        <button class="button button-default button-block button-hstream" href="#"><div class="button-hstream-logo"><img src="src/images/hstream-logo.png"/></div><div class="button-hstream-text">Sign in with hStream</div></button>
                        <div class="login-or">or</div>

                    </div>
                    <form class="signin-form">
                        <div class="form-group">
                            <label for="username" class="control-label">User ID</label>
                            <input type="text" name="username" class="form-control required">
                            <div class="help-block">Please enter a username</div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" name="password" class="form-control required">
                            <div class="help-block">Please enter a password</div>
                            <div class="nav-password">
                                <a href="#" class="pw-reminder">Reminder</a>
                                <a href="#" class="pw-reset">Reset</a>
                            </div>
                        </div>
                        <div class="nav-buttons">
                            <a href="hstream.hlc.php" class="button button-primary" id="button-login">Sign In</a>
                            <button class="button button-default">Create account</button>
                        </div>
                       <!--  <div class="nav-link">
                            <a href="#">Admin-entered display text for link</a>
                        </div> -->
                    </form>
                </div>
                <div id="tab-instructions" class="tab-pane ">
                    <div class="wysiwyg">
                    Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.

                    Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.

                    Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.

                    Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.

                    Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products.

                    Phosfluorescently engage worldwide methodologies with web-enabled technology. Interactively coordinate proactive e-commerce via process-centric "outside the box" thinking. Completely pursue scalable customer service through sustainable potentialities.

                    Collaboratively administrate turnkey channels whereas virtual e-tailers. Objectively seize scalable metrics whereas proactive e-services. Seamlessly empower fully researched growth strategies and interoperable internal or "organic" sources.

                    Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas with optimal networks.

                    Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme areas via accurate e-markets.

                    Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications. Quickly drive clicks-and-mortar catalysts for change before vertical architectures
                    </div>
                </div>
                <div id="tab-password-reset" class="tab-pane">
                    <form>
                        <div class="form-group">
                            To reset your password, please enter your User ID or Email Address
                        </div>
                        <div class="form-group">
                            <label for="username" class="left">User ID</label>
                            <input type="text" name="username" class="form-control required">
                        </div>
                        <div class="reset-or">OR</div>
                        <div class="form-group">
                            <label for="email-address">Email Address</label>
                            <input type="text" name="email-adress" class="form-control required">
                        </div>
                        <div class="modal-actions">
                            <button class="button button-primary" id="button-reset">Submit</button>
                            <button class="button button-default" id="button-reset-cancel">Cancel</button>
                        </div>
                    </form>
                </div>
                <?php if(isset($_GET['link'])) { ?>
                    <div id="tab-link-account" class="tab-pane selected link-account-tab">
                <?php } else { ?>
                    <div id="tab-link-account" class="tab-pane link-account-tab">
                <?php } ?>
                    <form>
                    <h2>Link to hStream</h2>
                       <div class="form-group"><h4>Almost Done!</h4> Enter your <strong>HLC</strong> username and password to link to your new <strong>hStream</strong> account.</div>
                        <div class="form-group">
                            <label for="username" class="left">User ID</label>
                            <input type="text" name="username" class="form-control required">
                        </div>
                        <!-- <div class="reset-or">OR</div> -->
                       <div class="form-group">
                          <label for="password" class="control-label">Password</label>
                          <input type="password" name="password" class="form-control required">
                          <div class="help-block">Please enter a password</div>
                          <div class="nav-password">
                              <a href="#" class="pw-reminder">Reminder</a>
                              <a href="#" class="pw-reset">Reset</a>
                          </div>
                      </div>
                        <div class=" form-group">
                            <button class="button button-primary" id="button-reset">Link Accounts</button>
                            <button class="button button-default" id="button-reset-cancel">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            Copyright &copy; <?php echo date('Y') ?> HealthStream, Inc. All Rights Reserved.
        </div>
    </div>
    <script src="src/js/jquery-1.11.1.min.js"></script>
    <script src="src/js/healthstream.login.js"></script>

    <script>
        $(function(){

        $('.button-hstream').click(function() {

            var url = 'http://hstm-sail-hstream-auth.patternmanager.com/signin-popup.php?persona=' + $('#persona-field').val();
            var title = 'LoginWithHStream';
            var w = '400';
            var h = '550';

            // Fixes dual-screen position                         Most browsers      Firefox
               // var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
               // var dualScreenTop = window.screenTop != unde fined ? window.screenTop : screen.top;

               var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
               var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

               // var left = ((width / 2) - (w / 2)) + dualScreenLeft + 75;
               // var top = ((height / 2) - (h / 2)) + dualScreenTop;
               var left = ((width / 2) - (w / 2))  + 75;
               var top = ((height / 2) - (h / 2)) ;
               console.log(top);
               var newWindow = window.open(url, title, 'toolbar=0,menubar=0,location=0,status=0,scrollbars=0, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

               // Puts focus on the newWindow
               if (window.focus) {
                   newWindow.focus();
               }


        });
    });


    </script>

</body>
</html>
