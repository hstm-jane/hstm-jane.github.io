<?php

include "includes/helpers/helpers.php";

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="ctl00_Head1">
    <title>
        Welcome to HealthStream
    </title>
    <link rel="SHORTCUT ICON" href="http://www.healthstream.com/hstm.ico" />
    <link type="text/css" href="https://login.healthstream.com/hstmsts/css/site.css" rel="Stylesheet" />
    <link href="https://login.healthstream.com/hstmsts/App_Themes/HLC/HLC.css" type="text/css" rel="stylesheet" />
    <link href="https://www.healthstream.com/hlc/common/css.ashx?t=4438cf9e-8d42-e511-9558-005056b16be3&amp;organizationID=ffffffff-ffff-ffff-ffff-000000000001" rel="stylesheet" type="text/css" />
</head>
<body class="mbody">
    	<div id="pt"></div>
    	<div id="pc">
        	<div class="container_16"><div class="ph"></div></div>
        	<div class="clear"></div>
        	<div class="container_16">
    <div class="clear"></div>
    <div class="grid_16"><h2>Sign In</h2></div>
    <div class="clear"></div>
    <div class="clear"></div>
	<div class="grid_16">
<fieldset class="content">
    <ol>
        <li>
            <label>User ID/ HealthStream ID</label>
            <input name="ctl00$content$ctrlLogin$txtUserId" type="text" id="ctl00_content_ctrlLogin_txtUserId" class="input_large" />
		    <span id="ctl00_content_ctrlLogin_rvUserIdImg" title="Please enter a user ID or HealthStream ID." style="display:none;">
			    <div class="validate-error-icon"></div>
		    </span>
        </li>
        <li>
            <label>Password</label>
            <input name="ctl00$content$ctrlLogin$txtPassword" type="password" id="ctl00_content_ctrlLogin_txtPassword" class="input_large" onKeyPress="showHideBalloon(event,this,&#39;Caps Lock is On&#39;,&#39;Having Caps Lock On may cause you to enter an incorrect password.&lt;br/>&lt;br/> You should press Caps Lock to turn it off before entering your password.&#39;,&#39;Exclaim&#39;);" AUTOCOMPLETE="OFF" />
		    <span id="ctl00_content_ctrlLogin_rvPasswordImg" title="Please enter a password." style="display:none;">
                <div class="validate-error-icon"></div>
            </span>
        </li>
        <li>
            <input type="submit" name="ctl00$content$ctrlLogin$btnLogin" id="login" value=""  accesskey="L" title="Press to log in." class="button-login" style="background:  #ffffff url('https://login.healthstream.com/hstmsts/App_Themes/HLC/en-US/Login.gif') no-repeat scroll center center " />
        </li>
    </ol>
</fieldset>
        <br />
		<a id="ctl00_content_lnkPasswordReminder" class="link-space-right" href="">Password reminder</a>
		<a id="ctl00_content_lnkFYP" class="link-space-right" href="#">Forgot your password?</a>
        <a id="ctl00_content_lnkFYP" class="link-space-right" href="#">Forgot your HealthStream ID password?</a>
		<br />
		<br />
		<br />
		<br />
		<div id="ctl00_content_pnlBottomInstructions">
</div>
    </div>
	
    <div class="clear"></div>
        	</div>
    	</div>
    	<div id="pb"></div>
    	<div id="pf">
        	Copyright © 2016 &nbsp; All Rights Reserved. <br />
        	Build 13.01.28.895.39<br />
        	O:STS3&nbsp;&nbsp;S:170.173.0.22
    	</div>
        <?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>
<script>
    $(function(){
        $('#login').click(function () {
            window.location.href = "portfolio-no-healthstream-id-summit.php?complete";
        });
    });
</script>