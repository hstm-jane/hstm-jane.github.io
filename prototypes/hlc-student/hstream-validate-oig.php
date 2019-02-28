
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>hStream Alert | HealthStream</title>
    <!-- Styles
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.bootstrap.css?cache=1508080580">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.plugins.css?cache=1508080580">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.app.css?cache=1508080580">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.prototype.css?cache=1508080580">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.hstream.css?cache=1508080580">
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
    <style>
        .logo-text span {
            margin-left: 12px;
        }
        .panel a {
            display:table;
            width:100%;
        }
        .panel a:hover {
           text-decoration: none;
        }

        .alert-text {
            display: table-cell !important;
                font-size: 16px !important;
                /*padding: 10px !important;*/
                vertical-align: middle !important;
        }
        .alert-value {
            display: table-cell !important;
                width: 20% ;
                font-size: 28px !important;
                padding: 10px 10px !important;
                vertical-align: middle !important;
                text-align: center !important;
                border-left: 1px dotted #ccc !important;
                white-space: normal!important;
                word-break: keep-all;
        }
        .alert-value-meta {
            font-size:9px;
            text-transform: uppercase;
            word-break: keep-all !important;
        }
        @media screen and (max-width: 900px) {
        .panel .text-lg {
            /*font-size:32px;*/

        }
    }
        .section-main .panel-title  {
            font-size:24px!important;
        }
    </style>
</head>

<body>
    <div class="site-header site-header--assessments">
        <div class="container">

            <a href="#" class="trigger-open trigger-open-header"><i class="fa fa-bars"></i><span>Menu</span></a>
            <div class="branding" style="">
                <div class="logo">
                    <a href="/">
                            <img src="content/images/hstream-logo.png" alt="HealthStream" class="logo-large">
                        </a>
                </div>
                <div class="logo-text" >
                    <span>Validate</span>
                </div>
            </div>
            <!-- /nav-account -->

        </div>
        <!-- /container -->
    </div>

    <div class="layout hstream-alert">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="section section-box section-main " style="padding-top:15px;">
                                    <a href="hstream-validate.php"><i class="fa fa-fw fa-chevron-left"></i> Return to Alerts</a>
                                    <br><br>
                                    <h2 style="margin-bottom:0px;font-weight:400">OIG</h2>
                                    <a target="_blank" href="http://Exclusions.OIG.HHS.gov/">http://Exclusions.OIG.HHS.gov/</a>
                                    <br><br>

                                    <table class="table">
                                        <tbody><tr>
                                            <th>
                                                First Name
                                            </th>
                                            <th>
                                                Last Name
                                            </th>
                                            <th>
                                                Flag
                                            </th>
                                            <th>
                                                Result
                                            </th>
                                            <th>
                                                Last Checked
                                            </th>
                                            <th></th>
                                        </tr>

                                            <tr id="11232048">
                                                <td>
                                                    Juan
                                                </td>
                                                <td>
                                                    Adams
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#ec2121"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: ADAMS
                    First Name: JUAN
                    Middle Name:
                    Business Name:
                    General: IND- LIC HC SERV PRO
                    Specialty: PHARMACIST
                    Upin:
                    Npi: 0000000000
                    Dob: 12/26/1965
                    Address: 123 BERNARD DRIVE
                    City: CRESTVIEW
                    State: FL
                    Zip Code: 32539
                    Exclusion Type: 1128b4
                    Exclusion Date: 03/20/2013

                    </td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 1:14:14 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11232048','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>
                                            <tr id="11232049">
                                                <td>
                                                    Nicholas
                                                </td>
                                                <td>
                                                    Andrew
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#ff902b"></i>
                                                </td>
                                                <td style="white-space: pre-line">--- Multiple Results Found (2): ---
                    ---: ---
                    --- Result (1 of 2): ---
                    Last Name: ANDREW
                    First Name: NICHOLAS
                    Middle Name:
                    Business Name:
                    General: IND- LIC HC SERV PRO
                    Specialty: PHARMACIST
                    Upin:
                    Npi: 0000000000
                    Dob: 12/26/1965
                    Address: 459 SMITH DRIVE
                    City: CRESTVIEW
                    State: FL
                    Zip Code: 32539
                    Exclusion Type: 1128b4
                    Exclusion Date: 03/25/2013
                    ---: ---
                    --- Result (2 of 2): ---
                    Last Name: ANDREW
                    First Name: NICHOLAS
                    Middle Name: H
                    Business Name:
                    General: MEDICAL PRACTICE, MD
                    Specialty: SURGERY
                    Upin: A17488
                    Npi: 0000000000
                    Dob: 12/26/1945
                    Address: 1227 CANDLEWOOD PL
                    City: ST MARYS
                    State: OH
                    Zip Code: 45885
                    Exclusion Type: 1128b4
                    Exclusion Date: 02/18/1999
                    </td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 7:51:22 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11232049','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>
                                            <tr id="11245677">
                                                <td>
                                                    Michelle
                                                </td>
                                                <td>
                                                    Adams
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#ff902b"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: ADAMS
                    First Name: MICHELLE
                    Middle Name: NICOLE
                    Business Name:
                    General: EMPLOYEE - PRIVATE S
                    Specialty: PERSONAL CARE PROVID
                    Upin:
                    Npi: 0000000000
                    Dob: 12/17/1983
                    Address: 254 SYCAMODE DRIVE
                    City: SPRINGFIELD
                    State: FL
                    Zip Code: 70462
                    Exclusion Type: 1128a1
                    Exclusion Date: 06/18/2015</td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 4:25:03 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11245677','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>
                                            <tr id="11240793">
                                                <td>
                                                    Gloria
                                                </td>
                                                <td>
                                                    Adkins
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#ff902b"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: ADKINS
                    First Name: GLORIA
                    Middle Name:
                    Business Name:
                    General: IND- LIC HC SERV PRO
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 09/19/1978
                    Address: 203 64TH AVENUE
                    City: MERIDIAN
                    State: MS
                    Zip Code: 39307
                    Exclusion Type: 1128b4
                    Exclusion Date: 04/18/2013</td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 3:53:56 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11240793','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>
                                            <tr id="11236816">
                                                <td>
                                                    Jamie
                                                </td>
                                                <td>
                                                    Alexander
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: ALEXANDER
                    First Name: JAMIE
                    Middle Name: ANN
                    Business Name:
                    General: IND- LIC HC SERV PRO
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 01/13/1956
                    Address: 6628 Scope ROAD
                    City: HOUSTON
                    State: TX
                    Zip Code: 77083
                    Exclusion Type: 1128b4
                    Exclusion Date: 12/19/2013</td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 3:19:08 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11236816','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>

                                            <tr id="11952418">
                                                <td>
                                                    Dianne
                                                </td>
                                                <td>
                                                    Alexanders
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: ALEXANDERS
                    First Name: DONNA
                    Middle Name: NADINE
                    Business Name:
                    General: NURSING PROFESSION
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 05/07/1953
                    Address: 41 THORNS DR
                    City: OXFORD
                    State: MI
                    Zip Code: 48371
                    Exclusion Type: 1128a3
                    Exclusion Date: 07/20/2011</td>
                                                <td>
                                                    4/30/2018 11:47:45 PM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11952418','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>
                                            <tr id="11244948">
                                                <td>
                                                    Sander
                                                </td>
                                                <td>
                                                    Andrews
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: ANDREWS
                    First Name: SANDER
                    Middle Name:
                    Business Name:
                    General: PHARMACY
                    Specialty: PHARMACIST
                    Upin:
                    Npi: 1576451258
                    Dob: 02/15/1948
                    Address: 4 BIG RAMP DR
                    City: SADDLE RIVER
                    State: NJ
                    Zip Code: 07458
                    Exclusion Type: 1128a4
                    Exclusion Date: 03/18/2010</td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 7:33:51 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11244948','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>

                                            <tr id="11246135">
                                                <td>
                                                    Michael
                                                </td>
                                                <td>
                                                    Allen
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#ff902b"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: ALLEN
                    First Name: MICHAEL
                    Middle Name:
                    Business Name:
                    General: IND- LIC HC SERV PRO
                    Specialty: PARAMEDIC TECHNICIAN
                    Upin:
                    Npi: 0000000000
                    Dob: 04/18/1963
                    Address: 55 W 4TH STREET
                    City: CLOVIS
                    State: CA
                    Zip Code: 93612
                    Exclusion Type: 1128b4
                    Exclusion Date: 01/20/2015</td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 4:11:10 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11246135','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>
                                            <tr id="11250383">
                                                <td>
                                                    Matthew
                                                </td>
                                                <td>
                                                    Allen
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">--- Multiple Results Found (2): ---
                    ---: ---
                    --- Result (1 of 2): ---
                    Last Name: ALLEN
                    First Name: MATTHEW
                    Middle Name:
                    Business Name:
                    General: IND- LIC HC SERV PRO
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 04/01/1978
                    Address: 1145 BEVERLY HILLS ROAD
                    City: HATTIESBURG
                    State: MS
                    Zip Code: 39401
                    Exclusion Type: 1128a2
                    Exclusion Date: 11/20/2014
                    ---: ---
                    --- Result (2 of 2): ---
                    Last Name: ALLEN
                    First Name: MATTHEW
                    Middle Name: JOHN
                    Business Name:
                    General: IND- LIC HC SERV PRO
                    Specialty: EMERGENCY MED TECH
                    Upin:
                    Npi: 0000000000
                    Dob: 03/31/1985
                    Address: 1153 PLUME DRIVE
                    City: ORLANDO
                    State: FL
                    Zip Code: 32508
                    Exclusion Type: 1128b4
                    Exclusion Date: 06/18/2015</td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 5:08:52 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11250383','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>
                                            <tr id="11246797">
                                                <td>
                                                    Rebecca
                                                </td>
                                                <td>
                                                    Allen
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: ALLEN
                    First Name: SHELLY
                    Middle Name: GAIL
                    Business Name:
                    General: SKILLED NURSING FAC
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 01/12/1971
                    Address: 114 PETERS RD
                    City: CARROLLTON
                    State: TX
                    Zip Code: 75007
                    Exclusion Type: 1128b4
                    Exclusion Date: 09/20/2006</td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 7:51:21 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11246797','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>


                                            <tr id="11240755">
                                                <td>
                                                    Amanada
                                                </td>
                                                <td>
                                                    Anderson
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: ANDERSON
                    First Name: AMANDA
                    Middle Name: J
                    Business Name:
                    General: MEDICAL PRACTICE, MD
                    Specialty: GENERAL PRACTICE/FP
                    Upin: F57692
                    Npi: 0000000000
                    Dob: 08/11/1957
                    Address: 5554 MARY ST, STE 24
                    City: TORRANCE
                    State: CA
                    Zip Code: 90502
                    Exclusion Type: 1128b14
                    Exclusion Date: 08/11/1996</td>
                                                <td>
                                                    4/30/2018 10:38:55 PM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11240755','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>



                                            <tr id="11248652">
                                                <td>
                                                    Lucy
                                                </td>
                                                <td>
                                                    Anderson
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">--- Multiple Results Found (2): ---
                    ---: ---
                    --- Result (1 of 2): ---
                    Last Name: ANDERSON
                    First Name: LUCY
                    Middle Name:
                    Business Name:
                    General: NURSING PROFESSION
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 04/11/1950
                    Address: 811 PALM COURT, APT B
                    City: GARDNERVILLE
                    State: NV
                    Zip Code: 89460
                    Exclusion Type: 1128b4
                    Exclusion Date: 08/20/2007
                    ---: ---
                    --- Result (2 of 2): ---
                    Last Name: ANDERSON
                    First Name: LUCY
                    Middle Name: LYNN
                    Business Name:
                    General: HOME HEALTH AGENCY
                    Specialty: HEALTH CARE AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 08/12/1963
                    Address: 114 VALLEY AVENUE
                    City: ELK RIVER
                    State: MN
                    Zip Code: 55330
                    Exclusion Type: 1128a1
                    Exclusion Date: 01/20/2006</td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 7:51:23 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11248652','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>

                                            <tr id="11249624">
                                                <td>
                                                    Reggie
                                                </td>
                                                <td>
                                                    Anderson
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: ANDERSON
                    First Name: REGGIE
                    Middle Name: M
                    Business Name:
                    General: HOSPITAL
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 04/01/1960
                    Address: 2221 BARNEY CIRCLE
                    City: PEMBROKE
                    State: MA
                    Zip Code: 02359
                    Exclusion Type: 1128a4
                    Exclusion Date: 05/20/2003</td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 1:14:14 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11249624','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>
                                            <tr id="11236693">
                                                <td>
                                                    Randall
                                                </td>
                                                <td>
                                                    Anderson
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">--- Multiple Results Found (3): ---
                    ---: ---
                    --- Result (1 of 3): ---
                    Last Name: ANDERSON
                    First Name: RANDALL
                    Middle Name: C
                    Business Name:
                    General: SKILLED NURSING FAC
                    Specialty: EMPLOYEE
                    Upin:
                    Npi: 0000000000
                    Dob: 09/19/1963
                    Address: POST OFFICE BOX 41
                    City: COTTONPORT
                    State: LA
                    Zip Code: 71327
                    Exclusion Type: 1128a2
                    Exclusion Date: 09/09/1991
                    ---: ---
                    --- Result (2 of 3): ---
                    Last Name: ANDERSON
                    First Name: RANDALL
                    Middle Name: JAMES
                    Business Name:
                    General: SKILLED NURSING FAC
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 05/17/1972
                    Address: 241 CAYNE DR
                    City: TAYLORVILLE
                    State: UT
                    Zip Code: 84118
                    Exclusion Type: 1128a2
                    Exclusion Date: 04/20/1999
                    ---: ---
                    --- Result (3 of 3): ---
                    Last Name: ANDERSON
                    First Name: RANDALL
                    Middle Name: JR
                    Business Name:
                    General: SKILLED NURSING FAC
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 02/17/1956
                    Address: 19 11TH ST
                    City: HATTIESBURG
                    State: MS
                    Zip Code: 39401
                    Exclusion Type: 1128a2
                    Exclusion Date: 01/18/2001</td>
                                                <td>
                                                    4/30/2018 11:47:46 PM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11236693','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>


                                            <tr id="11241339">
                                                <td>
                                                    Cheryl
                                                </td>
                                                <td>
                                                    Brown
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: BROWN
                    First Name: CHERYL
                    Middle Name:
                    Business Name:
                    General: NURSING PROFESSION
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 03/08/1967
                    Address: 14 PATE ST
                    City: WICHITA
                    State: KS
                    Zip Code: 67211
                    Exclusion Type: 1128b4
                    Exclusion Date: 05/20/2003</td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 12:56:56 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11241339','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>

                                            <tr id="11240066">
                                                <td>
                                                    Martin
                                                </td>
                                                <td>
                                                    Brown
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: BROWN
                    First Name: MARTIN
                    Middle Name: M
                    Business Name:
                    General: IND- LIC HC SERV PRO
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 11/07/1980
                    Address: 41 TEA PETAL DR
                    City: NORTH LAS VEGAS
                    State: NV
                    Zip Code: 89081
                    Exclusion Type: 1128b4
                    Exclusion Date: 02/20/2018</td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 3:53:57 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11240066','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>

                                            <tr id="11232699">
                                                <td>
                                                    DONNA
                                                </td>
                                                <td>
                                                    Bryant
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: BRYANT
                    First Name: DENISE
                    Middle Name: N
                    Business Name:
                    General: PRIVATE CIT/ENTITY
                    Specialty: HEALTH CARE AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 05/27/1982
                    Address: 447 MAYON DRIVE
                    City: MEMPHIS
                    State: TN
                    Zip Code: 38128
                    Exclusion Type: 1128a3
                    Exclusion Date: 01/19/2011</td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 6:35:46 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11232699','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>

                                            <tr id="11231904">
                                                <td>
                                                    Kandy
                                                </td>
                                                <td>
                                                    Burns
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: BURNS
                    First Name: KANDY
                    Middle Name: R
                    Business Name:
                    General: INTER CARE FACILITY
                    Specialty: BUSINESS MANAGER
                    Upin:
                    Npi: 0000000000
                    Dob: 07/04/1972
                    Address: 1 ALEX STREET
                    City: LEESVILLE
                    State: LA
                    Zip Code: 71446
                    Exclusion Type: 1128a2
                    Exclusion Date: 05/19/2011</td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 3:19:09 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11231904','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>

                                            <tr id="11248656">
                                                <td>
                                                    Bobby
                                                </td>
                                                <td>
                                                    Campbell
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: CAMPBELL
                    First Name: Bobby
                    Middle Name: J
                    Business Name:
                    General: SKILLED NURSING FAC
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 01/16/1950
                    Address: 45 CLARE AVE, APT 2
                    City: CINCINNATI
                    State: OH
                    Zip Code: 45207
                    Exclusion Type: 1128a2
                    Exclusion Date: 11/19/1998</td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 1:14:13 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11248656','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>

                                            <tr id="11238126">
                                                <td>
                                                    Gerry
                                                </td>
                                                <td>
                                                    Carter
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: CARTER
                    First Name: GERRY
                    Middle Name: WARREN
                    Business Name:
                    General: PRIVATE CIT/ENTITY
                    Specialty: HEALTH CARE AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 02/28/1946
                    Address: 114 1ST ST
                    City: LAKEWOOD
                    State: WA
                    Zip Code: 98493
                    Exclusion Type: 1128a1
                    Exclusion Date: 04/18/2002</td>
                                                <td>
                                                    4/30/2018 10:03:43 PM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11238126','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>

                                            <tr id="11240798">
                                                <td>
                                                    Kathy
                                                </td>
                                                <td>
                                                    Connor
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: CONNOR
                    First Name: KATHY
                    Middle Name: J
                    Business Name:
                    General: CHIROPRACTIC PRACT
                    Specialty: CHIROPRACTIC
                    Upin: U46734
                    Npi: 0000000000
                    Dob: 03/31/1965
                    Address: 11 INGY AVE
                    City: NEWPORT BEACH
                    State: CA
                    Zip Code: 92663
                    Exclusion Type: 1128b14
                    Exclusion Date: 08/20/2001</td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 1:50:53 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11240798','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>

                                            <tr id="11238869">
                                                <td>
                                                    Jimmy
                                                </td>
                                                <td>
                                                    Cook
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">--- Multiple Results Found (2): ---
                    ---: ---
                    --- Result (1 of 2): ---
                    Last Name: COOK
                    First Name: JIMMY
                    Middle Name: M
                    Business Name:
                    General: GOVT EMP(STATE/LOC)
                    Specialty:
                    Upin:
                    Npi: 0000000000
                    Dob: 05/23/1967
                    Address: 144 BERRY ANN DRIVE
                    City: BATON ROUGE
                    State: LA
                    Zip Code: 70812
                    Exclusion Type: 1128a1
                    Exclusion Date: 02/28/1994
                    ---: ---
                    --- Result (2 of 2): ---
                    Last Name: COOK
                    First Name: JIMMY
                    Middle Name: P
                    Business Name:
                    General: DME COMPANY
                    Specialty: OWNER/OPERATOR
                    Upin:
                    Npi: 0000000000
                    Dob: 02/07/1956
                    Address: 71 FAIRE AVENUE
                    City: HARRISVILLE
                    State: WV
                    Zip Code: 26362
                    Exclusion Type: 1128b7
                    Exclusion Date: 10/30/2007</td>
                                                <td>
                                                    4/30/2018 10:38:55 PM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11238869','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>

                                            <tr id="11246287">
                                                <td>
                                                    Mindy
                                                </td>
                                                <td>
                                                    Hernandez
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: HERNANDEZ
                    First Name: MINDY
                    Middle Name: RAMIREZ
                    Business Name:
                    General: GOVERNMENT GRANTEE
                    Specialty: EMPLOYEE
                    Upin:
                    Npi: 0000000000
                    Dob: 10/09/1969
                    Address: 12 BURLE RD
                    City: SAN ANGELO
                    State: TX
                    Zip Code: 76901
                    Exclusion Type: 1128b1
                    Exclusion Date: 12/20/2004</td>
                                                <td>
                                                    4/30/2018 10:56:18 PM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11246287','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>

                                            <tr id="11233554">
                                                <td>
                                                    Dianne
                                                </td>
                                                <td>
                                                    Jones
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: JONES
                    First Name: DIANNE
                    Middle Name: SEABORN
                    Business Name:
                    General: DOCTOR(MD, DO)
                    Specialty: PEDIATRICS
                    Upin: A01254
                    Npi: 1578670105
                    Dob: 12/06/1944
                    Address: P O BOX 144
                    City: FORT WORTH
                    State: TX
                    Zip Code: 76119
                    Exclusion Type: 1128a2
                    Exclusion Date: 11/20/2014</td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 7:31:13 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11233554','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>

                                            <tr id="11238623">
                                                <td>
                                                    DARLENE
                                                </td>
                                                <td>
                                                    Jones
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">--- Multiple Results Found (2): ---
                    ---: ---
                    --- Result (1 of 2): ---
                    Last Name: JONES
                    First Name: DARLENE
                    Middle Name: D
                    Business Name:
                    General: SKILLED NURSING FAC
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 06/26/1969
                    Address: 11223 CHARED AVENUE
                    City: DANVILLE
                    State: VA
                    Zip Code: 24541
                    Exclusion Type: 1128b4
                    Exclusion Date: 10/20/2005
                    ---: ---
                    --- Result (2 of 2): ---
                    Last Name: JONES
                    First Name: DARLENE
                    Middle Name: L
                    Business Name:
                    General: NURSING PROFESSION
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 07/19/1948
                    Address: 122 LINY STREET
                    City: JACKSONVILLE
                    State: FL
                    Zip Code: 32209
                    Exclusion Type: 1128b4
                    Exclusion Date: 08/08/1990</td>
                                                <td>
                                                    4/30/2018 10:21:32 PM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11238623','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>

                                            <tr id="11250210">
                                                <td>
                                                    Cynthia
                                                </td>
                                                <td>
                                                    Miller
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Last Name: MILLER
                    First Name: CYNTHIA
                    Middle Name: A
                    Business Name:
                    General: IND- LIC HC SERV PRO
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 05/30/1967
                    Address: 2123 CALLIAN DRIVE
                    City: JOLIET
                    State: IL
                    Zip Code: 60435
                    Exclusion Type: 1128b4
                    Exclusion Date: 10/20/2015</td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 12:56:57 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11250210','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>



                                            <tr id="11236710">
                                                <td>
                                                    Shannon
                                                </td>
                                                <td>
                                                    Walker
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">--- Multiple Results Found (2): ---
                    ---: ---
                    --- Result (1 of 2): ---
                    Last Name: WALKER
                    First Name: SHANNON
                    Middle Name: A
                    Business Name:
                    General: PODIATRY PRACTICE
                    Specialty: PODIATRY
                    Upin: T21816
                    Npi: 0000000000
                    Dob: 02/22/1947
                    Address: 1233 TRUCKER ROAD
                    City: RICHMOND
                    State: VA
                    Zip Code: 23225
                    Exclusion Type: 1128b4
                    Exclusion Date: 09/20/1999
                    ---: ---
                    --- Result (2 of 2): ---
                    Last Name: WALKER
                    First Name: SHANNON
                    Middle Name: DENISE
                    Business Name:
                    General: NURSING PROFESSION
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 01/18/1963
                    Address: PO BOX 1231245
                    City: NEWVILLE
                    State: AL
                    Zip Code: 36353
                    Exclusion Type: 1128b4
                    Exclusion Date: 05/18/2006</td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 1:50:52 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11236710','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>


                                            <tr id="12076970">
                                                <td>
                                                    Pamela
                                                </td>
                                                <td>
                                                    Wilson
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">--- Multiple Results Found (2): ---
                    ---: ---
                    --- Result (1 of 2): ---
                    Last Name: WILSON
                    First Name: PAMELA
                    Middle Name: LEIGH
                    Business Name:
                    General: IND- LIC HC SERV PRO
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 05/25/1989
                    Address: 15 FARM ROAD
                    City: PLYMOUTH
                    State: MA
                    Zip Code: 02360
                    Exclusion Type: 1128b4
                    Exclusion Date: 06/19/2014
                    ---: ---
                    --- Result (2 of 2): ---
                    Last Name: WILSON
                    First Name: PAMELA
                    Middle Name: F
                    Business Name:
                    General: NURSING PROFESSION
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 09/28/1961
                    Address: 527 DUCK ROAD
                    City: SCHAUMBURG
                    State: IL
                    Zip Code: 60193
                    Exclusion Type: 1128b4
                    Exclusion Date: 10/18/2001</td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 1:14:13 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('12076970','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>

                                            <tr id="11244074">
                                                <td>
                                                    Matt
                                                </td>
                                                <td>
                                                    Wright
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">--- Multiple Results Found (2): ---
                    ---: ---
                    --- Result (1 of 2): ---
                    Last Name: WRIGHT
                    First Name: MATT
                    Middle Name: C.
                    Business Name:
                    General: INTER CARE FACILITY
                    Specialty: OWNER/OPERATOR
                    Upin:
                    Npi: 0000000000
                    Dob: 10/18/1951
                    Address: 1733 JOHN ST
                    City: DUNCAN
                    State: SC
                    Zip Code: 29334
                    Exclusion Type: 1128a2
                    Exclusion Date: 09/20/1999
                    ---: ---
                    --- Result (2 of 2): ---
                    Last Name: WRIGHT
                    First Name: MATTHEW
                    Middle Name: JAMES
                    Business Name:
                    General: IND- LIC HC SERV PRO
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 11/25/1970
                    Address: 123 CAMP CREEK AVENUE
                    City: LAMAR
                    State: AR
                    Zip Code: 72846
                    Exclusion Type: 1128b4
                    Exclusion Date: 11/20/2012
                   </td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 1:14:14 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11244074','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>
                                            <tr id="11237541">
                                                <td>
                                                    Theresa
                                                </td>
                                                <td>
                                                    Young
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">--- Multiple Results Found (2): ---
                    ---: ---
                    --- Result (1 of 2): ---
                    Last Name: YOUNG
                    First Name: THERESA
                    Middle Name: E
                    Business Name:
                    General: NURSING PROFESSION
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 12/22/1970
                    Address: 2344 GRAND POINT
                    City: CARTERVILLE
                    State: IL
                    Zip Code: 62918
                    Exclusion Type: 1128b4
                    Exclusion Date: 03/20/2005
                    ---: ---
                    --- Result (2 of 2): ---
                    Last Name: YOUNG
                    First Name: THERESA
                    Middle Name: KAY
                    Business Name:
                    General: NURSING PROFESSION
                    Specialty: NURSE/NURSES AIDE
                    Upin:
                    Npi: 0000000000
                    Dob: 02/15/1948
                    Address: 33 HAPP ST
                    City: STAUNTON
                    State: IL
                    Zip Code: 62088
                    Exclusion Type: 1128b4
                    Exclusion Date: 08/20/2001
                    </td>
                                                <td>
                                                    <?= date('m/d/Y', strtotime('-1 day')) ?> 1:50:52 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11237541','OIG')">Mark as False Positive</button>
                                                </td>
                                            </tr>


                                    </tbody></table>
                                    <div>Flag Types:</div>
                                   <div><i class="fa fa-flag" style="color:#ec2121"></i> - Red - Match on First/Last Name, NPI, Date of Birth</div>
                                  <div><i class="fa fa-flag" style="color:#ff902b"></i> - Orange - Match on First/Last Name and NPI</div>
                                  <div><i class="fa fa-flag" style="color:#f3ca06"></i> - Yellow - Match on First/Last Name</div>
                                </section>
                </div>
            </div>
            <!-- col -->
        </div>
        <!-- row -->
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
            <div class="legal">
                <div class="divider"></div>
                <div class="logo"><img src="./content/images/logo-healthstream-small.png" alt="HealthStream"></div>
                <div class="copyright">Copyright &copy; 2017 HealthStream, Inc. All Rights Reserved.</div>
            </div>
        </div>
    </div>

    <!-- modal-->
    <div id="modal-alerts" class="modal fade modal-lg">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">OIG Alerts</h4>
                </div>
                <div class="modal-body">
                    <div class="oigAlertsHeader text-muted"></div>
                    <table class="table table-bordered upcoming-classes-table dataTable" id="oigAlertsTable">
                        <thead>
                            <tr>
                                <th class="employee">Employee</th>
                                <th>Job Title</th>
                                <th>Alert Date</th>
                                <th class="unsortable sorting_disabled"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-id="9">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Bruno, Brad K.</a></td>
                                <td>Clinical Nurse Supervisor</td>
                                <td>1/1/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="1">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Chamberland, Marie S.</a></td>
                                <td>Nurse Manager - Acute Care</td>
                                <td>1/1/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="2">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Conner, Rosalyn F.</a></td>
                                <td>Quality Coordinator (RN)</td>
                                <td>1/10/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="3">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Flangan, Simon P.</a></td>
                                <td>Diabetes Educator (RN)</td>
                                <td>1/12/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="4">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Franks, Iva R.</a></td>
                                <td>Case Manager (RN)</td>
                                <td>1/31/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="5">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Juniper, Stephanie P.</a></td>
                                <td>LPN - I.V. Certified</td>
                                <td>2/1/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="6">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Lewis, Audry K.</a></td>
                                <td>Nurse - Staff (RN) - Acute Care</td>
                                <td>2/6/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="7">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Montoya, Alice G.</a></td>
                                <td>LPN - I.V. Certified</td>
                                <td>2/11/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="8">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Park, Jennifer S.</a></td>
                                <td>Nurse - Staff (RN) - Telephones</td>
                                <td>2/19/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="9">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Grant, Peter  K.</a></td>
                                <td>Clinical Nurse Supervisor</td>
                                <td>2/22/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="10">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Hicks, Ruth P.</a></td>
                                <td>Nurse Manager - Acute Care</td>
                                <td>4/1/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="2">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Nguyen, Crystal  F.</a></td>
                                <td>Quality Coordinator (RN)</td>
                                <td>4/15/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="3">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Mason, Julia  P.</a></td>
                                <td>Diabetes Educator (RN)</td>
                                <td>4/21/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="4">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Sanders, Gregory  R.</a></td>
                                <td>Case Manager (RN)</td>
                                <td>4/30/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="2">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Nguyen, Crystal  F.</a></td>
                                <td>Quality Coordinator (RN)</td>
                                <td>5/6/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="3">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Mason, Julia  P.</a></td>
                                <td>Diabetes Educator (RN)</td>
                                <td>5/16/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="7">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Montoya, Alice G.</a></td>
                                <td>LPN - I.V. Certified</td>
                                <td>8/1/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="8">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Park, Jennifer S.</a></td>
                                <td>Nurse - Staff (RN) - Telephones</td>
                                <td>8/11/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="9">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Grant, Peter  K.</a></td>
                                <td>Clinical Nurse Supervisor</td>
                                <td>8/14/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="10">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Hicks, Ruth P.</a></td>
                                <td>Nurse Manager - Acute Care</td>
                                <td>9/3/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="2">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Nguyen, Crystal  F.</a></td>
                                <td>Quality Coordina<td>9/30/2017</td>
                                <td>9/5/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="3">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Mason, Julia  P.</a></td>
                                <td>Diabetes Educator (RN)</td>
                                <td>9/17/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="4">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Sanders, Gregory  R.</a></td>
                                <td>Case Manager (RN)</td>
                                <td>9/30/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="2">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Nguyen, Crystal  F.</a></td>
                                <td>Quality Coordinator (RN)</td>
                                <td>10/3/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="3">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Mason, Julia  P.</a></td>
                                <td>Diabetes Educator (RN)</td>
                                <td>10/22/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                            <tr data-id="3">
                                <td class="employee"><a href="dashboard-profile-dev-ready.php">Mason, Julia  P.</a></td>
                                <td>Diabetes Educator (RN)</td>
                                <td>10/30/2017</td>
                                <td class="team-action"><a href="dashboard-profile-dev-ready.php" class="btn btn-default btn-xs">Action</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Print</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal-->

    <script src="/scripts/jquery.js"></script>
    <script src="/scripts/bootstrap.plugins.js"></script>
    <script src="/scripts/bootstrap-datepicker.js"></script>
    <script src="/scripts/bootstrap-timepicker.js"></script>
    <script src="/scripts/healthstream.js"></script>
    <script src="/scripts/healthstream.jquery.js"></script>
    <script src="/scripts/dataTables.js"></script>
    <script src="http://hstm-platform.patternmanager.com/scripts/dataTables.rowReorder.min.js"></script>
    <script src="/scripts/prototype.datatables.js"></script>
    <script>
   (function(window, $) {
       'use strict';
       window.HealthStream = window.HealthStream || {};
       var healthStream = window.HealthStream;
       healthStream.oigAlerts = {};
       healthStream.oigAlerts.resultsDataTable = function() {
           var ClassesTable = $('#oigAlertsTable').DataTable({
               "paging": true,
               "order": [
                   [2, "asc"]
               ],
               "dom": 'ft<"bottom"rlip>',
               "columnDefs": [{
                   "visible": false,
                   "targets": "hideOnLoad",
               }, {
                   "orderable": false,
                   "targets": "unsortable"
               }],
               language: {
                   search: "_INPUT_",
                   info: "Showing _START_ to _END_ of _MAX_ alerts",
                   searchPlaceholder: "Quick Search",
                   lengthMenu: "Show _MENU_ alerts",
                   paginate: {
                       previous: '<i class="fa fa-chevron-left"></i>',
                       next: '<i class="fa fa-chevron-right"></i>'
                   }
               },
               "pageLength": 10
           });

           ClassesTable.columns().iterator('column', function(ctx, idx) {
               $(ClassesTable.column(idx).header()).append('<span class="sort-icon"/>');
           });

           expandMobileRow();
           generateDynamicDataTitles();
           customizeColumns(ClassesTable);

           keepDropDownMenuOpen();
           updateTableHeaderCounts();
           //place default info into Results header
           function updateTableHeaderCounts() {
               $(".dataTables_info").hide();
               $('.oigAlertsHeader').html($("#oigAlertsTable_info").html());
               $('#oigAlertsTable_filter input').css('width', '250px');

               // $(".dataTables_info").hide();
               // $('.upcomingClassesHeader').html($("#upcomingClassesTable_info").html());
               // $('#upcomingClassesTable_filter input').css('width', '250px');
           }
           //reinitialize jquery when table is redrawn (pagination)
           $(".dataTable").on('draw.dt', function() {
               expandMobileRow();
               generateDynamicDataTitles();
               updateTableHeaderCounts();
           });



       };



       $(window).on('load', function() {
           healthStream.oigAlerts.resultsDataTable();
       });
   }(window, jQuery));
    </script>
</body>

</html>