<ul id="nav" class="nav">

    <!--Overview-->
    <?php if (basename($_SERVER['PHP_SELF']) == 'hstream.educate.php') { echo '<li class="active">'; } else { echo '<li>'; }?>
    <a href="hstream.educate.php?org=<?= $org ?>">Overview</a></li>

    <!--Be Informed-->
    <?php if (basename($_SERVER['PHP_SELF']) == 'hstream.educate.beinformed.php') { echo '<li class="active">'; } else { echo '<li>'; }?>
    <a href="hstream.educate.beinformed.php?org=<?= $org ?>">Be Informed</a></li>

    <!--Determine Needs-->
    <?php if (basename($_SERVER['PHP_SELF']) == 'hstream.educate.determineneeds.php') { echo '<li class="active">'; } else { echo '<li>'; }?>
    <a href="hstream.educate.determineneeds.php?org=<?= $org ?>">Determine Needs</a></li>

    <!--Discover and Compare-->
    <?php
        if ($org == '3') {
            if (basename($_SERVER['PHP_SELF']) == 'hstream.educate.discover.mainline.php') { echo '<li class="active">'; } else { echo '<li>'; }
                echo '<a href="hstream.educate.discover.mainline.php?org='.$org.'">Discover &amp; Compare</a></li>';
            }
        else if ($org == '2') {
            if (basename($_SERVER['PHP_SELF']) == 'hstream.educate.discover.ascension.php') { echo '<li class="active">'; } else { echo '<li>'; }
                echo '<a href="hstream.educate.discover.ascension.php?org='.$org.'">Discover &amp; Compare</a></li>';
            }
        else if ($org == '1') {
            if (basename($_SERVER['PHP_SELF']) == 'hstream.educate.discover.chs.php') { echo '<li class="active">'; } else { echo '<li>'; }
                echo '<a href="hstream.educate.discover.chs.php?org='.$org.'">Discover &amp; Compare</a></li>';
            }
        else {
            if (basename($_SERVER['PHP_SELF']) == 'hstream.educate.discover.hca.php') { echo '<li class="active">'; } else { echo '<li>'; }
                echo '<a href="hstream.educate.discover.hca.php?org='.$org.'">Discover &amp; Compare</a></li>';
            }
    ?>

    <!-- Verify -->
    <?php if (basename($_SERVER['PHP_SELF']) == 'hstream.educate.monitor.php') { echo '<li class="active">'; } else { echo '<li>'; }?>
    <li class=""><a href="hstream.educate.monitor.php?org=<?= $org ?>">Verify</a></li>

    <!--Shop and Save-->
    <?php
        if ($org == '3') {
            if (basename($_SERVER['PHP_SELF']) == 'http://www.healthstream.com/mainlinedemo') { echo '<li class="active">'; } else { echo '<li>'; }
                echo '<a href="http://www.healthstream.com/mainlinedemo" target="_new">Shop &amp; Save</a></li>';
            }
        else if ($org == '2') {
            if (basename($_SERVER['PHP_SELF']) == 'http://www.healthstream.com/ascensiondemo') { echo '<li class="active">'; } else { echo '<li>'; }
                echo '<a href="http://www.healthstream.com/ascensiondemo" target="_new">Shop &amp; Save</a></li>';
            }
        else if ($org == '1') {
            if (basename($_SERVER['PHP_SELF']) == 'http://www.healthstream.com/chsdemo') { echo '<li class="active">'; } else { echo '<li>'; }
                echo '<a href="http://www.healthstream.com/chsdemo" target="_new">Shop &amp; Save</a></li>';
            }
        else {
            if (basename($_SERVER['PHP_SELF']) == 'http://www.healthstream.com/hcademo') { echo '<li class="active">'; } else { echo '<li>'; }
                echo '<a href="http://www.healthstream.com/hcademo" target="_new">Shop &amp; Save</a></li>';
            }
    ?>

        <!--9 box-->
        <?php include ('includes/applauncher.hstream.persona.php');?>
</ul>