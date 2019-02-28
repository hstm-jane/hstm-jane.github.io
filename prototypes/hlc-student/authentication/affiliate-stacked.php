<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>HealthStream: Affiliation Selector</title>
    <link rel="stylesheet" type="text/css" href="src/css/style.css">
</head>
<body>
    <img src="src/images/login-bg.jpg" class="bg">
    <div class="login-window modal">
        <div class="modal-header">
            <div class="branding">
                <img src="src/images/logo-healthstream-large.png">
            </div>
        </div>
        <div class="modal-body">
            <div class="affiliate-group">
                <h2>Administrator</h2>
                <div class="slat slat-affiliate">
                    <label class="radio"><input type="radio" name="affiliation">GEN01 - ACME General Medical Center</label>
                </div>
                <div class="slat slat-affiliate">
                    <label class="radio"><input type="radio" name="affiliation">CORP - ACME HealthCare Enterprise</label>
                </div>
                <div class="slat slat-affiliate">
                    <label class="radio"><input type="radio" name="affiliation">GEN02 - ACME Memorial Medical Center</label>
                </div>
                <div class="slat slat-affiliate">
                    <label class="radio"><input type="radio" name="affiliation">REHAB - ACME Rehab Services</label>
                </div>
                <div class="slat slat-affiliate">
                    <label class="radio"><input type="radio" name="affiliation">HEX01 - ACME X-Press Clinic</label>
                </div>
                <div class="slat slat-affiliate">
                    <label class="radio"><input type="radio" name="affiliation">32009 - Blue Hills Hospital</label>
                </div>
            </div>
            <div class="affiliate-group">
                <h2>Student</h2>
                <div class="slat slat-affiliate">
                    <label class="radio"><input type="radio" name="affiliation">GEN01 - ACME General Medical Center</label>
                </div>
                <div class="slat slat-affiliate">
                    <label class="radio"><input type="radio" name="affiliation">CORP - ACME HealthCare Enterprise</label>
                </div>
                <div class="slat slat-affiliate">
                    <label class="radio"><input type="radio" name="affiliation">GEN02 - ACME Memorial Medical Center</label>
                </div>
                <div class="slat slat-affiliate">
                    <label class="radio"><input type="radio" name="affiliation">REHAB - ACME Rehab Services</label>
                </div>
            </div>
            <div class="modal-actions">
                <label class="checkbox"><input type="checkbox"> Make this my default selection on this computer.</label>
            </div>
            <div class="modal-actions">
                <button class="button button-primary">Login</button>
            </div>
        </div>
        <div class="modal-footer">
            Copyright &copy; 2014 HealthStream, Inc. All Rights Reserved.
        </div>
    </div>
    <script src="src/js/jquery-1.11.1.min.js"></script>
    <script src="src/js/healthstream.login.js"></script>
</body>
</html>
