<?php


function get_sort_attributes ( $data ) {
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
function get_sort_main ( $data ) {
    $sort_title = 'Sort: NAME A - Z';
    if ( !empty( $data->sort_title )) {
        $sort_title .= ( $data->text ) ;
    } else {
        $sort_title .= 'Sort: NAME A - Z';
    }
    return $sort_title;
}

function get_sort_meta ( $data ) {
    $sort_meta = '<ul class="dropdown-menu" role="menu">'. "\n";
    foreach ($data as $li) {
        $sort_meta .= '<li' . ((!empty($li->class))?' class="' . $li->class . '"':'') . '>';
        if ( !empty($li->sort_default) ) {
            $sort_meta .= '<a href="#">' . $li->sort_default . '</a>';
        }
        if ( !empty($li->sort_title) ) {
            $sort_meta .= '<a href="#">' . $li->sort_title . '</a>';
        }
        $sort_meta .= '</li>' . "\n";
    }
    $sort_meta .= '</ul>' . "\n";
    return $sort_meta;
}

function get_sort($options) {
    $defaults = json_decode('{
        "sort_attributes": [
            ["class","active"]
        ]
       
    }',true);

    $options = json_decode($options,true);
    $options = json_decode(json_encode(array_replace_recursive($defaults,$options)), FALSE);

    $sort_attributes = (!empty($options->sort_attributes))?get_sort_attributes( $options->sort_attributes ):'';
    $sort_main = (!empty($options->sort_title))?get_sort_title( $options->sort_title ):'';
    $sort_default = (!empty($options->sort_default))?get_sort_default( $options->sort_default ):'';
    $sort_meta = (!empty($options->sort_meta))?get_sort_meta( $options->sort_meta ):'';

    $html = "\n";
    $html .= '<div class="col-md-3 hidden-xs hidden-sm">' . "\n";
    $html .= ' <div class="section-results-header-sort">' . "\n";
    $html .= '  <div class="dropdown">' . "\n";
    $html .= '<a class="btn btn-default" data-toggle="dropdown" href="#">' .'SORT: NAME A - Z' . $sort_main . '<i class="fa fa-sort"></i></a>' . "\n";                                       
    $html .= $sort_meta;
    $html .= '</div>' . "\n";
    $html .= '</div>' . "\n";
    $html .= '</div>' . "\n\n";
 
    return $html;
}

function include_sort($options) {
    echo get_sort($options);
}

?>
