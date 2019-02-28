<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>HealthStream: Login</title>
<!-- <link rel="SHORTCUT ICON" href="http://www.healthstream.com/hstm.ico" /> -->
<!-- <link type="text/css" href="css/site.css" rel="Stylesheet" /> -->
<link type="text/css" href="src/css/site-old.css" rel="Stylesheet" />
<!-- <link href="App_Themes/HLC/HLC.css" type="text/css" rel="stylesheet" /> -->
<link href="src/css/HLC-theme-old.css" type="text/css" rel="stylesheet" />
<!-- <link href="https://www.healthstream.com/hlc/common/css.ashx?t=4438cf9e-8d42-e511-9558-005056b16be3&amp;organizationID=ffffffff-ffff-ffff-ffff-000000000001" rel="stylesheet" type="text/css" /></head> -->
<link href="src/css/ashx-old.css" type="text/css" rel="stylesheet" />


<body class="mbody">


        <div id="pt"></div>
        <div id="pc">
            <div class="container_16"><div class="ph"></div></div>
            <div class="clear"></div>

            <?php if(isset($_GET['link'])) { ?>
            <div class="container_16 link-body">
            <?php } else { ?>
            <div class="container_16 link-body collapse">
            <?php } ?>


                <h2>Link to hStream</h2>
                   <div class="form-group"></div>
                   <fieldset class="content">
                       <ol>
                       <li>
                       <h4>Almost Done!</h4><br> Enter your <strong>HLC</strong> username and password to link to your new <strong>hStream</strong> account.
                       </li>
                           <li>
                               <span id="ctl00_content_ctrlLogin_lblUserId">User ID</span>
                               <br />
                               <input name="ctl00$content$ctrlLogin$txtUserId" type="text" id="ctl00_content_ctrlLogin_txtUserId" class="input_large" />
                               <span id="ctl00_content_ctrlLogin_rvUserIdImg" title="Please enter a user ID." style="display:none;">
                                   <div class="validate-error-icon"></div>
                               </span>
                           </li>
                           <li>
                               <span id="ctl00_content_ctrlLogin_lblPassword">Password<span id="ctl00_content_ctrlLogin_rvPasswordLbl" class="validate-error" style="display:none;">Please enter a password.</span></span>
                               <br/>
                               <input name="ctl00$content$ctrlLogin$txtPassword" type="password" id="ctl00_content_ctrlLogin_txtPassword" class="input_large" onKeyPress="showHideBalloon(event,this,&#39;Caps Lock is On&#39;,&#39;Having Caps Lock On may cause you to enter an incorrect password.&lt;br/>&lt;br/> You should press Caps Lock to turn it off before entering your password.&#39;,&#39;Exclaim&#39;);" AUTOCOMPLETE="OFF" />
                               <span id="ctl00_content_ctrlLogin_rvPasswordImg" title="Please enter a password." style="display:none;">
                                   <div class="validate-error-icon"></div>
                               </span>
                           </li>
                           <li>
                              <!--  <input type="submit" name="ctl00$content$ctrlLogin$btnLogin" value="" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$content$ctrlLogin$btnLogin&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_content_ctrlLogin_btnLogin" accesskey="L" title="Press to log in." class="button-login" style="background:  #ffffff url(src/images/Login.gif) no-repeat scroll center center " /> -->
                              <button class="button-big button-primary" id="button-reset">Link Accounts</button>
                              <button class="button-big button-default" id="button-reset-cancel">Cancel</button>
                           </li>
                       </ol>
                   </fieldset>
            </div>

            <?php if(isset($_GET['link'])) { ?>
            <div class="container_16 login-body collapse">
            <?php } else { ?>
            <div class="container_16 login-body ">
            <?php } ?>

    
    <div class="clear"></div>
    <div class="grid_16">
        <h2>Sign In</h2>
    </div>
    <div class="clear"></div>
    
    <div class="clear"></div>
    <div class="grid_8">
        
<fieldset class="content">
    <ol>
        <li>
            <span id="ctl00_content_ctrlLogin_lblUserId">User ID</span>
            <br />
            <input name="ctl00$content$ctrlLogin$txtUserId" type="text" id="ctl00_content_ctrlLogin_txtUserId" class="input_large" />
            <span id="ctl00_content_ctrlLogin_rvUserIdImg" title="Please enter a user ID." style="display:none;">
                <div class="validate-error-icon"></div>
            </span>
        </li>
        <li>
            <span id="ctl00_content_ctrlLogin_lblPassword">Password<span id="ctl00_content_ctrlLogin_rvPasswordLbl" class="validate-error" style="display:none;">Please enter a password.</span></span>
            <br/>
            <input name="ctl00$content$ctrlLogin$txtPassword" type="password" id="ctl00_content_ctrlLogin_txtPassword" class="input_large" onKeyPress="showHideBalloon(event,this,&#39;Caps Lock is On&#39;,&#39;Having Caps Lock On may cause you to enter an incorrect password.&lt;br/>&lt;br/> You should press Caps Lock to turn it off before entering your password.&#39;,&#39;Exclaim&#39;);" AUTOCOMPLETE="OFF" />
            <span id="ctl00_content_ctrlLogin_rvPasswordImg" title="Please enter a password." style="display:none;">
                <div class="validate-error-icon"></div>
            </span>
        </li>
        <li>
           <!--  <input type="submit" name="ctl00$content$ctrlLogin$btnLogin" value="" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$content$ctrlLogin$btnLogin&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_content_ctrlLogin_btnLogin" accesskey="L" title="Press to log in." class="button-login" style="background:  #ffffff url(src/images/Login.gif) no-repeat scroll center center " /> -->
           <button class="button-big button-primary" id="">Sign In</button>

        </li>
    </ol>
</fieldset>


        <br />
        <a id="ctl00_content_lnkPasswordReminder" class="link-space-right" href="javascript:__doPostBack(&#39;ctl00$content$lnkPasswordReminder&#39;,&#39;&#39;)">Password reminder</a>
        <a id="ctl00_content_lnkFYP" class="link-space-right" href="javascript:__doPostBack(&#39;ctl00$content$lnkFYP&#39;,&#39;&#39;)">Forgot your password?</a>
        
        <p />
        <br />
        
        <br />
        <br />
        
        <br />
        <br />
        <div id="ctl00_content_pnlBottomInstructions">
    
            
        
</div>
    </div>
    <div class="grid_8">
        <div class="login-with-hstream-old">
            <button class="button button-default button-block button-hstream" href="#"><div class="button-hstream-logo"><img src="src/images/hstream-logo.png"/></div><div class="button-hstream-text">Sign in with hStream</div></button>
        </div>
        <a id="ctl00_content_lnkReturn" href="http://www.bing.com">Click Here for Login Instructions</a>
        
    </div>
    <div class="clear"></div>

            </div>
        </div>
        <div id="pb"></div>
        <div id="pf">
            Copyright © 2017 &nbsp; All Rights Reserved. <br />
            Build 13.01.28.895.52<br />
            
            <div>
                O:STS2&nbsp;&nbsp;S:73.119.152.119
            </div>
            
        </div>
        <!-- <script type="text/javascript" src="/HSTMSTS/scripts/jquery-1.5.1.min.js"></script> -->
        <script type="text/javascript" src="src/js/jquery-1.11.1.min.js"></script>
        <!-- <script type="text/javascript" src="/HSTMSTS/scripts/jquery.formalize.min.js"></script> -->


        
<!--     
<script type="text/javascript">

var Page_Validators =  new Array(document.getElementById("ctl00_content_ctrlLogin_rvUserIdImg"), document.getElementById("ctl00_content_ctrlLogin_rvPasswordLbl"), document.getElementById("ctl00_content_ctrlLogin_rvPasswordImg"));

</script>

<script type="text/javascript">

var ctl00_content_ctrlLogin_rvUserIdImg = document.all ? document.all["ctl00_content_ctrlLogin_rvUserIdImg"] : document.getElementById("ctl00_content_ctrlLogin_rvUserIdImg");
ctl00_content_ctrlLogin_rvUserIdImg.controltovalidate = "ctl00_content_ctrlLogin_txtUserId";
ctl00_content_ctrlLogin_rvUserIdImg.display = "Dynamic";
ctl00_content_ctrlLogin_rvUserIdImg.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_content_ctrlLogin_rvUserIdImg.initialvalue = "";
var ctl00_content_ctrlLogin_rvPasswordLbl = document.all ? document.all["ctl00_content_ctrlLogin_rvPasswordLbl"] : document.getElementById("ctl00_content_ctrlLogin_rvPasswordLbl");
ctl00_content_ctrlLogin_rvPasswordLbl.controltovalidate = "ctl00_content_ctrlLogin_txtPassword";
ctl00_content_ctrlLogin_rvPasswordLbl.errormessage = "Please enter a password.";
ctl00_content_ctrlLogin_rvPasswordLbl.display = "Dynamic";
ctl00_content_ctrlLogin_rvPasswordLbl.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_content_ctrlLogin_rvPasswordLbl.initialvalue = "";
var ctl00_content_ctrlLogin_rvPasswordImg = document.all ? document.all["ctl00_content_ctrlLogin_rvPasswordImg"] : document.getElementById("ctl00_content_ctrlLogin_rvPasswordImg");
ctl00_content_ctrlLogin_rvPasswordImg.controltovalidate = "ctl00_content_ctrlLogin_txtPassword";
ctl00_content_ctrlLogin_rvPasswordImg.display = "Dynamic";
ctl00_content_ctrlLogin_rvPasswordImg.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_content_ctrlLogin_rvPasswordImg.initialvalue = "";

</script>


<script type="text/javascript">


var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}

function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
      
</script> -->
<!-- <script type='text/javascript' src='/hstmsts/scripts/PopupBalloon.js'></script><script type='text/javascript'>var balloon=new JSB({width:275});function showHideBalloon(e,obj,balloonTitle,balloonText,balloonIcon){try{if(capsLockOnCheck(e)){balloon.Show({title:balloonTitle,message:balloonText,left:obj.offsetWidth-10,anchor:obj,icon:balloonIcon});}else{balloon.Hide();}}catch(ex){}obj.focus();}</script> -->
<!-- <script type="text/javascript">
WebForm_AutoFocus('ctl00_content_ctrlLogin_txtUserId');
document.getElementById('ctl00_content_ctrlLogin_rvUserIdImg').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_content_ctrlLogin_rvUserIdImg'));
}

document.getElementById('ctl00_content_ctrlLogin_rvPasswordLbl').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_content_ctrlLogin_rvPasswordLbl'));
}

document.getElementById('ctl00_content_ctrlLogin_rvPasswordImg').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_content_ctrlLogin_rvPasswordImg'));
}
</script> -->
<!-- </form> -->
</body>
</html>
