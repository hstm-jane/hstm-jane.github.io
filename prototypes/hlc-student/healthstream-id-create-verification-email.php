<html>
<head>
<title>Email - Healthstream</title>
</head>
<body>

<?php

include "includes/helpers/helpers.php";

?>

<style>
    body {
        background-image: url('/content/images/verification-email-background.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center 40px; 
        font-family: Helvetica,Arial,sans-serif;
        font-size:14px;
    }
    .email-content {
        margin: 260px auto;
        width: 775px;
        padding: 0px;
    }
</style>

<div class="email-content">
    <p>Hi Dana,</p>
    <p>Please click on the link below to verify your email address for HealthStream ID.</p>
    <p><a href="/healthstream-id-create-confirmation-form-forgot-password-summit.php">https://www.healthstream.com/EmailVerification.action?hash=0dfb598e485846f15a38d8145362fa7ce556fc9269d0cfe9390464407d12c499&</a></p>
    <p>Please copy the link to your browser if you are unable to click the link.</p>
    <p>If you did not sign up for HealthStream ID, please ignore this email.</p>
    <p>Sincerely, <br>
    HealthStream</p>

</div>
</body>
</html>