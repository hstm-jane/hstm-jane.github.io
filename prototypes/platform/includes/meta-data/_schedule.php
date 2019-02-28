<?php

function makeSlat($item) {
    $selected = (!empty($_REQUEST['selected']) && in_array($item['id'],explode(',',$_REQUEST['selected'])));
    $unselected = ( !empty($item['unselected']) && in_array($item['id'],explode(',',$_REQUEST['unselected'])));
    $disabled = ( !empty($item['disabled']));
    
    if ( $selected ) {
 
    $html = '
    <div class="slat slat-select2 slat-select2-action resource-picker-remove" href="javascript:void(0)" data-id="{{id}}" data-addons="{{addons}}">
        <div class="action">
            <span>{{button}}</span>

        </div>
        <div class="title">{{name}} {{userid}}</div>
        <ul class="meta">
          {{building}}
          {{room}}
          {{department}}
          {{institution}}
          {{availability}}
      </ul>

    </div>'

    // else if { 
    // $html = '
    // <div class="slat slat-select2 slat-select2-action resource-picker-disabled" href="javascript:void(0)" data-id="{{id}}" data-addons="{{addons}}">
   
    //     <div class="title">{{name}} {{userid}}</div>
    //     <ul class="meta">
    //       {{building}}
    //       {{room}}
    //       {{department}}
    //       {{institution}}
    //       {{availability}}
    //   </ul>

    // </div>';}  
 ;}
 else if ( $disabled ) {
    $html = '
    <div class="slat slat-select2 slat-select2-action resource-picker-disabled" style="color: #ccc" href="javascript:void(0)" data-id="{{id}}" data-addons="{{addons}}">
        <div class="action">
            <span>{{button}}</span>

        </div>
        <div class="title">{{name}} {{userid}}</div>
        <ul class="meta">
          {{building}}
          {{room}}
          {{department}}
          {{institution}}
          {{availability}}
      </ul>

    </div>';}  
  else if ( $unselected ) {
    $html = '
    <div class="slat slat-select2 slat-select2-action resource-picker-disabled" data-id="{{id}}" data-addons="{{addons}}">
        <div class="action">
            <span class="hidden">{{button}}</span>

        </div>
        <div class="title">{{name}} {{userid}}</div>
        <ul class="meta">
          {{building}}
          {{room}}
          {{department}}
          {{institution}}
          {{availability}}
      </ul>

    </div>';}  
 
    else {
    $html = '
    <div class="slat slat-select2 slat-select2-action resource-picker-add" data-id="{{id}}" data-addons="{{addons}}">
        <div class="action">
            <span>{{button}}</span>

        </div>
        <div class="title">{{name}} {{userid}}</div>
        <ul class="meta">
          {{building}}
          {{room}}
          {{department}}
          {{institution}}
          {{availability}}
      </ul>

    </div>';}

  $building = ( !empty($item['building']) )?'<li><span class="meta-label">Building:</span><span class="meta-value">'.$_SESSION['data']['buildings'][$item['building']]['name'].'</span></li>':'';
  $room = ( !empty($item['room']) )?'<li><span class="meta-label">Room:</span><span class="meta-value">'.$_SESSION['data']['rooms'][$item['room']]['name'].'</span></li>':'';
  $userid = ( !empty($item['userid']) )?'<span class="meta-value">'.$item['userid'].'</span>':'';
  $department = ( !empty($item['department']) )?'<li><span class="meta-label">Department:</span><span class="meta-value">'.$item['department'].'</span></li>':'';
  $institution = ( !empty($item['institution']) )?'<li><span class="meta-label">institution:</span><span class="meta-value">'.$item['institution'].'</span></li>':'';
  $availability = ( !empty($item['availability']) )?'<br><span class="meta-value meta-value-unavailable">'.$item['availability'].'</span>':'';


    // TODO: this should happen outside of the slat
  $addons = array();
  foreach ($_SESSION['data']['equipment'] as $equipment) {
    if ( $equipment['room'] === $item['id'] ) {
        array_push($addons,$equipment['id']);
    }
}

if ( $selected ) {
    $button = '<i class="icon success fa fa-check"></i>';

} elseif( $disabled ){
    $button = '<i class="icon disabled fa fa-2x fa-ban"></i>';

} elseif( $unselected ){
    $button = '';
}

else {
    $button = '';
}

$html = str_replace('{{button}}', $button , $html);
$html = str_replace('{{id}}', $item['id'] , $html);
$html = str_replace('{{addons}}', implode(',',$addons) , $html);
$html = str_replace('{{name}}', $item['name'] , $html);
$html = str_replace('{{building}}', $building , $html);
$html = str_replace('{{room}}', $room , $html);
$html = str_replace('{{userid}}', $userid , $html);
$html = str_replace('{{department}}', $department , $html);
$html = str_replace('{{institution}}', $institution , $html);
$html = str_replace('{{availability}}', $availability , $html);




return $html;
}

function makeModalSlat($item) {
    $selected = (!empty($_REQUEST['selected']) && in_array($item['id'],explode(',',$_REQUEST['selected'])));
    $html = '
    <div class="slat">
        <div class="slat-default">
            <div class="title">{{name}}</div>
            <ul class="meta">
                {{building}}
                {{room}}
                {{userid}}
            </ul>
            <div class="btn-group" style="text-align:right">
                <span>{{buttons}}</span>
            </div>
        </div>
    </div>';

    $building = ( !empty($item['building']) )?'<li><span class="meta-label">Building:</span><span class="meta-value">'.$_SESSION['data']['buildings'][$item['building']]['name'].'</span></li>':'';
    $room = ( !empty($item['room']) )?'<li><span class="meta-label">Room:</span><span class="meta-value">'.$_SESSION['data']['rooms'][$item['room']]['name'].'</span></li>':'';
    $userid = ( !empty($item['userid']) )?'<li><span class="meta-label">User ID:</span><span class="meta-value">'.$item['userid'].'</span></li>':'';

    // TODO: this should happen outside of the slat
    $addons = array();
    foreach ($_SESSION['data']['equipment'] as $equipment) {
        if ( $equipment['room'] === $item['id'] ) {
            array_push($addons,$equipment['id']);
        }
    }

    if ( $selected ) {
        $buttons = '<a class="btn btn-sm disabled" style="width:auto" href="#" data-id="{{id}}" data-addons="{{addons}}"><i class="fa fa-fw fa-plus"></i></a> <a class="btn btn-sm btn-danger" style="width:auto" href="#" data-id="{{id}}"><i class="fa fa-fw fa-times"></i></a>';
    } else {
        $buttons = '<a class="btn btn-sm btn-success" style="width:auto"  href="#" data-id="{{id}}" data-addons="{{addons}}"><i class="fa fa-fw fa-plus"></i></a> <a class="btn btn-sm btn-danger disabled" style="width:auto" href="#" data-id="{{id}}"><i class="fa fa-fw fa-times"></i></a>';
    }

    $html = str_replace('{{buttons}}', $buttons , $html);
    $html = str_replace('{{id}}', $item['id'] , $html);
    $html = str_replace('{{addons}}', implode(',',$addons) , $html);
    $html = str_replace('{{name}}', $item['name'] , $html);
    $html = str_replace('{{building}}', $building , $html);
    $html = str_replace('{{room}}', $room , $html);
    $html = str_replace('{{userid}}', $userid , $html);
    

    return $html;
}

function makeHorizontalTable($schedule,$items) {

    function getLimits($schedule) {
        $min = $schedule['event'][0];
        $max = $schedule['event'][1];
        $offset = (3600 * 2);
        foreach ($schedule['resources'] as $resource){
            foreach ($resource as $dates) {
                if (!$min || $dates[0] < $min ) {
                    $min = $dates[0];
                }
                if (!$max || $dates[1] > $max ) {
                    $max = $dates[1];
                }
            }
        }
        return array($min - $offset, $max + $offset);
    }

    function getResource($resource, $nested, $table_start, $table_end) {

        global $schedule;

        $html = '<tr'.(($nested)?' class="rth-nested-item"':' class="rth-item"').'>';
        $html .= '<td class="rth-resource">'.(($nested)?'<span class="rth-indent">&rdsh;</span>':'').'<a href="#" class="rth-detail" data-id="'.$resource['id'].'" data-title="'.$resource['name'].'" data-start="'.$schedule['resources'][$resource['id']][0][0].'" data-end="'.$schedule['resources'][$resource['id']][0][1].'">'.$resource['name'].'</a></td>';
        $html .= '<td class="rth-options"><button class="btn btn-xs btn-danger rth-btn-remove" data-id="'.$resource['id'].'"><i class="fa fa-fw fa-times"></i></button></td>';

        $blocks = array();
        $table_now = $table_start;

        while ( $table_now < $table_end ) {
            $time_now = gmdate("g:ia", $table_now);
            $proposed = getProposed($schedule,$resource,$table_now);
            $unavailable = getUnavailable($resource,$table_now);

            if ( !empty($proposed) && !empty($unavailable) ) {
                if ( end($blocks)[0] === 'conflict' ) {
                    $blocks[count($blocks)-1][1]++;
                }
                elseif ( $table_now === $table_start || $time_now === '12:00am' ) {
                    array_push($blocks,array('conflict',1,1));
                }
                else {
                    array_push($blocks,array('conflict',1,0));
                }
            }

            elseif ( !empty($unavailable) ) {
                if ( end($blocks)[0] === 'unavailable' ) {
                    $blocks[count($blocks)-1][1]++;
                }
                elseif ( $table_now === $table_start || $time_now === '12:00am' ) {
                    array_push($blocks,array('unavailable',1,1));
                }
                else {
                    array_push($blocks,array('unavailable',1,0));
                }
            }
            elseif ( !empty($proposed) ) {
                if ( end($blocks)[0] === 'proposed' ) {
                    $blocks[count($blocks)-1][1]++;
                }
                elseif ( $table_now === $table_start || $time_now === '12:00am' ) {
                    array_push($blocks,array('proposed',1,1));
                }
                else {
                    array_push($blocks,array('proposed',1,0));
                }
            }
            else {
                if ( $table_now === $table_start || $time_now === '12:00am' ) {
                    array_push($blocks,array('empty',1,1));
                } else {
                    array_push($blocks,array('empty',1,0));
                }
            }

            $table_now = $table_now + 1800;
        }

        foreach ($blocks as $block) {
            $divider = ($block[2])?' rth-divider':'';
            switch($block[0]){
                case 'conflict':
                $html .= '<td class="rth-block'.$divider.'" colspan="'.$block[1].'"><div class="rth-conflict"><i class="fa fa-warning"></i> Conflict</div></td>';
                break;
                case 'unavailable':
                $html .= '<td class="rth-block'.$divider.'" colspan="'.$block[1].'"><div class="rth-unavailable"><i class="fa fa-times"></i> Unavailable</div></td>';
                break;
                case 'proposed':
                $html .= '<td class="rth-block'.$divider.'" colspan="'.$block[1].'"><div class="rth-proposed"><i class="fa fa-check"></i> Available</div></td>';
                break;
                default:
                $html .= '<td class="rth-block'.$divider.'"></div>';
            }
        }
        $html .= '</tr>';

        return $html;
    }
    function getGroups($resource, $nested, $table_start, $table_end) {

        global $schedule;

        $html = '<tr'.(($nested)?' class="rth-nested-item"':' class="rth-item"').'>';
        $html .= '<td class="rth-resource">'.(($nested)?'<span class="rth-indent">&rdsh;</span>':'').'<a href="#" class="rth-detail" data-id="'.$resource['id'].'" data-title="'.$resource['name'].'" data-start="'.$schedule['resources'][$resource['id']][0][0].'" data-end="'.$schedule['resources'][$resource['id']][0][1].'">'.$resource['name'].'</a></td>';
        $html .= '<td class="rth-options"><button class="btn btn-xs btn-danger rth-btn-remove" data-id="'.$resource['id'].'"><i class="fa fa-fw fa-times"></i></button></td>';

        $blocks = array();
        $table_now = $table_start;

        while ( $table_now < $table_end ) {
            $time_now = gmdate("g:ia", $table_now);
            $proposed = getProposed($schedule,$resource,$table_now);
            $unavailable = getUnavailable($resource,$table_now);

            if ( !empty($proposed) && !empty($unavailable) ) {
                if ( end($blocks)[0] === 'conflict' ) {
                    $blocks[count($blocks)-1][1]++;
                }
                elseif ( $table_now === $table_start || $time_now === '12:00am' ) {
                    array_push($blocks,array('conflict',1,1));
                }
                else {
                    array_push($blocks,array('conflict',1,0));
                }
            }

            elseif ( !empty($unavailable) ) {
                if ( end($blocks)[0] === 'unavailable' ) {
                    $blocks[count($blocks)-1][1]++;
                }
                elseif ( $table_now === $table_start || $time_now === '12:00am' ) {
                    array_push($blocks,array('unavailable',1,1));
                }
                else {
                    array_push($blocks,array('unavailable',1,0));
                }
            }
            elseif ( !empty($proposed) ) {
                if ( end($blocks)[0] === 'proposed' ) {
                    $blocks[count($blocks)-1][1]++;
                }
                elseif ( $table_now === $table_start || $time_now === '12:00am' ) {
                    array_push($blocks,array('proposed',1,1));
                }
                else {
                    array_push($blocks,array('proposed',1,0));
                }
            }
            else {
                if ( $table_now === $table_start || $time_now === '12:00am' ) {
                    array_push($blocks,array('empty',1,1));
                } else {
                    array_push($blocks,array('empty',1,0));
                }
            }

            $table_now = $table_now + 1800;
        }

        foreach ($blocks as $block) {
            $divider = ($block[2])?' rth-divider':'';
            switch($block[0]){
                case 'conflict':
                $html .= '<td class="rth-block'.$divider.'" colspan="'.$block[1].'"><div class="rth-conflict"><i class="fa fa-warning"></i> Conflict</div></td>';
                break;
                case 'unavailable':
                $html .= '<td class="rth-block'.$divider.'" colspan="'.$block[1].'"><div class="rth-unavailable"><i class="fa fa-times"></i> Unavailable</div></td>';
                break;
                case 'proposed':
                $html .= '<td class="rth-block'.$divider.'" colspan="'.$block[1].'"><div class="rth-proposed"><i class="fa fa-check"></i> Available</div></td>';
                break;
                default:
                $html .= '<td class="rth-block'.$divider.'"></div>';
            }
        }
        $html .= '</tr>';

        return $html;
    }

    function getProposed($schedule,$item,$table_now){
        $block_start = $table_now;
        $block_end = $table_now + 1800;
        foreach( $schedule['resources'][$item['id']] as $item_schedule ){
            if ($item_schedule[0] <= $block_end && $item_schedule[1] >= $block_start && $block_end - $item_schedule[0] > 0 && $item_schedule[1] - $block_start > 0) {
                return true;
            }
        }
    }
    function getUnavailable($item,$table_now){
        $block_start = $table_now;
        $block_end = $table_now + 1800;
        if ( !empty($item['bookings']) ) {
            $item_start = false;
            $item_end = false;
            foreach ($item['bookings'] as $booking) {
                if ( !$item_start || $booking['start'] < $item_start ) {
                    $item_start = $booking['start'];
                }
                if ( !$item_end || $booking['end'] > $item_end ) {
                    $item_end = $booking['end'];
                }
            }
            if ($item_start <= $block_end && $item_end >= $block_start && $block_end - $item_start > 0 && $item_end - $block_start > 0) {
                return true;
            }
        }
    }

    // Hack way of forcing a conflict for demo purposes
    if ( array_key_exists('G0', $items) ) {
        $items['G0']['bookings'][0]['start'] = $schedule['event'][0] - 3600;
        $items['G0']['bookings'][0]['end'] = $schedule['event'][1];
    }

    // Find the highest and lowest rounded times for the table
    $table_limits = getLimits($schedule);
    $table_start = $table_limits[0] - ($table_limits[0] % 1800);
    $table_end = $table_limits[1] - ($table_limits[1] % 1800) + (($table_limits[1] % 1800 >= 60)?1800:0);
    $table_blocks = ($table_end - $table_start) / 1800;

    // Find the event range
    $event_start = $schedule['event'][0] - ($schedule['event'][0] % 1800);
    $event_end = $schedule['event'][1] - ($schedule['event'][1] % 1800) + (($schedule['event'][1] % 1800 >= 60)?1800:0);

    $html = '';

    if ( count($items) > 0 ) {

        $table_html = '<table class="rth-table">';
        $table_html .= '<tr><th colspan="2" class="rth-header" data-blocks="'.$table_blocks.'">Resources</th>';

        $days = array();
        $table_now = $table_start;
        while ( $table_now < $table_end ) {
            if ( end($days)[0] === gmdate("D, M j, Y", $table_now) ) {
                $days[count($days)-1][1]++;
            } else {
                array_push($days,array(gmdate("D, M j, Y", $table_now),1));
            }
            $table_now = $table_now + 1800;
        }
        foreach ($days as $day) {
            $table_html .= '<th colspan="'.$day[1].'" class="rth-divider">'.$day[0].'</th>';
        }


        $table_html .= '</tr><tr>';
        $table_html .= '<th colspan="2" class="rth-resource">Name</th>';


        $table_now = $table_start;
        while ( $table_now < $table_end ) {
            $time_now = gmdate("g:ia", $table_now);
            if ( $table_now === $table_start || $time_now === '12:00am' ) {
                $table_html .= '<th class="rth-divider">'.$time_now.'</th>';
            } else {
                $table_html .= '<th>'.$time_now.'</th>';
            }
            $table_now = $table_now + 1800;
        }

        $table_html .= '</tr></thead><tbody class="rth-body">';

        foreach ($items as $resource) {
            $table_html .= getResource($resource, false, $table_start, $table_end);

            if ( !empty($resource['equipment']) ) {
                foreach ($resource['equipment'] as $addon) {
                    $table_html .= getResource($addon, true, $table_start, $table_end);
                }
            }

        }

        $table_html .= '</tbody></table>';

       // $html = '<h2>Resource Availability</h2><div class="rth">' . $table_html . '<div class="rth-loading"></div></div>';
        $html = '<h2>Resource Availability</h2><div class="rth">' . $table_html;
    }

    return $html;
}

function makeDetail($item) {

    $html = '';

    if ( !empty($item['description']) ) {
        $html .= '<section class="section"><h3>Description</h3><p>' . $item['description'] . '</p></section>';
    }
    if ( !empty($item['schedule']) ) {
        $html .= '<section class="section"><h3>Possible Conflicts</h3><ul class="list-unstyled">';
        foreach($item['schedule'] as $schedule) {
            $html .= '<li><div class="alert alert-danger"><strong>'.$_SESSION['data']['events'][$schedule['event']]['name'].'</strong><p>'.date('M, d Y h:i A',$schedule['start']+(3600*5)).' - '.date('M, d Y h:i A',$schedule['end']+(3600*5)).'</p></div></li>';
        }
        $html .= '</ul></section>';
    }

    return $html;
}






?>