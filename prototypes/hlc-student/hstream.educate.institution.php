<div class="institution"><a href="#">

   <?php
   if ($org == '2') {

       //org = hca
       echo 'Ascension';
       // <iframe src="hstream.educate.discover.hca.php" style="width:100%;height:3660px" id="reportFrame"></iframe>';

   }
   else if ($org == '3') {
       //org = chs
       // echo '<iframe src="hstream.educate.discover.chs.php" style="width:100%;height:3677px" id="reportFrame"></iframe>';
    echo 'Main Line Health';

   }
   else if ($org == '1') {
       //org = chs
       // echo '<iframe src="hstream.educate.discover.chs.php" style="width:100%;height:3677px" id="reportFrame"></iframe>';
    echo 'Community Health Systems';

   }
   else {
    echo 'HCA - The Healthcare Company';
       // echo '<iframe src="hstream.educate.discover.ascension.php" style="width:100%;height:3677px" id="reportFrame"></iframe>';
   }
   ?>


</a></div>