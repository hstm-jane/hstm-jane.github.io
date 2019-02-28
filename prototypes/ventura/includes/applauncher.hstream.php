<li class="app-drawer-container">
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
    <ul class="app-drawer-content" style="display:none;border:1px #ccc solid;">
        <li>
            <div style="width:100%; display:table; position:relative; width:100%; padding:0; margin:0;border-bottom:2px solid #ccc;background-color:#f5f5f5;">
                <div style="margin:10px; padding:5px 5px; display:block;">
                    <div class="app-drawer-nav-item-logo" style="width:50px; display:table-cell; padding-right:10px; vertical-align: top;">
                        <div class="svg-icon-wrap" style="overflow: hidden;height: 50px;width: 50px;border-radius: 4px;box-shadow: 0 0 4px rgba(0,0,0,.15);border: 1px solid #eee;">
                            <img src="content/images/hstream-cloud-logo-50x50.png" style="width:50px;" alt="hStream">
                        </div>
                    </div>
                    <div class="app-drawer-nav-item-content" style="width:100%; display:table-cell;text-align:left;text-align:right;">
                        <h5 class="title" style="margin:0;"><b style="font-weight:600">hStream Cloud</b></h5>
                        <p class="description" style="margin:0;color:#555;text-align:right;">darcy.crane@gmail.com </p>
                        <div class="description" style="margin:0;width:100%;text-align: right;font-size:12px;">
                            <a style="font-size:12px;" href="http://hstm-sail-hstream.patternmanager.com/marketplace.php#" target="_blank">Manage Apps</a></div>
                    </div>
                </div>
            </div>
            <div class="app-drawer-content-panel">
                <ul class="app-drawer-nav-item">
                    <li class="app-drawer-nav-item">
                        <a target="_blank" href="http://www.healthstream.com">
                            <div class="app-drawer-nav-item-logo">
                                <div class="svg-icon-wrap">
                                    <img src="content/images/coi-logo-50x50.png" alt="COI Smart">
                                </div>
                            </div>
                            <div class="app-drawer-nav-item-content">
                                <h5 class="title">COI Smart</h5>
                                <p class="description">Track and manage Conflict of Interest (COI) disclosures</p>
                            </div>
                        </a>
                    </li>
                    <?php if (basename($_SERVER['PHP_SELF']) != 'hstream.hlc.php') { ?>
                    <li class="app-drawer-nav-item">
                        <a target="_blank" href="hstream.hlc.php">
                            <div class="app-drawer-nav-item-logo">
                                <div class="svg-icon-wrap" style="">
                                 <img src="content/images/healthstream-logo-100.png " alt="HLC ">
                                </div>
                            </div>
                            <div class="app-drawer-nav-item-content">
                                <h5 class="title">HLC</h5>
                                <p class="description">HealthStream Learning Center.</p>
                            </div>
                        </a>
                    </li>
                   <?php } ?>
                   <?php if (basename($_SERVER['PHP_SELF']) != 'hstream.echo.php') { ?>
                   <li class="app-drawer-nav-item">
                       <a target="_blank" href="hstream.echo.php">
                           <div class="app-drawer-nav-item-logo">
                               <div class="svg-icon-wrap">
                                   <img src="content/images/echo-logo-50x50.png" alt="Echo">
                               </div>
                           </div>
                           <div class="app-drawer-nav-item-content">
                               <h5 class="title">Echo Credentialing</h5>
                               <p class="description">Mange provider credentials, privileging, and more.</p>
                           </div>
                       </a>
                   </li>
                  <?php } ?>
                  <?php if (basename($_SERVER['PHP_SELF']) != 'hstream.developer.php') { ?>
                    <li class="app-drawer-nav-item">
                        <a target="_blank" href="/hstream.developer.php">
                            <div class="app-drawer-nav-item-logo">
                                <div class="svg-icon-wrap" style="">
                                    <img src="content/images/hstream-developer-logo-100.png" style=""  alt="hStream Developer">
                                </div>
                            </div>
                            <div class="app-drawer-nav-item-content">
                                <h5 class="title">hStream Developer Portal</h5>
                                <p class="description">Contains SDKs, Toolkits, &amp; Documentation.</p>
                            </div>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if (basename($_SERVER['PHP_SELF']) != 'hstream.educate.php') { ?>
                    <li class="app-drawer-nav-item">
                        <a target="_blank" href="/hstream.educate.php">
                            <div class="app-drawer-nav-item-logo">
                                <div class="svg-icon-wrap" style="">
                                    <img src="content/images/hstream-educate-logo-100.png" style=""  alt="hStream Educate">
                                </div>
                            </div>
                            <div class="app-drawer-nav-item-content">
                                <h5 class="title">hStream Educate</h5>
                                <p class="description">Streamline product evaluations &amp; leverage purchasing power.</p>
                            </div>
                        </a>
                    </li>
                    <?php } ?>1
                  <!--   <li class="app-drawer-nav-item">
                        <a target="_blank" href="http://hstm-hlc-student.patternmanager.com/hstream.activity.php">
                            <div class="app-drawer-nav-item-logo">
                                <div class="svg-icon-wrap">
                                    <img src="content/images/hstream-activity-logo-50x50.png" style="width:50px;" alt="hStream Activity">
                                </div>
                            </div>
                            <div class="app-drawer-nav-item-content">
                                <h5 class="title">hStream Activity</h5>
                                <p class="description">View license consumption and utilization.</p>
                            </div>
                        </a>
                    </li>
                    <li class="app-drawer-nav-item">
                        <a target="_blank" href="http://www.healthstream.com/collaboratives/providence-collaborative---demo/overview">
                            <div class="app-drawer-nav-item-logo">
                                <div class="svg-icon-wrap">
                                    <img src="content/images/hstream-collaborate-logo-50x50.png" style="width:50px;" alt="hStream Collaborate">
                                </div>
                            </div>
                            <div class="app-drawer-nav-item-content">
                                <h5 class="title">hStream Collaborate</h5>
                                <p class="description">Streamline product evaluations and leverage purchasing power.</p>
                            </div>
                        </a>
                    </li> -->
                </ul>
            </div>
        </li>
    </ul>

</li>