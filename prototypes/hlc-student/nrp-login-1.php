

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>NRP Login</title>
<style>body{color:#555;font-family:Arial,Helvetica,sans-serif}.button{padding:10px 16px;font-size:16px;line-height:1.33;border-radius:6px;display:inline-block;margin-bottom:0;font-weight:400;text-align:center;vertical-align:middle;cursor:pointer;background-image:none;white-space:nowrap;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none;text-decoration:none}.leading,h4{font-weight:600}.button-default{background-image:-webkit-linear-gradient(top,#fff 0,#e0e0e0 100%);background-image:linear-gradient(to bottom,#fff 0,#e0e0e0 100%);filter:progid: DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe0e0e0', GradientType=0);filter:progid: DXImageTransform.Microsoft.gradient(enabled=false);background-repeat:repeat-x;border:1px solid #dbdbdb;text-shadow:0 1px 0 #fff;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075);color:#555}.options{margin:0 0 0 10px;border:1px solid #ddd;padding:8px;font-size:14px;color:#555;width:400px}h4{margin-bottom:7px}p{margin-top:5px}.button-primary{background-image:-webkit-linear-gradient(top,#5cb85c 0,#419641 100%);background-image:linear-gradient(to bottom,#5cb85c 0,#419641 100%);filter:progid: DXImageTransform.Microsoft.gradient(startColorstr='#ff5cb85c', endColorstr='#ff419641', GradientType=0);filter:progid: DXImageTransform.Microsoft.gradient(enabled=false);background-repeat:repeat-x;border:1px solid #3e8f3e;background-color:#5cb85c;color:#fff;text-shadow:1px 1px 0 #357935;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075)}.leading{font-size:24px;color:#008FC5}.form-control{width:400px;height:35px;padding:6px 16px;background-color:#fff;border:1px solid #dde6e9;border-radius:4px;-webkit-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;font-size:14px;box-shadow:0 0 0 #000!important}.btn,:focus,a{outline:0!important}.form-control:focus{border-color:#66afe9;outline:0}
</style>
<script>
    function showHelp(item) {
        var elem = document.getElementById("" + item.value + "");
        document.getElementById("showValue2").innerHTML=elem.innerHTML;
    }
</script>
</head>
<p class="leading">Need Help?</p>
<form name="theform" onsubmit="CheckForm()">
<select class="form-control" onchange="showHelp(this);">
    <option>Select a role</option>
    <option value="studentfirsttime">First time student for NRP exam</option>
    <option value="studentreturning">Returning student for NRP exam</option>
    <option value="instrenewal">I need the NRP Instructor Renewal Bundle</option>
    <option value="instschedule">I need to schedule an Instructor-Led Event</option>
</select>
<div id="studentfirsttime" style="display:none;"><h4>1. Remember to Study!</h4>
    <p>Review the <a href="#">7th Edition Textbook</a> prior to taking the online curriculum.</p>
    <h4>2. <a href="https://qax8y5.axshare.com/firewall_check_-_start.html" target="_blank">Test My Connection</a></h4>
    <p>...to ensure you can view the eSim Cases (to make sure they're not blocked by your organization's firewall.) Opens in a new tab.</p>
    <h4>3. Sign Up Below</h4>
    <p>Next, you'll create a User ID and Password, plus add your license info.</p>
    <p>Once you do you'll be taken to the 7th Edition NRP Provider Curriculum in the Catalog.</p>
    <p>Ready?</p>
    <a href="nrp-self-registration.php" class="button button-primary">Sign Up</a>
</div>
<div id="studentreturning" style="display:none;">
    <h4>1. Remember to Study!</h4>
    <p>Review the <a href="#">7th Edition Textbook</a> prior to taking the online curriculum.</p>
    <h4>2. <a href="https://qax8y5.axshare.com/firewall_check_-_start.html" target="_blank">Test My Connection</a></h4>
    <p>...to ensure you can view the eSim Cases (to make sure they're not blocked by your organization's firewall.) Opens in a new tab.</p>
    <h4>3. Sign Up Below</h4>
    <p>Next, you'll create a User ID and Password, plus add your license info.</p>
    <p>Once you do you'll be taken to the 7th Edition NRP Provider Curriculum in the Catalog.</p>
    <p>Ready?</p>
    <h4 style="color:#008FC5;font-size:18px ">Sign in to the left!</h4>
</div>
<div id="instrenewal" style="display:none;">
    <h4>Get the Instructor Renewal Bundle</h4>
    <h4>1. Sign In as Student/Manager</h4>
    <p>After you sign in (left), choose the <strong>"Student/Manager"</strong> option.</p>
    <h4>2. Follow The Instructions</h4>
    <p>The Welcome page will guide you to the Catalog where you can access the bundle.</p>
    <p>Questions about your Instructor ID?<br>
    Contact the AAP at <a href="mailto:lifesupport@aap.org">lifesupport@aap.org</a></p>
</div>
<div id="instschedule" style="display:none;">
    <h4>Get the Instructor Renewal Bundle</h4>
    <h4>1. Sign In as Administrator</h4>
    <p>After you sign in (left), choose the <strong>"Administrator"</strong> option.</p>
    <h4>2. Follow The Instructions</h4>
    <p>The Admin Welcome page will guide you to the NRP 7th Edition Instructor-Led Events.</p>
    <p>Questions about your Instructor ID?<br>
    Contact the AAP at <a href="mailto:lifesupport@aap.org">lifesupport@aap.org</a></p>
</div>
    <div id="showValue1"></div>
    <div id="showValue2" style="margin-left:10px;width:460px;font-size:14px;"><div style="color:#ccc;margin:20px; text-align: center;"><div style="font-size:18px;font-weight:600;">Choose an option above</div>
for step-by-step instructions to get started...</div></div>
</form>
</body>
</html>