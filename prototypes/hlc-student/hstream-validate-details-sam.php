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
    <link rel="stylesheet" type="text/css" href="hstream-validate-assets/css/healthstream.bootstrap.css?cache=1508080580">
    <link rel="stylesheet" type="text/css" href="hstream-validate-assets/css/healthstream.app.css?cache=1508080580">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="hstream-validate-assets/css/panels.css">
    <link rel="stylesheet" type="text/css" href="hstream-validate-assets/css/opentip.css">
    <link rel="stylesheet" type="text/css" href="hstream-validate-assets/css/hstream-validate.css">
</head>

<body>
    <div class="site-header hstream-validate-header">
        <div class="container">
            <a href="#" class="trigger-open trigger-open-header"><i class="fa fa-bars"></i><span>Menu</span></a>
            <div class="branding" style="">
                <div class="logo">
                    <a href="hstream-validate.php">
                        <img src="hstream-validate-assets/images/hstream-validate-beta.png" alt="hStream Validate | Beta" class="logo-large">
                        <img src="hstream-validate-assets/images/hstream-validate-beta.png" alt="hStream Validate | Beta" class="logo-small">
                    </a>
                </div>
            </div>
            <!-- /nav-account -->
        </div>
        <!-- /container -->
    </div>
    <div class="layout hstream-validate">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="validate-head">
                        <div class="validate-head-title">SAM Alerts
                            <a href="http://www.SAM.gov/ " class="forward-link" target="_blank">http://www.SAM.gov/ </a>
                        </div>
                        <!-- <div class="validate-head-meta">
                            <div class="validate-head-meta-flag red-flag"><div class="name">First Name, Last Name, NPI, DOB match</div><div class="value">3</div></div>
                            <div class="validate-head-meta-flag orange-flag"><div class="name">First Name, Last Name, NPI match</div><div class="value">3</div></div>   
                            <div class="validate-head-meta-flag yellow-flag"><div class="name">First Name , Last Name match</div><div class="value">3</div></div>

                        </div> -->
                        <div class="flags validate-head-meta-flag">
                            <div class="flag red-flag ">
                                <div class="name">First Name, Last Name, NPI, DOB match</div>
                                <div class="value">3</div>
                            </div>
                            <div class="flag orange-flag ">
                                <div class="name">First Name, Last Name, NPI match</div>
                                <div class="value">22</div>
                            </div>
                            <div class="flag yellow-flag ">
                                <div class="name">First Name, Last Name match</div>
                                <div class="value">163</div> 
                            </div>
                        </div>
                        <a href="#" class="pull-right help-hover" id="tooltip">How can I improve results?</a>
                    </div>
                    <div class="validate-details-container">
                        <h2>Results from 5/2/2018 - 6/1/2018 <small>Showing 1-15 of 166</small></h2>

                        <table class="table validate-table">
                            <thead>
                                <tr>
                                    <th class="result-firstname">First Name</th>
                                    <th class="result-lastname">Last Name</th>
                                    <th class="result-alerttype">Alert Type</th>
                                    <th class="result-status">Flag</th>
                                    <th class="result-date">Last Checked</th>
                                    <th class="result-actions"></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="validate-result-row odd">
                                    <td class="result-firstname">Juan</td>
                                    <td class="result-lastname">Adams</td>
                                    <td class="result-alerttype">SAM Alert

                                    </td>

                                    <td class="result-status"><span class="status-pill status-pill--issues"><i class="status-pill__icon fa fa-flag"></i><span class="status-pill__label">Name, NPI match</span></span></td>
                                    <td class="result-date">5/10/2018<br>9:00 AM</td>
                                    <td class="result-actions">
                                        <a class="btn btn-default btn-sm expand-detail" href="#">Show Detail <i class="fa fa-chevron-down"></i></a>

                                    </td>

                                </tr>
                                <tr class="validate-detail-row hidden">
                                    <td colspan="6">
                                        <div class="validate-detail-table-wrapper" style="display:none;">
                                            <table class="validate-detail-table">
                                                <tr>
                                                    <td class="detail-label">Last Name:</td>
                                                    <td class="detail-value highlight-value">ADAMS</td>
                                                    <td class="detail-label">Exclusion Program:</td>
                                                    <td class="detail-value">Reciprocal</td>
                                                  <td class="detail-label">EPLS Create Date: </td>
                                                  <td class="detail-value">8/21/2015</td>
                                                    <td rowspan="5"><button class="btn btn-default btn-sm">Mark as False Positive</button></td>
                                                </tr>
                                                <tr>
                                                    <td class="detail-label">First Name:</td>
                                                    <td class="detail-value highlight-value">JUAN</td>
                                                    <td class="detail-label">Classification:</td>
                                                    <td class="detail-value">INDIVIDUAL</td>
                                                   <td class="detail-label">EPLS Modify Date: </td>
                                                   <td class="detail-value">8/21/2015</td>
                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Active Date:</td>
                                                    <td class="detail-value">03/20/2013</td>
                                                    <td class="detail-label">Exclusion Type: </td>
                                                    <td class="detail-value">Restriction</td>
                                                    
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Termination Date:</td>
                                                    <td class="detail-value"></td>
                                                    <td class="detail-label">Agency:</td>
                                                    <td class="detail-value">USDA-FNS</td>
                                                    
                                                    <td></td>
                                                    <td></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Termination Type:</td>
                                                    <td class="detail-value">Indefinite</td>
                                                    <td class="detail-label">Address:</td>
                                                    <td class="detail-value">123 Bernard Drive<br />
                                                        Crestview, FL 32539
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Additional Comments:</td>
                                                    <td colspan="5">Excluded by the Department of Health and Human Services from participation in all Federal health care programs pursuant to 42 U.S.C. § 1320a-7 or other sections of the Social Security Act, as amended and codified in Chapter 7 of Title 42 of the United States Code (the scope and effect of Federal health care program exclusions is described in 42 C.F.R. § 1001.1901).</td>
                                                </tr>
                                            </table>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="validate-result-row even">
                                    <td class="result-firstname">Kandy</td>
                                    <td class="result-lastname">Adkins</td>
                                    <td class="result-alerttype">SAM Alert

                                    </td>

                                    <td class="result-status"><span class="status-pill status-pill--error"><i class="status-pill__icon fa fa-flag"></i><span class="status-pill__label">Name, NPI, DOB match</span></span></td>
                                    <td class="result-date">5/10/2018<br>9:00 AM</td>
                                    <td class="result-actions">
                                        <a class="btn btn-default btn-sm expand-detail" href="#">Show Detail <i class="fa fa-chevron-down"></i></a>

                                    </td>

                                </tr>
                                <tr class="validate-detail-row hidden">
                                    <td colspan="6">
                                        <div class="validate-detail-table-wrapper" style="display:none;">
                                            <table class="validate-detail-table">
                                                <tr>
                                                    <td class="detail-label">Last Name:</td>
                                                    <td class="detail-value highlight-value">ADAMS</td>
                                                    <td class="detail-label">Exclusion Program:</td>
                                                    <td class="detail-value">Reciprocal</td>
                                                  <td class="detail-label">EPLS Create Date: </td>
                                                  <td class="detail-value">8/21/2015</td>
                                                    <td rowspan="5"><button class="btn btn-default btn-sm">Mark as False Positive</button></td>
                                                </tr>
                                                <tr>
                                                    <td class="detail-label">First Name:</td>
                                                    <td class="detail-value highlight-value">JUAN</td>
                                                    <td class="detail-label">Classification:</td>
                                                    <td class="detail-value">INDIVIDUAL</td>
                                                   <td class="detail-label">EPLS Modify Date: </td>
                                                   <td class="detail-value">8/21/2015</td>
                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Active Date:</td>
                                                    <td class="detail-value">03/20/2013</td>
                                                    <td class="detail-label">Exclusion Type: </td>
                                                    <td class="detail-value">Restriction</td>

                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Termination Date:</td>
                                                    <td class="detail-value"></td>
                                                    <td class="detail-label">Agency:</td>
                                                    <td class="detail-value">USDA-FNS</td>

                                                    <td></td>
                                                    <td></td>

                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Termination Type:</td>
                                                    <td class="detail-value">Indefinite</td>
                                                    <td class="detail-label">Address:</td>
                                                    <td class="detail-value">123 Bernard Drive<br />
                                                        Crestview, FL 32539
                                                    </td>
                                                    <td></td>
                                                    <td></td>

                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Additional Comments:</td>
                                                    <td colspan="5">Excluded by the Department of Health and Human Services from participation in all Federal health care programs pursuant to 42 U.S.C. § 1320a-7 or other sections of the Social Security Act, as amended and codified in Chapter 7 of Title 42 of the United States Code (the scope and effect of Federal health care program exclusions is described in 42 C.F.R. § 1001.1901).</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="validate-result-row odd">
                                    <td class="result-firstname">Bobby</td>
                                    <td class="result-lastname">Allen</td>
                                    <td class="result-alerttype">SAM Alert

                                    </td>

                                    <td class="result-status"><span class="status-pill status-pill"><i class="status-pill__icon fa fa-flag"></i><span class="status-pill__label">Name match</span></span></td>
                                    <td class="result-date">5/10/2018<br>9:00 AM</td>
                                    <td class="result-actions">
                                        <a class="btn btn-default btn-sm expand-detail" href="#">Show Detail <i class="fa fa-chevron-down"></i></a>

                                    </td>

                                </tr>
                                <tr class="validate-detail-row hidden">
                                    <td colspan="6">
                                        <div class="validate-detail-table-wrapper" style="display:none;">
                                            <table class="validate-detail-table">
                                                <tr>
                                                    <td class="detail-label">Last Name:</td>
                                                    <td class="detail-value highlight-value">ADAMS</td>
                                                    <td class="detail-label">Exclusion Program:</td>
                                                    <td class="detail-value">Reciprocal</td>
                                                  <td class="detail-label">EPLS Create Date: </td>
                                                  <td class="detail-value">8/21/2015</td>
                                                    <td rowspan="5"><button class="btn btn-default btn-sm">Mark as False Positive</button></td>
                                                </tr>
                                                <tr>
                                                    <td class="detail-label">First Name:</td>
                                                    <td class="detail-value highlight-value">JUAN</td>
                                                    <td class="detail-label">Classification:</td>
                                                    <td class="detail-value">INDIVIDUAL</td>
                                                   <td class="detail-label">EPLS Modify Date: </td>
                                                   <td class="detail-value">8/21/2015</td>
                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Active Date:</td>
                                                    <td class="detail-value">03/20/2013</td>
                                                    <td class="detail-label">Exclusion Type: </td>
                                                    <td class="detail-value">Restriction</td>

                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Termination Date:</td>
                                                    <td class="detail-value"></td>
                                                    <td class="detail-label">Agency:</td>
                                                    <td class="detail-value">USDA-FNS</td>

                                                    <td></td>
                                                    <td></td>

                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Termination Type:</td>
                                                    <td class="detail-value">Indefinite</td>
                                                    <td class="detail-label">Address:</td>
                                                    <td class="detail-value">123 Bernard Drive<br />
                                                        Crestview, FL 32539
                                                    </td>
                                                    <td></td>
                                                    <td></td>

                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Additional Comments:</td>
                                                    <td colspan="5">Excluded by the Department of Health and Human Services from participation in all Federal health care programs pursuant to 42 U.S.C. § 1320a-7 or other sections of the Social Security Act, as amended and codified in Chapter 7 of Title 42 of the United States Code (the scope and effect of Federal health care program exclusions is described in 42 C.F.R. § 1001.1901).</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="validate-result-row even">
                                    <td class="result-firstname">Donna</td>
                                    <td class="result-lastname">Alexander</td>
                                    <td class="result-alerttype">SAM Alert

                                    </td>

                                    <td class="result-status"><span class="status-pill status-pill"><i class="status-pill__icon fa fa-flag"></i><span class="status-pill__label">Name match</span></span></td>
                                    <td class="result-date">5/10/2018<br>9:00 AM</td>
                                    <td class="result-actions">
                                        <a class="btn btn-default btn-sm expand-detail" href="#">Show Detail <i class="fa fa-chevron-down"></i></a>

                                    </td>

                                </tr>
                                <tr class="validate-detail-row hidden">
                                    <td colspan="6">
                                        <div class="validate-detail-table-wrapper" style="display:none;">
                                            <table class="validate-detail-table">
                                                <tr>
                                                    <td class="detail-label">Last Name:</td>
                                                    <td class="detail-value highlight-value">ADAMS</td>
                                                    <td class="detail-label">Exclusion Program:</td>
                                                    <td class="detail-value">Reciprocal</td>
                                                  <td class="detail-label">EPLS Create Date: </td>
                                                  <td class="detail-value">8/21/2015</td>
                                                    <td rowspan="5"><button class="btn btn-default btn-sm">Mark as False Positive</button></td>
                                                </tr>
                                                <tr>
                                                    <td class="detail-label">First Name:</td>
                                                    <td class="detail-value highlight-value">JUAN</td>
                                                    <td class="detail-label">Classification:</td>
                                                    <td class="detail-value">INDIVIDUAL</td>
                                                   <td class="detail-label">EPLS Modify Date: </td>
                                                   <td class="detail-value">8/21/2015</td>
                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Active Date:</td>
                                                    <td class="detail-value">03/20/2013</td>
                                                    <td class="detail-label">Exclusion Type: </td>
                                                    <td class="detail-value">Restriction</td>

                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Termination Date:</td>
                                                    <td class="detail-value"></td>
                                                    <td class="detail-label">Agency:</td>
                                                    <td class="detail-value">USDA-FNS</td>

                                                    <td></td>
                                                    <td></td>

                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Termination Type:</td>
                                                    <td class="detail-value">Indefinite</td>
                                                    <td class="detail-label">Address:</td>
                                                    <td class="detail-value">123 Bernard Drive<br />
                                                        Crestview, FL 32539
                                                    </td>
                                                    <td></td>
                                                    <td></td>

                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Additional Comments:</td>
                                                    <td colspan="5">Excluded by the Department of Health and Human Services from participation in all Federal health care programs pursuant to 42 U.S.C. § 1320a-7 or other sections of the Social Security Act, as amended and codified in Chapter 7 of Title 42 of the United States Code (the scope and effect of Federal health care program exclusions is described in 42 C.F.R. § 1001.1901).</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="validate-result-row odd">
                                    <td class="result-firstname">Anderson</td>
                                    <td class="result-lastname">Matthew</td>
                                    <td class="result-alerttype">SAM Alert

                                    </td>

                                    <td class="result-status"><span class="status-pill status-pill--issues"><i class="status-pill__icon fa fa-flag"></i><span class="status-pill__label">Name, NPI match</span></span></td>
                                    <td class="result-date">5/10/2018<br>9:00 AM</td>
                                    <td class="result-actions">
                                        <a class="btn btn-default btn-sm expand-detail" href="#">Show Detail <i class="fa fa-chevron-down"></i></a>

                                    </td>

                                </tr>
                                <tr class="validate-detail-row hidden">
                                    <td colspan="6">
                                        <div class="validate-detail-table-wrapper" style="display:none;">
                                            <table class="validate-detail-table">
                                                <tr>
                                                    <td class="detail-label">Last Name:</td>
                                                    <td class="detail-value highlight-value">ADAMS</td>
                                                    <td class="detail-label">Exclusion Program:</td>
                                                    <td class="detail-value">Reciprocal</td>
                                                  <td class="detail-label">EPLS Create Date: </td>
                                                  <td class="detail-value">8/21/2015</td>
                                                    <td rowspan="5"><button class="btn btn-default btn-sm">Mark as False Positive</button></td>
                                                </tr>
                                                <tr>
                                                    <td class="detail-label">First Name:</td>
                                                    <td class="detail-value highlight-value">JUAN</td>
                                                    <td class="detail-label">Classification:</td>
                                                    <td class="detail-value">INDIVIDUAL</td>
                                                   <td class="detail-label">EPLS Modify Date: </td>
                                                   <td class="detail-value">8/21/2015</td>
                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Active Date:</td>
                                                    <td class="detail-value">03/20/2013</td>
                                                    <td class="detail-label">Exclusion Type: </td>
                                                    <td class="detail-value">Restriction</td>

                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Termination Date:</td>
                                                    <td class="detail-value"></td>
                                                    <td class="detail-label">Agency:</td>
                                                    <td class="detail-value">USDA-FNS</td>

                                                    <td></td>
                                                    <td></td>

                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Termination Type:</td>
                                                    <td class="detail-value">Indefinite</td>
                                                    <td class="detail-label">Address:</td>
                                                    <td class="detail-value">123 Bernard Drive<br />
                                                        Crestview, FL 32539
                                                    </td>
                                                    <td></td>
                                                    <td></td>

                                                </tr>
                                                <tr>
                                                    <td class="detail-label">Additional Comments:</td>
                                                    <td colspan="5">Excluded by the Department of Health and Human Services from participation in all Federal health care programs pursuant to 42 U.S.C. § 1320a-7 or other sections of the Social Security Act, as amended and codified in Chapter 7 of Title 42 of the United States Code (the scope and effect of Federal health care program exclusions is described in 42 C.F.R. § 1001.1901).</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>




                            </tbody>
                        </table>

                    </div>
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
                <div class="logo"><img src="content/images/logo-healthstream-small.png" alt="HealthStream"></div>
                <div class="copyright">Copyright &copy; 2017 HealthStream, Inc. All Rights Reserved.</div>
                <div class="disclaimer"><strong>DISCLAIMER:</strong> hStream Validate is solely intended to raise an alert of the potential need to further investigate or validate a provider’s credentials with regard to Office of Inspector General and System for Award Management exclusions and financial relationships under the Open Payments program.  All information provided through Validate is provided “as is” with no guarantee of completeness or accuracy and without any warranty of any kind, express or implied.  In no event shall HealthStream be liable for any decision made or any action taken in connection with or reliance on Validate.</div>
            </div>
        </div>
    </div>
    <div id="tooltip-help-content" class="tooltip-content">
        <div class="tooltip-container">
            <p>To decrease possibilities of false positives, please provide birthdates and/or NPIs.</p>
            <div class="help-item">
                <span class="help-value">34%</span> of your providers are missing birth dates.
            </div>
            <div class="help-item">
                <span class="help-value">98%</span> of your proviers are missing NPIs.
            </div>
        </div>
    </div>
    <script src="hstream-validate-assets/js/jquery.js"></script>
    <script src="hstream-validate-assets/js/bootstrap.plugins.js"></script>
    <script src="hstream-validate-assets/js/opentip-jquery.min.js"></script>
    <script>
        $(function() {
            Opentip.styles.alertToolTip = {
                target: true,
                stem: true,
                background: "#ffffff",
                borderRadius: 10,
                shadowBlur: 5,
                borderWidth: 1,
                borderColor: "#ddd",
                stemLength: 10,
                tipJoint: "middle left",
                stemBase: 15
            };
            Opentip.styles.alertToolTipOpenLeft = {
                extends: "alertToolTip",
                tipJoint: "middle right",
            };

            var tooltipContent = function() { return document.getElementById("tooltip-help-content").innerHTML; };
            new Opentip("#tooltip", tooltipContent, "How can I improve results?", { style: "alertToolTipOpenLeft" });

            $('.expand-detail').click(function(e) {
                e.preventDefault();
                var btn = $(this);
                if ($(btn).parents('tr').next('.validate-detail-row').hasClass('hidden')) {
                    $(btn).html('Hide Detail  <i class="fa fa-chevron-up"></i>');
                    $(btn).parents('tr').next('.validate-detail-row').removeClass('hidden');
                    $(btn).parents('tr').next('.validate-detail-row').find('.validate-detail-table-wrapper').slideToggle();
                } else {
                    $(btn).html('Show Detail  <i class="fa fa-chevron-down"></i>');
                    $(btn).parents('tr').next('.validate-detail-row').find('.validate-detail-table-wrapper').slideToggle(function() {
                        $(this).parents('tr').addClass('hidden');
                    });
                }
            });

        })
    </script>
</body>

</html>