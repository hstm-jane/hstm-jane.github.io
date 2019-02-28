<?php
// include("includes/password_protect.php");

function include_site_start($options) {
    global $defaults;
    $options = json_decode(json_encode(array_replace_recursive($defaults,$options)), FALSE);

    $title = (!empty($options->head->title))? " | " . $options->head->title : "";
    $theme = (!empty($options->head->theme))? "-" . $options->head->theme : "";

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HealthStream<?= $title ?></title>

    <!-- Styles
    ================================================== -->

    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.bootstrap.css?<?php date('U'); ?>">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.plugins.css?<?php date('U'); ?>">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.app.css?<?php date('U'); ?>">
   
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.icons.css?<?php date('U'); ?>">
    <link rel="stylesheet" type="text/css" href="/content/styles/healthstream.prototype.css?<?php date('U'); ?>">

    <!-- IE 7/8 Handling
    ================================================== -->
    <script>
        if (document.documentMode < 8) {
            location.href = "unsupported-browser.php";
        } else if (document.documentMode == 8) {
            var html = document.getElementsByTagName('html')[0];
            html.className = 'ie ie8' + html.className;
            var ie8docmode = document.createElement('script');
            ie8docmode.setAttribute('src','/scripts/respond.js');
            document.getElementsByTagName('head')[0].appendChild(ie8docmode);
        }
    </script>

    <!-- Feature Detection Using Modernizr
    ================================================== -->
    <script src="/scripts/modernizr.js"></script>
    <!--[if lt IE 9]>
    <script src="/scripts/respond.js"></script>
    <![endif]-->

</head>
<body>
<?php

}

?>