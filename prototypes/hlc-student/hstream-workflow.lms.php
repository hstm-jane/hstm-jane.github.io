<?php
$persona = (!empty($_GET['persona']))?intval($_GET['persona']):1;
$workflow = (!empty($_GET['workflow']))?intval($_GET['workflow']):0;
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Basic Page Needs
    ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>LMS</title>
<style>
html, body {
    margin:0;
    padding:0;
}
img {
    width:100%;
}
</style>
    </head>
    <body>
        <a href="hstream-workflow.bridge.php?persona=<?= $persona ?>&workflow=<?= $workflow ?>"">
            <img src="content/images/lms.png"/>
        </a>
    </body>

    </html>