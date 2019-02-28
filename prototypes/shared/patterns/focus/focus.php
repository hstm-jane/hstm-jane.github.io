<?php

/*  =============================================================================
    Pattern: Focus
    ========================================================================== */

    class Focus extends Pattern
    {
        // the default set of values that will be overrwritten by
        // options passed into createFocus($options) helper.


        protected $settings = array(
            'attributes' => array(
                array('class', array('focus','focus-pageheader')),
            ),
            'title' => 'Focus Title',
            'type' => 'standard',
            'search' => array(
                    'placeholder' => 'Search Placeholder',
                    'url' => '#'
                    ),
            'from' => '',
            'meta_secondary' => ''
        );

        public function html(){
            return $this->_focus($this->settings);
        }

        // creates this="that" html attributes
        private function _attributes ( $data ) {
            $attr = '';
            foreach ($data as $o) {
                if ( is_array($o[1]) ) {
                    $attr .= ' ' . $o[0] . '="' . implode(' ', $o[1]) . '"';
                } else {
                    $attr .= ' ' . $o[0] . '="' . $o[1] . '"';
                }
            }
            return $attr;
        }

        // creates the primary meta info
        private function _meta_primary ( $data ) {
            $meta = '<ul class="meta">'. "\n";

            foreach ($data as $li) {
            $attr = (!empty($li['attributes']))?$this->_attributes($li['attributes']):'';

                $meta .= '<li class="meta-hidden-xs"' . $attr . '>';
                if ( !empty($li['label']) ) {
                    $meta .= '<span class="meta-label">' . $li['label'] . '</span>';
                    $this->settings['from'] = '<li class="meta-visible-xs"><span class="meta-label">' . $li['label'] . '</span>';

                }
                if ( !empty($li['value']) ) {
                    $meta .= '<span class="meta-value">' . $li['value'] . '</span>';
                    $this->settings['from'] .= '<span class="meta-value">' . $li['value'] . '</span></li>';
                }
                $meta .= '</li>' . "\n";

                if (!empty($li['pill_type'])){
                    $meta .= '<li class="meta-visible-xs"' . $attr . '>';
                    $meta .= '<span class="meta-type">' . $li['pill_type'] . '</span>';
                    $meta .= '</li>';

                }
            }

            $meta .= '</ul>';

            return $meta;
        }

        // creates the secondary meta info
        private function _meta_secondary ($data) {
            $meta = '<div class="fph-secondary"><ul class="meta">'. "\n";
            if ( !empty( $this->settings['from'] )) {
                            $meta .= $this->settings['from'];
            }

            if(!empty($data)){
                foreach ($data as $li) {
                    $attr = (!empty($li['attributes']))?$this->_attributes($li['attributes']):'';
                    $meta .= '<li' . $attr . '>';
                    if ( !empty($li['label']) ) {
                        $meta .= '<span class="meta-label">' . $li['label'] . '</span>';
                    }
                    if ( !empty($li['value']) ) {
                        $meta .= '<span class="meta-value">' . $li['value'] . '</span>';
                    }
                    $meta .= '</li>' . "\n";
                }
            }
            $meta .= '</ul></div>' . "\n";
            return $meta;
        }

        //creates the action button
        private function _action ( $data ){

            $html = '<div class="fph-cell fph-cell-button">' . "\n";

            // use button helper
            if ( is_array($data) ) {
                $html .= '<a href="'. $data["link"].'" class="btn btn-focus">' . "\n";
                $html .= $data['text'] . "\n";
                $html .= "</a>" . "\n";;
            }

            // use straight html
            else {
                $html .= $data . "\n";
            }

            $html .= "</div>";

            return $html;
        }
        // creates the icon
        private function _icon($data){

            if ( is_array($data) ) {
                $icon = '<div class="fph-cell fph-cell-icon">' . "\n";

                if(!empty($data['class'])){
                   $icon .= '<div class="fph-icon">' . "\n";
                   $icon .= '<i class="'. $data["class"] . '"> </i>';
                   $icon .='</div>';
                }
                if(!empty($data['type'])){
                    $icon .= '<div class="fph-icon-label">' . "\n";
                    $icon .= '<span>' . $data["type"] . ' </span>' ."\n";
                    $icon .='</div>';
                }

                $icon .='</div>';

                return $icon;
            }

            return $data;
        }

        //creates the search input
        private function _search($data){
            $html = '<div class="fph-cell fph-cell-search-input">'. "\n";
                $html .= '<form class="primary">'. "\n";
                $html .= '<div class="input-group">'. "\n";
                $html .= '<input type="text" class="form-control input-lg" placeholder="'.$data['placeholder'].'">'. "\n";
                $html .= ' <span class="input-group-btn">'. "\n";
                $html .=  '<a href=" '. $data['url'] .'" class="btn btn-focus btn-lg" type="button"><i class="fa fa-search fa-lg"></i></a>' . "\n";
                $html .= '</span></div></form></div>'  . "\n";
            return $html;
        }

        // creates the focus bar
        private function _focus($options) {

            $attr = (!empty($options['attributes']))?$this->_attributes( $options['attributes'] ):'';
            $meta_primary = (!empty($options['meta_primary']))?$this->_meta_primary($options['meta_primary']):'';
            $meta_secondary = (!empty($options['meta_secondary']) || !empty($options['from']))?$this->_meta_secondary( $options['meta_secondary'] ):'';
            $action = (!empty($options['action']))?$this->_action( $options['action'] ):'';
            $icon = (!empty($options['icon']))?$this->_icon( $options['icon'] ):'';
            $supporting = (!empty($options['supporting']))?( $options['supporting'] ):'';
            $type = (!empty($options['type']))?( $options['type'] ):'';
            $search = (!empty($options['search']))?$this->_search($options['search'] ):'';


            $html = "\n";
        if($type == "standard"){
            $html .= '<div' . $attr .'>' . "\n";
            $html .= '<div class="fph-separator"></div>' . "\n";
            $html .= '<div class="fph-table"> <div class="fph-row">' . "\n";
            $html .= $icon . "\n";
            $html .= '<div class="fph-cell fph-cell-text">' . "\n";
            $html .= '<div class="fph-primary">' . "\n";
            $html .= '<h1>' . $options['title'] .'</h1> ' . "\n";
            $html .= $meta_primary . "</div>" ."\n";

            $html .= $meta_secondary  . "\n";
            $html .= '</div>' . "\n";
            $html .= $action  . "\n";
            if ( !empty($supporting) ) {
                $html .= '<div class="fph-cell fph-cell-supporting">'. $supporting .'</div>';
            }
            $html .= '</div>' . "\n";
            $html .= '</div>' . "\n";
            $html .= '</div>' . "\n";
        }
        else if($type == "search"){

            $html .= '<div' . $attr .'>' . "\n";
            $html .= '<div class="fph-separator"></div>' . "\n";
            $html .= '<div class="fph-table"> <div class="fph-row">' . "\n";
            $html .= '<div class="fph-cell fph-cell-search-label">' . "\n";
            $html .= '<h1>' . $options['title'] .'</h1> </div>' . "\n";
            $html .= $search . "\n";
            $html .= $meta_primary . "</div>" ."\n";
            $html .= $meta_secondary  . "\n";
            $html .= '</div>' . "\n";
            $html .= '</div>' . "\n";
            $html .= '</div>' . "\n";
            $html .= '</div>' . "\n";
        }

            return $html;
        }


    }

    function createFocus($options = array()) {
        $focus = new Focus( $options );
        $html = $focus->html();
        $html = str_replace('{today}', date('M d, Y'), $html);
        $html = str_replace('{30days}', date('M d, Y', strtotime('+30 days')), $html);
        return $html;
    }
