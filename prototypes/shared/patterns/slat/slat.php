<?php

/*  =============================================================================
    Pattern: Slat
    ========================================================================== */

    class Slat extends Pattern
    {

        // the default set of values that will be overrwritten by
        // options passed into createSlat($options) helper.

        protected $settings = array(
            'attributes' => array(
                array('class', array('slat','slat-callout')),
            ),
            'title' => '<a href="#">This is the default title</a>',
            'meta' => array(
                array(
                    'type' => 'Course',
                ),
                array(
                    'label' => 'Meta Label:',
                    'value' => 'Meta Value',
                ),
                array(
                    'label' => 'Meta Label (Callout): ',
                    'value' => 'Meta Value (Callout)',
                    'attributes' => array(
                        array('class','meta-callout'),
                    )
                )
            ),
            'action' => array(
                'type' => 'action-single',
                'content' => 'Start',
                'link' => '#',
            ),
            'nested' => array(
                'show' => array(),
                'hide' => array(),
            ),
            'toggle' => array('Show additional information','Hide additional information'),
        );

            //         'action' => array(
            //     'type' => 'action-split-success',
            //     'options' => array(
            //         array(
            //             'content' => 'Manage',
            //             'link' => 'course.php',
            //             'attributes' => array(
            //                 array('class','js-click'),
            //             )
            //         ),
            //          array(
            //             'content' => 'Delete',
            //             'link' => '#',
            //         ),
            //     )
            // ),

        public function html(){
            return $this->_slat($this->settings);
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

        // creates the optional decription
        private function _description ( $data ) {
            return '<div class="description">' . $data .'</div>' . "\n";
        }

        // creates the meta, adds the icon if possible
        private function _meta ( $data ) {

            // we'll transform the array into the correct meta elements
            if ( is_array($data) ) {

                $meta = '<ul class="meta">'. "\n";

                foreach ($data as $li) {
                    $attr = (!empty($li['attributes']))?$this->_attributes($li['attributes']):'';
                    $meta .= '<li' . $attr . '>';
                    if ( !empty($li['type']) ) {

                        // removed 6/3/2016 MAS - unsure of if/when this will hit production
                        // switch(strtolower($li['type'])){
                            // case 'attachment':
                            // case 'evaluation':
                            // case 'course':
                            // case 'curriculum':
                            // case 'equivalent':
                            // case 'checklist':
                            // case 'test':
                            // case 'video':
                            //     $icon = '<i class="hs-icons-'.strtolower($li['type']).'-sm"></i> ';
                            //     break;
                            // case 'live class':
                            //     $icon = '<i class="hs-icons-class-live-sm"></i> ';
                            //     break;
                            // case 'virtual class':
                            //     $icon = '<i class="hs-icons-class-virtual-sm"></i> ';
                            //     break;
                            // case 'online activity':
                            //     $icon = '<i class="hs-icons-online-sm"></i> ';
                            //     break;
                            // case 'profile activity':
                            //     $icon = '<i class="hs-icons-profile-activity-sm"></i> ';
                            //     break;
                            // case 'moc curriculum':
                            //     $icon = '<i class="hs-icons-curriculum-sm"></i> ';
                            //     break;
                            // case 'learning event':
                            //     $icon = '<i class="hs-icons-learning-event-sm"></i> ';
                            //     break;
                            // case 'assessment':
                            // case 'self assessment':
                            // case 'peer assessment':
                            // case 'employee assessment':
                            //     $icon = '<i class="hs-icons-assessment-sm"></i> ';
                            //     break;
                            // default:
                            //     $icon = "";
                        // }

                        $icon = ""; // placeholder until icon returns
                        $meta .= '<span class="meta-type">'. $icon . $li['type'] . '</span>';
                    }
                    if ( !empty($li['label']) ) {
                        $meta .= '<span class="meta-label">' . $li['label'] . '</span>';
                    }
                    if ( !empty($li['value']) ) {
                        $meta .= '<span class="meta-value">' . $li['value'] . '</span>';
                    }
                    $meta .= '</li>' . "\n";
                }
                $meta .= '</ul>' . "\n";

                return $meta;

            }

            // we'll assume HTML was passed in
            return $data;

        }

        private function _options ( $data ) {
            $html = '';
            foreach ($data as $option) {
                $temp = file_get_contents(dirname(__FILE__).'/templates/slat.action.option.html');
                $temp = str_replace('{link}', $option['link'], $temp);
                $temp = str_replace('{content}', $option['content'], $temp);
                $html .= $temp;
            }
            return $html;
        }

        private function _action ( $data ) {

            // default mobile icon for action-single
            $icon = '<i class="fa fa-fw fa-chevron-right visible-xs"></i>';

            $html = '';
            switch ( $data['type'] ) {
                case 'status-complete':
                    $html = file_get_contents(dirname(__FILE__).'/templates/slat.status.complete.html');
                    break;
                case 'status-fail':
                    $html = file_get_contents(dirname(__FILE__).'/templates/slat.status.fail.html');
                    break;
                case 'status-pending':
                    $html = file_get_contents(dirname(__FILE__).'/templates/slat.status.pending.html');
                    break;
                case 'action-single':
                    $html = file_get_contents(dirname(__FILE__).'/templates/slat.action.single.html');
                    $html = str_replace('{color}', 'default', $html);
                    $html = str_replace('{link}', $data['link'], $html);
                    $html = str_replace('{content}', ( strpos($data['content'], 'fa-') !== false )?$data['content']:$data['content'].$icon, $html);
                    break;
                case 'action-split':
                    $html = file_get_contents(dirname(__FILE__).'/templates/slat.action.split.html');
                    $html = str_replace('{color}', 'default', $html);
                    $html = str_replace('{link}', $data['options'][0]['link'], $html);
                    $html = str_replace('{content}', $data['options'][0]['content'], $html);
                    $html = str_replace('{options}', $this->_options($data['options']), $html);
                    break;
                case 'action-multi':
                    $html = file_get_contents(dirname(__FILE__).'/templates/slat.action.multi.html');
                    $html = str_replace('{color}', 'default', $html);
                    $html = str_replace('{link}', $data['options'][0]['link'], $html);
                    $html = str_replace('{content}', (!empty($data['content']))?$data['content']:'Options', $html);
                    $html = str_replace('{options}', $this->_options($data['options']), $html);
                    break;
                case 'action-single-success':
                    $html = file_get_contents(dirname(__FILE__).'/templates/slat.action.single.html');
                    $html = str_replace('{color}', 'success', $html);
                    $html = str_replace('{link}', $data['link'], $html);
                    $html = str_replace('{content}', ( strpos($data['content'], 'fa-') !== false )?$data['content']:$data['content'].$icon, $html);
                    break;
                case 'action-split-success':
                    $html = file_get_contents(dirname(__FILE__).'/templates/slat.action.split.html');
                    $html = str_replace('{color}', 'success', $html);
                    $html = str_replace('{link}', $data['options'][0]['link'], $html);
                    $html = str_replace('{content}', $data['options'][0]['content'], $html);
                    $html = str_replace('{options}', $this->_options($data['options']), $html);
                    break;
                case 'action-multi-success':
                    $html = file_get_contents(dirname(__FILE__).'/templates/slat.action.multi.html');
                    $html = str_replace('{color}', 'success', $html);
                    $html = str_replace('{link}', $data['options'][0]['link'], $html);
                    $html = str_replace('{content}', (!empty($data['content']))?$data['content']:'Options', $html);
                    $html = str_replace('{options}', $this->_options($data['options']), $html);
                    break;
                case 'action-single-danger':
                    $html = file_get_contents(dirname(__FILE__).'/templates/slat.action.single.html');
                    $html = str_replace('{color}', 'danger', $html);
                    $html = str_replace('{link}', $data['link'], $html);
                    $html = str_replace('{content}', ( strpos($data['content'], 'fa-') !== false )?$data['content']:$data['content'].$icon, $html);
                    break;
                case 'action-single-warning':
                    $html = file_get_contents(dirname(__FILE__).'/templates/slat.action.single.html');
                    $html = str_replace('{color}', 'warning', $html);
                    $html = str_replace('{link}', $data['link'], $html);
                    $html = str_replace('{content}', ( strpos($data['content'], 'fa-') !== false )?$data['content']:$data['content'].$icon, $html);
                    break;
                case 'action-split-danger':
                    $html = file_get_contents(dirname(__FILE__).'/templates/slat.action.split.html');
                    $html = str_replace('{color}', 'danger', $html);
                    $html = str_replace('{link}', $data['options'][0]['link'], $html);
                    $html = str_replace('{content}', $data['options'][0]['content'], $html);
                    $html = str_replace('{options}', $this->_options($data['options']), $html);
                    break;
                case 'action-multi-danger':
                    $html = file_get_contents(dirname(__FILE__).'/templates/slat.action.multi.html');
                    $html = str_replace('{color}', 'danger', $html);
                    $html = str_replace('{link}', $data['options'][0]['link'], $html);
                    $html = str_replace('{content}', (!empty($data['content']))?$data['content']:'Options', $html);
                    $html = str_replace('{options}', $this->_options($data['options']), $html);
                    break;
                case 'custom':
                    $html = $data['content'];
            }
            return $html;
        }


        private function _nested ( $data ) {

            $html = '';
            $show = '';
            $hide = '';

            if ( !empty($data['show']) ) {
                foreach ($data['show'] as $content) {
                    $show .= $content;
                }
            }

            if ( !empty($data['hide']) ) {
                $hide .= '<div class="collapse-group collapse">' . "\n";
                foreach ($data['hide'] as $content) {
                    $hide .= $content;
                }
                $hide .= '</div>' . "\n";
                $hide .= '<a href="#" class="collapse-toggle" data-toggle-text="' . implode('|',$this->settings['toggle']) .'">' . $this->settings['toggle'][0] . '</a>' . "\n";
            }

            if ( !empty($data['show']) || !empty($data['hide']) ) {
                $html .= '<div class="slat-nested">' . "\n";
                $html .= $show;
                $html .= $hide;
                $html .= '</div>' . "\n";
            }

            return $html;
        }


        // creates the slat
        private function _slat($options) {

            $attr = (!empty($options['attributes']))?$this->_attributes( $options['attributes'] ):'';
            $description = (!empty($options['description']))?$this->_description( $options['description'] ):'';
            $meta = (!empty($options['meta']))?$this->_meta( $options['meta'] ):'';
            $status = (!empty($options['status']) && empty($options['actions']))?$this->_status( $options['status'] ):'';
            $action = (!empty($options['action']))?$this->_action( $options['action'] ):'';
            $nested = (!empty($options['nested']))? $this->_nested( $options['nested'] ):'';

            $html = "\n";
            $html .= '<div' . $attr .'>' . "\n";
            $html .= '<div class="slat-default">' . "\n";
            $html .= '<div class="title">' . $options['title'] .'</div>' . "\n";
            $html .= $description;
            $html .= $meta;
            $html .= $status;
            $html .= $action;
            $html .= '</div>' . "\n";
            $html .= $nested;
            $html .= '</div>' . "\n\n";

            return $html;
        }

    }

/*  =============================================================================
    Helper Function: Creates a temporary Slat instance and return html
    ========================================================================== */

    function createSlat($options = array()) {
        $slat = new Slat( $options );
        $html = $slat->html();
        $html = str_replace('{today}', date('M d, Y'), $html);
        $html = str_replace('{30days}', date('M d, Y', strtotime('+30 days')), $html);
        return $html;
    }

?>