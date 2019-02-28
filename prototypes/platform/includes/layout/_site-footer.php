<?php

function include_site_footer( $options ) {

    global $defaults;
    $options = json_decode(json_encode(array_replace_recursive($defaults,$options)), FALSE);

?>
    <div class="site-footer site-footer-min">
                <div class="container">
                    <div class="row legal">
                        <div class="col-md-12">
                            <div class="divider"></div>
                            <div class="company">HealthStream</div>
                            <div class="copyright">Copyright &copy;
                                <?php date('Y') ?> HealthStream, Inc. All Rights Reserved.</div>
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

include PATH_PATTERNS_MODALS .'_proto.php';


}

?>
