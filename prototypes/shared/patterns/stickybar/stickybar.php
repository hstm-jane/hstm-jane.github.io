<?php

/*  =============================================================================
    Pattern: Stickybar
    ========================================================================== */

    class Stickybar extends Pattern
    {
        protected $settings = array(
            'sets' => array(
                array(
                    'classes' => array('hidden-xs','hidden-sm'),
                    'html' => '<a href="#" class="btn btn-success">Green Long Label Button</a> <a href="#" class="btn btn-default">Default Long Label Button</a>',
                ),
                array(
                    'classes' => array('visible-xs','visible-sm'),
                    'html' => '<a href="#" class="btn btn-success">Green</a> <a href="#" class="btn btn-default">Default</a>',
                ),
                array(
                    'position' => 'right',
                    'html' => '<a href="#" class="btn btn-danger">Danger</a>',
                ),
            )
        );

        private function _classes ( $classes ) {
            $html = '';
            if ( is_array($classes) ) {
                $html .= implode(' ', $classes);
            } else {
                $html .= $classes;
            }
            return $html;
        }

        private function _left($left) {
            $html = '';
            if ( !empty($left) ) {
                $html .= '<div class="stickybar-left">';
                foreach ( $left as $set ) {
                    $buttons = $set['html'];
                    if ( count($left) === 1 && empty($set['classes']) ) {
                        $html .= $buttons;
                    } else {
                        $html .= '<div' . ((!empty($set['classes']))?' class="' . $this->_classes($set['classes']). '"':'') . '>';
                        $html .= $buttons;
                        $html .= '</div>';
                    }
                }
                $html .= '</div>';
            }
            return $html;
        }

        private function _right($right) {
            $html = '';
            if ( !empty($right) ) {
                $html .= '<div class="stickybar-right">';
                foreach ( $right as $set ) {
                    $buttons = $set['html'];
                    if ( count($right) === 1 && empty($set['classes']) ) {
                        $html .= $buttons;
                    } else {
                        $html .= '<div' . ((!empty($set['classes']))?' class="' . $this->_classes($set['classes']). '"':'') . '>';
                        $html .= $buttons;
                        $html .= '</div>';
                    }
                }

            }
            return $html;
        }

        private function _stickybar($options) {

            $left = array();
            $right = array();

            foreach ( $this->settings['sets'] as $set ) {
                if ( !empty($set['position']) && $set['position'] === 'right' ) {
                    array_push($right, $set);
                } else {
                    array_push($left, $set);
                }
            }

            $html = file_get_contents(dirname(__FILE__).'/templates/stickybar.html');
            $html = str_replace('{left}', $this->_left($left), $html);
            $html = str_replace('{right}', $this->_right($right), $html);
            return $html;
        }


        public function html(){
            return $this->_stickybar($this->settings);
        }
    }

    /*  =============================================================================
    Helper Function: Creates a temporary instance and return html
    ========================================================================== */

    function createStickybar($options = array()) {
        $stickybar = new Stickybar( $options );
        $html = $stickybar->html();
        return $html;
    }



?>