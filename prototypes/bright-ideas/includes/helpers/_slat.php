<?php


function get_attributes ( $data ) {
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

function get_title ( $data ) {
    $title = '';
    $badge = '';
    if ( !empty( $data->badge ) ) {
        $badge .= '<span class="badge">' . $data->badge . '</span>';
    }
    if ( !empty( $data->attributes )) {
        $title .= '<form><a' . get_attributes ( $data->attributes ) . '>' . $data->text . '</a></form>' . $badge;
    } else {
        $title .= $data->text . $badge;
    }
    return $title;
}

function get_description ( $data ) {
    return '<div class="description">' . $data .'</div>' . "\n";;
}

function get_meta ( $data ) {
    $meta = '<ul class="meta">'. "\n";
    foreach ($data as $li) {
        $meta .= '<li' . ((!empty($li->class))?' class="' . $li->class . '"':'') . '>';
        if ( !empty($li->type) ) {
            switch(strtolower($li->type)){
                case 'attachment':
                case 'evaluation':
                case 'course':
                case 'curriculum':
                case 'equivalent':
                case 'checklist':
                case 'test':
                case 'video':
                    $icon = '<i class="hs-icons-'.strtolower($li->type).'-sm"></i> ';
                    break;
                case 'live class':
                    $icon = '<i class="hs-icons-class-live-sm"></i> ';
                    break;
                case 'virtual class':
                    $icon = '<i class="hs-icons-class-virtual-sm"></i> ';
                    break;
                case 'online activity':
                    $icon = '<i class="hs-icons-online-sm"></i> ';
                    break;
                case 'profile activity':
                    $icon = '<i class="hs-icons-profile-activity-sm"></i> ';
                    break;
                case 'moc curriculum':
                    $icon = '<i class="hs-icons-curriculum-sm"></i> ';
                    break;
                case 'learning event':
                    $icon = '<i class="hs-icons-learning-event-sm"></i> ';
                    break;
                case 'assessment':
                case 'self assessment':
                    $icon = '<i class="hs-icons-assessment-sm"></i> ';
                    break;
                default:
                    $icon = "";
            }
            $meta .= '<span class="meta-type">'. $icon . $li->type . '</span>';
        }
        if ( !empty($li->label) ) {
            $meta .= '<span class="meta-label">' . $li->label. '</span>';
        }
        if ( !empty($li->value) ) {
            $meta .= '<span class="meta-value">' . $li->value . '</span>';
        }
        $meta .= '</li>' . "\n";
    }
    $meta .= '</ul>' . "\n";
    return $meta;
}

function get_action ( $data ) {
    $action = '';
    if (!empty($data->text)){
        $has_icon = strpos($data->text,'</i>');
        $mobile_icon = (!$has_icon)?' <i class="fa fa-fw fa-chevron-right visible-xs"></i>':'';
    }
    if ( $data->type !== "status") {
        $action .= '<div class="action">';
    }
    switch ( $data->type ) {
        case "link":
            $action .= '<a class="btn btn-sm btn-default"' . get_attributes( $data->attributes ) . '>' . $data->text . $mobile_icon . '</a>' . "\n";
            break;
        case "link-danger":
            $action .= '<a class="btn btn-sm btn-danger"' . get_attributes( $data->attributes ) . '>' . $data->text . ' <i class="fa fa-fw fa-times visible-xs"></i></a>' . "\n";
            break;
        case "link-success":
            $action .= '<a class="btn btn-sm btn-success"' . get_attributes( $data->attributes ) . '>' . $data->text . ' <i class="fa fa-fw fa-plus visible-xs"></i></a>' . "\n";
            break;
        case "link-primary":
            $action .= '<a class="btn btn-sm btn-success"' . get_attributes( $data->attributes ) . '>' . $data->text . $mobile_icon .'</a>' . "\n";
            break;
        case "link-locked":
            $action .= '<a class="btn btn-sm btn-default" disabled><i class="fa fa-lock"></i> Locked</a>' . "\n";
            break;
        case "unchecked":
            $action .= '<a class="btn btn-sm btn-default"><i class="fa fa-plus"></i></a>' . "\n";
            break;
        case "checked":
            $action .= '<a class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>' . "\n";
            break;
        case "button":
            $action .= '<form><button class="btn btn-sm btn-default"' . get_attributes( $data->attributes ) . '>' . $data->text . $mobile_icon . '</button></form>' . "\n";
            break;
        case "status":
            $action .= '<div class="status status-' . $data->icon . '"></div>' . "\n";
            break;
    }
    if ( $data->type !== "status") {
        $action .= '</div>';
    }
    return $action;
}

function get_nested ( $data ) {
    $nested = '<div class="slat-nested">' . "\n";

    if ( !empty($data->show) ) {
        foreach ($data->show as $content) {
            switch( $content->type ){
                case "slat":
                    $nested .= get_slat( json_encode($content->data) );
                    break;

                case "section":
                    $nested .= '<section class="section">' . urldecode($content->data) . '</section>' . "\n";
                    break;
            }
        }
    }

    if ( !empty($data->hide) ) {
        $nested .= '<div class="collapse-group collapse">' . "\n";
        foreach ($data->hide as $content) {
            switch( $content->type ){
                case "slat":
                    $nested .= get_slat( json_encode($content->data) );
                    break;

                case "section":
                    $nested .= '<section class="section">' . urldecode($content->data) . '</section>' . "\n";
                    break;
            }
        }
        $nested .= '</div>' . "\n";
        $nested .= '<a href="#" class="collapse-toggle" data-toggle-text="Show additional information|Hide additional information">Show additional information</a>' . "\n";
    }

    $nested .= '</div>' . "\n";
    return $nested;
}

function get_slat($options) {
    $defaults = json_decode('{
        "attributes": [
            ["class","slat"]
        ],
        "title":{
            "text": "This is a required parameter"
        }
    }',true);

    $options = json_decode($options,true);
    $options = json_decode(json_encode(array_replace_recursive($defaults,$options)), FALSE);

    $slat_attr = (!empty($options->attributes))?get_attributes( $options->attributes ):'';
    $title = (!empty($options->title))?get_title( $options->title ):'';
    $description = (!empty($options->description))?get_description( $options->description ):'';
    $meta = (!empty($options->meta))?get_meta( $options->meta ):'';
    $action = (!empty($options->action))?get_action( $options->action ):'';
    $nested = (!empty($options->nested))?get_nested( $options->nested ):'';

    $html = "\n";
    $html .= '<div' . $slat_attr .'>' . "\n";
    $html .= '<div class="slat-default">' . "\n";
    $html .= '<div class="title">' . $title .'</div>' . "\n";
    $html .= $description;
    $html .= $meta;
    $html .= $action;
    $html .= '</div>' . "\n";
    $html .= $nested;
    $html .= '</div>' . "\n\n";

    return $html;
}

function include_slat($options) {
    echo get_slat($options);
}

?>