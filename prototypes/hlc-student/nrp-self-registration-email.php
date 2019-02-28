<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>HealthStream: Login</title>
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.bootstrap.css?cache=1480457232">
    <!--   <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.plugins.css?cache=1480457232">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.app.css?cache=1480457232">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.prototype.css?cache=1480457232"> -->
    <link href="http://hstm-goals.patternmanager.com/content/styles/healthstream.goals.stepper.css" rel="stylesheet" media="screen" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="http://hstm-hlc-student.patternmanager.com/authentication/src/css/style.css">
    <style>
    .login-window .branding img {

        margin-top: 10px;
    }

    ul.stepper .step.active:before,
    ul.stepper .step.done:before {
        background-color: #0E7563;
    }

    .login-window .modal-body {
        /*padding-top: 0px;*/
    }

    .form-control {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    }

    .modal {
        display: block !important;
    }

    small,
    .small {
        font-size: 85%;
    }

    small {
        text-decoration: none;
        font-weight: normal;
        font-style: italic;
    }

    .control-label small {
        font-weight: 500;
        font-style: italic;
        color: #999;
    }

    .input-group-btn {
        position: relative;
        white-space: nowrap;
    }

    .input-group-addon,
    .input-group-btn {
        width: 1%;
        white-space: nowrap;
        vertical-align: middle;
    }

    .input-group-addon,
    .input-group-btn,
    .input-group .form-control {
        display: table-cell;
    }

    .input-group-btn:last-child>.btn {
        margin-left: -1px;
    }

    .input-group .form-control:last-child,
    .input-group-addon:last-child,
    .input-group-btn:last-child>.btn,
    .input-group-btn:last-child>.dropdown-toggle,
    .input-group-btn:first-child>.btn:not(:first-child) {
        border-bottom-left-radius: 0;
        border-top-left-radius: 0;
    }

    .input-group-btn>.btn {
        position: relative;
    }

    .btn-default,
    .btn-primary,
    .btn-accent,
    .btn-focus,
    .btn-success,
    .btn-info,
    .btn-warning,
    .btn-danger,
    .btn-inverse {
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);
        -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
    }

    .btn-default {
        color: #333;
        background-color: #fff;
        border-color: #ccc;
    }

    .btn {
        display: inline-block;
        margin-bottom: 0;
        font-weight: normal;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        white-space: nowrap;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.428571429;
        border-radius: 4px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
    }

    .btn-default {
        background-image: -webkit-linear-gradient(top, #fff 0%, #e0e0e0 100%);
        background-image: linear-gradient(to bottom, #fff 0%, #e0e0e0 100%);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe0e0e0', GradientType=0);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        border-color: #dbdbdb;
        text-shadow: 0 1px 0 #fff;
        border-color: #ccc;
    }

    .fa {
        display: inline-block;
        font-family: FontAwesome;
        font-style: normal;
        font-weight: normal;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .fa-calendar:before {
        content: "\f073";
    }

    .login-window .nav-tab {
        border-bottom-color: transparent;
    }

    .nav-tabs {
        border-bottom: none !important;
    }
    .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
         font-weight: 400 !important;
    }
    </style>
</head>

<body>
    <img src="http://hstm-hlc-student.patternmanager.com/authentication/src/images/login-bg.jpg" class="bg">
    <div class="login-window modal">
        <div class="modal-header">
            <div class="branding">
                <img src="https://my.clevelandclinic.org/-/scassets/images/org/cpr/nrplogo.ashx">
            </div>

        </div>
        <div class="modal-body">


           <h2 style="margin-top:0px;margin-bottom:20px;">Check your email!</h2>
           <p>We've sent an email to <strong>yourpersonalemail@email.com</strong>.</p>
           <p>Open it up and click 'Activate Account' to start using your HealthStream NRP acount now.</p>
           <a href="#" class="">Resend Confirmation Email</a>

        </div>
        <div class="modal-footer">
            Copyright &copy;
            <?php echo date("Y"); ?> HealthStream, Inc. All Rights Reserved.
        </div>
    </div>
    <script src="http://hstm-hlc-student.patternmanager.com/authentication/src/js/jquery-1.11.1.min.js"></script>
    <script src="http://hstm-goals.patternmanager.com/scripts/jquery.easing.js"></script>
    <script src="http://hstm-goals.patternmanager.com/scripts/utilities.js"></script>
    <script src="http://hstm-goals.patternmanager.com/scripts/jquery.validate.js"></script>
    <script src="/scripts/materialize-stepper.js"></script>
    <script src="http://hstm-hlc-student.patternmanager.com/authentication/src/js/healthstream.login.js"></script>
    <script>
    $(function() {



        $('.stepper').activateStepper({
            linearStepsNavigation: false, //allow navigation by clicking on the next and previous steps on linear steppers
            autoFocusInput: true, //since 2.1.1, stepper can auto focus on first input of each step
            autoFormCreation: true, //control the auto generation of a form around the stepper (in case you want to disable it)
            showFeedbackLoader: true //set if a loading screen will appear while feedbacks functions are running
        });



        $('.stepper').closest('form').validate();












    });
    </script>
</body>

</html>