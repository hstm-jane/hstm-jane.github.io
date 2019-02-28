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
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <!-- START widget-->
                            <div class="panel panel-primary">
                                <a href="hstream-validate-details-oig.php">
                                    <div class="panel-body">
                                        <div class="alert-header clearfix">
                                            <div class="alert-title pull-left">OIG Alerts</div>
                                            <div class="alert-count pull-right">
                                                <div class="alert-value">166</div>
                                                <div class="alert-type">Total Alerts</div>
                                            </div>
                                        </div>
                                        <div class="flags">
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
                                    </div>
                                </a>
                                <div class="panel-footer clearfix">
                                    <a href="#" class="pull-right help-hover" id="oig-tooltip">How can I improve results?</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- START widget-->
                            <div class="panel panel-primary">
                                <a href="hstream-validate-details-sam.php">
                                    <div class="panel-body">
                                        <div class="alert-header clearfix">
                                            <div class="alert-title pull-left">SAM Alerts</div>
                                            <div class="alert-count pull-right">
                                                <div class="alert-value">76</div>
                                                <div class="alert-type">Total Alerts</div>
                                            </div>
                                        </div>
                                        <div class="flags">
                                            <div class="flag red-flag ">
                                                <div class="name">First Name, Last Name, NPI, DOB match</div>
                                                <div class="value">6</div>
                                            </div>
                                            <div class="flag orange-flag ">
                                                <div class="name">First Name, Last Name, NPI match</div>
                                                <div class="value">41</div>
                                            </div>
                                            <div class="flag yellow-flag ">
                                                <div class="name">First Name, Last Name match</div>
                                                <div class="value">29</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="panel-footer clearfix">
                                    <a href="#" class="pull-right help-hover" id="sam-tooltip">How can I improve results?</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- START widget-->
                            <div class="panel panel-primary">
                                <a href="hstream-validate-details-oig.php">
                                    <div class="panel-body">
                                        <div class="alert-header clearfix">
                                            <div class="alert-title pull-left">Open Payment Alerts</div>
                                            <div class="alert-count pull-right">
                                                <div class="alert-value">0</div>
                                                <div class="alert-type">Total Alerts</div>
                                            </div>
                                        </div>
                                        <div class="flags" >
                                            <div class="flag red-flag ">
                                                <div class="name">First Name, Last Name, NPI, DOB match</div>
                                                <div class="value">0</div>
                                            </div>
                                           
                                            <div class="flag yellow-flag ">
                                                <div class="name">Total employees scanned</div>
                                                <div class="value">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="panel-footer clearfix">
                                    <a href="#" class="pull-right help-hover" id="openpayments-tooltip">How can I improve results?</a>
                                </div>
                            </div>
                        </div>
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
        new Opentip("#oig-tooltip", tooltipContent, "How can I improve results?", { style: "alertToolTip" });
        new Opentip("#sam-tooltip", tooltipContent, "How can I improve results?", { style: "alertToolTip" })
        new Opentip("#openpayments-tooltip", tooltipContent, "How can I improve results?", { style: "alertToolTipOpenLeft" })


    })
    </script>
</body>

</html>