<?php

/*  =============================================================================
    Pattern: Focus
    ========================================================================== */

    class FocusNav extends Pattern
    {
        // the default set of values that will be overrwritten by
        // options passed into createFocus($options) helper.


        protected $settings = array(
            'tabs' => array(
                array(
                    'id' => 'tab-1',
                    'label' => 'Tab 1',
                ),
                array(
                    'active' => true,
                    'id' => 'tab-2',
                    'label' => 'Tab 2',
                ),
                array(
                    'id' => 'tab-3',
                    'label' => 'Tab 3',
                ),
                array(
                    'url' => '/',
                    'label' => 'A Link',
                ),
            ),
        );

        public function html(){
            return $this->_focusNav($this->settings);
        }

        // creates the focus bar
        private function _focusNav() {

            $tabs = '';
            $activeLabel = '';

            foreach ($this->settings['tabs'] as $tab) {
                $isActive = (!empty($tab['active']) && $tab['active'] === true);
                $activeClass = ($isActive)?' class="active"':'';

                if ( !empty($tab['url']) ) {
                    $tabs .= '<li' . $activeClass . '><a href="' . $tab['url'] . '" data-page="true"'.((substr($tab['url'],0,4) === 'http')?' target="_blank"':'').'><i class="fa fa-caret-down"></i>' . $tab['label'] . '</a></li>';
                }
                else if ( !empty($tab['id']) ) {
                    $tabs .= '<li' . $activeClass . '><a href="#' . $tab['id'] . '"><i class="fa fa-caret-down"></i>' . $tab['label'] . '</a></li>';
                }

                if ( $isActive ) {
                    $activeLabel = $tab['label'];
                }
            }

            $html = file_get_contents(dirname(__FILE__).'/templates/focus-nav.html');
            $html = str_replace('{activeLabel}', $activeLabel, $html);
            $html = str_replace('{tabs}', $tabs, $html);

            return $html;
        }


    }

    function createFocusNav($options = array()) {
        $focus = new FocusNav( $options );
        $html = $focus->html();
        return $html;
    }
