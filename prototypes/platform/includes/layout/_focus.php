<?php

function include_search_focus_bar($options) {

$focus = $options['focus'];

$class_base = 'fph';
$title = $focus['title'];
$icon = '';
$type = '';
$from = '';
$meta_primary = '';
$meta_secondary = '';
$action = '';
$chart = '';
$supporting = '';
$searchHref = '';
$searchPlaceholder = '';

if ( !empty($focus['searchHref']) ) {
    $searchHref =$focus['searchHref'];
}
if ( !empty($focus['searchPlaceholder']) ) {
    $searchPlaceholder = $focus['searchPlaceholder'];
}

if ( !empty($focus['icon']) && !empty($focus['type']) ) {
$icon = <<<END
<div class="{$class_base}-cell {$class_base}-cell-icon">
    <div class="{$class_base}-icon"><i class="{$focus['icon']}"></i></div>
    <div class="{$class_base}-icon-label"><span>{$focus['type']}</span></div>
</div>
END;
}

if ( !empty($focus['type']) ) {
$type = <<<END
<li class="meta-visible-xs"><span class="meta-type">{$focus['type']}</span></li>
END;
}

if ( !empty($focus['from']) && count($focus['from']) === 3 ) {
$from= <<<END
<li class="meta-hidden-xs"><span class="meta-label">{$focus['from']['type']}</span><a href="{$focus['from']['link']}" class="meta-value">{$focus['from']['title']}</a></li>
END;
}

if ( !empty($focus['from']) || !empty($focus['type']) ) {
$meta_primary = <<<END
<ul class="meta">
    {$from}
    {$type}
</ul>
END;
}

if ( !empty($focus['meta']) ) {
$temp = '';
if ( !empty($focus['from']) ) {
    $temp .= '<li class="meta-visible-xs"><span class="meta-label">'.$focus['from']['type'].'</span><a href="'.$focus['from']['link'].'" class="meta-value">'.$focus['from']['title'].'</a></li>';
}
foreach ($focus['meta'] as $meta) {
    $temp .= '<li><span class="meta-label">'.$meta[0].'</span><span class="meta-value">'.$meta[1].'</span></li>';
}
$meta_secondary = <<<END
<div class="{$class_base}-secondary">
    <ul class="meta">
        {$temp}
    </ul>
</div>
END;
}

if ( !empty($focus['action']) && count($focus['action']) === 2 ) {
$action = <<<END
<div class="{$class_base}-cell {$class_base}-cell-button">
    <a href="{$focus['action']['link']}" class="btn btn-focus">{$focus['action']['label']} <i class="fa fa-chevron-right"></i></a>
</div>
END;
}

if ( !empty($focus['chart']) ) {
$total = 0;
$complete = 0;
$data = json_encode($focus['chart']);
foreach ($focus['chart'] as $segment) {
    $total = $total + $segment[0];
    $complete = $complete + (($segment[1])?$segment[0]:0);
}
$percentage = round($complete / $total * 100);
$chart = <<<END
<div class="{$class_base}-cell {$class_base}-cell-supporting">
    <figure class="{$class_base}-chart-holder">
        <canvas class="{$class_base}-chart" data-type="Doughnut" width="108" height="108" data-segments="{$data}"></canvas>
        <figcaption>{$percentage}%</figcaption>
    </figure>
</div>
END;
}

if ( !empty($focus['supporting']) ) {
$supporting = <<<END
<div class="{$class_base}-cell {$class_base}-cell-supporting">
    {$focus['supporting']}
</div>
END;
}



$template_base = <<<END
<div class="focus focus-pageheader">
    <div class="{$class_base}-separator"></div>
    <div class="{$class_base}-table">
        <div class="{$class_base}-row">
            {$icon}
            <div class="{$class_base}-cell {$class_base}-cell-search-label"> <h1>{$title}</h1></div>
            <div class="fph-cell fph-cell-search-input">
                <form class="primary">
                    <div class="input-group">
                        <input type="text" class="form-control input-lg" placeholder="{$searchPlaceholder}">
                        <span class="input-group-btn">
                            <a href="{$searchHref}" class="btn btn-focus btn-lg" type="button"><i class="fa fa-search fa-lg"></i></a>
                        </span>
                    </div>
                </form>
            </div>
                <div class="{$class_base}-primary">
                    {$supporting}
                    {$meta_primary}
                </div>
                {$meta_secondary}
            </div>
             
            {$action}
            {$chart}
            {$supporting}
        </div>
    </div>
</div>

END;

$focus_html = $template_base;

echo $focus_html;

}


function include_focus_bar($options) {

$focus = $options['focus'];

$class_base = 'fph';
$title = $focus['title'];
$icon = '';
$type = '';
$from = '';
$meta_primary = '';
$meta_secondary = '';
$action = '';
$chart = '';
$supporting = '';
// $searchHref = '';
// $searchPlaceholder = '';

// if ( !empty($focus['searchHref']) ) {
//     $searchHref =$focus['searchHref'];
// }
// if ( !empty($focus['searchPlaceholder']) ) {
//     $searchPlaceholder = $focus['searchPlaceholder'];
// }

// if ( !empty($focus['icon']) && !empty($focus['type']) ) {
// $icon = <<<END
// <div class="{$class_base}-cell {$class_base}-cell-icon">
//     <div class="{$class_base}-icon"><i class="{$focus['icon']}"></i></div>
//     <div class="{$class_base}-icon-label"><span>{$focus['type']}</span></div>
// </div>
// END;
// }

if ( !empty($focus['type']) ) {
$type = <<<END
<li class="meta-visible-xs"><span class="meta-type">{$focus['type']}</span></li>
END;
}

if ( !empty($focus['from']) && count($focus['from']) === 3 ) {
$from= <<<END
<li class="meta-hidden-xs"><span class="meta-label">{$focus['from']['type']}</span><a href="{$focus['from']['link']}" class="meta-value">{$focus['from']['title']}</a></li>
END;
}

if ( !empty($focus['from']) || !empty($focus['type']) ) {
$meta_primary = <<<END
<ul class="meta">
    {$from}
    {$type}
</ul>
END;
}

if ( !empty($focus['meta']) ) {
$temp = '';
if ( !empty($focus['from']) ) {
    $temp .= '<li class="meta-visible-xs"><span class="meta-label">'.$focus['from']['type'].'</span><a href="'.$focus['from']['link'].'" class="meta-value">'.$focus['from']['title'].'</a></li>';
}
foreach ($focus['meta'] as $meta) {
    $temp .= '<li><span class="meta-label">'.$meta[0].'</span><span class="meta-value">'.$meta[1].'</span></li>';
}
$meta_secondary = <<<END
<div class="{$class_base}-secondary">
    <ul class="meta">
        {$temp}
    </ul>
</div>
END;
}

if ( !empty($focus['action']) && count($focus['action']) === 2 ) {
$action = <<<END
<div class="{$class_base}-cell {$class_base}-cell-button">
    <a href="{$focus['action']['link']}" class="btn btn-focus">{$focus['action']['label']} <i class="fa fa-chevron-right"></i></a>
</div>
END;
}

if ( !empty($focus['chart']) ) {
$total = 0;
$complete = 0;
$data = json_encode($focus['chart']);
foreach ($focus['chart'] as $segment) {
    $total = $total + $segment[0];
    $complete = $complete + (($segment[1])?$segment[0]:0);
}
$percentage = round($complete / $total * 100);
$chart = <<<END
<div class="{$class_base}-cell {$class_base}-cell-supporting">
    <figure class="{$class_base}-chart-holder">
        <canvas class="{$class_base}-chart" data-type="Doughnut" width="108" height="108" data-segments="{$data}"></canvas>
        <figcaption>{$percentage}%</figcaption>
    </figure>
</div>
END;
}

if ( !empty($focus['supporting']) ) {
$supporting = <<<END
<div class="{$class_base}-cell {$class_base}-cell-supporting">
    {$focus['supporting']}
</div>
END;
}


$template_base = <<<END
<div class="focus focus-pageheader">
    <div class="{$class_base}-separator"></div>
    <div class="{$class_base}-table">
        <div class="{$class_base}-row">
            {$icon}
            <div class="{$class_base}-cell {$class_base}-cell-text"> 
                <div class="{$class_base}-primary">
                 <h1>{$title}</h1>
                    {$supporting}
                    {$meta_primary}
                </div>
                {$meta_secondary}
            </div>
             
            {$action}
            {$chart}
            {$supporting}
        </div>
    </div>
</div>

END;

$focus_html = $template_base;

echo $focus_html;

}

?>
