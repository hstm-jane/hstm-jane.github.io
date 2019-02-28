<?php

/*  =============================================================================
    Pattern: Search
    ========================================================================== */

    class Search extends Pattern
    {
        protected $settings = array(
            "filters" => array(
                array(
                    "state" => 'closed', // static / open / closed
                    "header" => 'Filter Header',
                    "controls" => array(
                        '<select class="form-control js-select2"><option>Option 1</option><option>Option 2</option><option>Department 3</option></select>'
                    )
                ),
                array(
                    "state" => 'open', // static / open / closed
                    "header" => 'Name Search',
                    "controls" => array(
                       '<label class="control-label">First Name</label><div class="input-group"><input type="text" class="form-control" placeholder="Search"><span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span></div>',
                       '<label class="control-label">Last Name</label><div class="input-group"><input type="text" class="form-control" placeholder="Search"><span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span></div>'
                    )
                )
            ),
            "tags" => array(
                array(
                    'value' => 'Search Term',
                    'href' => '#',
                    'class' => '',
                ),
                array(
                    'value' => 'Search Term',
                    'href' => '#',
                    'class' => ''
                )
            )

        );


        public function searchHtml(){
            return $this->_search($this->settings);
        }
        public function tagsHtml(){
            return $this->_tags($this->settings);
        }

        private function _applied_tags ( $data ){
            $html = '<div class="tag-group">';

            foreach ($data as $tag){
                    $html .= '<a href="' . $tag['href'] . '"' . "\n";
                    $html .= 'class="tag ' . $tag['class'] . ' ">' . "\n";
                    $html .= $tag['value'] . '<i class="fa fa-times"></i> </a>' . "\n";
            }

            $html .= '</div>';
            return $html;
        }

        //create filter
        private function _search_filter ( $data ) {
            $html = '<div class="search-filters">' . "\n";

            foreach ($data as $filter){
                // SCREEN SIZE VISIBILITY
                if ( !empty($filter['visible']) && $filter['visible'] === 'mobile' ) {
                    $visible = ' search-filter--mobile';
                }
                else if ( !empty($filter['visible']) && $filter['visible'] === 'desktop' ) {
                    $visible = ' search-filter--desktop';
                }
                else {
                    $visible = '';
                }

                // OPEN OR CLOSED
                if ( !empty($filter['state']) && $filter['state'] === 'closed' ) {
                    $closed = ' search-filter--closed';
                } else {
                    $closed = '';
                }

                // ABILITY TO TOGGLE
                if ( !empty($filter['state']) && ( $filter['state'] === 'open' || $filter['state'] === 'closed' ) ) {
                            $toggle = ' search-filter__toggle';
                $arrow = '<div class="search-filter__arrow"><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-right"></i></div>';
                } else {
                    $toggle = '';
                    $arrow = '';
                }

                $html .= '<div class="search-filter' . $closed . $visible .'">';

                if ( !empty($filter['header']) ) {
                    $html .= '<div class="search-filter__header' . $toggle . '">';
                    $html .= '<div class="search-filter__title">' . $filter['header'] . '</div>';
                    $html .= $arrow;
                    $html .= '</div>';
                }

                foreach ($filter['controls'] as $control) {
                    $html .= '<div class="search-filter__control">' . $control . '</div>';
                }

                if ( !empty($filter['footer']) ) {
                    $html .= '<div class="search-filter__footer">' . $filter['footer'] . '</div>';
                }
                $html .= '</div>';

            }
            $html .= '</div>';
            return $html;
        }

        private function _search($options) {
            $filters = (!empty($options['filters']))?$this->_search_filter($options['filters']):'';

            $html = "\n";
            $html .= $filters;

            return $html;

        }

        private function _tags($options) {
            $tags = (!empty($options['tags']))?$this->_applied_tags($options['tags']):'';

            $html = "\n";
            $html .= $tags;

            return $html;
        }

    }


    function createSearch($options = array()) {
        $search = new Search( $options );
        $html = $search->searchHtml();
        return $html;
    }

    function createTags($options = array()) {
        $tags = new Search( $options );
        $html = $tags->tagsHtml();
        return $html;
    }