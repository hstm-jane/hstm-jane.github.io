<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic Page Needs
================================================== -->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>My To-Do List | HealthStream</title>

  <!-- Styles
================================================== -->
  <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.bootstrap.css?cache=1490113329">
  <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.plugins.css?cache=1490113329">
  <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.app.css?cache=1490113329">
  <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.prototype.css?cache=1490113329">

  <!-- IE 7/8 Handling
================================================== -->
  <script>
    if (document.documentMode < 8) {
      location.href = "unsupported-browser.php";
    } else if (document.documentMode == 8) {
      var html = document.getElementsByTagName('html')[0];
      html.className = 'ie ie8' + html.className;
      var ie8docmode = document.createElement('script');
      ie8docmode.setAttribute('src', '/scripts/respond.js');
      document.getElementsByTagName('head')[0].appendChild(ie8docmode);
      var ie8styles = document.createElement('link');
      ie8styles.setAttribute('rel', 'stylesheet');
      ie8styles.setAttribute('type', 'text/css');
      ie8styles.setAttribute('href', '/content/styles/healthstream.ie8.css');
      document.getElementsByTagName('head')[0].appendChild(ie8styles);
    } else {
      var icons = document.createElement('link');
      icons.setAttribute('rel', 'stylesheet');
      icons.setAttribute('type', 'text/css');
      icons.setAttribute('href', '/content/styles/healthstream.icons.css');
      document.getElementsByTagName('head')[0].appendChild(icons);
    }
  </script>

  <!-- Feature Detection Using Modernizr
================================================== -->
  <script src="/scripts/modernizr.js"></script>

</head>

<body>
  <div class="site-header ">
    <div class="container">
      <a href="#" class="trigger-open trigger-open-header"><i class="fa fa-bars"></i><span>Menu</span></a>
      <div class="branding">
        <a href="/">
          <img src="./content/images/logo-healthstream-large.png" alt="HealthStream" class="logo-large">
          <img src="./content/images/logo-healthstream-small.png" alt="HealthStream" class="logo-small">
        </a>
      </div>
      <style>
       
        
        .site-header .nav-account .app-drawer-icon {
          height: 40px;
          width: 30px;
          /*background-color:pink;*/
          display: block;
          /*position: absolute;*/
          bottom: 14px;
          right: 83px;
          /*border-left: #ccc dotted 1px;*/
            /*border-right: #ccc dotted 1px;*/
          cursor: pointer;
          /*margin-left:20px;*/
          /*padding-left:10px;*/
          position:absolute;
        }
        
        .site-header .nav-account .app-drawer-icon:hover {
          /*background-color:#ddd;*/
        }
        
        .site-header .nav-account .app-drawer-icon .ad-icon {
          height: 25px;
          width: 25px;
          position: absolute;
          top: 3px;
          right: 20px;
          text-shadow: 0 -1px 0 rgba(0, 0, 0, .1);
        }
        
        .site-header .nav-account .app-drawer-icon .ad-label {
          font-size: 7px;
          font-weight: 600;
          color: #ababab;
          text-transform: uppercase;
          position: absolute;
          bottom: 0px;
          letter-spacing: 1.3px;
          text-align: center;
          width: 30px;
          right: 15px;
          text-shadow: 0 -1px 0 rgba(0, 0, 0, .1);
        }
        
        .nav-item__dropdown-trigger--title {
          display: inline-block;
          vertical-align: super;
          color: #c7d1d8
        }
        
        .open .nav-item__dropdown-trigger--title {
          color: #fff
        }
        
        .nav-item__dropdown-trigger--icon {
          width: 10px;
          height: 10px;
          margin-left: -2px;
          transition: color .3s
        }
        
        .nav-item__dropdown-trigger--icon svg {
          width: 16px
        }
        
        .nav-item__link:hover .nav-item__dropdown-trigger--icon {
          color: #fff
        }
        
        .extended-nav--remove-home-add-learning .nav-item--feed {
          display: none
        }
        
        .nav-dropdown__action,
        .nav-dropdown__item {
          color: rgba(0, 0, 0, .85);
          position: relative
        }
        
        .nav-dropdown__action .svg-icon-wrap,
        .nav-dropdown__item .svg-icon-wrap {
          position: absolute;
          right: 0;
          top: 10px;
          margin-right: 16px;
          color: #0084bf;
          overflow:hidden;
        }
        
        .nav-settings__dropdown-options .nav-dropdown__action:hover,
        .nav-settings__dropdown-options .nav-dropdown__item:hover {
          background-color: rgba(0, 0, 0, .1)
        }
        
        .nav-item--profile .nav-dropdown__action a,
        .nav-item--profile .nav-dropdown__item a {
          color: rgba(0, 0, 0, .7)
        }
        
        .nav-dropdown__title {
          color: #44474a
        }
        
        .nav-dropdown__item.inline-button {
          padding: 5px 24px
        }
        
        .nav-dropdown__item.inline-button h3,
        .nav-dropdown__item.inline-button p {
          display: inline-block
        }
        
        .nav-dropdown__item.inline-button .toggle-button,
        .nav-dropdown__item.inline-button h3 {
          color: rgba(0, 0, 0, .7)
        }
        
        .nav-dropdown__item.inline-button p {
          margin-left: 20px
        }
        
        .nav-app-launcher__app-title {
          word-wrap: break-word
        }
        
        .nav-app-launcher__dropdown-item {
          display: inline-block;
          width: 80px;
          text-align: center;
          margin-bottom: 8px;
          padding-top: 4px;
          vertical-align: top
        }
        
        .nav-app-launcher__dropdown-item li-icon {
          border-radius: 4px;
          box-shadow: 0 0 4px rgba(0, 0, 0, .15)
        }
        
        .nav-app-launcher__dropdown-item:hover li-icon {
          box-shadow: 0 0 0 1px rgba(0, 0, 0, .1), 0 2px 3px rgba(0, 0, 0, .2);
          border-radius: 4px
        }
        
        .nav-app-launcher__dropdown-item .svg-icon-wrap {
          top: 50%;
          -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
          left: 0;
          display: inline-block;
          position: relative;
          -webkit-transform: none;
          transform: none;
          width: 40px;
          height: 40px;
          margin: 0 20px
        }
        
        .nav-app-launcher__dropdown-item:last-child {
          margin-bottom: 16px
        }
        
        .nav-app-launcher__dropdown-item-link {
          padding: 0
        }
        
        .nav-app-launcher__title {
          line-height: 24px;
          font-weight: 600;
          font-size: 17px;
          color: rgba(0, 0, 0, .85);
          cursor: default;
          padding: 16px 24px
        }
        
        .nav-app-launcher__content {
          border-bottom: 1px solid rgba(0, 0, 0, .15)
        }
        
        .nav-app-launcher__content li:nth-child(3n+2) {
          margin-left: 20px
        }
        
        .nav-app-launcher__content>ul>li:hover {
          background-color: transparent
        }
        
        .nav-app-launcher__dropdown-options-container {
          max-height: 500px;
          overflow: auto
        }
        
        .nav-app-launcher__scroll-affordance {
          position: absolute;
          bottom: 0;
          width: 100%;
          height: 48px;
          background: linear-gradient(rgba(255, 255, 255, 0), #fff);
          pointer-events: none
        }
        
        .nav-app-launcher__scroll-affordance:hover {
          background: 0 0
        }
        
        .nav-item--app-launcher__dropdown-options.dropdown-options {
          padding: 0;
          margin-right: calc(50% - 24px);
        }
        
        .site-header .nav-account .dropdown-options {
             box-shadow: 4px 4px 4px #000;
            position: absolute;
          background-color: #fff;
          background-clip: padding-box;
          border-radius: 2px;
          transition: box-shadow 83ms;
          margin: 8px 0 0;
          padding: 4px 0 0;
          width: 288px;
          /*right: 0;*/
          left: auto;
           top: 90px;
          text-align: left;
            z-index: 1000;
          right: 95px;

           
          /*margin-top: 2px;*/
         
          /*padding: 8px;*/
          /*background-color: #fff;*/
          
         
          /*margin-right:20px;*/
          /*width:300px;*/

        }
        
        .site-header .nav-account .dropdown-options,
        .site-header .nav-account .dropdown-options:focus,
        .site-header .nav-account .dropdown-options:hover {
          box-shadow: 0 4px 8px rgba(0, 0, 0, .15);
        }
        
        /*.dropdown-options {
         
        }*/
        
        .nav-app-launcher__dropdown-options-container {
          max-height: 500px;
          overflow: auto;
        }
        
        nav ul {
          list-style: none;
          margin: 0;
          padding: 0;
          border: 0;
          outline: 0;
          font-size: 100%;
          vertical-align: baseline;
          background: 0 0;
        }
        
        .nav-dropdown__action,
        .nav-dropdown__item {
          color: rgba(0, 0, 0, .85);
          position: relative;
        }
        
        .nav-business-services__title {
          line-height: 20px;
          font-weight: 600;
          color: rgba(0, 0, 0, .85);
          font-size: 15px;
          padding: 16px 24px;
        }
        
        .nav-dropdown__item .nav-business-services__link {
          /*padding: 4px 24px;*/
        }
        
        .nav-business-services__content li {
          padding: 8px 24px;
        }
        .nav-business-services__content {
            margin-bottom:10px;
        }
        .nav-dropdown__action,
        .nav-dropdown__item {
          color: rgba(0, 0, 0, .85);
          position: relative;
        }
        
        .nav-dropdown__title {
          color: #44474a;
        }
        .echo-logo {
            background-image: url('/content/images/echo-logo.png');
            height:20px; 
            margin-top:17px;
            /*width:50px; */
        }
        .hstream-logo {
            /*background-image: url('/content/images/echo-logo.png');*/
            height:50px; 
            /*width:50px; */
            margin-top:5px;
        }
        .coi-logo {
             /*background-image: url('/content/images/echo-logo.png');*/
            /*height:60px; */
            /*width:50px; */
            /*margin-top:5px;*/
            /*overflow:hidden;*/
        }
         .nav-app-launcher__dropdown-item .svg-icon-wrap  {
            height:60px !important; 
            width:60px !important; 
            border-radius: 4px;
            box-shadow: 0 0 4px rgba(0, 0, 0, .15);
            margin:0 10px;
            border: 1px #eee solid;
        }
         .svg-icon-wrap li-icon img {
            /*height:40px; width:40px;*/
            
        }
        .site-header .nav-account .dropdown-options::after {
            top: -20px;
            border-bottom-color: #fff;
        }
        
        .site-header .nav-account .dropdown-options::after, .site-header .nav-account .dropdown-options::before {
            content: '';
            display: block;
            position: absolute;
            top: -20px;
            right: 14px;
            border: 10px solid transparent;
            border-bottom-color: #fff;
        }
        .site-header .nav-account li a:hover {
            text-decoration: none;
        }
        .nav-business-services__content li:hover {
            background-color: #cdcfd2;
        }
        .nav-app-launcher__dropdown-item:hover .svg-icon-wrap {
            box-shadow: 0 0 0 1px rgba(0,0,0,.1), 0 2px 3px rgba(0,0,0,.2);
            border-radius: 4px;
        }
        .nav-business-services__content p {
            margin:0;
        }
        h5.nav-dropdown__title {
            margin:0;
            font-weight:600;
        }
        .nav-app-launcher__content ul li.nav-app-launcher__dropdown-item h5 {
                font-weight: 400;
            color: rgba(0,0,0,.55);
            font-size: 13px;
            margin:0;
        }
        .site-header .nav-account .container .nav .app-drawer-container {
            float:right;
            padding-right:15px;
        }
        .site-header .nav-account .institution, .site-header .nav-account>.logout {
            right:135px;
        }
      </style>
      <nav class="nav-account">
        <div class="name">Stephanie P. Juniper</div>
        <div class="avatar">
          <i class="fa fa-user"></i>
          <img src="./content/images/avatar.jpg">
        </div>
        <a href="alerts.php" class="alerts"><span class="badge">3</span></a>
        <div class="institution"><a href="#">Jupiter Healthcare</a></div>
        <div class="logout"><a href="#">Logout</a></div>
        <div class="app-drawer-icon">
          <!--<img src="/content/images/app_launcher_icon.png">-->
          <div class="ad-icon">
            <!--<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
viewBox="0 0 286.054 286.054" style="enable-background:new 0 0 286.054 286.054;" xml:space="preserve">
<g>
<path style="fill:#ccc;" d="M277.115,107.27H223.48c-4.943,0-8.939,3.996-8.939,8.939v53.635c0,4.943,3.996,8.939,8.939,8.939
h53.635c4.943,0,8.939-3.996,8.939-8.939v-53.635C286.054,111.266,282.058,107.27,277.115,107.27z M277.115,0H223.48
c-4.943,0-8.939,4.005-8.939,8.939v53.635c0,4.943,3.996,8.939,8.939,8.939h53.635c4.943,0,8.939-3.996,8.939-8.939V8.939
C286.054,4.005,282.058,0,277.115,0z M62.574,0H8.939C4.005,0,0,4.005,0,8.939v53.635c0,4.943,4.005,8.939,8.939,8.939h53.635
c4.934,0,8.939-3.996,8.939-8.939V8.939C71.513,4.005,67.509,0,62.574,0z M62.574,107.27H8.939c-4.934,0-8.939,3.996-8.939,8.939
v53.635c0,4.943,4.005,8.939,8.939,8.939h53.635c4.934,0,8.939-3.996,8.939-8.939v-53.635
C71.513,111.266,67.509,107.27,62.574,107.27z M277.115,214.54H223.48c-4.943,0-8.939,3.996-8.939,8.939v53.635
c0,4.943,3.996,8.939,8.939,8.939h53.635c4.943,0,8.939-3.996,8.939-8.939V223.48C286.054,218.536,282.058,214.54,277.115,214.54z
M62.574,214.54H8.939c-4.934,0-8.939,3.996-8.939,8.94v53.635c0,4.943,4.005,8.939,8.939,8.939h53.635
c4.934,0,8.939-3.996,8.939-8.939V223.48C71.513,218.536,67.509,214.54,62.574,214.54z M169.844,107.27h-53.635
c-4.934,0-8.939,3.996-8.939,8.939v53.635c0,4.943,4.005,8.939,8.939,8.939h53.635c4.943,0,8.939-3.996,8.939-8.939v-53.635
C178.784,111.266,174.788,107.27,169.844,107.27z M169.844,0h-53.635c-4.934,0-8.939,4.005-8.939,8.939v53.635
c0,4.943,4.005,8.939,8.939,8.939h53.635c4.943,0,8.939-3.996,8.939-8.939V8.939C178.784,4.005,174.788,0,169.844,0z
M169.844,214.54h-53.635c-4.934,0-8.939,3.996-8.939,8.939v53.635c0,4.943,4.005,8.939,8.939,8.939h53.635
c4.943,0,8.939-3.996,8.939-8.939V223.48C178.784,218.536,174.788,214.54,169.844,214.54z"/>
</g>
</svg>-->

            <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 1200">
              <defs>
                <style>
                  .cls-1 {
                    fill: #bdbdbd;
                  }
                </style>
              </defs>
              <rect id="Rounded_Rectangle_2" data-name="Rounded Rectangle 2" class="cls-1" x="453" width="294" height="294" rx="50" ry="50" />
              <rect id="Rounded_Rectangle_3" data-name="Rounded Rectangle 3" class="cls-1" x="898" width="294" height="294" rx="50" ry="50" />
              <rect id="Rounded_Rectangle_4" data-name="Rounded Rectangle 4" class="cls-1" x="8" width="294" height="294" rx="50" ry="50" />
              <rect id="Rounded_Rectangle_5" data-name="Rounded Rectangle 5" class="cls-1" x="8" y="443" width="294" height="294" rx="50" ry="50" />
              <rect id="Rounded_Rectangle_6" data-name="Rounded Rectangle 6" class="cls-1" x="453" y="443" width="294" height="294" rx="50" ry="50" />
              <rect id="Rounded_Rectangle_7" data-name="Rounded Rectangle 7" class="cls-1" x="898" y="443" width="294" height="294" rx="50" ry="50" />
              <rect id="Rounded_Rectangle_8" data-name="Rounded Rectangle 8" class="cls-1" x="898" y="897" width="294" height="294" rx="50" ry="50" />
              <rect id="Rounded_Rectangle_9" data-name="Rounded Rectangle 9" class="cls-1" x="453" y="897" width="294" height="294" rx="50" ry="50" />
              <rect id="Rounded_Rectangle_10" data-name="Rounded Rectangle 10" class="cls-1" x="8" y="897" width="294" height="294" rx="50" ry="50" />

            </svg>-->


            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 1200 1200">
<defs>
<style>
.cls-1 {
    fill: #d4d4d4;
    /*fill: #ababab;*/
    /*fill: #999;*/
}
.cls-2 {
    /*fill: #09c;*/
     fill: #d4d4d4;
     /*fill: #ababab;*/
     /*fill: #999;*/
}
</style>
</defs>
<ellipse class="cls-2" cx="151" cy="153.5" rx="147" ry="149.5"/>
<ellipse class="cls-1" cx="600" cy="153.5" rx="147" ry="149.5"/>
<ellipse class="cls-2" cx="600" cy="599.5" rx="147" ry="149.5"/>
<ellipse class="cls-2" cx="151" cy="600.5" rx="147" ry="149.5"/>
<ellipse class="cls-2" cx="151" cy="1050.5" rx="147" ry="149.5"/>
<ellipse class="cls-1" cx="600" cy="1050.5" rx="147" ry="149.5"/>
<ellipse class="cls-2" cx="1049" cy="1050.5" rx="147" ry="149.5"/>
<ellipse class="cls-2" cx="1049" cy="599.5" rx="147" ry="149.5"/>
<ellipse class="cls-2" cx="1049" cy="153.5" rx="147" ry="149.5"/>
</svg>

          </div>
          <div class="ad-label">
            Apps<i class="fa fa-angle-down" style="padding-left:1px;"></i>
          </div>

        </div>
        
        <ul class="dropdown-options nav-item--app-launcher__dropdown-options " id="nav-app-launcher__dropdown-options" style="display:none;">
          <li id="ember4701" class="nav-app-launcher__dropdown-options-container ">
            <div class="nav-app-launcher__content">
              <ul>
                <li class="nav-app-launcher__title">
                  More HealthStream Apps
                </li>
                <li id="learning-app-nav-link" class="nav-dropdown__item nav-app-launcher__dropdown-item">
                  <a  target="_blank" href="http://www.healthstream.com" class="nav-app-launcher__dropdown-item-link block pv2 pr4 ">
                    <div class="svg-icon-wrap">
                         <img class="hstream-logo" src="content/images/hStream-h-logo.png">
                    </div>
                    <h5 title="hStream" class="nav-app-launcher__app-title Sans-13px-black-55%">hStream</h5>
                  </a>
                </li>
                <li id="job-postings-app-nav-link" class="nav-dropdown__item nav-app-launcher__dropdown-item">
                  <a data-control-name="nav.launcher_job_postings" target="_blank" href="http://www.healthstream.com"  class="nav-app-launcher__dropdown-item-link block pv2 pr4 "> 
                    <div class="svg-icon-wrap">
                        <img class="echo-logo" src="content/images/echo-logo.png">
                    </div>
                    <h5 title="Post a job" class="nav-app-launcher__app-title Sans-13px-black-55%">Echo</h5>
                  </a>
                </li>
                <li id="advertise_marketing_solutions-app-nav-link" class="nav-dropdown__item nav-app-launcher__dropdown-item">
                  <a data-control-name="nav.launcher_advertise_marketing_solutions" target="_blank" href="http://www.healthstream.com" class="nav-app-launcher__dropdown-item-link block pv2 pr4 "> 
                  <div class="svg-icon-wrap">
                       <img class="coi-logo" src="content/images/coi-logo.png">
                  </div>
                    <h5 title="Advertise" class="nav-app-launcher__app-title Sans-13px-black-55%">COI Smart</h5>
                  </a>
                </li>

              </ul>
            </div>
            <div class="nav-business-services__content">
              <ul id="ember4726" class="">
                <li class="nav-business-services__title">
                  More HealthStream Apps
                </li>
                <li id="talent-solutions-nav-link" class="nav-dropdown__item nav-business-services__item">
                  <a data-control-name=".business_talent_solutions" target="_blank" href="http://www.healthstream.com"  class="nav-business-services__link block ">
                    <h5 class="nav-dropdown__title">hStream</h5>
                    <p class="nav-dropdown__description">Small blerb about hStream</p>
                  </a>
                </li>
                <li id="sales-solutions-nav-link" class="nav-dropdown__item nav-business-services__item">
                  <a data-control-name=".business_sales_solutions" target="_blank" href="http://www.healthstream.com"  class="nav-business-services__link block ">
                    <h5 class="nav-dropdown__title">Echo Credentialing</h5>
                   <p class="nav-dropdown__description">Small blerb about Echo</p>
                  </a>
                </li>
                <li id="learning-solutions-nav-link" class="nav-dropdown__item nav-business-services__item">
                  <a data-control-name=".business_learning_solutions" target="_blank" href="http://www.healthstream.com" class="nav-business-services__link block ">
                    <h5 class="nav-dropdown__title">COI Smart</h5>
                    <p class="nav-dropdown__description">Small blerb about COI Smart</p>
                  </a>
                </li>

                <!--<li id="create-company-nav-link" class="nav-dropdown__action nav-business-services__item pv2 ph4">
                  <a data-control-name=".business_create_company" href="https://www.linkedin.com/company/add/show?trk=d_flagship3_nav" id="ember4734" class="nav-business-services__link block ">
                    <h5 class="nav-dropdown__title">
Create a Company Page
<span class="svg-icon-wrap">
<li-icon aria-hidden="true" type="plus-icon" size="small">
<svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon">
<g class="small-icon" style="fill-opacity: 1">
<path d="M14,9H9v5H7V9H2V7H7V2H9V7h5V9Z"></path>
</g>
</svg>
</li-icon>
</span>
</h5>
                  </a>
                </li>-->
              </ul>
            </div>
          </li>
        </ul>
        <!--</li>-->
        <!--</div>  -->
        <a href="#" class="trigger-open trigger-open-account"><i class="fa fa-angle-down"></i></a>
        <a href="#" class="trigger-close"><i class="fa fa-times"></i></a>
        <ul class="nav">
          <li><a href="/account-settings.php">Account Settings</a></li>
          <li class="hide-header-open"><a href="/account-settings.php?view=password">Manage Password</a></li>
          <li><a href="/alerts.php">Alerts <span class="badge">3</span></a></li>
          <li class="hide-header-open logout"><a href="#">Logout</a></li>
        </ul>
        <!--<div id="nav-app-launcher__dropdown" class="dropdown">-->
      
      </nav>
      <!-- /nav-account -->
    </div>
    <!-- /container -->
    <nav class="nav-main">
      <div class="container">
        <ul id="nav" class="nav">

          <li class=""><a href="/connections.php">Connections</a></li>
          <li class="active"><a href="/">To Do</a></li>
          <li class=""><a href="/completed.php">Completed</a></li>
          <li class=" dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="/advanced-practice.php">Advanced Practice</a></li>
              <li><a href="/certifications.php">Certifications</a></li>
              <li><a href="/documents.php">Documents</a></li>
              <li><a href="/education.php">Education</a></li>
              <li><a href="/goals.php">Goals</a></li>
              <li><a href="/job-descriptions.php">Job Descriptions</a></li>
              <li><a href="/disciplines-licenses.php">Licenses</a></li>
              <li><a href="/notes.php">Notes</a></li>
              <li><a href="/personal-information.php">Personal Information</a></li>
            </ul>
          </li>
          <li class=""><a href="/catalog.php">Catalog</a></li>
          <li class=""><a href="/event-calendar.php">Event Calendar</a></li>
          <li class="disabled"><a href="#">Help</a></li>
          <li class="visible-xs visible-sm"><a href="#">Logout</a></li>
          <!--<li class="app-drawer-container">-->
  


          <!--</li>-->
        </ul>
        
      </div>
      
      <!-- /container -->
    </nav>
    <!-- /nav-main -->
    <div class="support">
      <h3>Support</h3>
      <p>To talk with a customer service representative call 1-800-521-0574</p>
      <p><a href="#">Send us an email</a></p>
    </div>
  </div>
  <!-- /site-header -->
  <div class="focus focus-pageheader">
    <div class="fph-separator"></div>
    <div class="fph-table">
      <div class="fph-row">

        <div class="fph-cell fph-cell-text">
          <div class="fph-primary">
            <h1>My To-Do List</h1>
          </div>
          <div class="fph-secondary">
            <ul class="meta">
              <li><span class="meta-label">Total Tasks:</span><span class="meta-value">17</span></li>
              <li><span class="meta-label">Requiring Attention:</span><span class="meta-value">5</span></li>
            </ul>
          </div>

        </div>
        <div class="fph-cell fph-cell-button">
          <a href="course.php" class="btn btn-focus">
Quick Start <i class="fa fa-chevron-right"></i>
</a>
        </div>
        <div class="fph-cell fph-cell-supporting"><img src="/content/images/coaching-quick.png"></div>
      </div>
    </div>
  </div>
  <div class="layout">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <section class="section section-main section-box" data-equalize="layout-columns">
            <div class="filter-mini" data-target="tasks">
              <div class="filter-row">
                <div class="filter-cell">
                  <div class="filter-toggle">
                    Show: <i class="fa fa-fw fa-caret-down"></i>
                  </div>
                </div>
                <div class="filter-cell">
                  <ul>
                    <li>
                      <label class="checkbox">
                        <input type="checkbox" value='all' checked> All Tasks</label>
                    </li>
                    <li>
                      <label class="checkbox">
                        <input type="checkbox" value="1"> Assigned Learning</label>
                    </li>
                    <li>
                      <label class="checkbox">
                        <input type="checkbox" value="2"> Live Classes</label>
                    </li>
                    <li>
                      <label class="checkbox">
                        <input type="checkbox" value="3"> Elective Learning</label>
                    </li>
                    <li>
                      <label class="checkbox">
                        <input type="checkbox" value="4"> Profile Tasks</label>
                    </li>
                    <li>
                      <label class="checkbox">
                        <input type="checkbox" value="5"> Assessments</label>
                    </li>
                    <li>
                      <label class="checkbox">
                        <input type="checkbox" value="6"> Hidden Option with No Matches</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <section class="section" id="tasks">



              <div class="slat slat-attention slat-spaced slat-callout" data-filter-category="1">
                <div class="slat-default">
                  <div class="title"><a href="moc.php">RQI BLS</a></div>
                  <ul class="meta">
                    <li><span class="meta-type">MOC Curriculum</span></li>
                    <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                    <li class="meta-hide-xs"><span class="meta-label">Complete:</span><span class="meta-value">1 of 10</span></li>
                    <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value"><span class="meta-callout-label">Due:</span>Feb 19, 2017</span>
                    </li>
                  </ul>
                  <div class="action">
                    <a class="btn btn-sm btn-default" href="moc.php">Resume<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                  </div>
                </div>
              </div>


              <div class="slat slat-attention slat-spaced slat-callout" data-filter-category="5">
                <div class="slat-default">
                  <div class="title"><a href="assessment.php?assessment=performance-2&state=4">Nursing Fundamentals Appraisal</a></div>
                  <ul class="meta">
                    <li><span class="meta-type">Self Assessment</span></li>
                    <li><span class="meta-label">State:</span><span class="meta-value">Review</span></li>
                  </ul>
                  <div class="action action-split">
                    <div class="btn-group">
                      <a href="assessment.php?assessment=performance-2&state=4" class="btn btn-default btn-sm hidden-xs">Sign Off</a>
                      <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="assessment.php?assessment=performance-2&state=4">Sign Off</a></li>
                        <li><a href="#">Print</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>


              <div class="slat slat-callout slat-attention slat-spaced" data-filter-category="5">
                <div class="slat-default">
                  <div class="title"><a href="#">2016 Annual Assessment</a></div>
                  <ul class="meta">
                    <li><span class="meta-type">Self Assessment</span></li>
                    <li><span class="meta-label">State:</span><span class="meta-value">Review</span></li>
                    <li class="meta-callout"><span class="meta-label"><span class="visible-xs">Due:</span> </span><span class="meta-value">Assignment Deleted</span></li>
                  </ul>
                  <div class="action action-split">
                    <div class="btn-group">
                      <a href="#" class="btn btn-default btn-sm hidden-xs">Sign Off</a>
                      <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#">Sign Off</a></li>
                        <li><a href="#">Print</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>


              <div class="slat slat-attention slat-spaced" data-filter-category="2">
                <div class="slat-default">
                  <div class="title"><a href="registration.php">Pain Management Class</a></div>
                  <ul class="meta">
                    <li><span class="meta-type">Live Class</span></li>
                    <li><span class="meta-label">Status:</span><span class="meta-value">Not Registered</span></li>
                    <li class="meta-hide-xs"><span class="meta-label">Attendance:</span><span class="meta-value">Mandatory</span></li>
                  </ul>
                  <div class="action">
                    <a class="btn btn-sm btn-default" href="registration.php">Choose Class<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                  </div>
                </div>
              </div>


              <div class="slat slat-spaced slat-callout" data-filter-category="5">
                <div class="slat-default">
                  <div class="title"><a href="assessment.php?assessment=competency-1&progress=1">Initial Nursing Competency Appraisal</a></div>
                  <ul class="meta">
                    <li><span class="meta-type">Self Assessment</span></li>
                    <li><span class="meta-label">State:</span><span class="meta-value">Evaluate</span></li>
                    <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Mar 28, 2017</span>
                    </li>
                  </ul>
                  <div class="action action-split">
                    <div class="btn-group">
                      <a href="assessment.php?assessment=competency-1&progress=1" class="btn btn-default btn-sm hidden-xs">Resume</a>
                      <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="assessment.php?assessment=competency-1&progress=1">Resume</a></li>
                        <li><a href="#">Print</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>


              <div class="slat slat-spaced slat-callout" data-filter-category="5">
                <div class="slat-default">
                  <div class="title"><a href="assessment.php?assessment=competency-14&user=peer-1">Initial Nursing Competency Appraisal - Andrzejewski, Alexa</a></div>
                  <ul class="meta">
                    <li><span class="meta-type">Peer Assessment</span></li>
                    <li><span class="meta-label">State:</span><span class="meta-value">Evaluate</span></li>
                    <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Mar 28, 2017</span>
                    </li>
                  </ul>
                  <div class="action action-split">
                    <div class="btn-group">
                      <a href="assessment.php?assessment=competency-14&user=peer-1" class="btn btn-default btn-sm hidden-xs">Start</a>
                      <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="assessment.php?assessment=competency-14&user=peer-1">Start</a></li>
                        <li><a href="#">Print</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>


              <div class="slat slat-spaced slat-callout" data-filter-category="5">
                <div class="slat-default">
                  <div class="title"><a href="assessment.php?assessment=performance-1">Annual Performance Appraisal</a></div>
                  <ul class="meta">
                    <li><span class="meta-type">Self Assessment</span></li>
                    <li><span class="meta-label">Status:</span><span class="meta-value">Not Yet Started</span></li>
                    <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Apr 5, 2017</span>
                    </li>
                  </ul>
                  <div class="action action-split">
                    <div class="btn-group">
                      <a href="assessment.php?assessment=performance-1" class="btn btn-default btn-sm hidden-xs">Start</a>
                      <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="assessment.php?assessment=performance-1">Start</a></li>
                        <li><a href="#">Print</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>


              <div class="slat slat-spaced slat-callout" data-filter-category="1">
                <div class="slat-default">
                  <div class="title"><a href="curriculum.php">Pain Management Curriculum</a></div>
                  <ul class="meta">
                    <li><span class="meta-type">Curriculum</span></li>
                    <li><span class="meta-label">Status:</span><span class="meta-value">In Progress</span></li>
                    <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Apr 20, 2017</span>
                    </li>
                  </ul>
                  <div class="action">
                    <a class="btn btn-sm btn-default" href="curriculum.php">Resume<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                  </div>
                </div>
              </div>


              <div class="slat slat-spaced slat-callout" data-filter-category="1">
                <div class="slat-default">
                  <div class="title"><a href="course-institution-specific.php">Fire Safety</a></div>
                  <ul class="meta">
                    <li><span class="meta-type">Course</span></li>
                    <li><span class="meta-label">Status:</span><span class="meta-value">Assigned</span></li>
                    <li class="meta-hide-xs"><span class="meta-label">Complete:</span><span class="meta-value">0 of 3</span></li>
                    <li class="meta-hide-xs"><span class="meta-label">Institution:</span><span class="meta-value">General Hospital</span></li>
                    <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value"><span class="meta-callout-label">Due:</span>Apr 20, 2017</span>
                    </li>
                  </ul>
                  <div class="action">
                    <a class="btn btn-sm btn-default" href="course-institution-specific.php">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                  </div>
                </div>
              </div>


              <div class="slat slat-spaced slat-callout" data-filter-category="4">
                <div class="slat-default">
                  <div class="title"><a href="profile-activity.php">Please Update Your Profile</a></div>
                  <ul class="meta">
                    <li><span class="meta-type">Profile Activity</span></li>
                    <li><span class="meta-label">Status:</span><span class="meta-value">Assigned</span></li>
                    <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value"><span class="meta-callout-label">Due:</span>Apr 20, 2017</span>
                    </li>
                  </ul>
                  <div class="action">
                    <a class="btn btn-sm btn-default" href="profile-activity.php">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                  </div>
                </div>
              </div>


              <div class="slat slat-spaced slat-callout" data-filter-category="5">
                <div class="slat-default">
                  <div class="title"><a href="assessment.php?assessment=competency-6">Nursing Skills Assessment – Reflective/Development Plan 1 – Juniper, Stephanie</a></div>
                  <ul class="meta">
                    <li><span class="meta-type">Self Assessment</span></li>
                    <li><span class="meta-label">State:</span><span class="meta-value">Evaluate</span></li>
                    <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value"><span class="meta-callout-label">Due:</span>Apr 27, 2017</span>
                    </li>
                  </ul>
                  <div class="action action-split">
                    <div class="btn-group">
                      <a href="assessment.php?assessment=competency-6" class="btn btn-default btn-sm hidden-xs">Start</a>
                      <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="assessment.php?assessment=competency-6">Start</a></li>
                        <li><a href="#">Print</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>


              <div class="slat slat-spaced slat-callout" data-filter-category="2">
                <div class="slat-default">
                  <div class="title"><a href="/le-registration-registered-event.php">Prerequisite Title</a></div>
                  <ul class="meta">
                    <li><span class="meta-type">Learning Content</span></li>
                    <li><span class="meta-label">Applies To:</span><span class="meta-value">Live Event Training</span></li>
                    <li><span class="meta-label">Status:</span><span class="meta-value">Assigned</span></li>
                    <li class="meta-callout"><span class="meta-label">Due:</span><span class="meta-value"><div><span class="meta-callout-label">Due:</span>Apr 30, 2017 at 2:30pm</div>
                </span>
                </li>
                </ul>
                <div class="action">
                  <a class="btn btn-sm btn-default" href="#">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
                </div>
              </div>
        </div>


        <div class="slat slat-spaced slat-callout" data-filter-category="2">
          <div class="slat-default">
            <div class="title"><a href="/le-registration-registered-event.php">Live Event Training</a></div>
            <ul class="meta">
              <li><span class="meta-type">Live Event</span></li>
              <li><span class="meta-label">Status:</span><span class="meta-value">Registered</span></li>
              <li class="meta-hide-xs"><span class="meta-label">Location:</span><span class="meta-value">Cummins Station: 450</span></li>
              <li class="meta-callout"><span class="meta-label">Date:</span><span class="meta-value"><div>Apr 30, 2017 at 3:30pm - </div>
<div>May 10, 2017 at 3:30pm</div></span></li>
            </ul>
            <div class="action action-split">
              <div class="btn-group">
                <a href="/le-registration-registered-event-3.php" class="btn btn-default btn-sm hidden-xs">View Event</a>
                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="/le-registration-registered-event-3.php">View Event</a></li>
                  <li><a href="#">Add to Calendar</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>


        <div class="slat slat-spaced slat-callout" data-filter-category="2">
          <div class="slat-default">
            <div class="title"><a href="/le-registration-registered-event.php">Live Event Training 2 Evaluation</a></div>
            <ul class="meta">
              <li><span class="meta-type">Learning Content</span></li>
              <li><span class="meta-label">Applies To:</span><span class="meta-value">Live Event Training 2</span></li>
              <li><span class="meta-label">Status:</span><span class="meta-value">Assigned</span></li>
              <li class="meta-callout"><span class="meta-label">Date:</span><span class="meta-value"><span class="meta-value">
<div>Due: May 10, 2017, 2014</div></span></span>
              </li>
            </ul>
            <div class="action">
              <a class="btn btn-sm btn-default" href="curriculum.php">Start<i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
            </div>
          </div>
        </div>


        <div class="slat slat-spaced slat-callout" data-filter-category="2">
          <div class="slat-default">
            <div class="title"><a href="/le-registration-registered-event.php">Live Event Training 2</a></div>
            <ul class="meta">
              <li><span class="meta-type">Live Event</span></li>
              <li><span class="meta-label">Status:</span><span class="meta-value">Graded</span></li>
              <li class="meta-hide-xs"><span class="meta-label">Location:</span><span class="meta-value">Cummins Station: 450</span></li>
              <li class="meta-callout"><span class="meta-label">Date:</span><span class="meta-value"><span class="meta-value"><div>May 10, 2017 at 3:30pm - </div>
<div>May 20, 2017 at 3:30pm</div></span></span>
              </li>
            </ul>
            <div class="action action-split">
              <div class="btn-group">
                <a href="#" class="btn btn-default btn-sm hidden-xs">View Event</a>
                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="#">View Event</a></li>
                  <li><a href="#">Add to Calendar</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>


        <div class="slat slat-spaced slat-callout" data-filter-category="2">
          <div class="slat-default">
            <div class="title"><a href="/le-registration-registered-event.php">NRP Course Name: Live Event Title</a></div>
            <ul class="meta">
              <li><span class="meta-type">Live Event</span></li>
              <li><span class="meta-label">Status:</span><span class="meta-value">Registered</span></li>
              <li class="meta-hide-xs"><span class="meta-label">Location:</span><span class="meta-value">Cummins Station: 450</span></li>
              <li class="meta-callout"><span class="meta-value"><span class="meta-value"><div>Jul 15, 2014 at 3:30pm - </div>
<div>Jul 25, 2014 at 3:30pm</div></span></span>
              </li>
            </ul>
            <div class="action action-split">
              <div class="btn-group">
                <a href="/le-registration-registered-event.php" class="btn btn-default btn-sm hidden-xs">View Event</a>
                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="/le-registration-registered-event.php">View Event</a></li>
                  <li><a href="#">Add to Calendar</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>


        <div class="slat slat-spaced slat-callout" data-filter-category="3">
          <div class="slat-default">
            <div class="title"><a href="course-elective.php">Managment Development Skills</a></div>
            <ul class="meta">
              <li><span class="meta-type">Course</span></li>
              <li><span class="meta-label">Status:</span><span class="meta-value">Not Yet Started</span></li>
              <li class="meta-hide-xs"><span class="meta-label">Enrolled By:</span><span class="meta-value">Self</span></li>
              <li class="meta-callout"><span class="meta-label">Due: </span><span class="meta-value">Elective</span></li>
            </ul>
            <div class="action action-split">
              <div class="btn-group">
                <a href="course-elective.php" class="btn btn-default btn-sm hidden-xs">Start</a>
                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="course-elective.php">Start</a></li>
                  <li><a href="#">Un-enroll</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        </section>
        </section>
        <!-- /section-main -->
      </div>
      <!-- /column -->

      <div class="col-md-3">
        <section class="section section-sidebar" data-equalize="layout-columns">
          <section class="section section-box">
            <h3>Reminder</h3>
            <ul class="list-links">
              <li><a href="/highlight.php">Scheduled Downtime 4/19 at 11PM</a></li>
            </ul>
          </section>
          <section class="section section-box">
            <h3>Options</h3>
            <ul class="list-links">
              <li><a id="myAssessmentsLink" href="/todo-pending.php">My Assessments (old version)</a></li>
              <li><a href="/todo-pending.php">My Submitted Assessments</a></li>
              <li><a href="/todo-optional.php">Optional Assessments</a></li>
            </ul>
          </section>

          <section class="section section-box">
            <h3>Support</h3>
            <p>To talk with a customer service representative call 1-800-521-0574</p>
          </section>

        </section>
        <!-- /section-sidebar -->
      </div>
      <!-- /column -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
  </div>
  <!-- /layout -->


  <div class="site-footer ">
    <div class="focus focus-promo">
      <div class="container">

      </div>
    </div>
    <div class="container">
      <div class="links">
        <div class="row">
          <div class="col-md-9">
            <section class="section">
              <h4>Sitemap</h4>

              <div class="row">
                <div class="col-sm-3">
                  <section class="section">
                    <ul class="list-unstyled">
                      <li><a href="#">To-Do List</a></li>
                      <li><a href="#">Completions</a></li>
                      <li><a href="#">Connections</a></li>
                    </ul>
                  </section>
                </div>
                <div class="col-sm-3">
                  <section class="section">
                    <ul class="list-unstyled">
                      <li><a href="#">Certifications</a></li>
                      <li><a href="#">Licenses</a></li>
                      <li><a href="#">Resuscitation Cards</a></li>
                    </ul>
                  </section>
                </div>
                <div class="col-sm-3">
                  <section class="section">
                    <ul class="list-unstyled">
                      <li><a href="#">Catalog</a></li>
                      <li><a href="#">Upcoming Events</a></li>
                      <li><a href="#">Help</a></li>
                    </ul>
                  </section>
                </div>
                <div class="col-sm-3">
                  <section class="section">
                    <ul class="list-unstyled">
                      <li><a href="#">Account Settings</a></li>
                      <li><a href="#">Logout</a></li>
                    </ul>
                  </section>
                </div>
              </div>
            </section>
          </div>
          <div class="col-md-3">
            <section class="section support">
              <h4>Support</h4> To talk with a customer service representative call 1-800-521-0574
            </section>
          </div>
        </div>
      </div>
      <div class="legal">
        <div class="divider"></div>
        <div class="logo"><img src="./content/images/logo-healthstream-small.png" alt="HealthStream"></div>
        <div class="copyright">Copyright &copy; 2017 HealthStream, Inc. All Rights Reserved.</div>
        <div class="build">Build: 13.01.28.895.8 | O:STS2 | S:192.231.71.2</div>
      </div>
      <ul class="site-palette">
        <li id="theme-neutral-1"></li>
        <li id="theme-neutral-2"></li>
        <li id="theme-neutral-3"></li>
        <li id="theme-neutral-4"></li>
        <li id="theme-neutral-5"></li>
        <li id="theme-neutral-6"></li>
        <li id="theme-neutral-7"></li>
        <li id="theme-neutral-8"></li>
        <li id="theme-neutral-9"></li>
        <li id="theme-neutral-10"></li>
        <li id="theme-primary-lightest"></li>
        <li id="theme-primary-lighter"></li>
        <li id="theme-primary-light"></li>
        <li id="theme-primary"></li>
        <li id="theme-primary-dark"></li>
        <li id="theme-primary-darker"></li>
        <li id="theme-primary-darkest"></li>
        <li id="theme-accent"></li>
        <li id="theme-focus-btn"></li>
      </ul>
    </div>
  </div>
  <!-- PROTOTYPE ONLY -->
  <div class="nav-proto">
    <a href="#modal-proto" data-toggle="modal"><i class="fa fa-sitemap"></i></a>
    <div id="modal-proto" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
            <h4 class="modal-title">Prototype Sitemap</h4>
          </div>
          <div class="modal-body">
            <h5>Login Screens</h5>
            <ol>
              <li><a href="/authentication/login.php">Login</a></li>
              <li><a href="/authentication/affiliate.php">Affiliate Selector</a></li>
              <li><a href="/authentication/affiliate-stacked.php">Affiliate Selector: Stacked</a></li>
              <li><a href="/authentication/password-reset.php">Password Reset (from email link)</a></li>
            </ol>
            <hr>
            <h5>Account Section</h5>
            <ol>
              <li><a href="account-settings.php">Account Settings</a></li>
              <li><a href="alerts.php">Alerts: Messages</a></li>
              <li><a href="alerts-preferences.php">Alerts: Preferences</a></li>
            </ol>
            <hr>
            <h5>My Connections Section</h5>
            <ol>
              <li><a href="connections.php">My Connections</a></li>
            </ol>
            <hr>
            <h5>To Do Section</h5>
            <ol>
              <li><a href="index.php">To Do</a></li>
              <li><a href="todo-no-tasks.php">To Do w/o Tasks</a></li>
              <li><a href="course.php">Course</a></li>
              <li><a href="course-combined.php">Course: Combined</a></li>
              <li><a href="course-complete.php">Course: Completed</a></li>
              <li><a href="course-elective.php">Course: Elective</a></li>
              <li><a href="course-expiring.php">Course: Expiring</a></li>
              <li><a href="course-enroll.php">Course: Enroll</a></li>
              <li><a href="course-share.php">Course: w/ Share Controls</a></li>
              <li><a href="equivalent.php">Equivalent: Not Enrolled</a></li>
              <li><a href="equivalent-with-selection.php">Equivalent: Enrolled</a></li>
              <li><a href="equivalent-enrolled-course.php">Equivalent: Currently Enrolled Course</a></li>
              <li><a href="equivalent-unenrolled-course.php">Equivalent: Alternate Course</a></li>
              <li><a href="curriculum.php">Curriculum</a></li>
              <li><a href="curriculum-sequential.php">Curriculum: Sequential</a></li>
              <li><a href="curriculum-course.php">Curriculum: Course</a></li>
              <li><a href="curriculum-course-complete.php">Curriculum: Course Completed</a></li>
              <li><a href="curriculum-equivalent.php">Curriculum: Equivalent Not Enrolled</a></li>
              <li><a href="curriculum-equivalent-with-selection.php">Curriculum: Equivalent Enrolled</a></li>
              <li><a href="curriculum-equivalent-enrolled-course.php">Curriculum: Currently Enrolled Course in Equivalent</a></li>
              <li><a href="curriculum-equivalent-unenrolled-course.php">Curriculum: Alternate Course in Equivalent</a></li>
              <li><a href="registration.php">Class Schedule: Not Registered</a></li>
              <li><a href="registration-locked.php">Class Schedule: Locked</a></li>
              <li><a href="registration-with-selection.php">Class Schedule: Registered</a></li>
              <li><a href="registration-registered-class-single.php">Class Schedule: Currently Registered Class w/ Single Session</a></li>
              <li><a href="registration-registered-class.php">Class Schedule: Currently Registered Class w/ Multiple Sessions</a></li>
              <!-- <li><a href="registration-unregistered-class.php">Class Schedule: Alternate Class</a></li> -->
              <li><a href="registration-virtual.php">Virtual Class Schedule: Not Registered</a></li>
              <li><a href="registration-virtual-with-selection.php">Virtual Class Schedule: Registered</a></li>
              <li><a href="registration-virtual-registered-class-single.php">Virtual Class Schedule: Currently Registered Class</a></li>
              <li><a href="course-virtual-now.php">Virtual Class: Starting Now on Course</a></li>
              <li><a href="attachment-incomplete.php">Learning Activity: Incomplete Attachment</a></li>
              <li><a href="attachment-complete.php">Learning Activity: Complete Attachment</a></li>
              <li><a href="video.php">Learning Activity: Video</a></li>
              <li><a href="test-start.php">Test: Start</a></li>
              <li><a href="test-first.php">Test: First Page</a></li>
              <li><a href="test-middle.php">Test: Middle Page</a></li>
              <li><a href="test-last.php">Test: Last Page</a></li>
              <li><a href="test-results.php">Test: Results</a></li>
              <li><a href="test-results-by-type.php">Test: Results by Type</a></li>
              <li><a href="test-results-minimal.php">Test: Results Minimal</a></li>
              <li><a href="evaluation.php">Evaluation</a></li>
            </ol>
            <hr>
            <h5>SIM</h5>
            <ol>
              <li><a href="sim-event.php">SIM: SIM Event (course)</a></li>
              <li><a href="sim-event-registered.php">SIM: SIM Event (course w/ registered class)</a></li>
              <li><a href="sim-session.php">SIM: SIM Session (class schedule)</a></li>
              <li><a href="sim-session-registered-session.php">SIM: SIM Session (class detail)</a></li>
              <li><a href="sim-session-registration-with-selection.php">SIM: SIM Session (class schedule w/ registered class)</a></li>
            </ol>
            <hr>
            <h5>MOC/RQI</h5>
            <ol>
              <li><a href="moc.php">MOC/RQI: Full Schedule</a></li>
            </ol>
            <hr>
            <h5>Checklist</h5>
            <ol>
              <li><a href="checklist-student.php">Checklist: Student View</a></li>
              <li><a href="checklist-student-graded.php">Checklist: Student View, Graded</a></li>
              <li><a href="checklist-reviewer-search.php">Checklist: Reviewer View, Search</a></li>
              <li><a href="checklist-reviewer.php">Checklist: Reviewer View</a></li>
              <li><a href="checklist-reviewer-saved.php">Checklist: Reviewer View, Previously Saved</a></li>
              <li><a href="checklist-reviewer-locked.php">Checklist: Reviewer View, Locked</a></li>
              <li><a href="checklist-print.php">Checklist: Print View</a></li>
            </ol>
            <hr>
            <h5>Assessments</h5>
            <ol>
              <li>Rater-Only Pages
                <ol style="margin:3px 0 15px">
                  <li><a href="todo-rater.php">To-Do List w/ Assessment Rater Nav &amp; Content</a></li>
                  <li><a href="assessment-overview.php">Assessment Rater Overview</a></li>
                </ol>
              </li>
              <li>Competency Assessment: As Employee
                <ol style="margin:3px 0 15px">
                  <li><a href="assessment.php?assessment=competency-1&user=employee">Employee, no progress</a></li>
                  <li><a href="assessment.php?assessment=competency-1&user=employee&progress=1">Employee, some progress</a></li>
                  <li><a href="assessment.php?assessment=competency-1&user=employee&progress=2">Employee, no progress</a></li>
                </ol>
              </li>
              <li>Competency Assessment: As Rater
                <ol style="margin:3px 0 15px">
                  <li><a href="assessment.php?assessment=competency-1&user=rater">Rater, no progress</a></li>
                  <li><a href="assessment.php?assessment=competency-1&user=rater&progress=3">Rater, some progress</a></li>
                  <li><a href="assessment.php?assessment=competency-1&user=rater&progress=4">Rater, complete</a></li>
                  <li><a href="assessment.php?assessment=competency-1&user=rater&state=1">Rater, review</a></li>
                  <li><a href="assessment.php?assessment=competency-1&user=rater&state=3">Rater, choose signoff type</a></li>
                  <li><a href="assessment.php?assessment=competency-1&user=rater&state=4">Rater, waiting on employee signoff</a></li>
                  <li><a href="assessment.php?assessment=competency-1&user=rater&state=5">Rater, signoff</a></li>
                </ol>
              </li>
              <li>Competency Assessment: As Peer
                <ol style="margin:3px 0 15px">
                  <li><a href="assessment.php?assessment=competency-1&user=peer-1">Peer, no progress</a></li>
                  <li><a href="assessment.php?assessment=competency-1&user=peer-1&progress=1">Peer, complete</a></li>
                </ol>
              </li>
              <li>Competency Assessment: As Manager
                <ol style="margin:3px 0 15px">
                  <li><a href="assessment-signoff-manager-waiting-rater.php">Manager, waiting on rater signoff </a></li>
                  <li><a href="assessment-signoff-manager.php">Manager, signoff</a></li>
                </ol>
              </li>
              <li>Performance Assessment: As Employee
                <ol style="margin:3px 0 15px">
                  <li><a href="assessment.php?assessment=performance-1&user=employee">Employee, no progress</a></li>
                  <li><a href="assessment.php?assessment=performance-1&user=employee&progress=1">Employee, some progress</a></li>
                  <li><a href="assessment.php?assessment=performance-1&user=employee&progress=2">Employee, no progress</a></li>
                </ol>
              </li>
              <li>Performance Assessment: As Rater
                <ol style="margin:3px 0 15px">
                  <li><a href="assessment.php?assessment=performance-1&user=rater">Rater, no progress</a></li>
                  <li><a href="assessment.php?assessment=performance-1&user=rater&progress=3">Rater, some progress</a></li>
                  <li><a href="assessment.php?assessment=performance-1&user=rater&progress=4">Rater, complete</a></li>
                  <li><a href="assessment.php?assessment=performance-1&user=rater&state=1">Rater, review</a></li>
                  <li><a href="assessment.php?assessment=performance-1&user=rater&state=3">Rater, choose signoff type</a></li>
                  <li><a href="assessment.php?assessment=performance-1&user=rater&state=4">Rater, waiting on employee signoff</a></li>
                  <li><a href="assessment.php?assessment=performance-1&user=rater&state=5">Rater, signoff</a></li>
                </ol>
              </li>
              <li>Performance Assessment: As Peer
                <ol style="margin:3px 0 15px">
                  <li><a href="assessment.php?assessment=performance-1&user=peer-1">Peer, no progress</a></li>
                  <li><a href="assessment.php?assessment=competency-1&user=peer-1&progress=1">Peer, complete</a></li>
                </ol>
              </li>
              <li>Archived Versions (some my no longer work correctly)
                <ol style="margin:3px 0 15px">
                  <li><a href="assessment-wide.php">Assessment Wide</a></li>
                  <li><a href="assessment-wide-rate.php">Assessment Wide: Statement Rating</a></li>
                  <li><a href="assessment-wide-rate-readonly.php">Assessment Wide: Statement Rating (readonly)</a></li>
                  <li><a href="assessment-wide-approval.php">Assessment Wide: Approval</a></li>
                  <li><a href="assessment-wide-review.php">Assessment Wide: Review</a></li>
                  <li><a href="assessment-wide-signoff.php">Assessment Wide: Sign Off</a></li>
                  <li><a href="todo-grouped-assessments.php">Assessment: To-Do Page w/ Grouped Assessments</a></li>
                  <li><a href="assessment.php">Assessment</a></li>
                  <li><a href="assessment-average-rating.php"> Assessment w/ Average Rating</a></li>
                  <li><a href="assessment-signoff.php">Assessment: Sign Off</a></li>
                  <li><a href="assessment-rate.php">Assessment: Statement Rating</a></li>
                  <li><a href="assessment-rate-multi.php">Assessment: Statement Rating (Multi-Rate &amp; Share)</a></li>
                  <li><a href="assessment-summary.php">Assessment: Summary</a></li>
                  <li><a href="assessment-review.php">Assessment: Review</a></li>
                  <li><a href="assessment-review-rp.php">Assessment: Review w/ Reflective Plan</a></li>
                  <li><a href="assessment-review-rp2.php">Assessment: Review w/ Reflective Plan Alternate</a></li>
                  <li><a href="assessment-approval.php">Assessment: Approval</a></li>
                  <li><a href="assessment-signoff.php">Assessment: Sign Off</a></li>
                  <li><a href="assessment-overview.php">Assessment: Overview w/ Peers Count</a></li>
                  <li><a href="assessment-overview-2.php">Assessment: Overview w/ Peers Progress</a></li>
                  <li><a href="assessment-overview-3.php">Assessment: Overview w/ Peers Progress &amp; Due Date</a></li>
                  <li><a href="assessment-manage-rater-peers.php">Assessment: Manage Rater &amp; Peers</a></li>
                  <li><a href="assessment-dynamic-section.php">Assessment: Dynamic Section</a></li>
                  <li><a href="assessment-search-rater.php">Assessment: Search Raters</a></li>
                  <li><a href="assessment-search-peers.php">Assessment: Search Peers</a></li>
                  <li><a href="assessment-search-statements.php">Assessment: Search Statements</a></li>
                  <li><a href="assessment-search-job-descriptions.php">Assessment: Search Job Descriptions</a></li>
                  <li><a href="assessment-performance-employee-summary.php">Performance Assessment: Employee Summary</a></li>
                  <li><a href="assessment-performance-employee-rate-job.php">Performance Assessment: Employee Rate Job</a></li>
                  <li><a href="assessment-performance-employee-rate.php">Performance Assessment: Employee Rate Statement</a></li>
                  <li><a href="assessment-performance-employee-rate-goal.php">Performance Assessment: Employee Rate Goal</a></li>
                  <li><a href="assessment-performance-employee-signoff-combined.php">Performance Assessment: Employee Sign Off w/ Ratings</a></li>
                  <li><a href="assessment-performance-employee-signoff.php">Performance Assessment: Employee Sign Off w/o Ratings</a></li>
                  <li><a href="assessment-performance-rater-summary.php">Performance Assessment: Rater Summary</a></li>
                  <li><a href="assessment-performance-employee-rate-goal.php">Performance Assessment: Employee Rate Goal</a></li>
                  <li><a href="assessment-performance-rater-rate-job.php">Performance Assessment: Rater Rate Job</a></li>
                  <li><a href="assessment-performance-rater-rate.php">Performance Assessment: Rater Rate Statement</a></li>
                  <li><a href="assessment-performance-rater-review.php">Performance Assessment: Rater Review</a></li>
                  <li><a href="assessment-performance-rater-signoff.php">Performance Assessment: Rater Sign Off</a></li>
                  <li><a href="assessment-performance-rater-signoff-remote.php">Performance Assessment: Rater Sign Off Remote</a></li>
                  <li><a href="assessment-competency-employee-summary.php">Competency Assessment: Employee Summary</a></li>
                  <li><a href="assessment-competency-employee-rate.php">Competency Assessment: Employee Rate Statement</a></li>
                  <li><a href="assessment-competency-employee-signoff-combined.php">Competency Assessment: Employee Sign Off w/ Ratings</a></li>
                  <li><a href="assessment-competency-rater-summary.php">Competency Assessment: Rater Summary</a></li>
                  <li><a href="assessment-competency-rater-rate.php">Competency Assessment: Rater Rate Statement</a></li>
                  <li><a href="assessment-competency-rater-review.php">Competency Assessment: Rater Review</a></li>
                  <li><a href="assessment-competency-rater-signoff.php">Competency Assessment: Rater Sign Off</a></li>
                  <li><a href="assessment-competency-rater-signoff-remote.php">Competency Assessment: Rater Sign Off Remote</a></li>
                  <li><a href="assessment-performance-employee-rate-goal.php">Performance Assessment: Employee Rate Goal</a></li>
                  <li><a href="assessment-performance-rater-rate-job.php">Performance Assessment: Rater Rate Job</a></li>
                </ol>
              </li>
            </ol>
            <hr>
            <h5>Profile / Portfolio Section</h5>
            <ol>
              <li><a href="transcript.php">Transcript</a></li>
              <li><a href="advanced-practice.php">Advanced Practice</a></li>
              <li><a href="education.php">Education</a></li>
              <li><a href="certifications.php">Certifications</a></li>
              <li><a href="disciplines-licenses.php">Licenses</a></li>
              <li><a href="documents.php">Documents</a></li>
              <li><a href="goals.php">Goals</a></li>
              <li><a href="job-descriptions.php">Job Descriptions</a></li>
              <li><a href="notes.php">Notes</a></li>
              <li><a href="personal-information.php">Personal Information</a></li>
              <li><a href="profile-activity.php">Profile Activity</a></li>
              <li><a href="portfolio.php">Portfolio</a></li>
              <li><a href="portfolio-modals.php">Portfolio: All Modals</a></li>
              <li><a href="portfolio-print.php">Portfolio: Print Version</a></li>
              <li><a href="portfolio-print-legend.pdf">Portfolio: Print Version Legend [pdf]</a></li>
            </ol>
            <hr>
            <h5>Catalog Section</h5>
            <ol>
              <li><a href="catalog-unified-main.php">Catalog: Search w/ Carousel (differs from production)</a></li>
              <li><a href="catalog-results.php">Catalog: Search Results (differs from production)</a></li>
              <li><a href="course-enroll.php">Catalog: Course Detail</a></li>
              <li><a href="payment.php">Checkout</a></li>
              <li>TalentTracks
                <ol style="margin:3px 0 15px">
                  <li><a href="talenttracks-landing.php">TalentTracks: Landing Page</a></li>
                  <li><a href="talenttracks-survey.php">TalentTracks: Survey Page</a></li>
                </ol>
              </li>
            </ol>
            <hr>
            <h5>HealthStream ID / Global ID / NRP</h5>
            <ol>
              <li><a href="healthstream-id.php">HealthStream ID: Index of all pages in workflow</a></li>
              <li><a href="global-id.php">Global ID: Login/Create Account Modal</a></li>
              <li><a href="global-id-growl.php">Global ID: Verify Email (Growl)</a></li>
              <li><a href="global-id-interruption.php">Global ID: Verify Email (Interrupt)</a></li>
              <li><a href="authentication/affiliate-global-id.php">Global ID: Change Affliliation</a></li>
              <li><a href="nrp.php">NRP: Create Portable Account</a></li>
              <li><a href="nrp-verified.php">NRP: Verified Portable Account</a></li>
            </ol>
            <hr>
            <h5>Team Section</h5>
            <ol>
              <li><a href="team.php">Team: Assessments (Round 1)</a></li>
              <li><a href="team-people.php">Team: People (Concept)</a></li>
              <li><a href="team-tasks.php">Team: Tasks (Concept)</a></li>
              <li><a href="team-person.php">Team: Person (Concept)</a></li>
            </ol>
            <hr>
            <h5>Connect Section</h5>
            <ol>
              <li><a href="connect-combined.php">Connect: Combined</a></li>
              <li><a href="connect-combined-completed.php">Connect: Combined Completed Course</a></li>
            </ol>
            <hr>
            <h5>Other Bits</h5>
            <ol>
              <li><a href="highlight.php">Highlight</a></li>
              <li><a href="receipt.php">Receipt</a></li>
              <li><a href="unsupported-browser.php">Unsupported Browser</a></li>
              <li><a href="unsupported-browser-2.php">Unsupported Browser w/ Detection</a></li>
              <li><a href="ewc.php">EWC Player Navigation</a></li>
              <li><a href="growls.php">Growl-Style Examples</a></li>
              <li><a href="interruptions.php">Interruption Modal Examples</a></li>
              <li><a href="error.php">Error Page</a></li>
              <li><a href="error-static.php">Error Page - Static</a></li>
              <li><a href="error-email.php">Error Page w/ User Message</a></li>
              <li><a href="error-404.php">Error Page (404)</a></li>
              <li><a href="slat-actions.php">Slat Actions</a></li>
              <li><a href="select2-slats.php">Select2 w/ Slats Examples</a></li>
              <li><a href="home.php">Homepage w/ Calendar</a></li>
            </ol>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>
  <!-- /PROTOTYPE ONLY -->

  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-30360364-5', 'auto');
    ga('send', 'pageview');
  </script>

  <script src="/scripts/jquery.js"></script>
  <script src="/scripts/bootstrap.plugins.js"></script>
  <script src="/scripts/bootstrap-datepicker.js"></script>
  <script src="/scripts/bootstrap-timepicker.js"></script>
  <script src="/scripts/charts.js"></script>
  <script src="/scripts/gritter.js"></script>
  <script src="/scripts/select2.js"></script>
  <script src="/scripts/slick.js"></script>
  <script src="/scripts/tinysort.js"></script>
  <script src="/scripts/healthstream.js"></script>
  <script src="/scripts/healthstream.jquery.js"></script>
  <script src="/scripts/healthstream.utilities.equalize.js"></script>
  <script src="/scripts/healthstream.utilities.limitHeight.js"></script>
  <script src="/scripts/healthstream.utilities.toggleText.js"></script>
  <script src="/scripts/healthstream.utilities.growl.js"></script>
  <script src="/scripts/healthstream.utilities.interrupt.js"></script>
  <script src="/scripts/healthstream.focusbar.js"></script>
  <script src="/scripts/healthstream.stickybar.js"></script>
  <script src="/scripts/healthstream.filtermini.js"></script>
  <script src="/scripts/healthstream.checklist.js"></script>
  <script src="/scripts/healthstream.checkable.js"></script>
  <script src="/scripts/prototype.validation/formValidation.min.js"></script>
  <script src="/scripts/prototype.validation/framework/bootstrap.min.js"></script>
  <!--<script src="/scripts/healthstream.tours/plugin/bootstrap-tour.js"></script>-->
  <!--<script src="/scripts/healthstream.tours/localization/localization-eng-tour.js"></script>-->
  <!--<script src="/scripts/healthstream.tours/tours/to-do-tour.js"></script>-->
  <script>
    $(function() {

      // helper to keep the task count correct
      $('.focus-pageheader .meta-value:eq(0)').text($('#tasks .slat').length);
      $('.focus-pageheader .meta-value:eq(1)').text($('#tasks .slat-attention').length);


      $('.app-drawer-icon').click(function() {
        if ($('.nav-item--app-launcher__dropdown-options').hasClass("drawer-open")) {
          $('.nav-item--app-launcher__dropdown-options').hide();
          $('.nav-item--app-launcher__dropdown-options').removeClass("drawer-open");
        } else {
          $('.nav-item--app-launcher__dropdown-options').show();
          $('.nav-item--app-launcher__dropdown-options').addClass("drawer-open");
        }
        // $('.nav-app-launcher__dropdown-options-container').show();
      });

      $(window).click(function() {
            if ($('.nav-item--app-launcher__dropdown-options').hasClass("drawer-open")) {
                $('.nav-item--app-launcher__dropdown-options').hide();
                $('.nav-item--app-launcher__dropdown-options').removeClass("drawer-open");
            } 
        });

        $('.nav-item--app-launcher__dropdown-options').click(function(event){
            event.stopPropagation();
        });
         $('.app-drawer-icon').click(function(event){
            event.stopPropagation();
        });

    });
  </script>

</body>

</html>