<?php
include "includes/helpers/helpers.php";
$patterns['start']['title'] = 'RN: Emergency Skills Self-Assessment';
?>
<?=createSiteStart($patterns['start']);?>

<style>
  body {
    text-align: center;
  }

  ul {
    margin: 100px 20px;
    padding: 0;
    list-style: none;
  }

  a {
    display: inline-block;
    width: 100%;
    max-width: 300px;
    background-color: #fff;
    margin: 20px auto;
    padding: 60px 20px;
    transition: 200ms ease-in-out;
    border-radius: 6px;
    box-shadow: 0 1px 5px rgba(0,0,0,.2);
    color: #09C;
    font-size: 24px;
    font-weight: bold;
  }

  a:hover,
  a:active {
    transform: scale(1.1);
    box-shadow: 0 5px 40px rgba(0,0,0,.1);
    text-decoration: none;
  }
</style>
<ul>
  <li><a href="demo-student.php">Student Experience (Sales)</a></li>
  <li><a href="demo-student-jane.php">Student Experience (Virtual Jane)</a></li>
  <li><a href="demo-admin.php">Admin Experience</a></li>
</ul>

<?=createSiteEnd();?>