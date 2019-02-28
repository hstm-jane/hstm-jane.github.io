
<style>
.site-header .nav-main .app-drawer-container .app-drawer-content>li {
    min-height:0 !important;

    }

</style>
<li class="app-drawer-container">
    <?php
  // $persona = (!empty($_GET['persona']))?intval($_GET['persona']):1;
  // echo $persona
  ?>
        <input type="hidden" value='<?= $persona ?>' id="persona-field" />
        <div class="app-drawer-icon">
            <div class="icon" id="applauncher">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 1200">
                    <defs>
                        <style>
                        .cls-1 {
                            fill: #666;
                        }

                        .cls-2 {
                            fill: #666;
                        }
                        </style>
                    </defs>
                    <ellipse class="cls-2" cx="151" cy="153.5" rx="147" ry="149.5"> </ellipse>
                    <ellipse class="cls-1" cx="600" cy="153.5" rx="147" ry="149.5"> </ellipse>
                    <ellipse class="cls-2" cx="600" cy="599.5" rx="147" ry="149.5"> </ellipse>
                    <ellipse class="cls-2" cx="151" cy="600.5" rx="147" ry="149.5"> </ellipse>
                    <ellipse class="cls-2" cx="151" cy="1050.5" rx="147" ry="149.5"> </ellipse>
                    <ellipse class="cls-1" cx="600" cy="1050.5" rx="147" ry="149.5"> </ellipse>
                    <ellipse class="cls-2" cx="1049" cy="1050.5" rx="147" ry="149.5"> </ellipse>
                    <ellipse class="cls-2" cx="1049" cy="599.5" rx="147" ry="149.5"> </ellipse>
                    <ellipse class="cls-2" cx="1049" cy="153.5" rx="147" ry="149.5"> </ellipse>
                </svg>
            </div>
            <div class="label">
                Apps
            </div>
            <div class="arrow">
                <i class="fa fa-angle-down" style="padding-left:1px;"></i>
            </div>
        </div>
        <?php

    $currentpage = basename($_SERVER['PHP_SELF']);

    switch ($persona) {
        // case 'hlc.dev':
        case '1':
           $email = 'luis@personalemail.com';
            $picURL = '/content/images/personas/Luis-NewGrad.png';
            break;
        case '2':
            $email = 'melissa@personalemail.com';
            $picURL = '/content/images/personas/Melissa-NurseManager.png';
            break;
        // case '3':
        //     $email = 'tracy@personalemail.com';
        //     $picURL = '/content/images/personas/Tracy-TCC.png';
        //     break;
        // case '4':
        //     $email = 'anna@personalemail.com';
        //     $picURL = '/content/images/personas/Anna-Instructor.png';
        //     break;
        // case '5':
        //     $email =  'grace@personalemail.com';
        //     $picURL = '/content/images/personas/Grace-CNO.png';
        //     break;
        // case '6':
        //     $email = 'catherine@personalemail.com';
        //     $picURL = '/content/images/personas/Catherine-CCO.png';
        //     break;
        // case '7':
        //     $email = 'felicity@personalemail.com';
        //     $picURL = '/content/images/personas/Felicity-CHRO.png';
        //     break;
        // case '8':
        //    $email = 'chris@personalemail.com';
        //     $picURL = '/content/images/personas/Chris-CIOCTO.png';
        //     break;
        case '3':
            $email = 'mariah@personalemail.com';
            $picURL = '/content/images/personas/Mariah-CEO.jpg';
            break;
        default:
            $email = 'luis@personalemail.com';
            $picURL = '/content/images/personas/Luis-NewGrad.png';
    }

    ?>
            <ul class="app-drawer-content" style="display:none;border:1px #ccc solid;">
                <li>
                    <div style="width:100%; display:table; position:relative; width:100%; padding:0; margin:0;border-bottom:2px solid #ccc;background-color:#f5f5f5;">
                        <div style="margin:10px; padding:5px 5px; display:block;">
                            <div class="app-drawer-nav-item-logo" style="width:50px; display:table-cell; padding-right:10px; vertical-align: top;">
                                <div class="svg-icon-wrap" style="overflow: hidden;height: 50px;width: 50px;border-radius: 4px;box-shadow: 0 0 4px rgba(0,0,0,.15);border: 1px solid #eee;">
                                    <img src=" <?=$picURL?> " style="width:50px;" alt="hStream">
                                </div>
                            </div>
                            <div class="app-drawer-nav-item-content" style="width:100%; display:table-cell;text-align:left;text-align:right;">
                                <h5 class="title" style="margin:0;"><b style="font-weight:600">hStream Cloud</b></h5>
                                <p class="description" style="margin:0;color:#555;text-align:right;">
                                    <?=$email?>
                                </p>
                                <div class="description" style="margin:0;width:100%;text-align: right;font-size:12px;">
                                    <a style="font-size:12px;" href="http://hstm-sail-hstream.patternmanager.com/applications.php?persona=<?= $persona ?>&workflow=<?= $workflow ?>" target="_blank">Manage Apps</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="app-drawer-content-panel">
                        <ul class="app-drawer-nav-item">
                           <!--  <li class="app-drawer-nav-item">
                                <a target="_blank" href="http://hstm-sail-hstream.patternmanager.com/applications.php?persona=">
                                    <div class=" app-drawer-nav-item-logo ">
                                        <div class="svg-icon-wrap " style=" ">
                                            <img src="content/images/hstream-cloud-logo-50x50.png " style="width:50px; " alt="hStream ">
                                        </div>
                                    </div>
                                    <div class="app-drawer-nav-item-content ">
                                        <h5 class="title ">hStream Cloud</h5>
                                        <p class="description ">Manage all of your hStream Cloud services and features</p>
                                    </div>
                                </a>
                            </li> -->
                            <?php if ($currentpage != 'hstream-workflow.dashboard-assignment.php' && $persona == '2') { ?>
                            <li class="app-drawer-nav-item ">
                                <a href="hstream-workflow.dashboard-assignment.php?persona=<?= $persona ?>&workflow=<?= $workflow ?>">
                                    <div class="app-drawer-nav-item-logo ">
                                        <div class="svg-icon-wrap " style=" ">
                                            <img src="content/images/ad-icon.png " style="display:block" alt="Assignment Dashboard ">
                                        </div>
                                    </div>
                                    <div class="app-drawer-nav-item-content ">
                                        <h5 class="title ">Assignment Dashboard</h5>
                                        <p class="description ">View your team's assignments.</p>
                                    </div>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if ($currentpage != 'hstream-workflow.eportfolio.php') { ?>
                            <li class="app-drawer-nav-item ">
                                <a href="hstream-workflow.eportfolio.php?persona=<?= $persona ?>&workflow=<?= $workflow ?>">
                                    <div class="app-drawer-nav-item-logo ">
                                        <div class="svg-icon-wrap " style=" ">
                                            <img src="content/images/logo_ePortfolio.svg " style="width:43px !important; height:50px !important; margin-left:4px; display:block" alt="ePortfolio ">
                                        </div>
                                    </div>
                                    <div class="app-drawer-nav-item-content ">
                                        <h5 class="title ">ePortfolio</h5>
                                        <p class="description ">Your ePortfolio goes with you wherever you are.</p>
                                    </div>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if ($currentpage != 'hstream-workflow.todo.php' && $currentpage != 'hstream-workflow.dashboard-manager.php'  && $currentpage != 'hstream-workflow.dashboard-tcc.php'
                            && $currentpage != 'hstream-workflow.dashboard-instructor.php') { ?>
                            <li class="app-drawer-nav-item ">
                                <a   href="hstream-workflow.todo.php?persona=<?= $persona ?>&workflow=<?= $workflow ?> ">
                                    <div class="app-drawer-nav-item-logo ">
                                        <div class="svg-icon-wrap " style=" ">
                                            <img src="content/images/healthstream-logo-100.png " alt="HLC ">
                                        </div>
                                    </div>
                                    <div class="app-drawer-nav-item-content ">
                                        <h5 class="title ">HLC</h5>
                                        <p class="description ">HealthStream Learning Center.</p>
                                    </div>
                                </a>
                            </li>
                            <?php } ?>

                            <?php //if (($currentpage != 'hstream-workflow.educate.php') && ($persona == '3' || $persona =='9')) { ?>
                            <!-- <li class="app-drawer-nav-item ">
                                <a   href="hstream-workflow.educate.php?persona=<?= $persona ?>&workflow=<?= $workflow ?>">
                                    <div class="app-drawer-nav-item-logo ">
                                        <div class="svg-icon-wrap " style=" ">
                                          <img src="content/images/hstream-educate-logo-100.png " style="width:48px;height:48px; padding-left:1px;padding-top:1px; " alt="hStream Educate ">
                                        </div>
                                    </div>
                                    <div class="app-drawer-nav-item-content ">
                                        <h5 class="title ">hStream Educate</h5>
                                        <p class="description ">View and manage all of your training data. </p>
                                    </div>
                                </a>
                            </li> -->
                            <?php //} ?>

                            <?php if (($currentpage != 'hstream-workflow.echo.php') && ($persona == '5' || $persona == '6' || $persona == '7' ||$persona =='9')) { ?>
                            <li class="app-drawer-nav-item ">
                                <a   href="hstream-workflow.echo.php?persona=<?= $persona ?>&workflow=<?= $workflow ?>">
                                    <div class="app-drawer-nav-item-logo ">
                                        <div class="svg-icon-wrap ">
                                            <img src="content/images/echo-logo-50x50.png " alt="Echo ">
                                        </div>
                                    </div>
                                    <div class="app-drawer-nav-item-content ">
                                        <h5 class="title ">Verity</h5>
                                        <p class="description ">Mange provider credentials, privileging, and more.</p>
                                    </div>
                                </a>
                            </li>
                            <?php } ?>

                            <?php if (($currentpage != 'hstream-workflow.alert.3.php') && ($persona == '3')) { ?>
                               <li class="app-drawer-nav-item ">
                                   <a href="hstream-workflow.alert.3.php?persona=<?= $persona ?>&workflow=<?= $workflow ?>">
                                       <div class="app-drawer-nav-item-logo ">
                                           <div class="svg-icon-wrap " style=" ">
                                               <img src="content/images/hstream-alert-logo-100.png " style="width:48px;height:48px;  " alt="hStream Alert ">
                                           </div>
                                       </div>
                                       <div class="app-drawer-nav-item-content ">
                                           <h5 class="title ">hStream Alert</h5>
                                           <p class="description ">(CMO/CHRO Only) Track your employee's credentialing and licensing status.</p>
                                       </div>
                                   </a>
                               </li>
                               <?php } ?>
                               <?php if (($currentpage != 'hstream-workflow.hlcprofile.php') && ($workflow == '1' || $workflow == '2') && ($persona == '3')) { ?>
                               <li class="app-drawer-nav-item ">
                                   <a href="hstream-workflow.hlcprofile.php?persona=<?= $persona ?>&workflow=<?= $workflow ?>"  target="_blank">
                                       <div class="app-drawer-nav-item-logo ">
                                           <div class="svg-icon-wrap " style=" ">
                                              <img src="content/images/healthstream-logo-100.png " alt="HLC ">
                                           </div>
                                       </div>
                                       <div class="app-drawer-nav-item-content ">
                                           <h5 class="title ">hStream Profile</h5>
                                           <p class="description ">(CIO Only) Manage system traffic and usage.</p>
                                       </div>
                                   </a>
                               </li>
                               <?php } ?>
                            <?php if (($currentpage != 'hstream-workflow.profile.php') && ($persona == '8' || $persona =='9')) { ?>
                            <li class="app-drawer-nav-item ">
                                <a   href="hstream-workflow.profile.php?persona=<?= $persona ?>&workflow=<?= $workflow ?>">
                                    <div class="app-drawer-nav-item-logo ">
                                        <div class="svg-icon-wrap ">
                                            <img src="content/images/hstream-profile-logo-100.png " style="width:48px;height:48px;  " alt="Workforce Profile Dashboard ">
                                        </div>
                                    </div>
                                    <div class="app-drawer-nav-item-content ">
                                        <h5 class="title ">Workforce Profile Dashboard</h5>
                                        <p class="description ">Manage system traffic and usage.</p>
                                    </div>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if (($currentpage != 'hstream.developer.php') && ($persona == '8' || $persona =='9')) { ?>
                            <li class="app-drawer-nav-item ">
                                <a   href="hstream.developer.php?persona=<?= $persona ?>&workflow=<?= $workflow ?>">
                                    <div class="app-drawer-nav-item-logo ">
                                        <div class="svg-icon-wrap " style=" ">
                                            <img src="content/images/hstream-developer-logo-100.png" style="width:48px;height:48px;  " alt="HLC ">
                                        </div>
                                    </div>
                                    <div class="app-drawer-nav-item-content ">
                                        <h5 class="title ">Developer Portal</h5>
                                        <p class="description ">Access information on APIs, toolkits, etc.</p>
                                    </div>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </li>
            </ul>
</li>