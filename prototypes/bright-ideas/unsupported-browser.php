<?php
    $theme = (!empty($_GET['theme']))?$_GET['theme']:'blue';
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
    ================================================== -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>HealthStream | Unsupported Browser</title>

    <!-- Styles
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="./content/styles/healthstream.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./content/styles/healthstream.plugins.css">
    <link rel="stylesheet" type="text/css" href="./content/styles/healthstream.app.css">

</head>
<body>

    <div class="ubp">
        <div class="ubp-header">
            <div class="ubp-container">
                <div class="ubp-logo">
                    <img src="./content/images/logo-healthstream-large.png" alt="HealthStream">
                </div>
            </div>
        </div>
        <div class="ubp-content">
            <div class="ubp-container">
                <div class="ubp-message">
                    <h1>Your browser doesn't meet the minimum requirements</h1>
                    <ul>
                        <li>You are using Explorer [version #] with an unsupported document mode [doc mode].</li>
                        <noscript>
                        <li>You do not have javascript enabled.</li>
                        </noscript>
                    </ul>
                    <p>Please contact your Help Desk for assistance, or update your personal computer/device to a current browser.</p>
                    <button class="ubp-exit btn btn-focus">Continue <i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
        <div class="ubp-footer">
            <div class="ubp-container">
                <div class="ubp-divider"></div>
                <div class="ubp-logo">
                    <img src="./content/images/logo-healthstream-large.png" alt="HealthStream">
                </div>
                <div class="ubp-copyright">Copyright &copy; 2014 HealthStream, Inc. All Rights Reserved.</div>
            </div>
        </div>
    </div>



</body>
</html>
