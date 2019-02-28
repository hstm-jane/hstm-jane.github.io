
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
                                    <h2 style="margin-bottom:0px;font-weight:400;">SAM</h2>
                                    <a target="_blank" href="http://www.SAM.gov/">http://www.SAM.gov/</a>
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

                                            <tr id="11952418">
                                                <td>
                                                    Donna
                                                </td>
                                                <td>
                                                    Alexander
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#ec2121"></i>
                                                </td>
                                                <td style="white-space: pre-line">Name: ALEXANDER, DONNA LYNN
                    Exclusion Program: Reciprocal
                    Classification: INDIVIDUAL
                    Exclusion Type: Prohibition/Restriction
                    Additional Comments: Excluded by the Department of Health and Human Services from participation in all Federal health care programs pursuant to 42 U.S.C. § 1320a-7 or other sections of the Social Security Act, as amended and codified in Chapter 7 of Title 42 of the United States Code (the scope and effect of Federal health care program exclusions is described in 42 C.F.R. § 1001.1901).
                    Address(es):
                    Street1: 10 THORN DRIVE
                    Street2:
                    City, State, Zip: OXFORD, MI, 48371
                    Cross Reference:
                    Active Date: 7/20/2011
                    Termination Date:
                    Termination Type: Indefinite
                    Agency: HHS
                    EPLS Create Date: 7/28/2012
                    EPLS Modify Date: 7/28/2012</td>
                                                <td>
                                                    4/20/2018 10:24:14 PM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11952418','SAM')">Mark as False Positive</button>
                                                </td>
                                            </tr>
                                            <tr id="11992965">
                                                <td>
                                                    Jim
                                                </td>
                                                <td>
                                                    Anderson
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#ff902b"></i>
                                                </td>
                                                <td style="white-space: pre-line">Name: Anderson, Jim Andrew
                    Exclusion Program: Reciprocal
                    Classification: INDIVIDUAL
                    Exclusion Type: Prohibition/Restriction
                    Additional Comments:
                    Address(es):
                    Street1: 112 10th Street
                    Street2:
                    City, State, Zip: Puyallup, WA, 98374
                    Cross Reference:
                    Active Date: 2/8/2018
                    Termination Date: 12/21/2021
                    Termination Type: Definite
                    Agency: ARMY
                    EPLS Create Date: 12/22/2017
                    EPLS Modify Date: 2/9/2018</td>
                                                <td>
                                                    4/21/2018 12:08:07 AM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11992965','SAM')">Mark as False Positive</button>
                                                </td>
                                            </tr>
                                            <tr id="12076779">
                                                <td>
                                                    Barbara
                                                </td>
                                                <td>
                                                    Bates
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#ec2121"></i>
                                                </td>
                                                <td style="white-space: pre-line">Name: BATES, BARBARA
                    Exclusion Program: Reciprocal
                    Classification: INDIVIDUAL
                    Exclusion Type: Prohibition/Restriction
                    Additional Comments: Excluded by the Department of Health and Human Services from participation in all Federal health care programs pursuant to 42 U.S.C. § 1320a-7 or other sections of the Social Security Act, as amended and codified in Chapter 7 of Title 42 of the United States Code (the scope and effect of Federal health care program exclusions is described in 42 C.F.R. § 1001.1901).
                    Address(es):
                    Street1: 11 SUMMER, APT D
                    Street2:
                    City, State, Zip: KENT, OH, 44240
                    Cross Reference:
                    Active Date: 1/20/2010
                    Termination Date:
                    Termination Type: Indefinite
                    Agency: HHS
                    EPLS Create Date: 7/28/2012
                    EPLS Modify Date: 7/28/2012</td>
                                                <td>
                                                    4/20/2018 9:49:36 PM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('12076779','SAM')">Mark as False Positive</button>
                                                </td>
                                            </tr>
                                            <tr id="11999183">
                                                <td>
                                                    Mary
                                                </td>
                                                <td>
                                                    Bishop
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Name: BISHOP, MARY RAINE
                    Exclusion Program: Reciprocal
                    Classification: INDIVIDUAL
                    Exclusion Type: Prohibition/Restriction
                    Additional Comments: Excluded by the Department of Health and Human Services pursuant to section 1128 or other sections of the Social Security Act from participation in all Federal health care programs (the scope and effect of Federal health care program exclusions is described in 42 C.F.R. section 1001.1901).
                    Address(es):
                    Street1: 32 N KENT RD
                    Street2:
                    City, State, Zip: MESA, AZ, 85203
                    Cross Reference:
                    Active Date: 9/20/2015
                    Termination Date:
                    Termination Type: Indefinite
                    Agency: HHS
                    EPLS Create Date: 9/23/2015
                    EPLS Modify Date: 9/23/2015</td>
                                                <td>
                                                    4/20/2018 5:03:31 PM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11999183','SAM')">Mark as False Positive</button>
                                                </td>
                                            </tr>
                                            <tr id="11969827">
                                                <td>
                                                    Genny
                                                </td>
                                                <td>
                                                    Bush
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Name: Bush, Genny P.
                    Exclusion Program: Reciprocal
                    Classification: INDIVIDUAL
                    Exclusion Type: Ineligible (Proceedings Completed)
                    Additional Comments:
                    Address(es):
                    Street1: Federal Bureau of Prisons
                    Street2:
                    City, State, Zip: , MS,
                    Cross Reference:
                    Active Date: 6/20/2003
                    Termination Date:
                    Termination Type: Indefinite
                    Agency: DOJ
                    EPLS Create Date: 7/28/2012
                    EPLS Modify Date: 7/28/2012</td>
                                                <td>
                                                    4/20/2018 5:03:31 PM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11969827','SAM')">Mark as False Positive</button>
                                                </td>
                                            </tr>
                                            <tr id="12079642">
                                                <td>
                                                    Mickey
                                                </td>
                                                <td>
                                                    Fontenel
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Name: Fontenot, Mickey
                    Exclusion Program: Reciprocal
                    Classification: INDIVIDUAL
                    Exclusion Type: Prohibition/Restriction
                    Additional Comments: Excluded by the Department of Health and Human Services from participation in all Federal health care programs pursuant to 42 U.S.C. § 1320a-7 or other sections of the Social Security Act, as amended and codified in Chapter 7 of Title 42 of the United States Code (the scope and effect of Federal health care program exclusions is described in 42 C.F.R. § 1001.1901).
                    Address(es):
                    Street1: 765 Flag Ln.
                    Street2:
                    City, State, Zip: Lake Jackson, TX, 77566
                    Cross Reference:
                    Active Date: 12/20/2002
                    Termination Date:
                    Termination Type: Indefinite
                    Agency: OPM
                    EPLS Create Date: 7/28/2012
                    EPLS Modify Date: 7/28/2012</td>
                                                <td>
                                                    4/20/2018 7:47:54 PM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('12079642','SAM')">Mark as False Positive</button>
                                                </td>
                                            </tr>

                                            <tr id="12076869">
                                                <td>
                                                    Mindy
                                                </td>
                                                <td>
                                                    Humphrey
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Name: HUMPHREY, MINDY C.
                    Exclusion Program: Reciprocal
                    Classification: INDIVIDUAL
                    Exclusion Type: Prohibition/Restriction
                    Additional Comments: Excluded by the Department of Health and Human Services pursuant to section 1128 or other sections of the Social Security Act from participation in all Federal health care programs (the scope and effect of Federal health care program exclusions is described in 42 C.F.R. section 1001.1901).
                    Address(es):
                    Street1: 76 ESTHER AVENUE
                    Street2:
                    City, State, Zip: GADSDEN, AL, 35901
                    Cross Reference:
                    Active Date: 8/20/2015
                    Termination Date:
                    Termination Type: Indefinite
                    Agency: HHS
                    EPLS Create Date: 9/23/2015
                    EPLS Modify Date: 9/23/2015</td>
                                                <td>
                                                    4/20/2018 11:33:32 PM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('12076869','SAM')">Mark as False Positive</button>
                                                </td>
                                            </tr>
                                            <tr id="12070633">
                                                <td>
                                                    Summer
                                                </td>
                                                <td>
                                                    Jackson
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Name: JACKSON, SUMMER
                    Exclusion Program: Reciprocal
                    Classification: INDIVIDUAL
                    Exclusion Type: Prohibition/Restriction
                    Additional Comments: Excluded by the Department of Health and Human Services pursuant to section 1128 or other sections of the Social Security Act from participation in all Federal health care programs (the scope and effect of Federal health care program exclusions is described in 42 C.F.R. section 1001.1901).
                    Address(es):
                    Street1: P O BOX 88550, 3184841
                    Street2: CENTRAL MS CORR FAC
                    City, State, Zip: PEARL, MS, 39208
                    Cross Reference:
                    Active Date: 11/20/2013
                    Termination Date:
                    Termination Type: Indefinite
                    Agency: HHS
                    EPLS Create Date: 12/3/2013
                    EPLS Modify Date: 12/3/2013</td>
                                                <td>
                                                    4/20/2018 8:57:30 PM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('12070633','SAM')">Mark as False Positive</button>
                                                </td>
                                            </tr>

                                            <tr id="12001672">
                                                <td>
                                                    Cynthia
                                                </td>
                                                <td>
                                                    Smith
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Name: SMITH, CYNTHIA
                    Exclusion Program: Reciprocal
                    Classification: INDIVIDUAL
                    Exclusion Type: Prohibition/Restriction
                    Additional Comments: Excluded by the Department of Health and Human Services from participation in all Federal health care programs pursuant to 42 U.S.C. § 1320a-7 or other sections of the Social Security Act, as amended and codified in Chapter 7 of Title 42 of the United States Code (the scope and effect of Federal health care program exclusions is described in 42 C.F.R. § 1001.1901).
                    Address(es):
                    Street1: 1937 W. MAIN STREET
                    Street2:
                    City, State, Zip: COLUMBUS, OH, 43205
                    Cross Reference:
                    Active Date: 10/20/2008
                    Termination Date:
                    Termination Type: Indefinite
                    Agency: HHS
                    EPLS Create Date: 7/28/2012
                    EPLS Modify Date: 7/28/2012</td>
                                                <td>
                                                    4/20/2018 9:14:53 PM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('12001672','SAM')">Mark as False Positive</button>
                                                </td>
                                            </tr>

                                            <tr id="11994126">
                                                <td>
                                                    Jeremy
                                                </td>
                                                <td>
                                                    Thomas
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Name: Thomas, Jeremy
                    Exclusion Program: Reciprocal
                    Classification: INDIVIDUAL
                    Exclusion Type: Ineligible (Proceedings Completed)
                    Additional Comments:
                    Address(es):
                    Street1: 2876 West Ave.
                    Street2: null
                    City, State, Zip: Beaumont, TX, 77705
                    Cross Reference:
                    Active Date: 6/16/2011
                    Termination Date: 6/15/2021
                    Termination Type: Definite
                    Agency: DOJ
                    EPLS Create Date: 7/28/2012
                    EPLS Modify Date: 7/28/2012</td>
                                                <td>
                                                    4/20/2018 5:03:31 PM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('11994126','SAM')">Mark as False Positive</button>
                                                </td>
                                            </tr>
                                            <tr id="12078887">
                                                <td>
                                                    Brittany
                                                </td>
                                                <td>
                                                    Warrent
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Name: WARRENT, BRITTANY
                    Exclusion Program: Reciprocal
                    Classification: INDIVIDUAL
                    Exclusion Type: Prohibition/Restriction
                    Additional Comments: Excluded by the Department of Health and Human Services from participation in all Federal health care programs pursuant to 42 U.S.C. § 1320a-7 or other sections of the Social Security Act, as amended and codified in Chapter 7 of Title 42 of the United States Code (the scope and effect of Federal health care program exclusions is described in 42 C.F.R. § 1001.1901).
                    Address(es):
                    Street1: 8725 162TH STREET
                    Street2:
                    City, State, Zip: WASHINGTON, DC, 20020
                    Cross Reference:
                    Active Date: 8/18/2011
                    Termination Date:
                    Termination Type: Indefinite
                    Agency: HHS
                    EPLS Create Date: 7/28/2012
                    EPLS Modify Date: 7/28/2012</td>
                                                <td>
                                                    4/20/2018 6:23:38 PM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('12078887','SAM')">Mark as False Positive</button>
                                                </td>
                                            </tr>
                                            <tr id="12077298">
                                                <td>
                                                    Michelle
                                                </td>
                                                <td>
                                                    White
                                                </td>
                                                <td>
                                                        <i class="fa fa-flag" style="color:#f3ca06"></i>
                                                </td>
                                                <td style="white-space: pre-line">Name: White, Michelle
                    Exclusion Program: Reciprocal
                    Classification: INDIVIDUAL
                    Exclusion Type: Prohibition/Restriction
                    Additional Comments: 0398481. Declared permanently disqualified from participation in the Supplemental Nutritional Assistance Program (SNAP, formerly the Food Stamp Program) by the Department of Agriculture Food and Nutrition Service pursuant to 7 U.S.C. 2021(b) for violations resulting from the purchase of coupons or trafficking in coupons or authorization cards by a retail food store or wholesale food concern or a finding of the unauthorized redemption, use, transfer, acquisition, alteration or possession of Electronic Benefit Transfer (EBT) cards. Listed disqualified persons are prohibited under 7 U.S.C. 2021(b) or 7 C.F.R.278.6 from participating in SNAP. For further information contact the United States Department of Agriculture Agency Exclusions POC.
                    Address(es):
                    Street1: 82541 N 126TH ST
                    Street2:
                    City, State, Zip: TAMPA, FL, 33605
                    Cross Reference:
                    Active Date: 7/8/2015
                    Termination Date:
                    Termination Type: Indefinite
                    Agency: USDA-FNS
                    EPLS Create Date: 8/21/2015
                    EPLS Modify Date: 8/27/2015</td>
                                                <td>
                                                    4/20/2018 6:23:37 PM
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="markFalsePositive('12077298','SAM')">Mark as False Positive</button>
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