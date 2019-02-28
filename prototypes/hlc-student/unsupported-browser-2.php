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
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.bootstrap.css?<?= date('U'); ?>">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.plugins.css?<?= date('U'); ?>">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.app.css?<?= date('U'); ?>">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.prototype.css?<?= date('U'); ?>">

    <script>
        function getMessage() {
            var useragent = navigator.userAgent.toLowerCase();
            var version = parseInt(useragent.split('msie')[1]);
            var mode = document.documentMode;
            var badVersion = '<table class="ubp-examples"><tr><td class="ubp-example-label">Internet<br>Explorer</td><td class="ubp-example-fail">' + version + '</td></tr></table>';
            var badMode = '<table class="ubp-examples"><tr><td class="ubp-example-label">Internet<br>Explorer</td><td class="ubp-example-pass">' + version + '</td><td class="ubp-divider">&nbsp;</td><td class="ubp-example-label">Document<br>Mode</td><td class="ubp-example-fail">' + mode + '</td></tr></table>';
            var compatibilityMode = '<table class="ubp-examples"><tr><td class="ubp-example-label">Internet<br>Explorer</td><td class="ubp-example-pass">' + mode + '</td><td class="ubp-divider">&nbsp;</td><td class="ubp-example-label">Compatibility<br>Mode</td><td class="ubp-example-fail"></td></tr></table>';
            var quirksMode = '<table class="ubp-examples"><tr><td class="ubp-example-label">Internet<br>Explorer</td><td class="ubp-example-pass">' + version + '</td><td class="ubp-divider">&nbsp;</td><td class="ubp-example-label">Quirks<br>Mode</td><td class="ubp-example-fail"></td></tr></table>';
            var message = '';

            if ( window.console ) {
                window.console.log(useragent);
                window.console.log('Browser Version: ' + version + ' | Document Mode: ' + mode);
            }

            if ( version > 7 && mode === 5 ) {
                return quirksMode + '<p class="ubp-description">Your browser settings are incompatible with our New Experience, but you can still continue with the old experience.</p>';
            }

            else if ( version < 8 && mode > 7 ) {
                return compatibilityMode + '<p class="ubp-description">Your browser settings are incompatible with our New Experience, but you can still continue with the old experience.</p>';
            }

            else if ( version < 8 ) {
                return badVersion + '<p class="ubp-description">Your browser version is incompatible with our New Experience, but you can still continue with the old experience.</p>';
            }

            else if ( mode < 8 ) {
                return badMode + '<p class="ubp-description">Your browser settings are incompatible with our New Experience, but you can still continue with the old experience.</p>';
            }

            return '';
        }
    </script>

</head>
<body>

    <div class="ubp ubp-detect">
        <div class="ubp-header">
            <div class="ubp-container">
                <div class="ubp-logo">
                    <img src="/content/images/logo-healthstream-large.png" alt="HealthStream">
                </div>
            </div>
        </div>
        <div class="ubp-content">
            <div class="ubp-container">
                <div class="ubp-message">
                    <h1>You're unable to view the New Student Experience.</h1>
                    <script>document.write(getMessage());</script>
                    <p>Please contact your Help Desk for assistance, or update your personal computer/device to a current browser.</p>
                    <button class="ubp-exit btn btn-focus">Continue with the Previous Experience</button>
                </div>
            </div>
        </div>
        <div class="ubp-footer">
            <div class="ubp-container">
                <div class="ubp-divider"></div>
                <div class="ubp-copyright">Copyright &copy; 2015 HealthStream, Inc. All Rights Reserved.</div>
            </div>
        </div>
    </div>
</body>
</html>
