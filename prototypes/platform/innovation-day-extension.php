<style>
    @font-face {
        font-family: myFirstFont;
        src: url(sansation_light.woff);
    }
    *{
        font-family: 'Fjalla One', sans-serif;
    }
    html, body{
        text-align: center;
    }

    .container{
        font-family: 'Fjalla One', sans-serif;
        width:450px;
        max-width: 100%;
        height:260px;
        max-height:100%;
        padding:7px;
        -moz-box-shadow: 0 0 10px #ccc;
        -webkit-box-shadow: 0 0 10px #ccc;
        box-shadow: 0 0 10px #ccc;
        display:table-cell;
        position:relative;
        border-radius: 4px;
        margin:auto;
    }


    form{
        text-align: center;
    }
    h1{
        font-size:40px;
        margin:15px 0;
        text-align: center;
        margin-bottom:15px;
    }
    .tagsFinishedMessage, .saveFinishedMessage{
        text-align: center;
    }

    #registerForm, .pulseTools, .tags, .tagsFinishedMessage, .saveFinishedMessage{
        display:none;
    }
    .pulseTools{
        margin-top:30px;
        text-align: center;
    }
    .pulseTools .inputGroup{
       margin:auto;
    }
    .pulseTools .inputGroup label{
       text-align: center;
       width: auto;
       margin: 10px auto;
    }
    .pulseTools .inputGroup input{
        width:54%;
    }
    .inputGroup{

        margin: 5px auto 5px -62%;
    }

    .inputGroup label{
        width:40%;
        display:inline-block;
        text-align:right;
        margin-right:7px;
    }
    .inputGroup input{
        width: 33%;
        height: 34px;
        padding: 6px 12px;
        font-size:15px;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }
    a{
        color: #09C;
        text-decoration: none;
        margin:0;
        padding:0;
    }
    span{
        margin:0;
        padding:0;
    }
    a:hover{
        text-decoration: underline;
    }
    .divider{
        border-left: 1px solid #09c;
        margin: auto 5px ;
    }
    .loginLinkGroup{
        margin:10px auto 0;
        text-align:right;
        margin-right:20%;
    }
    .loginLink{
        font-size:12px;
    }
    input[type="submit"]{
        background-color: #09C;
        color:white;
        height: 34px;
        width:54%;
        margin: 5px -5% 5px auto;
        display: inline-block;
        margin-bottom: 0;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        border: 1px solid transparent;
        white-space: nowrap;
        padding: 6px 12px;
        font-size: 16px;
        border-radius: 4px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
        -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075);
        box-shadow: inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075);
        margin-top:10px;
    }
    .pulseTools input[type="button"], button{
        background-color: #09C;
        color:white;
        height: 34px;
        width:54%;
        margin:auto;
        display: block;
        margin-bottom: 0;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        border: 1px solid transparent;
        white-space: nowrap;
        padding: 6px 12px;
        font-size: 16px;
        border-radius: 4px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
        -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075);
        box-shadow: inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075);
        margin-top:10px;
    }
    .pulseTools label{
        display:block;
    }
    .close{
    position:absolute;
    top:5px;
    right: 7px;
    color: #999;
    cursor:pointer;
    }

</style>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">
<h1>Pulse</h1>
<div class="close">
<i class="fa fa-close"></i>
</div>
<form id="loginForm">
    <div class="inputGroup">
        <label>Email</label>
        <input type="text">
    </div>
    <div class="inputGroup">
        <label>Password</label>
        <input type="password">
    </div>
    <input type="submit" class="continueBtn" value="Continue">
        <div class="loginLinkGroup">
    <a href="#" class="loginLink" id="js_registerLink">Register</a><span class="divider"></span><a href="#" class="loginLink">Forgot Password?</a>
    </div>
</form>
<form id="registerForm">
    <div class="inputGroup">
        <label>Email</label>
        <input type="text">
    </div>
    <div class="inputGroup">
        <label>Password</label>
        <input type="password">
    </div>
    <div class="inputGroup">
        <label>Repeat Password</label>
        <input type="password">
    </div>
    <input type="submit" value="Continue" class="continueBtn">
</form>
<div class="pulseTools">
    <button class="completedBtn">
        <i class="fa fa-check-square-o"> </i>
        Mark as Complete
    </button>
    <button class="saveBtn">
        <i class="fa fa-bookmark-o"> </i>
        Save for Later
    </button>
    <div class="tags">
    <div class="inputGroup">
        <label>Tags (optional)</label>
        <input type="text">
        </div>
        <button class="tagsFinished">Finish</button>
    </div>
</div>
<div class="tagsFinishedMessage">
    <p>Successfully added.</p>
    <i class="fa fa-check-square-o fa-4x"></i>
</div>
<div class="saveFinishedMessage">
    <p>Successfully added to your queue.</p>
    <i class="fa fa-bookmark-o fa-4x"></i>
</div>
</div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script>
 $(document).ready(function(){
    $("#js_registerLink").click(function(){
        $("#loginForm").fadeOut(500);
        $("#registerForm").delay(500).fadeIn();
    });

    $(".continueBtn").click(function(e){
        e.preventDefault();
        $("#loginForm").fadeOut(500);
        $("#registerForm").fadeOut(500);
        $("#registerForm").fadeOut(500);
        $(".pulseTools").delay(500).fadeIn();
    });

    $(".completedBtn").click(function() {
        $(".saveBtn").fadeOut(500);
        $(".completedBtn").fadeOut(500);
        $(".tags").delay(500).fadeIn();
    });

    $(".tagsFinished").click(function(){
        $(".tags").fadeOut(500);
        $(".tagsFinishedMessage").delay(500).fadeIn();

    });
    $(".saveBtn").click(function(){
        $(".pulseTools").fadeOut(500);
        $(".saveFinishedMessage").delay(500).fadeIn();

    });
    $(".close").click(function(){
        $("body").hide();}
        );
 });

 </script>