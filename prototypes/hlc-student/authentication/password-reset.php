<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>HealthStream: Password Reset</title>
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
            <h2>Reset Your Password</h2>
            <form>
                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="text" name="password" class="form-control required">
                    <div class="help-block">Required field</div>
                </div>
                <div class="form-group">
                    <label for="confirm">Confirm Password</label>
                    <input type="text" name="confirm" class="form-control required">
                    <div class="help-block">Passwords must match</div>
                </div>
                <div class="modal-actions">
                    <a href="login.php?updated=true" class="button button-primary" id="button-update">Submit</a>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            Copyright &copy; 2014 HealthStream, Inc. All Rights Reserved.
        </div>
    </div>
    <script src="src/js/jquery-1.11.1.min.js"></script>
    <script src="src/js/healthstream.login.js"></script>
</body>
</html>
