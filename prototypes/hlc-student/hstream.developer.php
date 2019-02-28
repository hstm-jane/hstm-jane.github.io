<?php include "hstream.docs.include.start.php"; ?>
<style>
    body>div.wrapper>div.sidebar>div>ul>li {
    margin-left: -18px !important;
    /*list-style-type: circle;*/
    padding-bottom: 5px;
}

body>div.wrapper>div.sidebar>div>ul {
    list-style: none;
    margin-left: 1em;
    padding-left: 1em;
}

body>div.wrapper>div.sidebar>div>ul>li>ul>li:before {
    /* margin-left: -20px !important;*/
    display: inline-block;
    content: "-";
    width: 0.5em;
    margin-left: -1em;

    /*text-indent:-5px;*/
}

ul>li>a,
ul>li>ul>li>a {
    display: block;
}

ul>li>a>p,
ul>li>ul>li>a>p {
    line-height: 35px !important;
}

ul>li>>a,
ul>li>ul>li>a {
    display: inline-block;
}

body>div.wrapper>div.sidebar>div>ul>li>ul>li>a {
    display: inline-block;
}

body>div>div.sidebar>div>ul>li>ul>li {
    /*margin-left: -18px !important;*/
    /*list-style-type: circle;*/
    padding-bottom: 5px;
}

p {
    font-size: 14px !important;
}

.cls-1 {
    fill: #fff !important;
}

.cls-2 {
    fill: #fff !important;
}

.nav-account .trigger-open,
.nav-account .trigger-open-app-launcher {
    width: 25px;
    text-align: center;
    padding-top: 18px;
    color: #333;
    display: block;
    top: 20px;
    height: 60px;
    font-size: 14px !important;
    ;
    position: absolute
}

.nav-account .trigger-open {
    right: 10px
}

.nav-account .trigger-open-app-launcher {
    right: 40px!important
}

.nav-account .alerts {
    display: block;
    position: absolute;
    top: 20px;
    right: 35px;
    width: 60px;
    height: 60px;
    text-align: right
}

.nav-account .alerts .badge {
    position: absolute;
    background-color: #fc7b00;
    top: -7px;
    right: -10px
}

.nav-account.nav-account-open {
    position: absolute;
    top: 20px;
    right: 20px;
    z-index: 100;
    width: 360px;
    background: #fff;
    border-top: 2px solid #09C;
    border-bottom: 1px solid #ccc;
    padding-top: 90px;
    -webkit-box-shadow: 0 5px 10px 2px rgba(0, 0, 0, .2);
    box-shadow: 0 5px 10px 2px rgba(0, 0, 0, .2)
}

.nav-account.nav-account-open .alerts,
.nav-account.nav-account-open .trigger-open,
.nav-account.nav-account-open>.logout {
    display: none
}

.nav-account.nav-account-open .trigger-close {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    width: 30px;
    height: 30px;
    text-align: center;
    padding-top: 6px;
    font-size: 18px;
    color: #ccc
}

.nav-account.nav-account-open .trigger-close:hover {
    color: #999
}

.nav-account.nav-account-open .name {
    position: absolute;
    top: 20px;
    right: auto;
    left: 95px;
    max-width: 240px;
    text-align: left
}

.nav-account.nav-account-open .institution {
    position: absolute;
    top: 50px;
    right: auto;
    left: 95px;
    max-width: 250px;
    text-align: left;
    font-size: 14px
}

.nav-account.nav-account-open .institution-select {
    display: block;
    position: absolute;
    top: 75px;
    right: auto;
    left: 100px;
    width: 250px
}

.nav-account.nav-account-open .institution-change {
    display: block;
    position: absolute;
    top: 65px;
    right: auto;
    left: 100px;
    width: 250px;
    font-size: 13px
}

.nav-account.nav-account-open .avatar {
    position: absolute;
    top: 10px;
    left: 12px;
    right: auto;
    width: 70px;
    height: 70px
}

.nav-account.nav-account-open .avatar i {
    top: 5px;
    left: 10px;
    font-size: 60px
}

.nav-account.nav-account-open .avatar img {
    width: 70px;
    height: 70px
}

.nav-account.nav-account-open .nav {
    display: block;
    border-top: 1px solid #ddd;
    background-color: #f9f9f9
}

.nav-account.nav-account-open .nav li {
    width: 50%;
    float: left;
    padding: 0 10px;
    margin: 15px 0 0
}

.nav-account.nav-account-open .nav a {
    display: inline;
    padding: 0;
    background: 0 0
}

.nav-account.nav-account-open .nav a .badge {
    background-color: #fc7b00
}

.nav-account.nav-account-open .nav .logout {
    width: 100%;
    border-top: 1px solid #ddd;
    padding: 10px;
    /*background-color: #f3f3f3*/
}

.navbar-nav {
    /* border-top: 1px solid #ddd;
    background: #f3f3f3*/
}

.navbar-nav .nav>li {
    float: left
}

.navbar-nav .nav>li>a {
    color: #333;
    padding: 14px 20px
}

.navbar-nav .nav>li>a:hover {
    background: #eee
}

.navbar-nav .nav>li.active>a,
.navbar-nav .nav>li.active>a:hover {
    background: #ddd
}

.navbar-nav .nav>li.open.active>a,
.navbar-nav .nav>li.open.active>a:hover,
.navbar-nav .nav>li.open>a,
.navbar-nav .nav>li.open>a:hover {
    background: #eee
}

.navbar-nav .nav>li.up>a,
.navbar-nav .nav>li.up>a:hover {
    background: 0 0
}

.navbar-nav .nav>li.up>a span {
    display: inline-block;
    padding: 3px 10px;
    margin: -3px -10px;
    border-radius: 3px;
    background: #fc7b00;
    color: #fff
}

.navbar-nav .nav>li.up>a span i {
    color: #fff
}

.navbar-nav .nav>li.up>a:hover span {
    background: #c96200
}

.navbar-nav .nav>li.up i {
    font-size: 90%;
    color: #09C
}

.navbar-nav .app-drawer-container {
    float: right!important;
    padding-right: 5px;
    margin-right: -5px;
    margin-top: 20px;
}

.navbar-nav .app-drawer-container ul {
    list-style: none;
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-size: 14px !important;
    vertical-align: baseline;
    background: 0 0
}

.navbar-nav .app-drawer-container.active .app-drawer-icon {
    /*fbi-color: #ddd*/
}

.navbar-nav .app-drawer-container .app-drawer-icon {
    height: 48px;
    width: 55px;
    display: block;
    cursor: pointer;
    position: relative
}

.navbar-nav .app-drawer-container .app-drawer-icon:hover {
    /*background-color: #eee*/
    color: #fff;
}

.navbar-nav .app-drawer-container .app-drawer-icon .icon {
    height: 20px;
    width: 20px;
    position: absolute;
    top: 8px;
    right: 20px;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, .1)
}

.navbar-nav .app-drawer-container .app-drawer-icon .icon svg .cls-1,
.navbar-nav .app-drawer-container .app-drawer-icon .icon svg .cls-2 {
    /*fill: #666*/
}

.navbar-nav .app-drawer-container .app-drawer-icon .label {
    font-size: 9px;
    font-weight: 600;
    /*color: #666;*/
    text-transform: uppercase;
    position: absolute;
    bottom: 5px;
    letter-spacing: 1.3px;
    text-align: center;
    right: 9px;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, .1)
}

.navbar-nav .app-drawer-container .app-drawer-icon .arrow {
    position: absolute;
    right: 0px;
    top: 12px;
    color: #fff;
}

.navbar-nav .app-drawer-container .app-drawer-content {
    box-shadow: 0 4px 8px rgba(0, 0, 0, .15);
    position: absolute;
    background-color: #fff;
    background-clip: padding-box;
    border-radius: 2px;
    transition: box-shadow 83ms;
    margin: 8px 0 0;
    padding: 4px 0 0;
    width: 288px;
    left: auto;
    top: 50px;
    text-align: left;
    z-index: 1000;
    right: 10px
}

.navbar-nav .app-drawer-container .app-drawer-content>li {
    max-height: 500px;
    overflow-y: auto;
    min-height: 300px;
    overflow-x:hidden;
}

.navbar-nav .app-drawer-container .app-drawer-content:focus,
.navbar-nav .app-drawer-container .app-drawer-content:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, .15)
}

.navbar-nav .app-drawer-container .app-drawer-content:after,
.navbar-nav .app-drawer-container .app-drawer-content:before {
    content: '';
    display: block;
    position: absolute;
    top: -20px;
    right: 14px;
    border: 10px solid transparent;
    border-bottom-color: #ccc
}

.navbar-nav .app-drawer-container .app-drawer-content .app-drawer-content-panel {
    margin-bottom: 10px
}

.navbar-nav .app-drawer-container .app-drawer-content .app-drawer-content-panel li {
    padding: 8px 15px
}

.navbar-nav .app-drawer-container .app-drawer-content .app-drawer-content-panel p {
    margin: 0
}

.navbar-nav .app-drawer-container .app-drawer-content .app-drawer-content-panel li.app-drawer-title {
    line-height: 22px;
    font-weight: 600;
    font-size: 16px !important;
    ;
    cursor: default;
    padding: 15px
}

.navbar-nav .app-drawer-container .app-drawer-content .app-drawer-content-panel li.app-drawer-nav-item {
    margin: 0;
    padding: 0;
    color: rgba(0, 0, 0, .85);
    position: relative;
    display: table;
    width: 100%
}

.navbar-nav .app-drawer-container .app-drawer-content .app-drawer-content-panel li.app-drawer-nav-item>a {
    border-bottom: 1px solid #ddd;
    margin: 0 10px;
    padding: 10px 5px;
    display: block;
    font-size:12px;
}

.navbar-nav .app-drawer-container .app-drawer-content .app-drawer-content-panel li.app-drawer-nav-item>a>div {
    display: table-cell;
    vertical-align: top
}

.navbar-nav .app-drawer-container .app-drawer-content .app-drawer-content-panel li.app-drawer-nav-item>a:hover {
    box-shadow: 0 0 0 1px rgba(0, 0, 0, .1), 0 2px 3px rgba(0, 0, 0, .2);
    background-color: #f3f3f3
}

.navbar-nav .app-drawer-container .app-drawer-content .app-drawer-content-panel li.app-drawer-nav-item>a .description,
.navbar-nav .app-drawer-container .app-drawer-content .app-drawer-content-panel li.app-drawer-nav-item>a .description:hover {
    color: #555
}

.navbar-nav .app-drawer-container .app-drawer-content .app-drawer-content-panel li.app-drawer-nav-item:last-of-type>a {
    border: none
}

.navbar-nav .app-drawer-container .app-drawer-content .app-drawer-content-panel li.app-drawer-nav-item .app-drawer-nav-item-logo {
    width: 50px;
    padding-right: 10px
}

.navbar-nav .app-drawer-container .app-drawer-content .app-drawer-content-panel li.app-drawer-nav-item .app-drawer-nav-item-content {
    display: table-cell;
    width: auto
}

.navbar-nav .app-drawer-container .app-drawer-content .app-drawer-content-panel li.app-drawer-nav-item .app-drawer-nav-item-content .title {
    font-weight: 600;
    margin: 0
}

.navbar-nav .app-drawer-container .app-drawer-content .app-drawer-content-panel li.app-drawer-nav-item .svg-icon-wrap {
    overflow: hidden;
    height: 50px;
    width: 50px;
    border-radius: 4px;
    box-shadow: 0 0 4px rgba(0, 0, 0, .15);
    border: 1px solid #eee
}

.navbar-nav .app-drawer-container .app-drawer-content .app-drawer-content-panel li.app-drawer-nav-item .svg-icon-wrap img {
    width: 50px;
    height: 50px
}

.navbar-nav .app-drawer-container .app-drawer-content .app-drawer-content-panel li.app-drawer-nav-item:hover .svg-icon-wrap {
    box-shadow: 0 0 0 1px rgba(0, 0, 0, .1), 0 2px 3px rgba(0, 0, 0, .2);
    border-radius: 4px
}

.support {
    display: none
}

-min .nav-account,
-min .trigger-open,
-min .trigger-open-app-launcher,
-min nav.navbar-nav {
    display: none!important
}

@media (min-width: 992px) {
    .app-launcher-mobile {
        display: none!important
    }
}

@media (max-width: 991px) {
    .app-launcher-mobile {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        width: 300px;
        z-index: 11000;
        height: auto;
        border: none;
        background: rgba(51, 51, 51, .96);
        overflow: auto
    }

    .app-launcher-mobile .trigger-close {
        display: block;
        position: absolute;
        top: 13px;
        right: 7px;
        width: 30px;
        height: 30px;
        text-align: center;
        font-size: 18px;
        line-height: 30px;
        color: #fff
    }

    .app-launcher-mobile .title {
        position: absolute;
        top: 20px;
        left: 20px;
        max-width: 95%;
        text-align: left;
        color: #eee;
        font-size: 16px !important;
        font-weight: 600
    }

    .app-launcher-mobile ul.app-drawer-nav-item {
        position: absolute;
        top: 60px;
        left: 0;
        list-style: none;
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        font-size: 14px !important;
        vertical-align: baseline;
        background: 0 0;
        color: #fff
    }

    .app-launcher-mobile ul.app-drawer-nav-item li a:hover {
        text-decoration: none
    }

    .app-launcher-mobile ul.app-drawer-nav-item li {
        display: table;
        table-layout: fixed;
        margin: 0;
        padding: 0;
        width: 100%;
        position: relative
    }

    .app-launcher-mobile ul.app-drawer-nav-item li>a {
        margin: 0 10px;
        padding: 10px 5px;
        display: block;
        color: #f9f9f9;
        border-bottom: 1px solid #666
    }

    .app-launcher-mobile ul.app-drawer-nav-item li>a:hover {
        box-shadow: 0 0 0 1px rgba(0, 0, 0, .1), 0 2px 3px rgba(0, 0, 0, .2);
        background-color: #4e4e4e
    }

    .app-launcher-mobile ul.app-drawer-nav-item li>a>div {
        display: table-cell;
        vertical-align: top
    }

    .app-launcher-mobile ul.app-drawer-nav-item li:hover a p.description {
        color: #19a3d1
    }

    .app-launcher-mobile ul.app-drawer-nav-item li .app-drawer-nav-item-logo {
        width: 50px;
        padding-right: 10px
    }

    .app-launcher-mobile ul.app-drawer-nav-item li .app-drawer-nav-item-logo .svg-icon-wrap {
        overflow: hidden;
        height: 50px;
        width: 50px;
        border-radius: 4px;
        box-shadow: 0 0 4px rgba(0, 0, 0, .15);
        border: 1px solid #eee
    }

    .app-launcher-mobile ul.app-drawer-nav-item li .app-drawer-nav-item-logo .svg-icon-wrap img {
        width: 50px;
        height: 50px
    }

    .app-launcher-mobile ul.app-drawer-nav-item li .app-drawer-nav-item-content {
        width: auto
    }

    .app-launcher-mobile ul.app-drawer-nav-item li .app-drawer-nav-item-content .title {
        position: static;
        font-weight: 600;
        margin: 0
    }

    .app-launcher-mobile ul.app-drawer-nav-item li .app-drawer-nav-item-content p.description {
        color: #afafaf;
        margin-bottom: 0
    }

    .app-launcher-mobile ul.app-drawer-nav-item li .app-drawer-nav-item-content p.description:hover {
        color: #19a3d1
    }

    {
        background: #f9f9f9;
        height: 50px;
        border: none
    }

    .container>a {
        display: block;
        position: absolute;
        top: 0;
        width: 45px;
        height: 50px;
        text-align: center;
        color: #555;
        text-decoration: none;
        border-left: 1px solid #ccc
    }

    .container>a:hover {
        background: #eee
    }

    .container>a i {
        display: block;
        height: 20px;
        font-size: 18px;
        line-height: 1;
        color: #007aa3;
        margin-top: 10px
    }

    .container>a span,
    .container>a.trigger-open-app-launcher span {
        display: block;
        font-size: 9px;
        text-transform: uppercase;
        font-weight: 600
    }

    .container>a svg {
        margin-left: -2px;
        margin-top: 12px
    }

    .container>a svg .cls-1,
    .container>a svg .cls-2 {
        fill: #007aa3
    }

    .container>a.trigger-open {
        right: 5px
    }

    .container>a.trigger-open-app-launcher {
        right: 50px;
        width: 50px
    }

    .container>a.trigger-open-app-launcher span {
        margin-top: -2px
    }
</style>
<?php
$persona = (!empty($_GET['persona']))?intval($_GET['persona']):1;
?>
    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">
            <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->
            <div class="sidebar-wrapper">
                <div class="docs-logo-container">
                    <img src="/content/images/hstream-logo.png" class="logo" style="width:200px !important;" />
                </div>
                <ul class="nav">
                    <li class="active">
                        <a href="hstream.docs.flow.php">
                            <!--<i class="ti-user"></i>-->
                            <p style="text-transform: none;">Link 1</p>
                        </a>
                        <!--  <ul class="dashed">
                        <li><a href="hstream.docs.flow.enrollment.php">Enrollment and Completion API</a></li>
                        <li><a href="#">Course Attendance API</a></li>
                        <li><a href="#">Standard Evaluation Data API - Summary &amp; Detail</a></li>
                        <li><a href="#">TQA Summary and Detail API</a></li>
                        <li><a href="#">Demographics Data API</a></li>
                        <li><a href="#">Org, Facility and Department Login Summary API</a></li>
                        <li><a href="#">Student Group Criteria API</a></li>
                        <li><a href="#">Discipline/Certification Listing API</a></li>
                        <li><a href="#">Demographics Users By Role API</a></li>
                        <li><a href="#">Employee Hierarchy API</a></li>
                        <li><a href="#">Course Publishing Information API</a></li>
                        <li><a href="#">Course Equivalency API</a></li>
                        <li><a href="#">Course meta data report and Authored course API</a></li>
                    </ul> -->
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#">Developer</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right" style="margin-right:10px;">
                            <!--<li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
                                <p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
                                    <p>Notifications</p>
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>-->
                            <li>
                                <a href="#">
                                <i class="ti-user"></i>
                                <?php
                                switch ($persona) {
                                    // case 'hlc.dev':
                                    case '1':
                                        $name = 'Luis Garrett';
                                        $picURL = '/content/images/personas/Luis-NewGrad.png';
                                        break;
                                    case '2':
                                        $name = 'Melissa Bradley';
                                        $picURL = '/content/images/personas/Melissa-NurseManager.png';
                                        break;
                                    case '3':
                                        $name = 'Tracy Allen';
                                        $picURL = '/content/images/personas/Tracy-TCC.png';
                                        break;
                                    case '4':
                                        $name = 'Anna Price';
                                        $picURL = '/content/images/personas/Anna-Instructor.png';
                                        break;
                                    case '5':
                                        $name = 'Grace Davidson';
                                        $picURL = '/content/images/personas/Grace-CNO.png';
                                        break;
                                    case '6':
                                        $name = 'Catherine Scott';
                                        $picURL = '/content/images/personas/Catherine-CCO.png';
                                        break;
                                    case '7':
                                        $name = 'Felicity Alvarado';
                                        $picURL = '/content/images/personas/Felicity-CHRO.png';
                                        break;
                                    case '8':
                                        $name = 'Chris Freeman';
                                        $picURL = '/content/images/personas/Chris-CIOCTO.png';
                                        break;
                                    case '9':
                                        $name = 'Mariah Hay';
                                        $picURL = '/content/images/personas/Mariah-CEO.jpg';
                                        break;
                                    default:
                                        $pattern_config = 'patterns.config.php';
                                }

                                ?>
                                <p><?= $name ?></p>
                            </a>
                            </li>
                            <li >
                                <?php
                                    include ('includes/applauncher.hstream.persona.php');
                                  ?>
                            </li>
                        </ul >
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="header">
                            <h3 class="title text-center">Welcome to the hStream Developer Portal!<br><br></h3>
                        </div>
                        <div class="content">
                            <div class="places-buttons">
                                <div class="row">
                                    <article class="col-md-3 text-center" style="border-right:solid 1px #eee">
                                        <img src="https://secure.surveymonkey.com/assets/developerweb/developerweb/100.0.232/img/Customize-View.svg">
                                        <h3>API<br>Documentation</h3>
                                        <p>Interface your App with hStream's powerful APIs</p>
                                    </article>
                                    <article class="col-md-3 text-center" style="border-right:solid 1px #eee">
                                        <img src="https://secure.surveymonkey.com/assets/developerweb/developerweb/100.0.232/img/Customize-View.svg">
                                        <h3>Visualization &amp; Benchmarking Engine</h3>
                                        <p>Power your app with customer behavior data.</p>
                                    </article>
                                    <article class="col-md-3 text-center" style="border-right:solid 1px #eee">
                                        <img src="https://secure.surveymonkey.com/assets/developerweb/developerweb/100.0.232/img/Customize-View.svg">
                                        <h3>Gamificiation<br>Engine</h3>
                                        <p>Power your app with customer behavior data.</p>
                                    </article>
                                    <article class="col-md-3 text-center">
                                        <img src="https://secure.surveymonkey.com/assets/developerweb/developerweb/100.0.232/img/Customize-View.svg">
                                        <h3>Communities of Practice Engine</h3>
                                        <p>Power your app with customer behavior data.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    <!--   Core JS Files   -->
    <script src="/content/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="/content/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="/content/assets/js/bootstrap-checkbox-radio.js"></script>
    <!--  Charts Plugin -->
    <script src="/content/assets/js/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="/content/assets/js/bootstrap-notify.js"></script>
    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="/content/assets/js/paper-dashboard.js"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="/content/assets/js/demo.js"></script>
    <script src="/scripts/healthstream.utilities.applauncher.js"></script>
    <script>
    $(function() {

        HealthStream.utilities.applauncher();

    });
    </script>

    </html>