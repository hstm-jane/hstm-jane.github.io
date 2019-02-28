<?php

function include_site_footer( $options ) {

    global $defaults;
    $options = json_decode(json_encode(array_replace_recursive($defaults,$options)), FALSE);
    $site_footer_class = (!empty($options->footer->class))? ' ' . implode(' ', $options->footer->class) : "";

?>
    <div class="site-footer<?= $site_footer_class ?>">
        <?php
    if ( $options->footer->promo ) {
?>
            <div class="focus focus-promo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12"></div>
                    </div>
                </div>
            </div>
            <?php
    }
?>
                <div class="container">
                    <div class="row links">
                        <div class="col-md-9">
                            <section class="section">
                                <h4>Sitemap</h4>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <section class="section">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">Home</a>
                                                </li>
                                                <li>
                                                    <a href="#">My Ideas</a>
                                                </li>
                                                <li>
                                                    <a href="#">My Points</a>
                                                </li>
                                                <li>
                                                    <a href="#">Organizational Goals</a>
                                                </li>
                                                <li>
                                                    <a href="#">FTE's</a>
                                                </li>
                                            </ul>
                                        </section>
                                    </div>
                                    <div class="col-sm-3">
                                        <section class="section">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">Reports</a>
                                                </li>
                                                <li>
                                                    <a href="#">Department Goals</a>
                                                </li>
                                                <li>
                                                    <a href="#">Submit New Idea</a>
                                                </li>
                                                <li>
                                                    <a href="#">Import</a>
                                                </li>
                                                <li>
                                                    <a href="#">Rewards</a>
                                                </li>
                                            </ul>
                                        </section>
                                    </div>
                                    <div class="col-sm-3">
                                        <section class="section">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">Search</a>
                                                </li>
                                                <li>
                                                    <a href="#">Help</a>
                                                </li>
                                                <li>
                                                    <a href="#">Departments Goals</a>
                                                </li>
                                                <li>
                                                    <a href="#">Managers</a>
                                                </li>
                                                <li>
                                                    <a href="#">Points</a>
                                                </li>
                                            </ul>
                                        </section>
                                    </div>
                                    <div class="col-sm-3">
                                        <section class="section">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">Users</a>
                                                </li>
                                                <li>
                                                    <a href="#">Organization</a>
                                                </li>
                                                <li>
                                                    <a href="#">Reassign Ideas</a>
                                                </li>
                                                <li>
                                                    <a href="#">Account Settings</a>
                                                </li>
                                                <li>
                                                    <a href="#">Logout</a>
                                                </li>
                                            </ul>
                                        </section>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-3">
                            <section class="section support">
                                <h4>Support</h4>
                                To talk with a customer service representative call 1-800-521-0574
                            </section>
                        </div>
                    </div>
                    <div class="row legal">
                        <div class="col-md-12">
                            <div class="divider"></div>
                            <div class="logo"><img src="./content/images/logo-healthstream.png" alt="HealthStream"></div>
                            <div class="copyright">Copyright &copy;
                                <?= date('Y') ?> HealthStream, Inc. All Rights Reserved.</div>
                            <div class="build">Build: 13.01.28.895.8 | O:STS2 | S:192.231.71.2</div>
                        </div>
                    </div>
                    <ul class="site-palette">
                        <li id="theme-neutral-1"></li>
                        <li id="theme-neutral-2"></li>
                        <li id="theme-neutral-3"></li>
                        <li id="theme-neutral-4"></li>
                        <li id="theme-neutral-5"></li>
                        <li id="theme-neutral-6"></li>
                        <li id="theme-neutral-7"></li>
                        <li id="theme-neutral-8"></li>
                        <li id="theme-neutral-9"></li>
                        <li id="theme-neutral-10"></li>
                        <li id="theme-primary-lightest"></li>
                        <li id="theme-primary-lighter"></li>
                        <li id="theme-primary-light"></li>
                        <li id="theme-primary"></li>
                        <li id="theme-primary-dark"></li>
                        <li id="theme-primary-darker"></li>
                        <li id="theme-primary-darkest"></li>
                        <li id="theme-accent"></li>
                        <li id="theme-focus-btn"></li>
                    </ul>
                </div>
    </div>
    <?php

include "_proto.php";

}

?>
