<?php

/*  =============================================================================
    Examples of $options - these should be defined in the prototype
    ========================================================================== */

    $brightIdeasFooterExample = array(
        'sitemap' => '
            <div class="row">
                <div class="col-sm-3">
                    <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">My Ideas</a></li>
                            <li><a href="#">My Points</a></li>
                            <li><a href="#">Organizational Goals</a></li>
                            <li><a href="#">FTEs</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-sm-3">
                    <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">Reports</a></li>
                            <li><a href="#">Department Goals</a></li>
                            <li><a href="#">Submit New Idea</a></li>
                            <li><a href="#">Import</a></li>
                            <li><a href="#">Rewards</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-sm-3">
                    <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">Search</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Departments Goals</a></li>
                            <li><a href="#">Managers</a></li>
                            <li><a href="#">Points</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-sm-3">
                    <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">Users</a></li>
                            <li><a href="#">Organization</a></li>
                            <li><a href="#">Reassign Ideas</a></li>
                            <li><a href="#">Account Settings</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </section>
                </div>
            </div>',
    );

    $hlcStudentFooterExample = array(
        'sitemap' => '
            <div class="row">
                <div class="col-sm-3">
                     <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">To-Do List</a></li>
                            <li><a href="#">Completions</a></li>
                            <li><a href="#">Connections</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-sm-3">
                    <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">Certifications</a></li>
                            <li><a href="#">Licenses</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-sm-3">
                    <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">Catalog</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-sm-3">
                    <section class="section">
                        <ul class="list-unstyled">
                            <li><a href="#">Account Settings</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </section>
                </div>
            </div>',
    );

    $platformFooterExample = array(
        'classes' => array('site-footer-min'),
        'focus' => '',
        'sitemap' => '',
        'support' => '',
    );


/*  =============================================================================
    Pattern: Footer
    ========================================================================== */

    class Footer extends Pattern
    {

        protected $settings = array(
            'classes' => array(),
            'focus' => ' ',
        	'sitemap' => '
                <div class="row">
                    <div class="col-sm-4">
                        <section class="section">
                            <ul class="list-unstyled">
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-sm-4">
                        <section class="section">
                            <ul class="list-unstyled">
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-sm-4">
                        <section class="section">
                            <ul class="list-unstyled">
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                            </ul>
                        </section>
                    </div>
                </div>',
            'support' => 'To talk with a customer service representative call 1-800-521-0574',
        );

        private function _focus() {
            $html = '';
            if ( !empty($this->settings['focus']) ) {
                $html = file_get_contents(dirname(__FILE__).'/templates/focus.html');
                $html = str_replace('{focus}', $this->settings['focus'], $html);
            }
            return $html;
        }

        private function _footer($options) {
            $html = file_get_contents(dirname(__FILE__).'/templates/footer.html');
            $html = str_replace('{classes}', ' ' . implode(' ', $this->settings['classes']), $html);
            $html = str_replace('{focus}', $this->_focus(), $html);
            $html = str_replace('{sitemap}', $this->settings['sitemap'], $html);
            $html = str_replace('{support}', $this->settings['support'], $html);
            $html = str_replace('{year}', date('Y'), $html);

            return $html;
        }


        public function html(){
            return $this->_footer($this->settings);
        }
    }

    /*  =============================================================================
    Helper Function: Creates a temporary instance and return html
    ========================================================================== */

    function createFooter($options = array()) {
        $footer = new Footer( $options );
        $html = $footer->html();
        return $html;
    }



?>
